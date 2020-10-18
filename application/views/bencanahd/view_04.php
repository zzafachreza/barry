<?php

$dataLamp04 = $lamp04->result();
error_reporting(0);

// print_r($dataLamp04);

?>
<style type="text/css">
	.navbar{
		display: none;
	}
</style>
		<table class="table table-bordered">
	<tr class="text-center">
		<th colspan="10">PROGRAM PEKERJAAN SWAKELOLA</th>
		<th>BLANKO 04 - P</th>
	</tr>
	<tr class="text-center">
		<th colspan="10">Tahun <?php echo date('Y') ?></th>
		<th></th>
	</tr>
	<tr>
		<th colspan="11">&nbsp;</th>
	</tr>
	<tr>
		<th>DINAS/BALAI PSDA</th>
		<td colspan="10">: <?php echo $dataLamp04[0]->BALAI ?></td>
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
			  				$BIAYA = 0;
	$no=0;
			  				foreach($lamp04->result() as $row):
			  				$no++;


			  			
							if ($row->BOCORAN==='KONTRAKTUAL' AND $row->RUSAK==='KONTRAKTUAL' AND $row->LONGSORAN==='KONTRAKTUAL' AND $row->TERSUMBAT==='KONTRAKTUAL' AND $row->RETAK==='KONTRAKTUAL' AND $row->PINTU_RUSAK==='KONTRAKTUAL' AND $row->SEDIMEN==='KONTRAKTUAL') {
										  					# code...
			  					$style='style="display:none"';
			  				}else{
			  					$style='';
			  					$BIAYA += $row->JUMLAH;
			  				}

			  			
				  		?>

<tr <?php echo $style ?>>
		<td><?php echo $no ?></td>
		<td><?php echo $row->DAERAH_IRIGASI ?></td>
		<td><?php echo $row->nama_bangunan ?><br/><?php echo $row->nama_ruas ?></td>
		<td><?php echo $row->DESA ?><br/><?php echo $row->KABUPATEN ?></td>
		<td>
			<?php

			if ($row->BOCORAN==='SWAKELOLA' AND $row->BOCORAN_M > 0) {
				echo "BOCORAN";
			}else{
				echo "";
			}

		

			if ($row->RUSAK==='SWAKELOLA' AND $row->RUSAK_M > 0) {
				echo "<br/>";
				echo "RUSAK";
			}else{
				echo "";
			}

		

			if ($row->LONGSORAN==='SWAKELOLA' AND $row->LONGSORAN_M > 0) {
				echo "<br/>";
				echo "LONGSORAN";
			}else{
				echo "";
			}

			if ($row->TERSUMBAT==='SWAKELOLA' AND $row->TERSUMBAT_M > 0) {
				echo "<br/>";
				echo "TERSUMBAT";
			}else{
				echo "";
			}

			if ($row->RETAK==='SWAKELOLA' AND $row->RETAK_M > 0) {
				echo "<br/>";
				echo "RETAK";
			}else{
				echo "";
			}

			if ($row->PINTU_RUSAK==='SWAKELOLA' AND $row->PINTU_RUSAK_M > 0) {
				echo "<br/>";
				echo "PINTU_RUSAK";
			}else{
				echo "";
			}

			if ($row->SEDIMEN==='SWAKELOLA' AND $row->SEDIMEN_M > 0) {
				echo "<br/>";
				echo "SEDIMEN";
			}else{
				echo "";
			}




			?>
		</td>
		<td>
			<?php



			if ($row->BOCORAN==='SWAKELOLA' AND $row->BOCORAN_M > 0) {
				echo $row->BOCORAN_M;
			}else{
				echo "";
			}

		

			if ($row->RUSAK==='SWAKELOLA' AND $row->RUSAK_M > 0) {
				echo "<br/>";
				echo $row->RUSAK_M;
			}else{
				echo "";
			}

		

			if ($row->LONGSORAN==='SWAKELOLA' AND $row->LONGSORAN_M > 0) {
				echo "<br/>";
				echo $row->LONGSORAN_M;
			}else{
				echo "";
			}

			if ($row->TERSUMBAT==='SWAKELOLA' AND $row->TERSUMBAT_M > 0) {
				echo "<br/>";
				echo $row->TERSUMBAT_M;
			}else{
				echo "";
			}

			if ($row->RETAK==='SWAKELOLA' AND $row->RETAK_M > 0) {
				echo "<br/>";
				echo $row->RETAK_M;
			}else{
				echo "";
			}

			if ($row->PINTU_RUSAK==='SWAKELOLA' AND $row->PINTU_RUSAK_M > 0) {
				echo "<br/>";
				echo $row->PINTU_RUSAK_M;
			}else{
				echo "";
			}

			if ($row->SEDIMEN==='SWAKELOLA' AND $row->SEDIMEN_M > 0) {
				echo "<br/>";
				echo $row->SEDIMEN_M;
			}else{
				echo "";
			}


			?>
		</td>
		<td><?php echo number_format($row->UPAH) ?></td>
		<td><?php echo number_format($row->BAHAN) ?></td>
		<td><?php echo number_format($row->JUMLAH) ?></td>
		<td>
			<center>
			<?php echo tglIndonesia($row->TANGGAL_AWAL) ?> sd <?php echo tglIndonesia($row->TANGGAL_AKHIR) ?>
			<br/>

			<strong><?php 

			$tgl1 = new DateTime($row->TANGGAL_AWAL);
			$tgl2 = new DateTime($row->TANGGAL_AKHIR);
			$d = $tgl2->diff($tgl1)->days + 1;

			echo $d." Hari";


			?></strong></center>

		</td>
		<td><?php echo $row->KETERANGAN ?></td>
	</tr>


<?php endforeach; ?>
	<tr>
		<th colspan="8"></th>

		<th><?php echo number_format($BIAYA) ?></th>
		<th colspan="2"></th>
	</tr>
<tr>

							<td colspan="8">
								<p>Penjelasan : </p>
								<ol>
									<li>Lampiran dikirim setiap akhir bulan Januari Tahun Anggaran ybs</li>
									<li>Kolom 9 : Bila pelaksanaan dalam satu tahun lebih dari satu kali agar disebut semuanya</li>
								</ol>
								<ul type="none">
									<li>*) Sesuai Kewenangannya</li>
									<li>Laporan Tahunan : Dinas Sumber Daya Air / Balai PSDA →Kabupaten/Provinsi</li>
								</ul>
							</td>
							<td colspan="3">
								<center>
									<p><?php echo $dataLamp04[0]->KABUPATEN ?>, <?php echo tglIndonesia2($dataLamp04[0]->TANGGAL_SWAKELOLA) ?></p>
									<strong>Kepala Dinas Pengairan Kab/Kota /Kepala Balai PSDA</strong>
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
