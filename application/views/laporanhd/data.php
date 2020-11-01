<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><?php echo ucfirst('laporanhd') ?></li>
	  </ol>
</nav>
<div class="container-fluid" style="font-size: small;">

<?php

// print_r($laporanhd->result())
	
?>
	<div class="card">
	  <div class="card-header">
	  	<a href="<?php echo site_url() ?>" class="AppButton-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

	  	<?php if ($_SESSION['level']==='ADMIN' OR $_SESSION['level']==='MANTRI' ): ?>
	  		 <a href="<?php echo site_url('laporanhd/add') ?>" class="AppButton-primary"><i class="flaticon-add"></i> Tambah</a>
	  	<?php endif ?>
	   	
	  </div>
	  <div class="card-body" style="overflow: auto;">
	 
	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr>
	  			<th>NO</th>
	  			<th>TANGGAL</th>
	  			<th>DAERAH_IRIGASI</th>
	  			<th>LUAS_AREA</th>
	  			<th>TINGKATAN</th>
	  			<th>KABUPATEN</th>
	  			<th>RANTING</th>
	  			<th>MANTRI</th>
	  			<!-- <th>STATUS</th> -->
	  			<!-- <th>STATUS</th> -->
	  			<!-- <th>TANGGAL BLANKO 1 </th>
	  			<th>TANGGAL BLANKO 2</th>
	  			<th>TANGGAL BLANKO 3</th> -->
	  			<th>ACTION</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				$p3 = '';
	  				foreach($laporanhd->result() as $row):
	  				$no++;

	  				if ($row->STATUS_LAPORANHD==='CEK' && $_SESSION['level']==='MANTRI') {
	  					# code...
	  					 $STATUS_AKSI = "style='display:none'";
	  				}
	  				elseif ($row->STATUS_LAPORANHD==='DONE' && $_SESSION['level']==='SUP') {
	  					# code...
	  					 $STATUS_AKSI = "style='display:none'";
	  					  $p3 = '3';

	  				}

	  				elseif ($row->STATUS_LAPORANHD==='DONE' && $_SESSION['level']==='SEKSI IRIGASI') {
	  					# code...
	  					 $STATUS_AKSI = "";
	  					  $p3 = '3';

	  				}

	  				elseif ($row->STATUS_LAPORANHD==='OKE' && $_SESSION['level']==='SEKSI IRIGASI') {
	  					# code...
	  					$STATUS_AKSI = "style='display:none'";
	  					 $STATUS_AKSI_BTN = "style='display:none'";

	  					

	  				}

	  				elseif ($row->STATUS_LAPORANHD==='OKE' && $_SESSION['level']!=='ADMIN') {
	  					# code...
	  					$STATUS_AKSI = "style='display:none'";
	  					 $STATUS_AKSI_BTN = "style='display:none'";

	  				}

	  				else{
						$STATUS_AKSI="";
						$STATUS_AKSI_BTN="";

	  				}


	  				if ($row->STATUS_LAPORANHD==='OPEN' && $_SESSION['level']!=='MANTRI') {
	  					# code...
	  					$STATUS_AKSI_TR = "style='display:none'";
	  				}else{
	  					$STATUS_AKSI_TR="";
	  				}

	  				if ($row->STATUS_LAPORANHD==='CEK' && $_SESSION['level']==='SEKSI IRIGASI') {
	  					# code...
	  					$STATUS_AKSI_TR = "style='display:none'";
	  					$STATUS_AKSI="";
	  				}
	  				elseif($row->STATUS_LAPORANHD==='OKE' && $row->STATUS_ALL!=='SELESAI' && $_SESSION['level']==='SEKSI IRIGASI') {
	  					# code...
	  					$STATUS_AKSI_TR = "";
	  					$STATUS_AKSI="";
	  					
	  				}





		  		?>
		  			<tr <?php echo $STATUS_AKSI_TR ?>>
		  				<td><?php echo $no ?></td>
		  				<td><?php echo tglIndonesia($row->TANGGAL) ?></td>
		  				<td><?php echo $row->DAERAH_IRIGASI ?></td>
		  				<td><?php echo $row->LUAS_AREA_IRIGASI ?></td>
		  				<td><?php echo $row->TINGKATAN_IRIGASI ?></td>
		  				<td><?php echo $row->KABUPATEN ?></td>
		  				<td><?php echo $row->RANTING ?></td>
		  				<td><?php echo $row->MANTRI ?></td>
		  				<!-- <td><?php echo $row->STATUS_LAPORANHD ?></td> -->
		  				<!-- <td><?php echo $row->STATUS_ALL ?></td> -->
		  				<!-- <td><?php echo  isset($row->TANGGAL_1) ? tglIndonesia($row->TANGGAL_1) : ''; ?></td>
		  				<td><?php echo  isset($row->TANGGAL_2) ? tglIndonesia($row->TANGGAL_2) : ''; ?></td>
		  				<td><?php echo  isset($row->TANGGAL_3) ? tglIndonesia($row->TANGGAL_3) : ''; ?></td> -->
		  				<td>
		  					

		  				

		  				


		  				
		  					<div class="btn-group dropup">
								  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    <i class="flaticon-imac"></i> ACTION
								  </button>
								  <div class="dropdown-menu" style="padding: 5%">
								  	<a href="<?php echo site_url('laporanhd/detail/'.$row->ID_LAPORANHD) ?>" class="btn btn-primary col-sm-12"><i class="flaticon-eye"></i> Lihat</a>

								  	 <div class="dropdown-divider"></div>

								  		<a <?php echo $STATUS_AKSI ?> href="<?php echo site_url('laporanhd/edit/'.$row->ID_LAPORANHD.'/'.$p3) ?>" class="btn btn-secondary col-sm-12"><i class="flaticon-edit"></i> Edit</a>

									  <div class="dropdown-divider"></div>


		  				<a href="<?php echo site_url('laporanhd/detail_pdf/'.$row->ID_LAPORANHD) ?>" class="btn btn-danger col-sm-12"><i class="flaticon-file"></i> PDF </a>
		  					<div class="dropdown-divider"></div>

		  	<!-- 				<a href="<?php echo site_url('laporanhd/detail_excel/'.$row->ID_LAPORANHD) ?>" class="btn btn-success col-sm-12"><i class="flaticon-file"></i> Excel </a> -->


								<div class="dropdown-divider"></div>



									  	<?php if ($_SESSION['level']==='ADMIN'): ?>
		  						<a <?php echo $STATUS_AKSI ?> href="<?php echo site_url('laporanhd/delete/'.$row->ID_LAPORANHD.'') ?>" class="dropdown-item btn btn-danger"><i class="flaticon-delete"></i>HAPUS</a>	

		  					<?php endif ?>
								  </div>
								</div>


		  					


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



