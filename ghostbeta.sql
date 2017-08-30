-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 03:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghostbeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogin`
--

CREATE TABLE `blogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `extra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogin`
--

INSERT INTO `blogin` (`id`, `username`, `status`, `extra`) VALUES
(40, 'SachKaha', 0, 0),
(41, 'poop', 1, 0),
(42, 'lol', 1, 0),
(43, 'Keerat', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `chatid` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL,
  `eb` varchar(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `message`, `receiver`, `chatid`, `status`, `eb`, `date`) VALUES
(42, 'nikhilChoduHai', 'poop card\n', 'poop', 'nikhilChoduHaipoop', 'r', 'false', '2017-08-28 09:03:52'),
(43, 'nikhilChoduHai', 'suuusuuusuuuu\n', 'poop', 'nikhilChoduHaipoop', 'r', 'false', '2017-08-28 09:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `rlogin`
--

CREATE TABLE `rlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rlogin`
--

INSERT INTO `rlogin` (`id`, `username`, `position`) VALUES
(32, 'nikhilChoduHai', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogin`
--
ALTER TABLE `blogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rlogin`
--
ALTER TABLE `rlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogin`
--
ALTER TABLE `blogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `rlogin`
--
ALTER TABLE `rlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
