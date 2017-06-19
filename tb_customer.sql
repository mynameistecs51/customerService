-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2017 at 03:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `xcustomer`
--

CREATE TABLE `xcustomer` (
  `id` int(11) UNSIGNED NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `country_code` varchar(5) DEFAULT NULL,
  `enabled` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xcustomer`
--

INSERT INTO `xcustomer` (`id`, `gender`, `first_name`, `last_name`, `email`, `phone`, `fax`, `country_code`, `enabled`, `created_at`, `updated_at`) VALUES
(4, 'M', 'chaiwat', 'chaiwat', 'te@gmail.com', '1234567890', '1234567890', '+66', 1, '2017-06-17 16:37:21', '2017-06-17 18:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `xproduct`
--

CREATE TABLE `xproduct` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `price_normal` decimal(10,0) UNSIGNED DEFAULT NULL,
  `price_sale` decimal(10,0) UNSIGNED DEFAULT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xcustomer`
--
ALTER TABLE `xcustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xproduct`
--
ALTER TABLE `xproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xcustomer`
--
ALTER TABLE `xcustomer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `xproduct`
--
ALTER TABLE `xproduct`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
