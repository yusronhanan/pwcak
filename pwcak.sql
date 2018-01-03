-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jan 2018 pada 02.32
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwcak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `config`
--

CREATE TABLE `config` (
  `id_config` int(11) NOT NULL,
  `code` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `text` text,
  `value` text,
  `img` text,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `config`
--

INSERT INTO `config` (`id_config`, `code`, `type`, `text`, `value`, `img`, `last_update`) VALUES
(1, 'sbj1', 'subject', 'Mathematic', 'mat', NULL, '2017-12-08 00:00:00'),
(2, 'sbj2', 'subject', 'BHS INDONESIA', 'bi', NULL, '2017-12-08 00:00:00'),
(3, 'sbj3', 'subject', 'Sejarah', 'sjrh', NULL, '2017-12-08 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_content`
--

CREATE TABLE `course_content` (
  `id_course` int(11) NOT NULL,
  `id_title` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `step_number` int(11) NOT NULL,
  `step_title` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `img` text,
  `created_at` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `course_content`
--

INSERT INTO `course_content` (`id_course`, `id_title`, `id_user`, `step_number`, `step_title`, `content`, `img`, `created_at`, `last_update`) VALUES
(2, 20, 1, 1, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\n\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\n', NULL, '2017-12-10 16:27:08', '2017-12-10 16:27:08'),
(3, 20, 1, 2, 'tes ini ke 2', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n<p> ini 2<?p>\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-10 16:27:08', '2017-12-10 16:27:08'),
(4, 20, 1, 4, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 13:40:27', '2017-12-14 13:40:27'),
(5, 20, 1, 5, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 13:42:52', '2017-12-14 13:42:52'),
(6, 20, 1, 6, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 13:43:12', '2017-12-14 13:43:12'),
(7, 20, 1, 7, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 13:43:17', '2017-12-14 13:43:17'),
(8, 20, 1, 8, 'tessss', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 13:46:19', '2017-12-14 13:46:19'),
(9, 20, 1, 9, 'tess', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 13:46:26', '2017-12-14 13:46:26'),
(10, 20, 1, 10, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 13:58:17', '2017-12-14 13:58:17'),
(11, 20, 1, 1, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 14:12:15', '2017-12-14 14:12:15'),
(12, 20, 1, 1, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 14:12:22', '2017-12-14 14:12:22'),
(13, 20, 1, 1, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 14:33:00', '2017-12-14 14:33:00'),
(14, 20, 1, 1, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&pound;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-14 20:22:17', '2017-12-14 20:22:17'),
(15, 20, 1, 8, 'tessss', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-21 15:12:04', '2017-12-21 15:12:04'),
(16, 20, 1, 8, 'tessss', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-21 15:13:26', '2017-12-21 15:13:26'),
(17, 20, 1, 11, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-21 15:13:54', '2017-12-21 15:13:54'),
(18, 20, 1, 12, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\r\n\r\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\r\n', NULL, '2017-12-21 15:14:14', '2017-12-21 15:14:14'),
(25, 24, 1, 6, 'Coba 6 simpa', '<p>asdasdasddsadssadsadasdsa</p>\r\n\r\n<p>update 1 sukses</p>\r\n', NULL, '2017-12-21 15:41:57', '2017-12-22 18:29:19'),
(26, 24, 1, 2, 'Coba 2 bkjbkj', '<p>&nbsp;</p>\r\n\r\n<div class="videoEmbed"><iframe allowfullscreen="" frameborder="0" height="349" mozallowfullscreen="" src="https://www.dailymotion.com/embed/video/x3yo51a" webkitallowfullscreen="" width="560"></iframe></div>\r\n\r\n<p><iframe allowfullscreen="" frameborder="0" height="360" src="https://www.youtube.com/embed/Ddnb968cuuY" width="640"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>asdasdsadasdasdasdsadsa</p>\r\n\r\n<p>asdasdasddsadssadsadasdsa</p>\r\n', NULL, '2017-12-21 15:44:27', '2017-12-28 10:30:04'),
(27, 24, 1, 3, 'Coba 3 aa', '<p>asdasdasddsadssadsadasdsa</p>\r\n', NULL, '2017-12-21 15:44:35', '2017-12-22 18:29:10'),
(29, 24, 1, 5, 'Coba 1 simpan', '<p>asdasdasddsadssadsadasdsa</p>\r\n\r\n<p>update 1 sukses</p>\r\n', NULL, '2017-12-22 10:09:12', '2017-12-22 10:21:07'),
(30, 26, 1, 1, 'SS', '<p>AASD</p>\r\n', NULL, '2017-12-22 16:23:54', '2017-12-22 16:23:54'),
(31, 24, 1, 7, 'Coba 7', '<p>asdasdasddsadssadsadasdsa</p>\r\n', NULL, '2017-12-22 17:36:20', '2017-12-22 18:19:22'),
(32, 24, 1, 8, 'tes 8 newstep', '<p>asdasdasdasdasdsad</p>\r\n', NULL, '2017-12-22 18:20:11', '2017-12-22 21:07:29'),
(33, 1, 1, 1, 'bla1aa', '<p>aklsdnaskldnkaslasmdpsla;dsadsad</p>\r\n', NULL, '2017-12-23 13:15:20', '2017-12-24 20:25:45'),
(34, 1, 1, 2, 'bla 2', '<p>kasdjlasnkdsadsadsad</p>\r\n', NULL, '2017-12-23 13:15:35', '2017-12-23 13:15:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_title`
--

CREATE TABLE `course_title` (
  `id_title` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `description` varchar(25) NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `verified` int(2) NOT NULL DEFAULT '0',
  `visitor` int(11) NOT NULL,
  `random_code` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `course_title`
--

INSERT INTO `course_title` (`id_title`, `id_user`, `title`, `subject`, `description`, `thumbnail`, `created_at`, `last_update`, `verified`, `visitor`, `random_code`) VALUES
(2, 2, 'DUMMY LEARNING 2', 'mat', 'Ini dumy dummy dumy', 'e2.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, '989asdjk'),
(3, 3, 'DUMMY LEARNING 3', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, '8y18jads'),
(4, 3, 'DUMMY LEARNING 4', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, 'jsadjh78a'),
(5, 1, 'DUMMY LEARNING 5', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, 'yqwyiqw'),
(6, 3, 'DUMMY LEARNING 6', 'sjrh', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, 'sahdjksa'),
(7, 3, 'DUMMY LEARNING 7', 'sjrh', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, '7761sadh'),
(8, 3, 'DUMMY LEARNING 8', 'sjrh', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, 'sajasd812'),
(9, 1, 'DUMMY LEARNING9', 'sjrh', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, 'jgdhsdg83'),
(10, 3, 'DUMMY LEARNING 10', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, 'aaaa233q1'),
(11, 3, 'DUMMY LEARNING 11', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, 'sadasda34'),
(12, 3, 'DUMMY LEARNING 12', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, '23eeassda'),
(13, 3, 'DUMMY LEARNING 13', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, '2311123sad'),
(14, 1, 'DUMMY LEARNING14', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, 'asdsad23e4'),
(15, 3, 'DUMMY LEARNING 15', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, 'asdsadsa2q'),
(16, 3, 'DUMMY LEARNING 122', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0, '423e32aad'),
(17, 1, 'asdsa', 'bi', ' sadasdsad', 'e2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '3qeq3DDsds'),
(18, 1, 'asadasdasadsdasd', 'bi', ' sadasdasdasdasdasd', 'e2.jpg', '2017-12-10 14:15:04', '2017-12-10 14:15:04', 0, 0, 'FFGS2356'),
(19, 1, 'asdsadsasda', 'sjrh', ' asdasdsadsadsadsa', 'motour2.png', '2017-12-10 14:17:20', '2017-12-10 14:17:20', 0, 0, 'SHAJKD88'),
(20, 1, 'asdasdasdsadsad', 'bi', ' adsaasdsadsadasdsad', 'lokasi.png', '2017-12-10 14:18:44', '2017-12-10 14:18:44', 0, 0, 'asssajh890'),
(21, 1, 'tes 1', 'mat', ' tes1 tes1tes1tes   tes1t', '99005-OLBLCU-379.jpg', '2017-12-10 14:45:27', '2017-12-10 14:45:27', 0, 0, 'ansdhsa89'),
(23, 1, 'title test 2', 'mat', ' adsasdsdsd', 'DEPAN1.png', '2017-12-21 15:15:54', '2017-12-21 15:15:54', 0, 0, 'asdsadq24sd'),
(24, 1, 'dcaatitle course', 'mat', ' adsaaasasdasdAAAd', 'BELAKANG1.png', '2017-12-21 15:28:34', '2017-12-22 22:55:53', 0, 487, 'DB1EzYWA7qJ'),
(25, 1, 'tes lagi 3', 'mat', ' adsadasasd', '204.jpg', '2017-12-21 15:33:55', '2017-12-21 15:33:55', 0, 0, 'EfKOv81GU56'),
(26, 1, 'dasdas', 'bi', ' asdasds', '2041.jpg', '2017-12-22 16:12:10', '2017-12-22 16:12:10', 0, 0, 'G2B7nfbRjhV'),
(27, 1, 'coba add via /username', 'mat', ' asdsadasd', 'movingTowardHealthierU_icon.jpg', '2017-12-25 10:43:04', '2017-12-25 10:43:04', 0, 0, 'YzDSJPr1kaQ'),
(28, 1, 'coba test helper', 'mat', ' assadasdsasad', 'movingTowardHealthierU_icon1.jpg', '2017-12-28 10:30:45', '2017-12-28 10:30:45', 0, 0, 'cUMqvu2TpXz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE `notification` (
  `id_notif` int(11) NOT NULL,
  `id_action` int(11) NOT NULL,
  `for_id` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notification`
--

INSERT INTO `notification` (`id_notif`, `id_action`, `for_id`, `status`) VALUES
(6, 399, 0, 0),
(8, 401, 0, 0),
(17, 415, 0, 0),
(22, 420, 0, 0),
(24, 435, 1, 1),
(25, 435, 3, 1),
(26, 444, 3, 1),
(27, 445, 2, 0),
(28, 446, 3, 1),
(29, 446, 2, 0),
(33, 450, 3, 1),
(34, 452, 3, 1),
(35, 453, 3, 1),
(36, 454, 3, 1),
(38, 456, 3, 1),
(42, 460, 3, 1),
(44, 462, 2, 0),
(46, 464, 4, 0),
(48, 466, 2, 0),
(51, 469, 2, 0),
(52, 470, 2, 0),
(53, 471, 3, 1),
(54, 471, 2, 0),
(55, 471, 4, 0),
(56, 472, 3, 1),
(57, 472, 2, 0),
(58, 479, 3, 1),
(59, 479, 2, 0),
(60, 481, 3, 1),
(61, 481, 2, 0),
(62, 481, 4, 0),
(63, 482, 3, 1),
(64, 482, 2, 0),
(65, 482, 4, 0),
(66, 483, 3, 1),
(67, 483, 2, 0),
(68, 485, 3, 1),
(69, 485, 2, 0),
(70, 488, 3, 1),
(71, 488, 2, 0),
(72, 488, 4, 0),
(73, 489, 2, 0),
(74, 490, 3, 0),
(75, 490, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `qna`
--

CREATE TABLE `qna` (
  `id_qna` int(11) NOT NULL,
  `question` text NOT NULL,
  `subject` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `visitor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `qna`
--

INSERT INTO `qna` (`id_qna`, `question`, `subject`, `created_at`, `visitor`) VALUES
(1, 'What dummy dumm data?', 'mat', '2017-12-09 00:00:00', 0),
(2, 'What dummy dummy dummy dummy dummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummydummy data?', 'mat', '2017-12-09 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `photo` varchar(200) NOT NULL DEFAULT 'github.png',
  `role` int(1) NOT NULL DEFAULT '0',
  `hash_validation` text NOT NULL,
  `created_at` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `name`, `city`, `bio`, `photo`, `role`, `hash_validation`, `created_at`, `last_update`) VALUES
(1, 'yusronzain@gmail.com', 'yusron', 'yusron', 'Yusron Hanan Zain Vidi Imtinan', 'malang - situbond', 'web developerrr', 'DEPAN5.png', 1, '09718937138ajknakjsjas', '0000-00-00 00:00:00', '2017-12-26 10:53:57'),
(2, 'qori@gmail.com', 'qori', 'qoriatul', 'Yusron', 'ngawi', 'ngawi coy', 'github.png', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'karin@gmail.com', 'karin', 'karin', 'karin', 'sda', 'sda', 'github.png', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'bayu@gmail.com', 'bayu', 'bayu', 'bayu', 'kdr', 'kdr', 'github.png', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_action`
--

CREATE TABLE `user_action` (
  `id_action` int(11) NOT NULL,
  `id_title` int(11) DEFAULT NULL,
  `from_id` int(11) NOT NULL,
  `from_username` varchar(40) NOT NULL,
  `for_id` int(11) NOT NULL,
  `type_action` int(2) NOT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `text_comment` text,
  `status` int(2) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_action`
--

INSERT INTO `user_action` (`id_action`, `id_title`, `from_id`, `from_username`, `for_id`, `type_action`, `reply_id`, `subject`, `text_comment`, `status`, `created_at`) VALUES
(399, 3, 3, 'karin', 3, 0, NULL, NULL, NULL, 0, '2018-01-01 16:25:24'),
(401, 4, 3, 'karin', 3, 0, NULL, NULL, NULL, 0, '2018-01-01 16:26:26'),
(403, 6, 3, 'karin', 3, 0, NULL, NULL, NULL, 0, '2018-01-01 16:26:48'),
(406, 10, 3, 'karin', 3, 0, NULL, NULL, NULL, 0, '2018-01-01 16:26:51'),
(415, 24, 3, 'karin', 1, 4, 83, NULL, NULL, 0, '2018-01-01 16:56:29'),
(420, 24, 3, 'karin', 2, 4, 176, NULL, NULL, 0, '2018-01-01 17:03:05'),
(421, 24, 3, 'karin', 1, 1, NULL, 'coba 1', 'cobaa2', 0, '2018-01-01 17:44:10'),
(435, 24, 2, 'qori', 1, 1, NULL, 'aasd', 'adsasd', 0, '2018-01-01 18:02:49'),
(436, 24, 2, 'qori', 1, 3, 2, 'asd', 'asasdasasdsa', 0, '2018-01-01 18:14:18'),
(437, 24, 2, 'qori', 1, 3, 2, 'asd', 'asasdasasdsa', 0, '2018-01-01 18:14:18'),
(438, 24, 2, 'qori', 1, 3, 2, 'asd', 'asasdasasdsa', 0, '2018-01-01 18:14:19'),
(439, 24, 2, 'qori', 1, 3, 2, 'asd', 'asasdasasdsa', 0, '2018-01-01 18:14:24'),
(440, 24, 2, 'qori', 1, 3, 2, 'asd', 'asasdasasdsa', 0, '2018-01-01 18:14:24'),
(441, 24, 2, 'qori', 1, 3, 435, 'asd', 'asdasdasd', 0, '2018-01-01 18:14:57'),
(442, 24, 2, 'qori', 1, 3, 435, 'asdas', 'adasdasd', 0, '2018-01-01 18:15:11'),
(443, 24, 2, 'qori', 1, 3, 435, 'asd', 'asdasdasd', 0, '2018-01-01 18:17:44'),
(444, 24, 2, 'qori', 1, 3, 421, 'asdsa', 'asdasdasds2222', 0, '2018-01-01 18:18:16'),
(445, 24, 4, 'bayu', 2, 2, 444, NULL, NULL, 0, '2018-01-01 18:19:37'),
(446, 24, 4, 'bayu', 1, 3, 421, 'asdas222', 'asdasdasd', 0, '2018-01-01 18:19:45'),
(450, 6, 1, 'yusron', 3, 0, NULL, NULL, NULL, 0, '2018-01-02 06:55:41'),
(451, 9, 1, 'yusron', 1, 0, NULL, NULL, NULL, 0, '2018-01-02 06:55:42'),
(452, 10, 1, 'yusron', 3, 0, NULL, NULL, NULL, 0, '2018-01-02 06:55:42'),
(453, 13, 1, 'yusron', 3, 0, NULL, NULL, NULL, 0, '2018-01-02 06:55:45'),
(454, 3, 1, 'yusron', 3, 0, NULL, NULL, NULL, 0, '2018-01-02 06:55:49'),
(456, 7, 1, 'yusron', 3, 0, NULL, NULL, NULL, 0, '2018-01-02 06:55:54'),
(460, 4, 1, 'yusron', 3, 0, NULL, NULL, NULL, 0, '2018-01-02 06:56:00'),
(462, 24, 1, 'yusron', 2, 4, 444, NULL, NULL, 0, '2018-01-02 06:56:41'),
(464, 24, 1, 'yusron', 4, 4, 446, NULL, NULL, 0, '2018-01-02 06:56:42'),
(466, 24, 1, 'yusron', 2, 4, 435, NULL, NULL, 0, '2018-01-02 06:56:45'),
(469, 24, 1, 'yusron', 2, 2, 441, NULL, NULL, 0, '2018-01-02 06:56:47'),
(471, 24, 1, 'yusron', 1, 3, 421, 'sad', 'sadsasad', 0, '2018-01-02 06:57:04'),
(472, 24, 1, 'yusron', 1, 1, NULL, 'asd', 'sadasdas', 0, '2018-01-02 06:57:08'),
(473, 24, 1, 'yusron', 1, 3, 1, 'sad', 'sadsadsad', 0, '2018-01-02 06:57:13'),
(474, 24, 1, 'yusron', 1, 3, 1, 'sad', 'sadsadsad', 0, '2018-01-02 06:57:13'),
(475, 24, 1, 'yusron', 1, 3, 1, 'sad', 'sadsadsad', 0, '2018-01-02 06:57:14'),
(476, 24, 1, 'yusron', 1, 3, 1, 'sad', 'sadsadsad', 0, '2018-01-02 06:57:14'),
(477, 24, 1, 'yusron', 1, 3, 1, 'sad', 'sadsadsad', 0, '2018-01-02 06:57:14'),
(478, 24, 1, 'yusron', 1, 3, 1, 'sad', 'sadsadsad', 0, '2018-01-02 06:57:19'),
(479, 24, 1, 'yusron', 1, 1, NULL, '', '', 0, '2018-01-02 06:57:56'),
(480, 24, 1, 'yusron', 1, 3, 1, 'asd', 'asdasdsad', 0, '2018-01-02 06:58:08'),
(481, 24, 1, 'yusron', 1, 3, 421, 'asd', 'asdsad', 0, '2018-01-02 07:03:46'),
(482, 24, 1, 'yusron', 1, 3, 421, 'sad', 'sadasd', 0, '2018-01-02 07:03:54'),
(483, 24, 1, 'yusron', 1, 1, NULL, 'asd', 'asdsadasdsa', 0, '2018-01-02 07:04:05'),
(484, 24, 1, 'yusron', 1, 3, 1, 'asd2222', 'saddassadsadasasd', 0, '2018-01-02 07:04:24'),
(485, 24, 1, 'yusron', 1, 1, NULL, 'asd', 'sadasasdsda', 0, '2018-01-02 07:09:55'),
(486, 24, 1, 'yusron', 1, 3, 485, 'ads', 'sadasdsa', 0, '2018-01-02 07:10:04'),
(487, 24, 1, 'yusron', 1, 3, 485, 'asd', 'asdasd', 0, '2018-01-02 07:10:17'),
(488, 24, 1, 'yusron', 1, 3, 421, 'asd', 'sadasdsad', 0, '2018-01-02 07:10:21'),
(489, 2, 3, 'karin', 2, 0, NULL, NULL, NULL, 0, '2018-01-02 08:19:21'),
(490, 24, 1, 'yusron', 1, 1, NULL, 'asd', 'asdasd', 0, '2018-01-03 06:41:38'),
(491, 24, 1, 'yusron', 1, 3, 490, 'asd', 'asdasd', 0, '2018-01-03 06:41:42'),
(493, 24, 1, 'yusron', 1, 4, 491, NULL, NULL, 0, '2018-01-03 06:41:44'),
(495, 24, 1, 'yusron', 1, 4, 490, NULL, NULL, 0, '2018-01-03 06:41:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_subscribe`
--

CREATE TABLE `user_subscribe` (
  `id_subscribe` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `for_id` int(11) NOT NULL,
  `from_username` varchar(40) NOT NULL,
  `for_username` varchar(40) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_subscribe`
--

INSERT INTO `user_subscribe` (`id_subscribe`, `from_id`, `for_id`, `from_username`, `for_username`, `status`, `created_at`) VALUES
(8, 1, 3, 'yusron', 'karin', 1, '2017-12-24 23:04:32'),
(9, 4, 3, 'bayu', 'karin', 1, '2017-12-24 23:05:14'),
(23, 3, 3, 'karin', 'karin', 1, '2017-12-31 10:12:08'),
(26, 2, 1, 'qori', 'yusron', 1, '2017-12-31 10:34:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id_config`);

--
-- Indexes for table `course_content`
--
ALTER TABLE `course_content`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `course_title`
--
ALTER TABLE `course_title`
  ADD PRIMARY KEY (`id_title`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id_qna`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_action`
--
ALTER TABLE `user_action`
  ADD PRIMARY KEY (`id_action`);

--
-- Indexes for table `user_subscribe`
--
ALTER TABLE `user_subscribe`
  ADD PRIMARY KEY (`id_subscribe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course_content`
--
ALTER TABLE `course_content`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `course_title`
--
ALTER TABLE `course_title`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id_qna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_action`
--
ALTER TABLE `user_action`
  MODIFY `id_action` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=496;
--
-- AUTO_INCREMENT for table `user_subscribe`
--
ALTER TABLE `user_subscribe`
  MODIFY `id_subscribe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
