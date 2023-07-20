-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 20 juil. 2023 à 17:58
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `garage_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `commentaire` longtext NOT NULL,
  `publie` date NOT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `commentaire`, `publie`, `note`) VALUES
(3, 'Moreau', 'J\'ai acheté une voiture d\'occasion dans ce garage et je suis très satisfait', '2023-07-03', 4),
(4, 'Simon', 'J\'ai fait réparer ma voiture ici et je suis très content du service. ', '2023-06-21', 5),
(5, 'Bob', 'comment allez vous ?', '2023-07-17', 5),
(6, 'Dupys', 'hello world', '2023-07-17', 5);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `voiture_id` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `vu` tinyint(1) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `voiture_id`, `nom`, `prenom`, `email`, `tel`, `message`, `vu`, `action`) VALUES
(3, 9, 'Doe', 'John', 'john@example.com', '0123456789', 'Je suis intéressé par cette voiture. Pouvez-vous me fournir plus d\'informations ?', 0, ''),
(4, 10, 'Smith', 'Jane', 'jane@example.com', '0987654321', 'J\'ai une question concernant ce modèle. Pouvez-vous me contacter dès que possible ?', 1, 'Archiver'),
(5, 7, 'perrin', 'Suzanne', 'suzanne@exemple.com', '601020304', 'je jfozfn rjfpzjiu ozvorj !!!', NULL, NULL),
(6, 8, 'joss', 'lie', 'jo@exemple.com', '203050709', 'hello', NULL, NULL),
(7, 8, 'joss', 'lie', 'jo@exemple.com', '203050709', 'hello', NULL, NULL),
(8, 8, 'joss', 'lie', 'jo@exemple.com', '203050709', 'hello', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230703170851', '2023-07-03 19:09:00', 165),
('DoctrineMigrations\\Version20230708071207', '2023-07-08 09:13:06', 1137);

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

CREATE TABLE `horaire` (
  `id` int(11) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `fermeture` tinyint(1) NOT NULL,
  `fermeture2` tinyint(1) NOT NULL,
  `debut_am` varchar(255) NOT NULL,
  `fin_am` varchar(255) NOT NULL,
  `debut_pm` varchar(255) NOT NULL,
  `fin_pm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `horaire`
--

INSERT INTO `horaire` (`id`, `jour`, `fermeture`, `fermeture2`, `debut_am`, `fin_am`, `debut_pm`, `fin_pm`) VALUES
(8, 'Lundi', 0, 0, '08h45', '12h00', '14h00', '18h00'),
(9, 'Mardi', 0, 0, '08h45', '12h00', '14h00', '18h00'),
(10, 'Mercredi', 0, 0, '08h45', '12h00', '14h00', '18h00'),
(11, 'Jeudi', 0, 0, '08h45', '12h00', '14h00', '18h00'),
(12, 'Vendredi', 0, 0, '08h45', '12h00', '14h00', '18h00'),
(13, 'Samedi', 0, 1, '08h45', '12h00', '', ''),
(14, 'Dimanche', 1, 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `occasion`
--

CREATE TABLE `occasion` (
  `id` int(11) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `kilometrage` int(11) NOT NULL,
  `places` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `motor` varchar(255) NOT NULL,
  `mise_circulation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `occasion`
--

INSERT INTO `occasion` (`id`, `marque`, `modele`, `prix`, `kilometrage`, `places`, `image`, `image2`, `image3`, `motor`, `mise_circulation`) VALUES
(7, 'Susuki', 'Vitara', 8000, 70700, 4, 'images/vitara.jpg', 'images/vitara2.jpg', 'images/vitara3.jpg', 'Diesel', '30/09/2002'),
(8, 'Renault', 'Clio', 1650, 262000, 5, 'images/clio.jpg', 'images/clio2.jpg', 'images/clio3.jpg', 'Essence', '01/04/1994'),
(9, 'Volkswagen', 'Passat', 20890, 85254, 5, 'images/passat.jpg', 'images/passat2.jpg', 'images/passat3.jpg', 'Diesel', '11/12/2019'),
(10, 'Nissan', 'Navara 2', 3490, 160531, 5, 'images/nissan.jpg', 'images/nissan2.jpg', 'images/nissan3.jpg', 'Diesel', '20/09/2018'),
(11, 'Fiat', 'Uno', 2500, 115000, 5, 'images/fiat.jpg', 'images/fiat2.jpg', 'images/fiat3.jpg', 'Essence', '23/05/1985'),
(12, 'Mini', 'Cooper Sidewalk', 9890, 149285, 4, 'images/mini.jpg', 'images/mini2.jpg', 'images/mini3.jpg', 'Essence', '02/11/2007'),
(21, 'Renault', 'Clio', 1650, 262000, 5, 'images/clio-jpg-64aabff8b210c.jpg', 'images/clio2-jpg-64aabff8b23bb.jpg', 'images/clio3-jpg-64aabff8b25c9.jpg', 'Diesel', '01/04/1994'),
(22, 'Volkswagen', 'Passat', 20890, 85254, 5, 'images/passat-jpg-64aac06913d3f.jpg', 'images/passat2-jpg-64aac06913f9d.jpg', 'images/passat3-jpg-64aac0691420b.jpg', 'Diesel', '11/12/2019'),
(23, 'Vitara', 'Suzuky', 8000, 70700, 4, 'images/vitara-jpg-64aac0c848e3d.jpg', 'images/vitara2-jpg-64aac0c84923e.jpg', 'images/vitara3-jpg-64aac0c849520.jpg', 'Diesel', '30/09/2002'),
(24, 'Nissan', 'Navara2', 23490, 160531, 5, 'images/nissan-jpg-64aac12839a11.jpg', 'images/nissan2-jpg-64aac12839dd9.jpg', 'images/nissan3-jpg-64aac1283a0dd.jpg', 'Diesel', '20/09/2018'),
(25, 'fiat', 'Uno', 2500, 115000, 5, 'images/fiat-jpg-64aac17cc1929.jpg', 'images/fiat2-jpg-64aac17cc1e9a.jpg', 'images/fiat3-jpg-64aac17cc27c1.jpg', 'Essence', '23/02/1985'),
(27, 'Mini', 'Cooper Sidewalk', 9890, 149285, 4, 'images/mini-jpg-64aac56315d77.jpg', 'images/mini2-jpg-64aac563161f8.jpg', 'images/mini3-jpg-64aac563164c7.jpg', 'Essence', '02/11/2007'),
(28, 'BMW', 'Touring', 28490, 92351, 5, 'images/BMW1-jpg-64b2cdcf6281d.jpg', 'images/BMW2-jpg-64b2cdcf62c54.jpg', 'images/BMW3-jpg-64b2cdcf62eb1.jpg', 'Diesel', '18/12/2019'),
(29, 'BMW', 'Touring', 28490, 92351, 5, 'images/BMW1-jpg-64b2ce2e4cf2a.jpg', 'images/BMW2-jpg-64b2ce2e4d214.jpg', 'images/BMW3-jpg-64b2ce2e4d3f9.jpg', 'Diesel', '18/12/2019'),
(30, 'Mercedes', 'CLA 2', 37970, 92000, 5, 'images/Mercedes1-jpg-64b2ce7d24c38.jpg', 'images/Mercedes2-jpg-64b2ce7d24e86.jpg', 'images/Mercedes3-jpg-64b2ce7d25268.jpg', 'Diesel', '20/01/2021'),
(31, 'Land Rover', 'Range River Sport 3', 153990, 539, 5, 'images/RangeRover1-jpg-64b2cee4b6d00.jpg', 'images/RangeRover2-jpg-64b2cee4b7299.jpg', 'images/RangeRover3-jpg-64b2cee4b76d7.jpg', 'Essence', '02/06/2023'),
(32, 'Jeep', 'Compass', 54000, 220730, 5, 'images/Jeep1-jpg-64b2cf3c18c62.jpg', 'images/Jeep2-jpg-64b2cf3c18eb5.jpg', 'images/Jeep3-jpg-64b2cf3c190c8.jpg', 'Diesel', '08/01/2010'),
(33, 'Citroen', 'DS3', 9990, 113569, 5, 'images/Citroen1-jpg-64b2cf80e2aa8.jpg', 'images/Citroen2-jpg-64b2cf80e2e98.jpg', 'images/Citroen3-jpg-64b2cf80e308f.jpg', 'Essence', '14/11/2011'),
(34, 'Volvo', 'X060 2', 50900, 46312, 5, 'images/Volvo1-jpg-64b2cfcb80a29.jpg', 'images/Volvo2-jpg-64b2cfcb80c74.jpg', 'images/Volvo3-jpg-64b2cfcb80e52.jpg', 'Essence', '19/05/2020'),
(35, 'Maserati', 'Grancabrio', 93890, 55890, 4, 'images/Maserati1-jpg-64b2d0526f210.jpg', 'images/Maserati2-jpg-64b2d0526f4ed.jpg', 'images/Maserati3-jpg-64b2d0526f704.jpg', 'Essence', '07/08/2014'),
(36, 'Porche', 'Cabriolet', 119890, 58900, 4, 'images/Porche1-jpg-64b2d0a36e144.jpg', 'images/Porche2-jpg-64b2d0a36e3ce.jpg', 'images/Porche3-jpg-64b2d0a36e623.jpg', 'Essence', '18/07/2016'),
(37, 'Volswagen', 'Combi', 159000, 90000, 4, 'images/combi1-jpg-64b2d0e792818.jpg', 'images/combi2-jpg-64b2d0e792ad2.jpg', 'images/combi3-jpg-64b2d0e792d45.jpg', 'Essence', '12/07/1957'),
(38, 'Rolls Royce', 'Wraith', 254990, 7500, 4, 'images/rollsRoyce1-jpg-64b2d13de0ded.jpg', 'images/rollsRoyce2-jpg-64b2d13de1085.jpg', 'images/rollsRoyce3-jpg-64b2d13de138f.jpg', 'Essence', '04/08/2014');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `logo` varchar(255) NOT NULL,
  `prix_heure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `titre`, `description`, `logo`, `prix_heure`) VALUES
(7, 'Pneus', 'Réparation de pneus rapide et fiable. Tarifs commpétitifs.', 'images/logo/pneuLogo.png', 60),
(8, 'Vidange', 'Nous prenons soin de votre moteur en effectuant une vidange minutieuse.', 'images/logo/vidangeLogo.png', 60),
(9, 'Amortisseurs', 'Optimisez votre confort de conduite avec nos services d\'amortisseurs', 'images/logo/amortisseurLogo.png', 80),
(10, 'Carrosserie', 'No experts compétents redonnent vie à votre carrosserie.', 'images/logo/carrosserieLogo.png', 90),
(11, 'Diagnostics', 'Obtenez un diagnostic précis, pour un retour sur la route.', 'images/logo/diagnostiqueLogo.png', 100),
(12, 'Echappements', 'Optimisez votre échappement auto. Conduite fluide et moteur performant.', 'images/logo/tuyau-dechappementLogo.png', 60);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`) VALUES
(3, 'user1@exemple.com', '[]', '$2y$13$T9Fp0gadDPodsY9o1gI62uknxuOi6Sc92fODj.f4bn/Doe.r1B86i', 'Bernard', 'Antoine'),
(4, 'user2@exemple.com', '[]', '$2y$13$tYjeUp/fN7tnCyruMtvj0uVn/A1/J1XubNLMsji5FKMCR.H6QY7NG', 'Dubois', 'Pierre'),
(5, 'user3@exemple.com', '[]', '$2y$13$IRAgvis9wJqAcAze7j1y.OyE8A0/5/r1N3A.UMW980JZ/Dh1cNMKO', 'Martin', 'Olivier'),
(6, 'user@test.com', '[\"ROLE_ADMIN\"]', '$2y$13$N4B0E.i5f8uv6Bzr2QlmkeeXIhGToudI34GrYJlMKWEvBPt3tGC.i', 'Parrot', 'Vincent'),
(7, 'user4@exemple.com', '[]', 'password102', 'Jack', 'Smith');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4C62E638181A8BA` (`voiture_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `occasion`
--
ALTER TABLE `occasion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `horaire`
--
ALTER TABLE `horaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `occasion`
--
ALTER TABLE `occasion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `FK_4C62E638181A8BA` FOREIGN KEY (`voiture_id`) REFERENCES `occasion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
