-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2019 pada 15.11
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `idKeluhan` int(3) NOT NULL,
  `namaKeluhan` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `idBrand` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailkeluhan`
--
ALTER TABLE `detailkeluhan`
  MODIFY `iddetail` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `idKeluhan` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `idSeries` int(11) NOT NULL AUTO_INCREMENT;

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
