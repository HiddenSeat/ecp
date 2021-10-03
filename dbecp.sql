-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 01:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbecp`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesscard`
--

CREATE TABLE `accesscard` (
  `id` int(11) NOT NULL,
  `emp_number` varchar(10) NOT NULL,
  `building` tinyint(1) DEFAULT NULL,
  `locker` tinyint(1) DEFAULT NULL,
  `insurance` tinyint(1) DEFAULT NULL,
  `badge` tinyint(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approve_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companyinspected`
--

CREATE TABLE `companyinspected` (
  `id` int(11) NOT NULL,
  `emp_number` varchar(10) NOT NULL,
  `company` tinyint(1) DEFAULT NULL,
  `inspect_by` varchar(255) DEFAULT NULL,
  `amount` int(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approve_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emailclose`
--

CREATE TABLE `emailclose` (
  `id` int(11) NOT NULL,
  `emp_number` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_number` varchar(10) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_company` varchar(50) NOT NULL,
  `emp_designation` varchar(50) NOT NULL,
  `emp_status` varchar(20) NOT NULL,
  `emp_department` varchar(50) NOT NULL,
  `emp_section` varchar(50) NOT NULL,
  `emp_marital` varchar(20) NOT NULL,
  `emp_ethnic` varchar(20) NOT NULL,
  `emp_education` varchar(20) NOT NULL,
  `emp_positon` varchar(50) NOT NULL,
  `emp_sex` varchar(10) NOT NULL,
  `emp_religion` varchar(20) NOT NULL,
  `emp_joindate` date NOT NULL,
  `leave_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_number`, `emp_name`, `emp_company`, `emp_designation`, `emp_status`, `emp_department`, `emp_section`, `emp_marital`, `emp_ethnic`, `emp_education`, `emp_positon`, `emp_sex`, `emp_religion`, `emp_joindate`, `leave_date`) VALUES
('A-001', 'Uzumaki Bayu', 'PT  sejahtera', 'Design1', 'Kerja', 'IT-01', 'Programmer', 'Tidak', 'Manusia biasa', 'SMK', 'Programmer', 'Laki', 'Relic', '2021-10-01', '2021-10-03'),
('A-002', 'Uzumaki Sitoru', 'PT  sejahtera', 'Design1', 'Kerja', 'IT-02', 'Programmer', 'Tidak', 'Manusia biasa', 'SMK', 'Programmer', 'Laki', 'Relic', '2021-10-01', '2021-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `itequipment`
--

CREATE TABLE `itequipment` (
  `id` int(11) NOT NULL,
  `emp_number` varchar(10) NOT NULL,
  `laptop` tinyint(1) DEFAULT NULL,
  `mobile` tinyint(1) DEFAULT NULL,
  `ipad` tinyint(1) DEFAULT NULL,
  `door` tinyint(1) DEFAULT NULL,
  `other` tinyint(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approve_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owningcompany`
--

CREATE TABLE `owningcompany` (
  `id` int(11) NOT NULL,
  `emp_number` varchar(10) NOT NULL,
  `owned` tinyint(1) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approve_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owningcompany`
--

INSERT INTO `owningcompany` (`id`, `emp_number`, `owned`, `amount`, `image`, `approve_status`) VALUES
(1, 'A-001', 0, 100, '6501d8fd9466ec40608e1f64c5d23e38.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personalprotective`
--

CREATE TABLE `personalprotective` (
  `id` int(11) NOT NULL,
  `emp_number` varchar(10) NOT NULL,
  `uniform` tinyint(1) DEFAULT NULL,
  `helmet` tinyint(1) DEFAULT NULL,
  `glasses` tinyint(1) DEFAULT NULL,
  `shoes` tinyint(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approve_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phoneaccount`
--

CREATE TABLE `phoneaccount` (
  `id` int(11) NOT NULL,
  `emp_number` varchar(10) NOT NULL,
  `transfer` tinyint(1) DEFAULT NULL,
  `terminate` tinyint(1) DEFAULT NULL,
  `retain` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reason`
--

CREATE TABLE `reason` (
  `id_reason` int(5) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reason`
--

INSERT INTO `reason` (`id_reason`, `name`) VALUES
(1, 'Finish Contract'),
(2, 'Resign'),
(3, 'End of Contract'),
(4, 'Abscond'),
(5, 'End of Daily');

-- --------------------------------------------------------

--
-- Table structure for table `storeequipment`
--

CREATE TABLE `storeequipment` (
  `id` int(11) NOT NULL,
  `emp_number` varchar(10) NOT NULL,
  `equipment` tinyint(1) DEFAULT NULL,
  `out_item` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approve_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `emp_number` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approve_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesscard`
--
ALTER TABLE `accesscard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyinspected`
--
ALTER TABLE `companyinspected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailclose`
--
ALTER TABLE `emailclose`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_number` (`emp_number`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_number`);

--
-- Indexes for table `itequipment`
--
ALTER TABLE `itequipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_number` (`emp_number`);

--
-- Indexes for table `owningcompany`
--
ALTER TABLE `owningcompany`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_number_fk` (`emp_number`);

--
-- Indexes for table `personalprotective`
--
ALTER TABLE `personalprotective`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_number` (`emp_number`);

--
-- Indexes for table `phoneaccount`
--
ALTER TABLE `phoneaccount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_number` (`emp_number`);

--
-- Indexes for table `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`id_reason`);

--
-- Indexes for table `storeequipment`
--
ALTER TABLE `storeequipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_number` (`emp_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesscard`
--
ALTER TABLE `accesscard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companyinspected`
--
ALTER TABLE `companyinspected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emailclose`
--
ALTER TABLE `emailclose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itequipment`
--
ALTER TABLE `itequipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owningcompany`
--
ALTER TABLE `owningcompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personalprotective`
--
ALTER TABLE `personalprotective`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phoneaccount`
--
ALTER TABLE `phoneaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storeequipment`
--
ALTER TABLE `storeequipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emailclose`
--
ALTER TABLE `emailclose`
  ADD CONSTRAINT `emailclose_ibfk_1` FOREIGN KEY (`emp_number`) REFERENCES `employee` (`emp_number`);

--
-- Constraints for table `itequipment`
--
ALTER TABLE `itequipment`
  ADD CONSTRAINT `itequipment_ibfk_1` FOREIGN KEY (`emp_number`) REFERENCES `employee` (`emp_number`);

--
-- Constraints for table `owningcompany`
--
ALTER TABLE `owningcompany`
  ADD CONSTRAINT `emp_number_fk` FOREIGN KEY (`emp_number`) REFERENCES `employee` (`emp_number`);

--
-- Constraints for table `personalprotective`
--
ALTER TABLE `personalprotective`
  ADD CONSTRAINT `personalprotective_ibfk_1` FOREIGN KEY (`emp_number`) REFERENCES `employee` (`emp_number`);

--
-- Constraints for table `phoneaccount`
--
ALTER TABLE `phoneaccount`
  ADD CONSTRAINT `phoneaccount_ibfk_1` FOREIGN KEY (`emp_number`) REFERENCES `employee` (`emp_number`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`emp_number`) REFERENCES `employee` (`emp_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
