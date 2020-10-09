<?php

$dataLamp04 = $lamp04->result();

?>

<hr/>
<div class="container">
	<form method="POST" action="<?php echo base_url().'bencanahd/selesai_04'; ?>">
	<input type="hiddean" name="ID_LAPORANHD" value="<?php echo $dataLamp04[0]->ID_LAPORANHD ?>">

	<button class="btn btn-success col-sm-4" onclick="return confirm('Apakah Anda yakin ?\n Data tidak dapat diubah jika sudah disimpan')">SELESAI</button>
	
</form>

</div>
<hr/>
<div class="container-fluid">
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
		<td>: <input id="BALAI<?php echo $dataLamp04[0]->ID_LAPORANHD ?>" type="text" name="BALAI" value="<?php echo $dataLamp04[0]->BALAI ?>" onChange="editEuy2('<?php echo $dataLamp04[0]->ID_LAPORANHD ?>','BALAI','BALAI<?php echo $dataLamp04[0]->ID_LAPORANHD ?>')"></td>
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
		<td>

			<input id="JENIS<?php echo $row->ID_SWAKELOLA ?>" type="text" name="JENIS" value="<?php echo $row->JENIS ?>" onChange="editEuy2('<?php echo $row->ID_SWAKELOLA ?>','JENIS','JENIS<?php echo $row->ID_SWAKELOLA ?>')">

		</td>
		<td>
				<input id="TOLAK_UKUR<?php echo $row->ID_SWAKELOLA ?>" type="text" name="TOLAK_UKUR" value="<?php echo $row->TOLAK_UKUR ?>" onChange="editEuy2('<?php echo $row->ID_SWAKELOLA ?>','TOLAK_UKUR','TOLAK_UKUR<?php echo $row->ID_SWAKELOLA ?>')">

			</td>
		<td>	

			<input id="UPAH<?php echo $row->ID_SWAKELOLA ?>" type="text" name="UPAH" value="<?php echo $row->UPAH ?>" onChange="editEuy2('<?php echo $row->ID_SWAKELOLA ?>','UPAH','UPAH<?php echo $row->ID_SWAKELOLA ?>')">

		</td>
		<td>
			<input id="BAHAN<?php echo $row->ID_SWAKELOLA ?>" type="text" name="BAHAN" value="<?php echo $row->BAHAN ?>" onChange="editEuy2('<?php echo $row->ID_SWAKELOLA ?>','BAHAN','BAHAN<?php echo $row->ID_SWAKELOLA ?>')">

		</td>
		<td>
			<input id="JUMLAH<?php echo $row->ID_SWAKELOLA ?>" type="text" name="JUMLAH" value="<?php echo $row->JUMLAH ?>" onChange="editEuy2('<?php echo $row->ID_SWAKELOLA ?>','JUMLAH','JUMLAH<?php echo $row->ID_SWAKELOLA ?>')">

		</td>
		<td>
			<input id="TANGGAL_PELAKSANAAN<?php echo $row->ID_SWAKELOLA ?>" type="text" name="TANGGAL_PELAKSANAAN" value="<?php echo $row->TANGGAL_PELAKSANAAN ?>" onChange="editEuy2('<?php echo $row->ID_SWAKELOLA ?>','TANGGAL_PELAKSANAAN','TANGGAL_PELAKSANAAN<?php echo $row->ID_SWAKELOLA ?>')">
		</td>
		<td>
			<input id="KETERANGAN<?php echo $row->ID_SWAKELOLA ?>" type="text" name="KETERANGAN" value="<?php echo $row->KETERANGAN ?>" onChange="editEuy2('<?php echo $row->ID_SWAKELOLA ?>','KETERANGAN','KETERANGAN<?php echo $row->ID_SWAKELOLA ?>')">

		</td>
	</tr>


<?php endforeach; ?>
</table>

</div>

<script type="text/javascript">
	function editEuy2(ID_SWAKELOLA,K,V){
		var VALUE = $("#"+V).val();
		var KOLOM = K;

		$.ajax({
			url:'<?php echo base_url().'bencanahd/update_lampiran4'; ?>',
			data:{
				ID_SWAKELOLA:ID_SWAKELOLA,
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