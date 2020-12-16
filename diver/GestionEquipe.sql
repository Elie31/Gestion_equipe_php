-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 11 déc. 2020 à 16:54
-- Version du serveur :  10.3.25-MariaDB-0+deb10u1
-- Version de PHP : 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `GestionEquipe`
--

-- --------------------------------------------------------

--
-- Structure de la table `Joueur`
--

CREATE TABLE `Joueur` (
  `numLicence` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `dateNaissance` date NOT NULL,
  `taille` float NOT NULL,
  `poids` float NOT NULL,
  `photo` text NOT NULL,
  `postePref` varchar(20) NOT NULL,
  `etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `MatchVolley`
--

CREATE TABLE `MatchVolley` (
  `id_Match` int(11) NOT NULL,
  `dateM` date NOT NULL,
  `lieuM` varchar(30) NOT NULL,
  `heureM` time NOT NULL,
  `nomTournoi` varchar(50) NOT NULL,
  `nomEquipeAdv` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `SetM`
--

CREATE TABLE `SetM` (
  `numSet` int(11) NOT NULL,
  `matchC` int(11) NOT NULL,
  `scoreLoc` int(11) DEFAULT NULL,
  `scoreAdv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Joueur`
--
ALTER TABLE `Joueur`
  ADD PRIMARY KEY (`numLicence`);

--
-- Index pour la table `MatchVolley`
--
ALTER TABLE `MatchVolley`
  ADD PRIMARY KEY (`id_Match`);

--
-- Index pour la table `SetM`
--
ALTER TABLE `SetM`
  ADD PRIMARY KEY (`numSet`,`matchC`),
  ADD KEY `fk_client_numero` (`matchC`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `MatchVolley`
--
ALTER TABLE `MatchVolley`
  MODIFY `id_Match` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `SetM`
--
ALTER TABLE `SetM`
  MODIFY `numSet` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `SetM`
--
ALTER TABLE `SetM`
  ADD CONSTRAINT `fk_client_numero` FOREIGN KEY (`matchC`) REFERENCES `MatchVolley` (`id_Match`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
