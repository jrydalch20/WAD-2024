-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2024 at 04:30 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cowboypropertymanagement`
--
CREATE DATABASE IF NOT EXISTS `cowboypropertymanagement`  ;
USE `cowboypropertymanagement`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `EmployeeID` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `HireDate` date NOT NULL,
  `Salary` decimal(9,2) NOT NULL,
  `EmailAdd` varchar(50) NOT NULL,
  `PhoneNum` varchar(15) NOT NULL,
  PRIMARY KEY (`EmployeeID`)
) ENGINE=MyISAM AUTO_INCREMENT=3  ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `Username`, `Password`, `LastName`, `FirstName`, `Position`, `DOB`, `HireDate`, `Salary`, `EmailAdd`, `PhoneNum`) VALUES
(2, 'admin', '$2y$10$eIOdk8L7YZOTQh30hy8z0.wLNsUBP4JJY6LYhiGzFhJyM9vbjm4O2', 'ADMIN', 'ADMIN', 'ADMIN', '2020-01-01', '2020-01-01', 0.00, 'admin@cpm.com', '0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `emp_property`
--

DROP TABLE IF EXISTS `emp_property`;
CREATE TABLE IF NOT EXISTS `emp_property` (
  `PropertyID` smallint UNSIGNED NOT NULL,
  `EmployeeID` smallint UNSIGNED NOT NULL,
  PRIMARY KEY (`PropertyID`,`EmployeeID`),
  KEY `EmployeeID` (`EmployeeID`)
) ENGINE=MyISAM  ;

-- --------------------------------------------------------

--
-- Table structure for table `lease`
--

DROP TABLE IF EXISTS `lease`;
CREATE TABLE IF NOT EXISTS `lease` (
  `LeaseID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `UnitID` int NOT NULL,
  `EmployeeID` smallint NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Price` decimal(9,2) NOT NULL,
  PRIMARY KEY (`LeaseID`),
  KEY `UnitID` (`UnitID`),
  KEY `EmployeeID` (`EmployeeID`)
) ENGINE=MyISAM  ;

-- --------------------------------------------------------

--
-- Table structure for table `lease_renter`
--

DROP TABLE IF EXISTS `lease_renter`;
CREATE TABLE IF NOT EXISTS `lease_renter` (
  `RenterID` int UNSIGNED NOT NULL,
  `LeaseID` int UNSIGNED NOT NULL,
  PRIMARY KEY (`RenterID`,`LeaseID`),
  KEY `LeaseID` (`LeaseID`)
) ENGINE=MyISAM  ;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

DROP TABLE IF EXISTS `maintenance`;
CREATE TABLE IF NOT EXISTS `maintenance` (
  `MaintenanceID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `UnitID` int UNSIGNED NOT NULL,
  `StatusID` tinyint UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Issue` varchar(500) NOT NULL,
  PRIMARY KEY (`MaintenanceID`),
  KEY `UnitID` (`UnitID`),
  KEY `StatusID` (`StatusID`)
) ENGINE=MyISAM  ;

-- --------------------------------------------------------

--
-- Table structure for table `maint_emp`
--

DROP TABLE IF EXISTS `maint_emp`;
CREATE TABLE IF NOT EXISTS `maint_emp` (
  `MaintenanceID` int UNSIGNED NOT NULL,
  `EmployeeID` smallint UNSIGNED NOT NULL,
  PRIMARY KEY (`MaintenanceID`,`EmployeeID`),
  KEY `EmployeeID` (`EmployeeID`)
) ENGINE=MyISAM  ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `PaymentID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `LeaseID` int UNSIGNED NOT NULL,
  `EmployeeID` smallint UNSIGNED NOT NULL,
  `RenterID` int UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Amount` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`PaymentID`),
  KEY `LeaseID` (`LeaseID`),
  KEY `EmployeeID` (`EmployeeID`),
  KEY `RenterID` (`RenterID`)
) ENGINE=MyISAM  ;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `PropertyID` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `StreetAddress` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` char(2) NOT NULL,
  `Zip` varchar(10) NOT NULL,
  PRIMARY KEY (`PropertyID`)
) ENGINE=MyISAM  ;

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

DROP TABLE IF EXISTS `renter`;
CREATE TABLE IF NOT EXISTS `renter` (
  `RenterID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `EmailAdd` varchar(50) NOT NULL,
  `PhoneNum` varchar(15) NOT NULL,
  PRIMARY KEY (`RenterID`)
) ENGINE=MyISAM AUTO_INCREMENT=8  ;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`RenterID`, `Username`, `Password`, `LastName`, `FirstName`, `EmailAdd`, `PhoneNum`) VALUES
(6, 'test', '$2y$10$gbvQ0on4I1xVmHRIUENGieI44lOij2F53CsuZchMZSxiRE2Ma3mHS', 'Renter', 'Test', 'test@email.com', '8880008888'),
(7, 'pjones', '$2y$10$GytAmtWb6t/oX.o0v5qes.10W1GLM0NNRODDxTj01XD944EUhgUOy', 'Pimothy', 'Jones', 'pjones@email.com', '8008887777');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `StatusID` tinyint UNSIGNED NOT NULL AUTO_INCREMENT,
  `StatusName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`StatusID`)
) ENGINE=MyISAM  ;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
CREATE TABLE IF NOT EXISTS `unit` (
  `UnitID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `PropertyID` smallint NOT NULL,
  `UnitNumber` smallint NOT NULL,
  `Bed` tinyint NOT NULL,
  `Bath` tinyint NOT NULL,
  `Price` decimal(9,2) NOT NULL,
  PRIMARY KEY (`UnitID`),
  KEY `PropertyID` (`PropertyID`)
) ENGINE=MyISAM  ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
