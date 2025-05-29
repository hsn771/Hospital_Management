CREATE TABLE `patients` (
  `id` INT PRIMARY KEY,
  `full_name` VARCHAR(100),
  `gender` VARCHAR(10),
  `date_of_birth` DATE,
  `phone` VARCHAR(15),
  `email` VARCHAR(100),
  `division_id` INT,
  `district_id` INT,
  `thana_id` INT,
  `address` TEXT,
  `blood_id` INT,
  `emergency_contact` VARCHAR(15),
  `nid_passport` VARCHAR(30),
  `insurance_provider` VARCHAR(100),
  `insurance_id` VARCHAR(50),
  `allergies` TEXT,
  `registration_date` DATE,
  `profile_image` VARCHAR(255),
  `marital_status` VARCHAR(20),
  `occupation` VARCHAR(50),
  `nationality` VARCHAR(50),
  `guardian_name` VARCHAR(100),
  `guardian_relation` VARCHAR(50),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `division` (
  `id` INT PRIMARY KEY,
  `name` VARCHAR(100),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `district` (
  `id` INT PRIMARY KEY,
  `name` VARCHAR(100),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `thana` (
  `id` INT PRIMARY KEY,
  `name` VARCHAR(100),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `staff` (
  `id` INT PRIMARY KEY,
  `full_name` VARCHAR(100),
  `department_id` INT,
  `specialization` VARCHAR(100),
  `phone` VARCHAR(15),
  `email` VARCHAR(100),
  `join_date` DATE,
  `status` INT,
  `shift_id` INT,
  `license_number` VARCHAR(50),
  `division_id` INT,
  `district_id` INT,
  `thana_id` INT,
  `address` TEXT,
  `per_division_id` INT,
  `per_district_id` INT,
  `per_thana_id` INT,
  `per_address` TEXT,
  `emergency_contact` VARCHAR(15),
  `dob` DATE,
  `profile_image` VARCHAR(255),
  `bank_name` VARCHAR(255),
  `branch_name` VARCHAR(255),
  `bank_account` VARCHAR(50),
  `salary` DECIMAL(10,2),
  `education` VARCHAR(255),
  `experience_years` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `shift` (
  `id` INT PRIMARY KEY,
  `name` VARCHAR(100),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `appointments` (
  `id` INT PRIMARY KEY,
  `patient_id` INT,
  `staff_id` INT,
  `room_id` INT,
  `appointment_date` DATE,
  `start_time` TIME,
  `purpose` VARCHAR(100),
  `notes` TEXT,
  `appointment_type` VARCHAR(50),
  `confirmation_code` VARCHAR(50),
  `is_emergency` BOOLEAN,
  `patient_temperature` DECIMAL(4,1),
  `bp_reading` VARCHAR(20),
  `heart_rate` INT,
  `source` VARCHAR(50),
  `follow_up_required` BOOLEAN,
  `serial_no` INT,
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `rooms` (
  `id` INT PRIMARY KEY,
  `room_number` VARCHAR(10),
  `room_type_id` INT,
  `department_id` INT,
  `capacity` INT,
  `floor` VARCHAR(10),
  `has_ac` BOOLEAN,
  `has_tv` BOOLEAN,
  `has_internet` BOOLEAN,
  `price_per_day` DECIMAL(10,2),
  `last_cleaned` DATE,
  `cleaning_status` VARCHAR(20),
  `nurse_station_id` INT,
  `oxygen_support` BOOLEAN,
  `ventilator_available` BOOLEAN,
  `window_view` BOOLEAN,
  `room_size` VARCHAR(50),
  `special_features` TEXT,
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `rooms_type` (
  `id` INT PRIMARY KEY,
  `type` VARCHAR(50),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `departments` (
  `id` INT PRIMARY KEY,
  `name` VARCHAR(100),
  `description` TEXT,
  `head_id` INT,
  `floor` VARCHAR(10),
  `contact_number` VARCHAR(15),
  `email` VARCHAR(100),
  `working_hours` VARCHAR(50),
  `services_offered` TEXT,
  `equipment_list` TEXT,
  `website_url` VARCHAR(255),
  `logo_url` VARCHAR(255),
  `operating_days` VARCHAR(50),
  `emergency_contact` VARCHAR(15),
  `founded_date` DATE,
  `special_notes` TEXT,
  `service_rating` DECIMAL(3,2),
  `location_notes` TEXT,
  `budget_allocation` DECIMAL(12,2),
  `remarks` TEXT,
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `prescriptions` (
  `id` INT PRIMARY KEY,
  `pres_date` DATE,
  `appointment_id` INT,
  `patient_id` INT,
  `staff_id` INT,
  `notes` TEXT,
  `dx` TEXT,
  `cc` TEXT,
  `rf` TEXT,
  `inv` TEXT,
  `next_visit_day` VARCHAR(20),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `prescriptions_details` (
  `id` INT PRIMARY KEY,
  `prescription_id` INT,
  `medicine_name` VARCHAR(100),
  `dosage` VARCHAR(50),
  `frequency` VARCHAR(50),
  `duration` VARCHAR(20),
  `route` VARCHAR(50),
  `timing` VARCHAR(50),
  `meal_relation` VARCHAR(20),
  `notes` TEXT,
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `lab_reports` (
  `id` INT PRIMARY KEY,
  `patient_id` INT,
  `staff_id` INT,
  `test_type` VARCHAR(100),
  `sample_collected_date` DATE,
  `test_date` DATE,
  `report_date` DATE,
  `result_summary` TEXT,
  `document_link` VARCHAR(255),
  `lab_name` VARCHAR(100),
  `reference_range` TEXT,
  `result_value` VARCHAR(50),
  `unit` VARCHAR(20),
  `remarks` TEXT,
  `priority` VARCHAR(20),
  `sample_type` VARCHAR(50),
  `collected_by` VARCHAR(100),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `billing` (
  `id` INT PRIMARY KEY,
  `patient_id` INT,
  `appointment_id` INT,
  `total_amount` DECIMAL(10,2),
  `discount` DECIMAL(10,2),
  `tax` DECIMAL(10,2),
  `final_amount` DECIMAL(10,2),
  `payment_status` VARCHAR(20),
  `payment_method` VARCHAR(50),
  `payment_date` DATE,
  `billing_date` DATE,
  `invoice_number` VARCHAR(50),
  `remarks` TEXT,
  `staff_id` INT,
  `is_insured` BOOLEAN,
  `insurance_covered_amount` DECIMAL(10,2),
  `due_amount` DECIMAL(10,2),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `billing_details` (
  `id` INT PRIMARY KEY,
  `billing_id` INT,
  `admission_id` INT,
  `test_id` INT,
  `qty` DECIMAL(10,2),
  `amount` DECIMAL(10,2),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `test` (
  `id` INT PRIMARY KEY,
  `name` VARCHAR(100),
  `amount` DECIMAL(10,2),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `admissions` (
  `id` INT PRIMARY KEY,
  `patient_id` INT,
  `room_id` INT,
  `staff_id` INT,
  `admission_date` DATETIME,
  `discharge_date` DATETIME,
  `reason` TEXT,
  `insurance_approval` BOOLEAN,
  `initial_diagnosis` TEXT,
  `treatment_plan` TEXT,
  `nurse_id` INT,
  `notes` TEXT,
  `consulting_doctor` INT,
  `is_critical` BOOLEAN,
  `has_attendant` BOOLEAN,
  `attendant_name` VARCHAR(100),
  `discharge_summary` TEXT,
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `users` (
  `user_id` INT PRIMARY KEY,
  `username` VARCHAR(50),
  `password_hash` VARCHAR(255),
  `role` VARCHAR(50),
  `staff_id` INT,
  `patient_id` INT,
  `email` VARCHAR(100),
  `phone` VARCHAR(15),
  `is_active` BOOLEAN,
  `last_login` DATETIME,
  `timezone` VARCHAR(50),
  `security_question` VARCHAR(255),
  `security_answer` VARCHAR(255),
  `login_attempts` INT,
  `locked_until` DATETIME,
  `profile_image` VARCHAR(255),
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

CREATE TABLE `schedules` (
  `schedule_id` INT PRIMARY KEY,
  `staff_id` INT,
  `day_of_week` VARCHAR(10),
  `start_time` TIME,
  `end_time` TIME,
  `shift_type` VARCHAR(20),
  `location` VARCHAR(50),
  `is_available` BOOLEAN,
  `notes` TEXT,
  `valid_from` DATE,
  `valid_until` DATE,
  `is_recurring` BOOLEAN,
  `room_id` INT,
  `department_id` INT,
  `appointment_blocked` BOOLEAN,
  `break_start` TIME,
  `break_end` TIME,
  `approval_status` VARCHAR(20),
  `appointment_qty` INT,
  `status` INT,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` INT,
  `updated_by` INT
);

ALTER TABLE `patients` ADD FOREIGN KEY (`division_id`) REFERENCES `division` (`id`);

ALTER TABLE `patients` ADD FOREIGN KEY (`district_id`) REFERENCES `district` (`id`);

ALTER TABLE `patients` ADD FOREIGN KEY (`thana_id`) REFERENCES `thana` (`id`);

ALTER TABLE `staff` ADD FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

ALTER TABLE `staff` ADD FOREIGN KEY (`shift_id`) REFERENCES `shift` (`id`);

ALTER TABLE `staff` ADD FOREIGN KEY (`division_id`) REFERENCES `division` (`id`);

ALTER TABLE `staff` ADD FOREIGN KEY (`district_id`) REFERENCES `district` (`id`);

ALTER TABLE `staff` ADD FOREIGN KEY (`thana_id`) REFERENCES `thana` (`id`);

ALTER TABLE `staff` ADD FOREIGN KEY (`per_division_id`) REFERENCES `division` (`id`);

ALTER TABLE `staff` ADD FOREIGN KEY (`per_district_id`) REFERENCES `district` (`id`);

ALTER TABLE `staff` ADD FOREIGN KEY (`per_thana_id`) REFERENCES `thana` (`id`);

ALTER TABLE `appointments` ADD FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

ALTER TABLE `appointments` ADD FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

ALTER TABLE `appointments` ADD FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

ALTER TABLE `rooms` ADD FOREIGN KEY (`room_type_id`) REFERENCES `rooms_type` (`id`);

ALTER TABLE `rooms` ADD FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

ALTER TABLE `departments` ADD FOREIGN KEY (`head_id`) REFERENCES `staff` (`id`);

ALTER TABLE `prescriptions` ADD FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`);

ALTER TABLE `prescriptions` ADD FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

ALTER TABLE `prescriptions` ADD FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

ALTER TABLE `prescriptions_details` ADD FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`);

ALTER TABLE `lab_reports` ADD FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

ALTER TABLE `lab_reports` ADD FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

ALTER TABLE `billing` ADD FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

ALTER TABLE `billing` ADD FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`);

ALTER TABLE `billing` ADD FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

ALTER TABLE `billing_details` ADD FOREIGN KEY (`billing_id`) REFERENCES `billing` (`id`);

ALTER TABLE `billing_details` ADD FOREIGN KEY (`admission_id`) REFERENCES `admissions` (`id`);

ALTER TABLE `billing_details` ADD FOREIGN KEY (`test_id`) REFERENCES `test` (`id`);

ALTER TABLE `admissions` ADD FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

ALTER TABLE `admissions` ADD FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

ALTER TABLE `admissions` ADD FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

ALTER TABLE `admissions` ADD FOREIGN KEY (`nurse_id`) REFERENCES `staff` (`id`);

ALTER TABLE `admissions` ADD FOREIGN KEY (`consulting_doctor`) REFERENCES `staff` (`id`);

ALTER TABLE `users` ADD FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

ALTER TABLE `users` ADD FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

ALTER TABLE `schedules` ADD FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

ALTER TABLE `schedules` ADD FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

ALTER TABLE `schedules` ADD FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);
