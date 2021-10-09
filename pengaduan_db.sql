-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2021 pada 10.58
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` bigint(20) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(13, 'Akang Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '087741130522', 'admin'),
(14, 'Petugas', 'petugas', '670489f94b6997a870b148f74744ee5676304925', '087741130522', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id` bigint(20) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`id`, `nik`, `nama`, `username`, `password`, `telp`) VALUES
(11, '0987654321456789', 'Nama Warga 3', 'warga3', '09cad029366f5d94782483e667d3eede14102801', '082133455678'),
(12, '1234567890098765', 'Nama Warga 1', 'warga1', 'ae7fc2228fffd444dc7920067cb79f7f80dd56b4', '080041130522'),
(13, '1234567890987645', 'Nama Warga 4', 'warga4', 'cb9935e328bf37ddf9676cc0cf698c108274aac6', '087741130522'),
(14, '1234567890987654', 'Nama Warga 5', 'warga5', 'fb89bf3381234da7a91eb3e891c9b3f362b03510', '082133455678'),
(15, '3275053403960003', 'desankun jaya', 'desankun', '7c4a8d09ca3762af61e59520943dc26494f8941b', '08769828397464'),
(16, '0343489789076543', 'nenik kurniasih', 'nenik', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0897689765473');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id` bigint(20) NOT NULL,
  `tgl` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('ditanggapi','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id`, `tgl`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(20, '2021-01-09', '1234567890987654', 'Lapor, Mohon bantuannya di desa kami desa sukahati telah terjadi banjir bandang yang sangat besar, mohon segera kirimkan bantuan kedesa kami\r\nTerimakasih', 'Banjir3.jpg', 'ditanggapi'),
(21, '2021-01-09', '1234567890098765', 'Lapor, mohon bantuannya telah terjadi longsor yang besar di desa kami di desa sukahati mohon segera kirimkan bantuan ke desa kami\r\nTerimakasih', 'longsor1.jpg', 'selesai'),
(23, '2021-01-09', '0987654321123456', 'Lapor, mohon dibantu warga kami saat ini telah diterjang banjir, mohon segera kirimkan kami bahan makanan untuk diposko desa sukahati\r\nTerimakasih', 'Banjir4.jpg', 'ditanggapi'),
(24, '2021-09-10', '3275053403960003', 'pelanggaran hak uang', '2.JPG', 'selesai'),
(25, '2021-09-11', '3275053403960003', 'kebanjiran', '21.JPG', 'selesai'),
(26, '2021-09-21', '3275053403960003', 'terjadi keributan', 'api_laravel.JPG', 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_regis`
--

CREATE TABLE `tb_regis` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(70) NOT NULL,
  `tempat` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `pendidikan_formal` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `status_kerja` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `mulai_bekerja` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_regis`
--

INSERT INTO `tb_regis` (`id`, `nama_lengkap`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_formal`, `status`, `status_kerja`, `nama_perusahaan`, `mulai_bekerja`, `nik`, `divisi`, `alamat`, `foto`) VALUES
(2, 'desankun jaya', 'jakarta', '2021-10-12', 'Laki-laki', 'S1', 'Belum Kawin', 'Kontrak', 'PT Transportasi Jakarta', '2021-10-19', '3275053403960003', 'PLB Petugas', 'nsknvkjlfs', 'bridge.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tanggapan`
--

CREATE TABLE `tb_tanggapan` (
  `id` bigint(20) NOT NULL,
  `id_pengaduan` bigint(20) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tanggapan`
--

INSERT INTO `tb_tanggapan` (`id`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(3, 2, '2020-04-30', 'andi isi ya', 2),
(4, 3, '2020-04-30', ';ofalah ;alhf a;fha;ohf;ahfda', 2),
(5, 7, '2020-05-01', 'kami akan segera menyelesaikan nya\r\n', 2),
(6, 4, '2020-05-01', 'FDAdWADGFDA', 2),
(7, 11, '2021-01-08', 'ok', 2),
(8, 12, '2021-01-09', 'terimakasih', 13),
(9, 13, '2021-01-09', 'Baik terimakasih atas laporannya akan segara kami lakukan tindakan dan bantuan kelokasi', 13),
(10, 17, '2021-01-09', 'Terimakasih atas laporannya\r\nTim kami dan semua bantuan akan segera kami kerahkan dan siap untuk membantu dengan sepenuh hati\r\nMohon ditunggu dengan sabar dan tenang\r\nTerimakasih', 13),
(11, 15, '2021-01-09', 'Terimakasih atas laporannya\r\nTim kami dan semua bantuan akan segera kami kerahkan dan siap untuk membantu dengan sepenuh hati\r\nMohon ditunggu dengan sabar dan tenang\r\nTerimakasih', 13),
(12, 16, '2021-01-09', 'Terimakasih atas laporannya\r\nTim kami dan semua bantuan akan segera kami kerahkan dan siap untuk membantu dengan sepenuh hati\r\nMohon ditunggu dengan sabar dan tenang\r\nTerimakasih', 13),
(13, 18, '2021-01-09', 'Terimakasih atas laporannya\r\nTim kami dan semua bantuan akan segera kami kerahkan dan siap untuk membantu dengan sepenuh hati\r\nMohon ditunggu dengan sabar dan tenang\r\nTerimakasih', 13),
(14, 19, '2021-01-09', 'Terimakasih atas laporannya\r\nTim kami dan semua bantuan akan segera kami kerahkan dan siap untuk membantu dengan sepenuh hati\r\nMohon ditunggu dengan sabar dan tenang\r\nTerimakasih', 13),
(15, 23, '2021-01-09', 'Terimakasih atas laporannya\r\nTim kami dan semua bantuan akan segera kami kerahkan dan siap untuk membantu dengan sepenuh hati\r\nMohon ditunggu dengan sabar dan tenang\r\nTerimakasih', 13),
(16, 21, '2021-01-09', 'Terimakasih atas laporannya\r\nTim kami dan semua bantuan akan segera kami kerahkan dan siap untuk membantu dengan sepenuh hati\r\nMohon ditunggu dengan sabar dan tenang\r\nTerimakasih', 13),
(17, 22, '2021-09-10', 'baik laksanakan', 13),
(18, 24, '2021-09-10', 'akan diproses segera', 13),
(19, 20, '2021-09-10', 'baik akan di proses', 13),
(20, 25, '2021-09-11', 'baik saya akan laksanakan', 13);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_regis`
--
ALTER TABLE `tb_regis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_regis`
--
ALTER TABLE `tb_regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
