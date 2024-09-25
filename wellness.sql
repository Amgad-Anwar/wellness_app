-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2024 at 07:26 PM
-- Server version: 10.6.18-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wellness`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `arab_name` varchar(80) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `arab_name`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'maadi', 4121, 'معادي', 0, NULL, '2024-09-07 14:00:00', '2024-09-07 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `odoo_id` bigint(20) DEFAULT 0,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `gender` enum('male','female','others') DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `delivery_address_type` enum('home','office','building') DEFAULT 'home',
  `street` text DEFAULT NULL,
  `evenue` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `home_number` varchar(255) DEFAULT NULL,
  `building_number` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `office_number` varchar(255) DEFAULT NULL,
  `apartment_number` varchar(255) DEFAULT NULL,
  `handle_delivery_type` enum('drop_at_door','ring_the_bell','call_you') DEFAULT 'call_you',
  `image` varchar(1000) DEFAULT NULL,
  `location_lat` varchar(255) DEFAULT '0.0',
  `location_lng` varchar(255) DEFAULT '0.0',
  `fcm_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `customer_package_id` int(11) DEFAULT NULL,
  `language` enum('en','ar') NOT NULL DEFAULT 'en'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `odoo_id`, `first_name`, `last_name`, `phone`, `email`, `password`, `gender`, `state_id`, `city_id`, `delivery_address_type`, `street`, `evenue`, `block`, `home_number`, `building_number`, `floor`, `office_number`, `apartment_number`, `handle_delivery_type`, `image`, `location_lat`, `location_lng`, `fcm_token`, `created_at`, `updated_at`, `deleted_at`, `customer_package_id`, `language`) VALUES
(2895, 0, 'amgad 2', 'anwar', '01277112438', 'amgad@gmail.com', '$2y$10$nFhEzV9yfkZ4ksfaXuWe/OQ3/hMV91GxX6J530nPihyFetRFxCuPK', NULL, 1, 1, 'home', '9 street', NULL, '8', '19', '19', '4', '45112', '18', 'drop_at_door', NULL, '0.0', '0.0', NULL, '2024-09-07 14:21:46', '2024-09-07 14:24:58', NULL, NULL, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` text DEFAULT NULL,
  `name_ar` text DEFAULT NULL,
  `days` text DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `description_ar` longtext DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `name_en`, `name_ar`, `days`, `category`, `image`, `description_en`, `description_ar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'test', 'tesr ar', '[\"thursday\"]', 'snack', 'uploads/meals_imgs/1fXPa6wFy6V10LWF399Mjp16zwO2TcXImFgs3NQM.png', 'Description en', NULL, NULL, '2024-09-25 19:02:39', '2024-09-25 19:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_08_183852_create_api_data_table', 1),
(6, '2024_01_08_183915_create_xbox_data_table', 1),
(7, '2024_01_19_095827_create_game_categories_table', 1),
(8, '2024_01_19_095840_create_games_table', 1),
(9, '2024_01_19_095849_create_game_details_table', 1),
(10, '2024_01_19_095914_create_categories_table', 1),
(11, '2024_01_19_100009_create_related_games_table', 1),
(12, '2024_01_19_101248_create_add_ons_table', 1),
(13, '2024_01_19_101343_create_add_on_details_table', 1),
(14, '2024_01_19_140943_create_game_add_ons_table', 1),
(15, '2024_01_19_141054_create_game_details_add_on_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `otp_check`
--

CREATE TABLE `otp_check` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(191) NOT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  `otp_code` varchar(191) NOT NULL,
  `expire_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otp_check`
--

INSERT INTO `otp_check` (`id`, `phone`, `verified_at`, `otp_code`, `expire_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1175, '01277112438', '2024-09-07 14:21:46', '0000', '2024-09-07 17:31:07', '2024-09-07 14:21:07', '2024-09-07 14:21:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Customer', 2895, 'test_device_name', 'bcaf592c0afa70ea4033d9b1caa0fa3796d11a80b3d7a5b5fbeb1ae86946ebb6', '[\"*\"]', '2024-09-07 14:26:39', NULL, '2024-09-07 14:21:46', '2024-09-07 14:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `arab_name` varchar(80) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `arab_name`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'cairo', NULL, 'القاهره', 0, NULL, '2024-09-07 13:59:00', '2024-09-07 13:59:00');

--
-- Triggers `states`
--
DELIMITER $$
CREATE TRIGGER `After_Update_change_city_activation` AFTER UPDATE ON `states` FOR EACH ROW BEGIN
    UPDATE cities
    SET is_active = NEW.is_active
    WHERE state_id = NEW.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$gVdxUto7myBoutaL9A0oq.72gUO2q0q2Uqc0YVybRQmGH2H1Enana', NULL, NULL, NULL, NULL),
(2, 'Test User', 'test@example.com', NULL, '$2y$12$MMb66Dr8TfxRe.MIM1veT.XtjPkHj025piz5FWsY2RjXxTbY8B6n6', NULL, '2024-07-11 08:44:23', '2024-07-11 08:44:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_check`
--
ALTER TABLE `otp_check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48688;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2896;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `otp_check`
--
ALTER TABLE `otp_check`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1176;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4122;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
