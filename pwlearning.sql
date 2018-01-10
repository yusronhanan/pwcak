-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jan 2018 pada 15.29
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwlearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `broadcast`
--

CREATE TABLE `broadcast` (
  `id_broadcast` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `text` text NOT NULL,
  `link` text,
  `thumbnail` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(5) NOT NULL,
  `id_title` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `text_comment` text NOT NULL,
  `reply_id` int(5) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_comment`, `id_title`, `id_user`, `subject`, `text_comment`, `reply_id`, `created_at`) VALUES
(1, 1, 1, 'integral tak tentu dengan tentu?', 'Apa yang benar2 membedakan integral tak tentu dengan tentu?', 0, '2018-01-09 23:52:21'),
(3, 1, 2, 'asd', 'asdasd', 1, '2018-01-10 00:11:52'),
(4, 1, 2, 'asd', 'asdasd', 1, '2018-01-10 00:11:53'),
(5, 1, 2, 'asd', 'asdasd', 1, '2018-01-10 00:11:54'),
(6, 1, 2, 'asd', 'asdasd', 1, '2018-01-10 00:11:54'),
(7, 1, 2, 'asd', 'asdasd', 1, '2018-01-10 00:11:55'),
(8, 1, 2, 'asd', 'asdasd', 1, '2018-01-10 00:15:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `config`
--

CREATE TABLE `config` (
  `id_config` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `code` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `text` text,
  `img` text,
  `created_at` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `config`
--

INSERT INTO `config` (`id_config`, `id_user`, `code`, `type`, `text`, `img`, `created_at`, `last_update`) VALUES
(1, 0, 'sbj1', 'subject', 'Matematika', NULL, '2018-01-09 00:00:00', '2018-01-09 00:00:00'),
(2, 0, 'sbj2', 'subject', 'BHS Indonesia', NULL, '2018-01-09 00:00:00', '2018-01-09 00:00:00'),
(3, 0, 'sbj3', 'subject', 'BHS Inggris', NULL, '2018-01-09 00:00:00', '2018-01-09 00:00:00'),
(4, 0, 'sbj4', 'subject', 'Sejarah', NULL, '2018-01-09 00:00:00', '2018-01-09 00:00:00'),
(5, 0, 'slide1', 'slide', 'Go to future with sharing education', NULL, '2018-01-09 00:00:00', '2018-01-09 00:00:00'),
(6, 0, 'slide2', 'slide', 'Reach success with sharing education', NULL, '2018-01-09 00:00:00', '2018-01-09 00:00:00'),
(7, 0, 'slide3', 'slide', 'Learning, learning, and learning.', NULL, '2018-01-09 00:00:00', '2018-01-09 00:00:00'),
(8, 0, 'sld_img1', 'slide image', NULL, 'bg6.jpg', '2018-01-09 00:00:00', '2018-01-09 00:00:00'),
(9, 0, 'sld_img2', 'slide image', NULL, 'bg66.jpg', '2018-01-09 00:00:00', '2018-01-09 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_content`
--

CREATE TABLE `course_content` (
  `id_course` int(5) NOT NULL,
  `id_title` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `step_number` int(5) NOT NULL,
  `step_title` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `course_content`
--

INSERT INTO `course_content` (`id_course`, `id_title`, `id_user`, `step_number`, `step_title`, `content`, `created_at`, `last_update`) VALUES
(1, 1, 1, 1, 'Pengertian Integral', '<p>Coba kalian perhatikan gambar kubah di bawah ini! Tahukah kalian bagaimana cara menentukan luas dan volume dari kubah tersebut ? Ternyata konsep-konsep integral yang akan kita pelajari dapat menolong untuk menyelesaikan permasalahan tersebut. Integral merupakan salah satu bahasan dalam kalkulus yang merupakan cabang matematika.</p>\r\n\r\n<p><img alt="" height="300" src="https://ilmuhitung.com/wp-content/uploads/2017/01/kubah-png.png" width="367" /></p>\r\n\r\n<p><img alt="" height="300" src="http://ilmuhitung.com/wp-content/uploads/2017/01/kubah-png.png" width="367" /></p>\r\n\r\n<p>Untuk mengetahui pengertian integral, akan lebih mudah jika kita pahami dulu materi turunan yang telah dipelajari sebelumnya.</p>\r\n\r\n<p>Definisi :</p>\r\n\r\n<p>Integral merupakan antiturunan, sehingga jika terdapat fungsi F(x) yang kontinu pada interval [<em>a, b</em>] diperoleh&nbsp;<img alt="\\frac{d(F(x))}{dx}" src="https://s0.wp.com/latex.php?latex=%5Cfrac%7Bd%28F%28x%29%29%7D%7Bdx%7D&amp;bg=ffffff&amp;fg=000&amp;s=0" title="\\frac{d(F(x))}{dx}" />&nbsp;= F&rsquo;(<em>x</em>) =&nbsp;<em>f</em>(<em>x</em>). Antiturunan dari&nbsp;<em>f</em>(<em>x</em>) adalah mencari fungsi yang turunannya adalah&nbsp;<em>f</em>&nbsp;(<em>x</em>), ditulis</p>\r\n\r\n<p><img alt="\\int fx\\textrm{ dx}" src="https://s0.wp.com/latex.php?latex=%5Cint+fx%5Ctextrm%7B+dx%7D&amp;bg=ffffff&amp;fg=000&amp;s=0" title="\\int fx\\textrm{ dx}" /></p>\r\n\r\n<p>Secara umum dapat kita tuliskan :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Catatan:</p>\r\n\r\n<p><img alt="\\int" src="https://s0.wp.com/latex.php?latex=%5Cint&amp;bg=ffffff&amp;fg=000&amp;s=0" title="\\int" />&nbsp;<em>f</em>(<em>x</em>) d<em>x</em>&nbsp;: disebut unsur integrasi, dibaca &rdquo; integral&nbsp;<em>f</em>(<em>x</em>) terhadap&nbsp;<em>x</em>&rdquo;</p>\r\n\r\n<p><em>f</em>(<em>x</em>) : disebut integran (yang diitegralkan)</p>\r\n\r\n<p>F(<em>x</em>) : disebut fungsi asal (fungsi primitive, fungsi pokok)</p>\r\n\r\n<p>C : disebut konstanta / tetapan integrasi</p>\r\n\r\n<p>Perhatikan tabel dibawah ini !</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="https://ilmuhitung.com/pengertian-integral-dan-integral-tak-tentu/kubah-png/" /></p>\r\n\r\n<p>Berdasarkan tabel diatas dapat kita simpulkan bahwa dari F(x) yang berbeda diperoleh F&prime;(x) yang sama, sehingga dapat kita katakan bahwa jika F&prime;(x) = f(x) diketahui sama, maka fungsi asal F(x) yang diperoleh belum tentu sama. Proses pencarian fungsi asal F(x) dari F&prime;(x) yang diketahui disebut&nbsp;<em>operasi invers pendiferensialan (</em>anti turunan) dan lebih dikenal dengan nama operasi integral.</p>\r\n\r\n<p>Jadi, secara umum perumusan integrasi dasar sebagai berikut:</p>\r\n\r\n<p><strong>Integral fungsi aljabar</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Integral fungsi trigonometri</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Untuk mengerjakan integral fungsi trigonometri akan digunakan kesamaan-kesamaan</p>\r\n\r\n<p>sebagai berikut berikut ini:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contoh soal :</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-01-09 23:17:05', '2018-01-09 23:18:18'),
(2, 1, 1, 2, 'Macam-macam Integral', '<p>Sebelumnya kita telah membahas&nbsp;<a href="http://rumus-matematika.com/">Integral</a>&nbsp;tentang&nbsp;<a href="http://rumus-matematika.com/rumus-dasar-integral-lengkap/">rumus dasar integral</a>&nbsp;sekarang kita akan membahas macam-macam integral. Dan apakah anda telah tahu apa saja macam-macam dari integral, baiklah pasti sebagian dari anda telah tahu atau mungkin bahkan telah paham. Namun ada juga pasti yang belum mengerti, macam-macam integral itu adalah integral tertentu, integral tak tentu, integral fungsi trigonometri, integral parsial. Untuk lebih jelasnya marilah kita simak bersama penjelasannya dibawah ini.</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/integral6.jpg"><img alt="integral6" height="183" src="http://rumus-matematika.com/wp-content/uploads/2013/08/integral6.jpg" width="275" /></a>1. Integral Tak Tentu</p>\r\n\r\n<p>Integral merupakan invers atau kebalikan dari turunan sehingga untuk menemukan rumus integral kita dapat berawal dari turunan. Turuna dari suatu fungsi y= f(x) adalah y&rsquo;=f&#39;(x) atau dy/dx, dan notasi integral dari suatu fungsi y=f(x) adalah &int;y dx=&int;f(x) dx yang dibaca integral y terhadap x.</p>\r\n\r\n<p>Turunan dari suatu fungsi konstan yang biasa dilambangkan dengan c adalah 0 atau dapat kita katakan juga integral 0 adalah fungsi konstan.</p>\r\n\r\n<p><small>adversitemens</small></p>\r\n\r\n<p>Rumus-rumus integral tak tentu :</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/51.png"><img alt="5" height="150" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/51-300x150.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/51-300x150.png 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/51.png 345w" width="300" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/6PNG.png"><img alt="6PNG" height="184" src="http://rumus-matematika.com/wp-content/uploads/2013/08/6PNG.png" width="243" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/71.png"><img alt="7" height="226" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/71-300x226.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/71-300x226.png 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/71.png 302w" width="300" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/81.png"><img alt="8" height="300" sizes="(max-width: 298px) 100vw, 298px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/81-298x300.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/81-298x300.png 298w, http://rumus-matematika.com/wp-content/uploads/2013/08/81-150x150.png 150w, http://rumus-matematika.com/wp-content/uploads/2013/08/81.png 327w" width="298" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/91.png"><img alt="9" height="184" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/91-300x184.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/91-300x184.png 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/91.png 323w" width="300" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/101.png"><img alt="10" height="166" src="http://rumus-matematika.com/wp-content/uploads/2013/08/101.png" width="272" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/112.png"><img alt="11" height="128" src="http://rumus-matematika.com/wp-content/uploads/2013/08/112.png" width="290" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/121.png"><img alt="12" height="190" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/121-300x190.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/121-300x190.png 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/121.png 314w" width="300" /></a></p>\r\n\r\n<p>contoh soal :</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/310.jpg"><img alt="3" height="203" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/310-300x203.jpg" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/310-300x203.jpg 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/310.jpg 471w" width="300" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/43.jpg"><img alt="4" height="166" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/43-300x166.jpg" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/43-300x166.jpg 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/43.jpg 626w" width="300" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/4-1.jpg"><img alt="4 (1)" height="166" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/4-1-300x166.jpg" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/4-1-300x166.jpg 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/4-1.jpg 626w" width="300" /></a></p>\r\n\r\n<p>2. Integral Fungsi Trigonometri</p>\r\n\r\n<p>Kita semua pasti telah tahu turunan dari fungsi trigonometri yang secara sederhana dapat digambarkan sebagai berikut.</p>\r\n\r\n<p>sinx&rarr;cosx&rarr;-sinx&rarr;-cosx&rarr;sinx</p>\r\n\r\n<p>tanx&rarr;sec&sup2;x</p>\r\n\r\n<p>cotx&rarr;-cosec&sup2;x</p>\r\n\r\n<p>Dikarenakan integral adalah invers dari turunan maka</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/integral8.jpg"><img alt="integral8" height="82" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/integral8-300x82.jpg" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/integral8-300x82.jpg 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/integral8.jpg 365w" width="300" /></a><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/integral9.jpg"><img alt="integral9" height="156" src="http://rumus-matematika.com/wp-content/uploads/2013/08/integral9-300x156.jpg" width="572" /></a></p>\r\n\r\n<p>3. Integral Parsial</p>\r\n\r\n<p>Prinsip dasar dari integral parsial yaitu salah satu dimisalkan u dan yang lainnya dianggap sebagai dv. Sehingga integral parsial mempunyai bentuk :</p>\r\n\r\n<h1>&int;U Dv=Uv-&int;V Du</h1>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/221.png"><img alt="22" height="247" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/221-300x247.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/221-300x247.png 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/221.png 505w" width="300" /></a></p>\r\n\r\n<p>4. Integral Tentu</p>\r\n\r\n<p>Misalkan f(x) didefinisikan dalam selang a&le;x&le;b dan jika selang ini dibagi menjadi n bagian yang sama panjang yaitu</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/141.png"><img alt="14" height="45" src="http://rumus-matematika.com/wp-content/uploads/2013/08/141.png" width="80" /></a></p>\r\n\r\n<p>Sehingga integral tentu dari fx pada selang x=a dan x=b yaitu</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/151.png"><img alt="15" height="32" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/151-300x32.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/151-300x32.png 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/151.png 553w" width="300" /></a></p>\r\n\r\n<p>limit ini pasti ada apabila f(x) kontinu sepotong demi sepotong dan jika</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/161.png"><img alt="16" height="41" src="http://rumus-matematika.com/wp-content/uploads/2013/08/161.png" width="106" /></a></p>\r\n\r\n<p>Jadi berdasarkan dalil pokok dari kalkulus integral, integral tentu diatas dapat dihitung dengan rumus :</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/17PNG.png"><img alt="17PNG" height="60" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/17PNG-300x60.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/17PNG-300x60.png 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/17PNG.png 320w" width="300" /></a></p>\r\n\r\n<p>Rumus-rumus Integral Tentu :</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/18PNG.png"><img alt="18PNG" height="173" sizes="(max-width: 300px) 100vw, 300px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/18PNG-300x173.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/18PNG-300x173.png 300w, http://rumus-matematika.com/wp-content/uploads/2013/08/18PNG.png 301w" width="300" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/aPNG.png"><img alt="aPNG" height="59" src="http://rumus-matematika.com/wp-content/uploads/2013/08/aPNG.png" width="176" /></a></p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/b.png"><img alt="b" height="62" src="http://rumus-matematika.com/wp-content/uploads/2013/08/b.png" width="193" /></a>k sebagai konstanta sembarang</p>\r\n\r\n<p><a href="http://rumus-matematika.com/wp-content/uploads/2013/08/201.png"><img alt="20" height="300" sizes="(max-width: 252px) 100vw, 252px" src="http://rumus-matematika.com/wp-content/uploads/2013/08/201-252x300.png" srcset="http://rumus-matematika.com/wp-content/uploads/2013/08/201-252x300.png 252w, http://rumus-matematika.com/wp-content/uploads/2013/08/201.png 269w" width="252" /></a></p>\r\n', '2018-01-09 23:18:54', '2018-01-09 23:20:34'),
(3, 1, 1, 3, 'Latihan Soal dan Pembahasan', '<h1>Contoh Soal, Penyelesaian Dan Pembahasan Integral</h1>\r\n\r\n<p>1. Jika di Ketahui&nbsp;<a href="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-1.png"><img alt="Soal Integral 1" height="50" src="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-1.png" width="181" /></a>&nbsp; Maka Carilah Integralnya.!</p>\r\n\r\n<p><strong>Jawab :</strong></p>\r\n\r\n<p><a href="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-1.png"><img alt="Jawaban Integral 1" height="156" src="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-1.png" width="255" /></a></p>\r\n\r\n<p>2. Jika di Ketahui&nbsp;&nbsp;<a href="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-2.png"><img alt="Soal Integral 2" height="52" src="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-2.png" width="158" /></a>Maka Tentukanlah Integralnya .!</p>\r\n\r\n<p><strong>Jawab:</strong></p>\r\n\r\n<p><a href="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-2.png"><img alt="Jawaban Integral 2" height="128" src="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-2.png" width="198" /></a></p>\r\n\r\n<p>3. Jika Diketahui&nbsp;<a href="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-31.png"><img alt="Soal Integral 3" height="63" src="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-31.png" width="117" /></a>&nbsp;Maka Tentukanlah Integralnya.!</p>\r\n\r\n<p><strong>Jawab:</strong></p>\r\n\r\n<p><a href="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-3.png"><img alt="Jawaban Integral 3" height="209" src="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-3.png" width="224" /></a></p>\r\n\r\n<p>4. Jika Di Ketahui&nbsp;&nbsp;<a href="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-4.png"><img alt="Soal Integral 4" height="53" src="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-4.png" width="121" /></a>&nbsp;Maka Tentukanlah Integralnya.!</p>\r\n\r\n<p><strong>Jawab :</strong></p>\r\n\r\n<p><a href="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-4.png"><img alt="Jawaban Integral 4" height="91" src="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-4.png" width="216" /></a></p>\r\n\r\n<p>5. Jika Diketahui&nbsp;<a href="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-5.png"><img alt="Soal Integral 5" height="57" src="http://genggaminternet.com/wp-content/uploads/2015/05/Soal-Integral-5.png" width="124" /></a>&nbsp;(Akar Tiga) Maka Tentukanlah Integralnya.!</p>\r\n\r\n<p><strong>Jawab :</strong></p>\r\n\r\n<p><a href="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-5.png"><img alt="Jawaban Integral 5" height="239" src="http://genggaminternet.com/wp-content/uploads/2015/05/Jawaban-Integral-5.png" width="235" /></a></p>\r\n', '2018-01-09 23:23:25', '2018-01-09 23:32:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_title`
--

CREATE TABLE `course_title` (
  `id_title` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `pick` int(1) NOT NULL DEFAULT '0',
  `visitor` int(5) NOT NULL,
  `random_code` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `course_title`
--

INSERT INTO `course_title` (`id_title`, `id_user`, `title`, `subject`, `description`, `thumbnail`, `created_at`, `last_update`, `status`, `pick`, `visitor`, `random_code`) VALUES
(1, 1, 'Integral Tak Tentu dan Tak Tentu', 'Matematika', 'Integral adalah sebuah konsep penjumlahan secara berkesinambungan dalam matematika, dan bersama dengan inversnya, diferensiasi, adalah satu dari dua operasi utama dalam kalkulus. Integral dikembangkan menyusul dikembangkannya masalah dalam diferensiasi di mana matematikawan harus berpikir bagaimana menyelesaikan masalah yang berkebalikan dengan solusi diferensiasi. ', 'hqdefault1.jpg', '2018-01-09 23:11:53', '2018-01-09 23:36:50', 0, 1, 4, '5Z9cImUzMTi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `enroll_course`
--

CREATE TABLE `enroll_course` (
  `id_enroll` int(5) NOT NULL,
  `id_title` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `enroll_course`
--

INSERT INTO `enroll_course` (`id_enroll`, `id_title`, `id_user`, `created_at`) VALUES
(1, 1, 2, '2018-01-10 00:04:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `like_comment`
--

CREATE TABLE `like_comment` (
  `id_likecomment` int(5) NOT NULL,
  `id_title` int(5) NOT NULL,
  `id_comment` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `type` int(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `like_comment`
--

INSERT INTO `like_comment` (`id_likecomment`, `id_title`, `id_comment`, `id_user`, `type`, `created_at`) VALUES
(41, 1, 3, 1, 2, '2018-01-10 13:34:20'),
(34, 1, 1, 1, 4, '2018-01-10 13:34:12'),
(12, 1, 2, 1, 4, '2018-01-10 00:03:15'),
(33, 1, 3, 2, 2, '2018-01-10 00:17:05'),
(38, 1, 4, 1, 4, '2018-01-10 13:34:16'),
(40, 1, 5, 1, 4, '2018-01-10 13:34:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `like_course`
--

CREATE TABLE `like_course` (
  `id_likecourse` int(5) NOT NULL,
  `id_title` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `like_course`
--

INSERT INTO `like_course` (`id_likecourse`, `id_title`, `id_user`, `created_at`) VALUES
(11, 1, 1, '2018-01-10 13:19:44'),
(3, 1, 2, '2018-01-10 00:04:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE `notification` (
  `id_notif` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `get_id` int(5) NOT NULL,
  `type` varchar(25) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notification`
--

INSERT INTO `notification` (`id_notif`, `id_user`, `get_id`, `type`, `status`, `created_at`) VALUES
(1, 1, 3, 'like_course', 1, '2018-01-10 00:04:19'),
(2, 1, 1, 'enroll_course', 1, '2018-01-10 00:04:26'),
(25, 2, 2, 'subscribe', 0, '2018-01-10 00:39:18'),
(35, 2, 41, 'like_comment', 0, '2018-01-10 13:34:20'),
(27, 2, 4, 'subscribe', 0, '2018-01-10 00:39:25'),
(12, 1, 22, 'like_comment', 1, '2018-01-10 00:05:40'),
(32, 2, 38, 'like_comment', 0, '2018-01-10 13:34:16'),
(24, 2, 1, 'subscribe', 0, '2018-01-10 00:39:16'),
(26, 2, 3, 'subscribe', 0, '2018-01-10 00:39:23'),
(36, 2, 6, 'subscribe', 0, '2018-01-10 13:53:55'),
(28, 2, 5, 'subscribe', 0, '2018-01-10 00:39:26'),
(34, 2, 40, 'like_comment', 0, '2018-01-10 13:34:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscribe`
--

CREATE TABLE `subscribe` (
  `id_subscribe` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `for_id` int(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subscribe`
--

INSERT INTO `subscribe` (`id_subscribe`, `id_user`, `for_id`, `created_at`) VALUES
(6, 1, 2, '2018-01-10 13:53:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `photo` varchar(200) NOT NULL DEFAULT 'profile.png',
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `name`, `city`, `bio`, `photo`, `role`, `status`, `created_at`, `last_update`) VALUES
(1, 'yusronzain@gmail.com', 'yusron', '52b851e6dffbc3b9cc8ccc36e34eceda', 'Yusron Hanan Zain Vidi Imtinan', 'situbondo-malang', 'web developer', 'Screenshot_(65).png', 1, 0, '2018-01-09 22:07:45', '2018-01-09 23:00:11'),
(2, 'qori@gmail.com', 'qori', 'd0538dbd2f87e857f54860382a64c97d', 'Qoriatul Masfufah', 'Magetan', 'Magetan lover', 'profile.png', 0, 0, '2018-01-10 00:03:59', '2018-01-10 00:03:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD PRIMARY KEY (`id_broadcast`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

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
-- Indexes for table `enroll_course`
--
ALTER TABLE `enroll_course`
  ADD PRIMARY KEY (`id_enroll`);

--
-- Indexes for table `like_comment`
--
ALTER TABLE `like_comment`
  ADD PRIMARY KEY (`id_likecomment`);

--
-- Indexes for table `like_course`
--
ALTER TABLE `like_course`
  ADD PRIMARY KEY (`id_likecourse`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id_subscribe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `broadcast`
--
ALTER TABLE `broadcast`
  MODIFY `id_broadcast` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id_config` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `course_content`
--
ALTER TABLE `course_content`
  MODIFY `id_course` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course_title`
--
ALTER TABLE `course_title`
  MODIFY `id_title` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enroll_course`
--
ALTER TABLE `enroll_course`
  MODIFY `id_enroll` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `like_comment`
--
ALTER TABLE `like_comment`
  MODIFY `id_likecomment` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `like_course`
--
ALTER TABLE `like_course`
  MODIFY `id_likecourse` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notif` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id_subscribe` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
