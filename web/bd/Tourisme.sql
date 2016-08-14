-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 13 Août 2016 à 23:24
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Tourisme`
--

-- --------------------------------------------------------

--
-- Structure de la table `Affiche`
--

CREATE TABLE `Affiche` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `paneau_id` int(11) DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Commentaire`
--

CREATE TABLE `Commentaire` (
  `id` int(11) NOT NULL,
  `affiche_id` int(11) DEFAULT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Image`
--

CREATE TABLE `Image` (
  `id` int(11) NOT NULL,
  `affiche_id` int(11) DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Like`
--

CREATE TABLE `Like` (
  `id` int(11) NOT NULL,
  `affiche_id` int(11) DEFAULT NULL,
  `nombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Menu`
--

CREATE TABLE `Menu` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menuPere_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Menu`
--

INSERT INTO `Menu` (`id`, `titre`, `route`, `menuPere_id`) VALUES
(1, 'Venez Découvrir', 'index', NULL),
(2, 'Vous Déplacer', 'gg', NULL),
(3, 'Visite Guidée', 'vrevr', NULL),
(4, 'Séjourner', 'xqx', NULL),
(5, 'Obtenez', 'qx', NULL),
(6, 'A Propos', 'q', NULL),
(7, 'Des Parcs', 'xq', 1),
(8, 'Des Musés', 'xq', 1),
(9, 'Des Barages', 'xq', 1),
(10, 'Les Chefferies', 'xq', 1),
(11, 'Les Coutumes et Habitas', 'xq', 1),
(12, 'Autres', 'xq', 1),
(13, 'Voyager Par Vol', 'xq', 2),
(14, 'Voyager Par Bus de Transport', 'xq', 2),
(15, 'Autres', 'xq', 2),
(16, 'Assistance en Ligne', 'xq', 3),
(17, 'Assistance Physique', 'xq', 3),
(18, 'Assistance Par Carte', 'xq', 3),
(19, 'Localiser', 'xq', 3),
(20, 'Autres', 'xq', 3),
(21, 'Hébergement', 'xq', 4),
(22, 'Restauration', 'xq', 4),
(24, 'Points de Reccueils', 'x', 4),
(25, 'Nos Tarifs', 'q', 4),
(26, 'Autres', 'xs', 4),
(27, 'Des Réductions', 'c', 5),
(28, 'Séjours Gratuits', 'c', 5),
(29, 'Assistances Gratiutes', 'q', 5),
(30, 'Voyages Gratuit', 'q', 5),
(31, 'Autres', 's', 5),
(32, 'Qui Sommes-Nous?', 's', 6),
(33, 'Nous Rejoindre?', 'x', 6),
(34, 'Faites une Suggestion!', 'z', 6),
(35, 'Autres', 's', 6),
(36, 'Voyager Par Vol', 'xq', 2);

-- --------------------------------------------------------

--
-- Structure de la table `Paneau`
--

CREATE TABLE `Paneau` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Affiche`
--
ALTER TABLE `Affiche`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2B8C76913DA5256D` (`image_id`),
  ADD KEY `IDX_2B8C7691E8E8CC7E` (`paneau_id`);

--
-- Index pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E16CE76B48A60577` (`affiche_id`);

--
-- Index pour la table `Image`
--
ALTER TABLE `Image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4FC2B5B48A60577` (`affiche_id`);

--
-- Index pour la table `Like`
--
ALTER TABLE `Like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C51EF8D48A60577` (`affiche_id`);

--
-- Index pour la table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DD3795ADDA1EBFC7` (`menuPere_id`);

--
-- Index pour la table `Paneau`
--
ALTER TABLE `Paneau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Affiche`
--
ALTER TABLE `Affiche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Image`
--
ALTER TABLE `Image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Like`
--
ALTER TABLE `Like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `Paneau`
--
ALTER TABLE `Paneau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Affiche`
--
ALTER TABLE `Affiche`
  ADD CONSTRAINT `FK_2B8C76913DA5256D` FOREIGN KEY (`image_id`) REFERENCES `Image` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2B8C7691E8E8CC7E` FOREIGN KEY (`paneau_id`) REFERENCES `Paneau` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD CONSTRAINT `FK_E16CE76B48A60577` FOREIGN KEY (`affiche_id`) REFERENCES `Affiche` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Image`
--
ALTER TABLE `Image`
  ADD CONSTRAINT `FK_4FC2B5B48A60577` FOREIGN KEY (`affiche_id`) REFERENCES `Affiche` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Like`
--
ALTER TABLE `Like`
  ADD CONSTRAINT `FK_C51EF8D48A60577` FOREIGN KEY (`affiche_id`) REFERENCES `Affiche` (`id`);

--
-- Contraintes pour la table `Menu`
--
ALTER TABLE `Menu`
  ADD CONSTRAINT `FK_DD3795ADDA1EBFC7` FOREIGN KEY (`menuPere_id`) REFERENCES `Menu` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
