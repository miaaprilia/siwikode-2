# Host: localhost  (Version 5.5.5-10.4.17-MariaDB)
# Date: 2021-07-17 10:00:43
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "jenis_kuliner"
#

DROP TABLE IF EXISTS `jenis_kuliner`;
CREATE TABLE `jenis_kuliner` (
  `id_jenis_kuliner` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_kuliner` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_kuliner`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "jenis_kuliner"
#

INSERT INTO `jenis_kuliner` VALUES (1,'Kedai/Cafe'),(2,'Restaurant'),(3,'Pasar Kaget'),(4,'Pasar Swalayan');

#
# Structure for table "jenis_wisata"
#

DROP TABLE IF EXISTS `jenis_wisata`;
CREATE TABLE `jenis_wisata` (
  `id_jenis_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_wisata` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_wisata`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "jenis_wisata"
#

INSERT INTO `jenis_wisata` VALUES (1,'Argo Wisata'),(2,'Kuliner'),(3,'Taman Wisata'),(4,'Museum'),(5,'Water Park / Kolam Renang'),(8,'Kubah Mas');

#
# Structure for table "profesi"
#

DROP TABLE IF EXISTS `profesi`;
CREATE TABLE `profesi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

#
# Data for table "profesi"
#

INSERT INTO `profesi` VALUES (1,'Artist'),(2,'Pejabat'),(3,'Mahasiswa'),(4,'Pegawai Swasta'),(11,'Umum'),(16,'Quality Assurance');

#
# Structure for table "testimoni"
#

DROP TABLE IF EXISTS `testimoni`;
CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `wisata_id` int(11) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wisata_id` (`wisata_id`),
  KEY `profesi_id` (`profesi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "testimoni"
#

INSERT INTO `testimoni` VALUES (3,'Najwa Shihab','najwa@co.id',4,2,5,'bagus'),(4,'Mia Aprilia Satya','miaaprilia2803@gmail.com',8,3,5,'Bagus');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `level` enum('user','admin') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'Admin','8cb2237d0679ca88db6464eac60da96345513964','user');

#
# Structure for table "wisata"
#

DROP TABLE IF EXISTS `wisata`;
CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_wisata_id` int(11) NOT NULL,
  `jenis_kuliner_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `latlong` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_wisata`) USING BTREE,
  KEY `jenis_wisata_id` (`jenis_wisata_id`),
  KEY `jenis_kuliner_id` (`jenis_kuliner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "wisata"
#

INSERT INTO `wisata` VALUES (2,1,0,'default.jpg','Ragunan','bagus','taman bermain',5,'0891582902','jln',2,'seviaaristha@gmail.com','https://github.com/miaaprilia/SIWIKODE'),(3,0,2,'default.jpg','Pasar Swalayan','m','m',2,'0891582902','m',NULL,'kapool@yopmail.com','https://github.com/miaaprilia/SIWIKODE'),(5,2,0,'default.jpg','Setu Babakan','Sampai dengan saat ini untuk masuk kedalam kawasan Setu Babakan tidak dikenakan biaya masuk, namun bagi pengunjung yang menggunakan sepeda motor dan mobil dikenakan biaya parkir sebesar Rp. 2.000,- untuk sepeda motor dan Rp. 5.000,- untuk mobil. Bagi peseda dan pejalan kaki tidak dikenakan biaya apapun.','Taman Wisata',5,'(021) 78893258','Jl. RM. Kahfi II, RT.13/RW.8, Srengseng Sawah',3,'user@gmail.com','https://github.com/miaaprilia/SIWIKODE'),(6,4,0,'default.jpg','Monas','Monumen Nasional','Teropong',5,'0891582902','Jakarta Pusat',5,'ptl@yopmail.com','https://github.com/miaaprilia/SIWIKODE'),(7,0,1,'default.jpg','Cafe Kedai','Cafe','Jajanan ',5,'0891582902','jln jln',NULL,'seviaaristha@gmail.com','https://github.com/miaaprilia/SIWIKODE'),(8,4,0,'default.jpg','Monas','Monumen Nasional','Teropong',5,'0891582902','Jakarta Pusat',5,'admin@gmail.com','https://github.com/miaaprilia/SIWIKODE'),(9,0,3,'default.jpg','Pondok Labu','Pasar Becek','Jajanan ',4,'0891582902-093','Jln Pondok Labu',NULL,'user@gmail.com','https://github.com/miaaprilia/SIWIKODE');
