-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 06:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_piutang`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'admin1', '12345', 'Arif', '1'),
(2, 'admin2', '12345', 'Budi', '2'),
(5, 'test2', 'sasasa', 'Danu Nurhakim', '2');

-- --------------------------------------------------------

--
-- Table structure for table `data_customer`
--

CREATE TABLE `data_customer` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text,
  `no_telp` varchar(20) NOT NULL,
  `utang` int(11) DEFAULT NULL,
  `piutang` int(11) DEFAULT NULL,
  `diskon` int(3) NOT NULL,
  `created_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_customer`
--

INSERT INTO `data_customer` (`id`, `nama`, `alamat`, `no_telp`, `utang`, `piutang`, `diskon`, `created_by`) VALUES
(5825, 'Tomy Nania', 'Jl. Mulu Jadian Kaga', '02726371826', 0, 0, 10, 'admin1'),
(2226, 'Rudy', 'Jl. Mansuri no.900', '08283712687', 0, 0, 3, 'admin1'),
(5923, 'Dani Saputra', 'Ciputat No .90', '08845687556', 0, 0, 15, 'admin1'),
(4024, 'Galih', 'Depok Jaya No.10', '65855113221', 0, 0, 20, 'admin1'),
(3132, 'Adinda Nursari', 'Jl. EnamSembilan no.69', '742673467', 125000, 0, 10, 'gg07'),
(4206, 'Janeen Tapia Dinnyes', 'Jakarta selatan', '8766887675', 0, 0, 10, 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_customer` varchar(100) DEFAULT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `peminjaman` int(11) DEFAULT NULL,
  `pembayaran` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `piutang` int(11) DEFAULT NULL,
  `utang` int(11) DEFAULT NULL,
  `diskon` int(2) DEFAULT NULL,
  `input_by` varchar(50) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_customer`, `nama_customer`, `peminjaman`, `pembayaran`, `tanggal`, `piutang`, `utang`, `diskon`, `input_by`, `is_active`) VALUES
(84, '742673467', 'Adinda Nursari', 50000000, 0, '2019-01-16 23:54:51', 0, 49000000, 2, 'Arif - admin1', 1),
(85, '742673467', 'Adinda Nursari', 10000000, 0, '2019-01-16 23:55:31', 0, 58000000, 10, 'Arif - admin1', 1),
(86, '742673467', 'Adinda Nursari', 100000000, 0, '2019-01-16 23:55:56', 0, 148000000, 10, 'Arif - admin1', 1),
(87, '742673467', 'Adinda Nursari', 0, 57550000, '2019-01-16 23:56:41', 0, 90450000, 10, 'Arif - admin1', 1),
(88, '742673467', 'Adinda Nursari', 0, 100000000, '2019-01-16 23:56:58', 9550000, 0, 10, 'Arif - admin1', 1),
(90, '742673467', 'Adinda Nursari', 5500000, 0, '2019-01-17 00:02:48', 4600000, 0, 10, 'admin1', 1),
(91, '742673467', 'Adinda Nursari', 1000000, 0, '2019-01-17 00:12:41', 3700000, 0, 10, 'admin1', 1),
(92, '742673467', 'Adinda Nursari', 200000, 0, '2019-01-17 00:12:53', 3520000, 0, 10, 'admin1', 1),
(93, '742673467', 'Adinda Nursari', 300000, 0, '2019-01-17 00:13:07', 3250000, 0, 10, 'admin1', 1),
(94, '742673467', 'Adinda Nursari', 3000000, 0, '2019-01-17 00:13:33', 550000, 0, 10, 'admin1', 1),
(95, '742673467', 'Adinda Nursari', 750000, 0, '2019-01-17 00:17:33', 0, 125000, 10, 'admin1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`no_telp`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
