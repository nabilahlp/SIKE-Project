-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 01:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esport`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `textpost` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `date`, `textpost`, `image`, `link`) VALUES
(1, 'Debut Luna Maya Sebagai Manager Tim di Esports Star Indonesia GTV', '7 November 2021', 'Atta Halilintar, Luna Maya, Vidi Aldiano dan Olla Ramlan yang ditunjuk sebagai manager tim untuk mengatur tim di Esports Star Indonesia GTV bersama dengan para Coaches.', 'assets/news2.jpg', 'https://esports.id/mobile-legends/news/2021/10/20ef119e812e178ecb44efa448b57ebc/debut-luna-maya-sebagai-manager-tim-di-esports-star-indonesia-gtv'),
(2, 'ONE Esports dan Moonton Gelar Mobile Legends Professional League Invitational', '7 November 2021', 'ONE Esports, yang berada di bawah naungan ONE Championship (ONE), akan menggelar ajang Mobile Legend Professional League Invitational (MPLI) 2021.', 'assets/news.jpg', 'https://www.kompas.com/sports/read/2020/11/06/11000098/one-esports-dan-moonton-gelar-mobile-legends-professional-league'),
(3, 'Aura Fire Open Trial! Cari The Next High?', '16 November 2021', 'Tim kuda hitam MPL Season 8, Aura Fire sedang membuka open trial alias mencari pemain baru untuk musim MPL mendatang setelah sukses mewujudkan mimpi main ke playoffs MPL.', 'assets/news3.jpg', 'https://esports.id/mobile-legends/news/2021/11/9f655cc8884fda7ad6d8a6fb15cc001e/aura-fire-open-trial-cari-the-next-high'),
(4, 'Tinggalkan LEC, Rekkles Gabung Karmine Corp di Region LFL', '16 November 2021', 'Scene kompetitif League of Legends baru saja menyaksikan transfer pemain terbesarnya untuk persiapan musim selanjutnya.', 'assets/news4.jfif', 'https://esports.id/league-of-legends/news/2021/11/a8d2795765fb6a8659fd48d8ca7eb888/tinggalkan-lec-rekkles-gabung-karmine-corp-di-region-lfl');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id_tournament` int(3) NOT NULL,
  `event` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `prize` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`id_tournament`, `event`, `title`, `start_date`, `end_date`, `prize`, `image`) VALUES
(2, 'FIK FAIR 2021', 'Valorant Online Tournament', '28 November 2021', '6 Desember 2021', 'Rp2.000.000', 'assets/val.jpg'),
(3, 'MLBB Professional League (MPL) Season 7', 'Mobile Legend Online Tournament', '29 November 2021', '8 Desember 2021', 'Rp5.000.000', 'assets/mpl.jpg'),
(4, 'Moon Studio Asian League', 'DOTA 2 Online Tournament', '20 November 2021', '2 Desember 2021', 'Rp7.000.000', 'assets/dota.jpg'),
(5, 'Globe Conquerors Manila 2021', 'League of Legends Online Tournament', '9 Desember 2021', '18 Desember 2021', 'Rp5.000.000', 'assets/lol-lomba.jpg'),
(6, 'METACO DESEMBER 2021', 'Free Fire Online Tournament', '9 Desember 2021', '18 Desember 2021', 'Rp3.000.000', 'assets/ff-lomba.jpg'),
(7, 'National Championship 2021 Season 5', 'Arena of Valor Online Tournament', '9 Desember 2021', '18 Desember 2021', 'Rp6.000.000', 'assets/aov-lomba.jpg'),
(8, 'TELADAN E-SPORTS', 'PUBG Mobile Online Tournament', '8 November 2021', '23 November 2021', 'Rp1.000.000', 'assets/pubg-lomba.jpg'),
(9, 'Fortnite World Cup 2021', 'Fortnite Online Tournament', '9 Desember 2021', '18 Desember 2021', 'Rp5.000.000', 'assets/fort-lomba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `new_pass` varchar(255) NOT NULL,
  `confirm_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `university`, `team`, `email`, `phone`, `password`, `new_pass`, `confirm_pass`) VALUES
(34, 'Angelia Christy', 'UPN Veteran Jakarta', 'FABulous', 'angeliachrst@gmail.com', '081234567890', '$2y$10$KNJTKyVDta61fO5.IQ455eX2TfAl0cK9aZLXlYeFA0RxVBMnX9iVm', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id_tournament`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id_tournament` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
