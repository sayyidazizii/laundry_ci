-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 01:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `estimasi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga`, `estimasi`) VALUES
(1, 'cuci aja', 4000, 2),
(2, 'setrika aja', 3000, 2),
(3, 'cuci & setrika', 7000, 2),
(4, 'cepat jadi', 10000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '123',
  `level` enum('A','K','O','P') NOT NULL DEFAULT 'P',
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `email`, `password`, `level`, `alamat`, `nohp`) VALUES
(1, 'Sayyid ', 'sayyidsyafiq234@gmail.com', '123', 'P', 'sokasari,jumantono', '085602678871'),
(2, 'said', 'said@gmail.com', '123', 'P', 'Kebak,Kebakramat,Karanganyar', '0897325872'),
(3, 'Arya ', 'arya@gmail.com', '123', 'P', 'Matesih,karanganyar', '0897325872'),
(4, 'Antik ', 'nurantik@gmail.com', '123', 'P', 'Lalung,Karanganyar', '0897455362'),
(6, 'Tyas Wahyu', 'tyaswahyu@gmail.com', '123', 'P', 'Kalijirak,Karanganyar', '0896312483');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_pelanggan` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_paket` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('terkirim','dijemput','proses','selesai') NOT NULL DEFAULT 'terkirim',
  `alamat` varchar(255) NOT NULL,
  `tgl_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_kembali` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_pelanggan`, `nama`, `id_paket`, `jumlah`, `harga`, `status`, `alamat`, `tgl_masuk`, `tgl_kembali`) VALUES
(1, 1, 'Sayyid ', 2, 10, 3000, 'selesai', 'sokasari,jumantono', '2022-02-04 16:15:06', '2022-02-06 00:00:00'),
(2, 2, 'said', 2, 5, 4000, 'selesai', 'Kebak,Kebakramat,Karanganyar', '2022-02-04 16:19:38', '2022-02-06 00:00:00'),
(3, 4, 'Antik ', 3, 0, 0, 'dijemput', 'Lalung,Karanganyar', '2022-02-04 16:26:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '123',
  `level` enum('A','K','O') NOT NULL DEFAULT 'K'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 'A'),
(2, 'owner', 'owner@gmail.com', 'owner123', 'O'),
(3, 'kasir', 'kasir@gmail.com', 'kasir123', 'K'),
(5, 'sayyid admin', 'sayyidsyafiq234@gmail.com', 'sayyid123', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_paket` (`id_paket`,`harga`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `nama` (`nama`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
