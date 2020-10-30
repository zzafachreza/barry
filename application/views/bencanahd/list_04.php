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



	  		 <span style="margin-left: 5%;font-weight: bold;padding: 1%" class="btn-success">04 P PROGRAM PEKERJAAN SWAKELOLA</span>
	   	
	  </div>
	  <div class="card-body" style="overflow: auto;">
	 
	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr class="btn-success">
	  			<th>NO</th>
	  			<th>DAERAH_IRIGASI</th>
	  			<th>KOTA/KABUPATEN</th>
	  			<th>STATUS</th>
	  			<th>TANGGAL</th>
	  			<th>ACTION</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				$p3 = '';
	  				foreach($data->result() as $row):
	  				$no++;

	  		



		  		?>
		  			<tr >
		  				<td><?php echo $no ?></td>
		  						<td><?php echo $row->DAERAH_IRIGASI ?></td>
		  				<td><?php echo $row->KABUPATEN ?></td>
		  				<td><?php echo tglIndonesia($row->TANGGAL_SWAKELOLA) ?></td>
		  				<td><?php echo $row->STATUS_SWAKELOLA ?></td>
		  				<td>
		  					<a href="<?php echo site_url('bencanahd/view_lampiran04/'.$row->ID_LAPORANHD	) ?>" class="btn btn-primary btn-sm"><i class="flaticon-eye"></i></a>

		  					<a href="<?php echo site_url('bencanahd/view_lampiran04_pdf/'.$row->ID_LAPORANHD	) ?>" class="btn btn-danger btn-sm">PDF</a>

		  					<?php if ($row->STATUS_SWAKELOLA!=='DONE' OR $_SESSION['level']==='ADMIN'): ?>
		  							<a href="<?php echo site_url('bencanahd/edit_lampiran04/'.$row->ID_LAPORANHD	) ?>" class="btn btn-success btn-sm"><i class="flaticon-edit"></i> 04 P</a>
		  								<a onclick="return confirm('Apakah Anda yakin akan hapus ini ?')" href="<?php echo site_url('bencanahd/delete_swakelola/'.$row->ID_LAPORANHD) ?>" class="btn btn-danger btn-sm"><i class="flaticon-delete"></i></a>	

		  					<?php endif ?>


		  				

		  			
		  					
		  			
		  					<div style="margin-top: 10px"></div>

		  	

		  					


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



