-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Feb 06, 2022 at 06:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booked_cars`
--

CREATE TABLE `booked_cars` (
  `id` int(11) NOT NULL,
  `model` varchar(30) NOT NULL,
  `number` varchar(11) NOT NULL,
  `seating` int(11) NOT NULL,
  `rentperday` int(11) NOT NULL,
  `number_days` int(11) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_cars`
--

INSERT INTO `booked_cars` (`id`, `model`, `number`, `seating`, `rentperday`, `number_days`, `start_date`) VALUES
(2, 'model9', 'PN72218191', 4, 800, 5, '2022-02-10'),
(3, 'model12', 'hr76543567', 7, 1000, 4, '2022-02-16'),
(7, 'model9', 'PN72218191', 4, 800, 4, '2022-03-30'),
(8, 'model78', 'PN72218188', 7, 2000, 4, '2022-02-25'),
(9, 'model9', 'PN72218191', 4, 800, 4, '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `model` varchar(21) NOT NULL,
  `number` varchar(11) NOT NULL,
  `seating` int(11) NOT NULL,
  `rentperday` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `model`, `number`, `seating`, `rentperday`) VALUES
(2, 'model12', 'hr76543567', 9, 1000),
(3, 'model9', 'PN72218191', 4, 800),
(4, 'model78', 'HR25637111', 9, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `registeration2`
--

CREATE TABLE `registeration2` (
  `id` int(11) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(22) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration2`
--

INSERT INTO `registeration2` (`id`, `companyname`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Cars at go', 'Harry', 'Potter', 'harrypotter', 'harrypotter', 'harry@harry.harry', '8938939292');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(22) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Harleen Kaur', 'Bhatia', 'harleen', 'xyz', 'harleen@mail.com', '9939202021'),
(2, 'Kamal', 'Rai', 'kamalrai', 'hellos', 'kamal@mail.com', '8869549393'),
(3, 'har', 'ka', 'harka', 'harka', 'harka@harka.harka', '8888888888'),
(4, 'hally', 'hello', 'hally', 'hally', 'hally@hally.hally', '8899889988'),
(5, 'Harleenn', 'Kaur', 'kaurharleen', 'kaurharleen', 'kaur@kaur.Kaur', '7483920393'),
(6, 'Harleen Kaur', 'Bhatia', 'Bhatia', 'bhatia', 'bhatia@h.com', '7788990044');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_cars`
--
ALTER TABLE `booked_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model` (`model`,`number`);

--
-- Indexes for table `registeration2`
--
ALTER TABLE `registeration2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booked_cars`
--
ALTER TABLE `booked_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registeration2`
--
ALTER TABLE `registeration2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
