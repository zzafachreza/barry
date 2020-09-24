<?php

class Ruas_model extends CI_Model{


	function getData(){
		$sql ="SELECT * FROM data_ruas";
		$data = $this->db->query($sql);

		// print_r($data);
		return $data;
	}


	 function insert($nama_ruas){

	 $sql ="INSERT INTO data_ruas(nama_ruas) values('$nama_ruas')";

	 $this->db->query($sql);	
	}


	function delete($id){
		$sql="DELETE FROM data_ruas WHERE id_ruas='$id'";
		 $this->db->query($sql);
	}

	function getId($id){
		$sql = "SELECT * FROM data_ruas WHERE  id_ruas='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function update($id,$nama_ruas){

	
    $sql= "UPDATE data_ruas SET nama_ruas='$nama_ruas' WHERE id_ruas='$id'";
	
		
		$this->db->query($sql);	
	}

}