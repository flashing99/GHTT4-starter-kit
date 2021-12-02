-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 02 déc. 2021 à 11:38
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ghtt_vuexy_groupe`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `user_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ag_groups`
--

CREATE TABLE `ag_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ag_groups`
--

INSERT INTO `ag_groups` (`id`, `group_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'G-1', 1, '2021-12-02 08:54:53', NULL),
(2, 'G-2', 1, '2021-12-02 08:54:53', NULL),
(3, 'G-3', 1, '2021-12-02 08:54:53', NULL),
(4, 'G-4', 1, '2021-12-02 08:54:53', NULL),
(5, 'G-5', 1, '2021-12-02 08:54:53', NULL),
(6, 'G-6', 1, '2021-12-02 08:54:53', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ag_items`
--

CREATE TABLE `ag_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `compte_scf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ag_groups_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ag_items`
--

INSERT INTO `ag_items` (`id`, `item_name`, `status`, `compte_scf`, `ag_groups_id`, `created_at`, `updated_at`) VALUES
(1, 'Vente de Marchandises ', 1, '700', 1, NULL, NULL),
(2, 'ventes de produits finis et intermédiaires', 1, '701&702', 1, NULL, NULL),
(3, 'ventes de travaux', 1, '704', 1, NULL, NULL),
(4, 'ventes d\'études et autres prestations', 1, '705&706', 1, NULL, NULL),
(5, 'autres', 1, '703,708,709', 1, NULL, NULL),
(6, 'Chiffre d\'Affaires', 1, '', 1, NULL, NULL),
(7, 'Production Stockée  ou destockée ', 1, '72', 2, NULL, NULL),
(8, 'Production immobilisée', 1, '73', 2, NULL, NULL),
(9, 'subvention d\'exploitation', 1, '74', 2, NULL, NULL),
(10, 'Production de la période', 1, '', 2, NULL, NULL),
(11, 'achats consommés', 1, '60', 3, NULL, NULL),
(12, 'dont achats de marchandises', 1, '600', 3, NULL, NULL),
(13, 'matières premières', 1, '601', 3, NULL, NULL),
(14, 'achats d\'études et de prestations de services', 1, '604', 3, NULL, NULL),
(15, 'autres services extérieurs', 1, '61', 3, NULL, NULL),
(16, 'Services extérieurs', 1, '62', 3, NULL, NULL),
(17, 'Consommations de la période', 1, '', 3, NULL, NULL),
(18, 'Valeur ajoutée', 1, '', 4, NULL, NULL),
(19, 'charges de personnel', 1, '63', 5, NULL, NULL),
(20, 'Impôts, taxes et versements assimilés', 1, '64', 5, NULL, NULL),
(21, 'EBE ', 1, '', 5, NULL, NULL),
(22, 'concours bancaires courants', 1, '519', 6, NULL, NULL),
(23, 'Créances clients globales (montant bruts)', 1, '411', 6, NULL, NULL),
(24, 'Effectif global', 1, '', 6, NULL, NULL),
(25, 'dont effectifs Permanents', 1, '', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `dataline_details`
--

CREATE TABLE `dataline_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datas_lines_id` bigint(20) UNSIGNED NOT NULL,
  `ag_items_id` bigint(20) UNSIGNED NOT NULL,
  `data_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `datas_lines`
--

CREATE TABLE `datas_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filiale_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `data_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filiales`
--

CREATE TABLE `filiales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filiale_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `filiales`
--

INSERT INTO `filiales` (`id`, `filiale_name`, `created_at`, `updated_at`, `status`) VALUES
(1, 'EGT CENTRE', '2021-12-02 08:54:47', '2021-12-02 08:54:47', 1),
(2, 'EGH EL AURASSI', '2021-12-02 08:54:47', '2021-12-02 08:54:47', 1),
(3, 'EGH EL DJAZAIR', '2021-12-02 08:54:47', '2021-12-02 08:54:47', 1),
(4, 'EGT EST', '2021-12-02 08:54:47', '2021-12-02 08:54:47', 1),
(5, 'EGT ANNABA', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(6, 'EGT SIDI FREDJ', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(7, 'EGT ZERALDA', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(8, 'EGT TIPAZA', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(9, 'EGT ANDALOUSES', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(10, 'EGT BISKRA', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(11, 'EGT TAMANRASSET', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(12, 'EGT OUEST', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(13, 'EGT GHARDAIA', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(14, 'EGT TLEMCEN', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(15, 'EGT THALASSOTHERAPIE', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(16, 'EGT HAMMAM RIGHA', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1),
(17, 'ET KABYLIE', '2021-12-02 08:54:48', '2021-12-02 08:54:48', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_11_21_145918_create_positions_table', 1),
(6, '2021_11_22_090034_add_position_id_to_users', 1),
(7, '2021_11_23_150316_create_position_user_table', 1),
(8, '2021_11_24_131339_add_number_code_to_users', 1),
(9, '2021_11_24_134955_add_is_activated_to_users', 1),
(10, '2021_11_28_073739_create_filiales_table', 1),
(11, '2021_11_28_073928_add_filiale_id_to_users', 1),
(12, '2021_11_29_031158_create_admins_table', 1),
(13, '2021_11_30_085056_add_state_to_filiales', 1),
(14, '2021_12_01_151648_create_datas_lines_table', 1),
(15, '2021_12_02_013059_create_ag_groups', 1),
(16, '2021_12_02_015233_create_ag_items', 1),
(17, '2021_12_02_015551_create_dataline_details_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position_title` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `positions`
--

INSERT INTO `positions` (`id`, `position_title`, `created_at`, `updated_at`) VALUES
(1, 'DG', '2021-12-02 08:54:43', '2021-12-02 08:54:43'),
(2, 'IT MANAGER', '2021-12-02 08:54:43', '2021-12-02 08:54:43'),
(3, 'DGC', '2021-12-02 08:54:43', '2021-12-02 08:54:43'),
(4, 'DAF', '2021-12-02 08:54:43', '2021-12-02 08:54:43'),
(5, 'GEST', '2021-12-02 08:54:43', '2021-12-02 08:54:43');

-- --------------------------------------------------------

--
-- Structure de la table `position_user`
--

CREATE TABLE `position_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `is_admin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filiale_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_code`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `position_id`, `is_admin`, `filiale_id`) VALUES
(1, 'zoheir moualem', 'admin@admin.com', '2021-12-02 09:59:40', '$2y$10$XXKuDliucylVHDfhU0CfKOG0sWEkev3lqQUSIUBNNHHysY3wHQ2OO', '446123', NULL, NULL, NULL, '2021-12-02 08:55:59', '2021-12-02 08:55:59', 1, '1', 1),
(2, 'user', 'user@admin.com', '2021-12-02 10:04:28', '$2y$10$XXKuDliucylVHDfhU0CfKOG0sWEkev3lqQUSIUBNNHHysY3wHQ2OO', '691723', NULL, NULL, NULL, '2021-12-02 09:04:09', '2021-12-02 09:04:09', 2, NULL, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_user_code_unique` (`user_code`),
  ADD KEY `admins_position_id_foreign` (`position_id`);

--
-- Index pour la table `ag_groups`
--
ALTER TABLE `ag_groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ag_items`
--
ALTER TABLE `ag_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ag_items_ag_groups_id_foreign` (`ag_groups_id`);

--
-- Index pour la table `dataline_details`
--
ALTER TABLE `dataline_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dataline_details_datas_lines_id_foreign` (`datas_lines_id`),
  ADD KEY `dataline_details_ag_items_id_foreign` (`ag_items_id`);

--
-- Index pour la table `datas_lines`
--
ALTER TABLE `datas_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datas_lines_filiale_id_foreign` (`filiale_id`),
  ADD KEY `datas_lines_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `filiales`
--
ALTER TABLE `filiales`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `position_user`
--
ALTER TABLE `position_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position_user_user_id_foreign` (`user_id`),
  ADD KEY `position_user_position_id_foreign` (`position_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_code_unique` (`user_code`),
  ADD KEY `users_position_id_foreign` (`position_id`),
  ADD KEY `users_filiale_id_foreign` (`filiale_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ag_groups`
--
ALTER TABLE `ag_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `ag_items`
--
ALTER TABLE `ag_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `dataline_details`
--
ALTER TABLE `dataline_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `datas_lines`
--
ALTER TABLE `datas_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filiales`
--
ALTER TABLE `filiales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `position_user`
--
ALTER TABLE `position_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`);

--
-- Contraintes pour la table `ag_items`
--
ALTER TABLE `ag_items`
  ADD CONSTRAINT `ag_items_ag_groups_id_foreign` FOREIGN KEY (`ag_groups_id`) REFERENCES `ag_groups` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `dataline_details`
--
ALTER TABLE `dataline_details`
  ADD CONSTRAINT `dataline_details_ag_items_id_foreign` FOREIGN KEY (`ag_items_id`) REFERENCES `ag_items` (`id`),
  ADD CONSTRAINT `dataline_details_datas_lines_id_foreign` FOREIGN KEY (`datas_lines_id`) REFERENCES `datas_lines` (`id`);

--
-- Contraintes pour la table `datas_lines`
--
ALTER TABLE `datas_lines`
  ADD CONSTRAINT `datas_lines_filiale_id_foreign` FOREIGN KEY (`filiale_id`) REFERENCES `filiales` (`id`),
  ADD CONSTRAINT `datas_lines_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `position_user`
--
ALTER TABLE `position_user`
  ADD CONSTRAINT `position_user_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`),
  ADD CONSTRAINT `position_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_filiale_id_foreign` FOREIGN KEY (`filiale_id`) REFERENCES `filiales` (`id`),
  ADD CONSTRAINT `users_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
