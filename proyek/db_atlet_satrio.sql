-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 08:05 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_atlet_satrio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbatlet`
--

CREATE TABLE `tbatlet` (
  `idatlet` char(10) NOT NULL,
  `nama_atlet` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(25) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `cabang_olahraga` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbatlet`
--

INSERT INTO `tbatlet` (`idatlet`, `nama_atlet`, `tgl_lahir`, `jk`, `tinggi_badan`, `cabang_olahraga`) VALUES
('123', 'Satrio Noto Negoro', '2001-11-15', 'Laki-laki', 170, 'Renang'),
('31231', 'Mahmudin LAYAU', '2023-12-16', 'Laki-Laki', 240, 'Tekwondo'),
('324587', 'Siti Aisyah', '2001-12-12', 'Perempuan', 160, 'Bulu tangkis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbatlet`
--
ALTER TABLE `tbatlet`
  ADD PRIMARY KEY (`idatlet`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
