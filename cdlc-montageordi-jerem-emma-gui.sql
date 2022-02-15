-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 15 fév. 2022 à 10:03
-- Version du serveur : 8.0.26
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cdlc-montageordi-jerem-emma-gui`
--

-- --------------------------------------------------------

--
-- Structure de la table `alimentation`
--

CREATE TABLE `alimentation` (
  `Id_Composant` int NOT NULL,
  `puissance` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `carte_graphique`
--

CREATE TABLE `carte_graphique` (
  `Id_Composant` int NOT NULL,
  `chipset` varchar(50) DEFAULT NULL,
  `mémoire` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `carte_mère`
--

CREATE TABLE `carte_mère` (
  `Id_Composant` int NOT NULL,
  `Socket___chipset` varchar(50) DEFAULT NULL,
  `format` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `clavier`
--

CREATE TABLE `clavier` (
  `Id_Composant` int NOT NULL,
  `sans_fil_` tinyint(1) DEFAULT NULL,
  `paveNumérique` tinyint(1) DEFAULT NULL,
  `typeTouche` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `Id_Commentaires` int NOT NULL,
  `datecommentaire` datetime DEFAULT NULL,
  `contenu` varchar(500) DEFAULT NULL,
  `Id_Employe` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `composant`
--

CREATE TABLE `composant` (
  `Id_Composant` int NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `prix` decimal(15,2) DEFAULT NULL,
  `nb` int DEFAULT NULL,
  `categorie` varchar(50) DEFAULT NULL,
  `archive` tinyint(1) DEFAULT NULL,
  `quantite` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `concepteur`
--

CREATE TABLE `concepteur` (
  `Id_Employe` int NOT NULL,
  `estconcepteur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

CREATE TABLE `concerner` (
  `Id_Modele` int NOT NULL,
  `Id_Commentaires` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `concevoir`
--

CREATE TABLE `concevoir` (
  `Id_Employe` int NOT NULL,
  `Id_Modele` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `disque_dur`
--

CREATE TABLE `disque_dur` (
  `Id_Composant` int NOT NULL,
  `SSD` tinyint(1) DEFAULT NULL,
  `capacite` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `employé`
--

CREATE TABLE `employé` (
  `Id_Employe` int NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prénom` varchar(50) DEFAULT NULL,
  `identifiant` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `integrer`
--

CREATE TABLE `integrer` (
  `Id_Modele` int NOT NULL,
  `Id_Composant` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `libelle`
--

CREATE TABLE `libelle` (
  `Id_libelle` int NOT NULL,
  `type_erreur` tinyint(1) DEFAULT NULL,
  `type_reconditionnement` tinyint(1) DEFAULT NULL,
  `type_restock` varchar(50) DEFAULT NULL,
  `type_modele` varchar(50) DEFAULT NULL,
  `type_maintenance` tinyint(1) DEFAULT NULL,
  `Id_Commentaires` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `Id_Modele` int NOT NULL,
  `quantite` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `dateajout` date DEFAULT NULL,
  `nb` int DEFAULT NULL,
  `estportable` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `monter`
--

CREATE TABLE `monter` (
  `Id_Employe` int NOT NULL,
  `Id_Modele` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `monteur`
--

CREATE TABLE `monteur` (
  `Id_Employe` int NOT NULL,
  `est_monteur` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `mémoire_vive`
--

CREATE TABLE `mémoire_vive` (
  `Id_Composant` int NOT NULL,
  `capacite` decimal(15,2) DEFAULT NULL,
  `type___frequence___norme_memoire_` varchar(50) DEFAULT NULL,
  `nombre_de_barettes_` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `processeur`
--

CREATE TABLE `processeur` (
  `Id_Composant` int NOT NULL,
  `frequenceCPU` decimal(15,3) DEFAULT NULL,
  `nombre_de_coeurs_` tinyint DEFAULT NULL,
  `chipset_compatible` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `souris`
--

CREATE TABLE `souris` (
  `Id_Composant` int NOT NULL,
  `filaire` tinyint(1) DEFAULT NULL,
  `nombre_de_touche` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `Id_Stock` int NOT NULL,
  `modifier` int DEFAULT NULL,
  `entree` int DEFAULT NULL,
  `sortie` int DEFAULT NULL,
  `Id_Composant` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `écran_`
--

CREATE TABLE `écran_` (
  `Id_Composant` int NOT NULL,
  `Taille_de_la_diagonale_` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alimentation`
--
ALTER TABLE `alimentation`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- Index pour la table `carte_graphique`
--
ALTER TABLE `carte_graphique`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- Index pour la table `carte_mère`
--
ALTER TABLE `carte_mère`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- Index pour la table `clavier`
--
ALTER TABLE `clavier`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`Id_Commentaires`),
  ADD KEY `Id_Employe` (`Id_Employe`);

--
-- Index pour la table `composant`
--
ALTER TABLE `composant`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- Index pour la table `concepteur`
--
ALTER TABLE `concepteur`
  ADD PRIMARY KEY (`Id_Employe`);

--
-- Index pour la table `concerner`
--
ALTER TABLE `concerner`
  ADD PRIMARY KEY (`Id_Modele`,`Id_Commentaires`),
  ADD KEY `Id_Commentaires` (`Id_Commentaires`);

--
-- Index pour la table `concevoir`
--
ALTER TABLE `concevoir`
  ADD PRIMARY KEY (`Id_Employe`,`Id_Modele`),
  ADD KEY `Id_Modele` (`Id_Modele`);

--
-- Index pour la table `disque_dur`
--
ALTER TABLE `disque_dur`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- Index pour la table `employé`
--
ALTER TABLE `employé`
  ADD PRIMARY KEY (`Id_Employe`);

--
-- Index pour la table `integrer`
--
ALTER TABLE `integrer`
  ADD PRIMARY KEY (`Id_Modele`,`Id_Composant`),
  ADD KEY `Id_Composant` (`Id_Composant`);

--
-- Index pour la table `libelle`
--
ALTER TABLE `libelle`
  ADD PRIMARY KEY (`Id_libelle`),
  ADD KEY `Id_Commentaires` (`Id_Commentaires`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`Id_Modele`);

--
-- Index pour la table `monter`
--
ALTER TABLE `monter`
  ADD PRIMARY KEY (`Id_Employe`,`Id_Modele`),
  ADD KEY `Id_Modele` (`Id_Modele`);

--
-- Index pour la table `monteur`
--
ALTER TABLE `monteur`
  ADD PRIMARY KEY (`Id_Employe`);

--
-- Index pour la table `mémoire_vive`
--
ALTER TABLE `mémoire_vive`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- Index pour la table `processeur`
--
ALTER TABLE `processeur`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- Index pour la table `souris`
--
ALTER TABLE `souris`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Id_Stock`),
  ADD KEY `Id_Composant` (`Id_Composant`);

--
-- Index pour la table `écran_`
--
ALTER TABLE `écran_`
  ADD PRIMARY KEY (`Id_Composant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `Id_Commentaires` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `composant`
--
ALTER TABLE `composant`
  MODIFY `Id_Composant` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `employé`
--
ALTER TABLE `employé`
  MODIFY `Id_Employe` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `libelle`
--
ALTER TABLE `libelle`
  MODIFY `Id_libelle` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `Id_Modele` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `Id_Stock` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alimentation`
--
ALTER TABLE `alimentation`
  ADD CONSTRAINT `alimentation_ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `carte_graphique`
--
ALTER TABLE `carte_graphique`
  ADD CONSTRAINT `carte_graphique_ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `carte_mère`
--
ALTER TABLE `carte_mère`
  ADD CONSTRAINT `carte_mère_ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `clavier`
--
ALTER TABLE `clavier`
  ADD CONSTRAINT `clavier_ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`Id_Employe`) REFERENCES `employé` (`Id_Employe`);

--
-- Contraintes pour la table `concepteur`
--
ALTER TABLE `concepteur`
  ADD CONSTRAINT `concepteur_ibfk_1` FOREIGN KEY (`Id_Employe`) REFERENCES `employé` (`Id_Employe`);

--
-- Contraintes pour la table `concerner`
--
ALTER TABLE `concerner`
  ADD CONSTRAINT `concerner_ibfk_1` FOREIGN KEY (`Id_Modele`) REFERENCES `modele` (`Id_Modele`),
  ADD CONSTRAINT `concerner_ibfk_2` FOREIGN KEY (`Id_Commentaires`) REFERENCES `commentaires` (`Id_Commentaires`);

--
-- Contraintes pour la table `concevoir`
--
ALTER TABLE `concevoir`
  ADD CONSTRAINT `concevoir_ibfk_1` FOREIGN KEY (`Id_Employe`) REFERENCES `concepteur` (`Id_Employe`),
  ADD CONSTRAINT `concevoir_ibfk_2` FOREIGN KEY (`Id_Modele`) REFERENCES `modele` (`Id_Modele`);

--
-- Contraintes pour la table `disque_dur`
--
ALTER TABLE `disque_dur`
  ADD CONSTRAINT `disque_dur_ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `integrer`
--
ALTER TABLE `integrer`
  ADD CONSTRAINT `integrer_ibfk_1` FOREIGN KEY (`Id_Modele`) REFERENCES `modele` (`Id_Modele`),
  ADD CONSTRAINT `integrer_ibfk_2` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `libelle`
--
ALTER TABLE `libelle`
  ADD CONSTRAINT `libelle_ibfk_1` FOREIGN KEY (`Id_Commentaires`) REFERENCES `commentaires` (`Id_Commentaires`);

--
-- Contraintes pour la table `monter`
--
ALTER TABLE `monter`
  ADD CONSTRAINT `monter_ibfk_1` FOREIGN KEY (`Id_Employe`) REFERENCES `monteur` (`Id_Employe`),
  ADD CONSTRAINT `monter_ibfk_2` FOREIGN KEY (`Id_Modele`) REFERENCES `modele` (`Id_Modele`);

--
-- Contraintes pour la table `monteur`
--
ALTER TABLE `monteur`
  ADD CONSTRAINT `monteur_ibfk_1` FOREIGN KEY (`Id_Employe`) REFERENCES `employé` (`Id_Employe`);

--
-- Contraintes pour la table `mémoire_vive`
--
ALTER TABLE `mémoire_vive`
  ADD CONSTRAINT `mémoire_vive_ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `processeur`
--
ALTER TABLE `processeur`
  ADD CONSTRAINT `processeur_ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `souris`
--
ALTER TABLE `souris`
  ADD CONSTRAINT `souris_ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);

--
-- Contraintes pour la table `écran_`
--
ALTER TABLE `écran_`
  ADD CONSTRAINT `écran__ibfk_1` FOREIGN KEY (`Id_Composant`) REFERENCES `composant` (`Id_Composant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
