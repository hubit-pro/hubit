-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2019 at 03:36 PM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hubitcom_hubit`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(1, 'hubadmin', 'hubitworkgroup1481');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `msg`) VALUES
(3, 'Denruisp', 'fadiramadan@probbox.com ', '86748859854', '<a href=\"http://albendazole400.com/\">albendazole generic</a> '),
(4, 'Kelvin Fenston', 'fenston.kelvin@outlook.com', '077 5323 0104', 'Hi\r\n\r\ni love your webshop,\r\nBut I have a question, I see a lot of Items in this webshop http://bit.ly/CheaperProducts4 that you also sell in your store.\r\nbut there items are 42% cheaper, well my question is what is the difference between your webshop and theirs,\r\nis it the quality or something else, i hope you can help me!\r\n\r\nRegards');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `field` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `tel`, `address`, `qualification`, `field`) VALUES
(3, 'Diapk Ghimire', 'discoverdipak123@gmail.com', '9867420269', 'Tilottama-9', '+2', 'Software Developer'),
(7, 'Samesh Kumar Budha Magat', 'samesh27budha@gmail.com', '9825479167', 'Shivaraj 1 Shivapur, Kapilvastu', 'Bachelors', 'Cyber Security Expert'),
(9, 'Arjun basnet ', 'Arjundai333@gmail.com', '9843967553', 'Bansgadhi, rupandehi', 'Bachelors', 'Database Adminsitrator'),
(10, 'Ashish Chaudhary', 'ashishtharu777@gmail.com', '9821984465', 'bhalwari', 'Bachelors', 'Software Developer'),
(11, 'sdfsdaf', 'hubitworkgroup@gmail.com', '9857045414', 'asdfasdf', 'SLC/SEE', 'Engineering'),
(12, 'dsfgsdafasd', 'hbanari93@gmail.com', 'asdfasdfasdf', 'adsfasdfasdf', 'SLC/SEE', 'System Adminsitrator'),
(13, 'test form', 'salk@fo.com', '342340980', 'hahdahda', 'Diploma', 'Hardware Expert');

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `id` int(255) NOT NULL,
  `ref_no` varchar(500) NOT NULL,
  `client_name` varchar(500) NOT NULL,
  `work_location` varchar(500) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `problem` varchar(500) NOT NULL,
  `solution` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `web_clients`
--

CREATE TABLE `web_clients` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `domain` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_clients`
--

INSERT INTO `web_clients` (`id`, `name`, `address`, `contact`, `email`, `domain`, `status`) VALUES
(11, 'Dr Mukesh Sharma', 'Butwal', '9844700043', 'drmuku@gmail.com', 'drmukesh.com', 'active'),
(12, 'Lumbini Comfort Inn', 'Lumbini Road, Bhairahawa', '071-525023', 'lumbinicomfort@gmail.com', 'lumbinicomfortinn.com', 'completed'),
(13, 'Hotel Peace Zone', 'Lumbini Cultural Municipality-7', '071-404001', 'hotelpeacezone16@gmail.com', 'hotelpeacezone.com', 'completed'),
(14, 'Lumbini City Hospital', 'Butwal', '071-234567 , 071-0717654', 'lca@gmail.com', 'lca.hubit.com.np', 'active'),
(15, 'DStar Event Management Studio', 'SewaPath, butwal-8, rupandehi', '9847480248,9821504112', 'jakdigitalphotostudio@gmail.com', 'http://dstarstudio.hubit.com.np/index.php', 'completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_clients`
--
ALTER TABLE `web_clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_clients`
--
ALTER TABLE `web_clients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
