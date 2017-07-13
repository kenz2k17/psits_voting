-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2014 at 06:08 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `year_level`, `gender`, `img`) VALUES
(29, 'President', 'ARvin', 'Arandilla', '3rd Year', 'Male', 'upload/Koala.jpg'),
(30, 'President', 'Kim', 'Drilon', '3rd Year', 'Male', 'upload/Penguins.jpg'),
(31, 'Vice President for Internal Affairs', 'Kimzey ', 'Pamatian', '3rd Year', 'Female', 'upload/Tulips.jpg'),
(32, 'Vice President for Internal Affairs', 'Ayssa Marie', 'David', '3rd Year', 'Male', 'upload/Hydrangeas.jpg'),
(33, 'Vice President for External Affairs', 'Billy Ray', 'Bebit', '2nd Year', 'Male', 'upload/11.jpg'),
(34, 'Vice President for External Affairs', 'Anjo ', 'Salmingp', '3rd Year', 'Male', 'upload/12.jpg'),
(35, 'Secretary', 'Shaira', 'Gaston', '3rd Year', 'Female', 'upload/68.jpg'),
(36, 'Secretary', 'Sandra', 'Gomez', '3rd Year', 'Male', 'upload/33.jpg'),
(37, 'Auditor', 'Maica joker', 'Belarmino', '3rd Year', 'Female', 'upload/2012-07-22 13.47.51.jpg'),
(38, 'Auditor', 'Jessie', 'Mendiolla', '3rd Year', 'Male', 'upload/b2.jpg'),
(39, 'Treasurer', 'Jhonalyn', 'Montero', '3rd Year', 'Female', 'upload/a.jpg'),
(40, 'Treasurer', 'Kenneth', 'Aboy', '3rd Year', 'Male', 'upload/d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'Kenneth', 'Aboy');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `voters_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  PRIMARY KEY (`voters_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voters_id`, `id_number`, `password`, `firstname`, `lastname`, `year_level`, `status`, `account`) VALUES
(1, 21200000, 'kdzcjioasjdio', 'Kim', 'Drilon', '3rd Year', 'Unvoted', 'Active'),
(3, 21200000, 'kdzcjioasjdio', 'Kim', 'Drilon', '3rd Year', 'Unvoted', 'Active');
