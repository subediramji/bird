-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2014 at 10:38 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bird_edu`
--
CREATE DATABASE IF NOT EXISTS `bird_edu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bird_edu`;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(100) NOT NULL DEFAULT 'Required',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL DEFAULT 'Required',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment_store`
--

CREATE TABLE IF NOT EXISTS `comment_store` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(200) CHARACTER SET utf8 NOT NULL,
  `comment_association_id` varchar(64) NOT NULL,
  `comment_user_name` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_address`
--

CREATE TABLE IF NOT EXISTS `contact_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no1` varchar(255) NOT NULL,
  `contact_no2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `show_form` varchar(255) NOT NULL,
  `show_map` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_address`
--

INSERT INTO `contact_address` (`id`, `name`, `address`, `contact_no1`, `contact_no2`, `email`, `show_form`, `show_map`) VALUES
(1, 'Backbone for Community Development - Nepal', 'Bharatpur Municipality - 10,Bharatpur,Chitwan,Nepal', '009779845054619', '', 'bcdnepal@gmail.com', 'showForm', 'showMap');

-- --------------------------------------------------------

--
-- Table structure for table `contact_list`
--

CREATE TABLE IF NOT EXISTS `contact_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `remarks` varchar(1000) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `design_setup`
--

CREATE TABLE IF NOT EXISTS `design_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `design_setup`
--

INSERT INTO `design_setup` (`id`, `name`, `description`) VALUES
(0, 'header_title', 'Bird Education Society'),
(1, 'header_logo', 'birdedu.png'),
(2, 'header_description', ''),
(3, 'header_bgcolor', NULL),
(4, 'sidebar_title', 'Quick navigation'),
(5, 'sidebar_description', 'changed by ramu'),
(6, 'sidebar_bgcolor', 'FFFFFF');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `details` varchar(500) CHARACTER SET utf8 NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `align` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `gadgets`
--

CREATE TABLE IF NOT EXISTS `gadgets` (
  `gadget_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `textBox` varchar(100) NOT NULL,
  `defaultGadget` text NOT NULL,
  `type` text NOT NULL,
  `display` varchar(200) NOT NULL,
  `setting` text NOT NULL,
  PRIMARY KEY (`gadget_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=227 ;

--
-- Dumping data for table `gadgets`
--

INSERT INTO `gadgets` (`gadget_id`, `name`, `textBox`, `defaultGadget`, `type`, `display`, `setting`) VALUES
(226, 'Social Network', 'textBox', '', 'Facebook<br>\r\nTwitter<br>\r\nLinkid<br>\r\nYoutube<br>\r\n', 'Footer', ''),
(225, 'Recent Post', '', 'recent post', '', 'Sidebar', 'post=3&titleBold=&titleUnderline=&titleColor='),
(224, '<b>Tihar Offer!!!</b>', 'textBox', '', '10% Discount in all the product you buy. Hurry your shopping.', 'Header', '');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_name` varchar(100) NOT NULL DEFAULT 'Required',
  `media_type` varchar(64) DEFAULT 'Required',
  `media_association_id` int(11) DEFAULT NULL,
  `media_link` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_media` (`media_association_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ph_number` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `position` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `ph_number`, `address`, `position`, `member`, `image`) VALUES
(108, 'Suresh Adhikari', 'test@test.com', '9999999999', 'test', 'President', 'Board Member', 'human.png'),
(109, 'Lil Bahadur Bhandari', 'test@test.com', '9999999999', 'test', 'Vice - President', 'Board Member', 'human1.png'),
(110, 'Shyamshwar Baral', 'test@test.com', '9999999999', 'test', 'Secretary', 'Board Member', 'human2.png'),
(111, 'Sarita Gurung', 'test@test.com', '9999999999', 'test', 'Tresurer', 'Board Member', 'human3.png'),
(112, 'Milan Poudel', 'test@test.com', '9999999999', 'test', 'Vice-Secretary', 'Board Member', 'human4.png'),
(113, 'Viman Karkee', 'test@test.com', '9999999999', 'test', 'Member', 'Board Member', 'human5.png'),
(114, 'Rudra Prasad Adhikari', 'test@test.com', '9999999999', 'test', 'Member', 'Board Member', 'human6.png'),
(115, 'Yurung Pakhrin(Tamang)', 'test@test.com', '9999999999', 'test', 'Member', 'Board Member', 'human7.png'),
(116, 'Hari Devi Sharma', 'test@test.com', '9999999999', 'test', 'Member', 'Board Member', 'human8.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) NOT NULL DEFAULT 'Required',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`) VALUES
(4, 'Home Menu');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE IF NOT EXISTS `meta_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `name`, `value`) VALUES
(1, 'siteurl', 'www.besnepal.org'),
(2, 'title', 'Bird Education Society - Nepal'),
(3, 'keywords', 'cms'),
(4, 'description', 'cloud system'),
(5, 'favicon_icon', 'favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `misc_setting`
--

CREATE TABLE IF NOT EXISTS `misc_setting` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `description` varchar(64) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `misc_setting`
--

INSERT INTO `misc_setting` (`Id`, `name`, `description`) VALUES
(0, 'show_comment', '0'),
(1, 'show_like', '0'),
(2, 'show_share', '0'),
(3, 'max_post_to_show', '6'),
(4, 'max_page_to_show', '5'),
(5, 'slide_height', '500'),
(6, 'slide_width', '1380');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `navigation_name` varchar(100) NOT NULL DEFAULT 'Required',
  `navigation_link` mediumtext,
  `parent_id` int(11) DEFAULT NULL,
  `navigation_type` varchar(64) DEFAULT NULL,
  `navigation_slug` varchar(64) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_navigation` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `navigation_name`, `navigation_link`, `parent_id`, `navigation_type`, `navigation_slug`, `menu_id`) VALUES
(75, 'Home', 'http://localhost/bcdNepal/', 0, '', 'Home', 4),
(76, 'Contact Us', 'http://localhost/bcdNepal/index.php/view/contact', 0, '', 'ContactUs', 4),
(77, 'About Us', '#', 0, '', 'AboutUs', 4),
(78, 'Members', 'http://localhost/bcdNepal/index.php/view/members', 0, '', 'Members', 4),
(84, 'Gallery', 'http://localhost/bcdNepal/index.php/view/photos', 0, '', 'Gallery', 4),
(85, 'What do we do', 'http://localhost/bcdNepal/index.php/view/page/37', 77, 'page', 'Whatdowedo', 4),
(86, 'Ways to help', 'http://localhost/bcdNepal/index.php/view/page/38', 77, 'page', 'Waystohelp', 4),
(87, 'Support ', 'http://localhost/bcdNepal/index.php/view/page/39', 77, 'page', 'Support', 4);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) NOT NULL DEFAULT 'Required',
  `page_content` text NOT NULL,
  `page_author_id` int(11) NOT NULL,
  `page_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page_summary` mediumtext,
  `page_status` varchar(100) NOT NULL,
  `page_modifed_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `page_parent` int(11) NOT NULL,
  `page_order` int(11) DEFAULT NULL,
  `page_type` varchar(100) DEFAULT NULL,
  `page_tags` mediumtext,
  `allow_comment` tinyint(1) NOT NULL,
  `allow_like` tinyint(1) NOT NULL,
  `allow_share` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` mediumtext NOT NULL,
  `post_author_id` int(11) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_summary` mediumtext,
  `post_status` mediumtext NOT NULL,
  `comment_status` tinyint(1) DEFAULT NULL,
  `post_modified_date` date DEFAULT NULL,
  `post_tags` mediumtext,
  `post_content` text NOT NULL,
  `post_category` int(11) NOT NULL,
  `allow_comment` tinyint(1) NOT NULL,
  `allow_like` tinyint(1) NOT NULL,
  `allow_share` tinyint(1) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_post` (`post_category`),
  KEY `idx_post_0` (`post_author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_author_id`, `post_date`, `post_summary`, `post_status`, `comment_status`, `post_modified_date`, `post_tags`, `post_content`, `post_category`, `allow_comment`, `allow_like`, `allow_share`, `image`) VALUES
(22, 'Introduction', 0, '2014-10-13 07:20:52', '      <span>Nepal is a landlocked country located in the lap of Himalayan range. It is surrounded by', '0', NULL, NULL, NULL, '      <span>Nepal is a landlocked country located in the lap of Himalayan range. It is surrounded by two large countries China from North and India from East, West and South.', 10, 0, 0, 0, ''),
(24, 'Drinking Water', 0, '2014-10-17 08:11:38', 'To run the programs of pure drinking water, clean environment and sanitation and health campaign in ', '0', NULL, NULL, NULL, 'To run the programs of pure drinking water, clean environment and sanitation and health campaign in rural sector.<br>', 11, 0, 0, 0, 'drinking_water1.jpg'),
(25, 'Eradicate Poverty', 0, '2014-10-17 08:12:48', 'To run the programs of awareness to eradicate the poverty and illiteracy<br>', '0', NULL, NULL, NULL, 'To run the programs of awareness to eradicate the poverty and illiteracy<br>', 11, 0, 0, 0, 'education1.jpg'),
(26, 'Consrtuctive Works', 0, '2014-10-17 08:14:37', 'To conduct the constructive works to helpless, disabled and socially marginalized people.<br>', '0', NULL, NULL, NULL, 'To conduct the constructive works to helpless, disabled and socially marginalized people.<br>', 11, 0, 0, 0, 'social1.jpg'),
(27, 'Health Campaign', 0, '2014-10-17 08:17:39', 'To run the programs of pure drinking water, clean environment and sanitation and health campaign in ', '0', NULL, NULL, NULL, 'To run the programs of pure drinking water, clean environment and sanitation and health campaign in rural sector.<br>', 11, 0, 0, 0, 'health1.jpg'),
(28, 'Education', 0, '2014-10-17 08:33:27', '<br>', '0', NULL, NULL, NULL, '<br>', 12, 0, 0, 0, 'education12.jpg'),
(29, 'Volunteering', 0, '2014-10-17 08:33:56', '<br>', '0', NULL, NULL, NULL, '<br>', 12, 0, 0, 0, 'volunteer1.jpg'),
(30, 'Health & Sanitation', 0, '2014-10-17 08:34:22', '<br>', '0', NULL, NULL, NULL, '<br>', 12, 0, 0, 0, 'sanitation1.jpg'),
(31, 'Environment', 0, '2014-10-17 08:34:44', '<br>', '0', NULL, NULL, NULL, '<br>', 12, 0, 0, 0, 'environment1.jpg'),
(32, 'Training', 0, '2014-10-17 08:35:03', '<br>', '0', NULL, NULL, NULL, '<br>', 12, 0, 0, 0, 'training1.jpg'),
(33, 'Awareness', 0, '2014-10-17 08:38:34', '<br>', '0', NULL, NULL, NULL, '<br>', 12, 0, 0, 0, 'education111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(100) NOT NULL DEFAULT 'Required',
  `slide_image` varchar(100) NOT NULL DEFAULT 'Required',
  `slide_content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL DEFAULT 'Required',
  `user_fname` varchar(100) DEFAULT NULL,
  `user_lname` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_pass` varchar(64) NOT NULL DEFAULT 'Required',
  `user_url` mediumtext,
  `user_registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_auth_key` varchar(64) DEFAULT NULL,
  `user_status` varchar(64) DEFAULT NULL,
  `user_type` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_fname`, `user_lname`, `user_email`, `user_pass`, `user_url`, `user_registered_date`, `user_auth_key`, `user_status`, `user_type`) VALUES
(10, 'admin', 'hom nath', 'bagale', 'bhomnath@salyani.com.np', '21232f297a57a5a743894a0e4a801fc3', NULL, '2014-03-05 11:01:57', '64L3XB9ID5', '1', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
