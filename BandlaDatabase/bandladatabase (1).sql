-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 11:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandladatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandladatab`
--

CREATE TABLE `bandladatab` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `pwd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandladatab`
--

INSERT INTO `bandladatab` (`firstname`, `lastname`, `pwd`) VALUES
('Bandla', 'Ngwenya', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `bandladbtable`
--

CREATE TABLE `bandladbtable` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandladbtable`
--

INSERT INTO `bandladbtable` (`id`, `firstname`, `lastname`, `email`, `gender`, `username`, `pwd`) VALUES
(13, 'Bandla', 'Ngwenya', 'AAW@dog', 'male', 'bandlangwenya', 1234567),
(14, 'VCH,B,', 'LKJN;/LKM', 'AAW@dhbjhas', 'female', 'mncest', 23456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandladbtable`
--
ALTER TABLE `bandladbtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bandladbtable`
--
ALTER TABLE `bandladbtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
