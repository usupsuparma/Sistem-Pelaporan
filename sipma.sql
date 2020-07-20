-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 07:30 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipma`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `id_aduan` int(11) NOT NULL,
  `kode_berkas` varchar(20) NOT NULL,
  `nik_p` varchar(16) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `alamat_p` varchar(50) NOT NULL,
  `jk_p` enum('pria','wanita') NOT NULL,
  `nohp_p` varchar(12) NOT NULL,
  `nama_k` varchar(50) NOT NULL,
  `alamat_k` varchar(50) NOT NULL,
  `jk_k` enum('pria','wanita') NOT NULL,
  `nohp_k` varchar(12) NOT NULL,
  `kategori` enum('kekerasan fisik','kdrt','maling','begal','pembunuhan') NOT NULL,
  `tkp` varchar(50) NOT NULL,
  `desk` varchar(256) NOT NULL,
  `modus` varchar(256) NOT NULL,
  `waktu` date NOT NULL,
  `tgl_desk` date NOT NULL,
  `desk_progres` enum('laporan terkirim','laporan diterima','laporan segera di tindaklanjuti','laporan sedang di proses','laporan aduan selesai ditangani') NOT NULL,
  `status` enum('belum selesai','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`id_aduan`, `kode_berkas`, `nik_p`, `nama_p`, `alamat_p`, `jk_p`, `nohp_p`, `nama_k`, `alamat_k`, `jk_k`, `nohp_k`, `kategori`, `tkp`, `desk`, `modus`, `waktu`, `tgl_desk`, `desk_progres`, `status`) VALUES
(1, '', '3210010102900001', 'Rizky Rachmat Firdaus', 'Lengkong Wetan, Sindangwangi, Rajagaluh', 'pria', '081234567890', 'Ariana', 'Rajagaluh Lor, Rajagaluh, Rajagaluh', 'wanita', '08976543210', 'maling', 'Terminal Rajagaluh', 'Kemalingan dompet dan 1 buah handphone', 'Bertanya alamat pada korban', '2020-02-04', '2020-02-05', 'laporan sedang di proses', 'belum selesai'),
(2, '', '3210020304990001', 'Aa', 'Rajagaluh Kidul, Rajagaluh, Rajagaluh', 'pria', '085224123456', 'Eneng', 'Rajagaluh Lor, Rajagaluh, Rajagaluh', 'wanita', '085432123678', 'kdrt', 'Rumah Eneng', 'Suami memukul korban', 'Suami meminta uang kepada isteri tapi tidak diberi', '2020-02-03', '2020-02-04', 'laporan aduan selesai ditangani', 'selesai'),
(3, '', '3210010102900001', 'Aris', 'Rajagaluh Lor, Rajagaluh, Majalengka', 'pria', '081987234567', 'Neni', 'Sukahaji, Majalengka', 'wanita', '081234567889', 'begal', 'Depan SMA Negeri 1 Rajagaluh', 'Korban kehilangan berupa tas yang di dalamnya terdapat barang berharga berupa uang dan handphone', 'Menanyakan alamat', '2020-02-03', '2020-02-04', 'laporan segera di tindaklanjuti', 'belum selesai'),
(6, '', '3210010102900001', 'Aris', 'Maja Selatan', 'pria', '081987234567', 'Ariana', 'Sukahaji, Majalengka', 'wanita', '081234567889', 'begal', 'asfasf', 'adfad', 'Menanyakan alamat', '2020-02-05', '0000-00-00', 'laporan terkirim', 'belum selesai'),
(7, '', '3210010102977001', 'Rizky Rachmat Firdaus', 'Rajagaluh Lor, Rajagaluh, Majalengka', 'pria', '081987234222', 'Lina', 'Sukahaji, Majalengka', 'wanita', '081234567889', 'begal', 'adewf', 'htrue56', 'j5eyj', '2020-02-03', '0000-00-00', 'laporan terkirim', 'belum selesai'),
(8, '', '3210010102900001', 'dasdas', 'Rajagaluh Lor, Rajagaluh, Majalengka', 'wanita', '098765432112', 'dfsfs', 'Sukahaji, Majalengka', 'wanita', '081234567889', 'kdrt', 'asdas', 'sadsad', 'asdsa', '2020-02-04', '0000-00-00', 'laporan terkirim', 'belum selesai'),
(9, '', '3210010102920002', 'dsnfjskdb', 'hbhjbl', 'pria', '098765432198', 'sdfsdgds', 'gsdg', 'pria', '081234567889', 'pembunuhan', 'shrthtr', 'rsthsrth', 'rsthsrth', '2020-02-04', '0000-00-00', 'laporan terkirim', 'belum selesai'),
(10, '', '3210010102977001', 'Rizky Rachmat Firdaus', 'Maja Selatan', 'pria', '081987234222', 'Aris', 'Rajagaluh', 'pria', '081234567889', 'maling', 'Terminal Rajagaluh', 'Korban tidak kehilangan barang, tetapi mengalami sedikit trauma', 'Menanyakan alamat', '2020-02-05', '2020-02-08', 'laporan aduan selesai ditangani', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `nama`) VALUES
(2, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Aris B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id_aduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
