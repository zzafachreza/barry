<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><?php echo ucfirst('bencanahd') ?></li>
	  </ol>
</nav>
<div class="container-fluid">

<?php

// print_r($bencanahd->result())
	
?>
	<div class="card">
	  <div class="card-header">
	  	<a href="<?php echo site_url() ?>" class="AppButton-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>


	  		 <a href="<?php echo site_url('bencanahd/add') ?>" class="AppButton-primary"><i class="flaticon-add"></i> Tambah</a>

	  		 <span style="margin-left: 5%;font-weight: bold;padding: 1%" class="btn-danger">LAPORAN KERUSAKAN AKIBAT BENCANA ALAM</span>
	   	
	  </div>
	  <div class="card-body" style="overflow: auto;">
	 
	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr class="btn-danger">
	  			<th>NO</th>
	  			<th>TANGGAL</th>
	  			<th>DAERAH_IRIGASI</th>
	  			<th>LUAS_AREA_IRIGASI</th>
	  			<th>TINGKATAN_IRIGASI</th>
	  			<th>KABUPATEN</th>
	  			<th>RANTING</th>>
	  			<th>STATUS</th>
	  			<th>ACTION</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				$p3 = '';
	  				foreach($bencanahd->result() as $row):
	  				$no++;

	  		



		  		?>
		  			<tr >
		  				<td><?php echo $no ?></td>
		  				<td><?php echo tglIndonesia($row->TANGGAL) ?></td>
		  				<td><?php echo $row->DAERAH_IRIGASI ?></td>
		  				<td><?php echo $row->LUAS_AREA_IRIGASI ?></td>
		  				<td><?php echo $row->TINGKATAN_IRIGASI ?></td>
		  				<td><?php echo $row->KABUPATEN ?></td>
		  				<td><?php echo $row->RANTING ?></td>
		  				<td><?php echo $row->STATUS_LAPORANHD ?></td>
		  				<td>
		  					<a href="<?php echo site_url('bencanahd/detail/'.$row->ID_LAPORANHD	) ?>" class="AppButton-primary"><i class="flaticon-eye"></i></a>
<!-- 
		  						<a href="<?php echo site_url('bencanahd/lampiran6/'.$row->ID_LAPORANHD	) ?>" class="btn btn-warning"><i class="flaticon-edit"></i> Lampiran 6</a> -->


		  						<!-- <a href="<?php echo site_url('bencanahd/lamp05/'.$row->ID_LAPORANHD	) ?>" class="btn btn-primary"><i class="flaticon-edit"></i> 05 P</a>
 -->

		  					<a  href="<?php echo site_url('bencanahd/edit/'.$row->ID_LAPORANHD	.'/'.$p3) ?>" class="AppButton-secondary"><i class="flaticon-edit"></i> EDIT</a>

		  			
		  						<a href="<?php echo site_url('bencanahd/delete/'.$row->ID_LAPORANHD.'/'.$row->DAERAH_IRIGASI) ?>" class="AppButton-dark"><i class="flaticon-delete"></i></a>	

		  			
		  					<div style="margin-top: 10px"></div>

		  				<!-- 	<a href="<?php echo site_url('bencanahd/detail_pdf/'.$row->ID_LAPORANHD	) ?>" class="btn btn-danger"><i class="flaticon-file"></i> PDF </a>

		  					<a href="<?php echo site_url('bencanahd/detail_excel/'.$row->ID_LAPORANHD	) ?>" class="btn btn-success"><i class="flaticon-file"></i> Excel </a> -->

		  					


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



