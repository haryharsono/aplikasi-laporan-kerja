-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2020 pada 12.27
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan_kerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kabupaten_kota`
--

CREATE TABLE `tabel_kabupaten_kota` (
  `id` int(11) NOT NULL,
  `nama_kabupaten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kabupaten_kota`
--

INSERT INTO `tabel_kabupaten_kota` (`id`, `nama_kabupaten`) VALUES
(1, 'MAKASSAR'),
(2, 'GOWA'),
(3, 'JENEPONTO'),
(4, 'BANTAENG'),
(5, 'SINJAI'),
(6, 'BULUKUMBA'),
(7, 'SELAYAR'),
(8, 'PANGKEP'),
(9, 'PARE-PARE'),
(10, 'PINRANG'),
(11, 'SIDRAP'),
(12, 'SOPPENG'),
(13, 'WAJO'),
(14, 'ENREKANG'),
(15, 'TANA TORAJA'),
(16, 'LUWU'),
(17, 'LUWU UTARA'),
(18, 'LUWU TIMUR'),
(19, 'TORAJA UTARA'),
(20, 'MAROS'),
(21, 'BARRU'),
(22, 'TAKALAR'),
(23, 'BONE'),
(24, 'PALOPO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pelaksana`
--

CREATE TABLE `tabel_pelaksana` (
  `id` int(11) NOT NULL,
  `pelaksana` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_pelaksana`
--

INSERT INTO `tabel_pelaksana` (`id`, `pelaksana`) VALUES
(1, 'PENGAWASAN'),
(2, 'HUBAL'),
(3, 'HUMAS'),
(4, 'SENGKETA'),
(5, 'SDM'),
(6, 'PENINDAKAN'),
(7, 'KEUANGAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master`
--

CREATE TABLE `tbl_master` (
  `id` int(11) NOT NULL,
  `id_kabupaten` varchar(50) NOT NULL,
  `tgl_laporan` date NOT NULL,
  `sasaran_kerja` varchar(50) NOT NULL,
  `nama_pelaksana` varchar(50) DEFAULT NULL,
  `bagian_pelaksana` varchar(50) NOT NULL,
  `uraian_kerja` varchar(50) NOT NULL,
  `jumlah_output_hasil` int(50) NOT NULL,
  `kendala` varchar(50) NOT NULL,
  `dokument_lampiran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_master`
--

INSERT INTO `tbl_master` (`id`, `id_kabupaten`, `tgl_laporan`, `sasaran_kerja`, `nama_pelaksana`, `bagian_pelaksana`, `uraian_kerja`, `jumlah_output_hasil`, `kendala`, `dokument_lampiran`) VALUES
(1, 'MAKASSAR', '2020-12-31', 'belajar', 'hary', 'Pengawasan', 'tidak ada', 500000, 'tidak ada', 'beleekekek'),
(2, 'MAKASSAR', '2020-12-07', '', 'asd', 'sda', 'sda', 12312, 'sda', 'asddf'),
(3, 'GOWA', '2020-12-08', 'WQEQWE', 'ASDSD', 'SDAD', 'ASDQ', 123123, 'weq', 'zxcxc'),
(4, 'MAKASSAR', '2020-12-06', 'belajar', 'hary', 'Pengawasan', 'tidak ada', 12323, 'tidak ada', 'asdsd'),
(5, 'GOWA', '2020-12-06', 'belajar', 'hary', 'Pengawasan', 'tidak ada', 500000, 'tidak ada', 'ASDFF'),
(6, 'MAKASSAR', '2020-12-06', 'tidak ada', 'AYU ANDIRA ADRIANTI SOFYAN', 'Pengawasan', 'asdlkl', 700000, 'tidak ada', 'resident-evil-resident-evil-6-4042.jpg'),
(7, 'MAKASSAR', '2020-12-06', 'tidak ada', 'hary hidayat harsono', 'Pengawasan', 'asdlkl', 700000, 'tidak ada', 'new-instagram-logo-png-transparent-light.png'),
(8, 'MAKASSAR', '2020-12-06', 'tidak ada', 'haryharsono', 'Pengawasan', 'asdlkl', 700000, 'tidak ada', 'C:\\xampp\\tmp\\phpC030.tmp'),
(9, 'MAKASSAR', '2020-12-06', 'tidak ada', 'dipanegara coding', 'Pengawasan', 'asdlkl', 700000, 'tidak ada', 'C:\\xampp\\tmp\\php964F.tmp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hary', '311098haryharsono@gmail.com', NULL, '$2y$10$4djAmAXTYt5irZsXXpOTLeQDRnNVihfQtQ5tTXNXWRljtFGtWLqWa', NULL, NULL, '2020-12-06 09:45:19', '2020-12-06 09:45:19'),
(2, 'haryo', '101010@gmail.com', '2020-12-14 10:59:44', '1111111', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tabel_kabupaten_kota`
--
ALTER TABLE `tabel_kabupaten_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_pelaksana`
--
ALTER TABLE `tabel_pelaksana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_master`
--
ALTER TABLE `tbl_master`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_kabupaten_kota`
--
ALTER TABLE `tabel_kabupaten_kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tabel_pelaksana`
--
ALTER TABLE `tabel_pelaksana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_master`
--
ALTER TABLE `tbl_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
