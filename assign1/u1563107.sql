-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 11:21 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1563107`
--

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `Name`, `Type`) VALUES
(1, 'Cycling', 'Sport'),
(2, 'Musician', 'Challenge'),
(3, 'Pioneer', 'Activity');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `year` smallint(6) NOT NULL,
  `duration` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `title`, `year`, `duration`) VALUES
(1, 'Jaws', 1975, 124),
(2, 'Winter''s Bone', 2010, 100),
(3, 'Do The Right Thing', 1989, 120),
(4, 'Mean Girls', 2004, 97),
(5, 'The Godfather', 1972, 177),
(6, 'Spirited Away', 2001, 124),
(7, 'The Thing', 1982, 109),
(8, 'The Incredibles', 2004, 115),
(9, 'Dangerous Minds', 1995, 99),
(10, 'Inception', 2004, 108),
(11, 'Donnie Darko', 2001, 113);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Meeting_Night` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `Name`, `Meeting_Night`) VALUES
(1, '5th Huddersfield', 'Tuesday'),
(2, '2nd Halifax', 'Monday'),
(3, '7th Leeds', 'Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `scouts`
--

CREATE TABLE `scouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Group_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scouts`
--

INSERT INTO `scouts` (`id`, `First_Name`, `Last_Name`, `Date_Of_Birth`, `Group_id`) VALUES
(1, 'John', 'Frost', '1999-02-28', 3),
(2, 'Beth', 'Compton', '1999-05-10', 1),
(3, 'Hannah', 'Butcher', '2002-07-12', 2),
(4, 'Jake', 'Pacey', '2001-04-23', 3),
(5, 'Mark', 'Scott', '2000-09-05', 2);

-- --------------------------------------------------------

--
-- Table structure for table `scout_badge`
--

CREATE TABLE `scout_badge` (
  `scout_id` int(10) UNSIGNED NOT NULL,
  `badge_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scout_badge`
--

INSERT INTO `scout_badge` (`scout_id`, `badge_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3),
(3, 3),
(4, 2),
(5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scouts`
--
ALTER TABLE `scouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scout_badge`
--
ALTER TABLE `scout_badge`
  ADD PRIMARY KEY (`scout_id`,`badge_id`),
  ADD KEY `fk_scout_group_groups_group_id` (`badge_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `scouts`
--
ALTER TABLE `scouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `scout_badge`
--
ALTER TABLE `scout_badge`
  ADD CONSTRAINT `fk_scout_group_groups_group_id` FOREIGN KEY (`badge_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `fk_scout_group_scouts_scout_id` FOREIGN KEY (`scout_id`) REFERENCES `scouts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
