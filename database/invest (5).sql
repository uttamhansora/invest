-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 10:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invest`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Surat', 1, '2024-03-16 06:01:40', '2024-03-16 06:01:40'),
(2, 'Rajkot', 1, '2024-03-16 06:01:53', '2024-03-16 06:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'India', '2024-03-16 05:50:36', '2024-03-16 05:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `qrcode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subscription_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `amount`, `qrcode`, `status`, `date`, `created_at`, `updated_at`, `subscription_id`) VALUES
(1, '5', '500', '4', 'rejected', NULL, '2024-03-20 13:58:10', '2024-03-20 14:51:49', NULL),
(2, '5', '122', '4', 'rejected', NULL, '2024-03-20 14:56:11', '2024-03-20 14:58:13', NULL),
(3, '5', '22', '4', 'rejected', NULL, '2024-03-20 14:56:39', '2024-03-20 14:58:10', NULL),
(4, '5', '3', '4', 'rejected', NULL, '2024-03-20 14:57:05', '2024-03-20 14:58:07', NULL),
(5, '5', '10000', '4', 'approved', NULL, '2024-03-20 14:57:48', '2024-03-20 14:58:16', NULL),
(6, '5', '12000', '4', 'approved', NULL, '2024-03-20 15:01:12', '2024-03-20 15:01:20', NULL),
(7, '5', '25000', '4', 'approved', NULL, '2024-03-20 15:02:26', '2024-03-20 15:02:32', NULL),
(8, '5', '75000', '4', 'approved', NULL, '2024-03-20 15:02:56', '2024-03-20 15:03:02', NULL),
(9, '5', '20000', '4', 'approved', '2024-03-20 20:33:58', '2024-03-20 15:03:51', '2024-03-20 15:03:58', NULL),
(10, '5', '32000', '4', 'approved', '2024-03-21 02:05:55', '2024-03-20 20:35:48', '2024-03-20 20:35:55', NULL),
(11, '7', '5001', '4', 'approved', '2024-03-21 12:02:39', '2024-03-21 06:31:53', '2024-03-21 06:32:39', NULL),
(12, '7', '5002', '4', 'rejected', '2024-03-21 12:03:08', '2024-03-21 06:33:01', '2024-03-21 06:33:08', NULL),
(13, '7', '5002', '4', 'pending', NULL, '2024-03-21 06:46:39', '2024-03-21 06:46:39', NULL),
(14, '5', '10000', '4', 'approved', '2024-03-27 14:41:03', '2024-03-26 07:14:09', '2024-03-27 09:11:03', 3),
(15, '8', '10001', '4', 'approved', '2024-03-27 14:42:10', '2024-03-27 09:06:21', '2024-03-27 09:12:10', 2),
(16, '9', '50000', '4', 'approved', '2024-03-27 17:58:46', '2024-03-27 12:28:27', '2024-03-27 12:28:46', 1),
(17, '9', '200000', '4', 'approved', '2024-03-27 17:59:42', '2024-03-27 12:29:09', '2024-03-27 12:29:42', 1),
(18, '10', '6000', '4', 'approved', '2024-03-28 11:48:39', '2024-03-28 06:18:13', '2024-03-28 06:18:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `document_path` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `document_type` text DEFAULT NULL,
  `rejectreason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `document_path`, `status`, `created_at`, `updated_at`, `document_type`, `rejectreason`) VALUES
(4, '5', 'verification_documents/FTwYLxI2KRDHwX7jD42J0FyzAqv1kLRmypOsBIql.png', 'approve', '2024-04-15 06:31:22', '2024-04-15 06:42:31', 'passport', '');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_13_212038_create_qrcodes_table', 2),
(6, '2024_03_13_214952_create_subscriptons_table', 3),
(7, '2024_03_16_110052_create_countries_states_cities_tables', 4),
(8, '2024_03_20_192055_create_deposits_table', 5),
(9, '2024_03_21_021407_create_withdraws_table', 6),
(10, '2024_03_26_121807_create_sub_scriptions_table', 7),
(11, '2024_03_26_182618_create_notifications_table', 8),
(12, '2024_03_27_115100_create_user_amounts_table', 9),
(13, '2024_04_15_030938_create_documents_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notification` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `subscription_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_done` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notification`, `user_id`, `subscription_id`, `created_at`, `updated_at`, `is_done`) VALUES
(2, 'Data Subscription ends today', '5', '1', '2024-03-26 13:17:09', '2024-03-27 09:50:56', 2),
(5, 'Jay Subscription ends today', '8', '5', '2024-03-27 09:11:20', '2024-03-27 09:11:20', 1),
(6, 'Update Subscription ends today', '9', '6', '2024-03-27 12:30:36', '2024-03-27 12:31:16', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qrcodes`
--

CREATE TABLE `qrcodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `qrname` text DEFAULT NULL,
  `walletid` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qrcodes`
--

INSERT INTO `qrcodes` (`id`, `image`, `created_at`, `updated_at`, `qrname`, `walletid`) VALUES
(3, '1710885429_2invest.png', '2024-03-19 16:27:09', '2024-03-19 16:27:09', 'Test', 'parth@okicici'),
(4, '1710885429_2invest.png', '2024-03-19 16:27:09', '2024-03-19 16:27:09', 'Test 2', 'parth@okicici2'),
(5, '1712817161_qr-code.png', '2024-04-11 06:32:41', '2024-04-11 06:32:41', 'Test', 'parth@okicici');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Gujurat', 2, '2024-03-16 05:51:14', '2024-03-16 05:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptons`
--

CREATE TABLE `subscriptons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `min_amount` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptons`
--

INSERT INTO `subscriptons` (`id`, `created_by`, `is_active`, `name`, `details`, `created_at`, `updated_at`, `duration`, `min_amount`) VALUES
(1, '1', '1', 'Sub Scription 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-03-14 16:54:03', '2024-03-14 16:54:03', '1', '5000'),
(2, '1', '1', 'Test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-03-18 16:03:20', '2024-03-18 16:03:20', '1', '10000.00'),
(3, '1', '1', 'Data Entry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-03-20 12:32:37', '2024-03-20 12:32:37', '3', '10000.00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_scriptions`
--

CREATE TABLE `sub_scriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `subscription_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_end` varchar(255) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_scriptions`
--

INSERT INTO `sub_scriptions` (`id`, `user_id`, `start_date`, `end_date`, `subscription_id`, `created_at`, `updated_at`, `is_end`) VALUES
(1, '5', '2024-03-25', '2024-03-26', '3', '2024-03-26 07:04:31', '2024-03-27 09:10:11', 'yes'),
(2, '5', '2024-03-26', '2024-04-26', '2', '2024-03-26 12:18:27', '2024-03-26 12:18:27', 'no'),
(4, '5', '2024-03-26', '2024-04-26', '1', '2024-03-26 12:19:15', '2024-03-27 09:07:00', 'yes'),
(5, '8', '2024-03-27', '2024-03-27', '2', '2024-03-27 09:01:57', '2024-03-27 09:11:20', 'no'),
(6, '9', '2024-03-27', '2024-04-27', '1', '2024-03-27 12:27:47', '2024-03-27 12:27:47', 'no'),
(7, '9', '2024-03-27', '2024-03-27', '2', '2024-03-27 12:27:52', '2024-03-27 12:27:52', 'no'),
(8, '10', '2024-03-28', '2024-03-28', '1', '2024-03-28 05:53:56', '2024-03-28 05:53:56', 'no'),
(9, '10', '2024-03-28', '2024-03-28', '2', '2024-03-28 05:54:02', '2024-03-28 05:54:02', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 2 COMMENT '1 active 2 inactive',
  `is_banned` int(11) NOT NULL DEFAULT 1 COMMENT '1 approve 2 banned',
  `qrcode` text DEFAULT NULL,
  `current_plan` text DEFAULT NULL,
  `wallet_amount` int(11) NOT NULL DEFAULT 0,
  `withdraw_amount` int(11) NOT NULL DEFAULT 0,
  `qr_code_image` text DEFAULT NULL,
  `wallet_id` text DEFAULT NULL,
  `doc_verify` int(11) NOT NULL DEFAULT 0,
  `profile` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `last_name`, `mobile`, `country`, `state`, `city`, `is_active`, `is_banned`, `qrcode`, `current_plan`, `wallet_amount`, `withdraw_amount`, `qr_code_image`, `wallet_id`, `doc_verify`, `profile`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$jEAzSfbGYzYq5WRWAZAREuPzFG1Yisj0gJK.MAD1D6hkUdb7MrJem', '1', NULL, NULL, '2024-03-19 16:49:56', NULL, NULL, NULL, NULL, NULL, 2, 1, '4', NULL, 0, 0, NULL, NULL, 0, NULL),
(2, 'User', 'user@user.com', '$2y$10$jEAzSfbGYzYq5WRWAZAREuPzFG1Yisj0gJK.MAD1D6hkUdb7MrJem', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL, NULL, 0, 0, NULL, NULL, 0, NULL),
(3, 'Data', 'user@test.com', '$2y$12$SL6j4aOFSEvzkTravMySKeHqviO7TBCoSTFyyRdkh43sdnqr5mbAy', '2', NULL, '2024-03-18 14:22:49', '2024-03-19 16:49:31', 'Entry', '09775549352', '2', 1, 1, 2, 1, '3', NULL, 0, 0, NULL, NULL, 0, NULL),
(4, 'Data', 'user@new.com', '$2y$12$lscXDvKw4bKsn0yi/eugverXHjg4UClt81p5P72.Kfq0CzHYD6MnS', '2', NULL, '2024-03-18 14:23:57', '2024-03-19 16:46:55', 'Entry', '7359725476', '2', 1, 1, 2, 1, '5', NULL, 0, 0, NULL, NULL, 0, NULL),
(5, 'Data', 'user@news.com', '$2y$12$.ClHnH07ldUak1eok0Cx3ejk8BOKqCGY9UDlSGGOgsVawPqDAFSh6', '2', NULL, '2024-03-18 14:24:29', '2024-04-15 06:42:31', 'Entry', '7359725477', '2', 1, 1, 1, 1, '5', '2', 112000, 9902, '1712826231_qr-code.png', '6565', 0, NULL),
(6, 'Uttam', 'parthhansora26@gmail.com', '$2y$12$6eCumlDRnjk9PbgUPOVpkOvJITXoRnxUtMTE22ntc.HzFFJQZpd6m', '2', NULL, '2024-03-21 06:24:52', '2024-03-21 06:24:52', 'Hansora', '7598878487', '2', 1, 1, 2, 1, NULL, NULL, 0, 0, NULL, NULL, 0, NULL),
(7, 'Test New', 'new@test.com', '$2y$12$gijBLFyy9ev8KCHEp/CJX.RbJF5CP8tPbB8Kn6EOLuNfoAFVhPe92', '2', NULL, '2024-03-21 06:29:27', '2024-03-21 06:35:23', 'Data', '3265326532', '2', 1, 1, 1, 1, '4', '1', 4502, 0, '1711002847_1invest.png', 'test@newtest2122', 0, NULL),
(8, 'Jay', 'jay@gmail.com', '$2y$12$dKQpIrHoEkTh.52wy9ytbu7TdGsbzFnxOQwHmZgZX46dV/CbH2LXS', '2', NULL, '2024-03-27 07:09:10', '2024-03-27 09:18:35', 'Hans', '6598659865', '2', 1, 2, 1, 1, '4', NULL, 10001, 10500, '1711531080_202305020933python-course-overview.png', 'test@jsy', 0, NULL),
(9, 'Update', 'update@gmail.com', '$2y$12$0EszRPBWyjO/Qui7UT7fjuHHrfOLpapgzBo0/tfJUOJ4eT1y41Mja', '2', NULL, '2024-03-27 12:26:54', '2024-03-27 12:31:16', 'User', '6598659862', '2', 1, 2, 1, 1, '4', NULL, 250000, 250012, NULL, NULL, 0, NULL),
(10, 'Lorem', 'lorem@gmail.com', '$2y$12$3a3petgvdZQuuvHR8Yya1.KVroOS5GqfbbPHsPvSO/pEIIBgxxxhi', '2', NULL, '2024-03-28 05:53:29', '2024-03-28 06:18:39', 'Ipsum', '9887846500', '2', 1, 2, 1, 1, '4', NULL, 6000, 0, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_amounts`
--

CREATE TABLE `user_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `intrest` varchar(255) NOT NULL,
  `subscription_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_amounts`
--

INSERT INTO `user_amounts` (`id`, `user_id`, `amount`, `intrest`, `subscription_id`, `created_at`, `updated_at`) VALUES
(1, '5', '200', '100', '1', '2024-03-27 06:28:59', '2024-03-27 06:28:59'),
(2, '8', '10001', '499', '5', '2024-03-27 09:18:35', '2024-03-27 09:18:35'),
(3, '5', '10000', '200', '1', '2024-03-27 09:50:56', '2024-03-27 09:50:56'),
(4, '9', '250000', '12', '6', '2024-03-27 12:31:16', '2024-03-27 12:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `intrest` int(11) NOT NULL DEFAULT 0,
  `subscription_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `user_id`, `amount`, `status`, `date`, `created_at`, `updated_at`, `intrest`, `subscription_id`) VALUES
(1, '5', '700', 'rejected', '2024-03-21 03:07:51', '2024-03-20 20:46:48', '2024-03-20 21:37:51', 0, 0),
(2, '5', '2000', 'rejected', '2024-03-21 03:36:41', '2024-03-20 20:47:08', '2024-03-20 22:06:41', 0, 0),
(3, '5', '500', 'approved', '2024-03-21 03:35:45', '2024-03-20 20:55:26', '2024-03-20 22:05:45', 5, 0),
(4, '5', '52000', 'approved', '2024-03-21 03:39:14', '2024-03-20 22:08:14', '2024-03-20 22:09:14', 2000, 0),
(5, '7', '500', 'approved', '2024-03-21 12:05:23', '2024-03-21 06:34:33', '2024-03-21 06:35:23', 1, 0),
(6, '7', '4000', 'pending', NULL, '2024-03-21 06:42:19', '2024-03-21 06:42:19', 0, 0),
(7, '5', '54504', 'pending', NULL, '2024-03-26 12:50:14', '2024-03-26 12:50:14', 0, 0),
(8, '5', '500', 'pending', NULL, '2024-03-27 06:29:12', '2024-03-27 06:29:12', 0, 0),
(9, '5', '299', 'approved', '2024-03-27 12:35:31', '2024-03-27 06:30:39', '2024-03-27 07:05:31', 0, 0),
(10, '9', '250012', 'pending', NULL, '2024-03-27 12:50:39', '2024-03-27 12:50:39', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptons`
--
ALTER TABLE `subscriptons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_scriptions`
--
ALTER TABLE `sub_scriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_amounts`
--
ALTER TABLE `user_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qrcodes`
--
ALTER TABLE `qrcodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptons`
--
ALTER TABLE `subscriptons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_scriptions`
--
ALTER TABLE `sub_scriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_amounts`
--
ALTER TABLE `user_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
