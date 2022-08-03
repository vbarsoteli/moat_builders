/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 5.7.31-0ubuntu0.18.04.1 : Database - moat_builders
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `artist_album` */

DROP TABLE IF EXISTS `artist_album`;

CREATE TABLE `artist_album` (
  `id_artist_album` int(11) NOT NULL AUTO_INCREMENT,
  `id_artist` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dt_hr` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_artist_album`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `artist_album_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `artist_album` */

insert  into `artist_album`(`id_artist_album`,`id_artist`,`id_user`,`dt_hr`,`name`,`year`) values 
(6,8,NULL,'2022-08-03 16:47:57','adsfasdfa',11111111),
(8,9,NULL,'2022-08-03 16:50:24','aaaaaaaaaaa',2005),
(9,7,NULL,'2022-08-03 16:57:31','VINICIUS',1999),
(13,1,NULL,'2022-08-03 18:10:30','JUSTIN IN TIME',2022),
(14,1,NULL,'2022-08-03 18:10:52','JUST FOR FUN',2022);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `dt_hr` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id_user`,`dt_hr`,`name`,`username`,`password`,`role`) values 
(256,'2022-08-03 18:10:14','VINICIUS BARSOTELI','vbarsoteli','222222222222222','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
