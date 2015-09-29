-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2015 at 07:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dd_db`
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
(1, 'admin', 'rogerbemine');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `category` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Apparels'),
(2, 'Beauty and Grooming'),
(3, 'Fitness and Sports'),
(4, 'Home and Living'),
(5, 'Miscellaneous'),
(6, 'Festive Offers');

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
('07c42ad66c95feb382e7f0692dd852d3', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1439711646, ''),
('3b34193fc0de3b0fc3d3f7592dc56fe4', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1439573865, 'a:1:{s:9:"user_data";a:1:{s:8:"loggedIn";b:1;}}'),
('5aa81f5c0bf9d259b874f564a6ee02fa', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1439591573, ''),
('ed7fd33c58c2bcb604ab5cd8a370579c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1439720100, ''),
('f92d2624c8fe2823c84ff5adce14d17d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1439754352, '');

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
(1, 'aboutus', '<p>about us</p>'),
(2, 'privacy', '<p>privacy poilicy</p>'),
(3, 'disclaimer', '<p>disclaimer</p>');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `brand_details` text NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `title`, `brand`, `brand_details`, `category`, `subcategory`, `city`, `details`, `region`, `locations`, `malls`, `start_date`, `end_date`, `images`, `active`) VALUES
(1, 'Test Deal', 'Test Brand', '<p>asdasda</p>', 'Apparels', '["Men Wear"]', '["Ghaziabad","Faridabad"]', '<p>hkjhkjhkjhkjhkjhkjhjkhjko</p>', 'Delhi NCR', 'asdasda', '""', '2015-09-01', '0000-00-00', '{"Image1":"","Image2":"","Image3":"","Image4":"","Image5":""}', 1),
(2, 'teska', 'amsdaksmdk', '<p>askmdkasmdkmaskd</p>', 'Beauty and Grooming', '["Salon","Tattoo"]', '["Pune"]', '<p>sd jaskdka</p>', 'Pune', 'askdmkmk', '["DLF Promenade Mall - Vasant Kunj ,  3 Nelson Mandela Road, Delhi,  Ph ","D Mall, Rohini, Delhi, Ph:011 4390 0000"]', '2015-12-31', '0000-00-00', '{"Image1":"","Image2":"","Image3":"","Image4":"","Image5":""}', 1),
(3, 's axmas', 'ksasmdk', '<p>kasmkm</p>', 'Fitness and Sports', '["Gym"]', '["Noida"]', '<p>kaksmd</p>', 'Delhi NCR', 'asmdla', '""', '2015-01-01', '0000-00-00', '{"Image1":"","Image2":"","Image3":"","Image4":"","Image5":""}', 1),
(4, 'ldsf', 'tester', '<p>admlas, hola hola hua hua hua hu admlas, hola hola hua hua hua hua admlas, hola hola hua hua hua hua admlas, hola hola hua hua hua hua admlas, hola hola hua hua hua huaadmlas, hola hola hua hua hua hua admlas, hola hola hua hua hua huaadmlas, hola hola hua hua hua huaadmlas, hola hola hua hua hua huaadmlas, hola hola hua hua hua huaa</p>', 'Apparels', '["Men Wear"]', '["Noida","Greater Noida"]', '<p>adsmams</p>', 'Delhi NCR', 'ksm', '["Mall of India, Noida, Ph: +919560214267","Pacific Mall, Subhash Nagar, Delhi, Ph:+(91)-11-40903000"]', '2015-01-09', '0000-00-00', '{"Image1":"","Image2":"","Image3":"","Image4":"","Image5":""}', 1),
(5, 'yfac', 'nibble', '<p>lf</p>', 'Beauty and Grooming', '["Spa","Nail Art"]', '["Noida","Greater Noida"]', '<p>bas kya bataye</p>', 'Delhi NCR', 'bahut#hole#hole#hole#hua#panga', '["Select City Walk Mall \\u2013 Saket ,  A-3m District Centre Saket, Sector 6,","Ambience Mall - Vasant Kunj ,  No. 2, Nelson Mandela Marg , Delhi, Ph ","Pacific Mall, Subhash Nagar, Delhi, Ph:+(91)-11-40903000"]', '2015-09-22', '0000-00-00', '{"Image1":"","Image2":"","Image3":"","Image4":"","Image5":""}', 1),
(6, 'nacho', 'gao', '<p>nacho gao</p>', 'Miscellaneous', '["Dance Classes"]', '["New Delhi"]', '<p>nacho gao jor se</p>', 'Delhi NCR', 'bahut#bahut#bahut#bahut#bahut#bahut#bahut#bahut#bahut#bahut#bahut#bahut#bahut#bahut', '["Mall Eighteen, Sector 18, Noida, Ph:+91-22-26058753","Select City Walk Mall \\u2013 Saket ,  A-3m District Centre Saket, Sector 6,","DLF Promenade Mall - Vasant Kunj ,  3 Nelson Mandela Road, Delhi,  Ph "]', '2015-09-16', '2015-09-30', '{"Image1":"","Image2":"","Image3":"","Image4":"","Image5":""}', 1),
(8, 'New Deal', 'Brand', '<p>Brand Details</p>', 'Beauty and Grooming', '["Spa"]', '["New Delhi"]', '<p>Deal Details</p>', 'Delhi NCR', 'Deal Locations', '["Ansal Plaza, Noida , Ph :011-2231023, 011- 45171557","Spice World Mall \\u2013 Noida ,  I-2, Sector 25A, Ph : 0120- 4366400"]', '2015-09-26', '2015-09-27', '{"Image1":"\\/assets\\/uploads\\/Gallery1.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(7, 'What is DiscountsDekho and what it offers ?', 'Discountsdekho is an online information portal which lists information on discounts, sales and offers running in stores nearby you in Delhi-NCR.'),
(8, 'Does Discountsdekho.com sell products or services?', 'Discountsdekho.com only brings to you the information on various discount sale offers from popular merchants. Discountsdekho.com does not sell any product or services. You need to visit the store to make the purchase.\n \n'),
(9, 'How do I find deals available in Delhi-NCR ?', 'Simple. Go to home page ? In the Search Bar type your locality e.g Tilak Nagar and it will display all the deals running in Tilak Nagar stores.'),
(10, ' \nHow many cities are covered ?\n', 'Currently we are servicing only in Delhi-NCR.\n \n'),
(11, 'Where does Discountsdekho.com get its information?', 'Discountsdekho get the information directly from the merchant. '),
(12, 'Why do I need to sign up? Can I still use you if I don''t have an account?', 'You don''t need to sign up to use the site. However, if you sign up you are eligible to get extra discounts on some exclusive stores. That way, you never miss a sale opportunity. Plus, as a registered member, you can post reviews and get extra benefits.\n \n'),
(13, 'How do I become a member ?', 'You can sign up at the home page by clicking on the signup button .\n \n'),
(14, 'Is Signing up free ?', 'Yes. It''s free. There are no hidden fees or extra charges.'),
(15, 'If I sign up, will I get e-mails and advertisements ?', 'You will receive one email a week showcasing interesting deals or interesting information of our partners.\n \n'),
(16, 'To whom do I have to complain if I am misled by the sale offer of the Merchant ?', 'Discountsdekho.com is a site where retailer sales offer information is posted and available. We cannot either authenticate or vouch for the sale offer details or endorse their service. You need to take up the matter with the Merchant directly.'),
(18, 'How do I contact Discountsdekho.com for any questions or suggestions?', 'Email us at contact@discountsdekho.com with any questions or suggestions.'),
(19, 'Test Question', 'Test Answer');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `malls`
--

INSERT INTO `malls` (`id`, `name`, `address`, `city`) VALUES
(7, 'Ansal Plaza, Noida , Ph :011-2231023, 011- 45171557', 'Ansal Plaza, Noida , Ph :011-2231023, 011- 45171557', 'Noida'),
(8, 'Spice World Mall – Noida ,  I-2, Sector 25A, Ph : 0120- 4366400', 'Spice World Mall – Noida ,  I-2, Sector 25A, Ph : 0120- 4366400', 'Noida'),
(9, 'The Centre Stage Mall – Noida , Pocket J, Sector 18, Ph : 0120- 425144', 'The Centre Stage Mall – Noida , Pocket J, Sector 18, Ph : 0120- 4251445, 0120- 2515679', 'Noida'),
(10, 'The Great India Place Mall – Noida , Plot No. A-2, Sector-38-A , Ph : ', 'The Great India Place Mall – Noida , Plot No. A-2, Sector-38-A , Ph : 0120- 4650300, 0120- 4235406 ', 'Noida'),
(11, 'Sab Mall – Noida , Captain Vijyant Thapar Marg, E Block, Pocket E, Sec', 'Sab Mall – Noida , Captain Vijyant Thapar Marg, E Block, Pocket E, Sector 27, Ph : 0120 2544222, 0120- 6529655', 'Noida'),
(12, 'DLF  Town Square Mall, Sector-18, Noida, Ph: 91-9873111181', 'DLF  Town Square Mall, Sector-18, Noida, Ph: 91-9873111181', 'Noida'),
(13, 'Mall Eighteen, Sector 18, Noida, Ph:+91-22-26058753', 'Mall Eighteen, Sector 18, Noida, Ph:+91-22-26058753', 'Noida'),
(14, 'Senior Mall, Noida, Ph:0120-4015011/12', 'Senior Mall, Noida, Ph:0120-4015011/12', 'Noida'),
(15, 'Mall of India, Noida, Ph: +919560214267', 'Mall of India, Noida, Ph: +919560214267', 'Noida'),
(16, 'Select City Walk Mall – Saket ,  A-3m District Centre Saket, Sector 6,', 'Select City Walk Mall – Saket ,  A-3m District Centre Saket, Sector 6, Pushp Vihar,  Ph : 011- 42114200, 011- 42114211', 'Noida'),
(17, 'DLF Emporio Mall - Vasant Kunj ,  4, Nelson Mandela Road, Delhi, Ph : ', 'DLF Emporio Mall - Vasant Kunj ,  4, Nelson Mandela Road, Delhi, Ph : 011- 46116666', 'New Delhi'),
(18, 'DLF Promenade Mall - Vasant Kunj ,  3 Nelson Mandela Road, Delhi,  Ph ', 'DLF Promenade Mall - Vasant Kunj ,  3 Nelson Mandela Road, Delhi,  Ph : 011- 46104466', 'New Delhi'),
(19, 'Ambience Mall - Vasant Kunj ,  No. 2, Nelson Mandela Marg , Delhi, Ph ', 'Ambience Mall - Vasant Kunj ,  No. 2, Nelson Mandela Marg , Delhi, Ph : 011- 40870064, 011- 40870050', 'New Delhi'),
(20, 'Ansal Plaza Mall, Hudco Place, Delhi, Ph:+(91)-11-40551449', 'Ansal Plaza Mall, Hudco Place, Delhi, Ph:+(91)-11-40551449', 'New Delhi'),
(21, 'Pacific Mall, Subhash Nagar, Delhi, Ph:+(91)-11-40903000', 'Pacific Mall, Subhash Nagar, Delhi, Ph:+(91)-11-40903000', 'New Delhi'),
(22, 'D Mall, Rohini, Delhi, Ph:011 4390 0000', 'D Mall, Rohini, Delhi, Ph:011 4390 0000', 'New Delhi'),
(23, 'Metro Walk Mall – Rohini , Sector 10, Rohini, Adjacent to Rithala Metr', 'Metro Walk Mall – Rohini , Sector 10, Rohini, Adjacent to Rithala Metro Station, Delhi, Ph : 011- 27573480, 011- 27574061', 'New Delhi'),
(24, 'Cross River Mall – Shahdara , Near Karkardooma Court, Maharaja Surajma', 'Cross River Mall – Shahdara , Near Karkardooma Court, Maharaja Surajmal Marg, Vishwas Nagar Extension, Vishwas Nagar , Delhi, Ph : 011- 42111920, 011- 42111925', 'New Delhi'),
(25, 'North Square Mall – Pitampura , 303, B8 GDITL Tower, Netaji Subhash Pl', 'North Square Mall – Pitampura , 303, B8 GDITL Tower, Netaji Subhash Place, Abdul Hameed Marg, Netaji Subash Place, Pitampura, Delhi, Ph : 011- 47049061, 011- 47020044', 'New Delhi'),
(26, 'DLF Place Mall – Saket ,  A 4, District Center, Press Enclave Road, De', 'DLF Place Mall – Saket ,  A 4, District Center, Press Enclave Road, Delhi, Ph : 011- 46064444', 'New Delhi'),
(27, 'MGF Metropolitan, Saket, Delhi, Ph: 011-40575022', 'MGF Metropolitan, Saket, Delhi, Ph: 011-40575022', 'New Delhi'),
(28, 'West Gate Mall, Rajouri Garden, Delhi, Ph:011 4564 2259', 'West Gate Mall, Rajouri Garden, Delhi, Ph:011 4564 2259', 'New Delhi'),
(29, 'Moments Mall - Kirti Nagar ,  Patel Road, Kirti Nagar , Delhi, Ph : 98', 'Moments Mall - Kirti Nagar ,  Patel Road, Kirti Nagar , Delhi, Ph : 9810507835, 8800135511', 'New Delhi'),
(30, 'Vegas Mall, Dwarka Sector 14, Delhi - 110078, Ph:+(91)-8800531631', 'Vegas Mall, Dwarka Sector 14, Delhi - 110078, Ph:+(91)-8800531631', 'New Delhi'),
(31, 'TDI Mall - Rajouri Garden , Delhi, Ph : 011- 25150027', 'TDI Mall - Rajouri Garden , Delhi, Ph : 011- 25150027', 'New Delhi'),
(32, 'City Square, Najafgarh Rd, Rajouri Garden, New Delhi.', 'City Square, Najafgarh Rd, Rajouri Garden, New Delhi.', 'New Delhi'),
(33, 'TDI Paragon Mall, Shivaji Place, Vishal Enclave, Rajouri Garden, New D', 'TDI Paragon Mall, Shivaji Place, Vishal Enclave, Rajouri Garden, New Delhi, Delhi 110018, Ph:093128 74574', 'New Delhi'),
(34, 'The India Mall, New Friend Colony, New Delhi, Ph:+(91)-9013309731', 'The India Mall, New Friend Colony, New Delhi, Ph:+(91)-9013309731', 'New Delhi'),
(35, 'V3S Mall - Laxmi Nagar, New Delhi, Ph : 011- 43021963, 011- 43021962', 'V3S Mall - Laxmi Nagar, New Delhi, Ph : 011- 43021963, 011- 43021962', 'New Delhi'),
(36, 'Vasant Square Mall,  Community Centre, Vasant Kunj, New Delhi, Ph:+(91', 'Vasant Square Mall,  Community Centre, Vasant Kunj, New Delhi, Ph:+(91)-11-46000739, +(91)-9654121177', 'New Delhi'),
(37, 'West Gate Mall, Rajouri Garden, New Delhi, Ph:011 4564 2259', 'West Gate Mall, Rajouri Garden, New Delhi, Ph:011 4564 2259', 'New Delhi'),
(38, 'Eros Metro Mall, Sector 14 Dwarka, Kakrola, New Delhi,  Ph : 999910728', 'Eros Metro Mall, Sector 14 Dwarka, Kakrola, New Delhi,  Ph : 9999107281, 9899211411', 'New Delhi'),
(39, 'Epicuria Food Mall, Neharu Pace Metro Station, New Delhi, Ph:011 2648 ', 'Epicuria Food Mall, Neharu Pace Metro Station, New Delhi, Ph:011 2648 0644', 'New Delhi'),
(40, 'DT City Center, Shalimar Bagh, New Delhi, Ph:91-11-2630108', 'DT City Center, Shalimar Bagh, New Delhi, Ph:91-11-2630108', 'New Delhi'),
(41, 'Aggarwal City Mall, Saint Nagar, Pitampura, New Delhi, Ph : 011- 45576', 'Aggarwal City Mall, Saint Nagar, Pitampura, New Delhi, Ph : 011- 45576409', 'New Delhi'),
(42, 'Ambience Mall - Vasant Kunj, New Delhi, Ph : 011- 40870064, 011- 40870', 'Ambience Mall - Vasant Kunj, New Delhi, Ph : 011- 40870064, 011- 40870050', 'New Delhi'),
(43, 'CTC Mall, Moti Nagar, New Delhi,  Ph : 011- 25112201, 011- 25112202', 'CTC Mall, Moti Nagar, New Delhi,  Ph : 011- 25112201, 011- 25112202', 'New Delhi'),
(44, 'Ansal Plaza Mall, Andrews Ganj,  Khel Gaon, New Delhi, Ph : 011- 26250', 'Ansal Plaza Mall, Andrews Ganj,  Khel Gaon, New Delhi, Ph : 011- 26250957, 011 26255532', 'New Delhi'),
(45, 'D Mall, Pitampura, New Delhi,  Ph :  011- 27029811, 011- 43900000', 'D Mall, Pitampura, New Delhi,  Ph :  011- 27029811, 011- 43900000', 'New Delhi'),
(46, 'Fun City Mall, Prashant Vihar , New Delhi, Ph : 9911905865', 'Fun City Mall, Prashant Vihar , New Delhi, Ph : 9911905865', 'New Delhi'),
(47, 'Lifestyle Mall, Najafgarh Road, Rajouri Garden, New Delhi, Ph : 011- 4', 'Lifestyle Mall, Najafgarh Road, Rajouri Garden, New Delhi, Ph : 011- 42090000', 'New Delhi'),
(48, 'M2K Mall, Pitampura, New Delhi, Ph : 011- 27024181, 011- 27024182', 'M2K Mall, Pitampura, New Delhi, Ph : 011- 27024181, 011- 27024182', 'New Delhi'),
(49, 'Star City Mall, Mayur Vihar Phase I, New Delhi,  Ph : 011- 22715976', 'Star City Mall, Mayur Vihar Phase I, New Delhi,  Ph : 011- 22715976', 'New Delhi'),
(50, 'The Westend Mall, Mathura Road, Janakpuri, New Delhi,  Ph : 011- 47325', 'The Westend Mall, Mathura Road, Janakpuri, New Delhi,  Ph : 011- 47325555, 011- 41216666', 'New Delhi'),
(51, 'Ansal Plaza, Vaishali, Ghaziabad, Ph:+91-9871794479', 'Ansal Plaza, Vaishali, Ghaziabad, Ph:+91-9871794479', 'New Delhi'),
(52, 'East Delhi Mall, Kaushambi, Ghaziabad, Ph:095606 50515', 'East Delhi Mall, Kaushambi, Ghaziabad, Ph:095606 50515', 'New Delhi'),
(53, 'Pacific Mall, Kaushambi, Ghaziabad, New Delhi, Ph : 0120- 4393600, 012', 'Pacific Mall, Kaushambi, Ghaziabad, New Delhi, Ph : 0120- 4393600, 0120- 3012301', 'New Delhi'),
(54, 'Shipra Mall, Indirapuram, Ghaziabad, Ph : 0120- 4186300', 'Shipra Mall, Indirapuram, Ghaziabad, Ph : 0120- 4186300', 'New Delhi'),
(55, 'East End Mall, Kaushambi, Ghaziabad,', 'East End Mall, Kaushambi, Ghaziabad,', 'New Delhi'),
(57, 'MMX Mall,Mohan Nagar, Ghaziabad, Ph : 0120- 4388612, 0120- 4388618 ', 'MMX Mall,Mohan Nagar, Ghaziabad, Ph : 0120- 4388612, 0120- 4388618', 'New Delhi'),
(58, 'Silver City, G.T. Road, Gjaziabad, Ph:0120-3248673, 0120-3244720', 'Silver City, G.T. Road, Gjaziabad, Ph:0120-3248673, 0120-3244720', 'New Delhi'),
(59, 'Shoppix Mall, Vaishali Sector 5, Ghaziabad, Ph:+(91)-120-4160055', 'Shoppix Mall, Vaishali Sector 5, Ghaziabad, Ph:+(91)-120-4160055', 'New Delhi'),
(60, 'Mahangun Metro Mall, Vaishali Sector 3, Ghaziabad, Ph:0120 474 1030', 'Mahangun Metro Mall, Vaishali Sector 3, Ghaziabad, Ph:0120 474 1030', 'New Delhi'),
(61, 'Eros Market Place, Vaibhav Khand, Indirapuram, Ph: +91 9810 442 899, +', 'Eros Market Place, Vaibhav Khand, Indirapuram, Ph: +91 9810 442 899, +91 9810 977 277', 'New Delhi'),
(62, 'Angel Mega Mall, Kaushambi, Ghaziabad, Ph:+91 9716146667, 0120 4331924', 'Angel Mega Mall, Kaushambi, Ghaziabad, Ph:+91 9716146667, 0120 4331924', 'New Delhi'),
(63, 'Aditya Mega Mall, Indirapuram, Ghaziabad, Ph : 9350416010, 9310314222', 'Aditya Mega Mall, Indirapuram, Ghaziabad, Ph : 9350416010, 9310314222', 'New Delhi'),
(64, 'Aerens EuroPark Mall, NH58, Ghaziabad, Ph:+(91)-120-2897834, +(91)-991', 'Aerens EuroPark Mall, NH58, Ghaziabad, Ph:+(91)-120-2897834, +(91)-9910392530', 'New Delhi'),
(65, 'Galaxy Mall, Sahibabad, Ghaziabad ,Ph : 0120 4373126, 0120- 3244755', 'Galaxy Mall, Sahibabad, Ghaziabad ,Ph : 0120 4373126, 0120- 3244755', 'New Delhi'),
(66, 'Shoppix Mall, Vaishali Sector 5, Ghaziabad, Ph:+(91)-120-4160055', 'Shoppix Mall, Vaishali Sector 5, Ghaziabad, Ph:+(91)-120-4160055', 'New Delhi'),
(67, 'Crown Interioz Mall,Mathura Road, Sector 35, DLF Industrial Area, Fari', 'Crown Interioz Mall,Mathura Road, Sector 35, DLF Industrial Area, Faridabad, Ph : 0129- 4142351', 'Faridabad'),
(68, 'Crown Plaza Mall, Service Road Parallel to Mathura Road for Sector 15A', 'Crown Plaza Mall, Service Road Parallel to Mathura Road for Sector 15A, Azad Colony, Sector 15A, Faridabad, Ph : 0129- 4001537, 0129- 4011899', 'Faridabad'),
(69, 'CTC Plaza Mall, Parsvnath City Mall, Mathura Rd, Sector 12, Old Farida', 'CTC Plaza Mall, Parsvnath City Mall, Mathura Rd, Sector 12, Old Faridabad, Faridabad, Ph : 011- 4529999', 'Faridabad'),
(70, 'Destination Point Mall, 12/2, Main Mathura Road, Faridabad, Ph : 0129-', 'Destination Point Mall, 12/2, Main Mathura Road, Faridabad, Ph : 0129- 2275139, 0129- 2274602', 'Faridabad'),
(71, 'Eros Ef3 Mall, 12, Mathura Road, Sector 20, Faridabad, Ph : 011- 26422', 'Eros Ef3 Mall, 12, Mathura Road, Sector 20, Faridabad, Ph : 011- 26422740, 011- 46208282', 'New Delhi'),
(72, 'Manhattan Mall, Mathura Road, New Industrial Township, Faridabad, Ph :', 'Manhattan Mall, Mathura Road, New Industrial Township, Faridabad, Ph : 9810024881', 'Faridabad'),
(73, 'Parsvnath City Mall, NH 2, Sector 12, Old Faridabad, Faridabad, Ph : 0', 'Parsvnath City Mall, NH 2, Sector 12, Old Faridabad, Faridabad, Ph : 0129- 2437410', 'Faridabad'),
(74, 'SRS World Mall, Pl No 4, Faridabad Sector 12, Faridabad,  Ph : 011- 40', 'SRS World Mall, Pl No 4, Faridabad Sector 12, Faridabad,  Ph : 011- 4009308, 011- 4090100', 'Faridabad'),
(75, 'Ambience Mall,  Ambience Island,National Highway 8, Gurgaon , Ph : 012', 'Ambience Mall,  Ambience Island,National Highway 8, Gurgaon , Ph : 0124- 4665555, 0124- 4665353', 'Gurgaon'),
(76, 'Central Mall,  Mehroli Gurgaon Service Road, Heritage City, Sector 25,', 'Central Mall,  Mehroli Gurgaon Service Road, Heritage City, Sector 25, Gurgaon, Ph : 0124- 2859121, 0124- 2859000', 'Gurgaon'),
(77, 'DLF City Centre Mall, Gurgaon, MG Road, Maruti Housing Colony, Sector ', 'DLF City Centre Mall, Gurgaon, MG Road, Maruti Housing Colony, Sector 28,Central Mall,  Mehroli Gurgaon Service Road, Heritage City, Sector 25, Gurgaon, Ph : 0124- 2859121, 0124- 2859000 Ph : 0124- 2386296, 0124- 4107549', 'Gurgaon'),
(78, 'DLF Mega Mall, DLF Golf Course Road, Saraswati Vihar, DLF Phase 1, Sec', 'DLF Mega Mall, DLF Golf Course Road, Saraswati Vihar, DLF Phase 1, Sector 28, Gurgaon, Ph : 124- 4380352', 'Gurgaon'),
(79, 'Sahara Mall, M.G. Road, Gurgoan, Ph:(+91) 124 4048100', 'Sahara Mall, M.G. Road, Gurgoan, Ph:(+91) 124 4048100', 'Gurgaon'),
(80, 'MGF Metropolitan, M.G. Road, Gurgoan, Ph:+91 124 401 4606', 'MGF Metropolitan, M.G. Road, Gurgoan, Ph:+91 124 401 4606', 'Gurgaon'),
(81, 'City Centre, M.G. Road, Gurgaon, Ph:0124 6888688, 0124 4930700', 'City Centre, M.G. Road, Gurgaon, Ph:0124 6888688, 0124 4930700', 'Gurgaon'),
(82, 'DLF Star Mall, NH8, Gurgaon, Ph: +91 9873036961', 'DLF Star Mall, NH8, Gurgaon, Ph: +91 9873036961', 'Gurgaon'),
(83, 'Celebration Mall, Sohan Road, Gurgaon, Ph: (+91) 124 6464349', 'Celebration Mall, Sohan Road, Gurgaon, Ph: (+91) 124 6464349', 'Gurgaon');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `link`, `image`) VALUES
(1, 'tramsdlasdlam', 'dlaldlamsdla', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'sd\r\n'),
(2, 'SAADADS@gmail.com'),
(3, 'souradeeproy@gmail.com'),
(4, 'dynamicsheetal70@gmail.com'),
(5, 'contact@discountsdekho.com'),
(6, 'vishalgaloth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(200) NOT NULL,
  `areas` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region`, `areas`) VALUES
(1, 'Delhi NCR', '["New Delhi","Noida","Ghaziabad","Greater Noida","Faridabad","Gurgaon"]'),
(4, 'Pune', '["Pune"]');

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
(1, '/assets/uploads/vijaysales11.jpg', 'http://discountsdekho.com/deal/159'),
(2, '/assets/uploads/gym4_copy2.JPG', 'http://discountsdekho.com/deal/141'),
(3, '/assets/uploads/venus1.jpg', 'http://discountsdekho.com/deal/160'),
(4, '/assets/uploads/dlf_copy_(1).jpg', 'http://discountsdekho.com/deal/129'),
(5, '/assets/uploads/lavita2_copy3.jpg', 'http://discountsdekho.com/deal/134'),
(6, '/assets/uploads/foot_copy.jpg', 'http://discountsdekho.com/deal/130');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `category` varchar(75) NOT NULL,
  `subcategory` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category`, `subcategory`) VALUES
(2, 'Apparels', 'Men Wear'),
(3, 'Apparels', 'Women Wear'),
(4, 'Apparels', 'Kids Wear'),
(5, 'Beauty and Grooming', 'Spa'),
(6, 'Beauty and Grooming', 'Salon'),
(7, 'Beauty and Grooming', 'Nail Art'),
(8, 'Beauty and Grooming', 'Tattoo'),
(9, 'Beauty and Grooming', 'Laser Clinics'),
(10, 'Beauty and Grooming', 'Laser Clinics'),
(11, 'Fitness and Sports', 'Gym'),
(12, 'Fitness and Sports', 'Yoga'),
(13, 'Fitness and Sports', 'Aerobics'),
(14, 'Fitness and Sports', 'Sports Coaching Classes'),
(15, 'Home and Living', 'Home Decor'),
(16, 'Home and Living', 'Furniture'),
(17, 'Home and Living', 'Kitchen'),
(18, 'Miscellaneous', 'Dance Classes'),
(19, 'Miscellaneous', 'Music Classes'),
(20, 'Miscellaneous', 'Food'),
(21, 'Miscellaneous', 'Footwear'),
(22, 'Miscellaneous', 'Grocery'),
(23, 'Miscellaneous', 'Jewelry and Watches'),
(24, 'Miscellaneous', 'Sunglasses');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `testimonial` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `testimonial`) VALUES
(6, 'Shruti', 'My friend told me about discountsdekho and i was looking for a party dress . I checked the website and it showed a deal on trendy divaa and i went at gurgaon outlet and bought the dress at amazing price. Thanks Discountsdekho !!'),
(7, 'Rashmi', 'Truly Its an amazing idea " Shopping se Pehle Discounts Dekho "');

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
(1, '/assets/uploads/shozz2.jpg', 'http://discountsdekho.com/deal/122'),
(2, '/assets/uploads/curve2.jpg', 'http://discountsdekho.com/deal/121'),
(3, '/assets/uploads/new_banner.jpg', 'http://discountsdekho.com/deal/57'),
(4, '/assets/uploads/aza1.jpg', 'http://discountsdekho.com/deal/106'),
(5, '/assets/uploads/s4_copy_(1).JPG', 'http://discountsdekho.com/deal/56'),
(6, '/assets/uploads/ft_copy.jpg', 'http://discountsdekho.com/deal/103');

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
('AVDHESH VARSHNEY', 'a.varshney1987@gmail.com', 9999019838, '1987-09-19', 'Male', 'delhi', '190987sona'),
('a', 'a@a.com', 45545454, '2015-09-24', 'Male', 'a', 'a'),
('sheets', 'abc@gmail.com', 9966332255, '2015-04-02', 'Male', 'delhi', 'rogeriloveu'),
('', 'adsf', 354, 'v', 'xdv', 'vx', 'zxv'),
('agam jain', 'agam13@gmail.com', 8587081142, '1995-05-13', 'Male', 'delhi', 'Agamagam13'),
('Sheetal Arora', 'dynamicsheetal70@gmail.com', 9971082333, '2015-04-17', 'Female', 'new delhi', 'rogerloveu'),
('Nikhil Verma', 'jswal.sakhi@gmail.com', 9044509199, '1993-03-30', 'Male', 'Lucknow', 'india'),
('Raj', 'rajhalavadiya123@gmail.com', 9925987488, '9925987488', 'Male', 'morbi', 'Raj patel'),
('sasha', 'sheetal.dynamic@gmail.com', 99900099977, '2015-02-01', 'Male', 'delhi', 'roger'),
('Nikhil Verma', 'v.nikhil323@gmail.com', 7503705892, '1993-03-30', 'Male', 'Lucknow', 'india123'),
('Vishal', 'vishalgaloth@gmail.com', 9971702320, '1996-02-14', 'Male', 'new delhi', '9971702320');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
