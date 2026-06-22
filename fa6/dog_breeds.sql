-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 12:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog_breeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `dog_records`
--

CREATE TABLE `dog_records` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dog_records`
--

INSERT INTO `dog_records` (`id`, `name`, `breed`, `age`, `address`, `color`, `height`, `weight`) VALUES
(1, 'Dumbo', 'Husky', 4, 'Marikina City', 'White and Black', 4, 15),
(3, 'Obi', 'Bull Dog', 5, 'Santolan', 'White', 2, 9),
(5, 'Hachi', 'Labrador', 8, 'Marikina City', 'Light Brown', 4, 19),
(6, 'Max', 'Golden Retriever', 6, 'Quezon City', 'Brown', 4, 24),
(7, 'Dog', 'German Shepherd', 5, 'Manila', 'Dark Brown and Black', 4, 20),
(8, 'Lassi', 'Standard Poodle', 2, 'Antipolo', 'White, Brown, & Black', 3, 11),
(9, 'Mark', 'Chihuahua', 7, 'Caloocan', 'Black', 3, 7),
(10, 'Lei', 'Bully', 6, 'Palawan', 'Black', 4, 18),
(11, 'Ralph', 'Golden Retriever', 8, 'Makati City', 'Brown', 4, 19),
(12, 'Wally', 'Corgi', 5, 'Makati City', 'Brown', 3, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dog_records`
--
ALTER TABLE `dog_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dog_records`
--
ALTER TABLE `dog_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
