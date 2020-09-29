<?php

// header("Content-type: application/octet-stream");
// header("Content-Disposition: attachment; filename=LAPORAN.xls");//ganti nama sesuai keperluan
// header("Pragma: no-cache");
// header("Expires: 0");
error_reporting(0);
// print_r($laporanhd);
// // print_r($laporandt);


?>



<table style="width: 100%"
              style="font-size: small"
              border="1">
					<thead>
					 <tr>
              				<td colspan="15" border="0">
		              			<center>
									<h1>LAPORAN KERUSAKAN AKIBAT BENCANA ALAM</h1>
									<?php   $TGL = explode("-", $laporanhd['TANGGAL']);
									$TGL3 = explode("-", $laporanhd['TANGGAL_3'])  ?>
									<h3>Tanggal Kejadian <?php echo $TGL[2] ?>  Bulan <?php echo $TGL[1] ?> Tahun <?php echo $TGL[0] ?></h2>
								</center>
								</td>
							<td colspan="2" border="0">
			              			<center>
										<h2>Blanko 03 - P</h2>
									</center>
							</td>
		            </tr>

		            <tr>
		            	<td border="0" colspan="4">DAERAH IRIGASI</td>
		            	<td border="0" colspan="9">: <?php echo $laporanhd['DAERAH_IRIGASI'] ?></td>

		            	<td border="0" colspan="2">KABUPATEN</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['KABUPATEN'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TOTAL LUAS AREAL DI</td>
		            	<td border="0" colspan="9">: <?php echo $laporanhd['LUAS_AREA_IRIGASI'] ?> Ha</td>

		            	<td border="0" colspan="2">PENGAMAT/RANTING</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['RANTING'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TINGKATAN DI : T / ST / SD</td>
		            	<td border="0" colspan="13">: <?php echo $laporanhd['TINGKATAN_IRIGASI'] ?></td>

		            	
		            </tr>
		       
		            <tr>
		            	<td colspan="17">
		            		&nbsp;
		            	</td>
		            </tr>

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
						<th colspan="2">DOKUMENTASI</th>
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
						<th  rowspan="2">FOTO BEFORE</th>
						<th  rowspan="2">FOTO AFTER</th>
						
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
						<td>16</td>
						<td>17</td>


					</tr>
					</thead>
					<tbody>
						 <?php
			  				$no=0;
			  				foreach($laporandt->result() as $row):
			  				$no++;
				  		?>
				  		<tr style="height:100px;text-align: center;">
				  			<td ><?php echo $no ?></td>
				  			<td><?php echo $row->nama_bangunan; ?>
				  				<?php echo $row->nama_ruas; ?>
				  				<?php echo $row->DESA; ?>
				  			</td>
				  			<td><?php echo $row->PENYEBAB_KERUSAKAN ?></th>
							<td><?php echo $row->JENIS_KERUSAKAN ?></th>
							<td><?php echo $row->TANAH ?></th>
							<td><?php echo $row->BATU ?></th>
							<td><?php echo $row->BETON ?></th>
							<td><?php echo $row->PINTU_AIR ?></th>
							<td><?php echo $row->GORONG_GORONG ?></th>
							<td><?php echo $row->LAIN_LAIN_KERUSAKAN ?></th>
							<td><?php echo $row->LUAS_TERANCAM ?></th>
							<td><?php echo $row->TINDAKAN_PERBAIKAN ?></th>
							<td><?php echo $row->BIAYA_PERBAIKAN ?></th>
							<td><?php echo $row->DIKERJAKAN_OLEH ?></th>
							<td><?php echo $row->DIUSULKAN_OLEH ?></th>

							<td>
								<?php if (isset($row->FOTO_BEFORE)): ?>
									<center>
										<img height="100" src="<?php echo site_url().'upload/'.$row->FOTO_BEFORE; ?>">
									</center>
								<?php endif ?>
								
							</td>
							<td>
								<?php if (isset($row->FOTO_AFTER)): ?>
									<center><img height="100" src="<?php echo site_url().'upload/'.$row->FOTO_AFTER; ?>"></td></center>
								<?php endif ?>
								
				  		</tr>
						<?php endforeach; ?>

							<tr>
							<td colspan="14">
								<p>Penjelasan : </p>
								<ol>
									<li>Kolom 8 : b lebar pintu (m) ; jumlah (bh)</li>
									<li>Kolom 9 : d diameter (m), panjang (m)</li>
									<li>Kolom 12 dan 13 keterangan diisi jenis perkiraan kerugian dan perbaikannya</li>
									<li>Perlu dilampiri gambar sketsa<br/>
Dicatat di Buku Catatan Pemeliharaan CD/CS/UPT/Pengamat Pengairan/SUP<br/><br/><br/>
	<strong><i>Laporan bulanan : Ranting/Pengamat/UPTD/SUP→ Dinas Pengairan Kabupaten/Balai PSDA</i></strong>

									</li>
								
								</ol>
			
							</td>
							<td colspan="3">
								<center>
									<h3>
										<?php echo $laporanhd['KABUPATEN'].", ".$TGL3[2]."/".$TGL3[1]."/".$TGL3[0] ?><br/>
										Pengamat/Ranting/UPTD/SUP<br/>
										<?php echo $laporanhd['RANTING'] ?>
									</h3>

									<p style="margin-top: 40%;font-weight: bold;font-size: x-large;"><u><?php echo $_SESSION['nama_lengkap'] ?></u></p>

								</center>
											<p style="margin-top: 0%;font-size: large;">NIP :</p>
							</td>
						</tr>
					</tbody>
				</table>

