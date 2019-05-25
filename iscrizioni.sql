-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 25, 2019 at 07:00 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iscrizioni`
--

-- --------------------------------------------------------

--
-- Table structure for table `iscritti`
--

CREATE TABLE `iscritti` (
  `id` int(11) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `giorno` int(11) NOT NULL,
  `mese` int(11) NOT NULL,
  `anno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iscritti`
--

INSERT INTO `iscritti` (`id`, `nickname`, `email`, `password`, `telefono`, `giorno`, `mese`, `anno`) VALUES
(1, 'kajsfhklasfahksg', 'dhfadjkls@i.com', 'asjkdhaklfbhklha', 1225465879, 12, 12, 1996);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iscritti`
--
ALTER TABLE `iscritti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iscritti`
--
ALTER TABLE `iscritti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
