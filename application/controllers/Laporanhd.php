<?php


class Laporanhd extends CI_Controller{

	private $dataTable = null;
	private $judulHalaman = null;

	function __construct(){

		parent::__construct();

		$this->load->model('Laporanhd_model');
		$this->load->model('Riwayat_model');
		$this->load->model('Bangunan_model');


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
		$ID_LAPORANHD = sha1(date('ymdhis'));
		$TANGGAL = $this->input->post('TANGGAL');
		$TANGGAL = $this->Laporanhd_model->tglSql($TANGGAL);
		$DAERAH_IRIGASI = $this->input->post('DAERAH_IRIGASI');
		$LUAS_AREA_IRIGASI = $this->input->post('LUAS_AREA_IRIGASI');
		$TINGKATAN_IRIGASI = $this->input->post('TINGKATAN_IRIGASI');
		$KABUPATEN = $this->input->post('KABUPATEN');
		$RANTING = $this->input->post('RANTING');
		$MANTRI = $this->input->post('MANTRI');


		$this->Laporanhd_model->insertLaporandt($ID_LAPORANHD);


		$this->Laporanhd_model->insert($ID_LAPORANHD,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING,$MANTRI);
		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'TAMBAH',strtoupper($_SESSION['username']));

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
		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'EDIT ',strtoupper($_SESSION['username']));
		redirect($this->dataTable);
	}


	function edit_detail(){

		$id	= $this->uri->segment(3);
		$data['ID_LAPORANHD'] = $id;
		$data['laporandt'] = $this->Laporanhd_model->getDataDetail($id);
		$this->load->view($this->dataTable.'/edit_detail',$data);
	}




	function update_detail(){


		print_r($_POST);
		// die();

			if (isset($_POST['TIPE'])) {
				# code...

				echo $ID_LAPORANDT = $_POST['ID_LAPORANDT'];
				echo  $KOLOM  = $_POST['KOLOM'];
				echo $VALUE ='';
				// $TIPE = $_POST[$KOLOM];

			}else{
				$ID_LAPORANDT = $_POST['ID_LAPORANDT'];
				$KOLOM  = $_POST['KOLOM'];
				$VALUE = $_POST[$KOLOM];
			}

		 $this->Laporanhd_model->update_detail($ID_LAPORANDT,$KOLOM,$VALUE);


	}


	function update_detail_foto(){


		// print_r($_FILES);
		// print_r($_POST);

	

		$KOLOM  = $_POST['KOLOM'];
		$TYPE = $_FILES[$KOLOM]['type'];
		$TYPE = explode("/", $TYPE);

		 $FOTO_OLD = 'upload/'.$_POST['FOTO_OLD'];

	
		unlink($FOTO_OLD);


		$VALUE = sha1(date('ymdhis')).".".$TYPE[1];

		$ID_LAPORANDT = $_POST['ID_LAPORANDT'];



		// upload foto

		$folder = "upload/";

		$upload_image = $VALUE;
		// tentukan ukuran width yang diharapkan
		$width_size = 1000;
		 
		// tentukan di mana image akan ditempatkan setelah diupload
		$filesave = $folder . $upload_image;
		move_uploaded_file($_FILES[$KOLOM]['tmp_name'], $filesave);
		
		 
		// menentukan nama image setelah dibuat
		$resize_image = $folder . $upload_image;
		 
		// mendapatkan ukuran width dan height dari image
		list( $width, $height ) = getimagesize($filesave);
		 
		// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
		$k = $width / $width_size;
		 
		// menentukan width yang baru
		$newwidth = $width / $k;
		 
		// menentukan height yang baru
		$newheight = $height / $k;
		 
		// fungsi untuk membuat image yang baru
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		$source = imagecreatefromjpeg($filesave);
		 
		// men-resize image yang baru
		imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
		 
		// menyimpan image yang baru
		imagejpeg($thumb, $resize_image);
		 
		imagedestroy($thumb);
		imagedestroy($source);
		
		$this->Laporanhd_model->update_detail_foto($ID_LAPORANDT,$KOLOM,$VALUE);

		
	

		


	}

	function view_detail_foto(){
		$ID_LAPORANDT = $this->uri->segment(3);
		$KOLOM = $this->uri->segment(4);


		$data['title']='SI JUET | Foto - '.$this->judulHalaman;
		$data['KOLOM'] = $KOLOM;
		 
		$hasil = $this->Laporanhd_model->getIdFoto($ID_LAPORANDT,$KOLOM);
		$data[$this->dataTable] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/foto',$data);
		$this->load->view('footer');

	}


	function delete(){
		$id = $this->uri->segment(3);
		$DAERAH_IRIGASI = $this->uri->segment(4);
		$this->Laporanhd_model->delete($id);
		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'HAPUS',strtoupper($_SESSION['username']));
		redirect($this->dataTable);
	}




}