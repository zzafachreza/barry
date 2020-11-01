<?php


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

$html = '<table style="width: 100%" style="font-size: small;border:1px solid;border-collapse: collapse">';
$html .='<th style="border:1px solid black;text-align:center"ead>';
	
$html.='<tr class="text-center">
		<th style="border:1px solid black;text-align:center" rowspan="4">DINAS/BALAI<br/>KAB/KOTA<br/>'. $bencanahd['KABUPATEN'] .'</th>
		<th style="border:1px solid black;text-align:center" colspan="8">LAPORAN : HASIL PENGUKURAN DESAIN PEKERJAAN</th>
		<th style="border:1px solid black;text-align:center">LAPORAN</th>
		<td>: TAHUNAN</td>

		
	</tr>
	<tr class="text-center">
		<th style="border:1px solid black;text-align:center" colspan="8">PEMELIHARAAN JARINGAN DAN SARANA IRIGASI	</th>
		<th style="border:1px solid black;text-align:center">FORMULIR</th>
		<td>: 06 - P</td>
	</tr>
	<tr class="text-center">
		<th style="border:1px solid black;text-align:center" colspan="8"></th>
		<th style="border:1px solid black;text-align:center">DINAS</th>
		<td>&#8594; PROVINSI/SATKER</td>
	</tr class="text-center">
	<tr class="text-center">
		<th style="border:1px solid black;text-align:center" colspan="8"></th>
		<th style="border:1px solid black;text-align:center">BALAI</th>
		<td>&#8594; PROVINSI/SATKER</td>
	</tr>
	<tr class="text-center">
		<th style="border:1px solid black;text-align:center" rowspan="2">NO</th>
		<th style="border:1px solid black;text-align:center" rowspan="2">DAERAH IRIGASI</th>
		<th style="border:1px solid black;text-align:center" rowspan="2">SALURAN/BANGUNAN RENCANA</th>
		<th style="border:1px solid black;text-align:center" rowspan="2">TOLAK UKUR BH/KM</th>
		<th style="border:1px solid black;text-align:center" rowspan="2">TANGGAL SELESAI RENC. TEKNIK</th>
		<th style="border:1px solid black;text-align:center" colspan="3">PEKERJAAN UTAMA</th>
		<th style="border:1px solid black;text-align:center" rowspan="2">ANGGARAN BIAYA</th>
		<th style="border:1px solid black;text-align:center" rowspan="2">RENCANA PELAKSANAAN</th>
		<th style="border:1px solid black;text-align:center" rowspan="2">KETERANGAN</th>
	</tr>
	<tr class="text-center">
		
		<th style="border:1px solid black;text-align:center">JENIS</th>
		<th style="border:1px solid black;text-align:center">SATUAN</th>
		<th style="border:1px solid black;text-align:center">VOLUME</th>
		
	</tr>
	
	<tr class="text-center">
		<th style="border:1px solid black;text-align:center">1</th>
		<th style="border:1px solid black;text-align:center">2</th>
		<th style="border:1px solid black;text-align:center">3</th>
		<th style="border:1px solid black;text-align:center">4</th>
		<th style="border:1px solid black;text-align:center">5</th>
		<th style="border:1px solid black;text-align:center">6</th>
		<th style="border:1px solid black;text-align:center">7</th>
		<th style="border:1px solid black;text-align:center">8</th>
		<th style="border:1px solid black;text-align:center">9</th>
		<th style="border:1px solid black;text-align:center">10</th>
		<th style="border:1px solid black;text-align:center">11</th>
	</tr>';
$html .='</thead>';

$html .='<tbody>';


							$TOTAL =0;
							$no=0;
			  				foreach($data->result() as $row):
			  				$no++;
			  				$TOTAL +=$row->BIAYA_PERBAIKAN;


			  				$html .='<tr>
			  				<td style="border:1px solid black;text-align:center">'. $no .'</td>
							<td style="border:1px solid black;text-align:center">'. $row->DAERAH_IRIGASI.'</td>
							<td style="border:1px solid black;text-align:center">'. $row->NAMA_SALURAN .'</td>
							<td style="border:1px solid black;text-align:center">'. $row->TOLAK_UKUR .'</td>
							<td style="border:1px solid black;text-align:center">'. tglIndonesia2($row->TANGGAL_SELESAI) .'</td>
							<td style="border:1px solid black;text-align:center">'. $row->JENIS_KERUSAKAN .'</td>
							<td style="border:1px solid black;text-align:center">'. $row->SATUAN .'</td>
							<td style="border:1px solid black;text-align:center">'. $row->VOLUME .'</td>
							<td style="border:1px solid black;text-align:center">'. number_format($row->BIAYA_PERBAIKAN) .'</td>
							<td style="border:1px solid black;text-align:center">'. $row->RENCANA .'</td>
							<td style="border:1px solid black;text-align:center">'. $row->KETERANGAN .'</td></tr>';


			  				endforeach;


			  				$html .='<tr>
										<td style="border:1px solid black;text-align:center" colspan="8"></td>
										<th style="border:1px solid black;text-align:center">'.number_format($TOTAL).'</th>
										<td style="border:1px solid black;text-align:center" colspan="2"></td>
									</tr>';


									$html .='<tr>
											<td colspan="9">
												<p>Penjelasan : </p>
												<ul type="none">
													<li>-</li>
												</ul>
												
													<p>*) Harga satuan yang dipakai adalah harga satuan pada keadaan harga akhir triwulan tahun ybs</p>
													<p>**)&nbsp;&nbsp;a. Diborongkan<br/>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														b. Swakelola Dinas<br/>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														c. Swakelola P3A/GP3A<br/>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														d. Partisipatif P3A/GP3A<br/>
													</p>
													
											</td>
											<td colspan="2">
												<center>
													<strong>Kepala Dinas Pengairan Kab/Balai PSDA Ws. Cisadea-Cibareno</strong>
													<br/>
													<br/>
													<br/>
													<br/>
													<p style="font-weight: bold;font-size: x-large;"><u>'. $_SESSION['nama_lengkap'].'</u></p>
													<p style="margin-top: 0%;font-size: large;">NIP : '. $_SESSION['nip'] .'</p>
												</center>
											</td>
										</tr>';

$html .='</tbody>';

$html .='</table>';



$mpdf->WriteHTML($html);
$mpdf->Output();

$mpdf->WriteHTML($html);
$mpdf->Output();


?>