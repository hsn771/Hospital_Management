-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2025 at 07:11 AM
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
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmissions`
--

CREATE TABLE `addmissions` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `admission_date` datetime DEFAULT NULL,
  `discharge_date` datetime DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `insurance_approval` tinyint(1) DEFAULT NULL,
  `initial_diagnosis` text DEFAULT NULL,
  `treatment_plan` text DEFAULT NULL,
  `nurse_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `consulting_doctor` int(11) DEFAULT NULL,
  `is_critical` tinyint(1) DEFAULT NULL,
  `has_attendant` tinyint(1) DEFAULT NULL,
  `attendant_name` varchar(100) DEFAULT NULL,
  `discharge_summary` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addmissions`
--

INSERT INTO `addmissions` (`id`, `patient_id`, `room_id`, `staff_id`, `admission_date`, `discharge_date`, `reason`, `insurance_approval`, `initial_diagnosis`, `treatment_plan`, `nurse_id`, `notes`, `consulting_doctor`, `is_critical`, `has_attendant`, `attendant_name`, `discharge_summary`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 0, 0, '2025-06-01 00:00:00', '2025-06-03 00:00:00', 'gnbfg', NULL, 'fgnf', 'gfnf', 0, '', 0, 0, 0, 'ghfg', 'ngfn', 0, '2025-06-01 06:40:41', '2025-06-01 06:45:22', 1, 1),
(2, 1, 0, 0, '2025-06-01 00:00:00', '2025-06-03 00:00:00', 'gnbfg', NULL, 'fgnf', 'gfnf', 0, '', 0, 0, 0, 'ghfg', 'ngfn', 0, '2025-06-01 06:40:52', '2025-06-01 06:45:21', 1, 1),
(3, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', NULL, '', '', 0, '', 0, 0, 0, '', '', 0, '2025-06-01 06:42:07', '2025-06-01 06:45:20', 1, 1),
(4, 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', NULL, '', '', 0, '', 0, 0, 0, '', '', 0, '2025-06-01 06:42:24', '2025-06-01 06:45:19', 1, 1),
(5, 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', NULL, '', '', 0, '', 0, 0, 0, '', '', 0, '2025-06-01 06:45:32', '2025-06-01 06:45:40', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `purpose` varchar(100) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `appointment_type` varchar(50) DEFAULT NULL,
  `confirmation_code` varchar(50) DEFAULT NULL,
  `is_emergency` tinyint(1) DEFAULT NULL,
  `patient_temperature` decimal(4,1) DEFAULT NULL,
  `bp_reading` varchar(20) DEFAULT NULL,
  `heart_rate` int(11) DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  `follow_up_required` tinyint(1) DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `staff_id`, `room_id`, `appointment_date`, `start_time`, `purpose`, `notes`, `appointment_type`, `confirmation_code`, `is_emergency`, `patient_temperature`, `bp_reading`, `heart_rate`, `source`, `follow_up_required`, `serial_no`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 0, 0, '2025-05-15', '21:32:00', 'fev', 'dfv', 'Routine/Check-up', NULL, NULL, 45.0, '45', 34, 'dfvdf', 0, 0, 0, '2025-05-31 17:32:32', '2025-05-31 17:33:43', 1, 1),
(2, 1, 0, 0, '2025-06-16', '09:39:00', 'fb', 'fb', 'Routine/Check-up', NULL, NULL, 45.0, '45', 45, 'fdb', 0, 5, 1, '2025-06-01 05:40:16', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `appointment_id` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `final_amount` decimal(10,2) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `billing_date` date DEFAULT NULL,
  `invoice_number` varchar(50) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `is_insured` tinyint(1) DEFAULT NULL,
  `insurance_covered_amount` decimal(10,2) DEFAULT NULL,
  `due_amount` decimal(10,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` int(11) NOT NULL,
  `billing_id` int(11) DEFAULT NULL,
  `admission_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `head_id` int(11) DEFAULT NULL,
  `floor` varchar(10) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `working_hours` varchar(50) DEFAULT NULL,
  `services_offered` text DEFAULT NULL,
  `equipment_list` text DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `logo_url` varchar(255) DEFAULT NULL,
  `operating_days` varchar(50) DEFAULT NULL,
  `emergency_contact` varchar(15) DEFAULT NULL,
  `founded_date` date DEFAULT NULL,
  `special_notes` text DEFAULT NULL,
  `service_rating` decimal(3,2) DEFAULT NULL,
  `location_notes` text DEFAULT NULL,
  `budget_allocation` decimal(12,2) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `division_id`, `name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'Cumilla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 1, 'Feni', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, 1, 'Brahmanbaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(4, 1, 'Rangamati', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(5, 1, 'Noakhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(6, 1, 'Chandpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(7, 1, 'Lakshmipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(8, 1, 'Chattogram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(9, 1, 'Coxsbazar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(10, 1, 'Khagrachhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(11, 1, 'Bandarban', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(12, 2, 'Sirajganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(13, 2, 'Pabna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(14, 2, 'Bogura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(15, 2, 'Rajshahi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(16, 2, 'Natore', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(17, 2, 'Joypurhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(18, 2, 'Chapainawabganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(19, 2, 'Naogaon', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(20, 3, 'Jashore', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(21, 3, 'Satkhira', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(22, 3, 'Meherpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(23, 3, 'Narail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(24, 3, 'Chuadanga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(25, 3, 'Kushtia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(26, 3, 'Magura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(27, 3, 'Khulna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(28, 3, 'Bagerhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(29, 3, 'Jhenaidah', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(30, 4, 'Jhalakathi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(31, 4, 'Patuakhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(32, 4, 'Pirojpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(33, 4, 'Barisal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(34, 4, 'Bhola', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(35, 4, 'Barguna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(36, 5, 'Sylhet', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(37, 5, 'Moulvibazar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(38, 5, 'Habiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(39, 5, 'Sunamganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(40, 6, 'Narsingdi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(41, 6, 'Gazipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(42, 6, 'Shariatpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(43, 6, 'Narayanganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(44, 6, 'Tangail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(45, 6, 'Kishoreganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(46, 6, 'Manikganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(47, 6, 'Dhaka', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(48, 6, 'Munshiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(49, 6, 'Rajbari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(50, 6, 'Madaripur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(51, 6, 'Gopalganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(52, 6, 'Faridpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(53, 7, 'Panchagarh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(54, 7, 'Dinajpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(55, 7, 'Lalmonirhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(56, 7, 'Nilphamari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(57, 7, 'Gaibandha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(58, 7, 'Thakurgaon', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(59, 7, 'Rangpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(60, 7, 'Kurigram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(61, 8, 'Sherpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(62, 8, 'Mymensingh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(63, 8, 'Jamalpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(64, 8, 'Netrokona', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Chattagram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 'Rajshahi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, 'Khulna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(4, 'Barisal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(5, 'Sylhet', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(6, 'Dhaka', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(7, 'Rangpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(8, 'Mymensingh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lab_reports`
--

CREATE TABLE `lab_reports` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `test_type` varchar(100) DEFAULT NULL,
  `sample_collected_date` date DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `report_date` date DEFAULT NULL,
  `result_summary` text DEFAULT NULL,
  `document_link` varchar(255) DEFAULT NULL,
  `lab_name` varchar(100) DEFAULT NULL,
  `reference_range` text DEFAULT NULL,
  `result_value` varchar(50) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `priority` varchar(20) DEFAULT NULL,
  `sample_type` varchar(50) DEFAULT NULL,
  `collected_by` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `upazila_id` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `blood_id` int(11) DEFAULT NULL,
  `emergency_contact` varchar(15) DEFAULT NULL,
  `nid_passport` varchar(30) DEFAULT NULL,
  `insurance_id` varchar(50) DEFAULT NULL,
  `allergies` text DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_relation` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `full_name`, `gender`, `date_of_birth`, `phone`, `email`, `division_id`, `district_id`, `upazila_id`, `address`, `blood_id`, `emergency_contact`, `nid_passport`, `insurance_id`, `allergies`, `registration_date`, `profile_image`, `marital_status`, `occupation`, `nationality`, `guardian_name`, `guardian_relation`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Ibrahim khalil', 'Male', '2025-05-31', '0156669998', 'kamal@yahoo.com', 1, 8, 78, '2no Gate', NULL, '111111111111111', '111111111111111111111111', 'asdf', 'asdf', '2025-05-31', NULL, 'Married', 'asdf', 'asdf', 'asdf', 'asdf', 0, '2025-05-31 06:16:27', '2025-05-31 06:33:49', 1, 0),
(2, 'Hasan', 'Male', '1996-07-09', '01625142403', 'hasan@gmail.com', 1, 8, 72, 'Halishahar', NULL, '015', '1123', '112', 'Fever', '2025-03-20', 'uploads/patient/1748695845155517485263917442ME.jpg', 'Married', 'Student', 'Bangladesh', 'Harun Rashid', 'Father', 0, '2025-05-31 14:50:45', '2025-05-31 15:04:11', 1, 1),
(3, 'Rakib', 'Male', '2025-05-06', '013', 'jesan@gmail.com', 1, 10, 94, 'Halishahar', NULL, '016', '1234', '12345', 'Fever', '2025-05-02', 'uploads/patient/1748696617138317486630588904man.jpg', 'Married', 'Student', 'Bangladesh', 'Jesan', 'Father', 1, '2025-05-31 15:03:37', NULL, 1, NULL),
(4, 'Naeem', 'Male', '0000-00-00', '', '', 0, 0, 0, '', NULL, '', '', '', '', '0000-00-00', 'uploads/patient/17490123107621pexels-photo-757889.jpeg', 'Married', '', '', '', '', 0, '2025-06-04 06:37:32', '2025-06-04 06:45:52', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` int(11) NOT NULL,
  `pres_date` date DEFAULT NULL,
  `appointment_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `dx` text DEFAULT NULL,
  `cc` text DEFAULT NULL,
  `rf` text DEFAULT NULL,
  `inv` text DEFAULT NULL,
  `next_visit_day` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions_details`
--

CREATE TABLE `prescriptions_details` (
  `id` int(11) NOT NULL,
  `prescription_id` int(11) DEFAULT NULL,
  `medicine_name` varchar(100) DEFAULT NULL,
  `dosage` varchar(50) DEFAULT NULL,
  `frequency` varchar(50) DEFAULT NULL,
  `duration` varchar(20) DEFAULT NULL,
  `route` varchar(50) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  `meal_relation` varchar(20) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_access`
--

CREATE TABLE `role_access` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `access` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_number` varchar(10) DEFAULT NULL,
  `room_type_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `floor` varchar(10) DEFAULT NULL,
  `has_ac` tinyint(1) DEFAULT NULL,
  `has_tv` tinyint(1) DEFAULT NULL,
  `has_internet` tinyint(1) DEFAULT NULL,
  `price_per_day` decimal(10,2) DEFAULT NULL,
  `last_cleaned` date DEFAULT NULL,
  `cleaning_status` varchar(20) DEFAULT NULL,
  `nurse_station_id` int(11) DEFAULT NULL,
  `oxygen_support` tinyint(1) DEFAULT NULL,
  `ventilator_available` tinyint(1) DEFAULT NULL,
  `window_view` tinyint(1) DEFAULT NULL,
  `room_size` varchar(50) DEFAULT NULL,
  `special_features` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms_type`
--

CREATE TABLE `rooms_type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `schedule_id` int(11) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `day_of_week` varchar(10) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `shift_type` varchar(20) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_until` date DEFAULT NULL,
  `is_recurring` tinyint(1) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `appointment_blocked` tinyint(1) DEFAULT NULL,
  `break_start` time DEFAULT NULL,
  `break_end` time DEFAULT NULL,
  `approval_status` varchar(20) DEFAULT NULL,
  `appointment_qty` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `specialization` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `license_number` varchar(50) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `thana_id` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `per_division_id` int(11) DEFAULT NULL,
  `per_district_id` int(11) DEFAULT NULL,
  `per_thana_id` int(11) DEFAULT NULL,
  `per_address` text DEFAULT NULL,
  `emergency_contact` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `bank_account` varchar(50) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `experience_years` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upazila`
--

CREATE TABLE `upazila` (
  `id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upazila`
--

INSERT INTO `upazila` (`id`, `district_id`, `name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'Debidwar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 1, 'Barura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, 1, 'Brahmanpara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(4, 1, 'Chandina', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(5, 1, 'Chauddagram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(6, 1, 'Daudkandi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(7, 1, 'Homna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(8, 1, 'Laksam', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(9, 1, 'Muradnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(10, 1, 'Nangalkot', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(11, 1, 'Comilla Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(12, 1, 'Meghna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(13, 1, 'Monohargonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(14, 1, 'Sadarsouth', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(15, 1, 'Titas', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(16, 1, 'Burichang', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(17, 1, 'Lalmai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(18, 2, 'Chhagalnaiya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(19, 2, 'Feni Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(20, 2, 'Sonagazi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(21, 2, 'Fulgazi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(22, 2, 'Parshuram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(23, 2, 'Daganbhuiyan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(24, 3, 'Brahmanbaria Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(25, 3, 'Kasba', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(26, 3, 'Nasirnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(27, 3, 'Sarail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(28, 3, 'Ashuganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(29, 3, 'Akhaura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(30, 3, 'Nabinagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(31, 3, 'Bancharampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(32, 3, 'Bijoynagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(33, 4, 'Rangamati Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(34, 4, 'Kaptai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(35, 4, 'Kawkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(36, 4, 'Baghaichari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(37, 4, 'Barkal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(38, 4, 'Langadu', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(39, 4, 'Rajasthali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(40, 4, 'Belaichari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(41, 4, 'Juraichari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(42, 4, 'Naniarchar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(43, 5, 'Noakhali Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(44, 5, 'Companiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(45, 5, 'Begumganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(46, 5, 'Hatia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(47, 5, 'Subarnachar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(48, 5, 'Kabirhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(49, 5, 'Senbug', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(50, 5, 'Chatkhil', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(51, 5, 'Sonaimori', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(52, 6, 'Haimchar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(53, 6, 'Kachua', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(54, 6, 'Shahrasti', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(55, 6, 'Chandpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(56, 6, 'Matlab South', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(57, 6, 'Hajiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(58, 6, 'Matlab North', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(59, 6, 'Faridgonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(60, 7, 'Lakshmipur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(61, 7, 'Kamalnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(62, 7, 'Raipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(63, 7, 'Ramgati', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(64, 7, 'Ramganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(65, 8, 'Rangunia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(66, 8, 'Sitakunda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(67, 8, 'Mirsharai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(68, 8, 'Patiya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(69, 8, 'Sandwip', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(70, 8, 'Banshkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(71, 8, 'Boalkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(72, 8, 'Anwara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(73, 8, 'Chandanaish', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(74, 8, 'Satkania', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(75, 8, 'Lohagara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(76, 8, 'Hathazari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(77, 8, 'Fatikchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(78, 8, 'Raozan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(79, 8, 'Karnafuli', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(80, 9, 'Coxsbazar Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(81, 9, 'Chakaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(82, 9, 'Kutubdia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(83, 9, 'Ukhiya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(84, 9, 'Moheshkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(85, 9, 'Pekua', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(86, 9, 'Ramu', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(87, 9, 'Teknaf', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(88, 10, 'Khagrachhari Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(89, 10, 'Dighinala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(90, 10, 'Panchari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(91, 10, 'Laxmichhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(92, 10, 'Mohalchari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(93, 10, 'Manikchari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(94, 10, 'Ramgarh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(95, 10, 'Matiranga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(96, 10, 'Guimara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(97, 11, 'Bandarban Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(98, 11, 'Alikadam', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(99, 11, 'Naikhongchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(100, 11, 'Rowangchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(101, 11, 'Lama', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(102, 11, 'Ruma', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(103, 11, 'Thanchi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(104, 12, 'Belkuchi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(105, 12, 'Chauhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(106, 12, 'Kamarkhand', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(107, 12, 'Kazipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(108, 12, 'Raigonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(109, 12, 'Shahjadpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(110, 12, 'Sirajganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(111, 12, 'Tarash', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(112, 12, 'Ullapara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(113, 13, 'Sujanagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(114, 13, 'Ishurdi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(115, 13, 'Bhangura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(116, 13, 'Pabna Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(117, 13, 'Bera', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(118, 13, 'Atghoria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(119, 13, 'Chatmohar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(120, 13, 'Santhia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(121, 13, 'Faridpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(122, 14, 'Kahaloo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(123, 14, 'Bogra Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(124, 14, 'Shariakandi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(125, 14, 'Shajahanpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(126, 14, 'Dupchanchia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(127, 14, 'Adamdighi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(128, 14, 'Nondigram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(129, 14, 'Sonatala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(130, 14, 'Dhunot', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(131, 14, 'Gabtali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(132, 14, 'Sherpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(133, 14, 'Shibganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(134, 15, 'Paba', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(135, 15, 'Durgapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(136, 15, 'Mohonpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(137, 15, 'Charghat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(138, 15, 'Puthia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(139, 15, 'Bagha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(140, 15, 'Godagari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(141, 15, 'Tanore', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(142, 15, 'Bagmara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(143, 16, 'Natore Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(144, 16, 'Singra', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(145, 16, 'Baraigram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(146, 16, 'Bagatipara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(147, 16, 'Lalpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(148, 16, 'Gurudaspur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(149, 16, 'Naldanga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(150, 17, 'Akkelpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(151, 17, 'Kalai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(152, 17, 'Khetlal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(153, 17, 'Panchbibi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(154, 17, 'Joypurhat Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(155, 18, 'Chapainawabganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(156, 18, 'Gomostapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(157, 18, 'Nachol', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(158, 18, 'Bholahat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(159, 18, 'Shibganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(160, 19, 'Mohadevpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(161, 19, 'Badalgachi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(162, 19, 'Patnitala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(163, 19, 'Dhamoirhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(164, 19, 'Niamatpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(165, 19, 'Manda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(166, 19, 'Atrai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(167, 19, 'Raninagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(168, 19, 'Naogaon Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(169, 19, 'Porsha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(170, 19, 'Sapahar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(171, 20, 'Manirampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(172, 20, 'Abhaynagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(173, 20, 'Bagherpara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(174, 20, 'Chougachha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(175, 20, 'Jhikargacha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(176, 20, 'Keshabpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(177, 20, 'Jessore Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(178, 20, 'Sharsha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(179, 21, 'Assasuni', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(180, 21, 'Debhata', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(181, 21, 'Kalaroa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(182, 21, 'Satkhira Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(183, 21, 'Shyamnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(184, 21, 'Tala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(185, 21, 'Kaliganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(186, 22, 'Mujibnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(187, 22, 'Meherpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(188, 22, 'Gangni', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(189, 23, 'Narail Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(190, 23, 'Lohagara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(191, 23, 'Kalia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(192, 24, 'Chuadanga Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(193, 24, 'Alamdanga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(194, 24, 'Damurhuda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(195, 24, 'Jibannagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(196, 25, 'Kushtia Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(197, 25, 'Kumarkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(198, 25, 'Khoksa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(199, 25, 'Mirpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(200, 25, 'Daulatpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(201, 25, 'Bheramara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(202, 26, 'Shalikha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(203, 26, 'Sreepur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(204, 26, 'Magura Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(205, 26, 'Mohammadpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(206, 27, 'Paikgasa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(207, 27, 'Fultola', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(208, 27, 'Digholia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(209, 27, 'Rupsha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(210, 27, 'Terokhada', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(211, 27, 'Dumuria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(212, 27, 'Botiaghata', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(213, 27, 'Dakop', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(214, 27, 'Koyra', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(215, 28, 'Fakirhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(216, 28, 'Bagerhat Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(217, 28, 'Mollahat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(218, 28, 'Sarankhola', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(219, 28, 'Rampal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(220, 28, 'Morrelganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(221, 28, 'Kachua', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(222, 28, 'Mongla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(223, 28, 'Chitalmari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(224, 29, 'Jhenaidah Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(225, 29, 'Shailkupa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(226, 29, 'Harinakundu', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(227, 29, 'Kaliganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(228, 29, 'Kotchandpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(229, 29, 'Moheshpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(230, 30, 'Jhalakathi Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(231, 30, 'Kathalia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(232, 30, 'Nalchity', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(233, 30, 'Rajapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(234, 31, 'Bauphal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(235, 31, 'Patuakhali Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(236, 31, 'Dumki', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(237, 31, 'Dashmina', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(238, 31, 'Kalapara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(239, 31, 'Mirzaganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(240, 31, 'Galachipa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(241, 31, 'Rangabali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(242, 32, 'Pirojpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(243, 32, 'Nazirpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(244, 32, 'Kawkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(245, 32, 'Zianagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(246, 32, 'Bhandaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(247, 32, 'Mathbaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(248, 32, 'Nesarabad', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(249, 33, 'Barisal Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(250, 33, 'Bakerganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(251, 33, 'Babuganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(252, 33, 'Wazirpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(253, 33, 'Banaripara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(254, 33, 'Gournadi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(255, 33, 'Agailjhara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(256, 33, 'Mehendiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(257, 33, 'Muladi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(258, 33, 'Hizla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(259, 34, 'Bhola Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(260, 34, 'Borhan Sddin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(261, 34, 'Charfesson', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(262, 34, 'Doulatkhan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(263, 34, 'Monpura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(264, 34, 'Tazumuddin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(265, 34, 'Lalmohan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(266, 35, 'Amtali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(267, 35, 'Barguna Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(268, 35, 'Betagi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(269, 35, 'Bamna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(270, 35, 'Pathorghata', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(271, 35, 'Taltali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(272, 36, 'Balaganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(273, 36, 'Beanibazar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(274, 36, 'Bishwanath', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(275, 36, 'Companiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(276, 36, 'Fenchuganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(277, 36, 'Golapganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(278, 36, 'Gowainghat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(279, 36, 'Jaintiapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(280, 36, 'Kanaighat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(281, 36, 'Sylhet Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(282, 36, 'Zakiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(283, 36, 'Dakshinsurma', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(284, 36, 'Osmaninagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(285, 37, 'Barlekha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(286, 37, 'Kamolganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(287, 37, 'Kulaura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(288, 37, 'Moulvibazar Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(289, 37, 'Rajnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(290, 37, 'Sreemangal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(291, 37, 'Juri', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(292, 38, 'Nabiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(293, 38, 'Bahubal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(294, 38, 'Ajmiriganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(295, 38, 'Baniachong', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(296, 38, 'Lakhai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(297, 38, 'Chunarughat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(298, 38, 'Habiganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(299, 38, 'Madhabpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(300, 39, 'Sunamganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(301, 39, 'South Sunamganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(302, 39, 'Bishwambarpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(303, 39, 'Chhatak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(304, 39, 'Jagannathpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(305, 39, 'Dowarabazar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(306, 39, 'Tahirpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(307, 39, 'Dharmapasha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(308, 39, 'Jamalganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(309, 39, 'Shalla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(310, 39, 'Derai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(311, 40, 'Belabo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(312, 40, 'Monohardi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(313, 40, 'Narsingdi Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(314, 40, 'Palash', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(315, 40, 'Raipura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(316, 40, 'Shibpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(317, 41, 'Kaliganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(318, 41, 'Kaliakair', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(319, 41, 'Kapasia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(320, 41, 'Gazipur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(321, 41, 'Sreepur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(322, 42, 'Shariatpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(323, 42, 'Naria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(324, 42, 'Zajira', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(325, 42, 'Gosairhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(326, 42, 'Bhedarganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(327, 42, 'Damudya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(328, 43, 'Araihazar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(329, 43, 'Bandar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(330, 43, 'Narayanganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(331, 43, 'Rupganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(332, 43, 'Sonargaon', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(333, 44, 'Basail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(334, 44, 'Bhuapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(335, 44, 'Delduar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(336, 44, 'Ghatail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(337, 44, 'Gopalpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(338, 44, 'Madhupur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(339, 44, 'Mirzapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(340, 44, 'Nagarpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(341, 44, 'Sakhipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(342, 44, 'Tangail Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(343, 44, 'Kalihati', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(344, 44, 'Dhanbari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(345, 45, 'Itna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(346, 45, 'Katiadi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(347, 45, 'Bhairab', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(348, 45, 'Tarail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(349, 45, 'Hossainpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(350, 45, 'Pakundia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(351, 45, 'Kuliarchar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(352, 45, 'Kishoreganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(353, 45, 'Karimgonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(354, 45, 'Bajitpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(355, 45, 'Austagram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(356, 45, 'Mithamoin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(357, 45, 'Nikli', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(358, 46, 'Harirampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(359, 46, 'Saturia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(360, 46, 'Manikganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(361, 46, 'Gior', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(362, 46, 'Shibaloy', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(363, 46, 'Doulatpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(364, 46, 'Singiar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(365, 47, 'Savar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(366, 47, 'Dhamrai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(367, 47, 'Keraniganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(368, 47, 'Nawabganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(369, 47, 'Dohar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(370, 48, 'Munshiganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(371, 48, 'Sreenagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(372, 48, 'Sirajdikhan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(373, 48, 'Louhajanj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(374, 48, 'Gajaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(375, 48, 'Tongibari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(376, 49, 'Rajbari Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(377, 49, 'Goalanda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(378, 49, 'Pangsa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(379, 49, 'Baliakandi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(380, 49, 'Kalukhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(381, 50, 'Madaripur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(382, 50, 'Shibchar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(383, 50, 'Kalkini', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(384, 50, 'Rajoir', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(385, 51, 'Gopalganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(386, 51, 'Kashiani', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(387, 51, 'Tungipara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(388, 51, 'Kotalipara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(389, 51, 'Muksudpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(390, 52, 'Faridpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(391, 52, 'Alfadanga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(392, 52, 'Boalmari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(393, 52, 'Sadarpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(394, 52, 'Nagarkanda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(395, 52, 'Bhanga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(396, 52, 'Charbhadrasan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(397, 52, 'Madhukhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(398, 52, 'Saltha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(399, 53, 'Panchagarh Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(400, 53, 'Debiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(401, 53, 'Boda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(402, 53, 'Atwari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(403, 53, 'Tetulia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(404, 54, 'Nawabganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(405, 54, 'Birganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(406, 54, 'Ghoraghat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(407, 54, 'Birampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(408, 54, 'Parbatipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(409, 54, 'Bochaganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(410, 54, 'Kaharol', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(411, 54, 'Fulbari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(412, 54, 'Dinajpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(413, 54, 'Hakimpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(414, 54, 'Khansama', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(415, 54, 'Birol', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(416, 54, 'Chirirbandar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(417, 55, 'Lalmonirhat Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(418, 55, 'Kaliganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(419, 55, 'Hatibandha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(420, 55, 'Patgram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(421, 55, 'Aditmari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(422, 56, 'Syedpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(423, 56, 'Domar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(424, 56, 'Dimla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(425, 56, 'Jaldhaka', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(426, 56, 'Kishorganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(427, 56, 'Nilphamari Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(428, 57, 'Sadullapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(429, 57, 'Gaibandha Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(430, 57, 'Palashbari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(431, 57, 'Saghata', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(432, 57, 'Gobindaganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(433, 57, 'Sundarganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(434, 57, 'Phulchari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(435, 58, 'Thakurgaon Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(436, 58, 'Pirganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(437, 58, 'Ranisankail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(438, 58, 'Haripur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(439, 58, 'Baliadangi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(440, 59, 'Rangpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(441, 59, 'Gangachara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(442, 59, 'Taragonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(443, 59, 'Badargonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(444, 59, 'Mithapukur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(445, 59, 'Pirgonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(446, 59, 'Kaunia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(447, 59, 'Pirgacha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(448, 60, 'Kurigram Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(449, 60, 'Nageshwari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(450, 60, 'Bhurungamari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(451, 60, 'Phulbari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(452, 60, 'Rajarhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(453, 60, 'Ulipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(454, 60, 'Chilmari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(455, 60, 'Rowmari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(456, 60, 'Charrajibpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(457, 61, 'Sherpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(458, 61, 'Nalitabari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(459, 61, 'Sreebordi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(460, 61, 'Nokla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(461, 61, 'Jhenaigati', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(462, 62, 'Fulbaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(463, 62, 'Trishal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(464, 62, 'Bhaluka', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(465, 62, 'Muktagacha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(466, 62, 'Mymensingh Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(467, 62, 'Dhobaura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(468, 62, 'Phulpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(469, 62, 'Haluaghat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(470, 62, 'Gouripur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(471, 62, 'Gafargaon', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(472, 62, 'Iswarganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(473, 62, 'Nandail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(474, 62, 'Tarakanda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(475, 63, 'Jamalpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(476, 63, 'Melandah', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(477, 63, 'Islampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(478, 63, 'Dewangonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(479, 63, 'Sarishabari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(480, 63, 'Madarganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(481, 63, 'Bokshiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(482, 64, 'Barhatta', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(483, 64, 'Durgapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(484, 64, 'Kendua', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(485, 64, 'Atpara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(486, 64, 'Madan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(487, 64, 'Khaliajuri', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(488, 64, 'Kalmakanda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(489, 64, 'Mohongonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(490, 64, 'Purbadhala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(491, 64, 'Netrokona Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(492, 9, 'Eidgaon', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(493, 39, 'Madhyanagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(494, 50, 'Dasar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contact_no`, `email`, `password`, `is_active`, `role_id`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Hasan', '015', 'hr492785@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', 1, 2, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `timezone` varchar(50) DEFAULT NULL,
  `security_question` varchar(255) DEFAULT NULL,
  `security_answer` varchar(255) DEFAULT NULL,
  `login_attempts` int(11) DEFAULT NULL,
  `locked_until` datetime DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmissions`
--
ALTER TABLE `addmissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `nurse_id` (`nurse_id`),
  ADD KEY `consulting_doctor` (`consulting_doctor`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `appointment_id` (`appointment_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billing_id` (`billing_id`),
  ADD KEY `admission_id` (`admission_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `head_id` (`head_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_reports`
--
ALTER TABLE `lab_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `thana_id` (`upazila_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointment_id` (`appointment_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `prescriptions_details`
--
ALTER TABLE `prescriptions_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescription_id` (`prescription_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_access`
--
ALTER TABLE `role_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_type_id` (`room_type_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `rooms_type`
--
ALTER TABLE `rooms_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `shift_id` (`shift_id`),
  ADD KEY `division_id` (`division_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `thana_id` (`thana_id`),
  ADD KEY `per_division_id` (`per_division_id`),
  ADD KEY `per_district_id` (`per_district_id`),
  ADD KEY `per_thana_id` (`per_thana_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazila`
--
ALTER TABLE `upazila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmissions`
--
ALTER TABLE `addmissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_reports`
--
ALTER TABLE `lab_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions_details`
--
ALTER TABLE `prescriptions_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_access`
--
ALTER TABLE `role_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms_type`
--
ALTER TABLE `rooms_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
