-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 08:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahakare_bvm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `password`) VALUES
(1, 'admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `authenticuser`
--

CREATE TABLE `authenticuser` (
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  `office` text COLLATE utf8_unicode_ci,
  `resi` text COLLATE utf8_unicode_ci,
  `dob` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `year` text COLLATE utf8_unicode_ci,
  `branch` text COLLATE utf8_unicode_ci,
  `native` text COLLATE utf8_unicode_ci,
  `job` text COLLATE utf8_unicode_ci,
  `company` text COLLATE utf8_unicode_ci,
  `designation` text COLLATE utf8_unicode_ci,
  `anniversary` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authenticuser`
--

INSERT INTO `authenticuser` (`email`, `name`, `mobile`, `pass`, `office`, `resi`, `dob`, `address`, `year`, `branch`, `native`, `job`, `company`, `designation`, `anniversary`) VALUES
('jp9573@gmail.com', 'Jay Patel', '9374883988', '12345678', '852', '258', '30/7/1996', 'Bhavnagar, Gujarat, India', '2018', 'IT', 'Bvn', 'Job', 'TCS', 'Assistant System Engineer', '1/12/2017'),
('pateljay9573@gmail.com', 'jay', '8989', '12345678', '-', '-', '-', '-', '', '', '', '', '', '', ''),
('pateljay300@yahoo.com', 'Jay', '9374883988', '12345678', '-', '-', '-', '-', '', '', '', '', '', '', ''),
('vatsal.kanji@gmail.com', 'Vatsal Shah', '9429159259', '12345678', '02692230104', '02692249217', '24/8/1989', 'Anand', '', '', '', '', '', '', ''),
('as', 'dvsvd', '656541', '12165', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('pateljay9573@gmail.com', 'jay', '9374883988', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('vatsal.kanji@gmail.com', 'Vatsal Shah', '9428159259', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `headline` text COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`headline`, `detail`) VALUES
('saecghyrtcbegrfvecdwxs', 'kjhgre3wasdfghjjnhbgf'),
('headingssssssss', 'News Here....'),
('Good News', 'Login Added to Admin Pannel');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `dates` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`message`, `detail`, `dates`) VALUES
('Hey There!!', 'Visit BVM NOW!!', '2017-12-12'),
('headingsdf', 'Notification Detail', '2017-12-13'),
('noto; dm clkdmc', 'Notification Detail', '2017-12-07'),
('cnalciks cmjdcbias cm', 'Notification Detail', '2017-12-13'),
('Ghanshyam', 'Notification Detail', '2017-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `pendingregistration`
--

CREATE TABLE `pendingregistration` (
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `document` text COLLATE utf8_unicode_ci NOT NULL,
  `isReviewed` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pendingregistration`
--

INSERT INTO `pendingregistration` (`email`, `name`, `mobile`, `password`, `document`, `isReviewed`) VALUES
('vatsal.kanji@gmail.com', 'Vatsal Shah', '9428159259', '12345678', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8_unicode_ci NOT NULL,
  `suggestions` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`email`, `name`, `mobile`, `suggestions`) VALUES
('jp9573@gmail.com', 'Jay Patel', '9374883988', 'How');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
