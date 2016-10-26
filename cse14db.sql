-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2016 at 10:11 AM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cse14db`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks_table`
--

CREATE TABLE IF NOT EXISTS `marks_table` (
  `mark_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  PRIMARY KEY (`mark_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `marks_table`
--

INSERT INTO `marks_table` (`mark_id`, `user_id`, `total_marks`) VALUES
(1, 5, 85),
(3, 7, 160);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `user_role`, `name`, `emailid`, `password`) VALUES
(1, 'student', 'Hasan', 'h@g', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'student', 'Hashu', 'hashu@gmail.com', '2510c39011c5be704182423e3a695e91'),
(3, 'student', 'Hasan', 'hasan@gmail.com', '2510c39011c5be704182423e3a695e91'),
(4, 'student', 'Rafi', 'rafi@gmail.com', '4b43b0aee35624cd95b910189b3dc231'),
(5, 'student', 'Erina', 'erina@gmail.com', 'e1671797c52e15f763380b45e841ec32'),
(6, 'teacher', 'Tarik', 'tarik@gmail.com', 'e358efa489f58062f10dd7316b65649e'),
(7, 'student', 'Mahi', 'mahi@gmail.com', '6f8f57715090da2632453988d9a1501b'),
(8, 'teacher', 'Rahi', 'rahi@gmail.com', '4b43b0aee35624cd95b910189b3dc231');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks_table`
--
ALTER TABLE `marks_table`
  ADD CONSTRAINT `marks_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
