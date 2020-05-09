-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 09 mai 2020 à 02:04
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `davy_admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `davy_messages`
--

CREATE TABLE `davy_messages` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `sujet` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `davy_messages`
--

INSERT INTO `davy_messages` (`id`, `nom`, `mail`, `sujet`, `message`) VALUES
(1, 'nom', 'mail@mail.com', 'sujet', 'message');

-- --------------------------------------------------------

--
-- Structure de la table `davy_produits`
--

CREATE TABLE `davy_produits` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `origine` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `poids` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `davy_produits`
--

INSERT INTO `davy_produits` (`id`, `nom`, `photo`, `description`, `prix`, `categorie`, `origine`, `date`, `poids`) VALUES
(1, 'Kiwi vert pièce Calibre 36 Bio', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/k/i/kiwi.4-0000.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 0.79, 'fruit', 'france', '2020-04-14', 125),
(2, 'Myrtille barguette 125G Bio', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/m/y/myrtille-0003.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 2.99, 'fruit', 'france', '2020-04-14', 125),
(3, 'Brocoli 500G Bio', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/b/r/brocoli-0000.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 1.99, 'légume', 'france', '2020-04-14', 500),
(4, 'Banane - Lot de 5 fruits Bio ', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/6/6/6608.1-0001.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 1.99, 'fruit', 'france', '2020-04-14', 500),
(5, 'Kumquat 250G Bio', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/k/u/kumquats-0000.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 0.79, 'fruit', 'france', '2020-04-14', 250),
(6, 'Orange de table x4 pièce Bio ', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/o/r/orange_navel-0003.png', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 2.99, 'fruit', 'france', '2020-04-14', 125),
(7, 'Pomme Golden AOP Limousin Bio - Lot de 4', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/p/o/pomme_golden.2.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 1.99, 'fruit', 'france', '2020-04-14', 500),
(8, 'Ananas Extra Sweet Pièce Cal 10 Bio ', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/a/n/ananas-0002.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 1.99, 'fruit', 'france', '2020-04-14', 500),
(9, 'Mangue Osteen pièce CAL 10 Bio ', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/m/a/mangue-0006.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 0.79, 'fruit', 'france', '2020-04-14', 125),
(10, 'Noix de coco fraiche pièce Bio ', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/8/4/8437015393070.p1-0000.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 2.99, 'fruit', 'france', '2020-04-14', 125),
(11, 'Mandarine 500G Bio ', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/c/l/clementine-0004.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 1.99, 'fruit', 'france', '2020-04-14', 500),
(12, 'Amandes entières 250G Bio', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/a/m/amandes-0004.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 1.99, 'fruit', 'france', '2020-04-14', 250),
(13, 'Avocat Hass pièce Calibre 20 Bio ', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/a/v/avocat-0004_1.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 0.79, 'légume', 'france', '2020-04-14', 125),
(14, 'Chou-Fleur Pièce Bio ', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/8/2/8207.1.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 2.99, 'légume', 'france', '2020-04-14', 125),
(15, 'Salade jeunes pousses d\'épinard barquette 125G', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/3/7/3760281780141.1-0000_1.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 1.99, 'légume', 'france', '2020-04-14', 125),
(16, 'Champignon Pleurote 200G Bio ', 'https://naturalia.fr/media/catalog/product/cache/image/368x414/e9c3970ab036de70892d86c6d221abfe/6/7/6712.1-0000.jpg', 'Intentum quidem liberalium huius ultra inopiam ob delatae sese vini: inopiam regebat gnarus avidis oppido efferens haec praefecti sese negotiorum.', 1.99, 'légume', 'france', '2020-04-14', 200);

-- --------------------------------------------------------

--
-- Structure de la table `davy_users`
--

CREATE TABLE `davy_users` (
  `id` bigint(20) NOT NULL,
  `login` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `davy_users`
--

INSERT INTO `davy_users` (`id`, `login`, `password`) VALUES
(1, 'chendavyweb@gmail.com', '$2y$10$DG0S6T0oD9QDBH/vyAI6xu7ADC8uyXx7trDUbfRsoqwmc4SemosVm');

-- --------------------------------------------------------

--
-- Structure de la table `davy_valeurs`
--

CREATE TABLE `davy_valeurs` (
  `id` bigint(20) NOT NULL,
  `contenu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `davy_valeurs`
--

INSERT INTO `davy_valeurs` (`id`, `contenu`) VALUES
(1, '<h1 class=\"font_hotel color_green\" style=\"text-align: center;\">Specie tenus adesset, Antiochensi plebi suppliciter</h1>\r\n<br>\r\n<p style=\"text-align: center;\"><img src=\"https://image.freepik.com/vecteurs-libre/feuilles-vertes-fond-nature-imprimer_1284-5438.jpg\" alt=\"nature\"></p>\r\n<br>\r\n<p style=\"text-align: center;\">Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis, disponi quicquam statuit vel ex provinciis alimenta transferri conterminis, sed consularem Syriae Theophilum prope adstantem ultima metuenti multitudini dedit id adsidue replicando quod invito rectore nullus egere poterit victu.</p>');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `davy_messages`
--
ALTER TABLE `davy_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `davy_produits`
--
ALTER TABLE `davy_produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `davy_users`
--
ALTER TABLE `davy_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `davy_valeurs`
--
ALTER TABLE `davy_valeurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `davy_messages`
--
ALTER TABLE `davy_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `davy_produits`
--
ALTER TABLE `davy_produits`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `davy_users`
--
ALTER TABLE `davy_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `davy_valeurs`
--
ALTER TABLE `davy_valeurs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
