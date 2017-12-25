-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Des 2017 pada 11.03
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
(26, 24, 1, 2, 'Coba 2 bkjbkj', '<p>asdasdasddsadssadsadasdsa</p>\r\n', NULL, '2017-12-21 15:44:27', '2017-12-22 22:57:18'),
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
(1, 1, 'DUMMY LEARNING', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 3, '67hsjaha'),
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
(24, 1, 'dcaatitle course', 'mat', ' adsaaasasdasdAAAd', 'BELAKANG1.png', '2017-12-21 15:28:34', '2017-12-22 22:55:53', 0, 43, 'DB1EzYWA7qJ'),
(25, 1, 'tes lagi 3', 'mat', ' adsadasasd', '204.jpg', '2017-12-21 15:33:55', '2017-12-21 15:33:55', 0, 0, 'EfKOv81GU56'),
(26, 1, 'dasdas', 'bi', ' asdasds', '2041.jpg', '2017-12-22 16:12:10', '2017-12-22 16:12:10', 0, 0, 'G2B7nfbRjhV'),
(27, 1, 'coba add via /username', 'mat', ' asdsadasd', 'movingTowardHealthierU_icon.jpg', '2017-12-25 10:43:04', '2017-12-25 10:43:04', 0, 0, 'YzDSJPr1kaQ');

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
(1, 'yusronzain@gmail.com', 'yusron', 'yusron', 'Yusron Hanan Zain Vidi Imtinan', 'malang - situbond', 'web developerrr', 'DEPAN5.png', 0, '09718937138ajknakjsjas', '0000-00-00 00:00:00', '2017-12-25 10:43:58'),
(2, 'qori@gmail.com', 'qori', 'qoriatul', 'Yusron', 'ngawi', 'ngawi coy', 'github.png', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
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
  `reply_comment` int(11) DEFAULT NULL,
  `text_comment` text,
  `status` int(2) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_action`
--

INSERT INTO `user_action` (`id_action`, `id_title`, `from_id`, `from_username`, `for_id`, `type_action`, `reply_comment`, `text_comment`, `status`, `created_at`) VALUES
(53, 3, 1, 'yusron', 3, 0, NULL, NULL, 1, '2017-12-23 20:39:26'),
(67, 20, 1, 'yusron', 1, 0, NULL, NULL, 1, '2017-12-24 12:32:01'),
(69, 9, 1, 'yusron', 1, 0, NULL, NULL, 1, '2017-12-24 15:14:38'),
(74, 5, 1, 'yusron', 1, 0, NULL, NULL, 1, '2017-12-24 20:42:06'),
(77, 6, 1, 'yusron', 3, 0, NULL, NULL, 1, '2017-12-24 20:46:44'),
(78, 4, 1, 'yusron', 3, 0, NULL, NULL, 1, '2017-12-24 20:46:50'),
(79, 10, 1, 'yusron', 3, 0, NULL, NULL, 1, '2017-12-24 20:46:54'),
(80, 4, 3, 'karin', 3, 0, NULL, NULL, 1, '2017-12-24 20:47:10'),
(81, 6, 3, 'karin', 3, 0, NULL, NULL, 1, '2017-12-24 20:47:19'),
(82, 3, 3, 'karin', 3, 0, NULL, NULL, 1, '2017-12-24 20:48:53');

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
(7, 3, 1, 'karin', 'yusron', 1, '2017-12-24 23:03:50'),
(8, 1, 3, 'yusron', 'karin', 1, '2017-12-24 23:04:32'),
(9, 4, 3, 'bayu', 'karin', 1, '2017-12-24 23:05:14');

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
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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
  MODIFY `id_action` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `user_subscribe`
--
ALTER TABLE `user_subscribe`
  MODIFY `id_subscribe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
