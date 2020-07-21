-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2020 pada 20.36
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

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
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(7, 'almiraaa', 'almira123', 'Almira Haswinitha', 'almirahaswinitha@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamenu`
--

CREATE TABLE `datamenu` (
  `idmenu` varchar(20) NOT NULL,
  `kategori-menu` varchar(30) NOT NULL,
  `nama-menu` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `idresto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datamenu`
--

INSERT INTO `datamenu` (`idmenu`, `kategori-menu`, `nama-menu`, `harga`, `idresto`) VALUES
('A11YT', 'Snack', 'Dimsum', '6000', 'A12345'),
('A12ER', 'mie', 'Mie Setan', '12000', 'A12345'),
('A12QQ', 'snack', 'siomay', '6000', 'A12345'),
('A15NM', 'sweet', 'Es Genderuwo', '10000', 'A12345'),
('A67AQ', 'dessert', 'Triple Cheese', '20000', 'A67891'),
('A67WD', 'dessert', 'Tiramisu', '15000', 'A67891');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
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
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`idresto`, `namaresto`, `alamat`, `hari-operasional`, `waktu buka`, `waktu tutup`, `deskripsi`, `gambar`) VALUES
('A12345', 'Mie Gacoan - Tamsis', 'Jl. Taman Siswa No.27, Wirogunan, Kec. Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55151', 'setiap har', '07.00', '07.00', 'Tersedia berbagai macam makanan mie dan makanan penutup lainnya', 'miegacoan.png'),
('A67891', 'Moreo Dessert - Depo', 'Jl. Sepakbola No.91, Ngropoh, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'setiap har', '10.00', '22.00', 'Menjual berbagai macam dessert manis yang enak', 'moreo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
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
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`idpengguna`, `namapengguna`, `jeniskelamin`, `email`, `katasandi`, `gambar`) VALUES
('11111', 'almirahaswinitha', 'perempuan', 'almirahaswinitha@gmail.com', 'almira1', 'almira.png'),
('33333', 'trywulandary', 'perempuan', 'trywulandary@gmail.com', 'try3', 'try.png'),
('55555', 'muhammadfatkhurrozi', 'laki-laki', 'muhammadfatkhurrozi@gmail.com', 'fatur55', 'fatur.png'),
('77777', 'najibroyyan', 'laki-laki', 'najibroyyan@gmail.com', 'royan77', 'royyan.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `datamenu`
--
ALTER TABLE `datamenu`
  ADD PRIMARY KEY (`idmenu`),
  ADD KEY `idresto` (`idresto`);

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`idresto`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idpengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datamenu`
--
ALTER TABLE `datamenu`
  ADD CONSTRAINT `datamenu_ibfk_1` FOREIGN KEY (`idresto`) REFERENCES `kuliner` (`idresto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
