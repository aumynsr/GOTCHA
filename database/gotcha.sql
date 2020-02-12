-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2020 at 09:50 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotcha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(100) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `username_admin`, `password_admin`) VALUES
(1, 'root_admin', 'root@admin.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `name_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `name_cat`) VALUES
(1, 'Bagket Bags'),
(2, 'Shoulder Bags'),
(3, 'Small Shoulder Bags'),
(4, 'Card Pocket'),
(5, 'Wallet Bags'),
(6, 'Clutch Bags');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id_color` int(11) NOT NULL,
  `name_color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id_color`, `name_color`) VALUES
(1, 'Sugar Brown'),
(2, 'Blue'),
(3, 'Black'),
(4, 'Grey'),
(5, 'Maroon'),
(6, 'Mustard'),
(7, 'Pink'),
(8, 'Vanilla Cream'),
(9, 'Beige'),
(10, 'Red'),
(11, 'White'),
(12, 'Yellow'),
(13, 'Light Nude'),
(14, 'Cream'),
(15, 'Khaki'),
(16, 'Charcoal'),
(17, 'Plum');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cus` int(11) NOT NULL,
  `name_cus` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_cus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cus`, `name_cus`, `email`, `password_cus`) VALUES
(1, 'root', 'root@gmail.com', '12345678'),
(2, 'khetkoong', 'khetkoong@gmail.com', '1234'),
(3, 'aaaa', 'iiii@gmail.com', 'ghfgh'),
(4, 'pppp', 'iiii@gmail.com', 'ghfgh'),
(5, 'rrrr', 'iiii@gmail.com', 'ghfgh'),
(6, 'eeeeeee', 'iiii@gmail.com', 'ghfgh'),
(7, 'eeeeeee', 'iiii@gmail.com', 'ghfgh'),
(8, 'fsdfs', 'root@gmail.com', 'ddddd'),
(9, 'fsdfs', 'root@gmail.com', 'ddddd'),
(10, 'fsdfs', 'root@gmail.com', 'ddddd'),
(11, 'sidjaksjd', 'root@gmail.com', 'iiiii');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_mem` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_pro` int(11) NOT NULL,
  `name_pro` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `id_cat` int(11) NOT NULL,
  `name_cat` varchar(100) NOT NULL,
  `color_pro` varchar(20) NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pro`, `name_pro`, `price`, `id_cat`, `name_cat`, `color_pro`, `total`) VALUES
(1, 'Naps Micro Fiber Grey', 1900, 1, 'Bagket Bags', '4', 21),
(2, 'Naps Micro Fiber Pink', 1900, 1, 'Bagket Bags', '7', 23),
(4, 'Leopold Black Crossbody', 1580, 1, 'Bagket Bags', '3', 43),
(5, 'LEOPOLD GREY CROSSBODY(2 สาย)', 1580, 1, 'Bagket Bags', '5', 25),
(6, 'LEOPOLD LIGHT NUDE CROSSBODY(2 สาย)', 1580, 1, 'Bagkwt Bags', '13', 34),
(7, 'Gotcha Mini Signature Crossbody Bag Light Grey', 1690, 1, 'Basket Bags', '4', 49),
(8, 'Passa Vanilla Cream Printed', 2070, 1, 'Basket Bags', '14', 20),
(9, 'PASSA BLACK PRINTED', 2070, 1, 'Basket Bags', '3', 37),
(10, 'PASSA GREY PRINTED', 2070, 1, 'Basket Bags', '4', 65),
(11, 'MOON TWO SIDED KHAKI', 1980, 1, 'Basket Bags', '15', 32),
(12, 'MOON TWO SIDED GREY', 1980, 1, 'Basket Bags', '4', 23),
(13, 'MOON TWO SIDED BLACK', 1980, 1, 'Basket Bags', '3', 33),
(14, 'MINI SIGNATURE CROSS BODY WHITE', 1200, 1, 'Basket Bags', '11', 35),
(15, 'MINI SIGNATURE CROSS BODY GREY', 1200, 1, 'Basket Bags', '4', 22),
(16, 'MINI SIGNATURE CROSS BODY KHAKI', 1200, 1, 'Basket Bags', '15', 23),
(17, 'MINI SIGNATURE CROSS BODY CHARCOAL', 1200, 1, 'Basket Bags', '16', 33),
(18, 'MINI SIGNATURE CROSS BODY BLACK', 1200, 1, 'Basket Bags', '3', 24),
(19, 'MOON TWO SIDED PLUM', 1980, 1, 'Basket Bags', '17', 21),
(23, 'GOTCHASUP PINK', 1690, 1, 'Basket Bags', '7', 53),
(24, 'GOTCHASUP BLACK', 1690, 1, 'Basket Bags', '3', 55),
(26, 'Gotcha Sa-I Bucket Bag Beige', 1980, 2, 'Shoulder Bags', '9', 34),
(27, 'Gotcha Sa-I Bucket Bag Grey', 1980, 2, 'Shoulder Bags', '4', 24),
(28, 'Gotcha Sa-I Bucket Bag Pink', 1980, 2, 'Shoulder Bags', '7', 24),
(29, 'Gotcha Sa-I Bucket Bag Black', 1980, 2, 'Shoulder Bags', '3', 22),
(30, 'Gotcha Be Good Tote Red', 495, 2, 'Shoulder Bags', '10', 30),
(31, 'GOTCHA BE GOOD TOTE WHITE', 495, 2, 'Shoulder Bags', '11', 24),
(32, 'GOTCHA BE GOOD TOTE BEIGE', 495, 2, 'Shoulder Bags', '9', 20),
(33, 'Gotcha Mu Gym Bag Grey', 1980, 2, 'Shoulder Bags', '4', 33),
(34, 'Gotcha Mu Gym Bag Pink', 1980, 2, 'Shoulder Bags', '7', 78),
(35, 'Gotcha Toteb Yellow', 395, 2, 'Shoulder Bags', '12', 25),
(38, 'Naps Micro Fiber White', 1900, 3, 'Small Shouder Bag', '11', 34),
(40, 'Leopold Grey Crossbody\r\n(2 สาย)', 1580, 3, 'Small Shouder Bag', '4', 41),
(44, 'Passa Black Printed', 2070, 3, 'Small Shouder Bag', '3', 36),
(45, 'Passa Grey Printed', 2070, 3, 'Small Shouder Bag', '4', 56),
(48, 'Gotcha Moon Two Sided Black', 1980, 3, 'Small Shouder Bag', '3', 23),
(51, 'Mini Signature Cross Body Khaki', 1200, 3, 'Small Shouder Bag', '15', 24),
(53, 'Mini Signature Cross Body Black', 1200, 3, 'Small Shouder Bag', '3', 32),
(54, 'Gotcha Moon Two Sided Plum', 1980, 3, 'Small Shouder Bag', '17', 33),
(55, 'Gotcha Moon Two Sided Grey', 1980, 3, 'Small Shouder Bag', '4', 35),
(57, 'GOTCHASUP Grey', 1690, 3, 'Small Shoulder Bags', '4', 22),
(59, 'GOTCHASUP Black', 1690, 3, 'Small Shoulder Bags', '3', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_mem`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_mem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
