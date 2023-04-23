-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 12:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sspiparbhani', 'Sspi@123');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sdate` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `branch`, `semester`, `subject`, `sdate`, `attachment`) VALUES
(1, 'COMP', 'First', 'Fundamental Of Ict', '2021-05-24', ''),
(3, 'COMP', 'Third', 'Data Structure Using C', '2021-05-27', ''),
(4, 'COMP', 'Fourth', 'Data Communication Using Computer Network', '2021-05-27', ''),
(5, 'COMP', 'Fifth', 'Operating System', '2021-05-27', ''),
(10, 'COMP', 'Sixth', 'Programming In Python', '2021-05-27', ''),
(11, 'COMP', 'Second', 'Programming In C', '2021-05-29', ''),
(12, 'COMP', 'Fourth', 'Software Engineering', '2021-05-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `eresource`
--

CREATE TABLE `eresource` (
  `id` int(255) NOT NULL,
  `subject_name` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `type` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `semester` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `link` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `branch` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `eresource`
--

INSERT INTO `eresource` (`id`, `subject_name`, `type`, `semester`, `link`, `branch`) VALUES
(1, 'Client Side Scripting', 'Book', 'Fifth', 'https://drive.google.com/file/d/168euo7iTLUlyhF6fIUqyCWkyxWB45NIa/view?usp=sharing', 'COMP'),
(2, 'Advance Java', 'Book', 'Fourth', 'https://drive.google.com/file/d/19AYpvrOzQ8vWl6CUgyCMqJSAV0O0Ntxi/view?usp=sharing', 'COMP'),
(3, 'Mobile Application Development', 'Book', 'Sixth', 'https://drive.google.com/file/d/1sFVfPwcN8MjjlvHVQ_nwnrPYsX_RFjkX/view?usp=sharing', 'COMP'),
(4, 'Data Structure Using C', 'Notes', 'Third', 'https://drive.google.com/file/d/1cc9qhQK7gLscF9tvTzLprP_dwJSeyGVf/view?usp=sharing', 'COMP'),
(5, 'Programming In C', 'Book', 'First', 'https://drive.google.com/file/d/1Vsc03E3kHI4Gs-N1ViPteprAajqxs17i/view?usp=sharing', 'COMP'),
(6, 'Web Designing', 'Book', 'Second', 'https://drive.google.com/file/d/1y3BvAGi61hAoUqyz6I72-ymDoOsNzNB_/view?usp=sharing', 'COMP'),
(7, 'English', 'Book', 'First', 'https://drive.google.com/file/d/1YPp5xDzWrMz-tGnREPKRqRhAaq7o33GT/view?usp=sharing', 'COMP'),
(8, 'Applied Mechanics', 'Book', 'Second', 'https://drive.google.com/file/d/1r3VXSzx7K99cK9MoWHgJN3eUljcau_tm/view?usp=sharing', 'MECH'),
(9, 'Basic Electrical and Thermal Engineering', 'MCQs', 'Third', 'https://drive.google.com/file/d/12Hvr4tkLEZFZ42pZ7A_g7fENPVm9V6TB/view?usp=sharing', 'MECH'),
(10, 'Mechanical Engineering Materials', 'MCQs', 'Third', 'https://drive.google.com/file/d/10trvxYhse7Q0nRmhF15FNVETGSbEI1U0/view?usp=sharing', 'MECH'),
(11, 'Industrial Hydraulics And Pneumatics', 'Book', 'Sixth', 'https://drive.google.com/file/d/1KtnQQ82aCYgiF4uT5vfcDvZm3FI117sH/view?usp=sharing', 'MECH'),
(12, 'Basic Surveying Chapter 1', 'Book', 'Second', 'https://drive.google.com/file/d/1-bxwNC-tXHzLB3NWQqQDoK3095p4vrYi/view?usp=sharing', 'CIVIL'),
(13, 'Construction Materials', 'Book', 'Second', 'https://drive.google.com/file/d/1RPJUaeiqpMfw6qGPbMxa2FJNqRNn-ytd/view?usp=sharing', 'CIVIL'),
(14, 'Computer Aided Drafting', 'MCQs', 'Fourth', 'https://drive.google.com/file/d/1WJZLa5DzGfcw6IlZEYdJ3RKgF8GaivnC/view?usp=sharing', 'CIVIL'),
(15, 'Mechanical Engineering Measurements', 'MCQs', 'Fourth', 'https://drive.google.com/file/d/1O0dAZVvNYPzP9srEObbPhFccpdp5L-A9/view?usp=sharing', 'CIVIL'),
(16, 'Industrial Hydraulics And Pneumatics Chapter 1', 'Notes', 'Sixth', 'https://drive.google.com/file/d/1_Twlk3nw_Cy1XV9vfjHCz7EPsz9_ljAi/view?usp=sharing', 'CIVIL'),
(17, 'Industrial Hydraulics And Pneumatics Chapter 2', 'Notes', 'Sixth', 'https://drive.google.com/file/d/1g-55FWkuM7IbNOhxVkJuFYLNomYquGAX/view?usp=sharing', 'CIVIL');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `rpersonname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `eventplace` varchar(255) NOT NULL,
  `coordinator` varchar(255) NOT NULL,
  `hod` varchar(255) NOT NULL,
  `principal` varchar(255) NOT NULL,
  `retrieve` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `department`, `eventname`, `rpersonname`, `designation`, `date`, `time`, `eventplace`, `coordinator`, `hod`, `principal`, `retrieve`) VALUES
(1, 'Department of Computer Engineering, MSPM\'S Shri Shivaji Polytechnic Institute, Parbhani-431401 India.', 'Organizing a Webinar on topic Java Programming', 'Prof.Panchalwar D.A.', 'Professor SSPI', '2021-05-14', '09:26', 'Microsoft Teams', 'Prof.Thaware K.B & Prof.Shekle M.G.', 'Prof.Shinde Sir', 'Prof.Shahid Thekiya SSPI, Parbhani', 'retrieve'),
(2, 'Department of Mechanical Engineering, MSPM\'S Shri Shivaji Polytechnic Institute, Parbhani-431401 India.', 'Organizing a Webinar on topic Engineering Drawing', 'Prof.Chavan Sir', 'Professor SSPI', '2021-05-15', '10:26', 'Microsoft Teams', 'Prof.Jadhav Sir & Prof.Kadam Sir', 'Prof.Kalikar Sir', 'Prof.Shahid Thekiya SSPI, Parbhani', 'retrieve');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `first_year` varchar(255) NOT NULL,
  `second_year` varchar(255) NOT NULL,
  `third_year` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `department`, `first_year`, `second_year`, `third_year`, `education`, `profile`, `mail`) VALUES
(15, 'Prof.Shelke.M.G.', 'Department of Computer Engineering', '', '', '', '', '', ''),
(16, 'Prof.Thaware K.B.', 'Department of Computer Engineering', '', '', '', '', '', ''),
(17, 'Prof.Panchalwar D.A.', 'Department of Computer Engineering', '', '', '', '', '', ''),
(19, 'Prof.Rathod P.S.', 'Department of Computer Engineering', '', '', '', '', '', ''),
(22, 'Mr. Bendsure A.R.', 'Department of Civil Engineering', '', '', '', '', '', ''),
(23, 'Prof. Tarwate D.U.', 'Department of Electronic & Telecommunication Engineering', '', '', '', '', '', ''),
(24, 'Prof. Chavan R.', 'Department of Mechanical Engineering', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE `mst_question` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(255) DEFAULT NULL,
  `branch` varchar(255) NOT NULL,
  `ans1` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `ans3` varchar(255) DEFAULT NULL,
  `ans4` varchar(255) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `branch`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(42, 69, 'PHP stands for ... ', 'COMP', 'personal home page', 'hypertext preprocesser', 'both a and b', 'none of the above', 1),
(44, 69, 'PHP files have a default file extension of_______', 'COMP', '.html', '.xml', '.php', '.ph', 3),
(57, 79, 'A process is a _______.', 'E&TC', 'single thread of execution.', 'program in the execution', 'program in the memory', 'task', 2),
(58, 79, 'What is smallest unit of the information?', 'E&TC', 'A bit', 'A byte', 'A block', 'A nibble', 1),
(59, 79, 'How many color dots make up one color pixel on a screen?\r\n', 'E&TC', '265', '16', '8', '3', 4),
(60, 79, 'Which of the following is an output device?', 'E&TC', 'keyboard', 'mouse', 'light pen', 'VDU', 4),
(63, 79, 'Which of the following is the extension of Notepad?', 'E&TC', '.txt', '.xml', '.docs', '.html', 1),
(64, 108, 'One nibble is equivalent to how many bits?', 'CIVIL', '2', '4', '8', '1', 2),
(65, 108, '1 yottabyte = ______________', 'CIVIL', '1024 TB', '1024 EB', '1024 ZB', '1024 PB', 3),
(66, 108, 'VDU stands for __________', 'CIVIL', 'Virtual Display Unit', 'Visual Display Unit', 'Virtual Detection Unit', 'Visual Detection Unit', 2),
(67, 108, 'What does SVGA stand for?', 'CIVIL', 'Standard Visual Graphics Array', 'Super Visual Graphics Array', 'Standard Video Graphics Array', 'Super Video Graphics Array', 4),
(68, 108, 'Super Video Graphics Array', 'CIVIL', 'Laser Printers', 'Inkjet Printers', 'Drum Printers', 'Chain Printers', 3),
(69, 145, 'Which of the following is not a data type?', 'MECH', 'Symbolic Data', 'Alphanumeric Data', 'Numeric Data', 'Alphabetic Data', 1),
(70, 145, '*@Ac# is a type of ________________ data.', 'MECH', 'Symbolic', 'Alphanumeric', 'Alphabetic', 'Numeric', 2),
(71, 145, 'Which of the following is not a basic data type in C language?', 'MECH', 'float', 'int', 'real', 'char', 3),
(72, 145, 'A standardized language used for commercial applications.', 'MECH', 'C', 'Java', 'COBOL', 'FORTRAN', 3),
(73, 145, '______________ define how the locations can be used.', 'MECH', 'Data types', 'Attributes', 'Links', 'Data Objects', 2),
(74, 69, 'Which of the following must be installed on your computer so as to run PHP script?', 'COMP', 'Adobe Dreamweaver ', 'XAMPP', 'Apache and PHP', 'IIS', 1),
(75, 69, 'Which version of PHP introduced Try/catch Exception ?', 'COMP', 'PHP 4', 'PHP 5', 'PHP 6', 'PHP 5 OR LATER', 4),
(76, 145, 'which protocol provides email facilty ?', 'MECH', 'smtp', 'ftp', 'tftp', 'none of the above', 1),
(77, 145, 'Which of the following is not a type of numeric value in zoned format?', 'MECH', 'postive', 'negative', 'double', 'unsigned', 3),
(78, 120, 'Highway Enginereing', 'CIVIL', '1', '2', '3', '4', 1),
(79, 130, 'Environmental studies is defined as the branch that deals with the:', 'CIVIL', 'Design, study, and discovery of new materials.', 'The study of humanities, social, biological, and physical sciences.', 'Incorporate the information and physical sciences.', 'Approach about the natural world and the impact of humans on its integrity.', 4),
(80, 58, 'How can we describe an array in the best possible way?', 'COMP', 'The Array shows a hierarchical structure.', 'Arrays are immutable.', 'Container that stores the elements of similar types', 'The Array is not a data structure', 3),
(81, 87, 'Who is the father of  C Programming ? ', 'E&TC', 'Dennis Ritchie', 'Guido van Rossum', 'Steve Jobs', 'Larry Page', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE `mst_result` (
  `login` varchar(255) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`, `branch`) VALUES
('Sandesh Bhale', 108, '0000-00-00', 1, 'CIVIL'),
('Sandesh Bhale', 108, '0000-00-00', 1, 'CIVIL'),
('Sandesh Sanjay Bhale', 145, '0000-00-00', 3, 'MECH'),
('Sandesh Sanjay Bhale', 145, '0000-00-00', 2, 'MECH'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 1, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 2, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 0, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 2, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 0, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 0, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 0, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 2, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 1, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 3, 'COMP'),
('Sandesh Bhale', 145, '0000-00-00', 3, 'MECH'),
('Sandesh Bhale', 145, '0000-00-00', 0, 'MECH'),
('Sandesh Bhale', 145, '0000-00-00', 1, 'MECH'),
('Sandesh Bhale', 145, '0000-00-00', 5, 'MECH'),
('Sandesh Bhale', 145, '0000-00-00', 0, 'MECH'),
('Sandesh Bhale', 145, '0000-00-00', 3, 'MECH'),
('SHIVAM RAJENDRA INGLE PATIL', 108, '0000-00-00', 1, 'CIVIL'),
('Sandesh Bhale', 145, '0000-00-00', 0, 'MECH'),
('SHIVAM RAJENDRA INGLE PATIL', 108, '0000-00-00', 2, 'CIVIL'),
('Sandesh Bhale', 145, '0000-00-00', 0, 'MECH'),
('Sandesh Bhale', 145, '0000-00-00', 0, 'MECH'),
('Sandesh Bhale', 108, '0000-00-00', 2, 'CIVIL'),
('Sandesh Bhale', 145, '0000-00-00', 2, 'CIVIL'),
('Sandesh Bhale', 120, '0000-00-00', 1, 'CIVIL'),
('SHIVAM RAJENDRA INGLE PATIL', 120, '0000-00-00', 1, 'CIVIL'),
('SHIVAM RAJENDRA INGLE PATIL', 120, '0000-00-00', 1, 'CIVIL'),
('SHIVAM RAJENDRA INGLE PATIL', 130, '0000-00-00', 0, 'CIVIL'),
('SHIVAM RAJENDRA INGLE PATIL', 58, '0000-00-00', 1, 'COMP'),
('Sandesh Bhale', 145, '0000-00-00', 0, 'MECH'),
('Sandesh Bhale', 120, '0000-00-00', 1, 'CIVIL'),
('Sandesh Bhale', 120, '0000-00-00', 0, 'CIVIL'),
('Sandesh Bhale', 79, '0000-00-00', 1, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 3, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 2, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 2, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 0, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 1, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 4, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 2, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 0, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 0, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 1, 'E&TC'),
('Sandesh Bhale', 79, '0000-00-00', 0, 'E&TC'),
('Sandesh Bhale', 87, '0000-00-00', 1, 'E&TC'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 3, 'COMP'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 2, 'COMP'),
('Sandesh Bhale', 145, '0000-00-00', 2, 'MECH'),
('Sandesh Bhale', 145, '0000-00-00', 2, 'MECH'),
('Sandesh Bhale', 120, '0000-00-00', 0, 'CIVIL'),
('SHIVAM RAJENDRA INGLE PATIL', 69, '0000-00-00', 2, 'COMP');

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE `mst_subject` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(1, 'First  Semester'),
(2, 'Second Semester'),
(3, 'Third Semester'),
(4, 'Fourth Semester'),
(5, 'Fifth Semester'),
(6, 'Sixth Semester');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE `mst_test` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) NOT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `branch`, `total_que`) VALUES
(45, 1, 'Fundamental of ICT', 'COMP', '5'),
(46, 1, 'Engineering Graphics', 'COMP', '10'),
(47, 1, 'English', 'COMP', '10'),
(48, 1, 'Basic Science (Physics & Chemsitry)', 'COMP', '10'),
(49, 1, 'Basic Mathematics', 'COMP', '10'),
(50, 2, 'Elements of Electrical Engineering', 'COMP', '10'),
(51, 2, 'Applied mathematics', 'COMP', '10'),
(52, 2, 'Programming in C', 'COMP', '10'),
(53, 2, 'Basic Electronics', 'COMP', '10'),
(54, 3, 'Digital Techniques', 'COMP', '10'),
(56, 3, 'Computer graphics', 'COMP', '10'),
(57, 3, 'Database management system', 'COMP', '10'),
(58, 3, 'Data structure using C', 'COMP', '10'),
(61, 4, 'Data communication and computer network', 'COMP', '10'),
(62, 4, 'Microprocesser', 'COMP', '10'),
(63, 5, 'Advanced java programming', 'COMP', '10'),
(64, 5, 'Software testing', 'COMP', '10'),
(65, 5, 'Client Side Scripting', 'COMP', '10'),
(66, 6, 'Management', 'COMP', '10'),
(67, 6, 'Programming with python', 'COMP', '10'),
(68, 6, 'Mobile application development', 'COMP', '10'),
(69, 6, 'Web based application development using PHP', 'COMP', '10'),
(70, 5, 'Environmental studies', 'COMP', '10'),
(74, 3, 'Object oriented programming using C++', 'COMP', '10'),
(75, 4, 'Java programming', 'COMP', '10'),
(76, 4, 'Software Engineering', 'COMP', '10'),
(79, 1, 'Fundamental of ICT', 'E&TC', '5'),
(80, 1, 'Engineering Graphics', 'COMP', '10'),
(81, 1, 'Engineering Graphics', 'E&TC', '10'),
(82, 1, 'English', 'E&TC', '10'),
(83, 1, 'Basic Science (Physics & Chemsitry)', 'E&TC', '10'),
(84, 1, 'Basic Mathematics', 'E&TC', '10'),
(85, 2, 'Elements of Electrical Engineering', 'E&TC', '10'),
(86, 2, 'Applied mathematics', 'E&TC', '10'),
(87, 2, 'C programming Language', 'E&TC', '10'),
(88, 2, 'Business Communication using computers', 'E&TC', '10'),
(89, 3, 'Digital Techniques', 'E&TC', '10'),
(90, 3, 'Applied Electronics', 'E&TC', '10'),
(91, 3, 'Electric Circuits and networks', 'E&TC', '10'),
(92, 3, 'Electronic Measurements and instrumentation ', 'E&TC', '10'),
(93, 3, 'Principle of electronic communication', 'E&TC', '10'),
(94, 4, 'Linear integrated circuits', 'E&TC', '10'),
(95, 4, 'Consumer electronics', 'E&TC', '10'),
(96, 4, 'Microcontroller and applications', 'E&TC', '10'),
(97, 4, 'Basic power electronics', 'E&TC', '10'),
(98, 4, 'Digital communication system', 'E&TC', '10'),
(99, 5, 'Environmental studies', 'E&TC', '10'),
(100, 5, 'Control system and PLC', 'E&TC', '10'),
(101, 5, 'Embedded system', 'E&TC', '10'),
(102, 5, 'mobile and wireless communication', 'E&TC', '10'),
(103, 5, 'Industrial tarining', 'E&TC', '10'),
(104, 5, 'Capstone project planning', 'E&TC', '10'),
(105, 6, 'Management', 'E&TC', '10'),
(106, 6, 'Computer networking and data communication', 'E&TC', '10'),
(107, 6, 'Emerging trades in electronics', 'E&TC', '10'),
(108, 1, 'Fundamental of ICT', 'CIVIL', '5'),
(109, 1, 'Engineering Graphics', 'CIVIL', '10'),
(110, 1, 'English', 'CIVIL', '10'),
(111, 1, 'Basic Science (Physics & Chemsitry)', 'CIVIL', '10'),
(112, 1, 'Basic Mathematics', 'CIVIL', '10'),
(113, 2, 'Applied mechanics ', 'CIVIL', '10'),
(114, 2, 'Applied mathematics', 'CIVIL', '10'),
(115, 2, 'Applied science(Physics & Chemistry) ', 'CIVIL', '10'),
(116, 2, 'Basic surveying', 'CIVIL', '10'),
(117, 2, 'Civil Engineering Workshop and Practice', 'CIVIL', '10'),
(118, 2, 'Business Communication using computers', 'CIVIL', '10'),
(119, 3, 'Advanced Surveying', 'CIVIL', '10'),
(120, 3, 'Highway engineeering', 'CIVIL', '10'),
(121, 3, 'Mechanics of structure', 'CIVIL', '10'),
(122, 3, 'Building construction', 'CIVIL', '10'),
(123, 3, 'Concrete technology', 'CIVIL', '10'),
(124, 3, 'Computer Aided drawing ', 'CIVIL', '10'),
(125, 4, 'Hydraulics', 'CIVIL', '10'),
(126, 4, 'Theory of structures', 'CIVIL', '10'),
(127, 4, 'Railway and Bridge Engineering', 'CIVIL', '10'),
(128, 4, 'Geo-Technical Engineering', 'CIVIL', '10'),
(129, 4, 'Building planning and drawing', 'CIVIL', '10'),
(130, 4, 'Environmental studies', 'CIVIL', '10'),
(131, 5, 'Water resources Engineering', 'CIVIL', '10'),
(132, 5, 'Design of steel and RCC structure', 'CIVIL', '10'),
(133, 5, 'Estimating and coasting', 'CIVIL', '10'),
(134, 5, 'Public health Engineering', 'CIVIL', '10'),
(135, 5, 'Industrial tarining', 'CIVIL', '10'),
(136, 5, 'Capstone project planning', 'CIVIL', '10'),
(137, 5, 'Traffic Engineering', 'CIVIL', '10'),
(138, 6, 'Management', 'CIVIL', '10'),
(139, 6, 'Contracts and Accounts', 'CIVIL', '10'),
(140, 6, 'Maintenance and repair of structures', 'CIVIL', '10'),
(141, 6, 'Emerging trends in civil Engineering', 'CIVIL', '10'),
(142, 6, 'Solid waste management', 'CIVIL', '10'),
(143, 6, 'Construction Management', 'CIVIL', '10'),
(144, 6, 'Entrepreneurship devolopement', 'CIVIL', '10'),
(145, 1, 'Fundamental of ICT', 'MECH', '10'),
(146, 1, 'Engineering Graphics', 'MECH', '10'),
(147, 1, 'English', 'MECH', '10'),
(148, 1, 'Basic Science (Physics & Chemsitry)', 'MECH', '10'),
(149, 1, 'Basic Mathematics', 'MECH', '10'),
(150, 2, 'Applied science(Physics & Chemistry) ', 'MECH', '10'),
(151, 2, 'Applied mathematics', 'MECH', '10'),
(152, 2, 'Engineering drawing', 'MECH', '10'),
(153, 2, 'Business Communication using computers', 'MECH', '10'),
(154, 2, 'Mechanical Engineering workshop', 'MECH', '10'),
(155, 3, 'Strength of materials', 'MECH', '10'),
(156, 3, 'Basic electrical and electronics Engineering', 'MECH', '10'),
(157, 3, 'Thermal Engineering', 'MECH', '10'),
(158, 3, 'Mechanical workshop drawing', 'MECH', '10'),
(159, 3, 'Engineering Metrology', 'MECH', '10'),
(160, 3, 'Mechanical Engineering martials', 'MECH', '10'),
(161, 4, 'theory of machines', 'MECH', '10'),
(162, 4, 'Mechanical Engineering measurements', 'MECH', '10'),
(163, 4, 'Fluid mechanics and machinery', 'MECH', '10'),
(164, 4, 'Manufacturing processes', 'MECH', '10'),
(165, 4, 'Environmental studies', 'MECH', '10'),
(166, 4, 'Computer aided drafting', 'MECH', '10'),
(167, 4, 'Fundamental of mechatronics', 'MECH', '10'),
(168, 5, 'Management', 'MECH', '10'),
(169, 5, 'Power engineering and refrigeration', 'MECH', '10'),
(170, 5, 'Advanced manufacturing process', 'MECH', '10'),
(171, 5, 'Elements of machine Design', 'MECH', '10'),
(172, 6, 'Emerging trades in mechanical engineering', 'MECH', '10'),
(173, 6, 'Industrial hydraulics and pneumatics', 'MECH', '10'),
(174, 6, 'Automobile Engineering', 'MECH', '10'),
(175, 6, 'Industrial Engineering and quality control', 'MECH', '10');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(255) DEFAULT NULL,
  `ans1` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `ans3` varchar(255) DEFAULT NULL,
  `ans4` varchar(255) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('d381pdm237pu2bv7spbtda1p58', 145, 'Which of the following is not a data type?', 'Symbolic Data', 'Alphanumeric Data', 'Numeric Data', 'Alphabetic Data', 1, 4),
('d381pdm237pu2bv7spbtda1p58', 145, '*@Ac# is a type of ________________ data.', 'Symbolic', 'Alphanumeric', 'Alphabetic', 'Numeric', 2, 4),
('d381pdm237pu2bv7spbtda1p58', 145, 'Which of the following is not a basic data type in C language?', 'float', 'int', 'real', 'char', 3, 3),
('d381pdm237pu2bv7spbtda1p58', 145, 'A standardized language used for commercial applications.', 'C', 'Java', 'COBOL', 'FORTRAN', 3, 3),
('d381pdm237pu2bv7spbtda1p58', 145, '______________ define how the locations can be used.', 'Data types', 'Attributes', 'Links', 'Data Objects', 2, 1),
('7imlv16kco1kmdju9gpoegfbmf', 69, 'PHP stands for ... ', 'personal home page', 'hypertext preprocesser', 'both a and b', 'none of the above', 1, 1),
('7imlv16kco1kmdju9gpoegfbmf', 69, 'PHP files have a default file extension of_______', '.html', '.xml', '.php', '.ph', 3, 4),
('uqhj0h1udo291hb4l60avm6qtc', 69, 'PHP stands for ... ', 'personal home page', 'hypertext preprocesser', 'both a and b', 'none of the above', 1, 1),
('uqhj0h1udo291hb4l60avm6qtc', 69, 'PHP files have a default file extension of_______', '.html', '.xml', '.php', '.ph', 3, 3),
('uqhj0h1udo291hb4l60avm6qtc', 69, 'Which of the following must be installed on your computer so as to run PHP script?', 'Adobe Dreamweaver ', 'XAMPP', 'Apache and PHP', 'IIS', 1, 1),
('65rcnq6ntqfad1bg6c2jvp5coh', 145, 'Which of the following is not a data type?', 'Symbolic Data', 'Alphanumeric Data', 'Numeric Data', 'Alphabetic Data', 1, 4),
('65rcnq6ntqfad1bg6c2jvp5coh', 145, '*@Ac# is a type of ________________ data.', 'Symbolic', 'Alphanumeric', 'Alphabetic', 'Numeric', 2, 4),
('65rcnq6ntqfad1bg6c2jvp5coh', 145, 'Which of the following is not a basic data type in C language?', 'float', 'int', 'real', 'char', 3, 4),
('65rcnq6ntqfad1bg6c2jvp5coh', 145, 'A standardized language used for commercial applications.', 'C', 'Java', 'COBOL', 'FORTRAN', 3, 4),
('65rcnq6ntqfad1bg6c2jvp5coh', 145, '______________ define how the locations can be used.', 'Data types', 'Attributes', 'Links', 'Data Objects', 2, 4),
('65rcnq6ntqfad1bg6c2jvp5coh', 145, 'which protocol provides email facilty ?', 'smtp', 'ftp', 'tftp', 'none of the above', 1, 4),
('65rcnq6ntqfad1bg6c2jvp5coh', 145, 'Which of the following is not a type of numeric value in zoned format?', 'postive', 'negative', 'double', 'unsigned', 3, 4),
('toka8cu32gkeoft0otiia8qg19', 120, 'Highway Enginereing', '1', '2', '3', '4', 1, 1),
('qq1dq20h9qkg7dqngcb3ujsiub', 58, 'How can we describe an array in the best possible way?', 'The Array shows a hierarchical structure.', 'Arrays are immutable.', 'Container that stores the elements of similar types', 'The Array is not a data structure', 3, 3),
('eohprroo0fce2j6s4vp9l062s6', 120, 'Highway Enginereing', '1', '2', '3', '4', 1, 2),
('4cnocs3jca9ji2j9hlmclj3hv8', 69, 'PHP stands for ... ', 'personal home page', 'hypertext preprocesser', 'both a and b', 'none of the above', 1, 1),
('4cnocs3jca9ji2j9hlmclj3hv8', 69, 'PHP files have a default file extension of_______', '.html', '.xml', '.php', '.ph', 3, 1),
('4cnocs3jca9ji2j9hlmclj3hv8', 69, 'Which of the following must be installed on your computer so as to run PHP script?', 'Adobe Dreamweaver ', 'XAMPP', 'Apache and PHP', 'IIS', 1, 1),
('4cnocs3jca9ji2j9hlmclj3hv8', 69, 'Which version of PHP introduced Try/catch Exception ?', 'PHP 4', 'PHP 5', 'PHP 6', 'PHP 5 OR LATER', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `id` int(255) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `notice`, `date`, `file`) VALUES
(1, 'Academic Calender 2020-21', '2020-12-19', 'upload/AC2021.jpg'),
(4, 'Against Cap Vacancy shri shivaji polytechnic institute parbhani parbhani', '2021-05-19', 'upload/Against Cap Vacancy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `online_users`
--

CREATE TABLE `online_users` (
  `session` char(100) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_users`
--

INSERT INTO `online_users` (`session`, `time`) VALUES
('uiib342qa8jhva1384fsfku3ep', 1622630020);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `teacherstatus` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `enroll` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `cpassword`, `branch`, `token`, `status`, `teacherstatus`, `phone`, `gender`, `address`, `city`, `image`, `enroll`) VALUES
(10, 'SHIVAM AMITA RAJENDRA INGLE', 'ingleshivam@gmail.com', '$2y$10$QyREVhK0TTcszygmei5s/unpiJ1VoWgUHrsiOeF3ZmlgNEgf.Ud3i', '$2y$10$3bvSMRAzlZtP/cG4EK0ePeYFbBuulNEpE9S0zcXP8jysfuh67Vrfi', 'COMP', 'b491ff94edc6ec50ea41ed1d6c62c6', 'active', 'active', '9156051338', 'Male', 'Ashirvad Nagar, Deshmukh Hotel, Parbhani', 'Parbhani', 'upload/sspi-logo.png', '1815530024'),
(17, 'Sandesh Bhale', 'hindudharmayodha@gmail.com', '$2y$10$PYbi3nJQrkS47rNCxicH2.EQ5zS//S9ybNJrJxYL9cGomVH/.BDLS', '$2y$10$tHxP/bUz.DiR7Vp.qZ8I8.7SzB/nu/Rbo34.zx/nBuKPr5RkXdsom', 'CIVIL', '39b700c27ec2fe3eda6099b7705fef', 'active', 'active', '', 'Male', 'Behind Shri Shivaji Law College, Parbhani', 'Parbhani', 'upload/sspi-logo.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `submission_log`
--

CREATE TABLE `submission_log` (
  `id` int(255) NOT NULL,
  `log` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submit_assignment`
--

CREATE TABLE `submit_assignment` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `subject`, `date`, `state`) VALUES
(34, 0, '  What is the main difference between a computer program and computer software?', 'sid', 'STE', '2021-05-25 08:53:56', ''),
(35, 34, '  A computer program is a piece of programming code. It performs a well-defined task. On the other hand, the software includes programming code, documentation and user guide.', 'shivam', 'STE', '2021-05-25 08:55:03', ''),
(36, 0, '  What is verification and validation?', 'sandesh', 'STE', '2021-05-25 12:19:44', ''),
(38, 36, '  Verification is a term that refers to the set of activities which ensure that software implements a specific function.', 'sid', 'STE', '2021-05-25 12:20:58', ''),
(39, 38, 'It refers to the set of activities which ensure that software that has been built according to the need of clients.', 'shivam', 'STE', '2021-05-25 12:21:46', ''),
(40, 0, 'What is the purpose of normalization in DBMS?', 'Lakhan', 'DMS', '2021-05-26 06:56:11', ''),
(41, 40, ' Normalization is the process of analyzing the relational schemas which are based on their respective functional dependencies and the primary keys in order to fulfill certain properties.', 'siddhu', 'DMS', '2021-05-26 06:56:30', ''),
(42, 0, 'Do you think it is feasible to override a static method in Java?', 'siddhu', 'AJP', '2021-05-26 08:08:45', ''),
(43, 42, 'No, it is essentially impossible to override a static method in Java. Also, you cannot override a private method. At most, the programmer may create another private method with the same name as the ch', 'shivam', 'AJP', '2021-05-26 08:09:36', ''),
(44, 0, 'Tell us something about the prospects of session management in servlets.', 'Ruhsikesh', 'DMS', '2021-05-26 08:18:31', ''),
(45, 44, 'A session is essentially defined as the dynamic state of random conversation between the client and the server. The essential communication channel includes a string of responses and requests from bot', 'Sham', 'DMS', '2021-05-26 08:18:51', ''),
(46, 0, 'Write the important applications of computer graphic?', 'sandes', 'CGR', '2021-05-28 07:10:34', ''),
(47, 46, 'computer graphics is used in the field of computer aided design.', 'shivam', 'CGR', '2021-05-28 07:10:46', ''),
(48, 46, 'It is used to produce illustrations for reports or to generate slide for with projections.', 'Siddhu', 'CGR', '2021-05-28 07:11:01', ''),
(49, 46, 'Computer graphic methods are widely used in both fine are and commercial are applications.', 'lakhan', 'CGR', '2021-05-28 07:11:11', ''),
(50, 46, 'Computer-generated models of physical, financial and economic systems are often used as educational aids.', 'Manoj', 'CGR', '2021-05-28 07:11:27', ''),
(51, 46, 'The artist uses a combination of 3D modeling packages, texture mapping, drawing programs and CAD software.', 'Panchalwar Maam', 'CGR', '2021-05-28 07:18:17', ''),
(54, 0, 'Explain Python Functions?', 'Siddhu', 'PWP', '2021-05-28 14:55:43', ''),
(55, 54, 'A function is a section of the program or a block of code that is written once and can be executed whenever required in the program. A function is a block of self-contained statements which has a vali', 'Shivam', 'PWP', '2021-05-28 14:55:57', ''),
(56, 0, 'What is science ?', 'Shivam Rajendra Ingle', 'BSC', '2021-05-30 06:57:07', ''),
(61, 56, 'the study of and knowledge about the physical world and natural laws', 'Shivam', 'BSC', '2021-05-30 12:29:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment1`
--

CREATE TABLE `tbl_comment1` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment1`
--

INSERT INTO `tbl_comment1` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `subject`, `date`) VALUES
(45, 0, 'Mention what is the difference between generator and alternator?', 'siddhu', 'PER', '2021-05-26 06:31:01'),
(46, 45, 'Both generator and alternator work on the same principle they convert mechanical energy into electrical energy.', 'shivam', 'PER', '2021-05-26 06:31:19'),
(47, 0, 'Explain how you decide what size of electrical wire do you need?', 'shivam', 'PER', '2021-05-26 06:32:09'),
(48, 47, 'Wire is sized by American Wire Gauge system. Your installation of conductors will depend on a few factors like gauge of the wire, wire capacity, etc. For wires, smaller the wire gauge larger the ampac', 'sandesh', 'PER', '2021-05-26 06:32:22'),
(49, 0, 'Do you think it is feasible to override a static method in Java?', 'manoj', 'MAN', '2021-05-26 08:02:17'),
(50, 49, 'No, it is essentially impossible to override a static method in Java. Also, you cannot override a private method. At most, the programmer may create another private method with the same name as the ch', 'shivam', 'MAN', '2021-05-26 08:02:32'),
(51, 0, 'How many types of CAD are there?', 'Lakhan', 'TOM', '2021-05-28 15:13:58'),
(54, 51, 'The five types are 2D CAD (flat drawings of product), 2.5D CAD (Prismatic models), 3D CAD (3D objects), 3D wireframe and surface modelling (skeleton like inner structure) and solid modelling (solid geometry). Explanation: ICG is interactive computer graphics.', 'sandesh', 'TOM', '2021-05-28 15:20:39'),
(55, 0, 'What is CAD short answer?', 'sandesh', 'CAD', '2021-05-28 15:39:05'),
(56, 55, 'Computer-aided design (CAD) is the use of computers (or workstations) to aid in the creation, modification, analysis, or optimization of a design. ... The term CADD (for computer aided design and drafting) is also used. Its use in designing electronic systems is known as electronic design automation (EDA).', 'siddhu', 'CAD', '2021-05-28 15:39:16'),
(57, 55, 'CAD software for mechanical design uses either vector-based graphics to depict the objects of traditional drafting, or may also produce raster graphics showing the overall appearance of designed objects. However, it involves more than just shapes. As in the manual drafting of technical and engineering drawings, the output of CAD must convey information, such as materials, processes, dimensions, and tolerances, according to application-specific conventions.', 'Lakhan', 'CAD', '2021-05-28 15:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment2`
--

CREATE TABLE `tbl_comment2` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment2`
--

INSERT INTO `tbl_comment2` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `subject`, `date`) VALUES
(40, 0, 'What are the common methods of waste disposal?', 'sandesh', 'SWM', '2021-05-26 08:32:06'),
(41, 40, 'The commonly practiced technologies for SWM can be grouped under three major categories, i.e., bio-processing, thermal processing and sanitary landfill. The bio-processing method includes aerobic and ', 'shivam', 'SWM', '2021-05-26 08:32:24'),
(42, 0, 'If ΣH and ΣV are the algebraic sums of the forces resolved horizontally and vertically respectively, and ΣM is the algebraic sum of the moments of forces about any point, for the equilibrium of the bo', 'Siddhu', 'TOS', '2021-05-26 08:43:53'),
(43, 42, 'ΣH = 0\r\nΣV = 0\r\nΣM = 0', 'Shivam', 'TOS', '2021-05-26 08:44:10'),
(45, 0, 'What rules are called traffic rules?', 'Niraj', 'Select Subject....', '2021-05-28 15:10:56'),
(46, 45, 'Traffic rules are the rule given by traffic police for the protection or to keep safe driving which can prevent accidents.', 'Tuhsar', 'Select Subject....', '2021-05-28 15:11:08'),
(47, 0, 'What are the objectives of traffic engineering?', 'Atharva', 'TEN', '2021-05-28 15:27:07'),
(48, 47, 'The objective of traffic engineering is to provide for the safe, rapid, comfortable efficient, convenient, and environmentally compatible movement of people, goods, and services. The revolution is the automobile industry and liberalized economy has led to tremendous increase in the vehicle ownership levels.', 'shivam', 'TEN', '2021-05-28 15:27:21'),
(49, 0, 'What is FAQ in ICT?', 'lakhan', 'ICT', '2021-05-28 15:53:14'),
(50, 49, 'Stands for \"Frequently Asked Questions.\" An FAQ, pronounced \"F-A-Q,\" is a list of answers to common questions about a specific product or service. In the IT world, FAQs are created for software programs, computer hardware, websites, and online services.', 'shivam', 'ICT', '2021-05-28 15:53:24'),
(51, 0, 'What are the benefits of ICT?', 'shivam', 'ICT', '2021-05-28 15:53:42'),
(52, 51, 'ICT enables economic growth by broadening the reach of technologies such as high-speed Internet, mobile broadband, and computing; expanding these technolo- gies itself creates growth, and the fact that technologies make it easier for people to interact and make workers more productive creates additional benefits.', 'manoj', 'ICT', '2021-05-28 15:53:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment3`
--

CREATE TABLE `tbl_comment3` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment3`
--

INSERT INTO `tbl_comment3` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `subject`, `date`) VALUES
(41, 0, 'Explain what is embedded system in a computer system?', 'Sandesh', 'ESY', '2021-05-27 08:05:58'),
(42, 41, 'An embedded system is a computer system that is part of a larger system or machine.  It is a system with a dedicated function within a larger electrical or mechanical system.', 'Siddhu', 'ESY', '2021-05-27 08:06:26'),
(43, 0, 'Mention what is the difference between microprocessor and microcontroller?', 'Rushikesh', 'ESY', '2021-05-27 08:06:51'),
(44, 43, 'Microprocessor is managers of the resources (I/O, memory) which lie outside of its architecture', 'Lakhan', 'ESY', '2021-05-27 08:07:11'),
(45, 43, 'Microcontroller have I/O, memory, etc. built into it and specifically designed for control.', 'Shivam', 'ESY', '2021-05-27 08:07:29'),
(47, 0, 'How to compare industries to look for highly potential alternative?\r\nQuestion', 'sid', 'CEL', '2021-05-27 08:11:01'),
(48, 47, 'I am working on my final thesis where i am trying to identify the potential industries (ex. Manufacturing, Aviation, consumer electronics etc.) for a solution that i have in the automotive maintenance', 'shama', 'CEL', '2021-05-27 08:11:11'),
(51, 0, 'What are the common errors in embedded systems?', 'tushar', 'ESY', '2021-05-28 15:31:20'),
(52, 0, 'What are the basics of embedded systems?', 'siddhu', 'ESY', '2021-05-28 15:31:58'),
(53, 52, 'Embedded system hardware: As with any electronic system, an embedded system requires a hardware platform on which to run. The hardware will be based around a microprocessor or microcontroller.', 'shivam', 'ESY', '2021-05-28 15:32:08'),
(54, 0, 'What is a digital question?', 'Rushi', 'DTE', '2021-05-28 16:02:04'),
(55, 54, 'A digital interview is used to answer general questions and to learn the background of a candidate before asking more job-relevant questions in later interviews. ... During the interview, an applicant is presented with a series of questions and is given one to two minutes to read each question.', 'shivam', 'DTE', '2021-05-28 16:02:29'),
(56, 0, 'What is the main objective of environmental studies?', 'samkit', 'EST', '2021-05-28 16:05:06'),
(57, 56, 'The aim of E.V.S.(environmental studies) is to develop a world population that is aware of and concerned about the environment and its associated problems and which has the knowledge ,Skills, attitudes ,motivations and commitment to work individually and collectively towards solutions of current problems and prevention', 'siddhu', 'EST', '2021-05-28 16:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `password`, `cpassword`, `branch`, `token`, `status`, `image`, `phone`, `address`, `city`, `gender`) VALUES
(46, 'SHIVAM RAJENDRA INGLE', 'ingleshivam@gmail.com', '$2y$10$Z7xM.qfZsskW//JgokzPu.u0OhodnIvh9fqftjQ8aKgyiEX.EyVty', '$2y$10$wRHkcuQth8rGELmns/2SeO4.fRZx/zURN768wgXQXv9r7fFh041iG', 'COMP', '8b7e171fa567c71cffd53abfe9bb33', 'active', 'upload/sspi-logo.png', '9156051338', 'Ashirvad Nagar, Parbhani', 'Parbhani', 'Male'),
(48, 'SANDESH SANJAY BHALE', 'hindudharmayodha@gmail.com', '$2y$10$RZO86d0KSrULZfKBoN5FN..p.DH91wZ9ZU28DAGK8lD7XiKeDbt2O', '$2y$10$xj3CyINhmMC0vzh3cpj4V.AzR8o3eniI4UrchDCohdZas8amnJxHG', 'CIVIL', 'a502e69f3c5f0dcf66ff5f40107246', 'active', '../assets/images/sspi-logo.png', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eresource`
--
ALTER TABLE `eresource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
  ADD PRIMARY KEY (`test_id`,`branch`) USING BTREE;

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission_log`
--
ALTER TABLE `submission_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_assignment`
--
ALTER TABLE `submit_assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_comment1`
--
ALTER TABLE `tbl_comment1`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_comment2`
--
ALTER TABLE `tbl_comment2`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_comment3`
--
ALTER TABLE `tbl_comment3`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
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
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `eresource`
--
ALTER TABLE `eresource`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `submission_log`
--
ALTER TABLE `submission_log`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `submit_assignment`
--
ALTER TABLE `submit_assignment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_comment1`
--
ALTER TABLE `tbl_comment1`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_comment2`
--
ALTER TABLE `tbl_comment2`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_comment3`
--
ALTER TABLE `tbl_comment3`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
