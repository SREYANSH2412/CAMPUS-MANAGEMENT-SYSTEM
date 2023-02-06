-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 01:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_cauldron`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminname`, `email`, `password`, `id`) VALUES
('Admin', 'admin@gmail.com', 'admin', 10),
('Sreyansh Baranwal', 'sreyanshbaranwal@gmail.com', 'sreyansh', 13),
('Soham K C', 'soham.chattopadhyay@gmail.com', 'soham', 14);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `club_logo` mediumblob NOT NULL,
  `club_info` varchar(255) NOT NULL,
  `club_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `club_logo`, `club_info`, `club_link`) VALUES
(11, 'RPA', 0x31363734313533343233576861747341707020496d61676520323032332d30312d31342061742031302e33372e34332e6a7067, 'robotic process automation', 'https://www.linkedin.com/company/rpa-club-bnmit/'),
(12, 'TechIT', 0x31363734313533343739576861747341707020496d61676520323032322d31312d32332061742032302e33302e35382e6a7067, 'coding club', 'https://www.linkedin.com/company/techit-bnmit-coding-club/');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `council_name` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_link` varchar(255) NOT NULL,
  `event_info` varchar(255) NOT NULL,
  `event_img` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `council_name`, `event_date`, `event_link`, `event_info`, `event_img`) VALUES
(17, 'Tatva', 'BNMIT', '31-03-2023', 'https://www.bnmit.org/', 'BNMIT Fest', 0x31363734313533353836646f776e6c6f61642e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`) VALUES
(1, 'Is this a good question?', 'This is an answer.'),
(6, 'Are there links provided along with the clubs and councils given?', 'Yes, the logos of clubs and councils direct to their official web pages.'),
(7, 'Is this the official website of BNMIT, Bangalore?	', 'No, it is a website managed and created by students as a project.');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `npdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `date`, `npdf`) VALUES
(14, '1607336469Fresher Non IT Jobs dec 4', '20-01-2023', '16741532341607336469Fresher Non IT Jobs dec 4.pdf'),
(15, '1607460204Document-38_051220', '20-01-2023', '16741532551607460204Document-38_051220.pdf'),
(16, '1642691876Vtu_circular', '20-01-2023', '16741532861642691876Vtu_circular.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `q_and_a`
--

CREATE TABLE `q_and_a` (
  `id` int(5) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `ques_approved` tinyint(1) DEFAULT NULL,
  `ques_answered` tinyint(1) NOT NULL,
  `answer` varchar(10000) NOT NULL,
  `ans_approved` tinyint(1) DEFAULT NULL,
  `ans_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `q_and_a`
--

INSERT INTO `q_and_a` (`id`, `question`, `ques_approved`, `ques_answered`, `answer`, `ans_approved`, `ans_by`) VALUES
(18, 'What is the hostel curfew timings?', 1, 1, 'The evening curfew timings for girls, hostels is 6:30 pm whereas for boys , it is 8:00 pm.', 1, 'User'),
(19, 'How many canteens are there in the campus?', 1, 1, 'There is one general store located near CBI bank where students can buy things of daily need.', 1, 'User'),
(25, 'Where are Bencolites nowadays?', 1, 1, 'Due to the current pandemic situation, the Bencolites are locked in their homes.', 1, 'User'),
(28, 'hi', 1, 1, 'hello', 1, 'Sreyansh Baranwal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(20) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `phone`) VALUES
(3, 'Barfi', 'barfi@gmail.com', 'barfi', 2147483647),
(4, 'Samose ke Chacha', 'samosekiid@gmail.com', 'samosa', 2147483647),
(7, 'User', 'user@gmail.com', 'user', 1234567890),
(8, 'Sreyansh Baranwal', 'sreyanshbaranwal@gmail.com', 'Sreyansh', 2147483647),
(9, 'Soham K C', 'soham.chattopadhyay@gmail.com', 'soham', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `q_and_a`
--
ALTER TABLE `q_and_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `q_and_a`
--
ALTER TABLE `q_and_a`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
