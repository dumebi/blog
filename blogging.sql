-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2017 at 06:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogging`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PHP5', '2016-12-01 13:26:29', '2016-12-01 12:49:47'),
(2, 'LARAVEL', '2016-12-01 13:26:29', '2016-12-01 13:26:29'),
(3, 'Javascript', '2016-12-01 13:26:29', '2016-12-01 13:26:29'),
(5, 'Vuejs', '2017-10-14 12:20:57', '2017-10-14 12:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2016_11_28_132553_create_roles_table', 1),
(6, '2016_11_29_192606_add_photo_id_to_users', 2),
(7, '2016_11_29_200035_create_photos_table', 3),
(8, '2016_11_30_212326_create_posts_table', 4),
(9, '2016_12_01_085523_create_categories_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dikejude49@gmail.com', 'c0090cf9e37f11760d01a2fe7df5d08ddc7e8f048a25638d5a48e51933da46eb', '2016-11-30 08:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(1, NULL, '14804539361001599992_2_644x461_innovative-pop-works-pop-ceiling-windows-pillars-wall-screeding-add-some-photos.jpg', '2016-11-29 20:12:16', '2016-11-29 20:12:16'),
(2, NULL, '14804539891001599992_2_644x461_innovative-pop-works-pop-ceiling-windows-pillars-wall-screeding-add-some-photos.jpg', '2016-11-29 20:13:09', '2016-11-29 20:13:09'),
(5, NULL, '148046493307qxITss.jpeg', '2016-11-29 23:15:33', '2016-11-29 23:15:33'),
(6, NULL, '148046525107qxITss.jpeg', '2016-11-29 23:20:51', '2016-11-29 23:20:51'),
(7, NULL, '148046529607qxITss.jpeg', '2016-11-29 23:21:36', '2016-11-29 23:21:36'),
(8, NULL, '148046537907qxITss.jpeg', '2016-11-29 23:22:59', '2016-11-29 23:22:59'),
(9, NULL, '148046539807qxITss.jpeg', '2016-11-29 23:23:18', '2016-11-29 23:23:18'),
(10, NULL, '148046548807qxITss.jpeg', '2016-11-29 23:24:48', '2016-11-29 23:24:48'),
(11, NULL, '148046553607qxITss.jpeg', '2016-11-29 23:25:36', '2016-11-29 23:25:36'),
(12, NULL, '148046560407qxITss.jpeg', '2016-11-29 23:26:44', '2016-11-29 23:26:44'),
(13, NULL, '148046566107qxITss.jpeg', '2016-11-29 23:27:41', '2016-11-29 23:27:41'),
(14, NULL, '148048802007qxITss.jpeg', '2016-11-30 05:40:20', '2016-11-30 05:40:20'),
(15, NULL, '148048823307qxITss.jpeg', '2016-11-30 05:43:53', '2016-11-30 05:43:53'),
(16, NULL, '148048862907qxITss.jpeg', '2016-11-30 05:50:29', '2016-11-30 05:50:29'),
(17, NULL, '148048879607qxITss.jpeg', '2016-11-30 05:53:16', '2016-11-30 05:53:16'),
(18, NULL, '148052206207qxITss.jpeg', '2016-11-30 15:07:42', '2016-11-30 15:07:42'),
(27, NULL, '14805852151001599992_5_644x461_innovative-pop-works-pop-ceiling-windows-pillars-wall-screeding-lagos.jpg', '2016-12-01 08:40:15', '2016-12-01 08:40:15'),
(28, NULL, '148058772112465999_988715964535189_7463718687450320146_o.jpg', '2016-12-01 09:22:01', '2016-12-01 09:22:01'),
(29, NULL, '1480696664arith 2.PNG', '2016-12-02 15:37:44', '2016-12-02 15:37:44'),
(30, NULL, '1507980233ai_1x.jpg', '2017-10-14 10:23:53', '2017-10-14 10:23:53'),
(31, NULL, 'new-post1507985946.jpg', '2017-10-14 11:59:06', '2017-10-14 11:59:06'),
(32, NULL, 'laravel-post-21507986110.jpg', '2017-10-14 12:01:50', '2017-10-14 12:01:50'),
(33, NULL, 'javascript-post-31507986214.jpg', '2017-10-14 12:03:34', '2017-10-14 12:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `photo_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `photo_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(7, 1, 2, 32, 'Laravel Post 2', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\r\n<hr />\r\n<p>Cum sociis natoque penatibus et magnis&nbsp;<a href=\"http://getbootstrap.com/docs/4.0/examples/blog/\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\r\n<blockquote>\r\n<p>Curabitur blandit tempus porttitor.&nbsp;<strong>Nullam quis risus eget urna mollis</strong>&nbsp;ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n</blockquote>\r\n<p>Etiam porta&nbsp;<em>sem malesuada magna</em>&nbsp;mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n<h2>Heading</h2>\r\n<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\r\n<h3>Sub-heading</h3>\r\n<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<pre><code>Example code block</code></pre>\r\n<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\r\n<h3>Sub-heading</h3>\r\n<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n<ul>\r\n<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n<li>Donec id elit non mi porta gravida at eget metus.</li>\r\n<li>Nulla vitae elit libero, a pharetra augue.</li>\r\n</ul>\r\n<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\r\n<ol>\r\n<li>Vestibulum id ligula porta felis euismod semper.</li>\r\n<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\r\n<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\r\n</ol>\r\n<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', '2017-10-14 12:01:50', '2017-10-14 12:01:50'),
(6, 1, 1, 31, 'new post', '<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n<ul>\r\n<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n<li>Donec id elit non mi porta gravida at eget metus.</li>\r\n<li>Nulla vitae elit libero, a pharetra augue.</li>\r\n</ul>\r\n<p>Etiam porta&nbsp;<em>sem malesuada magna</em>&nbsp;mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>', '2017-10-14 11:59:06', '2017-10-14 11:59:06'),
(8, 1, 3, 33, 'Javascript post 3', '<blockquote>\r\n<p>Curabitur blandit tempus porttitor.&nbsp;<strong>Nullam quis risus eget urna mollis</strong>&nbsp;ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n</blockquote>\r\n<p>Etiam porta&nbsp;<em>sem malesuada magna</em>&nbsp;mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>', '2017-10-14 12:03:34', '2017-10-14 12:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, NULL),
(2, 'Author', NULL, NULL),
(3, 'Subscriber', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT '3',
  `is_active` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `is_active`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `photo_id`) VALUES
(1, 1, 1, 'Jude Dike', 'dikejude49@gmail.com', '$2y$10$6yc.ync.5aL.WRzs86/43u2VxaiELdGKp3x2Mod0Y3S8epAtyHWR2', 'KkRQcyuNsbHjrdtthKDwdNTjB3zJCoicveebvGXxy4hbYSecmTcMJO2USlPs', '2016-11-28 12:33:24', '2017-10-14 10:26:42', '18'),
(2, 3, 0, 'Chuks James 333', 'chukky@gmail.com', '$2y$10$pX9gPoDLsEsq7CktraXCfOs8AyIH9u5gCRaqro2rZIhRO.jfk8ki.', '0dKnRQhRMaBGwlSFXlxkHs0ladoKljbjrH0cwOisVMBRk2uE98LoiPNXeJKW', '2016-11-28 13:01:02', '2016-11-30 15:22:53', '16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`),
  ADD KEY `posts_category_id_index` (`category_id`),
  ADD KEY `posts_photo_id_index` (`photo_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
