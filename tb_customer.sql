-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 04:26 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `xcustomer` (
  `id` int(11) unsigned NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `country_code` varchar(5) DEFAULT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xcustomer`
--

INSERT INTO `xcustomer` (`id`, `gender`, `first_name`, `last_name`, `email`, `phone`, `fax`, `country_code`, `enabled`, `created_at`, `updated_at`) VALUES
(5, 'M', 'a', 'a', 'a@gmail.com', '1111111111', '111111111', '11111', 1, '2017-06-19 13:25:40', '2017-06-19 13:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `xproduct`
--

CREATE TABLE IF NOT EXISTS `xproduct` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `price_normal` decimal(10,0) unsigned DEFAULT NULL,
  `price_sale` decimal(10,0) unsigned DEFAULT NULL,
  `published` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xproduct`
--

INSERT INTO `xproduct` (`id`, `name`, `description`, `price_normal`, `price_sale`, `published`, `created_at`, `updated_at`) VALUES
(1, 'asdfa', 'asdf', '1', '1', 0, '2017-06-19 12:06:28', '2017-06-19 13:33:44'),
(2, 'asdfaaaaaa', 'asdf', '3333', '13333', 1, '2017-06-19 12:16:50', '2017-06-19 13:23:02');

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
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `xproduct`
--
ALTER TABLE `xproduct`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
