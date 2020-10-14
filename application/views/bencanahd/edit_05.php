<?php
error_reporting(0);
$dataLamp05 = $lamp05->result();

?>
<hr/>
<div class="container-fluid">
	<div class="row">
		<div class="col col-sm-2">
			<a href="../lampiran05" class="btn btn-secondary col-sm-12">KEMBALI</a>
		</div>
		<div class="col col-sm-2">
			<form method="POST" action="<?php echo base_url().'bencanahd/selesai_05'; ?>">
				<input type="hidden" name="ID_LAPORANHD" value="<?php echo $dataLamp05[0]->ID_LAPORANHD ?>">

				<button class="btn btn-primary col-sm-12" onclick="return confirm('Apakah Anda yakin ?\n Data tidak dapat diubah jika sudah disimpan')">SELESAI</button>
				
			</form>
		</div>
	</div>
</div>
<hr/>
<style type="text/css">
	th{
		text-align: center;
	}
</style>
<div class="container-fluid">
	<table class="table table-bordered">
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
		<td><input class="form-control" id="BALAI<?php echo $dataLamp05[0]->ID_LAPORANHD ?>" type="text" name="BALAI" value="<?php echo $dataLamp05[0]->BALAI ?>" onChange="editEuy2('<?php echo $dataLamp05[0]->ID_LAPORANHD ?>','BALAI','BALAI<?php echo $dataLamp05[0]->ID_LAPORANHD ?>')"></td>
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
			<input class="form-control" id="BANYAKNYA_PEKERJAAN<?php echo $row->ID_KONTRAKTUAL ?>" type="text" name="BANYAKNYA_PEKERJAAN" value="<?php echo $row->BANYAKNYA_PEKERJAAN ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL ?>','BANYAKNYA_PEKERJAAN','BANYAKNYA_PEKERJAAN<?php echo $row->ID_KONTRAKTUAL ?>')">
		</td>
		<td>
				<input class="form-control" id="BIAYA<?php echo $row->ID_KONTRAKTUAL ?>" type="text" name="BIAYA" value="<?php echo $row->BIAYA ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL ?>','BIAYA','BIAYA<?php echo $row->ID_KONTRAKTUAL ?>')">
		</td>
		<td>
			<label>
				Dari
				<input id="TANGGAL_AWAL<?php echo $row->ID_KONTRAKTUAL ?>" type="text" name="TANGGAL_AWAL" value="<?php echo TglIndonesia($row->TANGGAL_AWAL) ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL ?>','TANGGAL_AWAL','TANGGAL_AWAL<?php echo $row->ID_KONTRAKTUAL ?>')" class="tgl form-control">
			</label>
			<br/>
			<label>
				Sampai
				<input id="TANGGAL_AKHIR<?php echo $row->ID_KONTRAKTUAL ?>" type="text" name="TANGGAL_AKHIR" value="<?php echo TglIndonesia($row->TANGGAL_AKHIR) ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL ?>','TANGGAL_AKHIR','TANGGAL_AKHIR<?php echo $row->ID_KONTRAKTUAL ?>')" class="tgl form-control">
			</label>
		</td>
		<td>
			<input class="form-control" id="KETERANGAN<?php echo $row->ID_KONTRAKTUAL ?>" type="text" name="KETERANGAN" value="<?php echo $row->KETERANGAN ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL ?>','KETERANGAN','KETERANGAN<?php echo $row->ID_KONTRAKTUAL ?>')">
		</td>
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