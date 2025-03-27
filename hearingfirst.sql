-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2025 at 05:25 PM
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
-- Database: `hearingfirst`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinics_details`
--

CREATE TABLE `clinics_details` (
  `clinic_id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `clinic_address` varchar(255) NOT NULL,
  `clinic_zipcode` varchar(20) NOT NULL,
  `assigned_phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clinics_details`
--

INSERT INTO `clinics_details` (`clinic_id`, `area`, `clinic_address`, `clinic_zipcode`, `assigned_phone_number`) VALUES
(1001, 'Pampanga', '1121 Mango St, San Francisco, Mabalacat, Pampanga', '2010', '09213166620'),
(1002, 'Pampanga', '1395 Sampaguita Ave, Anunas, Angeles City, Pampanga', '2009', '09213166621'),
(1003, 'Pampanga', '56 Rizal St, Santo Rosario, San Fernando, Pampanga', '2000', '09213166622'),
(2001, 'Batanes', '1056 Radiwan Rd, Mahatao, Batanes', '3901', '09213166623'),
(2002, 'Batanes', '119 Chavayan Ln, Sabtang, Batanes', '3904', '09213166644'),
(3001, 'Zambales', '2020 Narra Ave, Palanginan, Iba, Zambales', '2201', '09213166625'),
(4001, 'Quezon', '159 Rizal Ave, Alitao, Tayabas, Quezon', '4327', '09213164629');

-- --------------------------------------------------------

--
-- Table structure for table `earcleaning_process`
--

CREATE TABLE `earcleaning_process` (
  `earcleaning_id` int(11) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `clinic_id` int(11) DEFAULT NULL,
  `which_ear` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `earcleaning_price` int(11) NOT NULL DEFAULT 70,
  `earcleaning_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_process`
--

CREATE TABLE `order_process` (
  `order_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_each` float NOT NULL,
  `price_total` float NOT NULL,
  `payment` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_desc` varchar(300) NOT NULL,
  `quantity` int(11) NOT NULL,
  `prod_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`prod_id`, `prod_name`, `prod_desc`, `quantity`, `prod_price`) VALUES
(1001, 'Direct Audio Input Cord', 'A Direct Audio Input cable will plug into the DAI shoe of any BTE hearing instrument. The DAI cable plugs into the 3-pin socket located on the bottom of the DAI shoe, at the other end of the cable is a standard 3.5mm audio jack that will fit most headphone sockets.', 10, 3787.4),
(1002, 'Starkey HearClear Wax Guards', 'Designed to be used with all Starkey hearing aids that use a wax guard. Hear Clear wax guards are backwards compatible with the older Waxceptor wax guards.', 22, 408.85),
(1003, 'Hearing Aid Batteries', 'Rayovac Extra size 675 mercury free hearing aid batteries, colour coded blue. Used mainly for super power behind the ear (BTE) hearing aids.', 19, 650.44),
(1004, 'Snapfit Receiver Wires', 'Starkey Snapfit RIC Receiver Wires are compatible with 3 Series, Z Series, Muse, Halo, Livio and Evolv.', 0, 2861.92),
(1005, 'USB Bluetooth Dongle', 'Can be used to connect various wireless streamers to a laptop / PC for media streaming and hands free Skype type calling via bluetooth.', 7, 3872.51),
(1006, 'Cleaning & Storage Case', 'Smart zip-up canvas storage case to keep your hearing aid cleaning consumables together, can also double up as a travel case for your hearing aids.', 19, 1631.67),
(1007, 'Phonak & Unitron Domes', 'If your hearing aids are anything before Marvel technology then you will need SDS3 domes.', 0, 516.63),
(1008, 'Ear Relief Ear Drops', 'Cl-ear Ear Relief Ear Drops effectively soothe and reduce ear pain, itching and inflammation of the outer ear canal.', 5, 888.31);

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `staff_id` int(11) NOT NULL,
  `assigned_clinic` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_age` int(11) NOT NULL,
  `staff_gender` varchar(30) NOT NULL,
  `company_name` varchar(100) DEFAULT 'HearingFirst',
  `staff_role` varchar(200) DEFAULT NULL,
  `staff_email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_id`, `assigned_clinic`, `staff_name`, `staff_age`, `staff_gender`, `company_name`, `staff_role`, `staff_email`) VALUES
(1, 1001, 'Maria Bundalian', 45, 'Female', 'HearingFirst', 'Specialist Practitioner', 'mariabunds@gmail.com'),
(2, 1001, 'Juan Wilson Charlotte', 50, 'Male', 'HearingFirst', 'Lead Audiologist', 'charlotte@gmail.com'),
(3, 1003, 'Anderson Reyes', 53, 'Male', 'HearingFirst', 'Senior Specialist Audiologist', 'andereyes@gmail.com'),
(4, 2001, 'Anderson Lacanlale', 49, 'Female', 'HearingFirst', 'Senior Audiologist', 'ander_lale@gmail.com'),
(5, 2002, 'Liza Lim', 31, 'Female', 'HearingFirst', 'Senior Audiologist', 'lizalim@gmail.com'),
(6, 3001, 'Carlos Mangacu', 46, 'Male', 'HearingFirst', 'Senior Audiologist', 'carlosaq@gmail.com'),
(7, 3001, 'Sofia Tan', 34, 'Female', 'HearingFirst', 'Senior Audiologist', 'sofiatan@gmail.com'),
(8, 4001, 'Miguel Lalic', 28, 'Male', 'HearingFirst', 'Audiologist', 'gellalic@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `user_count` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone_num` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `bank_code` varchar(30) NOT NULL,
  `money_held` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`user_count`, `first_name`, `last_name`, `age`, `email`, `password`, `phone_num`, `address`, `city`, `province`, `zipcode`, `payment_type`, `bank_code`, `money_held`) VALUES
(17, 'Aaron Daniel', 'Lozano', 21, 'l0zd4n3.aa@gmail.com', '$2y$10$ETtWt4YdvMVEjksTolg/iuJcbO7C4Mq5Bm0gEwwCITzeG2aT9OuZu', '09213167699', '1208 Chico St. San Francisco, Mabalacat, Pampanga', 'Mabalacat', 'Pampanga', '2010', 'GCash', '111', 25800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinics_details`
--
ALTER TABLE `clinics_details`
  ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `earcleaning_process`
--
ALTER TABLE `earcleaning_process`
  ADD PRIMARY KEY (`earcleaning_id`),
  ADD KEY `user_email` (`user_email`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `clinic_id` (`clinic_id`);

--
-- Indexes for table `order_process`
--
ALTER TABLE `order_process`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `email` (`email`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `assigned_clinic` (`assigned_clinic`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `user_count` (`user_count`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `earcleaning_process`
--
ALTER TABLE `earcleaning_process`
  MODIFY `earcleaning_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `order_process`
--
ALTER TABLE `order_process`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `user_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `earcleaning_process`
--
ALTER TABLE `earcleaning_process`
  ADD CONSTRAINT `earcleaning_process_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `users_details` (`email`),
  ADD CONSTRAINT `earcleaning_process_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff_details` (`staff_id`),
  ADD CONSTRAINT `earcleaning_process_ibfk_3` FOREIGN KEY (`clinic_id`) REFERENCES `clinics_details` (`clinic_id`);

--
-- Constraints for table `order_process`
--
ALTER TABLE `order_process`
  ADD CONSTRAINT `order_process_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users_details` (`email`),
  ADD CONSTRAINT `order_process_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `product_details` (`prod_id`);

--
-- Constraints for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD CONSTRAINT `staff_details_ibfk_1` FOREIGN KEY (`assigned_clinic`) REFERENCES `clinics_details` (`clinic_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
