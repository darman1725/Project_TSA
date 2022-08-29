-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 05:28 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts_tsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `jenis_produk` varchar(30) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `status_pembayaran` enum('Sudah','Belum') DEFAULT 'Sudah',
  `waktu_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_pelanggan`, `nama_produk`, `jenis_produk`, `qty`, `status_pembayaran`, `waktu_transaksi`) VALUES
(1, 'Joni', 'Minuman Ringan', 'Minuman', 1, 'Sudah', '2022-08-27 13:26:35'),
(2, 'Joni', 'Makanan Ringan', 'Makanan', 2, 'Belum', '2022-08-27 13:26:35'),
(3, 'Sule', 'Minuman Ringan', 'Minuman', 1, 'Sudah', '2022-08-27 13:26:35'),
(4, 'Andre', 'Mie instant', 'Makanan', 4, 'Belum', '2022-08-27 13:26:35'),
(5, 'Budi', 'Roti', 'Makanan', 2, 'Belum', '2022-08-27 13:26:35'),
(6, 'Darman', 'Sari Roti', 'Makanan', 3, 'Sudah', '2022-08-27 15:14:56'),
(7, 'Daniel', 'Green Tea', 'Minuman', 5, 'Sudah', '2022-08-27 15:28:21'),
(8, 'Martin', 'Ultramilk', 'Minuman', 3, 'Belum', '2022-08-27 15:28:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
