-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 08:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otak_kanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`id`, `nama_kelas`) VALUES
(1, 'ipa 1'),
(2, 'ipa 2'),
(3, 'agama 1'),
(4, 'agama 2'),
(5, 'ips 2'),
(6, 'ips 1');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_kuesioner`
--

CREATE TABLE `hasil_kuesioner` (
  `id` int(11) NOT NULL,
  `id_data_wali` varchar(100) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hasil_kuesioner`
--

INSERT INTO `hasil_kuesioner` (`id`, `id_data_wali`, `pertanyaan`, `jawaban`) VALUES
(5, '8', 'berapa kali ananda mengaji dalam sehari', '1 kali'),
(6, '8', 'bagaimana aktifitas ananda di  rumah', 'bermain game'),
(7, '8', 'apa yang di lakukan', 'santai'),
(8, '9', 'berapa kali ananda mengaji dalam sehari', '5 kali'),
(9, '9', 'bagaimana aktifitas ananda di  rumah', 'bermain dengan keluarga'),
(10, '9', 'apa yang di lakukan', 'bermain');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_lps`
--

CREATE TABLE `hasil_lps` (
  `id` int(11) NOT NULL,
  `id_data_wali` int(11) NOT NULL,
  `pertanyaan` varchar(100) DEFAULT NULL,
  `jawaban` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hasil_lps`
--

INSERT INTO `hasil_lps` (`id`, `id_data_wali`, `pertanyaan`, `jawaban`) VALUES
(86, 8, 'berapa kali ananda melaksanakan shalat wajib?', '1 waktu'),
(87, 8, 'berapa kali ananda mengaji dalam sehari', '2 waktu'),
(88, 8, 'bagaimana aktifitas ananda di  rumah', '3 waktu');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_lps_guru`
--

CREATE TABLE `hasil_lps_guru` (
  `id` int(11) NOT NULL,
  `id_data_guru` int(11) NOT NULL,
  `id_data_wali` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hasil_lps_guru`
--

INSERT INTO `hasil_lps_guru` (`id`, `id_data_guru`, `id_data_wali`, `pertanyaan`, `jawaban`) VALUES
(38, 11, 9, 'berapa kali ananda melaksanakan shalat wajib?', '1 waktu'),
(39, 11, 9, 'berapa kali ananda mengaji dalam sehari', '1 kali'),
(40, 11, 9, 'bagaimana aktifitas ananda di  rumah', 'bermain game'),
(41, 11, 8, 'berapa kali ananda melaksanakan shalat wajib?', '5 waktu'),
(42, 11, 8, 'berapa kali ananda mengaji dalam sehari', '5 kali'),
(43, 11, 8, 'bagaimana aktifitas ananda di  rumah', 'bermain dengan keluarga'),
(44, 11, 9, 'berapa kali ananda melaksanakan shalat wajib?', 'bermain dengan teman'),
(45, 11, 9, 'berapa kali ananda mengaji dalam sehari', ''),
(46, 11, 9, 'bagaimana aktifitas ananda di  rumah', '');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban_a` varchar(100) NOT NULL,
  `jawaban_b` varchar(100) NOT NULL,
  `jawaban_c` varchar(100) NOT NULL,
  `jawaban_d` varchar(100) NOT NULL,
  `jawaban_e` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `pertanyaan`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`) VALUES
(1, 'berapa kali ananda mengaji dalam sehari', '1 kali', '2 kali', '3 kali', '4 kali', '5 kali'),
(2, 'bagaimana aktifitas ananda di  rumah', 'bermain game', 'bermain sendiri', 'kadang belajar', 'bermain dengan teman', 'bermain dengan keluarga'),
(4, 'apa yang di lakukan', 'santai', 'belajar', 'bermain', 'tidur', 'lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_data_kelas` int(11) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `nama`, `email`, `password`, `id_data_kelas`, `level`) VALUES
(5, 'ila', 'ila@gmail.com', '123', 0, 'admin'),
(6, 'valkri', 'valkri077@gmail.com', '123', 3, 'guru'),
(7, 'endi', 'endi@gmail.com', '123', 2, 'guru'),
(8, 'amat', 'amat@gmail.com', '123', 4, 'wali'),
(9, 'yana', 'yana@gmail.com', '123', 4, 'wali'),
(10, 'pendi', 'pendi@gmail.com', '123', 2, 'wali'),
(11, 'fikri', 'mohfikk@gmail.com', '123', 4, 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_lps`
--

CREATE TABLE `pertanyaan_lps` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban_a` varchar(100) NOT NULL,
  `jawaban_b` varchar(100) NOT NULL,
  `jawaban_c` varchar(100) NOT NULL,
  `jawaban_d` varchar(100) NOT NULL,
  `jawaban_e` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pertanyaan_lps`
--

INSERT INTO `pertanyaan_lps` (`id`, `pertanyaan`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`) VALUES
(1, 'berapa kali ananda melaksanakan shalat wajib?', '1 waktu', '2 waktu', '3 waktu', '4 waktu', '5 waktu'),
(2, 'berapa kali ananda mengaji dalam sehari', '1 kali', '2 kali', '3 kali', '4 kali', '5 kali'),
(3, 'bagaimana aktifitas ananda di  rumah', 'bermain game', 'bermain sendiri', 'kadang belajar', 'bermain dengan teman', 'bermain dengan keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `responden_p`
--

CREATE TABLE `responden_p` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `responden_p`
--

INSERT INTO `responden_p` (`id`, `jumlah`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `responden_t`
--

CREATE TABLE `responden_t` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `responden_t`
--

INSERT INTO `responden_t` (`id`, `jumlah`) VALUES
(1, 1),
(2, 1),
(3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_kuesioner`
--
ALTER TABLE `hasil_kuesioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_lps`
--
ALTER TABLE `hasil_lps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_lps_guru`
--
ALTER TABLE `hasil_lps_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pertanyaan_lps`
--
ALTER TABLE `pertanyaan_lps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responden_p`
--
ALTER TABLE `responden_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responden_t`
--
ALTER TABLE `responden_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hasil_kuesioner`
--
ALTER TABLE `hasil_kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hasil_lps`
--
ALTER TABLE `hasil_lps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `hasil_lps_guru`
--
ALTER TABLE `hasil_lps_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pertanyaan_lps`
--
ALTER TABLE `pertanyaan_lps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `responden_p`
--
ALTER TABLE `responden_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `responden_t`
--
ALTER TABLE `responden_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
