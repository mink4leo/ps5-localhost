-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2024 at 10:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thannam`
--

-- --------------------------------------------------------

--
-- Table structure for table `thannam_champion_groupteam`
--

CREATE TABLE `thannam_champion_groupteam` (
  `id` int(11) NOT NULL,
  `namegroup` text NOT NULL,
  `weightB` varchar(255) DEFAULT NULL,
  `idgroup` int(11) NOT NULL,
  `match1` int(11) NOT NULL,
  `catNum` int(11) DEFAULT 1,
  `colorA` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `thannam_champion_groupteam`
--

INSERT INTO `thannam_champion_groupteam` (`id`, `namegroup`, `weightB`, `idgroup`, `match1`, `catNum`, `colorA`) VALUES
(40896, 'WHITE BELT BELOW 6 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40897, 'WHITE BELT 7 - 8 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40898, 'WHITE BELT 9 - 10 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40899, 'WHITE BELT 11 - 12 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40900, 'WHITE BELT 13 - 14 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40901, 'WHITE BELT15 - 17 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40902, 'WHITE BELT 18 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40903, 'YELLOW BELT BELOW 6 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40904, 'YELLOW BELT 7 - 8 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40905, 'YELLOW BELT 9 - 10 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40906, 'YELLOW BELT 11 - 12 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40907, 'YELLOW BELT 13 - 14 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40908, 'YELLOW BELT15 - 17 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40909, 'YELLOW BELT 18 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40910, 'GREEN BELT BELOW 6 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40911, 'GREEN BELT 7 â€“ 8 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40912, 'GREEN BELT 9 â€“ 10 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40913, 'GREEN BELT 11 â€“ 12 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40914, 'GREEN BELT 13 â€“ 14 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40915, 'GREEN BELT 15 â€“ 17 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40916, 'GREEN BELT 18 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40917, 'BLUE BELT BELOW 6 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40918, 'BLUE BELT 7 â€“ 8 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40919, 'BLUE BELT 9 â€“ 10 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40920, 'BLUE BELT 11 â€“ 12 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40921, 'BLUE BELT 13 â€“ 14 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40922, 'BLUE BELT 15 â€“ 17 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40923, 'BLUE BELT 18 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40924, 'BROWN BELT BELOW 6 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40925, 'BROWN BELT 7 â€“ 8 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40926, 'BROWN BELT 9 â€“ 10 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40927, 'BROWN BELT 11 â€“ 12 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40928, 'BROWN BELT 13 â€“ 14 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40929, 'BROWN BELT 15 â€“ 17 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40930, 'BROWN BELT 18 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40931, 'RED BELT BELOW 6 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40932, 'RED BELT 7 â€“ 8 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40933, 'RED BELT 9 â€“ 10 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40934, 'RED BELT 11 â€“ 12 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40935, 'RED BELT 13 â€“ 14 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40936, 'RED BELT 15 â€“ 17 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40937, 'RED BELT 18 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40938, 'BLACK BELT BELOW 6 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40939, 'BLACK BELT 7 â€“ 8 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40940, 'BLACK BELT 9 â€“ 10 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40941, 'BLACK BELT 11 â€“ 12 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40942, 'BLACK BELT 13 â€“ 14 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40943, 'BLACK BELT 15 â€“ 17 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40944, 'BLACK BELT 18 YEARS OLD', NULL, 2, 2048, 1, NULL),
(40945, 'WHITE BELT BELOW 6 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40946, 'WHITE BELT 7 - 8 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40947, 'WHITE BELT 9 - 10 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40948, 'WHITE BELT 11 - 12 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40949, 'WHITE BELT 13 - 14 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40950, 'WHITE BELT15 - 17 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40951, 'WHITE BELT 18 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40952, 'YELLOW BELT BELOW 6 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40953, 'YELLOW BELT 7 - 8 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40954, 'YELLOW BELT 9 - 10 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40955, 'YELLOW BELT 11 - 12 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40956, 'YELLOW BELT 13 - 14 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40957, 'YELLOW BELT15 - 17 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40958, 'YELLOW BELT 18 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40959, 'GREEN BELT BELOW 6 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40960, 'GREEN BELT 7 â€“ 8 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40961, 'GREEN BELT 9 â€“ 10 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40962, 'GREEN BELT 11 â€“ 12 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40963, 'GREEN BELT 13 â€“ 14 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40964, 'GREEN BELT 15 â€“ 17 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40965, 'GREEN BELT 18 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40966, 'BLUE BELT BELOW 6 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40967, 'BLUE BELT 7 â€“ 8 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40968, 'BLUE BELT 9 â€“ 10 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40969, 'BLUE BELT 11 â€“ 12 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40970, 'BLUE BELT 13 â€“ 14 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40971, 'BLUE BELT 15 â€“ 17 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40972, 'BLUE BELT 18 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40973, 'BROWN BELT BELOW 6 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40974, 'BROWN BELT 7 â€“ 8 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40975, 'BROWN BELT 9 â€“ 10 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40976, 'BROWN BELT 11 â€“ 12 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40977, 'BROWN BELT 13 â€“ 14 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40978, 'BROWN BELT 15 â€“ 17 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40979, 'BROWN BELT 18 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40980, 'RED BELT BELOW 6 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40981, 'RED BELT 7 â€“ 8 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40982, 'RED BELT 9 â€“ 10 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40983, 'RED BELT 11 â€“ 12 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40984, 'RED BELT 13 â€“ 14 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40985, 'RED BELT 15 â€“ 17 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40986, 'RED BELT 18 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40987, 'BLACK BELT BELOW 6 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40988, 'BLACK BELT 7 â€“ 8 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40989, 'BLACK BELT 9 â€“ 10 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40990, 'BLACK BELT 11 â€“ 12 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40991, 'BLACK BELT 13 â€“ 14 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40992, 'BLACK BELT 15 â€“ 17 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40993, 'BLACK BELT 18 YEARS OLD', NULL, 3, 2048, 1, NULL),
(40994, 'WHITE BELT BELOW 6 YEARS OLD', NULL, 4, 2048, 1, NULL),
(40995, 'WHITE BELT 7 - 8 YEARS OLD', NULL, 4, 2048, 1, NULL),
(40996, 'WHITE BELT 9 - 10 YEARS OLD', NULL, 4, 2048, 1, NULL),
(40997, 'WHITE BELT 11 - 12 YEARS OLD', NULL, 4, 2048, 1, NULL),
(40998, 'WHITE BELT 13 - 14 YEARS OLD', NULL, 4, 2048, 1, NULL),
(40999, 'WHITE BELT15 - 17 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41000, 'WHITE BELT 18 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41001, 'YELLOW BELT BELOW 6 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41002, 'YELLOW BELT 7 - 8 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41003, 'YELLOW BELT 9 - 10 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41004, 'YELLOW BELT 11 - 12 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41005, 'YELLOW BELT 13 - 14 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41006, 'YELLOW BELT15 - 17 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41007, 'YELLOW BELT 18 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41008, 'GREEN BELT BELOW 6 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41009, 'GREEN BELT 7 â€“ 8 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41010, 'GREEN BELT 9 â€“ 10 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41011, 'GREEN BELT 11 â€“ 12 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41012, 'GREEN BELT 13 â€“ 14 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41013, 'GREEN BELT 15 â€“ 17 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41014, 'GREEN BELT 18 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41015, 'BLUE BELT BELOW 6 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41016, 'BLUE BELT 7 â€“ 8 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41017, 'BLUE BELT 9 â€“ 10 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41018, 'BLUE BELT 11 â€“ 12 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41019, 'BLUE BELT 13 â€“ 14 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41020, 'BLUE BELT 15 â€“ 17 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41021, 'BLUE BELT 18 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41022, 'BROWN BELT BELOW 6 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41023, 'BROWN BELT 7 â€“ 8 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41024, 'BROWN BELT 9 â€“ 10 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41025, 'BROWN BELT 11 â€“ 12 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41026, 'BROWN BELT 13 â€“ 14 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41027, 'BROWN BELT 15 â€“ 17 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41028, 'BROWN BELT 18 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41029, 'RED BELT BELOW 6 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41030, 'RED BELT 7 â€“ 8 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41031, 'RED BELT 9 â€“ 10 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41032, 'RED BELT 11 â€“ 12 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41033, 'RED BELT 13 â€“ 14 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41034, 'RED BELT 15 â€“ 17 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41035, 'RED BELT 18 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41036, 'BLACK BELT BELOW 6 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41037, 'BLACK BELT 7 â€“ 8 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41038, 'BLACK BELT 9 â€“ 10 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41039, 'BLACK BELT 11 â€“ 12 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41040, 'BLACK BELT 13 â€“ 14 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41041, 'BLACK BELT 15 â€“ 17 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41042, 'BLACK BELT 18 YEARS OLD', NULL, 4, 2048, 1, NULL),
(41043, 'BELOW 4 YEARS OLD', NULL, 7, 2048, 1, NULL),
(41044, 'BELOW 6 YEARS OLD', NULL, 7, 2048, 1, NULL),
(41045, '7 - 8 YEARS OLD', NULL, 7, 2048, 1, NULL),
(41046, '9 - 10 YEARS OLD', NULL, 7, 2048, 1, NULL),
(41047, '11 - 12 YEARS OLD', NULL, 7, 2048, 1, NULL),
(41048, '13 - 14 YEARS OLD', NULL, 7, 2048, 1, NULL),
(41049, '15 - 17 YEARS OLD', NULL, 7, 2048, 1, NULL),
(41050, '18 YEARS OLD', NULL, 7, 2048, 1, NULL),
(41051, 'BELOW 4 YEARS OLD', NULL, 8, 2048, 1, NULL),
(41052, 'BELOW 6 YEARS OLD', NULL, 8, 2048, 1, NULL),
(41053, '7 - 8 YEARS OLD', NULL, 8, 2048, 1, NULL),
(41054, '9 - 10 YEARS OLD', NULL, 8, 2048, 1, NULL),
(41055, '11 - 12 YEARS OLD', NULL, 8, 2048, 1, NULL),
(41056, '13 - 14 YEARS OLD', NULL, 8, 2048, 1, NULL),
(41057, '15 - 17 YEARS OLD', NULL, 8, 2048, 1, NULL),
(41058, '18 YEARS OLD', NULL, 8, 2048, 1, NULL),
(44045, 'BELOW 6 YEARS OLD', NULL, 6, 2048, 1, NULL),
(44046, '7 - 8 YEARS OLD', NULL, 6, 2048, 1, NULL),
(44047, '9 - 10 YEARS OLD', NULL, 6, 2048, 1, NULL),
(44048, '11 - 12 YEARS OLD', NULL, 6, 2048, 1, NULL),
(44049, '13 - 14 YEARS OLD', NULL, 6, 2048, 1, NULL),
(44050, '15 - 17 YEARS OLD', NULL, 6, 2048, 1, NULL),
(44051, 'OVER 18 YEARS OLD', NULL, 6, 2048, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thannam_champion_poomsae`
--

CREATE TABLE `thannam_champion_poomsae` (
  `id` int(11) NOT NULL,
  `idteam` int(11) DEFAULT 0,
  `nameA` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameB` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `nameC` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `nameD` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `nameE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `catA` int(11) DEFAULT 0,
  `cat1` int(11) DEFAULT 0,
  `match1` int(11) DEFAULT 0,
  `sex` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `finalA` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printA` int(11) DEFAULT NULL,
  `acc` decimal(5,2) DEFAULT NULL,
  `pre` decimal(5,2) DEFAULT NULL,
  `totalA` decimal(5,2) DEFAULT NULL,
  `clip` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_num` int(11) DEFAULT 0,
  `clipLoad` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ps_cat` int(11) DEFAULT 1,
  `acc2` decimal(5,2) DEFAULT 0.00,
  `pre2` decimal(5,2) DEFAULT 0.00,
  `totalA2` decimal(5,2) DEFAULT 0.00,
  `clipLoad2` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finalA2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groupA` int(11) DEFAULT 1,
  `acc3` decimal(5,3) DEFAULT 0.000,
  `pre3` decimal(5,3) DEFAULT 0.000,
  `totalA3` decimal(5,3) DEFAULT 0.000,
  `idcard` int(11) DEFAULT 0,
  `team2` text DEFAULT NULL,
  `idmem` int(11) DEFAULT NULL,
  `id1` int(11) DEFAULT NULL,
  `id2` int(11) DEFAULT NULL,
  `id3` int(11) DEFAULT NULL,
  `classA` varchar(10) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `bday` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `thannam_champion_poomsae`
--

INSERT INTO `thannam_champion_poomsae` (`id`, `idteam`, `nameA`, `nameB`, `nameC`, `nameD`, `nameE`, `catA`, `cat1`, `match1`, `sex`, `finalA`, `printA`, `acc`, `pre`, `totalA`, `clip`, `cat_num`, `clipLoad`, `ps_cat`, `acc2`, `pre2`, `totalA2`, `clipLoad2`, `finalA2`, `groupA`, `acc3`, `pre3`, `totalA3`, `idcard`, `team2`, `idmem`, `id1`, `id2`, `id3`, `classA`, `pic`, `bday`) VALUES
(5757, 9126, 'à¸žà¸µà¸£à¸žà¸¥  à¸ªà¸¸à¸‚à¸”à¸µ', '', '', '', '', 40905, 0, 2048, 'M', NULL, NULL, 3.47, 5.00, 8.47, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 3.467, 5.000, 8.470, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5758, 9137, 'Hongsuda  jomhong', '', '', '', '', 40920, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5759, 9137, 'à¸ªà¸´à¸£à¸´à¸™à¸—à¸£à¸² à¸„à¸³à¸™à¸´à¸¡à¸´à¸•à¸£', '', '', '', '', 40913, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5764, 8885, 'à¸“à¸±à¸à¸à¸Šà¸²  à¸šà¸¸à¸—à¸­à¸‡', '', '', '', '', 40926, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5765, 8885, 'à¸“à¸±à¸à¸à¸Šà¸² à¸šà¸¸à¸—à¸­à¸‡', '', '', '', '', 40933, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5766, 8885, 'à¸›à¸±à¸à¸à¸²  à¸«à¸­à¹€à¸¥à¸´à¸¨à¸ªà¸à¸¸à¸¥', '', '', '', '', 40904, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5767, 8885, 'à¸¥à¸´à¸¥à¸¥à¸”à¸²  à¸žà¸´à¸—à¸±à¸à¸©à¹Œà¸žà¸±à¸’à¸™à¸ªà¸à¸¸à¸¥', '', '', '', '', 40904, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5768, 8885, 'à¸¥à¸´à¸¥à¸¥à¸”à¸² à¸žà¸´à¸—à¸±à¸à¸©à¹Œà¸žà¸±à¸’à¸™à¸ªà¸à¸¸à¸¥', '', '', '', '', 40911, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5769, 8885, 'à¸¡à¸´à¸™à¸™à¸£à¸²  à¸žà¸´à¸—à¸±à¸à¸©à¹Œà¸žà¸±à¸’à¸™à¸ªà¸à¸¸à¸¥', '', '', '', '', 40903, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5770, 8885, 'à¸­à¸±à¸“à¸“à¹Œà¸“à¸²à¸£à¸²  à¹€à¸ªà¸£à¸µà¸¨à¸´à¸£à¸´à¸‚à¸ˆà¸£', '', '', '', '', 40911, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5772, 9103, 'à¸”.à¸.à¸£à¸§à¸´à¸ªà¸£à¸² à¸­à¸¸à¹ˆà¸™à¸¤à¸—à¸±à¸¢à¸¡à¸™à¸±à¸ª', '', '', '', '', 40904, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5773, 9103, 'à¸”.à¸.à¸­à¸´à¸ªà¸£à¸´à¸™à¸—à¸£à¹Œâ€‹ à¹€à¸ˆà¸·à¸­à¸—à¸­à¸‡', '', '', '', '', 40904, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5774, 9103, 'à¸”.à¸.à¸ˆà¸±à¸™à¸—à¸£à¸±à¸¨à¸¡à¹Œ à¸˜à¸™à¸à¸£à¸“à¹Œà¹„à¸žà¸¨à¸²à¸¥', '', '', '', '', 40897, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5775, 9103, 'à¸”.à¸. à¸£à¸±à¸•à¸™à¸£à¸±à¸•à¸™à¹Œ à¸šà¸¸à¸™à¸™à¸²à¸„', '', '', '', '', 40898, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5776, 9103, 'à¸”.à¸.à¸˜à¸±à¸à¸Šà¸™à¸ à¸­à¸±à¸‡à¸¨à¸¸à¸ªà¸²à¸™à¸™à¸—à¹Œ', '', '', '', '', 40906, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5777, 9103, 'à¸”.à¸.à¸ˆà¸¹à¹„à¸¡à¸™à¹ˆà¸² à¸šà¸¸à¸à¸¡à¸µ', '', '', '', '', 40911, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5778, 9103, 'à¸”.à¸.à¸“à¹‚à¸¡  à¹„à¸•à¸£à¸§à¸¸à¸’à¸´ ', '', '', '', '', 40911, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5779, 9103, 'à¸”.à¸.à¸§à¸£à¸´à¸¨à¸£à¸²  à¸§à¸±à¸™à¸Šà¸±à¸¢ ', '', '', '', '', 40912, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5780, 9103, 'à¸”.à¸Š.à¸“à¸´à¸Šà¸à¸¸à¸¥ à¸à¸³à¸¡à¸°à¸«à¸¢à¸µà¹ˆ ', '', '', '', '', 40919, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5789, 9167, 'à¸‚à¸§à¸±à¸à¸‚à¹‰à¸²à¸§ à¸ˆà¸±à¸™à¸—à¸£à¹Œà¸—à¸§à¸µ', '', '', '', '', 40899, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5798, 9141, 'à¸“à¸±à¸à¸ à¸±à¸—à¸£ à¹‚à¸¥à¸£à¸²à¸Š', '', '', '', '', 40944, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5805, 9137, 'à¸“à¸±à¸à¸“à¸´à¸Šà¸² à¸ªà¸´à¸£à¸´à¸˜à¸£à¸£à¸¡à¸²à¸ªà¸²à¸£', '', '', '', '', 40912, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5806, 9137, 'à¸™à¸à¸à¸£ à¹‚à¸žà¸˜à¸´à¸šà¸±à¸•à¸´', '', '', '', '', 40912, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5836, 9170, 'à¹€à¸‹à¸™ à¸ªà¸¸à¸£à¸´à¸¢à¸°', '', '', '', '', 40911, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5837, 9169, 'à¸“à¸à¸­à¸£  à¸„à¸‡à¸ªà¸‡', '', '', '', '', 40907, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5859, 9180, 'Nuttanicha Toopkum', '', '', '', '', 40919, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5860, 9180, 'Vimuttiya Luang-A-Ram', '', '', '', '', 40933, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5861, 9176, 'à¹€à¸žà¸Šà¸£à¸žà¸£à¸²à¸§ à¹€à¸žà¸Šà¸£à¸ à¸¹à¹ˆ', '', '', '', '', 40943, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5863, 9176, 'à¸žà¸´à¸¡à¸žà¹Œà¸™à¸²à¸£à¸² à¸–à¸´à¸£à¸ à¸±à¸—à¸£à¸§à¸£à¸±à¸à¸˜à¸£', '', '', '', '', 40940, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5864, 9176, 'à¸™à¸²à¸™à¸² à¹à¸™à¹ˆà¸™à¸«à¸™à¸²', '', '', '', '', 40941, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5865, 9176, 'à¸Šà¸¸à¸•à¸´à¸žà¸™à¸˜à¹Œ à¸¥à¸²à¸ à¸™à¸´à¸•à¸¢à¸žà¸±à¸™à¸˜à¹Œ', '', '', '', '', 40942, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5867, 9176, 'à¸ à¸±à¸—à¸£à¸²  à¸˜à¸²à¸£à¸µà¸ˆà¸´à¸•à¸£', '', '', '', '', 40936, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5868, 9176, 'à¸›à¸£à¸°à¸§à¸±à¸•à¸´ à¸ à¸¹à¹ˆà¸¤à¸—à¸˜à¸´à¹Œ', '', '', '', '', 40941, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5869, 9176, 'à¸à¸£à¸§à¸´à¸Šà¸Šà¹Œ à¹€à¸ˆà¸™à¸—à¸£à¸—à¸´à¸™', '', '', '', '', 40920, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5871, 9176, 'à¸Šà¸™à¸±à¸à¸Šà¸´à¸”à¸² à¸›à¸¸à¸¢à¸ªà¸¸à¸§à¸£à¸£à¸“', '', '', '', '', 40933, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5872, 9176, 'à¸ à¸¹à¸§à¸±à¸¥à¸¢à¹Œ à¸£à¸±à¸à¹‚à¸£à¸ˆà¸™à¹Œà¹‚à¸ à¸„à¸´à¸™', '', '', '', '', 40913, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5873, 9176, 'à¸ªà¸²à¸£à¸´à¸¨à¸²  à¹€à¸¥à¸´à¸¨à¸à¸¸à¸¥', '', '', '', '', 40913, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5874, 9176, 'à¸¨à¸¸à¸ à¸žà¸´à¸Šà¸à¹Œ à¸ à¸¹à¸§à¸´à¸—à¸¹à¸£à¸§à¸±à¸’à¸™à¹€à¸¡à¸˜à¸µ', '', '', '', '', 40943, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5875, 9176, 'à¸à¸±à¸à¸à¸²à¸žà¸±à¸Šà¸£à¸“à¹Œ à¹€à¸ˆà¸™à¸—à¸£à¸—à¸´à¸™', '', '', '', '', 40943, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5876, 9176, 'à¸“à¸±à¸—à¸˜à¸´à¸à¸²  à¸¨à¸´à¸£à¸´à¹„à¸žà¸¨à¸²à¸¥à¸žà¸´à¸žà¸±à¸’à¸™à¹Œ', '', '', '', '', 40912, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5877, 9176, 'à¸¥à¸±à¸¥à¸“à¹Œà¸™à¸¤à¸™  à¸¨à¸£à¸µà¸™à¸§à¸¥à¸§à¸‡à¸¨à¹Œ', '', '', '', '', 40912, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5878, 9176, 'à¸‚à¸­à¸‡à¸‚à¸§à¸±à¸  à¸„à¸­à¸§à¸™à¸´à¸Š', '', '', '', '', 40914, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5880, 9176, 'à¸¥à¸±à¸¥à¸¥à¸²  à¸„à¸­à¸§à¸™à¸´à¸Š', '', '', '', '', 40906, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5881, 9176, 'à¸­à¸´à¸ªà¸£à¸´à¸¢à¸²à¸ à¸£à¸“à¹Œ  à¸¡à¸“à¸µà¸£à¸±à¸•à¸™à¹Œ', '', '', '', '', 40906, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5882, 9176, 'à¸¥à¸´à¸™à¸„à¸­à¸¥à¹Œà¸™  à¹‚à¸­à¹€à¸™à¸”à¸´à¸à¸²à¸Šà¸µà¹ˆ à¹‚à¸­à¸„à¸­à¸‡à¹‚à¸„à¸§à¹ˆ', '', '', '', '', 40906, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5883, 9176, 'à¸§à¸£à¸´à¸™à¸“à¹Œà¸—à¸´à¸¡à¸²  à¸­à¸ à¸´à¸à¸²à¸£à¸ªà¸à¸¸à¸¥à¸Šà¸±à¸¢', '', '', '', '', 40905, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5884, 9176, 'à¸“à¸ à¸±à¸—à¸£  à¸ªà¸´à¸‡à¸„à¸°à¹€à¸“à¸¢à¹Œ', '', '', '', '', 40905, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5885, 9176, 'à¸žà¸±à¸—à¸˜à¸§à¸£à¸£à¸“  à¸—à¸­à¸‡à¸ªà¸™à¸˜à¸´', '', '', '', '', 40905, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5887, 9176, 'à¸žà¸¸à¸’à¸´à¹€à¸¡à¸˜  à¸”à¸²à¸£à¸²à¸§à¸‡à¸„à¹Œ', '', '', '', '', 40905, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5890, 9176, 'à¸ à¸¹à¸§à¸±à¸¥à¸¢à¹Œ  à¸£à¸±à¸à¹‚à¸£à¸ˆà¸™à¹Œà¹‚à¸ à¸„à¸´à¸™', 'à¸¥à¸±à¸¥à¸“à¹Œà¸™à¸¤à¸™ à¸¨à¸£à¸µà¸™à¸§à¸¥à¸§à¸‡à¸¨à¹Œ', '', '', '', 40955, 0, 2048, 'MF', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 3, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5891, 9176, 'à¸à¸£à¸§à¸´à¸Šà¸Šà¹Œ à¹€à¸ˆà¸™à¸—à¸£à¸—à¸´à¸™', 'à¸ªà¸²à¸£à¸´à¸¨à¸²  à¹€à¸¥à¸´à¸¨à¸à¸¸à¸¥', '', '', '', 40962, 0, 2048, 'MF', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 3, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5892, 9176, 'à¸žà¸´à¸¡à¸žà¹Œà¸™à¸²à¸£à¸²  à¸–à¸´à¸£à¸ à¸±à¸—à¸£à¸§à¸£à¸±à¸à¸˜à¸£', 'à¸“à¸±à¸—à¸˜à¸´à¸à¸²  à¸¨à¸´à¸£à¸´à¹„à¸žà¸¨à¸²à¸¥à¸žà¸´à¸žà¸±à¸’à¸™à¹Œ', 'à¸£à¸¸à¹ˆà¸‡à¸£à¸§à¸´à¸™  à¸¨à¸´à¸£à¸´à¹‚à¸ªà¸¡', '', '', 41024, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5893, 9176, 'à¸‚à¸­à¸‡à¸‚à¸§à¸±à¸  à¸„à¸­à¸§à¸™à¸´à¸Š', 'à¸­à¸´à¸ªà¸£à¸´à¸¢à¸²à¸ à¸£à¸“à¹Œ  à¸¡à¸“à¸µà¸£à¸±à¸•à¸™à¹Œ', 'à¸¥à¸±à¸¥à¸¥à¸²  à¸„à¸­à¸§à¸™à¸´à¸Š', '', '', 41004, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5894, 9176, 'à¸Šà¸™à¸±à¸à¸Šà¸´à¸”à¸² à¸›à¸¸à¸¢à¸ªà¸¸à¸§à¸£à¸£à¸“', 'à¸™à¸²à¸™à¸²  à¹à¸™à¹ˆà¸™à¸«à¸™à¸²', 'à¸Šà¸à¸²à¸™à¸±à¸™à¸—à¹Œ à¸ªà¸­à¸‡à¹€à¸¡à¸·à¸­à¸‡', '', '', 41032, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5896, 9176, 'à¸à¸±à¸à¸à¸²à¸žà¸±à¸Šà¸£à¸“à¹Œ à¹€à¸ˆà¸™à¸—à¸£à¸—à¸´à¸™', 'à¸ à¸±à¸—à¸£à¸²  à¸˜à¸²à¸£à¸µà¸ˆà¸´à¸•à¸£', 'à¸¨à¸¸à¸ à¸žà¸´à¸Šà¸à¹Œ  à¸ à¸¹à¸§à¸´à¸—à¸¹à¸£à¸§à¸±à¸’à¸™à¹€à¸¡à¸˜à¸µ', '', '', 41041, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5898, 9176, 'à¸à¸±à¸à¸à¸²à¸žà¸±à¸Šà¸£ à¹„à¸«à¸¡à¹€à¸ˆà¸£à¸´à¸', 'à¸“à¸›à¸ à¸±à¸Š  à¹„à¸Šà¸¢à¸¢à¸²', 'à¹€à¸šà¸à¸à¸²à¸ à¸²  à¸šà¸¸à¸à¸ªà¸´à¸—à¸˜à¸´à¹Œ', '', '', 41040, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5899, 9176, 'à¹€à¸žà¸Šà¸£à¸žà¸£à¸²à¸§ à¹€à¸žà¸Šà¸£à¸ à¸¹à¹ˆ', '', '', '', '', 44049, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5900, 9176, 'à¸ à¸£à¸´à¸—à¸ à¸£ à¸“ à¸šà¸²à¸‡à¸Šà¹‰à¸²à¸‡', '', '', '', '', 44049, 0, 2048, 'F', NULL, NULL, 5.70, 3.83, 9.53, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 5.700, 3.833, 9.530, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5901, 9176, 'à¸à¸±à¸à¸à¸²à¸žà¸±à¸Šà¸£ à¹„à¸«à¸¡à¹€à¸ˆà¸£à¸´à¸', '', '', '', '', 44049, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5902, 9176, 'à¹€à¸šà¸à¸à¸²à¸ à¸²  à¸šà¸¸à¸à¸ªà¸´à¸—à¸˜à¸´à¹Œ', '', '', '', '', 44049, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5903, 9176, 'à¸“à¸›à¸ à¸±à¸Š  à¹„à¸Šà¸¢à¸¢à¸²', '', '', '', '', 44049, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5904, 9176, 'à¸Šà¸¸à¸•à¸´à¸žà¸™à¸˜à¹Œ à¸¥à¸²à¸ à¸™à¸´à¸•à¸¢à¸žà¸±à¸™à¸˜à¹Œ', '', '', '', '', 44049, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5905, 9176, 'à¸›à¸£à¸°à¸§à¸±à¸•à¸´ à¸ à¸¹à¹ˆà¸¤à¸—à¸˜à¸´à¹Œ', '', '', '', '', 44049, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5906, 9176, 'à¸“à¸à¸à¸¤à¸•  à¸­à¸¹à¸›à¹à¸à¹‰à¸§', '', '', '', '', 44049, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5907, 9176, 'à¸à¸¤à¸©  à¹€à¸Šà¸²à¸§à¹Œà¹€à¸Ÿà¸·à¹ˆà¸­à¸‡à¸à¸´à¸ˆ', '', '', '', '', 44049, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5908, 9176, 'à¸Šà¸à¸²à¸™à¸±à¸™à¸—à¹Œ à¸ªà¸­à¸‡à¹€à¸¡à¸·à¸­à¸‡', '', '', '', '', 44048, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5910, 9176, 'à¸žà¸µà¸£à¸§à¸±à¸ª à¸ˆà¸³à¹€à¸™à¸µà¸¢à¸£à¸ªà¸´à¸£à¸´', '', '', '', '', 44050, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5911, 9176, 'à¸£à¸±à¸Šà¸žà¸¥ à¹ƒà¸¢à¸šà¸±à¸§', '', '', '', '', 44050, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5912, 9176, 'à¸žà¸Šà¸£à¸žà¸¥  à¸„à¸³à¸à¸£à¸¥à¸·à¸­à¸Šà¸²', '', '', '', '', 44051, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5913, 9176, 'à¸ˆà¸´à¸£à¸±à¸à¸à¸²  à¸˜à¸µà¸£à¸ˆà¸´à¸£à¸à¸²à¸à¸ˆà¸™à¹Œ', '', '', '', '', 44051, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5915, 9190, 'à¸§à¸£à¸±à¸—à¸¢à¸² à¸šà¸§à¸£à¸ªà¸·à¸šà¸šà¸¸à¸ ', '', '', '', '', 40898, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5917, 9192, 'THANAKRIT  TIYAPHORN', '', '', '', '', 40903, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5918, 9192, 'PAILINN  KATEPONG', '', '', '', '', 40904, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5919, 9192, 'JUNKEI JUTIPAT  KAMADA', '', '', '', '', 40904, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5921, 9192, 'TEETHANATE  SARUTIRATTANAWORAKUN', '', '', '', '', 40905, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5922, 9192, 'PINWAR  KATEPONG', '', '', '', '', 40903, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5923, 9190, 'à¸•à¸•à¸´à¸¢à¸² à¸ˆà¸±à¸™à¸—à¸°à¹‚à¸Šà¸•à¸´', '', '', '', '', 40900, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5924, 9190, 'à¸­à¸Šà¸´à¸£à¸° à¸­à¸²à¸¨à¸¸à¸¨à¸´à¸£à¸´', '', '', '', '', 40900, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5925, 9190, 'à¸ªà¸´à¸£à¸´à¸à¸±à¸à¸à¸² à¸ªà¸´à¸‡à¸™à¸§à¸™', '', '', '', '', 40922, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5926, 9190, 'à¸¡à¸¸à¸‚à¸§à¸”à¸µ à¹„à¸«à¸§à¸”à¸µ', '', '', '', '', 40923, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5927, 9190, 'à¸˜à¸µà¸£à¹€à¸”à¸Š  à¹€à¸–à¸²à¹à¸•à¸‡', '', '', '', '', 40943, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5928, 9190, 'à¸¡à¸‡à¸„à¸¥ à¹à¸‹à¹ˆà¸‹à¸¶à¸‡', '', '', '', '', 40944, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5930, 9192, 'THANA  PUMSIRI', '', '', '', '', 40934, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5931, 9187, 'à¹€à¸ªà¸à¸à¸“à¸±à¸  à¸—à¸²à¸‡à¸ˆà¸±à¸™à¸—à¸£à¹Œ', '', '', '', '', 40903, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5932, 9187, 'à¸¨à¸£à¸±à¸“à¸à¸²à¸“à¸µà¸¢à¹Œ à¸­à¸¡à¸£à¸Šà¸²à¸•à¸´', '', '', '', '', 40912, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5933, 9187, 'à¸“à¸±à¸à¸à¸™à¸±à¸™à¸—à¹Œ  à¸§à¸´à¹„à¸¥à¸§à¸£à¸£à¸“', '', '', '', '', 40903, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5934, 9187, 'à¸ˆà¸´à¸•à¸•à¸²à¸™à¸±à¸™à¸—à¹Œ  à¹ƒà¸ˆà¸”à¸µ', '', '', '', '', 40913, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5935, 9187, 'à¹„à¸­à¸§à¸²à¸£à¸´à¸™  à¸à¹‰à¸­à¸‡à¸à¸µà¸£à¸•à¸´', '', '', '', '', 40912, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5936, 9187, 'à¹„à¸­à¸£à¸´à¸™à¸”à¸²  à¸à¹‰à¸­à¸‡à¸à¸µà¸£à¸•à¸´', '', '', '', '', 40911, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5937, 9176, 'à¸£à¸¸à¹ˆà¸‡à¸£à¸§à¸´à¸™  à¸¨à¸´à¸£à¸´à¹‚à¸ªà¸¡', '', '', '', '', 44046, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5938, 9187, 'à¸¥à¸±à¸à¸‚à¸“à¸²  à¹ƒà¸ˆà¸”à¸µ', '', '', '', '', 40912, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5939, 9176, 'à¸™à¸´à¸˜à¸´à¸à¸£  à¸¢à¸´à¹‰à¸¡à¸›à¸£à¸°à¹€à¸ªà¸£à¸´à¸', '', '', '', '', 40943, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5940, 9176, 'à¸ªà¸¸à¸—à¸˜à¹Œà¸ªà¸´à¸£à¸´  à¸ªà¸§à¸°à¸§à¸´à¸šà¸¹à¸¥à¸¢à¹Œ', '', '', '', '', 40904, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5941, 9176, 'à¸›à¸±à¸“à¸“à¸˜à¸£  à¸¨à¸´à¸£à¸´à¹‚à¸ªà¸¡', '', '', '', '', 44049, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5942, 9192, 'TANONDHAMMA  MARNU', '', '', '', '', 40913, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5943, 9176, 'à¸­à¸”à¸´à¸¨à¸²  à¸Šà¸±à¸¢à¸Šà¸¡à¸§à¸‡à¸„à¹Œ', '', '', '', '', 40934, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5944, 9176, 'à¸­à¸”à¸´à¸¨à¸²  à¸Šà¸±à¸¢à¸Šà¸¡à¸§à¸‡à¸„à¹Œ', '', '', '', '', 40941, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5957, 9103, ' à¸”.à¸.à¸ˆà¸¹à¹„à¸¡à¸™à¹ˆà¸² à¸šà¸¸à¸à¸¡à¸µ', ' à¸”.à¸.à¸“à¹‚à¸¡ à¹„à¸•à¸£à¸§à¸¸à¸’à¸´', '', '', '', 40960, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 3, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5958, 9200, 'TANCHANOK SANUNVORAKIAT', '', '', '', '', 40912, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5959, 9200, 'Narubodin Thammarat', '', '', '', '', 40904, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5960, 9200, 'Chaiyapat Thammarat', '', '', '', '', 40903, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5961, 9200, 'THANCHANOK KAEWMANEE', '', '', '', '', 40903, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5962, 9200, 'Nawawan Dechanunt', '', '', '', '', 40924, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5963, 9200, 'PAPHITCHAYA SUTTI', '', '', '', '', 40896, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5964, 9200, 'NAKBPRAAT SUTTI', '', '', '', '', 40904, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5965, 9199, 'à¹€à¸¨à¸£à¸©à¸à¸Šà¸±à¸¢ à¸‰à¸±à¸•à¸£à¸ à¸¹à¸¡à¸´à¸ªà¸¸à¸§à¸£à¸£à¸“', '', '', '', '', 40944, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5966, 9187, 'à¸”.à¸Š.à¸à¸¡à¸¥ à¸à¸¹à¹‰à¸›à¸´à¹ˆà¸™à¹„à¸žà¸‘à¸¹à¸£à¸¢à¹Œ', '', '', '', '', 40911, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5968, 9192, 'PIYATHIDA  GARZON', '', '', '', '', 40910, 0, 2048, 'F', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5972, 9200, 'Bonchon Sinchermsiri', '', '', '', '', 40897, 0, 2048, 'M', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 2, 0.00, 0.00, 0.00, NULL, NULL, 1, 0.000, 0.000, 0.000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thannam_champion_teamm`
--

CREATE TABLE `thannam_champion_teamm` (
  `id` int(11) NOT NULL,
  `idgym` int(11) DEFAULT NULL,
  `nameA` varchar(255) NOT NULL,
  `teachA` varchar(255) DEFAULT NULL,
  `chochA` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `match1` int(11) NOT NULL,
  `allnum` int(11) NOT NULL DEFAULT 0,
  `email` varchar(100) NOT NULL,
  `datea` datetime NOT NULL,
  `ip` varchar(100) NOT NULL,
  `totalscore` int(11) DEFAULT NULL,
  `numrank` decimal(11,2) DEFAULT 0.00,
  `numAB` decimal(5,3) DEFAULT 0.000,
  `numC` decimal(5,2) DEFAULT 0.00,
  `numD` decimal(5,2) DEFAULT 0.00,
  `numA` decimal(5,2) DEFAULT 0.00,
  `numB` decimal(5,2) DEFAULT 0.00,
  `numCD` decimal(5,2) DEFAULT 0.00,
  `numPoom` int(11) DEFAULT 0,
  `numSpeed` int(11) DEFAULT 0,
  `numBC` decimal(5,2) DEFAULT 0.00,
  `numABC` decimal(5,2) DEFAULT 0.00,
  `numPS` decimal(5,2) DEFAULT 0.00,
  `countryA` varchar(100) DEFAULT NULL,
  `numEvent` decimal(5,2) DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `thannam_champion_teamm`
--

INSERT INTO `thannam_champion_teamm` (`id`, `idgym`, `nameA`, `teachA`, `chochA`, `contact`, `password`, `match1`, `allnum`, `email`, `datea`, `ip`, `totalscore`, `numrank`, `numAB`, `numC`, `numD`, `numA`, `numB`, `numCD`, `numPoom`, `numSpeed`, `numBC`, `numABC`, `numPS`, `countryA`, `numEvent`) VALUES
(8885, NULL, 'BANGKOK GIANTS TAEKWONDO', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9103, NULL, 'à¸¨à¸¹à¸™à¸¢à¹Œà¸™à¸±à¸™à¸—à¸™à¸²à¸à¸²à¸£à¸šà¸²à¸‡à¸à¸°à¸›à¸´', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9124, NULL, 'SATOà¹€à¸—à¸„à¸§à¸±à¸™à¹‚à¸”', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9126, NULL, 'à¹„à¸žà¸£à¸±à¸•à¸™à¹Œà¸¢à¸´à¸¡', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9132, NULL, 'WHITEFIGHTER', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9133, NULL, 'THE VISION NACHA', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9137, NULL, 'Swan Tkd', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9141, NULL, 'Power p', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9142, NULL, 'K.C.S. Academy Of Taekwondo ', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9144, NULL, 'CHANAWAT ', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9150, NULL, 'Master Kick Taekwondo', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9151, NULL, 'BELIEVE Taekwondo', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9158, NULL, 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸žà¸´à¸—à¸¢à¸²', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9159, NULL, 'Buraphatiger Taekwondo PrachinBuri ', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9161, NULL, 'Phaitoon Taekwondo ', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9162, NULL, 'à¸£à¸£.à¸­à¸´à¸ªà¸¥à¸²à¸¡à¸ªà¸±à¸™à¸•à¸´à¸Šà¸™', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9163, NULL, 'à¸£à¸£.à¸£à¸²à¸Šà¸”à¸³à¸£à¸´', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9164, NULL, 'à¸£à¸£.à¸ˆà¸´à¸™à¸”à¸²à¸žà¸£', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9167, NULL, 'DMG TAEKWONDO', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9169, NULL, 'Arena Taekwondo Gym', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9170, NULL, 'K.C.S. Academy of Taekwondo', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9171, NULL, 'AEMSURE', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9172, NULL, 'ANAN TAEKWONDO', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9175, NULL, 'SRIRACHA  TAEKWONDO (SRC TKD)', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9176, NULL, 'WCR TEAM', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9178, NULL, 'à¸›à¸´à¸¢à¸°à¸ˆà¸´à¸•à¸§à¸´à¸—à¸¢à¸²', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9179, NULL, 'RUJI TEAM', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9180, NULL, 'Tirak Taekwondo', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9183, NULL, 'Nekotaekwondo Ladkrabang', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9184, NULL, 'Danai Taekwondo', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9185, NULL, 'RDC SAMUTPRAKAN ', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9186, NULL, 'Phaitoon taekwondo ', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9187, NULL, 'JUNIOR TKD', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9189, NULL, 'RUJI TEAM', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9190, NULL, 'WST Taekwondo', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9192, NULL, 'PARADISE TAEKWONDO', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9195, NULL, 'PREMIER  TAEKWONDO', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9199, NULL, 'ChonburiTKD GYM', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9200, NULL, 'HEROES TAEKWONDO', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00),
(9201, NULL, 'à¹‚à¸£à¸‡à¹€à¸£à¸µà¸¢à¸™à¸§à¸±à¸”à¸šà¸²à¸‡à¸žà¸¥à¸µà¹ƒà¸«à¸à¹ˆà¸à¸¥à¸²à¸‡', NULL, NULL, NULL, 'pass', 2048, 0, 'email', '0000-00-00 00:00:00', 'ip', NULL, 0.00, 0.000, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, NULL, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `thannam_match`
--

CREATE TABLE `thannam_match` (
  `id` int(11) NOT NULL,
  `nameA` text DEFAULT NULL,
  `build` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `ddayA` int(10) DEFAULT 0,
  `mmountA` int(10) DEFAULT NULL,
  `yyearA` varchar(10) DEFAULT NULL,
  `ddayB` int(10) DEFAULT NULL,
  `mmountB` int(10) DEFAULT 0,
  `yyearB` int(10) DEFAULT 0,
  `timeA` int(5) DEFAULT 0,
  `finishDayA` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `addr` mediumtext DEFAULT NULL,
  `tel` mediumtext DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `url` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `msg` mediumtext DEFAULT NULL,
  `pic` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `readA` int(11) DEFAULT 0,
  `downloadA` int(11) DEFAULT 0,
  `dateA` datetime DEFAULT NULL,
  `showA` int(10) DEFAULT 0,
  `ip` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `sponsorA` int(11) DEFAULT 0,
  `regonline` int(2) NOT NULL DEFAULT 0,
  `dstart` date NOT NULL DEFAULT '0000-00-00',
  `dstart2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `linea` int(11) DEFAULT 0,
  `autorandoma` int(11) DEFAULT 0,
  `price1` int(11) DEFAULT 600,
  `priceteam` int(11) DEFAULT 0,
  `priceps` int(11) DEFAULT 0,
  `priceps2` int(11) DEFAULT 0,
  `pricepsteam` int(11) DEFAULT 0,
  `classa` varchar(5) DEFAULT '0',
  `classb` varchar(5) DEFAULT '0',
  `classc` varchar(5) DEFAULT '0',
  `classd` varchar(5) DEFAULT '0',
  `planall` int(11) DEFAULT 0,
  `lang` varchar(20) DEFAULT '0',
  `blist` int(11) DEFAULT 0,
  `print_idcard_h` int(11) DEFAULT 70,
  `print_idcard_w` int(11) DEFAULT 200,
  `print_cert_h` int(11) DEFAULT 200,
  `print_cert_w` int(11) DEFAULT 0,
  `excala` int(11) DEFAULT 0,
  `documentA` varchar(4) DEFAULT NULL,
  `downloadB` int(4) DEFAULT 0,
  `kteam` int(11) DEFAULT 3,
  `updateonly` int(11) DEFAULT 0,
  `lg` varchar(10) DEFAULT NULL,
  `ju` int(11) DEFAULT 0,
  `dateupdate` datetime DEFAULT NULL,
  `mma` int(11) DEFAULT NULL,
  `kpa` int(10) DEFAULT 0,
  `pfree` int(10) DEFAULT 0,
  `judNum` int(11) DEFAULT 3,
  `changA` int(11) DEFAULT 0,
  `youtube` text DEFAULT NULL,
  `speedK` int(11) DEFAULT NULL,
  `speedK2` varchar(4) DEFAULT NULL,
  `kpa2` varchar(11) DEFAULT NULL,
  `xs` text DEFAULT NULL,
  `speed2` int(11) DEFAULT NULL,
  `speed3` int(11) DEFAULT NULL,
  `locationA` text DEFAULT NULL,
  `medalA` text DEFAULT NULL,
  `medalB` text DEFAULT NULL,
  `cer_idcard` text DEFAULT NULL,
  `kteam2` varchar(5) DEFAULT NULL,
  `free2` varchar(5) DEFAULT NULL,
  `psPair` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `thannam_match`
--

INSERT INTO `thannam_match` (`id`, `nameA`, `build`, `city`, `ddayA`, `mmountA`, `yyearA`, `ddayB`, `mmountB`, `yyearB`, `timeA`, `finishDayA`, `addr`, `tel`, `email`, `url`, `msg`, `pic`, `pass`, `readA`, `downloadA`, `dateA`, `showA`, `ip`, `sponsorA`, `regonline`, `dstart`, `dstart2`, `linea`, `autorandoma`, `price1`, `priceteam`, `priceps`, `priceps2`, `pricepsteam`, `classa`, `classb`, `classc`, `classd`, `planall`, `lang`, `blist`, `print_idcard_h`, `print_idcard_w`, `print_cert_h`, `print_cert_w`, `excala`, `documentA`, `downloadB`, `kteam`, `updateonly`, `lg`, `ju`, `dateupdate`, `mma`, `kpa`, `pfree`, `judNum`, `changA`, `youtube`, `speedK`, `speedK2`, `kpa2`, `xs`, `speed2`, `speed3`, `locationA`, `medalA`, `medalB`, `cer_idcard`, `kteam2`, `free2`, `psPair`) VALUES
(2048, 'Prawet taekwondo cup 2024', NULL, NULL, 0, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pw006', 0, 0, NULL, 0, NULL, 0, 0, '0000-00-00', '', 0, 0, 600, 0, 0, 0, 0, '0', '0', '0', '0', 0, '0', 0, 70, 200, 200, 0, 0, NULL, 0, 3, 0, NULL, 0, NULL, NULL, 0, 0, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thannam_poomse_start5`
--

CREATE TABLE `thannam_poomse_start5` (
  `id` int(11) NOT NULL,
  `idstart` int(11) NOT NULL,
  `course` varchar(20) NOT NULL,
  `poomsae` varchar(10) NOT NULL,
  `acc` decimal(4,2) NOT NULL DEFAULT 4.00,
  `present` decimal(4,2) NOT NULL DEFAULT 6.00,
  `totala` decimal(4,2) NOT NULL,
  `acc2` decimal(4,2) NOT NULL,
  `present2` decimal(4,2) NOT NULL,
  `totala2` decimal(4,2) NOT NULL,
  `lastID` int(11) NOT NULL,
  `lastAGE` int(11) NOT NULL,
  `lastSex` varchar(5) NOT NULL,
  `restartA` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `thannam_poomse_start5`
--

INSERT INTO `thannam_poomse_start5` (`id`, `idstart`, `course`, `poomsae`, `acc`, `present`, `totala`, `acc2`, `present2`, `totala2`, `lastID`, `lastAGE`, `lastSex`, `restartA`) VALUES
(1, 5919, '', '1', 3.10, 4.90, 8.00, 4.00, 6.00, 0.00, 5919, 1, 'M', '0'),
(2, 5919, '', '1', 4.00, 3.20, 7.20, 4.00, 6.00, 0.00, 5919, 1, 'M', '0'),
(3, 5919, '', '1', 4.00, 6.00, 0.00, 4.00, 6.00, 0.00, 5919, 1, 'M', '0');

-- --------------------------------------------------------

--
-- Table structure for table `thannam_poomse_start5_flag`
--

CREATE TABLE `thannam_poomse_start5_flag` (
  `id` int(11) NOT NULL,
  `idstart1` int(11) NOT NULL DEFAULT 0,
  `idstart2` int(11) NOT NULL DEFAULT 0,
  `flagA` int(11) NOT NULL,
  `catA` int(11) NOT NULL,
  `r1` int(11) NOT NULL DEFAULT 0,
  `r2` int(11) NOT NULL DEFAULT 0,
  `r3` int(11) NOT NULL DEFAULT 0,
  `lastID` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `thannam_poomse_start5_flag`
--

INSERT INTO `thannam_poomse_start5_flag` (`id`, `idstart1`, `idstart2`, `flagA`, `catA`, `r1`, `r2`, `r3`, `lastID`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 2602),
(2, 0, 0, 0, 0, 0, 0, 0, 2602),
(3, 0, 0, 0, 0, 0, 0, 0, 2602);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thannam_champion_groupteam`
--
ALTER TABLE `thannam_champion_groupteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thannam_champion_poomsae`
--
ALTER TABLE `thannam_champion_poomsae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thannam_champion_teamm`
--
ALTER TABLE `thannam_champion_teamm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thannam_match`
--
ALTER TABLE `thannam_match`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thannam_poomse_start5`
--
ALTER TABLE `thannam_poomse_start5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thannam_poomse_start5_flag`
--
ALTER TABLE `thannam_poomse_start5_flag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thannam_champion_groupteam`
--
ALTER TABLE `thannam_champion_groupteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44052;

--
-- AUTO_INCREMENT for table `thannam_champion_poomsae`
--
ALTER TABLE `thannam_champion_poomsae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5973;

--
-- AUTO_INCREMENT for table `thannam_champion_teamm`
--
ALTER TABLE `thannam_champion_teamm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9202;

--
-- AUTO_INCREMENT for table `thannam_match`
--
ALTER TABLE `thannam_match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2049;

--
-- AUTO_INCREMENT for table `thannam_poomse_start5_flag`
--
ALTER TABLE `thannam_poomse_start5_flag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
