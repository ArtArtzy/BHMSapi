-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2021 at 04:29 AM
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
-- Table structure for table `initvalue`
--

CREATE TABLE `initvalue` (
  `id` int(11) NOT NULL,
  `initvalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `initvalue`
--

INSERT INTO `initvalue` (`id`, `initvalue`) VALUES
(1, 0),
(2, 120),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0),
(41, 0),
(42, 0),
(43, 0),
(44, 0),
(45, 0),
(46, 0),
(47, 0),
(48, 0),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 0),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0),
(66, 0),
(67, 0),
(68, 0),
(69, 0),
(70, 0),
(71, 0),
(72, 0),
(73, 0),
(74, 0),
(75, 0),
(76, 0),
(77, 0),
(78, 0),
(79, 0),
(80, 0),
(81, 0),
(82, 0),
(83, 0),
(84, 0),
(85, 0),
(86, 0),
(87, 0),
(88, 0),
(89, 0),
(90, 0),
(91, 0),
(92, 0),
(93, 0),
(94, 0),
(95, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `password`) VALUES
(1, '447356');

-- --------------------------------------------------------

--
-- Table structure for table `rawdata`
--

CREATE TABLE `rawdata` (
  `id` int(11) NOT NULL,
  `SG01Avg` decimal(10,4) NOT NULL,
  `SG01Max` decimal(10,4) NOT NULL,
  `SG01Min` decimal(10,4) NOT NULL,
  `SG02Avg` decimal(10,4) NOT NULL,
  `SG02Max` decimal(10,4) NOT NULL,
  `SG02Min` decimal(10,4) NOT NULL,
  `SG03Avg` decimal(10,4) NOT NULL,
  `SG03Max` decimal(10,4) NOT NULL,
  `SG03Min` decimal(10,4) NOT NULL,
  `SG04Avg` decimal(10,4) NOT NULL,
  `SG04Max` decimal(10,4) NOT NULL,
  `SG04Min` decimal(10,4) NOT NULL,
  `SG05Avg` decimal(10,4) NOT NULL,
  `SG05Max` decimal(10,4) NOT NULL,
  `SG05Min` decimal(10,4) NOT NULL,
  `SG06Avg` decimal(10,4) NOT NULL,
  `SG06Max` decimal(10,4) NOT NULL,
  `SG06Min` decimal(10,4) NOT NULL,
  `SG07Avg` decimal(10,4) NOT NULL,
  `SG07Max` decimal(10,4) NOT NULL,
  `SG07Min` decimal(10,4) NOT NULL,
  `SG08Avg` decimal(10,4) NOT NULL,
  `SG08Max` decimal(10,4) NOT NULL,
  `SG08Min` decimal(10,4) NOT NULL,
  `SG09Avg` decimal(10,4) NOT NULL,
  `SG09Max` decimal(10,4) NOT NULL,
  `SG09Min` decimal(10,4) NOT NULL,
  `SG10Avg` decimal(10,4) NOT NULL,
  `SG10Max` decimal(10,4) NOT NULL,
  `SG10Min` decimal(10,4) NOT NULL,
  `SG11Avg` decimal(10,4) NOT NULL,
  `SG11Max` decimal(10,4) NOT NULL,
  `SG11Min` decimal(10,4) NOT NULL,
  `SG12Avg` decimal(10,4) NOT NULL,
  `SG12Max` decimal(10,4) NOT NULL,
  `SG12Min` decimal(10,4) NOT NULL,
  `SG13Avg` decimal(10,4) NOT NULL,
  `SG13Max` decimal(10,4) NOT NULL,
  `SG13Min` decimal(10,4) NOT NULL,
  `SG14Avg` decimal(10,4) NOT NULL,
  `SG14Max` decimal(10,4) NOT NULL,
  `SG14Min` decimal(10,4) NOT NULL,
  `SG15Avg` decimal(10,4) NOT NULL,
  `SG15Max` decimal(10,4) NOT NULL,
  `SG15Min` decimal(10,4) NOT NULL,
  `SG16Avg` decimal(10,4) NOT NULL,
  `SG16Max` decimal(10,4) NOT NULL,
  `SG16Min` decimal(10,4) NOT NULL,
  `SG17Avg` decimal(10,4) NOT NULL,
  `SG17Max` decimal(10,4) NOT NULL,
  `SG17Min` decimal(10,4) NOT NULL,
  `SG18Avg` decimal(10,4) NOT NULL,
  `SG18Max` decimal(10,4) NOT NULL,
  `SG18Min` decimal(10,4) NOT NULL,
  `SG19Avg` decimal(10,4) NOT NULL,
  `SG19Max` decimal(10,4) NOT NULL,
  `SG19Min` decimal(10,4) NOT NULL,
  `SG20Avg` decimal(10,4) NOT NULL,
  `SG20Max` decimal(10,4) NOT NULL,
  `SG20Min` decimal(10,4) NOT NULL,
  `SG21Avg` decimal(10,4) NOT NULL,
  `SG21Max` decimal(10,4) NOT NULL,
  `SG21Min` decimal(10,4) NOT NULL,
  `SG22Avg` decimal(10,4) NOT NULL,
  `SG22Max` decimal(10,4) NOT NULL,
  `SG22Min` decimal(10,4) NOT NULL,
  `SG23Avg` decimal(10,4) NOT NULL,
  `SG23Max` decimal(10,4) NOT NULL,
  `SG23Min` decimal(10,4) NOT NULL,
  `SG24Avg` decimal(10,4) NOT NULL,
  `SG24Max` decimal(10,4) NOT NULL,
  `SG24Min` decimal(10,4) NOT NULL,
  `SG25Avg` decimal(10,4) NOT NULL,
  `SG25Max` decimal(10,4) NOT NULL,
  `SG25Min` decimal(10,4) NOT NULL,
  `SG26Avg` decimal(10,4) NOT NULL,
  `SG26Max` decimal(10,4) NOT NULL,
  `SG26Min` decimal(10,4) NOT NULL,
  `SG27Avg` decimal(10,4) NOT NULL,
  `SG27Max` decimal(10,4) NOT NULL,
  `SG27Min` decimal(10,4) NOT NULL,
  `SG28Avg` decimal(10,4) NOT NULL,
  `SG28Max` decimal(10,4) NOT NULL,
  `SG28Min` decimal(10,4) NOT NULL,
  `SG29Avg` decimal(10,4) NOT NULL,
  `SG29Max` decimal(10,4) NOT NULL,
  `SG29Min` decimal(10,4) NOT NULL,
  `SG30Avg` decimal(10,4) NOT NULL,
  `SG30Max` decimal(10,4) NOT NULL,
  `SG30Min` decimal(10,4) NOT NULL,
  `SG31Avg` decimal(10,4) NOT NULL,
  `SG31Min` decimal(10,4) NOT NULL,
  `SG31Max` decimal(10,4) NOT NULL,
  `SG32Avg` decimal(10,4) NOT NULL,
  `SG32Max` decimal(10,4) NOT NULL,
  `SG32Min` decimal(10,4) NOT NULL,
  `SG33Avg` decimal(10,4) NOT NULL,
  `SG34Max` decimal(10,4) NOT NULL,
  `SG34Min` decimal(10,4) NOT NULL,
  `SG35Avg` decimal(10,4) NOT NULL,
  `SG35Max` decimal(10,4) NOT NULL,
  `SG35Min` decimal(10,4) NOT NULL,
  `SG36Avg` decimal(10,4) NOT NULL,
  `SG36Max` decimal(10,4) NOT NULL,
  `SG36Min` decimal(10,4) NOT NULL,
  `SG37Avg` decimal(10,4) NOT NULL,
  `SG37Max` decimal(10,4) NOT NULL,
  `SG37Min` decimal(10,4) NOT NULL,
  `SG38Avg` decimal(10,4) NOT NULL,
  `SG38Max` decimal(10,4) NOT NULL,
  `SG38Min` decimal(10,4) NOT NULL,
  `SG39Avg` decimal(10,4) NOT NULL,
  `SG39Max` decimal(10,4) NOT NULL,
  `SG39Min` decimal(10,4) NOT NULL,
  `SG40Avg` decimal(10,4) NOT NULL,
  `SG40Max` decimal(10,4) NOT NULL,
  `SG40Min` decimal(10,4) NOT NULL,
  `SG41Avg` decimal(10,4) NOT NULL,
  `SG41Max` decimal(10,4) NOT NULL,
  `SG42Min` decimal(10,4) NOT NULL,
  `SG43Avg` decimal(10,4) NOT NULL,
  `SG43Max` decimal(10,4) NOT NULL,
  `SG43Min` decimal(10,4) NOT NULL,
  `SG44Avg` decimal(10,4) NOT NULL,
  `SG44Max` decimal(10,4) NOT NULL,
  `SG44Min` decimal(10,4) NOT NULL,
  `SG45Avg` decimal(10,4) NOT NULL,
  `SG45Max` decimal(10,4) NOT NULL,
  `SG45Min` decimal(10,4) NOT NULL,
  `SG46Avg` decimal(10,4) NOT NULL,
  `SG46Max` decimal(10,4) NOT NULL,
  `SG46Min` decimal(10,4) NOT NULL,
  `SG47Avg` decimal(10,4) NOT NULL,
  `SG47Max` decimal(10,4) NOT NULL,
  `SG47Min` decimal(10,4) NOT NULL,
  `SG48Avg` decimal(10,4) NOT NULL,
  `SG48Max` decimal(10,4) NOT NULL,
  `SG48Min` decimal(10,4) NOT NULL,
  `SG49Avg` decimal(10,4) NOT NULL,
  `SG49Max` decimal(10,4) NOT NULL,
  `SG49Min` decimal(10,4) NOT NULL,
  `SG50Avg` decimal(10,4) NOT NULL,
  `SG50Max` decimal(10,4) NOT NULL,
  `SG50Min` decimal(10,4) NOT NULL,
  `SG51Avg` decimal(10,4) NOT NULL,
  `SG51Max` decimal(10,4) NOT NULL,
  `SG51Min` decimal(10,4) NOT NULL,
  `SG52Avg` decimal(10,4) NOT NULL,
  `SG52Max` decimal(10,4) NOT NULL,
  `SG52Min` decimal(10,4) NOT NULL,
  `SG53Avg` decimal(10,4) NOT NULL,
  `SG53Max` decimal(10,4) NOT NULL,
  `SG54Min` decimal(10,4) NOT NULL,
  `SG55Avg` decimal(10,4) NOT NULL,
  `SG56Max` decimal(10,4) NOT NULL,
  `SG57Min` decimal(10,4) NOT NULL,
  `SG58Avg` decimal(10,4) NOT NULL,
  `SG58Max` decimal(10,4) NOT NULL,
  `SG58Min` decimal(10,4) NOT NULL,
  `SG59Avg` decimal(10,4) NOT NULL,
  `SG59Max` decimal(10,4) NOT NULL,
  `SG59Min` decimal(10,4) NOT NULL,
  `SG60Avg` decimal(10,4) NOT NULL,
  `SG60Max` decimal(10,4) NOT NULL,
  `SG60Min` decimal(10,4) NOT NULL,
  `SG61Avg` decimal(10,4) NOT NULL,
  `SG61Max` decimal(10,4) NOT NULL,
  `SG61Min` decimal(10,4) NOT NULL,
  `SG62Avg` decimal(10,4) NOT NULL,
  `SG62Max` decimal(10,4) NOT NULL,
  `SG62Min` decimal(10,4) NOT NULL,
  `SG63Avg` decimal(10,4) NOT NULL,
  `SG63Max` decimal(10,4) NOT NULL,
  `SG63Min` decimal(10,4) NOT NULL,
  `SG64Avg` decimal(10,4) NOT NULL,
  `SG64Max` decimal(10,4) NOT NULL,
  `SG64Min` decimal(10,4) NOT NULL,
  `SG65Avg` decimal(10,4) NOT NULL,
  `SG65Max` decimal(10,4) NOT NULL,
  `SG65Min` decimal(10,4) NOT NULL,
  `SG66Avg` decimal(10,4) NOT NULL,
  `SG67Max` decimal(10,4) NOT NULL,
  `SG67Min` decimal(10,4) NOT NULL,
  `SG68Avg` decimal(10,4) NOT NULL,
  `SG68Max` decimal(10,4) NOT NULL,
  `SG68Min` decimal(10,4) NOT NULL,
  `SG69Avg` decimal(10,4) NOT NULL,
  `SG69Max` decimal(10,4) NOT NULL,
  `SG69Min` decimal(10,4) NOT NULL,
  `SG70Avg` decimal(10,4) NOT NULL,
  `SG70Max` decimal(10,4) NOT NULL,
  `SG70Min` decimal(10,4) NOT NULL,
  `SG80Avg` decimal(10,4) NOT NULL,
  `SG80Max` decimal(10,4) NOT NULL,
  `SG80Min` decimal(10,4) NOT NULL,
  `SG81Avg` decimal(10,4) NOT NULL,
  `SG81Max` decimal(10,4) NOT NULL,
  `SG81Min` decimal(10,4) NOT NULL,
  `SG82Avg` decimal(10,4) NOT NULL,
  `SG82Max` decimal(10,4) NOT NULL,
  `SG82Min` decimal(10,4) NOT NULL,
  `SG83Avg` decimal(10,4) NOT NULL,
  `SG83Max` decimal(10,4) NOT NULL,
  `SG83Min` decimal(10,4) NOT NULL,
  `SG84Avg` decimal(10,4) NOT NULL,
  `SG84Max` decimal(10,4) NOT NULL,
  `SG84Min` decimal(10,4) NOT NULL,
  `SG85Avg` decimal(10,4) NOT NULL,
  `SG85Max` decimal(10,4) NOT NULL,
  `SG85Min` decimal(10,4) NOT NULL,
  `SG86Avg` decimal(10,4) NOT NULL,
  `SG87Max` decimal(10,4) NOT NULL,
  `SG87Min` decimal(10,4) NOT NULL,
  `SG88Avg` decimal(10,4) NOT NULL,
  `SG88Max` decimal(10,4) NOT NULL,
  `SG88Min` decimal(10,4) NOT NULL,
  `SG89Avg` decimal(10,4) NOT NULL,
  `SG89Max` decimal(10,4) NOT NULL,
  `SG89Min` decimal(10,4) NOT NULL,
  `SG90Avg` decimal(10,4) NOT NULL,
  `SG90Max` decimal(10,4) NOT NULL,
  `SG90Min` decimal(10,4) NOT NULL,
  `SG91Avg` decimal(10,4) NOT NULL,
  `SG91Max` decimal(10,4) NOT NULL,
  `SG91Min` decimal(10,4) NOT NULL,
  `SG92Avg` decimal(10,4) NOT NULL,
  `SG92Max` decimal(10,4) NOT NULL,
  `SG92Min` decimal(10,4) NOT NULL,
  `SG93Avg` decimal(10,4) NOT NULL,
  `SG93Max` decimal(10,4) NOT NULL,
  `SG93Min` decimal(10,4) NOT NULL,
  `SG94Avg` decimal(10,4) NOT NULL,
  `SG94Max` decimal(10,4) NOT NULL,
  `SG94Min` decimal(10,4) NOT NULL,
  `SG95Avg` decimal(10,4) NOT NULL,
  `SG95Max` decimal(10,4) NOT NULL,
  `SG95Min` decimal(10,4) NOT NULL,
  `SG71Avg` decimal(10,4) NOT NULL,
  `SG71Max` decimal(10,4) NOT NULL,
  `SG71Min` decimal(10,4) NOT NULL,
  `SG72Avg` decimal(10,4) NOT NULL,
  `SG72Max` decimal(10,4) NOT NULL,
  `SG72Min` decimal(10,4) NOT NULL,
  `SG73Avg` decimal(10,4) NOT NULL,
  `SG73Max` decimal(10,4) NOT NULL,
  `SG73Min` decimal(10,4) NOT NULL,
  `SG74Avg` decimal(10,4) NOT NULL,
  `SG74Max` decimal(10,4) NOT NULL,
  `SG74Min` decimal(10,4) NOT NULL,
  `SG75Avg` decimal(10,4) NOT NULL,
  `SG75Max` decimal(10,4) NOT NULL,
  `SG75Min` decimal(10,4) NOT NULL,
  `SG76Avg` decimal(10,4) NOT NULL,
  `SG76Max` decimal(10,4) NOT NULL,
  `SG76Min` decimal(10,4) NOT NULL,
  `SG77Avg` decimal(10,4) NOT NULL,
  `SG77Max` decimal(10,4) NOT NULL,
  `SG77Min` decimal(10,4) NOT NULL,
  `SG78Avg` decimal(10,4) NOT NULL,
  `SG78Max` decimal(10,4) NOT NULL,
  `SG78Min` decimal(10,4) NOT NULL,
  `SG79Avg` decimal(10,4) NOT NULL,
  `SG79Max` decimal(10,4) NOT NULL,
  `SG79Min` decimal(10,4) NOT NULL,
  `SG67Avg` decimal(10,4) NOT NULL,
  `SG66Max` decimal(10,4) NOT NULL,
  `SG66Min` decimal(10,4) NOT NULL,
  `SG57Max` decimal(10,4) NOT NULL,
  `SG57Avg` decimal(10,4) NOT NULL,
  `SG56Min` decimal(10,4) NOT NULL,
  `SG56Avg` decimal(10,4) NOT NULL,
  `SG55Min` decimal(10,4) NOT NULL,
  `SG55Max` decimal(10,4) NOT NULL,
  `SG53Min` decimal(10,4) NOT NULL,
  `SG33Max` decimal(10,4) NOT NULL,
  `SG34Avg` decimal(10,4) NOT NULL,
  `SG33Min` decimal(10,4) NOT NULL,
  `SG41Min` decimal(10,4) NOT NULL,
  `SG42Avg` decimal(10,4) NOT NULL,
  `SG42Max` decimal(10,4) NOT NULL,
  `SG54Avg` decimal(10,4) NOT NULL,
  `SG54Max` decimal(10,4) NOT NULL,
  `SG86Max` decimal(10,4) NOT NULL,
  `SG86Min` decimal(10,4) NOT NULL,
  `SG87Avg` decimal(10,4) NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  `date` text NOT NULL COMMENT 'วันที่',
  `duration` int(11) NOT NULL DEFAULT '0' COMMENT '0=กลางวัน/1=กลางคืน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rawdata`
--

INSERT INTO `rawdata` (`id`, `SG01Avg`, `SG01Max`, `SG01Min`, `SG02Avg`, `SG02Max`, `SG02Min`, `SG03Avg`, `SG03Max`, `SG03Min`, `SG04Avg`, `SG04Max`, `SG04Min`, `SG05Avg`, `SG05Max`, `SG05Min`, `SG06Avg`, `SG06Max`, `SG06Min`, `SG07Avg`, `SG07Max`, `SG07Min`, `SG08Avg`, `SG08Max`, `SG08Min`, `SG09Avg`, `SG09Max`, `SG09Min`, `SG10Avg`, `SG10Max`, `SG10Min`, `SG11Avg`, `SG11Max`, `SG11Min`, `SG12Avg`, `SG12Max`, `SG12Min`, `SG13Avg`, `SG13Max`, `SG13Min`, `SG14Avg`, `SG14Max`, `SG14Min`, `SG15Avg`, `SG15Max`, `SG15Min`, `SG16Avg`, `SG16Max`, `SG16Min`, `SG17Avg`, `SG17Max`, `SG17Min`, `SG18Avg`, `SG18Max`, `SG18Min`, `SG19Avg`, `SG19Max`, `SG19Min`, `SG20Avg`, `SG20Max`, `SG20Min`, `SG21Avg`, `SG21Max`, `SG21Min`, `SG22Avg`, `SG22Max`, `SG22Min`, `SG23Avg`, `SG23Max`, `SG23Min`, `SG24Avg`, `SG24Max`, `SG24Min`, `SG25Avg`, `SG25Max`, `SG25Min`, `SG26Avg`, `SG26Max`, `SG26Min`, `SG27Avg`, `SG27Max`, `SG27Min`, `SG28Avg`, `SG28Max`, `SG28Min`, `SG29Avg`, `SG29Max`, `SG29Min`, `SG30Avg`, `SG30Max`, `SG30Min`, `SG31Avg`, `SG31Min`, `SG31Max`, `SG32Avg`, `SG32Max`, `SG32Min`, `SG33Avg`, `SG34Max`, `SG34Min`, `SG35Avg`, `SG35Max`, `SG35Min`, `SG36Avg`, `SG36Max`, `SG36Min`, `SG37Avg`, `SG37Max`, `SG37Min`, `SG38Avg`, `SG38Max`, `SG38Min`, `SG39Avg`, `SG39Max`, `SG39Min`, `SG40Avg`, `SG40Max`, `SG40Min`, `SG41Avg`, `SG41Max`, `SG42Min`, `SG43Avg`, `SG43Max`, `SG43Min`, `SG44Avg`, `SG44Max`, `SG44Min`, `SG45Avg`, `SG45Max`, `SG45Min`, `SG46Avg`, `SG46Max`, `SG46Min`, `SG47Avg`, `SG47Max`, `SG47Min`, `SG48Avg`, `SG48Max`, `SG48Min`, `SG49Avg`, `SG49Max`, `SG49Min`, `SG50Avg`, `SG50Max`, `SG50Min`, `SG51Avg`, `SG51Max`, `SG51Min`, `SG52Avg`, `SG52Max`, `SG52Min`, `SG53Avg`, `SG53Max`, `SG54Min`, `SG55Avg`, `SG56Max`, `SG57Min`, `SG58Avg`, `SG58Max`, `SG58Min`, `SG59Avg`, `SG59Max`, `SG59Min`, `SG60Avg`, `SG60Max`, `SG60Min`, `SG61Avg`, `SG61Max`, `SG61Min`, `SG62Avg`, `SG62Max`, `SG62Min`, `SG63Avg`, `SG63Max`, `SG63Min`, `SG64Avg`, `SG64Max`, `SG64Min`, `SG65Avg`, `SG65Max`, `SG65Min`, `SG66Avg`, `SG67Max`, `SG67Min`, `SG68Avg`, `SG68Max`, `SG68Min`, `SG69Avg`, `SG69Max`, `SG69Min`, `SG70Avg`, `SG70Max`, `SG70Min`, `SG80Avg`, `SG80Max`, `SG80Min`, `SG81Avg`, `SG81Max`, `SG81Min`, `SG82Avg`, `SG82Max`, `SG82Min`, `SG83Avg`, `SG83Max`, `SG83Min`, `SG84Avg`, `SG84Max`, `SG84Min`, `SG85Avg`, `SG85Max`, `SG85Min`, `SG86Avg`, `SG87Max`, `SG87Min`, `SG88Avg`, `SG88Max`, `SG88Min`, `SG89Avg`, `SG89Max`, `SG89Min`, `SG90Avg`, `SG90Max`, `SG90Min`, `SG91Avg`, `SG91Max`, `SG91Min`, `SG92Avg`, `SG92Max`, `SG92Min`, `SG93Avg`, `SG93Max`, `SG93Min`, `SG94Avg`, `SG94Max`, `SG94Min`, `SG95Avg`, `SG95Max`, `SG95Min`, `SG71Avg`, `SG71Max`, `SG71Min`, `SG72Avg`, `SG72Max`, `SG72Min`, `SG73Avg`, `SG73Max`, `SG73Min`, `SG74Avg`, `SG74Max`, `SG74Min`, `SG75Avg`, `SG75Max`, `SG75Min`, `SG76Avg`, `SG76Max`, `SG76Min`, `SG77Avg`, `SG77Max`, `SG77Min`, `SG78Avg`, `SG78Max`, `SG78Min`, `SG79Avg`, `SG79Max`, `SG79Min`, `SG67Avg`, `SG66Max`, `SG66Min`, `SG57Max`, `SG57Avg`, `SG56Min`, `SG56Avg`, `SG55Min`, `SG55Max`, `SG53Min`, `SG33Max`, `SG34Avg`, `SG33Min`, `SG41Min`, `SG42Avg`, `SG42Max`, `SG54Avg`, `SG54Max`, `SG86Max`, `SG86Min`, `SG87Avg`, `timestamp`, `date`, `duration`) VALUES
(2, '0.4200', '2.4650', '-1.9080', '0.1500', '2.5040', '-2.3770', '1.2500', '3.2630', '-1.0660', '-0.4600', '1.4170', '-2.3800', '0.3900', '2.1630', '-1.5050', '0.6200', '3.4090', '-1.7780', '-0.4800', '1.4420', '-2.6510', '0.9100', '3.7190', '-1.2170', '-0.1200', '2.1020', '-2.2530', '0.7500', '3.9160', '-2.1210', '-0.1100', '3.1210', '-2.6280', '-0.0400', '2.3600', '-2.1400', '1.0200', '3.5510', '-1.0550', '-0.6200', '1.5040', '-2.4390', '0.3000', '2.7520', '-1.5960', '-0.2100', '1.8260', '-2.6640', '0.1700', '2.5100', '-1.8140', '1.3800', '4.0870', '-1.1790', '-2.1800', '1.3010', '-4.8660', '3.7100', '17.9390', '-7.5970', '0.5300', '2.3780', '-1.4900', '0.4200', '2.0390', '-1.4980', '0.7100', '3.6520', '-1.5060', '-0.7600', '1.2510', '-2.7700', '0.2200', '2.1800', '-1.7610', '-0.7100', '1.7550', '-2.8300', '-1.2500', '0.9830', '-3.2170', '1.5300', '3.4180', '-0.4770', '-0.2600', '2.0880', '-3.2580', '0.4000', '3.1670', '-3.6010', '0.3100', '-2.1920', '2.8500', '-0.8400', '1.4050', '-3.2340', '1.0100', '1.9720', '-2.7820', '-0.0500', '1.8610', '-1.8950', '-0.4100', '1.4350', '-2.5980', '-0.6100', '1.9380', '-2.9220', '-0.0600', '2.1490', '-2.3700', '-0.6900', '1.9360', '-3.3710', '0.0900', '2.8980', '-3.4760', '0.8700', '3.0790', '-3.3160', '-0.0800', '1.8600', '-1.8690', '-0.4900', '1.6230', '-2.8260', '0.2100', '2.6340', '-1.5300', '-0.2300', '1.6210', '-2.0450', '-0.2200', '1.9400', '-2.1780', '-0.0500', '1.9720', '-2.1930', '-1.2700', '1.7010', '-3.5490', '-0.2800', '2.4540', '-3.3300', '1.4700', '3.8550', '-1.4170', '-0.4800', '1.8690', '-2.7390', '-0.0700', '2.8500', '-2.5520', '-0.3100', '0.9980', '-2.6160', '0.5000', '2.5900', '-1.6330', '-0.4000', '1.6680', '-2.5360', '0.5900', '3.5420', '-2.0190', '0.8200', '3.3900', '-1.4960', '-0.0900', '1.9730', '-2.2680', '0.1400', '2.6950', '-2.3310', '-0.0200', '2.7090', '-2.4750', '0.3200', '2.1470', '-1.7480', '-0.3100', '1.7560', '-1.8410', '0.6700', '3.2340', '-1.6700', '0.7200', '3.0410', '-2.0490', '0.2000', '2.7580', '-2.6380', '-0.4900', '2.1520', '-3.8080', '0.5600', '2.7870', '-1.7630', '1.4300', '4.0230', '-1.1740', '0.6000', '2.6530', '-1.7700', '-1.0600', '0.7360', '-2.7790', '1.0800', '3.1360', '-1.0390', '0.0700', '1.7920', '-2.4820', '0.7200', '3.3700', '-1.7510', '0.6800', '4.0580', '-1.9800', '0.6800', '4.0630', '-1.9850', '0.0200', '2.5860', '-1.9780', '-0.1000', '2.4530', '-2.3200', '0.1300', '2.5250', '-2.3170', '-1.4000', '0.8740', '-3.4770', '-0.5500', '1.2770', '-2.7610', '0.2600', '2.3990', '-2.3500', '0.0600', '2.7160', '-2.1400', '0.0800', '2.2240', '-1.9240', '-0.6600', '1.3260', '-2.5140', '0.6800', '2.4660', '-1.1910', '0.1100', '1.8400', '-1.5380', '-0.5800', '1.5540', '-2.2890', '0.5600', '2.5520', '-1.2090', '-0.3300', '1.9560', '-2.8300', '-0.0200', '1.8750', '-2.3470', '1.2000', '-0.6200', '-2.7020', '-0.9500', '-2.0620', '2.0630', '-1.9530', '3.5190', '-0.5600', '-1.2180', '-1.3180', '-0.9600', '1.3080', '-0.7000', '1.6190', '2.2670', '-2.6350', '-0.3900', 1609242882, '2020-29-12', 0),
(3, '0.2200', '2.7250', '-1.9400', '0.2700', '2.4680', '-2.4680', '1.2100', '3.2480', '-1.5170', '-0.5400', '1.7150', '-2.7160', '0.3400', '2.3640', '-1.7560', '0.5800', '2.6480', '-1.8260', '-0.5300', '1.8140', '-2.7500', '0.9200', '3.0630', '-1.1440', '-0.1200', '2.2220', '-2.9600', '0.7600', '3.3250', '-3.4340', '-0.0900', '1.9970', '-2.2620', '0.0600', '2.1060', '-2.2560', '0.9900', '3.0770', '-1.1590', '-0.6200', '1.3860', '-2.5570', '0.1500', '2.1800', '-2.2170', '-0.1600', '2.2150', '-2.4150', '0.0500', '2.2170', '-1.8680', '1.3600', '4.0380', '-1.4030', '-2.4600', '0.6240', '-5.2650', '3.4300', '15.8980', '-8.5510', '0.4900', '2.5280', '-1.7010', '0.3800', '2.0880', '-1.3570', '0.5800', '2.8510', '-1.6220', '-0.8300', '1.8350', '-2.6870', '0.1100', '2.0800', '-1.7620', '-0.7100', '1.7090', '-2.8180', '-1.3300', '0.6770', '-3.4910', '1.5000', '4.3980', '-0.3120', '-0.3200', '2.0880', '-2.9450', '0.4400', '3.3910', '-2.7960', '0.2600', '-2.1920', '2.4890', '-0.8400', '1.6800', '-3.0290', '0.9400', '1.9910', '-2.8850', '-0.1900', '2.0450', '-2.2620', '-0.4200', '1.4530', '-2.1260', '-0.7100', '1.6810', '-2.8400', '-0.0900', '2.4380', '-2.3500', '-1.2900', '1.7870', '-3.7880', '-0.0400', '3.1020', '-3.9700', '0.8900', '3.1940', '-3.0850', '-0.0700', '2.0580', '-2.1250', '-0.5900', '1.3370', '-2.6260', '0.1800', '2.7190', '-1.7490', '-0.2900', '1.9900', '-2.1970', '-0.2800', '2.1500', '-2.3790', '0.0000', '1.9550', '-2.3120', '-1.2500', '1.5080', '-3.8610', '-0.2300', '2.9700', '-3.6440', '1.4400', '3.7390', '-0.5280', '-0.5300', '2.0090', '-3.0610', '-0.0800', '1.9130', '-2.9030', '-0.3900', '1.4700', '-2.3320', '0.5100', '2.5720', '-1.4980', '-0.6200', '1.8480', '-3.1690', '0.5700', '3.5430', '-2.7990', '0.7600', '2.9130', '-1.6110', '-0.1000', '1.8910', '-2.0010', '0.1100', '2.5430', '-2.0270', '-0.0400', '1.9750', '-2.2240', '0.2000', '2.2990', '-1.6610', '-0.3200', '1.9120', '-1.7950', '0.6700', '3.6250', '-1.6710', '0.7000', '3.2350', '-2.1950', '0.1500', '3.7190', '-3.2390', '-0.5000', '2.5130', '-3.5770', '0.2700', '2.3240', '-2.1740', '1.3500', '3.9080', '-0.9070', '0.4800', '3.2100', '-2.0370', '-1.1400', '0.8340', '-3.1290', '0.8000', '2.9020', '-1.1900', '0.0100', '1.4230', '-2.4720', '0.7100', '2.9050', '-1.7630', '0.5600', '3.5980', '-2.5250', '0.5600', '3.6080', '-2.5320', '0.0300', '2.1900', '-1.9290', '-0.2000', '1.8370', '-2.2880', '0.1700', '2.3840', '-2.2600', '-1.6000', '0.2670', '-3.5260', '-1.2600', '0.2810', '-3.2150', '0.2200', '2.6610', '-2.2830', '0.0600', '2.0820', '-2.7740', '0.2300', '2.2700', '-2.0160', '-0.7300', '1.5590', '-2.7670', '0.5900', '2.5000', '-1.0240', '0.1300', '1.8050', '-1.3740', '-0.5800', '1.1740', '-2.6820', '0.6100', '3.2840', '-1.3950', '-0.3900', '2.4600', '-2.7110', '-0.1100', '1.7380', '-2.2300', '1.1770', '-0.6300', '-2.9930', '-0.9100', '-2.6350', '2.0460', '-2.1040', '3.1700', '-0.6200', '-1.2750', '-1.0210', '-0.9400', '1.4380', '-0.7000', '0.9170', '2.4570', '-2.0920', '-0.5800', 1609243782, '2020-29-12', 0),
(4, '0.4200', '2.4650', '-1.9080', '0.1500', '2.5040', '-2.3770', '1.2500', '3.2630', '-1.0660', '-0.4600', '1.4170', '-2.3800', '0.3900', '2.1630', '-1.5050', '0.6200', '3.4090', '-1.7780', '-0.4800', '1.4420', '-2.6510', '0.9100', '3.7190', '-1.2170', '-0.1200', '2.1020', '-2.2530', '0.7500', '3.9160', '-2.1210', '-0.1100', '3.1210', '-2.6280', '-0.0400', '2.3600', '-2.1400', '1.0200', '3.5510', '-1.0550', '-0.6200', '1.5040', '-2.4390', '0.3000', '2.7520', '-1.5960', '-0.2100', '1.8260', '-2.6640', '0.1700', '2.5100', '-1.8140', '1.3800', '4.0870', '-1.1790', '-2.1800', '1.3010', '-4.8660', '3.7100', '17.9390', '-7.5970', '0.5300', '2.3780', '-1.4900', '0.4200', '2.0390', '-1.4980', '0.7100', '3.6520', '-1.5060', '-0.7600', '1.2510', '-2.7700', '0.2200', '2.1800', '-1.7610', '-0.7100', '1.7550', '-2.8300', '-1.2500', '0.9830', '-3.2170', '1.5300', '3.4180', '-0.4770', '-0.2600', '2.0880', '-3.2580', '0.4000', '3.1670', '-3.6010', '0.3100', '-2.1920', '2.8500', '-0.8400', '1.4050', '-3.2340', '1.0100', '1.9720', '-2.7820', '-0.0500', '1.8610', '-1.8950', '-0.4100', '1.4350', '-2.5980', '-0.6100', '1.9380', '-2.9220', '-0.0600', '2.1490', '-2.3700', '-0.6900', '1.9360', '-3.3710', '0.0900', '2.8980', '-3.4760', '0.8700', '3.0790', '-3.3160', '-0.0800', '1.8600', '-1.8690', '-0.4900', '1.6230', '-2.8260', '0.2100', '2.6340', '-1.5300', '-0.2300', '1.6210', '-2.0450', '-0.2200', '1.9400', '-2.1780', '-0.0500', '1.9720', '-2.1930', '-1.2700', '1.7010', '-3.5490', '-0.2800', '2.4540', '-3.3300', '1.4700', '3.8550', '-1.4170', '-0.4800', '1.8690', '-2.7390', '-0.0700', '2.8500', '-2.5520', '-0.3100', '0.9980', '-2.6160', '0.5000', '2.5900', '-1.6330', '-0.4000', '1.6680', '-2.5360', '0.5900', '3.5420', '-2.0190', '0.8200', '3.3900', '-1.4960', '-0.0900', '1.9730', '-2.2680', '0.1400', '2.6950', '-2.3310', '-0.0200', '2.7090', '-2.4750', '0.3200', '2.1470', '-1.7480', '-0.3100', '1.7560', '-1.8410', '0.6700', '3.2340', '-1.6700', '0.7200', '3.0410', '-2.0490', '0.2000', '2.7580', '-2.6380', '-0.4900', '2.1520', '-3.8080', '0.5600', '2.7870', '-1.7630', '1.4300', '4.0230', '-1.1740', '0.6000', '2.6530', '-1.7700', '-1.0600', '0.7360', '-2.7790', '1.0800', '3.1360', '-1.0390', '0.0700', '1.7920', '-2.4820', '0.7200', '3.3700', '-1.7510', '0.6800', '4.0580', '-1.9800', '0.6800', '4.0630', '-1.9850', '0.0200', '2.5860', '-1.9780', '-0.1000', '2.4530', '-2.3200', '0.1300', '2.5250', '-2.3170', '-1.4000', '0.8740', '-3.4770', '-0.5500', '1.2770', '-2.7610', '0.2600', '2.3990', '-2.3500', '0.0600', '2.7160', '-2.1400', '0.0800', '2.2240', '-1.9240', '-0.6600', '1.3260', '-2.5140', '0.6800', '2.4660', '-1.1910', '0.1100', '1.8400', '-1.5380', '-0.5800', '1.5540', '-2.2890', '0.5600', '2.5520', '-1.2090', '-0.3300', '1.9560', '-2.8300', '-0.0200', '1.8750', '-2.3470', '1.2000', '-0.6200', '-2.7020', '-0.9500', '-2.0620', '2.0630', '-1.9530', '3.5190', '-0.5600', '-1.2180', '-1.3180', '-0.9600', '1.3080', '-0.7000', '1.6190', '2.2670', '-2.6350', '-0.3900', 1575028482, '2019-29-11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `initvalue`
--
ALTER TABLE `initvalue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawdata`
--
ALTER TABLE `rawdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `initvalue`
--
ALTER TABLE `initvalue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rawdata`
--
ALTER TABLE `rawdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
