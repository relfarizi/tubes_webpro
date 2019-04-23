-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Apr 2019 pada 17.44
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Struktur dari tabel `detailkeluhan`
--

CREATE TABLE `detailkeluhan` (
  `idDetail` int(10) NOT NULL,
  `namaseries` varchar(15) NOT NULL,
  `kisaranHarga` varchar(30) NOT NULL,
  `idkeluhan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `idKeluhan` int(3) NOT NULL,
  `namaKeluhan` varchar(15) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`idKeluhan`, `namaKeluhan`, `keterangan`) VALUES
(1, 'Batrai', 'Kerusakan pada connector,Kerusakan pada fleksibel baterai,Kerusakan pada internal '),
(2, 'Mati Total', 'Kerusakan internal perangkat,Gangguan IC power,Gangguan IC USB atau IC Charging,Kerusakan pada emmc,Korsleting atau arus pendek'),
(3, 'Touchscreen', 'Layar retak,Kerusakan layar fleksibel, Gangguan internal mainboard,gangguan software, dan kerusakan penghubung mainboard,Kerusakan pada IC Touchscreen'),
(4, 'LCD/layar', 'Layar pecah,Pixel mati,Tidak ada tampilan, Kerusakan penghubung atau connector kotor Kerusakan internal perangkat, Gangguan IC power'),
(5, 'charging', 'Kerusakan baterai, Kerusakan pada penghubung charger, gangguan pada mainboard,Kerusakan pada IC USB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `idOrder` int(3) NOT NULL,
  `idDetail` int(3) NOT NULL,
  `date` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
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
  MODIFY `idDetail` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `idKeluhan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` int(3) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailkeluhan`
--
ALTER TABLE `detailkeluhan`
  ADD CONSTRAINT `detailkeluhan_ibfk_1` FOREIGN KEY (`idkeluhan`) REFERENCES `keluhan` (`idKeluhan`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`idDetail`) REFERENCES `detailkeluhan` (`idDetail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
