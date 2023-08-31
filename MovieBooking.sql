-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2023 at 02:40 PM
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
-- Database: `MovieBooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `Auditorium`
--

CREATE TABLE `Auditorium` (
  `Aud_id` varchar(2) NOT NULL,
  `Row_no` varchar(1) NOT NULL,
  `Col_no` int(1) NOT NULL,
  `Type` varchar(6) NOT NULL,
  `Selected` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Auditorium`
--

INSERT INTO `Auditorium` (`Aud_id`, `Row_no`, `Col_no`, `Type`, `Selected`) VALUES
('CC', 'B', 1, 'BACK', 0),
('CC', 'B', 2, 'BACK', 0),
('CC', 'B', 3, 'BACK', 0),
('CC', 'F', 1, 'FRONT', 0),
('CC', 'F', 2, 'FRONT', 0),
('CC', 'F', 3, 'FRONT', 0),
('CC', 'M', 1, 'MIDDLE', 0),
('CC', 'M', 2, 'MIDDLE', 0),
('CC', 'M', 3, 'MIDDLE', 0),
('DD', 'B', 1, 'BACK', 0),
('DD', 'B', 2, 'BACK', 0),
('DD', 'B', 3, 'BACK', 0),
('DD', 'F', 1, 'FRONT', 0),
('DD', 'F', 2, 'FRONT', 0),
('DD', 'F', 3, 'FRONT', 0),
('DD', 'M', 1, 'MIDDLE', 0),
('DD', 'M', 2, 'MIDDLE', 0),
('DD', 'M', 3, 'MIDDLE', 0),
('HH', 'B', 1, 'BACK', 0),
('HH', 'B', 2, 'BACK', 0),
('HH', 'B', 3, 'BACK', 0),
('HH', 'F', 1, 'FRONT', 0),
('HH', 'F', 2, 'FRONT', 0),
('HH', 'F', 3, 'FRONT', 0),
('HH', 'M', 1, 'MIDDLE', 0),
('HH', 'M', 2, 'MIDDLE', 0),
('HH', 'M', 3, 'MIDDLE', 0),
('KK', 'B', 1, 'BACK', 0),
('KK', 'B', 2, 'BACK', 0),
('KK', 'B', 3, 'BACK', 0),
('KK', 'F', 1, 'FRONT', 0),
('KK', 'F', 2, 'FRONT', 0),
('KK', 'F', 3, 'FRONT', 0),
('KK', 'M', 1, 'MIDDLE', 0),
('KK', 'M', 2, 'MIDDLE', 0),
('KK', 'M', 3, 'MIDDLE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE `Movie` (
  `Title` varchar(40) NOT NULL,
  `Genre` varchar(6) NOT NULL,
  `Language` varchar(3) NOT NULL,
  `AgeRating` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`Title`, `Genre`, `Language`, `AgeRating`) VALUES
('3 Idiots', 'Drama', 'HIN', 'UA'),
('Andhadhun', 'Crime', 'HIN', 'UA'),
('Back To The Future', 'Drama', 'ENG', 'U'),
('City Lights', 'Comedy', 'ENG', 'U'),
('Cure', 'Horror', 'JAP', 'A'),
('Goodfellas', 'Crime', 'ENG', 'A'),
('Hera Pheri', 'Comedy', 'HIN', 'U'),
('House', 'Comedy', 'JAP', 'A'),
('I Saw The Devil', 'Crime', 'KOR', 'UA'),
('Memories of Murder', 'Crime', 'KOR', 'A'),
('Monty Python and The Holy Grail', 'Comedy', 'ENG', 'U'),
('Parasite', 'Drama', 'KOR', 'A'),
('Shoplifters', 'Drama', 'JAP', 'U'),
('The Shining', 'Horror', 'ENG', 'A'),
('The Thing', 'Horror', 'ENG', 'A'),
('Tumbbad', 'Horror', 'HIN', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `Screened_At`
--

CREATE TABLE `Screened_At` (
  `Title` varchar(40) NOT NULL,
  `Aud_id` varchar(2) NOT NULL,
  `Time` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Screened_At`
--

INSERT INTO `Screened_At` (`Title`, `Aud_id`, `Time`) VALUES
('3 Idiots', 'DD', '3PM'),
('Andhadhun', 'CC', '3PM'),
('Back To The Future', 'DD', '6PM'),
('City Lights', 'KK', '3PM'),
('Cure', 'HH', '9AM'),
('Goodfellas', 'CC', '12PM'),
('Hera Pheri', 'KK', '6PM'),
('House', 'KK', '12PM'),
('I Saw The Devil', 'CC', '9AM'),
('Memories of Murder', 'CC', '6PM'),
('Monty Python and The Holy Grail', 'KK', '9AM'),
('Parasite', 'DD', '9AM'),
('Shoplifters', 'DD', '12PM'),
('The Shining', 'HH', '12PM'),
('The Thing', 'HH', '3PM'),
('Tumbbad', 'HH', '6PM');

-- --------------------------------------------------------

--
-- Table structure for table `Ticket`
--

CREATE TABLE `Ticket` (
  `TicketID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` decimal(10,0) DEFAULT NULL,
  `Title` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ticket`
--

INSERT INTO `Ticket` (`TicketID`, `Name`, `Email`, `Phone`, `Title`) VALUES
(4, NULL, NULL, NULL, 'Parasite'),
(5, NULL, NULL, NULL, 'Andhadhun'),
(7, NULL, NULL, NULL, '3 Idiots'),
(8, NULL, NULL, NULL, 'I Saw The Devil'),
(9, NULL, NULL, NULL, 'Back To The Future'),
(10, NULL, NULL, NULL, 'Goodfellas'),
(11, NULL, NULL, NULL, 'Andhadhun'),
(12, NULL, NULL, NULL, 'Memories of Murder'),
(13, NULL, NULL, NULL, 'City Lights'),
(14, NULL, NULL, NULL, 'Monty Python'),
(15, NULL, NULL, NULL, 'Hera Pheri'),
(16, NULL, NULL, NULL, 'House'),
(17, NULL, NULL, NULL, 'The Thing'),
(18, NULL, NULL, NULL, 'The Shining'),
(19, NULL, NULL, NULL, 'Cure'),
(20, NULL, NULL, NULL, 'Tumbbad'),
(21, NULL, NULL, NULL, 'City Lights'),
(22, NULL, NULL, NULL, 'City Lights'),
(23, NULL, NULL, NULL, '3 Idiots'),
(24, NULL, NULL, NULL, '3 Idiots'),
(25, NULL, NULL, NULL, '3 Idiots'),
(26, NULL, NULL, NULL, '3 Idiots'),
(27, NULL, NULL, NULL, '3 Idiots'),
(28, NULL, NULL, NULL, '3 Idiots'),
(29, NULL, NULL, NULL, '3 Idiots'),
(30, NULL, NULL, NULL, 'The Shining'),
(31, NULL, NULL, NULL, 'The Shining'),
(32, NULL, NULL, NULL, 'The Shining'),
(33, NULL, NULL, NULL, 'The Shining'),
(34, NULL, NULL, NULL, 'City Lights'),
(35, NULL, NULL, NULL, 'City Lights'),
(36, NULL, NULL, NULL, '3 Idiots'),
(37, NULL, NULL, NULL, '3 Idiots'),
(38, NULL, NULL, NULL, '3 Idiots'),
(39, NULL, NULL, NULL, '3 Idiots'),
(40, NULL, NULL, NULL, '3 Idiots'),
(41, NULL, NULL, NULL, '3 Idiots'),
(42, NULL, NULL, NULL, '3 Idiots'),
(43, NULL, NULL, NULL, '3 Idiots'),
(44, NULL, NULL, NULL, '3 Idiots'),
(45, NULL, NULL, NULL, '3 Idiots'),
(46, NULL, NULL, NULL, '3 Idiots'),
(47, NULL, NULL, NULL, '3 Idiots'),
(48, NULL, NULL, NULL, '3 Idiots'),
(49, NULL, NULL, NULL, '3 Idiots'),
(50, NULL, NULL, NULL, '3 Idiots'),
(51, NULL, NULL, NULL, '3 Idiots'),
(52, NULL, NULL, NULL, '3 Idiots'),
(53, NULL, NULL, NULL, '3 Idiots'),
(54, NULL, NULL, NULL, '3 Idiots'),
(55, NULL, NULL, NULL, '3 Idiots'),
(56, NULL, NULL, NULL, '3 Idiots'),
(57, NULL, NULL, NULL, '3 Idiots'),
(58, NULL, NULL, NULL, '3 Idiots'),
(59, NULL, NULL, NULL, '3 Idiots'),
(60, NULL, NULL, NULL, '3 Idiots'),
(61, NULL, NULL, NULL, '3 Idiots'),
(62, NULL, NULL, NULL, '3 Idiots'),
(63, NULL, NULL, NULL, '3 Idiots'),
(64, NULL, NULL, NULL, '3 Idiots'),
(65, NULL, NULL, NULL, '3 Idiots'),
(66, NULL, NULL, NULL, '3 Idiots'),
(67, NULL, NULL, NULL, '3 Idiots'),
(68, NULL, NULL, NULL, '3 Idiots'),
(69, NULL, NULL, NULL, '3 Idiots'),
(70, NULL, NULL, NULL, '3 Idiots'),
(71, NULL, NULL, NULL, '3 Idiots'),
(72, NULL, NULL, NULL, '3 Idiots'),
(73, NULL, NULL, NULL, '3 Idiots'),
(74, NULL, NULL, NULL, '3 Idiots'),
(75, NULL, NULL, NULL, '3 Idiots'),
(76, NULL, NULL, NULL, '3 Idiots'),
(77, NULL, NULL, NULL, '3 Idiots'),
(78, NULL, NULL, NULL, 'Goodfellas'),
(79, NULL, NULL, NULL, 'The Shining'),
(80, NULL, NULL, NULL, 'The Shining'),
(81, NULL, NULL, NULL, 'The Shining'),
(82, NULL, NULL, NULL, 'The Shining'),
(83, NULL, NULL, NULL, 'The Shining'),
(84, NULL, NULL, NULL, 'The Shining'),
(85, NULL, NULL, NULL, 'The Shining'),
(86, NULL, NULL, NULL, 'The Shining'),
(87, NULL, NULL, NULL, 'The Shining'),
(88, NULL, NULL, NULL, 'The Shining'),
(89, NULL, NULL, NULL, 'The Shining'),
(90, NULL, NULL, NULL, 'The Shining'),
(91, NULL, NULL, NULL, 'The Shining'),
(103, NULL, NULL, NULL, '3 Idiots'),
(104, NULL, NULL, NULL, '3 Idiots'),
(105, NULL, NULL, NULL, '3 Idiots'),
(106, NULL, NULL, NULL, 'Andhadhun'),
(107, NULL, NULL, NULL, 'Goodfellas'),
(108, NULL, NULL, NULL, 'Goodfellas'),
(109, NULL, NULL, NULL, 'Goodfellas'),
(110, NULL, NULL, NULL, 'Goodfellas'),
(112, NULL, NULL, NULL, '3 Idiots'),
(113, NULL, NULL, NULL, '3 Idiots'),
(114, NULL, NULL, NULL, 'Andhadhun'),
(115, NULL, NULL, NULL, 'Andhadhun'),
(116, NULL, NULL, NULL, 'Andhadhun'),
(117, NULL, NULL, NULL, 'The Shining'),
(118, NULL, NULL, NULL, 'City Lights');

--
-- Triggers `Ticket`
--
DELIMITER $$
CREATE TRIGGER `Seat_Clear` AFTER INSERT ON `Ticket` FOR EACH ROW UPDATE `Auditorium` SET `Selected`=0 WHERE 1
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Ticket_Seat`
--

CREATE TABLE `Ticket_Seat` (
  `TicketID` int(4) NOT NULL,
  `Seat_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ticket_Seat`
--

INSERT INTO `Ticket_Seat` (`TicketID`, `Seat_no`) VALUES
(106, 'CCB2,CCF2,CCM1,CCM2,CCM3'),
(116, 'CCB2,CCF2,CCM2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Auditorium`
--
ALTER TABLE `Auditorium`
  ADD PRIMARY KEY (`Aud_id`,`Row_no`,`Col_no`);

--
-- Indexes for table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `Screened_At`
--
ALTER TABLE `Screened_At`
  ADD PRIMARY KEY (`Title`,`Aud_id`);

--
-- Indexes for table `Ticket`
--
ALTER TABLE `Ticket`
  ADD PRIMARY KEY (`TicketID`);

--
-- Indexes for table `Ticket_Seat`
--
ALTER TABLE `Ticket_Seat`
  ADD PRIMARY KEY (`TicketID`,`Seat_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Ticket`
--
ALTER TABLE `Ticket`
  MODIFY `TicketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
