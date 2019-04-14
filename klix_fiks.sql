-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Apr 2019 pada 10.31
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
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `idBrand` int(3) NOT NULL,
  `namaBrand` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`idBrand`, `namaBrand`) VALUES
(1, 'xiaomi'),
(2, 'samsung'),
(3, 'apple'),
(4, 'asus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailkeluhan`
--

CREATE TABLE `detailkeluhan` (
  `iddetail` int(3) NOT NULL,
  `idSeries` int(3) NOT NULL,
  `kisaranHarga` varchar(20) NOT NULL,
  `idKeluhan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailkeluhan`
--

INSERT INTO `detailkeluhan` (`iddetail`, `idSeries`, `kisaranHarga`, `idKeluhan`) VALUES
(1, 3, '1700000-2500000', 1),
(2, 3, '450000-600000', 5),
(3, 4, '1700000-2500000', 3),
(4, 4, '1700000-2500000', 4),
(5, 1, '100000-750000', 2),
(6, 2, '75000-200000', 5),
(7, 7, '1700000-2500000', 4),
(8, 8, '2000000-3000000', 3),
(9, 5, '100000-750000', 2),
(10, 6, '350000-1000000', 4);

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
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `series`
--

CREATE TABLE `series` (
  `idSeries` int(11) NOT NULL,
  `namaSeries` varchar(20) NOT NULL,
  `idBrand` int(11) NOT NULL,
  `idTipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `series`
--

INSERT INTO `series` (`idSeries`, `namaSeries`, `idBrand`, `idTipe`) VALUES
(1, 'redmi note 3 ', 1, 1),
(2, 'redmi note 5', 1, 1),
(3, 'iphone 6', 3, 1),
(4, 'iphone 7', 3, 1),
(5, 'zenfone 2', 4, 1),
(6, 'zenfone 4', 4, 1),
(7, 'samsung s6', 2, 1),
(8, 'samsung s8 edge', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_device`
--

CREATE TABLE `tipe_device` (
  `idTipe` int(3) NOT NULL,
  `namaTipe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_device`
--

INSERT INTO `tipe_device` (`idTipe`, `namaTipe`) VALUES
(1, 'smartphone'),
(2, 'tablet'),
(3, 'laptop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`idBrand`);

--
-- Indexes for table `detailkeluhan`
--
ALTER TABLE `detailkeluhan`
  ADD PRIMARY KEY (`iddetail`),
  ADD KEY `idSeries` (`idSeries`),
  ADD KEY `idKeluhan` (`idKeluhan`);

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
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`idSeries`),
  ADD KEY `idBrand` (`idBrand`),
  ADD KEY `idTipe` (`idTipe`);

--
-- Indexes for table `tipe_device`
--
ALTER TABLE `tipe_device`
  ADD PRIMARY KEY (`idTipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `idBrand` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detailkeluhan`
--
ALTER TABLE `detailkeluhan`
  MODIFY `iddetail` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `idSeries` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipe_device`
--
ALTER TABLE `tipe_device`
  MODIFY `idTipe` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailkeluhan`
--
ALTER TABLE `detailkeluhan`
  ADD CONSTRAINT `detailkeluhan_ibfk_1` FOREIGN KEY (`idSeries`) REFERENCES `series` (`idSeries`),
  ADD CONSTRAINT `detailkeluhan_ibfk_2` FOREIGN KEY (`idKeluhan`) REFERENCES `keluhan` (`idKeluhan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`idDetail`) REFERENCES `detailkeluhan` (`iddetail`);

--
-- Ketidakleluasaan untuk tabel `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_ibfk_1` FOREIGN KEY (`idBrand`) REFERENCES `brand` (`idBrand`),
  ADD CONSTRAINT `series_ibfk_2` FOREIGN KEY (`idTipe`) REFERENCES `tipe_device` (`idTipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
