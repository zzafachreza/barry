
<?php

// echo $vendor = site_url().'assets/vendor/autoload.php';
// include_once ('assets/vendor/autoload.php');


$mpdf = new \Mpdf\Mpdf(['format' => 'Legal-L']);
$TGL = explode("-", $laporanhd['TANGGAL']);



$html = '<table style="width: 100%" style="font-size: small;border:1px solid;border-collapse: collapse"><th style="border:1px solid;text-align:center"ead><tr>

<td style="border:1px solid;text-align:center" colspan="15" style="border:1px solid;text-align:center">
		              			<center>
								<h1>LAPORAN KERUSAKAN AKIBAT BENCANA ALAM</h1>
				
									<h3>Tanggal Kejadian '. $TGL[2] .'  Bulan '. $TGL[1] .' Tahun '. $TGL[0] .'</h2>
								</center>
								</td>
							<td style="border:1px solid;text-align:center" colspan="2" border="0">
			              			<center>
										<h2>Blanko 03 - P</h2>
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
		            	<td style="border:1px solid;" border="0" colspan="13">: '. $laporanhd['TINGKATAN_IRIGASI'] .'</td>

		            	
		            </tr>
		       
		            <tr>
		            	<td style="border:1px solid;text-align:center" colspan="17">
		            		&nbsp;
		            	</td>
		            </tr>
					  <tr>
		            	<th style="border:1px solid;text-align:center" rowspan="3">NO</th>
						<th style="border:1px solid;text-align:center" rowspan="3">NAMA SALURAN /
						BANGUNAN DAN LOKASI
						Hm, DESA DAN KECAMATAN
						</th>
						<th style="border:1px solid;text-align:center" rowspan="3">PENYEBAB KERUSAKAN</th>
						<th style="border:1px solid;text-align:center" rowspan="3">JENIS KERUSAKAN</th>
						<th style="border:1px solid;text-align:center" colspan="7">PERINCIAN KERUSAKAN</th>
						<th style="border:1px solid;text-align:center" colspan="2">TANGGAP DARURAT</th>
						<th style="border:1px solid;text-align:center" colspan="2">PERBAIKAN YANG DIPERLUKAN</th>
						<th style="border:1px solid;text-align:center" colspan="2">DOKUMENTASI</th>
		            </tr>


					
					<tr>	
						
						<th style="border:1px solid;text-align:center" rowspan="2">TANAH (M)</th>
						<th style="border:1px solid;text-align:center" colspan="2">PASANGAN</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">PINTU_AIR (B/BH)</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">GORONG_GORONG (D/L)</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">LAIN - LAIN</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">LUAS TERANCAM DIBAWAHNYA (Ha)</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">TINDAKAN PERBAIKAN YANG TELAH DIKERJAKAN</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">BIAYA_PERBAIKAN</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">YANG AKAN DIKERJAKAN OLEH IP3A/GP3A DAN PEKARYA</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">YANG DIUSULKAN UNTUK DIKERJAKAN DI TINGKAT YANG LEBIH ATAS</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">FOTO BEFORE</th>
						<th style="border:1px solid;text-align:center"  rowspan="2">FOTO AFTER</th>
						
					</tr>
					<tr>
						<th>BATU (M³)</th>
						<th>BETON (M³)</th>
					</tr>
					<tr style="text-align: center;">
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

				  		
				  		$html .='<tr style="height:100px;text-align: center;">
				  			<td style="border:1px solid;text-align:center" >'. $no .'</td>
				  			<td style="border:1px solid;text-align:center">'. $row->nama_bangunan.'<br/>'.$row->nama_ruas.' '.$row->DESA.'</td>
				  			<td style="border:1px solid;text-align:center">'. $row->PENYEBAB_KERUSAKAN .'</td>
				  			<td style="border:1px solid;text-align:center">'. $row->JENIS_KERUSAKAN .'</td>
							<td style="border:1px solid;text-align:center">'. $row->TANAH .'</td>
							<td style="border:1px solid;text-align:center">'. $row->BATU .'</td>
							<td style="border:1px solid;text-align:center">'. $row->BETON .'</td>
							<td style="border:1px solid;text-align:center">'. $row->PINTU_AIR .'</td>
							<td style="border:1px solid;text-align:center">'. $row->GORONG_GORONG .'</td>
							<td style="border:1px solid;text-align:center">'. $row->LAIN_LAIN_KERUSAKAN .'</td>
							<td style="border:1px solid;text-align:center">'. $row->LUAS_TERANCAM .'</td>
							<td style="border:1px solid;text-align:center">'. $row->TINDAKAN_PERBAIKAN .'</td>
							<td style="border:1px solid;text-align:center">'. $row->BIAYA_PERBAIKAN .'</td>
							<td style="border:1px solid;text-align:center">'. $row->DIKERJAKAN_OLEH .'</td>
							<td style="border:1px solid;text-align:center">'. $row->DIUSULKAN_OLEH .'</td>
							<td style="border:1px solid;text-align:center">';

							 if (isset($row->FOTO_BEFORE)){

							 	$html .='
								<center>
										<img height="100" src="'. site_url().'upload/'.$row->FOTO_BEFORE .'">
									</center>';
							 }
							 	
								
						
								
				  $html.='</tr><td style="border:1px solid;text-align:center">';

							 if (isset($row->FOTO_AFTER)){

							 	$html .='
								<center>
										<img height="100" src="'. site_url().'upload/'.$row->FOTO_AFTER .'">
									</center>';
							 }
							 	
								
						
								
				  $html.='</tr>';

				}

				$html .='<tr>
							<td style="border:1px solid;text-align:left" colspan="14">
								<p>Penjelasan : </p>
								<ol>
									<li>Kolom 8 : b lebar pintu (m) ; jumlah (bh)</li>
									<li>Kolom 9 : d diameter (m), panjang (m)</li>
									<li>Kolom 12 dan 13 keterangan diisi jenis perkiraan kerugian dan perbaikannya</li>
									<li>Perlu dilampiri gambar sketsa<br/>
Dicatat di Buku Catatan Pemeliharaan CD/CS/UPT/Pengamat Pengairan/SUP<br/><br/><br/>
	<strong><i>Laporan bulanan : Ranting/Pengamat/UPTD/SUP→ Dinas Pengairan Kabupaten/Balai PSDA</i></strong>

									</li>
								
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

							
								<p style="margin-top: 0%;font-size: large;">NIP : 1615516116156</p>
							</td>
						</tr>';


				$html .='</tbody></table>';


$mpdf->WriteHTML($html);
$mpdf->Output();





?>



