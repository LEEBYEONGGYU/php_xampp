-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 19-01-05 10:54
-- 서버 버전: 5.6.20
-- PHP 버전: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `basket_190104`
--
CREATE DATABASE IF NOT EXISTS `basket_190104` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `basket_190104`;

-- --------------------------------------------------------

--
-- 테이블 구조 `slist`
--

CREATE TABLE `slist` (
  `idx` int(11) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `fromcon` varchar(100) NOT NULL,
  `pro_num` int(11) NOT NULL,
  `pro_ma` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `slist`
--

INSERT INTO `slist` (`idx`, `pro_pic`, `pro_name`, `price`, `fromcon`, `pro_num`, `pro_ma`, `date`) VALUES
(1, 'test', '테스트 상품', '32,500원', '국내산', 14587852, '(주)원산테크', '2019-01-04'),
(2, 'test2', '테스트 상품2', '42,500원', '호주산', 0, '삼성', '2019-01-04'),
(3, 'test3', '테스트 상품3', '45,500원', '호주산', 0, '샤오성', '2019-01-04');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `slist`
--
ALTER TABLE `slist`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `slist`
--
ALTER TABLE `slist`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
