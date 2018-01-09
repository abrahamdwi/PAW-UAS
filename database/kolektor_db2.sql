-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 09:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolektor_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `usia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `usia`, `harga`, `keterangan`, `gambar`, `kategori`) VALUES
(62, 'Norton G1000', 48, 90000000, 'Motor jaman old, masih bagus dan mulus', '../foto_brg/index.jpg', 16),
(63, 'honda cb500', 70, 100000000, 'mantap masih jaman now bangett', '../foto_brg/Honda-CB.jpg', 16),
(64, 'Ferrari 166 MM/ 195 ', 68, 900000000, 'Mobil Ferrari 166 MM/ 195 S Berllnetta Le Mans ini memiliki kecepatan yang sangat tinggi jika dibandingkan dengan mobil â€“ mobil biasanya. Awalnya mobil Ferrari 166 MM/ 195 S Berllnetta Le Mans ini hanya dimiliki oleh orang Amerika. Orang Amerika yang memiliki mobil ini adalah salah satu pembalap yang berasal dari Amerika, Briggs Cunningham', 'foto_brg/11.jpg', 12),
(65, 'Mercedez-Benz 540 K ', 80, 800000000, 'Mobil ini sangat cocok bagi anda yang suka dengan gaya sport yang trendi sehingga akan memberikan penampilan anda lebih unik lagi karena dengan keantikan mobil ini. Mobil yang sudah masuk kedalam kategori mobil antik termahal di dunia sehingga membuat anda sulit mendapatkan dan harga nya pun tidak semurah mobil â€“ mobil keluaran terbaru yang sudah di pasarkan.', 'foto_brg/12.jpg', 12),
(66, 'Guci dinasti warior', 190, 250000000, 'guci paling antik di jaman dinasti warior', 'foto_brg/3.jpg', 15),
(67, 'Guci d45 jerman', 190, 190000000, 'bagus dan masih amat terawat dalam kondisi mulus', 'foto_brg/4.jpg', 15),
(68, 'Honda C70', 48, 50000000, 'Honda c70 keluaran tahun 1970 ini sangat langka dan antik untuk para pecinta motor klasik, dijamin original spare partnya!!', 'foto_brg/Honda-C70.jpg', 16),
(69, 'Ford GT40 Gulf Mirag', 57, 600000000, 'Mobil ini didesain dengan tampilannya yang sangat gagah dan memiliki desain dua jok yang modern. Ditambah lagi dengan desain ban gambot yang berada di bagian depan dan belakang mobil. Namun dibalik semua itu, mobil ini memiliki usia yang cukup tua dan digolongkan ke dalam mobil antik. ', 'foto_brg/14.jpg', 12),
(70, 'Duesenberg Model J M', 90, 650000000, 'Mobil ini dibekali dengan mesin bertipe DOHC straight-8 optional supercharger yang mampu mengeluarkan tenaga hingga 256 hp pada putaran 4250 rpm pada keadaan normal serta dapat mencapai 320 hp putaran 4200 rpm pada saat kondisi supercharged. Selain itu teknologi tinggi lainnya yang disematkan ke dalam mobil ini antara lain adalah rem vacuum, sistem hidrolik yang berukuran cukup besar dan masih banyak lainnya.', 'foto_brg/13.jpg', 12),
(71, 'Triump HJ-1900', 50, 250000000, 'Motor ini pernah dipakai oleh raditya dika, olehnya menjadi barang antik nan bagus', 'foto_brg/5296321_20130619074054.jpg', 16),
(72, 'Guci tanah liat dina', 50, 230000000, 'pada jaman dinasti ming ho yue, guci ini merupakan alat tukar yang sangat berharga pada jaman itu', 'foto_brg/5.jpg', 15),
(73, 'patung budha', 1000, 340000000, 'sebuah patung budha yang sedang bertapa.yang jadi menarik pada Koleksi Patung Budha adalah warnarna keemasan yang terdapat pada pating tersebut yang berwarna keemasan sehingga sangatlah menarik bila anda jadikan koleksi antik anda.pastikan diri anda beruntung mendapatkan Koleksi Patung Budha.', 'foto_brg/koleksi-patung-budha1-450x450.jpg', 17),
(74, 'Triump HJ-950', 30, 150000000, 'Motor langka hanya ada 50 unit didunia pada saat di produksi ', 'foto_brg/Daftar-Motor-Antik-Paling-Di-Cari.jpg', 16),
(75, 'Guci keramik 1605', 413, 140000000, 'Guci pada masa 1605 merupakan tempat untuk menaruh air dilamnya yang sangat langa, barang bagus masih ori seperti barang baru', 'foto_brg/6.jpg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `nama_` varchar(20) NOT NULL,
  `email_` varchar(20) NOT NULL,
  `subjek` varchar(20) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `nama_`, `email_`, `subjek`, `pesan`) VALUES
(2, '', '', '', ''),
(4, 'ro', 'ro@yahoo.com', 'keluhan', 'bagaimana ini p'),
(5, 'adip', 'asip@fmfmf.co', 'sadsa', 'sadfsafsafs mau daftar dibg'),
(6, 'erik', 'erik@gege.col', 'ph', 'ihh mau daftar');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(12, 'Mobil'),
(15, 'aksesoris'),
(16, 'motor'),
(17, 'patung');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_customer` varchar(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_customer`, `nama_barang`, `harga`, `jumlah_beli`, `total_harga`, `gambar`) VALUES
(18, '28', 'honda cb500', 100000000, 0, 100000000, NULL),
(19, '28', 'Norton G1000', 90000000, 0, 90000000, NULL),
(20, '29', 'honda cb500', 100000000, 0, 100000000, NULL),
(21, '30', 'Ferrari 166 MM/ 195 ', 900000000, 0, 900000000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload_barang`
--

CREATE TABLE `upload_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `tgl_barang` date NOT NULL,
  `harga_brg` int(100) NOT NULL,
  `deskripsi_brg` varchar(100) NOT NULL,
  `file_img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_barang`
--

INSERT INTO `upload_barang` (`id_barang`, `nama_barang`, `tgl_barang`, `harga_brg`, `deskripsi_brg`, `file_img`) VALUES
(4, 'tungku langka', '1980-12-11', 340000, 'bagus mulus', 'CHI.png'),
(5, 'tungku langka', '1980-12-11', 340000, 'bagus mulus', 'CHI.png'),
(6, 'f1 langka diecast', '1999-12-12', 77888888, 'bagus', 'fi-edit.jpg'),
(7, 'asdas', '2017-12-13', 123213, 'weqwe', 'Capture.JPG'),
(8, 'kai langka', '2017-12-01', 90000, 'bagus', 'jadwal-kereta-api_20170316_162234.jpg'),
(9, 'toyota', '1955-12-09', 90000000, 'bagus mulus', 'lamborghini estoque.jpg'),
(10, 'kond', '1780-09-29', 900000000, 'bagus mulus', 'AC2_1.jpg'),
(11, 'panci', '1890-09-05', 9000000, 'bagus mulus dr firaun', 'fi-edit.jpg'),
(12, '', '0000-00-00', 0, '', ''),
(13, '', '0000-00-00', 0, '', ''),
(14, '', '0000-00-00', 0, '', ''),
(15, '', '0000-00-00', 0, '', ''),
(16, '', '0000-00-00', 0, '', ''),
(17, '', '0000-00-00', 0, '', ''),
(18, '', '0000-00-00', 0, '', ''),
(19, '', '0000-00-00', 0, '', ''),
(20, '', '0000-00-00', 0, '', ''),
(21, '', '0000-00-00', 0, '', ''),
(22, 'hp 1976', '1990-12-03', 8000000, 'Bagus dan mulus', 'wiragarda_wahana_waspada_pt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tlp` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `tanggal_lahir`, `alamat`, `tlp`, `username`, `email`, `password`) VALUES
(28, 'Abraham Kurniawan', '1990-02-09', 'Jalan jakarta bandung, Jabar', 2147483647, 'bramsok', 'bramsok@gmail.com', '1234'),
(29, 'Adi', '1990-09-29', 'panyileukan', 982373672, 'adinnn', 'adin@m.c', '321'),
(30, 'Adiputra', '1990-11-27', 'Bekasi', 98273551, 'dip', 'dip@p.c', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_barang`
--
ALTER TABLE `upload_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `upload_barang`
--
ALTER TABLE `upload_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
