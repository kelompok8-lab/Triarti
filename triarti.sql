-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2021 pada 09.37
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triarti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank_sampah`
--

CREATE TABLE `bank_sampah` (
  `no` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jenis` text NOT NULL,
  `berat` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `lampiran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank_sampah`
--

INSERT INTO `bank_sampah` (`no`, `nama`, `jenis`, `berat`, `alamat`, `lampiran`) VALUES
(1, 'Dyahayu', 'Anorganik', '1 kg', 'Ketintang', 'Kertas koran'),
(2, 'Vika Fandila', 'Anorganik', '1 kg', 'Lidah Wetan', 'Botol dan kertas'),
(3, 'Maulidya Rista', 'Anorganik', '+- 7.5 kg', 'Wiyung', 'TV dan radio bekas'),
(4, 'Kevin Erfianto', 'Anorganik', '5 kantong kresek merah besar', 'Candi Sidoarjo', 'Sepatu bekas, botol-botol plastik'),
(5, 'Rista', 'Anorganik', '1 kg', 'Wiyung Surabaya', 'Botol bekas dan kaleng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `nama` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `profesi` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`nama`, `username`, `alamat`, `profesi`, `no_telp`, `email`) VALUES
('Dyahayu Retno Wulan', 'dyahayu', 'Ketintang', 'Mahasiswa', '085348142232', 'wulandyah@yahoo.co.id'),
('Kevin Erfianto', 'kevinerfianto', 'Candi, Sidoarjo', 'PNS', '087812342321', 'kevin@yahoo.co.id'),
('Maulidya Rista Yuniar', 'maulidyarista', 'Wiyung', 'Mahasiswa', '082266591287', 'maulidya@gmail.com'),
('Triarti Bank Sampah Online', 'triarti', 'Surabaya', 'Web Developer', '081234567899', 'triarti@email.com'),
('Vika Fandila Cahyani', 'vikafandila', 'Ketintang', 'Dosen', '085213897445', 'vikacahyani@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `banyakmya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`id`, `bulan`, `banyakmya`) VALUES
(1, 'Oktober', 10),
(2, 'November', 5),
(3, 'Desember', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'triarti', 'kelompok8'),
(2, 'maulidyarista', 'rista123'),
(3, 'dyahayu', 'dyahayu123'),
(4, 'vikafandila', 'vikafandila123'),
(5, 'kevinerfianto', 'kevin123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank_sampah`
--
ALTER TABLE `bank_sampah`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank_sampah`
--
ALTER TABLE `bank_sampah`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
