-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 04:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elite_apartments`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `apartment_no` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `is_occupied` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`apartment_no`, `type`, `is_occupied`) VALUES
(101, '1B1B', 'Y'),
(102, '1B1B', 'Y'),
(103, '1B1B', 'N'),
(104, '1B1B', 'N'),
(105, '2B1B', 'Y'),
(106, '2B1B', 'Y'),
(107, '2B1B', 'N'),
(108, '2B1B', 'N'),
(109, '2B2B', 'Y'),
(110, '2B2B', 'Y'),
(111, '2B2B', 'N'),
(112, '2B2B', 'N'),
(113, '3B2B', 'Y'),
(114, '3B2B', 'Y'),
(115, '3B2B', 'N'),
(116, '3B2B', 'N'),
(117, '3B3B', 'Y'),
(118, '3B3B', 'Y'),
(119, '3B3B', 'N'),
(120, '3B3B', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_req`
--

CREATE TABLE `maintenance_req` (
  `mreq_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `apartment_no` int(10) NOT NULL,
  `req_date` date NOT NULL,
  `description` text NOT NULL,
  `req_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintenance_req`
--

INSERT INTO `maintenance_req` (`mreq_id`, `user_id`, `apartment_no`, `req_date`, `description`, `req_status`) VALUES
(1, 1001, 101, '2023-04-17', 'Problem with AC.', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pet` char(1) NOT NULL,
  `garage` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `f_name`, `l_name`, `email`, `mobile`, `type`, `pet`, `garage`) VALUES
(1, 'siri', 'madyala', 'siri@gmail.com', 123, '3B2B', 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `user_id` int(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `apartment_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`user_id`, `f_name`, `l_name`, `email`, `mobile`, `apartment_no`) VALUES
(1001, 'John', 'Doe', 'john.doe@example.com', 1234567890, 101),
(1002, 'Jane', 'Doe', 'jane.doe@example.com', 2147483647, 102),
(1003, 'Bob', 'Smith', 'bob.smith@example.com', 3456789012, 105),
(1004, 'Alice', 'Johnson', 'alice.johnson@example.com', 4567890123, 106),
(1005, 'David', 'Lee', 'david.lee@example.com', 5678901234, 109),
(1006, 'Lisa', 'Kim', 'lisa.kim@example.com', 6789012345, 110),
(1007, 'Mike', 'Chen', 'mike.chen@example.com', 7890123456, 113),
(1008, 'Sarah', 'Taylor', 'sarah.taylor@example.com', 8901234567, 114),
(1009, 'Alex', 'Nguyen', 'alex.nguyen@example.com', 9012345678, 117),
(1010, 'Emily', 'Garcia', 'emily.garcia@example.com', 4567891234, 118);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`apartment_no`);

--
-- Indexes for table `maintenance_req`
--
ALTER TABLE `maintenance_req`
  ADD PRIMARY KEY (`mreq_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `uk` (`mobile`),
  ADD KEY `FK` (`apartment_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tenants`
--
ALTER TABLE `tenants`
  ADD CONSTRAINT `FK` FOREIGN KEY (`apartment_no`) REFERENCES `apartments` (`apartment_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
