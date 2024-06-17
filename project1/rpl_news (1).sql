-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 11:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '4321'),
(3, 'taufik', 'admin', '1223'),
(4, 'Tir', 'Admin', '040507');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `penulis_id` int(11) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `thumbnail`, `judul`, `isi`, `penulis_id`, `tanggal_terbit`) VALUES
(62, '666bfb34a7fbe.jpg', 'asd', 'assss', 3, '2024-06-29'),
(63, '666c022f408ea.jpg', 'tetsuya', 'adakah', 4, '2024-06-14'),
(64, '666c03d6ac926.jpg', 'ASEPPROO', 'kadsjjd', 4, '2024-06-14'),
(65, '666c03fd76902.jpg', 'bruh', 'adkah', 4, '2024-06-14'),
(66, '666c04451bf44.jpg', 'nskfeafe', 'sdmlasd', 4, '2024-06-14'),
(67, '666c04a016c61.jpg', '1', 'gambar1', 4, '2024-06-14'),
(68, '666c04c8acb0e.png', '2', 'gambar2', 4, '2024-06-14'),
(69, '666c04e78ba28.jpg', '3', '3', 4, '2024-06-14'),
(70, '666c05c68f7e0.png', '6', '6', 4, '2024-06-14'),
(71, '666c072eb49a9.jpeg', 'PRESIDEN', 'PAK JOKOWI', 4, '2024-06-03'),
(72, '666c07577638c.jpg', 'BERITA', 'TERKINI', 4, '2024-06-16'),
(73, '666c07a9a03b3.jpg', 'BERITA', '111', 4, '2024-06-05'),
(74, '666c07e80d0c8.jpg', 'pertemuan Presiden ', 'jokowi dan joebiden', 4, '2024-06-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`penulis_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
