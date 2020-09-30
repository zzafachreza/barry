
<?php

// echo $vendor = site_url().'assets/vendor/autoload.php';
// include_once ('assets/vendor/autoload.php');


$mpdf = new \Mpdf\Mpdf(['format' => 'Legal-L']);
$TGL = explode("-", $laporanhd['TANGGAL']);



$html = '<table style="width: 100%" style="font-size: small;border:1px solid;border-collapse: collapse"><th style="border:1px solid;text-align:center"ead><tr>

<td style="border:1px solid;text-align:center" colspan="15" style="border:1px solid;text-align:center">
		              			<center>
									<h1>LAPORAN KERUSAKAN JARINGAN IRIGASI</h1>
				
									<h3>Inspeksi Rutin '. $TGL[2] .' Tanggal  Bulan '. $TGL[1] .' Tahun '. $TGL[0] .'</h2>
								</center>
								</td>
							<td style="border:1px solid;text-align:center" colspan="2" border="0">
			              			<center>
										<h2>Blanko 02 - P</h2>
									</center>
							</td>
		            </tr>

		            <tr>
		            	<td style="border:1px solid;" border="0" colspan="4">DAERAH IRIGASI</td>
		            	<td style="border:1px solid;" border="0" colspan="9">: '. $laporanhd['DAERAH_IRIGASI'] .'</td>

		            	<td style="border:1px solid;" border="0" colspan="2">KABUPATEN</td>
		            	<td style="border:1px solid;" border="0" colspan="2">: '. $laporanhd['KABUPATEN'] .'</td>
		            </tr>
		             <tr>
		            	<td style="border:1px solid;" border="0" colspan="4">TOTAL LUAS AREAL DI</td>
		            	<td style="border:1px solid;" border="0" colspan="9">: '. $laporanhd['LUAS_AREA_IRIGASI'] .' Ha</td>

		            	<td style="border:1px solid;" border="0" colspan="2">PENGAMAT/RANTING</td>
		            	<td style="border:1px solid;" border="0" colspan="2">: '. $laporanhd['RANTING'] .'</td>
		            </tr>
		             <tr>
		            	<td style="border:1px solid;" border="0" colspan="4">TINGKATAN DI : T / ST / SD</td>
		            	<td style="border:1px solid;" border="0" colspan="9">: '. $laporanhd['TINGKATAN_IRIGASI'] .'</td>

		            	<td style="border:1px solid;" border="0" colspan="2">JURU/MANTRI</td>
		            	<td style="border:1px solid;" border="0" colspan="2">: '. $laporanhd['MANTRI'] .'</td>
		            </tr>
		       
		            <tr>
		            	<td colspan="17">
		            		&nbsp;
		            	</td>
		            </tr>
					<tr>
						<th style="border:1px solid;text-align:center" rowspan="2">NO</th>
						<th style="border:1px solid;text-align:center" rowspan="2">NAMA RUAS SALURAN</th>
						<th style="border:1px solid;text-align:center" rowspan="2">NAMA BAGUNAN DAN TIPENYA</th>
						<th style="border:1px solid;text-align:center" colspan="8">KEADAAN</th>
						<th style="border:1px solid;text-align:center" colspan="2">PERKIRAAN BIAYA	</th>
						<th style="border:1px solid;text-align:center" rowspan="2">PRIORITAS</th>
						<th style="border:1px solid;text-align:center" rowspan="2">AREAL LAYANAN DI BAWAHNYA</th>
						<th style="border:1px solid;text-align:center" rowspan="2">DESA / KECAMATAN</th>
						<th style="border:1px solid;text-align:center" rowspan="2">FOTO_BEFORE</th>
					</tr>
					<tr>
						<th style="border:1px solid;text-align:center">BOCORAN (M\'/BH)</th>
						<th style="border:1px solid;text-align:center">RUSAK/PUTUS (M\')</th>
						<th style="border:1px solid;text-align:center">LONGSORAN/TONJOLAN(M\')</th>
						<th style="border:1px solid;text-align:center">TERSUMBAT(M\'/BH)</th>
						<th style="border:1px solid;text-align:center">RETAK(M\')</th>
						<th style="border:1px solid;text-align:center">PINTU RUSAK (BH)</th>
						<th style="border:1px solid;text-align:center">SEDIMEN/WALED (H)</th>
						<th style="border:1px solid;text-align:center">MASUKAN LAIN - LAIN</th>

						<th style="border:1px solid;text-align:center">ESTIMASI_RUGI</th>
						<th style="border:1px solid;text-align:center">ESTIMASI_PERBAIKAN</th>
						
					</tr>
					<tr sstyle="text-align: center;">
						<td style="border:1px solid;text-align:center">1</td>
						<td style="border:1px solid;text-align:center">2</td>
						<td style="border:1px solid;text-align:center">3</td>
						<td style="border:1px solid;text-align:center">4</td>
						<td style="border:1px solid;text-align:center">5</td>
						<td style="border:1px solid;text-align:center">6</td>
						<td style="border:1px solid;text-align:center">7</td>
						<td style="border:1px solid;text-align:center">8</td>
						<td style="border:1px solid;text-align:center">9</td>
						<td style="border:1px solid;text-align:center">10</td>
						<td style="border:1px solid;text-align:center">11</td>
						<td style="border:1px solid;text-align:center">12</td>
						<td style="border:1px solid;text-align:center">13</td>
						<td style="border:1px solid;text-align:center">14</td>
						<td style="border:1px solid;text-align:center">15</td>
						<td style="border:1px solid;text-align:center">16</td>
						<td style="border:1px solid;text-align:center">17</td>


					</tr>
					</thead>
					<tbody>';


			  				$no=0;
			  				foreach($laporandt->result() as $row){
			  				$no++;

			  				if ($row->ID_LAPORANHD !== $laporanhd['ID_LAPORANHD']) {
			  					# code...
			  					

			  				}else{

				  		
				  		$html .='<tr style="height:100px;text-align: center;">
				  			<td style="border:1px solid;text-align:center" >'. $no .'</td>
				  			<td style="border:1px solid;text-align:center">'. $row->nama_ruas.'</td>
				  			<td style="border:1px solid;text-align:center">'. $row->nama_bangunan .'</td>
							<td style="border:1px solid;text-align:center">'. $row->BOCORAN_M .'</td>
							<td style="border:1px solid;text-align:center">'. $row->RUSAK_M .'</td>
							<td style="border:1px solid;text-align:center">'. $row->LONGSORAN_M .'</td>
							<td style="border:1px solid;text-align:center">'. $row->TERSUMBAT_M .'</td>
							<td style="border:1px solid;text-align:center">'. $row->RETAK_M .'</td>
							<td style="border:1px solid;text-align:center">'. $row->RETAK_M .'</td>
							<td style="border:1px solid;text-align:center">'. $row->SEDIMEN_M .'</td>
							<td style="border:1px solid;text-align:center">'. $row->LAIN_LAIN .'</td>
							<td style="border:1px solid;text-align:center">'. $row->ESTIMASI_RUGI .'</td>
							<td style="border:1px solid;text-align:center">'. $row->ESTIMASI_PERBAIKAN .'</td>
							<td style="border:1px solid;text-align:center">'. $row->PRIORITAS .'</td>
							<td style="border:1px solid;text-align:center">'. $row->AREA_BAWAH .'</td>
							<td style="border:1px solid;text-align:center">'. $row->DESA .'</td>
							<td style="border:1px solid;text-align:center">';

							 if (isset($row->FOTO_BEFORE)){

							 	$html .='
								<center>
										<img height="100" src="'. site_url().'upload/'.$row->FOTO_BEFORE .'">
									</center>';
							 }
							 	
								
						
								
				  $html.='</tr>';

					}

				}

				$html .='<tr>
							<td style="border:1px solid;text-align:left" colspan="14">
								<p>Penjelasan : </p>
								<ol>
									<li>Diserahkan tiap tanggal 25 bulan ybs, walaupun tidak terjadi kerusakan pada bulan ybs</li>
									<li>Kolom 4 s/d 11 diisi salah satu tingkat kerusakan dan volumenya yang paling tepat <br>
										R = Kerusakan ringan (M\', BH, M³……) (Kerusakan yang dapat diatasi sendiri oleh pengelola jaringan irigasi)<br/>
										S = Kerusakan sedang (M\', BH, M³ ……..) (Kerusakan yang tidak dapat diatasi sendiri, perlu bantuan bahan)<br/>
										B = Kerusakan Berat (M\', BH, M³ ………..) (Kerusakan yang tidak bisa diatasi sendiri, perlu bantuan bahan dan tenaga)<br/>
										dan harus dilaporkan apabila ada kerusakan baru atau kerusakan lama (yang pernah dilaporkan) berubah lagi.

									</li>
									<li>Kolom 12 dan 13 keterangan diisi jenis perkiraan kerugian dan perbaikannya</li>
									<li>Kolom 14 diisi dengan skala prioritasnya 1, 2 atau 3 (1 = segera; 2 = perlu; 3 = dapat ditangguhkan)</li>
									<li>Kolom 15 diisi luas areal layanan dibawah/dihilir lokasi kerusakan yang menjadi daerah layanannya<br/>
									Laporan bulanan : Ranting/Pengamat/UPTD/SUP→ Dinas Pengairan Kabupaten/Balai PSDA</li>
								</ol>
							</td>
							<td style="border:1px solid;text-align:center" colspan="3">
						
								<center>
									<h3>'. $laporanhd['KABUPATEN'].", ".$TGL[2]."/".$TGL[1]."/".$TGL[0].'<br/>
										Pengamat/Ranting/UPTD/SUP<br/>'.$laporanhd['RANTING'].'</h3>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<p style="font-weight: bold;font-size: x-large;"><u>'.$_SESSION['nama_lengkap'].'</u></p>
									</center>

							
								<p style="margin-top: 0%;font-size: large;">NIP : '.$_SESSION['nip'] .'</p>
							</td>
						</tr>';


				$html .='</tbody></table>';


$mpdf->WriteHTML($html);
$mpdf->Output();





?>



