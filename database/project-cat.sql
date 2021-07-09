-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 03:25 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `P_CatId` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`P_CatId`, `Name`, `Status`, `CreatedDate`) VALUES
(1, 'Men', 1, '2021-07-04 20:33:36'),
(2, 'Women', 1, '2021-07-04 20:34:18'),
(3, 'Mobile', 1, '2021-07-04 20:34:30'),
(4, 'Electronics', 1, '2021-07-04 20:34:44'),
(5, 'Cars&Moterbikes', 1, '2121-07-08 00:00:00'),
(6, 'Kids Fashion', 1, '2121-07-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `Product_ID` int(100) NOT NULL,
  `Ctery_Id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` bigint(200) NOT NULL,
  `SQA_Number` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Front_image` varchar(100) NOT NULL,
  `Side_image` varchar(100) NOT NULL,
  `Back_image` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`Product_ID`, `Ctery_Id`, `Name`, `Price`, `SQA_Number`, `Quantity`, `Size`, `Color`, `Front_image`, `Side_image`, `Back_image`, `Description`, `Status`, `CreatedDate`) VALUES
(5, '1', 't-shirt', 250, '855331772237', 2, 'XL', 'pink', 'photo96.png', 'pic170.png', 'garlley156.png', 'Hello Stranger', 1, '2121-07-05 00:00:00.000000'),
(8, '4', 'HillGrove', 1519, '55527', 1, 'M', 'Black', 'photo42.png', 'pic33.png', 'garlley250.png', '', 1, '2121-07-09 00:00:00.000000'),
(9, '2', 'Women Skater Black Dress', 449, '0', 1, 'M', 'Black', 'photo81.png', 'pic439.png', 'garlley44.png', ' dress', 1, '2121-07-06 00:00:00.000000'),
(10, '3', 'realme 7 Pro ', 15999, 'RMX2170', 1, '', ' Sun Kissed Leather', 'photo26.png', 'pic350.png', 'garlley390.png', '', 1, '2121-07-09 00:00:00.000000'),
(11, '6', 'Boys Festive & Party Kurta, Waistcoat and Breeches Set', 274, '0', 1, 'XS', 'Black', 'photo318.png', 'pic185.png', 'garlley348.png', 'A Beautiful little Suit', 1, '2121-07-06 00:00:00.000000'),
(12, '6', 'Girls Mini/Short Festive/Wedding Dress ', 227, '0', 2, 'M', 'Blue', 'photo360.png', 'pic129.png', 'garlley468.png', 'Paisa vasool!! Must buy! At this price range its very nice!', 1, '2121-07-08 00:00:00.000000'),
(13, '2', 'Crepe Printed Salwar Suit Material', 445, '0', 2, 'M', 'Blue', 'photo120.png', 'pic380.png', 'garlley237.png', ' Bank of Baroda Mastercard debit card first time transaction, Terms and Condition applyT&C', 1, '2121-07-08 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Name`, `Email`, `Password`, `Mobile`, `Photo`, `Status`, `CreatedDate`) VALUES
(1, 'Jatin Chauhan', 'chauhan07072001@gmail.com', '8c9e5de7349dbbd6dbd07b21efb4282e', 8076390340, 'photo286.png', 1, '2121-07-04 00:00:00.000000'),
(2, 'Monu  ', 'monu@gmail.com', '12793ea96d6f3660c3b06f4de4497768', 885496627, 'photo80.png', 1, '2121-07-06 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`P_CatId`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `P_CatId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `Product_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
