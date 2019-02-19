-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2019 at 06:44 AM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `maprr`
--

DROP TABLE IF EXISTS `maprr`;
CREATE TABLE IF NOT EXISTS `maprr` (
  `r_id` varchar(30) NOT NULL,
  `room_number` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maprr`
--

INSERT INTO `maprr` (`r_id`, `room_number`) VALUES
('1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `maprt`
--

DROP TABLE IF EXISTS `maprt`;
CREATE TABLE IF NOT EXISTS `maprt` (
  `r_id` varchar(20) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maprt`
--

INSERT INTO `maprt` (`r_id`, `type`) VALUES
('1', 'FourSeasons'),
('1', 'FourSeasons');

-- --------------------------------------------------------

--
-- Table structure for table `mapur`
--

DROP TABLE IF EXISTS `mapur`;
CREATE TABLE IF NOT EXISTS `mapur` (
  `userid` varchar(20) NOT NULL,
  `r_id` varchar(30) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapur`
--

INSERT INTO `mapur` (`userid`, `r_id`) VALUES
('Billy', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `r_id` varchar(30) NOT NULL,
  `r_chkindt` date NOT NULL,
  `r_chkoutdt` date NOT NULL,
  `r_rooms` int(30) NOT NULL,
  `r_type` varchar(20) NOT NULL,
  `r_spanyreq` varchar(200) NOT NULL,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `r_chkindt` (`r_chkindt`),
  UNIQUE KEY `r_chkoutdt` (`r_chkoutdt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_number` int(20) NOT NULL,
  `r_id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `checkin` varchar(20) DEFAULT NULL,
  `checkout` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`room_number`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_number`, `r_id`, `type`, `checkin`, `checkout`) VALUES
(1, '1', 'FourSeasons', '2019-02-20', '2019-02-25'),
(2, '1', 'FourSeasons', '2019-02-20', '2019-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `tariff`
--

DROP TABLE IF EXISTS `tariff`;
CREATE TABLE IF NOT EXISTS `tariff` (
  `type` varchar(50) NOT NULL,
  `inrsin` varchar(30) NOT NULL,
  `inrdbl` varchar(30) NOT NULL,
  `usdsin` varchar(30) NOT NULL,
  `usddbl` varchar(30) NOT NULL,
  `totroom` int(5) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tariff`
--

INSERT INTO `tariff` (`type`, `inrsin`, `inrdbl`, `usdsin`, `usddbl`, `totroom`) VALUES
('FourSeasons', '1200', '2000', '500', '750', 100),
('Royal Tulip', '950', '1100', '350', '450', 100),
('Sun1 Parow', '550', '1000', '200', '350', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userphone` varchar(20) NOT NULL,
  `useraddress` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `password`, `username`, `useremail`, `userphone`, `useraddress`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin', 'admin'),
('scott', 'scott', 'scott', 'scott', '0216960049', 'travisscottits lit '),
('example', 'example', 'urick example', 'urickesau1@gmail.com', '0216960049', 'urick esau example'),
('justin', 'justin', 'justin justin', 'justin test', '0216960049', 'test test test'),
('example1', 'example', 'urick test', 'testing', '0216960049', 'test'),
('xhanti', 'xhanti', 'xhanti jacob', 'urickesau1@gmail.com', '0216960048', 'xhanti xhanti lorem'),
('guest', 'guest', 'guest guest', 'urickesau1@gmail.com', '0216960049', 'test test'),
('craig', 'craig', 'Craig Matthews', 'craigmatthews@gmail.com', '0216960049', '35 Eleventh Avenue Hazendal Athlone 7764'),
('nashville', '08292585', 'Nashville Clarence James', 'nashvillejames7@gmail.com', '0727446534', '05 celtis close'),
('reaganbeck', 'P@ssw0rd', 'Reagan', 'Beck', '0670809876', '314 Imam Haron Road'),
('James', 'james', 'James Bond', 'jamesbond@gmail.com', '0216960049', '314 Imam Haron Road'),
('chuck ', 'chuck', 'chuck chuck', 'chuck chuck', '0216960048', 'chuck'),
('Tyrone', 'tyrone', 'Tyrone Joubert', 'ty@gmail.com', '0216960048', '314 Imam Haron Road'),
('toni', 'toni', 'toni toni', 'toni@gmail.com', '0216960048', 'toni  toni toni'),
('Makes', 'makes', 'Marlon Makes', 'makes@gmail.com', '0216960048', '314 Imam Haron Road'),
('jlewis', 'jlewis', 'Jay', 'jlewis20296@gmail.com', '0728002905', '72 Kudu Ave\r\nCape Town\r\n7941'),
('chris', 'chris', 'Chris Jacobs', 'urickesau1@gmail.com', '0216960048', '314 Imam Haron Rd'),
('extra', 'extra', 'extra extra', 'urickesau1@gmail.com', '0216960048', '314 Imam Haron Rd'),
('Candice', 'candice', 'Candice Hendricks', 'urickesau1@gmail.com', '0216960048', '314 Imam Haron Rd'),
('', '', '', '', '', ''),
('Johnny', 'johnny', 'Johnny Bravo', 'urickesau1@gmail.com', '0216960048', '314 Imam Haron Rd'),
('Billy', 'billy', 'Billy Double', 'urickesau1@gmail.com', '0216960048', '314 Imam Haron Rd'),
('XhantiGhost', 'ghost', 'Xhantilomzi Rolihlahla Jacob', 'urickesau1@gmail.com', '0216960048', '314 Imam Haron Rd'),
('Daniel', 'daniel', 'Daniel English', 'urickesau1@gmail.com', '0216960048', '314 Imam Haron Rd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
