-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2015 at 11:02 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imaruthi_fms_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `fms_appartments`
--

CREATE TABLE IF NOT EXISTS `fms_appartments` (
  `appartmentid` int(100) NOT NULL AUTO_INCREMENT,
  `apartmentname` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `totalblock` int(11) DEFAULT NULL,
  `totalflats` int(11) DEFAULT NULL,
  `numberofmem` int(11) NOT NULL,
  `vendors` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `maintenancecharge` varchar(100) NOT NULL,
  `photoname` varchar(255) NOT NULL,
  `photopath` varchar(255) NOT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createdtime` datetime NOT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifiedtime` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`appartmentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `fms_appartments`
--

INSERT INTO `fms_appartments` (`appartmentid`, `apartmentname`, `address`, `totalblock`, `totalflats`, `numberofmem`, `vendors`, `city`, `pincode`, `maintenancecharge`, `photoname`, `photopath`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'MIIT', 'No.94, Pillaiyar Koil Street,\r\n(Facing Valluvar Street),\r\nJaffarkhanpet', 6, 6, 0, '', 'Madurai', '600083', '', '', '', 1, '2015-07-20 11:19:29', 1, '2015-09-05 04:21:22', 1),
(2, 'Chennai Appartment', 'CHENNAI', 12, 100, 0, '13#37#38#39#4', 'Chennai', '600033', '3000', '', '', 1, '2015-08-05 10:32:45', 1, '2015-08-31 04:01:46', 1),
(6, 'Chennai Appartment', 'test', 5, 10, 0, '40#44#45#72', 'Chennai', '600089', '2000', '', '', 1, '2015-08-31 04:01:30', 1, '2015-09-05 04:21:17', 1),
(7, 'apartment 2', 'test', 5, 10, 0, '41#46#47', 'Madurai', '638002', '', '', '', 1, '2015-08-31 04:02:15', 1, '2015-09-06 11:03:09', 1),
(8, 'test', 'test', 0, 0, 0, '40', 'Chennai', 'test', '', '', '', 1, '2015-09-01 09:54:33', 1, '2015-09-01 09:54:47', 1),
(9, 'princess', 'princess', 65, 32, 0, '40#41#44#46', 'coimbatore', '53253232', '', '', '', 1, '2015-09-01 10:49:31', 1, '2015-09-01 10:49:31', 0),
(10, 'Gani Residency', 'Gani, Madipakkam, Pallikaranai', 4, 15, 0, '44', 'Chennai', '600100', '', '', '', 1, '2015-09-02 12:21:40', 1, '2015-09-02 12:21:40', 0),
(11, 'ragav apartment', '111', 1, 1, 0, '72', 'Chennai', '1', '', '', '', 1, '2015-09-03 10:03:41', 1, '2015-09-03 10:03:41', 0),
(12, 'home sweet home', '367/f , central .chennai', 1, 13, 0, '40', 'Chennai', '560022', '', '', '', 1, '2015-09-04 01:35:31', 1, '2015-09-04 01:35:31', 0),
(13, 'flow', 'test', 23, 54, 120, '45#46', 'Chennai', '6452133', '', '412470-svetik.jpg', 'Documents/ApartmentPhotos/flow-20150906112713.jpg', 1, '2015-09-06 11:27:13', 1, '2015-09-06 11:27:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_assets`
--

CREATE TABLE IF NOT EXISTS `fms_assets` (
  `assetid` int(100) NOT NULL AUTO_INCREMENT,
  `aptid` int(100) NOT NULL,
  `assetname` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `serialnumber` varchar(100) NOT NULL,
  `amcdate` date DEFAULT NULL,
  `expiredate` date DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `attachmentname` varchar(255) NOT NULL,
  `vendorname` varchar(100) NOT NULL,
  `contactnumber` varchar(100) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createddate` datetime NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifieddate` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`assetid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fms_assets`
--

INSERT INTO `fms_assets` (`assetid`, `aptid`, `assetname`, `model`, `companyname`, `serialnumber`, `amcdate`, `expiredate`, `image`, `attachmentname`, `vendorname`, `contactnumber`, `createdby`, `createddate`, `modifiedby`, `modifieddate`, `status`) VALUES
(1, 6, 'test assets', 'test assets', 'test assets', 'test assets', '2015-09-01', '2015-09-03', 'Documents/Assets/car-20150902040113.jpg', 'car.jpg', 'test assets', 'test assets', 42, '2015-09-01 10:31:00', 42, '2015-09-03 11:55:46', 0),
(2, 10, 'mouse', 'hp', 'hp', 'hp', '2015-09-30', '2015-09-30', '', '', 'hp', '123456', 66, '2015-09-02 03:53:45', 66, '2015-09-02 03:53:45', 0),
(3, 6, 'Furnitures', 'test assets', 'thomas furniture', '12', '2015-09-01', '2015-12-31', 'Documents/Assets/1-20150904121145.jpg', '1.jpg', 'thomas', '9876543210', 42, '2015-09-04 12:11:12', 42, '2015-09-04 12:11:45', 0),
(4, 6, 'test assets', 'new', 'fordge', 'test assets', '2015-09-01', '2015-12-31', 'Documents/Assets/19-20150904014329.jpg', '19.jpg', 'test assets', '9876543210', 42, '2015-09-04 01:43:29', 42, '2015-09-04 01:43:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_attendance`
--

CREATE TABLE IF NOT EXISTS `fms_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `appartmentid` int(100) NOT NULL,
  `date` date DEFAULT NULL,
  `starttime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL,
  `totalhours` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fms_attendance`
--

INSERT INTO `fms_attendance` (`id`, `userid`, `appartmentid`, `date`, `starttime`, `endtime`, `totalhours`, `status`) VALUES
(1, 57, 6, '2015-09-04', '11:13:56', '02:26:36', 0, 0),
(2, 76, 11, '2015-09-04', '03:31:27', '02:26:36', 0, 0),
(3, 73, 6, '2015-09-04', '06:49:16', '02:26:36', 0, 0),
(4, 94, 6, '2015-09-07', '02:25:48', '02:26:36', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_autogenerate`
--

CREATE TABLE IF NOT EXISTS `fms_autogenerate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` varchar(100) NOT NULL,
  `prefixno` varchar(100) NOT NULL,
  `sufixno` varchar(100) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createddate` datetime NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifieddate` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fms_autogenerate`
--

INSERT INTO `fms_autogenerate` (`id`, `mode`, `prefixno`, `sufixno`, `createdby`, `createddate`, `modifiedby`, `modifieddate`, `status`) VALUES
(1, 'Ticket', 'TT', '62', 1, '2015-08-19 00:00:00', 1, '2015-08-19 00:00:00', 0),
(2, 'Income', 'INC', '19', 1, '2015-08-19 03:13:23', 1, '2015-08-19 08:23:28', 0),
(3, 'Expense', 'EXP', '25', 1, '2015-08-19 03:13:23', 1, '2015-08-19 08:23:28', 0),
(4, 'Booking', 'FBI', '23', 1, '2015-08-19 03:13:23', 1, '2015-08-19 08:23:28', 0),
(5, 'vendor', 'VN', '37', 1, '2015-08-28 00:00:00', 1, '2015-08-28 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_blocknumber`
--

CREATE TABLE IF NOT EXISTS `fms_blocknumber` (
  `bolckid` int(11) NOT NULL AUTO_INCREMENT,
  `blockno` varchar(200) NOT NULL,
  `createdby` int(10) NOT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(10) NOT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`bolckid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fms_blocknumber`
--

INSERT INTO `fms_blocknumber` (`bolckid`, `blockno`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'Block A', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(2, 'Block B', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(3, 'Block C', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(4, 'Block D', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(5, 'Block E', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_book_facility`
--

CREATE TABLE IF NOT EXISTS `fms_book_facility` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `bookingno` varchar(20) NOT NULL,
  `aptid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `facilityid` varchar(100) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `starttime` varchar(100) DEFAULT NULL,
  `endtime` varchar(100) DEFAULT NULL,
  `totalcost` int(100) DEFAULT NULL,
  `costperhour` int(100) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonenumber` int(20) DEFAULT NULL,
  `emailid` varchar(255) NOT NULL,
  `flatnumber` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `fms_book_facility`
--

INSERT INTO `fms_book_facility` (`bookid`, `bookingno`, `aptid`, `userid`, `facilityid`, `startdate`, `enddate`, `starttime`, `endtime`, `totalcost`, `costperhour`, `description`, `name`, `phonenumber`, `emailid`, `flatnumber`, `address`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'FBI1', 3, 5, '1', '2015-08-31', '2015-09-05', '07:00:00', '06:00:00', 2200, 200, 'paint', '', NULL, '', '', '', 5, '2015-08-31 12:00:30', 5, '2015-08-31 12:00:30', 0),
(2, 'FBI2', 3, 6, '1', '2015-08-31', '2015-09-03', '01:00:00', '12:00:00', 2200, 200, 'good', '', NULL, '', '', '', 6, '2015-08-31 12:02:29', 6, '2015-08-31 12:02:29', 0),
(3, 'FBI3', 6, 42, '2', '2015-09-01', '2015-09-01', '12:00:00', '01:00:00', 200, 200, 'test', '', NULL, '', '', '', 42, '2015-09-01 10:15:02', 42, '2015-09-01 10:15:02', 0),
(4, 'FBI4', 6, 48, '3', '2015-09-01', '2015-09-04', '10:00:00', '12:00:00', 2100, 150, 'test', '', NULL, '', '', '', 48, '2015-09-01 10:15:46', 48, '2015-09-01 10:15:46', 0),
(5, 'FBI5', 6, 49, '4', '2015-09-01', '2015-09-01', '06:00:00', '07:00:00', 300, 300, 'test', '', NULL, '', '', '', 49, '2015-09-01 10:16:34', 49, '2015-09-01 10:16:34', 0),
(6, 'FBI6', 6, 42, '5', '2015-09-01', '2015-09-01', '12:00:00', '02:00:00', 1000, 500, 'test', '', NULL, '', '', '', 42, '2015-09-01 02:23:00', 42, '2015-09-01 02:23:00', 0),
(7, 'FBI7', 6, 2, '3', '2015-09-28', '2015-09-30', '01:00:00', '02:00:00', 150, 150, 'cvxbvn', '', NULL, '', '', '', 2, '2015-09-01 05:25:36', 2, '2015-09-01 05:25:36', 0),
(8, 'FBI8', 6, 2, '4', '2015-09-25', '2015-09-27', '01:00:00', '02:00:00', 300, 300, 'dsafdsfg', '', NULL, '', '', '', 2, '2015-09-02 09:59:02', 2, '2015-09-02 09:59:02', 0),
(9, 'FBI9', 6, 2, '5', '2015-09-02', '2015-09-03', '1:00 AM', '3:00 AM', 1000, 500, 'dfgdfhd', '', NULL, '', '', '', 2, '2015-09-02 10:01:25', 2, '2015-09-02 10:01:25', 0),
(10, 'FBI10', 6, 42, '6', '2015-09-02', '2015-09-02', '12:30 AM', '1:30 AM', 250, 250, 'test', '', NULL, '', '', '', 42, '2015-09-02 02:35:34', 42, '2015-09-02 02:35:34', 0),
(11, 'FBI11', 10, 66, '7', '2015-09-02', '2015-09-02', '10:30 PM', '3:30 AM', 500, 100, 'for 1 hr', '', NULL, '', '', '', 66, '2015-09-02 03:17:05', 66, '2015-09-02 03:17:05', 0),
(12, 'FBI12', 6, 2, '6', '0000-00-00', '0000-00-00', '1:00 AM', '2:00 AM', 250, 250, 'fdhgfh', '', NULL, '', '', '', 2, '2015-09-02 04:27:06', 2, '2015-09-02 04:27:06', 0),
(13, 'FBI13', 6, 48, '2', '2015-09-03', '2015-09-05', '1:00 AM', '3:30 AM', 500, 200, 'paint', '', NULL, '', '', '', 48, '2015-09-02 04:59:02', 48, '2015-09-02 04:59:02', 0),
(14, 'FBI14', 6, 2, '2', '1970-01-01', '1970-01-01', '1:00 AM', '2:00 AM', 200, 200, 'fghgfh', '', NULL, '', '', '', 2, '2015-09-02 06:11:40', 2, '2015-09-02 06:11:40', 0),
(15, 'FBI15', 6, 2, '2', '2015-09-16', '2015-09-18', '1:00 AM', '2:00 AM', 200, 200, 'gfhfgh', '', NULL, '', '', '', 2, '2015-09-03 09:48:31', 2, '2015-09-03 09:48:31', 0),
(16, 'FBI16', 6, 42, '2', '2015-09-03', '2015-09-03', '12:30 AM', '1:30 AM', 200, 200, 'test', '', NULL, '', '', '', 42, '2015-09-03 11:49:18', 42, '2015-09-03 11:49:18', 0),
(17, 'FBI17', 11, 77, '10', '2015-09-05', '2015-09-05', '2:00 AM', '3:30 AM', 150, 100, 'swiming', '', NULL, '', '', '', 77, '2015-09-03 10:15:02', 77, '2015-09-03 10:15:02', 0),
(18, 'FBI18', 6, 42, '2', '2015-09-04', '2015-09-01', '12:00 AM', '12:30 AM', 100, 200, 'test', '', NULL, '', '', '', 42, '2015-09-04 01:28:46', 42, '2015-09-04 01:28:46', 0),
(19, 'FBI19', 6, 42, '2', '2015-09-04', '2015-09-04', '12:00 AM', '12:00 AM', 0, 200, 'test', '', NULL, '', '', '', 42, '2015-09-04 01:29:51', 42, '2015-09-04 01:29:51', 0),
(20, 'FBI20', 6, 42, '2', '2015-09-04', '2015-09-05', '12:00 AM', '12:30 AM', 100, 200, 'test', '', NULL, '', '', '', 42, '2015-09-04 01:30:37', 42, '2015-09-04 01:30:37', 0),
(21, 'FBI21', 6, 42, '4', '2015-09-04', '2015-09-04', '12:00 AM', '12:00 AM', 0, 300, 'tetstty', '', NULL, '', '', '', 42, '2015-09-04 01:33:43', 42, '2015-09-04 01:33:43', 0),
(22, 'FBI22', 6, 2, '3', '2015-09-01', '2015-09-30', '1', '3', 0, 1000000, 'yghgjhg', '', NULL, '', '', '', 2, '2015-09-05 09:08:12', 2, '2015-09-05 09:08:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_candidate`
--

CREATE TABLE IF NOT EXISTS `fms_candidate` (
  `candidateid` int(11) NOT NULL AUTO_INCREMENT,
  `aptid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `numberofvotes` int(20) DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createdtime` date DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`candidateid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fms_candidate`
--

INSERT INTO `fms_candidate` (`candidateid`, `aptid`, `userid`, `firstname`, `lastname`, `post`, `mobile`, `address`, `numberofvotes`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 6, NULL, 'position', '1', '2', 'test', 'test', NULL, 42, '2015-09-01', 42, '2015-09-01 10:43:48', 0),
(2, 6, NULL, 'position', '2', '4', 'test', 'test', NULL, 42, '2015-09-01', 42, '2015-09-01 11:17:32', 0),
(3, 6, NULL, 'position', '3', '6', 'test', 'test', NULL, 42, '2015-09-01', 42, '2015-09-01 11:17:19', 0),
(4, 6, NULL, 'position', '3', '5', 'test', 'test', NULL, 42, '2015-09-01', 42, '2015-09-01 11:13:48', 1),
(5, 6, NULL, 'position', '1A', '2', 'test', 'TEST', NULL, 42, '2015-09-01', 2, '2015-09-01 10:48:00', 1),
(6, 10, NULL, 'aaa', 'aaa', '7', '123456', 'a', NULL, 66, '2015-09-02', 66, '2015-09-02 03:59:05', 0),
(7, 10, NULL, 'bbb', 'bbb', '7', '123', 'bbb', NULL, 66, '2015-09-02', 66, '2015-09-02 04:00:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_category`
--

CREATE TABLE IF NOT EXISTS `fms_category` (
  `categoryid` int(100) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `decription` varchar(100) NOT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`categoryid`),
  UNIQUE KEY `Cat_id` (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fms_category`
--

INSERT INTO `fms_category` (`categoryid`, `category`, `decription`, `createdby`, `createddate`, `modifiedby`, `modifieddate`, `status`) VALUES
(1, 'Plumbing', '', NULL, NULL, NULL, NULL, 0),
(2, 'Gardening', '', NULL, NULL, NULL, NULL, 0),
(3, 'Carpentering', '', NULL, NULL, NULL, NULL, 0),
(4, 'Interior works', '', NULL, NULL, NULL, NULL, 0),
(5, 'Electricity', '', NULL, NULL, 1, '2015-08-28 04:50:53', 0),
(6, 'Services', '', 1, '2015-08-28 04:52:09', 1, '2015-08-28 04:52:09', 0),
(7, 'catering', '', 1, '2015-08-31 09:18:03', 1, '2015-08-31 09:19:18', 1),
(8, 'Laundary', '', 1, '2015-08-31 01:38:47', 1, '2015-08-31 01:38:47', 0),
(9, 'catering', '', 1, '2015-08-31 05:08:52', 1, '2015-08-31 05:08:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_city`
--

CREATE TABLE IF NOT EXISTS `fms_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(100) NOT NULL,
  `createddate` datetime NOT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fms_city`
--

INSERT INTO `fms_city` (`id`, `city`, `createddate`, `modifieddate`, `createdby`, `modifiedby`, `status`) VALUES
(1, 'Chennai', '2015-04-27 16:43:13', '0000-00-00 00:00:00', NULL, NULL, 0),
(2, 'Madurai', '2015-04-27 16:43:13', '0000-00-00 00:00:00', NULL, NULL, 0),
(3, 'Trichy', '2015-04-27 16:43:29', '0000-00-00 00:00:00', NULL, NULL, 0),
(4, 'Selam', '2015-08-19 03:41:21', '2015-09-01 10:49:53', 1, 1, 1),
(5, 'coimbatore', '2015-08-28 11:56:26', '2015-08-28 04:46:03', 1, 1, 0),
(6, 'Nagai', '2015-08-28 04:47:03', '2015-08-28 04:47:03', 1, 1, 0),
(7, 'Erode', '2015-08-31 09:17:02', '2015-08-31 09:17:07', 1, 1, 1),
(8, 'Theni', '2015-08-31 01:37:53', '2015-08-31 05:08:21', 1, 1, 1),
(9, 'namakkal', '2015-08-31 05:08:35', '2015-08-31 05:08:35', 1, 1, 0),
(10, 'Theni', '2015-09-01 09:57:36', '2015-09-01 09:57:36', 1, 1, 0),
(11, 'Theni', '2015-09-01 09:57:44', '2015-09-01 09:59:08', 1, 1, 1),
(12, 'test', '2015-09-01 10:37:50', '2015-09-01 10:37:50', 1, 1, 0),
(13, 'test', '2015-09-01 10:39:43', '2015-09-01 10:39:43', 1, 1, 0),
(14, 'test', '2015-09-01 10:40:59', '2015-09-01 10:40:59', 1, 1, 0),
(15, 'test', '2015-09-01 10:42:07', '2015-09-01 10:42:07', 1, 1, 0),
(16, 'test', '2015-09-01 10:49:47', '2015-09-01 10:49:51', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fms_documents`
--

CREATE TABLE IF NOT EXISTS `fms_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aptid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `documentname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `attachmentpath` varchar(100) NOT NULL,
  `attachmentname` varchar(255) NOT NULL,
  `createdby` varchar(100) NOT NULL,
  `createdtime` datetime NOT NULL,
  `modifiedby` varchar(100) NOT NULL,
  `modifiedtime` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fms_documents`
--

INSERT INTO `fms_documents` (`id`, `aptid`, `userid`, `documentname`, `date`, `attachmentpath`, `attachmentname`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 0, 1, 'flowers', '2015-08-31', 'Documents/files/5-20150831115049.jpg', '5.jpg', '1', '2015-08-31 11:50:49', '1', '2015-08-31 11:51:05', 1),
(2, 0, 1, 'flora', '2015-08-31', 'Documents/files/9-20150831013952.jpg', '9.jpg', '1', '2015-08-31 01:39:52', '1', '2015-08-31 01:40:15', 1),
(3, 0, 1, 'flora', '2015-09-01', 'Documents/files/18-20150901095700.jpg', '18.jpg', '1', '2015-09-01 09:57:00', '1', '2015-09-01 09:57:16', 1),
(4, 0, 1, 'test', '2015-09-04', 'Documents/files/House-for-Rent-2BHK-8-500-in-JP-Nagar-R-ak_L2113099677-1441011849-20150904033143.jpe', 'House-for-Rent-2BHK-8-500-in-JP-Nagar-R-ak_L2113099677-1441011849.jpeg', '1', '2015-09-01 11:13:29', '1', '2015-09-04 03:31:43', 0),
(5, 6, 42, 'flora', '2015-09-01', 'Documents/files/9-20150901114913.jpg', '9.jpg', '42', '2015-09-01 11:49:13', '42', '2015-09-01 11:49:13', 0),
(6, 0, 1, 'MIIT', '2015-09-02', 'Documents/files/Kannan-20150902012200.docx', 'Kannan.docx', '1', '2015-09-02 01:22:00', '1', '2015-09-02 01:22:00', 0),
(7, 6, 2, 'image', '2015-09-06', 'Documents/files/1904402-20150906104404.jpg', '1904402.jpg', '2', '2015-09-06 10:44:04', '2', '2015-09-06 10:44:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_duration`
--

CREATE TABLE IF NOT EXISTS `fms_duration` (
  `durationid` int(11) NOT NULL AUTO_INCREMENT,
  `duration` varchar(100) NOT NULL,
  `createdby` int(10) NOT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(10) NOT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`durationid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fms_duration`
--

INSERT INTO `fms_duration` (`durationid`, `duration`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'Off Day', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0),
(2, 'Full Day', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_email`
--

CREATE TABLE IF NOT EXISTS `fms_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromuserid` int(11) DEFAULT NULL,
  `touserid` int(11) DEFAULT NULL,
  `appartmentid` int(11) DEFAULT NULL,
  `fromemail` varchar(255) NOT NULL,
  `toemail` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `fromname` varchar(100) NOT NULL,
  `toname` varchar(100) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdtime` datetime NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifiedtime` datetime NOT NULL,
  `isread` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `attachmentpath` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `inboxstatus` int(11) NOT NULL DEFAULT '0',
  `sentitems` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `fms_email`
--

INSERT INTO `fms_email` (`id`, `fromuserid`, `touserid`, `appartmentid`, `fromemail`, `toemail`, `subject`, `description`, `fromname`, `toname`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `isread`, `status`, `attachmentpath`, `attachment`, `inboxstatus`, `sentitems`) VALUES
(1, 1, 5, 0, 'info@imaruthi.com', 'adminuser@gmail.com', 'hello', '', 'MIIT MIIT', 'MIIT user', 1, '2015-08-31 11:56:22', 1, '2015-08-31 11:56:22', 0, 0, '', '', 0, 0),
(2, 14, 14, 2, 'ursnagi@gmail.com', 'ursnagi@gmail.com', 'Test', '<p>Test</p>\r\n', 'Nagendran Neelamegam', 'Nagendran Neelamegam', 14, '2015-08-31 15:38:19', 14, '2015-08-31 15:38:19', 1, 0, 'Documents/Email/FMS Review-20150831033819.xlsx', 'FMS Review.xlsx', 0, 0),
(3, 14, 14, 2, 'ursnagi@gmail.com', 'ursnagi@gmail.com', 'Test1', '<p>Test</p>\r\n', 'Nagendran Neelamegam', 'Nagendran Neelamegam', 14, '2015-08-31 15:38:49', 14, '2015-08-31 15:38:49', 1, 0, '', '', 0, 0),
(4, 1, 3, 0, 'info@imaruthi.com', 'security@gmail.com', 'hello', '', 'MIIT MIIT', 'security 1', 1, '2015-09-01 09:53:48', 1, '2015-09-01 09:53:48', 1, 0, '', '', 0, 0),
(5, 42, 48, 6, 'adminuser1@gmail.com', 'adminuser1A@gmail.com', 'test1A', '', 'admin user1', 'admin user1A', 42, '2015-09-01 10:07:50', 42, '2015-09-01 10:07:50', 1, 0, '', '', 0, 0),
(6, 42, 49, 6, 'adminuser1@gmail.com', 'adminuser1B@gmail.com', 'testuser1B', '', 'admin user1', 'admin user1B', 42, '2015-09-01 10:08:19', 42, '2015-09-01 10:08:19', 0, 0, '', '', 0, 0),
(7, 42, 44, 6, 'adminuser1@gmail.com', 'adminvendor1A@gmail.com', 'testvendor1A', '', 'admin user1', 'admin vendor 1A', 42, '2015-09-01 10:08:45', 42, '2015-09-01 10:08:45', 0, 0, '', '', 0, 0),
(8, 42, 45, 6, 'adminuser1@gmail.com', 'adminvendor1B@gmail.com', 'testvendor1B', '', 'admin user1', 'admin vendor 1B', 42, '2015-09-01 10:09:05', 42, '2015-09-01 10:09:05', 0, 0, '', '', 0, 0),
(9, 48, 42, 6, 'adminuser1A@gmail.com', 'adminuser1@gmail.com', 'received', '', 'admin user1A (adminuser1A@gmail.com)', 'admin user1', 48, '2015-09-01 10:09:35', 48, '2015-09-01 10:09:35', 1, 0, '', '', 0, 0),
(10, 0, 0, 6, '', '', '', '', '', ' ', 49, '2015-09-01 10:10:16', 49, '2015-09-01 10:10:16', 0, 0, '', '', 0, 0),
(11, 49, 42, 6, 'adminuser1B@gmail.com', 'adminuser1@gmail.com', 'received', '', 'admin user1B (adminuser1B@gmail.com)', 'admin user1', 49, '2015-09-01 10:10:35', 42, '2015-09-06 02:07:36', 1, 0, '', '', 1, 0),
(12, 45, 59, 6, 'adminvendor2@gmail.com', 'vendoruserC@gmail.com', 'test', '', 'admin vendor 2', 'vendor user C', 45, '2015-09-01 13:03:10', 45, '2015-09-01 13:03:10', 0, 0, '', '', 0, 0),
(13, 42, 48, 6, 'adminuser1@gmail.com', 'adminuser1A@gmail.com', 'test', '<p>gud day</p>\r\n', 'admin user1', 'admin user1A', 42, '2015-09-02 16:53:29', 42, '2015-09-02 16:53:29', 1, 0, '', '', 0, 0),
(14, 42, 78, 6, 'adminuser1@gmail.com', 'lilly16john@gmail.com', 'hello', '<p>test</p>\r\n', 'admin user1', 'lily john', 42, '2015-09-04 12:52:22', 42, '2015-09-06 02:07:55', 0, 0, '', '', 0, 1),
(15, 42, 48, 6, 'adminuser1@gmail.com', 'adminuser1A@gmail.com', 'received', '', 'admin user1 (adminuser1@gmail.com)', 'admin user1A', 42, '2015-09-04 13:24:43', 42, '2015-09-04 13:24:43', 0, 0, '', '', 0, 0),
(20, 2, 2, 6, 'admin@gmail.com', 'admin@gmail.com', 'print test', '<p>test delete</p>\r\n', 'admin admin', 'admin admin', 2, '2015-09-06 14:42:54', 2, '2015-09-06 11:05:47', 1, 0, '', '', 1, 1),
(21, 2, 2, 6, 'admin@gmail.com', 'admin@gmail.com', 'out box testing', '<p>out box print</p>\r\n', 'admin admin', 'admin admin', 2, '2015-09-06 14:56:10', 2, '2015-09-06 11:07:37', 1, 0, '', '', 0, 1),
(22, 2, 79, 6, 'admin@gmail.com', 'user@gmail.com', 'test mail', '<p>test</p>\r\n', 'admin admin', 'hema latha', 2, '2015-09-06 16:07:19', 2, '2015-09-06 16:07:19', 0, 0, '', '', 0, 0),
(23, 1, 1, 0, 'info@imaruthi.com', 'info@imaruthi.com', 'test frm same mail id', '<p>Test from same idddddddddd</p>\r\n', 'MIIT MIIT', 'MIIT MIIT', 1, '2015-09-06 16:39:21', 1, '2015-09-07 12:18:16', 1, 0, '', '', 0, 1),
(24, 94, 94, 6, 'guard@fms.com', 'guard@fms.com', 'test guard mail', '<p>Test guard mail</p>\r\n', 'jgjhg hjgjhg', 'jgjhg hjgjhg', 94, '2015-09-06 16:48:00', 94, '2015-09-06 16:48:00', 1, 0, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_expense`
--

CREATE TABLE IF NOT EXISTS `fms_expense` (
  `expenseid` int(11) NOT NULL AUTO_INCREMENT,
  `aptid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `expenseno` varchar(100) NOT NULL,
  `expensename` varchar(255) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `expensedate` date DEFAULT NULL,
  `remarks` varchar(255) NOT NULL,
  `bookid` int(11) DEFAULT NULL,
  `attachment` varchar(255) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`expenseid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `fms_expense`
--

INSERT INTO `fms_expense` (`expenseid`, `aptid`, `userid`, `username`, `mobile`, `expenseno`, `expensename`, `amount`, `expensedate`, `remarks`, `bookid`, `attachment`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 3, 5, 'MIIT user', '567', 'EXP1', 'Facility Booking', '2200', '2015-08-31', 'Facility Booking', 1, '', 5, '2015-08-31 12:00:30', 5, '2015-08-31 12:00:30', 0),
(2, 3, 6, 'user 1', '2', 'EXP2', 'Facility Booking', '2200', '2015-08-31', 'Facility Booking', 2, '', 6, '2015-08-31 12:02:29', 6, '2015-08-31 12:02:29', 0),
(3, 6, 42, 'admin user1', '4', 'EXP3', 'Facility Booking', '200', '2015-09-01', 'Facility Booking', 3, '', 42, '2015-09-01 10:15:02', 42, '2015-09-01 01:27:04', 1),
(4, 6, 48, 'admin user1A', '1', 'EXP4', 'Facility Booking', '2100', '2015-09-01', 'Facility Booking', 4, '', 48, '2015-09-01 10:15:46', 42, '2015-09-01 01:26:58', 1),
(5, 6, 49, 'admin user1B', '987654321', 'EXP5', 'Facility Booking', '300', '2015-09-01', 'Facility Booking', 5, '', 49, '2015-09-01 10:16:34', 42, '2015-09-01 01:26:52', 1),
(6, 6, NULL, 'admin user1', '4', 'EXP6', 'test', '200', '2015-09-01', '	test', NULL, '', 42, '2015-09-01 01:26:28', 42, '2015-09-01 01:26:28', 1),
(7, 6, 42, 'admin user1', '4', 'EXP7', 'Facility Booking', '1000', '2015-09-01', 'Facility Booking', 6, '', 42, '2015-09-01 02:23:00', 42, '2015-09-01 02:23:00', 0),
(8, 6, 2, 'admin admin', '9952041996', 'EXP8', 'Facility Booking', '150', '2015-09-01', 'Facility Booking', 7, '', 2, '2015-09-01 05:25:36', 2, '2015-09-01 05:25:36', 0),
(9, 6, 2, 'admin admin', '9952041996', 'EXP9', 'Facility Booking', '300', '2015-09-02', 'Facility Booking', 8, '', 2, '2015-09-02 09:59:02', 2, '2015-09-02 09:59:02', 0),
(10, 6, 2, 'admin admin', '9952041996', 'EXP10', 'Facility Booking', '1000', '2015-09-02', 'Facility Booking', 9, '', 2, '2015-09-02 10:01:25', 2, '2015-09-02 10:01:25', 0),
(11, 6, 42, 'admin user1', '4', 'EXP11', 'Facility Booking', '250', '2015-09-02', 'Facility Booking', 10, '', 42, '2015-09-02 02:35:34', 42, '2015-09-02 02:35:34', 0),
(12, 10, 66, 'Gani Admin', '9840353349', 'EXP12', 'Facility Booking', '500', '2015-09-02', 'Facility Booking', 11, '', 66, '2015-09-02 03:17:05', 66, '2015-09-02 03:17:05', 0),
(13, 10, NULL, 'Gani Admin', '9840353349', 'EXP13', 'motor repair', '1500', '2015-09-01', 'Motor repaired', NULL, '', 66, '2015-09-02 03:21:51', 66, '2015-09-02 03:21:51', 0),
(14, 6, 2, 'admin admin', '9952041996', 'EXP14', 'Facility Booking', '250', '2015-09-02', 'Facility Booking', 12, '', 2, '2015-09-02 04:27:06', 2, '2015-09-02 04:27:06', 0),
(15, 6, 48, 'admin user1A', '1', 'EXP15', 'Facility Booking', '500', '2015-09-02', 'Facility Booking', 13, '', 48, '2015-09-02 04:59:02', 48, '2015-09-02 04:59:02', 0),
(16, 6, 2, 'admin admin', '9952041996', 'EXP16', 'Facility Booking', '200', '2015-09-02', 'Facility Booking', 14, '', 2, '2015-09-02 06:11:40', 2, '2015-09-02 06:11:40', 0),
(17, 6, 2, 'admin admin', '9952041996', 'EXP17', 'Facility Booking', '200', '2015-09-03', 'Facility Booking', 15, '', 2, '2015-09-03 09:48:31', 2, '2015-09-03 09:48:31', 0),
(18, 6, 42, 'admin user1', '4', 'EXP18', 'Facility Booking', '200', '2015-09-03', 'Facility Booking', 16, '', 42, '2015-09-03 11:49:18', 42, '2015-09-03 11:49:18', 0),
(19, 11, 77, '1 1', '1', 'EXP19', 'Facility Booking', '150', '2015-09-03', 'Facility Booking', 17, '', 77, '2015-09-03 10:15:02', 77, '2015-09-03 10:15:02', 0),
(20, 6, 42, 'admin user1', '4', 'EXP20', 'Facility Booking', '100', '2015-09-04', 'Facility Booking', 18, '', 42, '2015-09-04 01:28:46', 42, '2015-09-04 01:28:46', 0),
(21, 6, 42, 'admin user1', '4', 'EXP21', 'Facility Booking', '0', '2015-09-04', 'Facility Booking', 19, '', 42, '2015-09-04 01:29:51', 42, '2015-09-04 01:29:51', 0),
(22, 6, 42, 'admin user1', '4', 'EXP22', 'Facility Booking', '100', '2015-09-04', 'Facility Booking', 20, '', 42, '2015-09-04 01:30:37', 42, '2015-09-04 01:30:37', 0),
(23, 6, 42, 'admin user1', '4', 'EXP23', 'Facility Booking', '0', '2015-09-04', 'Facility Booking', 21, '', 42, '2015-09-04 01:33:43', 42, '2015-09-04 01:33:43', 0),
(24, 6, 2, 'admin admin', '9952041996', 'EXP24', 'Facility Booking', '0', '2015-09-05', 'Facility Booking', 22, '', 2, '2015-09-05 09:08:12', 2, '2015-09-05 09:08:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_facility`
--

CREATE TABLE IF NOT EXISTS `fms_facility` (
  `facilityid` int(100) NOT NULL AUTO_INCREMENT,
  `aptid` int(100) DEFAULT NULL,
  `facilityname` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createddate` datetime NOT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddate` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`facilityid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `fms_facility`
--

INSERT INTO `fms_facility` (`facilityid`, `aptid`, `facilityname`, `cost`, `createdby`, `createddate`, `modifiedby`, `modifieddate`, `status`) VALUES
(1, 3, 'painting', '200', 5, '2015-08-31 11:59:32', 5, '2015-08-31 11:59:32', 0),
(2, 6, 'painting', '200', 42, '2015-09-01 10:12:47', 42, '2015-09-01 10:12:47', 0),
(3, 6, 'maid', '1000000', 42, '2015-09-01 10:13:44', 48, '2015-09-02 04:56:00', 0),
(4, 6, 'car washing', '300', 42, '2015-09-01 10:14:22', 42, '2015-09-01 10:14:22', 0),
(5, 6, 'dry cleaneing', '500', 42, '2015-09-01 02:22:30', 42, '2015-09-01 02:22:30', 0),
(6, 6, 'plumbing', '250', 42, '2015-09-02 02:34:24', 42, '2015-09-02 02:34:24', 0),
(7, 10, 'Swimming pool', '100', 66, '2015-09-02 03:11:31', 66, '2015-09-02 03:11:31', 0),
(8, 6, 'cooking', '7', 42, '2015-09-03 02:34:57', 42, '2015-09-03 02:34:57', 0),
(9, 6, 'sandhu', '200', 2, '2015-09-03 06:39:40', 2, '2015-09-03 06:39:40', 0),
(10, 11, 'swiming pool', '100', 75, '2015-09-03 10:07:59', 75, '2015-09-03 10:07:59', 0),
(11, 11, 'gym', '50', 75, '2015-09-03 10:08:15', 75, '2015-09-03 10:08:15', 0),
(12, 6, 'cateringtest', '50', 42, '2015-09-04 01:26:13', 42, '2015-09-04 01:26:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_flatnumber`
--

CREATE TABLE IF NOT EXISTS `fms_flatnumber` (
  `flatid` int(11) NOT NULL AUTO_INCREMENT,
  `flatno` varchar(100) NOT NULL,
  `createdby` int(100) NOT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`flatid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fms_flatnumber`
--

INSERT INTO `fms_flatnumber` (`flatid`, `flatno`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'A1', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(2, 'A2', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(3, 'B1', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(4, 'B2', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(5, 'C1', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(6, 'C2', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(7, 'D1', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(8, 'D2', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(9, 'E1', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(10, 'E2', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_income`
--

CREATE TABLE IF NOT EXISTS `fms_income` (
  `incomeid` int(11) NOT NULL AUTO_INCREMENT,
  `aptid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `incomeno` varchar(100) NOT NULL,
  `incomename` varchar(255) NOT NULL,
  `amount` int(50) DEFAULT NULL,
  `incometype` varchar(100) NOT NULL,
  `incomeby` varchar(100) NOT NULL,
  `incomedate` date DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createdtime` datetime NOT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifiedtime` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`incomeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `fms_income`
--

INSERT INTO `fms_income` (`incomeid`, `aptid`, `userid`, `username`, `mobile`, `incomeno`, `incomename`, `amount`, `incometype`, `incomeby`, `incomedate`, `remarks`, `attachment`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 6, 48, 'admin user1A', '1', 'INC1', 'test income', 100, 'Cash', '', '2015-09-01', '	test', '', 42, '2015-09-01 01:25:46', 42, '2015-09-01 01:29:47', 1),
(2, 6, 49, 'admin user1B', '987654321', 'INC2', 'test income1', 300, 'Cash', '', '2015-09-01', '	test', '', 42, '2015-09-01 01:27:46', 42, '2015-09-01 01:29:55', 1),
(3, 6, 48, 'admin user1A', '1', 'INC3', 'test income', 200, 'Cash', '', '2015-09-01', '	', '', 42, '2015-09-01 01:30:21', 42, '2015-09-01 01:30:21', 0),
(4, 6, 49, '', '', 'INC4', 'test income1', 200, 'Cash', '', '2015-09-03', 'sdgtfdg		', '', 42, '2015-09-01 01:30:54', 2, '2015-09-02 11:13:18', 0),
(5, 6, 48, 'admin user1A', '1', 'INC5', 'last income test', 500, 'Cash', '', '2015-08-31', '	', '', 42, '2015-09-01 02:32:00', 42, '2015-09-01 02:32:00', 0),
(6, 6, 48, 'admin user1A', '1', 'INC6', 'start income', 150, 'Cash', '', '2015-09-01', '	', '', 42, '2015-09-02 01:32:12', 42, '2015-09-02 01:32:12', 0),
(7, 6, 40, 'domain vendor 1', '9626262084', 'INC7', 'testing', 50, 'Cash', '', '2015-09-01', '	', '', 42, '2015-09-02 03:27:44', 42, '2015-09-02 03:27:44', 0),
(8, 6, 40, 'domain vendor 1', '9626262084', 'INC8', 'testing', 150, 'Cash', '', '2015-08-31', '	', '', 42, '2015-09-02 03:28:25', 42, '2015-09-02 03:28:25', 0),
(9, 6, 42, 'admin user1', '4', 'INC9', 'testing', 150, 'Cash', '', '2015-08-31', '	', '', 42, '2015-09-02 03:29:23', 42, '2015-09-02 03:29:23', 0),
(10, 6, 2, 'admin admin', '9952041996', 'INC10', 'testing income', 500, 'Cash', '', '2015-08-31', '	', '', 42, '2015-09-02 03:31:08', 42, '2015-09-02 03:31:08', 0),
(11, 6, 40, 'domain vendor 1', '9626262084', 'INC11', 'test income', 500, 'Cash', '', '2015-09-02', '	', '', 42, '2015-09-02 03:31:37', 42, '2015-09-02 03:31:37', 0),
(12, 6, 2, 'admin admin', '9952041996', 'INC12', 'test income', 500, 'Cash', '', '2015-09-01', '	', '', 42, '2015-09-02 03:32:36', 42, '2015-09-02 03:32:36', 0),
(13, 10, 44, 'admin vendor 1', '987654321', 'INC13', 'rent', 100, 'Cash', '', '2015-08-01', 'rent', '', 66, '2015-09-02 03:33:58', 66, '2015-09-02 03:33:58', 0),
(14, 10, 66, 'Gani Admin', '9840353349', 'INC14', 'rent 1', 1000, 'Cash', '', '2015-09-02', '	rent', '', 66, '2015-09-02 03:34:58', 66, '2015-09-02 03:34:58', 0),
(15, 10, 44, 'admin vendor 1', '987654321', 'INC15', 'rent 2', 100, 'Cash', '', '2015-09-01', '	rent', '', 66, '2015-09-02 03:35:43', 66, '2015-09-02 03:35:43', 0),
(16, 10, 44, 'admin vendor 1', '987654321', 'INC16', 'rent 3', 100, 'Cash', '', '2015-09-11', 'rent', '', 66, '2015-09-02 03:36:21', 66, '2015-09-02 03:36:21', 0),
(17, 6, 40, 'domain vendor 1', '9626262084', 'INC17', 'hgfjhg', 200, 'Cash', '', '2015-09-15', '	', '', 2, '2015-09-02 05:58:11', 2, '2015-09-02 05:58:11', 0),
(18, 6, 2, 'admin admin', '9952041996', 'INC18', 'Rental for Community Hall', 2500, 'Cash', '', '2015-09-07', 'Community Hall Rental', '', 2, '2015-09-07 07:47:04', 2, '2015-09-07 07:47:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_leave`
--

CREATE TABLE IF NOT EXISTS `fms_leave` (
  `leaveid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `appartmentid` int(100) NOT NULL,
  `leavetype` varchar(200) NOT NULL,
  `startdate` date DEFAULT NULL,
  `startduration` varchar(100) NOT NULL,
  `enddate` date DEFAULT NULL,
  `endduration` varchar(100) NOT NULL,
  `noofdays` int(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `leavestatus` varchar(100) NOT NULL DEFAULT '3',
  `createdby` int(10) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `modifiedby` int(10) NOT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`leaveid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fms_leave`
--

INSERT INTO `fms_leave` (`leaveid`, `userid`, `appartmentid`, `leavetype`, `startdate`, `startduration`, `enddate`, `endduration`, `noofdays`, `description`, `leavestatus`, `createdby`, `createddate`, `modifiedby`, `modifieddate`, `status`) VALUES
(1, 52, 6, '0', '2015-09-02', '2', '2015-09-02', '2', 1, 'adoption leave', 'Opened', 52, '2015-09-02 10:56:02', 52, '2015-09-02 10:56:02', 0),
(2, 52, 6, '3', '2015-09-02', '2', '2015-09-02', '2', 1, 'hkdf', '1', 52, '2015-09-02 11:26:54', 52, '2015-09-02 11:26:54', 0),
(3, 52, 6, '4', '2015-09-02', '2', '2015-09-02', '2', 1, 'sdffdd', '3', 52, '2015-09-02 11:46:01', 52, '2015-09-02 11:46:01', 0),
(4, 3, 2, '3', '2015-09-02', '2', '2015-09-02', '2', 1, 'casual leave', '3', 3, '2015-09-02 03:25:51', 3, '2015-09-02 03:25:51', 0),
(5, 73, 6, '3', '1970-01-01', '2', '1970-01-01', '2', 5, 'test', '3', 73, '2015-09-04 06:50:03', 73, '2015-09-04 06:50:03', 0),
(6, 57, 6, '2', '1970-01-01', '2', '1970-01-01', '2', 1, 'test', '3', 57, '2015-09-04 06:51:55', 57, '2015-09-04 06:51:55', 0),
(7, 3, 2, '1', '1970-01-01', '2', '1970-01-01', '2', 2, 'fever', '3', 3, '2015-09-07 02:16:55', 3, '2015-09-07 02:16:55', 0),
(8, 94, 6, '3', '1970-01-01', '1', '1970-01-01', '1', 1, 'Need half leave.', '3', 94, '2015-09-07 02:18:26', 94, '2015-09-07 02:18:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_leavestatus`
--

CREATE TABLE IF NOT EXISTS `fms_leavestatus` (
  `statusid` int(11) NOT NULL AUTO_INCREMENT,
  `levstatus` varchar(100) NOT NULL DEFAULT '3',
  `createdby` int(100) NOT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(100) NOT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`statusid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fms_leavestatus`
--

INSERT INTO `fms_leavestatus` (`statusid`, `levstatus`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'Approved', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0),
(2, 'Cancel', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0),
(3, 'Opened', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_leavetype`
--

CREATE TABLE IF NOT EXISTS `fms_leavetype` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `leavetype` varchar(100) NOT NULL,
  `createdby` int(10) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `modifiedby` int(10) NOT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fms_leavetype`
--

INSERT INTO `fms_leavetype` (`typeid`, `leavetype`, `createdby`, `createddate`, `modifiedby`, `modifieddate`, `status`) VALUES
(1, 'Adoption Leave', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0),
(2, 'Advance Earned Leave', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0),
(3, 'Casual Leave', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0),
(4, 'Earned Leave', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0),
(5, 'Flexi Holiday', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0),
(6, 'Leave Without Pay', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0),
(7, 'Sick Leave', 2, '2015-09-01 03:00:00', 2, '2015-09-01 03:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_newsevents`
--

CREATE TABLE IF NOT EXISTS `fms_newsevents` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `aptid` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifiedtime` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`newsid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fms_newsevents`
--

INSERT INTO `fms_newsevents` (`newsid`, `aptid`, `message`, `subject`, `description`, `date`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 6, 'test', 'Subject', 'Description ', '2015-08-31', 2, '2015-08-31 16:57:25', 42, '2015-09-04 19:30:05', 0),
(2, 10, 'Polling going on', 'poll', 'secretary position ', '2015-09-02', 66, '2015-09-02 16:07:00', 66, '2015-09-02 16:07:00', 0),
(3, 11, 'Hi Ragav Apartment Users', 'Hi', 'hellow all', '2015-09-03', 75, '2015-09-03 22:12:43', 75, '2015-09-03 22:12:43', 0),
(4, 6, 'happy birthday', 'heloooo', 'test', '2015-09-11', 42, '2015-09-04 19:29:42', 42, '2015-09-04 07:29:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fms_polls`
--

CREATE TABLE IF NOT EXISTS `fms_polls` (
  `pollid` int(11) NOT NULL AUTO_INCREMENT,
  `appartmentid` int(11) DEFAULT NULL,
  `positionid` int(11) DEFAULT NULL,
  `candidateid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `createdtime` datetime NOT NULL,
  `createdby` int(11) DEFAULT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifiedtime` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pollid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fms_polls`
--

INSERT INTO `fms_polls` (`pollid`, `appartmentid`, `positionid`, `candidateid`, `userid`, `createdtime`, `createdby`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 6, 2, 1, 42, '2015-09-01 11:18:38', 42, 42, '2015-09-01 11:18:38', 0),
(2, 6, 2, 1, 49, '2015-09-01 11:21:25', 49, 49, '2015-09-01 11:21:25', 0),
(3, 6, 2, 1, 48, '2015-09-01 11:25:27', 48, 48, '2015-09-01 11:25:27', 0),
(4, 6, 4, 2, 42, '2015-09-01 11:27:33', 42, 42, '2015-09-01 11:27:33', 0),
(5, 6, 4, 2, 49, '2015-09-01 11:30:55', 49, 49, '2015-09-01 11:30:55', 0),
(6, 6, 6, 3, 49, '2015-09-01 11:31:08', 49, 49, '2015-09-01 11:31:08', 0),
(7, 6, 4, 2, 48, '2015-09-01 03:27:27', 48, 48, '2015-09-01 03:27:27', 0),
(8, 6, 6, 3, 42, '2015-09-02 02:28:27', 42, 42, '2015-09-02 02:28:27', 0),
(9, 10, 7, 6, 66, '2015-09-02 04:01:13', 66, 66, '2015-09-02 04:01:13', 0),
(10, 6, 6, 3, 57, '2015-09-02 04:43:49', 57, 57, '2015-09-02 04:43:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_positions`
--

CREATE TABLE IF NOT EXISTS `fms_positions` (
  `positionid` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(255) NOT NULL,
  `pollingstartdate` date DEFAULT NULL,
  `pollingenddate` date DEFAULT NULL,
  `pollingresultdate` date DEFAULT NULL,
  `appartmentid` int(11) DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`positionid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fms_positions`
--

INSERT INTO `fms_positions` (`positionid`, `position`, `pollingstartdate`, `pollingenddate`, `pollingresultdate`, `appartmentid`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'Positions ', '2015-08-31', '2015-09-02', '2015-09-03', 6, 2, '2015-08-31 05:01:22', 42, '2015-09-01 11:16:32', 1),
(2, 'Test Postion 1', '2015-08-31', '2015-09-01', '2015-09-01', 6, 42, '2015-09-01 10:32:54', 42, '2015-09-01 11:22:38', 0),
(3, 'Test Postion 1', '2015-08-31', '2015-09-01', '2015-09-01', 6, 42, '2015-09-01 10:42:02', 42, '2015-09-01 10:42:17', 1),
(4, 'Test Postion 2', '2015-09-01', '2015-09-01', '2015-09-01', 6, 42, '2015-09-01 10:42:49', 42, '2015-09-01 11:23:20', 0),
(5, 'Test Postion 3', '2015-09-01', '2015-09-02', '2015-09-02', 6, 42, '2015-09-01 10:43:08', 2, '2015-09-01 10:46:28', 1),
(6, 'Test Postion 3', '2015-09-01', '2015-09-02', '2015-09-02', 6, 42, '2015-09-01 11:16:52', 42, '2015-09-01 11:16:52', 0),
(7, 'seceratry', '2015-09-02', '2015-09-03', '2015-09-30', 10, 66, '2015-09-02 03:58:20', 66, '2015-09-02 03:58:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_priority`
--

CREATE TABLE IF NOT EXISTS `fms_priority` (
  `id` tinyint(100) NOT NULL AUTO_INCREMENT,
  `priority` varchar(100) NOT NULL,
  `prioritydesc` varchar(100) NOT NULL,
  `prioritycolor` varchar(100) NOT NULL,
  `priorityurgency` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `responcetime` varchar(100) NOT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Priority` (`priority`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fms_priority`
--

INSERT INTO `fms_priority` (`id`, `priority`, `prioritydesc`, `prioritycolor`, `priorityurgency`, `responcetime`, `createdby`, `createddate`, `modifiedby`, `modifieddate`, `status`) VALUES
(1, 'Low', 'Low', 'hsl(0, 100%, 90%);', 0, '', NULL, NULL, NULL, NULL, 0),
(2, 'Medium', 'Medium', 'hsl(0, 100%, 70%)', 0, '', NULL, NULL, NULL, NULL, 0),
(3, 'High', 'High', 'hsl(0, 100%, 50%)', 0, '', NULL, NULL, NULL, NULL, 0),
(4, 'risk', '', 'rgba(143,255,0,1)', 0, '1', 1, '2015-09-01 09:58:18', 1, '2015-09-01 09:59:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fms_purposeofmeet`
--

CREATE TABLE IF NOT EXISTS `fms_purposeofmeet` (
  `purposeid` int(11) NOT NULL AUTO_INCREMENT,
  `meet` varchar(100) NOT NULL,
  `createdby` int(100) NOT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(100) NOT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`purposeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fms_purposeofmeet`
--

INSERT INTO `fms_purposeofmeet` (`purposeid`, `meet`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'Friends/Relatives', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(2, 'Vendors', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0),
(3, 'Sales Man', 1, '2015-09-03 06:00:00', 1, '2015-09-03 06:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_subcat`
--

CREATE TABLE IF NOT EXISTS `fms_subcat` (
  `subcatid` int(11) NOT NULL AUTO_INCREMENT,
  `aptid` int(11) DEFAULT NULL,
  `servicename` varchar(255) NOT NULL,
  `createdtime` datetime NOT NULL,
  `createdby` int(11) DEFAULT NULL,
  `modifiedtime` datetime NOT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`subcatid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fms_ticket`
--

CREATE TABLE IF NOT EXISTS `fms_ticket` (
  `ticketid` int(100) NOT NULL AUTO_INCREMENT,
  `ticketno` varchar(20) NOT NULL,
  `aptid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `priority` varchar(100) NOT NULL,
  `targetdate` date DEFAULT NULL,
  `pct` varchar(100) NOT NULL,
  `pat` varchar(100) NOT NULL,
  `vendordescription` varchar(100) NOT NULL,
  `vendoruserdescription` varchar(100) NOT NULL,
  `userdescription` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `attachmentpath` varchar(100) NOT NULL,
  `attachmentname` varchar(100) NOT NULL,
  `ticketstatus` varchar(100) NOT NULL DEFAULT '1',
  `reopenstatus` varchar(100) NOT NULL DEFAULT 'Reopen',
  `resolvedby` varchar(100) NOT NULL,
  `resolveddate` datetime DEFAULT NULL,
  `assignedby` varchar(100) NOT NULL,
  `createdby` varchar(100) NOT NULL,
  `createddate` datetime NOT NULL,
  `modifiedby` varchar(100) NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ticketid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `fms_ticket`
--

INSERT INTO `fms_ticket` (`ticketid`, `ticketno`, `aptid`, `userid`, `issue`, `category`, `priority`, `targetdate`, `pct`, `pat`, `vendordescription`, `vendoruserdescription`, `userdescription`, `reason`, `attachmentpath`, `attachmentname`, `ticketstatus`, `reopenstatus`, `resolvedby`, `resolveddate`, `assignedby`, `createdby`, `createddate`, `modifiedby`, `modifieddate`, `deleted`) VALUES
(47, 'TT47', 6, 2, '  checking  ', '', '', '0009-08-27', '1:00 AM', '3:00 AM', '', '', '', '', '', '', '1', '', '', NULL, '', '2', '2015-09-04 12:37:01', '2', '2015-09-04 07:10:53', 0),
(46, 'TT46', 6, 2, '  sandhu  ', '', '', '2015-09-23', '1:30 AM', '2:30 AM', '', '', 'dfghdshgdsh', '', '', '', '1', '', '', NULL, '', '2', '2015-09-04 12:35:05', '2', '2015-09-04 07:09:36', 0),
(45, 'TT45', 6, 2, '  sandhiya45  ', '', '', '2015-08-21', '2:00 AM', '3:30 AM', '', '', '', '', '', '', '1', '', '', NULL, '', '2', '2015-09-04 12:34:07', '2', '2015-09-04 07:13:45', 0),
(42, 'TT42', 6, 2, '  gdsfg', '2', '2', '2015-09-23', '1:00 AM', '2:30 AM', '', '', 'sdfgdsfg', '', '', '', '', '', '', NULL, '', '2', '2015-09-04 12:27:45', '2', '2015-09-04 06:57:45', 0),
(41, 'TT41', 6, 2, '  dsfgfdgh', '1', '2', '2015-09-22', '1:30 AM', '3:00 AM', '', '', 'dsfghdh', '', '', '', '', '', '', NULL, '', '2', '2015-09-04 12:21:12', '2', '2015-09-04 06:51:12', 0),
(38, 'TT38', 6, 2, '  sff', '1', '1', '2015-09-22', '1:00 AM', '2:30 AM', '', '', 'fghfjhfjh', '', '', '', '', '', '', NULL, '', '2', '2015-09-04 11:59:59', '2', '2015-09-04 06:29:59', 0),
(39, 'TT39', 6, 2, '  dfsgsdfg', '3', '2', '2015-09-16', '2:00 AM', '2:30 AM', '', '', 'sdfgsdfg', '', '', '', '', '', '', NULL, '', '2', '2015-09-04 12:13:15', '2', '2015-09-04 06:43:15', 0),
(40, 'TT40', 6, 42, 'fuse', '1', '1', '2015-09-05', '12:00 AM', '12:30 AM', '', '', 'test', '', '', '', '', '', '', NULL, '', '42', '2015-09-04 12:19:32', '42', '2015-09-04 06:49:32', 0),
(37, 'TT37', 6, 2, '  sandhiya23', '1', '2', '2015-09-24', '1:00 AM', '2:30 AM', '', '', 'gfhfgjhdf', '', '', '', '', '', '', NULL, '', '2', '2015-09-04 11:55:00', '2', '2015-09-04 06:25:00', 0),
(44, 'TT44', 6, 2, '  sgdfg  ', '', '', '2015-09-23', '2:30 AM', '3:00 AM', '', '', 'gfdgfdg', '', '', '', '1', '', '', NULL, '', '2', '2015-09-04 12:33:38', '2', '2015-09-04 07:09:19', 0),
(43, 'TT43', 6, 2, '  sdfasf', '1', '2', '2015-09-24', '2:00 AM', '12:30 AM', '', '', 'dfgdsfh', '', '', '', '', '', '', NULL, '', '2', '2015-09-04 12:29:20', '2', '2015-09-04 06:59:20', 0),
(48, 'TT48', 6, 2, 'check  ', '', '', '0009-08-19', '1:30 AM', '3:00 AM', '', '', '', '', '', '', '1', '', '', NULL, '', '2', '2015-09-04 12:45:56', '2', '2015-09-04 07:16:27', 0),
(49, 'TT49', 6, 2, 'sandhiya2  ', '', '', '0009-08-19', '2:00 AM', '2:30 AM', '', '', 'rgdsfhdfgh', 'ghfg', '', '', '1', '', '', NULL, '', '2', '2015-09-04 12:48:49', '2', '2015-09-04 07:21:14', 0),
(50, 'TT50', 6, 2, ' no light', '5', '1', '2015-09-08', '1:30 AM', '3:30 AM', '', '', 'plz help', '', '', '', '1', '', '', NULL, '', '2', '2015-09-04 12:52:39', '2', '2015-09-04 07:22:39', 0),
(51, 'TT51', 6, 2, '  short  ', '', '', '2015-09-23', '1:00 AM', '2:00 AM', '', '', 'fdgdfgdg', 'sdgdfg', '', '', '1', '', '', NULL, '', '2', '2015-09-04 12:55:02', '2', '2015-09-04 07:28:40', 0),
(52, 'TT52', 6, 2, 'sandhiya45', '1', '2', '2015-08-25', '1:00 AM', '2:30 AM', '', 'solved', 'first\r\n', 'reas', '', '', '5', '', '58', '0000-00-00 00:00:00', '', '2', '2015-09-04 01:03:44', '55', '2015-09-04 01:58:07', 0),
(53, 'TT53', 6, 42, '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '1', '', '', NULL, '', '42', '2015-09-04 01:07:19', '42', '2015-09-03 19:37:19', 0),
(54, 'TT54', 6, 42, 'high', '1', '1', '2015-09-05', '12:00 AM', '2:00 AM', '', 'test resolve', 'test', 'reopen', '', '', '5', '', '73', '2015-09-04 19:49:14', '', '42', '2015-09-04 01:10:56', '42', '2015-09-04 02:22:57', 0),
(55, 'TT55', 6, 42, 'high', '2', '2', '2015-09-07', '1:00 AM', '2:30 AM', '', '', 'testy', '', '', '', '1', '', '', NULL, '', '42', '2015-09-04 01:20:28', '42', '2015-09-03 19:50:42', 1),
(56, 'TT56', 6, 2, '  saasd', '1', '2', '2015-09-16', '1:00 AM', '2:30 AM', '', 'gfhfgh', 'sdafgdg', 'rop', '', '', '4', 'Reopen', '55', '2015-09-04 19:42:51', '', '2', '2015-09-04 02:36:34', '73', '2015-09-04 02:13:45', 0),
(57, 'TT57', 6, 42, 'test pluming', '1', '1', '2015-09-05', '12:00 AM', '1:30 AM', '', 'accepted', 'test', '', '', '', '2', 'Reopen', '83', '2015-09-04 19:41:18', '', '42', '2015-09-04 02:44:00', '73', '2015-09-04 02:11:31', 0),
(58, 'TT58', 6, 2, 'hfdjghg gfg', '1', '2', '2015-09-02', '2:00 AM', '1:30 AM', '', '', 'jytut', '', '', '', '1', 'Reopen', '', NULL, '', '2', '2015-09-06 01:01:44', '2', '2015-09-05 19:31:44', 0),
(59, 'TT59', 6, 42, 'testhigh', '2', '1', '2015-09-18', '12:00 AM', '1:00 AM', '', '', 'test', '', '', '', '1', 'Reopen', '', NULL, '', '42', '2015-09-06 04:11:37', '42', '2015-09-05 22:41:37', 0),
(60, 'TT60', 6, 42, 'testhigh', '4', '3', '2015-09-08', '12:00 AM', '1:00 AM', '', 'test', 'test', '', '', '', '2', 'Reopen', '99', '2015-09-06 16:23:03', '', '42', '2015-09-06 04:13:32', '99', '2015-09-05 22:53:18', 0),
(61, 'TT61', 6, 90, '  piupe', '1', '3', '2015-09-01', '1:00 AM', '2:30 AM', '', '', '2er2r32er', '', '', '', '1', 'Reopen', '', NULL, '', '90', '2015-09-07 01:37:08', '90', '2015-09-06 20:07:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_ticketstatus`
--

CREATE TABLE IF NOT EXISTS `fms_ticketstatus` (
  `statusid` int(11) NOT NULL AUTO_INCREMENT,
  `ticketstatus` varchar(255) NOT NULL,
  `createddate` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `modifiedby` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`statusid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fms_ticketstatus`
--

INSERT INTO `fms_ticketstatus` (`statusid`, `ticketstatus`, `createddate`, `createdby`, `modifieddate`, `modifiedby`, `status`) VALUES
(1, 'Open', '0000-00-00 00:00:00', 0, '2015-04-24 14:57:52', 0, 0),
(2, 'Accept', '0000-00-00 00:00:00', 0, '2015-04-24 14:57:00', 0, 0),
(3, 'Pending', '0000-00-00 00:00:00', 0, '2015-04-24 14:57:22', 0, 0),
(4, 'Inprogress', '0000-00-00 00:00:00', 0, '2015-04-24 14:57:22', 0, 0),
(5, 'Resolved', '0000-00-00 00:00:00', 0, '2015-04-24 14:57:36', 0, 0),
(6, 'Reopen', '0000-00-00 00:00:00', 0, '2015-04-24 14:57:36', 0, 0),
(7, 'closed', '2015-09-06 11:30:08', 1, '2015-09-06 11:30:08', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_user`
--

CREATE TABLE IF NOT EXISTS `fms_user` (
  `userid` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `appartmentid` int(11) DEFAULT NULL,
  `blocknumber` varchar(100) NOT NULL,
  `blockname` varchar(255) NOT NULL,
  `flatnumber` varchar(100) NOT NULL,
  `noofmembers` varchar(100) NOT NULL,
  `permanentaddress` text NOT NULL,
  `currentaddress` text NOT NULL,
  `yearofexperience` int(10) DEFAULT NULL,
  `gatenumber` int(10) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `userimage` varchar(255) NOT NULL,
  `attachmentname` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `createdtime` datetime NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifiedtime` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `vendorid` varchar(100) NOT NULL,
  `vendoradminid` int(10) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `age` int(10) DEFAULT NULL,
  `proprietor` varchar(200) NOT NULL,
  `contactperson` varchar(200) NOT NULL,
  `servicesoffered` varchar(100) DEFAULT NULL,
  `telephone` int(20) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `fms_user`
--

INSERT INTO `fms_user` (`userid`, `firstname`, `lastname`, `mobile`, `email`, `username`, `password`, `appartmentid`, `blocknumber`, `blockname`, `flatnumber`, `noofmembers`, `permanentaddress`, `currentaddress`, `yearofexperience`, `gatenumber`, `city`, `state`, `userimage`, `attachmentname`, `category`, `usertype`, `role`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`, `vendorid`, `vendoradminid`, `companyname`, `age`, `proprietor`, `contactperson`, `servicesoffered`, `telephone`) VALUES
(1, 'MIIT', 'MIIT', '9952041996', 'info@imaruthi.com', 'info@imaruthi.com', 'imaruthi', 0, '2', '', '3', '6', 'No.94, Pillaiyar Koil Street,\r\n(Facing Valluvar Street),\r\nJaffarkhanpet,\r\nChennai, Tamilnadu\r\nIndia.\r\nZIP Code:60008', 'No.94, Pillaiyar Koil Street,\r\n(Facing Valluvar Street),\r\nJaffarkhanpet,\r\nChennai, Tamilnadu\r\nIndia.\r\nZIP Code:60008', 0, 0, '', '', 'Documents/Users/office-20150901105907.jpg', 'office.jpg', '', '', 1, 1, '2015-06-10 00:00:00', 1, '2015-09-01 10:59:07', 0, '0', 0, '', 0, '', '', 'a:3:{i:0;s:1:"1";i:1;s:1:"3";i:2;s:1:"5";}', 0),
(2, 'admin', 'admin', '9952041996', '', 'admin@gmail.com', 'admin', 6, '1', '', 'A1', '1', '1', '12', NULL, NULL, '', '', 'Documents/Users/shop-20150831023833.jpg', 'shop.jpg', '', '', 2, 2, '2015-08-19 03:58:34', 2, '2015-08-31 02:38:33', 0, '0', 0, '', NULL, '', '', NULL, NULL),
(3, 'security', '1', '9876543210', '', 'security@gmail.com', 'security', 2, '', '', '', '', 'chennai', 'chennai', 2, 25, '', '', 'Documents/Users/security-20150831114515.jpg', 'security.jpg', '', '', 5, 2, '2015-08-31 11:45:15', 2, '2015-08-31 11:45:15', 0, '', 0, 'secure', 21, '', '', NULL, NULL),
(14, 'Nagendran', 'Neelamegam', '9940144781', '', 'ursnagi@gmail.com', 'sachin123', 2, 'D', '', 'D1', '5', 'D1,Gani Residency, 6th Main Road, Jayachandra Nagar, Pallikaranai', 'D1,Gani Residency, 6th Main Road, Jayachandra Nagar, Pallikaranai', NULL, NULL, '', '', '', '', '', 'Owner', 3, 2, '2015-08-31 02:37:33', 2, '2015-08-31 02:37:33', 0, '', 0, '', NULL, '', '', NULL, NULL),
(40, '', '', '9626262084', '', 'domainvendor1@gmail.com', '', 12, '', '', '', '', 'test', '', NULL, NULL, '', '', 'Documents/Users/vendor-20150904054117.jpeg', 'vendor.jpeg', '', '', 4, 1, '2015-08-31 03:59:46', 1, '2015-09-05 05:22:47', 1, 'VN26', 0, 'domain vendor1', NULL, 'domain vendor1', 'domain vendor1', 'a:3:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";}', 44234561),
(41, '', '', '987654321', '', 'domainvendor2@gmail.com', '', 7, '', '', '', '', 'test', '', NULL, NULL, '', '', '', '', '', '', 4, 1, '2015-08-31 04:00:46', 2, '2015-09-07 07:38:32', 1, 'VN27', 0, 'domain vendor2', NULL, 'domain vendor2', 'domain vendor2', 'a:1:{i:0;s:1:"2";}', 44234561),
(42, 'admin', 'user1', '4', '', 'adminuser1@gmail.com', 'adminuser', 6, '2', '', '8', '3', 'test', 'test', NULL, NULL, '', '', '', '', '', 'Owner', 2, 1, '2015-08-31 04:03:32', 1, '2015-09-01 04:40:05', 0, '', 0, '', NULL, '', '', NULL, NULL),
(43, 'admin', 'user2', '2', '', 'adminuser2@gmail.com', 'adminuser', 7, '2', '', '8', '3', 'test', 'test', NULL, NULL, '', '', '', '', '', 'Owner', 2, 1, '2015-08-31 04:04:38', 1, '2015-09-01 04:40:23', 0, '', 0, '', NULL, '', '', NULL, NULL),
(44, 'admin', 'vendor 1', '987654321', '', 'adminvendor1@gmail.com', 'vendor', 10, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '', '', 4, 42, '2015-08-31 04:25:02', 2, '2015-09-07 07:38:36', 1, 'VN28', 0, 'admin vendor1', NULL, 'admin vendor1', 'admin vendor1', 'a:1:{i:0;s:1:"3";}', 44234561),
(45, 'admin', 'vendor 2', '2', '', 'adminvendor2@gmail.com', 'vendor', 13, '', '', '', '', 'TEST', 'TEST', NULL, NULL, '', '', '', '', '', '', 4, 42, '2015-08-31 04:30:09', 2, '2015-09-07 07:38:41', 1, 'VN29', 0, 'admin vendor2', NULL, 'admin vendor2', 'admin vendor2', 'a:1:{i:0;s:1:"4";}', 44234561),
(46, 'admin', 'vendor 3', '12345', '', 'adminvendor3@gmail.com', 'vendor', 13, '', '', '', '', 'TEST', 'TEST', NULL, NULL, '', '', '', '', '', '', 4, 43, '2015-08-31 04:33:54', 2, '2015-09-07 07:38:45', 1, 'VN30', 0, 'admin vendor 3', NULL, 'admin vendor 3', 'admin vendor 3', 'a:1:{i:0;s:1:"5";}', 44234561),
(47, 'admin', 'vendor 4', '987654321', '', 'adminvendor4@gmail.com', 'vendor', 7, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '', '', 4, 43, '2015-08-31 04:35:17', 2, '2015-09-07 07:38:50', 1, 'VN31', 0, 'admin vendor4', NULL, 'admin vendor4', 'admin vendor4', 'a:1:{i:0;s:1:"8";}', 44234561),
(48, 'admin', 'user1A', '1', '', 'adminuser1A@gmail.com', 'adminuser', 6, '5', '', '5', '5', 'TEST', 'TEST', NULL, NULL, '', '', 'Documents/Users/1-20150717025947-20150903125150.jpg', '1-20150717025947.jpg', '', 'Tenant', 3, 2, '2015-08-31 04:47:27', 2, '2015-09-03 12:51:50', 0, '', 0, '', NULL, '', '', NULL, NULL),
(49, 'admin', 'user1B', '987654321', '', 'adminuser1B@gmail.com', 'adminuser', 6, '1', '', '1', '1', 'TEST', 'TEST', NULL, NULL, '', '', 'Documents/Users/1-20150903124914.jpg', '1.jpg', '', 'Tenant', 3, 2, '2015-08-31 04:53:06', 2, '2015-09-03 12:49:14', 0, '', 0, '', NULL, '', '', NULL, NULL),
(50, 'admin', 'user2A', '987654321', '', 'adminuser2A@gmail.com', 'adminuser', 7, '1', '', '5', '7', 'TEST', 'TEST', NULL, NULL, '', '', '', '', '', 'Tenant', 3, 43, '2015-08-31 04:55:17', 43, '2015-08-31 04:55:17', 0, '', 0, '', NULL, '', '', NULL, NULL),
(51, 'admin', 'user2B', '6', '', 'adminuser2B@gmail.com', 'adminuser', 7, '8', '', '8', '6', 'TEST', 'TEST', NULL, NULL, '', '', '', '', '', 'Owner', 3, 43, '2015-08-31 04:56:24', 43, '2015-08-31 04:56:24', 0, '', 0, '', NULL, '', '', NULL, NULL),
(52, 'security 1', '1', '9876543210', '', 'security1.1@gmail.com', '123456789', 6, '', '', '', '', 'chennai', 'chennai', 2, 2, '', '', 'Documents/Users/security-20150831050305.jpg', 'security.jpg', '', '', 5, 2, '2015-08-31 05:03:05', 2, '2015-08-31 05:03:05', 0, '', 0, 'secure', 25, '', '', NULL, NULL),
(53, 'test', 'test', 'test', '', 'test@test.com', 'test', 1, 'test', '', 'test', 'test', 'test', 'test', NULL, NULL, '', '', '', '', '', 'Owner', 2, 1, '2015-09-01 09:55:30', 1, '2015-09-01 09:55:51', 1, '', 0, '', NULL, '', '', NULL, NULL),
(54, 'test', 'test', 'test', '', 'test1@test.com', 'test', 0, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '', '', 4, 1, '2015-09-01 09:56:38', 1, '2015-09-01 09:56:45', 1, 'VN32', 0, 'test', NULL, 'test', 'test', 'a:1:{i:0;s:1:"6";}', 0),
(55, 'plumber', 'plumber', '09626260848', '', 'plumber@gmail.com', 'dsfgdsgdfg', 9, '', '', '', '', 'ashok nagar', 'ashok nagar', NULL, NULL, '', '', '', '', '1', '', 6, 40, '2015-09-01 11:12:26', 40, '2015-09-01 11:12:26', 0, '', 40, '', NULL, '', '', '', NULL),
(56, 'Test', 'security', 'Test security', '', 'Testsecurity@gmail.com', 'security', 6, '', '', '', '', 'Test security', 'Test security', 0, 0, '', '', '', '', '', '', 5, 42, '2015-09-01 11:33:13', 42, '2015-09-01 11:35:37', 1, '', 0, 'Test security', 0, '', '', NULL, NULL),
(57, 'test', 'security', 'Test security', '', 'Testsecurity1@gmail.com', 'security', 6, '', '', '', '', 'Test security', 'Test security', 0, 0, '', '', '', '', '', '', 5, 42, '2015-09-01 11:48:53', 42, '2015-09-01 11:48:53', 0, '', 0, 'Test security', 0, '', '', NULL, NULL),
(58, 'vendor', 'userA', 'TEST', '', 'vendoruserA@gmail.com', 'vendor', 9, '', '', '', '', 'TEST', 'TEST', NULL, NULL, '', '', '', '', '3', '', 6, 44, '2015-09-01 12:05:30', 44, '2015-09-01 12:37:35', 0, '', 44, '', NULL, '', '', '', NULL),
(59, 'vendor user', 'C', 'TEST', '', 'vendoruserC@gmail.com', 'vendor', 6, '', '', '', '', 'TEST', 'TEST', NULL, NULL, '', '', '', '', '4', '', 6, 45, '2015-09-01 12:06:58', 45, '2015-09-01 12:39:14', 0, '', 45, '', NULL, '', '', '', NULL),
(60, 'vendor', 'userB', 'test', '', 'vendoruserB@gmail.com', 'vendor', 9, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '3', '', 6, 44, '2015-09-01 12:14:59', 44, '2015-09-01 12:37:18', 0, '', 44, '', NULL, '', '', '', NULL),
(61, 'vendor', 'user D', 'test', '', 'vendoruserD@gmail.com', 'vendor', 6, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '4', '', 6, 45, '2015-09-01 12:40:19', 45, '2015-09-01 12:40:19', 0, '', 45, '', NULL, '', '', '', NULL),
(62, 'vendor user', 'E', 'TEST', '', 'vendoruserE@gmail.com', 'vendor', 9, '', '', '', '', 'TEST', 'TEST', NULL, NULL, '', '', '', '', '5', '', 6, 46, '2015-09-01 04:24:20', 46, '2015-09-01 04:24:20', 0, '', 46, '', NULL, '', '', '', NULL),
(63, 'vendor', 'user F', 'test', '', 'vendoruserF@gmail.com', 'vendor', 9, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '5', '', 6, 46, '2015-09-01 04:25:43', 46, '2015-09-01 04:25:43', 0, '', 46, '', NULL, '', '', '', NULL),
(64, 'vendor', 'user G', 'test', '', 'vendoruserG@gmail.com', 'vendor', 7, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '8', '', 6, 47, '2015-09-01 04:27:55', 47, '2015-09-01 04:27:55', 0, '', 47, '', NULL, '', '', '', NULL),
(65, 'vendor', 'user H', 'test', '', 'vendoruserH@gmail.com', 'vendor1', 7, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '8', '', 6, 47, '2015-09-01 04:29:09', 47, '2015-09-01 04:29:09', 0, '', 47, '', NULL, '', '', '', NULL),
(66, 'Gani', 'Admin', '9840353349', '', 'murugeswaran.m@imaruthi.com', 'murugeswaran', 10, '1', '', '1', '1', 'Nil', 'Nil', NULL, NULL, '', '', 'Documents/Users/vendor user-20150904044452.jpeg', 'vendor user.jpeg', '', '', 2, 1, '2015-09-02 12:48:16', 1, '2015-09-04 04:44:52', 0, '', 0, '', NULL, '', '', NULL, NULL),
(67, '1', '1', '1', '', '1@gmail.com', '1', 6, '1', '', '1', '1', '1', '1', NULL, NULL, '', '', '', '', '', 'Owner', 2, 1, '2015-09-02 12:58:43', 1, '2015-09-02 01:00:45', 1, '', 0, '', NULL, '', '', NULL, NULL),
(68, '2', '2', '2', '', '2@gmailk.com', 'imaruthi', 6, '22', '', '2', '2', '2', '2', NULL, NULL, '', '', '', '', '', 'Owner', 2, 1, '2015-09-02 01:00:12', 1, '2015-09-02 01:01:31', 1, '', 0, '', NULL, '', '', NULL, NULL),
(69, 'lilly', 'john', '9876', '', 'lmerlin16@gmail.com', 'test', 7, '2', '', '256', '5', 'test', 'test', NULL, NULL, '', '', 'Documents/Users/3-20150902025313.jpg', '3.jpg', '', 'Tenant', 2, 1, '2015-09-02 02:53:13', 1, '2015-09-02 02:53:13', 0, '', 0, '', NULL, '', '', NULL, NULL),
(70, 'vendor user', 'E', '1', '', 'vendoruserE1@gmail.com', 'vendor', 7, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '5', '', 6, 46, '2015-09-02 05:08:39', 46, '2015-09-02 05:08:39', 0, '', 46, '', NULL, '', '', '', NULL),
(71, 'lilly', 'john', '987654321', '', 'lily@gmail.com', 'lily', 10, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '1', '', 6, 44, '2015-09-03 11:04:58', 44, '2015-09-03 11:04:58', 0, '', 44, '', NULL, '', '', '', NULL),
(72, 'admin', 'vendor pluming', '987654321', '', 'plumingvendor@gmail.com', 'vendor', 11, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '', '', 4, 42, '2015-09-03 11:11:02', 2, '2015-09-07 07:38:55', 1, 'VN33', 0, 'pluming', NULL, 'ninu', 'ninu', 'a:1:{i:0;s:1:"1";}', 44234561),
(73, 'lilly', 'john', '987654321', '', 'lilyuser@gmail.com', 'lily', 6, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '1', '', 6, 72, '2015-09-03 11:13:01', 72, '2015-09-03 11:13:01', 0, '', 72, '', NULL, '', '', '', NULL),
(74, 'THALAPATHI', 'PALANISAMY', '9095495546', '', 'thalapathi1993@gmail.com', 'thalapathi', 6, '1', '', '5', '5', '4/90 N.Thottipalayam,\r\nThaligai(po),\r\nNamakkal(dt)', 'annai sathiya nagar\r\n13th street\r\narumbakkam', NULL, NULL, '', '', 'Documents/Users/hd-natural-wallpaper-20150903012557.jpg', 'hd-natural-wallpaper.jpg', '', 'Owner', 3, 2, '2015-09-03 01:25:57', 2, '2015-09-03 01:25:57', 0, '', 0, '', NULL, '', '', NULL, NULL),
(75, 'rgv', 'rgv', '1', '', 'rgv@gmail.com', 'rgv', 11, '1', '', '1', '12', '1', '1', NULL, NULL, '', '', '', '', '', 'Owner', 2, 1, '2015-09-03 10:05:22', 1, '2015-09-03 10:05:22', 0, '', 0, '', NULL, '', '', NULL, NULL),
(76, 'security', '1', '1', '', 'sec@gmail.com', 'sec', 11, '', '', '', '', '11', '1', 1, 1, '', '', '', '', '', '', 5, 75, '2015-09-03 10:11:28', 75, '2015-09-03 10:11:28', 0, '', 0, '1', 1, '', '', NULL, NULL),
(77, '1', '1', '1', '', 'owner@gmail.com', 'owner', 11, '1', '', '1', '1', '1', '1', NULL, NULL, '', '', '', '', '', 'Owner', 3, 75, '2015-09-03 10:13:48', 75, '2015-09-03 10:13:48', 0, '', 0, '', NULL, '', '', NULL, NULL),
(78, 'lily', 'john', '234', '', 'lilly16john@gmail.com', 'test', 6, 'test', '', 'test', '2', 'test', 'test', NULL, NULL, '', '', '', '', '', 'Owner', 3, 42, '2015-09-04 12:51:57', 42, '2015-09-04 12:51:57', 0, '', 0, '', NULL, '', '', NULL, NULL),
(79, 'hema', 'latha', '986532147', '', 'user@gmail.com', 'user', 6, '1', '', '1', '2', 'chennai', 'chennai', NULL, NULL, '', '', 'Documents/Users/user-20150904014349.png', 'user.png', '', 'Owner', 3, 2, '2015-09-04 01:43:49', 2, '2015-09-04 01:43:49', 0, '', 0, '', NULL, '', '', NULL, NULL),
(80, 'hema', 'latha', '983352355', '', 'user1@gmail.com', '2365984', 6, '1', '', '1', '2', 'chennai', 'chennai', NULL, NULL, '', '', 'Documents/Users/user-20150904030146.png', 'user.png', '', 'Owner', 3, 2, '2015-09-04 03:01:46', 2, '2015-09-04 03:01:46', 0, '', 0, '', NULL, '', '', NULL, NULL),
(81, 'security', '1', '1', '', 'security1@gmail.com', 'security1', 11, '', '', '', '', '1', '1', 1, 1, '', '', '', '', '', '', 5, 75, '2015-09-04 03:30:21', 75, '2015-09-04 03:30:21', 0, '', 0, '1', 1, '', '', NULL, NULL),
(82, '', '', '1', '', 'ven@gmail.com', 'ven', 0, '', '', '', '', '1', '', NULL, NULL, '', '', '', '', '', '', 4, 1, '2015-09-04 03:44:49', 2, '2015-09-07 07:39:00', 1, 'VN34', 0, 'Vendor Company', NULL, '1', '1', 'a:4:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";}', 1),
(83, 'plumber', '1', '1', '', 'plu@gmail.com', 'plu', 0, '', '', '', '', '1', '1', NULL, NULL, '', '', '', '', '1', '', 6, 82, '2015-09-04 03:48:40', 82, '2015-09-04 03:48:40', 0, '', 82, '', NULL, '', '', '', NULL),
(84, 'carpentor', '1', 'd', '', 'car@gmail.com', 'car', 0, '', '', '', '', 'd', 'd', NULL, NULL, '', '', '', '', '3', '', 6, 82, '2015-09-04 03:49:26', 82, '2015-09-04 03:49:26', 0, '', 82, '', NULL, '', '', '', NULL),
(85, 'vendor user', 'lilly', '1', '', 'vendor@yahoo.com', 'vendoe', 11, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '1', '', 6, 72, '2015-09-04 06:18:22', 72, '2015-09-04 06:18:22', 0, '', 72, '', NULL, '', '', '', NULL),
(86, '', '', '', '', '', '', 6, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 5, 52, '2015-09-04 07:10:38', 2, '2015-09-07 07:38:00', 1, '', 0, '', 0, '', '', NULL, NULL),
(87, 'sandy', 'FDGfd', '09626260848', '', 'asd@gmail.com', 'fdgfdg', 7, '', '', '', '', 'fgjhg', 'ghjghj', NULL, NULL, '', '', 'Documents/Users/1969617-20150904071516.jpg', '', '2', '', 6, 47, '2015-09-04 07:15:16', 47, '2015-09-04 07:15:16', 0, '', 47, '', NULL, '', '', '', NULL),
(88, 'good ', 'guard', '324234234243324', '', 'as@bs.com', 'as123#', 6, '', '', '', '', 'asdsa', 'asdasd', 2, 21, '', '', '', '', '', '', 5, 2, '2015-09-05 05:37:17', 2, '2015-09-07 07:38:05', 1, '', 0, 'cid', 21, '', '', NULL, NULL),
(89, '', '', '13242344', '', 'vend@as.com', 'vend123#', 0, '', '', '', '', 'dsdsf', '', NULL, NULL, '', '', '', '', '', '', 4, 1, '2015-09-05 05:47:07', 2, '2015-09-07 07:39:05', 1, 'VN35', 0, 'sdfd', NULL, 'dsfdsf', 'sdddsf', 'a:1:{i:0;s:1:"3";}', 2147483647),
(90, 'ASDAS', 'ASDASD', '9738458522', '', 'owner@fms.com', 'owner123#', 6, '1', '', '1', '12', 'SARDGAADF', 'ADSGDF', NULL, NULL, '', '', '', '', '', 'Owner', 3, 2, '2015-09-05 06:00:01', 2, '2015-09-05 06:00:01', 0, '', 0, '', NULL, '', '', NULL, NULL),
(91, 'fasfasfdasf', 'asffdsafafsa', '9994972556', '', 'tenant@gmail.com', 'tTenant123#', 6, '2', '', '4', '12', 'zsvs', 'zsvdcsv', NULL, NULL, '', '', '', '', '', 'Tenant', 3, 2, '2015-09-05 06:04:52', 2, '2015-09-05 06:04:52', 0, '', 0, '', NULL, '', '', NULL, NULL),
(92, 'fasfasfdasf', 'fadssdfsd', '9994972556', '', 'tenant@fms.com', 'tenant123#', 6, '1', '', '3', '12', 'sdf', 'zCZ', NULL, NULL, '', '', '', '', '', 'Tenant', 3, 2, '2015-09-05 06:09:05', 2, '2015-09-05 06:09:05', 0, '', 0, '', NULL, '', '', NULL, NULL),
(93, 'sdfasad', 'sdfaafsdf', '1231213123', '', 'plumb@fms.com', 'plumb123#', 0, '', '', '', '', 'afddsfsa', 'faddfss', NULL, NULL, '', '', '', '', '3', '', 6, 89, '2015-09-05 07:58:09', 89, '2015-09-05 07:58:09', 0, '', 89, '', NULL, '', '', '', NULL),
(94, 'jgjhg', 'hjgjhg', '2334556', '', 'guard@fms.com', 'guard123#', 6, '', '', '', '', 'bfghg', 'hgfjhgf', 12, 21, '', '', '', '', '', '', 5, 2, '2015-09-05 08:14:14', 2, '2015-09-07 07:37:54', 1, '', 0, 'jgjhg', 0, '', '', NULL, NULL),
(95, 'fhgfh', 'hjgjhg', '2334556', '', 'ten@ten.com', 'ten123#', 6, '1', '', '1', '12', 'hgjh', 'hgfhjgf', NULL, NULL, '', '', '', '', '', 'Tenant', 3, 2, '2015-09-05 08:24:04', 2, '2015-09-05 08:24:04', 0, '', 0, '', NULL, '', '', NULL, NULL),
(96, '', '', 'test vendor', '', 'testvendor@gmail.com', 'vendor', 0, '', '', '', '', 'test vendor', '', NULL, NULL, '', '', '', '', '', '', 4, 1, '2015-09-06 12:47:37', 2, '2015-09-07 07:39:10', 1, 'VN36', 0, 'test vendor', NULL, 'test vendor', 'test vendor', 'a:1:{i:0;s:1:"2";}', 0),
(97, 'trader', 'trader', '5845454447', '', 'sdsdf@gmail.com', 'ghfgh', 13, '2', '', '4', '20', 'fjhgj', 'ghjhgj', NULL, NULL, 'chennai', 'tamilnadu', '', '', '', '', 2, 1, '2015-09-06 02:59:45', 1, '2015-09-06 03:07:55', 1, '', 0, '', NULL, '', '', NULL, NULL),
(98, 'aaaaaaaaaaa', 'bg', '486456', '', 'fdg@gmail.com', 'fdghh', 9, '4', '', '4', '45', 'fdghdfg', 'dfgdfg', NULL, NULL, 'fdgdfg', 'fdg', '', '', '', '', 2, 1, '2015-09-06 03:09:36', 1, '2015-09-06 03:09:42', 1, '', 0, '', NULL, '', '', NULL, NULL),
(99, 'test', 'vendoruser', '99999999', '', 'vendortest@gmail.om', 'vendor', 13, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '4', '', 6, 45, '2015-09-06 04:21:58', 45, '2015-09-06 04:21:58', 0, '', 45, '', NULL, '', '', '', NULL),
(100, 'test', 'vendoruser1', 'test', '', 'testvendor@gmail.com', 'vendor', 13, '', '', '', '', 'test', 'test', NULL, NULL, '', '', '', '', '3', '', 6, 45, '2015-09-06 04:25:21', 45, '2015-09-06 04:25:21', 0, '', 45, '', NULL, '', '', '', NULL),
(101, 'Shiva', 'Giri', '9840353349', '', 'shiva@gmail.com', 'shiva', 6, '1', '', '1', '0', '10 park way ', '10 park way', NULL, NULL, 'Chennai', 'Chennai', '', '', '', 'Owner', 3, 2, '2015-09-07 10:06:18', 2, '2015-09-07 10:07:32', 0, '', 0, '', NULL, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fms_usertype`
--

CREATE TABLE IF NOT EXISTS `fms_usertype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(100) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdtime` datetime NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifiedtime` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fms_usertype`
--

INSERT INTO `fms_usertype` (`id`, `usertype`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'Domain', 1, '2015-06-10 12:12:12', 1, '2015-06-10 12:12:12', 0),
(2, 'Admin', 1, '2015-06-10 12:12:12', 1, '2015-06-10 12:12:12', 0),
(3, 'User', 1, '2015-06-10 12:12:12', 1, '2015-06-10 12:12:12', 0),
(4, 'Vendor', 1, '2015-06-10 12:12:12', 1, '2015-06-10 12:12:12', 0),
(5, 'Security', 1, '2015-06-10 12:12:12', 1, '2015-06-10 12:12:12', 0),
(6, 'Vendor User', 1, '2015-08-12 03:35:36', 1, '2015-08-12 03:35:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_vehicletype`
--

CREATE TABLE IF NOT EXISTS `fms_vehicletype` (
  `visitid` int(10) NOT NULL AUTO_INCREMENT,
  `vehicletypes` varchar(50) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`visitid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fms_vehicletype`
--

INSERT INTO `fms_vehicletype` (`visitid`, `vehicletypes`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'By walk', 5, '2015-08-14 00:00:00', 5, '2015-08-14 00:00:00', 0),
(2, '2 wheeler', 5, '2015-08-14 00:00:00', 5, '2015-08-14 00:00:00', 0),
(3, '4 wheeler', 5, '2015-08-14 00:00:00', 5, '2015-08-14 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_vendortype`
--

CREATE TABLE IF NOT EXISTS `fms_vendortype` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `vendortype` varchar(100) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdtime` datetime DEFAULT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifiedtime` datetime DEFAULT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fms_vendortype`
--

INSERT INTO `fms_vendortype` (`id`, `vendortype`, `createdby`, `createdtime`, `modifiedby`, `modifiedtime`, `status`) VALUES
(1, 'Electrical', 4, '2015-08-10 11:42:14', 4, '2015-08-10 11:42:14', 0),
(2, 'Plumbing', 4, '2015-08-10 11:43:19', 4, '2015-08-10 11:43:19', 0),
(3, 'Gardening', 4, '2015-08-10 11:43:36', 4, '2015-08-10 11:43:36', 0),
(4, 'Interior works', 4, '2015-08-10 11:43:55', 4, '2015-08-10 11:43:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fms_visitor`
--

CREATE TABLE IF NOT EXISTS `fms_visitor` (
  `visitorid` int(10) NOT NULL AUTO_INCREMENT,
  `aptid` int(10) DEFAULT NULL,
  `securityid` int(10) DEFAULT NULL,
  `indatetime` date DEFAULT NULL,
  `outdatetime` date NOT NULL,
  `name` varchar(200) NOT NULL,
  `phonenumber` int(15) DEFAULT NULL,
  `emailid` varchar(50) NOT NULL,
  `purposeofmeet` varchar(500) NOT NULL,
  `company` varchar(100) NOT NULL,
  `ticketno` varchar(100) NOT NULL,
  `numberofvisitors` int(10) NOT NULL,
  `vehicletype` varchar(10) NOT NULL,
  `intime` varchar(255) DEFAULT NULL,
  `outtime` varchar(100) NOT NULL,
  `vehicle` varchar(200) NOT NULL,
  `blocknumber` int(10) NOT NULL,
  `flatnumber` int(20) NOT NULL,
  `userimage` varchar(100) NOT NULL,
  `attachmentname` varchar(100) NOT NULL,
  `personname` varchar(200) NOT NULL,
  `personemail` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `createdtime` varchar(255) NOT NULL,
  `createdby` varchar(255) NOT NULL,
  `modifiedby` varchar(255) NOT NULL,
  `modifiedtime` varchar(255) NOT NULL,
  PRIMARY KEY (`visitorid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fms_visitor`
--

INSERT INTO `fms_visitor` (`visitorid`, `aptid`, `securityid`, `indatetime`, `outdatetime`, `name`, `phonenumber`, `emailid`, `purposeofmeet`, `company`, `ticketno`, `numberofvisitors`, `vehicletype`, `intime`, `outtime`, `vehicle`, `blocknumber`, `flatnumber`, `userimage`, `attachmentname`, `personname`, `personemail`, `status`, `createdtime`, `createdby`, `modifiedby`, `modifiedtime`) VALUES
(1, 6, 52, '2015-09-06', '2015-09-06', 'hema', 2147483647, 'visitor@gmail.com', '1', '', '', 1, '1', '04:37:10', '04:37:10', '3693', 2, 4, 'Documents/Users/visitors-20150906043710.png', 'visitors.png', 'jai', '', 0, '', '52', '2', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
