-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 02:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `adopt_id` int(10) NOT NULL,
  `adopt_name` varchar(100) NOT NULL,
  `adopt_age` int(20) NOT NULL,
  `adopt_country` varchar(100) NOT NULL,
  `adopt_img` text NOT NULL,
  `adopt_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`adopt_id`, `adopt_name`, `adopt_age`, `adopt_country`, `adopt_img`, `adopt_status`) VALUES
(1, 'Amelia', 5, 'Haiti', 'adopt3.jpg', 'Available'),
(2, 'Peter', 10, 'Afghanistan', 'adopt8.jpg', 'Available'),
(3, 'Justin Aquino', 5, 'Philippines', 'adopt5.jpg', 'Adopted'),
(4, 'Inaya Alvi', 8, 'Pakistan', 'adopt7.jpg', 'Available'),
(5, 'Khairil', 6, 'Indonesia', 'adopt6.jpg', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `organize_id` int(11) NOT NULL,
  `organize_name` varchar(100) NOT NULL,
  `organize_donation` varchar(100) NOT NULL,
  `organize_person` varchar(100) NOT NULL,
  `organize_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organize_id`, `organize_name`, `organize_donation`, `organize_person`, `organize_email`) VALUES
(1, 'charity: water', 'RM240,000', 'Cherryn Tang', 'cherrynT@gmail.com'),
(2, 'E-charity', 'RM55,000', 'Edward Henry', 'edHenry@outlook.com'),
(3, 'globalLove', 'RM199,000', 'Albert Goh', 'albert@hotmail.com'),
(4, 'betterUs', 'RM500,600', 'Justin Neo', 'justNeo@gmail.com'),
(5, 'red nose', 'RM2,480,000', 'Jaden Smith', 'jaden@gmail.com'),
(6, 'WorldCare', 'RM3,220,000', 'Bryan Stark', 'bryanST@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Eva', 'evateng0124@gmail.com', '123456'),
(2, 'Taylors', 'eva0124@gmail.com', '236726376');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`adopt_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`organize_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `adopt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `organize_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
