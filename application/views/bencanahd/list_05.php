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


	  		 <span style="margin-left: 5%;font-weight: bold;padding: 1%" class="btn-primary">05 P PROGRAM KERJA KONTRAKTUAL (DARI BENCANA ALAM)</span>
	   	
	  </div>
	  <div class="card-body" style="overflow: auto;">
	 
	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr class="btn-primary">
	  			<th>NO</th>
	  			<th>TANGGAL</th>
	  			
	  			<th>STATUS</th>
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
		  				<td><?php echo tglIndonesia($row->TANGGAL_KONTRAKTUAL) ?></td>
		  				<td><?php echo $row->STATUS_KONTRAKTUAL ?></td>
		  				<td>
		  					<a href="<?php echo site_url('bencanahd/view_lampiran05/'.$row->ID_LAPORANHD	) ?>" class="AppButton-primary"><i class="flaticon-eye"></i></a>

		  					<?php if ($row->STATUS_KONTRAKTUAL!=='DONE' OR $_SESSION['level']==='ADMIN'): ?>
		  						<a href="<?php echo site_url('bencanahd/edit_lampiran05/'.$row->ID_LAPORANHD	) ?>" class="btn btn-primary"><i class="flaticon-edit"></i> 05 P</a>
		  			
		  						<a href="<?php echo site_url('bencanahd/delete_kontraktual/'.$row->ID_LAPORANHD.'') ?>" class="AppButton-dark"><i class="flaticon-delete"></i></a>	
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



