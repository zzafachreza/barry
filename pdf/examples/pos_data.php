<?php
session_start();
include_once 'lib.php';
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL brgport
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL brgport
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');
$users = $_SESSION['nm_user'];
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Invoice CS - II Bandung');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' ', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 8);


// add a page
$pdf->AddPage();
$host="localhost";
$db="inventory";
$user="root";
$pass="";

$conn= new PDO("mysql:host=$host;dbname=$db",$user,$pass);


// create some HTML content
$subtable = '<table border="1" cellspacing="6" cellpadding="4"><tr><td>a</td><td>b</td></tr><tr><td>c</td><td>d</td></tr></table>';

$kd = $_GET['id'];

$sql = $conn->query("SELECT * FROM pos where kd_pos='$kd'");
  $row = $sql->fetch();

  $tgl = $row['tgl'];


//untuk hitung garansi
$gar = explode(' ', $row['garansi']);

$gar[0];

$a = "select AddDate('$tgl',Interval $gar[0] Year) as tgl from pos where kd_pos='$kd'";


$sqlD=$conn->query($a);

$rD = $sqlD->fetch();

$next = $rD['tgl'];

///////


            if ($row['tipe_disc']=="PERCENTED") {
                              $disc = $row['disc']." %"." (Percented)";
                            }else{
                              $disc = number_format($row['disc'])." (Amount)";
                            }

$style = array(
    'position' => '',
    'align' => 'C',
    'stretch' => false,
    'fitwidth' => true,
    'cellfitalign' => '',
    'border' => false,
    'hpadding' => 'auto',
    'vpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255),
    'text' => true,
    'font' => 'helvetica',
    'fontsize' => 5,
    'stretchtext' => 3
);
$pdf->Cell(0, 0, '', 0, 1);
$pdf->write1DBarcode($row['kd_pos'], 'C128A', '', '', '', 12, 0.3, $style, 'N');

$pdf->Ln();


$html = '<h2>Transaction(NEW)</h2>
    <table border="0.5" width="100%" cellpadding="5">
              <tr>
                 <td bgcolor="#DCDCDC">Kode Trans</td>
                 <td>'.$row['kd_pos'].'</td>
                  <td bgcolor="#DCDCDC">Plat Nomor</td>
                 <td>'.$row['plat'].'</td>
               </tr>
               <tr>
                 <td bgcolor="#DCDCDC">Tanggal</td>
                 <td>'.Indonesia2Tgl($tgl).'</td>
                 <td bgcolor="#DCDCDC">Nama</td>
                 <td>'.$row['nama'].'</td>
               </tr>
               <tr>
                 <td bgcolor="#DCDCDC">No. Telp</td>
                 <td>'.$row['no_tlp'].'</td>
                  <td bgcolor="#DCDCDC">Alamat</td>
                 <td>'.$row['alamat'].'</td>
               </tr>
             </table>
        <hr><table width="100%" border="0"><tr><td></td><td></td></tr><tr><td></td><td></td></tr></table>';
$html .= '

<table border="0.5" cellpadding="7" style="border-collapse: collapse;">
                  <tr bgcolor="silver">
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>Kategori</th>
                        <th>Jenis</th>
                    </tr>
                    </thead>
                    <tbody>';

$html .='<tr>
            <td>'.$row['merk'].'</td>
            <td>'.$row['tipe'].'</td>
            <td>'.$row['cat'].'</td>
            <td>'.$row['jenis'].'</td>
            </tr>
            ';
 $html .='</tbody></table>
<br><table width="100%" border="0"><tr><td></td><td></td></tr><tr><td></td><td></td></tr></table>

<table border="0.5" cellpadding="7" style="border-collapse: collapse;">
                  <tr bgcolor="silver">
                        <th>Treatment</th>
                        <th>Harga</th>
                        <th>Garansi</th>
                        <th>tipe Pembayaran</th>
                    </tr>
                    </thead>
                    <tbody>';

$html .='<tr>
            <td>'.$row['jasa'].'</td>
            <td>'.number_format($row['harga']).'</td>
            <td>'.$row['garansi'].' sampai ('.Indonesia2Tgl($next).')</td>
            <td>'.$row['tipe_pay'].'</td>
            </tr>
            ';
 $html .='</tbody></table>
<br>
<table width="100%" border="0"><tr><td></td><td></td></tr><tr><td></td><td></td></tr></table>
<table style="font-size:15px" border="0" cellpadding="7">
    
  <tr >
  <th colspan="2">&nbsp;</th>
    <th colspan="2">&nbsp;</th>
   <th bgcolor="silver" colspan="2">Harga</th>
   <th bgcolor="silver" align="center" colspan="2">'.number_format($row['harga']).'</th>
  </tr>
   <tr>
  <th colspan="2">&nbsp;</th>
    <th colspan="2">&nbsp;</th>
   <th colspan="2">Disc(%/Value)</th>
   <th align="center" colspan="2">'.$disc.'</th>
  </tr>
  <tr>
   <th colspan="2">&nbsp;</th>
    <th colspan="2">&nbsp;</th>
     <th bgcolor="silver" colspan="2">Disc</th> 
     <th bgcolor="silver" align="center" colspan="2">('.number_format($row['discA']).')</th>
  </tr>
  <tr>
      <th colspan="2">&nbsp;</th>
    <th colspan="2">&nbsp;</th>
   <th colspan="2">Total Harga</th>
   <th align="center" colspan="2">Rp. '.number_format($row['total']).'</th>
  </tr>
  <tr>
      <th colspan="2">&nbsp;</th>
    <th colspan="2">&nbsp;</th>
   <th align="center" colspan="4"><i>*'.angkaTerbilang($row['total']).'rupiah</i></th>
  </tr>


</table> 

<table width="100%" border="0"><tr><td></td><td></td></tr><tr><td></td><td></td></tr></table>

<hr>   
<br> 
<table width=100%>
  <tr>
    <td align="center" colspan="4">Mengetahui, <br></td>
    <td align="center" colspan="4">Mengetahui, <br></td>
  </tr>
  <tr>
    <td align="center" colspan="4"><br /><br /><br /><br /><br />
      ( ...................................... )<br /><br /><br /></td>
    <td align="center" colspan="4"><br /><br /><br /><br /><br />
         ( ..............'.$users.'............ )<br />
    </td>
  </tr>
</table>';
//output the HTML content
$pdf->writeHTML($html."<br/><hr>", true, false, true, false, '');

$style = array(
  'border' => false,
  'vpadding' => false,
  'hpadding' => false,
  'fgcolor' => array(0,0,0),
  'bgcolor' => false, //array(255,255,255)
  'module_width' => 1, // width of a single module in points
  'module_height' => 1 // height of a single module in points
);

// QRCODE,L : QR-CODE Low error correction
$pdf->write2DBarcode($row['kd_pos'], 'QRCODE,H', 170, 230, 30, 30, $style, 'N');
//Print some HTML Cells


// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

// add a page




// add a pag

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// test custom bullet points for list

// add a page

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('data-masuk.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
