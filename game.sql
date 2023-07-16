-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 06:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `gamer_data`
--

CREATE TABLE `gamer_data` (
  `id` int(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_id` varchar(255) NOT NULL,
  `member1` varchar(255) NOT NULL,
  `member1id` varchar(255) NOT NULL,
  `member2` varchar(255) NOT NULL,
  `member2id` varchar(255) NOT NULL,
  `member3` varchar(255) NOT NULL,
  `member3id` varchar(255) NOT NULL,
  `member4` varchar(255) NOT NULL,
  `member4id` varchar(255) NOT NULL,
  `member5` varchar(255) NOT NULL,
  `member5id` varchar(255) NOT NULL,
  `userId` int(255) NOT NULL,
  `game_name` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gamer_data`
--

INSERT INTO `gamer_data` (`id`, `team_name`, `team_id`, `member1`, `member1id`, `member2`, `member2id`, `member3`, `member3id`, `member4`, `member4id`, `member5`, `member5id`, `userId`, `game_name`) VALUES
(8, 'NSTIO CODER', 'admin@gmail.com', 'kanika', '78ret#', 'manish', '4564gdf', 'manju', '452fsv', 'maniks', '54634sfd', 'raju', '4654dfg', 14, ''),
(9, 'viswas codere', 'viswas@gmail.com', 'abc', '54gfdsgv', 'nijay', '45534sd', 'raju singh', '4578fg', 'ksjfd', 'dsfgfds', 'sddsf', '345633534', 15, ''),
(11, 'kapil coders', 'admin@gmail.com', 'manisk@123', '1245', 'gfdgg', 'dfgdfgfdg', 'gfdgfdg', 'dgfgdfg', 'gfdgdfgdf', 'gfdgdf', 'dgdfgdf', 'gdfgdfgd', 14, 'First T3 Game');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `check_box` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `check_box`) VALUES
(14, 'KAPIL INANIA', 'INANIYAKAPIL2000@GMAIL.COM', '123', 0),
(15, 'Kalyan seervi', 'kalyanseervi700@gmail.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gamer_data`
--
ALTER TABLE `gamer_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gamer_data`
--
ALTER TABLE `gamer_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
