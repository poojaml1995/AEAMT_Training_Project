-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2025 at 07:57 AM
-- Server version: 5.6.51
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aeamttraining`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_guest_house`
--

CREATE TABLE `admin_guest_house` (
  `guest_id` int(11) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_guest_house`
--

INSERT INTO `admin_guest_house` (`guest_id`, `User_Name`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apprenticeship_form`
--

CREATE TABLE `apprenticeship_form` (
  `ID` int(11) NOT NULL,
  `Qualification_Type` varchar(50) NOT NULL,
  `Enrolment_No_Of_Student` varchar(50) NOT NULL,
  `Stream` varchar(100) NOT NULL,
  `image_loc` varchar(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Guardians` varchar(50) NOT NULL,
  `Guardians_Name` varchar(250) NOT NULL,
  `Aadhaar_Number` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Mobile_Number` varchar(11) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `College_Name` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Course_Period` varchar(50) NOT NULL,
  `Passed_Out` varchar(50) NOT NULL,
  `Marks` varchar(50) NOT NULL,
  `Sem1_Marks_Obtained` varchar(50) NOT NULL,
  `Sem2_Marks_Obtained` varchar(50) NOT NULL,
  `Sem3_Marks_Obtained` varchar(50) NOT NULL,
  `Sem4_Marks_Obtained` varchar(50) NOT NULL,
  `Sem5_Marks_Obtained` varchar(50) NOT NULL,
  `Sem6_Marks_Obtained` varchar(50) NOT NULL,
  `Sem7_Marks_Obtained` varchar(50) NOT NULL,
  `Sem8_Marks_Obtained` varchar(50) NOT NULL,
  `Marks_Obtained_Total` varchar(50) NOT NULL,
  `Sem1_Total_Marks` varchar(50) NOT NULL,
  `Sem2_Total_Marks` varchar(50) NOT NULL,
  `Sem3_Total_Marks` varchar(50) NOT NULL,
  `Sem4_Total_Marks` varchar(50) NOT NULL,
  `Sem5_Total_Marks` varchar(50) NOT NULL,
  `Sem6_Total_Marks` varchar(50) NOT NULL,
  `Sem7_Total_Marks` varchar(50) NOT NULL,
  `Sem8_Total_Marks` varchar(50) NOT NULL,
  `Total_Marks_Total` varchar(50) NOT NULL,
  `CGPA_Formula` varchar(100) NOT NULL,
  `Bank_Name` varchar(250) NOT NULL,
  `Account_Number` varchar(100) NOT NULL,
  `IFSC_Code` varchar(100) NOT NULL,
  `10th_Marks_Card` varchar(100) NOT NULL,
  `12th_Marks_Card` varchar(100) NOT NULL,
  `Degree_Marks_Card` varchar(100) NOT NULL,
  `PDC` varchar(100) NOT NULL,
  `Resume` varchar(100) NOT NULL,
  `Bank_Passbook` varchar(100) NOT NULL,
  `Caste_Certificate` varchar(100) NOT NULL,
  `Aadhaar_Card` varchar(100) NOT NULL,
  `Pan_Card` varchar(100) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apprenticeship_form`
--

INSERT INTO `apprenticeship_form` (`ID`, `Qualification_Type`, `Enrolment_No_Of_Student`, `Stream`, `image_loc`, `Name`, `Guardians`, `Guardians_Name`, `Aadhaar_Number`, `Address`, `Email`, `DOB`, `Mobile_Number`, `Gender`, `Category`, `College_Name`, `Qualification`, `Course_Period`, `Passed_Out`, `Marks`, `Sem1_Marks_Obtained`, `Sem2_Marks_Obtained`, `Sem3_Marks_Obtained`, `Sem4_Marks_Obtained`, `Sem5_Marks_Obtained`, `Sem6_Marks_Obtained`, `Sem7_Marks_Obtained`, `Sem8_Marks_Obtained`, `Marks_Obtained_Total`, `Sem1_Total_Marks`, `Sem2_Total_Marks`, `Sem3_Total_Marks`, `Sem4_Total_Marks`, `Sem5_Total_Marks`, `Sem6_Total_Marks`, `Sem7_Total_Marks`, `Sem8_Total_Marks`, `Total_Marks_Total`, `CGPA_Formula`, `Bank_Name`, `Account_Number`, `IFSC_Code`, `10th_Marks_Card`, `12th_Marks_Card`, `Degree_Marks_Card`, `PDC`, `Resume`, `Bank_Passbook`, `Caste_Certificate`, `Aadhaar_Card`, `Pan_Card`, `Date_Time`) VALUES
(1, 'Engineering_Graduate', '123456', 'CS', './apprenticeship_profileimages/0732.jpg', 'Prerana', 'Mother', 'Naina', '789456123741', 'Bnagalore', 'prerana@gmail.com', '2002-02-25', '9638527417', 'Female', 'GEN', 'Manipal University', 'BCA', '3 Years', '2025', '8.5', '8.9', '8.9', '8.9', '8.9', '8.9', '8.9', '', '', '8.9', '500', '500', '500', '500', '500', '500', '', '', '3000', 'Test', 'SBI', 'SBI2025', '741852', '', '', '', '', '', '', '', '', '', '2025-01-31 11:17:21'),
(2, 'Diploma', '123457', 'CS', '', 'Prerana', 'Father', 'Naina', '789456123741', 'a', 'sample@gmail.comm', '2025-02-25', '9638527417', 'Female', 'ST', 'a', 'aa', 'a', 'a', 'a', '8.9', '8.9', '8.9', '8.9', '8.9', '8.9', '', '', '8.9', '500', '500', '500', '500', '500', '500', '', '', '4000', 'Test', 'SBI', 'SBI2025', '741852', './apprenticeship_forms/Prerana_10th.pdf', './apprenticeship_forms/Prerana_12th.pdf', './apprenticeship_forms/Prerana_Degree.pdf', './apprenticeship_forms/Prerana_PDC.pdf', './apprenticeship_forms/Prerana_Resume.pdf', './apprenticeship_forms/Prerana_Bank_Passbook.pdf', './apprenticeship_forms/Prerana_Caste_Certificate.pdf', './apprenticeship_forms/Prerana_Aadhaar_Card.pdf', './apprenticeship_forms/Prerana_Pan_Card.pdf', '2025-02-07 07:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Mobile_No` varchar(15) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Mobile_No`, `Email`, `Message`, `Date_Time`) VALUES
(1, 'Prerana', '8963257414', 'prerana@gmail.com', 'Testing', '2025-02-04 03:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `ID` int(11) NOT NULL,
  `Course_Code` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `No_of_Days` varchar(100) NOT NULL,
  `Commencing_from_Date` date NOT NULL,
  `Commencing_to_Date` date NOT NULL,
  `Course_Fee` varchar(50) NOT NULL,
  `Faculty` varchar(50) NOT NULL,
  `Course_Image_loc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`ID`, `Course_Code`, `Title`, `No_of_Days`, `Commencing_from_Date`, `Commencing_to_Date`, `Course_Fee`, `Faculty`, `Course_Image_loc`) VALUES
(1, '1301', ' Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (', '2', '2025-04-08', '2025-04-09', '7,800', 'Mr. Srinivas Rao C / Dr. Kavithaa S', '../Course_Image/_payment_QR_code_image_EID20241021002 (2).png'),
(2, '4101', 'Laboratory Management and Internal Audit as per ISO/IEC 17025:2017', '4', '2025-04-22', '2025-04-25', '15,600', 'Mrs. Khushboo / Mr. Niranjan Reddy K', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(3, '7101', 'Geometric Dimensioning and Tolerancing (GD&T)', '5', '2025-05-05', '2025-05-09', '19,500', 'Mr. Anil Kumar K / Mr. Jeevan Kumar P / Mr KiranKu', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(4, '1302', 'Chemical Testing & Characterization of Metallic Materials', '3', '2025-05-06', '2025-05-08', '11,700', 'Mr. Srinivas Rao C / Dr. Kavithaa S', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(5, '4102', 'Precision Dimensional Metrology', '5', '2025-05-12', '2025-05-16', '19,500', 'Mr. Sashikumar / Mrs. Khushboo', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(6, '2301', 'Nano Materials Characterization SEM, XRD, SPM, Nano Indenter, etc', '4', '2025-05-13', '2025-05-16', '15,600', 'Mr. Murugan A / Mr. Basavaraju Uppara', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(7, '1303', 'Non-Destructive Testing', '2', '2025-05-29', '2025-05-30', '7,800', 'Mr. Srinivasa Rao C / Dr. Kavithaa S', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(8, '2101', 'Single Point Diamond Turning (Machine Technology & Characterization Techniques)', '2', '2025-05-29', '2025-05-30', '7,800', 'Mr. Gopi Krishna S/ Mr.NarendraReddyT/  Mr.Prakash', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(9, '4203', 'Thin Film Deposition Techniques& Characterization Methodologies', '3', '2025-06-09', '2025-06-11', '11,700', 'Dr. K Manjunath /  Dr. Prabhanjan Kulkarni', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(10, '1304', 'Corrosion and its Prevention through Surface Finishing', '2', '2025-06-10', '2025-06-11', '7,800', 'Dr. Kavithaa S /  Mr. Srinivasa Rao C', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(11, '2201', 'Industry 4.0 & Smart Manufacturing Systems', '3', '2025-06-11', '2025-06-13', '11,700', 'Mr. Narendra Reddy T/ Mr. Harikrishna S T/ Mr. Pra', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(12, '5201', 'Additive Manufacturing', '3', '2025-06-16', '2025-06-18', '11,700', 'Mr. Manjunath B N/ Mr. Harikrishna S T', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(13, '4103', 'Calibration of Dimensional Measuring Equipments', '5', '2025-07-07', '2025-07-11', '19,500', 'Mrs. Khushboo/ Mr. Shashi Kumar', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(14, '2302', 'Machinery Condition Monitoring for Predictive & Proactive Maintenance', '5', '2025-07-07', '2025-07-12', '19,500', 'Mr. Girish Kumar M/ Mr. Mukunda M/ Mr. Prakash Vin', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(15, '2304', 'Microscopy & Analysis: SEM, AFM, STM, Confocal Microscope, Optical Proﬁler, etc', '3', '2025-07-09', '2025-07-11', '11,700', 'Mr. Murugan A/ Mr. Basavaraju Uppara', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(16, '7102', 'Mechatronics & Manufacturing Automation', '5', '2025-07-14', '2025-07-18', '19,5000', 'Mr. Anil Kumar K/ Mr. Shanmugaraj V', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(17, '1305', 'Materials and Metallurgy for Non- Metallurgists', '3', '2025-07-16', '2025-07-18', '11,700', 'Mr. Srinivasa Rao C/ Dr. Kavithaa S', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(18, '4204', 'Advanced Signal Processing in Micro-manufacturing & Automation', '2', '2025-07-21', '2025-07-22', '7,800', 'Dr. Debeshi Dutta/ Dr. K Manjunath', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(19, '6101', 'Part Programming of CNC Machines', '5', '2025-08-18', '2025-08-22', '19,500', 'Mr. Bharath P/Mr. Vignesh Kemminje', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(20, '4104', 'Uncertainty of Measurements for Dimensional Measurements', '3', '2025-08-20', '2025-08-22', '11,700', 'Mr .Shashi Kumar/ Mrs. Khushboo', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(21, '1306', 'Advanced Material Testing', '2', '2025-09-02', '2025-09-03', '7,800', 'Mr. SrinivasaRao C/ Dr. Kavithaa S', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(22, '2202', 'Advanced Robotics', '2', '2025-09-08', '2025-09-09', '7,800', 'Mr. Narendra Reddy T/ Mr.Prakash Vinod', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(23, '3101', 'Designand Analysis of Experiments for Micro System Design and Processes', '3', '2025-09-08', '2025-09-10', '11,700', 'Dr. Ajay Jaswal/ Dr. Prabhanjan Kulkarni', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(24, '5201', 'Additive Manufacturing', '3', '2025-09-10', '2025-09-12', '11,700', 'Mr. Vinod A R/ Mr. Manjunath B N/ Mr. Harikrishna ', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(25, '3102', 'Training on Welding Technologies for Vacuum Based Systems', '2', '2025-09-11', '2025-09-12', '7,800', 'Mr. PradyumnaJ/ Dr. Ajay Jaswal', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(26, '2305', 'Scanning Electron Microscopy', '1', '2025-09-12', '2025-09-12', '3,900', 'Mr. Murugan A / Mr. Basavaraju Uppara', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(27, '4201', 'Micro & Nano Manufacturing', '2', '2025-09-18', '2025-09-19', '7,800', 'Mr. Karthik M S / Mr. Sunil Magadu M', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(28, '2303', 'Noise & Vibration Analysis Methods', '4', '2025-09-22', '2025-09-25', '15,600', 'Girish Kumar M / Mukunda M / Prakash Vinod', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(29, '2301', 'Nano Material Characterization, SEM, XRD, SPM, Nanoindenter, etc', '4', '2025-10-07', '2025-10-10', '15,600', 'Mr .Murugan A/ Mr. Basavaraju Uppara', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(30, '3103', 'Semiconductor Designand fabrication processes', '2', '2025-11-10', '2025-11-11', '7,800', 'Mrs. Kusuma N/ Mrs. Megha Agrawal', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(31, '3104', 'Semiconductor packaging and characterization processes', '3', '2025-11-12', '2025-11-14', '11,700', 'Mr. Harsha S / Mrs. Megha Agrawal', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(32, '2304', 'Microscopy & Analysis: SEM, AFM, STM, Confocal Microscope, Optical Proﬁler, etc', '3', '2025-11-12', '2025-11-14', '11,700', 'Mr. Murugan A/ Mr. Basavaraju Uppara', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(33, '1307', 'Materials, Metallurgy & Heat Treatment of Metals and Alloys', '3', '2025-11-18', '2025-11-20', '11,700', 'Mr. Srinivasa Rao C/ Dr. Kavithaa S', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(34, '1101', 'Gear Engineering', '2', '2025-11-19', '2025-11-20', '7,800', 'Mr. Ananthapadmanabha / Mr. Srinivasa Rao C', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(35, '4105', 'Introduction to CMM', '3', '2025-11-19', '2025-11-21', '11,700', 'Mr. Siddaraju K G/ Mrs. Khushboo', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(36, '4101', 'Laboratory Management & Internal Audit as per ISO / IEC 17025:2017', '4', '2025-11-24', '2025-11-27', '15,600', 'Mrs. Khushboo/ Mr. Niranjan Reddy K', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(37, '7101', 'Geometric Dimensioning & Tolerancing', '5', '2025-12-01', '2025-12-05', '19,500', 'Mr. Anil Kumar K/ Mr. Jeevan Kumar P/ Mr. Kiran ku', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(38, '5201', 'AdditiveManufacturing', '3', '2025-12-10', '2025-12-12', '11,700', 'Mr. Vinod A R/ Mr. Manjunath B N/ Mr. Harikrishna ', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(39, '2203', 'AI & ML for Manufacturing Industries', '2', '2025-12-08', '2025-12-09', '3,900', 'Mr. Narendra Reddy T / Mr. Prakash Vinod', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(40, '1102', 'Design for Manufacturing & Assembly', '2', '2025-12-11', '2025-12-12', '7,800', 'Mr. Ananthapadmanabha / Mr. Anil Kumar K', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(41, '4205', 'Advanced Surface Finishing and Characterization Techniques', '1', '2025-12-12', '2025-12-12', '3,900', 'Dr. Abhinav Kumar / Mr. Mayank Patel', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(42, '1308', 'Advanced Engineering Materials Testing &Characterization', '3', '2025-12-15', '2025-12-17', '11,700', 'Dr. Kavithaa S/ Mr. Srinivasa Rao C', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(43, '2201', 'Industry 4.0 & Smart Manufacturing Systems', '3', '2025-12-15', '2025-12-17', '11,700', 'Mr. Narendra Reddy T/ Mr. Harikrishna S T/ Mr. Pra', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(44, '4202', 'Advanced Laser Machining', '1', '2025-12-19', '2025-12-19', '3,900', 'Mr. Sunil Magadum/ Mr. Niranjan Reddy K', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(45, '2305', 'Scanning Electron Microscopy', '1', '2025-09-12', '2025-09-12', '3,900', 'Mr. Murugan A / Mr. Basavaraju Uppara', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(46, '4106', 'CMM & Machine Tool Calibration', '2', '2025-02-26', '2025-02-27', '7,800', 'Mr. Siddaraju K G/ Mr. Chethan H S', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png'),
(47, '7101', 'Geometric Dimensioning & Tolerancing', '5', '2026-03-02', '2026-03-06', '19,500', 'Mr. Anil Kumar K/ Mr. Jeevan Kumar P/ Mr. Kiran ku', '../Course_Image/_payment_QR_code_image_EID20241021002 (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `course_information`
--

CREATE TABLE `course_information` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Course_Code` varchar(50) NOT NULL,
  `Overview` text NOT NULL,
  `Focussed_Areas` text NOT NULL,
  `Key_Takeaways` text NOT NULL,
  `Targeted_Audience` text NOT NULL,
  `Faculty` text NOT NULL,
  `Faculty_Name` varchar(200) NOT NULL,
  `Faculty_Email` varchar(100) NOT NULL,
  `Faculty_Mobile_No` varchar(15) NOT NULL,
  `Course_Pdf_File` varchar(250) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_information`
--

INSERT INTO `course_information` (`ID`, `Title`, `Course_Code`, `Overview`, `Focussed_Areas`, `Key_Takeaways`, `Targeted_Audience`, `Faculty`, `Faculty_Name`, `Faculty_Email`, `Faculty_Mobile_No`, `Course_Pdf_File`, `Date_Time`) VALUES
(1, ' Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (', '1301', 'Calculating measurement uncertainty according to ISO 17025 is essential for demonstrating competence, improving accuracy and\r\nreliability, building client confidence, facilitating data comparison and interpretation and meeting regulatory requirements. It is a fundamental\r\naspect of quality management in testing and calibration laboratories. Understanding uncertainty in measurements ensures accuracy,\r\nimproves quality control and aids in compliance with international standards. It helps reduce costs, manage risks and drive continuous\r\nimprovement in testing methods and overall quality. This course aims to provide participants with comprehensive knowledge and practical\r\nskills in evaluating measurement uncertainty for the chemical composition and mechanical parameters of metals following the Guide for\r\nUncertainty Measurement (GUM) method. Participants will learn the theoretical background, mathematical concepts and practical\r\napplications of GUM in testing and calibration.', 'Understanding the basic concepts and principles of measurement uncertainty.Identifying and categorizing different types of uncertainties that can affect measurements.Learning essential terminologies such as degrees of freedom, standard deviation, coverage factor, confidence level and distribution factors\r\n(Normal, Triangular, Rectangular).Recognizing the parameters that influence measurement uncertainty.Analysing typical case studies for estimating uncertainty in chemical composition analysis of metals (spectroscopy) and mechanical\r\nparameters (hardness and tensile tests).', 'Understand the theoretical concepts of measurement uncertainty and the principles of the Guide to the Expression of Uncertainty in\r\nMeasurement (GUM).Evaluate and express measurement uncertainty for chemical composition and mechanical properties – tensile & hardness measurement.Practical guidance on applying GUM principles in testing and calibration.', 'Laboratory technicians and analysts, Quality control personnel, Engineers involved in materials testing, Managers and supervisors\r\nresponsible for laboratory operations, Anyone seeking to improve the accuracy and reliability of their metals testing processes.\r\n', '->Dr Kavithaa S: She has completed her Doctoral degree in Material Sciences. She has over 15 years of R&D experience in materials characterization, development and materials processing protocol establishment specifically for metal alloys, oxides, ceramics and polymers.                                                     \r\n->Mr. Champuri Srinivasa Rao: He has completed his M.Tech in Industrial Metallurgy. He has over 16 years of R&D experience in Quality Assurance & quality control activities in development of special purpose machines.', 'Dr. Kavithaa S / Mr. Srinivas Rao C', ' Dr. Kavithaa S: kavithaa@cmti.res.in & Mr. Srinivas Rao C: srinivasrao@cmti.res.in', 'Dr. Kavithaa S:', '', '2025-02-18 06:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_form`
--

CREATE TABLE `enrollment_form` (
  `ID` int(11) NOT NULL,
  `Enrollment_ID` varchar(200) NOT NULL,
  `Title` text NOT NULL,
  `Course_Code` varchar(50) NOT NULL,
  `Commencing_Date` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Contact_Number` varchar(15) NOT NULL,
  `Contact_Email` varchar(200) NOT NULL,
  `Organisation` varchar(200) NOT NULL,
  `Organisation_Name` text NOT NULL,
  `GST_Number` varchar(50) NOT NULL,
  `Organisation_Type` varchar(100) NOT NULL,
  `CAAP_Member` text NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Contact_Name` varchar(200) NOT NULL,
  `Contact_Designation` text NOT NULL,
  `Contact_Mobile_No` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Fax` varchar(100) NOT NULL,
  `Accommodation` text NOT NULL,
  `checkinDate` varchar(50) NOT NULL,
  `checkoutDate` varchar(50) NOT NULL,
  `Accommodation_Members` varchar(50) NOT NULL,
  `Remarks` varchar(250) NOT NULL,
  `Payment_Details` varchar(100) NOT NULL,
  `PO_file_loc` text NOT NULL,
  `Source` varchar(200) NOT NULL,
  `Guest_House_Status` varchar(50) NOT NULL,
  `Admin_Guest_House_Status` varchar(50) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment_form`
--

INSERT INTO `enrollment_form` (`ID`, `Enrollment_ID`, `Title`, `Course_Code`, `Commencing_Date`, `Name`, `Designation`, `Contact_Number`, `Contact_Email`, `Organisation`, `Organisation_Name`, `GST_Number`, `Organisation_Type`, `CAAP_Member`, `Address`, `Contact_Name`, `Contact_Designation`, `Contact_Mobile_No`, `Email`, `Fax`, `Accommodation`, `checkinDate`, `checkoutDate`, `Accommodation_Members`, `Remarks`, `Payment_Details`, `PO_file_loc`, `Source`, `Guest_House_Status`, `Admin_Guest_House_Status`, `Date_Time`) VALUES
(1, 'EID20241213001', 'Mechatronic & Manufacturing Automation', '0720', '27-12-2024 to 29-12-2024', 'Test', 'Project Assisstant', '7418529637', 'test@gmail.com', 'Government', 'CMTI', '29RES345FRTE456', 'CAAP', 'Yes', 'Test', 'Naina', 'Manager', '7631489524', 'preranap606@gmail.com', '123-456-7890', 'Yes', '2024-12-17T15:25', '2024-12-20T15:25', '', '', 'NEFT', '', 'Email', 'Available', 'Available', '2025-01-16 09:58:25'),
(2, 'EID20241213002', 'Mechatronic & Manufacturing Automation', '0720', '27-12-2024 to 29-12-2024', 'Prerana', 'Project Assisstant', '7456321897', 'prerana@gmail.com', 'Government', 'Wenz pvt.ltd', '29RES345FRTE456', 'Academic', 'Yes', 'Test', 'Hemanth', 'Manager', '9638527417', 'hemanth@gmail.com', '123-456-8965', 'No', '', '', '', '', 'NEFT', '', 'Phone call', '', '', '2024-12-13 09:58:00'),
(3, 'EID20241226001', 'Mechatronic & Manufacturing Automation', '0720', '27-12-2024 to 29-12-2024', 'Test', 'Project Assisstant', '7418529637', 'prerana@gmail.com', 'Non Government', 'Wenz pvt.ltd', '29NA23I4N5R6AA7', 'Academic', 'Yes', 'a', 'Naina', 'Manager', '7631489524', 'preranap606@gmail.com', '123-456-7890', 'Yes', '2024-12-27T10:14', '2024-12-28T10:14', '2 members', 'Test', 'NEFT', './PO_upload_files/05 (1) (1).docx', 'Email', 'Not Available', 'Not Available', '2025-01-16 09:58:31'),
(4, 'EID20250103001', 'Laboratory Management & Internal Audit as per ISO / IEC 17025:2017', '0410', '22-04-2025 to 26-04-2025', 'Test', 'Project Assisstant', '7418529637', 'test@gmail.com', 'Government', 'CMTI', '29NA23I4N5R6AA7', 'Academic', 'Yes', 'a', 'Hemanth', 'Manager', '9638527417', 'sample@gmail.com', '123-456-7890', 'No', '', '', '2 members', '', 'NEFT', '', 'Email', '', '', '2025-01-03 10:03:43'),
(5, 'EID20250106001', 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', 'Prerana', 'Project Assisstant', '7456321897', 'prerana@gmail.com', 'Government', 'CMTI', '29RES345FRTE456', 'CAAP', 'Yes', 'Bangalore', 'Aravinda', 'Manager', '7631489524', 'training@cmti.res.in', '123-456-7890', 'Yes', '2025-01-06T15:23', '2025-01-08T15:23', '2 members', 'Testing', 'NEFT', './PO_upload_files/0b903160-d828-49f3-b7de-7882408a6722.pdf', 'Email', 'Available', 'Available', '2025-01-06 09:56:26'),
(6, 'EID20250205001', 'Laboratory Management & Internal Audit as per ISO / IEC 17025:2017', '0410', '22-04-2025 to 26-04-2025', 'Prerana', 'Project Assisstant', '7418529637', 'test@gmail.com', 'Government', 'CMTI', '29RES345FRTE456', 'CAAP', 'Yes', 'Bangalore', 'Naina', 'Manager', '7631489524', 'prerana@gmail.com', '123-456-7890', 'Yes', '', '', '', '', 'NEFT', './PO_upload_files/05.docx', 'Email', '', '', '2025-02-05 04:38:29'),
(7, 'EID20250207001', 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', 'Prerana', 'Project Assisstant', '7418529637', 'test@gmail.com', 'Government', 'CMTI', '29RES345FRTE456', 'CAAP', 'Yes', 'a', 'Naina', 'Manager', '7631489524', 'sample@gmail.com', '123-456-7890', 'No', '', '', '2 members', '', 'NEFT', '', 'Email', '', '', '2025-02-07 09:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Company_Name` varchar(250) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Course_Code` varchar(100) NOT NULL,
  `Commencing_Date` varchar(100) NOT NULL,
  `Program_Relavent` varchar(50) NOT NULL,
  `Schedule_Time` varchar(50) NOT NULL,
  `Facility_Satisfactory` varchar(50) NOT NULL,
  `Registration` varchar(50) NOT NULL,
  `Sessions_Effective` varchar(50) NOT NULL,
  `Visit` varchar(50) NOT NULL,
  `Workshop_Session` varchar(50) NOT NULL,
  `Hospitality` varchar(50) NOT NULL,
  `Accommodation` varchar(50) NOT NULL,
  `Rate_Overall` varchar(50) NOT NULL,
  `Remarks` varchar(250) NOT NULL,
  `Suggestions` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Company_Name`, `Title`, `Course_Code`, `Commencing_Date`, `Program_Relavent`, `Schedule_Time`, `Facility_Satisfactory`, `Registration`, `Sessions_Effective`, `Visit`, `Workshop_Session`, `Hospitality`, `Accommodation`, `Rate_Overall`, `Remarks`, `Suggestions`, `Status`, `Date_Time`) VALUES
(1, 'Prerana', 'CMTI', 'Mechatronics & Manufacturing Automation', '0720', '24 Oct 2024 to 27 Oct 2024', 'Strongly Agree', 'Agree', 'Strongly Agree', 'Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Excellent', 'The training was excellent because the presenter used real-life experiences to show how to improve my sales.', 'Excellent', 'Not Accepted', '2024-12-27 06:56:59'),
(2, 'Naina', 'Wenz pvt.ltd', 'Practical training on micro device', '11166', '06 Oct 2024 to 10 Oct 2024', 'Strongly Agree', 'Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Agree', 'Strongly Agree', 'Strongly Agree', 'Agree', 'Very Good', 'A wonderfully practical course - both personally and professionally.', 'Very Good', 'Accepted', '2025-02-03 08:51:17'),
(3, 'Prerana', 'CMTI', 'Mechatronics & Manufacturing Automation', '0720', '24 Oct 2024 to 27 Oct 2024', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Excellent', 'a', 'a', '', '2024-10-24 10:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `internship_project_form`
--

CREATE TABLE `internship_project_form` (
  `ID` int(11) NOT NULL,
  `Application_For` varchar(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Guardians` varchar(100) NOT NULL,
  `Guardians_Name` varchar(250) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `image_loc` varchar(100) NOT NULL,
  `College_Name` text NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Roll_Number` varchar(100) NOT NULL,
  `Academic_Status` varchar(100) NOT NULL,
  `Internship_Start_Date` varchar(50) NOT NULL,
  `Internship_End_Date` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Mobile_Number` varchar(15) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Aadhaar_Number` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `SSLC_Qualification` text NOT NULL,
  `SSLC_School_Name` text NOT NULL,
  `SSLC_Yop` varchar(100) NOT NULL,
  `SSLC_CGPA` varchar(100) NOT NULL,
  `PUC_Diploma_Qualification` text NOT NULL,
  `PUC_Diploma_College_Name` text NOT NULL,
  `PUC_Diploma_Yop` varchar(100) NOT NULL,
  `PUC_Diploma_CGPA` varchar(100) NOT NULL,
  `Bachelors_Qualification` text NOT NULL,
  `Bachelors_College_Name` text NOT NULL,
  `Bachelors_Yop` varchar(100) NOT NULL,
  `Bachelors_CGPA` varchar(100) NOT NULL,
  `Additional_Qualification` text NOT NULL,
  `Graduation_Upto_Sem` varchar(100) NOT NULL,
  `10th_Marks_Card` varchar(200) NOT NULL,
  `12th_Marks_Card` varchar(200) NOT NULL,
  `Degree_Marks_Card` varchar(100) NOT NULL,
  `Collage_ID` varchar(100) NOT NULL,
  `Resume` varchar(100) NOT NULL,
  `Aadhaar_Card` varchar(100) NOT NULL,
  `Caste_Certificate` varchar(100) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship_project_form`
--

INSERT INTO `internship_project_form` (`ID`, `Application_For`, `Name`, `Guardians`, `Guardians_Name`, `DOB`, `Gender`, `image_loc`, `College_Name`, `Branch`, `Roll_Number`, `Academic_Status`, `Internship_Start_Date`, `Internship_End_Date`, `Address`, `Mobile_Number`, `Email`, `Aadhaar_Number`, `Category`, `SSLC_Qualification`, `SSLC_School_Name`, `SSLC_Yop`, `SSLC_CGPA`, `PUC_Diploma_Qualification`, `PUC_Diploma_College_Name`, `PUC_Diploma_Yop`, `PUC_Diploma_CGPA`, `Bachelors_Qualification`, `Bachelors_College_Name`, `Bachelors_Yop`, `Bachelors_CGPA`, `Additional_Qualification`, `Graduation_Upto_Sem`, `10th_Marks_Card`, `12th_Marks_Card`, `Degree_Marks_Card`, `Collage_ID`, `Resume`, `Aadhaar_Card`, `Caste_Certificate`, `Date_Time`) VALUES
(1, 'MHI_Internship', 'Prerana', 'Father', 'Naina', '2025-02-05', 'Male', './internship_project_profileimages/AEAMT.jpg', 'MEI', 'CS', '2018CS20439', '3rd Year & 6th Sem', '2025-02-05', '2025-02-06', 'Bangalore', '9638527417', 'prerana@gmail.com', '789456123741', 'SC', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', '5Sem', './internship_project_forms/Prerana_10th.pdf', './internship_project_forms/Prerana_12th.pdf', './internship_project_forms/Prerana_Degree.pdf', './internship_project_forms/Prerana_ID.pdf', './internship_project_forms/Prerana_Resume.pdf', './internship_project_forms/Prerana_Aadhaar_Card.pdf', '', '2025-02-05 11:24:01'),
(2, 'MHI_Internship', '', 'Father', '', '', 'Male', './internship_project_profileimages/', '', '', '', '', '', '', '', '', '', '', 'SC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2025-02-07 04:32:01'),
(3, 'MHI_Internship', '', 'Father', '', '', 'Male', './internship_project_profileimages/', '', '', '', '', '', '', '', '', '', '', 'SC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2025-02-07 04:40:53'),
(4, 'MHI_Internship', '', 'Father', '', '', 'Male', './internship_project_profileimages/', '', '', '', '', '', '', '', '', '', '', 'SC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2025-02-07 05:16:34'),
(5, 'MHI_Internship', 'Prerana', 'Father', 'Naina', '2025-02-07', 'Male', './internship_project_profileimages/_payment_QR_code_image_EID20241021002.png', 'a', 'CS', '2018CS20438', '3rd Year & 6th Sem', '2025-02-15', '2025-02-12', 'a', '9638527417', 'sample@gmail.com', '789456123741', 'SC', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '', '5Sem', './internship_project_forms/Prerana_10th.pdf', './internship_project_forms/Prerana_12th.pdf', './internship_project_forms/Prerana_Degree.pdf', './internship_project_forms/Prerana_Collage_ID.pdf', './internship_project_forms/Prerana_Resume.pdf', './internship_project_forms/Prerana_Aadhaar_Card.pdf', './internship_project_forms/Prerana_Caste_Certificate.pdf', '2025-02-12 07:32:35'),
(6, 'MHI_Internship', 'Prerana', 'Father', 'Naina', '2025-02-13', 'Male', './internship_project_profileimages/female.jpg', 'a', 'CS', '2018CS20437', '3rd Year & 6th Sem', '2025-02-05', '2025-02-05', 'a', '9638527417', 'prerana@gmail.com', '789456123741', 'SC', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '', '5Sem', './internship_project_forms/Prerana_10th.pdf', './internship_project_forms/Prerana_12th.pdf', './internship_project_forms/Prerana_Degree.pdf', './internship_project_forms/Prerana_Collage_ID.pdf', './internship_project_forms/Prerana_Resume.pdf', './internship_project_forms/Prerana_Aadhaar_Card.pdf', '', '2025-02-12 07:32:40'),
(7, 'MHI_Internship', 'Prerana', 'Father', 'Naina', '2025-02-07', 'Male', './internship_project_profileimages/_payment_QR_code_image_EID20241021002 (1).png', 'a', 'CS', '2018CS20435', '3rd Year & 6th Sem', '2025-02-13', '2025-02-12', 'a', '9638527417', 'prerana@gmail.com', '789456123741', 'SC', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '', '', './internship_project_forms/Prerana_10th.pdf', './internship_project_forms/Prerana_12th.pdf', './internship_project_forms/Prerana_Degree.pdf', './internship_project_forms/Prerana_Collage_ID.pdf', './internship_project_forms/Prerana_Resume.pdf', './internship_project_forms/Prerana_Aadhaar_Card.pdf', '', '2025-02-12 07:33:33'),
(8, 'MHI_Internship', 'Prerana', 'Father', 'Naina', '2025-02-07', 'Male', './internship_project_profileimages/_payment_QR_code_image_EID20241021002 (1).png', 'a', 'CS', '2018CS20436', '3rd Year & 6th Sem', '2025-02-13', '2025-02-12', 'a', '9638527417', 'prerana@gmail.com', '789456123741', 'SC', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '', '', './internship_project_forms/Prerana_10th.pdf', './internship_project_forms/Prerana_12th.pdf', './internship_project_forms/Prerana_Degree.pdf', './internship_project_forms/Prerana_Collage_ID.pdf', './internship_project_forms/Prerana_Resume.pdf', './internship_project_forms/Prerana_Aadhaar_Card.pdf', './internship_project_forms/Prerana_Caste_Certificate.pdf', '2025-02-12 07:32:51'),
(9, 'MHI_Internship', 'Prerana', 'Father', 'Naina', '2025-02-13', 'Male', './internship_project_profileimages/_payment_QR_code_image_EID20241021002 (3).png', 'a', 'CS', '2018CS20433', '3rd Year & 6th Sem', '2025-02-14', '2025-02-21', 'bangalore', '9638527417', 'prerana@gmail.com', '789456123741', 'SC', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '', '', './internship_project_forms/Prerana_10th.pdf', './internship_project_forms/Prerana_12th.pdf', './internship_project_forms/Prerana_Degree.pdf', './internship_project_forms/Prerana_Collage_ID.pdf', './internship_project_forms/Prerana_Resume.pdf', './internship_project_forms/Prerana_Aadhaar_Card.pdf', '', '2025-02-13 05:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `ID` int(11) NOT NULL,
  `Enrollment_ID` varchar(200) NOT NULL,
  `Course_Code` varchar(50) NOT NULL,
  `Title` text NOT NULL,
  `Commencing_Date` varchar(100) NOT NULL,
  `Contact_Name` varchar(200) NOT NULL,
  `NCPI_UPI_Ref_No` varchar(20) NOT NULL,
  `QR_image_loc` text NOT NULL,
  `Cheque_DD_No` varchar(6) NOT NULL,
  `NEFT_Transaction_Id` varchar(16) NOT NULL,
  `Bank_Name` varchar(200) NOT NULL,
  `Payment_Status` varchar(50) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`ID`, `Enrollment_ID`, `Course_Code`, `Title`, `Commencing_Date`, `Contact_Name`, `NCPI_UPI_Ref_No`, `QR_image_loc`, `Cheque_DD_No`, `NEFT_Transaction_Id`, `Bank_Name`, `Payment_Status`, `Date_Time`) VALUES
(1, 'EID20241213001', '0720', 'Mechatronic & Manufacturing Automation', '27-12-2024 to 29-12-2024', 'Naina', '', '', '234434', '', 'SBI', 'Payment Successful', '2024-12-13 09:56:41'),
(2, 'EID20241213002', '0720', 'Mechatronic & Manufacturing Automation', '27-12-2024 to 29-12-2024', 'Hemanth', '', '', '', 'NEFTSBI202403101', 'SBI', 'Payment Successful', '2024-12-13 09:58:06'),
(3, 'EID20241226001', '0720', 'Mechatronic & Manufacturing Automation', '27-12-2024 to 29-12-2024', 'Naina', '', '', '', 'NEFTSBI202403101', 'SBI', 'Payment Successful', '2024-12-26 04:47:50'),
(4, 'EID20250103001', '0410', 'Laboratory Management & Internal Audit as per ISO / IEC 17025:2017', '22-04-2025 to 26-04-2025', 'Hemanth', '', '', '234434', '', 'SBI', 'Payment Successful', '2025-01-03 10:03:54'),
(5, 'EID20250106001', '0860', 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '08-04-2025 to 10-04-2025', 'Aravinda', '', '', '234434', '', 'SBI', 'Payment Successful', '2025-01-06 09:54:16'),
(6, 'EID20250205001', '0410', 'Laboratory Management & Internal Audit as per ISO / IEC 17025:2017', '22-04-2025 to 26-04-2025', 'Naina', '', '', '234433', '', 'SBI', 'Payment Successful', '2025-02-05 05:34:22'),
(7, 'EID20250207001', '0860', 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '08-04-2025 to 10-04-2025', 'Naina', '123456789014', './payment/QR_code_image/EID20250207001.png', '', '', '', 'Payment Successful', '2025-02-07 09:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `programme_schedule`
--

CREATE TABLE `programme_schedule` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Course_Code` varchar(50) NOT NULL,
  `Commencing_Date` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `From_Time` time NOT NULL,
  `To_Time` time NOT NULL,
  `Particulars` varchar(250) NOT NULL,
  `Faculty` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programme_schedule`
--

INSERT INTO `programme_schedule` (`ID`, `Title`, `Course_Code`, `Commencing_Date`, `Date`, `From_Time`, `To_Time`, `Particulars`, `Faculty`) VALUES
(1, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-09', '08:45:00', '09:30:00', 'Registration and AV on CMTI                                                                                                                                                                                                                               ', 'AEAMT'),
(2, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-09', '09:30:00', '13:00:00', 'Introduction to GD&T PART-I, Fundamental Rules                                    ', 'P Jeevan Kumar'),
(3, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-09', '14:00:00', '15:00:00', 'Introduction to Precision Measurements & Metrology                                                                                                            ', 'K Niranjan Reddy'),
(4, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-09', '15:15:00', '17:00:00', 'Visit to Labs                                                                        ', 'AEAMT'),
(5, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-09', '09:00:00', '10:30:00', 'Introduction to GD&T PART-II,Boundary Condition                                                                        ', 'Kiran Kumar MD'),
(6, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-09', '10:45:00', '13:00:00', 'Form Measurements                                    ', 'Kiran Kumar MD'),
(7, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-09', '14:00:00', '16:00:00', 'Datum Referencing                                    ', 'Anil Kumar K'),
(8, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-09', '16:00:00', '17:00:00', 'Demo: Dimensional Metrology\r\nShaft, Bore size with Various accuracies, angle measurement with different instruments                                    ', 'Manjunath K & Rudramurthi MM'),
(9, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '09:00:00', '10:00:00', 'Surface Roughness                                                                        ', 'Khushboo'),
(10, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '10:00:00', '13:00:00', 'Tolerance of Form, Orientation, Runout and Profile.                                                                                                            ', 'Vijet Bhandiwad'),
(11, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '14:00:00', '17:00:00', 'Demo\r\n-Straightness & Parallelism - V Block / Jack / Surface plate methods\r\n-Flatness Measurement - 3 Jack method\r\n-Parallelism - Surface Plate Method                                    ', 'Manjunath K & Sadashiva D'),
(12, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '09:00:00', '10:15:00', 'Positional Tolerancing - Basic                                    ', 'Gopikrishna S'),
(13, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '10:30:00', '11:30:00', 'Introduction to CMM                                    ', 'Siddaraju K G'),
(14, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '11:30:00', '13:00:00', 'Roundness Tester & FTS - Roughness                                    ', 'Shashikumar & Rudramurthi MM'),
(15, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '14:00:00', '15:00:00', 'CMM - Position & Straightness, Flatness, etc.,                                    ', 'Siddaraju K G'),
(16, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '15:59:00', '17:00:00', 'Demo\r\n-Circularity\r\n-Cylindricity                                    ', 'Pramod D S & Manjunatha K'),
(17, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '09:00:00', '11:15:00', 'Positional Tolerancing - Adavanced                                    ', 'Gopikrishna S'),
(18, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '11:30:00', '13:30:00', 'Tolerance Stack up                                    ', 'Vinay Kumar P V'),
(19, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '14:30:00', '16:31:00', 'Case study & Assesment                                    ', 'Anil Kumar K / Kiran Kumar M D'),
(20, 'Measurement Uncertainty for Chemical & Mechanical Parameters by Guide for Uncertainty Measurement (G', '0860', '08-04-2025 to 10-04-2025', '2025-04-10', '16:30:00', '17:00:00', 'Concluding Session                                                                                                            ', 'All Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `training_registration`
--

CREATE TABLE `training_registration` (
  `ID` int(11) NOT NULL,
  `Participant_ID` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Course_Code` varchar(200) NOT NULL,
  `Commencing_Date` varchar(200) NOT NULL,
  `Saturation` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `DOB` date NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `image_loc` text NOT NULL,
  `Organisation_Name` varchar(200) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Areas` varchar(250) NOT NULL,
  `Years` varchar(50) NOT NULL,
  `Office_Address` varchar(250) NOT NULL,
  `Residential_Address` varchar(250) NOT NULL,
  `Office_Phone` varchar(15) NOT NULL,
  `Residential_Phone` varchar(15) NOT NULL,
  `Mobile_Number` varchar(15) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Purpose_of_Prog` varchar(250) NOT NULL,
  `Expectations` varchar(200) NOT NULL,
  `Contact_Name` varchar(200) NOT NULL,
  `Contact_Relationship` varchar(200) NOT NULL,
  `Contact_No` varchar(15) NOT NULL,
  `Contact_Address` varchar(250) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_registration`
--

INSERT INTO `training_registration` (`ID`, `Participant_ID`, `Title`, `Course_Code`, `Commencing_Date`, `Saturation`, `Name`, `DOB`, `Designation`, `Gender`, `image_loc`, `Organisation_Name`, `Qualification`, `Areas`, `Years`, `Office_Address`, `Residential_Address`, `Office_Phone`, `Residential_Phone`, `Mobile_Number`, `Email`, `Purpose_of_Prog`, `Expectations`, `Contact_Name`, `Contact_Relationship`, `Contact_No`, `Contact_Address`, `Date`) VALUES
(1, 'PID202412161', 'Mechatronic & Manufacturing Automation', '0720', '27-12-2024 to 29-12-2024', 'Ms', 'Prerana', '2002-02-25', 'Project Assistant', 'Female', './profileimages/images_female.png', 'CMTI', 'BCA', 'Developer', '2 Years', 'Peenya 1st stage', 'Peenya 2nd stage\'', '7418529637', '9638527418', '9638527417', 'prerana@gmail.com', 'Test', 'Test', 'Hemanth', 'Brother', '8527419635', 'Jaynagar', '2024-12-16 04:35:56'),
(2, 'PID202501031', 'Laboratory Management & Internal Audit as per ISO ', '0410', '22-04-2025 to 26-04-2025', 'Ms', 'Naina', '2025-01-11', 'Project Assistant', 'Male', './profileimages/aeamt_image2.jpg', 'a', 'BCA', 'Developer', '2 Years', 'a', 'a', '7418529637', '9638527418', '9638527417', 'prerana@gmail.com', 'a', 'a', 'Naina', 'Sister', '8527419635', 'a', '2025-01-03 10:06:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_guest_house`
--
ALTER TABLE `admin_guest_house`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `apprenticeship_form`
--
ALTER TABLE `apprenticeship_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course_information`
--
ALTER TABLE `course_information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enrollment_form`
--
ALTER TABLE `enrollment_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `internship_project_form`
--
ALTER TABLE `internship_project_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `programme_schedule`
--
ALTER TABLE `programme_schedule`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `training_registration`
--
ALTER TABLE `training_registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_guest_house`
--
ALTER TABLE `admin_guest_house`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apprenticeship_form`
--
ALTER TABLE `apprenticeship_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `course_information`
--
ALTER TABLE `course_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrollment_form`
--
ALTER TABLE `enrollment_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `internship_project_form`
--
ALTER TABLE `internship_project_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `programme_schedule`
--
ALTER TABLE `programme_schedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `training_registration`
--
ALTER TABLE `training_registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
