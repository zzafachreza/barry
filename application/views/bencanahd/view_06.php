<div class="container-fluid">
	<table class="table table-bordered" border="1" width="100%">
	<tr>
		<th rowspan="4">DINAS/BALAI<br/>KAB/KOTA<br/><?php echo $bencanahd['KABUPATEN'] ?></th>
		<th colspan="8">LAPORAN : HASIL PENGUKURAN DESAIN PEKERJAAN</th>
		<th>LAPORAN</th>
		<td>: TAHUNAN</td>

		
	</tr>
	<tr>
		<th colspan="8">PEMELIHARAAN JARINGAN DAN SARANA IRIGASI	</th>
		<th>FORMULIR</th>
		<td>: 06 - P</td>
	</tr>
	<tr>
		<th colspan="8"></th>
		<th>DINAS</th>
		<td>&#8594; PROVINSI/SATKER</td>
	</tr>
	<tr>
		<th colspan="8"></th>
		<th>BALAI</th>
		<td>&#8594; PROVINSI/SATKER</td>
	</tr>
	<tr>
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
	<tr>
		
		<th>JENIS</th>
		<th>SATUAN</th>
		<th>VOLUME</th>
		
	</tr>
	
	<tr>
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

	$no=0;
			  				foreach($data->result() as $row):
			  				$no++;

			  			
				  		?>


	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $row->DAERAH_IRIGASI?></td>
		<td><?php echo $row->NAMA_SALURAN ?></td>
		<td><?php echo $row->TOLAK_UKUR ?></td>
		<td><?php echo $row->TANGGAL_SELESAI ?></td>
		<td><?php echo $row->JENIS_KERUSAKAN ?></td>
		<td><?php echo $row->SATUAN ?></td>
		<td><?php echo $row->VOLUME ?></td>
		<td><?php echo $row->BIAYA_PERBAIKAN ?></td>
		<td><?php echo $row->RENCANA ?></td>
		<td><?php echo $row->KETERANGAN ?></td>
	</tr>

			<?php endforeach; ?>
</table>
</div>

