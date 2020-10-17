<?php

$dataLamp052 = $lamp052->result();
error_reporting(0);

?>
<style type="text/css">
	.navbar{
		display: none;
	}
</style>
<div class="container-fluid">
		<table class="table table-bordered">
	<tr>
		<th colspan="7" class="text-center">PROGRAM KERJA KONTRAKTUAL</th>
		<th class="text-center">BLANKO 05 - P</th>
	</tr>
	<tr>
		<th colspan="7" class="text-center">Tahun <?php echo date('Y') ?></th>
		<th></th>
	</tr>
	<tr>
		<th colspan="8">&nbsp;</th>
	</tr>
	<tr>
		<th>DINAS/BALAI PSDA</th>
		<td colspan="7">: <?php echo $dataLamp052[0]->BALAI ?></td>
	</tr>
	<tr>
		<th colspan="8">&nbsp;</th>
	</tr>
	<tr>
		<th>NO</th>
		<th>DAERAH IRIGASI</th>
		<th>NAMA SALURAN DAN BANGUNAN<br/>
			LOKASI (KM)
		</th>
		<th>URAIAN<br/>
			1. JENIS PEKERJAAN PEMELIHARAAN<br/>
			2. KECAMATAN & KABUPATEN/KOTA
		</th>
		<th>
			BANYAKNYA PEKERJAAN<br/>
			(BH/KM)
		</th>
		<th>
			BIAYA
		</th>
		<th>
			JADWAL PELAKSANAAN
		</th>
		<th>KETERANGAN</th>
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
	</tr>

	<?php

	$no=0;
			  				foreach($lamp052->result() as $row):
			  				$no++;


			  				if ($row->BOCORAN==='SWAKELOLA' AND $row->RUSAK==='SWAKELOLA' AND $row->LONGSORAN==='SWAKELOLA' AND $row->TERSUMBAT==='SWAKELOLA' AND $row->RETAK==='SWAKELOLA' AND $row->PINTU_RUSAK==='SWAKELOLA' AND $row->SEDIMEN==='SWAKELOLA') {
			  					# code...
			  					$style='style="display:none"';
			  				}else{
			  					$style='';
			  				}

			  			
				  		?>

<tr <?php echo $style ?>>
		<td><?php echo $no ?></td>
		<td><?php echo $row->DAERAH_IRIGASI ?></td>
		<td><?php echo $row->nama_bangunan ?><br/>
			<?php echo $row->nama_ruas ?></td>
		<td>
			<?php

			if ($row->BOCORAN==='KONTRAKTUAL' AND $row->BOCORAN_M > 0) {
				echo "BOCORAN";
			}else{
				echo "";
			}

		

			if ($row->RUSAK==='KONTRAKTUAL' AND $row->RUSAK_M > 0) {
				echo "<br/>";
				echo "RUSAK";
			}else{
				echo "";
			}

		

			if ($row->LONGSORAN==='KONTRAKTUAL' AND $row->LONGSORAN_M > 0) {
				echo "<br/>";
				echo "LONGSORAN";
			}else{
				echo "";
			}

			if ($row->TERSUMBAT==='KONTRAKTUAL' AND $row->TERSUMBAT_M > 0) {
				echo "<br/>";
				echo "TERSUMBAT";
			}else{
				echo "";
			}

			if ($row->RETAK==='KONTRAKTUAL' AND $row->RETAK_M > 0) {
				echo "<br/>";
				echo "RETAK";
			}else{
				echo "";
			}

			if ($row->PINTU_RUSAK==='KONTRAKTUAL' AND $row->PINTU_RUSAK_M > 0) {
				echo "<br/>";
				echo "PINTU_RUSAK";
			}else{
				echo "";
			}

			if ($row->SEDIMEN==='KONTRAKTUAL' AND $row->SEDIMEN_M > 0) {
				echo "<br/>";
				echo "SEDIMEN";
			}else{
				echo "";
			}




			?>

			<hr/>
			<?php echo $row->DESA ?>
			<?php echo $row->KABUPATEN ?>

		</td>
		<td>
			<?php



			if ($row->BOCORAN==='KONTRAKTUAL' AND $row->BOCORAN_M > 0) {
				echo $row->BOCORAN_M;
			}else{
				echo "";
			}

		

			if ($row->RUSAK==='KONTRAKTUAL' AND $row->RUSAK_M > 0) {
				echo "<br/>";
				echo $row->RUSAK_M;
			}else{
				echo "";
			}

		

			if ($row->LONGSORAN==='KONTRAKTUAL' AND $row->LONGSORAN_M > 0) {
				echo "<br/>";
				echo $row->LONGSORAN_M;
			}else{
				echo "";
			}

			if ($row->TERSUMBAT==='KONTRAKTUAL' AND $row->TERSUMBAT_M > 0) {
				echo "<br/>";
				echo $row->TERSUMBAT_M;
			}else{
				echo "";
			}

			if ($row->RETAK==='KONTRAKTUAL' AND $row->RETAK_M > 0) {
				echo "<br/>";
				echo $row->RETAK_M;
			}else{
				echo "";
			}

			if ($row->PINTU_RUSAK==='KONTRAKTUAL' AND $row->PINTU_RUSAK_M > 0) {
				echo "<br/>";
				echo $row->PINTU_RUSAK_M;
			}else{
				echo "";
			}

			if ($row->SEDIMEN==='KONTRAKTUAL' AND $row->SEDIMEN_M > 0) {
				echo "<br/>";
				echo $row->SEDIMEN_M;
			}else{
				echo "";
			}


			?>
		</td>
		<td><?php echo number_format($row->JUMLAH )?></td>
		<td>
			<center>
			<?php echo tglIndonesia2($row->TANGGAL_AWAL) ?> sd <?php echo tglIndonesia2($row->TANGGAL_AKHIR) ?>
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
							<td colspan="6">
								<p>Penjelasan : </p>
								<ol>
									<li>Lampiran dikirim setelah DSP (Blanko O&P disetujui</li>
									<li>Kolom 3 : Nama saluran dan bangunan yang diprioritaskan</li>
								</ol>
								<ul type="none">
									<li>*) Sesuai Kewenangannya</li>
									<li>Laporan Tahunan : Dinas Sumber Daya Air / Balai PSDA →Kabupaten/Provinsi</li>
								</ul>
							</td>
							<td colspan="2">
								<center>
									<p><?php echo $dataLamp052[0]->KABUPATEN ?>, <?php echo tglIndonesia2($dataLamp052[0]->TANGGAL_KONTRAKTUAL2) ?></p>
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
<script type="text/javascript">
	function editEuy2(ID_KONTRAKTUAL,K,V){
		var VALUE = $("#"+V).val();
		var KOLOM = K;

		$.ajax({
			url:'<?php echo base_url().'bencanahd/update_lampiran5'; ?>',
			data:{
				ID_KONTRAKTUAL:ID_KONTRAKTUAL,
				KOLOM:KOLOM,
				VALUE:VALUE
			},
			type:'POST',
			success:function(html){
				console.log(html);
			}
		})
		
	}
</script>	