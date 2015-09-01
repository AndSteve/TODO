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
-- Table structure for table `GroupTodo`
--

CREATE TABLE `GroupTodo` (
  `id` int(11) NOT NULL COMMENT 'unique ID, auto-increments',
  `user_id` int(11) NOT NULL COMMENT 'user_id corresponds to userlist',
  `title` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `dueDate` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `priority` enum('High','Medium','Low','') NOT NULL COMMENT 'high,medium,or low'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GroupTodo`
--
ALTER TABLE `GroupTodo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `GroupTodo`
--
ALTER TABLE `GroupTodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique ID, auto-increments';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;