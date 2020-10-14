<?php
	
	error_reporting(0);
?>
<hr/>

<div class="container-fluid">
	<div class="row">
		<div class="col col-sm-2">
			<a href="../lampiran06" class="btn btn-secondary col-sm-12">KEMBALI</a>
		</div>
		<div class="col col-sm-2">
				<form method="POST" action="<?php echo base_url().'bencanahd/add_05'; ?>">
				<input type="hidden" name="ID_LAPORANHD" value="<?php echo $bencanahd['ID_LAPORANHD'] ?>">

				<button class="btn btn-warning col-sm-12" onclick="return confirm('Apakah Anda yakin ?\n Data tidak dapat diubah jika sudah disimpan')">SELESAI</button>
				
			</form>
		</div>
	</div>
</div>
<hr/>

<div class="container-fluid">
	<table class="table table-bordered">
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
			  				foreach($bencanadt->result() as $row):
			  				$no++;

			  			
				  		?>


	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $row->DAERAH_IRIGASI?></td>
		<td><?php echo $row->NAMA_SALURAN ?></td>
		<td>

			<input class="form-control" id="TOLAK_UKUR<?php echo $row->ID_LAPORANDT ?>" type="text" name="TOLAK_UKUR" value="<?php echo $row->TOLAK_UKUR ?>" onChange="editEuy('<?php echo $row->ID_LAPORANDT ?>','TOLAK_UKUR','TOLAK_UKUR<?php echo $row->ID_LAPORANDT ?>')">


		</td>
		<td>

			<input class="tgl form-control" id="TANGGAL_SELESAI<?php echo $row->ID_LAPORANDT ?>" type="text" name="TANGGAL_SELESAI" value="<?php echo tglIndonesia($row->TANGGAL_SELESAI) ?>" onChange="editEuy('<?php echo $row->ID_LAPORANDT ?>','TANGGAL_SELESAI','TANGGAL_SELESAI<?php echo $row->ID_LAPORANDT ?>')">

		</td>
		<td><?php echo $row->JENIS_KERUSAKAN ?></td>
		<td>
			<input class="form-control" id="SATUAN<?php echo $row->ID_LAPORANDT ?>" type="text" name="SATUAN" value="<?php echo $row->SATUAN ?>" onChange="editEuy('<?php echo $row->ID_LAPORANDT ?>','SATUAN','SATUAN<?php echo $row->ID_LAPORANDT ?>')">

		</td>
		<td>

			<input class="form-control" id="VOLUME<?php echo $row->ID_LAPORANDT ?>" type="text" name="VOLUME" value="<?php echo $row->VOLUME ?>" onChange="editEuy('<?php echo $row->ID_LAPORANDT ?>','VOLUME','VOLUME<?php echo $row->ID_LAPORANDT ?>')">


		</td>
		<td>
	
				<input class="form-control" id="BIAYA_PERBAIKAN<?php echo $row->ID_LAPORANDT ?>" type="text" name="BIAYA_PERBAIKAN" value="<?php echo $row->BIAYA_PERBAIKAN ?>" onChange="editEuy('<?php echo $row->ID_LAPORANDT ?>','BIAYA_PERBAIKAN','BIAYA_PERBAIKAN<?php echo $row->ID_LAPORANDT ?>')">


		</td>
		<td>
				<input class="form-control" id="RENCANA<?php echo $row->ID_LAPORANDT ?>" type="text" name="RENCANA" value="<?php echo $row->RENCANA ?>" onChange="editEuy('<?php echo $row->ID_LAPORANDT ?>','RENCANA','RENCANA<?php echo $row->ID_LAPORANDT ?>')">

		</td>
		<td>

			<input class="form-control" id="KETERANGAN<?php echo $row->ID_LAPORANDT ?>" type="text" name="KETERANGAN" value="<?php echo $row->KETERANGAN ?>" onChange="editEuy('<?php echo $row->ID_LAPORANDT ?>','KETERANGAN','KETERANGAN<?php echo $row->ID_LAPORANDT ?>')">
	

		</td>
	</tr>

			<?php endforeach; ?>
</table>
</div>



<script type="text/javascript">
	function editEuy(ID_LAPORANDT,K,V){
		var VALUE = $("#"+V).val();
		var KOLOM = K;

		$.ajax({
			url:'<?php echo base_url().'bencanahd/update_lampiran6'; ?>',
			data:{
				ID_LAPORANDT:ID_LAPORANDT,
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