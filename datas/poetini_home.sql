-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: sql8614.phpnet.org:3306
-- Generation Time: Feb 28, 2024 at 12:31 PM
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
-- Table structure for table `poetini_home`
--

CREATE TABLE `poetini_home` (
  `id` tinyint(4) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_text` varchar(1600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poetini_home`
--

INSERT INTO `poetini_home` (`id`, `image_src`, `image_title`, `image_text`) VALUES
(1, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/waltbenjamin_nopad.jpg', 'Walt Benjamin', 'Text1'),
(2, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/vivmaier_nopad.jpg', 'Viv Maier', 'Text2'),
(3, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/sanlucbert_nopad.jpg', 'San Lucbert', 'Text3'),
(4, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/jadelindgaard_nopad.jpg', 'Jade Lindgaard', 'Text4'),
(5, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/ireregnauld_nopad.jpg', 'Ire Regnauld', 'Text5'),
(6, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/fenetrexmas_nopad.jpg', 'Xmas Fenetre', 'Text6'),
(7, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/emihache_nopad.jpg', 'Emi Hache', 'Text7'),
(8, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/dambrohon_nopad.jpg', 'Dam Brohon', 'Text8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poetini_home`
--
ALTER TABLE `poetini_home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poetini_home`
--
ALTER TABLE `poetini_home`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
