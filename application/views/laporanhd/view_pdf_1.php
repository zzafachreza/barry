

<?php

// echo $vendor = site_url().'assets/vendor/autoload.php';
// include_once ('assets/vendor/autoload.php');


$mpdf = new \Mpdf\Mpdf(['format' => 'Legal-L']);
$TGL = explode("-", $laporanhd['TANGGAL']);



$html = '<table style="width: 100%" style="font-size: small" border="1"><thead><tr><td colspan="18" border="0">
		              			<center>
									<h1>LAPORAN KERUSAKAN JARINGAN IRIGASI</h1>
				
									<h3>Inspeksi Rutin '. $TGL[2] .' Tanggal  Bulan '. $TGL[1] .' Tahun '. $TGL[0] .'</h2>
								</center>
								</td>
							<td colspan="2" border="0">
			              			<center>
										<h2>Blanko 02 - P</h2>
									</center>
							</td>
		            </tr>

		            <tr>
		            	<td border="0" colspan="4">DAERAH IRIGASI</td>
		            	<td border="0" colspan="12">: '. $laporanhd['DAERAH_IRIGASI'] .'</td>

		            	<td border="0" colspan="2">KABUPATEN</td>
		            	<td border="0" colspan="2">: '. $laporanhd['KABUPATEN'] .'</td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TOTAL LUAS AREAL DI</td>
		            	<td border="0" colspan="12">: '. $laporanhd['LUAS_AREA_IRIGASI'] .' Ha</td>

		            	<td border="0" colspan="2">PENGAMAT/RANTING</td>
		            	<td border="0" colspan="2">: '. $laporanhd['RANTING'] .'</td>
		            </tr>
		             <tr>
		            	<td border="0" colspan="4">TINGKATAN DI : T / ST / SD</td>
		            	<td border="0" colspan="12">: '. $laporanhd['TINGKATAN_IRIGASI'] .'</td>

		            	<td border="0" colspan="2">JURU/MANTRI</td>
		            	<td border="0" colspan="2">: '. $laporanhd['MANTRI'] .'</td>
		            </tr>
		       
		            <tr>
		            	<td colspan="20">
		            		&nbsp;
		            	</td>
		            </tr>
					<tr>
						<th rowspan="2">NO</th>
						<th rowspan="2">NAMA RUAS SALURAN</th>
						<th rowspan="2">NAMA BAGUNAN DAN TIPENYA</th>
						<th colspan="8">KEADAAN</th>
						<th colspan="2">TINDAKAN</th>
						<th colspan="2">PERKIRAAN BIAYA	</th>
						<th rowspan="2">PRIORITAS</th>
						<th rowspan="2">AREAL LAYANAN DI BAWAHNYA</th>
						<th rowspan="2">DESA / KECAMATAN</th>
						<th rowspan="2">FOTO_BEFORE</th>
						<th rowspan="2">FOTO_AFTER</th>
					</tr>
					<tr>
						<th>BOCORAN (M\'/BH)</th>
						<th>RUSAK/PUTUS (M\')</th>
						<th>LONGSORAN/TONJOLAN(M\')</th>
						<th>TERSUMBAT(M\'/BH)</th>
						<th>RETAK(M\')</th>
						<th>PINTU RUSAK (BH)</th>
						<th>SEDIMEN/WALED (H)</th>
						<th>MASUKAN LAIN - LAIN</th>
						<th>DIKERJAKAN</th>
						<th>USULAN TINDAK LANJUT</th>
						<th>ESTIMASI_RUGI</th>
						<th>ESTIMASI_PERBAIKAN</th>
						
					</tr>
					</thead>
					<tbody>';


			  				$no=0;
			  				foreach($laporandt->result() as $row){
			  				$no++;

				  		
				  		$html .='<tr style="height:100px;text-align: center;">
				  			<td >'. $no .'</td>
				  			<td>'. $row->nama_ruas.'</td>
				  			<td>'. $row->nama_bangunan .'</td>
							<td>'. $row->BOCORAN_M .'</td>
							<td>'. $row->RUSAK_M .'</td>
							<td>'. $row->LONGSORAN_M .'</td>
							<td>'. $row->TERSUMBAT_M .'</td>
							<td>'. $row->RETAK_M .'</td>
							<td>'. $row->RETAK_M .'</td>
							<td>'. $row->SEDIMEN_M .'</td>
							<td>'. $row->LAIN_LAIN .'</td>
							<td>'. $row->DIKERJAKAN .'</td>
							<td>'. $row->USULAN .'</td>
							<td>'. $row->ESTIMASI_RUGI .'</td>
							<td>'. $row->ESTIMASI_PERBAIKAN .'</td>
							<td>'. $row->PRIORITAS .'</td>
							<td>'. $row->AREA_BAWAH .'</td>
							<td>'. $row->DESA .'</td>
							<td>';

							 if (isset($row->FOTO_BEFORE)){

							 	$html .='
								<center>
										<img height="100" src="'. site_url().'upload/'.$row->FOTO_BEFORE .'">
									</center>';
							 }
							 	
								
							$html .='</td>
							<td>';


								 if (isset($row->FOTO_AFTER)){
								 		$html .='<center><img height="100" src="'. site_url().'upload/'.$row->FOTO_AFTER .'"></td></center>';
								 }
								 	
								
								
				  $html.='</tr>';

				}

				$html .='<tr>
							<td colspan="17">
								<p>Penjelasan : </p>
								<ol>
									<li>Diserahkan tiap tanggal 25 bulan ybs, walaupun tidak terjadi kerusakan pada bulan ybs</li>
									<li>Kolom 4 s/d 11 diisi salah satu tingkat kerusakan dan volumenya yang paling tepat <br>
										R = Kerusakan ringan (M\', BH, M³……) (Kerusakan yang dapat diatasi sendiri oleh pengelola jaringan irigasi)<br/>
										S = Kerusakan sedang (M\', BH, M³ ……..) (Kerusakan yang tidak dapat diatasi sendiri, perlu bantuan bahan)<br/>
										B = Kerusakan Berat (M\', BH, M³ ………..) (Kerusakan yang tidak bisa diatasi sendiri, perlu bantuan bahan dan tenaga)<br/>
										dan harus dilaporkan apabila ada kerusakan baru atau kerusakan lama (yang pernah dilaporkan) berubah lagi.

									</li>
									<li>Kolom 12 dan 13 keterangan diisi jenis kerusakan yang sudah dikerjakan dan diusulkan</li>
									<li>Kolom 14 diisi luas areal layanan dibawah/dihilir lokasi kerusakan yang menjadi oncorannya</li>
									<li>Laporan bulanan : Mantri/Juru → Ranting/Pengamat/UPTD/SUP</li>
								</ol>
							</td>
							<td colspan="3">
						
								<center>
									<h2>Juru/Mantri Cimandiri</h2>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<p style="font-weight: bold;font-size: x-large;"><u>'.$_SESSION['nama_lengkap'].'</u></p>
									</center>

							
								<p style="margin-top: 0%;font-size: large;">NIP : 1615516116156</p>
							</td>
						</tr>';


				$html .='</tbody></table>';


$mpdf->WriteHTML($html);
$mpdf->Output();





?>



