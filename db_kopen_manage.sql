-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 04:43 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kopen_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `arsip_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `proker_id` int(11) DEFAULT NULL,
  `konten_id` int(11) DEFAULT NULL,
  `nama_arsip` varchar(100) NOT NULL,
  `kategori_arsip` enum('proker','konten','dokumen') NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `proker_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul_proker` varchar(100) NOT NULL,
  `asal_divisi` varchar(100) DEFAULT NULL,
  `asal_subdivisi` varchar(100) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `tahun` varchar(15) DEFAULT NULL,
  `status` enum('di terima','tidak diterima','proses') DEFAULT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`proker_id`, `user_id`, `judul_proker`, `asal_divisi`, `asal_subdivisi`, `deskripsi`, `tahun`, `status`, `file`) VALUES
(1, 5, 'Diesnatalis Kotak Pena', 'humas', 'Editing Video', 'Diesnatalis Kotak Pena ke 7 tahun dengan tema \"Solidarity Forevor Jaya Asik yaaa\"', '2019-2020', 'di terima', ''),
(4, 5, 'PENA VLOG', 'humas', '', 'Vlog merupakan media informasi terbaru yang biasanya dibuat oleh orang-orang berperilaku tanpa rasa malu', '2019', 'di terima', 'NadaPBO.pdf'),
(5, 7, 'PJTD', 'psda', '', 'Pelatihan Jurnalisti Tingkat Dasar yang merupakan bagian darii kaderisasi Calon anggota Baru Kotak Pena 2019', '2019', 'proses', '[PSDA]kaderisasi3.docx'),
(6, 5, 'Film DIANA', '', 'Editing video', 'Film merupakan aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbdnndn', '2019', 'proses', '[EVideo]Proposal Lomba Vlog Kopen.docx');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `waktu_kegiatan` date NOT NULL,
  `desc_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` enum('superadmin','pengurus') NOT NULL,
  `password` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` enum('aktif','tidak aktif') DEFAULT NULL,
  `periode_jabatan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`user_id`, `nama_lengkap`, `jabatan`, `email`, `level`, `password`, `username`, `no_hp`, `status`, `periode_jabatan`) VALUES
(1, 'Wantrisnadi Gusti', 'Ketua Umum', 'gustiwacik@gmail.com', 'superadmin', 'wacik', 'wacik', '08911111111', 'aktif', '2019-2020'),
(2, 'Raka Mukti Harida', 'Wakil Ketua Umum', 'rakagoco@gmail.com', 'superadmin', 'raka', 'raka', '08199999999', 'aktif', '2019-2020'),
(3, 'Nurlaela Khasannah', 'Sekertaris', 'nurlaelakhsnnh12@gmail.com', 'superadmin', 'ela', 'ela', '081222544023', 'aktif', '2019-2020'),
(4, 'Shafa Filusufa', 'Bendahara', 'failusufa@gmail.com', 'superadmin', 'shafa', 'shafa', '088191919191', 'aktif', '2019-2020'),
(5, 'Nada Qonita Amalia', 'Humas', 'nada@gmail.com', 'pengurus', 'nada', 'Nada', '089765478965', 'aktif', '2019-2020'),
(7, 'Fitriana Cendra Kasih', 'PSDA', 'pipit@gmail.com', 'pengurus', 'pipit', 'pipit', '089888888888', 'aktif', '2019-2020'),
(8, 'Dian Anita', 'PSDA', 'dian@gmail.com', 'pengurus', 'dian', 'dian', '089888888812', 'aktif', '2019-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`arsip_id`),
  ADD KEY `FK_arsip_user_id` (`user_id`),
  ADD KEY `FK_arsip_proker_id` (`proker_id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`proker_id`),
  ADD KEY `FK_proker_user_id` (`user_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `arsip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `proker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `FK_arsip_konten_id` FOREIGN KEY (`konten_id`) REFERENCES `konten` (`konten_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_arsip_proker_id` FOREIGN KEY (`proker_id`) REFERENCES `proker` (`proker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_arsip_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbuser` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `FK_proker_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbuser` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbuser` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
