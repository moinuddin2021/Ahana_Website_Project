-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 01:35 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahanayoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `photo`, `title`) VALUES
(1, 'uploaded/popular-classes-img3.jpg', 'Ashtanga Yoga'),
(2, 'uploaded/popular-classes-img6.jpg', 'Bhakti Yoga'),
(3, 'uploaded/popular-classes-img4.jpg', 'Power Yoga'),
(4, 'uploaded/popular-classes-img1.jpg', 'Hatha Yoga'),
(5, 'uploaded/popular-classes-img2.jfif', 'Prenatal Yoga'),
(7, 'uploaded/popular-classes-img5.jpg', 'Aerial Yoga');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `classes` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `phone`, `birth`, `age`, `classes`, `category`, `gender`, `datetime`) VALUES
(1, 'Moinuddin', 'Chudiwal', 'moinuddin786@gmail.com', '7345612345', '03-02-2001', '21', 'Prenatal Yoga', 'Entermediate', 'Male', '2021-07-13 03:31:11'),
(2, 'Mohammad', 'Palsaniya', 'mohammad22@gmail.com', '1234554321', '23-01-2001', '21', 'Bikram yoga', 'Begginer', 'Male', '2021-07-13 03:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `sendmessage`
--

CREATE TABLE `sendmessage` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sendmessage`
--

INSERT INTO `sendmessage` (`id`, `fname`, `lname`, `email`, `phone`, `message`, `datetime`) VALUES
(1, 'Moinuddin', 'Chudwial', 'moinuddin786@gmail.com', '7243512345', 'Hello i am moinuddin', '2021-07-13 03:26:51'),
(2, 'Mohammad', 'Palsaniya', 'mohammad22@gmail.com', '1234567891', 'Hello i am mohammad', '2021-07-13 03:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `photo`) VALUES
(1, 'uploaded/slide1.png'),
(2, 'uploaded/slide9.png'),
(3, 'uploaded/slide4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendmessage`
--
ALTER TABLE `sendmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sendmessage`
--
ALTER TABLE `sendmessage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
