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
	  			<th>STATUS</th>
	  			<th>ACTION</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				foreach($laporanhd->result() as $row):
	  				$no++;

	  				if ($row->STATUS_LAPORANHD==='CEK' && $_SESSION['level']==='MANTRI') {
	  					# code...
	  					 $STATUS_AKSI = "style='display:none'";
	  				}
	  				elseif ($row->STATUS_LAPORANHD==='PROSES' && $_SESSION['level']==='SUP') {
	  					# code...
	  					 $STATUS_AKSI = "style='display:none'";
	  				}

	  				elseif ($row->STATUS_LAPORANHD==='DONE' && $_SESSION['level']!=='ADMIN') {
	  					# code...
	  					 $STATUS_AKSI = "";
	  					 $STATUS_AKSI_BTN = "style='display:none'";

	  				}

	  				else{
						$STATUS_AKSI="";
						$STATUS_AKSI_BTN="";
	  				}
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
		  				<td><?php echo $row->STATUS_LAPORANHD ?></td>
		  				<td>
		  					<a href="<?php echo site_url('laporanhd/detail/'.$row->ID_LAPORANHD) ?>" class="AppButton-primary"><i class="flaticon-eye"></i></a>

		  					<a <?php echo $STATUS_AKSI ?> href="<?php echo site_url('laporanhd/edit/'.$row->ID_LAPORANHD) ?>" class="AppButton-secondary"><i class="flaticon-edit"></i></a>

		  					<a <?php echo $STATUS_AKSI ?> href="<?php echo site_url('laporanhd/delete/'.$row->ID_LAPORANHD.'/'.$row->DAERAH_IRIGASI) ?>" class="AppButton-dark"><i class="flaticon-delete"></i></a>	

		  					<div style="margin-top: 10px"></div>

		  					<a href="<?php echo site_url('laporanhd/detail_pdf/'.$row->ID_LAPORANHD) ?>" class="btn btn-danger"><i class="flaticon-file"></i> PDF </a>

		  					<a href="<?php echo site_url('laporanhd/detail_excel/'.$row->ID_LAPORANHD) ?>" class="btn btn-success"><i class="flaticon-file"></i> Excel </a>

		  					


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



