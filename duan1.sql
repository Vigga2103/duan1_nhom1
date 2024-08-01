-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2024 at 12:21 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone_number` char(11) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `email`, `password`, `phone_number`, `gender`, `status`, `date_create`) VALUES
(4, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0392602235', 1, 1, '2024-07-08 23:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int NOT NULL,
  `cat_name` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `status`, `date_create`, `date_update`) VALUES
(15, 'Áo phông ngắn tay', 1, '2024-06-26 05:01:11', '2024-08-01 18:23:39'),
(33, 'Áo mùa đông', 1, '2024-07-03 12:03:57', NULL),
(42, 'Quần âu nam 2024', 1, '2024-07-08 14:15:39', NULL),
(43, 'Quần short', 1, '2024-07-08 14:26:47', '2024-08-01 18:38:17'),
(44, 'Áo phông Kim Chi Hàn Quốc', 1, '2024-07-08 16:30:12', '2024-08-01 18:39:07'),
(50, 'Quần bò Kim Chi Hàn Quắc', 1, '2024-08-01 18:38:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `col_id` int NOT NULL,
  `col_name` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`col_id`, `col_name`, `status`, `date_create`) VALUES
(1, 'Màu xám', 1, '2024-07-13 00:07:54'),
(4, 'Màu đen', 1, '2024-07-12 23:57:05'),
(5, 'Màu xanh', 1, '2024-08-01 18:15:10'),
(6, 'Màu Kaki', 1, '2024-08-01 18:15:27'),
(7, 'Màu xám khói', 1, '2024-08-01 18:15:47'),
(8, 'Màu xanh lá', 1, '2024-08-01 18:16:03'),
(9, 'Màu trắng', 1, '2024-08-01 18:34:54'),
(10, 'Màu hồng', 1, '2024-08-01 18:35:05'),
(11, 'Màu tím', 1, '2024-08-01 18:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ctm_id` int NOT NULL,
  `ctm_name` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` char(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone_number` char(11) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` tinyint DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `firt_name` varchar(25) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `last_name` varchar(25) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ctm_id`, `ctm_name`, `password`, `phone_number`, `email`, `gender`, `address`, `status`, `date_create`, `firt_name`, `last_name`) VALUES
(1, 'customer', 'e10adc3949ba59abbe56e057f20f883e', '0392602235', 'customer@gmail.com', 'Nam', 'Ngõ 91 Cầu Diễn, Nam Từ Liêm, Hà Nội', 1, '2024-07-08 23:22:21', 'Nguyễn', 'Kiên'),
(2, 'customer1', 'e10adc3949ba59abbe56e057f20f883e', '0392602235', 'khongbietchich123456@gmail.com', 'Nam', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 1, '2024-08-01 10:30:32', 'Phạm ', 'Nhật'),
(3, 'customer2', 'e10adc3949ba59abbe56e057f20f883e', '012499999', 'quyetchimbe@gmail.com', 'Nữ', 'Trực Đại -Trực Ninh - Nam Định', 1, '2024-08-01 10:39:00', 'Nguyễn', 'Quyết'),
(4, 'kienntph30557', 'e10adc3949ba59abbe56e057f20f883e', '0392602235', 'kientrymto@gmail.com', 'Đực', 'Trực Dại - Trực Ninh - Nam Định', 1, '2024-08-01 10:47:56', 'Nguyễn', 'Kiên'),
(5, 'truongtrimbe', 'e10adc3949ba59abbe56e057f20f883e', '0392602235', 'truongtrimbe@gmail.com', 'Nam', 'Trực Đại -Trực Ninh - Nam Định', 1, '2024-08-01 11:12:50', 'Phạm ', 'Trường');

-- --------------------------------------------------------

--
-- Table structure for table `factory`
--

CREATE TABLE `factory` (
  `fac_id` int NOT NULL,
  `fac_name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `factory`
--

INSERT INTO `factory` (`fac_id`, `fac_name`, `status`, `date_create`) VALUES
(1, 'Adidas', 1, '2024-07-02 15:20:02'),
(2, 'VL', 1, '2024-07-02 15:20:02'),
(3, 'Chanel', 1, '2024-07-02 15:20:02'),
(4, 'Dior', 1, '2024-07-02 15:20:02'),
(5, 'Puma', 1, '2024-07-13 00:09:00'),
(7, 'Việt Nam', 1, '2024-08-01 18:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `imges`
--

CREATE TABLE `imges` (
  `img_id` int NOT NULL,
  `link` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE `oder` (
  `oder_id` int NOT NULL,
  `ctm_id` int NOT NULL,
  `firt_name` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` char(11) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `date_create` datetime(1) DEFAULT NULL,
  `payment_id` int NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `odertotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`oder_id`, `ctm_id`, `firt_name`, `last_name`, `phone`, `email`, `address`, `description`, `date_create`, `payment_id`, `status`, `odertotal`) VALUES
(22, 0, 'Nguyễn', 'Kiên', '0392602235', 'khongbietchich123456@gmail.com', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'Demo 1', '2024-07-31 16:33:12.0', 1, 1, 18000000),
(23, 0, 'Nguyễn', 'Kiên', '0392602235', 'khongbietchich123456@gmail.com', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'vjnakvoqjoq', '2024-08-01 09:15:19.0', 3, 4, 27000000),
(24, 0, 'Nguyễn', 'Kiên', '0392602235', 'khongbietchich123456@gmail.com', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'gưehwhw4', '2024-08-01 09:15:36.0', 2, 4, 0),
(25, 0, 'Nguyễn', 'Kiên', '0392602235', 'khongbietchich123456@gmail.com', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'gưehwhw4', '2024-08-01 09:16:03.0', 2, 4, 0),
(26, 0, 'Nguyễn', 'Nhật', '01234567891', 'khongbietchich123456@gmail.com', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'vjnakvoqjoq', '2024-08-01 09:16:38.0', 1, 4, 15000000),
(27, 0, 'Nguyễn', 'Nhật', '0392602235', 'khongbietchich123456@gmail.com', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'gankgql', '2024-08-01 09:20:51.0', 1, 4, 30000000),
(28, 0, 'Nguyễn', 'Nhật', '0392602235', 'khongbietchich123456@gmail.com', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'gankgql', '2024-08-01 09:21:19.0', 1, 4, 0),
(29, 0, 'Nguyễn', 'Kiên', '0123456789', 'khongbietchich123456@gmail.com', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'vjnakvoqjoq', '2024-08-01 09:21:40.0', 1, 4, 0),
(30, 0, 'Nguyễn', 'Kiên', '0123456789', 'khongbietchich123456@gmail.com', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'vjnakvoqjoq', '2024-08-01 09:36:48.0', 1, 4, 0),
(31, 0, 'Nguyễn', 'Kiên', '0392602235', '0392602235', '99 Cầu Diễn - Nam Từ Liêm - Hà Nội', 'gankgql', '2024-08-01 09:38:12.0', 1, 4, 12000000),
(32, 0, 'Phạm ', 'Trường', '0392602235', 'khongbietchich123456@gmail.com', 'Trực Đại -Trực Ninh - Nam Định', 'r3rgegw', '2024-08-01 12:18:56.0', 1, 1, 115000000);

-- --------------------------------------------------------

--
-- Table structure for table `oder_detail`
--

CREATE TABLE `oder_detail` (
  `oder_detail_id` int NOT NULL,
  `oder_id` int NOT NULL,
  `pro_id` int NOT NULL,
  `price` float NOT NULL,
  `quantity` int NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `oder_detail`
--

INSERT INTO `oder_detail` (`oder_detail_id`, `oder_id`, `pro_id`, `price`, `quantity`, `status`, `date_create`) VALUES
(34, 31, 17, 3000000, 4, 0, '2024-08-01 09:38:12'),
(35, 32, 44, 23000000, 5, 0, '2024-08-01 12:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int NOT NULL,
  `payment_name` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_name`, `status`, `date_create`) VALUES
(1, 'COD', 1, '2024-07-31 15:51:20'),
(2, 'Bank', 1, '2024-07-31 15:51:40'),
(3, 'Momo', 1, '2024-07-31 15:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int NOT NULL,
  `pro_name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `cat_id` int NOT NULL,
  `size_id` int NOT NULL,
  `fac_id` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `price` float NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `col_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `cat_id`, `size_id`, `fac_id`, `images`, `price`, `description`, `status`, `date_create`, `col_id`) VALUES
(42, 'Áo ba lỗ Dead', 15, 12, '4', 'uploads/aobalodead.jpg', 23000000, 'HÀNG MỚI VỀ CHẤT LẮM ANH CHỊ EM ƠI', 1, '2024-08-01 18:28:01', 4),
(43, 'Áo ba lỗ 2024', 15, 10, '3', 'uploads/aobalomaukaki.jpg', 3000000, 'Hàng mới về anh chị em ơi chất khỏi nói', 1, '2024-08-01 18:29:36', 6),
(44, 'Áo phông Việt Nam 2024 Chất ', 15, 11, '2', 'uploads/aophongconchoxam.jpg', 23000000, 'Hàng Việt Nam chất lượng cao', 1, '2024-08-01 18:31:52', 1),
(45, 'Áo phông con chó', 15, 13, '7', 'uploads/aophonghaicongau.jpg', 23000000, 'Hàng Việt Nam chất lượng cao', 1, '2024-08-01 18:34:43', 7),
(46, 'Áo hodi Châu Phi', 33, 13, '3', 'uploads/aohodistar.jpg', 400000, 'Hàng Châu Phi chất lượng, to', 1, '2024-08-01 18:37:15', 1),
(49, 'Quần Kaki nam Kim Chi Hàn Quốc', 42, 12, '7', 'uploads/quankakivaikimchihanquoc.jpg', 1000000, 'Hàng bền đẹp ', 1, '2024-08-01 18:41:35', 6),
(50, 'Quần bò Kim Chi Hàn Quốc', 50, 10, '7', 'uploads/quanbodaikimchihanquoc.jpg', 5000000, 'Hàng này chất mn ạ', 1, '2024-08-01 18:43:26', 5),
(51, 'Quần short 2024', 43, 1, '2', 'uploads/quanshortxanhcoday.jpg', 500000, 'Hàng này hơi xấu', 1, '2024-08-01 18:44:09', 5),
(52, 'Quần short 2023', 43, 1, '1', 'uploads/quanshortnamden.jpg', 4500000, 'Hàng này là ghế vì nó k phải bàn', 1, '2024-08-01 18:45:14', 4),
(53, 'Áo somi Kim Chi Hàn Quắc', 44, 11, '2', 'uploads/aophongngandavid.jpg', 5340000, 'Nam phông to tôn dáng', 1, '2024-08-01 18:46:55', 5),
(54, 'Quần short quyến rũ', 43, 1, '5', 'uploads/quanduimaucamquyenru.jpg', 8000000, 'Chất khỏi phải bàn chị em nhìn là rụng trứng', 1, '2024-08-01 18:50:00', 10),
(55, 'Áo khoác mới về', 33, 12, '7', 'uploads/aokhoaccaocoxanhden.jpg', 5700000, 'Hàng Việt Nam chất lượng cao', 1, '2024-08-01 18:51:00', 5),
(57, 'Áo khoác trá hình', 33, 10, '7', 'uploads/aokhoactimfull.jpg', 10000000, 'Cho anh em mặc để đánh nhau với các chị em (áo này dành cho các thanh niên đàn bà)', 1, '2024-08-01 18:52:21', 11);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int NOT NULL,
  `size_name` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`, `status`, `date_create`) VALUES
(1, 'S', 1, '2024-07-07 16:22:46'),
(10, 'M', 1, '2024-07-07 16:24:32'),
(11, 'L', 1, '2024-07-07 16:24:43'),
(12, 'XL', 1, '2024-07-07 16:24:55'),
(13, 'XXL', 1, '2024-07-07 16:26:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`col_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ctm_id`);

--
-- Indexes for table `factory`
--
ALTER TABLE `factory`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `imges`
--
ALTER TABLE `imges`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`oder_id`);

--
-- Indexes for table `oder_detail`
--
ALTER TABLE `oder_detail`
  ADD PRIMARY KEY (`oder_detail_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `Fk_category_id` (`cat_id`),
  ADD KEY `Fk_size_id` (`size_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `col_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ctm_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `factory`
--
ALTER TABLE `factory`
  MODIFY `fac_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `imges`
--
ALTER TABLE `imges`
  MODIFY `img_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `oder_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `oder_detail`
--
ALTER TABLE `oder_detail`
  MODIFY `oder_detail_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `Fk_size_id` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
