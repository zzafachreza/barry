<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><?php echo ucfirst('bencanahd') ?></li>
	  </ol>
</nav>
<div class="container-fluid">
	<div class="card">
	  <div class="card-header">
	  	<a href="<?php echo site_url() ?>" class="AppButton-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>



	  		 <span style="margin-left: 5%;font-weight: bold;padding: 1%" class="btn-info">05 P PROGRAM KERJA KONTRAKTUAL (DARI KERUSAKAN IRIGASI)</span>
	   	
	  </div>
	  <div class="card-body" style="overflow: auto;">
	 
	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr class="btn-info">
	  			<th>NO</th>
	  			
	  			<th>DAERAH_IRIGASI</th>
	  			<th>KOTA/KABUPATEN</th>
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
		  				<td><?php echo $row->DAERAH_IRIGASI ?></td>
		  				<td><?php echo $row->KABUPATEN ?></td>
		  				<td><?php echo tglIndonesia($row->TANGGAL_KONTRAKTUAL2) ?></td>
		  				<td><?php echo $row->STATUS_KONTRAKTUAL2 ?></td>
		  				<td>
		  					<a href="<?php echo site_url('bencanahd/view_lampiran052/'.$row->ID_LAPORANHD	) ?>" class="btn btn-primary btn-sm"><i class="flaticon-eye"></i></a>

		  					<a href="<?php echo site_url('bencanahd/view_lampiran052_pdf/'.$row->ID_LAPORANHD	) ?>" class="btn btn-danger btn-sm">PDF</a>

		  					<?php if ($row->STATUS_KONTRAKTUAL2!=='DONE' OR $_SESSION['level']==='ADMIN'): ?>
		  							<a href="<?php echo site_url('bencanahd/edit_lampiran052/'.$row->ID_LAPORANHD	) ?>" class="btn btn-info btn-sm"><i class="flaticon-edit"></i> 05 P</a>
		  							<a onclick="return confirm('Apakah Anda yakin akan hapus ini ?')" href="<?php echo site_url('bencanahd/delete_kontraktual2/'.$row->ID_LAPORANHD) ?>" class="btn btn-danger btn-sm"><i class="flaticon-delete"></i></a>
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



