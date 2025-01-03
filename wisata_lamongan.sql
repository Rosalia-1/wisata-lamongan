-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 03:15 AM
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
-- Database: `wisata_lamongan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'user1', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_tempat`, `deskripsi`, `gambar`, `status`, `created_at`) VALUES
(2, 'Waduk Gondang', 'Sebuah waduk yang berbeda dengan waduk pada umumnya. Suasananya yang sejuk akan membuat Anda merasa ingin berlama-lama berada di tempat ini.\r\n\r\nWaduk ini terletak di Jl. Kedungpring - Sugio, Jaledriasri, Gondang Lor, Kec. Sugio, Kabupaten Lamongan.\r\n\r\nLink lokasi\r\n\r\nHarga Tiket Masuk: 3.000 dengan parkir 2.000 untuk motor dan 3.000 untuk mobil (Buka setiap hari)\r\n \r\nPesan tiket bisa menghubungi nomor ini: 08976557.', '17.jpg', '', '2024-12-13 07:46:34'),
(3, 'WBL', 'Wisata bahari yang menyediakan banyak sekali wahana.\r\nTerletak di Kecamatan Paciran, Kabupaten Lamongan, Jawa Timur.\r\n \r\nLink lokasi\r\n \r\nHarga Tiket Masuk: 85.000-145.000 (Buka setiap hari)\r\n \r\nPesan tiket bisa menghubungi nomor ini: 08643567', '022.jpg', 'active', '2024-12-13 07:46:34'),
(4, 'Plaza Lamonga', 'Pusat perbelanjaan yang menyediakan berbagai macam barang, disana juga ada tempat hiburan.\r\n\r\nTerletak di Kabupaten Lamongan, Jawa Timur.\r\n\r\nLink lokasi\r\n\r\nBuka setiap hari.', '13.jpeg', 'active', '2024-12-13 07:53:43'),
(5, 'Makam Syeh Maulana Ishaq', 'Syekh Maulana Ishaq sendiri merupakan ayah dari Raden Ainul Yaqin atau lebih dikenal sebagai Sunan Giri, salah satu tokoh Wali Songo. Tempat ini bisa digunakan untuk ziarah wali sekaligus wisata karena tempatnya yang berada di tepi laut.\r\n\r\nTerletak di Jalan Raya Gresik, Desa Kemantren, Kecamatan Paciran Lamongan.\r\n\r\nLink lokasi\r\n\r\nBuka setiap hari.', '14.jpg', 'active', '2024-12-13 07:53:43'),
(6, 'Gunung Pegat', 'Tempat yang tenang untuk bersantai dan menikmati pemandangan. Di sana juga banyak cafe yang bisa dikunjungi.\r\n\r\nTerletak di Jalan Babat-Jombang tepatnya di Kecamatan Babat Lamongan.\r\n\r\nLink lokasi\r\n\r\nBuka setiap hari.', '15.jpeg', 'active', '2024-12-13 07:53:43'),
(7, 'Tebing Cafe', 'Tebing Cafe adalah tempat untuk bersantai bersama keluarga atau teman.\r\n\r\nTerletak di Paciran Lamongan.\r\n\r\nLink lokasi\r\n \r\n Buka setiap hari.', '16.jpg', 'active', '2024-12-13 07:53:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
