-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 05:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_bank_sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sampahs`
--

CREATE TABLE `data_sampahs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `berat_sampah` tinyint(4) NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_sampahs`
--

INSERT INTO `data_sampahs` (`id`, `id_petugas`, `berat_sampah`, `kelas`, `status`, `created_at`, `updated_at`) VALUES
(2, 2052018, 7, 'XII RPL 5', 'belum', NULL, NULL),
(3, 1012018, 5, 'XII RPL 1', 'belum', '2018-05-27 01:14:52', '2018-05-27 01:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_05_26_165211_create_model_sampahs_table', 1),
(2, '2018_05_27_125132_create_model_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_petugas`, `password`, `name`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1012018, '$2y$10$dOFfqgoMtq2oyfZfx/zQr.xLgtOmfg98.4chL.Lft7DWCaThShiZa', 'fajar', 'XII RPL 1', NULL, '2018-05-27 19:31:38', '2018-05-27 19:31:38'),
(4, 1022018, '$2y$10$jLTf7nlHfU//9uzx0qNqLeo6WuU0yE/H5MWQlOPTRpwpwQCQbWpFG', 'Devvara', 'XII TKJ 5', NULL, '2018-05-27 19:45:36', '2018-05-27 19:45:36'),
(5, 1032018, '$2y$10$9W/AXw4QtsL8g9BhkWExZOASauA3XW.refjvxWRl9sPsRp36bVVKy', 'Ega Salbrina', 'XII TKJ 3', NULL, '2018-05-27 19:48:03', '2018-05-27 19:48:03'),
(6, 1112018, '$2y$10$TFlXY2XfV2ht95gQlzwJuu9ssWCh18KUDwsEMroWlg03c.N4H9IrG', 'Ega Salbrina', 'XII TKJ 6', NULL, '2018-05-27 20:01:54', '2018-05-27 20:01:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sampahs`
--
ALTER TABLE `data_sampahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_petugas_unique` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sampahs`
--
ALTER TABLE `data_sampahs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
