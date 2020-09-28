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
              				<td colspan="18" border="0">
		              			<center>
									<h1>LAPORAN KERUSAKAN JARINGAN IRIGASI</h1>
									<?php   $TGL = explode("-", $laporanhd['TANGGAL']) ?>
									<h3>Inspeksi Rutin <?php echo $TGL[2] ?> Tanggal  Bulan <?php echo $TGL[1] ?> Tahun <?php echo $TGL[0] ?></h2>
								</center>
								</td>
							<td colspan="2" border="0">
			              			<center>
										<h2>Blanko 02 - P</h2>
									</center>
							</td>
		            </tr>

		            <tr>
		            	<td border="0" colspan="4">DAERAH IRIGASI</td>
		            	<td border="0" colspan="12">: <?php echo $laporanhd['DAERAH_IRIGASI'] ?></td>

		            	<td border="0" colspan="2">KABUPATEN</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['KABUPATEN'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TOTAL LUAS AREAL DI</td>
		            	<td border="0" colspan="12">: <?php echo $laporanhd['LUAS_AREA_IRIGASI'] ?> Ha</td>

		            	<td border="0" colspan="2">PENGAMAT/RANTING</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['RANTING'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TINGKATAN DI : T / ST / SD</td>
		            	<td border="0" colspan="12">: <?php echo $laporanhd['TINGKATAN_IRIGASI'] ?></td>

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
						<th colspan="2">PERKIRAAN BIAYA	</th>
						<th rowspan="2">PRIORITAS</th>
						<th rowspan="2">AREAL LAYANAN DI BAWAHNYA</th>
						<th rowspan="2">DESA / KECAMATAN</th>
						<th rowspan="2">FOTO_BEFORE</th>
						<th rowspan="2">FOTO_AFTER</th>
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
						<th>ESTIMASI_RUGI</th>
						<th>ESTIMASI_PERBAIKAN</th>
						
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
							<td><?php echo $row->BOCORAN_M; ?></td>
							<td><?php echo $row->RUSAK_M; ?></td>
							<td><?php echo $row->LONGSORAN_M; ?></td>
							<td><?php echo $row->TERSUMBAT_M; ?></td>
							<td><?php echo $row->RETAK_M; ?></td>
							<td><?php echo $row->RETAK_M; ?></td>
							<td><?php echo $row->SEDIMEN_M; ?></td>
							<td><?php echo $row->LAIN_LAIN; ?></td>
							<td><?php echo $row->DIKERJAKAN; ?></td>
							<td><?php echo $row->USULAN; ?></td>
							<td><?php echo $row->ESTIMASI_RUGI; ?></td>
							<td><?php echo $row->ESTIMASI_PERBAIKAN; ?></td>
							<td><?php echo $row->PRIORITAS; ?></td>
							<td><?php echo $row->AREA_BAWAH; ?></td>
							<td><?php echo $row->DESA; ?></td>
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
					</tbody>
				</table>

