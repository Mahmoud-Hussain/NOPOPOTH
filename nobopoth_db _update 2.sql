-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 08:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nobopoth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `category_name` varchar(10) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drops`
--

CREATE TABLE `drops` (
  `employer_id` int(11) NOT NULL,
  `job_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_tb`
--

CREATE TABLE `jobs_tb` (
  `job_id` varchar(10) NOT NULL,
  `job_title` varchar(20) DEFAULT NULL,
  `description` varchar(10) DEFAULT NULL,
  `Salary` double DEFAULT NULL,
  `j_time` time DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `category_name` varchar(10) DEFAULT NULL,
  `j_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `user_id` int(11) DEFAULT NULL,
  `phone_number` varchar(14) DEFAULT NULL,
  `institute` varchar(20) DEFAULT NULL,
  `bio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `employee_id` int(11) NOT NULL,
  `job_id` varchar(10) DEFAULT NULL,
  `application_status` varchar(10) DEFAULT NULL,
  `date_applied` date DEFAULT NULL,
  `date_approved` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(10) DEFAULT NULL,
  `second_name` varchar(10) DEFAULT NULL,
  `e_mail` varchar(30) DEFAULT NULL,
  `user_category` varchar(10) DEFAULT NULL,
  `u_password` varchar(30) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`category_name`);

--
-- Indexes for table `drops`
--
ALTER TABLE `drops`
  ADD PRIMARY KEY (`employer_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs_tb`
--
ALTER TABLE `jobs_tb`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `category_name` (`category_name`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drops`
--
ALTER TABLE `drops`
  ADD CONSTRAINT `drops_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `user_tb` (`user_id`),
  ADD CONSTRAINT `drops_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs_tb` (`job_id`);

--
-- Constraints for table `jobs_tb`
--
ALTER TABLE `jobs_tb`
  ADD CONSTRAINT `jobs_tb_ibfk_1` FOREIGN KEY (`category_name`) REFERENCES `category_tb` (`category_name`);

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_tb` (`user_id`);

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `user_tb` (`user_id`),
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs_tb` (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;