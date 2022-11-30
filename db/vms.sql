-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 02:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `divisi_id` int(11) NOT NULL,
  `divisi_judul` varchar(220) NOT NULL,
  `divisi_judul_seo` varchar(220) NOT NULL,
  `divisi_desk` text NOT NULL,
  `divisi_keyword` varchar(220) NOT NULL,
  `divisi_meta_desk` varchar(200) NOT NULL,
  `divisi_gambar` text NOT NULL,
  `divisi_post_oleh` varchar(200) NOT NULL,
  `divisi_post_hari` varchar(20) NOT NULL,
  `divisi_post_tanggal` date NOT NULL,
  `divisi_post_jam` time NOT NULL,
  `divisi_update_oleh` varchar(200) NOT NULL,
  `divisi_update_hari` varchar(20) NOT NULL,
  `divisi_update_tanggal` date NOT NULL,
  `divisi_update_jam` time NOT NULL,
  `divisi_dibaca` int(50) NOT NULL,
  `divisi_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`divisi_id`, `divisi_judul`, `divisi_judul_seo`, `divisi_desk`, `divisi_keyword`, `divisi_meta_desk`, `divisi_gambar`, `divisi_post_oleh`, `divisi_post_hari`, `divisi_post_tanggal`, `divisi_post_jam`, `divisi_update_oleh`, `divisi_update_hari`, `divisi_update_tanggal`, `divisi_update_jam`, `divisi_dibaca`, `divisi_status`) VALUES
(9, 'Editor Freelance', 'editor-freelance', '<p>Editor Freelance</p>', '', 'EF', '', 'dhawy', 'Senin', '2020-12-07', '17:11:33', 'dhawy', 'Jumat', '2021-01-22', '11:10:00', 0, 'publish'),
(10, 'Photographer Editor Officer', 'photographer-editor-officer', '<p>Editor Officer</p>', '', 'PEO', '', 'dhawy', 'Senin', '2020-12-07', '18:17:18', 'dhawy', 'Jumat', '2021-01-22', '11:11:36', 0, 'Publish'),
(12, 'Informasi teknologi', 'informasi-teknologi', '<p>deskripsi IT</p>', '', 'IT', '', 'dhawy', 'Senin', '2020-12-07', '18:19:07', 'dhawy', 'Jumat', '2020-12-18', '07:17:24', 0, 'publish'),
(13, 'Human Resource Development', 'human-resource-development', '<p>ini isi hrd</p>', '', 'HRD', '', 'dhawy', 'Minggu', '2020-12-27', '10:26:58', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(15, 'Finance', 'finance', '<p>Isi Finance</p><p><br></p>', '', 'FNC', '', 'dhawy', 'Minggu', '2020-12-27', '10:28:48', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(16, 'Chief Executive Officer', 'chief-executive-officer', '<p><span style=\"font-weight: bold; color: rgb(95, 99, 104); font-family: arial, sans-serif; font-size: 14px;\">Chief Executive Officer</span><br></p>', '', 'CEO', '', 'dhawy', 'Minggu', '2020-12-27', '10:30:07', 'dhawy', 'Selasa', '2021-01-05', '15:17:35', 0, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama_website` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `whatsapp` bigint(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `meta_deskripsi` varchar(250) DEFAULT NULL,
  `meta_keyword` varchar(250) DEFAULT NULL,
  `favicon` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `mini_logo` varchar(200) NOT NULL,
  `seo` text DEFAULT NULL,
  `analytics` varchar(100) NOT NULL,
  `pixel` varchar(150) NOT NULL,
  `maps` text DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `facebook`, `instagram`, `whatsapp`, `youtube`, `no_telp`, `meta_deskripsi`, `meta_keyword`, `favicon`, `logo`, `mini_logo`, `seo`, `analytics`, `pixel`, `maps`, `slogan`, `alamat`, `foto`) VALUES
(1, 'Komodo Transport', 'komodotransport09@gmail.com', 'https://komodotransport.com/', 'https://www.facebook.com/', 'https://www.instagram.com/komodotransport/', 6281138000763, 'https://www.youtube.com/', '081138000763', 'Kami adalah salah satu perusahaan jasa transportasi resmi yang menyediakan sewa mobil alphard labuan bajo ataupun rental mobil labuan bajo.', 'sewa mobil labuan bajo,rental mobil labuan bajo', 'favkomodo.jpg', 'cropped-logo-1-300x180.jpg', '', 'G6hRF9ruTLOdBa0rjE7u9Dd4v544BIeL0kYav1g8M_w', 'UA-240013907-1', '', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7892.1336063042745!2d119.884846!3d-8.492886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x366ff66caeced1bc!2sKomodo%20Transport!5e0!3m2!1sid!2sid!4v1660367688464!5m2!1sid!2sid', 'Sewa & rental mobil terbaik untuk anda di Labuan Bajo', 'Jl. Opseter Maun, Labuan Bajo, Komodo, Kabupaten Manggarai Barat, Nusa Tenggara Tim.\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `user_notelp` varchar(20) NOT NULL,
  `user_noktp` varchar(50) NOT NULL,
  `user_post_hari` varchar(20) NOT NULL,
  `user_post_tanggal` date NOT NULL,
  `user_post_jam` time NOT NULL,
  `user_gambar` text NOT NULL,
  `user_status` varchar(20) NOT NULL,
  `user_login_tanggal` date NOT NULL,
  `user_login_jam` time NOT NULL,
  `user_login_status` varchar(20) NOT NULL,
  `user_stat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`, `id_session`, `user_notelp`, `user_noktp`, `user_post_hari`, `user_post_tanggal`, `user_post_jam`, `user_gambar`, `user_status`, `user_login_tanggal`, `user_login_jam`, `user_login_status`, `user_stat`) VALUES
(6, 'Dhawy Arkan', 'dhawy@gmail.com', '21d564edcc5b55c0af9b3684ef7df4d38b36c224', '1', '1d3ee28b20064eb055ea2315493770bf-20210128004501', '', '', 'Kamis', '2020-06-25', '15:14:48', 'avatar5.png', '1', '2022-11-27', '19:10:51', 'offline', 'Publish'),
(44, 'admin', 'adin@logaya.com', '8cb2237d0679ca88db6464eac60da96345513964', '2', 'b85cfc4383ebeacf4df1dfd2188191b3-20220807232156', '', '', 'Jumat', '2021-01-22', '11:04:35', '', '1', '2022-08-08', '10:43:46', 'online', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `user_agama`
--

CREATE TABLE `user_agama` (
  `user_agama_id` int(2) NOT NULL,
  `user_agama_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_agama`
--

INSERT INTO `user_agama` (`user_agama_id`, `user_agama_nama`) VALUES
(1, ''),
(2, 'Islam'),
(3, 'Kristen'),
(4, 'Katolik'),
(5, 'Hindu'),
(6, 'Buddha'),
(7, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_detail_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_tenant_id` int(50) NOT NULL,
  `user_detail_floor` varchar(30) NOT NULL,
  `user_detail_contactto` varchar(200) NOT NULL,
  `user_detail_reason` text NOT NULL,
  `user_detail_vdatefrom` date NOT NULL,
  `user_detail_vdateend` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `id_user`, `user_tenant_id`, `user_detail_floor`, `user_detail_contactto`, `user_detail_reason`, `user_detail_vdatefrom`, `user_detail_vdateend`) VALUES
(25, 6, 0, '15', '', '', '0000-00-00', '0000-00-00'),
(37, 44, 0, '16', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_jabatan`
--

CREATE TABLE `user_jabatan` (
  `user_jabatan_id` int(2) NOT NULL,
  `user_jabatan_nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_jabatan`
--

INSERT INTO `user_jabatan` (`user_jabatan_id`, `user_jabatan_nama`) VALUES
(1, 'Onboarding'),
(2, 'Training'),
(3, 'Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `user_jam`
--

CREATE TABLE `user_jam` (
  `user_jam_id` tinyint(1) NOT NULL,
  `user_jam_judul` varchar(220) NOT NULL,
  `user_jam_judul_seo` varchar(220) NOT NULL,
  `user_jam_mulai` time NOT NULL,
  `user_jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_jam`
--

INSERT INTO `user_jam` (`user_jam_id`, `user_jam_judul`, `user_jam_judul_seo`, `user_jam_mulai`, `user_jam_selesai`) VALUES
(7, 'Lembur', 'lembur', '19:01:00', '21:00:00'),
(8, 'Pulang', 'pulang', '17:00:00', '19:00:00'),
(9, 'Masuk', 'masuk', '06:00:00', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_kelamin`
--

CREATE TABLE `user_kelamin` (
  `user_kelamin_id` int(2) NOT NULL,
  `user_kelamin_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_kelamin`
--

INSERT INTO `user_kelamin` (`user_kelamin_id`, `user_kelamin_nama`) VALUES
(1, 'Pria'),
(2, 'Wanita'),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_nama`) VALUES
(1, 'Developer'),
(2, 'Administrator'),
(3, 'Tenant'),
(4, 'Visitor');

-- --------------------------------------------------------

--
-- Table structure for table `user_perkawinan`
--

CREATE TABLE `user_perkawinan` (
  `user_perkawinan_id` int(2) NOT NULL,
  `user_perkawinan_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_perkawinan`
--

INSERT INTO `user_perkawinan` (`user_perkawinan_id`, `user_perkawinan_nama`) VALUES
(1, ' '),
(2, 'Lajang'),
(3, 'Menikah'),
(4, 'Cerai'),
(5, 'Belum jelas');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `user_status_id` int(11) NOT NULL,
  `user_status_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`user_status_id`, `user_status_nama`) VALUES
(1, 'Sudah Verifikasi'),
(2, 'Menunggu Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `user_tenant`
--

CREATE TABLE `user_tenant` (
  `user_tenant_id` int(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_tenant_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tenant`
--

INSERT INTO `user_tenant` (`user_tenant_id`, `id_user`, `user_tenant_nama`) VALUES
(1, 47, 'PT. Makmur Jaya Internasional'),
(2, 48, 'PT. Go Indonesia\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`divisi_id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_agama`
--
ALTER TABLE `user_agama`
  ADD PRIMARY KEY (`user_agama_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_detail_id`);

--
-- Indexes for table `user_jam`
--
ALTER TABLE `user_jam`
  ADD PRIMARY KEY (`user_jam_id`);

--
-- Indexes for table `user_kelamin`
--
ALTER TABLE `user_kelamin`
  ADD PRIMARY KEY (`user_kelamin_id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- Indexes for table `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  ADD PRIMARY KEY (`user_perkawinan_id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`user_status_id`);

--
-- Indexes for table `user_tenant`
--
ALTER TABLE `user_tenant`
  ADD PRIMARY KEY (`user_tenant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `divisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_agama`
--
ALTER TABLE `user_agama`
  MODIFY `user_agama_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_jam`
--
ALTER TABLE `user_jam`
  MODIFY `user_jam_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_kelamin`
--
ALTER TABLE `user_kelamin`
  MODIFY `user_kelamin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  MODIFY `user_perkawinan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `user_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_tenant`
--
ALTER TABLE `user_tenant`
  MODIFY `user_tenant_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
