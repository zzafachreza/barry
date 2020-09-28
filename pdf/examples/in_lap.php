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
require_once('tcpdf_include2.php');
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

$q = $_GET['q'];

 $a = explode("/", $q);
 
 $tot = $a[3];
  $disc = $a[2];
   $hrg = $a[1];
    $all = $a[0];

    $b = explode("tgl", $tot);

      $period =  str_replace('between', 'Periode', $b[1]);


           //untuk total harga
             $sql1 =$conn->query($hrg);
              $h = $sql1->fetch();
              $hrg = $h['jml_hrg'];

           //untuk total discount
              $sql2 =$conn->query($disc);
              $d = $sql2->fetch();
              $disc = $d['jml_qty'];
          //untuk grand total
               $sql3 =$conn->query($tot);
              $t = $sql3->fetch();
              $tot = $t['jml_tot'];


        


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

$p = explode("s/d",str_replace('and', 's/d', $period));
$html = '<h2>Laporan Barang Masuk '.$p[0].'sampai'.$p[1].'</h2>
    <table border="0.5" width="100%" cellpadding="5">
              
             </table>
        <hr><table width="100%" border="0"><tr><td></td><td></td></tr><tr><td></td><td></td></tr></table>';
$html .= '

<table border="0.5" cellpadding="5" style="font-size:10px;border-collapse: collapse;">
                  <tr bgcolor="silver">
                       <th>Tanggal</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Sub Total</th>
                    </tr>
                    </thead>
                    <tbody>';
  $noD=1;
  $sql = $conn->query($all);
    while($r = $sql->fetch()){   
$a1 = $r['tgl'];
$a2 = $r['kd_brg'];  
$a3 = $r['nm_brg'];         
$a4 = number_format($r['harga']);; 
$a5 = number_format($r['qty']);
$a6 = number_format($r['sub_total']);


$html .='<tr>
            <td>'.$a1.'</td>
            <td>'.$a2.'</td>
            <td>'.$a3.'</td>
            <td>'.$a4.'</td>
            <td>'.$a5.'</td>
            <td>'.$a6.'</td>  
            </tr>
            ';

 $noD++;}


 $html .='</tbody></table>
<br><table width="100%" border="0"><tr><td></td><td></td></tr><tr><td></td><td></td></tr></table>';
 $html .='<br>
<table width="100%" border="0"><tr><td></td><td></td></tr><tr><td></td><td></td></tr></table>
<table style="font-size:15px" border="0" cellpadding="7">
    

  <tr>
   <th colspan="2">&nbsp;</th>
    <th colspan="2">&nbsp;</th>
     <th colspan="2">Jumlah</th> 
     <th align="center" colspan="2">'.number_format($disc).'</th>
  </tr>
  <tr>
      <th colspan="2">&nbsp;</th>
    <th colspan="2">&nbsp;</th>
   <th bgcolor="silver" colspan="2">Total Harga</th>
   <th bgcolor="silver" align="right" colspan="2">Rp. '.number_format($tot).'</th>
  </tr>
  <tr>
      <th colspan="2">&nbsp;</th>
    <th colspan="2">&nbsp;</th>
   <th align="center" colspan="4"><i>*'.angkaTerbilang($tot).'rupiah</i></th>
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
