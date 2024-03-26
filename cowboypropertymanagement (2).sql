-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2024 at 08:48 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cowboypropertymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `EmployeeID` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `LastName` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `HireDate` date NOT NULL,
  `Salary` decimal(9,2) NOT NULL,
  `EmailAdd` varchar(50) NOT NULL,
  `PhoneNum` varchar(15) NOT NULL,
  `Username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`EmployeeID`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `LastName`, `FirstName`, `Position`, `DOB`, `HireDate`, `Salary`, `EmailAdd`, `PhoneNum`, `Username`, `Password`) VALUES
(24, 'admin', 'admin', 'admin', '2020-01-01', '2020-01-01', 0.00, 'admin@cpm.com', '911', 'admin', '$2y$10$cbUhdrt/RXC6s2H8NOAacumKEZaALYzeTBxCVAbgA0mga40u4TN6O'),
(25, 'Williams', 'Deron', 'employee', '1984-06-26', '2020-01-01', 65000.00, 'dwill@cpm.com', '7894561231', 'dwill', '$2y$10$zqKj7I7bgtKvp1l4ikox1e9Zy/pVslHRv0iwYMnw.cD2lz/Gk93r6'),
(26, 'Boozer', 'Carlos', 'employee', '1981-11-20', '2020-01-01', 65000.00, 'cboozer@cpm.com', '7894561231', 'cboozer', '$2y$10$FcerxGZnJ3S0gsh4OmnKi.0rfeuaJ2uUzGGriyUsQ92cjmjUGtEiu'),
(27, 'Okur', 'Mehmet', 'employee', '1979-05-26', '2020-01-01', 65000.00, 'mokur@cpm.com', '7894561231', 'mokur', '$2y$10$yMnyBIJL1Z5X/Y3eAZYsCO4s.6yGpJMcIPkyJezDEocaX/KGcp2HW'),
(28, 'Brewer', 'Ronnie', 'employee', '1985-03-20', '2020-01-01', 65000.00, 'rbrewer@cpm.com', '7894561231', 'rbrewer', '$2y$10$3DNN1B/QYJh9pXAsUx2NAOJX.33DO2GH9vhwrGbbsu/RHClKtSso2'),
(29, 'Millsap', 'Paul', 'employee', '1985-02-10', '2020-01-01', 65000.00, 'pmillsap@cpm.com', '7894561231', 'pmillsap', '$2y$10$UNYpYF11kfpGAoTS.S09QuUXLrxMd0WKXFp46HnivAWpgQam5Wjfe'),
(30, 'Kirilenko', 'Andrei', 'employee', '1981-02-18', '2020-01-01', 65000.00, 'ak47@cpm.com', '7894561231', 'ak47', '$2y$10$xFDCLua5EC2.sQll837jO.0OsXvZThWlxjPmzsvXY4vZarUH1yzVu'),
(31, 'Korver', 'Kyle', 'employee', '1981-03-17', '2020-01-01', 65000.00, 'kkorver@cpm.com', '7894561231', 'kkorver', '$2y$10$Y.RdlAQnlSFFusS3TDW8seTIUyAElpRTFsEuzv3GgtGM9yImsR7Hi'),
(32, 'Miles', 'CJ', 'employee', '1987-03-18', '2020-01-01', 65000.00, 'cj@cpm.com', '7894561231', 'cjmiles', '$2y$10$2mpuNkWgl3i2UYGL4mNcPuZuF9ByWXzzx3OS3ZNGImUb2FQ28n0Ze'),
(33, 'Price', 'Ronnie', 'employee', '1983-06-21', '2020-01-01', 65000.00, 'rprice@cpm.com', '7894561230', 'rprice', '$2y$10$IMA0k8C/tTIsG96Oltcs8ejmQzmLLSSr5E68pO7Qpmlmi.MzoYDEK'),
(34, 'Koufos', 'Kosta', 'employee', '1989-02-24', '2020-01-01', 65000.00, 'kkoufos@cpm.com', '7894561231', 'kkoufos', '$2y$10$9q6yO8Dx4bBV/oDBxnPxB.gQzj43jcDCjdJjej8OOkF.R6IR/DkRe'),
(35, 'Fesenko', 'Kyrylo', 'employee', '1986-12-24', '2020-01-01', 650000.00, 'kfesenko@cpm.com', '7894561231', 'kfesenko', '$2y$10$ys2RPVEOxqOJXEN7fPxos.nwll0HDV5czLL9T.eG.38Vs0uJo/X/S'),
(36, 'Knight', 'Brevin', 'employee', '1975-11-08', '2020-01-01', 65000.00, 'bknight@cpm.com', '7894561231', 'bknight', '$2y$10$k/l46SbIiMWLtL1.XvQOJOzYeKKg6cjk27343BGOJ4bMSGUqoV1a2'),
(37, 'Almond', 'Morris', 'employee', '1985-02-02', '2020-01-01', 65000.00, 'malmond@cpm.com', '7894561231', 'malmond', '$2y$10$ViiPDQMl5xGoVbMEMfAzP.iP/G7vCZIMBd6QCRdd21S79lMA34w0S'),
(38, 'Gaines', 'Sundiata', 'employee', '1986-04-18', '2020-01-01', 65000.00, 'sgaines@cpm.com', '7894561231', 'sgaines', '$2y$10$0ZFAzat6QD9.xqKbkLCQ.OAg303FoiAO0R8eHoyHLeYzq29jLJGBy'),
(39, 'Smith', 'Bill', 'admin', '1900-01-29', '2020-01-01', 100000.00, 'bsmith@cpm.com', '7894561231', 'bsmith', '$2y$10$vOgB92fF5JSR1On1qILrmOCDbRQeprV8yJMG3e5SrwbJ8Pl9id5zq');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `emp_property`
--

INSERT INTO `emp_property` (`PropertyID`, `EmployeeID`) VALUES
(1, 30),
(2, 37),
(3, 26),
(4, 25),
(5, 33),
(6, 27),
(7, 26),
(8, 36),
(9, 37),
(10, 37),
(11, 38),
(12, 26),
(13, 32),
(14, 32),
(15, 36),
(16, 34),
(17, 37),
(18, 31),
(19, 31),
(20, 27);

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
  PRIMARY KEY (`LeaseID`),
  KEY `UnitID` (`UnitID`),
  KEY `EmployeeID` (`EmployeeID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lease`
--

INSERT INTO `lease` (`LeaseID`, `UnitID`, `EmployeeID`, `StartDate`, `EndDate`) VALUES
(1, 1, 35, '2024-04-01', '2025-03-31'),
(2, 2, 35, '2024-05-01', '2025-04-30'),
(3, 3, 34, '2024-06-01', '2025-05-31'),
(4, 4, 38, '2024-07-01', '2025-06-30'),
(5, 5, 36, '2024-08-01', '2025-07-31'),
(6, 6, 29, '2024-09-01', '2025-08-31'),
(7, 7, 27, '2024-10-01', '2025-09-30'),
(8, 8, 38, '2024-11-01', '2025-10-31'),
(9, 9, 29, '2024-12-01', '2025-11-30'),
(10, 10, 32, '2025-01-01', '2025-12-31'),
(11, 11, 34, '2025-02-01', '2026-01-31'),
(12, 12, 38, '2025-03-01', '2026-02-28'),
(13, 13, 34, '2025-04-01', '2026-03-31'),
(14, 14, 33, '2025-05-01', '2026-04-30'),
(15, 15, 38, '2025-06-01', '2026-05-31'),
(16, 16, 26, '2025-07-01', '2026-06-30'),
(17, 17, 32, '2025-08-01', '2026-07-31'),
(18, 18, 28, '2025-09-01', '2026-08-31'),
(19, 19, 34, '2025-10-01', '2026-09-30'),
(20, 20, 34, '2025-11-01', '2026-10-31'),
(23, 40, 29, '2026-05-01', '2027-04-30');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lease_renter`
--

INSERT INTO `lease_renter` (`RenterID`, `LeaseID`) VALUES
(10, 1),
(11, 1),
(12, 2),
(13, 2),
(14, 3),
(15, 3),
(16, 4),
(17, 4),
(18, 5),
(19, 5),
(20, 6),
(21, 6),
(22, 7),
(23, 7),
(24, 8),
(25, 8),
(26, 9),
(27, 9),
(28, 10),
(29, 10),
(30, 21),
(30, 23);

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`MaintenanceID`, `UnitID`, `StatusID`, `Date`, `Issue`) VALUES
(1, 1, 4, '2024-05-15', 'Broken faucet'),
(2, 2, 2, '2024-06-20', 'Leaky roof'),
(3, 3, 3, '2024-07-25', 'Faulty electrical wiring'),
(4, 4, 4, '2024-08-30', 'Clogged drain'),
(5, 5, 1, '2024-09-05', 'Broken window'),
(6, 6, 2, '2024-10-10', 'Appliance malfunction'),
(7, 7, 3, '2024-11-15', 'Heating issue'),
(8, 8, 4, '2024-12-20', 'Pest infestation'),
(9, 9, 1, '2025-01-25', 'Mold growth'),
(10, 10, 2, '2025-02-28', 'Plumbing problem'),
(11, 11, 3, '2025-03-05', 'Air conditioning failure'),
(12, 12, 4, '2025-04-10', 'Structural damage'),
(13, 13, 1, '2025-05-15', 'Broken door'),
(14, 14, 2, '2025-06-20', 'Leaking pipes'),
(15, 15, 3, '2025-07-25', 'Faulty HVAC system'),
(16, 16, 4, '2025-08-30', 'Water damage'),
(17, 17, 1, '2025-09-05', 'Electrical outage'),
(18, 18, 2, '2025-10-10', 'Roach infestation'),
(19, 19, 3, '2025-11-15', 'Sewage backup'),
(20, 20, 4, '2025-12-20', 'Smoke detector malfunction');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `maint_emp`
--

INSERT INTO `maint_emp` (`MaintenanceID`, `EmployeeID`) VALUES
(1, 25),
(2, 37),
(3, 31),
(4, 34),
(5, 36),
(6, 27),
(7, 32),
(8, 25),
(9, 35),
(10, 30),
(11, 38),
(12, 31),
(13, 30),
(14, 32),
(15, 31),
(16, 36),
(17, 35),
(18, 27),
(19, 36),
(20, 32);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `PaymentID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `LeaseID` int UNSIGNED NOT NULL,
  `RenterID` int UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Amount` decimal(9,2) NOT NULL,
  `credit_card` varchar(255) NOT NULL,
  PRIMARY KEY (`PaymentID`),
  KEY `LeaseID` (`LeaseID`),
  KEY `RenterID` (`RenterID`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `LeaseID`, `RenterID`, `Date`, `Amount`, `credit_card`) VALUES
(1, 1, 10, '2024-04-01', 1000.00, ''),
(2, 1, 11, '2024-04-01', 1000.00, ''),
(3, 2, 12, '2024-05-01', 1200.00, ''),
(4, 2, 13, '2024-05-01', 1200.00, ''),
(5, 3, 14, '2024-06-01', 1200.00, ''),
(6, 3, 15, '2024-06-01', 1200.00, ''),
(7, 4, 16, '2024-07-01', 1600.00, ''),
(8, 4, 17, '2024-07-01', 1600.00, ''),
(9, 5, 18, '2024-08-01', 1000.00, ''),
(10, 5, 19, '2024-08-01', 1000.00, ''),
(11, 6, 20, '2024-09-01', 800.00, ''),
(12, 6, 21, '2024-09-01', 800.00, ''),
(13, 7, 22, '2024-10-01', 1200.00, ''),
(14, 7, 23, '2024-10-01', 1200.00, ''),
(15, 8, 24, '2024-11-01', 1600.00, ''),
(16, 8, 25, '2024-11-01', 1600.00, ''),
(17, 9, 26, '2024-12-01', 800.00, ''),
(18, 9, 27, '2024-12-01', 800.00, ''),
(19, 10, 28, '2025-01-01', 1600.00, ''),
(20, 10, 29, '2025-01-01', 1600.00, ''),
(34, 10, 29, '2024-03-25', 1600.00, 'c6b25ffac5d2c50f41af3ac4d97d07d95fd4f2d5f9fcef98dc709e5741060508'),
(33, 1, 10, '2024-03-25', 1000.00, 'ee1b207bee7c51ccf6f52aa12f3384093f62227071db0d21b7b489f5e2fa7bcf'),
(32, 1, 10, '2024-03-25', 1000.00, 'b62d6f2ea0d97444d90d103c1acf4b4205c2b07e5f6e14e279c6ac10ecff43d5'),
(29, 0, 29, '2024-03-25', 0.00, 'fcdb4b423f4e5283afa249d762ef6aef150e91fccd810d43e5e719d14512dec7'),
(30, 0, 29, '2024-03-25', 0.00, '807ae5f38db47bff8b09b37ad803cb10ef5147567a89a33a66bb3282df4ad966'),
(31, 1, 10, '2024-03-25', 1000.00, '860e711bc15c1e57409740d2984d7240fcb26a9888f73bcb4e563def7aea5f17');

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`PropertyID`, `StreetAddress`, `City`, `State`, `Zip`) VALUES
(1, '100 S 900 E', 'Springfield', 'IL', '62701'),
(2, '456 Elm St', 'Riverside', 'CA', '92507'),
(3, '789 Oak Ave', 'Portland', 'OR', '97201'),
(4, '1011 Maple Ln', 'New York', 'NY', '10001'),
(5, '1315 Pine St', 'Seattle', 'WA', '98101'),
(6, '1617 Cedar Rd', 'Boston', 'MA', '02108'),
(7, '1819 Birch Dr', 'Austin', 'TX', '78701'),
(8, '2021 Walnut Ct', 'San Francisco', 'CA', '94102'),
(9, '2223 Cherry Ave', 'Denver', 'CO', '80202'),
(10, '2425 Vine St', 'Miami', 'FL', '33101'),
(11, '2627 Spruce Blvd', 'Chicago', 'IL', '60601'),
(12, '2829 Cedar Ln', 'Los Angeles', 'CA', '90001'),
(13, '3031 Pine Rd', 'Houston', 'TX', '77001'),
(14, '3233 Maple St', 'Atlanta', 'GA', '30301'),
(15, '3435 Elm Ave', 'Philadelphia', 'PA', '19101'),
(16, '3637 Oak Dr', 'Dallas', 'TX', '75201'),
(17, '3839 Walnut Ln', 'Phoenix', 'AZ', '85001'),
(18, '4041 Cherry St', 'Detroit', 'MI', '48201'),
(19, '4243 Birch Blvd', 'Las Vegas', 'NV', '89101'),
(20, '4445 Vine Rd', 'San Diego', 'CA', '92101');

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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`RenterID`, `Username`, `Password`, `LastName`, `FirstName`, `EmailAdd`, `PhoneNum`) VALUES
(10, 'kingjames', '$2y$10$fXYmy/s4JG40vOUuluV7EOPkgYFMpHMweKFNKeN4u.12Lgf9NyKXC', 'James', 'LeBron', 'kingjames@email.com', '1231231234'),
(29, 'pjones', '$2y$10$wrrnoBmo0RF9vbl5tvRV2eADbnsWRNl.X3AOFkrmDynUJcsq9qBIO', 'Jones', 'Pimothy', 'pjones@email.com', '0001112222'),
(11, 'adavis3', '$2y$10$ky3IVJZ5eETLc2k3wzOqgOT8wT59PLZhWyov2d5gZe7CErBdAl4yC', 'Davis', 'Anthony', 'adavis@email', '1231231234'),
(12, 'jmcgee', '$2y$10$xxcwpvYbtPCYairSXZoqaelJ31dqeUwOidw7uCJmjzHfpPnV0zRB2', 'McGee', 'JaVale', 'jm@email.como', '1231231234'),
(13, 'dhoward', '$2y$10$ADpKjroarwwRklbsyIcHIe.N69ZlwKB/Z562eXLQiIEKVxyup4DYW', 'Howard', 'Dwight', 'dh@email.com', '1231234567'),
(14, 'dgreen', '$2y$10$jtbl9ldMDKSoBsdnGSEPCuAHhuvtLJaVLLKaOfr0izAx5DOJI1Vui', 'Green', 'Danny', 'dgreen@email.com', '1234567890'),
(15, 'kkuz', '$2y$10$XHvtH5ZraJ4gLHq.8T4V8eAbLzx4JMxBttEsijxVILfj2szgQL4tG', 'Kuzma', 'Kyle', 'kkuz@email.com', '1234567890'),
(16, 'kcp', '$2y$10$zxGar6Ip.L8bNtRUrkDomesUfgND.qK8Lf2r74wWKMQj4MnD9qWyO', 'Caldwell-Pope', 'Kentavious', 'kcp@email.com', '1234567890'),
(17, 'acaruso', '$2y$10$lDBDLowJcpD8clqgXR0y7ut5LkoJuTeeCNF73R8UFp037to4o/Pka', 'Caruso', 'Alex', 'acaruso@email.com', '1234567890'),
(18, 'rrondo', '$2y$10$klsz2qfmiB0wH6d9xrAxX.GIfDqMKILKBGh2QnnL6iTe7RhYHFc8W', 'Rondo', 'Rajon', 'rrondo@email.com', '1234567890'),
(19, 'mmorris', '$2y$10$NiDM3h3YG9Jo.0Xdv3w0KeWnYBIucXySPLeZEr0WKyDZMK3fjjChi', 'Morris', 'Markieff', 'mmorris@email.com', '1234567890'),
(20, 'abradley', '$2y$10$oqJUBxELCNmLCPO8ceGNwu/puzSu/Lx5ujiilQrT.9IbItG9G2NvC', 'Bradley', 'Avery', 'abradley@email.com', '1234567890'),
(21, 'qcook', '$2y$10$WrNDaMMiRZ1xGyPwptD51.YRQ7Jhugd/UZxXztrTn0DJSgNOHm78S', 'Cook', 'Quinn', 'qcook@email.com', '1234567890'),
(22, 'jdudley', '$2y$10$THQxCBmhoWU40Yh7Ret.c.awH45378qee1G.KzXaOLojvqQF4KWti', 'Dudley', 'Jared', 'jdudley@email.com', '1234567890'),
(23, 'tht', '$2y$10$oY9qYQSPWaaYe/ylGIMnH.YQeRNX5poXsBMJS/y6IBk6GrPD/kK.G', 'Horton-Tucker', 'Talen', 'tht@email.com', '1234567890'),
(24, 'dwaiters', '$2y$10$WqHkMFoXLShunnJlC0o92uLSS16NU01EMBCT6KPcKmxB8BCZ9D41W', 'Waiters', 'Dion', 'dwaiters@email.com', '1234567890'),
(25, 'fvogel', '$2y$10$CQDUqgs3eA8x1IVRzO7lV.o3kQXzfnWOlWEhZIfFdDFIMbGJhZ5Oe', 'Vogel', 'Frank', 'fvogel@email.com', '1234567890'),
(26, 'jkidd', '$2y$10$9ZrOaRXV9wsswIlNe3q60eddrXQoNgQmSh4MsP4XdAezot2me.nvy', 'Kidd', 'Jason', 'jkidd@email.com', '1234567890'),
(27, 'lhollins', '$2y$10$Jy4PQ2/.5m9HQj.svuLAUuoZVB57XWdfJuUX5lweZxw9Lh9spYbVC', 'Hollins', 'Lionel', 'lhollins@email.com', '1234567890'),
(28, 'phandy', '$2y$10$jPt2cXoK9xgJRaFth.8K6uMcPOQZR1YS4iHNDDeQtLSZW6YPY6okG', 'Handy', 'Phil', 'phandy@email.com', '1234567890'),
(30, 'thisistest', '$2y$10$FvI/0NYSUwBjxvjExcpyduWFb4s7FxSUFESEpl73sYYFprCWrJyYK', 'test', 'thisis', 'test@email.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `StatusID` tinyint UNSIGNED NOT NULL AUTO_INCREMENT,
  `StatusName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`StatusID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`StatusID`, `StatusName`) VALUES
(1, 'Incomplete'),
(2, 'In Progress'),
(3, 'Revisit'),
(4, 'Complete');

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
) ENGINE=MyISAM AUTO_INCREMENT=420 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`UnitID`, `PropertyID`, `UnitNumber`, `Bed`, `Bath`, `Price`) VALUES
(1, 1, 101, 2, 1, 1000.00),
(2, 1, 102, 3, 1, 1200.00),
(3, 1, 103, 1, 2, 1200.00),
(4, 1, 104, 3, 2, 1600.00),
(5, 1, 105, 2, 1, 1000.00),
(6, 1, 106, 1, 1, 800.00),
(7, 1, 107, 3, 1, 1200.00),
(8, 1, 108, 2, 2, 1600.00),
(9, 1, 109, 1, 1, 800.00),
(10, 1, 110, 3, 2, 1600.00),
(11, 1, 111, 2, 1, 1000.00),
(12, 1, 112, 1, 1, 800.00),
(13, 1, 113, 3, 1, 1200.00),
(14, 1, 114, 2, 2, 1600.00),
(15, 1, 115, 1, 2, 1200.00),
(16, 1, 116, 3, 2, 1600.00),
(17, 1, 117, 2, 1, 1000.00),
(18, 1, 118, 1, 1, 800.00),
(19, 1, 119, 3, 1, 1200.00),
(20, 1, 120, 2, 2, 1600.00),
(21, 2, 201, 3, 1, 1200.00),
(22, 2, 202, 2, 2, 1600.00),
(23, 2, 203, 1, 2, 1200.00),
(24, 2, 204, 3, 1, 1200.00),
(25, 2, 205, 2, 1, 1000.00),
(26, 2, 206, 1, 1, 800.00),
(27, 2, 207, 3, 2, 1600.00),
(28, 2, 208, 2, 2, 1600.00),
(29, 2, 209, 1, 1, 800.00),
(30, 2, 210, 3, 2, 1600.00),
(31, 2, 211, 2, 1, 1000.00),
(32, 2, 212, 1, 1, 800.00),
(33, 2, 213, 3, 1, 1200.00),
(34, 2, 214, 2, 2, 1600.00),
(35, 2, 215, 1, 2, 1200.00),
(36, 2, 216, 3, 2, 1600.00),
(37, 2, 217, 2, 1, 1000.00),
(38, 2, 218, 1, 1, 800.00),
(39, 2, 219, 3, 1, 1200.00),
(40, 2, 220, 2, 2, 1600.00),
(41, 2, 201, 3, 1, 1200.00),
(42, 2, 202, 2, 2, 1600.00),
(43, 2, 203, 1, 2, 1200.00),
(44, 2, 204, 3, 1, 1200.00),
(45, 2, 205, 2, 1, 1000.00),
(46, 2, 206, 1, 1, 800.00),
(47, 2, 207, 3, 2, 1600.00),
(48, 2, 208, 2, 2, 1600.00),
(49, 2, 209, 1, 1, 800.00),
(50, 2, 210, 3, 2, 1600.00),
(51, 2, 211, 2, 1, 1000.00),
(52, 2, 212, 1, 1, 800.00),
(53, 2, 213, 3, 1, 1200.00),
(54, 2, 214, 2, 2, 1600.00),
(55, 2, 215, 1, 2, 1200.00),
(56, 2, 216, 3, 2, 1600.00),
(57, 2, 217, 2, 1, 1000.00),
(58, 2, 218, 1, 1, 800.00),
(59, 2, 219, 3, 1, 1200.00),
(60, 2, 220, 2, 2, 1600.00),
(61, 3, 301, 2, 1, 1000.00),
(62, 3, 302, 3, 2, 1600.00),
(63, 3, 303, 1, 2, 1200.00),
(64, 3, 304, 3, 1, 1200.00),
(65, 3, 305, 2, 1, 1000.00),
(66, 3, 306, 1, 1, 800.00),
(67, 3, 307, 3, 2, 1600.00),
(68, 3, 308, 2, 2, 1600.00),
(69, 3, 309, 1, 1, 800.00),
(70, 3, 310, 3, 2, 1600.00),
(71, 3, 311, 2, 1, 1000.00),
(72, 3, 312, 1, 1, 800.00),
(73, 3, 313, 3, 1, 1200.00),
(74, 3, 314, 2, 2, 1600.00),
(75, 3, 315, 1, 2, 1200.00),
(76, 3, 316, 3, 2, 1600.00),
(77, 3, 317, 2, 1, 1000.00),
(78, 3, 318, 1, 1, 800.00),
(79, 3, 319, 3, 1, 1200.00),
(80, 3, 320, 2, 2, 1600.00),
(81, 4, 401, 3, 1, 1200.00),
(82, 4, 402, 2, 2, 1600.00),
(83, 4, 403, 1, 2, 1200.00),
(84, 4, 404, 3, 1, 1200.00),
(85, 4, 405, 2, 1, 1000.00),
(86, 4, 406, 1, 1, 800.00),
(87, 4, 407, 3, 2, 1600.00),
(88, 4, 408, 2, 2, 1600.00),
(89, 4, 409, 1, 1, 800.00),
(90, 4, 410, 3, 2, 1600.00),
(91, 4, 411, 2, 1, 1000.00),
(92, 4, 412, 1, 1, 800.00),
(93, 4, 413, 3, 1, 1200.00),
(94, 4, 414, 2, 2, 1600.00),
(95, 4, 415, 1, 2, 1200.00),
(96, 4, 416, 3, 2, 1600.00),
(97, 4, 417, 2, 1, 1000.00),
(98, 4, 418, 1, 1, 800.00),
(99, 4, 419, 3, 1, 1200.00),
(100, 4, 420, 2, 2, 1600.00),
(101, 5, 501, 2, 1, 1000.00),
(102, 5, 502, 3, 2, 1600.00),
(103, 5, 503, 1, 2, 1200.00),
(104, 5, 504, 3, 1, 1200.00),
(105, 5, 505, 2, 1, 1000.00),
(106, 5, 506, 1, 1, 800.00),
(107, 5, 507, 3, 2, 1600.00),
(108, 5, 508, 2, 2, 1600.00),
(109, 5, 509, 1, 1, 800.00),
(110, 5, 510, 3, 2, 1600.00),
(111, 5, 511, 2, 1, 1000.00),
(112, 5, 512, 1, 1, 800.00),
(113, 5, 513, 3, 1, 1200.00),
(114, 5, 514, 2, 2, 1600.00),
(115, 5, 515, 1, 2, 1200.00),
(116, 5, 516, 3, 2, 1600.00),
(117, 5, 517, 2, 1, 1000.00),
(118, 5, 518, 1, 1, 800.00),
(119, 5, 519, 3, 1, 1200.00),
(120, 5, 520, 2, 2, 1600.00),
(121, 6, 601, 3, 1, 1200.00),
(122, 6, 602, 2, 2, 1600.00),
(123, 6, 603, 1, 2, 1200.00),
(124, 6, 604, 3, 1, 1200.00),
(125, 6, 605, 2, 1, 1000.00),
(126, 6, 606, 1, 1, 800.00),
(127, 6, 607, 3, 2, 1600.00),
(128, 6, 608, 2, 2, 1600.00),
(129, 6, 609, 1, 1, 800.00),
(130, 6, 610, 3, 2, 1600.00),
(131, 6, 611, 2, 1, 1000.00),
(132, 6, 612, 1, 1, 800.00),
(133, 6, 613, 3, 1, 1200.00),
(134, 6, 614, 2, 2, 1600.00),
(135, 6, 615, 1, 2, 1200.00),
(136, 6, 616, 3, 2, 1600.00),
(137, 6, 617, 2, 1, 1000.00),
(138, 6, 618, 1, 1, 800.00),
(139, 6, 619, 3, 1, 1200.00),
(140, 6, 620, 2, 2, 1600.00),
(141, 7, 701, 2, 1, 1000.00),
(142, 7, 702, 3, 2, 1600.00),
(143, 7, 703, 1, 2, 1200.00),
(144, 7, 704, 3, 1, 1200.00),
(145, 7, 705, 2, 1, 1000.00),
(146, 7, 706, 1, 1, 800.00),
(147, 7, 707, 3, 2, 1600.00),
(148, 7, 708, 2, 2, 1600.00),
(149, 7, 709, 1, 1, 800.00),
(150, 7, 710, 3, 2, 1600.00),
(151, 7, 711, 2, 1, 1000.00),
(152, 7, 712, 1, 1, 800.00),
(153, 7, 713, 3, 1, 1200.00),
(154, 7, 714, 2, 2, 1600.00),
(155, 7, 715, 1, 2, 1200.00),
(156, 7, 716, 3, 2, 1600.00),
(157, 7, 717, 2, 1, 1000.00),
(158, 7, 718, 1, 1, 800.00),
(159, 7, 719, 3, 1, 1200.00),
(160, 7, 720, 2, 2, 1600.00),
(161, 8, 801, 3, 1, 1200.00),
(162, 8, 802, 2, 2, 1600.00),
(163, 8, 803, 1, 2, 1200.00),
(164, 8, 804, 3, 1, 1200.00),
(165, 8, 805, 2, 1, 1000.00),
(166, 8, 806, 1, 1, 800.00),
(167, 8, 807, 3, 2, 1600.00),
(168, 8, 808, 2, 2, 1600.00),
(169, 8, 809, 1, 1, 800.00),
(170, 8, 810, 3, 2, 1600.00),
(171, 8, 811, 2, 1, 1000.00),
(172, 8, 812, 1, 1, 800.00),
(173, 8, 813, 3, 1, 1200.00),
(174, 8, 814, 2, 2, 1600.00),
(175, 8, 815, 1, 2, 1200.00),
(176, 8, 816, 3, 2, 1600.00),
(177, 8, 817, 2, 1, 1000.00),
(178, 8, 818, 1, 1, 800.00),
(179, 8, 819, 3, 1, 1200.00),
(180, 8, 820, 2, 2, 1600.00),
(181, 9, 901, 2, 1, 1000.00),
(182, 9, 902, 3, 2, 1600.00),
(183, 9, 903, 1, 2, 1200.00),
(184, 9, 904, 3, 1, 1200.00),
(185, 9, 905, 2, 1, 1000.00),
(186, 9, 906, 1, 1, 800.00),
(187, 9, 907, 3, 2, 1600.00),
(188, 9, 908, 2, 2, 1600.00),
(189, 9, 909, 1, 1, 800.00),
(190, 9, 910, 3, 2, 1600.00),
(191, 9, 911, 2, 1, 1000.00),
(192, 9, 912, 1, 1, 800.00),
(193, 9, 913, 3, 1, 1200.00),
(194, 9, 914, 2, 2, 1600.00),
(195, 9, 915, 1, 2, 1200.00),
(196, 9, 916, 3, 2, 1600.00),
(197, 9, 917, 2, 1, 1000.00),
(198, 9, 918, 1, 1, 800.00),
(199, 9, 919, 3, 1, 1200.00),
(200, 9, 920, 2, 2, 1600.00),
(201, 10, 1001, 3, 1, 1200.00),
(202, 10, 1002, 2, 2, 1600.00),
(203, 10, 1003, 1, 2, 1200.00),
(204, 10, 1004, 3, 1, 1200.00),
(205, 10, 1005, 2, 1, 1000.00),
(206, 10, 1006, 1, 1, 800.00),
(207, 10, 1007, 3, 2, 1600.00),
(208, 10, 1008, 2, 2, 1600.00),
(209, 10, 1009, 1, 1, 800.00),
(210, 10, 1010, 3, 2, 1600.00),
(211, 10, 1011, 2, 1, 1000.00),
(212, 10, 1012, 1, 1, 800.00),
(213, 10, 1013, 3, 1, 1200.00),
(214, 10, 1014, 2, 2, 1600.00),
(215, 10, 1015, 1, 2, 1200.00),
(216, 10, 1016, 3, 2, 1600.00),
(217, 10, 1017, 2, 1, 1000.00),
(218, 10, 1018, 1, 1, 800.00),
(219, 10, 1019, 3, 1, 1200.00),
(220, 10, 1020, 2, 2, 1600.00),
(221, 11, 1101, 2, 1, 1000.00),
(222, 11, 1102, 3, 2, 1600.00),
(223, 11, 1103, 1, 2, 1200.00),
(224, 11, 1104, 3, 1, 1200.00),
(225, 11, 1105, 2, 1, 1000.00),
(226, 11, 1106, 1, 1, 800.00),
(227, 11, 1107, 3, 2, 1600.00),
(228, 11, 1108, 2, 2, 1600.00),
(229, 11, 1109, 1, 1, 800.00),
(230, 11, 1110, 3, 2, 1600.00),
(231, 11, 1111, 2, 1, 1000.00),
(232, 11, 1112, 1, 1, 800.00),
(233, 11, 1113, 3, 1, 1200.00),
(234, 11, 1114, 2, 2, 1600.00),
(235, 11, 1115, 1, 2, 1200.00),
(236, 11, 1116, 3, 2, 1600.00),
(237, 11, 1117, 2, 1, 1000.00),
(238, 11, 1118, 1, 1, 800.00),
(239, 11, 1119, 3, 1, 1200.00),
(240, 11, 1120, 2, 2, 1600.00),
(241, 12, 1201, 3, 1, 1200.00),
(242, 12, 1202, 2, 2, 1600.00),
(243, 12, 1203, 1, 2, 1200.00),
(244, 12, 1204, 3, 1, 1200.00),
(245, 12, 1205, 2, 1, 1000.00),
(246, 12, 1206, 1, 1, 800.00),
(247, 12, 1207, 3, 2, 1600.00),
(248, 12, 1208, 2, 2, 1600.00),
(249, 12, 1209, 1, 1, 800.00),
(250, 12, 1210, 3, 2, 1600.00),
(251, 12, 1211, 2, 1, 1000.00),
(252, 12, 1212, 1, 1, 800.00),
(253, 12, 1213, 3, 1, 1200.00),
(254, 12, 1214, 2, 2, 1600.00),
(255, 12, 1215, 1, 2, 1200.00),
(256, 12, 1216, 3, 2, 1600.00),
(257, 12, 1217, 2, 1, 1000.00),
(258, 12, 1218, 1, 1, 800.00),
(259, 12, 1219, 3, 1, 1200.00),
(260, 12, 1220, 2, 2, 1600.00),
(261, 13, 1301, 2, 1, 1000.00),
(262, 13, 1302, 3, 2, 1600.00),
(263, 13, 1303, 1, 2, 1200.00),
(264, 13, 1304, 3, 1, 1200.00),
(265, 13, 1305, 2, 1, 1000.00),
(266, 13, 1306, 1, 1, 800.00),
(267, 13, 1307, 3, 2, 1600.00),
(268, 13, 1308, 2, 2, 1600.00),
(269, 13, 1309, 1, 1, 800.00),
(270, 13, 1310, 3, 2, 1600.00),
(271, 13, 1311, 2, 1, 1000.00),
(272, 13, 1312, 1, 1, 800.00),
(273, 13, 1313, 3, 1, 1200.00),
(274, 13, 1314, 2, 2, 1600.00),
(275, 13, 1315, 1, 2, 1200.00),
(276, 13, 1316, 3, 2, 1600.00),
(277, 13, 1317, 2, 1, 1000.00),
(278, 13, 1318, 1, 1, 800.00),
(279, 13, 1319, 3, 1, 1200.00),
(280, 13, 1320, 2, 2, 1600.00),
(281, 14, 1401, 3, 1, 1200.00),
(282, 14, 1402, 2, 2, 1600.00),
(283, 14, 1403, 1, 2, 1200.00),
(284, 14, 1404, 3, 1, 1200.00),
(285, 14, 1405, 2, 1, 1000.00),
(286, 14, 1406, 1, 1, 800.00),
(287, 14, 1407, 3, 2, 1600.00),
(288, 14, 1408, 2, 2, 1600.00),
(289, 14, 1409, 1, 1, 800.00),
(290, 14, 1410, 3, 2, 1600.00),
(291, 14, 1411, 2, 1, 1000.00),
(292, 14, 1412, 1, 1, 800.00),
(293, 14, 1413, 3, 1, 1200.00),
(294, 14, 1414, 2, 2, 1600.00),
(295, 14, 1415, 1, 2, 1200.00),
(296, 14, 1416, 3, 2, 1600.00),
(297, 14, 1417, 2, 1, 1000.00),
(298, 14, 1418, 1, 1, 800.00),
(299, 14, 1419, 3, 1, 1200.00),
(300, 14, 1420, 2, 2, 1600.00),
(301, 15, 1501, 2, 1, 1000.00),
(302, 15, 1502, 3, 2, 1600.00),
(303, 15, 1503, 1, 2, 1200.00),
(304, 15, 1504, 3, 1, 1200.00),
(305, 15, 1505, 2, 1, 1000.00),
(306, 15, 1506, 1, 1, 800.00),
(307, 15, 1507, 3, 2, 1600.00),
(308, 15, 1508, 2, 2, 1600.00),
(309, 15, 1509, 1, 1, 800.00),
(310, 15, 1510, 3, 2, 1600.00),
(311, 15, 1511, 2, 1, 1000.00),
(312, 15, 1512, 1, 1, 800.00),
(313, 15, 1513, 3, 1, 1200.00),
(314, 15, 1514, 2, 2, 1600.00),
(315, 15, 1515, 1, 2, 1200.00),
(316, 15, 1516, 3, 2, 1600.00),
(317, 15, 1517, 2, 1, 1000.00),
(318, 15, 1518, 1, 1, 800.00),
(319, 15, 1519, 3, 1, 1200.00),
(320, 15, 1520, 2, 2, 1600.00),
(321, 16, 1601, 3, 1, 1200.00),
(322, 16, 1602, 2, 2, 1600.00),
(323, 16, 1603, 1, 2, 1200.00),
(324, 16, 1604, 3, 1, 1200.00),
(325, 16, 1605, 2, 1, 1000.00),
(326, 16, 1606, 1, 1, 800.00),
(327, 16, 1607, 3, 2, 1600.00),
(328, 16, 1608, 2, 2, 1600.00),
(329, 16, 1609, 1, 1, 800.00),
(330, 16, 1610, 3, 2, 1600.00),
(331, 16, 1611, 2, 1, 1000.00),
(332, 16, 1612, 1, 1, 800.00),
(333, 16, 1613, 3, 1, 1200.00),
(334, 16, 1614, 2, 2, 1600.00),
(335, 16, 1615, 1, 2, 1200.00),
(336, 16, 1616, 3, 2, 1600.00),
(337, 16, 1617, 2, 1, 1000.00),
(338, 16, 1618, 1, 1, 800.00),
(339, 16, 1619, 2, 2, 1600.00),
(340, 16, 1620, 1, 2, 1200.00),
(341, 17, 1701, 3, 1, 1200.00),
(342, 17, 1702, 2, 2, 1600.00),
(343, 17, 1703, 1, 2, 1200.00),
(344, 17, 1704, 3, 1, 1200.00),
(345, 17, 1705, 2, 1, 1000.00),
(346, 17, 1706, 1, 1, 800.00),
(347, 17, 1707, 3, 2, 1600.00),
(348, 17, 1708, 2, 2, 1600.00),
(349, 17, 1709, 1, 1, 800.00),
(350, 17, 1710, 3, 2, 1600.00),
(351, 17, 1711, 2, 1, 1000.00),
(352, 17, 1712, 1, 1, 800.00),
(353, 17, 1713, 3, 1, 1200.00),
(354, 17, 1714, 2, 2, 1600.00),
(355, 17, 1715, 1, 2, 1200.00),
(356, 17, 1716, 3, 2, 1600.00),
(357, 17, 1717, 2, 1, 1000.00),
(358, 17, 1718, 1, 1, 800.00),
(359, 17, 1719, 3, 1, 1200.00),
(360, 17, 1720, 2, 2, 1600.00),
(361, 18, 1801, 2, 1, 1000.00),
(362, 18, 1802, 3, 2, 1600.00),
(363, 18, 1803, 1, 2, 1200.00),
(364, 18, 1804, 3, 1, 1200.00),
(365, 18, 1805, 2, 1, 1000.00),
(366, 18, 1806, 1, 1, 800.00),
(367, 18, 1807, 3, 2, 1600.00),
(368, 18, 1808, 2, 2, 1600.00),
(369, 18, 1809, 1, 1, 800.00),
(370, 18, 1810, 3, 2, 1600.00),
(371, 18, 1811, 2, 1, 1000.00),
(372, 18, 1812, 1, 1, 800.00),
(373, 18, 1813, 3, 1, 1200.00),
(374, 18, 1814, 2, 2, 1600.00),
(375, 18, 1815, 1, 2, 1200.00),
(376, 18, 1816, 3, 2, 1600.00),
(377, 18, 1817, 2, 1, 1000.00),
(378, 18, 1818, 1, 1, 800.00),
(379, 18, 1819, 3, 1, 1200.00),
(380, 18, 1820, 2, 2, 1600.00),
(381, 19, 1901, 3, 1, 1200.00),
(382, 19, 1902, 2, 2, 1600.00),
(383, 19, 1903, 1, 2, 1200.00),
(384, 19, 1904, 3, 1, 1200.00),
(385, 19, 1905, 2, 1, 1000.00),
(386, 19, 1906, 1, 1, 800.00),
(387, 19, 1907, 3, 2, 1600.00),
(388, 19, 1908, 2, 2, 1600.00),
(389, 19, 1909, 1, 1, 800.00),
(390, 19, 1910, 3, 2, 1600.00),
(391, 19, 1911, 2, 1, 1000.00),
(392, 19, 1912, 1, 1, 800.00),
(393, 19, 1913, 3, 1, 1200.00),
(394, 19, 1914, 2, 2, 1600.00),
(395, 19, 1915, 1, 2, 1200.00),
(396, 19, 1916, 3, 2, 1600.00),
(397, 19, 1917, 2, 1, 1000.00),
(398, 19, 1919, 3, 1, 1200.00),
(399, 19, 1920, 2, 2, 1600.00),
(400, 20, 2001, 2, 1, 1000.00),
(401, 20, 2002, 3, 2, 1600.00),
(402, 20, 2003, 1, 2, 1200.00),
(403, 20, 2004, 3, 1, 1200.00),
(404, 20, 2005, 2, 1, 1000.00),
(405, 20, 2006, 1, 1, 800.00),
(406, 20, 2007, 3, 2, 1600.00),
(407, 20, 2008, 2, 2, 1600.00),
(408, 20, 2009, 1, 1, 800.00),
(409, 20, 2010, 3, 2, 1600.00),
(410, 20, 2011, 2, 1, 1000.00),
(411, 20, 2012, 1, 1, 800.00),
(412, 20, 2013, 3, 1, 1200.00),
(413, 20, 2014, 2, 2, 1600.00),
(414, 20, 2015, 1, 2, 1200.00),
(415, 20, 2016, 3, 2, 1600.00),
(416, 20, 2017, 2, 1, 1000.00),
(417, 20, 2018, 1, 1, 800.00),
(418, 20, 2019, 3, 1, 1200.00),
(419, 20, 2020, 2, 2, 1600.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
