-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 08:14 PM
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
-- Database: `scholarwise_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `name`) VALUES
('admin@presidencyuniversity.in', 'puadmin2022', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`email`, `password`, `fullname`, `contact`, `id`, `cc`, `department`, `school`, `linkedin`, `github`) VALUES
('chandrakala.hl@presidencyuniversity.in', '$2y$10$ggdUyO5ZDhnS2Qx6yiyeNOP0RAcQqbfWpwxFhEwRShFfMtnKL7W4S', 'Chandrakala H S', '639528147', 'PU12345678', '6CSE10', 'CSE', 'SOE', '', ''),
('mohan.krishnan@presidencyuniversity.in', '$2y$10$DUX7Ao3Nqh7SMxG8g90woeJxlgKmGlRhatN70v7J5fd0AvIA.UyBe', 'Mohan Krishnan', '879654213', 'PU87654321', '4MEC8', 'Mechanical', 'SOE', '', ''),
('naseeruddin123@presidencyuniversity.in', '$2y$10$uyEXNaGC/HItleOLL58.N.5J6mkis9YYw0k1J60/QwUIs78dDQmAa', 'Naseeruddin', '798654213', 'PU91827364', '3MBA5', 'MBA', 'SOM', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`email`, `password`, `fullname`, `contact`, `id`, `school`, `sem`, `section`, `linkedin`, `github`) VALUES
('201710100654@presidencyuniversity.in', '$2y$10$4TNUPADyH97Lnkn1.fK2FeRwQ99id4oxEifwPsMY7RcPi97jR4wJG', 'Kaushik Palteru', '8374907363', '20181CSE9046', 'SOE', '8', 'CSE4', 'https://www.linkedin.com/in/kaushik-palteru/', 'https://github.com/KaushikPalteru'),
('201910100229@presidencyuniversity.in', '$2y$10$I4hhtfJCrA2tXh0HsY9kseTUFcBW2F2on7BXV7eKRUUCiuOPxSZ1e', 'Satvik G V', '625314789', '20191BBL0229', 'SOL', '4', 'LAW3', 'https://www.linkedin.com/in/venkata-satvik/', 'None'),
('201910100265@presidencyuniversity.in', '$2y$10$kcJB2UwH1JbqKXV99TsGouA.XaRoWXEBM7zFAoyG1PMl9/u/YpCN.', 'Harsha K', '852147963', '20191DES0265', 'SOD', '5', 'DES12', 'https://www.linkedin.com/in/Harsha-k/', 'None'),
('20210100254@presidencyuniversity.in', '$2y$10$pts8YEx92P19qyTIaERjr.pmnc5RGwOd/VN7yUvlGmawaQ4F0wV4m', 'Gurucharan D A', '789456123', '2021MBA0254', 'SOM', '2', 'MBA9', 'https://www.linkedin.com/in/gurucharan-d/', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
