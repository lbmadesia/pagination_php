-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 06:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clavax`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(5) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father`, `dob`, `address`, `city`, `state`, `pin`, `phone`, `email`, `class`, `mark`, `create_at`) VALUES
(1, 'ajay', 'kanhaiya sah', '2021-04-01', 'Gorakhpur Uttar Pradesh', 'delhi', 'delhi', '13213', '8574209820', 'v@gmail.com', '45', '54', '2021-04-29 15:08:23'),
(2, 'vivek singh', 'kanhaiya', '2021-04-22', 'Gorakhpur Uttar Pradesh', 'delhi', 'delhi', '656', '9793950632', 'a@gmail.com', '4564', '54', '2021-04-29 15:45:53'),
(3, 'manish', 'father', '2021-04-13', 'fdsffsfd', 'delhi', 'delhi', '0', '9793950638', 'lbmadesia8318@gmail.com', '4', '92', '2021-04-29 16:05:04'),
(4, 'rahul', 'ram', '2021-04-30', 'Gorakhpur Uttar Pradesh', 'delhi', 'delhi', '32', '9987655643', 'lalbabumadesia2@gmail.com', '423', '32', '2021-04-29 19:15:12'),
(5, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8344270298', 'v@gmail.com', '9', '80', '2021-04-29 21:07:42'),
(6, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8348270298', 'v@gmail.com', '9', '80', '2021-04-29 21:07:42'),
(7, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8318277298', 'v@gmail.com', '9', '80', '2021-04-29 21:07:42'),
(8, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8318770298', 'v@gmail.com', '9', '80', '2021-04-29 21:07:43'),
(9, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8318270298', 'v@gmail.com', '9', '80', '2021-04-29 21:07:43'),
(10, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8318271298', 'v@gmail.com', '9', '80', '2021-04-29 21:07:43'),
(11, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8318270598', 'v@gmail.com', '9', '80', '2021-04-29 21:07:43'),
(12, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8318270398', 'v@gmail.com', '9', '80', '2021-04-29 21:07:43'),
(13, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8318470298', 'v@gmail.com', '9', '80', '2021-04-29 21:07:43'),
(14, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8318270248', 'v@gmail.com', '9', '80', '2021-04-29 21:07:43'),
(15, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8344270228', 'v@gmail.com', '9', '80', '2021-04-29 21:08:32'),
(16, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8348270218', 'v@gmail.com', '9', '80', '2021-04-29 21:08:32'),
(17, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8318277998', 'v@gmail.com', '9', '80', '2021-04-29 21:08:32'),
(20, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8344470228', 'v@gmail.com', '9', '80', '2021-04-29 21:09:33'),
(23, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8344470248', 'v@gmail.com', '9', '80', '2021-04-29 21:10:06'),
(24, 'vivek', 'jjhjgjh', '0000-00-00', 'gorakhpur', 'delhi', 'uttar', '102421', '8348870218', 'v@gmail.com', '9', '80', '2021-04-29 21:10:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `100` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
