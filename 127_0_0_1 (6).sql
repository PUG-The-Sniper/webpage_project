-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 09:30 PM
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
-- Database: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `users`;

-- --------------------------------------------------------

--
-- Table structure for table `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_admin`
--

INSERT INTO `users_admin` (`id`, `user_name`, `password`, `name`, `status`, `role`) VALUES
(50001, 'sniperpug', '1029384756Amer!', 'Rommel Lontoc', 'Administrator', 'Administrator'),
(50002, 'benny', 'bennyboi', 'Reuben Mangubat', 'Administrator', 'Administrator'),
(50003, 'eugene james', '2008-27-11', 'Jujin', 'Administrator', 'Administrator'),
(50004, 'Ezekiel Vince Cruz', '2009-01-03', 'zekii', 'Administrator', 'Administrator'),
(50005, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_students`
--

CREATE TABLE `users_students` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `grade_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_students`
--

INSERT INTO `users_students` (`id`, `student_id`, `user_name`, `password`, `name`, `status`, `role`, `grade_level`) VALUES
(10001, 0, 'test', 'test', 'Rommel C. Lontoc', 'St. Francis Of Assisi', 'student', 'Grade 9'),
(10002, 0, 'test2', 'test2', 'test2', '', '', 'Grade 8'),
(10003, 0, '', '', '', '', '', ''),
(10004, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_teachers`
--

CREATE TABLE `users_teachers` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_teachers`
--

INSERT INTO `users_teachers` (`id`, `user_name`, `password`, `name`, `status`, `role`) VALUES
(90001, 'test', 'test', 'test', 'Teacher', 'teacher'),
(90002, 'test2', 'test2', 'test2', '', ''),
(90008, '', '', '', '', ''),
(90009, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_students`
--
ALTER TABLE `users_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_teachers`
--
ALTER TABLE `users_teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50007;

--
-- AUTO_INCREMENT for table `users_students`
--
ALTER TABLE `users_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;

--
-- AUTO_INCREMENT for table `users_teachers`
--
ALTER TABLE `users_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90010;
--
-- Database: `user_data`
--
CREATE DATABASE IF NOT EXISTS `user_data` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `user_data`;

-- --------------------------------------------------------

--
-- Table structure for table `grade_10_schedule`
--

CREATE TABLE `grade_10_schedule` (
  `e` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `monday` varchar(100) DEFAULT NULL,
  `tuesday` varchar(100) DEFAULT NULL,
  `wednesday` varchar(100) DEFAULT NULL,
  `thursday` varchar(100) DEFAULT NULL,
  `friday` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
(10001, '7:00 - 7:20 Daily Routine/HR, 7:20 - 8:20 AP, 8:20 - 9:20 English, 9:20 - 10:20 Math, 10:20 - 10:40 ', '7:00 - 7:20 Daily Routine/HR, 7:20 - 8:20 AP, 8:20 - 9:20 English, 9:20 - 10:20 Math, 10:20 - 10:40 ', '7:00 - 7:10 Daily Routine/HR, 7:10 - 8:10 Computer, 8:20 - 9:20 TLE, 9:30 - 10:30 English, 10:30 - 1', '7:00 - 7:10 Daily Routine/HR, 7:10 - 8:10 Computer, 8:10 - 9:10 English, 9:10 - 10:10 MAPEH, 10:10 -', '7:00 - 7:10 Daily Routine/HR, 7:10 - 8:10 AP, 8:10 - 9:10 MAPEH, 9:10 - 9:30 Recess, 9:30 - 10:30 TL');

-- --------------------------------------------------------

--
-- Table structure for table `users_grades`
--

CREATE TABLE `users_grades` (
  `id` int(11) NOT NULL,
  `grd_cl1` varchar(255) NOT NULL,
  `grd_cl2` varchar(255) NOT NULL,
  `grd_cl3` varchar(255) NOT NULL,
  `grd_cl4` varchar(255) NOT NULL,
  `grd_fil1` varchar(255) NOT NULL,
  `grd_fil2` varchar(255) NOT NULL,
  `grd_fil3` varchar(255) NOT NULL,
  `grd_fil4` varchar(255) NOT NULL,
  `grd_eng1` varchar(255) NOT NULL,
  `grd_eng2` varchar(255) NOT NULL,
  `grd_eng3` varchar(255) NOT NULL,
  `grd_eng4` varchar(255) NOT NULL,
  `grd_math1` varchar(255) NOT NULL,
  `grd_math2` varchar(255) NOT NULL,
  `grd_math3` varchar(255) NOT NULL,
  `grd_math4` varchar(255) NOT NULL,
  `grd_sci1` varchar(255) NOT NULL,
  `grd_sci2` varchar(255) NOT NULL,
  `grd_sci3` varchar(255) NOT NULL,
  `grd_sci4` varchar(255) NOT NULL,
  `grd_ap1` varchar(255) NOT NULL,
  `grd_ap2` varchar(255) NOT NULL,
  `grd_ap3` varchar(255) NOT NULL,
  `grd_ap4` varchar(255) NOT NULL,
  `grd_tlecp1` varchar(255) NOT NULL,
  `grd_tlecp2` varchar(255) NOT NULL,
  `grd_tlecp3` varchar(255) NOT NULL,
  `grd_tlecp4` varchar(255) NOT NULL,
  `grd_mapeh1q1` varchar(255) NOT NULL,
  `grd_mapeh2q1` varchar(255) NOT NULL,
  `grd_mapeh3q1` varchar(255) NOT NULL,
  `grd_mapeh4q1` varchar(255) NOT NULL,
  `grd_mapeh1q2` varchar(255) NOT NULL,
  `grd_mapeh2q2` varchar(255) NOT NULL,
  `grd_mapeh3q2` varchar(255) NOT NULL,
  `grd_mapeh4q2` varchar(255) NOT NULL,
  `grd_mapeh1q3` varchar(255) NOT NULL,
  `grd_mapeh2q3` varchar(255) NOT NULL,
  `grd_mapeh3q3` varchar(255) NOT NULL,
  `grd_mapeh4q3` varchar(255) NOT NULL,
  `grd_mapeh1q4` varchar(255) NOT NULL,
  `grd_mapeh2q4` varchar(255) NOT NULL,
  `grd_mapeh3q4` varchar(255) NOT NULL,
  `grd_mapeh4q4` varchar(255) NOT NULL,
  `grd_mapehm1` varchar(255) NOT NULL,
  `grd_mapehm2` varchar(255) NOT NULL,
  `grd_mapehm3` varchar(255) NOT NULL,
  `grd_mapehm4` varchar(255) NOT NULL,
  `grd_mapeha1` varchar(255) NOT NULL,
  `grd_mapeha2` varchar(255) NOT NULL,
  `grd_mapeha3` varchar(255) NOT NULL,
  `grd_mapeha4` varchar(255) NOT NULL,
  `grd_mapehpe1` varchar(255) NOT NULL,
  `grd_mapehpe2` varchar(255) NOT NULL,
  `grd_mapehpe3` varchar(255) NOT NULL,
  `grd_mapehpe4` varchar(255) NOT NULL,
  `grd_mapehh1` varchar(255) NOT NULL,
  `grd_mapehh2` varchar(255) NOT NULL,
  `grd_mapehh3` varchar(255) NOT NULL,
  `grd_mapehh4` varchar(255) NOT NULL,
  `grd_clfinals` text NOT NULL,
  `grd_filfinals` text NOT NULL,
  `grd_engfinals` text NOT NULL,
  `grd_mathfinals` text NOT NULL,
  `grd_scifinals` text NOT NULL,
  `grd_apfinals` text NOT NULL,
  `grd_tlecpfinals` text NOT NULL,
  `grd_mapehfinals` text NOT NULL,
  `grd_clremarks` text NOT NULL,
  `grd_filremarks` text NOT NULL,
  `grd_engremarks` text NOT NULL,
  `grd_mathremarks` text NOT NULL,
  `grd_sciremarks` text NOT NULL,
  `grd_apremarks` text NOT NULL,
  `grd_tlecpremarks` text NOT NULL,
  `grd_mapehremarks` text NOT NULL,
  `grd_mapeh1` int(255) NOT NULL,
  `grd_mapeh2` int(255) NOT NULL,
  `grd_mapeh3` int(255) NOT NULL,
  `grd_mapeh4` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_grades`
--

INSERT INTO `users_grades` (`id`, `grd_cl1`, `grd_cl2`, `grd_cl3`, `grd_cl4`, `grd_fil1`, `grd_fil2`, `grd_fil3`, `grd_fil4`, `grd_eng1`, `grd_eng2`, `grd_eng3`, `grd_eng4`, `grd_math1`, `grd_math2`, `grd_math3`, `grd_math4`, `grd_sci1`, `grd_sci2`, `grd_sci3`, `grd_sci4`, `grd_ap1`, `grd_ap2`, `grd_ap3`, `grd_ap4`, `grd_tlecp1`, `grd_tlecp2`, `grd_tlecp3`, `grd_tlecp4`, `grd_mapeh1q1`, `grd_mapeh2q1`, `grd_mapeh3q1`, `grd_mapeh4q1`, `grd_mapeh1q2`, `grd_mapeh2q2`, `grd_mapeh3q2`, `grd_mapeh4q2`, `grd_mapeh1q3`, `grd_mapeh2q3`, `grd_mapeh3q3`, `grd_mapeh4q3`, `grd_mapeh1q4`, `grd_mapeh2q4`, `grd_mapeh3q4`, `grd_mapeh4q4`, `grd_mapehm1`, `grd_mapehm2`, `grd_mapehm3`, `grd_mapehm4`, `grd_mapeha1`, `grd_mapeha2`, `grd_mapeha3`, `grd_mapeha4`, `grd_mapehpe1`, `grd_mapehpe2`, `grd_mapehpe3`, `grd_mapehpe4`, `grd_mapehh1`, `grd_mapehh2`, `grd_mapehh3`, `grd_mapehh4`, `grd_clfinals`, `grd_filfinals`, `grd_engfinals`, `grd_mathfinals`, `grd_scifinals`, `grd_apfinals`, `grd_tlecpfinals`, `grd_mapehfinals`, `grd_clremarks`, `grd_filremarks`, `grd_engremarks`, `grd_mathremarks`, `grd_sciremarks`, `grd_apremarks`, `grd_tlecpremarks`, `grd_mapehremarks`, `grd_mapeh1`, `grd_mapeh2`, `grd_mapeh3`, `grd_mapeh4`) VALUES
(10001, '80', '90', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '86', '0', '0', '0', '90', '0', '0', '0', '75', '0', '0', '0', '88', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(10002, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_grades`
--
ALTER TABLE `users_grades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `users_grades`
--
ALTER TABLE `users_grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
