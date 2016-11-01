-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2016 at 04:25 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fit&fab`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `name` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `bmi` float NOT NULL,
  `bf` float NOT NULL,
  `fatw` float NOT NULL,
  `leanw` float NOT NULL,
  `bmr` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `email`, `bmi`, `bf`, `fatw`, `leanw`, `bmr`) VALUES
('kiran', 'kiran@gmail.com', 30.8185, 20.7822, 15.5867, 59.4133, 1876.1),
('navya', 'navya@gmail.com', 22.4323, 21.5188, 12.0505, 43.9495, 1484.4);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `neck` int(5) NOT NULL,
  `waist` int(5) NOT NULL,
  `hip` int(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `gender`, `dob`, `age`, `height`, `weight`, `neck`, `waist`, `hip`, `email`, `password`) VALUES
('kiran', 'male', '1961-05-28', 0, 156, 75, 34, 98, 64, 'kiran@gmail.com', 'kiran'),
('navya', 'female', '1993-07-05', 22, 158, 56, 30, 70, 82, 'navya@gmail.com', 'navya');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(40) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `pass`) VALUES
('kiran@gmail.com', 'kiran'),
('navya@gmail.com', 'navya');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
