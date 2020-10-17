<?php

// header("Content-type: application/octet-stream");
// header("Content-Disposition: attachment; filename=LAPORAN.xls");//ganti nama sesuai keperluan
// header("Pragma: no-cache");
// header("Expires: 0");
error_reporting(0);



?>
<style type="text/css">
	.navbar{
		display: none;
	}
</style>


	<table class="table table-bordered">
					<thead>
					 <tr>
              				<td colspan="13" border="0">
		              			<center>
									<h1>LAPORAN KERUSAKAN AKIBAT BENCANA ALAM</h1>
									
									
									<h3>Tanggal Kejadian <?php echo tglIndonesia2($bencanahd['TANGGAL'])  ?></h2>
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
		            	<td border="0" colspan="7">: <?php echo $bencanahd['DAERAH_IRIGASI'] ?></td>

		            	<td border="0" colspan="2">KABUPATEN</td>
		            	<td border="0" colspan="2">: <?php echo $bencanahd['KABUPATEN'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TOTAL LUAS AREAL DI</td>
		            	<td border="0" colspan="7">: <?php echo $bencanahd['LUAS_AREA_IRIGASI'] ?> Ha</td>

		            	<td border="0" colspan="2">PENGAMAT/RANTING</td>
		            	<td border="0" colspan="2">: <?php echo $bencanahd['RANTING'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TINGKATAN DI : T / ST / SD</td>
		            	<td border="0" colspan="11">: <?php echo $bencanahd['TINGKATAN_IRIGASI'] ?></td>

		            	
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
						 <?php
			  				$no=0;
			  				$TOTAL_BIAYA_PERBAIKAN=0;
			  				foreach($bencanadt->result() as $row):
			  				$no++;


			  				$TOTAL_BIAYA_PERBAIKAN += $row->BIAYA_PERBAIKAN;
			  			
				  		?>
				  		<tr>
				  			<td ><?php echo $no ?></td>
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
						<tr style="text-align: center;">
						<td colspan="12">Total</td>
						
						<td><h5><?php echo number_format($TOTAL_BIAYA_PERBAIKAN) ?></h5> </td>
						<td colspan="2"></td>
				
				


					</tr>

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
									<h6>
										<?php echo $bencanahd['KABUPATEN'].", "; ?>
										<?php echo tglIndonesia2($bencanahd['TANGGAL'])  ?>

										<br/>
										Pengamat/Ranting/UPTD/SUP<br/>
										<?php echo $bencanahd['RANTING'] ?>
									</h6>

									<p style="margin-top: 40%;font-weight: bold;font-size: x-large;"><u><?php echo $_SESSION['nama_lengkap'] ?></u></p>

								</center>
											<p style="margin-top: 0%;font-size: large;">NIP : <?php echo $_SESSION['nip'] ?></p>
							</td>
						</tr>
					</tbody>
				</table>

