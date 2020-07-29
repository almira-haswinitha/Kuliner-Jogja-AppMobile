-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 02:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliner_jogja`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamenu`
--

CREATE TABLE `datamenu` (
  `idmenu` varchar(20) NOT NULL,
  `kategori-menu` varchar(30) NOT NULL,
  `nama-menu` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `idresto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamenu`
--

INSERT INTO `datamenu` (`idmenu`, `kategori-menu`, `nama-menu`, `harga`, `idresto`) VALUES
('M001', 'makanan', 'mi ayam', '10.000', 'R001'),
('M002', 'makanan', 'gudeg', '15.000', 'R006'),
('M003', 'minuman', 'kopi arang', '5.000', 'R008'),
('M004', 'minuman', 'susu vanilla', '10.000', 'R009');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `idresto` varchar(20) NOT NULL,
  `namaresto` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `hari-operasional` varchar(10) NOT NULL,
  `waktu buka` varchar(10) NOT NULL,
  `waktu tutup` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`idresto`, `namaresto`, `alamat`, `hari-operasional`, `waktu buka`, `waktu tutup`, `deskripsi`, `gambar`) VALUES
('R001', 'Mi ayamTumini', 'Jl. Imogiri Tim. No.187, Giwangan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55163', 'senin-ming', '10.00', '17.00', 'Pencinta mie ayam jika ke Yogyakarta wajib mencicipi \'Mie Ayam Tumini\'. Berbeda dengan mie ayam biasa, racikan mie ayam ini disiram kuah kare yang kental. Nyam!\r\n', ''),
('R002', 'Sate klatak pak pong', 'Jl. Sultan Agung No.18, Jejeran II, Wonokromo, Kec. Pleret, Bantul, Daerah Istimewa Yogyakarta 55791', 'senin-ming', '09.00', '23.30', 'Sate Klatak Pak Pong terkenal unik karena tampilannya yang berbeda. Sate klatak adalah sate yang terbuat dari daging kambing muda yang dibakar dengan tusukan kambing yang berbeda dari biasanya. Jika biasanya sate kambing memakai tusukan bambu sedangkan sate klatak di sini menggunakan jeruji sepeda.', ''),
('R003', 'wedang ronde mbak Di', ' Jl. Alun-Alun Utara No.1, Kadipaten, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55132', 'senin-ming', '18.00', '00.00', 'Wedang ronde terkenal di kawasan Jawa Tengah dan Yogyakarta, banyak masyarakat di daerah tersebut yang menjajakan minuman hangat ini. Cita rasa wedang ronde akrab di lidah warga Indonesia tetapi minuman ini bukan asli Indonesia.', ''),
('R004', 'Mie gacoan', 'Ruko Raflessia Babarsari, Jl. Raya Kledokan No.10, Kledokan, Caturtunggal, Depok Sub-District, Sleman Regency, Special Region of Yogyakarta 55281', 'senin-ming', '10.00', '22.00', 'Mie Gacoan menjadi tempat bersantap mie terbaik terutama bagi pelajar dan mahasiswa, dimana mereka bisa nongkrong, kerja tugas, ngobrol santai, dan ngeksis bareng. Dengan tempat yang atraktif, dan juga dilengkapi berbagai fasilitas', ''),
('R005', 'nasi pecel lempuyang', 'Jl. Dr. Wahidin Sudirohusodo No.6, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55224', 'senin-ming', '06.00', '17.30', 'Warung ini berlokasi di dekat flyover Lempuyangan, kalau dari selatan kita lewatin flyovernya lalu disebelah kanan ada toko kunci, dibelakang toko kunci itulah warung ini berada.', ''),
('R006', 'Gudeg Yu Djum Wijila', 'Jl. Wijilan No.167, Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55131', 'senin-ming', '06.00', '22.00', 'Gudeg Yu Djum sebagai salah satu sentra gudeg legendaris di Jogja tentunya memiliki banyak pembeli yang tersebar di seluruh kota Jogja. ', ''),
('R007', 'oseng-oseng mercon b', 'Jl. KH. Ahmad Dahlan Jl. Purwodiningratan No.110, Ngampilan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55262', 'senin-ming', '18.00', '00.00', 'Sesuai dengan namanya, siapapun yang menikmati masakan ini akan merasakan rasa pedas yang akan meledakk di lidah. Bukan perupamaan yang berlebihan karena bahan utama untuk membuat oseng-oseng ini adalah cabai rawit.', ''),
('R008', 'kopi arang malioboro', 'Inna Garuda Area, Jl. Malioboro No.60, Suryatmajan, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55213', 'senin-ming', 'buka 24 ja', '', 'Kopi Joss adalah jenis penyajian kopi yang diseduh dengan air panas dan dimasukan bongkahan arang panas yang berwarna merah. Jenis penyajian ini memang unik, namun menghasilkan cita rasa yang khas pada kopi tersebut.', ''),
('R009', 'sugara milk', 'Jl. Lowanu, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162', 'senin-ming', '11.00', '01.00', 'SUGARA MILK adalah tempat nongkrong yang tepat bagi anda penggemar susu segar di Jogjakarta lokasi kami juga sangat strategis di jogjakarta', ''),
('R010', 'soto ayam idola pak ', 'Gg. Putra Bangsa I No.53B, Warungboto, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'senin-ming', '06.00', '15.00', 'Soto Ayam Pak Nanang merupakan warung yang menyediakan hidangan soto ayam di sekitar Janturan Umbulharjo. Keberadaannya cukup dikenal karena cita rasanya yang khas dan harganya cukup terjangkau', '');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `idpengguna` varchar(20) NOT NULL,
  `namapengguna` varchar(20) NOT NULL,
  `jeniskelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `email` varchar(30) NOT NULL,
  `katasandi` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`idpengguna`, `namapengguna`, `jeniskelamin`, `email`, `katasandi`, `gambar`) VALUES
('P001', 'Adhi', 'laki-laki', 'adhi@gmail.com', '098761', 'adhi.jpg'),
('P002', 'Budi', 'laki-laki', 'budi@gmail.com', '125434', 'budi.jpg'),
('P003', 'Jessica', 'perempuan', 'jessica@gmail.com', '097723', 'jessica.jpg'),
('P004', 'Nurul', 'perempuan', 'nurul@gmail.com', '150219', 'nurul.jpg'),
('P005', 'Dewi', 'perempuan', 'dewi@gmail.com', '250319', 'dewi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamenu`
--
ALTER TABLE `datamenu`
  ADD PRIMARY KEY (`idmenu`),
  ADD KEY `idresto` (`idresto`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`idresto`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datamenu`
--
ALTER TABLE `datamenu`
  ADD CONSTRAINT `datamenu_ibfk_1` FOREIGN KEY (`idresto`) REFERENCES `kuliner` (`idresto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
