-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2019 at 02:55 AM
-- Server version: 5.5.61-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vrl`
--

-- --------------------------------------------------------

--
-- Table structure for table `isd`
--

CREATE TABLE IF NOT EXISTS `isd` (
  `seno` int(10) NOT NULL AUTO_INCREMENT,
  `cat` text NOT NULL,
  `sub` varchar(50) NOT NULL,
  `topic` text NOT NULL,
  `link` varchar(300) NOT NULL,
  `des` text NOT NULL,
  `file` varchar(50) NOT NULL,
  `sharing` varchar(10) NOT NULL,
  `edate` date NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`seno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `isd`
--

INSERT INTO `isd` (`seno`, `cat`, `sub`, `topic`, `link`, `des`, `file`, `sharing`, `edate`, `username`) VALUES
(45, 'c', 'program structure', 'program structure', 'https://www.techopedia.com/definition/13128/programming', 'Programming is the implementation of logic to facilitate specified computing operations and functionality. It occurs in one or more languages, which differ by application, domain and programming model. ', 'upload/programming.txt', 'public', '2019-02-08', ''),
(46, 'c++', 'syntax', 'sytax problem', 'efsedf', 'sdfsdf', 'upload/programming.txt', 'public', '2019-02-09', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
