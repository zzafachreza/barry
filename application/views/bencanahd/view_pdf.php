<?php

// header("Content-type: application/octet-stream");
// header("Content-Disposition: attachment; filename=LAPORAN.xls");//ganti nama sesuai keperluan
// header("Pragma: no-cache");
// header("Expires: 0");
$mpdf = new \Mpdf\Mpdf(['format' => 'Legal-L']);

function tglIndonesia2($tanggal){
  $namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
           "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
           
  $tgl=substr($tanggal,8,2);
  $bln=substr($tanggal,5,2);
  $thn=substr($tanggal,0,4);
  $tanggal ="$tgl ".$namaBln[$bln]." $thn";
  return $tanggal;
}

$html = '<table style="width: 100%" style="font-size: x-small;border:1px solid;border-collapse: collapse">';
$html .='<thead>';

$html.='<tr>
			<th style="border:1px solid black;font-size:x-small" colspan="13" border="0">
		              		<center>
									<h1>LAPORAN KERUSAKAN AKIBAT BENCANA ALAM</h1>
									
									
									<h3>Tanggal Kejadian '. tglIndonesia2($bencanahd['TANGGAL'])  .'</h2>
								</center>
								</th>
							<th style="border:1px solid black;font-size:x-small" colspan="3" border="0">
			              			<center>
										<h2>Blanko 03 - P</h2>
									</center>
							</th>
		            </tr>
		            <tr>
		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="4">DAERAH IRIGASI</th>
		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="7">: '. $bencanahd['DAERAH_IRIGASI'] .'</th>

		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="2">KABUPATEN</th>
		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="3">: '. $bencanahd['KABUPATEN'] .'</th>
		            </tr>
		             <tr>
		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="4">TOTAL LUAS AREAL DI</th>
		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="7">: '. $bencanahd['LUAS_AREA_IRIGASI'] .' Ha</th>

		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="2">PENGAMAT/RANTING</th>
		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="3">: '. $bencanahd['RANTING'] .'</th>
		            </tr>
		             <tr>
		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="4">TINGKATAN DI : T / ST / SD</th>
		            	<th style="border:1px solid black;font-size:x-small" border="0" colspan="12">: '. $bencanahd['TINGKATAN_IRIGASI'] .'</th>
		            </tr>
		            <tr>
		            	<th style="border:1px solid black;font-size:x-small" colspan="16">
		            		&nbsp;
		            	</th>
		            </tr>
		            <tr>
		            	<th style="border:1px solid black;font-size:x-small" rowspan="3">NO</th>
						<th style="border:1px solid black;font-size:x-small" rowspan="3">NAMA SALURAN /
						BANGUNAN DAN LOKASI
						Hm, DESA DAN KECAMATAN
						</th>
						<th style="border:1px solid black;font-size:x-small" rowspan="3">PENYEBAB KERUSAKAN</th>
						<th style="border:1px solid black;font-size:x-small" rowspan="3">JENIS KERUSAKAN</th>
						<th style="border:1px solid black;font-size:x-small" colspan="7">PERINCIAN KERUSAKAN</th>
						<th style="border:1px solid black;font-size:x-small" colspan="2">TANGGAP DARURAT</th>
						<th style="border:1px solid black;font-size:x-small" colspan="2">PERBAIKAN YANG DIPERLUKAN</th>
						<th style="border:1px solid black;font-size:x-small"></th>
				
		            </tr>
					<tr>	
						
						<th style="border:1px solid black;font-size:x-small" rowspan="2">TANAH (M)</th>
						<th style="border:1px solid black;font-size:x-small" colspan="2">PASANGAN</th>
						<th style="border:1px solid black;font-size:x-small"  rowspan="2">PINTU_AIR (B/BH)</th>
						<th style="border:1px solid black;font-size:x-small"  rowspan="2">GORONG_GORONG (D/L)</th>
						<th style="border:1px solid black;font-size:x-small"  rowspan="2">LAIN - LAIN</th>
						<th style="border:1px solid black;font-size:x-small"  rowspan="2">LUAS TERANCAM DIBAWAHNYA (Ha)</th>
						<th style="border:1px solid black;font-size:x-small"  rowspan="2">TINDAKAN PERBAIKAN YANG TELAH DIKERJAKAN</th>
						<th style="border:1px solid black;font-size:x-small"  rowspan="2">BIAYA_PERBAIKAN</th>
						<th style="border:1px solid black;font-size:x-small"  rowspan="2">YANG AKAN DIKERJAKAN OLEH IP3A/GP3A DAN PEKARYA</th>
						<th style="border:1px solid black;font-size:x-small"  rowspan="2">YANG DIUSULKAN UNTUK DIKERJAKAN DI TINGKAT YANG LEBIH ATAS</th>
						<th style="border:1px solid black;font-size:x-small"  rowspan="2">FOTO</th>
					</tr>
					<tr>
						<th style="border:1px solid black;font-size:x-small">BATU (M³)</th>
						<th style="border:1px solid black;font-size:x-small">BETON (M³)</th>
					</tr>
					<tr style="text-align: center;">
						<th style="border:1px solid black;font-size:x-small">1</th>
						<th style="border:1px solid black;font-size:x-small">2</th>
						<th style="border:1px solid black;font-size:x-small">3</th>
						<th style="border:1px solid black;font-size:x-small">4</th>
						<th style="border:1px solid black;font-size:x-small">5</th>
						<th style="border:1px solid black;font-size:x-small">6</th>
						<th style="border:1px solid black;font-size:x-small">7</th>
						<th style="border:1px solid black;font-size:x-small">8</th>
						<th style="border:1px solid black;font-size:x-small">9</th>
						<th style="border:1px solid black;font-size:x-small">10</th>
						<th style="border:1px solid black;font-size:x-small">11</th>
						<th style="border:1px solid black;font-size:x-small">12</th>
						<th style="border:1px solid black;font-size:x-small">13</th>
						<th style="border:1px solid black;font-size:x-small">14</th>
						<th style="border:1px solid black;font-size:x-small">15</th>
						<th style="border:1px solid black;font-size:x-small">16</th>
					</tr>';



$html .='</thead>';
$html .='<tbody>';


							$no=0;
			  				$TOTAL_BIAYA_PERBAIKAN=0;
			  				foreach($bencanadt->result() as $row):
			  				$no++;
			  				$TOTAL_BIAYA_PERBAIKAN += $row->BIAYA_PERBAIKAN;

			  			$html.='<tr>
				  			<td style="border:1px solid black;font-size:x-small">'. $no .'</td>
				  			<td style="border:1px solid black;font-size:x-small">'. str_replace("\n", "<br/>", $row->NAMA_SALURAN).'</td>
				  			<td style="border:1px solid black;font-size:x-small">
				  				'. str_replace("\n", "<br/>", $row->PENYEBAB_KERUSAKAN).'
				  			</td>
				  			<td style="border:1px solid black;font-size:x-small">
				  				'. str_replace("\n", "<br/>", $row->JENIS_KERUSAKAN).'
				  			</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->TANAH .'<br/>
								<strong> '. number_format($row->TANAH_B) .' </strong>
							</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->BATU .'<br/>
								<strong> '. number_format($row->BATU_B) .' </strong>
							</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->BETON .'<br/>
								<strong> '. number_format($row->BETON_B) .' </strong>
							</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->PINTU_AIR .'<br/>
								<strong> '. number_format($row->PINTU_AIR_B) .' </strong>
							</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->GORONG_GORONG .'<br/>
								<strong> '. number_format($row->GORONG_GORONG_B) .' </strong>
							</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->LAIN_LAIN_KERUSAKAN .'<br/>
								<strong> '. number_format($row->LAIN_LAIN_KERUSAKAN_B) .' </strong>
							</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->LUAS_TERANCAM .'<br/>
								<strong> '. number_format($row->LUAS_TERANCAM_B) .' </strong>
							</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->TINDAKAN_PERBAIKAN .'</td>
							<td style="border:1px solid black;font-size:x-small">'. number_format($row->BIAYA_PERBAIKAN) .'</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->DIKERJAKAN_OLEH .'</td>
							<td style="border:1px solid black;font-size:x-small">'. $row->DIUSULKAN_OLEH .'</td>';

								 $gambar =$row->FOTO_BENCANA;

								 if (strlen($row->FOTO_BENCANA) > 0 ){
									
									$html.='<td style="border:1px solid black;font-size:x-small"><center>
										<img height="100" src="'. site_url().'upload/'.$row->$gambar.'">
									</center></td>';

								}


						
							
								
				  			$html.='</tr>';




			  				endforeach; 


			  				$html.='<tr style="text-align: center;">
							<td style="border:1px solid black;font-size:x-small" colspan="12">Total</td>
							<td style="border:1px solid black;font-size:x-small">'.number_format($TOTAL_BIAYA_PERBAIKAN) .' </td>
							<td style="border:1px solid black;font-size:x-small" colspan="3"></td>
						</tr>';




$html .= '<tr>
			<td colspan="13">
			<p>Penjelasan : </p>
			<ol>
				<li>Kolom 8 : b lebar pintu (m) ; jumlah (bh)</li>
				<li>Kolom 9 : d diameter (m), panjang (m)</li>
				<li>Kolom 12 dan 13 keterangan diisi jenis perkiraan kerugian dan perbaikannya</li>
				<li>Perlu dilampiri gambar sketsa<br/>
				Dicatat di Buku Catatan Pemeliharaan CD/CS/UPT/Pengamat Pengairan/SUP<br/><br/><br/>
					<strong><i>Laporan bulanan : Ranting/Pengamat/UPTD/SUP→ Dinas Pengairan Kabupaten/Balai PSDA</i></strong></li>
			</ol>
			
			</td>
				<td colspan="3">
					<center>
						<h6>'.$bencanahd['KABUPATEN'].', '.tglIndonesia2($bencanahd['TANGGAL']).'<br/>
							Pengamat/Ranting/UPTD/SUP<br/><br/><br/><br/><br/><br/></h6>
						<p style="margin-top: 40%;font-weight: bold;font-size: x-large;"><u>'.$_SESSION['nama_lengkap'] .'</u></p>
					</center>
								<p style="margin-top: 0%;font-size: large;">NIP : '.$_SESSION['nip'] .'</p>
				</td>
		    </tr>';
$html .='</tbody></table>';


$mpdf->WriteHTML($html);
$mpdf->Output();
