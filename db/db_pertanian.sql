-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mei 2019 pada 06.44
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pertanian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `poruductID` int(11) NOT NULL,
  `price` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `transaction_code` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `orderid` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` double(11,2) NOT NULL,
  `productID` int(11) NOT NULL,
  `total` double(11,2) NOT NULL,
  `status` varchar(100) NOT NULL,
  `modeofpayment` varchar(100) NOT NULL,
  `transaction_code` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
  `id_barang` int(20) NOT NULL,
  `id_petani` int(20) NOT NULL,
  `nama_barang` text NOT NULL,
  `keterangan` text NOT NULL,
  `harga` text NOT NULL,
  `gambar` blob NOT NULL,
  `jenis` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_petani`, `nama_barang`, `keterangan`, `harga`, `gambar`, `jenis`) VALUES
(3, 0, 'NPK', 'NPK merupakan jenis pupuk terbaik', '40000', 0x4e504b2e6a7067, 'Pupuk'),
(5, 0, 'SP36', 'SP36 merupakan jenis pupuk alami', '48000', 0x737033362e6a7067, 'Pupuk'),
(6, 0, 'Pupuk Kandang', 'Pupuk kandang merupakan jenis pupuk alami dan murah', '20000', 0x6b616e64616e672e6a7067, 'Pupuk'),
(7, 0, 'Insektisida', 'Pestisida merupakan jenis pemberantas serangga', '35000', 0x696e73656b7469736964612e6a7067, 'Pestisida');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE IF NOT EXISTS `tbl_kontak` (
  `id_kontak` int(20) NOT NULL,
  `nama` text NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama`, `NIK`, `pesan`) VALUES
(1, '687', '68768', '6868'),
(2, 'Narto', '33280913410', 'saya telah memesan barang pupuk'),
(3, 'bagus', '33280913410', 'sya telah pesan barang pupuk NPK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petani`
--

CREATE TABLE IF NOT EXISTS `tbl_petani` (
  `id_petani` int(10) NOT NULL,
  `nama_petani` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_petani`
--

INSERT INTO `tbl_petani` (`id_petani`, `nama_petani`, `alamat`, `no_hp`) VALUES
(2, 'kiki', 'hjkhh', 87678687),
(3, 'uiyuyijhg', '76686', 68686);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE IF NOT EXISTS `tb_member` (
  `memberID` int(25) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Contact_Number` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tbl_petani`
--
ALTER TABLE `tbl_petani`
  ADD PRIMARY KEY (`id_petani`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_petani`
--
ALTER TABLE `tbl_petani`
  MODIFY `id_petani` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `memberID` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
