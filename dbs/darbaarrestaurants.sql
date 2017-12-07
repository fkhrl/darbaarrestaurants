-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 08:01 PM
-- Server version: 5.6.14
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `darbaarrestaurants`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_chef`
--

CREATE TABLE IF NOT EXISTS `about_chef` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `chef_name` varchar(255) DEFAULT NULL,
  `chef_short_title` varchar(255) DEFAULT NULL,
  `details` text,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_chef`
--

INSERT INTO `about_chef` (`id`, `chef_name`, `chef_short_title`, `details`, `photo`, `date`, `status`) VALUES
(1, 'Abdul Yaseen ', 'Award winning chef & <br/>modern Indian food connoisseur', '&lt;p&gt;Abdul is an award-winning chef and a modern Indian food connoisseur with a reputation for excellence both in the UK and overseas. Moving from Jaipur to London fifteen years ago, he was part of the founding team of iconic London Restaurant, Cinnamon Club. &lt;/p&gt;&lt;p&gt;He then went on to become Head Chef at Cinnamon Kitchen and Anise where he played an instrumental part in building the Cinnamon brand. Other accolades include, winning the British BBQ Championships and the Canap&amp;eacute; Cup at Square Meal Venues &amp;amp; Events for three years consecutively. &lt;/p&gt;&lt;p&gt;He has featured in many high profile cooking demonstrations and cookery television programmes such as Celebrity Master Chef UK 2016, BBC2&amp;rsquo;s Hairy Bikers, ITV&amp;rsquo;s Great Britain&amp;rsquo;s Best Dish and the Alan Titchmarsh Show.&lt;/p&gt;', 'photo_upload__1502134430_1502134430.jpg', '2017-08-07', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `about_chef_view`
--
CREATE TABLE IF NOT EXISTS `about_chef_view` (
`id` int(20)
,`chef_name` varchar(255)
,`chef_short_title` varchar(255)
,`details` text
,`photo` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `photo` text,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `photo`, `details`, `date`, `status`) VALUES
(1, 'photo_upload__1502135040_1502135040.png', 'Located in the heart of London&amp;rsquo;s City and very close to Shoreditch, Darbaar by Abdul offers a sharing dining experience inspired by the banquets of the Indian Royal Court in a vibrant yet relaxed setting. Set over an impressive 5,500 feet, it houses a 220-cover restaurant and bar, including an interactive grill seating area, 20-cover private dining room and a bespoke chef&amp;rsquo;s table for up to 12 people.', '2017-08-07', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `about_us_view`
--
CREATE TABLE IF NOT EXISTS `about_us_view` (
`id` int(20)
,`photo` text
,`details` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `authorize_user`
--

CREATE TABLE IF NOT EXISTS `authorize_user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pc_name` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `authorize_user`
--

INSERT INTO `authorize_user` (`id`, `pc_name`, `date`, `status`) VALUES
(1, 'SUL-LABPC-11', '2015-09-15', 1),
(2, 'fahad-PC', NULL, NULL),
(4, 'Khairul-PC', NULL, NULL),
(5, 'SUL-Soft-PC', '2015-11-25', 1),
(7, 'USER-PC-Monira', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date`, `status`) VALUES
(1, 'Reservations', '2017-08-08', 1),
(2, 'Lotus Bar', '2017-07-31', 1),
(3, 'Menus', '2017-08-09', 1),
(4, 'Gallery', '2017-08-09', 1),
(5, 'Contact', '2017-08-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_page`
--

CREATE TABLE IF NOT EXISTS `category_page` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) DEFAULT NULL,
  `category_image` text,
  `page_content` text,
  `category_banner` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category_page`
--

INSERT INTO `category_page` (`id`, `category_id`, `category_image`, `page_content`, `category_banner`, `date`, `status`) VALUES
(1, 2, 'category_image_upload__1502046112_1502046112.png', 'Inspired by the splendour of the Indian Royal Court. The Lotus Bar at Darbaar provides a thrilling atmosphere, complete with live music every month, mouth watering nibbles to offer a taste of what the Darbaar restaurant has to offer. A service like no other, and a wide selection of methodically crafted beverages, including cocktails with an aptly spicy or smoky twist. Whether you&amp;rsquo;re looking to try something new for an unforgettable experience or are hoping to order your classic favourite, The Lotus Bar has it all.', 'category_banner_upload__1502045488_1502045488.jpg', '2017-08-06', 1),
(4, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 3, 'category_image_upload__1502384443_1502384443.png', 'Located in the heart of London&amp;rsquo;s City, Darbaar by Abdul offers a sharing dining experience inspired by the banquets of the Indian Royal Court in a vibrant yet relaxed setting. Set over an impressive 5,500 feet, it houses a 220-cover restaurant and bar, including an interactive grill seating area, 20-cover private dining room and a bespoke chef&amp;rsquo;s table for up to 12 people', 'category_banner_upload__1502384443_1502384443.jpg', '2017-08-10', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `category_page_view`
--
CREATE TABLE IF NOT EXISTS `category_page_view` (
`id` int(20)
,`category_id` int(20)
,`category_image` text
,`page_content` text
,`category_banner` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `category_view`
--
CREATE TABLE IF NOT EXISTS `category_view` (
`id` int(20)
,`name` varchar(255)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `custom_table_field`
--

CREATE TABLE IF NOT EXISTS `custom_table_field` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `table_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `custom_table_field`
--

INSERT INTO `custom_table_field` (`id`, `table_id`, `name`, `date`, `status`) VALUES
(2, 2, 'site_name', '2017-07-31', 1),
(3, 2, 'top_logo', '2017-07-31', 1),
(4, 2, 'logo', '2017-07-31', 1),
(5, 2, 'email', '2017-07-31', 1),
(6, 2, 'phone', '2017-07-31', 1),
(7, 2, 'address', '2017-07-31', 1),
(8, 2, 'keywords', '2017-07-31', 1),
(9, 2, 'description', '2017-07-31', 1),
(10, 3, 'photo', '2017-07-31', 1),
(11, 4, 'category_id', '2017-07-31', 1),
(12, 4, 'photo', '2017-07-31', 1),
(13, 5, 'name', '2017-07-31', 1),
(14, 6, 'name', '2017-08-01', 1),
(15, 6, 'email', '2017-08-01', 1),
(16, 6, 'phone', '2017-08-01', 1),
(17, 6, 'number_of_person', '2017-08-01', 1),
(18, 6, 'reservations_date', '2017-08-01', 1),
(19, 6, 'reservations_time', '2017-08-01', 1),
(20, 6, 'message', '2017-08-01', 1),
(22, 8, 'details', '2017-08-01', 1),
(23, 9, 'chef_name', '2017-08-01', 1),
(24, 9, 'chef_short_title', '2017-08-01', 1),
(25, 9, 'details', '2017-08-01', 1),
(26, 9, 'photo', '2017-08-01', 1),
(27, 10, 'thumbnail_photo', '2017-08-01', 1),
(28, 10, 'photo', '2017-08-01', 1),
(29, 11, 'name', '2017-08-02', 1),
(30, 11, 'map', '2017-08-02', 1),
(31, 11, 'short_details', '2017-08-02', 1),
(32, 11, 'youtube_link', '2017-08-02', 1),
(33, 12, 'category_id', '2017-08-06', 1),
(34, 12, 'category_image', '2017-08-06', 1),
(35, 12, 'page_content', '2017-08-06', 1),
(36, 12, 'category_banner', '2017-08-06', 1),
(37, 13, 'category_id', '2017-08-06', 1),
(38, 13, 'name', '2017-08-06', 1),
(39, 14, 'category_id', '2017-08-06', 1),
(40, 14, 'sub_category_id', '2017-08-06', 1),
(41, 14, 'name', '2017-08-06', 1),
(42, 14, 'priority', '2017-08-06', 1),
(43, 15, 'name', '2017-08-06', 1),
(44, 15, 'category_id', '2017-08-06', 1),
(45, 15, 'sub_category_id', '2017-08-06', 1),
(46, 15, 'sub_section_id', '2017-08-06', 1),
(47, 15, 'price', '2017-08-06', 1),
(48, 15, 'status', '2017-08-06', 1),
(49, 16, 'details', '2017-08-07', 1),
(50, 17, 'name', '2017-08-07', 1),
(51, 18, 'details', '2017-08-07', 1),
(52, 19, 'photo', '2017-08-07', 1),
(53, 19, 'details', '2017-08-07', 1),
(54, 20, 'category_id', '2017-08-11', 1),
(55, 20, 'name', '2017-08-11', 1),
(68, 23, 'category_id', '2017-08-11', 1),
(69, 23, 'sub_category_id', '2017-08-11', 1),
(70, 23, 'name', '2017-08-11', 1),
(71, 23, 'priority', '2017-08-11', 1),
(78, 25, 'category_id', '2017-08-11', 1),
(79, 25, 'sub_menu_id', '2017-08-11', 1),
(80, 25, 'sub_menu_section_id', '2017-08-11', 1),
(81, 25, 'name', '2017-08-11', 1),
(89, 27, 'category_id', '2017-08-11', 1),
(90, 27, 'sub_menu_id', '2017-08-11', 1),
(91, 27, 'sub_menu_section_id', '2017-08-11', 1),
(92, 27, 'sub_menu_product_name_id', '2017-08-11', 1),
(93, 27, 'name', '2017-08-11', 1),
(94, 27, 'price', '2017-08-11', 1),
(95, 27, 'status', '2017-08-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `darbaar_story`
--

CREATE TABLE IF NOT EXISTS `darbaar_story` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `darbaar_story`
--

INSERT INTO `darbaar_story` (`id`, `details`, `date`, `status`) VALUES
(1, '&lt;span class="h_light  h_zeta  h_inline  text--centre"&gt;Darbaar by Abdul \r\nis a temple to modern Indian cuisine reinstating the sharing experience \r\nwhich once use to be the charm of the Royal houses of India. The shared \r\ndining experience is inspired by the rich history and traditions of the \r\nbanquets of the Indian Royal Court &amp;ndash; Palace of India. Authenticity is \r\neverything and no dish or detail is without a link to the great Royal \r\nHouses. Techniques and ingredients are as true to the spirit and \r\ntraditions of Indian gastronomy as it is possible to be &amp;ndash; only the \r\nfinest spices are imported from the markets of India, marinades and \r\npreserves are exclusively made in-house from first principles and each \r\ndish has a story to tell. Being at once steeped in history and \r\nstrikingly modern, it&amp;rsquo;s no accident that Darbaar is poised on the edge \r\nof both the City of London and vibrant Shoreditch. &lt;/span&gt;\r\n\r\n &lt;br /&gt;&lt;br /&gt;&lt;span class="h_light  h_zeta  h_inline  text--centre"&gt;Set\r\n over a sweeping and majestic 5,500 feet, Darbaar plays host to a \r\n220-cover restaurant and bar, including an interactive grill seating \r\narea, 20-cover private dining room and a bespoke chef&amp;rsquo;s table for \r\nentertaining up to 12 people.&lt;br /&gt;&lt;br /&gt;&lt;/span&gt;\r\n\r\n ', '2017-08-07', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `darbaar_story_view`
--
CREATE TABLE IF NOT EXISTS `darbaar_story_view` (
`id` int(20)
,`details` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `blood_group` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `contactnumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `blood_group`, `dob`, `contactnumber`, `address`, `username`, `password`, `date`, `status`) VALUES
(3, 'CMS Admin', '1', '1', '2015-12-09', '01927608261', 'asdS', 'cms', '7e8a32176a113a7ba3d2b1f85834e828', '2015-09-13', 1),
(4, 'Shanto', '1', '1', '1988-08-16', '13231312', 'wesaqweqw', 'shanto', '7e8a32176a113a7ba3d2b1f85834e828', '2015-11-25', 1),
(5, 'Sirajum Munira', '1', '1', '1986-08-29', '01923318408', 'adasdsad', 'munira', '7e8a32176a113a7ba3d2b1f85834e828', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `thumbnail_photo` text,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `thumbnail_photo`, `photo`, `date`, `status`) VALUES
(3, 'thumbnail_photo_upload__1501613391_1501613391.jpg', 'photo_upload__1501613391_1501613391.jpg', '2017-08-01', 1),
(4, 'thumbnail_photo_upload__1502137783_1502137783.jpg', 'photo_upload__1502137783_1502137783.jpg', '2017-08-07', 1),
(5, 'thumbnail_photo_upload__1502137793_1502137793.jpg', 'photo_upload__1502137793_1502137793.jpg', '2017-08-07', 1),
(6, 'thumbnail_photo_upload__1502137802_1502137802.jpg', 'photo_upload__1502137802_1502137802.jpg', '2017-08-07', 1),
(7, 'thumbnail_photo_upload__1502137811_1502137811.jpg', 'photo_upload__1502137811_1502137811.jpg', '2017-08-07', 1),
(8, 'thumbnail_photo_upload__1502137819_1502137819.jpg', 'photo_upload__1502137819_1502137819.jpg', '2017-08-07', 1),
(9, 'thumbnail_photo_upload__1502137828_1502137828.jpg', 'photo_upload__1502137828_1502137828.jpg', '2017-08-07', 1),
(10, 'thumbnail_photo_upload__1502137836_1502137836.jpg', 'photo_upload__1502137836_1502137836.jpg', '2017-08-07', 1),
(11, 'thumbnail_photo_upload__1502137844_1502137844.jpg', 'photo_upload__1502137844_1502137844.jpg', '2017-08-07', 1),
(12, 'thumbnail_photo_upload__1502137851_1502137851.jpg', 'photo_upload__1502137851_1502137851.jpg', '2017-08-07', 1),
(13, 'thumbnail_photo_upload__1502137860_1502137860.jpg', 'photo_upload__1502137860_1502137860.jpg', '2017-08-07', 1),
(14, 'thumbnail_photo_upload__1502137869_1502137869.jpg', 'photo_upload__1502137869_1502137869.jpg', '2017-08-07', 1),
(15, 'thumbnail_photo_upload__1502137877_1502137877.jpg', 'photo_upload__1502137877_1502137877.jpg', '2017-08-07', 1),
(16, 'thumbnail_photo_upload__1502137887_1502137887.jpg', 'photo_upload__1502137887_1502137887.jpg', '2017-08-07', 1),
(17, 'thumbnail_photo_upload__1502137896_1502137896.jpg', 'photo_upload__1502137896_1502137896.jpg', '2017-08-07', 1),
(18, 'thumbnail_photo_upload__1502137903_1502137903.jpg', 'photo_upload__1502137903_1502137903.jpg', '2017-08-07', 1),
(19, 'thumbnail_photo_upload__1502137911_1502137911.jpg', 'photo_upload__1502137911_1502137911.jpg', '2017-08-07', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gallery_view`
--
CREATE TABLE IF NOT EXISTS `gallery_view` (
`id` int(20)
,`thumbnail_photo` text
,`photo` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
--
CREATE TABLE IF NOT EXISTS `login` (
`id` int(20)
,`name` varchar(255)
,`username` varchar(255)
,`password` varchar(255)
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `opening_hours`
--

CREATE TABLE IF NOT EXISTS `opening_hours` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`id`, `details`, `date`, `status`) VALUES
(1, '&lt;h4&gt;Monday to Friday &lt;/h4&gt;&lt;h4&gt;Lunch - 12pm to 2:45pm &lt;/h4&gt;&lt;h4&gt;Monday to Saturday &lt;/h4&gt;&lt;h4&gt;Dinner - 6pm to 10:45pm &lt;/h4&gt;&lt;h4&gt;Bar - 11.30am to 12am &lt;/h4&gt;&lt;h4&gt;(Serving nibbles &amp;amp; small plates)&lt;/h4&gt;&lt;h4&gt;Sunday &lt;/h4&gt;&lt;h4&gt;We are closed.&lt;/h4&gt;', '2017-08-08', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `opening_hours_view`
--
CREATE TABLE IF NOT EXISTS `opening_hours_view` (
`id` int(20)
,`details` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

CREATE TABLE IF NOT EXISTS `page_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_name_view` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `name`, `page_name`, `page_name_view`, `menu_name`, `date`, `status`) VALUES
(2, 'site_basic_info', 'site_basic_info.php', '', 'Site Basic Info', '2017-07-31', 1),
(3, 'slider', 'slider.php', '', 'Slider', '2017-07-31', 1),
(4, 'page_slider', 'page_slider.php', '', 'Page Slider', '2017-07-31', 1),
(5, 'category', 'category.php', '', 'Category', '2017-07-31', 1),
(6, 'reservations', 'reservations.php', '', 'Reservations', '2017-08-01', 1),
(8, 'darbaar_story', 'darbaar_story.php', '', 'Darbaar Story', '2017-08-01', 1),
(9, 'about_chef', 'about_chef.php', '', 'About Chef', '2017-08-01', 1),
(10, 'gallery', 'gallery.php', '', 'Gallery', '2017-08-01', 1),
(11, 'welcome_content', 'welcome_content.php', '', 'Welcome Content', '2017-08-02', 1),
(12, 'category_page', 'category_page.php', '', 'Category Page', '2017-08-06', 1),
(13, 'sub_category', 'sub_category.php', '', 'Sub Category', '2017-08-06', 1),
(14, 'sub_section', 'sub_section.php', '', 'Sub Section', '2017-08-06', 1),
(15, 'product', 'product.php', '', 'Product', '2017-08-06', 1),
(16, 'opening_hours', 'opening_hours.php', '', 'Opening Hours', '2017-08-07', 1),
(17, 'work_for_us_requirement', 'work_for_us_requirement.php', '', 'Work for us requirement', '2017-08-07', 1),
(18, 'work_for_us_details', 'work_for_us_details.php', '', 'Work for us details', '2017-08-07', 1),
(19, 'about_us', 'about_us.php', '', 'About Us', '2017-08-07', 1),
(20, 'sub_menu', 'sub_menu.php', '', 'Sub Menu', '2017-08-11', 1),
(23, 'sub_menu_section', 'sub_menu_section.php', '', 'Sub Menu Section', '2017-08-11', 1),
(25, 'product_menu_name', 'product_menu_name.php', '', 'Product Menu Name', '2017-08-11', 1),
(27, 'product_manu', 'product_manu.php', '', 'Product Manu', '2017-08-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_slider`
--

CREATE TABLE IF NOT EXISTS `page_slider` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) DEFAULT NULL,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `page_slider`
--

INSERT INTO `page_slider` (`id`, `category_id`, `photo`, `date`, `status`) VALUES
(1, 1, 'photo_upload__1501523581_1501523581.jpg', '2017-07-31', 1),
(2, 3, 'photo_upload__1502306102_1502306102.jpg', '2017-08-09', 1),
(3, 3, 'photo_upload__1502306110_1502306110.jpg', '2017-08-09', 1),
(4, 2, 'photo_upload__1502306120_1502306120.jpg', '2017-08-09', 1),
(5, 2, 'photo_upload__1502306126_1502306126.jpg', '2017-08-09', 1),
(6, 2, 'photo_upload__1502306132_1502306132.jpg', '2017-08-09', 1),
(7, 2, 'photo_upload__1502306138_1502306138.jpg', '2017-08-09', 1),
(8, 2, 'photo_upload__1502306143_1502306143.jpg', '2017-08-09', 1),
(9, 2, 'photo_upload__1502306152_1502306152.jpg', '2017-08-09', 1),
(10, 2, 'photo_upload__1502306171_1502306171.jpg', '2017-08-09', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `page_slider_view`
--
CREATE TABLE IF NOT EXISTS `page_slider_view` (
`id` int(20)
,`category_id` int(20)
,`photo` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(20) DEFAULT NULL,
  `sub_category_id` int(20) DEFAULT NULL,
  `sub_section_id` int(20) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `sub_category_id`, `sub_section_id`, `price`, `status`, `date`) VALUES
(1, 'MASALA CUMIN OLIVES', 2, 1, 1, '3', 1, '2017-08-06'),
(3, 'GUN POWDERED NUTS', 2, 1, 1, '3.5', 1, '2017-08-06'),
(4, 'JOHAL MURI PUFFED RICE', 2, 1, 1, '3.5', 1, '2017-08-06'),
(5, 'PUNJABI VEGETABLE DUMPLINGS', 2, 1, 2, '5.5', 1, '2017-08-09'),
(6, 'ANGARA LAMB LASUNI DUMPLINGS', 2, 1, 2, '7.5', 1, '2017-08-09'),
(7, 'HONEY GLAZED CAULIFLOWER WITH SESAME & CHILLI', 2, 1, 3, '5.5', 1, '2017-08-09'),
(8, 'KERALAN HOT AND SWEET SHRIMPS', 2, 1, 3, '6.5', 1, '2017-08-09'),
(9, 'STREET FOOD - DESI CHILLY CHICKEN', 2, 1, 3, '6.5', 1, '2017-08-09'),
(10, 'ORGANIC SALMON, COCONUT & KOKUM - 2 PC', 2, 1, 4, '6', 1, '2017-08-09'),
(11, 'RED SPICED CHICKEN TIKKA - 3 PC', 2, 1, 4, '6', 1, '2017-08-09'),
(12, 'GILAFI LAMB SEEKH KEBAB - 3PC', 2, 1, 4, '6', 1, '2017-08-09'),
(13, 'PINT COBRA 4.3% DRAFT', 2, 2, 5, '5.9', 1, '2017-08-09'),
(14, 'HALF COBRA 4.3% DRAFT', 2, 2, 5, '3', 1, '2017-08-09'),
(15, 'BANGLA 4.8% NRB 330ML', 2, 2, 5, '5.5', 1, '2017-08-09'),
(16, 'CORONA EXTRA 4.6% 330ML', 2, 2, 5, '5.5', 1, '2017-08-09'),
(17, 'PERONI GRAN RESERVE 6.6% 330ML', 2, 2, 5, '5.5', 1, '2017-08-09'),
(18, 'BIRRA MORENA 5.2% 330ML', 2, 2, 5, '4.5', 1, '2017-08-09'),
(19, 'BIRRA MORETTI 4.6% 330ML', 2, 2, 5, '5.9', 1, '2017-08-09'),
(20, 'KING COBRA STRONG LAGER 7.5% 750ML', 2, 2, 5, '10', 1, '2017-08-09'),
(21, 'BLENDED WHISKY', 2, 2, 6, '5.9', 1, '2017-08-09'),
(22, 'J & B RARE WHISKY', 2, 2, 6, '5.9', 1, '2017-08-09'),
(23, 'FAMOUS GROUSE', 2, 2, 6, '7.5', 1, '2017-08-09'),
(24, 'CHIVAS 18 Y/ 0', 2, 2, 6, '6', 1, '2017-08-09'),
(25, 'CHIVAS ROYAL SALUTE 21 Y/ 0', 2, 2, 6, '6.5', 1, '2017-08-09'),
(26, 'JULES CLAIRON', 2, 2, 7, '6', 1, '2017-08-09'),
(27, 'CANTATE CALVADOS', 2, 2, 7, '6.5', 1, '2017-08-09'),
(28, 'JAN. GRANDE ARMAGNAC VSOP', 2, 2, 7, '8.5', 1, '2017-08-09'),
(29, 'GORDON''S', 2, 2, 8, '8', 1, '2017-08-09'),
(30, 'BOMBAY SAPPHIRE', 2, 2, 8, '7.5', 1, '2017-08-09'),
(31, 'G-VINE FLORAISON', 2, 2, 8, '9', 1, '2017-08-09'),
(32, 'GIN ND.3', 2, 2, 8, '9', 1, '2017-08-09'),
(33, 'KETEL ONE', 2, 2, 9, '8', 1, '2017-08-09'),
(34, 'SMIRNOFF', 2, 2, 9, '8', 1, '2017-08-09'),
(35, 'BELVEDERE', 2, 2, 9, '9', 1, '2017-08-09'),
(36, 'BELUGA NOBLE RUSSIAN', 2, 2, 9, '12', 1, '2017-08-09'),
(37, 'GREY GOOSE LE CITROEN', 2, 2, 9, '12', 1, '2017-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `product_manu`
--

CREATE TABLE IF NOT EXISTS `product_manu` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) DEFAULT NULL,
  `sub_menu_id` int(20) DEFAULT NULL,
  `sub_menu_section_id` int(20) DEFAULT NULL,
  `sub_menu_product_name_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `product_manu`
--

INSERT INTO `product_manu` (`id`, `category_id`, `sub_menu_id`, `sub_menu_section_id`, `sub_menu_product_name_id`, `name`, `price`, `status`, `date`) VALUES
(1, 3, 1, 1, 1, 'HARYALI DATE & SAMOSA CHAAT (V)', '5.00', 1, '2017-08-12'),
(2, 3, 1, 1, 1, 'SPICED CORN FRITTERS (V)', '5.00', 1, '2017-08-12'),
(3, 3, 1, 1, 1, 'STIR FRIED SHRIMPS WITH KARELAN SPICES', '8.00', 1, '2017-08-12'),
(4, 3, 1, 1, 1, 'ASSORTED PAPAD CRISPS AND CHUTNEYS (V)', '8.00', 1, '2017-08-12'),
(5, 3, 1, 1, 1, 'COCONUT AMRITSARI SPICED CALAMARI', '6.50', 1, '2017-08-12'),
(6, 3, 1, 1, 2, 'SHAHI PANEER WITH YOUNG DATES & FIG CHUTNEY (V)', '8.00', 1, '2017-08-12'),
(7, 3, 1, 1, 2, 'ROYAL BENGAL STYLE, WILD MADAGASCAR PRAWN  CHEF ABDUL RECOMMENDS WILD MADAGASCAN PRAWN AS COOKED IN MASTERCHEF UK 2017', '16.00', 1, '2017-08-12'),
(8, 3, 1, 1, 2, 'TANDOORI SALMON WITH KOKUM BERRIES & COCONUT', '8.50', 1, '2017-08-12'),
(9, 3, 1, 1, 2, 'MURGH MALAI KEBAB WITH BASIL, BEETROOT RAITA', '8.50', 1, '2017-08-12'),
(10, 3, 1, 1, 3, 'ABDUL’S PLATTER OF ASSORTED GRILLS & KEBABS', '28.0', 1, '2017-08-12'),
(11, 3, 1, 1, 3, 'THE ROYAL POT SHARE THE DELICACY OF LAMB COOKED TWO WAYS', '29.00', 1, '2017-08-12'),
(12, 3, 1, 1, 4, '‘SAAG’ PANEER WITH GARLIC & SMOKED CHILLIES (V)', '16.00', 1, '2017-08-12'),
(13, 3, 1, 1, 4, 'BANANA LEAF WRAPPED BREAM, COCONUT & GINGER CHUTNEY', '20.00', 1, '2017-08-12'),
(14, 3, 1, 1, 4, 'KASTURI FREE RANGE BUTTER CHICKEN CURRY', '18.00', 1, '2017-08-12'),
(15, 3, 1, 1, 5, 'GARLIC NAAN, HERB NAAN, LACCHA PARATHA (EACH)', '3.00', 1, '2017-08-12'),
(16, 3, 1, 1, 5, 'STEAMED RICE | PILAU RICE', '3.00', 1, '2017-08-12'),
(17, 3, 1, 1, 5, 'KAALI DAL', '5.00', 1, '2017-08-12'),
(18, 3, 1, 4, 6, 'SERVED WITH YOUR CHOICE OF LEAF OR HERBAL INFUSION TEAS. GUNPOWDER, EARL GREY, CAMOMILE FLOWERS, FRESH MINT, MASALA CHAI', '5.00', 1, '2017-08-12'),
(19, 3, 1, 4, 6, 'SPICY BONDA BOMBAY STYLE - MASALA CHICKEN / CUMIN POTATO FRITTER', '3.00', 1, '2017-08-12'),
(20, 3, 1, 4, 7, 'CARDAMOM SHRIKHAND ON NAN KHATAI  ', '5.00', 1, '2017-08-12'),
(21, 3, 1, 4, 7, 'GULAB JAMUN WITH CARDAMOM SHRIKHAND ', '5.00', 1, '2017-08-12'),
(22, 3, 1, 4, 7, ' VALRHONA DARK CHOCOLATE & CHILLI CAKE', '3.00', 1, '2017-08-12'),
(23, 3, 1, 4, 8, 'VERY POPULAR SNACK IN PUNJAB, CRISPY PASTRIES STUFFED WITH VEGETABLES & SPICES', '10.00', 1, '2017-08-12'),
(24, 3, 1, 4, 9, 'HONEY GLAZED WOOD BAKED BREAD WITH STRAWBERY CREAM', '10.00', 1, '2017-08-12'),
(25, 3, 2, 2, 10, 'HARYALI DATE & SAMOSA CHAAT (V)', '6.00', 1, '2017-08-12'),
(26, 3, 2, 2, 10, 'GREEN PEA & APRICOT CAKE (V)', '5.00', 1, '2017-08-12'),
(27, 3, 2, 2, 10, 'AMRITSARI SPICED CALAMARI FRITTERS', '6.00', 1, '2017-08-12'),
(28, 3, 2, 2, 10, 'STIR FRIED SHRIMPS WITH KARELAN SPICES', '8.00', 1, '2017-08-12'),
(29, 3, 2, 2, 11, 'SHAHI PANEER WITH YOUNG DATES & FIG CHUTNEY (V)', '8.00', 1, '2017-08-12'),
(30, 3, 2, 2, 11, 'TANDOORI GOBI ADRAKI WITH CORIANDER CHUTNEY (V)', '9.00', 1, '2017-08-12'),
(31, 3, 2, 2, 11, 'KING SCALLOPS, WILD MUSHROOM ACHAR, CAULIFLOWER PUREE', '10.00', 1, '2017-08-12'),
(32, 3, 2, 2, 11, 'ROYAL BENGAL STYLE, WILD MADAGASCAR PRAWN  CHEF ABDUL RECOMMENDS WILD MADAGASCAN PRAWN AS COOKED IN MASTERCHEF UK 2016', '15.00', 1, '2017-08-12'),
(33, 3, 2, 2, 12, ' PER PERSON', '65.00', 1, '2017-08-12'),
(34, 3, 2, 2, 12, 'APPETISER TAWA HARI TIKKI CHAAT (V)', '50.00', 1, '2017-08-12'),
(35, 3, 2, 2, 12, '1ST STARTER GRIDDLED KING SCALLOP & ROYAL MADAGASCAR PRAWN', '60.00', 1, '2017-08-12'),
(36, 3, 2, 2, 13, '‘SAAG’ PANEER WITH GARLIC & SMOKED CHILLIES (V)', '16.00', 1, '2017-08-12'),
(37, 3, 2, 2, 13, 'KADHAI STYLE FRESH WATER KING PRAWNS WITH RED ONIONS', '16.00', 1, '2017-08-12'),
(38, 3, 2, 2, 13, 'KASTURI FREE RANGE BUTTER CHICKEN CURRY', '23.00', 1, '2017-08-12'),
(39, 3, 2, 2, 13, 'KASHMIRI LAMB LEG ROGANJOSH', '20.00', 1, '2017-08-12'),
(40, 3, 2, 2, 14, 'HUNTER STYLE GUINEAFOWL BREAST AND CURRIED LEG', '24.00', 1, '2017-08-12'),
(41, 3, 2, 2, 14, 'RAAN-E-MUSSALAM - DOUBLE ROASTED LEG OF BABY LAMB', '25.00', 1, '2017-08-12'),
(42, 3, 2, 2, 14, 'THE ROYAL POT SHARE THE DELICACY OF LAMB COOKED TWO WAYS', '39.00', 1, '2017-08-12'),
(43, 3, 2, 2, 15, 'GARLIC NAAN, HERB NAAN, LACCHA PARATHA', '3.00', 1, '2017-08-12'),
(44, 3, 2, 2, 15, 'PESHWARI NAAN', '3.50', 1, '2017-08-12'),
(45, 3, 2, 2, 15, 'STEAMED RICE', '2.5', 1, '2017-08-12'),
(46, 3, 2, 2, 15, 'PILAU RICE', '3.50', 1, '2017-08-12'),
(47, 3, 3, 6, 16, 'SPICED VEGGIE FRITTERS (V)', '5.00', 1, '2017-08-12'),
(48, 3, 3, 6, 16, 'PANEER TIKKA KATHI ROLL (V)', '5.00', 1, '2017-08-12'),
(49, 3, 3, 6, 16, 'CHICKEN TIKKA SANDWICH', '4.00', 1, '2017-08-12'),
(50, 3, 3, 6, 17, 'SPICED CARROT CAKE', '5.00', 1, '2017-08-12'),
(51, 3, 3, 6, 17, 'CHOCOLATE BROWNIE', '3.00', 1, '2017-08-12'),
(52, 3, 3, 6, 17, 'SOFT DRINKS', '3.00', 1, '2017-08-12'),
(53, 3, 3, 7, 18, 'ASSORTED POPPADUM’S', '5.00', 1, '2017-08-12'),
(54, 3, 3, 7, 18, 'HOME MADE CHUTNEY', '3.00', 1, '2017-08-12'),
(55, 3, 3, 7, 19, 'KOLKATA STREET CHILLI PANEER', '8.00', 1, '2017-08-12'),
(56, 3, 3, 7, 19, 'KERALAN HOT & SWEET SHRIMP', '9.00', 1, '2017-08-12'),
(57, 3, 3, 7, 19, 'TANDOORI SALMON TIKKA', '8.00', 1, '2017-08-12'),
(58, 3, 3, 7, 20, 'TANDOORI COTTAGE CHEESE MAKHANWALA', '8.00', 1, '2017-08-12'),
(59, 3, 3, 7, 20, 'LUCKNOW STYLE BABY AUBERGINE', '14.00', 1, '2017-08-12'),
(60, 3, 3, 7, 20, '‘KADHAI’ SPICED CHICKEN THIGHS WITH PEPPERS', '16.00', 1, '2017-08-12'),
(61, 3, 3, 7, 21, 'GARLIC NAAN', '3.50', 1, '2017-08-12'),
(62, 3, 3, 7, 21, 'PLAIN NAAN', '3.00', 1, '2017-08-12'),
(63, 3, 3, 7, 21, 'PESHAWARI NAAN', '2.5', 1, '2017-08-12'),
(64, 3, 3, 8, 22, 'PROSECCO SERENELLO EXTRA DRY NV - THE DELICIOUS AROMAS OF APPLE AND PEAR MELT INTO A SMOOTH AND FRESH WINE ON THE PALATE.', '35.00', 1, '2017-08-12'),
(65, 3, 3, 8, 22, 'EMOTIVO SPARKLING ROSE NV - PACKED FULL OF FRESH RED BERRIES A GREAT DRIER STYLE FIZZ. SUMMER IN A GLASS!', '35.00', 1, '2017-08-12'),
(66, 3, 3, 8, 22, 'CHAMPAGNE DE CASTELNAU BRUT RESERVE NV - THIS CUVEE IS BEST DESCRIBED AS HAVING THE SOUL OF A VINTAGE WINE IN THE BODY OF A NON-VINTAGE.', '65.00', 1, '2017-08-12'),
(67, 3, 3, 8, 23, 'JARRAH WOOD CHARDONNAY 2014 FRESH AND WELL BALANCED, THIS FRUIT DRIVEN CHARDONNAY HAS PLENTY OF TROPICAL FRUIT FLAVOURS OF MELONS AND PEACH WITH RICH AROMAS.', '45.00', 1, '2017-08-12'),
(68, 3, 3, 8, 23, 'NIEL JOUBERT CHENIN BLANC 2014 IS IN A GOOD SITUATION TO GENTLY RIPEN SAUVIGNON BLANC GRAPES TO PERFECTION. THIS IS CLEAN AND FRESH WITH AROMAS OF RIPE GRAPEFRUIT AND LEMON ZEST.', '25.00', 1, '2017-08-12'),
(69, 3, 3, 8, 23, 'CASA RIVAS SAUVIGNON BLANC MAIPO VALLEY 2014 IS IN A GOOD SITUATION TO GENTLY RIPEN SAUVIGNON BLANC GRAPES TO PERFECTION. THIS IS CLEAN AND FRESH WITH AROMAS OF RIPE GRAPEFRUIT AND LEMON ZEST.', '25.00', 1, '2017-08-12'),
(70, 3, 3, 8, 23, 'CHABLIS 1ER CRU FOURCHAUME 2013 THIS STUNNING WINE ORIGINATES FROM VINYARDS SITUATED ON LONG SLOPES FACING THE SUNRISE . WHICH AID QUALITY MATURING, RESULTING IN A LONG AND RICH WINE WITH FRUITY FLAVOURS AND THOSE ALL IMPORTANT MINERAL NOTES.', '65.00', 1, '2017-08-12'),
(71, 3, 3, 8, 23, 'DOMAINE GUY BOCARD MEURSAULT VIEILLES VIGNES 2011 GUY BOCARDS MOTTO IS IF YOU CAN TASTE THE OAK I''VE USED TOO MUCH. THIS IS A RICH TROPICAL JOURNEY REFINED AND ELEGANT ALL THE WAY.', '85.00', 1, '2017-08-12'),
(72, 3, 3, 8, 23, 'PULIGNY MONTRACHET DOMAINE JEAN PASCAL 2013 LIGHTLY OAK RETAINING BUTTERSCOTCH AND HAZELNUT HINTS, FINISHES WITH COMPLEX FLAVOURS OF BRIOCHE AND CINNAMON.', '80.00', 1, '2017-08-12'),
(73, 3, 3, 8, 24, 'MONTEREY BAY ZINFANDEL ROSE 2014 QUITE THE MOST DELICIOUS WINE. A RACY MIX OF WATERMELON AND CHERRY WITH A DELECTABLE SWEETNESS.', '25.00', 1, '2017-08-12'),
(74, 3, 3, 8, 24, 'ROSE D''ANJOU LA ROSERAIE MARQUIS DE GOULAINE 2013 THIS ROSE WINE IS MEDIUM DRY WITH A FRUITY FLAVOUR AND A DELICATE BOUQUET, BURSTING WITH STRAWBERRY...A GREAT EASY SRINKING ROSE', '28.00', 1, '2017-08-12'),
(75, 3, 3, 8, 24, 'PINOT GRIGIO ROSE FABIANO 2014 THIS ELEGANT AND FRAGRANT PINOT GRIGIO BLUSH IS DELICATELY AROMATIC AND DELICIOUSLY CRISP ON THE PALATE', '30.00', 1, '2017-08-12'),
(76, 3, 3, 8, 25, 'PARLEZ-VOUS? MALBEC 2014 A DELIGHTFUL RUBY COLOUR THAT HAS AN EXPRESSIVE BOUQUET OF RED FRUITS THAT LEADS TO A HARMONIOUS AND NICELY STRUCTURED WINE', '25.00', 1, '2017-08-12'),
(77, 3, 3, 8, 25, 'WHISTLING DUCK CARBERNET MERLOT 2014 LIFTED AROMAS OF PLUM AND FRESH RED BERRIES. A VIBRANT WINT THAT PERFECTLY BALANCES TANNIC CABERNET WITH THE SOFTNESS OF MERLOT', '28.00', 1, '2017-08-12'),
(78, 3, 3, 8, 25, 'PINOT NOIR VIN DE FRANCE - PATRIARCHE TRENDY GRAPE VARIETAL THAT HAS A YOUTHFUL RED COLOUR. THE PALATES RICH AND MOUTH FILLING WITH THE RED FRUIT AROMAS CARRYING THROUGH TO THE FINISH.', '30.00', 1, '2017-08-12'),
(79, 3, 2, 5, 26, 'SERVED WITH YOUR CHOICE OF LEAF OR HERBAL INFUSION TEAS. GUNPOWDER, EARL GREY, CAMOMILE FLOWERS, FRESH MINT, MASALA CHAI', '10.00', 1, '2017-08-12'),
(80, 3, 2, 5, 26, 'SPICY BONDA BOMBAY STYLE - MASALA CHICKEN / CUMIN POTATO FRITTER', '10.00', 1, '2017-08-12'),
(81, 3, 2, 5, 27, 'CARROT HULWA SAMOSA WITH SAFFRON CUSTARD  ', '5.00', 1, '2017-08-12'),
(82, 3, 2, 5, 27, 'CARDAMOM SHRIKHAND ON NAN KHATAI  ', '5.00', 1, '2017-08-12'),
(83, 3, 2, 5, 27, 'GULAB JAMUN WITH CARDAMOM SHRIKHAND  ', '5.00', 1, '2017-08-12'),
(84, 3, 2, 5, 27, 'VALRHONA DARK CHOCOLATE & CHILLI CAKE', '5.00', 1, '2017-08-12'),
(85, 3, 2, 5, 28, 'VERY POPULAR SNACK IN PUNJAB, CRISPY PASTRIES STUFFED WITH VEGETABLES & SPICES', '15.00', 1, '2017-08-12'),
(86, 3, 2, 5, 29, 'HONEY GLAZED WOOD BAKED BREAD WITH STRAWBERY CREAM', '10.00', 1, '2017-08-12');

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_manu_view`
--
CREATE TABLE IF NOT EXISTS `product_manu_view` (
`id` int(20)
,`category_id` int(20)
,`sub_menu_id` int(20)
,`sub_menu_section_id` int(20)
,`sub_menu_product_name_id` int(20)
,`name` varchar(255)
,`price` varchar(255)
,`status` int(2)
,`date` date
);
-- --------------------------------------------------------

--
-- Table structure for table `product_menu_name`
--

CREATE TABLE IF NOT EXISTS `product_menu_name` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) DEFAULT NULL,
  `sub_menu_id` int(20) DEFAULT NULL,
  `sub_menu_section_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `product_menu_name`
--

INSERT INTO `product_menu_name` (`id`, `category_id`, `sub_menu_id`, `sub_menu_section_id`, `name`, `date`, `status`) VALUES
(1, 3, 1, 1, 'LIGHT BIGHTS', '2017-08-11', 1),
(2, 3, 1, 1, 'SIGRI, GRILL & TANDOOR', '2017-08-11', 1),
(3, 3, 1, 1, 'DESIGNED TO SHARE – FOR 2 PEOPLE', '2017-08-11', 1),
(4, 3, 1, 1, 'CURRIES & SIGNATURES', '2017-08-11', 1),
(5, 3, 1, 1, 'SIDE DISHES', '2017-08-11', 1),
(6, 3, 1, 4, 'TEAS', '2017-08-11', 1),
(7, 3, 1, 4, 'SWEET', '2017-08-11', 1),
(8, 3, 1, 4, 'DATE SAMOSA', '2017-08-11', 1),
(9, 3, 1, 4, 'BAKED BREAD', '2017-08-11', 1),
(10, 3, 2, 2, 'LIGHT BIGHTS', '2017-08-11', 1),
(11, 3, 2, 2, 'SIGRI, GRILL & TANDOOR', '2017-08-11', 1),
(12, 3, 2, 2, 'THRILL OF THE GRILL', '2017-08-11', 1),
(13, 3, 2, 2, 'CURRIES', '2017-08-11', 1),
(14, 3, 2, 2, 'CHEFS SPECIAL', '2017-08-11', 1),
(15, 3, 2, 2, 'SIDE DISHES', '2017-08-11', 1),
(16, 3, 3, 6, 'EXPRESS CAFE MENU', '2017-08-11', 1),
(17, 3, 3, 6, 'SWEET BITE', '2017-08-11', 1),
(18, 3, 3, 7, 'SNACK & NIBBLES', '2017-08-11', 1),
(19, 3, 3, 7, 'STARTERS', '2017-08-11', 1),
(20, 3, 3, 7, 'MAINS', '2017-08-11', 1),
(21, 3, 3, 7, 'SIDE DISHES', '2017-08-11', 1),
(22, 3, 3, 8, 'SPARKLING WINE & CHAMPAGNE', '2017-08-11', 1),
(23, 3, 3, 8, 'WHITE WINES', '2017-08-11', 1),
(24, 3, 3, 8, 'ROSE WINES', '2017-08-11', 1),
(25, 3, 3, 8, 'RED WINES', '2017-08-11', 1),
(26, 3, 2, 5, 'TEAS', '2017-08-12', 1),
(27, 3, 2, 5, 'SWEET', '2017-08-12', 1),
(28, 3, 2, 5, 'DATE SAMOSA', '2017-08-12', 1),
(29, 3, 2, 5, 'BAKED BREAD', '2017-08-12', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_menu_name_view`
--
CREATE TABLE IF NOT EXISTS `product_menu_name_view` (
`id` int(20)
,`category_id` int(20)
,`sub_menu_id` int(20)
,`sub_menu_section_id` int(20)
,`name` varchar(255)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `product_view`
--
CREATE TABLE IF NOT EXISTS `product_view` (
`id` int(20)
,`name` varchar(255)
,`category_id` int(20)
,`sub_category_id` int(20)
,`sub_section_id` int(20)
,`price` varchar(255)
,`status` int(2)
,`date` date
);
-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `number_of_person` varchar(255) DEFAULT NULL,
  `reservations_date` varchar(255) DEFAULT NULL,
  `reservations_time` varchar(255) DEFAULT NULL,
  `message` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `number_of_person`, `reservations_date`, `reservations_time`, `message`, `date`, `status`) VALUES
(1, 'gffgsgsdgsdg', 'gsdgs@gffg.sad', '3425235325235', '2 Person', '2017-08-02', '01:30:00', 'dfgdfhh', '2017-08-08', 1),
(2, 'fa', 'fa@gmail.com', '554545454545', '2 Person', '2017-08-11', '01:20:00', 'asdasdadadad', '2017-08-11', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reservations_view`
--
CREATE TABLE IF NOT EXISTS `reservations_view` (
`id` int(20)
,`name` varchar(255)
,`email` varchar(255)
,`phone` varchar(255)
,`number_of_person` varchar(255)
,`reservations_date` varchar(255)
,`reservations_time` varchar(255)
,`message` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `site_basic_info`
--

CREATE TABLE IF NOT EXISTS `site_basic_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) DEFAULT NULL,
  `top_logo` text,
  `logo` text,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text,
  `keywords` text,
  `description` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_basic_info`
--

INSERT INTO `site_basic_info` (`id`, `site_name`, `top_logo`, `logo`, `email`, `phone`, `address`, `keywords`, `description`, `date`, `status`) VALUES
(1, 'Indian Restaurant & Bar, Broadgate Quarter, London | Darbaar Restaurant', 'top_logo_upload_site_basic_info_1502128830_1502128830.png', 'logo_upload_site_basic_info_1502128831_1502128831.png', 'INFO@DARBAARRESTAURANTS.COM', '02074224100', 'Darbaar Restaurant | 1 Snowden Street | Broadgate Quarter | London | EC2A 2DQ ', 'Darbaar Restaurant, located by the buzzing Broadgate Circle, combines the regal feel of the Maharajan court, with modern British cuisine to create a unique dining experience.&lt;br /&gt;', 'Darbaar Restaurant, located by the buzzing Broadgate Circle, combines the regal feel of the Maharajan court, with modern British cuisine to create a unique dining experience.', '2017-08-07', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `site_basic_info_view`
--
CREATE TABLE IF NOT EXISTS `site_basic_info_view` (
`id` int(20)
,`site_name` varchar(255)
,`top_logo` text
,`logo` text
,`email` varchar(255)
,`phone` varchar(255)
,`address` text
,`keywords` text
,`description` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `photo`, `date`, `status`) VALUES
(1, 'photo_upload__1501522956_1501522956.jpg', '2017-07-31', 1),
(2, 'photo_upload__1502137040_1502137040.jpg', '2017-08-07', 1),
(3, 'photo_upload__1502137047_1502137047.jpg', '2017-08-07', 1),
(4, 'photo_upload__1502137054_1502137054.jpg', '2017-08-07', 1),
(5, 'photo_upload__1502137061_1502137061.jpg', '2017-08-07', 1),
(6, 'photo_upload__1502137067_1502137067.jpg', '2017-08-07', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `slider_view`
--
CREATE TABLE IF NOT EXISTS `slider_view` (
`id` int(20)
,`photo` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `date`, `status`) VALUES
(1, 2, 'Bar Food', '2017-08-06', 1),
(2, 2, 'DRINKS', '2017-08-09', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub_category_view`
--
CREATE TABLE IF NOT EXISTS `sub_category_view` (
`id` int(20)
,`category_id` int(20)
,`name` varchar(255)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_menu` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `category_id`, `name`, `date`, `status`) VALUES
(1, 3, 'LUNCH', '2017-08-11', 1),
(2, 3, 'DINNER', '2017-08-11', 1),
(3, 3, 'BAR', '2017-08-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_section`
--

CREATE TABLE IF NOT EXISTS `sub_menu_section` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) DEFAULT NULL,
  `sub_category_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sub_menu_section`
--

INSERT INTO `sub_menu_section` (`id`, `category_id`, `sub_category_id`, `name`, `priority`, `date`, `status`) VALUES
(1, 3, 1, 'A LA CARTE LUNCH', 1, '2017-08-11', 1),
(2, 3, 2, 'A LA CARTE LUNCH', 2, '2017-08-11', 1),
(4, 3, 1, 'HIGH TEA - MAHARANI CHAI', 3, '2017-08-11', 1),
(5, 3, 2, 'HIGH TEA - MAHARANI CHAI', 4, '2017-08-11', 1),
(6, 3, 3, 'CAFE MENU', 5, '2017-08-11', 1),
(7, 3, 3, 'FATHER''S DAY MENU', 6, '2017-08-11', 1),
(8, 3, 3, 'WINE LIST', 7, '2017-08-11', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub_menu_section_view`
--
CREATE TABLE IF NOT EXISTS `sub_menu_section_view` (
`id` int(20)
,`category_id` int(20)
,`sub_category_id` int(20)
,`name` varchar(255)
,`priority` int(20)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `sub_menu_view`
--
CREATE TABLE IF NOT EXISTS `sub_menu_view` (
`id` int(20)
,`category_id` int(20)
,`name` varchar(255)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `sub_section`
--

CREATE TABLE IF NOT EXISTS `sub_section` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) DEFAULT NULL,
  `sub_category_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sub_section`
--

INSERT INTO `sub_section` (`id`, `category_id`, `sub_category_id`, `name`, `priority`, `date`, `status`) VALUES
(1, 2, 1, 'NIBBLES', 1, '2017-08-06', 1),
(2, 2, 1, 'TANDOORI MOMOS', 2, '2017-08-09', 1),
(3, 2, 1, 'STIR-FRIED', 3, '2017-08-09', 1),
(4, 2, 1, 'GRILLS & KEBABS', 4, '2017-08-09', 1),
(5, 2, 2, 'BEERS', 5, '2017-08-09', 1),
(6, 2, 2, 'WHISKY', 7, '2017-08-09', 1),
(7, 2, 2, 'COGNAC & BRANDY', 8, '2017-08-09', 1),
(8, 2, 2, 'GIN', 9, '2017-08-09', 1),
(9, 2, 2, 'VODKA', 10, '2017-08-09', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub_section_view`
--
CREATE TABLE IF NOT EXISTS `sub_section_view` (
`id` int(20)
,`category_id` int(20)
,`sub_category_id` int(20)
,`name` varchar(255)
,`priority` int(20)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `welcome_content`
--

CREATE TABLE IF NOT EXISTS `welcome_content` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `short_details` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `welcome_content`
--

INSERT INTO `welcome_content` (`id`, `name`, `map`, `short_details`, `youtube_link`, `date`, `status`) VALUES
(1, 'Royal inspired modern Indian cuisine', 'https://goo.gl/maps/EnEXyXBt34J2', 'We won the The Best Newcomer Award by British Curry Awards 2016. ', 'https://www.youtube.com/embed/ytgsncO6RDw', '2017-08-07', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `welcome_content_view`
--
CREATE TABLE IF NOT EXISTS `welcome_content_view` (
`id` int(20)
,`name` varchar(255)
,`map` varchar(255)
,`short_details` varchar(255)
,`youtube_link` varchar(255)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `work_for_us_details`
--

CREATE TABLE IF NOT EXISTS `work_for_us_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `work_for_us_details`
--

INSERT INTO `work_for_us_details` (`id`, `details`, `date`, `status`) VALUES
(1, 'If you answer yes to these questions Darbaar may be the career for you. As a dynamic and entrepreneurial company we want you to grow and develop with us. Join us not just for a job but for a career that could take you as far as you want to go, and more! Our vision is to be recognised as &amp;lsquo;DARBAAR&amp;rsquo; which translates to be &amp;lsquo;The Royal Court&amp;rsquo; and we aim that all our customers should resonate this. We deliver service excellence, quality, originality and value to our customers through employing and developing great people who are forward thinking and willing to challenge. We will provide you with the training and development to support your aspirations. When we invest in business, we not only invest in bricks and walls, we invest in the team which will bring the restaurant to life and make it a success. Whatever your role within Darbaar, your contribution is recognised - you are a truly valued member of the team. If you would like to work with us, then please send your cv and cover letter to &lt;a href="mailto:info@darbaarrestaurants.com??" target="_blank"&gt;info@darbaarrestaurants.com&lt;/a&gt;', '2017-08-08', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `work_for_us_details_view`
--
CREATE TABLE IF NOT EXISTS `work_for_us_details_view` (
`id` int(20)
,`details` text
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `work_for_us_requirement`
--

CREATE TABLE IF NOT EXISTS `work_for_us_requirement` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `work_for_us_requirement`
--

INSERT INTO `work_for_us_requirement` (`id`, `name`, `date`, `status`) VALUES
(1, 'Do you know how to make first impressions count?', '2017-08-08', 1),
(2, 'Are you keen to anticipate guest''s needs?', '2017-08-08', 1),
(3, 'Do you think you can work towards achieving service excellence?', '2017-08-08', 1),
(4, 'Do you believe there is no ‘I’ in TEAM?', '2017-08-08', 1),
(5, 'Do you want to join a team who put guests at the center of their world?', '2017-08-08', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `work_for_us_requirement_view`
--
CREATE TABLE IF NOT EXISTS `work_for_us_requirement_view` (
`id` int(20)
,`name` varchar(255)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Structure for view `about_chef_view`
--
DROP TABLE IF EXISTS `about_chef_view`;

CREATE  VIEW `about_chef_view` AS select `about_chef`.`id` AS `id`,`about_chef`.`chef_name` AS `chef_name`,`about_chef`.`chef_short_title` AS `chef_short_title`,`about_chef`.`details` AS `details`,`about_chef`.`photo` AS `photo`,`about_chef`.`date` AS `date`,`about_chef`.`status` AS `status` from `about_chef`;

-- --------------------------------------------------------

--
-- Structure for view `about_us_view`
--
DROP TABLE IF EXISTS `about_us_view`;

CREATE  VIEW `about_us_view` AS select `about_us`.`id` AS `id`,`about_us`.`photo` AS `photo`,`about_us`.`details` AS `details`,`about_us`.`date` AS `date`,`about_us`.`status` AS `status` from `about_us`;

-- --------------------------------------------------------

--
-- Structure for view `category_page_view`
--
DROP TABLE IF EXISTS `category_page_view`;

CREATE  VIEW `category_page_view` AS select `category_page`.`id` AS `id`,`category_page`.`category_id` AS `category_id`,`category_page`.`category_image` AS `category_image`,`category_page`.`page_content` AS `page_content`,`category_page`.`category_banner` AS `category_banner`,`category_page`.`date` AS `date`,`category_page`.`status` AS `status` from `category_page`;

-- --------------------------------------------------------

--
-- Structure for view `category_view`
--
DROP TABLE IF EXISTS `category_view`;

CREATE  VIEW `category_view` AS select `category`.`id` AS `id`,`category`.`name` AS `name`,`category`.`date` AS `date`,`category`.`status` AS `status` from `category`;

-- --------------------------------------------------------

--
-- Structure for view `darbaar_story_view`
--
DROP TABLE IF EXISTS `darbaar_story_view`;

CREATE  VIEW `darbaar_story_view` AS select `darbaar_story`.`id` AS `id`,`darbaar_story`.`details` AS `details`,`darbaar_story`.`date` AS `date`,`darbaar_story`.`status` AS `status` from `darbaar_story`;

-- --------------------------------------------------------

--
-- Structure for view `gallery_view`
--
DROP TABLE IF EXISTS `gallery_view`;

CREATE  VIEW `gallery_view` AS select `gallery`.`id` AS `id`,`gallery`.`thumbnail_photo` AS `thumbnail_photo`,`gallery`.`photo` AS `photo`,`gallery`.`date` AS `date`,`gallery`.`status` AS `status` from `gallery`;

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE  VIEW `login` AS select `employee`.`id` AS `id`,`employee`.`name` AS `name`,`employee`.`username` AS `username`,`employee`.`password` AS `password`,`employee`.`status` AS `status` from `employee`;

-- --------------------------------------------------------

--
-- Structure for view `opening_hours_view`
--
DROP TABLE IF EXISTS `opening_hours_view`;

CREATE  VIEW `opening_hours_view` AS select `opening_hours`.`id` AS `id`,`opening_hours`.`details` AS `details`,`opening_hours`.`date` AS `date`,`opening_hours`.`status` AS `status` from `opening_hours`;

-- --------------------------------------------------------

--
-- Structure for view `page_slider_view`
--
DROP TABLE IF EXISTS `page_slider_view`;

CREATE  VIEW `page_slider_view` AS select `page_slider`.`id` AS `id`,`page_slider`.`category_id` AS `category_id`,`page_slider`.`photo` AS `photo`,`page_slider`.`date` AS `date`,`page_slider`.`status` AS `status` from `page_slider`;

-- --------------------------------------------------------

--
-- Structure for view `product_manu_view`
--
DROP TABLE IF EXISTS `product_manu_view`;

CREATE  VIEW `product_manu_view` AS select `product_manu`.`id` AS `id`,`product_manu`.`category_id` AS `category_id`,`product_manu`.`sub_menu_id` AS `sub_menu_id`,`product_manu`.`sub_menu_section_id` AS `sub_menu_section_id`,`product_manu`.`sub_menu_product_name_id` AS `sub_menu_product_name_id`,`product_manu`.`name` AS `name`,`product_manu`.`price` AS `price`,`product_manu`.`status` AS `status`,`product_manu`.`date` AS `date` from `product_manu`;

-- --------------------------------------------------------

--
-- Structure for view `product_menu_name_view`
--
DROP TABLE IF EXISTS `product_menu_name_view`;

CREATE  VIEW `product_menu_name_view` AS select `product_menu_name`.`id` AS `id`,`product_menu_name`.`category_id` AS `category_id`,`product_menu_name`.`sub_menu_id` AS `sub_menu_id`,`product_menu_name`.`sub_menu_section_id` AS `sub_menu_section_id`,`product_menu_name`.`name` AS `name`,`product_menu_name`.`date` AS `date`,`product_menu_name`.`status` AS `status` from `product_menu_name`;

-- --------------------------------------------------------

--
-- Structure for view `product_view`
--
DROP TABLE IF EXISTS `product_view`;

CREATE  VIEW `product_view` AS select `product`.`id` AS `id`,`product`.`name` AS `name`,`product`.`category_id` AS `category_id`,`product`.`sub_category_id` AS `sub_category_id`,`product`.`sub_section_id` AS `sub_section_id`,`product`.`price` AS `price`,`product`.`status` AS `status`,`product`.`date` AS `date` from `product`;

-- --------------------------------------------------------

--
-- Structure for view `reservations_view`
--
DROP TABLE IF EXISTS `reservations_view`;

CREATE  VIEW `reservations_view` AS select `reservations`.`id` AS `id`,`reservations`.`name` AS `name`,`reservations`.`email` AS `email`,`reservations`.`phone` AS `phone`,`reservations`.`number_of_person` AS `number_of_person`,`reservations`.`reservations_date` AS `reservations_date`,`reservations`.`reservations_time` AS `reservations_time`,`reservations`.`message` AS `message`,`reservations`.`date` AS `date`,`reservations`.`status` AS `status` from `reservations`;

-- --------------------------------------------------------

--
-- Structure for view `site_basic_info_view`
--
DROP TABLE IF EXISTS `site_basic_info_view`;

CREATE  VIEW `site_basic_info_view` AS select `site_basic_info`.`id` AS `id`,`site_basic_info`.`site_name` AS `site_name`,`site_basic_info`.`top_logo` AS `top_logo`,`site_basic_info`.`logo` AS `logo`,`site_basic_info`.`email` AS `email`,`site_basic_info`.`phone` AS `phone`,`site_basic_info`.`address` AS `address`,`site_basic_info`.`keywords` AS `keywords`,`site_basic_info`.`description` AS `description`,`site_basic_info`.`date` AS `date`,`site_basic_info`.`status` AS `status` from `site_basic_info`;

-- --------------------------------------------------------

--
-- Structure for view `slider_view`
--
DROP TABLE IF EXISTS `slider_view`;

CREATE  VIEW `slider_view` AS select `slider`.`id` AS `id`,`slider`.`photo` AS `photo`,`slider`.`date` AS `date`,`slider`.`status` AS `status` from `slider`;

-- --------------------------------------------------------

--
-- Structure for view `sub_category_view`
--
DROP TABLE IF EXISTS `sub_category_view`;

CREATE  VIEW `sub_category_view` AS select `sub_category`.`id` AS `id`,`sub_category`.`category_id` AS `category_id`,`sub_category`.`name` AS `name`,`sub_category`.`date` AS `date`,`sub_category`.`status` AS `status` from `sub_category`;

-- --------------------------------------------------------

--
-- Structure for view `sub_menu_section_view`
--
DROP TABLE IF EXISTS `sub_menu_section_view`;

CREATE  VIEW `sub_menu_section_view` AS select `sub_menu_section`.`id` AS `id`,`sub_menu_section`.`category_id` AS `category_id`,`sub_menu_section`.`sub_category_id` AS `sub_category_id`,`sub_menu_section`.`name` AS `name`,`sub_menu_section`.`priority` AS `priority`,`sub_menu_section`.`date` AS `date`,`sub_menu_section`.`status` AS `status` from `sub_menu_section`;

-- --------------------------------------------------------

--
-- Structure for view `sub_menu_view`
--
DROP TABLE IF EXISTS `sub_menu_view`;

CREATE  VIEW `sub_menu_view` AS select `sub_menu`.`id` AS `id`,`sub_menu`.`category_id` AS `category_id`,`sub_menu`.`name` AS `name`,`sub_menu`.`date` AS `date`,`sub_menu`.`status` AS `status` from `sub_menu`;

-- --------------------------------------------------------

--
-- Structure for view `sub_section_view`
--
DROP TABLE IF EXISTS `sub_section_view`;

CREATE  VIEW `sub_section_view` AS select `sub_section`.`id` AS `id`,`sub_section`.`category_id` AS `category_id`,`sub_section`.`sub_category_id` AS `sub_category_id`,`sub_section`.`name` AS `name`,`sub_section`.`priority` AS `priority`,`sub_section`.`date` AS `date`,`sub_section`.`status` AS `status` from `sub_section`;

-- --------------------------------------------------------

--
-- Structure for view `welcome_content_view`
--
DROP TABLE IF EXISTS `welcome_content_view`;

CREATE  VIEW `welcome_content_view` AS select `welcome_content`.`id` AS `id`,`welcome_content`.`name` AS `name`,`welcome_content`.`map` AS `map`,`welcome_content`.`short_details` AS `short_details`,`welcome_content`.`youtube_link` AS `youtube_link`,`welcome_content`.`date` AS `date`,`welcome_content`.`status` AS `status` from `welcome_content`;

-- --------------------------------------------------------

--
-- Structure for view `work_for_us_details_view`
--
DROP TABLE IF EXISTS `work_for_us_details_view`;

CREATE  VIEW `work_for_us_details_view` AS select `work_for_us_details`.`id` AS `id`,`work_for_us_details`.`details` AS `details`,`work_for_us_details`.`date` AS `date`,`work_for_us_details`.`status` AS `status` from `work_for_us_details`;

-- --------------------------------------------------------

--
-- Structure for view `work_for_us_requirement_view`
--
DROP TABLE IF EXISTS `work_for_us_requirement_view`;

CREATE  VIEW `work_for_us_requirement_view` AS select `work_for_us_requirement`.`id` AS `id`,`work_for_us_requirement`.`name` AS `name`,`work_for_us_requirement`.`date` AS `date`,`work_for_us_requirement`.`status` AS `status` from `work_for_us_requirement`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
