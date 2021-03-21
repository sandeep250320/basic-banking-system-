-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2021 at 02:19 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(60) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Sandeep Kumar', 'Rishu Raj', '500', '2021-03-19 00:09:23'),
(2, 'Sandeep Kumar', 'Rishu Raj', '500', '2021-03-19 00:12:18'),
(3, 'Rishu Raj', 'Sandeep Kumar', '697', '2021-03-19 10:03:28'),
(4, 'shreya choudhary', 'Muskan raj', '10000', '2021-03-19 10:29:59'),
(5, 'Sandeep Kumar', 'Rishu Raj', '5468', '2021-03-19 10:54:40'),
(6, 'mulchan', 'Mohan kumar', '5400', '2021-03-19 11:11:36'),
(7, 'krishna', 'Rishu Raj', '500', '2021-03-19 11:40:22'),
(8, 'Sandeep Kumar', 'krishna', '1000', '2021-03-19 11:43:35'),
(9, 'Sandeep Kumar', 'Muskan raj', '5000', '2021-03-19 17:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` bigint(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Sandeep Kumar', 'skm23@egmail.com', 49988229),
(2, 'Rishu Raj', 'rish@egmail.com', 1056271),
(3, 'Muskan raj', 'muskan@email.com', 515000),
(4, 'shreya choudhary', 'rkmayil123@gmail.com', 15000),
(5, 'Rohan kumar', 'rohan@gmail.com', 345728),
(6, 'Mohan kumar', 'mohan@gmail.com', 6400),
(7, 'Suryanshu', 'suryanshu@egmail.com', 9500207),
(8, 'krishna', 'krishna@gmail.com', 32500),
(9, 'mulchan', 'mulchan@gmail.com', 95600),
(10, 'ramesh kumar', 'ramesh@gmail.com', 10000);
