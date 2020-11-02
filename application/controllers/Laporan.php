<?php

class Laporan extends CI_Controller{

	private $dataTable = null;
	private $judulHalaman = null;

	function __construct(){

		parent::__construct();

		$this->judulHalaman = 'Laporan';
	}


	function index(){


		$data['title']='BARRY CALLEBAUT | '.$this->judulHalaman;
		$this->load->view('header',$data);
		$this->load->view('laporan');

	}


	function excel(){
		$data['title']='BARRY CALLEBAUT | '.$this->judulHalaman;
	

		$this->load->view('excel');

	}

		function pdf(){
		$data['title']='BARRY CALLEBAUT | '.$this->judulHalaman;


		$this->load->view('pdf');

	}



}