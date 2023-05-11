-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 03:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `deleted_at`) VALUES
(45, 'Megan', NULL),
(47, 'Lenny', NULL),
(48, 'Bambang', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `author_id`, `title`, `description`, `cover`, `qty`, `deleted_at`, `created_at`, `updated_at`) VALUES
(108, 45, 'Tempore est qui sint laudantium est.', 'Eius voluptatem qui laboriosam nostrum dolor sunt corporis quisquam dolor iste similique laborum molestias officia possimus aut aut molestiae iste eum placeat cumque consequatur voluptas neque non ut provident praesentium maiores tenetur quia accusamus quisquam quis dolorem atque minima in dolor non fugiat rem vero suscipit doloribus nihil beatae similique recusandae fuga consequatur maiores rerum dignissimos ipsa odit vel temporibus iure eos quam.', 'https://picsum.photos/id/71/200/300', '8', NULL, '2020-12-21 00:55:59', '2020-12-29 03:54:33'),
(118, 45, 'Pariatur aliquid alias id hic.', 'Non iure exercitationem ut tempore praesentium blanditiis nesciunt eligendi ipsa et ut veritatis ipsa culpa vitae et blanditiis possimus natus laudantium nulla deserunt sit laudantium voluptatem quis dolor quaerat voluptatum pariatur magni illo.', 'https://picsum.photos/id/41/200/300', '4', NULL, '2020-12-21 00:55:59', '2020-12-29 04:01:52'),
(120, 48, 'Magnam quis quisquam.', 'et voluptatem accusamus veniam consequatur delectus possimus omnis possimus et aut eum id repellat adipisci in libero asperiores odio et consectetur molestias debitis delectus dignissimos enim repellendus eius fuga est omnis velit aut quia expedita earum odio illo nam vitae voluptatem tempora illum aut aut eos officiis asperiores beatae rem deleniti voluptas in sapiente sint.', 'https://picsum.photos/id/22/200/300', '14', NULL, '2020-12-21 00:55:59', '2020-12-28 01:07:49'),
(121, 45, 'Tempora dolor quisquam.', 'Libero sit sed voluptatem ut nam aut tempora ea odio quis sapiente ut sed est esse voluptatibus alias culpa qui ea est rerum non hic qui est quidem aliquid voluptate harum vitae sit perferendis et consequatur molestiae consectetur quisquam similique aut eveniet sed et sit iste temporibus corporis provident natus est saepe aut quo est ipsa libero et beatae nostrum minus iste modi est vitae animi debitis.', 'https://picsum.photos/id/62/200/300', '10', NULL, '2020-12-21 00:55:59', '2020-12-28 00:59:42'),
(126, 45, 'Javascript is the most greatest programming language', 'Dolorem veniam est repudiandae veniam blanditiis hic facilis placeat quidem quia iusto et qui minima amet molestias nam fugit ducimus voluptatum eius omnis quia omnis dolorum molestias quos sunt officia deleniti ut maiores rerum voluptatem quisquam quas harum consequatur omnis.', 'https://picsum.photos/id/24/200/300', '20', NULL, '2020-12-21 00:55:59', '2020-12-28 00:23:42'),
(128, 47, 'Ipsa ut sint voluptatum eum.', 'Nihil est animi minus et rerum dolorem eveniet consequatur ut sit est consectetur aut labore natus consequuntur ipsum est adipisci fuga et eaque dolor qui vel repellat quaerat aut natus aut.', 'https://picsum.photos/id/15/200/300', '12', NULL, '2020-12-21 00:55:59', '2020-12-28 00:40:27'),
(131, 45, 'Repellendus cumque nam veniam dolorem quam.', 'Earum qui non iusto quia a autem consectetur quibusdam et sit aut exercitationem ex nihil dolores necessitatibus maiores occaecati asperiores earum qui aut similique nobis nesciunt tenetur sunt ullam aut similique vel et adipisci placeat provident ducimus voluptas alias et neque eaque repudiandae nihil fugit deserunt reprehenderit magnam debitis doloribus.', 'https://picsum.photos/id/34/200/300', '16', NULL, '2020-12-21 00:55:59', '2020-12-28 00:39:39'),
(132, 48, 'Quis velit accusantium temporibus qui.', 'Ipsam nulla error vitae sit aut saepe nihil est dolores veritatis qui cupiditate fugit voluptatum placeat aut cupiditate enim similique quo molestias ipsum dolor neque expedita quisquam mollitia quis iusto explicabo veniam dolorem numquam in perferendis debitis tenetur quo eveniet et maiores aut fugiat quas repellendus quam pariatur amet ea.', 'https://picsum.photos/id/32/200/300', '16', NULL, '2020-12-21 00:55:59', '2020-12-28 01:08:02'),
(133, 45, 'Omnis saepe dicta accusamus tempore.', 'Qui dolorum eum libero officia ipsam a explicabo quo error officia eos id aperiam qui quos non perferendis officia est in qui eveniet in mollitia eligendi autem at blanditiis sapiente ea distinctio et in qui magni aut et.', 'https://picsum.photos/id/31/200/300', '13', NULL, '2020-12-21 00:55:59', '2020-12-25 22:59:03'),
(137, 45, 'Voluptas sequi molestiae dolorem quia.', 'Aut ad impedit id impedit doloribus tenetur et illo aut saepe molestiae minus omnis facere non minus possimus ducimus ratione harum voluptatem sed eum sunt ex saepe nihil modi reiciendis pariatur maiores qui repellat aut et quae aut aut sed ut cumque ut quis.', 'https://picsum.photos/id/25/200/300', '9', NULL, '2020-12-21 00:55:59', '2020-12-25 22:59:08'),
(138, 45, 'Sed voluptas nihil excepturi sit.', 'Ab ad nesciunt repellat ea temporibus ut ut deleniti nemo illum et et eos quaerat exercitationem aut quos mollitia suscipit sit aliquam repudiandae rerum laboriosam illum voluptates dicta blanditiis magni error magni aut tempore voluptas adipisci facilis qui et eius velit dolorem illum assumenda et quo consequuntur ex quae.', 'https://picsum.photos/id/65/200/300', '18', NULL, '2020-12-21 00:55:59', '2020-12-29 02:58:16'),
(141, 45, 'Nostrum sed dolores.', 'Sequi nesciunt et tempora eligendi esse exercitationem corrupti adipisci doloremque fuga unde hic exercitationem doloremque maxime nulla deserunt omnis id laudantium perferendis nihil quae ad deserunt dolorum ullam voluptatem sit facere rem numquam rerum sint aperiam non unde.', 'https://picsum.photos/id/60/200/300', '13', NULL, '2020-12-21 00:55:59', '2020-12-21 00:55:59'),
(142, 45, 'Voluptates veniam optio voluptatibus.', 'Itaque aut quod sed quia dolorum consequatur consequatur expedita ea est sed quia inventore rerum deserunt libero expedita qui recusandae dolor consequatur non excepturi adipisci est ea exercitationem non aut tempore sed natus quas aut asperiores tempore quis eum qui officia quam omnis magnam culpa asperiores aut non odit et qui perferendis eveniet et harum ab et atque necessitatibus dolores incidunt ratione suscipit qui quia minima quas.', 'https://picsum.photos/id/68/200/300', '11', NULL, '2020-12-21 00:55:59', '2020-12-21 00:55:59'),
(151, 45, 'Soluta aut voluptas.', 'Sed laboriosam debitis neque qui possimus molestiae suscipit enim nesciunt velit ratione porro et voluptas a quas consequatur est voluptatibus qui et eos fugit voluptate fugiat animi fugiat hic iste omnis voluptas et est eos optio repellat quis et architecto ut ut sed consequuntur error ullam laborum voluptatem eum sed dolor odio non quod provident pariatur quia provident aspernatur dolores nemo omnis accusamus iusto quod quia voluptas numquam unde.', 'https://picsum.photos/id/42/200/300', '15', NULL, '2020-12-21 00:55:59', '2020-12-21 00:55:59'),
(152, 45, 'Velit iusto alias est aut hic.', 'Dolores optio quia excepturi unde non qui velit consequatur cum delectus ut libero non nemo et excepturi ad pariatur dolorem aut neque natus eum qui qui aut et vel nesciunt provident eligendi consequatur doloremque sint in dolor velit doloribus occaecati amet dolorem beatae nobis molestiae culpa veritatis nihil consequatur qui et cumque eum mollitia aut placeat voluptatibus sit maxime unde et voluptatem rerum.', 'https://picsum.photos/id/2/200/300', '10', NULL, '2020-12-21 00:55:59', '2020-12-21 00:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_history`
--

CREATE TABLE `borrow_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `denda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_pengembalian` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `admin_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `transaksi_id`, `book_id`, `tgl_pinjam`, `tgl_kembali`, `denda`, `tgl_pengembalian`, `status`, `admin_id`, `created_at`, `updated_at`) VALUES
(13, 10, 108, '2020-12-27 00:00:00', '2021-01-03 00:00:00', '0', '2020-12-28 00:00:00', 1, '1', '2020-12-26 19:35:30', '2020-12-27 00:30:09'),
(14, 11, 118, '2020-12-27 00:00:00', '2021-01-03 00:00:00', '0', '2020-12-29 00:00:00', 1, '1', '2020-12-26 19:36:45', '2020-12-27 00:31:07'),
(15, 11, 121, '2020-12-27 00:00:00', '2021-01-03 00:00:00', '0', '2020-12-29 00:00:00', 1, '1', '2020-12-26 19:36:45', '2020-12-27 00:31:12'),
(16, 12, 108, '2020-12-27 00:00:00', '2021-01-03 00:00:00', '2000', '2021-01-05 00:00:00', 1, '1', '2020-12-26 20:05:49', '2020-12-27 00:31:50'),
(17, 13, 118, '2020-12-28 00:00:00', '2021-01-04 00:00:00', '0', '2021-01-03 00:00:00', 1, '1', '2020-12-27 21:49:43', '2020-12-27 23:07:09'),
(18, 14, 126, '2020-12-28 00:00:00', '2021-01-04 00:00:00', '0', '2020-12-30 00:00:00', 1, '1', '2020-12-28 00:23:53', '2020-12-28 00:29:37'),
(19, 14, 131, '2020-12-28 00:00:00', '2021-01-04 00:00:00', '0', '2020-12-28 00:00:00', 1, '1', '2020-12-28 00:23:53', '2020-12-28 01:05:53'),
(20, 15, 108, '2020-12-28 00:00:00', '2021-01-04 00:00:00', '0', '2021-01-01 00:00:00', 1, 'Admin Perpus', '2020-12-28 10:17:57', '2020-12-28 10:24:27'),
(21, 16, 138, '2020-12-29 00:00:00', '2021-01-05 00:00:00', '2000', '2021-01-07 00:00:00', 1, 'Admin Perpus', '2020-12-29 02:57:33', '2020-12-29 02:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(4, '2020_12_17_153152_create_authors_table', 1),
(5, '2020_12_17_153243_create_books_table', 1),
(6, '2020_12_17_153806_create_borrow_history_table', 1),
(7, '2020_12_17_163314_create_permission_tables', 1),
(8, '2020_12_18_081710_add_qty_on_books_table', 1),
(9, '2020_12_19_182952_add_deleted_at_to_books_table', 2),
(10, '2020_12_20_120515_add_deleted_at_to_authors_table', 3),
(11, '2020_12_24_151246_add_column_to_users_table', 4),
(14, '2020_12_26_035748_create_transaksi_table', 5),
(15, '2020_12_26_040800_create_detail_transaksi_table', 6),
(16, '2020_12_27_061822_add_status_to_detail_transaksi_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-12-18 01:42:03', '2020-12-18 01:42:03'),
(2, 'user', 'web', '2020-12-18 01:42:03', '2020-12-18 01:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kode_pinjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `user_id`, `kode_pinjam`, `created_at`, `updated_at`) VALUES
(10, 3, 'KDB31609036530', '2020-12-26 19:35:30', '2020-12-26 19:35:30'),
(11, 3, 'KDB31609036605', '2020-12-26 19:36:45', '2020-12-26 19:36:45'),
(12, 2, 'KDB21609038349', '2020-12-26 20:05:49', '2020-12-26 20:05:49'),
(13, 2, 'KDB21609130983', '2020-12-27 21:49:43', '2020-12-27 21:49:43'),
(14, 3, 'KDB31609140233', '2020-12-28 00:23:53', '2020-12-28 00:23:53'),
(15, 2, 'KDB21609175877', '2020-12-28 10:17:57', '2020-12-28 10:17:57'),
(16, 2, 'KDB21609235853', '2020-12-29 02:57:33', '2020-12-29 02:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Perpus', NULL, NULL, 'admin@perpus.com', '2020-12-18 01:42:03', '$2y$10$So2i4XzXYYqpn8CSaYIcd.dooEOwsIK4vBGPM53aZVnqoeDjVfCmm', NULL, '2020-12-18 01:42:03', '2020-12-18 01:42:03'),
(2, 'Lenny', NULL, NULL, 'lenny@gmail.com', '2020-12-20 09:18:35', '$2y$10$ByqwaXiP.TCzxZjJGwHDF.VYbgkaHZjeVZHlk3TAUA3J9pZtxgwnu', NULL, '2020-12-20 09:16:01', '2020-12-20 09:18:35'),
(3, 'Megantoro', NULL, NULL, 'wardaddy@gmail.com', '2020-12-23 06:09:04', '$2y$10$WhIUl/YrKNHWJJaFUsXbqOt6W4A6lrnT/nBBEHkngZYdozdCurPH2', NULL, '2020-12-23 06:07:53', '2020-12-23 06:09:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `borrow_history`
--
ALTER TABLE `borrow_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrow_history_user_id_foreign` (`user_id`),
  ADD KEY `borrow_history_book_id_foreign` (`book_id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_transaksi_transaksi_id_foreign` (`transaksi_id`),
  ADD KEY `detail_transaksi_book_id_foreign` (`book_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `borrow_history`
--
ALTER TABLE `borrow_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrow_history`
--
ALTER TABLE `borrow_history`
  ADD CONSTRAINT `borrow_history_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrow_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
