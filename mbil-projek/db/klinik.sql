-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2015 at 08:24 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_num` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `gol_darah` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `keluhan` varchar(30) NOT NULL,
  PRIMARY KEY (`nama`),
  UNIQUE KEY `id_num` (`id_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_num`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `gol_darah`, `alamat`, `keluhan`) VALUES
(6, 'Hendi', 'Laki - laki', '20/12/2012', 'A', 'Ciampel', 'Sakit gigi'),
(3, 'huliana', 'Laki - laki', '28/11/1997', 'B', 'singapura', 'Sakit hati'),
(5, 'Ilham Fadil', 'Laki - laki', '29/01/2014', 'A', 'Malaysia', 'sakit apa yaa'),
(2, 'Marza', 'Laki - laki', '23/07/1990', 'AB', 'Korea', 'sakit pundak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_num` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` enum('apoteker','office','dokter') NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `id_num` (`id_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_num`, `username`, `password`, `type`) VALUES
(2, 'dokter', 'dokter', 'dokter'),
(1, 'office', 'office', 'office');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
