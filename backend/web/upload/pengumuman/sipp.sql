/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.6.24 : Database - sipp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sipp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sipp`;

/*Table structure for table `auth_assignment` */

DROP TABLE IF EXISTS `auth_assignment`;

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_assignment` */

insert  into `auth_assignment`(`item_name`,`user_id`,`created_at`) values ('administrator','21',NULL),('member','26',NULL),('member','27',NULL),('member','28',NULL),('member','30',NULL),('member','32',NULL),('staff','25',NULL);

/*Table structure for table `auth_item` */

DROP TABLE IF EXISTS `auth_item`;

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item` */

insert  into `auth_item`(`name`,`type`,`description`,`rule_name`,`data`,`created_at`,`updated_at`) values ('admin_book',2,NULL,NULL,NULL,1450792777,1450792777),('admin_publisher',2,NULL,NULL,NULL,1450792777,1450792777),('administrator',2,NULL,NULL,NULL,1450792777,1450792777),('assign_role',2,NULL,NULL,NULL,1450792777,1450792777),('browse',2,NULL,NULL,NULL,1450792777,1450792777),('create_author',2,NULL,NULL,NULL,1450101577,1450101577),('create_book',2,NULL,NULL,NULL,1450792777,1450792777),('create_publisher',2,NULL,NULL,NULL,1450792777,1450792777),('delete_author',2,NULL,NULL,NULL,1450101577,1450101577),('delete_book',2,NULL,NULL,NULL,1450792777,1450792777),('delete_publisher',2,NULL,NULL,NULL,1450792777,1450792777),('guest',1,NULL,NULL,NULL,1450792777,1450792777),('list_book',2,'list_book',NULL,NULL,1450792777,1450792777),('list_member',2,NULL,NULL,NULL,1450792777,1450792777),('list_publisher',2,NULL,NULL,NULL,1450792777,1450792777),('login',2,'Login',NULL,NULL,1450792777,1450792777),('logout',2,NULL,NULL,NULL,1450792777,1450792777),('manage_author',2,NULL,NULL,NULL,1450101577,1450101577),('manage_book',2,NULL,NULL,NULL,1450792777,1450792777),('manage_publisher',2,NULL,NULL,NULL,1450792777,1450792777),('member',1,NULL,NULL,NULL,1450792778,1450792778),('register',2,NULL,NULL,NULL,1450792777,1450792777),('revoke_role',2,NULL,NULL,NULL,1450792777,1450792777),('staff',2,NULL,NULL,NULL,1450792777,1450792777),('update_author',2,NULL,NULL,NULL,1450101577,1450101577),('update_book',2,NULL,NULL,NULL,1450792777,1450792777),('update_profile',2,'update_profile',NULL,NULL,1450792777,1450792777),('update_publisher',2,NULL,NULL,NULL,1450792777,1450792777),('view_book',2,'view_book',NULL,NULL,1450792777,1450792777),('view_profile',2,NULL,NULL,NULL,1450101577,1450101577),('view_publisher',2,NULL,NULL,NULL,1450101577,1450101577);

/*Table structure for table `auth_item_child` */

DROP TABLE IF EXISTS `auth_item_child`;

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item_child` */

insert  into `auth_item_child`(`parent`,`child`) values ('manage_book','admin_book'),('manage_publisher','admin_publisher'),('administrator','assign_role'),('member','browse'),('manage_author','create_author'),('manage_book','create_book'),('manage_publisher','create_publisher'),('manage_author','delete_author'),('manage_book','delete_book'),('manage_publisher','delete_publisher'),('member','guest'),('browse','list_book'),('staff','list_member'),('browse','list_publisher'),('guest','login'),('member','logout'),('staff','manage_author'),('staff','manage_publisher'),('staff','member'),('guest','register'),('administrator','revoke_role'),('administrator','staff'),('manage_author','update_author'),('manage_book','update_book'),('member','update_profile'),('manage_publisher','update_publisher'),('browse','view_book'),('browse','view_profile'),('browse','view_publisher');

/*Table structure for table `auth_rule` */

DROP TABLE IF EXISTS `auth_rule`;

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_rule` */

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values ('m000000_000000_base',1459864623),('m130524_201442_init',1459864627),('m140506_102106_rbac_init',1460200554);

/*Table structure for table `t_d_artikel` */

DROP TABLE IF EXISTS `t_d_artikel`;

CREATE TABLE `t_d_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_artikel` int(11) NOT NULL,
  `file` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_artikel` (`id_artikel`),
  CONSTRAINT `t_d_artikel_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `t_m_artikel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_d_artikel` */

/*Table structure for table `t_d_buku` */

DROP TABLE IF EXISTS `t_d_buku`;

CREATE TABLE `t_d_buku` (
  `id_buku` varchar(45) NOT NULL,
  `isbn` varchar(45) DEFAULT NULL,
  `klasifikasi` varchar(45) DEFAULT NULL,
  `lokasi` varchar(45) DEFAULT NULL,
  `cp_or` enum('Original','Copy') DEFAULT NULL,
  `tahun` varchar(45) DEFAULT NULL,
  `id_master_buku` int(11) NOT NULL,
  `jenis` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `availability` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_buku`),
  KEY `jenis` (`jenis`),
  KEY `status` (`status`),
  KEY `id_master_buku` (`id_master_buku`),
  CONSTRAINT `t_d_buku_ibfk_2` FOREIGN KEY (`jenis`) REFERENCES `t_r_jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_d_buku_ibfk_3` FOREIGN KEY (`status`) REFERENCES `t_r_jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_d_buku_ibfk_4` FOREIGN KEY (`id_master_buku`) REFERENCES `t_m_buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_d_buku` */

insert  into `t_d_buku`(`id_buku`,`isbn`,`klasifikasi`,`lokasi`,`cp_or`,`tahun`,`id_master_buku`,`jenis`,`status`,`tgl_masuk`,`availability`) values ('07.06212','0194573753','427 Gle o/s CP.59','Lt.1,R35/6','Copy','2002',2339,9,11,'2016-06-10',1),('15.5080.008898','-','352.4 Buk','Lt. 1','Copy','2011',5939,9,11,'2016-06-01',1),('16.5434.009401','978-979-8792-51-9','320.5 Ber','Lt. 1','Copy','2014',5940,9,11,'2016-06-01',1),('16.5434.009402','978-979-8792-51-9','320.5 Ber','Lt. 1','Copy','2014',5940,9,11,'2016-06-01',1),('16.5438.009401','-','352.4 Buk','Lt. 1','Original','2011',5939,9,11,'2016-06-01',1),('16.5438.009402','-','352.4 Buk','Lt. 1','Copy','2011',5939,9,11,'2016-06-01',1);

/*Table structure for table `t_d_denda` */

DROP TABLE IF EXISTS `t_d_denda`;

CREATE TABLE `t_d_denda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `besar_denda` float NOT NULL,
  `id_detail_peminjaman` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_detail_peminjaman` (`id_detail_peminjaman`),
  CONSTRAINT `t_d_denda_ibfk_1` FOREIGN KEY (`id_detail_peminjaman`) REFERENCES `t_d_peminjaman` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_d_denda` */

/*Table structure for table `t_d_kaset` */

DROP TABLE IF EXISTS `t_d_kaset`;

CREATE TABLE `t_d_kaset` (
  `id_kaset` varchar(15) NOT NULL,
  `cp_or` enum('Original','Copy') NOT NULL,
  `id_master_kaset` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `sumber` varchar(255) DEFAULT NULL,
  `lokasi` varchar(125) DEFAULT NULL,
  `klasifikasi` varchar(25) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `isbn` varchar(15) DEFAULT NULL,
  `sifat` varchar(125) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_kaset`),
  KEY `id_master_kaset` (`id_master_kaset`),
  KEY `status` (`status`),
  CONSTRAINT `t_d_kaset_ibfk_1` FOREIGN KEY (`id_master_kaset`) REFERENCES `t_m_kaset` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_d_kaset_ibfk_2` FOREIGN KEY (`status`) REFERENCES `t_r_jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_d_kaset` */

insert  into `t_d_kaset`(`id_kaset`,`cp_or`,`id_master_kaset`,`status`,`tgl_masuk`,`sumber`,`lokasi`,`klasifikasi`,`jenis`,`isbn`,`sifat`,`availability`) values ('02.0001','Copy',137,11,'2011-08-09',NULL,'Lt. 1',NULL,'CD/DVD',NULL,NULL,0),('02.0002','Copy',138,11,'2011-08-09',NULL,'Lt. 1',NULL,'CD/DVD',NULL,NULL,1);

/*Table structure for table `t_d_log` */

DROP TABLE IF EXISTS `t_d_log`;

CREATE TABLE `t_d_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(20) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `status` enum('Masuk','Keluar') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_anggota` (`id_anggota`),
  CONSTRAINT `t_d_log_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `t_m_pengguna` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_d_log` */

insert  into `t_d_log`(`id`,`id_anggota`,`tanggal`,`status`) values (1,25,NULL,NULL),(2,25,'2016-04-28 16:04:07','Masuk');

/*Table structure for table `t_d_pemesanan` */

DROP TABLE IF EXISTS `t_d_pemesanan`;

CREATE TABLE `t_d_pemesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_status` tinyint(4) NOT NULL,
  `tgl_ganti_status` datetime DEFAULT NULL,
  `id_referensi_kategori` int(4) NOT NULL,
  `id_trans_pemesanan` int(11) NOT NULL,
  `id_d_buku` varchar(45) DEFAULT NULL,
  `id_d_kaset` varchar(45) DEFAULT NULL,
  `tgl_pemeritahuan` datetime DEFAULT NULL,
  `acc1` int(11) DEFAULT NULL,
  `acc2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_referensi_kategori` (`id_referensi_kategori`),
  KEY `id_trans_pemesanan` (`id_trans_pemesanan`),
  KEY `id_d_buku` (`id_d_buku`),
  KEY `id_d_kaset` (`id_d_kaset`),
  KEY `id_status` (`id_status`),
  CONSTRAINT `t_d_pemesanan_ibfk_1` FOREIGN KEY (`id_referensi_kategori`) REFERENCES `t_kategori_denda` (`id`),
  CONSTRAINT `t_d_pemesanan_ibfk_4` FOREIGN KEY (`id_trans_pemesanan`) REFERENCES `t_t_pesan_pinjam` (`id`),
  CONSTRAINT `t_d_pemesanan_ibfk_5` FOREIGN KEY (`id_d_buku`) REFERENCES `t_d_buku` (`id_buku`),
  CONSTRAINT `t_d_pemesanan_ibfk_6` FOREIGN KEY (`id_d_kaset`) REFERENCES `t_d_kaset` (`id_kaset`),
  CONSTRAINT `t_d_pemesanan_ibfk_7` FOREIGN KEY (`id_status`) REFERENCES `t_r_jenis` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `t_d_pemesanan` */

insert  into `t_d_pemesanan`(`id`,`id_status`,`tgl_ganti_status`,`id_referensi_kategori`,`id_trans_pemesanan`,`id_d_buku`,`id_d_kaset`,`tgl_pemeritahuan`,`acc1`,`acc2`) values (40,13,'2016-06-12 13:06:05',2,86,NULL,'02.0001','2016-06-12 13:06:12',21,21);

/*Table structure for table `t_d_peminjaman` */

DROP TABLE IF EXISTS `t_d_peminjaman`;

CREATE TABLE `t_d_peminjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kembali` datetime DEFAULT NULL,
  `rencana_kembali` date DEFAULT NULL,
  `id_trans_peminjaman` int(11) DEFAULT NULL,
  `id_referensi_kategori` int(4) DEFAULT NULL,
  `id_d_buku` varchar(15) DEFAULT NULL,
  `id_d_kaset` varchar(15) DEFAULT NULL,
  `acc1` int(11) DEFAULT NULL,
  `acc2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_referensi_kategori` (`id_referensi_kategori`),
  KEY `id_trans_peminjaman` (`id_trans_peminjaman`),
  KEY `id_d_kaset` (`id_d_kaset`),
  KEY `id_d_buku` (`id_d_buku`),
  CONSTRAINT `t_d_peminjaman_ibfk_1` FOREIGN KEY (`id_referensi_kategori`) REFERENCES `t_kategori_denda` (`id`),
  CONSTRAINT `t_d_peminjaman_ibfk_2` FOREIGN KEY (`id_trans_peminjaman`) REFERENCES `t_t_pesan_pinjam` (`id`),
  CONSTRAINT `t_d_peminjaman_ibfk_4` FOREIGN KEY (`id_d_kaset`) REFERENCES `t_d_kaset` (`id_kaset`),
  CONSTRAINT `t_d_peminjaman_ibfk_5` FOREIGN KEY (`id_d_buku`) REFERENCES `t_d_buku` (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

/*Data for the table `t_d_peminjaman` */

insert  into `t_d_peminjaman`(`id`,`tgl_kembali`,`rencana_kembali`,`id_trans_peminjaman`,`id_referensi_kategori`,`id_d_buku`,`id_d_kaset`,`acc1`,`acc2`) values (77,NULL,'2016-06-26',86,2,NULL,'02.0001',21,NULL);

/*Table structure for table `t_d_pengumuman` */

DROP TABLE IF EXISTS `t_d_pengumuman`;

CREATE TABLE `t_d_pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengumuman` int(11) NOT NULL,
  `file` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pengumuman` (`id_pengumuman`),
  CONSTRAINT `t_d_pengumuman_ibfk_1` FOREIGN KEY (`id_pengumuman`) REFERENCES `t_m_pengumuman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `t_d_pengumuman` */

insert  into `t_d_pengumuman`(`id`,`id_pengumuman`,`file`) values (2,3,'ATI.pdf'),(4,8,'PROKOF_UAS 2016-Praktikum.pdf');

/*Table structure for table `t_kategori_denda` */

DROP TABLE IF EXISTS `t_kategori_denda`;

CREATE TABLE `t_kategori_denda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kategori` varchar(45) NOT NULL,
  `denda_per_hari` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_kategori_denda` */

insert  into `t_kategori_denda`(`id`,`jenis_kategori`,`denda_per_hari`) values (1,'Buku Teks',2000),(2,'CD/DVD',1000);

/*Table structure for table `t_m_artikel` */

DROP TABLE IF EXISTS `t_m_artikel`;

CREATE TABLE `t_m_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_mulai` datetime DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `jumlah_lihat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pengguna` (`id_pengguna`),
  CONSTRAINT `t_m_artikel_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `t_m_pengguna` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_m_artikel` */

insert  into `t_m_artikel`(`id`,`judul`,`isi`,`tgl_mulai`,`id_pengguna`,`jumlah_lihat`) values (2,'Create Master Artikel','<p>Master Artikel</p>\r\n','2016-06-06 14:06:13',21,NULL),(3,'Bulan','<p>by Tere liye</p>\r\n','2016-06-10 06:58:55',21,NULL);

/*Table structure for table `t_m_buku` */

DROP TABLE IF EXISTS `t_m_buku`;

CREATE TABLE `t_m_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `edisi` varchar(45) NOT NULL,
  `pengarang` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `penerbit` varchar(45) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `bahasa` varchar(15) DEFAULT NULL,
  `gambar` varchar(45) DEFAULT NULL,
  `subjek` varchar(125) DEFAULT NULL,
  `topik` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5941 DEFAULT CHARSET=latin1;

/*Data for the table `t_m_buku` */

insert  into `t_m_buku`(`id`,`edisi`,`pengarang`,`deskripsi`,`penerbit`,`judul`,`jumlah_buku`,`bahasa`,`gambar`,`subjek`,`topik`) values (2339,'3','Eric H. Glendinning dan John McEwan','This course is design for people studying information tecnology and computing, or woeking in IT sector. It is suitable for use in universities, technical schools and adult education programmes with intermediate to advanced level students who want to improve and extend their language skills in the context of IT. This book include Student book, Cassette or CD, and teacher guide.\r\n','Oxford University Press','Oxford english for information technology: st',5,'Inggris',NULL,'english language-technical english',''),(5939,'Second','-','Buku ini memberitahukan dan menyebarluaskan ciri-ciri keaslian uang rupiah sebagai salah satu upaya menangkal peredaran uang palsu','Bank Indonesia','Materi Ciri-Ciri Keaslian Uang Rupiah',3,'Indonesia',NULL,'Money',''),(5940,'-','-','Buku ini adalah sebuah kumpulan Pamflet. pamflet satu sampai tigapuluh delapan seakan berdiskusi, tawar menawar sudut pandang, sehingga tidak akan seperti indoktrinasi panjang yang monoton dan melelahkan','Badan Penerbit FHUI','Bersetia Bela Pancasila',2,'Indonesia',NULL,'Political Ideologies',NULL);

/*Table structure for table `t_m_kaset` */

DROP TABLE IF EXISTS `t_m_kaset`;

CREATE TABLE `t_m_kaset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text,
  `jenis` tinyint(4) NOT NULL,
  `gambar` varchar(45) DEFAULT NULL,
  `subjek` varchar(255) DEFAULT NULL,
  `prodi_pemilik` enum('D3 Teknik Informatika','D3 Teknik Komputer','D4 Teknik Informatika','S1 Teknik Informatika','S1 Sistem Informasi','S1 Teknik Elektro','S1 Teknik Bio.Proses','S1 Teknik Manajemen Rekayasa') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jenis` (`jenis`),
  CONSTRAINT `t_m_kaset_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `t_r_jenis` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

/*Data for the table `t_m_kaset` */

insert  into `t_m_kaset`(`id`,`judul`,`jumlah`,`keterangan`,`jenis`,`gambar`,`subjek`,`prodi_pemilik`) values (137,'Complete Java 2 Certification Study Guide',2,NULL,11,NULL,NULL,'D3 Teknik Informatika'),(138,'BCMSN: Building Cisco Multilayer Switching Networks',2,NULL,11,'',NULL,'D3 Teknik Komputer');

/*Table structure for table `t_m_pengguna` */

DROP TABLE IF EXISTS `t_m_pengguna`;

CREATE TABLE `t_m_pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `batas_buku` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `NI` varchar(15) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` varchar(125) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `jurusan` enum('D3 Teknik Informatika','D3 Teknik Komputer','D4 Teknik Informatika','S1 Teknik Informatika','S1 Sistem Informasi','S1 Teknik Elektro','S1 Teknik Bio.Proses','S1 Teknik Manajemen Rekayasa') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  CONSTRAINT `t_m_pengguna_ibfk_1` FOREIGN KEY (`status`) REFERENCES `t_r_jenis` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `t_m_pengguna` */

insert  into `t_m_pengguna`(`id`,`username`,`password`,`email`,`batas_buku`,`status`,`NI`,`nama`,`alamat`,`no_hp`,`jabatan`,`jurusan`) values (21,'admin','$2y$13$aKR48Hkoyr4VmklZkLOK7OGjuuLZT4mGvaQ.PlRCx.8raSQtmg11e','admin@del.ac.id',10,1,'null','Administrator','Del','','Admin',''),(25,'if314061','$2y$13$BmkCCYTuWm8sjORe/hy2MOx/ISNqZ8oTLnwhmQ73e1aW0IidkfAIC','if314061@del.ac.id',3,1,'11314061','Daniel Manullang','Del','085270836789','Mahasiswa','D3 Teknik Informatika'),(26,'if314050','$2y$13$oWsSTGTYyYyrBY92pXJkneLSjk8dWeH9r3tZPmfp5GtvbCCaeXQHO','if314050@del.ac.id',3,1,'11314050','Liana Diantri Sianturi','Del','','Mahasiswa','D3 Teknik Informatika'),(27,'if314056','$2y$13$PhWU5P.j3WhkwO0D7xfVJemJlmD3./68KTkSh6HQb6NxpJDLHloF2','if314056@del.ac.id',3,1,'11314056','Prety Natalia Girsang','Del','','Dosen','D3 Teknik Informatika'),(28,'if314047','$2y$13$ON1rr7fm1H4QZPolsC.b8uzjp0AQyNJGudu.crb6yruvepUWXBR0.','if314047@del.ac.id',3,2,'11314047','Banisar','Del','','Mahasiswa','D3 Teknik Informatika'),(30,'if314046','$2y$13$yn7y0yLzMNkbNmFF8HiA2eHr3JNtOPdbhyjvhVkRtt.IcTK1BYmly','if314046@del.ac.id',3,1,'11314046','if314046','','','',''),(32,'taufan','$2y$13$VpiL5m1/xkNakVieBMQwBO/Aj9jzoOQqp6KAO3HYVLiC3VSr6kNrG','taufan@cc.cc',3,3,'11314062','taufan','taufan','','Mahasiswa','D3 Teknik Informatika');

/*Table structure for table `t_m_pengumuman` */

DROP TABLE IF EXISTS `t_m_pengumuman`;

CREATE TABLE `t_m_pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(125) NOT NULL,
  `isi` text NOT NULL,
  `tgl_mulai` datetime DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pengguna` (`id_pengguna`),
  CONSTRAINT `t_m_pengumuman_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `t_m_pengguna` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `t_m_pengumuman` */

insert  into `t_m_pengumuman`(`id`,`judul`,`isi`,`tgl_mulai`,`id_pengguna`) values (1,'Kewajiban Pengembalian Buku Sebelum Berangkat KP','<p>Buku</p>\r\n','2016-06-06 09:13:35',21),(3,'Pengumuman Buku Baru','<p>Ada tambahan buku</p>\r\n','2016-06-06 14:10:46',21),(4,'Bahan Pustaka Baru','<p>ssss</p>\r\n','2016-06-09 09:33:53',21),(5,'ssss','<p>ss</p>\r\n','2016-06-09 09:34:43',21),(6,'fghjm','<p>ss</p>\r\n','2016-06-10 06:08:56',21),(8,'sssss','<p>sssssss</p>\r\n','2016-06-10 06:12:35',21);

/*Table structure for table `t_r_jenis` */

DROP TABLE IF EXISTS `t_r_jenis`;

CREATE TABLE `t_r_jenis` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `t_r_jenis` */

insert  into `t_r_jenis`(`id`,`status`) values (1,'Aktif'),(2,'Tidak Aktif'),(3,'Dipesan'),(4,'Dipinjam'),(5,'Stok habis'),(6,'Mahasiswa'),(7,'Dosen'),(8,'Staff'),(9,'Buku Teks'),(10,'CD/DVD'),(11,'Tersedia'),(12,'Cancel'),(13,'Pinjamkan');

/*Table structure for table `t_t_pesan_pinjam` */

DROP TABLE IF EXISTS `t_t_pesan_pinjam`;

CREATE TABLE `t_t_pesan_pinjam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date DEFAULT NULL,
  `jumlah_barang` tinyint(3) NOT NULL,
  `id_jenis` tinyint(4) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pengguna` (`id_pengguna`),
  KEY `id_jenis` (`id_jenis`),
  CONSTRAINT `t_t_pesan_pinjam_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `t_m_pengguna` (`id`),
  CONSTRAINT `t_t_pesan_pinjam_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `t_r_jenis` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

/*Data for the table `t_t_pesan_pinjam` */

insert  into `t_t_pesan_pinjam`(`id`,`tgl_transaksi`,`jumlah_barang`,`id_jenis`,`id_pengguna`) values (86,'2016-06-12',1,10,21);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
