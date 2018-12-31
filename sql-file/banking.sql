-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2018 at 12:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `id` int(20) NOT NULL,
  `account` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `age` int(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `religion` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `nation` varchar(30) DEFAULT NULL,
  `money` varchar(40) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`id`, `account`, `password`, `name`, `l_name`, `age`, `dob`, `gender`, `nid`, `branch`, `city`, `zip`, `religion`, `address`, `nation`, `money`, `img`) VALUES
(11, '0014', '81dc9bdb52d04dc20036', 'Md Saiful ', 'Islam', 24, '1996-07-12', 'Male', '0121320124', 'Mirpur', 'Dhaka', '1206', 'Muslim', 'Mirpur 13 House no 48/2', 'Bangladeshi', '5000', 'download1.jpeg'),
(12, '0012', '81dc9bdb52d04dc20036', 'Sakhawat', 'Hossain', 24, '1996-07-14', 'Male', '012345786', 'Mirpur', 'Dhaka', '1206', 'Muslim', 'Mirpur 10', 'Bangladeshi', '4000', 'download.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `account` varchar(11) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `account`, `password`) VALUES
(9, '0012', '1234'),
(11, '0013', '1234'),
(14, '0015', '1234'),
(15, '0014', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, '0012', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, '1010', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `total_amount`
--

CREATE TABLE `total_amount` (
  `id` int(30) NOT NULL,
  `account` varchar(30) DEFAULT NULL,
  `money` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_amount`
--

INSERT INTO `total_amount` (`id`, `account`, `money`) VALUES
(1, '0012', 1000),
(2, '0013', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(40) NOT NULL,
  `account_one` varchar(40) NOT NULL,
  `account_two` varchar(40) NOT NULL,
  `money` varchar(40) NOT NULL,
  `tran_id` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `account_one`, `account_two`, `money`, `tran_id`, `type`) VALUES
(1, '0012', '0013', '200', '5be4269e8ce83', 'Deposite'),
(2, '0012', '0013', '100', '5be426b1207e7', 'Send Money'),
(3, '0012', '0013', '200', '5be428594067d', 'Deposite'),
(4, '0013', '0012', '500', '5be44fe6731f0', 'Deposite');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_amount`
--
ALTER TABLE `total_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `total_amount`
--
ALTER TABLE `total_amount`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
