-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 08:29 AM
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
-- Database: `u_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(25) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_pass` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_pass`, `position`) VALUES
(1, 'LLoyd', '123456789', 'Dean'),
(3, 'kristiane', 'kld4628...', 'Coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `adv_login`
--

CREATE TABLE `adv_login` (
  `adv_no` int(50) NOT NULL,
  `adv_name` text NOT NULL,
  `adv_pass` text NOT NULL,
  `program` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adv_login`
--

INSERT INTO `adv_login` (`adv_no`, `adv_name`, `adv_pass`, `program`) VALUES
(1, 'Layla Woodcock', 'layla123', 'BSIT'),
(2, 'Dale Lukeson', 'dale123', 'BSCS'),
(3, 'Sheila Jeffries', 'she123', 'BSEMC'),
(4, 'David Alan', 'david123', 'ACT');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_size` int(11) NOT NULL,
  `file_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `file_name`, `file_path`, `file_size`, `file_type`) VALUES
(1, 'Project_Proposal-Draft.docx', 'uploads/648e1f08c4150_Project_Proposal-Draft.docx', 17613, 'application/vnd.openxmlformats-officedocument.word'),
(2, 'BATCH2023.ITP411.ACTIVITY1.1_FORMS.pdf', 'uploads/648e1f37e7e5b_BATCH2023.ITP411.ACTIVITY1.1_FORMS.pdf', 46976, 'application/pdf'),
(3, '2x2Photo1.png', 'uploads/648e1f9805167_2x2Photo1.png', 540693, 'image/png'),
(4, '2x2Photo1.png', 'uploads/648e1fd07e7f0_2x2Photo1.png', 540693, 'image/png'),
(5, '194227926_4883217868373371_3116987268146001799_n.jpg', 'uploads/648e2023037e1_194227926_4883217868373371_3116987268146001799_n.jpg', 446334, 'image/jpeg'),
(6, 'logo.png', 'uploads/648e20c1bed28_logo.png', 65010, 'image/png'),
(7, 'logo.png', 'uploads/648e2139ca3b5_logo.png', 65010, 'image/png'),
(8, 'logo.png', 'uploads/648e213f3a5b4_logo.png', 65010, 'image/png'),
(9, '2012.jpg', 'uploads/648e21483f11e_2012.jpg', 147659, 'image/jpeg'),
(10, '2012.jpg', 'uploads/648e2156bdb74_2012.jpg', 147659, 'image/jpeg'),
(11, 'Ayato.png', 'uploads/648e215e0c999_Ayato.png', 2139093, 'image/png'),
(12, 'Alhaitham.png', 'uploads/648e21b5b78bc_Alhaitham.png', 3051133, 'image/png'),
(13, 'Alhaitham.png', 'uploads/648e22a9ad7bb_Alhaitham.png', 3051133, 'image/png'),
(14, 'Alhaitham.png', 'uploads/648e22dc7c1ca_Alhaitham.png', 3051133, 'image/png'),
(15, 'Alhaitham.png', 'uploads/648e233bc94b9_Alhaitham.png', 3051133, 'image/png'),
(16, 'Baizhu.png', 'uploads/648e2341944df_Baizhu.png', 1352784, 'image/png'),
(17, 'Baizhu.png', 'uploads/648e23af20af8_Baizhu.png', 1352784, 'image/png'),
(18, 'Tighnari.png', 'uploads/648e23b6019cb_Tighnari.png', 1677858, 'image/png'),
(19, 'Baizhu.png', 'uploads/648e244f37085_Baizhu.png', 1352784, 'image/png'),
(20, 'Cyno.png', 'uploads/648e2454479c8_Cyno.png', 3013148, 'image/png'),
(21, 'Baizhu.png', 'uploads/648e248882919_Baizhu.png', 1352784, 'image/png'),
(22, 'Baizhu.png', 'uploads/648e250540293_Baizhu.png', 1352784, 'image/png'),
(23, 'zhongli.jfif', 'uploads/648e250ed5900_zhongli.jfif', 1121675, 'image/jpeg'),
(24, 'Baizhu.png', 'uploads/648e25346b058_Baizhu.png', 1352784, 'image/png'),
(26, 'Baizhu.png', 'uploads/648e264246eb1_Baizhu.png', 1352784, 'image/png'),
(27, 'Baizhu.png', 'uploads/648e26dd10646_Baizhu.png', 1352784, 'image/png'),
(28, 'Yae Miko6.png', 'uploads/648e26e86d148_Yae Miko6.png', 987599, 'image/png'),
(29, 'Baizhu.png', 'uploads/648e2768cfba3_Baizhu.png', 1352784, 'image/png'),
(30, 'Eula.png', 'uploads/648e277145b77_Eula.png', 799626, 'image/png'),
(31, 'Eula.png', 'uploads/648e27de53b69_Eula.png', 799626, 'image/png'),
(32, 'Dehya.png', 'uploads/648e27e60b517_Dehya.png', 418389, 'image/png'),
(33, 'Baizhu.png', 'uploads/648e281d24bf8_Baizhu.png', 1352784, 'image/png'),
(34, 'Yae Miko4.jpg', 'uploads/648e282602834_Yae Miko4.jpg', 2197355, 'image/jpeg'),
(35, 'Yae Miko4.jpg', 'uploads/648e282a30d46_Yae Miko4.jpg', 2197355, 'image/jpeg'),
(36, 'Yae Miko4.jpg', 'uploads/648e282b7fac1_Yae Miko4.jpg', 2197355, 'image/jpeg'),
(37, 'Yae Miko4.jpg', 'uploads/648e28349d59b_Yae Miko4.jpg', 2197355, 'image/jpeg'),
(38, 'Baizhu.png', 'uploads/648e28592e40b_Baizhu.png', 1352784, 'image/png'),
(39, 'Yae Miko4.jpg', 'uploads/648e2860b4b4c_Yae Miko4.jpg', 2197355, 'image/jpeg'),
(40, 'Baizhu.png', 'uploads/648e28a44fce1_Baizhu.png', 1352784, 'image/png'),
(41, 'Raiden Shogun.jpg', 'uploads/648e291d39029_Raiden Shogun.jpg', 1979407, 'image/jpeg'),
(42, 'Tighnari.png', 'uploads/648e29a280d67_Tighnari.png', 1677858, 'image/png'),
(43, 'Wanderer.png', 'uploads/648e29ba6519f_Wanderer.png', 1824332, 'image/png'),
(44, 'Wanderer.png', 'uploads/648e29cf0d81e_Wanderer.png', 1824332, 'image/png'),
(45, 'Tighnari.png', 'uploads/648e2a72d870e_Tighnari.png', 1677858, 'image/png'),
(46, 'Nahida.png', 'uploads/648e2a99dabc0_Nahida.png', 1225058, 'image/png'),
(47, 'Yae Miko1.png', 'uploads/648e2aae7b561_Yae Miko1.png', 2652634, 'image/png'),
(48, 'Nilou.png', 'uploads/648e2abfa72cc_Nilou.png', 1437823, 'image/png'),
(49, 'Nilou.png', 'uploads/648e2bf676fe2_Nilou.png', 1437823, 'image/png'),
(50, 'Dehya.png', 'uploads/648e2bfe6ffaa_Dehya.png', 418389, 'image/png'),
(51, 'Nilou.png', 'uploads/648e2c03c38d6_Nilou.png', 1437823, 'image/png'),
(52, 'Nilou.png', 'uploads/648e2c6363097_Nilou.png', 1437823, 'image/png'),
(53, 'Nahida.png', 'uploads/648e2c68b291f_Nahida.png', 1225058, 'image/png'),
(54, 'Tighnari.png', 'uploads/648e2c6d71f81_Tighnari.png', 1677858, 'image/png'),
(55, 'Nahida.png', 'uploads/648e2cfbb8bf7_Nahida.png', 1225058, 'image/png'),
(56, 'Yae Miko5.png', 'uploads/648e2d0771d15_Yae Miko5.png', 33187604, 'image/png'),
(57, 'Nahida.png', 'uploads/648e2d8f6915b_Nahida.png', 1225058, 'image/png'),
(58, '311227151_113180194899376_9010566893493541273_n.png', 'uploads/648e2da30122a_311227151_113180194899376_9010566893493541273_n.png', 146924, 'image/png'),
(59, 'Nahida.png', 'uploads/648e2e0526e99_Nahida.png', 1225058, 'image/png'),
(60, 'year level.png', 'uploads/648e2e1d8963e_year level.png', 7166, 'image/png'),
(61, 'Project Conceptualization Presentation - codebreakers.pdf', 'uploads/648e2f8886636_Project Conceptualization Presentation - codebreakers.pdf', 20508245, 'application/pdf'),
(62, 'Nahida.png', 'uploads/648e301ebe2bc_Nahida.png', 1225058, 'image/png'),
(63, 'Nahida.png', 'uploads/648e30975bfba_Nahida.png', 1225058, 'image/png'),
(64, 'Nahida.png', 'uploads/648e30df860b6_Nahida.png', 1225058, 'image/png'),
(65, 'Nahida.png', 'uploads/648e30f96c076_Nahida.png', 1225058, 'image/png'),
(66, 'Nahida.png', 'uploads/648e313917dcf_Nahida.png', 1225058, 'image/png'),
(67, 'Nahida.png', 'uploads/648e319f696d5_Nahida.png', 1225058, 'image/png'),
(68, 'Nahida.png', 'uploads/648e31d7cb3c5_Nahida.png', 1225058, 'image/png'),
(69, 'Nahida.png', 'uploads/648e320a337d7_Nahida.png', 1225058, 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE `u_reg` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `stud_password` varchar(8) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `company_name` text NOT NULL,
  `company_address` text NOT NULL,
  `company_contact_no` varchar(20) DEFAULT NULL,
  `company_email` text NOT NULL,
  `company_supervisor` text NOT NULL,
  `endorsement` longblob NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`name`, `email`, `stud_password`, `contact_no`, `company_name`, `company_address`, `company_contact_no`, `company_email`, `company_supervisor`, `endorsement`, `u_id`) VALUES
('Reginald Julius Ogaya', 'Reginald@gmail.com', 'rj123', 2147483647, 'Infotech', '533 Quirino Ave. Cor. Mabuhay Drive Tambo\nParanaque City, Metro Manila,', '2147483647', 'infotech@gmail.com', 'Kristiane Dizon', '', 1),
('Angelo James Aguirre', 'aj123@gmail.com', 'aj123', 2147483647, 'Infotech', '533 Quirino Ave. Cor. Mabuhay Drive Tambo\nParanaque City, Metro Manila,', '2147483647', 'infotech@gmail.com', 'Kristiane Dizon', '', 2),
('John Paul Gingpis', 'johnpaul@gmail.com', 'jp123', 2147483647, 'Computech', '53 Mahinhin St. Teachers Village, 1101\r\n\r\nQuezon City, Metro Manila,', '952032789', 'computech@gmail.com', 'Jiean Estudillo', '', 3),
('Alex Reyes', 'alex@gmail.com', 'alex123', 2147483647, 'Maxed Out Tech', '20th Avenue Cubao\r\n\r\nQuezon City, Quezon City,', '1111111', 'mot@gmail.com', 'Rolo Rodolph', '', 4),
('Neil Bitangcol', 'neil@gmail.com', 'neil123', 2147483647, 'Farley Technology', '2019 Villagracia Building, West Bajac Bajac beside Video City\r\n\r\nOlongapo City, Zambales,', '641948069', 'farley.tech@gmail.com', 'Roddy Bobby\r\n ', '', 5),
('Jan Remiel Menor', 'jrm@gmail.com', 'miel123', 2147483647, 'Coders & Computers', '9 R Lugmoc\r\n\r\nCaloocan City, Metro Manila', '63', 'CnC@gmail.com', 'Newt Romilly', '', 6),
('Vince Erwin Evangelista', 'erwin@gmail.com', 'vince123', 2147483647, 'Aurora Apps', '608 Boni Avenue 1500\r\n\r\nMandaluyong City, Mandaluyong City', '5322594', 'Aurora@gmail.com', 'Triston Bill', '', 7),
('Jiean Estudillo', 'Jiean@gmail.com', 'jie123', 2147483647, 'Tri Tech Apps', '9 R Lugmoc\r\n\r\nCaloocan City, Metro Manila', '63', 'Tritech@gmail.com', 'Hardik Mandora', '', 8),
('Jeonoly Toledo', 'jeonoly@gmail.com', 'jeo123', 2147483647, 'Micro Madness', 'Madrigal Business Park 2, Ayala Alabang\r\n\r\nMuntinlupa City, Metro Manila', '63', 'MicroMad@gmail.com', 'Robert Johnathan', '', 9),
('Kristiane Dizon', 'kld@gmail.com', 'kld123', 2147483647, 'Tech Theory', '252 Gen Gil Puyat Ave.\r\n\r\nMakati City, Metro Manila', '8445773', 'TechTheory@gmail.com', 'Reed Florence', '', 10),
('Shermayne Ooi Francisco', 'shen@gmail.com', 'shen123', 9762795006, 'Elite Enterprises', 'Lot 293 East Service Road, Marian Park I Paranaque City, Metro Manila', '+1 (555) 123-4567', 'Elite@gmail.com', 'Jennifer Anderson', '', 11),
('John Smith', 'john.smith@example.com', 'John1234', 9123456789, 'AlphaTech Solutions', '123 Main Street, Makati City, Metro Manila, Philippines', '029876543', 'info@alphatech.com', 'Michael Johnson', '', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `adv_login`
--
ALTER TABLE `adv_login`
  ADD PRIMARY KEY (`adv_no`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `u_reg`
--
ALTER TABLE `u_reg`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adv_login`
--
ALTER TABLE `adv_login`
  MODIFY `adv_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `u_reg`
--
ALTER TABLE `u_reg`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
