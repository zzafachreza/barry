<?php

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
			$data['title']='BARRY CALLEBAUT | Home';
			$this->load->view('header',$data);
			$this->load->view('home');
			$this->load->view('footer');
		}
	}
	
}