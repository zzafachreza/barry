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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `data_bangunan` */

insert  into `data_bangunan`(`id_bangunan`,`nama_bangunan`,`id_ruas`) values (6,'Jembatan 1a',6),(7,'Bangunan Ukur 1b',6);

/*Table structure for table `data_laporanhd` */

DROP TABLE IF EXISTS `data_laporanhd`;

CREATE TABLE `data_laporanhd` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TANGGAL` date DEFAULT NULL,
  `DAERAH_IRIGASI` varchar(200) DEFAULT NULL,
  `LUAS_AREA_IRIGASI` float DEFAULT NULL,
  `TINGKATAN_IRIGASI` varchar(100) DEFAULT NULL,
  `KABUPATEN` varchar(200) DEFAULT NULL,
  `RANTING` varchar(200) DEFAULT NULL,
  `MANTRI` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `data_laporanhd` */

insert  into `data_laporanhd`(`ID`,`TANGGAL`,`DAERAH_IRIGASI`,`LUAS_AREA_IRIGASI`,`TINGKATAN_IRIGASI`,`KABUPATEN`,`RANTING`,`MANTRI`) values (1,'2020-09-25','CIMANDIRI\r\n',1279,'T\r\n','SUKABUMI\r\n','CIMANDIRI\r\n','CIMANDIRI\r\n'),(6,'2020-09-05','12',22,'33','144','55','66');

/*Table structure for table `data_ruas` */

DROP TABLE IF EXISTS `data_ruas`;

CREATE TABLE `data_ruas` (
  `id_ruas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruas` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_ruas`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `data_ruas` */

insert  into `data_ruas`(`id_ruas`,`nama_ruas`) values (6,'Hm 0 - Hm 1'),(8,'Hm 2 - Hm 3');

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
