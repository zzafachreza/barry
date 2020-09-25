<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('laporanhd') ?>"><?php  echo ucfirst('laporanhd') ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Edit</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('laporanhd/update') ?>" method="POST" >

	<a href="<?php echo site_url('laporanhd') ?>" class="AppButton-dark"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		<button class="AppButton-secondary" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button class="AppButton-primary" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>

	  			<center>

	  			<h4>LAPORAN KERUSAKAN JARINGAN IRIGASI</h4>
	  			  <div class="form-group col col-sm-3">
				    <label for="nama_laporanhd" class="AppLabel">TANGGAL</label>
				    <input type="hidden" name="id" value="<?php echo $ID = $laporanhd['ID'] ?>">
				    <i class="flaticon-event-calendar-symbol iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="TANGGAL" class="AppInput tgl" id="TANGGAL"  value="<?php echo tglIndonesia($laporanhd['TANGGAL']) ?>">
				  </div>

	  		</center>
	  		
	  
			 

			<div class="row">
				 <div class="col-sm-6">
			 	 <div class="form-group col col-sm-12">
				    <label for="DAERAH_IRIGASI" class="AppLabel">DAERAH_IRIGASI</label>
				    <i class="flaticon2-position iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="DAERAH_IRIGASI" class="AppInput" id="DAERAH_IRIGASI" value="<?php echo $laporanhd['DAERAH_IRIGASI'] ?>" >
				  </div>

				   <div class="form-group col col-sm-12">
				    <label for="LUAS_AREA_IRIGASI" class="AppLabel">LUAS_AREA_IRIGASI</label>
				    <i class="flaticon2-arrow-1 iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="LUAS_AREA_IRIGASI" class="AppInput" id="LUAS_AREA_IRIGASI" value="<?php echo $laporanhd['LUAS_AREA_IRIGASI'] ?>" >
				  </div>

				  <div class="form-group col col-sm-12">
				    <label for="TINGKATAN_IRIGASI" class="AppLabel">TINGKATAN_IRIGASI</label>
				    <i class="flaticon2-indent-dots iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="TINGKATAN_IRIGASI" class="AppInput" id="TINGKATAN_IRIGASI" value="<?php echo $laporanhd['TINGKATAN_IRIGASI'] ?>" >
				  </div>
			 </div>

			 <div class="col-sm-6">
			 	 <div class="form-group col col-sm-12">
				    <label for="KABUPATEN" class="AppLabel">KABUPATEN</label>
				    <i class="flaticon2-menu-4 iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="KABUPATEN" class="AppInput" id="KABUPATEN" value="<?php echo $laporanhd['KABUPATEN'] ?>" >
				  </div>

				  <div class="form-group col col-sm-12">
				    <label for="RANTING" class="AppLabel">RANTING</label>
				    <i class="flaticon2-console iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="RANTING" class="AppInput" id="RANTING" value="<?php echo $laporanhd['RANTING'] ?>" >
				  </div>

				  <div class="form-group col col-sm-12">
				    <label for="MANTRI" class="AppLabel">MANTRI</label>
				    <i class="flaticon2-user iconInput"></i>
				    <input autocomplete="off" required="required" type="text" name="MANTRI" class="AppInput" id="MANTRI" value="<?php echo $laporanhd['MANTRI'] ?>" >
				  </div>
			 </div>

			</div>



			</form>

			<hr/>

			
		<!-- 		<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>NO</th>
						<th>NAMA RUAS SALURAN</th>
						<th>NAMA BAGUNAN DAN TIPENYA</th>
					</tr>
					</thead>
					<tbody>
						<?php
			  				$no=0;
			  				foreach($bangunan->result() as $row):
			  				$no++;
				  		?>

				  		<tr>
				  			<td><?php echo $no; ?></td>
				  			<td><?php echo $row->nama_ruas; ?></td>
				  			<td><?php echo $row->nama_bangunan; ?></td>
				  		</tr>

				  		<?php 
				  			endforeach;
				  		?>
					</tbody>
				</table>
 -->

 <style type="text/css">
 	#dtHorizontalVerticalExample th, td { white-space: nowrap; }
 </style>
					<table  id="dtHorizontalVerticalExample" class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>NO</th>
						<th>NAMA RUAS SALURAN</th>
						<th>NAMA BAGUNAN DAN TIPENYA</th>
						<th>BOCORAN</th>
						<th>(M'/BH)</th>
						<th>RUSAK/PUTUS</th>
						<th>(M')</th>
						<th>LONGSORAN/</th>
						<th>TONJOLAN(M')</th>
						<th>TERSUMBAT</th>
						<th>(M'/BH)</th>
						<th>RETAK</th>
						<th>(M')</th>
						<th>PINTU RUSAK</th>
						<th>(BH)</th>
						<th>SEDIMEN/</th>
						<th>WALED (H)</th>
						<th>LAIN-LAIN</th>
						<th>DIKERJAKAN</th>
						<th>USULAN TINDAK</th>
						<th>LANJUT</th>
						<th>AREA_BAWAH</th>
						<th>DESA</th>

					</tr>
					</thead>
					<tbody>

						<?php
			  				$no=0;
			  				foreach($bangunan->result() as $row):
			  				$no++;
				  		?>


						<tr>
							<td><?php echo $no; ?></td>
				  			<td><?php echo $row->nama_ruas; ?></td>
				  			<td><?php echo $row->nama_bangunan; ?></td>

							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID; ?>','<?php echo $row->id_bangunan; ?>','BOCORAN_M')" class="form-control" type="checkbox" name="BOCORAN" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>BOCORAN_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>BOCORAN_M" type="text" name="BOCORAN_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID; ?>','<?php echo $row->id_bangunan; ?>','RUSAK_M')" class="form-control" type="checkbox" name="RUSAK" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>RUSAK_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>RUSAK_M" type="text" name="RUSAK_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID; ?>','<?php echo $row->id_bangunan; ?>','LONGSORAN_M')" class="form-control" type="checkbox" name="LONGSORAN" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>LONGSORAN_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>LONGSORAN_M" type="text" name="LONGSORAN_M" class="form-control" style="width: 90px;">
								</form>
							</td>
							
							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID; ?>','<?php echo $row->id_bangunan; ?>','TERSUMBAT_M')" class="form-control" type="checkbox" name="TERSUMBAT" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>TERSUMBAT_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>TERSUMBAT_M" type="text" name="TERSUMBAT_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID; ?>','<?php echo $row->id_bangunan; ?>','RETAK_M')" class="form-control" type="checkbox" name="RETAK" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>RETAK_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>RETAK_M" type="text" name="RETAK_M" class="form-control" style="width: 90px;">
								</form>
							</td>


							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID; ?>','<?php echo $row->id_bangunan; ?>','PINTU_RUSAK_M')" class="form-control" type="checkbox" name="PINTU_RUSAK" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>PINTU_RUSAK_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>PINTU_RUSAK_M" type="text" name="PINTU_RUSAK_M" class="form-control" style="width: 90px;">
								</form>
							</td>


							
							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID; ?>','<?php echo $row->id_bangunan; ?>','SEDIMEN_M')" class="form-control" type="checkbox" name="SEDIMEN" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>SEDIMEN_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>SEDIMEN_M" type="text" name="SEDIMEN_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>LAIN_LAIN" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>LAIN_LAIN" type="text" name="LAIN_LAIN" class="form-control" style="width: 90px;">
								</form>
							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>DIKERJAKAN" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>DIKERJAKAN" type="text" name="DIKERJAKAN" class="form-control" style="width: 90px;">
								</form>
							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>USULAN" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>USULAN" type="text" name="USULAN" class="form-control" style="width: 90px;">
								</form>
							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>LANJUTAN" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>LANJUTAN" type="text" name="LANJUTAN" class="form-control" style="width: 90px;">
								</form>
							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>AREA_BAWAH" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>AREA_BAWAH" type="text" name="AREA_BAWAH" class="form-control" style="width: 90px;">
								</form>
							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>DESA" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>DESA" type="text" name="DESA" class="form-control" style="width: 90px;">
								</form>
							</td>
						</tr>
						<?php 
				  			endforeach;
				  		?>


						
					</tbody>
				</table>
				
		


		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>



