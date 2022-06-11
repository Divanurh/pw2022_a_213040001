-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 01:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Name_students` varchar(50) NOT NULL,
  `Student_number` varchar(50) NOT NULL,
  `Age` varchar(11) NOT NULL,
  `Parents` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Picture`, `Name_students`, `Student_number`, `Age`, `Parents`) VALUES
(1, '62a02f722429bimg1.jpeg', 'Ersya Smith', '2130001', '4 ', 'Kale Smith'),
(2, 'img2.jpeg', 'Daniel Ricards', '2130002', '6 ', 'Damian Ricards'),
(3, 'img3.jpeg', 'Willy Nick', '2130003', '2 ', 'Oricon Nick'),
(4, 'img4.jpeg', 'Keenan Nevan', '2130004', '8', 'Nicholas Nevan'),
(5, 'img5.jpeg', 'Chelsea Adine Keisha', '2130005', '2 ', 'James '),
(6, 'img6.jpeg', 'Clarissa Davira', '2130006', '2', 'Noah'),
(7, 'img7.jpeg', 'Freya', '2130007', '3 ', 'Michael'),
(8, 'img8.jpeg', 'Eveline', '2130008', '3 ', 'Altezza'),
(9, 'img9.jpeg', 'Grizelle', '2130009', '6 ', 'William'),
(10, 'img10.jpeg', 'Jessica', '2130010', '3 ', 'Dareen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'diva', '$2y$10$yQwUbctexAYvwXJCS0/tkuTpN4XlFb5JfEmchNA2IqQ15zVZuLy22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
