<?php

error_reporting(0);

?>

<style type="text/css">
	.navbar{
		display: none;
	}
</style>


<table class="table table-bordered table-reponsive">
					<thead>
					 <tr>
              				<th colspan="14" border="0">
		              			<center>
									<h1>LAPORAN KERUSAKAN JARINGAN IRIGASI</h1>
									
									<h3>Inspeksi Rutin  Tanggal <?php echo tglIndonesia2($laporanhd['TANGGAL'])  ?></h2>
								</center>
								</th>
							<th colspan="2" border="0">
			              			<center>
										<h2>Blanko 01 - P</h2>
									</center>
							</th>
		            </tr>

		            <tr>
		            	<th border="0" colspan="4">DAERAH IRIGASI</th>
		            	<th border="0" colspan="8">: <?php echo $laporanhd['DAERAH_IRIGASI'] ?></th>

		            	<th border="0" colspan="2">KABUPATEN</th>
		            	<th border="0" colspan="2">: <?php echo $laporanhd['KABUPATEN'] ?></th>
		            </tr>
		             <tr>
		            	<th border="0" colspan="4">TOTAL LUAS AREAL DI</th>
		            	<th border="0" colspan="8">: <?php echo $laporanhd['LUAS_AREA_IRIGASI'] ?> Ha</th>

		            	<th border="0" colspan="2">PENGAMAT/RANTING</th>
		            	<th border="0" colspan="2">: <?php echo $laporanhd['RANTING'] ?></th>
		            </tr>
		             <tr>
		            	<th border="0" colspan="4">TINGKATAN DI : T / ST / SD</th>
		            	<th border="0" colspan="8">: <?php echo $laporanhd['TINGKATAN_IRIGASI'] ?></th>

		            	<th border="0" colspan="2">JURU/MANTRI</th>
		            	<th border="0" colspan="2">: <?php echo $laporanhd['MANTRI'] ?></th>
		            </tr>
		       
		            <tr>
		            	<th colspan="20">
		            		&nbsp;
		            	</th>
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
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>13</th>
						<th>14</th>
						<th>15</th>
						<th>16</th>


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
							<td><?php echo $row->BOCORAN_M; ?><br/>
								<?php echo $row->BOCORAN_M>0 ? '( '.$row->BOCORAN_T.' )':''; ?>
							</td>
							<td><?php echo $row->RUSAK_M; ?><br/>
								<?php echo $row->RUSAK_M>0 ? '( '.$row->RUSAK_T.' )':''; ?>
							</td>
							<td><?php echo $row->LONGSORAN_M; ?><br/>
								<?php echo $row->LONGSORAN_M>0 ? '( '.$row->LONGSORAN_T.' )':''; ?>
							</td>
							<td><?php echo $row->TERSUMBAT_M; ?><br/>
								<?php echo $row->TERSUMBAT_M>0 ? '( '.$row->TERSUMBAT_T.' )':''; ?>
							</td>
							<td><?php echo $row->RETAK_M; ?><br/>
								<?php echo $row->RETAK_M>0 ? '( '.$row->RETAK_T.' )':''; ?>
							</td>
							<td><?php echo $row->PINTU_RUSAK_M; ?><br/>
								<?php echo $row->PINTU_RUSAK_M>0 ? '( '.$row->PINTU_RUSAK_T.' )':''; ?>
							</td>
							<td><?php echo $row->SEDIMEN_M; ?><br/>
								<?php echo $row->SEDIMEN_M>0 ? '( '.$row->SEDIMEN_T.' )':''; ?>
							</td>
							<td><?php echo $row->LAIN_LAIN; ?></td>
							<td><?php echo $row->DIKERJAKAN; ?></td>
							<td><?php echo $row->USULAN; ?></td>
							<td><?php echo $row->AREA_BAWAH; ?></td>
							<td><?php echo $row->DESA; ?></td>
							<td>	
								<?php $gambar = $row->FOTO_BEFORE; ?>
								<?php if (strlen($row->$gambar) > 0 ): ?>
									<center>
										<img height="100" src="<?php echo site_url().'upload/'.$row->$gambar; ?>">
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



