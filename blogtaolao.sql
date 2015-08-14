-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2015 at 07:04 PM
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
-- Table structure for table `cartdetails`
--

CREATE TABLE IF NOT EXISTS `cartdetails` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_num` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cartdetails`
--

INSERT INTO `cartdetails` (`cart_id`, `product_id`, `cart_num`) VALUES
(33, 1, 1),
(34, 1, 1),
(35, 1, 1),
(36, 1, 2),
(37, 1, 1),
(38, 1, 1),
(39, 1, 1),
(40, 1, 1),
(41, 1, 1),
(42, 1, 1),
(43, 1, 1),
(44, 1, 4),
(44, 2, 1),
(44, 3, 1),
(45, 1, 1),
(46, 1, 1),
(47, 1, 1),
(48, 1, 1),
(53, 2, 1),
(54, 1, 1),
(56, 1, 3),
(56, 3, 1),
(57, 1, 3),
(57, 2, 1),
(58, 1, 1),
(59, 1, 1),
(59, 2, 2),
(60, 1, 1),
(61, 1, 1),
(62, 1, 1),
(63, 1, 1),
(64, 1, 1),
(65, 1, 1),
(66, 1, 1),
(67, 1, 1),
(68, 1, 1),
(69, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cart_delivery` bit(1) DEFAULT b'0',
  `cart_day` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=71 ;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`user_id`, `cart_id`, `cart_delivery`, `cart_day`) VALUES
(1, 30, b'1', '2015-08-13'),
(1, 31, b'1', '2015-08-13'),
(1, 33, b'0', '2015-08-13'),
(1, 34, b'0', '2015-08-13'),
(1, 35, b'0', '2015-08-13'),
(1, 36, b'0', '2015-08-13'),
(1, 37, b'0', '2015-08-13'),
(1, 38, b'0', '2015-08-13'),
(1, 39, b'0', '2015-08-13'),
(1, 40, b'0', '2015-08-13'),
(1, 41, b'0', '2015-08-13'),
(1, 42, b'0', '2015-08-13'),
(1, 43, b'0', '2015-08-13'),
(1, 44, b'0', '2015-08-13'),
(1, 45, b'0', '2015-08-13'),
(1, 46, b'0', '2015-08-13'),
(1, 47, b'0', '2015-08-13'),
(1, 48, b'0', '2015-08-13'),
(1, 53, b'0', '2015-08-14'),
(8, 54, b'0', '2015-08-14'),
(1, 56, b'0', '2015-08-14'),
(1, 57, b'0', '2015-08-14'),
(1, 58, b'0', '2015-08-14'),
(1, 59, b'0', '2015-08-14'),
(1, 60, b'0', '2015-08-14'),
(1, 61, b'0', '2015-08-14'),
(1, 62, b'0', '2015-08-14'),
(1, 63, b'0', '2015-08-14'),
(1, 64, b'0', '2015-08-14'),
(1, 65, b'0', '2015-08-14'),
(1, 66, b'0', '2015-08-14'),
(1, 67, b'0', '2015-08-14'),
(1, 68, b'0', '2015-08-14'),
(1, 69, b'0', '2015-08-14'),
(1, 70, b'1', '2015-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Post_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comment_post` (`Post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `Post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Title` text COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Tag` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `Ucontent` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`Post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_id`, `Title`, `Content`, `Tag`, `image`, `Ucontent`) VALUES
(38, 'Hà Nội: Chủ quán trà đá bất ngờ cầm lái, taxi ', '<p>Vụ tai nạn hy hữu xảy ra v&agrave;o khoảng hơn 10 giờ trưa ng&agrave;y 7/8, tại đường Vũ T&ocirc;ng Phan (phường Khương Đ&igrave;nh, quận Thanh Xu&acirc;n, TP H&agrave; Nội), đoạn đối diện số nh&agrave; 345, đường Vũ T&ocirc;ng Phan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo một số nh&acirc;n chứng cho biết, thời điểm tr&ecirc;n 1 t&agrave;i xế taxi 4 chỗ h&atilde;ng Vinagroup đỗ xe tr&ecirc;n vỉa h&egrave;, đầu hướng ra ph&iacute;a s&ocirc;ng T&ocirc; Lịch để v&agrave;o uống nước tại 1 qu&aacute;n tr&agrave; đ&aacute;.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;&Ocirc;ng chủ qu&aacute;n tr&agrave; đ&aacute; vội tr&egrave;o l&ecirc;n chiếc taxi rồi nổ m&aacute;y, sau đ&oacute; bất ngờ vọt ga lao xuống l&ograve;ng đường va chạm với 1 xe m&aacute;y khiến 1 người đ&agrave;n &ocirc;ng bị thương. Chưa chịu dừng lại, chiếc xe taxi lao l&ecirc;n h&uacute;c đổ h&agrave;ng r&agrave;o sắt rồi phi xuống s&ocirc;ng T&ocirc; Lịch&rdquo;, một nh&acirc;n chứng kể lại.</p>\r\n\r\n<p>Tại hiện trường, chiếc taxi bị ch&igrave;m gần như ho&agrave;n to&agrave;n xuống l&ograve;ng s&ocirc;ng, chỉ c&ograve;n biển hiệu tr&ecirc;n n&oacute;c v&agrave; 1 phần đỉnh mui xe c&ograve;n nổi tr&ecirc;n mặt nước.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="1-6d2f8" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/1-6d2f8.jpg" /></p>\r\n\r\n<p>Ngay sau khi lao xuống s&ocirc;ng người đ&agrave;n &ocirc;ng tự mở cửa v&agrave; tho&aacute;t ra được kh&ocirc;ng bị thương t&iacute;ch g&igrave; - (Ảnh: otofun)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nhận được tin b&aacute;o, lực lượng c&ocirc;ng an đ&atilde; c&oacute; mặt phong tỏa hiện trường, kh&ocirc;ng cho phương tiện lưu th&ocirc;ng qua đường Vũ T&ocirc;ng Phan.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đến hơn 12h, lực lượng cứu hộ vẫn đang t&igrave;m phương &aacute;n đưa chiếc xe l&ecirc;n bờ. 1 xe cứu thương v&agrave; 2 xe qu&acirc;n dụng của lực lượng cứu hộ được đưa tới hiện trường. Ghi nhận tại hiện trường, chiếc xe taxi ch&igrave;m nghỉm giữa s&ocirc;ng T&ocirc; Lịch. Khoảng 2 m&eacute;t h&agrave;ng lan can sắt bị &quot;hạ gục&quot;.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="3-648fb" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/3-648fb.jpg" /></p>\r\n\r\n<p>Một số chiến sĩ dầm m&igrave;nh trong nước bẩn để cứu hộ - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="2-648fb" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/2-648fb.jpg" /></p>\r\n\r\n<p>Lực lượng cứu hộ trục vớt chiếc taxi &quot;xấu số&quot; - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đến 12h30 trưa nay lực lượng chức năng đ&atilde; tiến h&agrave;nh k&eacute;o chiếc xe taxi l&ecirc;n. Tuy nhi&ecirc;n, do ch&igrave;m s&acirc;u dưới s&ocirc;ng n&ecirc;n phải mất nửa tiếng đồng hồ chiếc xe mới được k&eacute;o l&ecirc;n lề đường.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đến 13h chiếc taxi gặp nạn được trục vớt l&ecirc;n bờ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="4-648fb" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/4-648fb.jpg" /></p>\r\n\r\n<p>Chiếc taxi tan t&aacute;c sau khi ngụp lặn dưới s&ocirc;ng T&ocirc; Lịch - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="b-ec21b" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/b-ec21b.jpg" /></p>\r\n\r\n<p>Đoạn h&agrave;ng r&agrave;o bị g&atilde;y được phong tỏa v&agrave; buộc lại tạm thời để đảm bảo an to&agrave;n - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="1-648fb" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/1-648fb.jpg" /></p>\r\n\r\n<p>Rất đ&ocirc;ng người d&acirc;n hiếu k&igrave; bao quanh h&agrave;ng r&agrave;o dọc theo bờ s&ocirc;ng chứng kiến vụ việc - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo</p>\r\n\r\n<p>&nbsp;Hồng Minh - Định Nguyễn - Tr&iacute; Ki&ecirc;n&nbsp;/&nbsp;<a href="http://ttvn.vn/" rel="nofollow" target="_blank">Tr&iacute; Thức Trẻ</a></p>\r\n', 'HN, bay, Tô lịch', '../BlogTaolao_MVC_/images/image_38.jpg', '<h2>Thấy t&agrave;i xế đỗ xe taxi tr&ecirc;n vỉa h&egrave; rồi v&agrave;o qu&aacute;n tr&agrave; đ&aacute; uống nước, &ocirc;ng chủ b&aacute;n tr&agrave; đ&aacute; bất ngờ leo l&ecirc;n xe nổ m&aacute;y rồi vọt ga lao ra đường, đ&acirc;m thẳng xuống s&ocirc;ng T&ocirc; Lịch.</h2>\r\n'),
(39, '5 màn ảo thuật "đen đủi" có cái kết kinh hoàng trong lịch sử', '<p>Những m&agrave;n tr&igrave;nh diễn<a href="http://kenh14.vn/ao-thuat.html" target="_blank" title=" ảo thuật ">&nbsp;ảo thuật&nbsp;</a>th&agrave;nh c&ocirc;ng c&oacute; thể khiến c&ocirc;ng ch&uacute;ng ngẩn ngơ kể cả khi đ&oacute; chỉ l&agrave; tr&ograve; ảo thuật với l&aacute; b&agrave;i đơn giản hay m&agrave;n tr&igrave;nh diễn c&ocirc;ng phu của David Copperfiled.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tuy nhi&ecirc;n, kh&ocirc;ng phải ảo thuật gia n&agrave;o cũng ho&agrave;n th&agrave;nh m&agrave;n diễn kịch t&iacute;nh của m&igrave;nh m&agrave; kh&ocirc;ng hề hấn g&igrave;, c&oacute; người đ&atilde; phải bỏ mạng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>H&atilde;y c&ugrave;ng điểm qua một v&agrave;i nh&agrave; ảo thuật kh&ocirc;ng đủ may mắn để tự cứu m&igrave;nh tho&aacute;t khỏi nguy hiểm, theo tổng hợp từ trang Mentalfloss.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1. Genesta v&agrave; chiếc b&igrave;nh đựng sữa</strong><br />\r\n<br />\r\nMột trong những m&agrave;n tr&igrave;nh diễn kinh điển của l&agrave;ng ảo thuật thế giới l&agrave; tiết mục tho&aacute;t ra khỏi b&igrave;nh nước. Tiết mục n&agrave;y thường đem lại rất nhiều cảm x&uacute;c cho kh&aacute;n giả, tuy nhi&ecirc;n b&ecirc;n cạnh đ&oacute; cũng c&oacute; nhiều ảo thuật gia phải bỏ mạng v&igrave; n&oacute;. Một trong những nạn nh&acirc;n xấu số l&agrave; nh&agrave; ảo thuật Royden Genesta v&agrave;o năm 1930.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="150812magic05-9a964" src="http://k14.vcmedia.vn/thumb_w/600/70e2b6983a/2015/08/12/150812magic05-9a964.JPG" /></p>\r\n\r\n<p><em>Một biến thể của tiết mục.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong tiết mục, c&aacute;c ảo thuật gia sẽ bị nhốt trong một chiếc b&igrave;nh được kh&oacute;a nắp, chứa đầy nước hoặc sữa. Họ chỉ c&oacute; một khoảng thời gian rất ngắn để tho&aacute;t ra.<br />\r\n<br />\r\nMấu chốt của tiết mục nằm ở chỗ phần cổ b&igrave;nh c&oacute; thể th&aacute;o rời được, v&igrave; vậy c&aacute;c ổ kh&oacute;a tr&ecirc;n miệng b&igrave;nh sẽ c&oacute; đ&ocirc;i ch&uacute;t kh&aacute;c biệt so với ổ kh&oacute;a thường. Tuy nhi&ecirc;n, Genesta kh&ocirc;ng biết rằng lẫy của kh&oacute;a đ&atilde; bị g&atilde;y trong qu&aacute; tr&igrave;nh vận chuyển, khiến cổ b&igrave;nh bị cố định, kh&ocirc;ng thể th&aacute;o rời.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt="150812magic04-9a964" src="http://k14.vcmedia.vn/thumb_w/600/70e2b6983a/2015/08/12/150812magic04-9a964.jpg" /></p>\r\n\r\n<p><em>Chiếc b&igrave;nh được sử dụng trong tiết mục của Genesta</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hiển nhi&ecirc;n Genesta đ&atilde; kh&ocirc;ng thể tho&aacute;t ra. D&ugrave; đ&atilde; được cấp cứu v&agrave; hồi tỉnh, nhưng t&igrave;nh trạng ngộp nước qu&aacute; l&acirc;u đ&atilde; khiến &ocirc;ng qua đời chỉ trong một thời gian ngắn.&nbsp;<br />\r\n<br />\r\n<strong>2. Joe Burrus v&agrave; m&agrave;n tr&igrave;nh diễn &ldquo;ch&ocirc;n v&ugrave;i c&ugrave;ng xi măng&rdquo;</strong></p>\r\n\r\n<p><br />\r\nNăm 1990, để tăng t&iacute;nh giật g&acirc;n cho kh&aacute;n giả, Joe Burrus đ&atilde; chuẩn bị một m&agrave;n tr&igrave;nh diễn đặc biệt v&agrave;o đ&ecirc;m Halloween tại trung t&acirc;m giải tr&iacute; Blackbeard&rsquo;s Family Fun, California.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt="150812magic06-9a964" src="http://k14.vcmedia.vn/thumb_w/600/70e2b6983a/2015/08/12/150812magic06-9a964.jpg" /></p>\r\n\r\n<p><em>Ảnh minh họa</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo kế hoạch, Joe sẽ bị tr&oacute;i trong một chiếc quan t&agrave;i bằng k&iacute;nh, rồi bị v&ugrave;i lấp bởi 9 tấn b&ugrave;n đất v&agrave; xi măng. Tuy nhi&ecirc;n m&agrave;n tr&igrave;nh diễn đ&atilde; kh&ocirc;ng như mong mong đợi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="150812magic07-9a964" src="http://k14.vcmedia.vn/70e2b6983a/2015/08/12/150812magic07-9a964.jpg" style="height:380px; width:507px" /></p>\r\n\r\n<p><em>Ảnh minh họa</em></p>\r\n\r\n<p><br />\r\nSau khi quan t&agrave;i được hạ xuống l&ograve;ng đất, trợ l&iacute; của Burrus l&aacute;i xe tải đổ b&ugrave;n đất v&agrave; xi măng l&ecirc;n. Nhưng trong lần đầu ti&ecirc;n, d&acirc;y tr&oacute;i quanh cổ Burrus qu&aacute; chặt, khiến &ocirc;ng kh&ocirc;ng thể tho&aacute;t ra v&agrave; phải thực hiện lại tiết mục. Đến lần thứ 2, &aacute;p lực từ 9 tấn xi măng đ&atilde; l&agrave;m vỡ quan t&agrave;i, khiến &ocirc;ng bị ngạt thở v&agrave; thiệt mạng.<br />\r\n<br />\r\n<strong>3. George Lalonde v&agrave; rủi ro đến từ&hellip; kh&aacute;n giả</strong><br />\r\n<br />\r\nKh&aacute;n giả khi xem những m&agrave;n ảo thuật thừa hiểu rằng đ&oacute; l&agrave; những tiết mục giải tr&iacute;, ngoại trừ Henry Howard. C&oacute; lẽ George Lalonde l&agrave; nh&agrave; ảo thuật&hellip; đen đủi nhất khi đ&atilde; tr&igrave;nh diễn ảo thuật trước mặt một thanh ni&ecirc;n qu&aacute; &ldquo;nghi&ecirc;m t&uacute;c&rdquo;.<br />\r\n&nbsp;</p>\r\n', 'ảo thuật, HN, HCM, ', '../BlogTaolao_MVC_/images/image_39.JPG', '<h2>Do kh&ocirc;ng gặp may n&ecirc;n một số nh&agrave; ảo thuật đ&atilde; bị tử nạn trong khi biểu diễn m&agrave;n ảo thuật của m&igrave;nh.</h2>\r\n');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_ucontent`, `product_price`) VALUES
(1, 'sản phẩm 1', '../BlogTaolao_MVC_/images/product_1.jpg', '<p>sản phẩm mới ra gi&aacute; cả mắc v&ocirc; đối. v&ocirc; c&ugrave;ng hấp dẫn!</p>\r\n', 100000),
(2, 'sản phẩm 02', '../BlogTaolao_MVC_/images/product_2.jpg', '<p>B-phone h&agrave;ng việt nam chất lượng cao. Gi&aacute; cả cũng cao . :V</p>\r\n', 500000),
(3, 'sản phẩm 03', '../BlogTaolao_MVC_/images/product_3.jpg', '<p>h&agrave;ng trung quốc &nbsp;kh&ocirc;ng r&otilde; lai lịch.</p>\r\n\r\n<p>mua về cẩn thận :v</p>\r\n', 300000),
(4, 'sản phẩm 04', '../BlogTaolao_MVC_/images/product_4.jpg', '<p>h&agrave;ng nhật bản. chất lượng . chưa r&otilde;. mới 1% &nbsp;=))</p>\r\n', 999999),
(5, 'sản phẩm 05', '../BlogTaolao_MVC_/images/product_5.jpg', '<p>Nokia chất lượng cục gạch. bền , rẻ v&agrave; si&ecirc;u c&ugrave;i bắp</p>\r\n', 700000),
(6, 'Ram DDR3', '../BlogTaolao_MVC_/images/product_6.jpg', '<ul>\r\n	<li>\r\n	<p>T&iacute;nh năng nổi bật</p>\r\n	</li>\r\n	<li>\r\n	<p>Ram PC, hỗ trợ k&ecirc;nh đ&ocirc;i, c&oacute; đ&egrave;n ph&aacute;t s&aacute;ng, tản nhiệt nh&ocirc;m thiết kế đẹp, hiệu năng tản nhiệt cao</p>\r\n	</li>\r\n</ul>\r\n', 600000),
(7, 'laptop 01', '../BlogTaolao_MVC_/images/product_7.png', '<p>Laptop 01 gi&aacute; cả phải chăng &nbsp;th&ocirc;ng số chưa r&otilde;.</p>\r\n', 900000),
(8, 'Laptop 02', '../BlogTaolao_MVC_/images/product_8.png', '<p>gi&aacute; rẻ bất ngờ</p>\r\n', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aut` varchar(11) COLLATE utf8_unicode_ci DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `aut`) VALUES
(1, '123', 'Quang', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(2, 'nguyen', '123', '123', 'user'),
(3, '321', '123', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(4, '3211', '123', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(5, '543221', '123', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(6, '543211', '123', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(7, '5432211', '123', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(8, '415', '2151', 'cc76ca0e4a0df37210d749015a901a51', 'user'),
(9, 'phi', '123', '202cb962ac59075b964b07152d234b70', 'user'),
(10, '1', '123', 'e10adc3949ba59abbe56e057f20f883e', 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comment_post` FOREIGN KEY (`Post_id`) REFERENCES `posts` (`Post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
