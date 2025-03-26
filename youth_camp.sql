-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2025 at 04:29 AM
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
-- Database: `youth_camp`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_campers`
--

CREATE TABLE `registered_campers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `church_name` varchar(255) DEFAULT NULL,
  `church_address` text DEFAULT NULL,
  `head_pastor` varchar(255) DEFAULT NULL,
  `years_christian` int(11) DEFAULT NULL,
  `delegation` varchar(255) DEFAULT NULL,
  `suggestions` text DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_campers`
--

INSERT INTO `registered_campers` (`id`, `fullname`, `nickname`, `address`, `contact_number`, `birthdate`, `age`, `church_name`, `church_address`, `head_pastor`, `years_christian`, `delegation`, `suggestions`, `registration_date`) VALUES
(1, 'John Luiz Austria', 'Luiz', '670 Notanggi St.', '09362447121', '2004-12-04', 20, 'The Living Saviour Christian Fellowship', 'Phase 1A L3 B13, Mabuhay Homes, Brgy. Kalawaan, Binangonan, Riza', 'Rev. Maricar Asencion', 3, 'Camper', 'None', '2025-03-26 02:58:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_campers`
--
ALTER TABLE `registered_campers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_campers`
--
ALTER TABLE `registered_campers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
