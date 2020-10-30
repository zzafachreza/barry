<?php

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Blanko 03 - P.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");

function tglIndonesia2($tanggal){
  $namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
           "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
           
  $tgl=substr($tanggal,8,2);
  $bln=substr($tanggal,5,2);
  $thn=substr($tanggal,0,4);
  $tanggal ="$tgl ".$namaBln[$bln]." $thn";
  return $tanggal;
}



error_reporting(0);

?>
<style type="text/css">
	.navbar{
		display: none;
	}
</style>



<table style="width: 100%"
              style="font-size: small"
              border="1">
					<thead>
					 <tr>
              				<td colspan="15" border="0">
		              			<center>
									<h1>LAPORAN KERUSAKAN JARINGAN IRIGASI</h1>
									<h3>Inspeksi Rutin  Tanggal <?php echo tglIndonesia2($laporanhd['TANGGAL'])  ?></h3>
								</center>
								</td>
							<td colspan="2" border="0">
			              			<center>
										<h2>Blanko 01 - P</h2>
									</center>
							</td>
		            </tr>

		            <tr>
		            	<td border="0" colspan="4">DAERAH IRIGASI</td>
		            	<td border="0" colspan="9">: <?php echo $laporanhd['DAERAH_IRIGASI'] ?></td>

		            	<td border="0" colspan="2">KABUPATEN</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['KABUPATEN'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TOTAL LUAS AREAL DI</td>
		            	<td border="0" colspan="9">: <?php echo $laporanhd['LUAS_AREA_IRIGASI'] ?> Ha</td>

		            	<td border="0" colspan="2">PENGAMAT/RANTING</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['RANTING'] ?></td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TINGKATAN DI : T / ST / SD</td>
		            	<td border="0" colspan="9">: <?php echo $laporanhd['TINGKATAN_IRIGASI'] ?></td>

		            	<td border="0" colspan="2">JURU/MANTRI</td>
		            	<td border="0" colspan="2">: <?php echo $laporanhd['MANTRI'] ?></td>
		            </tr>
		       
		            <tr>
		            	<td colspan="17">
		            		&nbsp;
		            	</td>
		            </tr>
					<tr>
						<th rowspan="2">NO</th>
						<th rowspan="2">NAMA RUAS SALURAN</th>
						<th rowspan="2">NAMA BAGUNAN DAN TIPENYA</th>
						<th colspan="8">KEADAAN</th>
						<th colspan="2">TINDAKAN</th>
						<th rowspan="2">AREAL LAYANAN DI BAWAHNYA</th>
						<th rowspan="2">DESA / KECAMATAN</th>
						<th rowspan="2">FOTO_BEFORE</th>
						<th rowspan="2">FOTO_AFTER</th>
					</tr>
					<tr>
						<th>BOCORAN (M'/BH)</th>
						<th>RUSAK/PUTUS (M')</th>
						<th>LONGSORAN/TONJOLAN(M')</th>
						<th>TERSUMBAT(M'/BH)</th>
						<th>RETAK(M')</th>
						<th>PINTU RUSAK (BH)</th>
						<th>SEDIMEN/WALED (H)</th>
						<th>MASUKAN LAIN - LAIN</th>
						<th>DIKERJAKAN</th>
						<th>USULAN TINDAK LANJUT</th>
					</tr>
					<tr style="text-align: center;">
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
						<td>15</td>
						<td>16</td>
						<td>17</td>


					</tr>
					</thead>
					<tbody>
						 <?php
			  				$no=0;
			  				foreach($laporandt->result() as $row):
			  				$no++;

			  				if ($laporanhd['ID_LAPORANHD']!==$row->ID_LAPORANHD) {
			  					# code...
			  					$style='style="display:none"';
			  				}else{
			  					$style='style="height:100px;text-align: center;"';
			  				}

				  		?>
				  		<tr <?php echo $style ?> >
				  			<td ><?php echo $no ?></td>
				  			<td><?php echo $row->nama_ruas; ?>
		
				  			</td>
				  			<td><?php echo $row->nama_bangunan; ?></td>
							<td><?php echo $row->BOCORAN_M; ?><br/>
								<?php echo $row->BOCORAN_M>0 ? '( '.$row->BOCORAN_T.' )':''; ?><br/>
								<?php echo $row->BOCORAN_M>0 ? number_format($row->BOCORAN_B):''; ?><br/>
								<strong><?php echo $row->BOCORAN_M>0 ?$row->BOCORAN:''; ?></strong>
							</td>
							<td><?php echo $row->RUSAK_M; ?><br/>
								<?php echo $row->RUSAK_M>0 ? '( '.$row->RUSAK_T.' )':''; ?><br/>
								<?php echo $row->RUSAK_M>0 ? number_format($row->RUSAK_B):''; ?><br/>
								<strong><?php echo $row->RUSAK_M>0 ?$row->RUSAK:''; ?></strong>
							</td>
							<td><?php echo $row->LONGSORAN_M; ?><br/>
								<?php echo $row->LONGSORAN_M>0 ? '( '.$row->LONGSORAN_T.' )':''; ?><br/>
								<?php echo $row->LONGSORAN_M>0 ? number_format($row->LONGSORAN_B):''; ?><br/>
								<strong><?php echo $row->LONGSORAN_M>0 ?$row->LONGSORAN:''; ?></strong>
							</td>
							<td><?php echo $row->TERSUMBAT_M; ?><br/>
								<?php echo $row->TERSUMBAT_M>0 ? '( '.$row->TERSUMBAT_T.' )':''; ?><br/>
								<?php echo $row->TERSUMBAT_M>0 ? number_format($row->TERSUMBAT_B):''; ?><br/>
								<strong><?php echo $row->TERSUMBAT_M>0 ?$row->TERSUMBAT:''; ?></strong>
							</td>
							<td><?php echo $row->RETAK_M; ?><br/>
								<?php echo $row->RETAK_M>0 ? '( '.$row->RETAK_T.' )':''; ?><br/>
								<?php echo $row->RETAK_M>0 ? number_format($row->RETAK_B):''; ?><br/>
								<strong><?php echo $row->RETAK_M>0 ? $row->RETAK:''; ?></strong>
							</td>
							<td><?php echo $row->PINTU_RUSAK_M; ?><br/>
								<?php echo $row->PINTU_RUSAK_M>0 ?  '( '.$row->PINTU_RUSAK_T.' )':''; ?><br/>
								<?php echo $row->PINTU_RUSAK_M>0 ? number_format($row->PINTU_RUSAK_B):''; ?><br/>
								<strong><?php echo $row->PINTU_RUSAK_M>0 ?$row->PINTU_RUSAK:''; ?></strong>
							</td>
							<td><?php echo $row->SEDIMEN_M; ?><br/>
								<?php echo $row->SEDIMEN_M>0 ? '( '.$row->SEDIMEN_T.' )':''; ?><br/>
								<?php echo $row->SEDIMEN_M>0 ?number_format($row->SEDIMEN_B):''; ?><br/>
								<strong><?php echo $row->SEDIMEN_M>0 ? $row->SEDIMEN:''; ?></strong>
							</td>
							<td><?php echo $row->LAIN_LAIN; ?></td>
							<td><?php echo $row->DIKERJAKAN; ?></td>
							<td><?php echo $row->USULAN; ?></td>
							<td><?php echo $row->AREA_BAWAH; ?></td>
							<td><?php echo $row->DESA; ?></td>
							<td>
								<?php $gambar =$row->FOTO_BEFORE; ?>
								<?php if (strlen($row->FOTO_BEFORE) > 0 ): ?>
									<center>
										<img height="100" src="<?php echo site_url().'upload/'.$row->$gambar; ?>">
									</center>

								<?php endif ?>
								
							</td>
							<td>
								<?php $gambar2 =$row->FOTO_AFTER; ?>
								<?php if (strlen($row->FOTO_AFTER) > 0 ): ?>
									<center>
										<img height="100" src="<?php echo site_url().'upload/'.$row->$gambar2; ?>">
									</center>

								<?php endif ?>
								
							</td>
						
			
								
				  		</tr>
						<?php endforeach; ?>
						<tr>
							<td colspan="14">
								<p>Penjelasan : </p>
								<ol>
									<li>Diserahkan tiap tanggal 25 bulan ybs, walaupun tidak terjadi kerusakan pada bulan ybs</li>
									<li>Kolom 4 s/d 11 diisi salah satu tingkat kerusakan dan volumenya yang paling tepat <br>
										R = Kerusakan ringan (M', BH, M³……) (Kerusakan yang dapat diatasi sendiri oleh pengelola jaringan irigasi)<br/>
										S = Kerusakan sedang (M', BH, M³ ……..) (Kerusakan yang tidak dapat diatasi sendiri, perlu bantuan bahan)<br/>
										B = Kerusakan Berat (M', BH, M³ ………..) (Kerusakan yang tidak bisa diatasi sendiri, perlu bantuan bahan dan tenaga)<br/>
										dan harus dilaporkan apabila ada kerusakan baru atau kerusakan lama (yang pernah dilaporkan) berubah lagi.

									</li>
									<li>Kolom 12 dan 13 keterangan diisi jenis kerusakan yang sudah dikerjakan dan diusulkan</li>
									<li>Kolom 14 diisi luas areal layanan dibawah/dihilir lokasi kerusakan yang menjadi oncorannya</li>
									<li>Laporan bulanan : Mantri/Juru → Ranting/Pengamat/UPTD/SUP</li>
								</ol>
							</td>
							<td colspan="3">
								<center>
									<strong><?php echo $laporanhd['KABUPATEN'] ?>, <?php echo tglIndonesia2($laporanhd['TANGGAL'])  ?></strong>
									<h2>Juru/Mantri Cimandiri</h2>
									<br/>
									<br/>
									<br/>
									<br/>
									<p style="font-weight: bold;font-size: x-large;"><u><?php echo $_SESSION['nama_lengkap'] ?></u></p>
									<p style="margin-top: 0%;font-size: large;">NIP : <?php echo $_SESSION['nip'] ?> </p>
								</center>
											
							</td>
						</tr>
					</tbody>
				</table>



