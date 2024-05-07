-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 06:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2022-01-01 10:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

CREATE TABLE `arts` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'HOD.Arts', 'f91e15dbec69fc40f81f0876e7009648', '2022-01-01 10:30:57'),
(0, 'arts', 'f91e15dbec69fc40f81f0876e7009648', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commerce`
--

CREATE TABLE `commerce` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `commerce`
--

INSERT INTO `commerce` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'HOD.Commerce', 'f91e15dbec69fc40f81f0876e7009648', '2022-01-01 10:30:57'),
(2, 'commerce', 'f91e15dbec69fc40f81f0876e7009648', '2024-02-07 11:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'HOD.Science', 'f91e15dbec69fc40f81f0876e7009648', '2022-01-01 10:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `DepartmentId` int(11) DEFAULT NULL,
  `ClassNameNumeric` int(4) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `DepartmentId`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(13, 'B.com (IT)', 1, 1, 'A', '2024-02-08 04:46:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(11) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentName`, `CreationDate`, `Updationdate`) VALUES
(1, 'Commerce', '2024-02-07 10:35:05', NULL),
(2, 'Arts', '2024-02-07 10:35:05', NULL),
(3, 'Science', '2024-02-07 10:35:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(2) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(1, 'Prachi', 'prachi@gmail.com', 'B.com(IT) is worst experience in My life ', 'B.com(IT) is worst experience in My life ', '2024-02-12 09:02:06', 1),
(2, 'Aditi', 'aditi@gmail.com', 'Don\'t take admission in DKASC college', 'Don\'t take admission in DKASC college', '2024-02-12 15:37:07', 1),
(3, 'Sakshi', 'sakshi@gmail.com', 'I wan\'t admission in B.tech', 'I wan\'t admission in B.tech', '2024-02-12 15:39:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `id` int(11) NOT NULL,
  `noticeTitle` varchar(255) DEFAULT NULL,
  `noticeDetails` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`id`, `noticeTitle`, `noticeDetails`, `postingDate`) VALUES
(2, 'Notice regarding result Delearation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit ut aliquam purus. Vel risus commodo viverra maecenas. Et netus et malesuada fames ac turpis egestas sed. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Ornare arcu odio ut sem nulla pharetra diam. Vel pharetra vel turpis nunc eget lorem dolor sed. Velit ut tortor pretium viverra suspendisse. In ornare quam viverra orci sagittis eu. Viverra tellus in hac habitasse. Donec massa sapien faucibus et molestie. Libero justo laoreet sit amet cursus sit amet dictum. Dignissim diam quis enim lobortis scelerisque fermentum dui.\r\n\r\nEget nulla facilisi etiam dignissim. Quisque non tellus orci ac. Amet cursus sit amet dictum sit amet justo donec. Interdum velit euismod in pellentesque massa. Condimentum lacinia quis vel eros donec ac odio. Magna eget est lorem ipsum dolor. Bibendum at varius vel pharetra vel turpis nunc eget lorem. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Massa tincidunt dui ut ornare lectus sit amet est placerat. Nisi quis eleifend quam adipiscing vitae.', '2024-02-07 09:04:58'),
(3, 'Test Notice', 'This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  ', '2024-02-07 09:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(22, 7, 12, 11, 95, '2024-02-07 10:54:55', NULL),
(23, 7, 12, 12, 100, '2024-02-07 10:54:55', NULL),
(24, 8, 11, 11, 100, '2024-02-07 19:06:42', NULL),
(25, 9, 13, 13, 40, '2024-02-08 04:57:11', NULL),
(26, 9, 13, 15, 42, '2024-02-08 04:57:11', NULL),
(27, 9, 13, 14, 38, '2024-02-08 04:57:11', NULL),
(28, 9, 13, 16, 35, '2024-02-08 04:57:11', NULL),
(29, 9, 13, 17, 56, '2024-02-08 04:57:11', NULL),
(30, 9, 13, 18, 43, '2024-02-08 04:57:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(7, 'Amruta Nikam', '6001', 'an@111', 'Female', '2003-01-01', 12, '2024-02-07 10:53:50', NULL, 1),
(8, 'Parshwa konire', '6001', '21@21', 'Male', '2003-11-24', 11, '2024-02-07 19:06:00', NULL, 1),
(9, 'Shreyash Ajit Khichade', '6008', 'shreyash@gmail.com', 'Male', '2004-01-29', 13, '2024-02-08 04:56:01', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(32, 12, 11, 1, '2024-02-07 10:52:15', NULL),
(33, 12, 12, 1, '2024-02-07 10:52:21', NULL),
(34, 11, 11, 1, '2024-02-07 19:06:31', NULL),
(35, 13, 13, 1, '2024-02-08 04:52:46', NULL),
(36, 13, 14, 1, '2024-02-08 04:52:54', NULL),
(37, 13, 15, 1, '2024-02-08 04:53:08', NULL),
(38, 13, 16, 1, '2024-02-08 04:53:22', NULL),
(39, 13, 17, 1, '2024-02-08 04:53:31', NULL),
(40, 13, 18, 1, '2024-02-08 04:53:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(11, 'English', '02', '2024-02-07 10:51:30', NULL),
(12, 'Marathi', '01', '2024-02-07 10:51:39', NULL),
(13, 'Accountancy I', '333', '2024-02-08 04:48:24', NULL),
(14, 'Entrepreneurship Developement', '444', '2024-02-08 04:49:29', NULL),
(15, 'Economic I', '425', '2024-02-08 04:50:26', NULL),
(16, 'Human Resource Management', '253', '2024-02-08 04:51:15', NULL),
(17, 'Mathematics', '369', '2024-02-08 04:51:40', NULL),
(18, 'Organisational Behaviour', '234', '2024-02-08 04:52:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
