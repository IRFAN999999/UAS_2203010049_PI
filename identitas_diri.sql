-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 03:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `identitas_diri`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `nomor` int(11) NOT NULL,
  `project` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `link_project` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`nomor`, `project`, `keterangan`, `foto`, `link_project`) VALUES
(1, 'Halaman Portfolio ', 'Membuat Halaman Portofolio Sederhana Sebagai Syarat dan Tugas Melaksanakan UTS Matakuliah Pemrograman Internet ', 'Image_HalamanWeb.jpg', 'http://localhost/UAS_2203010049_Muhammad-Irfan-Fauzi-Rahman_TI-B//Image_HalamanWeb.jpg'),
(2, 'Latihan Membuat Halaman Web Kampus', 'Latihan Membuat Halaman Web yang menyerupai laman web resmi Kampus sebagai tugas praktikum Pemrograman Internet', 'Framework_membuat_laman_web_kampus.jpg', 'http://localhost/UAS_2203010049_Muhammad-Irfan-Fauzi-Rahman_TI-B//Framework_membuat_laman_web_kampus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `nomor` int(11) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `sekolah_kampus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`nomor`, `pendidikan`, `tahun`, `sekolah_kampus`) VALUES
(1, 'SD', 2016, 'MI SUKAJAYA SUKAHURIP'),
(2, 'SMP', 2019, 'MTS YPPS SUKAHURIP'),
(3, 'SMK', 2022, 'SMK MANANGGA PRATAMA TASIKMALAYA'),
(4, 'S1', 2026, 'UNIVERSITAS PERJUANGAN TASIKMALAYA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `jenis_kelamin`, `alamat`, `deskripsi`, `foto`) VALUES
(1, 'Muhammad Irfan Fauzi Rahman', 'Laki-laki', 'Dusun Sukajaya, Sukahurip, Kec. Cihaurbeuti, Kab. Ciamis, Jawa Barat 46262, Indonesia', 'Mahasiswa Teknik Informatika, Angkatan 2022 ', 'M-IRFAN.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
