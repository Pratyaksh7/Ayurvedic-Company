-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 11:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayurvedic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `AdminName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `AdminName`, `password`, `FirstName`) VALUES
(1, 'Pratyaksh1', '123', 'Pratyaksh'),
(2, 'Ram', '456', 'Ram');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `contact`, `email`, `city`, `disease`, `message`) VALUES
(1, 'pratyaksh', 2147483647, 'pratyakshgupta7@gmail.com', '', '', ''),
(3, 'ram', 1236547891, 'ram@gmail.com', '', '', ''),
(5, 'pratyaksh', 1236547891, 'pratyakshgupta4@gmail.com', 'Udaipur', 'nothing', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `contact`, `email`, `message`) VALUES
(1, 'pratyaksh', 2147483647, 'pratyakshgupta7@gmail.com', 'egeergerger'),
(2, 'samaksh', 2147483647, 'kalsotras@gmail.com', 'this is a demo form'),
(3, 'pratyaksh', 9149654345, 'abc@gmail.com', 'demo test'),
(4, 'samaksh', 7894561236, 'kalsotras@gmail.com', 'demo ');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `content1` varchar(2000) NOT NULL,
  `content2` varchar(2000) NOT NULL,
  `vision` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `content1`, `content2`, `vision`) VALUES
(1, 'Ayurveda is a sound way of life framework that individuals in India have utilized for over 5,000 years. Ayurvedic Medicine is universal and not only treats a person physically, but it also changes your daily lifestyle routines, leading to better living. \r\n\r\nAs per Ayurveda, the five components of nature (space, air, fire, water, earth) consolidate in the body as three segments (doshas) known as Vatta, Pitta, and Kapha. These doshas relate near the essential components of nature and to specific elements of the body. \r\n\r\nVatta  ( Air and Space)\r\nVatta controls muscle and joint development, breathing, and heartbeat. Likewise, Vatta controls tension, dread, torment, and different elements of the nervous system.\r\n\r\nPitta  ( Fire and Water)\r\nPitta controls real capacities such as processing, digestion, knowledge, and skin shading. Pitta oversees the feelings of outrage, despise, and desire.\r\n\r\nKapha  (Earth and Water)\r\nPassionate reactions thought to be constrained by Kapha incorporate serenity, pardoning, love, and ravenousness.\r\n', 'Ayurveda is one of the most established types of medicinal services on earth, to keep up positive wellbeing. Ayurvedic medicinal cures comprise of only the healthy plants and herbs. Even though the base of Ayurveda is old, numerous individuals still falter to acknowledge it as the best type of medication.\r\n\r\nHere are some reasons to choose Ayurvedic medicines over others.\r\n\r\nInstead of treating the symptoms of an issue, in Ayurveda, the root cause of the problem is identified. Here the side effects of an infection are not smothered by giving a few medications.\r\nAyurveda analyzes the whole problem, and then a proper plan is made to treat the diseases. Ayurvedic medicines carry out the treatments according to one\'s lifestyle. \r\nAyurveda Believes in \" Prevention is better than cure.\" So it always understands the root cause of the problem and prevents it from spreading further in your body.\r\nIt has no side effects as most of the medicines are made up of natural herbs and plants where no forms of chemicals are used. \r\n', 'Our company (Hiya Ayucare) was founded with a vision of creating a new lifestyle for the people. We follow Ayurveda’s deep-rooted philosophy of keeping the mind and body in balance, creating perfect health and attaining a state of inner peace.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `description2` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `description2`, `image_path`, `admin_id`, `created_at`) VALUES
(4, 'Laptop', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', ' It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'http://localhost/ayurvedic/uploads/laptop.PNG', 1, '2020-05-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
