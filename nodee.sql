-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 03:58 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nodee`
--

-- --------------------------------------------------------

--
-- Table structure for table `resell`
--

CREATE TABLE `resell` (
  `res_id` int(5) NOT NULL,
  `res_kode` varchar(50) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `res_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resell`
--

INSERT INTO `resell` (`res_id`, `res_kode`, `res_name`, `res_link`) VALUES
(1, 'lb', 'Lalang Bakti', 'https://izoom.host/lalang'),
(2, 'fs', 'Fahmi Shadry', 'https://izoom.host/fahmi'),
(4, 'fa', 'Faiz Abdillah', 'https://izoom.host/faiz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `remember_token` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'Rama Ren', 'ryushineo@gmail.com', '$2y$10$R8oA4sPGYj7UdJ1XgSpC3OqwyFBGV3di/cF1hRu.K5fIXckSnS/KC', '2020-08-07 11:46:54.000000', '2020-08-07 11:46:54.000000', 'VzTcSVIvl9MD7i4V7uHnKnIbqQPGnNcZaSgPEnphXrtpZ9mZ6QflpJtzcCQh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resell`
--
ALTER TABLE `resell`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resell`
--
ALTER TABLE `resell`
  MODIFY `res_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
