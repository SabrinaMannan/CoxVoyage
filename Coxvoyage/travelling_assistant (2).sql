-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Jan 06, 2022 at 04:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelling_assistant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'admin', 1879120000, 'admin@gmail.com', 'Admin0000');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`phone`) VALUES
(1834569257),
(1828893203),
(1734534880);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `name`, `phone`, `email`) VALUES
(1, 'Hotel Sea Cox', 1834569257, 'hotelseacox@gmail.com'),
(2, 'Hotel Sea Shine', 1828893203, 'hotelseashine@gmail.com'),
(3, 'Hotel Asia', 1734534880, 'hotelasia@gmail.com'),
(4, 'kj', 1865283973, 'sanjida.islam@northsouth.edu');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_booking`
--

CREATE TABLE `hotel_booking` (
  `Hotel_Booking_id` int(11) NOT NULL,
  `Duration_in_days` tinyint(4) NOT NULL,
  `Hotel_Booking_cost` smallint(6) NOT NULL,
  `Hotel_id` int(11) DEFAULT NULL,
  `Traveller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(45) NOT NULL,
  `traveller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `traveller_email` varchar(45) NOT NULL,
  `traveller_name` varchar(45) DEFAULT NULL,
  `traveller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `public_transport`
--

CREATE TABLE `public_transport` (
  `Transport_id` int(11) NOT NULL,
  `Transport_type` enum('Bus','Train','Air') NOT NULL,
  `Route_id` mediumint(9) NOT NULL,
  `Transportation_cost` smallint(6) DEFAULT NULL,
  `Transport_agency_id` int(11) DEFAULT NULL,
  `Traveller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rent_car`
--

CREATE TABLE `rent_car` (
  `CAR_id` int(11) NOT NULL,
  `Pick_up_point` varchar(45) NOT NULL,
  `pick_up_time` time NOT NULL,
  `cost_per_day` smallint(6) NOT NULL,
  `transport_agency_id` int(11) DEFAULT NULL,
  `Traveller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `Service_provider_id` int(11) NOT NULL,
  `Service_provider_type` enum('Hotel','Transport_agency') NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `traveller_id` int(11) NOT NULL,
  `traveller_name` varchar(45) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transport_agency`
--

CREATE TABLE `transport_agency` (
  `Transport_agency_id` int(11) NOT NULL,
  `Transport_agency_name` varchar(45) NOT NULL,
  `Transport_agency_phone` int(11) NOT NULL,
  `Transport_agency_email` varchar(45) DEFAULT NULL,
  `Service_Provider_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `traveller`
--

CREATE TABLE `traveller` (
  `Traveller_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(6) DEFAULT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traveller`
--

INSERT INTO `traveller` (`Traveller_id`, `name`, `email`, `password`, `phone`) VALUES
(4, 'sima', 'sima@gmail.com', '12345', 1865283900),
(12, 'Sanjida Islam', 'sanjida.islam@gmail.com', 'Sanjid', 1865283111),
(13, 'Meem', 'meem@gmail.com', '1234', 1865283777),
(14, 'Maisha', 'maisha@gmail.com', '1234', 1865283922);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `traveller`
--
ALTER TABLE `traveller`
  ADD PRIMARY KEY (`Traveller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `traveller`
--
ALTER TABLE `traveller`
  MODIFY `Traveller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
