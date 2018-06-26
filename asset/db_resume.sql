-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2018 pada 10.39
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_resume`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `namkeg` varchar(50) NOT NULL,
  `tempat_pel` text NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_pengalaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`namkeg`, `tempat_pel`, `tahun`, `deskripsi`, `id_pengalaman`) VALUES
('PRAKTEK KERJA LAPANG', 'DISKOMINFOSTANDI Kota Bogor', '5 juni - 5 september', 'Membuat website menggunakan CodeIgniter dan membuat layout website, Desain banner, Inout Data kehalaman Admin.', 1),
('PROJECT WORK', 'SMK ADI SANGGORO', 'januari - maret 2017', 'Membuat Aplikasi Website SMPIT NURUL FAJAR memakai bahasa program PHP dan Menggunakan Framework Bootstrap ', 2),
('UJIAN KOMPETENSI KEAHLIAN', 'SMK ADI SANGGORO', '9 - 13 April 2018', 'Membuat Website Tagihan Listrik menggunakan Payment point Bank, Menggunakan Framework php Cideigniter dan Framework css Bootstrap.', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tempat` text NOT NULL,
  `tahun` varchar(15) NOT NULL,
  `jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama`, `tempat`, `tahun`, `jurusan`) VALUES
(2, 'SMK ADI SANGGORO', 'Bogor, Jawa Barat', '2015 - 2018', 'Rekayasa Perangkat Lunak'),
(3, 'SMPIT NURUL FAJAR', 'Bogor,Jawa barat', '2012 - 2015', ''),
(4, 'SDN CARANG PULANG 02', 'Bogor,Jawa barat', '2006 - 2012', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `nama` text NOT NULL,
  `log_dev` varchar(50) NOT NULL,
  `kemampuan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id_skill`, `nama`, `log_dev`, `kemampuan`) VALUES
(1, 'CodeIgniter', 'codeigniter', '80%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `alamat`, `status`, `agama`, `no_hp`, `email`, `kewarganegaraan`) VALUES
(1, 'Kp.Carang pulang RT 02 RW 05 ,Kec.Dramaga,Kab.Bogor,Kode Pos 16680', 'Belum menikah', 'islam', '0876547128', 'bima.natawi@gmail.co', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`) VALUES
('bima', 'bima', 'Bima Natawijaya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
