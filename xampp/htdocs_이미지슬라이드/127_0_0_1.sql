-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 09:47 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffeelist`
--

CREATE TABLE IF NOT EXISTS `coffeelist` (
`no` int(11) NOT NULL,
  `id` varchar(250) NOT NULL,
  `kind` varchar(250) NOT NULL,
  `percent` varchar(250) NOT NULL,
  `memo` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coffeelist`
--

INSERT INTO `coffeelist` (`no`, `id`, `kind`, `percent`, `memo`, `country`, `count`, `price`) VALUES
(1, 'cof001', '에머랄드 마운틴', '1%미만', '깊고 그윽하고 달콤한 맛', '콜롬비아', 100, 2000),
(2, 'cof002', '블루 마운틴', '1% 미만', '달콤한 맛, 조화로운 맛', '자마이카', 200, 3540),
(3, 'cof003', '콜롬비아 슈프레모', '0.05', '원숙한 감칠맛', '콜롬비아', 54, 2540),
(4, 'cof004', '코나', '0.05', '산뜻한 신맛', '하와이', 20, 1520),
(5, 'cof005', '콜롬비아 마일드', '0.1', '감칠맛, 약한 신맛', '콜롬비아 엑셀소', 16, 1200),
(6, 'cof006', '비콜롬비아 마일드', '0.1', '감칠맛, 약한 신맛', '과테말라', 20, 2103),
(7, 'cof007', '아라비카', '20~30%', '신맛과 단맛의 순한커피', '예멘', 10, 5410),
(8, 'cof008', '아라비카', '20~30%', '신맛과 단맛의 순한 커피', '멕시코', 75, 2110),
(9, 'cof009', '아라비카', '20~30%', '신맛과 단맛의 순한 커피', '엘살바도르', 86, 2610),
(10, 'cof010', '아라비카', '20~30%', '신맛과 단맛의 순한 커피', '에티오피아', 1, 8650),
(11, 'cof011', '아라비카', '20~30%', '신맛과 단맛의 순한 커피', '코스타리카', 101, 10510),
(12, 'cof012', '브라질 아라비카', '0.3', '쓴맛, 신맛, 진한 향', '브라질', 53, 210),
(13, 'cof013', '브라질 아라비카', '0.3', '쓴맛, 신맛, 진한 향', '탄자니아', 301, 652),
(14, 'cof014', '로브스타', '20~30%', '강한 쓴맛, 독특한 향', '인도네시아', 250, 9540),
(15, 'cof015', '로브스타', '20~30%', '강한 쓴맛, 독특한 향', '아이보리 코스트', 245, 5600),
(16, 'cof016', '로브스타', '20~30%', '강한 쓴맛, 독특한 향', '앙골라', 125, 8420);

-- --------------------------------------------------------

--
-- Table structure for table `free`
--

CREATE TABLE IF NOT EXISTS `free` (
`no` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `free`
--

INSERT INTO `free` (`no`, `title`, `name`, `content`, `date`) VALUES
(1, 'asdfasdf', 'asdfasdfasdf', 'asfdasdfsadfasdfasdfasdf', '2015-02-04'),
(2, 'sadfa', 'sdfadf', 'afdasdfa', '2015-02-05'),
(3, 'asdfas', 'dfasfasd', 'fasdfasdf', '2015-02-04'),
(4, 'asdfa', 'sdfasdf', 'asdfadf', '2015-02-05'),
(5, 'asdfa', 'sdfadf', 'sfasdfa', '2015-02-05'),
(6, 'wqw', 'qeqw', 'easdaszxcvzcxvdf', '2015-02-05'),
(7, 'asdf', 'sdfs', 'dfsdafdf', '2015-02-04'),
(11, '1', '2', '3', '2015-02-04'),
(12, '1234', '1234', '1234', '0000-00-00'),
(14, '김민규', '김민규', '으캬캬캬캬ㅑ', '2015-05-05'),
(15, '김', '김', '김', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hagi`
--

CREATE TABLE IF NOT EXISTS `hagi` (
`no` int(11) NOT NULL,
  `cof001` varchar(50) NOT NULL,
  `cof002` varchar(50) NOT NULL,
  `cof003` varchar(50) NOT NULL,
  `cof004` varchar(50) NOT NULL,
  `cof005` varchar(50) NOT NULL,
  `cof006` varchar(50) NOT NULL,
  `cof007` varchar(50) NOT NULL,
  `cof008` varchar(50) NOT NULL,
  `cof009` varchar(50) NOT NULL,
  `cof010` varchar(50) NOT NULL,
  `cof011` varchar(50) NOT NULL,
  `cof012` varchar(50) NOT NULL,
  `cof013` varchar(50) NOT NULL,
  `cof014` varchar(50) NOT NULL,
  `cof015` varchar(50) NOT NULL,
  `cof016` varchar(50) NOT NULL,
  `t` varchar(100) NOT NULL,
  `d` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hagi`
--

INSERT INTO `hagi` (`no`, `cof001`, `cof002`, `cof003`, `cof004`, `cof005`, `cof006`, `cof007`, `cof008`, `cof009`, `cof010`, `cof011`, `cof012`, `cof013`, `cof014`, `cof015`, `cof016`, `t`, `d`) VALUES
(1, '', '', '', '', '', '', 'cof007', '', '', '', '', 'cof012', '', '', '', '', '12342134124', '0000-00-00'),
(3, '', 'cof002', '', '', '', '', '', 'cof008', '', '', '', '', '', '', '', '', '123123', '2015-05-05'),
(4, '', '', '', '', '', '', 'cof007', '', '', '', '', '', 'cof013', '', '', '', '1234', '2004-12-05'),
(5, '', '', 'cof003', '', '', '', '', 'cof008', '', '', '', '', '', '', '', '', '123', '2015-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` varchar(250) NOT NULL,
  `pw` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `lv` int(11) NOT NULL,
`no` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `pw`, `phone`, `email`, `lv`, `no`) VALUES
('admin', '61751f31c211a03724d1db03c5abc0f4', '1234', 'admin@skill.com', 10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`no` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `main` varchar(250) NOT NULL,
  `sub` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `decs` varchar(250) NOT NULL,
  `lv` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`no`, `title`, `main`, `sub`, `key`, `decs`, `lv`) VALUES
(1, '카페소개', 'cafe', 'ctip', '카페소개', '카페소개 페이지입니다.', 1),
(2, '인사말', 'cafe', 'gree', '인사말', '인사말 페이지입니다.', 2),
(3, '회사소개', 'cafe', 'com', '회사소개', '회사소개 페이지입니다.', 2),
(4, '이용가이드', 'guide', 'gu', '이용가이드', '이용가이드 페이지입니다.', 1),
(5, '이용 안내', 'guide', 'ide', '이용 안내', '이용 안내 페이지입니다.', 2),
(6, '커피안내', 'guide', 'cgu', '커피안내', '커피안내 페이지입니다.', 2),
(7, '예약하기', 'ser', 'hagi', '예약하기', '예약하기 페이지입니다.', 1),
(8, '예약하기', 'ser', 'hagi', '예약하기', '예약하기 페이지입니다.', 2),
(9, '예약목록', 'ser', 'serlist', '예약목록', '예약목록 페이지입니다.', 2),
(10, '자유게시판', 'free', 'freel', '자유게시판', '자유게시판', 1),
(11, '커피검색', 'search', 'csea', '커피검색', '커피검색 페이지입니다.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffeelist`
--
ALTER TABLE `coffeelist`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `free`
--
ALTER TABLE `free`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `hagi`
--
ALTER TABLE `hagi`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffeelist`
--
ALTER TABLE `coffeelist`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `free`
--
ALTER TABLE `free`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `hagi`
--
ALTER TABLE `hagi`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
