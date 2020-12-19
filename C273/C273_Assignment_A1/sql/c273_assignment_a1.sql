-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 08:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c273_assignment_a1`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `food_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food_name`) VALUES
(1, 'Chicken Rice'),
(2, 'Mee Rebus '),
(3, 'Vegetarian Burger');

-- --------------------------------------------------------

--
-- Table structure for table `food_entry`
--

CREATE TABLE `food_entry` (
  `entry_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `calorie` int(11) NOT NULL,
  `fat_in_gram` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_entry`
--

INSERT INTO `food_entry` (`entry_id`, `food_id`, `user_id`, `calorie`, `fat_in_gram`) VALUES
(1, 1, 1, 1000, 35),
(2, 3, 1, 900, 40),
(3, 1, 1, 800, 30),
(4, 2, 1, 600, 20),
(6, 2, 1, 350, 10),
(8, 3, 1, 500, 20),
(10, 3, 4, 300, 5),
(11, 1, 4, 900, 25),
(12, 1, 1, 800, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` decimal(10,0) NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `height`, `weight`, `dateOfBirth`) VALUES
(1, 'JohnDoe', 'b9921b6ebaac9174f01ea9e2fe3df9f95010410b', 180, '84', '1999-12-04'),
(2, 'MikeHunt', 'f7f563c66f8f4f240d6232878661e8fa69c80477', 175, '60', '2001-09-30'),
(3, 'BenDover', 'f89a6b5a0808a96f7d12de50e22672f57da8a14a', 164, '56', '1998-02-01'),
(4, 'Mary', '94f85995c7492eec546c321821aa4beca9a3e2b1', 150, '64', '2000-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_entry`
--
ALTER TABLE `food_entry`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_entry`
--
ALTER TABLE `food_entry`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
