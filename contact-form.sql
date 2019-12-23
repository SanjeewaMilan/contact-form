-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 23, 2019 at 03:48 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tour_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `co_name` varchar(100) NOT NULL,
  `co_email` varchar(200) NOT NULL,
  `co_phone_number` int(50) NOT NULL,
  `co_subject` varchar(1000) NOT NULL,
  `co_message` varchar(10000) NOT NULL,
  `co_ip` varchar(255) DEFAULT NULL,
  `co_country` varchar(255) DEFAULT NULL,
  `co_city` varchar(255) DEFAULT NULL,
  `co_device` varchar(255) DEFAULT NULL,
  `co_auto_status` int(11) DEFAULT '1',
  `co_status` int(11) DEFAULT NULL,
  `co_isdeleted` int(1) NOT NULL DEFAULT '0',
  `co_date` date NOT NULL,
  `co_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `co_name`, `co_email`, `co_phone_number`, `co_subject`, `co_message`, `co_ip`, `co_country`, `co_city`, `co_device`, `co_auto_status`, `co_status`, `co_isdeleted`, `co_date`, `co_time`) VALUES
(1, 'john doe', 'test@test.com', 123456789, 'test subject', 'tets', NULL, NULL, NULL, NULL, NULL, NULL, 0, '0000-00-00', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
