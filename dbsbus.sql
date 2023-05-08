-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2023 at 04:09 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(8) NOT NULL AUTO_INCREMENT,
  `pid` int(8) NOT NULL,
  `Rdes` varchar(100) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `pid`, `Rdes`) VALUES
(2, 1234, 'frfff');

-- --------------------------------------------------------

--
-- Table structure for table `tbipassanger`
--

DROP TABLE IF EXISTS `tbipassanger`;
CREATE TABLE IF NOT EXISTS `tbipassanger` (
  `pid` int(8) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pemail` varchar(35) NOT NULL,
  `pphone` int(8) NOT NULL,
  `Dob` date NOT NULL,
  `paddress` varchar(25) NOT NULL,
  `seq` varchar(60) NOT NULL,
  `ans` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbipassanger`
--

INSERT INTO `tbipassanger` (`pid`, `pname`, `pemail`, `pphone`, `Dob`, `paddress`, `seq`, `ans`, `password`) VALUES
(8556, 'new p', 'nnor@gmail.com', 96857421, '1996-05-20', 'suhar', 'What was the name of your favorite teacher?', 's', '666666Aa@');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `aid` int(8) NOT NULL,
  `aname` varchar(25) NOT NULL,
  `phone` int(8) NOT NULL,
  `email` varchar(35) NOT NULL,
  `seq` varchar(60) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`aid`, `aname`, `phone`, `email`, `seq`, `answer`, `password`) VALUES
(1234, 'Aaisha', 98574521, 'Aaisha@gmail.com', 'What is your favorite animal?', 'cat', '555555Aa@');

-- --------------------------------------------------------

--
-- Table structure for table `tblbus`
--

DROP TABLE IF EXISTS `tblbus`;
CREATE TABLE IF NOT EXISTS `tblbus` (
  `Bus_id` int(8) NOT NULL AUTO_INCREMENT,
  `Bus_Name` varchar(35) NOT NULL,
  `Capacity` int(2) NOT NULL,
  `status` varchar(20) NOT NULL COMMENT 'Deleted or not',
  PRIMARY KEY (`Bus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbus`
--

INSERT INTO `tblbus` (`Bus_id`, `Bus_Name`, `Capacity`, `status`) VALUES
(2, 'new Bus', 20, ''),
(3, 'bus suharx', 27, ''),
(4, 'bus shinas', 30, 'Deleted');

-- --------------------------------------------------------

--
-- Table structure for table `tblbusproblem`
--

DROP TABLE IF EXISTS `tblbusproblem`;
CREATE TABLE IF NOT EXISTS `tblbusproblem` (
  `Problem_id` int(8) NOT NULL AUTO_INCREMENT,
  `Bus_id` int(8) NOT NULL,
  `D_id` int(8) NOT NULL,
  `Problem` text NOT NULL,
  `Problem_status` varchar(25) NOT NULL,
  PRIMARY KEY (`Problem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbusproblem`
--

INSERT INTO `tblbusproblem` (`Problem_id`, `Bus_id`, `D_id`, `Problem`, `Problem_status`) VALUES
(2, 3, 455222, 'dddddddddd', 'Repair');

-- --------------------------------------------------------

--
-- Table structure for table `tbldriver`
--

DROP TABLE IF EXISTS `tbldriver`;
CREATE TABLE IF NOT EXISTS `tbldriver` (
  `D_id` int(8) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` int(8) NOT NULL,
  `address` varchar(25) NOT NULL,
  `seq` varchar(60) NOT NULL,
  `answer` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`D_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldriver`
--

INSERT INTO `tbldriver` (`D_id`, `dname`, `email`, `phone`, `address`, `seq`, `answer`, `password`, `status`) VALUES
(2323, 'salah Mohammed', 'salah414r@gmail.com', 96857466, 'muscat', 'What was the name of your favorite teacher?', 'Bader', '333333Aa@', ''),
(455222, 'Ahmed salam', 'ahmed211p@email.com', 96857433, 'suhar', 'What was the name of your favorite teacher?', 'Fatma', '123456Aa@', ''),
(987456, 'Abdullah Rashid', 'Abdullah74om@gmail.com', 96857412, 'sur', 'What was the name of your favorite teacher?', 'hassan', '12345678', ''),
(96857452, 'New Driverx', 'nrwDriverx@email.com', 96857433, 'muscatx', 'What was the name of your favorite teacher?', 'xx', '123456Aa@', 'Deleted');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

DROP TABLE IF EXISTS `tblpayment`;
CREATE TABLE IF NOT EXISTS `tblpayment` (
  `bookingID` int(8) NOT NULL AUTO_INCREMENT,
  `Ticket_id` int(8) NOT NULL,
  `pid` int(8) NOT NULL,
  `booking_date` date NOT NULL,
  `mode` varchar(10) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `cardnum` varchar(14) NOT NULL,
  `Number_ofTicket` int(4) NOT NULL,
  `Total_Price` double NOT NULL,
  PRIMARY KEY (`bookingID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`bookingID`, `Ticket_id`, `pid`, `booking_date`, `mode`, `card_name`, `cardnum`, `Number_ofTicket`, `Total_Price`) VALUES
(12, 4, 1234, '2023-05-07', 'online', 'ahmed', '22222222222222', 3, 63);

-- --------------------------------------------------------

--
-- Table structure for table `tblticket`
--

DROP TABLE IF EXISTS `tblticket`;
CREATE TABLE IF NOT EXISTS `tblticket` (
  `Ticket_id` int(8) NOT NULL AUTO_INCREMENT,
  `Bus_id` int(8) NOT NULL,
  `D_id` int(8) NOT NULL,
  `T_date` date NOT NULL,
  `T_time` time NOT NULL,
  `available_ticket` int(2) NOT NULL,
  `price` double NOT NULL,
  `state` varchar(35) NOT NULL,
  `bus_from` varchar(35) NOT NULL,
  `bus_to` varchar(35) NOT NULL,
  `Tstatus` int(1) NOT NULL COMMENT 'Deleted=1, not deleted=0',
  PRIMARY KEY (`Ticket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblticket`
--

INSERT INTO `tblticket` (`Ticket_id`, `Bus_id`, `D_id`, `T_date`, `T_time`, `available_ticket`, `price`, `state`, `bus_from`, `bus_to`, `Tstatus`) VALUES
(3, 2, 1234, '2023-05-07', '20:34:00', 22, 22, 'Suhar', 'souq suhar', 'altrif', 0),
(4, 2, 455222, '2023-05-13', '20:37:00', 18, 21, 'Muscat', 'x', 'c', 0),
(5, 3, 987456, '2023-05-17', '20:36:00', 22, 21, 'Salalah', 'zz', 'tt', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
