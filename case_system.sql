-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 04:51 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `userid` int(11) NOT NULL,
  `lawyerid` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `documents` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `name`, `userid`, `lawyerid`, `date`, `documents`, `status`) VALUES
(3, 'new Fac', 1, 1, '2019-04-25', '../uploads/FileZilla.xml', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `lawyerid` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `dateofbirth` date NOT NULL,
  `documents` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `name`, `email`, `pwd`, `mobile`, `gender`, `dateofbirth`, `documents`) VALUES
(1, 'Dattaprasad Ekavade', 'data@data.com', 'data', '2147483647', 'm', '2019-03-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `dateofbirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pwd`, `mobile`, `gender`, `dateofbirth`) VALUES
(1, 'Dattaprasad Ekavade', 'data@data.com', 'data', '9765819921', 'm', '2019-03-05'),
(2, 'Dattaprasad Ekavade', 'data@data.com', 'data', '9765819921', 'm', '2019-03-18'),
(3, 'Dattaprasad Ekavade2', 'data1@data.com', 'data', '9765819921', 'm', '2019-03-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
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
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
