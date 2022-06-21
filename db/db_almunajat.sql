-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 05:38 PM
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

--
-- Dumping data for table `dm_hapalan`
--

INSERT INTO `dm_hapalan` (`id_hapalan`, `nisn`, `nama_santri`, `surah`, `ayat`, `juz`, `tanggal`) VALUES
(1, '123', 'Nama santri saya adalah', 'al- baqaarah', '1', '1', '2022-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `dm_pelanggaran`
--

CREATE TABLE `dm_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `nisn` varchar(16) DEFAULT NULL,
  `nama_santri` varchar(30) DEFAULT NULL,
  `pelanggaran` varchar(50) DEFAULT NULL,
  `hukuman` varchar(50) DEFAULT NULL,
  `tanggal_submit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_pelanggaran`
--

INSERT INTO `dm_pelanggaran` (`id_pelanggaran`, `nisn`, `nama_santri`, `pelanggaran`, `hukuman`, `tanggal_submit`) VALUES
(1, '425242', 'Satria', 'Pelanggaran apa aja', 'Hukuman', '2022-06-17'),
(3, 'hajkahassa', 'ashkajshsaa', 'ashlaasksa', 'aslasjasass', '2022-06-17');

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
(1, 'Hapalan 1 hari 3 Juz', '123', 'nama saya', '2022-06-23'),
(2, NULL, 'iajaks', 'sasasa', '2022-06-06'),
(3, NULL, 'asasa', 'sasas', '2022-06-07'),
(4, 'saaas', 'sasas', 'sasaa', '2022-06-29'),
(6, 'asasaas', 'dssaa', 'asaaa', '2022-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `dm_santri`
--

CREATE TABLE `dm_santri` (
  `id_santri` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nama_santri` varchar(50) DEFAULT NULL,
  `kelas` int(11) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `pekerjaan_ayah` varchar(30) DEFAULT NULL,
  `no_hp_ayah` varchar(13) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
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

INSERT INTO `dm_santri` (`id_santri`, `nisn`, `tanggal_lahir`, `nama_santri`, `kelas`, `jenis_kelamin`, `agama`, `alamat`, `nama_ayah`, `tanggal_lahir_ayah`, `pekerjaan_ayah`, `no_hp_ayah`, `nama_ibu`, `tanggal_lahir_ibu`, `pekerjaan_ibu`, `no_hp_ibu`, `alamat_orangtua`, `nama_wali_santri`, `alamat_wali_santri`, `no_hp_wali_santri`) VALUES
(1, '123', '2022-06-29', 'Nama santri', 1, '1', 'I', 'sasa', 'sasas', '2022-06-15', 'sasas', 'sasa', 'asasa', '2022-06-29', 'asas', 'sasa', 'sasa', 'sasa', 'asasa', 'asas'),
(2, '425242', '2022-06-23', 'Nama saya', 1, 'P', 'Islam', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'NAMA AYAH', '0000-00-00', 'hakahskash', '085893324274', 'NAMA IBU', '2022-06-22', 'PGBBKH', '085893324274', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'KJNJKNK', 'HHIJINI808', '085893324274'),
(3, '456', '2022-06-23', 'Nama saya', 1, 'P', 'Islam', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'NAMA AYAH', '0000-00-00', 'IUIUUYGY', '085893324274', 'NAMA IBU', '2022-06-22', 'PGBBKH', '085893324274', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'KJNJKNK', 'HHIJINI808', '085893324274'),
(4, '456', '2022-06-23', 'Nama saya', 1, 'P', 'Islam', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'NAMA AYAH', '0000-00-00', 'IUIUUYGY', '085893324274', 'NAMA IBU', '2022-06-22', 'PGBBKH', '085893324274', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'KJNJKNK', 'HHIJINI808', '085893324274'),
(5, '', '2022-06-23', '', 1, 'P', 'Islam', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'NAMA AYAH', '0000-00-00', 'IUIUUYGY', '085893324274', 'NAMA IBU', '2022-06-22', 'PGBBKH', '085893324274', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'KJNJKNK', 'HHIJINI808', '085893324274');

-- --------------------------------------------------------

--
-- Table structure for table `dm_wali_santri`
--

CREATE TABLE `dm_wali_santri` (
  `id_wali_santri` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_wali_santri` varchar(30) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_wali_santri`
--

INSERT INTO `dm_wali_santri` (`id_wali_santri`, `id_kelas`, `nama_wali_santri`, `nik`) VALUES
(1, 1, 'Siti S.Pd', '123'),
(2, 66666, 'alimatusyadiah', '66666'),
(3, 1, 'jajaja', '1234565');

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
  `grup_id` int(11) DEFAULT NULL,
  `navbar_icon` varchar(100) DEFAULT NULL,
  `navbar_name` varchar(50) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `active` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_navbar`
--

INSERT INTO `sys_navbar` (`navbar_id`, `parent_id`, `grup_id`, `navbar_icon`, `navbar_name`, `link`, `sort`, `active`) VALUES
(1, 0, 1, '<i class=\"fas fa-tachometer-alt\"></i>', 'Dashboard', 'Dashboard', 1, 'Y'),
(3, 0, 1, '<i class=\"fas fa-user\"></i>', 'Pendaftaran', NULL, 2, 'N'),
(4, 3, 1, NULL, 'Santri', 'pasien', 0, 'N'),
(5, 3, NULL, NULL, 'Pembatalan Transaksi', NULL, 0, 'N'),
(6, 3, NULL, NULL, 'IGD', NULL, 0, 'N'),
(7, 0, 1, '<i class=\"fas fa-server\"></i>', 'Master Data', NULL, 3, 'Y'),
(8, 7, 1, NULL, 'Kelas', 'Kelas', 0, 'Y'),
(9, 7, 1, NULL, 'Wali Santri', 'WaliSantri', 0, 'Y'),
(10, 7, 1, NULL, 'Peraturan', 'Peraturan', 0, 'N'),
(11, 7, 1, NULL, 'Prestasi', 'Prestasi', 0, 'N'),
(30, 24, 1, '<i class=\"fas fa-book-reader\"></i>', 'Laporan Hapalan', 'LaporanHapalan', 15, 'Y'),
(16, 7, 1, NULL, 'Santri', 'Santri', 0, 'Y'),
(17, 7, NULL, NULL, 'Asal Rujukan', NULL, 0, 'N'),
(28, 24, 1, '<i class=\"fas fa-calendar-alt\"></i>', 'Laporan Pelanggaran', 'LaporanPelanggaran', 13, 'Y'),
(29, 24, 1, '<i class=\"fas fa-medal\"></i>', 'Laporan Prestasi', 'LaporanPrestasi', 14, 'Y'),
(20, 0, 1, '<i class=\"fas fa-book-reader\"></i>', 'Hapalan', 'Hapalan', 6, 'Y'),
(24, 0, 1, '<i class=\"fas fa-book-medical\"></i>', 'Laporan', NULL, 9, 'Y'),
(28, 0, 2, '<i class=\"fas fa-calendar-alt\"></i>', 'Pelanggaran', 'PelanggaranRoleSantri', 13, 'Y'),
(29, 0, 2, '<i class=\"fas fa-medal\"></i>', 'Prestasi', 'PrestasiRoleSantri', 14, 'Y'),
(30, 0, 2, '<i class=\"fas fa-book-reader\"></i>', 'Hapalan', 'HapalanRoleSantri', 15, 'Y'),
(25, 0, 3, '<i class=\"fas fa-calendar-alt\"></i>', 'Pelanggaran', 'PelanggaranRoleGuru', 13, 'Y'),
(26, 0, 3, '<i class=\"fas fa-medal\"></i>', 'Prestasi', 'PrestasiRoleGuru', 11, 'Y'),
(27, 0, 3, '<i class=\"fas fa-book-reader\"></i>', 'Hapalan', 'HapalanRoleGuru', 12, 'Y'),
(12, 0, 3, '<i class=\"fas fa-tachometer-alt\"></i>', 'Dashboard', 'DashboardRoleGuru', 7, 'Y'),
(2, 0, 2, '<i class=\"fas fa-tachometer-alt\"></i>', 'Dashboard', 'DashboardRoleSantri', 7, 'Y'),
(19, 0, 1, '<i class=\"fas fa-medal\"></i>', 'Prestasi', 'Prestasi', 5, 'Y'),
(15, 7, 1, NULL, 'Hukuman', 'Hukuman', 0, 'N'),
(31, 0, 1, '<i class=\"fas fa-calendar-alt\"></i>', 'Pelanggaran', 'Pelanggaran', 4, 'Y'),
(32, 0, 2, '<i class=\"fas fa-user-alt\"></i>', 'Profil', 'ProfilSantri', 8, 'Y');

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
('admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Y'),
('425242', '21232f297a57a5a743894a0e4a801fc3', '2', 'Y'),
('123', '21232f297a57a5a743894a0e4a801fc3', '3', 'Y'),
('456', '202cb962ac59075b964b07152d234b70', NULL, 'Y'),
('', '202cb962ac59075b964b07152d234b70', '2', 'Y'),
('66666', '202cb962ac59075b964b07152d234b70', '3', 'Y'),
('1234565', '202cb962ac59075b964b07152d234b70', '3', 'Y');

-- --------------------------------------------------------

--
-- Stand-in structure for view `trans_pelanggaran_vd`
-- (See below for the actual view)
--
CREATE TABLE `trans_pelanggaran_vd` (
`hukuman` varchar(50)
,`pelanggaran` varchar(50)
,`id_kelas` int(11)
,`nisn` varchar(16)
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
-- Indexes for table `dm_pelanggaran`
--
ALTER TABLE `dm_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

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
  MODIFY `id_hapalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dm_pelanggaran`
--
ALTER TABLE `dm_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dm_prestasi`
--
ALTER TABLE `dm_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dm_santri`
--
ALTER TABLE `dm_santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dm_wali_santri`
--
ALTER TABLE `dm_wali_santri`
  MODIFY `id_wali_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
