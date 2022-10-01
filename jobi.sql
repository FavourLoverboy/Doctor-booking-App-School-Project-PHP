-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 01:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobi`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `docId` int(11) NOT NULL,
  `docName` varchar(30) NOT NULL,
  `f` varchar(10) NOT NULL,
  `t` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `userId`, `name`, `docId`, `docName`, `f`, `t`, `date`, `status`) VALUES
(3, 1, 'Nwokamma Favour', 3, 'Victor Precious', '01:35', '03:37', '2022-01-18', 'Booked'),
(4, 4, 'Chukwuma Lucky', 5, 'Douglas Comfort', '01:57', '01:59', '2022-01-18', 'Booked'),
(5, 4, 'Chukwuma Lucky', 3, 'Victor Precious', '16:00', '16:30', '2022-01-18', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `commenter` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `commenter`, `comment`, `date`) VALUES
(1, 'Chukwuma Lucky', 'Kelly Kelly', 'Your health is getting better', '2022-01-18'),
(2, 'Chukwuma Lucky', 'Victor Precious', 'You are doing well.', '2022-01-18'),
(4, 'Nwokamma Favour', 'Kelly Kelly', 'Get ready to leave', '2022-01-18'),
(7, 'Nwokamma Favour', 'Victor Precious', 'You are okay now, but report any unusual sign', '2022-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `name`, `qty`, `date`) VALUES
(1, 'Procol', '10', '2022-01-17'),
(2, 'Paracetamol', '20', '2022-01-17'),
(3, 'Paracetamol', '5', '2022-01-17'),
(4, 'Procol', '2', '2022-01-17'),
(5, 'Panadol', '5', '2022-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `med`
--

CREATE TABLE `med` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `administrator` varchar(30) NOT NULL,
  `drug` varchar(30) NOT NULL,
  `dosage` varchar(4) NOT NULL,
  `des` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med`
--

INSERT INTO `med` (`id`, `name`, `administrator`, `drug`, `dosage`, `des`, `date`) VALUES
(4, 'Chukwuma Lucky', 'Victor Precious', 'Amperslin', '2', 'Every day', '2022-01-18'),
(5, 'Nwokamma Favour', 'Kelly Kelly', 'Procol', '2', 'Every day', '2022-01-18'),
(6, 'Chukwuma Lucky', 'Kelly Kelly', 'Cypri Gold', '3', 'Every day', '2022-01-18'),
(7, 'Nwokamma Favour', 'Victor Precious', '7 Capsle', '2', 'Every day', '2022-01-18'),
(8, 'Chukwuma Lucky', 'Douglas Comfort', 'Panadol', '2', 'Every day', '2022-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `f` varchar(10) NOT NULL,
  `t` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `userId`, `name`, `f`, `t`, `date`, `status`) VALUES
(1, 3, 'Victor Precious', '01:35', '03:37', '2022-01-18', 'Booked'),
(2, 3, 'Victor Precious', '16:00', '16:30', '2022-01-18', 'Booked'),
(3, 5, 'Douglas Comfort', '01:57', '01:59', '2022-01-18', 'Booked'),
(4, 5, 'Douglas Comfort', '17:36', '18:38', '2022-01-18', 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `time` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `userId`, `name`, `message`, `time`, `date`, `status`) VALUES
(1, 2, 'Kelly Kelly', 'You changed your account password.', '1642455857', '2022-01-17', 'Hide'),
(2, 2, 'Kelly Kelly', 'Your account was logged in.', '1642456220', '2022-01-17', 'Hide'),
(3, 4, 'Chukwuma Lucky', 'You changed your profile picture.', '1642456803', '2022-01-17', 'Show'),
(4, 3, 'Victor Precious', 'Your account was logged in.', '1642458672', '2022-01-17', 'Show'),
(5, 3, 'Victor Precious', 'Your account was logged in.', '1642461237', '2022-01-18', 'Show'),
(6, 5, 'Douglas Comfort', 'Your account was logged in.', '1642461732', '2022-01-18', 'Show'),
(7, 1, 'Nwokamma Favour', 'Your account was logged in.', '1642464110', '2022-01-18', 'Show'),
(8, 5, 'Douglas Comfort', 'Your account was logged in.', '1642467437', '2022-01-18', 'Show'),
(9, 2, 'Kelly Kelly', 'Your account was logged in.', '1642469572', '2022-01-18', 'Hide'),
(10, 4, 'Chukwuma Lucky', 'Your account was logged in.', '1642469629', '2022-01-18', 'Show'),
(11, 2, 'Kelly Kelly', 'Your account was logged in.', '1642545277', '2022-01-18', 'Hide'),
(12, 1, 'Nwokamma Favour', 'Your account was logged in.', '1642545314', '2022-01-18', 'Show'),
(13, 3, 'Victor Precious', 'Your account was logged in.', '1642545322', '2022-01-18', 'Show'),
(14, 2, 'Kelly Kelly', 'Your account was logged in.', '1642552555', '2022-01-19', 'Hide'),
(15, 2, 'Kelly Kelly', 'You changed your profile picture.', '1642552625', '2022-01-19', 'Hide'),
(16, 2, 'Kelly Kelly', 'Your account was logged in.', '1649685090', '2022-04-11', 'Show'),
(17, 2, 'Kelly Kelly', 'Your account was logged in.', '1664623188', '2022-10-01', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fn` varchar(30) NOT NULL,
  `ln` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pn` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `ms` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `level` varchar(7) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `picture` text NOT NULL,
  `last_login` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fn`, `ln`, `email`, `pn`, `password`, `country`, `ms`, `date`, `level`, `sex`, `picture`, `last_login`, `status`) VALUES
(1, 'Favour', 'Nwokamma', 'Favourehio2019@gmail.com', '09097048450', 'loverboy', 'Nigeria', 'Single', '2022-01-17', 'Patient', 'Male', '3.png', '2022-01-18', 'Active'),
(2, 'Kelly', 'Kelly', 'Kelly@gmail.com', '010215486', 'kelly123', 'Nigeria', 'Married', '2022-01-17', 'Admin', 'Male', '1399968623_vector-illustration-neon-colorful-star-.jpg', '2022-10-01', 'Active'),
(3, 'Precious', 'Victor', 'precious@gmail.com', '10101010', 'manman', 'Anguilla', 'Single', '2022-01-17', 'Doctor', 'Single', '', '2022-01-18', 'Active'),
(4, 'Lucky', 'Chukwuma', 'lucky@gmail.com', '124579654', 'manman', 'Argentina', 'Single', '2022-01-17', 'Patient', 'Single', '30.jpg', '2022-01-18', 'Active'),
(5, 'Comfort', 'Douglas', 'comfort@gmail.com', '4152632563', 'manman', 'Algeria', 'Single', '2022-01-17', 'Doctor', 'Single', '', '2022-01-18', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `med`
--
ALTER TABLE `med`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `med`
--
ALTER TABLE `med`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
