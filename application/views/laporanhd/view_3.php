<?php

error_reporting(0);

?>
<style type="text/css">
	.navbar{
		display: none;
	}
</style>



<table style="width: 100%"
              style="font-size: small"
              border="1">
					<thead>
					 <tr>
              				<td colspan="14" border="0">
		              			<center>
									<h1>LAPORAN KERUSAKAN JARINGAN IRIGASI</h1>
									<h3>Inspeksi Rutin  Tanggal <?php echo tglIndonesia2($laporanhd['TANGGAL'])  ?></h3>
								</center>
								</td>
							<td colspan="2" border="0">
			              			<center>
										<h2>Blanko 01 - P</h2>
									</center>
							</td>
		            </tr>

		            <tr>
		            	<td border="0" colspan="4">DAERAH IRIGASI</td>
		            	<td border="0" colspan="8">: <?php echo $laporanhd['DAERAH_IRIGASI'] ?></td>

		            	<td border="0" colspan="2">KABUPATEN</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['KABUPATEN'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TOTAL LUAS AREAL DI</td>
		            	<td border="0" colspan="8">: <?php echo $laporanhd['LUAS_AREA_IRIGASI'] ?> Ha</td>

		            	<td border="0" colspan="2">PENGAMAT/RANTING</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['RANTING'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TINGKATAN DI : T / ST / SD</td>
		            	<td border="0" colspan="8">: <?php echo $laporanhd['TINGKATAN_IRIGASI'] ?></td>

		            	<td border="0" colspan="2">JURU/MANTRI</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['MANTRI'] ?></td>
		            </tr>
		       
		            <tr>
		            	<td colspan="20">
		            		&nbsp;
		            	</td>
		            </tr>
					<tr>
						<th rowspan="2">NO</th>
						<th rowspan="2">NAMA RUAS SALURAN</th>
						<th rowspan="2">NAMA BAGUNAN DAN TIPENYA</th>
						<th colspan="8">KEADAAN</th>
						<th colspan="2">TINDAKAN</th>
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
						<th>PINTU RUSAK (BH)</th>
						<th>SEDIMEN/WALED (H)</th>
						<th>MASUKAN LAIN - LAIN</th>
						<th>DIKERJAKAN</th>
						<th>USULAN TINDAK LANJUT</th>
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
				  			<td><?php echo $row->nama_ruas; ?></td>
				  			<td><?php echo $row->nama_bangunan; ?></td>
							<td><?php echo $row->BOCORAN_M; ?> <br/> <?php echo $row->BOCORAN ?> </td>
							<td><?php echo $row->RUSAK_M; ?> <br/> <?php echo $row->RUSAK ?> </td>
							<td><?php echo $row->LONGSORAN_M; ?> <br/> <?php echo $row->LONGSORAN ?> </td>
							<td><?php echo $row->TERSUMBAT_M; ?> <br/> <?php echo $row->TERSUMBAT ?> </td>
							<td><?php echo $row->RETAK_M; ?> <br/> <?php echo $row->RETAK ?> </td>
							<td><?php echo $row->RETAK_M; ?> <br/> <?php echo $row->RETAK ?> </td>
							<td><?php echo $row->SEDIMEN_M; ?> <br/> <?php echo $row->SEDIMEN ?> </td>
							<td><?php echo $row->LAIN_LAIN; ?></td>
							<td><?php echo $row->DIKERJAKAN; ?></td>
							<td><?php echo $row->USULAN; ?></td>
							<td><?php echo $row->AREA_BAWAH; ?></td>
							<td><?php echo $row->DESA; ?></td>
							<td>
								<?php if (isset($row->FOTO_BEFORE)): ?>
									<center>
										<img height="100" src="<?php echo site_url().'upload/'.$row->FOTO_BEFORE; ?>">
									</center>
								<?php endif ?>
								
							</td>
						
			
								
				  		</tr>
						<?php endforeach; ?>
						<tr>
							<td colspan="13">
								<p>Penjelasan : </p>
								<ol>
									<li>Diserahkan tiap tanggal 25 bulan ybs, walaupun tidak terjadi kerusakan pada bulan ybs</li>
									<li>Kolom 4 s/d 11 diisi salah satu tingkat kerusakan dan volumenya yang paling tepat <br>
										R = Kerusakan ringan (M', BH, M³……) (Kerusakan yang dapat diatasi sendiri oleh pengelola jaringan irigasi)<br/>
										S = Kerusakan sedang (M', BH, M³ ……..) (Kerusakan yang tidak dapat diatasi sendiri, perlu bantuan bahan)<br/>
										B = Kerusakan Berat (M', BH, M³ ………..) (Kerusakan yang tidak bisa diatasi sendiri, perlu bantuan bahan dan tenaga)<br/>
										dan harus dilaporkan apabila ada kerusakan baru atau kerusakan lama (yang pernah dilaporkan) berubah lagi.

									</li>
									<li>Kolom 12 dan 13 keterangan diisi jenis kerusakan yang sudah dikerjakan dan diusulkan</li>
									<li>Kolom 14 diisi luas areal layanan dibawah/dihilir lokasi kerusakan yang menjadi oncorannya</li>
									<li>Laporan bulanan : Mantri/Juru → Ranting/Pengamat/UPTD/SUP</li>
								</ol>
							</td>
							<td colspan="3">
								<center>
									<strong><?php echo $laporanhd['KABUPATEN'] ?>, <?php echo tglIndonesia2($laporanhd['TANGGAL'])  ?></strong>
									<h2>Juru/Mantri Cimandiri</h2>
									<br/>
									<br/>
									<br/>
									<br/>
									<p style="font-weight: bold;font-size: x-large;"><u><?php echo $_SESSION['nama_lengkap'] ?></u></p>
									<p style="margin-top: 0%;font-size: large;">NIP : <?php echo $_SESSION['nip'] ?> </p>
								</center>
											
							</td>
						</tr>
					</tbody>
				</table>



