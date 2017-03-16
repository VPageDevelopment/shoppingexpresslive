-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2017 at 06:36 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vpageinc_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `epin`
--

CREATE TABLE IF NOT EXISTS `epin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `prefix` varchar(50) NOT NULL,
  `evalue` int(10) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `useduser` varchar(10) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `epin`
--

INSERT INTO `epin` (`id`, `prefix`, `evalue`, `userid`, `useduser`, `status`) VALUES
(1, 'EPIN', 11001, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(25) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `gender`, `status`) VALUES
(1, 'Male', 0),
(2, 'Female', 0);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `day_bal` int(11) NOT NULL,
  `current_bal` int(11) NOT NULL,
  `total_bal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pack1`
--

CREATE TABLE IF NOT EXISTS `pack1` (
  `ProductID` int(225) NOT NULL AUTO_INCREMENT,
  `productcode` varchar(30) NOT NULL,
  `package` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fabrictype` varchar(20) NOT NULL,
  `actualprice` int(11) NOT NULL,
  `feathures` varchar(255) NOT NULL,
  `instock` int(11) NOT NULL,
  `packimage` varchar(255) NOT NULL,
  `attachmentname` varchar(255) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `pack1`
--

INSERT INTO `pack1` (`ProductID`, `productcode`, `package`, `title`, `description`, `fabrictype`, `actualprice`, `feathures`, `instock`, `packimage`, `attachmentname`, `status`) VALUES
(47, '    SUS_KUR 5313 B', '750', '   women section', '   Sushil Blue south Cotton Kurthi with Silver and Bronze Printed Yoke', '    Cotton', 300, '    Blue', 0, 'images/packages/2-(2).png', '2-(2).png', 0),
(48, '  SUS_KUR 5296 C', '1020', '  women section', '  Sushil Neon Green Rayon A-cut Kurthi with large brocade yoke', '  Rayon', 2000, '  Neon Green', 0, 'images/packages/3.png', '3.png', 0),
(49, ' SUS_KUR 5317', '740', ' women section', ' Susil Solid Pink south cotton kurthi with multi color cotton centre panel', ' South Cotton', 2000, ' Solid Pink', 0, 'images/packages/4.png', '4.png', 0),
(50, ' SUS_KUR 1018 B', '950', ' women section', ' Sushil Pink Green south cotton kurthi with floral embroiderey', ' South Cotton', 2000, ' Pink Green ', 0, 'images/packages/5.png', '5.png', 0),
(51, ' SUS_KUR 5307A', '820', ' women section', ' Sushil Red twill rayon kurthi with golden highlights in the yoke that glitter in bright light', ' Twill Rayon', 1000, '  Red', 0, 'images/packages/6.png', '6.png', 0),
(52, ' SUS_KUR 5306 C', '790', ' womens', ' Sushil Green Rayon kurthi with golden highlights in the yoke that glitter in bright light', ' Rayon', 1000, '  Green', 0, 'images/packages/7.png', '7.png', 0),
(53, ' SUS_KUR 5296 B', '1020', ' womens section ', ' Sushil Yellow Rayon A Cut Kurthi with Large Brocade yoke', ' Rayon', 1000, ' Yellow', 0, 'images/packages/8.png', '8.png', 0),
(54, ' SUS_KUR 5256 A', '590', ' Womens', ' Sushil Pink printed cotton kurthi', ' Cotton', 1000, ' Pink', 0, 'images/packages/9.png', '9.png', 0),
(55, 'SUS_KUR 5256 B', '590', 'womens section', 'Sushil Dark orange printed cotton kurthi with Green sleeves', 'Cotton', 200, 'Dark Orange', 0, 'images/packages/10.png', '10.png', 0),
(56, 'SUS_KUR 5318', '760', 'women section', 'Sushil Orange Slub South Cotton kurthi with beige black print', 'Cotton', 200, 'Orange', 0, 'images/packages/11.png', '11.png', 0),
(57, ' SUS_KUR 5332A', ' 750', ' women section', ' Sushil Leaf Green south cotton kurthi with black and gold printed yoke', ' Cotton', 300, ' Leaf Green', 0, 'images/packages/12.png', '12.png', 0),
(58, 'SUS_KUR 5321 A', '960', 'women section', 'Sushil Pink Check south cotton kurthi with Dobby beige yoke', 'Cotton', 300, 'Pink', 0, 'images/packages/13.png', '13.png', 0),
(59, 'SUS_KUR 1917 D', '1230', 'women section', 'Sushil Pink Twill Rayon kurthi with Embroidered yoke', 'Twill Rayon', 300, 'Pink', 0, 'images/packages/14.png', '14.png', 0),
(60, 'SUS_KUR 5325 A', '720', 'women section', 'Sushil pink south cotton kurthi with printed beige yoke', 'Cotton', 300, 'Pink', 0, 'images/packages/15.png', '15.png', 0),
(61, 'SUS_KUR 5313 C', '950', 'women section', 'Sushil Black Rayon Kurthi with Silver and Bronze Printed Yoke', 'Rayon', 300, 'Black', 0, 'images/packages/1 (1).png', '1 (1).png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `proof`
--

CREATE TABLE IF NOT EXISTS `proof` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `proof` varchar(50) NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `proof`
--

INSERT INTO `proof` (`id`, `proof`, `status`) VALUES
(1, 'Ration Card', 0),
(2, 'Pan Card', 0),
(3, 'Aadhar Card', 0),
(4, 'Voter Id', 0),
(5, 'Driving Licence', 0),
(6, 'Passport', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `PurchaseID` int(25) NOT NULL AUTO_INCREMENT,
  `userid` varchar(25) NOT NULL,
  `ProductID` int(50) NOT NULL,
  `qty` int(25) NOT NULL,
  `product_amount` int(25) NOT NULL,
  `productcode` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`PurchaseID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`PurchaseID`, `userid`, `ProductID`, `qty`, `product_amount`, `productcode`, `status`) VALUES
(11, 'SE011010', 48, 1, 1020, '  SUS_KUR 5296 C', 0),
(10, 'SE011010', 47, 1, 750, '    SUS_KUR 5313 B', 0),
(9, 'SE011009', 48, 1, 1020, '  SUS_KUR 5296 C', 0),
(8, 'SE011009', 47, 2, 750, '    SUS_KUR 5313 B', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase-details`
--

CREATE TABLE IF NOT EXISTS `purchase-details` (
  `PurchaseID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(30) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `product_amount` int(11) NOT NULL,
  `productcode` int(11) NOT NULL,
  PRIMARY KEY (`PurchaseID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reptree`
--

CREATE TABLE IF NOT EXISTS `reptree` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `tddate` date NOT NULL,
  `tdamt` bigint(20) NOT NULL,
  `tdleft` int(5) NOT NULL,
  `tdright` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `reptree`
--

INSERT INTO `reptree` (`id`, `userid`, `tddate`, `tdamt`, `tdleft`, `tdright`) VALUES
(1, 'SE011001', '2017-02-22', 0, 3, 0),
(11, 'SE011011', '2017-03-01', 0, 0, 0),
(10, 'SE011010', '2017-02-28', 0, 0, 0),
(9, 'SE011009', '2017-02-28', 0, 0, 0),
(12, 'SE011011', '2017-03-01', 0, 0, 0),
(13, 'SE011011', '2017-03-01', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE IF NOT EXISTS `tree` (
  `treeid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `tleft` varchar(20) NOT NULL,
  `tright` varchar(20) NOT NULL,
  `tleftcount` int(11) NOT NULL,
  `trightcount` int(11) NOT NULL,
  `totalamt` bigint(20) NOT NULL,
  `tddate` date NOT NULL,
  `tdamt` bigint(20) NOT NULL,
  `tdl` int(5) NOT NULL,
  `tdr` int(5) NOT NULL,
  PRIMARY KEY (`treeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`treeid`, `userid`, `tleft`, `tright`, `tleftcount`, `trightcount`, `totalamt`, `tddate`, `tdamt`, `tdl`, `tdr`) VALUES
(1, 'SE011001', 'SE011011', '', 3, 0, 0, '2017-03-01', 0, 3, 0),
(9, 'SE011009', '', '', 0, 0, 0, '2017-02-28', 0, 0, 0),
(10, 'SE011010', '', '', 0, 0, 0, '2017-02-28', 0, 0, 0),
(11, 'SE011011', '', '', 0, 0, 0, '2017-03-01', 0, 0, 0),
(12, 'SE011011', '', '', 0, 0, 0, '2017-03-01', 0, 0, 0),
(13, 'SE011011', '', '', 0, 0, 0, '2017-03-01', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fhname` varchar(50) NOT NULL,
  `nominename` varchar(50) NOT NULL,
  `nominenumber` bigint(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `alternatenum` bigint(15) NOT NULL,
  `epin` varchar(25) NOT NULL,
  `epinreq` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `amountwords` varchar(100) NOT NULL,
  `idproof` varchar(1000) NOT NULL,
  `proofnum` varchar(50) NOT NULL,
  `adharnum` int(25) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `accnum` int(50) NOT NULL,
  `ifsccode` varchar(50) NOT NULL,
  `referalid` varchar(50) NOT NULL,
  `referalname` varchar(50) NOT NULL,
  `sponserid` int(255) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `createddate` date NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `dateofbirth`, `age`, `gender`, `fhname`, `nominename`, `nominenumber`, `address`, `city`, `district`, `state`, `mobile`, `email`, `alternatenum`, `epin`, `epinreq`, `amount`, `amountwords`, `idproof`, `proofnum`, `adharnum`, `bankname`, `branch`, `accnum`, `ifsccode`, `referalid`, `referalname`, `sponserid`, `userid`, `password`, `position`, `status`, `createddate`, `role`) VALUES
(1, 'admin', '0000-00-00', 88, 'Male', 'kalyanam', 'naveen', 9666666111, 'no:3a, usman nagar.', '', '', '', 2147483647, 'shema.hemu@gmail.com', 9659866556, '1', 10, 4000, 'four', 'address', 'pan4545', 15151, 'state', 'vill', 265135, '15355', 'SE011031', 'surendar', 58, 'shopexadmin', 'shopexpass', 0, 0, '2017-01-23', 'admin'),
(2, 'sure', '2017-02-03', 23, 'Male', 'Kalyanam', 'admin', 9659869830, 'no 123 main street', 'city', 'dis', 'state', 9659869830, 'surendar@gmail.com', 9659869830, '0', 0, 300, 'three', 'Pan Card', '123', 0, 'state', 'villupuram', 123, 'ifsc123', 'admin', 'referalname', 0, 'SE011001', 'mypass', 0, 0, '2017-02-15', '0'),
(14, '12', '2017-02-01', 12, 'Male', '45', '465', 45, '46', '44', '46', '4', 46, 'shema.hemu@gmail.com', 5465, '', 0, 0, '', 'Aadhar Card', '54', 4, '456', '4', 4654, '465', 'admin', '454', 1, 'SE011009', 'X3ekINY2', 2, 2, '2017-02-28', '0'),
(15, '12', '2017-02-01', 12, 'Female', '54', '45', 4, '4646', '4', '46', '44', 654545, '465', 465, '', 0, 1770, '545', 'Pan Card', '654', 45, '46', '4', 6545, '654', 'admin', 'sdfsdf', 1, 'SE011010', '774p9U&!', 2, 2, '2017-02-28', '0'),
(16, '12', '2017-03-02', 12, 'Male', '45', '4', 45, '45', '465465', '465', '465', 4456, '465', 465, '', 0, 0, '', 'Pan Card', '65', 0, '45', '4', 4545, '6', 'SE011001', '2', 2, 'SE011011', '0TOsMzs5', 0, 2, '2017-03-01', '0');

-- --------------------------------------------------------

--
-- Table structure for table `userid`
--

CREATE TABLE IF NOT EXISTS `userid` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `prefix` varchar(50) NOT NULL,
  `value` int(50) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userid`
--

INSERT INTO `userid` (`id`, `prefix`, `value`, `status`) VALUES
(1, 'SE0', 11011, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
