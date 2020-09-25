<?php

class Bangunan_model extends CI_Model{


	function getData(){
		$sql ="SELECT * FROM data_bangunan JOIN data_ruas ON data_bangunan.id_ruas = data_ruas.id_ruas";
		$data = $this->db->query($sql);
		return $data;
	}


	 function insert($nama_bangunan,$id_ruas){

	 $sql ="INSERT INTO data_bangunan(nama_bangunan,id_ruas) values('$nama_bangunan','$id_ruas')";

	 $this->db->query($sql);	
	}


	function delete($id){
		$sql="DELETE FROM data_bangunan WHERE id_bangunan='$id'";
		 $this->db->query($sql);
	}

	function getId($id){
		$sql = "SELECT * FROM data_bangunan JOIN data_ruas ON data_bangunan.id_ruas = data_ruas.id_ruas WHERE  id_bangunan='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function update($id,$nama_bangunan,$id_ruas){

	
    $sql= "UPDATE data_bangunan SET nama_bangunan='$nama_bangunan',id_ruas='$id_ruas' WHERE id_bangunan='$id'";
	
		
		$this->db->query($sql);	
	}

}