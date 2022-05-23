-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 09:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `sem` int(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `dept`, `sem`, `date`) VALUES
(38, 'PHP +MySQL part 2.pdf', 'CSE', 7, '2022-05-20 18:50:35'),
(39, 'NEURAL NETWORKS MODULE 3.pptx', 'ECE', 5, '2022-05-20 18:52:51'),
(40, 'IP problems(1).pdf', 'EEE', 3, '2022-05-20 18:55:16'),
(41, 'hill cipher encryption.docx', 'CSE', 6, '2022-05-20 18:56:16'),
(42, 'OOPS class and Objects_PowerPointToPdf.pdf', 'CSE', 2, '2022-05-20 18:57:45'),
(43, 'Probabilistic reasoning examples.pptx', 'MEC', 4, '2022-05-20 18:59:45'),
(44, 'Elasticity of Demand .pdf', 'MEC', 5, '2022-05-20 19:00:28'),
(45, '12. Boosting - Example.pdf', 'ECE ', 3, '2022-05-20 19:01:43'),
(46, 'logbase2table.pdf', 'CIV', 1, '2022-05-20 19:02:44'),
(47, '4.3 Similarity and Disimilarity Measures.ppt', 'CSE', 1, '2022-05-21 13:47:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
