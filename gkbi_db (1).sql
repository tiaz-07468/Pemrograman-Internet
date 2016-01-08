-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2016 at 01:29 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gkbi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addanggota`
--

CREATE TABLE IF NOT EXISTS `addanggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(254) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kdpos` int(5) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(254) NOT NULL,
  `status` varchar(50) NOT NULL,
  `idKop` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `addanggota`
--

INSERT INTO `addanggota` (`id`, `nama`, `tempat`, `tanggal`, `alamat`, `telepon`, `email`, `kdpos`, `agama`, `sex`, `foto`, `username`, `password`, `status`, `idKop`) VALUES
(1, 'Tiaz Iskandar Muda', 'Pekalongan', '1995-05-04', 'Perum. Wirabaru 1 Jl. Baja Block.O No. 6 Rt.6 Rw.8 Wiradesa', '111', '111201307468@mhs.dinus.ac.id', 51152, 'Islam', 'Laki-laki', 'icon4.png', 'admin', '409378623e2ecf04d3563eb1923e5b8a', 'Super Admin', 'GKBI'),
(8, 'Tiaz Iskandar Muda', 'Pekalongan', '1995-04-05', 'Wiradesa', '8', '111201307468@mhs.dinus.ac.id', 56789, 'Islam', 'Laki-laki', '07468.jpg', 'tiaz', '6becd7effc670c74bda042062fae94b3', 'Anggota', 'KSP-1'),
(11, 'Fatma Eranisa', 'Blora', '2015-05-17', 'Perumnas Jl. Lupa No', '123', 'tiaz.rekayasa.31@gmail.com', 9123, 'Islam', 'Perempuan', 'DSC_2020.JPG', '', '', '', ''),
(14, 'Tiara Fatma', 'Blora', '2015-05-17', 'Perumnas Jl. Lupa Nomer Berapa RT. Gak Tau Rw. Sama Gak Tau', '0857421750', '111201307468@mhs.dinus.ac.id', 51111, 'Islam', 'Perempuan', 'CIMG0365.JPG', 'tiara', 'edf2b993f24a5f014ead4d701c66953f', 'Anggota', 'KSP-1'),
(16, 'Tiaz Iskandar', 'kjhkj', '2015-05-17', 'Perumnas Jl. Lupa Nomer Berapa RT. Gak Tau Rw. Sama Gak Tau', '0857421750', '111201307468@mhs.dinus.ac.id', 9123, 'Islam', 'Laki-laki', 'C360_2014-02-26-06-46-25-333.jpg', 'aku2', 'eb9e538e56ed4ca9070962b00ff5b67b', 'Anggota', 'KSP-1'),
(18, 'Aku', 'Pekalongan', '2015-12-30', 'Pekalongan', '01823', '123@gmail.com', 567892, 'Islam', 'Laki-laki', 'ace.png', 'akua', '871237bf25ba34556a2755fdf2f0ee44', 'Anggota', 'KSP-1'),
(19, 'Tiaz', 'Pekalongan Brooooooo', '2016-01-13', 'Wiradesa ww', '01823', '111201307468@mhs.dinus.ac.id', 567892, 'Islam', 'Laki-laki', 'chibi_luffy_lineart_colored_by_bryanaldrin-d5qe6vt - C.png', 'mahasiswa', 'b9e588f017f9bc991baf9d230989608f', 'Anggota', 'KSP-1'),
(20, 'tiaz', 'Pekalongan Brooooooo', '2016-01-07', 'Wiradesa ww', '08888', 'asd@asd', 567892, 'Islam', 'Laki-laki', '70870577d3998b25e06daa3ef10d0616-d64v8ht.png', 'mahasiswa', 'b9e588f017f9bc991baf9d230989608f', 'Admin', 'KSP-1'),
(21, 'Aku', 'Pekalongan', '2016-01-13', 'Wiradesa ww', '08888', '123@gmail.com', 567892, 'Islam', 'Laki-laki', 'chibi-s-anime-25073034-332-500.jpg', 'akus', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'KSP-1'),
(24, '1', 'asd', '0000-00-00', '2016-01-13', 'asd', '123', 0, '567892', 'Islam', 'Perempuan', 'Rz1KEoK.png', 'asd', '7815696ecbf1c96e6894b779456d330e', 'Admin'),
(25, '1', 'asd', '0000-00-00', '2016-01-13', 'asd', '123', 0, '567892', 'Islam', 'Perempuan', 'Rz1KEoK.png', 'asd', '7815696ecbf1c96e6894b779456d330e', 'Admin'),
(26, 'tiaz', 'Pekalongan', '2016-12-31', 'Wiradesa ww', '08888', '123@gmail.com', 567892, 'Islam', 'Perempuan', 'pekalongan.jpg', 'akkk', '964d72e72d053d501f2949969849b96c', 'Admin', 'KSP-2'),
(27, 'Tiaz', 'Pekalongan', '2016-01-09', 'Jalan Bima', '0875564535', '111201307468@mhs.dinus.ac.id', 67890, 'Islam', 'Laki-laki', '218ce609dc873cd3660a0b237455a5f4.jpg', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'Admin', 'KSP-1'),
(30, 'Fatma Eranisa', 'Blora', '1995-01-06', 'Perumnas Blora Jl. Nuri No.17', '8574785400', '111201307808@mhs.dinus.ac.id', 51115, 'Islam', 'Perempuan', 'era.png', 'era', 'ac416403624739adf838ea7625910bac', 'Super Admin', 'GKBI'),
(31, 'Wahyu Muhammad K', 'Semarang', '2016-05-08', 'Semarang', '8123456801', '111201307621@mhs.dinus.ac.id', 51111, 'Islam', 'Laki-laki', 'wahyu.png', 'wahyu', '8b2dfd4b00c35bef241ac1696e59246d', 'Super Admin', 'GKBI');

-- --------------------------------------------------------

--
-- Table structure for table `management_user`
--

CREATE TABLE IF NOT EXISTS `management_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `management_user`
--

INSERT INTO `management_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '409378623e2ecf04d3563eb1923e5b8a', 'Super Admin'),
(2, 'koperasi_admin', 'cd40bb6ddf1f980ce832bb21e9db0eb1', 'Admin Koperasi'),
(3, 'anggota1', '7db5345b01396df74f676a334f74c3d5', 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `author`, `date`) VALUES
(2, 'Pameran Festival Batik, Bordir dan Tenun - Bandung-Semarang', 'Ragam batik, bordir dan tenun yang beraneka membuat karya seni tersebut selalu memiliki posisi terbaik dihati para pencintanya.  Berpikir hal tersebut maka kami Maxxindo Communication bekerja sama dengan Krishna Studio selaku event organizer exhibition terkemuka di kota Bandung dengan bangga menyelenggarakan â€œFESTIVAL BATIK, BORDIR & TENUN NUSANTARAâ€.', 'Tiaz Iskandar Muda', '2016-01-08'),
(6, 'Karnival Adhikarya Nusantara â€“ Expo Batik, Bordir, Craft, Bordir & Tenun Indonesia', 'Indonesia sebagai negara yang kaya akan ragam budaya merupakan aset terbaik dalam menciptakan berbagai karya seni.\r\n\r\nBatik, bordir dan tenun adalah sedikit karya cipta dari banyaknya karya cipta yang tak bisa dipungkiri lahir dari kekayaan alam Indonesia yang diakui dunia.\r\n\r\nRagam batik, bordir dan tenun yang beraneka membuat karya seni tersebut selalu memiliki posisi terbaik dihati para pencintanya.\r\n\r\nBerpikir hal tersebut maka kami Maxxindo Communication bekerja sama dengan Krishna Studio selaku event organizer exhibition terkemuka di kota Bandung dengan bangga menyelenggarakan â€œKarnival Adhikarya Nusantaraâ€ Expo Batik, Craft, Bordir & Tenun Tanah Air\r\n\r\nEvent ini salah satu event besar yang kami selenggarakan , sebagai wujud kecintaan kepada budaya sekaligus mencari bakat kreatif dari para pencinta batik, bordir dan tenun nusantara.\r\n\r\nDiharapkan dengan adanya event ini maka batik, bordir dan tenun Indonesia dapat terus lestari sepanjang masa, sehingga karya cipta nusantara ini tidak lagi diakui sebagai karya cipta negara lain.', 'Tiaz Iskandar Muda', '2016-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `lamaPinjaman` varchar(30) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `totAngsur` int(5) NOT NULL,
  `idAnggota` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAnggota` (`idAnggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id`, `tanggal`, `lamaPinjaman`, `jumlah`, `totAngsur`, `idAnggota`) VALUES
(1, '2016-01-05', '12 bln', 100000, 8334, 16);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idkoperasi` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idkoperasi` (`idkoperasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `idkoperasi`, `isi`, `foto`) VALUES
(2, 'KSP-1', 'Batik Pekalongan', 'p4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE IF NOT EXISTS `simpanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jnsSimpanan` varchar(30) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `idAnggota` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAnggota` (`idAnggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id`, `tanggal`, `jnsSimpanan`, `jumlah`, `idAnggota`) VALUES
(1, '2016-01-07', 'Simpanan Pokok', 100000, 14),
(2, '2016-01-21', 'Simpanan Sukarela', 100000, 18),
(3, '2016-01-20', 'Simpanan Pokok', 100000, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tkoperasi`
--

CREATE TABLE IF NOT EXISTS `tkoperasi` (
  `id` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `kdpos` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkoperasi`
--

INSERT INTO `tkoperasi` (`id`, `nama`, `alamat`, `tanggal`, `email`, `telpon`, `kdpos`, `jenis`, `foto`) VALUES
('KSP-1', 'Koperasi AnNajjah', 'Semarang', '1997-01-14', 'tiaz@a.x', '123123', 91231, 'Simpan Pinjam', 'slide1.jpg'),
('KSP-2', 'Kita Bersama', 'Disini aja', '2016-01-07', 'd@1', '12304', 567892, 'Simpan Pinjam', 'Brand_Coklat.png'),
('KSP-Arr', 'Kasih Bunda', 'Semarang', '2014-12-01', '123@gmail.com', '08512233455', 567892, 'Simpan Pinjam', 'slide1.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `addanggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`idkoperasi`) REFERENCES `tkoperasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `addanggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
