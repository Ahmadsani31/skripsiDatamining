-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 01:48 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_datamining`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telpon` varchar(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `telpon`, `username`, `password`) VALUES
(1, 'Administrator', 'admin@gmail.com', '0216666699', 'admin', 'admin'),
(2, 'Ahmad Darma Sani', 'darmaSani@gmail.com', '02155448', 'darma', 'sani125');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id_d` int(11) NOT NULL AUTO_INCREMENT,
  `kelompok` varchar(20) NOT NULL,
  `pm10` double NOT NULL,
  `so2` double NOT NULL,
  `co` double NOT NULL,
  `o3` double NOT NULL,
  `no` double NOT NULL,
  `ispu` double NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_d`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_d`, `kelompok`, `pm10`, `so2`, `co`, `o3`, `no`, `ispu`, `tanggal`) VALUES
(1, 'D1', 58.89, 2.2284, 166.5, 14.1, 0, 54, '2019-10-17'),
(2, 'D2', 78.96, 2.3947, 148.6, 17.2, 0, 64.48, '2019-10-17'),
(3, 'D3', 35.29, 2.4693, 179.2, 9.2, 0, 35.29, '2019-10-17'),
(4, 'D4', 30.92, 2.4415, 159.8, 6.9, 0, 30.92, '2019-10-17'),
(5, 'D5', 36.58, 2.3884, 117, 11.4, 0, 36.58, '2019-10-17'),
(6, 'D6', 41.96, 2.3819, 128.2, 12.1, 0, 41.96, '2019-10-17'),
(7, 'D7', 42.13, 2.1906, 144.8, 10.3, 0, 42.13, '2019-10-17'),
(8, 'D8', 32.83, 2.4084, 157.8, 10, 0, 32.83, '2019-10-17'),
(9, 'D9', 31.17, 2.2726, 101.2, 8.7, 0, 31.17, '2019-10-17'),
(10, 'D10', 31.94, 2.4986, 111.1, 8.2, 0, 31.94, '2019-10-17'),
(11, 'D11', 55.6, 2.2206, 102.4, 18.5, 0, 52.8, '2019-10-17'),
(12, 'D12', 73.59, 2.1328, 83.9, 18.1, 0, 61.8, '2019-10-17'),
(13, 'D13', 82.46, 2.2617, 112.7, 17.7, 0, 66.23, '2019-10-17'),
(14, 'D14', 55.63, 2.3501, 96.4, 14, 0, 52.83, '2019-10-17'),
(15, 'D15', 38.4, 2.2428, 115.5, 13.5, 0, 38.4, '2019-10-17'),
(16, 'D16', 35.69, 2.4171, 81.1, 12.8, 0, 35.69, '2019-10-17'),
(17, 'D17', 72.38, 2.5639, 137.1, 18.2, 0, 61.23, '2019-10-17'),
(18, 'D18', 77.46, 2.0705, 279.4, 17.4, 0, 63.73, '2019-10-17'),
(19, 'D19', 70.25, 2.0473, 254, 14.9, 0, 60.1, '2019-10-17'),
(20, 'D20', 57.12, 2.2962, 264.1, 11.1, 0.037, 53.56, '2019-10-17'),
(21, 'D21', 103.46, 1.8437, 228.2, 13.4, 0.085, 76.73, '2019-10-17'),
(22, 'D22', 159.21, 2.4355, 242.7, 24.7, 0.03, 105, '2019-10-17'),
(23, 'D23', 275.21, 2.2266, 247.4, 34.8, 0, 225.21, '2019-10-17'),
(24, 'D24', 73.75, 0.5693, 221.3, 19.8, 0.013, 61.88, '2019-10-17'),
(25, 'D25', 41.04, 0.6157, 147.6, 9.3, 0.04, 41.04, '2019-10-17'),
(26, 'D26', 41.92, 0.5986, 133.3, 9.5, 0.084, 41.92, '2019-10-17'),
(27, 'D27', 54.04, 0.5719, 116.6, 13.1, 0.082, 52.05, '2019-10-17'),
(28, 'D28', 60.25, 0.5241, 106.7, 11.3, 0.069, 55.1, '2019-10-17'),
(29, 'D29', 46.83, 0.5521, 122.5, 6, 0.099, 46.83, '2019-10-17'),
(30, 'D30', 33.58, 0.6013, 246, 9.7, 0.102, 33.58, '2019-10-17'),
(31, 'D31', 26.5, 0.596, 263.9, 8.6, 0.056, 26.5, '2019-10-17'),
(32, 'D32', 46.2, 0.573, 271.2, 9, 0.082, 46.2, '2019-10-17'),
(33, 'D33', 51.2, 0.576, 221.7, 10.5, 0.065, 50.6, '2019-10-17'),
(34, 'D34', 34.7, 0.547, 221.7, 16.3, 0.033, 34.7, '2019-10-17'),
(35, 'D35', 0, 0.526, 257.5, 20.7, 0, 0, '2019-10-17'),
(36, 'D36', 0, 0.627, 262.5, 17.7, 0, 0, '2019-10-17'),
(37, 'D37', 0, 0.586, 250.2, 14, 0.087, 0, '2019-10-17'),
(38, 'D38', 0, 0.562, 222.6, 10.7, 0.037, 0, '2019-10-17'),
(39, 'D39', 23.7, 0.564, 222.6, 17, 0.029, 23.7, '2019-10-17'),
(40, 'D40', 32, 0.537, 352.2, 12.9, 0.041, 32, '2019-10-17'),
(41, 'D41', 52.3, 0.554, 284.7, 12.6, 0.06, 51.15, '2019-10-17'),
(42, 'D42', 37.3, 0.539, 289.5, 12.3, 0.028, 37.3, '2019-10-17'),
(43, 'D43', 31.8, 0.512, 469.9, 12, 0.038, 31.8, '2019-10-17'),
(44, 'D44', 59.4, 0.516, 551.5, 10.4, 0.079, 54.7, '2019-10-17'),
(45, 'D45', 94.7, 0.531, 671.8, 17.2, 0.07, 72.4, '2019-10-17'),
(46, 'D46', 100.9, 0.558, 414.5, 18.6, 0.028, 75.5, '2019-10-17'),
(47, 'D47', 44.7, 0.54, 245.2, 7.7, 0.054, 44.7, '2019-10-17'),
(48, 'D48', 9.6, 0.544, 368.2, 9.1, 0.04, 9.6, '2019-10-17'),
(49, 'D49', 34.7, 0.551, 376.6, 11.3, 0.062, 34.7, '2019-10-17'),
(50, 'D50', 55.7, 0.52, 254.8, 18.8, 0, 52.9, '2019-10-17'),
(51, 'D51', 22.8, 0.516, 281.9, 9.3, 0.075, 22.8, '2019-10-17'),
(52, 'D52', 34, 0.545, 289.6, 8.6, 0.052, 34, '2019-10-17'),
(53, 'D53', 59.4, 0.766, 317.7, 14.1, 0.054, 54.7, '2019-10-17'),
(54, 'D54', 63.3, 0.82, 314.7, 19, 0, 56.7, '2019-10-17'),
(55, 'D55', 45.2, 0.844, 329.2, 9.1, 0.041, 45.2, '2019-10-17'),
(56, 'D56', 39.9, 0.761, 227.9, 10.4, 0.053, 39.9, '2019-10-17'),
(57, 'D57', 11.7, 0.856, 236.2, 14.1, 0, 11.7, '2019-10-17'),
(58, 'D58', 21.2, 0.933, 260.5, 10.2, 0.041, 21.2, '2019-10-17'),
(59, 'D59', 20.5, 0.91, 226.4, 10, 0.081, 20.5, '2019-10-17'),
(60, 'D60', 22.3, 0.837, 180.1, 10.5, 0.054, 22.3, '2019-10-17'),
(61, 'D61', 16.5, 0.838, 302.67, 10.2, 0.037, 16.5, '2019-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_prediksi_jst`
--

CREATE TABLE IF NOT EXISTS `hasil_prediksi_jst` (
  `id_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `id_data` int(11) NOT NULL,
  `id_pre` int(11) NOT NULL,
  `prediksi` varchar(25) NOT NULL,
  `yink` double NOT NULL,
  `yeror` double NOT NULL,
  `yk` double NOT NULL,
  PRIMARY KEY (`id_hasil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hasil_prediksi_jst`
--


-- --------------------------------------------------------

--
-- Table structure for table `new_iterasi`
--

CREATE TABLE IF NOT EXISTS `new_iterasi` (
  `id_new` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `kelompok` varchar(20) NOT NULL,
  `data` int(11) NOT NULL,
  `c1` double NOT NULL,
  `c2` double NOT NULL,
  `c3` double NOT NULL,
  `c4` double NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_new`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `new_iterasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `next_iterasi`
--

CREATE TABLE IF NOT EXISTS `next_iterasi` (
  `id_next` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `kelompok` varchar(20) NOT NULL,
  `data` int(11) NOT NULL,
  `c1` double NOT NULL,
  `c2` double NOT NULL,
  `c3` double NOT NULL,
  `c4` double NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_next`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `next_iterasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE IF NOT EXISTS `pelatihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL,
  `x1` double NOT NULL,
  `x2` double NOT NULL,
  `x3` double NOT NULL,
  `x4` double NOT NULL,
  `x5` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pelatihan`
--


-- --------------------------------------------------------

--
-- Table structure for table `pelatihan_jst`
--

CREATE TABLE IF NOT EXISTS `pelatihan_jst` (
  `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT,
  `id_data` int(11) NOT NULL,
  `pm10` double NOT NULL,
  `so2` double NOT NULL,
  `co` double NOT NULL,
  `o3` double NOT NULL,
  `no` double NOT NULL,
  `ispu` double NOT NULL,
  `x1` double NOT NULL,
  `x2` double NOT NULL,
  `x3` double NOT NULL,
  `x4` double NOT NULL,
  `x5` double NOT NULL,
  `x6` double NOT NULL,
  PRIMARY KEY (`id_pelatihan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pelatihan_jst`
--


-- --------------------------------------------------------

--
-- Table structure for table `pengujian`
--

CREATE TABLE IF NOT EXISTS `pengujian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL,
  `x1` double NOT NULL,
  `x2` double NOT NULL,
  `x3` double NOT NULL,
  `x4` double NOT NULL,
  `x5` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pengujian`
--


-- --------------------------------------------------------

--
-- Table structure for table `pengujian_jst`
--

CREATE TABLE IF NOT EXISTS `pengujian_jst` (
  `id_pengujian` int(11) NOT NULL AUTO_INCREMENT,
  `id_data` int(11) NOT NULL,
  `pm10` double NOT NULL,
  `so2` double NOT NULL,
  `co` double NOT NULL,
  `o3` double NOT NULL,
  `no` double NOT NULL,
  `ispu` double NOT NULL,
  `x1` double NOT NULL,
  `x2` double NOT NULL,
  `x3` double NOT NULL,
  `x4` double NOT NULL,
  `x5` double NOT NULL,
  `x6` double NOT NULL,
  PRIMARY KEY (`id_pengujian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pengujian_jst`
--


-- --------------------------------------------------------

--
-- Table structure for table `prediksi_jst`
--

CREATE TABLE IF NOT EXISTS `prediksi_jst` (
  `id_pre` int(11) NOT NULL AUTO_INCREMENT,
  `id_data` int(11) NOT NULL,
  `prediksi` varchar(25) NOT NULL,
  `x1` double NOT NULL,
  `x2` double NOT NULL,
  `x3` double NOT NULL,
  `x4` double NOT NULL,
  `x5` double NOT NULL,
  `x6` double NOT NULL,
  `x7` double NOT NULL,
  `x8` double NOT NULL,
  `x9` double NOT NULL,
  `x10` double NOT NULL,
  `x11` double NOT NULL,
  `target` double NOT NULL,
  PRIMARY KEY (`id_pre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `prediksi_jst`
--

