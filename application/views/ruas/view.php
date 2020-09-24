<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('ruas') ?>">ruas</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Detail</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	
	<a href="<?php echo site_url('ruas') ?>" class="AppButton-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		  </div>
	  	<div class="card-body">
			  <div class="form-group">
			    <label for="nama">Nama Ruas</label>
			    <h3><?php  echo $ruas['nama_ruas'] ?></h3>
			  </div>
			  
		  </div>
		  <div class="card-footer">

		  </div>
	
	</div>


</div>



