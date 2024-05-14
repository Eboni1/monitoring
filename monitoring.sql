-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 09:00 AM
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
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `course_name` text NOT NULL,
  `yr_block` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `code`, `course_name`, `yr_block`) VALUES
(1, 'BSIS', 'Bachelor of Science in Information System', '2A');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `sub_code` varchar(20) NOT NULL,
  `sub_name` text NOT NULL,
  `instructor` text NOT NULL,
  `inst_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_code`, `sub_name`, `instructor`, `inst_email`) VALUES
(1, 'IS204 SADD', 'System Analysis and Design', 'Jerry Agsunod', 'jerry.agsunod@bicol-u.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `num_id` int(11) NOT NULL,
  `firstname` varchar(33) NOT NULL,
  `lastname` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `stud_num` varchar(22) DEFAULT 'N/A',
  `phone_num` int(12) DEFAULT 0,
  `email` varchar(55) DEFAULT 'N/A',
  `address` varchar(55) DEFAULT 'N/A',
  `user_type` varchar(1) NOT NULL COMMENT 'A - staff\r\nS - student',
  `course` varchar(10) DEFAULT 'N/A',
  `yr_block` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`num_id`, `firstname`, `lastname`, `password`, `stud_num`, `phone_num`, `email`, `address`, `user_type`, `course`, `yr_block`) VALUES
(1, 'Joshua', 'Escaño', '12345', '2022-2363-52006', 0, 'jmfte2022-2363-52006@bicol-u.edu.ph', 'N/A', 'S', 'BSIS', '2A'),
(2, 'Jerry', 'Agsunod', '12345678', 'N/A', 0, 'jerry.agsunod@bicol-u.edu.ph', 'N/A', 'A', 'N/A', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`num_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
