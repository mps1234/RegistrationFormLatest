-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 01:03 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akgim-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin123', '01345c292aa1ae43571db586b2e9ef42');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `see_rollno` varchar(30) NOT NULL,
  `gen_rank` varchar(30) NOT NULL,
  `category_rank` varchar(30) NOT NULL,
  `cat_mat_cmat` varchar(30) NOT NULL,
  `percentile` varchar(30) NOT NULL,
  `other_exam_name` varchar(50) NOT NULL,
  `other_exam_percentile` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `state_of_domicile` varchar(100) NOT NULL,
  `parentNo` varchar(50) NOT NULL,
  `candidateNo` varchar(50) NOT NULL,
  `permanent_add` varchar(200) NOT NULL,
  `pincode_perm` varchar(10) NOT NULL,
  `correspondence_add` varchar(200) NOT NULL,
  `pincode_corr` varchar(10) NOT NULL,
  `local_add` varchar(200) NOT NULL,
  `pincode_loc` varchar(10) NOT NULL,
  `10_school_name` varchar(200) NOT NULL,
  `10_board` varchar(200) NOT NULL,
  `10_passingyear` varchar(10) NOT NULL,
  `10_percentage` varchar(10) NOT NULL,
  `12_school_name` varchar(200) NOT NULL,
  `12_board` varchar(200) NOT NULL,
  `12_passingyear` varchar(10) NOT NULL,
  `12_percentage` varchar(10) NOT NULL,
  `graduation_college` varchar(200) NOT NULL,
  `graduation_university` varchar(200) NOT NULL,
  `graduation_passingyear` varchar(10) NOT NULL,
  `graduation_percentage` varchar(10) NOT NULL,
  `other_college` varchar(200) NOT NULL,
  `other_university` varchar(200) NOT NULL,
  `other_passingyear` varchar(10) NOT NULL,
  `other_percentage` varchar(10) NOT NULL,
  `experience_duration` varchar(30) NOT NULL,
  `exp_organisation_name` varchar(200) NOT NULL,
  `hostel_req` varchar(20) NOT NULL,
  `verified` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `Date`, `see_rollno`, `gen_rank`, `category_rank`, `cat_mat_cmat`, `percentile`, `other_exam_name`, `other_exam_percentile`, `name`, `email`, `fname`, `dob`, `nationality`, `category`, `Gender`, `state_of_domicile`, `parentNo`, `candidateNo`, `permanent_add`, `pincode_perm`, `correspondence_add`, `pincode_corr`, `local_add`, `pincode_loc`, `10_school_name`, `10_board`, `10_passingyear`, `10_percentage`, `12_school_name`, `12_board`, `12_passingyear`, `12_percentage`, `graduation_college`, `graduation_university`, `graduation_passingyear`, `graduation_percentage`, `other_college`, `other_university`, `other_passingyear`, `other_percentage`, `experience_duration`, `exp_organisation_name`, `hostel_req`, `verified`) VALUES
(27, '2016-12-14', '789', '789', '789', 'CAT', '78', '798', '789', 'MAYUR', 'mayur.pathak52@gmail.com', 'vinod', '4 August, 2005', 'Indian', 'general', 'male', 'up', '7896545696', '7896545696', 'fds', '201456', 'jlk', '545656', 'jkl', '466969', 'fdjkl', 'djlkjl', '2025', '89', 'jfklds', 'jlsfk', '2365', '89', 'jflks', 'jfkls', '2363', '89', 'ldjskl', 'jflsk', '', '', 'djflk', 'jfkdls', 'Yes', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
