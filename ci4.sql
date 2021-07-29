-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 06:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 6),
(2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-15 11:47:03', 1),
(2, '::1', 'adhiardiansyah23@gmail.com', 2, '2021-05-15 12:08:58', 1),
(3, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-15 12:09:51', 1),
(4, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-15 22:14:51', 1),
(5, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-16 00:19:40', 1),
(6, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-16 00:26:41', 1),
(7, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-16 02:23:28', 1),
(8, '::1', 'arricohandyanto@gmail.com', 2, '2021-05-16 02:54:17', 1),
(9, '::1', 'bagusdimas@gmail.com', 3, '2021-05-16 02:58:27', 1),
(10, '::1', 'bagusdimas@gmail.com', 3, '2021-05-16 10:16:16', 1),
(11, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-16 12:08:14', 1),
(12, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-16 12:13:03', 1),
(13, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-16 12:13:57', 1),
(14, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-16 21:45:14', 1),
(15, '::1', 'arricohandyanto@gmail.com', 2, '2021-05-16 22:03:25', 1),
(16, '::1', 'arricohandyanto@gmail.com', 2, '2021-05-16 23:54:02', 1),
(17, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-16 23:54:39', 1),
(18, '::1', 'baqiyatus@gmail.com', 4, '2021-05-17 00:31:38', 1),
(19, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-19 10:49:35', 1),
(20, '::1', 'adhiardiansyah', NULL, '2021-05-21 20:44:01', 0),
(21, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-21 20:44:09', 1),
(22, '::1', 'adhiardiansyah', NULL, '2021-05-27 03:51:36', 0),
(23, '::1', 'adhiardiansyah', NULL, '2021-05-27 03:51:52', 0),
(24, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 03:52:09', 1),
(25, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 03:56:40', 1),
(26, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 03:56:49', 1),
(27, '::1', 'adamarthur', NULL, '2021-05-27 03:57:06', 0),
(28, '::1', 'adamarthur', NULL, '2021-05-27 03:57:46', 0),
(29, '::1', 'adamarthur', NULL, '2021-05-27 03:58:07', 0),
(30, '::1', 'adamarthur', NULL, '2021-05-27 03:59:01', 0),
(31, '::1', 'adamarthur', NULL, '2021-05-27 04:00:41', 0),
(32, '::1', 'adamarthur@gmail.com', 6, '2021-05-27 04:02:04', 1),
(33, '::1', 'adamarthur@gmail.com', 6, '2021-05-27 04:02:56', 1),
(34, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:03:07', 1),
(35, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:05:08', 1),
(36, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:07:08', 1),
(37, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:08:44', 1),
(38, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:09:37', 1),
(39, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:10:17', 1),
(40, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:13:22', 1),
(41, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:17:50', 1),
(42, '::1', 'adamarthur@gmail.com', 6, '2021-05-27 04:18:02', 1),
(43, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:19:05', 1),
(44, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:19:30', 1),
(45, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:21:19', 1),
(46, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:21:36', 1),
(47, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:22:39', 1),
(48, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 04:23:41', 1),
(49, '::1', 'adamarthur@gmail.com', 6, '2021-05-27 04:23:55', 1),
(50, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 05:10:02', 1),
(51, '::1', 'adamarthur@gmail.com', 6, '2021-05-27 05:10:21', 1),
(52, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 05:12:03', 1),
(53, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 05:14:17', 1),
(54, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 06:41:25', 1),
(55, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 07:43:14', 1),
(56, '::1', 'adamarthur@gmail.com', 6, '2021-05-27 07:44:42', 1),
(57, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 07:44:57', 1),
(58, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-27 09:37:36', 1),
(59, '::1', 'adamarthur@gmail.com', 6, '2021-05-28 13:19:45', 1),
(60, '::1', 'adhiardiansyah', NULL, '2021-05-30 00:08:20', 0),
(61, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-30 00:08:26', 1),
(62, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-30 03:32:21', 1),
(63, '::1', 'adamarthur@gmail.com', 6, '2021-05-30 03:54:24', 1),
(64, '::1', 'adamarthur@gmail.com', 6, '2021-05-30 03:58:32', 1),
(65, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-30 04:35:24', 1),
(66, '::1', 'adamarthur@gmail.com', 6, '2021-05-30 05:01:55', 1),
(67, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-30 05:02:24', 1),
(68, '::1', 'adamarthur@gmail.com', 6, '2021-05-30 05:29:00', 1),
(69, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-30 05:35:16', 1),
(70, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-30 09:34:46', 1),
(71, '::1', 'adamarthur@gmail.com', 6, '2021-05-30 09:38:13', 1),
(72, '::1', 'adhiardiansyah', NULL, '2021-05-30 09:38:46', 0),
(73, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-30 09:38:52', 1),
(74, '::1', 'adamarthur@gmail.com', 6, '2021-05-30 09:39:44', 1),
(75, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-30 09:46:37', 1),
(76, '::1', 'adhiardiansyah', NULL, '2021-05-30 22:57:24', 0),
(77, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-30 22:57:31', 1),
(78, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-31 21:13:48', 1),
(79, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-31 21:17:15', 1),
(80, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-31 21:18:11', 1),
(81, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-31 21:18:50', 1),
(82, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-31 21:19:59', 1),
(83, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-31 21:20:30', 1),
(84, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-31 21:21:44', 1),
(85, '::1', 'adhiardiansyah', NULL, '2021-05-31 21:22:38', 0),
(86, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-31 21:22:45', 1),
(87, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:24:30', 1),
(88, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:25:38', 1),
(89, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:26:45', 1),
(90, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:27:14', 1),
(91, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:30:21', 1),
(92, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:30:45', 1),
(93, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:32:02', 1),
(94, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:32:42', 1),
(95, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:35:30', 1),
(96, '::1', 'adamarthur@gmail.com', 6, '2021-05-31 21:36:54', 1),
(97, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-05-31 21:37:48', 1),
(98, '::1', 'adamarthur@gmail.com', 6, '2021-06-01 02:13:36', 1),
(99, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-01 02:23:02', 1),
(100, '::1', 'adamarthur@gmail.com', 6, '2021-06-01 02:29:15', 1),
(101, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-01 03:14:55', 1),
(102, '::1', 'adamarthur@gmail.com', 6, '2021-06-01 03:21:47', 1),
(103, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-01 08:31:07', 1),
(104, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-01 09:09:58', 1),
(105, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-01 09:24:52', 1),
(106, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-01 10:10:46', 1),
(107, '::1', 'adamarthur@gmail.com', 6, '2021-06-01 10:11:46', 1),
(108, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-01 10:13:20', 1),
(109, '::1', 'adamarthur@gmail.com', 6, '2021-06-01 10:18:34', 1),
(110, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-04 23:40:55', 1),
(111, '::1', 'akmaltajuddin@gmail.com', 11, '2021-06-04 23:52:58', 1),
(112, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-04 23:58:16', 1),
(113, '::1', 'adhanirp@gmail.com', 12, '2021-06-05 00:14:08', 1),
(114, '::1', 'adhanirp@gmail.com', 12, '2021-06-05 05:21:18', 1),
(115, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-05 05:21:36', 1),
(116, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-07 03:22:32', 1),
(117, '::1', 'adamarthur@gmail.com', 6, '2021-06-07 03:28:12', 1),
(118, '::1', 'adamarthur@gmail.com', 6, '2021-06-07 03:33:15', 1),
(119, '::1', 'adamarthur@gmail.com', 6, '2021-06-07 03:35:15', 1),
(120, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-07 03:40:28', 1),
(121, '::1', 'adamarthur@gmail.com', 6, '2021-06-07 03:44:19', 1),
(122, '::1', 'adamarthur@gmail.com', 6, '2021-06-10 00:50:09', 1),
(123, '::1', 'adamarthur@gmail.com', 6, '2021-06-13 21:38:13', 1),
(124, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-14 00:17:12', 1),
(125, '::1', 'adamarthur@gmail.com', 6, '2021-06-14 00:30:54', 1),
(126, '::1', 'adamarthur@gmail.com', 6, '2021-06-14 02:46:41', 1),
(127, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-14 02:47:34', 1),
(128, '::1', 'adamarthur@gmail.com', 6, '2021-06-14 02:48:51', 1),
(129, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-14 02:49:07', 1),
(130, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-15 02:30:36', 1),
(131, '::1', 'adamarthur@gmail.com', 6, '2021-06-15 03:03:53', 1),
(132, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-15 03:24:47', 1),
(133, '::1', 'adhanirp@gmail.com', 12, '2021-06-15 12:14:27', 1),
(134, '::1', 'adhanirp@gmail.com', 12, '2021-06-15 13:59:58', 1),
(135, '::1', 'adhanirp@gmail.com', 12, '2021-06-15 22:11:27', 1),
(136, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-18 02:05:06', 1),
(137, '::1', 'adhanirp@gmail.com', 12, '2021-06-18 02:13:08', 1),
(138, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-19 10:46:45', 1),
(139, '::1', 'adamarthur@gmail.com', 6, '2021-06-20 04:38:36', 1),
(140, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-20 04:44:55', 1),
(141, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-20 10:25:07', 1),
(142, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-20 11:08:53', 1),
(143, '::1', 'adamarthur@gmail.com', 6, '2021-06-20 12:39:48', 1),
(144, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-20 12:55:55', 1),
(145, '::1', 'adamarthur@gmail.com', 6, '2021-06-20 12:57:27', 1),
(146, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-20 13:05:19', 1),
(147, '::1', 'adamarthur@gmail.com', 6, '2021-06-20 21:22:09', 1),
(148, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-20 21:27:06', 1),
(149, '::1', 'haha@gmail.com', 13, '2021-06-22 04:09:05', 1),
(150, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-22 04:19:55', 1),
(151, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-22 07:48:19', 1),
(152, '::1', 'adamarthur@gmail.com', 6, '2021-06-22 07:49:11', 1),
(153, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-22 07:55:57', 1),
(154, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-23 11:01:46', 1),
(155, '::1', 'adamarthur@gmail.com', 6, '2021-06-23 11:02:55', 1),
(156, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-23 11:03:43', 1),
(157, '::1', 'adamarthur@gmail.com', 6, '2021-06-23 11:10:23', 1),
(158, '::1', 'adhiardiansyah23@gmail.com', 1, '2021-06-23 11:17:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1620721755, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `id_user` int(11) UNSIGNED DEFAULT NULL,
  `paket` varchar(50) DEFAULT NULL,
  `tgl_berangkat` date NOT NULL,
  `jumlah_orang` int(5) NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `paket`, `tgl_berangkat`, `jumlah_orang`, `status_pemesanan`, `bukti_bayar`) VALUES
(18, 6, 'Yogyakarta', '2021-06-10', 2, 'SUDAH BAYAR', 'buktibayar.jpg'),
(20, 12, 'Bali', '2021-06-17', 5, 'SUDAH BAYAR', 'buktibayar.jpg'),
(22, 6, 'Bali', '2021-06-23', 5, 'BELUM BAYAR', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'adhiardiansyah23@gmail.com', 'adhiardiansyah', 'Adhi Ardiansyah', '20210519_104543.jpg', '$2y$10$6sPDyZz1W6fJ/bBme9ZLouZ6KRfU.zDwW0v7JJytLwSC/WRXJPX0m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-15 12:09:45', '2021-05-15 12:09:45', NULL),
(2, 'arricohandyanto@gmail.com', 'arrico', NULL, 'default.svg', '$2y$10$vyDVjWNKyIlxa3lO1ZKgd.uSFAI2j7Pm/XV4pQveEcnfU5TdsI3yC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-16 02:54:06', '2021-05-16 02:54:06', NULL),
(3, 'bagusdimas@gmail.com', 'bagusdimas', NULL, 'default.svg', '$2y$10$pYOhzaOHVSQ5ZO4qgp4Aru6e1xB1p9g7ucDNEqf.2NYEy.l07V.4.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-16 02:58:14', '2021-05-16 02:58:14', NULL),
(4, 'baqiyatus@gmail.com', 'baqiyatus', NULL, 'default.svg', '$2y$10$3CFGohtapCbuX12.J2rJlO9CI3PBBesN7n7nLnKyFaDxywOHWlXFK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-17 00:18:32', '2021-05-17 00:18:32', NULL),
(6, 'adamarthur@gmail.com', 'adamarthur', 'Adam Arthur Faizal', 'default.svg', '$2y$10$0vqwllW4J5y6Q4h6OY0W8uGbtqW7AkEBrLLQ8Pa46payzoiNWNJr.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-27 04:01:36', '2021-05-27 04:01:36', NULL),
(12, 'adhanirp@gmail.com', 'adhanirp', NULL, 'default.svg', '$2y$10$1yZzq9LOiNOQI5CpTHErrub4fiHwxy.DwmSDj.sIXDxOfMRePJUne', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-05 00:12:59', '2021-06-05 00:12:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_paket` int(11) NOT NULL,
  `paket` varchar(50) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `destinasi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fasilitas` varchar(255) CHARACTER SET utf8 NOT NULL,
  `harga` int(15) NOT NULL,
  `sampul` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_paket`, `paket`, `slug`, `destinasi`, `fasilitas`, `harga`, `sampul`) VALUES
(1, 'Bali', 'bali', 'Pantai Pandawa, Tanah Lot, Pantai Kuta', 'Transportasi, Hotel, Konsumsi', 1000000, 'bali.jpg'),
(2, 'Yogyakarta', 'yogyakarta', 'Pantai Parangtritis, Malioboro', 'Transportasi, Konsumsi', 500000, 'yogyakarta.jpg'),
(5, 'Jawa Timur Park', 'jawa-timur-park', 'Jawa Timur Park 1, Jawa Timur Park 2, Jawa Timur Park 3', 'Transportasi, Hotel, Konsumsi', 2000000, 'jatimpark.jpg'),
(16, 'Solo', 'solo', 'Taman Satwa Taru Jurug, Pasar Gede, Benteng Vastenburg', 'Transportasi, Konsumsi', 350000, 'solo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `paket` (`paket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_paket`) USING BTREE,
  ADD KEY `paket` (`paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`paket`) REFERENCES `wisata` (`paket`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
