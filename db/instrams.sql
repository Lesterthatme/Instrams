-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 16, 2025 at 10:36 PM
-- Server version: 11.7.1-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instrams`
--

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `insti_id` int(11) NOT NULL,
  `inti_name` varchar(100) NOT NULL,
  `acronym` varchar(20) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`insti_id`, `inti_name`, `acronym`, `logo`, `bg_color`) VALUES
(1, 'College of Agriculture', 'CA', 'CA_Logo.svg', 'CA'),
(2, 'College of Education', 'COED', 'COED_Logo.svg', 'COED'),
(3, 'College of Engineering and Technology', 'CET', 'CET_Logo.svg', 'CET'),
(4, 'College of Management', 'CM', 'CM_Logo.svg', 'CM'),
(5, 'DRT Campus', 'DRT', 'DRT_Logo.svg', 'DRT'),
(6, 'Balagtas Technical Vocational College', 'BTVC', 'BTVC_Logo.svg', 'BTVC'),
(7, 'Fortunato F. Halili National Agricultural School', 'FFHNAS', 'FFHNAS_Logo.svg', 'FFHNAS'),
(8, 'Institute of Arts and Sciences', 'IAS', 'IAS_Logo.svg', 'IAS'),
(9, 'Institute of Computer Studies', 'ICS', 'ICS_Logo.svg', 'ICS'),
(10, 'Institute of Veterenary Medicine', 'IVM', 'IVM_Logo.svg', 'IVM');

-- --------------------------------------------------------

--
-- Table structure for table `medal`
--

CREATE TABLE `medal` (
  `medal_id` int(11) NOT NULL,
  `insti_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `medal_type` varchar(20) NOT NULL,
  `multiplier` int(11) NOT NULL DEFAULT 1,
  `participant1` varchar(100) DEFAULT NULL,
  `participant2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(150) NOT NULL,
  `sub_category` varchar(150) DEFAULT NULL,
  `multiplier` int(11) NOT NULL DEFAULT 1,
  `gender` enum('Men','Women','Mixed') NOT NULL,
  `sport_icon` varchar(150) NOT NULL DEFAULT 'fa-solid fa-circle-exclamation',
  `sport_category` enum('Combat','Racket','Ball','Mind') NOT NULL,
  `has_done` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`sport_id`, `sport_name`, `sub_category`, `multiplier`, `gender`, `sport_icon`, `sport_category`, `has_done`) VALUES
(9, 'Arnis', 'Fin (50 kg below)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(10, 'Arnis', 'Bantam (51–55 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(11, 'Arnis', 'Feather (56–60 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(12, 'Arnis', 'Extra Light (61–65 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(13, 'Arnis', 'Half Light (66–70 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(14, 'Arnis', 'Light (71–75 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(15, 'Arnis', 'Half Middle (76–80 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(16, 'Arnis', 'Middle (81–85 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(17, 'Arnis', 'Heavy Weight (86 kg above)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(18, 'Arnis', 'Open Weight', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(19, 'Arnis', 'Fin (40 kg below)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(20, 'Arnis', 'Bantam (41–45 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(21, 'Arnis', 'Feather (46–50 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(22, 'Arnis', 'Extra Light (51–55 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(23, 'Arnis', 'Half Light (56–60 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(24, 'Arnis', 'Light (61–65 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(25, 'Arnis', 'Half Middle (66–70 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(26, 'Arnis', 'Middle (71–75 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(27, 'Arnis', 'Heavy Weight (76 kg above)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(28, 'Arnis', 'Open Weight', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(29, 'Taekwondo', 'Fin (54 kg below)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(30, 'Taekwondo', 'Fly (54–58 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(31, 'Taekwondo', 'Bantam (58–63 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(32, 'Taekwondo', 'Feather (63–68 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(33, 'Taekwondo', 'Light (68–73 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(34, 'Taekwondo', 'Welter (74–80 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(35, 'Taekwondo', 'Middle (80–87 kg)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(36, 'Taekwondo', 'Heavy (87 kg above)', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(37, 'Taekwondo', 'Fin (46 kg below)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(38, 'Taekwondo', 'Fly (46–49 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(39, 'Taekwondo', 'Bantam (49–53 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(40, 'Taekwondo', 'Feather (53–57 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(41, 'Taekwondo', 'Light (57–62 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(42, 'Taekwondo', 'Welter (62–67 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(43, 'Taekwondo', 'Middle (67–73 kg)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(44, 'Taekwondo', 'Heavy (73 kg above)', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Combat', 0),
(45, 'Badminton', 'Singles', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(46, 'Badminton', 'Doubles', 2, 'Men', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(47, 'Badminton', 'Singles', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(48, 'Badminton', 'Doubles', 2, 'Women', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(49, 'Badminton', 'Mixed Doubles', 2, 'Mixed', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(50, 'Table Tennis', 'Singles', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(51, 'Table Tennis', 'Doubles', 2, 'Men', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(52, 'Table Tennis', 'Singles', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(53, 'Table Tennis', 'Doubles', 2, 'Women', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(54, 'Table Tennis', 'Mixed Doubles', 2, 'Mixed', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(55, 'Lawn Tennis', 'Singles', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(56, 'Lawn Tennis', 'Doubles', 2, 'Men', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(57, 'Lawn Tennis', 'Singles', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(58, 'Lawn Tennis', 'Doubles', 2, 'Women', 'fa-solid fa-circle-exclamation', 'Racket', 0),
(59, 'Basketball', 'Team of 5', 5, 'Men', 'fa-solid fa-circle-exclamation', 'Ball', 0),
(60, 'Basketball', 'Team of 5', 5, 'Women', 'fa-solid fa-circle-exclamation', 'Ball', 0),
(61, 'Beach Volleyball', '2 players', 2, 'Men', 'fa-solid fa-circle-exclamation', 'Ball', 0),
(62, 'Beach Volleyball', '2 players', 2, 'Women', 'fa-solid fa-circle-exclamation', 'Ball', 0),
(63, 'Sepak Takraw', '3 players', 3, 'Men', 'fa-solid fa-circle-exclamation', 'Ball', 0),
(64, 'Sepak Takraw', '3 players', 3, 'Women', 'fa-solid fa-circle-exclamation', 'Ball', 0),
(65, 'Volleyball', 'Team of 6', 6, 'Men', 'fa-solid fa-circle-exclamation', 'Ball', 0),
(66, 'Volleyball', 'Team of 6', 6, 'Women', 'fa-solid fa-circle-exclamation', 'Ball', 0),
(67, 'Chess', 'Board 1', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(68, 'Chess', 'Board 2', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(69, 'Chess', 'Board 3', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(70, 'Chess', 'Board 4', 1, 'Men', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(71, 'Chess', 'Team Competition (4)', 4, 'Men', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(72, 'Chess', 'Board 1', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(73, 'Chess', 'Board 2', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(74, 'Chess', 'Board 3', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(75, 'Chess', 'Board 4', 1, 'Women', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(76, 'Chess', 'Team Competition (4)', 4, 'Women', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(77, 'Mobile Legends', 'Team of 5', 5, 'Men', 'fa-solid fa-circle-exclamation', 'Mind', 0),
(78, 'Mobile Legends', 'Team of 5', 5, 'Women', 'fa-solid fa-circle-exclamation', 'Mind', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`insti_id`);

--
-- Indexes for table `medal`
--
ALTER TABLE `medal`
  ADD PRIMARY KEY (`medal_id`),
  ADD KEY `insti_id` (`insti_id`),
  ADD KEY `event_id` (`sport_id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`sport_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `insti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medal`
--
ALTER TABLE `medal`
  MODIFY `medal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medal`
--
ALTER TABLE `medal`
  ADD CONSTRAINT `event_id` FOREIGN KEY (`sport_id`) REFERENCES `sport` (`sport_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `insti_id` FOREIGN KEY (`insti_id`) REFERENCES `institute` (`insti_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
