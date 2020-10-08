<?php

$dataLamp05 = $lamp05->result();

?>
<hr/>
<div class="container">
	<form method="POST" action="<?php echo base_url().'bencanahd/selesai_05'; ?>">
	<input type="hidden" name="ID_LAPORANHD" value="<?php echo $dataLamp05[0]->ID_LAPORANHD ?>">

	<button class="btn btn-success col-sm-4" onclick="return confirm('Apakah Anda yakin ?\n Data tidak dapat diubah jika sudah disimpan')">SELESAI</button>
	
</form>

</div>
<hr/>
<style type="text/css">
	th{
		text-align: center;
	}
</style>
<div class="container-fluid">
	<table border="1" width="100%">
	<tr>
		<th colspan="7">PROGRAM KERJA KONTRAKTUAL</th>
		<th>BLANKO 05 - P</th>
	</tr>
	<tr>
		<th colspan="8">Tahun <?php echo date('Y') ?></th>
	</tr>
	<tr>
		<th colspan="8">&nbsp;</th>
	</tr>
	<tr>
		<th>DINAS/BALAI PSDA</th>
		<td>: 	<input id="BALAI<?php echo $dataLamp05[0]->ID_LAPORANHD ?>" type="text" name="BALAI" value="<?php echo $dataLamp05[0]->BALAI ?>" onChange="editEuy2('<?php echo $dataLamp05[0]->ID_LAPORANHD ?>','BALAI','BALAI<?php echo $dataLamp05[0]->ID_LAPORANHD ?>')"></td>
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
		<td>
			<input id="BANYAKNYA_PEKERJAAN<?php echo $row->ID_KONTRAKTUAL ?>" type="text" name="BANYAKNYA_PEKERJAAN" value="<?php echo $row->BANYAKNYA_PEKERJAAN ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL ?>','BANYAKNYA_PEKERJAAN','BANYAKNYA_PEKERJAAN<?php echo $row->ID_KONTRAKTUAL ?>')">
		</td>
		<td><?php echo $row->BIAYA ?></td>
		<td>
			<input id="TANGGAL_PELAKSANAAN<?php echo $row->ID_KONTRAKTUAL ?>" type="text" name="TANGGAL_PELAKSANAAN" value="<?php echo $row->TANGGAL_PELAKSANAAN ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL ?>','TANGGAL_PELAKSANAAN','TANGGAL_PELAKSANAAN<?php echo $row->ID_KONTRAKTUAL ?>')">
		</td>
		<td><?php echo $row->KETERANGAN ?></td>
	</tr>


<?php endforeach; ?>
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