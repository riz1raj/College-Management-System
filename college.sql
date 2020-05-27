-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 12:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(256) NOT NULL,
  `a_password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `bldgrp` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `salary` int(11) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `type` varchar(50) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_password`, `email`, `dob`, `bldgrp`, `gender`, `salary`, `photo`, `type`) VALUES
(2, 'Rubayet', '123456', 'rubayet.haque@yahoo.com', '1988-12-09', 'B+', 'male', 25000, '69889426_2622353437802637_2284275650548203520_n.jpg', 'admin'),
(3, 'Asif', '123456', 'asif@aiub.edu', '1998-02-05', 'O+', 'male', 25600, '95503792_1544009072424394_5691323419480555520_n.jpg', 'admin'),
(4, 'Murad', '123456', 'murad@aiub.edu', '1956-02-05', 'O+', 'male', 25000, '96583478_2589723694610327_170559834293272576_n.jpg', 'admin'),
(8, 'Mir Jafor', '123456', 'mirjafor@aiub.edu', '1965-02-05', 'B+', 'male', 56000, '96239577_673733050146513_6115092887500750848_n.jpg', 'admin'),
(9, 'Jasim', '123456', 'jasim@aiub,edu', '1965-02-05', 'O+', 'male', 25000, 'images.jpg', 'admin'),
(10, 'Salma', '123456', 'salma@aiub.edu', '1965-02-05', 'AB+', 'female', 25000, 'sd.jpg', 'admin'),
(12, 'Mehjabin', '123456', 'msj@aiub.edu', '1987-02-05', 'B+', 'female', 25000, '', 'admin'),
(25, 'ruble', '12345', 'ruble@aiub.edu', '1965-02-05', 'B+', 'male', 36000, 'web3.jpg', 'admin'),
(32, 'ruble', '12345', 'ruble@aiub.edu', '1965-02-05', 'B+', 'male', 36000, 'web3.jpg', 'admin'),
(33, 'ruble', '12345', 'ruble@aiub.edu', '1965-02-05', 'B+', 'male', 36000, 'web3.jpg', 'admin'),
(34, 'Rahid', '0644farcry', 'alamin@aiub.edu', '1996-05-25', 'B+', 'male', 26000, 'web12.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `ad_id` int(11) NOT NULL,
  `ad_test` date NOT NULL,
  `ad_form` date NOT NULL,
  `ad_fee` varchar(256) NOT NULL,
  `start` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`ad_id`, `ad_test`, `ad_form`, `ad_fee`, `start`) VALUES
(1, '2020-05-19', '2020-05-12', '5000 Tk.', 'June 5'),
(2, '2020-09-01', '2020-08-25', '5000 Tk.', '19 September'),
(3, '2020-05-25', '2020-05-15', '5000 Tk.', 'July 1');

-- --------------------------------------------------------

--
-- Table structure for table `admitcourse`
--

CREATE TABLE `admitcourse` (
  `cl_id` int(11) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `t_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admitcourse`
--

INSERT INTO `admitcourse` (`cl_id`, `c_name`, `t_name`) VALUES
(1, 'RESEARCH METHODOLOGY [CS] [F]', 'DR. M. M. MAHBUBUL SYEED'),
(2, 'WEB TECHNOLOGIES [F]', 'MD AL-AMIN'),
(3, 'DATA COMMUNICATION [G]', 'TANJIL AMIN');

-- --------------------------------------------------------

--
-- Table structure for table `all_book`
--

CREATE TABLE `all_book` (
  `id` int(20) NOT NULL,
  `book_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_book`
--

INSERT INTO `all_book` (`id`, `book_name`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JavaScript'),
(4, 'jQuery'),
(5, 'Bootstrap'),
(6, 'Reactjs'),
(7, 'PHP'),
(8, 'NodeJS');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `at_id` int(20) NOT NULL,
  `class` int(20) NOT NULL,
  `Date` date NOT NULL,
  `Present` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`at_id`, `class`, `Date`, `Present`) VALUES
(1, 11, '2020-04-06', 'Yes'),
(2, 12, '2020-04-13', 'No'),
(3, 12, '2020-04-09', 'No'),
(4, 11, '2020-04-12', 'No'),
(5, 11, '2020-04-13', 'No'),
(6, 12, '2020-04-14', 'Yes'),
(7, 11, '2020-04-15', 'Yes'),
(8, 12, '2020-04-16', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(256) NOT NULL,
  `b_author` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_name`, `b_author`, `photo`) VALUES
(2, 'David Copperfield', 'Charles Dickens', 'DavidCopperField.jpg'),
(3, 'Pakistan the Gathering Storm', 'Benazir Bhutto', 'Web tech.png'),
(4, 'At going Down of the Sun', 'Marius Oelchigz', 'Atthegoingdownofthesun_mockup.png'),
(5, 'Enchantment', 'Guy Kowaski', 'book-cover-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `classroutine`
--

CREATE TABLE `classroutine` (
  `c_id` int(11) NOT NULL,
  `c_time` varchar(256) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `c_day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroutine`
--

INSERT INTO `classroutine` (`c_id`, `c_time`, `c_name`, `c_day`) VALUES
(2, '12:00-2:00', 'Computer Networks', 'Saturday'),
(1, '10:00-12:00', 'Computer Networks', 'Saturday'),
(3, '12:00-2:00', 'Network Security', 'Sunday'),
(3, '12:00-2:00', 'Network Security', 'Sunday'),
(4, '10:00-12:00', 'Network Master', 'Sunday'),
(4, '10:00-12:00', 'research Methodology', 'Monday'),
(4, '10:00-12:00', 'research Methodology', 'Wednesday'),
(4, '12:00-2:00', 'Method of RM', 'Monday'),
(4, '10:00-12:00', 'Algorithm', 'tuesday'),
(2, '12:00-2:00', 'Computer Networks', 'Saturday'),
(1, '10:00-12:00', 'Computer Networks', 'Saturday'),
(3, '12:00-2:00', 'Network Security', 'Sunday'),
(3, '12:00-2:00', 'Network Security', 'Sunday'),
(4, '10:00-12:00', 'Network Master', 'Sunday'),
(4, '10:00-12:00', 'research Methodology', 'Monday'),
(4, '10:00-12:00', 'research Methodology', 'Wednesday'),
(4, '12:00-2:00', 'Method of RM', 'Monday'),
(4, '10:00-12:00', 'Algorithm', 'tuesday'),
(2, '12:00-2:00', 'Computer Networks', 'Saturday'),
(1, '10:00-12:00', 'Computer Networks', 'Saturday'),
(3, '12:00-2:00', 'Network Security', 'Sunday'),
(3, '12:00-2:00', 'Network Security', 'Sunday'),
(4, '10:00-12:00', 'Network Master', 'Sunday'),
(4, '10:00-12:00', 'research Methodology', 'Monday'),
(4, '10:00-12:00', 'research Methodology', 'Wednesday'),
(4, '12:00-2:00', 'Method of RM', 'Monday'),
(4, '10:00-12:00', 'Algorithm', 'tuesday'),
(2, '12:00-2:00', 'Computer Networks', 'Saturday'),
(1, '10:00-12:00', 'Computer Networks', 'Saturday'),
(3, '12:00-2:00', 'Network Security', 'Sunday'),
(3, '12:00-2:00', 'Network Security', 'Sunday'),
(4, '10:00-12:00', 'Network Master', 'Sunday'),
(4, '10:00-12:00', 'research Methodology', 'Monday'),
(4, '10:00-12:00', 'research Methodology', 'Wednesday'),
(4, '12:00-2:00', 'Method of RM', 'Monday'),
(4, '10:00-12:00', 'Algorithm', 'tuesday');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cm_id` int(20) NOT NULL,
  `class` int(20) NOT NULL,
  `complaint` varchar(2000) NOT NULL,
  `p_message` mediumtext NOT NULL,
  `poll` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cm_id`, `class`, `complaint`, `p_message`, `poll`) VALUES
(1, 11, 'The Term Exmination Grade \'F\' of the course only.', 'Hello Everyone, Please fill up the form', 'https://mail.google.com/mail/u/0/#inbox'),
(2, 12, 'The Term Exmination Grade \'F\' of the course only.', 'Hello Everyone, Please fill up the form', 'https://mail.google.com/mail/u/0/#inbox');

-- --------------------------------------------------------

--
-- Table structure for table `contactteacher`
--

CREATE TABLE `contactteacher` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactteacher`
--

INSERT INTO `contactteacher` (`name`, `email`, `phone`) VALUES
('MR.ABC', 'abc@rcc.edu', 1700000000),
('MR.DEF', 'def@rcc.edu', 1700000001),
('MR.XYZ', 'xyz@rcc.edu', 1700000002),
('MR.AAA', 'aaa@rcc.edu', 1700000003),
('MR.EEE', 'eee@rcc.edu', 1700000004),
('MR.ABC', 'abc@rcc.edu', 1700000000),
('MR.DEF', 'def@rcc.edu', 1700000001),
('MR.XYZ', 'xyz@rcc.edu', 1700000002),
('MR.AAA', 'aaa@rcc.edu', 1700000003),
('MR.EEE', 'eee@rcc.edu', 1700000004),
('MR.ABC', 'abc@rcc.edu', 1700000000),
('MR.DEF', 'def@rcc.edu', 1700000001),
('MR.XYZ', 'xyz@rcc.edu', 1700000002),
('MR.AAA', 'aaa@rcc.edu', 1700000003),
('MR.EEE', 'eee@rcc.edu', 1700000004),
('MR.ABC', 'abc@rcc.edu', 1700000000),
('MR.DEF', 'def@rcc.edu', 1700000001),
('MR.XYZ', 'xyz@rcc.edu', 1700000002),
('MR.AAA', 'aaa@rcc.edu', 1700000003),
('MR.EEE', 'eee@rcc.edu', 1700000004);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `time` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `time`) VALUES
(2, 'COMPUTER GRAPHICS [C]', 'Sunday 2:00 PM-5:00 PM'),
(3, 'COMPILER DESIGN [N]', 'Sunday 8:00 AM-9:30 AM'),
(5, 'RESEARCH METHODOLOGY [CS] [F]', 'Mon 12:30 PM - 2:0 PM'),
(6, 'WEB TECHNOLOGIES [F]', 'Wed 2:0 PM - 5:0 PM'),
(7, 'DATA COMMUNICATION [G]', 'Sun 10:0 - Sun 12:0 PM');

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `e_id` int(11) NOT NULL,
  `e_date` date NOT NULL,
  `e_time` varchar(256) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `e_duration` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`e_id`, `e_date`, `e_time`, `c_name`, `e_duration`) VALUES
(1, '2020-03-03', 'morning', 'COMPUTER GRAPHICS [C]', '2 Hrs 00 Min'),
(2, '2020-03-04', 'afternoon', 'COMPILER DESIGN [N]', '2 Hrs 00 Min'),
(4, '2020-03-05', 'afternoon', 'RESEARCH METHODOLOGY [CS] [F]', '2 Hrs 00 Min'),
(7, '2020-03-06', 'afternoon', 'WEB TECHNOLOGIES [F]', '2 Hrs 00 Min');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(20) NOT NULL,
  `class` int(20) NOT NULL,
  `note` varchar(2000) NOT NULL,
  `note_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `class`, `note`, `note_type`) VALUES
(1, 12, '   Physics is one of the oldest academic disciplines, perhaps the oldest through its inclusion of astronomy. Over the last two millennia, physics was a part of natural philosophy along with chemistry, certain branches of mathematics, and biology, but during the Scientific Revolution in the 17th century, the natural sciences emerged as unique research programs in their own right. Physics intersects with many interdisciplinary areas of research, such as biophysics and quantum chemistry, and the boundaries of physics are not rigidly defined. New ideas in physics often explain the fundamental mechanisms of other sciences, while opening new avenues of research in areas such as mathematics and philosophy.\r\n\r\n        Physics also makes significant contributions through advances in new technologies that arise from theoretical breakthroughs. For example, advances in the understanding of electromagnetism or nuclear physics led directly to the development of new products which have dramatically transformed modern-day society, such as television, computers, domestic appliances, and nuclear weapons; advances in thermodynamics led to the development of industrialization and advances in mechanics inspired the development of calculus.\r\n        ', 'physics_note'),
(2, 12, ' Chemical properties are characteristics of matter that describe how matter changes form in the presence of other matter. Does a sample of matter burn? Burning is a chemical property. Does it behave violently when put in water? This reaction is a chemical property as well (Figure 1.2 “Chemical Properties”). In the following chapters, we will see how descriptions of physical and chemical properties are important aspects of chemistry.', 'chemistry_note'),
(3, 12, '     The purpose of this guide is to provide an overview of the basic structural components of living cells. In reviewing these structures, we will also discuss their functions.\r\n\r\n         All living organisms are composed of cells. A cell is a small, membrane-bound compartment that contains all the chemicals and molecules that help support an organism\'s life. An understanding of the structure of cells is one of the first steps in comprehending the complex cellular interactions that direct and produce life.', 'biology_note'),
(4, 11, '   Physics is one of the oldest academic disciplines, perhaps the oldest through its inclusion of astronomy. Over the last two millennia, physics was a part of natural philosophy along with chemistry, certain branches of mathematics, and biology, but during the Scientific Revolution in the 17th century, the natural sciences emerged as unique research programs in their own right. Physics intersects with many interdisciplinary areas of research, such as biophysics and quantum chemistry, and the boundaries of physics are not rigidly defined. New ideas in physics often explain the fundamental mechanisms of other sciences, while opening new avenues of research in areas such as mathematics and philosophy.\r\n\r\n        Physics also makes significant contributions through advances in new technologies that arise from theoretical breakthroughs. For example, advances in the understanding of electromagnetism or nuclear physics led directly to the development of new products which have dramatically transformed modern-day society, such as television, computers, domestic appliances, and nuclear weapons; advances in thermodynamics led to the development of industrialization and advances in mechanics inspired the development of calculus.\r\n        ', 'physics_note'),
(5, 11, ' Chemical properties are characteristics of matter that describe how matter changes form in the presence of other matter. Does a sample of matter burn? Burning is a chemical property. Does it behave violently when put in water? This reaction is a chemical property as well (Figure 1.2 “Chemical Properties”). In the following chapters, we will see how descriptions of physical and chemical properties are important aspects of chemistry.', 'chemistry_note'),
(6, 11, '     The purpose of this guide is to provide an overview of the basic structural components of living cells. In reviewing these structures, we will also discuss their functions.\r\n\r\n         All living organisms are composed of cells. A cell is a small, membrane-bound compartment that contains all the chemicals and molecules that help support an organism\'s life. An understanding of the structure of cells is one of the first steps in comprehending the complex cellular interactions that direct and produce life.', 'biology_note');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `date`, `title`, `content`) VALUES
(1, '15.3.2020', 'Pray', 'Pray for us  due to pandemic'),
(2, '17.3.2020', 'Message from principle', 'We need money. Please start the classes online in college.');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(20) NOT NULL,
  `class` int(20) NOT NULL,
  `notice_type` varchar(200) NOT NULL,
  `notice` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `class`, `notice_type`, `notice`) VALUES
(1, 12, 'make_up', ' Dear Students, You have a make-up class on 27/5/2020 (Thursday) at 11 am.'),
(2, 12, 'lab_exam', ' Dear Students, Your lab exam will be taken on 25/5/2020 (Tuesday). The topics for the exam have been discussed in the class.'),
(3, 12, 'Class_Cancellation', '  Dear Students, Your lab class of 21/5/2020 has been cancelled. Make up date and time will be announced later.'),
(4, 11, 'make_up', ' Dear Students, You have a make-up class on 27/5/2020 (Thursday) at 11 am.'),
(5, 11, 'lab_exam', ' Dear Students, Your lab exam will be taken on 25/5/2020 (Tuesday). The topics for the exam have been discussed in the class.'),
(6, 11, 'Class_Cancellation', '  Dear Students, Your lab class of 21/5/2020 has been cancelled. Make up date and time will be announced later.');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(256) NOT NULL,
  `p_password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `bldgrp` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `occupation` varchar(256) NOT NULL,
  `salary` int(11) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `type` varchar(50) DEFAULT 'parent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`p_id`, `p_name`, `p_password`, `email`, `dob`, `bldgrp`, `gender`, `occupation`, `salary`, `photo`, `type`) VALUES
(1, 'Jasim', '123456', 'Jasim.1235@gmail.com', '1964-06-25', 'O+', 'male', 'Others', 24500, 'download (1).jpg', 'parent'),
(2, 'Karim', '123456', 'karim@willes.edu', '1965-09-25', 'O+', 'male', 'Business', 65000, 'download (2).jpg', 'parent'),
(3, 'Kabir', '123456', 'kabir@aiub.edu', '1987-02-15', 'O+', 'male', 'Business', 26000, 'web9.jpg', 'parent'),
(5, 'Mujib', '123456', 'mujib@aiub.edu', '1967-05-25', 'A+', 'male', 'Business', 10000, 'school-child-with-parents_23-2148193004.jpg', 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `parent_createcomplaint`
--

CREATE TABLE `parent_createcomplaint` (
  `cmp_id` int(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `create_complaint` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_createcomplaint`
--

INSERT INTO `parent_createcomplaint` (`cmp_id`, `p_name`, `create_complaint`) VALUES
(1, 'Jasim', ' asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `parent_poll`
--

CREATE TABLE `parent_poll` (
  `poll_id` int(20) NOT NULL,
  `yes` int(200) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_poll`
--

INSERT INTO `parent_poll` (`poll_id`, `yes`, `no`) VALUES
(2, 4, 3),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `sref_id` int(20) NOT NULL,
  `s_id` int(20) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `appsummary` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `ref_id` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`sref_id`, `s_id`, `s_name`, `appsummary`, `amount`, `ref_id`, `date`) VALUES
(0, 33333, 'atik', 'asd2345', 22222, '0', '1998-12-12'),
(0, 123, '1234', '23e4r', 4444, '0', '1998-12-12'),
(0, 1, 'atik', 'asd2345', 23333, '0', '1888-12-12'),
(0, 1222, 'atik', 'summer 19-20', 19000, '0', '1223-12-12'),
(0, 1111, 'atik', 'summer 19-20', 120000, '0', '1998-12-12'),
(0, 1111, 'atik', 'summer 19-20', 120000, '0', '1998-12-12'),
(0, 111111, 'atik', 'summer 19-20', 30000, '0', '1990-12-12'),
(0, 12, 'atik', 'summer 19-20', 23333, '233333', '1223-12-12'),
(0, 111, 'atik', 'summer 19-20', 50000, 'qwer12345', '1998-12-12'),
(12345, 23, 'atik', 'summer 19-20', 400000, 'qwer12345', '1998-12-12'),
(122222, 1, 'atik', 'summer 19-20', 1200000, 'qwer12345', '2020-12-12'),
(1234, 12345, 'atik', 'summer 19-20', 129999, 'qwer12345', '2010-12-12'),
(12344, 12345, 'atik', 'summer 19-20', 12000, 'qwer12345', '2020-12-01'),
(2, 33107, 'S M RAHID HAQUE', 'fasdsa', 125063, '175698', '1956-02-05'),
(17300, 556, 'S M RAHID HAQUE', 'fasdsa', 145, '4', '1958-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `q_id` int(20) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `q_option` varchar(100) DEFAULT NULL,
  `votes` int(20) NOT NULL DEFAULT 0,
  `poll_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `q_id`, `question`, `q_option`, `votes`, `poll_date`) VALUES
(1, NULL, 'What would you like to learn today?', NULL, 0, '2020-05-05 20:30:17'),
(2, 1, NULL, 'aaa', 76, '2020-05-05 20:30:17'),
(3, 1, NULL, 'bbb', 2, '2020-05-05 20:31:56'),
(4, 1, NULL, 'ccc', 3, '2020-05-05 20:31:56'),
(6, 1, NULL, 'ddd', 1, '2020-05-05 20:32:32'),
(7, NULL, 'This is test question?', NULL, 0, '2020-05-05 21:57:53'),
(8, 7, NULL, 'aaa1', 3, '2020-05-05 21:59:15'),
(9, 7, NULL, 'bbb2', 49, '2020-05-05 21:59:15'),
(10, 7, NULL, 'ccc2', 1, '2020-05-05 21:59:15'),
(11, 7, NULL, 'ddd2', 1, '2020-05-05 21:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `poll_question`
--

CREATE TABLE `poll_question` (
  `poll_id` int(20) NOT NULL,
  `question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll_question`
--

INSERT INTO `poll_question` (`poll_id`, `question`) VALUES
(1, 'Teachers must needed M.S.C degree.'),
(2, 'Teachers must needed B.S.C degree.'),
(3, 'asdfvgh');

-- --------------------------------------------------------

--
-- Table structure for table `regestered_book`
--

CREATE TABLE `regestered_book` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regestered_book`
--

INSERT INTO `regestered_book` (`id`, `s_name`, `book_name`) VALUES
(0, '', 'David Copperfield'),
(21, 'ppp mm', 'HTML'),
(22, 'ppp mm', 'JavaScript'),
(23, 'safuan kalu', 'JavaScript'),
(24, 'safuan kalu', 'Reactjs'),
(25, 'ddd nnnn', 'NodeJS'),
(26, 'safuan kalu', 'HTML'),
(27, 'rizowan ahmed', 'CSS'),
(28, 'ddd nnnn', 'David Copperfield'),
(31, 'mahedi hasan', 'jQuery'),
(32, 'mahedi hasan', 'David Copperfield'),
(33, 'mahedi hasan', 'David Copperfield'),
(34, 'mahedi hasan', 'David Copperfield'),
(35, 'mahedi hasan', 'David Copperfield'),
(36, 'mahedi hasan', 'Bootstrap'),
(37, 'mahedi hasan', 'David Copperfield'),
(38, 'Rizowan Ahmed', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `regestered_course`
--

CREATE TABLE `regestered_course` (
  `id` int(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regestered_course`
--

INSERT INTO `regestered_course` (`id`, `student_id`, `student_name`, `c_name`, `time`) VALUES
(0, '', '', 'COMPILER DESIGN [N]', '2020-05-20 20:27:00'),
(5, '8888', 'safuan kalu', 'Bangla 2nd', '0000-00-00 00:00:00'),
(7, '8888', 'safuan kalu', 'Math', '0000-00-00 00:00:00'),
(15, '11111', 'rizowan ahmed', 'English', '0000-00-00 00:00:00'),
(27, '4444', 'ddd nnnn', 'COMPUTER GRAPHICS [C]', '0000-00-00 00:00:00'),
(34, '1234', 'mahedi hasan', 'COMPILER DESIGN [N]', '2020-05-06 16:54:12'),
(35, '1234', 'mahedi hasan', 'RESEARCH METHODOLOGY [CS] [F]', '2020-05-06 16:56:19'),
(36, '4444', 'Rizowan Ahmed', 'RESEARCH METHODOLOGY [CS] [F]', '2020-05-06 20:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `bldgrp` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`, `gender`, `dob`, `bldgrp`, `photo`) VALUES
(1, 'bdonti', '12345', 'male', '2020-04-09', 'A+', 'avatar1.jpg'),
(2, 'Ovi', '12345', 'male', '2020-02-05', 'B+', 'avatar2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `r_id` int(20) NOT NULL,
  `class` int(20) NOT NULL,
  `Subject` varchar(2000) NOT NULL,
  `Grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`r_id`, `class`, `Subject`, `Grade`) VALUES
(1, 11, 'Physics', 4.75),
(2, 12, 'physics', 4.5),
(3, 11, 'chemistry', 4.75),
(4, 11, 'mathmetics', 4.5),
(5, 12, 'chemistry', 4.5),
(6, 12, 'mathmetics', 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `selectbook`
--

CREATE TABLE `selectbook` (
  `b_id` int(50) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `b_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selectbook`
--

INSERT INTO `selectbook` (`b_id`, `s_name`, `b_name`) VALUES
(2, 'rizowan', 'David Copperfield'),
(13, 'rony', 'David Copperfield'),
(14, 'rony', 'Pakistan the Gathering Storm'),
(15, 'riz', 'Enchantment');

-- --------------------------------------------------------

--
-- Table structure for table `selectcourse`
--

CREATE TABLE `selectcourse` (
  `cl_id` int(11) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `s_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selectcourse`
--

INSERT INTO `selectcourse` (`cl_id`, `c_name`, `s_name`) VALUES
(1, 'COMPUTER GRAPHICS [C]', 'S M RAHID HAQUE'),
(2, 'COMPILER DESIGN [N]', 'S M RAHID HAQUE'),
(6, 'WEB TECHNOLOGIES [F]', 'S M RAHID HAQUE'),
(7, 'COMPILER DESIGN [N]', 'Rizowan'),
(11, 'WEB TECHNOLOGIES [F]', 'riz'),
(12, 'COMPUTER GRAPHICS [C]', 'riz');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(256) NOT NULL,
  `s_password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `dept` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `class` int(11) NOT NULL,
  `adress` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `type` varchar(50) DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_password`, `email`, `dob`, `dept`, `gender`, `class`, `adress`, `photo`, `type`) VALUES
(1, 'S M RAHID', '2560', 'rahid@aiub.edu', '1996-09-24', 'cse', 'male', 11, 'Segunbagicha', 'download.jpg', 'student'),
(2, 'Rahid', '123456', 'ontirahid@yahoo.com', '1987-02-25', 'eee', 'male', 12, 'Maniganj', '0430-ac-valhalla-02-e1917ae927446849284373c4e8015af4bf0a1521.jpg', 'student'),
(3, 'Rizowan', '123456', 'rizowan@aiub.edu', '1984-05-25', 'cse', 'male', 11, 'Kakrail', '93551959_2596997940623651_7943856839349764096_n.jpg', 'student'),
(4, 'Sean', '123456', 'sean@aiub.edu', '1984-02-25', 'bba', 'male', 12, 'Kakrail', '99131941_3092909990766326_7159125177173803008_o.jpg', 'student'),
(5, 'David', '123456', 'david@aiub.edu', '1956-05-31', 'bba', 'male', 11, 'Banasree', '98208542_3087950377967450_8799405026108768256_n.jpg', 'student'),
(6, 'Maria', '123456', 'maria@aiub.edu', '1996-05-25', 'eee', 'female', 12, 'Bashundhara', 'web1.jpg', 'student'),
(7, 'Jasmine', '123456', 'jasmine@aiub.edu', '1996-02-25', 'eee', 'female', 10, 'Arambag', 'web4.jpg', 'student'),
(8, 'Ishraq', '123456', 'ishraq@aiub.edu', '2000-05-26', 'eee', 'male', 11, 'Kakrail', 'GetUserImage (2).jpg', 'student'),
(9, 'Miranda', '123456', 'miranda@aiub.edu', '1998-05-12', 'bba', 'male', 10, 'Rupganj', 'web1.jpg', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendence`
--

CREATE TABLE `student_attendence` (
  `student_id` int(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `attendence` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_attendence`
--

INSERT INTO `student_attendence` (`student_id`, `teacher`, `course`, `attendence`) VALUES
(8888, 'Mr.A', 'AAA', '4/10'),
(4444, 'Mr.B', 'BBB', '5/10'),
(8888, 'Mr.A', 'AAA', '4/10'),
(4444, 'Mr.B', 'BBB', '5/10'),
(4444, 'Mr.A', 'Web tech', '9/10'),
(4444, 'Mr.C', 'English 1', '8/10');

-- --------------------------------------------------------

--
-- Table structure for table `student_complaints`
--

CREATE TABLE `student_complaints` (
  `student_id` int(20) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_complaints_msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_complaints`
--

INSERT INTO `student_complaints` (`student_id`, `student_name`, `student_complaints_msg`, `date`) VALUES
(1234, 'mahedi hasan', 'hello admin i am some complaints', '2020-04-06 17:21:44'),
(1234, 'mahedi hasan', 'hello admin', '2020-04-07 01:43:53'),
(5511, 'mahedi hasan', 'Hello admi some queries', '2020-04-07 10:48:47'),
(12345, 'mmmmm', 'mmmmm', '2020-04-07 11:38:43'),
(8888, 'safuan kalu', 'abxcac', '2020-04-07 14:24:34'),
(7777, 'Rizowan Ahmed', 'this is test request', '2020-05-04 11:36:28'),
(4444, 'rizowan ahmed', 'aaaaaaaa', '2020-05-19 12:24:18'),
(4444, 'rizowan ahmed', 'sldvksndv', '2020-05-20 08:35:10'),
(0, '', 'asdadas', '2020-05-20 14:27:13'),
(4444, 'rizowan ahmed', 'dsadas', '2020-05-20 14:27:58'),
(33107, 'riz', 'asdasd', '2020-05-23 05:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `student_pwd` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_dob` varchar(255) NOT NULL,
  `student_dept` varchar(255) NOT NULL,
  `student_bldgrp` varchar(255) NOT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `guardian_number` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'profile.jpg',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `student_name`, `student_id`, `student_pwd`, `student_gender`, `student_email`, `student_dob`, `student_dept`, `student_bldgrp`, `father_name`, `mother_name`, `guardian_number`, `nationality`, `religion`, `address`, `image`, `date`) VALUES
(1, 'Rahid', 8, '0644farcry', 'male', 'ontirahid@yahoo.com', '1987-02-05', 'science', 'a+', NULL, NULL, NULL, NULL, NULL, NULL, 'profile.jpg', '2020-05-16 13:01:14'),
(19, 'rizowan ahmed', 4444, '44444444', 'male', 'rizowanahmedraj@gmail.com', '1992-02-14', 'science', 'o+', NULL, NULL, NULL, NULL, NULL, NULL, 'profile.jpg', '2020-05-07 05:49:06'),
(20, 'riz', 33107, '123456', 'male', 'alamin@aiub.edu', '1954-02-05', 'science', 'a+', 'Agg', 'gdgsg', '01797775766', 'Bangladesh', 'Islam', 'Segunbagicha', '5ec8b7d16566bData Comm1.JPG', '2020-05-22 09:14:57'),
(21, 'rony', 2502, '123456', 'male', 'rony@aiub.edu', '1987-02-25', 'arts', 'a+', NULL, NULL, NULL, NULL, NULL, NULL, 'profile.jpg', '2020-05-22 09:29:03'),
(22, 'Rafi', 3569, '123456', 'male', 'rafi@aiub.edu', '1987-08-25', 'science', 'b+', NULL, NULL, NULL, NULL, NULL, NULL, 'profile.jpg', '2020-05-23 06:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `student_financial`
--

CREATE TABLE `student_financial` (
  `student_id` int(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `topay` int(50) NOT NULL,
  `due` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_financial`
--

INSERT INTO `student_financial` (`student_id`, `reason`, `topay`, `due`, `status`) VALUES
(4444, 'Mid Payment', 200, 50, 'Unpaid'),
(8888, 'Library fees', 50, 0, 'Paid'),
(8888, 'Sports', 90, 0, 'Paid'),
(4444, 'Mid Payment', 200, 50, 'Unpaid'),
(8888, 'Library fees', 50, 0, 'Paid'),
(8888, 'Sports', 90, 0, 'Paid'),
(7777, 'Mid Payment', 500, 200, 'Unpaid'),
(7777, 'Sports Fee', 500, 0, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `student_grade`
--

CREATE TABLE `student_grade` (
  `student_id` int(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `totnum` int(50) NOT NULL,
  `yougot` int(50) NOT NULL,
  `gpa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_grade`
--

INSERT INTO `student_grade` (`student_id`, `subject`, `totnum`, `yougot`, `gpa`) VALUES
(4444, 'AAA', 100, 80, 'A+'),
(4444, 'AAA', 100, 80, 'A+'),
(11111, 'AAA', 100, 85, 'A+'),
(11111, 'AAA', 100, 85, 'A+'),
(8888, 'AAA', 100, 85, 'A+'),
(7777, 'AAA', 100, 75, 'B'),
(7777, 'BBB', 100, 85, 'A'),
(7777, 'CCC', 100, 75, 'B'),
(7777, 'DDD', 100, 85, 'A'),
(4444, 'CCC', 100, 95, 'A+'),
(4444, 'DDD', 100, 80, 'B+'),
(4444, 'AAA', 100, 80, 'A+'),
(4444, 'AAA', 100, 80, 'A+'),
(11111, 'AAA', 100, 85, 'A+'),
(11111, 'AAA', 100, 85, 'A+'),
(8888, 'AAA', 100, 85, 'A+'),
(7777, 'AAA', 100, 75, 'B'),
(7777, 'BBB', 100, 85, 'A'),
(7777, 'CCC', 100, 75, 'B'),
(7777, 'DDD', 100, 85, 'A'),
(4444, 'CCC', 100, 95, 'A+'),
(4444, 'DDD', 100, 80, 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `student_update_request`
--

CREATE TABLE `student_update_request` (
  `student_id` int(20) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_update_msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_update_request`
--

INSERT INTO `student_update_request` (`student_id`, `student_name`, `student_update_msg`, `date`) VALUES
(1234, 'mahedi hasan', 'hello admi i am some update request', '2020-04-06 17:14:58'),
(1234, 'mahedi hasan', 'hello admin how are hou', '2020-04-06 17:16:56'),
(1234, 'mahedi hasan', 'hello admin', '2020-04-07 01:44:37'),
(5511, 'mahedi hasan', 'Hello admin some update now', '2020-04-07 10:48:15'),
(7777, 'Rizowan Ahmed', 'this is test request', '2020-05-04 11:46:42'),
(1234, 'mahedi hasan', 'hello admi i am some update request', '2020-04-06 17:14:58'),
(1234, 'mahedi hasan', 'hello admin how are hou', '2020-04-06 17:16:56'),
(1234, 'mahedi hasan', 'hello admin', '2020-04-07 01:44:37'),
(5511, 'mahedi hasan', 'Hello admin some update now', '2020-04-07 10:48:15'),
(7777, 'Rizowan Ahmed', 'this is test request', '2020-05-04 11:46:42'),
(4444, 'rizowan ahmed', 'abcd', '2020-05-19 12:18:24'),
(0, '', 'asdasdas', '2020-05-20 14:31:39'),
(4444, 'rizowan ahmed', 'sadsa', '2020-05-20 14:32:28'),
(33107, 'riz', 'asdasd', '2020-05-23 05:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `subjectinfo`
--

CREATE TABLE `subjectinfo` (
  `sub_id` int(20) NOT NULL,
  `class` int(20) NOT NULL,
  `science` varchar(200) NOT NULL,
  `Ssubject_code` int(20) NOT NULL,
  `arts` varchar(200) NOT NULL,
  `Asubject_code` int(20) NOT NULL,
  `commerce` varchar(200) NOT NULL,
  `Csubject_code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectinfo`
--

INSERT INTO `subjectinfo` (`sub_id`, `class`, `science`, `Ssubject_code`, `arts`, `Asubject_code`, `commerce`, `Csubject_code`) VALUES
(1, 12, 'physics', 101, 'Economics', 154, 'statistics', 109),
(2, 11, 'chemistry', 102, 'Economy', 134, 'statistics', 149);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(256) NOT NULL,
  `t_password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `bldgrp` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `salary` int(11) NOT NULL,
  `dept` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'teacher'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `t_password`, `email`, `dob`, `bldgrp`, `gender`, `salary`, `dept`, `status`, `photo`, `type`) VALUES
(2, 'DR. M. M. MAHBUBUL SYEED', '123456', 'mahbubul.syeed@aiub.edu', '1980-05-15', 'B+', 'male', 120000, 'cse', 'Married', 'GetUserImage.jpg', 'teacher'),
(6, 'TANJIL AMIN', '123456', 'tanjil@aiub.edu', '1987-05-25', 'A+', 'male', 40000, 'cse', 'Married', 'web12.jpg', 'teacher'),
(7, 'SAJIB HASAN', '123456', 'sajib.hasan@aiub.edu', '1980-08-25', 'A+', 'male', 10000, 'cse', 'Not Married', 'GetUserImage (2).jpg', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `admitcourse`
--
ALTER TABLE `admitcourse`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `all_book`
--
ALTER TABLE `all_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`at_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `examschedule`
--
ALTER TABLE `examschedule`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `parent_createcomplaint`
--
ALTER TABLE `parent_createcomplaint`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `parent_poll`
--
ALTER TABLE `parent_poll`
  ADD PRIMARY KEY (`poll_id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_question`
--
ALTER TABLE `poll_question`
  ADD PRIMARY KEY (`poll_id`);

--
-- Indexes for table `regestered_book`
--
ALTER TABLE `regestered_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regestered_course`
--
ALTER TABLE `regestered_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `selectbook`
--
ALTER TABLE `selectbook`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `selectcourse`
--
ALTER TABLE `selectcourse`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectinfo`
--
ALTER TABLE `subjectinfo`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admitcourse`
--
ALTER TABLE `admitcourse`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `examschedule`
--
ALTER TABLE `examschedule`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `selectbook`
--
ALTER TABLE `selectbook`
  MODIFY `b_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `selectcourse`
--
ALTER TABLE `selectcourse`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
