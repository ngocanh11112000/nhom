-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 03:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `masanpham` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giasanpham` int(100) NOT NULL,
  `size` varchar(20) NOT NULL,
  `mausac` varchar(50) NOT NULL,
  `giamgia` int(100) NOT NULL,
  `soluongsanpham` int(100) NOT NULL,
  `motasanpham` varchar(2000) NOT NULL,
  `link_hinhanh` varchar(300) NOT NULL,
  `list_hinhanh` varchar(100) NOT NULL,
  `luotmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `masanpham`, `tensanpham`, `giasanpham`, `size`, `mausac`, `giamgia`, `soluongsanpham`, `motasanpham`, `link_hinhanh`, `list_hinhanh`, `luotmua`) VALUES
(1, 'sp1', 'váy', 10000, 'M', 'trắng', 500, 20, 'đẹp', 'ao1.jpg', '', 0),
(3, 'sp2', 'áo', 2000, 'M', 'đen', 200, 30, 'đẹp độc lạ', 'ao2.jpg', 'không có', 20),
(4, 'sp3', 'áo măng tô', 3000, 'L', 'xanh', 100, 200, 'rất thời trang', 'ao3.jpg', 'chưa cập nhật list', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
