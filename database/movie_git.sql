-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 05:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_git`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieID` int(11) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL,
  `bookingEmail` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `ORDERID` varchar(255) NOT NULL,
  `DATE-TIME` datetime NOT NULL DEFAULT current_timestamp(),
  `seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieID`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`, `bookingEmail`, `amount`, `ORDERID`, `DATE-TIME`, `seat_id`) VALUES
(71, 6, 'private-hall', 'imax', '14-3', '15-00', 'xyz', 'abc', '000000000', '000@gmail.com', '5000.00', 'cash', '2020-12-14 12:20:31', 0),
(72, 5, 'main-hall', '2d', '13-3', '15-00', 'ala', 'aouiti', '55414073', 'alaaouiti96@gmail.com', 'Not Paid', 'ARVR96707489', '2021-03-25 02:28:00', 0),
(73, 5, 'vip-hall', '3d', '12-3', '09-00', 'ala', 'aouiti', '55414073', 'alaaouiti96@gmail.com', 'Not Paid', 'ARVR46085626', '2021-03-25 02:31:20', 0),
(74, 5, 'main-hall', '3d', '12-3', '15-00', 'ala', 'aouiti', '55414073', 'alaaouiti96@gmail.com', 'Not Paid', 'ARVR55462276', '2021-03-25 15:51:43', 0),
(75, 6, 'vip-hall', '3d', '12-3', '09-00', 'ala', 'aouiti', '55414073', 'alaaouiti96@gmail.com', 'Not Paid', 'ARVR21745394', '2021-03-25 17:36:14', 0),
(76, NULL, '', NULL, '', '', '', NULL, '', '', '', '', '2021-03-26 08:19:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `msgID` int(12) NOT NULL,
  `senderfName` varchar(50) NOT NULL,
  `senderlName` varchar(50) DEFAULT NULL,
  `sendereMail` varchar(100) NOT NULL,
  `senderfeedback` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` int(11) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL,
  `mainhall` int(11) NOT NULL,
  `viphall` int(11) NOT NULL,
  `privatehall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`, `mainhall`, `viphall`, `privatehall`) VALUES
(3, 'img/movie-poster-3.jpg', 'The Lego Movie', 'Animation, Action, Adventure', 110, '2014-02-07', 'Phil Lord, Christopher Miller', 'Chris Pratt, Will Ferrell, Elizabeth Banks', 0, 0, 0),
(4, 'img/movie-poster-4.jpg', 'Nadi Elregal Elserri ', 'Comedy', 105, '2019-01-23', ' Ayman Uttar', 'Karim Abdul Aziz, Ghada Adel, Maged El Kedwany, Nesreen Tafesh, Bayyumy Fouad, Moataz El Tony ', 0, 0, 0),
(5, 'img/movie-poster-5.jpg', 'VICE', 'Biography, Comedy, Drama', 132, '2018-12-25', 'Adam McKay', 'Christian Bale, Amy Adams, Steve Carell', 0, 0, 0),
(6, 'img/movie-poster-6.jpg', 'The Vanishing', 'Crime, Mystery, Thriller', 107, '2019-01-04', 'Kristoffer Nyholm', 'Gerard Butler, Peter Mullan, Connor Swindells', 0, 0, 0),
(69, 'img/movie-poster-1.jpg', 'Captain Marvel', 'Action', 2, '2021-03-26', 'Phil Lord, Christopher Miller', 'Assad Fouladkar', 0, 20, 0),
(70, 'img/movie-poster-1.jpg', 'Captain Marvel', 'Action', 2, '2021-03-31', 'Phil Lord, Christopher Miller', 'Assad Fouladkar', 0, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` text NOT NULL,
  `price` float NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `price`, `available`) VALUES
('A1', 10, 1),
('A2', 10, 1),
('A3', 10, 1),
('A4', 10, 1),
('B1', 10, 1),
('B2', 10, 1),
('B3', 10, 1),
('B4', 10, 1),
('B5', 10, 1),
('B6', 10, 1),
('B7', 10, 1),
('B8', 10, 1),
('B9', 10, 0),
('B10', 10, 0),
('B11', 10, 1),
('B12', 10, 1),
('B13', 10, 1),
('B14', 10, 1),
('B15', 10, 1),
('B16', 10, 1),
('B17', 10, 1),
('B18', 10, 1),
('C1', 10, 1),
('C2', 10, 1),
('C3', 10, 1),
('C4', 10, 1),
('C5', 10, 0),
('C6', 10, 0),
('C7', 10, 0),
('C8', 10, 1),
('C9', 10, 1),
('C10', 10, 1),
('C11', 10, 1),
('C12', 10, 1),
('C13', 10, 1),
('C14', 10, 1),
('C15', 10, 1),
('C16', 10, 1),
('C17', 10, 1),
('C18', 10, 1),
('D1', 10, 1),
('D2', 10, 1),
('D3', 10, 1),
('D4', 10, 1),
('D5', 10, 1),
('D6', 10, 1),
('D7', 10, 1),
('D8', 10, 1),
('D9', 10, 1),
('D10', 10, 1),
('D11', 10, 1),
('D12', 10, 1),
('D13', 10, 1),
('D14', 10, 1),
('D15', 10, 1),
('D16', 10, 0),
('D17', 10, 0),
('D18', 10, 0),
('E1', 10, 1),
('E2', 10, 1),
('E3', 10, 1),
('E4', 10, 1),
('E5', 10, 1),
('E6', 10, 1),
('E7', 10, 1),
('E8', 10, 1),
('E9', 10, 1),
('E10', 10, 0),
('E11', 10, 0),
('E12', 10, 1),
('E13', 10, 1),
('E14', 10, 1),
('E15', 10, 1),
('E16', 10, 1),
('E17', 10, 1),
('E18', 10, 1),
('F1', 10, 1),
('F2', 10, 0),
('F3', 10, 1),
('F4', 10, 1),
('F5', 10, 1),
('F6', 10, 1),
('F7', 10, 1),
('F8', 10, 1),
('F9', 10, 1),
('F10', 10, 1),
('F11', 10, 1),
('F12', 10, 1),
('F13', 10, 1),
('F14', 10, 1),
('F15', 10, 1),
('F16', 10, 1),
('F17', 10, 1),
('F18', 10, 1),
('G1', 10, 1),
('G2', 10, 1),
('G3', 10, 1),
('G4', 10, 1),
('G5', 10, 1),
('G6', 10, 1),
('G7', 10, 0),
('G8', 10, 0),
('G9', 10, 1),
('G10', 10, 1),
('G11', 10, 1),
('G12', 10, 1),
('G13', 10, 1),
('G14', 10, 1),
('G15', 10, 1),
('G16', 10, 1),
('G17', 10, 1),
('G18', 10, 1),
('J1', 10, 1),
('J2', 10, 1),
('J3', 10, 1),
('J4', 10, 1),
('J5', 10, 0),
('J6', 10, 0),
('J7', 10, 0),
('J8', 10, 1),
('J9', 10, 1),
('J10', 10, 1),
('J11', 10, 1),
('J12', 10, 1),
('J13', 10, 1),
('J14', 10, 1),
('J15', 10, 1),
('J16', 10, 1),
('J17', 10, 1),
('J18', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, '123', 'john', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `foreign_key_movieID` (`movieID`),
  ADD KEY `foreign_key_ORDERID` (`ORDERID`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`msgID`),
  ADD UNIQUE KEY `msgID` (`msgID`);

--
-- Indexes for table `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `msgID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD CONSTRAINT `foreign_key_movieID` FOREIGN KEY (`movieID`) REFERENCES `movietable` (`movieID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
