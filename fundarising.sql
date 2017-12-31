-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 10:28 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundarising`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogid` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `blogdate` date NOT NULL,
  `blogdetails` varchar(800) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `fundid` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `funddetails` varchar(400) NOT NULL,
  `raised` float NOT NULL DEFAULT '0',
  `goal` float NOT NULL,
  `userid` int(11) NOT NULL,
  `fund_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`fundid`, `title`, `funddetails`, `raised`, `goal`, `userid`, `fund_image`) VALUES
(6, 'Idea Prototyping (Smart C', 'asdfsdf', 50, 234, 1, '24837217_727861427423122_5457313861120571103_o.jpg'),
(21, 'Idea Prototyping (Smart C', 'Idea Prototyping (Smart Campus) AIUB CS FEST 2017 RUNNER UP\r\nIdea Prototyping (Smart Campus) AIUB CS FEST 2017 RUNNER UP\r\nIdea Prototyping (Smart Campus) AIUB CS FEST 2017 RUNNER UP\r\nIdea Prototyping (Smart Campus) AIUB CS FEST 2017 RUNNER UP', 250, 500, 45, '24852392_1849105678487413_6191755756723055106_n.jpg'),
(22, 'HelloHelloHello', 'Hello Hello HelloHelloHelloHello Hello HelloHelloHelloHello Hello HelloHelloHello\r\nHello Hello HelloHelloHelloHello Hello HelloHelloHelloHello Hello HelloHelloHelloHello Hello HelloHelloHelloHello Hello HelloHelloHello', 465, 555, 1, '24958984_1954875837886041_726044470996169084_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_logout` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `last_login`, `last_logout`) VALUES
(28, '0000-00-00 00:00:00', NULL),
(30, '0000-00-00 00:00:00', NULL),
(31, '0000-00-00 00:00:00', NULL),
(31, '0000-00-00 00:00:00', NULL),
(31, '0000-00-00 00:00:00', NULL),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `userid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`userid`, `name`, `email`, `username`, `password`) VALUES
(1, 'sun', 'suncisco@gmail.com', 'suncisco', '12345'),
(28, 'sdf', 'sdf@gmail.com', 'gaa', '123456'),
(30, 'sdf', 'sdf@gmail.com', 'jjj', '123456'),
(31, 'sdf', 'sdf@gmail.com', 'jjjs', '123456'),
(34, 'sdf', 'sdf@gmail.com', 'yyy', '123456'),
(42, 'sdf', 'sdf@gmail.com', 'hh', '123456'),
(43, 'sdf', 'sdf@gmail.com', 'sd', '123456'),
(44, 'sdf', 'sdf@gmail.com', 'suncisco123', '123456'),
(45, 'Mohammad Razib Hossain Shuvo', 'nightshuvo@gmail.com', 'sdsdfdsf', '123456'),
(46, 'Sabique', 'abs@gmail.com', 'sabiq', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`fundid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `fundid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `persons` (`userid`);

--
-- Constraints for table `fund`
--
ALTER TABLE `fund`
  ADD CONSTRAINT `fund_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `persons` (`userid`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `persons` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
