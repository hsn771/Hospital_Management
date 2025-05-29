-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2025 at 09:01 AM
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
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
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
  `name` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `thana_id` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `blood_id` int(11) DEFAULT NULL,
  `emergency_contact` varchar(15) DEFAULT NULL,
  `nid_passport` varchar(30) DEFAULT NULL,
  `insurance_provider` varchar(100) DEFAULT NULL,
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
-- Table structure for table `thana`
--

CREATE TABLE `thana` (
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
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
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
  ADD KEY `thana_id` (`thana_id`);

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
-- Indexes for table `thana`
--
ALTER TABLE `thana`
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admissions`
--
ALTER TABLE `admissions`
  ADD CONSTRAINT `admissions_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `admissions_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `admissions_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `admissions_ibfk_4` FOREIGN KEY (`nurse_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `admissions_ibfk_5` FOREIGN KEY (`consulting_doctor`) REFERENCES `staff` (`id`);

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `billing_ibfk_2` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `billing_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD CONSTRAINT `billing_details_ibfk_1` FOREIGN KEY (`billing_id`) REFERENCES `billing` (`id`),
  ADD CONSTRAINT `billing_details_ibfk_2` FOREIGN KEY (`admission_id`) REFERENCES `admissions` (`id`),
  ADD CONSTRAINT `billing_details_ibfk_3` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`head_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `lab_reports`
--
ALTER TABLE `lab_reports`
  ADD CONSTRAINT `lab_reports_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `lab_reports_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`),
  ADD CONSTRAINT `patients_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`),
  ADD CONSTRAINT `patients_ibfk_3` FOREIGN KEY (`thana_id`) REFERENCES `thana` (`id`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `prescriptions_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `prescriptions_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `prescriptions_details`
--
ALTER TABLE `prescriptions_details`
  ADD CONSTRAINT `prescriptions_details_ibfk_1` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`room_type_id`) REFERENCES `rooms_type` (`id`),
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `schedules_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `schedules_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`shift_id`) REFERENCES `shift` (`id`),
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`),
  ADD CONSTRAINT `staff_ibfk_4` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`),
  ADD CONSTRAINT `staff_ibfk_5` FOREIGN KEY (`thana_id`) REFERENCES `thana` (`id`),
  ADD CONSTRAINT `staff_ibfk_6` FOREIGN KEY (`per_division_id`) REFERENCES `division` (`id`),
  ADD CONSTRAINT `staff_ibfk_7` FOREIGN KEY (`per_district_id`) REFERENCES `district` (`id`),
  ADD CONSTRAINT `staff_ibfk_8` FOREIGN KEY (`per_thana_id`) REFERENCES `thana` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
