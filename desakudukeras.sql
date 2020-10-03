-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 06:51 PM
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
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `id` int(11) NOT NULL,
  `noktp` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `updatetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` int(11) NOT NULL,
  `warna_header` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboards`
--

INSERT INTO `dashboards` (`id`, `warna_header`, `image`) VALUES
(1, 'bg-success', 'banner');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `title` text NOT NULL,
  `updateby` varchar(30) NOT NULL,
  `updatetime` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `title`, `updateby`, `updatetime`, `kategori`) VALUES
(61, '1.png', 'Basic line', 'admin', '27-Jun-2020', 'Gotong Royong'),
(62, '1.png', 'kegiatan pkk RW 001', 'admin', '2020/12/12', 'PKK'),
(63, '1.png', 'Membersihkan Tempat ibadah', 'admin', '20/02/2020', 'Gotong Royong');

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
-- Table structure for table `kabar_berita`
--

CREATE TABLE `kabar_berita` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `updateby` varchar(30) NOT NULL,
  `updatetime` varchar(30) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(30, 'Kegiatan Gotong Royong', 'admin', '16-Jun-2020', '1.png', 'kegiatan gotong royong setiap hari libur nasional'),
(31, 'Basic line', 'admin', '16-Jun-2020', 'kebersihan1.png', 'admin'),
(32, 'Basic line', 'admin', '16-Jun-2020', 'kebersihan3.png', 'admin'),
(34, 'Kegiata gotong royong antar RW di desa kudukeras setiap hari minggu / hari libur nasional', 'admin', '18-Jun-2020', 'kebersihan44.png', 'Kegiatan ini di laksanakan dalam rangka untuk menjalin silaturahmi antar rw se desa kudukeras. ');

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
(13, 'Kebersihan', 'admin', '23-Jul-2020', '1.png', 'kegiatan kebersihan desa kudukeras'),
(14, 'pembangunan', 'admin', '23-Jul-2020', 'kebersihan6.png', 'pembangunan gedung usaha');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_publik`
--

CREATE TABLE `layanan_publik` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `nama_surat` text NOT NULL,
  `file` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_publik`
--

INSERT INTO `layanan_publik` (`id`, `title`, `nama_surat`, `file`, `icon`) VALUES
(18, 'RANCANGAN Perdes SOTK TH 2020', 'RANCANGAN Perdes SOTK TH 2020', 'Untitled-1.pdf', 'kartu-keluarga.png'),
(19, 'Formulir Permohonan EFIN', 'Formulir Permohonan EFIN', 'Formulir Permohonan EFIN.pdf', 'kartu-keluarga.png'),
(20, 'testing', 'testing', 'Untitled-1.pdf', '');

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
-- Table structure for table `potensi_desa`
--

CREATE TABLE `potensi_desa` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `updateby` varchar(30) NOT NULL,
  `uraian` text NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potensi_desa`
--

INSERT INTO `potensi_desa` (`id`, `title`, `image`, `date`, `updateby`, `uraian`, `kategori`) VALUES
(1, 'pertanian warga', '1.png', '2020-04-08', 'admin', 'pertanian desa kudukeras', 'Pertanian'),
(2, 'peternakan warga', '1.png', '20/12/2020', 'admin', 'peternakan warga desa kudukeras', 'Peternakan'),
(4, 'peternakan warga', '1.png', '20/12/2020', 'admin', 'ternak', 'Peternakan'),
(5, 'perkebunan', '1.png', '2020-04-08', 'admin', 'perkebunan', 'kebun'),
(6, 'perbengkelan', '1.png', '2020-04-08', 'admin', 'bengkel', 'bengkel'),
(7, 'perhotelan', '1.png', '20/12/2020', 'admin', 'hotel', 'hotel'),
(8, 'kebun bawang', '1.png', '2020-04-08', 'admin', 'kebun bawang', 'kebun'),
(9, 'kebun cabe', '1.png', '2020-04-08', 'admin', 'kebun cabe', 'kebun');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` varchar(30) NOT NULL,
  `sejarah` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `sms` int(15) DEFAULT NULL,
  `whatsapp` text DEFAULT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `sejarah`, `visi`, `misi`, `sms`, `whatsapp`, `email`) VALUES
('1', 'mewujudkan pembangunan yg serba modern', 'isi visi', '1. ddkkkdkkd\r\n2. fffggggll\r\n3.llllllll', 111122223, '99998888777', 'hhhjjjkk@gmail.com');

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
(19, '', 'AHMAD SUSANTO', 'kepala', 'AHMAD SUSANTO KUDUKERAS.JPG'),
(20, '', 'ASEPUDIN', 'Bendahara', 'ASEPUDIN KUDUKERAS.JPG'),
(21, '', 'DARSAN ', 'ANGGOTA', 'DARSAN KUDUKERAS.JPG'),
(22, '', 'ENDI KUSWANDI ', 'ANGGOTA', 'ENDI KUSWANDI KUDUKERAS.JPG');

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
(7, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'Super User', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `kabar_berita`
--
ALTER TABLE `kabar_berita`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cs`
--
ALTER TABLE `cs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kabar_berita`
--
ALTER TABLE `kabar_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabar_desa`
--
ALTER TABLE `kabar_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `layanan_publik`
--
ALTER TABLE `layanan_publik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
