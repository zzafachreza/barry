
<?php

// echo $vendor = site_url().'assets/vendor/autoload.php';
// include_once ('assets/vendor/autoload.php');


$mpdf = new \Mpdf\Mpdf(['format' => 'Legal-L']);
$TGL = explode("-", $laporanhd['TANGGAL']);

function tglIndonesia2($tanggal){
  $namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
           "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
           
  $tgl=substr($tanggal,8,2);
  $bln=substr($tanggal,5,2);
  $thn=substr($tanggal,0,4);
  $tanggal ="$tgl ".$namaBln[$bln]." $thn";
  return $tanggal;
}




$html = '<table style="width: 100%" style="font-size: small;border:1px solid;border-collapse: collapse"><th style="border:1px solid black" style="border:1px solid;text-align:center"ead><tr>
	<th style="border:1px solid black"ead>
					 <tr>
              				<td style="border:1px solid black" colspan="15" border="0">
		              			<center>
									<h1>LAPORAN KERUSAKAN JARINGAN IRIGASI</h1>
									<h3>Inspeksi Rutin  Tanggal '.tglIndonesia2($laporanhd['TANGGAL']) .'</h3>
								</center>
								</td>
							<td style="border:1px solid black" colspan="2" border="0">
			              			<center>
										<h2>Blanko 01 - P</h2>
									</center>
							</td>
		            </tr>

		            <tr>
		            	<td style="border:1px solid black" border="0" colspan="4">DAERAH IRIGASI</td>
		            	<td style="border:1px solid black" border="0" colspan="9">: '.$laporanhd['DAERAH_IRIGASI'] .'</td>

		            	<td style="border:1px solid black" border="0" colspan="2">KABUPATEN</td>
		            	<td style="border:1px solid black" border="0" colspan="2">: '.$laporanhd['KABUPATEN'] .'</td>
		            </tr>
		             <tr>
		            	<td style="border:1px solid black" border="0" colspan="4">TOTAL LUAS AREAL DI</td>
		            	<td style="border:1px solid black" border="0" colspan="9">: '. $laporanhd['LUAS_AREA_IRIGASI'] .' Ha</td>

		            	<td style="border:1px solid black" border="0" colspan="2">PENGAMAT/RANTING</td>
		            	<td style="border:1px solid black" border="0" colspan="2">: '.$laporanhd['RANTING'] .'</td>
		            </tr>
		             <tr>
		            	<td style="border:1px solid black" border="0" colspan="4">TINGKATAN DI : T / ST / SD</td>
		            	<td style="border:1px solid black" border="0" colspan="9">: '. $laporanhd['TINGKATAN_IRIGASI'] .'</td>

		            	<td style="border:1px solid black" border="0" colspan="2">JURU/MANTRI</td>
		            	<td style="border:1px solid black" border="0" colspan="2">: '. $laporanhd['MANTRI'] .'</td>
		            </tr>
		       
		            <tr>
		            	<td style="border:1px solid black" colspan="21">
		            		&nbsp;
		            	</td>
		            </tr>
					<tr>
						<th style="border:1px solid black" rowspan="2">NO</th>
						<th style="border:1px solid black" rowspan="2">NAMA RUAS SALURAN</th>
						<th style="border:1px solid black" rowspan="2">NAMA BAGUNAN DAN TIPENYA</th>
						<th style="border:1px solid black" colspan="8">KEADAAN</th>
						<th style="border:1px solid black" colspan="2">TINDAKAN</th>
						<th style="border:1px solid black" rowspan="2">AREAL LAYANAN DI BAWAHNYA</th>
						<th style="border:1px solid black" rowspan="2">DESA / KECAMATAN</th>
						<th style="border:1px solid black" rowspan="2">FOTO_BEFORE</th>
						<th style="border:1px solid black" rowspan="2">FOTO_AFTER</th>
					</tr>
					<tr>
						<th style="border:1px solid black">BOCORAN (M\'/BH)</th>
						<th style="border:1px solid black">RUSAK/PUTUS (M\')</th>
						<th style="border:1px solid black">LONGSORAN/TONJOLAN(M\')</th>
						<th style="border:1px solid black">TERSUMBAT(M\'/BH)</th>
						<th style="border:1px solid black">RETAK(M\')</th>
						<th style="border:1px solid black">PINTU_RUSAK (BH)</th>
						<th style="border:1px solid black">SEDIMEN/WALED (H)</th>
						<th style="border:1px solid black">MASUKAN LAIN - LAIN</th>
						<th style="border:1px solid black">DIKERJAKAN</th>
						<th style="border:1px solid black">USULAN TINDAK LANJUT</th>
					</tr>
					<tr style="text-align: center;">
						<td style="border:1px solid black">1</td>
						<td style="border:1px solid black">2</td>
						<td style="border:1px solid black">3</td>
						<td style="border:1px solid black">4</td>
						<td style="border:1px solid black">5</td>
						<td style="border:1px solid black">6</td>
						<td style="border:1px solid black">7</td>
						<td style="border:1px solid black">8</td>
						<td style="border:1px solid black">9</td>
						<td style="border:1px solid black">10</td>
						<td style="border:1px solid black">11</td>
						<td style="border:1px solid black">12</td>
						<td style="border:1px solid black">13</td>
						<td style="border:1px solid black">14</td>
						<td style="border:1px solid black">15</td>
						<td style="border:1px solid black">16</td>
						<td style="border:1px solid black">17</td>
					</tr>
					</thead>
					<tbody>';


			  				$no=0;
			  				foreach($laporandt->result() as $row){
			  				$no++;

			  				if ($row->ID_LAPORANHD !== $laporanhd['ID_LAPORANHD']) {
			  					# code...
			  					

			  				}else{


								
								
								$BOCORAN_T = $row->BOCORAN_M>0 ? '<br/>( '.$row->BOCORAN_T.' )':'';
				  				$RUSAK_T = $row->RUSAK_M>0 ? '<br/>( '.$row->RUSAK_T.' )':'';
				  				$LONGSORAN_T = $row->LONGSORAN_M>0 ? '<br/>( '.$row->LONGSORAN_T.' )':'';
				  				$TERSUMBAT_T = $row->TERSUMBAT_M>0 ? '<br/>( '.$row->TERSUMBAT_T.' )':'';
				  				$RETAK_T = $row->RETAK_M>0 ? '<br/>( '.$row->RETAK_T.' )':'';
				  				$PINTU_RUSAK_T= $row->PINTU_RUSAK_M>0 ? '<br/>( '.$row->PINTU_RUSAK_T.' )':'';
				  				$SEDIMEN_T = $row->SEDIMEN_M>0 ? '<br/>( '.$row->SEDIMEN_T.' )':'';

				  				$BOCORAN_B = $row->BOCORAN_M>0 ? '<br/>( '.number_format($row->BOCORAN_B).' )':'';
				  				$RUSAK_B = $row->RUSAK_M>0 ? '<br/>( '.number_format($row->RUSAK_B).' )':'';
				  				$LONGSORAN_B = $row->LONGSORAN_M>0 ? '<br/>( '.number_format($row->LONGSORAN_B).' )':'';
				  				$TERSUMBAT_B = $row->TERSUMBAT_M>0 ? '<br/>( '.number_format($row->TERSUMBAT_B).' )':'';
				  				$RETAK_B = $row->RETAK_M>0 ? '<br/>( '.number_format($row->RETAK_B).' )':'';
				  				$PINTU_RUSAK_B= $row->PINTU_RUSAK_M>0 ? '<br/>( '.number_format($row->PINTU_RUSAK_B).' )':'';
				  				$SEDIMEN_B = $row->SEDIMEN_M>0 ? '<br/>( '.number_format($row->SEDIMEN_B).' )':'';

				  				$BOCORAN = $row->BOCORAN_M>0 ? '<br/>( '.$row->BOCORAN.' )':'';
				  				$RUSAK = $row->RUSAK_M>0 ? '<br/>( '.$row->RUSAK.' )':'';
				  				$LONGSORAN = $row->LONGSORAN_M>0 ? '<br/>( '.$row->LONGSORAN.' )':'';
				  				$TERSUMBAT = $row->TERSUMBAT_M>0 ? '<br/>( '.$row->TERSUMBAT.' )':'';
				  				$RETAK = $row->RETAK_M>0 ? '<br/>( '.$row->RETAK.' )':'';
				  				$PINTU_RUSAK= $row->PINTU_RUSAK_M>0 ? '<br/>( '.$row->PINTU_RUSAK.' )':'';
				  				$SEDIMEN = $row->SEDIMEN_M>0 ? '<br/>( '.$row->SEDIMEN.' )':'';
								
								
								
								
								
								

			  						$html.='<tr style="text-align: center;">
											<td style="border:1px solid black">'.$no.'</td>
											<td style="border:1px solid black">'.$row->nama_ruas.'</td>
											<td style="border:1px solid black">'.$row->nama_bangunan.'</td>
												<td style="border:1px solid black">'.$row->BOCORAN_M.$BOCORAN_T.$BOCORAN_B.$BOCORAN.'</td>
											<td style="border:1px solid black">'.$row->RUSAK_M.$RUSAK_T.$RUSAK_B.$RUSAK.'</td>
											<td style="border:1px solid black">'.$row->LONGSORAN_M.$LONGSORAN_T.$LONGSORAN_B.$LONGSORAN.'</td>
											<td style="border:1px solid black">'.$row->TERSUMBAT_M.$TERSUMBAT_T.$TERSUMBAT_B.$TERSUMBAT.'</td>
											<td style="border:1px solid black">'.$row->RETAK_M.$RETAK_T.$RETAK_B.$RETAK.'</td>
											<td style="border:1px solid black">'.$row->PINTU_RUSAK_M.$PINTU_RUSAK_T.$PINTU_RUSAK_B.$PINTU_RUSAK.'</td>
											<td style="border:1px solid black">'.$row->SEDIMEN_M.$SEDIMEN_T.$SEDIMEN_B.$SEDIMEN.'</td>
											<td style="border:1px solid black">'.$row->LAIN_LAIN.'</td>
											<td style="border:1px solid black">'.$row->DIKERJAKAN.'</td>
											<td style="border:1px solid black">'.$row->USULAN.'</td>
											<td style="border:1px solid black">'.$row->AREA_BAWAH.'</td>
											<td style="border:1px solid black">'.$row->DESA.'</td>';
											
												$gambar =$row->FOTO_BEFORE;
													 if (strlen($row->FOTO_BEFORE) > 0 ){
															$html.='<td><center>
																<img height="100" src="'. site_url().'upload/'.$row->$gambar.'">
															</center></td>';
													}

														$gambar2 =$row->FOTO_AFTER;
													 if (strlen($row->FOTO_AFTER) > 0 ){
															$html.='<td><center>
																<img height="100" src="'. site_url().'upload/'.$row->$gambar2.'">
															</center></td>';
													}

										$html.='</tr>';

			  			

			  				}

				  		
				

				}

				$html .='<tr>
							<td style="border:1px solid black" colspan="14">
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
							<td style="border:1px solid black" colspan="3">
								<center>
									<strong>'.$laporanhd['KABUPATEN'] .', '.tglIndonesia2($laporanhd['TANGGAL']).'</strong>
									<h2>Juru/Mantri Cimandiri</h2>
									<br/>
									<br/>
									<br/>
									<br/>
									<p style="font-weight: bold;font-size: x-large;"><u>'.$_SESSION['nama_lengkap'].'</u></p>
									<p style="margin-top: 0%;font-size: large;">NIP : '.$_SESSION['nip'] .'</p>
								</center>
											
							</td>
						</tr>';


				$html .='</tbody></table>';


$mpdf->WriteHTML($html);
$mpdf->Output();





?>



