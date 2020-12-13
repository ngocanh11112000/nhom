-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 08:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom8`
--

-- --------------------------------------------------------

--
-- Table structure for table `mangxahoi`
--

CREATE TABLE `mangxahoi` (
  `stt` int(11) NOT NULL,
  `twitter` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mangxahoi`
--

INSERT INTO `mangxahoi` (`stt`, `twitter`, `facebook`, `linkedin`, `instagram`, `youtube`) VALUES
(1, 'https://twitter.com/?lang=vi', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'https://www.youtube.com/watch?v=hWIF9kmTEV0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mangxahoi`
--
ALTER TABLE `mangxahoi`
  ADD PRIMARY KEY (`stt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mangxahoi`
--
ALTER TABLE `mangxahoi`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
