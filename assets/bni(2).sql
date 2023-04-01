-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 03:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bni`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `c_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `chapter` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`c_id`, `r_id`, `chapter`) VALUES
(1, 1, 'Admirals'),
(2, 1, 'Benchmark'),
(3, 1, 'Pheonix'),
(4, 1, 'Inosuke'),
(5, 1, 'Tanjiro'),
(14, 2, 'Crate'),
(15, 2, 'Ambition'),
(16, 2, 'Horizon');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `d_id` int(11) NOT NULL,
  `date_of_register` datetime NOT NULL DEFAULT current_timestamp(),
  `region` varchar(32) NOT NULL,
  `chapter` varchar(128) NOT NULL,
  `t_program` varchar(128) NOT NULL,
  `venue` varchar(128) NOT NULL,
  `member` varchar(128) NOT NULL,
  `gstn` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `company` varchar(128) NOT NULL,
  `total` int(8) NOT NULL,
  `payment` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`d_id`, `date_of_register`, `region`, `chapter`, `t_program`, `venue`, `member`, `gstn`, `address`, `company`, `total`, `payment`) VALUES
(1, '2023-03-25 12:42:22', '1', '3', '1', 'SR-Complex', '6', '12923d123', '18/50K', 'TCS', 1200, 'Credit_debit_netbanking'),
(2, '2023-03-25 12:42:34', '1', '3', '3', 'KR-Complex', '5', 'lkj1d123a', '75/234B', 'JIO', 300, 'insta_mojo'),
(3, '2023-03-25 12:42:59', '1', '3', '3', 'KR-Complex', '5', 'lkj1d123a', '75/234B', 'JIO', 300, 'Credit_debit_netbanking'),
(4, '2023-03-25 13:25:28', '2', '14', '3', 'KR-Complex', '11', 'o5is123d', '120/76B', 'Wipro', 300, 'Credit_debit_netbanking'),
(5, '2023-03-25 14:00:05', '2', '15', '2', 'VR-Complex', '14', '4fhis803d', '120/76B', 'Flipkart', 500, 'Credit_debit_netbanking'),
(6, '2023-03-25 18:02:45', '1', '1', '2', 'VR-Complex', '16', '123qwe456rt', '137/86B', 'Enova', 500, 'Credit_debit_netbanking'),
(7, '2023-03-25 19:10:05', '1', '5', '2', 'VR-Complex', '20', '12343qw', '190/76B', 'KFG', 500, 'Credit_debit_netbanking'),
(8, '2023-03-27 09:33:26', '1', '2', '2', 'VR-Complex', '18', '123asdasd', '1789/ad9', 'EZKART', 500, 'insta_mojo');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `gstn` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `company` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `c_id`, `name`, `gstn`, `address`, `company`, `email`, `phone`) VALUES
(1, 1, 'amal', 'aus1dh123', '12/253B', 'bootstability', 'amal@gmail.com', '9087674567'),
(2, 1, 'ajith', '123asd123', '17/253A', 'cts', 'ajith@gmail.com', '8767985632'),
(3, 2, 'jacob', 'abn1dh123', '14/23B', 'TCS', 'jacob@gmail.com', '9856743276'),
(4, 2, 'joseph', '123ksd123', '20/53A', 'K-mart', 'joseph@gmail.com', '7896453672'),
(5, 3, 'anandhu', 'lkj1d123a', '75/234B', 'JIO', 'anandhu@gmail.com', '9867453210'),
(6, 3, 'jilin', '12923d123', '18/50K', 'TCS', 'jilin@gmail.com', '7659007623'),
(7, 4, 'joel', 'lkj4d123a', '75/234B', 'JIO', 'joel@gmail.com', '9487682232'),
(8, 4, 'mathews', '90923d123', '11/00K', 'CTS', 'mathews@gmail.com', '8790675478'),
(9, 5, 'hari', 'lkg4d123a', '25/254B', 'WALLMART', 'hari@gmail.com', '9878098745'),
(10, 5, 'Elon', '91230d12123', '18/00K', 'TESLA', 'elon@gmail.com', '8976453421'),
(11, 14, 'Praveen', 'o5is123d', '120/76B', 'Wipro', 'praveen@gmail.com', '9876567309'),
(12, 14, 'Mahesh', 'J5iF183N', '10/76B', 'BROTOTYPE', 'mahesh@gmail.com', '7890345612'),
(13, 15, 'Gowtham', 'gJ8VF53M', '130/86B', 'Amazon', 'gowtham@gmail.com', '8709231423'),
(14, 15, 'Karthick', '4fhis803d', '120/76B', 'Flipkart', 'karthick@gmail.com', '6756782334'),
(15, 16, 'K7', '8512123d', '1780/ad9', 'EZKART', 'kesavan@rediffmail.com', '9356432678'),
(16, 1, 'Surya', '123qwe456rt', '137/86B', 'Enova', 'surya@gmail.com', '6049327134'),
(17, 3, 'Hari', 'qweiu7', '29/53A', 'EZ', 'hari@gmail.com', '7890420183'),
(18, 2, 'Mani', '123asdasd', '1789/ad9', 'EZKART', 'mani@gmail.com', '8907654323'),
(20, 5, 'Kumar', '12343qw', '190/76B', 'KFG', 'kumar@online.com', '8907876545'),
(28, 4, 'Akshay', 'qweasas', '800/45X', 'PPG', 'akshay@gmail.com', '9087986745'),
(29, 5, 'Nafih', '98ui78', '12/ASSX', 'KPGM', 'Nafih@gmail.com', '9999966655'),
(30, 1, 'Akhil', 'qw123', '800/5X', 'PPGL', 'akhil@gmail.com', '8798674225'),
(36, 15, 'Hari', '123ksd12', '120/760', 'Kmart', 'hari@rediffmail.com', '1234567891'),
(65, 1, 'Priya', 'qsas', 'pp0/45X', 'Wipro', 'priya@gmail.com', '9087986045'),
(66, 16, 'Anu', '98ui7812', '16/ASSX', 'TCS', 'anu@gmail.com', '9488682234'),
(69, 3, 'Satheesh', 'qwertyuio', '45/BNI', 'KOSHYS', 'satheesh@gmail.com', '9898768756'),
(70, 1, 'ramki', 'asdfgh', '34/OPx', 'GSX', 'ramki@gmail.com', '9876543254'),
(71, 2, 'Ram', '45687', 'TYu/23', 'TECH X', 'ram@gmail.com', '9878098945'),
(72, 5, 'Yokesh', 'qweqd', 'QWE4/90', 'CKEC', 'yokesh@gmail.com', '9487682258');

-- --------------------------------------------------------

--
-- Table structure for table `member_request`
--

CREATE TABLE `member_request` (
  `req_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `plan` varchar(128) NOT NULL,
  `date_of_submission` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `r_id` int(11) NOT NULL,
  `region` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`r_id`, `region`) VALUES
(1, 'Coimbatore'),
(2, 'Ruralcoimbatore');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `total_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`total_id`, `t_id`, `total`) VALUES
(1, 1, 1200),
(2, 2, 500),
(3, 3, 300),
(4, 4, 750),
(5, 10, 2000),
(6, 11, 4000),
(7, 12, 8000),
(8, 13, 4578);

-- --------------------------------------------------------

--
-- Table structure for table `t_program`
--

CREATE TABLE `t_program` (
  `t_id` int(11) NOT NULL,
  `t_program` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_program`
--

INSERT INTO `t_program` (`t_id`, `t_program`) VALUES
(1, 'member_success_program'),
(2, 'fincloud_and_st'),
(3, 'jubilant_coimbatore'),
(4, 'lvh'),
(10, 'Date with Git'),
(11, 'Full stack developement'),
(12, 'Python developement'),
(13, 'Kotlin Crash course');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `m_id` int(11) DEFAULT NULL,
  `usertype` varchar(11) NOT NULL DEFAULT 'member',
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `m_id`, `usertype`, `username`, `email`, `phone`, `password`) VALUES
(1, 69, 's_admin', 'Satheesh', 'satheesh@gmail.com', '9898768756', 'dae2515903e671a90541040a729a8a04'),
(13, NULL, 'member', 'vishnu', 'vishnu@gmail.com', '7867545687', '25f9e794323b453885f5181f1b624d0b'),
(14, NULL, 'admin', 'vihas', 'vihas@gmail.com', '9087676545', 'dae2515903e671a90541040a729a8a04'),
(15, NULL, 'admin', 'HR', 'hr@gmail.com', '0987767856', 'dae2515903e671a90541040a729a8a04'),
(16, 70, 'member', 'ramki', 'ramki@gmail.com', '9876543254', '978ed8458a68378697a5fc6ca3746e6e'),
(17, 71, 'member', 'Ram', 'ram@gmail.com', '9878098945', '137aa307412e8ab6999a6ef6064a70f4'),
(18, 72, 'member', 'Yokesh', 'yokesh@gmail.com', '9487682258', '978ed8458a68378697a5fc6ca3746e6e');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `v_id` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `venue` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`v_id`, `t_id`, `venue`) VALUES
(1, 1, 'SR-Complex'),
(2, 2, 'VR-Complex'),
(3, 3, 'KR-Complex'),
(4, 4, 'MR-Complex'),
(5, 10, 'PROZONE'),
(6, 11, 'ENOVA'),
(7, 12, 'KV college'),
(8, 13, 'Tech mahindra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `member_request`
--
ALTER TABLE `member_request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`total_id`);

--
-- Indexes for table `t_program`
--
ALTER TABLE `t_program`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `member_request`
--
ALTER TABLE `member_request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `total_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_program`
--
ALTER TABLE `t_program`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `v_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
