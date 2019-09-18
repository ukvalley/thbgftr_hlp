-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 09:31 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `help`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, '9M9pYKvPz5CPPMF6n5ay08wQAzR6djSO', 1, '2018-03-17 00:49:14', '2018-03-17 00:49:14', '2018-03-17 00:49:14'),
(2, 2, 'nYF6oiaJCgfRCZHf4xLzfaI5qYRawhd5', 1, '2018-03-17 00:58:09', '2018-03-17 00:58:09', '2018-03-17 00:58:09'),
(3, 3, 'F6lmCrM5hkW4MpmIy7KvGM3qcCyVVADr', 1, '2018-03-21 12:12:05', '2018-03-21 12:12:05', '2018-03-21 12:12:05'),
(4, 4, 'RHNwUEn7zrEvMsnmRAlJojE3g2JfMIch', 1, '2018-03-21 12:24:22', '2018-03-21 12:24:22', '2018-03-21 12:24:22'),
(5, 5, 'CtqlZe2cmM5kgAxjCv3HgWeigMEcQbIA', 1, '2018-03-21 12:27:21', '2018-03-21 12:27:21', '2018-03-21 12:27:21'),
(6, 6, 'x2AQh3sMUc3gRv8pfwveg7j24SzvnlrH', 1, '2018-03-21 12:27:49', '2018-03-21 12:27:48', '2018-03-21 12:27:49'),
(7, 7, 'Z9EV6bLTeCcaF3eCo1fkx0UQWlo2RTdH', 1, '2018-03-21 12:29:45', '2018-03-21 12:29:44', '2018-03-21 12:29:45'),
(8, 8, 'vOdqS09T8I8QZgQyK7AIiQGl09RoxFto', 1, '2018-03-21 12:30:14', '2018-03-21 12:30:14', '2018-03-21 12:30:14'),
(9, 9, 'R6OS3vLDl8pcq3xcnIFUjPh3ZRBOEUsf', 1, '2018-03-21 12:46:32', '2018-03-21 12:46:32', '2018-03-21 12:46:32'),
(10, 10, 'YP2pdyzM0CSNVPy9yptYaMTgoruilXsv', 1, '2018-03-21 12:47:35', '2018-03-21 12:47:34', '2018-03-21 12:47:35'),
(11, 11, 'RDJDsqqJXFtt2Jy58NDFEgafaHHSgQKV', 1, '2018-03-24 12:13:50', '2018-03-24 12:13:50', '2018-03-24 12:13:50'),
(12, 12, 'rj0y0RsjgSoeaz1Dwq3iGfywEK9PMbM9', 1, '2018-03-24 12:14:55', '2018-03-24 12:14:55', '2018-03-24 12:14:55'),
(13, 13, '8uKhB5HuEMzTkdkcfkfYereXzmtnfmrv', 1, '2018-03-26 16:28:17', '2018-03-26 16:28:16', '2018-03-26 16:28:17'),
(14, 1, 'ErWVs73TIVjpj4PPHgeGgQxECi9LTfMf', 1, '2018-03-26 23:51:20', '2018-03-26 23:51:20', '2018-03-26 23:51:20'),
(15, 2, 'zs1cYjU6vMbq3vZbqHtfoFdWaHx7iBJq', 1, '2018-03-26 23:52:24', '2018-03-26 23:52:24', '2018-03-26 23:52:24'),
(16, 3, 'Ftwdv2tWAxgJkIysnlzzy4NmFlfDAWCd', 1, '2018-03-26 23:53:38', '2018-03-26 23:53:38', '2018-03-26 23:53:38'),
(17, 4, 'nuTtZan0z3eomN28FBBqyWTbZsbcKnEn', 1, '2018-03-26 23:54:54', '2018-03-26 23:54:54', '2018-03-26 23:54:54'),
(18, 5, 'SNqxG4i6n9wCqVdidg5jCfHcgCl2a498', 1, '2018-03-27 00:05:29', '2018-03-27 00:05:29', '2018-03-27 00:05:29'),
(19, 6, 'LDIVhBf35Pwx664kHPlutd87qmLQDy1B', 1, '2018-03-27 00:22:27', '2018-03-27 00:22:27', '2018-03-27 00:22:27'),
(20, 7, '0LM4XcrJc0I6KEc9wVv5INIjABPH2kmx', 1, '2018-03-27 00:28:59', '2018-03-27 00:28:59', '2018-03-27 00:28:59'),
(21, 8, '0izGBgX9ajbvanOBLPLji5LpIcu7YPWb', 1, '2018-03-27 00:30:58', '2018-03-27 00:30:58', '2018-03-27 00:30:58'),
(22, 1, 'K4HnprZBedmGBAjp1MgeOfuPqNWS0Ya8', 1, '2018-03-31 01:48:58', '2018-03-31 01:48:58', '2018-03-31 01:48:58'),
(23, 2, 'pMSd3553phvzfZsRbJswZckYlfKx95MX', 1, '2018-03-31 01:51:44', '2018-03-31 01:51:44', '2018-03-31 01:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `growth_withdrawal`
--

CREATE TABLE `growth_withdrawal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `growth_income` int(11) NOT NULL,
  `rejection_penalty` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `growth_withdrawal`
--

INSERT INTO `growth_withdrawal` (`id`, `user_id`, `growth_income`, `rejection_penalty`, `total_amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 300, 20, 320, '2018-03-23 13:15:31', '2018-03-23 13:15:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification_text` varchar(200) NOT NULL,
  `url` text NOT NULL,
  `is_seen` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0- not seen 1- seen',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `notification_text`, `url`, `is_seen`, `created_at`, `updated_at`) VALUES
(1, 2, 'Test Notification', 'NA', '1', '2018-03-26 13:08:31', '2018-03-26 21:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 2, 'D54H3gVo51cja2HYT9NsjLdJcUF26Jlv', '2018-03-13 23:56:42', '2018-03-13 23:56:42'),
(2, 1, 'OnPIl90jbPd6TyxfYphecx1kQAG5K31F', '2018-03-13 23:58:03', '2018-03-13 23:58:03'),
(3, 2, '2KNVWfn02H9U4YAKu4f2vN0V9BmWGFFv', '2018-03-13 23:58:59', '2018-03-13 23:58:59'),
(5, 3, 'bbipqeGct55PUdTPrs7Roq2sOYKz3RTb', '2018-03-14 12:21:40', '2018-03-14 12:21:40'),
(6, 1, '9HBzEVsmcfzFKgUGzCXkoeMn6YKUDwlH', '2018-03-14 12:32:31', '2018-03-14 12:32:31'),
(7, 4, 'SgbzYK5tlAir5Ccnq2WiJxqhI9ydKn3l', '2018-03-14 12:47:01', '2018-03-14 12:47:01'),
(9, 1, '0f7Byhyq4W1W8F6E0sv24wUUoNAKy9S9', '2018-03-16 00:50:16', '2018-03-16 00:50:16'),
(11, 1, '5w3PyMdt1YWjatobcdNPnv8Jz27A6TkG', '2018-03-16 00:55:25', '2018-03-16 00:55:25'),
(12, 1, '4NGTOfa7Wj3w0lNXpyphK5AH9W34cWYa', '2018-03-16 14:05:10', '2018-03-16 14:05:10'),
(13, 1, '0yKLiWfHmXHhWw9hJee3LMqWBG2ppZmo', '2018-03-17 00:40:34', '2018-03-17 00:40:34'),
(16, 2, '9lJOyZW1Na6GtwAW1EaPcmnVYec8L24A', '2018-03-17 00:58:37', '2018-03-17 00:58:37'),
(23, 2, 'gK4g6kk3x0zeOuVEYLfzFNx8LEYJQHOn', '2018-03-21 12:47:46', '2018-03-21 12:47:46'),
(24, 2, '8FUNBnuRCzS80G11U7YFIyQW4JE5HYZT', '2018-03-22 12:12:55', '2018-03-22 12:12:55'),
(25, 2, 'T8WeRYDx0fwKlzSdoHWNF4QGRKDsm3Ib', '2018-03-23 00:20:20', '2018-03-23 00:20:20'),
(27, 7, 'M1JXCtIqtBbIyISv7kwou3pJ584aXGdK', '2018-03-23 12:28:17', '2018-03-23 12:28:17'),
(29, 2, 'AHuxTQE0xoSNFyIy9MkgWGOZE2UjbXg0', '2018-03-24 11:49:10', '2018-03-24 11:49:10'),
(34, 2, 'ml5aFdOmK1qSHj8I0x0NxS6pOftXM8x0', '2018-03-24 12:29:52', '2018-03-24 12:29:52'),
(42, 2, 'E1A9jJ88H2SoQUphnhPvDIXYwFGv04Cr', '2018-03-24 12:47:19', '2018-03-24 12:47:19'),
(43, 2, 'RW9yix2mmWJPUlYiTsoyn3BzCpqmDJdb', '2018-03-25 23:34:50', '2018-03-25 23:34:50'),
(46, 2, 'BTrXtpRtX6eJ0DbY7p0EGr7thygnSdDt', '2018-03-26 16:28:25', '2018-03-26 16:28:25'),
(47, 2, 'Elgmby6DOEYHDJdTfOk2GSxZ0ZuFFRo1', '2018-03-26 20:47:16', '2018-03-26 20:47:16'),
(53, 2, 'QnQ4nuxc66uLHBFArH349pwXO840pEWo', '2018-03-26 21:50:04', '2018-03-26 21:50:04'),
(54, 1, 'D9gU0jtzBqEHEMgCEPuPNTdHQHXgdnT5', '2018-03-26 23:51:34', '2018-03-26 23:51:34'),
(55, 3, 'C2C3PTGZDH3vFbXSYPOhwArdYxE4ZeQQ', '2018-03-26 23:54:27', '2018-03-26 23:54:27'),
(56, 4, 'LsXoLfrncyXeDXUxMtldDEJ223z7D6Ly', '2018-03-27 00:03:48', '2018-03-27 00:03:48'),
(59, 5, 'SozEHvQYEMzrEKnvWgjtlkpfZHFJj044', '2018-03-27 00:29:36', '2018-03-27 00:29:36'),
(62, 6, 'aCvyaMe6pYU0JSF2wflQgo7GrzKHGPUi', '2018-03-28 02:18:01', '2018-03-28 02:18:01'),
(64, 1, 'cr5k4c5OFQ4kkkxhf604t1SJNDUofTPD', '2018-03-28 12:33:31', '2018-03-28 12:33:31'),
(66, 6, 'd42DhyknFJAA7mJXrdnr9UbZh1Ibbqkt', '2018-03-29 00:06:19', '2018-03-29 00:06:19'),
(67, 1, 'LtxD4kTGRxzqQ8EfzK6crZNUFz1mzjEb', '2018-03-29 00:25:17', '2018-03-29 00:25:17'),
(70, 1, 'M58nqiMndPBWQQBf78wVzr4kSKozZSRn', '2018-03-29 12:21:54', '2018-03-29 12:21:54'),
(72, 1, 'of2X3p1vu9NwPKedXaG72R51WbVEmyyV', '2018-03-29 12:55:44', '2018-03-29 12:55:44'),
(73, 6, '5KYoxA0EVvNj45DuIOrESkwSDG6zKTiy', '2018-03-30 12:06:39', '2018-03-30 12:06:39'),
(74, 6, 'Hjk7XNyY3RrAnLqxCJbtmu4T2Vzolf5h', '2018-03-30 12:20:59', '2018-03-30 12:20:59'),
(75, 6, 'NYbhRttq7ItUGlQ2P6OsGeokZPm1cdiD', '2018-03-31 00:16:00', '2018-03-31 00:16:00'),
(76, 1, 'brw7saCiSwEXi4x8ahZcgBD0LhcmGQ8T', '2018-03-31 01:49:37', '2018-03-31 01:49:37'),
(77, 2, 'lp6gcnmyo6lEqy5FYe5FuGMNHs0N155o', '2018-03-31 02:28:07', '2018-03-31 02:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2016-04-25 07:50:54', '2016-04-25 07:50:54'),
(2, 'employee', 'Employee', NULL, '2016-05-14 07:23:41', '2016-05-14 07:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, 0, 'global', NULL, '2018-03-29 12:55:30', '2018-03-29 12:55:30'),
(2, 0, 'ip', '::1', '2018-03-29 12:55:30', '2018-03-29 12:55:30'),
(3, 0, 'global', NULL, '2018-03-29 12:55:34', '2018-03-29 12:55:34'),
(4, 0, 'ip', '::1', '2018-03-29 12:55:34', '2018-03-29 12:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `spencer_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `spencer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `encrypt_password` text COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mobile number field for mobile number registration',
  `country` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(15) NOT NULL,
  `gender` enum('1','2') COLLATE utf8_unicode_ci NOT NULL COMMENT '1- Male 2- Female',
  `is_active` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '0-blocked 1-active',
  `token` text COLLATE utf8_unicode_ci COMMENT 'forgot password token',
  `is_email_verified` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('inprocess','hold','block','approved') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'inprocess',
  `package` int(11) NOT NULL,
  `bank_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bank_holder_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `account_no` bigint(30) NOT NULL,
  `branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `atm_card_no` bigint(30) NOT NULL,
  `ifsc_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `paytm_no` int(11) NOT NULL,
  `btc_address` text COLLATE utf8_unicode_ci NOT NULL,
  `receipt_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `joining_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `spencer_id`, `spencer_name`, `email`, `user_name`, `password`, `encrypt_password`, `permissions`, `last_login`, `mobile`, `country`, `state`, `city`, `zipcode`, `gender`, `is_active`, `token`, `is_email_verified`, `status`, `package`, `bank_name`, `bank_holder_name`, `account_no`, `branch`, `atm_card_no`, `ifsc_code`, `paytm_no`, `btc_address`, `receipt_file`, `joining_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', '', 'suraj@a.aa', 'Suraj', '$2y$10$IPtEHjoz4uDToXVHFOy.C./QIsNgSLqCrpRSkmS1Vvai6gFhCwCDy', '', NULL, '2018-03-31 01:49:37', '987654321', '', '', '', 0, '1', '0', NULL, '0', 'inprocess', 0, '', '', 0, '', 0, '', 0, '', '', NULL, '2018-03-31 01:48:58', '2018-03-31 01:49:37', NULL),
(2, '1', 'Suraj', 'abc@a.aa', 'Test User 1', '$2y$10$Bufvoy6n5LvDU.MKl9lFWuqgN/U5xVP7htIF8H900hXt4fzXBlvIa', '', NULL, '2018-03-31 02:28:08', '987654321', '', '', '', 0, '1', '0', NULL, '0', 'inprocess', 1000, '', '', 0, '', 0, '', 0, '', '152243669651033.jpg', NULL, '2018-03-31 01:51:44', '2018-03-31 03:04:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_withdrawal`
--

CREATE TABLE `work_withdrawal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `level_income` int(11) NOT NULL,
  `direct_income` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_withdrawal`
--

INSERT INTO `work_withdrawal` (`id`, `user_id`, `level_income`, `direct_income`, `total_amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 100, 100, 200, '2018-03-23 13:11:46', '2018-03-23 13:11:46', NULL),
(2, 7, 0, 0, 320, '2018-03-23 13:14:53', '2018-03-23 13:14:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `growth_withdrawal`
--
ALTER TABLE `growth_withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `work_withdrawal`
--
ALTER TABLE `work_withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `growth_withdrawal`
--
ALTER TABLE `growth_withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_withdrawal`
--
ALTER TABLE `work_withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
