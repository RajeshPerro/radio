-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2015 at 02:32 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foorti_rj`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio_table`
--

CREATE TABLE IF NOT EXISTS `audio_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailAddress` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `audio_table`
--

INSERT INTO `audio_table` (`id`, `emailAddress`, `image`) VALUES
(7, 'rajesh@coderstrust.com', 'rajesh@coderstrust.comrecording.mp3'),
(8, 'aaa@gmail.com', 'aaa@gmail.com_voice.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dbirth` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `question1` varchar(200) NOT NULL,
  `question2` varchar(200) NOT NULL,
  `question3` varchar(200) NOT NULL,
  `question4` varchar(200) NOT NULL,
  `question5` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `emailAddress`, `contact`, `gender`, `dbirth`, `address`, `question1`, `question2`, `question3`, `question4`, `question5`, `image`) VALUES
(8, 'Rajesh', 'Ghosh', 'rajesh@coderstrust.com', '01714905039', 'Male', '1990-02-10', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'All Is Well (2015) 720p DesiSCR 999MB DeePaK.torrent');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
