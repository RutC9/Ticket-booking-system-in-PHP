-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 09:25 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tickt_data`
--

CREATE TABLE `tickt_data` (
  `id` int(11) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `toloc` varchar(100) NOT NULL,
  `fromloc` varchar(100) NOT NULL,
  `traveldate` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contactnumber` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickt_data`
--

INSERT INTO `tickt_data` (`id`, `train_name`, `toloc`, `fromloc`, `traveldate`, `firstname`, `lastname`, `contactnumber`, `address`, `city`, `state`, `zipcode`) VALUES
(1, 'mumbai delhi', 'delhi', 'mumbai', '2022-03-23', 'rut', 'cholera', '9999999999', 'andheri,mumbai', 'mumbai', 'maharashtra', '400001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`) VALUES
(1, 'abc@gmail.com', '$2y$10$Mx52bUTB1yaOnDir2LfIFexp1mBCXAdpR8BsUnVo3ROTUMPgj2Elu'),
(2, 'rut.cholera7@gmail.com', '$2y$10$EM0B6tOsa6hprY2oxheC0eEGAd0zQsJo8dyb2lWr/mE9HHqY7eITO'),
(3, 'ab@gmail.com', '$2y$10$5nWffr2yBdpi/G3zDd/m3eZN62q05TRRVovrb4GuS05VXIlOwwq5S'),
(4, 'abc1@gmail.com', '$2y$10$NiZc7Bn12VCtiUVZBUndJuDEpFQ0I0uyG64fg9kE26ZMd13WCk0Aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickt_data`
--
ALTER TABLE `tickt_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tickt_data`
--
ALTER TABLE `tickt_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
