-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2022 pada 10.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

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
-- Struktur dari tabel `divisi`
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
-- Dumping data untuk tabel `divisi`
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
-- Struktur dari tabel `identitas`
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
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `facebook`, `instagram`, `whatsapp`, `youtube`, `no_telp`, `meta_deskripsi`, `meta_keyword`, `favicon`, `logo`, `mini_logo`, `seo`, `analytics`, `pixel`, `maps`, `slogan`, `alamat`, `foto`) VALUES
(1, 'Komodo Transport', 'komodotransport09@gmail.com', 'https://komodotransport.com/', 'https://www.facebook.com/', 'https://www.instagram.com/komodotransport/', 6281138000763, 'https://www.youtube.com/', '081138000763', 'Kami adalah salah satu perusahaan jasa transportasi resmi yang menyediakan sewa mobil alphard labuan bajo ataupun rental mobil labuan bajo.', 'sewa mobil labuan bajo,rental mobil labuan bajo', 'favkomodo.jpg', 'cropped-logo-1-300x180.jpg', '', 'G6hRF9ruTLOdBa0rjE7u9Dd4v544BIeL0kYav1g8M_w', 'UA-240013907-1', '', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7892.1336063042745!2d119.884846!3d-8.492886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x366ff66caeced1bc!2sKomodo%20Transport!5e0!3m2!1sid!2sid!4v1660367688464!5m2!1sid!2sid', 'Sewa & rental mobil terbaik untuk anda di Labuan Bajo', 'Jl. Opseter Maun, Labuan Bajo, Komodo, Kabupaten Manggarai Barat, Nusa Tenggara Tim.\r\n', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `user_post_hari` varchar(20) NOT NULL,
  `user_post_tanggal` date NOT NULL,
  `user_post_jam` time NOT NULL,
  `user_status` varchar(20) NOT NULL,
  `user_login_tanggal` date NOT NULL,
  `user_login_jam` time NOT NULL,
  `user_login_status` varchar(20) NOT NULL,
  `user_stat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`, `id_session`, `user_post_hari`, `user_post_tanggal`, `user_post_jam`, `user_status`, `user_login_tanggal`, `user_login_jam`, `user_login_status`, `user_stat`) VALUES
(6, 'Dhawy Arkan', 'dhawy@gmail.com', '21d564edcc5b55c0af9b3684ef7df4d38b36c224', '1', '1d3ee28b20064eb055ea2315493770bf-20210128004501', 'Kamis', '2020-06-25', '15:14:48', '1', '2022-12-02', '21:54:57', 'offline', 'Publish'),
(44, 'admin', 'adin@logaya.com', '8cb2237d0679ca88db6464eac60da96345513964', '2', 'b85cfc4383ebeacf4df1dfd2188191b3-20220807232156', 'Jumat', '2021-01-22', '11:04:35', '1', '2022-08-08', '10:43:46', 'online', 'publish'),
(45, 'tess dululah', 'tess@gmail.com', 'fb77c78426323aa6f4e7d9589a5656651a3ef135', '5', 'd87d3779b2e06a990034ef56903a718a-20221202215251', 'Jumat', '2022-12-02', '21:52:51', '1', '2022-12-22', '07:45:13', 'online', ''),
(47, 'hohohoho', 'tes1@gmail.com', 'fb77c78426323aa6f4e7d9589a5656651a3ef135', '4', 'e68e42e913c527f8326da8760380bf40-20221202220436', 'Jumat', '2022-12-02', '22:04:36', '1', '2022-12-05', '08:25:56', 'online', ''),
(48, 'Andre', 'andre@gmail.com', 'fb77c78426323aa6f4e7d9589a5656651a3ef135', '3', 'df8bcc50f015de8677e4025ecb1a369a-20221202224125', 'Jumat', '2022-12-02', '22:41:25', '2', '0000-00-00', '00:00:00', '', ''),
(49, 'YUSNI ', 'yusni.irwandi@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '4', '71198637f73e4e2dd586bea571bb515b-20221205083034', 'Senin', '2022-12-05', '08:30:34', '2', '2022-12-05', '08:31:02', 'online', ''),
(50, 'tes10', 'tes10@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', '4', 'bc427659b1b883c1cbd7e13c3a42f5ca-20221212084632', 'Senin', '2022-12-12', '08:46:32', '2', '2022-12-12', '08:47:43', 'offline', ''),
(51, 'tes11', 'tes11@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', '4', '0393459e0d7a7828a173947350e54e62-20221212143348', 'Senin', '2022-12-12', '14:33:48', '2', '0000-00-00', '00:00:00', '', ''),
(55, 'dhawylah', 'dhawys1@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', '4', 'c8c29d7108e65b7fdbb5ff9b124212ce-20221212164706', 'Senin', '2022-12-12', '16:47:06', '2', '0000-00-00', '00:00:00', '', ''),
(56, 'asdsasd', 'ad2@gmail.com', '', '4', '2b2060a184f7b453caff46e9c1a21816-20221217200221', 'Sabtu', '2022-12-17', '20:02:21', '2', '0000-00-00', '00:00:00', '', ''),
(57, 'asdasd123', '', '', '4', 'd41d8cd98f00b204e9800998ecf8427e-20221217203204', 'Sabtu', '2022-12-17', '20:32:04', '2', '0000-00-00', '00:00:00', '', ''),
(60, 'asd3123', '', '', '4', '94f1bb6cef5204916c3dd8128b5ac6ce-20221217214829', 'Sabtu', '2022-12-17', '21:48:29', '2', '0000-00-00', '00:00:00', '', ''),
(61, 'akunbaru', '', '', '4', '514ed1badc3cafafb437ee275a6b9a99-20221217220150', 'Sabtu', '2022-12-17', '22:01:50', '2', '0000-00-00', '00:00:00', '', ''),
(62, 'hahahha', '', '', '4', 'c5ba7ff1883453170f7590fa689f1f48-20221217221118', 'Sabtu', '2022-12-17', '22:11:18', '2', '0000-00-00', '00:00:00', '', ''),
(63, 'pakpak', '', '', '4', 'c8a8ffb8634f604c8c9364395bda40ef-20221219113035', 'Senin', '2022-12-19', '11:30:35', '2', '0000-00-00', '00:00:00', '', ''),
(64, 'haislah', '', '', '4', '1f5a45e78edcc9d1cbcd09dfab0d6298-20221219120742', 'Senin', '2022-12-19', '12:07:42', '2', '0000-00-00', '00:00:00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_agama`
--

CREATE TABLE `user_agama` (
  `user_agama_id` int(2) NOT NULL,
  `user_agama_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_agama`
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
-- Struktur dari tabel `user_detail`
--

CREATE TABLE `user_detail` (
  `user_detail_id` int(11) NOT NULL,
  `user_detail_idsession` varchar(255) NOT NULL,
  `user_detail_qrcode` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_detail_gambar` varchar(200) NOT NULL,
  `user_detail_notlp` varchar(20) NOT NULL,
  `user_detail_idcard` varchar(200) NOT NULL,
  `user_tenant_id` int(50) NOT NULL,
  `user_detail_floor` varchar(30) NOT NULL,
  `user_detail_contactto` varchar(200) NOT NULL,
  `user_detail_reason` text NOT NULL,
  `user_detail_vdatefrom` date NOT NULL,
  `user_detail_vdateend` date NOT NULL,
  `user_detail_post_hari` varchar(20) NOT NULL,
  `user_detail_post_tanggal` date NOT NULL,
  `user_detail_post_jam` time NOT NULL,
  `user_detail_ip` varchar(100) NOT NULL,
  `user_detail_device` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `user_detail_idsession`, `user_detail_qrcode`, `id_user`, `user_detail_gambar`, `user_detail_notlp`, `user_detail_idcard`, `user_tenant_id`, `user_detail_floor`, `user_detail_contactto`, `user_detail_reason`, `user_detail_vdatefrom`, `user_detail_vdateend`, `user_detail_post_hari`, `user_detail_post_tanggal`, `user_detail_post_jam`, `user_detail_ip`, `user_detail_device`) VALUES
(25, '', '', 6, '', '', '', 0, '15', '', '', '0000-00-00', '0000-00-00', '', '2022-12-02', '21:35:08', '', ''),
(37, '', '', 44, '', '', '', 0, '16', '', '', '0000-00-00', '0000-00-00', '', '2022-12-02', '21:35:08', '', ''),
(38, '', '', 45, '', '12321312331231', '', 1, 'Lantai 1', '', '', '2022-12-30', '2022-12-31', 'Jumat', '2022-12-02', '21:52:51', '::1', 'Desktop Chrome 108.0.0.0'),
(39, '67c6a1e7ce56d3d6fa748ab6d9af3fd7-20221202220436', '', 47, '', '123123', '', 2, 'Lantai 2', 'pak yus', 'au dah', '2022-11-26', '2022-11-28', 'Jumat', '2022-12-02', '22:04:36', '::1', 'Desktop Chrome 108.0.0.0'),
(40, 'f457c545a9ded88f18ecee47145a72c0-20221205083034', '', 49, '', '081389727893', '', 1, 'Lantai 1', 'Timotius ', 'Dhf', '2022-12-05', '2022-12-05', 'Senin', '2022-12-05', '08:30:34', '180.251.180.179', 'Desktop Chrome 108.0.0.0'),
(41, 'c0c7c76d30bd3dcaefc96f40275bdc0a-20221212084632', '', 50, '', '10', '', 2, 'Lantai 1', 'asd213', 'asdasda', '2022-01-02', '2022-01-02', 'Senin', '2022-12-12', '08:46:32', '::1', 'Desktop Chrome 108.0.0.0'),
(42, '2838023a778dfaecdc212708f721b788-20221212143348', '', 51, 'Financial_Statement_WMPP_30_June_2022_(Final)_(1)_Page_001.png', '11', 'struktur_perusahaan.jpg', 1, 'Lantai 1', 'pak yus', 'asdasdssa', '2022-01-01', '2022-01-01', 'Senin', '2022-12-12', '14:33:48', '::1', 'Desktop Chrome 108.0.0.0'),
(46, 'b53b3a3d6ab90ce0268229151c9bde11-20221212164706', 'b53b3a3d6ab90ce0268229151c9bde11-20221212164706.png', 55, 'Logo_Logo_Website_(Rev).jpg', '012313', 'struktur_5_Lini_Bisnis_Holding.jpg', 1, 'Lantai 1', 'pak yus', 'tess reason', '2022-01-01', '2022-01-01', 'Senin', '2022-12-12', '16:47:06', '::1', 'Desktop Chrome 108.0.0.0'),
(47, '9f61408e3afb633e50cdf1b20de6f466-20221217200221', '9f61408e3afb633e50cdf1b20de6f466-20221217200221.png', 56, 'logo_mantenbaru_merah-02.png', '1231', 'Financial_Statement_WMPP_30_June_2022_(Final)_(1)_Page_0011.png', 1, 'Lantai 1', 'asdsad', 'sadada', '2022-01-31', '2022-01-01', 'Sabtu', '2022-12-17', '20:02:21', '::1', 'Desktop Chrome 108.0.0.0'),
(48, '72b32a1f754ba1c09b3695e0cb6cde7f-20221217203204', '72b32a1f754ba1c09b3695e0cb6cde7f-20221217203204.png', 57, 'struktur_5_Lini_Bisnis_Holding1.jpg', '1231231', 'logo_mantenbaru_merah-021.png', 1, 'Lantai 1', 'asdasd', 'adasda', '2022-01-01', '2022-01-01', 'Sabtu', '2022-12-17', '20:32:04', '::1', 'Desktop Chrome 108.0.0.0'),
(49, '072b030ba126b2f4b2374f342be9ed44-20221217214829', '072b030ba126b2f4b2374f342be9ed44-20221217214829.png', 60, 'logo_mantenbaru_merah-026.png', '1241231', 'logo_mantenbaru_merah-027.png', 1, 'Lantai 1', 'adqweqwe', 'adasdasd', '2022-01-01', '2022-01-01', 'Sabtu', '2022-12-17', '21:48:29', '::1', 'Desktop Chrome 108.0.0.0'),
(50, '7f39f8317fbdb1988ef4c628eba02591-20221217220150', '7f39f8317fbdb1988ef4c628eba02591-20221217220150.png', 61, 'logo_mantenbaru_merah-028.png', '1231231', 'logo_mantenbaru_merah-029.png', 1, 'Lantai 1', 'pak yus', 'asdasdsad', '2022-01-01', '2022-01-01', 'Sabtu', '2022-12-17', '22:01:50', '::1', 'Desktop Chrome 108.0.0.0'),
(51, '44f683a84163b3523afe57c2e008bc8c-20221217221118', '44f683a84163b3523afe57c2e008bc8c-20221217221118.png', 62, 'logo_mantenbaru_merah-0210.png', '1231312', 'logo_mantenbaru_merah-0211.png', 1, 'Lantai 1', '12qwweqe', 'asdasdas', '2022-01-01', '2022-01-01', 'Sabtu', '2022-12-17', '22:11:18', '::1', 'Desktop Chrome 108.0.0.0'),
(52, '03afdbd66e7929b125f8597834fa83a4-20221219113035', '03afdbd66e7929b125f8597834fa83a4-20221219113035.png', 63, 'logo_mantenbaru_merah-0212.png', '3123123', 'struktur_perusahaan1.jpg', 1, 'Lantai 1', 'bukbuk', 'asdada', '2022-12-31', '2022-12-31', 'Senin', '2022-12-19', '11:30:35', '::1', 'Desktop Chrome 108.0.0.0'),
(53, 'ea5d2f1c4608232e07d3aa3d998e5135-20221219120742', 'ea5d2f1c4608232e07d3aa3d998e5135-20221219120742.png', 64, 'logo_mantenbaru_merah-0213.png', '123131', 'Financial_Statement_WMPP_30_June_2022_(Final)_(1)_Page_0012.png', 1, 'Lantai 1', 'haislah dong', 'adasdas', '2022-01-01', '2022-01-01', 'Senin', '2022-12-19', '12:07:42', '::1', 'Desktop Chrome 108.0.0.0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_jabatan`
--

CREATE TABLE `user_jabatan` (
  `user_jabatan_id` int(2) NOT NULL,
  `user_jabatan_nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_jabatan`
--

INSERT INTO `user_jabatan` (`user_jabatan_id`, `user_jabatan_nama`) VALUES
(1, 'Onboarding'),
(2, 'Training'),
(3, 'Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_jam`
--

CREATE TABLE `user_jam` (
  `user_jam_id` tinyint(1) NOT NULL,
  `user_jam_judul` varchar(220) NOT NULL,
  `user_jam_judul_seo` varchar(220) NOT NULL,
  `user_jam_mulai` time NOT NULL,
  `user_jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_jam`
--

INSERT INTO `user_jam` (`user_jam_id`, `user_jam_judul`, `user_jam_judul_seo`, `user_jam_mulai`, `user_jam_selesai`) VALUES
(7, 'Lembur', 'lembur', '19:01:00', '21:00:00'),
(8, 'Pulang', 'pulang', '17:00:00', '19:00:00'),
(9, 'Masuk', 'masuk', '06:00:00', '08:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_kelamin`
--

CREATE TABLE `user_kelamin` (
  `user_kelamin_id` int(2) NOT NULL,
  `user_kelamin_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_kelamin`
--

INSERT INTO `user_kelamin` (`user_kelamin_id`, `user_kelamin_nama`) VALUES
(1, 'Pria'),
(2, 'Wanita'),
(3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_nama`) VALUES
(1, 'Developer'),
(2, 'Administrator'),
(3, 'Tenant'),
(4, 'Visitor'),
(5, 'Receptionist');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(200) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `user_log_ket` varchar(200) NOT NULL,
  `user_log_hari` varchar(20) NOT NULL,
  `user_log_tanggal` date NOT NULL,
  `user_log_jam` time NOT NULL,
  `user_log_ip` varchar(100) NOT NULL,
  `user_log_device` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `id_user`, `user_log_ket`, `user_log_hari`, `user_log_tanggal`, `user_log_jam`, `user_log_ip`, `user_log_device`) VALUES
(1, '48', 'Daftar Tenant Baru', 'Jumat', '2022-12-02', '22:41:25', '::1', 'Desktop Chrome 108.0.0.0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_perkawinan`
--

CREATE TABLE `user_perkawinan` (
  `user_perkawinan_id` int(2) NOT NULL,
  `user_perkawinan_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_perkawinan`
--

INSERT INTO `user_perkawinan` (`user_perkawinan_id`, `user_perkawinan_nama`) VALUES
(1, ' '),
(2, 'Lajang'),
(3, 'Menikah'),
(4, 'Cerai'),
(5, 'Belum jelas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_status`
--

CREATE TABLE `user_status` (
  `user_status_id` int(11) NOT NULL,
  `user_status_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_status`
--

INSERT INTO `user_status` (`user_status_id`, `user_status_nama`) VALUES
(1, 'Sudah Verifikasi'),
(2, 'Menunggu Verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tenant`
--

CREATE TABLE `user_tenant` (
  `user_tenant_id` int(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_tenant_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_tenant`
--

INSERT INTO `user_tenant` (`user_tenant_id`, `id_user`, `user_tenant_nama`) VALUES
(1, 47, 'PT. Makmur Jaya Internasional'),
(2, 48, 'PT. Go Indonesia\r\n'),
(3, 48, 'PT. Andre Samudra Jaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tenant_floor`
--

CREATE TABLE `user_tenant_floor` (
  `user_tenant_floor_id` int(11) NOT NULL,
  `user_tenant_id` varchar(11) NOT NULL,
  `user_tenant_ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`divisi_id`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_agama`
--
ALTER TABLE `user_agama`
  ADD PRIMARY KEY (`user_agama_id`);

--
-- Indeks untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_detail_id`);

--
-- Indeks untuk tabel `user_jam`
--
ALTER TABLE `user_jam`
  ADD PRIMARY KEY (`user_jam_id`);

--
-- Indeks untuk tabel `user_kelamin`
--
ALTER TABLE `user_kelamin`
  ADD PRIMARY KEY (`user_kelamin_id`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- Indeks untuk tabel `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- Indeks untuk tabel `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  ADD PRIMARY KEY (`user_perkawinan_id`);

--
-- Indeks untuk tabel `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`user_status_id`);

--
-- Indeks untuk tabel `user_tenant`
--
ALTER TABLE `user_tenant`
  ADD PRIMARY KEY (`user_tenant_id`);

--
-- Indeks untuk tabel `user_tenant_floor`
--
ALTER TABLE `user_tenant_floor`
  ADD PRIMARY KEY (`user_tenant_floor_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `divisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `user_agama`
--
ALTER TABLE `user_agama`
  MODIFY `user_agama_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `user_jam`
--
ALTER TABLE `user_jam`
  MODIFY `user_jam_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_kelamin`
--
ALTER TABLE `user_kelamin`
  MODIFY `user_kelamin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  MODIFY `user_perkawinan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_status`
--
ALTER TABLE `user_status`
  MODIFY `user_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_tenant`
--
ALTER TABLE `user_tenant`
  MODIFY `user_tenant_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_tenant_floor`
--
ALTER TABLE `user_tenant_floor`
  MODIFY `user_tenant_floor_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
