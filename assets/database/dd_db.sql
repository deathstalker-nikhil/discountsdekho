-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2015 at 02:22 PM
-- Server version: 5.1.73-rel14.11-log
-- PHP Version: 5.4.31

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
(1, 'aboutus', '<p>DiscountsDekho brings information on all the sales ,offers and discounts running in stores neraby you in Delhi-NCR. We all love discounts so we thought let&#39;s create a platform&nbsp;where you can see all of them at one place and save your time and money.</p><p>To ab Sochna Kya !!</p><p>Na Idhar Dekho Na Udhar Dekho !!</p><p>Ab Bas&nbsp;Shopping Se Pehle DiscountsDekho !!</p>'),
(2, 'privacy', '<p>This Privacy Policy describes our policies on the collection, use, and disclosure of information about you in connection with your use of our websites, emails, and mobile applications (<strong>&quot;Service&quot;</strong>). The terms&nbsp;<strong>&quot;we&quot;</strong>,&nbsp;<strong>&quot;us&quot;</strong>,&nbsp;<strong>&quot;our&quot;</strong>, and&nbsp;<strong>&quot;Discountsdekho&quot;</strong>&nbsp;refer to Discountsdekho.com in India. When you use the Service, you consent to our collection, use, and disclosure of information about you as described in this Privacy Policy.</p><p>We may change this Privacy Policy at any time by posting a revised Privacy Policy on this page; such changes will be effective upon posting.</p><p>The Service may provide links to third party websites. This Privacy Policy does not apply to any information you may provide while on such third party websites. We encourage you to carefully read the privacy policies on those third party websites before providing any of your information on such sites.</p><p>In every respect, by using Discountsdekho, you agree to be bound by terms of this Privacy Policy.</p><p><strong>Information we collect and how we use it</strong></p><p>When you visit or use our Service, we collect and store information about you, your computer or mobile device and your activities. This information may include, but is not limited to:</p><p>&nbsp;Your computer&rsquo;s IP address; technical information about your computer or mobile device (such as type of device, web browser or operating system).</p><p>Your mobile device&rsquo;s unique ID number (when available); your mobile device&rsquo;s geographic location (specific geographic location if you&rsquo;ve enabled collection of that information, or general geographic location automatically).</p><p>Your account information: your provided full name, email address, zip code and other information you may provide with your account, such as your gender and birth date. Your profile picture that will be publicly displayed as part of your account profile</p><p>We also store your preferences and settings (time zone, language, etc.), on our servers and locally on your device (mobile/computer) to provide you a consistent experience over repeat visits to the Service.</p><p>Your content: The information that you post to the Service, including your reviews, photos, comments, likes, lists, followers, the users you follow, and your account profile.</p><p>The URL of the last web page you visited before visiting our Service</p><p>The search terms you have looked up and results you selected; how long you visited our Service and which features you used</p><p>Communications between you and other users or merchants through our Service; the ads you clicked on.</p><p>We use the information to improve the Service&#39;s functionality, quality and also personalize your experience. We also use this information to display relevant advertising, provide support, message you, and comply with legal obligations.</p><p>Please note that some of this information is automatically collected without you voluntarily choosing to provide this information to us.</p><p><strong>Cookies &amp; Mobile Device IDs</strong></p><p><strong>Cookies:</strong>&nbsp;When you visit our Service, we may place &ldquo;cookies&rdquo; on your computer to recognize you. We do this to store your preferences, collect statistical data and track your use of our Service. Ad companies (including but not limited to Google and Facebook) may also place cookies on your computer to track your activities across various sites so that they can display targeted ads.</p><p>Cookies are widely used, and most web browsers are configured initially to accept cookies automatically. If you prefer not to accept cookies, you may adjust and configure your browser settings accordingly. However, if you turn off cookies, or refuse to accept a request to place a cookie, some features and services on the Service may not function properly.</p><p><strong>Mobile Device IDs:</strong>&nbsp;If you&rsquo;re using our Service on mobile, we may use mobile device IDs (the unique identifier assigned to a device by the manufacturer), instead of cookies, to recognize you. We may do this to store your preferences and track your use of the Applications. Unlike cookies, device IDs cannot be deleted. Ad companies may use device IDs to track your use of the Applications, track the number of ads displayed, measure ad performance and display ads that are more relevant to you. Analytics companies may use device IDs to track information about usage of the Applications.</p><p><strong>Third Parties</strong></p><p>We may also share your information with other companies for various reasons. What information we make available to other companies depends on the nature of our relationships with them. We generally require these other companies to keep our users&#39; information confidential.</p><p><strong>Legal Matters</strong></p><p>We may use or disclose user information: in response to a legal request, such as a subpoena, court order, or government demand; to comply with the law; in connection with a threat of litigation; to investigate or report illegal activity; to protect our legal rights, our customers, our Service or users of our Service; or to enforce our rights or defend claims. We may also transfer your information to another company in connection with a corporate restructuring, such as a sale or merger.</p><p>Discountsdekho may need to contact you to comply or cooperate with a legal request. For this purpose, we will use the email address provided to us by you. All communications sent by Discountsdekho at such email address shall be deemed to have been communicated to you.</p><p><strong>Children</strong></p><p>Our Service is not intended for use by children under the age of thirteen (13). We do not knowingly allow children under the age of thirteen (13) to register for any service, and we do not knowingly collect any personally identifiable information from children under the age of thirteen (13). If you become aware that a child has provided us with personal information without parental consent, please contact us at contact@discountsdekho.com. If we become aware that a child under 13 has provided us with personal information without parental consent, we take steps to remove such information and terminate the child&#39;s account.</p><p><strong>Job Applicants</strong></p><p>If your information is submitted to us through our Service when applying for a position with our company, the information will be used to consider your application. We may retain your information for any period of time. This information may be shared with other companies for the purpose of evaluating your qualifications for the particular position or other available positions, as well as with third-party service providers retained by us to collect, maintain and analyze candidate submissions for job postings.</p><p><strong>Security</strong></p><p>We follow generally accepted industry standards to protect the personal information submitted to us, both during transmission and once we receive it. However, no method of transmission over the Internet or via mobile device, or method of electronic storage, is 100% secure. Therefore, while we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.</p><p><strong>Data Retention and Account Termination</strong></p><p>You can close your account by visiting your profile settings page on our website. We will remove your public posts from view and/or dissociate them from your account profile, but we may retain information about you for the purposes authorized under this Privacy Policy unless prohibited by law. For example, we may retain information to prevent, investigate, or identify possible wrongdoing in connection with the Service or to comply with legal obligations.</p><p><strong>Dispute Resolution</strong></p><p>If you believe that Discountsdekho has not adhered to this Privacy Policy you may contact us online by emailing contact@discountsdekho.com&nbsp;or write to us at the following address:</p><p><strong>Jurisdiction</strong></p><p>The information we obtain from or about you may be processed and stored in India and our other various servers located across the globe. Each location may provide for different data protection rules than the country in which you reside. If you have any questions relating to your personal data, please write to us on contact@discountsdekho.com</p><p>&nbsp;</p>'),
(3, 'disclaimer', '<p>&nbsp;</p><p><strong>WARRANTY DISCLAIMER</strong></p><p>ANY USE OF THE SITE AND ANY USE OF THE CONTENT SHALL BE AT YOUR SOLE RISK. WE DISCLAIM ANY AND ALL RESPONSIBILITY OR LIABILITY FOR THE ACCURACY, COMPLETENESS, LEGALITY, LEGITIMACY, VALIDITY, RELIABILITY, OPERABILITY OR AVAILABILITY OF THE CONTENT, INFORMATION OR MATERIAL DISPLAYED ON THE SITE. THE SITE, ITS SERVICES, (INCLUDING ALL CONTENT HEREIN) ARE PROVIDED &quot;AS IS&quot; AND ARE AVAILABLE WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED OR STATUTORY, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT. WE DISCLAIM, TO THE FULLEST EXTENT PERMITTED UNDER LAW, ANY WARRANTIES REGARDING THE SECURITY, RELIABILITY, TIMELINESS, ACCURACY AND PERFORMANCE OF THE SITE AND ANY CONTENT HOSTED ON IT. WE DO NOT WARRANT THAT ANY DEFECTS OR ERRORS WILL BE CORRECTED; OR THAT THE CONTENT IS ERROR-FREE, FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. WE DISCLAIM ANY AND ALL WARRANTIES TO THE FULLEST EXTENT PERMISSIBLE BY LAW, INCLUDING ANY WARRANTIES FOR ANY CONTENT, INFORMATION, GOODS, OR SERVICES, OBTAINED THROUGH, ADVERTISED OR RECEIVED THROUGH ANY LINKS PROVIDED BY OR THROUGH THE SITE.</p><p>&nbsp;</p><p><strong>CONTENT DISCLAIMER</strong></p><p>&nbsp;</p><p>We communicate sale, discounts and offers information, promotions, advertisements, listings provided and created by partners, merchants, retailers, advertisers, marketers, listing agencies, publishers, users, resellers, third parties and you merely for your information and it should not be construed as our recommendation, endorsement, advice or suggestion. We have no control over the accuracy, legality, legitimacy, validity or reliability of any information on the Site, which may also include technical inaccuracies or typographical errors.</p><p>&nbsp;</p><p>The Content not limited to the availability of any service or any feature thereof, is subject to change without notice.</p><p><br />We reserve the right, in our sole discretion and without any obligation, to make improvements to, or correct any error or omissions in, any portion of the Site.</p><p><br />We are in the business of publishing sales, offers and discounts information, the information of which is publicly and/or widely available, and does this in good faith with the motive of driving more exposure, sales and revenues to the respective brands and does not claim any rights or representations by doing so. All brand names, logos, graphics and information are the properties and trademarks of the respective brands and companies. Brand Logos are accompanied with the offer to help the consumers identify the brand and its respective offer(s). We shall not be held liable for publishing sale and offers information, which is available through public platforms like print, outdoor, TV, digital, mobile and other such media used for sales promotions. However, we shall look into and take necessary action in the event of specific requests to refrain from displaying a certain part of information by a brand or company.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE IF NOT EXISTS `coupons` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `merchant_id` int(3) NOT NULL,
  `deal_id` int(3) NOT NULL,
  `coupon_type` varchar(11) NOT NULL,
  `coupon_code` varchar(1500) NOT NULL,
  `coupon_details` text NOT NULL,
  `many` varchar(12) NOT NULL,
  `couponNumber` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_deals` (`deal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `merchant_id`, `deal_id`, `coupon_type`, `coupon_code`, `coupon_details`, `many`, `couponNumber`) VALUES
(10, 3, 36, 'fixed', 'SPF001', '<p>Extra 10 % off on all offers only for DD customers</p>', 'Limited', 10),
(11, 2, 39, 'fixed', '', '<p>Flat 10 % Off</p>', 'Limited', 10);

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
  `authorized` tinyint(1) NOT NULL DEFAULT '0',
  `merchant_id` int(3) NOT NULL,
  `added_by_merchant` tinyint(1) NOT NULL DEFAULT '0',
  `coupons` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `title`, `brand`, `brand_details`, `category`, `subcategory`, `city`, `details`, `region`, `locations`, `malls`, `start_date`, `end_date`, `images`, `active`, `authorized`, `merchant_id`, `added_by_merchant`, `coupons`) VALUES
(21, 'Pantaloons Kids - Free Gift Vouchers', 'Pantaloons', '<p>&nbsp;Pantaloons&nbsp;is largest chain in fashion apparel and accessories .</p>', 'Apparels', '["Kids Wear"]', '["Noida","Ghaziabad","Gurgaon"]', '<p>Pantaloons Kids: Fresh Fashion</p><p>Get Free Vouchers Rs. 500 on shopping of Rs. 2500</p><p>Get Free Vouchers Rs. 1000/- on shopping of Rs. 4500</p>', 'Delhi NCR', '[]', '["The Great India Place Mall \\u2013 Noida , Plot No. A-2, Sector-38-A , Ph : ","Select City Walk Mall \\u2013 Saket ,  A-3m District Centre Saket, Sector 6,","Cross River Mall \\u2013 Shahdara , Near Karkardooma Court, Maharaja Surajma","Crown Plaza Mall, Service Road Parallel to Mathura Road for Sector 15A"]', '2015-10-10', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/pantaloons1.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(22, 'Get 60 % off on Party Make Up', 'Synons', '<p>Redesign Yourself by Synons : Providing Salon at Home</p><p>1. Party Make Up</p><p>2. Bridal Make Up</p><p>Synons&#39; is a professional , competent and creative make-up artist based in delhi&nbsp;with a keen eye for detail.</p>', 'Beauty and Grooming', '["Salon"]', '["North Delhi","South Delhi","East Delhi","West Delhi","Central Delhi"]', '<p>Get 60 % off on Party Make Up</p><p>Get Rs.300 services free on availing services for Rs. 1000/-</p><p>&nbsp;</p>', 'Delhi NCR', '[]', '""', '2015-10-15', '2015-10-30', '{"Image1":"\\/assets\\/uploads\\/1_1.jpg","Image2":"\\/assets\\/uploads\\/party_makeups.JPG","Image3":"","Image4":"","Image5":""}', 0, 1, 0, 0, 0),
(23, 'Yoga and aerobics at only Rs. 1100 per month', 'Let''s Fat Go', '<p>Let&#39;s Fat Go is yoga nd aerobics centre for ladies and children situated in Karol Bagh.</p>', 'Fitness and Sports', '["Yoga","Aerobics"]', '["Central Delhi"]', '<p>Unbelievable Discounts :&nbsp;</p><p>Monthly membership - Only Rs.1100 &nbsp;per person</p><p>Quarterly membership (3 months) - Only Rs 3000 per person</p><p>Half Yearly membership (6 months) - Only Rs 6000 per person</p><p>Contact Person : Jyoti Soni , Mobile : +9999369514</p>', 'Delhi NCR', '["11813 , Gali no 6 , Sat nagar , Karol Bagh , New Delhi-110005"]', '""', '2015-10-01', '2015-11-30', '{"Image1":"\\/assets\\/uploads\\/gym_copy_(1).jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(25, 'Meena Bazaar Navratri Sale', 'Meena Bazaar', '<p><strong>Meena&nbsp;Bazaar&nbsp;is well known for its exquisite collection of Sarees, Suits, Suit Pieces, Lehngas &amp; Kurtis.</strong></p>', 'Apparels', '["Women Wear"]', '["North Delhi","South Delhi","West Delhi","Central Delhi","Noida","Ghaziabad"]', '<p>Navratri Offer</p><p>Upto 50 % off&nbsp;</p><p>&nbsp;</p>', 'Delhi NCR', '["5\\/54 Ajmal Khan Road,&nbsp;Karol Bagh,Delhi-110 005Tel: +91-11-25722696 +91-11-25742696","I 39, Central Market,&nbsp;Lajpat Nagar,New Delhi-110 024Tel: +91-11-29812696&nbsp;+91-11-29814892","18 New Market,&nbsp;Kamla Nagar,Delhi-110 007Tel: +91-11-23842695","BG-03, Ansal Plaza,&nbsp;Khel Gaon Marg,New Delhi-110 049Tel: +91-11-26252120&nbsp; +91-11-26252320","Shop No-GF-09 CROWN INTERIORZ, DelhiI-Mathura Road,Sector-35, Faridabad Ph : 085275 88022","UGF-56, 58, The Great India Place,&nbsp;Sector 38 A, Noida,&nbsp;U.P.-201 301Tel: +91-120-4222696","G-24, East Delhi Mall,&nbsp;Kaushambhi, Ghaziabad,&nbsp;U.P.-201 001Tel: +91-120-3012696"]', '["The Great India Place Mall \\u2013 Noida , Plot No. A-2, Sector-38-A , Ph : ","Ansal Plaza Mall, Andrews Ganj,  Khel Gaon, New Delhi, Ph : 011- 26250","East Delhi Mall, Kaushambi, Ghaziabad, Ph:095606 50515"]', '2015-10-13', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/Meenabazaar.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 0, 1, 0, 0, 0),
(26, 'Extra 5 % on All Services', 'Sajni Beauty Parlour', '<p>Sajni Beauty parlour is loacted in Kamla Nagar Market&nbsp;and provides best and affordable services in beauty and grooming.</p>', 'Beauty and Grooming', '["Salon"]', '["North Delhi"]', '<p>Full Body Grooming Package : Head to Toe Only Rs. 1500</p><p>Loreal Hair Spa : Only Rs. 600</p><p>Extra 5 % off for Discountsdekho Members.</p>', 'Delhi NCR', '["<p>Shop No-161-D, Kamla Nagar, Kohlapur Road, Kamla Nagar, Delhi - 110007, Near Aggrasein Chowk<\\/p>"]', '""', '2015-10-20', '2015-11-11', '{"Image1":"\\/assets\\/uploads\\/sajni.PNG","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(29, 'Prestige Festive Dhamaka Offer', 'Prestige', '<p>Prestige offers wide range of Pressure Cookers, Non-Stick Cookware, Rice Cookers, OTG&rsquo;s, Kitchen Hoods (Chimneys), Hobs, LP Gas Stoves, Coffee Makers, Kettles, Sandwich Toasters and many other small electrical appliances</p>', 'Home and Living', '["Kitchen"]', '["North Delhi","South Delhi","East Delhi","West Delhi","Central Delhi","Noida","Ghaziabad","Gurgaon"]', '<p>15 % Off on all pressure Cookers</p><p>Buy 3L Pressure cooker and Get Tawa free</p><p>Buy 1 get 1 on Cookware</p><p>33 % off on Gas Stove Exchange.</p><p>25 % Off on Small Appliances and many more</p>', 'Delhi NCR', '["Prestige, G-2, Namdhari Chambers, 9\\/54, DB Gupta Road, Karol Bagh,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Karol-Bagh\\">Karol Bagh<\\/a>&nbsp;Ph :&nbsp;23528261","Prestige, J-9, Sector-18 Noida, Opp. Sony World,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sector-18-Noida\\">Sector-18 Noida<\\/a>&nbsp;Ph :&nbsp;4223330","Prestige, C-11, First Floor, Manhattan Mall, Faridabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Faridabad\\">Faridabad<\\/a>&nbsp;Ph :&nbsp;4157287","Prestige, Laxmi Kitchen, Ashok Vihar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ashok-Vihar\\">Ashok Vihar<\\/a>&nbsp;Ph :&nbsp;27252843","Prestige, Manohars, Connaught Place,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Connaught-Place\\">Connaught Place<\\/a>&nbsp;Ph :&nbsp;23324739","Prestige, Sohan Lal Yash Lal, Connaught Place,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Connaught-Place\\">Connaught Place<\\/a>&nbsp;Ph :&nbsp;23361661","Prestige, Punjab Steel, Chandni Chowk,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Chandni-Chowk\\">Chandni Chowk<\\/a>&nbsp;Mob :&nbsp;9810110661","Prestige, Sandeep Crockery, Chandni Chowk,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Chandni-Chowk\\">Chandni Chowk<\\/a>&nbsp;Ph :&nbsp;65665918","Prestige, Mansarovar Crockery, Chandni Chowk,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Chandni-Chowk\\">Chandni Chowk<\\/a>&nbsp;Ph :&nbsp;23960077","Prestige, Swaroop Electricals, Chandni Chowk,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Chandni-Chowk\\">Chandni Chowk<\\/a>&nbsp;Ph :&nbsp;23943672","Prestige, Paradise kitchenware, Dwarka,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Dwarka\\">Dwarka<\\/a>&nbsp;Ph :&nbsp;45621842","Prestige, Mohindra Dept. Store, Greater Kailash I,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Greater-Kailash\\">Greater Kailash<\\/a>&nbsp;Ph :&nbsp;29231243","Prestige, KR Electrical, Greater Kailash I,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Greater-Kailash\\">Greater Kailash<\\/a>&nbsp;Ph :&nbsp;41632215","Prestige, Guliani Electricals, Jail Road,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Jail-Road\\">Jail Road<\\/a>&nbsp;Ph :&nbsp;25531277","Prestige, Bhagwan Dass &amp; Co, Kotla,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kotla\\">Kotla<\\/a>&nbsp;Ph :&nbsp;24645444","Prestige, Aggarwal Plastic, Kotla,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kotla\\">Kotla<\\/a>&nbsp;Mob :&nbsp;9810866425","Prestige, Gulati Galaxy, Kotla,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kotla\\">Kotla<\\/a>&nbsp;Mob :&nbsp;9899422042","Prestige, Pyarelal Rajesh Kumar, Kingsway Camp,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kingsway-Camp\\">Kingsway Camp<\\/a>&nbsp;Mob :&nbsp;9868893612","Prestige, National Bartan Bhandar, Lajpat Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;29833914","Prestige, National Crockery, Lajpat Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;29842932","Prestige, Amba Crockery, Lajpat Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;66606929","Prestige, Sanjeev Crockery, Lajpat Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;29840695","Prestige, Bajrang Crockery, Lajpat Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;29832552","Prestige, Amar Electrical, Lajpat Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;29845328","Prestige, Durga Crockery, Lajpat Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;29842594","Prestige, Taneja Crockery, Lajpat Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;29841383","Prestige, Nirankari Gen Store, Hauz Khas,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Hauz-Khas\\">Hauz Khas<\\/a>&nbsp;Ph :&nbsp;26562803","Prestige, Crockery Empire, Khan Market,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Khan-Market\\">Khan Market<\\/a>&nbsp;Ph :&nbsp;24694844","Prestige, Pindi Crockery, Khan Market,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Khan-Market\\">Khan Market<\\/a>&nbsp;Ph :&nbsp;24619231","Prestige, Sargodha Bartan, Karol Bagh,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Karol-Bagh\\">Karol Bagh<\\/a>&nbsp;Ph :&nbsp;41544766","Prestige, Vishal Bartan, Karol Bagh,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Karol-Bagh\\">Karol Bagh<\\/a>&nbsp;Ph :&nbsp;41545690","Prestige, Bhasin Appliances, Karol Bagh,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Karol-Bagh\\">Karol Bagh<\\/a>&nbsp;Ph :&nbsp;28722910","Prestige, Madras Store, Karol Bagh,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Karol-Bagh\\">Karol Bagh<\\/a>&nbsp;Ph :&nbsp;25722798","Prestige, Tamil Nadu Store, Karol Bagh,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Karol-Bagh\\">Karol Bagh<\\/a>&nbsp;Ph :&nbsp;28755775","Prestige, Vani Enterprise, Karol Bagh,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Karol-Bagh\\">Karol Bagh<\\/a>&nbsp;Ph :&nbsp;25740010","Prestige, Shakti Kitchen, Kamla Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kamla-Nagar\\">Kamla Nagar<\\/a>&nbsp;Mob :&nbsp;9953633623","Prestige, Sona Crockery, Kamla Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kamla-Nagar\\">Kamla Nagar<\\/a>&nbsp;Ph :&nbsp;23844151","Prestige, Om Steel, Kalkaji,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kalkaji\\">Kalkaji<\\/a>&nbsp;Ph :&nbsp;45092377","Prestige, Kitchen Shopee, Kalkaji,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kalkaji\\">Kalkaji<\\/a>&nbsp;Ph :&nbsp;26297428","Prestige, Arora Utensil, Kalkaji,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kalkaji\\">Kalkaji<\\/a>&nbsp;Ph :&nbsp;26212986","Prestige, Bhutani Bartan, Moti Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Moti-Nagar\\">Moti Nagar<\\/a>&nbsp;Ph :&nbsp;25929388","Prestige, Sunder Bartan, Moti Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Moti-Nagar\\">Moti Nagar<\\/a>&nbsp;Ph :&nbsp;25430368","Prestige, Super Crockery, Munirka,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Munirka\\">Munirka<\\/a>&nbsp;Ph :&nbsp;26104885","Prestige, Vardhman Bartan, munirka,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Munirka\\">Munirka<\\/a>&nbsp;Ph :&nbsp;26103370","Prestige, Shri Rama Store, Munirka,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Munirka\\">Munirka<\\/a>&nbsp;Ph :&nbsp;26102686","Prestige, Lovely Kitchen, Munirka,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Munirka\\">Munirka<\\/a>&nbsp;Ph :&nbsp;26197688","Prestige, Ramprakash, Malviya Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Malviya-Nagar\\">Malviya Nagar<\\/a>&nbsp;Ph :&nbsp;26688425","Prestige, Himani Bartan, Malviya Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Malviya-Nagar\\">Malviya Nagar<\\/a>&nbsp;Ph :&nbsp;26686301","Prestige, Ram kishan &amp; Co, Malviya Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Malviya-Nagar\\">Malviya Nagar<\\/a>&nbsp;Mob :&nbsp;9818091149","Prestige, Raj Store, Malviya Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Malviya-Nagar\\">Malviya Nagar<\\/a>&nbsp;Mob :&nbsp;9810699457","Prestige, Nirankari Gift Centre, Malviya Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Malviya-Nagar\\">Malviya Nagar<\\/a>&nbsp;Ph :&nbsp;26682389","Prestige, RP Goyal, Mehrauli,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Mehrauli\\">Mehrauli<\\/a>&nbsp;Ph :&nbsp;41293422","Prestige, Gripex Crockery, Patel Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Patel-Nagar\\">Patel Nagar<\\/a>&nbsp;Ph :&nbsp;25884266","Prestige, Mahavir Crockery, Paschim vihar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Paschim-Vihar\\">Paschim Vihar<\\/a>&nbsp;Ph :&nbsp;25252801","Prestige, Mayur Emp, Paschim Vihar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Paschim-Vihar\\">Paschim Vihar<\\/a>&nbsp;Ph :&nbsp;25265217","Prestige, Jain Bartan, Paschim Vihar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Paschim-Vihar\\">Paschim Vihar<\\/a>&nbsp;Ph :&nbsp;25258536","Prestige, New Variety, Rajouri Garden,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Rajouri-garden\\">Rajouri garden<\\/a>&nbsp;Ph :&nbsp;25106180","Prestige, Bhawna Kitchen, Sarojini Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sarojini-Nagar\\">Sarojini Nagar<\\/a>&nbsp;Ph :&nbsp;26879190","Prestige, Goel Bartan, Sector 15, Rohini,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Rohini\\">Rohini<\\/a>&nbsp;Mob :&nbsp;9871822910","Prestige, Goel Bartan, Sector 17, Rohini,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Rohini\\">Rohini<\\/a>&nbsp;Ph :&nbsp;27884701","Prestige, Jain Kitchen Gallery, Rohini,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Rohini\\">Rohini<\\/a>&nbsp;Ph :&nbsp;27551277","Prestige, Apsara Kitchen Gallery, Rohini,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Rohini\\">Rohini<\\/a>&nbsp;Mob :&nbsp;9350989002","Prestige, Bharat Bartan, Rani Bagh,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Rani-Bagh\\">Rani Bagh<\\/a>&nbsp;Ph :&nbsp;27021539","Prestige, Sewa Gift, Rani Bagh,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Rani-Bagh\\">Rani Bagh<\\/a>&nbsp;Ph :&nbsp;27017844","Prestige, Vandana, Sarojini Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sarojini-Nagar\\">Sarojini Nagar<\\/a>&nbsp;Ph :&nbsp;24672818","Prestige, Arora Bartan, Sarojini Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sarojini-Nagar\\">Sarojini Nagar<\\/a>&nbsp;Ph :&nbsp;24674043","Prestige, Ashoka Bartan, Sarojini Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sarojini-Nagar\\">Sarojini Nagar<\\/a>&nbsp;Ph :&nbsp;26874341","Prestige, Punjab Bartan, Sarojini Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sarojini-Nagar\\">Sarojini Nagar<\\/a>&nbsp;Ph :&nbsp;26119733","Prestige, shankla Bartan, Sarojini Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sarojini-Nagar\\">Sarojini Nagar<\\/a>&nbsp;Ph :&nbsp;24673247","Prestige, MK Enterprise, Sarojini Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sarojini-Nagar\\">Sarojini Nagar<\\/a>&nbsp;Ph :&nbsp;24672023","Prestige, Hardawarilal, Badarpur,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Badarpur\\">Badarpur<\\/a>&nbsp;Ph :&nbsp;26942112","Prestige, Renu Steel Center, Tilak Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Tilak-Nagar\\">Tilak Nagar<\\/a>&nbsp;Ph :&nbsp;32919441","Prestige, Prem Light House, Tilak Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Tilak-Nagar\\">Tilak Nagar<\\/a>&nbsp;Ph :&nbsp;65351459","Prestige, Palaji Steel Center, Tilak Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Tilak-Nagar\\">Tilak Nagar<\\/a>&nbsp;Ph :&nbsp;25990596","Prestige, Sarvpriya Bartan, Tilak Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Tilak-Nagar\\">Tilak Nagar<\\/a>&nbsp;Ph :&nbsp;25992900","Prestige, Osaba Emporium, Vasant Vihar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vasant-Vihar\\">Vasant Vihar<\\/a>&nbsp;Ph :&nbsp;26145906","Prestige, MunniLal B Swroop, Yusuf Sarai,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Yusuf-Sarai\\">Yusuf Sarai<\\/a>&nbsp;Ph :&nbsp;26517955","Prestige, Luxmi Crockery, Yusuf Sarai,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Yusuf-Sarai\\">Yusuf Sarai<\\/a>&nbsp;Ph :&nbsp;41645226","Prestige, Vardhman Traders, Yusuf Sarai,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Yusuf-Sarai\\">Yusuf Sarai<\\/a>&nbsp;Ph :&nbsp;26198933","Prestige, Aggarwal Bartan, Wazirpur,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Wazirpur\\">Wazirpur<\\/a>&nbsp;Ph :&nbsp;27373462","Prestige, Monga electricals, Laxmi Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Laxmi-Nagar\\">Laxmi Nagar<\\/a>&nbsp;Ph :&nbsp;65583584","Prestige, Aar Kay Ent, Laxmi Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Laxmi-Nagar\\">Laxmi Nagar<\\/a>&nbsp;Ph :&nbsp;22545468","Prestige, GK Trader, Laxmi Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Laxmi-Nagar\\">Laxmi Nagar<\\/a>&nbsp;Ph :&nbsp;22413480","Prestige, Jain Light House, Laxmi Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Laxmi-Nagar\\">Laxmi Nagar<\\/a>&nbsp;Ph :&nbsp;22446848","Prestige, Khushi Enterprises, Laxmi Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Laxmi-Nagar\\">Laxmi Nagar<\\/a>&nbsp;Mob :&nbsp;9250330506","Prestige, Luxmi Bartan, Laxmi Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Laxmi-Nagar\\">Laxmi Nagar<\\/a>&nbsp;Ph :&nbsp;22504182","Prestige, Neelam Appliance, Vikas Marg,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vikas-Marg\\">Vikas Marg<\\/a>&nbsp;Ph :&nbsp;22025675","Prestige, Gupta &amp; Sons, Vikas Marg,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vikas-Marg\\">Vikas Marg<\\/a>&nbsp;Ph :&nbsp;22526423","Prestige, Gandhi Steel, Sadar Bazar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sadar-Bazar\\">Sadar Bazar<\\/a>&nbsp;Mob :&nbsp;9810296531","Prestige, Zs Agencies, Sadar Bazar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sadar-Bazar\\">Sadar Bazar<\\/a>&nbsp;Ph :&nbsp;23610317","Prestige, Khanna Sales, Sadar Bazar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sadar-Bazar\\">Sadar Bazar<\\/a>&nbsp;Ph :&nbsp;23671931","Prestige, Uttam Vastu Bhandar, Sadar Bazar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sadar-Bazar\\">Sadar Bazar<\\/a>&nbsp;Ph :&nbsp;23554708","Prestige, Bharat Trading Co, Sadar Bazar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sadar-Bazar\\">Sadar Bazar<\\/a>&nbsp;Ph :&nbsp;23514399","Prestige, Annapurna Steel, Sadar Bazar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sadar-Bazar\\">Sadar Bazar<\\/a>&nbsp;Ph :&nbsp;23680352","Prestige, Bharat Bartan, Patparganj,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Patparganj\\">Patparganj<\\/a>&nbsp;Ph :&nbsp;22755762","Prestige, Jyoti Bartan, Patparganj,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Patparganj\\">Patparganj<\\/a>&nbsp;Ph :&nbsp;22754512","Prestige, Balaji Bartan, Patparganj,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Patparganj\\">Patparganj<\\/a>&nbsp;Ph :&nbsp;22793213","Prestige, Home Zone, Patparganj,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Patparganj\\">Patparganj<\\/a>&nbsp;Mob :&nbsp;9810455012","Prestige, Goyrawalan Bartan, Paharganj,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Paharganj\\">Paharganj<\\/a>&nbsp;Ph :&nbsp;23583489","Prestige, Dinesh Crockery House, Paharganj,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Paharganj\\">Paharganj<\\/a>&nbsp;Ph :&nbsp;23583448","Prestige, Palam Bardwaj Bartan, Paharganj,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Palam\\">Palam<\\/a>&nbsp;Mob :&nbsp;9212766860","Prestige, Sri krishna Bartan, Krishna Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Krishna-Nagar\\">Krishna Nagar<\\/a>&nbsp;Ph :&nbsp;22001251","Prestige, Kohli sons, Krishna Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Krishna-Nagar\\">Krishna Nagar<\\/a>&nbsp;Ph :&nbsp;22095249","Prestige, Shree Balaji, Krishna Nagar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Krishna-Nagar\\">Krishna Nagar<\\/a>&nbsp;Ph :&nbsp;22468119&nbsp;Mob :&nbsp;9873489820","Prestige, BK &amp; Sons, Shahadra,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Shahadra\\">Shahadra<\\/a>&nbsp;Ph :&nbsp;65261558","Prestige, Aggarwal Dept Store, Shahadra,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Shahadra\\">Shahadra<\\/a>&nbsp;Ph :&nbsp;22320080","Prestige, Aggarwal Bartan Store, Shahadra,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Shahadra\\">Shahadra<\\/a>&nbsp;Ph :&nbsp;22325961","Prestige, Garg Traders, Shahadra,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Shahadra\\">Shahadra<\\/a>&nbsp;Mob :&nbsp;9818634472","Prestige, Cristal Shopee, Shahadra,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Shahadra\\">Shahadra<\\/a>&nbsp;Ph :&nbsp;22392043","Prestige, Deepak Bartan Wala, Shahadra,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Shahadra\\">Shahadra<\\/a>&nbsp;Ph :&nbsp;65264558","Prestige, A-One Stainless Steel, Shahadra,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Shahadra\\">Shahadra<\\/a>&nbsp;Ph :&nbsp;22308525","Prestige, Ajjo Bartan, Shahadra,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Shahadra\\">Shahadra<\\/a>&nbsp;Ph :&nbsp;22382373","Prestige, Vashisht Dhatu, Loni Road,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Loni\\">Loni<\\/a>&nbsp;Mob :&nbsp;9810177101","Prestige, Urmil Bartan Store, Loni Road,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Loni\\">Loni<\\/a>&nbsp;Ph :&nbsp;22592147","Prestige, Bansal Traders, New Kondli,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ansal\\">Ansal<\\/a>&nbsp;Ph :&nbsp;22628020","Prestige, Shanti Trading, Dilshad Garden,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Dilshad-Garden\\">Dilshad Garden<\\/a>&nbsp;Ph :&nbsp;22355625","Prestige, Sunil Bartan, Dilshad Garden,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Dilshad-Garden\\">Dilshad Garden<\\/a>&nbsp;Ph :&nbsp;22354600","Prestige, Anil Plastic Store, Vivek Vihar,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vivek-Vihar\\">Vivek Vihar<\\/a>&nbsp;Ph :&nbsp;22152907","Prestige, Kunal kitchen, Faridabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Faridabad\\">Faridabad<\\/a>&nbsp;Ph :&nbsp;2411938","Prestige, Deepak Gift, Faridabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Faridabad\\">Faridabad<\\/a>&nbsp;Ph :&nbsp;2295863","Prestige, Kishan Lal Sanjiv Kr, Faridabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Faridabad\\">Faridabad<\\/a>&nbsp;Ph :&nbsp;4028116","Prestige, Guru Kripa, Faridabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Faridabad\\">Faridabad<\\/a>&nbsp;Ph :&nbsp;2418944","Prestige, Gogia Bartan, Gurgaon,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Gurgaon\\">Gurgaon<\\/a>&nbsp;Ph :&nbsp;4066274","Prestige, Classic Kitchen, Gurgaon,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Gurgaon\\">Gurgaon<\\/a>&nbsp;Ph :&nbsp;2333700","Prestige, Mohan Lal and Sons, Gurgaon,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Gurgaon\\">Gurgaon<\\/a>&nbsp;Ph :&nbsp;2333566","Prestige, Gupta Kit, Gurgaon,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Gurgaon\\">Gurgaon<\\/a>&nbsp;Ph :&nbsp;2562375","Prestige, City Coll, Gurgaon,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Gurgaon\\">Gurgaon<\\/a>&nbsp;Ph :&nbsp;4052072","Prestige, Om Sons, Gurgaon,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Gurgaon\\">Gurgaon<\\/a>&nbsp;Ph :&nbsp;2355657","Prestige, sonal Bartan, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Mob :&nbsp;9871738449","Prestige, Garg Electronics, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Ph :&nbsp;3263693","Prestige, Harish Bartan, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Ph :&nbsp;2852404","Prestige, Sandeep Ent, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Ph :&nbsp;2738526","Prestige, Prakash Bharat Gas, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Ph :&nbsp;3253991","Prestige, UP Crockery, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Ph :&nbsp;2738526","Prestige, Basal Sales Emp, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Mob :&nbsp;9810721886","Prestige, Baba Bartan Bhandar, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Ph :&nbsp;6526020","Prestige, Kitchen Gallery, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Mob :&nbsp;9213495507","Prestige, Hapur Crockery Center, Ghaziabad,&nbsp;<a target=\\"_blank\\" href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ghaziabad\\">Ghaziabad<\\/a>&nbsp;Ph :&nbsp;2305844"]', '""', '2015-10-20', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/prestige.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(30, 'Veromoda Shine Bright Diwali Offer', 'Veromoda', '<p>Vero Moda is a contemporary international brand available in 45 countries along with&nbsp;India.It has&nbsp;everything from bags , footwears,&nbsp;jackets,accessories, dressess.</p>', 'Apparels', '["Women Wear"]', '["South Delhi"]', '<p>Shop for INR 5000 and get a vanity box free.</p><p>Shop for INR 10,000 and get a Chambor gift hamper free along with the vanity box!</p><p>Rush to your nearest VERO MODA store now!</p>', 'Delhi NCR', '["Khan Market shop no.34A &amp; B- 110003&nbsp; , Khan Market Ph : 011-40870007\\/08","G-4, South Extension part-1110049 Ph :011-40569871","GK I M Block , M - 70, Greater Kailash I - 110048 Delhi Ph : &nbsp;011-40569871","DLF Saket -A1, Ground Floor, Dlf Place, Saket , 110017 Delhi Ph : 011-4616090"]', '["DLF Place Mall \\u2013 Saket ,  A 4, District Center, Press Enclave Road, De"]', '2015-10-15', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/veromodaoffersoct2015.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(31, 'Gym in Sec-4 Gurgaon :Yearly Rs. 7000 per person', 'Fitlife Fizik Gym', '<p>Fitlife Fizik Gym is complete fitness centre situated&nbsp;Opposite&nbsp;Sector-4 in Gurgaon.</p>', 'Fitness and Sports', '["Gym"]', '["Gurgaon"]', '<p>FitLife Fizik Gym</p><p>Ladies and Gents</p><p>Fully Day Open from Ist November 2015</p><p>7 Days Open</p><p>Timings : 5 AM to 10 PM</p><p>Phone : 9999961811, 9899480066</p>', 'Delhi NCR', '["FitLife Fizik Gym , Manraj Tower. Opposite Sec - 4 , Dhanwapur Main Road , Gurgaon -122001"]', '""', '2015-10-01', '2015-12-31', '{"Image1":"\\/assets\\/uploads\\/fitlife_fizik.jpg","Image2":"\\/assets\\/uploads\\/gym.jpg","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(32, 'Kelvinator Appliances', 'Kelvinator', '<p>Kelvinator&nbsp;is a popular&nbsp;Refrigerators&nbsp;brand in India, offering over 56 products across a wide variety of categories</p>', 'Home and Living', '["Home Appliances"]', '["North Delhi","South Delhi","East Delhi","West Delhi","Noida"]', '<p>Kelvinator&nbsp;Appliances</p><p>Exciting Gifts Ensured</p><p>Free induction Cooktop with frost free Refrigerator</p><p>Free Sandwich Maker with DC Refrigerator 190 L</p><p>Free Steam Iron with semi automatic washing machine.</p><p>Down Payment of Just Rs. 1999 and take home a&nbsp;kelvinator. No Hidden Charges</p>', 'Delhi NCR', '["Next Pacific Mall , Shop No. LGF-012,(Lower Ground Floor), Pacific - Mall, Najafgarh Road, Delhi 4000018. Phone : 01145053849","Kay Dee Electronics , 1b\\/1, Near Noida Sector 18 Metro Station, Noida Sector-18, Noida - 201301. Phone : (0120) 4333003","Atlantic Appliances, A 33, 34, Ring Road, Rajouri Garden, Delhi - 110027. Phone : 011-66356343","MG Ezone, Shop Number-6, Dav School Building, Next To Green Park Metro Station, Near Indian Oil Building, Yusuf Sarai-Green Park, Delhi - 110016. Phone : 01126526411","Sargam Electronics, 50\\/3,Main Market, Yusuf Sarai, New Delhi, Delhi 110016.","Sargam Electronics, J-38A, Center Market, Lajpat Nagar II, Delhi-19&nbsp;.","Sargam Electronics, K-75, Kalka Ji, Near Kalkaji Mandir, Delhi-19.","Sargam Electronics, GL-11, Jail Road, Hari Nagar, New Delhi-58. &nbsp;","Sargam Electronics, A-3\\/183, Paschim Vihar, New Delhi-63. Phone&nbsp;&nbsp;Ph : 25287582 Mob : 99115152207"]', '""', '2015-10-21', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/kelvinator.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(33, 'Samsung Smart Refrigerators - Utsav Offer', 'Samsung', '<p>Samsung Refrigerator Convert your Freezer into Fridge whenever you want.</p>', 'Home and Living', '["Home Appliances"]', '["North Delhi","South Delhi","East Delhi","West Delhi","Central Delhi"]', '<p>Free Samsung galaxy , A7 , worth Rs. 30200/-</p><p>Free Samsung galaxy TAB E worth Rs. 19900/-</p><p>Upto 21 % off on Exchange</p><p>Rs. 0/-&nbsp; Down Payment and 15 easy monthly instalments.</p><p>&nbsp;</p>', 'Delhi NCR', '["&middot;&nbsp; Samsung, 4 Basant Lok, Vasant Vihar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vasant-Vihar\\">Vasant Vihar<\\/a>&nbsp;Ph :&nbsp;46039911\\/22\\/33","&middot;&nbsp; Samsung, D 62 Main Road, Laxmi Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Laxmi-Nagar\\">Laxmi Nagar<\\/a>&nbsp;Ph :&nbsp;22533659","&middot;&nbsp; Samsung, M-31 A, Greater Kailash II ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Greater-Kailash\\">Greater Kailash<\\/a>&nbsp;Ph :&nbsp;40562200","&middot;&nbsp; Samsung, 66,67 South Patel Nagar Market ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Patel-Nagar\\">Patel Nagar<\\/a>&nbsp;Ph :&nbsp;25842020","&middot;&nbsp; Samsung, D-77, Malviya Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Malviya-Nagar\\">Malviya Nagar<\\/a>&nbsp;Ph :&nbsp;26688888","&middot;&nbsp; Samsung, Yashpal Electronics, Yusuf Sarai ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Yusuf-Sarai\\">Yusuf Sarai<\\/a>&nbsp;Ph :&nbsp;26528107","&middot;&nbsp; Samsung, Music Corner, Vasant Vihar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vasant-Vihar\\">Vasant Vihar<\\/a>&nbsp;Ph :&nbsp;26141992,26145727","&middot;&nbsp; Samsung, Navrang Electronics, Krishna Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Krishna-Nagar\\">Krishna Nagar<\\/a>&nbsp;Ph :&nbsp;65055058","&middot;&nbsp; Samsung, Hari Om Electronics, Roop Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Roop-Nagar\\">Roop Nagar<\\/a>&nbsp;Ph :&nbsp;23845888","&middot;&nbsp; Samsung, Sargam Electronics, Paschim Vihar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Paschim-Vihar\\">Paschim Vihar<\\/a>&nbsp;Ph :&nbsp;25287582","&middot;&nbsp; Samsung, Dass Studios, Connaught Place ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Connaught-Place\\">Connaught Place<\\/a>&nbsp;Mob :&nbsp;9810019770","&middot;&nbsp; Samsung, Mahatta and Company, Connaught Place ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Connaught-Place\\">Connaught Place<\\/a>&nbsp;Ph :&nbsp;41517220","&middot;&nbsp; Samsung, Capital Studio, Connaught Place ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Connaught-Place\\">Connaught Place<\\/a>&nbsp;Mob :&nbsp;9810199277","&middot;&nbsp; Samsung, Shoecrafts, Connaught Place ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Connaught-Place\\">Connaught Place<\\/a>&nbsp;Ph :&nbsp;41529209","&middot;&nbsp; Samsung, Raheja Photographics, Connaught Place,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Connaught-Place\\">Connaught Place<\\/a>&nbsp;Ph :&nbsp;233265606","&middot;&nbsp; Samsung, Master Color, Chandni Chowk ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Chandni-Chowk\\">Chandni Chowk<\\/a>&nbsp;Ph :&nbsp;23865500","&middot;&nbsp; Samsung, Kumarjee, Chandni Chowk ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Chandni-Chowk\\">Chandni Chowk<\\/a>&nbsp;Ph :&nbsp;41391024","&middot;&nbsp; Samsung, Pritam Sons, Chandni Chowk ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Chandni-Chowk\\">Chandni Chowk<\\/a>&nbsp;Mob :&nbsp;9811784387","&middot;&nbsp; Samsung, H.G. and Co. , Chandni Chowk ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Chandni-Chowk\\">Chandni Chowk<\\/a>&nbsp;Mob :&nbsp;9811032641","&middot;&nbsp; Samsung, Allied Sales, Chandni Chowk ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Chandni-Chowk\\">Chandni Chowk<\\/a>&nbsp;Ph :&nbsp;23979232","&middot;&nbsp; Samsung, Rama Color, Khan Market ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Khan-Market\\">Khan Market<\\/a>&nbsp;Ph :&nbsp;24628890","&middot;&nbsp; Samsung, Audio Voice, Lajpat Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;29830300","&middot;&nbsp; Samsung, Krishiv, Lajpat Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Lajpat-Nagar\\">Lajpat Nagar<\\/a>&nbsp;Ph :&nbsp;41500022","&middot;&nbsp; Samsung, Neo 17th, Saket ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Saket\\">Saket<\\/a>&nbsp;Mob :&nbsp;9811284958","&middot;&nbsp; Samsung, Gizmos, Saket ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Saket\\">Saket<\\/a>&nbsp;Ph :&nbsp;46052800","&middot;&nbsp; Samsung, Aakash Best Buys, Sarojini Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sarojini-Nagar\\">Sarojini Nagar<\\/a>&nbsp;Ph :&nbsp;24672513","&middot;&nbsp; Samsung, Memories, Sarojini Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Sarojini-Nagar\\">Sarojini Nagar<\\/a>&nbsp;Ph :&nbsp;24671487","&middot;&nbsp; Samsung, Aakash Vision, Yusuf Sarai ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Yusuf-Sarai\\">Yusuf Sarai<\\/a>&nbsp;Ph :&nbsp;41841438","&middot;&nbsp; Samsung, Aastha Computers, Nehru Place ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Nehru-Place\\">Nehru Place<\\/a>&nbsp;Ph :&nbsp;41395474","&middot;&nbsp; Samsung, M.G. Enterprises, Vasant Kunj ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vasant-Kunj\\">Vasant Kunj<\\/a>&nbsp;Ph :&nbsp;26130000","&middot;&nbsp; Samsung, Anand Electronics, Kalkaji ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kalkaji\\">Kalkaji<\\/a>&nbsp;Ph :&nbsp;26217383","&middot;&nbsp; Samsung, Dass Electronics, Kalkaji ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kalkaji\\">Kalkaji<\\/a>&nbsp;Ph :&nbsp;26438096","&middot;&nbsp; Samsung, Aeroline Electronics, Hauz Khas ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Hauz-Khas\\">Hauz Khas<\\/a>&nbsp;Ph :&nbsp;32956104","&middot;&nbsp; Samsung, India Radio , Karol Bagh ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Karol-Bagh\\">Karol Bagh<\\/a>&nbsp;Mob :&nbsp;9810611174","&middot;&nbsp; Samsung, Saitel, Karol Bagh ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Karol-Bagh\\">Karol Bagh<\\/a>&nbsp;Mob :&nbsp;9811194466","&middot;&nbsp; Samsung, Cam Club, Rajouri Garden ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Rajouri-garden\\">Rajouri garden<\\/a>&nbsp;Ph :&nbsp;45584600","&middot;&nbsp; Samsung, Better Deals, Janak Puri ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Janak-Puri\\">Janak Puri<\\/a>&nbsp;Ph :&nbsp;25595091","&middot;&nbsp; Samsung, New Bercos, Sector 6 Dwarka ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Dwarka\\">Dwarka<\\/a>&nbsp;Ph :&nbsp;25075111","&middot;&nbsp; Samsung, New Bercos, sector 10 Dwarka ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Dwarka\\">Dwarka<\\/a>&nbsp;Ph :&nbsp;28083526","&middot;&nbsp; Samsung, New Bercos, Uttam Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Uttam-Nagar\\">Uttam Nagar<\\/a>&nbsp;Ph :&nbsp;25375339","&middot;&nbsp; Samsung, Super Electronics, Vikas Puri ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vikas-Puri\\">Vikas Puri<\\/a>&nbsp;Mob :&nbsp;9891344443","&middot;&nbsp; Samsung, Kanchan Photographics, Vikas Marg,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vikas-Marg\\">Vikas Marg<\\/a>&nbsp;Mob :&nbsp;9810684887","&middot;&nbsp; Samsung, Capital, Vikas Marg ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vikas-Marg\\">Vikas Marg<\\/a>&nbsp;Ph :&nbsp;65275452","&middot;&nbsp; Samsung, KBM Electronics, Vikas Marg ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Vikas-Marg\\">Vikas Marg<\\/a>&nbsp;Ph :&nbsp;22448157","&middot;&nbsp; Samsung, Saaj Electronics, Krishna Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Krishna-Nagar\\">Krishna Nagar<\\/a>&nbsp;Mob :&nbsp;9211677260","&middot;&nbsp; Samsung, Foto Sadan, Dilshad Garden ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Dilshad-Garden\\">Dilshad Garden<\\/a>&nbsp;Ph :&nbsp;22136644","&middot;&nbsp; Samsung, Ramsons, Pitampura ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Pitampura\\">Pitampura<\\/a>&nbsp;Ph :&nbsp;27316622","&middot;&nbsp; Samsung, Sargam Electronics, Pitampura ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Pitampura\\">Pitampura<\\/a>&nbsp;Ph :&nbsp;27355349","&middot;&nbsp; Samsung, Studio, Shalimar Bagh ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Shalimar-Bagh\\">Shalimar Bagh<\\/a>&nbsp;Mob :&nbsp;9810014200","&middot;&nbsp; Samsung, Bharat Electronics, Kamla Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kamla-Nagar\\">Kamla Nagar<\\/a>&nbsp;Ph :&nbsp;23846629","&middot;&nbsp; Samsung, prem Studio, Kamla Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kamla-Nagar\\">Kamla Nagar<\\/a>&nbsp;Ph :&nbsp;23846810","&middot;&nbsp; Samsung, Omega , Kamla Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Kamla-Nagar\\">Kamla Nagar<\\/a>&nbsp;Ph :&nbsp;23842457","&middot;&nbsp; Samsung, Sargam Electronics, Aadarsh Nagar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Adarsh-Nagar\\">Adarsh Nagar<\\/a>&nbsp;Ph :&nbsp;27675427","&middot;&nbsp; Samsung, Naveen Electronics, Model Town ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Model-Town\\">Model Town<\\/a>&nbsp;Ph :&nbsp;27458946","&middot;&nbsp; Samsung, Hari Om Electronics, Ashok Vihar ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Ashok-Vihar\\">Ashok Vihar<\\/a>&nbsp;Ph :&nbsp;27415736","&middot;&nbsp; Samsung, E-Zone, Rohini ,&nbsp;<a href=\\"http:\\/\\/saleraja.com\\/shopping-markets-in-delhi\\/Rohini\\">Rohini<\\/a>&nbsp;Ph :&nbsp;27574917"]', '""', '2015-10-01', '2015-11-15', '{"Image1":"\\/assets\\/uploads\\/samsungref.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(35, 'Haier Appliances - Special Festive Offers', 'Haier', '<p>Haier deals in refrigerators, TV&nbsp;, washing machines, microwave ovens , AC and water heaters.</p>', 'Home and Living', '["Home Appliances"]', '["South Delhi","East Delhi","Ghaziabad"]', '<p>Special Festive Offers</p><p>Get Exciting gifts with Haier products</p>', 'Delhi NCR', '["Haier&nbsp;Electronics Store&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; , Sector 15A, Faridabad, Haryana 121007 <strong>Phone:<\\/strong>096729 54331&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;","Haier Appliances India Pvt Ltd&nbsp;. Electronics Accessories Wholesaler ,Building No-1, Okhla Industrial Area, Phase 3, Near Modi Mill, New Delhi, Delhi 110020 <strong>Phone:<\\/strong>095875 65361","Haier Appliances Private Limited&nbsp;,Building Number 1, Opposite Modi Mill, Okhla Industrial Estate, Phase III, New Delhi, Delhi 110020 <strong>Phone:<\\/strong>070730 64402&nbsp;&nbsp;&nbsp;&nbsp;","Haier Export&nbsp;Exporter,391, Sant Nagar, East Of Kailash, East Of Kailash, New Delhi, Delhi 110065&nbsp;<strong>Phone:<\\/strong>011-26232826 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\\"line-height:1.6\\">Haier, Electronic Paradise, Ghaziabad,&nbsp;<\\/span><strong style=\\"line-height:1.6\\">Mob :<\\/strong><span style=\\"line-height:1.6\\">&nbsp;9889101886 &nbsp; &nbsp;<\\/span>"]', '""', '2015-10-21', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/haier.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(36, 'Exclusive and extra 10 % off for DD members', 'Shape Perfect fitness', '<p>Shape Perfect Fitness is one stop solution for your all gym needs.</p><p>Monday, Tuesday, Wednesday, Thursday, Friday, Saturday: 09:00 am to 09:30 pm Sunday: Closed</p>', 'Fitness and Sports', '["Gym"]', '["South Delhi"]', '<ol><li>Rs. 700 &nbsp;per month /- No Registration fee for one month.</li><li>Rs. 2300/- for three months including&nbsp;Rs. 200 registration.</li><li>Rs. 3800/- for six&nbsp;months including&nbsp;Rs. 200 registration.</li><li>Download coupon and get extra&nbsp;10 % off only for Discounts Dekho customers.</li></ol>', 'Delhi NCR', '["Shape Perfect Fitness, Next To D94\\/95, Main Road, Khanpur, Delhi - 110062 Ph : 9871586878"]', '""', '2015-10-22', '2015-12-31', '{"Image1":"\\/assets\\/uploads\\/Capture.PNG","Image2":"\\/assets\\/uploads\\/shape_perfect_fitness.PNG","Image3":"\\/assets\\/uploads\\/ssft2.PNG","Image4":"","Image5":""}', 1, 1, 3, 1, 1),
(37, 'Get Personalized Sessions at best prices.', 'Zink Fitness Studio', '<p>Zink Fitness studio provides&nbsp;brand new alternate fitness routines that are a refreshing break from age old fitness routines.</p><p>&nbsp;</p>', 'Fitness and Sports', '["Gym","Yoga","Aerobics"]', '["Gurgaon"]', '<p><!--[if !supportLists]--></p><p>Get 12 Sessions at Rs. 2500/-</p><p>Get 20 Sessions at Rs. 3800/-</p><p>On&nbsp;Zumba Fitness,&nbsp;Aerobics classes,&nbsp;Masala Bhangra Workout,&nbsp;Zumba Sentao,&nbsp;Aqua Zumba,&nbsp;Yoga ,Bolly Blast .&nbsp;Boot Camp</p><p>On Dance Classes :&nbsp;Salsa, Hip Hop&nbsp; , Latin , Belly Dance&nbsp;</p>', 'Delhi NCR', '[]', '""', '2015-10-01', '2016-03-31', '{"Image1":"\\/assets\\/uploads\\/zink.jpg","Image2":"\\/assets\\/uploads\\/1.jpg","Image3":"","Image4":"","Image5":""}', 1, 1, 4, 1, 0),
(38, 'Raymond sale', 'Raymond', '<p>Raymond Group is one of India&#39;s largest branded fabric and fashion retailer</p>', 'Apparels', '["Men Wear"]', '["North Delhi"]', '<p>Raymond Sale</p><p>Wedding &amp; Formal Collection</p><p>Pure Cotton, Linen, Silk, Wool &amp; blended fabrics for Mens,&nbsp; Womens and kids wear</p><p>(Extra fine Exports &amp; Surplus stock in short lengths below 6 mtrs.)</p><p>For Shirts, Trousers Jackets, Suits &amp; Ethnic Wear</p><p>Also</p><p>Readymades</p><p>SUIT, BLAZER, SHIRT, TROUSER, T-SHIRT</p><p>ARROW, Raymond, Park Avenue Louis Philippe</p><p>&nbsp;</p>', 'Delhi NCR', '[]', '""', '0000-00-00', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/raymond.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 0, 1, 0, 0, 0);
INSERT INTO `deals` (`id`, `title`, `brand`, `brand_details`, `category`, `subcategory`, `city`, `details`, `region`, `locations`, `malls`, `start_date`, `end_date`, `images`, `active`, `authorized`, `merchant_id`, `added_by_merchant`, `coupons`) VALUES
(39, 'Life Fit Gym', 'Life Fit Gym', '<p>Life Fit Gym is Fitness centres situated in Sec - 49 Noida and provides complete solutions for&nbsp;Gym ,Yoga and Aerobics.</p>', 'Fitness and Sports', '["Gym","Yoga","Aerobics"]', '["Noida"]', '<p>Only pay Rs. 12000 /- for yearly membership instead of Rs. 15000/-</p><p>Get Rs.3000 Off on Yeraly membership&nbsp;</p><p>Extra Flat 10 % off only for DiscountsDekho Members</p>', 'Delhi NCR', '["6","sada","sdsa","asdsadasd"]', '""', '2015-10-31', '2015-11-15', '{"Image1":"\\/assets\\/uploads\\/life_fit_-1.PNG","Image2":"\\/assets\\/uploads\\/life_fit_2.PNG","Image3":"\\/assets\\/uploads\\/life_fit_3.PNG","Image4":"\\/assets\\/uploads\\/life_fit_4.PNG","Image5":"\\/assets\\/uploads\\/life_fit_5.PNG"}', 1, 1, 2, 1, 1),
(43, 'Arrow Sale', 'Arrow', '<p>Arrow is fashion leader in men&#39;s apparel</p>', 'Apparels', '["Men Wear"]', '["East Delhi"]', '<p><strong>Buy merchandise worth Rs.5999 &amp; get merchandise worth Rs.1000 free*</strong></p>', 'Delhi NCR', '["<strong>Arrow, West Gate Mall, Rajouri Garden,Rajouri Garden&nbsp;Ph :&nbsp;42225867<\\/strong>","<strong>Arrow, Ground Floor, West Ring Road, South Ex.I,&nbsp;&nbsp;Ph:41646576<\\/strong>","<strong>Arrow, 40, UB, Jawahar Nagar, Kamla Nagar,Kamla Nagar&nbsp;Ph :&nbsp;41530212<\\/strong>","<strong>Arrow, Ambi Mall, Gurgaon,&nbsp;Gurgaon&nbsp;Ph :&nbsp;4029024<\\/strong>","<strong>Arrow, MGF Metropolitan Mall, Gurgaon,Gurgaon&nbsp;&nbsp;Ph :&nbsp;4045040<\\/strong>"]', '["West Gate Mall, Rajouri Garden, Delhi, Ph:011 4564 2259","West Gate Mall, Rajouri Garden, New Delhi, Ph:011 4564 2259","Ambience Mall,  Ambience Island,National Highway 8, Gurgaon , Ph : 012","MGF Metropolitan, M.G. Road, Gurgoan, Ph:+91 124 401 4606"]', '2015-11-03', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/arrow.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(44, 'INALSA HOME APPLIANCES Diwali Offer', 'INALSA HOME APPLIANCES', '<p>INALSA has always been the first choice of Indian customers for small home appliances</p>', 'Home and Living', '["Home Appliances"]', '["North Delhi"]', '<p>Buy ABS/Metal Body Water Heater Available in 10 , 15 and 25 Ltr Free Electric Iron Just Rs. 995/-</p>', 'Delhi NCR', '[]', '""', '2015-11-04', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/inalsa1_(1).jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(46, ' Mothercare Flat 50 to 90% OFF.', 'MotherCare', '<p><strong>Mothercare&nbsp;is a specialist retailer of products for mothers-to-be, babies and children up to the age of eight</strong></p>', 'Apparels', '["Kids Wear"]', '["Gurgaon"]', '<p>Make the most of our festive attraction the &lsquo; GRAND BABY FAIR&rsquo; Flat 50 to 90% OFF.</p><p>Rush to the Mothercare store at Ambience Mall , Gurgaon Now !</p>', 'Delhi NCR', '[]', '["Ambience Mall,  Ambience Island,National Highway 8, Gurgaon , Ph : 012"]', '2015-11-06', '2015-11-08', '{"Image1":"\\/assets\\/uploads\\/mothercare.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(47, 'Dkny Flat 40% Off At dlf place saket', 'DKNY', '<p>DKNY is a New York-based fashion house specializing in fashion goods for men and women.</p>', 'Apparels', '["Men Wear","Women Wear"]', '["South Delhi"]', '<p>Celebrate this Diwali season with Flat 40% off</p><p>Shop for Rs 9000 Get Gift Voucher worth Rs. 3000</p><p>Shop for Rs 17000 Get Gift Voucher worth Rs. 5000</p><p>Shop for Rs 25000 Get Gift Voucher worth Rs. 7000</p>', 'Delhi NCR', '[]', '["DLF Place Mall \\u2013 Saket ,  A 4, District Center, Press Enclave Road, De"]', '2015-11-06', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/dkny_(1).jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(48, 'Spar Hypermarket Diwali Offers', 'Spar Hypermarket ', '<p>SPAR is the world&#39;s largest food store chain</p>', 'Miscellaneous', '["Others"]', '["West Delhi","Ghaziabad","Gurgaon"]', '<p>Spar Hypermarket Presents Sparkle India</p><p>Diwali Special Now in Stores</p><p>Get Discounts on Everything.</p>', 'Delhi NCR', '["Pacific Mall, Tagore Garden,&nbsp;Metro Pillar No 464,&nbsp;Najafgarh Road&nbsp;,&nbsp;Delhi &ndash; 110018&nbsp;,&nbsp;Phone: 91-11-45390600","M G F Metropolis Mall,Lower Ground Floor, Near M G Road,&nbsp;Metro Station, Sector 28&nbsp;Gurgaon &ndash; 122022&nbsp;Phone: 91-124-2388420","World Square Mall, No.160, Katori Mills, Mohan Nagar Crossing, G T Road, Ghaziabad &ndash; 201004 , Phone: 91-120-2657626","Gaur Central, Plot No A1 to A4 ,Raj Nagar District Centre (RDC), Ghaziabad &ndash; 201001 , Phone: 91-120-2824992"]', '["Pacific Mall, Subhash Nagar, Delhi, Ph:+(91)-11-40903000","MGF Metropolitan, M.G. Road, Gurgoan, Ph:+91 124 401 4606"]', '2015-11-06', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/sparhypermarket.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(49, 'Gym at only Rs. 400 per month', 'The Muscle Rock Gym', '<p>The Muscle Rock Gym perfect place for gym in Adarsh Nagar , New Delhi</p>', 'Fitness and Sports', '["Gym"]', '["North Delhi"]', '<p>Gym at only Rs. 400 per month including entry fee</p><p>Pay only Rs. 1000/- for three months</p><p>&nbsp;</p>', 'Delhi NCR', '[]', '""', '2015-11-01', '2016-03-31', '{"Image1":"\\/assets\\/uploads\\/musckle_fit.PNG","Image2":"\\/assets\\/uploads\\/muscle_fit_gyms.PNG","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(50, 'Free gifts for DD customers', 'Fitness Pulse', '<p>Fitness Pulse is complete solution for fitness in sarita Vihar.New Delhi</p>', 'Fitness and Sports', '["Gym"]', '["East Delhi"]', '<p>Free Gym Bag , sipper and towel on 3 months registartion&nbsp;for DiscountsDekho Customers.</p><p>Monthly Fee : Rs. 1000/-</p><p>Quarterly Fee (3 months): Rs. 2500/-</p><p>Copule Entry (for 3 months):&nbsp;&nbsp;Rs.4500/-</p>', 'Delhi NCR', '[]', '""', '2015-11-01', '2016-03-31', '{"Image1":"\\/assets\\/uploads\\/gym-6.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(51, 'Extra 5 % for DiscountsDekho Customers', 'Energy The Gym', '<p>Energy The Gym is perfect Place for all your Gym needs near Safdarjung Enclave , New Delhi</p>', 'Fitness and Sports', '["Gym"]', '["South Delhi"]', '<p>Extra 5 % discounts only for DiscountsDekho Customers</p><p>Monthly Fee Only Rs. 1200 (Rs. 1000/- without Cardio)</p><p>Quarterly Fee (3 months) Only Rs. 3300/- (Extra Rs. 300 off)</p><p>Half Yearly (6 months) Fee Only Rs. 6000/- (Extra Rs.1200 off&nbsp;)</p>', 'Delhi NCR', '["Next To B-2\\/1, Street No 7, Safdarjung Enclave, Extention, Krishna Nagar, Delhi - 110029 Ph : 9811366621"]', '""', '2015-11-01', '2016-03-31', '{"Image1":"\\/assets\\/uploads\\/o-WORKING-OUT-GYM-facebook.jpg","Image2":"\\/assets\\/uploads\\/hull-gym-weights.jpg","Image3":"\\/assets\\/uploads\\/energy_the_gym.jpg","Image4":"\\/assets\\/uploads\\/energy_the_gym-1.jpg","Image5":""}', 1, 1, 0, 0, 0),
(52, 'Extra 10% off for DiscountsDekho Customers', 'Gym Plex', '<p>Gym Plex is complete solutions for your gym needs in Rohini , New Delhi</p>', 'Fitness and Sports', '["Gym"]', '["North Delhi"]', '<p>Extra 10 % off for DiscountsDekho Customers</p><p>Monthly Fee Rs. 1500 and &nbsp;Rs. 999 only for Girls</p><p>Quartetly Fee (3 months) : Rs. 3000/-</p><p>&nbsp;</p>', 'Delhi NCR', '[]', '""', '2015-11-01', '2015-11-20', '{"Image1":"\\/assets\\/uploads\\/Gym-Plex.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(53, 'Extra 5 % for DiscountsDekho Customers', 'Tatto Empire India', '<p>Tattoo Empire India was established to satisfy the ever growing need and much deserved demand of tattoo artist&rsquo;s /studios everywhere, providing them with a one stop comprehensive solutions brand for quality instruments and supplies in their creations with indelible ink.</p>', 'Beauty and Grooming', '["Tattoo"]', '["East Delhi"]', '<p>Extra 5% off for DD Customers</p><p>Rs. 1000 /- only for first square inch and Rs. 500 only for every new added inch.</p>', 'Delhi NCR', '["<p>Plot No.32\\/4 Dilshad Garden Indl. Area,&nbsp;Behind HP Petrol Pump,Delhi - 110095 (INDIA).&nbsp;Phone : +91-11-22116547Mobile : +91-9555522889,&nbsp;9311122889<\\/p>"]', '""', '2015-11-01', '2015-11-26', '{"Image1":"\\/assets\\/uploads\\/tatto_india.jpg","Image2":"\\/assets\\/uploads\\/tatto_india1.jpg","Image3":"\\/assets\\/uploads\\/butterfly_1_.jpg","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(54, 'Flat 50 % off on beauty Packages', 'Surmai Beauty Parlour', '<p>Surmai beauty Parlour is one stop solutions for your beauty needs.</p>', 'Beauty and Grooming', '["Salon"]', '["North Delhi"]', '<p>1. Flat 50% off</p><p>&nbsp;&nbsp;Rs.2000/- services only for Rs.1000/-</p><p>Choclate Facial , Facial Bleach , full arms waxing and half leg Waxing</p><p>2.Flat 40% off&nbsp;</p><p>Rs. 2000/- services only for Rs. 1200/-</p><p>Gold facial ,&nbsp;Facial Bleach . full arms waxing ,&nbsp;full leg waxing and threading.</p>', 'Delhi NCR', '["68, Shakti Vihar Apartment, 2nd Floor,&nbsp;Pitampura,&nbsp;Delhi-&nbsp;110034 Ph :&nbsp;09811717484"]', '""', '2015-11-15', '2015-12-31', '{"Image1":"\\/assets\\/uploads\\/surmai.PNG","Image2":"\\/assets\\/uploads\\/surmai1.PNG","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(55, 'Get Upto 40% off', 'Nisha Ladies Beauty Parlour', '<p>Nisha Ladies Beauty parlour offers beauty services for women only.</p>', 'Beauty and Grooming', '["Salon"]', '["North Delhi"]', '<p>1. Flat Rs.300&nbsp;off</p><p>&nbsp;&nbsp;Rs.800/- services only for Rs.500/-</p><p>Facial , Facial Bleach , Pedicure ,&nbsp;full arms waxing and half leg Waxing</p><p>2.Flat Rs. 500&nbsp;off&nbsp;</p><p>Rs. 1500/- services only for Rs. 1000/-</p><p>Gold facial ,&nbsp;Facial Bleach . Manicure and Pedicure</p>', 'Delhi NCR', '["Nisha Ladies Beauty Parlour , 3570,&nbsp;Darya Ganj,&nbsp;Delhi-&nbsp;110002 Ph : 9811965530"]', '""', '2015-11-15', '2015-12-31', '{"Image1":"\\/assets\\/uploads\\/make-manicure-pedicure-last-longer-with-vinegar.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(57, 'Raymond Sale Wedding & Formal Collection', 'Raymond', '<p>?Raymond offers a wide range on Shirts, Trousers, Jackets, Suits and&nbsp;ethnic wear.</p><p>&nbsp;</p>', 'Apparels', '["Men Wear","Women Wear","Kids Wear"]', '["North Delhi","South Delhi","East Delhi","Central Delhi","Noida"]', '<p>Sale on Pure cotton, Linen , Silk, Wool &amp; Blended Fabrics for mens, womens and kids wear</p><p>Extra Fine Exports, Surplus stock in Short lenghts below 6 trs</p><p>For Shirts, Trousers, Jackets, Suits, ethnic wear</p>', 'Delhi NCR', '["Raymond, Garwal Bhawan, Opp. Metro Pillar 44, Punchkuian Road (Near Jhandewaian, Gole Chikkar), New Delhi","Raymond, A-5, Near Richi Rich Banquet, Wazipur (Opp. Shalimar Bagh), New Delhi","&nbsp;Raymond, E-366, Nirman vihar, Opp. V3S Mall, Vikas, Marg (Opp. Metro Pillar no. 65), New Delhi","&nbsp;Raymond, B1\\/2, Main Najafgarh Road (Opp. Metro Pillar No. 543), New Delhi","Raymond, Nirula&rsquo;s Sector-2, C-135 (Near Metro Station, Sector-15), Noida, UP","&nbsp;Raymond, 49, Main Ring Road, Adj. Haldi Ram (Near Moolchand Crossing), Lajpat Nagar , New Delhi."]', '""', '2015-11-18', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/raymondsale1.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0),
(58, 'WInterSale on Branded Garments & Shoes', 'Various Brands', '<p>Get a wide range of products o various brands during the WinterSale.</p>', 'Apparels', '["Men Wear","Women Wear","Kids Wear"]', '["East Delhi"]', '<p>Exclusive Counter of winterwear sweaters , swed Shirts, Jackets Etc</p><p>Branded Ladies &amp; KidsTops starting at&nbsp;Rs. 150</p><p>Branded Men&rsquo;s Tshirts and Jackets starting at&nbsp;Rs. 250</p>', 'Delhi NCR', '["Himachal Bhawan, 27, Sikandra Road, Near Mandi house, New Delhi","Amitabh Banquet Hall, E 23, Banglow road, Kamla Nagar, New Delhi-110007"]', '""', '2015-11-18', '0000-00-00', '{"Image1":"\\/assets\\/uploads\\/brandedgarmentssale.jpg","Image2":"","Image3":"","Image4":"","Image5":""}', 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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
(18, 'How do I contact Discountsdekho.com for any questions or suggestions?', 'Email us at contact@discountsdekho.com with any questions or suggestions.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE IF NOT EXISTS `merchant` (
  `merchant_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `region` varchar(30) NOT NULL,
  PRIMARY KEY (`merchant_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`merchant_id`, `name`, `email`, `password`, `contact`, `region`) VALUES
(1, 'Business', 'a@a.com', '123', 7503705892, 'Delhi NCR'),
(2, 'my business', 'contact@discountsdekho.com', 'rogeriloveu', 9990336466, 'Delhi NCR'),
(3, 'Shape Perfect Fitness', 'dynamicsheetal70@gmail.com', 'rogeriloveu', 9990336466, 'Delhi NCR'),
(4, 'Zink Fitness Studio', 'karan@zinkfitness.com', 'zinkfitness', 9990336466, 'Delhi NCR'),
(5, 'ajbusiness', 'ajai.sreyas@gmail.com', 'Hephaestus1#', 9961976456, 'Delhi NCR'),
(6, 'any One', 'sheetal.arora@gmail.com', 'rogerhaina', 9990336466, 'Delhi NCR'),
(7, 'test', 'v.nikhil323@gmail.com', 'india', 7503705892, 'Delhi NCR'),
(8, 'mail_test', 'vrmanikhil@gmail.com', 'india', 9953017515, 'Pune'),
(9, 'Tb', 'amit.tanwar8524@gmail.com', 'amit123', 9998545745, 'Delhi NCR'),
(10, 'Energy the gym', 'sheetal.dynamic@gmail.com', 'energythegym', 9988556633, 'Delhi NCR');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'sd\r\n'),
(2, 'SAADADS@gmail.com'),
(3, 'souradeeproy@gmail.com'),
(4, 'dynamicsheetal70@gmail.com'),
(5, 'contact@discountsdekho.com'),
(6, 'vishalgaloth@gmail.com'),
(7, 'a@a.com'),
(8, 'a@a.com'),
(9, 'hi@hi.com'),
(10, ''),
(11, 'ankitarora007@gmail.com'),
(12, 'vishalgaloth@gmail.com'),
(13, 'vrmanikhil@gmail.com'),
(14, 'test@tester.com'),
(15, 'test@tester.com'),
(16, 'vrmanikhil@gmail.com'),
(17, 'vrmanikhil@gmail.com'),
(18, 'vrmanikhil@gmail.com'),
(19, 'infinitegarg@gmail.com'),
(20, ''),
(21, 'dynamicsheetal70@gmail.com'),
(22, 'sunnyarora007@gmail.com'),
(23, 'ankitarora007@gmail.com'),
(24, 'ankitarora007@gmail.com'),
(25, 'ankitarora007@gmail.com'),
(26, 'dynamicsheetal70@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(200) NOT NULL,
  `areas` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region`, `areas`) VALUES
(1, 'Delhi NCR', '["North Delhi","South Delhi","East Delhi","West Delhi","Central Delhi","Noida","Greater Noida","Ghaziabad","Gurgaon"]');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `review` text NOT NULL,
  `user_id` int(3) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `deal_id` int(3) NOT NULL,
  `approval` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_dealsReview` (`deal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `category` varchar(75) NOT NULL,
  `subcategory` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

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
(10, 'Beauty and Grooming', 'Laser Clinics'),
(11, 'Fitness and Sports', 'Gym'),
(12, 'Fitness and Sports', 'Yoga'),
(13, 'Fitness and Sports', 'Aerobics'),
(14, 'Fitness and Sports', 'Sports Coaching Classes'),
(17, 'Home and Living', 'Kitchen'),
(18, 'Miscellaneous', 'Dance Classes'),
(19, 'Miscellaneous', 'Music Classes'),
(20, 'Miscellaneous', 'Food'),
(21, 'Miscellaneous', 'Footwear'),
(22, 'Miscellaneous', 'Grocery'),
(25, 'Home and Living', 'Home Appliances'),
(26, 'Miscellaneous', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `testimonial` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `testimonial`) VALUES
(6, 'Shruti', 'My friend told me about discountsdekho and i was looking for a party dress . I checked the website and it showed a deal on trendy divaa and i went at gurgaon outlet and bought the dress at amazing price. Thanks Discountsdekho !!'),
(7, 'Rashmi', 'Truly Its an amazing idea " Shopping se Pehle Discounts Dekho "');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE IF NOT EXISTS `userdb` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `sex` varchar(60) NOT NULL,
  `city` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`id`, `name`, `email`, `mobile`, `dob`, `sex`, `city`, `password`) VALUES
(1, 'AVDHESH VARSHNEY', 'a.varshney1987@gmail.com', 9999019838, '1987-09-19', 'Male', 'delhi', 'hello'),
(3, 'sheets', 'abc@gmail.com', 9966332255, '2015-04-02', 'Male', 'delhi', 'hello'),
(5, 'agam jain', 'agam13@gmail.com', 8587081142, '1995-05-13', 'Male', 'delhi', 'hello'),
(6, 'Sheetal Arora', 'dynamicsheetal70@gmail.com', 9971082333, '2015-04-17', 'Female', 'new delhi', 'hello'),
(7, 'Nikhil Verma', 'jswal.sakhi@gmail.com', 9044509199, '1993-03-30', 'Male', 'Lucknow', 'hello'),
(8, 'Nikhil Verma', 'v.nikhil323@gmail.com', 9953017515, '2015-09-30', 'Male', 'Lucknow', 'pc'),
(9, 'Raj', 'rajhalavadiya123@gmail.com', 9925987488, '9925987488', 'Male', 'morbi', 'hello'),
(10, 'sasha', 'sheetal.dynamic@gmail.com', 99900099977, '2015-02-01', 'Male', 'delhi', 'hello'),
(12, 'Vishal', 'vishalgaloth@gmail.com', 9971702320, '1996-02-14', 'Male', 'new delhi', 'hello'),
(13, 'Sajni Beauty Parlour', 'contact@discountsdekho.com', 9971082333, '2015-10-03', 'Male', 'New Delhi', 'rogeriloveu'),
(16, 'rashi', 'rashi.shroff@gmail.com', 8586013959, '1992-06-11', 'Female', 'delhi', 'Rashi123'),
(17, 'Nikhil Aneja', 'aneja.nikhil@gmail.com', 9990288388, '', '', '', ''),
(18, 'ajai', 'ajai.sreyas@gmail.com', 9961976456, '1989-08-14', 'Male', 'kochi', 'ajai'),
(19, 'Siddheshwar Verma', 'siddheshwar7@gmail.com', 0, '', '', '', ''),
(20, 'Sunita Verma', 'sunita3629@gmail.com', 0, '', '', '', ''),
(21, 'Kasvi Pradhan', 'kasvipradhan@gmail.com', 0, '', '', '', ''),
(27, 'Prashant Chaudhary', 'prashantp099@gmail.com', 0, '', '', '', ''),
(28, 'Nikhil Verma', 'n.verma3629@gmail.com', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_coupons`
--

CREATE TABLE IF NOT EXISTS `user_coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon_code` varchar(100) NOT NULL,
  `redeem` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_coupons` (`coupon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_coupons`
--

INSERT INTO `user_coupons` (`id`, `user_id`, `coupon_id`, `coupon_code`, `redeem`) VALUES
(1, 13, 10, 'SPF001', 0),
(2, 14, 10, 'SPF001', 0),
(3, 18, 11, '', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `fk_deals` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_dealsReview` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_coupons`
--
ALTER TABLE `user_coupons`
  ADD CONSTRAINT `fk_coupons` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
