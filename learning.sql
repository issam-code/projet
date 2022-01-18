-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 14, 2022 at 03:21 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id_classe` int(11) NOT NULL AUTO_INCREMENT,
  `nom_classe` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_classe`),
  UNIQUE KEY `nom_classe` (`nom_classe`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`id_classe`, `nom_classe`) VALUES
(1, 'IDS'),
(2, 'GI'),
(11, 'ERR'),
(13, 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `class_prof`
--

DROP TABLE IF EXISTS `class_prof`;
CREATE TABLE IF NOT EXISTS `class_prof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_classe` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_GERER_` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `ID_CONV` int(11) NOT NULL,
  `NOM_CONV` text,
  PRIMARY KEY (`ID_CONV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id_cour` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `nom_cour` varchar(30) NOT NULL,
  `matiere` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  `date_cour` date NOT NULL,
  PRIMARY KEY (`id_cour`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`id_cour`, `id_utilisateur`, `id_classe`, `nom_cour`, `matiere`, `file`, `date_cour`) VALUES
(0, 17, 1, 'cou', 'conception', '288-code-g3568d337f_1920.jpg', '2022-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `faire_conv`
--

DROP TABLE IF EXISTS `faire_conv`;
CREATE TABLE IF NOT EXISTS `faire_conv` (
  `ID_ITILISATEUR` int(11) NOT NULL,
  `ID_CONV` int(11) NOT NULL,
  PRIMARY KEY (`ID_ITILISATEUR`,`ID_CONV`),
  KEY `FK_FAIRE` (`ID_CONV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `ID_MSG` int(11) NOT NULL,
  `ID_ITILISATEUR` int(11) NOT NULL,
  `UTI_ID_ITILISATEUR` int(11) NOT NULL,
  `ID_CONV` int(11) NOT NULL,
  `MESSAGE` text,
  `HEURE` time DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`ID_MSG`),
  KEY `FK_CONTENIR1` (`ID_CONV`),
  KEY `FK_ENVOYER` (`ID_ITILISATEUR`),
  KEY `FK_RECEVOIR` (`UTI_ID_ITILISATEUR`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taches`
--

DROP TABLE IF EXISTS `taches`;
CREATE TABLE IF NOT EXISTS `taches` (
  `id_tache` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `nom_tache` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `date_pub` datetime DEFAULT NULL,
  `matiere` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `file_tache` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id_tache`),
  UNIQUE KEY `date_pub` (`date_pub`),
  KEY `FK_AJOUTER` (`id_utilisateur`),
  KEY `FK_VOIR` (`id_classe`)
) ENGINE=MyISAM AUTO_INCREMENT=8785 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taches`
--

INSERT INTO `taches` (`id_tache`, `id_utilisateur`, `id_classe`, `nom_tache`, `description`, `date_pub`, `matiere`, `file_tache`) VALUES
(8780, 17, 1, 'Annonce', 'hellooooo', '2021-01-13 00:11:35', 'conception', ''),
(8782, 1, 0, 'tache', 'hello', '2022-01-14 12:58:47', '', NULL),
(8783, 17, 1, 'tch', 'bonjour', '2022-01-14 15:57:47', 'conception', NULL),
(8784, 17, 1, 'tch3', 'hello', '2022-01-14 15:57:57', 'conception', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mot_pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `prenom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `matiere` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_classe` int(11) DEFAULT NULL,
  `profession` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `mail` (`mail`),
  KEY `FK_CONTENIR` (`id_classe`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `mail`, `mot_pass`, `nom`, `prenom`, `matiere`, `image`, `id_classe`, `profession`) VALUES
(45, 'marouane@gmail.com', '$2y$10$/6z0m1ujlxd0cshnX8nw8O1vdgjWzLYW0Ox260.kZn6I1uErgmuEm', 'RIDOUANE', 'MAROUANE', NULL, 'a.png', 1, 'Etudiant'),
(17, 'idaro@gmail.com', '$2y$10$oBPA5x1/52oLLiUvJ.fmRuh2487iU02zPKf.70i/Pf4OQhslmmJ9W', 'idaro', '123', 'conception', '17.png', 1, 'Professeur'),
(1, 'admin@gmail.com', '$2y$10$NlUb8TukDE/P4XuMtVqUnuZuq1q6PMvsp9yaxvZarbsMeaF5s8DZG', 'Admin', '', NULL, '1.png', NULL, 'Admin'),
(56, 'oumaima@gmail.com', '$2y$10$8NnulJXTTusIxKppEVTpTuWg3DSUAkpKGN.3OTPMh89EG75mm4qk2', 'IDABBOU', 'OUMAIMA', NULL, 'a.png', 2, 'Etudiant'),
(54, 'rachidi@gmail.com', '$2y$10$soQlgjROPiyorX.TpaoY..Kn.WZ6Mz6FRmM.tUT8qA3r2qQkX8p7G', 'rachidi', 'youssef', 'Mysql', 'a.png', 1, 'Professeur'),
(55, 'asimi@gmail.com', '$2y$10$fGZff4XaWuyLD7HGvvegj.5aS6X0V8Fyjx/3iNpxYhB0bB07tHUP2', 'asimi', 'younes', 'securite', 'a.png', 1, 'Professeur'),
(47, 'badr@gmail.com', '$2y$10$oBPA5x1/52oLLiUvJ.fmRuh2487iU02zPKf.70i/Pf4OQhslmmJ9W', 'EZZAKI', 'BADR', NULL, 'a.png', 2, 'Etudiant'),
(49, 'ayoub@gmail.com', '$2y$10$JXKG58AGWQD0cQ004M5ur.mt8NH8KfyQZaU/hksA8W5xGSuVJ.7IC', 'EDDIB', 'AYOUB', NULL, 'a.png', 11, 'Etudiant'),
(57, 'issamm@gmail.com', '$2y$10$.BFH9hd1ilVsBOr28JUbruvQKNZs3bHwb3TFCb6ZfLyHgHed.25Iq', 'el', 'issam', NULL, 'a.png', 1, 'Etudiant'),
(58, 'kh@gmail.com', '$2y$10$.7Qhen892/hmRCvya5a/7uAqiCcnxn1vSusz3K6GO.AIsUEznCO0K', 'kh', 'zebara', NULL, 'a.png', 1, 'Etudiant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
