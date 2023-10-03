-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 03 oct. 2023 à 23:47
-- Version du serveur : 5.6.26-log
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artech`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `name`, `description`, `date`, `price`, `image`, `created_at`, `updated_at`) VALUES
(6, 'potion', 'fdghvjkl', '2023-10-07', '8754.00', 'fantasy.jpg', '2023-10-02 18:38:04', '2023-10-03 22:38:07'),
(7, 'Commande 7', 'Description de la commande 7', '2023-10-02', '723.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(8, 'Commande 8', 'Description de la commande 8', '2023-10-02', '627.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(9, 'Commande 9', 'Description de la commande 9', '2023-10-02', '877.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(10, 'Commande 10', 'Description de la commande 10', '2023-10-02', '979.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(11, 'Commande 11', 'Description de la commande 11', '2023-10-02', '417.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(12, 'Commande 12', 'Description de la commande 12', '2023-10-02', '406.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(13, 'Commande 13', 'Description de la commande 13', '2023-10-02', '409.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(14, 'Commande 14', 'Description de la commande 14', '2023-10-02', '155.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(15, 'Commande 15', 'Description de la commande 15', '2023-10-02', '567.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(16, 'Commande 16', 'Description de la commande 16', '2023-10-02', '935.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(17, 'Commande 17', 'Description de la commande 17', '2023-10-02', '428.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(18, 'Commande 18', 'Description de la commande 18', '2023-10-02', '980.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(19, 'Commande 19', 'Description de la commande 19', '2023-10-02', '11.00', NULL, '2023-10-02 18:38:04', '2023-10-02 18:38:04'),
(21, 'Epicode', 'c\'est un produit x', '2023-10-21', '1400.00', 'Regina.jpg', '2023-10-03 21:11:04', '2023-10-03 22:39:06'),
(22, 'Picasso', 'Tableau d\'art', '2023-10-22', '9860.00', 'picasso.jpg', '2023-10-03 21:11:33', '2023-10-03 22:41:16');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `date`, `owner`, `created_at`, `updated_at`) VALUES
(1, 'Event 1', 'Description for Event 1', '2023-10-02', 'Owner 1', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(2, 'Event 2', 'Description for Event 2', '2023-10-02', 'Owner 2', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(3, 'Event 3', 'Description for Event 3', '2023-10-02', 'Owner 3', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(4, 'Event 4', 'Description for Event 4', '2023-10-02', 'Owner 4', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(5, 'Event 5', 'Description for Event 5', '2023-10-02', 'Owner 5', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(6, 'Event 6', 'Description for Event 6', '2023-10-02', 'Owner 6', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(7, 'Event 7', 'Description for Event 7', '2023-10-02', 'Owner 7', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(8, 'Event 8', 'Description for Event 8', '2023-10-02', 'Owner 8', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(9, 'Event 9', 'Description for Event 9', '2023-10-02', 'Owner 9', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(10, 'Event 10', 'Description for Event 10', '2023-10-02', 'Owner 10', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(11, 'Event 11', 'Description for Event 11', '2023-10-02', 'Owner 11', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(12, 'Event 12', 'Description for Event 12', '2023-10-02', 'Owner 12', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(13, 'Event 13', 'Description for Event 13', '2023-10-02', 'Owner 13', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(14, 'Event 14', 'Description for Event 14', '2023-10-02', 'Owner 14', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(15, 'Event 15', 'Description for Event 15', '2023-10-02', 'Owner 15', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(16, 'Event 16', 'Description for Event 16', '2023-10-02', 'Owner 16', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(17, 'Event 17', 'Description for Event 17', '2023-10-02', 'Owner 17', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(18, 'Event 18', 'Description for Event 18', '2023-10-02', 'Owner 18', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(19, 'Event 19', 'Description for Event 19', '2023-10-02', 'Owner 19', '2023-10-02 18:38:32', '2023-10-02 18:38:32'),
(20, 'Event 20', 'Description for Event 20', '2023-10-02', 'Owner 20', '2023-10-02 18:38:32', '2023-10-02 18:38:32');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_10_02_192059_create_product', 1),
(2, '2023_10_02_192042_create_commandes', 2),
(3, '2023_10_02_183800_create_commande', 3),
(4, '2023_10_01_185419_create_products_table', 4),
(5, '2023_09_30_192553_create_events_table', 5),
(6, '2023_10_03_202803_add_image_to_commandes_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Product 1', 'Description for Product 1', '29708.74', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(2, 'Product 2', 'Description for Product 2', '92967.38', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(3, 'Product 3', 'Description for Product 3', '74298.64', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(4, 'Product 4', 'Description for Product 4', '3693.21', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(5, 'Product 5', 'Description for Product 5', '56477.08', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(6, 'Product 6', 'Description for Product 6', '11667.40', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(7, 'Product 7', 'Description for Product 7', '72853.25', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(8, 'Product 8', 'Description for Product 8', '9925.32', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(9, 'Product 9', 'Description for Product 9', '13082.64', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(10, 'Product 10', 'Description for Product 10', '93298.18', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(11, 'Product 11', 'Description for Product 11', '6277.46', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(12, 'Product 12', 'Description for Product 12', '68113.37', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(13, 'Product 13', 'Description for Product 13', '81668.19', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(14, 'Product 14', 'Description for Product 14', '21165.77', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(15, 'Product 15', 'Description for Product 15', '14489.26', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(16, 'Product 16', 'Description for Product 16', '87557.18', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(17, 'Product 17', 'Description for Product 17', '68926.68', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(18, 'Product 18', 'Description for Product 18', '13300.25', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(19, 'Product 19', 'Description for Product 19', '74410.13', '2023-10-02 18:38:38', '2023-10-02 18:38:38'),
(20, 'Product 20', 'Description for Product 20', '96699.56', '2023-10-02 18:38:38', '2023-10-02 18:38:38');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
