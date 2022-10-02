-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2022 at 10:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catat_terlambat`
--

-- --------------------------------------------------------

--
-- Table structure for table `catat_pelanggaran`
--

CREATE TABLE `catat_pelanggaran` (
  `nama` varchar(70) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `pelanggaran` varchar(20) NOT NULL,
  `waktu_pelanggaran` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catat_pelanggaran`
--

INSERT INTO `catat_pelanggaran` (`nama`, `kelas`, `pelanggaran`, `waktu_pelanggaran`) VALUES
('John', 'X', 'Telat', '2022-10-02 05:56:38'),
('John', 'X', 'Telat', '2022-10-02 06:08:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
