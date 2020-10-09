<?php


class Bencanahd extends CI_Controller{

	private $dataTable = null;
	private $judulHalaman = null;

	function __construct(){

		parent::__construct();

		$this->load->model('Bencanahd_model');
		$this->load->model('Riwayat_model');


		$this->dataTable = 'bencanahd';
		$this->judulHalaman = 'Laporan Kerusakan Akibat Bencana Alam';
	}




	function index(){

		$data['title']='SI JUET | '.$this->judulHalaman;
		$data[$this->dataTable] = $this->Bencanahd_model->getData();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/data');
		$this->load->view('footer');
	} 


		function add(){
		$data['title']='SI JUET | Tambah - '.$this->judulHalaman;
	
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/add');
		$this->load->view('footer');
	}

	function insert(){
		$ID_LAPORANHD = sha1(date('ymdhis'));
		$TANGGAL = $this->input->post('TANGGAL');
		$TANGGAL = $this->Bencanahd_model->tglSql($TANGGAL);
		$DAERAH_IRIGASI = $this->input->post('DAERAH_IRIGASI');
		$LUAS_AREA_IRIGASI = $this->input->post('LUAS_AREA_IRIGASI');
		$TINGKATAN_IRIGASI = $this->input->post('TINGKATAN_IRIGASI');
		$KABUPATEN = $this->input->post('KABUPATEN');
		$RANTING = $this->input->post('RANTING');




		$this->Bencanahd_model->insert($ID_LAPORANHD,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING);
		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'TAMBAH',strtoupper($_SESSION['username']));

		redirect($this->dataTable);
	}


	function edit(){

		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Edit - '.$this->judulHalaman;

		 
		$hasil = $this->Bencanahd_model->getId($id);

		$data['bencanadt'] = $this->Bencanahd_model->getDataDetail($id);



		$data[$this->dataTable] = $hasil->row_array();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/edit',$data);
		$this->load->view('footer');
	}


	function update(){
		$id = $this->input->post('id');
		$TANGGAL = $this->input->post('TANGGAL');
		$TANGGAL = $this->Bencanahd_model->tglSql($TANGGAL);
		$DAERAH_IRIGASI = $this->input->post('DAERAH_IRIGASI');
		$LUAS_AREA_IRIGASI = $this->input->post('LUAS_AREA_IRIGASI');
		$TINGKATAN_IRIGASI = $this->input->post('TINGKATAN_IRIGASI');
		$KABUPATEN = $this->input->post('KABUPATEN');
		$RANTING = $this->input->post('RANTING');
		$MANTRI = $this->input->post('MANTRI');

		$this->Bencanahd_model->update($id,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING);
		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'EDIT ',strtoupper($_SESSION['username']));
		redirect($this->dataTable);
	}


	function insert_detail(){
	

		$ID_LAPORANHD = $this->input->post('ID_LAPORANHD');
		$NAMA_SALURAN = $this->input->post('NAMA_SALURAN');
		$PENYEBAB_KERUSAKAN = $this->input->post('PENYEBAB_KERUSAKAN');
		$JENIS_KERUSAKAN = $this->input->post('JENIS_KERUSAKAN');
		$TANAH = $this->input->post('TANAH');
		$BATU = $this->input->post('BATU');
		$BETON = $this->input->post('BETON');
		$PINTU_AIR = $this->input->post('PINTU_AIR');
		$GORONG_GORONG = $this->input->post('GORONG_GORONG');
		$LAIN_LAIN_KERUSAKAN = $this->input->post('LAIN_LAIN_KERUSAKAN');
		$LUAS_TERANCAM = $this->input->post('LUAS_TERANCAM');
		$TINDAKAN_PERBAIKAN = $this->input->post('TINDAKAN_PERBAIKAN');
		$BIAYA_PERBAIKAN = $this->input->post('BIAYA_PERBAIKAN');
		$DIKERJAKAN_OLEH = $this->input->post('DIKERJAKAN_OLEH');
		$DIUSULKAN_OLEH = $this->input->post('DIUSULKAN_OLEH');

		$this->Bencanahd_model->insert_detail($ID_LAPORANHD,$NAMA_SALURAN,$PENYEBAB_KERUSAKAN,$JENIS_KERUSAKAN,$TANAH,$BATU,$BETON,$PINTU_AIR,$GORONG_GORONG,$LAIN_LAIN_KERUSAKAN,$LUAS_TERANCAM,$TINDAKAN_PERBAIKAN,$BIAYA_PERBAIKAN,$DIKERJAKAN_OLEH,$DIUSULKAN_OLEH);
		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'EDIT ',strtoupper($_SESSION['username']));

		redirect($this->dataTable.'/edit/'.$ID_LAPORANHD);


	}


	function hapus_detail(){

		$ID_LAPORANHD	= $this->uri->segment(3);
		$ID_LAPORANDT	= $this->uri->segment(4);

		$this->Bencanahd_model->hapus_detail($ID_LAPORANHD,$ID_LAPORANDT);

		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'HAPUS ',strtoupper($_SESSION['username']));

		redirect($this->dataTable.'/edit/'.$ID_LAPORANHD);

	}



	function detail(){

		$id =  $this->uri->segment(3);

		$hasil = $this->Bencanahd_model->getId($id);

		$data['bencanadt'] = $this->Bencanahd_model->getDataDetail($id);



		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/view',$data);
	


	}

	





	function update_lampiran6(){

		$ID_LAPORANDT = $_POST['ID_LAPORANDT'];
		$KOLOM = $_POST['KOLOM'];
		$VALUE = $_POST['VALUE'];

		$this->Bencanahd_model->update_lampiran6($ID_LAPORANDT,$KOLOM,$VALUE);


	}

	function add_05(){
		$ID_LAPORANHD = $_POST['ID_LAPORANHD'];
		$this->Bencanahd_model->add_05($ID_LAPORANHD);
		redirect($this->dataTable."/lampiran06");

	}

	function update_lampiran5(){

		$ID_KONTRAKTUAL = $_POST['ID_KONTRAKTUAL'];
		$KOLOM = $_POST['KOLOM'];
		$VALUE = $_POST['VALUE'];

		$this->Bencanahd_model->update_lampiran5($ID_KONTRAKTUAL,$KOLOM,$VALUE);


	}

	

	function lampiran06(){

		$data['data'] = $this->Bencanahd_model->getList06();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/list_06',$data);

	}

	function edit_lampiran06(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['bencanadt'] = $this->Bencanahd_model->getDataDetail($id);


		$this->load->view('header',$data);
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/edit_06',$data);
	

	}

	function view_lampiran06(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['data'] = $this->Bencanahd_model->getDataDetail($id);


	
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/view_06',$data);

	}



	function lampiran05(){

		$data['data'] = $this->Bencanahd_model->getList05();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/list_05',$data);
	

	}

	function edit_lampiran05(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp05'] = $this->Bencanahd_model->getDataDetail05($id);


		$this->load->view('header',$data);
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/edit_05',$data);
	

	}

	function selesai_05(){
		$ID_LAPORANHD = $_POST['ID_LAPORANHD'];
		$this->Bencanahd_model->selesai_05($ID_LAPORANHD);
		redirect($this->dataTable.'/lampiran05');

	}

		function view_lampiran05(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp05'] = $this->Bencanahd_model->getDataDetail05($id);


		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/view_05',$data);
	

	}

	function lampiran04(){

		$data['data'] = $this->Bencanahd_model->getList04();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/list_04',$data);
	

	}

	function view_lampiran04(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp04'] = $this->Bencanahd_model->getDataDetail04($id);


		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/view_04',$data);
	

	}


	function edit_lampiran04(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp04'] = $this->Bencanahd_model->getDataDetail04($id);


		$this->load->view('header',$data);
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/edit_04',$data);
	

	}

		function update_lampiran4(){

		$ID_SWAKELOLA = $_POST['ID_SWAKELOLA'];
		$KOLOM = $_POST['KOLOM'];
		$VALUE = $_POST['VALUE'];

		$this->Bencanahd_model->update_lampiran4($ID_SWAKELOLA,$KOLOM,$VALUE);


	}

	function selesai_04(){
		$ID_LAPORANHD = $_POST['ID_LAPORANHD'];
		$this->Bencanahd_model->selesai_04($ID_LAPORANHD);
		redirect($this->dataTable.'/lampiran04');

	}






}