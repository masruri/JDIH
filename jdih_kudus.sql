-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 11:49 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdih_kudus`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk_hukum`
--

CREATE TABLE `produk_hukum` (
  `id_produk_hukum` int(11) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `produk_hukum` varchar(100) NOT NULL,
  `tentang` text NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `tahun` date NOT NULL,
  `download` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_hukum`
--

INSERT INTO `produk_hukum` (`id_produk_hukum`, `id_kategori`, `produk_hukum`, `tentang`, `berkas`, `tahun`, `download`) VALUES
(1, 1, 'Pemerintahan Nomor 58 Tahun 2017', 'PELAYANAN MASYARAKAT PADA HARI PELAKSANAAN PEMUNGUTAN SUARA PEMILIHAN GUBERNUR DAN WAKIL GUBERNUR DAERAH KHUSUS IBUKOTA JAKARTA PUTARAN KEDUA TAHUN 2017.', '', '2018-05-09', '44'),
(2, 2, 'Pemerintahan Nomor 29 Tahun 2017', 'PEMASANGAN ONDEL-ONDEL PADA KANTOR DI LINGKUNGAN PEMERINTAH PROVINSI DAERAH KHUSUS IBUKOTA JAKARTA', '', '2018-05-09', '33'),
(3, 3, 'Pemerintahan Nomor 5 Tahun 2017', 'PEMBENTUKAN DAN SUSUNAN PERANGKAT DAERAH PROVINSI DAERAH KHUSUS IBUKOTA JAKARTA', '', '2018-05-09', '12'),
(4, 4, 'Pemerintahan Nomor 50 Tahun 2012', 'PEMBENTUKAN DAN SUSUNAN PERANGKAT DAERAH PROVINSI DAERAH KHUSUS IBUKOTA JAKARTA DAN SEKITARNYA', '', '2018-05-09', '6'),
(10, 0, 'Kominfo PDF', 'Coba Upload File PdF', 'shopping_cart.pdf', '0000-00-00', ''),
(13, 0, 'Kalender 2018', 'Upload zip', 'kalender2009.rar', '0000-00-00', ''),
(14, 0, 'File PDF BARU', 'coba upload file pdf baru', 'Percobaan.pdf', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','asisten') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Muhamad masruri', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk_hukum`
--
ALTER TABLE `produk_hukum`
  ADD PRIMARY KEY (`id_produk_hukum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk_hukum`
--
ALTER TABLE `produk_hukum`
  MODIFY `id_produk_hukum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
