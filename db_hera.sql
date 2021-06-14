-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 03:59 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hera`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_management_agent`
--

CREATE TABLE `tb_management_agent` (
  `id_management_agent` int(11) NOT NULL,
  `id_agent_management_agent` int(11) NOT NULL,
  `id_properties_management_agent` int(11) NOT NULL,
  `status_management_agent` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_management_agent`
--

INSERT INTO `tb_management_agent` (`id_management_agent`, `id_agent_management_agent`, `id_properties_management_agent`, `status_management_agent`, `created_at`, `updated_at`) VALUES
(15, 19, 121, 1, '2021-06-09 22:39:26', '2021-06-09 22:39:26'),
(16, 19, 107, 1, '2021-06-09 23:04:20', '2021-06-09 23:04:20'),
(17, 19, 109, 1, '2021-06-09 23:04:24', '2021-06-09 23:04:24'),
(18, 19, 110, 1, '2021-06-09 23:04:27', '2021-06-09 23:04:27'),
(19, 19, 111, 1, '2021-06-09 23:04:30', '2021-06-09 23:04:30'),
(20, 19, 112, 1, '2021-06-09 23:04:32', '2021-06-09 23:04:32'),
(21, 19, 113, 1, '2021-06-09 23:04:35', '2021-06-09 23:04:35'),
(22, 19, 114, 1, '2021-06-09 23:04:37', '2021-06-09 23:04:37'),
(23, 19, 115, 1, '2021-06-09 23:04:40', '2021-06-09 23:04:40'),
(24, 19, 116, 1, '2021-06-09 23:04:42', '2021-06-09 23:04:42'),
(25, 19, 117, 1, '2021-06-09 23:04:45', '2021-06-09 23:04:45'),
(26, 19, 118, 1, '2021-06-09 23:04:48', '2021-06-09 23:04:48'),
(27, 19, 119, 1, '2021-06-09 23:04:51', '2021-06-09 23:04:51'),
(28, 19, 120, 1, '2021-06-09 23:04:54', '2021-06-09 23:04:54'),
(29, 19, 122, 1, '2021-06-09 23:04:57', '2021-06-09 23:04:57'),
(30, 19, 124, 1, '2021-06-09 23:16:07', '2021-06-09 23:16:07'),
(31, 19, 127, 1, '2021-06-09 23:16:11', '2021-06-09 23:16:11'),
(32, 19, 126, 1, '2021-06-09 23:16:15', '2021-06-09 23:16:15'),
(33, 19, 125, 2, '2021-06-09 23:16:20', '2021-06-09 23:18:12'),
(34, 19, 132, 1, '2021-06-10 00:18:47', '2021-06-10 00:18:47'),
(35, 19, 133, 1, '2021-06-10 00:18:50', '2021-06-10 00:18:50'),
(36, 19, 134, 1, '2021-06-10 00:18:53', '2021-06-10 00:18:53'),
(37, 19, 135, 1, '2021-06-10 00:18:56', '2021-06-10 00:18:56'),
(38, 19, 136, 1, '2021-06-10 00:18:59', '2021-06-10 00:18:59'),
(39, 19, 137, 1, '2021-06-10 00:19:01', '2021-06-10 00:19:01'),
(40, 19, 138, 1, '2021-06-10 00:19:04', '2021-06-10 00:19:04'),
(41, 19, 139, 1, '2021-06-10 00:19:08', '2021-06-10 00:19:08'),
(42, 19, 140, 1, '2021-06-10 00:19:11', '2021-06-10 00:19:11'),
(43, 19, 141, 1, '2021-06-10 00:19:14', '2021-06-10 00:19:14'),
(44, 19, 142, 1, '2021-06-10 00:19:17', '2021-06-10 00:19:17'),
(45, 19, 143, 1, '2021-06-10 00:19:20', '2021-06-10 00:19:20'),
(46, 19, 144, 1, '2021-06-10 14:23:43', '2021-06-10 14:23:43'),
(47, 19, 145, 1, '2021-06-10 14:23:47', '2021-06-10 14:23:47'),
(48, 19, 146, 1, '2021-06-10 14:23:51', '2021-06-10 14:23:51'),
(49, 19, 147, 1, '2021-06-10 14:23:55', '2021-06-10 14:23:55'),
(50, 19, 148, 1, '2021-06-10 14:23:58', '2021-06-10 14:23:58'),
(51, 19, 149, 1, '2021-06-10 14:24:02', '2021-06-10 14:24:02'),
(52, 19, 150, 1, '2021-06-10 14:24:06', '2021-06-10 14:24:06'),
(53, 19, 151, 1, '2021-06-10 14:24:11', '2021-06-10 14:24:11'),
(54, 19, 152, 1, '2021-06-10 14:24:14', '2021-06-10 14:24:14'),
(55, 19, 153, 1, '2021-06-10 14:24:17', '2021-06-10 14:24:17'),
(56, 19, 154, 1, '2021-06-10 14:24:20', '2021-06-10 14:24:20'),
(57, 19, 156, 1, '2021-06-10 14:24:25', '2021-06-10 14:24:25'),
(58, 19, 157, 1, '2021-06-10 14:29:28', '2021-06-10 14:29:28'),
(59, 19, 158, 1, '2021-06-10 15:30:46', '2021-06-10 15:30:46'),
(60, 19, 159, 1, '2021-06-10 15:30:51', '2021-06-10 15:30:51'),
(61, 19, 160, 1, '2021-06-10 15:30:56', '2021-06-10 15:30:56'),
(62, 19, 161, 1, '2021-06-10 15:31:01', '2021-06-10 15:31:01'),
(63, 19, 162, 1, '2021-06-10 15:31:06', '2021-06-10 15:31:06'),
(64, 19, 163, 1, '2021-06-10 15:31:12', '2021-06-10 15:31:12'),
(65, 19, 165, 1, '2021-06-10 15:31:16', '2021-06-10 15:31:16'),
(66, 19, 166, 1, '2021-06-10 15:31:21', '2021-06-10 15:31:21'),
(67, 19, 167, 1, '2021-06-10 15:31:25', '2021-06-10 15:31:25'),
(68, 19, 168, 1, '2021-06-10 15:31:30', '2021-06-10 15:31:30'),
(69, 19, 169, 1, '2021-06-10 15:31:37', '2021-06-10 15:31:37'),
(70, 19, 170, 1, '2021-06-10 15:31:42', '2021-06-10 15:31:42'),
(71, 19, 171, 1, '2021-06-10 15:31:48', '2021-06-10 15:31:48'),
(72, 19, 172, 1, '2021-06-10 15:31:53', '2021-06-10 15:31:53'),
(73, 19, 173, 1, '2021-06-10 15:31:58', '2021-06-10 15:31:58'),
(74, 19, 174, 1, '2021-06-10 16:02:04', '2021-06-10 16:02:04'),
(75, 19, 175, 1, '2021-06-10 16:02:09', '2021-06-10 16:02:09'),
(76, 19, 176, 1, '2021-06-10 16:02:15', '2021-06-10 16:02:15'),
(77, 19, 177, 1, '2021-06-10 16:02:19', '2021-06-10 16:02:19'),
(78, 19, 178, 1, '2021-06-10 16:02:23', '2021-06-10 16:02:23'),
(79, 19, 179, 1, '2021-06-10 16:02:26', '2021-06-10 16:02:26'),
(80, 19, 180, 1, '2021-06-10 16:02:30', '2021-06-10 16:02:30'),
(81, 19, 181, 1, '2021-06-10 16:02:35', '2021-06-10 16:02:35'),
(82, 19, 182, 1, '2021-06-10 16:02:41', '2021-06-10 16:02:41'),
(83, 19, 183, 1, '2021-06-10 16:02:44', '2021-06-10 16:02:44'),
(84, 19, 184, 1, '2021-06-10 16:02:48', '2021-06-10 16:02:48'),
(85, 19, 185, 1, '2021-06-10 16:02:52', '2021-06-10 16:02:52'),
(86, 19, 186, 1, '2021-06-10 16:02:57', '2021-06-10 16:02:57'),
(87, 19, 187, 1, '2021-06-10 17:38:41', '2021-06-10 17:38:41'),
(88, 19, 188, 1, '2021-06-10 17:38:49', '2021-06-10 17:38:49'),
(89, 19, 189, 1, '2021-06-10 17:38:54', '2021-06-10 17:38:54'),
(90, 19, 190, 1, '2021-06-10 17:38:58', '2021-06-10 17:38:58'),
(91, 19, 192, 1, '2021-06-10 17:39:03', '2021-06-10 17:39:03'),
(92, 19, 193, 1, '2021-06-10 17:39:06', '2021-06-10 17:39:06'),
(93, 19, 194, 1, '2021-06-10 17:39:10', '2021-06-10 17:39:10'),
(94, 19, 195, 1, '2021-06-10 17:39:14', '2021-06-10 17:39:14'),
(95, 19, 196, 1, '2021-06-10 17:39:18', '2021-06-10 17:39:18'),
(96, 19, 197, 1, '2021-06-10 17:39:21', '2021-06-10 17:39:21'),
(97, 19, 198, 1, '2021-06-10 17:39:26', '2021-06-10 17:39:26'),
(98, 19, 199, 1, '2021-06-10 17:39:29', '2021-06-10 17:39:29'),
(99, 19, 200, 1, '2021-06-10 17:39:33', '2021-06-10 17:39:33'),
(100, 19, 201, 1, '2021-06-10 18:11:58', '2021-06-10 18:11:58'),
(101, 19, 202, 1, '2021-06-10 18:12:05', '2021-06-10 18:12:05'),
(102, 19, 203, 1, '2021-06-10 18:12:09', '2021-06-10 18:12:09'),
(103, 19, 204, 1, '2021-06-10 18:12:16', '2021-06-10 18:12:16'),
(104, 19, 205, 1, '2021-06-10 18:12:20', '2021-06-10 18:12:20'),
(105, 19, 206, 1, '2021-06-10 18:12:32', '2021-06-10 18:12:32'),
(106, 19, 208, 1, '2021-06-10 18:12:37', '2021-06-10 18:12:37'),
(107, 19, 209, 1, '2021-06-10 18:12:41', '2021-06-10 18:12:41'),
(108, 19, 210, 1, '2021-06-10 18:12:46', '2021-06-10 18:12:46'),
(109, 19, 211, 1, '2021-06-10 18:12:53', '2021-06-10 18:12:53'),
(110, 19, 212, 1, '2021-06-10 18:12:59', '2021-06-10 18:12:59'),
(111, 19, 213, 1, '2021-06-10 18:13:05', '2021-06-10 18:13:05'),
(112, 19, 214, 1, '2021-06-10 18:13:09', '2021-06-10 18:13:09'),
(113, 19, 215, 1, '2021-06-10 18:49:43', '2021-06-10 18:49:43'),
(114, 19, 216, 1, '2021-06-10 18:49:48', '2021-06-10 18:49:48'),
(115, 19, 217, 1, '2021-06-10 18:49:51', '2021-06-10 18:49:51'),
(116, 19, 218, 1, '2021-06-10 18:49:55', '2021-06-10 18:49:55'),
(117, 19, 219, 1, '2021-06-10 18:49:58', '2021-06-10 18:49:58'),
(118, 19, 220, 1, '2021-06-10 18:50:03', '2021-06-10 18:50:03'),
(119, 19, 221, 1, '2021-06-10 18:50:07', '2021-06-10 18:50:07'),
(120, 19, 222, 1, '2021-06-10 18:50:10', '2021-06-10 18:50:10'),
(121, 19, 223, 1, '2021-06-10 18:50:14', '2021-06-10 18:50:14'),
(122, 19, 224, 1, '2021-06-10 18:50:18', '2021-06-10 18:50:18'),
(123, 19, 225, 1, '2021-06-10 18:50:21', '2021-06-10 18:50:21'),
(124, 19, 226, 1, '2021-06-10 18:50:26', '2021-06-10 18:50:26'),
(125, 19, 227, 1, '2021-06-10 18:50:30', '2021-06-10 18:50:30'),
(126, 19, 331, 2, '2021-06-14 18:13:33', '2021-06-14 18:15:07'),
(127, 19, 332, 1, '2021-06-14 18:23:34', '2021-06-14 18:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_management_customer`
--

CREATE TABLE `tb_management_customer` (
  `id_management_customer` int(11) NOT NULL,
  `id_management_agent_management_customer` int(11) NOT NULL,
  `id_customer_management_customer` int(11) NOT NULL,
  `status_management_customer` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_management_customer`
--

INSERT INTO `tb_management_customer` (`id_management_customer`, `id_management_agent_management_customer`, `id_customer_management_customer`, `status_management_customer`, `created_at`, `updated_at`) VALUES
(9, 11, 20, 1, '2021-06-07 23:14:49', '2021-06-07 23:14:49'),
(10, 10, 20, 1, '2021-06-07 23:14:54', '2021-06-07 23:14:54'),
(12, 14, 20, 1, '2021-06-08 22:01:37', '2021-06-08 22:01:37'),
(13, 33, 20, 1, '2021-06-09 23:18:13', '2021-06-09 23:18:13'),
(14, 126, 20, 1, '2021-06-14 18:15:07', '2021-06-14 18:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_properties`
--

CREATE TABLE `tb_properties` (
  `id_properties` bigint(20) UNSIGNED NOT NULL,
  `name_properties` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toilet` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pool` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `production_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_properties`
--

INSERT INTO `tb_properties` (`id_properties`, `name_properties`, `type`, `bedroom`, `toilet`, `pool`, `location`, `description`, `document`, `production_year`, `owner`, `img`, `price`, `status`, `created_at`, `updated_at`) VALUES
(107, 'Hera min', 'Minimalis Class (20 x 10)', '2', '1', '1', 'seoul', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '110', '2', '2021-06-09 14:15:14', '2021-06-09 15:04:20'),
(108, 'Hera classic', 'Classic Class (40 x 10)', '2', '1', '1', 'seoul', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', NULL, '1', '2021-06-09 14:15:53', '2021-06-09 15:12:19'),
(109, 'Hera min', 'Minimalis Class (20 x 10)', '2', '1', '1', 'incheon', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '110', '2', '2021-06-09 14:16:55', '2021-06-09 15:04:24'),
(110, 'Hera min', 'Minimalis Class (20 x 10)', '2', '1', '1', 'yangpyeong', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '110', '2', '2021-06-09 14:17:34', '2021-06-09 15:04:27'),
(111, 'Hera classic', 'Classic Class (40 x 10)', '2', '1', '1', 'busan', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '130', '2', '2021-06-09 14:18:08', '2021-06-09 15:04:29'),
(112, 'Hera classic', 'Classic Class (40 x 10)', '2', '1', '1', 'jeju', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '130', '2', '2021-06-09 14:19:01', '2021-06-09 15:04:32'),
(113, 'Hera land', 'Medium Class (50 x 20)', '2', '2', '1', 'gwangju', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'desain-rumah7-64400aac08.jpg', '130', '2', '2021-06-09 14:20:03', '2021-06-09 15:04:35'),
(114, 'Hera land', 'Medium Class (50 x 20)', '2', '2', '1', 'yongsan', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'desain-rumah7-64400aac08.jpg', '150', '2', '2021-06-09 14:20:34', '2021-06-09 15:04:37'),
(115, 'Mega Hera', 'High Class (70 x 30)', '3', '2', '1', 'inje', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '150', '2', '2021-06-09 14:21:49', '2021-06-09 15:04:40'),
(116, 'Mega Hera', 'High Class (70 x 30)', '3', '2', '1', 'hongcheon', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '210', '2', '2021-06-09 14:22:21', '2021-06-09 15:04:42'),
(117, 'New Hera', 'Premium Class (100 x 60)', '5', '3', '2', 'pyeongchang', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '210', '2', '2021-06-09 14:23:48', '2021-06-09 15:04:45'),
(118, 'New Hera', 'Premium Class (100 x 60)', '5', '3', '2', 'taebaek', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-09 14:24:18', '2021-06-09 15:04:48'),
(119, 'Rich Hera', 'Luxury Class (125 x 100)', '5', '4', '3', 'donghae', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-09 14:25:27', '2021-06-09 15:04:51'),
(120, 'Rich Hera', 'Luxury Class (125 x 100)', '5', '4', '3', 'pohang', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-09 14:26:04', '2021-06-09 15:04:54'),
(121, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '6', '6', '4', 'gyeongju', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.\r\n\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'mewah.jpg', '320', '2', '2021-06-09 14:27:39', '2021-06-09 14:49:34'),
(122, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '6', '6', '4', 'hamyang', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.\r\n\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'mewah.jpg', '320', '2', '2021-06-09 14:28:09', '2021-06-09 15:04:57'),
(123, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'jeju', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', NULL, '-1', '2021-06-09 15:07:23', '2021-06-09 15:07:39'),
(124, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'busan', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'mewah.jpg', '210', '2', '2021-06-09 15:08:40', '2021-06-09 15:16:06'),
(125, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'hamyang', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '210', '3', '2021-06-09 15:10:56', '2021-06-09 15:18:12'),
(126, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'gyeongju', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '210', '2', '2021-06-09 15:11:21', '2021-06-09 15:16:15'),
(127, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'pohang', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '210', '2', '2021-06-09 15:12:11', '2021-06-09 15:16:11'),
(128, 'Hera classic', 'Minimalis Class (20 x 10)', '2', '1', '1', 'seoul', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', NULL, '1', '2021-06-09 15:21:12', '2021-06-09 15:22:27'),
(129, 'Mega Hera', 'Minimalis Class (20 x 10)', '2', '1', '1', 'seoul', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', NULL, '1', '2021-06-09 15:21:42', '2021-06-09 15:22:29'),
(130, 'Rich Hera', 'Minimalis Class (20 x 10)', '2', '1', '1', 'seoul', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', NULL, '1', '2021-06-09 15:22:14', '2021-06-09 15:22:30'),
(131, 'Rich Hera', 'Super Premium Suite (150 x 170)', '6', '6', '4', 'incheon', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'mewah.jpg', NULL, '1', '2021-06-09 15:27:33', '2021-06-10 06:10:19'),
(132, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'busan', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:06:34', '2021-06-09 16:18:47'),
(133, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'jeju', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:06:56', '2021-06-09 16:18:50'),
(134, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'gwangju', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:07:20', '2021-06-09 16:18:53'),
(135, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'yongsan', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:07:46', '2021-06-09 16:18:56'),
(136, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'inje', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:08:20', '2021-06-09 16:18:58'),
(137, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'hongcheon', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:08:53', '2021-06-09 16:19:01'),
(138, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'pyeongchang', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:09:13', '2021-06-09 16:19:04'),
(139, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'taebaek', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:09:45', '2021-06-09 16:19:08'),
(140, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'donghae', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:10:08', '2021-06-09 16:19:11'),
(141, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'pohang', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:10:36', '2021-06-09 16:19:14'),
(142, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'gyeongju', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:10:56', '2021-06-09 16:19:17'),
(143, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'hamyang', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'minimalis.jpg', '250', '2', '2021-06-09 16:11:16', '2021-06-09 16:19:20'),
(144, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'seoul', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:03:01', '2021-06-10 06:23:42'),
(145, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'incheon', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:03:26', '2021-06-10 06:23:47'),
(146, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'yangpyeong', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:04:24', '2021-06-10 06:23:51'),
(147, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'gwangju', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:05:21', '2021-06-10 06:23:55'),
(148, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'yongsan', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:05:53', '2021-06-10 06:23:58'),
(149, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'inje', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:06:28', '2021-06-10 06:24:02'),
(150, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'hongcheon', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:07:07', '2021-06-10 06:24:06'),
(151, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'taebaek', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:07:38', '2021-06-10 06:24:10'),
(152, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'donghae', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:08:30', '2021-06-10 06:24:14'),
(153, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'pohang', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:09:39', '2021-06-10 06:24:17'),
(154, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'hamyang', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:10:15', '2021-06-10 06:24:20'),
(155, 'New Hera', 'High Class (70 x 30)', '3', '3', '1', 'seoul', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'desain-rumah7-64400aac08.jpg', NULL, '0', '2021-06-10 06:11:38', '2021-06-10 06:11:38'),
(156, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'pohang', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:16:45', '2021-06-10 06:24:25'),
(157, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'pyeongchang', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'classic.jpg', '250', '2', '2021-06-10 06:27:16', '2021-06-10 06:29:28'),
(158, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'seoul', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'desain-rumah7-64400aac08.jpg', '250', '2', '2021-06-10 06:30:29', '2021-06-10 07:30:46'),
(159, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'incheon', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'desain-rumah7-64400aac08.jpg', '250', '2', '2021-06-10 06:31:36', '2021-06-10 07:30:51'),
(160, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'yangpyeong', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'desain-rumah7-64400aac08.jpg', '250', '2', '2021-06-10 06:32:02', '2021-06-10 07:30:56'),
(161, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'busan', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'desain-rumah7-64400aac08.jpg', '250', '2', '2021-06-10 06:32:44', '2021-06-10 07:31:01'),
(162, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'jeju', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'desain-rumah7-64400aac08.jpg', '250', '2', '2021-06-10 06:34:43', '2021-06-10 07:31:06'),
(163, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'gwangju', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', 'desain-rumah7-64400aac08.jpg', '250', '2', '2021-06-10 06:39:55', '2021-06-10 07:31:11'),
(164, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'gwangju', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'Surat tanah', '2017', 'I Gede Bayu Widiastika', '1623307582.jpg', NULL, '-1', '2021-06-10 06:46:22', '2021-06-10 07:20:00'),
(165, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'yongsan', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623309256.jpg', '250', '2', '2021-06-10 07:14:15', '2021-06-10 07:31:16'),
(166, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'inje', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623309368.jpg', '250', '2', '2021-06-10 07:16:07', '2021-06-10 07:31:20'),
(167, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'hongcheon', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623309395.jpg', '250', '2', '2021-06-10 07:16:34', '2021-06-10 07:31:25'),
(168, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'pyeongchang', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623309435.jpg', '250', '2', '2021-06-10 07:17:14', '2021-06-10 07:31:30'),
(169, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'taebaek', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623309465.jpg', '250', '2', '2021-06-10 07:17:45', '2021-06-10 07:31:37'),
(170, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'donghae', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623309490.jpg', '250', '2', '2021-06-10 07:18:10', '2021-06-10 07:31:42'),
(171, 'New Hera', 'Medium Class (50 x 20)', '2', '2', '1', 'pohang', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623309518.jpg', '250', '2', '2021-06-10 07:18:37', '2021-06-10 07:31:48'),
(172, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'gyeongju', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623309555.jpg', '250', '2', '2021-06-10 07:19:15', '2021-06-10 07:31:52'),
(173, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'hamyang', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623309579.jpg', '250', '2', '2021-06-10 07:19:39', '2021-06-10 07:31:58'),
(174, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'seoul', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623310611.jpg', '250', '2', '2021-06-10 07:36:50', '2021-06-10 08:02:04'),
(175, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'incheon', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623310654.jpg', '250', '2', '2021-06-10 07:37:34', '2021-06-10 08:02:09'),
(176, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'yangpyeong', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623310723.jpg', '250', '2', '2021-06-10 07:38:43', '2021-06-10 08:02:15'),
(177, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'busan', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623310770.jpg', '250', '2', '2021-06-10 07:39:29', '2021-06-10 08:02:19'),
(178, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'jeju', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623310802.jpg', '250', '2', '2021-06-10 07:40:02', '2021-06-10 08:02:23'),
(179, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'gwangju', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623310900.jpg', '250', '2', '2021-06-10 07:41:40', '2021-06-10 08:02:26'),
(180, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'yongsan', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623311181.jpg', '250', '2', '2021-06-10 07:46:20', '2021-06-10 08:02:30'),
(181, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'pyeongchang', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623311229.jpg', '250', '2', '2021-06-10 07:47:09', '2021-06-10 08:02:35'),
(182, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'taebaek', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623311266.jpg', '250', '2', '2021-06-10 07:47:46', '2021-06-10 08:02:40'),
(183, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'donghae', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623311299.jpg', '250', '2', '2021-06-10 07:48:19', '2021-06-10 08:02:44'),
(184, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'pohang', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623311356.jpg', '250', '2', '2021-06-10 07:49:16', '2021-06-10 08:02:48'),
(185, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'gyeongju', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623311393.jpg', '250', '2', '2021-06-10 07:49:53', '2021-06-10 08:02:52'),
(186, 'Mega Hera', 'High Class (70 x 30)', '3', '3', '1', 'hamyang', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623311419.jpg', '250', '2', '2021-06-10 07:50:19', '2021-06-10 08:02:56'),
(187, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'seoul', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623314743.jpg', '270', '2', '2021-06-10 08:45:42', '2021-06-10 09:38:41'),
(188, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'incheon', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623314776.jpg', '270', '2', '2021-06-10 08:46:16', '2021-06-10 09:38:49'),
(189, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'yangpyeong', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623314805.jpg', '270', '2', '2021-06-10 08:46:45', '2021-06-10 09:38:53'),
(190, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'busan', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623314856.jpg', '270', '2', '2021-06-10 08:47:35', '2021-06-10 09:38:58'),
(191, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'jeju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623314895.jpg', NULL, '1', '2021-06-10 08:48:15', '2021-06-10 09:26:29'),
(192, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'jeju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623314925.jpg', '270', '2', '2021-06-10 08:48:44', '2021-06-10 09:39:03'),
(193, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'gwangju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623314992.jpg', '270', '2', '2021-06-10 08:49:52', '2021-06-10 09:39:06'),
(194, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'yongsan', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623315239.jpg', '270', '2', '2021-06-10 08:53:58', '2021-06-10 09:39:10'),
(195, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'inje', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623316619.jpg', '270', '2', '2021-06-10 09:16:59', '2021-06-10 09:39:14'),
(196, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'hongcheon', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623316695.jpg', '270', '2', '2021-06-10 09:18:14', '2021-06-10 09:39:17'),
(197, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'donghae', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623316777.jpg', '270', '2', '2021-06-10 09:19:36', '2021-06-10 09:39:21'),
(198, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'pohang', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623316821.jpg', '270', '2', '2021-06-10 09:20:20', '2021-06-10 09:39:25'),
(199, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'gyeongju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat rumah', '2017', 'I Gede Bayu Widiastika', '1623316857.jpg', '270', '2', '2021-06-10 09:20:57', '2021-06-10 09:39:29'),
(200, 'Hera land', 'Premium Class (100 x 60)', '4', '4', '2', 'hamyang', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623316983.jpg', '270', '2', '2021-06-10 09:23:03', '2021-06-10 09:39:33'),
(201, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'seoul', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318117.jpg', '320', '2', '2021-06-10 09:41:56', '2021-06-10 10:11:58'),
(202, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'incheon', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318142.jpg', '320', '2', '2021-06-10 09:42:22', '2021-06-10 10:12:05'),
(203, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'yangpyeong', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318167.jpg', '320', '2', '2021-06-10 09:42:47', '2021-06-10 10:12:09'),
(204, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'busan', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318206.jpg', '320', '2', '2021-06-10 09:43:26', '2021-06-10 10:12:16'),
(205, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'jeju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318233.jpg', '320', '2', '2021-06-10 09:43:53', '2021-06-10 10:12:20'),
(206, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'gwangju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318259.jpg', '320', '2', '2021-06-10 09:44:19', '2021-06-10 10:12:32'),
(207, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'gwangju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318281.jpg', NULL, '1', '2021-06-10 09:44:40', '2021-06-10 09:52:26'),
(208, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'yongsan', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318432.jpg', '320', '2', '2021-06-10 09:47:11', '2021-06-10 10:12:37'),
(209, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'inje', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanahh', '2017', 'I Gede Bayu Widiastika', '1623318456.jpg', '320', '2', '2021-06-10 09:47:35', '2021-06-10 10:12:41'),
(210, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'hongcheon', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318514.jpg', '320', '2', '2021-06-10 09:48:33', '2021-06-10 10:12:46'),
(211, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'pyeongchang', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318547.jpg', '320', '2', '2021-06-10 09:49:06', '2021-06-10 10:12:53'),
(212, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'taebaek', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318573.jpg', '320', '2', '2021-06-10 09:49:32', '2021-06-10 10:12:59'),
(213, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'gyeongju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318611.jpg', '320', '2', '2021-06-10 09:50:11', '2021-06-10 10:13:05'),
(214, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '4', '4', 'hamyang', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623318643.jpg', '320', '2', '2021-06-10 09:50:43', '2021-06-10 10:13:09'),
(215, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'seoul', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623320709.jpg', '350', '2', '2021-06-10 10:25:08', '2021-06-10 10:49:43'),
(216, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'incheon', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623320775.jpg', '350', '2', '2021-06-10 10:26:14', '2021-06-10 10:49:47'),
(217, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'yangpyeong', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623320811.jpg', '350', '2', '2021-06-10 10:26:51', '2021-06-10 10:49:51'),
(218, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'busan', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623320838.jpg', '350', '2', '2021-06-10 10:27:18', '2021-06-10 10:49:55'),
(219, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'jeju', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623320895.jpg', '350', '2', '2021-06-10 10:28:15', '2021-06-10 10:49:58'),
(220, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'gwangju', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623321343.jpg', '350', '2', '2021-06-10 10:35:43', '2021-06-10 10:50:03'),
(221, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'yongsan', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623321439.jpg', '350', '2', '2021-06-10 10:37:19', '2021-06-10 10:50:07'),
(222, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'inje', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623321500.jpg', '350', '2', '2021-06-10 10:38:19', '2021-06-10 10:50:10'),
(223, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'hongcheon', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623321529.jpg', '350', '2', '2021-06-10 10:38:48', '2021-06-10 10:50:14'),
(224, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'pyeongchang', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623321564.jpg', '350', '2', '2021-06-10 10:39:24', '2021-06-10 10:50:17'),
(225, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'taebaek', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623321593.jpg', '350', '2', '2021-06-10 10:39:52', '2021-06-10 10:50:21'),
(226, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'donghae', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623321627.jpg', '350', '2', '2021-06-10 10:40:26', '2021-06-10 10:50:26'),
(227, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '5', '5', '5', 'pohang', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623321716.jpg', '350', '2', '2021-06-10 10:41:56', '2021-06-10 10:50:30'),
(228, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'incheon', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576660.jpg', NULL, '1', '2021-06-13 09:31:00', '2021-06-13 09:36:49'),
(229, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'yangpyeong', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576686.jpg', NULL, '1', '2021-06-13 09:31:25', '2021-06-13 09:36:51'),
(230, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'busan', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576706.jpg', NULL, '1', '2021-06-13 09:31:45', '2021-06-13 09:36:52'),
(231, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'jeju', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576729.jpg', NULL, '1', '2021-06-13 09:32:09', '2021-06-13 09:36:54'),
(232, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'gwangju', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576751.jpg', NULL, '1', '2021-06-13 09:32:31', '2021-06-13 09:36:55'),
(233, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'yongsan', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576775.jpg', NULL, '1', '2021-06-13 09:32:54', '2021-06-13 09:36:56'),
(234, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'inje', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576802.jpg', NULL, '1', '2021-06-13 09:33:22', '2021-06-13 09:36:58'),
(235, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'hongcheon', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576824.jpg', NULL, '1', '2021-06-13 09:33:44', '2021-06-13 09:36:59'),
(236, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'pyeongchang', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576844.jpg', NULL, '1', '2021-06-13 09:34:03', '2021-06-13 09:37:00'),
(237, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'taebaek', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576862.jpg', NULL, '1', '2021-06-13 09:34:22', '2021-06-13 09:37:02'),
(238, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'donghae', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576881.jpg', NULL, '1', '2021-06-13 09:34:40', '2021-06-13 09:37:04'),
(239, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'pohang', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623576942.jpg', NULL, '1', '2021-06-13 09:35:42', '2021-06-13 09:37:05'),
(242, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'gyeongju', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577363.jpg', NULL, '1', '2021-06-13 09:42:43', '2021-06-13 09:43:12'),
(243, 'Hera min', 'Minimalis Class (20 x 10)', '2', '2', '1', 'hamyang', 'Rumah minimalis dengan tempat yang strategis. Cocok untuk anda yang ingin space kecil tapi nyaman.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577384.jpg', NULL, '1', '2021-06-13 09:43:03', '2021-06-13 09:43:14'),
(244, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'incheon', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577560.jpg', NULL, '1', '2021-06-13 09:45:59', '2021-06-13 09:51:03'),
(245, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'yangpyeong', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577585.jpg', NULL, '1', '2021-06-13 09:46:24', '2021-06-13 09:51:06'),
(246, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'busan', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577603.jpg', NULL, '1', '2021-06-13 09:46:43', '2021-06-13 09:51:07'),
(247, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'jeju', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577630.jpg', NULL, '1', '2021-06-13 09:47:10', '2021-06-13 09:51:08'),
(248, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'gwangju', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577646.jpg', NULL, '1', '2021-06-13 09:47:26', '2021-06-13 09:51:11'),
(249, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'yongsan', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577666.jpg', NULL, '1', '2021-06-13 09:47:46', '2021-06-13 09:51:13'),
(250, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'inje', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577691.jpg', NULL, '1', '2021-06-13 09:48:11', '2021-06-13 09:51:15'),
(251, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'hongcheon', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577709.jpg', NULL, '1', '2021-06-13 09:48:29', '2021-06-13 09:51:16'),
(252, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'pyeongchang', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577729.jpg', NULL, '1', '2021-06-13 09:48:49', '2021-06-13 09:51:19'),
(253, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'taebaek', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577761.jpg', NULL, '1', '2021-06-13 09:49:20', '2021-06-13 09:51:21'),
(254, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'donghae', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577782.jpg', NULL, '1', '2021-06-13 09:49:41', '2021-06-13 09:51:23'),
(255, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'pohang', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577805.jpg', NULL, '1', '2021-06-13 09:50:05', '2021-06-13 09:51:24'),
(256, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'gyeongju', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577832.jpg', NULL, '1', '2021-06-13 09:50:32', '2021-06-13 09:51:25'),
(257, 'Hera classic', 'Classic Class (40 x 10)', '2', '2', '1', 'hamyang', 'Rumah klasik dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain simple.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623577852.jpg', NULL, '1', '2021-06-13 09:50:52', '2021-06-13 09:51:28'),
(258, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'seoul', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578034.jpg', NULL, '1', '2021-06-13 09:53:53', '2021-06-13 09:59:59'),
(259, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'incheon', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578056.jpg', NULL, '1', '2021-06-13 09:54:16', '2021-06-13 10:00:00'),
(260, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'yangpyeong', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578076.jpg', NULL, '1', '2021-06-13 09:54:36', '2021-06-13 10:00:02'),
(261, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'busan', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578093.jpg', NULL, '1', '2021-06-13 09:54:53', '2021-06-13 10:00:03'),
(262, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'jeju', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578115.jpg', NULL, '1', '2021-06-13 09:55:15', '2021-06-13 10:00:04'),
(263, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'gwangju', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578137.jpg', NULL, '1', '2021-06-13 09:55:36', '2021-06-13 10:00:05'),
(264, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'yongsan', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578164.jpg', NULL, '1', '2021-06-13 09:56:04', '2021-06-13 10:00:09'),
(265, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'inje', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578183.jpg', NULL, '1', '2021-06-13 09:56:22', '2021-06-13 10:00:13'),
(266, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'hongcheon', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578201.jpg', NULL, '1', '2021-06-13 09:56:40', '2021-06-13 10:00:15'),
(267, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'pyeongchang', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578225.jpg', NULL, '1', '2021-06-13 09:57:04', '2021-06-13 10:00:17'),
(268, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'taebaek', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578253.jpg', NULL, '1', '2021-06-13 09:57:32', '2021-06-13 10:00:18');
INSERT INTO `tb_properties` (`id_properties`, `name_properties`, `type`, `bedroom`, `toilet`, `pool`, `location`, `description`, `document`, `production_year`, `owner`, `img`, `price`, `status`, `created_at`, `updated_at`) VALUES
(269, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'donghae', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578280.jpg', NULL, '1', '2021-06-13 09:57:59', '2021-06-13 10:00:19'),
(270, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'pohang', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578302.jpg', NULL, '1', '2021-06-13 09:58:21', '2021-06-13 10:00:21'),
(271, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'gyeongju', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578333.jpg', NULL, '1', '2021-06-13 09:58:52', '2021-06-13 10:00:22'),
(272, 'New Hera', 'Medium Class (50 x 20)', '3', '2', '1', 'hamyang', 'Rumah tipe medium dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga kecil anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578354.jpg', NULL, '1', '2021-06-13 09:59:14', '2021-06-13 10:00:24'),
(273, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'seoul', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578640.jpg', NULL, '1', '2021-06-13 10:03:59', '2021-06-13 10:09:45'),
(274, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'incheon', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578663.jpg', NULL, '1', '2021-06-13 10:04:23', '2021-06-13 10:09:47'),
(275, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'yangpyeong', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578708.jpg', NULL, '1', '2021-06-13 10:05:07', '2021-06-13 10:09:48'),
(276, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'busan', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578729.jpg', NULL, '1', '2021-06-13 10:05:29', '2021-06-13 10:09:49'),
(277, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'jeju', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578752.jpg', NULL, '1', '2021-06-13 10:05:52', '2021-06-13 10:09:50'),
(278, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'gwangju', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578769.jpg', NULL, '1', '2021-06-13 10:06:09', '2021-06-13 10:09:51'),
(279, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'yongsan', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578788.jpg', NULL, '1', '2021-06-13 10:06:28', '2021-06-13 10:09:53'),
(280, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'inje', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578807.jpg', NULL, '1', '2021-06-13 10:06:47', '2021-06-13 10:09:54'),
(281, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'hongcheon', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578827.jpg', NULL, '1', '2021-06-13 10:07:06', '2021-06-13 10:09:58'),
(282, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'pyeongchang', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578846.jpg', NULL, '1', '2021-06-13 10:07:25', '2021-06-13 10:10:01'),
(283, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'taebaek', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578864.jpg', NULL, '1', '2021-06-13 10:07:44', '2021-06-13 10:10:02'),
(284, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'donghae', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578887.jpg', NULL, '1', '2021-06-13 10:08:07', '2021-06-13 10:10:04'),
(285, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'pohang', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578923.jpg', NULL, '1', '2021-06-13 10:08:42', '2021-06-13 10:10:06'),
(286, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'gyeongju', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578940.jpg', NULL, '1', '2021-06-13 10:08:59', '2021-06-13 10:10:07'),
(287, 'Hera land', 'High Class (70 x 30)', '3', '3', '1', 'hamyang', 'Rumah tipe besar dengan tempat yang strategis. Cocok untuk anda yang mencari hunian untuk keluarga besar anda.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623578961.jpg', NULL, '1', '2021-06-13 10:09:20', '2021-06-13 10:10:08'),
(288, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'seoul', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579152.jpg', NULL, '1', '2021-06-13 10:12:31', '2021-06-13 10:19:20'),
(289, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'incheon', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579186.jpg', NULL, '1', '2021-06-13 10:13:06', '2021-06-13 10:19:23'),
(290, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'yangpyeong', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579208.jpg', NULL, '1', '2021-06-13 10:13:27', '2021-06-13 10:19:24'),
(291, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'busan', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579248.jpg', NULL, '1', '2021-06-13 10:14:07', '2021-06-13 10:19:25'),
(292, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'gwangju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579266.jpg', NULL, '1', '2021-06-13 10:14:25', '2021-06-13 10:19:26'),
(293, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'yongsan', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579288.jpg', NULL, '1', '2021-06-13 10:14:48', '2021-06-13 10:19:28'),
(294, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'yongsan', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579309.jpg', NULL, '1', '2021-06-13 10:15:09', '2021-06-13 10:19:30'),
(295, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'inje', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579331.jpg', NULL, '1', '2021-06-13 10:15:30', '2021-06-13 10:19:32'),
(296, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'hongcheon', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579355.jpg', NULL, '1', '2021-06-13 10:15:55', '2021-06-13 10:19:33'),
(297, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'pyeongchang', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579382.jpg', NULL, '1', '2021-06-13 10:16:21', '2021-06-13 10:19:35'),
(298, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'taebaek', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579403.jpg', NULL, '1', '2021-06-13 10:16:42', '2021-06-13 10:19:36'),
(299, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'donghae', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579437.jpg', NULL, '1', '2021-06-13 10:17:17', '2021-06-13 10:19:37'),
(300, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'pohang', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579489.jpg', NULL, '1', '2021-06-13 10:18:09', '2021-06-13 10:19:39'),
(301, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'gyeongju', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579506.jpg', NULL, '1', '2021-06-13 10:18:26', '2021-06-13 10:19:40'),
(302, 'Mega Hera', 'Premium Class (100 x 60)', '3', '3', '2', 'hamyang', 'Rumah premium dengan tempat yang strategis. Cocok untuk anda yang ingin hunian yang elegant dengan harga yang standar.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579526.jpg', NULL, '1', '2021-06-13 10:18:46', '2021-06-13 10:19:42'),
(303, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'seoul', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579769.jpg', NULL, '1', '2021-06-13 10:22:49', '2021-06-13 10:35:05'),
(304, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'incheon', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579788.jpg', NULL, '1', '2021-06-13 10:23:08', '2021-06-13 10:35:07'),
(305, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'yangpyeong', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623579812.jpg', NULL, '1', '2021-06-13 10:23:32', '2021-06-13 10:35:08'),
(306, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'busan', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580229.jpg', NULL, '1', '2021-06-13 10:30:29', '2021-06-13 10:35:10'),
(307, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'jeju', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580261.jpg', NULL, '1', '2021-06-13 10:31:01', '2021-06-13 10:35:11'),
(308, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'yongsan', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580286.jpg', NULL, '1', '2021-06-13 10:31:26', '2021-06-13 10:35:13'),
(309, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'inje', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580304.jpg', NULL, '1', '2021-06-13 10:31:43', '2021-06-13 10:35:14'),
(310, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'hongcheon', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580338.jpg', NULL, '1', '2021-06-13 10:32:18', '2021-06-13 10:35:15'),
(311, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'pyeongchang', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580357.jpg', NULL, '1', '2021-06-13 10:32:36', '2021-06-13 10:35:18'),
(312, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'taebaek', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580384.jpg', NULL, '1', '2021-06-13 10:33:04', '2021-06-13 10:35:20'),
(313, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'donghae', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580405.jpg', NULL, '1', '2021-06-13 10:33:25', '2021-06-13 10:35:21'),
(314, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'pohang', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580435.jpg', NULL, '1', '2021-06-13 10:33:54', '2021-06-13 10:35:22'),
(315, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'gyeongju', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580455.jpg', NULL, '1', '2021-06-13 10:34:15', '2021-06-13 10:35:24'),
(316, 'Rich Hera', 'Luxury Class (125 x 100)', '4', '3', '2', 'hamyang', 'Rumah megah dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain yang mewah.\r\n', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580477.jpg', NULL, '1', '2021-06-13 10:34:36', '2021-06-13 10:35:25'),
(317, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'seoul', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580639.jpg', NULL, '1', '2021-06-13 10:37:18', '2021-06-13 10:42:09'),
(318, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'yangpyeong', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580656.jpg', NULL, '1', '2021-06-13 10:37:36', '2021-06-13 10:42:11'),
(319, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'busan', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580675.jpg', NULL, '1', '2021-06-13 10:37:55', '2021-06-13 10:42:13'),
(320, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'jeju', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580695.jpg', NULL, '1', '2021-06-13 10:38:15', '2021-06-13 10:42:14'),
(321, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'gwangju', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580718.jpg', NULL, '1', '2021-06-13 10:38:38', '2021-06-13 10:42:15'),
(322, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'yongsan', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580751.jpg', NULL, '1', '2021-06-13 10:39:10', '2021-06-13 10:42:16'),
(323, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'inje', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580773.jpg', NULL, '1', '2021-06-13 10:39:32', '2021-06-13 10:42:18'),
(324, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'hongcheon', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580788.jpg', NULL, '1', '2021-06-13 10:39:48', '2021-06-13 10:42:19'),
(325, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'pyeongchang', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580808.jpg', NULL, '1', '2021-06-13 10:40:07', '2021-06-13 10:42:20'),
(326, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'taebaek', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580834.jpg', NULL, '1', '2021-06-13 10:40:34', '2021-06-13 10:42:22'),
(327, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'donghae', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580854.jpg', NULL, '1', '2021-06-13 10:40:53', '2021-06-13 10:42:24'),
(328, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'pohang', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580875.jpg', NULL, '1', '2021-06-13 10:41:14', '2021-06-13 10:42:25'),
(329, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'gyeongju', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580892.jpg', NULL, '1', '2021-06-13 10:41:31', '2021-06-13 10:42:26'),
(330, 'Hera Limited Edition', 'Super Premium Suite (150 x 170)', '4', '4', '4', 'hamyang', 'Rumah eksklusif dengan tempat yang strategis. Cocok untuk anda yang ingin hunian dengan desain mewah dan terbatas.', 'surat tanah', '2017', 'I Gede Bayu Widiastika', '1623580909.jpg', NULL, '1', '2021-06-13 10:41:48', '2021-06-13 10:42:27'),
(331, 'Kondomium', 'Minimalis Class (20 x 10)', '2', '3', '1', 'seoul', 'aaaaaaaaa', 'aaaaa', '2015', 'I Gede Bayu Widiastika', '1623665452.jpg', '300', '3', '2021-06-14 10:10:51', '2021-06-14 10:15:07'),
(332, 'Hera Place', 'Minimalis Class (20 x 10)', '2', '3', '1', 'seoul', 'aaaaaaaaaaaa', 'aaaaaaaaaaa', '2015', 'I Gede Bayu Widiastika', '1623666059.jpg', '311', '2', '2021-06-14 10:20:59', '2021-06-14 10:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaction`
--

CREATE TABLE `tb_transaction` (
  `id_transaction` int(11) NOT NULL,
  `id_validate` int(11) NOT NULL,
  `id_properties` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `price_transaction` varchar(100) NOT NULL,
  `status_transaction` int(11) NOT NULL DEFAULT '0',
  `created_at_transaction` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaction`
--

INSERT INTO `tb_transaction` (`id_transaction`, `id_validate`, `id_properties`, `id_agent`, `price_transaction`, `status_transaction`, `created_at_transaction`, `updated_at`) VALUES
(26, 50, 121, 19, '320', 1, '2021-06-09 22:38:25', '2021-06-09 22:39:26'),
(27, 51, 107, 19, '110', 1, '2021-06-09 23:00:58', '2021-06-09 23:04:20'),
(28, 52, 109, 19, '110', 1, '2021-06-09 23:01:12', '2021-06-09 23:04:24'),
(29, 53, 110, 19, '110', 1, '2021-06-09 23:01:23', '2021-06-09 23:04:27'),
(30, 54, 111, 19, '130', 1, '2021-06-09 23:01:35', '2021-06-09 23:04:29'),
(31, 55, 112, 19, '130', 1, '2021-06-09 23:01:45', '2021-06-09 23:04:32'),
(32, 56, 113, 19, '130', 1, '2021-06-09 23:01:56', '2021-06-09 23:04:35'),
(33, 57, 114, 19, '150', 1, '2021-06-09 23:02:13', '2021-06-09 23:04:37'),
(34, 58, 115, 19, '150', 1, '2021-06-09 23:02:23', '2021-06-09 23:04:40'),
(35, 59, 116, 19, '210', 1, '2021-06-09 23:02:36', '2021-06-09 23:04:42'),
(36, 60, 117, 19, '210', 1, '2021-06-09 23:02:50', '2021-06-09 23:04:45'),
(37, 61, 118, 19, '250', 1, '2021-06-09 23:03:05', '2021-06-09 23:04:48'),
(38, 62, 119, 19, '250', 1, '2021-06-09 23:03:18', '2021-06-09 23:04:51'),
(39, 63, 120, 19, '250', 1, '2021-06-09 23:03:36', '2021-06-09 23:04:54'),
(40, 64, 122, 19, '320', 1, '2021-06-09 23:03:49', '2021-06-09 23:04:57'),
(41, 65, 124, 19, '210', 1, '2021-06-09 23:14:47', '2021-06-09 23:16:06'),
(42, 66, 127, 19, '210', 1, '2021-06-09 23:14:56', '2021-06-09 23:16:11'),
(43, 67, 126, 19, '210', 1, '2021-06-09 23:15:11', '2021-06-09 23:16:15'),
(44, 68, 125, 19, '210', 1, '2021-06-09 23:15:25', '2021-06-09 23:16:19'),
(45, 74, 129, 19, '210', 0, '2021-06-09 23:25:55', '2021-06-09 23:25:55'),
(46, 76, 132, 19, '250', 1, '2021-06-10 00:15:30', '2021-06-10 00:18:47'),
(47, 77, 133, 19, '250', 1, '2021-06-10 00:15:56', '2021-06-10 00:18:50'),
(48, 78, 134, 19, '250', 1, '2021-06-10 00:16:08', '2021-06-10 00:18:53'),
(49, 79, 135, 19, '250', 1, '2021-06-10 00:16:17', '2021-06-10 00:18:56'),
(50, 80, 136, 19, '250', 1, '2021-06-10 00:16:34', '2021-06-10 00:18:58'),
(51, 81, 137, 19, '250', 1, '2021-06-10 00:16:47', '2021-06-10 00:19:01'),
(52, 82, 138, 19, '250', 1, '2021-06-10 00:16:57', '2021-06-10 00:19:04'),
(53, 83, 139, 19, '250', 1, '2021-06-10 00:17:16', '2021-06-10 00:19:08'),
(54, 84, 140, 19, '250', 1, '2021-06-10 00:17:33', '2021-06-10 00:19:11'),
(55, 85, 141, 19, '250', 1, '2021-06-10 00:17:44', '2021-06-10 00:19:14'),
(56, 86, 142, 19, '250', 1, '2021-06-10 00:18:08', '2021-06-10 00:19:17'),
(57, 87, 143, 19, '250', 1, '2021-06-10 00:18:19', '2021-06-10 00:19:20'),
(58, 88, 144, 19, '250', 1, '2021-06-10 14:19:02', '2021-06-10 14:23:42'),
(59, 89, 145, 19, '250', 1, '2021-06-10 14:19:16', '2021-06-10 14:23:47'),
(60, 90, 146, 19, '250', 1, '2021-06-10 14:19:31', '2021-06-10 14:23:51'),
(61, 91, 147, 19, '250', 1, '2021-06-10 14:19:45', '2021-06-10 14:23:55'),
(62, 92, 148, 19, '250', 1, '2021-06-10 14:19:58', '2021-06-10 14:23:58'),
(63, 93, 149, 19, '250', 1, '2021-06-10 14:20:10', '2021-06-10 14:24:02'),
(64, 94, 150, 19, '250', 1, '2021-06-10 14:20:20', '2021-06-10 14:24:06'),
(65, 95, 151, 19, '250', 1, '2021-06-10 14:20:29', '2021-06-10 14:24:10'),
(66, 96, 152, 19, '250', 1, '2021-06-10 14:20:43', '2021-06-10 14:24:14'),
(67, 97, 153, 19, '250', 1, '2021-06-10 14:20:54', '2021-06-10 14:24:17'),
(68, 98, 154, 19, '250', 1, '2021-06-10 14:21:09', '2021-06-10 14:24:20'),
(69, 99, 156, 19, '250', 1, '2021-06-10 14:21:20', '2021-06-10 14:24:25'),
(70, 100, 157, 19, '250', 1, '2021-06-10 14:28:52', '2021-06-10 14:29:28'),
(71, 69, 108, 19, '250', -1, '2021-06-10 15:23:36', '2021-06-10 18:13:44'),
(72, 101, 158, 19, '250', 1, '2021-06-10 15:24:05', '2021-06-10 15:30:46'),
(73, 102, 159, 19, '250', 1, '2021-06-10 15:24:16', '2021-06-10 15:30:51'),
(74, 103, 160, 19, '250', 1, '2021-06-10 15:24:44', '2021-06-10 15:30:56'),
(75, 104, 161, 19, '250', 1, '2021-06-10 15:24:54', '2021-06-10 15:31:01'),
(76, 105, 162, 19, '250', 1, '2021-06-10 15:25:34', '2021-06-10 15:31:06'),
(77, 106, 163, 19, '250', 1, '2021-06-10 15:25:45', '2021-06-10 15:31:11'),
(78, 107, 165, 19, '250', 1, '2021-06-10 15:26:04', '2021-06-10 15:31:16'),
(79, 108, 166, 19, '250', 1, '2021-06-10 15:26:37', '2021-06-10 15:31:20'),
(80, 109, 167, 19, '250', 1, '2021-06-10 15:27:21', '2021-06-10 15:31:25'),
(81, 110, 168, 19, '250', 1, '2021-06-10 15:27:34', '2021-06-10 15:31:30'),
(82, 111, 169, 19, '250', 1, '2021-06-10 15:27:49', '2021-06-10 15:31:37'),
(83, 112, 170, 19, '250', 1, '2021-06-10 15:28:04', '2021-06-10 15:31:42'),
(84, 113, 171, 19, '250', 1, '2021-06-10 15:28:20', '2021-06-10 15:31:48'),
(85, 114, 172, 19, '250', 1, '2021-06-10 15:29:18', '2021-06-10 15:31:52'),
(86, 115, 173, 19, '250', 1, '2021-06-10 15:29:30', '2021-06-10 15:31:58'),
(87, 116, 174, 19, '250', 1, '2021-06-10 15:54:29', '2021-06-10 16:02:04'),
(88, 117, 175, 19, '250', 1, '2021-06-10 15:55:01', '2021-06-10 16:02:09'),
(89, 118, 176, 19, '250', 1, '2021-06-10 15:55:13', '2021-06-10 16:02:15'),
(90, 119, 177, 19, '250', 1, '2021-06-10 15:55:39', '2021-06-10 16:02:19'),
(91, 120, 178, 19, '250', 1, '2021-06-10 15:55:54', '2021-06-10 16:02:23'),
(92, 121, 179, 19, '250', 1, '2021-06-10 15:56:04', '2021-06-10 16:02:26'),
(93, 122, 180, 19, '250', 1, '2021-06-10 15:56:22', '2021-06-10 16:02:30'),
(94, 123, 181, 19, '250', 1, '2021-06-10 15:56:44', '2021-06-10 16:02:35'),
(95, 124, 182, 19, '250', 1, '2021-06-10 15:57:51', '2021-06-10 16:02:40'),
(96, 125, 183, 19, '250', 1, '2021-06-10 15:58:02', '2021-06-10 16:02:44'),
(97, 126, 184, 19, '250', 1, '2021-06-10 15:58:45', '2021-06-10 16:02:48'),
(98, 127, 185, 19, '250', 1, '2021-06-10 16:00:03', '2021-06-10 16:02:52'),
(99, 128, 186, 19, '250', 1, '2021-06-10 16:00:15', '2021-06-10 16:02:56'),
(100, 129, 187, 19, '270', 1, '2021-06-10 17:34:38', '2021-06-10 17:38:41'),
(101, 130, 188, 19, '270', 1, '2021-06-10 17:34:51', '2021-06-10 17:38:49'),
(102, 131, 189, 19, '270', 1, '2021-06-10 17:35:06', '2021-06-10 17:38:53'),
(103, 132, 190, 19, '270', 1, '2021-06-10 17:35:17', '2021-06-10 17:38:58'),
(104, 133, 192, 19, '270', 1, '2021-06-10 17:35:33', '2021-06-10 17:39:03'),
(105, 134, 193, 19, '270', 1, '2021-06-10 17:35:45', '2021-06-10 17:39:06'),
(106, 135, 194, 19, '270', 1, '2021-06-10 17:36:08', '2021-06-10 17:39:10'),
(107, 136, 195, 19, '270', 1, '2021-06-10 17:36:24', '2021-06-10 17:39:14'),
(108, 137, 196, 19, '270', 1, '2021-06-10 17:36:57', '2021-06-10 17:39:17'),
(109, 138, 197, 19, '270', 1, '2021-06-10 17:37:22', '2021-06-10 17:39:21'),
(110, 139, 198, 19, '270', 1, '2021-06-10 17:37:33', '2021-06-10 17:39:25'),
(111, 140, 199, 19, '270', 1, '2021-06-10 17:37:43', '2021-06-10 17:39:29'),
(112, 141, 200, 19, '270', 1, '2021-06-10 17:38:06', '2021-06-10 17:39:33'),
(113, 142, 201, 19, '320', 1, '2021-06-10 18:03:52', '2021-06-10 18:11:58'),
(114, 143, 202, 19, '320', 1, '2021-06-10 18:05:54', '2021-06-10 18:12:05'),
(115, 144, 203, 19, '320', 1, '2021-06-10 18:06:26', '2021-06-10 18:12:09'),
(116, 145, 204, 19, '320', 1, '2021-06-10 18:06:39', '2021-06-10 18:12:16'),
(117, 146, 205, 19, '320', 1, '2021-06-10 18:06:50', '2021-06-10 18:12:20'),
(118, 147, 206, 19, '320', 1, '2021-06-10 18:07:15', '2021-06-10 18:12:32'),
(119, 148, 208, 19, '320', 1, '2021-06-10 18:07:32', '2021-06-10 18:12:37'),
(120, 149, 209, 19, '320', 1, '2021-06-10 18:09:00', '2021-06-10 18:12:41'),
(121, 150, 210, 19, '320', 1, '2021-06-10 18:09:14', '2021-06-10 18:12:46'),
(122, 151, 211, 19, '320', 1, '2021-06-10 18:10:04', '2021-06-10 18:12:53'),
(123, 152, 212, 19, '320', 1, '2021-06-10 18:10:19', '2021-06-10 18:12:59'),
(124, 153, 213, 19, '320', 1, '2021-06-10 18:10:33', '2021-06-10 18:13:05'),
(125, 154, 214, 19, '320', 1, '2021-06-10 18:10:57', '2021-06-10 18:13:09'),
(126, 155, 215, 19, '350', 1, '2021-06-10 18:46:24', '2021-06-10 18:49:43'),
(127, 156, 216, 19, '350', 1, '2021-06-10 18:46:43', '2021-06-10 18:49:47'),
(128, 157, 217, 19, '350', 1, '2021-06-10 18:46:57', '2021-06-10 18:49:51'),
(129, 158, 218, 19, '350', 1, '2021-06-10 18:47:10', '2021-06-10 18:49:55'),
(130, 159, 219, 19, '350', 1, '2021-06-10 18:47:22', '2021-06-10 18:49:58'),
(131, 160, 220, 19, '350', 1, '2021-06-10 18:47:35', '2021-06-10 18:50:03'),
(132, 161, 221, 19, '350', 1, '2021-06-10 18:47:49', '2021-06-10 18:50:07'),
(133, 162, 222, 19, '350', 1, '2021-06-10 18:48:00', '2021-06-10 18:50:10'),
(134, 163, 223, 19, '350', 1, '2021-06-10 18:48:10', '2021-06-10 18:50:14'),
(135, 164, 224, 19, '350', 1, '2021-06-10 18:48:22', '2021-06-10 18:50:17'),
(136, 165, 225, 19, '350', 1, '2021-06-10 18:48:36', '2021-06-10 18:50:21'),
(137, 166, 226, 19, '350', 1, '2021-06-10 18:48:59', '2021-06-10 18:50:26'),
(138, 167, 227, 19, '350', 1, '2021-06-10 18:49:11', '2021-06-10 18:50:30'),
(139, 169, 331, 19, '300', 1, '2021-06-14 18:13:01', '2021-06-14 18:13:33'),
(140, 171, 332, 19, '311', 1, '2021-06-14 18:23:08', '2021-06-14 18:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `name`, `username`, `password`, `level`, `email`, `telephone`, `created_at`, `updated_at`) VALUES
(17, 'I Gede Bayu Widiastika', 'bayu', '92360c2c392c85b23f38c188996f8d74', 2, 'bayuwidiastika@gmail.com', '085739347311', '2021-05-26 04:24:37', '2021-05-26 04:24:37'),
(18, 'Admin Bambang', 'admin', '0192023a7bbd73250516f069df18b500', 1, 'admin@gmail.com', '0909090909', '2021-05-26 05:17:34', '2021-05-26 05:18:05'),
(19, 'Suwindratama', 'suwin', 'faeb758c69474e6cc4e809768886750c', 3, 'rakagaulithu@gmail.com', '085739347311', '2021-05-29 08:14:59', '2021-05-29 08:14:59'),
(20, 'Zipperiz', 'zip', '2960156192c1d56becb77e47f9cfc515', 4, 'zip@gmail.com', '085739347311', '2021-06-06 12:09:19', '2021-06-06 12:09:19'),
(21, 'Adi', 'adi', '7360409d967a24b667afc33a8384ec9e', 4, 'adi@gmail.com', '085739347312', '2021-06-07 10:46:48', '2021-06-07 10:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_validate`
--

CREATE TABLE `tb_validate` (
  `id_validate` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `id_properties` int(11) NOT NULL,
  `id_agent` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `status_validate` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_validate`
--

INSERT INTO `tb_validate` (`id_validate`, `message`, `id_properties`, `id_agent`, `id_customer`, `status_validate`, `created_at`, `updated_at`) VALUES
(41, 'Berhasil diterima !', 100, 19, NULL, 3, '2021-06-07 22:56:27', '2021-06-07 23:12:52'),
(42, 'Berhasil diterima !', 103, 19, NULL, 3, '2021-06-07 22:56:40', '2021-06-07 23:12:57'),
(43, 'Berhasil diterima !', 102, 19, NULL, 3, '2021-06-07 22:56:44', '2021-06-08 11:40:59'),
(44, 'Berhasil diterima !', 103, 19, 20, 6, '2021-06-07 23:13:16', '2021-06-07 23:14:49'),
(45, 'Berhasil diterima !', 100, 19, 20, 6, '2021-06-07 23:13:22', '2021-06-07 23:14:54'),
(46, 'Berhasil diterima !', 102, 19, 21, 6, '2021-06-08 11:41:28', '2021-06-08 11:41:59'),
(48, 'Berhasil diterima !', 104, 19, NULL, 3, '2021-06-08 21:55:03', '2021-06-08 21:55:43'),
(49, 'Berhasil diterima !', 104, 19, 20, 6, '2021-06-08 22:00:02', '2021-06-08 22:01:37'),
(50, 'Berhasil diterima !', 121, 19, NULL, 3, '2021-06-09 22:37:59', '2021-06-09 22:39:26'),
(51, 'Berhasil diterima !', 107, 19, NULL, 3, '2021-06-09 22:40:53', '2021-06-09 23:04:20'),
(52, 'Berhasil diterima !', 109, 19, NULL, 3, '2021-06-09 22:44:02', '2021-06-09 23:04:24'),
(53, 'Berhasil diterima !', 110, 19, NULL, 3, '2021-06-09 22:44:07', '2021-06-09 23:04:27'),
(54, 'Berhasil diterima !', 111, 19, NULL, 3, '2021-06-09 22:44:13', '2021-06-09 23:04:29'),
(55, 'Berhasil diterima !', 112, 19, NULL, 3, '2021-06-09 22:44:19', '2021-06-09 23:04:32'),
(56, 'Berhasil diterima !', 113, 19, NULL, 3, '2021-06-09 22:44:26', '2021-06-09 23:04:35'),
(57, 'Berhasil diterima !', 114, 19, NULL, 3, '2021-06-09 22:55:26', '2021-06-09 23:04:37'),
(58, 'Berhasil diterima !', 115, 19, NULL, 3, '2021-06-09 22:55:35', '2021-06-09 23:04:40'),
(59, 'Berhasil diterima !', 116, 19, NULL, 3, '2021-06-09 22:55:45', '2021-06-09 23:04:42'),
(60, 'Berhasil diterima !', 117, 19, NULL, 3, '2021-06-09 22:55:56', '2021-06-09 23:04:45'),
(61, 'Berhasil diterima !', 118, 19, NULL, 3, '2021-06-09 22:56:01', '2021-06-09 23:04:48'),
(62, 'Berhasil diterima !', 119, 19, NULL, 3, '2021-06-09 22:56:12', '2021-06-09 23:04:51'),
(63, 'Berhasil diterima !', 120, 19, NULL, 3, '2021-06-09 22:56:41', '2021-06-09 23:04:54'),
(64, 'Berhasil diterima !', 122, 19, NULL, 3, '2021-06-09 22:57:35', '2021-06-09 23:04:57'),
(65, 'Berhasil diterima !', 124, 19, NULL, 3, '2021-06-09 23:09:18', '2021-06-09 23:16:06'),
(66, 'Berhasil diterima !', 127, 19, NULL, 3, '2021-06-09 23:13:15', '2021-06-09 23:16:11'),
(67, 'Berhasil diterima !', 126, 19, NULL, 3, '2021-06-09 23:13:25', '2021-06-09 23:16:15'),
(68, 'Berhasil diterima !', 125, 19, NULL, 3, '2021-06-09 23:13:30', '2021-06-09 23:16:19'),
(69, 'Owner menolak tawaran harga tersebut !', 108, 19, NULL, -2, '2021-06-09 23:13:35', '2021-06-10 18:13:44'),
(70, 'Berhasil diterima !', 125, 19, 20, 6, '2021-06-09 23:17:10', '2021-06-09 23:18:12'),
(71, 'Segera hubungi agent dari properti tesebut dan Miliki properti ini segera ! ', 126, 19, 20, 5, '2021-06-09 23:19:10', '2021-06-09 23:19:22'),
(72, 'Persetujuan ini ditolak karena alasan tertentu !', 127, 19, 20, -4, '2021-06-09 23:19:36', '2021-06-09 23:19:45'),
(73, 'Saya tertarik dengan properti ini, Bisakah saya menghubunginya ?', 111, 19, 20, 4, '2021-06-09 23:20:06', '2021-06-09 23:20:06'),
(74, 'Mohon untuk menunggu konfirmasi dari owner !', 129, 19, NULL, 2, '2021-06-09 23:23:38', '2021-06-09 23:25:55'),
(75, 'Saya tertarik dengan properti ini, Bisakah saya menghubunginya ?', 130, 19, NULL, 0, '2021-06-09 23:26:04', '2021-06-09 23:26:04'),
(76, 'Berhasil diterima !', 132, 19, NULL, 3, '2021-06-10 00:12:47', '2021-06-10 00:18:47'),
(77, 'Berhasil diterima !', 133, 19, NULL, 3, '2021-06-10 00:12:58', '2021-06-10 00:18:50'),
(78, 'Berhasil diterima !', 134, 19, NULL, 3, '2021-06-10 00:13:03', '2021-06-10 00:18:53'),
(79, 'Berhasil diterima !', 135, 19, NULL, 3, '2021-06-10 00:13:08', '2021-06-10 00:18:56'),
(80, 'Berhasil diterima !', 136, 19, NULL, 3, '2021-06-10 00:13:16', '2021-06-10 00:18:58'),
(81, 'Berhasil diterima !', 137, 19, NULL, 3, '2021-06-10 00:13:22', '2021-06-10 00:19:01'),
(82, 'Berhasil diterima !', 138, 19, NULL, 3, '2021-06-10 00:13:27', '2021-06-10 00:19:04'),
(83, 'Berhasil diterima !', 139, 19, NULL, 3, '2021-06-10 00:13:33', '2021-06-10 00:19:08'),
(84, 'Berhasil diterima !', 140, 19, NULL, 3, '2021-06-10 00:13:38', '2021-06-10 00:19:11'),
(85, 'Berhasil diterima !', 141, 19, NULL, 3, '2021-06-10 00:13:43', '2021-06-10 00:19:14'),
(86, 'Berhasil diterima !', 142, 19, NULL, 3, '2021-06-10 00:13:47', '2021-06-10 00:19:17'),
(87, 'Berhasil diterima !', 143, 19, NULL, 3, '2021-06-10 00:13:52', '2021-06-10 00:19:20'),
(88, 'Berhasil diterima !', 144, 19, NULL, 3, '2021-06-10 14:12:52', '2021-06-10 14:23:42'),
(89, 'Berhasil diterima !', 145, 19, NULL, 3, '2021-06-10 14:13:00', '2021-06-10 14:23:47'),
(90, 'Berhasil diterima !', 146, 19, NULL, 3, '2021-06-10 14:13:06', '2021-06-10 14:23:51'),
(91, 'Berhasil diterima !', 147, 19, NULL, 3, '2021-06-10 14:13:27', '2021-06-10 14:23:55'),
(92, 'Berhasil diterima !', 148, 19, NULL, 3, '2021-06-10 14:13:34', '2021-06-10 14:23:58'),
(93, 'Berhasil diterima !', 149, 19, NULL, 3, '2021-06-10 14:13:42', '2021-06-10 14:24:02'),
(94, 'Berhasil diterima !', 150, 19, NULL, 3, '2021-06-10 14:13:50', '2021-06-10 14:24:06'),
(95, 'Berhasil diterima !', 151, 19, NULL, 3, '2021-06-10 14:14:03', '2021-06-10 14:24:10'),
(96, 'Berhasil diterima !', 152, 19, NULL, 3, '2021-06-10 14:14:10', '2021-06-10 14:24:14'),
(97, 'Berhasil diterima !', 153, 19, NULL, 3, '2021-06-10 14:14:15', '2021-06-10 14:24:17'),
(98, 'Berhasil diterima !', 154, 19, NULL, 3, '2021-06-10 14:14:26', '2021-06-10 14:24:20'),
(99, 'Berhasil diterima !', 156, 19, NULL, 3, '2021-06-10 14:17:29', '2021-06-10 14:24:25'),
(100, 'Berhasil diterima !', 157, 19, NULL, 3, '2021-06-10 14:28:23', '2021-06-10 14:29:28'),
(101, 'Berhasil diterima !', 158, 19, NULL, 3, '2021-06-10 15:20:51', '2021-06-10 15:30:46'),
(102, 'Berhasil diterima !', 159, 19, NULL, 3, '2021-06-10 15:21:00', '2021-06-10 15:30:51'),
(103, 'Berhasil diterima !', 160, 19, NULL, 3, '2021-06-10 15:21:08', '2021-06-10 15:30:56'),
(104, 'Berhasil diterima !', 161, 19, NULL, 3, '2021-06-10 15:21:16', '2021-06-10 15:31:01'),
(105, 'Berhasil diterima !', 162, 19, NULL, 3, '2021-06-10 15:21:22', '2021-06-10 15:31:06'),
(106, 'Berhasil diterima !', 163, 19, NULL, 3, '2021-06-10 15:21:32', '2021-06-10 15:31:11'),
(107, 'Berhasil diterima !', 165, 19, NULL, 3, '2021-06-10 15:21:44', '2021-06-10 15:31:16'),
(108, 'Berhasil diterima !', 166, 19, NULL, 3, '2021-06-10 15:21:53', '2021-06-10 15:31:20'),
(109, 'Berhasil diterima !', 167, 19, NULL, 3, '2021-06-10 15:22:02', '2021-06-10 15:31:25'),
(110, 'Berhasil diterima !', 168, 19, NULL, 3, '2021-06-10 15:22:09', '2021-06-10 15:31:30'),
(111, 'Berhasil diterima !', 169, 19, NULL, 3, '2021-06-10 15:22:18', '2021-06-10 15:31:37'),
(112, 'Berhasil diterima !', 170, 19, NULL, 3, '2021-06-10 15:22:24', '2021-06-10 15:31:42'),
(113, 'Berhasil diterima !', 171, 19, NULL, 3, '2021-06-10 15:22:32', '2021-06-10 15:31:48'),
(114, 'Berhasil diterima !', 172, 19, NULL, 3, '2021-06-10 15:22:44', '2021-06-10 15:31:52'),
(115, 'Berhasil diterima !', 173, 19, NULL, 3, '2021-06-10 15:22:52', '2021-06-10 15:31:58'),
(116, 'Berhasil diterima !', 174, 19, NULL, 3, '2021-06-10 15:51:26', '2021-06-10 16:02:04'),
(117, 'Berhasil diterima !', 175, 19, NULL, 3, '2021-06-10 15:51:34', '2021-06-10 16:02:09'),
(118, 'Berhasil diterima !', 176, 19, NULL, 3, '2021-06-10 15:51:41', '2021-06-10 16:02:15'),
(119, 'Berhasil diterima !', 177, 19, NULL, 3, '2021-06-10 15:51:52', '2021-06-10 16:02:19'),
(120, 'Berhasil diterima !', 178, 19, NULL, 3, '2021-06-10 15:52:02', '2021-06-10 16:02:23'),
(121, 'Berhasil diterima !', 179, 19, NULL, 3, '2021-06-10 15:52:15', '2021-06-10 16:02:26'),
(122, 'Berhasil diterima !', 180, 19, NULL, 3, '2021-06-10 15:52:22', '2021-06-10 16:02:30'),
(123, 'Berhasil diterima !', 181, 19, NULL, 3, '2021-06-10 15:52:48', '2021-06-10 16:02:35'),
(124, 'Berhasil diterima !', 182, 19, NULL, 3, '2021-06-10 15:52:58', '2021-06-10 16:02:40'),
(125, 'Berhasil diterima !', 183, 19, NULL, 3, '2021-06-10 15:53:10', '2021-06-10 16:02:44'),
(126, 'Berhasil diterima !', 184, 19, NULL, 3, '2021-06-10 15:53:19', '2021-06-10 16:02:48'),
(127, 'Berhasil diterima !', 185, 19, NULL, 3, '2021-06-10 15:53:26', '2021-06-10 16:02:52'),
(128, 'Berhasil diterima !', 186, 19, NULL, 3, '2021-06-10 15:53:34', '2021-06-10 16:02:56'),
(129, 'Berhasil diterima !', 187, 19, NULL, 3, '2021-06-10 17:27:43', '2021-06-10 17:38:41'),
(130, 'Berhasil diterima !', 188, 19, NULL, 3, '2021-06-10 17:27:52', '2021-06-10 17:38:49'),
(131, 'Berhasil diterima !', 189, 19, NULL, 3, '2021-06-10 17:28:01', '2021-06-10 17:38:53'),
(132, 'Berhasil diterima !', 190, 19, NULL, 3, '2021-06-10 17:28:08', '2021-06-10 17:38:58'),
(133, 'Berhasil diterima !', 192, 19, NULL, 3, '2021-06-10 17:31:30', '2021-06-10 17:39:03'),
(134, 'Berhasil diterima !', 193, 19, NULL, 3, '2021-06-10 17:32:07', '2021-06-10 17:39:06'),
(135, 'Berhasil diterima !', 194, 19, NULL, 3, '2021-06-10 17:32:28', '2021-06-10 17:39:10'),
(136, 'Berhasil diterima !', 195, 19, NULL, 3, '2021-06-10 17:32:41', '2021-06-10 17:39:14'),
(137, 'Berhasil diterima !', 196, 19, NULL, 3, '2021-06-10 17:32:52', '2021-06-10 17:39:17'),
(138, 'Berhasil diterima !', 197, 19, NULL, 3, '2021-06-10 17:33:00', '2021-06-10 17:39:21'),
(139, 'Berhasil diterima !', 198, 19, NULL, 3, '2021-06-10 17:33:10', '2021-06-10 17:39:25'),
(140, 'Berhasil diterima !', 199, 19, NULL, 3, '2021-06-10 17:33:20', '2021-06-10 17:39:29'),
(141, 'Berhasil diterima !', 200, 19, NULL, 3, '2021-06-10 17:33:28', '2021-06-10 17:39:33'),
(142, 'Berhasil diterima !', 201, 19, NULL, 3, '2021-06-10 17:57:19', '2021-06-10 18:11:58'),
(143, 'Berhasil diterima !', 202, 19, NULL, 3, '2021-06-10 17:57:50', '2021-06-10 18:12:05'),
(144, 'Berhasil diterima !', 203, 19, NULL, 3, '2021-06-10 17:57:57', '2021-06-10 18:12:09'),
(145, 'Berhasil diterima !', 204, 19, NULL, 3, '2021-06-10 17:58:05', '2021-06-10 18:12:16'),
(146, 'Berhasil diterima !', 205, 19, NULL, 3, '2021-06-10 17:58:13', '2021-06-10 18:12:20'),
(147, 'Berhasil diterima !', 206, 19, NULL, 3, '2021-06-10 17:58:27', '2021-06-10 18:12:32'),
(148, 'Berhasil diterima !', 208, 19, NULL, 3, '2021-06-10 17:58:39', '2021-06-10 18:12:37'),
(149, 'Berhasil diterima !', 209, 19, NULL, 3, '2021-06-10 18:00:32', '2021-06-10 18:12:41'),
(150, 'Berhasil diterima !', 210, 19, NULL, 3, '2021-06-10 18:00:54', '2021-06-10 18:12:46'),
(151, 'Berhasil diterima !', 211, 19, NULL, 3, '2021-06-10 18:01:04', '2021-06-10 18:12:53'),
(152, 'Berhasil diterima !', 212, 19, NULL, 3, '2021-06-10 18:02:10', '2021-06-10 18:12:59'),
(153, 'Berhasil diterima !', 213, 19, NULL, 3, '2021-06-10 18:02:23', '2021-06-10 18:13:05'),
(154, 'Berhasil diterima !', 214, 19, NULL, 3, '2021-06-10 18:02:34', '2021-06-10 18:13:09'),
(155, 'Berhasil diterima !', 215, 19, NULL, 3, '2021-06-10 18:43:16', '2021-06-10 18:49:43'),
(156, 'Berhasil diterima !', 216, 19, NULL, 3, '2021-06-10 18:43:24', '2021-06-10 18:49:47'),
(157, 'Berhasil diterima !', 217, 19, NULL, 3, '2021-06-10 18:43:32', '2021-06-10 18:49:51'),
(158, 'Berhasil diterima !', 218, 19, NULL, 3, '2021-06-10 18:43:42', '2021-06-10 18:49:55'),
(159, 'Berhasil diterima !', 219, 19, NULL, 3, '2021-06-10 18:43:49', '2021-06-10 18:49:58'),
(160, 'Berhasil diterima !', 220, 19, NULL, 3, '2021-06-10 18:43:56', '2021-06-10 18:50:03'),
(161, 'Berhasil diterima !', 221, 19, NULL, 3, '2021-06-10 18:44:06', '2021-06-10 18:50:07'),
(162, 'Berhasil diterima !', 222, 19, NULL, 3, '2021-06-10 18:44:15', '2021-06-10 18:50:10'),
(163, 'Berhasil diterima !', 223, 19, NULL, 3, '2021-06-10 18:44:24', '2021-06-10 18:50:14'),
(164, 'Berhasil diterima !', 224, 19, NULL, 3, '2021-06-10 18:44:32', '2021-06-10 18:50:17'),
(165, 'Berhasil diterima !', 225, 19, NULL, 3, '2021-06-10 18:44:39', '2021-06-10 18:50:21'),
(166, 'Berhasil diterima !', 226, 19, NULL, 3, '2021-06-10 18:44:59', '2021-06-10 18:50:26'),
(167, 'Berhasil diterima !', 227, 19, NULL, 3, '2021-06-10 18:45:08', '2021-06-10 18:50:30'),
(168, 'Agent menolak transaksi properti ini !', 163, 19, 20, -5, '2021-06-10 18:53:19', '2021-06-10 18:55:04'),
(169, 'Berhasil diterima !', 331, 19, NULL, 3, '2021-06-14 18:12:12', '2021-06-14 18:13:33'),
(170, 'Berhasil diterima !', 331, 19, 20, 6, '2021-06-14 18:14:10', '2021-06-14 18:15:07'),
(171, 'Berhasil diterima !', 332, 19, NULL, 3, '2021-06-14 18:22:30', '2021-06-14 18:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_management_agent`
--
ALTER TABLE `tb_management_agent`
  ADD PRIMARY KEY (`id_management_agent`);

--
-- Indexes for table `tb_management_customer`
--
ALTER TABLE `tb_management_customer`
  ADD PRIMARY KEY (`id_management_customer`);

--
-- Indexes for table `tb_properties`
--
ALTER TABLE `tb_properties`
  ADD PRIMARY KEY (`id_properties`);

--
-- Indexes for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `tb_users_username_unique` (`username`),
  ADD UNIQUE KEY `tb_users_email_unique` (`email`);

--
-- Indexes for table `tb_validate`
--
ALTER TABLE `tb_validate`
  ADD PRIMARY KEY (`id_validate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_management_agent`
--
ALTER TABLE `tb_management_agent`
  MODIFY `id_management_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `tb_management_customer`
--
ALTER TABLE `tb_management_customer`
  MODIFY `id_management_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_properties`
--
ALTER TABLE `tb_properties`
  MODIFY `id_properties` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_validate`
--
ALTER TABLE `tb_validate`
  MODIFY `id_validate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
