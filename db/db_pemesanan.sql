-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 01:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemesanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(5) NOT NULL,
  `id_obat` int(5) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `jenis_obat` varchar(30) NOT NULL,
  `dosis_obat` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `resep_obat` varchar(100) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `id_obat`, `nama_obat`, `jenis_obat`, `dosis_obat`, `tanggal_masuk`, `resep_obat`, `nama_pemesan`) VALUES
(1, 101, 'Komix', 'Siirup', 'Rendah', '2021-12-31', 'Obat Batuk', 'Sahayantii sinaga'),
(2, 102, 'Inzana', 'Butir', 'Sedang', '2021-01-10', 'Obat Demam', 'Ratna Sari'),
(3, 103, 'Promag', 'Butir', 'Tinggi', '2021-01-10', 'Obat Maag', 'Putri Syafura'),
(11, 106, 'Feminax', 'Kapsul', 'Tinggi', '2021-12-31', 'Mengatasi Asam Urat', 'Nazwa Shihab'),
(12, 106, 'Procol', 'Pil', 'Tinggi', '2017-12-13', 'Obat Demam', 'Sharulkhan');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(5) NOT NULL,
  `id_pemesan` varchar(50) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `resep_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_pemesan`, `nama_pemesan`, `usia`, `jenis_kelamin`, `tanggal_masuk`, `alamat`, `keluhan`, `resep_obat`) VALUES
(8, '101', 'Sahayantii Sinaga', '23 Tahun', 'Perempuan', '2017-12-31', 'Jln.Sipori pori', 'Sakiit Tenggorokan', 'Obat Batuk Dewasa'),
(9, '102', 'Ratna Sari', '23 Tahun', 'Perempuan', '2019-12-14', 'jln.Titi Gantung', 'Sakit Kepala', 'Obat Migran'),
(10, '103', 'Putri Syafura', '22 Tahun', 'Perempuan', '2021-01-12', 'Jln. anwar idris', 'Flu batuk pilek', 'Obat Flu batuk pilek'),
(12, '104', 'Lim Jukyung', '18 Tahun', 'Perempuan', '2020-09-25', 'Seoul, Belok Kiri', 'Darah Rendah', 'Sanobion'),
(13, '107', 'Ely sugigi', '30 Tahun', 'Perempuan', '2019-01-22', 'Jln. Krispatih', 'Sakit Gigi', 'Obat sakit gigi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '25d55ad283aa400af464c76d713c07ad', 'astanjungbalai@gmail.com', 'Developer Tanjungbalai', 1, 'Staff Apotik Sehat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_perkara` (`nama_pemesan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
