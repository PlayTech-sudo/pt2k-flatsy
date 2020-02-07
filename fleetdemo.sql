-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 11:15 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fleetdemo`
--
CREATE DATABASE IF NOT EXISTS `fleetdemo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fleetdemo`;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `expense_id` int(11) NOT NULL DEFAULT '0',
  `fleet_id` int(11) DEFAULT NULL,
  `maintainance` varchar(15) DEFAULT NULL,
  `charge` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expense_id`, `fleet_id`, `maintainance`, `charge`, `status`) VALUES
(1, 2, 'tier change', 500, 'working'),
(2, 1, 'break failure', 8000, 'not working'),
(3, 3, 'gare change', 700, 'still in repair'),
(4, 4, 'break failure', 9000, 'working'),
(7, 1, 'gare change', 1000, 'not working');

-- --------------------------------------------------------

--
-- Table structure for table `fleet`
--

CREATE TABLE IF NOT EXISTS `fleet` (
`fleet_id` int(11) NOT NULL,
  `fleet_name` varchar(10) NOT NULL,
  `fleet_type` varchar(10) NOT NULL,
  `plate_number` varchar(10) NOT NULL,
  `category` varchar(15) NOT NULL,
  `sub_category` varchar(15) NOT NULL,
  `handler_name` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fleet`
--

INSERT INTO `fleet` (`fleet_id`, `fleet_name`, `fleet_type`, `plate_number`, `category`, `sub_category`, `handler_name`) VALUES
(1, 'trucks', '6 wheelers', 'KA 28 GH 7', 'truck', 'hero', 'modi'),
(2, 'cars', '4 wheelers', 'KA 22 L 47', 'car', 'Maruti', 'vasuki'),
(3, 'buses', '4 wheelers', 'MH 22 S 26', 'bus', 'KSRTC', 'modi'),
(4, 'bikes', '2 wheelers', 'MH 28 D 56', 'bike', 'KTM', 'shivu');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_entry`
--

CREATE TABLE IF NOT EXISTS `fuel_entry` (
  `fuelentry_number` int(11) NOT NULL DEFAULT '0',
  `fleet_id` int(11) DEFAULT NULL,
  `meter_number` varchar(10) DEFAULT NULL,
  `fuel_quantity` varchar(10) DEFAULT NULL,
  `fuel_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuel_entry`
--

INSERT INTO `fuel_entry` (`fuelentry_number`, `fleet_id`, `meter_number`, `fuel_quantity`, `fuel_type`) VALUES
(100, 1, '780 km', '40L', 'petrol'),
(101, 2, '850 km', '20 L', 'diesel'),
(102, 3, '860 km', '90 L', 'petrol'),
(103, 4, '500 Km', '15L', 'diesel');

-- --------------------------------------------------------

--
-- Table structure for table `handler`
--

CREATE TABLE IF NOT EXISTS `handler` (
  `fleet_id` int(11) NOT NULL,
  `handler_name` varchar(20) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `mobile_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handler`
--

INSERT INTO `handler` (`fleet_id`, `handler_name`, `adress`, `mobile_number`) VALUES
(1, 'shine', 'mantesh nagar ', 8722027649),
(2, 'vasuki', 'udhyambag', 8970985634),
(3, 'modi', 'mantesh nagar', 8722027649),
(4, 'arpita', 'bijapur', 9845718541);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `invoice_number` int(11) NOT NULL DEFAULT '0',
  `fleet_id` int(11) DEFAULT NULL,
  `vehicle_part` varchar(15) DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`invoice_number`, `fleet_id`, `vehicle_part`, `description`, `amount`) VALUES
(103, 2, 'engine', 'engine spark plug', 3000),
(123, 4, 'oil tank', 'full tank of oil', 6000),
(765, 3, 'glass', 'solid black glass', 8900),
(897, 2, 'tier', 'new tier', 800);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email_id`, `address`, `contact_number`, `password`) VALUES
('Tarun', 'tarun1998@gmail.com', 'Anagol,Belagavi', 2147483647, 'tarun123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
 ADD PRIMARY KEY (`expense_id`), ADD KEY `fleet_id` (`fleet_id`);

--
-- Indexes for table `fleet`
--
ALTER TABLE `fleet`
 ADD PRIMARY KEY (`fleet_id`), ADD UNIQUE KEY `plate_number` (`plate_number`);

--
-- Indexes for table `fuel_entry`
--
ALTER TABLE `fuel_entry`
 ADD PRIMARY KEY (`fuelentry_number`), ADD KEY `fleet_id` (`fleet_id`);

--
-- Indexes for table `handler`
--
ALTER TABLE `handler`
 ADD PRIMARY KEY (`fleet_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
 ADD PRIMARY KEY (`invoice_number`), ADD KEY `fleet_id` (`fleet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fleet`
--
ALTER TABLE `fleet`
MODIFY `fleet_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`fleet_id`) REFERENCES `fleet` (`fleet_id`) ON DELETE CASCADE;

--
-- Constraints for table `fuel_entry`
--
ALTER TABLE `fuel_entry`
ADD CONSTRAINT `fuel_entry_ibfk_1` FOREIGN KEY (`fleet_id`) REFERENCES `fleet` (`fleet_id`) ON DELETE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`fleet_id`) REFERENCES `fleet` (`fleet_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
