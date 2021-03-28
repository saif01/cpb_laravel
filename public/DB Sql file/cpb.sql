-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 08:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `super` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recruit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `login`, `password`, `name`, `contact`, `email`, `image`, `office_id`, `status`, `super`, `publish`, `delete_data`, `recruit`, `about`, `news`, `csr`, `product`, `created_at`, `updated_at`) VALUES
(3, 'syful.isl', '5683', 'syful2', '6456564444', 'syful.cse.bd@gmail.com44', 'public/images/admin/VGhFG.jpg', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '2019-09-22 00:20:24', '2019-09-22 04:07:12'),
(4, 'syful.isl2', '5683', 'syful Islam4', '44444', 'syful.cse.bd@gmail.com4', 'public/images/admin/qUSOX.png', NULL, '1', '1', '1', '0', NULL, NULL, NULL, NULL, NULL, '2019-09-22 03:22:07', '2019-09-22 04:07:24'),
(5, 'tashrifur.rah', '12347@', 'Tashrifur Rahman', '01711406429', 'tashrifcp@gmail.com', 'public/images/admin/bWj0g.jpg', NULL, '1', '1', '1', '1', '0', '1', '1', '1', '1', '2019-11-19 03:27:58', '2019-11-19 03:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

CREATE TABLE `applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recruit_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applies`
--

INSERT INTO `applies` (`id`, `user_id`, `recruit_id`, `created_at`, `updated_at`) VALUES
(1, '4', '2', '2019-10-13 03:33:40', '2019-10-13 03:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `b_uoperations`
--

CREATE TABLE `b_uoperations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b_uoperations`
--

INSERT INTO `b_uoperations` (`id`, `title`, `details`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(3, 'Aquaculture Business', '<p><span style=\"font-size:12.0pt;font-family:&quot;Tahoma&quot;,sans-serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:black;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0in;padding:0in\">It has three fish hatcheries :\r\nComilla fish hatchery, Sherpur fish hatchery, Dashuria fish hatchery.&nbsp;It\r\ndoes business of three types of products-a). Floating Fish Feed, b). Sinking\r\nFish Feed, c) Tilapia Baby Fish (0.3-0.5g size).</span></p>', '1', '3', '2019-10-03 00:28:44', '2019-10-03 00:54:28'),
(4, 'Breeder Farm Business', '<p><span style=\"font-size:12.0pt;font-family:\"Tahoma\",sans-serif;\r\nmso-fareast-font-family:\"Times New Roman\";color:black;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0in;padding:0in\">More than 24 Breeder Farms\r\nsupplies the hatching eggs to the hatchery business from different regions of\r\nBangladesh.</span></p>', '1', '3', '2019-10-03 00:29:17', '2019-10-03 00:56:36'),
(5, 'Feed Mill Operation', '<p><span style=\"font-size:12.0pt;font-family:&quot;Tahoma&quot;,sans-serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:black;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0in;padding:0in\">There are 4 Feed Mills in all\r\nover Bangladesh including the largest&nbsp; Feed Mill (Dhaka Feed Mill) in\r\nSouth Asia where produce broiler, layer, breeder, fish &amp; cattle feed.</span></p>', '1', '3', '2019-10-03 00:29:35', '2019-10-03 00:29:35'),
(6, 'Feed Technology Office', '<p><span style=\"font-size:12.0pt;font-family:\"Tahoma\",sans-serif;\r\nmso-fareast-font-family:\"Times New Roman\";color:black;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0in;padding:0in\">Feed Technology office develops\r\nnew product, maintain feed quality and performance. Moreover it tests new raw\r\nmaterials, feed additives, and medicine etc. For doing these activities FTO has\r\na research Farm.</span></p>', '1', '3', '2019-10-03 00:29:52', '2019-10-03 00:56:27'),
(7, 'Food Business', '<p><span style=\"font-size:12.0pt;font-family:\"Tahoma\",sans-serif;\r\nmso-fareast-font-family:\"Times New Roman\";color:black;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0in;padding:0in\">CP Food Business is one of the\r\nthree core businesses of the Thai based global conglomerate- CP Group. It\r\nmainly produces and markets poultry products that are Ready-to-eat products,\r\nReady-to-cook. There are more than 100 food outlets in Dhaka and Chittagong\r\ntogether. Modern Trade operates marketing at more than 60 super-shops or\r\nchain-shops.</span></p>', '1', '3', '2019-10-03 00:30:10', '2019-10-03 00:56:10'),
(8, 'Hatchery Business', '<p><span style=\"font-size:12.0pt;font-family:\"Tahoma\",sans-serif;\r\nmso-fareast-font-family:\"Times New Roman\";color:black;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0in;padding:0in\">Hatchery farms produce quality\r\nday old chicks (Layer and broiler) that are healthy, sturdy and suitable to the\r\nfarming condition of Bangladesh. There are 9 hatcheries in all over Bangladesh.</span></p>', '1', '3', '2019-10-03 00:30:28', '2019-10-03 00:56:18'),
(9, 'Integration Business', '<p><span style=\"font-size:12.0pt;font-family:\"Tahoma\",sans-serif;\r\nmso-fareast-font-family:\"Times New Roman\";color:black;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0in;padding:0in\">There are 12 layer and broiler\r\nfarms under Integration business and more than 18 sales branches.</span></p>', '1', '3', '2019-10-03 00:30:48', '2019-10-03 00:56:03'),
(10, 'Organic Fertilizer', '<p><span style=\"font-size:12.0pt;font-family:\"Tahoma\",sans-serif;\r\nmso-fareast-font-family:\"Times New Roman\";color:black;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0in;padding:0in\">Organic fertilizers are a\r\nkinder, gentler way to give plants the nutrients they need. It is very eco\r\nfriendly farming system .Organic fertilizers usually come from manure and guano\r\nof chickens of various farms.</span></p>', '1', '3', '2019-10-03 00:31:05', '2019-10-03 00:55:50'),
(11, 'Seed Business', '<p><span style=\"font-size:12.0pt;font-family:&quot;Tahoma&quot;,sans-serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:black;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0in;padding:0in\">C.P. Bangladesh Co., Ltd.\r\nestablished its Seed Business as a part of Business Diversification during the\r\nyear 2005-06. Company Imports Hybrid Corn seed from C.P. Seeds India Pvt. Ltd.</span></p>', '1', '3', '2019-10-03 00:31:23', '2019-10-03 00:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `chairman_msgs`
--

CREATE TABLE `chairman_msgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chairman_msgs`
--

INSERT INTO `chairman_msgs` (`id`, `name`, `details`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(2, 'Chairman Name', '<p><br></p>', 'public/images/chairman/BDLeD.jpg', '1', '3', '2019-10-02 05:02:08', '2019-11-23 21:50:43'),
(4, 'Mr. Santi Pongchaisopon', '<p>C.P. Bangladesh Co.; Ltd. is an agro -industrial and food conglomerate, which is operating since 1998. We Started off with asmall feed mill locatedin Savar and we haveexpanded extensively accross from feed to food business.</p><p>We Know being a good company means being a responsible corporate citizen-inevery location, to every employee, and to all stakeholders. This is what CPB strivesto achieve. From high- quality, safe and nutricious productsfor all customersto be safetyof oir employees, we know that doing the right thingis the best practice for our company and society.<br></p>', 'public/images/chairman/gbdYe.jpg', '1', '5', '2019-11-25 03:58:30', '2019-12-17 02:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`id`, `date`, `title`, `details`, `document`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(2, '2019-09-27', 'This is title', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum</p>', 'public/images/community/qxtGL.png', 'public/images/community/uhUZl.png', '0', '3', '2019-09-26 04:13:40', '2019-09-26 04:13:40'),
(3, '2019-09-27', 'Why do we  use it demo', '<p>srgrgr<br></p>', 'public/images/community/9Raum.png', 'public/images/community/GtZv7.png', '0', '3', '2019-09-26 09:09:46', '2019-09-26 09:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `telephone`, `email`, `created_at`, `updated_at`) VALUES
(4, '<p>Holding No:  E-236, Ward No: 07,  Chandra, Kaliakoir, Gazipur, Bangladesh.<br></p>', '01730358212', '06822518124', 'admin_ga@cpbangladesh.com', '2019-10-14 04:35:36', '2020-02-20 20:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `title`, `details`, `document`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(3, '2016-01-01', 'C.P. Family Day', '<p>Best Seller <br></p>', 'public/images/event/LITen.jpg', 'public/images/event/nytBN.jpg', '1', '5', '2019-12-19 05:07:25', '2019-12-19 05:13:29'),
(4, '2016-01-01', 'C.P. Family Day', '<p>C.P. Family Day<br></p>', 'public/images/event/c3P0r.jpg', 'public/images/event/SdoOZ.jpg', '1', '5', '2019-12-19 05:15:49', '2019-12-19 05:15:49'),
(5, '2016-01-01', 'C.P. Family Day', '<p>C.P. Family Day<br></p>', 'public/images/event/x5cZs.jpg', 'public/images/event/aP5P4.jpg', '1', '5', '2019-12-19 05:17:08', '2019-12-19 05:17:08'),
(6, '2016-01-01', 'C.P. Family Day', '<p>C.P. Family Day<br></p>', 'public/images/event/Qrqoc.jpg', 'public/images/event/iyeqv.jpg', '1', '5', '2019-12-19 05:43:55', '2019-12-19 05:43:55'),
(7, '2016-12-15', 'C.P. Family Day', '<p>C.P. Dealers<br></p>', 'public/images/event/LpQnQ.jpg', 'public/images/event/ojSmi.jpg', '1', '5', '2019-12-19 05:59:05', '2019-12-19 05:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `headquarters`
--

CREATE TABLE `headquarters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headquarters`
--

INSERT INTO `headquarters` (`id`, `country`, `company`, `address`, `phone`, `email`, `website`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(1, 'Thailand', 'Charoen Pokphand Foods Public Company Limited', '313 C.P. Tower, Silom Road, Bangrak, Bangkok 10500, Thailand', '006626258000', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '3', '2019-09-25 05:41:31', '2020-01-29 00:13:20'),
(2, 'China, (Guangzhou)', 'CPF Food Trading Co., Ltd.', 'Suite 1007B,T.P. PLAZA 9/109,Liu Hua Road, Guangzhou, China', '862158358683', 'contact@charoenpokphand.com', 'http://www.cpp.hk/', '1', '3', '2019-09-25 05:41:31', '2020-01-29 04:10:34'),
(3, 'China, (Shanghai)', 'CPF Food Trading Co., Ltd.', 'No.138, Yong Hua Building, Room 25B Pu Dong Avenue,  Shanghai 200120, China', '862158358683', 'contact@charoenpokphand.com', 'http://www.cpp.hk/', '1', '3', '2019-09-25 05:41:31', '2020-01-29 04:10:22'),
(4, 'Hong Kong', 'C.P. Pokphand Co., Ltd.', '21st Floor, Far East Finance Centre,  16 Harcourt Road, Hong Kong', '85225201601', 'contact@charoenpokphand.com', 'http://www.cpp.hk/', '1', '3', '2019-09-25 05:41:31', '2020-01-29 03:54:59'),
(6, 'China, (Beijing)', 'CPF Food Trading Co., Ltd.', 'Room 906, Tianchuang Shengfang Center, No.23 South 3rd Ring Road East, Fengtai District, Beijing, China', '861085089000', 'contact@charoenpokphand.com', 'http://www.cpp.hk/', '1', '5', '2020-01-29 04:13:28', '2020-01-29 04:13:28'),
(7, 'Hong Kong Branch-2', 'CP Merchandising Co., Ltd.', 'Suite 2505, 25th Floor, Skyline Tower, 39 Wang Kwong Road, Kowloon Bay, Kowloon, Hong Kong', '85235079100', 'contact@charoenpokphand.com', 'http://www.cpp.hk/', '1', '5', '2020-01-29 04:18:40', '2020-01-29 04:18:40'),
(8, 'Singapore', 'C.P. Intertrade Singapore (Pte) Ltd.', '3 Ubi Ave 3 #05-71/72 Vertex, Singapore 408868', '6565387020', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 04:23:54', '2020-01-29 04:23:54'),
(9, 'Malaysia', 'Charoen Pokphand Foods (Malaysia) Sdn. Bhd.', '6th Floor, Wisma Lee Kay Huan, Jalan Genting Kelang,  53200 Setapak, Kuala Lumpur, Malaysia', '60340271800', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 04:25:50', '2020-01-29 04:25:50'),
(10, 'Taiwan', 'Charoen Pokphand Enterprise (Taiwan) Co., Ltd.', '17th Floor ,The Taipei Empire Building, 87, Suang Chiang Rd, Taipei, Taiwan', '886225077071', 'service@cptwn.com.tw', 'http://www.cptwn.com.tw', '1', '5', '2020-01-29 04:28:50', '2020-01-29 04:28:50'),
(11, 'Japan', 'CPF Tokyo Co., Ltd.', '8 Floor Shibanishii Building, No.9-1,  Shiba 4-Chome, Minato-Ku, Tokyo 108-0014, Japan', '81354012231', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 04:31:23', '2020-01-29 04:31:23'),
(12, 'Souh Korea', 'CPK Foods System Co., Ltd.', '1F, Bu Key Bldg, 11-1 Kyobuk-Dong, Jongro-Gu, Seoul 110-090, South Korea', '8227363470', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 04:33:04', '2020-01-29 04:33:04'),
(13, 'Philippines', 'Charoen Pokphand Foods Philippines Corporation', 'Unit 1C-1D LSC Blgd., Lazatin Blvd., Dolores Homesite Exit2, San Fernando 2000, Pampanga, Philippines', '63459614892', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 04:36:31', '2020-01-29 04:36:31'),
(14, 'Vietnam', 'C.P. Vietnam Corporation', 'No.2 , 2A Street , Bien Hoa Industrial Zone 2 , Bien Hoa City , Dong Nai Province , Vietnam', '84613836251', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 04:39:52', '2020-01-29 04:39:52'),
(15, 'Laos', 'C.P. Laos Co., Ltd.', '363/4-5 khum Pheng Muang Road, Ban Phonthaneua, Unit 34, Xaysettha District, Vientiane, Laos', '85621453508', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:06:16', '2020-01-29 05:06:16'),
(16, 'India', 'Charoen Pokphand (India) Private Limited', '104, G.N.T Road, Nallur & Vijaynallur Village, Sholavaram Post, Red Hills, Chennai - 600 067, India', '914424474166', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:07:52', '2020-01-29 05:07:52'),
(17, 'Australia', 'CP Merchandising Co., Ltd. (Australia Branch)', 'Suite CE11 & CE12, Level 2, 425 Docklands Drive,  Docklands 3008, Victoria, Australia', '61386029199', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:09:43', '2020-01-29 05:09:43'),
(18, 'South Africa', 'C.P. Intertrade South Africa (Pty) Ltd.', '55 Silwerkloof Estate, Silwerboom Avenue,  Plattekloof 3, 7500', '27219112901', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:11:39', '2020-01-29 05:11:39'),
(19, 'United Arab Emirates', 'C.P. Foods Middle East', 'C.P. Foods Middle East  P.O. Box 61186 Dubai, U.A.E.', '97148817844', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:14:01', '2020-01-29 05:14:01'),
(20, 'United Kingdom', 'C.P. Foods (UK) Limited', 'Avon House Hartlebury Trading Estate Hartleburry, Nr Kidderminster Worcestershire DY10 4JB', '441299253131', 'help@cpfoods.co.uk', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:15:17', '2020-01-29 05:41:14'),
(21, 'United States of America-1', 'C.P. Food Products, Inc. (Head Office)', '7135 Minstrel Way, Suite 203 Columbia, MD 21045 USA', '18007206668', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:17:11', '2020-01-29 05:17:11'),
(22, 'United States of America-2', 'C.P. Food Products, Inc. (Irvine Office)', '17801 Sky Park Circle, Suite K, Irvine, CA 92614 USA', '18007206668', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:18:24', '2020-01-29 05:18:24'),
(23, 'Russia', 'CPF Overseas LLC. (Moscow Branch)', '27, Dubininskaya Street, Moscow Russia 115054', '74992357484', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:30:35', '2020-01-29 05:30:35'),
(24, 'Italy', 'CPF Europe S.A.', 'Filiale Italiana Via E. Fermi 32,  20019 Settimo, Milanese (MI), Italy', '390233510405', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:32:11', '2020-01-29 05:32:11'),
(25, 'Turkey', 'C.P. Standart Gida Sanayi ve Ticaret A.S.', 'Buyukdere Cad. Akinci Bayiri Sok No.,  6 34394 Mecidiyekoy, Istanbul, Turkey', '902122748536', 'info@cpturkiye.com', 'http://www.cpturkiye.com', '1', '5', '2020-01-29 05:33:48', '2020-01-29 05:33:48'),
(26, 'Belgium', 'CPF Europe S.A.', 'Avenue Belle Vue 17,  Waterloo 1410, Belgium', '3223575380', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:36:02', '2020-01-29 05:36:02'),
(27, 'Spain', 'CP Merchandising Co., Ltd. Sucural en Espana', 'Principe de Vergara No.291, Entreplanta 1a, Local 3 Esc. lzquierda 28016 Madrid, Spain', '34913598882', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:38:39', '2020-01-29 05:38:39'),
(28, 'Denmark', 'CPF Denmark A/S', 'Tomrevej 10A PO Box 67  DK6800 Varde-Denmark', '4575261330', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:42:47', '2020-01-29 05:42:47'),
(29, 'France', 'CP Merchandising Co., Ltd.', '10-12 avenue de la Marne 92120 Montrouge, France', '33146558533', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:43:40', '2020-01-29 05:43:40'),
(30, 'Germany', 'CP Merchandising Co., Ltd. (Germany Branch)', 'Am Neumarkt 30, 22041 Hamburg Germany', '494069219841', 'contact@charoenpokphand.com', 'http://www.cpfworldwide.com', '1', '5', '2020-01-29 05:44:30', '2020-01-29 05:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `date`, `title`, `details`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(5, '1921-01-01', 'C.P.Group-Founded', '<p>Founded in Thailand<br><br></p>', 'public/images/history/AoRSx.jpg', '1', '5', '2019-11-21 02:48:51', '2020-07-23 03:26:11'),
(8, '1998-01-01', 'Invest in Bangladesh', '<p>Charoen Pokphand  group invest in Bangladesh .<br><br>Acquisition of common shares of 3 agro-industries public companies of Charoen Pokphand Group in Thailand.<br><br></p>', 'public/images/history/gSc8Y.jpg', '1', '5', '2019-11-21 03:03:08', '2020-03-19 00:41:23'),
(9, '1999-01-01', 'CPF', '<p><span style=\"font-size:10.0pt;font-family:Calibri;\r\nmso-ascii-font-family:Calibri;mso-fareast-font-family:+mn-ea;mso-bidi-font-family:\r\n+mn-cs;color:black;mso-color-index:1;mso-font-kerning:12.0pt;language:en-US\"><span style=\"mso-spacerun:yes\">&nbsp;</span></span><span style=\"font-size:10.0pt;\r\nfont-family:Calibri;mso-ascii-font-family:Calibri;mso-fareast-font-family:+mn-ea;\r\nmso-bidi-font-family:+mn-cs;color:black;mso-color-index:1;mso-font-kerning:\r\n12.0pt;language:en-US\">Renamed as “ Charoen Pokphand Foods Public Limited” </span></p>', 'public/images/history/tlwv1.png', '1', '5', '2019-11-21 03:20:06', '2019-11-21 03:20:06'),
(10, '2002-01-01', 'Inventment in UK & China', '<p>Invest in the United Kingdom, currently operates business in producing chilled food products for supply to the EU market.<br><br>Invested in China, currently operates business in manufacturing and distribution of aquatic feed, as well as aquatic hatchery and farming.<br><br></p>', 'public/images/history/JpOI0.png', '1', '5', '2019-11-21 03:24:31', '2019-11-21 03:24:31'),
(11, '2004-01-01', 'Investment in Turkey', '<p>Invested in Turkey currently operates business in manufacturing and distribution of livestock feed and fully integrated chicken business.<br><br></p>', 'public/images/history/Vb10s.png', '1', '5', '2019-11-21 03:26:18', '2019-11-21 03:26:18'),
(12, '2005-01-01', 'CP Five Star', '<p>\r\n\r\n</p><p style=\"language:en-US;margin-top:0pt;margin-bottom:0pt;margin-left:0in;\r\ntext-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:\r\nembed;mso-line-break-override:none;word-break:normal;punctuation-wrap:hanging\"><span style=\"font-size:10.0pt;font-family:Calibri;mso-ascii-font-family:Calibri;\r\nmso-fareast-font-family:+mn-ea;mso-bidi-font-family:+mn-cs;color:black;\r\nmso-color-index:1;mso-font-kerning:12.0pt;language:en-US\">Acquired the Five Star business as bridge into the food industry.<br>Increased shareholding in Charoen Pokphand (India) Private Limited (CP India) currently operates business in manufacturing and distribution animal feed and animal farming, from 19.0%  to 71.2%.</span></p><p style=\"language:en-US;margin-top:0pt;margin-bottom:0pt;margin-left:0in;\r\ntext-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:\r\nembed;mso-line-break-override:none;word-break:normal;punctuation-wrap:hanging\"><span style=\"font-size:10.0pt;font-family:Calibri;mso-ascii-font-family:Calibri;\r\nmso-fareast-font-family:+mn-ea;mso-bidi-font-family:+mn-cs;color:black;\r\nmso-color-index:1;mso-font-kerning:12.0pt;language:en-US\">Invested in Malaysia<br><br></span><span style=\"font-size:\r\n10.0pt;font-family:Calibri;mso-ascii-font-family:Calibri;mso-fareast-font-family:\r\n+mn-ea;mso-bidi-font-family:+mn-cs;color:black;mso-color-index:1;mso-font-kerning:\r\n12.0pt;language:en-US\"></span></p>', 'public/images/history/halin.jpg', '1', '5', '2019-11-21 03:28:49', '2020-03-19 00:42:57'),
(13, '2007-01-01', 'Investment in Philippines', '<p>\r\n\r\n</p><p style=\"language:en-US;margin-top:0pt;margin-bottom:0pt;margin-left:0in;\r\ntext-align:left;direction:ltr;unicode-bidi:embed;mso-line-break-override:none;\r\nword-break:normal;punctuation-wrap:hanging\"><span style=\"font-size:10.0pt;\r\nfont-family:Calibri;mso-ascii-font-family:Calibri;mso-fareast-font-family:+mn-ea;\r\nmso-bidi-font-family:+mn-cs;color:black;mso-color-index:1;mso-font-kerning:\r\n12.0pt;language:en-US\">Invested in Philippines, currently operates business in\r\nshrimp hatchery.</span></p>', 'public/images/history/ShuJx.jpg', '1', '5', '2019-11-21 03:31:35', '2019-11-21 03:31:35'),
(14, '2009-01-01', 'Investment in Taiwan', '<p>Invested in Taiwan, currently operates business in manufacturing and distribution of animal feed, livestock farming, and food processing.<br><br></p>', 'public/images/history/OeQdh.png', '1', '5', '2019-11-21 03:33:42', '2019-11-21 03:33:42'),
(15, '2010-01-01', 'Agribusiness to Food & Beverage', '<p>Reclassified CPF’s sector from “Agribusiness” to Food and “Beverage”.<br><br></p>', 'public/images/history/gcuCj.jpg', '1', '5', '2019-11-21 03:35:38', '2020-03-19 00:46:54'),
(16, '2011-01-01', 'Investment in Cambodia', '<p>Invested in Cambodia, mainly engages in manufacturing and distribution of animal feed, animal farming, and food processing.<br>.<br><br></p>', 'public/images/history/G863G.png', '1', '5', '2019-11-21 03:42:10', '2019-11-21 03:42:10'),
(17, '2012-01-01', 'Business expansion', '<p>Expanded business in Malaysia, China and Vietnam<br></p>', 'public/images/history/ZLOrq.png', '1', '5', '2019-11-21 03:44:49', '2019-11-21 03:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `login_id`, `ip`, `os`, `device`, `browser`, `city`, `country`, `status`, `logout`, `created_at`, `updated_at`) VALUES
(1, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-21 23:50:03', '2019-09-21 23:50:03'),
(2, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-21 23:52:13', '2019-09-21 23:52:13'),
(3, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-22 02:11:25', '2019-09-22 02:11:25'),
(4, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-22 07:23:50', '2019-09-22 07:23:50'),
(5, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-23 01:35:14', '2019-09-23 01:35:14'),
(6, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-23 15:58:27', '2019-09-23 08:16:02', '2019-09-23 09:58:27'),
(7, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-24 21:47:01', '2019-09-24 21:47:01'),
(8, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-25 00:23:06', '2019-09-25 00:23:06'),
(9, 'syful.isl', '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-25 21:36:33', '2019-09-25 21:36:33'),
(10, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-26 03:44:29', '2019-09-26 03:44:29'),
(11, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-26 08:46:23', '2019-09-26 08:46:23'),
(12, 'syful.isl', '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-27 07:24:59', '2019-09-27 07:24:59'),
(13, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-28 09:39:18', '2019-09-28 02:51:34', '2019-09-28 03:39:18'),
(14, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-28 10:15:32', '2019-09-28 03:42:34', '2019-09-28 04:15:32'),
(15, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-28 04:15:41', '2019-09-28 04:15:41'),
(16, 'syful.isl', '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-28 16:45:22', '2019-09-28 08:05:52', '2019-09-28 10:45:22'),
(17, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-09-30 23:46:20', '2019-09-30 23:46:20'),
(18, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-01 23:52:26', '2019-10-01 23:52:26'),
(19, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-02 22:28:11', '2019-10-02 22:28:11'),
(20, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-06 02:56:22', '2019-10-06 02:56:22'),
(21, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-06 20:29:29', '2019-10-06 20:29:29'),
(22, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-06 23:29:35', '2019-10-06 23:29:35'),
(23, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-08 23:30:22', '2019-10-08 23:30:22'),
(24, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-13 03:38:06', '2019-10-13 03:38:06'),
(25, 'syful.isl', '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-13 21:12:47', '2019-10-13 21:12:47'),
(26, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-14 03:24:12', '2019-10-14 03:24:12'),
(27, 'syful.isl', '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-14 21:04:33', '2019-10-14 21:04:33'),
(28, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-15 00:37:27', '2019-10-15 00:37:27'),
(29, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-15 03:01:25', '2019-10-15 03:01:25'),
(30, 'syful.isl2', '::1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-10-15 05:47:05', '2019-10-15 05:47:05'),
(31, 'syful.isl2', '::1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-15 05:47:27', '2019-10-15 05:47:27'),
(32, 'syful.isl', '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-16 05:36:22', '2019-10-15 23:06:36', '2019-10-15 23:36:22'),
(33, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-16 06:42:33', '2019-10-15 23:36:26', '2019-10-16 00:42:33'),
(34, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-16 00:42:37', '2019-10-16 00:42:37'),
(35, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-19 04:51:45', '2019-10-18 22:50:43', '2019-10-18 22:51:45'),
(36, 'syful.isl2', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-19 04:52:07', '2019-10-18 22:51:52', '2019-10-18 22:52:07'),
(37, 'syful.isl', '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-21 21:36:58', '2019-10-21 21:36:58'),
(38, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-22 04:02:10', '2019-10-22 04:02:10'),
(39, 'syful.isl', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-11-05 00:13:46', '2019-11-05 00:13:46'),
(40, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-11-19 03:22:18', '2019-11-19 03:22:18'),
(41, 'tashrifur.rah', '10.64.5.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-11-19 03:29:22', '2019-11-19 03:29:22'),
(42, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-11-19 05:14:29', '2019-11-19 05:14:29'),
(43, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-11-19 05:14:47', '2019-11-19 05:14:47'),
(44, 'Tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-11-19 05:15:15', '2019-11-19 05:15:15'),
(45, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-11-19 22:36:02', '2019-11-19 22:36:02'),
(46, 'tashrifur.rah', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', '2019-11-20 05:43:13', '2019-11-19 23:43:07', '2019-11-19 23:43:13'),
(47, 'tashrifur.rah', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-11-19 23:43:35', '2019-11-19 23:43:35'),
(48, 'tashrifur.rah', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', '2019-11-20 05:45:59', '2019-11-19 23:44:29', '2019-11-19 23:45:59'),
(49, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-11-20 11:10:30', '2019-11-20 04:46:31', '2019-11-20 05:10:30'),
(50, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-11-21 02:20:44', '2019-11-21 02:20:44'),
(51, 'tashrifur.rah', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', '2019-11-21 11:36:26', '2019-11-21 02:30:05', '2019-11-21 05:36:26'),
(52, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-11-23 21:49:28', '2019-11-23 21:49:28'),
(53, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-11-24 23:16:26', '2019-11-24 23:16:26'),
(54, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-11-25 03:33:43', '2019-11-25 03:33:43'),
(55, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-11-27 23:37:54', '2019-11-27 23:37:54'),
(56, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-11-30 23:43:30', '2019-11-30 23:43:30'),
(57, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-07 04:47:47', '2019-12-07 04:47:47'),
(58, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-12-07 23:26:50', '2019-12-07 23:26:50'),
(59, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-07 23:27:03', '2019-12-07 23:27:03'),
(60, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-08 22:06:06', '2019-12-08 22:06:06'),
(61, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-10 01:07:33', '2019-12-10 01:07:33'),
(62, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-10 03:06:31', '2019-12-10 03:06:31'),
(63, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-16 21:30:47', '2019-12-16 21:30:47'),
(64, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-16 22:11:45', '2019-12-16 22:11:45'),
(65, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-12-17 02:20:48', '2019-12-17 02:20:48'),
(66, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-17 02:21:07', '2019-12-17 02:21:07'),
(67, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-19 03:58:30', '2019-12-19 03:58:30'),
(68, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-12-25 00:02:43', '2019-12-25 00:02:43'),
(69, 'thariqul.isl', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-12-25 05:57:05', '2019-12-25 05:57:05'),
(70, 'thariqul.isl', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-12-25 05:57:23', '2019-12-25 05:57:23'),
(71, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-12-25 11:58:03', '2019-12-25 05:57:47', '2019-12-25 05:58:03'),
(72, 'thariqul.isl', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-12-25 05:58:21', '2019-12-25 05:58:21'),
(73, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2020-01-04 23:29:25', '2020-01-04 23:29:25'),
(74, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-04 23:29:51', '2020-01-04 23:29:51'),
(75, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-05 00:16:31', '2020-01-05 00:16:31'),
(76, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-07 05:20:51', '2020-01-07 05:20:51'),
(77, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-07 05:26:00', '2020-01-07 05:26:00'),
(78, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '0', NULL, '2020-01-11 05:15:46', '2020-01-11 05:15:46'),
(79, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-11 05:15:58', '2020-01-11 05:15:58'),
(80, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2020-01-11 11:34:04', '2020-01-11 05:27:05', '2020-01-11 05:34:04'),
(81, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-11 23:14:55', '2020-01-11 23:14:55'),
(82, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-12 03:06:54', '2020-01-12 03:06:54'),
(83, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-21 04:35:49', '2020-01-21 04:35:49'),
(84, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-22 22:19:35', '2020-01-22 22:19:35'),
(85, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-25 05:02:31', '2020-01-25 05:02:31'),
(86, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2020-01-28 04:25:40', '2020-01-28 04:25:40'),
(87, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-28 04:26:00', '2020-01-28 04:26:00'),
(88, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-29 00:04:35', '2020-01-29 00:04:35'),
(89, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-01-29 03:51:44', '2020-01-29 03:51:44'),
(90, 'surachai.pra', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '0', NULL, '2020-02-11 03:00:04', '2020-02-11 03:00:04'),
(91, 'admin', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '0', NULL, '2020-02-11 03:00:08', '2020-02-11 03:00:08'),
(92, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-02-11 05:08:51', '2020-02-11 05:08:51'),
(93, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-02-12 03:00:19', '2020-02-12 03:00:19'),
(94, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-02-13 03:51:40', '2020-02-13 03:51:40'),
(95, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-03-16 04:10:42', '2020-03-16 04:10:42'),
(96, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-03-16 04:31:08', '2020-03-16 04:31:08'),
(97, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2020-03-18 20:31:05', '2020-03-18 20:31:05'),
(98, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2020-03-18 20:31:53', '2020-03-18 20:31:53'),
(99, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-03-18 20:32:10', '2020-03-18 20:32:10'),
(100, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-03-18 22:31:50', '2020-03-18 22:31:50'),
(101, 'tashrifur.rah', '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2020-03-24 04:32:24', '2020-03-24 04:32:24'),
(102, 'tashrifur.rah', '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '1', NULL, '2020-04-24 07:08:03', '2020-04-24 07:08:03'),
(103, 'tashrifur.rah', '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '1', NULL, '2020-04-29 23:04:24', '2020-04-29 23:04:24'),
(104, 'tashrifur.rah', '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '0', NULL, '2020-05-12 23:38:56', '2020-05-12 23:38:56'),
(105, 'tashrifur.rah', '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '0', NULL, '2020-05-12 23:39:18', '2020-05-12 23:39:18'),
(106, 'tashrifur.rah', '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '1', NULL, '2020-05-12 23:40:41', '2020-05-12 23:40:41'),
(107, 'tashrifur.rah', '37.111.201.204', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '1', NULL, '2020-07-23 03:20:43', '2020-07-23 03:20:43'),
(108, 'tashrifur.rah', '37.111.231.137', 'Windows 10', 'Computer', 'Chrome', 'Ishurdi', 'BD', '1', NULL, '2020-08-16 03:06:23', '2020-08-16 03:06:23'),
(109, 'tashrifur.rah', '37.111.231.137', 'Windows 10', 'Computer', 'Chrome', 'Ishurdi', 'BD', '1', NULL, '2020-08-16 03:10:13', '2020-08-16 03:10:13'),
(110, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2021-03-23 22:30:55', '2021-03-23 22:30:55'),
(111, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2021-03-27 05:58:34', '2021-03-27 05:58:34'),
(112, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '0', NULL, '2021-03-27 06:01:13', '2021-03-27 06:01:13'),
(113, 'syful.isl', '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', NULL, '2021-03-27 06:01:20', '2021-03-27 06:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_09_22_052815_create_admins_table', 1),
(2, '2019_09_22_052842_create_login_logs_table', 1),
(3, '2019_09_22_113430_create_contacts_table', 2),
(4, '2019_09_23_075646_create_histories_table', 3),
(5, '2019_09_25_060755_create_missions_table', 4),
(6, '2019_09_25_064222_create_b_uoperations_table', 5),
(7, '2019_09_25_092122_create_structures_table', 6),
(8, '2019_09_25_112131_create_headquarters_table', 7),
(9, '2019_09_26_035322_create_s_r_s_table', 8),
(10, '2019_09_26_094859_create_communities_table', 9),
(11, '2019_09_26_101617_create_news_table', 10),
(12, '2019_09_26_120823_create_presses_table', 11),
(13, '2019_09_27_134238_create_trdevs_table', 12),
(15, '2019_09_27_140119_create_events_table', 13),
(16, '2019_09_27_143314_create_photos_table', 14),
(17, '2019_09_28_115040_create_products_table', 15),
(18, '2019_10_01_054827_create_sliders_table', 16),
(19, '2019_10_02_095434_create_chairman_msgs_table', 17),
(20, '2019_10_02_110414_create_president_msgs_table', 18),
(21, '2019_10_05_101237_create_visitor_msgs_table', 19),
(23, '2019_10_07_025705_create_recruits_table', 20),
(24, '2019_10_07_081215_create_user_regs_table', 21),
(25, '2019_10_09_033507_create_user_login_logs_table', 22),
(26, '2019_10_09_100101_create_applies_table', 23),
(27, '2019_10_15_093050_create_visitor_logs_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `details`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(4, '<p>Expanding feed Mill Factory (Livestock/Aquaculture)</p>', '1', '3', '2019-10-02 03:16:19', '2020-01-05 00:19:52'),
(5, '<p style=\"font-size: 15px;\">Expanding Hatchery and Breeder Farm</p>', '1', '3', '2020-01-05 00:19:07', '2020-01-05 00:19:44'),
(6, '<p style=\"font-size: 15px;\">Expanding Broiler and Layer Farm.</p>', '1', '3', '2020-01-05 00:20:13', '2020-01-05 00:22:07'),
(7, '<p style=\"font-size: 15px;\">Expanding Aquaculture Business.</p>', '1', '3', '2020-01-05 00:20:42', '2020-01-05 00:22:46'),
(8, '<p style=\"font-size: 15px;\">Expanding Food Business</p>', '1', '3', '2020-01-05 00:21:00', '2020-01-05 00:21:00'),
(9, '<p style=\"font-size: 15px;\">Focus on People Development</p>', '1', '3', '2020-01-05 00:21:11', '2020-01-05 00:21:11'),
(10, '<p><span style=\"letter-spacing: 0.3px;\">Building Strong and Strategy CSR</span><br></p>', '1', '3', '2020-01-05 00:21:20', '2020-01-05 00:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `details`, `document`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(3, '2019-12-10', 'Corporate Social Responsibility', '<p>Corporate social responsibility in Chattogram area.<br></p>', 'public/images/news/oetq4.jpg', 'public/images/news/JE6f1.jpg', '1', '5', '2019-12-25 00:19:05', '2019-12-25 00:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'public/images/photo/52vQ5.jpg', '2019-09-28 05:32:11', '2019-09-28 05:32:11'),
(2, 'public/images/photo/4UlZE.png', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(3, 'public/images/photo/CpViW.jpg', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(5, 'public/images/photo/4UlZE.png', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(6, 'public/images/photo/52vQ5.jpg', '2019-09-28 05:32:11', '2019-09-28 05:32:11'),
(7, 'public/images/photo/CpViW.jpg', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(8, 'public/images/photo/4UlZE.png', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(9, 'public/images/photo/4UlZE.png', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(10, 'public/images/photo/52vQ5.jpg', '2019-09-28 05:32:11', '2019-09-28 05:32:11'),
(11, 'public/images/photo/52vQ5.jpg', '2019-09-28 05:32:11', '2019-09-28 05:32:11'),
(12, 'public/images/photo/CpViW.jpg', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(13, 'public/images/photo/CpViW.jpg', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(14, 'public/images/photo/4UlZE.png', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(15, 'public/images/photo/4UlZE.png', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(16, 'public/images/photo/4UlZE.png', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(17, 'public/images/photo/4UlZE.png', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(18, 'public/images/photo/52vQ5.jpg', '2019-09-28 05:32:11', '2019-09-28 05:32:11'),
(19, 'public/images/photo/52vQ5.jpg', '2019-09-28 05:32:11', '2019-09-28 05:32:11'),
(20, 'public/images/photo/52vQ5.jpg', '2019-09-28 05:32:11', '2019-09-28 05:32:11'),
(21, 'public/images/photo/52vQ5.jpg', '2019-09-28 05:32:11', '2019-09-28 05:32:11'),
(22, 'public/images/photo/CpViW.jpg', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(23, 'public/images/photo/CpViW.jpg', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(24, 'public/images/photo/CpViW.jpg', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(25, 'public/images/photo/CpViW.jpg', '2019-09-28 05:33:02', '2019-09-28 05:33:02'),
(26, 'public/images/photo/MMFF4.jpg', '2019-12-19 05:55:07', '2019-12-19 05:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `president_msgs`
--

CREATE TABLE `president_msgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `president_msgs`
--

INSERT INTO `president_msgs` (`id`, `name`, `details`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(2, 'Mr. Suchat Suntipada', '<p>I am delighted to represent C.P. Bangladesh Co.;Ltd.(CPB), which is \'\'Built to last.\'\' We, the CPB people are proud to have continually delivered the right product at the right time for our valuable customers since its inception in 1998.At present, We can look back with great content at an excellent track-record marked with excellence and growth; living up to our vision \'\'Kitchen of Bangladesh\'\'.\"Just Good\" could be pleasing for some people, but the people of CPB want more than just good. Inside, Our significant six values make us to be better than good. we like to be part of an enthusiastic and dedicated team whose members, even few years later will be memorized for what they accomplished. CPB People like to move forward only for greatness.</p><p><br></p><p>To achieve our vision, CPB has set well-defined objectives together with maximizing efficiency, focusing on stakeholdersas well as customers\' desires, delivering high quality products, optimizing overall output, maintaining the highest extentof safety and protecting the environment. We the CPB people feel confident that our products today touch billions of people not only in Bangladesh but also around the world; that is the way by which \'\'CPB\'\' has become the icon of quality.</p><p><br></p><p>&nbsp; With the persistent support of the management &amp; employees, we shall be doing our utmost to keep up the company\'s leading competitive position in Bangladesh as well as in the world at large and we shall continually strive to attain growth and excelence in customers\' services.</p>', 'public/images/president/Cex70.jpg', '1', '3', '2019-10-02 05:33:08', '2020-01-05 00:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `presses`
--

CREATE TABLE `presses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presses`
--

INSERT INTO `presses` (`id`, `date`, `title`, `details`, `document`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(3, '2019-08-01', 'Magazine News', '<p>Poultry Khamar Bichitra<br></p>', 'public/images/press/rfv3V.jpg', 'public/images/press/v8v8y.jpg', '1', '5', '2019-12-19 04:24:19', '2019-12-19 04:24:19'),
(4, '2019-10-01', 'Magazine News', '<p>The Monthly Krishi Suraksha <br></p>', 'public/images/press/kTIJb.png', 'public/images/press/gRtPr.png', '1', '5', '2019-12-19 04:40:18', '2019-12-19 04:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `details`, `website`, `image1`, `image2`, `image3`, `image4`, `image5`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(2, 'Feed', 'C.P. Bangladesh Co. Ltd.', 'Livestock Business Line<br><br>CPB is the pioneer and leader in the production of various forms of livestock feed such as concentrate, powder and pellet. We have feed mill plants situated in every region of the country and some over 600 appointed agents/distributors to help market and distribute feed to small independent farmers across Thailand. In addition, some portion is sold directly to large animal farms. CPB pays attention to continuous improvement on production efficiency and product quality and keeps up-to-date on international requirements and standard. High quality feed with low feed conversion ratio to help farmers lower their farming costs.<br><br>Corn and soybean meal are main ingredients used in the production of livestock feed. CPB formulated pellet feed to meet the nutrition requirements appropriate to each stage of animal rearing and growth. Production processes are computer controlled to ensure consistency in quality and specfied standard. These feeds are manufactured and packed under the following brands, CP, Hyprovite, Hi-Gro, Star Feed, Novo, Safe Feed, Erawan, Hogtonal, C.F., and Anvipro. Selling price is based on production cost at different time of the year and also under pricing guidelines of the Internal Trade Department of the Ministry of Commerce.<br><br>CPB has set up central purchasing unit responsible for procurement of all ingredients used in livestock and aquatic feed. Our procurement policy is to purchase quality raw material meeting the required nutrition standard with priority given to domestic suppliers particularly those situated in close proximity to our feedmill plants. This is to support our local farmers as well as minimize transport cost. Only when domestic supply is insufficient or has inferior quality, CPB would then seek to imports<br><br>CPB focused to improve production processes to remain cost competitive as well as employed marketing strategy to maintain quality and provide good services for both before and after-sales. CPB also provided technical knowledge to agents/distributors and directly to independent farmers through seminars and extension centers. Our technical experts are available to give advices on animal husbandry. Information is disseminated through printed materials and electronic media via the internet.<br><br>Aquatic Business Line<br><br>CPB is the pioneer and leader in the production and distribution of various forms of shrimp and fish feed such as concentrate, powder and pellet. Majority of our aquatic feed is distributed through agents/distributors located in shrimp farming areas. Some portion is sold directly to large shrimp farms. Soybean meal, fish meal and wheat flour are main ingredients used in the production of aquatic feed. Production processes are computer controlled to ensure consistency in quality and specified standard. These feeds are manufactured and packed under the following brands, CP, Star Feed, Marine, Hi-Grade, Novo, Erawan, Turbo, D-Frog, and Safe Feed.<br><br>As a market leader, CPB’s products are well recognized by consumers. An important marketing strategy is to maintain high quality product and consistent excellent customer service. Production processes are monitored and ingredients are tested to ensure quality. CPB also provided technical knowledge to agents/distributors and directly to independent farmers through seminars and academic service centers. Information is disseminated through printed materials. This is to ensure sustainability of the industry.<br><br><span style=\"font-size:9.0pt;font-family:\" verdana\",\"sans-serif\";mso-fareast-font-family:=\"\" \"times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\"></span><b><span style=\"font-size:12.0pt;font-family:\r\n\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"></span></b>', 'www.cpbangladesh.com', 'public/images/product/RXdye.jpg', 'public/images/product/L29wA.jpg', 'public/images/product/1CzES.jpg', 'public/images/product/6wnFl.jpg', 'public/images/product/gHyYK.jpg', '1', '3', '2019-09-28 10:15:14', '2020-03-19 00:24:33'),
(3, 'Farm', 'C.P. Farm', '<p>.</p><h4><p class=\"MsoNormal\"><span style=\"font-size: 11.5pt; font-family: Arial, sans-serif; font-weight: normal;\">Livestock Business Line</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">CPB’s livestock farming business includes animal breeder,\r\nlive animal, fresh eggs and processed livestock meat.</span></p><p class=\"MsoNormal\"><span style=\"font-size: 11.5pt; font-family: Arial, sans-serif; font-weight: normal;\">Animal Breeder</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">CPB is the leader in the research and development field of\r\nnatural genetic selection. The objective is to produce quality breed that is\r\nhealthy, sturdy and suitable to the farming condition of Thailand. CPB produces\r\nparent stocks of chicken broiler, duck and swine as well as broiler chick,\r\nlayer chick, layer, duck and piglet. The process starts with imported\r\ngrandparent stocks from abroad. Then CPB breeds and raises the animals for own\r\nuse and sales to independent livestock farmers and agents/distributors.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">CPB’s animal breeding farms are located in various provinces\r\nin Thailand. These farms are built based on closed and evaporative cooling\r\nsystem which is a modern farming system. The closed system is bio-secure to\r\nprevent possible entry of potential carriers. The evaporative cooling system\r\nmaintains suitable temperature in the housing unit throughout the farming\r\nperiod with automated feeding and all computer-controlled.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">Price of animal breeder is dependent of domestic supply and\r\ndemand as well as quality of the breed. CPB emphasizes after-sales services and\r\nhas branch offices all over the country to serve as academic service centers to\r\nprovide and share know-how, technical information, and marketing and distribution\r\nknowledge to farmers.</span></p><p class=\"MsoNormal\"><span style=\"font-size: 11.5pt; font-family: Arial, sans-serif; font-weight: normal;\">Live Animal, Fresh Eggs and Processed Livestock Meat</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">Products in this category include live chicken, layer egg,\r\nlive duck, duck egg, live swine, and processed livestock meat. These products\r\nare distributed to end consumers by our agents/distributors. Products are also\r\ndistributed and sold to wholesalers, retailers and company-owned food\r\nprocessing plants and other processing plants in Thailand. Prices of product\r\nfluctuate depending on the supply and demand.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">CPB emphasizes on continuous research and development in\r\nfarming technology and techniques suitable to domestic growing condition,\r\neffective disease prevention, fast growth and low feed conversion ratio for\r\nhigh productivity and low production cost. At present, CPB employs closed and\r\nevaporative cooling system with computer-controlled feeding in all of its\r\npoultry and swine farming.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">In addition to CPB-owned farms, CPB promotes chicken broiler\r\nand pig farming by providing animal breed, animal feed, animal drugs and\r\nfarming techniques and know-how to farmers who have passed the screening\r\nprocess. Most farmers participating in the program employ the evaporative\r\ncooling system and other standards adopted by CPB. The farmers are compensated\r\non the production outputs that meet standards set by CPB.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">CPB is the first company outside the European Union to be\r\nawarded with the Animal Welfare Standard, the most stringent standard to date\r\nfor export chicken. Consideration has to be given to all aspect of the animal\r\nwelfare, e.g., animal must be provided with sufficient feed and water, animal\r\nmust be raised in suitable and comfortable environment, animal is free from\r\npain and diseases, animal must have free range, and animal must not be\r\nstressed.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">Output from farming is processed into various basic\r\nprocessed meat products depending on market requirements. Some products are\r\nprocessed as fresh, some as chilled and some as frozen and sold to wholesalers\r\nand retailers, domestically and internationally. Selling price is subject to\r\nsupply and demand in each respective market or at an earlier agreed price.</span></p><p class=\"MsoNormal\"><span style=\"font-size: 11.5pt; font-family: Arial, sans-serif; font-weight: normal;\">Aquatic Business Line</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">Main products under aquatic farming are as follow:</span></p><p class=\"MsoNormal\"><span style=\"font-size: 11.5pt; font-family: Arial, sans-serif; font-weight: normal;\">Shrimp Fry and Fish Fry</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">Quality shrimp fry is an important factor to ensure success\r\nin shrimp farming. CPB invests in research and development to produce quality\r\nfry that are disease resistant and suitable for growing in different climatic\r\nconditions. Primary species is white shrimp and secondary species is black\r\ntiger shrimp.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">CPB has developed several fish breeds for commercial farming.\r\nFish fries include tubtim fish which was developed from tilapia.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">CPB’s shrimp and fish hatcheries employ good farm management\r\nand modern farming techniques with effective disease prevention and control.\r\nOur quality shrimp and fish fries are sought after. Prices depend on supply and\r\ndemand and quality of the fries.</span></p><p class=\"MsoNormal\"><span style=\"font-size: 11.5pt; font-family: Arial, sans-serif; font-weight: normal;\">Fresh Shrimp and Frozen Shrimp</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">Fresh shrimp raised and harvested from CPB’s farms are\r\nsupplied to company-owned processing plants. Shrimp fries and feed are from\r\ncompany-owned hatchery and feedmill. CPB employs closed farming system which is\r\nenvironmental friendly and bio-secure. No antibiotic is used at any stage of\r\nproduction.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: 9pt; font-family: Verdana, sans-serif; font-weight: normal;\">CPB exports frozen shrimp from its processing plants through\r\nimporters in respective market. Price is dependent on supply and demand or upon\r\nagreement based on customer’s specification.</span></p><p class=\"MsoNormal\" style=\"font-size: 10pt;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><span style=\"font-size: 10pt; line-height: 115%; font-family: Verdana, sans-serif; background-image: initial; background-attachment: initial; background-color: white; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial; font-weight: normal;\">CPB produces parent stocks of chicken broiler,\r\nduck and swine as well as broiler chick, layer chick, layer, duck and piglet.\r\nThe process starts with imported grandparent stocks from abroad. Then CPB\r\nbreeds and raises the animals</span></p></h4>', 'www.cpbangladesh.com', 'public/images/product/taWUZ.jpg', 'public/images/product/abn76.jpg', 'public/images/product/6XTxU.jpg', 'public/images/product/k8ias.jpg', 'public/images/product/XRbHY.jpg', '1', '3', '2019-09-28 10:15:14', '2020-03-19 00:03:45'),
(4, 'Food', 'C.P. Five Star', '<p>Fast food & Fresh food</p><p><br></p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, \"Lorem </p>', 'http://www.cpfworldwide.com', 'public/images/product/wk9DG.jpg', 'public/images/product/c77jG.jpg', 'public/images/product/IXiZU.jpg', 'public/images/product/0Wgmr.jpg', 'public/images/product/CGF0U.jpg', '1', '5', '2020-03-18 21:02:29', '2020-03-18 23:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `recruits`
--

CREATE TABLE `recruits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recruits`
--

INSERT INTO `recruits` (`id`, `job_title`, `deadline`, `location`, `department`, `education`, `description`, `requirement`, `experience`, `salary`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(2, 'Officer/Senior Officer/Manager2', '2019-10-31', 'Anywhere in Bangladesh.', 'Slaughterhouse Business.', 'Bachelor in any subject', '<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">- The candidate should be smart, young, energetic and polite in manner with attractive personality;</span></p>\r\n<p>&nbsp;<span style=\"font-family: \'andale mono\', times; font-size: large;\">- Good leadership, execution skill, challenge encountering attitude and ability to manage a highly result oriented sales team;</span></p>\r\n<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">- C.P. Bangladesh Co., Ltd. Favours applicants with experience in the manufacturing process and familiar with particular plant.</span></p>\r\n<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">- Familiarity with industry standard equipment and technical expertise;</span></p>\r\n<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">- Ability to create accountability and to lead by example;</span></p>\r\n<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">- Strong team building, decision-making and people management skills;</span></p>\r\n<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">- Allocate resources effectively and fully utilize assets to produce optimal results;</span></p>', '<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">- Be responsible for production output, product quality and on-time delivery;</span>\r\n</p><p><span style=\"font-family: \'andale mono\', times; font-size: large;\">- Stay up to date with latest production management best practices and concepts;</span></p>\r\n<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">- \r\nPlan and implement training and development programs to meet identified \r\nneeds and satisfy the company’s requirements for an effective and \r\nmulti-skilled workforce.</span></p>', '<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">2-5 years experience in broiler processing plant depending on area of work: Production, Quality, Planning, R&amp;D, Engineering.</span></p>', '<p><span style=\"font-family: \'andale mono\', times; font-size: large;\">Attractive package will be offered commensurate with experience &amp; qualification.</span></p>', '1', '3', '2019-10-07 00:06:21', '2019-10-07 00:06:21'),
(3, 'Sales Officer- Cattle Feed Sales', '2019-10-30', 'Anywhere in Bangladesh.', 'Cattle Feed', 'BSc/ in Animal Husbandry/ DVM (Doctorate in Veterinary Medicine)', '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Sales of Cattle Feed as per target;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Searching and expansion of new markets;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Payment collection from customers;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Follow up daily sales and report the present situation to BU Head;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Frequent market survey and reporting to BU Head;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Providing solution to buyers regarding feed/cattle.</span></p>', '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Fresh Candidates are encouraged to apply;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- The candidate should be smart, young, energetic and polite in manner with attractive personality;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Good leadership, execution skills and can do attitude;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Fluent in English and sound computer proficiency;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Able to work under pressure.</span></p>', '<p>One yeas in relevant field </p>', '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">BDT\r\n 17000-19000 plus Leave encashment, Categorized leave, Festival bonuses,\r\n Medical reimbursement, and others as per the company policies in \r\nexistence.</span></p>', '1', '3', '2019-10-07 00:39:52', '2019-10-07 00:39:52'),
(4, 'Sales Officer- Cattle Feed Sales', '2019-10-25', 'Anywhere in Bangladesh.', 'Cattle Feed', 'BSc/ in Animal Husbandry/ DVM (Doctorate in Veterinary Medicine)', '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Sales of Cattle Feed as per target;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Searching and expansion of new markets;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Payment collection from customers;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Follow up daily sales and report the present situation to BU Head;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Frequent market survey and reporting to BU Head;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Providing solution to buyers regarding feed/cattle.</span></p>', '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Fresh Candidates are encouraged to apply;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- The candidate should be smart, young, energetic and polite in manner with attractive personality;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Good leadership, execution skills and can do attitude;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Fluent in English and sound computer proficiency;</span></p><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">- Able to work under pressure.</span></p>', '<p>One yeas in relevant field </p>', '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14px;\">BDT\r\n 17000-19000 plus Leave encashment, Categorized leave, Festival bonuses,\r\n Medical reimbursement, and others as per the company policies in \r\nexistence.</span></p>', '1', '3', '2019-10-07 00:39:52', '2019-10-07 00:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(5, 'public/images/slider/UAeLr.jpeg', '1', '3', '2019-10-01 23:53:13', '2019-10-01 23:53:13'),
(6, 'public/images/slider/TLJZf.jpg', '1', '3', '2019-10-01 23:58:44', '2019-10-01 23:58:44'),
(9, 'public/images/slider/8KJgn.jpg', '1', '5', '2020-01-28 04:37:45', '2020-01-28 04:37:45'),
(10, 'public/images/slider/rq0Da.jpg', '1', '5', '2020-04-24 07:13:47', '2020-04-24 07:13:47'),
(12, 'public/images/slider/7ltLD.jpg', '1', '5', '2020-08-16 03:15:41', '2020-08-16 03:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `structures`
--

CREATE TABLE `structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `analysis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `development` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testing` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `go_Live` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `structures`
--

INSERT INTO `structures` (`id`, `analysis`, `design`, `development`, `testing`, `go_Live`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(2, '<p><span style=\"color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">An open discussion of your managerial board with our designers let\'s them gain a deeper insight of your plans, future goals and the preferred approach towards the achievement of those goals. Requirements are analyzed and milestones are defined. Expenses and required man hours are speculated along with the creation of the documentation that propels us into further stages of development.</span></p>', '<p><span style=\"color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">The understanding gained from the previous stage is used to shape models and blueprints. Findings of extensive research after the initial meeting initiate the formal designing of the product. The plans, raw at this stage, are discussed with the stakeholders and feedbacks and opinions are sent back and forth until one of the many proposed designs is finalized and sent to the technical team.</span></p>', '<p><span style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: normal; text-align: start; background-color: rgb(255, 255, 255); float: none; display: inline !important;\">Ideas start taking shape and the process is streamlined with a singular vision to deliver the best product that meets all the business requirements and more. Our designers and technical experts work together to create a newsworthy online presence for your business. Hours of diligent work with regular inputs from the business bring an end to the most important segment of all the<span style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent;\">&nbsp;</span></span><strong style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: normal; text-align: start; background-color: rgb(255, 255, 255);\">web development phases<span style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent;\">&nbsp;</span></strong><span style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: normal; text-align: start; background-color: rgb(255, 255, 255); float: none; display: inline !important;\">wherein the final product is ready to be taken to the next level.</span></p>', '<p><span style=\"color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.3px; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">The end product is put through multiple rounds of rigorous testing to ensure it is bug-free with all functionalities operating as expected. Several rounds of unit testing and system integration testing assess the work done through the above</span><span style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.3px; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</span><strong style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700; color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: 0.3px; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">web development phases<span style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent;\">&nbsp;</span></strong><span style=\"color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.3px; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">and changes are made wherever a discrepancy is witnessed. Only after getting a sign-off on the UAT the testing phase is brought to an end.</span></p>', '<p><span style=\"color: rgb(98, 98, 98); font-family: Poppins, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">After all the quality checks and a green signal from the business the website is launched. After initial support on day-to-day activities the reins are handed over to the business. However, our post deployment maintenance services render necessary assistance and troubleshooting services.</span></p>', '1', '3', '2019-09-25 04:10:20', '2019-09-25 04:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `s_r_s`
--

CREATE TABLE `s_r_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_r_s`
--

INSERT INTO `s_r_s` (`id`, `date`, `title`, `details`, `document`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(3, '2016-12-15', 'Corporate Social Responsibility', '<p>CSR for Special Children<br></p>', 'public/images/sr/wm0vC.jpg', 'public/images/sr/MVqem.jpg', '1', '5', '2019-12-19 05:49:31', '2019-12-19 05:49:31'),
(4, '2018-12-01', 'Corporate Social Responsibility', '<p>&nbsp;Goat donation to the poor people.<br></p>', 'public/images/sr/TtzRL.jpg', 'public/images/sr/cwbi0.jpg', '1', '5', '2019-12-19 05:52:47', '2019-12-19 05:53:43'),
(5, '2019-12-10', 'Corporate Social Responsibility', '<p>CSR activities in Chittagong area<br></p>', 'public/images/sr/oNpm9.jpg', 'public/images/sr/2RiEm.jpg', '1', '5', '2019-12-25 00:28:55', '2019-12-25 00:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `trdevs`
--

CREATE TABLE `trdevs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trdevs`
--

INSERT INTO `trdevs` (`id`, `date`, `title`, `details`, `document`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(2, '2019-09-29', 'What is Lorem Ipsumffff?', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 'public/images/trdev/P2ibA.png', 'public/images/trdev/BldjI.png', '1', '3', '2019-09-27 07:56:49', '2019-09-27 07:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_login_logs`
--

CREATE TABLE `user_login_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_login_logs`
--

INSERT INTO `user_login_logs` (`id`, `login_id`, `ip`, `os`, `device`, `browser`, `city`, `country`, `status`, `logout`, `created_at`, `updated_at`) VALUES
(1, 'admin', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-10-08 22:17:34', '2019-10-08 22:17:34'),
(2, 'syful.cse.bd@gmail.com', '::1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-10-09 00:05:30', '2019-10-09 00:05:30'),
(3, 'syful.cse.bd@gmail.com', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-09 06:52:57', '2019-10-09 00:32:53', '2019-10-09 00:52:57'),
(4, 'syful.cse.bd@gmail.com', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-09 09:47:34', '2019-10-09 00:53:20', '2019-10-09 03:47:34'),
(5, NULL, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '0', NULL, '2019-10-09 02:48:08', '2019-10-09 02:48:08'),
(6, 'syful.cse.bd@gmail.com', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-09 10:45:43', '2019-10-09 03:47:47', '2019-10-09 04:45:43'),
(7, 'syful.cse.bd@gmail.com', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-09 10:59:07', '2019-10-09 04:47:32', '2019-10-09 04:59:07'),
(8, 'syful.cse.bd@gmail.com', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-09 04:59:44', '2019-10-09 04:59:44'),
(9, 'syful.cse.bd@gmail.com', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', NULL, '2019-10-09 20:51:26', '2019-10-09 20:51:26'),
(10, 'syful.cse.bd@gmail.com', '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-13 09:37:17', '2019-10-13 03:23:02', '2019-10-13 03:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_regs`
--

CREATE TABLE `user_regs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_regs`
--

INSERT INTO `user_regs` (`id`, `name`, `contact`, `address`, `email`, `password`, `document`, `image`, `verify`, `token`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(4, 'syful Islam', '555555555555555555', 'sdgsgs', 'syful.cse.bd@gmail.com', '5683', 'public/images/user/GTaYZ.png', 'public/images/user/Qy8J7.png', '1', 'kBBvClPv3sMERpu8J1B8', '1', '3', '2019-10-07 05:35:34', '2019-10-09 03:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions`
--

INSERT INTO `visions` (`id`, `title`, `details`, `image`, `status`, `publish_by`, `created_at`, `updated_at`) VALUES
(1, 'Kitchen of Bangladesh', '<p>C.P.Bangladesh Co. Ltd. is working with a vision to reach all the kitchens across Bangladesh.<br></p>', 'public/images/vision/4dcr7.jpg', '1', '3', '2020-02-21 23:03:40', '2020-03-19 00:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_logs`
--

CREATE TABLE `visitor_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_logs`
--

INSERT INTO `visitor_logs` (`id`, `ip`, `os`, `device`, `browser`, `city`, `country`, `count`, `created_at`, `updated_at`) VALUES
(2, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-06 15:25:46', '2019-09-06 15:25:46'),
(3, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-06 15:46:33', '2019-09-06 15:46:33'),
(4, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-06 15:49:27', '2019-09-06 15:49:27'),
(5, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-06 15:49:47', '2019-09-06 15:49:47'),
(7, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '7', '2019-09-07 03:32:51', '2019-09-07 14:37:27'),
(8, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '70', '2019-08-01 15:46:33', '2019-09-06 15:46:33'),
(9, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '20', '2019-07-02 15:49:27', '2019-09-06 15:49:27'),
(10, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '50', '2019-06-06 15:49:47', '2019-09-06 15:49:47'),
(11, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '40', '2019-05-06 15:46:33', '2019-09-06 15:46:33'),
(12, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '57', '2019-04-06 15:49:47', '2019-09-06 15:49:47'),
(13, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '40', '2019-04-06 15:46:33', '2019-09-06 15:46:33'),
(14, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '27', '2019-03-06 15:46:33', '2019-09-06 15:46:33'),
(15, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '26', '2019-02-06 15:49:27', '2019-09-06 15:49:27'),
(16, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '10', '2019-01-06 15:46:33', '2019-09-06 15:46:33'),
(18, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '100', '2019-11-06 15:46:33', '2019-09-06 15:46:33'),
(19, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '90', '2019-10-06 15:46:33', '2019-09-06 15:46:33'),
(20, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '90', '2018-10-06 15:46:33', '2019-09-06 15:46:33'),
(21, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '90', '2018-01-06 15:46:33', '2019-09-06 15:46:33'),
(22, '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-09-07 10:35:48', '2019-09-07 10:35:52'),
(23, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-09-08 05:44:53', '2019-09-08 05:45:19'),
(24, '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-10 02:54:52', '2019-09-10 02:54:52'),
(25, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '6', '2019-09-10 03:16:09', '2019-09-10 03:25:24'),
(26, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '5', '2019-09-15 12:49:58', '2019-09-15 12:50:52'),
(27, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-09-16 11:40:06', '2019-09-16 11:41:52'),
(28, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-09-18 11:17:03', '2019-09-18 11:28:10'),
(29, 'UNKNOWN', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-18 11:24:04', '2019-09-18 11:24:04'),
(30, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '14', '2019-09-19 05:06:25', '2019-09-19 12:05:31'),
(31, 'UNKNOWN', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '3', '2019-09-19 05:30:29', '2019-09-19 05:47:54'),
(32, '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-09-19 05:52:44', '2019-09-19 15:44:37'),
(33, '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-21 03:31:22', '2019-09-21 03:31:22'),
(34, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-21 04:11:17', '2019-09-21 04:11:17'),
(35, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '3', '2019-09-25 04:45:35', '2019-09-25 04:49:16'),
(36, '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-09-25 04:46:15', '2019-09-25 14:15:26'),
(37, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '20', '2019-12-10 03:16:09', '2019-09-10 03:25:24'),
(38, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '5', '2018-12-11 12:49:58', '2019-09-15 12:50:52'),
(39, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-09-16 11:40:06', '2019-09-16 11:41:52'),
(40, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-09-18 11:17:03', '2019-09-18 11:28:10'),
(41, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '7', '2019-09-29 02:36:32', '2019-09-29 05:36:51'),
(42, '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-09-29 03:44:26', '2019-09-29 03:44:26'),
(43, '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '4', '2019-09-30 02:39:04', '2019-09-30 06:52:49'),
(44, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '4', '2019-09-30 02:49:42', '2019-09-30 06:47:49'),
(45, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '22', '2019-10-01 11:00:54', '2019-10-01 11:29:52'),
(46, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-10-15 05:37:01', '2019-10-15 05:37:16'),
(47, '::1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-10-18 22:47:19', '2019-10-18 22:47:53'),
(48, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-10-18 22:50:24', '2019-10-18 22:50:24'),
(49, '127.0.0.1', 'Windows 10', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2019-11-05 00:12:53', '2019-11-05 03:32:42'),
(50, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '6', '2019-11-05 04:24:18', '2019-11-05 04:25:42'),
(51, '134.209.161.93', 'Windows 7', 'Computer', 'Chrome', 'Clifton', 'US', '1', '2019-11-05 06:22:16', '2019-11-05 06:22:16'),
(52, '68.183.60.194', 'Windows 7', 'Computer', 'Chrome', 'Clifton', 'US', '1', '2019-11-10 06:32:05', '2019-11-10 06:32:05'),
(53, '134.209.174.188', 'Windows 7', 'Computer', 'Chrome', 'Clifton', 'US', '1', '2019-11-15 06:38:45', '2019-11-15 06:38:45'),
(54, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '4', '2019-11-19 03:21:46', '2019-11-19 05:11:44'),
(55, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-11-19 22:34:23', '2019-11-19 22:34:23'),
(56, '46.101.161.116', 'Windows 7', 'Computer', 'Chrome', 'Frankfurt am Main', 'DE', '1', '2019-11-20 06:50:32', '2019-11-20 06:50:32'),
(57, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-11-23 21:48:15', '2019-11-23 21:48:15'),
(58, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '13', '2019-11-25 03:34:06', '2019-11-25 05:00:04'),
(59, '138.197.109.151', 'Windows 7', 'Computer', 'Chrome', 'Clifton', 'US', '1', '2019-11-25 06:57:52', '2019-11-25 06:57:52'),
(60, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '3', '2019-11-27 23:38:32', '2019-11-27 23:41:55'),
(61, '54.36.150.155', 'Unknown OS Platform', 'Computer', 'Unknown Browser', 'Roubaix', 'FR', '1', '2019-11-28 13:51:09', '2019-11-28 13:51:09'),
(62, '46.101.161.116', 'Windows 7', 'Computer', 'Chrome', 'Frankfurt am Main', 'DE', '1', '2019-11-30 07:08:57', '2019-11-30 07:08:57'),
(63, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '3', '2019-11-30 23:44:19', '2019-11-30 23:44:59'),
(64, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '2', '2019-12-04 02:17:01', '2019-12-04 02:17:53'),
(65, '54.36.148.174', 'Unknown OS Platform', 'Computer', 'Unknown Browser', 'Roubaix', 'FR', '1', '2019-12-04 19:09:22', '2019-12-04 19:09:22'),
(66, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '3', '2019-12-07 04:48:29', '2019-12-07 04:48:45'),
(67, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-12-07 23:27:29', '2019-12-07 23:27:29'),
(68, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2019-12-08 22:06:38', '2019-12-08 22:06:38'),
(69, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '5', '2019-12-10 01:08:04', '2019-12-10 03:07:53'),
(70, '54.36.149.64', 'Unknown OS Platform', 'Computer', 'Unknown Browser', 'Roubaix', 'FR', '1', '2019-12-10 21:45:09', '2019-12-10 21:45:09'),
(71, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '13', '2019-12-16 21:31:12', '2019-12-17 02:32:39'),
(72, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '5', '2019-12-19 03:59:09', '2019-12-19 05:59:13'),
(73, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '3', '2019-12-25 00:03:07', '2019-12-25 00:20:00'),
(74, '119.30.32.45', 'Windows 8.1', 'Computer', 'Firefox', 'Dhaka', 'BD', '6', '2019-12-26 00:55:45', '2019-12-26 02:40:45'),
(75, '103.88.142.226', 'Windows 8.1', 'Computer', 'Firefox', 'Azimpur', 'BD', '1', '2020-01-03 00:50:14', '2020-01-03 00:50:14'),
(76, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '11', '2020-01-04 23:30:18', '2020-01-05 00:27:48'),
(77, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '4', '2020-01-07 05:21:15', '2020-01-07 05:58:11'),
(78, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', '2020-01-09 10:57:40', '2020-01-09 10:57:40'),
(79, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2020-01-11 23:15:20', '2020-01-12 03:04:12'),
(80, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', '2020-01-17 23:28:28', '2020-01-17 23:28:28'),
(81, '54.36.148.177', 'Unknown OS Platform', 'Computer', 'Unknown Browser', 'Roubaix', 'FR', '1', '2020-01-19 11:37:01', '2020-01-19 11:37:01'),
(82, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2020-01-21 04:36:08', '2020-01-21 04:36:08'),
(83, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '5', '2020-01-22 22:20:05', '2020-01-23 00:48:29'),
(84, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '3', '2020-01-25 05:01:42', '2020-01-25 05:11:18'),
(85, '10.64.5.1', 'Windows 8.1', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '2', '2020-01-25 22:03:17', '2020-01-25 22:05:40'),
(86, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '6', '2020-01-28 04:24:45', '2020-01-28 04:49:55'),
(87, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '7', '2020-01-29 00:05:56', '2020-01-29 05:46:08'),
(88, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '7', '2020-02-11 02:58:43', '2020-02-11 05:56:03'),
(89, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '2', '2020-02-12 03:00:46', '2020-02-12 04:17:34'),
(90, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '4', '2020-02-13 03:44:30', '2020-02-13 05:28:15'),
(91, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '3', '2020-02-14 23:04:29', '2020-02-14 23:14:51'),
(92, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '2', '2020-02-19 22:49:43', '2020-02-19 22:51:13'),
(93, '54.36.149.88', 'Unknown OS Platform', 'Computer', 'Unknown Browser', 'La Motte', 'FR', '1', '2020-02-25 17:16:30', '2020-02-25 17:16:30'),
(94, '123.108.244.96', 'Windows 8.1', 'Computer', 'Firefox', 'Dhaka', 'BD', '2', '2020-03-16 03:01:36', '2020-03-16 03:20:01'),
(95, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '4', '2020-03-16 04:11:09', '2020-03-16 04:29:35'),
(96, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '15', '2020-03-18 20:32:40', '2020-03-19 02:57:44'),
(97, '10.64.5.1', 'Windows 7', 'Computer', 'Firefox', 'NotGenerate', 'NotGenerate', '1', '2020-03-24 04:32:53', '2020-03-24 04:32:53'),
(98, '54.36.148.7', 'Unknown OS Platform', 'Computer', 'Unknown Browser', 'Paris', 'FR', '1', '2020-04-08 14:24:08', '2020-04-08 14:24:08'),
(99, '54.36.150.6', 'Unknown OS Platform', 'Computer', 'Unknown Browser', 'Paris', 'FR', '1', '2020-04-10 06:01:13', '2020-04-10 06:01:13'),
(100, '119.30.46.208', 'Windows 8.1', 'Computer', 'Firefox', 'Dhaka', 'BD', '1', '2020-04-16 00:02:44', '2020-04-16 00:02:44'),
(101, '54.36.150.39', 'Unknown OS Platform', 'Computer', 'Unknown Browser', 'Paris', 'FR', '1', '2020-04-16 12:33:55', '2020-04-16 12:33:55'),
(102, '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '4', '2020-04-24 07:12:45', '2020-04-24 07:22:56'),
(103, '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '4', '2020-04-25 23:22:30', '2020-04-25 23:34:28'),
(104, '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '2', '2020-04-28 23:03:06', '2020-04-28 23:11:11'),
(105, '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '2', '2020-04-29 23:01:46', '2020-04-29 23:04:12'),
(106, '122.152.49.214', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '4', '2020-05-12 23:37:26', '2020-05-12 23:38:30'),
(107, '103.88.142.226', 'Windows 8.1', 'Computer', 'Firefox', 'Dhaka', 'BD', '1', '2020-06-10 05:06:24', '2020-06-10 05:06:24'),
(108, '37.111.201.204', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '4', '2020-07-22 21:36:59', '2020-07-23 03:46:15'),
(109, '119.30.46.163', 'Windows 8.1', 'Computer', 'Firefox', 'Dhaka', 'BD', '3', '2020-07-22 23:23:13', '2020-07-23 00:37:53'),
(110, '119.30.32.73', 'Windows 8.1', 'Computer', 'Firefox', 'Dhaka', 'BD', '2', '2020-07-23 05:27:37', '2020-07-23 05:31:24'),
(111, '37.111.205.108', 'Windows 10', 'Computer', 'Chrome', 'Dhaka', 'BD', '1', '2020-07-27 21:33:54', '2020-07-27 21:33:54'),
(112, '123.108.244.57', 'Windows 8.1', 'Computer', 'Firefox', 'Dhaka', 'BD', '3', '2020-08-16 02:40:30', '2020-08-16 05:39:15'),
(113, '37.111.231.137', 'Windows 10', 'Computer', 'Chrome', 'Ishurdi', 'BD', '4', '2020-08-16 02:54:42', '2020-08-16 03:16:21'),
(114, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '7', '2021-03-22 11:10:41', '2021-03-22 11:16:13'),
(115, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', '2021-03-23 22:30:42', '2021-03-23 22:30:42'),
(116, '10.64.5.1', 'Windows 10', 'Computer', 'Chrome', 'NotGenerate', 'NotGenerate', '1', '2021-03-27 20:38:09', '2021-03-27 20:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_msgs`
--

CREATE TABLE `visitor_msgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_msgs`
--

INSERT INTO `visitor_msgs` (`id`, `name`, `contact`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'syful Islam', '01707080401', 'syful.cse.bd@gmail.com', 'This is demoo', '2019-10-05 04:33:51', '2019-10-05 04:33:51'),
(2, 'syful Islam', '01707080401', 'syful.cse.bd@gmail.com', 'ndfngjrfjmry', '2019-10-14 03:34:15', '2019-10-14 03:34:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applies`
--
ALTER TABLE `applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_uoperations`
--
ALTER TABLE `b_uoperations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chairman_msgs`
--
ALTER TABLE `chairman_msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headquarters`
--
ALTER TABLE `headquarters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president_msgs`
--
ALTER TABLE `president_msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presses`
--
ALTER TABLE `presses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruits`
--
ALTER TABLE `recruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_r_s`
--
ALTER TABLE `s_r_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trdevs`
--
ALTER TABLE `trdevs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login_logs`
--
ALTER TABLE `user_login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_regs`
--
ALTER TABLE `user_regs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_msgs`
--
ALTER TABLE `visitor_msgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applies`
--
ALTER TABLE `applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `b_uoperations`
--
ALTER TABLE `b_uoperations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chairman_msgs`
--
ALTER TABLE `chairman_msgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `headquarters`
--
ALTER TABLE `headquarters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `president_msgs`
--
ALTER TABLE `president_msgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `presses`
--
ALTER TABLE `presses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recruits`
--
ALTER TABLE `recruits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `structures`
--
ALTER TABLE `structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `s_r_s`
--
ALTER TABLE `s_r_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trdevs`
--
ALTER TABLE `trdevs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login_logs`
--
ALTER TABLE `user_login_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_regs`
--
ALTER TABLE `user_regs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `visitor_msgs`
--
ALTER TABLE `visitor_msgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
