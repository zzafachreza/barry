<?php

class Laporanhd_model extends CI_Model{

	function tglSql($tgl){
		$tgl = explode("/", $tgl);
		return $tgl[2]."-".$tgl[1]."-".$tgl[0];
	}


	function getData(){
		// $sql ="describe data_laporandt";
		$sql ="SELECT * FROM data_laporanhd";

		$data = $this->db->query($sql);
		return $data;
	}


	 function insert($ID_LAPORANHD,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING,$MANTRI){


	 $sql ="INSERT INTO data_laporanhd(ID_LAPORANHD,TANGGAL,DAERAH_IRIGASI,LUAS_AREA_IRIGASI,TINGKATAN_IRIGASI,KABUPATEN,RANTING,MANTRI,STATUS_LAPORANHD) values('$ID_LAPORANHD','$TANGGAL','$DAERAH_IRIGASI','$LUAS_AREA_IRIGASI','$TINGKATAN_IRIGASI','$KABUPATEN','$RANTING','$MANTRI','OPEN')";

	 $this->db->query($sql);	
	}


	function delete($id){
		$sql="DELETE FROM data_laporanhd WHERE ID_LAPORANHD='$id'";
		 $this->db->query($sql);
	}

	function getId($id){
		$sql = "SELECT * FROM data_laporanhd WHERE  ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function update($id,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING,$MANTRI){

	
    $sql= "UPDATE data_laporanhd SET TANGGAL='$TANGGAL',DAERAH_IRIGASI='$DAERAH_IRIGASI',LUAS_AREA_IRIGASI='$LUAS_AREA_IRIGASI',TINGKATAN_IRIGASI='$TINGKATAN_IRIGASI',KABUPATEN='$KABUPATEN',RANTING='$RANTING',MANTRI='$MANTRI'  WHERE ID_LAPORANHD='$id'";
		$this->db->query($sql);	
	}


	function update_detail($ID_LAPORANDT,$FIELD,$VALUE){
	
   		echo $sql= "UPDATE data_laporandt SET $FIELD='$VALUE' WHERE ID_LAPORANDT='$ID_LAPORANDT'";
		$this->db->query($sql);	
	}



	function insertLaporandt($id){
		$sql = "INSERT INTO data_laporandt(ID_LAPORANHD,ID_BANGUNAN) SELECT '$id',id_bangunan FROM data_bangunan";
		$this->db->query($sql);	
	}

	function getDataDetail($id){
		$sql="SELECT*FROM `data_laporanhd` INNER JOIN `data_laporandt` ON (`data_laporanhd`.`ID_LAPORANHD` = `data_laporandt`.`ID_LAPORANHD`) INNER JOIN `data_bangunan` ON (`data_laporandt`.`ID_BANGUNAN` = `data_bangunan`.`id_bangunan`) INNER JOIN `data_ruas` ON (`data_bangunan`.`id_ruas` = `data_ruas`.`id_ruas`) WHERE data_laporandt.ID_LAPORANHD='$id' limit 1;";
		$data = $this->db->query($sql);
		return $data;
	}

}