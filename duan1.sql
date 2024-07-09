-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2024 at 09:27 AM
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
(10, 'Áo vest công sở', 1, '2024-06-26 02:45:34', NULL),
(15, 'Áo phông nam', 1, '2024-06-26 05:01:11', NULL),
(33, 'Áo mùa đông', 1, '2024-07-03 12:03:57', NULL),
(42, 'Quần âu nam 2024', 1, '2024-07-08 14:15:39', NULL),
(43, 'Quần short Nam', 1, '2024-07-08 14:26:47', NULL);

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
(1, 'Màu xám', 1, '2024-07-02 17:37:51');

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
(4, 'Dior', 1, '2024-07-02 15:20:02');

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int NOT NULL,
  `pro_name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `cat_id` int NOT NULL,
  `size_id` int NOT NULL,
  `fac_id` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `col_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `cat_id`, `size_id`, `fac_id`, `images`, `price`, `description`, `status`, `date_create`, `col_id`) VALUES
(1, 'Áo dạ nam kiểu dáng Hàn Quốc', 10, 1, 'Adidas', NULL, '23 000 000', 'bbee', 1, NULL, 1),
(2, 'Áo dạ nam kiểu dáng Hàn Quốc', 10, 1, 'Adidas', NULL, '23 000 000', 'bbee', NULL, NULL, 1),
(3, 'Áo dạ nam kiểu dáng Hàn Quốc', 10, 13, 'Adidas', NULL, '23 000 000', 'nrnwnwer', NULL, NULL, 1),
(4, 'Áo dạ nam kiểu dáng Hàn Quốc', 10, 13, 'Adidas', NULL, '23 000 000', 'nrnwnwer', NULL, NULL, 1),
(5, 'Áo dạ nam kiểu dáng Hàn Quốc', 10, 13, '2', NULL, '23 000 000', 'nrnwnwer', NULL, NULL, 1),
(6, 'Áo dạ nam kiểu dáng Hàn Quốc', 10, 13, '2', NULL, '23 000 000', 'nrnwnwer', NULL, NULL, 1),
(7, 'Áo dạ nam kiểu dáng Hàn Quốc', 10, 13, '2', NULL, '23 000 000', 'nrnwnwer', 1, '2024-07-08 13:42:57', 1),
(8, 'Áo dạ nam kiểu dáng Hàn Quốc', 15, 1, '1', NULL, '23 000 000', 'rgwhwhw', 1, '2024-07-08 13:43:08', 1),
(9, 'Áo dạ nam kiểu dáng Hàn Quốc', 15, 1, '1', NULL, '23 000 000', 'rgwhwhw', 1, '2024-07-08 13:53:58', 1),
(10, 'Áo Âu Nam', 42, 11, '2', NULL, '3 000 000', 'vểnne', 1, '2024-07-08 14:27:25', 1),
(11, 'Test 1', 10, 1, '2', 'uploads/ipat.jpg', '23 000 000', 'gưhwhw', 1, '2024-07-08 15:39:33', 1);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `col_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `factory`
--
ALTER TABLE `factory`
  MODIFY `fac_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `imges`
--
ALTER TABLE `imges`
  MODIFY `img_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
