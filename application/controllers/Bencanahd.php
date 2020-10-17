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
	
	error_reporting(0);

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
		$FOTO_BENCANA = $this->input->post('FOTO_BENCANA');



		if (!empty($_FILES['FOTO_BENCANA1'])) {

			$TYPEFOTO_BENCANA1 = $_FILES['FOTO_BENCANA1']['type'];
			$TYPEFOTO_BENCANA1 = explode("/", $TYPEFOTO_BENCANA1);
			$VALUEFOTO_BENCANA1 = sha1(date('ymdhis'))."FOTO_BENCANA1.".$TYPEFOTO_BENCANA1[1];
			$folder = "upload/";
			$upload_image = $VALUEFOTO_BENCANA1;
			$width_size = 1000;
			$filesave = $folder . $upload_image;
			move_uploaded_file($_FILES['FOTO_BENCANA1']['tmp_name'], $filesave);
			$resize_image = $folder . $upload_image;
			list( $width, $height ) = getimagesize($filesave);
			$k = $width / $width_size;
			$newwidth = $width / $k;
			$newheight = $height / $k;
			$thumb = imagecreatetruecolor($newwidth, $newheight);
			$source = imagecreatefromjpeg($filesave);
			imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
			imagejpeg($thumb, $resize_image);
			imagedestroy($thumb);
			imagedestroy($source);
			# code...
		}else{
		$VALUEFOTO_BENCANA1="";
	}
	



		if (!empty($_FILES['FOTO_BENCANA2'])) {
			$TYPEFOTO_BENCANA2 = $_FILES['FOTO_BENCANA2']['type'];
			$TYPEFOTO_BENCANA2 = explode("/", $TYPEFOTO_BENCANA2);
			$VALUEFOTO_BENCANA2 = sha1(date('ymdhis'))."FOTO_BENCANA2.".$TYPEFOTO_BENCANA2[1];
			$folder = "upload/";
			$upload_image = $VALUEFOTO_BENCANA2;
			$width_size = 1000;
			$filesave = $folder . $upload_image;
			move_uploaded_file($_FILES['FOTO_BENCANA2']['tmp_name'], $filesave);
			$resize_image = $folder . $upload_image;
			list( $width, $height ) = getimagesize($filesave);
			$k = $width / $width_size;
			$newwidth = $width / $k;
			$newheight = $height / $k;
			$thumb = imagecreatetruecolor($newwidth, $newheight);
			$source = imagecreatefromjpeg($filesave);
			imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
			imagejpeg($thumb, $resize_image);
			imagedestroy($thumb);
			imagedestroy($source);
		}else{
		$VALUEFOTO_BENCANA2="";
	}
	


		if (!empty($_FILES['FOTO_BENCANA3'])) {
			$TYPEFOTO_BENCANA3 = $_FILES['FOTO_BENCANA3']['type'];
			$TYPEFOTO_BENCANA3 = explode("/", $TYPEFOTO_BENCANA3);
			$VALUEFOTO_BENCANA3 = sha1(date('ymdhis'))."FOTO_BENCANA3.".$TYPEFOTO_BENCANA3[1];
			$folder = "upload/";
			$upload_image = $VALUEFOTO_BENCANA3;
			$width_size = 1000;
			$filesave = $folder . $upload_image;
			move_uploaded_file($_FILES['FOTO_BENCANA3']['tmp_name'], $filesave);
			$resize_image = $folder . $upload_image;
			list( $width, $height ) = getimagesize($filesave);
			$k = $width / $width_size;
			$newwidth = $width / $k;
			$newheight = $height / $k;
			$thumb = imagecreatetruecolor($newwidth, $newheight);
			$source = imagecreatefromjpeg($filesave);
			imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
			imagejpeg($thumb, $resize_image);
			imagedestroy($thumb);
			imagedestroy($source);
		}else{
		$VALUEFOTO_BENCANA3="";
	}
	


		if (!empty($_FILES['FOTO_BENCANA4'])) {

		$TYPEFOTO_BENCANA4 = $_FILES['FOTO_BENCANA4']['type'];
		$TYPEFOTO_BENCANA4 = explode("/", $TYPEFOTO_BENCANA4);
		$VALUEFOTO_BENCANA4 = sha1(date('ymdhis'))."FOTO_BENCANA4.".$TYPEFOTO_BENCANA4[1];
		$folder = "upload/";
		$upload_image = $VALUEFOTO_BENCANA4;
		$width_size = 1000;
		$filesave = $folder . $upload_image;
		move_uploaded_file($_FILES['FOTO_BENCANA4']['tmp_name'], $filesave);
		$resize_image = $folder . $upload_image;
		list( $width, $height ) = getimagesize($filesave);
		$k = $width / $width_size;
		$newwidth = $width / $k;
		$newheight = $height / $k;
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		$source = imagecreatefromjpeg($filesave);
		imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
		imagejpeg($thumb, $resize_image);
		imagedestroy($thumb);
		imagedestroy($source);
	}else{
		$VALUEFOTO_BENCANA4="";
	}
	

	if (!empty($_FILES['FOTO_BENCANA5'])) {
		$TYPEFOTO_BENCANA5 = $_FILES['FOTO_BENCANA5']['type'];
		$TYPEFOTO_BENCANA5 = explode("/", $TYPEFOTO_BENCANA5);
		$VALUEFOTO_BENCANA5 = sha1(date('ymdhis'))."FOTO_BENCANA5.".$TYPEFOTO_BENCANA5[1];
		$folder = "upload/";
		$upload_image = $VALUEFOTO_BENCANA5;
		$width_size = 1000;
		$filesave = $folder . $upload_image;
		move_uploaded_file($_FILES['FOTO_BENCANA5']['tmp_name'], $filesave);
		$resize_image = $folder . $upload_image;
		list( $width, $height ) = getimagesize($filesave);
		$k = $width / $width_size;
		$newwidth = $width / $k;
		$newheight = $height / $k;
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		$source = imagecreatefromjpeg($filesave);
		imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
		imagejpeg($thumb, $resize_image);
		imagedestroy($thumb);
		imagedestroy($source);
	}else{
		$VALUEFOTO_BENCANA5="";
	}
	



		$this->Bencanahd_model->insert_detail($ID_LAPORANHD,$NAMA_SALURAN,$PENYEBAB_KERUSAKAN,$JENIS_KERUSAKAN,$TANAH,$BATU,$BETON,$PINTU_AIR,$GORONG_GORONG,$LAIN_LAIN_KERUSAKAN,$LUAS_TERANCAM,$TINDAKAN_PERBAIKAN,$BIAYA_PERBAIKAN,$DIKERJAKAN_OLEH,$DIUSULKAN_OLEH,$FOTO_BENCANA,$VALUEFOTO_BENCANA1,$VALUEFOTO_BENCANA2,$VALUEFOTO_BENCANA3,$VALUEFOTO_BENCANA4,$VALUEFOTO_BENCANA5);


		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'EDIT ',strtoupper($_SESSION['username']));

		redirect($this->dataTable.'/edit/'.$ID_LAPORANHD);


	}


	function hapus_detail(){

		$ID_LAPORANHD	= $this->uri->segment(3);
		$ID_LAPORANDT	= $this->uri->segment(4);
		$FOTO_BENCANA1	= 'upload/'.$this->uri->segment(5);
		unlink($FOTO_BENCANA1);
		$FOTO_BENCANA2	= 'upload/'.$this->uri->segment(6);
		unlink($FOTO_BENCANA2);
		$FOTO_BENCANA3	= 'upload/'.$this->uri->segment(7);
		unlink($FOTO_BENCANA3);
		$FOTO_BENCANA4	= 'upload/'.$this->uri->segment(8);
		unlink($FOTO_BENCANA4);
		$FOTO_BENCANA5	= 'upload/'.$this->uri->segment(9);
		unlink($FOTO_BENCANA5);

		$this->Bencanahd_model->hapus_detail($ID_LAPORANHD,$ID_LAPORANDT);

		$this->Riwayat_model->insert('TABLE '.strtoupper($this->dataTable).' - DATA '.$DAERAH_IRIGASI,'HAPUS ',strtoupper($_SESSION['username']));

		redirect($this->dataTable.'/edit/'.$ID_LAPORANHD);

	}



	function detail(){

		$id =  $this->uri->segment(3);

		$hasil = $this->Bencanahd_model->getId($id);

		$data['bencanadt'] = $this->Bencanahd_model->getDataDetail($id);

$this->load->view('header',$data);

		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/view',$data);
	


	}

	function delete(){

		$ID_LAPORANHD =  $this->uri->segment(3);
		$this->Bencanahd_model->unpost_lampiran6($ID_LAPORANHD);
		redirect($this->dataTable.'/lampiran06');
	}

	function delete_all(){

		$ID_LAPORANHD =  $this->uri->segment(3);
		$this->Bencanahd_model->delete_all($ID_LAPORANHD);
		redirect($this->dataTable);
	}


	function delete_kontraktual(){

		$ID_LAPORANHD =  $this->uri->segment(3);
		$this->Bencanahd_model->delete_kontraktual($ID_LAPORANHD);
		redirect($this->dataTable.'/lampiran05');
	}

		function delete_kontraktual2(){

		$ID_LAPORANHD =  $this->uri->segment(3);
		$this->Bencanahd_model->delete_kontraktual2($ID_LAPORANHD);
		redirect($this->dataTable.'/lampiran052');
	}





	





	function update_lampiran6(){

		// print_r($_POST);

		$ID_LAPORANDT = $_POST['ID_LAPORANDT'];
		$KOLOM = $_POST['KOLOM'];

		if ($KOLOM==='TANGGAL_SELESAI') {
			# code...
			$VALUE = $this->Bencanahd_model->tglSql($_POST['VALUE']);
		}else{
			$VALUE = $_POST['VALUE'];
		}


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
		if ($KOLOM==='TANGGAL_AWAL' OR $KOLOM==='TANGGAL_AKHIR') {
			# code...
			$VALUE = $this->Bencanahd_model->tglSql($_POST['VALUE']);
		}else{
			$VALUE = $_POST['VALUE'];
		}

		$this->Bencanahd_model->update_lampiran5($ID_KONTRAKTUAL,$KOLOM,$VALUE);


	}

	

	function lampiran06(){

		$data['title']='SI JUET | Lampiran 06';
		$data['data'] = $this->Bencanahd_model->getList06();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/list_06',$data);

	}

	function edit_lampiran06(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['bencanadt'] = $this->Bencanahd_model->getDataDetail($id);

		$data['title']='SI JUET | Edit Lampiran 06';
		$this->load->view('header',$data);
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/edit_06',$data);
	

	}

	function view_lampiran06(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['data'] = $this->Bencanahd_model->getDataDetail($id);

		$data['title']='SI JUET | Detail Lampiran 06';

		$this->load->view('header',$data);
	
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/view_06',$data);

	}



	function lampiran05(){

		$data['title']='SI JUET | 05 P DARI BENCANA ALAM';

		$data['data'] = $this->Bencanahd_model->getList05();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/list_05',$data);
	

	}

	function edit_lampiran05(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp05'] = $this->Bencanahd_model->getDataDetail05($id);

		$data['title']='SI JUET | Edit 05 P';
		$this->load->view('header',$data);
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/edit_05',$data);
	

	}

	function selesai_05(){
		$ID_LAPORANHD = $_POST['ID_LAPORANHD'];
		$this->Bencanahd_model->selesai_05($ID_LAPORANHD);
		redirect($this->dataTable.'/lampiran05');

	}

	function selesai_052(){

		$ID_LAPORANHD = $_POST['ID_LAPORANHD'];
		$this->Bencanahd_model->selesai_052($ID_LAPORANHD);
		redirect($this->dataTable.'/lampiran052');


	}

	function selesai_06(){

		$ID_LAPORANHD = $_POST['ID_LAPORANHD'];
		$this->Bencanahd_model->selesai_06($ID_LAPORANHD);
		redirect($this->dataTable.'/');


	}

	




		function view_lampiran05(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp05'] = $this->Bencanahd_model->getDataDetail05($id);

		$this->load->view('header',$data);
		$data['title']='SI JUET | Detail 05 P';
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/view_05',$data);
	

	}

	function lampiran04(){

		$data['title']='SI JUET | 04 P SWAKELOLA';

		$data['data'] = $this->Bencanahd_model->getList04();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/list_04',$data);
	

	}

	function view_lampiran04(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp04'] = $this->Bencanahd_model->getDataDetail04($id);
		$data['title']='SI JUET | Detail 04 P';
		$this->load->view('header',$data);
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/view_04',$data);
	

	}


	function edit_lampiran04(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp04'] = $this->Bencanahd_model->getDataDetail04($id);

		$data['title']='SI JUET | Edit 04 P';
		$this->load->view('header',$data);
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/edit_04',$data);
	

	}

		function update_lampiran4(){

		$ID_SWAKELOLA = $_POST['ID_SWAKELOLA'];
		$KOLOM = $_POST['KOLOM'];
		

		if ($KOLOM==='TANGGAL_AWAL' OR $KOLOM==='TANGGAL_AKHIR') {
			# code...
			$VALUE = $this->Bencanahd_model->tglSql($_POST['VALUE']);
		}else{
			$VALUE = $_POST['VALUE'];
		}

		$this->Bencanahd_model->update_lampiran4($ID_SWAKELOLA,$KOLOM,$VALUE);


	}

	function selesai_04(){
		$ID_LAPORANHD = $_POST['ID_LAPORANHD'];
		$this->Bencanahd_model->selesai_04($ID_LAPORANHD);
		redirect($this->dataTable.'/lampiran04');

	}


	function delete_swakelola(){

		$ID_LAPORANHD =  $this->uri->segment(3);
		$this->Bencanahd_model->delete_swakelola($ID_LAPORANHD);
		redirect($this->dataTable.'/lampiran04');

	}




	function lampiran052(){
		$data['title']='SI JUET | 05 P DARI KERUSAKAN IRIGASI';
		$data['data'] = $this->Bencanahd_model->getList052();
		$this->load->view('header',$data);
		$this->load->view($this->dataTable.'/list_052',$data);
	

	}

	function view_lampiran052(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp052'] = $this->Bencanahd_model->getDataDetail052($id);

		$data['title']='SI JUET | Detail 05 P';
		$this->load->view('header',$data);
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/view_052',$data);
	

	}

	function edit_lampiran052(){

		$id =  $this->uri->segment(3);
		$hasil = $this->Bencanahd_model->getId($id);

		$data['lamp04'] = $this->Bencanahd_model->getDataDetail052($id);

		$data['title']='SI JUET | Edit 05 P';

		$this->load->view('header',$data);
		$data[$this->dataTable] = $hasil->row_array();
	
		$this->load->view($this->dataTable.'/edit_052',$data);
	

	}


		function update_lampiran52(){

		$ID_KONTRAKTUAL2 = $_POST['ID_KONTRAKTUAL2'];
		$KOLOM = $_POST['KOLOM'];
		

		if ($KOLOM==='TANGGAL_AWAL' OR $KOLOM==='TANGGAL_AKHIR') {
			# code...
			$VALUE = $this->Bencanahd_model->tglSql($_POST['VALUE']);
		}else{
			$VALUE = $_POST['VALUE'];
		}

		$this->Bencanahd_model->update_lampiran52($ID_KONTRAKTUAL2,$KOLOM,$VALUE);


	}






}