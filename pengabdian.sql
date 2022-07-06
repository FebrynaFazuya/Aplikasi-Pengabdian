-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2022 at 04:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengabdian`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pengabdian`
--

CREATE TABLE `dosen_pengabdian` (
  `id` int(10) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `nidn` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen_pengabdian`
--

INSERT INTO `dosen_pengabdian` (`id`, `nama_dosen`, `nidn`) VALUES
(23, 'Moch Farid Fauzi, M.Kom', '1234354676789076'),
(24, 'Firman Asharudin, S.Kom, M.Kom', '1244678564785987');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengabdian`
--

CREATE TABLE `tbl_pengabdian` (
  `id_tbl` int(10) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `nidn` varchar(16) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `topik` varchar(50) NOT NULL,
  `waktu` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `nama_mahasiswa1` varchar(50) NOT NULL,
  `nim1` char(10) NOT NULL,
  `link_publikasi` varchar(200) NOT NULL,
  `nama_mahasiswa2` varchar(50) NOT NULL,
  `nim2` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengabdian`
--

INSERT INTO `tbl_pengabdian` (`id_tbl`, `nama_dosen`, `nidn`, `judul`, `topik`, `waktu`, `tempat`, `nama_mahasiswa1`, `nim1`, `link_publikasi`, `nama_mahasiswa2`, `nim2`) VALUES
(11, 'Moch Farid Fauzi, M.Kom', '1234354676789076', 'Pengenalan SEO', 'Membuat website dengan rating SEO yang tinggi', '2022-01-12', 'sleman', 'test1', '20.01.4521', 'https://home.amikom.ac.id/', 'tests2', '20.01.4522'),
(12, 'Firman Asharudinnnnnnnnnn', '2147483647999999', 'Coba', 'Coba Lagi', '2022-01-12', 'Sleman', 'test1', '20.01.4521', 'https://home.amikom.ac.id/', 'tests2', '20.01.4522'),
(13, 'Firman Asharudin, S.Kom, M.Kom', '1244678564785987', 'Coba', 'Membuat website dengan rating SEO yang tinggi', '2022-01-12', 'Bantul', 'test1', '20.01.4521', 'https://getbootstrap.com/docs/3.3/', 'tests2', '20.01.4522');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_pengabdian`
--
ALTER TABLE `dosen_pengabdian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengabdian`
--
ALTER TABLE `tbl_pengabdian`
  ADD PRIMARY KEY (`id_tbl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen_pengabdian`
--
ALTER TABLE `dosen_pengabdian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_pengabdian`
--
ALTER TABLE `tbl_pengabdian`
  MODIFY `id_tbl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
