-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 04:20 AM
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
-- Database: `ati_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `ati-store`
--

CREATE TABLE `ati-store` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(20) NOT NULL,
  `status` text NOT NULL,
  `electonic_status` text NOT NULL,
  `purchase_date` date NOT NULL,
  `in_store_status` enum('In-the-store','out-of-the-store') NOT NULL,
  `handler` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ati-store`
--

INSERT INTO `ati-store` (`item_id`, `item_name`, `quantity`, `status`, `electonic_status`, `purchase_date`, `in_store_status`, `handler`) VALUES
(4, 'Hammer', 2, 'Working', 'Non electronic', '2024-02-27', 'In-the-store', 'Rifna'),
(9, 'screw', 2, 'repaired', 'non electronic', '2024-03-15', 'out-of-the-store', 'rif ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ati-store`
--
ALTER TABLE `ati-store`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ati-store`
--
ALTER TABLE `ati-store`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
