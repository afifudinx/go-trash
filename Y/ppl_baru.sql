-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 02:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id_driver` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `informasis`
--

CREATE TABLE `informasis` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasis`
--

INSERT INTO `informasis` (`id`, `name`, `content`) VALUES
(1, 'Plastik', '1.000 - 5.000'),
(3, 'Kertas', '2.000 - 4.000'),
(4, 'Besi', '4.000 - 6.000');

-- --------------------------------------------------------

--
-- Table structure for table `tranksaksi`
--

CREATE TABLE `tranksaksi` (
  `id_tranksaksi` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `estimasi` int(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tranksaksi`
--

INSERT INTO `tranksaksi` (`id_tranksaksi`, `name`, `phone`, `jenis`, `estimasi`, `alamat`, `description`, `tanggal`, `id_user`) VALUES
(2, 'Febi Fadlilah Nur Aminah', '08970914456', 'kertas', 6, 'Pucangsimo RT.01/RW.04 Bandarkedungmulyo Jombang', 'Ditunggu segera', '2022-10-29', 2),
(3, 'Zuni Amanda', '085203310167', 'besi', 5, 'Gng mawar no 12', 'GPL YA', '2022-10-29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `firstname`, `lastname`, `email`, `nohp`, `address`) VALUES
(2, 'manda', 'amanda', 'Zuni', 'Amanda', 'amanda06@gmail.com', '085546945654', 'Lamongan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `informasis`
--
ALTER TABLE `informasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tranksaksi`
--
ALTER TABLE `tranksaksi`
  ADD PRIMARY KEY (`id_tranksaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasis`
--
ALTER TABLE `informasis`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tranksaksi`
--
ALTER TABLE `tranksaksi`
  MODIFY `id_tranksaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tranksaksi`
--
ALTER TABLE `tranksaksi`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
