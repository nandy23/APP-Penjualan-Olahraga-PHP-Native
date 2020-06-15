-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 04:05 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsalphora`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(20) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` int(7) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_produk`, `harga`, `deskripsi`, `gambar`, `jumlah`, `kategori`) VALUES
(6, 'specs swervo oren hitam', 400000, 'specs swervo oren hitam', '5dff35546b03a.jpg', 1, 'sepatu'),
(7, 'specs oren ', 250000, 'Jogo Sala Mefrik 2', '5dff35a948a5d.jpg', 1, 'sepatu'),
(9, 'bola futsal oraga kuning', 100000, 'bola futsal oraga kuning', '5dff363919f70.jpg', 1, 'bola'),
(10, 'bola futsal specs kuning', 200000, 'adidas marai pecah ndas', '5dff36f8a1e37.jpg', 1, 'bola'),
(11, 'jersey futsal adiddas biru', 80000, 'adidas marai pecah ndas', '5dff3735c0cc8.jpg', 1, 'jersey'),
(12, 'jersey futsal adiddas hijau', 90000, 'adidas marai pecah ndas', '5dff3775d3cd8.jpg', 1, 'jersey'),
(13, 'jersey puma hitam', 80000, 'adidas marai pecah ndas', '5dff37ae10d5e.jpeg', 1, 'jersey'),
(14, 'specs swervo hitam', 350000, 'specs swervo hitam', '5dff3b8474d2c.jpg', 1, 'sepatu');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama`, `alamat`, `nomor_telp`, `email`, `gambar`, `metode_pembayaran`) VALUES
(6, 'fandika bayu', 'dirumah', '09878877', 'b_fandika@yahoo.com', '5dffc9a65a47a.jpg', 'transfer'),
(7, 'mulya', 'dirumah', '098788779999', 'k.anam5457@gmail.com', '5e0044ed34dc6.jpg', 'transfer'),
(8, 'rendra', 'jl.sambiroto', '0897678908687', 'k.anam5457@gmail.com', '5e00c1c82c2a6.jpg', 'transfer'),
(9, 'rendra', 'dirumahhhh', '089765678978878', 'fandhikafitri@gmail.com', '', 'cod');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `kelas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `kelas`) VALUES
(116, 'cemplung', 'aa', ''),
(117, 'gombloh', '1234', 'admin'),
(118, 'skoko', '1234', 'admin'),
(119, 'kohe loka', '123', ''),
(121, 'kohir', '234', ''),
(122, 'kohe', 'remix', ''),
(123, 'rendi', '12345', ''),
(124, 'rendra', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
