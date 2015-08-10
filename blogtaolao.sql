-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2015 at 06:29 AM
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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Name`, `Content`, `Post_id`) VALUES
(1, 'Test', '<p>11</p>\r\n', 38);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_id`, `Title`, `Content`, `Tag`, `image`, `Ucontent`) VALUES
(38, 'Hà Nội: Chủ quán trà đá bất ngờ cầm lái, taxi "bay" xuống sông Tô Lịch', '<p>Vụ tai nạn hy hữu xảy ra v&agrave;o khoảng hơn 10 giờ trưa ng&agrave;y 7/8, tại đường Vũ T&ocirc;ng Phan (phường Khương Đ&igrave;nh, quận Thanh Xu&acirc;n, TP H&agrave; Nội), đoạn đối diện số nh&agrave; 345, đường Vũ T&ocirc;ng Phan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo một số nh&acirc;n chứng cho biết, thời điểm tr&ecirc;n 1 t&agrave;i xế taxi 4 chỗ h&atilde;ng Vinagroup đỗ xe tr&ecirc;n vỉa h&egrave;, đầu hướng ra ph&iacute;a s&ocirc;ng T&ocirc; Lịch để v&agrave;o uống nước tại 1 qu&aacute;n tr&agrave; đ&aacute;.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;&Ocirc;ng chủ qu&aacute;n tr&agrave; đ&aacute; vội tr&egrave;o l&ecirc;n chiếc taxi rồi nổ m&aacute;y, sau đ&oacute; bất ngờ vọt ga lao xuống l&ograve;ng đường va chạm với 1 xe m&aacute;y khiến 1 người đ&agrave;n &ocirc;ng bị thương. Chưa chịu dừng lại, chiếc xe taxi lao l&ecirc;n h&uacute;c đổ h&agrave;ng r&agrave;o sắt rồi phi xuống s&ocirc;ng T&ocirc; Lịch&rdquo;, một nh&acirc;n chứng kể lại.</p>\r\n\r\n<p>Tại hiện trường, chiếc taxi bị ch&igrave;m gần như ho&agrave;n to&agrave;n xuống l&ograve;ng s&ocirc;ng, chỉ c&ograve;n biển hiệu tr&ecirc;n n&oacute;c v&agrave; 1 phần đỉnh mui xe c&ograve;n nổi tr&ecirc;n mặt nước.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="1-6d2f8" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/1-6d2f8.jpg" /></p>\r\n\r\n<p>Ngay sau khi lao xuống s&ocirc;ng người đ&agrave;n &ocirc;ng tự mở cửa v&agrave; tho&aacute;t ra được kh&ocirc;ng bị thương t&iacute;ch g&igrave; - (Ảnh: otofun)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nhận được tin b&aacute;o, lực lượng c&ocirc;ng an đ&atilde; c&oacute; mặt phong tỏa hiện trường, kh&ocirc;ng cho phương tiện lưu th&ocirc;ng qua đường Vũ T&ocirc;ng Phan.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đến hơn 12h, lực lượng cứu hộ vẫn đang t&igrave;m phương &aacute;n đưa chiếc xe l&ecirc;n bờ. 1 xe cứu thương v&agrave; 2 xe qu&acirc;n dụng của lực lượng cứu hộ được đưa tới hiện trường. Ghi nhận tại hiện trường, chiếc xe taxi ch&igrave;m nghỉm giữa s&ocirc;ng T&ocirc; Lịch. Khoảng 2 m&eacute;t h&agrave;ng lan can sắt bị &quot;hạ gục&quot;.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="3-648fb" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/3-648fb.jpg" /></p>\r\n\r\n<p>Một số chiến sĩ dầm m&igrave;nh trong nước bẩn để cứu hộ - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="2-648fb" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/2-648fb.jpg" /></p>\r\n\r\n<p>Lực lượng cứu hộ trục vớt chiếc taxi &quot;xấu số&quot; - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đến 12h30 trưa nay lực lượng chức năng đ&atilde; tiến h&agrave;nh k&eacute;o chiếc xe taxi l&ecirc;n. Tuy nhi&ecirc;n, do ch&igrave;m s&acirc;u dưới s&ocirc;ng n&ecirc;n phải mất nửa tiếng đồng hồ chiếc xe mới được k&eacute;o l&ecirc;n lề đường.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đến 13h chiếc taxi gặp nạn được trục vớt l&ecirc;n bờ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="4-648fb" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/4-648fb.jpg" /></p>\r\n\r\n<p>Chiếc taxi tan t&aacute;c sau khi ngụp lặn dưới s&ocirc;ng T&ocirc; Lịch - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="b-ec21b" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/b-ec21b.jpg" /></p>\r\n\r\n<p>Đoạn h&agrave;ng r&agrave;o bị g&atilde;y được phong tỏa v&agrave; buộc lại tạm thời để đảm bảo an to&agrave;n - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="1-648fb" src="http://k14.vcmedia.vn/thumb_w/600/f0ae147210/2015/08/07/1-648fb.jpg" /></p>\r\n\r\n<p>Rất đ&ocirc;ng người d&acirc;n hiếu k&igrave; bao quanh h&agrave;ng r&agrave;o dọc theo bờ s&ocirc;ng chứng kiến vụ việc - (Ảnh: Định Nguyễn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo</p>\r\n\r\n<p>&nbsp;Hồng Minh - Định Nguyễn - Tr&iacute; Ki&ecirc;n&nbsp;/&nbsp;<a href="http://ttvn.vn/" rel="nofollow" target="_blank">Tr&iacute; Thức Trẻ</a></p>\r\n', 'HN, bay, Tô lịch', '../BlogTaolao_MVC_/images/image_1.jpg', '<h2>Thấy t&agrave;i xế đỗ xe taxi tr&ecirc;n vỉa h&egrave; rồi v&agrave;o qu&aacute;n tr&agrave; đ&aacute; uống nước, &ocirc;ng chủ b&aacute;n tr&agrave; đ&aacute; bất ngờ leo l&ecirc;n xe nổ m&aacute;y rồi vọt ga lao ra đường, đ&acirc;m thẳng xuống s&ocirc;ng T&ocirc; Lịch.</h2>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`) VALUES
(1, '123', 'Quang', 'e10adc3949ba59abbe56e057f20f883e');

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
