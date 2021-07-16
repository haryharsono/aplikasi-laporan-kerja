-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Jul 2021 pada 20.28
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan_bphtb`
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
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kecamatan`) VALUES
(1, 'Panakkukang'),
(2, 'Rappocini'),
(3, 'makassar'),
(4, 'Tamalandrea'),
(5, 'Biringkanaya'),
(6, 'Bontoala'),
(7, 'wajo'),
(8, 'Ujung tanah'),
(9, 'Tallo'),
(10, 'Tamalate'),
(11, 'Mamajang'),
(12, 'Mariso'),
(13, 'Ujung pandang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `wajib_pajak` varchar(50) NOT NULL,
  `Nama_penjual` varchar(100) NOT NULL,
  `nop` varchar(100) NOT NULL,
  `lokasi_objek_pajak` varchar(50) NOT NULL,
  `kecamatan_objek` varchar(100) NOT NULL,
  `kelurahan_objek` varchar(50) NOT NULL,
  `luas_tanah` varchar(50) NOT NULL,
  `luas_bangunan` varchar(50) NOT NULL,
  `njop_tanah` varchar(50) NOT NULL,
  `njop_bangunan` varchar(100) NOT NULL,
  `hasil_njop_tanah` varchar(100) NOT NULL,
  `hasil_njop_bangunan` varchar(100) NOT NULL,
  `njop_pbb` varchar(100) NOT NULL,
  `harga_transaksi` varchar(100) NOT NULL,
  `npoptkp` varchar(100) NOT NULL,
  `bphtb` varchar(100) NOT NULL,
  `ket_tanah` varchar(100) NOT NULL,
  `ppat` varchar(100) NOT NULL,
  `keterangan_pembayaran` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `wajib_pajak`, `Nama_penjual`, `nop`, `lokasi_objek_pajak`, `kecamatan_objek`, `kelurahan_objek`, `luas_tanah`, `luas_bangunan`, `njop_tanah`, `njop_bangunan`, `hasil_njop_tanah`, `hasil_njop_bangunan`, `njop_pbb`, `harga_transaksi`, `npoptkp`, `bphtb`, `ket_tanah`, `ppat`, `keterangan_pembayaran`, `tanggal`) VALUES
(12, 'hary hidayat harsono', 'kamal', '73 71 100 014 004 0650 0', 'Jl. Boulevard Raya', 'Panakkukang', 'Masale', '87', '36', '1.722.000', '455.000', '149.814.000', '16.380.000', '166.194.000', '285.000.000', '60.000.000', '11.250.000', '01 (Jual Beli)', 'Sri Muryani', 'sudah membayar', '2021-07-17'),
(13, 'Alexander Polim', 'Raymond', '73 71 100 012 007 0116 0', 'jl Racing Centre', 'Panakkukang', 'Karangpuang', '1025', '0', '1.416.000', '0', '1.451.400.000', '0', '1.451.400.000', '1.500.000.000', '60.000.000', '72.000.000', '01 (Jual Beli)', 'Ronald Tungari', 'belum membayar', '2021-07-17');

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
-- Struktur dari tabel `npoptkp`
--

CREATE TABLE `npoptkp` (
  `id` int(11) NOT NULL,
  `npoptkp_harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `npoptkp`
--

INSERT INTO `npoptkp` (`id`, `npoptkp_harga`) VALUES
(1, '60.000.000'),
(2, '300.000.000');

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
-- Struktur dari tabel `penjualan_tanah`
--

CREATE TABLE `penjualan_tanah` (
  `id` int(11) NOT NULL,
  `keterangan_penjualan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan_tanah`
--

INSERT INTO `penjualan_tanah` (`id`, `keterangan_penjualan`) VALUES
(1, '01 (Jual Beli)'),
(2, '02 (Jual Beli)'),
(3, '03 (Hibah)'),
(4, '05 (Waris)'),
(5, '07 (Aphb)'),
(6, '08 (Lelang)'),
(7, '16 (Penerbitan)');

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
(2, 'haryo', '101010@gmail.com', '2020-12-14 10:59:44', '1111111', NULL, NULL, NULL, NULL),
(4, 'ilham', 'ilhamtenriajeng03@gmail.com', NULL, '$2y$10$zGFUKOXxl5LaaP7V4xxbDui1UPAElKAyn3hkTTNs7FUBbttBpDYO2', NULL, NULL, '2020-12-07 04:23:59', '2020-12-07 04:23:59'),
(6, 'hary hidayat harsono', 'hary311098@gmail.com', NULL, '$2y$10$L1hv3RVCXUkyFMOSTsx.t.diNjuh/OBMDE.Rs484sVP.k84PMCq6u', 1, NULL, '2021-05-03 21:59:07', '2021-05-03 21:59:07'),
(7, 'hary hidayat harsono 123', 'hary@gmail.com', NULL, '$2y$10$jgSZehppXePTeFi40d7AdOz6AxzRPxgUhasBYofVR8kYkxLoTlpAK', 1, NULL, '2021-07-02 14:17:05', '2021-07-02 14:17:05'),
(10, 'hary hidayat harsono', '311098haryharsono@gmail.com', NULL, '$2y$10$g1WKZ2jI2WyRrdABt0oCR.FUFfAUWMOca03mEaV8Iu5ij5YWBiS0q', NULL, NULL, '2021-07-16 08:33:08', '2021-07-16 08:33:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `npoptkp`
--
ALTER TABLE `npoptkp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penjualan_tanah`
--
ALTER TABLE `penjualan_tanah`
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
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `npoptkp`
--
ALTER TABLE `npoptkp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penjualan_tanah`
--
ALTER TABLE `penjualan_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
