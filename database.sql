-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 02, 2018 at 09:01 PM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `HH`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkList`
--

CREATE TABLE `checkList` (
  `u_id` varchar(32) NOT NULL,
  `t_id` int(2) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkList`
--
ALTER TABLE `checkList`
  ADD PRIMARY KEY (`u_id`,`t_id`);
