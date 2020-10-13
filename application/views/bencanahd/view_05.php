<?php

$dataLamp05 = $lamp05->result();
error_reporting(0);
?>

<style type="text/css">
	.navbar{
		display: none;
	}
</style>

<div class="container-fluid">
	<table border="1" width="100%">
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
		<td colspan="7">: <?php echo $dataLamp05[0]->BALAI ?></td>
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
			  				foreach($lamp05->result() as $row):
			  				$no++;

			  			
				  		?>

<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $row->DAERAH_IRIGASI ?></td>
		<td><?php echo $row->NAMA_SALURAN ?></td>
		<td><?php echo $row->JENIS ?><br/>
			<?php echo $row->KABUPATEN ?>
		</td>
		<td><?php echo $row->BANYAKNYA_PEKERJAAN ?></td>
		<td><?php echo number_format($row->BIAYA) ?></td>
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
									<p><?php echo $dataLamp05[0]->KABUPATEN ?>, <?php echo tglIndonesia2($dataLamp05[0]->TANGGAL_KONTRAKTUAL) ?></p>
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