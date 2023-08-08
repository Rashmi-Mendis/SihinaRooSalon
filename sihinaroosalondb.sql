-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2023 at 04:32 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sihinaroosalondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appontmenttable`
--

DROP TABLE IF EXISTS `appontmenttable`;
CREATE TABLE IF NOT EXISTS `appontmenttable` (
  `appointment_ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `service` varchar(100) NOT NULL,
  PRIMARY KEY (`appointment_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appontmenttable`
--

INSERT INTO `appontmenttable` (`appointment_ID`, `name`, `mobile`, `service`) VALUES
(1, 'Rashmi', '0716593927', 'Full Face Threading'),
(2, 'Rashmi', '0716597927', 'Facial'),
(3, 'Rashmi', '0716597927', 'Facial'),
(4, 'Lakshika', '0714597927', 'Pedicure'),
(5, 'Prabhashi', '0762455677', 'Nail Art'),
(6, 'Prabhani', '0755677788', 'Hair Cut');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
