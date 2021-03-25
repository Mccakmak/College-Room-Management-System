-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 11:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmedipol`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `room_no` varchar(255) NOT NULL,
  `start_day` int(255) NOT NULL,
  `start_month` int(255) NOT NULL,
  `start_year` int(255) NOT NULL,
  `start_time` int(255) NOT NULL,
  `end_time` int(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `participant` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_no` varchar(255) NOT NULL,
  `room_floor` int(255) NOT NULL,
  `room_capacity` int(255) NOT NULL,
  `room_util` varchar(255) NOT NULL,
  `usability` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_no`, `room_floor`, `room_capacity`, `room_util`, `usability`, `comment`) VALUES
('C-210', 2, 75, 'microphone', 'unavailable', 'in maintance'),
('C-210', 2, 75, 'projector', 'unavailable', 'in maintance'),
('C-211', 2, 100, 'NULL', 'available', 'NULL'),
('C-212', 2, 45, 'computer', 'available', 'NULL'),
('C-212', 2, 45, 'microphone', 'available', 'NULL'),
('C-212', 2, 45, 'projector', 'available', 'NULL'),
('C-212', 2, 45, 'speaker', 'available', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`name`, `email`, `password`, `phone`, `type`) VALUES
('Erol Akçay', 'erolakcay@medipol.edu.tr', '827ccb0eea8a706c4c34a16891f84e7b', '12312312', 'admin'),
('Mert Can Çakmak', 'mccakmak@st.medipol.edu.tr', '827ccb0eea8a706c4c34a16891f84e7b', '12312312', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`title`,`email`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`room_no`,`start_day`,`start_month`,`start_year`,`title`,`user_email`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_no`,`room_util`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
