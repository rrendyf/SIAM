-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 08:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- create database ge_book;

--
-- Database: `ge_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbjurnal`
--

CREATE TABLE IF NOT EXISTS `tbjurnal` (
  `kdJurnal` int(11) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(128) NOT NULL,
  `Pengarang` varchar(50) NOT NULL,
  `Tahun` year(4) NOT NULL,
  `Keyword` varchar(200) NOT NULL,
  `Abstrak` text NOT NULL,
  `File` varchar(200) NOT NULL,
  PRIMARY KEY (`kdJurnal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbjurnal`
--

INSERT INTO `tbjurnal` (`kdJurnal`, `Judul`, `Pengarang`, `Tahun`, `Keyword`, `Abstrak`, `File`) VALUES
(1, 'Inheritance', 'Rosa Ariani Sukamto', 2011, 'PBO', 'materi dalam pemrograman berorientasi objek', '03_-_Inheritance.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`username`, `password`, `nama`) VALUES
('rrendyf', '8886570d7ae8649493298b24f15fa2e2', 'Rendy Fathagrap'),
('nopenwa', '632a5b7dc58cb10f23746719a2921eea', 'Nopen Ariko');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
