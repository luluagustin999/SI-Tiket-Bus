-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 05:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nama_bus` varchar(255) NOT NULL,
  `asal` int(11) NOT NULL,
  `tujuan` int(11) NOT NULL,
  `tgl_berangkat` datetime NOT NULL,
  `tgl_sampai` datetime NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nama_bus`, `asal`, `tujuan`, `tgl_berangkat`, `tgl_sampai`, `kelas`, `harga`, `status`) VALUES
(8, 'AMB', 1, 2, '2020-06-11 18:23:00', '2020-06-12 18:23:00', 'VIP', '2000000', 0),
(9, 'GMS', 2, 5, '2020-04-30 00:13:00', '2020-04-30 00:13:00', 'VIP', '3000000', 0),
(11, 'INI BUS', 6, 4, '2020-04-30 00:13:00', '2020-04-30 00:13:00', 'EKONOMI', '5000000', 0),
(12, 'E BUS', 1, 1, '2020-04-30 00:14:00', '2020-04-30 00:14:00', 'VIP', '10000', 0),
(15, 'TES', 1, 1, '2020-06-05 09:12:00', '2020-06-05 09:12:00', 'EKONOMI', '20000', 0),
(16, 'SEKARANG', 1, 9, '2020-06-05 09:16:00', '2020-06-05 09:16:00', 'VIP', '200000', 0),
(17, 'MAU NAIK?', 4, 5, '2020-06-30 19:45:00', '2020-07-03 19:45:00', 'VIP', '1000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `no_pembayaran` varchar(255) NOT NULL,
  `no_tiket` varchar(100) NOT NULL,
  `total_pembayaran` varchar(255) NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `no_pembayaran`, `no_tiket`, `total_pembayaran`, `bukti`, `status`) VALUES
(1, 'RW0141', 'T001', '1000000000', '7b05a22e05909daef1d01c5510e48d681.jpg', 2),
(2, 'RW0142', 'T002', '1000000000', '519513d2cbf142a033c7337628f54f79.jpg', 2),
(3, 'RW0143', 'T003', '4000000', 'anime-guilty-crown-anime-girls-manga-wallpaper1.jpg', 2),
(4, 'RW0144', 'T004', '2000000', 'covid-192.png', 2),
(5, 'RW0145', 'T005', '2000000', 'lacia_concept_by_redjuice999_d3djq4v-fullview.jpg', 2),
(6, 'RW0146', 'T006', '5000000', 'covid-193.png', 2),
(7, 'RW0147', 'T007', '200000', '2016_06_20-16_43_25_59eb64d02eb86e919ce0a72aa8bf013b_960x640_thumb.jpg', 2),
(8, 'RW0148', 'T008', '20000', '2016_06_20-16_43_25_59eb64d02eb86e919ce0a72aa8bf013b_960x640_thumb1.jpg', 2),
(9, 'RW0149', 'T009', '400000', 'Untitled.png', 2),
(10, 'RW01410', 'T0010', '4000000', 'ayaka.jpg', 2),
(11, 'RW01411', 'T0011', '1000000', 'ayaka1.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id` int(11) NOT NULL,
  `nomor_tiket` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_identitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id`, `nomor_tiket`, `nama`, `no_identitas`) VALUES
(1, 'T001', 'rizki', '123456'),
(2, 'T002', 'sdwsd', '12323124'),
(3, 'T003', 'rizki', '12345'),
(4, 'T003', 'Wowon', '67890'),
(5, 'T004', 'rrr', '1212121'),
(6, 'T005', 'sdwsd', '7889787'),
(7, 'T006', 'Connor', '987654321'),
(8, 'T007', 'Rizki Wind', '1810631170108'),
(9, 'T008', 'RIZKI WINDIAWAN', '1810631170108'),
(10, 'T008', 'rizkiwowon', '1810000000000'),
(11, 'T009', 'Anwar', '233456'),
(12, 'T009', 'Ronna', '345678'),
(13, 'T0010', 'Rizki', '101010101010101'),
(14, 'T0010', 'Ayaka', '000000000000000'),
(15, 'T0011', 'Tzuyu', '222222222');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE `terminal` (
  `id` int(255) NOT NULL,
  `lokasi_terminal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`id`, `lokasi_terminal`) VALUES
(1, 'KARAWANG'),
(2, 'NEW YORK'),
(4, 'BANDUNG'),
(5, 'DETROIT'),
(6, 'KYOTO'),
(8, 'SURABAYA'),
(9, 'BEKASI');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int(11) NOT NULL,
  `nomor_tiket` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `nomor_tiket`, `tanggal`, `id_jadwal`, `nama_pemesan`, `email`, `no_telepon`, `alamat`) VALUES
(1, 'T001', '0000-00-00', 7, 'Wowon', 'rizkiwowoN@GMAIL.COM', '083116222244', 'PERUM PDP BLOK E12/17'),
(2, 'T002', '0000-00-00', 7, 'asasa', 'rizkiwowoN@GMAIL.COM', '083116222244', 'PERUM PDP BLOK E12/17'),
(3, 'T003', '0000-00-00', 8, 'Wowon', 'rizkiwowoN@GMAIL.COM', '083116222244', 'PERUM PDP BLOK E12/17'),
(4, 'T004', '0000-00-00', 8, 'sadfd', 'rizkiwowoN@GMAIL.COM', '083116222244', 'PERUM PDP BLOK E12/17'),
(5, 'T005', '0000-00-00', 8, 'ghmghjm', 'rizkiwowoN@GMAIL.COM', '083116222244', 'PERUM PDP BLOK E12/17'),
(6, 'T006', '0000-00-00', 11, 'Kenway', 'rizkiwowon@gmail.com', '083116222244', 'Hawaii'),
(7, 'T007', '0000-00-00', 13, 'Win', 'rizkiwons@gmail.com', '083116222244', 'PERUM PDP BLOK E12/17'),
(8, 'T008', '0000-00-00', 14, 'RIZKIWOWON', 'rizkiwowon@gmail.com', '083116222244', 'PERUM PDP BLOK E12/17'),
(9, 'T009', '0000-00-00', 16, 'Anwar', 'anwar@gmail.com', '083116222255', 'PERUM PDP BLOK E12/18'),
(10, 'T0010', '2020-06-11', 8, 'Ayaka', 'konno@gmail.com', '083116222244', 'Jepang'),
(11, 'T0011', '2020-06-11', 17, 'Tzuyu', 'Tyuzu@gmail.com', '0888888888', 'Koriyah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
