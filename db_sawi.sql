-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2023 pada 15.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sawi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_latih`
--

CREATE TABLE `data_latih` (
  `No` int(11) NOT NULL,
  `ukuran_akar` varchar(15) NOT NULL,
  `warna_akar` varchar(15) NOT NULL,
  `tekstur_akar` varchar(15) NOT NULL,
  `ukuran_batang` varchar(15) NOT NULL,
  `warna_batang` varchar(15) NOT NULL,
  `tekstur_batang` varchar(15) NOT NULL,
  `ukuran_daun` varchar(15) NOT NULL,
  `warna_daun` varchar(15) NOT NULL,
  `kesimpulan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_latih`
--

INSERT INTO `data_latih` (`No`, `ukuran_akar`, `warna_akar`, `tekstur_akar`, `ukuran_batang`, `warna_batang`, `tekstur_batang`, `ukuran_daun`, `warna_daun`, `kesimpulan`) VALUES
(1, 'proporsional', 'krem', 'lembek', 'proporsional', 'hijau_muda', 'kaku', 'proporsional', 'hijau', '1'),
(2, 'terlalu_kecil', 'krem', 'kaku', 'proporsional', 'hijau_muda', 'kaku', 'proporsional', 'hijau', '1'),
(3, 'terlalu_kecil', 'hitam', 'lembek', 'proporsional', 'kekuningan', 'lembek', 'proporsional', 'kekuningan', '2'),
(4, 'proporsional', 'krem', 'kaku', 'proporsional', 'hijau_muda', 'kaku', 'proporsional', 'hijau', '1'),
(5, 'proporsional', 'krem', 'kaku', 'terlalu_kecil', 'hijau_muda', 'kaku', 'terlalu_kecil', 'hijau', '1'),
(6, 'membengkak', 'hitam', 'kaku', 'terlalu_kecil', 'hijau_muda', 'kaku', 'proporsional', 'hijau', '2'),
(7, 'proporsional', 'krem', 'kaku', 'proporsional', 'kekuningan', ' lembek', 'proporsional', 'kekuningan', '2'),
(8, 'proporsional', 'krem', 'kaku', 'proporsional', 'hijau_muda', 'kaku', 'proporsional', 'kekuningan', '2'),
(9, 'terlalu_kecil', 'krem', 'lembek', 'proporsional', 'kekuningan', 'lembek', 'terlalu_kecil', 'kekuningan', '2'),
(10, 'proporsional', 'hitam', 'lembek', 'proporsional', 'hijau_muda', 'kaku', 'proporsional', 'hijau', '1'),
(11, 'membengkak', 'krem', 'kaku', 'proporsional', 'hijau_muda', 'kaku', 'terlalu_kecil', 'hijau', '1'),
(12, 'membengkak', 'hitam', 'lembek', 'terlalu_kecil', 'kekuningan', 'lembek', 'terlalu_kecil', 'kekuningan', '2'),
(13, 'proporsional', 'krem', 'kaku', 'proporsional', 'hijau_muda', 'kaku', 'terlalu_kecil', 'kekuningan', '2'),
(14, 'proporsional', 'krem', 'kaku', 'terlalu_kecil', 'hijau_muda', 'kaku', 'proporsional', 'hijau', '1'),
(15, 'proporsional', 'krem', 'kaku', 'terlalu_kecil', 'hijau_muda', 'kaku', 'terlalu_kecil', 'hijau', '1'),
(16, 'terlalu_kecil', 'krem', 'lembek', 'terlalu_kecil', 'hijau_muda', 'kaku', 'proporsional', 'hijau', '1'),
(17, 'terlalu_kecil', 'krem', 'lembek', 'terlalu_kecil', 'kekuningan', 'kaku', 'proporsional', 'kekuningan', '2'),
(18, 'proporsional', 'krem', 'lembek', 'terlalu_kecil', 'kekuningan', 'kaku', 'proporsional', 'hijau', '1'),
(19, 'terlalu_kecil', 'krem', 'lembek', 'terlalu_kecil', 'kekuningan', 'kaku', 'proporsional', 'hijau', '2'),
(20, 'membengkak', 'hitam', 'kaku', 'proporsional', 'hijau_muda', 'kaku', 'proporsional', 'hijau', '1'),
(21, 'proporsional', 'krem', 'kaku', 'terlalu_kecil', 'kekuningan', 'lembek', 'proporsional', 'hijau', '1'),
(22, 'proporsional', 'krem', 'kaku', 'proporsional', 'hijau_muda', 'kaku', 'terlalu_kecil', 'kekuningan', '2'),
(23, 'proporsional', 'krem', 'kaku', 'terlalu_kecil', 'hijau_muda', 'kaku', 'terlalu_kecil', 'hijau', '1'),
(24, 'proporsional', 'hitam', 'kaku', 'terlalu_kecil', 'kekuningan', 'kaku', 'terlalu_kecil', 'hijau', '1'),
(25, 'proporsional', 'hitam', 'kaku', 'terlalu_kecil', 'kekuningan', 'kaku', 'terlalu_kecil', 'kekuningan', '2'),
(26, 'proporsional', 'krem', 'kaku', 'terlalu_kecil', 'kekuningan', 'kaku', 'terlalu_kecil', 'kekuningan', '1'),
(27, 'proporsional', 'krem', 'kaku', 'proporsional', 'kekuningan', 'kaku', 'terlalu_kecil', 'kekuningan', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `no` int(11) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `masalah` varchar(100) NOT NULL,
  `penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`no`, `bagian`, `masalah`, `penyakit`) VALUES
(1, 'ukuran_akar', 'terlalu_kecil', '1. Kekurangan nutrisi <br>\n2. Kepadatan tanah yang tinggi <br>\n3. Serangan hama <br>'),
(2, 'ukuran_akar', 'membengkak', '1. Infeksi jamur <br>\r\n2. Kelebihan air <br> '),
(3, 'warna_akar', 'hitam', '1. Infeksi jamur <br>\r\n2. Kelebihan air <br>'),
(4, 'tekstur_akar', 'lembek', '1. Kekurangan air <br>\n2. Akar busuk <br>\n3. Infeksi jamur<br> '),
(5, 'ukuran_batang', 'terlalu_kecil', '1. Kekurangan nutrisi <br>\n2. Kekurangan cahaya matahari<br>'),
(6, 'warna_batang', 'kekuningan', '1. Kekurangan air <br> \n2. Kekurangan klorofil <br>'),
(7, 'tekstur_batang', 'lembek', '1. Kekurangan air <br> \n2. Kekurangan nutrisi <br> \n3. Infeksi jamur <br>'),
(8, 'ukuran_daun', 'terlalu_kecil', '1. Kekurangan nutrisi <br>\n2. Jarak tanaman terlalu padat <br>\n3. Serangan hama <br>'),
(9, 'warna_daun', 'kekuningan', '1. Kekurangan nutrisi  <br> \n2. Kelebihan sinar matahari <br>\n3. Kelebihan air <br>\n4. Ph tanah tidak seimbang <br>'),
(10, 'ukuran_akar', 'proposional', '-'),
(11, 'warna_akar', 'krem', '-'),
(12, 'tekstur_akar', 'kaku', '-'),
(13, 'ukuran_batang', 'proposional', '-'),
(14, 'warna_batang', 'hijau_muda', '-'),
(15, 'tekstur_batang', 'kaku', '-'),
(16, 'ukuran_daun', 'proposional', '-'),
(17, 'warna_daun', 'hijau', '-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_latih`
--
ALTER TABLE `data_latih`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_latih`
--
ALTER TABLE `data_latih`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
