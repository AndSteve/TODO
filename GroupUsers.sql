-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Sep 01, 2015 at 02:42 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myFirst_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `GroupUsers`
--

CREATE TABLE `GroupUsers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `softDelete` tinyint(4) NOT NULL DEFAULT '0',
  `password` varchar(40) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userLevel` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GroupUsers`
--

INSERT INTO `GroupUsers` (`id`, `email`, `softDelete`, `password`, `firstName`, `lastName`, `userName`, `userLevel`) VALUES
(1, 'tensecondtom@lfz.com', 0, '2f6c6639c4487c7bf12265ebd452097b2c53bef1', 'Tom', 'Tom', 'tensecondtom', 1),
(2, 'bill@microsoft.com', 0, '27bfa6167edabb7196cd467560e04dce7ab4242b', 'Bill', 'Gates', 'microbill', 1),
(3, 'stevejobs@apple.com', 0, 'cc7ea4f5c262f7c1a6ebbfd7e0c5a3aca56cc8c1', 'Steve', 'Jobs', 'applebytes', 1),
(4, 'larrypage@google.com', 0, 'c38e22689824d398db30a2a898e97ba6bc1383a5', 'Larry', 'Page', 'onehundredzeros', 1),
(5, 'steveballmer@microsoft.com', 0, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Steve', 'Ballmer', 'softandbald', 1),
(6, 'markzuckerberg@facebook.com', 0, '4474dbf4b38a3c2fb96dab9e754f958aba697f13', 'Mark', 'Zuckerberg', 'zucker', 1),
(7, 'michaeldell@dell.com', 0, '0567a32c521d5962bb83be125435282693b19af7', 'Michael', 'Dell', 'Dellicious', 1),
(8, 'jeffweiner@linkedin.com', 0, 'eae823738e8bc7fce127014fa05937248c5d296a', 'Jeff', 'Weiner', 'networkit', 1),
(9, 'megwhitman@hp.com', 0, '5e763157bafd93a4b15d95fc1be50633525fd86c', 'Meg', 'Whitman', 'packard', 1),
(10, 'jackma@alibaba.com', 0, '4b8603f74ee434bd9056b8fd8a0382abc9da6b57', 'Jack', 'Ma', 'taobao', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GroupUsers`
--
ALTER TABLE `GroupUsers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `GroupUsers`
--
ALTER TABLE `GroupUsers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;