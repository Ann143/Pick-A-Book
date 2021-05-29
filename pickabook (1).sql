-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 12:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `firstname`, `lastname`, `birthdate`, `address`, `email`, `username`, `password`) VALUES
(1, 'Mery-an', 'Telez', 'August 10, 2000', 'Cebu City', 'telez@gmail.com', 'Mery-an', 'admin1'),
(2, 'Christine Joy', 'Ditchon', 'May 22, 2000', 'Cebu City', 'joy@gmail.com', 'ChristineJoy', 'admin2'),
(3, 'David', 'Pael', 'January 25, 2000', 'Negros Oriental', 'david@gmail.com', 'David', 'admin3'),
(4, 'Dexter', 'Tampioc', 'November 22, 1999', 'Negros Oriental', 'tampioc@gmail.com', 'Dexter', 'admin4');

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
(63, 'dcfs', 'sdf', 234, ' fcv', ' Fiction', ' group.png', '2021-05-28 16:28:51'),
(64, 'Ann', 'Hi', 200, ' Romance', ' Fiction', ' hagakhakan1.jpg', '2021-05-28 16:31:00'),
(65, 'Ann', 'I love you', 200, ' Romance', ' Fiction', ' carolinian.PNG', '2021-05-28 16:31:41'),
(66, 'Dexter', 'love', 200, ' Romance', ' Fiction', ' 1.png', '2021-05-28 20:47:38'),
(67, 'None', 'none', 350, ' Romance', ' Fiction', ' 3.jpg', '2021-05-29 05:21:04');

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
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstname`, `lastname`, `birthdate`, `address`, `username`, `email`, `password`, `created_at`) VALUES
(12, 'Mery-an', 'Telez', 'July 31, 1999', 'Talamban', 'Ann', 'mtelez138@gmail.com', '$2y$10$WRCzWzipiv2zCyVvA5MmLe.sR63MTwE55qRJMFWj7LDY2PG4vOLHu', '2021-05-14 08:57:56'),
(13, 'Dexter', 'Tampioc', 'May 22, 2000', 'Cebu', 'None', 'none@gmail.com', '$2y$10$2QzD0OpjhtI0v1lrBMIfgeK0QpO5.2Bh.MD9z/GZHfHu//gFH4IVq', '2021-05-29 01:19:52'),
(14, 'Papang', 'Tampioc', 'May 22, 2000', 'Cebu', 'Papang', 'dexter@test', '$2y$10$.v4cOMtDW3wgdMEeZiW5ZeygkubjnpBMUBbf8Lm2pFwL48SSRWoBK', '2021-05-29 01:58:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

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
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellbooks`
--
ALTER TABLE `sellbooks`
  MODIFY `sellerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
