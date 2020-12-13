-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 12:15 PM
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
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `stt` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sl` int(50) NOT NULL,
  `tien` int(50) NOT NULL,
  `id_hd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `stt` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`stt`, `firstname`, `lastname`, `email`, `mobile`, `password`) VALUES
(78, 'Nguyễn Thị ', 'Thu', 'thu@gmail.com', 355214715, 'thu');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `stt` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` int(12) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tienhang` int(30) NOT NULL,
  `tongtien` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `thongtinshop`
--

CREATE TABLE `thongtinshop` (
  `stt` int(11) NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(15) NOT NULL,
  `phiship` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtinshop`
--

INSERT INTO `thongtinshop` (`stt`, `diachi`, `email`, `sodienthoai`, `phiship`) VALUES
(1, 'Số 54 - Triều Khúc - Thanh Xuân - Hà Nội', 'mangtoshop@gmail.com', 355214715, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `mangxahoi`
--
ALTER TABLE `mangxahoi`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongtinshop`
--
ALTER TABLE `thongtinshop`
  ADD PRIMARY KEY (`stt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mangxahoi`
--
ALTER TABLE `mangxahoi`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thongtinshop`
--
ALTER TABLE `thongtinshop`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
