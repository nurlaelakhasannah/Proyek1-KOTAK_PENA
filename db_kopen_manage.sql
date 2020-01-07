-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 12:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

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
  `nama_arsip` varchar(100) NOT NULL,
  `kategori_arsip` enum('proker','konten','dokumen') NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`arsip_id`, `user_id`, `nama_arsip`, `kategori_arsip`, `tahun`, `file`) VALUES
(2, 3, 'Proker Film', 'proker', '2019', 'sjjdhjshfj.docx'),
(3, 3, 'Proker Canon PhotoMarathon', 'proker', '2019', 'sjjdhjshfj.docx'),
(4, 3, 'Proker Seminar', 'proker', '2019', 'sjjdhjshfj.docx');

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
(5, 7, 'PJTD', 'psda', '', 'Pelatihan Jurnalisti Tingkat Dasar yang merupakan bagian darii kaderisasi Calon anggota Baru Kotak Pena 2019', '2019', 'di terima', '[PSDA]kaderisasi3.docx'),
(6, 5, 'Film DIANA', '', 'Editing video', 'Film merupakan aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbdnndn', '2019', 'proses', '[EVideo]Proposal Lomba Vlog Kopen.docx'),
(7, 3, 'Lomba Puisi', 'pers', 'penulis', 'Puisi merupakan karya tulis sastra yang merupakan blablabla', '2019', 'proses', 'sjjdhjshfj.docx'),
(9, 3, 'Vektor', 'multimedia', 'edimage', 'Vektorrrr cvncnvkc Canon phtomarathon merupakan lomba fotografi seindonesia', '2020', 'proses', 'sjjdhjshfj.docx');

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

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `user_id`, `waktu_kegiatan`, `desc_kegiatan`) VALUES
(2, 3, '2020-01-29', 'Studi Banding Net TV'),
(3, 3, '2020-01-28', 'Berangkat Studi Banding'),
(4, 3, '2020-01-24', 'Rapat Akhir Persiapan'),
(5, 3, '2020-01-06', 'Open Submition'),
(6, 3, '2020-01-20', 'Teknikal Meeting'),
(7, 3, '2020-01-08', 'EXPO PROYEK');

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
(8, 'Dian Anita', 'PSDA', 'dian@gmail.com', 'pengurus', 'dian', 'dian', '089888888812', 'aktif', '2019-2020'),
(9, 'Fliza Farhanis', 'PSDA', 'fliza123@gmail.com', 'pengurus', 'fliza', 'fliza', '08123456789', 'tidak aktif', '2019-2020'),
(10, 'Johan', 'Redaksi', 'johan@gmail.com', 'pengurus', 'johan', 'joanu', '08123456799', 'aktif', '2019-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`arsip_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`proker_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `arsip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `proker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `arsip_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbuser` (`user_id`);

--
-- Constraints for table `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `proker_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbuser` (`user_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbuser` (`user_id`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbuser` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
