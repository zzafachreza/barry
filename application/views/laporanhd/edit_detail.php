<style type="text/css">
 	#dtHorizontalVerticalExample th, td { white-space: nowrap; }
 </style>
					<table id="dtHorizontalVerticalExample" class="table table-striped table-bordered">
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
						<th>MASUKAN LAIN - LAIN</th>

						<?php if ($_SESSION['level']==='MANTRI'): ?>
							<th>DIKERJAKAN</th>
							<th>USULAN TINDAK LANJUT</th>
						<?php endif ?>


					

					<?php if ($_SESSION['level']==='SUP'): ?>
						<th>ESTIMASI_RUGI</th>
						<th>ESTIMASI_PERBAIKAN</th>
						<th>PRIORITAS</th>
					<?php endif ?>
						<th>AREAL LAYANAN DI BAWAHNYA</th>
						<th>DESA / KECAMATAN</th>

						<th>FOTO_BEFORE</th>
						<?php if ($_SESSION['level']==='SEKSI IRIGASI'): ?>
						<th>FOTO_AFTER</th>
						<?php endif ?>

					</tr>
					</thead>
					<tbody>

						 <?php
			  				$no=0;
			  				foreach($laporandt->result() as $row):
			  				$no++;
				  		?>

				  		<tr>
				  			<td><?php echo $no ?></td>
				  			<td><?php echo $row->nama_ruas; ?></td>
				  			<td><?php echo $row->nama_bangunan; ?></td>
				  			

				  			<!-- fitur ceklist -->
							<td style="text-align: center;">
							<label>
									<input <?php echo $row->BOCORAN_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','BOCORAN_M','BOCORAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>BOCORAN" class="form-control" type="checkbox" name="BOCORAN" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="BOCORAN_M">

									<input value="<?php echo $row->BOCORAN_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>BOCORAN_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>BOCORAN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="BOCORAN_M" class="form-control" style="width: 90px;">
								</form>
							</td>
								<!-- fitur ceklist -->
							<td style="text-align: center;">
							<label>
									<input <?php echo $row->RUSAK_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','RUSAK_M','RUSAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>RUSAK" class="form-control" type="checkbox" name="RUSAK" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="RUSAK_M">

									<input value="<?php echo $row->RUSAK_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>RUSAK_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RUSAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="RUSAK_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<!-- fitur ceklist -->
							<td style="text-align: center;">
							<label>
									<input <?php echo $row->LONGSORAN_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','LONGSORAN_M','LONGSORAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>LONGSORAN" class="form-control" type="checkbox" name="LONGSORAN" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="LONGSORAN_M">

									<input value="<?php echo $row->LONGSORAN_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LONGSORAN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="LONGSORAN_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<!-- fitur ceklist -->
							<td style="text-align: center;">
							<label>
									<input <?php echo $row->TERSUMBAT_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','TERSUMBAT_M','TERSUMBAT','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT" class="form-control" type="checkbox" name="TERSUMBAT" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="TERSUMBAT_M">

									<input value="<?php echo $row->TERSUMBAT_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>TERSUMBAT_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="TERSUMBAT_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<!-- fitur ceklist -->
							<td style="text-align: center;">
							<label>
									<input <?php echo $row->RETAK_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','RETAK_M','RETAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>RETAK" class="form-control" type="checkbox" name="RETAK" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="RETAK_M">

									<input value="<?php echo $row->RETAK_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>RETAK_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>RETAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="RETAK_M" class="form-control" style="width: 90px;">
								</form>
							</td>
							<!-- fitur ceklist -->
							<td style="text-align: center;">
							<label>
									<input <?php echo $row->PINTU_RUSAK_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','PINTU_RUSAK_M','PINTU_RUSAK','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK" class="form-control" type="checkbox" name="PINTU_RUSAK" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="PINTU_RUSAK_M">

									<input value="<?php echo $row->PINTU_RUSAK_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PINTU_RUSAK_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="PINTU_RUSAK_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<!-- fitur ceklist -->
							<td style="text-align: center;">
							<label>
									<input <?php echo $row->SEDIMEN_M !=0?"checked='checked'":"" ?> onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->ID_LAPORANDT; ?>','SEDIMEN_M','SEDIMEN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>')" id="<?php echo $row->ID_LAPORANDT; ?>SEDIMEN" class="form-control" type="checkbox" name="SEDIMEN" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_M" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="SEDIMEN_M">

									<input value="<?php echo $row->SEDIMEN_M ?>" id="<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_M" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>SEDIMEN_M','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="SEDIMEN_M" class="form-control" style="width: 90px;">
								</form>
							</td>
				
				






							
							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="LAIN_LAIN">

									<input value="<?php echo $row->LAIN_LAIN ?>" id="<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>LAIN_LAIN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="LAIN_LAIN" class="form-control" style="width: 100%">
								</form>
							</td>


						<?php if ($_SESSION['level']==='MANTRI'): ?>
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
								if($_SESSION['level']==='SUP'){
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

										<input value="<?php echo $row->ESTIMASI_PERBAIKAN ?>" id="<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_PERBAIKAN" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>ESTIMASI_PERBAIKAN','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="ESTIMASI_PERBAIKAN" class="form-control" style="width: 90px;">
									</form>
								</td>


							<td>
									<form id="FORM<?php echo $row->ID_LAPORANDT; ?>PRIORITAS" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PRIORITAS','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

										<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
										<input type="hidden" name="KOLOM" value="PRIORITAS">

										<input value="<?php echo $row->PRIORITAS ?>" id="<?php echo $row->ID_LAPORANDT; ?>PRIORITAS" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>PRIORITAS','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="PRIORITAS" class="form-control" style="width: 90px;">
									</form>
								</td>


							<?php 
								}
							?>

							<td>
								<form id="FORM<?php echo $row->ID_LAPORANDT; ?>AREA_BAWAH" onSubmit="editData('FORM<?php echo $row->ID_LAPORANDT; ?>AREA_BAWAH','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;">

									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="AREA_BAWAH">

									<input value="<?php echo $row->AREA_BAWAH ?>" id="<?php echo $row->ID_LAPORANDT; ?>AREA_BAWAH" onChange="editData('FORM<?php echo $row->ID_LAPORANDT; ?>AREA_BAWAH','<?php echo base_url().'/laporanhd/update_detail/'.$row->ID_LAPORANHD ?>'); return false;" type="text" name="AREA_BAWAH" class="form-control" style="width: 90px;">
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

							<!-- foto -->

							<td>
								<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_BEFORE">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_BEFORE; ?>">
									
									<?php if (isset($row->FOTO_BEFORE)): ?>
										<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_BEFORE' ?>" target="_BLANK">

										<img src="<?php echo base_url().'upload/'.$row->FOTO_BEFORE ?>" width="50">

									</a>	

									<?php endif ?>

									<input type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_BEFORE','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_BEFORE"  style="width: 100px;">
									<!-- <button type="submit" class="btn AppButton-primary">UPLOAD</button> -->
								</form>


							</td>
							<?php if ($_SESSION['level']==='SEKSI IRIGASI'): ?>
							<td>
									<form enctype="multipart/form-data" id="FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER" onSubmit="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;">


									<input type="hidden" name="ID_LAPORANDT" value="<?php echo $row->ID_LAPORANDT; ?>">
									<input type="hidden" name="KOLOM" value="FOTO_AFTER">
									<input type="hidden" name="FOTO_OLD" value="<?php echo $row->FOTO_AFTER; ?>">
										
										<?php if (isset($row->FOTO_AFTER)): ?>
									<a href="<?php echo base_url().'/laporanhd/view_detail_foto/'.$row->ID_LAPORANDT.'/FOTO_AFTER' ?>" target="_BLANK">
										<img src="<?php echo base_url().'upload/'.$row->FOTO_AFTER ?>" width="50">
									</a>	

									<?php endif ?>


									<input type="file"  id="<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER" onChange="editDataFoto('FORM<?php echo $row->ID_LAPORANDT; ?>FOTO_AFTER','<?php echo base_url().'/laporanhd/update_detail_foto/'.$row->ID_LAPORANHD ?>','<?php echo site_url()."/laporanhd/edit_detail/".$ID_LAPORANHD ?>','<?php echo $row->ID_LAPORANHD; ?>'); return false;"  name="FOTO_AFTER"  style="width: 100px;">
									<!-- <button type="submit" class="btn AppButton-primary">UPLOAD</button> -->
								</form>
							</td>
											<?php endif ?>


					

				  		</tr>

								<?php 
				  			endforeach;
				  		?>
 

						
					</tbody>
				</table>