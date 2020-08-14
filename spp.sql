-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 08:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(1, 'RPL2', 'RPL2'),
(2, 'AKL', 'AKL'),
(112, 'XI-RPL', 'KOMPUTER');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaraan`
--

CREATE TABLE `pembayaraan` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_bayar` varchar(8) NOT NULL,
  `tahun_bayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `id_kelas` int(12) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaraan`
--

INSERT INTO `pembayaraan` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_spp`, `id_kelas`, `jumlah_bayar`) VALUES
(123, 3, '0113311', '2020-07-23', 'Jul', '2020', 123, 1, 1900000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'michaelriotan2', 'luminoso', 'Michael Rio', 'admin'),
(3, 'admin', 'admin', 'admin', 'admin'),
(67, 'test', 'cintakasih', 'test123', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('01133', '1236', 'Adrian W', 1, 'City Resort Hawaiian Blok B No.55', '081213', 123),
('0113311', '12362', 'Adrian William Alvin', 1, 'City Resort Hawaiian Blok B No.55', '081213', 123),
('123456', '654321', 'Michael Rio', 112, 'City Resort Hawaiian Blok B No.55', '081213', 123);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(123, 34, 2000000),
(124, 2020, 2500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaraan`
--
ALTER TABLE `pembayaraan`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_spp` (`id_spp`) USING BTREE,
  ADD KEY `nisn` (`nisn`) USING BTREE,
  ADD KEY `id_petugas` (`id_petugas`) USING BTREE,
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `siswa_ibfk_1` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaraan`
--
ALTER TABLE `pembayaraan`
  ADD CONSTRAINT `pembayaraan_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pembayaraan_ibfk_4` FOREIGN KEY (`id_spp`) REFERENCES `siswa` (`id_spp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pembayaraan_ibfk_5` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pembayaraan_ibfk_6` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
