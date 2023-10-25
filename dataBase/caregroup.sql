-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 08:50 PM
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
-- Database: `caregroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin/doctors & users login`
--

CREATE TABLE `admin/doctors & users login` (
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin/doctors & users login`
--

INSERT INTO `admin/doctors & users login` (`email`, `password`) VALUES
('talib@gmail.com', 'talib'),
('mohib@gmail.com', 'mohib'),
('talib@gmail.com', 'talib'),
('talib@gmail.com', 'talib'),
('03114750404', 'qwqd');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `department` varchar(200) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(200) NOT NULL,
  `phone_number` bigint(11) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`patient_id`, `patient_name`, `department`, `doctor_name`, `date`, `time`, `phone_number`, `description`) VALUES
(5, 'MOHIBULLAH', 'Radiology', 'Dr. Usman Qureshi', '2023-10-25', '2023-10-18 20:49:43', 3114750404, 'ists ad f feif; f wheljehgqrhtgasn.lfkd bkjlghlkfjdbns,gnfdlkj bkjdfg ljkgrhltgjwrknf ,dz '),
(6, 'azeemKhan', 'Pediatrics', 'Dr. Muhammad Khan', '2023-10-18', '2023-10-17 00:00:00', 11, 'fsdfdsaf'),
(7, 'azeemKhan', 'Obstetrics and Gynecology', 'Dr. Ayesha Ahmed', '2023-10-25', '0000-00-00 00:00:00', 99999999999, 'fdsfdsfsdfsd'),
(8, 'azeemKhan', 'Pediatrics', 'Dr. Muhammad Khan', '2023-10-10', '10:54', 45453453453543, 'uhgjgcjgjcgjghjfg'),
(9, 'taiham MAlik', 'Surgery', 'Dr. Ayesha Ahmed', '2023-12-30', '23:58', 311475041, 'cvnmdlgas ;mkgvkzvkdsf;glkadfjf\'SDlf jioertg;a l\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_registered`
--

CREATE TABLE `user_registered` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registered`
--

INSERT INTO `user_registered` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(10, 'mani', 'mani@gmail', 'mani'),
(11, 'manikhan', 'manikhan@gmail.com', '$2y$10$sJJZJsy.pd.1RxDVa0QfPuXgGu/h18qPw3LGn6ora6EgYZ8JHrIyu'),
(12, 'muheebullah', 'muheebullah@gmail.com', '$2y$10$M2DQJDnEAtH7egJQLs4IUuhGnxlGGqEvWLkBMQb1Oj39aZRZ02td.'),
(13, 'kami', 'kami@gmail.com', '$2y$10$ORhCsxlZsRzsDxTMazPHCeMbNIxNLgzR6eco7M6tXebfOU8GLO4pe'),
(14, 'kashif', 'kashif@gmail.com', '$2y$10$g7rB6PYz6pR2RSyXT.efZ.kgGg6l7RdrfbVNIsxEug6c5jTdKnSye'),
(15, 'kaka', 'kaka@gmail.com', '$2y$10$d6vrHWkVJmd.6x5Clmyfeu6dsraqyqev3pabG7UnabxMWNSgCYiFW'),
(16, 'ali', 'ali@gmail.com', '$2y$10$xKPrwYnZ2KAfkbE5or7BKO7JGwm5LRi9T056YEcPYR2IBP6fNftWi'),
(17, 'rashid', 'rashid@gmail.com', '$2y$10$8MOabEt4DDj7K63Ztjw9yO6BRkOQ7I0N2iF95j82ifgLgS5R8ukhq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `user_registered`
--
ALTER TABLE `user_registered`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_registered`
--
ALTER TABLE `user_registered`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
