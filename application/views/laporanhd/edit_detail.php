
<?php
	
	if ($_SESSION['level']==='SUP' OR $_SESSION['level']==='SEKSI IRIGASI')  {
		# code...
		$formDisable ='disabled="disabled"';
		$CekDisable ='style="disply:none"';
	}else{
		$formDisable ='';
		$CekDisable ='';
	}

?>

<style type="text/css">
 	#dtHorizontalVerticalExample th, td { white-space: nowrap; }
 </style>
					<table id="dtHorizontalVerticalExample" class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>NO</th>
						<th>NAMA RUAS SALURAN</th>
						<th>NAMA BAGUNAN DAN TIPENYA</th>

						<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='SUP' OR $_SESSION['level']==='ADMIN' OR $_SESSION['level']==='SEKSI IRIGASI' ): ?>
						<th>BOCORAN</th>
						<th>(M'/BH)&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>RUSAK/PUTUS</th>
						<th>(M')&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>LONGSORAN/</th>
						<th>TONJOLAN(M')</th>
						<th>TERSUMBAT</th>
						<th>(M'/BH))&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>RETAK</th>
						<th>(M')&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>PINTU RUSAK</th>
						<th>(BH)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>SEDIMEN/</th>
						<th>WALED (H)&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>MASUKAN LAIN - LAIN</th>

						<?php endif ?>

						<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='ADMIN'): ?>
							<th>DIKERJAKAN</th>
							<th>USULAN TINDAK LANJUT</th>
						<?php endif ?>


					

					<?php if ($_SESSION['level']==='SUP' OR $_SESSION['level']==='ADMIN'): ?>
						<th>ESTIMASI_RUGI</th>
						<th>ESTIMASI_PERBAIKAN</th>
						<th>PRIORITAS</th>
					<?php endif ?>
						<th>AREA LAYANAN DI BAWAHNYA</th>
						<th>DESA / KECAMATAN</th>


					<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='ADMIN'): ?>
						<th>FOTO_BEFORE 1</th>
						<th>FOTO_BEFORE 2</th>
						<th>FOTO_BEFORE 3</th>
						<th>FOTO_BEFORE 4</th>
						<th>FOTO_BEFORE 5</th>
						<th>DEFAULT BEFORE</th>
					<?php endif ?>

					<?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='ADMIN'): ?>
						<th>FOTO_AFTER 1</th>
						<th>FOTO_AFTER 2</th>
						<th>FOTO_AFTER 3</th>
						<th>FOTO_AFTER 4</th>
						<th>FOTO_AFTER 5</th>
						<th>DEFAULT AFTER</th>
					<?php endif ?>
						

					</tr>
					</thead>
					<tbody>

						 <?php
			  				$no=0;
			  				foreach($laporandt->result() as $row):
			  				$no++;

			  				if ($row->ID_LAPORANHD != $ID_LAPORANHD) {
			  					# code...
			  					$splitya = 'style="display:none"';
			  				}else{
			  					$splitya = '';
			  				}
				  		?>

				  		<tr <?php echo $splitya; ?>>
				  			<td><?php echo $no ?></td>
				  			<td><?php echo $row->nama_ruas; ?></td>
				  			<td><?php echo $row->nama_bangunan; ?></td>
				  			<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='SUP' OR $_SESSION['level']==='ADMIN' OR $_SESSION['level']==='SEKSI IRIGASI'): ?>

				  			<!-- fitur ceklist -->
							<td style="text-align: center;">



								<!-- untuk biaya -->
								<?php if ($_SESSION['level']==='SUP'): ?> 
										<form id="FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_B" onSubmit="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="BOCORAN_B">

											<?php if ($row->BOCORAN_M > 0 ): ?>
											<input value="<?php echo $row->BOCORAN_B ?>" id="<?php echo $row->ID_LAPORANDT; ?>BOCORAN_B" onChange="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="BOCORAN_B" class="form-control" style="width: 90px;">
											<?php endif ?>
										</form>
								<?php endif ?>



								<?php if ($_SESSION['level']==='SEKSI IRIGASI'): ?>
									<form class="FORM_BOCORAN" id="FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="BOCORAN">
									<?php if ($row->BOCORAN_M > 0 AND $row->BOCORAN_T !=="R"): ?>
									<select  required="required" style="width: 200px" class="form-control CEK_KOSONG" name="BOCORAN"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
										<option></option>
										<option <?php echo $row->BOCORAN==='SWAKELOLA'?'selected="selected"':'' ?>>SWAKELOLA</option>
										<option <?php echo $row->BOCORAN==='KONTRAKTUAL'?'selected="selected"':'' ?>>KONTRAKTUAL</option>
									</select>
									<?php endif ?>
								</form>
								<?php endif ?>


							<label>
									<input <?php echo $CekDisable." ".$formDisable; ?> <?php echo $row->BOCORAN_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','BOCORAN_M','BOCORAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>BOCORAN" class="form-control" type="checkbox" name="BOCORAN" style="width: 50px;">
							</label>

								<form  id="FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_T" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="BOCORAN_T">
									
											<select <?php echo $CekDisable." ".$formDisable; ?> style="width: 90px;margin-top: 3%" class="form-control" name="BOCORAN_T"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->BOCORAN_T==='R'?'selected="selected"':'' ?>>R</option>
												<option <?php echo $row->BOCORAN_T==='S'?'selected="selected"':'' ?>>S</option>
												<option <?php echo $row->BOCORAN_T==='B'?'selected="selected"':'' ?>>B</option>
											</select>
											
										</form>

							</td>
							<td>

										

							

								
										
										<form id="FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="BOCORAN_M">

											<input <?php echo $CekDisable." ".$formDisable; ?> value="<?php echo $row->BOCORAN_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>BOCORAN_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="BOCORAN_M" class="form-control" style="width: 90px;">
										</form>


										
									

								
							



							</td>
								<!-- fitur ceklist -->
							<td style="text-align: center;">

								<!-- untuk biaya -->
								<?php if ($_SESSION['level']==='SUP'): ?> 
										<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_B" onSubmit="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="RUSAK_B">

											<?php if ($row->RUSAK_M > 0 ): ?>
											<input value="<?php echo $row->RUSAK_B ?>" id="<?php echo $row->ID_LAPORANDT; ?>RUSAK_B" onChange="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="RUSAK_B" class="form-control" style="width: 90px;">
											<?php endif ?>
										</form>
								<?php endif ?>



								<?php if ($_SESSION['level']==='SEKSI IRIGASI'): ?>
									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="RUSAK">
									<?php if ($row->RUSAK_M > 0  AND $row->RUSAK_T !=="R" ): ?>
									<select style="width: 200px" class="form-control" name="RUSAK"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
										<option></option>
										<option <?php echo $row->RUSAK==='SWAKELOLA'?'selected="selected"':'' ?>>SWAKELOLA</option>
										<option <?php echo $row->RUSAK==='KONTRAKTUAL'?'selected="selected"':'' ?>>KONTRAKTUAL</option>
									</select>
									<?php endif ?>
								</form>
								<?php endif ?>

							<label>
									<input <?php echo $CekDisable." ".$formDisable; ?> <?php echo $row->RUSAK_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','RUSAK_M','RUSAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>RUSAK" class="form-control" type="checkbox" name="RUSAK" style="width: 50px;">


							</label>



								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_T" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="RUSAK_T">
									
											<select  <?php echo $CekDisable." ".$formDisable; ?> style="width: 90px;margin-top: 3%" class="form-control" name="RUSAK_T"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->RUSAK_T==='R'?'selected="selected"':'' ?>>R</option>
												<option <?php echo $row->RUSAK_T==='S'?'selected="selected"':'' ?>>S</option>
												<option <?php echo $row->RUSAK_T==='B'?'selected="selected"':'' ?>>B</option>
											</select>
											
										</form>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="RUSAK_M">

									<input <?php echo $CekDisable." ".$formDisable; ?> value="<?php echo $row->RUSAK_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>RUSAK_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="RUSAK_M" class="form-control" style="width: 90px;">
								</form>


							</td>

							<!-- fitur ceklist -->
							<td style="text-align: center;">


								<!-- untuk biaya -->
								<?php if ($_SESSION['level']==='SUP'): ?> 
										<form id="FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_B" onSubmit="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="LONGSORAN_B">

											<?php if ($row->LONGSORAN_M > 0 ): ?>
											<input value="<?php echo $row->LONGSORAN_B ?>" id="<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_B" onChange="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="LONGSORAN_B" class="form-control" style="width: 90px;">
											<?php endif ?>
										</form>
								<?php endif ?>

								<?php if ($_SESSION['level']==='SEKSI IRIGASI'): ?>
									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="LONGSORAN">


									<?php if ($row->LONGSORAN_M > 0 AND $row->LONGSORAN_T !=="R"  ): ?>
										<select style="width: 200px" class="form-control" name="LONGSORAN"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
										<option></option>
										<option <?php echo $row->LONGSORAN==='SWAKELOLA'?'selected="selected"':'' ?>>SWAKELOLA</option>
										<option <?php echo $row->LONGSORAN==='KONTRAKTUAL'?'selected="selected"':'' ?>>KONTRAKTUAL</option>
									</select>
									<?php endif ?>
									
								</form>
								<?php endif ?>



							<label>
									<input <?php echo $CekDisable." ".$formDisable; ?> <?php echo $row->LONGSORAN_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','LONGSORAN_M','LONGSORAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>LONGSORAN" class="form-control" type="checkbox" name="LONGSORAN" style="width: 50px;">
							</label>

								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_T" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="LONGSORAN_T">
									
											<select  <?php echo $CekDisable." ".$formDisable; ?> style="width: 90px;margin-top: 3%" class="form-control" name="LONGSORAN_T"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->LONGSORAN_T==='R'?'selected="selected"':'' ?>>R</option>
												<option <?php echo $row->LONGSORAN_T==='S'?'selected="selected"':'' ?>>S</option>
												<option <?php echo $row->LONGSORAN_T==='B'?'selected="selected"':'' ?>>B</option>
											</select>
											
										</form>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="LONGSORAN_M">

									<input <?php echo $CekDisable." ".$formDisable; ?> value="<?php echo $row->LONGSORAN_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="LONGSORAN_M" class="form-control" style="width: 90px;">
								</form>


							
							</td>

							<!-- fitur ceklist -->
							<td style="text-align: center;">

									<!-- untuk biaya -->
								<?php if ($_SESSION['level']==='SUP'): ?> 
										<form id="FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_B" onSubmit="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="TERSUMBAT_B">

											<?php if ($row->TERSUMBAT_M > 0 ): ?>
											<input value="<?php echo $row->TERSUMBAT_B ?>" id="<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_B" onChange="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="TERSUMBAT_B" class="form-control" style="width: 90px;">
											<?php endif ?>
										</form>
								<?php endif ?>



								<?php if ($_SESSION['level']==='SEKSI IRIGASI'): ?>
									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="TERSUMBAT">
									<?php if ($row->TERSUMBAT_M > 0 AND $row->TERSUMBAT_T !=="R" ): ?>
									<select style="width: 200px" class="form-control" name="TERSUMBAT"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
										<option></option>
										<option <?php echo $row->TERSUMBAT==='SWAKELOLA'?'selected="selected"':'' ?>>SWAKELOLA</option>
										<option <?php echo $row->TERSUMBAT==='KONTRAKTUAL'?'selected="selected"':'' ?>>KONTRAKTUAL</option>
									</select>
									<?php endif ?>
								</form>
								<?php endif ?>


							<label>
									<input <?php echo $CekDisable." ".$formDisable; ?> <?php echo $row->TERSUMBAT_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','TERSUMBAT_M','TERSUMBAT','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT" class="form-control" type="checkbox" name="TERSUMBAT" style="width: 50px;">
							</label>
							<form id="FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_T" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="TERSUMBAT_T">
									
											<select  <?php echo $CekDisable." ".$formDisable; ?> style="width: 90px;margin-top: 3%" class="form-control" name="TERSUMBAT_T"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->TERSUMBAT_T==='R'?'selected="selected"':'' ?>>R</option>
												<option <?php echo $row->TERSUMBAT_T==='S'?'selected="selected"':'' ?>>S</option>
												<option <?php echo $row->TERSUMBAT_T==='B'?'selected="selected"':'' ?>>B</option>
											</select>
											
										</form>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="TERSUMBAT_M">

									<input <?php echo $CekDisable." ".$formDisable; ?> value="<?php echo $row->TERSUMBAT_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="TERSUMBAT_M" class="form-control" style="width: 90px;">
								</form>

								
							</td>

							<!-- fitur ceklist -->
							<td style="text-align: center;">

									<!-- untuk biaya -->
								<?php if ($_SESSION['level']==='SUP'): ?> 
										<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_B" onSubmit="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="RETAK_B">

											<?php if ($row->RETAK_M > 0 ): ?>
											<input value="<?php echo $row->RETAK_B ?>" id="<?php echo $row->ID_LAPORANDT; ?>RETAK_B" onChange="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="RETAK_B" class="form-control" style="width: 90px;">
											<?php endif ?>
										</form>
								<?php endif ?>



								<?php if ($_SESSION['level']==='SEKSI IRIGASI'): ?>
									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RETAK" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="RETAK">
									<?php if ($row->RETAK_M > 0  AND $row->RETAK_T !=="R" ): ?>
									<select style="width: 200px" class="form-control" name="RETAK"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
										<option></option>
										<option <?php echo $row->RETAK==='SWAKELOLA'?'selected="selected"':'' ?>>SWAKELOLA</option>
										<option <?php echo $row->RETAK==='KONTRAKTUAL'?'selected="selected"':'' ?>>KONTRAKTUAL</option>
									</select>
									<?php endif ?>
								</form>
								<?php endif ?>


							<label>
									<input <?php echo $CekDisable." ".$formDisable; ?> <?php echo $row->RETAK_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','RETAK_M','RETAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>RETAK" class="form-control" type="checkbox" name="RETAK" style="width: 50px;">
							</label>

							<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_T" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="RETAK_T">
									
											<select  <?php echo $CekDisable." ".$formDisable; ?> style="width: 90px;margin-top: 3%" class="form-control" name="RETAK_T"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->RETAK_T==='R'?'selected="selected"':'' ?>>R</option>
												<option <?php echo $row->RETAK_T==='S'?'selected="selected"':'' ?>>S</option>
												<option <?php echo $row->RETAK_T==='B'?'selected="selected"':'' ?>>B</option>
											</select>
											
										</form>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="RETAK_M">

									<input <?php echo $CekDisable." ".$formDisable; ?> value="<?php echo $row->RETAK_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>RETAK_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="RETAK_M" class="form-control" style="width: 90px;">
								</form>

								
							</td>
							<!-- fitur ceklist -->
							<td style="text-align: center;">

									<!-- untuk biaya -->
								<?php if ($_SESSION['level']==='SUP'): ?> 
										<form id="FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_B" onSubmit="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="PINTU_RUSAK_B">

											<?php if ($row->PINTU_RUSAK_M > 0 ): ?>
											<input value="<?php echo $row->PINTU_RUSAK_B ?>" id="<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_B" onChange="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="PINTU_RUSAK_B" class="form-control" style="width: 90px;">
											<?php endif ?>
										</form>
								<?php endif ?>


									<?php if ($_SESSION['level']==='SEKSI IRIGASI'): ?>
									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="PINTU_RUSAK">
									<?php if ($row->PINTU_RUSAK_M > 0 AND $row->PINTU_RUSAK_T !=="R" ): ?>
									<select style="width: 200px" class="form-control" name="PINTU_RUSAK"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
										<option></option>
										<option <?php echo $row->PINTU_RUSAK==='SWAKELOLA'?'selected="selected"':'' ?>>SWAKELOLA</option>
										<option <?php echo $row->PINTU_RUSAK==='KONTRAKTUAL'?'selected="selected"':'' ?>>KONTRAKTUAL</option>
									</select>
									<?php endif ?>
								</form>
								<?php endif ?>

							<label>
									<input <?php echo $CekDisable." ".$formDisable; ?> <?php echo $row->PINTU_RUSAK_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','PINTU_RUSAK_M','PINTU_RUSAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK" class="form-control" type="checkbox" name="PINTU_RUSAK" style="width: 50px;">
							</label>
	<form id="FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_T" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="PINTU_RUSAK_T">
									
											<select  <?php echo $CekDisable." ".$formDisable; ?> style="width: 90px;margin-top: 3%" class="form-control" name="PINTU_RUSAK_T"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->PINTU_RUSAK_T==='R'?'selected="selected"':'' ?>>R</option>
												<option <?php echo $row->PINTU_RUSAK_T==='S'?'selected="selected"':'' ?>>S</option>
												<option <?php echo $row->PINTU_RUSAK_T==='B'?'selected="selected"':'' ?>>B</option>
											</select>
											
										</form>
							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="PINTU_RUSAK_M">

									<input <?php echo $CekDisable." ".$formDisable; ?> value="<?php echo $row->PINTU_RUSAK_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="PINTU_RUSAK_M" class="form-control" style="width: 90px;">
								</form>

							
							</td>

							<!-- fitur ceklist -->
							<td style="text-align: center;">

									<!-- untuk biaya -->
								<?php if ($_SESSION['level']==='SUP'): ?> 
										<form id="FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_B" onSubmit="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="SEDIMEN_B">

											<?php if ($row->SEDIMEN_M > 0 ): ?>
											<input value="<?php echo $row->SEDIMEN_B ?>" id="<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_B" onChange="editDataBiaya('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_B','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="SEDIMEN_B" class="form-control" style="width: 90px;">
											<?php endif ?>
										</form>
								<?php endif ?>



								<?php if ($_SESSION['level']==='SEKSI IRIGASI'): ?>
									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="SEDIMEN">
									<?php if ($row->SEDIMEN_M > 0 AND $row->SEDIMEN_T !=="R" ): ?>
									<select style="width: 200px" class="form-control" name="SEDIMEN"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
										<option></option>
										<option <?php echo $row->SEDIMEN==='SWAKELOLA'?'selected="selected"':'' ?>>SWAKELOLA</option>
										<option <?php echo $row->SEDIMEN==='KONTRAKTUAL'?'selected="selected"':'' ?>>KONTRAKTUAL</option>
									</select>
									<?php endif ?>
								</form>
								<?php endif ?>

							<label>
									<input <?php echo $CekDisable." ".$formDisable; ?> <?php echo $row->SEDIMEN_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','SEDIMEN_M','SEDIMEN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>SEDIMEN" class="form-control" type="checkbox" name="SEDIMEN" style="width: 50px;">
							</label>

							
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_T" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="SEDIMEN_T">
									
											<select  <?php echo $CekDisable." ".$formDisable; ?> style="width: 90px;margin-top: 3%" class="form-control" name="SEDIMEN_T"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_T','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->SEDIMEN_T==='R'?'selected="selected"':'' ?>>R</option>
												<option <?php echo $row->SEDIMEN_T==='S'?'selected="selected"':'' ?>>S</option>
												<option <?php echo $row->SEDIMEN_T==='B'?'selected="selected"':'' ?>>B</option>
											</select>
											
										</form>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="SEDIMEN_M">

									<input <?php echo $CekDisable." ".$formDisable; ?> value="<?php echo $row->SEDIMEN_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="SEDIMEN_M" class="form-control" style="width: 90px;">
								</form>

							</td>
				
				






							
							<td>

								<?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='SUP' OR $_SESSION['level']==='MANTRI'): ?>

								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="LAIN_LAIN">

									<input <?php echo $CekDisable." ".$formDisable; ?> value="<?php echo $row->LAIN_LAIN ?>" id="<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="LAIN_LAIN" class="form-control" style="width: 100%">
								</form>
								<?php endif ?>


								<!-- <form id="FORM<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="LAIN_LAIN">

									<input <?php echo $CekDisable." ".$formDisable; ?> value="<?php echo $row->LAIN_LAIN ?>" id="<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="LAIN_LAIN" class="form-control" style="width: 100%">
								</form> -->
							</td>
							<?php endif ?>


						<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='ADMIN'): ?>
								<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>DIKERJAKAN" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>DIKERJAKAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="DIKERJAKAN">

									<input value="<?php echo $row->DIKERJAKAN ?>" id="<?php echo $row->ID_LAPORANDT; ?>DIKERJAKAN" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>DIKERJAKAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="DIKERJAKAN" class="form-control" style="width: 90px;">
								</form>
							</td>



							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>USULAN" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>USULAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="USULAN">

									<input value="<?php echo $row->USULAN ?>" id="<?php echo $row->ID_LAPORANDT; ?>USULAN" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>USULAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="USULAN" class="form-control" style="width: 100%;">
								</form>
							</td>

				

						<?php endif ?>
							

<!-- area suip -->
							<?php
								if($_SESSION['level']==='SUP' OR $_SESSION['level']==='ADMIN'){
							?>

								<td>
									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_RUGI" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_RUGI','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

										<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
										<input type="hidden" name="KOLOM" value="ESTIMASI_RUGI">

										<input value="<?php echo $row->ESTIMASI_RUGI ?>" id="<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_RUGI" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_RUGI','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="ESTIMASI_RUGI" class="form-control" style="width: 90px;">
									</form>
								</td>

	<td>
									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_PERBAIKAN" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_PERBAIKAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

										<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
										<input type="hidden" name="KOLOM" value="ESTIMASI_PERBAIKAN">

										<input readonly="readonly" value="<?php echo $row->ESTIMASI_PERBAIKAN ?>" id="<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_PERBAIKAN" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_PERBAIKAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="ESTIMASI_PERBAIKAN" class="form-control" style="width: 90px;">
									</form>
								</td>


							<td>
								

									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>PRIORITAS" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PRIORITAS','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="PRIORITAS">
									
											<select  style="width: 90px;margin-top: 3%" class="form-control" name="PRIORITAS"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PRIORITAS','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->PRIORITAS==='1'?'selected="selected"':'' ?>>1</option>
												<option <?php echo $row->PRIORITAS==='2'?'selected="selected"':'' ?>>2</option>
												<option <?php echo $row->PRIORITAS==='3'?'selected="selected"':'' ?>>3</option>
											</select>
											
										</form>


								</td>


							<?php 
								}
							?>

							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>AREA_BAWAH" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>AREA_BAWAH','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="AREA_BAWAH">

									<input  value="<?php echo $row->AREA_BAWAH ?>" id="<?php echo $row->ID_LAPORANDT; ?>AREA_BAWAH" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>AREA_BAWAH','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="AREA_BAWAH" class="form-control" style="width: 100%;">
								</form>
							</td>

							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>DESA" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>DESA','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="DESA">

									<input value="<?php echo $row->DESA ?>" id="<?php echo $row->ID_LAPORANDT; ?>DESA" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>DESA','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="DESA" class="form-control" style="width: 100%">
								</form>
							</td>

							<!-- area SUP -->

							<!-- foto before -->
		<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='ADMIN'): ?>

										<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE1" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE1','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_BEFORE1">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_BEFORE1; ?>">
									
									<!-- <?php echo $row->FOTO_BEFORE1 ?> -->

									<?php if (strlen($row->FOTO_BEFORE1)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_BEFORE1' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_BEFORE1 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE1" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE1','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_BEFORE1"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_BEFORE1)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_BEFORE1.'/'.$row->ID_LAPORANDT.'/FOTO_BEFORE1'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>


							<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE2" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE2','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_BEFORE2">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_BEFORE2; ?>">
									
									<!-- <?php echo $row->FOTO_BEFORE2 ?> -->

									<?php if (strlen($row->FOTO_BEFORE2)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_BEFORE2' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_BEFORE2 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE2" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE2','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_BEFORE2"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_BEFORE2)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_BEFORE2.'/'.$row->ID_LAPORANDT.'/FOTO_BEFORE2'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>

							<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE3" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE3','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_BEFORE3">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_BEFORE3; ?>">
									
									<!-- <?php echo $row->FOTO_BEFORE3 ?> -->

									<?php if (strlen($row->FOTO_BEFORE3)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_BEFORE3' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_BEFORE3 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE3" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE3','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_BEFORE3"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_BEFORE3)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_BEFORE3.'/'.$row->ID_LAPORANDT.'/FOTO_BEFORE3'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>

							<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE4" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE4','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_BEFORE4">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_BEFORE4; ?>">
									
									<!-- <?php echo $row->FOTO_BEFORE4 ?> -->

									<?php if (strlen($row->FOTO_BEFORE4)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_BEFORE4' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_BEFORE4 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE4" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE4','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_BEFORE4"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_BEFORE4)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_BEFORE4.'/'.$row->ID_LAPORANDT.'/FOTO_BEFORE4'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>

							<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE5" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE5','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_BEFORE5">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_BEFORE5; ?>">
									
									<!-- <?php echo $row->FOTO_BEFORE5 ?> -->

									<?php if (strlen($row->FOTO_BEFORE5)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_BEFORE5' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_BEFORE5 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='MANTRI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE5" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE5','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_BEFORE5"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_BEFORE5)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_BEFORE5.'/'.$row->ID_LAPORANDT.'/FOTO_BEFORE5'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>
							<td>

									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="FOTO_BEFORE">
									
											<select  style="width: 250px;margin-top: 3%" class="form-control" name="FOTO_BEFORE"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->FOTO_BEFORE==='FOTO_BEFORE1'?'selected="selected"':'' ?>>FOTO_BEFORE1</option>

												<option <?php echo $row->FOTO_BEFORE==='FOTO_BEFORE2'?'selected="selected"':'' ?>>FOTO_BEFORE2</option>

												<option <?php echo $row->FOTO_BEFORE==='FOTO_BEFORE3'?'selected="selected"':'' ?>>FOTO_BEFORE3</option>

												<option <?php echo $row->FOTO_BEFORE==='FOTO_BEFORE4'?'selected="selected"':'' ?>>FOTO_BEFORE4</option>

												<option <?php echo $row->FOTO_BEFORE==='FOTO_BEFORE5'?'selected="selected"':'' ?>>FOTO_BEFORE5</option>
											</select>
											
										</form>
								
							</td>

							<?php endif ?>

							<!-- foto after -->

								<?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='ADMIN'): ?>

								<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER1" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER1','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_AFTER1">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_AFTER1; ?>">
									
									<!-- <?php echo $row->FOTO_AFTER1 ?> -->

									<?php if (strlen($row->FOTO_AFTER1)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_AFTER1' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_AFTER1 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER1" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER1','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_AFTER1"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_AFTER1)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_AFTER1.'/'.$row->ID_LAPORANDT.'/FOTO_AFTER1'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>


							<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER2" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER2','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_AFTER2">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_AFTER2; ?>">
									
									<!-- <?php echo $row->FOTO_AFTER2 ?> -->

									<?php if (strlen($row->FOTO_AFTER2)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_AFTER2' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_AFTER2 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER2" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER2','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_AFTER2"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_AFTER2)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_AFTER2.'/'.$row->ID_LAPORANDT.'/FOTO_AFTER2'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>

							<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER3" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER3','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_AFTER3">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_AFTER3; ?>">
									
									<!-- <?php echo $row->FOTO_AFTER3 ?> -->

									<?php if (strlen($row->FOTO_AFTER3)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_AFTER3' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_AFTER3 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER3" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER3','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_AFTER3"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_AFTER3)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_AFTER3.'/'.$row->ID_LAPORANDT.'/FOTO_AFTER3'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>

							<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER4" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER4','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_AFTER4">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_AFTER4; ?>">
									
									<!-- <?php echo $row->FOTO_AFTER4 ?> -->

									<?php if (strlen($row->FOTO_AFTER4)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_AFTER4' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_AFTER4 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER4" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER4','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_AFTER4"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_AFTER4)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_AFTER4.'/'.$row->ID_LAPORANDT.'/FOTO_AFTER4'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>

							<td>

								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER5" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER5','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_AFTER5">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_AFTER5; ?>">
									
									<!-- <?php echo $row->FOTO_AFTER5 ?> -->

									<?php if (strlen($row->FOTO_AFTER5)>0): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_AFTER5' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_AFTER5 ?>" width="50" height="50">

										</a>

									<?php endif ?>

								
									<?php if ($_SESSION['level']==='SEKSI IRIGASI' OR $_SESSION['level']==='ADMIN'): ?>
										<input  type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER5" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER5','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_AFTER5"  style="width: 100px;">
									<?php endif ?>

									<?php if (strlen($row->FOTO_AFTER5)>0 AND $_SESSION['level']==='ADMIN'): ?>
										<a onclick="return confirm('Apakah Anda yakin hapus foto ini ?')" href="<?php echo base_url().'laporanhd/hapus_foto/'.$ID_LAPORANHD.'/'.$row->FOTO_AFTER5.'/'.$row->ID_LAPORANDT.'/FOTO_AFTER5'; ?>" class="btn btn-danger btn-sm">HAPUS</a>	

										<?php endif ?>
									
								</form>

							</td>
							<td>

									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">
											<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
											<input type="hidden" name="KOLOM" value="FOTO_AFTER">
									
											<select  style="width: 250px;margin-top: 3%" class="form-control" name="FOTO_AFTER"  onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>');">
												<option></option>
												<option <?php echo $row->FOTO_AFTER==='FOTO_AFTER1'?'selected="selected"':'' ?>>FOTO_AFTER1</option>

												<option <?php echo $row->FOTO_AFTER==='FOTO_AFTER2'?'selected="selected"':'' ?>>FOTO_AFTER2</option>

												<option <?php echo $row->FOTO_AFTER==='FOTO_AFTER3'?'selected="selected"':'' ?>>FOTO_AFTER3</option>

												<option <?php echo $row->FOTO_AFTER==='FOTO_AFTER4'?'selected="selected"':'' ?>>FOTO_AFTER4</option>

												<option <?php echo $row->FOTO_AFTER==='FOTO_AFTER5'?'selected="selected"':'' ?>>FOTO_AFTER5</option>
											</select>
											
										</form>
								
							</td>

								<?php endif ?>



						


					

				  		</tr>

								<?php 
				  			endforeach;
				  		?>
 

						
					</tbody>
				</table>