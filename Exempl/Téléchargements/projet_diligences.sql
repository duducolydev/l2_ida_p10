-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 mai 2025 à 15:00
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `intranet`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet_diligences`
--

CREATE TABLE `projet_diligences` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `projet` varchar(255) DEFAULT NULL,
  `statut` enum('En cours','Non entamée','En retard','Terminée','Non entamée') NOT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projet_diligences`
--

INSERT INTO `projet_diligences` (`id`, `libelle`, `date_debut`, `date_fin`, `responsable`, `projet`, `statut`, `created_by`) VALUES
(20, 'GGGGGGGGGGG', '2025-04-21', '2025-05-16', 'Oumou Kalsoum DIOP', 'ENDES', 'En cours', 3),
(22, 'Test', '2025-04-12', '2025-05-10', 'Abdou GNING', 'ENDES', 'En cours', 3),
(438, 'dfghh', '2025-04-23', '2025-04-30', 'Cheikh Souleymane BADIANE', 'ENDES', 'En retard', 3),
(439, 'zzzzzzzzzzzzzzzzzzzzzz', '2025-05-10', '2025-06-15', 'Mintou YADE', 'PROJET TEST 1', 'Non entamée', 3),
(441, 'MMMMMMMMMMMMMM', '2025-04-02', '2025-05-08', 'Fatoumata SAMB', 'Projet omega', 'En cours', 3),
(442, 'BBBBBBBBBBBBBBBB', '2025-05-02', '2025-05-10', 'Doudou COLY', '', 'En cours', 3),
(444, 'ESSAI', '2025-05-08', '2025-05-16', 'Mansour Kama SANE', '', 'Non entamée', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet_diligences`
--
ALTER TABLE `projet_diligences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet_diligences`
--
ALTER TABLE `projet_diligences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
