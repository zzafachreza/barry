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
						<th>LAIN-LAIN</th>
						<th>DIKERJAKAN</th>
						<th>USULAN TINDAK</th>
						<th>LANJUT</th>
						<th>AREA_BAWAH</th>
						<th>DESA</th>
						<th>ESTIMASI_RUGI</th>
						<th>ESTIMASI_PERBAIKAN</th>
						<th>PRIORITAS</th>

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

							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->id_bangunan; ?>','RUSAK_M')" class="form-control" type="checkbox" name="RUSAK" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>RUSAK_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>RUSAK_M" type="text" name="RUSAK_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->id_bangunan; ?>','LONGSORAN_M')" class="form-control" type="checkbox" name="LONGSORAN" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>LONGSORAN_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>LONGSORAN_M" type="text" name="LONGSORAN_M" class="form-control" style="width: 90px;">
								</form>
							</td>
							
							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->id_bangunan; ?>','TERSUMBAT_M')" class="form-control" type="checkbox" name="TERSUMBAT" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>TERSUMBAT_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>TERSUMBAT_M" type="text" name="TERSUMBAT_M" class="form-control" style="width: 90px;">
								</form>
							</td>

							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->id_bangunan; ?>','RETAK_M')" class="form-control" type="checkbox" name="RETAK" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>RETAK_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>RETAK_M" type="text" name="RETAK_M" class="form-control" style="width: 90px;">
								</form>
							</td>


							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->id_bangunan; ?>','PINTU_RUSAK_M')" class="form-control" type="checkbox" name="PINTU_RUSAK" style="width: 50px;">
							</label>

							</td>
							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>PINTU_RUSAK_M" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>PINTU_RUSAK_M" type="text" name="PINTU_RUSAK_M" class="form-control" style="width: 90px;">
								</form>
							</td>


							
							<td style="text-align: center;">
							<label>
									<input onclick="cekList('<?php echo $ID_LAPORANHD; ?>','<?php echo $row->id_bangunan; ?>','SEDIMEN_M')" class="form-control" type="checkbox" name="SEDIMEN" style="width: 50px;">
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

							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>ESTIMASI_RUGI" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>ESTIMASI_RUGI" type="text" name="ESTIMASI_RUGI" class="form-control" style="width: 90px;">
								</form>
							</td>

							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>ESTIMASI_PERBAIKAN" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>ESTIMASI_PERBAIKAN" type="text" name="ESTIMASI_PERBAIKAN" class="form-control" style="width: 90px;">
								</form>
							</td>

							<td>
								<form id="FORM<?php echo $row->id_bangunan; ?>PRIORITAS" onSubmit="alert('asd'); return false;">
									<input id="<?php echo $row->id_bangunan; ?>PRIORITAS" type="text" name="PRIORITAS" class="form-control" style="width: 90px;">
								</form>
							</td>

					

				  		</tr>

								<?php 
				  			endforeach;
				  		?>
 

						
					</tbody>
				</table>