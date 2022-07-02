-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 04:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yellow_pages`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `area` varchar(30) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area`, `city_id`) VALUES
(1, 'Down Town', 1),
(2, 'Sheraton', 1),
(3, 'New Cairo', 1),
(4, 'Giza Square', 2),
(5, 'Monib', 2),
(6, 'Imbaba', 2),
(7, '6th Of October', 2),
(8, 'Gharbia 1', 6),
(9, 'Gharbia 2', 6),
(10, 'Sharkia 1', 5),
(11, 'Sharkia 2', 5),
(12, 'Alex 1', 3),
(13, 'Alex 2', 3),
(14, 'Behira 1', 4),
(15, 'Behira 2', 4),
(16, 'Tanta 1', 7),
(17, 'Tanta 2', 7),
(18, 'Qena 1', 8),
(19, 'Qena 2', 8),
(20, 'Zayed', 2),
(21, 'Maadi', 9),
(22, 'Qesm el Maadi', 9),
(23, 'Maasraa', 9);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Software Development'),
(2, 'Internet Publishing'),
(3, 'Marketing'),
(4, 'Media'),
(5, 'IT Consulting'),
(6, 'Sales'),
(7, 'HR Resource'),
(8, 'Communications'),
(9, 'Constructions');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Cairo'),
(2, 'Giza'),
(3, 'Alex'),
(4, 'Behira'),
(5, 'Sharkia'),
(6, 'Gharbia'),
(7, 'Tanta'),
(8, 'Qena'),
(9, 'Helwan');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `company_phone_number` varchar(20) DEFAULT NULL,
  `categories` text NOT NULL,
  `company_city` tinyint(4) NOT NULL,
  `company_area` tinyint(4) NOT NULL,
  `company_images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_phone_number`, `categories`, `company_city`, `company_area`, `company_images`) VALUES
(1, 'Yellow Media', '01015720319', '1,2,5', 1, 3, ''),
(2, 'Prismatecs', '01143030076', '3', 2, 1, 'IMG_20181223_221918.jpg,IMG_20181223_222011.jpg,IMG_20181223_222031.jpg,IMG_20181223_222036.jpg,IMG_20181223_222108.jpg,IMG_20181223_222213.jpg'),
(3, 'IBM', '01143030076', '3,4', 3, 12, 'IMG_20181223_230306.jpg,IMG_20181223_230310.jpg,IMG_20181223_230349.jpg,IMG_20181223_230352.jpg'),
(4, 'Pillars', '01143030076', '4', 1, 2, 'IMG_20181223_222546.jpg'),
(5, 'Valeo', '054185489616', '3,4', 2, 1, ''),
(6, 'Intcore', '01143030076', '2,3,5', 2, 1, ''),
(7, 'Microsoft', '0123456789', '1,2,5', 2, 6, 'IMG_20181223_221918.jpg,IMG_20181223_222011.jpg,IMG_20181223_222031.jpg,IMG_20181223_222036.jpg'),
(8, 'LeadInTop', '987456123', '2,3,4', 1, 2, 'IMG_20181223_222418.jpg,IMG_20181223_222510.jpg,IMG_20181223_222546.jpg'),
(9, 'Meta', '0133458978', '1', 1, 1, 'IMG_20181223_222313.jpg'),
(10, 'Apple', '0114465656', '1', 1, 1, 'IMG_20181223_222313.jpg'),
(11, 'Hyperlink InfoSystem', '695959595', '1', 1, 1, 'IMG_20181223_222313.jpg'),
(12, 'Etisalat', '647878888', '1', 2, 6, 'IMG_20181223_222418.jpg'),
(13, 'Vois', '656668989', '3', 3, 12, 'IMG_20181223_222351.jpg'),
(14, 'Lecico', '963258741213', '1,7', 3, 13, 'IMG_20181223_222510.jpg,IMG_20181223_222546.jpg,IMG_20181223_222612.jpg'),
(15, 'TechyTypes', '5647896321', '1,2,5', 2, 7, 'IMG_20181223_222233.jpg,IMG_20181223_222418.jpg'),
(16, 'Mentor Graphics', '741258963', '1,2,5', 1, 2, 'IMG_20181223_222418.jpg,IMG_20181223_222510.jpg,IMG_20181223_222546.jpg,IMG_20181223_222612.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `is_admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `is_admin`) VALUES
(1, 'mostafa1@gamil.com', '123', 'Ahmed', 1),
(2, 'mostafa2@gamil.com', '123', 'Mostafa Mohamed', 0),
(3, 'mostafa3@gamil.com', '123', 'Omar', 1),
(4, 'mostafa4@gamil.com', '123', 'Mostafa Badr', 0),
(5, 'mostafa5@hotmail.com', '123', 'Shehab', 0),
(6, 'mostafa6@yahoo.com', '123', 'Taha', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_name` (`company_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
