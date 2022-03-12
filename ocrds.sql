-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 12:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocrds`
--

-- --------------------------------------------------------

--
-- Table structure for table `gd`
--

CREATE TABLE `gd` (
  `gdid` int(9) NOT NULL,
  `nid` bigint(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `full name` varchar(40) NOT NULL,
  `location of crime` varchar(255) NOT NULL,
  `thana name` varchar(30) NOT NULL,
  `problem statement` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nid` bigint(18) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nid`, `name`, `email`, `password`, `address`, `gender`, `mobile`) VALUES
(12345678, 'Abul Kalam', 'kalam@gmail.com', '1234', 'jhgjhj', 'Male', '01978707676'),
(12345679, 'ABCDEF', 'a@gmail.com', '1234', 'jgkjggkgjhgj', 'Male', '01978707671'),
(2374234523, 'asaasdas', 'eeem@gmail.com', '34242342', 'aksjadasdfsdf', 'Female', '01978707675'),
(2374234771, 'asaadas', 'asdas@gm', '3423434', 'sdfsdfsd', 'Male', '01978787642');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gd`
--
ALTER TABLE `gd`
  ADD PRIMARY KEY (`gdid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nid`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
