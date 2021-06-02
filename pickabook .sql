-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 10:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
  `payment` varchar(100) NOT NULL,
  `datePurchased` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateRecieved` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(200) NOT NULL,
  `userId` int(11) NOT NULL,
  `cardNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `pic`, `title`, `category`, `seller`, `price`, `payment`, `datePurchased`, `dateRecieved`, `status`, `userId`, `cardNumber`) VALUES
(15, 'stay.jpg', 'Stay', ' Fiction', 'Kerwien Bengil', 300, 'Credit Card', '2021-06-01 20:11:59', NULL, 'Pending', 17, '1234567890123456'),
(16, 'Dangerous.jpg', 'Dangerous', ' Fiction', 'Kerwien Bengil', 250, '', '2021-06-01 20:11:59', NULL, 'Pending', 17, '1234567890123456'),
(17, 'arranges.jfif', 'Arranged Love', ' Fiction', 'Marjory Mondido', 400, '', '2021-06-01 20:11:59', NULL, 'Pending', 17, '1234567890123456'),
(18, 'before we were yours.jpg', 'Before We Were Yours', ' Fiction', 'Kerwien Bengil', 300, 'Debit Card', '2021-06-01 20:13:09', NULL, 'Pending', 16, '1234567890123456'),
(19, 'Dinosaur planet.jfif', 'Dinosaur Planet', ' Fiction', 'Leslie Marie Reyes', 300, '', '2021-06-01 20:13:09', NULL, 'Pending', 16, '1234567890123456'),
(20, 'tears of endurance.jpg', 'Tears of Endurance', ' Fiction', 'Jessa Ortiz', 350, '', '2021-06-01 20:13:09', NULL, 'Pending', 16, '1234567890123456'),
(21, 'stay.jpg', 'Stay', ' Fiction', 'Kerwien Bengil', 300, 'Credit Card', '2021-06-01 20:15:09', NULL, 'Pending', 20, '2345677654398765'),
(22, 'The-Memory-of-Running.jpg', 'The Memory of Running', ' Fiction', 'Jessa Ortiz', 130, '', '2021-06-01 20:15:09', NULL, 'Pending', 20, '2345677654398765'),
(23, 'where the sidewalks ends.jpg', 'Where the Sidewalks ends', ' Non-Fiction', 'Loyla Dejito', 500, '', '2021-06-01 20:15:09', NULL, 'Pending', 20, '2345677654398765'),
(24, 'modern.jfif', 'Modern Love', ' Non-Fiction', 'Ryan Amancio', 400, '', '2021-06-01 20:15:09', NULL, 'Pending', 20, '2345677654398765');

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
(71, 'Leslie Marie Reyes', 'Deception and Desire', 400, ' Romance', ' Fiction', ' Deception.jpg', '2021-06-02 06:35:48'),
(72, 'Marjory Mondido', 'Arranged Love', 400, ' Romance', ' Fiction', ' arranges.jfif', '2021-06-02 07:09:29'),
(73, 'Marjory Mondido', 'The Emperor Tea Garden', 200, ' Adventure', ' Fiction', ' emperor.jpg', '2021-06-02 07:12:06'),
(74, 'Marjory Mondido', 'The Lost World', 300, ' Adventure', ' Fiction', ' lost world.jpg', '2021-06-02 07:13:41'),
(75, 'Marjory Mondido', 'Dinosaur', 100, ' Adventure', ' Fiction', ' dinosaur.jpg', '2021-06-02 07:14:32'),
(76, 'Leslie Marie Reyes', 'Dinosaur Planet', 300, ' Adventure', ' Fiction', ' Dinosaur planet.jfif', '2021-06-02 07:16:12'),
(77, 'Kerwien Bengil', 'Wild By Nature', 100, ' Adventure', ' Fiction', ' wild.jpeg', '2021-06-02 07:17:53'),
(78, 'Kerwien Bengil', 'Before We Were Yours', 300, ' Drama', ' Fiction', ' before we were yours.jpg', '2021-06-02 07:19:35'),
(79, 'Kerwien Bengil', 'White Lies', 500, ' Drama', ' Fiction', ' white lies.jpg', '2021-06-02 07:20:18'),
(80, 'Jessa Ortiz', 'The Memory of Running', 130, ' Drama', ' Fiction', ' The-Memory-of-Running.jpg', '2021-06-02 07:23:00'),
(81, 'Jessa Ortiz', 'Tears of Endurance', 350, ' Drama', ' Fiction', ' tears of endurance.jpg', '2021-06-02 07:23:52'),
(82, 'Jessa Ortiz', 'Shadow and Bone', 500, ' Fantasy', ' Fiction', ' shadow.jfif', '2021-06-02 07:25:06'),
(83, 'Jessa Ortiz', 'The Elements of the Crown', 300, ' Fantasy', ' Fiction', ' elemets.jpg', '2021-06-02 07:25:53'),
(84, 'Jessa Ortiz', 'In Mid-Air', 250, ' Essay', ' Non-Fiction', ' in mid.jpg', '2021-06-02 07:28:25'),
(85, 'Judy Ann Arquisal', 'White Black White', 360, ' Essay', ' Non-Fiction', ' brown white.png', '2021-06-02 07:30:47'),
(86, 'Judy Ann Arquisal', 'I Was Told There Be', 180, ' Essay', ' Non-Fiction', ' I was told.jpg', '2021-06-02 07:31:54'),
(87, 'Ma. Justine Bayutas', 'Our Women in the Ground', 450, ' Essay', ' Non-Fiction', ' women.jfif', '2021-06-02 07:36:21'),
(88, 'Ma. Justine Bayutas', 'Behold America', 600, ' History', ' Non-Fiction', ' behold.jpg', '2021-06-02 07:38:10'),
(89, 'Ma. Justine Bayutas', ' History of the Philippines', 570, ' History', ' Non-Fiction', ' philippine.jpg', '2021-06-02 07:39:27'),
(90, 'Joshua Avenido', 'Asian Place, Filipino Nation', 500, ' History', ' Non-Fiction', ' asian.jpg', '2021-06-02 07:42:11'),
(91, 'Joshua Avenido', 'The Savage Wars of Peace', 400, ' History', ' Non-Fiction', ' savage.jpg', '2021-06-02 07:42:57'),
(92, 'Loyla Dejito', 'Blooming', 200, ' Poetry', ' Non-Fiction', ' blooming.jpg', '2021-06-02 07:46:13'),
(93, 'Loyla Dejito', 'Where the Sidewalks ends', 500, ' Poetry', ' Non-Fiction', ' where the sidewalks ends.jpg', '2021-06-02 07:47:54'),
(94, 'Restituto Fuentes', 'Now All Roads Leads to France', 500, ' Biography', ' Non-Fiction', ' now.jfif', '2021-06-02 07:51:43'),
(95, 'Ryan Amancio', 'Modern Love', 400, ' Biography', ' Non-Fiction', ' modern.jfif', '2021-06-02 07:56:40'),
(96, 'Ryan Amancio', 'The Letters of Shirley Jackson', 300, ' Biography', ' Non-Fiction', ' the letters.jfif', '2021-06-02 08:09:30'),
(97, 'Ryan Amancio', 'The Lottery', 150, ' Biography', ' Non-Fiction', ' The Lottery.jpg', '2021-06-02 08:10:34');

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
(17, 'Leslie Marie', 'Reyes', 'August 7, 2000', 'Talamban Cebu City', 'Lesh', 'lesh@gmail.com', '123456', '2021-06-02 02:31:43', ''),
(18, 'Marjory', 'Mondido', 'February 14, 2000', 'Talamban Cebu City', 'Marj', 'marj@gmail.com', '123456', '2021-06-02 02:54:55', ''),
(19, 'Jessa', 'Ortiz', 'August 3, 1999', 'Talamban Cebu City', 'Jess', 'jess@gmail.com', '123456', '2021-06-02 03:22:13', ''),
(20, 'Judy Ann', 'Arquisal', 'July 31, 1999', 'Talamban Cebu City', 'Jud', 'jud@gmail.com', '123456', '2021-06-02 03:30:06', ''),
(21, 'Ma. Justine', 'Bayutas', 'September 20, 2000', 'Talamban Cebu City', 'Justine', 'just@gmail.com', '123456', '2021-06-02 03:34:28', ''),
(22, 'Joshua', 'Avenido', 'October 20, 2000', 'Talamban Cebu City', 'Josh', 'josh@gmail.com', 'gwapo..', '2021-06-02 03:41:00', ''),
(23, 'Loyla', 'Dejito', 'September 2, 2000', 'Talamban Cebu City', 'loyla', 'loy@gmlail.com', 'gwapa..', '2021-06-02 03:45:04', ''),
(24, 'Restituto', 'Fuentes', 'December 2, 2000', 'Talamban Cebu City', 'Res', 'res@gmail.com', 'gwapoko', '2021-06-02 03:50:55', ''),
(25, 'Ryan', 'Amancio', 'August 3, 2000', 'Talamban Cebu City', 'RayRay', 'ray@gmail.com', 'mydream', '2021-06-02 03:54:18', '');

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
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sellbooks`
--
ALTER TABLE `sellbooks`
  MODIFY `sellerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
