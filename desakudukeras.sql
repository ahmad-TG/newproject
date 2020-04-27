-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 04:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desakudukeras`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `title`) VALUES
(6, 'desain.jpg', 'aaa'),
(7, 'desain 22.jpg', 'sss'),
(8, 'desain 22.aa.jpg', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(5) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Direktur'),
(2, 'Manajer'),
(3, 'Sekretaris'),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `kabar_desa`
--

CREATE TABLE `kabar_desa` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `updateby` varchar(30) NOT NULL,
  `updatetime` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabar_desa`
--

INSERT INTO `kabar_desa` (`id`, `title`, `updateby`, `updatetime`, `foto`, `uraian`) VALUES
(4, 'renovai', 'admin', '2020-04-13', 'RUTILAHU (2).jpg', 'renovasi');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `updateby` varchar(30) NOT NULL,
  `updatetime` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `title`, `updateby`, `updatetime`, `foto`, `uraian`) VALUES
(4, 'renovasi', 'admin', '201920', 'rutilahu.jpg', 'renovasi');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_publik`
--

CREATE TABLE `layanan_publik` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `nama_surat` text NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_publik`
--

INSERT INTO `layanan_publik` (`id`, `title`, `nama_surat`, `file`) VALUES
(6, 'test', 'Yessi herlistiana', 'berhasil update action.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jabatan` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `tgl_lahir`, `id_jabatan`, `foto`, `keterangan`) VALUES
(6, 'Daffa Shidqi', 'L', '1998-07-09', 1, 'daffa.png', 'Pimpinan perusahaan'),
(7, 'Afaf Firdaus', 'L', '1994-04-13', 2, 'latif.png', ''),
(8, 'Kaesang Ayu', 'P', '2002-08-16', 3, 'kaesang.png', ''),
(9, 'ahmad', 'L', '2020-04-13', 2, 'desain.jpg', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `sort` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `sort`, `nama`, `jabatan`, `foto`) VALUES
(5, '1', 'AHMAD SUSANTO', 'kepala', 'AHMAD SUSANTO KUDUKERAS.JPG'),
(6, '2', 'ASEPUDIN KUDUKERAS', 'ANGGOTA', 'ASEPUDIN KUDUKERAS.JPG'),
(7, '3', 'Darsan', 'Bendahara', 'DARSAN KUDUKERAS.JPG'),
(8, '4', 'ENDI KUSWANDI', 'ANGGOTA', 'ENDI KUSWANDI KUDUKERAS.JPG'),
(9, '6', 'HERI SUSANTO 2', 'ANGGOTA', 'HERI SUWANTO KUDUKERAS.JPG'),
(10, '5', 'JAENUDIN', 'ANGGOTA', 'JAENUDIN KUDUKERAS.JPG'),
(11, '7', 'KARSUN', 'ANGGOTA', 'KARSUN KUDUKERAS.JPG'),
(12, '8', 'SUTRISNO', 'ANGGOTA', 'SUTRISNO KUDUKERAS.JPG'),
(13, '9', 'TRESNAEDI', 'ANGGOTA', 'TRESNAEDI KUDUKERAS.JPG'),
(14, '10', 'WARID', 'ANGGOTA', 'WARID KUDUKERAS.JPG'),
(15, '11', 'YAYAN HERIYANA', 'ANGGOTA', 'YAYAN HERIYANA KUDUKERAS.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`) VALUES
(7, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kabar_desa`
--
ALTER TABLE `kabar_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_publik`
--
ALTER TABLE `layanan_publik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kabar_desa`
--
ALTER TABLE `kabar_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `layanan_publik`
--
ALTER TABLE `layanan_publik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
