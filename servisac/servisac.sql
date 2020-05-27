-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2020 pada 06.18
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servisac`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `namacustomer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `namacustomer`, `gender`, `alamat`, `kota`, `hp`, `created_at`, `updated_at`) VALUES
(2, 'elmira akmala', 'P', 'Jl.melati 5', 'jakarta', '087189654322', '2019-12-26 01:16:05', '2019-12-27 00:31:17'),
(3, 'choirunisa', 'P', 'Jl. mawar 3', 'Tangerang', '081245602314', '2019-12-26 01:16:53', '2019-12-27 00:52:50'),
(5, 'Ariana grande', 'P', 'Jl. apel 3', 'bogor', '081259641234', '2019-12-27 00:29:57', '2019-12-27 00:29:57'),
(6, 'Taylor Swift', 'P', 'Jl, anggrek 7', 'bandung', '081345697896', '2019-12-27 00:31:07', '2019-12-27 00:31:07'),
(7, 'Selena Gomez', 'P', 'Jl.salak 2', 'Depok', '081456971234', '2019-12-27 00:32:40', '2019-12-27 00:32:40'),
(8, 'Lisa blackpink', 'P', 'jl. batu', 'yogyakarta', '081459621738', '2019-12-27 00:34:05', '2019-12-27 00:34:05'),
(9, 'Irene Red velvet', 'P', 'Jl. jeruk', 'Malang', '086234526789', '2019-12-27 00:38:51', '2019-12-27 00:38:51'),
(10, 'Richard', 'L', 'dsdda', 'Jakarta Barat', '087812345650', NULL, NULL),
(12, 'Brandon Urie', 'L', 'Kemanggisan', 'Jakarta Barat', '083812345645', NULL, NULL),
(14, 'Lala Lisa', 'L', 'gg', 'g', '555', NULL, NULL);

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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_26_062459_create_customer_table', 1),
(5, '2019_12_26_063335_create_pegawai_table', 2),
(6, '2020_01_08_013843_create_order_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(20) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `idpegawai` int(11) DEFAULT NULL,
  `jenisjasa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` int(11) NOT NULL,
  `ac` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bangunan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `harga` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `idcustomer`, `idpegawai`, `jenisjasa`, `keluhan`, `unit`, `ac`, `ukuran`, `bangunan`, `tanggal`, `waktu`, `harga`, `created_at`, `updated_at`) VALUES
(1, 5, 7, 'Cuci AC atau Isi freon', 'AC nya kurang dingin', 2, 'split', '< 1 PK', 'Rumah', '2020-01-09', '12:00:00', 200000.00, NULL, NULL),
(3, 12, 6, 'Cuci AC Atau Isi Freon', 'AC tidak dingin', 1, 'Split', '< 1PK', 'Gedung', '2020-01-17', '00:00:00', 50000.00, NULL, NULL),
(6, 10, 12, 'Cuci AC Atau Isi Freon', 'AC Kurang Dingin', 2, 'Split', '< 1PK', 'Rumah', '2020-01-22', '12:00:00', 100000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(20) NOT NULL,
  `namapegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `namapegawai`, `gender`, `alamat`, `kota`, `hp`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Uzumaki naruto', 'L', 'konoha', 'konohagakure', '081745698521', 'naruto.png', '2019-12-26 01:38:58', '2019-12-27 00:27:04'),
(3, 'Uchiha Sasuke', 'L', 'konoha', 'konohagakure', '081456987123', 'Sasuke_Part_1.png', '2019-12-26 01:40:13', '2019-12-27 00:26:56'),
(5, 'Justin Bieber', 'L', 'Jl. melati', 'jakarta', '081964572133', 'justin.jpg', '2019-12-27 00:21:52', '2019-12-27 00:26:48'),
(6, 'Niall Horan', 'L', 'Jl.alpukat 2', 'tangerang', '081236954178', 'niall.jpg', '2019-12-27 00:24:41', '2019-12-27 00:26:37'),
(7, 'Jeon Jungkook', 'L', 'Jl. melati 9', 'jakarta', '081256478961', 'man.png', '2019-12-27 00:26:11', '2019-12-27 00:26:11'),
(8, 'Shawn mendes', 'L', 'Jl. kenangan', 'Surabaya', '081456981732', 'shawn.jpg', '2019-12-27 00:35:24', '2019-12-27 00:35:24'),
(9, 'Nicky Minaj', 'P', 'Kemang Village', 'Jakarta Selatan', '087812345690', 'desi.jpg', NULL, NULL),
(10, 'Selena Gomez', 'P', 'Grogol', 'Jakarta Barat', '087812345666', 'girl.png', NULL, NULL),
(11, 'Billie Eilish', 'P', 'Tanah Abang', 'Jakarta Pusat', '087812345680', 'desi.jpg', NULL, NULL),
(12, 'Cameron Dallas', 'L', 'Kuningan', 'Jakarta Selatan', '089384930987', 'cameron-dallas.jpg', NULL, NULL),
(13, 'd', 'P', 'aseada', 'aasas', '456565', NULL, NULL, NULL),
(14, 'Derry', 'L', 'Jl. Kemanggisan', 'Jakarta Barat', '085645987865', 'man.png', NULL, NULL),
(15, 'Tommy Soemitro', 'L', 'Jl. Paku Haji', 'Jakarta', '0871896543229', '62032988_1701961980110753_7065394766302831588_n.jpg', NULL, NULL),
(16, 'Muhtaza', 'P', 'Jl. Bangun Nusa Raya No.50', 'Jakarta Barat', '083812390470', 'gudeg Pawon.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'elmira', 'elmiraakmala@gmail.com', NULL, '$2y$10$q5b8/BdRR.dHaXnSXG1t2u0XuA5r1mhWolvz.KxqilRKvdLaUNT3m', 'admin', NULL, '2020-01-06 00:14:25', '2020-01-06 00:14:25'),
(2, 'choirunisa', 'choirunisa353@gmail.com', NULL, '$2y$10$yi2ljdjefZND8X0rWQNIaOgOF0oHGE/8BaBoR98eVuxjloyWOIwbe', 'user', NULL, '2020-01-06 00:49:13', '2020-01-06 00:49:13'),
(3, 'el', 'el@gmail.com', NULL, '$2y$10$E7SO0lj/qPXUavVoCmeNOu6pOsrbsY7eo7cHfTd4BWQW3VedHzaqO', 'admin', NULL, '2020-01-21 15:19:39', '2020-01-21 15:19:39'),
(4, 'richard', 'richard@gmail.com', NULL, '$2y$10$.ahX4HHzTeXADBoPImaJauNNr4unwVCwbfUNTIQPcSIVqExFjsn2y', 'admin', NULL, '2020-01-21 17:32:37', '2020-01-21 17:32:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `idcustomer` (`idcustomer`),
  ADD KEY `idpegawai` (`idpegawai`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `idcustomer` FOREIGN KEY (`idcustomer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `idpegawai` FOREIGN KEY (`idpegawai`) REFERENCES `pegawai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
