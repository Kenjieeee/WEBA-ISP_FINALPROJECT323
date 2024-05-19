-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 01:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdc_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `reqinfos`
--

CREATE TABLE `reqinfos` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `cstatus` varchar(100) NOT NULL,
  `datesubmit` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reqinfos`
--

INSERT INTO `reqinfos` (`id`, `userid`, `fullname`, `bday`, `bplace`, `address`, `age`, `cstatus`, `datesubmit`, `status`) VALUES
(0, 1, 'Kenjie  Delacruz', '2002-12-06', 'Santol, Balagtas Bulacan', 'BPC', 21, 'Single', '05/19/2024', 'Failed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `bday` varchar(50) NOT NULL,
  `bplace` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `cstatus` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fname`, `lname`, `bday`, `bplace`, `address`, `age`, `cstatus`, `img`, `email`, `username`, `password`, `role`) VALUES
(1, 'Kenjie', 'Delacruz', '2002-12-06', 'Santol, Balagtas Bulacan', 'BPC', 21, 'Single', 'Me.jpg', 'delacruzkenjie1206@gmail.com', 'Kenjie06', '$2y$10$DrKNeWVGd5jIgDCvvQYLKOx7GM9AzEVzTs5Z8nx8/AY1XcOuo8xdS', 'User'),
(2, 'Melanie', 'Morales', '', '', '', 0, '', '', '', 'Mel123', '$2y$10$kWaq2nZFvJuxbBqiFmyASOwJCS58NEjmpV5B2qRHwIWHgiI40YPIK', ''),
(3, 'dsadad', 'asdasd', '', '', '', 0, '', '', '', 'dsadasd', '$2y$10$x3z7cFJ0q5VZsL7/A4s29ecmHybNVZGd1s9jCQAbSsuw/BJl3bI.G', ''),
(4, 'rimyde', 'fyrebepaf', '', '', '', 0, '', '', '', 'feqolob', '$2y$10$xK5kl.GtSUHe0IkgMQV9DuQfzE60jBF6EIT1ZVkAfN89EsjJZ1LO.', ''),
(5, 'votuxitedo', 'lylyqejiw', '', '', '', 0, '', '', '', 'wogidar', '$2y$10$QXhEXGnMB8dMmGGRXZX64OwoEsJ8OvAXBZWH/JBdlddgvy4u5I7Si', ''),
(6, 'latacyqyb', 'zyziwiha', '', '', '', 0, '', '', '', 'jibok', '$2y$10$dqYYgxPcYPokEZSl0nvB.ulvFbs0pQKY2F3KF9G8hwb2tbi0bi/qa', ''),
(7, 'myxep', 'cizal', '', '', '', 0, '', '', '', 'corudorufi', '$2y$10$yhoY/aTDedZfJLIPP.AIYeakn2Uk0mUiVCQN8IJb3haXBT4y6vAI.', ''),
(8, 'fygugoxija', 'pocifutuma', '', '', '', 0, '', '', '', 'qahuxut', '$2y$10$LjrfIP0jghwMios0VDbOYus7xVtkYDuywbeRxaTGX8kmUBXsS34J6', ''),
(9, 'kyjuzin', 'lomedabe', '', '', '', 0, '', '', '', 'mosymag', '$2y$10$E5OCMMMcbSRH3rTxyXmwuOMPVi8XrR2.i0IYs83FQWS5.cDLV0GWm', ''),
(10, 'Admin', '01', '2024-05-18', 'dasdasd', 'asdadasddad', 21, 'Single', '', 'Defaultadmin@gmail.com', 'Try', '$2y$10$QDfrOispn3B8B1GuOCupOuZAxpy2GqG18fXhINyLRSiD.BGG3JzE2', 'Admin'),
(11, 'boniz', 'wugywuxi', '', '', '', 0, '', '', '', 'STEVE', '$2y$10$IRNwyVaKJ0Pb5gHmWfp9XOnxdfJaMd3yePV1M1YmxmIusKV4cO136', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reqinfos`
--
ALTER TABLE `reqinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
