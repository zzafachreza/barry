<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><?php  echo ucfirst('riwayat') ?></li>
	  </ol>
</nav>
<div class="container-fluid">

<?php

// print_r($riwayat->result())
	
?>
	<div class="card">
	  <div class="card-header">
	  	<a href="<?php echo site_url() ?>" class="AppButton-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
	    <a href="<?php echo site_url('riwayat/add') ?>" class="AppButton-primary"><i class="flaticon-add"></i> Tambah</a>
	  </div>
	  <div class="card-body">

	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr>
	  			<th>NO</th>
	  			<th>DATA_TABLE</th>
	  			<th>AKSI</th>
	  			<th>OLEH</th>
	  			<th>TANGGAL</th>
	  			<th>action</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				foreach($riwayat->result() as $row):
	  				$no++;
		  		?>
		  			<tr>
		  				<td><?php echo $no ?></td>
		  				<td><?php echo $row->DATA_TABLE ?></td>
		  				<td><?php echo $row->AKSI ?></td>
		  				<td><?php echo $row->OLEH ?></td>
		  				<td><?php echo $row->TANGGAL ?></td>
		  				<td>
		  					<a href="<?php echo site_url('riwayat/delete/'.$row->ID) ?>" class="AppButton-dark"><i class="flaticon-delete"></i></a>	
		  				</td>
		  			</tr>

		  		<?php 
		  				endforeach;
		  		?>
	  		</tbody>
	  	</table>

	  </div>
	</div>


</div>



