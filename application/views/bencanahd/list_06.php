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



	  		 <span style="margin-left: 5%;font-weight: bold;padding: 1%" class="btn-warning">LAMPIRAN 06</span>
	   	
	  </div>
	  <div class="card-body" style="overflow: auto;">
	 
	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr class="btn-warning">
	  			<th>NO</th>
	  			<th>TANGGAL</th>
	  			<th>DAERAH_IRIGASI</th>
	  			<th>LUAS_AREA_IRIGASI</th>
	  			<th>TINGKATAN_IRIGASI</th>
	  			<th>KABUPATEN</th>
	  			<th>RANTING</th>>
	  			<!-- <th>STATUS</th> -->
	  			<th>ACTION</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				$p3 = '';
	  				foreach($data->result() as $row):
	  				$no++;

	  		
	  				if ($row->STATUS_LAPORANHD ==='OPEN' ) {
	  					
	  					$visible='style="display:none"';
	  					# code...
	  				}else{
	  					$visible="";
	  				}


		  		?>
		  			<tr <?php echo $visible ?> >
		  				<td><?php echo $no ?></td>
		  				<td><?php echo tglIndonesia($row->TANGGAL) ?></td>
		  				<td><?php echo $row->DAERAH_IRIGASI ?></td>
		  				<td><?php echo $row->LUAS_AREA_IRIGASI ?></td>
		  				<td><?php echo $row->TINGKATAN_IRIGASI ?></td>
		  				<td><?php echo $row->KABUPATEN ?></td>
		  				<td><?php echo $row->RANTING ?></td>
		  				<!-- <td><?php echo $row->STATUS_LAPORANHD ?></td> -->
		  				<td>
		  					<a href="<?php echo site_url('bencanahd/view_lampiran06/'.$row->ID_LAPORANHD	) ?>" class="btn btn-primary btn-sm"><i class="flaticon-eye"></i></a>


		  						<a href="<?php echo site_url('bencanahd/view_lampiran06_pdf/'.$row->ID_LAPORANHD	) ?>" class="btn btn-danger btn-sm">PDF</a>

		  					<?php if ($row->STATUS_LAPORANHD ==='OKE' OR $_SESSION['level']==='ADMIN'): ?>
		  							<a href="<?php echo site_url('bencanahd/edit_lampiran06/'.$row->ID_LAPORANHD	) ?>" class="btn btn-warning btn-sm"><i class="flaticon-edit"></i> Lamp 06 P</a>


		  						<a href="<?php echo site_url('bencanahd/delete/'.$row->ID_LAPORANHD.'/'.$row->DAERAH_IRIGASI) ?>" class="btn btn-danger btn-sm"><i class="flaticon-delete"></i></a>	
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



