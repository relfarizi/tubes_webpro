-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 04:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klix_fiks`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailkeluhan`
--

CREATE TABLE `detailkeluhan` (
  `idDetail` int(10) NOT NULL,
  `namaseries` varchar(15) NOT NULL,
  `kisaranHarga` varchar(30) NOT NULL,
  `idkeluhan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailkeluhan`
--

INSERT INTO `detailkeluhan` (`idDetail`, `namaseries`, `kisaranHarga`, `idkeluhan`) VALUES
(1, 'iPad Air 2', '250.000  - 317.000', 4);

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `idKeluhan` int(3) NOT NULL,
  `namaKeluhan` varchar(15) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`idKeluhan`, `namaKeluhan`, `keterangan`) VALUES
(1, 'Batrai', 'Kerusakan pada connector,Kerusakan pada fleksibel baterai,Kerusakan pada internal '),
(2, 'Mati Total', 'Kerusakan internal perangkat,Gangguan IC power,Gangguan IC USB atau IC Charging,Kerusakan pada emmc,Korsleting atau arus pendek'),
(3, 'Touchscreen', 'Layar retak,Kerusakan layar fleksibel, Gangguan internal mainboard,gangguan software, dan kerusakan penghubung mainboard,Kerusakan pada IC Touchscreen'),
(4, 'LCD/layar', 'Layar pecah\r\nPixel mati\r\nKerusakan penghubung\r\n internal perangkat'),
(5, 'charging', 'Kerusakan baterai, Kerusakan pada penghubung charger, gangguan pada mainboard,Kerusakan pada IC USB');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idOrder` int(3) NOT NULL,
  `idDetail` int(3) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `date` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pos` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailkeluhan`
--
ALTER TABLE `detailkeluhan`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `idkeluhan` (`idkeluhan`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`idKeluhan`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `idDetail` (`idDetail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailkeluhan`
--
ALTER TABLE `detailkeluhan`
  MODIFY `idDetail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `idKeluhan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailkeluhan`
--
ALTER TABLE `detailkeluhan`
  ADD CONSTRAINT `detailkeluhan_ibfk_1` FOREIGN KEY (`idkeluhan`) REFERENCES `keluhan` (`idKeluhan`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`idDetail`) REFERENCES `detailkeluhan` (`idDetail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
