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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bikinap2_sijuet` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bikinap2_sijuet`;

/*Table structure for table `data_bangunan` */

DROP TABLE IF EXISTS `data_bangunan`;

CREATE TABLE `data_bangunan` (
  `id_bangunan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bangunan` varchar(200) DEFAULT NULL,
  `id_ruas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_bangunan`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;

/*Data for the table `data_bangunan` */

insert  into `data_bangunan`(`id_bangunan`,`nama_bangunan`,`id_ruas`) values (1,'Jembatan 1a',1),(2,'Bangunan Ukur 1b',1),(3,'Jembatan Orang 1c',3),(4,'Jembatan Orang 1d',4),(5,'Gorong2 Pembuang 1e',5),(6,'Gorong2 Pembuang 1f',6),(7,'Penguras/Pelimpah 1g',7),(8,'Saluran tertutup 1h',8),(9,'Gorong2 Pembuang 1i',9),(10,'Gorong2 Pembuang 1j',10),(11,'Saluran tertutup 1k',11),(12,'Gorong2 Pembuang 1l',12),(13,'Oncoran 1.1',13),(14,'Sadap 1',14),(15,'Jembatan orang 2a',15),(16,'Penguras/Pelimpah 2b',16),(17,'Gorong2 Pembuang 2c',17),(18,'Talang Pembawa 2d',18),(19,'Gorong2 Pembuang 2e',19),(20,'Sadap 2',20),(21,'Saluran Tertutup 3a',21),(22,'Talang Lintas 3b',22),(23,'Sadap 3',23),(24,'Oncoran 4.1',24),(25,'Saluran Tertutup 4.2',25),(26,'Oncoran 4.2',25),(27,'Oncoran 4.3',26),(28,'Oncoran 4.4',27),(29,'Oncoran 4.5',28),(30,'Penguras 4b',29),(31,'Gorong2 Pembuang 4c',30),(32,'Sadap 4',31),(33,'Oncoran 5.1',32),(34,'Talang 5a',33),(35,'Gorong2 Pembuang 5b',34),(36,'Sadap 5',35),(37,'Oncoran 6.1',36),(38,'Gorong2 Pembuang 6a',36),(39,'Saluran Tertutup 6b',37),(40,'Oncoran 6.2',38),(41,'Gorong2 Pembuang 6c',39),(42,'Penguras/Pelimpah 2d',40),(43,'Sadap 6',41),(44,'Oncoran 7.1',42),(45,'Saluran Tertutup 7a',43),(46,'Oncoran 7.2',44),(47,'Gorong2 Pembuang 7b',45),(48,'Saluran Tertutup 7c',46),(49,'Sadap 7',47),(50,'Oncoran 8.1',48),(51,'Saluran Tertutup 8a',49),(52,'Saluran Tertutup 8b',50),(53,'Penguras/Pelimpah 8c',51),(54,'Gorong2 Pembuang 8d',51),(55,'Oncoran 8.2',52),(56,'Sadap 8',53),(57,'Oncoran 9.1',54),(58,'Talang Lintas 9a',55),(59,'Oncoran 9.2',56),(60,'Gorong2 Pembuang 9b',57),(61,'Oncoran 9.3',58),(62,'Sadap 9',59),(63,'Oncoran 10.1',60),(64,'Oncoran 10.2',61),(65,'Oncoran 10.3',62),(66,'Penguras/Pelimpah 10a',63),(67,'Gorong2 Pembuang 10b',64),(68,'Sadap 10',65),(69,'Sadap 11',66),(70,'Talang Pembawa 12a',67),(71,'Talang Lintas 12b',68),(72,'Jembatan Penyebrangan 12c',69),(73,'Sadap 12',70),(74,'Oncoran 13.1',71),(75,'Terjunan 13a',72),(76,'Terjunan 13b',73),(77,'Terjunan 13c',74),(78,'Sadap 13',75),(79,'Jembatan Orang/Terjunan 14.a',75),(80,'Got Miring 14.b',76),(81,'Jembatan Penyebrangan 14c',77),(82,'Jembatan Penyebrangan 14d',78),(83,'Oncoran 14.1',79),(84,'Bendung Suplesi 14e',80),(85,'Penguras/Pelimpah 14f',80),(86,'Saluran Tertutup 14g',81),(87,'Sadap 14',82),(88,'Talang Lintas 15a',83),(89,'Got Miring 15a',84),(90,'Talang Pembawa 15b',85),(91,'Saluran Tertutup 15c',86),(92,'Oncoran 15.1',87),(93,'Terjunan 15d',88),(94,'BANG…..',89),(95,'Penguras/Pelimpah 15d',90),(96,'Terjunan 15 e',91),(97,'Oncoran 15.2',92),(98,'Oncoran 15.3',93),(99,'Sadap 15',94),(100,'Gorong2 Pembuang 16a',95),(101,'Jembatan Penyebrangan 16b',96),(102,'Gorong2 Pembuang 16c',97),(103,'Penguras/Pelimpah 16d',97),(104,'Jembatan Penyebrangan 16e',97),(105,'Saluran Tertutup 16f',98),(106,'Sadap 16',99),(107,'Oncoran 17.1',100),(108,'Jembatan Penyebrangan 17a',101),(109,'Gorong2 Pembuang 17b',102),(110,'Oncoran 17.2',103),(111,'Penguras/Pelimpah 17c',104),(112,'Gorong2 Pembuang 17d',104),(113,'Sadap 17',105),(114,'Gorong2 Pembuang 18a',106),(115,'Sadap 18',107),(116,'Gorong2 Pembuang 19a',108),(117,'Gorong2 Pembuang 19b',109),(118,'Gorong2 Pembuang 19c',110),(119,'Penguras/Pelimpah 19c',111),(120,'Saluran Tertutup 19d',111),(121,'Sadap 19',112),(122,'Gorong2 Pembuang 20a',112),(123,'Gorong2 Pembuang 20b',113),(124,'Gorong2 Pembuang 20c',114),(125,'Gorong2 Pembuang 20d',115),(126,'Penguras 20d',115),(127,'Gorong2 Pembuang 20e',116),(128,'Gorong2 Pembuang 20f',117),(129,'Oncoran 20.1',117),(130,'Gorong2 Pembuang 20g',118),(131,'Oncoran 20.2',119),(132,'Gorong2 Pembuang 20h',119),(133,'Penguras/Pelimpah 20i',120),(134,'Gorong2 Pembuang 20i',120),(135,'Gorong2 Pembuang 20k',121),(136,'Sadap 20',122),(137,'Penguras 21a',123),(138,'Gorong2 Pembuang 21a',123),(139,'Saluran tertutup 21b',124),(140,'Jembatan Penyebrangan 21c',125),(141,'Gorong2 Pembuang 21d',125),(142,'Oncoran 21.1',126),(143,'Gorong2 Pembuang 21e',126),(144,'Gorong2 Pembuang 21f',126),(145,'Saluran tertutup 21g',127),(146,'Gorong2 Pembuang 21h',127),(147,'Gorong2 Pembuang 21i',128),(148,'Terjunan 21 j',129),(149,'Penguras 21k',130),(150,'Gorong2 Pembuang 21l',131),(151,'Sadap 21',132),(152,'Jembatan Penyebrangan 22a',133),(153,'Oncoran 22.1',134),(154,'Jembatan Penyebrangan 22b',135),(155,'Oncoran 22.2',136),(156,'Gorong2 Pembuang 22b',137),(157,'Sadap 22',138),(158,'Jembatan Penyebrangan 23a',139),(159,'Oncoran 23.1',140),(160,'Gorong2 Pembuang 23a',141),(161,'Gorong2 Pembuang 23b',142),(162,'Sadap 23',143),(163,'Sadap 24',144);

/*Table structure for table `data_laporandt` */

DROP TABLE IF EXISTS `data_laporandt`;

CREATE TABLE `data_laporandt` (
  `ID_LAPORANDT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LAPORANHD` varchar(200) DEFAULT NULL,
  `ID_BANGUNAN` int(11) DEFAULT NULL,
  `BOCORAN` varchar(100) DEFAULT NULL,
  `BOCORAN_M` float DEFAULT '0',
  `RUSAK` varchar(100) DEFAULT NULL,
  `RUSAK_M` float DEFAULT '0',
  `LONGOSRAN` varchar(100) DEFAULT NULL,
  `LONGSORAN_M` float DEFAULT '0',
  `TERSUMBAT` varchar(100) DEFAULT NULL,
  `TERSUMBAT_M` float DEFAULT '0',
  `RETAK` varchar(100) DEFAULT NULL,
  `RETAK_M` float DEFAULT '0',
  `PINTU_RUSAK` varchar(100) DEFAULT NULL,
  `PINTU_RUSAK_M` float DEFAULT '0',
  `SEDIMEN` varchar(100) DEFAULT NULL,
  `SEDIMEN_M` float DEFAULT '0',
  `LAIN_LAIN` text,
  `DIKERJAKAN` varchar(100) DEFAULT NULL,
  `USULAN` text,
  `LANJUTAN` text,
  `AREA_BAWAH` varchar(100) DEFAULT NULL,
  `DESA` varchar(100) DEFAULT NULL,
  `ESTIMASI_RUGI` float DEFAULT NULL,
  `ESTIMASI_PERBAIKAN` float DEFAULT NULL,
  `PRIORITAS` varchar(100) DEFAULT NULL,
  `STATUS_LAPORANDT` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_LAPORANDT`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

/*Data for the table `data_laporandt` */

insert  into `data_laporandt`(`ID_LAPORANDT`,`ID_LAPORANHD`,`ID_BANGUNAN`,`BOCORAN`,`BOCORAN_M`,`RUSAK`,`RUSAK_M`,`LONGOSRAN`,`LONGSORAN_M`,`TERSUMBAT`,`TERSUMBAT_M`,`RETAK`,`RETAK_M`,`PINTU_RUSAK`,`PINTU_RUSAK_M`,`SEDIMEN`,`SEDIMEN_M`,`LAIN_LAIN`,`DIKERJAKAN`,`USULAN`,`LANJUTAN`,`AREA_BAWAH`,`DESA`,`ESTIMASI_RUGI`,`ESTIMASI_PERBAIKAN`,`PRIORITAS`,`STATUS_LAPORANDT`) values (1,'68fade97a36aec6d33435f616c538950a3230ab6',1,NULL,23,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'68fade97a36aec6d33435f616c538950a3230ab6',2,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'68fade97a36aec6d33435f616c538950a3230ab6',3,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'68fade97a36aec6d33435f616c538950a3230ab6',4,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'68fade97a36aec6d33435f616c538950a3230ab6',5,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'68fade97a36aec6d33435f616c538950a3230ab6',6,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'68fade97a36aec6d33435f616c538950a3230ab6',7,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'68fade97a36aec6d33435f616c538950a3230ab6',8,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'68fade97a36aec6d33435f616c538950a3230ab6',9,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'68fade97a36aec6d33435f616c538950a3230ab6',10,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'68fade97a36aec6d33435f616c538950a3230ab6',11,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'68fade97a36aec6d33435f616c538950a3230ab6',12,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'68fade97a36aec6d33435f616c538950a3230ab6',13,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'68fade97a36aec6d33435f616c538950a3230ab6',14,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'68fade97a36aec6d33435f616c538950a3230ab6',15,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'68fade97a36aec6d33435f616c538950a3230ab6',16,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'68fade97a36aec6d33435f616c538950a3230ab6',17,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,'68fade97a36aec6d33435f616c538950a3230ab6',18,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'68fade97a36aec6d33435f616c538950a3230ab6',19,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,'68fade97a36aec6d33435f616c538950a3230ab6',20,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,'68fade97a36aec6d33435f616c538950a3230ab6',21,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,'68fade97a36aec6d33435f616c538950a3230ab6',22,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'68fade97a36aec6d33435f616c538950a3230ab6',23,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'68fade97a36aec6d33435f616c538950a3230ab6',24,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,'68fade97a36aec6d33435f616c538950a3230ab6',25,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'68fade97a36aec6d33435f616c538950a3230ab6',26,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,'68fade97a36aec6d33435f616c538950a3230ab6',27,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'68fade97a36aec6d33435f616c538950a3230ab6',28,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,'68fade97a36aec6d33435f616c538950a3230ab6',29,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,'68fade97a36aec6d33435f616c538950a3230ab6',30,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,'68fade97a36aec6d33435f616c538950a3230ab6',31,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'68fade97a36aec6d33435f616c538950a3230ab6',32,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,'68fade97a36aec6d33435f616c538950a3230ab6',33,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,'68fade97a36aec6d33435f616c538950a3230ab6',34,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,'68fade97a36aec6d33435f616c538950a3230ab6',35,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'68fade97a36aec6d33435f616c538950a3230ab6',36,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,'68fade97a36aec6d33435f616c538950a3230ab6',37,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,'68fade97a36aec6d33435f616c538950a3230ab6',38,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,'68fade97a36aec6d33435f616c538950a3230ab6',39,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,'68fade97a36aec6d33435f616c538950a3230ab6',40,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,'68fade97a36aec6d33435f616c538950a3230ab6',41,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(42,'68fade97a36aec6d33435f616c538950a3230ab6',42,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43,'68fade97a36aec6d33435f616c538950a3230ab6',43,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(44,'68fade97a36aec6d33435f616c538950a3230ab6',44,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(45,'68fade97a36aec6d33435f616c538950a3230ab6',45,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(46,'68fade97a36aec6d33435f616c538950a3230ab6',46,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(47,'68fade97a36aec6d33435f616c538950a3230ab6',47,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(48,'68fade97a36aec6d33435f616c538950a3230ab6',48,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(49,'68fade97a36aec6d33435f616c538950a3230ab6',49,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(50,'68fade97a36aec6d33435f616c538950a3230ab6',50,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(51,'68fade97a36aec6d33435f616c538950a3230ab6',51,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(52,'68fade97a36aec6d33435f616c538950a3230ab6',52,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(53,'68fade97a36aec6d33435f616c538950a3230ab6',53,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(54,'68fade97a36aec6d33435f616c538950a3230ab6',54,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(55,'68fade97a36aec6d33435f616c538950a3230ab6',55,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(56,'68fade97a36aec6d33435f616c538950a3230ab6',56,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(57,'68fade97a36aec6d33435f616c538950a3230ab6',57,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(58,'68fade97a36aec6d33435f616c538950a3230ab6',58,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(59,'68fade97a36aec6d33435f616c538950a3230ab6',59,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(60,'68fade97a36aec6d33435f616c538950a3230ab6',60,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(61,'68fade97a36aec6d33435f616c538950a3230ab6',61,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(62,'68fade97a36aec6d33435f616c538950a3230ab6',62,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(63,'68fade97a36aec6d33435f616c538950a3230ab6',63,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(64,'68fade97a36aec6d33435f616c538950a3230ab6',64,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(65,'68fade97a36aec6d33435f616c538950a3230ab6',65,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(66,'68fade97a36aec6d33435f616c538950a3230ab6',66,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(67,'68fade97a36aec6d33435f616c538950a3230ab6',67,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(68,'68fade97a36aec6d33435f616c538950a3230ab6',68,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(69,'68fade97a36aec6d33435f616c538950a3230ab6',69,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(70,'68fade97a36aec6d33435f616c538950a3230ab6',70,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(71,'68fade97a36aec6d33435f616c538950a3230ab6',71,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(72,'68fade97a36aec6d33435f616c538950a3230ab6',72,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(73,'68fade97a36aec6d33435f616c538950a3230ab6',73,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(74,'68fade97a36aec6d33435f616c538950a3230ab6',74,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(75,'68fade97a36aec6d33435f616c538950a3230ab6',75,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(76,'68fade97a36aec6d33435f616c538950a3230ab6',76,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(77,'68fade97a36aec6d33435f616c538950a3230ab6',77,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(78,'68fade97a36aec6d33435f616c538950a3230ab6',78,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(79,'68fade97a36aec6d33435f616c538950a3230ab6',79,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(80,'68fade97a36aec6d33435f616c538950a3230ab6',80,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(81,'68fade97a36aec6d33435f616c538950a3230ab6',81,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(82,'68fade97a36aec6d33435f616c538950a3230ab6',82,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(83,'68fade97a36aec6d33435f616c538950a3230ab6',83,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(84,'68fade97a36aec6d33435f616c538950a3230ab6',84,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(85,'68fade97a36aec6d33435f616c538950a3230ab6',85,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(86,'68fade97a36aec6d33435f616c538950a3230ab6',86,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(87,'68fade97a36aec6d33435f616c538950a3230ab6',87,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(88,'68fade97a36aec6d33435f616c538950a3230ab6',88,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(89,'68fade97a36aec6d33435f616c538950a3230ab6',89,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(90,'68fade97a36aec6d33435f616c538950a3230ab6',90,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(91,'68fade97a36aec6d33435f616c538950a3230ab6',91,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(92,'68fade97a36aec6d33435f616c538950a3230ab6',92,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(93,'68fade97a36aec6d33435f616c538950a3230ab6',93,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(94,'68fade97a36aec6d33435f616c538950a3230ab6',94,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(95,'68fade97a36aec6d33435f616c538950a3230ab6',95,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(96,'68fade97a36aec6d33435f616c538950a3230ab6',96,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(97,'68fade97a36aec6d33435f616c538950a3230ab6',97,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(98,'68fade97a36aec6d33435f616c538950a3230ab6',98,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(99,'68fade97a36aec6d33435f616c538950a3230ab6',99,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(100,'68fade97a36aec6d33435f616c538950a3230ab6',100,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(101,'68fade97a36aec6d33435f616c538950a3230ab6',101,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(102,'68fade97a36aec6d33435f616c538950a3230ab6',102,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(103,'68fade97a36aec6d33435f616c538950a3230ab6',103,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(104,'68fade97a36aec6d33435f616c538950a3230ab6',104,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(105,'68fade97a36aec6d33435f616c538950a3230ab6',105,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(106,'68fade97a36aec6d33435f616c538950a3230ab6',106,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(107,'68fade97a36aec6d33435f616c538950a3230ab6',107,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(108,'68fade97a36aec6d33435f616c538950a3230ab6',108,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(109,'68fade97a36aec6d33435f616c538950a3230ab6',109,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(110,'68fade97a36aec6d33435f616c538950a3230ab6',110,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(111,'68fade97a36aec6d33435f616c538950a3230ab6',111,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(112,'68fade97a36aec6d33435f616c538950a3230ab6',112,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(113,'68fade97a36aec6d33435f616c538950a3230ab6',113,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(114,'68fade97a36aec6d33435f616c538950a3230ab6',114,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(115,'68fade97a36aec6d33435f616c538950a3230ab6',115,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(116,'68fade97a36aec6d33435f616c538950a3230ab6',116,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(117,'68fade97a36aec6d33435f616c538950a3230ab6',117,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(118,'68fade97a36aec6d33435f616c538950a3230ab6',118,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(119,'68fade97a36aec6d33435f616c538950a3230ab6',119,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(120,'68fade97a36aec6d33435f616c538950a3230ab6',120,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(121,'68fade97a36aec6d33435f616c538950a3230ab6',121,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(122,'68fade97a36aec6d33435f616c538950a3230ab6',122,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(123,'68fade97a36aec6d33435f616c538950a3230ab6',123,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(124,'68fade97a36aec6d33435f616c538950a3230ab6',124,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(125,'68fade97a36aec6d33435f616c538950a3230ab6',125,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(126,'68fade97a36aec6d33435f616c538950a3230ab6',126,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(127,'68fade97a36aec6d33435f616c538950a3230ab6',127,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(128,'68fade97a36aec6d33435f616c538950a3230ab6',128,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(129,'68fade97a36aec6d33435f616c538950a3230ab6',129,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(130,'68fade97a36aec6d33435f616c538950a3230ab6',130,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(131,'68fade97a36aec6d33435f616c538950a3230ab6',131,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(132,'68fade97a36aec6d33435f616c538950a3230ab6',132,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(133,'68fade97a36aec6d33435f616c538950a3230ab6',133,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(134,'68fade97a36aec6d33435f616c538950a3230ab6',134,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(135,'68fade97a36aec6d33435f616c538950a3230ab6',135,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(136,'68fade97a36aec6d33435f616c538950a3230ab6',136,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(137,'68fade97a36aec6d33435f616c538950a3230ab6',137,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(138,'68fade97a36aec6d33435f616c538950a3230ab6',138,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(139,'68fade97a36aec6d33435f616c538950a3230ab6',139,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(140,'68fade97a36aec6d33435f616c538950a3230ab6',140,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(141,'68fade97a36aec6d33435f616c538950a3230ab6',141,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(142,'68fade97a36aec6d33435f616c538950a3230ab6',142,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(143,'68fade97a36aec6d33435f616c538950a3230ab6',143,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(144,'68fade97a36aec6d33435f616c538950a3230ab6',144,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(145,'68fade97a36aec6d33435f616c538950a3230ab6',145,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(146,'68fade97a36aec6d33435f616c538950a3230ab6',146,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(147,'68fade97a36aec6d33435f616c538950a3230ab6',147,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(148,'68fade97a36aec6d33435f616c538950a3230ab6',148,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(149,'68fade97a36aec6d33435f616c538950a3230ab6',149,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(150,'68fade97a36aec6d33435f616c538950a3230ab6',150,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(151,'68fade97a36aec6d33435f616c538950a3230ab6',151,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(152,'68fade97a36aec6d33435f616c538950a3230ab6',152,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(153,'68fade97a36aec6d33435f616c538950a3230ab6',153,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(154,'68fade97a36aec6d33435f616c538950a3230ab6',154,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(155,'68fade97a36aec6d33435f616c538950a3230ab6',155,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(156,'68fade97a36aec6d33435f616c538950a3230ab6',156,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(157,'68fade97a36aec6d33435f616c538950a3230ab6',157,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(158,'68fade97a36aec6d33435f616c538950a3230ab6',158,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(159,'68fade97a36aec6d33435f616c538950a3230ab6',159,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(160,'68fade97a36aec6d33435f616c538950a3230ab6',160,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(161,'68fade97a36aec6d33435f616c538950a3230ab6',161,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(162,'68fade97a36aec6d33435f616c538950a3230ab6',162,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(163,'68fade97a36aec6d33435f616c538950a3230ab6',163,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

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
  PRIMARY KEY (`ID_LAPORANHD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_laporanhd` */

insert  into `data_laporanhd`(`ID_LAPORANHD`,`TANGGAL`,`DAERAH_IRIGASI`,`LUAS_AREA_IRIGASI`,`TINGKATAN_IRIGASI`,`KABUPATEN`,`RANTING`,`MANTRI`,`STATUS_LAPORANHD`) values ('1','2020-09-25','CIMANDIRI\r\n',1279,'T\r\n','SUKABUMI\r\n','CIMANDIRI\r\n','CIMANDIRI\r\n','PROSES'),('68fade97a36aec6d33435f616c538950a3230ab6','2020-09-23','1',2,'3','4','5','6','OPEN');

/*Table structure for table `data_riwayat` */

DROP TABLE IF EXISTS `data_riwayat`;

CREATE TABLE `data_riwayat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DATA_TABLE` varchar(100) DEFAULT NULL,
  `AKSI` varchar(100) DEFAULT NULL,
  `OLEH` varchar(100) DEFAULT NULL,
  `TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `data_riwayat` */

insert  into `data_riwayat`(`ID`,`DATA_TABLE`,`AKSI`,`OLEH`,`TANGGAL`) values (21,'TABLE LAPORANHD - DATA 1','TAMBAH','REZA','2020-09-25 11:18:08'),(22,'TABLE LAPORANHD - DATA 1','TAMBAH','REZA','2020-09-25 11:24:01'),(23,'TABLE LAPORANHD - DATA 1','HAPUS','REZA','2020-09-26 15:22:20'),(24,'TABLE LAPORANHD - DATA 1','HAPUS','REZA','2020-09-26 15:22:21'),(25,'TABLE LAPORANHD - DATA 1','TAMBAH','REZA','2020-09-26 15:22:37'),(26,'TABLE LAPORANHD - DATA 1','HAPUS','REZA','2020-09-26 15:57:57'),(27,'TABLE LAPORANHD - DATA 1','TAMBAH','REZA','2020-09-26 15:58:51'),(28,'TABLE LAPORANHD - DATA 1','HAPUS','REZA','2020-09-26 16:49:01'),(29,'TABLE LAPORANHD - DATA 1','TAMBAH','REZA','2020-09-26 16:49:08'),(30,'TABLE LAPORANHD - DATA 1','HAPUS','REZA','2020-09-26 17:28:06'),(31,'TABLE LAPORANHD - DATA 1','TAMBAH','REZA','2020-09-26 17:28:12');

/*Table structure for table `data_ruas` */

DROP TABLE IF EXISTS `data_ruas`;

CREATE TABLE `data_ruas` (
  `id_ruas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruas` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_ruas`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

/*Data for the table `data_ruas` */

insert  into `data_ruas`(`id_ruas`,`nama_ruas`) values (1,'Hm 0 - Hm 1'),(2,'Hm 0 - Hm 1'),(3,'Hm 2 - Hm 3'),(4,'Hm 3 - Hm 4'),(5,'Hm 5 - Hm 6'),(6,'Hm 6 - Hm 7'),(7,'Hm 8 - Hm 9'),(8,'Hm 10 - Hm 11'),(9,'Hm 13 - Hm 14'),(10,'Hm 15 - Hm 16'),(11,'Hm 25 '),(12,'Hm 27 - Hm 28'),(13,'Hm 31 - Hm 32'),(14,'Hm 32 - Hm 33'),(15,'Hm 33'),(16,'Hm 34'),(17,'Hm 34 - Hm 35'),(18,'Hm 35'),(19,'Hm 35 - Hm 36'),(20,'Hm 36 - Hm 37'),(21,'Hm 38 - Hm 45'),(22,'Hm 45 - Hm 46'),(23,'Hm 46 - Hm 47'),(24,'Hm 47 - Hm 48'),(25,'Hm 49'),(26,'Hm 49 - Hm 50'),(27,'Hm 50'),(28,'Hm 50 - Hm 51'),(29,'Hm 53'),(30,'Hm 53 - Hm 54'),(31,'Hm 54 - Hm 55'),(32,'Hm 55'),(33,'Hm 56'),(34,'Hm 56 - Hm 57'),(35,'Hm 57'),(36,'Hm 58'),(37,'Hm 58 - Hm 59'),(38,'Hm 59'),(39,'Hm 59 - Hm 60'),(40,'Hm 60'),(41,'Hm 61'),(42,'Hm 62'),(43,'Hm 63'),(44,'Hm 63 - Hm 64'),(45,'Hm 64'),(46,'Hm 65 - Hm 68'),(47,'Hm 71'),(48,'Hm 76'),(49,'Hm 79 - Hm 80'),(50,'Hm 81 - Hm 82'),(51,'Hm 82'),(52,'Hm 83'),(53,'Hm 88'),(54,'Hm 90'),(55,'Hm 92'),(56,'Hm 93'),(57,'Hm 94'),(58,'Hm 94 - Hm 95'),(59,'Hm 95'),(60,'Hm 96'),(61,'Hm 97 - Hm 98'),(62,'Hm 98 - Hm 99'),(63,'Hm 100'),(64,'Hm 105'),(65,'Hm 108'),(66,'Hm 110 - Hm 111'),(67,'Hm 112 - Hm 113'),(68,'Hm 114'),(69,'Hm 115'),(70,'Hm 118'),(71,'Hm 121'),(72,'Hm 125'),(73,'Hm 126'),(74,'Hm 126 - Hm 127'),(75,'Hm 127'),(76,'Hm 129'),(77,'Hm 129 - Hm 130'),(78,'Hm 139 - Hm 140'),(79,'Hm 140'),(80,'Hm 143'),(81,'Hm 144 - Hm 145'),(82,'Hm 145 - Hm 146'),(83,'Hm 148 - Hm 149'),(84,'Hm 152'),(85,'Hm 152 - Hm 153'),(86,'Hm 153 - Hm 154'),(87,'Hm 155'),(88,'Hm 156'),(89,'Hm 156 - Hm 157'),(90,'Hm 157'),(91,'Hm 158'),(92,'Hm 159'),(93,'Hm 161'),(94,'Hm 163'),(95,'Hm 165'),(96,'Hm 166'),(97,'Hm 167'),(98,'Hm 167 - Hm 168'),(99,'Hm 169 - Hm 170'),(100,'Hm 172'),(101,'Hm 173'),(102,'Hm 175'),(103,'Hm 179'),(104,'Hm 179 - Hm 180'),(105,'Hm 180 - Hm 181'),(106,'Hm 182'),(107,'Hm 183'),(108,'Hm 184'),(109,'Hm 185'),(110,'Hm 189 - Hm 190'),(111,'Hm 190'),(112,'Hm 191'),(113,'Hm 192'),(114,'Hm 193'),(115,'Hm 194'),(116,'Hm 195'),(117,'Hm 196'),(118,'Hm 196 - Hm 197'),(119,'Hm 198'),(120,'Hm 200'),(121,'Hm 204'),(122,'Hm 206'),(123,'Hm 208'),(124,'Hm 208 - Hm 209'),(125,'Hm 209'),(126,'Hm 210'),(127,'Hm 210 - Hm 211'),(128,'Hm 211'),(129,'Hm 212 - Hm 213'),(130,'Hm 213'),(131,'Hm 213 - Hm 214'),(132,'Hm 215'),(133,'Hm 216'),(134,'Hm 217'),(135,'Hm 217 - Hm 218'),(136,'Hm 218'),(137,'Hm 218 - Hm 219'),(138,'Hm 220'),(139,'Hm 220 - Hm 221'),(140,'Hm 221'),(141,'Hm 223'),(142,'Hm 224'),(143,'Hm 225'),(144,'Hm 234');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`level`,`nama_lengkap`) values (1,'reza','40bd001563085fc35165329ea1ff5c5ecbdbbeef','ADMIN','Fachreza Maulana'),(33,'didin','40bd001563085fc35165329ea1ff5c5ecbdbbeef','MANTRI','didin'),(34,'asep','40bd001563085fc35165329ea1ff5c5ecbdbbeef','SUP','asep'),(36,'eko','40bd001563085fc35165329ea1ff5c5ecbdbbeef','SEKSI IRIGASI','eko');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
