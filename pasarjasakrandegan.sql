-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2021 pada 13.38
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasarjasakrandegan`
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
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `deskripsi`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Request Jasa', 'Butuh bantuan apapun? Tinggal beri tahu kami apa yang kamu butuhkan dan di mana kamu memerlukannya, semuanya bisa langsung dari website atau aplikasi mobile kami.', '1619444525.jpg', 'Request Jasa', '2021-04-26 06:32:30', '2021-04-26 06:42:05'),
(2, 'Dapatkan penyedia jasa', 'Sesuai dengan jasa yang kamu butuhkan, kami akan segera menyediakan penawaran atau langsung memberikan penyedia jasa dengan harga tetap. Semuanya bisa kamu dapatkan dengan cepat, handal, dan dijamin puas.', '1619445077.jpg', 'Dapatkan Penyedia Jasa', '2021-04-26 06:51:17', '2021-04-26 07:01:35'),
(3, 'Sewa dan bayar', 'Sewa penyedia jasa terbaik untuk tiap request pekerjaan yang kamu inginkan. Kemudian, setelah pekerjaan selesai, kamu bisa bayar langsung ke penyedia jasa.', '1619445289.jpg', 'Sewa dan Bayar', '2021-04-26 06:54:49', '2021-04-26 06:54:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `judul`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Perbaikan AC', '1619445350.png', 'Perbaikan AC', '2021-04-26 06:55:50', '2021-04-26 06:55:50'),
(2, 'Pijat Tradisional', '1619445377.png', 'Pijat Tradisional', '2021-04-26 06:56:17', '2021-04-26 06:56:17'),
(3, 'Laundry', '1619445409.png', 'Laundry', '2021-04-26 06:56:49', '2021-04-26 06:56:49'),
(4, 'Tukang Harian', '1619445444.png', 'Tukang Harian', '2021-04-26 06:57:24', '2021-04-26 06:57:24');

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
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2021_04_09_160849_create_informasi_table', 1),
(21, '2021_04_09_163104_create_profesi_table', 1),
(22, '2021_04_11_001737_create_penyediajasa_table', 1),
(23, '2021_04_12_150848_create_layanan_table', 1),
(24, '2021_04_23_034525_create_pelanggan_table', 1);

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
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyediajasa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `nomor_hp`, `penyediajasa_id`, `created_at`, `updated_at`) VALUES
(2, 'Dian febrianto', 'Desa sendangsari rt 02 rw 01 kecamatan purwodadi, kabupaten purworejo', '089663211218', NULL, '2021-04-23 20:27:12', '2021-04-23 20:27:12'),
(3, 'Dian febrianto', 'Desa sendangsari rt 02 rw 01 kecamatan purwodadi, kabupaten purworejo', '089663211218', NULL, '2021-04-26 02:55:21', '2021-04-26 02:55:21'),
(4, 'Dian febrianto', 'Desa sendangsari rt 02 rw 01', '089663211218', NULL, '2021-04-26 02:57:14', '2021-04-26 02:57:14'),
(5, 'Dian febrianto', 'Desa sendangsari rt 02 rw 01 kecamatan purwodadi, kabupaten purworejo', '089663211218', NULL, '2021-04-26 04:45:42', '2021-04-26 04:45:42'),
(6, 'adib hanafi', 'Desa sendangsari rt 02 rw 01', '089663211218', NULL, '2021-04-26 05:31:06', '2021-04-26 05:31:06'),
(7, 'adib hanafi', 'Desa sendangsari rt 02 rw 01', '089663211218', NULL, '2021-04-26 05:31:29', '2021-04-26 05:31:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyediajasa`
--

CREATE TABLE `penyediajasa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profesi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyediajasa`
--

INSERT INTO `penyediajasa` (`id`, `profesi_id`, `nama_lengkap`, `alamat`, `nomor_telepon`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dian Febrianto', 'Sendangsari rt 02 rw 01 Kecamatan Purwodadi', '089663211218', '1619446374.jpg', 'pengalaman dalam bidangnya', '2021-04-26 07:12:54', '2021-04-26 07:18:31'),
(3, 2, 'Ivan Rizky Duta Maulana', 'Sendangsari Rt 00 Rw 00', '089663211218', '1619446769.jpg', 'Pengalaman Dalam bidangnya', '2021-04-26 07:19:29', '2021-04-26 07:19:29'),
(4, 2, 'Adib Hanafi', 'Sendangsari rt 02 rw 01 Kecamatan Purwodadi', '089663211218', '1619446804.jpg', 'Pengalaman dalam bidangnya', '2021-04-26 07:20:04', '2021-04-26 07:20:04'),
(5, 4, 'wawan kurniawan', 'Sendangsari rt 02 rw 01 Kecamatan Purwodadi', '089663211218', '1619446833.jpg', 'Pengalaman dalam bidangnya', '2021-04-26 07:20:33', '2021-04-26 07:20:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesi`
--

CREATE TABLE `profesi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profesi`
--

INSERT INTO `profesi` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Perbaikan AC', '2021-04-22 22:13:35', '2021-04-22 22:13:35'),
(2, 'Pijat Tradisional', '2021-04-26 07:02:59', '2021-04-26 07:02:59'),
(3, 'laundry', '2021-04-26 07:03:07', '2021-04-26 07:03:07'),
(4, 'Tukang Harian', '2021-04-26 07:03:15', '2021-04-26 07:03:15');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pasar Jasa', 'pasarjasa2021@gmail.com', '2021-04-22 22:09:51', '$2y$10$47JTOCKYSSSkDIRCz7L1P.apBYiFYfLKA88Jw9VZpmZKuJ5/axrGi', NULL, '2021-04-22 22:09:51', '2021-04-26 04:08:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
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
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan_penyediajasa_id_foreign` (`penyediajasa_id`);

--
-- Indeks untuk tabel `penyediajasa`
--
ALTER TABLE `penyediajasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyediajasa_profesi_id_foreign` (`profesi_id`);

--
-- Indeks untuk tabel `profesi`
--
ALTER TABLE `profesi`
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
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penyediajasa`
--
ALTER TABLE `penyediajasa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_penyediajasa_id_foreign` FOREIGN KEY (`penyediajasa_id`) REFERENCES `penyediajasa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penyediajasa`
--
ALTER TABLE `penyediajasa`
  ADD CONSTRAINT `penyediajasa_profesi_id_foreign` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
