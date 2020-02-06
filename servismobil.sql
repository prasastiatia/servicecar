-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 12:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servismobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  `avatar_admin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `nama_admin`, `email`, `password`, `level`, `avatar_admin`, `telepon`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin12', 'Prasastia Aryani Saliha', 'tias1508@gmail.com', '$2b$10$08FgxH3ZXuTAI35.XSFg1ubpdL8cEBJKSV98VZGlAPaxx8ctGw.o2', 1, '437395570.jpg', '081249263092', 'Jl. Poin Mas Raya No.7 RT04/RW09 Mampang Pancoran Mas Depok 16433', NULL, '2019-04-08 02:56:41', '2019-07-22 00:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(10) UNSIGNED NOT NULL,
  `pengirim` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `pengirim`, `penerima`, `subject`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'pras15', 'admin12', 'cobaa ahh', 'bagus dah', '2019-05-25 00:05:14', '2019-05-25 00:05:14'),
(2, 'pras15', 'admin12', 'konsul', 'coba', '2019-05-28 00:32:25', '2019-05-28 00:32:25'),
(3, 'PrasastiaTia', 'admin12', 'tesss', 'sok ajaa', '2019-08-11 01:02:56', '2019-08-11 01:02:56'),
(4, 'pras15', 'admin12', 'cobaa', 'tes123', '2020-02-05 18:57:01', '2020-02-05 18:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_servis`
--

CREATE TABLE `jadwal_servis` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_servis` text NOT NULL,
  `harga` int(50) NOT NULL,
  `montir` varchar(50) NOT NULL,
  `tanggal_servis` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_servis`
--

INSERT INTO `jadwal_servis` (`id`, `name`, `email`, `jenis_servis`, `harga`, `montir`, `tanggal_servis`, `created_at`, `updated_at`) VALUES
(1, 'pras15', 'tias1508@hotmail.com', 'Oli Gardan', 175500, 'Dendi', '2020-02-18', '2020-02-05 19:31:06', '2020-02-05 19:31:06'),
(3, 'fajar12', 'fajar12@mail.com', 'Oli Mesin', 320000, 'Dwi', '2020-02-17', '2020-02-06 08:12:01', '2020-02-06 08:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE `outbox` (
  `id` int(10) UNSIGNED NOT NULL,
  `pengirim` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `balasan_pesan` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`id`, `pengirim`, `penerima`, `subject`, `pesan`, `balasan_pesan`, `updated_at`, `created_at`) VALUES
(10, 'admin12', 'pras15', 'konsul', 'coba', 'cobaaa', '2019-06-16 06:29:14', '2019-06-16 06:29:14'),
(11, 'admin12', 'pras15', 'cobaa ahh', 'bagus dah', 'apa hayo', '2020-02-06 10:00:08', '2020-02-06 10:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE `servis` (
  `id` int(11) NOT NULL,
  `jenis_servis` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servis`
--

INSERT INTO `servis` (`id`, `jenis_servis`, `harga`, `updated_at`, `created_at`) VALUES
(1, 'Oli Mesin', '320000', NULL, NULL),
(2, 'Oli Gardan', '175500', NULL, NULL),
(3, 'Filter Oli', '35000', '2020-02-05 21:23:32', '2020-02-05 21:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  `avatar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `nama_user`, `email`, `password`, `level`, `avatar`, `telepon`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
('fajar12', 'Fajar Setiawan', 'fajar12@mail.com', '$2y$10$Bh2YIUzENPwnPa2xnmFLT.Zb5polTldG1mqHeqgcZ5RMxUKo20f/m', 2, '983213035.jpg', '088811113333', 'Bekasi', NULL, '2020-02-06 07:06:47', '2020-02-06 07:36:58'),
('ghina', '', 'g@g.com', '$2b$10$08FgxH3ZXuTAI35.XSFg1ubpdL8cEBJKSV98VZGlAPaxx8ctGw.o2', 0, '', '', '', NULL, '2019-03-27 06:27:57', '2019-03-27 06:27:57'),
('pras12', '', 'tias15@tia.com', '$2b$10$08FgxH3ZXuTAI35.XSFg1ubpdL8cEBJKSV98VZGlAPaxx8ctGw.o2', 2, '', '', '', NULL, '2019-04-30 02:00:33', '2019-04-30 02:00:33'),
('pras15', 'Prasastia Aryani Saliha', 'tias1508@hotmail.com', '$2b$10$08FgxH3ZXuTAI35.XSFg1ubpdL8cEBJKSV98VZGlAPaxx8ctGw.o2', 2, '146567893.JPG', '081249263092', 'Poin Mas No.7 RT04/RW09', NULL, '2019-03-25 03:23:51', '2019-08-25 03:44:34'),
('PrasastiaTia', '', 'rocketabis@gmail.com', '$2y$10$u957TBMXc4iQG', 0, '', '', '', NULL, '2019-03-24 10:14:49', '2019-03-24 10:14:49'),
('tias1508', 'siapa yaa', 'prasastiaas@gmail.com', '$2b$10$08FgxH3ZXuTAI35.XSFg1ubpdL8cEBJKSV98VZGlAPaxx8ctGw.o2', 0, '179594968.JPG', '087783875364', 'Depok', NULL, '2019-03-24 10:48:11', '2019-08-25 03:21:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_servis`
--
ALTER TABLE `jadwal_servis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_servis`
--
ALTER TABLE `jadwal_servis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `servis`
--
ALTER TABLE `servis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
