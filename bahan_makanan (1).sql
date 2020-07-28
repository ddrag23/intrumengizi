-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 06:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bahan_makanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `hitung`
--

CREATE TABLE `hitung` (
  `id_hitung` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `bahan_kode` varchar(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id_menu` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `nama_menu` varchar(128) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien_gizi`
--

CREATE TABLE `pasien_gizi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(150) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `pekerjaan` varchar(150) DEFAULT NULL,
  `diagnosa_medis` varchar(150) DEFAULT NULL,
  `karbohidrat` int(11) DEFAULT NULL,
  `lemak` int(11) DEFAULT NULL,
  `energi` int(11) DEFAULT NULL,
  `protein` int(11) DEFAULT NULL,
  `menu` varchar(210) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `presentase` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien_gizi`
--

INSERT INTO `pasien_gizi` (`id`, `nama_lengkap`, `alamat`, `usia`, `tinggi_badan`, `berat_badan`, `jenis_kelamin`, `pekerjaan`, `diagnosa_medis`, `karbohidrat`, `lemak`, `energi`, `protein`, `menu`, `berat`, `presentase`) VALUES
(3, 'kaguya shinomiya', 'Jln. kalo ada yang ngajak No. 1', 23, 165, 56, 'P', 'mahasiswa', 'bucin', 100, 50, 2000, 60, 'nasi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semua_menu`
--

CREATE TABLE `semua_menu` (
  `kode` varchar(20) DEFAULT NULL,
  `nama_bahan` varchar(150) DEFAULT NULL,
  `sumber_bahan` varchar(50) DEFAULT NULL,
  `air` float(10,1) DEFAULT NULL,
  `energi` int(11) DEFAULT NULL,
  `protein` float(10,1) DEFAULT NULL,
  `lemak` float(10,1) DEFAULT NULL,
  `kh` float(10,1) DEFAULT NULL,
  `serat` float(10,1) DEFAULT NULL,
  `abu` float(10,1) DEFAULT NULL,
  `kalsium` int(11) DEFAULT NULL,
  `fosfor` int(11) DEFAULT NULL,
  `besi` float(10,1) DEFAULT NULL,
  `natrium` int(11) DEFAULT NULL,
  `kalium` float(10,1) DEFAULT NULL,
  `tembaga` float(10,2) DEFAULT NULL,
  `seng` float(10,1) DEFAULT NULL,
  `retinol` int(11) DEFAULT NULL,
  `b_kar` int(11) DEFAULT NULL,
  `kar_total` int(11) DEFAULT NULL,
  `thiamin` float(10,2) DEFAULT NULL,
  `riboflavin` float(10,2) DEFAULT NULL,
  `niasin` float(10,1) DEFAULT NULL,
  `vit_c` int(11) DEFAULT NULL,
  `bdd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semua_menu`
--

INSERT INTO `semua_menu` (`kode`, `nama_bahan`, `sumber_bahan`, `air`, `energi`, `protein`, `lemak`, `kh`, `serat`, `abu`, `kalsium`, `fosfor`, `besi`, `natrium`, `kalium`, `tembaga`, `seng`, `retinol`, `b_kar`, `kar_total`, `thiamin`, `riboflavin`, `niasin`, `vit_c`, `bdd`) VALUES
('AR001', 'Beras giling, mentah', 'KZGMI-2001', 12.0, 357, 8.4, 1.7, 77.1, 0.2, 0.8, 147, 81, 1.8, 27, 71.0, 0.10, 0.5, 0, 0, 0, 0.20, 0.08, 2.6, 0, 100),
('AR002', 'Beras giling var pelita,mentah', 'KZGPI- 1990', 11.4, 369, 9.5, 1.4, 77.1, 0.4, 0.6, 68, 171, 1.4, 34, 0.0, 0.00, 0.0, 0, 0, 0, 0.26, 0.00, 0.0, 0, 100),
('AR003', 'Beras giling var rojolele, mentah', 'KZGPI- 1990', 12.0, 357, 8.4, 1.7, 77.1, 0.2, 0.8, 147, 81, 1.8, 34, 112.9, 0.14, 0.1, NULL, 0, 80, 0.20, 0.02, 1.5, 0, 100),
('AR004', 'Beras hitam, mentah', 'KZGMI-2001', 12.9, 351, 8.0, 1.3, 76.9, 20.1, 0.9, 6, 198, 0.1, 15, 105.0, 0.10, 1.6, 0, 0, 0, 0.21, 0.06, 0.0, 0, 100),
('AR005', 'Beras jagung kuning,kering,mentah', 'KZGMI-2001', 10.8, 358, 5.5, 0.1, 82.7, 10.0, 0.9, 20, 90, 1.4, 1, 80.0, 0.10, 4.1, NULL, 641, NULL, 0.12, 0.08, 1.0, 3, 100),
('AR006', 'Beras jagung putih,kering, mentah', 'KZGMI-2001', 22.5, 307, 4.8, 0.1, 71.8, 10.0, 0.8, 17, 78, 1.2, 1, 70.0, 0.10, 3.5, NULL, 301, NULL, 0.15, 0.07, 0.9, 0, 100),
('AR007', 'Beras ketan hitam tumbuk, mentah', 'KZGPI- 1990', 13.7, 360, 8.0, 2.3, 74.5, 1.0, 1.5, 10, 347, 6.2, 11, 288.0, 0.28, 2.2, 0, 0, 0, 0.24, 0.10, 2.0, 0, 100),
('AR008', 'Beras ketan putih tumbuk, mentah', 'KZGPI- 1990', 12.9, 361, 7.4, 0.8, 78.4, 0.4, 0.5, 13, 157, 3.4, 3, 282.0, 0.28, 2.2, 0, 0, 0, 0.28, 0.00, 1.4, 0, 100),
('AR009', 'Beras ladang, mentah', 'KZGMI-2001', 9.8, 376, 7.5, 3.8, 78.0, 5.9, 0.9, 20, 110, 0.8, 10, 70.0, 0.10, 1.4, 0, 0, NULL, 0.20, 0.20, 5.1, 0, 100),
('AR010', 'Beras menir, mentah', 'DABM-1964', 12.0, 362, 7.7, 4.4, 73.0, 0.2, 0.2, 22, 272, 3.7, 90, 201.0, 0.10, 0.5, 0, 0, NULL, 0.55, 0.00, 1.9, 0, 100),
('AR011', 'Beras parboiled', 'DABM-1964', 10.0, 353, 6.8, 0.6, 80.0, 0.5, 2.5, 5, 142, 0.8, 2, 46.0, 0.28, 1.0, 0, 0, NULL, 0.22, 0.11, 3.4, 0, 100),
('AR012', 'Beras tumbuk, mentah', 'KZGMI-2001', 11.5, 354, 7.8, 0.4, 79.9, 3.8, 0.4, 3, 112, 0.6, 5, 85.0, 0.50, 1.5, 0, 0, NULL, 0.25, 0.22, 5.1, 0, 100),
('AR013', 'Beras tumbuk merah,mentah', 'KZGPI- 1990', 14.6, 352, 7.3, 0.9, 76.2, 0.8, 1.0, 15, 257, 4.2, 10, 202.0, 0.36, 1.9, 0, 0, 0, 0.34, 0.00, 3.3, 0, 100),
('AR014', 'Cantel, mentah', 'DABM-1964', 11.0, 366, 11.0, 3.3, 73.0, 1.2, 1.7, 28, 287, 4.4, 7, 249.0, NULL, NULL, 0, 0, NULL, 0.09, 0.14, 2.8, 0, 100),
('AR015', 'Jagung muda, kuning,mentah', 'KZGPI- 1990', 61.8, 147, 5.1, 0.7, 31.5, 1.3, 0.9, 6, 122, 1.1, 5, 33.6, 0.13, 0.9, 0, 113, 261, 0.24, 0.10, 0.8, 9, 100),
('AR016', 'Jagung kuning pipil,kering, mentah', 'KZGPI- 1990', 11.5, 366, 9.8, 7.3, 69.1, 2.2, 2.4, 30, 538, 2.3, 5, 79.4, 0.10, 4.1, NULL, 636, 641, 0.12, 0.12, 1.8, 3, 100),
('AR017', 'agung pipil var,harapan, kering', 'KZGPI- 1990', 11.3, 367, 6.2, 5.1, 76.2, 2.6, 1.2, 7, 354, 2.8, 1, 79.6, 0.10, 4.1, NULL, 637, 385, 0.19, 0.08, 1.0, 0, 100),
('AR018', 'Jagung pipil var,metro, kering', 'KZGPI- 1990', 10.6, 368, 5.5, 4.6, 78.0, 2.9, 1.3, 7, 300, 2.4, 1, 80.2, 0.10, 4.1, NULL, 642, 554, 0.16, 0.08, 1.0, 0, 100),
('AR019', 'Jali, mentah', 'DABM-1964', 23.0, 324, 11.0, 4.0, 61.0, 3.1, 1.0, 213, 176, 11.0, 24, NULL, 0.10, 0.4, NULL, NULL, NULL, 0.14, 0.08, 1.8, 0, 90),
('AR020', 'Jawawut, mentah', 'DABM-1964', 11.9, 364, 9.7, 3.5, 73.4, 8.2, 1.5, 28, 311, 5.3, 7, 255.1, 0.45, 1.5, NULL, 33, NULL, 0.33, 0.28, 4.5, NULL, 100),
('AR021', 'Jampang huma,mentah', 'DABM-1964', 11.7, 350, 6.2, 1.4, 78.2, 1.7, 2.5, 329, 254, 5.3, 53, 396.7, 0.70, 1.6, NULL, 33, NULL, 0.51, 0.30, 0.7, 0, 100),
('AP001', 'Nasi', 'KZGPI- 1990', 56.7, 180, 3.0, 0.3, 39.8, 0.2, 0.2, 25, 27, 0.4, 1, 38.0, 0.10, 0.6, 0, 0, NULL, 0.05, 0.10, 2.6, 0, 100),
('AP002', 'Nasi tim', 'OKN-1992', 71.0, 120, 2.4, 0.4, 26.0, 0.5, 0.2, 3, 7, 0.4, 0, 23.9, 0.10, 0.4, NULL, 0, NULL, 0.10, 0.00, 1.4, 0, 100),
('AP003', 'Beras, tapai', 'KZGMI-2001', 75.5, 99, 1.7, 0.3, 22.4, 0.0, 0.1, 4, 19, 0.0, 26, 2.0, 0.10, 0.5, 0, 0, 0, 0.00, 0.00, 0.0, 0, 100),
('AP004', 'Beras, tepung, mentah', 'DABM-1964', 12.0, 353, 7.0, 0.5, 80.0, 2.4, 0.5, 5, 140, 0.8, 5, 241.0, 0.10, 0.8, 0, 0, 0, 0.12, 0.10, 1.2, 0, 100),
('AP005', 'Beras merah, Nasi', 'KZGPI- 1990', 64.0, 149, 2.8, 0.4, 32.5, 0.3, 0.3, 6, 63, 0.8, 5, 91.4, 0.20, 0.9, 0, 0, 0, 0.06, 0.00, 1.6, 0, 100),
('AP006', 'Bihun, mentah', 'DABM-1964', 12.9, 348, 4.7, 0.1, 82.1, 1.2, 0.2, 6, 35, 1.8, 12, 5.0, 0.08, 0.7, 0, 0, 0, 0.00, 0.00, 0.2, 0, 100),
('AP007', 'Bihun goreng instan', 'KZGMS-1993', 9.0, 381, 6.1, 3.9, 80.3, NULL, 0.7, 266, 151, 2.9, 928, NULL, NULL, NULL, 58, NULL, 400, 0.37, NULL, NULL, 0, 100),
('AP008', 'Bihun Jagung, mentah', 'BKP', 11.3, 354, 0.5, 0.3, 87.4, 3.0, 0.5, 13, 111, 0.6, 49, 1.4, 0.40, 0.0, NULL, 0, 0, 0.02, 0.02, 0.3, 0, 100),
('AP009', 'Jagung nasi, mentah', 'BKP', 11.0, 357, 8.8, 0.5, 79.5, 6.2, 0.3, 5, 43, 0.6, 2, 30.4, 0.10, 0.3, NULL, 0, 0, 0.30, 0.02, 0.1, 0, 100),
('AP010', 'Jagung muda, rebus', 'KZGPI- 1990', 53.2, 142, 5.0, 0.7, 30.3, 0.8, 0.8, 5, 105, 0.8, 5, 24.3, 0.20, 0.9, NULL, 145, 225, 0.15, 0.00, 0.7, 0, 100),
('AP011', 'Jagung kuning, tepung', 'DABM-1964', 12.0, 355, 9.2, 3.9, 73.7, 7.2, 1.2, 10, 256, 2.4, 11, 24.4, 0.23, 1.7, NULL, 0, 510, 0.38, 0.02, 0.3, NULL, 100),
('AP012', 'Jagung kuning pipil,rebus', 'KZGPI- 1990', 63.7, 154, 3.8, 3.5, 28.4, 0.7, 0.6, 7, 171, 0.5, 5, 56.4, 0.10, 4.4, NULL, 818, 234, 0.08, 0.10, 1.7, 0, 100),
('AP013', 'Jagung, tepung putih', 'DABM-1964', 12.0, 355, 9.2, 3.9, 73.7, 7.2, 1.2, 10, 256, 2.4, 11, 24.4, 0.23, 1.7, NULL, 0, 0, 0.38, 0.02, 0.3, NULL, 100),
('AP014', 'Ketan, ketupat', 'KZGPI- 1990', 52.0, 212, 4.0, 4.6, 38.6, 0.2, 0.9, 8, 46, 1.0, NULL, NULL, NULL, NULL, 0, 0, 0, 0.07, NULL, 0.2, 0, 100),
('AP015', 'Ketan hitam, matang', 'KZGPI- 1990', 56.9, 181, 4.0, 1.2, 37.3, 0.3, 0.6, 9, 144, 1.7, 9, 18.4, 0.10, 0.7, 0, 0, 0, 0.06, 0.00, 0.5, 0, 100),
('AP016', 'Ketan hitam, tapai', 'KZGPI- 1990', 50.2, 166, 3.8, 1.0, 34.4, 0.3, 0.6, 8, 106, 1.6, 5, 12.0, NULL, NULL, NULL, NULL, 0, 0.02, NULL, NULL, 0, 100),
('AP017', 'Ketan putih, matang', 'KZGPI- 1990', 60.7, 163, 3.0, 0.4, 35.7, 0.2, 0.2, 4, 55, 0.7, 8, 16.8, 0.10, 0.7, 0, 0, 0, 0.07, 0.00, 0.5, 0, 100),
('AP018', 'Ketan putih, tapai', 'KZGPI- 1990', 58.9, 172, 3.0, 0.5, 37.5, 0.6, 0.1, 6, 35, 0.5, 1, NULL, NULL, NULL, 0, 0, 0, 0.04, 0.00, 0.2, 0, 100),
('AP019', 'Maizena, tepung', 'DABM-1964', 14.0, 341, 0.3, 0.0, 85.0, 7.0, 0.7, 20, 30, 1.5, 6, 9.0, 0.22, 1.6, 0, 0, 0, 0.00, 0.09, 1.3, 0, 100),
('AP020', 'Makaroni, mentah', 'DABM-1964', 11.7, 353, 8.7, 0.4, 78.7, 4.9, 2.5, 20, 80, 0.3, 5, 0.0, 0.28, 1.4, NULL, NULL, 0, 0.10, 0.13, 2.2, 0, 100),
('AP021', 'Mi basah', 'DABM-1964', 80.0, 88, 0.6, 3.3, 14.0, 0.1, 2.1, 14, 13, 6.8, 63, 13.5, 0.06, 0.4, NULL, 0, NULL, 0.00, 0.00, 0.0, 0, 100),
('AP022', 'Mi kering', 'KZGPI- 1990', 10.6, 339, 10.0, 1.7, 6.3, 0.4, 1.4, 31, 143, 3.9, 760, 83.0, 0.29, 1.9, NULL, NULL, 0, 0.00, 0.08, 2.2, 0, 100),
('AP023', 'Misoa', 'KZGPI- 1990', 10.0, 345, 8.5, 2.2, 78.0, 0.5, 1.3, 52, 120, 8.7, 3064, 44.0, 0.08, 0.0, 0, 0, 0, 0.00, 0.02, 0.2, 0, 100),
('AP024', 'Roti putih', 'DABM-1964', 40.0, 248, 8.0, 1.2, 50.0, 9.1, 0.8, 10, 95, 1.5, 530, 91.0, 0.15, 0.9, 0, 0, 0, 0.10, 0.29, 2.4, 0, 100),
('AP025', 'Tepung terigu', 'KZGPI- 1990', 11.8, 333, 9.0, 1.0, 77.2, 0.3, 1.0, 22, 150, 1.3, 2, 0.0, 0.00, 2.8, 0, 0, 0, 0.10, 0.07, 1.0, 0, 100),
('AP026', 'Amparan tatak', 'KZGMI-2001', 58.4, 191, 1.3, 5.5, 34.0, NULL, 0.8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP027', 'Apang kukus, kue', 'KZGMI-2001', 49.5, 202, 3.0, 0.3, 46.7, NULL, 0.5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP028', 'Apem, kue', 'KZGMI-2001', 63.1, 148, 2.0, 0.5, 33.9, NULL, 0.5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP029', 'Biskuit', 'DABM-1964', 2.2, 458, 6.9, 14.4, 75.1, 2.1, 1.4, 62, 87, 2.7, 241, 20.3, 0.16, 0.6, 0, 14, NULL, 0.09, 0.15, 1.4, 0, 100),
('AP030', 'Bakpia, kue', 'KZGPI- 1990', 38.9, 272, 8.7, 6.7, 44.1, 0.9, 1.6, 194, 117, 4.5, NULL, NULL, NULL, NULL, NULL, NULL, 1392, 0.31, 1.00, 2.9, 0, 100),
('AP031', 'Bakwan', 'KZGPI- 1990', 40.5, 280, 8.2, 10.2, 39.0, 3.4, 2.1, 204, 79, 7.0, NULL, NULL, NULL, NULL, 0, NULL, 0, 0.08, NULL, NULL, 0, 100),
('AP032', 'Bantal', 'KZGMI-2001', 52.3, 190, 3.3, 0.3, 43.5, 3.4, 0.6, 9, 0, 0.4, 164, 84.0, 0.20, 0.9, NULL, NULL, NULL, 0.27, 0.02, 3.6, NULL, 100),
('AP033', 'Baruasa', 'KZGMI-2001', 5.3, 417, 6.5, 8.2, 79.3, NULL, 0.7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP034', 'Batar daan', 'KZGMI-2001', 75.3, 107, 2.2, 2.2, 19.6, NULL, 0.7, 20, 30, 0.6, 200, 90.0, 0.10, NULL, NULL, NULL, NULL, 0.18, 0.02, NULL, NULL, 100),
('AP035', 'Bika ambon', 'KZGPI- 1990', 51.5, 199, 2.1, 1.5, 44.4, 0.3, 0.6, 45, 28, 1.8, NULL, NULL, NULL, NULL, 0, NULL, 408, 0.10, NULL, 0.0, 0, 100),
('AP036', 'Bingka', 'KZGMI-2001', 44.4, 273, 5.3, 10.6, 39.1, NULL, 0.6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP037', 'Bobengka', 'KZGMI-2001', 46.3, 225, 5.3, 2.6, 45.2, NULL, 0.6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP038', 'Bolu peca', 'KZGMI-2001', 55.6, 197, 3.3, 4.6, 35.6, NULL, 0.9, NULL, 0, 0.0, 0, 0.0, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.0, 0, 100),
('AP039', 'Brem', 'KZGPI-1990', 37.4, 249, 3.4, 0.4, 58.0, 0.0, 0.9, 198, 86, 2.0, NULL, NULL, NULL, NULL, 0, NULL, 240, 0.34, 0.00, 0.0, 0, 100),
('AP040', 'Bubur tinotuan(Manado)', 'KZGMI-2001', 80.9, 156, 2.3, 0.2, 15.6, 8.2, 1.0, 41, 20, 0.4, 486, 164.0, 0.30, 0.4, NULL, 1437, NULL, 0.10, 0.04, NULL, 15, 100),
('AP041', 'Cake tape', 'KZGMI-2001', 32.2, 323, 4.9, 11.5, 50.1, 1.4, 1.4, 131, 83, 2.6, NULL, NULL, NULL, NULL, 26, NULL, 1872, 0.38, 0.16, 0.3, 0, 100),
('AP042', 'Cangkuning', 'KZGMI-2001', 57.5, 204, 2.8, 7.5, 31.4, NULL, 0.8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP043', 'Dodol bali', 'KZGPI- 1990', 26.5, 298, 3.7, 2.1, 65.9, 0.4, 1.8, 70, 76, 2.5, NULL, NULL, NULL, NULL, 0, 0, 496, 0.28, NULL, 2.5, 0, 100),
('AP044', 'Dodol galamai', 'KZGMI-2001', 16.5, 348, 0.4, 3.8, 76.1, 0.5, 1.2, 41, 144, 2.6, 38, 76.0, 0.30, 2.1, 0, 0, 0, 0.03, 0.06, 1.8, 0, 100),
('AP045', 'Dodol kedondong', 'KZGPI- 1990', 26.4, 331, 1.9, 7.6, 63.8, 1.0, 0.4, 90, 55, 2.3, NULL, NULL, NULL, NULL, 0, NULL, 408, 0.11, NULL, 0.8, 5, 100),
('AP046', 'Dodol manado', 'KZGMI-2001', 26.1, 373, 4.3, 16.5, 51.9, 0.4, 1.2, 41, 142, 2.4, 35, 72.0, 0.30, 2.1, 0, 0, 0, 0.04, 0.06, 2.1, 0, 100),
('AP047', 'Emping beras', 'KZGMI-2001', 13.6, 403, 10.6, 2.2, 85.3, 0.2, 1.9, 11, 240, 0.3, 1, 113.0, 0.30, 2.4, NULL, NULL, 0, 0.00, 0.16, NULL, 0, 100),
('AP048', 'Gemblong', 'KZGPI- 1990', 36.2, 274, 1.7, 5.4, 55.5, 2.2, 1.2, 69, 55, 3.3, NULL, NULL, NULL, NULL, 0, 0, 0, 0.00, NULL, NULL, 0, 100),
('AP049', 'Gendar goreng', 'KZGPI- 1990', 30.4, 407, 6.4, 28.2, 32.0, 0.1, 3.0, 216, 62, 1.6, NULL, NULL, NULL, NULL, 0, NULL, 184, 0.16, 0.00, 0.6, 0, 100),
('AP050', 'Intip goreng', 'KZGPI- 1990', 6.5, 474, 7.6, 21.6, 62.3, 1.2, 2.0, 36, 64, 2.5, 0, 38.0, 0.05, 0.5, NULL, 0, 200, 0.25, 0.03, 0.8, 0, 100),
('AP051', 'Jagung gerontol', 'KZGPI- 1990', 61.7, 156, 2.7, 1.3, 33.3, 1.0, 0.8, 51, 105, 1.2, NULL, NULL, NULL, NULL, 0, NULL, 162, 0.08, 0.00, 0.0, 0, 100),
('AP052', 'Jagung titi', 'KZGPI- 1990', 9.2, 374, 9.4, 2.2, 79.1, 0.8, 0.1, 14, 142, 2.9, NULL, NULL, 9.00, NULL, NULL, NULL, 11507, 0.20, NULL, NULL, NULL, 100),
('AP053', 'Japilus', 'KZGPI- 1990', 3.8, 500, 1.2, 25.1, 67.3, 0.4, 2.7, 186, 29, 4.9, NULL, NULL, NULL, NULL, 0, NULL, 0, 0.17, 0.03, 0.4, 0, 100),
('AP054', 'Kakicak', 'KZGMI-2001', 43.9, 296, 3.4, 15.1, 36.7, NULL, 0.9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP055', 'Kambose', 'KZGMI-2001', 61.5, 164, 3.0, 2.4, 32.6, 4.3, 0.7, 16, 36, 0.7, 0, 32.0, 0.10, 1.6, 0, 256, NULL, 0.10, 0.10, 0.4, NULL, 100),
('AP056', 'Kapusa', 'KZGMI-2001', 63.5, 158, 4.4, 3.2, 27.8, 5.3, 1.0, 79, 115, 1.2, 104, 149.0, 0.50, 1.1, 0, 1374, NULL, 0.06, 0.05, 0.1, 0, 100),
('AP057', 'Keddo bodong', 'KZGMI-2001', 33.9, 290, 4.6, 5.7, 55.2, NULL, 0.6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP058', 'Kelepon, kue', 'KZGMI-2001', 49.6, 215, 3.7, 3.7, 41.8, 1.0, 1.2, 232, 45, 3.3, NULL, NULL, NULL, NULL, 0, NULL, 872, 0.09, 0.07, 0.2, 0, 100),
('AP059', 'Kereput', 'KZGMI-2001', 3.5, 580, 4.8, 39.6, 51.1, NULL, 1.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP060', 'Ketoprak', 'KZGPI-1990', 69.1, 153, 7.9, 7.7, 13.0, 2.9, 2.6, 153, 134, 3.4, NULL, NULL, NULL, NULL, 3, NULL, 435, 0.05, NULL, NULL, 0, 100),
('AP061', 'Ketupat kandangan', 'KZGMI-2001', 78.5, 109, 2.2, 5.2, 13.4, NULL, 0.7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP062', 'Koya', 'KZGMI-2001', 13.2, 366, 4.2, 4.3, 77.5, 0.8, 0.8, 153, 222, 7.0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 100),
('AP063', 'Koya mirasa', 'KZGMI-2001', 7.2, 370, 8.0, 1.0, 82.2, 0.4, 1.6, 83, 110, 17.0, NULL, NULL, NULL, NULL, 3, NULL, 144, 0.19, 0.45, 2.6, 0, 100),
('AP064', 'Koyabu', 'KZGMI-2001', 44.2, 241, 3.4, 4.3, 47.2, NULL, 0.9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP065', 'Kue ali', 'KZGMI-2001', 12.8, 440, 3.8, 18.5, 64.5, 0.3, 0.4, 27, 47, 2.5, NULL, NULL, NULL, NULL, 0, NULL, 0, 0.13, 0.09, 0.0, 0, 100),
('AP066', 'Kue bangen', 'KZGMI-2001', 5.6, 442, 3.3, 14.7, 74.2, NULL, 2.2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP067', 'Kue gelang', 'KZGMI-2001', 7.1, 448, 5.8, 16.1, 70.0, NULL, 1.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP068', 'Kue jahe', 'KZGPI- 1990', 3.7, 425, 1.6, 8.8, 84.6, 1.2, 1.3, 155, 61, 4.0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0.20, NULL, NULL, 0, 100),
('AP069', 'Kue kelapa', 'KZGMI-2001', 3.3, 591, 5.6, 42.1, 47.5, NULL, 1.5, 32, 180, 1.6, 33, 443.0, 0.50, 1.1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP070', 'Kue koa', 'KZGMI-2001', 14.5, 340, 4.8, 0.4, 79.3, NULL, 1.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP071', 'Kue ku temu', 'KZGMI-2001', 46.2, 214, 3.5, 0.2, 49.6, NULL, 0.5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP072', 'Kue lumpur', 'KZGMS-1993', 40.1, 291, 3.6, 11.1, 44.1, NULL, 1.1, 96, 60, 2.3, NULL, NULL, NULL, NULL, 20, NULL, 400, 0.24, NULL, NULL, NULL, 100),
('AP073', 'Kue pelita', 'KZGMI-2001', 71.0, 141, 5.3, 5.5, 17.6, NULL, 0.6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP074', 'Kue putu cangkir', 'KZGPI- 1990', 32.6, 304, 5.3, 7.0, 54.9, 0.9, 0.2, 18, 193, 4.0, NULL, NULL, NULL, NULL, 0, NULL, 0, 0.06, NULL, NULL, 0, 100),
('AP075', 'kue sus', 'KZGMS-1993', 56.6, 221, 7.5, 10.2, 24.8, NULL, 0.9, 105, 85, 2.5, NULL, NULL, NULL, NULL, 26, NULL, 1300, 0.12, NULL, NULL, 0, 100),
('AP076', 'Kue thipan', 'KZGMI-2001', 43.0, 247, 2.9, 4.2, 49.5, NULL, 0.4, 16, 107, 1.8, 95, 56.0, 1.30, 0.8, NULL, NULL, NULL, 0.17, NULL, NULL, NULL, 100),
('AP077', 'Laksa/Putu mayang', 'KZGMI-2001', 73.2, 121, 1.7, 3.4, 21.1, NULL, 0.6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP078', 'Lapis legit', 'KZGPI- 1990', 21.3, 389, 6.6, 15.7, 55.5, 0.5, 0.9, 16, 136, 1.9, NULL, NULL, NULL, NULL, 41, NULL, 1032, 0.26, 0.09, 3.0, 0, 100),
('AP079', 'Lupis ketan', 'KZGPI- 1990', 61.0, 164, 1.8, 2.1, 34.5, 0.7, 0.6, 119, 31, 1.5, NULL, NULL, NULL, NULL, 0, NULL, 0, 0.09, 0.00, 0.2, 0, 100),
('AP080', 'Manan samin', 'KZGMI-2001', 27.1, 379, 3.4, 18.1, 50.6, NULL, 0.8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP081', 'Martabak india', 'KZGMI-2001', 65.8, 153, 4.5, 4.2, 24.3, NULL, 1.2, 14, 108, 2.4, 240, 112.0, 0.40, 0.5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP082', 'Martabak mesir', 'KZGMI-2001', 40.2, 278, 5.1, 8.6, 45.0, NULL, 1.1, 49, 168, 3.4, 193, 123.0, 0.20, 0.9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP083', 'Masekat', 'KZGMI-2001', 15.6, 369, 2.1, 7.0, 74.1, 4.0, 0.8, 17, 52, 0.8, 141, 12.0, 0.40, 0.3, 155, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP084', 'Mie aceh rebus', 'KZGMI-2001', 74.6, 113, 3.0, 3.2, 18.1, NULL, 1.1, 22, 44, 1.4, 191, 36.0, 0.20, 0.3, 0, 0, NULL, 0.00, 0.00, 0.0, 0, 100),
('AP085', 'Mie ayam', 'KZGMS-1993', 78.6, 102, 6.2, 3.9, 10.5, NULL, 0.8, 262, 51, 1.8, 279, NULL, NULL, NULL, 39, NULL, 166, 0.85, NULL, 0.0, 0, 100),
('AP086', 'Mie bakso', 'KZGMS-1993', 74.5, 114, 5.3, 3.0, 16.4, 0.1, 0.8, 286, 53, 1.9, 760, NULL, NULL, NULL, 17, NULL, 180, 0.16, NULL, NULL, 0, 100),
('AP087', 'Mie celon', 'KZGMI-2001', 75.9, 102, 3.0, 2.1, 17.8, NULL, 1.2, 12, 84, 1.4, 451, 112.0, 0.10, 0.5, 0, 0, NULL, 0.00, 0.00, 0.0, 0, 100),
('AP088', 'Mie pangsit basah', 'KZGMS-1993', 79.2, 105, 5.9, 4.9, 9.4, NULL, 0.7, 208, 48, 2.0, 530, NULL, NULL, NULL, 25, NULL, 620, 0.46, NULL, NULL, 0, 100),
('AP089', 'Nasi gemuk', 'KZGMI-2001', 61.4, 192, 3.8, 8.8, 24.4, 0.7, 1.6, 15, 74, 1.0, 355, 63.0, 0.20, 1.4, 0, 0, NULL, 0.19, 0.05, 2.0, 0, 100),
('AP090', 'Nasi gurih', 'KZGMI-2001', 60.5, 190, 4.7, 7.5, 26.0, 0.7, 1.3, 12, 62, 0.8, 296, 52.0, 0.20, 1.2, 0, 0, NULL, 0.11, 0.06, 2.1, 0, 100),
('AP091', 'Nasi minyak', 'KZGMI-2001', 53.3, 207, 3.5, 5.0, 37.1, 0.8, 1.1, 26, 100, 1.5, 74, 174.0, 0.20, 2.2, 0, 0, NULL, 0.14, 0.07, 2.6, 0, 100),
('AP092', 'Nasi rames', 'KZGMS-1993', 65.8, 155, 10.3, 4.2, 19.1, NULL, 0.6, 239, 62, 1.8, 265, NULL, NULL, NULL, 96, NULL, 3140, 0.59, 0.00, NULL, NULL, 100),
('AP093', 'Nopia spesial', 'KZGPI- 1990', 11.5, 387, 5.3, 7.6, 74.3, 0.3, 1.3, 903, 133, 4.2, NULL, NULL, NULL, NULL, NULL, NULL, 512, 0.17, NULL, NULL, 0, 100),
('AP094', 'Onde-onde', 'KZGMI-2001', 27.7, 336, 4.0, 9.8, 57.9, NULL, 0.6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP095', 'Padamaran', 'KZGMI-2001', 67.6, 171, 3.9, 8.9, 18.8, NULL, 0.8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP096', 'Pastel', 'KZGMS-1993', 38.3, 307, 4.5, 13.3, 42.4, NULL, 1.5, 296, 53, 2.5, NULL, NULL, NULL, NULL, 0, NULL, 5360, 0.15, NULL, NULL, 0, 100),
('AP097', 'Pulut', 'KZGMI-2001', 49.1, 216, 2.6, 3.1, 44.4, NULL, 0.8, 6, 70, 3.8, 100, 22.0, 0.40, 1.3, 0, 0, NULL, 0.14, NULL, NULL, NULL, 100),
('AP098', 'Pundut nasi', 'KZGMI-2001', 77.8, 104, 1.9, 4.1, 15.1, 0.4, 1.1, 26, 100, 1.5, 74, 174.0, 0.00, 0.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP099', 'Putri hijau', 'KGZMI-2001', 54.8, 189, 5.4, 2.1, 37.2, NULL, 0.5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP100', 'Putri selat', 'KZGMI-2001', 66.6, 163, 2.2, 6.5, 23.8, NULL, 0.9, 72, 3, 4.0, 6, 68.0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 100),
('AP101', 'Putu sopa', 'KZGMI-2001', 50.7, 215, 3.3, 4.1, 41.1, NULL, 0.8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP102', 'Renggi goreng', 'KZGMI-2001', 8.8, 471, 4.7, 21.8, 64.1, 6.4, 0.6, 4, 80, 1.1, 126, 29.0, 0.90, 1.3, 0, 0, 0, 0.53, 0.05, 8.2, 0, 100),
('AP103', 'Roti boong', 'KZGMI-2001', 34.0, 341, 5.5, 16.2, 43.3, NULL, 1.0, 15, 65, 1.1, 161, 41.0, NULL, 0.9, NULL, NULL, NULL, 0.40, 0.30, 2.4, 0, 100),
('AP104', 'Roti warna sawomatang', 'DABM-1964', 40.0, 249, 7.9, 1.5, 49.7, NULL, 0.9, 20, 140, 2.5, 500, 91.0, NULL, NULL, 0, 0, 0, 0.15, NULL, NULL, 0, 100),
('AP105', 'Sarimuka', 'KZGMI-2001', 61.5, 166, 2.3, 2.8, 32.9, NULL, 0.5, 36, 13, 2.0, 3, 34.0, 0.00, 0.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP106', 'Spaghetti', 'KZGMS-1993', 66.1, 139, 7.4, 2.1, 22.6, NULL, 2.1, 109, 53, 4.7, NULL, NULL, NULL, NULL, 42, NULL, 940, 0.35, NULL, NULL, 0, 100),
('AP107', 'Srikaya ketan', 'KZGMI-2001', 41.0, 265, 2.7, 6.4, 49.1, NULL, 0.8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP108', 'Sunduk lawang', 'KZGMI-2001', 63.4, 181, 1.9, 1.3, 32.4, NULL, 1.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
('AP109', 'Suwir-suwir', 'KZGPI- 1990', 13.4, 347, 0.5, 0.9, 84.2, 0.8, 1.0, 42, 40, 4.3, NULL, NULL, NULL, NULL, 1, NULL, 240, 0.13, NULL, 0.9, 0, 100),
('AP110', 'Tipa-tipa', 'KZGPI- 1990', 11.3, 355, 6.2, 1.2, 79.8, 1.3, 1.5, 17, 328, 1.6, NULL, NULL, NULL, NULL, 0, 0, 0, 0.26, 0.04, 1.5, 0, 100),
('AP111', 'Wajit camilan', 'KZGPI- 1990', 27.1, 303, 6.3, 2.7, 63.3, 6.9, 0.6, 61, 302, 5.5, NULL, NULL, NULL, NULL, 0, NULL, 0, 0.03, NULL, NULL, 0, 100),
('AP112', 'Widaran', 'KZGPI- 1990', 7.0, 424, 1.3, 10.7, 80.7, 0.2, 0.3, 49, 88, 2.5, NULL, NULL, NULL, NULL, 21, NULL, 440, 0.13, 0.20, 2.2, 0, 100),
('AP113', 'Wingko babat', 'KZGPI- 1990', 29.7, 355, 3.2, 15.1, 51.4, 2.4, 0.7, 47, 63, 1.1, NULL, NULL, NULL, NULL, 0, NULL, 0, 0.08, 0.08, 0.0, 0, 100),
('AP114', 'Yangko', 'KZGPI- 1990', 37.4, 254, 3.0, 1.1, 58.1, 0.8, 0.4, 184, 24, 2.6, NULL, NULL, NULL, NULL, 0, NULL, 96, 0.15, NULL, 0.0, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` enum('admin','ahli_gizi') DEFAULT NULL,
  `is_active` enum('0','1') NOT NULL,
  `create_by` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `role`, `is_active`, `create_by`, `date_created`) VALUES
(2, 'admin', 'admin@admin.com', 'admin', '$2y$10$BeBYn39RiaTs072GMvu/CuwIiG82fQYR/10Xxs/wQH5ql5NZEXwAC', 'admin', '1', 0, 0),
(3, 'imam ahmadi', 'imam@gmail.com', 'imam', '$2y$10$hgfxJlgZo7v/ae5bAJDSyeOb7gMCSTZtpaN5pOZKNFAF5dBxrQxHC', 'ahli_gizi', '1', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id_hitung`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pasien_gizi`
--
ALTER TABLE `pasien_gizi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien_gizi`
--
ALTER TABLE `pasien_gizi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
