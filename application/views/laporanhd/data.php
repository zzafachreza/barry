<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><?php echo ucfirst('laporanhd') ?></li>
	  </ol>
</nav>
<div class="container-fluid">

<?php

// print_r($laporanhd->result())
	
?>
	<div class="card">
	  <div class="card-header">
	  	<a href="<?php echo site_url() ?>" class="AppButton-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
	    <a href="<?php echo site_url('laporanhd/add') ?>" class="AppButton-primary"><i class="flaticon-add"></i> Tambah</a>
	  </div>
	  <div class="card-body">

	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr>
	  			<th>NO</th>
	  			<th>TANGGAL</th>
	  			<th>DAERAH_IRIGASI</th>
	  			<th>LUAS_AREA_IRIGASI</th>
	  			<th>TINGKATAN_IRIGASI</th>
	  			<th>KABUPATEN</th>
	  			<th>RANTING</th>
	  			<th>MANTRI</th>
	  			<th>ACTION</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				foreach($laporanhd->result() as $row):
	  				$no++;
		  		?>
		  			<tr>
		  				<td><?php echo $no ?></td>
		  				<td><?php echo tglIndonesia($row->TANGGAL) ?></td>
		  				<td><?php echo $row->DAERAH_IRIGASI ?></td>
		  				<td><?php echo $row->LUAS_AREA_IRIGASI ?></td>
		  				<td><?php echo $row->TINGKATAN_IRIGASI ?></td>
		  				<td><?php echo $row->KABUPATEN ?></td>
		  				<td><?php echo $row->RANTING ?></td>
		  				<td><?php echo $row->MANTRI ?></td>
		  				<td>
		  					<a href="<?php echo site_url('laporanhd/detail/'.$row->ID) ?>" class="AppButton-primary"><i class="flaticon-eye"></i></a>

		  					<a href="<?php echo site_url('laporanhd/edit/'.$row->ID) ?>" class="AppButton-secondary"><i class="flaticon-edit"></i></a>

		  					<a href="<?php echo site_url('laporanhd/delete/'.$row->ID) ?>" class="AppButton-dark"><i class="flaticon-delete"></i></a>	
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



