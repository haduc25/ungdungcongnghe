-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 21, 2023 at 08:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sp_mk15`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) NOT NULL,
  `ten_sp` varchar(255) DEFAULT NULL,
  `hinhanh_sp` varchar(255) DEFAULT NULL,
  `gia_sp` int(20) DEFAULT NULL,
  `ngaynhap_sp` date DEFAULT NULL,
  `id_loaisp` int(10) DEFAULT NULL,
  `mota_sp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `hinhanh_sp`, `gia_sp`, `ngaynhap_sp`, `id_loaisp`, `mota_sp`) VALUES
(1, 'Iphone5 s a', 'anh/anhnho.jpg', 200, '2023-02-01', 1, ''),
(3, 'Máy giặt', 'anh/anhnho1.jpg', 300, '2021-11-04', 1, 'Mô tả của sản phẩm sua'),
(4, 'san phẩm thêm ', 'anh/anhnho.jpg', 10000001, '2023-02-01', 2, ''),
(5, 'thêm 1 s', 'anh/anhnho.jpg', 100000, '2023-02-01', 3, ''),
(6, 'Thêm 2 s', 'anh/anhnho.jpg', 3000000, '2023-02-01', 3, ''),
(7, 'Thêm 3', 'anh/anhnho1.jpg', 20000, '2023-02-01', 1, ''),
(8, 'Thêm 4', 'anh/anhnho.jpg', 60000, '2021-11-04', 3, 'Mô tả của sản phẩm thêm 4'),
(9, 'Thêm 5', 'anh/anhnho.jpg', 3000000, '2021-10-29', 3, 'Mô tả của sản phẩm thêm 5'),
(10, 'them mới 1', 'anh/anhnho1.jpg', 10000000, '2022-03-14', 1, 'mô tả của thêm mới 1'),
(11, 'them moi 2', 'anh/anhnho1.jpg', 2000000, '2023-02-01', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
