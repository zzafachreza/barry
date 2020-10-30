<?php

$dataLamp052 = $lamp052->result();
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
			<td style="border:1px solid black;text-align:left" colspan="7">: '. $dataLamp052[0]->BALAI.'</td>
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

		$BIAYA=0;
	$TOTAL_BANYAKNYA_PEKERJAAN=0;
				  				$ESTIMASI_PERBAIKAN=0;
			  			
		$no=0;
			  				foreach($lamp052->result() as $row):
			  				$no++;



			  				if ($row->BOCORAN!=='KONTRAKTUAL' AND $row->RUSAK!=='KONTRAKTUAL' AND $row->LONGSORAN!=='KONTRAKTUAL' AND $row->TERSUMBAT!=='KONTRAKTUAL' AND $row->RETAK!=='KONTRAKTUAL' AND $row->PINTU_RUSAK!=='KONTRAKTUAL' AND $row->SEDIMEN!=='KONTRAKTUAL') {
			  				
			  				}else{
			  				
							
							$html .='<tr>';

			  					$html .='<td style="border:1px solid black;text-align:center">'. $no .'</td>
											<td style="border:1px solid black;text-align:center">'. $row->DAERAH_IRIGASI .'</td>
											<td style="border:1px solid black;text-align:center">'. $row->nama_bangunan .'<br/>
												'. $row->nama_ruas .'</td>
											<td style="border:1px solid black;text-align:left">';


												if ($row->BOCORAN==='KONTRAKTUAL' AND $row->BOCORAN_M > 0) {
													$html.= "BOCORAN";
												}else{
													$html.= "";
												}

											

												if ($row->RUSAK==='KONTRAKTUAL' AND $row->RUSAK_M > 0) {
													$html.= "<br/>";
													$html.= "RUSAK";
												}else{
													$html.= "";
												}

											

												if ($row->LONGSORAN==='KONTRAKTUAL' AND $row->LONGSORAN_M > 0) {
													$html.= "<br/>";
													$html.= "LONGSORAN";
												}else{
													$html.= "";
												}

												if ($row->TERSUMBAT==='KONTRAKTUAL' AND $row->TERSUMBAT_M > 0) {
													$html.= "<br/>";
													$html.= "TERSUMBAT";
												}else{
													$html.= "";
												}

												if ($row->RETAK==='KONTRAKTUAL' AND $row->RETAK_M > 0) {
													$html.= "<br/>";
													$html.= "RETAK";
												}else{
													$html.= "";
												}

												if ($row->PINTU_RUSAK==='KONTRAKTUAL' AND $row->PINTU_RUSAK_M > 0) {
													$html.= "<br/>";
													$html.= "PINTU_RUSAK";
												}else{
													$html.= "";
												}

												if ($row->SEDIMEN==='KONTRAKTUAL' AND $row->SEDIMEN_M > 0) {
													$html.= "<br/>";
													$html.= "SEDIMEN";
												}else{
													$html.= "";
												}

												$html .='<hr/>';

												$html.= $row->DESA;
												$html.=' - ';
												$html.= $row->KABUPATEN;

											$html.='</td>';

											$html.='<td style="border:1px solid black;text-align:center">';
										


												if ($row->BOCORAN==='KONTRAKTUAL' AND $row->BOCORAN_M > 0) {
													$html.= $row->BOCORAN_M;

													$ESTIMASI_PERBAIKAN += $row->BOCORAN_B;
												}else{
													$html.= "";
												}

											

												if ($row->RUSAK==='KONTRAKTUAL' AND $row->RUSAK_M > 0) {
													$html.= "<br/>";
													$html.= $row->RUSAK_M;
													$ESTIMASI_PERBAIKAN += $row->RUSAK_B;
												}else{
													$html.= "";
												}

											

												if ($row->LONGSORAN==='KONTRAKTUAL' AND $row->LONGSORAN_M > 0) {
													$html.= "<br/>";
													$html.= $row->LONGSORAN_M;
													$ESTIMASI_PERBAIKAN += $row->LONGSORAN_B;
												}else{
													$html.= "";
												}

												if ($row->TERSUMBAT==='KONTRAKTUAL' AND $row->TERSUMBAT_M > 0) {
													$html.= "<br/>";
													$html.= $row->TERSUMBAT_M;
													$ESTIMASI_PERBAIKAN += $row->TERSUMBAT_B;
												}else{
													$html.= "";
												}

												if ($row->RETAK==='KONTRAKTUAL' AND $row->RETAK_M > 0) {
													$html.= "<br/>";
													$html.= $row->RETAK_M;
													$ESTIMASI_PERBAIKAN += $row->RETAK_B;
												}else{
													$html.= "";
												}

												if ($row->PINTU_RUSAK==='KONTRAKTUAL' AND $row->PINTU_RUSAK_M > 0) {
													$html.= "<br/>";
													$html.= $row->PINTU_RUSAK_M;
													$ESTIMASI_PERBAIKAN += $row->PINTU_RUSAK_B;
												}else{
													$html.= "";
												}

												if ($row->SEDIMEN==='KONTRAKTUAL' AND $row->SEDIMEN_M > 0) {
													$html.= "<br/>";
													$html.= $row->SEDIMEN_M;
													$ESTIMASI_PERBAIKAN += $row->SEDIMEN_B;
												}else{
													$html.= "";
												}

										    
										    $BIAYA += $ESTIMASI_PERBAIKAN;

										
											$html.='</td>';

											$html.='<td style="border:1px solid black;text-align:center">'.number_format($ESTIMASI_PERBAIKAN).'</td>';

											$html.='</td>'. number_format($ESTIMASI_PERBAIKAN).'</td>
											<td style="border:1px solid black;text-align:center"><center>'. tglIndonesia2($row->TANGGAL_AWAL).' s/d '. tglIndonesia2($row->TANGGAL_AKHIR) .'<br/><strong>';

												$tgl1 = new DateTime($row->TANGGAL_AWAL);
												$tgl2 = new DateTime($row->TANGGAL_AKHIR);
												$d = $tgl2->diff($tgl1)->days + 1;

												$html.= $d." Hari";


												$html.='</strong></center>
											</td>
											<td style="border:1px solid black;text-align:center">'. $row->KETERANGAN .'</td>
										</tr>';
												  		

			  				

			  				}

			  				endforeach;

			  				$html .='<tr>
										<th colspan="5"></th>
										<th>'. number_format($BIAYA) .'</th>
										<th colspan="2"></th>
									</tr>';

									$html.='<tr>
							<td colspan="6">
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
							<td colspan="2">
								<center>
									<p>'. $dataLamp052[0]->KABUPATEN .' ,'. tglIndonesia2($dataLamp052[0]->TANGGAL_KONTRAKTUAL2).'</p>
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