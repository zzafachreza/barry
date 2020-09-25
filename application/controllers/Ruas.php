<?php


class Ruas extends CI_Controller{

	private $dataTable = null;

	function __construct(){

		parent::__construct();
		$this->load->model('Ruas_model');
		$this->dataTable = 'ruas';

	}

	function index(){

		$data['title']='SI JUET | Master Ruas Saluran';

		$data[$this->dataTable] = $this->Ruas_model->getData();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/data');
		$this->load->view('footer');
	}


	function add(){
		$data['title']='SI JUET | Tambah - Master Ruas Saluran';
	
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/add');
		$this->load->view('footer');
	}

	function insert(){
		$nama_ruas = $this->input->post('nama_ruas');
		$this->Ruas_model->insert($nama_ruas);
		redirect($this->dataTable);
	}


	function delete(){
		$id = $this->uri->segment(3);
		$this->Ruas_model->delete($id);
		redirect($this->dataTable);
	}

	function edit(){

		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Master Ruas Saluran - Edit';
		$hasil = $this->Ruas_model->getId($id);
		$data[$this->dataTable] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/edit',$data);
		$this->load->view('footer');
	}

	function detail(){
		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Master Ruas Saluran - Detail';

		$hasil = $this->Ruas_model->getId($id);
		$data[$this->dataTable] = $hasil->row_array();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/view',$data);
		$this->load->view('footer');
	}



	function update(){
		$id = $this->input->post('id');
		$nama_ruas = $this->input->post('nama_ruas');
		$this->Ruas_model->update($id,$nama_ruas);
		redirect($this->dataTable);
	}


}