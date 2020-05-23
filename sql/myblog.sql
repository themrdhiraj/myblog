-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 06:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_20_091208_create_posts_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2020_05_21_071416_add_user_id_to_posts', 2),
(6, '2020_05_21_105604_add_cover_image_to_posts', 3),
(7, '2020_05_21_111116_add_cover_image_to_posts', 4),
(8, '2020_05_22_043129_add_profile_to_users', 5),
(9, '2020_05_22_063226_add_aboutme_to_users', 6),
(10, '2020_05_22_065152_add_services_to_users', 7),
(11, '2020_05_22_140346_create_work_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dhiraj@gmail.com', '$2y$10$aGHyye/YuUbh74PCKZQ9rOGpG4DJzO6jc1MgTYzaEqOaTzEjOTFLS', '2020-05-21 01:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(13, 'Earum possimus veri', 'Adipisci dicta repre', '2020-05-21 06:13:05', '2020-05-21 06:13:17', 1, 'Warframe0007_1590062297.jpg'),
(14, 'Esse qui hic ullam', 'At facilis sed persp', '2020-05-21 06:36:55', '2020-05-21 06:36:55', 1, 'Warframe0000_1590063715.jpg'),
(15, 'Ex maxime nostrum iu', 'Itaque ipsum error', '2020-05-21 06:38:36', '2020-05-21 06:38:36', 1, 'Warframe0007_1590063816.jpg'),
(16, 'Voluptatem aute tem', 'Adipisicing tempor f', '2020-05-21 06:40:16', '2020-05-21 06:40:16', 1, 'silhouette_night_starry_sky_151193_1280x720_1590063916.jpg'),
(17, 'In molestias qui ita', 'Voluptates laudantiu', '2020-05-21 06:41:38', '2020-05-21 06:41:38', 1, 'Warframe0037_1590063998.jpg'),
(18, 'Exercitationem dolor', 'Quia sit quas omnis', '2020-05-21 06:43:12', '2020-05-21 06:43:12', 1, 'Warframe0057_1590064092.jpg');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `profile_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `profile_facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `profile_twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `profile_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `profile_github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `profile_aboutme` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `profile_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `profile_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_image`, `profile_designation`, `profile_facebook`, `profile_twitter`, `profile_linkedin`, `profile_github`, `profile_aboutme`, `profile_services`, `profile_work`) VALUES
(1, 'Dhiraj Shrestha', 'user@myblog.com', NULL, '$2y$10$RQm4SUsPWS.jHNeuV6j82O8DMbTFsQcwUqPzky5M6TURVWNDR.jse', NULL, '2020-05-22 22:47:11', '2020-05-22 22:49:46', 'profile.jpeg', 'Web Developer', 'themrdhiraj', 'themrdhiraj', 'themrdhiraj', 'themrdhiraj', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_languages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_time_taken` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_about` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `created_at`, `updated_at`, `project_name`, `project_languages`, `project_time_taken`, `project_url`, `project_about`) VALUES
(2, '2020-05-22 10:21:15', '2020-05-22 10:21:15', 'Yoko Walsh', 'Cum aliquid enim dol', '1', 'Cumque voluptates di', '<p>asdfasdf</p>'),
(3, '2020-05-22 10:22:10', '2020-05-22 10:49:51', 'a URL', 'Cum aspernatur proid', '3', 'https://dhiraj298167.com.np', '<p>aaaaa</p>'),
(5, '2020-05-22 10:50:33', '2020-05-22 10:50:33', 'Briar Buckner', 'Laborum aut consequa', '1', 'Eos pariatur Dicta', '<p>asdf</p>'),
(6, '2020-05-22 10:50:48', '2020-05-22 10:50:48', 'Clarke Tyson', 'Ex atque ea ea quas', '2', 'Velit dolor deserunt', '<p>asdf</p>'),
(7, '2020-05-22 10:51:00', '2020-05-22 10:51:00', 'Jessica Ramsey', 'Laboriosam dolorem', '3', 'Magnam sequi laborum', '<p>asdfasdf</p>');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
