-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2019 at 04:52 PM
-- Server version: 8.0.15
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onesound`
--

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `nama`, `email`, `subject`, `message`, `flag`) VALUES
(1, 'dimas', 'dimasgg@gmail.com', 'coba', 'tes123123123asd', 0),
(2, 'mbong', 'mbong123@yahoo.com', 'gggggg', 'gggagagagagagagagagagag', 0),
(3, 'reffanreffan', 'reffanqq@gmail.com', 'coba', 'afafasdasf', 0),
(5, 'asfasfasf', 'reffan@gmail.com', 'asda', 'asfasfasf', 0),
(6, 'reffan pandu', 'reffan014@gmail.com', 'cobacoba', 'halohalohalohalo', 0),
(7, 'Pandu', 'pandu@gmail.com', 'hmmmmm', 'hmmmmmmmm\r\nhmmmmhm\r\nhmm\r\nhm', 1),
(8, 'halo', 'halo@yahoo.com', 'asfbaksf', 'aljsfasbfljablfw', 0),
(9, 'reffan', 'reffan014@gmail.com', 'mmmmmm', 'mmmmmmmmmm', 1),
(10, 'Reffan', 'reffan014@gmail.com', 'Cobaa', 'Halohalohaicobacoba', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `img`, `harga`) VALUES
(1, 'RIZKY FEBIAN \"JEJAK\"', '1.jpg', 470000),
(2, 'COLDIAC \"O\"', '2.jpg', 450000),
(3, 'ED SHEERAN \"DIVIDE\"', '3.jpg', 850000);

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`id`, `nama_lengkap`, `email`, `no_telp`, `alamat`, `username`) VALUES
(3, 'reffan pandu', 'reffan014@gmail.com', '082245384900', 'malang', 'reffanpandu'),
(4, 'Danni', 'danni@gmail.com', '082245386900', 'Jakarta', 'danidani'),
(5, 'pandua', 'reffan_insid1e@yahoo.co.id', '081238724', 'bali', 'pandua'),
(6, 'Bambang', 'bambang@gamil.com', '08224584900', 'Malang', 'bambang');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id`, `id_produk`, `produk`, `jumlah`, `bayar`, `flag`) VALUES
(2, 3, 1, 'RIZKY FEBIAN - JEJAK', 4, 0, 0),
(3, 3, 2, 'COLDIAC - O', 2, 900000, 0),
(4, 3, 2, 'COLDIAC - O', 2, 900000, 0),
(5, 3, 3, 'ED SHEERAN - DIVIDE', 3, 2550000, 0),
(6, 3, 1, 'RIZKY FEBIAN - JEJAK', 5, 2350000, 0),
(16, 4, 1, 'RIZKY FEBIAN - JEJAK', 1, 450000, 0),
(17, 3, 3, 'ED SHEERAN - DIVIDE', 5, 4250000, 0),
(18, 4, 2, 'COLDIAC - O', 2, 900000, 0),
(19, 4, 1, 'RIZKY FEBIAN - JEJAK', 3, 1410000, 0),
(20, 5, 1, 'RIZKY FEBIAN - JEJAK', 2, 940000, 0),
(21, 5, 1, 'RIZKY FEBIAN - JEJAK', 1, 470000, 0),
(22, 5, 1, 'RIZKY FEBIAN - JEJAK', 1, 470000, 0),
(23, 3, 3, 'ED SHEERAN - DIVIDE', 1, 850000, 1),
(24, 6, 1, 'RIZKY FEBIAN - JEJAK', 1, 470000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_guest` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_guest`, `username`, `password`, `level`) VALUES
(1, 0, 'reffan', 'admin', 1),
(2, 0, 'pandu', 'user', 2),
(3, 3, 'reffanpandu', 'qweqweqwe', 2),
(4, 4, 'danidani', 'qweasdzxc', 2),
(5, 5, 'pandua', 'inside', 2),
(6, 6, 'bambang', 'qwerty', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`) VALUES
(1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_id` (`id`),
  ADD KEY `fk_id_produk` (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_level` (`level`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regist`
--
ALTER TABLE `regist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `regist` (`id`),
  ADD CONSTRAINT `fk_id_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
