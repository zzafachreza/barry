/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.0.17-MariaDB : Database - bikinap2_sijuet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `data_bangunan` */

DROP TABLE IF EXISTS `data_bangunan`;

CREATE TABLE `data_bangunan` (
  `id_bangunan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bangunan` varchar(200) DEFAULT NULL,
  `id_ruas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_bangunan`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;

/*Data for the table `data_bangunan` */

LOCK TABLES `data_bangunan` WRITE;

insert  into `data_bangunan`(`id_bangunan`,`nama_bangunan`,`id_ruas`) values (1,'Jembatan 1a',1),(2,'Bangunan Ukur 1b',1),(3,'Jembatan Orang 1c',3),(4,'Jembatan Orang 1d',4),(5,'Gorong2 Pembuang 1e',5),(6,'Gorong2 Pembuang 1f',6),(7,'Penguras/Pelimpah 1g',7),(8,'Saluran tertutup 1h',8),(9,'Gorong2 Pembuang 1i',9),(10,'Gorong2 Pembuang 1j',10),(11,'Saluran tertutup 1k',11),(12,'Gorong2 Pembuang 1l',12),(13,'Oncoran 1.1',13),(14,'Sadap 1',14),(15,'Jembatan orang 2a',15),(16,'Penguras/Pelimpah 2b',16),(17,'Gorong2 Pembuang 2c',17),(18,'Talang Pembawa 2d',18),(19,'Gorong2 Pembuang 2e',19),(20,'Sadap 2',20),(21,'Saluran Tertutup 3a',21),(22,'Talang Lintas 3b',22),(23,'Sadap 3',23),(24,'Oncoran 4.1',24),(25,'Saluran Tertutup 4.2',25),(26,'Oncoran 4.2',25),(27,'Oncoran 4.3',26),(28,'Oncoran 4.4',27),(29,'Oncoran 4.5',28),(30,'Penguras 4b',29),(31,'Gorong2 Pembuang 4c',30),(32,'Sadap 4',31),(33,'Oncoran 5.1',32),(34,'Talang 5a',33),(35,'Gorong2 Pembuang 5b',34),(36,'Sadap 5',35),(37,'Oncoran 6.1',36),(38,'Gorong2 Pembuang 6a',36),(39,'Saluran Tertutup 6b',37),(40,'Oncoran 6.2',38),(41,'Gorong2 Pembuang 6c',39),(42,'Penguras/Pelimpah 2d',40),(43,'Sadap 6',41),(44,'Oncoran 7.1',42),(45,'Saluran Tertutup 7a',43),(46,'Oncoran 7.2',44),(47,'Gorong2 Pembuang 7b',45),(48,'Saluran Tertutup 7c',46),(49,'Sadap 7',47),(50,'Oncoran 8.1',48),(51,'Saluran Tertutup 8a',49),(52,'Saluran Tertutup 8b',50),(53,'Penguras/Pelimpah 8c',51),(54,'Gorong2 Pembuang 8d',51),(55,'Oncoran 8.2',52),(56,'Sadap 8',53),(57,'Oncoran 9.1',54),(58,'Talang Lintas 9a',55),(59,'Oncoran 9.2',56),(60,'Gorong2 Pembuang 9b',57),(61,'Oncoran 9.3',58),(62,'Sadap 9',59),(63,'Oncoran 10.1',60),(64,'Oncoran 10.2',61),(65,'Oncoran 10.3',62),(66,'Penguras/Pelimpah 10a',63),(67,'Gorong2 Pembuang 10b',64),(68,'Sadap 10',65),(69,'Sadap 11',66),(70,'Talang Pembawa 12a',67),(71,'Talang Lintas 12b',68),(72,'Jembatan Penyebrangan 12c',69),(73,'Sadap 12',70),(74,'Oncoran 13.1',71),(75,'Terjunan 13a',72),(76,'Terjunan 13b',73),(77,'Terjunan 13c',74),(78,'Sadap 13',75),(79,'Jembatan Orang/Terjunan 14.a',75),(80,'Got Miring 14.b',76),(81,'Jembatan Penyebrangan 14c',77),(82,'Jembatan Penyebrangan 14d',78),(83,'Oncoran 14.1',79),(84,'Bendung Suplesi 14e',80),(85,'Penguras/Pelimpah 14f',80),(86,'Saluran Tertutup 14g',81),(87,'Sadap 14',82),(88,'Talang Lintas 15a',83),(89,'Got Miring 15a',84),(90,'Talang Pembawa 15b',85),(91,'Saluran Tertutup 15c',86),(92,'Oncoran 15.1',87),(93,'Terjunan 15d',88),(94,'BANG…..',89),(95,'Penguras/Pelimpah 15d',90),(96,'Terjunan 15 e',91),(97,'Oncoran 15.2',92),(98,'Oncoran 15.3',93),(99,'Sadap 15',94),(100,'Gorong2 Pembuang 16a',95),(101,'Jembatan Penyebrangan 16b',96),(102,'Gorong2 Pembuang 16c',97),(103,'Penguras/Pelimpah 16d',97),(104,'Jembatan Penyebrangan 16e',97),(105,'Saluran Tertutup 16f',98),(106,'Sadap 16',99),(107,'Oncoran 17.1',100),(108,'Jembatan Penyebrangan 17a',101),(109,'Gorong2 Pembuang 17b',102),(110,'Oncoran 17.2',103),(111,'Penguras/Pelimpah 17c',104),(112,'Gorong2 Pembuang 17d',104),(113,'Sadap 17',105),(114,'Gorong2 Pembuang 18a',106),(115,'Sadap 18',107),(116,'Gorong2 Pembuang 19a',108),(117,'Gorong2 Pembuang 19b',109),(118,'Gorong2 Pembuang 19c',110),(119,'Penguras/Pelimpah 19c',111),(120,'Saluran Tertutup 19d',111),(121,'Sadap 19',112),(122,'Gorong2 Pembuang 20a',112),(123,'Gorong2 Pembuang 20b',113),(124,'Gorong2 Pembuang 20c',114),(125,'Gorong2 Pembuang 20d',115),(126,'Penguras 20d',115),(127,'Gorong2 Pembuang 20e',116),(128,'Gorong2 Pembuang 20f',117),(129,'Oncoran 20.1',117),(130,'Gorong2 Pembuang 20g',118),(131,'Oncoran 20.2',119),(132,'Gorong2 Pembuang 20h',119),(133,'Penguras/Pelimpah 20i',120),(134,'Gorong2 Pembuang 20i',120),(135,'Gorong2 Pembuang 20k',121),(136,'Sadap 20',122),(137,'Penguras 21a',123),(138,'Gorong2 Pembuang 21a',123),(139,'Saluran tertutup 21b',124),(140,'Jembatan Penyebrangan 21c',125),(141,'Gorong2 Pembuang 21d',125),(142,'Oncoran 21.1',126),(143,'Gorong2 Pembuang 21e',126),(144,'Gorong2 Pembuang 21f',126),(145,'Saluran tertutup 21g',127),(146,'Gorong2 Pembuang 21h',127),(147,'Gorong2 Pembuang 21i',128),(148,'Terjunan 21 j',129),(149,'Penguras 21k',130),(150,'Gorong2 Pembuang 21l',131),(151,'Sadap 21',132),(152,'Jembatan Penyebrangan 22a',133),(153,'Oncoran 22.1',134),(154,'Jembatan Penyebrangan 22b',135),(155,'Oncoran 22.2',136),(156,'Gorong2 Pembuang 22b',137),(157,'Sadap 22',138),(158,'Jembatan Penyebrangan 23a',139),(159,'Oncoran 23.1',140),(160,'Gorong2 Pembuang 23a',141),(161,'Gorong2 Pembuang 23b',142),(162,'Sadap 23',143),(163,'Sadap 24',144);

UNLOCK TABLES;

/*Table structure for table `data_bencanadt` */

DROP TABLE IF EXISTS `data_bencanadt`;

CREATE TABLE `data_bencanadt` (
  `ID_LAPORANDT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LAPORANHD` varchar(200) DEFAULT NULL,
  `NAMA_SALURAN` text,
  `PENYEBAB_KERUSAKAN` text,
  `JENIS_KERUSAKAN` text,
  `TANAH` float DEFAULT '0',
  `TANAH_B` float DEFAULT '0',
  `BATU` float DEFAULT '0',
  `BATU_B` float DEFAULT '0',
  `BETON` float DEFAULT '0',
  `BETON_B` float DEFAULT '0',
  `PINTU_AIR` float DEFAULT '0',
  `PINTU_AIR_B` float DEFAULT '0',
  `GORONG_GORONG` float DEFAULT '0',
  `GORONG_GORONG_B` float DEFAULT '0',
  `LAIN_LAIN_KERUSAKAN` varchar(200) DEFAULT NULL,
  `LAIN_LAIN_KERUSAKAN_B` float DEFAULT '0',
  `LUAS_TERANCAM` float DEFAULT '0',
  `LUAS_TERANCAM_B` float DEFAULT '0',
  `TINDAKAN_PERBAIKAN` text,
  `BIAYA_PERBAIKAN` float DEFAULT '0',
  `DIKERJAKAN_OLEH` text,
  `DIUSULKAN_OLEH` text,
  `FOTO_BEFORE` text,
  `TOLAK_UKUR` float DEFAULT '0',
  `TANGGAL_SELESAI` date DEFAULT NULL,
  `SATUAN` float DEFAULT '0',
  `VOLUME` float DEFAULT '0',
  `ANGGRAN_BIAYA` float DEFAULT '0',
  `RENCANA` text,
  `KETERANGAN` text,
  `FOTO_BENCANA` varchar(50) DEFAULT NULL,
  `FOTO_BENCANA1` text,
  `FOTO_BENCANA2` text,
  `FOTO_BENCANA3` text,
  `FOTO_BENCANA4` text,
  `FOTO_BENCANA5` text,
  PRIMARY KEY (`ID_LAPORANDT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_bencanadt` */

LOCK TABLES `data_bencanadt` WRITE;

UNLOCK TABLES;

/*Table structure for table `data_bencanahd` */

DROP TABLE IF EXISTS `data_bencanahd`;

CREATE TABLE `data_bencanahd` (
  `ID_LAPORANHD` varchar(200) NOT NULL,
  `TANGGAL` date DEFAULT NULL,
  `DAERAH_IRIGASI` varchar(200) DEFAULT NULL,
  `LUAS_AREA_IRIGASI` float DEFAULT NULL,
  `TINGKATAN_IRIGASI` varchar(100) DEFAULT NULL,
  `KABUPATEN` varchar(200) DEFAULT NULL,
  `RANTING` varchar(200) DEFAULT NULL,
  `STATUS_LAPORANHD` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_LAPORANHD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_bencanahd` */

LOCK TABLES `data_bencanahd` WRITE;

insert  into `data_bencanahd`(`ID_LAPORANHD`,`TANGGAL`,`DAERAH_IRIGASI`,`LUAS_AREA_IRIGASI`,`TINGKATAN_IRIGASI`,`KABUPATEN`,`RANTING`,`STATUS_LAPORANHD`) values ('e923ac22262bc08133cf6776afbd7f0802b93365','2020-10-01','CIMANDIRI',14,'T','SUKABUMI','DIDIN','DONE');

UNLOCK TABLES;

/*Table structure for table `data_kontraktual` */

DROP TABLE IF EXISTS `data_kontraktual`;

CREATE TABLE `data_kontraktual` (
  `ID_KONTRAKTUAL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LAPORANHD` varchar(200) DEFAULT NULL,
  `DAERAH_IRIGASI` varchar(150) DEFAULT NULL,
  `NAMA_SALURAN` text,
  `JENIS` text,
  `KABUPATEN` text,
  `BIAYA` float DEFAULT '0',
  `KETERANGAN` text,
  `BANYAKNYA_PEKERJAAN` float DEFAULT '0',
  `STATUS_KONTRAKTUAL` varchar(200) DEFAULT NULL,
  `BALAI` text,
  `TANGGAL_KONTRAKTUAL` date DEFAULT NULL,
  `TANGGAL_AWAL` date DEFAULT NULL,
  `TANGGAL_AKHIR` date DEFAULT NULL,
  `STATUS_D` varchar(100) DEFAULT 'MENUNGGU KONFIRMASI',
  PRIMARY KEY (`ID_KONTRAKTUAL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_kontraktual` */

LOCK TABLES `data_kontraktual` WRITE;

UNLOCK TABLES;

/*Table structure for table `data_kontraktual2` */

DROP TABLE IF EXISTS `data_kontraktual2`;

CREATE TABLE `data_kontraktual2` (
  `ID_KONTRAKTUAL2` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LAPORANHD` varchar(100) DEFAULT NULL,
  `ID_LAPORANDT` int(11) DEFAULT NULL,
  `TOLAK_UKUR` float DEFAULT '0',
  `UPAH` float DEFAULT '0',
  `BAHAN` float DEFAULT '0',
  `JUMLAH` float DEFAULT '0',
  `TANGGAL_KONTRAKTUAL2` date DEFAULT NULL,
  `TANGGAL_AWAL` date DEFAULT NULL,
  `TANGGAL_AKHIR` date DEFAULT NULL,
  `KETERANGAN` text,
  `BALAI` varchar(100) DEFAULT NULL,
  `STATUS_KONTRAKTUAL2` varchar(100) DEFAULT 'OPEN',
  `STATUS_D` varchar(100) DEFAULT 'MENUNGGU KONFIRMASI',
  PRIMARY KEY (`ID_KONTRAKTUAL2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_kontraktual2` */

LOCK TABLES `data_kontraktual2` WRITE;

UNLOCK TABLES;

/*Table structure for table `data_laporandt` */

DROP TABLE IF EXISTS `data_laporandt`;

CREATE TABLE `data_laporandt` (
  `ID_LAPORANDT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LAPORANHD` varchar(200) DEFAULT NULL,
  `ID_BANGUNAN` int(11) DEFAULT NULL,
  `BOCORAN` varchar(100) DEFAULT NULL,
  `BOCORAN_M` float DEFAULT '0',
  `BOCORAN_T` char(1) DEFAULT NULL,
  `BOCORAN_B` float DEFAULT '0',
  `RUSAK` varchar(100) DEFAULT NULL,
  `RUSAK_M` float DEFAULT '0',
  `RUSAK_T` char(1) DEFAULT NULL,
  `RUSAK_B` float DEFAULT '0',
  `LONGSORAN` varchar(100) DEFAULT NULL,
  `LONGSORAN_M` float DEFAULT '0',
  `LONGSORAN_T` char(1) DEFAULT NULL,
  `LONGSORAN_B` float DEFAULT '0',
  `TERSUMBAT` varchar(100) DEFAULT NULL,
  `TERSUMBAT_M` float DEFAULT '0',
  `TERSUMBAT_T` char(1) DEFAULT NULL,
  `TERSUMBAT_B` float DEFAULT '0',
  `RETAK` varchar(100) DEFAULT NULL,
  `RETAK_M` float DEFAULT '0',
  `RETAK_T` char(1) DEFAULT NULL,
  `RETAK_B` float DEFAULT '0',
  `PINTU_RUSAK` varchar(100) DEFAULT NULL,
  `PINTU_RUSAK_M` float DEFAULT '0',
  `PINTU_RUSAK_T` char(1) DEFAULT NULL,
  `PINTU_RUSAK_B` float DEFAULT '0',
  `SEDIMEN` varchar(100) DEFAULT NULL,
  `SEDIMEN_M` float DEFAULT '0',
  `SEDIMEN_T` char(1) DEFAULT NULL,
  `SEDIMEN_B` float DEFAULT '0',
  `LAIN_LAIN` text,
  `DIKERJAKAN` varchar(100) DEFAULT NULL,
  `USULAN` text,
  `LANJUTAN` text,
  `AREA_BAWAH` varchar(100) DEFAULT NULL,
  `DESA` varchar(100) DEFAULT NULL,
  `ESTIMASI_RUGI` float DEFAULT '0',
  `ESTIMASI_PERBAIKAN` float DEFAULT '0',
  `PRIORITAS` varchar(100) DEFAULT NULL,
  `STATUS_LAPORANDT` varchar(100) DEFAULT NULL,
  `FOTO_BEFORE` varchar(50) DEFAULT 'FOTO_BEFORE1',
  `FOTO_BEFORE1` text,
  `FOTO_BEFORE2` text,
  `FOTO_BEFORE3` text,
  `FOTO_BEFORE4` text,
  `FOTO_BEFORE5` text,
  `FOTO_AFTER` varchar(50) DEFAULT 'FOTO_AFTER1',
  `FOTO_AFTER1` text,
  `FOTO_AFTER2` text,
  `FOTO_AFTER3` text,
  `FOTO_AFTER4` text,
  `FOTO_AFTER5` text,
  `PENYEBAB_KERUSAKAN` text,
  `JENIS_KERUSAKAN` text,
  `TANAH` float DEFAULT '0',
  `BATU` float DEFAULT '0',
  `BETON` float DEFAULT '0',
  `PINTU_AIR` float DEFAULT '0',
  `GORONG_GORONG` float DEFAULT '0',
  `LAIN_LAIN_KERUSAKAN` text,
  `LUAS_TERANCAM` float DEFAULT '0',
  `TINDAKAN_PERBAIKAN` text,
  `BIAYA_PERBAIKAN` float DEFAULT '0',
  `DIKERJAKAN_OLEH` text,
  `DIUSULKAN_OLEH` text,
  PRIMARY KEY (`ID_LAPORANDT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_laporandt` */

LOCK TABLES `data_laporandt` WRITE;

UNLOCK TABLES;

/*Table structure for table `data_laporanhd` */

DROP TABLE IF EXISTS `data_laporanhd`;

CREATE TABLE `data_laporanhd` (
  `ID_LAPORANHD` varchar(200) NOT NULL,
  `TANGGAL` date DEFAULT NULL,
  `DAERAH_IRIGASI` varchar(200) DEFAULT NULL,
  `LUAS_AREA_IRIGASI` float DEFAULT NULL,
  `TINGKATAN_IRIGASI` varchar(100) DEFAULT NULL,
  `KABUPATEN` varchar(200) DEFAULT NULL,
  `RANTING` varchar(200) DEFAULT NULL,
  `MANTRI` varchar(150) DEFAULT NULL,
  `STATUS_LAPORANHD` varchar(100) DEFAULT NULL,
  `STATUS_ALL` varchar(200) DEFAULT NULL,
  `TANGGAL_1` date DEFAULT NULL,
  `TANGGAL_2` date DEFAULT NULL,
  `TANGGAL_3` date DEFAULT NULL,
  PRIMARY KEY (`ID_LAPORANHD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_laporanhd` */

LOCK TABLES `data_laporanhd` WRITE;

UNLOCK TABLES;

/*Table structure for table `data_riwayat` */

DROP TABLE IF EXISTS `data_riwayat`;

CREATE TABLE `data_riwayat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DATA_TABLE` varchar(100) DEFAULT NULL,
  `AKSI` varchar(100) DEFAULT NULL,
  `OLEH` varchar(100) DEFAULT NULL,
  `TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_riwayat` */

LOCK TABLES `data_riwayat` WRITE;

UNLOCK TABLES;

/*Table structure for table `data_ruas` */

DROP TABLE IF EXISTS `data_ruas`;

CREATE TABLE `data_ruas` (
  `id_ruas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruas` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_ruas`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

/*Data for the table `data_ruas` */

LOCK TABLES `data_ruas` WRITE;

insert  into `data_ruas`(`id_ruas`,`nama_ruas`) values (1,'Hm 0 - Hm 1'),(2,'Hm 0 - Hm 1'),(3,'Hm 2 - Hm 3'),(4,'Hm 3 - Hm 4'),(5,'Hm 5 - Hm 6'),(6,'Hm 6 - Hm 7'),(7,'Hm 8 - Hm 9'),(8,'Hm 10 - Hm 11'),(9,'Hm 13 - Hm 14'),(10,'Hm 15 - Hm 16'),(11,'Hm 25 '),(12,'Hm 27 - Hm 28'),(13,'Hm 31 - Hm 32'),(14,'Hm 32 - Hm 33'),(15,'Hm 33'),(16,'Hm 34'),(17,'Hm 34 - Hm 35'),(18,'Hm 35'),(19,'Hm 35 - Hm 36'),(20,'Hm 36 - Hm 37'),(21,'Hm 38 - Hm 45'),(22,'Hm 45 - Hm 46'),(23,'Hm 46 - Hm 47'),(24,'Hm 47 - Hm 48'),(25,'Hm 49'),(26,'Hm 49 - Hm 50'),(27,'Hm 50'),(28,'Hm 50 - Hm 51'),(29,'Hm 53'),(30,'Hm 53 - Hm 54'),(31,'Hm 54 - Hm 55'),(32,'Hm 55'),(33,'Hm 56'),(34,'Hm 56 - Hm 57'),(35,'Hm 57'),(36,'Hm 58'),(37,'Hm 58 - Hm 59'),(38,'Hm 59'),(39,'Hm 59 - Hm 60'),(40,'Hm 60'),(41,'Hm 61'),(42,'Hm 62'),(43,'Hm 63'),(44,'Hm 63 - Hm 64'),(45,'Hm 64'),(46,'Hm 65 - Hm 68'),(47,'Hm 71'),(48,'Hm 76'),(49,'Hm 79 - Hm 80'),(50,'Hm 81 - Hm 82'),(51,'Hm 82'),(52,'Hm 83'),(53,'Hm 88'),(54,'Hm 90'),(55,'Hm 92'),(56,'Hm 93'),(57,'Hm 94'),(58,'Hm 94 - Hm 95'),(59,'Hm 95'),(60,'Hm 96'),(61,'Hm 97 - Hm 98'),(62,'Hm 98 - Hm 99'),(63,'Hm 100'),(64,'Hm 105'),(65,'Hm 108'),(66,'Hm 110 - Hm 111'),(67,'Hm 112 - Hm 113'),(68,'Hm 114'),(69,'Hm 115'),(70,'Hm 118'),(71,'Hm 121'),(72,'Hm 125'),(73,'Hm 126'),(74,'Hm 126 - Hm 127'),(75,'Hm 127'),(76,'Hm 129'),(77,'Hm 129 - Hm 130'),(78,'Hm 139 - Hm 140'),(79,'Hm 140'),(80,'Hm 143'),(81,'Hm 144 - Hm 145'),(82,'Hm 145 - Hm 146'),(83,'Hm 148 - Hm 149'),(84,'Hm 152'),(85,'Hm 152 - Hm 153'),(86,'Hm 153 - Hm 154'),(87,'Hm 155'),(88,'Hm 156'),(89,'Hm 156 - Hm 157'),(90,'Hm 157'),(91,'Hm 158'),(92,'Hm 159'),(93,'Hm 161'),(94,'Hm 163'),(95,'Hm 165'),(96,'Hm 166'),(97,'Hm 167'),(98,'Hm 167 - Hm 168'),(99,'Hm 169 - Hm 170'),(100,'Hm 172'),(101,'Hm 173'),(102,'Hm 175'),(103,'Hm 179'),(104,'Hm 179 - Hm 180'),(105,'Hm 180 - Hm 181'),(106,'Hm 182'),(107,'Hm 183'),(108,'Hm 184'),(109,'Hm 185'),(110,'Hm 189 - Hm 190'),(111,'Hm 190'),(112,'Hm 191'),(113,'Hm 192'),(114,'Hm 193'),(115,'Hm 194'),(116,'Hm 195'),(117,'Hm 196'),(118,'Hm 196 - Hm 197'),(119,'Hm 198'),(120,'Hm 200'),(121,'Hm 204'),(122,'Hm 206'),(123,'Hm 208'),(124,'Hm 208 - Hm 209'),(125,'Hm 209'),(126,'Hm 210'),(127,'Hm 210 - Hm 211'),(128,'Hm 211'),(129,'Hm 212 - Hm 213'),(130,'Hm 213'),(131,'Hm 213 - Hm 214'),(132,'Hm 215'),(133,'Hm 216'),(134,'Hm 217'),(135,'Hm 217 - Hm 218'),(136,'Hm 218'),(137,'Hm 218 - Hm 219'),(138,'Hm 220'),(139,'Hm 220 - Hm 221'),(140,'Hm 221'),(141,'Hm 223'),(142,'Hm 224'),(143,'Hm 225'),(144,'Hm 234');

UNLOCK TABLES;

/*Table structure for table `data_swakelola` */

DROP TABLE IF EXISTS `data_swakelola`;

CREATE TABLE `data_swakelola` (
  `ID_SWAKELOLA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LAPORANHD` varchar(100) DEFAULT NULL,
  `ID_LAPORANDT` int(11) DEFAULT NULL,
  `TOLAK_UKUR` float DEFAULT '0',
  `UPAH` float DEFAULT '0',
  `BAHAN` float DEFAULT '0',
  `JUMLAH` float DEFAULT '0',
  `TANGGAL_SWAKELOLA` date DEFAULT NULL,
  `TANGGAL_AWAL` date DEFAULT NULL,
  `TANGGAL_AKHIR` date DEFAULT NULL,
  `KETERANGAN` text,
  `BALAI` varchar(100) DEFAULT NULL,
  `STATUS_SWAKELOLA` varchar(100) DEFAULT 'OPEN',
  `STATUS_D` varchar(100) DEFAULT 'MENUNGGU KONFIRMASI',
  PRIMARY KEY (`ID_SWAKELOLA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_swakelola` */

LOCK TABLES `data_swakelola` WRITE;

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nip` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id`,`username`,`password`,`level`,`nama_lengkap`,`nip`) values (1,'reza','40bd001563085fc35165329ea1ff5c5ecbdbbeef','ADMIN','Fachreza Maulana','14946046464'),(33,'didin','40bd001563085fc35165329ea1ff5c5ecbdbbeef','MANTRI','didin','18461688674646'),(34,'asep','40bd001563085fc35165329ea1ff5c5ecbdbbeef','SUP','asep','81132131683'),(36,'eko','40bd001563085fc35165329ea1ff5c5ecbdbbeef','SEKSI IRIGASI','eko','55168616446'),(37,'agus','40bd001563085fc35165329ea1ff5c5ecbdbbeef','BIDANG PERENCANAAN','agus','1237165');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
