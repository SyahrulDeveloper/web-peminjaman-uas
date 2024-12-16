-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 12:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fik`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_peminjaman_kelas_dw`
--

CREATE TABLE `form_peminjaman_kelas_dw` (
  `id_dw` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `ruang_kelas` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nim` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_peminjaman_kelas_dw`
--

INSERT INTO `form_peminjaman_kelas_dw` (`id_dw`, `nama_mahasiswa`, `jurusan`, `ruang_kelas`, `tanggal`, `waktu`, `deskripsi`, `nim`) VALUES
(1, 'Muhammad Okto Syaifudin', 'D3-Sistem Informasi ', 'DS-302', '2024-12-09', '13:00 - 15:30', 'Kelas Tata Kelola TI', '2310512158'),
(2, 'Muhammad Sereno Khalfan Barlean ', 'S1-Sains Data', 'DS-203', '2024-12-10', '13:00 - 14:40', 'Untuk Kelas Technopreneurship', '2310512169'),
(3, 'Ananda Ganapati ', 'S1-Sistem Informasi', 'DS-401', '2024-12-11', '13:00 - 14:40', 'Kelas Tata Kelola TI', '2310512135'),
(4, 'Raihan Nur Muhammad', 'S1-Sistem Informasi', 'DS-202', '2024-12-12', '13:00 - 15:30', 'Untuk Mata Kuliah APSI', '2310512140'),
(5, 'Muhammad Syahrul Ramadhan', 'S1-Sistem Informasi', 'DS-301', '2024-12-13', '13:00 - 14:40', 'Kelas Teori Sistem Operasi', '2310512153');

-- --------------------------------------------------------

--
-- Table structure for table `form_peminjaman_kelas_fl`
--

CREATE TABLE `form_peminjaman_kelas_fl` (
  `id_fl` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `ruang_kelas` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nim` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_peminjaman_kelas_fl`
--

INSERT INTO `form_peminjaman_kelas_fl` (`id_fl`, `nama_mahasiswa`, `jurusan`, `ruang_kelas`, `tanggal`, `waktu`, `deskripsi`, `nim`) VALUES
(1, 'Raihan Nur Muhammad', 'S1-Sistem Informasi', 'FL-402', '2024-12-09', '15:30 - 17:10', 'Untuk Kelas Praktikum Pemrograman Dasar', '2310512140'),
(2, 'Ananda Ganapati', 'S1-Sistem Informasi', 'FL-301', '2024-12-11', '14:40 - 16:20', 'Untuk Kelas Praktikum Pemrograman Dasar', '2310512135'),
(3, 'Muhammad Okto Syaifudin', 'D3-Sistem Informasi ', 'FL-204', '2024-12-12', '13:00 - 14:40', 'Kelas Praktikum Basis Data', '2310512158'),
(4, 'Muhammad Sereno Khalfan Barlean ', 'S1-Sains Data', 'FL-301', '2024-12-13', '15:30 - 17:10', 'Praktikum Konsep Basis Data', '2310512169'),
(5, 'Muhammad Syahrul Ramadhan', 'S1-Sistem Informasi', 'FL-301', '2024-12-14', '14:40 - 16:20', 'Untuk Kelas Praktikum Pemrograman Dasar', '2310512153');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_ds`
--

CREATE TABLE `kelas_ds` (
  `id` int(11) NOT NULL,
  `ruang_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas_ds`
--

INSERT INTO `kelas_ds` (`id`, `ruang_kelas`) VALUES
(1, 'DS-201'),
(2, 'DS-202'),
(3, 'DS-203'),
(4, 'DS-204'),
(5, 'DS-301'),
(6, 'DS-302'),
(7, 'DS-303'),
(8, 'DS-304'),
(9, 'DS-401'),
(10, 'DS-402'),
(11, 'DS-403');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_fl`
--

CREATE TABLE `kelas_fl` (
  `id` int(11) NOT NULL,
  `ruang_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas_fl`
--

INSERT INTO `kelas_fl` (`id`, `ruang_kelas`) VALUES
(1, 'FL-201'),
(2, 'FL-202'),
(3, 'FL-203'),
(4, 'FL-204'),
(5, 'FL-301'),
(6, 'FL-302'),
(7, 'FL-303'),
(8, 'FL-304'),
(9, 'FL-401'),
(10, 'FL-402'),
(11, 'FL-403');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'okto', 'okto@gmail.com', 'website sangat bagus, pertahankan'),
(2, 'syahrul', 'syahrul@gmail.com', 'Semoga websitenya di nilai bagus dan berfungsi dengan baik'),
(3, 'Muhammad Syahrul Ramadhan', 'syahrul@gmail.com', 'Websitenya berfungsi dengan baik'),
(4, 'tasya', 'tasya@gmail.com', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `jurusan`) VALUES
(4, 'D3-Sistem Informasi '),
(2, 'S1-Informatika'),
(3, 'S1-Sains Data'),
(1, 'S1-Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `password`) VALUES
(1, '2310512153', 'syahrul123'),
(2, '2310512135', 'ganapati123'),
(3, '2310512140', 'raihan123'),
(4, '2310512158', 'okto123'),
(5, '2310512169', 'reno123'),
(6, '2310512148', 'dayu123'),
(7, '2310512164', 'tasya123'),
(8, '2310512174', 'dewi123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_peminjaman_kelas_dw`
--
ALTER TABLE `form_peminjaman_kelas_dw`
  ADD PRIMARY KEY (`id_dw`),
  ADD KEY `nim` (`nim`),
  ADD KEY `ruang_kelas` (`ruang_kelas`),
  ADD KEY `form_peminjaman_kelas_dw_ibfk_3` (`jurusan`);

--
-- Indexes for table `form_peminjaman_kelas_fl`
--
ALTER TABLE `form_peminjaman_kelas_fl`
  ADD PRIMARY KEY (`id_fl`),
  ADD KEY `nim` (`nim`),
  ADD KEY `ruang_kelas` (`ruang_kelas`),
  ADD KEY `form_peminjaman_kelas_fl_ibfk_3` (`jurusan`);

--
-- Indexes for table `kelas_ds`
--
ALTER TABLE `kelas_ds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruang_kelas` (`ruang_kelas`);

--
-- Indexes for table `kelas_fl`
--
ALTER TABLE `kelas_fl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruang_kelas` (`ruang_kelas`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurusan` (`jurusan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_peminjaman_kelas_dw`
--
ALTER TABLE `form_peminjaman_kelas_dw`
  MODIFY `id_dw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form_peminjaman_kelas_fl`
--
ALTER TABLE `form_peminjaman_kelas_fl`
  MODIFY `id_fl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas_ds`
--
ALTER TABLE `kelas_ds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kelas_fl`
--
ALTER TABLE `kelas_fl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_peminjaman_kelas_dw`
--
ALTER TABLE `form_peminjaman_kelas_dw`
  ADD CONSTRAINT `form_peminjaman_kelas_dw_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_peminjaman_kelas_dw_ibfk_2` FOREIGN KEY (`ruang_kelas`) REFERENCES `kelas_ds` (`ruang_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_peminjaman_kelas_dw_ibfk_3` FOREIGN KEY (`jurusan`) REFERENCES `prodi` (`jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form_peminjaman_kelas_fl`
--
ALTER TABLE `form_peminjaman_kelas_fl`
  ADD CONSTRAINT `form_peminjaman_kelas_fl_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_peminjaman_kelas_fl_ibfk_2` FOREIGN KEY (`ruang_kelas`) REFERENCES `kelas_fl` (`ruang_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_peminjaman_kelas_fl_ibfk_3` FOREIGN KEY (`jurusan`) REFERENCES `prodi` (`jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
