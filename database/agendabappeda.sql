-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2021 pada 08.28
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agendabappeda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminagendakegiatan`
--

CREATE TABLE `adminagendakegiatan` (
  `id` int(11) NOT NULL,
  `nama_acara` varchar(255) NOT NULL,
  `jam_acara` varchar(100) NOT NULL,
  `tanggal_acara` varchar(100) NOT NULL,
  `penanggung_jawab` varchar(100) NOT NULL,
  `ruangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adminagendakegiatan`
--

INSERT INTO `adminagendakegiatan` (`id`, `nama_acara`, `jam_acara`, `tanggal_acara`, `penanggung_jawab`, `ruangan`) VALUES
(5, 'Rapat RT', '17:02', '24 Juni 2021', 'Rizki', 'Ruang Kepala'),
(7, 'Rapat Se-Kecamatan', '19:25', '26 Juni 2021', 'Lutfi Eko', 'Ruang Kepala'),
(8, 'Rapat Bappeda Se-Jawa Tengah', '20:56', '05 Juli 2021', 'Rizki Dwi Martanto', 'Ruang Space Room'),
(9, 'Rapat Bersama Walikota Semarang', '20:57', '05 Juli 2021', 'Muhammad Fernanda Ilham', 'Ruang Sekretaris'),
(10, 'Dharma Wanita Bersama Pegawai Bappeda', '10:10', '06 Juli 2021', 'Fauzan Agra', 'Ruang Kepala'),
(11, 'Rapat Kampung Tematik', '21:18', '05 Juli 2021', 'Rizki Dwi Martanto', 'Ruang Kepala'),
(12, 'Rapat Bersama Kecamatan Semarang Barat', '21:22', '05 Juli 2021', 'Muhammad Fernanda Ilham', 'Ruang Space Room'),
(13, 'Rapat Bersama Kecamatan Ngaliyan', '21:27', '05 Juli 2021', 'Fauzan Agra', 'Ruang Sekretaris'),
(14, 'Pembahsan Mengenai Kampung Tematik', '11:30', '20 Juli 2021', 'Lutfi Eko', 'Ruang Kepala'),
(15, 'Pembahsan Mengenai Kampung Tematik', '11:30', '20 Juli 2021', 'Lutfi Eko', 'Ruang Kepala'),
(16, 'Rapat Perencanaan Pembangunan', '10:45', '08 Juli 2021', 'Budi Lestari', 'Ruang Kepala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadirankerja`
--

CREATE TABLE `kehadirankerja` (
  `id` int(11) NOT NULL,
  `kepala` varchar(155) NOT NULL,
  `serketariat` varchar(155) NOT NULL,
  `kepala_bidang_ekonomi` varchar(155) NOT NULL,
  `tanggal` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kehadirankerja`
--

INSERT INTO `kehadirankerja` (`id`, `kepala`, `serketariat`, `kepala_bidang_ekonomi`, `tanggal`) VALUES
(2, 'Kepala Bappeda Ada', 'serketariat Tidak Ada', 'Kepala Bidang Ekonomi Ada', '25 Juni 2021'),
(3, 'Kepala Bappeda Ada', 'Serketariat Ada', 'Kepala Bidang Ekonomi Ada', '05 Juli 2021'),
(4, 'Kepala Bappeda Tidak Ada', 'Serketariat Ada', 'Kepala Bidang Ekonomi Tidak Ada', '05 Juli 2021');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adminagendakegiatan`
--
ALTER TABLE `adminagendakegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kehadirankerja`
--
ALTER TABLE `kehadirankerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `adminagendakegiatan`
--
ALTER TABLE `adminagendakegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kehadirankerja`
--
ALTER TABLE `kehadirankerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
