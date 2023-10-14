-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 08:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `image` varchar(400) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `address`, `email`, `gender`, `image`, `password`) VALUES
(67, 'Jaime Gomez', 82, 'Quisquam irure ullam', 'wonymekiva@mailinator.com', 0, 'C:/xampp/htdocs/OOP-Project/assets/imgs/test.png', '81dc9bdb52d04dc20036dbd8313ed055'),
(68, 'Karyn Sharpe', 31, 'In perspiciatis ut ', 'cuca@mailinator.com', 1, '../../assets/imgs/sita.jpeg', '81dc9bdb52d04dc20036dbd8313ed055'),
(69, 'Stuart Booth', 79, 'Ipsa possimus volu', 'wece@mailinator.com', 1, 'localhost/OOP-Project/assets/imgs/ram.jpeg', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(71, 'Shoshana Gardner', 40, 'Qui sit aut officia', 'jebivam@mailinator.com', 0, '../../assets/imgs/test.png', '81dc9bdb52d04dc20036dbd8313ed055'),
(72, 'Hannah Glass', 25, 'Possimus ea lorem a', 'nyvur@mailinator.com', 1, '../../assets/imgs/sita.jpeg', '81dc9bdb52d04dc20036dbd8313ed055'),
(73, 'Ram Bahadur', 17, 'Nepal', 'okayxata80@gmail.com', 1, '../../assets/imgs/ram.jpeg', 'adda3d27279bcbb1ba4bae5d5769e92c'),
(74, 'Chanda Wagner', 80, 'Facere et non aut no', 'jekuki@mailinator.com', 0, '../../assets/imgs/', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
