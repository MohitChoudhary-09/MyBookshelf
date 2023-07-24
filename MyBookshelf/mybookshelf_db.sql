-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 12:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybookshelf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `rating`) VALUES
(1, 'Book 1', 'Author A', 'Fiction', 4.5),
(2, 'Book 2', 'Author B', 'Mystery', 3.8),
(3, 'Book 3', 'Author C', 'Fantasy', 4.2),
(4, 'Book 4', 'Author D', 'Science Fiction', 4.1),
(5, 'Book 5', 'Author E', 'Romance', 3.9),
(6, 'Book 6', 'Author F', 'Thriller', 4),
(7, 'Book 7', 'Author G', 'Mystery', 3.7),
(8, 'Book 8', 'Author H', 'Fantasy', 4.3),
(9, 'Book 9', 'Author I', 'Fiction', 4.8),
(10, 'Book 10', 'Author J', 'Science Fiction', 4.5),
(11, 'Book 11', 'Author K', 'Romance', 3.5),
(12, 'Book 12', 'Author L', 'Thriller', 4.2),
(13, 'Book 13', 'Author M', 'Mystery', 3.9),
(14, 'Book 14', 'Author N', 'Fantasy', 4),
(15, 'Book 15', 'Author O', 'Fiction', 4.6),
(16, 'Book 16', 'Author P', 'Science Fiction', 3.7),
(17, 'Book 17', 'Author Q', 'Mystery', 4.1),
(18, 'Book 18', 'Author R', 'Romance', 3.8),
(19, 'Book 19', 'Author S', 'Thriller', 4.4),
(20, 'Book 20', 'Author T', 'Fantasy', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
