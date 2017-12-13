-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Des 2017 pada 08.06
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
(2, 20, 1, 1, 'tes', '<p><img alt="" src="http://indonesiaone.org/wp-content/uploads/2017/03/Fenomena-Gojek-dan-Grab-Menjadi-Raksasa-Dunia-Transportasi-Online.jpg" style="height:108px; width:200px" /></p>\n\n<p>asdbasjdbasjdjasbjasdbjaskdkjasdsad</p>\n', NULL, '2017-12-10 16:27:08', '2017-12-10 16:27:08');

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
  `visitor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `course_title`
--

INSERT INTO `course_title` (`id_title`, `id_user`, `title`, `subject`, `description`, `thumbnail`, `created_at`, `last_update`, `verified`, `visitor`) VALUES
(1, 1, 'DUMMY LEARNING', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(2, 2, 'DUMMY LEARNING 2', 'mat', 'Ini dumy dummy dumy', 'e2.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(3, 3, 'DUMMY LEARNING 3', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(4, 3, 'DUMMY LEARNING 4', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(5, 1, 'DUMMY LEARNING 5', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(6, 3, 'DUMMY LEARNING 6', 'sjrh', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(7, 3, 'DUMMY LEARNING 7', 'sjrh', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(8, 3, 'DUMMY LEARNING 8', 'sjrh', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(9, 1, 'DUMMY LEARNING9', 'sjrh', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(10, 3, 'DUMMY LEARNING 10', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(11, 3, 'DUMMY LEARNING 11', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(12, 3, 'DUMMY LEARNING 12', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(13, 3, 'DUMMY LEARNING 13', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(14, 1, 'DUMMY LEARNING14', 'bi', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(15, 3, 'DUMMY LEARNING 15', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(16, 3, 'DUMMY LEARNING 122', 'mat', 'Ini dumy dummy dumy', 'dummy.jpg', '2017-12-07 18:39:31', '2017-12-08 20:48:52', 0, 0),
(17, 1, 'asdsa', 'bi', ' sadasdsad', 'e2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(18, 1, 'asadasdasadsdasd', 'bi', ' sadasdasdasdasdasd', 'e2.jpg', '2017-12-10 14:15:04', '2017-12-10 14:15:04', 0, 0),
(19, 1, 'asdsadsasda', 'sjrh', ' asdasdsadsadsadsa', 'motour2.png', '2017-12-10 14:17:20', '2017-12-10 14:17:20', 0, 0),
(20, 1, 'asdasdasdsadsad', 'bi', ' adsaasdsadsadasdsad', 'lokasi.png', '2017-12-10 14:18:44', '2017-12-10 14:18:44', 0, 0),
(21, 1, 'tes 1', 'mat', ' tes1 tes1tes1tes   tes1t', '99005-OLBLCU-379.jpg', '2017-12-10 14:45:27', '2017-12-10 14:45:27', 0, 0);

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
  `role` int(1) NOT NULL DEFAULT '0',
  `hash_validation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `name`, `city`, `bio`, `role`, `hash_validation`) VALUES
(1, 'yusronzain@gmail.com', 'yusron', 'yusron', 'yusron hanan', 'situbondo', 'mboh', 0, '09718937138ajknakjsjas'),
(2, 'qori@gmail.com', 'qori', 'qoriatul', 'Yusron', 'ngawi', 'ngawi coy', 0, ''),
(3, 'karin@gmail.com', 'karin', 'karin', 'karin', 'sda', 'sda', 0, ''),
(4, 'bayu@gmail.com', 'bayu', 'bayu', 'bayu', 'kdr', 'kdr', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_action`
--

CREATE TABLE `user_action` (
  `id_action` int(11) NOT NULL,
  `id_title` int(11) DEFAULT NULL,
  `id_qna` int(11) DEFAULT NULL,
  `from_id` int(11) NOT NULL,
  `from_username` varchar(40) NOT NULL,
  `type_action` int(2) NOT NULL,
  `text_comment` text,
  `status` int(2) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_following`
--

CREATE TABLE `user_following` (
  `id_following` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `follower_username` varchar(40) NOT NULL,
  `followed_username` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course_title`
--
ALTER TABLE `course_title`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
  MODIFY `id_action` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;