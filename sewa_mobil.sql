-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2020 pada 02.59
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mobil`
--

CREATE TABLE `data_mobil` (
  `Id_sewa` varchar(20) NOT NULL,
  `Nama_mobil` varchar(20) NOT NULL,
  `Harga_sewa` int(15) NOT NULL,
  `Lama_sewa` int(3) NOT NULL,
  `Harga_total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mobil`
--

INSERT INTO `data_mobil` (`Id_sewa`, `Nama_mobil`, `Harga_sewa`, `Lama_sewa`, `Harga_total`) VALUES
('0121', 'avanza', 250000, 4, 1000000),
('2121', 'ferrari', 5000000, 1, 5000000),
('3453', 'lamborghini', 5000000, 1, 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penyewa`
--

CREATE TABLE `data_penyewa` (
  `Id_penyewa` varchar(20) NOT NULL,
  `Nama_penyewa` varchar(30) NOT NULL,
  `Umur` int(3) NOT NULL,
  `Alamat` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_telp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penyewa`
--

INSERT INTO `data_penyewa` (`Id_penyewa`, `Nama_penyewa`, `Umur`, `Alamat`, `Email`, `No_telp`) VALUES
('0121', 'nogi', 20, 'komp.permata biru blok k2 no 22', 'nogir@gmail.com', 93243294),
('2322', 'asep', 22, 'permata biru blok k2', 'nogir16111998@gmail.com', 34343423),
('23445', 'dina', 32, 'komp.cibiru indah', 'dinacantik@gmail.com', 3435546),
('67876', 'dede', 34, 'Komp.cibiru indah', 'dedekasep@gmail.com', 5685665);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`Id_sewa`);

--
-- Indeks untuk tabel `data_penyewa`
--
ALTER TABLE `data_penyewa`
  ADD PRIMARY KEY (`Id_penyewa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
