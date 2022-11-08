-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-11-08 13:57
-- 서버 버전: 10.4.10-MariaDB
-- PHP 버전: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `note_project`
--
CREATE DATABASE IF NOT EXISTS `note_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `note_project`;

-- --------------------------------------------------------

--
-- 테이블 구조 `friends`
--

CREATE TABLE `friends` (
  `idx` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `fri_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `friends`
--

INSERT INTO `friends` (`idx`, `user`, `fri_name`, `name`, `email`) VALUES
(6, '123', '123', '123', '123'),
(7, 'admin', 'user', '유저', 'user@gmail.com');

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `id`, `pw`, `name`, `email`) VALUES
(1, 'admin', '$2y$10$uuzp.rQ4C6wW4p8pwRSnB.dLOfJOsG4m7MhvRJ5cXssl/K8iJmoDG', '관리자', '관리자'),
(6, 'qwer', '$2y$10$tSw9OUPktUsgJU9khslEb.gzOc3ZchYi0ITtFVqMxhl1aD4mtyuSO', '이종빈', 'keebkgi@nakdf.com'),
(7, 'bgpoilkj', '$2y$10$m3tSfK7rMXye8tYsuuwMA..9tL9DZeI8YvfjmtkeV/qmFVu7RsGya', 'BK', 'dfdf@naver.com'),
(8, 'pooq', '$2y$10$XxZ0EVNAB1JTM3Vk/X3DO.y9qmzDs4kxVnBYnGLWU5STbmH7rUGNO', '1234', '1234'),
(9, 'post2', '$2y$10$dEUl/r4sYg/3MGiXg/.vmuoQ3zVGHvMv6GAA4dYNA.Nu9ktkM8YkK', '12', '12'),
(10, '', '$2y$10$UTBCNXiO.G9RMvCA6WQmKuIMHUAcZ3IaLAZIaxZD5ng0XUIDHUsSy', '', ''),
(11, 'user1', '$2y$10$a5WdjDjekrV4B7ONXBWV6.XQUj.gmDXiYnTIUfN5UrV4qr/JC.EC2', 'dddd', 'ddddd@naver.com'),
(12, 'user', '$2y$10$cLT0GBeYL/kgnDWyLqqSQOa/UEqxrr9KA.l9ToU2AotMoJ2FmA6uK', '유저', 'dddd@ddee.com');

-- --------------------------------------------------------

--
-- 테이블 구조 `recv_note`
--

CREATE TABLE `recv_note` (
  `idx` int(11) NOT NULL,
  `recv_id` varchar(100) NOT NULL,
  `send_id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_chk` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `recv_note`
--

INSERT INTO `recv_note` (`idx`, `recv_id`, `send_id`, `title`, `content`, `file`, `send_date`, `read_chk`) VALUES
(19, 'user', 'admin', '안녕 어드민!', '안녕 어드민!', '', '2019-09-30 12:36:02', 0),
(22, 'user', 'admin', '이거 디비', '\r\nfriends : 친구추가\r\nmember : 회원테이블\r\nrecv_note : 받은쪽지함\r\nsend_note : 보낸쪽지함', '', '2019-09-30 12:49:10', 0),
(23, 'user', 'admin', '공격11', 'DROP TABLE FRIENDS;', '', '2019-09-30 12:52:59', 0),
(24, 'admin', 'user', 'RE:', '<input type=\"submit\">', '', '2019-09-30 12:53:18', 0),
(25, 'user', 'admin', 'DELETE FROM `friends` ', 'asdfsdaf', '', '2019-09-30 12:58:44', 0),
(26, '\"); drop database *;', 'user', '\"); drop database *;', '\"); drop database *;', '', '2019-09-30 13:06:44', 0),
(27, '\"); drop database *;', 'user', '\"); drop database *;', '\"); drop database *;\"', '', '2019-09-30 13:07:13', 0),
(28, 'admin', 'user', './///', '//', '', '2019-09-30 13:08:53', 0),
(29, 'admin', 'user', './/', '. drop table friends // ', '', '2019-09-30 13:09:51', 0),
(30, 'admin', 'user', 'asdfasdf', '<%\r\n\r\nfor(int i=0; i<4; i++){\r\n\r\nout.println(i);\r\n\r\n}\r\n\r\n%>', '', '2019-09-30 13:11:18', 0),
(31, 'admin', 'user', 'sd', '<% \r\n\r\nfor(int i=0; i<4; i++) {\r\nout.print(\"a\");\r\n}\r\n\r\n %>', '', '2019-09-30 13:11:45', 0),
(32, 'admin', 'user', 'adfadf', '1234567; delete * friends', '', '2019-09-30 13:13:28', 0),
(33, '546', 'user1', '546', '546', '', '2019-12-12 09:38:41', 0),
(34, 'admin', 'user', 'RE:공격22', '공격 22', '', '2020-12-24 06:30:16', 1),
(35, 'admin', 'user', '읽기테스트', '읽기테스트', '', '2022-11-08 11:30:13', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `send_note`
--

CREATE TABLE `send_note` (
  `idx` int(11) NOT NULL,
  `recv_id` varchar(100) NOT NULL,
  `send_id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `recv_chk` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `send_note`
--

INSERT INTO `send_note` (`idx`, `recv_id`, `send_id`, `title`, `content`, `recv_chk`, `file`, `send_date`) VALUES
(20, 'user', 'admin', '안녕 어드민!', '안녕 어드민!', 1, '', '2019-09-30 12:36:02'),
(21, 'admin', 'user', 'RE: 응 안녕 유저', 'RE: 응 안녕 유저', 1, '', '2019-09-30 12:37:40'),
(22, 'admin', 'user', '야 쪽지받으라고!', '<!--', 1, '', '2019-09-30 12:47:25'),
(23, 'user', 'admin', '이거 디비', '\r\nfriends : 친구추가\r\nmember : 회원테이블\r\nrecv_note : 받은쪽지함\r\nsend_note : 보낸쪽지함', 1, '', '2019-09-30 12:49:10'),
(25, 'admin', 'user', 'RE:', '<input type=\"submit\">', 1, '', '2019-09-30 12:53:18'),
(26, 'user', 'admin', 'DELETE FROM `friends` ', 'asdfsdaf', 1, '', '2019-09-30 12:58:44'),
(27, '\"); drop database *;', 'user', '\"); drop database *;', '\"); drop database *;', 0, '', '2019-09-30 13:06:44'),
(28, '\"); drop database *;', 'user', '\"); drop database *;', '\"); drop database *;\"', 0, '', '2019-09-30 13:07:13'),
(29, 'admin', 'user', './///', '//', 1, '', '2019-09-30 13:08:53'),
(30, 'admin', 'user', './/', '. drop table friends // ', 1, '', '2019-09-30 13:09:51'),
(31, 'admin', 'user', 'asdfasdf', '<%\r\n\r\nfor(int i=0; i<4; i++){\r\n\r\nout.println(i);\r\n\r\n}\r\n\r\n%>', 1, '', '2019-09-30 13:11:18'),
(32, 'admin', 'user', 'sd', '<% \r\n\r\nfor(int i=0; i<4; i++) {\r\nout.print(\"a\");\r\n}\r\n\r\n %>', 1, '', '2019-09-30 13:11:45'),
(33, 'admin', 'user', 'adfadf', '1234567; delete * friends', 1, '', '2019-09-30 13:13:28'),
(34, '546', 'user1', '546', '546', 0, '', '2019-12-12 09:38:41'),
(35, 'admin', 'user', 'RE:공격22', '공격 22', 1, '', '2020-12-24 06:30:16'),
(36, 'admin', 'user', '읽기테스트', '읽기테스트', 1, '', '2022-11-08 11:30:13');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `recv_note`
--
ALTER TABLE `recv_note`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `send_note`
--
ALTER TABLE `send_note`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `friends`
--
ALTER TABLE `friends`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 테이블의 AUTO_INCREMENT `recv_note`
--
ALTER TABLE `recv_note`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- 테이블의 AUTO_INCREMENT `send_note`
--
ALTER TABLE `send_note`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
