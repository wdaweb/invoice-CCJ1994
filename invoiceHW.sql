-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 11 月 30 日 16:51
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoiceHW`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award_numbers`
--

CREATE TABLE `award_numbers` (
  `id` int(11) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `period` tinyint(1) NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award_numbers`
--

INSERT INTO `award_numbers` (`id`, `year`, `period`, `number`, `type`) VALUES
(1, 2020, 6, '13362795', 1),
(2, 2020, 6, '27580166', 2),
(3, 2020, 6, '53227282', 3),
(4, 2020, 6, '35082085', 3),
(5, 2020, 6, '37175928', 3),
(6, 2020, 6, '987', 4),
(7, 2020, 6, '614', 4),
(8, 2020, 1, '03016191', 1),
(9, 2020, 1, '62474899', 2),
(10, 2020, 1, '33657726', 3),
(11, 2020, 1, '06142620', 3),
(12, 2020, 1, '66429962', 3),
(13, 2020, 1, '790', 4),
(14, 2020, 1, '', 1),
(15, 2020, 1, '', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` tinyint(1) UNSIGNED NOT NULL,
  `payment` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `item` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invoices`
--

INSERT INTO `invoices` (`id`, `code`, `number`, `period`, `payment`, `date`, `create_time`, `item`, `note`) VALUES
(2, 'CC', '44534674', 6, 2, '2020-11-05', '2020-11-29 10:07:16', NULL, '水'),
(3, 'DD', '43245432', 6, 10000, '2020-12-03', '2020-11-29 10:10:18', '', 'deithrt'),
(4, 'BB', '23222222', 6, 43, '2020-11-06', '2020-11-29 10:12:12', '4432', '32423'),
(5, '', '', 6, 10000, '2020-11-07', '2020-11-29 10:24:12', '', ''),
(6, 'JJ', '77777777', 6, 100006, '2020-11-01', '2020-11-29 11:20:06', '6666666666', '55555555555555555'),
(8, 'DD', '44444444', 6, 4, '2020-11-02', '2020-11-29 15:00:25', '445346jtdyrj', 'tshrstjyrdjytjutkuk');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award_numbers`
--
ALTER TABLE `award_numbers`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award_numbers`
--
ALTER TABLE `award_numbers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
