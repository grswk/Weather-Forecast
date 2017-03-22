-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2015 at 09:47 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weather`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Jagmeet Singh', 'jagmeet787@gmail.com', 'Okey making some progress!'),
(2, 'Jagmeet Singh', 'jagmeet787@gmail.com', 'This is going to be awesome man!'),
(4, 'dujm', '', 'afjkahfjhasjkfhjkah'),
(5, 'dujm', '', 'afjkahfjhasjkfhjkah'),
(6, 'Jagmeet Singh', 'jagmeet787@', 'This is feed back man!'),
(7, 'Jagmeet Singh', 'jagmeet787@gmail.com', 'This is feed back man!'),
(8, 'darsh', 'darsh@io.com', 'This is feedback by darsh!'),
(9, 'sdf', 'amitojdemon@gmail.com', 'sjfdhjkshkjfhsakjhfkjsaz\r\n'),
(10, 'darsh', 'darsh@io.com', 'This is feedback by darsh! akjfhjkashfkj'),
(11, 'darsh', 'darsh@io.com', 'This is feedback by darsh! akjfhjkashfkj'),
(12, 'dujm', 'anmol9sandhu@gmail.com', 'this ');

-- --------------------------------------------------------

--
-- Table structure for table `prefs`
--

CREATE TABLE IF NOT EXISTS `prefs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `latlong` varchar(30) NOT NULL,
  `units` varchar(4) NOT NULL DEFAULT 'si',
  PRIMARY KEY (`id`),
  KEY `userID` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `prefs`
--

INSERT INTO `prefs` (`id`, `uid`, `latlong`, `units`) VALUES
(1, 1, 'lat 34', ''),
(2, 5, 'lat 442', ''),
(3, 6, 'lat234', ''),
(4, 1, 'lat 324', ''),
(5, 1, 'lat 43', ''),
(6, 1, 'lat 311', ''),
(7, 1, 'lat 43', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Jagmeet Singh', 'jagmeet787@gmail.com', '1231'),
(5, 'Navdeep Singh', 'navdeep300@gmail.com', '1231'),
(6, 'Gurpinder Singh', 'mpjatt12@gmail.com', '1231');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prefs`
--
ALTER TABLE `prefs`
  ADD CONSTRAINT `userID` FOREIGN KEY (`uid`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
