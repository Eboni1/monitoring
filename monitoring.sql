-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 02:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `block` varchar(1) NOT NULL,
  `year` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`num_id`, `firstname`, `lastname`, `password`, `stud_num`, `phone_num`, `email`, `address`, `user_type`, `course`, `block`, `year`) VALUES
(1, 'Joshua', 'Escaño', '12345', '2022-2363-52006', 0, 'jmfte2022-2363-52006@bicol-u.edu.ph', 'N/A', 'S', 'BSIS', 'A', '2'),
(2, 'Jerry', 'Agsunod', '12345678', 'N/A', 0, 'jerry.agsunod@bicol-u.edu.ph', 'N/A', 'A', 'N/A', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`num_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
