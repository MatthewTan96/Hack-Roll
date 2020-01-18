-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2020 at 08:54 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `character_info`
--

DROP TABLE IF EXISTS `character_info`;
CREATE TABLE IF NOT EXISTS `character_info` (
  `username` varchar(100) NOT NULL,
  `character_name` varchar(20) NOT NULL,
  `class` text NOT NULL,
  `hp` int(11) NOT NULL,
  `mana` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `defence` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='strength';

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

DROP TABLE IF EXISTS `login_credentials`;
CREATE TABLE IF NOT EXISTS `login_credentials` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`username`, `password`) VALUES
('DaEunSucks', 'ABC123'),
('matthewtan96', 'matthewtan96');

-- --------------------------------------------------------

--
-- Table structure for table `weapon_info`
--

DROP TABLE IF EXISTS `weapon_info`;
CREATE TABLE IF NOT EXISTS `weapon_info` (
  `username` varchar(20) NOT NULL,
  `weapon_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `damage` int(11) NOT NULL,
  `durability` int(11) NOT NULL,
  PRIMARY KEY (`username`,`weapon_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
