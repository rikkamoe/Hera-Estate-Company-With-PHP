-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 03:08 PM
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(57, '2014_10_12_000000_create_users_table', 1),
(58, '2014_10_12_100000_create_password_resets_table', 1),
(59, '2021_04_27_095146_create_tb_users_table', 1),
(60, '2021_04_27_095247_create_tb_customers_table', 1),
(61, '2021_04_27_095354_create_tb_properties_table', 1),
(62, '2021_04_27_095434_create_tb_management_customers_table', 1),
(63, '2021_04_27_095509_create_tb_management_agents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, 19, 100, 2, '2021-06-07 23:12:52', '2021-06-07 23:14:54'),
(11, 19, 103, 2, '2021-06-07 23:12:57', '2021-06-07 23:14:49'),
(12, 19, 102, 2, '2021-06-08 11:41:00', '2021-06-08 11:41:59'),
(14, 19, 104, 2, '2021-06-08 21:55:45', '2021-06-08 22:01:37');

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
(11, 12, 21, 1, '2021-06-08 11:41:59', '2021-06-08 11:41:59'),
(12, 14, 20, 1, '2021-06-08 22:01:37', '2021-06-08 22:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_properties`
--

CREATE TABLE `tb_properties` (
  `id_properties` bigint(20) UNSIGNED NOT NULL,
  `name_properties` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` int(11) NOT NULL,
  `toilet` int(11) NOT NULL,
  `pool` int(11) NOT NULL,
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
(100, 'Harajuku', 'Minimalis Class (20 x 10)', 2, 3, 2, 'seoul', 'asasasas', 'sasasasa', '2015', 'I Gede Bayu Widiastika', 'banner.jpg', '300', '3', '2021-06-07 14:33:01', '2021-06-07 15:14:54'),
(101, 'Hera Place', 'Minimalis Class (20 x 10)', 2, 3, 1, 'seoul', 'aaaaaaaaa', 'aaaaaaaaaa', '2015', 'I Gede Bayu Widiastika', 'banner.jpg', NULL, '1', '2021-06-07 14:33:23', '2021-06-07 14:34:26'),
(102, 'Hera Kids', 'Minimalis Class (20 x 10)', 2, 3, 1, 'seoul', 'aaaaaaaaaa', 'aaaaaaaaaa', '2015', 'I Gede Bayu Widiastika', 'banner.jpg', '325', '3', '2021-06-07 14:33:50', '2021-06-08 03:41:59'),
(103, 'Sakuta House', 'Minimalis Class (20 x 10)', 2, 3, 1, 'seoul', 'aaaaaaaaaa', 'aaaaaaa', '2015', 'I Gede Bayu Widiastika', 'banner.jpg', '350', '3', '2021-06-07 14:34:15', '2021-06-07 15:14:49'),
(104, 'Hora Hora', 'Minimalis Class (20 x 10)', 2, 2, 2, 'seoul', 'AAAAAAAAAA', 'AAAAAAAAAA', '2015', 'I Gede Bayu Widiastika', 'banner.jpg', '310', '3', '2021-06-07 14:59:19', '2021-06-08 14:01:37'),
(105, 'House Premium', 'Minimalis Class (20 x 10)', 2, 3, 1, 'seoul', 'AAAAAA', 'AAAAAAAAAAAAA', '2015', 'I Gede Bayu Widiastika', 'banner.jpg', NULL, '0', '2021-06-07 14:59:40', '2021-06-07 14:59:40');

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
(21, 41, 100, 19, '300', 1, '2021-06-07 23:12:13', '2021-06-07 23:12:52'),
(22, 42, 103, 19, '350', 1, '2021-06-07 23:12:30', '2021-06-07 23:12:57'),
(23, 43, 102, 19, '325', 1, '2021-06-08 11:40:35', '2021-06-08 11:40:59'),
(25, 48, 104, 19, '310', 1, '2021-06-08 21:55:22', '2021-06-08 21:55:43');

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
(49, 'Berhasil diterima !', 104, 19, 20, 6, '2021-06-08 22:00:02', '2021-06-08 22:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_management_agent`
--
ALTER TABLE `tb_management_agent`
  MODIFY `id_management_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_management_customer`
--
ALTER TABLE `tb_management_customer`
  MODIFY `id_management_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_properties`
--
ALTER TABLE `tb_properties`
  MODIFY `id_properties` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_validate`
--
ALTER TABLE `tb_validate`
  MODIFY `id_validate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
