-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2015 at 05:20 PM
-- Server version: 5.6.23
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kanolalk_Kanola`
--

-- --------------------------------------------------------

--
-- Table structure for table `Asphalt`
--

CREATE TABLE IF NOT EXISTS `Asphalt` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `P_id` varchar(256) NOT NULL,
  `Title` text NOT NULL,
  `Type` varchar(32) NOT NULL DEFAULT 'Asphalt',
  `State` enum('Ongoing','Complete') NOT NULL DEFAULT 'Ongoing',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Asphalt`
--

INSERT INTO `Asphalt` (`Id`, `P_id`, `Title`, `Type`, `State`) VALUES
(1, '20150728175112482378', 'Supplying / Laying and Compacting of Asphalt Concrete To The Sandunpura - Salpitigama Road', 'Asphalt', 'Complete'),
(2, '20150728175140442605', 'Koonwewa - Moragaswewa Junction - Mee Oya Bridge Road', 'Asphalt', 'Complete'),
(3, '20150728175152157999', 'Supply of 3000Mt of Asphalt Wearing Course For Improvements To Roads in Anuradhapura EE Division', 'Asphalt', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `Bridges`
--

CREATE TABLE IF NOT EXISTS `Bridges` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `P_id` varchar(256) NOT NULL,
  `Title` text NOT NULL,
  `Type` varchar(64) NOT NULL DEFAULT 'Bridge',
  `State` enum('Ongoing','Complete') NOT NULL DEFAULT 'Ongoing',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Bridges`
--

INSERT INTO `Bridges` (`Id`, `P_id`, `Title`, `Type`, `State`) VALUES
(1, '20150728175422088763', 'Construction of Sub Structure, Transportation & Erection of Steel Super Structure And Construction of Immediate Approaches of Bridge No 5/3 on Naula - Elahera- Pallegama- Hettipola Road (B312)', 'Bridges', 'Ongoing'),
(2, '20150728175610920454', 'Construction of Bridge No: 1/1 and 16/4 on Galgamuwa - Nikawewa Road', 'Bridges', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `Buildings`
--

CREATE TABLE IF NOT EXISTS `Buildings` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `P_id` varchar(256) NOT NULL,
  `Title` text NOT NULL,
  `Type` varchar(32) NOT NULL DEFAULT 'Buildings',
  `State` enum('Ongoing','Complete') NOT NULL DEFAULT 'Ongoing',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Buildings`
--

INSERT INTO `Buildings` (`Id`, `P_id`, `Title`, `Type`, `State`) VALUES
(1, '20150727180802445432', 'Construction of Commercial Building at Eppawala', 'Buildings', 'Complete'),
(2, '20150728152440736577', 'Rehabilitation of Vernon SWE Scheme in Jaffna District', 'Buildings', 'Complete'),
(3, '20150728152459309851', 'Rehabilitation of Arali - Ponnali SWE Scheme in Jaffna District', 'Buildings', 'Complete'),
(4, '20150728152528349908', 'Construction of 01 No Stores for General Purpose and 01 No. Fertilizer Stores Building and 02 Nos. Dormitories for Miner Staff for Block Office in Laggala Area Center in the Resettlement Area on the Right Bank of Kaluganga. ', 'Buildings', 'Complete'),
(5, '20150728152555205709', 'Contruction of Auditorium (Stage II)', 'Buildings', 'Complete'),
(6, '20150728152822826231', 'Staff Building of AGAs Office Galnewa', 'Buildings', 'Complete'),
(7, '20150728175748381238', '8 Story Hotel Building', 'Buildings', 'Ongoing'),
(8, '20150728175803953159', '10 Story Shopping mall & Apartment Complex', 'Buildings', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `Finished_img`
--

CREATE TABLE IF NOT EXISTS `Finished_img` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Path` varchar(256) NOT NULL DEFAULT 'http://placehold.it/800x500',
  `AltText` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Highways`
--

CREATE TABLE IF NOT EXISTS `Highways` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `P_id` varchar(256) NOT NULL,
  `Title` text NOT NULL,
  `Type` varchar(32) NOT NULL DEFAULT 'Highways',
  `State` enum('Ongoing','Complete') NOT NULL DEFAULT 'Ongoing',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `Highways`
--

INSERT INTO `Highways` (`Id`, `P_id`, `Title`, `Type`, `State`) VALUES
(1, '20150727180341250726', 'Improvements to Galgamuwa - Nikawewa Road - Deyata Kirula 2014', 'Highways', 'Complete'),
(2, '20150727180433032892', 'Improvements to Kuliyapitiya - Padiwela Road - Deyata Kirula 2014', 'Highways', 'Complete'),
(3, '20150727180458534930', 'Improvements to Kahatagasdigiliya - Koonwewa - Dematawewa Road ', 'Highways', 'Complete'),
(4, '20150727180514205343', 'Improvements to Seepukulama - Galenbindunuwewa Road', 'Highways', 'Complete'),
(5, '20150727180619701355', 'Rehabilitation of Meegalewa Junction up to Boonnewa', 'Highways', 'Complete'),
(6, '20150727180632027846', 'Improvements To Maho Hospital Junction to Thumbulla Via Mediyawa Road', 'Highways', 'Complete'),
(7, '20150727180645694529', 'Rehabilitation of Battuluoya - Udappuwa - Andimunai Road', 'Highways', 'Complete'),
(8, '20150727180701348364', 'Improvements to Ganthiriyagama - Welamada Road & Helabodhugama - D4 Ela Road', 'Highways', 'Complete'),
(9, '20150727180711889563', 'Negama - Avukana Road', 'Highways', 'Complete'),
(10, '20150727180723455454', 'Rehabilitation of Kudiyiruppu Poonthoddam Road ', 'Highways', 'Complete'),
(11, '20150728175234091253', 'Construction of Thorapitiya to Wellawala Road  - Under Moragahakanda - Kaluganga Development Project', 'Highways', 'Ongoing'),
(12, '20150728175351220627', 'Asphalt Road Surfacing of Koongahawela to Moragahakanda Road, Wellawala Guruwela Road - Under Moragahakanda - Kaluganga Development Project', 'Highways', 'Ongoing'),
(13, '20150728175736286130', 'Improvements to Existing Roads at Proposed Main Entrance of Rajarata University of Sri Lanka', 'Highways', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `Interlock`
--

CREATE TABLE IF NOT EXISTS `Interlock` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `P_id` varchar(256) NOT NULL,
  `Title` text NOT NULL,
  `Type` varchar(32) NOT NULL DEFAULT 'Interlock',
  `State` enum('Ongoing','Complete') NOT NULL DEFAULT 'Ongoing',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Interlock`
--

INSERT INTO `Interlock` (`Id`, `P_id`, `Title`, `Type`, `State`) VALUES
(1, '20150728175029246781', 'Construction of Foot Walk On Hospital Approach Road At Sri Jayawardhanapura', 'Interlock', 'Complete'),
(2, '20150728175050345536', 'Construction of Foot Walk & Drainage System in Korakahawewa - Sri Mahabodhi Road ', 'Interlock', 'Complete'),
(3, '20150728175521944926', 'Construction of Internal Road System/ Administrative Building Complex at North Central Provincial Council', 'Interlock', 'Ongoing'),
(4, '20150728175644021610', 'Road Development Project at Ruwanweli Stupa Temple at Anuradhapura', 'Interlock', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `Irrigation`
--

CREATE TABLE IF NOT EXISTS `Irrigation` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `P_id` varchar(256) NOT NULL,
  `Title` text NOT NULL,
  `Type` varchar(32) NOT NULL DEFAULT 'Irrigation',
  `State` enum('Ongoing','Complete') NOT NULL DEFAULT 'Ongoing',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Irrigation`
--

INSERT INTO `Irrigation` (`Id`, `P_id`, `Title`, `Type`, `State`) VALUES
(1, '20150728173222172965', 'Renovation of Parakramapura to Kiri Ibbanwewa Road from Y Junction at Kiri Ibbanwewa Junction at Weli Oya System L In Mullaitivu', 'Irrigation', 'Complete'),
(2, '20150728173420889815', 'Rehabilitation of RB Main Canal (Package 5)', 'Irrigation', 'Complete'),
(3, '20150728173442072362', 'Rehabilitation of Drianage Canal Under RB Main Canal (Package 7)', 'Irrigation', 'Complete'),
(4, '20150728173520360239', 'Rehabilitation of Paranthan Main Canal (Package 1)', 'Irrigation', 'Complete'),
(5, '20150728173633682157', 'Rehabilitation of RB 3 Off D3 Murusumodai (Package 19)', 'Irrigation', 'Complete'),
(6, '20150728173650551275', 'Rehabilitation of Main Drianage Under RB (Package 25)', 'Irrigation', 'Complete'),
(7, '20150728173707050138', 'Nochchiyagama Water Supply Scheme in Nochchiyagama Pradeshiya Sabha Area', 'Irrigation', 'Complete'),
(8, '20150728174805388715', 'Repairing & Improving of Pimburettawa Main Canal ', 'Irrigation', 'Complete'),
(9, '20150728174920703079', 'Improvement of LB Main Canal in Rajangana Scheme ', 'Irrigation', 'Complete'),
(10, '20150728174936180977', 'Rehabilitaion & Improvement of Filed Canals ', 'Irrigation', 'Complete'),
(11, '20150728174952387422', 'Rehabilitation of the Irrigation Network in Galnewa Block', 'Irrigation', 'Complete'),
(12, '20150728175008510637', 'Rehabilitation of the Irrigation Network in Maha Iluppallama Block', 'Irrigation', 'Complete'),
(13, '20150728175439535667', 'Rehabilitation of D1 & D1A under Main Channel - Package 30', 'Irrigation', 'Ongoing'),
(14, '20150728175455364059', 'Rehabilitation of D9 & Branch Cha.off D10 - Package 37', 'Irrigation', 'Ongoing'),
(15, '20150728175545547143', 'Rehabilitation of D1 & D1A under Main Channel - Package 34', 'Irrigation', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `Ongoing_img`
--

CREATE TABLE IF NOT EXISTS `Ongoing_img` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Path` varchar(256) NOT NULL DEFAULT 'http://placehold.it/800x500',
  `AltText` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `email`, `Password`) VALUES
(1, 'admin', 'kanolaengineering@gmail.com', '965b21f9b0929eb034918f57a06065a8');

-- --------------------------------------------------------

--
-- Table structure for table `Water_Drainage`
--

CREATE TABLE IF NOT EXISTS `Water_Drainage` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `P_id` varchar(256) NOT NULL,
  `Title` text NOT NULL,
  `Type` varchar(32) NOT NULL DEFAULT 'Water_Drainage',
  `State` enum('Ongoing','Complete') NOT NULL DEFAULT 'Ongoing',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
