-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2021 at 10:24 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapensgapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `no_pegawai` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `user_id`, `name`, `nohp`, `jabatan`, `unit`, `alamat`, `created_at`, `updated_at`, `status`, `no_pegawai`, `file`) VALUES
(1, 1, 'Admin', '12381293', 'Administrator', '1', 'Jl. Ikan', NULL, NULL, NULL, NULL, ''),
(3, 3, 'Rima Ningsih', '081', 'Kabag. Investasi', '2', NULL, '2021-07-02 07:46:41', '2021-10-21 21:54:04', NULL, 'PK19006', ''),
(4, 4, 'Achmad Sobirin', '081330763210', 'Kabag. Kepesertaan', '4', NULL, '2021-07-02 07:48:59', '2021-10-21 21:46:10', NULL, '6687011', ''),
(5, 5, 'Isrohman', '081230853129', 'Kasi. Verifikasi', '3', NULL, '2021-07-02 07:50:19', '2021-10-21 21:54:56', NULL, '6688015', ''),
(6, 6, 'Amir Yusuf', '081234411167', 'Kasi. Keuangan', '3', NULL, '2021-07-02 07:51:11', '2021-10-21 21:49:46', NULL, '6788014', ''),
(7, 7, 'Agus Suhelmi', '081330652472', 'Kasi. Umum', '4', NULL, '2021-07-02 07:56:23', '2021-10-21 21:52:09', NULL, '6889022', ''),
(8, 8, 'Andreas Otong Jaya', '082132909500', 'Kasi. Sumber Daya Manusia', '4', NULL, '2021-07-02 07:57:02', '2021-10-21 21:52:01', NULL, '6810023', ''),
(9, 9, 'Endang Sri Hartati W.', '08121720926', 'Kabag. Akuntansi & Keuangan', '3', NULL, '2021-07-02 07:57:42', '2021-10-21 21:53:28', NULL, '7513026', ''),
(10, 12, 'Ahmad Jeffry Zahidi', '082132277774', 'Kasi. Investasi', '2', NULL, '2021-07-02 07:59:26', '2021-10-21 21:49:05', NULL, '8712025', ''),
(11, 14, 'Nur Indah Kurnia Sari', '081233647504', 'Staf Investasi', '2', NULL, '2021-07-02 08:00:23', '2021-10-21 21:56:44', NULL, '9319302', ''),
(12, 15, 'Adelia Kumara Alvionita', '081216287546', 'Kasi. Akuntansi & Pelaporan', '3', NULL, '2021-07-02 08:00:54', '2021-10-21 21:46:52', NULL, '9417301', ''),
(13, 16, 'Ellen Triana M.', '082231045103', 'Staf Kepesertaan', '4', NULL, '2021-07-02 08:01:51', '2021-10-21 21:52:49', NULL, 'CP20121', ''),
(14, 17, 'Misha Primaresty', '082233771556', 'Staf Kepesertaan', '4', NULL, '2021-07-02 08:02:31', '2021-10-21 21:55:29', NULL, 'CP90172', ''),
(16, 19, 'Nur Widjajanti, SE.', '081330080911', 'Plt. Direktur Utama', '7', NULL, '2021-10-20 05:13:35', '2021-10-20 05:13:35', NULL, '-', ''),
(17, 20, 'Silva Astri', '089694849157', 'Staf Perpajakan', '3', NULL, '2021-10-21 21:59:56', '2021-10-21 21:59:56', NULL, 'PK19003', ''),
(18, 21, 'Sudartini, SE.', '08123530362', 'Direktur', '7', NULL, '2021-10-21 22:13:10', '2021-10-21 22:13:10', NULL, '-', ''),
(19, 22, 'Arif Kurniawan', NULL, 'Staf Legal', '6', NULL, '2021-10-21 22:23:12', '2021-10-21 22:23:12', NULL, 'PK19005', ''),
(20, 23, 'Istiqomah Nurul Aini', NULL, 'Staf Manajemen Risiko', '5', NULL, '2021-10-21 22:24:06', '2021-10-21 22:24:06', NULL, 'PK19004', ''),
(21, 24, 'Farendi Gio James', '67567767567', 'Puncher Man', '3', NULL, '2021-10-22 05:57:06', '2021-10-22 05:57:06', NULL, '123', ''),
(22, 25, 'Farendi Gio James', '67567767567', 'Puncher Man', '2', NULL, '2021-10-22 06:02:40', '2021-10-22 06:02:40', NULL, '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(10) NOT NULL,
  `konten` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `keterangan2` varchar(255) DEFAULT NULL,
  `keterangan3` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `create_by` varchar(255) DEFAULT NULL,
  `update_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `konten`, `keterangan`, `keterangan2`, `keterangan3`, `file`, `status`, `created_at`, `updated_at`, `create_by`, `update_by`) VALUES
(1, 'Gambar Home', 'Meraih Masa Depan Lebih Baik', 'Semen Gresik', NULL, 'slide1.jpg', 'home', '2021-12-21 07:50:09', '2021-12-21 07:50:11', NULL, NULL),
(2, 'Gambar Home', 'Meraih Masa Depan Lebih Baik', 'Semen Gresik', NULL, 'slide2.jpg', 'home', '2021-12-21 07:50:09', '2021-12-21 07:50:11', NULL, NULL),
(3, 'Gambar Home', 'Meraih Masa Depan Lebih Baik', 'Semen Gresik', NULL, 'slide3.jpg', 'home', '2021-12-21 07:50:09', '2021-12-21 07:50:11', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_07_081928_create_permission_tables', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(7, '2021_05_08_004737_create_sessions_table', 2),
(8, '2021_09_30_213621_add_votes_to_berkas', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 19),
(2, 'App\\Models\\User', 20),
(2, 'App\\Models\\User', 21),
(2, 'App\\Models\\User', 22),
(2, 'App\\Models\\User', 23),
(2, 'App\\Models\\User', 25),
(2, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 24);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-05-07 01:20:47', '2021-05-07 01:20:47'),
(2, 'User', 'web', '2021-05-07 01:20:47', '2021-05-07 01:20:47'),
(3, 'Pensiunan', 'web', '2021-11-16 04:17:01', '2021-11-16 04:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5tvaRS8ISe4DGRs4LXRt45TJp4vYvrevCJmJ3Qcu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0tUeUZLZ1huZmE5YzdhRlFvZmVhSVhRRXR2dWp4OW1UNWR4OVFpaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9kYXBlbnNnYXBwLmZhciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1640077512),
('aIhz7s2mkkZh4RK3r2GCP0FmbbIiH90sGXq1Mrtr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNndLTmRtVXl4NlFzUThaYk9OZXNmZUI4bzNjVVVnTkdwYjBRNmJTUSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovL2RhcGVuc2dhcHAuZmFyL2FkbWluL3VzZXIiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNjoiaHR0cDovL2RhcGVuc2dhcHAuZmFyL2Jlcml0YS9hcnRpa2VsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1640082173);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, NULL, NULL),
(2, 'Unit Inventasi', NULL, NULL, NULL),
(3, 'Unit Akutansi & Keuangan', NULL, NULL, NULL),
(4, 'Unit Kepesertaan', NULL, NULL, NULL),
(5, 'Unit Manajemen Resiko', NULL, NULL, NULL),
(6, 'Unit Legal', NULL, NULL, NULL),
(7, 'Direksi', 'Direksi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `nickname`) VALUES
(1, 'Admin', 'admindapensgweb@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-05-07 01:20:47', '2021-05-07 01:20:47', 'Admin Dapen'),
(3, 'Rima Ningsih', 'userdapensg1@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 07:46:41', '2021-10-21 21:54:04', 'Fajarwati'),
(4, 'Achmad Sobirin', 'biren@dapensg.com', NULL, '$2y$10$tYvCcQTAF.vDOtU/CxyWYO9R6ZlGlDj4L02Bv5krykpoq3o9s1Mjm', NULL, NULL, NULL, '2021-07-02 07:48:59', '2021-10-21 22:16:25', 'Achmad Sobirin'),
(5, 'Isrohman', 'isrohman@dapensg.com', NULL, '$2y$10$LfKyh6.eQIv9b7Twsf8mw.RBM.kpaYUnLFvsxBVsuBDc4H.4gP0VG', NULL, NULL, NULL, '2021-07-02 07:50:19', '2021-10-21 22:17:23', 'Isrohman'),
(6, 'Amir Yusuf', 'amir@dapensg.com', NULL, '$2y$10$EjSfyuqpMAb.PteZIzrEweoqnbYE1PHGdesMw6RIIt7pXiJ3mku26', NULL, NULL, NULL, '2021-07-02 07:51:11', '2021-10-21 22:16:53', 'Amir'),
(7, 'Agus Suhelmi', 'agus@dapensg.com', NULL, '$2y$10$OEAAGRrXT5QIh1QGdoUm.O20MgkrRG.NDXfc.wTr46k5s4iM2qYJy', NULL, NULL, NULL, '2021-07-02 07:56:23', '2021-10-21 22:16:39', 'Agus'),
(8, 'Andreas Otong Jaya', 'andreas@dapensg.com', NULL, '$2y$10$XtzbaXzp3K0uhha2B6dJPuWWywbOhtJrQKtJ8wPCg.opN7QZGUOAq', NULL, NULL, NULL, '2021-07-02 07:57:02', '2021-10-21 22:17:01', 'Andreas'),
(9, 'Endang Sri Hartati W.', 'endang@dapensg.com', NULL, '$2y$10$43B/YkMZa7/n8h/V6HmXxOFVvmuc5R/LQnWqTot7Cpvz5niTf4uJm', NULL, NULL, NULL, '2021-07-02 07:57:42', '2021-10-21 22:17:15', 'Endang'),
(12, 'Ahmad Jeffry Zahidi', 'jeffry@dapensg.com', NULL, '$2y$10$D59VCI8WH/68HheOmItP6OrDz7zgq8ufj4if81hVnewhUA7x46JNm', NULL, NULL, NULL, '2021-07-02 07:59:26', '2021-10-21 22:16:47', 'Ahmad Jeffry'),
(14, 'Nur Indah Kurnia Sari', 'sari@dapensg.com', NULL, '$2y$10$bDKMvWWhjd0TyH3GgszDJOQ1CrBCcY1vcHuNOy1IAQSWQfDAEr5VO', NULL, NULL, NULL, '2021-07-02 08:00:23', '2021-10-21 22:17:40', 'Nur Indah'),
(15, 'Adelia Kumara Alvionita', 'adelia@dapensg.com', NULL, '$2y$10$ngsRZq/AU3knRWb92baLo.VloR7.VmaJAZpBBEiGbCvNL44hZlxPC', NULL, NULL, NULL, '2021-07-02 08:00:54', '2021-10-21 22:16:32', 'Adelia'),
(16, 'Ellen Triana M.', 'ellen@dapensg.com', NULL, '$2y$10$YanGZWzkY0saKrUJMBUaY.izx8PPV3vgTPBwJWKmt9BqCEkMuXMNi', NULL, NULL, NULL, '2021-07-02 08:01:51', '2021-10-21 22:17:08', 'Ellen '),
(17, 'Misha Primaresty', 'misha@dapensg.com', NULL, '$2y$10$OLIAV3zF0bSqE4x2FMybZeDnTE9p528iK25MZR2jC1dvyLZAZmm/q', NULL, NULL, NULL, '2021-07-02 08:02:31', '2021-10-21 22:17:29', 'Misha'),
(19, 'Nur Widjajanti, SE.', 'nur.widjayanti@sig.id', NULL, '$2y$10$ssCfcvsZNs7QoxLGdOxgBumSY6MMaJySf.kAq83bvRxnbJvUxD2Si', NULL, NULL, NULL, '2021-10-20 05:13:35', '2021-10-21 22:17:51', 'Nur Widjajanti'),
(20, 'Silva Astri', 'silva@dapensg.com', NULL, '$2y$10$Hn8EXvvC4g.4sHukVr3ztOSLqbLjrwDF1Q1W94YVtyh4kBBCc9Jom', NULL, NULL, NULL, '2021-10-21 21:59:56', '2021-10-21 22:18:01', NULL),
(21, 'Sudartini, SE.', 'sudartini@sig.id', NULL, '$2y$10$6EkdL6NL5j/p4rTmHDvReu/8yEz4KiBUeNpeYB6oc1p1NHx2Vt1rm', NULL, NULL, NULL, '2021-10-21 22:13:10', '2021-10-21 22:18:15', NULL),
(22, 'Arif Kurniawan', 'arif@dapensg.com', NULL, '$2y$10$wQjdvRfgp83nmI9uIaQHb.CLGSC3y2OorrOolSYAKDEwUuFE/a8Gu', NULL, NULL, NULL, '2021-10-21 22:23:12', '2021-10-21 22:23:21', NULL),
(23, 'Istiqomah Nurul Aini', 'nurul@dapensg.com', NULL, '$2y$10$nOLAgbzmdDtymsYbxi6Ba.rzFojhjOxHqw5P5qxZHaKWiO0FKXnlq', NULL, NULL, NULL, '2021-10-21 22:24:06', '2021-10-21 22:24:18', NULL),
(24, 'Mukhils James', 'epc.tju@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-10-22 05:57:06', '2021-10-22 05:57:06', NULL),
(25, 'Farendi Gio James', 'farendigiotivano@unesa.ac.id', NULL, '$2y$10$3tiiequg0Fuw7RJxUl2s/.6DrcqFMD732OsWLFyoPeSvuWnC7wYsS', NULL, NULL, NULL, '2021-10-22 06:02:40', '2021-10-22 06:02:40', 'Farendi Gio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`) USING BTREE,
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`) USING BTREE;

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`) USING BTREE,
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`) USING BTREE;

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`) USING BTREE,
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`) USING BTREE;

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`) USING BTREE;

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`) USING BTREE,
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`) USING BTREE;

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `sessions_user_id_index` (`user_id`) USING BTREE,
  ADD KEY `sessions_last_activity_index` (`last_activity`) USING BTREE;

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
