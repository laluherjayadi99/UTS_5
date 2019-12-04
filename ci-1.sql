-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 03:57 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nama`, `nim`, `email`, `prodi`) VALUES
(1, 'Lalu herjayadi', 'TI14170026', 'laluherjayadiputra@gmail.com', 'teknik informatika'),
(2, 'hamzan', 'TI14170014', 'azizi@gmail.com', 'Tehnik elektro');

-- --------------------------------------------------------

--
-- Table structure for table `mt_pengguna`
--

CREATE TABLE `mt_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_pengguna`
--

INSERT INTO `mt_pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`, `status`) VALUES
(1, 'Lalu herjayadi', 'herjayadi', 'bayangkara', 'Administrator', 'Aktif'),
(2, 'Hermantino', 'herman', '123', 'Sekretaris', 'Aktif'),
(4, 'Dedi', 'ded', '12', 'user', 'duda'),
(5, 'Baiq salwa', 'salwa', '123', 'user', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_depan`, `nama_belakang`, `email`, `username`, `password`, `level`, `photo`) VALUES
(1, 'Lalu herjayadi', 'Putra', 'laluherjayadiputra@gmail.com', 'jayadiputra', '123', 'admin', 'aku.jpg'),
(2, 'Emilana', 'Fitriana', 'emilana@gmail.com', 'Emilafit', '1234', 'Administrator', 'gbr.jpg'),
(3, 'jona', 'dewi', 'jonadewi@gmaill.com', 'jonadewi', '12345', 'staf', 'dua.jpg'),
(4, 'Lalu', 'Syaiful', 'syaifullalu@gmail.com', 'LaluSyaiful', '1234', 'staf', 'tiga.jpg'),
(7, 'Diana', 'Selfi widiana', 'dianaselfi@gmail.com', 'diana', '123', 'staf', 'image.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_pengguna`
--
ALTER TABLE `mt_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mt_pengguna`
--
ALTER TABLE `mt_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
