-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 05:55 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_book_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `boks_list`
--

CREATE TABLE `boks_list` (
  `book_pid` int(11) NOT NULL,
  `book_publisher_name` varchar(255) NOT NULL,
  `book_isbn_number` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_author_name` varchar(255) NOT NULL,
  `book_uploaded_user` varchar(50) NOT NULL,
  `book_cover_image` varchar(255) NOT NULL,
  `book_file` varchar(255) NOT NULL,
  `book_uploaded_date` varchar(25) NOT NULL,
  `book_discription` blob NOT NULL,
  `book_is_delete` varchar(11) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boks_list`
--

INSERT INTO `boks_list` (`book_pid`, `book_publisher_name`, `book_isbn_number`, `book_title`, `book_author_name`, `book_uploaded_user`, `book_cover_image`, `book_file`, `book_uploaded_date`, `book_discription`, `book_is_delete`) VALUES
(1, 'Grey Oak Publishing', '12345657895', 'First Book Testing ', 'James', '2 ', '20240207_040248_Screenshot 2024-02-07 100229.jpg', '20240207_040248_Atomic Habits James Clear.pdf', '2024-02-07 04:02:48', 0x546869732069732073616d706c65206465736372697074696f6e20666f722074657374696e6720707572706f7365, 'Active'),
(2, 'Grey Oak Publishing', '9966885522446', 'Second Book Testing ', 'Go jam', '2 ', '20240207_040248_Screenshot 2024-02-07 100229.jpg', '20240207_040248_Atomic Habits James Clear.pdf', '2024-02-07 04:02:48', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_pid` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_delete` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_pid`, `user_name`, `name`, `user_password`, `user_type`, `user_delete`) VALUES
(1, 'test@gmail.com', 'Tester', 'testing', 'user', 'Active'),
(2, 'user1@gmail.com', 'User 1', 'user1', 'user', 'Active'),
(3, 'user2@gmail.com', 'User 2', 'user2', 'user', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boks_list`
--
ALTER TABLE `boks_list`
  ADD PRIMARY KEY (`book_pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boks_list`
--
ALTER TABLE `boks_list`
  MODIFY `book_pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
