-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 03, 2022 at 04:42 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phoneno` varchar(200) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `phoneno`, `adminname`) VALUES
(1, 'admin', 'admin123', '9239412412', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `id1` int(11) NOT NULL AUTO_INCREMENT,
  `from1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `to1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date1` date NOT NULL,
  `coachselection` text NOT NULL,
  `Pref_time` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id1`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id1`, `from1`, `to1`, `date1`, `coachselection`, `Pref_time`, `userid`) VALUES
(4, 'kolk', 'delhi', '2022-05-14', ' AC & AC SLEEPER & 1A UPPER BIRTH . ', '', 31),
(5, 'kolkata', 'delhi', '2022-05-21', ' AC & AC SEATER & WINDOW SIDE . ', '', 31),
(6, 'KOLKATA', 'DELHI', '2022-06-12', ' NON AC & NON AC SLEEPER & MIDDLE BIRTH.', '', 40),
(7, 'Howrah', 'Delhi', '2022-06-26', ' AC & AC SEATER & WINDOW SIDE . AC SLEEPER & 3A LOWER BIRTH . 1A CABIN . ', '06:00 Hrs - 08:59 Hrs', 40),
(8, 'RAJASTHAN', 'MADHYA PRADESH', '2022-06-18', ' AC & AC SEATER & WINDOW SIDE . ', '00:00 Hrs - 02:59 Hrs', 41),
(9, 'MAHARASHTRA', 'WEST BENGAL', '2022-06-28', ' AC & AC SLEEPER & 3A LOWER BIRTH . ', '18:00 Hrs - 20:59 Hrs', 41);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `Zip_code` varchar(200) NOT NULL,
  `phoneno` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `password`, `confirm_password`, `Zip_code`, `phoneno`) VALUES
(31, 'shib shankar', 'shib@gmail.com', '123', '123', '711302', '9239412412'),
(33, 'papai', 'papai@gmail.com', '567', '567', '711302', '9239412124'),
(34, 'papai', 'papai@gmail.com', '234', '234', '711302', '9874'),
(35, 'shibu', 'shibu@gmail.com', '789', '789', '711302', '7445'),
(36, 'shib', 'shib@gmail.com', '123', '123', '711022', '78'),
(37, 'pallab', 'pallab@gmail.com', '457', '457', '711302', '9854'),
(38, 'sayani', 'sayani@gmail.com', '565', '565', '711302', '12345'),
(39, 'sapta', 'sapta@gmail.com', '123456', '123456', '711302', '9874562311'),
(40, 'arnab', 'xyz@gmail.com', 'abc', 'abc', '711302', '9123879312'),
(41, 'Arnab Som', 'arnabrks@gmail.com', 'asd', 'asd', '711302', '9836642145');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

DROP TABLE IF EXISTS `train`;
CREATE TABLE IF NOT EXISTS `train` (
  `train_id` int(11) NOT NULL AUTO_INCREMENT,
  `Train_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DEPARTURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PRICE` text NOT NULL,
  `SELECTION` varchar(200) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `upload` varchar(200) NOT NULL,
  PRIMARY KEY (`train_id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_id`, `Train_Name`, `DEPARTURE`, `PRICE`, `SELECTION`, `customer_id`, `upload`) VALUES
(63, '124', '07:08', '1300', 'SELECTED', 7, ''),
(62, '123', '06:08', '1400', '', 7, ''),
(58, '78936', '18:09', '1300', '', 8, ''),
(59, '4506', '17:09', '110', '', 8, ''),
(60, '14789', '18:31', '1000', 'SELECTED', 9, ''),
(61, '12369', '19:20', '2000', '', 9, ''),
(70, '', '', '', '', 0, 'Inheritance.pdf'),
(69, '', '', '', '', 0, 'Number pattern.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
