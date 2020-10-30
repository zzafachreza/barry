<?php

$dataLamp04 = $lamp04->result();
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
$html .='<thead>';
$html .='<th style="border:1px solid black">';



$html.='<tr >
		<th style="border:1px solid black" colspan="10">PROGRAM PEKERJAAN SWAKELOLA</th>
		<th style="border:1px solid black">BLANKO 04 - P</th>
	</tr>
	<tr>
		<th style="border:1px solid black" colspan="10">Tahun '. date('Y') .'</th>
		<th style="border:1px solid black"></th>
	</tr>
	<tr>
		<th style="border:1px solid black" colspan="11">&nbsp;</th>
	</tr>
	<tr>
		<th style="border:1px solid black">DINAS/BALAI PSDA</th>
		<td style="border:1px solid black;text-align:center" colspan="10">: '. $dataLamp04[0]->BALAI .'</td>
	</tr>
	<tr>
		<th style="border:1px solid black" colspan="11">&nbsp;</th>
	</tr>
	<tr>
		<th style="border:1px solid black" rowspan="2">NO</th>
		<th style="border:1px solid black" rowspan="2">DAERAH IRIGASI</th>
		<th style="border:1px solid black" colspan="2">LOKASI</th>
		<th style="border:1px solid black" rowspan="2">URAIAN</th>
		<th style="border:1px solid black" rowspan="2">TOLAK UKUR</th>
		<th style="border:1px solid black" colspan="3">BIAYA</th>
		<th style="border:1px solid black" rowspan="2">JADWAL PELAKSANAAN</th>
		<th style="border:1px solid black" rowspan="2">KETERANGAN</th>

	</tr>
	<tr>
		<th style="border:1px solid black">NAMA SALURAN</th>
		<th style="border:1px solid black">KECAMATAN/KABUPATEN</th>
		<th style="border:1px solid black">UPAH</th>
		<th style="border:1px solid black">BAHAN</th>
		<th style="border:1px solid black">JUMLAH</th>
	</tr>
	<tr>
		<th style="border:1px solid black">1</th>
		<th style="border:1px solid black">2</th>
		<th style="border:1px solid black">3</th>
		<th style="border:1px solid black">4</th>
		<th style="border:1px solid black">5</th>
		<th style="border:1px solid black">6</th>
		<th style="border:1px solid black">7</th>
		<th style="border:1px solid black">8</th>
		<th style="border:1px solid black">9</th>
		<th style="border:1px solid black">10</th>
		<th style="border:1px solid black">11</th>
	</tr>';

$html.='</thead>';


$html .='<tbody>';

			$BIAYA = 0;
			  				$JUMLAH = 0;
			  				$BIAYA_ESTIMASI=0;
							$no=0;
			  				foreach($lamp04->result() as $row):
			  				$no++;


			  			
							if ($row->BOCORAN!=='SWAKELOLA' AND $row->RUSAK!=='SWAKELOLA' AND $row->LONGSORAN!=='SWAKELOLA' AND $row->TERSUMBAT!=='SWAKELOLA' AND $row->RETAK!=='SWAKELOLA' AND $row->PINTU_RUSAK!=='SWAKELOLA' AND $row->SEDIMEN!=='SWAKELOLA') {
								
			  				}else{
			  				
			  					
								$BIAYA_ESTIMASI +=$row->JUMLAH;
								$html.='<tr>';
								$html.='<td style="border:1px solid black;text-align:center">'. $no .'</td>
								<td style="border:1px solid black;text-align:center">'. $row->DAERAH_IRIGASI .'</td>
								<td style="border:1px solid black;text-align:center">'. $row->nama_bangunan .'<br/>'. $row->nama_ruas .'</td>
								<td style="border:1px solid black;text-align:center">'. $row->DESA .'<br/>'. $row->KABUPATEN .'</td>';

								$html .='<td style="border:1px solid black;text-align:center">';

								if ($row->BOCORAN==='SWAKELOLA' AND $row->BOCORAN_M > 0) {
										$html .="BOCORAN";
										$JUMLAH += $row->BOCORAN_B;

									}else{
									
										$html .="";
									}

								

									if ($row->RUSAK==='SWAKELOLA' AND $row->RUSAK_M > 0) {
										$html .= "<br/>";
										$html .= "RUSAK";
										$JUMLAH += $row->RUSAK_B;
									}else{
										$html .= "";
									}

								

									if ($row->LONGSORAN==='SWAKELOLA' AND $row->LONGSORAN_M > 0) {
										$html .= "<br/>";
										$html .= "LONGSORAN";
										$JUMLAH += $row->LONGSORAN_B;
									}else{
										$html .= "";
									}

									if ($row->TERSUMBAT==='SWAKELOLA' AND $row->TERSUMBAT_M > 0) {
										$html .= "<br/>";
										$html .= "TERSUMBAT";
										$JUMLAH += $row->TERSUMBAT_B;
									}else{
										$html .= "";
									}

									if ($row->RETAK==='SWAKELOLA' AND $row->RETAK_M > 0) {
										$html .= "<br/>";
										$html .= "RETAK";
										$JUMLAH += $row->RETAK_B;
									}else{
										$html .= "";
									}

									if ($row->PINTU_RUSAK==='SWAKELOLA' AND $row->PINTU_RUSAK_M > 0) {
										$html .= "<br/>";
										$html .= "PINTU_RUSAK";
										$JUMLAH += $row->PINTU_RUSAK_B;
									}else{
										$html .= "";
									}

									if ($row->SEDIMEN==='SWAKELOLA' AND $row->SEDIMEN_M > 0) {
										$html .= "<br/>";
										$html .= "SEDIMEN";
										$JUMLAH += $row->SEDIMEN_B;
									}else{
										$html .= "";
									}

									$BIAYA +=$JUMLAH;

									$html .='</td>';

									$html .='<td style="border:1px solid black;text-align:center">';


										if ($row->BOCORAN==='SWAKELOLA' AND $row->BOCORAN_M > 0) {
											$html.= $row->BOCORAN_M;
										}else{
											$html.= "";
										}

									

										if ($row->RUSAK==='SWAKELOLA' AND $row->RUSAK_M > 0) {
											$html.= "<br/>";
											$html.= $row->RUSAK_M;
										}else{
											$html.= "";
										}

									

										if ($row->LONGSORAN==='SWAKELOLA' AND $row->LONGSORAN_M > 0) {
											$html.= "<br/>";
											$html.= $row->LONGSORAN_M;
										}else{
											$html.= "";
										}

										if ($row->TERSUMBAT==='SWAKELOLA' AND $row->TERSUMBAT_M > 0) {
											$html.= "<br/>";
											$html.= $row->TERSUMBAT_M;
										}else{
											$html.= "";
										}

										if ($row->RETAK==='SWAKELOLA' AND $row->RETAK_M > 0) {
											$html.= "<br/>";
											$html.= $row->RETAK_M;
										}else{
											$html.= "";
										}

										if ($row->PINTU_RUSAK==='SWAKELOLA' AND $row->PINTU_RUSAK_M > 0) {
											$html.= "<br/>";
											$html.= $row->PINTU_RUSAK_M;
										}else{
											$html.= "";
										}

										if ($row->SEDIMEN==='SWAKELOLA' AND $row->SEDIMEN_M > 0) {
											$html.= "<br/>";
											$html.= $row->SEDIMEN_M;
										}else{
											$html.= "";
										}

									$html .='</td>';


									$html .='<td style="border:1px solid black;text-align:center">'.number_format($row->UPAH) .'</td>
									<td style="border:1px solid black;text-align:center">'. number_format($row->BAHAN) .'</td>
									<td style="border:1px solid black;text-align:center">'. number_format($row->JUMLAH).'</td>
									<td style="border:1px solid black;text-align:center"><center>'.tglIndonesia2($row->TANGGAL_AWAL) .' s/d '.tglIndonesia2($row->TANGGAL_AKHIR).'<br/><strong>'; 

										$tgl1 = new DateTime($row->TANGGAL_AWAL);
										$tgl2 = new DateTime($row->TANGGAL_AKHIR);
										$d = $tgl2->diff($tgl1)->days + 1;

										$html.= $d." Hari";


									$html.='</strong></center></td>
									<td style="border:1px solid black;text-align:center">'. $row->KETERANGAN .'</td>';

								$html.='</tr>';

			  					
			  				}


			  				endforeach;


			  				$html.='<tr>
										<th style="border:1px solid black;text-align:center" colspan="8"></th>
										<th style="border:1px solid black;text-align:center">'.number_format($BIAYA_ESTIMASI).'</th>
										<th style="border:1px solid black;text-align:center" colspan="2"></th>
									</tr>';

							$html .='<tr>
									<td colspan="8">
										<p>Penjelasan : </p>
										<ol>
											<li>Lampiran dikirim setiap akhir bulan Januari Tahun Anggaran ybs</li>
											<li>Kolom 9 : Bila pelaksanaan dalam satu tahun lebih dari satu kali agar disebut semuanya</li>
										</ol>
										<ul type="none">
											<li>*) Sesuai Kewenangannya</li>
											<li>Laporan Tahunan : Dinas Sumber Daya Air / Balai PSDA →Kabupaten/Provinsi</li>
										</ul>
									</td>
									<td colspan="3">
										<center>
											<p>'. $dataLamp04[0]->KABUPATEN .' ,'.tglIndonesia2($dataLamp04[0]->TANGGAL_SWAKELOLA) .'</p>
											<strong>Kepala Dinas Pengairan Kab/Kota /Kepala Balai PSDA</strong>
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


?>