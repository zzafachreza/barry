<?php

class Bencanahd_model extends CI_Model{

	function tglSql($tgl){
		$tgl = explode("/", $tgl);
		return $tgl[2]."-".$tgl[1]."-".$tgl[0];
	}


	function getData(){
		// $sql ="describe data_laporandt";
		$sql ="SELECT * FROM data_bencanahd";

		$data = $this->db->query($sql);
		return $data;
	}

	 function insert($ID_LAPORANHD,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING){


	 $sql ="INSERT INTO data_bencanahd(ID_LAPORANHD,TANGGAL,DAERAH_IRIGASI,LUAS_AREA_IRIGASI,TINGKATAN_IRIGASI,KABUPATEN,RANTING,STATUS_LAPORANHD) values('$ID_LAPORANHD','$TANGGAL','$DAERAH_IRIGASI','$LUAS_AREA_IRIGASI','$TINGKATAN_IRIGASI','$KABUPATEN','$RANTING','OPEN')";

	 $this->db->query($sql);	
	}


	 function insert_detail($ID_LAPORANHD,$NAMA_SALURAN,$PENYEBAB_KERUSAKAN,$JENIS_KERUSAKAN,$TANAH,$BATU,$BETON,$PINTU_AIR,$GORONG_GORONG,$LAIN_LAIN_KERUSAKAN,$LUAS_TERANCAM,$TINDAKAN_PERBAIKAN,$BIAYA_PERBAIKAN,$DIKERJAKAN_OLEH,$DIUSULKAN_OLEH,$FOTO_BENCANA,$VALUEFOTO_BENCANA1,$VALUEFOTO_BENCANA2,$VALUEFOTO_BENCANA3,$VALUEFOTO_BENCANA4,$VALUEFOTO_BENCANA5){


	 $sql ="INSERT INTO data_bencanadt(ID_LAPORANHD,NAMA_SALURAN,PENYEBAB_KERUSAKAN,JENIS_KERUSAKAN,TANAH,BATU,BETON,PINTU_AIR,GORONG_GORONG,LAIN_LAIN_KERUSAKAN,LUAS_TERANCAM,TINDAKAN_PERBAIKAN,BIAYA_PERBAIKAN,DIKERJAKAN_OLEH,DIUSULKAN_OLEH,FOTO_BENCANA,FOTO_BENCANA1,FOTO_BENCANA2,FOTO_BENCANA3,FOTO_BENCANA4,FOTO_BENCANA5) VALUES('$ID_LAPORANHD','$NAMA_SALURAN','$PENYEBAB_KERUSAKAN','$JENIS_KERUSAKAN','$TANAH','$BATU','$BETON','$PINTU_AIR','$GORONG_GORONG','$LAIN_LAIN_KERUSAKAN','$LUAS_TERANCAM','$TINDAKAN_PERBAIKAN','$BIAYA_PERBAIKAN','$DIKERJAKAN_OLEH','$DIUSULKAN_OLEH','$FOTO_BENCANA','$VALUEFOTO_BENCANA1','$VALUEFOTO_BENCANA2','$VALUEFOTO_BENCANA3','$VALUEFOTO_BENCANA4','$VALUEFOTO_BENCANA5');";

	 $this->db->query($sql);	
	}


		function getId($id){
		$sql = "SELECT * FROM data_bencanahd WHERE  ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function update($id,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING){

	
    $sql= "UPDATE data_bencanahd SET TANGGAL='$TANGGAL',DAERAH_IRIGASI='$DAERAH_IRIGASI',LUAS_AREA_IRIGASI='$LUAS_AREA_IRIGASI',TINGKATAN_IRIGASI='$TINGKATAN_IRIGASI',KABUPATEN='$KABUPATEN',RANTING='$RANTING'  WHERE ID_LAPORANHD='$id'";
		$this->db->query($sql);	
	}

	function getDataDetail($id){
		$sql="SELECT*FROM `data_bencanadt` INNER JOIN `data_bencanahd` ON (`data_bencanahd`.`ID_LAPORANHD` = `data_bencanadt`.`ID_LAPORANHD`) WHERE data_bencanadt.ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}


	function getDataDetail05($id){
		$sql="SELECT*FROM data_kontraktual WHERE ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function getDataDetail04($id){
		$sql="SELECT *
FROM
    `data_swakelola`
    INNER JOIN `data_laporandt` 
        ON (`data_swakelola`.`ID_LAPORANHD` = `data_laporandt`.`ID_LAPORANHD`) AND (`data_swakelola`.`ID_LAPORANDT` = `data_laporandt`.`ID_LAPORANDT`)
    INNER JOIN `data_laporanhd` 
        ON (`data_laporandt`.`ID_LAPORANHD` = `data_laporanhd`.`ID_LAPORANHD`)
    INNER JOIN `data_bangunan` 
        ON (`data_laporandt`.`ID_BANGUNAN` = `data_bangunan`.`id_bangunan`)
    INNER JOIN `data_ruas` 
        ON (`data_bangunan`.`id_ruas` = `data_ruas`.`id_ruas`) WHERE data_swakelola.ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}


		function getDataDetail052($id){
		$sql="SELECT *
FROM
    `data_kontraktual2`
    INNER JOIN `data_laporandt` 
        ON (`data_kontraktual2`.`ID_LAPORANHD` = `data_laporandt`.`ID_LAPORANHD`) AND (`data_kontraktual2`.`ID_LAPORANDT` = `data_laporandt`.`ID_LAPORANDT`)
    INNER JOIN `data_laporanhd` 
        ON (`data_laporandt`.`ID_LAPORANHD` = `data_laporanhd`.`ID_LAPORANHD`)
    INNER JOIN `data_bangunan` 
        ON (`data_laporandt`.`ID_BANGUNAN` = `data_bangunan`.`id_bangunan`)
    INNER JOIN `data_ruas` 
        ON (`data_bangunan`.`id_ruas` = `data_ruas`.`id_ruas`) WHERE data_kontraktual2.ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}


	function hapus_detail($ID_LAPORANHD,$ID_LAPORANDT){

		 

	 //    $sqlFoto = "SELECT * FROM data_bencanadt WHERE ID_LAPORANHD='$ID_LAPORANHD' AND ID_LAPORANDT='$ID_LAPORANDT'";
		// $data = $this->db->query($sqlFoto)->result();
		// $FOTO_BENCANA1 =  'upload/'.$data[0]->FOTO_BENCANA1;
		// unlink($FOTO_BENCANA1);
		// 	$FOTO_BENCANA2 =  'upload/'.$data[0]->FOTO_BENCANA2;
		// 	unlink($FOTO_BENCANA2);
		// 		$FOTO_BENCANA3 =  'upload/'.$data[0]->FOTO_BENCANA3;
		// 		unlink($FOTO_BENCANA3);
		// 			$FOTO_BENCANA4 =  'upload/'.$data[0]->FOTO_BENCANA4;
		// 			unlink($FOTO_BENCANA4);
		// 				$FOTO_BENCANA5 =  'upload/'.$data[0]->FOTO_BENCANA5;
		// 				unlink($FOTO_BENCANA5);

		$sql="DELETE FROM data_bencanadt WHERE ID_LAPORANHD='$ID_LAPORANHD' AND ID_LAPORANDT='$ID_LAPORANDT'";
		 $this->db->query($sql);
	
	}

	function update_lampiran6($ID_LAPORANDT,$KOLOM,$VALUES){
		 $sql="UPDATE data_bencanadt SET $KOLOM='$VALUES' WHERE ID_LAPORANDT='$ID_LAPORANDT'";
		$this->db->query($sql);
	}

	function update_lampiran4($ID_SWAKELOLA,$KOLOM,$VALUES){
		if($KOLOM==='UPAH'){

		 $sql="UPDATE data_swakelola SET $KOLOM='$VALUES',JUMLAH=$VALUES+BAHAN WHERE ID_SWAKELOLA='$ID_SWAKELOLA'";
	
		}
		elseif($KOLOM==='BAHAN'){

		 $sql="UPDATE data_swakelola SET $KOLOM='$VALUES',JUMLAH=$VALUES+UPAH WHERE ID_SWAKELOLA='$ID_SWAKELOLA'";
	
		}
		elseif ($KOLOM==='BALAI') {
			# code...
			$sql="UPDATE data_swakelola SET $KOLOM='$VALUES' WHERE ID_LAPORANHD='$ID_SWAKELOLA'";
		}else{
			$sql="UPDATE data_swakelola SET $KOLOM='$VALUES' WHERE ID_SWAKELOLA='$ID_SWAKELOLA'";
		}
		$this->db->query($sql);
	}


	function add_05($ID_LAPORANHD){

		$sql2= "UPDATE data_bencanahd SET STATUS_LAPORANHD='DONE' WHERE ID_LAPORANHD='$ID_LAPORANHD'";

		$sql="INSERT INTO data_kontraktual
            (`ID_LAPORANHD`,
             `DAERAH_IRIGASI`,
             `NAMA_SALURAN`,
             `JENIS`,
             `KABUPATEN`,
             `BIAYA`,
             `KETERANGAN`,`TANGGAL_KONTRAKTUAL`)
				SELECT data_bencanadt.ID_LAPORANHD,DAERAH_IRIGASI,NAMA_SALURAN,JENIS_KERUSAKAN,KABUPATEN,BIAYA_PERBAIKAN,KETERANGAN,NOW() FROM `data_bencanadt` INNER JOIN `data_bencanahd` ON (`data_bencanahd`.`ID_LAPORANHD` = `data_bencanadt`.`ID_LAPORANHD`) 
				WHERE data_bencanadt.ID_LAPORANHD='$ID_LAPORANHD'";
				$this->db->query($sql);
				$this->db->query($sql2);
	}

	function update_lampiran5($ID_KONTRAKTUAL,$KOLOM,$VALUES){
		if ($KOLOM==='BALAI') {
			# code...
			$sql="UPDATE data_kontraktual SET $KOLOM='$VALUES' WHERE ID_LAPORANHD='$ID_KONTRAKTUAL'";
		}else{
			$sql="UPDATE data_kontraktual SET $KOLOM='$VALUES' WHERE ID_KONTRAKTUAL='$ID_KONTRAKTUAL'";
		}
		
		$this->db->query($sql);
	}


	function selesai_05($ID_LAPORANHD){
		# code...

		$sql= "UPDATE data_kontraktual SET STATUS_KONTRAKTUAL='DONE' WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);

	}


		function selesai_052($ID_LAPORANHD){
		# code...

		$sql= "UPDATE data_kontraktual2 SET STATUS_KONTRAKTUAL2='DONE' WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);

	}

		function selesai_06($ID_LAPORANHD){
		# code...

		$sql= "UPDATE data_bencanahd SET STATUS_LAPORANHD='OKE' WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);

	}

	function unpost_lampiran6($ID_LAPORANHD){
		 $sql= "UPDATE data_bencanahd SET STATUS_LAPORANHD='OPEN' WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);
	}


		function delete_all($ID_LAPORANHD){
		 $sql= "DELETE FROM data_bencanahd  WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		 $sql2= "DELETE FROM data_bencanadt  WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);
		$this->db->query($sql2);

}


		function delete_kontraktual($ID_LAPORANHD){
		 $sql= "DELETE FROM data_kontraktual  WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);
	}

		function delete_kontraktual2($ID_LAPORANHD){
		 $sql= "DELETE FROM data_kontraktual2  WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);
	}




	


	function getList06(){
		$sql="SELECT*FROM `data_bencanadt` INNER JOIN `data_bencanahd` ON (`data_bencanahd`.`ID_LAPORANHD` = `data_bencanadt`.`ID_LAPORANHD`) GROUP BY data_bencanahd.ID_LAPORANHD";
		$data = $this->db->query($sql);
		return $data; 
	}

	function getList05(){
		$sql="SELECT * FROM data_kontraktual GROUP BY ID_LAPORANHD";
		$data = $this->db->query($sql);
		return $data; 
	}

	function getList04(){
		$sql="SELECT * FROM data_swakelola GROUP BY ID_LAPORANHD";
		$data = $this->db->query($sql);
		return $data; 
	}

	function getList052(){
		$sql="SELECT * FROM data_kontraktual2 GROUP BY ID_LAPORANHD";
		$data = $this->db->query($sql);
		return $data; 
	}

	function selesai_04($ID_LAPORANHD){
		 $sql= "UPDATE data_swakelola SET STATUS_SWAKELOLA='DONE' WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);
	}


	function delete_swakelola($ID_LAPORANHD){

		 $sql= "DELETE FROM data_swakelola WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);


	}

	function update_lampiran52($ID_KONTRAKTUAL2,$KOLOM,$VALUES){
		if($KOLOM==='UPAH'){

		 $sql="UPDATE data_kontraktual2 SET $KOLOM='$VALUES',JUMLAH=$VALUES+BAHAN WHERE ID_KONTRAKTUAL2='$ID_KONTRAKTUAL2'";
	
		}
		elseif($KOLOM==='BAHAN'){

		 $sql="UPDATE data_kontraktual2 SET $KOLOM='$VALUES',JUMLAH=$VALUES+UPAH WHERE ID_KONTRAKTUAL2='$ID_KONTRAKTUAL2'";
	
		}
		elseif ($KOLOM==='BALAI') {
			# code...
			$sql="UPDATE data_kontraktual2 SET $KOLOM='$VALUES' WHERE ID_LAPORANHD='$ID_KONTRAKTUAL2'";
		}else{
			$sql="UPDATE data_kontraktual2 SET $KOLOM='$VALUES' WHERE ID_KONTRAKTUAL2='$ID_KONTRAKTUAL2'";
		}
		$this->db->query($sql);
	}





}