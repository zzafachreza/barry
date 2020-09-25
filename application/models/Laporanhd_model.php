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


	 function insert($TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING,$MANTRI){

	 $sql ="INSERT INTO data_laporanhd(TANGGAL,DAERAH_IRIGASI,LUAS_AREA_IRIGASI,TINGKATAN_IRIGASI,KABUPATEN,RANTING,MANTRI,STATUS_LAPORANHD) values('$TANGGAL','$DAERAH_IRIGASI','$LUAS_AREA_IRIGASI','$TINGKATAN_IRIGASI','$KABUPATEN','$RANTING','$MANTRI','OPEN')";

	 $this->db->query($sql);	
	}


	function delete($id){
		$sql="DELETE FROM data_laporanhd WHERE ID='$id'";
		 $this->db->query($sql);
	}

	function getId($id){
		$sql = "SELECT * FROM data_laporanhd WHERE  ID='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function update($id,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING,$MANTRI){

	
    $sql= "UPDATE data_laporanhd SET TANGGAL='$TANGGAL',DAERAH_IRIGASI='$DAERAH_IRIGASI',LUAS_AREA_IRIGASI='$LUAS_AREA_IRIGASI',TINGKATAN_IRIGASI='$TINGKATAN_IRIGASI',KABUPATEN='$KABUPATEN',RANTING='$RANTING',MANTRI='$MANTRI'  WHERE ID='$id'";
		$this->db->query($sql);	
	}

}