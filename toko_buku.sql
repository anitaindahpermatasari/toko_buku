-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 03:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `kode_buku` int(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `isbn` int(13) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `nama_penerbit` varchar(100) NOT NULL,
  `jumlah_halaman` int(5) NOT NULL,
  `edisi_buku` int(5) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `rak_buku` varchar(20) NOT NULL,
  `stok_awal` int(5) NOT NULL,
  `harga_pokok` int(11) NOT NULL,
  `ppn` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`kode_buku`, `judul_buku`, `isbn`, `nama_pengarang`, `nama_penerbit`, `jumlah_halaman`, `edisi_buku`, `tahun_terbit`, `rak_buku`, `stok_awal`, `harga_pokok`, `ppn`, `diskon`, `harga_jual`) VALUES
(1, 'Omen', 12345, 'Lexie Xu', 'PT Gramedia Pustaka', 500, 1, 2012, 'Thrailer', 50, 50600, 10, 5, 53130),
(2, 'Omen 2 : Tujuh Lukisan Horor', 67890, 'Lexie Xu', 'PT Gramedia Pustaka', 500, 1, 2012, 'Thrailer', 50, 63800, 10, 5, 66990),
(3, 'Omen 3 : Misteri Organisasi Rahasia The Judges', 24680, 'Lexie Xu', 'PT Gramedia Pustaka', 400, 1, 2012, 'Thrailer', 50, 49500, 10, 5, 51975),
(4, 'Omen 4 : Malam Karnaval Berdarah', 13579, 'Lexie Xu', 'PT Gramedia Pustaka', 700, 1, 2012, 'Thrailer', 50, 70400, 10, 5, 73920),
(5, 'Omen 5 : Kutukan Hantu Opera', 14589, 'Lexie Xu', 'PT Gramedia Pustaka', 700, 1, 2012, 'Thrailer', 50, 70400, 10, 5, 73920),
(6, 'Omen 6 : Sang Pengkhianat', 26703, 'Lexie Xu', 'PT Gramedia Pustaka', 800, 1, 2012, 'Thrailer', 50, 81400, 10, 5, 85470),
(7, 'Omen 7 : Target Terakhir', 89362, 'Lexie Xu', 'PT Gramedia Pustaka', 800, 1, 2012, 'Thrailer', 50, 82500, 10, 5, 86625),
(8, 'Johan Series 1 : Obsesi', 21937, 'Lexie Xu', 'PT Gramedia Pustaka', 400, 1, 2013, 'Thrailer', 50, 49500, 10, 5, 51975),
(9, 'Johan Series 2 : Pengurus MOS Harus Mati', 49204, 'Lexie Xu', 'PT Gramedia Pustaka', 500, 1, 2013, 'Thrailer', 50, 50600, 10, 5, 53130),
(10, 'Johan Series 3 : Permainan Maut', 39827, 'Lexie Xu', 'PT Gramedia Pustaka', 400, 1, 2013, 'Thrailer', 50, 47300, 10, 5, 49665);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penjualan`
--

CREATE TABLE `tabel_penjualan` (
  `kode_penjualan` int(20) NOT NULL,
  `kode_buku` int(20) NOT NULL,
  `jumlah_buku` int(5) NOT NULL,
  `harga_buku_satuan` int(11) NOT NULL,
  `total_harga_buku` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tanggal_penjualan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_penjualan`
--

INSERT INTO `tabel_penjualan` (`kode_penjualan`, `kode_buku`, `jumlah_buku`, `harga_buku_satuan`, `total_harga_buku`, `pembayaran`, `kembalian`, `tanggal_penjualan`) VALUES
(1, 8, 2, 51975, 103950, 150000, 46050, '2021-06-14'),
(2, 9, 1, 53130, 53130, 100000, 46870, '2021-06-14'),
(3, 10, 2, 49665, 99330, 100000, 670, '2021-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level_user` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(12345, 'Anita Indah Permata Sari', 'admin', '12345', 'admin'),
(67890, 'Alexandra Vihruze', 'member', '67890', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD PRIMARY KEY (`kode_penjualan`),
  ADD KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `kode_buku` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12355;

--
-- AUTO_INCREMENT for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  MODIFY `kode_penjualan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
