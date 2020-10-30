<?php

$dataLamp05 = $lamp05->result();
error_reporting(0);
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

$html .='<tr>
		<th style="border:1px solid black;text-align:center" colspan="7" class="text-center">PROGRAM KERJA KONTRAKTUAL</th>
		<th style="border:1px solid black;text-align:center" class="text-center">BLANKO 05 - P</th>
		</tr>
		<tr>
			<th style="border:1px solid black;text-align:center" colspan="7" class="text-center">Tahun '. date('Y').'</th>
			<th style="border:1px solid black;text-align:center"></th>
		</tr>
		<tr>
			<th style="border:1px solid black;text-align:center" colspan="8">&nbsp;</th>
		</tr>
		<tr>
			<th style="border:1px solid black;text-align:center">DINAS/BALAI PSDA</th>
			<td style="border:1px solid black;text-align:center" style="border:1px solid black;text-align:left" colspan="7">: '. $dataLamp05[0]->BALAI.'</td>
		</tr>
		<tr>
			<th style="border:1px solid black;text-align:center" colspan="8">&nbsp;</th>
		</tr>
		<tr>
			<th style="border:1px solid black;text-align:center">NO</th>
			<th style="border:1px solid black;text-align:center">DAERAH IRIGASI</th>
			<th style="border:1px solid black;text-align:center">NAMA SALURAN DAN BANGUNAN<br/>
				LOKASI (KM)
			</th>
			<th style="border:1px solid black;text-align:center">URAIAN<br/>
				1. JENIS PEKERJAAN PEMELIHARAAN<br/>
				2. KECAMATAN & KABUPATEN/KOTA
			</th>
			<th style="border:1px solid black;text-align:center">
				BANYAKNYA PEKERJAAN<br/>
				(BH/KM)
			</th>
			<th style="border:1px solid black;text-align:center">
				BIAYA
			</th>
			<th style="border:1px solid black;text-align:center">
				JADWAL PELAKSANAAN
			</th>
			<th style="border:1px solid black;text-align:center">KETERANGAN</th>
		</tr>
		<tr>
			<th style="border:1px solid black;text-align:center">1</th>
			<th style="border:1px solid black;text-align:center">2</th>
			<th style="border:1px solid black;text-align:center">3</th>
			<th style="border:1px solid black;text-align:center">4</th>
			<th style="border:1px solid black;text-align:center">5</th>
			<th style="border:1px solid black;text-align:center">6</th>
			<th style="border:1px solid black;text-align:center">7</th>
			<th style="border:1px solid black;text-align:center">8</th>
		</tr>';

$html .='</thead>';


$html .='<tbody>';
	$TOTAL_BIAYA=0;
	$TOTAL_BANYAKNYA_PEKERJAAN=0;
	$no=0;
			  				foreach($lamp05->result() as $row):
			  				$no++;

			  				$TOTAL_BIAYA += $row->BIAYA;
			  				$TOTAL_BANYAKNYA_PEKERJAAN +=$row->BANYAKNYA_PEKERJAAN;

			  					$html .='<tr>
											<td style="border:1px solid black;text-align:center">'. $no .'</td>
											<td style="border:1px solid black;text-align:center">'. $row->DAERAH_IRIGASI .'</td>
											<td style="border:1px solid black;text-align:center">'. $row->NAMA_SALURAN .'</td>
											<td style="border:1px solid black;text-align:center">'. $row->JENIS .'<br/>
												'. $row->KABUPATEN.'</td>
											<td style="border:1px solid black;text-align:center">'. $row->BANYAKNYA_PEKERJAAN .'</td>
											<td style="border:1px solid black;text-align:center">'. number_format($row->BIAYA) .'</td>
											<td style="border:1px solid black;text-align:center"><center>'. tglIndonesia2($row->TANGGAL_AWAL) .' sd '. tglIndonesia2($row->TANGGAL_AKHIR) .'<br/><strong>';

												$tgl1 = new DateTime($row->TANGGAL_AWAL);
												$tgl2 = new DateTime($row->TANGGAL_AKHIR);
												$d = $tgl2->diff($tgl1)->days + 1;

												$hml .= $d." Hari";


												$hml .='</strong></center>
											</td>
											<td style="border:1px solid black;text-align:center">'. $row->KETERANGAN .'</td>
										</tr>';



			  				
							
						

			  				endforeach;

			  				$html .='<tr>
										<th colspan="5"></th>
										<th>'. number_format($TOTAL_BIAYA) .'</th>
										<th colspan="2"></th>
									</tr>';

									$html.='<tr>
							<td style="border:1px solid black;text-align:center" colspan="6">
								<p>Penjelasan : </p>
								<ol>
									<li>Lampiran dikirim setelah DSP (Blanko O&P disetujui</li>
									<li>Kolom 3 : Nama saluran dan bangunan yang diprioritaskan</li>
								</ol>
								<ul type="none">
									<li>*) Sesuai Kewenangannya</li>
									<li>Laporan Tahunan : Dinas Sumber Daya Air / Balai PSDA →Kabupaten/Provinsi</li>
								</ul>
							</td>
							<td style="border:1px solid black;text-align:center" colspan="2">
								<center>
									<p>'. $dataLamp05[0]->KABUPATEN .' ,'. tglIndonesia2($dataLamp05[0]->TANGGAL_KONTRAKTUAL2).'</p>
									<strong>Kepala Dinas Pengairan Kab/Balai PSDA Ws. Cisadea-Cibareno</strong>
									<br/>
									<br/>
									<br/>
									<br/>
									<p style="font-weight: bold;font-size: x-large;"><u>'. $_SESSION['nama_lengkap'].'</u></p>
									<p style="margin-top: 0%;font-size: large;">NIP : '. $_SESSION['nip'].'</p>
								</center>											
							</td>
						</tr>';

$html .='</tbody>';

$html .='</table>';


$mpdf->WriteHTML($html);
$mpdf->Output();


?>