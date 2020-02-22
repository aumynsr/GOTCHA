-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2020 at 12:11 PM
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
(1, 'root_admin', 'root@admin.com', '12345678'),
(9, 'vatinee_admin', 'vatinee@gmail.com', '112233');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_pro` int(11) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `cart_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `checklogis`
--

CREATE TABLE `checklogis` (
  `id_checklogis` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `checkpay`
--

CREATE TABLE `checkpay` (
  `id_checkpay` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(17, 'Plum'),
(18, 'Navy Blue'),
(20, 'LightGrey');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id_dealer` int(10) NOT NULL,
  `name_dealer` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id_dealer`, `name_dealer`, `address`) VALUES
(1, 'vatinee', '22/33 dindan ');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id_delivery` int(20) NOT NULL,
  `name_delivery` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ems` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id_delivery`, `name_delivery`, `phone`, `address`, `zip`, `status`, `ems`) VALUES
(1, 'asdf', '0876555632', 'asdf', 'asdf', 'packing', ''),
(2, 'aaa', '2147483647', 'asdf', '10000', 'packing', ''),
(3, 'fdasf', '+6691924099', 'asdf', '11111', 'packing', ''),
(4, 'fdasf', '+6691924099', 'asdf', '11111', 'packing', ''),
(5, 'asdf', '08654453', 'asdf', '', 'packing', ''),
(6, 'asdf', '096645234', 'asdf', '', 'packing', ''),
(7, 'asdf', '0634567898', 'asdf', '', 'packing', ''),
(8, 'asdf', '0965443546', 'asdf', '', 'packing', 'EE111111111EE'),
(9, 'asdf', '0654542334', 'asdf', '', 'packing', ''),
(10, 't', '+6691924099', '', '10000', 'packing', ''),
(11, 'asdf', '+6691924099', '11', '11111', 'packing', ''),
(12, 'asdf', '+6691924099', '11', '11111', 'packing', ''),
(13, 'asdf', 'p', 'fg', '11111', 'packing', ''),
(14, 'asdf', 'p', 'fg', '11111', 'packing', ''),
(15, 'asdf', 'p', 'ff', '1111', 'packing', ''),
(16, '', '', '', '', 'packing', ''),
(17, '', '', '', '', 'packing', ''),
(18, 'asdf', 'sdf', 'sdf', '11111', 'packing', ''),
(19, 'Sangsom Zaza', '0938413168', '1 ถนน เกษมราษฎร์', '10110', 'packing', ''),
(20, 'Sangsom Zaza', '0938413168', '1 ถนน เกษมราษฎร์', '10110', 'packing', ''),
(21, 'tip', 'tip', 'tip', '11111', 'packing', ''),
(22, 'Sangsom Zaza', '0938413168', '1 ถนน เกษมราษฎร์', '10110', 'packing', ''),
(23, 'rrte', '000000000000', 'อาจณรงค์', '10110', 'packing', ''),
(24, 'Sangsom Zaza', '0938413168', '1 ถนน เกษมราษฎร์', '10110', 'packing', ''),
(25, 'Sangsom Zaza', '0938413168', '1 ถนน เกษมราษฎร์', '10110', 'packing', '111111'),
(26, 'Sangsom Zaza', '0938413168', '1 ถนน เกษมราษฎร์', '10110', 'packing', ''),
(27, 'Sangsom Zaza', '0938413168', '1 ถนน เกษมราษฎร์', '10110', 'packing', 'EE123456789EE');

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(20) NOT NULL,
  `id_cus` int(20) NOT NULL,
  `address` int(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_payment` int(20) NOT NULL,
  `total` int(50) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_cus`, `address`, `status`, `id_payment`, `total`, `createDate`, `remark`) VALUES
(14, 0, 0, 'paid', 14, 2555, '2020-02-18 09:34:26', ''),
(15, 1, 0, 'paid', 15, 2555, '2020-02-18 09:34:26', ''),
(16, 1, 0, 'cancel', 16, 2555, '2020-02-18 09:34:26', ''),
(17, 1, 0, 'paid', 17, 2555, '2020-02-18 09:34:26', ''),
(18, 1, 0, 'paid', 18, 2555, '2020-02-18 09:34:26', ''),
(19, 1, 0, 'paid', 19, 2555, '2020-02-18 09:34:26', ''),
(20, 1, 0, 'paid', 20, 2555, '2020-02-18 09:34:26', ''),
(21, 1, 0, 'paid', 21, 2555, '2020-02-18 09:34:26', ''),
(22, 1, 0, 'paid', 22, 2555, '2020-02-18 09:34:26', ''),
(23, 1, 0, 'paid', 23, 2555, '2020-02-18 09:34:26', ''),
(24, 1, 0, 'paid', 24, 2555, '2020-02-18 09:34:26', ''),
(25, 1, 0, 'paid', 25, 2555, '2020-02-18 09:34:26', ''),
(26, 1, 0, 'paid', 26, 2555, '2020-02-18 09:34:26', ''),
(27, 12, 0, 'paid', 27, 2555, '2020-02-18 09:34:26', ''),
(28, 12, 0, 'paid', 28, 2555, '2020-02-18 09:34:26', ''),
(29, 12, 1, 'paid', 29, 1900, '2020-02-18 09:34:26', ''),
(30, 12, 2, 'paid', 30, 1900, '2020-02-18 09:34:26', ''),
(31, 12, 3, 'paid', 31, 1900, '2020-02-18 09:34:26', ''),
(32, 12, 4, 'paid', 32, 1900, '2020-02-18 09:34:26', ''),
(33, 12, 5, 'paid', 33, 1900, '2020-02-18 09:34:26', ''),
(34, 12, 6, 'paid', 34, 1900, '2020-02-18 09:34:26', ''),
(35, 12, 7, 'cancel', 35, 1900, '2020-02-18 09:34:26', 'asdf'),
(36, 12, 8, 'delivery', 36, 1900, '2020-02-18 09:34:26', ''),
(37, 12, 9, 'delivery', 37, 1900, '2020-02-18 09:34:26', ''),
(38, 12, 10, 'delivery', 38, 1580, '2020-02-18 09:34:26', ''),
(39, 12, 11, 'delivery', 39, 1200, '2020-02-18 09:34:26', ''),
(40, 12, 12, 'delivery', 40, 1200, '2020-02-18 09:34:26', ''),
(41, 12, 13, 'delivery', 41, 1900, '2020-02-18 09:34:26', ''),
(42, 12, 14, 'cancel', 42, 1900, '2020-02-18 09:34:26', 'sdfsdfds'),
(43, 12, 15, 'cancel', 43, 1900, '2020-02-18 09:34:26', 'Array'),
(44, 12, 16, 'cancel', 44, 1900, '2020-02-18 09:34:26', ''),
(45, 12, 17, 'cancel', 45, 1900, '2020-02-18 09:34:57', ''),
(46, 12, 18, 'cancel', 46, 1900, '2020-02-18 09:36:04', ''),
(47, 12, 19, 'cancel', 47, 3960, '2020-02-19 10:25:26', ''),
(48, 12, 20, 'delivery', 48, 3960, '2020-02-19 10:26:10', ''),
(49, 12, 21, 'delivery', 49, 1980, '2020-02-19 11:05:00', ''),
(50, 12, 22, 'delivery', 50, 1900, '2020-02-20 07:27:58', ''),
(51, 12, 23, 'cancel', 51, 1900, '2020-02-20 09:51:26', 'qwe'),
(52, 12, 24, 'delivery', 52, 1900, '2020-02-20 11:13:16', ''),
(53, 1, 25, 'cancel', 53, 1900, '2020-02-22 10:18:51', 'การชำระเงินไม่ถูกต้อง'),
(54, 1, 26, 'delivery', 54, 3800, '2020-02-22 11:30:51', ''),
(55, 12, 27, 'delivery', 55, 1900, '2020-02-22 11:47:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id_pro` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `order_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id_pro`, `order_id`, `order_total`) VALUES
(1, 15, 7),
(1, 16, 7),
(2, 16, 5),
(4, 16, 4),
(6, 16, 4),
(7, 16, 1),
(8, 16, 4),
(1, 17, 7),
(2, 17, 5),
(4, 17, 4),
(6, 17, 4),
(7, 17, 1),
(8, 17, 4),
(1, 18, 2),
(2, 18, 1),
(4, 18, 1),
(1, 27, 9),
(2, 27, 2),
(4, 27, 1),
(6, 27, 1),
(1, 28, 1),
(1, 30, 1),
(1, 31, 1),
(2, 31, 1),
(1, 33, 1),
(2, 33, 1),
(1, 38, 1),
(2, 38, 1),
(4, 38, 1),
(1, 39, 3),
(2, 39, 3),
(4, 39, 2),
(5, 39, 1),
(16, 39, 1),
(2, 41, 1),
(2, 43, 1),
(2, 44, 1),
(2, 45, 1),
(2, 46, 1),
(1, 47, 2),
(2, 47, 1),
(26, 47, 2),
(1, 49, 1),
(2, 49, 1),
(19, 49, 1),
(1, 50, 1),
(1, 51, 1),
(1, 52, 1),
(1, 53, 1),
(1, 54, 2),
(2, 54, 2),
(1, 55, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(20) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `slip` varchar(20) NOT NULL,
  `order_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `bank`, `slip`, `order_id`) VALUES
(14, 'kasikornbank', 'abc.jpg', 14),
(15, 'kasikornbank', 'abc.jpg', 15),
(16, 'kasikornbank', 'abc.jpg', 16),
(17, 'kasikornbank', 'abc.jpg', 17),
(18, 'kasikornbank', 'abc.jpg', 18),
(19, 'kasikornbank', 'abc.jpg', 19),
(20, 'kasikornbank', 'abc.jpg', 20),
(21, 'kasikornbank', 'abc.jpg', 21),
(22, 'kasikornbank', 'abc.jpg', 22),
(23, 'kasikornbank', 'abc.jpg', 23),
(24, 'kasikornbank', 'abc.jpg', 24),
(25, 'kasikornbank', 'abc.jpg', 25),
(26, 'kasikornbank', 'abc.jpg', 26),
(27, 'SCB Businessnet', 'abc.jpg', 27),
(28, 'Bangkok Bank', 'abc.jpg', 28),
(29, 'Bangkok Bank', 'abc.jpg', 29),
(30, 'Government Savings Bank', 'abc.jpg', 30),
(31, 'SCB Businessnet', 'abc.jpg', 31),
(32, 'SCB Businessnet', 'abc.jpg', 32),
(33, 'Government Savings Bank', 'abc.jpg', 33),
(34, 'Government Savings Bank', 'abc.jpg', 34),
(35, 'Government Savings Bank', 'abc.jpg', 35),
(36, 'Government Savings Bank', 'abc.jpg', 36),
(37, 'Government Savings Bank', '1.jpg', 37),
(38, 'SCB Businessnet', '2.jpg', 38),
(39, 'SCB Businessnet', 'Chrysanthemum.jpg', 39),
(40, 'SCB Businessnet', 'Chrysanthemum.jpg', 40),
(41, 'SCB Businessnet', 'Chrysanthemum.jpg', 41),
(42, 'SCB Businessnet', 'Chrysanthemum.jpg', 42),
(43, 'Bangkok Bank', 'Desert.jpg', 43),
(44, '', '', 44),
(45, '', '', 45),
(46, 'SCB Businessnet', 'Koala.jpg', 46),
(47, 'SCB Businessnet', '1.jpg', 47),
(48, 'SCB Businessnet', '1.jpg', 48),
(49, 'Government Savings Bank', 'g3.jpg', 49),
(50, 'Krungthai Bank', 'g5.jpg', 50),
(51, 'Kasikorn Bank', 'g3.jpg', 51),
(52, '', '', 52),
(53, 'SCB Businessnet', 'g3.jpg', 53),
(54, 'SCB Businessnet', 'g4.jpg', 54),
(55, 'Kasikorn Bank', 'g1.jpg', 55);

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
  `total` int(5) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `size` varchar(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `dealer_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pro`, `name_pro`, `price`, `id_cat`, `name_cat`, `color_pro`, `total`, `pic`, `detail`, `size`, `material`, `dealer_price`) VALUES
(1, 'Naps Micro Fiber Grey', 1900, 1, 'Bagket Bags', '4', 47, 'gotcha/got7.jpg', 'สามารถใส่ของจุกจิก,เงิน,บัตร,กุญแจ,แป้งพับ', 'Mini', 'Pu leather', 0),
(2, 'Naps Micro Fiber Pink', 1900, 1, 'Bagket Bags', '7', 68, 'gotcha/got12.jpg', 'สามารถใส่ของจุกจิก,เงิน,บัตร,กุญแจ,แป้งพับ', 'Mini', 'Pu leather', 0),
(4, 'Leopold Black Crossbody', 1580, 1, 'Bagket Bags', '3', 43, 'gotcha/got8.jpg', 'สามารถใส่ของจุกจิก,เงิน,บัตร,กุญแจ,แป้งพับ,ลิปสติก', 'Mini', 'Pu leather', 0),
(5, 'LEOPOLD GREY CROSSBODY(2 สาย)', 1580, 1, 'Bagket Bags', '5', 25, 'gotcha/got9.jpg', 'สามารถใส่ของจุกจิก,เงิน,บัตร,กุญแจ,แป้งพับ,ลิปสติก', 'Mini', 'Pu leather', 0),
(6, 'LEOPOLD LIGHT NUDE CROSSBODY(2 สาย)', 1580, 1, 'Bagket Bags', '13', 34, 'gotcha/got11.jpg', 'สามารถใส่ของจุกจิก,เงิน,บัตร,กุญแจ,แป้งพับ,ลิปสติก', 'Mini', 'Pu leather', 0),
(7, 'Gotcha Mini Signature Crossbody Bag Light Grey', 1690, 1, 'Bagket Bags', '4', 49, 'gotcha/got58.jpg', 'สามารถใส่ของจุกจิก,เงิน,บัตร,กุญแจ,แป้งพับ,ลิปสติก', 'Normal', 'Pu leather', 0),
(8, 'Passa Vanilla Cream Printed', 2070, 1, 'Bagket Bags', '14', 24, 'gotcha/got14.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Normal', 'Pu leather', 0),
(9, 'PASSA BLACK PRINTED', 2070, 1, 'Bagket Bags', '3', 37, 'gotcha/got15.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Normal', 'Pu leather', 0),
(10, 'PASSA GREY PRINTED', 2070, 1, 'Bagket Bags', '4', 65, 'gotcha/got16.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Normal', 'Pu leather', 0),
(11, 'MOON TWO SIDED KHAKI', 1980, 1, 'Bagket Bags', '15', 32, 'gotcha/got18.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Normal', 'Pu leather', 0),
(12, 'MOON TWO SIDED GREY', 1980, 1, 'Bagket Bags', '4', 23, 'gotcha/got19.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Normal', 'Pu leather', 0),
(13, 'MOON TWO SIDED BLACK', 1980, 1, 'Bagket Bags', '3', 33, 'gotcha/got20.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Normal', 'Pu leather', 0),
(14, 'MINI SIGNATURE CROSS BODY WHITE', 1200, 1, 'Bagket Bags', '11', 35, 'gotcha/got23.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Mini', 'Pu leather', 0),
(15, 'MINI SIGNATURE CROSS BODY GREY', 1200, 1, 'Bagket Bags', '4', 22, 'gotcha/got25.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Mini', 'Pu leather', 0),
(16, 'MINI SIGNATURE CROSS BODY KHAKI', 1200, 1, 'Bagket Bags', '15', 23, 'gotcha/got24.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Mini', 'Pu leather', 0),
(17, 'MINI SIGNATURE CROSS BODY CHARCOAL', 1200, 1, 'Bagket Bags', '16', 33, 'gotcha/got27.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Mini', 'Pu leather', 0),
(18, 'MINI SIGNATURE CROSS BODY BLACK', 1200, 1, 'Basket Bags', '3', 24, 'gotcha/got28.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Mini', 'Pu leather', 0),
(19, 'MOON TWO SIDED PLUM', 1980, 1, 'Bagket Bags', '17', 26, 'gotcha/got28.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Normal', 'Pu leather', 0),
(23, 'GOTCHASUP PINK', 1690, 1, 'Bagket Bags', '7', 53, 'gotcha/got38.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Normal', 'Pu leather', 0),
(24, 'GOTCHASUP BLACK', 1690, 1, 'Bagket Bags', '3', 55, 'gotcha/got39.jpg', 'สามารถใส่กระเป๋าเงินใบยาวได้ ใส่โทรศัพท์ iphone plus ได้', 'Normal', 'Pu leather', 0),
(26, 'Gotcha Sa-I Bucket Bag Beige', 1980, 2, 'Shoulder Bags', '9', 32, 'gotcha/b1.jpg', 'กระเป๋าสะพายไหล่ สำหรับสาวๆที่ชอบพกของเยอะ สามารถใส่ไอแพททุกขนาด คอมพิมเตอร์ขนาด13นิ้ว', 'Big', 'Pu leather', 0),
(27, 'Gotcha Sa-I Bucket Bag Grey', 1980, 2, 'Shoulder Bags', '4', 24, 'gotcha/b2.jpg', 'กระเป๋าสะพายไหล่ สำหรับสาวๆที่ชอบพกของเยอะ สามารถใส่ไอแพททุกขนาด คอมพิมเตอร์ขนาด13นิ้ว', 'Big', 'Pu leather', 0),
(28, 'Gotcha Sa-I Bucket Bag Pink', 1980, 2, 'Shoulder Bags', '7', 24, 'gotcha/b3.jpg', 'กระเป๋าสะพายไหล่ สำหรับสาวๆที่ชอบพกของเยอะ สามารถใส่ไอแพททุกขนาด คอมพิมเตอร์ขนาด13นิ้ว', 'Big', 'Pu leather', 0),
(29, 'Gotcha Sa-I Bucket Bag Black', 1980, 2, 'Shoulder Bags', '3', 22, 'gotcha/b4.jpg', 'กระเป๋าสะพายไหล่ สำหรับสาวๆที่ชอบพกของเยอะ สามารถใส่ไอแพททุกขนาด คอมพิมเตอร์ขนาด13นิ้ว', 'Big', 'Pu leather', 0),
(30, 'Gotcha Be Good Tote Red', 495, 2, 'Shoulder Bags', '10', 30, 'gotcha/b5.jpg', 'กระเป๋าสะพายไหล่ สำหรับสาวๆที่ชอบพกของเยอะ สามารถใส่ไอแพททุกขนาด คอมพิมเตอร์ขนาด13นิ้ว', 'Big', 'Fabric', 0),
(31, 'GOTCHA BE GOOD TOTE WHITE', 495, 2, 'Shoulder Bags', '11', 24, 'gotcha/b6.jpg', 'กระเป๋าสะพายไหล่ สำหรับสาวๆที่ชอบพกของเยอะ สามารถใส่ไอแพททุกขนาด คอมพิมเตอร์ขนาด13นิ้ว', 'Big', 'Fabric', 0),
(32, 'GOTCHA BE GOOD TOTE BEIGE', 495, 2, 'Shoulder Bags', '9', 20, 'gotcha/b7.jpg', 'กระเป๋าสะพายไหล่ สำหรับสาวๆที่ชอบพกของเยอะ สามารถใส่ไอแพททุกขนาด คอมพิมเตอร์ขนาด13นิ้ว', 'Big', 'Fabric', 0),
(33, 'Gotcha Mu Gym Bag Grey', 1980, 2, 'Shoulder Bags', '4', 33, 'gotcha/b8.jpg', 'กระเป๋าสำหรับสาวแอคทีฟที่พร้อมออกกำลังกาย', 'Big', 'Pu leather', 0),
(34, 'Gotcha Mu Gym Bag Pink', 1980, 2, 'Shoulder Bags', '7', 78, 'gotcha/b9.jpg', 'กระเป๋าสำหรับสาวแอคทีฟที่พร้อมออกกำลังกาย', 'Big', 'Pu leather', 0),
(35, 'Gotcha Toteb Yellow', 395, 2, 'Shoulder Bags', '12', 25, 'gotcha/b10.jpg', 'กระเป๋าสะพายไหล่ สำหรับสาวๆที่ชอบพกของเยอะ ใส่หนังสือเรียน', 'Big', 'Fabric', 0),
(38, 'Gotcha Huncha Cardholder Fur Black', 375, 4, 'Card Pocket', '3', 34, 'gotcha/w5.jpg', 'กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(40, 'Gotcha Huncha Cardholder Fur Grey', 375, 4, 'Card Pocket', '4', 41, 'gotcha/w6.jpg', 'กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(44, 'Gotcha Huncha Cardholder Fur Maroon', 375, 4, 'Card Pocket', '5', 36, 'gotcha/w7.jpg', 'กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(45, 'Gotcha Huncha Cardholder Fur Navy Blue', 375, 4, 'Card Pocket', '18', 56, 'gotcha/w8.jpg', 'กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(48, 'Gotcha Huncha Cardholder Printed Black', 375, 4, 'Card Pocket', '3', 23, 'gotcha/w17.jpg', 'กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(49, 'Gotcha Huncha Cardholder Printed Grey', 375, 4, 'Card Pocket', '4', 24, 'gotcha/w18.jpg', 'กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(50, 'Gotcha Huncha Cardholder Printed Maroon', 375, 4, 'Card Pocket', '5', 32, 'gotcha/w19.jpg', 'กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(51, 'Gotcha Kew Zipper Wallet Printed Sugar Brown', 395, 5, 'Wallet Bags', '1', 33, 'gotcha/w1.jpg', 'กระเป๋าตังค์เล็กรูดซิป ใส่บัตรได้เหรียญได้', 'Mini', 'Pu leather', 0),
(52, 'Gotcha Kew Zipper Wallet Printed Blue', 395, 5, 'Wallet Bags', '2', 35, 'gotcha/w2.jpg', 'กระเป๋าตังค์เล็กรูดซิป ใส่บัตรได้เหรียญได้', 'Mini', 'Pu leather', 0),
(53, 'Gotcha Kew Zipper Wallet Printed Black', 395, 5, 'Wallet Bags', '3', 22, 'gotcha/w3.jpg', 'กระเป๋าตังค์เล็กรูดซิป ใส่บัตรได้เหรียญได้', 'Mini', 'Pu leather', 0),
(54, 'Gotcha Kew Zipper Wallet Printed Grey', 395, 5, 'Wallet Bags', '4', 25, 'gotcha/w4.jpg', 'กระเป๋าตังค์เล็กรูดซิป ใส่บัตรได้เหรียญได้', 'Mini', 'Pu leather', 0),
(55, 'Gotcha Huncha Cardholder Fur Black', 375, 5, 'Wallet Bags', '3', 30, 'gotcha/w5.jpg', 'กระเป๋าสตางค์ขน กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(56, 'Gotcha Huncha Cardholder Fur Grey', 375, 5, 'Wallet Bags', '4', 32, 'gotcha/w6.jpg', 'กระเป๋าสตางค์ขน กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(57, 'Gotcha Huncha Cardholder Fur Maroon', 375, 5, '	\r\nWallet Bags', '5', 23, 'gotcha/w7.jpg', 'กระเป๋าสตางค์ กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(58, 'Gotcha Huncha Cardholder Fur Navy Blue', 375, 5, 'Wallet Bags', '18', 24, 'gotcha/w8.jpg', 'กระเป๋าสตางค์ กระเป๋าใส่การ์ด', 'Mini', 'Pu leather', 0),
(59, 'Gotcha Rom Mini Wallet With Chain LightGrey', 690, 5, 'Wallet Bags', '20', 36, 'gotcha/w9.jpg', 'กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้', '์Normal', 'Pu leather', 0),
(60, 'Gotcha Rom Mini Wallet With Chain Black', 690, 5, 'Wallet Bags', '3', 35, 'gotcha/w10.jpg', 'กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้', '์Normal', 'Pu leather', 0),
(61, 'Gotcha Rom Mini Wallet With Chain Pink', 690, 5, 'Wallet Bags', '7', 35, 'gotcha/w11.jpg', 'กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้', 'Normal', 'Pu leather', 0),
(62, 'Gotcha Rom Mini Wallet With Chain Mustard', 690, 5, 'Wallet Bags', '6', 29, 'gotcha/w12.jpg', 'กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้', 'Normal', 'Pu leather', 0),
(63, 'Gotcha Rom Mini Wallet With Chain Maroon', 690, 5, 'Wallet Bags', '5', 24, 'gotcha/w13.jpg', 'กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้', 'Normal', 'Pu leather', 0),
(64, 'Gotcha Cheni Grey Wallet', 990, 5, '	 Wallet Bags', '4', 23, 'gotcha/w14.jpg', 'ใส่บัตรได้ 8-10ใบ สามารถใส่เหรียญๆได้ ใช้งานง่ายและสะดวก', 'Mini', 'Pu leather', 0),
(65, 'Gotcha Cheni Black\r\nWallet', 990, 5, 'Wallet Bags', '3', 30, 'gotcha/w15.jpg', 'ใส่บัตรได้ 8-10ใบ สามารถใส่เหรียญๆได้ ใช้งานง่ายและสะดวก', 'Mini', 'Pu leather', 0),
(66, 'Gotcha Cheni Vanilla Cream Wallet', 990, 5, 'Wallet Bags', '8', 29, 'gotcha/w16.jpg', 'ใส่บัตรได้ 8-10ใบ สามารถใส่เหรียญๆได้ ใช้งานง่ายและสะดวก', 'Mini', 'Pu leather', 0),
(67, 'Gotcha Huncha Cardholder Printed Black', 375, 5, 'Wallet Bags', '3', 33, 'gotcha/w17.jpg', 'กระเป๋าสตางค์ปั๊มลาย ใส่แบงค์แบบพับครึ่งได้ กระเป๋าใส่การ์ดได้ 8 ใบ', 'Mini', 'Pu leather', 0),
(68, 'Gotcha Huncha Cardholder Printed Grey', 375, 5, 'Wallet Bags', '4', 34, 'gotcha/w18.jpg', 'กระเป๋าสตางค์ปั๊มลาย ใส่แบงค์แบบพับครึ่งได้ กระเป๋าใส่การ์ดได้ 8 ใบ', 'Mini', 'Pu leather', 0),
(69, 'Gotcha Huncha Cardholder Printed Maroon', 375, 5, 'Wallet Bags', '5', 24, 'gotcha/w19.jpg', 'กระเป๋าสตางค์ปั๊มลาย ใส่แบงค์แบบพับครึ่งได้ กระเป๋าใส่การ์ดได้ 8 ใบ', 'Mini', 'Pu leather', 0),
(70, 'Gotcha Salis Folder Printed Beige', 595, 6, 'Clutch Bags', '9', 23, 'gotcha/c1.jpg', 'แฟ้ม gotcha สามารถใส่ A4 , คอม ใหญ่ถึง 14 นิ้ว มีบุกันกระแทก สามารถใส่ชีทได้สองชั้นด้วยกัน ข้างในมีซับใน', 'Normal', 'Pu leather', 0),
(71, 'Gotcha Salis Folder Printed Grey', 595, 6, 'Clutch Bags', '4', 33, 'gotcha/c2.jpg', 'แฟ้ม gotcha สามารถใส่ A4 , คอม ใหญ่ถึง 14 นิ้ว มีบุกันกระแทก สามารถใส่ชีทได้สองชั้นด้วยกัน ข้างในมีซับใน', 'Normal', 'Pu leather', 0),
(72, 'Gotcha Salis Folder Printed Black', 595, 6, 'Clutch Bags', '6', 35, 'gotcha/c3.jpg', 'แฟ้ม gotcha สามารถใส่ A4 , คอม ใหญ่ถึง 14 นิ้ว มีบุกันกระแทก สามารถใส่ชีทได้สองชั้นด้วยกัน ข้างในมีซับใน', 'Normal', 'Pu leather', 0),
(73, 'Gotcha Salis Folder Printed Black', 625, 6, 'Clutch Bags', '3', 22, 'gotcha/c4.jpg', 'แฟ้มบุซับใน สามารถ ใส่คอมพิวเตอร์ได้ถึง 14 นิ้ว และ แบ่งการใส่ของได้ถึง 3 ชั้น', 'Normal', 'Pu leather', 0),
(74, 'Gotcha Span Folder Clutch Light Gray', 625, 6, 'Clutch Bags', '3', 29, 'gotcha/c5.jpg', 'แฟ้มบุซับใน สามารถ ใส่คอมพิวเตอร์ได้ถึง 14 นิ้ว และ แบ่งการใส่ของได้ถึง 3 ชั้น', 'Normal', 'Pu leather', 0),
(75, 'Gotcha Span Folder Clutch Muatard-Maroon', 625, 6, 'Clutch Bags', '5', 27, 'gotcha/c6.jpg', 'แฟ้มบุซับใน สามารถ ใส่คอมพิวเตอร์ได้ถึง 14 นิ้ว และ แบ่งการใส่ของได้ถึง 3 ชั้น', 'Normal', 'Pu leather', 0),
(76, 'bag', 1900, 1, 'Bagket Bags', '4', 25, '', 'aaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_list`
--

CREATE TABLE `purchase_list` (
  `id_pro` int(20) NOT NULL,
  `id_po` int(10) NOT NULL,
  `po_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_list`
--

INSERT INTO `purchase_list` (`id_pro`, `id_po`, `po_total`) VALUES
(1, 2, 2),
(2, 2, 3),
(4, 2, 4),
(5, 2, 5),
(1, 3, 12),
(2, 3, 2),
(1, 5, 22),
(2, 5, 22),
(1, 6, 2),
(2, 6, 3),
(1, 7, 50),
(2, 7, 50),
(1, 8, 10),
(2, 8, 15),
(63, 9, 5),
(8, 9, 4),
(19, 9, 6),
(58, 10, 3),
(76, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id_po` int(11) NOT NULL,
  `id_dealer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id_po`, `id_dealer`, `id_user`, `date`, `status`) VALUES
(9, 1, 1, '2020-02-22 11:18:33', 'success'),
(10, 1, 1, '2020-02-22 11:19:19', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_cus` int(11) NOT NULL,
  `name_cus` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_cus` varchar(10) NOT NULL,
  `type` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_cus`, `name_cus`, `email`, `password_cus`, `type`) VALUES
(1, 'root', 'root@gmail.com', '12345678', 'admin'),
(2, 'khetkoong', 'khetkoong@gmail.com', '1234', 'customer'),
(3, 'aaaa', 'iiii@gmail.com', 'ghfgh', 'customer'),
(4, 'pppp', 'iiii@gmail.com', 'ghfgh', 'customer'),
(5, 'rrrr', 'iiii@gmail.com', 'ghfgh', 'customer'),
(6, 'eeeeeee', 'iiii@gmail.com', 'ghfgh', 'customer'),
(7, 'eeeeeee', 'iiii@gmail.com', 'ghfgh', 'customer'),
(8, 'fsdfs', 'root@gmail.com', 'ddddd', 'customer'),
(9, 'fsdfs', 'root@gmail.com', 'ddddd', 'customer'),
(10, 'fsdfs', 'root@gmail.com', 'ddddd', 'customer'),
(11, 'dem', 'customer2@gmail.com', '12345678', 'customer'),
(12, 'JES', 'customer@gmail.com', '12345678', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `cart` (`id_pro`,`id_cus`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `checklogis`
--
ALTER TABLE `checklogis`
  ADD PRIMARY KEY (`id_checklogis`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `checkpay`
--
ALTER TABLE `checkpay`
  ADD PRIMARY KEY (`id_checkpay`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id_delivery`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_mem`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_cus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id_dealer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id_delivery` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_mem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id_po` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
