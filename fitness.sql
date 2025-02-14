-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 08:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL,
  `timings` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `timings`, `date`, `status`) VALUES
(6, '12-23', '2022-06-14', ''),
(7, '09-12', '2022-06-14', ''),
(9, '05-12', '2022-06-24', ''),
(10, '05-16', '2022-06-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(20) NOT NULL,
  `usid` int(30) NOT NULL,
  `courseid` varchar(30) NOT NULL,
  `guideid` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `cperiod` varchar(50) NOT NULL,
  `ba_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `usid`, `courseid`, `guideid`, `status`, `date`, `cperiod`, `ba_id`) VALUES
(9, 0, '1', 'inshad', 'booked', '2022-06-27', '1', '24 hours'),
(10, 18, '1', 'inshad', 'booked', '2022-06-27', '2', '24 hours'),
(11, 18, '1', 'inshad', 'booked', '2022-06-27', '1', '24 hours'),
(12, 18, '1', 'inshad', 'booked', '2022-06-27', '1', '24 hours');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(10) NOT NULL,
  `cusid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `cprice` int(90) NOT NULL,
  `cquantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `cusid`, `pid`, `cprice`, `cquantity`) VALUES
(4, 14, 1, 0, 2),
(6, 15, 1, 2400, 4),
(7, 12, 1, 0, 1),
(8, 16, 1, 1800, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ccourse`
--

CREATE TABLE `ccourse` (
  `cc_id` int(12) NOT NULL,
  `course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ccourse`
--

INSERT INTO `ccourse` (`cc_id`, `course`) VALUES
(1, 'Zumba'),
(2, '24 hours'),
(3, 'calstheics'),
(4, 'crossfit'),
(5, 'john');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(20) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `guname` varchar(20) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `cost` int(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `guname`, `duration`, `cost`, `status`, `date`, `image`) VALUES
(2, 'Zumba1', 'Ashura ashura', '2', 20000, '', '2022-06-13', 'uploads/benches 2.jpg'),
(3, 'Zumba', 'inshad', '2', 20000, '', '2022-06-13', 'uploads/about-bg.png'),
(4, 'Zumba', 'Ashura ashura', '2', 30000, '', '2022-06-14', 'uploads/benches 3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `d_id` int(30) NOT NULL,
  `diet_title` varchar(56) NOT NULL,
  `discription` longtext NOT NULL,
  `gid` int(12) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `gname` varchar(56) NOT NULL,
  `catname` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`d_id`, `diet_title`, `discription`, `gid`, `date`, `status`, `gname`, `catname`) VALUES
(8, 'fit gain', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td>h6u58</td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><font style=\"background-color: rgb(165, 198, 206);\"></font><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><br></p>', 3, '2022-06-24', 0, 'inshad@gmail.com', 'Zumba'),
(13, 'slimfit', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td>MONDAY</td><td>CHICKEN</td><td>CARROT</td><td>PROTIEN</td><td>bread</td></tr><tr><td>TUESDAY</td><td>MUTTON</td><td>BEETROOT FRY</td><td>boiled rice</td><td>peanut bread</td></tr></tbody></table><p><br></p>', 4, '2022-06-27', 0, 'gowdarchn@gmail.com', 'choose category');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `eid` int(30) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(30) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `qty` int(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eid`, `ename`, `image`, `price`, `discription`, `date`, `status`, `qty`) VALUES
(1, 'ballon', 'uploads/benches 4.jpg', 600, 'hcieh ecgeice cjewygck3evb xjegckg jeo34ihdkev r3yo34ihb jgco43gc jgcoi4gcr3cg3 jhck3guc ', '2022-06-13', '', 39);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `userid`, `feedback`, `date`, `name`) VALUES
(11, 15, 'hello helllo my wiewqfjp', '2022-06-19', 'inshad'),
(12, 12, 'hyyy hloooo good morninh', '2022-06-24', 'muzamiim'),
(13, 18, 'wdad', '2022-06-25', 'inshad'),
(14, 18, 'fwefwe', '2022-06-27', 'wefwe'),
(15, 18, 'efwt', '2022-06-27', 'gwtew');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `gid` int(20) NOT NULL,
  `gname` varchar(30) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `price` int(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `schedule` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`gid`, `gname`, `phno`, `email`, `gender`, `experience`, `discription`, `age`, `image`, `status`, `date`, `price`, `password`, `schedule`) VALUES
(4, 'muzammil', '6986569874', 'muz@gmail.com', 'male', '2', 'awsff tgsrwyw ywry wur y 5yhe5y5 6u6thuyhs', 32, 'uploads/WIN_20220602_13_52_56_Pro.jpg', '', '2022-06-24', 20000, 'Muzammil123', '24 hours'),
(5, 'inshad', '9562369346', 'inshad@gmail.com', 'male', '25', 'ihuiogjyifgu', 0, 'uploads/WIN_20220602_13_52_56_Pro.jpg', '', '2022-06-26', 2000, '', '24 hours'),
(6, 'mohammed', '9696969696', 'inskhad@gmail.com', 'male', '32', 'ewjfwegjcbkudfgkuwas', 3, 'uploads/WIN_20220602_13_52_59_Pro.jpg', '', '2022-06-27', 2000, '', '12-23');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `aid` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `roll` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(11) NOT NULL,
  `otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`aid`, `email`, `password`, `roll`, `date`, `u_id`, `otp`) VALUES
(23, 'admin@gmail.com', 'a', 'a', '2022-06-13', 0, ''),
(24, 'gowdarchn@gmail.com', 'muz', 'g', '2022-06-24', 4, ''),
(25, 'asfaq@gmail.com', 'Asfak123', 'u', '2022-06-24', 16, ''),
(26, 'iytyfgggig@jgig.com', 'Aaa111', 'u', '2022-06-25', 17, ''),
(27, 'inshad346@gmail.com', '9562Aa', 'u', '2022-06-25', 18, ''),
(28, 'inshad@gmail.com', 'inshAa3', 'g', '2022-06-26', 5, ''),
(29, 'inskhad@gmail.com', 'inshadjhj@$#%yhgiiouASA%%^677', 'g', '2022-06-27', 6, ''),
(30, 'inshadmohammed007@gmail.com', 'ASasas12', 'u', '2022-06-28', 19, ''),
(31, 'a@gmail.com', 'Aash!@#123', 'u', '2022-07-24', 20, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(20) NOT NULL,
  `boid` int(20) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `grandamount` int(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `camount` varchar(30) NOT NULL,
  `gamount` varchar(20) NOT NULL,
  `adminamount` int(30) NOT NULL,
  `transactionid` varchar(20) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `boid`, `ptype`, `grandamount`, `date`, `status`, `camount`, `gamount`, `adminamount`, `transactionid`, `user_id`) VALUES
(10, 10, 'card', 40000, '2022-06-27', 'booked', '20000', '4000', 36000, '1759', 18),
(11, 11, 'card', 20000, '2022-06-27', 'booked', '20000', '2000', 18000, '8131', 18),
(12, 11, 'card', 20000, '2022-06-27', 'booked', '20000', '2000', 18000, '8582', 18),
(13, 12, 'card', 20000, '2022-06-27', 'booked', '20000', '2000', 18000, '4459', 18),
(14, 12, 'card', 20000, '2022-06-27', 'booked', '20000', '2000', 18000, '1165', 18);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(10) NOT NULL,
  `ogrand_total` int(100) NOT NULL,
  `ouser_id` varchar(100) NOT NULL,
  `ostatus` varchar(100) NOT NULL,
  `odate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `ogrand_total`, `ouser_id`, `ostatus`, `odate`) VALUES
(17, 1200, '0', '', '2022-06-27'),
(18, 600, '18', '', '2022-06-27'),
(19, 600, '18', '', '2022-06-27'),
(20, 600, '18', '', '2022-06-27'),
(21, 1800, '0', '', '2022-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_list`
--

CREATE TABLE `purchase_list` (
  `order_id` int(12) NOT NULL,
  `C_ID` int(10) NOT NULL,
  `P_ID` int(20) NOT NULL,
  `Del_Date` varchar(60) NOT NULL,
  `Total_Amt` int(40) NOT NULL,
  `Order_Status` int(10) NOT NULL DEFAULT 0,
  `Del_Qty` decimal(50,0) NOT NULL,
  `O_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_list`
--

INSERT INTO `purchase_list` (`order_id`, `C_ID`, `P_ID`, `Del_Date`, `Total_Amt`, `Order_Status`, `Del_Qty`, `O_ID`) VALUES
(14, 0, 1, '2022-06-27 11:13:21', 600, 0, '2', 17),
(15, 18, 1, '2022-06-27 11:28:53', 600, 0, '1', 18),
(16, 18, 1, '2022-06-27 13:59:54', 600, 0, '1', 19),
(17, 18, 1, '2022-06-27 16:33:42', 600, 0, '1', 20),
(18, 0, 1, '2022-07-24 16:10:42', 600, 0, '3', 21);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(12) NOT NULL,
  `name` varchar(78) NOT NULL,
  `add` varchar(32) NOT NULL,
  `city` varchar(98) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `transid` int(89) NOT NULL,
  `status` varchar(12) NOT NULL,
  `oid` int(23) NOT NULL,
  `uid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `name`, `add`, `city`, `phone`, `transid`, `status`, `oid`, `uid`) VALUES
(17, 'mohammed', 'uppala,;pathodi', 'uppala', 9562369346, 89986, 'paid', 17, 0),
(18, 'mohammed', 'uppala,;pathodi', 'uppala', 9562369346, 84554, 'paid', 18, 18),
(19, 'mohammed', 'uppala,;pathodi', 'uppala', 9562369346, 12847, 'paid', 19, 18),
(20, 'mohammed', 'uppala,;pathodi', 'uppala', 9562369346, 87153, 'paid', 20, 18),
(21, 'Ashura ashura', 'RWSFSF', 'bcroa', 9876543234, 99187, 'paid', 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(15) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `phno`, `email`, `age`, `status`, `date`, `password`) VALUES
(6, 'Ashura ashura', 'a@gmail.co', '9876543234', 23, '', '0000-00-00', '78'),
(7, 'Ashura ashura', 'a@gmail.co', '9876543234', 23, '', '0000-00-00', '78'),
(8, 'Ashura ashura', 'a@gmail.co', '9876543234', 23, '', '0000-00-00', '78'),
(9, 'Ashura ashura', 'a@gmail.co', '9876543234', 23, '', '0000-00-00', '78'),
(10, 'Ashura ashura', 'a@gmail.co', '9876543234', 23, '', '0000-00-00', '12'),
(12, 'inshad', '9740633156', 'in@gmail.com', 65, '', '0000-00-00', '36'),
(14, 'muzammil', '9995419625', 'mmmm123@gmail.com', 21, '', '0000-00-00', 'MMmm123123'),
(15, 'mohammedinshad', '9562369346', 'inshadmohammed007@gmail.com', 21, '', '0000-00-00', 'aaa'),
(17, '', '9562369346', 'iytyfgggig@jgig.com', 21, '', '0000-00-00', 'Aaa111'),
(18, 'inshad', '9562369346', 'inshad346@gmail.com', 20, '', '0000-00-00', '9562Aa'),
(19, 'inshaad', '9562369346', 'inshadmohammed007@gmail.com', 21, '', '0000-00-00', 'ASasas12'),
(20, 'Ashura', '9876543234', 'a@gmail.com', 20, '', '0000-00-00', 'Aash!@#123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `usid` (`usid`),
  ADD KEY `courseid` (`courseid`),
  ADD KEY `guideid` (`guideid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cusid` (`cusid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `ccourse`
--
ALTER TABLE `ccourse`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `u_id_2` (`u_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `boid` (`boid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ouser_id` (`ouser_id`);

--
-- Indexes for table `purchase_list`
--
ALTER TABLE `purchase_list`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `O_ID` (`O_ID`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `oid` (`oid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ccourse`
--
ALTER TABLE `ccourse`
  MODIFY `cc_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diet`
--
ALTER TABLE `diet`
  MODIFY `d_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `eid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `gid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `aid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `purchase_list`
--
ALTER TABLE `purchase_list`
  MODIFY `order_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
