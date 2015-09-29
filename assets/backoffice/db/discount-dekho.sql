-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2015 at 04:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `discount-dekho`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(2) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `brandname` varchar(50) NOT NULL,
  `path` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `category` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Apparels'),
(2, 'Electronics'),
(3, 'Automobiles'),
(4, 'Restaurants'),
(5, 'Outlets'),
(6, 'Beauty'),
(7, 'Fitness'),
(8, 'Living'),
(9, 'Kids'),
(10, 'Festive-Offers'),
(11, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('4a4fa75d3c8d4a78889b60cfb609a149', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 1428157288, 'a:1:{s:9:"user_data";a:1:{s:8:"loggedIn";b:1;}}'),
('70002ff660c2c52690c88ace25ad4860', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 1428104770, 'a:1:{s:9:"user_data";a:1:{s:8:"loggedIn";b:1;}}');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `type`, `data`) VALUES
(1, 'aboutus', ''),
(2, 'privacy', ''),
(3, 'disclaimer', '');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subcategory` varchar(50) NOT NULL,
  `city` varchar(500) NOT NULL,
  `details` text NOT NULL,
  `region` varchar(50) NOT NULL,
  `locations` text NOT NULL,
  `malls` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `images` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `title`, `brand`, `category`, `subcategory`, `city`, `details`, `region`, `locations`, `malls`, `start_date`, `end_date`, `images`, `active`) VALUES
(7, 'asdfja', 'asdf', 'Apparels', 'Kids Wear', '["Greater Noida"]', '<p>asdf</p>', 'Delhi NCR', 'asdf', '["1"]', '2015-04-26', '2015-04-17', '{"Image1":"\\/assets\\/uploads\\/11.png","Image2":"","Image3":"","Image4":"","Image5":""}', 1),
(8, 'bgf', '', 'Others', 'Others', '["Greater Noida","Faridabad","Gurgaon"]', '<p>asdf</p>', 'Delhi NCR', 'asdf', '["3"]', '2015-04-16', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/nikhil_verma.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1),
(9, 'afa', 'sdf', 'Apparels', 'Kids Wear', '["New Delhi"]', '<p>asdf</p>', 'Delhi NCR', 'sadf', '["1"]', '2015-04-18', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/nikhil_verma1.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `malls`
--

CREATE TABLE IF NOT EXISTS `malls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `malls`
--

INSERT INTO `malls` (`id`, `name`, `address`, `city`) VALUES
(1, 'Great India Palace', 'Sec 18', 'New Delhi'),
(3, 'Shipra Mall', 'Indrapuram', 'Ghaziabad');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'sd\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `deal_id` int(5) NOT NULL,
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `review` text NOT NULL,
  `app` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(2) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `path`, `link`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `category` varchar(75) NOT NULL,
  `subcategory` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category`, `subcategory`) VALUES
(3, 'Apparels', 'Kids Wear'),
(4, 'Apparels', 'Women Wear'),
(5, 'Apparels', 'Men Wear'),
(6, 'Electronics', 'Mobiles and Tablets'),
(8, 'Electronics', 'Cameras'),
(9, 'Electronics', 'Laptops and Computers'),
(10, 'Electronics', 'Computer Accessories'),
(11, 'Electronics', 'Mobile Accessories'),
(12, 'Electronics', 'Televisions'),
(13, 'Electronics', 'Audio/Video'),
(14, 'Electronics', 'Gaming'),
(15, 'Electronics', 'Home Appliances'),
(19, 'Living', 'Furniture'),
(20, 'Living', 'Home Decor'),
(21, 'Living', 'Kitchen'),
(26, 'Fitness', 'Fitness Equipments'),
(27, 'Fitness', 'Fitness Accessories'),
(28, 'Fitness', 'Nutrition Supplements'),
(29, 'Fitness', 'Health Checkup Equipments'),
(30, 'Automobiles', 'Cleaning Services'),
(31, 'Automobiles', 'Offers'),
(32, 'Outlets', 'Offers'),
(33, 'Beauty', 'Spa'),
(34, 'Beauty', 'Salon'),
(35, 'Beauty', 'Skin Clinics'),
(36, 'Kids', 'Toys'),
(37, 'Kids', 'Baby Care'),
(38, 'Kids', 'Baby Accessories'),
(39, 'Restaurants', 'Offers'),
(42, 'Festive-Offers', 'Offers'),
(43, 'Others', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `testimonial` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `testimonial`) VALUES
(2, 'dafasdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `top-deals`
--

CREATE TABLE IF NOT EXISTS `top-deals` (
  `id` int(2) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top-deals`
--

INSERT INTO `top-deals` (`id`, `path`, `link`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE IF NOT EXISTS `userdb` (
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `sex` varchar(60) NOT NULL,
  `city` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`name`, `email`, `mobile`, `dob`, `sex`, `city`, `password`) VALUES
('', 'adsf', 354, 'v', 'xdv', 'vx', 'zxv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
