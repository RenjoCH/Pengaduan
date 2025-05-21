-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2022 pada 10.40
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kec` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `pelapor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `date`, `nama`, `kec`, `alamat`, `subjek`, `pesan`, `pelapor`) VALUES
(14, '2022-01-03 13:05:45', 'as', 'asd', 'asd', 'asd', 'asd', '2'),
(15, '2022-01-03 13:06:13', 'asd', 'asd', 'asdsda', 'sad', 'asd', 'riskimeji5@gmail.com'),
(16, '2022-01-03 13:06:40', 'ardi', 'amuas', '12aasd', 'asd', 'asd', 'ardimuhdin@gmail.com'),
(18, '2022-01-08 11:53:12', 'Ahmad Rizki Akbar Ganiyu', 'Kuranji', 'Jl. Durian Tarung', 'Buang Sampah', 'hkghjhhhj', 'riskimeji5@gmail.com'),
(19, '2022-01-10 11:23:44', 'Filbert Tri Athaillah', 'pauh', 'Jl. Bebas Sangka 2552', 'Keuangan', 'Mau minta duit dong', 'filbertathailah@gmail.com'),
(20, '2022-01-10 12:37:33', 'a', 'as', 'as', 'as', 'asd', 'riskimeji5@gmail.com'),
(21, '2022-04-23 20:19:40', 'asd', 'asd', 'asd', 'asd', 'sadasd', 'asdsa@gmail.com'),
(22, '2022-07-11 13:03:58', 'Ahmad Rizki Akbar Ganiyu', 'asdas', 'dasd', 'asdasd', 'sad', 'riskimeji5@gmail.com'),
(23, '2022-07-25 16:00:45', 'asasd', 'asd', 'asd', 'asd', 'asd', 'asdsad@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` int(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `uplink` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket_respond`
--

CREATE TABLE `ticket_respond` (
  `id` int(10) NOT NULL,
  `ticket_id` int(20) NOT NULL,
  `pesan` text NOT NULL,
  `uplink` varchar(25) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `level`) VALUES
(1, 'admin ni', 'riskimeji6@gmail.com', 'jelek123', 'admin'),
(2, 'yudhi', 'riskimeji5@gmail.com', 'jelek123', 'member'),
(24, 'bakaas', 'ardimuhdin@gmail.com', 'jelek123', 'member'),
(25, 'angges', 'dafamuhammad277@gmail.com', 'jelek123', 'member'),
(27, 'Filbert', 'filbertathailah@gmail.com', 'jelek123', 'member'),
(28, 'Ahmad Rizki Akbar Ganiyu', 'asdsa@gmail.com', 'jelek123', 'member'),
(29, 'Ahmad Rizki Akbar Ganiyu', 'asdsad@gmail.com', 'jelek123', 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
