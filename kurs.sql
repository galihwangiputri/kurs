-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2021 at 08:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurs_table`
--

CREATE TABLE `kurs_table` (
  `nilai` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `mata_uang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurs_table`
--

INSERT INTO `kurs_table` (`nilai`, `satuan`, `mata_uang`) VALUES
(44458, 1, 'Baht Thailand (THB)'),
(47581, 1, 'Dinar Kuwait (KWD)'),
(14330, 1, 'Dolar Amerika Serikat (USD)'),
(11093, 1, 'Dolar Australia (AUD)'),
(10798, 1, 'Dolar Brunei Darussalam (BND)'),
(1846, 1, 'Dolar Hongkong (HKD)'),
(11867, 1, 'Dolar Kanada (CAD)'),
(10393, 1, 'Dolar Selandia Baru (NZD)'),
(10815, 1, 'Dolar Singapura (SGD)'),
(17495, 1, 'Euro (EUR)'),
(15966, 1, 'Franc Swiss (CHF)'),
(2353, 1, 'Kroner Denmark (DKK)'),
(1717, 1, 'Kroner Norwegia (NOK)'),
(1728, 1, 'Kroner Swedia (SEK)'),
(9, 1, 'Kyat Myanmar (MMK)'),
(100, 1, 'Neverland (NVD)'),
(298, 1, 'Peso Philipina (PHP)'),
(20298, 1, 'Poundsterling Inggris (GBP)'),
(3460, 1, 'Ringgit Malaysia (MYR)'),
(3821, 1, 'Riyal Saudi Arabia (SAR)'),
(197, 1, 'Rupee India (INR)'),
(93, 1, 'Rupee Pakistan (PKR)'),
(72, 1, 'Rupee Sri Lanka (LKR)'),
(13, 1, 'Won Korea (KRW)   '),
(13114, 100, 'Yen Jepang (JPY)'),
(2244, 1, 'Yuan Renminbi Tiongkok (CNY)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurs_table`
--
ALTER TABLE `kurs_table`
  ADD PRIMARY KEY (`mata_uang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
