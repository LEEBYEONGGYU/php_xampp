-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2019 at 09:30 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `big`
--
CREATE DATABASE `big` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `big`;

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `bankname` varchar(250) NOT NULL,
  `banknum` varchar(250) NOT NULL,
  `hyun` int(11) NOT NULL,
  `jobmoney` int(11) NOT NULL,
  `gita` varchar(250) NOT NULL,
  `gitamoney` int(11) NOT NULL,
  `saemoney` varchar(250) NOT NULL,
  `daymoney` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`no`, `bankname`, `banknum`, `hyun`, `jobmoney`, `gita`, `gitamoney`, `saemoney`, `daymoney`) VALUES
(7, '농협', '123', 123, 123, '식비', 123, '세금예산서', 123),
(8, '농협', '123', 123123, 1231, '식비', 23123123, '세금예산서', 123123),
(9, '농협', '최재용은 이미 지를 사랑 한 다 ~~~!!!!!!ㅋㅋㅋㅋㅋ최재용은 이미 지를 사랑 한 다 ~~~!!!!!!ㅋㅋㅋㅋㅋ최재용은 이미 지를 사랑 한 다 ~~~!!!!!!ㅋㅋㅋㅋㅋ최재용은 이미 지를 사랑 한 다 ~~~!!!!!!ㅋㅋㅋㅋㅋ', 0, 0, '식비', 0, '세금예산서', 0);

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE IF NOT EXISTS `custom` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `pch` varchar(250) NOT NULL,
  `pchphone` varchar(250) NOT NULL,
  `reginum` varchar(250) NOT NULL,
  `pchname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `typenow` text NOT NULL,
  `type` varchar(250) NOT NULL,
  `em` varchar(250) NOT NULL,
  `fax` varchar(250) NOT NULL,
  `receipt` varchar(250) NOT NULL,
  `rdate` varchar(250) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`no`, `pch`, `pchphone`, `reginum`, `pchname`, `address`, `phone`, `typenow`, `type`, `em`, `fax`, `receipt`, `rdate`) VALUES
(1, '1231', '321-321-32', '132', '1', '321', '321-321-32', '132', '132', '132@1', '321-321-32', 'Yes', '1-32-21');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE IF NOT EXISTS `day` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `site` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `money` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `charge` int(11) NOT NULL,
  `memo` text NOT NULL,
  `cost` int(11) NOT NULL,
  `lastjob` varchar(250) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`no`, `date`, `name`, `site`, `type`, `money`, `payment`, `charge`, `memo`, `cost`, `lastjob`) VALUES
(1, '1321-13-13', '13', '21', '321', 32, 0, 2132132, '1321', 321321321, 'yes'),
(2, '2014-12-4', '123', '123', '123', 123, 0, 123, 'sad', 123, 'yes'),
(3, '1321-13-31', '123', '3123', '312', 3123, 0, 23123, '123123', 123, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `embill`
--

CREATE TABLE IF NOT EXISTS `embill` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `company` int(11) NOT NULL,
  `sellmoney` int(11) NOT NULL,
  `cdate` varchar(250) NOT NULL,
  `odate` varchar(250) NOT NULL,
  `regi` varchar(250) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `embill`
--

INSERT INTO `embill` (`no`, `company`, `sellmoney`, `cdate`, `odate`, `regi`) VALUES
(3, 123, 123, '123-12-12', '123-12-12', 'Yes'),
(4, 231231213, 123123123, '1231-12-12', '1231-12-12', 'Yes'),
(5, 123, 123, '132-12-31', '3122-23-23', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `isbill`
--

CREATE TABLE IF NOT EXISTS `isbill` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(250) NOT NULL,
  `reginum` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `sellmoney` int(11) NOT NULL,
  `bonusmoney` int(11) NOT NULL,
  `cdate` varchar(250) NOT NULL,
  `odate` varchar(250) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isbill`
--

INSERT INTO `isbill` (`no`, `company`, `reginum`, `address`, `sellmoney`, `bonusmoney`, `cdate`, `odate`) VALUES
(1, '213123', '132', '2133', 1232, 3, '213-21-32', '321-32-13');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(250) NOT NULL,
  `pw` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `jumin` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `memo` text NOT NULL,
  `note` text NOT NULL,
  `idc` varchar(250) NOT NULL,
  `bank` varchar(250) NOT NULL,
  `lv` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`no`, `id`, `pw`, `name`, `jumin`, `address`, `phone`, `type`, `memo`, `note`, `idc`, `bank`, `lv`) VALUES
(1, '', '', '212`', '221312-123123', '123123', '123-123-123', '213123123', '12123123', '123132213', './upload/shop(2015-01-21-03-12-04)_Desert.jpg', './upload/shop(2015-01-21-03-12-04)_Koala.jpg', 1),
(2, '', '', 'qq', 'qq-qq', 'qq', 'qq-qq-qq', 'qq', 'qqq', 'qqqq', './upload/shop(2015-01-21-07-43-29)_Hydrangeas.jpg', './upload/shop(2015-01-21-07-43-29)_Chrysanthemum.jpg', 1),
(3, '2332', '2332', '2323', '232323-2323', '232323', '232-23-2323', '3223', '2323', '232323', './upload/shop(2015-01-21-07-45-52)_Tulips.jpg', './upload/shop(2015-01-21-07-45-52)_Lighthouse.jpg', 1),
(4, 'aa', 'aa', 'aa', 'aa-aa', 'aa', 'aa-aa-aa', 'aa', 'aa', 'aa', './upload/shop(2015-01-21-08-00-11)_Koala.jpg', './upload/shop(2015-01-21-08-00-11)_Chrysanthemum.jpg', 1),
(5, 'qq', 'qq', 'qq', 'qq-qq', 'qq', 'qq-q-qq', 'q', 'qqq', 'qq', './upload/shop(2015-01-21-08-00-26)_Hydrangeas.jpg', './upload/shop(2015-01-21-08-00-26)_Chrysanthemum.jpg', 1),
(14, '123', '123', '123', '13-23', '132123', '123-123-132', '21', '123123', '123123', './upload/shop(2015-01-22-04-16-50)_Tulips.jpg', './upload/shop(2015-01-22-04-16-50)_Jellyfish.jpg', 1),
(15, 'ㅊㅌㅋ', 'zxc', 'ㅋㅌㅊ', 'ㅋㅌㅊ-zxc', 'ㅋㅌㅊ', 'ㅊㅋㅌ-ㅋㅌㅊ-ㅋㅌㅊ', 'ㅊㅋㅌ', 'ㅊㅋㅌㅊ', 'ㅋㅌㅊㅋㅌㅊ', './upload/shop(2015-01-23-03-08-46)_man349.png', './upload/shop(2015-01-23-03-08-46)_business162.png', 1),
(16, 'asd', 'asd', 'asd', 'asd-asd', 'asd', 'asd-asd-asd', 'asd', 'dasdasd', 'asdasd', './upload/shop(2015-01-26-01-25-48)_Chrysanthemum.jpg', './upload/shop(2015-01-26-01-25-48)_Koala.jpg', 1),
(17, '1234567890', '1234567890', '1234', '123456-1234567', '1234567890', '123-1234-1234', '1234567890', '1234567890', '1234567890', './upload/shop(2015-01-27-01-59-27)_Koala.jpg', './upload/shop(2015-01-27-01-59-27)_Desert.jpg', 1),
(18, '가나다라마바사아자차카타파하', 'rkskekfkakqktk', '아자차카', '타파하-dpgpgpg', '우헤우헤우헤우헤우우우', '할할할-헐헗ㄹ-ㄷㄴㅁㅇ', '여긴어디 아자', 'ㄴㅁㅇㅁㄴㅁㄴㅇㅁㄴㅁㄴㅁㄴㅇㅇㅁㄴㅁㄴㅇ', 'ㅁㄴㅇ', './upload/shop(2015-01-27-02-03-48)_Hydrangeas.jpg', './upload/shop(2015-01-27-02-03-48)_Koala.jpg', 1),
(19, 'ㅌㅋㅊㅌㅋㅊ', 'xczxczxcz', 'ㅌㅋㅊㅌ', 'ㅊㅌㅋ-xczcxzx', 'ㅊㅌㅋㅊㅌㅋㅊㅋㅌㅊ', 'ㅌㅋㅊ-ㅌㅊㅋㅊ-ㅋㅌㅊㅋ', '12123123123ㅁㄴㅇㅊㅌㅋ', 'ㅊㅋㅌㅋㅌㅊㅌㅋㅊ', 'ㅌㅋㅊ', './upload/shop(2015-01-27-02-19-32)_Tulips.jpg', './upload/shop(2015-01-27-02-19-32)_Chrysanthemum.jpg', 1),
(20, '123', '123', '123', '123-123', '123', '123-123-123', '123', '123', '13', './upload/shop(2015-01-29-01-19-32)_dream-job-sign.jpg', './upload/shop(2015-01-29-01-19-32)_template-help_com_20150112_201153.jpg', 1),
(21, 'admin', '1234', '관리자', '1346-1234657', '대한민국 어딘가', '123-4567-8901', '관리자', '관리자', '관리자', './upload/shop(2015-02-02-11-53-33)_Tulips.jpg', './upload/shop(2015-02-02-11-53-33)_Chrysanthemum.jpg', 1),
(22, 'asd', 'asd', 'asd', 'asd-asd', 'asd', 'asd-asda-asda', 'asd', 'asd', 'asd', './upload/shop(2015-02-02-13-24-32)_Lighthouse.jpg', './upload/shop(2015-02-02-13-24-32)_Tulips.jpg', 1),
(23, 'rotlqkfwlsWK', 'wrkxdktjahtroajrrptsp', 'Tmqk', '112345-1234567', '전국 전국시 전국동 전국-전국', '123-1231-1231', 'what is your type?', 'STFU', 'STFU', './upload/shop(2015-02-02-13-27-42)_Hydrangeas.jpg', './upload/shop(2015-02-02-13-27-42)_Tulips.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `main` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `lv` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `desc` varchar(80) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`no`, `title`, `main`, `sub`, `lv`, `key`, `desc`) VALUES
(1, '회원관리', 'member', 'search', 1, '', ''),
(2, '일보', 'news', 'daily', 1, '', ''),
(3, '거래처', 'custom', 'custom', 1, '', ''),
(4, '지급현황', 'pay', 'workpay', 1, '', ''),
(5, '근로관리', 'setting', 'contract', 1, '', ''),
(6, '회원검색', 'member', 'search', 2, '회원검색, 회원찾기, 검색, 찾기', '회원을 검색할 수 있는 페이지 입니다.'),
(7, '회원추가', 'member', 'join', 2, '회원추가', '회원추가하는곳입니다.'),
(8, '일일일보', 'news', 'daily', 2, '일일일보', '일일일보를 보여주는곳'),
(9, '신분증 내역', 'member', 'history', 2, '신분증 내역, 과거', '신분증 내역을 알려주는 페이지입니다.'),
(10, '통장사본', 'member', 'bankbook', 2, '통장사본, 복제', '통장사본을 보여주는 페이지 입니다.'),
(11, '개인신용정보활용동의서', 'member', 'onec', 2, '개인, 신용, 정보, 활용, 동의서', '개인신용정보활용동의서를 보여주는 페이지 입니다.'),
(12, '자금일보', 'news', 'cash', 2, '자금, 일보', '자금일보를 보여주는 페이지 입니다.'),
(13, '거래처', 'custom', 'custom', 2, '거래처, 거래', '거래처를 보여주는 페이지 입니다.'),
(14, '계산서발행', 'custom', 'isbill', 2, '계산서발행', '계산서를 발행해주는 페이지 입니다.'),
(15, '계산서미발행', 'custom', 'embill', 2, '계산서, 미발행', '계산서를 미발행하는 페이지 입니다.'),
(16, '일용근로자 지급조서', 'pay', 'workpay', 2, '일용근로자, 지급조서', '일용근로자 지급조서를 보여주는 페이지 입니다.'),
(17, '노무비 청구서', 'pay', 'nopay', 2, '노무비, 청구서', '노무비를 청구하는 페이지 입니다.'),
(18, '근로계약서', 'setting', 'contract', 2, '근로, 계약서', '근로 계약서를 보여주는 페이지 입니다.'),
(19, '구인표', 'setting', 'human', 2, '구인표', '구인표를 보여주는 페이지 입니다.'),
(20, '구직표', 'setting', 'job', 2, '구직표', '구직표를 보여주는 페이지 입니다.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
