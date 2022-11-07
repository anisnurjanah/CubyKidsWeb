-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 05:44 PM
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
-- Database: `cubykids`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin127');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `ukuran` char(5) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `jml` char(20) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `jenis`, `bahan`, `ukuran`, `harga`, `warna`, `tgl`, `jml`, `ket`) VALUES
(1, 'Daily 0-5', 'Baju Bayi', 'Cotton', 'S', '50000', 'Blue', '2022-06-20', '10', 'Tersedia'),
(23, 'Daily 0-5', 'Baju Bayi', 'Cotton', 'S', '50000', 'Blue', '2022-06-20', '10', 'Tersedia'),
(24, 'Daily 5-10', 'Baju Anak', 'Cotton', 'M', '70000', 'Blue', '2022-06-23', '10', 'Tersedia'),
(25, 'Daily 10-15', 'Baju Remaja', 'Cotton', 'L', '85000', 'Orange', '2022-06-24', '10', 'Tersedia'),
(26, 'Sport 0-5', 'Baju bayi', 'Lentur', 'S', '150000', 'Navy', '2022-06-23', '0', 'Kosong'),
(27, 'Sport 5-10', 'Baju Anak', 'Lentur', 'S', '85000', 'Orange', '2022-06-20', '0', 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nm_pembeli` varchar(50) NOT NULL,
  `nm_brng` varchar(50) NOT NULL,
  `jml` char(5) NOT NULL,
  `ukuran` char(3) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total` varchar(20) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode`, `nm_pembeli`, `nm_brng`, `jml`, `ukuran`, `harga`, `total`, `warna`, `tgl`, `ket`) VALUES
(51, '1D1BB', 'Ayu', 'Daily 0-5', '1', 'S', '50000', '', 'Blue', '2022-06-01', 'Order'),
(52, '2D2BB', 'Yuli', 'Daily 0-5', '2', 'S', '50000', '', 'Blue', '2022-06-23', 'Order'),
(53, '3D3BB', 'Lia', 'Daily 0-5', '3', 'M', '50000', '', 'Pink', '2022-06-21', 'Order');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
