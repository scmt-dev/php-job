-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2022 at 04:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `date_start` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_end` timestamp NOT NULL DEFAULT current_timestamp(),
  `job_position` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_applies`
--

CREATE TABLE `job_applies` (
  `id` int(11) NOT NULL,
  `apply_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `inactive` tinyint(1) DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `type_name`, `inactive`, `create_at`, `update_at`) VALUES
(1, 'IT', 0, '2022-01-29 02:01:07', '2022-01-29 02:39:25'),
(3, 'Design', 0, '2022-01-29 02:01:35', '2022-01-29 03:33:57'),
(4, 'UX', 0, '2022-01-29 02:51:11', '2022-01-29 03:34:04'),
(5, 'Test', 1, '2022-01-29 02:51:18', '2022-01-29 02:51:33'),
(6, 'Hello', 1, '2022-01-29 02:51:27', '2022-01-29 02:51:31'),
(7, 'Example', 0, '2022-01-29 03:35:37', '2022-01-29 03:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `gender` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `gender`, `phone`, `email`, `username`, `password`, `fullname`, `role`, `company`, `birthday`, `address`, `create_at`, `update_at`) VALUES
(1641609684, 'M', '088869987', 'mark@gmail.com', 'mark', '12345', 'mark', 'user', NULL, '2005-02-01', 'Vientiane', '2022-01-08 02:41:24', '2022-01-08 02:41:24'),
(1641609902, 'M', '088869987', 'mark1@gmail.com', 'xxx', '$2y$10$Wks.0JkTR/odx/ue9F/O8eassQWbZycfC/gdoMTSvz1oWt9gaHOC2', 'mark', 'user', NULL, '2002-06-04', 'Vientiane', '2022-01-08 02:45:02', '2022-01-08 02:45:02'),
(1641610356, 'M', '088869987', 'test@gmail.com', 'test', '$2y$10$BlTZHzP9fqe9HH5kMwDzEO258SL4n9OBvlESy7OSBv43E6sxH/IHm', 'test', 'admin', NULL, '2022-01-05', 'Vientiane', '2022-01-08 02:52:36', '2022-01-29 03:50:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applies`
--
ALTER TABLE `job_applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
