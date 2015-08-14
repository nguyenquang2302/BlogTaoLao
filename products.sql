-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2015 at 12:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blogtaolao`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` text COLLATE utf8_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8_unicode_ci NOT NULL,
  `product_ucontent` text COLLATE utf8_unicode_ci NOT NULL,
  `product_price` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_ucontent`, `product_price`) VALUES
(1, 'Sp', '../BlogTaolao_MVC_/images/product_1.jpg', '<p>sản phẩm mới ra  giá cả mắc vô đối</p>', 10000),
(2, 'SP2', '../BlogTaolao_MVC_/images/product_2.jpg', '<p>B phone </p>', 11111),
(3, 'sp3', '../BlogTaolao_MVC_/images/product_3.jpg', '<p>sida</p>\r\n', 20000),
(4, 's4', '../BlogTaolao_MVC_/images/product_4.jpg', '<p>iphone</p>\r\n', 123456),
(5, 'SP6', '../BlogTaolao_MVC_/images/product_5.jpg', '<p>o6a bcd</p>\r\n', 1234570);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
