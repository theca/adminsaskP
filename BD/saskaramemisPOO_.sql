-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mar 22 Novembre 2016 à 10:14
-- Version du serveur :  5.5.50-MariaDB
-- Version de PHP :  5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `saskaramemisPOO_`
--

-- --------------------------------------------------------

--
-- Structure de la table `Chantier`
--

CREATE TABLE `Chantier` (
  `ID_chantier` int(10) NOT NULL,
  `Nom_chantier` varchar(255) NOT NULL,
  `Date_debut` date DEFAULT NULL,
  `Date_fin` date DEFAULT NULL,
  `FK_decision` int(10) UNSIGNED NOT NULL,
  `Date_inscription` date NOT NULL,
  `Numero_lot_01` int(10) DEFAULT NULL,
  `Numero_lot_02` int(10) DEFAULT NULL,
  `Numero_lot_03` int(10) DEFAULT NULL,
  `Lot_01` varchar(255) DEFAULT NULL,
  `Lot_02` varchar(255) DEFAULT NULL,
  `Lot_03` varchar(255) DEFAULT NULL,
  `FK_client` int(10) UNSIGNED NOT NULL,
  `FK_service` int(10) UNSIGNED NOT NULL,
  `FK_membres` int(10) UNSIGNED NOT NULL,
  `Date_de_remise` date NOT NULL,
  `Prix_lot_01` decimal(20,0) DEFAULT NULL,
  `Prix_lot_02` decimal(20,0) DEFAULT NULL,
  `Prix_lot_03` decimal(20,0) DEFAULT NULL,
  `FK_Decision_Lot_01` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `FK_Decision_Lot_02` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `FK_Decision_Lot_03` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Chantier`
--

INSERT INTO `Chantier` (`ID_chantier`, `Nom_chantier`, `Date_debut`, `Date_fin`, `FK_decision`, `Date_inscription`, `Numero_lot_01`, `Numero_lot_02`, `Numero_lot_03`, `Lot_01`, `Lot_02`, `Lot_03`, `FK_client`, `FK_service`, `FK_membres`, `Date_de_remise`, `Prix_lot_01`, `Prix_lot_02`, `Prix_lot_03`, `FK_Decision_Lot_01`, `FK_Decision_Lot_02`, `FK_Decision_Lot_03`) VALUES
(35, 'Transformation de l\'ancienne école en Mairie', NULL, NULL, 1, '2016-10-03', NULL, 5, NULL, NULL, 'Plâtrerie - Plafonds', NULL, 2, 4, 1, '2016-10-04', '0', '0', '0', 1, 1, 1),
(40, 'Mise en conformité incendie et accéssibilité PMR du musée des Beaux-Arts à Mulhouse', NULL, NULL, 1, '2016-10-04', NULL, 2, NULL, NULL, 'Plâtrerie - Faux-Plafonds', NULL, 3, 5, 1, '2016-10-05', '0', '0', '0', 1, 1, 1),
(41, 'Rénovation du gymnase Schoenacker', NULL, NULL, 1, '2016-10-04', 2, 4, NULL, 'Démolition - Gros-Oeuvre', 'Plâtrerie', NULL, 3, 5, 1, '2016-10-05', '0', '0', '0', 1, 1, 1),
(42, 'Restructuration et extension du multi-accueil L\'Eglantine à Riedisheim', NULL, NULL, 1, '2016-10-10', 2, 6, NULL, 'Gros-oeuvre', 'Plâtrerie', NULL, 4, 7, 1, '2016-10-13', '0', '0', '0', 1, 1, 1),
(81, 'Réaménagement de l\'office du tourisme du Pays de Brisach et création d\'une extension', NULL, NULL, 1, '2016-10-11', 1, 7, NULL, 'Gros-oeuvre', 'Plâtrerie', NULL, 6, 10, 1, '2016-10-17', '0', '0', '0', 1, 1, 1),
(97, 'Restructuration  du siège de la communauté de communes du Pays de Brisach', NULL, NULL, 3, '2016-10-23', 1, 6, NULL, 'Gros-oeuvre', 'Plâtrerie - Faux Plafonds', NULL, 6, 10, 1, '2016-10-25', '0', '0', '0', 1, 1, 1),
(119, 'Mise en accessibilité de la Mairie de Katzenthal', NULL, NULL, 1, '2016-10-23', 3, NULL, NULL, 'Plâtrerie - Isolation', NULL, NULL, 14, 18, 1, '2016-10-26', '0', '0', '0', 1, 1, 1),
(125, 'Rénovation du foyer Don Bosco', NULL, NULL, 1, '2016-10-28', 1, NULL, NULL, 'Gros-oeuvre', NULL, NULL, 3, 19, 1, '2016-11-16', '0', '0', '0', 1, 1, 1),
(133, 'Marchés de travaux pour la restructuration du bâtiment A du centre des finances publiques à Alkirch (68130)', NULL, NULL, 1, '2016-11-03', 2, 5, NULL, 'Gros-oeuvre / Démolition', 'Cloisons - Isolation - Peinture', NULL, 15, 21, 1, '2016-11-14', '0', '0', '0', 1, 1, 1),
(134, 'mise en accessibilité et réhabilitation partielle du bâtiment du stade municipal d\'Ottmarsheim', NULL, NULL, 1, '2016-11-17', 1, 3, NULL, 'Démolition - Purge - Maçonnerie - VRD', 'Plâtrerie - Isolation', NULL, 16, 22, 1, '2016-11-18', '0', '0', '0', 1, 1, 1),
(136, 'Mise en conformité PMR des escaliers et paliers du parvis à l\'Eglise St-Etienne', NULL, NULL, 1, '2016-11-17', 0, NULL, NULL, 'Unique', NULL, NULL, 3, 23, 1, '2016-11-24', '0', '0', '0', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `ID_client` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Adresse` text NOT NULL,
  `Code_postal` int(10) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `FK_membres` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Client`
--

INSERT INTO `Client` (`ID_client`, `Nom`, `Adresse`, `Code_postal`, `Ville`, `FK_membres`) VALUES
(2, 'Commune de Michelbach Le Haut', '3, rue de l\'Ecole', 68220, 'Michelbach Le Haut', 1),
(3, 'Ville de mulhouse', '2 rue Pierre et Marie Curie', 68948, 'Mulhouse', 1),
(4, 'Mulhouse Alsace Agglomération', '2, rue Pierre et Marie Curie', 68948, 'Mulhouse Cedex 9', 1),
(5, 'Conseil départemental du Haut-Rhin ', '100, avenue d\'Alsace\r\nBP 20351', 68006, 'COLMAR Cedex', 1),
(6, 'Pays de Brisach Communauté de commune', '16, rue de Neuf-Brisach \r\nBP 20045', 68600, 'VOLGELSHEIM', 1),
(14, 'Commune de Katzenthal', '1, Place de l\'Ecole', 68230, 'KATZENTHAL', 1),
(15, 'Ministère de l\'économie et des finances publiques Direction générales des Finances publiques', '70, Allée de Bercy -Teledoc 866', 75572, 'Paris Cedex', 1),
(16, 'Commune d\'Ottmarsheim', '20, rue du Général de Gaulle', 68490, 'OTTMARSHEIM', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Decision`
--

CREATE TABLE `Decision` (
  `ID_decision` int(10) UNSIGNED NOT NULL,
  `decision` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Decision`
--

INSERT INTO `Decision` (`ID_decision`, `decision`) VALUES
(1, 'En attente'),
(2, 'Accepter'),
(3, 'Rejeter');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `ID_membres` int(10) UNSIGNED NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`ID_membres`, `nom_utilisateur`, `mot_de_passe`) VALUES
(1, 'emrah', 'f17619f2eb855d943347eb0ec429156f');

-- --------------------------------------------------------

--
-- Structure de la table `Service`
--

CREATE TABLE `Service` (
  `ID_service` int(10) UNSIGNED NOT NULL,
  `Description` varchar(255) NOT NULL,
  `FK_client` int(10) UNSIGNED NOT NULL,
  `FK_membres` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Service`
--

INSERT INTO `Service` (`ID_service`, `Description`, `FK_client`, `FK_membres`) VALUES
(3, 'Sans service', 2, 1),
(4, 'Mairie', 2, 1),
(5, 'Sans service', 3, 1),
(6, 'Sans service', 4, 1),
(7, 'Pôle Education et Enfance', 4, 1),
(8, 'Sans service', 5, 1),
(9, 'Direction de l\'immobilier et de la logistique sous direction de l\'immobilier Service étude et travaux bâtiments', 5, 1),
(10, 'Sans service', 6, 1),
(18, 'Sans service', 14, 1),
(19, 'Architecture', 3, 1),
(20, 'Sans service', 15, 1),
(21, 'Service Stratégie, Pilotage, Budget Sous direction du budget de l\'achat et de l\'immobilier', 15, 1),
(22, 'Sans service', 16, 1),
(23, 'Pôle Performances Énergétiques et Bâtiments - Architecture ', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur`
--

CREATE TABLE `t_utilisateur` (
  `UTIL_ID` int(11) NOT NULL,
  `UTIL_LOGIN` varchar(100) NOT NULL,
  `UTIL_MDP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_utilisateur`
--

INSERT INTO `t_utilisateur` (`UTIL_ID`, `UTIL_LOGIN`, `UTIL_MDP`) VALUES
(1, 'admin', 'secret');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Chantier`
--
ALTER TABLE `Chantier`
  ADD PRIMARY KEY (`ID_chantier`),
  ADD KEY `FK_decision` (`FK_decision`),
  ADD KEY `FK_client` (`FK_client`),
  ADD KEY `FK_service` (`FK_service`),
  ADD KEY `FK_membres` (`FK_membres`),
  ADD KEY `FK_Decision_Lot_01` (`FK_Decision_Lot_01`),
  ADD KEY `FK_Decision_Lot_02` (`FK_Decision_Lot_02`),
  ADD KEY `FK_Decision_Lot_03` (`FK_Decision_Lot_03`);

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`ID_client`),
  ADD KEY `FK_membres` (`FK_membres`);

--
-- Index pour la table `Decision`
--
ALTER TABLE `Decision`
  ADD PRIMARY KEY (`ID_decision`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`ID_membres`);

--
-- Index pour la table `Service`
--
ALTER TABLE `Service`
  ADD PRIMARY KEY (`ID_service`),
  ADD KEY `FK_client` (`FK_client`),
  ADD KEY `FK_membres` (`FK_membres`);

--
-- Index pour la table `t_utilisateur`
--
ALTER TABLE `t_utilisateur`
  ADD PRIMARY KEY (`UTIL_ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Chantier`
--
ALTER TABLE `Chantier`
  MODIFY `ID_chantier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT pour la table `Client`
--
ALTER TABLE `Client`
  MODIFY `ID_client` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `Decision`
--
ALTER TABLE `Decision`
  MODIFY `ID_decision` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `ID_membres` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Service`
--
ALTER TABLE `Service`
  MODIFY `ID_service` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `t_utilisateur`
--
ALTER TABLE `t_utilisateur`
  MODIFY `UTIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Chantier`
--
ALTER TABLE `Chantier`
  ADD CONSTRAINT `FK_Decision_Lot_03` FOREIGN KEY (`FK_Decision_Lot_03`) REFERENCES `Decision` (`ID_decision`),
  ADD CONSTRAINT `Client` FOREIGN KEY (`FK_client`) REFERENCES `Client` (`ID_client`),
  ADD CONSTRAINT `Decision` FOREIGN KEY (`FK_decision`) REFERENCES `Decision` (`ID_decision`),
  ADD CONSTRAINT `FK_Decision_Lot_01` FOREIGN KEY (`FK_Decision_Lot_01`) REFERENCES `Decision` (`ID_decision`),
  ADD CONSTRAINT `FK_Decision_Lot_02` FOREIGN KEY (`FK_Decision_Lot_02`) REFERENCES `Decision` (`ID_decision`),
  ADD CONSTRAINT `Membre` FOREIGN KEY (`FK_membres`) REFERENCES `membres` (`ID_membres`),
  ADD CONSTRAINT `Service` FOREIGN KEY (`FK_service`) REFERENCES `Service` (`ID_service`);

--
-- Contraintes pour la table `Client`
--
ALTER TABLE `Client`
  ADD CONSTRAINT `FK_membres` FOREIGN KEY (`FK_membres`) REFERENCES `membres` (`ID_membres`);

--
-- Contraintes pour la table `Service`
--
ALTER TABLE `Service`
  ADD CONSTRAINT `Client_service` FOREIGN KEY (`FK_client`) REFERENCES `Client` (`ID_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_membre` FOREIGN KEY (`FK_membres`) REFERENCES `membres` (`ID_membres`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
