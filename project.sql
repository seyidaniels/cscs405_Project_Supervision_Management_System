-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2019 at 01:25 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `student_id` int(10) NOT NULL,
  `is_cancelled` int(10) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL,
  `schedule_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `about`, `student_id`, `is_cancelled`, `created_at`, `updated_at`, `deleted_at`, `schedule_id`) VALUES
(1, 'Chapter 2', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id asperiores illo sed voluptatum, autem placeat beatae tempore facilis quo animi debitis, rem, deserunt dignissimos aliquid sapiente! Quasi nulla ipsam eaque.Lorem ipsum, dolor sit amet consectetu', 5, 0, NULL, NULL, NULL, 3),
(2, 'School of Investment & Banking Management', 'THis is me', 3, 0, '2019-06-25 10:12:26.000000', '2019-06-25 10:12:26.000000', NULL, 3),
(4, 'School of Investment & Banking Managementddddddddddddd', 'THis is me', 3, 0, '2019-06-25 10:12:26.000000', '2019-06-25 10:12:26.000000', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sender_id` int(9) NOT NULL,
  `receiver_id` int(9) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(9) NOT NULL,
  `day` enum('monday','tuesday','wednesday','thursday','friday','saturday','sunday') NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `max_no_students` int(9) NOT NULL,
  `supervisor_id` int(9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `day`, `start_time`, `end_time`, `max_no_students`, `supervisor_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'wednesday', '10:00:00', '17:00:00', 9, 39, '2019-06-25 08:10:30', '2019-06-25 08:10:30', NULL),
(2, 'friday', '10:00:00', '19:00:00', 5, 39, '2019-06-25 08:12:03', '2019-06-25 08:12:03', NULL),
(3, 'thursday', '10:00:00', '23:00:00', 4, 39, '2019-06-25 08:13:09', '2019-06-25 08:13:09', NULL),
(4, 'monday', '08:00:00', '14:00:00', 10, 39, '2019-06-25 09:04:08', '2019-06-25 09:04:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(9) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `matric_number` int(10) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `supervisor_id` int(9) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `matric_number`, `phone`, `email`, `password`, `profile_pic`, `supervisor_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Seyi', 'Daniels', 140313032, 2147483647, 'samuel100@gmail.com', '$2y$10$XAg7JuWzXskPJszGWAwZq.KMe7XoevF7fuqnc5fKbIbLCaG3fvCPy', NULL, 39, '2019-06-24 13:12:26.000000', '2019-06-24 13:12:26.000000', NULL),
(4, 'Seyi', 'Sanni', 1508089078, 2147483647, 'xamunderscoreberry@gmail.com', '$2y$10$Uk0E4c9Kj73mA3X8EjcR0uZBZ8YyhYMtk1Z2MRtx97Ilifma3KtkK', NULL, 39, '2019-06-24 21:25:17.000000', '2019-06-24 21:25:17.000000', NULL),
(5, 'Seyi', 'Sanni', 1508089074, 2147481647, 'xamunders1coreberry@gmail.com', '$2y$10$Uk0E4c9Kj73mA3X8EjcR0uZBZ8YyhYMtk1Z2MRtx97Ilifma3KtkK', NULL, 39, '2019-06-24 21:25:17.000000', '2019-06-24 21:25:17.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(9) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `title` enum('Mr.','Miss.','Mrs.','Dr.','Prof.') NOT NULL,
  `staff_id` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(50) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `firstname`, `lastname`, `title`, `staff_id`, `email`, `phone`, `profile_pic`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Samuel', 'Sanni', 'Mrs.', '123456', 'samuel100@gmail.com', 0, NULL, '$2y$10$q7sXJM20nZgVQv0gQoy3WOQbEzMrcP56d9rl6A0R5g9ixrpJd9yCC', '2019-06-24 10:33:24', '2019-06-24 10:33:24', NULL),
(2, 'Samuel', 'Sanni', 'Mrs.', '123456', 'samuel100@gmail.com', 2147483647, NULL, '$2y$10$vV81SIFjusIPTQ3ZY1MqEuhyCezb3Qe3w109lWOh5dSbO8ng916ZC', '2019-06-24 10:35:34', '2019-06-24 10:35:34', NULL),
(39, 'Seyi', 'Daniels', 'Miss.', '1234567', 'seyidaniels@gmail.com', 2147483647, NULL, '$2y$10$oeye9dKVFjiLFpCVakG2Fe80VPfENqEOuRfcOaiwrZupv0tmuyBKW', '2019-06-24 12:45:50', '2019-06-24 12:45:50', NULL),
(43, 'Seyi', 'Daniels', 'Dr.', '234567', 'root@gmail.com', 2147483647, NULL, '$2y$10$BKRLzQ96gRXhJmy3VlSv8uGIOPxMODTWny8ujszJLxXHnVhsTeCNm', '2019-06-25 17:22:55', '2019-06-25 17:22:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisor_id` (`supervisor_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `supervisor_id` (`supervisor_id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_id` (`staff_id`,`email`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
