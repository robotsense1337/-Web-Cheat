
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2014 at 10:42 AM
-- Server version: 5.1.69
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u208684503_est`
--

-- --------------------------------------------------------

--
-- Table structure for table `BuyItem`
--

CREATE TABLE IF NOT EXISTS `BuyItem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Programe` varchar(100) NOT NULL,
  `Point` int(11) NOT NULL,
  `Day` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `BuyItem`
--

INSERT INTO `BuyItem` (`id`, `Programe`, `Point`, `Day`) VALUES
(1, 'PBHKTEST', 50, '3'),
(2, 'PBHKTEST', 90, '7'),
(29, 'PBHKTEST', 150, '15'),
(24, 'WarZ', 50, '1'),
(25, 'WarZ', 90, '3'),
(23, 'WarZ', 150, '7');

-- --------------------------------------------------------

--
-- Table structure for table `Download`
--

CREATE TABLE IF NOT EXISTS `Download` (
  `id_download` int(11) NOT NULL AUTO_INCREMENT,
  `Programe` varchar(100) NOT NULL DEFAULT 'Name',
  `link` varchar(100) NOT NULL DEFAULT '#',
  `link2` varchar(100) NOT NULL DEFAULT '#',
  `Status` enum('Online','Offline','Soon') NOT NULL DEFAULT 'Online',
  `Name` varchar(100) NOT NULL DEFAULT 'NamePro',
  `Version` varchar(100) NOT NULL DEFAULT '1',
  `LinkYouTube` varchar(100) NOT NULL,
  `Support` varchar(100) NOT NULL DEFAULT 'Windows XP, 7, 8 ทั้ง 32 บิต และ 64 บิต',
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Download`
--

INSERT INTO `Download` (`id_download`, `Programe`, `link`, `link2`, `Status`, `Name`, `Version`, `LinkYouTube`, `Support`) VALUES
(1, 'PBHKTEST', 'http://estcheats.hol.es/download/HackkillPB.zip', 'HackkillPB.zip', 'Online', 'Hackkill PB', '1', '', 'Windows XP, 7, 8 ทั้ง 32 บิต และ 64 บิต'),
(2, 'WarZ', '#', '#', 'Online', 'Warz Survivalz VIP', '1', '', 'Windows XP, 7, 8 ทั้ง 32 บิต และ 64 บิต');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `ID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `List` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IP` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID`, `List`, `Date`, `IP`) VALUES
('47', 'LOGIN PB HK', '30/11/2014 18:24:24', '171.5.145.209'),
('47', 'LOGIN PB HK', '30/11/2014 18:23:47', '171.5.145.209'),
('47', 'LOGIN PB HK', '30/11/2014 18:22:35', '171.5.145.209'),
('47', 'LOGIN PB HK', '30/11/2014 17:53:14', '171.5.145.209'),
('1', 'LOGIN PB HK', '30/11/2014 17:45:37', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 17:42:41', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 17:13:59', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 17:12:37', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 17:12:35', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 17:12:06', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 17:11:27', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 17:10:51', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 17:10:08', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 17:09:41', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 16:55:19', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 16:53:24', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 16:51:51', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 16:47:02', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 16:46:40', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 16:24:17', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 16:09:24', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 16:02:55', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 13:45:20', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 13:14:04', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 12:41:23', '49.230.162.205'),
('1', 'LOGIN PB HK', '30/11/2014 18:49:11', '171.5.250.153'),
('1', 'LOGIN PB HK', '30/11/2014 18:50:37', '171.5.250.153'),
('52', 'LOGIN PB HK', '30/11/2014 19:12:59', '171.5.251.104'),
('52', 'LOGIN PB HK', '30/11/2014 19:18:34', '171.5.251.46'),
('1', 'LOGIN PB HK', '01/12/2014 22:53:36', '1.2.209.255'),
('1', 'LOGIN PB HK', '03/12/2014 16:32:44', '49.230.154.2'),
('1', 'LOGIN PB HK', '03/12/2014 16:35:47', '49.230.154.2'),
('1', 'LOGIN PB HK', '03/12/2014 16:51:32', '49.230.154.2');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` enum('admin','member') NOT NULL DEFAULT 'member',
  `hwid` varchar(100) NOT NULL,
  `hwid_time` varchar(100) NOT NULL,
  `point` int(10) NOT NULL,
  `PBHKTEST` varchar(100) NOT NULL DEFAULT '0',
  `WarZ` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `User`, `Password`, `email`, `status`, `hwid`, `hwid_time`, `point`, `PBHKTEST`, `WarZ`) VALUES
(1, 'admin', '084203', 'admin@estcheats.com', 'admin', 'A81A7A5A769DCACF7FA4C71666E06', '0', 99250, '10-12-2014 12:31:23', '03-12-2014 17:13:39'),
(45, 'tonz', '123456', 'tonzsm@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(13, 'FARMPOPONE', '0901928694', 'farm0009@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(14, 'jockloveyo', '20793346', 'jockloveyou1@gmail.com', 'member', '0', '0', 0, '0', '0'),
(15, 'za002', '123456', 'sdfhdfdf@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(16, 'eoomopgoo9', '0982065538', 'jdh@dklh.com', 'member', '0', '0', 0, '0', '0'),
(17, 'Kemwasan', '0934433016', 'kemkiohot_1@hotamil.com', 'member', '0', '0', 0, '0', '0'),
(18, 'aekapojn', '5101063045', 'lancer_6974@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(19, 'longza2023', '25122511', 'longza2023@gmail.com', 'member', '0', '0', 0, '0', '0'),
(20, 'aokzaop12', 'opzaza02', 'aokzazajsyhh@gmail.com', 'member', '0', '0', 0, '0', '0'),
(21, 'tumer191', '0854347600', 'jsdj@klsfwf.com', 'member', '0', '0', 0, '0', '0'),
(22, 'canboy085', 'za043236026', 'soomet2014@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(23, 'Cyboxzs', '029552313', 'song_0025@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(24, 'sniper123', '123456', 'sniperkondungz@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(25, '123123', '123123', '123123@123.com', 'member', '0', '0', 0, '0', '0'),
(26, 'assd123ss', '0881085759', 'assd123456oo@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(27, 'lamnokza13', '123456789za', 'lamnokza20@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(28, 'ever', '0805196535', 'ever@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(29, 'putavun', 'putavun', 'putavun@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(30, 'sunopo1', '30819115', 'sunopo3@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(31, 'darkmory', '69699692', 'mocyc_jz@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(32, 'baszeedza1', '0899022676', 'bprogameza@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(33, 'lineios', '0823962072', 'pheeraphong.110@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(34, 'hacker', 'hacker', 'hacker@gmail.com', 'member', '0', '0', 450, '0', '0'),
(35, 'toneza01', '0884351149', 'gamosisi@gmail.com', 'member', '0', '0', 0, '0', '0'),
(36, 'itaitl', '0989909175', 'nongitaitl@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(37, 'moongurn', '0839414955', 'moongurn@hotmail.com', 'member', '0', '0', 0, '0', '0'),
(46, 'opoza', 'opoza', 'opoza@za.com', 'member', '', '0', 0, '0', '0'),
(47, 'henew1125', '123456', 'benz2012xat@hotmail.com', 'member', 'BF7FF035D93D4214E9D9FC60BB445789', '0', 0, '0', '0'),
(48, 'admintong', 'admintong', 'issaratong008@hotmail.com', 'member', '', '', 0, '0', '0'),
(49, 'eamsuperza', 'd7rn14cg', 'eamsuperza@gmail.com', 'member', '', '0', 0, '0', '0'),
(50, 'top123', '085244', 'idpb4@msn.com', 'member', '', '0', 0, '0', '0'),
(51, 'issara002', 'issara002', 'tonglovebee@hotmail.com', 'member', '', '0', 0, '0', '0'),
(52, 'famemoza', '123', 'fame@hotmail.com', 'member', '7016D93D293290FC2A862CD890A1A0A8', '0', 0, '03-12-2014 19:12:27', '0'),
(53, 'natophitz', 'z0814524166a', 'natophitz@hotmail.com', 'member', '', '0', 0, '0', '0'),
(54, 'xcrosz123z', 'xcrosz123456', 'guitar_rockmetal@hotmail.co.th', 'member', '', '0', 0, '0', '0'),
(55, 'pavedaf', '15045241', 'dream.patchaya@hotmail.com', 'member', '', '0', 0, '0', '0'),
(56, '12345678', '12345678', 'xgsd@hotmail.com', 'member', '', '0', 0, '0', '0'),
(58, 'student61020', '123', 'mahabom0258@hotmail.co.th', 'member', '', '', 0, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `Setting`
--

CREATE TABLE IF NOT EXISTS `Setting` (
  `WebName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rehwid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DatePro` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'อัพเดทโปรแกรมล่าสุด 00-00-000',
  `footer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `footer_link` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Setting`
--

INSERT INTO `Setting` (`WebName`, `rehwid`, `DatePro`, `footer`, `footer_link`) VALUES
('ESTCHEATS', '10', '01-12-2014', '© Copyright 2014 | ESTCHEATS | System All By EST ZA', 'https://www.facebook.com/ESTCheats.Hacker');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
