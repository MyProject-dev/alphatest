-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2015 at 05:08 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fs_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
`ano` bigint(25) unsigned NOT NULL,
  `mno` bigint(25) DEFAULT NULL COMMENT 'doing the action',
  `action` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'what the user did',
  `_table` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'table name',
  `_table_id` bigint(25) DEFAULT NULL COMMENT 'table id',
  `_date` datetime NOT NULL COMMENT 'date when it was happens',
  `active` tinyint(1) NOT NULL COMMENT 'status of the activity and know where to be shown'
) ENGINE=MyISAM AUTO_INCREMENT=1489 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`ano`, `mno`, `action`, `_table`, `_table_id`, `_date`, `active`) VALUES
(1486, 1022, 'Posted', 'fs_postedarticles', 44, '2015-10-09 07:18:47', 1),
(1487, 1021, 'Posted', 'postedlooks', 222390, '2015-10-09 08:09:47', 1),
(1488, 1022, 'Posted', 'postedlooks', 222391, '2015-10-09 08:16:05', 1),
(1459, 1021, 'Posted', 'fs_postedarticles', 37, '2015-10-08 07:59:40', 1),
(1485, 1022, 'Posted', 'fs_postedarticles', 43, '2015-10-09 07:18:20', 1),
(1484, 1022, 'Posted', 'fs_postedarticles', 42, '2015-10-09 07:17:51', 1),
(1483, 1021, 'Posted', 'fs_postedarticles', 41, '2015-10-09 07:15:07', 1),
(1482, 1021, 'Posted', 'fs_postedarticles', 40, '2015-10-09 07:14:40', 1),
(1481, 1021, 'Posted', 'fs_postedarticles', 39, '2015-10-09 07:14:03', 1),
(1474, 1021, 'Posted', 'postedlooks', 222389, '2015-10-08 08:39:01', 1),
(1473, 1021, 'Posted', 'fs_postedarticles', 38, '2015-10-08 08:38:11', 1),
(1480, 1022, 'Following', 'fs_member_profile_pic', 1042, '2015-10-08 08:51:58', 1),
(1458, 1021, 'Posted', 'fs_postedarticles', 36, '2015-10-08 07:30:10', 1),
(1457, 1021, 'Posted', 'fs_postedarticles', 35, '2015-10-08 07:29:20', 1),
(1456, 1021, 'Posted', 'fs_postedarticles', 34, '2015-10-08 07:29:01', 1),
(1455, 1021, 'Posted', 'fs_postedarticles', 33, '2015-10-08 07:28:16', 1),
(1454, 1021, 'Posted', 'fs_postedarticles', 32, '2015-10-08 07:26:56', 1),
(1453, 1021, 'Posted', 'fs_postedarticles', 31, '2015-10-08 07:26:28', 1),
(1452, 1021, 'Posted', 'fs_postedarticles', 30, '2015-10-08 07:25:54', 1),
(1450, 1021, 'Posted', 'fs_postedarticles', 28, '2015-10-08 07:22:44', 1),
(1451, 1021, 'Posted', 'fs_postedarticles', 29, '2015-10-08 07:24:31', 1),
(1449, 1021, 'Posted', 'fs_postedarticles', 27, '2015-10-08 06:11:46', 1),
(1448, 1022, 'Favorited', 'fs_postedarticles', 25, '2015-10-07 08:24:13', 1),
(1447, 1022, 'Favorited and Liked', 'fs_postedarticles', 26, '2015-10-07 07:46:21', 1),
(1443, 1021, 'Posted', 'fs_postedarticles', 24, '2015-10-07 05:15:25', 1),
(1444, 1021, 'Posted', 'fs_postedarticles', 25, '2015-10-07 05:15:41', 2),
(1445, 1021, 'Commented', 'fs_postedarticles', 26, '2015-10-07 05:34:07', 2),
(1446, 1021, 'Commented', 'postedlooks', 222388, '2015-10-07 05:34:02', 1),
(1442, 1021, 'Posted', 'fs_postedarticles', 23, '2015-10-07 05:14:57', 1),
(1441, 1021, 'Posted', 'fs_postedarticles', 22, '2015-10-06 06:54:44', 1),
(1440, 1021, 'Posted', 'fs_postedarticles', 21, '2015-10-06 06:54:07', 1),
(1439, 1021, 'Posted', 'fs_postedarticles', 20, '2015-10-06 06:53:03', 1),
(1438, 1022, 'Posted', 'postedlooks', 222388, '2015-10-06 06:28:51', 2),
(1437, 1022, 'Favorited', 'postedlooks', 222380, '2015-10-07 07:45:19', 2),
(1436, 1022, 'Updated', 'fs_member_profile_pic', 1044, '2015-10-05 08:07:59', 1),
(1435, 1021, 'Updated', 'fs_member_profile_pic', 1042, '2015-10-05 07:22:22', 2),
(1434, 1021, 'Posted', 'fs_postedarticles', 19, '2015-10-05 07:21:28', 1),
(1433, 1021, 'Posted', 'fs_postedarticles', 18, '2015-10-05 07:20:48', 1),
(1432, 1021, 'Posted', 'postedlooks', 222387, '2015-10-05 07:19:41', 1),
(1431, 1021, 'Posted', 'postedlooks', 222386, '2015-10-05 07:18:58', 1),
(1430, 1021, 'Posted', 'postedlooks', 222385, '2015-10-05 07:18:32', 1),
(1429, 1021, 'Posted', 'postedlooks', 222384, '2015-10-05 07:17:56', 1),
(1428, 1021, 'Posted', 'postedlooks', 222383, '2015-10-05 07:17:31', 1),
(1427, 1021, 'Posted', 'postedlooks', 222382, '2015-10-05 07:15:18', 1),
(1426, 1021, 'Posted', 'postedlooks', 222381, '2015-10-05 07:14:59', 1),
(1425, 1021, 'Posted', 'fs_postedarticles', 17, '2015-10-05 07:13:05', 1),
(1424, 1021, 'Posted', 'fs_postedarticles', 16, '2015-10-05 07:12:50', 1),
(1423, 1021, 'Posted', 'fs_postedarticles', 15, '2015-10-05 07:12:27', 1),
(1422, 1021, 'Posted', 'fs_postedarticles', 14, '2015-10-05 07:11:36', 1),
(1421, 1021, 'Posted', 'fs_postedarticles', 13, '2015-10-05 07:11:16', 1),
(1420, 1021, 'Posted', 'fs_postedarticles', 12, '2015-10-05 07:10:40', 1),
(1419, 1021, 'Posted', 'fs_postedarticles', 11, '2015-10-05 07:10:35', 1),
(1418, 1021, 'Posted', 'fs_postedarticles', 10, '2015-10-05 07:10:02', 1),
(1417, 1021, 'Posted', 'fs_postedarticles', 9, '2015-10-05 07:09:43', 1),
(1416, 1021, 'Posted', 'fs_postedarticles', 8, '2015-10-05 07:09:36', 1),
(1415, 1021, 'Posted', 'fs_postedarticles', 7, '2015-10-05 07:09:06', 1),
(1414, 1021, 'Posted', 'fs_postedarticles', 6, '2015-10-05 07:08:31', 1),
(1413, 1021, 'Posted', 'fs_postedarticles', 5, '2015-10-05 07:08:07', 1),
(1412, 1021, 'Posted', 'fs_postedarticles', 4, '2015-10-05 07:06:25', 1),
(1411, 1021, 'Posted', 'fs_postedarticles', 3, '2015-10-05 07:05:19', 1),
(1410, 1021, 'Posted', 'fs_postedarticles', 2, '2015-10-05 06:49:44', 1),
(1409, 1021, 'Posted', 'fs_postedarticles', 1, '2015-10-05 06:49:00', 1),
(1408, 1021, 'Commented', 'postedlooks', 222380, '2015-10-08 07:05:56', 1),
(1407, 1021, 'Updated', 'fs_member_profile_pic', 1041, '2015-10-05 05:10:50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`adm_no` int(20) NOT NULL,
  `adm_user` varchar(100) NOT NULL,
  `adm_pass` varchar(100) NOT NULL,
  `adm_reg` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_no`, `adm_user`, `adm_pass`, `adm_reg`) VALUES
(2, '@admin', '@pass', '2013-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
`ano` int(11) NOT NULL,
  `admin_no` bigint(11) NOT NULL,
  `client_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci,
  `ext` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ano`, `admin_no`, `client_name`, `company_name`, `link`, `ext`, `date_uploaded`) VALUES
(12, 1, 'gawapo', 'hahahaha', 'https://www.google.com.ph/', 'gif', '2012-01-01'),
(18, 1, '', 'swag', 'fb', 'png', '2012-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
`id` int(25) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `content`, `date`) VALUES
(1, 'test', 'this is the current text of the id and class div or the page', '2015-01-09 06:41:58'),
(2, 'test1', 'this is the second content', '2015-01-09 06:44:45'),
(3, '[[test]] [[this is the content for the test]]', '', '2015-01-09 07:40:26'),
(4, '[[test]] [[this is the content for the test]]', '', '2015-01-09 07:41:06'),
(5, '[[test]] [[this is the content for the test]]', '', '2015-01-09 07:43:56'),
(6, '[[test]] [[this is the content for the test]]', '', '2015-01-09 07:44:11'),
(7, '[[test]] [[this is the content for the test]]', '', '2015-01-09 07:44:25'),
(8, 'invite', 'this is the invite', '2015-01-09 07:50:41'),
(9, 'invite', '<p> this is the invite </p>\n<p> here we go</p>\n<b> this is the invite </b>\n\n', '2015-01-09 07:51:32'),
(10, 'invite', '<a href="http://www.google.com"> a </a>', '2015-01-09 07:52:10'),
(11, 'invite', '<a href=''http://www.google.com''> a </a>', '2015-01-09 07:52:41'),
(12, 'invite', '<a href=''http://www.google.com''> a </a>', '2015-01-09 07:54:25'),
(13, 'invite', '<a href=''http://www.google.com''> a </a>', '2015-01-09 07:54:36'),
(14, 'invited', 'asdasd', '2015-01-09 08:00:08'),
(15, 'sample', 'this is a sample\r\n', '2015-01-09 08:09:39'),
(16, 'signup', '<div class=''lead''> \r\n		                                <p class=''text-3''> Hi,   </p>\r\n		                                <p>  \r\n		                                   My name is <b>Mauricio</b>, I''m the Founder & Creative Director at Fashion Sponge. When it comes to online communities, I know you have a lot of choices, so I want to personally thank you for visiting and signing up.\r\n		                                </p>\r\n		                                <p> \r\n		                                    We would love to invite everyone but membership is restricted to bloggers who consistently create compelling high quality fashion and lifestyle content. Once someone from Fashion Sponge visits the link you provided, you will receive a response in the order you signed up. \r\n		                                </p> \r\n		                            </div> \r\n\r\n		                         \r\n\r\n\r\n		                            <div class=''lead''> \r\n	                                    <p class=''text-2'' style=''color: #b01e23; ''> \r\n	                                    	<b style=''font-size:13px;'' >HAVE ANY QUESTIONS OR SUGGESTIONS?</b> \r\n	                                    </p>   \r\n	                                    <p>  \r\n	                                        If you have any questions or suggestions please feel free to email me. I''m always happy to receive feedback, but most importantly I love connecting with people!\r\n	                                    </p>                                 \r\n		                            </div> \r\n	                                <div class=''lead'' style=''padding-top:20px;font-weight:bold''>   \r\n	                                    <b style=''font-size:13px;'' >THANK YOU AGAIN FOR YOUR SUPPORT!</b>	\r\n	                                </div> \r\n		                            <div class=''lead''> \r\n		                                <p>\r\n		                                  	<span style=''color: black;''>   \r\n		                                        <a style=''color:#696969;''>Mauricio@fashionsponge.com</a> \r\n		                                    </span>\r\n		                                 </p>\r\n		                            </div> ', '2015-01-09 08:13:28'),
(17, 'signup', '<div class=''lead''> \r\n		                                <p class=''text-3''> Hi Jesus Erwin Suarez,   </p>\r\n		                                <p>  \r\n		                                   My name is <b>Mauricio More</b>, I''m the Founder & Creative Director at Fashion Sponge. When it comes to online communities, I know you have a lot of choices, so I want to personally thank you for visiting and signing up.\r\n		                                </p>\r\n		                                <p> \r\n		                                    We would love to invite everyone but membership is restricted to bloggers who consistently create compelling high quality fashion and lifestyle content. Once someone from Fashion Sponge visits the link you provided, you will receive a response in the order you signed up. \r\n		                                </p> \r\n		                            </div> \r\n\r\n		                         \r\n\r\n\r\n		                            <div class=''lead''> \r\n	                                    <p class=''text-2'' style=''color: #b01e23; ''> \r\n	                                    	<b style=''font-size:13px;'' >HAVE ANY QUESTIONS OR SUGGESTIONS?</b> \r\n	                                    </p>   \r\n	                                    <p>  \r\n	                                        If you have any questions or suggestions please feel free to email me. I''m always happy to receive feedback, but most importantly I love connecting with people!\r\n	                                    </p>                                 \r\n		                            </div> \r\n	                                <div class=''lead'' style=''padding-top:20px;font-weight:bold''>   \r\n	                                    <b style=''font-size:13px;'' >THANK YOU AGAIN FOR YOUR SUPPORT!</b>	\r\n	                                </div> \r\n		                            <div class=''lead''> \r\n		                                <p>\r\n		                                  	<span style=''color: black;''>   \r\n		                                        <a style=''color:#696969;''>Mauricio@fashionsponge.com</a> \r\n		                                    </span>\r\n		                                 </p>\r\n		                            </div> ', '2015-01-09 08:14:16'),
(18, 'signup', '<div class=\\''lead\\''> \\r\\n		                                <p class=\\''text-3\\''> Hi How are you,   </p>\\r\\n		                                <p>  \\r\\n		                                   My name is <b>Mauricio</b>, I\\''m the Founder & Creative Director at Fashion Sponge. When it comes to online communities, I know you have a lot of choices, so I want to personally thank you for visiting and signing up.\\r\\n		                                </p>\\r\\n		                                <p> \\r\\n		                                    We would love to invite everyone but membership is restricted to bloggers who consistently create compelling high quality fashion and lifestyle content. Once someone from Fashion Sponge visits the link you provided, you will receive a response in the order you signed up. \\r\\n		                                </p> \\r\\n		                            </div> \\r\\n\\r\\n		                         \\r\\n\\r\\n\\r\\n		                            <div class=\\''lead\\''> \\r\\n	                                    <p class=\\''text-2\\'' style=\\''color: #b01e23; \\''> \\r\\n	                                    	<b style=\\''font-size:13px;\\'' >HAVE ANY QUESTIONS OR SUGGESTIONS?</b> \\r\\n	                                    </p>   \\r\\n	                                    <p>  \\r\\n	                                        If you have any questions or suggestions please feel free to email me. I\\''m always happy to receive feedback, but most importantly I love connecting with people!\\r\\n	                                    </p>                                 \\r\\n		                            </div> \\r\\n	                                <div class=\\''lead\\'' style=\\''padding-top:20px;font-weight:bold\\''>   \\r\\n	                                    <b style=\\''font-size:13px;\\'' >THANK YOU AGAIN FOR YOUR SUPPORT!</b>	\\r\\n	                                </div> \\r\\n		                            <div class=\\''lead\\''> \\r\\n		                                <p>\\r\\n		                                  	<span style=\\''color: black;\\''>   \\r\\n		                                        <a style=\\''color:#696969;\\''>Mauricio@fashionsponge.com</a> \\r\\n		                                    </span>\\r\\n		                                 </p>\\r\\n		                            </div> ', '2015-01-09 08:16:04'),
(19, 'signupnow', '<div class=\\''lead\\''> \\r\\n		                                <p class=\\''text-3\\''> Hi,   </p>\\r\\n		                                <p>  \\r\\n		                                   My name is <b>Mauricio</b>, I\\''m the Founder & Creative Director at Fashion Sponge. When it comes to online communities, I know you have a lot of choices, so I want to personally thank you for visiting and signing up.\\r\\n		                                </p>\\r\\n		                                <p> \\r\\n		                                    We would love to invite everyone but membership is restricted to bloggers who consistently create compelling high quality fashion and lifestyle content. Once someone from Fashion Sponge visits the link you provided, you will receive a response in the order you signed up. \\r\\n		                                </p> \\r\\n		                            </div> \\r\\n\\r\\n		                         \\r\\n\\r\\n\\r\\n		                            <div class=\\''lead\\''> \\r\\n	                                    <p class=\\''text-2\\'' style=\\''color: #b01e23; \\''> \\r\\n	                                    	<b style=\\''font-size:13px;\\'' >HAVE ANY QUESTIONS OR SUGGESTIONS?</b> \\r\\n	                                    </p>   \\r\\n	                                    <p>  \\r\\n	                                        If you have any questions or suggestions please feel free to email me. I\\''m always happy to receive feedback, but most importantly I love connecting with people!\\r\\n	                                    </p>                                 \\r\\n		                            </div> \\r\\n	                                <div class=\\''lead\\'' style=\\''padding-top:20px;font-weight:bold\\''>   \\r\\n	                                    <b style=\\''font-size:13px;\\'' >THANK YOU AGAIN FOR YOUR SUPPORT!</b>	\\r\\n	                                </div> \\r\\n		                            <div class=\\''lead\\''> \\r\\n		                                <p>\\r\\n		                                  	<span style=\\''color: black;\\''>   \\r\\n		                                        <a style=\\''color:#696969;\\''>Mauricio@fashionsponge.com</a> \\r\\n		                                    </span>\\r\\n		                                 </p>\\r\\n		                            </div> ', '2015-01-09 08:20:42'),
(20, 'its me', 'this is the text for sample only hehehe...', '2015-01-09 08:21:55'),
(21, 'its me', 'this is the text for sample only hehehe... ok here is updated text', '2015-01-09 08:22:15'),
(22, 'About', 'This is about page of this website and this is the best<br> \\r\\nwow are you having fun about it?', '2015-01-09 15:03:38'),
(23, 'hello world', '<pre>\r\nThis is the hello world?.....\r\n     what is your name man ?\r\nok i loved it.\r\n', '2015-01-09 15:06:14'),
(24, 'hello world', '<pre>\r\nThis is the hello world?.....\r\n     what is your name man ?\r\nok i loved it.\r\n</pre>', '2015-01-09 15:06:41'),
(25, 'hello world', '<pre>\r\nHi, \r\n\r\nMy name is maurico moore and i love fashion u know why because i am fashion lover too.. \r\nso i would like to personally invite you to join the fashion comunity.\r\n\r\ni love to hear you soon \r\n\r\nwish for more info about your blogs and content. Thanks. \r\n\r\n\r\nBest Regards,\r\nJesus\r\n\r\n\r\n\r\n\r\n\r\n</pre>', '2015-01-09 15:08:43'),
(26, 'hello world', '<pre>\r\nHi, \r\n\r\nMy name is maurico moore and i love fashion u know why because i am fashion lover too.. \r\nso i would like to personally invite you to join the fashion comunity.\r\n\r\ni love to hear you soon \r\n\r\nwish for more info about your blogs and content. Thanks. \r\n\r\n\r\nBest Regards,\r\n<b style="color:red" >Jesus</b>\r\n\r\n\r\n\r\n\r\n\r\n</pre>', '2015-01-09 15:10:14'),
(27, 'jesus', '<pre>\r\n   rico application here\r\n</pre>', '2015-01-09 15:12:54'),
(28, 'jesus', '<pre>\r\n   rico application here\r\n</pre>', '2015-01-09 15:13:08'),
(29, 'rico', '<pre>\r\n   rico application here\r\n</pre>', '2015-01-09 15:14:49'),
(30, 'rico', '<pre>\r\n   rico is the best person ever men!\r\n</pre>', '2015-01-09 15:15:16'),
(31, 'rico', '<pre>\r\n   rico is the best person ever men!\r\n  \r\n</pre>', '2015-01-09 15:15:57'),
(32, 'job', '<pre>\r\n  <a href="http://www.onlinejobs.ph/jobseekers/job/29299"> online job hiring <a/>\r\n</pre>\r\n\r\n\r\n', '2015-01-09 15:17:30'),
(33, 'job', '<pre>\r\n  <a href="http://www.onlinejobs.ph/jobseekers/job/29299"> online job hiring <a/>\r\n</pre>\r\n\r\n\r\n', '2015-01-09 15:17:36'),
(34, 'job', '<pre>\r\n  <a href="http://www.onlinejobs.ph/jobseekers/job/29299" target="blank" > online job hiring <a/>\r\n</pre>\r\n\r\n\r\n', '2015-01-09 15:18:09'),
(35, 'january 10, 2015', '<pre>\r\n\r\n\r\nMe and Rico\r\n\r\nworking together with the documentation of invitation scrapper.\r\n\r\n\r\nits verry nice. \r\n\r\n</pre>', '2015-01-09 16:50:19'),
(36, 'hello wold', '<pre>\r\n\r\n\r\nMe and Rico\r\n\r\nworking together with the documentation of invitation scrapper.\r\n\r\n\r\nits verry nice. \r\n\r\n</pre>', '2015-01-09 16:50:44'),
(37, 'code', '\r\n\r\n\r\n<pre>\r\n\r\n\r\nfor ($i = 0; $i<10; $i++) \r\n{\r\n   echo "this is the content of the for loop"; \r\n}\r\n\r\n</pre>', '2015-01-09 17:06:15'),
(38, 'well', 'this is the best well', '2015-01-09 17:50:04'),
(39, 'hi', '<pre>this is it</pre>', '2015-01-09 17:52:53'),
(40, 'man', '<pre>what is man or it is a good person to say that it is a man</pre>', '2015-01-09 17:54:45'),
(41, 'none', 'none is a term used.', '2015-01-09 17:55:23'),
(42, 'hil', 'amazing', '2015-01-09 17:56:20'),
(43, 'i love u girl', 'this girl loved me too much...', '2015-01-09 17:56:43'),
(44, 'welcome to my application', 'this is my application created. I hope u liked it and it must be enjoyable to you..\r\n\r\ni am praying that to the lord. \r\n\r\n\r\nlord god will give me knowledge of making it!', '2015-01-09 18:29:31'),
(45, 'resume', 'this is my resume at all the times \r\n\r\n\r\n\r\nwell \r\n\r\n\r\nit is \r\n\r\n\r\n\r\n\r\n\r\nhahahaha...', '2015-01-09 18:31:41'),
(46, 'resume', 'this is my resume at all the times \r\n\r\n\r\n\r\nwell \r\n\r\n\r\nit is \r\n\r\n\r\n\r\n\r\n\r\nhahahaha...', '2015-01-09 18:31:46'),
(47, '[[test]] [[this is the content for the test]]', 'this will become updated men!', '2015-01-09 18:32:06'),
(48, 'hey', 'are you having fun ?', '2015-01-09 18:32:37'),
(49, 'wow', 'wow', '2015-01-09 18:33:09'),
(50, 'ok', 'ok', '2015-01-09 18:33:24'),
(51, 'this is amazing grace man', 'this is amazing grace manthis is amazing grace manthis is amazing grace manthis is amazing grace man', '2015-01-09 18:33:41'),
(52, 'About', '<b>this is about me man</b>\r\n\r\nThis is about page of this website and this is the best<br> \\r\\nwow are you having fun about it?', '2015-01-09 18:34:31'),
(53, 'About', '<h2><b>this is about me man</b></h2>\r\n\r\nThis is about page of this website and this is the best<br> \\r\\nwow are you having fun about it?', '2015-01-09 18:34:47'),
(54, 'hahahahahahahaha', 'i am laughing at all times', '2015-01-09 18:35:20'),
(55, 'hey', 'are you having fun ? here is your updated content.', '2015-01-10 03:47:09'),
(56, 'hahahahahahahaha', 'i am laughing at all times here is updated ', '2015-01-10 03:47:29'),
(57, 'mj', 'this is mj suarez', '2015-01-10 03:47:54'),
(58, 'i love u girl', 'this girl loved me too much...\r\n\r\n\r\n\r\n**************************************************8\r\n*******************( ) ******************* () \r\n\r\n\r\n\r\nwow\r\n\r\n\r\n\r\n\r\n\r\nbest regards,\r\njesus', '2015-01-10 03:49:07'),
(59, 'i love u girl', 'asdasdas dasd\r\na\r\nsd\r\nasd\r\n a\r\nsd\r\na s\r\nda\r\ns d\r\nas\r\nd\r\nas d\r\ns\r\n a\r\nsd\r\n asd', '2015-01-10 03:49:37'),
(60, 'i love u girl', 'asdasdas dasd\r\na\r\nsd\r\nasd\r\n a\r\nsd\r\na s\r\nda\r\ns d\r\nas\r\nd\r\nas d\r\ns\r\n a\r\nsd\r\n asdaA a sAS a sAS as AS \r\nas \r\nA\r\nS \r\nas \r\nAS\r\n a\r\ns \r\nAS \r\nas \r\n\r\nAS \r\nas \r\nAS\r\n a sAS as AS as', '2015-01-10 03:49:59'),
(61, 'Tracking email', 'The tracking email techniques need to have a image embedded on the header it is because the image will load the get request in http and perform the saving of data specially the date and time.\r\n\r\nex: <img src=''youdomain.com/phpfile.php?get1=getVal1&get2=getVal2'' />\r\n\r\nthe example above will is how the image load the phpfile content to comunicate the database.\r\n\r\n\r\nBest regards,\r\nJesus\r\n', '2015-01-15 07:53:17'),
(62, 'Tracking email', 'The tracking email techniques need to have a image embedded on the header it is because the image will load the get request in http and perform the saving of data specially the date and time.\r\n\r\nex: <img src=''youdomain.com/phpfile.php?get1=getVal1&get2=getVal2'' style=''height:0px; width:0px;'' />\r\n\r\nthe example above will is how the image load the phpfile content to comunicate the database.\r\n\r\n\r\nBest regards,\r\nJesus\r\n', '2015-01-15 07:53:48'),
(63, 'Tracking email', 'The tracking email techniques need to have a image embedded on the header it is because the image will load the get request in http and perform the saving of data specially the date and time.\r\n\r\nex: <img src=''youdomain.com/phpfile.php?get1=getVal1&get2=getVal2'' style=''height:1px; width:1px;'' />\r\n\r\nthe example above will is how the image load the phpfile content to comunicate the database.\r\n\r\n\r\nBest regards,\r\nJesus\r\n', '2015-01-15 07:53:57'),
(64, 'Tracking email', 'The tracking email techniques need to have a image embedded on the header it is because the image will load the get request in http and perform the saving of data specially the date and time.\r\n\r\nex: <img src=''youdomain.com/phpfile.php?get1=getVal1&get2=getVal2'' style="height:1px; width:1px;" />\r\n\r\nthe example above will is how the image load the phpfile content to comunicate the database.\r\n\r\n\r\nBest regards,\r\nJesus\r\n', '2015-01-15 07:55:47'),
(65, 'Tracking email', 'The tracking email techniques need to have a image embedded on the header it is because the image will load the get request in http and perform the saving of data specially the date and time.\r\n\r\nex: <img src=''youdomain.com/phpfile.php?get1=getVal1&get2=getVal2'' style='''' " />\r\n\r\njust need to add style style="height:1px; width:1px; to make it invisible with the user\r\n\r\nthe example above will is how the image load the phpfile content to comunicate the database.\r\n\r\n\r\nBest regards,\r\nJesus\r\n', '2015-01-15 07:56:25'),
(66, 'Tracking email embedded code.', 'The tracking email techniques need to have a image embedded on the header it is because the image will load the get request in http and perform the saving of data specially the date and time.\r\n\r\nex: <img src=''youdomain.com/phpfile.php?get1=getVal1&get2=getVal2'' style='''' " />\r\n\r\njust need to add style style="height:1px; width:1px; to make it invisible with the user\r\n\r\nthe example above will is how the image load the phpfile content to comunicate the database.\r\n\r\n\r\nBest regards,\r\nJesus\r\n', '2015-01-15 07:57:06'),
(67, 'Php Storm Study Documentation', 'https://www.jetbrains.com/phpstorm/help/getting-started-with-phpstorm.html', '2015-01-16 02:43:36'),
(68, 'Php Storm Study Documentation', 'https://www.jetbrains.com/phpstorm/help/getting-started-with-phpstorm.html\r\n\r\nDone with: getting started with PhpStorm \r\nnext should: Basic concept', '2015-01-16 02:44:38'),
(69, 'Php Storm Study Documentation', 'https://www.jetbrains.com/phpstorm/help/getting-started-with-phpstorm.html\r\n\r\nDone with: getting started with PhpStorm \r\njdk 8 installed\r\n\r\n\r\nnext should: Basic concept', '2015-01-16 03:34:26'),
(70, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is interesting, relaxed, and comfortable.  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  Just keep in mind that you’ll notice more than anyone in your audience.  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing.  Your goal is to be an effective public speaker.  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, take the focus off of yourself and shift it to your audience. After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, you should think about your purpose.  How can you help your audience members achieve their goals?\r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  Always make your presentation just a bit shorter than anticipated.  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-19 17:22:26'),
(71, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  Just keep in mind that you’ll notice more than anyone in your audience.  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing.  Your goal is to be an effective public speaker.  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, take the focus off of yourself and shift it to your audience. After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, you should think about your purpose.  How can you help your audience members achieve their goals?\r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  Always make your presentation just a bit shorter than anticipated.  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 01:47:14'),
(72, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing.  Your goal is to be an effective public speaker.  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, take the focus off of yourself and shift it to your audience. After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, you should think about your purpose.  How can you help your audience members achieve their goals?\r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  Always make your presentation just a bit shorter than anticipated.  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 01:48:11'),
(73, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing. <b style=''color:red''> Your goal is to be an effective public speaker..</b>  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, <b style=''color:red''>take the focus off of yourself and shift it to your audience.</b> After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, <b style=''color:red''>you should think about your purpose.  How can you help your audience members achieve their goals?</b> \r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  <b style=''color:red''>Always make your presentation just a bit shorter than anticipated.</b>  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 01:52:05'),
(74, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing. <b style=''color:red''> Your goal is to be an effective public speaker..</b>  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, <b style=''color:red''>take the focus off of yourself and shift it to your audience.</b> After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, <b style=''color:red''>you should think about your purpose.  How can you help your audience members achieve their goals?</b> \r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  <b style=''color:red''>Always make your presentation just a bit shorter than anticipated.</b>  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 02:06:16');
INSERT INTO `cms` (`id`, `title`, `content`, `date`) VALUES
(75, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing. <b style=''color:red''> Your goal is to be an effective public speaker..</b>  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, <b style=''color:red''>take the focus off of yourself and shift it to your audience.</b> After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, <b style=''color:red''>you should think about your purpose.  How can you help your audience members achieve their goals?</b> \r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  <b style=''color:red''>Always make your presentation just a bit shorter than anticipated.</b>  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 02:06:35'),
(76, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing. <b style=''color:red''> Your goal is to be an effective public speaker..</b>  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, <b style=''color:red''>take the focus off of yourself and shift it to your audience.</b> After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, <b style=''color:red''>you should think about your purpose.  How can you help your audience members achieve their goals?</b> \r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  <b style=''color:red''>Always make your presentation just a bit shorter than anticipated.</b>  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 02:06:42'),
(77, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing. <b style=''color:red''> Your goal is to be an effective public speaker..</b>  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, <b style=''color:red''>take the focus off of yourself and shift it to your audience.</b> After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, <b style=''color:red''>you should think about your purpose.  How can you help your audience members achieve their goals?</b> \r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  <b style=''color:red''>Always make your presentation just a bit shorter than anticipated.</b>  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 02:06:52'),
(78, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing. <b style=''color:red''> Your goal is to be an effective public speaker..</b>  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, <b style=''color:red''>take the focus off of yourself and shift it to your audience.</b> After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, <b style=''color:red''>you should think about your purpose.  How can you help your audience members achieve their goals?</b> \r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  <b style=''color:red''>Always make your presentation just a bit shorter than anticipated.</b>  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 02:06:58'),
(79, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing. <b style=''color:red''> Your goal is to be an effective public speaker..</b>  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, <b style=''color:red''>take the focus off of yourself and shift it to your audience.</b> After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, <b style=''color:red''>you should think about your purpose.  How can you help your audience members achieve their goals?</b> \r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  <b style=''color:red''>Always make your presentation just a bit shorter than anticipated.</b>  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 02:07:12'),
(80, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing. <b style=''color:red''> Your goal is to be an effective public speaker..</b>  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, <b style=''color:red''>take the focus off of yourself and shift it to your audience.</b> After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, <b style=''color:red''>you should think about your purpose.  How can you help your audience members achieve their goals?</b> \r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  <b style=''color:red''>Always make your presentation just a bit shorter than anticipated.</b>  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 02:07:25'),
(81, 'Effective Public speaking 7 ways', '<b>1. Perception: Stop trying to be a great “public” speaker.</b>\r\nPeople want to listen to someone who is <b style=''color:red''>  interesting, relaxed, and comfortable.</b>  In the routine conversations we have every day, we have no problem being ourselves.  Yet too often, when we stand up to give a speech, something changes.  We focus on the “public” at the expense of the “speaking.”  To become an effective public speaker, you must do just the opposite: focus on the speaking and let go of the “public.”  Think of it as a conversation between you and the audience. If you can carry on a relaxed conversation with one or two people, you can give a great speech.  Whether your audience consists of two people or two thousand and whether you’re talking about the latest medical breakthrough or what you did today at work, be yourself; talk directly to people and make a connection with them.\r\n<b>2. Perfection: When you make a mistake, no one cares but you. </b>\r\nEven the most accomplished public speaker will make a mistake at some point.  <b style=''color:red''>  Just keep in mind that you’ll notice more than anyone in your audience.</b>  The most important thing a speaker can do after making a mistake is to keep going.  Don’t stop and—unless the mistake was truly earth shattering—never apologize to the audience for a minor slip.  Unless they are reading the speech during your delivery, the audience won’t know if you left out a word, said the wrong name, or skipped a page.  Because “to err is human,” a mistake can actually work for you, because it allows you to connect with your audience.  People don’t want to hear from someone who is “perfect;” they will relate much more easily to someone who is real.\r\n<b>3. Visualization: If you can see it, you can speak it.</b>\r\nWinners in all aspects of life have this in common:  they practice visualization to achieve their goals.  Sales people envision themselves closing the deal; executives picture themselves developing new ventures; athletes close their eyes and imagine themselves making that basket, hitting that home run, or breaking that record.  The same is true in public speaking.  The best way to fight anxiety and to become a more comfortable speaker is to practice in the one place where no one else can see you—your mind. If you visualize on a consistent basis, your mind will become used to the prospect of speaking in public, and pretty soon you’ll conquer any feelings of anxiety.\r\n<b>4. Discipline: Practice makes perfectly good.</b>\r\nYour goal is not to be a perfect public speaker.  There is no such thing. <b style=''color:red''> Your goal is to be an effective public speaker..</b>  Like anything else in life, it takes practice.  We too often take communication for granted because we speak to people everyday. But when your prosperity is directly linked to how well you perform in front a group, you need to give the task the same attention as if you were a professional athlete. Remember, even world champion athletes practice every day.  Try taking a class where you practice giving speeches.\r\n<b>5. Description: Make it personal.</b>\r\nWhatever the topic, audiences respond best when speakers personalize their communication. Take every opportunity to put a face on the facts of your presentation.  People like to hear about other people’s experiences—the triumphs, tragedies, and everyday humorous anecdotes that make up their lives.  Tell stories.  Whenever possible, insert a personal-interest element in your public speaking.  Not only will it make your listeners warm up to you, but it will also do wonders at putting you at ease. After all, on what subject is your expertise greater than on the subject of you?\r\n<b>6. Inspiration: Speak to serve.</b>\r\nFor a twist that is sure to take much of the fear out of public speaking, <b style=''color:red''>take the focus off of yourself and shift it to your audience.</b> After all, the objective is not to benefit the speaker but to benefit the audience, through teaching, motivation, or entertainment. So in all of your preparation and presentation, <b style=''color:red''>you should think about your purpose.  How can you help your audience members achieve their goals?</b> \r\n<b>7. Anticipation: Always leave ‘em wanting more.</b>\r\nOne of the most valuable lessons I have learned in my years in communications is that when it comes to public speaking, less is usually more. I don’t think I’ve ever left a gathering and heard someone say, “I wish that speaker had spoken longer.” On the other hand, I imagine that you probably can’t count the times that you’ve thought, “I’m glad that speech is over. It seemed to go on forever!” So surprise your audience.  <b style=''color:red''>Always make your presentation just a bit shorter than anticipated.</b>  If you’ve followed the first six principles outlined here you already have their attention and interest, and it’s better to leave your listeners wishing you had spoken for just a few more minutes than squirming in their seats waiting for your speech finally to end.', '2015-01-20 02:07:39'),
(82, 'Effective Public speaking', 'yeah ', '2015-01-20 02:08:11'),
(83, 'fs-header-content-1', 'this is the content of the header of fs', '2015-01-20 02:23:47'),
(84, 'formula with getting people by location distribution if location is not enough people as limit', 'if the total people of the location is not equal to limit but its less than then it shoul calculate to make the lacking get it in the next query.\r\n\r\nQ = query result from the database\r\nR = reminder result \r\nL = limit result \r\n\r\n1.) Q = 5, R?, L=50\r\n2.) Q = 2, R?, L=50\r\n3.) Q = 1, R?, L=50\r\n4.) Q = 1, R?, L=50\r\n\r\nformula: \r\nR = L + R + Q\r\n\r\n\r\n\r\n\r\n\r\n', '2015-01-21 08:19:24'),
(85, 'formula with getting people by location distribution if location is not enough people as limit', 'if the total people of the location is not equal to limit but its less than then it shoul calculate to make the lacking get it in the next query.\r\n\r\nQ = query result from the database\r\nR = reminder result \r\nL = limit result \r\n\r\n1.) Q = 5, R?, L=50\r\n2.) Q = 2, R?, L=50\r\n3.) Q = 1, R?, L=50\r\n4.) Q = 1, R?, L=50\r\n\r\nformula: \r\nR = L + R + Q\r\n\r\n\r\n\r\n\r\nforeach($lookbook->getDistinctInvited() as $il) {\r\n    echo "\\n location " . $il[''location''] . "";\r\n    $location = $il[''location''];\r\n\r\n    $database->select(''fs_invited'', "*", '''', "location = ''$location''" , '''' , "0, $limit1");\r\n    echo "<pre>";\r\n     print_r($database->getResult());\r\n\r\n    echo "total = " . $database->getTotalRes();\r\n    $totalResult    = $database->getTotalRes();\r\n    echo ''\\n-----------------------------------------------------------\\n'';\r\n    $reminder = $lookbook->addNewLimitBasedOnTheResults($limit, $reminder, $totalResult);\r\n    $limit1 = $reminder;\r\n}\r\necho " limit $limit  reminder $reminder ";\r\n\r\n\r\n\r\n\r\n', '2015-01-21 08:24:24'),
(86, 'formula with getting people by location distribution if location is not enough people as limit', 'if the total people of the location is not equal to limit but its less than then it shoul calculate to make the lacking get it in the next query.\r\n\r\nQ = query result from the database\r\nR = reminder result \r\nL = limit result \r\n\r\n1.) Q = 5, R?, L=50\r\n2.) Q = 2, R?, L=50\r\n3.) Q = 1, R?, L=50\r\n4.) Q = 1, R?, L=50\r\n\r\nformula: \r\nR = L + R + Q\r\n\r\n\r\n\r\n\r\nforeach($lookbook->getDistinctInvited() as $il) {\r\n    echo "\\n location " . $il[''location''] . "";\r\n    $location = $il[''location''];\r\n\r\n    $database->select(''fs_invited'', "*", '''', "location = ''$location''" , '''' , "0, $limit1");\r\n   \r\n     print_r($database->getResult());\r\n\r\n    echo "total = " . $database->getTotalRes();\r\n    $totalResult    = $database->getTotalRes();\r\n    echo ''\\n-----------------------------------------------------------\\n'';\r\n    $reminder = $lookbook->addNewLimitBasedOnTheResults($limit, $reminder, $totalResult);\r\n    $limit1 = $reminder;\r\n}\r\necho " limit $limit  reminder $reminder ";\r\n\r\n\r\n\r\n\r\n', '2015-01-21 08:24:50'),
(87, 'formula with getting people by location distribution if location is not enough people as limit', 'if the total people of the location is not equal to limit but its less than then it shoul calculate to make the lacking get it in the next query.\r\n\r\nQ = query result from the database\r\nR = reminder result \r\nL = limit result \r\n\r\n1.) Q = 5, R?, L=50\r\n2.) Q = 2, R?, L=50\r\n3.) Q = 1, R?, L=50\r\n4.) Q = 1, R?, L=50\r\n\r\nformula: \r\nR = L + R + Q\r\n\r\n\r\n\r\n \r\n\r\n', '2015-01-21 08:25:10'),
(88, 'formula with getting people by location distribution if location is not enough people as limit', 'if the total people of the location is not equal to limit but its less than then it shoul calculate to make the lacking get it in the next query.\r\n\r\nQ = query result from the database\r\nR = reminder result \r\nL = limit result \r\n\r\n1.) Q = 5, R?, L=50\r\n2.) Q = 2, R?, L=50\r\n3.) Q = 1, R?, L=50\r\n4.) Q = 1, R?, L=50\r\n\r\nformula: \r\nR = L + R + Q\r\n\r\n', '2015-01-21 08:25:52'),
(89, 'English', 'ang english ', '2015-01-21 08:40:29'),
(90, 'Work upgrade', 'Computer speed, \r\nExternal drive\r\nMonitor', '2015-01-21 09:57:23'),
(91, 'Online portfolio', 'Outsourcely.com\r\nhttps://www.outsourcely.com/search/advanced/profile/3374\r\nOutsource.com\r\nhttps://outsource.com/freelancer/Web-Software-IT/69293/0\r\nResume\r\nhttp://jesus.beeztalk.com/\r\nOnlinejobs.ph\r\nhttp://www.onlinejobs.ph/jobseekers/info/97229\r\nOdesk.com\r\nhttps://www.odesk.com/o/profiles/users/_~01cbebd20a69361071/', '2015-01-22 11:22:59'),
(92, 'Online portfolio', 'Outsourcely.com\r\nhttps://www.outsourcely.com/search/advanced/profile/3374\r\nOutsource.com\r\nhttps://outsource.com/freelancer/Web-Software-IT/69293/0\r\nResume\r\nhttp://jesus.beeztalk.com/\r\nOnlinejobs.ph\r\nhttp://www.onlinejobs.ph/jobseekers/info/97229\r\nOdesk.com\r\nhttps://www.odesk.com/o/profiles/users/_~01cbebd20a69361071/', '2015-01-22 11:23:05'),
(93, 'formula with getting people by location distribution if location is not enough people as limit', 'if the total people of the location is not equal to limit but its less than then it shoul calculate to make the lacking get it in the next query.\r\n\r\nQ = query result from the database\r\nR = reminder result \r\nL = limit result \r\n\r\n1.) Q = 5, R?, L=50\r\n2.) Q = 2, R?, L=50\r\n3.) Q = 1, R?, L=50\r\n4.) Q = 1, R?, L=50\r\n\r\nformula: \r\nR = L + R - Q\r\n\r\n', '2015-01-22 13:58:59'),
(94, 'Work upgrade', 'Computer speed, \r\nExternal drive\r\nMonitor\r\nNote Books\r\nNew programming Books', '2015-01-24 04:36:10'),
(95, 'Work upgrade', '1. Computer speed, \r\n2. External drive\r\n3. Monitor\r\n4. Note Books\r\n5. New programming Books', '2015-01-24 04:36:26'),
(96, 'Work upgrade', '1. Computer speed, \r\n2. External drive\r\n3. Monitor\r\n4. Note Books\r\n5. New programming Books\r\n6. White board and rubber board for task pinning.', '2015-01-24 12:53:25'),
(97, 'Daily Inspirational though', '1.) The more you begin to love yourself, the less you''ll look to others to validate, approve of, or complete you.\r\nkiss emoticon just live life with truth and compassion.', '2015-01-26 00:35:45'),
(98, 'Daily Inspirational though', '1.) The more you begin to love yourself, the less you''ll look to others to validate, approve of, or complete you.\r\nkiss emoticon just live life with truth and compassion.', '2015-01-26 00:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `cm_spam_report`
--

CREATE TABLE IF NOT EXISTS `cm_spam_report` (
`cmsr_id` bigint(20) NOT NULL,
  `cmsr_mno_reporter` bigint(20) NOT NULL,
  `cmsr_plcno` bigint(20) NOT NULL,
  `cmsr_date` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cm_spam_report`
--

INSERT INTO `cm_spam_report` (`cmsr_id`, `cmsr_mno_reporter`, `cmsr_plcno`, `cmsr_date`) VALUES
(56, 676, 165, '2013-01-17'),
(55, 200, 164, '2013-01-15'),
(54, 676, 163, '2013-01-15'),
(53, 676, 163, '2013-01-15'),
(52, 676, 161, '2013-01-15'),
(51, 676, 159, '2013-01-15'),
(50, 676, 160, '2013-01-15'),
(49, 676, 159, '2013-01-15'),
(48, 676, 160, '2013-01-15'),
(47, 676, 160, '2013-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
`fno` bigint(20) NOT NULL,
  `mno1` bigint(20) DEFAULT NULL,
  `mno2` bigint(20) DEFAULT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=397 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`fno`, `mno1`, `mno2`, `status`) VALUES
(70, 163, 138, 0),
(71, 134, 138, 0),
(72, 201, 154, 0),
(73, 195, 138, 0),
(74, 201, 153, 0),
(75, 237, 138, 0),
(76, 237, 164, 0),
(77, 237, 223, 0),
(78, 237, 138, 0),
(79, 237, 164, 0),
(80, 237, 223, 0),
(81, 123, 218, 0),
(82, 297, 255, 0),
(83, 297, 133, 1),
(85, 297, 290, 0),
(87, 395, 389, 0),
(89, 409, 138, 0),
(90, 409, 164, 0),
(91, 409, 168, 0),
(92, 409, 305, 0),
(93, 409, 369, 0),
(94, 411, 409, 0),
(95, 135, 133, 1),
(97, 135, 136, 0),
(98, 135, 137, 0),
(100, 433, 133, 1),
(101, 433, 138, 0),
(102, 433, 161, 0),
(103, 433, 168, 0),
(104, 433, 363, 0),
(105, 433, 151, 0),
(106, 433, 341, 0),
(107, 433, 152, 0),
(108, 433, 369, 0),
(109, 433, 162, 0),
(110, 433, 426, 0),
(111, 200, 138, 0),
(112, 200, 161, 0),
(113, 200, 168, 0),
(114, 200, 151, 0),
(115, 200, 341, 0),
(116, 200, 152, 0),
(118, 200, 136, 0),
(119, 200, 135, 0),
(120, 200, 133, 1),
(122, 519, 138, 0),
(123, 519, 158, 0),
(124, 519, 161, 0),
(125, 519, 164, 0),
(126, 519, 168, 0),
(127, 519, 305, 0),
(128, 519, 151, 0),
(129, 519, 369, 0),
(130, 609, 607, 0),
(131, 666, 648, 0),
(132, 677, 138, 0),
(133, 677, 158, 0),
(134, 677, 161, 0),
(135, 677, 164, 0),
(136, 677, 168, 0),
(137, 677, 305, 0),
(138, 677, 479, 0),
(139, 677, 546, 0),
(140, 677, 666, 0),
(141, 677, 405, 0),
(142, 677, 363, 0),
(143, 677, 676, 0),
(144, 677, 140, 0),
(145, 677, 635, 0),
(146, 677, 151, 0),
(147, 679, 380, 0),
(148, 710, 602, 0),
(149, 591, 466, 0),
(150, 466, 591, 0),
(151, 200, 718, 0),
(152, 200, 706, 0),
(154, 786, 305, 0),
(155, 786, 766, 0),
(157, 676, 133, 1),
(159, 676, 136, 0),
(160, 676, 139, 0),
(162, 133, 138, 0),
(165, 819, 133, 1),
(166, 824, 574, 0),
(168, 829, 574, 0),
(171, 830, 138, 0),
(172, 830, 158, 0),
(173, 830, 161, 0),
(174, 830, 164, 0),
(175, 830, 168, 0),
(176, 830, 305, 0),
(177, 830, 479, 0),
(178, 830, 546, 0),
(179, 830, 666, 0),
(180, 830, 737, 0),
(181, 830, 754, 0),
(182, 830, 807, 0),
(183, 830, 405, 0),
(184, 830, 707, 0),
(185, 830, 363, 0),
(186, 830, 682, 0),
(187, 830, 140, 0),
(188, 830, 798, 0),
(189, 830, 635, 0),
(190, 830, 732, 0),
(191, 830, 768, 0),
(192, 830, 151, 0),
(193, 830, 341, 0),
(194, 830, 777, 0),
(195, 830, 152, 0),
(196, 830, 369, 0),
(197, 830, 162, 0),
(198, 830, 791, 0),
(199, 830, 597, 0),
(200, 830, 726, 0),
(201, 831, 662, 0),
(392, 809, 558, 0),
(204, 809, 138, 0),
(205, 809, 135, 0),
(361, 133, 924, 0),
(207, 835, 138, 0),
(208, 835, 158, 0),
(209, 835, 161, 0),
(210, 835, 164, 0),
(211, 835, 168, 0),
(212, 835, 662, 0),
(213, 837, 825, 0),
(214, 838, 138, 0),
(215, 838, 158, 0),
(216, 838, 161, 0),
(217, 838, 164, 0),
(218, 838, 168, 0),
(219, 839, 138, 0),
(220, 839, 158, 0),
(221, 839, 161, 0),
(222, 839, 164, 0),
(223, 839, 168, 0),
(224, 839, 662, 0),
(225, 838, 662, 0),
(226, 525, 823, 0),
(227, 845, 138, 0),
(228, 845, 161, 0),
(229, 845, 164, 0),
(230, 845, 305, 0),
(231, 845, 479, 0),
(232, 845, 666, 0),
(233, 847, 138, 0),
(234, 847, 158, 0),
(235, 847, 161, 0),
(236, 847, 164, 0),
(237, 847, 168, 0),
(238, 848, 138, 0),
(239, 848, 158, 0),
(240, 848, 161, 0),
(241, 848, 164, 0),
(242, 848, 168, 0),
(243, 849, 138, 0),
(244, 849, 158, 0),
(245, 849, 161, 0),
(246, 849, 164, 0),
(247, 849, 168, 0),
(248, 850, 138, 0),
(249, 850, 158, 0),
(250, 850, 161, 0),
(251, 850, 164, 0),
(252, 850, 168, 0),
(253, 850, 666, 0),
(254, 853, 138, 0),
(255, 853, 158, 0),
(256, 853, 161, 0),
(257, 853, 164, 0),
(258, 853, 168, 0),
(259, 853, 666, 0),
(260, 853, 737, 0),
(370, 809, 682, 0),
(262, 854, 138, 0),
(263, 854, 158, 0),
(264, 854, 161, 0),
(265, 854, 164, 0),
(266, 854, 168, 0),
(267, 809, 800, 0),
(268, 851, 662, 0),
(269, 857, 138, 0),
(270, 857, 158, 0),
(271, 857, 161, 0),
(272, 857, 164, 0),
(273, 857, 168, 0),
(274, 858, 158, 0),
(275, 858, 161, 0),
(276, 858, 164, 0),
(277, 858, 168, 0),
(278, 858, 305, 0),
(279, 858, 662, 0),
(280, 859, 138, 0),
(281, 859, 158, 0),
(282, 859, 161, 0),
(283, 859, 164, 0),
(284, 859, 168, 0),
(285, 859, 662, 0),
(286, 860, 662, 0),
(287, 864, 662, 0),
(288, 865, 138, 0),
(289, 865, 158, 0),
(290, 865, 161, 0),
(291, 865, 164, 0),
(292, 865, 168, 0),
(293, 865, 662, 0),
(294, 866, 138, 0),
(295, 866, 158, 0),
(296, 866, 161, 0),
(297, 866, 164, 0),
(298, 866, 168, 0),
(299, 866, 662, 0),
(300, 867, 138, 0),
(301, 867, 158, 0),
(302, 867, 161, 0),
(303, 867, 164, 0),
(304, 867, 168, 0),
(305, 868, 138, 0),
(306, 868, 158, 0),
(307, 868, 161, 0),
(308, 868, 164, 0),
(309, 868, 168, 0),
(310, 869, 662, 0),
(311, 870, 138, 0),
(312, 870, 158, 0),
(313, 870, 161, 0),
(314, 870, 164, 0),
(315, 870, 168, 0),
(316, 871, 138, 0),
(317, 871, 158, 0),
(318, 871, 161, 0),
(319, 871, 164, 0),
(320, 871, 168, 0),
(321, 871, 305, 0),
(322, 871, 479, 0),
(323, 871, 546, 0),
(324, 871, 666, 0),
(325, 871, 737, 0),
(326, 871, 662, 0),
(327, 809, 255, 0),
(328, 809, 823, 0),
(329, 875, 823, 0),
(338, 809, 635, 0),
(331, 879, 662, 0),
(332, 809, 631, 0),
(333, 746, 631, 0),
(335, 881, 635, 0),
(336, 883, 479, 0),
(337, 883, 662, 0),
(339, 890, 168, 0),
(340, 890, 479, 0),
(341, 809, 827, 0),
(342, 751, 749, 0),
(343, 134, 821, 0),
(344, 134, 823, 0),
(345, 902, 825, 0),
(346, 902, 558, 0),
(347, 809, 895, 0),
(395, 682, 133, 1),
(349, 909, 680, 0),
(356, 676, 920, 0),
(351, 911, 802, 0),
(352, 917, 823, 0),
(353, 918, 558, 0),
(354, 133, 821, 0),
(355, 133, 676, 0),
(357, 676, 682, 0),
(359, 134, 923, 0),
(360, 134, 920, 0),
(376, 929, 682, 0),
(375, 929, 923, 0),
(374, 929, 676, 0),
(373, 929, 920, 0),
(372, 929, 819, 0),
(371, 809, 134, 0),
(377, 929, 134, 0),
(378, 929, 809, 1),
(393, 200, 255, 0),
(381, 816, 676, 0),
(382, 816, 923, 0),
(383, 816, 134, 0),
(384, 816, 809, 0),
(385, 816, 929, 0),
(386, 816, 682, 0),
(387, 133, 809, 0),
(388, 133, 682, 0),
(394, 682, 139, 0),
(396, 682, 141, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fs_brands`
--

CREATE TABLE IF NOT EXISTS `fs_brands` (
`bno` bigint(25) NOT NULL,
  `bcno` int(25) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `b_total_selected_people` int(25) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `page` varchar(50) NOT NULL DEFAULT 'all',
  `b_added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=786 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fs_brands`
--

INSERT INTO `fs_brands` (`bno`, `bcno`, `bname`, `b_total_selected_people`, `visible`, `page`, `b_added_date`) VALUES
(785, 20, 'brand5', 0, 2, 'welcome', '2015-10-05 09:10:31'),
(784, 20, 'brand4', 0, 2, 'welcome', '2015-10-05 09:10:31'),
(783, 20, 'brand3', 0, 2, 'welcome', '2015-10-05 09:10:31'),
(782, 20, 'brand2', 0, 2, 'welcome', '2015-10-05 09:10:31'),
(780, 10, 'brand5', 0, 2, 'welcome', '2015-10-05 09:09:32'),
(779, 10, 'brand4', 0, 2, 'welcome', '2015-10-05 09:09:32'),
(778, 10, 'brand3', 0, 2, 'welcome', '2015-10-05 09:09:33'),
(777, 10, 'brand2', 0, 2, 'welcome', '2015-10-05 09:09:33'),
(781, 20, 'brand1', 0, 2, 'welcome', '2015-10-05 09:10:31'),
(776, 10, 'brand1', 0, 2, 'welcome', '2015-10-05 09:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `fs_brand_category`
--

CREATE TABLE IF NOT EXISTS `fs_brand_category` (
`bcno` int(25) NOT NULL,
  `bc_name` varchar(100) NOT NULL,
  `bc_total_selected_people` int(25) NOT NULL,
  `bc_total_brand` int(25) NOT NULL,
  `bc_added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gender` varchar(25) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'brand'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_brand_category`
--

INSERT INTO `fs_brand_category` (`bcno`, `bc_name`, `bc_total_selected_people`, `bc_total_brand`, `bc_added_date`, `gender`, `type`) VALUES
(1, 'Streetwear', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(2, 'Luxury', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(3, 'Casual', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(4, 'Menswear', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(5, 'Preppy', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(6, 'Urban', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(7, 'Goth/Punk', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(8, 'Chic', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(10, 'Bohemian', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(12, 'Grunge', 0, 0, '2015-09-07 16:00:00', 'male', 'brand'),
(13, 'Bohemian', 0, 0, '2015-09-08 09:52:52', 'female', 'brand'),
(14, 'Casual', 0, 0, '2015-09-08 09:52:52', 'female', 'brand'),
(15, 'Chic', 0, 0, '2015-09-08 09:52:52', 'female', 'brand'),
(16, 'Grunge', 0, 0, '2015-09-08 09:52:52', 'female', 'brand'),
(17, 'Menswear', 0, 0, '2015-09-08 09:52:52', 'female', 'brand'),
(18, 'Streetwear', 0, 0, '2015-09-08 09:52:52', 'female', 'brand'),
(19, 'Preppy', 0, 0, '2015-09-08 09:52:52', 'female', 'brand'),
(20, 'Beauty', 0, 0, '2015-09-10 06:38:33', '', 'topic'),
(21, 'Entertainment', 0, 0, '2015-09-10 06:38:33', '', 'topic'),
(22, 'Fashion', 0, 0, '2015-09-10 06:38:33', '', 'topic'),
(23, 'Lifestyle', 0, 0, '2015-09-10 06:38:33', '', 'topic');

-- --------------------------------------------------------

--
-- Table structure for table `fs_brand_category_selected`
--

CREATE TABLE IF NOT EXISTS `fs_brand_category_selected` (
`bcsno` int(25) NOT NULL,
  `bno` int(25) NOT NULL,
  `bcno` int(25) NOT NULL,
  `bcs_gender` tinyint(1) NOT NULL,
  `bcsdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fs_brand_member_selected`
--

CREATE TABLE IF NOT EXISTS `fs_brand_member_selected` (
`bmsno` int(25) NOT NULL,
  `bno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `bs_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_brand_member_selected`
--

INSERT INTO `fs_brand_member_selected` (`bmsno`, `bno`, `mno`, `bs_date`) VALUES
(1, 744, 636, '2015-09-18 03:08:06'),
(2, 746, 636, '2015-09-18 03:08:06'),
(3, 747, 636, '2015-09-18 03:08:57'),
(4, 745, 636, '2015-09-18 03:12:22'),
(5, 774, 636, '2015-09-21 02:52:20'),
(6, 769, 636, '2015-09-21 02:52:20'),
(7, 768, 636, '2015-09-21 02:52:21'),
(8, 773, 636, '2015-09-21 02:52:21'),
(9, 772, 636, '2015-09-21 02:52:21'),
(10, 767, 636, '2015-09-21 02:52:21'),
(11, 763, 636, '2015-09-21 02:52:21'),
(12, 762, 636, '2015-09-21 02:52:21'),
(13, 765, 636, '2015-09-21 02:52:21'),
(14, 759, 636, '2015-09-21 02:52:21'),
(15, 760, 636, '2015-09-21 02:52:22'),
(16, 771, 636, '2015-09-21 02:56:33'),
(17, 770, 636, '2015-09-21 02:56:34'),
(18, 757, 636, '2015-09-21 02:56:34'),
(19, 758, 636, '2015-09-21 02:56:34'),
(20, 764, 636, '2015-09-21 02:56:34'),
(21, 755, 636, '2015-09-21 03:11:36'),
(22, 766, 636, '2015-09-22 05:55:15'),
(23, 761, 636, '2015-09-22 05:55:16'),
(24, 768, 1017, '2015-09-25 07:38:14'),
(25, 770, 1017, '2015-09-25 07:38:14'),
(26, 757, 1017, '2015-09-25 07:38:14'),
(27, 758, 1017, '2015-09-25 07:38:14'),
(28, 771, 1017, '2015-09-25 07:38:14'),
(29, 772, 1017, '2015-09-25 07:38:15'),
(30, 773, 1017, '2015-09-25 07:38:15'),
(31, 750, 1017, '2015-09-25 07:38:15'),
(32, 749, 1017, '2015-09-25 07:38:15'),
(33, 764, 1017, '2015-09-25 07:38:15'),
(34, 765, 1017, '2015-09-25 07:38:15'),
(35, 760, 1017, '2015-09-25 07:38:15'),
(36, 759, 1017, '2015-09-25 07:38:15'),
(37, 747, 1017, '2015-09-25 07:38:15'),
(38, 769, 1017, '2015-09-25 07:44:41'),
(39, 763, 1017, '2015-09-25 07:44:41'),
(40, 762, 1017, '2015-09-25 07:44:41'),
(41, 746, 1017, '2015-09-25 07:44:41'),
(42, 771, 1018, '2015-09-25 07:57:06'),
(43, 774, 1018, '2015-09-25 07:57:07'),
(44, 769, 1018, '2015-09-25 07:57:07'),
(45, 768, 1018, '2015-09-25 07:57:07'),
(46, 773, 1018, '2015-09-25 07:57:07'),
(47, 767, 1018, '2015-09-25 07:57:07'),
(48, 7581201, 1018, '2015-09-25 07:57:08'),
(49, 762, 1018, '2015-09-25 07:57:08'),
(50, 763, 1018, '2015-09-25 07:57:08'),
(51, 764, 1018, '2015-09-25 07:57:08'),
(52, 759, 1018, '2015-09-25 07:57:08'),
(53, 747, 1018, '2015-09-25 07:57:09'),
(54, 757, 1020, '2015-09-25 08:04:40'),
(55, 770, 1020, '2015-09-25 08:04:40'),
(56, 771, 1020, '2015-09-25 08:04:40'),
(57, 758, 1020, '2015-09-25 08:04:41'),
(58, 767, 1020, '2015-09-25 08:04:41'),
(59, 768, 1020, '2015-09-25 08:04:41'),
(60, 773, 1020, '2015-09-25 08:04:41'),
(61, 772, 1020, '2015-09-25 08:04:41'),
(62, 747, 1020, '2015-09-25 08:04:41'),
(63, 746, 1020, '2015-09-25 08:04:41'),
(64, 765, 1020, '2015-09-25 08:04:41'),
(65, 760, 1020, '2015-09-25 08:04:41'),
(66, 759, 1020, '2015-09-25 08:04:41'),
(67, 764, 1020, '2015-09-25 08:04:41'),
(68, 772, 1013, '2015-09-28 10:36:21'),
(69, 774, 1013, '2015-09-28 10:36:21'),
(70, 769, 1013, '2015-09-28 10:36:21'),
(71, 768, 1013, '2015-09-28 10:36:21'),
(72, 767, 1013, '2015-09-28 10:36:21'),
(73, 770, 1013, '2015-09-28 10:36:21'),
(74, 757, 1013, '2015-09-28 10:36:21'),
(75, 758, 1013, '2015-09-28 10:36:21'),
(76, 773, 1013, '2015-09-28 10:36:21'),
(77, 749, 1013, '2015-09-28 10:36:22'),
(78, 748, 1013, '2015-09-28 10:36:22'),
(79, 747, 1013, '2015-09-28 10:36:22'),
(80, 763, 1013, '2015-09-28 10:36:22'),
(81, 764, 1013, '2015-09-28 10:36:22'),
(82, 759, 1013, '2015-09-28 10:36:22'),
(83, 761, 1013, '2015-09-28 10:36:22'),
(84, 766, 1013, '2015-09-28 10:36:22'),
(85, 765, 1013, '2015-09-28 10:36:22'),
(86, 760, 1013, '2015-09-28 10:36:23'),
(87, 771, 1013, '2015-09-29 02:24:18'),
(88, 776, 1021, '2015-10-05 09:10:43'),
(89, 777, 1021, '2015-10-05 09:10:43'),
(90, 778, 1021, '2015-10-05 09:10:43'),
(91, 779, 1021, '2015-10-05 09:10:43'),
(92, 780, 1021, '2015-10-05 09:10:43'),
(93, 784, 1021, '2015-10-05 09:10:43'),
(94, 782, 1021, '2015-10-05 09:10:43'),
(95, 781, 1021, '2015-10-05 09:10:43'),
(96, 783, 1021, '2015-10-05 09:10:43'),
(97, 785, 1021, '2015-10-05 09:10:44'),
(98, 778, 1022, '2015-10-05 12:07:49'),
(99, 777, 1022, '2015-10-05 12:07:49'),
(100, 776, 1022, '2015-10-05 12:07:49'),
(101, 780, 1022, '2015-10-05 12:07:49'),
(102, 779, 1022, '2015-10-05 12:07:49'),
(103, 781, 1022, '2015-10-05 12:07:49'),
(104, 782, 1022, '2015-10-05 12:07:49'),
(105, 785, 1022, '2015-10-05 12:07:50'),
(106, 784, 1022, '2015-10-05 12:07:50'),
(107, 783, 1022, '2015-10-05 12:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `fs_cflag`
--

CREATE TABLE IF NOT EXISTS `fs_cflag` (
`flagno` bigint(25) NOT NULL,
  `mno` bigint(25) NOT NULL,
  `plcno` bigint(25) NOT NULL,
  `flag_option` varchar(5) NOT NULL,
  `flag_note` varchar(250) NOT NULL,
  `flag_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fs_comment`
--

CREATE TABLE IF NOT EXISTS `fs_comment` (
`cno` int(25) NOT NULL COMMENT 'id',
  `mno` int(25) NOT NULL COMMENT 'commentor',
  `comment` varchar(250) NOT NULL COMMENT 'comment made',
  `table_name` varchar(25) NOT NULL COMMENT 'modal type',
  `table_id` int(25) NOT NULL COMMENT 'modal id',
  `tlike` int(25) NOT NULL COMMENT 'total like of the comment',
  `tdislike` int(25) NOT NULL COMMENT 'total dislike of the comment',
  `tflag` int(25) NOT NULL COMMENT 'total flag of the comment',
  `mno1` int(25) NOT NULL COMMENT 'owner of the modal',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'date comment made'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_comment`
--

INSERT INTO `fs_comment` (`cno`, `mno`, `comment`, `table_name`, `table_id`, `tlike`, `tdislike`, `tflag`, `mno1`, `date`) VALUES
(1, 1021, 'SDFSDF', 'fs_postedarticles', 26, 0, 0, 0, 0, '2015-10-06 21:22:20'),
(2, 1021, 'asda', 'fs_postedarticles', 26, 0, 0, 0, 0, '2015-10-06 21:25:04'),
(3, 1021, '1', 'fs_postedarticles', 26, 0, 0, 0, 0, '2015-10-06 21:33:47'),
(4, 1021, '2', 'fs_postedarticles', 26, 0, 0, 0, 0, '2015-10-06 21:33:48'),
(5, 1021, '3', 'fs_postedarticles', 26, 0, 0, 0, 0, '2015-10-06 21:33:48'),
(6, 1021, '4', 'fs_postedarticles', 26, 0, 0, 0, 0, '2015-10-06 21:33:49'),
(7, 1021, '5', 'fs_postedarticles', 26, 0, 0, 0, 0, '2015-10-06 21:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `fs_drip_modals`
--

CREATE TABLE IF NOT EXISTS `fs_drip_modals` (
`dmno` int(25) NOT NULL,
  `mno` int(25) NOT NULL COMMENT 'sharer',
  `table_id` int(25) NOT NULL COMMENT 'modal id',
  `table_name` varchar(25) NOT NULL COMMENT 'modal type',
  `comment` varchar(200) NOT NULL COMMENT 'sharer comments',
  `mno1` int(25) NOT NULL COMMENT 'owner of the modal',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'date dripped'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fs_favorite_modals`
--

CREATE TABLE IF NOT EXISTS `fs_favorite_modals` (
`fmno` int(25) NOT NULL,
  `mno` int(25) NOT NULL COMMENT 'ang nag favorite',
  `table_id` int(25) NOT NULL,
  `table_name` varchar(25) NOT NULL,
  `mno1` int(25) NOT NULL COMMENT 'owner of the modal',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_favorite_modals`
--

INSERT INTO `fs_favorite_modals` (`fmno`, `mno`, `table_id`, `table_name`, `mno1`, `date`) VALUES
(1, 1022, 26, 'fs_postedarticles', 1021, '2015-10-07 11:44:54'),
(2, 1022, 222380, 'postedlooks', 1021, '2015-10-07 11:45:19'),
(3, 1022, 25, 'fs_postedarticles', 1021, '2015-10-07 12:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `fs_flag`
--

CREATE TABLE IF NOT EXISTS `fs_flag` (
`flno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `table_name` varchar(25) NOT NULL,
  `table_id` int(25) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `action` varchar(20) NOT NULL,
  `option` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fs_follow`
--

CREATE TABLE IF NOT EXISTS `fs_follow` (
`flno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `mno1` int(25) NOT NULL,
  `followtime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_follow`
--

INSERT INTO `fs_follow` (`flno`, `mno`, `mno1`, `followtime`) VALUES
(19, 1022, 1021, '2015-10-08 08:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `fs_info_advertise`
--

CREATE TABLE IF NOT EXISTS `fs_info_advertise` (
`advertise_id` int(25) NOT NULL,
  `advertise_firstname` varchar(50) NOT NULL,
  `advertise_lastname` varchar(50) NOT NULL,
  `advertise_email` varchar(50) NOT NULL,
  `advertise_website` varchar(50) NOT NULL,
  `advertise_business_name` varchar(50) NOT NULL,
  `advertise_phone_number` varchar(50) NOT NULL,
  `advertise_budget` varchar(50) NOT NULL,
  `advertise_preferred` varchar(50) NOT NULL,
  `advertise_you_are` varchar(50) NOT NULL,
  `advertise_message` varchar(200) NOT NULL,
  `advertise_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fs_info_contact_us`
--

CREATE TABLE IF NOT EXISTS `fs_info_contact_us` (
`contact_us_id` int(25) NOT NULL,
  `contact_us_email` varchar(50) NOT NULL,
  `contact_us_subject` varchar(50) NOT NULL,
  `contact_us_message` varchar(200) NOT NULL,
  `contact_us_datatime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_info_contact_us`
--

INSERT INTO `fs_info_contact_us` (`contact_us_id`, `contact_us_email`, `contact_us_subject`, `contact_us_message`, `contact_us_datatime`) VALUES
(1, 'mrjesus@gmail.com', 'this is the subject', 'my message to the fs-team', '2013-11-20 06:06:55'),
(2, 'mrjesus@gmail.com', 'this is the subject', 'my message to the fs-team', '2013-11-20 06:06:59'),
(3, 'mrjesus@gmail.com', 'this is the subject', 'my message to the fs-team', '2013-11-20 06:07:01'),
(4, 'mrjesus@gmail.com', 'this is the subject', 'my message to the fs-team', '2013-11-20 06:07:03'),
(5, 'rwer@gmail.com', 'werwr ', 'ewrwer', '2013-11-20 18:16:58'),
(6, 'pecotrain1@gmail.com', 'dfjh', 'jfdfjdfdhfhdj', '2013-11-20 22:20:51'),
(7, 'mrjesuserwinsuarez@gmail.com', 'contacting to fashion sponge', 'this is my message to fashion sponge ', '2013-12-26 01:08:19'),
(8, 'pecotrain1@gmail.com', 'jhjkhjhjhj', 'jhhjkhjkhjhjk', '2013-12-26 01:10:53'),
(9, 'pecotrain1@gmail.com', 'Idea', 'How about you make a function that compares the top voted looks on facebook, twitter and instagram against the top look on fashionsponge. ', '2013-12-26 20:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `fs_invited`
--

CREATE TABLE IF NOT EXISTS `fs_invited` (
`invited_id` bigint(25) NOT NULL,
  `invited_fn` varchar(25) NOT NULL,
  `invited_ln` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `invited_email` varchar(50) NOT NULL,
  `invited_wob` varchar(500) NOT NULL,
  `invited_occu` varchar(25) NOT NULL,
  `invited_style` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `scrape_src` varchar(300) NOT NULL,
  `domain_source` varchar(200) NOT NULL,
  `tlook` int(25) NOT NULL,
  `total_karma` int(25) NOT NULL,
  `total_hype` int(25) NOT NULL,
  `total_comment` int(25) NOT NULL,
  `location` varchar(100) NOT NULL,
  `page` int(25) NOT NULL,
  `temail_sent` smallint(6) NOT NULL,
  `invited_offer` text NOT NULL,
  `invited_genCode` varchar(500) NOT NULL,
  `invited_ip` varchar(100) NOT NULL,
  `invited_status` smallint(6) NOT NULL,
  `timezone` varchar(10) NOT NULL,
  `timezone_url` varchar(200) NOT NULL,
  `scrape_version` int(11) NOT NULL,
  `signup_status` int(11) NOT NULL,
  `invited_date` datetime NOT NULL,
  `DateTimeSend` datetime NOT NULL,
  `DateTimeSend1` datetime NOT NULL,
  `DateTimeSend2` datetime NOT NULL,
  `invited_update_date` datetime NOT NULL,
  `DateTimeSend3` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fs_invited`
--

INSERT INTO `fs_invited` (`invited_id`, `invited_fn`, `invited_ln`, `gender`, `invited_email`, `invited_wob`, `invited_occu`, `invited_style`, `description`, `city`, `state`, `country`, `scrape_src`, `domain_source`, `tlook`, `total_karma`, `total_hype`, `total_comment`, `location`, `page`, `temail_sent`, `invited_offer`, `invited_genCode`, `invited_ip`, `invited_status`, `timezone`, `timezone_url`, `scrape_version`, `signup_status`, `invited_date`, `DateTimeSend`, `DateTimeSend1`, `DateTimeSend2`, `invited_update_date`, `DateTimeSend3`) VALUES
(1, 'Jesus gwapo', 'Suarez', 'Female', 'jesus@gmail.com', 'http://www.google.com,http://www.fashionsponge.com', 'none', 'chic', 'boy from Philippines ', 'iligan city', 'lanao province', 'philippines', '', '', 0, 0, 0, 0, 'NEW YORK', 1, 2, '', '', '', 7, 'BRST', 'http://www.timeanddate.com/worldclock/australia/brisbane', 1, 1, '2015-01-28 03:24:24', '2015-01-22 05:00:00', '2015-01-24 12:00:00', '2015-01-26 13:00:00', '2015-01-21 09:22:43', '2015-01-28 05:00:00'),
(2, 'SChuy Suarez ', 'Suarez', 'Female', 'jesus1@gmail.com', 'http://www.google.com,http://www.fashionsponge.com', 'none', 'chic', 'boy from Philippines ', 'iligan city', 'norty province', 'usa', '', '', 0, 0, 0, 0, 'NEW YORK', 1, 1, '', '', '', 12, 'EST', 'http://www.timeanddate.com/worldclock/australia/brisbane', 1, 1, '2015-01-28 03:24:24', '2015-01-22 05:00:00', '2015-01-24 12:00:00', '2015-01-26 13:00:00', '2015-01-21 09:22:43', '2015-01-28 05:00:00'),
(62, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'NEW YORK', 0, 0, '', '', '', 12, 'EST', '', 0, 0, '2015-02-09 23:50:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fs_invited_activity`
--

CREATE TABLE IF NOT EXISTS `fs_invited_activity` (
`fs_invited_activity_id_pk` int(25) NOT NULL,
  `fs_invited_queue_id_fk` int(25) NOT NULL,
  `fs_invited_activity_action` varchar(100) NOT NULL,
  `fs_invited_activity_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=533 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_invited_activity`
--

INSERT INTO `fs_invited_activity` (`fs_invited_activity_id_pk`, `fs_invited_queue_id_fk`, `fs_invited_activity_action`, `fs_invited_activity_date`) VALUES
(522, 159, 'Added to queue', '2015-02-04 06:20:28'),
(523, 159, 'SignUp', '2015-01-29 14:43:48'),
(524, 160, 'Remove', '2015-02-04 06:19:03'),
(525, 160, 'Open', '2015-02-05 06:19:49'),
(526, 160, 'Open', '2015-02-04 06:15:57'),
(527, 160, 'Received new invitation', '2015-02-04 06:20:40'),
(528, 160, 'Received new invited', '2015-02-06 14:30:25'),
(529, 160, 'Received new invited', '2015-02-06 14:30:25'),
(530, 160, 'Received new invited', '2015-02-06 14:31:19'),
(531, 160, 'Received new invited', '2015-02-06 14:36:19'),
(532, 161, 'Added to queue', '2015-02-10 05:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `fs_invited_location`
--

CREATE TABLE IF NOT EXISTS `fs_invited_location` (
`fs_invited_location_id_pk` bigint(25) NOT NULL,
  `fs_invited_location_name` varchar(50) NOT NULL,
  `fs_invited_location_send_tim1` time NOT NULL,
  `fs_invited_location_send_tim2` time NOT NULL,
  `fs_invited_location_send_tim3` time NOT NULL,
  `fs_invited_location_timezone` varchar(20) NOT NULL,
  `fs_invited_location_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=172 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_invited_location`
--

INSERT INTO `fs_invited_location` (`fs_invited_location_id_pk`, `fs_invited_location_name`, `fs_invited_location_send_tim1`, `fs_invited_location_send_tim2`, `fs_invited_location_send_tim3`, `fs_invited_location_timezone`, `fs_invited_location_date`) VALUES
(162, 'BRAZIL', '00:00:00', '00:00:00', '00:00:00', 'BST', '2015-01-23 16:36:59'),
(163, 'MANILA', '02:00:00', '06:00:00', '16:00:00', 'PHT', '2015-02-04 14:37:46'),
(164, 'USA', '00:00:00', '00:00:00', '00:00:00', 'EST', '2015-01-23 16:36:59'),
(165, 'VISAYAS', '07:00:00', '19:00:00', '15:00:00', 'PHT', '2015-01-29 07:53:13'),
(166, 'BRISBANE', '00:00:00', '00:00:00', '10:00:00', 'EST', '2015-01-29 08:59:04'),
(167, 'CEBU', '07:00:00', '16:00:00', '14:00:00', 'EST', '2015-01-29 07:53:04'),
(168, 'KOREA', '13:00:00', '18:00:00', '14:00:00', 'EST', '2015-01-29 07:40:13'),
(169, '', '00:00:00', '00:00:00', '00:00:00', '', '2015-01-23 16:37:00'),
(170, 'EST1', '23:00:00', '07:00:00', '09:00:00', 'BRS', '2015-02-04 14:39:34'),
(171, 'NEW YORK', '00:00:00', '00:00:00', '00:00:00', 'BRST', '2015-02-04 14:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `fs_invited_queue`
--

CREATE TABLE IF NOT EXISTS `fs_invited_queue` (
`fs_invited_queue_id_pk` int(25) NOT NULL,
  `fs_invited_id_fk` int(25) NOT NULL,
  `fs_invited_location_id_fk` int(25) NOT NULL,
  `fs_invited_queue_date_send1` date NOT NULL,
  `fs_invited_queue_date_send2` date NOT NULL,
  `fs_invited_queue_date_send3` date NOT NULL,
  `fs_invited_queue_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fs_invited_queue_status` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_invited_queue`
--

INSERT INTO `fs_invited_queue` (`fs_invited_queue_id_pk`, `fs_invited_id_fk`, `fs_invited_location_id_fk`, `fs_invited_queue_date_send1`, `fs_invited_queue_date_send2`, `fs_invited_queue_date_send3`, `fs_invited_queue_date`, `fs_invited_queue_status`) VALUES
(159, 1, 170, '2015-01-30', '2015-02-01', '2015-02-03', '2015-01-30 02:05:10', 1),
(160, 2, 170, '2015-01-30', '2015-02-01', '2015-02-03', '2015-01-29 10:11:29', 0),
(161, 62, 171, '2015-02-11', '2015-02-13', '2015-02-15', '2015-02-10 05:38:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fs_keyword`
--

CREATE TABLE IF NOT EXISTS `fs_keyword` (
`kno` int(25) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `table_name` varchar(25) NOT NULL,
  `table_id` int(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_keyword`
--

INSERT INTO `fs_keyword` (`kno`, `keyword`, `table_name`, `table_id`, `date`) VALUES
(1, 'undefined', 'postedlooks', 222380, '2015-10-05 05:18:21'),
(2, '', 'fs_postedarticles', 1, '2015-10-05 06:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `fs_look_flag`
--

CREATE TABLE IF NOT EXISTS `fs_look_flag` (
`flr_no` int(25) NOT NULL,
  `flr_flagger` int(25) NOT NULL,
  `flr_flagged` int(25) NOT NULL,
  `plno` int(25) NOT NULL,
  `action` varchar(20) NOT NULL,
  `flr_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fs_look_votes`
--

CREATE TABLE IF NOT EXISTS `fs_look_votes` (
`lvno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `plno` int(25) NOT NULL,
  `lvoption1` smallint(6) NOT NULL,
  `lvoption2` smallint(6) NOT NULL,
  `lvoption3` smallint(6) NOT NULL,
  `lvoption4` smallint(6) NOT NULL,
  `lvoption5` smallint(6) NOT NULL,
  `lvoption6` smallint(6) NOT NULL,
  `lvoption7` smallint(6) NOT NULL,
  `lvtotal` smallint(6) NOT NULL,
  `lvdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_look_votes`
--

INSERT INTO `fs_look_votes` (`lvno`, `mno`, `plno`, `lvoption1`, `lvoption2`, `lvoption3`, `lvoption4`, `lvoption5`, `lvoption6`, `lvoption7`, `lvtotal`, `lvdate`) VALUES
(1, 951, 483, 0, 0, 0, 14, 14, 0, 0, 28, '2014-07-02 02:25:09'),
(2, 133, 535, 0, 0, 0, 14, 0, 0, 0, 14, '2014-09-10 04:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `fs_look_votes_details`
--

CREATE TABLE IF NOT EXISTS `fs_look_votes_details` (
`lvdno` int(25) NOT NULL,
  `plno` int(11) NOT NULL,
  `tlvoption1` int(25) NOT NULL,
  `tlvoption2` int(25) NOT NULL,
  `tlvoption3` int(25) NOT NULL,
  `tlvoption4` int(25) NOT NULL,
  `tlvoption5` int(25) NOT NULL,
  `tlvoption6` int(25) NOT NULL,
  `tlvoption7` int(25) NOT NULL,
  `tlvsum` int(25) NOT NULL,
  `tlvadate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_look_votes_details`
--

INSERT INTO `fs_look_votes_details` (`lvdno`, `plno`, `tlvoption1`, `tlvoption2`, `tlvoption3`, `tlvoption4`, `tlvoption5`, `tlvoption6`, `tlvoption7`, `tlvsum`, `tlvadate`) VALUES
(1, 483, 0, 0, 0, 1, 1, 0, 0, 2, '2014-07-02 02:25:09'),
(2, 535, 0, 0, 0, 1, 0, 0, 0, 1, '2014-09-10 04:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `fs_members`
--

CREATE TABLE IF NOT EXISTS `fs_members` (
`mno` bigint(20) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middlename` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nickname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bdate` year(4) DEFAULT NULL,
  `occupation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preffered_style` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_look_agree` tinyint(1) NOT NULL,
  `plus_blogger` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blogdom` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blogurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aboutme` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ispicset` int(11) DEFAULT '0',
  `fbid` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_all_freinds` text COLLATE utf8_unicode_ci NOT NULL,
  `fb_freinds_on_fb` text COLLATE utf8_unicode_ci NOT NULL,
  `fb_freinds_on_fs` text COLLATE utf8_unicode_ci NOT NULL,
  `twid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isVal` int(11) NOT NULL DEFAULT '0',
  `tlog` bigint(25) NOT NULL,
  `iral` int(11) NOT NULL,
  `idal` int(11) NOT NULL,
  `ifal` int(11) NOT NULL,
  `ifam` int(11) NOT NULL,
  `icoal` int(11) NOT NULL,
  `icoab` int(11) NOT NULL,
  `sf` int(11) NOT NULL,
  `coml` int(11) NOT NULL,
  `combp` int(11) NOT NULL,
  `rtmc` int(11) NOT NULL,
  `smnlpbpif` int(11) NOT NULL,
  `tpercentage` int(25) NOT NULL,
  `tlooks` int(25) NOT NULL,
  `tarticle` int(25) NOT NULL,
  `tmedia` int(25) NOT NULL,
  `tfollower` int(25) NOT NULL,
  `tfollowing` int(25) NOT NULL,
  `trating` int(25) NOT NULL,
  `tview` int(25) NOT NULL,
  `tpercentage_article` int(25) NOT NULL,
  `tpercentage_look` int(25) NOT NULL,
  `tpercentage_media` int(25) NOT NULL,
  `trating_article` int(25) NOT NULL,
  `trating_look` int(25) NOT NULL,
  `trating_media` int(25) NOT NULL,
  `work_at` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skill` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `studied_at` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `studied_with` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `studied_graduate_date` year(4) NOT NULL,
  `url_facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url_twitter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url_pinterest` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url_instagram` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url_tumblr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url_web` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url_google_plus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `identity_login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `identity_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `identity_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `identity_generated_code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `logtime` datetime NOT NULL,
  `logstat` tinyint(4) NOT NULL,
  `datejoined` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1023 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fs_members`
--

INSERT INTO `fs_members` (`mno`, `fullname`, `lastname`, `middlename`, `firstname`, `nickname`, `gender`, `website`, `bdate`, `occupation`, `preffered_style`, `post_look_agree`, `plus_blogger`, `country`, `state_`, `city`, `zip`, `blogdom`, `blogurl`, `aboutme`, `ispicset`, `fbid`, `fb_all_freinds`, `fb_freinds_on_fb`, `fb_freinds_on_fs`, `twid`, `isVal`, `tlog`, `iral`, `idal`, `ifal`, `ifam`, `icoal`, `icoab`, `sf`, `coml`, `combp`, `rtmc`, `smnlpbpif`, `tpercentage`, `tlooks`, `tarticle`, `tmedia`, `tfollower`, `tfollowing`, `trating`, `tview`, `tpercentage_article`, `tpercentage_look`, `tpercentage_media`, `trating_article`, `trating_look`, `trating_media`, `work_at`, `skill`, `studied_at`, `studied_with`, `studied_graduate_date`, `url_facebook`, `url_twitter`, `url_pinterest`, `url_instagram`, `url_tumblr`, `url_web`, `url_google_plus`, `identity_login`, `identity_username`, `identity_email`, `identity_generated_code`, `status`, `logtime`, `logstat`, `datejoined`) VALUES
(1022, 'edsan barbecho', 'barbecho', NULL, 'edsan', '', 'Male', NULL, NULL, NULL, '', 1, 'Yes', NULL, NULL, NULL, NULL, 'edsan blog name', 'www.edsanblog.com', NULL, 0, NULL, '', '', '', NULL, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 0, 0, 1, 0, 14, 0, 0, 0, 0, 0, 0, '', '', '', '', 0000, '', '', '', '', '', '', '', '123456', 'edsan', 'edsan@gmail.com', '3997e104d232b15ba5538a06546b611a', 0, '2015-10-05 08:06:34', 1, '2015-10-05'),
(1021, 'Suarez Yurag Jesus', 'Suarez', NULL, 'Jesus', 'Yurag', 'Female', '', NULL, 'Web developer and Software Programmer', '', 1, 'Yes', 'Philippines', 'Lanao del Norte', 'Iligan City', '9200', 'Jesus My blog name', 'www.myblogname.com', NULL, 0, NULL, '', '', '', NULL, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 6, 0, 1, 0, 0, 60, 0, 0, 0, 73, 1, 0, 'Home', '', '', '', 0000, 'www.Facebook.com', 'www.Tumblr.com', 'www.Twitter.com', 'www.Instagram.com', '', '', '', '123456', 'Jesus', 'mrjesuserwinsuarez@gmail.com', 'd690bca3e70a50146a4e25ff5682f55e', 0, '2015-10-05 05:08:09', 1, '2015-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `fs_member_accounts`
--

CREATE TABLE IF NOT EXISTS `fs_member_accounts` (
`mano` bigint(20) NOT NULL,
  `mno` bigint(20) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1006 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fs_member_accounts`
--

INSERT INTO `fs_member_accounts` (`mano`, `mno`, `email`, `username`, `pass`) VALUES
(1005, 1022, 'edsan@gmail.com', 'edsan', '66eccf32c43c345b4e4b88bd529dc384'),
(1004, 1021, 'mrjesuserwinsuarez@gmail.com', 'Jesus', '66eccf32c43c345b4e4b88bd529dc384');

-- --------------------------------------------------------

--
-- Table structure for table `fs_member_categories`
--

CREATE TABLE IF NOT EXISTS `fs_member_categories` (
`mcno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `category` varchar(100) NOT NULL,
  `trating` int(25) NOT NULL,
  `tpercentage` int(25) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_member_categories`
--

INSERT INTO `fs_member_categories` (`mcno`, `mno`, `category`, `trating`, `tpercentage`, `table_name`, `date`) VALUES
(1, 1006, 'Fashion', 1, 100, 'fs_postedarticles', '2014-10-20 01:30:02'),
(2, 1007, 'Beauty', 2, 50, 'fs_postedarticles', '2014-10-20 03:20:02'),
(3, 1007, 'Entertainment', 2, 100, 'fs_postedarticles', '2014-10-20 03:20:06'),
(4, 1007, 'Fashion', 6, 100, 'fs_postedarticles', '2014-10-20 03:20:08'),
(5, 1007, 'Streetwear', 6, 67, 'postedlooks', '2014-10-20 03:22:46'),
(6, 1007, 'Menswear', 4, 75, 'postedlooks', '2014-10-20 03:22:50'),
(7, 1007, 'Chic', 0, 0, 'postedlooks', '2014-10-20 04:26:02'),
(8, 1007, 'Lifestyle', 5, 80, 'fs_postedarticles', '2014-10-20 04:51:46'),
(9, 1007, 'Technology', 2, 50, 'fs_postedarticles', '2014-10-20 04:52:30'),
(10, 133, 'Preppy', 1, 100, 'postedlooks', '2014-10-20 04:56:04'),
(11, 133, 'Menswear', 5, 100, 'postedlooks', '2014-10-20 04:56:18'),
(12, 133, 'Beauty', 10, 80, 'fs_postedarticles', '2014-10-20 04:56:58'),
(13, 133, 'Lifestyle', 2, 50, 'fs_postedarticles', '2014-10-20 05:35:13'),
(14, 133, 'Entertainment', 2, 100, 'fs_postedarticles', '2014-10-20 05:35:22'),
(15, 1006, 'Beauty', 3, 100, 'fs_postedarticles', '2014-10-30 09:02:39'),
(16, 977, 'Chic', 0, 0, 'postedlooks', '2014-11-03 22:26:57'),
(17, 975, 'Chic', 0, 0, 'postedlooks', '2014-11-03 22:53:08'),
(18, 975, 'Menswear', 1, 100, 'postedlooks', '2014-11-04 01:22:47'),
(19, 975, 'Preppy', 2, 100, 'postedlooks', '2014-11-04 01:29:21'),
(20, 1003, 'Preppy', 1, 100, 'postedlooks', '2014-11-04 03:41:50'),
(21, 754, 'Chic', 6, 83, 'postedlooks', '2014-11-04 03:44:19'),
(22, 1006, 'Preppy', 1, 0, 'postedlooks', '2014-11-05 22:38:10'),
(23, 133, 'Chic', 2, 100, 'postedlooks', '2014-11-05 23:02:48'),
(24, 1001, 'Preppy', 1, 100, 'postedlooks', '2014-11-06 03:15:38'),
(25, 1006, 'Menswear', 1, 100, 'postedlooks', '2014-11-07 02:22:51'),
(26, 975, 'Lifestyle', 1, 100, 'fs_postedarticles', '2014-11-07 02:55:57'),
(27, 954, 'Lifestyle', 2, 100, 'fs_postedarticles', '2014-11-11 00:30:31'),
(28, 954, 'Chic', 2, 50, 'postedlooks', '2014-11-12 01:10:47'),
(29, 954, 'Menswear', 2, 100, 'postedlooks', '2014-11-12 01:52:11'),
(30, 1015, 'Chic', 1, 100, 'postedlooks', '2014-11-12 01:52:47'),
(31, 1015, 'Lifestyle', 0, 0, 'fs_postedarticles', '2014-11-12 01:53:10'),
(32, 954, 'Select', 1, 0, 'fs_postedarticles', '2014-11-12 02:50:16'),
(33, 954, 'Beauty', 2, 50, 'fs_postedarticles', '2014-11-12 02:50:38'),
(34, 1015, 'Entertainment', 0, 0, 'fs_postedarticles', '2014-11-16 22:31:20'),
(35, 975, 'Fashion', 1, 100, 'fs_postedarticles', '2014-11-28 05:05:06'),
(36, 975, 'Technology', 1, 100, 'fs_postedarticles', '2014-12-03 03:32:42'),
(37, 975, 'Beauty', 0, 0, 'fs_postedarticles', '2014-12-03 03:38:17'),
(38, 975, 'Entertainment', 0, 0, 'fs_postedarticles', '2014-12-03 22:01:30'),
(39, 975, 'bohemian', 0, 0, 'postedlooks', '2014-12-09 04:51:58'),
(40, 975, 'casual', 1, 100, 'postedlooks', '2014-12-09 04:52:42'),
(41, 139, 'Chic', 0, 0, 'postedlooks', '2015-03-06 14:34:02'),
(42, 139, 'Select', 0, 0, 'postedlooks', '2015-03-09 04:24:09'),
(43, 139, 'Fashion', 0, 0, 'fs_postedarticles', '2015-03-09 04:24:34'),
(44, 139, 'Menswear', 0, 0, 'postedlooks', '2015-03-13 03:10:07'),
(45, 139, 'Streetwear', 0, 0, 'postedlooks', '2015-03-17 16:36:17'),
(46, 1015, 'Menswear', 0, 0, 'postedlooks', '2015-05-02 05:26:52'),
(47, 1015, 'Beauty', 0, 0, 'fs_postedarticles', '2015-05-11 09:04:00'),
(48, 1015, 'Bohemian', 0, 0, 'postedlooks', '2015-05-11 09:32:14'),
(49, 1015, 'Streetwear', 0, 0, 'postedlooks', '2015-05-11 09:33:37'),
(50, 137, 'Entertainment', 1, 100, 'fs_postedarticles', '2015-06-19 03:29:20'),
(51, 137, 'Menswear', 1, 100, 'postedlooks', '2015-06-23 01:49:45'),
(52, 137, 'Chic', 0, 0, 'postedlooks', '2015-06-23 01:51:35'),
(53, 137, 'Technology', 0, 0, 'fs_postedarticles', '2015-06-24 01:30:49'),
(54, 137, 'Lifestyle', 0, 0, 'fs_postedarticles', '2015-06-24 01:31:21'),
(55, 137, 'Fashion', 0, 0, 'fs_postedarticles', '2015-07-08 01:47:50'),
(56, 137, 'Bohemian', 1, 100, 'postedlooks', '2015-07-16 00:51:18'),
(57, 137, 'Preppy', 0, 0, 'postedlooks', '2015-08-03 02:48:20'),
(58, 137, 'Grunge', 0, 0, 'postedlooks', '2015-08-03 03:21:56'),
(59, 137, 'Formal', 0, 0, 'postedlooks', '2015-08-03 03:23:18'),
(60, 137, 'Select', 4, 100, 'postedlooks', '2015-08-03 04:02:02'),
(61, 137, 'Casual', 0, 0, 'postedlooks', '2015-08-03 04:17:50'),
(62, 136, 'Select', 0, 0, 'postedlooks', '2015-08-06 00:20:21'),
(63, 136, 'Casual', 0, 0, 'postedlooks', '2015-08-06 01:13:49'),
(64, 136, 'Bohemian', 0, 0, 'postedlooks', '2015-08-06 01:31:18'),
(65, 136, 'Chic', 0, 0, 'postedlooks', '2015-08-06 03:25:57'),
(66, 137, '', 0, 0, 'postedlooks', '2015-08-06 04:24:52'),
(67, 1008, 'Fashion', 0, 0, 'fs_postedarticles', '2015-08-10 06:55:00'),
(68, 137, 'Beauty', 0, 0, 'fs_postedarticles', '2015-08-10 22:51:22'),
(69, 1013, 'Fashion', 1, 100, 'fs_postedarticles', '2015-08-17 23:54:44'),
(70, 1013, 'Beauty', 1, 100, 'fs_postedarticles', '2015-08-18 00:18:11'),
(71, 1013, 'Chic', 3, 100, 'postedlooks', '2015-08-18 00:23:47'),
(72, 1013, 'Entertainment', 2, 100, 'fs_postedarticles', '2015-08-18 00:24:41'),
(73, 1013, 'Select', 0, 0, 'postedlooks', '2015-08-18 01:36:39'),
(74, 1013, 'Lifestyle', 0, 0, 'fs_postedarticles', '2015-08-18 01:38:07'),
(75, 1013, 'Bohemian', 0, 0, 'postedlooks', '2015-08-20 09:13:35'),
(76, 1013, 'Casual', 0, 0, 'postedlooks', '2015-08-20 09:59:22'),
(77, 1008, 'Entertainment', 0, 0, 'fs_postedarticles', '2015-08-21 05:03:02'),
(78, 1008, 'Chic', 0, 0, 'postedlooks', '2015-08-25 06:46:52'),
(79, 1013, 'Menswear', 0, 0, 'postedlooks', '2015-08-26 06:39:03'),
(80, 1008, 'Casual', 0, 0, 'postedlooks', '2015-08-26 06:40:19'),
(81, 1013, 'Grunge', 0, 0, 'postedlooks', '2015-09-01 04:33:09'),
(82, 636, 'Entertainment', 0, 0, 'fs_postedarticles', '2015-09-24 05:29:11'),
(83, 1013, 'Formal', 0, 0, 'postedlooks', '2015-09-30 22:14:14'),
(84, 1015, 'Fashion', 0, 0, 'fs_postedarticles', '2015-10-01 01:08:30'),
(85, 1021, 'Casual', 1, 100, 'postedlooks', '2015-10-05 05:18:21'),
(86, 1021, 'Fashion', 0, 0, 'fs_postedarticles', '2015-10-05 06:49:00'),
(87, 1021, 'Beauty', 1, 100, 'fs_postedarticles', '2015-10-05 06:49:44'),
(88, 1021, 'Entertainment', 0, 0, 'fs_postedarticles', '2015-10-05 07:05:19'),
(89, 1021, 'Formal', 0, 0, 'postedlooks', '2015-10-05 07:14:59'),
(90, 1022, 'Chic', 0, 0, 'postedlooks', '2015-10-06 06:28:51'),
(91, 1022, 'Beauty', 0, 0, 'fs_postedarticles', '2015-10-09 07:17:51'),
(92, 1022, 'Entertainment', 0, 0, 'fs_postedarticles', '2015-10-09 07:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `fs_member_profile_pic`
--

CREATE TABLE IF NOT EXISTS `fs_member_profile_pic` (
`mppno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `action` varchar(50) NOT NULL,
  `tcomment` int(25) NOT NULL,
  `dateupdated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1045 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_member_profile_pic`
--

INSERT INTO `fs_member_profile_pic` (`mppno`, `mno`, `action`, `tcomment`, `dateupdated`) VALUES
(1, 968, 'Joined', 37, '2014-07-22 00:01:55'),
(2, 954, 'Joined', 4, '2014-07-22 00:02:38'),
(3, 967, 'Joined', 0, '2014-07-22 00:08:56'),
(4, 966, 'Joined', 12, '2014-07-22 00:08:56'),
(5, 965, 'Joined', 0, '2014-07-22 00:08:56'),
(6, 964, 'Joined', 0, '2014-07-22 00:08:56'),
(7, 963, 'Joined', 0, '2014-07-22 00:08:56'),
(8, 962, 'Joined', 0, '2014-07-22 00:08:56'),
(9, 961, 'Joined', 2, '2014-07-22 00:08:56'),
(10, 960, 'Joined', 0, '2014-07-22 00:08:57'),
(11, 959, 'Joined', 0, '2014-07-22 00:08:57'),
(12, 958, 'Joined', 1, '2014-07-22 00:08:57'),
(13, 957, 'Joined', 0, '2014-07-22 00:08:57'),
(14, 956, 'Joined', 0, '2014-07-22 00:08:57'),
(15, 955, 'Joined', 0, '2014-07-22 00:08:57'),
(16, 953, 'Joined', 0, '2014-07-22 00:08:57'),
(17, 952, 'Joined', 0, '2014-07-22 00:08:57'),
(18, 951, 'Joined', 1, '2014-07-22 00:08:58'),
(19, 950, 'Joined', 0, '2014-07-22 00:08:58'),
(20, 949, 'Joined', 1, '2014-07-22 00:08:58'),
(21, 948, 'Joined', 0, '2014-07-22 00:08:58'),
(22, 947, 'Joined', 5, '2014-07-22 00:08:58'),
(23, 946, 'Joined', 2, '2014-07-22 00:08:58'),
(24, 945, 'Joined', 1, '2014-07-22 00:08:58'),
(25, 944, 'Joined', 1, '2014-07-22 00:08:58'),
(26, 943, 'Joined', 0, '2014-07-22 00:08:59'),
(27, 937, 'Joined', 0, '2014-07-22 00:08:59'),
(28, 936, 'Joined', 0, '2014-07-22 00:08:59'),
(29, 935, 'Joined', 0, '2014-07-22 00:08:59'),
(30, 934, 'Joined', 0, '2014-07-22 00:08:59'),
(31, 933, 'Joined', 0, '2014-07-22 00:08:59'),
(32, 932, 'Joined', 0, '2014-07-22 00:08:59'),
(33, 931, 'Joined', 0, '2014-07-22 00:08:59'),
(34, 930, 'Joined', 0, '2014-07-22 00:09:00'),
(35, 929, 'Joined', 0, '2014-07-22 00:09:00'),
(36, 928, 'Joined', 0, '2014-07-22 00:09:00'),
(37, 927, 'Joined', 0, '2014-07-22 00:09:00'),
(38, 926, 'Joined', 0, '2014-07-22 00:09:00'),
(39, 925, 'Joined', 0, '2014-07-22 00:09:00'),
(40, 924, 'Joined', 162, '2014-07-22 00:09:00'),
(41, 923, 'Joined', 0, '2014-07-22 00:09:00'),
(42, 922, 'Joined', 0, '2014-07-22 00:09:00'),
(43, 921, 'Joined', 0, '2014-07-22 00:09:01'),
(44, 920, 'Joined', 0, '2014-07-22 00:09:01'),
(45, 919, 'Joined', 0, '2014-07-22 00:09:01'),
(46, 918, 'Joined', 0, '2014-07-22 00:09:01'),
(47, 917, 'Joined', 0, '2014-07-22 00:09:01'),
(48, 916, 'Joined', 0, '2014-07-22 00:09:01'),
(49, 915, 'Joined', 0, '2014-07-22 00:09:01'),
(50, 914, 'Joined', 0, '2014-07-22 00:09:01'),
(51, 913, 'Joined', 0, '2014-07-22 00:09:02'),
(52, 912, 'Joined', 0, '2014-07-22 00:09:02'),
(53, 911, 'Joined', 0, '2014-07-22 00:09:02'),
(54, 910, 'Joined', 0, '2014-07-22 00:09:02'),
(55, 909, 'Joined', 0, '2014-07-22 00:09:02'),
(56, 908, 'Joined', 0, '2014-07-22 00:09:02'),
(57, 907, 'Joined', 0, '2014-07-22 00:09:02'),
(58, 906, 'Joined', 0, '2014-07-22 00:09:02'),
(59, 905, 'Joined', 0, '2014-07-22 00:09:03'),
(60, 904, 'Joined', 0, '2014-07-22 00:09:03'),
(61, 903, 'Joined', 0, '2014-07-22 00:09:03'),
(62, 902, 'Joined', 0, '2014-07-22 00:09:03'),
(63, 901, 'Joined', 0, '2014-07-22 00:09:03'),
(64, 900, 'Joined', 0, '2014-07-22 00:09:03'),
(65, 899, 'Joined', 0, '2014-07-22 00:09:03'),
(66, 898, 'Joined', 0, '2014-07-22 00:09:03'),
(67, 897, 'Joined', 0, '2014-07-22 00:09:03'),
(68, 896, 'Joined', 0, '2014-07-22 00:09:04'),
(69, 895, 'Joined', 0, '2014-07-22 00:09:04'),
(70, 894, 'Joined', 0, '2014-07-22 00:09:04'),
(71, 893, 'Joined', 0, '2014-07-22 00:09:04'),
(72, 892, 'Joined', 0, '2014-07-22 00:09:04'),
(73, 891, 'Joined', 0, '2014-07-22 00:09:04'),
(74, 890, 'Joined', 1, '2014-07-22 00:09:04'),
(75, 889, 'Joined', 0, '2014-07-22 00:09:04'),
(76, 888, 'Joined', 0, '2014-07-22 00:09:04'),
(77, 887, 'Joined', 0, '2014-07-22 00:09:05'),
(78, 886, 'Joined', 0, '2014-07-22 00:09:05'),
(79, 885, 'Joined', 0, '2014-07-22 00:09:05'),
(80, 884, 'Joined', 0, '2014-07-22 00:09:05'),
(81, 883, 'Joined', 5, '2014-07-22 00:09:05'),
(82, 882, 'Joined', 0, '2014-07-22 00:09:05'),
(83, 881, 'Joined', 0, '2014-07-22 00:09:05'),
(84, 880, 'Joined', 1, '2014-07-22 00:09:05'),
(85, 879, 'Joined', 0, '2014-07-22 00:09:05'),
(86, 878, 'Joined', 0, '2014-07-22 00:09:06'),
(87, 877, 'Joined', 0, '2014-07-22 00:09:06'),
(88, 876, 'Joined', 0, '2014-07-22 00:09:06'),
(89, 875, 'Joined', 0, '2014-07-22 00:09:07'),
(90, 874, 'Joined', 0, '2014-07-22 00:09:07'),
(91, 873, 'Joined', 0, '2014-07-22 00:09:07'),
(92, 872, 'Joined', 0, '2014-07-22 00:09:07'),
(93, 871, 'Joined', 0, '2014-07-22 00:09:07'),
(94, 870, 'Joined', 0, '2014-07-22 00:09:07'),
(95, 869, 'Joined', 0, '2014-07-22 00:09:07'),
(96, 868, 'Joined', 0, '2014-07-22 00:09:07'),
(97, 867, 'Joined', 0, '2014-07-22 00:09:07'),
(98, 866, 'Joined', 0, '2014-07-22 00:09:08'),
(99, 865, 'Joined', 0, '2014-07-22 00:09:08'),
(100, 864, 'Joined', 29, '2014-07-22 00:09:08'),
(101, 863, 'Joined', 0, '2014-07-22 00:09:08'),
(102, 862, 'Joined', 0, '2014-07-22 00:09:08'),
(103, 861, 'Joined', 0, '2014-07-22 00:09:08'),
(104, 860, 'Joined', 0, '2014-07-22 00:09:08'),
(105, 859, 'Joined', 0, '2014-07-22 00:09:09'),
(106, 858, 'Joined', 0, '2014-07-22 00:09:09'),
(107, 857, 'Joined', 0, '2014-07-22 00:09:09'),
(108, 856, 'Joined', 0, '2014-07-22 00:09:09'),
(109, 855, 'Joined', 0, '2014-07-22 00:09:09'),
(110, 854, 'Joined', 0, '2014-07-22 00:09:09'),
(111, 853, 'Joined', 0, '2014-07-22 00:09:09'),
(112, 852, 'Joined', 0, '2014-07-22 00:09:09'),
(113, 851, 'Joined', 0, '2014-07-22 00:09:09'),
(114, 850, 'Joined', 0, '2014-07-22 00:09:10'),
(115, 849, 'Joined', 0, '2014-07-22 00:09:10'),
(116, 848, 'Joined', 0, '2014-07-22 00:09:10'),
(117, 847, 'Joined', 0, '2014-07-22 00:09:10'),
(118, 846, 'Joined', 0, '2014-07-22 00:09:10'),
(119, 845, 'Joined', 0, '2014-07-22 00:09:10'),
(120, 844, 'Joined', 0, '2014-07-22 00:09:10'),
(121, 843, 'Joined', 0, '2014-07-22 00:09:10'),
(122, 842, 'Joined', 0, '2014-07-22 00:09:10'),
(123, 841, 'Joined', 0, '2014-07-22 00:09:11'),
(124, 840, 'Joined', 0, '2014-07-22 00:09:11'),
(125, 839, 'Joined', 0, '2014-07-22 00:09:11'),
(126, 838, 'Joined', 4, '2014-07-22 00:09:11'),
(127, 837, 'Joined', 2, '2014-07-22 00:09:11'),
(128, 836, 'Joined', 3, '2014-07-22 00:09:11'),
(129, 835, 'Joined', 4, '2014-07-22 00:09:11'),
(130, 834, 'Joined', 2, '2014-07-22 00:09:11'),
(131, 833, 'Joined', 0, '2014-07-22 00:09:12'),
(132, 832, 'Joined', 0, '2014-07-22 00:09:12'),
(133, 831, 'Joined', 6, '2014-07-22 00:09:12'),
(134, 830, 'Joined', 0, '2014-07-22 00:09:12'),
(135, 829, 'Joined', 0, '2014-07-22 00:09:12'),
(136, 828, 'Joined', 0, '2014-07-22 00:09:12'),
(137, 827, 'Joined', 0, '2014-07-22 00:09:12'),
(138, 826, 'Joined', 0, '2014-07-22 00:09:13'),
(139, 825, 'Joined', 0, '2014-07-22 00:09:13'),
(140, 824, 'Joined', 0, '2014-07-22 00:09:13'),
(141, 823, 'Joined', 0, '2014-07-22 00:09:13'),
(142, 822, 'Joined', 0, '2014-07-22 00:09:13'),
(143, 821, 'Joined', 0, '2014-07-22 00:09:13'),
(144, 820, 'Joined', 0, '2014-07-22 00:09:13'),
(145, 819, 'Joined', 0, '2014-07-22 00:09:13'),
(146, 818, 'Joined', 0, '2014-07-22 00:09:14'),
(147, 817, 'Joined', 0, '2014-07-22 00:09:14'),
(148, 816, 'Joined', 0, '2014-07-22 00:09:14'),
(149, 815, 'Joined', 0, '2014-07-22 00:09:14'),
(150, 814, 'Joined', 0, '2014-07-22 00:09:14'),
(151, 813, 'Joined', 0, '2014-07-22 00:09:14'),
(152, 812, 'Joined', 0, '2014-07-22 00:09:14'),
(153, 811, 'Joined', 0, '2014-07-22 00:09:14'),
(154, 810, 'Joined', 0, '2014-07-22 00:09:14'),
(155, 809, 'Joined', 0, '2014-07-22 00:09:15'),
(156, 808, 'Joined', 0, '2014-07-22 00:09:15'),
(157, 807, 'Joined', 0, '2014-07-22 00:09:15'),
(158, 806, 'Joined', 0, '2014-07-22 00:09:15'),
(159, 805, 'Joined', 0, '2014-07-22 00:09:15'),
(160, 804, 'Joined', 0, '2014-07-22 00:09:15'),
(161, 803, 'Joined', 0, '2014-07-22 00:09:15'),
(162, 802, 'Joined', 0, '2014-07-22 00:09:15'),
(163, 801, 'Joined', 0, '2014-07-22 00:09:15'),
(164, 800, 'Joined', 0, '2014-07-22 00:09:16'),
(165, 799, 'Joined', 0, '2014-07-22 00:09:16'),
(166, 798, 'Joined', 0, '2014-07-22 00:09:16'),
(167, 797, 'Joined', 0, '2014-07-22 00:09:16'),
(168, 796, 'Joined', 0, '2014-07-22 00:09:16'),
(169, 795, 'Joined', 0, '2014-07-22 00:09:16'),
(170, 794, 'Joined', 0, '2014-07-22 00:09:17'),
(171, 793, 'Joined', 0, '2014-07-22 00:09:17'),
(172, 792, 'Joined', 0, '2014-07-22 00:09:17'),
(173, 791, 'Joined', 0, '2014-07-22 00:09:18'),
(174, 790, 'Joined', 0, '2014-07-22 00:09:18'),
(175, 789, 'Joined', 0, '2014-07-22 00:09:18'),
(176, 788, 'Joined', 0, '2014-07-22 00:09:18'),
(177, 787, 'Joined', 0, '2014-07-22 00:09:18'),
(178, 786, 'Joined', 0, '2014-07-22 00:09:18'),
(179, 785, 'Joined', 0, '2014-07-22 00:09:18'),
(180, 784, 'Joined', 0, '2014-07-22 00:09:18'),
(181, 783, 'Joined', 0, '2014-07-22 00:09:18'),
(182, 782, 'Joined', 0, '2014-07-22 00:09:19'),
(183, 781, 'Joined', 0, '2014-07-22 00:09:19'),
(184, 780, 'Joined', 0, '2014-07-22 00:09:19'),
(185, 779, 'Joined', 0, '2014-07-22 00:09:19'),
(186, 778, 'Joined', 0, '2014-07-22 00:09:19'),
(187, 777, 'Joined', 0, '2014-07-22 00:09:19'),
(188, 776, 'Joined', 0, '2014-07-22 00:09:19'),
(189, 775, 'Joined', 0, '2014-07-22 00:09:19'),
(190, 774, 'Joined', 0, '2014-07-22 00:09:19'),
(191, 773, 'Joined', 0, '2014-07-22 00:09:19'),
(192, 772, 'Joined', 0, '2014-07-22 00:09:20'),
(193, 771, 'Joined', 0, '2014-07-22 00:09:20'),
(194, 770, 'Joined', 0, '2014-07-22 00:09:20'),
(195, 769, 'Joined', 0, '2014-07-22 00:09:20'),
(196, 768, 'Joined', 0, '2014-07-22 00:09:20'),
(197, 767, 'Joined', 0, '2014-07-22 00:09:20'),
(198, 766, 'Joined', 0, '2014-07-22 00:09:20'),
(199, 765, 'Joined', 0, '2014-07-22 00:09:20'),
(200, 764, 'Joined', 0, '2014-07-22 00:09:21'),
(201, 763, 'Joined', 0, '2014-07-22 00:09:21'),
(202, 762, 'Joined', 0, '2014-07-22 00:09:21'),
(203, 761, 'Joined', 0, '2014-07-22 00:09:21'),
(204, 760, 'Joined', 0, '2014-07-22 00:09:21'),
(205, 759, 'Joined', 0, '2014-07-22 00:09:21'),
(206, 758, 'Joined', 0, '2014-07-22 00:09:21'),
(207, 757, 'Joined', 0, '2014-07-22 00:09:21'),
(208, 756, 'Joined', 0, '2014-07-22 00:09:21'),
(209, 755, 'Joined', 0, '2014-07-22 00:09:22'),
(210, 754, 'Joined', 0, '2014-07-22 00:09:22'),
(211, 753, 'Joined', 0, '2014-07-22 00:09:22'),
(212, 752, 'Joined', 0, '2014-07-22 00:09:22'),
(213, 751, 'Joined', 0, '2014-07-22 00:09:22'),
(214, 750, 'Joined', 0, '2014-07-22 00:09:22'),
(215, 749, 'Joined', 0, '2014-07-22 00:09:22'),
(216, 748, 'Joined', 0, '2014-07-22 00:09:22'),
(217, 747, 'Joined', 0, '2014-07-22 00:09:23'),
(218, 746, 'Joined', 0, '2014-07-22 00:09:23'),
(219, 745, 'Joined', 0, '2014-07-22 00:09:23'),
(220, 744, 'Joined', 0, '2014-07-22 00:09:23'),
(221, 743, 'Joined', 0, '2014-07-22 00:09:23'),
(222, 742, 'Joined', 0, '2014-07-22 00:09:23'),
(223, 741, 'Joined', 0, '2014-07-22 00:09:23'),
(224, 740, 'Joined', 0, '2014-07-22 00:09:23'),
(225, 739, 'Joined', 0, '2014-07-22 00:09:23'),
(226, 738, 'Joined', 0, '2014-07-22 00:09:24'),
(227, 737, 'Joined', 0, '2014-07-22 00:09:24'),
(228, 736, 'Joined', 0, '2014-07-22 00:09:24'),
(229, 735, 'Joined', 0, '2014-07-22 00:09:24'),
(230, 734, 'Joined', 0, '2014-07-22 00:09:24'),
(231, 733, 'Joined', 0, '2014-07-22 00:09:24'),
(232, 732, 'Joined', 0, '2014-07-22 00:09:24'),
(233, 731, 'Joined', 0, '0000-00-00 00:00:00'),
(234, 730, 'Joined', 0, '2014-07-22 00:10:36'),
(235, 729, 'Joined', 0, '2014-07-22 00:10:36'),
(236, 728, 'Joined', 0, '2014-07-22 00:10:36'),
(237, 727, 'Joined', 0, '2014-07-22 00:10:36'),
(238, 726, 'Joined', 0, '2014-07-22 00:10:37'),
(239, 725, 'Joined', 0, '2014-07-22 00:10:37'),
(240, 724, 'Joined', 0, '2014-07-22 00:10:37'),
(241, 723, 'Joined', 0, '2014-07-22 00:10:37'),
(242, 722, 'Joined', 0, '2014-07-22 00:10:37'),
(243, 721, 'Joined', 0, '2014-07-22 00:10:37'),
(244, 720, 'Joined', 0, '2014-07-22 00:10:38'),
(245, 719, 'Joined', 0, '2014-07-22 00:10:38'),
(246, 718, 'Joined', 0, '2014-07-22 00:10:38'),
(247, 717, 'Joined', 0, '2014-07-22 00:10:38'),
(248, 716, 'Joined', 0, '2014-07-22 00:10:38'),
(249, 715, 'Joined', 0, '2014-07-22 00:10:38'),
(250, 714, 'Joined', 0, '2014-07-22 00:10:38'),
(251, 713, 'Joined', 0, '2014-07-22 00:10:38'),
(252, 712, 'Joined', 0, '2014-07-22 00:10:38'),
(253, 711, 'Joined', 0, '2014-07-22 00:10:38'),
(254, 710, 'Joined', 0, '2014-07-22 00:10:39'),
(255, 709, 'Joined', 0, '2014-07-22 00:10:39'),
(256, 708, 'Joined', 0, '2014-07-22 00:10:39'),
(257, 707, 'Joined', 0, '2014-07-22 00:10:39'),
(258, 706, 'Joined', 0, '2014-07-22 00:10:39'),
(259, 705, 'Joined', 0, '2014-07-22 00:10:39'),
(260, 704, 'Joined', 0, '2014-07-22 00:10:39'),
(261, 703, 'Joined', 0, '2014-07-22 00:10:39'),
(262, 702, 'Joined', 0, '2014-07-22 00:10:39'),
(263, 701, 'Joined', 0, '2014-07-22 00:10:40'),
(264, 700, 'Joined', 0, '2014-07-22 00:10:40'),
(265, 699, 'Joined', 0, '2014-07-22 00:10:40'),
(266, 698, 'Joined', 0, '2014-07-22 00:10:40'),
(267, 697, 'Joined', 0, '2014-07-22 00:10:40'),
(268, 696, 'Joined', 0, '2014-07-22 00:10:40'),
(269, 695, 'Joined', 0, '2014-07-22 00:10:40'),
(270, 694, 'Joined', 0, '2014-07-22 00:10:41'),
(271, 693, 'Joined', 0, '2014-07-22 00:10:41'),
(272, 692, 'Joined', 0, '2014-07-22 00:10:41'),
(273, 691, 'Joined', 0, '2014-07-22 00:10:41'),
(274, 690, 'Joined', 0, '2014-07-22 00:10:41'),
(275, 689, 'Joined', 0, '2014-07-22 00:10:41'),
(276, 688, 'Joined', 0, '2014-07-22 00:10:41'),
(277, 687, 'Joined', 0, '2014-07-22 00:10:41'),
(278, 686, 'Joined', 0, '2014-07-22 00:10:41'),
(279, 685, 'Joined', 0, '2014-07-22 00:10:42'),
(280, 684, 'Joined', 0, '2014-07-22 00:10:42'),
(281, 683, 'Joined', 0, '2014-07-22 00:10:42'),
(282, 682, 'Joined', 0, '2014-07-22 00:10:42'),
(283, 681, 'Joined', 0, '2014-07-22 00:10:42'),
(284, 680, 'Joined', 0, '2014-07-22 00:10:43'),
(285, 679, 'Joined', 0, '2014-07-22 00:10:43'),
(286, 678, 'Joined', 0, '2014-07-22 00:10:43'),
(287, 677, 'Joined', 0, '2014-07-22 00:10:43'),
(288, 676, 'Joined', 0, '2014-07-22 00:10:43'),
(289, 675, 'Joined', 0, '2014-07-22 00:10:43'),
(290, 674, 'Joined', 0, '2014-07-22 00:10:43'),
(291, 673, 'Joined', 0, '2014-07-22 00:10:43'),
(292, 672, 'Joined', 0, '2014-07-22 00:10:43'),
(293, 671, 'Joined', 0, '2014-07-22 00:10:44'),
(294, 670, 'Joined', 0, '2014-07-22 00:10:44'),
(295, 669, 'Joined', 0, '2014-07-22 00:10:44'),
(296, 668, 'Joined', 0, '2014-07-22 00:10:45'),
(297, 667, 'Joined', 0, '2014-07-22 00:10:45'),
(298, 666, 'Joined', 0, '2014-07-22 00:10:45'),
(299, 665, 'Joined', 0, '2014-07-22 00:10:45'),
(300, 664, 'Joined', 0, '2014-07-22 00:10:45'),
(301, 663, 'Joined', 0, '2014-07-22 00:10:45'),
(302, 662, 'Joined', 0, '2014-07-22 00:10:45'),
(303, 661, 'Joined', 0, '2014-07-22 00:10:45'),
(304, 660, 'Joined', 0, '2014-07-22 00:10:45'),
(305, 659, 'Joined', 0, '2014-07-22 00:10:46'),
(306, 658, 'Joined', 0, '2014-07-22 00:10:46'),
(307, 657, 'Joined', 0, '2014-07-22 00:10:46'),
(308, 656, 'Joined', 0, '2014-07-22 00:10:46'),
(309, 655, 'Joined', 0, '2014-07-22 00:10:47'),
(310, 654, 'Joined', 0, '2014-07-22 00:10:47'),
(311, 653, 'Joined', 0, '2014-07-22 00:10:47'),
(312, 652, 'Joined', 0, '2014-07-22 00:10:47'),
(313, 651, 'Joined', 0, '2014-07-22 00:10:47'),
(314, 650, 'Joined', 0, '2014-07-22 00:10:47'),
(315, 649, 'Joined', 0, '2014-07-22 00:10:47'),
(316, 648, 'Joined', 0, '2014-07-22 00:10:47'),
(317, 647, 'Joined', 0, '2014-07-22 00:10:47'),
(318, 646, 'Joined', 0, '2014-07-22 00:10:48'),
(319, 645, 'Joined', 0, '2014-07-22 00:10:48'),
(320, 644, 'Joined', 0, '2014-07-22 00:10:48'),
(321, 643, 'Joined', 0, '2014-07-22 00:10:48'),
(322, 642, 'Joined', 0, '2014-07-22 00:10:48'),
(323, 641, 'Joined', 0, '2014-07-22 00:10:48'),
(324, 640, 'Joined', 0, '2014-07-22 00:10:48'),
(325, 639, 'Joined', 0, '2014-07-22 00:10:48'),
(326, 638, 'Joined', 0, '2014-07-22 00:10:48'),
(327, 637, 'Joined', 0, '2014-07-22 00:10:49'),
(328, 636, 'Joined', 0, '2014-07-22 00:10:49'),
(329, 635, 'Joined', 0, '2014-07-22 00:10:49'),
(330, 634, 'Joined', 0, '2014-07-22 00:10:49'),
(331, 633, 'Joined', 0, '2014-07-22 00:10:49'),
(332, 632, 'Joined', 0, '2014-07-22 00:10:49'),
(333, 631, 'Joined', 0, '2014-07-22 00:10:49'),
(334, 630, 'Joined', 0, '2014-07-22 00:10:49'),
(335, 629, 'Joined', 0, '2014-07-22 00:10:49'),
(336, 628, 'Joined', 0, '2014-07-22 00:10:50'),
(337, 627, 'Joined', 0, '2014-07-22 00:10:50'),
(338, 626, 'Joined', 0, '2014-07-22 00:10:50'),
(339, 625, 'Joined', 0, '2014-07-22 00:10:50'),
(340, 624, 'Joined', 0, '2014-07-22 00:10:50'),
(341, 623, 'Joined', 0, '2014-07-22 00:10:50'),
(342, 622, 'Joined', 0, '2014-07-22 00:10:50'),
(343, 621, 'Joined', 0, '2014-07-22 00:10:50'),
(344, 620, 'Joined', 0, '2014-07-22 00:10:50'),
(345, 619, 'Joined', 0, '2014-07-22 00:10:51'),
(346, 618, 'Joined', 0, '2014-07-22 00:10:51'),
(347, 617, 'Joined', 0, '2014-07-22 00:10:51'),
(348, 616, 'Joined', 0, '2014-07-22 00:10:51'),
(349, 615, 'Joined', 0, '2014-07-22 00:10:51'),
(350, 614, 'Joined', 0, '2014-07-22 00:10:52'),
(351, 613, 'Joined', 0, '2014-07-22 00:10:52'),
(352, 612, 'Joined', 0, '2014-07-22 00:10:52'),
(353, 611, 'Joined', 0, '2014-07-22 00:10:52'),
(354, 610, 'Joined', 0, '2014-07-22 00:10:52'),
(355, 609, 'Joined', 0, '2014-07-22 00:10:52'),
(356, 608, 'Joined', 0, '2014-07-22 00:10:52'),
(357, 607, 'Joined', 0, '2014-07-22 00:10:52'),
(358, 606, 'Joined', 0, '2014-07-22 00:10:53'),
(359, 605, 'Joined', 0, '2014-07-22 00:10:53'),
(360, 604, 'Joined', 0, '2014-07-22 00:10:53'),
(361, 603, 'Joined', 0, '2014-07-22 00:10:53'),
(362, 602, 'Joined', 0, '2014-07-22 00:10:53'),
(363, 601, 'Joined', 0, '2014-07-22 00:10:53'),
(364, 600, 'Joined', 0, '2014-07-22 00:10:54'),
(365, 599, 'Joined', 0, '2014-07-22 00:10:54'),
(366, 598, 'Joined', 0, '2014-07-22 00:10:54'),
(367, 597, 'Joined', 0, '2014-07-22 00:10:54'),
(368, 596, 'Joined', 0, '2014-07-22 00:10:54'),
(369, 595, 'Joined', 0, '2014-07-22 00:10:54'),
(370, 594, 'Joined', 0, '2014-07-22 00:10:54'),
(371, 593, 'Joined', 0, '2014-07-22 00:10:54'),
(372, 592, 'Joined', 0, '2014-07-22 00:10:54'),
(373, 591, 'Joined', 0, '2014-07-22 00:10:55'),
(374, 590, 'Joined', 0, '2014-07-22 00:10:55'),
(375, 589, 'Joined', 0, '2014-07-22 00:10:55'),
(376, 588, 'Joined', 0, '2014-07-22 00:10:55'),
(377, 587, 'Joined', 0, '2014-07-22 00:10:55'),
(378, 586, 'Joined', 0, '2014-07-22 00:10:55'),
(379, 585, 'Joined', 0, '2014-07-22 00:10:55'),
(380, 584, 'Joined', 0, '2014-07-22 00:10:55'),
(381, 583, 'Joined', 0, '2014-07-22 00:10:55'),
(382, 582, 'Joined', 0, '2014-07-22 00:10:56'),
(383, 581, 'Joined', 0, '2014-07-22 00:10:56'),
(384, 580, 'Joined', 0, '2014-07-22 00:10:56'),
(385, 579, 'Joined', 0, '2014-07-22 00:10:56'),
(386, 578, 'Joined', 0, '2014-07-22 00:10:56'),
(387, 577, 'Joined', 0, '2014-07-22 00:10:56'),
(388, 576, 'Joined', 0, '2014-07-22 00:10:56'),
(389, 575, 'Joined', 0, '2014-07-22 00:10:56'),
(390, 574, 'Joined', 0, '2014-07-22 00:10:56'),
(391, 573, 'Joined', 0, '2014-07-22 00:10:57'),
(392, 572, 'Joined', 0, '2014-07-22 00:10:57'),
(393, 571, 'Joined', 0, '2014-07-22 00:10:57'),
(394, 570, 'Joined', 0, '2014-07-22 00:10:57'),
(395, 569, 'Joined', 0, '2014-07-22 00:10:58'),
(396, 568, 'Joined', 0, '2014-07-22 00:10:58'),
(397, 567, 'Joined', 0, '2014-07-22 00:10:58'),
(398, 566, 'Joined', 0, '2014-07-22 00:10:58'),
(399, 565, 'Joined', 0, '2014-07-22 00:10:58'),
(400, 564, 'Joined', 0, '2014-07-22 00:10:58'),
(401, 563, 'Joined', 0, '2014-07-22 00:10:58'),
(402, 562, 'Joined', 0, '2014-07-22 00:10:59'),
(403, 561, 'Joined', 0, '2014-07-22 00:10:59'),
(404, 560, 'Joined', 0, '2014-07-22 00:10:59'),
(405, 559, 'Joined', 0, '2014-07-22 00:10:59'),
(406, 558, 'Joined', 0, '2014-07-22 00:10:59'),
(407, 557, 'Joined', 0, '2014-07-22 00:10:59'),
(408, 556, 'Joined', 0, '2014-07-22 00:10:59'),
(409, 555, 'Joined', 0, '2014-07-22 00:10:59'),
(410, 554, 'Joined', 0, '2014-07-22 00:11:00'),
(411, 553, 'Joined', 0, '2014-07-22 00:11:00'),
(412, 552, 'Joined', 0, '2014-07-22 00:11:00'),
(413, 551, 'Joined', 0, '2014-07-22 00:11:00'),
(414, 550, 'Joined', 0, '2014-07-22 00:11:00'),
(415, 549, 'Joined', 0, '2014-07-22 00:11:00'),
(416, 548, 'Joined', 0, '2014-07-22 00:11:01'),
(417, 547, 'Joined', 0, '2014-07-22 00:11:01'),
(418, 546, 'Joined', 0, '2014-07-22 00:11:01'),
(419, 545, 'Joined', 0, '2014-07-22 00:11:01'),
(420, 544, 'Joined', 0, '2014-07-22 00:11:01'),
(421, 543, 'Joined', 0, '2014-07-22 00:11:01'),
(422, 542, 'Joined', 0, '2014-07-22 00:11:01'),
(423, 541, 'Joined', 0, '2014-07-22 00:11:01'),
(424, 540, 'Joined', 0, '2014-07-22 00:11:01'),
(425, 539, 'Joined', 0, '2014-07-22 00:11:02'),
(426, 538, 'Joined', 0, '2014-07-22 00:11:02'),
(427, 537, 'Joined', 0, '2014-07-22 00:11:02'),
(428, 536, 'Joined', 0, '2014-07-22 00:11:02'),
(429, 535, 'Joined', 0, '2014-07-22 00:11:02'),
(430, 534, 'Joined', 0, '2014-07-22 00:11:02'),
(431, 533, 'Joined', 0, '2014-07-22 00:11:02'),
(432, 532, 'Joined', 0, '2014-07-22 00:11:03'),
(433, 531, 'Joined', 0, '2014-07-22 00:11:03'),
(434, 530, 'Joined', 0, '2014-07-22 00:11:03'),
(435, 529, 'Joined', 0, '2014-07-22 00:11:03'),
(436, 528, 'Joined', 0, '2014-07-22 00:11:03'),
(437, 527, 'Joined', 0, '2014-07-22 00:11:04'),
(438, 526, 'Joined', 0, '2014-07-22 00:11:04'),
(439, 525, 'Joined', 0, '2014-07-22 00:11:04'),
(440, 524, 'Joined', 0, '2014-07-22 00:11:04'),
(441, 523, 'Joined', 0, '2014-07-22 00:11:04'),
(442, 522, 'Joined', 0, '2014-07-22 00:11:04'),
(443, 521, 'Joined', 0, '2014-07-22 00:11:04'),
(444, 520, 'Joined', 0, '2014-07-22 00:12:38'),
(445, 519, 'Joined', 0, '2014-07-22 00:12:38'),
(446, 518, 'Joined', 0, '2014-07-22 00:12:39'),
(447, 517, 'Joined', 0, '2014-07-22 00:12:39'),
(448, 516, 'Joined', 0, '2014-07-22 00:12:39'),
(449, 515, 'Joined', 0, '2014-07-22 00:12:39'),
(450, 514, 'Joined', 0, '2014-07-22 00:12:39'),
(451, 513, 'Joined', 0, '2014-07-22 00:12:39'),
(452, 512, 'Joined', 0, '2014-07-22 00:12:39'),
(453, 511, 'Joined', 0, '2014-07-22 00:12:39'),
(454, 510, 'Joined', 0, '2014-07-22 00:12:40'),
(455, 509, 'Joined', 0, '2014-07-22 00:12:40'),
(456, 508, 'Joined', 0, '2014-07-22 00:12:40'),
(457, 507, 'Joined', 0, '2014-07-22 00:12:40'),
(458, 506, 'Joined', 0, '2014-07-22 00:12:41'),
(459, 505, 'Joined', 0, '2014-07-22 00:12:41'),
(460, 504, 'Joined', 0, '2014-07-22 00:12:41'),
(461, 503, 'Joined', 0, '2014-07-22 00:12:41'),
(462, 502, 'Joined', 0, '2014-07-22 00:12:41'),
(463, 501, 'Joined', 0, '2014-07-22 00:12:41'),
(464, 500, 'Joined', 0, '2014-07-22 00:12:42'),
(465, 499, 'Joined', 0, '2014-07-22 00:12:42'),
(466, 498, 'Joined', 0, '2014-07-22 00:12:42'),
(467, 497, 'Joined', 0, '2014-07-22 00:12:42'),
(468, 496, 'Joined', 0, '2014-07-22 00:12:42'),
(469, 495, 'Joined', 0, '2014-07-22 00:12:43'),
(470, 494, 'Joined', 0, '2014-07-22 00:12:43'),
(471, 493, 'Joined', 0, '2014-07-22 00:12:43'),
(472, 492, 'Joined', 0, '2014-07-22 00:12:43'),
(473, 491, 'Joined', 0, '2014-07-22 00:12:43'),
(474, 490, 'Joined', 0, '2014-07-22 00:12:43'),
(475, 489, 'Joined', 0, '2014-07-22 00:12:43'),
(476, 488, 'Joined', 0, '2014-07-22 00:12:43'),
(477, 487, 'Joined', 0, '2014-07-22 00:12:44'),
(478, 486, 'Joined', 0, '2014-07-22 00:12:44'),
(479, 485, 'Joined', 0, '2014-07-22 00:12:44'),
(480, 484, 'Joined', 0, '2014-07-22 00:12:44'),
(481, 483, 'Joined', 0, '2014-07-22 00:12:44'),
(482, 482, 'Joined', 0, '2014-07-22 00:12:44'),
(483, 481, 'Joined', 0, '2014-07-22 00:12:45'),
(484, 480, 'Joined', 0, '2014-07-22 00:12:45'),
(485, 479, 'Joined', 0, '2014-07-22 00:12:45'),
(486, 478, 'Joined', 0, '2014-07-22 00:12:45'),
(487, 477, 'Joined', 0, '2014-07-22 00:12:45'),
(488, 476, 'Joined', 0, '2014-07-22 00:12:45'),
(489, 475, 'Joined', 0, '2014-07-22 00:12:45'),
(490, 474, 'Joined', 0, '2014-07-22 00:12:46'),
(491, 473, 'Joined', 0, '2014-07-22 00:12:46'),
(492, 472, 'Joined', 0, '2014-07-22 00:12:46'),
(493, 471, 'Joined', 0, '2014-07-22 00:12:46'),
(494, 470, 'Joined', 0, '2014-07-22 00:12:46'),
(495, 469, 'Joined', 0, '2014-07-22 00:12:46'),
(496, 468, 'Joined', 0, '2014-07-22 00:12:46'),
(497, 467, 'Joined', 0, '2014-07-22 00:12:46'),
(498, 466, 'Joined', 0, '2014-07-22 00:12:47'),
(499, 465, 'Joined', 0, '2014-07-22 00:12:47'),
(500, 464, 'Joined', 0, '2014-07-22 00:12:47'),
(501, 463, 'Joined', 0, '2014-07-22 00:12:47'),
(502, 462, 'Joined', 0, '2014-07-22 00:12:47'),
(503, 461, 'Joined', 0, '2014-07-22 00:12:47'),
(504, 460, 'Joined', 0, '2014-07-22 00:12:47'),
(505, 459, 'Joined', 0, '2014-07-22 00:12:47'),
(506, 458, 'Joined', 0, '2014-07-22 00:12:48'),
(507, 457, 'Joined', 0, '2014-07-22 00:12:48'),
(508, 456, 'Joined', 0, '2014-07-22 00:12:49'),
(509, 455, 'Joined', 0, '2014-07-22 00:12:49'),
(510, 454, 'Joined', 0, '2014-07-22 00:12:50'),
(511, 453, 'Joined', 0, '2014-07-22 00:12:50'),
(512, 452, 'Joined', 0, '2014-07-22 00:12:50'),
(513, 451, 'Joined', 0, '2014-07-22 00:12:50'),
(514, 450, 'Joined', 0, '2014-07-22 00:12:50'),
(515, 449, 'Joined', 0, '2014-07-22 00:12:50'),
(516, 448, 'Joined', 0, '2014-07-22 00:12:51'),
(517, 447, 'Joined', 0, '2014-07-22 00:12:51'),
(518, 446, 'Joined', 0, '2014-07-22 00:12:51'),
(519, 445, 'Joined', 0, '2014-07-22 00:12:51'),
(520, 444, 'Joined', 0, '2014-07-22 00:12:51'),
(521, 443, 'Joined', 0, '2014-07-22 00:12:51'),
(522, 442, 'Joined', 0, '2014-07-22 00:12:52'),
(523, 441, 'Joined', 0, '2014-07-22 00:12:52'),
(524, 440, 'Joined', 0, '2014-07-22 00:12:52'),
(525, 439, 'Joined', 0, '2014-07-22 00:12:52'),
(526, 438, 'Joined', 0, '2014-07-22 00:12:52'),
(527, 437, 'Joined', 0, '2014-07-22 00:12:52'),
(528, 436, 'Joined', 0, '2014-07-22 00:12:52'),
(529, 435, 'Joined', 0, '2014-07-22 00:12:52'),
(530, 434, 'Joined', 0, '2014-07-22 00:12:53'),
(531, 433, 'Joined', 0, '2014-07-22 00:12:53'),
(532, 432, 'Joined', 0, '2014-07-22 00:12:53'),
(533, 431, 'Joined', 0, '2014-07-22 00:12:53'),
(534, 430, 'Joined', 0, '2014-07-22 00:12:53'),
(535, 429, 'Joined', 0, '2014-07-22 00:12:53'),
(536, 428, 'Joined', 0, '2014-07-22 00:12:53'),
(537, 427, 'Joined', 0, '2014-07-22 00:12:53'),
(538, 426, 'Joined', 0, '2014-07-22 00:12:53'),
(539, 425, 'Joined', 0, '2014-07-22 00:12:54'),
(540, 424, 'Joined', 0, '2014-07-22 00:12:54'),
(541, 423, 'Joined', 0, '2014-07-22 00:12:54'),
(542, 422, 'Joined', 0, '2014-07-22 00:12:54'),
(543, 421, 'Joined', 0, '2014-07-22 00:12:54'),
(544, 420, 'Joined', 0, '2014-07-22 00:12:54'),
(545, 419, 'Joined', 0, '2014-07-22 00:12:54'),
(546, 418, 'Joined', 0, '2014-07-22 00:12:55'),
(547, 417, 'Joined', 0, '2014-07-22 00:12:55'),
(548, 416, 'Joined', 0, '2014-07-22 00:12:55'),
(549, 415, 'Joined', 0, '2014-07-22 00:12:55'),
(550, 414, 'Joined', 0, '2014-07-22 00:12:55'),
(551, 413, 'Joined', 0, '2014-07-22 00:12:55'),
(552, 412, 'Joined', 0, '2014-07-22 00:12:55'),
(553, 411, 'Joined', 0, '2014-07-22 00:12:55'),
(554, 410, 'Joined', 0, '2014-07-22 00:12:55'),
(555, 409, 'Joined', 0, '2014-07-22 00:12:56'),
(556, 408, 'Joined', 0, '2014-07-22 00:12:56'),
(557, 407, 'Joined', 0, '2014-07-22 00:12:56'),
(558, 406, 'Joined', 0, '2014-07-22 00:12:56'),
(559, 405, 'Joined', 0, '2014-07-22 00:12:56'),
(560, 404, 'Joined', 0, '2014-07-22 00:12:57'),
(561, 403, 'Joined', 0, '2014-07-22 00:12:57'),
(562, 402, 'Joined', 0, '2014-07-22 00:12:57'),
(563, 401, 'Joined', 0, '2014-07-22 00:12:57'),
(564, 400, 'Joined', 0, '2014-07-22 00:12:57'),
(565, 399, 'Joined', 0, '2014-07-22 00:12:57'),
(566, 398, 'Joined', 0, '2014-07-22 00:12:57'),
(567, 397, 'Joined', 0, '2014-07-22 00:12:57'),
(568, 396, 'Joined', 0, '2014-07-22 00:12:58'),
(569, 395, 'Joined', 0, '2014-07-22 00:12:58'),
(570, 394, 'Joined', 0, '2014-07-22 00:12:58'),
(571, 393, 'Joined', 0, '2014-07-22 00:12:58'),
(572, 392, 'Joined', 0, '2014-07-22 00:12:58'),
(573, 391, 'Joined', 0, '2014-07-22 00:12:58'),
(574, 390, 'Joined', 0, '2014-07-22 00:12:59'),
(575, 389, 'Joined', 0, '2014-07-22 00:12:59'),
(576, 388, 'Joined', 0, '2014-07-22 00:12:59'),
(577, 387, 'Joined', 0, '2014-07-22 00:12:59'),
(578, 386, 'Joined', 0, '2014-07-22 00:12:59'),
(579, 385, 'Joined', 0, '2014-07-22 00:12:59'),
(580, 384, 'Joined', 0, '2014-07-22 00:12:59'),
(581, 383, 'Joined', 0, '2014-07-22 00:13:00'),
(582, 382, 'Joined', 0, '2014-07-22 00:13:00'),
(583, 381, 'Joined', 0, '2014-07-22 00:13:01'),
(584, 380, 'Joined', 0, '2014-07-22 00:13:01'),
(585, 379, 'Joined', 0, '2014-07-22 00:13:01'),
(586, 378, 'Joined', 0, '2014-07-22 00:13:01'),
(587, 377, 'Joined', 0, '2014-07-22 00:13:01'),
(588, 376, 'Joined', 0, '2014-07-22 00:13:01'),
(589, 375, 'Joined', 0, '2014-07-22 00:13:02'),
(590, 374, 'Joined', 0, '2014-07-22 00:13:02'),
(591, 373, 'Joined', 0, '2014-07-22 00:13:02'),
(592, 372, 'Joined', 0, '2014-07-22 00:13:02'),
(593, 371, 'Joined', 0, '2014-07-22 00:13:02'),
(594, 370, 'Joined', 0, '2014-07-22 00:13:02'),
(595, 369, 'Joined', 0, '2014-07-22 00:13:03'),
(596, 368, 'Joined', 0, '2014-07-22 00:13:03'),
(597, 367, 'Joined', 0, '2014-07-22 00:13:03'),
(598, 366, 'Joined', 0, '2014-07-22 00:13:03'),
(599, 365, 'Joined', 0, '2014-07-22 00:13:03'),
(600, 364, 'Joined', 0, '2014-07-22 00:13:03'),
(601, 363, 'Joined', 0, '2014-07-22 00:13:03'),
(602, 362, 'Joined', 0, '2014-07-22 00:13:04'),
(603, 361, 'Joined', 0, '2014-07-22 00:13:04'),
(604, 360, 'Joined', 0, '2014-07-22 00:13:04'),
(605, 359, 'Joined', 0, '2014-07-22 00:13:04'),
(606, 358, 'Joined', 0, '2014-07-22 00:13:04'),
(607, 357, 'Joined', 0, '2014-07-22 00:13:04'),
(608, 356, 'Joined', 0, '2014-07-22 00:13:04'),
(609, 355, 'Joined', 0, '2014-07-22 00:13:05'),
(610, 354, 'Joined', 0, '2014-07-22 00:13:05'),
(611, 353, 'Joined', 0, '2014-07-22 00:13:05'),
(612, 352, 'Joined', 0, '2014-07-22 00:13:05'),
(613, 351, 'Joined', 0, '2014-07-22 00:13:05'),
(614, 350, 'Joined', 0, '2014-07-22 00:13:05'),
(615, 349, 'Joined', 0, '2014-07-22 00:13:05'),
(616, 348, 'Joined', 0, '2014-07-22 00:13:06'),
(617, 347, 'Joined', 0, '2014-07-22 00:13:06'),
(618, 346, 'Joined', 0, '2014-07-22 00:13:06'),
(619, 345, 'Joined', 0, '2014-07-22 00:13:06'),
(620, 344, 'Joined', 0, '2014-07-22 00:13:06'),
(621, 954, 'Updated', 2, '2014-07-24 23:02:49'),
(622, 968, 'Updated', 1, '2014-07-28 00:18:30'),
(623, 968, 'Updated', 0, '2014-07-30 00:39:53'),
(624, 968, 'Updated', 0, '2014-07-30 00:43:27'),
(625, 968, 'Updated', 2, '2014-07-30 00:45:07'),
(626, 954, 'Updated', 2, '2014-07-30 05:53:36'),
(627, 954, 'Updated', 23, '2014-07-31 00:53:27'),
(628, 954, 'Updated', 4, '2014-08-01 02:17:08'),
(629, 958, 'Updated', 3, '2014-08-01 03:10:02'),
(630, 958, 'Updated', 0, '2014-08-01 04:21:16'),
(631, 958, 'Updated', 1, '2014-08-01 04:24:34'),
(632, 968, 'Updated', 0, '2014-08-01 04:29:07'),
(633, 958, 'Updated', 9, '2014-08-01 04:36:33'),
(634, 958, 'Updated', 0, '2014-08-01 04:37:49'),
(635, 958, 'Updated', 0, '2014-08-01 04:53:43'),
(636, 958, 'Updated', 0, '2014-08-01 04:55:34'),
(637, 958, 'Updated', 1, '2014-08-01 04:56:44'),
(638, 958, 'Updated', 0, '2014-08-01 04:58:21'),
(639, 958, 'Updated', 0, '2014-08-01 05:00:39'),
(640, 958, 'Updated', 0, '2014-08-01 05:00:52'),
(641, 968, 'Updated', 14, '2014-08-01 05:15:52'),
(642, 958, 'Updated', 0, '2014-08-01 05:27:13'),
(643, 958, 'Updated', 0, '2014-08-01 05:29:13'),
(644, 958, 'Updated', 2, '2014-08-01 05:29:22'),
(645, 958, 'Updated', 0, '2014-08-01 05:36:42'),
(646, 958, 'Updated', 0, '2014-08-01 05:39:38'),
(647, 958, 'Updated', 0, '2014-08-01 05:40:16'),
(648, 958, 'Updated', 0, '2014-08-01 05:41:27'),
(649, 958, 'Updated', 0, '2014-08-01 05:47:29'),
(650, 968, 'Updated', 0, '2014-08-05 02:34:42'),
(651, 968, 'Updated', 0, '2014-08-05 02:36:37'),
(652, 968, 'Updated', 1, '2014-08-05 02:52:27'),
(653, 967, 'Updated', 3, '2014-08-19 04:47:10'),
(654, 754, 'Updated', 5, '2014-08-19 22:22:41'),
(655, 133, 'Joined', 0, '2014-08-29 06:42:38'),
(656, 133, 'Updated', 11, '2014-08-29 06:43:29'),
(657, 134, 'Joined', 0, '2014-08-29 09:45:55'),
(658, 135, 'Joined', 0, '2014-08-29 09:54:18'),
(659, 134, 'Updated', 14, '2014-09-04 03:02:13'),
(660, 971, 'Joined', 1, '2014-09-12 02:30:32'),
(661, 972, 'Joined', 0, '2014-09-12 02:33:15'),
(662, 972, 'Updated', 2, '2014-09-12 02:40:44'),
(663, 973, 'Joined', 0, '2014-10-03 01:20:19'),
(664, 974, 'Joined', 1, '2014-10-03 03:08:06'),
(665, 975, 'Joined', 0, '2014-10-03 04:01:36'),
(666, 976, 'Joined', 0, '2014-10-05 06:29:22'),
(667, 975, 'Updated', 0, '2014-10-06 01:41:31'),
(668, 977, 'Joined', 0, '2014-10-06 02:21:18'),
(669, 978, 'Joined', 0, '2014-10-06 04:49:53'),
(670, 994, 'Joined', 2, '2014-10-06 05:46:06'),
(671, 995, 'Joined', 0, '2014-10-06 05:53:05'),
(672, 996, 'Joined', 0, '2014-10-06 06:02:26'),
(673, 997, 'Joined', 0, '2014-10-06 06:28:01'),
(674, 998, 'Joined', 0, '2014-10-06 06:30:14'),
(675, 999, 'Joined', 0, '2014-10-06 06:32:53'),
(676, 1000, 'Joined', 0, '2014-10-06 06:34:44'),
(677, 1001, 'Joined', 0, '2014-10-06 06:35:59'),
(678, 1002, 'Joined', 0, '2014-10-07 07:10:28'),
(679, 1003, 'Joined', 11, '2014-10-07 07:47:28'),
(680, 1004, 'Joined', 3, '2014-10-08 19:16:55'),
(681, 1005, 'Joined', 1, '2014-10-08 19:19:00'),
(682, 1006, 'Joined', 4, '2014-10-08 19:20:21'),
(683, 1007, 'Joined', 1, '2014-10-08 19:40:07'),
(684, 1007, 'Updated', 0, '2014-10-13 01:58:09'),
(685, 1007, 'Updated', 0, '2014-10-13 01:59:38'),
(686, 1007, 'Updated', 0, '2014-10-13 02:00:51'),
(687, 1007, 'Updated', 0, '2014-10-13 02:00:53'),
(688, 1007, 'Updated', 0, '2014-10-13 02:01:49'),
(689, 1007, 'Updated', 0, '2014-10-13 02:03:27'),
(690, 1007, 'Updated', 0, '2014-10-13 02:04:45'),
(691, 1007, 'Updated', 0, '2014-10-13 02:11:11'),
(692, 1007, 'Updated', 0, '2014-10-13 02:17:01'),
(693, 1007, 'Updated', 0, '2014-10-13 02:17:48'),
(694, 1007, 'Updated', 0, '2014-10-13 02:18:38'),
(695, 1007, 'Updated', 0, '2014-10-13 02:19:43'),
(696, 1007, 'Updated', 0, '2014-10-13 02:20:46'),
(697, 1006, 'Updated', 3, '2014-10-14 21:42:25'),
(698, 1007, 'Updated', 0, '2014-10-16 03:44:43'),
(699, 1007, 'Updated', 1, '2014-10-20 01:06:16'),
(700, 1008, 'Joined', 3, '2014-10-29 01:09:57'),
(701, 1013, 'Joined', 0, '2014-11-05 01:35:45'),
(702, 1015, 'Joined', 3, '2014-11-12 01:50:25'),
(703, 975, 'Updated', 0, '2014-12-01 00:34:11'),
(704, 975, 'Updated', 0, '2014-12-01 01:12:08'),
(705, 975, 'Updated', 0, '2014-12-01 01:12:36'),
(706, 975, 'Updated', 0, '2014-12-01 01:13:49'),
(707, 975, 'Updated', 0, '2014-12-01 03:38:56'),
(708, 975, 'Updated', 0, '2014-12-01 04:13:37'),
(709, 975, 'Updated', 0, '2014-12-01 04:29:03'),
(710, 1016, 'Joined', 0, '2015-01-13 01:32:52'),
(711, 1016, 'Updated', 2, '2015-01-13 01:45:48'),
(712, 975, 'Updated', 0, '2015-02-27 04:41:17'),
(713, 975, 'Updated', 0, '2015-02-27 04:42:10'),
(714, 136, 'Updated', 0, '2015-02-27 04:45:16'),
(715, 136, 'Updated', 0, '2015-02-27 04:48:15'),
(716, 136, 'Updated', 0, '2015-02-27 04:52:02'),
(717, 136, 'Updated', 0, '2015-02-27 05:23:52'),
(718, 136, 'Updated', 0, '2015-03-01 21:16:48'),
(719, 139, 'Joined', 0, '2015-03-06 01:40:19'),
(720, 139, 'Updated', 0, '2015-03-17 20:11:25'),
(721, 137, 'Joined', 0, '2015-05-19 22:52:28'),
(722, 143, 'Joined', 0, '2015-06-25 23:58:17'),
(1000, 1008, 'Joined', 1, '2014-07-22 00:12:47'),
(1001, 636, 'Updated', 0, '2015-09-16 04:49:36'),
(1002, 636, 'Updated', 0, '2015-09-16 05:03:42'),
(1003, 636, 'Updated', 0, '2015-09-17 01:23:56'),
(1004, 636, 'Updated', 0, '2015-09-17 01:39:36'),
(1005, 636, 'Updated', 0, '2015-09-17 23:12:29'),
(1006, 636, 'Updated', 0, '2015-09-18 00:06:13'),
(1007, 636, 'Updated', 0, '2015-09-18 00:06:52'),
(1008, 636, 'Updated', 0, '2015-09-18 00:07:43'),
(1009, 636, 'Updated', 0, '2015-09-18 00:23:35'),
(1010, 636, 'Updated', 0, '2015-09-18 00:24:11'),
(1011, 636, 'Updated', 0, '2015-09-18 00:26:29'),
(1012, 636, 'Updated', 0, '2015-09-18 00:30:17'),
(1013, 636, 'Updated', 0, '2015-09-18 00:30:53'),
(1014, 636, 'Updated', 0, '2015-09-18 00:33:28'),
(1015, 636, 'Updated', 0, '2015-09-18 03:22:29'),
(1016, 636, 'Updated', 0, '2015-09-18 03:27:19'),
(1017, 636, 'Updated', 0, '2015-09-18 03:29:47'),
(1018, 636, 'Updated', 0, '2015-09-19 02:24:40'),
(1019, 636, 'Updated', 0, '2015-09-20 22:56:38'),
(1020, 636, 'Updated', 0, '2015-09-20 23:00:47'),
(1021, 636, 'Updated', 0, '2015-09-20 23:11:43'),
(1022, 636, 'Updated', 0, '2015-09-20 23:55:12'),
(1023, 636, 'Updated', 0, '2015-09-22 01:56:10'),
(1024, 636, 'Updated', 0, '2015-09-22 02:09:37'),
(1025, 636, 'Updated', 0, '2015-09-22 02:10:50'),
(1026, 636, 'Updated', 0, '2015-09-22 02:11:29'),
(1027, 636, 'Updated', 1, '2015-09-22 02:13:20'),
(1028, 636, 'Updated', 1, '2015-09-22 02:13:46'),
(1029, 636, 'Updated', 2, '2015-09-22 02:18:41'),
(1030, 636, 'Updated', 0, '2015-09-24 05:04:17'),
(1031, 636, 'Updated', 0, '2015-09-24 05:06:41'),
(1032, 1017, 'Joined', 0, '2015-09-25 03:36:21'),
(1033, 1017, 'Updated', 0, '2015-09-25 03:39:17'),
(1034, 1018, 'Joined', 0, '2015-09-25 03:54:49'),
(1035, 1018, 'Updated', 0, '2015-09-25 03:57:16'),
(1036, 1019, 'Joined', 0, '2015-09-25 04:01:02'),
(1037, 1020, 'Joined', 0, '2015-09-25 04:02:26'),
(1038, 1020, 'Updated', 0, '2015-09-25 04:25:05'),
(1039, 1013, 'Updated', 0, '2015-09-28 22:24:22'),
(1040, 1021, 'Joined', 0, '2015-10-05 05:08:10'),
(1041, 1021, 'Updated', 0, '2015-10-05 05:10:50'),
(1042, 1021, 'Updated', 0, '2015-10-05 07:22:22'),
(1043, 1022, 'Joined', 0, '2015-10-05 08:06:35'),
(1044, 1022, 'Updated', 0, '2015-10-05 08:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `fs_member_profile_view`
--

CREATE TABLE IF NOT EXISTS `fs_member_profile_view` (
`mpvno` int(25) NOT NULL,
  `mpv_viewer` int(25) NOT NULL,
  `mpv_viewed` int(25) NOT NULL,
  `mpv_dateviewed` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_member_profile_view`
--

INSERT INTO `fs_member_profile_view` (`mpvno`, `mpv_viewer`, `mpv_viewed`, `mpv_dateviewed`) VALUES
(1, 136, 133, '2014-07-04 05:43:10'),
(2, 134, 133, '2014-06-19 07:15:39'),
(3, 153, 133, '2014-04-24 00:18:52'),
(4, 153, 934, '2014-04-24 00:19:06'),
(5, 200, 133, '2014-04-24 00:19:29'),
(6, 200, 934, '2014-04-24 00:19:41'),
(7, 136, 140, '2014-05-01 20:14:13'),
(8, 133, 934, '2014-06-25 04:45:40'),
(9, 136, 934, '2014-07-04 12:37:19'),
(10, 140, 934, '2014-04-24 08:17:55'),
(11, 136, 937, '2014-06-08 22:00:01'),
(12, 133, 169, '2014-04-25 01:03:08'),
(13, 136, 169, '2014-05-05 19:57:10'),
(14, 136, 158, '2014-05-16 08:02:23'),
(15, 136, 144, '2014-05-17 00:57:41'),
(16, 136, 151, '2014-05-08 08:20:12'),
(17, 136, 135, '2014-05-03 22:38:35'),
(18, 136, 200, '2014-05-01 08:25:34'),
(19, 136, 137, '2014-05-18 10:56:08'),
(20, 136, 138, '2014-05-11 11:57:21'),
(21, 133, 134, '2014-05-02 01:36:21'),
(22, 136, 134, '2014-06-19 03:38:25'),
(23, 136, 191, '2014-05-30 01:15:51'),
(24, 136, 153, '2014-06-06 09:26:20'),
(25, 136, 278, '2014-05-03 20:01:13'),
(26, 136, 184, '2014-05-14 10:12:15'),
(27, 136, 164, '2014-05-14 17:02:08'),
(28, 200, 136, '2014-05-06 15:10:09'),
(29, 136, 210, '2014-05-19 03:55:18'),
(30, 136, 154, '2014-05-20 04:21:27'),
(31, 191, 136, '2014-05-07 16:10:20'),
(32, 136, 223, '2014-05-12 00:34:32'),
(33, 136, 161, '2014-05-17 23:39:50'),
(34, 136, 933, '2014-05-19 21:56:57'),
(35, 229, 934, '2014-05-09 10:01:01'),
(36, 934, 134, '2014-06-30 03:08:43'),
(37, 133, 136, '2014-06-23 02:00:51'),
(38, 136, 818, '2014-05-14 04:44:03'),
(39, 136, 935, '2014-05-27 23:15:39'),
(40, 136, 813, '2014-06-06 06:38:29'),
(41, 136, 883, '2014-06-09 05:35:00'),
(42, 133, 883, '2014-06-09 05:35:08'),
(43, 169, 133, '2014-06-17 01:06:02'),
(44, 134, 200, '2014-06-18 00:47:46'),
(45, 134, 0, '2014-06-18 00:24:10'),
(46, 134, 136, '2014-06-18 00:53:36'),
(47, 200, 134, '2014-06-19 07:24:10'),
(48, 934, 136, '2014-06-30 23:56:01'),
(49, 934, 200, '2014-06-19 04:05:48'),
(50, 934, 133, '2014-06-30 23:56:36'),
(51, 133, 152, '2014-06-21 08:53:46'),
(52, 934, 933, '2014-06-30 04:38:40'),
(53, 934, 151, '2014-06-30 03:24:53'),
(54, 934, 817, '2014-06-30 03:25:43'),
(55, 934, 187, '2014-06-30 03:29:32'),
(56, 934, 362, '2014-06-30 03:37:46'),
(57, 934, 158, '2014-06-30 03:42:15'),
(58, 934, 137, '2014-06-30 03:47:57'),
(59, 953, 951, '2014-07-02 02:42:54'),
(60, 959, 136, '2014-07-02 07:12:51'),
(61, 959, 934, '2014-07-03 00:28:43'),
(62, 963, 934, '2014-07-03 04:23:43'),
(63, 965, 934, '2014-07-03 04:56:54'),
(64, 136, 951, '2014-07-04 04:00:17'),
(65, 958, 951, '2014-07-04 04:00:49'),
(66, 136, 957, '2014-07-04 04:05:31'),
(67, 136, 961, '2014-07-04 04:08:24'),
(68, 958, 961, '2014-07-04 04:09:55'),
(69, 136, 958, '2014-07-04 09:24:23'),
(70, 136, 953, '2014-07-04 06:23:20'),
(71, 136, 955, '2014-07-04 06:11:57'),
(72, 958, 953, '2014-07-07 07:18:25'),
(73, 958, 934, '2014-07-07 07:43:00'),
(74, 958, 954, '2014-08-01 05:44:20'),
(75, 958, 133, '2014-07-04 07:46:38'),
(76, 136, 954, '2014-08-20 05:31:26'),
(77, 958, 956, '2014-07-07 07:41:10'),
(78, 958, 883, '2014-07-07 07:45:26'),
(79, 958, 960, '2014-07-07 07:45:59'),
(80, 136, 832, '2014-07-08 05:09:23'),
(81, 136, 964, '2014-07-08 05:09:34'),
(82, 136, 963, '2014-07-15 03:44:13'),
(83, 964, 934, '2014-07-09 04:43:03'),
(84, 963, 136, '2014-07-15 03:42:04'),
(85, 963, 967, '2014-07-15 03:52:54'),
(86, 967, 968, '2014-07-16 05:14:33'),
(87, 967, 136, '2014-08-19 05:28:37'),
(88, 968, 954, '2014-08-20 01:28:46'),
(89, 967, 954, '2014-08-19 03:39:46'),
(90, 967, 676, '2014-07-16 05:13:52'),
(91, 954, 133, '2014-07-17 23:10:41'),
(92, 954, 892, '2014-07-17 23:39:48'),
(93, 966, 934, '2014-07-23 23:14:46'),
(94, 954, 968, '2014-08-13 00:31:16'),
(95, 954, 934, '2014-07-21 23:05:21'),
(96, 954, 958, '2014-08-01 05:31:25'),
(97, 954, 924, '2014-07-25 05:11:17'),
(98, 906, 954, '2014-07-23 03:47:42'),
(99, 909, 954, '2014-07-23 02:46:45'),
(100, 966, 968, '2014-07-24 00:28:46'),
(101, 954, 817, '2014-07-28 23:48:04'),
(102, 968, 40, '2014-07-24 00:12:02'),
(103, 968, 924, '2014-07-24 05:37:18'),
(104, 968, 864, '2014-07-24 00:42:10'),
(105, 968, 835, '2014-07-24 00:56:56'),
(106, 968, 837, '2014-07-24 00:56:57'),
(107, 954, 136, '2014-08-19 01:11:09'),
(108, 968, 136, '2014-08-21 04:39:40'),
(109, 968, 966, '2014-07-24 05:07:03'),
(110, 968, 817, '2014-07-24 05:11:35'),
(111, 968, 133, '2014-07-24 05:12:52'),
(112, 954, 966, '2014-07-24 05:38:56'),
(113, 968, 134, '2014-07-28 00:19:08'),
(114, 954, 620, '2014-07-30 02:11:30'),
(115, 954, 890, '2014-07-25 05:18:59'),
(116, 954, 835, '2014-07-25 05:19:46'),
(117, 954, 837, '2014-07-25 05:19:50'),
(118, 954, 834, '2014-07-25 05:19:53'),
(119, 954, 883, '2014-07-28 03:31:58'),
(120, 968, 883, '2014-07-28 03:32:10'),
(121, 136, 968, '2014-07-29 07:52:04'),
(122, 136, 966, '2014-07-29 07:52:19'),
(123, 954, 624, '2014-07-30 00:45:27'),
(124, 968, 958, '2014-08-01 00:39:33'),
(125, 958, 627, '2014-07-31 03:15:43'),
(126, 958, 968, '2014-08-12 03:38:09'),
(127, 136, 967, '2014-08-19 21:55:16'),
(128, 754, 967, '2014-08-20 01:01:45'),
(129, 754, 954, '2014-08-22 00:13:25'),
(130, 754, 968, '2014-08-22 06:24:14'),
(131, 754, 136, '2014-08-22 03:47:02'),
(132, 968, 754, '2014-08-21 05:14:38'),
(133, 136, 754, '2014-08-20 06:38:32'),
(134, 754, 966, '2014-08-22 06:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `fs_member_timeline`
--

CREATE TABLE IF NOT EXISTS `fs_member_timeline` (
`mptno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `action` varchar(25) NOT NULL,
  `dateupdated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fs_message`
--

CREATE TABLE IF NOT EXISTS `fs_message` (
`msgno` int(25) NOT NULL COMMENT 'the id',
  `mno` int(25) NOT NULL COMMENT 'who made message first',
  `mno1` int(25) NOT NULL COMMENT 'who will received the message',
  `mno2` int(25) NOT NULL COMMENT 'person last reciever and didn''t able to see and read the message',
  `status` smallint(6) NOT NULL COMMENT 'detect and to count message notification',
  `sensor` tinyint(4) NOT NULL COMMENT 'detect when mno is typing or not',
  `sensor1` tinyint(4) NOT NULL COMMENT 'detect when mno1 is typing or not',
  `date` datetime NOT NULL COMMENT 'date message made use to order the display of the message list'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fs_modal_attribute`
--

CREATE TABLE IF NOT EXISTS `fs_modal_attribute` (
`matno` int(25) NOT NULL COMMENT 'primary key',
  `matcno` int(25) NOT NULL COMMENT 'foriegn key',
  `name` varchar(50) NOT NULL COMMENT 'name of the attribute ',
  `total` int(25) NOT NULL COMMENT 'total people using this',
  `mno` int(25) NOT NULL COMMENT 'this is the person who added the attribute',
  `status` tinyint(1) NOT NULL COMMENT 'this is to know that this attribute is visible to the site if 0 = not visible , 1 = visible',
  `date` datetime NOT NULL COMMENT 'date created'
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_modal_attribute`
--

INSERT INTO `fs_modal_attribute` (`matno`, `matcno`, `name`, `total`, `mno`, `status`, `date`) VALUES
(1, 2, 'Bag', 0, 133, 1, '2014-09-22 04:50:41'),
(2, 2, 'Belt', 0, 133, 1, '2014-09-22 04:50:41'),
(3, 2, 'Bra', 0, 133, 1, '2014-09-22 04:50:41'),
(4, 2, 'Bracelet', 0, 133, 1, '2014-09-22 04:50:41'),
(5, 2, 'Cufflink', 0, 133, 1, '2014-09-22 04:50:41'),
(6, 2, 'Earring', 0, 133, 1, '2014-09-22 04:50:41'),
(7, 2, 'Eyewear', 0, 133, 1, '2014-09-22 04:50:41'),
(8, 2, 'Glove', 0, 133, 1, '2014-09-22 04:50:41'),
(9, 2, 'Hat', 0, 133, 1, '2014-09-22 04:50:41'),
(10, 2, 'Leggings', 0, 133, 1, '2014-09-22 04:50:41'),
(11, 2, 'Pocket Square', 0, 133, 1, '2014-09-22 04:50:41'),
(12, 2, 'Purse', 0, 133, 1, '2014-09-22 04:50:41'),
(13, 2, 'Ring', 0, 133, 1, '2014-09-22 04:50:41'),
(14, 2, 'Scarf', 0, 133, 1, '2014-09-22 04:50:41'),
(15, 2, 'Sock', 0, 133, 1, '2014-09-22 04:50:41'),
(16, 2, 'Stockings', 0, 133, 1, '2014-09-22 04:50:41'),
(17, 2, 'Sunglasses', 0, 133, 1, '2014-09-22 04:50:41'),
(18, 2, 'Suspenders', 0, 133, 1, '2014-09-22 04:50:41'),
(19, 2, 'Ties', 0, 133, 1, '2014-09-22 04:50:41'),
(20, 2, 'Tie Clips', 0, 133, 1, '2014-09-22 04:50:41'),
(21, 2, 'Umbrellas', 0, 133, 1, '2014-09-22 04:50:41'),
(22, 2, 'Wallet', 0, 133, 1, '2014-09-22 04:50:41'),
(23, 2, 'Watch', 0, 133, 1, '2014-09-22 04:50:41'),
(24, 2, 'Blazer', 0, 133, 1, '2014-09-22 04:51:06'),
(25, 2, 'Blouse', 0, 133, 1, '2014-09-22 04:51:06'),
(26, 2, 'Bodysuit', 0, 133, 1, '2014-09-22 04:51:06'),
(27, 2, 'Cardigan', 0, 133, 1, '2014-09-22 04:51:06'),
(28, 2, 'Coat', 0, 133, 1, '2014-09-22 04:51:06'),
(29, 2, 'Dress', 0, 133, 1, '2014-09-22 04:51:06'),
(30, 2, 'Dress Pant', 0, 133, 1, '2014-09-22 04:51:06'),
(31, 2, 'Fleece', 0, 133, 1, '2014-09-22 04:51:06'),
(32, 2, 'Hoodie', 0, 133, 1, '2014-09-22 04:51:06'),
(33, 2, 'Jeans', 0, 133, 1, '2014-09-22 04:51:06'),
(34, 2, 'Jacket', 0, 133, 1, '2014-09-22 04:51:06'),
(35, 2, 'Jumper', 0, 133, 1, '2014-09-22 04:51:06'),
(36, 2, 'Leggings', 0, 133, 1, '2014-09-22 04:51:06'),
(37, 2, 'One-Piece', 0, 133, 1, '2014-09-22 04:51:06'),
(38, 2, 'Outerwear', 0, 133, 1, '2014-09-22 04:51:06'),
(39, 2, 'Pants', 0, 133, 1, '2014-09-22 04:51:06'),
(40, 2, 'Romper', 0, 133, 1, '2014-09-22 04:51:06'),
(41, 2, 'Shirt', 0, 133, 1, '2014-09-22 04:51:06'),
(42, 2, 'Shorts', 0, 133, 1, '2014-09-22 04:51:06'),
(43, 2, 'Skirts', 0, 133, 1, '2014-09-22 04:51:06'),
(44, 2, 'Sport Coat', 0, 133, 1, '2014-09-22 04:51:06'),
(45, 2, 'Sweater', 0, 133, 1, '2014-09-22 04:51:06'),
(46, 2, 'Sweatshirt', 0, 133, 1, '2014-09-22 04:51:06'),
(47, 2, 'Bathing Suit', 0, 133, 1, '2014-09-22 04:51:06'),
(48, 2, 'Top', 0, 133, 1, '2014-09-22 04:51:06'),
(49, 2, 'T-Shirt', 0, 133, 1, '2014-09-22 04:51:06'),
(50, 2, 'Vest', 0, 133, 1, '2014-09-22 04:51:06'),
(51, 2, 'Boots', 0, 133, 1, '2014-09-22 04:51:49'),
(52, 2, 'Clogs', 0, 133, 1, '2014-09-22 04:51:49'),
(53, 2, 'Dress Shoes', 0, 133, 1, '2014-09-22 04:51:49'),
(54, 2, 'Flats', 0, 133, 1, '2014-09-22 04:51:49'),
(55, 2, 'Heels', 0, 133, 1, '2014-09-22 04:51:49'),
(56, 2, 'Loafers', 0, 133, 1, '2014-09-22 04:51:49'),
(57, 2, 'Pumps', 0, 133, 1, '2014-09-22 04:51:49'),
(58, 2, 'Sandals', 0, 133, 1, '2014-09-22 04:51:49'),
(59, 2, 'Sneakers', 0, 133, 1, '2014-09-22 04:51:49'),
(60, 2, 'Special Occasion', 0, 133, 1, '2014-09-22 04:51:49'),
(61, 2, 'Wedges', 0, 133, 1, '2014-09-22 04:51:49'),
(62, 1, 'Cotton', 0, 133, 1, '2014-09-22 04:58:35'),
(63, 1, 'Linen', 0, 133, 1, '2014-09-22 04:58:35'),
(64, 1, 'Silk', 0, 133, 1, '2014-09-22 04:58:35'),
(65, 1, 'Wool', 0, 133, 1, '2014-09-22 04:58:35'),
(66, 1, 'Fur', 0, 133, 1, '2014-09-22 04:58:35'),
(67, 1, 'Polyester', 0, 133, 1, '2014-09-22 04:58:35'),
(68, 1, 'Rayon', 0, 133, 1, '2014-09-22 04:58:35'),
(69, 1, 'Nylon', 0, 133, 1, '2014-09-22 04:58:35'),
(70, 1, 'Acrylic', 0, 133, 1, '2014-09-22 04:58:35'),
(71, 1, 'Chambray', 0, 133, 1, '2014-09-22 04:58:35'),
(72, 1, 'Chino', 0, 133, 1, '2014-09-22 04:58:35'),
(73, 1, 'Corduroy', 0, 133, 1, '2014-09-22 04:58:35'),
(74, 1, 'Denim', 0, 133, 1, '2014-09-22 04:58:35'),
(75, 1, 'Khaki', 0, 133, 1, '2014-09-22 04:58:35'),
(76, 1, 'Leather', 0, 133, 1, '2014-09-22 04:58:35'),
(77, 1, 'Lace', 0, 133, 1, '2014-09-22 04:58:35'),
(78, 1, 'Latex', 0, 133, 1, '2014-09-22 04:58:35'),
(79, 1, 'Spandex', 0, 133, 1, '2014-09-22 04:58:35'),
(80, 3, 'Argyle', 0, 133, 1, '2014-09-22 04:59:59'),
(81, 3, 'Camo', 0, 133, 1, '2014-09-22 04:59:59'),
(82, 3, 'Checkered', 0, 133, 1, '2014-09-22 04:59:59'),
(83, 3, 'Houndstooth', 0, 133, 1, '2014-09-22 04:59:59'),
(84, 3, 'Floral', 0, 133, 1, '2014-09-22 04:59:59'),
(85, 3, 'Leopard', 0, 133, 1, '2014-09-22 04:59:59'),
(86, 3, 'Paisley', 0, 133, 1, '2014-09-22 04:59:59'),
(87, 3, 'Pied', 0, 133, 1, '2014-09-22 04:59:59'),
(88, 3, 'Pinstripe', 0, 133, 1, '2014-09-22 04:59:59'),
(89, 3, 'Plaid', 0, 133, 1, '2014-09-22 04:59:59'),
(90, 3, 'Polka-dotted', 0, 133, 1, '2014-09-22 04:59:59'),
(91, 3, 'Stripe', 0, 133, 1, '2014-09-22 04:59:59'),
(92, 3, 'Symmetry', 0, 133, 1, '2014-09-22 04:59:59'),
(93, 3, 'Tiger Stripe', 0, 133, 1, '2014-09-22 04:59:59'),
(94, 3, 'Zebra Print', 0, 133, 1, '2014-09-22 04:59:59'),
(95, 3, 'Zigzag', 0, 133, 1, '2014-09-22 04:59:59'),
(96, 8, 'Amusement Park', 0, 133, 1, '2014-09-22 05:01:22'),
(97, 8, 'Baby Shower', 0, 133, 1, '2014-09-22 05:01:22'),
(98, 8, 'BBQ', 0, 133, 1, '2014-09-22 05:01:22'),
(99, 8, 'Beach', 0, 133, 1, '2014-09-22 05:01:22'),
(100, 8, 'Birthday Dinner', 0, 133, 1, '2014-09-22 05:01:22'),
(101, 8, 'Blind Date', 0, 133, 1, '2014-09-22 05:01:22'),
(102, 8, 'Bridal Shower', 0, 133, 1, '2014-09-22 05:01:22'),
(103, 8, 'Brunch', 0, 133, 1, '2014-09-22 05:01:22'),
(104, 8, 'Casual Party', 0, 133, 1, '2014-09-22 05:01:22'),
(105, 8, 'Clubbing', 0, 133, 1, '2014-09-22 05:01:22'),
(106, 8, 'Cocktail', 0, 133, 1, '2014-09-22 05:01:22'),
(107, 8, 'College', 0, 133, 1, '2014-09-22 05:01:22'),
(108, 8, 'Company Event', 0, 133, 1, '2014-09-22 05:01:22'),
(109, 8, 'Conference', 0, 133, 1, '2014-09-22 05:01:22'),
(110, 8, 'Dinner Date', 0, 133, 1, '2014-09-22 05:01:22'),
(111, 8, 'Dinner Party', 0, 133, 1, '2014-09-22 05:01:22'),
(112, 8, 'Everyday', 0, 133, 1, '2014-09-22 05:01:22'),
(113, 8, 'Formal Event', 0, 133, 1, '2014-09-22 05:01:22'),
(114, 8, 'High School', 0, 133, 1, '2014-09-22 05:01:22'),
(115, 8, 'Internship', 0, 133, 1, '2014-09-22 05:01:22'),
(116, 8, 'Interview', 0, 133, 1, '2014-09-22 05:01:22'),
(117, 8, 'Lunch Date', 0, 133, 1, '2014-09-22 05:01:22'),
(118, 8, 'Movie Night', 0, 133, 1, '2014-09-22 05:01:22'),
(119, 8, 'Music Concert', 0, 133, 1, '2014-09-22 05:01:22'),
(120, 8, 'Photo shoot', 0, 133, 1, '2014-09-22 05:01:22'),
(121, 8, 'Picnic', 0, 133, 1, '2014-09-22 05:01:22'),
(122, 8, 'Pool Party', 0, 133, 1, '2014-09-22 05:01:22'),
(123, 8, 'Prom', 0, 133, 1, '2014-09-22 05:01:22'),
(124, 8, 'Romantic Dinner', 0, 133, 1, '2014-09-22 05:01:22'),
(125, 8, 'Theater / Play / Opera', 0, 133, 1, '2014-09-22 05:01:22'),
(126, 8, 'Wedding', 0, 133, 1, '2014-09-22 05:01:22'),
(127, 8, 'Wine Tasting', 0, 133, 1, '2014-09-22 05:01:22'),
(128, 8, 'Work', 0, 133, 1, '2014-09-22 05:01:22'),
(129, 7, 'Winter', 0, 133, 1, '2014-09-22 05:02:33'),
(130, 7, 'Spring', 0, 133, 1, '2014-09-22 05:02:33'),
(131, 7, 'Summer', 0, 133, 1, '2014-09-22 05:02:33'),
(132, 7, 'Fall', 0, 133, 1, '2014-09-22 05:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `fs_modal_attribute_cat`
--

CREATE TABLE IF NOT EXISTS `fs_modal_attribute_cat` (
`matcno` int(25) NOT NULL COMMENT 'primary key',
  `name` varchar(50) NOT NULL COMMENT 'name of the attribute',
  `total` int(25) NOT NULL COMMENT 'total of the items made',
  `date` datetime NOT NULL COMMENT 'date created'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_modal_attribute_cat`
--

INSERT INTO `fs_modal_attribute_cat` (`matcno`, `name`, `total`, `date`) VALUES
(1, 'material', 0, '2014-09-19 00:00:00'),
(2, 'garment', 0, '2014-09-19 00:00:00'),
(3, 'pattern', 0, '2014-09-19 00:00:00'),
(4, 'brand', 0, '2014-09-19 00:00:00'),
(5, 'color', 0, '2014-09-19 00:00:00'),
(6, 'keyword', 0, '2014-09-19 00:00:00'),
(7, 'season', 0, '2014-09-19 00:00:00'),
(8, 'occasion', 0, '2014-09-19 00:00:00'),
(9, 'style', 0, '2014-09-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fs_newsletter_signups`
--

CREATE TABLE IF NOT EXISTS `fs_newsletter_signups` (
`nlsno` int(25) NOT NULL,
  `newsletter_gender` varchar(30) NOT NULL,
  `newsletter_preferred_style` varchar(30) NOT NULL,
  `newsletter_email` varchar(30) NOT NULL,
  `newsletter_signup_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_newsletter_signups`
--

INSERT INTO `fs_newsletter_signups` (`nlsno`, `newsletter_gender`, `newsletter_preferred_style`, `newsletter_email`, `newsletter_signup_date`) VALUES
(5, 'MALE', 'Menswear', 'Pecotrain1@gmail.com', '2014-02-18'),
(6, 'MALE', 'Casual', 'Pecotrain@gmail.com', '2014-02-19'),
(7, 'MALE', 'Punk', 'mrjesuserwinsuarez@gmail.com', '2014-02-19'),
(8, 'MALE', 'Harajuku fashion', 'mrjesuserwinisuarez@Gmail.com', '2014-02-19'),
(9, 'MALE', 'Androgynous', 'smilingty@gmail.com', '2014-02-19'),
(10, 'MALE', 'Casual', 'thisisfrommobilesister@gmail.c', '2014-02-20'),
(11, 'MALE', 'Bohemian', 'test@gmail.com', '2014-02-20'),
(12, '', '', '', '2014-03-05'),
(13, 'MALE', 'Vintage', 'webbster43@yahoo.com', '2014-03-20'),
(14, 'MALE', '', 'mrj@gmail.com', '2014-10-05'),
(15, 'MALE', '', 'amazing@gmail.com', '2014-10-05'),
(16, 'FEMALE', '', 'msda@gmail.com', '2014-10-05'),
(17, 'FEMALE', '', 'mrjs@gmaill.com', '2014-10-05'),
(18, 'MALE', '', 'wee@gmail.com', '2014-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `fs_notification`
--

CREATE TABLE IF NOT EXISTS `fs_notification` (
`nno` int(25) NOT NULL COMMENT 'notification id',
  `mno` int(25) NOT NULL COMMENT 'who made the action',
  `table_name` varchar(25) NOT NULL COMMENT 'table name of the modal will display in the right side',
  `table_id` int(25) NOT NULL COMMENT 'table id of the modal',
  `action` varchar(500) NOT NULL COMMENT 'action made',
  `mno1` int(25) NOT NULL COMMENT 'follower of who made the action and received the notification',
  `mno2` int(25) NOT NULL COMMENT 'owner of the modal',
  `link` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` smallint(1) NOT NULL COMMENT 'status if its viewed or not and so on',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'date made'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_notification`
--

INSERT INTO `fs_notification` (`nno`, `mno`, `table_name`, `table_id`, `action`, `mno1`, `mno2`, `link`, `type`, `status`, `date`) VALUES
(1, 1022, 'postedlooks', 222380, '<b>Edsan  Barbecho</b> <span class=''fs-text-red'' >likes</span> your look  ', 1021, 1021, 'lookdetails?id=222380', '', 2, '2015-10-05 00:55:21'),
(2, 1021, 'postedlooks', 222388, '<b>Jesus  Suarez</b> <span class=''fs-text-red'' ><span class=''fs-text-red''> commented </span> </span> on your look  "<span style=''color:black'' >TEST</span>"  ', 1022, 1022, 'lookdetails?id=222388', '', 2, '2015-10-06 21:22:57'),
(3, 1021, 'postedlooks', 222388, '<b>Jesus  Suarez</b> <span class=''fs-text-red'' ><span class=''fs-text-red''> commented </span> </span> on your look  "<span style=''color:black'' >dasd</span>"  ', 1022, 1022, 'lookdetails?id=222388', '', 2, '2015-10-06 21:25:00'),
(4, 1021, 'postedlooks', 222388, '<b>Jesus  Suarez</b> <span class=''fs-text-red'' ><span class=''fs-text-red''> commented </span> </span> on your look  "<span style=''color:black'' >1</span>"  ', 1022, 1022, 'lookdetails?id=222388', '', 2, '2015-10-06 21:34:00'),
(5, 1021, 'postedlooks', 222388, '<b>Jesus  Suarez</b> <span class=''fs-text-red'' ><span class=''fs-text-red''> commented </span> </span> on your look  "<span style=''color:black'' >2</span>"  ', 1022, 1022, 'lookdetails?id=222388', '', 2, '2015-10-06 21:34:02'),
(6, 1021, 'postedlooks', 222388, '<b>Jesus  Suarez</b> <span class=''fs-text-red'' ><span class=''fs-text-red''> commented </span> </span> on your look  "<span style=''color:black'' >3</span>"  ', 1022, 1022, 'lookdetails?id=222388', '', 0, '2015-10-06 21:34:03'),
(7, 1022, 'fs_postedarticles', 26, '<b>Edsan  Barbecho</b> <span class=''fs-text-red'' >favorited</span> your article  ', 1021, 1021, 'detail?id=26', '', 2, '2015-10-06 23:45:06'),
(8, 1022, 'postedlooks', 222380, '<b>Edsan  Barbecho</b> <span class=''fs-text-red'' >favorited</span> your look  ', 1021, 1021, 'lookdetails?id=222380', '', 0, '2015-10-06 23:45:34'),
(9, 1022, 'fs_postedarticles', 26, '<b>Edsan  Barbecho</b> <span class=''fs-text-red'' >likes</span> your article  ', 1021, 1021, 'detail?id=26', '', 0, '2015-10-06 23:46:21'),
(10, 1022, 'fs_postedarticles', 25, '<b>Edsan  Barbecho</b> <span class=''fs-text-red'' >favorited</span> your article  ', 1021, 1021, 'detail?id=25', '', 0, '2015-10-07 00:24:36'),
(11, 1021, 'postedlooks', 222380, '<b>Jesus  Suarez</b> <span class=''fs-text-red'' ><span class=''fs-text-red''> commented </span> </span> on her  look  "<span style=''color:black'' >Test</span>"  ', 1022, 1021, 'lookdetails?id=222380', '', 0, '2015-10-07 23:06:02'),
(12, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:24:16'),
(13, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:24:39'),
(14, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:30:08'),
(15, 1022, 'fs_members', 123, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 123, 123, 'edsan', 'following', 2, '2015-10-08 00:33:30'),
(16, 1022, 'fs_members', 123, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 123, 123, 'edsan', 'following', 0, '2015-10-08 00:33:51'),
(17, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:34:55'),
(18, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:35:24'),
(19, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:36:46'),
(20, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:39:21'),
(21, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:40:15'),
(22, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:48:08'),
(23, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:48:32'),
(24, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:49:19'),
(25, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 2, '2015-10-08 00:49:32'),
(26, 1022, 'fs_members', 1021, ' <b>Edsan  Barbecho</b> started <span class=''fs-text-red''  > following </span> you', 1021, 1021, 'edsan', 'following', 0, '2015-10-08 00:52:00'),
(27, 1021, '1', 0, '<b>Jesus Yurag Suarez</b> <span class=''fs-text-red''> Change </span> her name to Jesus Yurag Suarez ', 1022, 0, 'Jesus', 'change-profile-cover-photo', 0, '2015-10-08 00:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `fs_plcm_dislike`
--

CREATE TABLE IF NOT EXISTS `fs_plcm_dislike` (
`plcmdno` bigint(25) NOT NULL,
  `plcno` bigint(25) NOT NULL,
  `mno` bigint(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fs_plcm_rdislike`
--

CREATE TABLE IF NOT EXISTS `fs_plcm_rdislike` (
`rdno` bigint(25) NOT NULL,
  `plcrno` bigint(25) NOT NULL,
  `mno` bigint(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fs_plcm_reply`
--

CREATE TABLE IF NOT EXISTS `fs_plcm_reply` (
`plcr_no` bigint(25) NOT NULL,
  `plcno` bigint(25) NOT NULL,
  `replied_no` bigint(20) NOT NULL,
  `mno` bigint(25) NOT NULL,
  `plcr_message` text NOT NULL,
  `plcr_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fs_plcm_reply`
--

INSERT INTO `fs_plcm_reply` (`plcr_no`, `plcno`, `replied_no`, `mno`, `plcr_message`, `plcr_date`) VALUES
(8, 191, 0, 682, 'qeqwe', '2013-07-02 11:22:05'),
(15, 192, 0, 933, 'yes', '2013-07-03 08:59:37'),
(45, 182, 0, 682, 'well', '2013-07-04 20:21:52'),
(48, 182, 45, 682, '1 ', '2013-07-04 20:22:08'),
(49, 182, 45, 682, '2', '2013-07-04 20:22:12'),
(50, 182, 45, 682, '3', '2013-07-04 20:22:18'),
(51, 182, 45, 682, '1 ', '2013-07-04 20:24:59'),
(52, 182, 45, 682, '2', '2013-07-04 20:25:07'),
(53, 182, 0, 682, 'well 1', '2013-07-04 20:25:15'),
(54, 182, 0, 682, 'well 2', '2013-07-04 20:25:20'),
(55, 182, 0, 682, 'ok', '2013-07-04 20:26:01'),
(57, 206, 0, 682, 'nice', '2013-07-07 23:26:39'),
(58, 206, 0, 682, 'great', '2013-07-07 23:26:51'),
(59, 206, 57, 682, 'well', '2013-07-07 23:26:57'),
(167, 455, 0, 133, 'asd', '2014-04-28 05:02:58'),
(168, 457, 0, 134, 'asda', '2014-04-28 05:03:53'),
(169, 456, 0, 134, 'asda', '2014-04-28 05:03:58'),
(170, 453, 0, 134, 'sfdsdf', '2014-04-28 05:04:02'),
(171, 450, 0, 134, 'a', '2014-04-28 05:04:05'),
(172, 457, 168, 153, 'how nice.', '2014-04-28 05:04:52'),
(173, 457, 0, 153, 'how nice!', '2014-04-28 05:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `fs_plcm_rflag`
--

CREATE TABLE IF NOT EXISTS `fs_plcm_rflag` (
`rflagno` bigint(25) NOT NULL,
  `plcrno` bigint(25) NOT NULL,
  `mno` bigint(25) NOT NULL,
  `rflag_option` text NOT NULL,
  `rflag_note` varchar(250) NOT NULL,
  `rflag_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fs_plcm_rlike`
--

CREATE TABLE IF NOT EXISTS `fs_plcm_rlike` (
`rlno` bigint(25) NOT NULL,
  `plcrno` bigint(25) NOT NULL,
  `mno` bigint(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fs_plcm_rlike`
--

INSERT INTO `fs_plcm_rlike` (`rlno`, `plcrno`, `mno`) VALUES
(1, 66, 682),
(2, 71, 682),
(3, 73, 682),
(4, 69, 682),
(5, 9, 133),
(6, 173, 153),
(7, 168, 153);

-- --------------------------------------------------------

--
-- Table structure for table `fs_pltag`
--

CREATE TABLE IF NOT EXISTS `fs_pltag` (
`pltgno` bigint(25) NOT NULL,
  `plno` bigint(25) NOT NULL,
  `plt_color` varchar(50) NOT NULL,
  `plt_brand` varchar(50) NOT NULL,
  `plt_garment` varchar(50) NOT NULL,
  `plt_material` varchar(50) NOT NULL,
  `plt_pattern` varchar(50) NOT NULL,
  `plt_price` varchar(25) NOT NULL,
  `plt_purchased_at` varchar(50) NOT NULL,
  `plt_x` bigint(25) NOT NULL,
  `plt_y` bigint(25) NOT NULL,
  `plt_date` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=310 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fs_postedarticles`
--

CREATE TABLE IF NOT EXISTS `fs_postedarticles` (
`artno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `tags` varchar(250) NOT NULL,
  `style` varchar(50) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `source_url` varchar(500) NOT NULL,
  `source_item` varchar(500) NOT NULL,
  `type` varchar(10) NOT NULL,
  `extention` varchar(20) NOT NULL,
  `tfavorite` int(25) NOT NULL,
  `tdrip` int(25) NOT NULL,
  `tshare` int(25) NOT NULL,
  `tcomment` int(25) NOT NULL,
  `trating` int(25) NOT NULL,
  `tpercentage` int(25) NOT NULL,
  `tview` int(25) NOT NULL,
  `pltvotes` int(11) NOT NULL,
  `active` smallint(6) NOT NULL,
  `date` datetime NOT NULL,
  `plus_blogger` varchar(11) NOT NULL DEFAULT 'Yes',
  `gender` varchar(11) NOT NULL DEFAULT 'Male'
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_postedarticles`
--

INSERT INTO `fs_postedarticles` (`artno`, `mno`, `title`, `description`, `keyword`, `category`, `tags`, `style`, `topic`, `source_url`, `source_item`, `type`, `extention`, `tfavorite`, `tdrip`, `tshare`, `tcomment`, `trating`, `tpercentage`, `tview`, `pltvotes`, `active`, `date`, `plus_blogger`, `gender`) VALUES
(36, 1021, 'asasd', '<p>asdasd</p>', '', 'Beauty', 'summer, spring,', '', 'Beauty Workshop', '', '', 'image', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-08 07:30:10', 'Yes', 'Female'),
(37, 1021, 'asd', '<p>asd</p>', '', 'Beauty', 'spring, summer,', '', 'Celebrity Gossip', 'as', 'as', 'image', '', 0, 0, 0, 0, 0, 0, 11, 0, 1, '2015-10-08 07:59:40', 'Yes', 'Female'),
(38, 1021, 'sdasdas', '<p>asdasdasdasd as asd asd</p>', '', 'Beauty', 'spring, summer,', '', 'Beauty Workshop', '', '', 'image', '', 0, 0, 0, 0, 0, 0, 2, 0, 1, '2015-10-08 08:38:11', 'Yes', 'Female'),
(39, 1021, 'asd', '<p>asasd</p>', '', 'Entertainment', 'spring, summer,', '', 'Book', 'sd', 'sd', 'image', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-09 07:14:03', 'Yes', 'Female'),
(40, 1021, 'asdasd', '<p>asd</p>', '', 'Entertainment', '', '', 'Book', 'asd', 'asd', 'image', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-09 07:14:40', 'Yes', 'Female'),
(41, 1021, 'asd', '<p>asdasd</p>', '', 'Entertainment', 'spring, summer,', '', 'Book', 'asd', 'asd', 'image', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-09 07:15:07', 'Yes', 'Female'),
(42, 1022, 'as', '<p>asdasdasd</p>', '', 'Beauty', 'summer, spring,', '', 'Beauty Recipe', '', '', 'image', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-09 07:17:51', 'Yes', 'Male'),
(43, 1022, 'a', '<p>asdas</p>', '', 'Entertainment', 'summer,', '', 'Book', 'asd', 'asd', 'image', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-09 07:18:20', 'Yes', 'Male'),
(44, 1022, 'asd', '<p>asdas</p>', '', 'Entertainment', '', '', 'Celebrity Gossip', 'asd', 'asd', 'image', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-09 07:18:47', 'Yes', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `fs_postedmedia`
--

CREATE TABLE IF NOT EXISTS `fs_postedmedia` (
`media_id` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `media_title` varchar(100) NOT NULL,
  `media_description` varchar(200) NOT NULL,
  `media_tags` varchar(100) NOT NULL,
  `media_topic` varchar(20) NOT NULL,
  `media_source_url` varchar(100) NOT NULL,
  `media_source_item` varchar(100) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_extension` varchar(5) NOT NULL,
  `media_dateuploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fs_post_attribute`
--

CREATE TABLE IF NOT EXISTS `fs_post_attribute` (
`id` int(25) NOT NULL,
  `table_id` varchar(25) NOT NULL,
  `table_name` varchar(400) NOT NULL,
  `slug` varchar(400) NOT NULL,
  `title` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `meta_description` varchar(400) NOT NULL,
  `alt` varchar(400) NOT NULL,
  `keyword` varchar(400) NOT NULL,
  `topic` varchar(400) NOT NULL,
  `category` varchar(400) NOT NULL,
  `file_path` varchar(250) NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fs_rate_modals`
--

CREATE TABLE IF NOT EXISTS `fs_rate_modals` (
`rmno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `table_id` int(25) NOT NULL,
  `table_name` varchar(25) NOT NULL,
  `rate_type` varchar(25) NOT NULL,
  `rate_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=327 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_rate_modals`
--

INSERT INTO `fs_rate_modals` (`rmno`, `mno`, `table_id`, `table_name`, `rate_type`, `rate_date`) VALUES
(309, 1013, 195, 'fs_postedarticles', 'like', '2015-09-30 04:46:56'),
(310, 1013, 196, 'fs_postedarticles', 'like', '2015-09-30 04:47:33'),
(311, 1013, 197, 'fs_postedarticles', 'like', '2015-09-30 04:48:57'),
(312, 1015, 197, 'fs_postedarticles', 'like', '2015-09-30 04:54:20'),
(313, 1015, 196, 'fs_postedarticles', 'like', '2015-09-30 04:54:24'),
(314, 1015, 195, 'fs_postedarticles', 'like', '2015-09-30 04:54:28'),
(315, 1015, 222364, 'postedlooks', 'like', '2015-09-30 04:54:34'),
(316, 1013, 222365, 'postedlooks', 'like', '2015-09-30 04:55:41'),
(317, 1015, 222365, 'postedlooks', 'like', '2015-09-30 04:57:16'),
(318, 137, 213, 'fs_postedarticles', 'like', '2015-09-30 22:12:59'),
(319, 137, 214, 'fs_postedarticles', 'like', '2015-09-30 22:13:38'),
(320, 137, 222372, 'postedlooks', 'like', '2015-09-30 22:14:52'),
(321, 1013, 215, 'fs_postedarticles', 'like', '2015-10-01 08:16:57'),
(322, 1013, 222373, 'postedlooks', 'like', '2015-10-01 08:17:01'),
(323, 1013, 220, 'fs_postedarticles', 'like', '2015-10-01 08:17:02'),
(324, 1013, 219, 'fs_postedarticles', 'like', '2015-10-01 08:17:05'),
(325, 1022, 222380, 'postedlooks', 'like', '2015-10-05 08:55:21'),
(326, 1022, 26, 'fs_postedarticles', 'like', '2015-10-07 07:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `fs_search`
--

CREATE TABLE IF NOT EXISTS `fs_search` (
`sno` int(25) NOT NULL COMMENT 'id',
  `keyword` varchar(500) NOT NULL COMMENT 'the keyword identifies the item',
  `table_name` varchar(50) NOT NULL COMMENT 'table name of the item',
  `table_id` int(25) NOT NULL COMMENT 'table id of the item',
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=883 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_search`
--

INSERT INTO `fs_search` (`sno`, `keyword`, `table_name`, `table_id`, `date`) VALUES
(1, 'keyword for postedlooks', 'postedlooks', 533, '2014-08-29 02:38:41'),
(2, 'MooreASD M1. Mauricio12 A1dAasd , BrainOfFashion , fashionsponge@gmail.com', 'fs_members', 133, '2014-08-29 02:38:41'),
(3, 'asdasdasdasd asdasdasdasd asdas , Beauty , undefined , ', 'fs_postedarticles', 78, '2014-08-29 02:38:41'),
(4, 'title , Entertainment , undefined , ', 'fs_postedarticles', 80, '2014-08-29 02:41:02'),
(5, ' , Green , brand daw , Scarf , Fur , Zigzag ,   , drawing  , Lightblue , brand x , Tie Clips , Leather , Pied ,   , drawing ', 'postedlooks', 534, '2014-08-29 02:42:34'),
(6, 'smile den pag may time , YellowGreen , brand napud , Bracelet , Leather , Zebra Print ,  smile den pag may time , Turquoise , bx , Scarf , Rayon , Pied ,  ', 'postedlooks', 535, '2014-08-29 02:45:21'),
(7, ' Licon Now Young Wow Mc Kenneth  , lilfashionistocom , hi@littlefashionisto.com', 'fs_members', 754, '2014-08-29 02:45:51'),
(8, 'Faye  Faye , kayfayb , kayfayb@gmail.com', 'fs_members', 134, '2014-08-29 03:01:37'),
(9, 'England  Richard , mauricomoore , pecotrain1@gmail.com', 'fs_members', 135, '2014-08-29 03:01:37'),
(10, 'Marinescu  Ruxandra Ioana , ruxandraioana , fashionistadebruxelles@yahoo.com', 'fs_members', 821, '2014-08-29 03:01:37'),
(11, 'Suarez Y. Jesus , jesus1 , jesus@gmail.com', 'fs_members', 136, '2014-08-29 03:01:37'),
(12, 'Murray  Brandi1 , limtdeditionstyling , limtdeditionstyling@gmail.com-updated232', 'fs_members', 137, '2014-08-29 03:01:37'),
(13, '  Silvia , SilviaCristescu , ', 'fs_members', 138, '2014-08-29 03:01:37'),
(14, 'Pearson  Chris  , CPStyle , chris@cpstyle.com', 'fs_members', 139, '2014-08-29 03:01:37'),
(15, 'Abastar  Bryan , bryanabastar , weweabastar@yahoo.com', 'fs_members', 140, '2014-08-29 03:01:37'),
(16, 'Ferrari   Roxy  , Roxy Ferrari , roxyferrari@clumsy-cat.com', 'fs_members', 141, '2014-08-29 03:01:37'),
(17, 'Ferrari  Roxy  ,  , ', 'fs_members', 142, '2014-08-29 03:01:37'),
(18, 'Brumfield  Van , Van , kayfayb@gmail.com', 'fs_members', 143, '2014-08-29 03:01:37'),
(19, 'McCloud Jr.  Troy , TroyMcCloud , fairbirds@aol.com', 'fs_members', 174, '2014-08-29 03:01:37'),
(20, 'Summers  Geech , LookShrpLivSmrt , gaudyglamstyling@gmail.com', 'fs_members', 173, '2014-08-29 03:01:37'),
(21, 'McCloud  Troy , Troyleonardo93 , troymccloud93@yahoo.com', 'fs_members', 172, '2014-08-29 03:01:37'),
(22, 'Cureton  J. , Mista_Bangkx , ', 'fs_members', 171, '2014-08-29 03:01:37'),
(23, 'Snell  Lavicius , Flyygirl_56 , laviciuscarr@yahoo.com', 'fs_members', 170, '2014-08-29 03:01:37'),
(24, 'Pantallano  Arex , arexpantallano , arex.pantallano@yahoo.com', 'fs_members', 169, '2014-08-29 03:01:37'),
(25, 'Casem  Jacob , Jacob_Casem , jacobcasem@yahoo.com', 'fs_members', 150, '2014-08-29 03:01:37'),
(26, 'Aghan  Just , meaghanmae , ', 'fs_members', 151, '2014-08-29 03:01:37'),
(27, 'Alege  Olu  , Reallysl , olualege1@gmail.com', 'fs_members', 152, '2014-08-29 03:01:37'),
(28, 'Knight  Ant , antknight5 , antknight9@yahoo.com', 'fs_members', 153, '2014-08-29 03:01:37'),
(29, 'Debonair-Elias  Jojo , ImJustJojo , undefined', 'fs_members', 154, '2014-08-29 03:01:37'),
(30, 'Tabinowski  Katherine , Style Tab , katherinetab@gmail.com', 'fs_members', 155, '2014-08-29 03:01:37'),
(31, 'Pink  Pretty , tiazimanyan , ', 'fs_members', 156, '2014-08-29 03:01:37'),
(32, 'Taylor  Everlecia , everleciataylor , tayloreverlecia@yahoo.com', 'fs_members', 157, '2014-08-29 03:01:37'),
(33, '  Talalima , talamobley , ', 'fs_members', 158, '2014-08-29 03:01:37'),
(34, 'Mobley  Talalima , talamobley , talamobley4@hotmail.com', 'fs_members', 159, '2014-08-29 03:01:37'),
(35, 'Waldinger  Frances , franceswaldinger , frankiewgray@gmail.com', 'fs_members', 160, '2014-08-29 03:01:37'),
(36, '  Scarlett , scarlett_007 , ', 'fs_members', 161, '2014-08-29 03:01:37'),
(37, 'Alvarado  Scarlett , scarlett_007 , scarlettlvrd007@hotmail.com', 'fs_members', 162, '2014-08-29 03:01:37'),
(38, 'Barrett  Candice , Candy Renee , candyb385@msn.com', 'fs_members', 163, '2014-08-29 03:01:37'),
(39, '  Olu , ReallYSL , ', 'fs_members', 164, '2014-08-29 03:01:37'),
(40, 'Owusu  Rebecca , Glamourgaal , nanaagyiewaah@msn.com', 'fs_members', 165, '2014-08-29 03:01:37'),
(41, 'Thomas  Terry , terry103 , terrythomas@yahoo.com', 'fs_members', 166, '2014-08-29 03:01:37'),
(42, 'Matisse  Antioné , AntionéMatisse , chalkleyam@hotmail.com', 'fs_members', 167, '2014-08-29 03:01:37'),
(43, '  Everlecia , everleciajana , ', 'fs_members', 168, '2014-08-29 03:01:37'),
(44, 'Pipkins  Brea , ListenToEsta , brea.pipkinschhs@yahoo.com', 'fs_members', 175, '2014-08-29 03:01:37'),
(45, 'Pitu  Delia Anastasia , DsDays , pitudelia@yahoo.com', 'fs_members', 176, '2014-08-29 03:01:37'),
(46, 'Mitchell  Erica , Lovelyelane , Ldycbrown@yahoo.com', 'fs_members', 177, '2014-08-29 03:01:37'),
(47, 'Undefined  Biffy , koilmekinky , ', 'fs_members', 178, '2014-08-29 03:01:37'),
(48, 'Young  Ciera , fan_cee , rock29solid@Gmail.com', 'fs_members', 179, '2014-08-29 03:01:37'),
(49, 'Queenz  Helena , MarissaPrettyBrownEyesJoiner , queen_cutie_bee@yahoo.com', 'fs_members', 180, '2014-08-29 03:01:37'),
(50, 'Foster  Porscha , Mackisses10 , Delisha_maria@yahoo.com', 'fs_members', 181, '2014-08-29 03:01:37'),
(51, 'Northington   aja , ajacnorth , ajanorthington312@yahoo.com', 'fs_members', 182, '2014-08-29 03:01:37'),
(52, 'Joiner  Marissa  , HelenaQueenz  , helenaqueenz@hotmail.com', 'fs_members', 183, '2014-08-29 03:01:37'),
(53, 'Jones  Tynette , tynettejones , tynettemjones@yahoo.com', 'fs_members', 184, '2014-08-29 03:01:37'),
(54, 'Clayborn  Jasmine , jaszmonc , jmcwash@yahoo.com', 'fs_members', 185, '2014-08-29 03:01:37'),
(55, 'Barrett  Candice , Candy Renee , candyb385@msn.com', 'fs_members', 186, '2014-08-29 03:01:37'),
(56, 'Mono  Anele , IshopIsmile , monoanele@yahoo.com.au', 'fs_members', 187, '2014-08-29 03:01:37'),
(57, 'Mono  Anele , anelemono , siwijialive@rocketmail.com', 'fs_members', 188, '2014-08-29 03:01:37'),
(58, 'Outridge  Natalia , NatalyaSarah , noutridge@live.com', 'fs_members', 189, '2014-08-29 03:01:37'),
(59, 'Lind   Saundra , SaundraLind , saundralind@gmail.com', 'fs_members', 190, '2014-08-29 03:01:37'),
(60, 'Pantallano  Arjune , rhoujouneX , rhoujounex27_jawaican@yahoo.com', 'fs_members', 191, '2014-08-29 03:01:37'),
(61, 'Brooks  Braylen , BraylenBrooks , BraylenjBrooks@gmail.com', 'fs_members', 192, '2014-08-29 03:01:37'),
(62, 'Pulido  Jacqueline , Jacqueline_Pulido , pulidojacky12@hotmail.com', 'fs_members', 193, '2014-08-29 03:01:37'),
(63, 'G  P , phabib , princehabib@hotmail.com', 'fs_members', 194, '2014-08-29 03:01:37'),
(64, 'Jones  Linda , Mslovelace  , Mslovelace11@verizon.net', 'fs_members', 195, '2014-08-29 03:01:37'),
(65, 'Mono  Nobuhle , nobuhlemono , jazzysnox@rocketmail.com', 'fs_members', 196, '2014-08-29 03:01:37'),
(66, 'Harisse  Mohcine , Mohcine aoki , Mohcineaoki@gmail.com', 'fs_members', 197, '2014-08-29 03:01:37'),
(67, 'Gibbons  Quatell , qgibbons , qgibbons@hotmail.com', 'fs_members', 198, '2014-08-29 03:01:37'),
(68, 'Gibbons  Quatell , quatell , qdawg_02@yahoo.com', 'fs_members', 199, '2014-08-29 03:01:37'),
(69, 'Cook  Geoey , geoey , gcook@smartmarketer.net', 'fs_members', 200, '2014-08-29 03:01:37'),
(70, 'McCowan  Tiqura , PrettyfaceQura , tiquramccowan@gmail.com', 'fs_members', 201, '2014-08-29 03:01:37'),
(71, 'Tyson  Kindell , Kenni Javon , EclecticEthereal@gmail.com', 'fs_members', 202, '2014-08-29 03:01:37'),
(72, 'Brown  Stephaneye , stephaneyeb , stephaneyeb@gmail.com', 'fs_members', 203, '2014-08-29 03:01:37'),
(73, 'Rhone  Jasmine , jasminekylene , divahairbyjazz@yahoo.com', 'fs_members', 204, '2014-08-29 03:01:37'),
(74, 'Burford  Lorna , LornaRaindrops , raindropsofsapphire@gmail.com', 'fs_members', 205, '2014-08-29 03:01:37'),
(75, 'Sloter  Catrinel , catrinel.sloter , catrinel.sloter@gmail.com', 'fs_members', 206, '2014-08-29 03:01:37'),
(76, 'Williams  Kyla , KylaK , Kylawilliams20@gmail.com', 'fs_members', 207, '2014-08-29 03:01:37'),
(77, 'Dorcin  Woodline , lyn2dawson , naturelleme@gmail.com', 'fs_members', 208, '2014-08-29 03:01:37'),
(78, 'Me  Naturelle , lyndawson , naturelleme@gmail.com', 'fs_members', 209, '2014-08-29 03:01:37'),
(79, 'Lei  Tommy , tommylei88 , tommy.lei88@gmail.com', 'fs_members', 210, '2014-08-29 03:01:37'),
(80, 'Hua  Ar , arhua , hua2dcy@qq.com', 'fs_members', 211, '2014-08-29 03:01:37'),
(81, 'Buzza  Eros , hermesismydad , eros.buzza@googlemail.com', 'fs_members', 212, '2014-08-29 03:01:37'),
(82, 'Tiafoe  Joseph , Tex , Jotextiafoe@gmail.com', 'fs_members', 213, '2014-08-29 03:01:37'),
(83, 'Lee  Bryant , fashoncrave , fashoncrave@live.com', 'fs_members', 214, '2014-08-29 03:01:37'),
(84, 'Undefined  Geoey , smartmarketer , ', 'fs_members', 215, '2014-08-29 03:01:37'),
(85, 'Pantallano  Anthony Jasphere Jash , jayjay , jaspherejash@yahoo.com', 'fs_members', 216, '2014-08-29 03:01:37'),
(86, 'Undefined  Anoud , AnoudAssaf , ', 'fs_members', 217, '2014-08-29 03:01:37'),
(87, 'Barnes  Kiana , kianabarnes31 , nike_skeezer15@yahoo.com', 'fs_members', 218, '2014-08-29 03:01:37'),
(88, 'Park  Jerry , jerryALIIGN , jerry@ALIIGNMOVEMENT.COM', 'fs_members', 219, '2014-08-29 03:01:37'),
(89, 'Davis  Charee , styledbychelly , lachelledavis93@gmail.com', 'fs_members', 220, '2014-08-29 03:01:37'),
(90, 'Groves  Yoli , Yoli , Dydbuss@yahoo.com', 'fs_members', 221, '2014-08-29 03:01:37'),
(91, 'Brooks  Braylen , BraylenBrooks , braylenbrooks@gmail.com', 'fs_members', 222, '2014-08-29 03:01:37'),
(92, 'Borsa  Anaivilo , anaivilo , ollie_fashion@yahoo.com', 'fs_members', 223, '2014-08-29 03:01:37'),
(93, 'Harding  Othea , Eyestylepro , Eyestyle.Enterprises7@gmail.com', 'fs_members', 224, '2014-08-29 03:01:37'),
(94, 'Red  Skye , beautifulone , skyeward512@gmail.com', 'fs_members', 225, '2014-08-29 03:01:37'),
(95, 'Views  Laura , lauraviews , lauravfmw@gmail.com', 'fs_members', 226, '2014-08-29 03:01:37'),
(96, 'Reid  Shantel , BlondeDiva_247 , sdenson_goldelox@yahoo.com', 'fs_members', 227, '2014-08-29 03:01:37'),
(97, 'Beckford  Sherine , SherineB , sherinejobs@hotmail.com', 'fs_members', 228, '2014-08-29 03:01:37'),
(98, 'Undefined  No , CookieCrumblz , ', 'fs_members', 229, '2014-08-29 03:01:37'),
(99, 'Dare  Josephine , Josie , Temitopedare@rocketmail.com', 'fs_members', 230, '2014-08-29 03:01:37'),
(100, 'Dare  Temitope , Josie , Temitopedare@rocketmail.com', 'fs_members', 231, '2014-08-29 03:01:37'),
(101, 'Dare  Josephine , Josieluv , Temitopedare@rocketmail.com', 'fs_members', 232, '2014-08-29 03:01:37'),
(102, 'B  T , cheerio9 , cheeriogurl0909@gmail.com', 'fs_members', 233, '2014-08-29 03:01:37'),
(103, 'Riffard  Alexe , dollpoupee , alexe.riffard@gmail.com', 'fs_members', 234, '2014-08-29 03:01:37'),
(104, 'Undefined  Tomilola , ThatEscadaGirl , ', 'fs_members', 235, '2014-08-29 03:01:37'),
(105, 'McMillian  Tiffany , Tiff215 , tmcmillian2009@gmail.com', 'fs_members', 236, '2014-08-29 03:01:37'),
(106, 'Sloter  Catrinel , Catrinel S. , catrinel.sloter@gmail.com', 'fs_members', 237, '2014-08-29 03:01:37'),
(107, 'Undefined  Toddssss! , Dimzkie_ , ', 'fs_members', 238, '2014-08-29 03:01:37'),
(108, 'Doucoure  Fatoumata , fifi , fificr7@hotmail.fr', 'fs_members', 239, '2014-08-29 03:01:37'),
(109, 'Tanteras  Cham , moklaii , frappuccina@ymail.com', 'fs_members', 240, '2014-08-29 03:01:37'),
(110, 'Fuller-mosby  Charity , loveit , cfullermosby@yahoo.com', 'fs_members', 241, '2014-08-29 03:01:37'),
(111, 'Pantallano  Arexjr , arexjr , arexjrpantallano@yahoo.com', 'fs_members', 242, '2014-08-29 03:01:37'),
(112, 'Mizuki  Eisha , lhenmaezhen , gemparoshellamie@yahoo.com', 'fs_members', 243, '2014-08-29 03:01:37'),
(113, 'Mary  Jia , mary , mary5688@yahoo.cn', 'fs_members', 244, '2014-08-29 03:01:37'),
(114, 'McRae  April , AprilAnnFashionStylist , AprilAnnFashionStylist@gmail.com', 'fs_members', 245, '2014-08-29 03:01:37'),
(115, 'Lee  Donghee , AgainURS , dlchffkd88@gmail.com', 'fs_members', 246, '2014-08-29 03:01:37'),
(116, 'Oliver  Ciera , cieradavis969 , cieradavispr@gmail.com', 'fs_members', 247, '2014-08-29 03:01:37'),
(117, 'Dorsey  Demi , demidorsey , rabbitsboxxx@yahoo.com', 'fs_members', 248, '2014-08-29 03:01:37'),
(118, 'Joy  Mecka  , meckajoy , stylesbymeckajoy@gmail.com', 'fs_members', 249, '2014-08-29 03:01:37'),
(119, 'J  J ,  , ', 'fs_members', 250, '2014-08-29 03:01:37'),
(120, 'Pantallano  Arex ,  , ', 'fs_members', 251, '2014-08-29 03:01:37'),
(121, 'Judkins  Beshaun , thecasualallure , hippie.panther@gmail.com', 'fs_members', 252, '2014-08-29 03:01:37'),
(122, 'Undefined  LaShonya , AynaiSy , ', 'fs_members', 253, '2014-08-29 03:01:37'),
(123, 'Bland  Danielle , kissesfromdani , awayf@ymail.com', 'fs_members', 254, '2014-08-29 03:01:37'),
(124, 'Bartolic  Dajana , dajanabartolic , dajanabartolic@gmail.com', 'fs_members', 255, '2014-08-29 03:01:37'),
(125, 'Undefined  Vic , Vic__Styles , ', 'fs_members', 256, '2014-08-29 03:01:37'),
(126, 'Sanders  Victoria , vicstyles , v_sanders1908@yahoo.com', 'fs_members', 257, '2014-08-29 03:01:37'),
(127, 'Botardo  Neil Patrick Sheen , npatrcksheen , shinesteed@yahoo.com', 'fs_members', 258, '2014-08-29 03:01:37'),
(128, 'Lily  King , KingLilyVII , trinileelee@aol.com', 'fs_members', 259, '2014-08-29 03:01:37'),
(129, 'Osas  Ofure , ofureosas , cutieloveworld4real@yahoo.com', '', 0, '0000-00-00 00:00:00'),
(130, 'Osas  Ofure , ofureosas , cutieloveworld4real@yahoo.com', 'fs_members', 260, '2014-08-29 03:03:30'),
(131, 'Osaigbovo  Ofure , Ofure , ladyb2247@gmail.com', 'fs_members', 261, '2014-08-29 03:03:30'),
(132, 'Pecadeso  Roxanne , roxannepecadeso , roxy87p@comcast.net', 'fs_members', 262, '2014-08-29 03:03:30'),
(133, 'Sabatini  Viola , violasabatini , violasabatini0@gmail.com', 'fs_members', 263, '2014-08-29 03:03:30'),
(134, 'Hankerson  Kennae , Kennae95 , kennaehankerson@yahoo.com', 'fs_members', 264, '2014-08-29 03:03:30'),
(135, 'Stejskalova  Jesika , Jesika , jesika@jesikaconsulting.com', 'fs_members', 265, '2014-08-29 03:03:30'),
(136, 'Pured  Queem , queemisphere , keemisphere@yahoo.com', 'fs_members', 266, '2014-08-29 03:03:30'),
(137, 'C.  Silvia , thestunninglook , contact@thestunninglook.com', 'fs_members', 267, '2014-08-29 03:03:30'),
(138, 'Edwards  Kristyn , kedwards96 , kswagg1996@gmail.com', 'fs_members', 268, '2014-08-29 03:03:30'),
(139, 'Minniefield  Kala , Kala_Artesia , 305poison93@gmail.com', 'fs_members', 269, '2014-08-29 03:03:30'),
(140, 'Powell  Nate , singleton19 , nateapowell1', 'fs_members', 270, '2014-08-29 03:03:30'),
(141, 'Blade  Ghost , EatShitFLyIsshh , ', 'fs_members', 271, '2014-08-29 03:03:30'),
(142, 'English  Mariah , mariahenglish4 , mariahenglish4@gmail.com', 'fs_members', 272, '2014-08-29 03:03:30'),
(143, 'Baker  Teresa , Ilovefashion , Teresa.baker78@gmail.com', 'fs_members', 273, '2014-08-29 03:03:30'),
(144, 'Thomas  Debra , DEBSTAR , DEBTHOMAS88@GMAIL.COM', 'fs_members', 274, '2014-08-29 03:03:30'),
(145, 'Nguyen  Adrienne , AdrienneNguyen , adrienneee@gmail.com', 'fs_members', 275, '2014-08-29 03:03:30'),
(146, 'Nguyen  Adrienne , AdrienneNguyen , adrienneee@gmail.com', 'fs_members', 276, '2014-08-29 03:03:30'),
(147, 'Cornilleau  Matthias , STYLNOXE , matthiascornilleau@gmail.com', 'fs_members', 277, '2014-08-29 03:03:30'),
(148, 'Cornilleau  Matthias , mcornilleau , matth01@hotmail.fr', 'fs_members', 278, '2014-08-29 03:03:30'),
(149, 'Moore  Markuez , Mr.Moore , mmarkuez@yahoo.com', 'fs_members', 279, '2014-08-29 03:03:30'),
(150, 'Smith  Traquinta , VivaLaIllest  , Traquintasmith@yahoo.com', 'fs_members', 280, '2014-08-29 03:03:30'),
(151, 'Mason  Demarcus , marko , autioncreator@gmail.com', 'fs_members', 281, '2014-08-29 03:03:30'),
(152, 'Gale  Ryan , girlryann , gale.ryan3@gmail.com', 'fs_members', 282, '2014-08-29 03:03:30'),
(153, 'Bozan  Ella , EBozan , e_mallian@yahoo.com', 'fs_members', 283, '2014-08-29 03:03:30'),
(154, 'Coleman  Taquanshea , ShaeMonroe , shaecoleman18@gmail.com', 'fs_members', 284, '2014-08-29 03:03:30'),
(155, 'Cabral  Christanala , nalaxoxo , nalacabral@hotmail.com', 'fs_members', 285, '2014-08-29 03:03:30'),
(156, 'Love  Kimberly , kimberlylove , mskim59@yahoo.com', 'fs_members', 286, '2014-08-29 03:03:30'),
(157, 'Williams  Patrice , MateriaLIPstic  , Patricesymone@gmail.com', 'fs_members', 287, '2014-08-29 03:03:30'),
(158, 'Scott  Jessica , kittyworld21 , hellokittydadime@aim.com', 'fs_members', 288, '2014-08-29 03:03:30'),
(159, 'Fleeks  Bobby ,  , ', 'fs_members', 289, '2014-08-29 03:03:30'),
(160, 'Fleeks  Bobby , writepro , bobbyfleeks@lycos.com', 'fs_members', 290, '2014-08-29 03:03:30'),
(161, 'Espiritu  Brandon , BGOROxEspiritu , brandon.espiritu@gmail.com', 'fs_members', 291, '2014-08-29 03:03:30'),
(162, 'Chris  Olivia , olivia chris , phatnelly@yahoo.com', 'fs_members', 292, '2014-08-29 03:03:30'),
(163, 'Summers  James , lookshrplivsmrt , jrcsummers@gmail.com', 'fs_members', 293, '2014-08-29 03:03:30'),
(164, 'Garcia  Cynthia , chilosatrends , chilosatrends@gmail.com', 'fs_members', 294, '2014-08-29 03:03:30'),
(165, 'Pantallano  Arex ,  , ', 'fs_members', 295, '2014-08-29 03:03:30'),
(166, '  Hipster , HipsterNiggaBlu , ', 'fs_members', 305, '2014-08-29 03:03:30'),
(167, 'Renee  Candy , Candy Renee , candyb385@msn.com', 'fs_members', 304, '2014-08-29 03:03:30'),
(168, 'Foy  Shakima , Shakimafoy_LaChell , Shakimafoy@gmail.com', 'fs_members', 303, '2014-08-29 03:03:30'),
(169, 'Burns  Sharee , Marley_Burns , sharee.burns@my.columbiasc.edu', 'fs_members', 302, '2014-08-29 03:03:30'),
(170, 'Neal  Tyeast , Tyeast_Monroe , Tyeast_neal@yahoo.com', 'fs_members', 306, '2014-08-29 03:03:30'),
(171, 'Lino  Reyna Denisse , reynadreyes1 , denisselino@yahoo.com', 'fs_members', 307, '2014-08-29 03:03:30'),
(172, 'Neal  Tyeast , Tyeast_Monroe , Tyeast_neal@yahoo.com', 'fs_members', 308, '2014-08-29 03:03:30'),
(173, 'Scott  Jessica , jessicascott2121 , hellokittydadime@aim.com', 'fs_members', 309, '2014-08-29 03:03:30'),
(174, 'Undefined  Iwan , rijalalfatah , ', 'fs_members', 310, '2014-08-29 03:03:30'),
(175, 'Thompson  Eric , ericmthompson9 , marquez1st@yahoo.com', 'fs_members', 311, '2014-08-29 03:03:30'),
(176, 'Undefined  Marley , MarleyBazaar , ', 'fs_members', 312, '2014-08-29 03:03:30'),
(177, 'Park  Jerry , jerrypark399 , jerrylpark@yahoo.com', 'fs_members', 313, '2014-08-29 03:03:30'),
(178, 'Kuda  Tasha , tashatendaa , iluvmanhatan@gmai.com', 'fs_members', 314, '2014-08-29 03:03:30'),
(179, 'Butcher  Jordan , Pantshalfdown , Jordan.butcher98@gmail.com', 'fs_members', 315, '2014-08-29 03:03:30'),
(180, 'Lee  Bryant , bryantlives , fashoncrave@live.com', 'fs_members', 316, '2014-08-29 03:03:30'),
(181, 'Norwood  David , davidnrwd , davidnrwd@yahoo.com', 'fs_members', 317, '2014-08-29 03:03:30'),
(182, 'Oged  Eunice , euniceoged , eunicesho@hotmail.co.uk', 'fs_members', 318, '2014-08-29 03:03:30'),
(183, 'Karanja  Njambi , njambi01 , ckaranja24@gmail.com', 'fs_members', 319, '2014-08-29 03:03:30'),
(184, 'Maj  Theresa , Drogamajor , Theresa.too.major@gmail.com', 'fs_members', 320, '2014-08-29 03:03:30'),
(185, 'Brooks  Adrienne , tharealsauceykidd3255 , aaprincess12@gmail.com', 'fs_members', 321, '2014-08-29 03:03:30'),
(186, 'White  Terri , Fiercediva , diva.house@ymail.com', 'fs_members', 322, '2014-08-29 03:03:30'),
(187, 'Aspinwall  Ashley , SideSmileStyle , SideSmile.Style@gmail.com', 'fs_members', 323, '2014-08-29 03:03:30'),
(188, 'Undefined  Grace , GraceLee95 , ', 'fs_members', 324, '2014-08-29 03:03:30'),
(189, 'Lee  Krystin , krystinlee , krystinlee@gmail.com', 'fs_members', 325, '2014-08-29 03:03:30'),
(190, 'Choi  Olga , olgachoi , eleynayuri@gmail.com', 'fs_members', 326, '2014-08-29 03:03:30'),
(191, 'Undefined  Jordan , jalexallfashion , ', 'fs_members', 327, '2014-08-29 03:03:30'),
(192, 'Butcher  Jordan , pantshalfdown , Jordan.butcher98@gmail.com', 'fs_members', 328, '2014-08-29 03:03:30'),
(193, 'Stallone  Jacci , Beingperfectishard , Jacci@beingperfectishard.com', 'fs_members', 329, '2014-08-29 03:03:30'),
(194, 'Giannosa  April , April @KnockedUpFab , aprilgia@sbcglobal.net', 'fs_members', 330, '2014-08-29 03:03:30'),
(195, 'Giannosa  April , aprilgiannosa , aprilgia@sbcglobal.net', 'fs_members', 331, '2014-08-29 03:03:30'),
(196, 'Lasserre  Clément , clementlasserre792 , nikimostock@hotmail.fr', 'fs_members', 332, '2014-08-29 03:03:30'),
(197, 'Frolova  Lidia , gvozd , gvozdishe@gmail.com', 'fs_members', 333, '2014-08-29 03:03:30'),
(198, 'Lively  Tess , Tess , coldfox.vintage@gmail.com', 'fs_members', 334, '2014-08-29 03:03:30'),
(199, 'Mendoza  Arabella , Bella , arabella_mendoz1551@yahoo.com', 'fs_members', 335, '2014-08-29 03:03:30'),
(200, 'Mendoza  Arabella , Bella , arabella_mendoz1551@yahoo.com', 'fs_members', 336, '2014-08-29 03:03:30'),
(201, 'Mendoza  Arabella , Bella , arabella_mendoz1551@yahoo.com', 'fs_members', 337, '2014-08-29 03:03:30'),
(202, 'Frolova  Lidia , LiFrolova , gvozdishe@gmail.com', 'fs_members', 338, '2014-08-29 03:03:30'),
(203, 'Dobrek  Wioletta , marykatefashion , rycha@interia.eu', 'fs_members', 339, '2014-08-29 03:03:30'),
(204, 'Argat  Jen , Jen_A , brn.ths.way@gmail.com', 'fs_members', 340, '2014-08-29 03:03:30'),
(205, 'Ajuonuma  Chioma , Obey_Me , Cupcakesareforgurlz@yahoo.com', 'fs_members', 341, '2014-08-29 03:03:30'),
(206, 'Mendoza  Arabella , Bella , arabella_mendoza1551@yahoo.com', 'fs_members', 342, '2014-08-29 03:03:30'),
(207, 'Ja  Marion , Marisfashionnotes , info@marisfashionnotes.com', 'fs_members', 343, '2014-08-29 03:03:30'),
(208, 'Evans Jr.  LeRoy , L7oser , l7oser@gmail.com', 'fs_members', 344, '2014-08-29 03:03:30'),
(209, 'Burton  Ashley , Dylans*Hero , burton.ashley01@gmail.com', 'fs_members', 345, '2014-08-29 03:03:30'),
(210, 'Doll  Abby , alldolledupblog , abby_doll@hotmail.com', 'fs_members', 346, '2014-08-29 03:03:30'),
(211, 'Welch  Brandi , GraffitiFace , brandiwelch120@yahoo.com', 'fs_members', 347, '2014-08-29 03:03:30'),
(212, 'Walton  Constance , fashionistalife93 , constance_walton@yahoo.com', 'fs_members', 348, '2014-08-29 03:03:30'),
(213, 'Lorgat  Roobee , Roobs , r.o.o.b.e.e@hotmail.com', 'fs_members', 349, '2014-08-29 03:03:30'),
(214, 'Boyd  Alina , alinasboyd , alinasboyd@yahoo.com', 'fs_members', 350, '2014-08-29 03:03:30'),
(215, 'Xiong  Nita , nitaxlife , gxrelated@gmail.com', 'fs_members', 351, '2014-08-29 03:03:30'),
(216, 'Lesley  Paris  , ParisLesley , cutestdoctor18@gmail.com', 'fs_members', 352, '2014-08-29 03:03:30'),
(217, 'Blankson  Therella , therellablankson , kuukua_blankson@yahoo.com', 'fs_members', 353, '2014-08-29 03:03:30'),
(218, 'Blankson  Theresa , Kuukua , Kuukua_blankson@yahoo.com', 'fs_members', 354, '2014-08-29 03:03:30'),
(219, 'Reid  Justin , justMbrace , justin.reid86@gmail.com', 'fs_members', 355, '2014-08-29 03:03:30'),
(220, 'Reid  Justin , justinreid7505 , justin.reid86@gmail.com', 'fs_members', 356, '2014-08-29 03:03:30'),
(221, 'Panton  Tatyana , Tati_imani , tatypanton@gmail.com', 'fs_members', 357, '2014-08-29 03:03:30'),
(222, 'Spencer  Imani , WaveySlim , imanispencer95@gmail.com', 'fs_members', 358, '2014-08-29 03:03:30'),
(223, 'Gasim  Azza , azz_richgirll12 , azz_richgirl@hotmail.co.uk', 'fs_members', 359, '2014-08-29 03:03:30'),
(224, 'Baimagambetova  Bibi , Bibi Diamante , brandnew_b@mail.ru', 'fs_members', 360, '2014-08-29 03:03:30'),
(225, 'Jones  Amanda , amandacj1 , zinck15@aol.com', 'fs_members', 361, '2014-08-29 03:03:30'),
(226, 'Lee  Grace , gracelee54540 , hansbroughgrlx50@aol.com', 'fs_members', 362, '2014-08-29 03:03:30'),
(227, 'A  George , georgea123 , georgeakande@yahoo.com', 'fs_members', 363, '2014-08-29 03:03:30'),
(228, 'Jakes  Jomario  , Mrjakes86 , mrjakes86@gmail.com', 'fs_members', 364, '2014-08-29 03:03:30'),
(229, 'Butcher  Jordan , pantshalfdown , jordan.butcher98@gmail.com', 'fs_members', 365, '2014-08-29 03:03:30'),
(230, 'Undefined  J. , art_is_LOVE , ', 'fs_members', 366, '2014-08-29 03:03:30'),
(231, 'Rae  Kayla , oOlakayrae , Kayk.rae@gmail.com', 'fs_members', 367, '2014-08-29 03:03:30'),
(232, 'Greene  Chanita , KimmeKhalid , chanita_greene@yahoo.com', 'fs_members', 368, '2014-08-29 03:03:30'),
(233, 'Alexandra  Carmen , carmenalexandra395 , scorpiomonkey16@yahoo.com', 'fs_members', 369, '2014-08-29 03:03:30'),
(234, 'Honorius  Beatrice , beah , mhonorius@yahoo.com', 'fs_members', 370, '2014-08-29 03:03:30'),
(235, 'Suarez  Jesus Erwin , jesuserwinsuarez9 , mrjesuserwinsuarez123@gmail.com', 'fs_members', 819, '2014-08-29 03:03:30'),
(236, 'Goergen  Sara , segoergen , segoergen@bsu.edu', 'fs_members', 371, '2014-08-29 03:03:30'),
(237, 'Rosas  Ruby , Rubosas , rubosas@gmail.com', 'fs_members', 372, '2014-08-29 03:03:30'),
(238, 'Ideh  Regina , Miss Reggy , regideh@yahoo.com', 'fs_members', 373, '2014-08-29 03:03:30'),
(239, 'Ideh  Regina , regideh , regideh@yahoo.com', 'fs_members', 374, '2014-08-29 03:03:30'),
(240, 'Tejada  Kathy , Kathystyle , Kathy.Tejada88@Gmail.com', 'fs_members', 375, '2014-08-29 03:03:30'),
(241, 'Gee  Agavni Angie , AGUMURYAN54 , agavnigumuryan@yahoo.com', 'fs_members', 376, '2014-08-29 03:03:30'),
(242, 'Lenet  Simone , Simonelenet , Simonelenet@gmail.com', 'fs_members', 377, '2014-08-29 03:03:30'),
(243, 'Ortiz  Esperanza Maria , Espyortiz@gmailcom , Espyortiz@gmail.com', 'fs_members', 378, '2014-08-29 03:03:30'),
(244, 'Ortiz  Esperanza , esperanzamortiz , espy.ortiz@gmail.com', 'fs_members', 379, '2014-08-29 03:03:30'),
(245, 'Charles  Kim , kimtcharles7 , swisskmiss19@yahoo.com', 'fs_members', 380, '2014-08-29 03:03:30'),
(246, 'Undefined  Lauren , lauren_berina , ', 'fs_members', 381, '2014-08-29 03:03:30'),
(247, 'Yadegar  Rachelle , rachelleyadegar , littleprincess247@yahoo.com', 'fs_members', 382, '2014-08-29 03:03:30'),
(248, 'Murphy  Emily , emilymurphy520357 , e.murphy89@me.com', 'fs_members', 383, '2014-08-29 03:03:30'),
(249, 'Walters  Eric , Art Divo , ericbradleyw@gmail.com', 'fs_members', 384, '2014-08-29 03:03:30'),
(250, 'Raposo  Jessica , jraps06 , jessrap61@hotmail.com', 'fs_members', 385, '2014-08-29 03:03:30'),
(251, 'Boyce   Marci  , MsMarci , Marciboyce@gmail.com', 'fs_members', 386, '2014-08-29 03:03:30'),
(252, 'Caceres  Jessica , jessm20 , jessmcaceres@yahoo.com', 'fs_members', 387, '2014-08-29 03:03:30'),
(253, 'Caceres  Jessica , jessm20 , jessmcaceres@yahoo.com', 'fs_members', 388, '2014-08-29 03:03:30'),
(254, 'Romero  Sara , saralromero7 , saraluromero@gmail.com', 'fs_members', 389, '2014-08-29 03:03:30'),
(255, 'Johns  Elle , ElleJohns , thehighfeather@gmail.com', 'fs_members', 390, '0000-00-00 00:00:00'),
(256, 'title , Beauty , undefined , ', 'fs_postedarticles', 81, '2014-09-05 00:42:43'),
(257, 'title , Beauty , undefined , ', 'fs_postedarticles', 82, '2014-09-05 00:45:07'),
(258, 'test , Entertainment , undefined , ', 'fs_postedarticles', 83, '2014-09-05 03:34:11'),
(259, 'asdasd , Beauty , undefined , ', 'fs_postedarticles', 84, '2014-09-05 03:38:53'),
(260, 'This is the image title , Entertainment , undefined , ', 'fs_postedarticles', 85, '2014-09-05 03:39:58'),
(261, 'ELIE SAAB Haute Couture Spring Summer 2014 Fashion Show , Entertainment , undefined , ', 'fs_postedarticles', 86, '2014-09-05 03:43:45'),
(262, 'ASDASD , Fashion , undefined , ', 'fs_postedarticles', 87, '2014-09-05 06:04:56'),
(263, 'this is amazing look , ForestGreen , amazing , Ring , Polyester , Pied ,  ', 'postedlooks', 536, '2014-09-09 01:28:27'),
(264, 'asdasd , Entertainment , undefined , ', 'fs_postedarticles', 88, '2014-09-09 04:13:22'),
(265, 'tead , Entertainment , undefined , ', 'fs_postedarticles', 89, '2014-09-11 02:33:02'),
(266, 'asda , Fashion , undefined , ', 'fs_postedarticles', 90, '2014-09-11 19:34:31'),
(267, 'asdasd , Entertainment , undefined , ', 'fs_postedarticles', 91, '2014-09-11 20:21:57'),
(268, 'asda , Entertainment , undefined , ', 'fs_postedarticles', 92, '2014-09-11 20:49:19'),
(269, 'asdasdasda , Entertainment , undefined , ', 'fs_postedarticles', 93, '2014-09-11 20:49:31'),
(270, 'asd , Entertainment , undefined , ', 'fs_postedarticles', 94, '2014-09-11 21:58:08'),
(273, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 97, '2014-09-11 22:00:45'),
(278, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 102, '2014-09-11 22:32:01'),
(281, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 105, '2014-09-11 22:34:59'),
(282, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 106, '2014-09-11 22:42:05'),
(283, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 107, '2014-09-11 22:44:05'),
(284, '  Amazaing , budoy , bodoy@gmail.com', 'fs_members', 971, '2014-09-12 02:31:38'),
(285, 'Suarez Y Jesus , Gwapa , badat@gmail.com', 'fs_members', 972, '2014-09-12 02:35:29'),
(286, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 108, '2014-09-12 02:44:23'),
(287, 'asd , Entertainment , undefined , ', 'fs_postedarticles', 109, '2014-09-14 23:17:12'),
(288, 'asd , Entertainment , undefined , ', 'fs_postedarticles', 110, '2014-09-15 01:16:52'),
(291, 'asd , Entertainment , conf3,  , ', 'fs_postedarticles', 113, '2014-09-15 05:39:27'),
(292, 'asd , Beauty , conf1,  , ', 'fs_postedarticles', 114, '2014-09-15 23:24:03'),
(295, 'sdas , Entertainment , conf3, music3,  , ', 'fs_postedarticles', 117, '2014-09-16 00:23:32'),
(297, 'sdas , Entertainment , conf3, music3,  , ', 'fs_postedarticles', 119, '2014-09-16 06:03:16'),
(299, 'sdas , Entertainment , music3 , ', 'fs_postedarticles', 120, '2014-09-16 23:20:07'),
(300, 'sdas , Entertainment , music3 , ', 'fs_postedarticles', 121, '2014-09-17 02:32:31'),
(301, 'sdas , Entertainment , music3 , ', 'fs_postedarticles', 122, '2014-09-17 02:59:34'),
(302, 'sdas , Entertainment , conference3 , ', 'fs_postedarticles', 123, '2014-09-17 03:22:53'),
(319, 'she is amazing ! i love her! , Babypink , amazing! , Scarf , Leather , Pied ,  she is amazing ! i love her! , Yellow , wow , Cufflink , Polyester , Pied ,  she is amazing ! i love her! , HotPink , nothing ,    ,   ,   ,  she is amazing ! i love her! , Lightpink , lovers , Cufflink , Polyester , Pied ,  ', 'postedlooks', 551, '2014-09-18 07:20:14'),
(320, 'yeah this is the problem , Darkblue , brand daw , Bracelet , Fur , Tiger Stripe ,  ', 'postedlooks', 552, '2014-09-19 06:04:00'),
(321, 'this is the title men!  , LightSea Green , adidas  , cardigan , chambray , checkered ,  Teal , a , asdasd , asads , as ,  ', 'postedlooks', 571, '2014-09-24 02:31:12'),
(322, 'this is the title men!  , LightSea Green , adidas  , cardigan , chambray , checkered ,  Teal , a , asdasd , asads , as ,  ', 'postedlooks', 572, '2014-09-24 02:39:27'),
(323, 'this is the title here  , Lightblue , dili gwapo ,  ,  ,  ,  GreyGreen , ds ,  ,  ,  ,  YellowGreen , asd ,  ,  ,  ,  ', 'postedlooks', 573, '2014-09-24 03:02:13'),
(324, ' , ', 'postedlooks', 574, '2014-09-24 04:42:28'),
(325, ' , ', 'postedlooks', 575, '2014-09-24 04:49:46'),
(326, 'amazing  girl ! ever ! , ', 'postedlooks', 576, '2014-09-24 04:52:26'),
(327, ' , Darkblue ,  ,  ,  ,  ,  YellowGreen ,  ,  ,  ,  ,  DarkRed ,  ,  ,  ,  ,  ', 'postedlooks', 577, '2014-09-24 04:53:28'),
(328, ' , Royalblue , brand napud1 , wew1 , material , pattern1 ,  BlueGrey , asd , garment2 , material2 , pattern2 ,  ', 'postedlooks', 578, '2014-09-24 04:55:50'),
(329, 'i love her. . .  , Darkblue , brand x , ads , asdasdasd , dasdasdasd ,  Darkblue , asd , asdas , asdasd , asdasd ,  Darkblue , sexy , asdasda , sdasd , asdasd ,   ,  ,  ,  ,  ,  ', 'postedlooks', 579, '2014-09-24 04:59:25'),
(330, ' ,  ,  ,  ,  ,  ,   ,  ,  ,  ,  ,  ', 'postedlooks', 580, '2014-09-24 06:12:01'),
(331, ' , ', 'postedlooks', 581, '2014-09-24 06:12:22'),
(332, ' , Black ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  ', 'postedlooks', 582, '2014-09-24 06:23:36'),
(333, ' ,  ,  ,  ,  ,  ,  ', 'postedlooks', 583, '2014-09-24 06:24:39'),
(334, 'after works ,  ,  ,  ,  ,  ,   ,  ,  ,  ,  ,  ', 'postedlooks', 584, '2014-09-24 19:58:26'),
(335, 'hey this is a popup , ', 'postedlooks', 585, '2014-09-24 23:38:55'),
(336, ' , ', 'postedlooks', 586, '2014-09-24 23:39:19'),
(337, 'yeah  , Darkblue ,  ,  ,  ,  ,  ', 'postedlooks', 587, '2014-09-25 00:19:59'),
(338, ' , Darkblue ,  ,    ,   ,   ,  ', 'postedlooks', 588, '2014-09-25 01:00:46'),
(339, 'yeah , Lightblue , brand x , sweater , yeah , oh ,  ', 'postedlooks', 589, '2014-09-25 01:01:52'),
(340, 'amazing   ! ,  ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,  Teal ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,  Indigo ,  ,  ,  ,  ,  ', 'postedlooks', 590, '2014-09-25 01:08:37'),
(341, 'sdas , Entertainment , conference3 , ', 'fs_postedarticles', 124, '2014-09-25 02:08:50'),
(342, ' , ', 'postedlooks', 591, '2014-09-25 02:12:49'),
(343, 'this is my love , Indigo , asda , asdasd , asdasdasdas , dasdasdasdasd ,  Aquablue , 1 , 1 , 1 , 1 ,  ', 'postedlooks', 592, '2014-09-25 08:26:09'),
(344, ' , Darkblue ,  ,  ,  ,  ,  LightSea Green ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  BurgundyBrown ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  Lightblue ,  ,  ,  ,  ,   ,  ,  ,  ,  ,  Darkbrown ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,   ,  ,  ,  ,  ,  ', 'postedlooks', 593, '2014-09-25 21:28:24'),
(345, 'this is the title , Darkblue , brand , what is my name , amazing , wow ,  Purple , brand y , yeah , oh yeah , amazing pattern ,  ', 'postedlooks', 594, '2014-09-26 00:03:51'),
(346, ' , BurgundyBrown ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  ', 'postedlooks', 595, '2014-09-26 00:08:32'),
(347, ' , Darkblue , lovess1 ,  ,  ,  ,  ', 'postedlooks', 596, '2014-09-26 00:42:30'),
(348, ' ,  ,  ,  ,  ,  ,  Darkblue , love 1  ,  ,  ,  ,   , love 2 ,  ,  ,  ,   , love 3 ,  ,  ,  ,   , love 4 ,  ,  ,  ,  ', 'postedlooks', 597, '2014-09-26 00:44:42'),
(349, ' , ', 'postedlooks', 598, '2014-09-26 00:45:24'),
(350, ' ,  , yeah ,  ,  ,  ,  LightSea Green , amazing ,  ,  ,  ,  ', 'postedlooks', 599, '2014-09-26 00:45:57'),
(351, ' , Darkblue , pugi ,  ,  ,  ,   , pretty ,  ,  ,  ,  ', 'postedlooks', 600, '2014-09-26 00:46:49'),
(352, ' ,  , astang ,  ,  ,  ,  ', 'postedlooks', 601, '2014-09-26 00:47:53'),
(353, ' , Darkblue ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  Lightblue ,  ,  ,  ,  ,  YellowGreen ,  ,  ,  ,  ,  Lightblue ,  ,  ,  ,  ,  Purple ,  ,  ,  ,  ,  Royalblue ,  ,  ,  ,  ,  ForestGreen ,  ,  ,  ,  ,  ', 'postedlooks', 602, '2014-09-26 02:40:13'),
(354, ' , Darkblue ,  ,  ,  ,  ,   ,  ,  ,  ,  ,  ', 'postedlooks', 603, '2014-09-26 02:43:19'),
(355, ' , Turquoise ,  ,  ,  ,  ,   ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  ', 'postedlooks', 604, '2014-09-26 02:44:03'),
(356, ' , Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 605, '2014-09-26 02:45:48'),
(357, ' , BurgundyBrown ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 606, '2014-09-26 02:48:38'),
(358, ' , Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 607, '2014-09-26 03:02:38'),
(359, 'asda , Entertainment , love3 , ', 'fs_postedarticles', 125, '2014-09-26 03:03:41'),
(362, ' , DarkPurple ,  ,  ,  ,  ,  ', 'postedlooks', 608, '2014-09-26 03:06:19'),
(363, ' , Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 609, '2014-09-26 03:08:39'),
(364, 'this is the title of the test edit look , Violet , brand x , garment x , material x , pattern x  ,  Black , sd , a , sd , sd ,  Tan , amazing , gars , marter , pat ,  Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 610, '2014-09-29 05:35:43'),
(365, 'title , DarkPurple , 4 , 4 , 4 , 4 ,  Tan , 3 , 3 , 3 , 3 ,  Black , 2 , 2 , 2 , 2 ,  Espresso , 1 , 1 , 1 , 1 ,  LightSea Green , 5 , 5 , 5 , 5 ,  ', 'postedlooks', 611, '2014-09-29 06:25:04'),
(366, 'title , Espresso , 2 , 2 , 2 , 2 ,  YellowGreen , 1 , 1 , 1 , 1 ,  ', 'postedlooks', 612, '2014-09-29 06:29:32'),
(367, '1 , LightSea Green , 1 , 1 , 1 , 1 ,  ', 'postedlooks', 613, '2014-09-29 07:07:27'),
(368, '1 , Indigo , 1 , 1 , 1 , 1 ,  ', 'postedlooks', 614, '2014-09-29 07:12:13'),
(369, 'title , Black , brand1 , garment1 , marterial1 , pattern1 ,  ', 'postedlooks', 615, '2014-09-29 07:14:29'),
(372, '5 ,  Espresso , 1 , 2 , 3 , 4 ,  ', 'postedlooks', 618, '2014-09-29 08:04:26'),
(374, ' ,  Espresso , 1 , 2 , 3 , 4 ,  ', 'postedlooks', 0, '2014-09-29 08:22:53'),
(375, ' ,  Espresso , 12 , 22 , 32 , 42 ,   Espresso , 1 , 2 , 3 , 4 ,  ', 'postedlooks', 0, '2014-09-29 08:27:14'),
(376, ' , Darkblue ,  ,  ,  ,  ,   Espresso , 12 , 22 , 32 , 42 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,  ', 'postedlooks', 0, '2014-09-29 08:27:37'),
(377, ' ,  Espresso , 1 , 2 , 3 , 4 ,  Charcoal ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,   Espresso , 12 , 22 , 32 , 42 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,  ', 'postedlooks', 0, '2014-09-29 08:28:54'),
(378, ' ,  Espresso , 1 , 2 , 3 , 4 ,  Charcoal ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,   Espresso , 12 , 22 , 32 , 42 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,  ', 'postedlooks', 0, '2014-09-29 08:35:26'),
(382, '51 , Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 12 , 22 , 32 , 42 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 12 , 22 , 32 , 42 ,  Darkblue , 12 , 12 , 12 , 12 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 12 , 22 , 32 , 42 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 1 , 2 , 3 , 4 ,   Espresso , 12 , ', 'postedlooks', 617, '2014-09-29 08:40:53'),
(388, ' , ', 'postedlooks', 619, '2014-09-29 09:12:31'),
(398, 'this is really amazing man! ,  Darkblue ,  ,  ,  ,  ,   Violet , 1 , 1 , 1 , 1 ,   Teal ,  ,  ,  ,  ,  ', 'postedlooks', 616, '2014-09-29 09:41:48'),
(400, 'title , Brown ,  ,  ,  ,  ,   Black ,  ,  ,  ,  ,   Darkblue ,  ,  ,  ,  ,   LightSeaGreen ,  ,  ,  ,  ,  ', 'postedlooks', 620, '2014-09-29 19:44:46'),
(408, 'asda , Entertainment , love3 , ', 'fs_postedarticles', 127, '2014-09-30 01:20:02'),
(409, 'asda , Entertainment , love3 , ', 'fs_postedarticles', 126, '2014-09-30 01:28:42'),
(412, ' , Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 621, '2014-10-01 04:28:49'),
(413, 'testging , Purple ,  ,  ,  ,  ,  Grey ,  ,  ,  ,  ,  ', 'postedlooks', 622, '2014-10-02 22:09:42'),
(414, 'Sanchad Y. Ranzo , ranzo , ranzo@gmail.com', 'fs_members', 973, '2014-10-03 01:21:27'),
(415, 'Suarez S. Rico , rico , rico@gmail.com', 'fs_members', 974, '2014-10-03 03:35:30'),
(416, 'Suarez Yurag Edsan , edsan , edsan@gmail.com', 'fs_members', 975, '2014-10-03 04:02:32'),
(417, ' , Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 623, '2014-10-03 04:07:58'),
(418, ' , Tan ,  ,  ,  ,  ,  Aquablue ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  ', 'postedlooks', 624, '2014-10-03 04:09:03'),
(420, ' , Yellow ,  ,  ,  ,  ,  DarkGreen ,  ,  ,  ,  ,  BurgundyBrown ,  ,  ,  ,  ,  ', 'postedlooks', 625, '2014-10-04 00:20:15'),
(421, 'Duhay Y Francis , Francis1 , francis@gmail.com', 'fs_members', 968, '2014-10-04 19:27:54'),
(422, 'Sanches R. Reymond , reymond , reymond@gmail.com', 'fs_members', 976, '2014-10-05 06:30:57'),
(423, 'this is the title , ', 'postedlooks', 626, '2014-10-05 06:36:56'),
(424, 'youw , LightSea Green ,  ,  ,  ,  ,  Darkpink ,  ,  ,  ,  ,  ', 'postedlooks', 627, '2014-10-05 22:02:16'),
(425, 'asdas 1 , Beauty , Beauty , ', 'fs_postedarticles', 129, '2014-10-05 22:25:29'),
(426, 'asdasd , Entertainment , conf3 , ', 'fs_postedarticles', 130, '2014-10-05 22:32:18'),
(427, 'thank you for loving me ! , ', 'postedlooks', 628, '2014-10-05 23:17:51'),
(428, ' , ', 'postedlooks', 629, '2014-10-05 23:34:14'),
(429, 'yeah  , ', 'postedlooks', 630, '2014-10-06 00:42:40'),
(430, 'Suarez Y. Elezabeth , elezabeth , elezabeth@gmail.com', 'fs_members', 977, '2014-10-06 02:22:53'),
(431, 'Ranzo R. Lapuz , lapuz , lapuz@gmail.com', 'fs_members', 994, '2014-10-06 05:49:11'),
(432, 'Balansag A. Dines , dines , dines@gmail.com', 'fs_members', 995, '2014-10-06 05:53:37'),
(433, 'Sdsd  Rain , rain1 , 112mrjesus@gmail.com', 'fs_members', 998, '2014-10-06 06:30:32'),
(434, 'Suarez Y. Jesus , asdasdasdasd , asdasdasadasdsd@gmail.com', 'fs_members', 1001, '2014-10-06 06:37:23'),
(435, ' , ', 'postedlooks', 631, '2014-10-06 22:59:37'),
(436, 'this is my girlfriend , Darkblue ,  ,  ,  ,  ,  DarkGreen ,  ,  ,  ,  ,  Offwhite ,  ,  ,  ,  ,  ', 'postedlooks', 632, '2014-10-07 04:45:03'),
(437, 'Meco Y. Test , test1 , test@gmail.com', 'fs_members', 1002, '2014-10-07 07:10:48'),
(438, 'asda , Entertainment , conf3 , ', 'fs_postedarticles', 131, '2014-10-07 07:40:47'),
(439, 'asd , Entertainment , conf3 , ', 'fs_postedarticles', 132, '2014-10-07 07:44:41'),
(440, ' , ', 'postedlooks', 633, '2014-10-07 07:45:51'),
(441, 'asdasd , Entertainment , conf3 , ', 'fs_postedarticles', 133, '2014-10-07 07:46:11'),
(442, 'Croo T. Secret1 , secret1 , secret1@gmail.com', 'fs_members', 1003, '2014-10-07 07:47:43'),
(443, 'this is the look title , Charcoal ,  ,  ,  ,  ,  Offwhite ,  ,  ,  ,  ,  Black ,  ,  ,  ,  ,  ', 'postedlooks', 634, '2014-10-07 23:00:47'),
(447, 'this is the title 1 , ', 'postedlooks', 637, '2014-10-08 01:41:23'),
(448, 'this is the title2 , ', 'postedlooks', 636, '2014-10-08 01:42:01'),
(449, 'this is the title 3 ,  Charcoal ,  ,  ,  ,  ,   Tan ,  ,  ,  ,  ,   Black ,  ,  ,  ,  ,   White ,  ,  ,  ,  ,  ', 'postedlooks', 635, '2014-10-08 01:42:38'),
(452, 'asd , Fashion , conf4 , ', 'fs_postedarticles', 136, '2014-10-08 05:26:14'),
(453, 'test beauty , Beauty , Beauty , ', 'fs_postedarticles', 137, '2014-10-08 05:26:50'),
(454, 'Entertainment , Entertainment , Entertainment , ', 'fs_postedarticles', 138, '2014-10-08 05:35:18'),
(455, 'Dual  Sarol , sarol , sarol@gmail.com', 'fs_members', 1004, '2014-10-08 19:17:33'),
(456, 'Riks  Ranso , ranso , ranso@gmail.com', 'fs_members', 1005, '2014-10-08 19:19:17'),
(457, 'Sukarta  Mj , mj , mj@gmail.com', 'fs_members', 1006, '2014-10-08 19:20:41'),
(458, 'Suarez  Weee , weee , weee@gmail.com', 'fs_members', 1007, '2014-10-08 19:40:28'),
(459, 'test look , Tan ,  ,  ,  ,  ,  ', 'postedlooks', 638, '2014-10-09 01:27:19'),
(460, 'test , Entertainment , conference3 , ', 'fs_postedarticles', 139, '2014-10-10 07:54:56'),
(461, 'this is the girls . . . , Darkpink ,  ,  ,  ,  ,  Lightblue ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  Purple ,  ,  ,  ,  ,  ', 'postedlooks', 639, '2014-10-12 23:18:17'),
(462, 'asd , Beauty , conference1 , ', 'fs_postedarticles', 140, '2014-10-13 01:06:13'),
(463, 'asd , Fashion , conference4 , ', 'fs_postedarticles', 141, '2014-10-13 01:12:56'),
(464, 'Amazing article , Entertainment , love3 , ', 'fs_postedarticles', 142, '2014-10-13 01:14:34'),
(465, 'this is 295 , Lifestyle , Autos , ', 'fs_postedarticles', 143, '2014-10-13 01:15:49'),
(468, 'this is 350 , Fashion , Fashion , ', 'fs_postedarticles', 145, '2014-10-13 01:19:29'),
(470, 'this is 295 , Beauty , Beauty , ', 'fs_postedarticles', 144, '2014-10-13 01:19:59'),
(471, ' , Entertainment , Art  , ', 'fs_postedarticles', 146, '2014-10-13 01:20:37'),
(473, 'this is 400 , Fashion , Fashion , ', 'fs_postedarticles', 147, '2014-10-13 01:23:11'),
(475, 'test , Beauty , conf1 , ', 'fs_postedarticles', 148, '2014-10-13 01:24:24'),
(476, 'loo test 1 , ', 'postedlooks', 640, '2014-10-13 23:57:17'),
(477, 'article 1 for testing , Fashion , Celebs  , ', 'fs_postedarticles', 149, '2014-10-13 23:57:53'),
(478, 'asdas , Entertainment , conf3 , ', 'fs_postedarticles', 150, '2014-10-14 00:29:30'),
(479, 'look test 2nd , ', 'postedlooks', 641, '2014-10-14 00:29:54'),
(480, 'this is the 3rd testing look , ', 'postedlooks', 642, '2014-10-14 04:16:52'),
(481, 'test , Beauty , Celebrity Hair , ', 'fs_postedarticles', 151, '2014-10-14 04:22:44'),
(482, 'this is mine , Offwhite ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  ', 'postedlooks', 643, '2014-10-14 21:44:41'),
(484, 'this is for testing. . . , ', 'postedlooks', 645, '2014-10-17 02:19:53'),
(485, 'this is the latest post look , ', 'postedlooks', 646, '2014-10-17 03:03:27'),
(486, '2nd streetwear , ', 'postedlooks', 647, '2014-10-17 03:21:12'),
(487, 'this is the article 1 beauty , Beauty , Celebs  , ', 'fs_postedarticles', 152, '2014-10-17 03:24:38'),
(488, 'this is new , ', 'postedlooks', 648, '2014-10-17 04:33:33'),
(489, 'test , Beauty , Beauty Book Review , ', 'fs_postedarticles', 153, '2014-10-17 04:35:27'),
(490, ' , Beauty , Fragrance , ', 'fs_postedarticles', 154, '2014-10-17 05:04:54'),
(491, 'yeah ,  LightSeaGreen ,  ,  ,  ,  ,   Darkblue ,  ,  ,  ,  ,  ', 'postedlooks', 644, '2014-10-20 04:26:02'),
(492, 'test , Beauty , Beauty Book Review , ', 'fs_postedarticles', 155, '2014-10-20 04:51:46'),
(493, ' , Technology , Playstation , ', 'fs_postedarticles', 156, '2014-10-20 04:52:30'),
(494, 'Suarez R. Ray , ray , ray@gmail.com', 'fs_members', 1008, '2014-10-29 01:10:13'),
(495, 'title not set , ', 'postedlooks', 649, '2014-11-03 22:26:57'),
(496, 'title not set , ', 'postedlooks', 650, '2014-11-03 22:53:08'),
(497, 'title not set , ', 'postedlooks', 651, '2014-11-03 22:53:32'),
(498, 'asdasd , ', 'postedlooks', 652, '2014-11-03 22:57:05'),
(499, 'asdasd , ', 'postedlooks', 653, '2014-11-03 23:01:02'),
(500, 'asdasd , ', 'postedlooks', 654, '2014-11-03 23:01:18'),
(504, 'this is the title yeah ! , ', 'postedlooks', 655, '2014-11-04 01:27:41'),
(506, 'this is the title1 ,  Darkpink ,  ,  ,  ,  ,   Turquoise ,  ,  ,  ,  ,   Purple ,  ,  ,  ,  ,  ', 'postedlooks', 656, '2014-11-04 01:29:57'),
(507, 'Fashion F. Tester  , tester1 , fstester1@gmail.com', 'fs_members', 1013, '2014-11-05 01:36:06'),
(508, 'asda , Lifestyle , Fashion , ', 'fs_postedarticles', 128, '2014-11-07 02:55:57'),
(513, 'title , ', 'postedlooks', 657, '2014-11-07 04:10:45'),
(515, 'test , Beauty , Beauty Event , ', 'fs_postedarticles', 157, '2014-11-11 03:02:28'),
(516, 'Suarez Yurag Jesus Erwin , erwin2 , erwin@gmail.com', 'fs_members', 954, '2014-11-12 00:14:31'),
(517, 'THIS IS THE TITLE , ', 'postedlooks', 526, '2014-11-12 01:10:47'),
(518, 'Suarez  Ransak , tester2 , fstester2@gmail.com', 'fs_members', 1015, '2014-11-12 01:50:50'),
(519, 'This is the title , ', 'postedlooks', 661, '2014-11-12 01:52:11'),
(520, 'this is the title , ', 'postedlooks', 662, '2014-11-12 01:52:47'),
(521, ' , Lifestyle , Autos , ', 'fs_postedarticles', 158, '2014-11-12 01:53:10'),
(523, 'yeah , Lifestyle , Health , ', 'fs_postedarticles', 160, '2014-11-12 01:53:36'),
(524, 'asdasd , ', 'postedlooks', 663, '2014-11-13 00:17:40'),
(525, 'TEST , Beauty , Beauty Event , ', 'fs_postedarticles', 161, '2014-11-16 22:31:20'),
(529, 'this is the title yeah !  , ', 'postedlooks', 664, '2014-11-28 05:16:56'),
(530, 'sefsdf , ', 'postedlooks', 665, '2014-11-28 05:19:53'),
(532, 'God Is Good All The Time , Fashion , Celebs  , ', 'fs_postedarticles', 162, '2014-12-03 03:27:37'),
(533, 'I Give You My Heart | Hillsong (Featuring Holly Dawson) , Lifestyle , Autos , ', 'fs_postedarticles', 163, '2014-12-03 03:30:13'),
(534, 'test , Beauty , Beauty Recipe , ', 'fs_postedarticles', 164, '2014-12-03 03:32:42'),
(535, 'asdasd , Beauty ,  , ', 'fs_postedarticles', 165, '2014-12-03 03:35:47'),
(536, 'asdasdasd , Lifestyle , Autos , ', 'fs_postedarticles', 166, '2014-12-03 03:35:50'),
(537, 'as , Technology , Playstation , ', 'fs_postedarticles', 167, '2014-12-03 03:37:14'),
(538, ' , Beauty ,  , ', 'fs_postedarticles', 168, '2014-12-03 03:38:17'),
(539, 'eeeqweqwe , Beauty , Beauty Recipe , ', 'fs_postedarticles', 169, '2014-12-03 03:41:28'),
(540, 'I Give You My Heart | Hillsong (Featuring Holly Dawson) , Fashion , News , ', 'fs_postedarticles', 170, '2014-12-03 03:42:59'),
(541, 'she is camille , Technology , Audio , ', 'fs_postedarticles', 171, '2014-12-03 03:44:11'),
(542, 'ascsdas , ', 'postedlooks', 666, '2014-12-03 03:47:11'),
(544, 'asda , Fashion , Celebrity  , ', 'fs_postedarticles', 172, '2014-12-03 21:53:32'),
(545, 'The Bible~At the Cross , Entertainment , Art  , ', 'fs_postedarticles', 173, '2014-12-03 22:01:30'),
(546, 'asda , Beauty , Beauty Workshop , ', 'fs_postedarticles', 174, '2014-12-03 22:03:46'),
(547, 'batig nawong , Entertainment , Concert , ', 'fs_postedarticles', 175, '2014-12-03 22:04:19'),
(548, 'Song , Entertainment , Concert , ', 'fs_postedarticles', 176, '2014-12-03 22:09:09'),
(549, 'test , Lifestyle , Cooking  , ', 'fs_postedarticles', 177, '2014-12-03 22:19:46'),
(550, ' , Beauty , Celebrity Hair , ', 'fs_postedarticles', 178, '2014-12-03 22:21:53'),
(551, ' , Beauty , Celebrity Hair , ', 'fs_postedarticles', 179, '2014-12-03 22:23:21'),
(552, 'dsdsda , Beauty , Beauty Event , ', 'fs_postedarticles', 180, '2014-12-03 22:23:58'),
(553, 'asdasdas , ', 'postedlooks', 668, '2014-12-04 02:20:41'),
(554, 'casdasd , ', 'postedlooks', 669, '2014-12-04 02:29:07'),
(555, 'dfbddfg , ', 'postedlooks', 670, '2014-12-04 02:33:06'),
(556, 'sdfsfsdf , Darkblue ,  ,  ,  ,  ,  ', 'postedlooks', 671, '2014-12-04 02:42:41'),
(560, 'ddfsdfgsdf , ', 'postedlooks', 672, '2014-12-04 03:21:39'),
(561, 'i love her , ', 'postedlooks', 673, '2014-12-09 04:51:58'),
(562, 'my dream girl in my life. , ', 'postedlooks', 674, '2014-12-09 04:52:42'),
(563, 'this is the title , LightSea Green , amazing! , a , acrylic , argyle ,   LightSeaGreen , sexy , sweatshirt , silk , stripe ,  ', 'postedlooks', 667, '2014-12-10 04:04:49'),
(565, 'this is the title of this look , ', 'postedlooks', 675, '2014-12-12 01:06:53'),
(566, 'dfsfsdf , Beauty , Celebrity Hair , ', 'fs_postedarticles', 181, '2014-12-12 01:16:26'),
(567, 'this is the title , NeonGreen ,  ,  ,  , argyle ,  LightSea Green , amazing! , a , acrylic , argyle ,  ', 'postedlooks', 676, '2015-01-13 00:56:58'),
(568, 'Canoy Suarez Robert , robert , robert@gmail.com', 'fs_members', 1016, '2015-01-13 01:34:19'),
(569, 'asd , Entertainment , Movie  , ', 'fs_postedarticles', 182, '2015-01-13 01:57:18'),
(570, 'dssdfsdfasfasd , ', 'postedlooks', 677, '2015-01-19 01:51:53'),
(571, 'dssdfsdfasfasd , ', 'postedlooks', 678, '2015-01-19 01:51:54'),
(572, 'Adding Validation , ', 'postedlooks', 679, '2015-01-19 01:52:32'),
(573, 'sdfsdfsd , ', 'postedlooks', 680, '2015-03-06 14:34:02'),
(574, 'This is a test , ', 'postedlooks', 681, '2015-03-06 14:34:51'),
(575, 'asdasdasd , ', 'postedlooks', 682, '2015-03-06 14:53:08'),
(576, 'asasdfds , ', 'postedlooks', 683, '2015-03-09 04:24:09'),
(577, 'asdas , Fashion , Fashion News , ', 'fs_postedarticles', 183, '2015-03-09 04:24:34'),
(578, 'test , Royalblue ,  ,  ,  ,  ,  ', 'postedlooks', 2, '2015-03-13 03:10:07'),
(579, 'sesf , ', 'postedlooks', 3, '2015-03-17 16:31:18'),
(580, 'this is look , ', 'postedlooks', 4, '2015-03-17 16:36:17'),
(581, 'sadasda , ', 'postedlooks', 5, '2015-04-23 11:47:56'),
(582, 'sadasda , ', 'postedlooks', 6, '2015-04-23 11:48:00'),
(583, 'wfefwefwe , ', 'postedlooks', 7, '2015-04-23 11:48:25');
INSERT INTO `fs_search` (`sno`, `keyword`, `table_name`, `table_id`, `date`) VALUES
(584, 'This is the title  , ', 'postedlooks', 8, '2015-05-02 05:26:52'),
(585, 'asasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 34, '2015-05-11 09:04:00'),
(586, 'asd , Beauty , Celebrity Gossip , ', 'fs_postedarticles', 37, '2015-05-11 09:12:22'),
(587, 'asds , Charcoal ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ForestGreen ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  Tan ,  ,  ,  ,  ,  ', 'postedlooks', 9, '2015-05-11 09:32:14'),
(588, 'asd , Charcoal ,  ,  ,  ,  ,  Darkblue ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  Brightpurple ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  JuneBud ,  ,  ,  ,  ,  ', 'postedlooks', 10, '2015-05-11 09:33:37'),
(589, 'sdasdas , Beauty , Beauty Workshop , ', 'fs_postedarticles', 38, '2015-06-19 03:29:20'),
(590, 'qwe , ', 'postedlooks', 222223, '2015-06-23 01:49:45'),
(591, 'asdas , ', 'postedlooks', 222224, '2015-06-23 01:51:35'),
(592, 'nice , ', 'postedlooks', 222225, '2015-06-25 04:34:08'),
(593, 'title not set , ', 'postedlooks', 222228, '2015-07-15 23:20:00'),
(594, 'asdasdasd , Darkblue ,  ,  ,  ,  ,  ForestGreen ,  ,  ,  ,  ,  DarkPurple ,  ,  ,  ,  ,  ', 'postedlooks', 222229, '2015-07-16 00:51:18'),
(595, 'this is the title , ', 'postedlooks', 222230, '2015-08-03 02:32:45'),
(596, 'This is the title of this post , Charcoal ,  ,  ,  ,  ,  Indigo ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ForestGreen ,  ,  ,  ,  ,  ', 'postedlooks', 222231, '2015-08-03 02:34:15'),
(597, 'title , ', 'postedlooks', 222232, '2015-08-03 02:35:56'),
(598, 'Title , Charcoal ,  ,  ,  ,  ,  Royalblue , asd , a , asd , asd ,  ', 'postedlooks', 222233, '2015-08-03 02:38:32'),
(599, 'asdasda , ', 'postedlooks', 222234, '2015-08-03 02:48:20'),
(600, ' Title , ', 'postedlooks', 222235, '2015-08-03 03:21:56'),
(601, 'test , ', 'postedlooks', 222236, '2015-08-03 03:23:18'),
(602, 'asdas , ', 'postedlooks', 222237, '2015-08-03 04:02:02'),
(603, 'asdasd , ', 'postedlooks', 222238, '2015-08-03 04:05:21'),
(604, 'asdasd , ', 'postedlooks', 222239, '2015-08-03 04:08:00'),
(605, 'asdasd , ', 'postedlooks', 222240, '2015-08-03 04:08:57'),
(606, 'asdasd , ', 'postedlooks', 222241, '2015-08-03 04:09:10'),
(607, 'test , ', 'postedlooks', 222242, '2015-08-03 04:16:17'),
(608, 'asdasd , ', 'postedlooks', 222243, '2015-08-03 04:16:56'),
(609, 'asdasd , ', 'postedlooks', 222244, '2015-08-03 04:17:00'),
(610, 'asdas , ', 'postedlooks', 222245, '2015-08-03 04:17:50'),
(611, 'asdasdasd , ', 'postedlooks', 222246, '2015-08-06 00:20:21'),
(612, 'title , ', 'postedlooks', 222247, '2015-08-06 01:13:49'),
(613, 'title , ', 'postedlooks', 222248, '2015-08-06 01:14:02'),
(614, 'title , ', 'postedlooks', 222249, '2015-08-06 01:14:12'),
(615, 'asdasdasdasd , ', 'postedlooks', 222250, '2015-08-06 01:14:27'),
(616, 'asdasdasd , ', 'postedlooks', 222251, '2015-08-06 01:14:51'),
(617, 'asdasdasd , ', 'postedlooks', 222252, '2015-08-06 01:14:58'),
(618, 'asdasd , ', 'postedlooks', 222253, '2015-08-06 01:20:08'),
(619, 'asdasdasd , ', 'postedlooks', 222254, '2015-08-06 01:21:18'),
(620, 'asdasd , ', 'postedlooks', 222255, '2015-08-06 01:22:02'),
(621, 'asdasd , ', 'postedlooks', 222256, '2015-08-06 01:22:10'),
(622, 'asdasd , ', 'postedlooks', 222257, '2015-08-06 01:23:59'),
(623, 'asdasd , ', 'postedlooks', 222258, '2015-08-06 01:24:34'),
(624, 'asdasd , ', 'postedlooks', 222259, '2015-08-06 01:24:45'),
(625, 'asdasd , ', 'postedlooks', 222260, '2015-08-06 01:25:01'),
(626, 'asdasd , ', 'postedlooks', 222261, '2015-08-06 01:25:06'),
(627, 'asdasd , ', 'postedlooks', 222262, '2015-08-06 01:25:30'),
(628, 'asdasd , ', 'postedlooks', 222263, '2015-08-06 01:26:22'),
(629, 'asdasd , ', 'postedlooks', 222264, '2015-08-06 01:26:37'),
(630, 'asdasd , ', 'postedlooks', 222265, '2015-08-06 01:27:14'),
(631, 'asdasd , ', 'postedlooks', 222266, '2015-08-06 01:29:07'),
(632, 'werwerwe , ', 'postedlooks', 222267, '2015-08-06 01:31:18'),
(633, 'werwerwe , ', 'postedlooks', 222268, '2015-08-06 01:31:27'),
(634, 'werwerwe , ', 'postedlooks', 222269, '2015-08-06 01:31:46'),
(635, 'werwerwe , ', 'postedlooks', 222270, '2015-08-06 01:32:04'),
(636, 'werwerwe , ', 'postedlooks', 222271, '2015-08-06 01:32:20'),
(637, 'werwerwe , ', 'postedlooks', 222272, '2015-08-06 01:32:25'),
(638, 'werwerwe , ', 'postedlooks', 222273, '2015-08-06 01:32:38'),
(639, 'werwerwe , ', 'postedlooks', 222274, '2015-08-06 01:32:48'),
(640, 'asd , Lightbrown ,  ,  ,  ,  ,  Lightblue ,  ,  ,  ,  ,  ', 'postedlooks', 222275, '2015-08-06 03:24:38'),
(641, 'asd , Lightbrown ,  ,  ,  ,  ,  Lightblue ,  ,  ,  ,  ,  ', 'postedlooks', 222276, '2015-08-06 03:24:42'),
(642, 'asda , Purple ,  ,  ,  ,  ,  Turquoise ,  ,  ,  ,  ,  ', 'postedlooks', 222277, '2015-08-06 03:25:57'),
(643, 'asda , Darkblue ,  ,  ,  ,  ,  Aquablue ,  ,  ,  ,  ,  ', 'postedlooks', 222278, '2015-08-06 03:30:03'),
(644, 'asd , ', 'postedlooks', 222279, '2015-08-06 03:31:33'),
(645, 'asdasdasd , ', 'postedlooks', 222280, '2015-08-06 03:47:13'),
(646, 'asdasda , CelestialBlue ,  ,  ,  ,  ,  Teal ,  ,  ,  ,  ,  PurpleGrey ,  ,  ,  ,  ,  ', 'postedlooks', 222281, '2015-08-06 03:54:29'),
(647, 'asdasda , CelestialBlue ,  ,  ,  ,  ,  Teal ,  ,  ,  ,  ,  PurpleGrey ,  ,  ,  ,  ,  ', 'postedlooks', 222282, '2015-08-06 03:54:30'),
(648, 'asd , ', 'postedlooks', 222283, '2015-08-06 03:55:24'),
(649, 'This is the title , ', 'postedlooks', 222284, '2015-08-06 03:56:03'),
(650, 'asdasda , Lightblue , a , vest , chino , camo ,  ', 'postedlooks', 222285, '2015-08-06 03:59:13'),
(651, 'asdasd , LightSea Green , dasdasd , asdas , asd , asd ,  ', 'postedlooks', 222286, '2015-08-06 04:01:18'),
(652, 'asdas , Royalblue , asd , asda , sdasd , asdasdasd ,  ', 'postedlooks', 222287, '2015-08-06 04:03:10'),
(653, 'asdasd , ', 'postedlooks', 222288, '2015-08-06 04:03:30'),
(654, 'asdasd , ', 'postedlooks', 222289, '2015-08-06 04:03:51'),
(655, 'asdasd , Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222290, '2015-08-06 04:04:14'),
(656, 'asdasd , Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222291, '2015-08-06 04:15:41'),
(657, 'asdasd , Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222292, '2015-08-06 04:16:09'),
(658, 'title not set , ', 'postedlooks', 222293, '2015-08-06 04:24:52'),
(659, 'title not set , ', 'postedlooks', 222294, '2015-08-06 04:26:25'),
(660, 'title not set , ', 'postedlooks', 222295, '2015-08-06 04:26:25'),
(661, 'title not set , ', 'postedlooks', 222296, '2015-08-06 04:26:26'),
(662, 'title not set , ', 'postedlooks', 222297, '2015-08-06 04:26:27'),
(663, 'asdasd , ', 'postedlooks', 222298, '2015-08-06 04:28:29'),
(664, 'This is the title , Royalblue , asd , asd , asdas , asd ,  LightSea Green , ads , asd , asdasdsda , asda ,  ', 'postedlooks', 222299, '2015-08-06 04:29:55'),
(665, 'asdas , Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222300, '2015-08-06 04:38:17'),
(666, 'adfasdfsdf sfda , ', 'postedlooks', 222301, '2015-08-06 22:03:51'),
(667, 'test2 , ', 'postedlooks', 222302, '2015-08-06 23:05:48'),
(668, 'test1 , Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222303, '2015-08-06 23:06:14'),
(669, 'test3 , ', 'postedlooks', 222304, '2015-08-06 23:27:16'),
(670, 'test4 , ', 'postedlooks', 222305, '2015-08-06 23:27:48'),
(671, 'test5 , ', 'postedlooks', 222306, '2015-08-07 00:07:22'),
(672, 'asdasd , ', 'postedlooks', 222307, '2015-08-07 03:33:59'),
(673, 'asdasdasdasd , Fashion , News , ', 'fs_postedarticles', 49, '2015-08-10 06:55:00'),
(674, 'asdasdasd , Entertainment , Music , ', 'fs_postedarticles', 50, '2015-08-10 22:49:03'),
(675, 'asdasdasd , Entertainment , Music , ', 'fs_postedarticles', 51, '2015-08-10 22:50:14'),
(676, 'asdasd , Beauty , Celebs  , ', 'fs_postedarticles', 52, '2015-08-10 22:51:22'),
(677, 'asdasd , ', 'postedlooks', 222308, '2015-08-17 03:28:26'),
(678, 'dasdasdasd , ', 'postedlooks', 222309, '2015-08-17 03:29:03'),
(679, 'test , Lifestyle , undefined , ', 'fs_postedarticles', 53, '2015-08-17 21:12:38'),
(680, 'test , Lifestyle , undefined , ', 'fs_postedarticles', 54, '2015-08-17 21:12:40'),
(681, 'test , Lifestyle , undefined , ', 'fs_postedarticles', 55, '2015-08-17 21:12:42'),
(682, 'test , Lifestyle , undefined , ', 'fs_postedarticles', 56, '2015-08-17 21:12:44'),
(683, 'dffdsf , Fashion , undefined , ', 'fs_postedarticles', 57, '2015-08-17 21:19:57'),
(684, 'asda , Entertainment , undefined , ', 'fs_postedarticles', 58, '2015-08-17 21:44:00'),
(685, 'asdasd , Fashion , undefined , ', 'fs_postedarticles', 59, '2015-08-17 23:24:09'),
(686, 'asdasd , Beauty , undefined , ', 'fs_postedarticles', 60, '2015-08-17 23:30:19'),
(687, 'title , Fashion , topic , ', 'fs_postedarticles', 61, '2015-08-17 23:54:44'),
(688, 'title , Fashion , topic , ', 'fs_postedarticles', 62, '2015-08-17 23:58:37'),
(689, 'title , Fashion , topic , ', 'fs_postedarticles', 63, '2015-08-18 00:13:33'),
(690, 'titlea , Fashion , topic , ', 'fs_postedarticles', 64, '2015-08-18 00:15:28'),
(691, 'title , Beauty , topic , ', 'fs_postedarticles', 65, '2015-08-18 00:18:11'),
(692, 'title , Beauty , topic , ', 'fs_postedarticles', 66, '2015-08-18 00:19:17'),
(693, 'asda , Fashion , asd , ', 'fs_postedarticles', 67, '2015-08-18 00:20:24'),
(694, 'title , ', 'postedlooks', 222310, '2015-08-18 00:23:47'),
(695, 'Inuyasha song , Entertainment , asda df , ', 'fs_postedarticles', 68, '2015-08-18 00:24:41'),
(696, 'asdasda , Entertainment , sda , ', 'fs_postedarticles', 69, '2015-08-18 00:25:49'),
(697, 'title , Beauty , undefined , ', 'fs_postedarticles', 70, '2015-08-18 00:27:32'),
(698, 'title sd , Entertainment , undefined , ', 'fs_postedarticles', 71, '2015-08-18 00:28:21'),
(699, 'asdasd , Entertainment , asd , ', 'fs_postedarticles', 72, '2015-08-18 00:29:31'),
(700, 'best song Inuyasha , Fashion , music , ', 'fs_postedarticles', 73, '2015-08-18 00:30:49'),
(701, 'asda , Fashion , asd , ', 'fs_postedarticles', 74, '2015-08-18 01:14:34'),
(702, ' , Fashion ,  , ', 'fs_postedarticles', 75, '2015-08-18 01:26:32'),
(703, 'asdasd , ', 'postedlooks', 222311, '2015-08-18 01:36:39'),
(704, 'asdasdasd , Lifestyle ,  , ', 'fs_postedarticles', 76, '2015-08-18 01:38:07'),
(705, 'asdasd , Fashion , undefined , ', 'fs_postedarticles', 77, '2015-08-20 09:02:55'),
(706, 'title , Entertainment , undefined , ', 'fs_postedarticles', 79, '2015-08-20 09:06:07'),
(707, 'title , ', 'postedlooks', 222312, '2015-08-20 09:13:35'),
(708, 'asdasd , ', 'postedlooks', 222313, '2015-08-20 09:38:38'),
(709, 'asdasd , ', 'postedlooks', 222314, '2015-08-20 09:59:22'),
(710, 'asdasd , ', 'postedlooks', 222315, '2015-08-20 10:02:46'),
(711, 'asdasd , ', 'postedlooks', 222316, '2015-08-20 10:03:21'),
(712, 'asdasdasda , ', 'postedlooks', 222317, '2015-08-24 03:15:20'),
(713, 'asdasdasda , ', 'postedlooks', 222318, '2015-08-24 03:15:25'),
(714, 'asdasdasda , ', 'postedlooks', 222319, '2015-08-24 03:15:33'),
(715, 'asdasdasda , ', 'postedlooks', 222320, '2015-08-24 03:15:34'),
(716, 'asdasdasda , ', 'postedlooks', 222321, '2015-08-24 03:15:48'),
(717, 'asd , Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222322, '2015-08-25 06:46:52'),
(718, 'asdas , ', 'postedlooks', 222323, '2015-08-25 06:47:53'),
(719, 'asdasd , ', 'postedlooks', 222324, '2015-08-25 06:51:59'),
(720, 'asd , Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222325, '2015-08-26 06:38:17'),
(721, 'asda , ', 'postedlooks', 222326, '2015-08-26 06:39:03'),
(722, 'asda , ', 'postedlooks', 222327, '2015-08-26 06:39:11'),
(723, 'asd , ', 'postedlooks', 222328, '2015-08-26 06:40:19'),
(724, 'asd , ', 'postedlooks', 222329, '2015-08-26 06:40:20'),
(725, 'asda , ', 'postedlooks', 222330, '2015-08-27 04:35:08'),
(726, 'asd , LightSea Green ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222331, '2015-08-27 04:46:02'),
(727, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 95, '2015-08-31 04:56:30'),
(728, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 96, '2015-08-31 06:04:35'),
(729, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 98, '2015-08-31 06:05:39'),
(730, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 99, '2015-08-31 06:05:59'),
(731, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 100, '2015-08-31 06:06:00'),
(732, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 101, '2015-08-31 06:06:02'),
(733, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 103, '2015-08-31 06:06:17'),
(734, 'asdas , Fashion , undefined , ', 'fs_postedarticles', 104, '2015-08-31 06:06:19'),
(735, 'asdasd , Entertainment , conf3,  , ', 'fs_postedarticles', 111, '2015-08-31 06:11:31'),
(736, 'asd , Beauty , company event,  , ', 'fs_postedarticles', 112, '2015-08-31 06:12:18'),
(737, 'sdas , Entertainment , conf3,  , ', 'fs_postedarticles', 115, '2015-08-31 06:17:33'),
(738, 'sdas , Entertainment , conf3,  , ', 'fs_postedarticles', 116, '2015-08-31 06:17:51'),
(739, 'sdas , Entertainment , conf3, music3,  , ', 'fs_postedarticles', 118, '2015-08-31 06:19:34'),
(740, 'asda , Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222332, '2015-08-31 06:47:43'),
(741, 'asdasd , Entertainment , conf3 , ', 'fs_postedarticles', 134, '2015-08-31 06:50:30'),
(742, 'asdasd , Entertainment , conf3 , ', 'fs_postedarticles', 135, '2015-08-31 06:53:43'),
(743, 'look1 , ', 'postedlooks', 222333, '2015-09-01 04:33:09'),
(744, 'look2 , ', 'postedlooks', 222334, '2015-09-01 04:33:38'),
(745, 'asd 1 , ', 'postedlooks', 222335, '2015-09-01 04:56:27'),
(746, 'asdasd , ', 'postedlooks', 222336, '2015-09-01 04:59:44'),
(747, 'asdasd , ', 'postedlooks', 222337, '2015-09-01 04:59:52'),
(748, 'asdasdasdasd , ', 'postedlooks', 222338, '2015-09-01 05:07:43'),
(749, 'asdasdasdasd , ', 'postedlooks', 222339, '2015-09-01 05:07:58'),
(750, 'asdasdasdasd , ', 'postedlooks', 222340, '2015-09-01 05:08:14'),
(751, 'asdasdasdasd , ', 'postedlooks', 222341, '2015-09-01 05:08:27'),
(752, 'asdas , Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222342, '2015-09-01 05:09:00'),
(753, 'asda , ', 'postedlooks', 222343, '2015-09-01 05:10:03'),
(754, 'asda , ', 'postedlooks', 222344, '2015-09-01 05:10:04'),
(755, 'asda , ', 'postedlooks', 222345, '2015-09-01 05:11:10'),
(756, 'sdasd , ', 'postedlooks', 222346, '2015-09-01 05:11:51'),
(757, 'sadas , ', 'postedlooks', 222347, '2015-09-01 05:12:22'),
(758, 'asdasd , Indigo ,  ,  ,  ,  ,  ', 'postedlooks', 222348, '2015-09-02 03:49:52'),
(759, 'asdasd , ', 'postedlooks', 222349, '2015-09-02 03:50:24'),
(760, 'test , Lightblue , brand24 , bathing suit , corduroy , camo ,  Turquoise ,  ,  ,  ,  ,  ', 'postedlooks', 222350, '2015-09-28 22:05:42'),
(761, 'test , ', 'postedlooks', 222351, '2015-09-28 22:46:23'),
(762, 'TEST , Beauty , Beauty Book Review , ', 'fs_postedarticles', 159, '2015-09-30 00:40:05'),
(763, 'asd , Beauty , Beauty Recipe , ', 'fs_postedarticles', 184, '2015-09-30 03:21:26'),
(764, 'asdasd , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 185, '2015-09-30 03:21:56'),
(765, 'asdasd , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 186, '2015-09-30 03:21:58'),
(766, 'asdasd , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 187, '2015-09-30 03:22:00'),
(767, 'asdasd , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 188, '2015-09-30 03:22:02'),
(768, 'asdasd , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 189, '2015-09-30 03:22:04'),
(769, 'asdasd , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 190, '2015-09-30 03:22:06'),
(770, 'asda , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 191, '2015-09-30 03:44:53'),
(771, 'asda , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 192, '2015-09-30 03:45:33'),
(772, 'asdas , Fashion , DIY Fashion , ', 'fs_postedarticles', 193, '2015-09-30 03:46:30'),
(773, 'sadasd , Fashion , Fashion News , ', 'fs_postedarticles', 194, '2015-09-30 03:47:43'),
(774, 'asdasdasd , ', 'postedlooks', 222352, '2015-09-30 03:59:38'),
(775, 'asdasdasd , ', 'postedlooks', 222353, '2015-09-30 03:59:39'),
(776, 'asdasdasd , ', 'postedlooks', 222354, '2015-09-30 03:59:39'),
(777, 'asdasdasd , ', 'postedlooks', 222355, '2015-09-30 03:59:40'),
(778, 'asdasdasd , ', 'postedlooks', 222356, '2015-09-30 03:59:40'),
(779, 'asdasdasd , ', 'postedlooks', 222357, '2015-09-30 03:59:41'),
(780, 'asdasdasd , ', 'postedlooks', 222358, '2015-09-30 03:59:42'),
(781, 'asdasdasd , ', 'postedlooks', 222359, '2015-09-30 03:59:42'),
(782, 'asdasdasd , ', 'postedlooks', 222360, '2015-09-30 03:59:43'),
(783, 'asdasdasd , ', 'postedlooks', 222361, '2015-09-30 03:59:44'),
(784, 'asd , ', 'postedlooks', 222362, '2015-09-30 04:02:47'),
(785, 'asdasd , ', 'postedlooks', 222363, '2015-09-30 04:03:26'),
(786, 'This is the title  , ', 'postedlooks', 222364, '2015-09-30 04:05:36'),
(787, 'This is the title , Beauty , Beauty Recipe , ', 'fs_postedarticles', 195, '2015-09-30 04:06:18'),
(788, 'test , Beauty , Beauty Workshop , ', 'fs_postedarticles', 196, '2015-09-30 04:17:59'),
(789, 'SDAS , Entertainment , Movie  , ', 'fs_postedarticles', 197, '2015-09-30 04:48:24'),
(790, 'ASD , ', 'postedlooks', 222365, '2015-09-30 04:55:08'),
(791, 'asd , ', 'postedlooks', 222366, '2015-09-30 05:18:30'),
(792, 'asdasd , ', 'postedlooks', 222367, '2015-09-30 05:40:14'),
(793, 'sdsasdas , ', 'postedlooks', 222368, '2015-09-30 05:43:14'),
(794, 'sdsasdas , ', 'postedlooks', 222369, '2015-09-30 05:47:22'),
(795, 'zczxc , Charcoal ,  ,  ,  ,  ,  ', 'postedlooks', 222370, '2015-09-30 05:50:08'),
(796, 'asd , Fashion , Fashion News , ', 'fs_postedarticles', 198, '2015-09-30 05:52:53'),
(797, 'asdasda , Beauty , Beauty Recipe , ', 'fs_postedarticles', 199, '2015-09-30 11:30:06'),
(798, 'asdasdasd , Fashion , OOTD  , ', 'fs_postedarticles', 200, '2015-09-30 11:31:20'),
(799, 'asdasda , Fashion , Shopping , ', 'fs_postedarticles', 201, '2015-09-30 11:31:34'),
(800, 'asdasda , Fashion , Styling Tip , ', 'fs_postedarticles', 202, '2015-09-30 11:32:19'),
(801, 'asdasdasd , Fashion , Street Style , ', 'fs_postedarticles', 203, '2015-09-30 11:32:32'),
(802, 'asdasdasdasdasd , Entertainment , Concert , ', 'fs_postedarticles', 204, '2015-09-30 11:40:04'),
(803, 'asdasdasdasdasd , Lifestyle , Business , ', 'fs_postedarticles', 205, '2015-09-30 11:43:42'),
(804, 'asdasdasd , Lifestyle , DIY  , ', 'fs_postedarticles', 206, '2015-09-30 11:44:01'),
(805, 'asdasdasd , Lifestyle , Automobile , ', 'fs_postedarticles', 207, '2015-09-30 11:48:50'),
(806, 'asdasdasdasdasd , Lifestyle , Health , ', 'fs_postedarticles', 208, '2015-09-30 11:49:04'),
(807, 'asdasdasd , Lifestyle , Home , ', 'fs_postedarticles', 209, '2015-09-30 11:49:39'),
(808, 'asdasdasdasdasd , Lifestyle , Work , ', 'fs_postedarticles', 210, '2015-09-30 11:50:01'),
(809, 'asdasdasd , Lifestyle , Entertaining , ', 'fs_postedarticles', 211, '2015-09-30 11:50:23'),
(810, 'This is the title , Beauty , Beauty Event , ', 'fs_postedarticles', 212, '2015-09-30 12:02:35'),
(811, 'wefwwer , ', 'postedlooks', 222371, '2015-09-30 12:03:27'),
(812, 'asd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 213, '2015-09-30 22:12:22'),
(813, 'asd , Entertainment , Concert , ', 'fs_postedarticles', 214, '2015-09-30 22:13:23'),
(814, 'asdasd , ', 'postedlooks', 222372, '2015-09-30 22:14:14'),
(815, 'Fashion 1 , Fashion , Celebrity  , ', 'fs_postedarticles', 215, '2015-10-01 01:01:50'),
(816, 'Fashion 2 , Fashion , Designer , ', 'fs_postedarticles', 216, '2015-10-01 01:01:55'),
(817, 'Fashion 3 , Fashion , DIY Fashion , ', 'fs_postedarticles', 217, '2015-10-01 01:02:00'),
(818, 'Lifestyle g , Lifestyle , Automobile , ', 'fs_postedarticles', 218, '2015-10-01 01:05:42'),
(819, 'Fashion d , Fashion , Fashion News , ', 'fs_postedarticles', 219, '2015-10-01 01:05:44'),
(820, 'Fashion f , Fashion , Mens Fashion , ', 'fs_postedarticles', 220, '2015-10-01 01:08:30'),
(821, 'Fashion g , Fashion , Product Review , ', 'fs_postedarticles', 221, '2015-10-01 01:08:33'),
(822, 'Bohemian a , ', 'postedlooks', 222373, '2015-10-01 04:29:10'),
(823, 'Bohemian b , ', 'postedlooks', 222374, '2015-10-01 04:29:12'),
(824, 'Bohemian c , ', 'postedlooks', 222375, '2015-10-01 04:29:18'),
(825, 'Bohemian d , ', 'postedlooks', 222376, '2015-10-01 04:33:32'),
(826, 'Chic e , ', 'postedlooks', 222377, '2015-10-01 04:33:34'),
(827, 'Bohemian F , ', 'postedlooks', 222378, '2015-10-01 04:42:11'),
(828, 'G , ', 'postedlooks', 222379, '2015-10-01 04:42:30'),
(829, 'sadasd , ', 'postedlooks', 222380, '2015-10-05 05:18:21'),
(830, 'Suarez Yurag Jesus , Jesus , mrjesuserwinsuarez@gmail.com', 'fs_members', 1021, '2015-10-05 06:13:48'),
(831, 'dasdasd , Fashion , Fashion Event , ', 'fs_postedarticles', 1, '2015-10-05 06:49:00'),
(832, 'asda , Beauty , Beauty Event , ', 'fs_postedarticles', 2, '2015-10-05 06:49:44'),
(833, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 3, '2015-10-05 07:05:19'),
(834, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 4, '2015-10-05 07:06:25'),
(835, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 5, '2015-10-05 07:08:07'),
(836, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 6, '2015-10-05 07:08:31'),
(837, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 7, '2015-10-05 07:09:06'),
(838, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 8, '2015-10-05 07:09:36'),
(839, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 9, '2015-10-05 07:09:43'),
(840, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 10, '2015-10-05 07:10:02'),
(841, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 11, '2015-10-05 07:10:35'),
(842, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 12, '2015-10-05 07:10:40'),
(843, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 13, '2015-10-05 07:11:16'),
(844, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 14, '2015-10-05 07:11:36'),
(845, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 15, '2015-10-05 07:12:27'),
(846, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 16, '2015-10-05 07:12:50'),
(847, 'asdasd , Entertainment , Art  , ', 'fs_postedarticles', 17, '2015-10-05 07:13:05'),
(848, 'asd , ', 'postedlooks', 222381, '2015-10-05 07:14:59'),
(849, 'asd , ', 'postedlooks', 222382, '2015-10-05 07:15:18'),
(850, 'asd , ', 'postedlooks', 222383, '2015-10-05 07:17:31'),
(851, 'asd , ', 'postedlooks', 222384, '2015-10-05 07:17:56'),
(852, 'asd , ', 'postedlooks', 222385, '2015-10-05 07:18:32'),
(853, 'asd , ', 'postedlooks', 222386, '2015-10-05 07:18:58'),
(854, 'asdasd , ', 'postedlooks', 222387, '2015-10-05 07:19:41'),
(855, 'asd , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 18, '2015-10-05 07:20:48'),
(856, 'asdas , Entertainment , Book , ', 'fs_postedarticles', 19, '2015-10-05 07:21:28'),
(857, 'asda , ', 'postedlooks', 222388, '2015-10-06 06:28:51'),
(858, 'asdasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 20, '2015-10-06 06:53:03'),
(859, 'adas , Fashion , Designer , ', 'fs_postedarticles', 21, '2015-10-06 06:54:07'),
(860, 'adas , Fashion , Designer , ', 'fs_postedarticles', 22, '2015-10-06 06:54:44'),
(861, 'adasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 23, '2015-10-07 05:14:57'),
(862, 'adasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 24, '2015-10-07 05:15:25'),
(863, 'adasd , Beauty , Beauty Recipe , ', 'fs_postedarticles', 25, '2015-10-07 05:15:41'),
(864, 'asd , Beauty , Beauty Event , ', 'fs_postedarticles', 26, '2015-10-07 05:16:33'),
(865, 'Love songs hits , Entertainment , Music , ', 'fs_postedarticles', 27, '2015-10-08 06:11:46'),
(866, 'asasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 28, '2015-10-08 07:22:44'),
(867, 'asasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 29, '2015-10-08 07:24:31'),
(868, 'asasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 30, '2015-10-08 07:25:54'),
(869, 'asasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 31, '2015-10-08 07:26:28'),
(870, 'asasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 32, '2015-10-08 07:26:56'),
(871, 'asasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 33, '2015-10-08 07:28:16'),
(872, 'asasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 35, '2015-10-08 07:29:20'),
(873, 'asasd , Beauty , Beauty Workshop , ', 'fs_postedarticles', 36, '2015-10-08 07:30:10'),
(874, 'asdasd , ', 'postedlooks', 222389, '2015-10-08 08:39:01'),
(875, 'asd , Entertainment , Book , ', 'fs_postedarticles', 39, '2015-10-09 07:14:03'),
(876, 'asdasd , Entertainment , Book , ', 'fs_postedarticles', 40, '2015-10-09 07:14:40'),
(877, 'asd , Entertainment , Book , ', 'fs_postedarticles', 41, '2015-10-09 07:15:07'),
(878, 'as , Beauty , Beauty Recipe , ', 'fs_postedarticles', 42, '2015-10-09 07:17:51'),
(879, 'a , Entertainment , Book , ', 'fs_postedarticles', 43, '2015-10-09 07:18:20'),
(880, 'asd , Entertainment , Celebrity Gossip , ', 'fs_postedarticles', 44, '2015-10-09 07:18:47'),
(881, 'asdasd , ', 'postedlooks', 222390, '2015-10-09 08:09:47'),
(882, 'asd , ', 'postedlooks', 222391, '2015-10-09 08:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `fs_signup_code`
--

CREATE TABLE IF NOT EXISTS `fs_signup_code` (
`scno` int(25) NOT NULL,
  `generated_code` varchar(100) NOT NULL,
  `mno` int(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_signup_code`
--

INSERT INTO `fs_signup_code` (`scno`, `generated_code`, `mno`, `date`) VALUES
(1, '4585547154029322', 133, '2014-09-12 02:17:31'),
(2, '4065699573208922', 971, '2014-09-12 02:31:09'),
(3, '149129657679822', 972, '2014-09-12 02:34:53'),
(4, '239102520589722', 973, '2014-10-03 01:20:43'),
(5, '1006386788052923', 975, '2014-10-03 04:01:45'),
(6, '1123549908314723', 974, '2014-10-03 03:08:14'),
(7, '4598472295659622', 968, '2014-10-04 19:25:47'),
(8, '5139319590040222', 976, '2014-10-05 06:29:58'),
(9, '5110543884627322', 977, '2014-10-06 02:22:09'),
(10, '9730764114001222', 984, '2014-10-06 05:27:40'),
(11, '11439947442822', 986, '2014-10-06 05:37:11'),
(12, '8331452321059821', 987, '2014-10-06 05:37:48'),
(13, '1106018319029923', 989, '2014-10-06 05:38:36'),
(14, '6264819216808822', 992, '2014-10-06 05:42:36'),
(15, '6592238318484522', 993, '2014-10-06 05:44:02'),
(16, '9831356910484622', 994, '2014-10-06 05:46:04'),
(17, '4231638384094122', 996, '2014-10-06 06:02:24'),
(18, '9732736978510422', 995, '2014-10-06 05:53:02'),
(19, '8906683402829922', 997, '2014-10-06 06:27:59'),
(20, '7791087553050622', 998, '2014-10-06 06:30:13'),
(21, '2997681017127122', 999, '2014-10-06 06:32:51'),
(22, '3226088321934122', 1000, '2014-10-06 06:34:42'),
(23, '5631278770353422', 0, '2014-10-06 06:34:16'),
(24, '1157420370980223', 1001, '2014-10-06 06:35:57'),
(25, '5600932959380322', 1002, '2014-10-07 07:10:23'),
(26, '126295376511523', 1003, '2014-10-07 07:47:25'),
(27, '8409780982431322', 1004, '2014-10-08 19:16:50'),
(28, '1051712280827622', 1005, '2014-10-08 19:18:58'),
(29, '577132112185221', 1006, '2014-10-08 19:20:18'),
(30, '1225529705992223', 1007, '2014-10-08 19:40:04'),
(31, '', 0, '2014-10-29 00:43:54'),
(32, '112054617390823', 0, '2014-10-29 00:44:17'),
(33, '4759391447873822', 0, '2014-10-29 00:44:26'),
(34, '4124173870193922', 0, '2014-10-29 00:44:45'),
(35, '1205531767421523', 0, '2014-10-29 00:45:13'),
(36, '118371404081223', 0, '2014-10-29 00:45:50'),
(37, '109963605531123', 0, '2014-10-29 00:45:56'),
(38, '7755173347508322', 0, '2014-10-29 00:46:38'),
(39, '2538885409995522', 0, '2014-10-29 00:48:36'),
(40, '7377832636194221', 1008, '2014-10-29 01:09:55'),
(41, '8206541467050422', 0, '2014-10-29 04:37:00'),
(42, '9591793286777322', 0, '2014-10-29 04:40:05'),
(43, '9982390132640422', 0, '2014-10-29 04:55:00'),
(44, '7203998962241722', 0, '2014-10-29 04:57:48'),
(45, '6996860070787322', 0, '2014-10-29 06:54:53'),
(46, '8497724470318822', 0, '2014-10-29 06:54:59'),
(47, '2968153957908822', 0, '2014-10-29 06:55:06'),
(48, '1160753003093623', 0, '2014-10-29 06:55:10'),
(49, '1301960631560123', 0, '2014-10-29 07:02:09'),
(50, '1249920287084323', 0, '2014-10-29 07:02:15'),
(51, '1222736635928623', 0, '2014-10-29 07:17:06'),
(52, '1508739163720722', 0, '2014-10-29 07:17:28'),
(53, '333981507716522', 0, '2014-10-29 07:17:48'),
(54, '7147980467573722', 0, '2014-10-29 07:24:54'),
(55, '666150443697222', 0, '2014-10-29 07:26:10'),
(56, '1156097615153423', 0, '2014-10-29 07:26:25'),
(57, '1240570149181223', 0, '2014-10-29 07:28:07'),
(58, '1294884083752522', 0, '2014-10-29 07:28:18'),
(59, '1245698513400823', 0, '2014-10-29 07:40:38'),
(60, '6059821749409322', 0, '2014-10-29 07:40:42'),
(61, '6786140552903921', 0, '2014-10-29 07:40:46'),
(62, '823804686080421', 0, '2014-10-29 07:41:05'),
(63, '554769769540822', 0, '2014-10-29 07:42:27'),
(64, '1209361697459123', 0, '2014-10-29 07:43:59'),
(65, '1264957104279622', 0, '2014-11-05 00:51:00'),
(66, '7541278296552322', 0, '2014-11-05 00:51:16'),
(67, '6395830011421821', 0, '2014-11-05 00:51:56'),
(68, '9976928059830222', 0, '2014-11-05 00:52:36'),
(69, '1012606923567823', 0, '2014-11-05 00:53:30'),
(71, '1872583438633622', 0, '2014-11-05 01:24:04'),
(72, '6260141268396522', 0, '2014-11-05 01:25:13'),
(73, '5993802857449122', 0, '2014-11-05 01:25:30'),
(74, '6958910693807522', 0, '2014-11-05 01:25:34'),
(75, '1031151772265223', 1017, '2015-09-25 03:36:10'),
(78, '1740798581880222', 0, '2014-11-05 01:27:45'),
(79, '106188766131723', 0, '2014-11-05 01:28:34'),
(80, '1191384512022423', 1020, '2015-09-25 04:02:25'),
(81, '2791133730161922', 1012, '2014-11-05 01:31:57'),
(82, '4947816807981422', 0, '2014-11-05 01:33:04'),
(83, '1643739333734422', 0, '2014-11-05 01:33:14'),
(84, '1076329044198323', 1019, '2015-09-25 04:01:01'),
(85, '1251153308274522', 0, '2014-11-05 01:34:04'),
(86, '5932644769055222', 1013, '2014-11-05 01:34:04'),
(87, '9093497126241422', 1014, '2014-11-05 01:34:17'),
(88, '1109867524919823', 0, '2014-11-05 01:34:24'),
(89, '3371935418772522', 1015, '2014-11-05 01:34:24'),
(90, '9424937898725422', 0, '2014-11-05 01:34:24'),
(91, '2345277432375522', 1018, '2015-09-25 03:54:46'),
(92, '6204507441432322', 1021, '2015-10-05 05:07:57'),
(93, '4039531488221622', 1022, '2015-10-05 08:06:24'),
(94, '2105871263960222', 1016, '2015-01-13 01:32:47'),
(95, '7910405523951522', 821, '2015-03-02 02:15:51'),
(96, '4354330389630222', 139, '2015-03-06 01:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `fs_test`
--

CREATE TABLE IF NOT EXISTS `fs_test` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `group` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_test`
--

INSERT INTO `fs_test` (`id`, `name`, `group`, `date`) VALUES
(1, 'jesus', 1, '2015-01-16 05:48:23'),
(2, 'jesus', 2, '2015-01-16 05:48:23'),
(3, 'jesus', 2, '2015-01-16 05:48:23'),
(4, 'jesus', 1, '2015-01-16 05:48:23'),
(5, 'suarez', 1, '2015-01-16 05:48:23'),
(6, 'suarez', 1, '2015-01-16 05:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `fs_top_data`
--

CREATE TABLE IF NOT EXISTS `fs_top_data` (
`tdno` int(25) NOT NULL,
  `top_look_rating` int(25) NOT NULL,
  `top_look_percentage` int(25) NOT NULL,
  `top_look_vote` int(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fs_top_data`
--

INSERT INTO `fs_top_data` (`tdno`, `top_look_rating`, `top_look_percentage`, `top_look_vote`) VALUES
(1, 28, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fs_uname_change`
--

CREATE TABLE IF NOT EXISTS `fs_uname_change` (
`uncno` bigint(25) NOT NULL,
  `mno` bigint(25) NOT NULL,
  `last_un` varchar(30) NOT NULL,
  `new_un` varchar(30) NOT NULL,
  `date_change` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fs_uname_change`
--

INSERT INTO `fs_uname_change` (`uncno`, `mno`, `last_un`, `new_un`, `date_change`) VALUES
(8, 682, 'a', 'v', '2013-03-28'),
(7, 676, 'a', 'a', '2013-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `fs_view`
--

CREATE TABLE IF NOT EXISTS `fs_view` (
`vno` int(25) NOT NULL,
  `mno` int(25) NOT NULL,
  `table_name` varchar(25) NOT NULL,
  `table_id` int(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=930 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fs_view`
--

INSERT INTO `fs_view` (`vno`, `mno`, `table_name`, `table_id`, `date`) VALUES
(1, 754, 'fs_members', 754, '2014-08-22 07:07:45'),
(2, 754, 'fs_members', 968, '2014-08-23 00:48:17'),
(3, 754, 'fs_members', 136, '2014-08-23 02:00:39'),
(4, 754, 'fs_postedarticles', 63, '2014-08-23 02:09:13'),
(5, 754, 'fs_members', 966, '2014-08-23 02:11:17'),
(6, 754, 'fs_members', 924, '2014-08-23 02:27:35'),
(7, 136, 'fs_postedarticles', 63, '2014-08-23 05:09:37'),
(8, 754, 'fs_postedarticles', 69, '2014-08-23 05:22:46'),
(9, 754, 'postedlooks', 527, '2014-08-23 05:27:14'),
(10, 754, 'fs_members', 819, '2014-08-25 09:54:48'),
(11, 754, 'fs_members', 676, '2014-08-25 09:55:04'),
(12, 754, 'fs_members', 739, '2014-08-25 09:55:05'),
(13, 754, 'fs_members', 818, '2014-08-25 09:55:07'),
(14, 754, 'fs_members', 854, '2014-08-25 09:55:08'),
(15, 754, 'fs_members', 934, '2014-08-25 09:55:11'),
(16, 754, 'fs_members', 133, '2014-08-25 11:30:42'),
(17, 754, 'fs_members', 841, '2014-08-25 11:41:58'),
(18, 754, 'fs_members', 785, '2014-08-25 11:42:00'),
(19, 754, 'fs_members', 840, '2014-08-25 11:42:01'),
(20, 754, 'fs_members', 816, '2014-08-25 11:58:22'),
(21, 754, 'fs_members', 466, '2014-08-25 11:58:24'),
(22, 754, 'fs_members', 929, '2014-08-25 12:09:08'),
(23, 754, 'fs_members', 932, '2014-08-25 12:09:09'),
(24, 754, 'fs_members', 686, '2014-08-25 12:09:11'),
(25, 754, 'fs_members', 925, '2014-08-25 12:09:41'),
(26, 754, 'fs_members', 361, '2014-08-25 12:20:30'),
(27, 754, 'fs_members', 160, '2014-08-25 12:20:45'),
(28, 754, 'fs_members', 134, '2014-08-26 03:52:15'),
(29, 754, 'fs_members', 821, '2014-08-26 03:52:19'),
(30, 754, 'fs_postedarticles', 72, '2014-08-26 03:52:31'),
(31, 754, 'fs_members', 135, '2014-08-26 03:52:47'),
(32, 754, 'fs_members', 933, '2014-08-26 03:52:49'),
(33, 754, 'fs_postedarticles', 73, '2014-08-26 03:56:41'),
(34, 754, 'fs_members', 379, '2014-08-26 04:01:35'),
(36, 754, 'fs_postedarticles', 68, '2014-08-26 04:02:29'),
(37, 754, 'postedlooks', 528, '2014-08-26 04:10:45'),
(38, 754, 'postedlooks', 529, '2014-08-26 04:12:20'),
(39, 754, 'postedlooks', 530, '2014-08-26 04:20:49'),
(40, 754, 'postedlooks', 486, '2014-08-26 04:22:24'),
(41, 754, 'postedlooks', 502, '2014-08-26 04:22:28'),
(42, 754, 'postedlooks', 531, '2014-08-26 04:54:32'),
(43, 754, 'fs_postedarticles', 74, '2014-08-27 02:16:26'),
(44, 754, 'postedlooks', 396, '2014-08-27 02:16:28'),
(45, 754, 'postedlooks', 381, '2014-08-27 02:16:31'),
(46, 754, 'fs_postedarticles', 58, '2014-08-27 02:16:33'),
(47, 754, 'postedlooks', 532, '2014-08-27 07:18:34'),
(48, 968, 'fs_members', 136, '2014-08-27 08:12:42'),
(49, 951, 'fs_postedarticles', 28, '2014-08-27 23:19:42'),
(51, 754, 'postedlooks', 533, '2014-08-29 02:29:09'),
(52, 754, 'postedlooks', 534, '2014-08-29 02:42:37'),
(53, 754, 'postedlooks', 535, '2014-08-29 02:45:24'),
(54, 133, 'fs_members', 133, '2014-08-29 06:43:30'),
(55, 134, 'fs_members', 134, '2014-08-29 11:29:42'),
(56, 136, 'fs_members', 134, '2014-09-02 02:07:52'),
(57, 136, 'fs_members', 133, '2014-09-02 02:07:54'),
(58, 133, 'fs_members', 134, '2014-09-02 02:30:39'),
(59, 135, 'fs_members', 135, '2014-09-02 04:12:05'),
(60, 133, 'fs_members', 754, '2014-09-02 04:40:56'),
(61, 133, 'fs_members', 968, '2014-09-02 05:22:38'),
(62, 134, 'fs_members', 133, '2014-09-02 06:54:48'),
(63, 133, 'postedlooks', 534, '2014-09-02 22:45:22'),
(64, 133, 'postedlooks', 529, '2014-09-03 03:34:50'),
(65, 133, 'fs_postedarticles', 80, '2014-09-03 03:39:06'),
(66, 134, 'fs_postedarticles', 80, '2014-09-03 03:39:08'),
(67, 133, 'fs_postedarticles', 76, '2014-09-03 03:43:16'),
(68, 133, 'fs_members', 136, '2014-09-04 03:19:21'),
(69, 134, 'fs_postedarticles', 78, '2014-09-04 03:25:09'),
(70, 133, 'fs_postedarticles', 76, '2014-09-04 05:56:48'),
(71, 133, 'fs_postedarticles', 0, '2014-09-04 05:56:51'),
(72, 133, 'fs_postedarticles', 0, '2014-09-04 05:56:53'),
(73, 133, 'fs_postedarticles', 76, '2014-09-04 05:56:57'),
(74, 133, 'fs_postedarticles', 0, '2014-09-04 05:57:00'),
(75, 133, 'fs_postedarticles', 76, '2014-09-04 05:57:05'),
(76, 133, 'fs_postedarticles', 0, '2014-09-04 05:57:08'),
(77, 133, 'fs_postedarticles', 0, '2014-09-04 05:57:10'),
(78, 134, 'fs_postedarticles', 76, '2014-09-04 06:02:24'),
(79, 134, 'postedlooks', 533, '2014-09-04 06:07:09'),
(80, 754, 'fs_postedarticles', 80, '2014-09-04 07:05:33'),
(81, 754, 'fs_postedarticles', 76, '2014-09-04 07:05:51'),
(82, 133, 'fs_postedarticles', 85, '2014-09-05 03:42:19'),
(83, 133, 'postedlooks', 460, '2014-09-07 23:11:55'),
(84, 133, 'postedlooks', 459, '2014-09-07 23:11:57'),
(85, 133, 'postedlooks', 456, '2014-09-07 23:12:03'),
(86, 133, 'fs_members', 934, '2014-09-07 23:56:56'),
(87, 133, 'fs_postedarticles', 86, '2014-09-08 02:31:02'),
(88, 133, 'fs_postedarticles', 87, '2014-09-08 02:58:07'),
(89, 133, 'fs_postedarticles', 81, '2014-09-08 02:58:20'),
(90, 134, 'fs_postedarticles', 85, '2014-09-08 03:45:48'),
(91, 133, 'fs_postedarticles', 83, '2014-09-08 20:26:15'),
(92, 133, 'postedlooks', 530, '2014-09-08 22:15:05'),
(93, 133, 'fs_postedarticles', 82, '2014-09-08 22:20:26'),
(94, 133, 'fs_postedarticles', 84, '2014-09-08 22:55:13'),
(95, 133, 'postedlooks', 536, '2014-09-09 01:28:30'),
(96, 133, 'postedlooks', 464, '2014-09-09 01:54:30'),
(97, 134, 'postedlooks', 464, '2014-09-09 02:25:54'),
(98, 133, 'postedlooks', 458, '2014-09-09 03:28:06'),
(99, 133, 'postedlooks', 457, '2014-09-09 03:28:11'),
(100, 133, 'postedlooks', 442, '2014-09-09 03:50:00'),
(101, 133, 'postedlooks', 430, '2014-09-09 03:51:06'),
(102, 133, 'postedlooks', 426, '2014-09-09 03:51:21'),
(103, 133, 'postedlooks', 403, '2014-09-09 03:51:31'),
(104, 133, 'postedlooks', 402, '2014-09-09 03:51:39'),
(105, 133, 'postedlooks', 401, '2014-09-09 03:51:51'),
(106, 133, 'postedlooks', 400, '2014-09-09 03:55:18'),
(107, 134, 'postedlooks', 536, '2014-09-09 04:09:27'),
(108, 133, 'fs_postedarticles', 88, '2014-09-09 04:13:51'),
(109, 134, 'postedlooks', 401, '2014-09-09 04:38:16'),
(110, 133, 'postedlooks', 397, '2014-09-09 04:41:08'),
(111, 134, 'postedlooks', 400, '2014-09-09 04:41:14'),
(112, 133, 'postedlooks', 396, '2014-09-09 04:45:41'),
(113, 134, 'fs_postedarticles', 88, '2014-09-09 04:47:04'),
(114, 134, 'fs_postedarticles', 86, '2014-09-09 04:47:43'),
(115, 134, 'postedlooks', 397, '2014-09-09 04:50:42'),
(116, 134, 'fs_postedarticles', 84, '2014-09-09 04:51:46'),
(117, 133, 'postedlooks', 395, '2014-09-09 04:53:56'),
(118, 134, 'fs_postedarticles', 83, '2014-09-09 04:54:02'),
(119, 133, 'fs_members', 954, '2014-09-09 23:05:39'),
(120, 133, 'fs_members', 0, '2014-09-09 23:29:13'),
(121, 133, 'fs_members', 957, '2014-09-09 23:31:45'),
(122, 133, 'fs_postedarticles', 75, '2014-09-10 01:04:59'),
(123, 133, 'fs_postedarticles', 74, '2014-09-10 01:07:00'),
(124, 133, 'fs_postedarticles', 73, '2014-09-10 01:07:41'),
(125, 133, 'fs_postedarticles', 72, '2014-09-10 01:08:14'),
(126, 133, 'fs_postedarticles', 71, '2014-09-10 01:11:31'),
(127, 133, 'postedlooks', 535, '2014-09-10 01:12:47'),
(128, 133, 'postedlooks', 533, '2014-09-10 01:22:22'),
(129, 133, 'postedlooks', 532, '2014-09-10 01:22:32'),
(130, 133, 'postedlooks', 410, '2014-09-10 02:39:48'),
(131, 133, 'postedlooks', 531, '2014-09-10 03:52:28'),
(132, 133, 'postedlooks', 483, '2014-09-10 03:58:40'),
(133, 133, 'postedlooks', 485, '2014-09-10 04:03:08'),
(134, 133, 'postedlooks', 528, '2014-09-10 04:04:53'),
(135, 133, 'postedlooks', 526, '2014-09-10 23:24:46'),
(136, 133, 'fs_members', 174, '2014-09-10 23:50:05'),
(137, 136, 'fs_postedarticles', 11, '2014-09-11 01:52:22'),
(138, 136, 'fs_postedarticles', 88, '2014-09-11 02:06:19'),
(139, 136, 'postedlooks', 483, '2014-09-11 02:12:35'),
(140, 133, 'fs_postedarticles', 11, '2014-09-11 02:17:24'),
(141, 133, 'postedlooks', 524, '2014-09-11 02:31:13'),
(142, 133, 'fs_postedarticles', 89, '2014-09-11 02:33:51'),
(143, 134, 'postedlooks', 529, '2014-09-11 02:54:59'),
(144, 134, 'fs_postedarticles', 89, '2014-09-11 02:57:42'),
(145, 134, 'fs_members', 954, '2014-09-11 11:14:15'),
(146, 136, 'fs_postedarticles', 89, '2014-09-11 11:38:07'),
(147, 951, 'fs_postedarticles', 89, '2014-09-11 11:43:39'),
(148, 951, 'fs_postedarticles', 81, '2014-09-11 11:45:08'),
(149, 951, 'fs_postedarticles', 85, '2014-09-11 11:45:12'),
(150, 951, 'fs_postedarticles', 88, '2014-09-11 11:45:17'),
(151, 136, 'postedlooks', 535, '2014-09-11 19:32:41'),
(152, 134, 'fs_members', 136, '2014-09-11 19:34:02'),
(153, 134, 'fs_postedarticles', 90, '2014-09-11 19:34:59'),
(154, 134, 'postedlooks', 537, '2014-09-11 19:36:21'),
(155, 134, 'postedlooks', 524, '2014-09-11 19:55:22'),
(156, 134, 'fs_members', 968, '2014-09-11 19:55:28'),
(157, 134, 'fs_postedarticles', 59, '2014-09-11 20:11:08'),
(158, 134, 'postedlooks', 525, '2014-09-11 20:11:46'),
(159, 134, 'fs_postedarticles', 91, '2014-09-11 20:49:56'),
(160, 136, 'fs_postedarticles', 107, '2014-09-12 02:01:45'),
(161, 136, 'fs_postedarticles', 81, '2014-09-12 02:01:58'),
(162, 133, 'fs_postedarticles', 107, '2014-09-12 02:18:12'),
(163, 136, 'fs_members', 971, '2014-09-12 02:32:24'),
(164, 972, 'fs_members', 972, '2014-09-12 02:40:46'),
(165, 972, 'fs_postedarticles', 91, '2014-09-12 02:43:09'),
(166, 972, 'fs_postedarticles', 90, '2014-09-12 02:43:32'),
(167, 972, 'fs_members', 136, '2014-09-12 02:44:10'),
(168, 972, 'fs_postedarticles', 108, '2014-09-12 02:44:34'),
(169, 972, 'postedlooks', 538, '2014-09-12 02:47:03'),
(170, 134, 'fs_postedarticles', 108, '2014-09-12 02:47:38'),
(171, 134, 'postedlooks', 538, '2014-09-12 02:49:22'),
(172, 972, 'fs_postedarticles', 102, '2014-09-12 06:25:47'),
(173, 972, 'fs_members', 133, '2014-09-12 06:25:56'),
(174, 136, 'postedlooks', 538, '2014-09-14 21:32:51'),
(175, 136, 'fs_postedarticles', 108, '2014-09-14 21:33:22'),
(176, 136, 'fs_postedarticles', 91, '2014-09-14 21:33:40'),
(177, 136, 'fs_postedarticles', 90, '2014-09-14 21:33:47'),
(178, 136, 'fs_postedarticles', 93, '2014-09-14 21:33:50'),
(179, 136, 'fs_postedarticles', 92, '2014-09-14 21:33:53'),
(180, 972, 'postedlooks', 539, '2014-09-15 01:25:51'),
(181, 972, 'postedlooks', 540, '2014-09-15 01:55:17'),
(183, 972, 'postedlooks', 541, '2014-09-15 03:51:15'),
(185, 972, 'fs_postedarticles', 110, '2014-09-15 04:40:19'),
(186, 972, 'fs_postedarticles', 109, '2014-09-15 04:40:25'),
(187, 972, 'fs_postedarticles', 94, '2014-09-15 05:26:49'),
(188, 972, 'fs_postedarticles', 113, '2014-09-15 05:39:37'),
(189, 972, 'fs_postedarticles', 93, '2014-09-15 06:16:20'),
(190, 972, 'fs_postedarticles', 92, '2014-09-15 06:16:29'),
(192, 972, 'fs_postedarticles', 117, '2014-09-16 00:23:42'),
(228, 972, 'fs_postedarticles', 114, '2014-09-16 04:37:47'),
(233, 972, 'postedlooks', 548, '2014-09-16 06:07:54'),
(234, 972, 'postedlooks', 0, '2014-09-16 06:08:32'),
(235, 972, 'fs_postedarticles', 120, '2014-09-17 00:37:40'),
(244, 0, 'fs_members', 133, '2014-09-18 00:03:33'),
(245, 0, 'fs_members', 133, '2014-09-18 00:04:12'),
(246, 0, 'fs_members', 133, '2014-09-18 00:04:42'),
(247, 0, 'fs_members', 133, '2014-09-18 00:05:19'),
(248, 0, 'fs_members', 133, '2014-09-18 00:05:33'),
(249, 0, 'fs_members', 133, '2014-09-18 00:05:48'),
(250, 0, 'fs_members', 133, '2014-09-18 00:06:00'),
(251, 0, 'fs_members', 133, '2014-09-18 00:06:13'),
(252, 0, 'fs_members', 133, '2014-09-18 00:06:27'),
(253, 0, 'fs_members', 133, '2014-09-18 00:07:16'),
(254, 0, 'fs_members', 133, '2014-09-18 00:18:44'),
(255, 0, 'fs_members', 133, '2014-09-18 00:19:25'),
(256, 0, 'fs_members', 133, '2014-09-18 00:20:44'),
(257, 0, 'fs_members', 133, '2014-09-18 00:23:19'),
(258, 0, 'fs_members', 133, '2014-09-18 00:23:58'),
(259, 0, 'fs_members', 133, '2014-09-18 00:24:33'),
(260, 0, 'fs_members', 133, '2014-09-18 00:25:10'),
(261, 0, 'fs_members', 133, '2014-09-18 00:25:32'),
(262, 0, 'fs_members', 133, '2014-09-18 00:26:04'),
(263, 0, 'fs_members', 133, '2014-09-18 00:26:54'),
(264, 0, 'fs_members', 133, '2014-09-18 00:27:48'),
(265, 0, 'fs_members', 133, '2014-09-18 00:28:49'),
(266, 0, 'fs_members', 133, '2014-09-18 00:29:04'),
(267, 0, 'fs_members', 133, '2014-09-18 00:29:33'),
(268, 0, 'fs_members', 133, '2014-09-18 00:29:48'),
(269, 0, 'fs_members', 133, '2014-09-18 00:30:25'),
(270, 0, 'fs_members', 133, '2014-09-18 00:31:05'),
(271, 0, 'fs_members', 133, '2014-09-18 00:31:18'),
(272, 0, 'fs_members', 133, '2014-09-18 00:31:28'),
(273, 0, 'fs_members', 133, '2014-09-18 00:32:10'),
(274, 0, 'fs_members', 133, '2014-09-18 00:32:37'),
(275, 0, 'fs_members', 133, '2014-09-18 00:32:53'),
(276, 0, 'fs_members', 133, '2014-09-18 00:34:01'),
(277, 0, 'fs_members', 133, '2014-09-18 00:34:13'),
(279, 0, 'fs_members', 133, '2014-09-18 00:35:44'),
(280, 0, 'fs_members', 133, '2014-09-18 00:37:54'),
(281, 0, 'fs_members', 133, '2014-09-18 00:40:04'),
(282, 0, 'fs_members', 133, '2014-09-18 00:41:22'),
(283, 0, 'fs_members', 133, '2014-09-18 00:41:55'),
(284, 0, 'fs_members', 133, '2014-09-18 00:42:55'),
(285, 0, 'fs_members', 133, '2014-09-18 00:43:09'),
(286, 0, 'fs_members', 133, '2014-09-18 00:43:36'),
(287, 0, 'fs_members', 133, '2014-09-18 00:43:58'),
(288, 0, 'fs_members', 133, '2014-09-18 00:44:28'),
(289, 0, 'fs_members', 133, '2014-09-18 00:45:31'),
(290, 0, 'fs_members', 133, '2014-09-18 00:45:56'),
(291, 0, 'fs_members', 133, '2014-09-18 00:46:18'),
(292, 0, 'fs_members', 133, '2014-09-18 00:46:32'),
(293, 136, 'fs_members', 972, '2014-09-18 00:46:34'),
(294, 0, 'fs_members', 133, '2014-09-18 00:47:57'),
(295, 0, 'fs_members', 133, '2014-09-18 00:51:35'),
(296, 0, 'fs_members', 133, '2014-09-18 01:01:08'),
(297, 0, 'fs_members', 133, '2014-09-18 01:16:40'),
(298, 0, 'fs_members', 133, '2014-09-18 01:17:25'),
(299, 0, 'fs_members', 133, '2014-09-18 01:17:52'),
(300, 0, 'fs_members', 133, '2014-09-18 01:18:53'),
(301, 0, 'fs_members', 133, '2014-09-18 01:26:45'),
(302, 0, 'fs_members', 133, '2014-09-18 01:29:47'),
(303, 0, 'fs_members', 133, '2014-09-18 01:31:47'),
(304, 0, 'fs_members', 133, '2014-09-18 01:32:27'),
(305, 0, 'fs_members', 133, '2014-09-18 01:32:41'),
(306, 0, 'fs_members', 133, '2014-09-18 02:04:55'),
(307, 0, 'fs_members', 133, '2014-09-18 02:05:16'),
(308, 0, 'fs_members', 133, '2014-09-18 02:05:42'),
(309, 0, 'fs_members', 133, '2014-09-18 02:06:04'),
(310, 0, 'fs_members', 133, '2014-09-18 02:06:52'),
(311, 0, 'fs_members', 133, '2014-09-18 02:09:08'),
(312, 0, 'fs_members', 133, '2014-09-18 02:10:12'),
(313, 0, 'fs_members', 133, '2014-09-18 02:17:27'),
(314, 0, 'fs_members', 133, '2014-09-18 02:18:06'),
(315, 0, 'fs_members', 133, '2014-09-18 02:18:43'),
(316, 0, 'fs_members', 133, '2014-09-18 02:18:54'),
(317, 0, 'fs_members', 133, '2014-09-18 02:19:22'),
(318, 0, 'fs_members', 133, '2014-09-18 02:20:15'),
(319, 0, 'fs_members', 133, '2014-09-18 02:20:36'),
(320, 0, 'fs_members', 133, '2014-09-18 02:21:21'),
(321, 0, 'fs_members', 133, '2014-09-18 02:22:23'),
(322, 0, 'fs_members', 133, '2014-09-18 02:22:53'),
(323, 0, 'fs_members', 133, '2014-09-18 02:23:48'),
(324, 0, 'fs_members', 133, '2014-09-18 02:24:03'),
(325, 0, 'fs_members', 133, '2014-09-18 02:24:13'),
(326, 0, 'fs_members', 133, '2014-09-18 02:24:38'),
(327, 0, 'fs_members', 133, '2014-09-18 02:24:52'),
(328, 0, 'fs_members', 133, '2014-09-18 02:25:05'),
(329, 0, 'fs_members', 133, '2014-09-18 02:25:44'),
(330, 0, 'fs_members', 133, '2014-09-18 02:26:38'),
(331, 0, 'fs_members', 133, '2014-09-18 02:28:16'),
(332, 0, 'fs_members', 133, '2014-09-18 02:31:55'),
(333, 0, 'fs_members', 133, '2014-09-18 02:38:42'),
(334, 0, 'fs_members', 133, '2014-09-18 02:40:43'),
(335, 0, 'fs_members', 133, '2014-09-18 02:40:58'),
(336, 0, 'fs_members', 133, '2014-09-18 02:43:16'),
(337, 0, 'fs_members', 133, '2014-09-18 02:45:37'),
(338, 0, 'fs_members', 133, '2014-09-18 02:46:08'),
(339, 0, 'fs_members', 133, '2014-09-18 02:48:09'),
(340, 0, 'fs_members', 133, '2014-09-18 02:48:24'),
(341, 0, 'fs_members', 133, '2014-09-18 02:51:49'),
(343, 0, 'fs_members', 133, '2014-09-18 02:52:24'),
(344, 0, 'fs_members', 133, '2014-09-18 02:56:53'),
(345, 0, 'fs_members', 133, '2014-09-18 02:57:13'),
(346, 0, 'fs_members', 133, '2014-09-18 02:57:34'),
(347, 0, 'fs_members', 133, '2014-09-18 02:58:03'),
(349, 0, 'fs_members', 133, '2014-09-18 02:58:20'),
(350, 0, 'fs_members', 133, '2014-09-18 02:58:28'),
(351, 0, 'fs_members', 133, '2014-09-18 04:58:15'),
(352, 972, 'postedlooks', 551, '2014-09-18 07:20:17'),
(353, 0, 'fs_members', 133, '2014-09-18 08:04:00'),
(354, 972, 'postedlooks', 552, '2014-09-19 03:28:30'),
(355, 972, 'postedlooks', 553, '2014-09-22 21:07:51'),
(356, 972, 'postedlooks', 571, '2014-09-24 02:33:57'),
(357, 972, 'postedlooks', 572, '2014-09-24 02:39:49'),
(358, 972, 'postedlooks', 573, '2014-09-24 03:02:20'),
(359, 972, 'postedlooks', 574, '2014-09-24 04:49:20'),
(360, 972, 'postedlooks', 575, '2014-09-24 04:49:59'),
(361, 972, 'postedlooks', 576, '2014-09-24 04:52:37'),
(362, 972, 'postedlooks', 577, '2014-09-24 04:53:37'),
(363, 972, 'postedlooks', 578, '2014-09-24 04:55:58'),
(364, 972, 'postedlooks', 579, '2014-09-24 04:59:32'),
(365, 972, 'postedlooks', 581, '2014-09-24 06:12:29'),
(366, 972, 'postedlooks', 580, '2014-09-24 06:12:34'),
(367, 972, 'postedlooks', 582, '2014-09-24 06:23:43'),
(368, 972, 'postedlooks', 583, '2014-09-24 06:24:46'),
(369, 972, 'postedlooks', 584, '2014-09-24 19:58:38'),
(370, 971, 'fs_members', 136, '2014-09-24 21:26:18'),
(371, 971, 'postedlooks', 586, '2014-09-24 23:39:26'),
(372, 971, 'postedlooks', 585, '2014-09-24 23:39:32'),
(373, 971, 'postedlooks', 587, '2014-09-25 00:20:06'),
(374, 971, 'postedlooks', 588, '2014-09-25 01:00:49'),
(375, 971, 'postedlooks', 590, '2014-09-25 01:39:32'),
(376, 971, 'fs_postedarticles', 124, '2014-09-25 02:12:19'),
(377, 971, 'postedlooks', 591, '2014-09-25 02:12:58'),
(378, 971, 'postedlooks', 592, '2014-09-25 08:26:15'),
(379, 971, 'postedlooks', 593, '2014-09-25 21:28:31'),
(380, 971, 'postedlooks', 589, '2014-09-25 23:45:59'),
(381, 971, 'postedlooks', 602, '2014-09-26 02:40:21'),
(382, 971, 'postedlooks', 601, '2014-09-26 02:40:31'),
(383, 971, 'fs_members', 971, '2014-09-26 02:42:58'),
(384, 971, 'postedlooks', 603, '2014-09-26 02:43:27'),
(385, 971, 'postedlooks', 604, '2014-09-26 02:44:10'),
(386, 971, 'postedlooks', 605, '2014-09-26 02:46:06'),
(387, 971, 'postedlooks', 606, '2014-09-26 02:48:45'),
(388, 971, 'postedlooks', 607, '2014-09-26 03:02:42'),
(389, 971, 'fs_postedarticles', 125, '2014-09-26 03:03:45'),
(390, 971, 'fs_postedarticles', 126, '2014-09-26 03:04:12'),
(391, 971, 'fs_postedarticles', 127, '2014-09-26 03:06:03'),
(392, 971, 'postedlooks', 608, '2014-09-26 03:06:23'),
(393, 971, 'postedlooks', 609, '2014-09-26 03:08:43'),
(394, 971, 'fs_postedarticles', 97, '2014-09-26 05:03:54'),
(395, 971, 'fs_postedarticles', 106, '2014-09-26 05:04:05'),
(396, 971, 'fs_postedarticles', 105, '2014-09-26 05:04:13'),
(397, 971, 'postedlooks', 538, '2014-09-28 23:07:20'),
(398, 134, 'postedlooks', 584, '2014-09-28 23:10:14'),
(399, 134, 'postedlooks', 583, '2014-09-28 23:53:12'),
(400, 134, 'postedlooks', 582, '2014-09-28 23:53:16'),
(401, 971, 'postedlooks', 600, '2014-09-29 05:07:24'),
(402, 971, 'postedlooks', 599, '2014-09-29 05:07:34'),
(403, 971, 'postedlooks', 598, '2014-09-29 05:07:46'),
(404, 971, 'postedlooks', 597, '2014-09-29 05:09:08'),
(405, 971, 'postedlooks', 596, '2014-09-29 05:33:05'),
(406, 971, 'postedlooks', 610, '2014-09-29 05:35:48'),
(407, 971, 'postedlooks', 611, '2014-09-29 06:25:08'),
(408, 971, 'postedlooks', 612, '2014-09-29 06:29:36'),
(409, 971, 'postedlooks', 613, '2014-09-29 07:07:31'),
(410, 971, 'postedlooks', 614, '2014-09-29 07:12:17'),
(411, 971, 'postedlooks', 615, '2014-09-29 07:14:33'),
(412, 971, 'postedlooks', 616, '2014-09-29 07:17:02'),
(413, 971, 'postedlooks', 617, '2014-09-29 07:18:25'),
(414, 971, 'postedlooks', 619, '2014-09-29 09:10:49'),
(415, 971, 'postedlooks', 618, '2014-09-29 09:11:23'),
(416, 971, 'postedlooks', 620, '2014-09-29 19:44:04'),
(417, 971, 'fs_postedarticles', 971, '2014-09-30 00:43:02'),
(418, 971, 'fs_postedarticles', 0, '2014-09-30 00:43:06'),
(419, 971, 'postedlooks', 621, '2014-10-01 04:27:56'),
(420, 972, 'postedlooks', 621, '2014-10-02 22:07:21'),
(421, 972, 'postedlooks', 622, '2014-10-02 22:09:46'),
(422, 973, 'fs_members', 973, '2014-10-03 01:21:57'),
(423, 975, 'postedlooks', 623, '2014-10-03 04:08:01'),
(424, 975, 'postedlooks', 624, '2014-10-03 04:09:07'),
(425, 975, 'fs_members', 136, '2014-10-03 04:17:54'),
(426, 975, 'fs_postedarticles', 128, '2014-10-03 04:18:07'),
(427, 975, 'fs_members', 975, '2014-10-03 04:42:44'),
(428, 975, 'postedlooks', 625, '2014-10-04 00:20:18'),
(429, 975, 'fs_members', 888, '2014-10-04 03:54:02'),
(430, 975, 'fs_members', 323, '2014-10-04 03:58:12'),
(431, 968, 'postedlooks', 526, '2014-10-04 10:18:32'),
(432, 968, 'fs_postedarticles', 78, '2014-10-04 10:18:35'),
(433, 968, 'fs_members', 968, '2014-10-04 19:30:07'),
(434, 968, 'postedlooks', 624, '2014-10-04 19:35:27'),
(435, 968, 'postedlooks', 623, '2014-10-04 19:37:15'),
(436, 968, 'fs_postedarticles', 127, '2014-10-04 19:39:48'),
(437, 968, 'fs_postedarticles', 126, '2014-10-04 19:39:56'),
(438, 976, 'postedlooks', 626, '2014-10-05 06:36:59'),
(439, 976, 'postedlooks', 627, '2014-10-05 22:02:19'),
(440, 975, 'postedlooks', 627, '2014-10-05 22:04:55'),
(441, 976, 'fs_members', 136, '2014-10-05 22:25:00'),
(442, 976, 'fs_postedarticles', 129, '2014-10-05 22:25:33'),
(443, 975, 'fs_postedarticles', 129, '2014-10-05 22:25:42'),
(444, 975, 'fs_postedarticles', 130, '2014-10-05 22:32:22'),
(445, 976, 'fs_postedarticles', 128, '2014-10-05 22:34:06'),
(446, 976, 'fs_postedarticles', 130, '2014-10-05 22:34:18'),
(447, 976, 'postedlooks', 628, '2014-10-05 23:17:54'),
(448, 976, 'fs_postedarticles', 121, '2014-10-05 23:19:29'),
(449, 976, 'fs_members', 976, '2014-10-05 23:33:05'),
(450, 976, 'postedlooks', 629, '2014-10-05 23:34:17'),
(451, 976, 'fs_postedarticles', 127, '2014-10-05 23:43:47'),
(452, 976, 'postedlooks', 630, '2014-10-06 00:42:44'),
(453, 975, 'postedlooks', 628, '2014-10-06 00:58:01'),
(454, 975, 'postedlooks', 629, '2014-10-06 00:59:08'),
(455, 975, 'fs_members', 976, '2014-10-06 01:34:42'),
(456, 972, 'fs_members', 975, '2014-10-06 01:43:01'),
(457, 976, 'fs_members', 975, '2014-10-06 01:43:28'),
(458, 976, 'fs_members', 972, '2014-10-06 01:46:15'),
(459, 754, 'fs_members', 975, '2014-10-06 01:47:18'),
(460, 977, 'fs_members', 977, '2014-10-06 02:23:59'),
(461, 977, 'fs_members', 975, '2014-10-06 02:24:33'),
(462, 977, 'fs_members', 972, '2014-10-06 02:24:52'),
(463, 136, 'fs_members', 975, '2014-10-06 04:39:19'),
(464, 978, 'fs_members', 975, '2014-10-06 04:49:55'),
(465, 994, 'fs_members', 975, '2014-10-06 05:46:07'),
(466, 1001, 'fs_members', 1001, '2014-10-06 21:51:52'),
(467, 975, 'postedlooks', 631, '2014-10-06 22:59:42'),
(468, 975, 'fs_members', 1001, '2014-10-06 23:26:06'),
(469, 1001, 'fs_members', 975, '2014-10-06 23:27:15'),
(470, 1001, 'postedlooks', 631, '2014-10-06 23:42:21'),
(471, 1001, 'fs_members', 136, '2014-10-07 01:48:30'),
(472, 754, 'postedlooks', 631, '2014-10-07 01:50:22'),
(473, 0, 'fs_members', 133, '2014-10-07 02:07:26'),
(474, 0, 'fs_members', 133, '2014-10-07 02:10:27'),
(475, 0, 'fs_members', 133, '2014-10-07 02:12:46'),
(476, 0, 'fs_members', 133, '2014-10-07 02:14:14'),
(477, 0, 'fs_members', 133, '2014-10-07 02:14:47'),
(478, 0, 'fs_members', 133, '2014-10-07 02:18:53'),
(479, 0, 'fs_members', 133, '2014-10-07 02:19:10'),
(480, 0, 'fs_members', 133, '2014-10-07 02:21:55'),
(481, 0, 'fs_members', 133, '2014-10-07 02:23:24'),
(482, 0, 'fs_members', 133, '2014-10-07 02:23:44'),
(483, 0, 'fs_members', 133, '2014-10-07 02:24:00'),
(484, 0, 'fs_members', 133, '2014-10-07 02:28:37'),
(485, 1001, 'fs_members', 143, '2014-10-07 02:33:57'),
(486, 1001, 'fs_members', 160, '2014-10-07 02:34:23'),
(487, 0, 'fs_members', 133, '2014-10-07 02:35:27'),
(488, 0, 'fs_members', 133, '2014-10-07 02:35:45'),
(489, 0, 'fs_members', 133, '2014-10-07 02:51:18'),
(490, 0, 'fs_members', 133, '2014-10-07 02:52:18'),
(491, 0, 'fs_members', 133, '2014-10-07 02:53:00'),
(492, 0, 'fs_members', 133, '2014-10-07 03:00:32'),
(493, 1001, 'fs_members', 133, '2014-10-07 03:03:54'),
(494, 0, 'fs_members', 133, '2014-10-07 03:07:10'),
(495, 0, 'fs_members', 133, '2014-10-07 03:34:14'),
(496, 0, 'fs_members', 133, '2014-10-07 03:48:28'),
(497, 1001, 'fs_members', 152, '2014-10-07 04:00:59'),
(498, 0, 'fs_members', 133, '2014-10-07 04:34:36'),
(499, 0, 'fs_members', 133, '2014-10-07 04:34:50'),
(500, 0, 'fs_members', 133, '2014-10-07 04:36:36'),
(501, 0, 'fs_members', 133, '2014-10-07 04:37:00'),
(502, 0, 'fs_members', 133, '2014-10-07 04:37:19'),
(503, 0, 'fs_members', 133, '2014-10-07 04:37:28'),
(504, 0, 'fs_members', 133, '2014-10-07 04:37:52'),
(505, 0, 'fs_members', 133, '2014-10-07 04:40:46'),
(506, 1001, 'postedlooks', 632, '2014-10-07 04:45:08'),
(507, 0, 'fs_members', 133, '2014-10-07 04:45:37'),
(508, 0, 'fs_members', 133, '2014-10-07 04:48:14'),
(509, 1002, 'fs_members', 1002, '2014-10-07 07:33:07'),
(510, 1002, 'fs_members', 136, '2014-10-07 07:40:34'),
(511, 1002, 'fs_postedarticles', 131, '2014-10-07 07:40:54'),
(512, 1002, 'fs_postedarticles', 132, '2014-10-07 07:44:49'),
(513, 1002, 'postedlooks', 633, '2014-10-07 07:45:56'),
(514, 1002, 'fs_postedarticles', 133, '2014-10-07 07:46:17'),
(515, 1001, 'fs_postedarticles', 127, '2014-10-07 09:48:44'),
(516, 1001, 'postedlooks', 634, '2014-10-07 23:00:52'),
(517, 1001, 'postedlooks', 633, '2014-10-07 23:29:30'),
(518, 1001, 'postedlooks', 635, '2014-10-08 00:50:15'),
(519, 1001, 'postedlooks', 636, '2014-10-08 00:56:15'),
(520, 1001, 'postedlooks', 637, '2014-10-08 00:59:38'),
(521, 1001, 'postedlooks', 0, '2014-10-08 01:41:55'),
(522, 1001, 'postedlooks', 0, '2014-10-08 01:41:56'),
(523, 1001, 'postedlooks', 0, '2014-10-08 01:41:58'),
(524, 1001, 'postedlooks', 0, '2014-10-08 01:42:04'),
(525, 0, 'fs_members', 133, '2014-10-08 02:55:11'),
(526, 0, 'fs_members', 133, '2014-10-08 02:55:38'),
(528, 1001, 'fs_postedarticles', 134, '2014-10-08 03:31:17'),
(529, 1001, 'fs_postedarticles', 0, '2014-10-08 03:31:20'),
(530, 0, 'fs_members', 133, '2014-10-08 04:07:00'),
(532, 1001, 'fs_postedarticles', 136, '2014-10-08 05:26:19'),
(533, 1001, 'fs_postedarticles', 137, '2014-10-08 05:26:55'),
(534, 1001, 'fs_postedarticles', 138, '2014-10-08 05:35:24'),
(536, 1003, 'fs_members', 136, '2014-10-08 19:26:00'),
(537, 1003, 'fs_members', 1004, '2014-10-08 21:24:36'),
(538, 1003, 'fs_members', 1003, '2014-10-08 21:29:30'),
(539, 1003, 'postedlooks', 638, '2014-10-09 01:27:24'),
(540, 1007, 'postedlooks', 638, '2014-10-09 01:27:59'),
(541, 0, 'fs_members', 133, '2014-10-09 02:54:38'),
(542, 0, 'fs_members', 133, '2014-10-09 03:13:05'),
(543, 0, 'fs_members', 133, '2014-10-09 03:14:31'),
(544, 0, 'fs_members', 133, '2014-10-09 03:15:02'),
(545, 0, 'fs_members', 133, '2014-10-09 03:16:39'),
(546, 0, 'fs_members', 133, '2014-10-09 03:17:19'),
(547, 0, 'fs_members', 133, '2014-10-09 03:30:46'),
(548, 0, 'fs_members', 133, '2014-10-09 03:31:46'),
(549, 0, 'fs_members', 133, '2014-10-09 03:34:21'),
(550, 0, 'fs_members', 133, '2014-10-09 03:37:30'),
(551, 0, 'fs_members', 133, '2014-10-09 03:38:43'),
(552, 0, 'fs_members', 133, '2014-10-09 03:39:35'),
(553, 0, 'fs_members', 133, '2014-10-09 03:40:13'),
(554, 0, 'fs_members', 133, '2014-10-09 03:47:21'),
(555, 0, 'fs_members', 133, '2014-10-09 03:51:02'),
(556, 0, 'fs_members', 133, '2014-10-09 03:53:42'),
(557, 0, 'fs_members', 133, '2014-10-09 03:53:56'),
(558, 0, 'fs_members', 133, '2014-10-09 03:54:08'),
(559, 0, 'fs_members', 133, '2014-10-09 03:56:41'),
(560, 0, 'fs_members', 133, '2014-10-09 03:57:36'),
(561, 0, 'fs_members', 133, '2014-10-09 23:25:54'),
(562, 0, 'fs_members', 133, '2014-10-09 23:38:31'),
(563, 1007, 'fs_members', 187, '2014-10-09 23:39:49'),
(564, 1007, 'fs_members', 188, '2014-10-09 23:39:51'),
(565, 0, 'fs_members', 133, '2014-10-10 00:22:06'),
(566, 0, 'fs_members', 133, '2014-10-10 00:23:41'),
(567, 0, 'fs_members', 133, '2014-10-10 00:23:57'),
(568, 1007, 'fs_members', 1007, '2014-10-10 00:28:40'),
(569, 0, 'fs_members', 133, '2014-10-10 00:37:25'),
(570, 0, 'fs_members', 133, '2014-10-10 00:38:55'),
(571, 0, 'fs_members', 133, '2014-10-10 00:40:19'),
(572, 0, 'fs_members', 133, '2014-10-10 00:40:43'),
(573, 0, 'fs_members', 133, '2014-10-10 00:44:56'),
(574, 0, 'fs_members', 133, '2014-10-10 00:47:55'),
(575, 0, 'fs_members', 133, '2014-10-10 00:51:40'),
(576, 0, 'fs_members', 133, '2014-10-10 01:15:08'),
(577, 0, 'fs_members', 133, '2014-10-10 01:16:22'),
(578, 0, 'fs_members', 133, '2014-10-10 01:16:43'),
(579, 0, 'fs_members', 133, '2014-10-10 01:18:40'),
(580, 1007, 'postedlooks', 571, '2014-10-10 05:11:51'),
(581, 1007, 'fs_members', 136, '2014-10-10 07:54:46'),
(582, 1007, 'fs_postedarticles', 139, '2014-10-10 07:55:00'),
(583, 1007, 'fs_postedarticles', 136, '2014-10-12 23:00:45'),
(584, 1007, 'fs_postedarticles', 138, '2014-10-12 23:00:53'),
(585, 1007, 'fs_postedarticles', 137, '2014-10-12 23:00:56'),
(586, 754, 'postedlooks', 639, '2014-10-12 23:18:24'),
(587, 1007, 'postedlooks', 538, '2014-10-13 00:14:43'),
(588, 1007, 'fs_postedarticles', 140, '2014-10-13 01:06:19'),
(589, 1007, 'fs_postedarticles', 141, '2014-10-13 01:13:01'),
(590, 1007, 'fs_postedarticles', 142, '2014-10-13 01:14:40'),
(591, 1007, 'fs_postedarticles', 143, '2014-10-13 01:15:54'),
(592, 1007, 'fs_postedarticles', 144, '2014-10-13 01:16:55'),
(593, 1007, 'fs_postedarticles', 145, '2014-10-13 01:18:55'),
(594, 1007, 'fs_postedarticles', 146, '2014-10-13 01:20:42'),
(595, 1007, 'fs_postedarticles', 147, '2014-10-13 01:21:43'),
(596, 1007, 'fs_postedarticles', 148, '2014-10-13 01:23:39'),
(597, 1007, 'fs_members', 1003, '2014-10-13 02:52:26'),
(598, 1006, 'fs_members', 1007, '2014-10-13 03:04:36'),
(599, 1006, 'fs_members', 1006, '2014-10-13 03:06:07'),
(600, 1007, 'fs_members', 1006, '2014-10-13 03:06:14'),
(601, 1006, 'postedlooks', 640, '2014-10-13 23:57:23'),
(602, 1006, 'fs_members', 136, '2014-10-13 23:57:35'),
(603, 1006, 'fs_postedarticles', 149, '2014-10-13 23:57:59'),
(604, 972, 'fs_members', 1007, '2014-10-14 00:11:31'),
(605, 1006, 'fs_postedarticles', 150, '2014-10-14 00:29:34'),
(606, 1006, 'postedlooks', 641, '2014-10-14 00:29:58'),
(607, 972, 'fs_members', 1006, '2014-10-14 01:21:49'),
(608, 136, 'fs_members', 1006, '2014-10-14 03:49:36'),
(609, 754, 'fs_members', 1006, '2014-10-14 04:16:04'),
(610, 1006, 'postedlooks', 642, '2014-10-14 04:16:59'),
(611, 1006, 'fs_postedarticles', 151, '2014-10-14 04:22:49'),
(612, 1006, 'postedlooks', 643, '2014-10-14 21:44:45'),
(613, 0, 'fs_members', 133, '2014-10-14 21:48:37'),
(614, 1006, 'fs_postedarticles', 59, '2014-10-14 21:49:34'),
(615, 1006, 'fs_members', 968, '2014-10-14 21:49:44'),
(616, 1007, 'fs_postedarticles', 59, '2014-10-14 22:05:54'),
(617, 1007, 'postedlooks', 643, '2014-10-14 22:07:14'),
(618, 136, 'fs_member_profile_pic', 698, '2014-10-14 22:13:22'),
(619, 754, 'fs_postedarticles', 59, '2014-10-14 22:15:51'),
(620, 1007, 'postedlooks', 644, '2014-10-14 22:50:29'),
(621, 0, 'fs_members', 133, '2014-10-15 00:21:00'),
(622, 0, 'fs_members', 133, '2014-10-15 01:40:53'),
(623, 0, 'fs_members', 133, '2014-10-15 01:41:36'),
(624, 0, 'fs_members', 133, '2014-10-15 01:42:04'),
(625, 0, 'fs_members', 133, '2014-10-15 01:43:18'),
(626, 0, 'fs_members', 133, '2014-10-15 01:44:22'),
(627, 0, 'fs_members', 133, '2014-10-15 01:44:37'),
(628, 0, 'fs_members', 133, '2014-10-15 01:50:52'),
(629, 0, 'fs_members', 133, '2014-10-15 01:50:55'),
(630, 0, 'fs_members', 133, '2014-10-15 01:52:58'),
(631, 0, 'fs_members', 133, '2014-10-15 01:55:49'),
(632, 1007, 'postedlooks', 641, '2014-10-15 23:17:50'),
(633, 1007, 'postedlooks', 640, '2014-10-15 23:17:57'),
(634, 1007, 'postedlooks', 642, '2014-10-15 23:18:08'),
(635, 1006, 'postedlooks', 644, '2014-10-16 02:47:47'),
(636, 754, 'postedlooks', 644, '2014-10-16 02:47:49'),
(637, 754, 'fs_postedarticles', 150, '2014-10-16 03:01:23'),
(638, 1007, 'fs_postedarticles', 150, '2014-10-16 03:01:35'),
(639, 1006, 'postedlooks', 423, '2014-10-16 03:39:29'),
(640, 1006, 'postedlooks', 421, '2014-10-16 03:39:49'),
(641, 1007, 'postedlooks', 417, '2014-10-16 03:45:25'),
(642, 1007, 'postedlooks', 421, '2014-10-16 03:48:40'),
(649, 1007, 'fs_member_profile_pic', 698, '2014-10-16 04:04:10'),
(650, 1006, 'postedlooks', 417, '2014-10-16 04:04:42'),
(651, 754, 'postedlooks', 417, '2014-10-16 04:04:44'),
(652, 136, 'fs_member_profile_pic', 652, '2014-10-16 04:11:03'),
(653, 136, 'fs_member_profile_pic', 4, '2014-10-16 04:12:22'),
(654, 977, 'fs_member_profile_pic', 698, '2014-10-16 04:14:52'),
(655, 0, 'fs_members', 133, '2014-10-16 04:16:33'),
(656, 1006, 'fs_member_profile_pic', 697, '2014-10-16 04:17:31'),
(657, 1006, 'fs_member_profile_pic', 654, '2014-10-16 04:29:32'),
(658, 1006, 'fs_member_profile_pic', 662, '2014-10-16 04:39:42'),
(659, 1006, 'fs_member_profile_pic', 698, '2014-10-16 04:39:45'),
(660, 1007, 'fs_member_profile_pic', 0, '2014-10-17 00:24:42'),
(661, 1007, 'postedlooks', 645, '2014-10-17 02:19:58'),
(662, 1007, 'postedlooks', 646, '2014-10-17 03:03:32'),
(663, 1007, 'postedlooks', 647, '2014-10-17 03:21:17'),
(664, 1007, 'fs_postedarticles', 152, '2014-10-17 03:24:44'),
(665, 1006, 'fs_postedarticles', 152, '2014-10-17 03:27:31'),
(666, 1006, 'fs_postedarticles', 144, '2014-10-17 03:27:38'),
(667, 754, 'fs_postedarticles', 144, '2014-10-17 03:28:46'),
(668, 754, 'fs_postedarticles', 152, '2014-10-17 03:28:52'),
(669, 1006, 'fs_postedarticles', 148, '2014-10-17 03:30:16'),
(670, 1006, 'fs_postedarticles', 146, '2014-10-17 03:30:25'),
(671, 754, 'fs_postedarticles', 146, '2014-10-17 03:31:13'),
(672, 754, 'fs_postedarticles', 148, '2014-10-17 03:31:17'),
(673, 972, 'fs_postedarticles', 148, '2014-10-17 03:31:37'),
(674, 754, 'fs_member_profile_pic', 0, '2014-10-17 04:29:17'),
(675, 754, 'fs_member_profile_pic', 656, '2014-10-17 04:29:46'),
(676, 1007, 'postedlooks', 648, '2014-10-17 04:33:38'),
(677, 1007, 'fs_postedarticles', 153, '2014-10-17 04:35:32'),
(678, 1006, 'fs_member_profile_pic', 0, '2014-10-17 05:04:27'),
(679, 1006, 'fs_postedarticles', 154, '2014-10-17 05:05:00'),
(680, 1007, 'fs_postedarticles', 154, '2014-10-19 23:19:07'),
(681, 1007, 'postedlooks', 0, '2014-10-19 23:28:30'),
(682, 1007, 'postedlooks', 0, '2014-10-19 23:28:34'),
(683, 1007, 'fs_postedarticles', 151, '2014-10-20 00:18:51'),
(684, 1007, 'fs_postedarticles', 149, '2014-10-20 00:18:57'),
(685, 1007, 'fs_member_profile_pic', 699, '2014-10-20 01:06:18'),
(686, 1007, 'postedlooks', 420, '2014-10-20 01:27:57'),
(687, 1006, 'fs_member_profile_pic', 699, '2014-10-20 03:19:50'),
(688, 1007, 'fs_postedarticles', 155, '2014-10-20 04:51:51'),
(689, 1007, 'fs_postedarticles', 156, '2014-10-20 04:52:35'),
(690, 1007, 'fs_member_profile_pic', 656, '2014-10-20 04:55:38'),
(691, 0, 'fs_members', 133, '2014-10-23 00:48:34'),
(692, 0, 'fs_members', 133, '2014-10-23 00:48:37'),
(693, 1007, 'fs_member_profile_pic', 30, '2014-10-27 03:40:03'),
(694, 1008, 'fs_member_profile_pic', 700, '2014-10-30 20:13:18'),
(695, 1008, 'fs_member_profile_pic', 697, '2014-10-30 23:24:44'),
(696, 1008, 'fs_member_profile_pic', 699, '2014-10-30 23:24:46'),
(697, 1006, 'fs_member_profile_pic', 700, '2014-10-30 23:33:58'),
(698, 1008, 'fs_postedarticles', 154, '2014-10-30 23:49:39'),
(699, 1008, 'fs_postedarticles', 151, '2014-10-30 23:52:26'),
(700, 1008, 'postedlooks', 460, '2014-10-30 23:56:13'),
(701, 1008, 'fs_postedarticles', 150, '2014-10-31 00:01:33'),
(702, 1008, 'fs_postedarticles', 149, '2014-10-31 00:01:38'),
(703, 1008, 'postedlooks', 459, '2014-10-31 00:02:25'),
(704, 1008, 'postedlooks', 458, '2014-10-31 00:02:29'),
(705, 1008, 'postedlooks', 457, '2014-10-31 00:03:04'),
(706, 1008, 'postedlooks', 456, '2014-10-31 00:03:07'),
(707, 1008, 'postedlooks', 442, '2014-10-31 00:42:03'),
(708, 1008, 'postedlooks', 430, '2014-10-31 00:43:36'),
(709, 1008, 'postedlooks', 426, '2014-10-31 03:22:30'),
(710, 1008, 'postedlooks', 403, '2014-10-31 03:22:36'),
(711, 1008, 'postedlooks', 402, '2014-10-31 03:22:51'),
(712, 1008, 'postedlooks', 645, '2014-10-31 03:23:43'),
(713, 975, 'postedlooks', 645, '2014-11-02 23:37:59'),
(714, 975, 'fs_postedarticles', 151, '2014-11-02 23:45:44'),
(715, 975, 'fs_member_profile_pic', 667, '2014-11-02 23:48:43'),
(716, 975, 'fs_member_profile_pic', 656, '2014-11-02 23:48:53'),
(717, 136, 'fs_member_profile_pic', 0, '2014-11-03 01:40:09'),
(718, 136, 'postedlooks', 645, '2014-11-03 01:40:29'),
(719, 136, 'fs_postedarticles', 151, '2014-11-03 03:37:55'),
(720, 136, 'postedlooks', 644, '2014-11-03 03:46:39'),
(721, 136, 'fs_postedarticles', 154, '2014-11-03 05:02:21'),
(722, 977, 'fs_postedarticles', 151, '2014-11-03 05:06:12'),
(723, 975, 'postedlooks', 644, '2014-11-03 05:43:03'),
(724, 975, 'postedlooks', 648, '2014-11-03 05:43:06'),
(725, 975, 'fs_postedarticles', 150, '2014-11-03 05:43:09'),
(726, 975, 'fs_postedarticles', 149, '2014-11-03 05:46:39'),
(727, 975, 'fs_postedarticles', 154, '2014-11-03 05:46:43'),
(728, 975, 'postedlooks', 647, '2014-11-03 05:48:39'),
(729, 975, 'postedlooks', 646, '2014-11-03 05:48:47'),
(730, 975, 'fs_member_profile_pic', 699, '2014-11-03 06:06:35'),
(731, 975, 'fs_member_profile_pic', 697, '2014-11-03 06:13:09'),
(732, 975, 'fs_postedarticles', 85, '2014-11-03 06:45:25'),
(733, 975, 'fs_postedarticles', 84, '2014-11-03 06:45:30'),
(734, 975, 'fs_postedarticles', 155, '2014-11-03 06:50:47'),
(735, 975, 'fs_postedarticles', 153, '2014-11-03 06:50:55'),
(736, 975, 'fs_postedarticles', 152, '2014-11-03 06:50:59'),
(737, 975, 'fs_postedarticles', 0, '2014-11-03 06:51:20'),
(738, 975, 'fs_postedarticles', 148, '2014-11-03 06:51:27'),
(739, 975, 'fs_postedarticles', 147, '2014-11-03 06:53:13'),
(740, 975, 'fs_postedarticles', 146, '2014-11-03 06:53:25'),
(741, 975, 'fs_postedarticles', 145, '2014-11-03 06:53:30'),
(742, 1006, 'postedlooks', 645, '2014-11-03 21:37:05'),
(743, 1006, 'fs_member_profile_pic', 143, '2014-11-03 21:49:49'),
(744, 977, 'fs_member_profile_pic', 668, '2014-11-03 22:25:50'),
(745, 975, 'fs_member_profile_pic', 668, '2014-11-03 22:26:10'),
(746, 977, 'postedlooks', 649, '2014-11-03 22:27:03'),
(747, 975, 'postedlooks', 649, '2014-11-03 22:27:17'),
(748, 1006, 'postedlooks', 649, '2014-11-03 22:27:41'),
(749, 975, 'postedlooks', 650, '2014-11-03 22:53:13'),
(750, 975, 'postedlooks', 651, '2014-11-03 22:53:36'),
(751, 975, 'postedlooks', 652, '2014-11-03 22:57:09'),
(752, 975, 'postedlooks', 653, '2014-11-03 23:01:06'),
(753, 975, 'postedlooks', 654, '2014-11-03 23:01:22'),
(754, 975, 'fs_member_profile_pic', 0, '2014-11-03 23:03:58'),
(755, 975, 'postedlooks', 655, '2014-11-04 01:22:52'),
(756, 975, 'postedlooks', 656, '2014-11-04 01:29:26'),
(757, 136, 'fs_member_profile_pic', 697, '2014-11-04 02:28:48'),
(758, 136, 'fs_member_profile_pic', 656, '2014-11-04 02:31:16'),
(759, 136, 'postedlooks', 536, '2014-11-04 02:31:43'),
(760, 136, 'postedlooks', 396, '2014-11-04 02:32:14'),
(761, 136, 'postedlooks', 395, '2014-11-04 02:34:39'),
(762, 136, 'postedlooks', 423, '2014-11-04 02:35:26'),
(763, 1006, 'postedlooks', 646, '2014-11-04 02:38:10'),
(764, 136, 'fs_postedarticles', 150, '2014-11-04 02:50:57'),
(765, 136, 'fs_postedarticles', 149, '2014-11-04 02:54:55'),
(766, 136, 'postedlooks', 460, '2014-11-04 02:55:35'),
(767, 1006, 'postedlooks', 647, '2014-11-04 03:00:33'),
(768, 1006, 'postedlooks', 648, '2014-11-04 03:00:37'),
(769, 136, 'postedlooks', 456, '2014-11-04 03:01:18'),
(770, 136, 'postedlooks', 457, '2014-11-04 03:01:20'),
(771, 1006, 'fs_postedarticles', 145, '2014-11-04 03:01:33'),
(772, 1006, 'postedlooks', 656, '2014-11-04 03:01:44'),
(773, 136, 'postedlooks', 442, '2014-11-04 03:11:26'),
(774, 136, 'postedlooks', 430, '2014-11-04 03:11:35'),
(775, 136, 'postedlooks', 458, '2014-11-04 03:22:28'),
(776, 136, 'postedlooks', 464, '2014-11-04 03:22:37'),
(777, 136, 'postedlooks', 656, '2014-11-04 03:23:13'),
(778, 136, 'postedlooks', 655, '2014-11-04 03:24:32'),
(779, 136, 'postedlooks', 631, '2014-11-04 03:25:27'),
(780, 136, 'postedlooks', 625, '2014-11-04 03:25:36'),
(781, 136, 'postedlooks', 624, '2014-11-04 03:25:41'),
(782, 136, 'postedlooks', 623, '2014-11-04 03:25:50'),
(783, 136, 'fs_postedarticles', 85, '2014-11-04 03:33:39'),
(784, 136, 'fs_postedarticles', 84, '2014-11-04 03:34:01'),
(785, 136, 'fs_postedarticles', 83, '2014-11-04 03:34:09'),
(786, 136, 'fs_postedarticles', 82, '2014-11-04 03:34:15'),
(787, 975, 'postedlooks', 460, '2014-11-04 03:35:38'),
(788, 975, 'postedlooks', 638, '2014-11-04 03:41:44'),
(789, 975, 'fs_postedarticles', 143, '2014-11-04 03:44:01'),
(790, 975, 'postedlooks', 639, '2014-11-04 03:44:11'),
(791, 975, 'postedlooks', 535, '2014-11-04 03:44:28'),
(792, 975, 'fs_postedarticles', 144, '2014-11-04 03:46:27'),
(793, 136, 'postedlooks', 646, '2014-11-04 04:36:08'),
(794, 136, 'fs_postedarticles', 145, '2014-11-04 05:00:05'),
(795, 136, 'fs_member_profile_pic', 699, '2014-11-04 05:10:29'),
(796, 136, 'fs_postedarticles', 155, '2014-11-04 05:10:59'),
(797, 136, 'fs_postedarticles', 156, '2014-11-04 05:12:06'),
(798, 136, 'fs_postedarticles', 152, '2014-11-04 05:12:10'),
(799, 136, 'fs_postedarticles', 148, '2014-11-04 05:12:14'),
(800, 1006, 'postedlooks', 535, '2014-11-04 05:16:33'),
(801, 1006, 'postedlooks', 616, '2014-11-04 05:26:59'),
(802, 1013, 'postedlooks', 535, '2014-11-05 01:52:20'),
(803, 1013, 'postedlooks', 638, '2014-11-05 01:54:29'),
(804, 1013, 'postedlooks', 534, '2014-11-05 02:02:49'),
(805, 1013, 'fs_postedarticles', 145, '2014-11-05 02:04:24'),
(806, 1013, 'fs_postedarticles', 144, '2014-11-05 02:04:35'),
(807, 1013, 'fs_postedarticles', 139, '2014-11-05 02:04:49'),
(808, 1013, 'fs_postedarticles', 140, '2014-11-05 02:04:55'),
(809, 1006, 'fs_postedarticles', 139, '2014-11-05 02:09:04'),
(810, 1013, 'fs_member_profile_pic', 701, '2014-11-05 04:31:24'),
(811, 1013, 'fs_member_profile_pic', 147, '2014-11-05 06:00:25'),
(812, 1006, 'fs_member_profile_pic', 147, '2014-11-05 06:44:17'),
(813, 1013, 'fs_member_profile_pic', 697, '2014-11-05 06:45:12'),
(814, 1013, 'fs_postedarticles', 154, '2014-11-05 06:45:21'),
(815, 1013, 'postedlooks', 645, '2014-11-05 06:54:06'),
(816, 1013, 'fs_member_profile_pic', 0, '2014-11-05 19:35:57'),
(817, 136, 'fs_postedarticles', 139, '2014-11-05 20:07:47'),
(818, 136, 'fs_member_profile_pic', 256, '2014-11-05 21:25:13'),
(819, 975, 'postedlooks', 640, '2014-11-05 22:00:16'),
(820, 975, 'postedlooks', 643, '2014-11-05 22:00:23'),
(821, 975, 'fs_postedarticles', 88, '2014-11-06 02:23:39'),
(822, 975, 'postedlooks', 417, '2014-11-06 03:33:06'),
(823, 1008, 'fs_postedarticles', 144, '2014-11-07 02:54:31'),
(824, 975, 'postedlooks', 657, '2014-11-07 03:00:40'),
(825, 975, 'postedlooks', 642, '2014-11-07 04:30:46'),
(826, 1006, 'fs_member_profile_pic', 667, '2014-11-10 21:51:42'),
(827, 1006, 'fs_member_profile_pic', 628, '2014-11-10 21:52:43'),
(828, 954, 'fs_member_profile_pic', 697, '2014-11-10 22:28:52'),
(829, 954, 'fs_member_profile_pic', 628, '2014-11-10 22:40:32'),
(830, 954, 'postedlooks', 645, '2014-11-10 23:09:05'),
(831, 954, 'fs_member_profile_pic', 699, '2014-11-10 23:09:17'),
(833, 954, 'fs_member_profile_pic', 654, '2014-11-10 23:48:36'),
(834, 954, 'fs_postedarticles', 55, '2014-11-11 00:21:16'),
(835, 954, 'fs_postedarticles', 51, '2014-11-11 00:21:21'),
(837, 954, 'fs_postedarticles', 52, '2014-11-11 00:21:34'),
(838, 954, 'fs_postedarticles', 46, '2014-11-11 00:21:41'),
(839, 954, 'postedlooks', 646, '2014-11-11 00:21:59'),
(840, 954, 'postedlooks', 644, '2014-11-11 00:22:34'),
(841, 954, 'postedlooks', 648, '2014-11-11 00:22:37'),
(842, 954, 'postedlooks', 647, '2014-11-11 00:22:40'),
(843, 954, 'fs_postedarticles', 38, '2014-11-11 00:29:48'),
(844, 954, 'fs_member_profile_pic', 0, '2014-11-11 00:30:07'),
(845, 954, 'fs_postedarticles', 157, '2014-11-11 00:30:38'),
(846, 954, 'fs_postedarticles', 50, '2014-11-11 00:31:00'),
(847, 954, 'fs_postedarticles', 40, '2014-11-11 00:50:00'),
(848, 954, 'fs_postedarticles', 39, '2014-11-11 00:50:27'),
(849, 954, 'fs_postedarticles', 54, '2014-11-11 00:50:31'),
(850, 954, 'fs_postedarticles', 53, '2014-11-11 01:35:07'),
(852, 954, 'fs_postedarticles', 35, '2014-11-11 01:41:47'),
(853, 954, 'fs_postedarticles', 49, '2014-11-11 02:12:58'),
(854, 954, 'fs_postedarticles', 18, '2014-11-11 08:01:58'),
(855, 954, 'fs_member_profile_pic', 700, '2014-11-11 22:21:02'),
(856, 954, 'fs_postedarticles', 22, '2014-11-11 22:36:20'),
(857, 136, 'fs_postedarticles', 22, '2014-11-11 22:42:44'),
(858, 954, 'postedlooks', 657, '2014-11-11 22:46:03'),
(859, 954, 'postedlooks', 656, '2014-11-11 23:06:32'),
(860, 954, 'postedlooks', 655, '2014-11-11 23:32:54'),
(861, 954, 'fs_postedarticles', 151, '2014-11-11 23:33:50'),
(862, 954, 'fs_postedarticles', 150, '2014-11-11 23:35:58'),
(863, 954, 'fs_postedarticles', 149, '2014-11-11 23:36:30'),
(864, 954, 'postedlooks', 631, '2014-11-12 00:36:25'),
(865, 954, 'postedlooks', 526, '2014-11-12 01:10:24'),
(866, 954, 'postedlooks', 515, '2014-11-12 01:10:58'),
(867, 954, 'postedlooks', 505, '2014-11-12 01:13:18'),
(868, 954, 'postedlooks', 514, '2014-11-12 01:13:33'),
(869, 954, 'postedlooks', 506, '2014-11-12 01:13:43'),
(870, 954, 'postedlooks', 513, '2014-11-12 01:13:49'),
(871, 954, 'fs_member_profile_pic', 656, '2014-11-12 01:45:25'),
(872, 954, 'fs_postedarticles', 89, '2014-11-12 01:45:37'),
(873, 954, 'fs_postedarticles', 102, '2014-11-12 01:47:19'),
(874, 954, 'fs_postedarticles', 97, '2014-11-12 01:47:23'),
(875, 1015, 'fs_member_profile_pic', 702, '2014-11-12 01:51:12'),
(876, 954, 'fs_member_profile_pic', 702, '2014-11-12 01:51:38'),
(877, 954, 'postedlooks', 661, '2014-11-12 01:52:17'),
(878, 1015, 'postedlooks', 662, '2014-11-12 01:52:52'),
(879, 1015, 'fs_member_profile_pic', 0, '2014-11-12 01:53:02'),
(880, 1015, 'fs_postedarticles', 158, '2014-11-12 01:53:17'),
(881, 1015, 'fs_postedarticles', 160, '2014-11-12 01:53:42'),
(883, 1015, 'fs_member_profile_pic', 628, '2014-11-12 02:48:47'),
(884, 1015, 'postedlooks', 661, '2014-11-12 21:47:36'),
(885, 1015, 'fs_postedarticles', 157, '2014-11-12 21:48:51'),
(886, 954, 'fs_postedarticles', 160, '2014-11-12 22:32:36'),
(887, 954, 'postedlooks', 642, '2014-11-12 23:05:33'),
(888, 1015, 'postedlooks', 526, '2014-11-13 00:14:46'),
(889, 1015, 'fs_member_profile_pic', 143, '2014-11-13 00:16:00'),
(890, 1015, 'fs_postedarticles', 126, '2014-11-13 00:16:10'),
(891, 1015, 'postedlooks', 639, '2014-11-13 00:16:40'),
(892, 1015, 'postedlooks', 535, '2014-11-13 00:17:02'),
(893, 1015, 'postedlooks', 534, '2014-11-13 00:17:06'),
(894, 1015, 'postedlooks', 663, '2014-11-13 00:17:45'),
(895, 1015, 'fs_postedarticles', 48, '2014-11-13 00:18:39'),
(897, 1015, 'fs_postedarticles', 46, '2014-11-13 00:40:30'),
(899, 1015, 'fs_postedarticles', 44, '2014-11-13 00:41:31'),
(900, 954, 'postedlooks', 456, '2014-11-13 00:55:30'),
(901, 954, 'postedlooks', 442, '2014-11-13 00:59:48'),
(902, 954, 'postedlooks', 430, '2014-11-13 01:01:31'),
(903, 954, 'postedlooks', 426, '2014-11-13 01:01:40'),
(904, 954, 'fs_postedarticles', 139, '2014-11-13 01:03:20'),
(905, 954, 'fs_postedarticles', 145, '2014-11-13 01:03:55'),
(906, 954, 'postedlooks', 458, '2014-11-13 01:07:11'),
(907, 954, 'postedlooks', 662, '2014-11-13 01:09:15'),
(908, 954, 'postedlooks', 663, '2014-11-13 01:10:27'),
(909, 1015, 'postedlooks', 515, '2014-11-13 03:04:40'),
(910, 1015, 'postedlooks', 514, '2014-11-13 03:05:29'),
(911, 1015, 'postedlooks', 513, '2014-11-13 03:05:34'),
(912, 1015, 'postedlooks', 512, '2014-11-13 03:05:56'),
(913, 1015, 'fs_postedarticles', 51, '2014-11-13 03:11:33'),
(914, 1015, 'fs_postedarticles', 55, '2014-11-13 03:11:47'),
(915, 1015, 'fs_postedarticles', 20, '2014-11-13 03:12:17'),
(916, 954, 'fs_postedarticles', 31, '2014-11-14 00:32:49'),
(917, 954, 'fs_postedarticles', 44, '2014-11-14 00:32:54'),
(918, 1015, 'fs_member_profile_pic', 699, '2014-11-14 00:59:58'),
(919, 1015, 'fs_member_profile_pic', 656, '2014-11-14 01:00:10'),
(920, 1015, 'fs_member_profile_pic', 701, '2014-11-14 01:00:22'),
(921, 1015, 'fs_member_profile_pic', 697, '2014-11-14 01:00:40'),
(922, 1015, 'fs_member_profile_pic', 654, '2014-11-14 01:01:09'),
(923, 1015, 'postedlooks', 417, '2014-11-14 01:05:02'),
(924, 136, 'fs_postedarticles', 106, '2014-11-14 04:19:47'),
(925, 136, 'fs_member_profile_pic', 702, '2014-11-14 04:19:50'),
(926, 136, 'fs_postedarticles', 49, '2014-11-14 04:19:59'),
(927, 136, 'postedlooks', 661, '2014-11-14 04:20:04'),
(928, 136, 'fs_member_profile_pic', 628, '2014-11-14 04:35:49'),
(929, 954, 'fs_postedarticles', 107, '2014-11-14 05:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `garments`
--

CREATE TABLE IF NOT EXISTS `garments` (
`gno` int(11) NOT NULL,
  `cat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifyme`
--

CREATE TABLE IF NOT EXISTS `notifyme` (
`nno` bigint(25) NOT NULL,
  `mno` bigint(25) NOT NULL,
  `plno` bigint(25) NOT NULL,
  `nsdate` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifyme`
--

INSERT INTO `notifyme` (`nno`, `mno`, `plno`, `nsdate`) VALUES
(10, 133, 760, '0000-00-00'),
(12, 809, 759, '0000-00-00'),
(8, 809, 760, '0000-00-00'),
(13, 809, 759, '0000-00-00'),
(14, 809, 336, '0000-00-00'),
(15, 809, 336, '0000-00-00'),
(16, 809, 336, '0000-00-00'),
(17, 676, 760, '0000-00-00'),
(18, 133, 819, '0000-00-00'),
(19, 133, 819, '0000-00-00'),
(20, 133, 819, '0000-00-00'),
(27, 819, 819, '0000-00-00'),
(28, 574, 844, '0000-00-00'),
(32, 682, 880, '0000-00-00'),
(33, 682, 916, '0000-00-00'),
(34, 809, 940, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `occasions`
--

CREATE TABLE IF NOT EXISTS `occasions` (
`pno` int(11) NOT NULL,
  `cat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patterns`
--

CREATE TABLE IF NOT EXISTS `patterns` (
`pno` int(11) NOT NULL,
  `cat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plc_replies`
--

CREATE TABLE IF NOT EXISTS `plc_replies` (
`plcrno` bigint(20) NOT NULL,
  `plcno` bigint(20) DEFAULT NULL,
  `mno` bigint(20) DEFAULT NULL,
  `date_` date DEFAULT NULL,
  `msg` text COLLATE utf8_unicode_ci,
  `love` bigint(20) DEFAULT NULL,
  `drip` bigint(20) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pltags`
--

CREATE TABLE IF NOT EXISTS `pltags` (
`pltno` bigint(20) NOT NULL,
  `plno` bigint(20) DEFAULT NULL,
  `tagcolor` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `brand` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `garment` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `material` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pattern` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occasion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `season` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `colors` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `style` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pl_drips`
--

CREATE TABLE IF NOT EXISTS `pl_drips` (
  `pldno` int(11) NOT NULL,
  `plno` int(11) NOT NULL,
  `mno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pl_loves`
--

CREATE TABLE IF NOT EXISTS `pl_loves` (
`pllno` bigint(20) NOT NULL,
  `plno` bigint(20) DEFAULT NULL,
  `mno` bigint(20) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postedlooks`
--

CREATE TABLE IF NOT EXISTS `postedlooks` (
`plno` bigint(25) NOT NULL,
  `mno` bigint(25) DEFAULT NULL,
  `date_` datetime NOT NULL,
  `lookName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lookAbout` text COLLATE utf8_unicode_ci NOT NULL,
  `article_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `occasion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `season` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `plkeyword` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tview` bigint(25) NOT NULL,
  `pltcomment` int(25) NOT NULL,
  `pltvotes` int(25) NOT NULL,
  `trating` int(25) NOT NULL,
  `pltoplookrating` int(25) NOT NULL,
  `tpercentage` float NOT NULL,
  `tdrip` int(25) NOT NULL,
  `tfavorite` int(25) NOT NULL,
  `tshare` int(25) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `pludate` datetime NOT NULL,
  `plus_blogger` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `gender` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Male'
) ENGINE=MyISAM AUTO_INCREMENT=222392 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `postedlooks`
--

INSERT INTO `postedlooks` (`plno`, `mno`, `date_`, `lookName`, `lookAbout`, `article_link`, `occasion`, `season`, `style`, `keyword`, `plkeyword`, `tview`, `pltcomment`, `pltvotes`, `trating`, `pltoplookrating`, `tpercentage`, `tdrip`, `tfavorite`, `tshare`, `active`, `pludate`, `plus_blogger`, `gender`) VALUES
(222391, 1022, '2015-10-09 08:16:05', 'asd', '<p>asdasd</p>', 'asd', 'companyevent,', 'summer,', 'Chic', 'undefined', '0', 2, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-09 08:16:05', 'Yes', 'Male'),
(222385, 1021, '2015-10-05 07:18:32', 'asd', '<p>asdasdasdasd</p>', '', 'companyevent,', 'spring,', 'Formal', 'undefined', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-05 07:18:32', 'Yes', 'Male'),
(222386, 1021, '2015-10-05 07:18:58', 'asd', '<p>asdasdasdasd</p>', '', 'companyevent,', 'spring,', 'Formal', 'undefined', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-05 07:18:58', 'Yes', 'Male'),
(222387, 1021, '2015-10-05 07:19:41', 'asdasd', '<p>asdasdas dasd', '', 'companyevent,', 'spring,', 'Casual', 'undefined', '0', 7, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-05 07:19:41', 'Yes', 'Male'),
(222388, 1022, '2015-10-06 06:28:51', 'asda', '<p>asdasda</p>', 'asd', 'companyevent,', 'summer,', 'Chic', 'undefined', '0', 21, 5, 4, 0, 0, 0, 0, 0, 0, 1, '2015-10-06 06:28:51', 'Yes', 'Male'),
(222389, 1021, '2015-10-08 08:39:01', 'asdasd', '<p>wdsdasda</p>', '', 'college,', 'spring,summer,', 'Casual', 'undefined', '0', 3, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-08 08:39:01', 'Yes', 'Female'),
(222390, 1021, '2015-10-09 08:09:47', 'asdasd', '<p>asdasd</p>', '', 'conference,', 'summer,spring,', 'Casual', 'undefined', '0', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-09 08:09:47', 'Yes', 'Female'),
(222383, 1022, '2015-10-05 07:17:31', 'asd', '<p>asdasdasdasd</p>', '', 'companyevent,', 'spring,', 'Chic', 'undefined', '0', 0, 0, 4, 0, 0, 0, 0, 0, 0, 1, '2015-10-05 07:17:31', 'Yes', 'Male'),
(222384, 1021, '2015-10-05 07:17:56', 'asd', '<p>asdasdasdasd</p>', '', 'companyevent,', 'spring,', 'Formal', 'undefined', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-05 07:17:56', 'Yes', 'Male'),
(222381, 1021, '2015-10-05 07:14:59', 'asd', '<p>asdasdasdasd</p>', '', 'companyevent,', 'spring,', 'Formal', 'undefined', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-10-05 07:14:59', 'Yes', 'Male'),
(222382, 1021, '2015-10-05 07:15:18', 'asd', '<p>asdasdasdasd</p>', '', 'companyevent,', 'spring,', 'Formal', 'undefined', '0', 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, '2015-10-05 07:15:18', 'Yes', 'Male'),
(222380, 1021, '2015-10-05 05:18:21', 'sadasd', '<p>asdasda</p>', '', 'conference,', 'spring,summer,', 'Casual', 'undefined', '0', 7, 1, 1, 0, 0, 0, 0, 1, 0, 1, '2015-10-05 05:18:21', 'Yes', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `posted_looks_comments`
--

CREATE TABLE IF NOT EXISTS `posted_looks_comments` (
`plcno` bigint(25) NOT NULL,
  `plno` bigint(25) DEFAULT NULL,
  `mno` bigint(25) DEFAULT NULL,
  `date_` datetime DEFAULT NULL,
  `msg` text COLLATE utf8_unicode_ci,
  `plctlikes` int(25) NOT NULL,
  `plctdislike` int(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=346 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posted_looks_comments`
--

INSERT INTO `posted_looks_comments` (`plcno`, `plno`, `mno`, `date_`, `msg`, `plctlikes`, `plctdislike`) VALUES
(344, 222388, 1021, '2015-10-07 05:34:02', '3', 0, 0),
(345, 222380, 1021, '2015-10-08 07:05:56', 'Test', 0, 0),
(343, 222388, 1021, '2015-10-07 05:34:01', '2', 0, 0),
(341, 222388, 1021, '2015-10-07 05:25:00', 'dasd', 0, 0),
(342, 222388, 1021, '2015-10-07 05:34:00', '1', 0, 0),
(340, 222388, 1021, '2015-10-07 05:22:56', 'TEST', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posted_looks_comments_like_dislike`
--

CREATE TABLE IF NOT EXISTS `posted_looks_comments_like_dislike` (
`plcldno` bigint(20) NOT NULL,
  `plcno` bigint(20) NOT NULL,
  `mno` bigint(20) NOT NULL,
  `plcld_action` varchar(20) NOT NULL,
  `plcld_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
`rno` bigint(25) NOT NULL,
  `mno` bigint(25) DEFAULT NULL,
  `plno` bigint(25) DEFAULT NULL,
  `rating` smallint(11) DEFAULT NULL,
  `date_` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
`rid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tarrival` int(50) NOT NULL,
  `darival` date NOT NULL,
  `ddeparture` date NOT NULL,
  `addinfo` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `person_num` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`rid`, `fname`, `lname`, `adress`, `email`, `tarrival`, `darival`, `ddeparture`, `addinfo`, `date`, `status`, `person_num`) VALUES
(27, 'Jerome', 'salac', 'mall', '15', 1, '0000-00-00', '0000-00-00', ' s                                        ', '2013-03-16', 'Standard Double', 2),
(29, 'Julia  ', 'Montes', 'zamora extension iligan city', 'jaqranarasalac@gmail.com', 1, '2013-03-07', '2013-03-08', '                                ', '2013-03-15', 'Standard Double', 2),
(30, 'Julia  ', 'Montes', 'zamora extension iligan city', 'jaqranarasalac@gmail.com', 1, '2013-03-07', '2013-03-08', '                                ', '2013-03-15', 'Standard Double', 2),
(31, 'se', 'asd', 'aghi', 'an@ahjjk.com', 1, '2013-03-07', '2013-03-05', '                                ', '2013-03-16', 'Standard Double', 2),
(32, 'caine', 'dadofalsa', 'ubaldo', 'cayndadz@gmail.com', 1, '2013-03-20', '2013-03-25', '                                ', '2013-03-16', 'Standard Single', 1),
(33, 'jesus', 'suarez', 'taytay', 'a@gmail.com', 9, '2013-03-04', '2013-03-13', 'Success... &)', '2013-03-16', 'Standard Double', 2),
(34, 'asd', 'asdas', 'asda', 'asdas', 12, '2013-03-01', '2013-03-13', '                                ', '2013-03-16', 'Standard Single', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE IF NOT EXISTS `reset` (
`id` int(11) NOT NULL,
  `what` varchar(50) NOT NULL,
  `time_reset` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset`
--

INSERT INTO `reset` (`id`, `what`, `time_reset`, `date`) VALUES
(1, 'look', '2015-10-09 03:17:29', '2015-10-09 13:41:45'),
(2, 'article', '2015-10-09 00:00:00', '2015-10-09 11:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE IF NOT EXISTS `seasons` (
`pno` int(11) NOT NULL,
  `cat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jesus Erwin Suarez', 'mrjesuserwinsuarez@gmail.com', '$2y$10$kBcVLhJwMP9GFbGOX/uGgerK14NCeS51BdVImEQKi8ytyYNn1uGIq', 'J285lgv4mYKGIAwKB1WDE5tQR4a2rNXa8ZvU4tbgqwGoC7FILUk66UyF1UdF', '2015-09-09 01:25:01', '2015-09-09 01:28:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
 ADD PRIMARY KEY (`ano`), ADD UNIQUE KEY `ano` (`ano`), ADD KEY `mno` (`mno`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`adm_no`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
 ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cm_spam_report`
--
ALTER TABLE `cm_spam_report`
 ADD PRIMARY KEY (`cmsr_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
 ADD PRIMARY KEY (`fno`), ADD KEY `FK_mno1` (`mno1`), ADD KEY `FK_mno2` (`mno2`);

--
-- Indexes for table `fs_brands`
--
ALTER TABLE `fs_brands`
 ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `fs_brand_category`
--
ALTER TABLE `fs_brand_category`
 ADD PRIMARY KEY (`bcno`);

--
-- Indexes for table `fs_brand_category_selected`
--
ALTER TABLE `fs_brand_category_selected`
 ADD PRIMARY KEY (`bcsno`);

--
-- Indexes for table `fs_brand_member_selected`
--
ALTER TABLE `fs_brand_member_selected`
 ADD PRIMARY KEY (`bmsno`);

--
-- Indexes for table `fs_cflag`
--
ALTER TABLE `fs_cflag`
 ADD PRIMARY KEY (`flagno`);

--
-- Indexes for table `fs_comment`
--
ALTER TABLE `fs_comment`
 ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `fs_drip_modals`
--
ALTER TABLE `fs_drip_modals`
 ADD PRIMARY KEY (`dmno`);

--
-- Indexes for table `fs_favorite_modals`
--
ALTER TABLE `fs_favorite_modals`
 ADD PRIMARY KEY (`fmno`);

--
-- Indexes for table `fs_flag`
--
ALTER TABLE `fs_flag`
 ADD PRIMARY KEY (`flno`);

--
-- Indexes for table `fs_follow`
--
ALTER TABLE `fs_follow`
 ADD PRIMARY KEY (`flno`);

--
-- Indexes for table `fs_info_advertise`
--
ALTER TABLE `fs_info_advertise`
 ADD PRIMARY KEY (`advertise_id`);

--
-- Indexes for table `fs_info_contact_us`
--
ALTER TABLE `fs_info_contact_us`
 ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `fs_invited`
--
ALTER TABLE `fs_invited`
 ADD PRIMARY KEY (`invited_id`);

--
-- Indexes for table `fs_invited_activity`
--
ALTER TABLE `fs_invited_activity`
 ADD PRIMARY KEY (`fs_invited_activity_id_pk`);

--
-- Indexes for table `fs_invited_location`
--
ALTER TABLE `fs_invited_location`
 ADD PRIMARY KEY (`fs_invited_location_id_pk`);

--
-- Indexes for table `fs_invited_queue`
--
ALTER TABLE `fs_invited_queue`
 ADD PRIMARY KEY (`fs_invited_queue_id_pk`);

--
-- Indexes for table `fs_keyword`
--
ALTER TABLE `fs_keyword`
 ADD PRIMARY KEY (`kno`);

--
-- Indexes for table `fs_look_flag`
--
ALTER TABLE `fs_look_flag`
 ADD PRIMARY KEY (`flr_no`);

--
-- Indexes for table `fs_look_votes`
--
ALTER TABLE `fs_look_votes`
 ADD PRIMARY KEY (`lvno`);

--
-- Indexes for table `fs_look_votes_details`
--
ALTER TABLE `fs_look_votes_details`
 ADD PRIMARY KEY (`lvdno`);

--
-- Indexes for table `fs_members`
--
ALTER TABLE `fs_members`
 ADD PRIMARY KEY (`mno`);

--
-- Indexes for table `fs_member_accounts`
--
ALTER TABLE `fs_member_accounts`
 ADD PRIMARY KEY (`mano`), ADD KEY `FK_mno3` (`mno`);

--
-- Indexes for table `fs_member_categories`
--
ALTER TABLE `fs_member_categories`
 ADD PRIMARY KEY (`mcno`);

--
-- Indexes for table `fs_member_profile_pic`
--
ALTER TABLE `fs_member_profile_pic`
 ADD PRIMARY KEY (`mppno`);

--
-- Indexes for table `fs_member_profile_view`
--
ALTER TABLE `fs_member_profile_view`
 ADD PRIMARY KEY (`mpvno`);

--
-- Indexes for table `fs_member_timeline`
--
ALTER TABLE `fs_member_timeline`
 ADD PRIMARY KEY (`mptno`);

--
-- Indexes for table `fs_message`
--
ALTER TABLE `fs_message`
 ADD PRIMARY KEY (`msgno`);

--
-- Indexes for table `fs_modal_attribute`
--
ALTER TABLE `fs_modal_attribute`
 ADD PRIMARY KEY (`matno`);

--
-- Indexes for table `fs_modal_attribute_cat`
--
ALTER TABLE `fs_modal_attribute_cat`
 ADD PRIMARY KEY (`matcno`);

--
-- Indexes for table `fs_newsletter_signups`
--
ALTER TABLE `fs_newsletter_signups`
 ADD PRIMARY KEY (`nlsno`);

--
-- Indexes for table `fs_notification`
--
ALTER TABLE `fs_notification`
 ADD PRIMARY KEY (`nno`);

--
-- Indexes for table `fs_plcm_dislike`
--
ALTER TABLE `fs_plcm_dislike`
 ADD PRIMARY KEY (`plcmdno`);

--
-- Indexes for table `fs_plcm_rdislike`
--
ALTER TABLE `fs_plcm_rdislike`
 ADD PRIMARY KEY (`rdno`);

--
-- Indexes for table `fs_plcm_reply`
--
ALTER TABLE `fs_plcm_reply`
 ADD PRIMARY KEY (`plcr_no`);

--
-- Indexes for table `fs_plcm_rflag`
--
ALTER TABLE `fs_plcm_rflag`
 ADD PRIMARY KEY (`rflagno`);

--
-- Indexes for table `fs_plcm_rlike`
--
ALTER TABLE `fs_plcm_rlike`
 ADD PRIMARY KEY (`rlno`);

--
-- Indexes for table `fs_pltag`
--
ALTER TABLE `fs_pltag`
 ADD PRIMARY KEY (`pltgno`);

--
-- Indexes for table `fs_postedarticles`
--
ALTER TABLE `fs_postedarticles`
 ADD PRIMARY KEY (`artno`);

--
-- Indexes for table `fs_postedmedia`
--
ALTER TABLE `fs_postedmedia`
 ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `fs_post_attribute`
--
ALTER TABLE `fs_post_attribute`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fs_rate_modals`
--
ALTER TABLE `fs_rate_modals`
 ADD PRIMARY KEY (`rmno`);

--
-- Indexes for table `fs_search`
--
ALTER TABLE `fs_search`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `fs_signup_code`
--
ALTER TABLE `fs_signup_code`
 ADD PRIMARY KEY (`scno`);

--
-- Indexes for table `fs_test`
--
ALTER TABLE `fs_test`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fs_top_data`
--
ALTER TABLE `fs_top_data`
 ADD PRIMARY KEY (`tdno`);

--
-- Indexes for table `fs_uname_change`
--
ALTER TABLE `fs_uname_change`
 ADD PRIMARY KEY (`uncno`);

--
-- Indexes for table `fs_view`
--
ALTER TABLE `fs_view`
 ADD PRIMARY KEY (`vno`);

--
-- Indexes for table `garments`
--
ALTER TABLE `garments`
 ADD PRIMARY KEY (`gno`);

--
-- Indexes for table `notifyme`
--
ALTER TABLE `notifyme`
 ADD PRIMARY KEY (`nno`);

--
-- Indexes for table `occasions`
--
ALTER TABLE `occasions`
 ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `patterns`
--
ALTER TABLE `patterns`
 ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `plc_replies`
--
ALTER TABLE `plc_replies`
 ADD PRIMARY KEY (`plcrno`), ADD KEY `FK_mno7` (`plcno`), ADD KEY `FK_mno8` (`mno`);

--
-- Indexes for table `pltags`
--
ALTER TABLE `pltags`
 ADD PRIMARY KEY (`pltno`), ADD KEY `plno` (`plno`);

--
-- Indexes for table `pl_loves`
--
ALTER TABLE `pl_loves`
 ADD PRIMARY KEY (`pllno`), ADD KEY `FK_mno5` (`mno`), ADD KEY `FK_mno6` (`plno`);

--
-- Indexes for table `postedlooks`
--
ALTER TABLE `postedlooks`
 ADD PRIMARY KEY (`plno`), ADD KEY `FK_mno4` (`mno`);

--
-- Indexes for table `posted_looks_comments`
--
ALTER TABLE `posted_looks_comments`
 ADD PRIMARY KEY (`plcno`), ADD KEY `FK_mno5` (`mno`), ADD KEY `FK_mno6` (`plno`);

--
-- Indexes for table `posted_looks_comments_like_dislike`
--
ALTER TABLE `posted_looks_comments_like_dislike`
 ADD PRIMARY KEY (`plcldno`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
 ADD PRIMARY KEY (`rno`), ADD KEY `FK_mno5` (`plno`), ADD KEY `FK_mno6` (`mno`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
 ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
MODIFY `ano` bigint(25) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1489;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `adm_no` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `cm_spam_report`
--
ALTER TABLE `cm_spam_report`
MODIFY `cmsr_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
MODIFY `fno` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=397;
--
-- AUTO_INCREMENT for table `fs_brands`
--
ALTER TABLE `fs_brands`
MODIFY `bno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=786;
--
-- AUTO_INCREMENT for table `fs_brand_category`
--
ALTER TABLE `fs_brand_category`
MODIFY `bcno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `fs_brand_category_selected`
--
ALTER TABLE `fs_brand_category_selected`
MODIFY `bcsno` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fs_brand_member_selected`
--
ALTER TABLE `fs_brand_member_selected`
MODIFY `bmsno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `fs_cflag`
--
ALTER TABLE `fs_cflag`
MODIFY `flagno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `fs_comment`
--
ALTER TABLE `fs_comment`
MODIFY `cno` int(25) NOT NULL AUTO_INCREMENT COMMENT 'id',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fs_drip_modals`
--
ALTER TABLE `fs_drip_modals`
MODIFY `dmno` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fs_favorite_modals`
--
ALTER TABLE `fs_favorite_modals`
MODIFY `fmno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fs_flag`
--
ALTER TABLE `fs_flag`
MODIFY `flno` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fs_follow`
--
ALTER TABLE `fs_follow`
MODIFY `flno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `fs_info_advertise`
--
ALTER TABLE `fs_info_advertise`
MODIFY `advertise_id` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fs_info_contact_us`
--
ALTER TABLE `fs_info_contact_us`
MODIFY `contact_us_id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fs_invited`
--
ALTER TABLE `fs_invited`
MODIFY `invited_id` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `fs_invited_activity`
--
ALTER TABLE `fs_invited_activity`
MODIFY `fs_invited_activity_id_pk` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=533;
--
-- AUTO_INCREMENT for table `fs_invited_location`
--
ALTER TABLE `fs_invited_location`
MODIFY `fs_invited_location_id_pk` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `fs_invited_queue`
--
ALTER TABLE `fs_invited_queue`
MODIFY `fs_invited_queue_id_pk` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `fs_keyword`
--
ALTER TABLE `fs_keyword`
MODIFY `kno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fs_look_flag`
--
ALTER TABLE `fs_look_flag`
MODIFY `flr_no` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fs_look_votes`
--
ALTER TABLE `fs_look_votes`
MODIFY `lvno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fs_look_votes_details`
--
ALTER TABLE `fs_look_votes_details`
MODIFY `lvdno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fs_members`
--
ALTER TABLE `fs_members`
MODIFY `mno` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1023;
--
-- AUTO_INCREMENT for table `fs_member_accounts`
--
ALTER TABLE `fs_member_accounts`
MODIFY `mano` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1006;
--
-- AUTO_INCREMENT for table `fs_member_categories`
--
ALTER TABLE `fs_member_categories`
MODIFY `mcno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `fs_member_profile_pic`
--
ALTER TABLE `fs_member_profile_pic`
MODIFY `mppno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1045;
--
-- AUTO_INCREMENT for table `fs_member_profile_view`
--
ALTER TABLE `fs_member_profile_view`
MODIFY `mpvno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `fs_member_timeline`
--
ALTER TABLE `fs_member_timeline`
MODIFY `mptno` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fs_message`
--
ALTER TABLE `fs_message`
MODIFY `msgno` int(25) NOT NULL AUTO_INCREMENT COMMENT 'the id';
--
-- AUTO_INCREMENT for table `fs_modal_attribute`
--
ALTER TABLE `fs_modal_attribute`
MODIFY `matno` int(25) NOT NULL AUTO_INCREMENT COMMENT 'primary key',AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `fs_modal_attribute_cat`
--
ALTER TABLE `fs_modal_attribute_cat`
MODIFY `matcno` int(25) NOT NULL AUTO_INCREMENT COMMENT 'primary key',AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fs_newsletter_signups`
--
ALTER TABLE `fs_newsletter_signups`
MODIFY `nlsno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `fs_notification`
--
ALTER TABLE `fs_notification`
MODIFY `nno` int(25) NOT NULL AUTO_INCREMENT COMMENT 'notification id',AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `fs_plcm_dislike`
--
ALTER TABLE `fs_plcm_dislike`
MODIFY `plcmdno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fs_plcm_rdislike`
--
ALTER TABLE `fs_plcm_rdislike`
MODIFY `rdno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fs_plcm_reply`
--
ALTER TABLE `fs_plcm_reply`
MODIFY `plcr_no` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT for table `fs_plcm_rflag`
--
ALTER TABLE `fs_plcm_rflag`
MODIFY `rflagno` bigint(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fs_plcm_rlike`
--
ALTER TABLE `fs_plcm_rlike`
MODIFY `rlno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fs_pltag`
--
ALTER TABLE `fs_pltag`
MODIFY `pltgno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=310;
--
-- AUTO_INCREMENT for table `fs_postedarticles`
--
ALTER TABLE `fs_postedarticles`
MODIFY `artno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `fs_postedmedia`
--
ALTER TABLE `fs_postedmedia`
MODIFY `media_id` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fs_post_attribute`
--
ALTER TABLE `fs_post_attribute`
MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fs_rate_modals`
--
ALTER TABLE `fs_rate_modals`
MODIFY `rmno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=327;
--
-- AUTO_INCREMENT for table `fs_search`
--
ALTER TABLE `fs_search`
MODIFY `sno` int(25) NOT NULL AUTO_INCREMENT COMMENT 'id',AUTO_INCREMENT=883;
--
-- AUTO_INCREMENT for table `fs_signup_code`
--
ALTER TABLE `fs_signup_code`
MODIFY `scno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `fs_test`
--
ALTER TABLE `fs_test`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fs_top_data`
--
ALTER TABLE `fs_top_data`
MODIFY `tdno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fs_uname_change`
--
ALTER TABLE `fs_uname_change`
MODIFY `uncno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fs_view`
--
ALTER TABLE `fs_view`
MODIFY `vno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=930;
--
-- AUTO_INCREMENT for table `garments`
--
ALTER TABLE `garments`
MODIFY `gno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `notifyme`
--
ALTER TABLE `notifyme`
MODIFY `nno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `occasions`
--
ALTER TABLE `occasions`
MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `patterns`
--
ALTER TABLE `patterns`
MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `plc_replies`
--
ALTER TABLE `plc_replies`
MODIFY `plcrno` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pltags`
--
ALTER TABLE `pltags`
MODIFY `pltno` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pl_loves`
--
ALTER TABLE `pl_loves`
MODIFY `pllno` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `postedlooks`
--
ALTER TABLE `postedlooks`
MODIFY `plno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=222392;
--
-- AUTO_INCREMENT for table `posted_looks_comments`
--
ALTER TABLE `posted_looks_comments`
MODIFY `plcno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=346;
--
-- AUTO_INCREMENT for table `posted_looks_comments_like_dislike`
--
ALTER TABLE `posted_looks_comments_like_dislike`
MODIFY `plcldno` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
MODIFY `rno` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `reset`
--
ALTER TABLE `reset`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
