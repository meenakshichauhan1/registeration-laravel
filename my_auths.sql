-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 10:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_auths`
--

CREATE TABLE `my_auths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_auths`
--

INSERT INTO `my_auths` (`id`, `created_at`, `updated_at`, `name`, `email`, `password`) VALUES
(1, '2024-02-09 23:59:24', '2024-02-09 23:59:24', 'dfdf', 'abc@gmail.cpom', '$2y$12$/Fme71xJSJU2frdqjZxvueuF6b8HkgU2mfMOskaQ1EJZ1ZcMJOU7S'),
(2, '2024-02-10 00:01:04', '2024-02-10 00:01:04', 'nj', 'abjmkkmc@gmail.cpom', '$2y$12$pdzidhyTeG3x3ND1yHnMN.3wjGPVptxoC4GXG1GdlV7Q/.FIK4NIS'),
(3, '2024-02-10 00:17:56', '2024-02-10 00:17:56', 'meenakshi', 'meenakshichauhan834@gmail.com', 'd6a63480a2d0ad587dfde678fb52f7e0'),
(4, '2024-02-10 00:21:34', '2024-02-10 00:21:34', 'gukh', 'ajhjbc@gmail.cpom', '$2y$12$gWOEtiKkqXx/Tv9MIoKHwOVINth7DRwyb7Wpv9apuSMy5VwtPVaz.'),
(5, '2024-02-10 00:34:49', '2024-02-10 00:34:49', 'MEENAKSHI', 'abc1@gmail.com', '$2y$12$E.1SL2k3k0gZAP99uquFoOW19IzdWyxCO5r3P3HCc9zN7l0WNWc8u'),
(6, '2024-02-10 00:45:45', '2024-02-10 00:45:45', 'meenakshi', 'm@gmail.com', '$2y$12$q7w2L3/aQCrwr.TMqB6AuOhC6ifKomnHTiKETWb08lm8UUlZfpA8G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_auths`
--
ALTER TABLE `my_auths`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_auths`
--
ALTER TABLE `my_auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
