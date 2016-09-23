-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2016 at 12:12 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

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
-- Table structure for table `cat_test`
--

DROP TABLE IF EXISTS `cat_test`;
CREATE TABLE IF NOT EXISTS `cat_test` (
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `LastName` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_test`
--

INSERT INTO `cat_test` (`Name`, `LastName`) VALUES
('DARIO', 'RICO'),
('LUIS', 'RICO');

-- --------------------------------------------------------

--
-- Table structure for table `it.catalog_areadeparment`
--

DROP TABLE IF EXISTS `it.catalog_areadeparment`;
CREATE TABLE IF NOT EXISTS `it.catalog_areadeparment` (
  `AreaDeparmentID` int(11) NOT NULL,
  `DeparmentID` int(11) NOT NULL,
  `AreaDeparment` varchar(50) NOT NULL,
  `Alias` varchar(10) NOT NULL,
  `Comments` varchar(100) NOT NULL,
  PRIMARY KEY (`AreaDeparmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it.catalog_areadeparment`
--

INSERT INTO `it.catalog_areadeparment` (`AreaDeparmentID`, `DeparmentID`, `AreaDeparment`, `Alias`, `Comments`) VALUES
(1, 1, 'CHINESS STAFF', 'CHI', ''),
(2, 2, 'BILL OF MATERIAL', 'BOM', ''),
(3, 2, 'INDUSTRIAL ENGINEERING', 'IE', ''),
(4, 2, 'PRODUCT ENGINEERING', 'PE', ''),
(5, 2, 'TESTING ENGINENEERING', 'TE', ''),
(6, 2, 'MAINTENANCE', 'MTTO', ''),
(7, 3, 'PAYROLL', 'PAY', ''),
(8, 3, 'ACCOUNTING', 'ACC', ''),
(9, 3, 'FINANCE', 'FI', ''),
(10, 4, 'HUMAN RESOURCE', 'HR', ''),
(11, 4, 'TRAINNING', 'TRA', ''),
(12, 4, 'SECURITY', 'SEC', ''),
(13, 4, 'ENFERMERY', 'ENF', ''),
(14, 5, 'INFORMATION TECHNOLOGY', 'IT', ''),
(15, 6, 'LOGISTIC', 'LOG', ''),
(16, 7, 'PLANNING', 'PLN', ''),
(17, 8, 'FINAL ASSEMBLY', 'FA', ''),
(18, 8, 'LCM ASSEMBLY', 'LCM', ''),
(19, 13, 'WAREHOUSE', 'WH', ''),
(20, 13, 'RECEIVING', 'REC', ''),
(21, 13, 'SHIPPING', 'SHI', ''),
(22, 9, 'PURCHASING', 'PUR', ''),
(23, 10, 'INPECTION QUALITY CONTROL', 'IQC', ''),
(24, 10, 'QUALITY CONTROL', 'QA', ''),
(25, 10, 'QUALITY ASSURANCE', 'QA', ''),
(26, 11, 'SMT', 'SMT', ''),
(27, 12, 'VIP', 'VIP', '');

-- --------------------------------------------------------

--
-- Table structure for table `it.catalog_deparment`
--

DROP TABLE IF EXISTS `it.catalog_deparment`;
CREATE TABLE IF NOT EXISTS `it.catalog_deparment` (
  `DeparmentID` int(11) NOT NULL AUTO_INCREMENT,
  `Deparment` varchar(50) NOT NULL,
  `Alias` varchar(10) NOT NULL,
  PRIMARY KEY (`DeparmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it.catalog_deparment`
--

INSERT INTO `it.catalog_deparment` (`DeparmentID`, `Deparment`, `Alias`) VALUES
(1, 'CHINESS STAF', 'CHI'),
(2, 'ENGINEERING', 'ENG'),
(3, 'FINANCE', 'FI'),
(4, 'HUMAN RESOURCES', 'HR'),
(5, 'INFORMATION TECHNOLOGY', 'IT'),
(6, 'LOGISTIC', 'LOG'),
(7, 'PLANNING', 'PLN'),
(8, 'PRODUCTION', 'PROD'),
(9, 'PURCHASING', 'PUR'),
(10, 'QUALITY CONTROL', 'QC'),
(11, 'SMT', 'SMT'),
(12, 'VIP', 'VIP'),
(13, 'WAREHOUSE', 'WH');

-- --------------------------------------------------------

--
-- Table structure for table `it.catalog_users`
--

DROP TABLE IF EXISTS `it.catalog_users`;
CREATE TABLE IF NOT EXISTS `it.catalog_users` (
  `UserName` varchar(50) NOT NULL,
  `AreaDeparmentID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it.catalog_users`
--

INSERT INTO `it.catalog_users` (`UserName`, `AreaDeparmentID`, `Name`, `Password`, `Email`) VALUES
('drico', 14, 'Dario Rico', 'dreamer', 'drico@tcl.com'),
('TBarrios', 14, 'Tania Barrios', 'Sanyo123', 'tbarrios@tcl.com'),
('pverdugo', 14, 'Paul Verdugo', 'Sanyo123', 'pverdugo@tcl.com'),
('fdelgado', 14, 'Fernando Delgado', 'Sanyo123', 'fdelgado@tcl.com'),
('mcanales', 2, 'Marcos Canales', 'Sanyo123', 'mcanales@tcl.com'),
('aarellano', 17, 'Alma Arellano', 'Sanyo123', 'aarellano@tcl.com');

-- --------------------------------------------------------

--
-- Table structure for table `it_catalog_users`
--

DROP TABLE IF EXISTS `it_catalog_users`;
CREATE TABLE IF NOT EXISTS `it_catalog_users` (
  `UserName` varchar(50) NOT NULL,
  `AreaDeparmentID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_catalog_users`
--

INSERT INTO `it_catalog_users` (`UserName`, `AreaDeparmentID`, `Name`, `Password`, `Email`) VALUES
('drico', 14, 'Dario Rico', 'dreamer', 'drico@tcl.com'),
('TBarrios', 14, 'Tania Barrios', 'Sanyo123', 'tbarrios@tcl.com'),
('pverdugo', 14, 'Paul Verdugo', 'Sanyo123', 'pverdugo@tcl.com'),
('fdelgado', 14, 'Fernando Delgado', 'Sanyo123', 'fdelgado@tcl.com'),
('mcanales', 2, 'Marcos Canales', 'Sanyo123', 'mcanales@tcl.com'),
('aarellano', 17, 'Alma Arellano', 'Sanyo123', 'aarellano@tcl.com');

-- --------------------------------------------------------

--
-- Table structure for table `it_cat_accesscontrol`
--

DROP TABLE IF EXISTS `it_cat_accesscontrol`;
CREATE TABLE IF NOT EXISTS `it_cat_accesscontrol` (
  `AccControlID` int(11) NOT NULL,
  `AccessControl` varchar(50) NOT NULL,
  `ActLevel` int(11) NOT NULL,
  `Level1` int(11) NOT NULL,
  `Level2` int(11) NOT NULL,
  `Level3` int(11) DEFAULT NULL,
  `Level4` int(11) DEFAULT NULL,
  `WebMenuID` varchar(150) NOT NULL,
  `MenuType` varchar(50) NOT NULL,
  `Icon` varchar(150) NOT NULL,
  PRIMARY KEY (`AccControlID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_cat_accesscontrol`
--

INSERT INTO `it_cat_accesscontrol` (`AccControlID`, `AccessControl`, `ActLevel`, `Level1`, `Level2`, `Level3`, `Level4`, `WebMenuID`, `MenuType`, `Icon`) VALUES
(1, 'Mtto Physical Inventory', 3, 1, 2, NULL, NULL, '', '', ''),
(2, 'Mtto Software Licenses', 3, 1, 2, NULL, NULL, '', '', ''),
(3, 'Mtto Help Desk', 3, 1, 3, NULL, NULL, '', '', ''),
(4, 'Mtto Activities', 3, 1, 4, NULL, NULL, '', '', ''),
(5, 'Mtto Incidents', 3, 5, 6, NULL, NULL, '', '', ''),
(6, 'Report Incidents', 3, 5, 6, NULL, NULL, '', '', ''),
(7, 'Mtto Drivers', 3, 5, 7, NULL, NULL, '', '', ''),
(8, 'Report Drivers', 3, 5, 7, NULL, NULL, '', '', ''),
(9, 'Over Time Input', 3, 8, 9, NULL, NULL, '', '', ''),
(10, 'Report OverTime', 3, 8, 9, NULL, NULL, '', '', ''),
(11, 'Report Cafetery', 3, 8, 10, NULL, NULL, '', '', ''),
(12, 'Send payroll receipts', 3, 8, 11, NULL, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `it_cat_areadeparment`
--

DROP TABLE IF EXISTS `it_cat_areadeparment`;
CREATE TABLE IF NOT EXISTS `it_cat_areadeparment` (
  `AreaDeparmentID` int(11) NOT NULL,
  `DeparmentID` int(11) NOT NULL,
  `AreaDeparment` varchar(50) NOT NULL,
  `Alias` varchar(10) NOT NULL,
  `Comments` varchar(100) NOT NULL,
  PRIMARY KEY (`AreaDeparmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_cat_areadeparment`
--

INSERT INTO `it_cat_areadeparment` (`AreaDeparmentID`, `DeparmentID`, `AreaDeparment`, `Alias`, `Comments`) VALUES
(1, 1, 'CHINESS STAFF', 'CHI', ''),
(2, 2, 'BILL OF MATERIAL', 'BOM', ''),
(3, 2, 'INDUSTRIAL ENGINEERING', 'IE', ''),
(4, 2, 'PRODUCT ENGINEERING', 'PE', ''),
(5, 2, 'TESTING ENGINENEERING', 'TE', ''),
(6, 2, 'MAINTENANCE', 'MTTO', ''),
(7, 3, 'PAYROLL', 'PAY', ''),
(8, 3, 'ACCOUNTING', 'ACC', ''),
(9, 3, 'FINANCE', 'FI', ''),
(10, 4, 'HUMAN RESOURCE', 'HR', ''),
(11, 4, 'TRAINNING', 'TRA', ''),
(12, 4, 'SECURITY', 'SEC', ''),
(13, 4, 'ENFERMERY', 'ENF', ''),
(14, 5, 'INFORMATION TECHNOLOGY', 'IT', ''),
(15, 6, 'LOGISTIC', 'LOG', ''),
(16, 7, 'PLANNING', 'PLN', ''),
(17, 8, 'FINAL ASSEMBLY', 'FA', ''),
(18, 8, 'LCM ASSEMBLY', 'LCM', ''),
(19, 13, 'WAREHOUSE', 'WH', ''),
(20, 13, 'RECEIVING', 'REC', ''),
(21, 13, 'SHIPPING', 'SHI', ''),
(22, 9, 'PURCHASING', 'PUR', ''),
(23, 10, 'INPECTION QUALITY CONTROL', 'IQC', ''),
(24, 10, 'QUALITY CONTROL', 'QA', ''),
(25, 10, 'QUALITY ASSURANCE', 'QA', ''),
(26, 11, 'SMT', 'SMT', ''),
(27, 12, 'VIP', 'VIP', '');

-- --------------------------------------------------------

--
-- Table structure for table `it_cat_deparment`
--

DROP TABLE IF EXISTS `it_cat_deparment`;
CREATE TABLE IF NOT EXISTS `it_cat_deparment` (
  `DeparmentID` int(11) NOT NULL AUTO_INCREMENT,
  `Deparment` varchar(50) NOT NULL,
  `Alias` varchar(10) NOT NULL,
  PRIMARY KEY (`DeparmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_cat_deparment`
--

INSERT INTO `it_cat_deparment` (`DeparmentID`, `Deparment`, `Alias`) VALUES
(1, 'CHINESS STAF', 'CHI'),
(2, 'ENGINEERING', 'ENG'),
(3, 'FINANCE', 'FI'),
(4, 'HUMAN RESOURCES', 'HR'),
(5, 'INFORMATION TECHNOLOGY', 'IT'),
(6, 'LOGISTIC', 'LOG'),
(7, 'PLANNING', 'PLN'),
(8, 'PRODUCTION', 'PROD'),
(9, 'PURCHASING', 'PUR'),
(10, 'QUALITY CONTROL', 'QC'),
(11, 'SMT', 'SMT'),
(12, 'VIP', 'VIP'),
(13, 'WAREHOUSE', 'WH');

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
('01', 'IT', 1, 'SUB', '', '', NULL, NULL, '', '', 'menu-icon fa fa-desktop', '#'),
('01-01-01', 'Mtto Physical Inventory', 3, 'OPT', '01', '01-01', NULL, NULL, '', '', '', 'index.html'),
('01-01-02', 'Mtto Software Licenses', 3, 'OPT', '01', '01-01', NULL, NULL, '', '', '', 'index.html'),
('01-02', 'HELPDESK', 2, 'SUB', '01', '', NULL, NULL, '', '', '', '#'),
('01-02-1', 'Mtto Activities', 3, 'OPT', '01', '01-02', NULL, NULL, '', '', '', 'index.html'),
('01-03', 'CONTROL ACTIVITIES', 2, 'SUB', '01', '', NULL, NULL, '', '', '', '#'),
('01-03-01', 'Mtto Activities', 3, 'OPT', '01', '01-03', NULL, NULL, '', '', '', 'index.html'),
('02', 'SECURITY', 1, 'SUB', '02', '', NULL, NULL, '', '', '', '#'),
('02-01', 'CONTROL INCIDENTS', 2, 'SUB', '02', '', NULL, NULL, '', '', '', '#'),
('02-01-01', 'Report Incidents', 3, 'OPT', '02', '02-01', NULL, NULL, '', '', '', 'index.html'),
('02-01-02', 'Mtto Incidents', 3, 'OPT', '02', '02-01', NULL, NULL, '', '', '', 'index.html'),
('02-02', 'DRIVERS CONTROL', 2, 'SUB', '02', '', NULL, NULL, '', '', '', '#'),
('02-02-01', 'Mtto Drivers', 3, 'OPT', '02', '02-02', NULL, NULL, '', '', '', 'index.html'),
('02-02-02', 'Report Drivers', 3, 'OPT', '02', '02-02', NULL, NULL, '', '', '', 'index.html'),
('03', 'PAYROLL', 1, 'SUB', '', '', NULL, NULL, '', '', '', '#'),
('03-01', 'CONTROL OVERTIME', 2, 'SUB', '03', '', NULL, NULL, '', '', '', '#'),
('03-01-01', 'OverTime Input', 3, 'OPT', '03', '03-01', NULL, NULL, '', '', '', 'index.html'),
('03-01-02', 'Overtime Report', 3, 'OPT', '03', '03-01', NULL, NULL, '', '', '', 'index.html'),
('03-02', 'CONTROL CAFETERY', 2, 'SUB', '03', '', NULL, NULL, '', '', '', '#'),
('03-02-01', 'Cafetery Report', 3, 'OPT', '03', '03-02', NULL, NULL, '', '', '', 'index.html'),
('03-03', 'CONTROL RECEIPTS', 2, 'SUB', '03', '', NULL, NULL, '', '', '', '#'),
('03-03-01', 'Send payroll receipts', 3, 'OPT', '03', '03-03', NULL, NULL, '', '', '', 'index.html'),
('00', 'DASH', 1, 'MENU', ' ', ' ', NULL, NULL, ' ', ' ', 'menu-icon fa fa-tachometer', 'Dash.html');

-- --------------------------------------------------------

--
-- Table structure for table `it_cat_useracccontrol`
--

DROP TABLE IF EXISTS `it_cat_useracccontrol`;
CREATE TABLE IF NOT EXISTS `it_cat_useracccontrol` (
  `UserID` varchar(50) NOT NULL,
  `AccControlID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_cat_useracccontrol`
--

INSERT INTO `it_cat_useracccontrol` (`UserID`, `AccControlID`) VALUES
('drico', 8),
('drico', 5),
('pverdugo', 4),
('pverdugo', 10),
('fdelgado', 5),
('fdelgado', 12),
('drico', 10),
('drico', 9);

-- --------------------------------------------------------

--
-- Table structure for table `it_cat_webmenus`
--

DROP TABLE IF EXISTS `it_cat_webmenus`;
CREATE TABLE IF NOT EXISTS `it_cat_webmenus` (
  `MenuID` int(11) NOT NULL,
  `Menu` varchar(50) NOT NULL,
  `Level` int(11) NOT NULL,
  `ParentMenuID` int(11) NOT NULL,
  PRIMARY KEY (`MenuID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_cat_webmenus`
--

INSERT INTO `it_cat_webmenus` (`MenuID`, `Menu`, `Level`, `ParentMenuID`) VALUES
(1, 'IT', 1, 0),
(2, 'INVENTORY', 2, 1),
(3, 'HELPDESK', 2, 1),
(4, 'CONTROL ACTIVITIES', 2, 1),
(5, 'SECURITY', 1, 0),
(6, 'CONTROL INCIDENTS', 2, 5),
(7, 'DRIVERS CONTROL', 2, 5),
(8, 'PAYROLL', 1, 0),
(9, 'CONTROL OVERTIME', 2, 8),
(10, 'CONTROL CAFETERY', 2, 8),
(11, 'CONTROL RECEIPTS PAYROLL', 2, 8);

-- --------------------------------------------------------

--
-- Stand-in structure for view `webmenus`
--
DROP VIEW IF EXISTS `webmenus`;
CREATE TABLE IF NOT EXISTS `webmenus` (
`OptionID` varchar(50)
,`OptionName` varchar(100)
,`MenuType` varchar(10)
,`ActLevel` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `webmenus`
--
DROP TABLE IF EXISTS `webmenus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `webmenus`  AS  select `it_cat_menustemp`.`OptionID` AS `OptionID`,`it_cat_menustemp`.`OptionName` AS `OptionName`,`it_cat_menustemp`.`MenuType` AS `MenuType`,`it_cat_menustemp`.`ActLevel` AS `ActLevel` from `it_cat_menustemp` where (`it_cat_menustemp`.`OptionID` in ('01-01-01','01-01-02','01-03-01','02-01-02','02-01-01','03-01-01','03-01-02')) union select `it_cat_menustemp`.`OptionID` AS `OptionID`,`it_cat_menustemp`.`OptionName` AS `OptionName`,`it_cat_menustemp`.`MenuType` AS `MenuType`,`it_cat_menustemp`.`ActLevel` AS `ActLevel` from `it_cat_menustemp` where `it_cat_menustemp`.`OptionID` in (select distinct `it_cat_menustemp`.`Level1` from `it_cat_menustemp` where (`it_cat_menustemp`.`OptionID` in ('01-01-01','01-01-02','01-03-01','02-01-02','02-01-01','03-01-01','03-01-02'))) union select `it_cat_menustemp`.`OptionID` AS `OptionID`,`it_cat_menustemp`.`OptionName` AS `OptionName`,`it_cat_menustemp`.`MenuType` AS `MenuType`,`it_cat_menustemp`.`ActLevel` AS `ActLevel` from `it_cat_menustemp` where `it_cat_menustemp`.`OptionID` in (select distinct `it_cat_menustemp`.`Level2` from `it_cat_menustemp` where (`it_cat_menustemp`.`OptionID` in ('01-01-01','01-01-02','01-03-01','02-01-02','02-01-01','03-01-01','03-01-02'))) union select `it_cat_menustemp`.`OptionID` AS `OptionID`,`it_cat_menustemp`.`OptionName` AS `OptionName`,`it_cat_menustemp`.`MenuType` AS `MenuType`,`it_cat_menustemp`.`ActLevel` AS `ActLevel` from `it_cat_menustemp` where `it_cat_menustemp`.`OptionID` in (select distinct `it_cat_menustemp`.`Level3` from `it_cat_menustemp` where (`it_cat_menustemp`.`OptionID` in ('01-01-01','01-01-02','01-03-01','02-01-02','02-01-01','03-01-01','03-01-02'))) union select `it_cat_menustemp`.`OptionID` AS `OptionID`,`it_cat_menustemp`.`OptionName` AS `OptionName`,`it_cat_menustemp`.`MenuType` AS `MenuType`,`it_cat_menustemp`.`ActLevel` AS `ActLevel` from `it_cat_menustemp` where `it_cat_menustemp`.`OptionID` in (select distinct `it_cat_menustemp`.`Level4` from `it_cat_menustemp` where (`it_cat_menustemp`.`OptionID` in ('01-01-01','01-01-02','01-03-01','02-01-02','02-01-01','03-01-01','03-01-02'))) order by `OptionID` ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
