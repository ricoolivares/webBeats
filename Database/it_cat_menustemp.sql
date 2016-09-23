-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2016 at 07:12 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intranet`
--

-- --------------------------------------------------------

--
-- Table structure for table `it_cat_menustemp`
--

DROP TABLE IF EXISTS `it_cat_menustemp`;
CREATE TABLE IF NOT EXISTS `it_cat_menustemp` (
  `OptionID` varchar(50) NOT NULL,
  `OptionName` varchar(100) NOT NULL,
  `ActLevel` int(11) NOT NULL,
  `MenuType` varchar(10) NOT NULL,
  `Level1` varchar(50) NOT NULL,
  `Level2` varchar(50) NOT NULL,
  `Level3` varchar(50) DEFAULT NULL,
  `Level4` varchar(50) DEFAULT NULL,
  `Description` varchar(250) NOT NULL,
  `WebMenuID` varchar(150) NOT NULL,
  `Icon` varchar(150) NOT NULL,
  `Link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`OptionID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_cat_menustemp`
--

INSERT INTO `it_cat_menustemp` (`OptionID`, `OptionName`, `ActLevel`, `MenuType`, `Level1`, `Level2`, `Level3`, `Level4`, `Description`, `WebMenuID`, `Icon`, `Link`) VALUES
('01-01', 'INVENTORY', 2, 'SUB', '01', '', NULL, NULL, '', '', '', '#'),
('01', 'IT', 1, 'MENU', '', '', NULL, NULL, '', '', 'menu-icon fa fa-desktop', '#'),
('01-01-01', 'Mtto Physical Inventory', 3, 'OPT', '01', '01-01', NULL, NULL, '', '', '', 'index.html'),
('01-01-02', 'Mtto Software Licenses', 3, 'OPT', '01', '01-01', NULL, NULL, '', '', '', 'index.html'),
('01-02', 'HELPDESK', 2, 'SUB', '01', '', NULL, NULL, '', '', '', '#'),
('01-02-1', 'Mtto Activities', 3, 'OPT', '01', '01-02', NULL, NULL, '', '', '', 'index.html'),
('01-03', 'CONTROL ACTIVITIES', 2, 'SUB', '01', '', NULL, NULL, '', '', '', '#'),
('01-03-01', 'Mtto Activities', 3, 'OPT', '01', '01-03', NULL, NULL, '', '', '', 'index.html'),
('02', 'SECURITY', 1, 'MENU', '02', '', NULL, NULL, '', '', '', '#'),
('02-01', 'CONTROL INCIDENTS', 2, 'SUB', '02', '', NULL, NULL, '', '', '', '#'),
('02-01-01', 'Report Incidents', 3, 'OPT', '02', '02-01', NULL, NULL, '', '', '', 'index.html'),
('02-01-02', 'Mtto Incidents', 3, 'OPT', '02', '02-01', NULL, NULL, '', '', '', 'index.html'),
('02-02', 'DRIVERS CONTROL', 2, 'SUB', '02', '', NULL, NULL, '', '', '', '#'),
('02-02-01', 'Mtto Drivers', 3, 'OPT', '02', '02-02', NULL, NULL, '', '', '', 'index.html'),
('02-02-02', 'Report Drivers', 3, 'OPT', '02', '02-02', NULL, NULL, '', '', '', 'index.html'),
('03', 'PAYROLL', 1, 'MENU', '', '', NULL, NULL, '', '', '', '#'),
('03-01', 'CONTROL OVERTIME', 2, 'SUB', '03', '', NULL, NULL, '', '', '', '#'),
('03-01-01', 'OverTime Input', 3, 'OPT', '03', '03-01', NULL, NULL, '', '', '', 'index.html'),
('03-01-02', 'Overtime Report', 3, 'OPT', '03', '03-01', NULL, NULL, '', '', '', 'index.html'),
('03-02', 'CONTROL CAFETERY', 2, 'SUB', '03', '', NULL, NULL, '', '', '', '#'),
('03-02-01', 'Cafetery Report', 3, 'OPT', '03', '03-02', NULL, NULL, '', '', '', 'index.html'),
('03-03', 'CONTROL RECEIPTS', 2, 'SUB', '03', '', NULL, NULL, '', '', '', '#'),
('03-03-01', 'Send payroll receipts', 3, 'OPT', '03', '03-03', NULL, NULL, '', '', '', 'index.html'),
('00', 'DASH', 1, 'MENU', ' ', ' ', NULL, NULL, ' ', ' ', 'menu-icon fa fa-tachometer', 'Dash.html');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
