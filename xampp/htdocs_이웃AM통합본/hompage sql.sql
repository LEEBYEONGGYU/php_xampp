-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 19-10-01 18:12
-- 서버 버전: 10.4.6-MariaDB
-- PHP 버전: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `180315_board`
--
CREATE DATABASE IF NOT EXISTS `180315_board` DEFAULT CHARACTER SET utf8 COLLATE utf8_german2_ci;
USE `180315_board`;

-- --------------------------------------------------------

--
-- 테이블 구조 `basket`
--

CREATE TABLE `basket` (
  `idx` int(11) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `hit` int(11) NOT NULL,
  `lock_post` int(11) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `name`, `pw`, `title`, `content`, `date`, `hit`, `lock_post`, `file`) VALUES
(60, '1', '$2y$10$a/pzSKMj2PhCrQYJOxl/TePfhoKTe8oDWk8K38g8.Tm9NyAgV5msq', '1', '1', '2019-10-01', 0, 1, ''),
(61, '1', '$2y$10$4iKtjw3tGuP2tD/teA0TgO3DoAAVL9n8urx2MB3tpg9zjxKXyr/9C', '1', '1', '2019-10-01', 1, 0, '');

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

-- --------------------------------------------------------

--
-- 테이블 구조 `levelpoint`
--

CREATE TABLE `levelpoint` (
  `idx` int(11) NOT NULL,
  `userid` varchar(11) COLLATE utf8_german2_ci NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- 테이블의 덤프 데이터 `levelpoint`
--

INSERT INTO `levelpoint` (`idx`, `userid`, `point`) VALUES
(1, '1', 16);

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `level` int(11) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `id`, `pw`, `name`, `adress`, `sex`, `email`, `year`, `month`, `day`, `phone`, `level`, `point`) VALUES
(1, 'iii', '$2y$10$utWHsaA5Q0cJIxz7/GApG.UNndtNLRXSnc2kUwsKelKR.2D/tko12', 'i', 'i', '남', 'i@naver.com', 'i', 'i', 'i', 'i', 9, 0),
(2, 'q', '$2y$10$rkK.mGcUATDhPd43Q5Io5.DcAImOk6aEcwDb0WopPca/H/J1ngIIy', 'q', 'q', '남', 'q@naver.com', 'q', 'q', 'q', '', 0, 0),
(3, 'ksh', '$2y$10$IJoCy/aetzxrc8VkAiV5MeizjAeQu1QZ/PFoi/IeUrrfTcGXp5Wpy', 'ksh', 'ksh', '', 'ksh@naver.com', '1', '2', '2', '', 0, 0),
(4, '1', '$2y$10$f7YKi1RGOXVbLbqHtF1SzuDwLM0pCzTlsz7xSebu75kE.EsPK8HNO', '1', '', '', '', '', '', '', '', 0, 0),
(5, '2', '$2y$10$PFxdaiAdJ5Rl9kFILWpiJeSe0DLv7Z2N9R0VgPuwWLvX8OOZFCJTG', '2', '2', '남', '2@naver.com', '2', '2', '2', '', 0, 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `produt`
--

CREATE TABLE `produt` (
  `idx` int(11) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pro_count` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `recv_note`
--

CREATE TABLE `recv_note` (
  `recv_id` varchar(100) NOT NULL,
  `send_id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `recv_chk` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `recv_note`
--

INSERT INTO `recv_note` (`recv_id`, `send_id`, `title`, `content`, `recv_chk`, `file`, `send_date`, `idx`) VALUES
('gfdg', 'q', 'gfd', 'fd', 0, '', '2019-08-25 09:39:02', 1),
('1', '1', '1', '1', 0, '', '2019-09-27 15:07:09', 2),
('1', '1', '1', '1', 0, '', '2019-10-01 15:00:41', 3);

-- --------------------------------------------------------

--
-- 테이블 구조 `reply`
--

CREATE TABLE `reply` (
  `idx` int(11) NOT NULL,
  `con_num` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `reply`
--

INSERT INTO `reply` (`idx`, `con_num`, `name`, `content`, `date`) VALUES
(2, 4, 'iii', 'ㅣㅣ', '2019-09-24 03:09:51'),
(6, 10, '1', 'a\na\n', '2019-09-27 11:09:31'),
(7, 17, '1', '1', '2019-09-27 12:09:29'),
(8, 3, '1', 'ㅓㅏㅘ', '2019-09-27 02:09:24'),
(9, 13, '1', 'ㅀㅇㅎ', '2019-09-27 03:09:04'),
(10, 26, '1', 'dfgfdg', '2019-09-27 03:09:51'),
(11, 27, '1', 'ㄴㅁㅇ', '2019-09-27 03:09:53');

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
  `send_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `send_note`
--

INSERT INTO `send_note` (`idx`, `recv_id`, `send_id`, `title`, `content`, `recv_chk`, `file`, `send_date`) VALUES
(1, 'gfdg', 'q', 'gfd', 'fd', 0, '', '2019-08-25 09:39:02');

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
  `pro_num` varchar(100) NOT NULL,
  `pro_ma` varchar(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `levelpoint`
--
ALTER TABLE `levelpoint`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `produt`
--
ALTER TABLE `produt`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `recv_note`
--
ALTER TABLE `recv_note`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `send_note`
--
ALTER TABLE `send_note`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `slist`
--
ALTER TABLE `slist`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `basket`
--
ALTER TABLE `basket`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- 테이블의 AUTO_INCREMENT `friends`
--
ALTER TABLE `friends`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `levelpoint`
--
ALTER TABLE `levelpoint`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `produt`
--
ALTER TABLE `produt`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `recv_note`
--
ALTER TABLE `recv_note`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `reply`
--
ALTER TABLE `reply`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 테이블의 AUTO_INCREMENT `send_note`
--
ALTER TABLE `send_note`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `slist`
--
ALTER TABLE `slist`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- 데이터베이스: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- 테이블의 덤프 데이터 `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'hompage sql', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"180315_board\",\"phpmyadmin\",\"post_board\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"@TABLE@ í…Œì´ë¸” êµ¬ì¡°\",\"latex_structure_continued_caption\":\"@TABLE@ í…Œì´ë¸” êµ¬ì¡° (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- 테이블의 덤프 데이터 `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"180315_board\",\"table\":\"board\"},{\"db\":\"180315_board\",\"table\":\"member\"},{\"db\":\"180315_board\",\"table\":\"levelpoint\"},{\"db\":\"180315_board\",\"table\":\"basket\"},{\"db\":\"180315_board\",\"table\":\"reply\"},{\"db\":\"180315_board\",\"table\":\"friends\"},{\"db\":\"level_board\",\"table\":\"levelpoint\"},{\"db\":\"level_board\",\"table\":\"board\"},{\"db\":\"level_board\",\"table\":\"member\"},{\"db\":\"180315_board\",\"table\":\"produt\"}]');

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- 테이블의 덤프 데이터 `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-10-01 16:12:06', '{\"lang\":\"ko\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- 테이블 구조 `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- 테이블의 인덱스 `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- 테이블의 인덱스 `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- 테이블의 인덱스 `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- 테이블의 인덱스 `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- 테이블의 인덱스 `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- 테이블의 인덱스 `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- 테이블의 인덱스 `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- 테이블의 인덱스 `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- 테이블의 인덱스 `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- 테이블의 인덱스 `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- 테이블의 인덱스 `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- 테이블의 인덱스 `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- 테이블의 인덱스 `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- 테이블의 인덱스 `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- 테이블의 인덱스 `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- 테이블의 인덱스 `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- 테이블의 인덱스 `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 데이터베이스: `post_board`
--
CREATE DATABASE IF NOT EXISTS `post_board` DEFAULT CHARACTER SET utf8 COLLATE utf8_german2_ci;
USE `post_board`;

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `hit` int(11) NOT NULL,
  `lock_post` int(11) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `name`, `pw`, `title`, `content`, `date`, `hit`, `lock_post`, `file`) VALUES
(1, 'admin', '$2y$10$M/BYVLi/qIFRnDxawWFkyeDTO4g.GDr9kFSlyjDumrHaBp0xzYcOi', '게시판이 최적화되었습니다.', '게시판 디자인이 최적화되었습니다. Write(글 쓰기)페이지 및 modify(글 수정), read(글 읽기)페이지가 깔끔하게 정리하였습니다. \r\n참고바랍니다.', '2018-03-29', 238, 0, ''),
(2, 'admin', '$2y$10$uuac3Ri9oJDoLSM2Sd2qnujTJbhLsy/a5pzf1Ong04g/3xTDKHD/6', 'DB이름 변경안내', '혼란을 방지하기 위해 DB이름을 이제부터 post_board로 통일하겠습니다.', '2018-03-29', 62, 0, ''),
(3, 'admin', '$2y$10$R/BA/R/6hgMLyB8.vUIK8u6LappBCwqqXJd.ELX1m2I71ukLBtJOS', '게시판 댓글달기', '게시판 글에 댓글을 달 수 있습니다.', '2018-03-29', 53, 0, ''),
(4, 'admin', '$2y$10$82fYMBPnl20iP0sU9PyCwu4sd018ITh34Vex0Mkj7n.S3bNZdufIq', '포스팅 준비중', '마지막 버그 및 오류를 확인 후 포스팅 준비하고 있습니다.', '2018-03-30', 18, 1, ''),
(5, 'admin', '$2y$10$fn1bvh39a69.A0Rya5vjxuCKDXDNnEvsUAPqdlQ0KoiiqP4SFM2r.', '댓글 테스트를 위한 글!', '댓글 테스트를 위한 글입니다!', '2018-04-02', 16, 0, ''),
(6, '관리자', '$2y$10$DToCDjmmM9NP81Qkq7XvoOWzcnRE.j97/tFZ1Mt5T/tPzS7IKCtUe', 'ajax테스트!', 'ajax테스트!', '2018-04-08', 3, 0, ''),
(7, '관리자', '$2y$10$C8FJ2VNT9rnaZd5NGBYet.I6hdQv38FsLA9AY2qNG.wtW6XeO33w2', 'Now페이지 완료', 'Now페이지 완료', '2018-04-08', 15, 0, ''),
(8, '관리자', '$2y$10$op.6lKkv9beMiaykBSOM0u5UXv321j98/zKu24yhdYkOe1Y6mnvze', 'Now페이지 테스트완료', 'Now페이지 테스트완료', '2018-04-08', 38, 0, ''),
(9, 'admin', '$2y$10$KSxT8K1hfFp2N3AAGJV4w.E87wqE6vlywPYMvn9HYctSmvkjoy6qS', '4월 23일', '4월 23일', '2018-04-23', 70, 0, ''),
(10, 'member2', '$2y$10$2UDn6.z/jDKtSa9OLsx97uYr2sDzavHs6oTVy8piQF.nZipY7R10e', 'member2', 'dfasdf', '2018-04-23', 17, 0, ''),
(11, 'admin', '$2y$10$3JCBZZYh9dmR/l4OXI8SM.DU/VQz.aXJBeC1kguCLhLsSVk6NXItu', '게시판 댓글 카운트', '게시판 댓글 카운트', '2018-04-23', 20, 0, 'test_php.bat'),
(12, 'admin', '$2y$10$HkA5mPAbG65Y.bTi5isWTes5R.q35bOE8sQadEHqJLO00hnYlt0wS', '간단한 파일 업로드', '파일 업로드 테스트', '2018-05-12', 3, 0, 'rt.txt'),
(13, 'admin', '$2y$10$4EGQ7WMSD5Rd8t57Gt4TfeJKjgab6ItTYJl.MZ.Y4NwhS01miHld2', '1234', '1234', '2018-05-13', 1, 0, 'AA.txt'),
(14, 'admin', '$2y$10$2nrsp0kcoxg8rr1Dpjy9MePFDzoaXqznCgKzSQhe8PaKSbLrdqip2', '1234', '1234', '2018-05-13', 17, 0, 'AA.txt'),
(15, 'admin', '$2y$10$ghMJtjJ23XGj/k8OcmiBI.CbJHk0f8Cvz5nV5ux.Tyl.12ptAdVQ2', '4', '4', '2018-05-13', 2, 0, 'AA.txt'),
(16, 'admin', '$2y$10$oxl7S1UQh4yi98a/ERe9Z.PjaC1mTFZADLfWu94f6qNWPUkGYD5GG', '마지막 테스트', '마지막 테스트', '2018-05-15', 1, 0, 'AA.txt'),
(17, 'admin', '$2y$10$JuR6Q2/4ZAaxc1xmetRtMOAIMljsi8aa4ulDcOJ/lD1vpTMgJe22a', '한글 파일 업로드 테스트', '한글 파일 업로드 테스트', '2018-05-16', 32, 0, '34ㅇㅇㄹㅇㄹ.txt'),
(18, 'S Writer', '$2y$10$XKH.xfTeRS2uVaVMXSObJeNU2weSTX6Unc1K3/iSC/846afXfIHTu', '새 글 표시 테스트', '새 글 표시 테스트', '2018-07-25', 286, 0, ''),
(19, '234', '$2y$10$1zs3WJULDcJ9Om5pyF1qjOhbwI5tZvZ/5kMPV7WUexvg0kBWWn/eq', '324', '234234', '2018-07-31', 17, 0, ''),
(20, '423423', '$2y$10$OGg0NRk34kFywvKFRSImuuyuiEPeDqgEhug1yyFbEQ8nAEHSjIm3y', '242', '4234234234', '2018-07-31', 2, 0, 'readme_de.txt'),
(21, 'ㅁㄴㅇㄻㄴㅇㄹ', '$2y$10$9QIL1zhUYDU.tog33lwhVueeHOzH/yQlNeaRRaz7F.NkiDLha68D2', 'N표시 테스트', 'N표시 테스트', '2018-08-01', 0, 0, ''),
(22, '나', '$2y$10$nHfLwdaiIqMjALFlHhkpqeehTOBkcbAi9KJ8t9JwPj1YnTEH6/YXi', 'N표시 테스트2', 'N표시 테스트2', '2018-08-01', 0, 0, '');

-- --------------------------------------------------------

--
-- 테이블 구조 `reply`
--

CREATE TABLE `reply` (
  `idx` int(11) NOT NULL,
  `con_num` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 테이블의 AUTO_INCREMENT `reply`
--
ALTER TABLE `reply`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- 데이터베이스: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
