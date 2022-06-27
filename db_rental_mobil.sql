/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_rental_mobil
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rental_mobil` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_rental_mobil`;

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id_admin` int(255) NOT NULL AUTO_INCREMENT,
  `name_admin` varchar(255) DEFAULT NULL,
  `your_email` varchar(255) DEFAULT NULL,
  `password_admin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`id_admin`,`name_admin`,`your_email`,`password_admin`) values 
(1,'arya','bagusarya@gmail.com','$2y$10$hTWGFW2pa3ISJuDcmENqxenJZj8NW6NmRGGc5fSbUUsBUTPCR2EJK');

/*Table structure for table `tb_costumer` */

DROP TABLE IF EXISTS `tb_costumer`;

CREATE TABLE `tb_costumer` (
  `id_costumer` int(20) NOT NULL AUTO_INCREMENT,
  `nama_costumer` varchar(255) DEFAULT NULL,
  `alamat_costumer` varchar(255) DEFAULT NULL,
  `nomer_telepon` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('pria','wanita') DEFAULT NULL,
  PRIMARY KEY (`id_costumer`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_costumer` */

insert  into `tb_costumer`(`id_costumer`,`nama_costumer`,`alamat_costumer`,`nomer_telepon`,`jenis_kelamin`) values 
(52,'Herman Gozali','Denpasar','081236578434','pria'),
(54,'Bagus Nararya','Denpasar','081236578445','pria'),
(56,'Agung Hermansyah','Badung','081236578445','pria'),
(57,'Herman Gozalis','Gianyar','081236578445','pria'),
(58,'Basudewa Suputra','Nusa Dua','083456797645','pria'),
(59,'Basudewa','Gianyar','081236578434','pria'),
(65,'Agung Hermansyah','Gianyar','083248845685','pria'),
(66,'test4','test5','fgs','wanita'),
(67,'test4','test2','081253656365','pria'),
(68,'Agung Hermansyah','Denpasar','081236578445','pria'),
(69,'Agung Hermansyah','Denpasar','081236578445','pria'),
(70,'test4','test2','083248845685','pria'),
(71,'Agung Hermansyah','Gianyar','081236578445','pria'),
(72,'Agung Hermansyah','Gianyar','081236578434','pria');

/*Table structure for table `tb_mobil` */

DROP TABLE IF EXISTS `tb_mobil`;

CREATE TABLE `tb_mobil` (
  `id_mobil` int(20) NOT NULL AUTO_INCREMENT,
  `gambar_mobil` varchar(255) DEFAULT NULL,
  `merek_mobil` varchar(255) DEFAULT NULL,
  `harga_sewa_nama` varchar(255) DEFAULT NULL,
  `harga_sewa_angka` int(255) DEFAULT NULL,
  `mobil_sopir` varchar(255) DEFAULT NULL,
  `bbm` varchar(255) DEFAULT NULL,
  `jumblah_penumpang` int(10) DEFAULT NULL,
  `plat_mobil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_mobil` */

insert  into `tb_mobil`(`id_mobil`,`gambar_mobil`,`merek_mobil`,`harga_sewa_nama`,`harga_sewa_angka`,`mobil_sopir`,`bbm`,`jumblah_penumpang`,`plat_mobil`) values 
(6,'62b6d3be4bde6.png','Mitsubishi Pajero Sport','Rp. 1.400.000/ 1 Hari',1400000,'Mobil &amp; Sopir','BBM Penuh',6,'9876'),
(7,'62b68dca2a4f1.png','New Avanza','Rp. 400.000/ 1 Hari',400000,'Mobil &amp; Sopir','BBM Penuh',5,'7866'),
(8,'62b6f97ec1be9.png','New Fortuner','Rp. 1.500.000 / 1 Hari',1500000,'Mobil &amp; Sopir','BBM Penuh',5,'4535'),
(12,'62b7a82953c1e.png','Alphard Transformer','Rp. 2.500.000 / 1 Hari',2500000,'Mobil &amp; Sopir','BBM Penuh',5,'7864'),
(13,'62b95d527339f.png','Hiace Premio','Rp. 400.000/ 1 Hari',400000,'Mobil &amp; Sopir','BBM Penuh',6,'2343');

/*Table structure for table `tb_transaksi` */

DROP TABLE IF EXISTS `tb_transaksi`;

CREATE TABLE `tb_transaksi` (
  `id_sewa` int(20) NOT NULL AUTO_INCREMENT,
  `nama_costumer` varchar(255) DEFAULT NULL,
  `merek_mobil` varchar(255) DEFAULT NULL,
  `tanggal_awal_sewa` datetime DEFAULT NULL,
  `jangka_waktu_sewa` varchar(255) DEFAULT NULL,
  `harga_sewa_perhari` int(100) DEFAULT NULL,
  `total_bayar` int(100) DEFAULT NULL,
  `status_sewa` enum('belum bayar','sudah bayar') DEFAULT NULL,
  PRIMARY KEY (`id_sewa`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_transaksi` */

insert  into `tb_transaksi`(`id_sewa`,`nama_costumer`,`merek_mobil`,`tanggal_awal_sewa`,`jangka_waktu_sewa`,`harga_sewa_perhari`,`total_bayar`,`status_sewa`) values 
(5,'Virgo Rais','Alphard','2022-06-26 00:00:00','6',200000,7000000,'sudah bayar'),
(6,'Agung Hermansyah','Mitsubishi Pajero','2022-06-26 00:00:00','3',1000000,7000000,'belum bayar'),
(7,'tes10','Mitsubishi Pajero','2022-06-27 00:00:00','3',1000000,7000000,'belum bayar');

/*Table structure for table `tb_users` */

DROP TABLE IF EXISTS `tb_users`;

CREATE TABLE `tb_users` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `your_name` varchar(255) DEFAULT NULL,
  `your_email` varchar(255) DEFAULT NULL,
  `pwd_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_users` */

insert  into `tb_users`(`id_user`,`your_name`,`your_email`,`pwd_user`) values 
(3,'bagusarya','bagusarya@gmail.com','$2y$10$DxJMFUEvwv2LoF0VozhZKui0fTaZRigdozRuK1TNy9ykoOQCMcMh6'),
(4,'dewak','dewak22@gmail.com','$2y$10$9IdFiDtGeq4oNNuQM9sYvezWkWL55gfc.6.lXl6eMTZZ0.7cdgrOe'),
(5,'arya','arya@gmail.com','$2y$10$vUg4WP3ly64CRWosmAxTZuRQ5/zQ3ng72vSZd9TBnhaX03axnEgCm'),
(6,'firman','firman@gmail.com','$2y$10$c82HAoRIZWsiMkXFRrtpauOHymUP29L.bDC1mdGgsR5KGnQPJJ49y'),
(7,'weni','weni@gmail.com','$2y$10$m5HCmu0TREAAKo/zy.NhBunSSOu2OMnRfBbpU2a1UoVnunFZ9uXDS'),
(8,'firmans','firmans@gmail.com','$2y$10$TGjvIX2hAuA1Oh8LOBXQaOQPfXhyjbrH8DBHhHHpj.4wLryUx0RES'),
(9,'bagus','bagus@gmail.com','$2y$10$K.zOLE/XFVS2oduID1.QR.h.8yAI5eqZfi0pwCkNd7YALPskXyQ4C'),
(12,'dewaks','dewak23@gmail.com','$2y$10$P2Iox38paArEXcYLG8OZpOcEQ7qX9zQE3n7kQiqrpe/q/CshimWoK'),
(13,'bagus ary','bagusary@gmail.com','$2y$10$LN2SbZomQcSuCMxG8Y88Je4MuMk65vD2pv/mE5Eg3RYflTrWQ7daK'),
(14,'dewa','dewa@gmail.com','$2y$10$FDuJ5V6kEepEw8X2mjLHWOacNvJ9GxdmY7aeJINB1VBLUTRR6XQ.G'),
(15,'gerry','gerry@gmail.com','$2y$10$qmsSPgeG.mMDYopiKtew6ull5l4QyCHDNuu4z75.GKKnujcmHIi1q'),
(16,'sovia','sovia@gmail.com','$2y$10$UAbcJmLQ4xmxADS6CvArMeE5XK6FiI10c4rGzmXjFLQgzy0gspGEu');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
