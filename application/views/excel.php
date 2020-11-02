<?php

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=laporan.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");


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

?>
<style type="text/css">
	.num {
            mso-number-format:General;
          }
          .text{
            mso-number-format:"\@";/*force text*/
          }
</style>

  <table style="width: 100%"
              style="font-size: small"
              border="1">
  <thead>
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Tanggal Laporan</th>
        <th>Jenis Laporan</th>
        <th>Elemen HSE</th>
        <th>Area</th>
        <th>Lokasi</th>
        <th>Nomor Karyawan</th>
        <th>Nama Lengkap</th>
        <th>Deskripsi</th>
        <th>Rekomendasi</th>
        <th>PIC</th>
        <th>Tanggal Target</th>
        <th>Status</th>
        <th>Foto1</th>
        <th>Foto2</th>
        <th>Foto3</th>
        <th>Foto4</th>
     </tr>
  </thead>


  <?php

$style = "";
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

                       $style = "style='display:none'";
                     
                     }else{

                       $style = "";

                     }
            

              }
   

        ?>

          <tr <?php echo $style ?>>
            <td><?php echo $j+1; ?></td>
            <td class="text"><?php echo $dataDetail[$j] ?></td>
            <td><?php echo $dataDetailFix['tgl']; ?></td>
            <td><?php echo $dataDetailFix['laporan']; ?></td>
            <td><?php echo $dataDetailFix['elemen']; ?></td>
            <td><?php echo $dataDetailFix['area']; ?></td>
            <td><?php echo $dataDetailFix['lokasi']; ?></td>
            <td class="text"><?php echo $dataDetailFix['nomorKaryawan']; ?></td>
            <td><?php echo $dataDetailFix['namaLengkap']; ?></td>
            <td><?php echo $dataDetailFix['desc']; ?></td>
            <td><?php echo $dataDetailFix['rekomendasi']; ?></td>
            <td><?php echo $dataDetailFix['pic']; ?></td>
            <td><?php echo $dataDetailFix['tanggaltarget']; ?></td>
            <td><?php echo $dataDetailFix['status']; ?></td>
 


                   <td width="100" height="100">
                   	 <?php if ($dataDetailFix['photo1'] !=="null"): 

                   	  base64_to_jpeg($dataDetailFix['photo1'],'upload/'.$dataDetail[$j].'4.jpg');

                   	?>
             			<img src="<?php  echo site_url().'upload/'.$dataDetail[$j].'1.jpg';  ?>" width="100" height="100" />
              	   <?php endif ?>
             		</td>

             		       <td width="100">
                   	 <?php if ($dataDetailFix['photo2'] !=="null"): 

                   	  base64_to_jpeg($dataDetailFix['photo2'],'upload/'.$dataDetail[$j].'4.jpg');

                   	?>
             			<img src="<?php  echo site_url().'upload/'.$dataDetail[$j].'2.jpg';  ?>" width="100" height="100" />
              	   <?php endif ?>
             		</td>

             		       <td width="100">
                   	 <?php if ($dataDetailFix['photo3'] !=="null"): 

                   	  base64_to_jpeg($dataDetailFix['photo3'],'upload/'.$dataDetail[$j].'4.jpg');

                   	?>
             			<img src="<?php  echo site_url().'upload/'.$dataDetail[$j].'3.jpg';  ?>" width="100" height="100" />
              	   <?php endif ?>
             		</td>

             		       <td width="100">
                   	 <?php if ($dataDetailFix['photo4'] !=="null"): 

                   	  base64_to_jpeg($dataDetailFix['photo4'],'upload/'.$dataDetail[$j].'4.jpg');

                   	?>
             			<img src="<?php  echo site_url().'upload/'.$dataDetail[$j].'4.jpg';  ?>" width="100" height="100" />
              	   <?php endif ?>
             		</td>




          </tr>

        <?php


      }
      
  }

  ?>

  <tbody>
    

  </tbody>
</table>
</div>
