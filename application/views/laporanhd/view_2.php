<?php

// header("Content-type: application/octet-stream");
// header("Content-Disposition: attachment; filename=LAPORAN.xls");//ganti nama sesuai keperluan
// header("Pragma: no-cache");
// header("Expires: 0");
error_reporting(0);
// print_r($laporanhd);
// // print_r($laporandt);


?>
<style type="text/css">
	.navbar{
		display: none;
	}
</style>



<table class="table table-bordered table-reponsive">
					<thead>
					 <tr>
              				<td colspan="15" border="0">
		              			<center>
									<h1>LAPORAN KERUSAKAN JARINGAN IRIGASI</h1>
									
										<h3>Inspeksi Rutin  Tanggal <?php echo tglIndonesia2($laporanhd['TANGGAL'])  ?></h3>
								</center>
								</td>
							<td colspan="3" border="0">
			              			<center>
										<h2>Blanko 02 - P</h2>
									</center>
							</td>
		            </tr>

		            <tr>
		            	<td border="0" colspan="4">DAERAH IRIGASI</td>
		            	<td border="0" colspan="10">: <?php echo $laporanhd['DAERAH_IRIGASI'] ?></td>

		            	<td border="0" colspan="2">KABUPATEN</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['KABUPATEN'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TOTAL LUAS AREAL DI</td>
		            	<td border="0" colspan="10">: <?php echo $laporanhd['LUAS_AREA_IRIGASI'] ?> Ha</td>

		            	<td border="0" colspan="2">PENGAMAT/RANTING</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['RANTING'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TINGKATAN DI : T / ST / SD</td>
		            	<td border="0" colspan="10">: <?php echo $laporanhd['TINGKATAN_IRIGASI'] ?></td>

		            	<td border="0" colspan="2">JURU/MANTRI</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['MANTRI'] ?></td>
		            </tr>
		       
		            <tr>
		            	<td colspan="18">
		            		&nbsp;
		            	</td>
		            </tr>
					<tr>
						<th rowspan="2">NO</th>
						<th rowspan="2">NAMA RUAS SALURAN</th>
						<th rowspan="2">NAMA BAGUNAN DAN TIPENYA</th>
						<th colspan="8">KEADAAN</th>
						<th colspan="2">PERKIRAAN BIAYA	</th>
						<th rowspan="2">PRIORITAS</th>
						<th rowspan="2">AREAL LAYANAN DI BAWAHNYA</th>
						<th rowspan="2">DESA / KECAMATAN</th>
						<th rowspan="2">FOTO_BEFORE</th>
					</tr>
					<tr>
						<th>BOCORAN (M'/BH)</th>
						<th>RUSAK/PUTUS (M')</th>
						<th>LONGSORAN/TONJOLAN(M')</th>
						<th>TERSUMBAT(M'/BH)</th>
						<th>RETAK(M')</th>
						<th>PINTU_RUSAK (BH)</th>
						<th>SEDIMEN/WALED (H)</th>
						<th>MASUKAN LAIN - LAIN</th>

						<th>ESTIMASI_RUGI</th>
						<th>ESTIMASI_PERBAIKAN</th>
						
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
						<td>16</td>
						<td>17</td>


					</tr>
					</thead>
					<tbody>
						 <?php
			  				$no=0;
			  				$ESTIMASI_PERBAIKAN_TOTAL =0;
			  				foreach($laporandt->result() as $row):
			  				$no++;
				  		if ($row->ID_LAPORANHD !== $laporanhd['ID_LAPORANHD']) {
			  					# code...
			  					$splitya = 'style="display:none"';
			  				}else{
			  					$splitya = '';
			  					$ESTIMASI_PERBAIKAN_TOTAL += $row->ESTIMASI_PERBAIKAN;
			  					$ESTIMASI_RUGI_TOTAL += $row->ESTIMASI_RUGI;
			  				}
				  		?>
				  		<tr <?php echo $splitya; ?>>
				  			<td ><?php echo $no ?></td>
				  			<td><?php echo $row->nama_ruas; ?></td>
				  			<td><?php echo $row->nama_bangunan; ?></td>
							<td><?php echo $row->BOCORAN_M; ?><br/>
								<?php echo $row->BOCORAN_M>0 ? '( '.$row->BOCORAN_T.' )':''; ?><br/>
								<strong><?php echo $row->BOCORAN_M>0 ? '( '.number_format($row->BOCORAN_B).' )':''; ?></strong>
							</td>
							<td><?php echo $row->RUSAK_M; ?><br/>
								<?php echo $row->RUSAK_M>0 ? '( '.$row->RUSAK_T.' )':''; ?><br/>
								<strong><?php echo $row->RUSAK_M>0 ? '( '.number_format($row->RUSAK_B).' )':''; ?></strong>
							</td>
							<td><?php echo $row->LONGSORAN_M; ?><br/>
								<?php echo $row->LONGSORAN_M>0 ? '( '.$row->LONGSORAN_T.' )':''; ?><br/>
								<strong><?php echo $row->LONGSORAN_M>0 ? '( '.number_format($row->LONGSORAN_B).' )':''; ?></strong>
							</td>
							<td><?php echo $row->TERSUMBAT_M; ?><br/>
								<?php echo $row->TERSUMBAT_M>0 ? '( '.$row->TERSUMBAT_T.' )':''; ?><br/>
								<strong><?php echo $row->TERSUMBAT_M>0 ? '( '.number_format($row->TERSUMBAT_B).' )':''; ?></strong>
							</td>
							<td><?php echo $row->RETAK_M; ?><br/>
								<?php echo $row->RETAK_M>0 ? '( '.$row->RETAK_T.' )':''; ?><br/>
									<strong><?php echo $row->RETAK_M>0 ? '( '.number_format($row->RETAK_B).' )':''; ?></strong>
							</td>
							<td><?php echo $row->PINTU_RUSAK_M; ?><br/>
								<?php echo $row->PINTU_RUSAK_M>0 ? '( '.$row->PINTU_RUSAK_T.' )':''; ?><br/>
								<strong><?php echo $row->PINTU_RUSAK_M>0 ? '( '.number_format($row->PINTU_RUSAK_B).' )':''; ?></strong>
							</td>
							<td><?php echo $row->SEDIMEN_M; ?><br/>
								<?php echo $row->SEDIMEN_M>0 ? '( '.$row->SEDIMEN_T.' )':''; ?><br/>
								<strong><?php echo $row->SEDIMEN_M>0 ? '( '.number_format($row->SEDIMEN_B).' )':''; ?></strong>
							</td>
							<td><?php echo $row->LAIN_LAIN; ?></td>
							<td><?php echo number_format($row->ESTIMASI_RUGI); ?></td>
							<td><?php echo number_format($row->ESTIMASI_PERBAIKAN); ?></td>
							<td><?php echo $row->PRIORITAS; ?></td>
							<td><?php echo $row->AREA_BAWAH; ?></td>
							<td><?php echo $row->DESA; ?></td>
						<td>	
								<?php $gambar =$row->FOTO_BEFORE; ?>
								<?php if (strlen($row->FOTO_BEFORE) > 0 ): ?>
									<center>
										<img height="100" src="<?php echo site_url().'upload/'.$row->$gambar; ?>">
									</center>

								<?php endif ?>
								
							</td>
				
				  		</tr>
						<?php endforeach; ?>
						
						<tr style="text-align: center;">
							<td colspan="11">Total</td>
							<td><h6><?php echo number_format($ESTIMASI_RUGI_TOTAL) ?></h6></td>
							<td><h6><?php echo number_format($ESTIMASI_PERBAIKAN_TOTAL) ?></h6></td>
							<td colspan="4"></td>
						</tr>

							<tr>
							<td colspan="14">
								<p>Penjelasan : </p>
								<ol>
									<li>Diserahkan tiap tanggal 25 bulan ybs, walaupun tidak terjadi kerusakan pada bulan ybs</li>
									<li>Kolom 4 s/d 11 diisi salah satu tingkat kerusakan dan volumenya yang paling tepat <br>
										R = Kerusakan ringan (M', BH, M³……) (Kerusakan yang dapat diatasi sendiri oleh pengelola jaringan irigasi)<br/>
										S = Kerusakan sedang (M', BH, M³ ……..) (Kerusakan yang tidak dapat diatasi sendiri, perlu bantuan bahan)<br/>
										B = Kerusakan Berat (M', BH, M³ ………..) (Kerusakan yang tidak bisa diatasi sendiri, perlu bantuan bahan dan tenaga)<br/>
										dan harus dilaporkan apabila ada kerusakan baru atau kerusakan lama (yang pernah dilaporkan) berubah lagi.

									</li>
									<li>Kolom 12 dan 13 keterangan diisi jenis perkiraan kerugian dan perbaikannya</li>
									<li>Kolom 14 diisi dengan skala prioritasnya 1, 2 atau 3 (1 = segera; 2 = perlu; 3 = dapat ditangguhkan)</li>
									<li>Kolom 15 diisi luas areal layanan dibawah/dihilir lokasi kerusakan yang menjadi daerah layanannya<br/>
									</li>
								</ol>
							</td>
							<td colspan="3">
								<center>
									<h6>
										<strong><?php echo $laporanhd['KABUPATEN'] ?>, <?php echo tglIndonesia2($laporanhd['TANGGAL'])  ?></strong><br/>
										Pengamat/Ranting/UPTD/SUP<br/>
										<?php echo $laporanhd['RANTING'] ?>
									</h6>

									<br/>
									<br/>
									<br/>
									<br/>
									<br/>

									<p style=";font-weight: bold;font-size: x-large;"><u><?php echo $_SESSION['nama_lengkap'] ?></u></p>
									<p style="margin-top: 0%;font-size: large;">NIP : <?php echo $_SESSION['nip'] ?></p>

								</center>
											
							</td>
						</tr>
					</tbody>
				</table>

