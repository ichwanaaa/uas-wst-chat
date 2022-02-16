-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2021 pada 10.30
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_p10`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `nama_chat` varchar(111) NOT NULL,
  `text_chat` text NOT NULL,
  `tgl_chat` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id_chat`, `nama_chat`, `text_chat`, `tgl_chat`) VALUES
(112, 'Rama Fauzan', 'waalaikumsalam', '17:43:39'),
(113, 'Denny Rafly', 'waalaikumsalam', '17:43:52'),
(121, 'aaa', 'ccc', '00:00:00'),
(122, 'www', 'bbbb', '00:00:00'),
(123, 'Ichwan Arizki', 'haloo', '15:32:37'),
(124, 'Ichwan Arizki', 'haloo', '15:32:37'),
(125, 'Ichwan Arizki', 'aaaa', '16:05:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran_spp`
--

CREATE TABLE `tbl_pembayaran_spp` (
  `kd_spp` int(111) NOT NULL,
  `nis` varchar(111) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah_bayar` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembayaran_spp`
--

INSERT INTO `tbl_pembayaran_spp` (`kd_spp`, `nis`, `tgl_bayar`, `jumlah_bayar`) VALUES
(1, '1122', '2021-11-01', '10000'),
(2, '1122', '2021-11-25', '50000'),
(3, '1133', '2021-11-25', '20000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `nis` int(111) NOT NULL,
  `nama_chat` varchar(111) NOT NULL,
  `prodi` varchar(111) NOT NULL,
  `fakultas` varchar(111) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`nis`, `nama_chat`, `prodi`, `fakultas`, `url`) VALUES
(1122, 'Ichwan Arizki', 'Teknik Informatika', 'Komputer', 'https://bootdey.com/img/Content/avatar/avatar1.png'),
(1133, 'Rama Fauzan', 'teknik informatika', 'komputer', 'https://bootdey.com/img/Content/avatar/avatar2.png'),
(1135, 'Arfan Zaky', 'Teknik Informatika', 'Komputer', 'https://bootdey.com/img/Content/avatar/avatar7.png'),
(1136, 'Denny Rafly', 'Teknik Informatika', 'Komputer', 'https://bootdey.com/img/Content/avatar/avatar8.png'),
(1137, 'Ammar Zulfikar', 'Teknik Informatika', 'Komputer', 'https://bootdey.com/img/Content/avatar/avatar3.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indeks untuk tabel `tbl_pembayaran_spp`
--
ALTER TABLE `tbl_pembayaran_spp`
  ADD PRIMARY KEY (`kd_spp`);

--
-- Indeks untuk tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran_spp`
--
ALTER TABLE `tbl_pembayaran_spp`
  MODIFY `kd_spp` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `test`
--
ALTER TABLE `test`
  MODIFY `nis` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
