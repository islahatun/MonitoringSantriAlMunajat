-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 02:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_almunajat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dm_hapalan`
--

CREATE TABLE `dm_hapalan` (
  `id_hapalan` int(11) NOT NULL,
  `nisn` varchar(16) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `surah` varchar(30) DEFAULT NULL,
  `ayat` varchar(30) DEFAULT NULL,
  `juz` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_hukuman`
--

CREATE TABLE `dm_hukuman` (
  `id_hukuman` int(11) NOT NULL,
  `poin_hukuman` int(11) NOT NULL,
  `nama_hukuman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_prestasi`
--

CREATE TABLE `dm_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `prestasi` varchar(255) DEFAULT NULL,
  `nisn` varchar(13) DEFAULT NULL,
  `nama_santri` varchar(50) DEFAULT NULL,
  `tanggal_submit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_prestasi`
--

INSERT INTO `dm_prestasi` (`id_prestasi`, `prestasi`, `nisn`, `nama_santri`, `tanggal_submit`) VALUES
(1, 'Hapalan 1 hari 3 Juz', '30', NULL, NULL),
(2, NULL, 'iajaks', 'sasasa', '2022-06-06'),
(3, NULL, 'asasa', 'sasas', '2022-06-07'),
(4, 'saaas', 'sasas', 'sasaa', '2022-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `dm_santri`
--

CREATE TABLE `dm_santri` (
  `id_santri` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_santri` varchar(50) DEFAULT NULL,
  `kelas` int(11) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `agama` varchar(1) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(30) DEFAULT NULL,
  `no_hp_ayah` varchar(13) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(30) DEFAULT NULL,
  `no_hp_ibu` varchar(13) DEFAULT NULL,
  `alamat_orangtua` varchar(255) DEFAULT NULL,
  `nama_wali_santri` varchar(50) DEFAULT NULL,
  `alamat_wali_santri` varchar(255) DEFAULT NULL,
  `no_hp_wali_santri` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_santri`
--

INSERT INTO `dm_santri` (`id_santri`, `nisn`, `nama_santri`, `kelas`, `jenis_kelamin`, `agama`, `alamat`, `nama_ayah`, `pekerjaan_ayah`, `no_hp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `no_hp_ibu`, `alamat_orangtua`, `nama_wali_santri`, `alamat_wali_santri`, `no_hp_wali_santri`) VALUES
(1, '123', NULL, 1, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dm_wali_santri`
--

CREATE TABLE `dm_wali_santri` (
  `id_wali_santri` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_wali_santri` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_wali_santri`
--

INSERT INTO `dm_wali_santri` (`id_wali_santri`, `id_kelas`, `nama_wali_santri`) VALUES
(1, 1, 'Siti S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, '1-A Kebangsaan');

-- --------------------------------------------------------

--
-- Table structure for table `sys_logs`
--

CREATE TABLE `sys_logs` (
  `log_id` int(11) NOT NULL,
  `log_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_modules`
--

CREATE TABLE `sys_modules` (
  `module_id` int(11) NOT NULL,
  `navbar_id` int(11) DEFAULT NULL,
  `module_name` varchar(150) NOT NULL,
  `link` varchar(250) NOT NULL,
  `src` varchar(250) NOT NULL,
  `m_view` enum('Y','N') DEFAULT 'N' COMMENT 'Y Jika module mempunya fungsi view, N Jika module tidak mempunya fungsi view',
  `m_add` enum('Y','N') DEFAULT 'N',
  `m_upd` enum('Y','N') DEFAULT 'N',
  `m_del` enum('Y','N') DEFAULT 'N',
  `active` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_modules`
--

INSERT INTO `sys_modules` (`module_id`, `navbar_id`, `module_name`, `link`, `src`, `m_view`, `m_add`, `m_upd`, `m_del`, `active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'dashboard', 'Y', 'N', 'N', 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sys_navbar`
--

CREATE TABLE `sys_navbar` (
  `navbar_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `navbar_icon` varchar(100) DEFAULT NULL,
  `navbar_name` varchar(50) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `active` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_navbar`
--

INSERT INTO `sys_navbar` (`navbar_id`, `parent_id`, `navbar_icon`, `navbar_name`, `link`, `sort`, `active`) VALUES
(1, 0, '<i class=\"fas fa-tachometer-alt\"></i>', 'Dashboard', NULL, 1, 'Y'),
(3, 0, '<i class=\"fas fa-user\"></i>', 'Pendaftaran', NULL, 2, 'N'),
(4, 3, NULL, 'Santri', 'pasien', 0, 'N'),
(5, 3, NULL, 'Pembatalan Transaksi', NULL, 0, 'N'),
(6, 3, NULL, 'IGD', NULL, 0, 'N'),
(7, 0, '<i class=\"fas fa-server\"></i>', 'Master Data', NULL, 3, 'Y'),
(8, 7, NULL, 'Kelas', 'Kelas', 0, 'Y'),
(9, 7, NULL, 'Wali Santri', 'WaliSantri', 0, 'Y'),
(10, 7, NULL, 'Peraturan', 'Peraturan', 0, 'N'),
(11, 7, NULL, 'Prestasi', 'Prestasi', 0, 'N'),
(15, 7, NULL, 'Hukuman', 'Hukuman', 0, 'N'),
(16, 7, NULL, 'Santri', 'Santri', 0, 'Y'),
(17, 7, NULL, 'Asal Rujukan', NULL, 0, 'N'),
(18, 0, '<i class=\"fas fa-calendar-alt\"></i>', 'Pelanggaran', 'Pelanggaran', 4, 'Y'),
(19, 0, '<i class=\"fas fa-medal\"></i>', 'Prestasi', 'Prestasi', 5, 'Y'),
(20, 0, '<i class=\"fas fa-book-reader\"></i>', 'Hapalan', 'Hapalan', 6, 'Y'),
(24, 0, '<i class=\"fas fa-book-medical\"></i>', 'Laporan', NULL, 9, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sys_rules`
--

CREATE TABLE `sys_rules` (
  `rule_id` int(11) NOT NULL,
  `rule_name` varchar(150) NOT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_rules`
--

INSERT INTO `sys_rules` (`rule_id`, `rule_name`, `active`) VALUES
(1, 'All Users', 'Y'),
(2, 'Administrator', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sys_rulesmodules`
--

CREATE TABLE `sys_rulesmodules` (
  `rule_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `m_view` enum('Y','N') DEFAULT NULL,
  `m_add` enum('Y','N') DEFAULT NULL,
  `m_upd` enum('Y','N') DEFAULT NULL,
  `m_del` enum('Y','N') DEFAULT NULL,
  `active` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(250) NOT NULL DEFAULT '',
  `session_id` varchar(250) DEFAULT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`username`, `password`, `session_id`, `active`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'Y');

-- --------------------------------------------------------

--
-- Stand-in structure for view `trans_pelanggaran_vd`
-- (See below for the actual view)
--
CREATE TABLE `trans_pelanggaran_vd` (
);

-- --------------------------------------------------------

--
-- Table structure for table `trans_pesan`
--

CREATE TABLE `trans_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nisn` varchar(16) DEFAULT NULL,
  `isi_pertanyaan` varchar(255) DEFAULT NULL,
  `isi_jawaban` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Hari Aspriyono'),
(3, 'admin2', 'd41d8cd98f00b204e9800998ecf8427e', 'Admin Satu');

-- --------------------------------------------------------

--
-- Structure for view `trans_pelanggaran_vd`
--
DROP TABLE IF EXISTS `trans_pelanggaran_vd`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `trans_pelanggaran_vd`  AS SELECT `dm_pelanggaran`.`hukuman` AS `hukuman`, `dm_pelanggaran`.`pelanggaran` AS `pelanggaran`, `kelas`.`id_kelas` AS `id_kelas`, `dm_pelanggaran`.`nisn` AS `nisn` FROM ((`dm_pelanggaran` join `dm_santri` on(`dm_santri`.`nisn` = `dm_pelanggaran`.`nisn`)) join `kelas` on(`kelas`.`id_kelas` = `dm_santri`.`kelas`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dm_hapalan`
--
ALTER TABLE `dm_hapalan`
  ADD PRIMARY KEY (`id_hapalan`);

--
-- Indexes for table `dm_hukuman`
--
ALTER TABLE `dm_hukuman`
  ADD PRIMARY KEY (`id_hukuman`);

--
-- Indexes for table `dm_prestasi`
--
ALTER TABLE `dm_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `dm_santri`
--
ALTER TABLE `dm_santri`
  ADD PRIMARY KEY (`id_santri`,`nisn`);

--
-- Indexes for table `dm_wali_santri`
--
ALTER TABLE `dm_wali_santri`
  ADD PRIMARY KEY (`id_wali_santri`) USING BTREE;

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `trans_pesan`
--
ALTER TABLE `trans_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dm_hapalan`
--
ALTER TABLE `dm_hapalan`
  MODIFY `id_hapalan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_hukuman`
--
ALTER TABLE `dm_hukuman`
  MODIFY `id_hukuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_prestasi`
--
ALTER TABLE `dm_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dm_santri`
--
ALTER TABLE `dm_santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dm_wali_santri`
--
ALTER TABLE `dm_wali_santri`
  MODIFY `id_wali_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trans_pesan`
--
ALTER TABLE `trans_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
