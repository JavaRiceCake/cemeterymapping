-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 12:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cemeteryadmindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_deceased_details`
--

CREATE TABLE `customer_deceased_details` (
  `c_id` int(25) NOT NULL,
  `c_fullname` varchar(150) NOT NULL,
  `c_email` varchar(150) NOT NULL,
  `c_lot_number` varchar(150) NOT NULL,
  `c_rent_buy` varchar(150) NOT NULL,
  `c_dateofburial` varchar(150) NOT NULL,
  `c_timeofburial` varchar(150) NOT NULL,
  `d_firstname` varchar(150) NOT NULL,
  `d_middlename` varchar(150) NOT NULL,
  `d_lastname` varchar(150) NOT NULL,
  `d_age` varchar(150) NOT NULL,
  `d_civilstatus` varchar(150) NOT NULL,
  `d_causeofdeath` varchar(150) NOT NULL,
  `d_born` varchar(150) NOT NULL,
  `d_died` varchar(150) NOT NULL,
  `d_deathcertificate` longblob NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_deceased_details`
--

INSERT INTO `customer_deceased_details` (`c_id`, `c_fullname`, `c_email`, `c_lot_number`, `c_rent_buy`, `c_dateofburial`, `c_timeofburial`, `d_firstname`, `d_middlename`, `d_lastname`, `d_age`, `d_civilstatus`, `d_causeofdeath`, `d_born`, `d_died`, `d_deathcertificate`, `status`, `created_at`) VALUES
(4, 'c2', 'c2@gmail.com', '3', 'rent', '2022-10-26', '8am-10am', 'd2f', 'd2m', 'd2l', '20', 'Single', 'Heart disease', '2022-10-11', '2022-10-04', '', 'complete', '2022-10-06 09:56:30'),
(6, 'c1', 'c1@gmail.com', '1', 'buy', '2022-10-12', '11am-1pm', 'd1f', 'd1m', 'd2l', '20', 'Married', 'Cancer', '2022-10-12', '2022-10-11', '', 'complete', '2022-10-06 10:34:14'),
(7, 'c1', 'c1@gmail.com', '1', 'buy', '2022-10-05', '11am-1pm', 'd1f', 'd1m', 'd2l', '20', 'Married', 'Alzheimers disease', '2022-10-06', '2022-10-11', '', 'pending', '2022-10-28 04:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `lot`
--

CREATE TABLE `lot` (
  `id` int(150) NOT NULL,
  `lot_num` varchar(150) NOT NULL,
  `section` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Available',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lot`
--

INSERT INTO `lot` (`id`, `lot_num`, `section`, `status`, `created_at`) VALUES
(5, '1', 'c', 'Available', '2022-10-06 06:01:38'),
(7, '3', 'B', 'Available', '2022-10-06 13:26:43'),
(8, '5', 'B', 'Available', '2022-10-06 13:36:35'),
(9, '5', 'B', 'Available', '2022-10-28 06:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(150) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `created_at`) VALUES
(11, 'Rjay Rosas', 'wenwenrosasrecovery@gmail.com', 'rjay24', '123', '2022-09-18 04:37:54'),
(13, 'Rjay', 'rosasrjay@gmail.com', 'rjay24', '123', '2022-10-30 11:38:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_deceased_details`
--
ALTER TABLE `customer_deceased_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_deceased_details`
--
ALTER TABLE `customer_deceased_details`
  MODIFY `c_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lot`
--
ALTER TABLE `lot`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
