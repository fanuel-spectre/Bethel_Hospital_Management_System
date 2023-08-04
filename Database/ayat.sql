-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 11:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `fullname`, `username`, `password`) VALUES
(1, 'fanuel haftu', 'slim', 'shady');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `eid` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `jobtitle` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`eid`, `firstname`, `lastname`, `email`, `phoneno`, `adress`, `jobtitle`, `username`, `password`, `confirmpassword`) VALUES
(7, 'millionare', 'billionare', 'money@gmail.com', '09343423', 'bank', 'DB Manager', 'www', 'cash', ''),
(8, 'zk', 'zs', 'aq@gmail.com', '2123123', 'adiss', 'web designer', 'a', 'a', ''),
(9, 'nuredin', 'mohhamod', 'nura@gmail.com', '1234560987', 'merkato', 'Office Secritary', 'd', 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `employemessage`
--

CREATE TABLE `employemessage` (
  `messageid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employemessage`
--

INSERT INTO `employemessage` (`messageid`, `fullname`, `email`, `phoneno`, `message`) VALUES
(2, 'milli', 'milli@gmail.com', '0987654321', 'hello how are you doing.. im looking for a house.'),
(3, 'zak', 'zak@gmail.com', '09178789', 'meche new demoz emiseten'),
(4, 'nuredin', 'nura@gmail.com', '5456456', 'demoz aywetam wey bet kiray derese chikua argzalech be maryam demoz stegn kefelg yefelkewn adergalew YEFELKEW'),
(5, 'fanu', 'fanu@gmail.com', '0919040340', 'wat the fuck are yu doing');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `houseid` int(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `houseno` varchar(50) NOT NULL,
  `htype` varchar(50) NOT NULL,
  `hlocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`houseid`, `hname`, `houseno`, `htype`, `hlocation`) VALUES
(3, 'villa3', 'number3', 'villa', 'bole'),
(4, 'villa4', 'number4', 'villa', 'bole'),
(11, 'villa5', 'number5', 'villa', 'bole'),
(12, 'villa1', 'number1', 'villa', 'bole'),
(13, 'villa2', 'number2', 'villa', 'bole');

-- --------------------------------------------------------

--
-- Table structure for table `houselist`
--

CREATE TABLE `houselist` (
  `houseid` int(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `houseno` varchar(50) NOT NULL,
  `htype` varchar(50) NOT NULL,
  `hlocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houselist`
--

INSERT INTO `houselist` (`houseid`, `hname`, `houseno`, `htype`, `hlocation`) VALUES
(1, 'villa1', 'number1', 'villa', 'bole'),
(2, 'villa2', 'number2', 'villa', 'bole'),
(3, 'villa3', 'number3', 'villa', 'bole'),
(4, 'villa4', 'number4', 'villa', 'bole'),
(5, 'villa5', 'number5', 'villa', 'bole'),
(6, 'apartment1', 'number1', 'apartment', 'bole'),
(7, 'apartment2', 'number2', 'apartment', 'bole'),
(8, 'apartment3', 'number3', 'apartment', 'bole'),
(9, 'apartment4', 'number4', 'apartment', 'bole'),
(10, 'apartment5', 'number5', 'apartment', 'bole');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageid` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageid`, `fullname`, `email`, `phoneno`, `message`) VALUES
(1, 'bez', 'ttt@gmail.com', '234567', 'asdfghhtdgdfgdfdfgfg'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', 'yorda@gmail.com', '0909809809', ''),
(6, '', '', '', ''),
(7, '', 'lll@gmail', '00009999', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, 'wererewr', 'rerwer@gmail.com', '12345', 'dfsdfdfdfsdf'),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id` int(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `llll` varchar(50) NOT NULL,
  `phonenoo` varchar(50) NOT NULL,
  `add` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `security` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `villano` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `fname`, `type`, `city`, `villano`, `payment`, `transaction_date`) VALUES
(30, 'money', 'Villa', 'Bole', 'villa one', 'CBE', '2020-01-23 05:37:16'),
(34, 'wew', 'Villa', 'Bole', 'villa one', 'CBE', '2020-01-23 05:37:16'),
(38, 'yorda', 'Villa', 'Bole', 'Villa One', 'CBE', '2020-01-23 08:08:37'),
(40, 'abrsh', 'Villa', 'Bole', 'Villa One', 'CBE', '2020-01-23 15:13:37'),
(41, 'yorda', 'Villa', 'Bole', 'Villa Three', 'CBE', '2020-01-27 05:47:20'),
(42, 'yorda', 'Villa', 'Bole', 'Villa One', 'CBE', '2020-01-27 16:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `security` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `phoneno`, `adress`, `username`, `password`, `security`) VALUES
(49, 'fanu', 'ggg', 'wswg@gmail.com', '22', 'wq', 'iii', 'q', ''),
(50, 'abcd', 'efgh', 'abc@gmail.com', '1234567', 'asdfg', 'abcsd', '1234', ''),
(52, 'yordannos', 'gebeyew', 'yordi@gm', '09442', 'adiss', 'yorda', 'a', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `employemessage`
--
ALTER TABLE `employemessage`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`houseid`);

--
-- Indexes for table `houselist`
--
ALTER TABLE `houselist`
  ADD PRIMARY KEY (`houseid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `eid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employemessage`
--
ALTER TABLE `employemessage`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `houseid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `houselist`
--
ALTER TABLE `houselist`
  MODIFY `houseid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
