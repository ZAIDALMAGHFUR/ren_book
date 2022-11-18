-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 04:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in stock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_code`, `title`, `cover`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'A001-07', 'LARAVEL  To Noob', 'C:\\xampp\\tmp\\phpCA00.tmp', 'horor', 'not avalible', '2022-11-14 08:07:57', '2022-11-18 05:07:15', NULL),
(6, 'A001-05', 'PHP', '1668440345.png', 'qq', 'not avalible', '2022-11-14 08:39:05', '2022-11-18 05:07:29', NULL),
(8, 'A001-04', 'HTML', 'HTML-1668443584.png', 'html', 'not avalible', '2022-11-14 09:33:04', '2022-11-18 05:10:01', NULL),
(11, 'A001-03', 'kima', 'kima-1668479680.png', 'kima', 'not avalible', '2022-11-14 19:34:40', '2022-11-18 06:42:50', NULL),
(16, 'A001-02', 'new', 'asdcxas-1668554323.jpg', 'asdcxas', 'not avalible', '2022-11-15 16:18:43', '2022-11-18 05:11:03', NULL),
(21, 'A001-06', 'JS', 'jalan-1668555969.jpg', 'jalan', 'in stock', '2022-11-15 16:46:09', '2022-11-15 19:17:38', NULL),
(22, 'A001-01', 'baru', 'dfvsdgvsa-1668559605.jpg', 'dfvsdgvsa', 'not avalible', '2022-11-15 17:46:45', '2022-11-18 05:11:15', NULL),
(23, 'A001-08', 'next js', 'next js-1668567041.png', 'next-js', 'not avalible', '2022-11-15 19:50:41', '2022-11-18 05:13:31', NULL),
(24, 'hgfck4', 'rjfghn', '', 'rjfghn', 'not instock', '2022-11-16 06:37:36', '2022-11-17 07:01:06', NULL),
(25, '1232', 'xvcbdcxfb', '', 'xvcbdcxfb', 'not avalible', '2022-11-16 06:39:21', '2022-11-18 05:21:43', NULL),
(26, '123', 'fdvbzfx', '', 'fdvbzfx', 'not avalible', '2022-11-16 06:42:07', '2022-11-18 05:20:47', NULL),
(27, 'saca', 'cvdsvSDV', '', 'cvdsvsdv', 'not avalible', '2022-11-16 06:42:51', '2022-11-18 05:21:54', NULL),
(28, 'fdb', 'dfbd', '', 'dfbd', 'not avalible', '2022-11-16 06:46:43', '2022-11-18 05:20:32', NULL),
(29, 'A001-09', 'PHP To Pro', 'PHP To Pro-1668693639.jpg', 'php-to-pro', 'not stok\n', '2022-11-17 07:00:39', '2022-11-18 05:18:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `book_id`, `category_id`, `created_at`, `updated_at`) VALUES
(10, 21, 6, NULL, NULL),
(12, 22, 20, NULL, NULL),
(13, 16, 7, NULL, NULL),
(14, 11, 6, NULL, NULL),
(15, 8, 5, NULL, NULL),
(16, 6, 3, NULL, NULL),
(21, 22, 4, NULL, NULL),
(22, 22, 7, NULL, NULL),
(23, 23, 3, NULL, NULL),
(24, 24, 6, NULL, NULL),
(25, 28, 6, NULL, NULL),
(26, 5, 3, NULL, NULL),
(27, 5, 20, NULL, NULL),
(28, 29, 7, NULL, NULL),
(29, 29, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'novel', 'novel', NULL, '2022-11-17 07:02:42', '2022-11-17 07:02:42'),
(3, 'teknik', 'fantasy', NULL, '2022-11-17 07:02:32', NULL),
(4, 'fiction', 'fiction', NULL, NULL, NULL),
(5, 'myster', 'mystery', NULL, NULL, NULL),
(6, 'horror', 'horor', NULL, NULL, NULL),
(7, 'romance', 'romance', NULL, NULL, NULL),
(8, 'westren', 'westren', NULL, NULL, NULL),
(20, 'comic', 'comic', '2022-11-13 20:15:24', '2022-11-13 20:15:24', NULL),
(22, 'Work', 'work', '2022-11-17 07:02:58', '2022-11-17 07:02:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_09_131745_create_roles_table', 1),
(6, '2022_11_09_133602_add_role_id_colum_to_users_table', 1),
(7, '2022_11_09_135217_create_categories_table', 1),
(8, '2022_11_09_135338_create_books_table', 1),
(9, '2022_11_09_140001_create_book_category_table', 1),
(12, '2022_11_10_011949_create_rent_logs_table', 2),
(13, '2022_11_14_014923_add_slug_column_to_categories_tabel', 2),
(14, '2022_11_14_020058_change_slug_column_into_nullable_in_categories_table', 3),
(15, '2022_11_14_023332_add_soft_delete_column_to_categories_table', 4),
(16, '2022_11_14_144052_add_slug_cover_column_to_books_tabel', 5),
(17, '2022_11_14_162800_add_soft_delete_column_to_books_table', 6),
(18, '2022_11_17_084105_add_slug_to_user_table', 7),
(19, '2022_11_17_084857_add_delete_column_to_user_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rent_logs`
--

CREATE TABLE `rent_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  `actual_retrun_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rent_logs`
--

INSERT INTO `rent_logs` (`id`, `user_id`, `book_id`, `rent_date`, `return_date`, `actual_retrun_date`, `created_at`, `updated_at`) VALUES
(1, 12, 5, '2022-11-18', '2022-11-21', '2022-11-21', '2022-11-18 05:07:15', '2022-11-18 05:07:15'),
(2, 12, 6, '2022-11-18', '2022-11-21', '2022-11-21', '2022-11-18 05:07:29', '2022-11-18 05:07:29'),
(3, 12, 8, '2022-11-18', '2022-11-21', NULL, '2022-11-18 05:10:01', '2022-11-18 05:10:01'),
(4, 2, 16, '2022-11-18', '2022-11-21', NULL, '2022-11-18 05:11:03', '2022-11-18 05:11:03'),
(5, 2, 22, '2022-11-18', '2022-11-21', NULL, '2022-11-18 05:11:15', '2022-11-18 05:11:15'),
(6, 12, 23, '2022-11-18', '2022-11-21', NULL, '2022-11-18 05:13:31', '2022-11-18 05:13:31'),
(7, 2, 28, '2022-11-18', '2022-11-21', NULL, '2022-11-18 05:20:32', '2022-11-18 05:20:32'),
(8, 18, 26, '2022-11-18', '2022-11-21', NULL, '2022-11-18 05:20:47', '2022-11-18 05:20:47'),
(9, 18, 25, '2022-11-18', '2022-11-21', NULL, '2022-11-18 05:21:43', '2022-11-18 05:21:43'),
(10, 18, 27, '2022-11-18', '2022-11-21', NULL, '2022-11-18 05:21:54', '2022-11-18 05:21:54'),
(11, 20, 11, '2022-11-18', '2022-11-21', NULL, '2022-11-18 06:42:50', '2022-11-18 06:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `password`, `phone`, `address`, `status`, `created_at`, `updated_at`, `role_id`, `deleted_at`) VALUES
(1, 'admin', 'admin', '$2y$10$VafgAa8Vm9qUxTKhzpae2eKAZmGlOywnZCD5S./jLyClPLHauZmxO', NULL, 'medan', 'active', NULL, NULL, 1, NULL),
(2, 'user1', 'user1', '$2y$10$VafgAa8Vm9qUxTKhzpae2eKAZmGlOywnZCD5S./jLyClPLHauZmxO', NULL, 'medan', 'active', NULL, '2022-11-17 07:16:54', 2, NULL),
(11, 'zaid', 'za8id', '$2y$10$2N5tnp0fE7HB6Hekzj1PLOyBHmavbhPaExCrbDDoXNpl6ZjhF0DZG', '0101010101', 'medan ku', 'active', '2022-11-12 03:30:34', '2022-11-18 07:45:33', 2, NULL),
(12, 'saipul', 'saipul', '$2y$10$oS6Yz4ybZWmDjjrXLGEScO4qaZKxxVTxjmx3VBKV/rBASi8Rw0c3W', '91918191', 'makan', 'active', '2022-11-12 03:33:07', '2022-11-18 07:45:57', 2, NULL),
(13, 'kakakak', 'kakak', '$2y$10$3Ahvvl1aWhDnqoQ2JMzhTuIl1IHVoA8IrjykxaR.Ytiy9dUdqEEC6', '012928237878383', 'sdkjlvhskadhjvgbhjsdgbfhjs', 'active', '2022-11-14 17:26:06', '2022-11-18 07:46:14', 2, NULL),
(18, 'saipul 2', 'saipul2', '$2y$10$VafgAa8Vm9qUxTKhzpae2eKAZmGlOywnZCD5S./jLyClPLHauZmxO', '0128292', 'medan', 'active', NULL, NULL, 2, NULL),
(20, 'makan', 'makan', '$2y$10$RYfPykqGjYVe4hdyBZsCM.1qbvWi.1BsL/XXe.V58EnyS5YiI/kgq', '030983', 'medan', 'active', '2022-11-17 01:50:19', '2022-11-18 07:46:22', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_category_book_id_foreign` (`book_id`),
  ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_logs_user_id_foreign` (`user_id`),
  ADD KEY `rent_logs_book_id_foreign` (`book_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_logs`
--
ALTER TABLE `rent_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD CONSTRAINT `rent_logs_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rent_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
