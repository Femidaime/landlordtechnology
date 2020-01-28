-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2019 at 05:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landlordtech2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `accountName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountNumber` bigint(20) NOT NULL,
  `bankName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `authCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cardBrand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expMonth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expYear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_transactions`
--

CREATE TABLE `customer_transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `transactionFor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` bigint(20) NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `transactionType_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_uploads`
--

CREATE TABLE `document_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `votes` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_uploads`
--

INSERT INTO `document_uploads` (`id`, `name`, `title`, `property_id`, `votes`, `created_at`, `updated_at`) VALUES
(1, 'agreements/1CVIQmTf2zSy3WIfjbji4lPw2B4hOmT4itG7WJox.jpeg', NULL, 3, NULL, '2019-06-23 17:14:13', '2019-06-23 17:14:13'),
(2, 'agreements/YOAycRkkPZcaL9VYRH59GyFRN4joCiLY0v7Bj319.jpeg', NULL, 3, NULL, '2019-06-23 17:14:13', '2019-06-23 17:14:13'),
(3, 'agreements/x1KOUvayWJiCWKg6XjNKNf9W1CSfhhnxUGKbjm9c.jpeg', NULL, 3, NULL, '2019-06-23 17:15:29', '2019-06-23 17:15:29'),
(4, 'agreements/hWAedb2iNGUZqTngXLKF2MJEPNjUVFBqF1yC0RBE.jpeg', NULL, 3, NULL, '2019-06-23 17:15:29', '2019-06-23 17:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `featured_property`
--

CREATE TABLE `featured_property` (
  `id` int(10) UNSIGNED NOT NULL,
  `verifiedProperty_id` int(10) UNSIGNED DEFAULT NULL,
  `iActive` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentFor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `verifiedProperty_id` int(10) UNSIGNED NOT NULL,
  `amount` bigint(20) NOT NULL,
  `refId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transactionType_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `status`, `description`, `paymentFor`, `user_id`, `verifiedProperty_id`, `amount`, `refId`, `transactionType_id`, `created_at`, `updated_at`) VALUES
(73, 'success', 'Successful', 'INTEREST', 12, 1, 2000, 'LT-468308', 2, '2019-06-13 15:35:06', '2019-06-13 15:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `landlord_admin_transactions`
--

CREATE TABLE `landlord_admin_transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `transactionFor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `transactionType_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_01_2_172425_create_transaction_response_table', 1),
(3, '2019_01_2_173021_create_transaction_types_table', 1),
(4, '2019_01_2_183819_create_roles_table', 1),
(5, '2019_01_2_190244_create_property_categories_table', 1),
(6, '2019_01_3_000000_create_users_table', 1),
(7, '2019_04_22_183951_create_property_response_table', 1),
(8, '2019_04_23_155626_create_properties_table', 1),
(9, '2019_04_23_183854_create_verified_properties_table', 1),
(10, '2019_04_23_185533_create_document_uploads_table', 1),
(11, '2019_04_23_190005_create_property_images_table', 1),
(12, '2019_04_23_190447_create_property_interests_table', 1),
(13, '2019_04_23_191236_create_landlord_admin_transactions_table', 1),
(14, '2019_04_23_192611_create_activities_table', 1),
(15, '2019_04_23_192715_create_customer_transactions_table', 1),
(16, '2019_04_24_172719_create_featured_property_table', 1),
(17, '2019_04_24_173425_create_cards_table', 1),
(18, '2019_04_24_173511_create_rentals_table', 1),
(19, '2019_04_24_174848_create_bank_details_table', 1),
(20, '2019_05_27_195508_create_notifications_table', 1),
(21, '2020_05_26_182345_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_id` int(10) UNSIGNED NOT NULL,
  `isRead` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mainImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentsTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useOfProperty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedrooms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathrooms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toilets` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `additionalInfo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `isDocumentUploaded` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `showProperty` tinyint(1) NOT NULL DEFAULT '0',
  `LUIN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CUIN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isPropertyVerified` tinyint(1) NOT NULL DEFAULT '0',
  `propertyResponse_id` int(10) UNSIGNED NOT NULL,
  `propertyCategory_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `area`, `description`, `mainImage`, `state`, `lga`, `address`, `documentsTitle`, `useOfProperty`, `bedrooms`, `bathrooms`, `toilets`, `price`, `additionalInfo`, `currency`, `duration`, `startDate`, `endDate`, `isDocumentUploaded`, `user_id`, `showProperty`, `LUIN`, `CUIN`, `isPropertyVerified`, `propertyResponse_id`, `propertyCategory_id`, `created_at`, `updated_at`) VALUES
(3, 'lagos', NULL, 'mainImages/Dqx8dFyEAbhhtamfkIo3go2mCyOya5WtWR3wpCL4.jpeg', 'Edo', 'Esan Central', '26 oremerin', '3', 'LEASE', '2', '2', '3', 1000000, '3 Bedroom duplex', '₦', '2 weeks before', '2019-05-22 00:00:00', '2019-05-08 00:00:00', 0, 1, 0, NULL, NULL, 0, 1, 3, '2019-05-29 09:27:51', '2019-05-29 09:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `property_categories`
--

CREATE TABLE `property_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_categories`
--

INSERT INTO `property_categories` (`id`, `created_at`, `updated_at`, `name`, `description`, `categoryImage`) VALUES
(1, '2019-05-09 19:45:46', '2019-05-09 19:45:46', 'Office Space', 'office space', ''),
(2, '2019-05-09 19:45:46', '2019-05-09 19:45:46', 'land', 'land', ''),
(3, '2019-05-09 19:49:27', '2019-05-09 19:49:27', 'house', 'house', ''),
(4, '2019-05-09 19:49:27', '2019-05-09 19:49:27', 'land', 'land', '');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `propertyCategory_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `created_at`, `updated_at`, `name`, `title`, `property_id`, `propertyCategory_id`) VALUES
(2, '2019-05-29 09:27:51', '2019-05-29 09:27:51', 'propertyImages/kUGUGAlpfgAEKfmGPDXJ5bYtqBbc8LvivA7ofuJG.jpeg', NULL, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `property_interests`
--

CREATE TABLE `property_interests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `isInterestValid` tinyint(1) NOT NULL DEFAULT '0',
  `verifiedProperty_id` int(10) UNSIGNED NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_interests`
--

INSERT INTO `property_interests` (`id`, `user_id`, `isInterestValid`, `verifiedProperty_id`, `startDate`, `endDate`, `created_at`, `updated_at`) VALUES
(2, 12, 1, 1, '2019-06-08 00:00:00', '2019-06-15 00:00:00', '2019-06-13 15:35:06', '2019-06-13 15:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `property_responses`
--

CREATE TABLE `property_responses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_responses`
--

INSERT INTO `property_responses` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'pending', 'Awaiting Validation', NULL, NULL),
(2, 'Verified', '', NULL, NULL),
(3, 'rejected', 'Failed Vaildation', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `propertyCategory_id` int(10) UNSIGNED NOT NULL,
  `verifiedProperty_id` int(10) UNSIGNED NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `card_id` int(10) UNSIGNED NOT NULL,
  `paymentDueDate` datetime NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` enum('DAILY','WEEKLY','MONTHLY','YEARLY') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rentalType` enum('RENT','LEASE','SALE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `otherDuration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'tenant', 'TEN', '2019-04-29 16:44:05', '2019-04-29 16:44:05'),
(2, 'landlord', 'landlord', '2019-04-29 16:44:05', '2019-04-29 16:44:05'),
(3, 'super-admin', 'super-admin', '2019-04-29 16:45:16', '2019-04-29 16:45:16'),
(4, 'sub-admin', 'sub-admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_response`
--

CREATE TABLE `transaction_response` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_types`
--

CREATE TABLE `transaction_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_types`
--

INSERT INTO `transaction_types` (`id`, `type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'RENT', 'Payment for rent', '2019-05-26 14:36:52', '2019-05-26 14:36:52'),
(2, 'INTEREST', 'Payment for shown ineterests', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_of_origin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `phoneNumber` bigint(20) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `photo`, `address`, `state_of_origin`, `isActive`, `phoneNumber`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jude', 'iyoha', NULL, '', NULL, 0, 8139590238, 'ehizokhai@gmail.com', 2, NULL, '$2y$10$6EBeCMeCCzeLtrDPBcRDX..j22qK6jNy.SXPy0/.NneaZyZbzTCsm', NULL, '2019-05-01 10:57:37', '2019-05-01 10:57:37'),
(3, 'jude', 'iyoha', NULL, '', NULL, 0, 8139590238, 'jude@gmail.com', 2, NULL, '$2y$10$YlLNYOxhxr/5mTV08es/help0SNGOe8muWbccRuuRU6cmBkLOGNkK', NULL, '2019-05-01 11:01:44', '2019-05-01 11:01:44'),
(4, 'jude', 'iyoha', NULL, '', NULL, 0, 8139590238, 'olu.oduro@gmail.com', 2, NULL, '$2y$10$ciesgeauikLU1GWCLya2Ve/WnNaixidnYEtDB0eAngpOcP7PfZiHa', NULL, '2019-05-01 11:03:57', '2019-05-01 11:03:57'),
(5, 'jude', 'iyoha', NULL, '', NULL, 0, 8139590238, 'jude1@gmail.com', 2, NULL, '$2y$10$KE2EgxlcJLm6G46fPoq40uabGM7DBo17khACV3yW2HoSubHhdyco2', NULL, '2019-05-01 11:06:53', '2019-05-01 11:06:53'),
(6, 'jude', 'jude', NULL, '', NULL, 0, 8139590238, 'admin@gmail.com', 3, NULL, '$2y$10$ZJlXUDeNfQKe2VOonUdFMedrkrb5Ul3V0rtGoDWwciSiRVA0emZvm', NULL, '2019-05-01 11:10:06', '2019-05-01 11:10:06'),
(7, 'jude', 'iyoha', NULL, '', NULL, 0, 8139590238, 'jude9@gmail.com', 2, NULL, '$2y$10$JtTuh5MAyR16IZvfcdzjmOwax0oUMSUNk42qmLW5LBEHcj2uGyI5e', NULL, '2019-05-01 11:22:44', '2019-05-01 11:22:44'),
(9, 'jude', 'iyoha', NULL, '', NULL, 0, 8139590238, 'jude10@gmail.com', 2, NULL, '$2y$10$.WcUls/EN7saE.VczmA6dOUl03DoyQ2TiPKhmKxogWhE2s/W9FG9W', NULL, '2019-05-01 11:25:20', '2019-05-01 11:25:20'),
(10, 'jude', 'Ajayis', 'users/Ly87A0d5CXixtJ9Tt20uLdHWFBUSiP0D8z1Xg3M6.jpeg', '26 Ayinde Akinmade', NULL, 0, 8139590238, 'toks@g.com', 2, NULL, '$2y$10$XNi.YQSXtbL5L3vlUxbA6uRGid5.jrGf2c1t6L3yHY6OjqToVIW8K', NULL, '2019-05-04 05:47:09', '2019-05-09 23:16:03'),
(11, 'femi', 'iyoha', NULL, '', NULL, 0, 8139590238, 'femi@gmail.com', 2, NULL, '$2y$10$3KEpz9.3zQOW25ryPSwptuosyptYla1DgDrdAmtJdTgtjsYGMGBaC', NULL, '2019-05-09 15:23:44', '2019-05-09 15:23:44'),
(12, 'Tokunbo', 'iyoha', NULL, '26 Ayinde Akinmades', NULL, 0, 8139590238, 'customer1@gmail.com', 1, NULL, '$2y$10$Fz71SsVSRo256vq2rybTAuyjG/YIaaiiQpSxvIkkQruokzDpP6n7m', NULL, '2019-05-13 12:17:30', '2019-05-14 08:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `verified_properties`
--

CREATE TABLE `verified_properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `newPropertyPrice` bigint(20) DEFAULT NULL,
  `duration` enum('daily','weekly','monthly','yearly','others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherDuration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified_by` int(10) UNSIGNED DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `uniqueId` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verified_properties`
--

INSERT INTO `verified_properties` (`id`, `property_id`, `isActive`, `newPropertyPrice`, `duration`, `otherDuration`, `verified_by`, `rating`, `uniqueId`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL, NULL, 6, 1, 'LTUID-345634', '2019-05-29 09:31:21', '2019-06-13 15:35:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_user_id_foreign` (`user_id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_user_id_foreign` (`user_id`);

--
-- Indexes for table `customer_transactions`
--
ALTER TABLE `customer_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_transactions_user_id_foreign` (`user_id`),
  ADD KEY `customer_transactions_property_id_foreign` (`property_id`),
  ADD KEY `customer_transactions_transactiontype_id_foreign` (`transactionType_id`);

--
-- Indexes for table `document_uploads`
--
ALTER TABLE `document_uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_uploads_property_id_foreign` (`property_id`);

--
-- Indexes for table `featured_property`
--
ALTER TABLE `featured_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `featured_property_verifiedproperty_id_foreign` (`verifiedProperty_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_verifiedproperty_id_foreign` (`verifiedProperty_id`),
  ADD KEY `invoices_transactiontype_id_foreign` (`transactionType_id`);

--
-- Indexes for table `landlord_admin_transactions`
--
ALTER TABLE `landlord_admin_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `landlord_admin_transactions_user_id_foreign` (`user_id`),
  ADD KEY `landlord_admin_transactions_transactiontype_id_foreign` (`transactionType_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_sender_id_foreign` (`sender_id`),
  ADD KEY `notifications_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_user_id_foreign` (`user_id`),
  ADD KEY `properties_propertyresponse_id_foreign` (`propertyResponse_id`),
  ADD KEY `properties_propertycategory_id_foreign` (`propertyCategory_id`);

--
-- Indexes for table `property_categories`
--
ALTER TABLE `property_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_images_property_id_foreign` (`property_id`),
  ADD KEY `property_images_propertycategory_id_foreign` (`propertyCategory_id`);

--
-- Indexes for table `property_interests`
--
ALTER TABLE `property_interests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_interests_user_id_foreign` (`user_id`),
  ADD KEY `property_interests_verifiedproperty_id_foreign` (`verifiedProperty_id`);

--
-- Indexes for table `property_responses`
--
ALTER TABLE `property_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`),
  ADD KEY `rentals_propertycategory_id_foreign` (`propertyCategory_id`),
  ADD KEY `rentals_verifiedproperty_id_foreign` (`verifiedProperty_id`),
  ADD KEY `rentals_card_id_foreign` (`card_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_response`
--
ALTER TABLE `transaction_response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_types`
--
ALTER TABLE `transaction_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `verified_properties`
--
ALTER TABLE `verified_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verified_properties_property_id_foreign` (`property_id`),
  ADD KEY `verified_properties_verified_by_foreign` (`verified_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_transactions`
--
ALTER TABLE `customer_transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_uploads`
--
ALTER TABLE `document_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `featured_property`
--
ALTER TABLE `featured_property`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `landlord_admin_transactions`
--
ALTER TABLE `landlord_admin_transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_categories`
--
ALTER TABLE `property_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_interests`
--
ALTER TABLE `property_interests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_responses`
--
ALTER TABLE `property_responses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction_response`
--
ALTER TABLE `transaction_response`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_types`
--
ALTER TABLE `transaction_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `verified_properties`
--
ALTER TABLE `verified_properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD CONSTRAINT `bank_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `customer_transactions`
--
ALTER TABLE `customer_transactions`
  ADD CONSTRAINT `customer_transactions_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `customer_transactions_transactiontype_id_foreign` FOREIGN KEY (`transactionType_id`) REFERENCES `transaction_types` (`id`),
  ADD CONSTRAINT `customer_transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `document_uploads`
--
ALTER TABLE `document_uploads`
  ADD CONSTRAINT `document_uploads_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `featured_property`
--
ALTER TABLE `featured_property`
  ADD CONSTRAINT `featured_property_verifiedproperty_id_foreign` FOREIGN KEY (`verifiedProperty_id`) REFERENCES `verified_properties` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_transactiontype_id_foreign` FOREIGN KEY (`transactionType_id`) REFERENCES `transaction_types` (`id`),
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `invoices_verifiedproperty_id_foreign` FOREIGN KEY (`verifiedProperty_id`) REFERENCES `verified_properties` (`id`);

--
-- Constraints for table `landlord_admin_transactions`
--
ALTER TABLE `landlord_admin_transactions`
  ADD CONSTRAINT `landlord_admin_transactions_transactiontype_id_foreign` FOREIGN KEY (`transactionType_id`) REFERENCES `transaction_types` (`id`),
  ADD CONSTRAINT `landlord_admin_transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notifications_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_propertycategory_id_foreign` FOREIGN KEY (`propertyCategory_id`) REFERENCES `property_categories` (`id`),
  ADD CONSTRAINT `properties_propertyresponse_id_foreign` FOREIGN KEY (`propertyResponse_id`) REFERENCES `property_responses` (`id`),
  ADD CONSTRAINT `properties_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `property_images_propertycategory_id_foreign` FOREIGN KEY (`propertyCategory_id`) REFERENCES `property_categories` (`id`);

--
-- Constraints for table `property_interests`
--
ALTER TABLE `property_interests`
  ADD CONSTRAINT `property_interests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `property_interests_verifiedproperty_id_foreign` FOREIGN KEY (`verifiedProperty_id`) REFERENCES `verified_properties` (`id`);

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_card_id_foreign` FOREIGN KEY (`card_id`) REFERENCES `cards` (`id`),
  ADD CONSTRAINT `rentals_propertycategory_id_foreign` FOREIGN KEY (`propertyCategory_id`) REFERENCES `property_categories` (`id`),
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `rentals_verifiedproperty_id_foreign` FOREIGN KEY (`verifiedProperty_id`) REFERENCES `verified_properties` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `verified_properties`
--
ALTER TABLE `verified_properties`
  ADD CONSTRAINT `verified_properties_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `verified_properties_verified_by_foreign` FOREIGN KEY (`verified_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
