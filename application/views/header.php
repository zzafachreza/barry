<!DOCTYPE html>
<html>
<head>
  <base href="">
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <meta name="description" content="Fachreza Maulana Framework">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- area css -->
    <link href="<?php echo site_url() ?>assets/css/pagePreloaders.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/selectize.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/app201027.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/chart.css" rel="stylesheet" type="text/css" />  
    <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>assets/css/app.css">

      <script type="text/javascript" src="<?php echo site_url() ?>assets/js/jquery.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/dataTables.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>
   <script type="text/javascript" src="<?php echo site_url() ?>assets/js/dataTables.fixedColumns.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/notify.js"></script>



  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/pagePreloaders.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/popper.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/selectize.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/bootstrap-datepicker.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/moment.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/chart.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/app201027.js"></script>

          <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

        <!-- Add Firebase products that you want to use -->
        <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>
          <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>
    

    <link rel="manifest" href="<?php echo site_url() ?>manifest.json">

    <!-- area icon -->

  <link rel="shortcut icon" href="<?php echo site_url() ?>assets/images/icon.png" />
</head>

<div id="loader">
  <img src="<?php echo site_url()?>/assets/images/loader.gif" width="200">
</div>
<div id="flash-message-error">
  test
</div>
<div id="flash-message-success">
  test
</div>

<?php
    if(isset($_SESSION['username'])){


 $nav = explode("/", $_SERVER['REQUEST_URI']);

$menu = $nav[2];

$menu_detail = isset($nav[3])?$nav[3]:'';


function tglIndonesia($tgl){
    $tgl = explode("-", $tgl);
    return $tgl[2]."/".$tgl[1]."/".$tgl[0];
  }



# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)
function tglIndonesia2($tanggal){
  $namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
           "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
           
  $tgl=substr($tanggal,8,2);
  $bln=substr($tanggal,5,2);
  $thn=substr($tanggal,0,4);
  $tanggal ="$tgl ".$namaBln[$bln]." $thn";
  return $tanggal;
}

?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="<?php echo site_url() ?>assets/images/logo.svg" width="350" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">


       <li class="nav-item <?php echo $menu=="" ? "active":"" ?>">
        <a class="nav-link" href="<?php echo site_url() ?>">Home <span class="sr-only">(current)</span></a>
      </li>
   
    <?php if ($_SESSION['level']==='ADMIN'): ?>
           <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Master Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="<?php echo site_url('users') ?>">Data Users</a>

        </div>
      </li>
    <?php endif ?>
    

      <li class="nav-item <?php echo $menu=="laporanhd" ? "active":"" ?>">
        <a class="nav-link" href="<?php echo site_url('laporan') ?>">Laporan Observasi<span class="sr-only">(current)</span></a>
      </li>


    </ul>
    <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hallo,<strong> <?php echo $_SESSION['nama_lengkap']." ( ".$_SESSION['level']." )" ?></strong></a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url() ?>login/ubah">Setting User</a>
        <a class="dropdown-item" href="<?php echo site_url() ?>login/logout">Logout</a>
      </div>
    </li>
  </ul>
  </div>
</nav>

<?php
  }
?>


<style type="text/css">
  body{
    font-size: small;
  }
    table{
    font-size: x-small;
  }
</style>
