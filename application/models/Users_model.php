<?php

class Users_model extends CI_Model{

	function getData(){
		$sql ="SELECT * FROM users";
		$data = $this->db->query($sql);
		return $data;
	}

	function insert($nama_lengkap,$username,$password,$level,$nip){

	 $sql ="INSERT INTO users(nama_lengkap,username,password,level,nip) values('$nama_lengkap','$username','$password','$level','$nip')";

	 $this->db->query($sql);
	}

	function delete($id){
		$sql="DELETE FROM users WHERE id='$id'";
		 $this->db->query($sql);
	}

	function getId($id){
		$sql = "SELECT * FROM users WHERE  id='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function update($id,$nama_lengkap,$username,$password,$level,$nip){

		if(!empty($password)){
			echo $sql= "UPDATE users SET nama_lengkap='$nama_lengkap',nip='$nip',username='$username',password='".sha1($password)."',level='$level' WHERE id='$id'";
		}else{
			echo $sql= "UPDATE users SET nama_lengkap='$nama_lengkap',nip='$nip',username='$username',level='$level' WHERE id='$id'";
		}
		
		$this->db->query($sql);	
	}

}