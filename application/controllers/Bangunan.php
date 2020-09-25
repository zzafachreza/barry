<?php


class Bangunan extends CI_Controller{

	private $dataTable = null;

	function __construct(){

		parent::__construct();
		$this->load->model('Bangunan_model');
		$this->load->model('Ruas_model');
		$this->load->model('Riwayat_model');

		$this->dataTable = 'bangunan';
	}

	
	function index(){
		$data['title']='SI JUET | Master Bangunan dan Tipenya';

	
		$data[$this->dataTable] = $this->Bangunan_model->getData();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/data');
		$this->load->view('footer');
	} 

	function detail(){
		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Master Bangunan dan Tipenya - Detail';

		$hasil = $this->Bangunan_model->getId($id);
		$data[$this->dataTable] = $hasil->row_array();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/view',$data);
		$this->load->view('footer');
	}

	function add(){
		$data['title']='SI JUET | Tambah - Bangunan dan Tipenya';
		$data['ruas'] = $this->Ruas_model->getData();
	
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/add');
		$this->load->view('footer');
	}

	function insert(){
		$nama_bangunan = $this->input->post('nama_bangunan');
		$id_ruas = $this->input->post('id_ruas');
		$this->Bangunan_model->insert($nama_bangunan,$id_ruas);
		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$nama_bangunan,'TAMBAH',strtoupper($_SESSION['username']));
		redirect($this->dataTable);
	}

	function edit(){

		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Master Bangunan dan Tipenya - Edit';

		$hasil = $this->Bangunan_model->getId($id);
		$data[$this->dataTable] = $hasil->row_array();
		$data['ruas'] = $this->Ruas_model->getData();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/edit',$data);
		$this->load->view('footer');
	}

	function update(){
		$id = $this->input->post('id');
		$nama_bangunan = $this->input->post('nama_bangunan');
		$id_ruas = $this->input->post('id_ruas');

		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$nama_bangunan,'EDIT ',strtoupper($_SESSION['username']));
		$this->Bangunan_model->update($id,$nama_bangunan,$id_ruas);
		redirect($this->dataTable);
	}


	function delete(){
		$id = $this->uri->segment(3);
		$nama_bangunan = $this->uri->segment(4);
		$this->Bangunan_model->delete($id);
		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$nama_bangunan,'HAPUS',strtoupper($_SESSION['username']));
		redirect($this->dataTable);
	}




}