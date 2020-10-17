<?php
error_reporting(0);
$dataLamp04 = $lamp04->result();

?>

<hr/>

<div class="container-fluid">
	<div class="row">
		<div class="col col-sm-2">
			<a href="../lampiran052" class="btn btn-secondary col-sm-12">KEMBALI</a>
		</div>
		<div class="col col-sm-2">
			<form method="POST" action="<?php echo base_url().'bencanahd/selesai_052'; ?>">
				<input type="hidden" name="ID_LAPORANHD" value="<?php echo $dataLamp04[0]->ID_LAPORANHD ?>">

				<button class="btn btn-info col-sm-12" onclick="return confirm('Apakah Anda yakin ?\n Data tidak dapat diubah jika sudah disimpan')">SELESAI</button>
				
			</form>
		</div>
	</div>
</div>
<hr/>
<div class="container-fluid">
<table class="table table-bordered">
	<tr>
		<th colspan="8">PROGRAM PEKERJAAN KONTRAKTUAL</th>
		<th>BLANKO 05 - P</th>
	</tr>
	<tr>
		<th colspan="10">Tahun <?php echo date('Y') ?></th>
	</tr>
	<tr>
		<th colspan="10">&nbsp;</th>
	</tr>
	<tr>
		<th>DINAS/BALAI PSDA</th>
		<td><input id="BALAI<?php echo $dataLamp04[0]->ID_LAPORANHD ?>" type="text" name="BALAI" value="<?php echo $dataLamp04[0]->BALAI ?>" onChange="editEuy2('<?php echo $dataLamp04[0]->ID_LAPORANHD ?>','BALAI','BALAI<?php echo $dataLamp04[0]->ID_LAPORANHD ?>')" class="form-control"></td>
	</tr>
	<tr>
		<th colspan="10">&nbsp;</th>
	</tr>
	<tr>
		<th rowspan="2">NO</th>
		<th rowspan="2">DAERAH IRIGASI</th>
		<th colspan="2">LOKASI</th>
		<th rowspan="2">URAIAN</th>
		<th rowspan="2">TOLAK UKUR</th>
		<th colspan="1" rowspan="2">BIAYA</th>
		<th rowspan="2">JADWAL PELAKSANAAN</th>
		<th rowspan="2">KETERANGAN</th>

	</tr>
	<tr>
		<th>NAMA SALURAN</th>
		<th>KECAMATAN/KABUPATEN</th>

	</tr>
	<?php

	$no=0;
			  				foreach($lamp04->result() as $row):
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
		<td><?php echo $row->nama_bangunan ?><br/><?php echo $row->nama_ruas ?></td>
		<td><?php echo $row->DESA ?><br/><?php echo $row->KABUPATEN ?></td>
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
	
		<td>
			<label><?php echo $row->ESTIMASI_PERBAIKAN ?><br/>(ESTIMASI PERBAIKAN)</label>
			<input id="JUMLAH<?php echo $row->ID_KONTRAKTUAL2 ?>" type="text" name="JUMLAH" value="<?php echo $row->JUMLAH ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL2 ?>','JUMLAH','JUMLAH<?php echo $row->ID_KONTRAKTUAL2 ?>')" class="form-control">

		</td>
		<td>
			<label>
				Dari
				<input id="TANGGAL_AWAL<?php echo $row->ID_KONTRAKTUAL2 ?>" type="text" name="TANGGAL_AWAL" value="<?php echo TglIndonesia($row->TANGGAL_AWAL) ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL2 ?>','TANGGAL_AWAL','TANGGAL_AWAL<?php echo $row->ID_KONTRAKTUAL2 ?>')" class="tgl form-control">
			</label>
			<br/>
			<label>
				Sampai
				<input id="TANGGAL_AKHIR<?php echo $row->ID_KONTRAKTUAL2 ?>" type="text" name="TANGGAL_AKHIR" value="<?php echo TglIndonesia($row->TANGGAL_AKHIR) ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL2 ?>','TANGGAL_AKHIR','TANGGAL_AKHIR<?php echo $row->ID_KONTRAKTUAL2 ?>')" class="tgl form-control">
			</label>
		
		</td>
		<td>
			<input id="KETERANGAN<?php echo $row->ID_KONTRAKTUAL2 ?>" type="text" name="KETERANGAN" value="<?php echo $row->KETERANGAN ?>" onChange="editEuy2('<?php echo $row->ID_KONTRAKTUAL2 ?>','KETERANGAN','KETERANGAN<?php echo $row->ID_KONTRAKTUAL2 ?>')" class="form-control">

		</td>
	</tr>


<?php endforeach; ?>
</table>

</div>

<script type="text/javascript">
	function editEuy2(ID_KONTRAKTUAL2,K,V){
		var VALUE = $("#"+V).val();
		var KOLOM = K;


		$.ajax({
			url:'<?php echo base_url().'bencanahd/update_lampiran52'; ?>',
			data:{
				ID_KONTRAKTUAL2:ID_KONTRAKTUAL2,
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