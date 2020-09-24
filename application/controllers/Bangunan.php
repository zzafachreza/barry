<?php


class Bangunan extends CI_Controller{

	function __construct(){

		parent::__construct();

	}

	function index(){

		$data['title']='SI JUET | Master Bangunan dan Tipenya';
		echo "HALAMAN BANGUNAN";
		// $data['users'] = $this->Users_model->getData();
		// $this->load->view('header',$data);
		// $this->load->view('ruas/data');
		// $this->load->view('footer');
	} //ok 


}