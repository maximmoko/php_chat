-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 06:41 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab1`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `username`, `avatar`, `comment`) VALUES
(77, 'aaaaaa', 'avatars/5b150438987f68.17856670.png', 'ddddd'),
(78, 'bbbbbb', 'avatars/5b150b45174127.10043616.png', 'hhhdewewrwer'),
(79, 'dddddd', 'avatars/5b150cf9b53b88.16750205.jpeg', 'helo guys'),
(80, 'cccccc', 'avatars/5b150db32e79d0.71484731.jpg', 'money man'),
(81, 'eeeeee', 'avatars/5b150e23dc3cd8.21039276.jpg', 'i am the Issac Newton'),
(82, 'ffffff', 'avatars/5b150ea3f07fb7.75367357.jpg', 'hello i didn\'t expect my self to be the'),
(83, 'gggggg', 'avatars/5b150f81eb9ae7.94550771.jpg', 'doggy dog style'),
(84, 'zzzzzz', 'avatars/5b166b4132a0f8.93399289.jpg', 'code'),
(85, 'ssssss', 'avatars/5b166d08212ef4.99120669.jpg', 'asdasdasdasd'),
(86, 'aaaaaa', 'avatars/5b150438987f68.17856670.png', 'hello , i did it'),
(87, 'aaaaaa', 'avatars/5b150438987f68.17856670.png', 'ffffffff'),
(88, 'ssssss', 'avatars/5b166d08212ef4.99120669.jpg', 'hello world\r\n'),
(89, 'aaaaaa', 'avatars/5b150438987f68.17856670.png', 'hello world');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `confirm_code` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `avatar`, `email`, `confirmed`, `confirm_code`) VALUES
(137, 'aaaaaa', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'avatars/5b150438987f68.17856670.png', 'mraptor161@gmail.com', 1, 0),
(138, 'bbbbbb', '875f26fdb1cecf20ceb4ca028263dec6', 'avatars/5b150b45174127.10043616.png', 'mraptor161@gmail.com', 1, 0),
(142, 'cccccc', 'c1f68ec06b490b3ecb4066b1b13a9ee9', 'avatars/5b150db32e79d0.71484731.jpg', 'mraptor161@gmail.com', 1, 0),
(141, 'dddddd', '980ac217c6b51e7dc41040bec1edfec8', 'avatars/5b150cf9b53b88.16750205.jpeg', 'mraptor161@gmail.com', 1, 0),
(143, 'eeeeee', 'cd87cd5ef753a06ee79fc75dc7cfe66c', 'avatars/5b150e23dc3cd8.21039276.jpg', 'mraptor161@gmail.com', 1, 0),
(144, 'ffffff', 'eed8cdc400dfd4ec85dff70a170066b7', 'avatars/5b150ea3f07fb7.75367357.jpg', 'mraptor161@gmail.com', 1, 0),
(145, 'gggggg', '9cafeef08db2dd477098a0293e71f90a', 'avatars/5b150f81eb9ae7.94550771.jpg', 'mraptor161@gmail.com', 1, 0),
(146, 'zzzzzz', '453e41d218e071ccfb2d1c99ce23906a', 'avatars/5b166b4132a0f8.93399289.jpg', 'mraptor161@gmail.com', 1, 0),
(147, 'vvvvvv', '4693fbb215b8ca15a6900f0cfa164cdc', 'avatars/5b166b83a64197.78487732.jpg', 'mraptor161@gmail.com', 0, 19126),
(148, 'ssssss', 'af15d5fdacd5fdfea300e88a8e253e82', 'avatars/5b166d08212ef4.99120669.jpg', 'mraptor161@gmail.com', 1, 0),
(149, 'maxim.moko@barco.com', '94e7d712742adbbb7a73a1d52a7cc1a9', 'avatars/5bf4511d830e69.17304201.jpg', 'mraptor161@gmail.com', 0, 10846),
(150, 'maxim.moko@barco.com', '8de1ebe5220196d6acdb486f346fe162', 'avatars/5bf451898ab3b3.96378956.jpg', 'mraptor161@gmail.com', 0, 24127);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
