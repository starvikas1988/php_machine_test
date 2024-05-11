-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 01:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `subject`, `message`, `ip`, `time_stamp`) VALUES
(1, 'Vikas Pandey', 8910599783, 'starvikass@gmail.com', 'History', 'I am good ,what about you.', '', '2024-05-11 11:35:07'),
(2, 'Gita Biswas', 7452145875, 'gita12@gmail.com', 'Science', 'I want to study with science.', '', '2024-05-11 11:35:07'),
(4, 'Sita Singh', 8745214587, 'sita12@gmail.com', 'History', 'I want to study history as honours.', '', '2024-05-11 11:35:07'),
(5, 'Rahul Ghosh', 8745214549, 'rahul21@gmail.com', 'Biology', 'I want to study Biology in details.', '', '2024-05-11 11:35:07'),
(6, 'Joy Roy', 8745214587, 'joybabu12@gmail.com', 'Science', 'I love studing science.', '', '2024-05-11 11:35:07'),
(7, 'Krishna Pandey', 8745214587, 'krishna231@gmail.com', 'Bagwat Gita', 'I want to learn Bagwat gita.', '', '2024-05-11 11:35:07'),
(8, 'Rama Tiwari', 8745214578, 'rama123@gmail.com', 'Ramayana', 'I love reading Ramayana.', '', '2024-05-11 11:35:07'),
(9, 'Swati Pandey', 8745214587, 'swati12@gmail.com', 'Political Science', 'i want to pursue higher knowledge in this field.', '', '2024-05-11 11:35:07'),
(10, 'Radhika menon', 7845214578, 'radhika12@gmail.com', 'History', 'i love reading history books.', '::1', '2024-05-11 08:11:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
