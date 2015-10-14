-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2015 at 01:48 AM
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
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `audio_table`
--

INSERT INTO `audio_table` (`id`, `emailAddress`, `image`) VALUES
(1, 'goru@gnail.com', 'MyRecording.mp3'),
(2, 'aaa@gmail.com', 'aaa@gmail.comMyRecording.mp3'),
(3, 'rajesh@coderstrust.com', 'rajesh@coderstrust.comMyRecording.mp3'),
(4, 'rajesh@coderstrust.com', 'MyRecording (1).mp3');

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
  `audio` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `emailAddress`, `contact`, `gender`, `dbirth`, `address`, `question1`, `question2`, `question3`, `question4`, `question5`, `image`, `audio`) VALUES
(8, 'Rajesh', 'Ghosh', 'rajesh@coderstrust.com', '01714905039', 'Male', '1990-02-10', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'Those who are interested to participate in our Radio ', 'All Is Well (2015) 720p DesiSCR 999MB DeePaK.torrent', ''),
(9, 'Rajesh', 'Ghosh', 'rajeshghosh4007@gmail.com', '01714905039', 'Male', '1990-02-10', 'Azimpur,Dhaka', 'Those who are interested to participate in our Radio Foorti Rj Hunt Campaign, please fill out the following information.', 'Those who are interested to participate in our Radio Foorti Rj Hunt Campaign, please fill out the following information.', 'Those who are interested to participate in our Radio Foorti Rj Hunt Campaign, please fill out the following information.', 'Those who are interested to participate in our Radio Foorti Rj Hunt Campaign, please fill out the following information.', 'Those who are interested to participate in our Radio Foorti Rj Hunt Campaign, please fill out the following information.', 'BiddingCourseOutline.docx', ''),
(10, 'Goru', 'Chagol', 'goru@gnail.com', '01776694482', 'Female', '2015-10-01', '', 'Welcome to', 'Welcome to', 'Welcome to', 'Welcome to', 'grameenitsolution@gmail.com', 'thesis_paper.pdf', ''),
(11, 'aaa', 'bbb', 'aaa@gmail.com', '01776694482', 'Female', '1990-02-10', 'Welcome to Radio Foorti', 'Welcome', 'Welcome', 'Welcome', 'Welcome', 'Welcome', 'edu-exam-c-sample-quest.pdf', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
