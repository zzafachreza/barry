<style type="text/css">
	.navbar{
		display: none;
	}
</style>
<?php
	
	error_reporting(0);
?>
<div class="container-fluid">
	<table class="table table-bordered">
	<tr class="text-center">
		<th rowspan="4">DINAS/BALAI<br/>KAB/KOTA<br/><?php echo $bencanahd['KABUPATEN'] ?></th>
		<th colspan="8">LAPORAN : HASIL PENGUKURAN DESAIN PEKERJAAN</th>
		<th>LAPORAN</th>
		<td>: TAHUNAN</td>

		
	</tr>
	<tr class="text-center">
		<th colspan="8">PEMELIHARAAN JARINGAN DAN SARANA IRIGASI	</th>
		<th>FORMULIR</th>
		<td>: 06 - P</td>
	</tr>
	<tr class="text-center">
		<th colspan="8"></th>
		<th>DINAS</th>
		<td>&#8594; PROVINSI/SATKER</td>
	</tr class="text-center">
	<tr class="text-center">
		<th colspan="8"></th>
		<th>BALAI</th>
		<td>&#8594; PROVINSI/SATKER</td>
	</tr>
	<tr class="text-center">
		<th rowspan="2">NO</th>
		<th rowspan="2">DAERAH IRIGASI</th>
		<th rowspan="2">SALURAN/BANGUNAN RENCANA</th>
		<th rowspan="2">TOLAK UKUR BH/KM</th>
		<th rowspan="2">TANGGAL SELESAI RENC. TEKNIK</th>
		<th colspan="3">PEKERJAAN UTAMA</th>
		<th rowspan="2">ANGGARAN BIAYA</th>
		<th rowspan="2">RENCANA PELAKSANAAN</th>
		<th rowspan="2">KETERANGAN</th>
	</tr>
	<tr class="text-center">
		
		<th>JENIS</th>
		<th>SATUAN</th>
		<th>VOLUME</th>
		
	</tr>
	
	<tr class="text-center">
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
	</tr>
<?php
	
	$TOTAL =0;
	$no=0;
			  				foreach($data->result() as $row):
			  				$no++;

			  				$TOTAL +=$row->BIAYA_PERBAIKAN;

			  			
				  		?>


	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $row->DAERAH_IRIGASI?></td>
		<td><?php echo $row->NAMA_SALURAN ?></td>
		<td><?php echo $row->TOLAK_UKUR ?></td>
		<td><?php echo tglIndonesia($row->TANGGAL_SELESAI) ?></td>
		<td><?php echo $row->JENIS_KERUSAKAN ?></td>
		<td><?php echo $row->SATUAN ?></td>
		<td><?php echo $row->VOLUME ?></td>
		<td><?php echo number_format($row->BIAYA_PERBAIKAN) ?></td>
		<td><?php echo $row->RENCANA ?></td>
		<td><?php echo $row->KETERANGAN ?></td>
	</tr>

			<?php endforeach; ?>


			<tr>
				<td colspan="8"></td>
				
				<td><?php echo number_format($TOTAL) ?></td>
				<td colspan="2"></td>
			</tr>

			<tr>
							<td colspan="9">
								<p>Penjelasan : </p>
								<ul type="none">
									<li>-</li>
								</ul>
								
									<p>*) Harga satuan yang dipakai adalah harga satuan pada keadaan harga akhir triwulan tahun ybs</p>
									<p>**)&nbsp;&nbsp;a. Diborongkan<br/>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										b. Swakelola Dinas<br/>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										c. Swakelola P3A/GP3A<br/>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										d. Partisipatif P3A/GP3A<br/>
									</p>
									
							</td>
							<td colspan="2">
								<center>
									<strong>Kepala Dinas Pengairan Kab/Balai PSDA Ws. Cisadea-Cibareno</strong>
									<br/>
									<br/>
									<br/>
									<br/>
									<p style="font-weight: bold;font-size: x-large;"><u><?php echo $_SESSION['nama_lengkap'] ?></u></p>
									<p style="margin-top: 0%;font-size: large;">NIP : <?php echo $_SESSION['nip'] ?> </p>
								</center>
											
							</td>
						</tr>
</table>
</div>

