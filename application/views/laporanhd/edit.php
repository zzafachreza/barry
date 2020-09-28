<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('laporanhd') ?>"><?php  echo ucfirst('laporanhd') ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Edit</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('laporanhd/update') ?>" method="POST" >

	<a href="<?php echo site_url('laporanhd') ?>" class="AppButton-dark"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		<button class="AppButton-secondary" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button class="AppButton-primary" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>


<?php if ($_SESSION['level']==='MANTRI'): ?>
	<a onclick="return confirm('Apakah Anda sudah yakin selesaikan ini ?\nData jika sudah selesai tidak bisa diubah')" href="<?php echo site_url('laporanhd') ?>/update_status/<?php echo $ID_LAPORANHD = $laporanhd['ID_LAPORANHD'] ?>/CEK" class="btn btn-warning"><i class="flaticon-paper-plane"></i> Selesai</a>

<?php endif ?>

<?php if ($_SESSION['level']==='SUP'): ?>
		<a onclick="return confirm('Apakah Anda sudah yakin selesaikan ini ?\nData jika sudah selesai tidak bisa diubah')" href="<?php echo site_url('laporanhd') ?>/update_status/<?php echo $ID_LAPORANHD = $laporanhd['ID_LAPORANHD'] ?>/DONE" class="btn btn-warning"><i class="flaticon-paper-plane"></i> Selesai</a>

<?php endif ?>

<?php if ($_SESSION['level']==='ADMIN'): ?>

	<a onclick="return confirm('Apakah Anda sudah yakin selesaikan ini ?\nData jika sudah selesai tidak bisa diubah')" href="<?php echo site_url('laporanhd') ?>/update_status/<?php echo $ID_LAPORANHD = $laporanhd['ID_LAPORANHD'] ?>/CEK" class="btn btn-warning"><i class="flaticon-paper-plane"></i> Selesai MANTRI</a>

		<a onclick="return confirm('Apakah Anda sudah yakin selesaikan ini ?\nData jika sudah selesai tidak bisa diubah')" href="<?php echo site_url('laporanhd') ?>/update_status/<?php echo $ID_LAPORANHD = $laporanhd['ID_LAPORANHD'] ?>/DONE" class="btn btn-primary"><i class="flaticon-paper-plane"></i> Selesai SUP</a>

<?php endif ?>
  	

  

	  </div>
	  	<div class="card-body">
	  		<form>

	  			<center>

	  			<h4>LAPORAN KERUSAKAN JARINGAN IRIGASI</h4>
	  			  <div class="form-group col col-sm-3">
				    <label for="nama_laporanhd" class="AppLabel">TANGGAL</label>
				    <input type="hidden" name="id" value="<?php echo $ID_LAPORANHD = $laporanhd['ID_LAPORANHD'] ?>">
				    <i class="flaticon-event-calendar-symbol iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="TANGGAL" class="AppInput tgl" id="TANGGAL"  value="<?php echo tglIndonesia($laporanhd['TANGGAL']) ?>">
				  </div>

	  		</center>
	  		
	  
			 

			<div class="row">
				 <div class="col-sm-6">
			 	 <div class="form-group col col-sm-12">
				    <label for="DAERAH_IRIGASI" class="AppLabel">DAERAH_IRIGASI</label>
				    <i class="flaticon2-position iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="DAERAH_IRIGASI" class="AppInput" id="DAERAH_IRIGASI" value="<?php echo $laporanhd['DAERAH_IRIGASI'] ?>" >
				  </div>

				   <div class="form-group col col-sm-12">
				    <label for="LUAS_AREA_IRIGASI" class="AppLabel">LUAS_AREA_IRIGASI</label>
				    <i class="flaticon2-arrow-1 iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="LUAS_AREA_IRIGASI" class="AppInput" id="LUAS_AREA_IRIGASI" value="<?php echo $laporanhd['LUAS_AREA_IRIGASI'] ?>" >
				  </div>

				  <div class="form-group col col-sm-12">
				    <label for="TINGKATAN_IRIGASI" class="AppLabel">TINGKATAN_IRIGASI</label>
				    <i class="flaticon2-indent-dots iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="TINGKATAN_IRIGASI" class="AppInput" id="TINGKATAN_IRIGASI" value="<?php echo $laporanhd['TINGKATAN_IRIGASI'] ?>" >
				  </div>
			 </div>

			 <div class="col-sm-6">
			 	 <div class="form-group col col-sm-12">
				    <label for="KABUPATEN" class="AppLabel">KABUPATEN</label>
				    <i class="flaticon2-menu-4 iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="KABUPATEN" class="AppInput" id="KABUPATEN" value="<?php echo $laporanhd['KABUPATEN'] ?>" >
				  </div>

				  <div class="form-group col col-sm-12">
				    <label for="RANTING" class="AppLabel">RANTING</label>
				    <i class="flaticon2-console iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="RANTING" class="AppInput" id="RANTING" value="<?php echo $laporanhd['RANTING'] ?>" >
				  </div>

				  <div class="form-group col col-sm-12">
				    <label for="MANTRI" class="AppLabel">MANTRI</label>
				    <i class="flaticon2-user iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="MANTRI" class="AppInput" id="MANTRI" value="<?php echo $laporanhd['MANTRI'] ?>" >
				  </div>
			 </div>

			</div>



			</form>

			<hr/>

		
			<div id="dataLaporan">
				
			</div>


 
				
		


		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>

	<script type="text/javascript">
				getDataDetail('<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>');
			</script>

