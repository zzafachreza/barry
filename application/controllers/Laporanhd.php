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
		

		switch ($_SESSION['level']) {
			case 'MANTRI':
				# code...
			$data['laporandt'] = $this->Laporanhd_model->getDataDetail($id);
			$data[$this->dataTable] = $hasil->row_array();
			$this->load->view($this->dataTable.'/view_1',$data);
				break;
			case 'SUP':
				# code...
			$data['laporandt'] = $this->Laporanhd_model->getDataDetail($id);
			$data[$this->dataTable] = $hasil->row_array();
			$this->load->view($this->dataTable.'/view_2',$data);
				break;
			
			default:
				# code...
			$data['laporandt'] = $this->Laporanhd_model->getDataDetail3($id);
			$data[$this->dataTable] = $hasil->row_array();
			$this->load->view($this->dataTable.'/view',$data);
				break;
		}
		
	
	}

		function detail_pdf(){
		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Detail - '.$this->judulHalaman;

		$hasil = $this->Laporanhd_model->getId($id);
		
		

		switch ($_SESSION['level']) {
			case 'MANTRI':
				# code...
			$data['laporandt'] = $this->Laporanhd_model->getDataDetail($id);
		$data[$this->dataTable] = $hasil->row_array();
			$this->load->view($this->dataTable.'/view_pdf_1',$data);
				break;
			case 'SUP':
				# code...
			$data['laporandt'] = $this->Laporanhd_model->getDataDetail($id);
		$data[$this->dataTable] = $hasil->row_array();
			$this->load->view($this->dataTable.'/view_pdf_2',$data);
				break;
			
			default:
				# code...
			$data['laporandt'] = $this->Laporanhd_model->getDataDetail3($id);
		$data[$this->dataTable] = $hasil->row_array();
			$this->load->view($this->dataTable.'/view_pdf',$data);
				break;
		}
	
	}


		function detail_excel(){
		$id	= $this->uri->segment(3);
		$data['title']='SI JUET | Detail - '.$this->judulHalaman;

		$hasil = $this->Laporanhd_model->getId($id);
		

		switch ($_SESSION['level']) {
			case 'MANTRI':
				# code...
			$data['laporandt'] = $this->Laporanhd_model->getDataDetail($id);
		$data[$this->dataTable] = $hasil->row_array();
			$this->load->view($this->dataTable.'/view_excel_1',$data);
				break;
			case 'SUP':
				# code...
			$data['laporandt'] = $this->Laporanhd_model->getDataDetail($id);
		$data[$this->dataTable] = $hasil->row_array();
			$this->load->view($this->dataTable.'/view_excel_2',$data);
				break;
			
			default:
				# code..
			$data['laporandt'] = $this->Laporanhd_model->getDataDetail3($id);
		$data[$this->dataTable] = $hasil->row_array();
			$this->load->view($this->dataTable.'/view_excel',$data);
				break;
		}
	
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

	function edit_detail3(){

		$id	= $this->uri->segment(3);
		$data['ID_LAPORANHD'] = $id;
		$data['laporandt'] = $this->Laporanhd_model->getDataDetail3($id);
		$this->load->view($this->dataTable.'/edit_detail',$data);
	}



	function edit_detail_view(){

		$id	= $this->uri->segment(3);
		$data['ID_LAPORANHD'] = $id;
		$data['laporandt'] = $this->Laporanhd_model->getDataDetail($id);
		$this->load->view($this->dataTable.'/edit_detail_view',$data);
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
		$this->Laporanhd_model->deleteDT($id);

		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'HAPUS',strtoupper($_SESSION['username']));

		redirect($this->dataTable);
	}


	function update_status(){

		$ID_LAPORANHD = $this->uri->segment(3);
		$STATUS_LAPORANHD = $this->uri->segment(4);

		$this->Laporanhd_model->update_status($ID_LAPORANHD,$STATUS_LAPORANHD);

		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA ','SELESAI',strtoupper($_SESSION['username']));

		redirect($this->dataTable);

	}

	function update_selesai(){

		 print_r($_POST);
		 $id = $this->input->post('id');
		 $VALUE = $this->input->post('VALUE');
			$KOLOM = $this->input->post('KOLOM');
			$STATUS_ALL = $this->input->post('STATUS_ALL');
			$STATUS_LAPORANHD = $this->input->post('STATUS_LAPORANHD');
		    $VALUE = $this->Laporanhd_model->tglSql($VALUE);

	    if (isset($STATUS_ALL)) {
	    	# code...
	    	$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' -UPDATE STATUS ',$STATUS_ALL,strtoupper($_SESSION['username']));
	    	$this->Laporanhd_model->update_selesai3($id,$STATUS_LAPORANHD,$STATUS_ALL,$KOLOM,$VALUE);
	    }else{

	    		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA ',$STATUS_LAPORANHD,strtoupper($_SESSION['username']));
	    	$this->Laporanhd_model->update_selesai($id,$STATUS_LAPORANHD,$KOLOM,$VALUE);
	    }

	    redirect($this->dataTable);
	}




}