-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2021 at 09:54 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `myplatform`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `icon` varchar(64) DEFAULT NULL,
  `type` tinyint(3) DEFAULT NULL COMMENT '分类：1-普通员工；2-项目经理；3-项目组长',
  `age` smallint(3) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `icon`, `type`, `age`, `birthday`, `create_time`) VALUES
(3, 'worker', '111', '张伟', 'user3.jpg', 3, 36, '2020-10-26', 1609205458),
(5, NULL, NULL, '陆游', 'user5.jpeg', 3, 36, '1985-10-21', 1634775038),
(6, NULL, NULL, '郑明', 'user6.png', 3, 32, '1985-10-20', 1634773871),
(7, NULL, NULL, 'GAKKI', 'user7.png', 2, 36, '1989-10-10', 1634773195),
(8, NULL, NULL, '张伟', 'user8.jpg', 3, 36, NULL, 1609117198),
(10, NULL, NULL, 'Malody', 'mla2.jpg', 1, 25, '2020-12-15', 1634773832),
(11, NULL, NULL, '方宏', 'user11.png', 2, 32, '2020-12-15', 1634773803),
(13, NULL, NULL, 'k娘', 'kfc.png', 2, 24, '2021-10-14', 1634600417),
(15, NULL, NULL, '丽雅', 'oresama01.jpg', 1, 20, '1991-01-31', 1634805321),
(17, NULL, NULL, 'Juno', '', 1, 18, '2002-10-10', 1634773990),
(19, NULL, NULL, '李蕾', '', 1, 30, '2021-10-13', 1634775086),
(20, NULL, NULL, '朱莉', 'mla.jpg', 2, 20, '1990-10-18', 1634805269);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
