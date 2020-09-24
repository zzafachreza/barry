<?php


class Ruas extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('Ruas_model');

	}

	function index(){

		$data['title']='SI JUET | Master Ruas Saluran';
		$data['ruas'] = $this->Ruas_model->getData();
		$this->load->view('header',$data);
		$this->load->view('ruas/data');
		$this->load->view('footer');
	} //ok 


	function add(){
		$data['title']='SI JUET | Tambah - Master Ruas Saluran';
	
		$this->load->view('header',$data);
		$this->load->view('ruas/add');
		$this->load->view('footer');
	}

	function insert(){
		$nama_ruas = $this->input->post('nama_ruas');
		$this->Ruas_model->insert($nama_ruas);

		redirect('ruas');
	}


	function delete(){
		$id = $this->uri->segment(3);
		$this->Ruas_model->delete($id);
		redirect('ruas');
	}

	function edit(){

		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Master User - Edit';
		$hasil = $this->Ruas_model->getId($id);
		$data['ruas'] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view('ruas/edit',$data);
		$this->load->view('footer');
	}

	function detail(){
		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Master User - Detail';
		$hasil = $this->Ruas_model->getId($id);

		$data['ruas'] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view('ruas/view',$data);
		$this->load->view('footer');
	}



	function update(){
		$id = $this->input->post('id');
		$nama_ruas = $this->input->post('nama_ruas');
		$this->Ruas_model->update($id,$nama_ruas);
		redirect('ruas');
	}


}