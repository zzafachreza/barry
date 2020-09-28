<style type="text/css">
 	#dtHorizontalVerticalExample th, td { white-space: nowrap; }
 </style>
					<table id="dtHorizontalVerticalExamplea" class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>NO</th>
						<th>NAMA RUAS SALURAN</th>
						<th>NAMA BAGUNAN DAN TIPENYA</th>
						<th>BOCORAN (M'/BH)</th>
						<th>RUSAK/PUTUS (M')</th>
						<th>LONGSORAN/TONJOLAN(M')</th>
						<th>TERSUMBAT(M'/BH)</th>
						<th>RETAK(M')</th>
						<th>PINTU RUSAK (BH)</th>
						<th>SEDIMEN/WALED (H)</th>
						<th>MASUKAN LAIN - LAIN</th>
						<th>DIKERJAKAN</th>
						<th>USULAN TINDAK LANJUT</th>
						<th>ESTIMASI_RUGI</th>
						<th>ESTIMASI_PERBAIKAN</th>
						<th>AREAL LAYANAN DI BAWAHNYA</th>
						<th>DESA / KECAMATAN</th>
						<th>FOTO_BEFORE</th>
						<th>FOTO_AFTER</th>

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
							<?php echo $row->BOCORAN_M; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->RUSAK_M; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->LONGSORAN_M; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->TERSUMBAT_M; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->RETAK_M; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->RETAK_M; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->SEDIMEN_M; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->LAIN_LAIN; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->DIKERJAKAN; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->USULAN; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->ESTIMASI_RUGI; ?>
							</td>
<td style="text-align: center;">
							<?php echo $row->ESTIMASI_PERBAIKAN; ?>
							</td>


							<td style="text-align: center;">
							<?php echo $row->PRIORITAS; ?>
							</td>

							<td style="text-align: center;">
							<?php echo $row->AREA_BAWAH; ?>
							</td>

						<td style="text-align: center;">
							<?php echo $row->DESA; ?>
							</td>

							<td style="text-align: center;">
							<?php echo $row->FOTO_BEFORE; ?>
							</td>
							<td style="text-align: center;">
							<?php echo $row->FOTO_AFTER; ?>
							</td>


					

				  		</tr>

								<?php 
				  			endforeach;
				  		?>
 

						
					</tbody>
				</table>