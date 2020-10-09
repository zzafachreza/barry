<?php

class Bencanahd_model extends CI_Model{

	function tglSql($tgl){
		$tgl = explode("/", $tgl);
		return $tgl[2]."-".$tgl[1]."-".$tgl[0];
	}


	function getData(){
		// $sql ="describe data_laporandt";
		$sql ="SELECT * FROM data_bencanahd";

		$data = $this->db->query($sql);
		return $data;
	}

	 function insert($ID_LAPORANHD,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING){


	 $sql ="INSERT INTO data_bencanahd(ID_LAPORANHD,TANGGAL,DAERAH_IRIGASI,LUAS_AREA_IRIGASI,TINGKATAN_IRIGASI,KABUPATEN,RANTING,STATUS_LAPORANHD) values('$ID_LAPORANHD','$TANGGAL','$DAERAH_IRIGASI','$LUAS_AREA_IRIGASI','$TINGKATAN_IRIGASI','$KABUPATEN','$RANTING','OPEN')";

	 $this->db->query($sql);	
	}


	 function insert_detail($ID_LAPORANHD,$NAMA_SALURAN,$PENYEBAB_KERUSAKAN,$JENIS_KERUSAKAN,$TANAH,$BATU,$BETON,$PINTU_AIR,$GORONG_GORONG,$LAIN_LAIN_KERUSAKAN,$LUAS_TERANCAM,$TINDAKAN_PERBAIKAN,$BIAYA_PERBAIKAN,$DIKERJAKAN_OLEH,$DIUSULKAN_OLEH){


	 $sql ="INSERT INTO data_bencanadt(ID_LAPORANHD,NAMA_SALURAN,PENYEBAB_KERUSAKAN,JENIS_KERUSAKAN,TANAH,BATU,BETON,PINTU_AIR,GORONG_GORONG,LAIN_LAIN_KERUSAKAN,LUAS_TERANCAM,TINDAKAN_PERBAIKAN,BIAYA_PERBAIKAN,DIKERJAKAN_OLEH,DIUSULKAN_OLEH) VALUES('$ID_LAPORANHD','$NAMA_SALURAN','$PENYEBAB_KERUSAKAN','$JENIS_KERUSAKAN','$TANAH','$BATU','$BETON','$PINTU_AIR','$GORONG_GORONG','$LAIN_LAIN_KERUSAKAN','$LUAS_TERANCAM','$TINDAKAN_PERBAIKAN','$BIAYA_PERBAIKAN','$DIKERJAKAN_OLEH','$DIUSULKAN_OLEH');";

	 $this->db->query($sql);	
	}


		function getId($id){
		$sql = "SELECT * FROM data_bencanahd WHERE  ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function update($id,$TANGGAL,$DAERAH_IRIGASI,$LUAS_AREA_IRIGASI,$TINGKATAN_IRIGASI,$KABUPATEN,$RANTING){

	
    $sql= "UPDATE data_bencanahd SET TANGGAL='$TANGGAL',DAERAH_IRIGASI='$DAERAH_IRIGASI',LUAS_AREA_IRIGASI='$LUAS_AREA_IRIGASI',TINGKATAN_IRIGASI='$TINGKATAN_IRIGASI',KABUPATEN='$KABUPATEN',RANTING='$RANTING'  WHERE ID_LAPORANHD='$id'";
		$this->db->query($sql);	
	}

	function getDataDetail($id){
		$sql="SELECT*FROM `data_bencanadt` INNER JOIN `data_bencanahd` ON (`data_bencanahd`.`ID_LAPORANHD` = `data_bencanadt`.`ID_LAPORANHD`) WHERE data_bencanadt.ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}


	function getDataDetail05($id){
		$sql="SELECT*FROM data_kontraktual WHERE ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function getDataDetail04($id){
		$sql="SELECT*FROM data_swakelola WHERE ID_LAPORANHD='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function hapus_detail($ID_LAPORANHD,$ID_LAPORANDT){

		$sql="DELETE FROM data_bencanadt WHERE ID_LAPORANHD='$ID_LAPORANHD' AND ID_LAPORANDT='$ID_LAPORANDT'";
		$this->db->query($sql);
	
	}

	function update_lampiran6($ID_LAPORANDT,$KOLOM,$VALUES){
		$sql="UPDATE data_bencanadt SET $KOLOM='$VALUES' WHERE ID_LAPORANDT='$ID_LAPORANDT'";
		$this->db->query($sql);
	}

	function update_lampiran4($ID_SWAKELOLA,$KOLOM,$VALUES){
		if ($KOLOM==='BALAI') {
			# code...
			$sql="UPDATE data_swakelola SET $KOLOM='$VALUES' WHERE ID_LAPORANHD='$ID_SWAKELOLA'";
		}else{
			$sql="UPDATE data_swakelola SET $KOLOM='$VALUES' WHERE ID_SWAKELOLA='$ID_SWAKELOLA'";
		}
		$this->db->query($sql);
	}


	function add_05($ID_LAPORANHD){

		$sql2= "UPDATE data_bencanahd SET STATUS_LAPORANHD='DONE' WHERE ID_LAPORANHD='$ID_LAPORANHD'";

		$sql="INSERT INTO data_kontraktual
            (`ID_LAPORANHD`,
             `DAERAH_IRIGASI`,
             `NAMA_SALURAN`,
             `JENIS`,
             `KABUPATEN`,
             `BIAYA`,
             `KETERANGAN`)
				SELECT data_bencanadt.ID_LAPORANHD,DAERAH_IRIGASI,NAMA_SALURAN,JENIS_KERUSAKAN,KABUPATEN,BIAYA_PERBAIKAN,KETERANGAN FROM `data_bencanadt` INNER JOIN `data_bencanahd` ON (`data_bencanahd`.`ID_LAPORANHD` = `data_bencanadt`.`ID_LAPORANHD`) 
				WHERE data_bencanadt.ID_LAPORANHD='$ID_LAPORANHD'";
				$this->db->query($sql);
				$this->db->query($sql2);
	}

	function update_lampiran5($ID_KONTRAKTUAL,$KOLOM,$VALUES){
		if ($KOLOM==='BALAI') {
			# code...
			$sql="UPDATE data_kontraktual SET $KOLOM='$VALUES' WHERE ID_LAPORANHD='$ID_KONTRAKTUAL'";
		}else{
			$sql="UPDATE data_kontraktual SET $KOLOM='$VALUES' WHERE ID_KONTRAKTUAL='$ID_KONTRAKTUAL'";
		}
		
		$this->db->query($sql);
	}


	function selesai_05($ID_LAPORANHD){
		# code...

		$sql= "UPDATE data_kontraktual SET STATUS_KONTRAKTUAL='DONE' WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);

	}


	function getList06(){
		$sql="SELECT*FROM `data_bencanadt` INNER JOIN `data_bencanahd` ON (`data_bencanahd`.`ID_LAPORANHD` = `data_bencanadt`.`ID_LAPORANHD`) GROUP BY data_bencanahd.ID_LAPORANHD";
		$data = $this->db->query($sql);
		return $data; 
	}

	function getList05(){
		$sql="SELECT * FROM data_kontraktual GROUP BY ID_LAPORANHD";
		$data = $this->db->query($sql);
		return $data; 
	}

	function getList04(){
		$sql="SELECT * FROM data_swakelola GROUP BY ID_LAPORANHD";
		$data = $this->db->query($sql);
		return $data; 
	}

	function selesai_04($ID_LAPORANHD){
		echo $sql= "UPDATE data_swakelola SET STATUS_SWAKELOLA='DONE' WHERE ID_LAPORANHD='$ID_LAPORANHD'";
		$this->db->query($sql);
	}


	




}