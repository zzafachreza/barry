<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('laporanhd') ?>"><?php  echo ucfirst('laporanhd') ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Add</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('laporanhd/insert') ?>" method="POST" >

	<a href="<?php echo site_url('laporanhd') ?>" class="AppButton-dark"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		<button class="AppButton-secondary" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button  class="AppButton-primary" id="simpan" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>
	  

			  <div class="form-group col col-sm-6">
			    <label for="TANGGAL" class="AppLabel">TANGGAL</label>
			    <i class="flaticon-event-calendar-symbol iconInput"></i>
			    <input autocomplete="off" required="required" type="text" name="TANGGAL" class="AppInput tgl" id="TANGGAL" >
			  </div>

			   <div class="form-group col col-sm-6">
			    <label for="DAERAH_IRIGASI" class="AppLabel">DAERAH_IRIGASI</label>
			    <i class="flaticon2-position iconInput"></i>
			    <input autocomplete="off" required="required" type="text" name="DAERAH_IRIGASI" class="AppInput" id="DAERAH_IRIGASI" >
			  </div>

			   <div class="form-group col col-sm-6">
			    <label for="LUAS_AREA_IRIGASI" class="AppLabel">LUAS_AREA_IRIGASI</label>
			    <i class="flaticon2-arrow-1 iconInput"></i>
			    <input autocomplete="off" required="required" type="text" name="LUAS_AREA_IRIGASI" class="AppInput" id="LUAS_AREA_IRIGASI" >
			  </div>

			  <div class="form-group col col-sm-6">
			    <label for="TINGKATAN_IRIGASI" class="AppLabel">TINGKATAN_IRIGASI</label>
			    <i class="flaticon2-indent-dots iconInput"></i>
			    <input autocomplete="off" required="required" type="text" name="TINGKATAN_IRIGASI" class="AppInput" id="TINGKATAN_IRIGASI" >
			  </div>

			  <div class="form-group col col-sm-6">
			    <label for="KABUPATEN" class="AppLabel">KABUPATEN</label>
			    <i class="flaticon2-menu-4 iconInput"></i>
			    <input autocomplete="off" required="required" type="text" name="KABUPATEN" class="AppInput" id="KABUPATEN" >
			  </div>

			  <div class="form-group col col-sm-6">
			    <label for="RANTING" class="AppLabel">RANTING</label>
			    <i class="flaticon2-console iconInput"></i>
			    <input autocomplete="off" required="required" type="text" name="RANTING" class="AppInput" id="RANTING" >
			  </div>

			  <div class="form-group col col-sm-6">
			    <label for="MANTRI" class="AppLabel">MANTRI</label>
			    <i class="flaticon2-user iconInput"></i>
			    <input autocomplete="off" required="required" type="text" name="MANTRI" class="AppInput" id="MANTRI" >
			  </div>

			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>



