-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 16 juin 2023 à 11:02
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel_fisatevent`
--

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_cnps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_compte_contribuable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_responsable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_responsable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_geographie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secteuractivite_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_05_05_220006_create_secteur_activites_table', 1),
(5, '2022_05_05_223343_create_participants_table', 1),
(6, '2022_05_29_221951_create_entreprises_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomdirigeantfonction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secteuractivite_id` bigint(20) UNSIGNED NOT NULL,
  `pay_id` bigint(20) UNSIGNED NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expositioncommerciale` tinyint(1) NOT NULL DEFAULT '0',
  `forumdiscussion` tinyint(1) NOT NULL DEFAULT '0',
  `rencontrebtob` tinyint(1) NOT NULL DEFAULT '0',
  `reunionministerielle` tinyint(1) NOT NULL DEFAULT '0',
  `sessionspecialeprojet` tinyint(1) NOT NULL DEFAULT '0',
  `rendezvous` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `code` int(3) DEFAULT NULL,
  `nom` varchar(45) NOT NULL,
  `divisionregionaleaej_id` int(11) DEFAULT NULL,
  `migration_key` varchar(50) DEFAULT NULL,
  `actif` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `code`, `nom`, `divisionregionaleaej_id`, `migration_key`, `actif`) VALUES
(9, NULL, 'AUSTRALIE', NULL, '9', 1),
(13, NULL, 'AFGHANISTAN', NULL, '13', 1),
(14, NULL, 'AFRIQUE DU SUD', NULL, '14', 1),
(15, NULL, 'ALBANIE', NULL, '15', 1),
(16, NULL, 'ALGERIE', NULL, '16', 1),
(17, NULL, 'ALLEMAGNE', NULL, '17', 1),
(18, NULL, 'ANDORE', NULL, '18', 1),
(19, NULL, 'ANGOLA', NULL, '19', 1),
(20, NULL, 'ANGUILLA', NULL, '20', 1),
(21, NULL, 'ANTARTIQUE', NULL, '21', 1),
(22, NULL, 'ANTIGUA-ET-BARBUDA', NULL, '22', 1),
(23, NULL, 'ANTILLES-NEERLANDAISE', NULL, '23', 1),
(24, NULL, 'ARABIE SAOUDITE', NULL, '24', 1),
(25, NULL, 'ARGENTINE', NULL, '25', 1),
(27, NULL, 'ARUBA', NULL, '27', 1),
(28, NULL, 'AUSTRALIE', NULL, '28', 1),
(29, NULL, 'AUTRICHE', NULL, '29', 1),
(30, NULL, 'AZERBAIDJAN', NULL, '30', 1),
(31, NULL, 'BAHAMAS', NULL, '31', 1),
(32, NULL, 'BAHREIN', NULL, '32', 1),
(33, NULL, 'BANGLADESH', NULL, '33', 1),
(34, NULL, 'BARBADE', NULL, '34', 1),
(35, NULL, 'BELGIQUE', NULL, '35', 1),
(36, NULL, 'BELIZE', NULL, '36', 1),
(37, NULL, 'BERMUDES', NULL, '37', 1),
(38, NULL, 'BHOUTAN', NULL, '38', 1),
(39, NULL, 'BOLIVIE', NULL, '39', 1),
(40, NULL, 'BOTSWANA', NULL, '40', 1),
(41, NULL, 'BURKINA FASO', NULL, '41', 1),
(42, NULL, 'BURUNDI', NULL, '42', 1),
(43, NULL, 'CAMBODGE', NULL, '43', 1),
(44, NULL, 'CAMEROUN', NULL, '44', 1),
(45, NULL, 'CANADA', NULL, '45', 1),
(46, NULL, 'CHINE', NULL, '46', 1),
(47, NULL, 'COLOMBIE', NULL, '47', 1),
(48, NULL, 'COMORES', NULL, '48', 1),
(49, NULL, 'CONGO', NULL, '49', 1),
(50, NULL, 'CUBA', NULL, '50', 1),
(51, NULL, 'DOMINIQUE', NULL, '51', 1),
(52, NULL, 'EGYPTE', NULL, '52', 1),
(53, NULL, 'EQUATEUR', NULL, '53', 1),
(54, NULL, 'ESPAGNE', NULL, '54', 1),
(55, NULL, 'ESTONIE', NULL, '55', 1),
(56, NULL, 'FINLANDE', NULL, '56', 1),
(57, NULL, 'GHANA', NULL, '57', 1),
(58, NULL, 'GIBRALTAR', NULL, '58', 1),
(60, NULL, 'GRENADE', NULL, '60', 1),
(61, NULL, 'GROENLAND', NULL, '61', 1),
(62, NULL, 'GUADELOUPE', NULL, '62', 1),
(63, NULL, 'GUAM', NULL, '63', 1),
(64, NULL, 'GUATEMALA', NULL, '64', 1),
(65, NULL, 'GUYANE', NULL, '65', 1),
(66, NULL, 'HONDURAS', NULL, '66', 1),
(67, NULL, 'IRAK', NULL, '67', 1),
(68, NULL, 'ISLANDE', NULL, '68', 1),
(69, NULL, 'ITALIE', NULL, '69', 1),
(70, NULL, 'JAPON', NULL, '70', 1),
(71, NULL, 'JORDANIE', NULL, '71', 1),
(72, NULL, 'KAZAKHSTAN', NULL, '72', 1),
(73, NULL, 'KENYA', NULL, '73', 1),
(74, NULL, 'KIRIBATI', NULL, '74', 1),
(75, NULL, 'KYRGYZSTAN', NULL, '75', 1),
(76, NULL, 'LAOS', NULL, '76', 1),
(77, NULL, 'LESOTHO', NULL, '77', 1),
(78, NULL, 'LETTONIE', NULL, '78', 1),
(79, NULL, 'LIBAN', NULL, '79', 1),
(80, NULL, 'LIBERIA', NULL, '80', 1),
(81, NULL, 'LIBYE', NULL, '81', 1),
(82, NULL, 'LIECHTENSTEIN', NULL, '82', 1),
(83, NULL, 'LITUANIE', NULL, '83', 1),
(84, NULL, 'LUXEMBOURG', NULL, '84', 1),
(85, NULL, 'MACAO', NULL, '85', 1),
(86, NULL, 'MADAGASCAR', NULL, '86', 1),
(87, NULL, 'MALAISIE', NULL, '87', 1),
(88, NULL, 'MALAWI', NULL, '88', 1),
(89, NULL, 'MALDIVES', NULL, '89', 1),
(90, NULL, 'MALI', NULL, '90', 1),
(91, NULL, 'MARTINIQUE', NULL, '91', 1),
(92, NULL, 'MEXICO', NULL, '92', 1),
(93, NULL, 'MOLDAVIE', NULL, '93', 1),
(94, NULL, 'MONACO', NULL, '94', 1),
(95, NULL, 'MONGOLIE', NULL, '95', 1),
(96, NULL, 'MONTSERRAT', NULL, '96', 1),
(97, NULL, 'MOZAMBIQUE', NULL, '97', 1),
(98, NULL, 'NICARAGUA', NULL, '98', 1),
(99, NULL, 'NIGER', NULL, '99', 1),
(100, NULL, 'NIGERIA', NULL, '100', 1),
(101, NULL, 'NIUE', NULL, '101', 1),
(102, NULL, 'OUZBEKISTAN', NULL, '102', 1),
(103, NULL, 'PAKISTAN', NULL, '103', 1),
(104, NULL, 'PALAU', NULL, '104', 1),
(105, NULL, 'PANAMA', NULL, '105', 1),
(107, NULL, 'PARAGUAY', NULL, '107', 1),
(108, NULL, 'PAYS-BAS', NULL, '108', 1),
(109, NULL, 'PHILIPPINES', NULL, '109', 1),
(110, NULL, 'PITCAIM', NULL, '110', 1),
(111, NULL, 'POLOGNE', NULL, '111', 1),
(112, NULL, 'QATAR', NULL, '112', 1),
(113, NULL, 'ROUMANIE', NULL, '113', 1),
(114, NULL, 'RUSSIE', NULL, '114', 1),
(115, NULL, 'RWANDA', NULL, '115', 1),
(116, NULL, 'SAINT KITTS ET NEVIS', NULL, '116', 1),
(117, NULL, 'SAINT MARIN', NULL, '117', 1),
(118, NULL, 'SAMOA OCCIDENTALES', NULL, '118', 1),
(119, NULL, 'SAMOA U.S.', NULL, '119', 1),
(120, NULL, 'SINGAPOUR', NULL, '120', 1),
(121, NULL, 'SLOVAQUIE', NULL, '121', 1),
(122, NULL, 'SOMALIE', NULL, '122', 1),
(123, NULL, 'SOUDAN', NULL, '123', 1),
(124, NULL, 'SWAZILAND', NULL, '124', 1),
(125, NULL, 'SYRIE', NULL, '125', 1),
(126, NULL, 'TAIWAN', NULL, '126', 1),
(127, NULL, 'TANZANIE', NULL, '127', 1),
(128, NULL, 'TCHAD', NULL, '128', 1),
(129, NULL, 'TONGA', NULL, '129', 1),
(130, NULL, 'TURQUIE', NULL, '130', 1),
(131, NULL, 'TUVALU', NULL, '131', 1),
(132, NULL, 'UKRAINE', NULL, '132', 1),
(133, NULL, 'URUGUAY', NULL, '133', 1),
(134, NULL, 'VANUATU', NULL, '134', 1),
(135, NULL, 'VATICAN', NULL, '135', 1),
(136, NULL, 'VENEZUELA', NULL, '136', 1),
(137, NULL, 'VIETNAM', NULL, '137', 1),
(138, NULL, 'YOUGOSLAVIE', NULL, '138', 1),
(139, NULL, 'ZAMBIE', NULL, '139', 1),
(140, NULL, 'ZIMBABWE', NULL, '140', 1),
(141, NULL, 'COTE D\'IVOIRE', NULL, '141', 1),
(143, NULL, 'INDE', NULL, '143', 1),
(144, NULL, 'USA', NULL, '144', 1),
(154, NULL, 'PANAFRICAIN', NULL, '154', 1),
(155, NULL, 'FRANCE', NULL, '155', 1),
(156, NULL, 'BENIN', NULL, '156', 1),
(157, NULL, 'SENEGAL', NULL, '157', 1),
(158, NULL, 'MAROC', NULL, '158', 1),
(160, NULL, 'GABON', NULL, '160', 1),
(161, NULL, 'ETHIOPIE', NULL, '161', 1),
(162, NULL, 'SUISSE', NULL, '162', 1),
(163, NULL, 'TUNISIE', NULL, '163', 1),
(165, NULL, 'ANGLETERRE', NULL, '165', 1),
(166, NULL, 'TOGO', NULL, '166', 1),
(167, NULL, 'GUINEE', NULL, '167', 1),
(168, NULL, 'MAURITANIE', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `secteur_activites`
--

CREATE TABLE `secteur_activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `secteur_activites`
--

INSERT INTO `secteur_activites` (`id`, `libelle`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Agroalimentaire', '', NULL, NULL),
(2, 'Banque / Assurance', '', NULL, NULL),
(3, 'Bois / Papier / Carton / Imprimerie', '', NULL, NULL),
(4, 'BTP / Matériaux de construction', '', NULL, NULL),
(5, 'Chimie / Parachimie', '', NULL, NULL),
(6, 'Commerce / Négoce / Distribution', '', NULL, NULL),
(7, 'Édition / Communication / Multimédia', '', NULL, NULL),
(8, 'Électronique / Électricité', '', NULL, NULL),
(9, 'Études et conseils', '', NULL, NULL),
(10, 'Industrie pharmaceutique', '', NULL, NULL),
(11, 'Informatique / Télécoms', '', NULL, NULL),
(12, 'Machines et équipements / Automobile', '', NULL, NULL),
(13, 'Métallurgie / Travail du métal', '', NULL, NULL),
(14, 'Plastique / Caoutchouc', '', NULL, NULL),
(15, 'Services aux entreprises', '', NULL, NULL),
(16, 'Textile / Habillement / Chaussure', '', NULL, NULL),
(17, 'Transports / Logistique', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Index pour les tables déchargées
--

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entreprises_secteuractivite_id_foreign` (`secteuractivite_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participants_secteuractivite_id_foreign` (`secteuractivite_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_unique` (`code`);

--
-- Index pour la table `secteur_activites`
--
ALTER TABLE `secteur_activites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT pour la table `secteur_activites`
--
ALTER TABLE `secteur_activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD CONSTRAINT `entreprises_secteuractivite_id_foreign` FOREIGN KEY (`secteuractivite_id`) REFERENCES `secteur_activites` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_secteuractivite_id_foreign` FOREIGN KEY (`secteuractivite_id`) REFERENCES `secteur_activites` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
