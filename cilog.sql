-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 06:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cilog`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_img`, `status`, `last_update`) VALUES
(1, 'Assaduzzaman Noor', 'assad043@gmail.com', '123456', '', 1, '2018-02-20 05:44:13'),
(2, 'Assaduzzaman Noor', 'admin@demo.com', 'demo123!', '21.jpg', 1, '2018-04-13 17:48:33'),
(3, 'Assaduzzaman Noor', 'admin@demo.com', 'demo123!', '', 1, '2018-02-20 09:50:09'),
(4, 'Assaduzzaman Noor', 'admin@demo.com', 'demo123!', '', 1, '2018-02-20 09:50:30'),
(5, 'Assaduzzaman Noor', 'admin@demo.com', 'demo123!', '', 1, '2018-02-20 10:37:18'),
(6, 'Fnu Aktaruzzaman', 'admin1@demo.com', 'demo123!', '', 1, '2018-02-20 11:36:00'),
(7, 'U', 'uadmin@demo.com', 'demo123!', '', 1, '2018-02-20 15:48:26'),
(8, 'Assaduzzaman Noor', 'assad043@gmail.com', '112233', '', 1, '2018-03-26 05:48:30'),
(9, 'Assaduzzaman Noor', 'assad043@gmail.com', '123456', '', 1, '2018-03-26 17:38:07'),
(10, 'Assaduzzaman Noor', 'assad043@gmail.com', '123456', '', 1, '2018-03-26 17:39:36'),
(11, 'Assaduzzaman Noor', 'assad043@gmail.com', 'demo123!', '', 1, '2018-03-26 17:39:44'),
(12, 'Assaduzzaman Noor', 'assad043@gmail.com', '11122', '', 1, '2018-03-26 18:08:39'),
(13, 'Assaduzzaman Noor', 'assad043@gmail.com', '11111', '', 1, '2018-03-26 18:14:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
