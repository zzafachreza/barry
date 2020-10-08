<?php

$dataLamp04 = $lamp04->result();

?>
	<table border="1" width="100%">
	<tr>
		<th colspan="10">PROGRAM PEKERJAAN SWAKELOLA</th>
		<th>BLANKO 04 - P</th>
	</tr>
	<tr>
		<th colspan="11">Tahun <?php echo date('Y') ?></th>
	</tr>
	<tr>
		<th colspan="11">&nbsp;</th>
	</tr>
	<tr>
		<th>DINAS/BALAI PSDA</th>
		<td>: <?php echo $dataLamp04[0]->BALAI ?></td>
	</tr>
	<tr>
		<th colspan="11">&nbsp;</th>
	</tr>
	<tr>
		<th rowspan="2">NO</th>
		<th rowspan="2">DAERAH IRIGASI</th>
		<th colspan="2">LOKASI</th>
		<th rowspan="2">URAIAN</th>
		<th rowspan="2">TOLAK UKUR</th>
		<th colspan="3">BIAYA</th>
		<th rowspan="2">JADWAL PELAKSANAAN</th>
		<th rowspan="2">KETERANGAN</th>

	</tr>
	<tr>
		<th>NAMA SALURAN</th>
		<th>KECAMATAN/KABUPATEN</th>
		<th>UPAH</th>
		<th>BAHAN</th>
		<th>JUMLAH</th>
	</tr>
	<?php

	$no=0;
			  				foreach($lamp04->result() as $row):
			  				$no++;

			  			
				  		?>

<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $row->DAERAH_IRIGASI ?></td>
		<td><?php echo $row->NAMA_SALURAN ?></td>
		<td><?php echo $row->LOKASI ?></td>
		<td><?php echo $row->JENIS ?></td>
		<td><?php echo $row->TOLAK_UKUR ?></td>
		<td><?php echo $row->UPAH ?></td>
		<td><?php echo $row->BAHAN ?></td>
		<td><?php echo $row->JUMLAH ?></td>
		<td><?php echo $row->TANGGAL_PELAKSANAAN ?></td>
		<td><?php echo $row->KETERANGAN ?></td>
	</tr>


<?php endforeach; ?>
</table>
