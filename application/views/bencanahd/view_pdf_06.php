<?php


$mpdf = new \Mpdf\Mpdf(['format' => 'Legal-L']);

function tglIndonesia2($tanggal){
  $namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
           "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
           
  $tgl=substr($tanggal,8,2);
  $bln=substr($tanggal,5,2);
  $thn=substr($tanggal,0,4);
  $tanggal ="$tgl ".$namaBln[$bln]." $thn";
  return $tanggal;
}

$html = '<table style="width: 100%" style="font-size: small;border:1px solid;border-collapse: collapse">';
$html .='<thead>';

$html .='</thead>';


$html .='<tbody>';

$html .='</tbody>';

$html .='</table>';



$mpdf->WriteHTML($html);
$mpdf->Output();

$mpdf->WriteHTML($html);
$mpdf->Output();


?>