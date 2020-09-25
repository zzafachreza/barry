<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('laporanhd') ?>"><?php  echo ucfirst('laporanhd') ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Detail</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	
	<a href="<?php echo site_url('laporanhd') ?>" class="AppButton-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		  </div>
	  	<div class="card-body">
	  		 <div class="form-group">
			    <label for="nama">TANGGAL</label>
			    <h3><?php  echo tglIndonesia($laporanhd['TANGGAL']) ?></h3>
			  </div>
			  <div class="form-group">
			    <label for="nama">DAERAH_IRIGASI</label>
			    <h3><?php  echo $laporanhd['DAERAH_IRIGASI'] ?></h3>
			  </div>
			  <div class="form-group">
			    <label for="nama">LUAS_AREA_IRIGASI</label>
			    <h3><?php  echo $laporanhd['LUAS_AREA_IRIGASI'] ?></h3>
			  </div>
			  <div class="form-group">
			    <label for="nama">TINGKATAN_IRIGASI</label>
			    <h3><?php  echo $laporanhd['TINGKATAN_IRIGASI'] ?></h3>
			  </div>
			  <div class="form-group">
			    <label for="nama">KABUPATEN</label>
			    <h3><?php  echo $laporanhd['KABUPATEN'] ?></h3>
			  </div>
			   <div class="form-group">
			    <label for="nama">RANTING</label>
			    <h3><?php  echo $laporanhd['RANTING'] ?></h3>
			  </div>
			   <div class="form-group">
			    <label for="nama">MANTRI</label>
			    <h3><?php  echo $laporanhd['MANTRI'] ?></h3>
			  </div>
			  
		  </div>
		  <div class="card-footer">

		  </div>
	
	</div>


</div>



