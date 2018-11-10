-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 04:09 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `emailid` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `profilepic` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `contactno`, `emailid`, `password`, `profilepic`, `address`) VALUES
(1, 'Anik', '0194302917', 'anik7303@gmail.com', '12345', 'images (1).png', 'Narayangonj'),
(2, 'Md Foqrul Islam', '01684656546', 'foqrulislam1030@gmail.com', '12345', 'foqrul.jpg', 'Mohammadpur,Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `empty`
--

CREATE TABLE `empty` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empty`
--

INSERT INTO `empty` (`SL`, `places`, `img1`, `img2`) VALUES
(1, 'Empty', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `forest`
--

CREATE TABLE `forest` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forest`
--

INSERT INTO `forest` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(2, 'Natore Royal Place', 'Rajhsahi', 400, 'forest-2-1.jpg', 'forest-2-2.jpg'),
(3, 'Dana Park', 'Naogaon', 400, 'forest-3-1.jpg', 'forest-3-2.jpg'),
(4, 'Dinajpur Forest', 'Dinajpur', 400, 'forest-4-1.jpg', 'forest-4-2.jpg'),
(5, 'Sundarban', 'Khulna', 282, 'forest-5-1.jpg', 'forest-5-2.jpg'),
(6, 'Shalbon Bihar', 'Comilla', 100, 'forest-6-1.jpg', 'forest-6-2.jpg'),
(7, 'Rangamati', 'Chittagong', 400, 'forest-7-1.jpg', 'forest-7-2.jpg'),
(8, 'Bandarban', 'Bandarban', 400, 'forest-8-1.jpg', 'forest-8-2.jpg'),
(9, 'Safari Park', 'Gazipur', 100, 'forest-9-1.jpg', 'forest-9-2.jpg'),
(10, 'Bhawal National Park', 'Dhaka', 100, 'forest-10-1.jpg', 'forest-10-2.jpg'),
(11, 'Shohag Polli', 'Dhaka', 50, 'forest-11-1.jpg', 'forest-11-2.jpg'),
(12, 'Buddha Dhatu Jadi', 'Bandarban', 400, 'historical-20-1.jpg', 'historical-20-2.jpg'),
(13, 'National Park', 'Rajhsahi', 400, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `forest_historical`
--

CREATE TABLE `forest_historical` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forest_historical`
--

INSERT INTO `forest_historical` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Behula Laksmirdar Basor Ghar', 'Bogra', 200, 'historical-19-1.jpg', 'historical-19-2.jpg'),
(2, 'Paharpur', 'Rajhsahi', 200, 'historiacl-15-1.jpg', 'historical-15-2.jpg'),
(3, 'Shalbon Bihar', 'Comilla', 100, 'forest-6-1.jpg', 'forest-6-2.jpg'),
(4, 'Bhawal National Park', 'Dhaka', 50, 'forest-10-1.jpg', 'forest-10-2.jpg'),
(5, 'Buddha Dhatu Jadi', 'Bandarban', 400, 'historical-20-1.jpg', 'historical-20-2.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `forest_river`
--

CREATE TABLE `forest_river` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forest_river`
--

INSERT INTO `forest_river` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Sundar Ban', 'Khulna', 400, 'forest-5-1.jpg', 'forest-5-2.jpg'),
(2, 'Ramsagar', 'Dinajpur', 100, 'river-7-1.jpg', 'river-7-2.jpg'),
(3, 'Jhauchar Gudara Ghat', 'Dhaka', 50, 'river-2-1.jpg', 'river-2-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forest_river_historical`
--

CREATE TABLE `forest_river_historical` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forest_river_historical`
--

INSERT INTO `forest_river_historical` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Sundarban', 'Khulna', 282, 'forest-5-1.jpg', 'forest-5-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `for_forest`
--

CREATE TABLE `for_forest` (
  `SL` int(11) NOT NULL,
  `ques` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `for_forest`
--

INSERT INTO `for_forest` (`SL`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `type`) VALUES
(1, 'Do you also want to visit historical places?', 'Yes', 'No', '', '', 2),
(2, 'Do you also want to visit places near river?', 'Yes', 'No', '', '', 3),
(3, 'Do you also want to visit places near sea?', 'Yes', 'No', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `for_hp`
--

CREATE TABLE `for_hp` (
  `SL` int(11) NOT NULL,
  `ques` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `for_hp`
--

INSERT INTO `for_hp` (`SL`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `type`) VALUES
(1, 'Do you also want to visit places near sea?', 'Yes', 'No', '', '', 4),
(2, 'Do you also want to visit places near forest?', 'Yes', 'No', '', '', 1),
(3, 'Do you also want to visit places near river?', 'Yes', 'No', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `for_river`
--

CREATE TABLE `for_river` (
  `SL` int(11) NOT NULL,
  `ques` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `for_river`
--

INSERT INTO `for_river` (`SL`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `type`) VALUES
(1, 'Do you also want to visit places near forest?', 'Yes', 'No', '', '', 1),
(2, 'Do you also want to visit historical places?', 'Yes', 'No', '', '', 2),
(3, 'Do you also want to visit places near sea?', 'Yes', 'No', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `for_sea`
--

CREATE TABLE `for_sea` (
  `SL` int(11) NOT NULL,
  `ques` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `for_sea`
--

INSERT INTO `for_sea` (`SL`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `type`) VALUES
(1, 'Do you also want to visit places near forest?', 'Yes', 'No', '', '', 1),
(2, 'Do you also want to visit historical places?', 'Yes', 'No', '', '', 2),
(3, 'Do you also want to visit places near river?', 'Yes', 'No', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `historical`
--

CREATE TABLE `historical` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historical`
--

INSERT INTO `historical` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Ahsan Manjil', 'Dhaka', 50, 'historical-1-1.jpg', 'historical-1-2.jpg'),
(2, 'Jatiyo Sangsad', 'Dhaka', 50, 'historical-2-1.jpg', 'historical-2-2.jpg'),
(3, 'National Zoo', 'Dhaka', 50, 'historical-3-1.jpg', 'historical-3-2.jpg'),
(4, 'Sriti Soudho', 'Savar', 50, 'historical-4-1.jpg', 'historical-4-2.jpg'),
(5, 'Saheed Meenar', 'Dhaka', 50, 'historical-5-1.jpg', 'historical-5-2.jpg'),
(6, 'Shadhinota Stombo', 'Dhaka', 50, 'historical-6-1.jpg', 'historical-6-2.jpg'),
(7, 'Star Mosque', 'Dhaka', 50, 'historical-7-1.jpg', 'historical-7-2.jpg'),
(8, 'Chawk Mosque', 'Dhaka', 50, 'historical-8-1.jpg', 'historical-8-2.jpg'),
(9, 'Sixty Dome Mosque', 'Bagherhat', 100, 'historical-9-1.jpg', 'historical-9-2.jpg'),
(10, 'Dhakeswari Temple', 'Dhaka', 50, 'historical-10-1.jpg', 'historical-10-2.jpg'),
(11, 'Boga Lake', 'Chittagong', 400, 'historical-11-1.jpg', 'historical-11-2.jpg'),
(12, 'Foy\'s Lake', 'Chittagong', 400, 'historical-12-1.jpg', 'historical-12-2.jpg'),
(13, 'Wali Bagh Khan Jame Mosque', 'Chittagong', 400, 'historical-13-1.jpg', 'historical-13-2.jpg'),
(14, 'Khan Jahan Ali Dighi', 'Khulna', 400, 'historical-14-1.jpg', 'historical-14-2.jpg'),
(15, 'Paharpur', 'Rajshahi', 200, 'historical-15-1.jpg', 'historical-15-2.jpg'),
(16, 'Virendra', 'Rajshahi', 200, 'historical-16-1.jpg', 'historical-16-2.jpg'),
(17, 'Choto sona Mosque', 'Rajshahi', 200, 'historical-17-1.jpg', 'historical-17-2.jpg'),
(18, 'Somapura', 'Rajshahi', 200, 'historical-18-1.jpg', 'historical-18-2.jpg'),
(19, 'Behula Laksmirdar Basor Ghar', 'Bogra', 200, 'historical-19-1.jpg', 'historical-19-2.jpg'),
(20, 'Buddha Dhatu Jadi', 'Bandarbar', 400, 'historical-20-1.jpg', 'historical-20-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `historical_river`
--

CREATE TABLE `historical_river` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historical_river`
--

INSERT INTO `historical_river` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Jhauchar Gudara Ghat', 'Dhaka', 50, 'river-2-1.jpg', 'river-2-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `SL` int(11) NOT NULL,
  `ques` varchar(250) NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `type` int(11) NOT NULL,
  `distance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`SL`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `type`, `distance`) VALUES
(1, 'How long have you traveling?', '1 day', 'less than 3 Days', 'Less than 7 Days', 'More than 7 Days', 4, 0),
(2, 'Max distance you want to Travel?', '< 50km', '> 100km', '> 200km', '> 400km', 5, 0),
(3, 'What type of place do you want to visit?', 'Forest', 'Sea', 'River', 'Historical', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `river`
--

CREATE TABLE `river` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `river`
--

INSERT INTO `river` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Buriganga', 'Dhaka', 50, 'river-1-1.jpg', 'river-1-2.jpg'),
(2, 'Jhauchar Gudara Ghat', 'Dhaka', 50, 'river-2-1.jpg', 'river-2-2.jpg'),
(3, 'Padma', 'Dhaka', 50, 'river-3-1.jpg', 'river-3-2.jpg'),
(4, 'Behula Laksmidhar', 'Rajhshahi', 250, 'river-4-1.jpg', 'river-4-2.jpg'),
(5, 'Meghna', 'Chittagong', 288, 'river-5-1.jpg', 'river-5-2.jpg'),
(6, 'Gomti', 'Comilla', 100, 'river-6-1.jpg', 'river-6-2.jpg'),
(7, 'Ramsagar', 'Dinajpur', 380, 'river-7-1.jpg', 'river-7-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sea`
--

CREATE TABLE `sea` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sea`
--

INSERT INTO `sea` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Neval Beach', 'Chittagong', 400, 'sea-1-1.jpg', 'sea-1-2.jpg'),
(2, 'Cox\'s Bazar', 'Chittagong', 400, 'sea-2-1.jpg', 'sea-2-2.jpg'),
(3, 'Saint Martin', 'Chittagong', 400, 'sea-3-1.jpg', 'sea-3-2.jpg'),
(4, 'Bay of Bengal', 'Khulna', 400, 'sea-4-1.jpeg', 'sea-4-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sea_forest`
--

CREATE TABLE `sea_forest` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sea_forest`
--

INSERT INTO `sea_forest` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Sundar Ban', 'Khulna', 400, 'forest-5-1.jpg', 'forest-5-1.jpg'),
(2, 'Cox\'s Bazar', 'Chittagong', 400, 'sea-2-1.jpg', 'sea-2-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sea_forest_historical`
--

CREATE TABLE `sea_forest_historical` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sea_forest_historical`
--

INSERT INTO `sea_forest_historical` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Sundarban', 'Khulna', 282, 'forest-5-1.jpg', 'forest-5-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sea_forest_river`
--

CREATE TABLE `sea_forest_river` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sea_forest_river`
--

INSERT INTO `sea_forest_river` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Sundar Ban', 'Khulna', 282, 'forest-5-1.jpg', 'forest-5-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sea_historical`
--

CREATE TABLE `sea_historical` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sea_historical`
--

INSERT INTO `sea_historical` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Cox\'s Bazar', 'Chittagong', 400, 'sea-2-1.jpeg', 'sea-2-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sea_river`
--

CREATE TABLE `sea_river` (
  `SL` int(11) NOT NULL,
  `places` text NOT NULL,
  `district` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sea_river`
--

INSERT INTO `sea_river` (`SL`, `places`, `district`, `distance`, `img1`, `img2`) VALUES
(1, 'Bay of Bengal', 'Khulna', 280, 'sea-4-1.jpeg', 'sea-4-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sea_river_historical`
--

CREATE TABLE `sea_river_historical` (
  `SL` int(11) NOT NULL,
  `district` text NOT NULL,
  `places` text NOT NULL,
  `distance` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `emailid` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `profilepic` varchar(1000) NOT NULL DEFAULT 'Default',
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contactno`, `emailid`, `password`, `address`, `status`, `created_date`, `modified_date`, `profilepic`, `modified_by`) VALUES
(1, 'papon', '01685555', 'papon@gmail.com', '123456', 'mohammadpur', 'Active', '2018-05-12', '0000-00-00', 'papon.png', 0),
(5, 'mitun', '1234468', 'm@gmail.com', '12345', 'mmm', 'Active', '2018-05-13', '0000-00-00', 'Default.png', 0),
(7, 'Anik', '01943029170', 'anik@gmail.com', '1234', 'asfjsaldjvohvoasjdvsd', 'Active', '2018-09-16', '0000-00-00', '21108.jpg', 0),
(9, 'foqrul', '01111111111', 'foqrul@gmail.com', '1234', 'dasgdsfasdf', 'Active', '2018-09-17', '0000-00-00', 'Default.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empty`
--
ALTER TABLE `empty`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `forest`
--
ALTER TABLE `forest`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `forest_historical`
--
ALTER TABLE `forest_historical`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `forest_river`
--
ALTER TABLE `forest_river`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `forest_river_historical`
--
ALTER TABLE `forest_river_historical`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `for_forest`
--
ALTER TABLE `for_forest`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `for_hp`
--
ALTER TABLE `for_hp`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `for_river`
--
ALTER TABLE `for_river`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `for_sea`
--
ALTER TABLE `for_sea`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `historical`
--
ALTER TABLE `historical`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `historical_river`
--
ALTER TABLE `historical_river`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `river`
--
ALTER TABLE `river`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `sea`
--
ALTER TABLE `sea`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `sea_forest`
--
ALTER TABLE `sea_forest`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `sea_forest_historical`
--
ALTER TABLE `sea_forest_historical`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `sea_forest_river`
--
ALTER TABLE `sea_forest_river`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `sea_historical`
--
ALTER TABLE `sea_historical`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `sea_river`
--
ALTER TABLE `sea_river`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `sea_river_historical`
--
ALTER TABLE `sea_river_historical`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `empty`
--
ALTER TABLE `empty`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forest`
--
ALTER TABLE `forest`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `forest_historical`
--
ALTER TABLE `forest_historical`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forest_river`
--
ALTER TABLE `forest_river`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `forest_river_historical`
--
ALTER TABLE `forest_river_historical`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `for_forest`
--
ALTER TABLE `for_forest`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `for_hp`
--
ALTER TABLE `for_hp`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `for_river`
--
ALTER TABLE `for_river`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `for_sea`
--
ALTER TABLE `for_sea`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `historical`
--
ALTER TABLE `historical`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `historical_river`
--
ALTER TABLE `historical_river`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `river`
--
ALTER TABLE `river`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sea`
--
ALTER TABLE `sea`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sea_forest`
--
ALTER TABLE `sea_forest`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sea_forest_historical`
--
ALTER TABLE `sea_forest_historical`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sea_forest_river`
--
ALTER TABLE `sea_forest_river`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sea_historical`
--
ALTER TABLE `sea_historical`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sea_river`
--
ALTER TABLE `sea_river`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sea_river_historical`
--
ALTER TABLE `sea_river_historical`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
