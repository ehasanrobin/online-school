-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 11:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'ehasan robin', 'ehasanrobin44@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_or_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_or_price`) VALUES
(6, 'learn html', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eos maxime laboriosam soluta voluptates nihil doloremque iste in reprehenderit commodi? Ex, possimus doloribus eos magnam aliquid neque dolore non libero quibusdam modi. Qui vel minus natus libero totam nobis eaque dolorum vero tempore, repudiandae aut, sapiente officia voluptates et consequatur?', 'ehasan robin', '../images/course-img/photo_2020-10-12_00-59-06.jpg', '10days', 1500, 2000),
(7, 'learn html basic', '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero error totam reiciendis vitae quaerat et laborum voluptatum quam molestiae quod aliquam esse dolor recusandae rem corrupti, pariatur ipsa odio inventore, sapiente officia ut voluptatibus ipsam! Provident veniam, sint doloremque, inventore necessitatibus fugiat voluptatibus nostrum dolores aliquam, porro modi ut.', 'ehasan robin', '../images/course-img/lp_form-e1498410419809.png', '10', 1500, 2000),
(8, 'learn html', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero error totam reiciendis vitae quaerat et laborum voluptatum quam molestiae quod aliquam esse dolor recusandae rem corrupti, pariatur ipsa odio inventore, sapiente officia ut voluptatibus ipsam! Provident veniam, sint doloremque, inventore necessitatibus fugiat voluptatibus nostrum dolores aliquam, porro modi ut.', 'ehasan robin', '../images/course-img/01_Screenshot1.__large_preview.jpg', 'ehasan robin', 1500, 2000),
(9, 'learn bootsrap basic to advance', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iusto minus consequatur dolore ipsa aperiam fugiat veritatis, autem explicabo possimus eos provident dicta molestiae animi dolores dolorem odit quibusdam error vero ipsum debitis deleniti unde corrupti. Quos ut accusamus error eveniet harum consequuntur eligendi, natus molestias ipsa itaque adipisci? Itaque.\r\n                   ', 'ehasan robin', '../images/course-img/1__qdXOISn5_kL9EFl9KJcjg.jpeg', '15', 2300, 3500),
(10, 'learn jquery', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iusto minus consequatur dolore ipsa aperiam fugiat veritatis, autem explicabo possimus eos provident dicta molestiae animi dolores dolorem odit quibusdam error vero ipsum debitis deleniti unde corrupti. Quos ut accusamus error eveniet harum consequuntur eligendi, natus molestias ipsa itaque adipisci? Itaque.\r\n                   ', 'ehasan robin', '../images/course-img/1_8al0RhBlJgA2P0Br_OQHqQ.jpeg', '6', 600, 1200),
(11, 'learn php ', 'What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is ', 'ehasan robin', '../images/course-img/Website-psd-templates.jpg', '60 ', 4000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_content` text NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_content`, `stu_id`) VALUES
(1, '', 0),
(2, 'dsgdsfgsd', 24),
(3, 'dsgdsfgsd', 24),
(4, 'dsgdsfgsd', 24),
(5, 'dsgdsfgsd', 24),
(6, 'dsgdsfgsd', 24);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_link` text NOT NULL,
  `course_id` text NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(4, 'html part 1', 'dfsaf', '../videos/lesson-videos/2020-07-03-02-29-25.flv', '7', 'learn html basic'),
(6, 'html part 2', 'hghffhfhgfhfhgfhfh', '../videos/lesson-videos/', '7', 'learn html basic'),
(7, 'html part 2', 'fdgsdgsdgfdsgs', '../videos/lesson-videos/', '7', 'learn html basic'),
(8, 'html part 2', 'sdfsdfa', '../videos/lesson-videos/', '7', 'learn html basic');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, 'Mohammad Samsul Ehasan', 'ehasanrobin@gmail.com', 'sdafsd', '', ''),
(2, 'Mohammad Samsul Ehasan', 'dsaffsad', 'sdafsd', '', ''),
(3, 'Mohammad Samsul Ehasan', 'ehasanfsddsf', 'sdfsaf', '', ''),
(4, 'Mohammad Samsul Ehasan', 'ehasanfsddsf', 'sdfassa', '', ''),
(5, 'Mohammad Samsul Ehasan', 'ehasanfsddsfsa', 'sdfasfdsd', '', ''),
(6, 'Mohammad Samsul Ehasan', 'ehasanfsddsf', 'sfafsdsdfs', '', ''),
(9, 'ehasanrobin', 'ehasanrobin@gmail.com22', 'adminsdfs', '', ''),
(11, 'ehasandfsfd', 'ehasanrobin55@gmail.com', 'admin', '', ''),
(12, 'sdfsaf', 'sdfsafsaf', 'sfsafsf', '', ''),
(15, 'Mohammad Samsul Ehasan', 'csdfsfsaf', 'asfsfas', '', ''),
(16, 'sdfasfsaf', 'sfsfsasf', 'safs', '', ''),
(17, 'sdfsdf', 'sfsdfsd', 'sdfsf', '', ''),
(18, 'Mohammad Samsul Ehasan', 'dsfsadfsd', 'sfdsafsd', '', ''),
(19, 'Mohammad Samsul Ehasan', 'ehasanfsddsfcszd', 'sdfasd', '', '../images/avatar1'),
(25, '', '', '0144712dd81be0c3d9724f5e56ce6685', '', ''),
(28, 'ehasan robin', 'ehasanrobin44@gmail.com', '0c7540eb7e65b553ec1ba6b20de79608', '', '../images/stu_img/101382221_107936354274611_6926954286127513600_o.jpg'),
(29, 'ehasanrobin', 'ehasanrobin66@gmail.com', '0c7540eb7e65b553ec1ba6b20de79608', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
