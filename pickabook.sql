-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 08:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickabook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adminPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `firstname`, `lastname`, `birthdate`, `address`, `email`, `username`, `password`, `adminPic`) VALUES
(2, 'Christine Joy', 'Ditchon', 'May 22, 2000', 'Cebu City', 'joy@gmail.com', 'ChristineJoy', 'admin2', ''),
(3, 'David', 'Pael', 'January 25, 2000', 'Negros Oriental', 'david@gmail.com', 'David', 'admin3', ''),
(4, 'Dexter', 'Tampioc', 'November 22, 1999', 'Negros Oriental', 'tampioc@gmail.com', 'Dexter', 'admin4', ''),
(6, 'Mery-an', 'Telez', 'August 10, 2000', 'Cebu City', 'telez@gmail.com', 'Mery-an', 'admin1', 'antonnete5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `sellerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `datePurchased` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateRecieved` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(200) NOT NULL,
  `userId` int(11) NOT NULL,
  `cardNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellbooks`
--

CREATE TABLE `sellbooks` (
  `sellerID` int(11) NOT NULL,
  `sellername` varchar(255) NOT NULL,
  `booktitle` varchar(255) NOT NULL,
  `bookprice` int(20) NOT NULL,
  `bookgenre` varchar(255) NOT NULL,
  `bookcategory` varchar(255) NOT NULL,
  `bookpicture` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellbooks`
--

INSERT INTO `sellbooks` (`sellerID`, `sellername`, `booktitle`, `bookprice`, `bookgenre`, `bookcategory`, `bookpicture`, `created_at`) VALUES
(69, 'Kerwien Bengil', 'Stay', 300, ' Romance', ' Fiction', ' stay.jpg', '2021-06-02 06:28:57'),
(70, 'Kerwien Bengil', 'Dangerous', 250, ' Romance', ' Fiction', ' Dangerous.jpg', '2021-06-02 06:29:59'),
(71, 'Leslie Marie Reyes', 'Deception and Desire', 400, ' Romance', ' Fiction', ' Deception.jpg', '2021-06-02 06:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `userPic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstname`, `lastname`, `birthdate`, `address`, `username`, `email`, `password`, `created_at`, `userPic`) VALUES
(16, 'Kerwien', 'Bengil', 'April 30, 1999', 'Talamban, Cebu City', 'Kerker', 'kerker@gmail.com', '123456', '2021-06-02 02:28:04', ''),
(17, 'Leslie Marie', 'Reyes', 'August 7, 2000', 'Talamban Cebu City', 'Lesh', 'lesh@gmail.com', '123456', '2021-06-02 02:31:43', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `id` (`userId`),
  ADD KEY `books` (`sellerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `user` (`userId`);

--
-- Indexes for table `sellbooks`
--
ALTER TABLE `sellbooks`
  ADD PRIMARY KEY (`sellerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sellbooks`
--
ALTER TABLE `sellbooks`
  MODIFY `sellerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `books` FOREIGN KEY (`sellerID`) REFERENCES `sellbooks` (`sellerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `user` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
