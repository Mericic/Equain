-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Mars 2017 à 20:43
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `equainprod`
--

-- --------------------------------------------------------

--
-- Structure de la table `moniteur`
--

CREATE TABLE `moniteur` (
  `IdMoniteur` int(2) NOT NULL,
  `NomMoniteur` varchar(30) NOT NULL,
  `PrenomMoniteur` varchar(30) NOT NULL,
  `PhotoProfil` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `moniteur`
--

INSERT INTO `moniteur` (`IdMoniteur`, `NomMoniteur`, `PrenomMoniteur`, `PhotoProfil`) VALUES
(1, 'Berthet', 'Sebastien', 'Vue/images/sebastien.png'),
(2, 'Combes', 'Dorine', 'Vue/images/Dorine.png'),
(3, 'Dutronc', 'Morgan', 'Vue/images/Morgan.png'),
(4, 'Boisard', 'Frédéric', 'Vue/images/Frederic.png'),
(5, 'Jal', 'Laurence', 'Vue/images/Laurence.png');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `Galop` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `niveau`
--

INSERT INTO `niveau` (`Galop`) VALUES
('1'),
('1-2'),
('2'),
('2-3'),
('3'),
('3-4'),
('4'),
('4-5'),
('5'),
('5-6'),
('6'),
('6-7'),
('7');

-- --------------------------------------------------------

--
-- Structure de la table `reprises`
--

CREATE TABLE `reprises` (
  `Id` int(3) NOT NULL,
  `Jour` varchar(10) DEFAULT NULL,
  `Heure` time DEFAULT NULL,
  `IdMoniteur` int(3) DEFAULT NULL,
  `Niveau` varchar(30) DEFAULT NULL,
  `NbPlaces` int(3) DEFAULT NULL,
  `PlacesLibres` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reprises`
--

INSERT INTO `reprises` (`Id`, `Jour`, `Heure`, `IdMoniteur`, `Niveau`, `NbPlaces`, `PlacesLibres`) VALUES
(33, 'Vendredi', '18:00:00', 4, '3-4', 8, 3),
(32, 'Mercredi', '08:00:00', 1, '1', 0, 0),
(31, 'Lundi', '10:00:00', 1, '1', 0, 0),
(30, 'Lundi', '08:00:00', 1, '1', 0, 0),
(28, 'Jeudi', '16:00:00', 2, '4-5', 10, 3),
(29, 'Samedi', '09:00:00', 4, '4', 10, 4),
(35, 'Mardi', '09:00:00', 5, '5', 7, 7);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `Id_Ticket` int(5) NOT NULL,
  `Localisation` varchar(30) NOT NULL COMMENT 'Actualite/Accueil-L/Accueil-P/Carousel/',
  `Titre` varchar(60) NOT NULL,
  `Contenu` text NOT NULL,
  `Date_Parution` date DEFAULT NULL,
  `Date_Fin` date DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ticket`
--

INSERT INTO `ticket` (`Id_Ticket`, `Localisation`, `Titre`, `Contenu`, `Date_Parution`, `Date_Fin`, `Image`) VALUES
(1, 'Actualite', 'Stage de Février Cheval', '<p>Obstacle, Hunter, Horse-Ball, Jeux, Dressage, Trek, carroussel en musique</p>\r\n\r\n<p>Journee pour 68&euro; adh&eacute;rent/74&euro; passager</p>\r\n', '2017-03-08', NULL, 'Vue\\images\\Stage_Fevrier_Cheval.jpg'),
(2, 'Actualite', 'Stage de Février Poney', '<p><br />\r\nObstacle, Chasse au tr&eacute;sor dans le Parc de Miribel, Horse-Ball, jeux, Pony Games, Dressage, Carroussel</p>\r\n\r\n<p>Journ&eacute;e 62&euro; Adh&eacute;rent / 68&euro; Passager</p>\r\n', '2017-03-08', NULL, NULL),
(3, 'Carousel', 'Bienvenue sur le site web d\'Equ\'ain!', '', NULL, NULL, 'Vue/images/equain_boxs.jpg'),
(4, 'Carousel', 'Un manège tout neuf', 'Avec du sable de silice, un éclairage refait et arrosage automatique<br/>Peintures en cours de finition', NULL, NULL, 'Vue/images/manegepanoramique.jpg'),
(5, 'Carousel', 'Pas d\'idée pour Noël?', 'Offrez un cours particulier, une balade, un stage!<br/>Réservez dès maintenant, et venez retirer votre Carte Cadeau personnalisée. ', NULL, NULL, 'Vue/images/boules-de-noel.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `Id` int(10) NOT NULL,
  `Login` varchar(60) NOT NULL,
  `Nom` varchar(60) NOT NULL,
  `Prenom` varchar(60) NOT NULL,
  `MotDePasse` varchar(65) NOT NULL,
  `Droits` int(1) NOT NULL DEFAULT '0' COMMENT '0 = utilisateur lambda, 1 = administrateur',
  `Email` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Id`, `Login`, `Nom`, `Prenom`, `MotDePasse`, `Droits`, `Email`) VALUES
(13, 'User', 'User', 'User', '9f8a2389a20ca0752aa9e95093515517e90e194c', 0, 'User@User.fr'),
(11, 'root', 'Root Nom', 'Root Prenom', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1, 'root@root.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `moniteur`
--
ALTER TABLE `moniteur`
  ADD PRIMARY KEY (`IdMoniteur`);

--
-- Index pour la table `reprises`
--
ALTER TABLE `reprises`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Moniteur` (`IdMoniteur`),
  ADD KEY `Niveau` (`Niveau`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Id_Ticket`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `moniteur`
--
ALTER TABLE `moniteur`
  MODIFY `IdMoniteur` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `reprises`
--
ALTER TABLE `reprises`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Id_Ticket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
