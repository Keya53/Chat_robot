-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 08:23 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_question`
--

CREATE TABLE `add_question` (
  `id` int(255) NOT NULL,
  `question` text NOT NULL,
  `answare` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `add_question`
--

INSERT INTO `add_question` (`id`, `question`, `answare`) VALUES
(12, 'How are you?', 'I am fine.what about you?'),
(13, 'what is the full meaning of SEC?', 'Sylhet Engineering College'),
(15, 'How many depeartments in SEC?', 'There are three depeartment in SEC (CSE,EEE,Civil)'),
(16, 'How many students in each depeartment?', 'Every department there are 60 students in this collage.'),
(17, 'How many semester in SEC?', 'There are 8 semester in SEC.Every semester duration is 6 month.'),
(18, 'How many teachers  in SEC?', 'There are 30 teacher in SEC.'),
(21, 'vsdv', 'sds'),
(22, 'how many department here?', 'about 3 department'),
(23, 'Where is Sylhet Engineering College located?', 'Sylhet Engineering College located in Tilagor,Sylhet.'),
(24, 'When was the Sylhet Engineering College established?', 'Sylhet Engineering College was established in 2007'),
(39, 'hi', '&lt;p&gt;hi&lt;/p&gt;\r\n'),
(40, 'তোমার নাম কি?', '&lt;p&gt;আমি ইন্টিলিজেন্ট চেটরোবট।&lt;/p&gt;\r\n'),
(41, 'হাই', '&lt;p&gt;হাই&lt;/p&gt;\r\n'),
(42, 'কেমন আছো?', '&lt;p&gt;আমি ভালো আছি। আপনি কেমন আছেন।&lt;/p&gt;\r\n'),
(43, 'বিদায়', '&lt;p&gt;ভালো থাকবেন।&lt;/p&gt;\r\n'),
(44, 'বাই', '&lt;p&gt;বাই।&lt;/p&gt;\r\n\r\n&lt;p&gt;ভালো থাকবেন।&lt;/p&gt;\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Name`, `Email`, `password`) VALUES
(1, 'Pori', 'pori@gmail.com', '2013'),
(2, 'sarowar jahan', 'sarowarfaruk@gmail.com', '23456'),
(3, 'vfadsad', 'dfsdf@fdgf', 'gfgsgfd'),
(4, 'vfadsad', 'dfsdf@fdgf', 'gfgsgfd'),
(5, 'dsfsadf', 'dfdsf@fgfd', 'fgdsfgds'),
(6, 'rsdfdsa', 'asdfsdas@dfadsf', 'dsfdgfdg'),
(7, 'reyretre', 'fdgdf@gmail.com', ''),
(8, 'rretre', 'retr@gmail.com', 'fdsfas'),
(9, 'MRITTUNJOY DEBNATH', 'shuvo.cse2014@gmail.com', 'shuvo'),
(10, 'rfe', 'asdfsdas@dfadsf', 'ewrewe'),
(11, 'ewrew', 'ere@mail.com', 'dfasdfwefrewee'),
(12, 'rfe', 'asdfsdas@dfadsf', '423132'),
(13, 'fdgf', 'fddsafsd@gmail.com', 'asfafew'),
(14, 'ojo', 'njkn@gmail.com', 'vsdssd'),
(15, 'MRITTUNJOY', 'abc@gmail.com', '12345'),
(16, 'dfsdfdf', 'fddsafdf@gmail.com', 'fdsfad'),
(17, 'retrtf', 'dfasd@gmail.com', 'dsfdsa'),
(18, 'retrtf', 'dfasd@gmail.com', 'dsfdsa'),
(19, 'fgfdgds', 'dfdsf@fgfd', 'fsafdsa'),
(20, 'fgfdgds', 'dfdsf@fgfd', 'fsafdsa'),
(21, 'gfdgds', 'gdfsg@gmail.com', 'dfsdf'),
(22, 'gfdgds', 'gdfsg@gmail.com', 'dfsdf'),
(23, 'fdgdsf', 'dfdsf@fgfd', 'gdgdf'),
(24, 'fdgdsf', 'dfdsf@fgfd', 'gdgdf'),
(25, 'dsfsadf', 'sfdg@gmail.com', 'sgsf'),
(26, 'fdsad', 'dsafad@gmail.com', 'asds'),
(27, 'dfsaa', 'dfdsasd@gma', 'dfsfafdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_question`
--
ALTER TABLE `add_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_question`
--
ALTER TABLE `add_question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
