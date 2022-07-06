-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 06:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

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
(24, 'Firman Asharudin, S.Kom, M.Kom', '1244678564785987'),
(26, 'ariff', '2147483647999999'),
(32, 'firman', '1231234');

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
(11, 'Moch Farid Fauzi, M.Kom', '1234354676789076', 'Pengenalan SE', 'Membuat website dengan rating SEO yang tinggi', '2022-01-12', 'sleman', 'firaaa', '20.01.4521', 'https://home.amikom.ac.id/', 'anin', '20.01.4522'),
(13, 'Firman Asharudin, S.Kom, M.Kom', '1244678564785987', 'Coba', 'Membuat website dengan rating SEO yang tinggiii', '2022-01-12', 'Bantul', 'nana', '20.01.4521', 'https://getbootstrap.com/docs/3.3/', 'ninu', '20.01.4522'),
(14, 'arif', '2147483647999999', 'Coba', 'Membuat website dengan rating SEO yang tinggi', '2022-01-12', 'sleman', 'test1', '20.01.4521', 'https://getbootstrap.com/docs/3.3/', 'tests2', '20.01.4522'),
(15, 'Firman Asharudin, S.Kom, M.Kom', '1244678564785987', 'test', 'Membuat website dengan rating SEO yang tinggi', '2022-01-12', 'sleman', 'test1', '20.01.4521', 'https://getbootstrap.com/docs/3.3/', 'fira', '19.12.1112'),
(17, 'Moch Farid Fauzi, M.Kom', '1234354676789076', 'a', 'ads', '2022-01-05', 'asd', 'asd', '123', 'https://web.whatsapp.com/', 'asf', '123'),
(20, 'ariff', '2147483647999999', 'wefw', 'sd', '2022-02-01', 'dafda', 'sdf', '123456', 'https://web.whatsapp.com/', 'dfd', '1234566');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_pengabdian`
--
ALTER TABLE `tbl_pengabdian`
  MODIFY `id_tbl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
