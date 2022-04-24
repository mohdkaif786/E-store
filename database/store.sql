-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 
-- Generation Time: Jul 30, 2020 at 03:46 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(7, 'Dell Pentium Quad Core', 28490),
(6, 'Dell Core i7 ', 250000),
(5, 'Dell Ryzen 5', 108990),
(4, 'Apple Core i5 (7th Gen) ', 189990),
(3, 'Apple Core i5 ', 115000),
(2, 'Apple Core i5 (6th Gen)', 179990),
(1, 'Apple Core i5 (5th Gen)', 91490),
(8, 'Dell Core i3 (7th Gen)', 32390),
(9, 'HP Celeron Dual Core', 24990),
(10, 'HP Pentium Quad Core', 34089),
(11, 'HP Core i5 (9th Gen)', 57782),
(12, 'HP Ryzen 3 Dual Core', 42990),
(13, 'Lenovo Pentium Quad Core', 27064),
(14, 'Lenovo Core i3 (6th Gen)', 33270),
(15, 'Lenovo Celeron Dual Core', 23999),
(16, 'Lenovo Core i3 (10th Gen)', 46250);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(40, 'sam', 'sam@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9915174990', 'lucknow', 'gomtinagar ,lucknow'),
(41, 'Atif', 'atif@gmail.com', '25f9e794323b453885f5181f1b624d0b', '9915174995', 'lucknow', 'alambagh ,lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(106, 41, 1, 'Confirmed'),
(105, 40, 7, 'Added to cart'),
(104, 40, 4, 'Confirmed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
