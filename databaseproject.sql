-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2019 at 04:16 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `betownson`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ADMIN_ID` int(11) NOT NULL,
  `ADMIN_FNAME` varchar(45) NOT NULL,
  `ADMIN_LNAME` varchar(45) NOT NULL,
  `ADMIN_INITIAL` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ADMIN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `ADMIN_FNAME`, `ADMIN_LNAME`, `ADMIN_INITIAL`) VALUES
(1, 'admin', 'admin', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `CUST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CONCERT_ID` int(11) NOT NULL,
  PRIMARY KEY (`CUST_ID`,`CONCERT_ID`),
  KEY `CONCERT_ID_idx` (`CONCERT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`CUST_ID`, `CONCERT_ID`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

DROP TABLE IF EXISTS `concert`;
CREATE TABLE IF NOT EXISTS `concert` (
  `CONCERT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CONCERT_NAME` varchar(45) NOT NULL,
  `CONCERT_DATE` date NOT NULL,
  `CONCERT_TIME` time NOT NULL,
  `CONCERT_TYPE` varchar(45) NOT NULL,
  `ADMIN_ID` int(11) NOT NULL,
  `VEN_ID` int(11) NOT NULL,
  `SEATS_ID` int(11) NOT NULL,
  PRIMARY KEY (`CONCERT_ID`),
  KEY `ADMIN_ID_idx` (`ADMIN_ID`),
  KEY `VEN_ID_idx` (`VEN_ID`),
  KEY `SEATS_ID_idx` (`SEATS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`CONCERT_ID`, `CONCERT_NAME`, `CONCERT_DATE`, `CONCERT_TIME`, `CONCERT_TYPE`, `ADMIN_ID`, `VEN_ID`, `SEATS_ID`) VALUES
(1, 'singer', '2019-12-03', '03:00:00', 'music', 1, 1, 1),
(2, 'singer2', '2019-12-06', '03:00:00', 'music', 1, 1, 3),
(3, 'singer3', '2019-12-13', '09:00:00', 'music', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CUST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CUST_FNAME` varchar(45) DEFAULT NULL,
  `CUST_LNAME` varchar(45) DEFAULT NULL,
  `CUST_PHONE` varchar(45) DEFAULT NULL,
  `CUST_EMAIL` varchar(45) NOT NULL,
  `CUST_USERNAME` varchar(45) NOT NULL,
  `CUST_PASSWORD` varchar(45) NOT NULL,
  PRIMARY KEY (`CUST_ID`),
  UNIQUE KEY `CUST_USERNAME_UNIQUE` (`CUST_USERNAME`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUST_ID`, `CUST_FNAME`, `CUST_LNAME`, `CUST_PHONE`, `CUST_EMAIL`, `CUST_USERNAME`, `CUST_PASSWORD`) VALUES
(1, 'first', 'last', '2155122352', 'test@email.com', 'username', 'password1'),
(2, NULL, NULL, NULL, 'admin@user.com', 'admin', 'adminuser1'),
(3, NULL, NULL, NULL, 'admin@admin.com', 'adminadmin', 'adminadmin'),
(4, NULL, NULL, NULL, 'test@test.com', 'test1', 'test123456'),
(5, NULL, NULL, NULL, 'demo@demo.com', 'demo', 'demodemo1');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
CREATE TABLE IF NOT EXISTS `seats` (
  `SEATS_ID` int(11) NOT NULL,
  `SEATS_SECTION` varchar(45) NOT NULL,
  `SEATS_PRICE` decimal(6,2) NOT NULL,
  PRIMARY KEY (`SEATS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`SEATS_ID`, `SEATS_SECTION`, `SEATS_PRICE`) VALUES
(1, 'Standing', '100.00'),
(2, 'Lawn', '200.00'),
(3, 'Stadium', '150.00');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `VEN_ID` int(11) NOT NULL,
  `VEN_NAME` varchar(45) NOT NULL,
  `VEN_CAPACITY` int(11) NOT NULL,
  `VEN_CITY` varchar(45) NOT NULL,
  PRIMARY KEY (`VEN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`VEN_ID`, `VEN_NAME`, `VEN_CAPACITY`, `VEN_CITY`) VALUES
(1, 'Venue1', 2000, 'Detroit'),
(2, 'Venue2', 100, 'Grand Rapids'),
(3, 'Venue3', 700, 'Ann Arbor'),
(4, 'Venue4', 500, 'Lansing'),
(5, 'Venue5', 300, 'Detroit'),
(6, 'Venue6', 200, 'Grand Rapids'),
(7, 'Venue7', 50, 'Detroit'),
(8, 'Venue8', 5000, 'Ann Arbor'),
(9, 'Venue9', 80, 'Flint'),
(10, 'Venue10', 350, 'Rochester');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `CONCERT_ID` FOREIGN KEY (`CONCERT_ID`) REFERENCES `concert` (`CONCERT_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `CUST_ID` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`CUST_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `concert`
--
ALTER TABLE `concert`
  ADD CONSTRAINT `ADMIN_ID` FOREIGN KEY (`ADMIN_ID`) REFERENCES `admin` (`ADMIN_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SEAT_ID` FOREIGN KEY (`SEATS_ID`) REFERENCES `seats` (`SEATS_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `VEN_ID` FOREIGN KEY (`VEN_ID`) REFERENCES `venue` (`VEN_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
