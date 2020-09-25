<?php


class Laporanhd extends CI_Controller{

	private $dataTable = null;
	private $judulHalaman = null;

	function __construct(){

		parent::__construct();

		$this->load->model('Laporanhd_model');

		$this->dataTable = 'laporanhd';
		$this->judulHalaman = 'Laporan Kerusakan Jaringan Irigasi';
	}



	
	function index(){
		$data['title']='SI JUET | '.$this->judulHalaman;

	
		$data[$this->dataTable] = $this->Laporanhd_model->getData();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/data');
		$this->load->view('footer');
	} 

	function detail(){
		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Detail - '.$this->judulHalaman;

		$hasil = $this->Laporanhd_model->getId($id);
		$data[$this->dataTable] = $hasil->row_array();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/view',$data);
		$this->load->view('footer');
	}

	function add(){
		$data['title']='SI JUET | Tambah - '.$this->judulHalaman;
	
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/add');
		$this->load->view('footer');
	}

	function insert(){

		$TANGGAL = $this->input->post('TANGGAL');
		$TANGGAL = $this->Laporanhd_model->tglSql($TANGGAL);
		$DAERAH_IRIGASI = $this->input->post('DAERAH_IRIGASI');
		$LUAS_AREA_IRIGASI = $this->input->post('LUAS_AREA_IRIGASI');
		$TINGKATAN_IRIGASI = $this->input->post('TINGKATAN_IRIGASI');
		$KABUPATEN = $this->input->post('KABUPATEN');
		$RANTING = $this->input->post('RANTING');
		$MANTRI = $this->input->post('MANTRI');


		$this->Laporanhd_model->insert($TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING,$MANTRI);
		redirect($this->dataTable);
	}

	function edit(){

		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Edit - '.$this->judulHalaman;

		$hasil = $this->Laporanhd_model->getId($id);
		$data[$this->dataTable] = $hasil->row_array();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/edit',$data);
		$this->load->view('footer');
	}

	function update(){
		$id = $this->input->post('id');
		$TANGGAL = $this->input->post('TANGGAL');
		$TANGGAL = $this->Laporanhd_model->tglSql($TANGGAL);
		$DAERAH_IRIGASI = $this->input->post('DAERAH_IRIGASI');
		$LUAS_AREA_IRIGASI = $this->input->post('LUAS_AREA_IRIGASI');
		$TINGKATAN_IRIGASI = $this->input->post('TINGKATAN_IRIGASI');
		$KABUPATEN = $this->input->post('KABUPATEN');
		$RANTING = $this->input->post('RANTING');
		$MANTRI = $this->input->post('MANTRI');

		$this->Laporanhd_model->update($id,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING,$MANTRI);
		redirect($this->dataTable);
	}


	function delete(){
		$id = $this->uri->segment(3);
		$this->Laporanhd_model->delete($id);
		redirect($this->dataTable);
	}




}