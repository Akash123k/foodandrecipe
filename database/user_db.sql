-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2023 at 12:03 PM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_recipe`
--

CREATE TABLE `add_recipe` (
  `id` int(255) NOT NULL,
  `recipe` varchar(1000) NOT NULL,
  `shape` varchar(10000) NOT NULL,
  `ingredient` varchar(1000) NOT NULL,
  `procedure_recipe` varchar(1000) NOT NULL,
  `calorie` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_recipe`
--

INSERT INTO `add_recipe` (`id`, `recipe`, `shape`, `ingredient`, `procedure_recipe`, `calorie`) VALUES
(1, 'Biryani', 'Akash', 'Xyz', 'Asdfgh', '10'),
(2, 'Biryani', 'Akash', 'Xyz', 'Asdfgh', '10'),
(3, 'Biryani', 'Akash', 'Xyz', 'Asdfgh', '10'),
(5, 'Pulav', 'Jadhav mam', 'Xyz', 'Gahsjsjsis', '10');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, 'Akash Kamble', 'akashgkamble2@gmail.com', '07741863811', 'Uhgftff'),
(2, 'Akash Kamble', 'akashgkamble2@gmail.com', '07741863811', 'Ak'),
(3, 'Akash Kamble', 'akashgkamble2@gmail.com', '07741863811', 'Ak'),
(4, 'Akash Kamble', 'akashgkamble2@gmail.com', '07741863811', 'Gg'),
(5, 'Akash Kamble', 'akashgkamble2@gmail.com', '07741863811', 'Ak'),
(6, 'Akash Kamble', 'akashgkamble2@gmail.com', '07741863811', 'Ak');

-- --------------------------------------------------------

--
-- Table structure for table `searchdata`
--

CREATE TABLE `searchdata` (
  `id` int(250) NOT NULL,
  `recipe_name` varchar(250) NOT NULL,
  `shape_name` varchar(250) NOT NULL,
  `recipe_type` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `searchdata`
--

INSERT INTO `searchdata` (`id`, `recipe_name`, `shape_name`, `recipe_type`) VALUES
(1, 'Chicken biryani', 'Akash', 'Non-vege'),
(4, 'Burger', 'Tanvi', 'Vegetarian'),
(3, 'Pulav', 'Yuvraj', 'Vegetarian'),
(2, 'Pizza', 'Sangam', 'Vegetarian'),
(5, 'Dhosa', 'Neha', 'Vegetarian'),
(6, 'Tandur', 'Saurabh', 'Non-vege'),
(7, 'Chicken roll', 'Jadhav mam', 'Non-vege');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `id` int(250) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`id`, `comment`) VALUES
(17, 'Your are great'),
(16, 'Your are great'),
(81, 'Hii'),
(80, 'Hii'),
(79, 'My project name mahit ny mala'),
(78, ' '),
(77, 'Hello'),
(76, 'Hello'),
(75, 'Hello'),
(74, 'Hello'),
(73, 'Hello'),
(72, 'Hello'),
(71, 'Hello'),
(70, 'Hello'),
(69, 'Hello'),
(68, 'Hello'),
(67, 'Hello'),
(66, 'Hello'),
(65, 'Hello'),
(64, 'Hello'),
(63, 'Hello'),
(62, 'Hello'),
(61, 'Hello'),
(60, 'Hello'),
(59, 'Hello'),
(58, 'Hello'),
(57, 'Hello'),
(56, 'Hello'),
(55, 'Hello'),
(54, 'Nice'),
(53, 'Nice'),
(52, 'My name is akash'),
(51, 'My name is akash'),
(50, 'Hello'),
(82, '<script>alert(\"ak\") ;</script>'),
(83, 'Neha'),
(84, 'Ufhshsbd'),
(85, 'Good i like the info about recipe'),
(86, 'Geeta'),
(87, 'Sakshi'),
(88, 'Hii'),
(89, 'Hii'),
(90, 'Rutik'),
(91, 'Aniket'),
(92, 'Ok'),
(93, 'Nice'),
(94, 'Omkar'),
(95, 'Good test '),
(96, 'Dhanabai');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_type` varchar(250) NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Akash Gautam Kamble', 'shnehadesai700@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(2, 'Akash Gautam Kamble', 'akashgkamble2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(3, 'Ak', 'poojaakamble1999@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(4, 'rutik waghmare', 'rutik@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(11, 'Akash Gautam Kamble', 'akash@123gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(6, 'Sakshi', 'spakshi123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(7, 'Ak', 'aniket@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(8, 'sangam', 'sangam123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(9, 'jadhavmam', 'Jadhav123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(10, 'Rutuja', 'rutuja123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(12, 'Dhanshri', 'dhan123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(13, 'mankarsir', 'mankarsir@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(14, 'vaibhav', 'vaibhavkathale09@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(15, 'Omkar', 'omkaradling1717@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(16, 'Anu', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(17, 'Dhanush', 'add@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(18, 'yuvraj', 'yuvi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(19, 'akash', 'akashgkamble3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(20, 'sangam', 'sangam1234@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(21, 'Chaitu', 'chaitanya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(22, 'Geeta', 'geeta@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, 'Jadhav mam', 'Jadhav1234@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(31, 'Jadhav mam', 'xyz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(32, 'Demo', 'demo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(33, 'Admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_recipe`
--
ALTER TABLE `add_recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchdata`
--
ALTER TABLE `searchdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_recipe`
--
ALTER TABLE `add_recipe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `searchdata`
--
ALTER TABLE `searchdata`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
