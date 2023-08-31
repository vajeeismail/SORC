-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 04:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sorc`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `LoginID` int(3) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `UserID` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`LoginID`, `Username`, `Password`, `UserID`) VALUES
(11, 'admin', 'admin', 'SAM/ADMIN/01'),
(12, 'vajee', 'vajee', 'SAM/ADMIN/02');

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `AdminID` varchar(12) NOT NULL,
  `AdminName` varchar(100) DEFAULT NULL,
  `AdminMobile` int(10) DEFAULT NULL,
  `AdminMail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`AdminID`, `AdminName`, `AdminMobile`, `AdminMail`) VALUES
('SAM/ADMIN/01', 'First Admin', 750000000, 'firstadmin@gmail.com'),
('SAM/ADMIN/02', 'Second', 766666666, '3admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `ID` int(3) NOT NULL,
  `Year` int(50) DEFAULT NULL,
  `Semester` int(50) DEFAULT NULL,
  `File` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DepID` varchar(10) NOT NULL,
  `Department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DepID`, `Department`) VALUES
(' HNDA', 'High National Diploma in Accountancy'),
(' HNDE', 'High National Diploma in English'),
(' HNDIT', 'High National Diploma in Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `ExYear` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`ExYear`, `Semester`, `Department`) VALUES
('First Year', 'First Semester', ' HNDA'),
('First Year', 'First Semester', ' HNDE'),
('First Year', 'First Semester', ' HNDIT'),
('First Year', 'Second Semester', ' HNDA'),
('First Year', 'Second Semester', ' HNDE'),
('First Year', 'Second Semester', ' HNDIT'),
('Second Year', 'First Semester', ' HNDA'),
('Second Year', 'First Semester', ' HNDE'),
('Second Year', 'First Semester', ' HNDIT'),
('Second Year', 'Second Semester', ' HNDA'),
('Second Year', 'Second Semester', ' HNDE'),
('Second Year', 'Second Semester', ' HNDIT'),
('Third Year', 'First Semester', ' HNDA');

-- --------------------------------------------------------

--
-- Table structure for table `loginadministator`
--

CREATE TABLE `loginadministator` (
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginadministator`
--

INSERT INTO `loginadministator` (`Username`, `Password`) VALUES
('newmainadmin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `StudentID` varchar(20) NOT NULL,
  `StuBatch` int(4) NOT NULL,
  `SubjectCode` varchar(20) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `AccYear` varchar(50) DEFAULT NULL,
  `AccSemester` varchar(50) DEFAULT NULL,
  `Marks` varchar(6) DEFAULT NULL,
  `ExaminationYear` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`StudentID`, `StuBatch`, `SubjectCode`, `Department`, `AccYear`, `AccSemester`, `Marks`, `ExaminationYear`) VALUES
('SAM/AC/2020/F/0015', 2020, 'HNDA1101', ' HNDA', 'First Year', 'First Semester', 'A', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1102', ' HNDA', 'First Year', 'First Semester', 'A-', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1103', ' HNDA', 'First Year', 'First Semester', 'A-', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1104', ' HNDA', 'First Year', 'First Semester', 'B', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1105', ' HNDA', 'First Year', 'First Semester', 'A', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1201', ' HNDA', 'First Year', 'Second Semester', 'A', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1202', ' HNDA', 'First Year', 'Second Semester', 'A', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1203', ' HNDA', 'First Year', 'Second Semester', 'A-', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1204', ' HNDA', 'First Year', 'Second Semester', 'B', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1205', ' HNDA', 'First Year', 'Second Semester', 'A', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA1206', ' HNDA', 'First Year', 'Second Semester', 'A', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA2101', ' HNDA', 'Second Year', 'First Semester', 'A', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA2102', ' HNDA', 'Second Year', 'First Semester', 'A+', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA2103', ' HNDA', 'Second Year', 'First Semester', 'A-', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA2104', ' HNDA', 'Second Year', 'First Semester', 'B+', 2020),
('SAM/AC/2020/F/0015', 2020, 'HNDA2105', ' HNDA', 'Second Year', 'First Semester', 'A', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1101', ' HNDA', 'First Year', 'First Semester', 'A', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1102', ' HNDA', 'First Year', 'First Semester', 'B+', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1103', ' HNDA', 'First Year', 'First Semester', 'A', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1104', ' HNDA', 'First Year', 'First Semester', 'B', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1105', ' HNDA', 'First Year', 'First Semester', 'A', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1201', ' HNDA', 'First Year', 'Second Semester', 'A-', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1202', ' HNDA', 'First Year', 'Second Semester', 'B+', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1203', ' HNDA', 'First Year', 'Second Semester', 'A', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1204', ' HNDA', 'First Year', 'Second Semester', 'B', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1205', ' HNDA', 'First Year', 'Second Semester', 'A', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA1206', ' HNDA', 'First Year', 'Second Semester', 'A+', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA2101', ' HNDA', 'Second Year', 'First Semester', 'A', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA2102', ' HNDA', 'Second Year', 'First Semester', 'A+', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA2103', ' HNDA', 'Second Year', 'First Semester', 'A-', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA2104', ' HNDA', 'Second Year', 'First Semester', 'B+', 2020),
('SAM/AC/2020/F/0016', 2020, 'HNDA2105', ' HNDA', 'Second Year', 'First Semester', 'A', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT1012', ' HNDIT', 'First Year', 'First Semester', 'A', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT1022', ' HNDIT', 'First Year', 'First Semester', 'A+', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT1032', ' HNDIT', 'First Year', 'First Semester', 'B+', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT1042', ' HNDIT', 'First Year', 'First Semester', 'A+', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT1052', ' HNDIT', 'First Year', 'First Semester', 'A+', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT1062', ' HNDIT', 'First Year', 'First Semester', 'A+', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT2012', ' HNDIT', 'First Year', 'Second Semester', 'A', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT2022', ' HNDIT', 'First Year', 'Second Semester', 'A-', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT2032', ' HNDIT', 'First Year', 'Second Semester', 'A+', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT2052', ' HNDIT', 'First Year', 'Second Semester', 'A+', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT2062', ' HNDIT', 'First Year', 'Second Semester', 'A+', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT2072', ' HNDIT', 'First Year', 'Second Semester', 'A+', 2020),
('SAM/IT/2020/F/0029', 2020, 'HNDIT2082', ' HNDIT', 'First Year', 'Second Semester', 'A+', 2020),
('SAM/IT/2021/F/0004', 2021, 'HNDIT1022', ' HNDIT', 'First Year', 'First Semester', 'A', 2021),
('SAM/IT/2021/F/0004', 2021, 'HNDIT1032', ' HNDIT', 'First Year', 'First Semester', 'A+', 2021),
('SAM/IT/2021/F/0004', 2021, 'HNDIT1042', ' HNDIT', 'First Year', 'First Semester', 'B+', 2021),
('SAM/IT/2021/F/0004', 2021, 'HNDIT1052', ' HNDIT', 'First Year', 'First Semester', 'A', 2021),
('SAM/IT/2021/F/0004', 2021, 'HNDIT1062', ' HNDIT', 'First Year', 'First Semester', 'A', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `stafflogin`
--

CREATE TABLE `stafflogin` (
  `LoginID` int(3) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `UserID` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stafflogin`
--

INSERT INTO `stafflogin` (`LoginID`, `Username`, `Password`, `UserID`) VALUES
(3, 'staff1', 'staff1', 'SAM/STAFF/01');

-- --------------------------------------------------------

--
-- Table structure for table `stafftable`
--

CREATE TABLE `stafftable` (
  `StaffID` varchar(12) NOT NULL,
  `StaffName` varchar(100) DEFAULT NULL,
  `StaffPosition` varchar(20) DEFAULT NULL,
  `Department` varchar(10) DEFAULT NULL,
  `StaffMail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stafftable`
--

INSERT INTO `stafftable` (`StaffID`, `StaffName`, `StaffPosition`, `Department`, `StaffMail`) VALUES
('SAM/STAFF/01', 'First staff', 'HOD', ' HNDIT', 'hodit@gamil.com'),
('SAM/STAFF/02', 'Second staff', 'HOD', ' HNDE', 'hode@gamil.com'),
('SAM/STAFF/03', 'Third staff', 'HOD', ' HNDA', 'hoda@gamil.com'),
('SAM/STAFF/04', '4th Staff', 'Demonstrator', ' HNDIT', 'demoit@gamil.com'),
('SAM/STAFF/05', '5th Staff', 'Demonstrator', ' HNDE', 'demoe@gamil.com'),
('SAM/STAFF/06', '6th Staff', 'Demonstrator', ' HNDA', 'demoa@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` varchar(20) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `NIC` varchar(12) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Distric` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Contact` int(10) DEFAULT NULL,
  `Department` varchar(10) DEFAULT NULL,
  `Batch` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `FirstName`, `LastName`, `NIC`, `Mail`, `Distric`, `City`, `Contact`, `Department`, `Batch`) VALUES
('SAM/AC/2020/F/0015', 'A. H. M. ', 'WAJITH', '00000000000', 'stu@gmail.co', 'Ampara', 'SAM', 700000000, ' HNDA', 2020),
('SAM/AC/2020/F/0016', 'A. N. M. ', 'NAKKEER', '00000000000', 'stu@gmail.co', 'Ampara', 'Nintavur', 700000000, ' HNDA', 2020),
('SAM/AC/2020/F/0018', 'M. F. M. ', 'ATHNAN', '00000000000', 'stu2@gmail.co', 'Ampara', 'Nintavur', 750000000, ' HNDA', 2020),
('SAM/AC/2020/F/0019', 'J. I. ', 'SAFIR', '00000000000', 'stu@gmail.co', 'Ampara', 'Nintavur', 700000000, ' HNDA', 2020),
('SAM/IT/2020/F/0029', 'Vajeeh', 'Ismail', '200026100030', 'vajeehvjk@gmail.com', 'Ampara', 'Nintavur', 753403282, ' HNDIT', 2020),
('SAM/IT/2021/F/0002', 'A.N.', 'RAYASANA', '00000000000', 'stu@gmail.co', 'DISTRIC', 'CITY', 700000000, ' HNDIT', 2021),
('SAM/IT/2021/F/0004', 'R.', 'JAHIRKHAN', '00000000000', 'stu@gmail.co', 'DISTRIC', 'CITY', 700000000, ' HNDIT', 2021),
('SAM/IT/2021/F/0005', 'S.F. ', 'RIFANA', '00000000000', 'stu@gmail.co', 'DISTRIC', 'CITY', 700000000, ' HNDIT', 2021),
('SAM/IT/2021/F/0006', 'M.A.F. ', 'HASMIYA', '00000000000', 'stu@gmail.co', 'DISTRIC', 'CITY', 700000000, ' HNDIT', 2021),
('SAM/IT/2021/F/0007', 'M.F. ', 'RISKKA', '00000000000', 'stu@gmail.co', 'DISTRIC', 'CITY', 700000000, ' HNDIT', 2021),
('SAM/IT/2021/F/0008', 'H.M. ', 'AHMATH', '00000000000', 'stu@gmail.co', 'DISTRIC', 'CITY', 700000000, ' HNDIT', 2021),
('SAM/IT/2021/F/0009', 'F.R. ', 'AKTHAR', '00000000000', 'stu@gmail.co', 'DISTRIC', 'CITY', 700000000, ' HNDIT', 2021),
('SAM/IT/2021/F/0010', 'S. ', 'NIROSHAN', '00000000000', 'stu@gmail.co', 'DISTRIC', 'CITY', 700000000, ' HNDIT', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `stugpa`
--

CREATE TABLE `stugpa` (
  `StudentID` varchar(20) NOT NULL,
  `StudentBatch` int(4) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `AccYear` varchar(50) NOT NULL,
  `AccSemester` varchar(50) NOT NULL,
  `GPA` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stugpa`
--

INSERT INTO `stugpa` (`StudentID`, `StudentBatch`, `Department`, `AccYear`, `AccSemester`, `GPA`) VALUES
('SAM/AC/2020/F/0015', 2020, ' HNDA', 'First Year', 'First Semester', 3.73),
('SAM/AC/2020/F/0015', 2020, ' HNDA', 'First Year', 'Second Semester', 3.8),
('SAM/AC/2020/F/0015', 2020, ' HNDA', 'Second Year', 'First Semester', 3.84),
('SAM/AC/2020/F/0016', 2020, ' HNDA', 'First Year', 'First Semester', 3.7),
('SAM/AC/2020/F/0016', 2020, ' HNDA', 'First Year', 'Second Semester', 3.63),
('SAM/AC/2020/F/0016', 2020, ' HNDA', 'Second Year', 'First Semester', 3.93),
('SAM/IT/2020/F/0029', 2020, ' HNDIT', 'First Year', 'First Semester', 3.87),
('SAM/IT/2020/F/0029', 2020, ' HNDIT', 'First Year', 'Second Semester', 4),
('SAM/IT/2021/F/0004', 2021, ' HNDIT', 'First Year', 'First Semester', 3.86);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `SubCode` varchar(10) NOT NULL,
  `SubName` varchar(100) DEFAULT NULL,
  `SubType` varchar(10) DEFAULT NULL,
  `Credit` int(2) DEFAULT NULL,
  `Department` varchar(10) DEFAULT NULL,
  `ExYear` varchar(50) DEFAULT NULL,
  `Semester` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SubCode`, `SubName`, `SubType`, `Credit`, `Department`, `ExYear`, `Semester`) VALUES
('HNDA1101', 'Fundamentals of Financial Accounting', 'GPA', 4, ' HNDA', 'First Year', 'First Semester'),
('HNDA1102', 'Business Mathematics', 'GPA', 4, ' HNDA', 'First Year', 'First Semester'),
('HNDA1103', 'Commercial Awareness', 'GPA', 4, ' HNDA', 'First Year', 'First Semester'),
('HNDA1104', 'Business Communication I', 'GPA', 2, ' HNDA', 'First Year', 'First Semester'),
('HNDA1105', 'Introduction to Computers', 'GPA', 2, ' HNDA', 'First Year', 'First Semester'),
('HNDA1201', 'Intermediate Financial Accounting', 'GPA', 4, ' HNDA', 'First Year', 'Second Semester'),
('HNDA1202', 'Statistical Analysis for Management', 'GPA', 4, ' HNDA', 'First Year', 'Second Semester'),
('HNDA1203', 'Micro & Macro Economics', 'GPA', 4, ' HNDA', 'First Year', 'Second Semester'),
('HNDA1204', 'Business Communication II', 'GPA', 2, ' HNDA', 'First Year', 'Second Semester'),
('HNDA1205', 'Computer Applications', 'GPA', 2, ' HNDA', 'First Year', 'Second Semester'),
('HNDA1206', 'Human Values & Professional Ethics', 'NGPA', 0, ' HNDA', 'First Year', 'Second Semester'),
('HNDA2101', 'Advanced Financial Accounting', 'GPA', 4, ' HNDA', 'Second Year', 'First Semester'),
('HNDA2102', 'Operations Research', 'GPA', 4, ' HNDA', 'Second Year', 'First Semester'),
('HNDA2103', 'Principles of Auditing & Taxation', 'GPA', 4, ' HNDA', 'Second Year', 'First Semester'),
('HNDA2104', 'Business Communication III', 'GPA', 2, ' HNDA', 'Second Year', 'First Semester'),
('HNDA2105', 'Database Management Systems & Data Analysis', 'GPA', 2, ' HNDA', 'Second Year', 'First Semester'),
('HNDIT1012', 'Visual Application Programming', 'GPA', 4, ' HNDIT', 'First Year', 'First Semester'),
('HNDIT1022', 'Web Design', 'GPA', 4, ' HNDIT', 'First Year', 'First Semester'),
('HNDIT1032', 'Computer and Network System', 'GPA', 3, ' HNDIT', 'First Year', 'First Semester'),
('HNDIT1042', 'Information Management and Information Systems', 'GPA', 4, ' HNDIT', 'First Year', 'First Semester'),
('HNDIT1052', 'ICT Project (Individual)', 'GPA', 3, ' HNDIT', 'First Year', 'First Semester'),
('HNDIT1062', ' Communication Skills', 'GPA', 2, ' HNDIT', 'First Year', 'First Semester'),
('HNDIT2012', 'Fundamentals of Programming', 'GPA', 4, ' HNDIT', 'First Year', 'Second Semester'),
('HNDIT2022', 'Software Development', 'GPA', 3, ' HNDIT', 'First Year', 'Second Semester'),
('HNDIT2032', 'System Analysis and Design', 'GPA', 3, ' HNDIT', 'First Year', 'Second Semester'),
('HNDIT2042', 'Data communication and Computer  Networks', 'GPA', 3, ' HNDIT', 'Second Year', 'First Semester'),
('HNDIT2052', 'Principles of User Interface Design', 'GPA', 3, ' HNDIT', 'First Year', 'Second Semester'),
('HNDIT2062', 'ICT Project (Group)', 'GPA', 2, ' HNDIT', 'First Year', 'Second Semester'),
('HNDIT2072', 'Technical Writing', 'GPA', 2, ' HNDIT', 'First Year', 'Second Semester'),
('HNDIT2082', 'Human Value & Professional Ethics', 'NGPA', 1, ' HNDIT', 'First Year', 'Second Semester'),
('HNDIT3012', 'Object Oriented Programming', 'GPA', 4, ' HNDIT', 'Second Year', 'First Semester'),
('HNDIT3022', 'Web Programming', 'GPA', 4, ' HNDIT', 'Second Year', 'First Semester'),
('HNDIT3032', 'Data Structures and Algorithms', 'GPA', 2, ' HNDIT', 'Second Year', 'First Semester'),
('HNDIT3042', 'Database Management Systems', 'GPA', 3, ' HNDIT', 'Second Year', 'First Semester'),
('HNDIT3052', 'Operating Systems', 'GPA', 2, ' HNDIT', 'Second Year', 'First Semester'),
('HNDIT3062', 'Information and Computer  Security', 'GPA', 2, ' HNDIT', 'Second Year', 'First Semester'),
('HNDIT3072', 'Statistics for IT', 'GPA', 3, ' HNDIT', 'Second Year', 'First Semester'),
('HNDIT4012', 'Software Engineering', 'GPA', 3, ' HNDIT', 'Second Year', 'Second Semester'),
('HNDIT4022', 'Software Quality Assurance', 'GPA', 3, ' HNDIT', 'Second Year', 'Second Semester'),
('HNDIT4032', 'IT Project Management', 'GPA', 3, ' HNDIT', 'Second Year', 'Second Semester'),
('HNDIT4042', 'Professional World', 'GPA', 3, ' HNDIT', 'Second Year', 'Second Semester'),
('HNDIT4052', 'Programming Individual Project', 'GPA', 2, ' HNDIT', 'Second Year', 'Second Semester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`LoginID`),
  ADD KEY `fk_adminLogin` (`UserID`);

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DepID`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`ExYear`,`Semester`,`Department`),
  ADD KEY `fk_exdepartment` (`Department`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`StudentID`,`StuBatch`,`SubjectCode`,`Department`),
  ADD KEY `fk_subject` (`SubjectCode`),
  ADD KEY `fk_exam` (`AccYear`,`AccSemester`,`Department`);

--
-- Indexes for table `stafflogin`
--
ALTER TABLE `stafflogin`
  ADD PRIMARY KEY (`LoginID`),
  ADD KEY `fk_StaffLogin` (`UserID`);

--
-- Indexes for table `stafftable`
--
ALTER TABLE `stafftable`
  ADD PRIMARY KEY (`StaffID`),
  ADD KEY `fk_department` (`Department`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `fk_stuDepartment` (`Department`);

--
-- Indexes for table `stugpa`
--
ALTER TABLE `stugpa`
  ADD PRIMARY KEY (`StudentID`,`StudentBatch`,`Department`,`AccYear`,`AccSemester`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`SubCode`),
  ADD KEY `fk_subjectDep` (`Department`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `LoginID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stafflogin`
--
ALTER TABLE `stafflogin`
  MODIFY `LoginID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD CONSTRAINT `fk_adminLogin` FOREIGN KEY (`UserID`) REFERENCES `admintable` (`AdminID`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `fk_exdepartment` FOREIGN KEY (`Department`) REFERENCES `department` (`DepID`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `fk_exam` FOREIGN KEY (`AccYear`,`AccSemester`,`Department`) REFERENCES `exams` (`ExYear`, `Semester`, `Department`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_subject` FOREIGN KEY (`SubjectCode`) REFERENCES `subjects` (`SubCode`) ON DELETE CASCADE,
  ADD CONSTRAINT `studentid` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON DELETE CASCADE;

--
-- Constraints for table `stafflogin`
--
ALTER TABLE `stafflogin`
  ADD CONSTRAINT `fk_StaffLogin` FOREIGN KEY (`UserID`) REFERENCES `stafftable` (`StaffID`) ON DELETE CASCADE;

--
-- Constraints for table `stafftable`
--
ALTER TABLE `stafftable`
  ADD CONSTRAINT `fk_department` FOREIGN KEY (`Department`) REFERENCES `department` (`DepID`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_stuDepartment` FOREIGN KEY (`Department`) REFERENCES `department` (`DepID`) ON DELETE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `fk_subjectDep` FOREIGN KEY (`Department`) REFERENCES `department` (`DepID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
