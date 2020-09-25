<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('bangunan') ?>"><?php  echo ucfirst('bangunan') ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Add</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('bangunan/insert') ?>" method="POST" >

	<a href="<?php echo site_url('bangunan') ?>" class="AppButton-dark"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		<button class="AppButton-secondary" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button  class="AppButton-primary" id="simpan" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>
	  			<div class="form-group col col-sm-6">
			    <label for="id_ruas">Nama Ruas Saluran</label>
			    <select name="id_ruas" class="form-control  selectza" style="outline: none;">
			    	
			    	<option></option>
					    <?php
			  				$no=0;
			  				foreach($ruas->result() as $row):
			  				$no++;
				  		?>

				  		<option  value="<?php echo $row->id_ruas ?>"><?php echo $row->nama_ruas ?></option>

				  		<?php 
				  			endforeach;
				  		?>
			    </select>
			  </div>

			  <div class="form-group col col-sm-6">
			    <label for="nama_bangunan" class="AppLabel">Nama Bangunan</label>
			    <i class="flaticon2-user iconInput"></i>
			    <input autocomplete="off" required="required" type="text" name="nama_bangunan" class="AppInput" id="nama_bangunan" autofocus="autofocus">
			  </div>

			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>



