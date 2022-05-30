-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 10:50 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Auth_user` (IN `Name` VARCHAR(100), IN `Password` VARCHAR(200))  BEGIN
	select * from users where Name=Name and Password=Password;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_emp` ()  NO SQL
BEGIN
	select * from employee;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_emp` (IN `Name` VARCHAR(50), IN `Email` VARCHAR(100), IN `DOB` VARCHAR(20), IN `qual` VARCHAR(20), IN `exp` INT, IN `sal` INT, IN `img` TEXT)  NO SQL
BEGIN
	Insert into employee(Name,Email,DOB,Qualification,Experience,Salary,Images) VALUES(Name,Email,DOB,qual,exp,sal,img);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Register` (IN `Name` VARCHAR(50), IN `Email` VARCHAR(100), IN `pwd` VARCHAR(200))  BEGIN
	INSERT into users(Name,Email,Password) values (Name,Email,pwd);    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Search_emp` (IN `id` INT)  BEGIN 
	select * from employee where Eid=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Update_record` (IN `Name` VARCHAR(50), IN `Email` VARCHAR(100), IN `DOB` VARCHAR(20), IN `qual` VARCHAR(20), IN `exp` INT, IN `sal` DECIMAL, IN `img` TEXT, IN `id` INT)  NO SQL
BEGIN
	UPDATE employee set Name=Name,Email=Email,DOB=DOB,Qualification=qual,Experience=exp,Salary=sal,Images=img where Eid=id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cid` int(11) NOT NULL,
  `Cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cid`, `Cname`) VALUES
(1, 'Frozon Foods'),
(2, 'Meat'),
(3, 'Fruits'),
(4, 'Chocolates');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Eid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Experience` int(11) NOT NULL,
  `Salary` bigint(20) NOT NULL,
  `Images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Eid`, `Name`, `Email`, `DOB`, `Qualification`, `Experience`, `Salary`, `Images`) VALUES
(6, 'Hussain', 'hussain@outlook.com', '1997-02-19', 'BE', 2, 30000, 'Skedis_Form.docx'),
(11, 'Surya ', 'surya@gmail.com', '1998-07-20', 'BE', 3, 25000, 'code-example.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `Category`, `Price`, `Images`) VALUES
(1, 'Test', 'Meat', 100, 'Aravalinadu.jpg,User.jpg'),
(2, 'Orange', 'Frozon Foods', 100, 'Business.jpg,Skedis_logo.png'),
(3, 'Beef', 'Meat', 250, 'Skedis-512x512.jpg,user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uid` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `Name`, `Email`, `Password`) VALUES
(1, 'test', 'test@gmail.com', 'ouioi@njd'),
(2, 'Myra Wolf', 'bjhtrichyadmin', '8d8f2628cfce1853efc0d027be4f6ce4'),
(3, 'Hussain', 'admin@gmail.com', '63102f0f523858e8e6a1bb2a72039266'),
(4, 'Jakeen', 'jakeen@gmail.com', '63102f0f523858e8e6a1bb2a72039266'),
(5, 'Hussainmd', 'Hussain@gmail.com', '63102f0f523858e8e6a1bb2a72039266'),
(6, 'bjhadmin', 'bjhtrichyadmin@gmail.com', '63102f0f523858e8e6a1bb2a72039266'),
(7, 'Testuser', 'test@gmail.com', '63102f0f523858e8e6a1bb2a72039266');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Eid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
