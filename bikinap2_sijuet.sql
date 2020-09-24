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
