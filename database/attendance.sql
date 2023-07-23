-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 03:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_taken`
--

CREATE TABLE `attendance_taken` (
  `id` int(11) NOT NULL,
  `reg_number` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `attendance` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `teacher_pen` varchar(20) NOT NULL,
  `hour` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attendance_taken`
--

INSERT INTO `attendance_taken` (`id`, `reg_number`, `name`, `date`, `attendance`, `department`, `semester`, `year`, `teacher_pen`, `hour`) VALUES
(268, 'GTAUSCS004', 'Rayan', '2023-07-23', '1', 'BSc Computer Science', '6', '2020', 'SU1234', '1'),
(269, 'GTAUSCS005', 'Franklin', '2023-07-23', '1', 'BSc Computer Science', '6', '2020', 'SU1234', '1'),
(270, 'GTAUSCS007', 'Jain', '2023-07-23', '1', 'BSc Computer Science', '6', '2020', 'SU1234', '1'),
(271, 'GTAUSCS008', 'Ronilda', '2023-07-23', '1', 'BSc Computer Science', '6', '2020', 'SU1234', '1'),
(272, 'GTAUSCS011', 'Haripriya S', '2023-07-23', '1', 'BSc Computer Science', '6', '2020', 'SU1234', '1'),
(273, 'GTAUSCS004', 'Rayan', '2023-07-23', '1', 'BSc Computer Science', '6', '2020', 'SU1234', '2'),
(274, 'GTAUSCS005', 'Franklin', '2023-07-23', '1', 'BSc Computer Science', '6', '2020', 'SU1234', '2'),
(275, 'GTAUSCS007', 'Jain', '2023-07-23', '0', 'BSc Computer Science', '6', '2020', 'SU1234', '2'),
(276, 'GTAUSCS008', 'Ronilda', '2023-07-23', '0', 'BSc Computer Science', '6', '2020', 'SU1234', '2'),
(277, 'GTAUSCS011', 'Haripriya S', '2023-07-23', '0', 'BSc Computer Science', '6', '2020', 'SU1234', '2');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `id` int(11) NOT NULL,
  `pen_number` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `pen_number`, `name`, `designation`, `username`, `password`) VALUES
(1, 'BMJ123', 'Biju M J', 'Principal', 'BMJ123', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_complaint`
--

CREATE TABLE `student_complaint` (
  `id` int(11) NOT NULL,
  `reg_number` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_complaint`
--

INSERT INTO `student_complaint` (`id`, `reg_number`, `name`, `department`, `semester`, `year`, `complaint`, `date`) VALUES
(13, 'GTAUSCS009', 'Vandana', 'BSc Computer Science', '6', '2020', 'I am present in all working days this month.', '2023-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(11) NOT NULL,
  `reg_number` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `reg_number`, `name`, `course`, `year`, `semester`, `password`, `email`, `phone`) VALUES
(12, 'GTAUSHS02045', 'Jestin45', 'BA English Language and Literature', '202045', '2', '123445', 'jestin@gma45il.com', '9589652316'),
(13, 'GTAUSHS021', 'Aswin', 'BA History', '2020', '6', '1234', 'aswin@gmail.com', '8745162356'),
(14, 'GTAUSHS022', 'Sreerag', 'BA History', '2020', '6', '1234', 'sreerag@gmail.com', '8787541265'),
(15, 'GTAUSHS023', 'Arun P M', 'BA History', '2020', '6', '1234', 'arunpm@gmail.com', '9995656214'),
(16, 'GTAUSHS024', 'Akash', 'BA History', '2020', '6', '1234', 'Akash7@gmail.com', '9995656214'),
(17, 'GTAUSCS004', 'Rayan', 'Bsc Computer Science', '2020', '6', '1234', 'rahul@gmail.com', '9852132479'),
(18, 'GTAUSCS005', 'Franklin', 'Bsc Computer Science', '2020', '6', '1234', 'franklin@gmail.com', '7912487602'),
(20, 'GTAUSCS007', 'Jain', 'Bsc Computer Science', '2020', '6', '1234', 'jain@gmail.com', '8864791245'),
(21, 'GTAUSCS008', 'Ronilda', 'Bsc Computer Science', '2020', '6', '1234', 'ronilda@gmail.com', '8187057798'),
(24, 'GTAUSCS011', 'Haripriya S', 'Bsc Computer Science', '2020', '6', '1234', 'haripriya@gmail.com', '8487959910'),
(25, 'GTAYSCS001', 'Irene', 'Bsc Computer Science', '2021', '4', '1234', 'irene@gmail.com', '7720103655'),
(26, 'GTAYSCS002', 'Sisria', 'Bsc Computer Science', '2021', '4', '1234', 'sisria@gmail.com', '9099504012'),
(27, 'GTAYSCS003', 'Misriya', 'Bsc Computer Science', '2021', '4', '1234', 'misriya@gmail.com', '8808752012'),
(28, 'GTAYSCS004', 'Sreekanth', 'Bsc Computer Science', '2021', '4', '1234', 'sreekanth@gmail.com', '9609805560'),
(29, 'GTAYSCS005', 'Nithin', 'Bsc Computer Science', '2021', '4', '1234', 'nithin@gmail.com', '9638521212'),
(30, 'GTAYSCS006', 'Nijil', 'Bsc Computer Science', '2021', '4', '1234', 'nijil@gmail.com', '9874560147'),
(31, 'GTAYSCS007', 'Vipin', 'Bsc Computer Science', '2021', '4', '1234', 'vipin@gmail.com', '9517534068'),
(32, 'GTAYSCS008', 'Alex', 'Bsc Computer Science', '2021', '4', '1234', 'alex@gmail.com', '8521597530'),
(33, 'GTAPSCS012', 'Soju', 'Bsc Computer Science', '2022', '2', '1234', 'soju@gmail.com', '9977221890'),
(34, 'GTAPSCS013', 'Vishnu', 'Bsc Computer Science', '2022', '2', '1234', 'vishnu@gmail.com', '8789773314'),
(35, 'GTAPSCS014', 'Aromal', 'Bsc Computer Science', '2022', '2', '1234', 'aromal@gmail.com', '9192975878'),
(36, 'GTAPSCS015', 'Jidhun', 'Bsc Computer Science', '2022', '2', '1234', 'jidhun@gmail.com', '8182839940'),
(37, 'GTAPSCS016', 'Lins', 'Bsc Computer Science', '2022', '2', '1234', 'lins@gmail.com', '7788991010'),
(38, 'GTAPSCS017', 'Sooraj', 'Bsc Computer Science', '2022', '2', '1234', 'sooraj@gmail.com', '7519534560'),
(39, 'GTAPSCS018', 'Santo', 'Bsc Computer Science', '2022', '2', '1234', 'santo@gmail.com', '9537519870'),
(40, 'GTAPSCS019', 'Nawel', 'Bsc Computer Science', '2022', '2', '1234', 'nawel@gmail.com', '8528428620'),
(41, 'GTAUSEG020', 'Krishna', 'BA English Language and Literature', '2021', '4', '1234', 'krishna@gmail.com', '8545652013'),
(42, 'GTAUSEG021', 'Nazeern', 'BA English Language and Literature', '2021', '4', '1234', 'nazeern@gmail.com', '7445651239'),
(43, 'GTAUSEG022', 'Devika', 'BA English Language and Literature', '2021', '4', '1234', 'devika@gmail.com', '9645652085'),
(44, 'GTAUSEG023', 'Lakshmi', 'BA English Language and Literature', '2021', '4', '1234', 'lakshmi@gmail.com', '8279137145'),
(45, 'GTAUSEG024', 'Malavika', 'BA English Language and Literature', '2021', '4', '1234', 'malavika@gmail.com', '9746318520'),
(46, 'GTALSEG030', 'Angel', 'BA English Language and Literature', '2022', '2', '1234', 'angel@gmail.com', '9371546220'),
(47, 'GTALSEG031', 'Jerin', 'BA English Language and Literature', '2022', '2', '1234', 'jerin@gmail.com', '8888423700'),
(48, 'GTALSEG032', 'Thomas', 'BA English Language and Literature', '2022', '2', '1234', 'thomas@gmail.com', '9999456820'),
(49, 'GTALSEG033', 'Sumod', 'BA English Language and Literature', '2022', '2', '1234', 'sumod@gmail.com', '7777002013'),
(50, 'GTALSEG034', 'Shibu', 'BA English Language and Literature', '2022', '2', '1234', 'shibu@gmail.com', '8585852220'),
(51, 'GTAUSEA037', 'Karunya', 'BA Economics', '2021', '4', '1234', 'karunya@gmail.com', '8975656410'),
(52, 'GTAUSEA038', 'Alan', 'BA Economics', '2021', '4', '1234', 'alan@gmail.com', '9565602210'),
(53, 'GTAUSEA039', 'Sanjay', 'BA Economics', '2021', '4', '1234', 'sanjay@gmail.com', '9048225503'),
(54, 'GTAUSEA040', 'Anamika', 'BA Economics', '2021', '4', '1234', 'anamika@gmail.com', '9048919145'),
(55, 'GTAUSEA041', 'Neeraja', 'BA Economics', '2021', '4', '1234', 'neeraja@gmail.com', '7046818145'),
(56, 'GTATSEA050', 'Anzil', 'BA Economics', '2022', '2', '1234', 'anzil@gmail.com', '8025454502'),
(57, 'GTATSEA051', 'Thaju', 'BA Economics', '2022', '2', '1234', 'thaju@gmail.com', '9071714520'),
(58, 'GTATSEA052', 'Josvin', 'BA Economics', '2022', '2', '1234', 'josvin@gmail.com', '7517514009'),
(59, 'GTATSEA053', 'Ashik', 'BA Economics', '2022', '2', '1234', 'ashik@gmail.com', '9539534402'),
(60, 'GTATSEA054', 'Thanseek', 'BA Economics', '2022', '2', '1234', 'thanseek@gmail.com', '8528521230'),
(61, 'GTAUSBB042', 'Vismaya', 'BBA', '2021', '4', '1234', 'vismaya@gmail.com', '9639639602'),
(62, 'GTAUSBB043', 'Abhipakku', 'BBA', '2021', '4', '1234', 'abhipakku@gmail.com', '8528528501'),
(63, 'GTAUSBB044', 'Sunith', 'BBA', '2021', '4', '1234', 'sunith@gmail.com', '7417415602'),
(64, 'GTAUSBB045', 'Krishnaveni', 'BBA', '2021', '4', '1234', 'krishnaveni@gmail.com', '7897894210'),
(65, 'GTAUSBB046', 'Zandra', 'BBA', '2021', '4', '1234', 'zandra@gmail.com', '9988752101'),
(66, 'GTANSBB020', 'Siddhant', 'BBA', '2022', '2', '1234', 'siddhant@gmail.com', '8978975213'),
(67, 'GTANSBB021', 'Jose', 'BBA', '2022', '2', '1234', 'jose@gmail.com', '9517755110'),
(68, 'GTANSBB022', 'Veddhant', 'BBA', '2022', '2', '1234', 'veddhant@gmail.com', '9955117750'),
(69, 'GTANSBB023', 'Lijosh', 'BBA', '2022', '2', '1234', 'lijosh@gmail.com', '7755339950'),
(70, 'GTANSBB024', 'Greeshma', 'BBA', '2022', '2', '1234', 'greeshma@gmail.com', '8844226600'),
(71, 'GTAUSST001', 'Eldhose', 'Bsc Statistics', '2021', '4', '1234', 'eldhose@gmail.com', '8888885520'),
(72, 'GTAUSST002', 'Shinoj', 'Bsc Statistics', '2021', '4', '1234', 'shinoj@gmail.com', '9999996630'),
(73, 'GTAUSST003', 'Rehana', 'Bsc Statistics', '2021', '4', '1234', 'rehana@gmail.com', '7777774410'),
(74, 'GTAUSST004', 'Revathy', 'Bsc Statistics', '2021', '4', '1234', 'revathy@gmail.com', '7744558800'),
(75, 'GTAUSST005', 'Ajeesh', 'Bsc Statistics', '2021', '4', '1234', 'ajeesh@gmail.com', '9966554213'),
(76, 'GTAKSST006', 'Fajith', 'Bsc Statistics', '2022', '2', '1234', 'fajith@gmail.com', '8855663570'),
(77, 'GTAKSST007', 'Hafeez', 'Bsc Statistics', '2022', '2', '1234', 'hafeez@gmail.com', '8468465820'),
(78, 'GTAKSST008', 'Sahara', 'Bsc Statistics', '2022', '2', '1234', 'sahara@gmail.com', '7957958520'),
(79, 'GTAKSST009', 'Prajeesh', 'Bsc Statistics', '2022', '2', '1234', 'prajeesh@gmail.com', '8138130298'),
(80, 'GTAKSST010', 'Rohit', 'Bsc Statistics', '2022', '2', '1234', 'rohit@gmail.com', '7297298850'),
(81, 'GTAUSPS030', 'Dilshad', 'Bsc Psychology', '2021', '4', '1234', 'dilshad@gmail.com', '7532362360'),
(82, 'GTAUSPS031', 'Jenin', 'Bsc Psychology', '2021', '4', '1234', 'jenin@gmail.com', '7412121023'),
(83, 'GTAUSPS032', 'Vijay', 'Bsc Psychology', '2021', '4', '1234', 'vijay@gmail.com', '9539633301'),
(84, 'GTAUSPS033', 'Adithyan', 'Bsc Psychology', '2021', '4', '1234', 'adithyan@gmail.com', '7517514100'),
(85, 'GTAUSPS034', 'Naveen', 'Bsc Psychology', '2021', '4', '1234', 'naveen@gmail.com', '8222413300'),
(86, 'GTABSPS035', 'Vivek', 'Bsc Psychology', '2022', '2', '1234', 'vivek@gmail.com', '9955331470'),
(87, 'GTABSPS036', 'Maya', 'Bsc Psychology', '2022', '2', '1234', 'maya@gmail.com', '9000365410'),
(88, 'GTABSPS037', 'Aleena', 'Bsc Psychology', '2022', '2', '1234', 'aleena@gmail.com', '8855220000'),
(89, 'GTABSPS038', 'Sneha', 'Bsc Psychology', '2022', '2', '1234', 'sneha@gmail.com', '9966330010'),
(90, 'GTABSPS039', 'Mridula', 'Bsc Psychology', '2022', '2', '1234', 'mridula@gmail.com', '7744110000'),
(91, 'GTAUSMS007', 'Meera', 'Bsc Mathematics', '2021', '4', '1234', 'meera@gmail.com', '9955116600'),
(92, 'GTAUSMS008', 'Remya', 'Bsc Mathematics', '2021', '4', '1234', 'remya@gmail.com', '7755334400'),
(93, 'GTAUSMS009', 'Amritha', 'Bsc Mathematics', '2021', '4', '1234', 'amritha@gmail.com', '8844662200'),
(94, 'GTAUSMS010', 'Arya', 'Bsc Mathematics', '2021', '4', '1234', 'arya@gmail.com', '8811337749'),
(95, 'GTAUSMS011', 'Vyshnavi', 'Bsc Mathematics', '2021', '4', '1234', 'vyshnavi@gmail.com', '7711339946'),
(96, 'GTAVSMS012', 'Dithin', 'Bsc Mathematics', '2022', '2', '1234', 'dithin@gmail.com', '9933117750'),
(97, 'GTAVSMS013', 'Shaul', 'Bsc Mathematics', '2022', '2', '1234', 'shaul@gmail.com', '6262258932'),
(98, 'GTAVSMS014', 'Akhil', 'Bsc Mathematics', '2022', '2', '1234', 'akhil@gmail.com', '6261546580'),
(99, 'GTAVSMS015', 'Sanju', 'Bsc Mathematics', '2022', '2', '1234', 'sanju@gmail.com', '6865929301'),
(100, 'GTAVSMS016', 'Abhishek', 'Bsc Mathematics', '2022', '2', '1234', 'abhishek@gmail.com', '6268693010'),
(101, 'GTAUSBF026', 'Abhiram', 'Bcom Finance', '2021', '4', '1234', 'abhiram@gmail.com', '6261638890'),
(102, 'GTAUSBF027', 'Bijoy', 'Bcom Finance', '2021', '4', '1234', 'bijoy@gmail.com', '6268646500'),
(103, 'GTAUSBF028', 'Abhinav', 'Bcom Finance', '2021', '4', '1234', 'abhinav@gmail.com', '6200005890'),
(104, 'GTAUSBF029', 'Parvathy', 'Bcom Finance', '2021', '4', '1234', 'parvathy@gmail.com', '6264616709'),
(105, 'GTAUSBF030', 'Fathima', 'Bcom Finance', '2021', '4', '1234', 'fathima@gmail.com', '9696963201'),
(106, 'GTAGSBF031', 'Eby', 'Bcom Finance', '2022', '2', '1234', 'eby@gmail.com', '8585824501'),
(107, 'GTAGSBF032', 'Adolf', 'Bcom Finance', '2022', '2', '1234', 'adolf@gmail.com', '7474715410'),
(108, 'GTAGSBF033', 'Heaven', 'Bcom Finance', '2022', '2', '1234', 'heaven@gmail.com', '9023632990'),
(109, 'GTAGSBF034', 'Farhan', 'Bcom Finance', '2022', '2', '1234', 'farhan@gmail.com', '9027302431'),
(110, 'GTAGSBF035', 'Albin', 'Bcom Finance', '2022', '2', '1234', 'albin@gmail.com', '9048363299'),
(111, 'GTAUSMM050', 'Harikesh', 'Mcom Marketing', '2021', '4', '1234', 'harikesh@gmail.com', '9084131385'),
(112, 'GTAUSMM051', 'Bilna', 'Mcom Marketing', '2021', '4', '1234', 'bilna@gmail.com', '9378955596'),
(113, 'GTAUSMM052', 'Mariya', 'Mcom Marketing', '2021', '4', '1234', 'mariya@gmail.com', '9644338882'),
(114, 'GTAUSMM053', 'Gifty', 'Mcom Marketing', '2021', '4', '1234', 'gifty@gmail.com', '9528317820'),
(115, 'GTAUSMM054', 'Shalet', 'Mcom Marketing', '2021', '4', '1234', 'shalet@gmail.com', '9441285649'),
(116, 'GTANSMM055', 'Priya', 'Mcom Marketing', '2022', '2', '1234', 'priya@gmail.com', '9169168020'),
(117, 'GTANSMM056', 'Suma', 'Mcom Marketing', '2022', '2', '1234', 'suma@gmail.com', '7372787490'),
(118, 'GTANSMM057', 'Lima', 'Mcom Marketing', '2022', '2', '1234', 'lima@gmail.com', '7878795200'),
(119, 'GTANSMM058', 'Oby', 'Mcom Marketing', '2022', '2', '1234', 'oby@gmail.com', '9789785000'),
(120, 'GTANSMM059', 'Alby', 'Mcom Marketing', '2022', '2', '1234', 'alby@gmail.com', '9749746000'),
(121, 'GTAUSME060', 'Polvin', 'MA Economics', '2021', '4', '1234', 'polvin@gmail.com', '9649648000'),
(122, 'GTAUSME061', 'Paul', 'MA Economics', '2021', '4', '1234', 'paul@gmail.com', '8079415249'),
(123, 'GTAUSME062', 'Dileep', 'MA Economics', '2021', '4', '1234', 'dileep@gmail.com', '9512747403'),
(124, 'GTAUSME063', 'Vinu', 'MA Economics', '2021', '4', '1234', 'vinu@gmail.com', '7153964600'),
(125, 'GTAUSME064', 'Unni', 'MA Economics', '2021', '4', '1234', 'unni@gmail.com', '9191787820'),
(126, 'GTALSME065', 'Athul', 'MA Economics', '2022', '2', '1234', 'athul@gmail.com', '7979864820'),
(127, 'GTALSME066', 'Joseph', 'MA Economics', '2022', '2', '1234', 'joseph@gmail.com', '9608607601'),
(128, 'GTALSME067', 'Binoy', 'MA Economics', '2022', '2', '1234', 'binoy@gmail.com', '7408509301'),
(129, 'GTALSME068', 'Babitha', 'MA Economics', '2022', '2', '1234', 'babitha@gmail.com', '7519534900'),
(130, 'GTALSME069', 'Roy', 'MA Economics', '2022', '2', '1234', 'roy@gmail.com', '9578463012'),
(131, 'GTAUSMH010', 'Franko', 'MA History', '2021', '4', '1234', 'franko@gmail.com', '8282949473'),
(132, 'GTAUSMH011', 'Ujwal', 'MA History', '2021', '4', '1234', 'ujwal@gmail.com', '6464898291'),
(133, 'GTAUSMH012', 'Ashish', 'MA History', '2021', '4', '1234', 'ashish@gmail.com', '8520852099'),
(134, 'GTAUSMH013', 'Akshay', 'MA History', '2021', '4', '1234', 'akshay@gmail.com', '9630963011'),
(135, 'GTAUSMH014', 'Anadhu', 'MA History', '2021', '4', '1234', 'anadhu@gmail.com', '7410741054'),
(136, 'GTAWSMH015', 'Ajith', 'MA History', '2022', '2', '1234', 'ajith@gmail.com', '7537539520'),
(137, 'GTAWSMH016', 'Vibeesh', 'MA History', '2022', '2', '1234', 'vibeesh@gmail.com', '9519521850'),
(138, 'GTAWSMH017', 'Nisa', 'MA History', '2022', '2', '1234', 'nisa@gmail.com', '8080951453'),
(139, 'GTAWSMH018', 'Deepa', 'MA History', '2022', '2', '1234', 'deepa@gmail.com', '7070456912'),
(140, 'GTAWSMH019', 'Aishwarya', 'MA History', '2022', '2', '1234', 'aishwarya@gmail.com', '9091879450'),
(141, 'GTAUSEL043', 'Mercy', 'MA English Language and Literature', '2021', '4', '1234', 'mercy@gmail.com', '9494887021'),
(142, 'GTAUSEL044', 'Selin', 'MA English Language and Literature', '2021', '4', '1234', 'selin@gmail.com', '8383794610'),
(143, 'GTAUSEL045', 'Isha', 'MA English Language and Literature', '2021', '4', '1234', 'isha@gmail.com', '7499502314'),
(144, 'GTAUSEL046', 'Susmitha', 'MA English Language and Literature', '2021', '4', '1234', 'susmitha@gmail.com', '8465792130'),
(145, 'GTAUSEL047', 'Deepika', 'MA English Language and Literature', '2021', '4', '1234', 'deepika@gmail.com', '6600858591'),
(146, 'GTAOSEL048', 'Navya', 'MA English Language and Literature', '2022', '2', '1234', 'navya@gmail.com', '9539548612'),
(147, 'GTAOSEL049', 'Navaneeth', 'MA English Language and Literature', '2022', '2', '1234', 'navaneeth@gmail.com', '8578596123'),
(148, 'GTAOSEL050', 'Rithin', 'MA English Language and Literature', '2022', '2', '1234', 'rithin@gmail.com', '7232798802'),
(149, 'GTAOSEL051', 'Richu', 'MA English Language and Literature', '2022', '2', '1234', 'richu@gmail.com', '9277294460'),
(150, 'GTAOSEL052', 'Hila', 'MA English Language and Literature', '2022', '2', '1234', 'hila@gmail.com', '8899001236'),
(151, 'GTAUSMP060', 'Kasinath', 'Msc Psychology', '2021', '4', '1234', 'kasinath@gmail.com', '9874587901'),
(152, 'GTAUSMP061', 'Dito', 'Msc Psychology', '2021', '4', '1234', 'dito@gmail.com', '9685856900'),
(153, 'GTAUSMP062', 'Nivin', 'Msc Psychology', '2021', '4', '1234', 'nivin@gmail.com', '7485479960'),
(154, 'GTAUSMP063', 'Neeraj', 'Msc Psychology', '2021', '4', '1234', 'neeraj@gmail.com', '8569742230'),
(155, 'GTAUSMP064', 'Jefin', 'Msc Psychology', '2021', '4', '1234', 'jefin@gmail.com', '7412541201'),
(156, 'GTAHSMP065', 'Leo', 'Msc Psychology', '2022', '2', '1234', 'leo@gmail.com', '8523652090'),
(157, 'GTAHSMP066', 'Jesmon', 'Msc Psychology', '2022', '2', '1234', 'jesmon@gmail.com', '9632541025'),
(158, 'GTAHSMP067', 'Nivedhitha', 'Msc Psychology', '2022', '2', '1234', 'nivedhitha@gmail.com', '6669990213'),
(159, 'GTAHSMP068', 'Helen', 'Msc Psychology', '2022', '2', '1234', 'helen@gmail.com', '8689874520'),
(160, 'GTAHSMP069', 'Kavya', 'Msc Psychology', '2022', '2', '1234', 'kavya@gmail.com', '9797959502'),
(161, 'GTAUSHS015', 'Arathi', 'BA History', '2019', '6', '1234', 'arathi@gmail.com', '9653215487');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_reg`
--

CREATE TABLE `teacher_reg` (
  `id` int(11) NOT NULL,
  `pen_number` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_reg`
--

INSERT INTO `teacher_reg` (`id`, `pen_number`, `name`, `department`, `password`, `email`, `phone`) VALUES
(3, 'SU1234', 'Suku', 'BSc Mathematics', '1234', 'suku@gmail.com', '7895612348'),
(4, 'AJ1234', 'Anjali', 'BSc Mathematics', '1234', 'anjali@gmail.com', '7823456719'),
(5, 'AS1234', 'Ashok', 'BSc Mathematics', '1234', 'ashok@gmail.com', '9845679090'),
(6, 'AR1234', 'Arya', 'BSc Mathematics', '1234', 'arya@gmail.com', '9078889076'),
(7, 'ARJ1234', 'Arjun', 'MA History', '1234', 'arjun@gmail.com', '9988709087'),
(8, 'AA1234', 'Anamika', 'MA History', '1234', 'anamika@gmail.com', '7765667890'),
(9, 'NI1234', 'Nidik', 'MA History', '1234', 'nidik@gmail.com', '8876556789'),
(10, 'NE1234', 'Nevedh', 'MA History', '1234', 'nevedh@gmail.com', '8890767890'),
(11, 'NIR1234', 'Niranjana', 'BA English Language and Literature', '1234', 'niranjana@gmail.com', '9999889090'),
(12, 'NJ1234', 'Niranjan', 'BA English Language and Literature', '1234', 'niranjan@gmail.com', '9099808990'),
(13, 'AI1234', 'Aiswarya', 'BA English Language and Literature', '1234', 'aiswarya@gmail.com', '9099786788'),
(14, 'PO1234', 'Poornima', 'BA English Language and Literature', '1234', 'poornima@gmail.com', '9067667880'),
(15, 'PR1234', 'Preethi', 'BA English Language and Literature', '1234', 'preethi@gmail.com', '8778889000'),
(16, 'RA1234', 'Rahul', 'BA Economics', '1234', 'rahul@gmail.com', '6766789090'),
(17, 'SA1234', 'Sanjay', 'BA Economics', '1234', 'sanjay@gmail.com', '8889900990'),
(18, 'SO1234', 'Soju', 'BA Economics', '1234', 'soju@gmail.com', '7079009090'),
(19, 'SU123', 'Suraj', 'BA Economics', '1234', 'suraj@gmail.com', '8880900976'),
(20, 'SR1234', 'Sherin', 'BA Economics', '1234', 'sherin@gmail.com', '6900908900'),
(21, 'NER1234', 'Neeraja', 'MA Economics', '1234', 'neeraja@gmail.com', '8880877678'),
(22, 'SUE1234', 'Susmi', 'MA Economics', '1234', 'susmi@gmail.com', '9095543567'),
(23, 'SI1234', 'Siraj', 'MA Economics', '1234', 'siraj@gmail.com', '8009765678'),
(24, 'SUR1234', 'Sura', 'MA Economics', '1234', 'sura@gmail.com', '9867453245'),
(25, 'SK1234', 'Sukanya', 'MA Economics', '1234', 'sukanya@gmail.com', '9098765480'),
(26, 'VI1234', 'Vibin', 'BA History', '1234', 'vibin@gmail.com', '9099876789'),
(27, 'VIG1234', 'Vignesh', 'BA History', '1234', 'vignesh@gmail.com', '9332456788'),
(28, 'VID1234', 'Vidya', 'BA History', '1234', 'vidya@gmail.com', '9229934566'),
(29, 'VD1234', 'Vidyasagar', 'BA History', '1234', 'sagar@gmail.com', '9022345676'),
(30, 'VJ1234', 'Viji', 'BA History', '1234', 'viji@gmail.com', '9112322345'),
(31, 'BA1234', 'Bavya', 'BSc Statistics', '1234', 'bavya@gmail.com', '8801123444'),
(32, 'BB1234', 'Badra', 'BSc Statistics', '1234', 'badra@gmail.com', '8112334567'),
(33, 'BD1234', 'Binsiya', 'BSc Statistics', '1234', 'binsiya@gmail.com', '9233355678'),
(34, 'BI1234', 'Barathi', 'BSc Statistics', '1234', 'barathi@gmail.com', '6665789909'),
(35, 'AB1234', 'Abhi', 'BSc Statistics', '1234', 'abhi@gmail.com', '9678866545'),
(36, 'AT1234', 'Athira', 'BBA', '1234', 'athira@gmail.com', '7277345515'),
(37, 'KR1234', 'Krishna', 'BBA', '1234', 'krishna@gmail.com', '8776887890'),
(38, 'NA1234', 'Nandana', 'BBA', '1234', 'nandana@gmail.com', '8887654356'),
(39, 'SRU1234', 'Sruthy', 'BBA', '1234', 'sruthy@gmail.com', '9900098768'),
(40, 'ST1234', 'Sunith', 'BBA', '1234', 'sunith@gmail.com', '9982223445'),
(41, 'MR1234', 'Mercy', 'BSc Psychology', '1234', 'mercy@gmail.com', '7789990987'),
(42, 'SRE123', 'Sreelakshmi', 'BSc Psychology', '1234', 'sreelakshmi@gmail.com', '9000087666'),
(43, 'AG1234', 'Angel', 'BSc Psychology', '1234', 'angel@gmail.com', '8890099876'),
(44, 'SV1234', 'Siva', 'BSc Psychology', '1234', 'siva@gmail.com', '9955447788'),
(45, 'GY1234', 'Gayathri', 'BSc Psychology', '1234', 'gayathri@gmail.com', '7088990099'),
(46, 'AV1234', 'Avanthika', 'BSc Computer Science', '1234', 'avanthika@gmail.com', '7798335544'),
(47, 'SIS1234', 'Sisira', 'BSc Computer Science', '1234', 'sisira@gmail.com', '8091233232'),
(48, 'AP1234', 'Anupriya', 'BSc Computer Science', '1234', 'anu@gmail.com', '9965433112'),
(49, 'RI1234', 'Riya', 'BSc Computer Science', '1234', 'riya@gmail.com', '8099112255'),
(50, 'AL1234', 'Aleena', 'BSc Computer Science', '1234', 'alee@gmail.com', '9011334455'),
(51, 'AK1234', 'Akash', 'BCom Finance', '1234', 'ak@gmail.com', '9878870055'),
(52, 'NO1234', 'Noel', 'BCom Finance', '1234', 'noel@gmail.com', '9955667788'),
(53, 'JI1234', 'Jithu', 'BCom Finance', '1234', 'jithu@gmail.com', '9066554477'),
(54, 'AJT1234', 'Ajith', 'BCom Finance', '1234', 'ajith@gmail.com', '9066778899'),
(55, 'NAV1234', 'Navya', 'BCom Finance', '1234', 'navya@gmail.com', '9907788990'),
(57, 'SAN1234', 'Sandra', 'MCom Marketing', '1234', 'sandra@gmail.com', '9098876677'),
(58, 'PRV1234', 'Praveena', 'MCom Marketing', '1234', 'pravi@gmail.com', '8009966555'),
(59, 'LK1234', 'Lakshmi', 'MCom Marketing', '1234', 'lak@gmail.com', '9077889900'),
(60, 'MY1234', 'Mayura', 'MCom Marketing', '1234', 'mayura@gmail.com', '9008876543'),
(61, 'APR1234', 'Aparna', 'MA English Language and Literature', '1234', 'apz@gmail.com', '7099908989'),
(62, 'MH1234', 'Mohan', 'MA English Language and Literature', '1234', 'mohan@gmail.com', '9055677689'),
(63, 'DS1234', 'Das', 'MA English Language and Literature', '1234', 'das@gmail.com', '9056778899'),
(64, 'ME1234', 'Meenu', 'MA English Language and Literature', '1234', 'meenu@gmail.com', '8000909767'),
(65, 'MA1234', 'Manu', 'MA English Language and Literature', '1234', 'manu@gmail.com', '8076789009'),
(66, 'JE1234', 'Jeena', 'MSc Psychology', '1234', 'jeena@gmail.com', '9055667788'),
(67, 'JEN1234', 'Jenny', 'MSc Psychology', '1234', 'jenny@gmail.com', '8055112334'),
(68, 'RAT1234', 'Ratheesh', 'MSc Psychology', '1234', 'rat@gmail.com', '7768899098'),
(69, 'SH1234', 'Saji', 'MSc Psychology', '1234', 'saji@gmail.com', '9080976543'),
(70, 'JS1234', 'Justin', 'MSc Psychology', '1234', 'justin@gmail.com', '9012009988');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_taken`
--
ALTER TABLE `attendance_taken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_complaint`
--
ALTER TABLE `student_complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
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
-- AUTO_INCREMENT for table `attendance_taken`
--
ALTER TABLE `attendance_taken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_complaint`
--
ALTER TABLE `student_complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
