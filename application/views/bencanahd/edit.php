<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('bencanahd') ?>"><?php  echo ucfirst('bencanahd') ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Edit</li>
	  </ol>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col col-sm-2">
			<a href="<?php echo site_url('bencanahd') ?>" class="btn btn-secondary col-sm-12">KEMBALI</a>
		</div>
		<div class="col col-sm-2">
				<form method="POST" action="<?php echo base_url().'bencanahd/selesai_06'; ?>">
				<input type="hidden" name="ID_LAPORANHD" value="<?php echo $bencanahd['ID_LAPORANHD'] ?>">

				<button class="btn btn-warning col-sm-12" onclick="return confirm('Apakah Anda yakin ?\n Data tidak dapat diubah jika sudah disimpan')">SELESAI</button>
				
			</form>
		</div>
	</div>
</div>


<div class="container-fluid">



	<div class="card">
		
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('bencanahd/update') ?>" method="POST" >


		<button class="AppButton-secondary" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button class="AppButton-primary" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>



  	

  

	  </div>
	  	<div class="card-body">
	



	  		

	  			<center>

	  			<h4 style="background-color: orange">LAPORAN KERUSAKAN AKIBAT BENCANA ALAM</h4>
	  			  <div class="form-group col col-sm-3">
				    <label for="nama_bencanahd" class="AppLabel">TANGGAL</label>
				    <input type="hidden" name="id" value="<?php echo $ID_LAPORANHD = $bencanahd['ID_LAPORANHD'] ?>">
				    <i class="flaticon-event-calendar-symbol iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="TANGGAL" class="AppInput tgl" id="TANGGAL"  value="<?php echo tglIndonesia($bencanahd['TANGGAL']) ?>">
				  </div>

	  		</center>
	  		
	  
			 

			<div class="row">
				 <div class="col-sm-6">
			 	 <div class="form-group col col-sm-12">
				    <label for="DAERAH_IRIGASI" class="AppLabel">DAERAH_IRIGASI</label>
				    <i class="flaticon2-position iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="DAERAH_IRIGASI" class="AppInput" id="DAERAH_IRIGASI" value="<?php echo $bencanahd['DAERAH_IRIGASI'] ?>" >
				  </div>

				   <div class="form-group col col-sm-12">
				    <label for="LUAS_AREA_IRIGASI" class="AppLabel">LUAS_AREA_IRIGASI</label>
				    <i class="flaticon2-arrow-1 iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="LUAS_AREA_IRIGASI" class="AppInput" id="LUAS_AREA_IRIGASI" value="<?php echo $bencanahd['LUAS_AREA_IRIGASI'] ?>" >
				  </div>

				  <div class="form-group col col-sm-12">
				    <label for="TINGKATAN_IRIGASI" class="AppLabel">TINGKATAN_IRIGASI</label>
				    <i class="flaticon2-indent-dots iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="TINGKATAN_IRIGASI" class="AppInput" id="TINGKATAN_IRIGASI" value="<?php echo $bencanahd['TINGKATAN_IRIGASI'] ?>" >
				  </div>
			 </div>

			 <div class="col-sm-6">
			 	 <div class="form-group col col-sm-12">
				    <label for="KABUPATEN" class="AppLabel">KABUPATEN</label>
				    <i class="flaticon2-menu-4 iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="KABUPATEN" class="AppInput" id="KABUPATEN" value="<?php echo $bencanahd['KABUPATEN'] ?>" >
				  </div>

				  <div class="form-group col col-sm-12">
				    <label for="RANTING" class="AppLabel">RANTING</label>
				    <i class="flaticon2-console iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="RANTING" class="AppInput" id="RANTING" value="<?php echo $bencanahd['RANTING'] ?>" >
				  </div>

				    <div class="form-group col col-sm-12">
				
				    <a href="#" id="bukaHilang" class="btn btn-warning">TAMBAH DETAIL LAPORAN</a>
				   
				  </div>

			 </div>

			</div>



			</form>

			<hr/>

			<div>

		
					<table class="table table-bordered">

					<thead style="background-color: orange">
				

		            <tr>
		            	<th rowspan="3">NO</th>
						<th rowspan="3">NAMA SALURAN /
						BANGUNAN DAN LOKASI
						Hm, DESA DAN KECAMATAN
						</th>
						<th rowspan="3">PENYEBAB KERUSAKAN</th>
						<th rowspan="3">JENIS KERUSAKAN</th>
						<th colspan="7">PERINCIAN KERUSAKAN</th>
						<th colspan="2">TANGGAP DARURAT</th>
						<th colspan="2">PERBAIKAN YANG DIPERLUKAN</th>
		            </tr>


					
					<tr>	
						
						<th rowspan="2">TANAH (M)</th>
						<th colspan="2">PASANGAN</th>
						<th  rowspan="2">PINTU_AIR (B/BH)</th>
						<th  rowspan="2">GORONG_GORONG (D/L)</th>
						<th  rowspan="2">LAIN - LAIN</th>
						<th  rowspan="2">LUAS TERANCAM DIBAWAHNYA (Ha)</th>
						<th  rowspan="2">TINDAKAN PERBAIKAN YANG TELAH DIKERJAKAN</th>
						<th  rowspan="2">BIAYA_PERBAIKAN</th>
						<th  rowspan="2">YANG AKAN DIKERJAKAN OLEH IP3A/GP3A DAN PEKARYA</th>
						<th  rowspan="2">YANG DIUSULKAN UNTUK DIKERJAKAN DI TINGKAT YANG LEBIH ATAS</th>
						
					</tr>
					<tr>
						<th>BATU (M³)</th>
						<th>BETON (M³)</th>
					</tr>
					<tr style="text-align: center;">
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
						<td>15</td>

					</tr>
					</thead>
					<tbody>

						<form id="dataForm" action="<?php echo site_url('bencanahd/insert_detail') ?>" method="POST">
						

						<tr class="hilang" style="display: none;">
				  			<td>
				  				<input type="hidden" name="ID_LAPORANHD" value="<?php echo $ID_LAPORANHD ?>">
				  			</td>
				  			<td><textarea id="NAMA_SALURAN" name="NAMA_SALURAN" class="form-control" required="required"></textarea></td>
				  			<td><textarea id="PENYEBAB_KERUSAKAN" name="PENYEBAB_KERUSAKAN" class="form-control" required="required"></textarea></td>
				  			<td><textarea id="JENIS_KERUSAKAN" name="JENIS_KERUSAKAN" class="form-control" required="required"></textarea></td>
				  			
							<td><input type="text" name="TANAH" class="form-control"> </td>
							<td><input type="text" name="BATU" class="form-control"> </td>
							<td><input type="text" name="BETON" class="form-control"> </td>
							<td><input type="text" name="PINTU_AIR" class="form-control"> </td>
							<td><input type="text" name="GORONG_GORONG" class="form-control"> </td>
							<td><input type="text" name="LAIN_LAIN_KERUSAKAN" class="form-control"> </td>
							<td><input type="text" name="LUAS_TERANCAM" class="form-control"> </td>
							<td><input type="text" name="TINDAKAN_PERBAIKAN" class="form-control"> </td>
							<td><input type="text" name="BIAYA_PERBAIKAN" class="form-control"> </td>
							<td><input type="text" name="DIKERJAKAN_OLEH" class="form-control"> </td>
							<td><input type="text" name="DIUSULKAN_OLEH" class="form-control"> </td>
				  		</tr>
				  		<tr class="hilang" style="display: none;">
				  			<td colspan="15">
				  				<center>
				  					<button class="btn btn-warning col-sm-3" type="SUBMIT" >TAMBAHKAN</button>
				  				</center>
				  			</td>
				  		</tr>
				</form>

		
		
				
					
						 <?php
			  				$no=0;
			  				foreach($bencanadt->result() as $row):
			  				$no++;

				  		?>
				  		<tr>
				  			<td ><?php echo $no ?><br/>
				  					<a class="btn btn-danger" href="<?php echo site_url('bencanahd/hapus_detail/') ?><?php echo $row->ID_LAPORANHD ?>/<?php echo $row->ID_LAPORANDT ?>">HAPUS</a>
				  			</td>
				  			<td><?php echo str_replace("\n", "<br/>", $row->NAMA_SALURAN); ?></td>
				  			<td>
				  				<?php echo str_replace("\n", "<br/>", $row->PENYEBAB_KERUSAKAN); ?>
				  			</th>
				  			<td>
				  				<?php echo str_replace("\n", "<br/>", $row->JENIS_KERUSAKAN); ?>
				  			</th>
					
							<td><?php echo $row->TANAH ?></th>
							<td><?php echo $row->BATU ?></th>
							<td><?php echo $row->BETON ?></th>
							<td><?php echo $row->PINTU_AIR ?></th>
							<td><?php echo $row->GORONG_GORONG ?></th>
							<td><?php echo $row->LAIN_LAIN_KERUSAKAN ?></th>
							<td><?php echo $row->LUAS_TERANCAM ?></th>
							<td><?php echo $row->TINDAKAN_PERBAIKAN ?></th>
							<td><?php echo number_format($row->BIAYA_PERBAIKAN) ?></th>
							<td><?php echo $row->DIKERJAKAN_OLEH ?></th>
							<td><?php echo $row->DIUSULKAN_OLEH ?></th>

					
								
				  		</tr>
						<?php endforeach; ?>
					</tbody>
					</table>
			
				
			</div>

		

 
				
		


		  </div>
		  <div class="card-footer">

		  			
						

		  </div>

	</div>


</div>

<script type="text/javascript">



	$("#bukaHilang").click(function(e){
		e.preventDefault();

		$(".hilang").slideToggle();
		$("#NAMA_SALURAN").focus();

		
	})
</script>