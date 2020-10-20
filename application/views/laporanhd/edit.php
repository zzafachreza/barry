<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('laporanhd') ?>"><?php  echo ucfirst('laporanhd') ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Edit</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
			<?php

			error_reporting(0);

	  				if ($_SESSION['level']==='MANTRI') {
	  					# code...
	  					$KOLOM = 'TANGGAL_1';
	  					$STATUS_LAPORANHD ='CEK';

	  				}elseif($_SESSION['level']==='SUP'){
						$KOLOM = 'TANGGAL_2';
						$STATUS_LAPORANHD ='DONE';
	  				}elseif($_SESSION['level']==='SEKSI IRIGASI'){
							$KOLOM = 'TANGGAL_3';
							$STATUS_LAPORANHD ='OKE';
	  				}elseif($_SESSION['level']==='ADMIN'){
							$KOLOM = 'TANGGAL_3';
							$STATUS_LAPORANHD ='OKE';
	  				}

	  			?>
<form action="<?php echo site_url('laporanhd/update_selesai') ?>" method="POST">
	<div class="row">
	
	  			<div class="form-group col col-sm-3">
				    <label for="nama_laporanhd" class="AppLabel">TANGGAL SELESAI</label>
				    <input type="hidden" name="id" value="<?php echo $ID_LAPORANHD = $laporanhd['ID_LAPORANHD'] ?>">
				    <i class="flaticon-event-calendar-symbol iconInput"></i>

				
				    	 <input autocomplete="off" required="required" type="text" name="VALUE" class="AppInput tgl" value="<?php echo date('d/m/Y') ?>" >

				    	
				
				   

				    <input autocomplete="off" required="required" type="hidden" name="KOLOM" class="AppInput" value="<?php echo $KOLOM ?>" >

				    <input autocomplete="off" required="required" type="hidden" name="STATUS_LAPORANHD" class="AppInput" value="<?php echo $STATUS_LAPORANHD ?>" >

				  </div>
				 <?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='ADMIN'): ?>

				 	<input type="hidden" name="STATUS_ALL" value="SELESAI">
				 	
			

				 <?php endif ?>

				  <div class="form-group col col-sm-3">
		
				  		<button onclick="return confirm('Apakah Anda yakin akan menyimpan ini ? \nData tidak dapat diubah lagi jika sudah selesai')" type="SUBMIT" class="btn btn-danger" style="height: 100%;width: 100%"><i class="flaticon-paper-plane"></i> Selesai</button>
				

				  </div>
</div>

</form>

	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('laporanhd/update') ?>" method="POST" >

	<a href="<?php echo site_url('laporanhd') ?>" class="AppButton-dark"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		<button class="AppButton-secondary" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button class="AppButton-primary" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>



  	

  

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



<?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='SUP'): ?>
	<script type="text/javascript">
		
				getDataDetail('<?php echo site_url()."/laporanhd/edit_detail3/".$ID_LAPORANHD ?>');
				
			</script>
	
<?php else: ?>
			<script type="text/javascript">

				$("#loader").fadeIn('fast');
		
				getDataDetail('<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>');
			</script>
<?php endif ?>

