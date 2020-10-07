-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2015 at 07:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus booking system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(200) NOT NULL,
  `Lname` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Fname`, `Lname`, `Email`, `Username`, `Password`) VALUES
(1, 'Andrew', 'Shelton', 'shelton379iaf@gmail.com', 'sierra', 'd1051c4d4d2c9fff63cac2907ecc0c8c3881e603');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `Booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Bus_id` int(11) NOT NULL,
  `Seats_no` int(11) NOT NULL,
  `Total_fare` double NOT NULL,
  `Bank` varchar(200) NOT NULL,
  `Payment_method` varchar(200) NOT NULL,
  PRIMARY KEY (`Booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Origin` varchar(200) NOT NULL,
  `Destination` varchar(200) NOT NULL,
  `Seats` int(11) NOT NULL,
  `Arrival_time` time NOT NULL,
  `Departure_time` time NOT NULL,
  `Date` date NOT NULL,
  `Fare` double NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Id`, `Name`, `Origin`, `Destination`, `Seats`, `Arrival_time`, `Departure_time`, `Date`, `Fare`) VALUES
(1, '2017-9-10 travels', 'Pkr', 'Ktm', 8, '10:00:00', '16:00:00', '', 800),
(2, 'ABC travels', 'Pkr', 'Ktm', 18, '10:00:00', '16:00:00', '2015-10-17', 800),
(3, 'ABC travels', 'Pkr', 'Ktm', 22, '10:00:00', '16:00:00', '2015-10-18', 800),
(4, 'Sr travels', 'Pkr', 'Ktm', 11, '12:00:00', '19:00:00', '', 850),
(5, 'Sr travels', 'Pkr', 'Ktm', 12, '12:00:00', '19:00:00', '2015-10-17', 850),
(6, 'Sr travels', 'Pkr', 'Ktm', 20, '12:00:00', '19:00:00', '2015-10-18', 850),
(7, 'Rocky travels', 'Pkr', 'Ktm', 12, '14:00:00', '21:00:00', '2015-10-17', 900),
(8, 'Rocky travels', 'Pkr', 'Ktm', 16, '14:00:00', '21:00:00', '2015-10-18', 900),
(9, 'lolly travels', 'Pkr', 'Btl', 10, '09:00:00', '18:00:00', '2017-9-10', 1000),
(10, 'lolly travels', 'Pkr', 'Btl', 12, '09:00:00', '18:00:00', '2015-10-17', 1000),
(11, 'lolly travels', 'Pkr', 'Btl', 23, '09:00:00', '18:00:00', '2015-10-18', 1000),
(12, 'Patel travels', 'Pkr', 'Btl', 8, '07:00:00', '16:00:00', '2017-9-10', 1200),
(13, 'Patel travels', 'Pkr', 'Btl', 11, '07:00:00', '16:00:00', '2015-10-18', 1200),
(14, 'Sbt travels', 'Pkr', 'Btl', 7, '14:00:00', '23:00:00', '2017-9-10', 1100),
(15, 'Sbt travels', 'Pkr', 'Btl', 14, '14:00:00', '23:00:00', '2015-10-17', 1100),
(16, 'Sbt travels', 'Pkr', 'Btl', 25, '14:00:00', '23:00:00', '2015-10-18', 1100),
(18, 'Vijaya travels', 'Pkr', 'Dar', 8, '09:00:00', '04:00:00', '2017-9-10', 350),
(19, 'ABC travels', 'Ktm', 'Pkr', 10, '04:00:00', '10:00:00', '2017-9-10', 800),
(20, 'ABC travels', 'Ktm', 'Pkr', 11, '04:00:00', '10:00:00', '2015-10-17', 800),
(21, 'ABC travels', 'Ktm', 'Pkr', 12, '04:00:00', '10:00:00', '2015-10-18', 800),
(22, 'Sr travels', 'Ktm', 'Pkr', 9, '03:00:00', '09:00:00', '2017-9-10', 850),
(23, 'Sr travels', 'Ktm', 'Pkr', 10, '03:00:00', '09:00:00', '2015-10-17', 850),
(24, 'Sr travels', 'Ktm', 'Pkr', 12, '03:00:00', '09:00:00', '2015-10-18', 850),
(25, 'lolly travels', 'Btl', 'Pkr', 5, '01:00:00', '08:00:00', '2017-9-10', 1000),
(26, 'lolly travels', 'Btl', 'Pkr', 11, '01:00:00', '08:00:00', '2015-10-17', 1000),
(27, 'lolly travels', 'Btl', 'Pkr', 20, '01:00:00', '08:00:00', '2015-10-18', 1000),
(28, 'lolly travels', 'Dar', 'Pkr', 10, '02:00:00', '07:00:00', '2017-9-10', 350),
(29, 'lolly travels', 'Dar', 'Pkr', 20, '02:00:00', '07:00:00', '2015-10-17', 350),
(30, 'lolly travels', 'Dar', 'Pkr', 24, '02:00:00', '07:00:00', '2015-10-18', 350);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Security` varchar(200) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------
-- Table structure for table `user`

CREATE TABLE IF NOT EXISTS `food` (
   `foid` INT(5) NOT NULL ,
 `foname` VARCHAR(30) NOT NULL ,
  `rate` INT(5) NOT NULL ,
  PRIMARY KEY (`foid`)
  ) ENGINE = InnoDB;
--  ----------------------------------------
INSERT into `food` VALUES (0,'No Food',0),
  (1,'Burger',150),
  (2,'Pizza',225),
  (3,'French Fries',90);