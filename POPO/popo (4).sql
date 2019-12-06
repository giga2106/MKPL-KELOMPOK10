-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 04:43 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `popo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Nama`, `username`, `password`) VALUES
(1, 'Indra Nanda', 'indranan', 'e882b72bccfc2ad578c27b0d9b472a14');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `nama_parent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `id_parent`, `nama_parent`) VALUES
(1, 'Sepatu Sepak Bola', NULL, ''),
(2, 'Sepatu Futsal', NULL, ''),
(3, 'Sepatu Basket', NULL, ''),
(4, 'Jersey Bola', NULL, ''),
(5, 'Bola voli', NULL, ''),
(6, 'Raket Bulutangkis', NULL, ''),
(7, 'Kaos kaki Bola', NULL, ''),
(8, 'Tas Futsal', NULL, ''),
(9, 'Bola Sepak', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id_merek` int(11) NOT NULL,
  `nama_merek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id_merek`, `nama_merek`) VALUES
(1, 'Nike'),
(2, 'Yonex'),
(3, 'Adidas'),
(4, 'Puma'),
(5, 'Molten');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(100) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `batas_bayar` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `status` enum('belum','proses') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`, `tanggal_pembelian`, `batas_bayar`, `total_pembelian`, `status`) VALUES
(1, 1, 'Supeni Waluyo', '0345768757685', 'Jl. Kembang Kertas No.5 Jatimulyo RT08/RW04 Kec. Lowokwaru Kota Malang ', '2018-11-09', '2018-11-12', 4500000, 'belum'),
(2, 1, 'Supeni Waluyo', '0345768757685', 'Jl. Kembang Kertas No.5 Jatimulyo RT08/RW04 Kec. Lowokwaru Kota Malang ', '2018-11-09', '2018-11-12', 1700000, 'proses'),
(3, 2, 'Panjul Setiawan', '0234657876', 'Ds. pagergumbuk RT06/RW02 kec.wonoayu kab.sidoarjo ', '2018-11-09', '2018-11-12', 1450000, 'belum'),
(4, 2, 'Panjul Setiawan', '0234657876', 'Ds. pagergumbuk RT06/RW02 kec.wonoayu kab.sidoarjo ', '2018-11-09', '2018-11-12', 450000, 'belum'),
(5, 1, 'Supeni Waluyo', '0345768757685', 'Jl. Kembang Kertas No.5 Jatimulyo RT08/RW04 Kec. Lowokwaru Kota Malang ', '2018-11-12', '2018-11-15', 1350000, 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_peralatan` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id_order`, `id_peralatan`, `banyak`, `biaya`) VALUES
(1, 49, 5, 3000000),
(1, 47, 3, 1500000),
(2, 46, 9, 1350000),
(2, 39, 1, 350000),
(3, 48, 3, 1050000),
(3, 44, 1, 400000),
(4, 46, 3, 450000),
(5, 50, 3, 1200000),
(5, 46, 1, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `username_pelanggan` varchar(100) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(20) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `username_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'indra', 'indranandarachmawan@gmail.com', 'e882b72bccfc2ad578c27b0d9b472a14', 'Supeni Waluyo', '0345768757685', 'Jl. Kembang Kertas No.5 Jatimulyo RT08/RW04 Kec. Lowokwaru Kota Malang '),
(2, 'indra2', 'indra@gmail.com', 'e882b72bccfc2ad578c27b0d9b472a14', 'Panjul Setiawan', '0234657876', 'Ds. pagergumbuk RT06/RW02 kec.wonoayu kab.sidoarjo ');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `id_peralatan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `nama_peralatan` varchar(100) NOT NULL,
  `harga_peralatan` int(11) NOT NULL,
  `stock_peralatan` int(11) NOT NULL,
  `berat_peralatan` int(11) NOT NULL,
  `foto_peralatan` varchar(100) NOT NULL,
  `deskripsi_peralatan` mediumtext NOT NULL,
  `tgl_diubah` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`id_peralatan`, `id_kategori`, `id_merek`, `nama_peralatan`, `harga_peralatan`, `stock_peralatan`, `berat_peralatan`, `foto_peralatan`, `deskripsi_peralatan`, `tgl_diubah`) VALUES
(37, 1, 1, 'Sepatu Bola versi ke 1', 500000, 100, 350, 'gambar-01112018194313.jpg', '   Artname: LOTTO STADIO P VI 700 ID\r\nArtno: R.8827\r\nColour: YELL SAF/SHIVER', '2018-11-09 13:02:19'),
(38, 2, 3, 'Sepatu Futsal 1', 700000, 24, 350, 'gambar-01112018194401.jpg', ' Artname: LOTTO STADIO P VI 700 ID\r\nArtno: R.8827\r\nColour: YELL SAF/SHIVER', '2018-11-02 03:04:16'),
(39, 5, 5, 'Bola voli kuning', 350000, 49, 500, 'gambar-01112018194413.jpg', '  - Artno: BV58SL\r\n- Artname: Molten BV58SL\r\n- Categori: Local Competitions\r\n- Material: Bola Voli Pantai', '2018-11-02 02:27:34'),
(42, 3, 1, 'Sepatu Basket Versi 1', 900000, 20, 300, 'gambar-01112018194620.jpg', '  PEAK ALL DAY SERIES !!!\r\n\r\nSKU : E33373A\r\nColour : BLACK\r\nMaterial : Synthetic leather upper, rubber midsole, rubber outsole', '2018-11-02 02:19:36'),
(43, 4, 3, 'Jersey Bola Vesi lain', 150000, 48, 75, 'gambar-01112018201645.jpg', ' Arname: GRAVITY VN  \r\nCode : -\r\nSize : S / M / L / XL/ XXL \r\nColour : Red\r\nPackage: Jersey', '2018-11-02 02:16:45'),
(44, 6, 2, 'Raket Bulutangkis', 400000, 29, 100, 'gambar-01112018201913.jpg', '  Yonex Arcsaber Light 5i Specifications\r\nFrame Material	H.M. Full Graphite\r\nShaft Material	H.M. Full Graphite\r\nFlex	Medium\r\nWeight	78g +/- 2 (5U-G5)\r\nLength	665mm +/- 2\r\nMax Tension	28 lbs', '2018-11-02 02:22:14'),
(45, 1, 4, 'Sepatu Bola versi beda', 450000, 40, 300, 'gambar-01112018210745.png', '  no.art R8825\r\nperpaduan rubber synthetic upper\r\nRubber sole\r\nWarna Fanta FL/BLK', '2018-11-02 03:07:45'),
(46, 7, 3, 'Kaos Kaki Bola', 150000, 67, 50, 'gambar-01112018202456.jpg', 'Soft Feel And Durable\r\nDibuat degnan 100% Nylon dengan Spandex.\r\nOriginal 100%\r\nWarna biru', '2018-11-02 02:24:56'),
(47, 9, 5, 'Bola Sepak Molten', 500000, 57, 450, 'gambar-01112018202725.jpg', '- Artno: F5G 2600-KS\r\n- Artname: Molten  F5G 2600-KS\r\n- Size: 5\r\n- Colour: Black / SIlver\r\n- Categori: Local Competition\r\n- Material: Polyurethane Leather, Laminated', '2018-11-02 02:27:25'),
(48, 8, 3, 'Tas Futsal', 350000, 27, 450, 'gambar-01112018203151.jpg', 'Artname: Shoulder Bag\r\nArtno: H6013N\r\nColor: Blue', '2018-11-02 02:31:51'),
(49, 2, 4, 'Sepatu Futsal 22', 600000, 80, 350, 'gambar-01112018210539.jpg', 'Warna merah\r\nOriginal 100%\r\nTerbuat dari bahan kuat', '2018-11-02 03:05:39'),
(50, 4, 3, 'Jersey Bola Barca ', 400000, 36, 200, 'gambar-01112018211303.jpg', 'Terbuat dari bahan kuat\r\nTidak mudah robek\r\nWarna hitam\r\nTersedia ukuran M/L/XL', '2018-11-02 03:13:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_pelanggan` (`id_pelanggan`) USING BTREE;

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`id_peralatan`),
  ADD KEY `id_merek` (`id_merek`),
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `id_peralatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD CONSTRAINT `peralatan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `peralatan_ibfk_2` FOREIGN KEY (`id_merek`) REFERENCES `merek` (`id_merek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
