-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 01:27 AM
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
  `category_id` int(11) NOT NULL,
  `category_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drop_job`
--

CREATE TABLE `drop_job` (
  `j_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inst_org`
--

CREATE TABLE `inst_org` (
  `i_o_id` int(11) NOT NULL,
  `i_o_name` varchar(30) DEFAULT NULL,
  `i_o_domain` varchar(10) DEFAULT NULL,
  `i_o_index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_tb`
--

CREATE TABLE `jobs_tb` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(30) DEFAULT NULL,
  `j_description` varchar(100) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `j_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_tb`
--

CREATE TABLE `payment_tb` (
  `p_id` int(11) NOT NULL,
  `j_id` int(11) DEFAULT NULL,
  `payedto_id` int(11) DEFAULT NULL,
  `payedby_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `p_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_i_tb`
--

CREATE TABLE `personal_i_tb` (
  `u_id` int(11) DEFAULT NULL,
  `phone_number` varchar(14) DEFAULT NULL,
  `i_o_id` int(11) DEFAULT NULL,
  `bio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_tb`
--

CREATE TABLE `review_tb` (
  `review_id` int(11) NOT NULL,
  `reviewer_id` int(11) DEFAULT NULL,
  `reviewee_id` int(11) DEFAULT NULL,
  `j_id` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `feedback` varchar(50) DEFAULT NULL,
  `r_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills_tb`
--

CREATE TABLE `skills_tb` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `take_job`
--

CREATE TABLE `take_job` (
  `j_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `apply_status` varchar(10) DEFAULT NULL,
  `apply_date` date DEFAULT NULL,
  `approve_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `start_time` time NOT NULL,
  `end_time` time DEFAULT NULL,
  `duration` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE `user_skills` (
  `u_id` int(11) DEFAULT NULL,
  `skill_id` int(11) DEFAULT NULL,
  `profeciency` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `e_mail` varchar(50) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `u_password` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `first_name`, `last_name`, `e_mail`, `username`, `u_password`, `date_of_birth`, `user_type`) VALUES
(1, 'Fairuz', 'Humaira Faiza', 'ffaiza2230972@bscse.uiu.ac.bd', 'faiza12', '$2y$10$JhjQ7MjZy7QCwM/DKfw/lOQHFkZlAi.vu4upduomwc6', NULL, 'student'),
(2, 'Jannatul', 'Haque Usha', 'jusha2310021@bseee.uiu.ac.bd', 'jusha_21', '$2y$10$CImlgO3RwJ1OHsVWa6vfTOJ.jrcbzsgLAJx99kocNNu', '2003-02-06', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `drop_job`
--
ALTER TABLE `drop_job`
  ADD PRIMARY KEY (`j_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `inst_org`
--
ALTER TABLE `inst_org`
  ADD PRIMARY KEY (`i_o_id`);

--
-- Indexes for table `jobs_tb`
--
ALTER TABLE `jobs_tb`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `start_time` (`start_time`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `j_id` (`j_id`),
  ADD KEY `payedto_id` (`payedto_id`),
  ADD KEY `payedby_id` (`payedby_id`);

--
-- Indexes for table `personal_i_tb`
--
ALTER TABLE `personal_i_tb`
  ADD KEY `u_id` (`u_id`),
  ADD KEY `i_o_id` (`i_o_id`);

--
-- Indexes for table `review_tb`
--
ALTER TABLE `review_tb`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `reviewer_id` (`reviewer_id`),
  ADD KEY `reviewee_id` (`reviewee_id`),
  ADD KEY `j_id` (`j_id`);

--
-- Indexes for table `skills_tb`
--
ALTER TABLE `skills_tb`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `take_job`
--
ALTER TABLE `take_job`
  ADD PRIMARY KEY (`j_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`start_time`);

--
-- Indexes for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD KEY `u_id` (`u_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inst_org`
--
ALTER TABLE `inst_org`
  MODIFY `i_o_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_tb`
--
ALTER TABLE `jobs_tb`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_tb`
--
ALTER TABLE `payment_tb`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_tb`
--
ALTER TABLE `review_tb`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills_tb`
--
ALTER TABLE `skills_tb`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drop_job`
--
ALTER TABLE `drop_job`
  ADD CONSTRAINT `drop_job_ibfk_1` FOREIGN KEY (`j_id`) REFERENCES `jobs_tb` (`job_id`),
  ADD CONSTRAINT `drop_job_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user_tb` (`user_id`);

--
-- Constraints for table `jobs_tb`
--
ALTER TABLE `jobs_tb`
  ADD CONSTRAINT `jobs_tb_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_tb` (`category_id`),
  ADD CONSTRAINT `jobs_tb_ibfk_2` FOREIGN KEY (`start_time`) REFERENCES `time_slot` (`start_time`),
  ADD CONSTRAINT `jobs_tb_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category_tb` (`category_id`);

--
-- Constraints for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD CONSTRAINT `payment_tb_ibfk_1` FOREIGN KEY (`j_id`) REFERENCES `jobs_tb` (`job_id`),
  ADD CONSTRAINT `payment_tb_ibfk_2` FOREIGN KEY (`payedto_id`) REFERENCES `user_tb` (`user_id`),
  ADD CONSTRAINT `payment_tb_ibfk_3` FOREIGN KEY (`payedby_id`) REFERENCES `user_tb` (`user_id`);

--
-- Constraints for table `personal_i_tb`
--
ALTER TABLE `personal_i_tb`
  ADD CONSTRAINT `personal_i_tb_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_tb` (`user_id`),
  ADD CONSTRAINT `personal_i_tb_ibfk_2` FOREIGN KEY (`i_o_id`) REFERENCES `inst_org` (`i_o_id`);

--
-- Constraints for table `review_tb`
--
ALTER TABLE `review_tb`
  ADD CONSTRAINT `review_tb_ibfk_1` FOREIGN KEY (`reviewer_id`) REFERENCES `user_tb` (`user_id`),
  ADD CONSTRAINT `review_tb_ibfk_2` FOREIGN KEY (`reviewee_id`) REFERENCES `user_tb` (`user_id`),
  ADD CONSTRAINT `review_tb_ibfk_3` FOREIGN KEY (`j_id`) REFERENCES `jobs_tb` (`job_id`);

--
-- Constraints for table `take_job`
--
ALTER TABLE `take_job`
  ADD CONSTRAINT `take_job_ibfk_1` FOREIGN KEY (`j_id`) REFERENCES `jobs_tb` (`job_id`),
  ADD CONSTRAINT `take_job_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user_tb` (`user_id`);

--
-- Constraints for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD CONSTRAINT `user_skills_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_tb` (`user_id`),
  ADD CONSTRAINT `user_skills_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills_tb` (`skill_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
