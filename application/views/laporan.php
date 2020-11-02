<?php
error_reporting(0);
require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$factory = (new Factory)->withServiceAccount('./secret/e-obervation-report-2e82e805ecba.json');


 $database = $factory->createDatabase();

 $data = $database->getReference('laporan')->getChildKeys();


 



?>


<div class="container-fluid">

  <form>
 <div class="row">

      <div class="col col-sm-4">
          <select class="form-control" name="laporan">
            <option value="">...</option>
            <option <?php echo isset($_GET['laporan'])==='Continues Improvement'?'selected':'' ?>>Continues Improvement</option>
              <option <?php echo $_GET['laporan']==='Near Miss'?'selected':'' ?> >Near Miss</option>
                <option <?php echo $_GET['laporan']==='GMP'?'selected':'' ?> >GMP</option>
                 <option <?php echo $_GET['laporan']==='5S'?'selected':'' ?> >5S</option>
                  <option <?php echo $_GET['laporan']==='Security Issue'?'selected':'' ?> >Security Issue</option>
                   <option value="Unsafe Behavior" <?php echo $_GET['laporan']==='Unsafe Behavior'?'selected':'' ?> >Observation - Unsafe Behavior</option>
                    <option value="Unsafe Condition" <?php echo $_GET['laporan']==='Unsafe Condition'?'selected':'' ?> >Observation - Unsafe Condition</option>
                     <option value="Safe Behavior" <?php echo $_GET['laporan']==='Safe Behavior'?'selected':'' ?> >Observation - Safe Behavior</option>
                      <option value="Safe Condition" <?php echo $_GET['laporan']==='Safe Condition'?'selected':'' ?> >Observation - Safe Condition</option>
          </select>
        </div>
       <div class=" col col-sm-4">
          <button class="btn btn-secondary">SEARCH</button>
        </div>
         </form>

          <div class=" col col-sm-2">
            <a href="laporan/excel?laporan=<?php echo isset($_GET['laporan'])?$_GET['laporan']:'' ?>" class="btn btn-success col-sm-12">EXCEL</a>
          </div>
          <div class=" col col-sm-2">
             <a href="laporan/pdf?laporan=<?php echo isset($_GET['laporan'])?$_GET['laporan']:'' ?>" class="btn btn-danger col-sm-12">PDF</a>
          </div>
  
 </div>





  <hr/>
  <table class="table tabza">
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
        <th>Foto</th>
        <th></th>
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

               echo $laporan = $_GET['laporan'];


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
            <td><?php echo $dataDetail[$j] ?></td>
            <td><?php echo $dataDetailFix['tgl']; ?></td>
            <td><?php echo $dataDetailFix['laporan']; ?></td>
            <td><?php echo $dataDetailFix['elemen']; ?></td>
            <td><?php echo $dataDetailFix['area']; ?></td>
            <td><?php echo $dataDetailFix['lokasi']; ?></td>
            <td><?php echo $dataDetailFix['nomorKaryawan']; ?></td>
            <td><?php echo $dataDetailFix['namaLengkap']; ?></td>
            <td><?php echo $dataDetailFix['desc']; ?></td>
            <td><?php echo $dataDetailFix['rekomendasi']; ?></td>
            <td><?php echo $dataDetailFix['pic']; ?></td>
            <td><?php echo $dataDetailFix['tanggaltarget']; ?></td>
            <td><?php echo $dataDetailFix['status']; ?></td>
             <td>

                <?php if ($dataDetailFix['photo1'] !=="null"): ?>
                     <a style="float: left;display: inline-block;" class="LihatGambar" data-gambar="<?php echo $dataDetailFix['photo1']; ?>"><img src="<?php echo $dataDetailFix['photo1']; ?>" alt="photo1" width="50" height="50" /> </a>
                <?php endif ?>

                   <?php if ($dataDetailFix['photo2'] !=="null"): ?>
                     <a style="float: left;display: inline-block;" class="LihatGambar" data-gambar="<?php echo $dataDetailFix['photo2']; ?>"><img src="<?php echo $dataDetailFix['photo2']; ?>" alt="photo2" width="50" height="50" /> </a>
                <?php endif ?>


                   <?php if ($dataDetailFix['photo3'] !=="null"): ?>
                     <a style="float: left;display: inline-block;" class="LihatGambar" data-gambar="<?php echo $dataDetailFix['photo3']; ?>"><img src="<?php echo $dataDetailFix['photo3']; ?>" alt="photo3" width="50" height="50" /> </a>
                <?php endif ?>


                   <?php if ($dataDetailFix['photo4'] !=="null"): ?>
                     <a style="float: left;display: inline-block;" class="LihatGambar" data-gambar="<?php echo $dataDetailFix['photo4']; ?>"><img src="<?php echo $dataDetailFix['photo4']; ?>" alt="photo4" width="50" height="50" /> </a>
                <?php endif ?>
              
              
             </td>

             <td>
               <button data-uid='<?php $data[$i] ?>' data-id='<?php echo $dataDetail[$j]  ?>' class='hapus btn btn-danger btn-sm'>Hapus Permanent</button>
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


<script type="text/javascript">


            $(".LihatGambar").click(function (e) {
                e.preventDefault();
                var gambar = $(this).attr("data-gambar");
                debugBase64(gambar);
                // console.log(gambar);
              });
     


   function debugBase64(base64URL) {
            var win = window.open();
            win.document.write(
              '<iframe src="' +
                base64URL +
                '" frameborder="0" style="border:0; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%;" allowfullscreen></iframe>'
            );
          }


            $(".hapus").click(function (e) {
              e.preventDefault();
              var uid = $(this).attr("data-uid");
              var id = $(this).attr("data-id");

              // console.log(uid + id);

              // firebase
              //   .database()
              //   .ref("laporan/" + uid + "/" + id + "/")
              //   .remove();


            });
</script>