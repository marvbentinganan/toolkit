-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 11:29 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rci_it_toolkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `added_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'IT Department', 1, NULL, '2017-08-23 17:40:15', '2017-08-25 03:40:07'),
(2, 'Accounting Department', 1, NULL, '2017-08-23 17:50:37', '2017-08-25 06:49:22'),
(3, 'Finance Department', 1, NULL, '2017-08-23 17:51:58', '2017-08-23 19:27:06'),
(4, 'Admissions Office', 1, NULL, '2017-08-23 17:52:10', '2017-08-23 19:27:30'),
(5, 'Admin Office', 1, NULL, '2017-08-23 17:54:57', '2017-08-23 19:27:40'),
(6, 'Marketing Department', 1, NULL, '2017-08-23 18:00:59', '2017-08-23 19:27:50'),
(7, 'Registrar\'s Office', 1, NULL, '2017-08-23 18:25:43', '2017-08-23 19:31:18'),
(8, 'Property Department', 1, NULL, '2017-08-23 18:26:17', '2017-08-23 19:36:46'),
(9, 'Instructional Media Center', 1, NULL, '2017-08-23 18:26:38', '2017-08-23 18:26:38'),
(13, 'Medical Technology', 1, NULL, '2017-08-23 19:17:55', '2017-08-23 19:26:09'),
(14, 'Senior High School - Academic', 1, NULL, '2017-08-23 19:31:33', '2017-08-25 03:40:23'),
(15, 'Senior High School - TVL', 1, NULL, '2017-08-23 19:31:45', '2017-08-25 03:40:24'),
(16, 'Pharmacy Department', 1, NULL, '2017-08-23 19:32:14', '2017-08-23 19:32:14'),
(17, 'Nursing Department', 1, NULL, '2017-08-23 19:32:33', '2017-08-23 19:32:33'),
(18, 'Physical Therapy Department', 1, NULL, '2017-08-23 19:37:18', '2017-08-23 19:37:18'),
(19, 'NSTP Office', 1, NULL, '2017-08-23 19:37:22', '2017-08-25 03:40:10'),
(20, 'RSSG', 1, NULL, '2017-08-23 19:37:36', '2017-08-25 03:40:12'),
(21, 'Guidance Department', 1, NULL, '2017-08-23 19:37:44', '2017-08-23 19:37:44'),
(22, 'Library', 1, NULL, '2017-08-23 20:45:53', '2017-08-23 20:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `inv_items`
--

CREATE TABLE `inv_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `supplier` int(11) DEFAULT NULL,
  `manufacturer` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `ownership` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `remarks` longtext COLLATE utf8mb4_unicode_ci,
  `added_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inv_manufacturers`
--

CREATE TABLE `inv_manufacturers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inv_manufacturers`
--

INSERT INTO `inv_manufacturers` (`id`, `name`, `website`, `email`, `contact_number`, `added_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ASUS', 'https://www.asus.com/ph/', NULL, '+63-2-7985700', 1, NULL, '2017-08-25 05:53:00', '2017-08-25 07:37:17'),
(2, 'Hewlett Packard (HP)', 'http://www8.hp.com/ph/en/home.html', NULL, '+63-2-8673557', 1, NULL, '2017-08-25 06:00:00', '2017-08-25 06:05:23'),
(3, 'Dell', 'https://www.dell.com', NULL, '+63-2-6632000', 1, NULL, '2017-08-25 06:08:36', '2017-08-25 06:09:04'),
(4, 'APC', 'http://www.apc.com/ph/en/', NULL, NULL, 1, NULL, '2017-08-25 06:50:06', '2017-08-25 08:11:06'),
(5, 'A4TECH', 'http://www.a4tech.com/', NULL, NULL, 1, NULL, '2017-08-25 07:06:36', '2017-08-25 08:00:18'),
(6, 'Genius', 'http://us.geniusnet.com/', NULL, NULL, 1, NULL, '2017-08-25 07:06:40', '2017-08-25 08:11:58'),
(7, 'BENQ', 'http://www.benq.ph/', NULL, NULL, 1, NULL, '2017-08-25 07:06:50', '2017-08-25 07:58:52'),
(8, 'Canon', 'http://www.canon.com.ph/', NULL, NULL, 1, NULL, '2017-08-25 07:35:59', '2017-08-25 08:00:40'),
(9, 'EPSON', 'https://epson.com/', NULL, NULL, 1, NULL, '2017-08-25 07:36:04', '2017-08-25 07:57:55'),
(10, 'PCSTAR', NULL, NULL, NULL, 1, NULL, '2017-08-25 07:36:45', '2017-08-25 07:36:45'),
(11, 'AOC', 'http://www.aoc.com/home.html', NULL, NULL, 1, NULL, '2017-08-25 07:54:43', '2017-08-25 07:59:42'),
(12, 'AMD', 'https://www.amd.com/en/home', NULL, NULL, 1, NULL, '2017-08-25 08:16:30', '2017-08-25 08:27:52'),
(13, 'Intel', 'https://www.intel.com/content/www/us/en/homepage.html', NULL, NULL, 1, NULL, '2017-08-25 08:16:33', '2017-08-25 08:28:18'),
(14, 'Western Digital', 'https://www.wdc.com/region-selector/splash-region.html', NULL, NULL, 1, NULL, '2017-08-25 08:17:02', '2017-11-03 03:29:55'),
(15, 'Samsung', 'http://www.samsung.com/ph/', NULL, NULL, 1, NULL, '2017-08-25 08:17:06', '2017-08-25 08:27:22'),
(16, 'Seagate', 'http://www.seagate.com/as/en/', NULL, NULL, 1, NULL, '2017-08-25 08:17:39', '2017-08-25 08:27:07'),
(17, 'Toshiba', 'http://us.toshiba.com/', NULL, NULL, 1, NULL, '2017-08-25 08:18:55', '2017-08-25 08:30:53'),
(18, 'Hitachi', 'http://www.hitachi.com.ph/', NULL, NULL, 1, NULL, '2017-08-25 08:19:01', '2017-08-25 08:29:57'),
(19, 'SONY', 'http://www.sony.com.ph/', NULL, NULL, 1, NULL, '2017-08-25 08:19:31', '2017-08-25 08:28:53'),
(20, 'Kingston', 'http://www.kingston.com/en', NULL, NULL, 1, NULL, '2017-08-25 08:26:18', '2017-08-25 08:30:18'),
(21, 'Lenovo', 'http://www3.lenovo.com/ph/en', NULL, NULL, 1, NULL, '2017-08-25 08:28:41', '2017-08-25 08:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `inv_manufacturer_inv_type`
--

CREATE TABLE `inv_manufacturer_inv_type` (
  `inv_manufacturer_id` int(10) UNSIGNED NOT NULL,
  `inv_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inv_manufacturer_inv_type`
--

INSERT INTO `inv_manufacturer_inv_type` (`inv_manufacturer_id`, `inv_type_id`) VALUES
(1, 5),
(2, 5),
(3, 5),
(4, 2),
(5, 3),
(5, 4),
(6, 3),
(6, 4),
(7, 5),
(8, 8),
(9, 8),
(10, 2),
(14, 6),
(14, 13),
(15, 5),
(15, 6),
(16, 6),
(16, 13),
(17, 5),
(17, 6),
(18, 6),
(19, 5),
(20, 7);

-- --------------------------------------------------------

--
-- Table structure for table `inv_ownerships`
--

CREATE TABLE `inv_ownerships` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inv_ownerships`
--

INSERT INTO `inv_ownerships` (`id`, `name`, `added_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Purchased', 1, NULL, '2017-08-22 16:00:00', '2017-08-25 03:52:25'),
(2, 'Leased', 1, NULL, '2017-08-22 16:00:00', '2017-08-25 03:52:30'),
(3, 'Donated', 1, '2017-11-15 03:05:07', '2017-08-22 16:00:00', '2017-11-15 03:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `inv_states`
--

CREATE TABLE `inv_states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inv_states`
--

INSERT INTO `inv_states` (`id`, `name`, `added_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Deployed', 1, NULL, '2017-08-22 16:00:00', '2017-08-25 03:59:33'),
(2, 'For Replacement', 1, NULL, '2017-08-22 16:00:00', '2017-08-25 03:59:40'),
(3, 'Retired', 1, NULL, '2017-08-22 16:00:00', '2017-08-25 03:59:30'),
(4, 'Standby', 1, NULL, '2017-08-23 19:50:27', '2017-08-25 03:57:37'),
(5, 'For Turnover', 1, NULL, '2017-08-25 06:47:24', '2017-08-25 06:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `inv_suppliers`
--

CREATE TABLE `inv_suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inv_suppliers`
--

INSERT INTO `inv_suppliers` (`id`, `name`, `contact_number`, `added_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Datalink Technologies Incorporated', NULL, 1, NULL, '2017-08-30 01:54:13', '2017-08-30 01:54:23'),
(2, 'IECC', NULL, 1, NULL, '2017-08-30 02:23:32', '2017-08-30 02:23:32'),
(3, 'BCG', NULL, 1, NULL, '2017-08-30 02:23:37', '2017-08-30 02:23:37'),
(4, 'OCTAGON', NULL, 1, NULL, '2017-08-30 02:23:45', '2017-08-30 02:23:45'),
(5, 'Terranova', NULL, 1, NULL, '2017-08-30 02:24:03', '2017-08-30 02:24:03'),
(6, 'Unison', NULL, 1, NULL, '2017-11-03 03:46:29', '2017-11-03 03:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `inv_types`
--

CREATE TABLE `inv_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inv_types`
--

INSERT INTO `inv_types` (`id`, `name`, `added_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'AVR', 1, NULL, '2017-08-25 05:03:23', '2017-08-25 06:04:38'),
(2, 'UPS', 1, NULL, '2017-08-25 05:03:31', '2017-08-25 06:04:55'),
(3, 'Keyboard', 1, NULL, '2017-08-25 05:03:54', '2017-08-25 05:03:54'),
(4, 'Mouse', 1, NULL, '2017-08-25 05:04:08', '2017-08-25 05:04:08'),
(5, 'Monitor', 1, NULL, '2017-08-25 05:04:15', '2017-08-25 05:04:15'),
(6, 'Hard Disk Drive (HDD)', 1, NULL, '2017-08-25 05:04:20', '2017-08-25 05:09:19'),
(7, 'Memory Card', 1, NULL, '2017-08-25 05:04:23', '2017-08-25 05:04:23'),
(8, 'Printer', 1, NULL, '2017-08-25 05:04:42', '2017-08-25 05:04:42'),
(9, 'Motherboard', 1, NULL, '2017-08-25 05:04:56', '2017-08-25 05:04:56'),
(10, 'Video Card', 1, NULL, '2017-08-25 05:05:04', '2017-08-25 05:07:05'),
(11, 'Sound Card', 1, NULL, '2017-08-25 05:05:11', '2017-08-25 05:05:11'),
(12, 'Barcode Scanner', 1, NULL, '2017-08-25 05:05:33', '2017-08-25 05:14:58'),
(13, 'Solid State Drive (SSD)', 1, NULL, '2017-08-25 05:08:56', '2017-08-25 05:09:54'),
(14, 'Access Point', 1, NULL, '2017-08-25 05:33:50', '2017-11-07 09:36:28');

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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2017_08_23_034436_laratrust_setup_tables', 1),
(25, '2017_08_23_054544_create_inv_suppliers_table', 2),
(26, '2017_08_23_054605_create_inv_manufacturers_table', 2),
(27, '2017_08_23_054620_create_departments_table', 2),
(28, '2017_08_23_054632_create_inv_states_table', 2),
(29, '2017_08_23_054643_create_inv_ownerships_table', 2),
(30, '2017_08_25_125507_create_inv_types_table', 3),
(31, '2017_08_25_142957_create_inv_manufacturer_inv_type_table', 4),
(32, '2017_08_30_103351_create_inv_items_table', 5);

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'create', 'Create', 'Write Data', NULL, '2017-08-22 20:38:12', '2017-08-22 20:38:12'),
(2, 'read', 'Read', 'Read Data', NULL, '2017-08-22 20:38:12', '2017-08-22 20:38:12'),
(3, 'update', 'Update', 'Update Data', NULL, '2017-08-22 20:38:12', '2017-08-22 20:38:12'),
(4, 'delete', 'Delete', 'Delete Data', NULL, '2017-08-22 20:38:12', '2017-08-22 20:38:12'),
(5, 'add-user', 'Add User', 'Add New Administrator', NULL, '2017-08-22 20:38:13', '2017-08-22 20:38:13'),
(6, 'delete-user', 'Delete User', 'Delete Administrator', NULL, '2017-08-22 20:38:13', '2017-08-22 20:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'super', 'Super Administrator', 'God Mode', NULL, '2017-08-22 20:38:13', '2017-08-22 20:38:13'),
(2, 'admin', 'Administrator', 'Immortal', NULL, '2017-08-22 20:38:13', '2017-08-22 20:38:13'),
(3, 'staff', 'Staff', 'Mortal', NULL, '2017-08-22 20:38:13', '2017-08-22 20:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '008207', 'Marvin', 'Bentinganan', 'marvbentinganan@gmail.com', '$2y$10$FP50G59XTiIj.CVj21fkhOpMCnQkINUBlJFEG3QwYTW91CXPCJkxO', 'Zd3UdF1uFYX8Gw7JCnOZCAXD23GUMuI5YX6BZyzpNKuaCEOIDsiJfUID83eJ', NULL, '2017-08-22 20:38:13', '2017-08-22 20:38:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_items`
--
ALTER TABLE `inv_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Indexes for table `inv_manufacturers`
--
ALTER TABLE `inv_manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_manufacturer_inv_type`
--
ALTER TABLE `inv_manufacturer_inv_type`
  ADD PRIMARY KEY (`inv_manufacturer_id`,`inv_type_id`),
  ADD KEY `inv_manufacturer_inv_type_manufacturer_id_index` (`inv_manufacturer_id`),
  ADD KEY `inv_manufacturer_inv_type_type_id_index` (`inv_type_id`);

--
-- Indexes for table `inv_ownerships`
--
ALTER TABLE `inv_ownerships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_states`
--
ALTER TABLE `inv_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_suppliers`
--
ALTER TABLE `inv_suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_types`
--
ALTER TABLE `inv_types`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `inv_items`
--
ALTER TABLE `inv_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inv_manufacturers`
--
ALTER TABLE `inv_manufacturers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `inv_ownerships`
--
ALTER TABLE `inv_ownerships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `inv_states`
--
ALTER TABLE `inv_states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inv_suppliers`
--
ALTER TABLE `inv_suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `inv_types`
--
ALTER TABLE `inv_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `inv_manufacturer_inv_type`
--
ALTER TABLE `inv_manufacturer_inv_type`
  ADD CONSTRAINT `inv_manufacturer_inv_type_manufacturer_id_foreign` FOREIGN KEY (`inv_manufacturer_id`) REFERENCES `inv_manufacturers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inv_manufacturer_inv_type_type_id_foreign` FOREIGN KEY (`inv_type_id`) REFERENCES `inv_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
