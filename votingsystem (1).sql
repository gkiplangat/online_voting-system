-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 05:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `position` enum('President','Secretary General','Treasurer') NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `fullname`, `idno`, `email`, `phone`, `photo`, `position`, `age`) VALUES
(6, 'Gideon Kiplangat', '34427138', 'gideonkiplangat4@gmail.com', 716352482, 'Gideon.jpeg', 'President', 24),
(14, 'test5', '32516235', 'test5@gmail.com', 113251425, 'cmuito.jpg', 'Secretary General', 26),
(15, 'Brian Khavalaji', '32513562', 'brian@gmail.com', 792125321, 'Gideon.jpeg', 'President', 40),
(18, 'Trevurs Mbuthia', '35261845', 'trevs@gmail.com', 716352482, 'first.jpeg', 'President', 40),
(19, 'Emmanuel Kiptoo', '32519265', 'emmanuel@gmail.com', 702488953, 'Gideon.jpeg', 'Treasurer', 35),
(20, 'test1', '25352686', 'test@gmail.com', 216352482, 'cathrene.jpeg', 'Treasurer', 28),
(22, 'test1', '21453652', 'test@gmail.com', 112365296, 'cmuito.jpg', 'Treasurer', 24),
(23, 'Beatrice Jepleting', '35416235', 'beatrice@gmail.com', 708526351, 'cmuito.jpg', 'Secretary General', 25),
(24, 'Dennis Deno', '25135268', 'deno@gmail.com', 789325625, 'dog.jfif', 'President', 31),
(25, 'John Mabangu', '35124628', 'john@gmail.com', 712453628, 'first.jpeg', 'Secretary General', 25),
(27, 'Gideon Kiplangat', '32513520', 'giddy@gmail.com', 113251425, 'Gideon.jpeg', 'Treasurer', 30),
(28, 'Wairimu Mbuthia', '32156235', 'wairimu@gmail.com', 716352482, 'cmuito.jpg', 'Secretary General', 28),
(29, 'test12', '25361489', 'test@gmail.com', 716352482, 'Gideon Restaurant.png', 'Secretary General', 30),
(30, 'test14', '25316458', 'test@gmail.com', 216352482, 'Gideon Restaurant.png', 'Secretary General', 28),
(31, 'tes19', '12365478', 'test@gmail.com', 716352482, '5g.jpeg', 'Secretary General', 24);

-- --------------------------------------------------------

--
-- Table structure for table `s_admin`
--

CREATE TABLE `s_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_admin`
--

INSERT INTO `s_admin` (`id`, `username`, `email`, `password`) VALUES
(0, 'Admin1', 'admin1@gmail.com', '123'),
(1, 'Admin1', 'admin1@gmail.com', '123'),
(0, 'Admin', 'admin@gmail.com', '1234'),
(0, 'Super-Admin', 'superadmin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `standard` enum('group','voter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `email`, `password`, `photo`, `standard`) VALUES
(1, 'giddy', 'gideonkiplangat4@gmail.com', '123', 'Gideon.jpeg', 'voter'),
(3, 'Gideon Blessed', '0759481381', 'Password', 'Gideon.jpeg', 'voter'),
(6, 'Caroline Muito', '0710238585', '123', 'Muthoni.jpg', 'voter'),
(7, 'Grace Wahito', '0712458925', '123', 'ma.jpeg', 'voter'),
(8, 'Muthoni Muito', '0710238585', '125', 'cmuito.jpg', 'voter'),
(9, 'Kate Mado', '0705369789', '1236', 'kate.jpg', 'voter'),
(10, 'Cathrene Joseph', '0714654258', '000', 'cathrene.jpeg', 'group'),
(11, 'giddy', 'test@gmail', '123', 'cathrene.jpeg', 'voter'),
(12, 'giddy', 'test@gmail', '123', '5g.jpeg', 'voter');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'giddy', 'gideonkiplangat4@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'musa', 'musa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Blessed', 'giddy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Trevurs', 'trevs@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Andrew Simiyu', 'andrew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `fullname`, `idno`, `email`, `phone`, `photo`, `password`, `status`) VALUES
(1, 'Lillian Otiego', '32514869', 'lillian@gmail.com', 715258361, 'cmuito.jpg', '0', 1),
(2, 'Hudson Saitoti', '36251478', 'hudson@gmail.com', 716352156, 'cmuito.jpg', '0', 0),
(3, 'test1', '34427638', 'test@gmail.com', 716352482, 'cmuito.jpg', '24', 0),
(4, 'test1', '32516235', 'test@gmail.com', 716352482, 'cmuito.jpg', '30', 0),
(5, 'test1', '32516235', 'test@gmail.com', 716352482, 'cmuito.jpg', '30', 0),
(6, 'test1', '34427138', 'test@gmail.com', 716352482, 'cmuito.jpg', '24', 0),
(7, 'test10', '25356214', 'test@gmail.com', 216352482, 'Gideon Restaurant (3).png', '35', 0),
(8, 'test15', '12345678', 'test@gmail.com', 112365296, 'Gideon Restaurant (3).png', '30', 0),
(9, 'test0', '12354678', 'test@gmail.com', 716352482, 'Gideon Restaurant.png', '35', 0),
(10, 'Gideon Kiplangat', '25142536', 'gideonkiplangat4@gmail.com', 216352482, 'Gideon Restaurant (3).png', '25', 0),
(11, 'Gideon Kiplangat', '34427138', 'gideonkiplangat4@gmail.com', 112365296, 'cmuito.jpg', '202', 0),
(12, 'Sammy kioko', '253526125', 'sammykioko@gmail.com', 113251425, 'cmuito.jpg', '202cb962ac59075b964b07152d234b70', 0),
(13, 'Gideon Kiplangat', '34427138', 'gideonkiplangat4@gmail.com', 113251425, 'cmuito.jpg', '202cb962ac59075b964b07152d234b70', 0),
(14, 'Sammy', '34427895', 'sammy@gmail.com', 712536985, '3.jpeg', '3def184ad8f4755ff269862ea77393dd', 0),
(15, 'Gideon Kiplangat', '25143665', 'giddykip@gmail.com', 702499324, 'cmuito.jpg', '202cb962ac59075b964b07152d234b70', 0),
(16, 'Voter1', '32651478', 'giddy@gmail.com', 715246351, 'cmuito.jpg', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `president` varchar(255) NOT NULL,
  `secretary` varchar(255) NOT NULL,
  `treasurer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `president`, `secretary`, `treasurer`) VALUES
(1, 'Brian Khavalaji', 'Gideon Kiplangat', 'Beatrice Jepleting'),
(2, 'Gideon Kiplangat', 'Emmanuel Kiptoo', 'John Mabangu'),
(3, 'Gideon Kiplangat', 'Gideon Kiplangat', 'Beatrice Jepleting'),
(4, 'Brian Khavalaji', 'Emmanuel Kiptoo', 'John Mabangu'),
(5, 'Brian Khavalaji', 'Gideon Kiplangat', 'Beatrice Jepleting'),
(6, 'Gideon Kiplangat', 'Emmanuel Kiptoo', 'Beatrice Jepleting'),
(7, 'Gideon Kiplangat', 'Emmanuel Kiptoo', 'Beatrice Jepleting'),
(8, 'Dennis Deno', 'Gideon Kiplangat', 'Wairimu Mbuthia'),
(9, 'Dennis Deno', 'Emmanuel Kiptoo', 'Wairimu Mbuthia'),
(10, 'Dennis Deno', 'Emmanuel Kiptoo', 'Wairimu Mbuthia'),
(11, 'Dennis Deno', 'Wairimu Mbuthia', 'Emmanuel Kiptoo'),
(12, 'Dennis Deno', 'Wairimu Mbuthia', 'Emmanuel Kiptoo'),
(13, 'Dennis Deno', 'Wairimu Mbuthia', 'Emmanuel Kiptoo'),
(14, 'Dennis Deno', 'John Mabangu', 'Gideon Kiplangat'),
(15, 'Gideon Kiplangat', 'Beatrice Jepleting', 'Gideon Kiplangat'),
(16, 'Gideon Kiplangat', 'Beatrice Jepleting', 'Emmanuel Kiptoo'),
(17, 'Gideon Kiplangat', 'Beatrice Jepleting', 'Emmanuel Kiptoo'),
(18, 'Gideon Kiplangat', 'Beatrice Jepleting', 'Emmanuel Kiptoo'),
(19, 'Trevurs Mbuthia', 'Wairimu Mbuthia', 'Gideon Kiplangat'),
(20, 'Gideon Kiplangat', 'Beatrice Jepleting', 'Emmanuel Kiptoo'),
(21, 'Brian Khavalaji', 'Beatrice Jepleting', 'Emmanuel Kiptoo'),
(22, 'Gideon Kiplangat', 'Beatrice Jepleting', 'Emmanuel Kiptoo'),
(23, 'Gideon Kiplangat', 'Beatrice Jepleting', 'Emmanuel Kiptoo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
