<?php


require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$factory = (new Factory)->withServiceAccount('./secret/e-obervation-report-2e82e805ecba.json');


 $database = $factory->createDatabase();

 $data = $database->getReference('laporan')->getChildKeys();


function base64_to_jpeg($base64_string, $output_file) {
							    // open the output file for writing
							    $ifp = fopen( $output_file, 'wb' ); 

							    // split the string on commas
							    // $data[ 0 ] == "data:image/png;base64"
							    // $data[ 1 ] == <actual base64 string>
							    $data = explode( ',', $base64_string );

							    // we could add validation here with ensuring count( $data ) > 1
							    fwrite( $ifp, base64_decode( $data[ 1 ] ) );

							    // clean up the file resource
							    fclose( $ifp ); 

							    return $output_file; 
							}


                            $mpdf = new \Mpdf\Mpdf(['format' => 'Legal-L']);


$html="";
  

  $html .='<table style="width: 100%" style="font-size: small;border:1px solid;border-collapse: collapse">
  <th style="border:1px solid black"ead>
      <tr>
        <th style="border:1px solid black">No</th>
        <th style="border:1px solid black">Kode</th>
        <th style="border:1px solid black">Tanggal Laporan</th>
        <th style="border:1px solid black">Jenis Laporan</th>
        <th style="border:1px solid black">Elemen HSE</th>
        <th style="border:1px solid black">Area</th>
        <th style="border:1px solid black">Lokasi</th>
        <th style="border:1px solid black">Nomor Karyawan</th>
        <th style="border:1px solid black">Nama Lengkap</th>
        <th style="border:1px solid black">Deskripsi</th>
        <th style="border:1px solid black">Rekomendasi</th>
        <th style="border:1px solid black">PIC</th>
        <th style="border:1px solid black">Tanggal Target</th>
        <th style="border:1px solid black">Status</th>
        <th style="border:1px solid black">Foto1</th>
        <th style="border:1px solid black">Foto2</th>
        <th style="border:1px solid black">Foto3</th>
        <th style="border:1px solid black">Foto4</th>
     </tr>
  </thead>
  <tbody>';

$style='';
for ($i=0; $i < count($data) ; $i++) { 



  $dataDetail = $database->getReference('laporan/'.$data[$i])->getChildKeys();

  // print_r($dataDetail);

  for ($j=0; $j < count($dataDetail) ; $j++) { 

    $dataDetailFix = $database->getReference('laporan/'.$data[$i].'/'.$dataDetail[$j])->getValue();

    
             if (!empty($_GET['laporan'])) {
           # code...

                $laporan = $_GET['laporan'];


                     if ($dataDetailFix['laporan']!==$laporan) {
                       # code...
                        $style='style="style="display:none"';
                     
                     }else{


                      $style="";        

                     }
            

              }


               $html.='<tr '.$style.'><td style="border:1px solid black">'. ($j+1).'</td>
                              <td style="border:1px solid black">'. $dataDetail[$j].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['tgl'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['laporan'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['elemen'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['area'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['lokasi'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['nomorKaryawan'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['namaLengkap'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['desc'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['rekomendasi'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['pic'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['tanggaltarget'].'</td>
                              <td style="border:1px solid black">'. $dataDetailFix['status'].'</td>
                              <td style="border:1px solid black" width="100" height="100"><img src="'.$dataDetailFix['photo1'].'" width="100" height="100" /></td>
                              <td style="border:1px solid black" width="100" height="100"><img src="'.$dataDetailFix['photo2'].'" width="100" height="100" /></td>
                              <td style="border:1px solid black" width="100" height="100"><img src="'.$dataDetailFix['photo3'].'" width="100" height="100" /></td>
                              <td style="border:1px solid black" width="100" height="100"><img src="'.$dataDetailFix['photo4'].'" width="100" height="100" /></td></tr>';        

          }

      }


$html.='  </tbody>
</table>';


$mpdf->WriteHTML($html);
$mpdf->Output();

?>