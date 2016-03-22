-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 03:09 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--
CREATE DATABASE IF NOT EXISTS `food` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `food`;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `price` varchar(5) NOT NULL,
  `type` varchar(20) NOT NULL,
  `availability` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `item_name`, `price`, `type`, `availability`) VALUES
(1, 'Samosa', '15', 'snacks', 'yes'),
(2, 'Chats', '30', 'Snacks', 'yes'),
(3, 'Sandwich', '40', 'snacks', 'yes'),
(4, 'Vadapav', '30', 'Snacks', 'yes'),
(5, 'Paneer Roll', '40', 'Rolls', 'no'),
(6, 'Veg Roll', '40', 'Rolls', 'no'),
(7, 'Chicken Roll', '80', 'Rolls', 'yes'),
(8, 'Egg roll', '60', 'Rolls', 'yes'),
(9, 'Black Forest', '120', 'Desserts', 'yes'),
(10, 'Truffle', '120', 'Desserts', 'yes'),
(11, 'Noughat', '120', 'Desserts', 'no'),
(12, 'Fruit Salad with Ice cream', '70', 'Desserts', 'yes'),
(13, 'Choco Lava', '60', 'Desserts', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `cuisine` varchar(40) NOT NULL,
  `cover_img` varchar(100) NOT NULL,
  `rating` float NOT NULL,
  `logo_img` varchar(100) NOT NULL,
  `up_vote` int(5) NOT NULL,
  `down_vote` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cover_img` (`cover_img`,`logo_img`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `address`, `city`, `area`, `cuisine`, `cover_img`, `rating`, `logo_img`, `up_vote`, `down_vote`) VALUES
(1, 'Ramya The Daba', '204, Tavarekare Main Road, Tavarekare', 'Bangalore', 'Tavarekare', 'South Indian', '1.jpg', 9.4, 'logo1.jpg', 10, 4),
(2, 'Goli Vada Pav', 'Near Christ University, Hosur Main Road, Adugodi, Bengaluru, Karnataka 560029', 'Bangalore', 'Hosur road', 'Quick Bites', '', 0, '', 0, 0),
(10, 'Mast Kalandhar', 'Krishna Nagar Industrial Layout,Hosur Road, Near Christ College, Chikku Lakshmaiah Layout, Bengaluru', 'Bangalore', 'Hosur road', 'Indian', '12.jpg', 0, '', 0, 0),
(12, 'Chai Point', 'SG Palya Main Rd, Venkateshwara Layout, Sadduguntepalya, Bengaluru, Karnataka 560029', 'Bangalore', 'Hosur road', 'Quick Bites', '13.jpg', 8, '', 0, 0),
(13, 'Eat and Drink', '31/8, Christ School Road, Bhavani Nagar, Sadduguntepalya, Bengaluru, Karnataka 560029', 'Bangalore', 'S.G Palya', 'Quick Bites', '14.jpg', 4.3, '', 0, 0),
(14, 'Kannur Food Point', 'S.G.Palya Main Road, Shop No : 5/21, 10th Cross, 1st Main S.G. Palya, DRC Post, 9th Cross Rd, Venkat', 'Bangalore', 'S.G Palya', 'Kerala', '15.jpg', 6.3, '', 0, 0),
(15, 'Green Chillyz', 'Tavarekere Main Road, Near Forum Mall, Opp Oracle Building, Koramangala, Bengaluru, Karnataka 560029', 'Bangalore', 'Tavarekere', 'Indian', '16.jpg', 2, '', 0, 0),
(16, 'Tibetan Mothers Kitchen', 'No:#404, 1st C Main Rd, 7th Block, Koramangala 7th Block, Koramangala, Bengaluru, Karnataka 560095', 'Bangalore', 'Koramangala', 'Tibetan', '17.jpg', 7.2, '', 0, 0),
(17, 'Meat & Eat', 'Someshwara Temple Rd, Koramangala 7th Block, Koramangala, Bengaluru, Karnataka 560095', 'Bangalore', 'Koramangala 7th Block', 'Quick Bites', '18.jpg', 6.1, '', 0, 0),
(18, 'Chaat Wala', ' No. Near Blue Petal Hotel,, 59, Jyoti Nivas College Rd, 5th Block, Koramangala, Bengaluru, Karnatak', 'Bangalore', 'Koramangala 5th Block', 'Quick Bites', '7.jpg', 2.4, '', 0, 0),
(19, 'Tasty Bites', 'Hosur Main Road, Chikku Lakshmaiah Layout, Adugodi, Bengaluru, Karnataka 560029', 'Bangalore', 'C.L Layout', 'Quick Bites', '4.jpg', 4.1, '', 0, 0),
(20, 'Faaso''s', '125, Jyoti Nivas College Road, Koramangala 5th Block, Koramangala Industrial Layout, Bengaluru, Karn', 'Bangalore', 'S.G Palya', 'Quick Bites', '74.jpg', 4, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `review` text NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rating` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `restaurant_id`, `user_id`, `review`, `added`, `rating`) VALUES
(1, 1, 1, 'RATED Went there for an office outing...dinner it was! Tough choice it was to choose from an array of restaurants in the church street lane...but we finally zeroed on this one....and we weren''t disappointed to say the least. The menu was baffling. The guys and ladies there were quite courteous and prompt. Had paneer pops..chicken spicy meatballs.. Chicken lasagne..blueberry cheesecake. Will surely recommend this one for a pocket friendly hangout place. Will visit again.. Keep up the good work!', '2016-02-17 10:54:18', 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `user_img` varchar(30) NOT NULL,
  `cover_img` varchar(30) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`user_img`,`cover_img`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `area`, `city`, `user_img`, `cover_img`, `added`) VALUES
(1, 'Ramya Reddy', 'ramya@gmail.com', 'admin', 2147483647, 'D-43, Supermart, Yogi nagar', 'SP Raod', 'Bangalore', '1.jpg', '1.jpg', '2016-03-03 08:50:08'),
(2, 'Ram Sharma', 'XXXXXXXXXXXXXX', 'XXXXXXXXXXXX', 11111111, 'XXXXXXXXXXXXXX', 'XXXXXXXXXXXX', 'XXXXXXX', 'XXX', 'XXX', '2016-03-03 09:34:45'),
(3, 'Ajun asdasd', 'asd@asdas.com', 'admin', 12321, '', '', 'asdas', 'no-pic.jpg', 'cover.jpg', '2016-03-03 09:47:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
