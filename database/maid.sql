-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 09:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maid`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_tools`
--

CREATE TABLE `add_tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_tools`
--

INSERT INTO `add_tools` (`id`, `p_name`, `p_price`, `p_details`, `p_quantity`, `image`, `available`, `rent`, `created_at`, `updated_at`) VALUES
(1, 'Gentle Foaming Hand Wash', '150', 'Enriched with Vitamin E, Kills 99.9% viruses and bacteria, Premium floral fragrance ,Moisturizes skin, Luxurious foam, Ideal for daily use and protection', '50', '1690406161 . jpg', NULL, NULL, '2023-07-26 15:16:01', '2023-07-26 15:16:01'),
(2, 'Savlon Ocean Blue Handwash', '150', 'Enriched with Vitamin E, Kills 99.9% viruses', '50', '1690406351 . jpg', NULL, NULL, '2023-07-26 15:19:11', '2023-07-26 15:19:11'),
(3, 'Sepnil Extra Mild Hand Wash', '95', 'Ordinary hand wash can only wash away the visible dirt or grime at most., However, your hands endure more than dirt every single day.', '100', '1690406607 . png', NULL, NULL, '2023-07-26 15:23:27', '2023-07-26 15:23:27'),
(4, 'Broom and Dustpan', '100', 'The broom and dustpan set for home has upgrade 52\" long broom handle which allow you to stand upright for comfortable sweeping instead of bending over.', '20', '1690494665 . jpg', NULL, NULL, '2023-07-27 15:51:05', '2023-07-27 15:51:05'),
(5, 'Broom', '20', 'The broom and dustpan set for home has upgrade 52\" long broom handle which allow you to stand upright for comfortable sweeping instead of bending over.', '50', '1690495115 . jpg', NULL, NULL, '2023-07-27 15:58:35', '2023-07-27 15:58:35'),
(6, 'Rin Washing powder', '100', 'Rin Washing Powder emoves dirt from deep within the cloth fibre, thereby removing dullness from your clothes', '50', '1690497577 . png', NULL, NULL, '2023-07-27 16:39:37', '2023-07-27 16:39:37'),
(7, 'Detergent', '100', 'Rin Washing Powder emoves dirt from deep within the cloth fibre.', '20', '1690497598 . jpg', NULL, NULL, '2023-07-27 16:39:58', '2023-07-27 16:39:58'),
(8, 'Kitchen Knife', '50', 'You can cut all kind of vegetables with the knife', '100', '1690824021 . jpeg', NULL, NULL, '2023-07-31 11:20:21', '2023-07-31 11:20:21');

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
-- Table structure for table `maids`
--

CREATE TABLE `maids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serv_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(20) DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gander` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maids`
--

INSERT INTO `maids` (`id`, `serv_id`, `name`, `slug`, `age`, `nationality`, `gander`, `experience`, `contact`, `details`, `salary`, `image`, `nid`, `address`, `created_at`, `updated_at`) VALUES
(1, '14', 'Salma Akter', 'salma_akter', 35, 'Bangladeshi', 'Female', '5+ years', '+880125565223', 'Salma akter is expert in cook . You can hire her for per month. Given salary is for per Month. Maid must not miss any day.', '10000', '1690643704 . jpg', '8422545662', 'Uttara\r\nSector 10', '2023-07-29 09:15:04', '2023-07-29 09:15:04'),
(3, '15', 'Asha Khatun', 'asha_khatun', 40, 'Bangladeshi', 'Female', '2+ years', '+880125565223', 'Nanny will appointed for per month.', '25000', '1690647040 . jpg', '261682154', 'Gazipur', '2023-07-29 10:10:40', '2023-07-29 10:10:40'),
(4, '17', 'Karimuddin', 'karimuddin', 35, 'Bangladeshi', 'Female', '3 years', '+880125565223', 'He will wash you car. Will pay per day.', '200', '1690647354 . png', '2652629561', 'Badda, Dhaka', '2023-07-29 10:15:54', '2023-07-29 10:15:54'),
(5, '16', 'Forida Begum', 'forida_begum', 37, 'BD', 'Female', '5 years', '+880125565223', 'Will clean home and clothes . salary will count per month.', '8000', '1690647465 . png', '5649596265', 'Mymensingh', '2023-07-29 10:17:45', '2023-07-29 10:17:45'),
(6, '14', 'Fatema Begum', 'fatema_begum', 37, 'BD', 'Female', '7 years', '+880125565223', 'Fatema Begum is expert in cooking . You can hire her for per month. Maid must not miss any day.', '10000', '1690647746 . jpg', '65486561545', 'Baridhara, dhaka', '2023-07-29 10:22:26', '2023-07-29 10:22:26'),
(7, '14', 'Khadija Akter', 'khadija_akter', 29, 'BD', 'Female', '2 years', '+880125565523', 'khadija Akter is expert in cook . You can hire her for per month. Maid must not miss any day.', '10500', '1690647821 . jpg', '58462154621', 'Uttara, dhaka', '2023-07-29 10:23:41', '2023-07-29 10:23:41'),
(8, '14', 'Fulon Bibi', 'fulon_bibi', NULL, NULL, NULL, NULL, NULL, 'Fulon Bibi is expert in cook . You can hire her for per month. Maid must not miss any day.', '11000', '1690647891 . jpg', '515456523', 'Gopalgonj', '2023-07-29 10:24:51', '2023-07-29 10:24:51'),
(9, '15', 'Jorina Akter', 'jorina_akter', NULL, NULL, NULL, NULL, NULL, 'Nanny will appointed for per month.', '25000', '1690647959 . jpg', '2145465162', 'Mymensingh', '2023-07-29 10:25:59', '2023-07-29 10:25:59'),
(10, '15', 'Sokina Khatun', 'sokina_khatun', NULL, NULL, NULL, NULL, NULL, 'Nanny will appointed for per month.', '20000', '1690648005 . jpg', '254984561', 'Gopalgonj', '2023-07-29 10:26:45', '2023-07-29 10:26:45'),
(11, '15', 'Morjina Begum', 'morjina_begum', NULL, NULL, NULL, NULL, NULL, 'Nanny will appointed for per month.', '18000', '1690648041 . jpg', '254864561', 'Uttara\r\nSector 10', '2023-07-29 10:27:21', '2023-07-29 10:27:21'),
(12, '15', 'Aleha Begum', 'morjina_begum', NULL, NULL, NULL, NULL, NULL, 'Nanny will appointed for per month.', '18000', '1690648041 . jpg', '254864561', 'Uttara\r\nSector 10', '2023-07-29 10:27:21', '2023-07-29 10:27:21'),
(13, '15', 'Morjina Begum', 'morjina_begum', 35, 'BD', 'Female', '5 years', '+880125565223', 'Nanny will appointed for per month.', '18000', '1690648041 . jpg', '254864561', 'Uttara\r\nSector 10', '2023-07-29 10:27:21', '2023-07-29 10:27:21'),
(14, '14', 'Khadija Akter', 'khadija_akter', NULL, NULL, NULL, NULL, NULL, 'khadija Akter is expert in cook . You can hire her for per month. Maid must not miss any day.', '10500', '1690647821 . jpg', '58462154621', 'Uttara, dhaka', '2023-07-29 10:23:41', '2023-07-29 10:23:41'),
(15, '16', 'Forida Begum', 'forida_begum', NULL, NULL, NULL, NULL, NULL, 'Will clean home and clothes . salary will count per month.', '8000', '1690647465 . png', '5649596265', 'Mymensingh', '2023-07-29 10:17:45', '2023-07-29 10:17:45'),
(16, '14', 'Salma Akter', 'salma_akter', NULL, NULL, NULL, NULL, NULL, 'Salma akter is expert in cook . You can hire her for per month. Given salary is for per Month. Maid must not miss any day.', '10000', '1690643704 . jpg', '8422545662', 'Uttara\r\nSector 10', '2023-07-29 09:15:04', '2023-07-29 09:15:04'),
(17, '16', 'Forida Begum', 'forida_begum', 29, 'Bd', 'Female', '2 Years', '+880125565223', 'Will clean home and clothes . salary will count per month.', '8000', '1690647465 . png', '5649596265', 'Mymensingh', '2023-07-29 10:17:45', '2023-07-29 10:17:45'),
(18, '16', 'Forida Begum', 'forida_begum', NULL, NULL, NULL, NULL, NULL, 'Will clean home and clothes . salary will count per month.', '8000', '1690647465 . png', '5649596265', 'Mymensingh', '2023-07-29 10:17:45', '2023-07-29 10:17:45'),
(19, '16', 'Forida Begum', 'forida_begum', NULL, NULL, NULL, NULL, NULL, 'Will clean home and clothes . salary will count per month.', '8000', '1690647465 . png', '5649596265', 'Mymensingh', '2023-07-29 10:17:45', '2023-07-29 10:17:45'),
(20, '17', 'Karimuddin', 'karimuddin', 40, 'Bangladeshi', 'Male', '6 years', '+880125565223', 'He will wash you car. Will pay per day.', '200', '1690647354 . png', '2652629561', 'Badda, Dhaka', '2023-07-29 10:15:54', '2023-07-29 10:15:54'),
(21, '17', 'Sumon Mia', 'sumon-mia', 44, 'bangladeshi', 'Male', '13 years', '+880125565223', 'He will wash you car. Will pay per day.', '200', '1690647354 . png', '2652629561', 'Badda, Dhaka', '2023-07-29 10:15:54', '2023-07-29 10:15:54'),
(22, '17', 'Karimuddin', 'karimuddin', NULL, NULL, NULL, NULL, NULL, 'He will wash you car. Will pay per day.', '200', '1690647354 . png', '2652629561', 'Badda, Dhaka', '2023-07-29 10:15:54', '2023-07-29 10:15:54'),
(23, '17', 'Karimuddin', 'karimuddin', NULL, NULL, NULL, NULL, NULL, 'He will wash you car. Will pay per day.', '200', '1690647354 . png', '2652629561', 'Badda, Dhaka', '2023-07-29 10:15:54', '2023-07-29 10:15:54'),
(24, '17', 'Shahed Ali', 'shahed-ali', 37, 'Bangladeshi', 'Male', '5 years', '+880125565223', 'He will wash you car. Will pay per day.', '200', '1690647354 . png', '2652629561', 'Badda, Dhaka', '2023-07-29 10:15:54', '2023-07-29 10:15:54'),
(25, '16', 'Forida Begum', 'forida_begum', NULL, NULL, NULL, NULL, NULL, 'Will clean home and clothes . salary will count per month.', '8000', '1690647465 . png', '5649596265', 'Mymensingh', '2023-07-29 10:17:45', '2023-07-29 10:17:45'),
(26, '14', 'Salma Akter', 'salma_akter', 35, 'bangladeshi', 'Female', '3 years', '+880125565223', 'Salma akter is expert in cook . You can hire her for per month. Given salary is for per Month. Maid must not miss any day.', '10000', '1690643704 . jpg', '8422545662', 'Uttara\r\nSector 10', '2023-07-29 09:15:04', '2023-07-29 09:15:04'),
(27, '14', 'Fulon Bibi', 'fulon_bibi', NULL, NULL, NULL, NULL, NULL, 'Fulon Bibi is expert in cook . You can hire her for per month. Maid must not miss any day.', '11000', '1690647891 . jpg', '515456523', 'Gopalgonj', '2023-07-29 10:24:51', '2023-07-29 10:24:51'),
(28, '17', 'Akber Ali', 'akber-ali', NULL, NULL, NULL, NULL, NULL, 'He is wash every parts of you car neat and clean. you hire him per day.', '300', '1690833378 . png', '5148456136', 'Dhaka', '2023-07-31 13:56:18', '2023-07-31 13:56:18');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_26_192606_create_add_tools_table', 2),
(6, '2023_07_29_061553_create_services_table', 3),
(7, '2023_07_29_072315_create_maids_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `description`, `status`, `popular`, `created_at`, `updated_at`) VALUES
(14, 'Cooking', 'cooking', 'This is the cooking category . Maid will cook two time in a day .', 0, 0, '2023-07-29 01:18:31', '2023-07-29 01:18:31'),
(15, 'Nanny', 'nanny', 'Nanny will employed as per month.', 0, 0, '2023-07-29 06:26:56', '2023-07-29 06:26:56'),
(16, 'Cleaning', 'cleaning', 'The cleaner will clean you house as well as your cloth. It will cost per day.', 0, 0, '2023-07-29 06:28:30', '2023-07-29 06:28:30'),
(17, 'Car Washing', 'car-washing', 'Maid will wash only car .', 0, 0, '2023-07-29 06:46:26', '2023-07-29 06:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', NULL, '$2y$10$MpwtC5KOit.MdsxmZAoKGO2MYUWwYuV2iOQO2TpkyluRw.lTdin6W', 'user', NULL, '2023-07-24 02:51:27', '2023-07-24 02:51:27'),
(2, 'Agent', 'agent@gmail.com', NULL, '$2y$10$v1AqenSTOA7iaIXY.nqUJecXvaWcH6IJZJZfvHsUOjJjzhEdp4Wjq', 'agent', NULL, '2023-07-24 05:21:29', '2023-07-24 05:21:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_tools`
--
ALTER TABLE `add_tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `maids`
--
ALTER TABLE `maids`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serv_name` (`id`),
  ADD KEY `service_name` (`serv_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `add_tools`
--
ALTER TABLE `add_tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maids`
--
ALTER TABLE `maids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
