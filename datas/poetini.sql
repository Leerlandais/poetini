-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: sql8614.phpnet.org:3306
-- Generation Time: Feb 24, 2024 at 09:35 AM
-- Server version: 10.6.17-MariaDB-1:10.6.17+maria~deb11-log
-- PHP Version: 7.3.31-1~deb10u5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2024_web_lee`
--

-- --------------------------------------------------------

--
-- Table structure for table `poetini`
--

CREATE TABLE `poetini` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_nom` varchar(50) NOT NULL,
  `user_prenom` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(25) DEFAULT NULL,
  `user_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poetini`
--

INSERT INTO `poetini` (`id`, `user_nom`, `user_prenom`, `user_email`, `user_phone`, `user_message`) VALUES
(1, 'Brennan', 'Lee', 'leerlandais@gmail.com', '0485753917', 'Test Message');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poetini`
--
ALTER TABLE `poetini`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poetini`
--
ALTER TABLE `poetini`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
