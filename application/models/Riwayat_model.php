<?php

class Riwayat_model extends CI_Model{

	function tglSql($tgl){
		$tgl = explode("/", $tgl);
		return $tgl[2]."-".$tgl[1]."-".$tgl[0];
	}


	function getData(){
		$sql ="SELECT * FROM data_riwayat";
		$data = $this->db->query($sql);
		return $data;
	}

	 function insert($DATA_TABLE,$AKSI,$OLEH){
	 $sql ="INSERT INTO data_riwayat(DATA_TABLE,AKSI,OLEH,TANGGAL) values('$DATA_TABLE','$AKSI','$OLEH',NOW())";
	 $this->db->query($sql);	
	}

	function delete($id){
		$sql="DELETE FROM data_riwayat WHERE ID='$id'";
		 $this->db->query($sql);
	}




}