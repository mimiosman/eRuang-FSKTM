-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 07:21 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eruangfsktm`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadual`
--

CREATE TABLE `jadual` (
  `id` int(11) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `8am` varchar(30) NOT NULL,
  `9am` varchar(30) NOT NULL,
  `10am` varchar(30) NOT NULL,
  `11am` varchar(30) NOT NULL,
  `12pm` varchar(30) NOT NULL,
  `1pm` varchar(30) NOT NULL,
  `2pm` varchar(30) NOT NULL,
  `3pm` varchar(30) NOT NULL,
  `4pm` varchar(30) NOT NULL,
  `5pm` varchar(30) NOT NULL,
  `6pm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadual`
--

INSERT INTO `jadual` (`id`, `nama_ruang`, `date`, `8am`, `9am`, `10am`, `11am`, `12pm`, `1pm`, `2pm`, `3pm`, `4pm`, `5pm`, `6pm`) VALUES
(31, 'Auditorium', '07/03/2017', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'DITEMPAH', 'CLOSE'),
(32, 'Bilik Seminar ', '07/03/2017', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'DALAM TEMPAHAN', 'TUTUP'),
(33, 'Auditorium', '08/03/2017', 'DALAM TEMPAHAN', 'DALAM TEMPAHAN', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'TUTUP'),
(34, 'Auditorium', '15/03/2017', 'DALAM TEMPAHAN', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'TUTUP'),
(35, 'Auditorium', '13/03/2017', 'DALAM TEMPAHAN', 'DALAM TEMPAHAN', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'TUTUP'),
(36, 'Bilik Seminar ', '23/05/2017', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'TUTUP'),
(37, 'Bilik Seminar ', '19/05/2017', 'N/A', 'N/A', 'DALAM PROSES', 'N/A', 'DALAM PROSES', 'DALAM PROSES', 'N/A', 'N/A', 'N/A', 'N/A', 'TUTUP');

-- --------------------------------------------------------

--
-- Table structure for table `notis`
--

CREATE TABLE `notis` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `mesej` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notis`
--

INSERT INTO `notis` (`id`, `status`, `mesej`) VALUES
(1, 'pengguna', 'Pada 1 Mei tempahan akan ditutup'),
(2, 'pengguna', 'asf');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `no_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_tel` varchar(100) NOT NULL,
  `kata_laluan` varchar(100) NOT NULL,
  `imej` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `status`, `no_id`, `email`, `no_tel`, `kata_laluan`, `imej`) VALUES
(31, 'Muhammad Asyraf Qusyairi bin Shaharin', 'Pelajar', 'ci140132', 'asyrafqusyairi@gmail.com', '01119928780', '4297f44b13955235245b2497399d7a93', 'CI140132.jpg'),
(34, 'Asyraf ', 'Pensyarah', 'ai140132', 'asyrafqusyairi@gmail.com', '1', '202cb962ac59075b964b07152d234b70', 'avatar_01798ee0dc35_128.png'),
(35, 'ajey', 'Pelajar', 'ci140078', 'ci140078@uthm.edu.my', '123456', '269be4965754d76ed1a93d6fafdc28bb', 'user.jpg'),
(36, 'test 123', 'Pensyarah', 'ci140139', 'asyrafqusyairi@gmail.com', '123', 'f8367a00e58d7af7457d02700dc5d3e8', 'user.jpg'),
(37, 'as', 'Pelajar', '123asd', 'asyrafqusyairi@gmail.com', '122', '8c88008f796bb541f1b1c48448b52cde', 'user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pentadbir`
--

CREATE TABLE `pentadbir` (
  `id` int(11) NOT NULL,
  `staf_id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kata_laluan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jawatan` varchar(20) NOT NULL,
  `no_tel` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  `imej` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pentadbir`
--

INSERT INTO `pentadbir` (`id`, `staf_id`, `nama`, `kata_laluan`, `email`, `jawatan`, `no_tel`, `status`, `imej`) VALUES
(1, 'ui140132', 'admin', '123', 'psmemailtester@gmail.com', '', '3434', 'staf', '00571(Encik Azizul Zamri).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`) VALUES
(1, 'Auditorium'),
(2, 'Bilik Seminar ');

-- --------------------------------------------------------

--
-- Table structure for table `tempahan`
--

CREATE TABLE `tempahan` (
  `id` int(11) NOT NULL,
  `no_id` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no_tel` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama_ruang` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tujuan_tempahan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempahan`
--

INSERT INTO `tempahan` (`id`, `no_id`, `date`, `time`, `nama`, `email`, `no_tel`, `nama_ruang`, `status`, `tujuan_tempahan`) VALUES
(1, '', '27/02/2017', '10am-11am,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '123', 'Auditorium', '', ''),
(2, '', '27/02/2017', '9am-10am,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '123', 'Auditorium', '', ''),
(3, '', '27/02/2017', '2pm-3pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '123', 'Auditorium', '', ''),
(4, '', '16/02/2017', '8am-9am,', 'Amad', 'asyrafqusyairi@gmail.com', '01119926199', 'Auditorium', '', ''),
(5, '', '23/02/2017', '8am-9am,9am-10am,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '123', 'Bilik Seminar ', '', ''),
(6, '', '24/02/2017', '', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '123', 'Bilik Seminar ', '', ''),
(8, '', '23/02/2017', '3pm-4pm,4pm-5pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '123', 'Auditorium', '', ''),
(9, '', '23/02/2017', '9am-10am,10am-11am,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '123', 'Auditorium', '', ''),
(10, '', '23/02/2017', '5pm-6pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '123', 'Bilik Seminar ', '', ''),
(11, '', '23/02/2017', '8am-9am,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(12, 'ci140132', '23/02/2017', '10am-11am,11am-12pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Bilik Seminar ', '', ''),
(13, 'ci140132', '24/02/2017', '9am-10am,3pm-4pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(14, 'ci140132', '28/02/2017', '2pm-3pm,3pm-4pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(15, 'ci140132', '24/02/2017', '11am-12pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(16, 'ci140132', '28/02/2017', '4pm-5pm,5pm-6pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Bilik Seminar ', '', ''),
(17, 'ci140132', '28/02/2017', '10am-11am,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(18, 'ci140132', '26/02/2017', '4pm-5pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(19, 'ci140132', '27/02/2017', '5pm-6pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(20, 'ci140132', '27/02/2017', '8am-9am,9am-10am,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Bilik Seminar ', '', ''),
(21, 'ci140132', '28/02/2017', '1pm-2pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Bilik Seminar ', '', ''),
(22, 'ci140132', '26/02/2017', '10am-11am,11am-12pm,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Bilik Seminar ', '', ''),
(23, 'ai140132', '24/02/2017', '8am-9am,', 'Amad', 'asyrafqusyairi@gmail.com', '01119926199', 'Auditorium', '', ''),
(24, 'ai140132', '26/02/2017', '5pm-6pm,', 'Amad', 'asyrafqusyairi@gmail.com', '01119926199', 'Bilik Seminar ', '', ''),
(25, 'ci140132', '25/02/2017', '10am-11am,', 'Asyraf Qusyairi', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(26, 'ci140132', '28/02/2017', '12pm-1pm,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(27, 'ci140132', '28/02/2017', '8am-9am,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Bilik Seminar ', '', ''),
(28, 'ci140132', '29/03/2017', '12pm-1pm,2pm-3pm,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(29, 'ci140132', '07/03/2017', '8am-9am,9am-10am,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(30, 'ci140132', '07/03/2017', '5pm-6pm,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Bilik Seminar ', '', ''),
(31, 'ci140132', '07/03/2017', '5pm-6pm,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(32, 'ci140132', '07/03/2017', '5pm-6pm,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(33, 'ci140132', '07/03/2017', '5pm-6pm,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Bilik Seminar ', '', ''),
(34, 'ci140132', '07/03/2017', '5pm-6pm,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(35, 'ci140132', '07/03/2017', '5pm-6pm,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Bilik Seminar ', '', ''),
(36, 'ci140132', '08/03/2017', '8am-9am,9am-10am,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(37, 'ci140132', '15/03/2017', '8am-9am,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(38, 'ci140132', '13/03/2017', '8am-9am,9am-10am,', 'Muhammad Asyraf Qusyairi bin Shaharin', 'asyrafqusyairi@gmail.com', '01119928780', 'Auditorium', '', ''),
(39, '123asd', '19/05/2017', '10am-11am,', 'as', 'asyrafqusyairi@gmail.com', '122', 'Bilik Seminar ', 'DALAM PROSES', 'sd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadual`
--
ALTER TABLE `jadual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notis`
--
ALTER TABLE `notis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pentadbir`
--
ALTER TABLE `pentadbir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tempahan`
--
ALTER TABLE `tempahan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadual`
--
ALTER TABLE `jadual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `notis`
--
ALTER TABLE `notis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tempahan`
--
ALTER TABLE `tempahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
