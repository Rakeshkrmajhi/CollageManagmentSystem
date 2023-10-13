-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2020 at 03:43 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `10th`
--

DROP TABLE IF EXISTS `10th`;
CREATE TABLE IF NOT EXISTS `10th` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `school` varchar(50) NOT NULL,
  `percentage` float NOT NULL,
  `grade` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `10th`
--

INSERT INTO `10th` (`id`, `year`, `school`, `percentage`, `grade`) VALUES
(7, 2012, 'JABAGRAM M.K INSTITUTION', 70, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `12th`
--

DROP TABLE IF EXISTS `12th`;
CREATE TABLE IF NOT EXISTS `12th` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `school` varchar(50) NOT NULL,
  `percentage` float NOT NULL,
  `grade` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12th`
--

INSERT INTO `12th` (`id`, `year`, `school`, `percentage`, `grade`) VALUES
(7, 2017, 'dr. meghnad saha institute of  technology', 68.9, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Subhadeep Modak', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `btech`
--

DROP TABLE IF EXISTS `btech`;
CREATE TABLE IF NOT EXISTS `btech` (
  `id` int(11) NOT NULL,
  `sem1` float NOT NULL,
  `sem2` float NOT NULL,
  `sem3` float NOT NULL,
  `sem4` float NOT NULL,
  `sem5` float NOT NULL,
  `sem6` float NOT NULL,
  `sem7` float NOT NULL,
  `sem8` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `btech`
--

INSERT INTO `btech` (`id`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`) VALUES
(7, 7.7, 7.8, 8, 7.2, 7.1, 8.1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rollno` varchar(20) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `dept` varchar(3) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pcontact` varchar(15) NOT NULL,
  `year` year(4) NOT NULL,
  `image` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rollno` (`rollno`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `regno` (`regno`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `regno`, `name`, `email`, `dob`, `dept`, `address`, `pcontact`, `year`, `image`, `phone`, `father`, `mother`) VALUES
(7, '35000117003', '173500120015', 'Subhadeep Modak', 'subhadeepmodak00@gmail.com', '2019-09-02', 'CSE', 'burdwan', '9679938103', 2020, 'photo.jpeg', '8250866952', 'Haradhan Modak', 'Sumitra Modak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `is_confirmed` tinyint(2) NOT NULL,
  `token` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `10th`
--
ALTER TABLE `10th`
  ADD CONSTRAINT `10th_ibfk_1` FOREIGN KEY (`id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `12th`
--
ALTER TABLE `12th`
  ADD CONSTRAINT `12th_ibfk_1` FOREIGN KEY (`id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `btech`
--
ALTER TABLE `btech`
  ADD CONSTRAINT `btech_ibfk_1` FOREIGN KEY (`id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
