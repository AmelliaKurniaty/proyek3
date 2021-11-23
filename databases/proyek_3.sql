-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 04:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `nisn` varchar(10) NOT NULL,
  `status_kelolosan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`nisn`, `status_kelolosan`) VALUES
('1234', 'LOLOS');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `nisn` varchar(10) NOT NULL,
  `sk_siswa` varchar(100) DEFAULT NULL,
  `sk_bermaterai` varchar(100) DEFAULT NULL,
  `sk_pernyataan_sekolah` varchar(100) DEFAULT NULL,
  `slip_gaji` varchar(100) DEFAULT NULL,
  `slip_listrik_rumah` varchar(100) DEFAULT NULL,
  `denah_rumah` varchar(100) DEFAULT NULL,
  `foto_rumah` varchar(100) DEFAULT NULL,
  `ijasah` varchar(100) DEFAULT NULL,
  `kartu_keluarga` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`nisn`, `sk_siswa`, `sk_bermaterai`, `sk_pernyataan_sekolah`, `slip_gaji`, `slip_listrik_rumah`, `denah_rumah`, `foto_rumah`, `ijasah`, `kartu_keluarga`) VALUES
('5555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6', 'FILE-SK-SISWA-_6-2020-05-15.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(40) NOT NULL,
  `id_politeknik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `id_politeknik`) VALUES
(1101, 'Teknik Mesin', 1),
(1104, 'Teknik Kimia', 1),
(1106, 'Akuntasi', 2),
(1107, 'Administrasi Niaga', 1),
(1108, 'Teknik Elektro', 2),
(1109, 'Teknologi Informasi', 1),
(1110, 'Teknik Sipil', 1),
(1111, 'Teknik Elektro', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `date`, `modified_at`) VALUES
(1, '2020-05-15 11:43:00', '2020-05-15 04:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `politeknik`
--

CREATE TABLE `politeknik` (
  `id_politeknik` int(11) NOT NULL,
  `nama_politeknik` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `politeknik`
--

INSERT INTO `politeknik` (`id_politeknik`, `nama_politeknik`) VALUES
(1, 'Politeknik Negeri Malang'),
(2, 'Politeknik Negeri Sriwijaya');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_politeknik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `id_jurusan`, `id_politeknik`) VALUES
(1, 'D4 TMPP', 1101, 2),
(2, 'D4 Teknik Kimia', 1104, 1),
(6, 'D3 JTD', 1108, 0),
(7, 'D3 Bahasa Inggris', 1107, 0),
(8, 'D3 AN', 1107, 0),
(9, 'D4-Akuntansi', 1106, 0),
(10, 'D-4 Teknik Elektro', 1108, 0),
(11, 'D3 Sistem Kelistrikan', 1108, 0),
(13, 'D4 Teknik Elektronika', 1111, 0);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `status_beasiswa` int(11) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `nama_siswa` varchar(40) DEFAULT NULL,
  `alamat_siswa` varchar(50) DEFAULT NULL,
  `nama_orangtua` varchar(30) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `no_telepon` varchar(14) DEFAULT NULL,
  `asal_sekolah` varchar(20) DEFAULT NULL,
  `jurusan_sekolah` varchar(15) DEFAULT NULL,
  `nilai_rata` varchar(5) DEFAULT NULL,
  `politeknik_id` int(11) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nisn`, `email`, `username`, `password`, `name`, `level`) VALUES
(2, '', 'ppp', 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD KEY `nisn` (`nisn`) USING BTREE;

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`) USING BTREE,
  ADD KEY `id_politeknik` (`id_politeknik`) USING BTREE;

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `politeknik`
--
ALTER TABLE `politeknik`
  ADD PRIMARY KEY (`id_politeknik`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`) USING BTREE,
  ADD KEY `id_jurusan` (`id_jurusan`) USING BTREE;

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`) USING BTREE,
  ADD KEY `pil_prodi` (`prodi_id`),
  ADD KEY `pil_politeknik` (`politeknik_id`,`prodi_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nisn` (`nisn`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `politeknik`
--
ALTER TABLE `politeknik`
  MODIFY `id_politeknik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
