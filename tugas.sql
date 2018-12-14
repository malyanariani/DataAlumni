-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 11:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nama`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_masuk`
--

CREATE TABLE `formulir_masuk` (
  `id_formulir` int(11) NOT NULL,
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `tahun_masuk` varchar(10) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir_masuk`
--

INSERT INTO `formulir_masuk` (`id_formulir`, `nama_depan`, `nama_belakang`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `email`, `no_telp`, `tahun_masuk`, `prodi`, `pekerjaan`, `judul`) VALUES
(1, 'Malyana', 'Ariani', 'Makassar', '06-07-1998', 'Islam', 'Jl. Antang Raya', 'malyana@gmail.com', '082286861298', '2016', 'Teknik Informatika', 'Wirausahawan', 'Implementasi Penggunaan Codeigniter'),
(2, 'Ayu Lestari', 'Ramadani', 'Sengkang', '12-12-1999', 'Islam', 'Gowa', 'ayulestari@gmail.com', '089756435678', '2016', 'Teknik Informatika', 'Pegawai', 'Pemrograman Berbasis Web'),
(3, 'Safina', 'A', 'Makassar', '9-4-1998', 'Islam', 'Jl. Veteran', 'safinaa@gmail.com', '085234567890', '2016', 'Teknik Elektro', 'Pegawai', 'Elektronika'),
(4, 'Astuti', 'Mayangsari', 'Gowa', '10-1-1999', 'Islam', 'Gowa', 'astutimygsr@gmail.com', '085123456890', '2016', 'Teknik Arsitektur', 'Arsitek', 'Mendesain Rumah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `formulir_masuk`
--
ALTER TABLE `formulir_masuk`
  ADD PRIMARY KEY (`id_formulir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir_masuk`
--
ALTER TABLE `formulir_masuk`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
