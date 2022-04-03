-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2022 pada 16.50
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amanulloh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_099`
--

CREATE TABLE `tbl_099` (
  `id_mhs` int(5) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `nim_mhs` varchar(13) NOT NULL,
  `alamat_mhs` varchar(30) NOT NULL,
  `no_mhs` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_099`
--

INSERT INTO `tbl_099` (`id_mhs`, `nama_mhs`, `nim_mhs`, `alamat_mhs`, `no_mhs`) VALUES
(1, 'Akhmad Amanulloh', '200411100099', 'Jombang', '088102627'),
(2, 'coba', '111', 'Jombang', '0999'),
(6, 'Coba 3', '20004411', 'Jawa timur', '0881989');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_099`
--
ALTER TABLE `tbl_099`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_099`
--
ALTER TABLE `tbl_099`
  MODIFY `id_mhs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
