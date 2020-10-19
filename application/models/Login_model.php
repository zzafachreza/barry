<?php

class Login_model extends CI_Model{

	function getUser($username,$password){

		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$data = $this->db->query($sql);
		return $data;

	}

	function set_user($id,$username,$nama_lengkap,$nip,$password){

		if ($password ==="") {
			# code...
			 $sql = "UPDATE users SET username='$username',nama_lengkap='$nama_lengkap',nip='$nip' WHERE id='$id'";
		}else{

			$new = SHA1($password);
			 $sql = "UPDATE users SET username='$username',nama_lengkap='$nama_lengkap',nip='$nip',password='$new' WHERE id='$id'";
		}

		$data = $this->db->query($sql);


	}

	



}