-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 05:11 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(40) NOT NULL,
  `aemail` varchar(40) NOT NULL,
  `apassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `apassword`) VALUES
(1, 'admin', 'admin@ocr.com', '1234'),
(2, 'admin', 'admin@ocr.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `message` text NOT NULL,
  `gdid` varchar(30) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gd`
--

CREATE TABLE `gd` (
  `gdid` int(9) NOT NULL,
  `nid` bigint(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `location of crime` varchar(255) NOT NULL,
  `thana name` varchar(30) NOT NULL,
  `problem statement` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gd`
--

INSERT INTO `gd` (`gdid`, `nid`, `type`, `name`, `location of crime`, `thana name`, `problem statement`, `photo`, `status`, `pid`) VALUES
(1, 0, 'Emergency', '', 'jhgjjhgj', 'Dhaka', 'jhgjgjh', '', '', 1),
(2, 12345679, 'Emergency', 'ABCDEF', 'jhjghgjhj', 'Chittagong', 'fffffffffffffff jasdhas askjdhaks kaksjdha akjsd aksjdha kaksjd akjsdh aksjdb akjsdh kajsdhk ahsdhkjash baosdhkasjh aojsdkajshkdjhkahdkjahsk kjasdh.', '', '', 0),
(3, 12345679, 'Emergency', 'ABCDEF', 'jhjghgjhj', 'Chittagong', 'fffffffffffffff', '', '', 0),
(4, 12345679, 'Emergency', 'ABCDEF', 'jhjghgjhj', 'Chittagong', 'fffffffffffffff', '', '', 0),
(5, 12345679, 'Choose...', 'ABCDEF', 'aaaa', 'Chittagong', 'aaa', '', 'queue', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(9) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `name`, `email`, `message`) VALUES
(1, 'dsfsdf', 'asdas@gm', 'asda asdasd asdas'),
(2, 'kajsd ', 'akjsd@gmail.com', 'sdkfj  ssss'),
(3, 'kajsd ', 'akjsd@gmail.com', 'sdkfj  ssss'),
(4, 'kajsd ', 'akjsd@gmail.com', 'sdkfj  ssss'),
(5, 'kajsd ', 'akjsd@gmail.com', 'sdkfj  ssss'),
(6, 'kajsd ', 'akjsd@gmail.com', 'sdkfj  ssss'),
(7, 'kajsd ', 'akjsd@gmail.com', 'sdkfj  ssss');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `pid` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`pid`, `name`, `email`, `password`, `gender`, `mobile`) VALUES
(1, 'Mansur', 'mansur@gmail.com', '1234', 'Male', '01234567890');

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
(2374234322, 'pppp', 'ppp@yahoo.com', '1234', 'kdjfkjdfhakdjsfh', 'Male', '01978787644'),
(2374234523, 'asaasdas', 'eeem@gmail.com', '34242342', 'aksjadasdfsdf', 'Female', '01978707675'),
(2374234771, 'asaadas', 'asdas@gm', '3423434', 'sdfsdfsd', 'Male', '01978787642');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gd`
--
ALTER TABLE `gd`
  ADD PRIMARY KEY (`gdid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gd`
--
ALTER TABLE `gd`
  MODIFY `gdid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
