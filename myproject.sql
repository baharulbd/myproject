-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:39 PM
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
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `id` varchar(11) COLLATE utf8mb4_bin DEFAULT NULL,
  `possition` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `salary` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `date` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `taka` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `resetToken` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `resetComplete` varchar(3) COLLATE utf8mb4_bin DEFAULT 'No'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `name`, `id`, `possition`, `salary`, `address`, `date`, `taka`, `phone_number`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`) VALUES
(38, 'Abir Mahmud Abrar', '22', 'Developer', '1200', 'Jashore', NULL, NULL, '01782515650', '', '', '', '', NULL, 'No'),
(28, 'baharul mahmud', '3', 'Seo Expert', '1635656', 'mollaoara  primary road , Jashore', '06-03-2019', '4000', '01782515650', '', '', '', '', NULL, 'No'),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mahmud', '$2y$10$g9g5y/Kc2pD1p8TsYXcn6uv2P6IIENdl.dL5w.lPJq.IPtBpIrFIO', 'baharulmammud50@gmail.com', 'Yes', NULL, 'No'),
(40, 'Baharul Islam', '19', 'Web Developer', '22000', 'Jhikargacha', NULL, NULL, '01782515650', '', '', '', '', NULL, 'No'),
(25, 'Suva Islam Sanai', '25', 'Content Writter', '4656565', 'Pairadanga', '06-04-2021', '3000', '01946404574', '', '', '', '', NULL, 'No'),
(24, 'Sameya Sultana Ira', '1', 'Programmer', '6500', 'Jasshore', '06-08-2020', '2000', '01478524196', '', '', '', '', NULL, 'No'),
(30, 'baharul mahmud', '5', 'Manager', '60000', 'mollaoara ', '05-07-2021', '5000', '01782515650', '', '', '', '', NULL, 'No'),
(33, 'Abdullah', '12', 'Content Writter', '14000', 'Jashore', NULL, NULL, '01782515650', '', '', '', '', NULL, 'No'),
(22, 'Munna Hossain', '50', 'Data Entry  Expert', '14000', 'Monirampur', '06-07-2021 ', '1000', '01782515650', '', '', '', '', NULL, 'No'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sakib', '$2y$10$iow5/2Bc6wvZfLOgZ0xq/.XbcOl2DcLTpcPf74j0RbxLjnl23Dje6', 'sakib50@gmail.com', 'Yes', NULL, 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
