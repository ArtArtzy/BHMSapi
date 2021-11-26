-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2021 at 03:24 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhms`
--

-- --------------------------------------------------------

--
-- Table structure for table `showdata`
--

CREATE TABLE `showdata` (
  `id` int(11) NOT NULL,
  `initvalue` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `showdata`
--

INSERT INTO `showdata` (`id`, `initvalue`) VALUES
(1, '75.2740'),
(2, '34.7550'),
(3, '4.6350'),
(4, '12.2540'),
(5, '47.0420'),
(6, '6.4060'),
(7, '3.6750'),
(8, '-6.8680'),
(9, '2.0240'),
(10, '41.6590'),
(11, '6.8140'),
(12, '19.4040'),
(13, '5.1590'),
(14, '31.9290'),
(15, '12.0890'),
(16, '5.9680'),
(17, '17.8510'),
(18, '10.7700'),
(19, '22.3200'),
(20, '12.6910'),
(21, '35.7390'),
(22, '-0.3200'),
(23, '57.9480'),
(24, '6.7800'),
(25, '7.9260'),
(26, '5.2110'),
(27, '17.6260'),
(28, '24.5100'),
(29, '5.7920'),
(30, '5.9880'),
(31, '8.2720'),
(32, '22.3530'),
(33, '22.1300'),
(34, '16.8740'),
(35, '9.1630'),
(36, '21.1800'),
(37, '40.2980'),
(38, '5.6920'),
(39, '13.1870'),
(40, '7.1060'),
(41, '11.5960'),
(42, '9.4350'),
(43, '9.6350'),
(44, '4.5660'),
(45, '13.6290'),
(46, '33.3200'),
(47, '30.6820'),
(48, '9.2350'),
(49, '21.6310'),
(50, '7.6160'),
(51, '18.5330'),
(52, '27.3750'),
(53, '24.9640'),
(54, '5.8090'),
(55, '10.3550'),
(56, '58.3160'),
(57, '13.0230'),
(58, '37.2000'),
(59, '22.9770'),
(60, '7.3680'),
(61, '-4.8310'),
(62, '13.3240'),
(63, '9.0200'),
(64, '7.7360'),
(65, '35.3740'),
(66, '34.1710'),
(67, '29.5260'),
(68, '6.2630'),
(69, '11.3680'),
(70, '15.5440'),
(71, '-4.2000'),
(72, '-17.1660'),
(73, '24.8220'),
(74, '2.1920'),
(75, '27.4440'),
(76, '8.1320'),
(77, '21.2560'),
(78, '14.8690'),
(79, '12.9510'),
(80, '10.7600'),
(81, '74.7340'),
(82, '9.5610'),
(83, '13.6940'),
(84, '13.7640'),
(85, '11.8970'),
(86, '6.2290'),
(87, '25.6890'),
(88, '16.2970'),
(89, '10.7440'),
(90, '15.5150'),
(91, '-999999.9999'),
(92, '-999999.9999'),
(93, '-999999.9999'),
(94, '-999999.9999'),
(95, '-999999.9999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showdata`
--
ALTER TABLE `showdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showdata`
--
ALTER TABLE `showdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
