<?php


class Riwayat extends CI_Controller{

	private $dataTable = null;
	private $judulHalaman = null;

	function __construct(){

		parent::__construct();

		$this->load->model('Riwayat_model');

		$this->dataTable = 'riwayat';
		$this->judulHalaman = 'Riwayat Perubahan Data';
	}

	
	function index(){
		$data['title']='SI JUET | '.$this->judulHalaman;

		$data[$this->dataTable] = $this->Riwayat_model->getData();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/data');
		$this->load->view('footer');
	} 

	function insert(){

		$TANGGAL = $this->input->post('TANGGAL');
		$DATA_TABLE = $this->input->post('DATA_TABLE');
		$AKSI = $this->input->post('AKSI');
		$OLEH = $this->input->post('OLEH');

		$this->Riwayat_model->insert($DATA_TABLE,$AKSI,$OLEH);
		redirect($this->dataTable);
	}



	function delete(){
		$id = $this->uri->segment(3);
		$this->Riwayat_model->delete($id);
		redirect($this->dataTable);
	}




}