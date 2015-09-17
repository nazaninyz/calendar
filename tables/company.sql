-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2015 at 10:14 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence`
--

CREATE TABLE IF NOT EXISTS `absence` (
  `kind` varchar(15) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absence`
--

INSERT INTO `absence` (`kind`, `id`) VALUES
('vacation', 5),
('illness', 4),
('personal', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`password`, `username`, `id`, `user_id`) VALUES
('nazaninjan', 'nazaninyz', 1, 'nazanin.yz94@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userabsence`
--

CREATE TABLE IF NOT EXISTS `userabsence` (
  `datee` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `day` int(2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `abs_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userabsence`
--

INSERT INTO `userabsence` (`datee`, `id`, `month`, `year`, `day`, `user_id`, `abs_id`) VALUES
('09/17/2015', 1, 9, 2015, 17, 1, 4),
('01/09/2015', 2, 1, 2015, 9, 1, 6),
('01/14/2015', 3, 1, 2015, 14, 1, 6),
('01/24/2015', 4, 1, 2015, 24, 1, 6),
('01/17/2015', 5, 1, 2015, 17, 1, 4),
('01/19/2015', 6, 1, 2015, 19, 1, 4),
('01/03/2015', 7, 1, 2015, 3, 1, 4),
('01/11/2015', 8, 1, 2015, 11, 1, 5),
('01/02/2015', 9, 1, 2015, 2, 1, 5),
('01/31/2015', 10, 1, 2015, 31, 1, 5),
('01/27/2015', 11, 1, 2015, 27, 1, 5),
('12/19/2015', 12, 12, 2015, 19, 1, 6),
('12/13/2015', 13, 12, 2015, 13, 1, 5),
('09/14/2015', 14, 9, 2015, 14, 1, 4),
('10/02/2015', 15, 10, 2015, 2, 1, 6),
('09/19/2015', 16, 9, 2015, 19, 1, 4),
('09/13/2015', 17, 9, 2015, 13, 1, 4),
('09/04/2015', 18, 9, 2015, 4, 1, 4),
('09/05/2015', 19, 9, 2015, 5, 1, 4),
('09/03/2015', 20, 9, 2015, 3, 1, 4),
('09/09/2015', 21, 9, 2015, 9, 1, 4),
('09/07/2015', 22, 9, 2015, 7, 1, 6),
('09/26/2015', 23, 9, 2015, 26, 1, 4),
('09/12/2015', 24, 9, 2015, 12, 1, 4),
('09/01/2015', 25, 9, 2015, 1, 1, 4),
('09/02/2015', 26, 9, 2015, 2, 1, 4),
('09/06/2015', 27, 9, 2015, 6, 1, 4),
('09/08/2015', 28, 9, 2015, 8, 1, 4),
('09/10/2015', 29, 9, 2015, 10, 1, 4),
('09/30/2015', 30, 9, 2015, 30, 1, 4),
('09/29/2015', 31, 9, 2015, 29, 1, 4),
('09/27/2015', 32, 9, 2015, 27, 1, 4),
('09/28/2015', 33, 9, 2015, 28, 1, 4),
('09/25/2015', 34, 9, 2015, 25, 1, 4),
('09/24/2015', 35, 9, 2015, 24, 1, 4),
('09/23/2015', 36, 9, 2015, 23, 1, 4),
('09/22/2015', 37, 9, 2015, 22, 1, 4),
('09/21/2015', 38, 9, 2015, 21, 1, 4),
('09/11/2015', 39, 9, 2015, 11, 1, 6),
('09/16/2015', 40, 9, 2015, 16, 1, 4),
('10/10/2015', 41, 10, 2015, 10, 1, 4),
('10/08/2015', 42, 10, 2015, 8, 1, 4),
('10/25/2015', 43, 10, 2015, 25, 1, 4),
('08/05/2015', 44, 8, 2015, 5, 1, 4),
('08/29/2015', 45, 8, 2015, 29, 1, 4),
('08/23/2015', 46, 8, 2015, 23, 1, 5),
('07/15/2015', 47, 7, 2015, 15, 1, 5),
('07/16/2015', 48, 7, 2015, 16, 1, 6),
('07/05/2015', 49, 7, 2015, 5, 1, 4),
('02/07/2015', 50, 2, 2015, 7, 1, 4),
('02/14/2015', 51, 2, 2015, 14, 1, 6),
('02/22/2015', 52, 2, 2015, 22, 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kind` (`kind`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `password` (`password`(15)),
  ADD KEY `username` (`username`);

--
-- Indexes for table `userabsence`
--
ALTER TABLE `userabsence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datee` (`datee`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`),
  ADD KEY `day` (`day`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `abs_id` (`abs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absence`
--
ALTER TABLE `absence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userabsence`
--
ALTER TABLE `userabsence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
