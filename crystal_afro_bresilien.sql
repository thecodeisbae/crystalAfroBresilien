-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 22 août 2023 à 17:33
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crystal_afro_bresilien`
--

-- --------------------------------------------------------

--
-- Structure de la table `arrondissement`
--

DROP TABLE IF EXISTS `arrondissement`;
CREATE TABLE IF NOT EXISTS `arrondissement` (
  `Codearrondis` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Arrondissement` varchar(20) COLLATE utf8mb4_general_ci DEFAULT '0',
  `Codecommune` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codearrondis` (`Codearrondis`),
  KEY `WDIDX_Arrondissement_Codecommune` (`Codecommune`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `arrondissement`
--

INSERT INTO `arrondissement` (`Codearrondis`, `Arrondissement`, `Codecommune`) VALUES
('A01', 'Togba', 'C01');

-- --------------------------------------------------------

--
-- Structure de la table `bienimmateriel`
--

DROP TABLE IF EXISTS `bienimmateriel`;
CREATE TABLE IF NOT EXISTS `bienimmateriel` (
  `Codebienimmat` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cochebienimmat` tinyint DEFAULT '0',
  `Descriptionbienimmat` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codequalif` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codebienimmat` (`Codebienimmat`),
  KEY `WDIDX_Bienimmateriel_Codequalif` (`Codequalif`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bienimmeuble`
--

DROP TABLE IF EXISTS `bienimmeuble`;
CREATE TABLE IF NOT EXISTS `bienimmeuble` (
  `Codebienimmeuble` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Monument` tinyint DEFAULT '0',
  `Ensemble` tinyint DEFAULT '0',
  `Site` tinyint DEFAULT '0',
  `Codequalif` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Bienimmeuble` tinyint DEFAULT '0',
  UNIQUE KEY `Codebienimmeuble` (`Codebienimmeuble`),
  KEY `WDIDX_Bienimmeuble_Codequalif` (`Codequalif`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bienmeuble`
--

DROP TABLE IF EXISTS `bienmeuble`;
CREATE TABLE IF NOT EXISTS `bienmeuble` (
  `Codebienmeuble` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cochebienmeuble` tinyint DEFAULT '0',
  `Descriptionbienmeuble` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codequalif` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codebienmeuble` (`Codebienmeuble`),
  KEY `WDIDX_Bienmeuble_Codequalif` (`Codequalif`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bienmeuble`
--

INSERT INTO `bienmeuble` (`Codebienmeuble`, `Cochebienmeuble`, `Descriptionbienmeuble`, `Codequalif`) VALUES
('59366601', 1, 'Description', '30331137');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

DROP TABLE IF EXISTS `commune`;
CREATE TABLE IF NOT EXISTS `commune` (
  `Codecommune` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Commune` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codearrondis` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codedepartement` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codecommune` (`Codecommune`),
  KEY `WDIDX_Commune_Codearrondis` (`Codearrondis`),
  KEY `WDIDX_Commune_Codedepartement` (`Codedepartement`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`Codecommune`, `Commune`, `Codearrondis`, `Codedepartement`) VALUES
('C01', 'Abomey-Calavi', 'A01', 'D01');

-- --------------------------------------------------------

--
-- Structure de la table `compteurv`
--

DROP TABLE IF EXISTS `compteurv`;
CREATE TABLE IF NOT EXISTS `compteurv` (
  `nCopie` int DEFAULT '0',
  `Codestock` int DEFAULT '0',
  `Compteurcodeident` int DEFAULT '0',
  `Compteurcodelocal` int DEFAULT '0',
  `Compteurcodecoord` int DEFAULT '0',
  `Compteurcodepropri` int DEFAULT '0',
  `Compteurcodepub` int DEFAULT '0',
  `Compteurcodepriv` int DEFAULT '0',
  `Compteurcodeidentprop` int DEFAULT '0',
  `Compteurcodeprotection` int DEFAULT '0',
  `Compteurcodequalif` int DEFAULT '0',
  `Compteurcodequalifbi` int DEFAULT '0',
  `Compteurcodeimage` int DEFAULT '0',
  `Compteurcodeinfoinvent` int DEFAULT '0',
  `Compteurcodequalifbm` int DEFAULT '0',
  `Compteurcodecommune` int DEFAULT '0',
  `Compteurcodearron` int DEFAULT '0',
  `Compteurcodequalifim` int DEFAULT '0',
  `Compteurcodeconserv` int DEFAULT '0',
  `Compteurcodeetatg` int DEFAULT '0',
  `Compteurcodeetatm` int DEFAULT '0',
  `Compteurcodeetatoc` int DEFAULT '0',
  `Compteurcodeprotecac` int DEFAULT '0',
  `Compteurcodeprotecsug` int DEFAULT '0',
  `Compteurcodeclassug` int DEFAULT '0',
  `Compteurcodephotoobent` int DEFAULT '0',
  `Compteurcodephotodet` int DEFAULT '0',
  `Compteurcodephotoaer` int DEFAULT '0',
  `Compteurcodephotoaerob` int DEFAULT '0',
  `Compteurcodephotoaerilot` int DEFAULT '0',
  `Compteurcodeprotec` int DEFAULT '0',
  `Compteurarrondis` int DEFAULT '0',
  UNIQUE KEY `Codestock` (`Codestock`),
  KEY `WDIDX_Compteurv_nCopie` (`nCopie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `connexiona`
--

DROP TABLE IF EXISTS `connexiona`;
CREATE TABLE IF NOT EXISTS `connexiona` (
  `IDConnexion` int NOT NULL,
  `Chemin` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cheminsauvergarde` varchar(50) COLLATE utf8mb4_general_ci DEFAULT '0',
  `Login` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cheminimage` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`IDConnexion`),
  UNIQUE KEY `Cheminsauvergarde` (`Cheminsauvergarde`),
  UNIQUE KEY `Login` (`Login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `conservation`
--

DROP TABLE IF EXISTS `conservation`;
CREATE TABLE IF NOT EXISTS `conservation` (
  `Codeconserv` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  UNIQUE KEY `Codeconserv` (`Codeconserv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `conservation`
--

INSERT INTO `conservation` (`Codeconserv`) VALUES
('29876766');

-- --------------------------------------------------------

--
-- Structure de la table `coordonnees`
--

DROP TABLE IF EXISTS `coordonnees`;
CREATE TABLE IF NOT EXISTS `coordonnees` (
  `Codecoord` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Latitude` double DEFAULT '0',
  `Longitude` double DEFAULT '0',
  `Codelocal` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codecoord` (`Codecoord`),
  KEY `WDIDX_Coordonnees_Codelocal` (`Codelocal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `coordonnees`
--

INSERT INTO `coordonnees` (`Codecoord`, `Latitude`, `Longitude`, `Codelocal`) VALUES
('11729021', 10, 20, '57204344');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `Codedepartement` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Departement` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codecommune` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codedepartement` (`Codedepartement`),
  UNIQUE KEY `Departement` (`Departement`),
  KEY `WDIDX_Departement_Codecommune` (`Codecommune`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`Codedepartement`, `Departement`, `Codecommune`) VALUES
('D01', 'ATLANTIQUE', 'C01');

-- --------------------------------------------------------

--
-- Structure de la table `echelleclasssugeree`
--

DROP TABLE IF EXISTS `echelleclasssugeree`;
CREATE TABLE IF NOT EXISTS `echelleclasssugeree` (
  `Codeechelleclass` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Mondiale` tinyint DEFAULT '0',
  `Nationale` tinyint DEFAULT '0',
  `Departementale` tinyint DEFAULT '0',
  `Municipale` tinyint DEFAULT '0',
  `Aucune` tinyint DEFAULT '0',
  `Codeprotec` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeechelleclass` (`Codeechelleclass`),
  KEY `WDIDX_Echelleclasssugeree_Codeprotec` (`Codeprotec`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `echelleclasssugeree`
--

INSERT INTO `echelleclasssugeree` (`Codeechelleclass`, `Mondiale`, `Nationale`, `Departementale`, `Municipale`, `Aucune`, `Codeprotec`) VALUES
('27284752', 1, 0, 0, 0, 0, '68907648');

-- --------------------------------------------------------

--
-- Structure de la table `echelleprotectsuggeree`
--

DROP TABLE IF EXISTS `echelleprotectsuggeree`;
CREATE TABLE IF NOT EXISTS `echelleprotectsuggeree` (
  `Codeechelleprot` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Gouvernementale` tinyint DEFAULT '0',
  `Ministerielle` tinyint DEFAULT '0',
  `Prefectorale` tinyint DEFAULT '0',
  `Municipale` tinyint DEFAULT '0',
  `Aucune` tinyint DEFAULT '0',
  `Codeprotec` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeechelleprot` (`Codeechelleprot`),
  KEY `WDIDX_Echelleprotectsuggeree_Codeprotec` (`Codeprotec`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `echelleprotectsuggeree`
--

INSERT INTO `echelleprotectsuggeree` (`Codeechelleprot`, `Gouvernementale`, `Ministerielle`, `Prefectorale`, `Municipale`, `Aucune`, `Codeprotec`) VALUES
('28810340', 0, 0, 1, 0, 0, '68907648');

-- --------------------------------------------------------

--
-- Structure de la table `enligne`
--

DROP TABLE IF EXISTS `enligne`;
CREATE TABLE IF NOT EXISTS `enligne` (
  `IDEnLigne` int NOT NULL,
  `Codecompte` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Nom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Prenom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Heure` time DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `nCopie` int DEFAULT '0',
  `Codeident` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`IDEnLigne`),
  UNIQUE KEY `Codecompte` (`Codecompte`),
  UNIQUE KEY `Codeident` (`Codeident`),
  KEY `WDIDX_EnLigne_nCopie` (`nCopie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etatgeneral`
--

DROP TABLE IF EXISTS `etatgeneral`;
CREATE TABLE IF NOT EXISTS `etatgeneral` (
  `Codeetatconserve8` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Bonetat` tinyint DEFAULT '0',
  `Ruine` tinyint DEFAULT '0',
  `Degradationavance` tinyint DEFAULT '0',
  `Degradationentame` tinyint DEFAULT '0',
  `Demoli` tinyint DEFAULT '0',
  `Codeconserv` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeetatconserve8` (`Codeetatconserve8`),
  KEY `WDIDX_Etatgeneral_Codeconserv` (`Codeconserv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etatgeneral`
--

INSERT INTO `etatgeneral` (`Codeetatconserve8`, `Bonetat`, `Ruine`, `Degradationavance`, `Degradationentame`, `Demoli`, `Codeconserv`) VALUES
('92863925', 0, 1, 0, 0, 0, '29876766');

-- --------------------------------------------------------

--
-- Structure de la table `etatmodification`
--

DROP TABLE IF EXISTS `etatmodification`;
CREATE TABLE IF NOT EXISTS `etatmodification` (
  `Codeetatconserve9` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Nonmodifie` tinyint DEFAULT '0',
  `Modificationlegere` tinyint DEFAULT '0',
  `Modificationprof` tinyint DEFAULT '0',
  `Modificationreussie` tinyint DEFAULT '0',
  `Modificationdegra` tinyint DEFAULT '0',
  `Codeconserv` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeetatconserve9` (`Codeetatconserve9`),
  KEY `WDIDX_Etatmodification_Codeconserv` (`Codeconserv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etatmodification`
--

INSERT INTO `etatmodification` (`Codeetatconserve9`, `Nonmodifie`, `Modificationlegere`, `Modificationprof`, `Modificationreussie`, `Modificationdegra`, `Codeconserv`) VALUES
('20390251', 0, 0, 0, 1, 0, '29876766');

-- --------------------------------------------------------

--
-- Structure de la table `etatoccupation`
--

DROP TABLE IF EXISTS `etatoccupation`;
CREATE TABLE IF NOT EXISTS `etatoccupation` (
  `Codeetatoccup` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Residence` tinyint DEFAULT '0',
  `Commerce` tinyint DEFAULT '0',
  `Bureau` tinyint DEFAULT '0',
  `Abandonoccup` tinyint DEFAULT '0',
  `Squatte` tinyint DEFAULT '0',
  `Codeconserv` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeetatoccup` (`Codeetatoccup`),
  KEY `WDIDX_Etatoccupation_Codeconserv` (`Codeconserv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etatoccupation`
--

INSERT INTO `etatoccupation` (`Codeetatoccup`, `Residence`, `Commerce`, `Bureau`, `Abandonoccup`, `Squatte`, `Codeconserv`) VALUES
('84371142', 0, 1, 0, 0, 0, '29876766');

-- --------------------------------------------------------

--
-- Structure de la table `gpwutilisateur`
--

DROP TABLE IF EXISTS `gpwutilisateur`;
CREATE TABLE IF NOT EXISTS `gpwutilisateur` (
  `Login` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Nom` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Prenom` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `MotPasse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `Superviseur` tinyint NOT NULL DEFAULT '0',
  `MotPasseASaisir` tinyint NOT NULL DEFAULT '0',
  UNIQUE KEY `Login` (`Login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `identification`
--

DROP TABLE IF EXISTS `identification`;
CREATE TABLE IF NOT EXISTS `identification` (
  `Codeident` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Synthesehisto` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Diagnosticarch` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codecompte` varchar(15) COLLATE utf8mb4_general_ci DEFAULT '0',
  `Ordre` int DEFAULT '0',
  `Marque` tinyint DEFAULT '0',
  `Modisuppr` tinyint DEFAULT '0',
  `Nature` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Denominationof` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Denominationpop` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Autredenomination` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codelocal` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codepropri` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codequalif` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codeconserv` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codeprotec` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codeinfoinvent` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeident` (`Codeident`),
  UNIQUE KEY `Ordre` (`Ordre`),
  KEY `WDIDX_Identification_Codecompte` (`Codecompte`),
  KEY `WDIDX_Identification_Codelocal` (`Codelocal`),
  KEY `WDIDX_Identification_Codepropri` (`Codepropri`),
  KEY `WDIDX_Identification_Codequalif` (`Codequalif`),
  KEY `WDIDX_Identification_Codeconserv` (`Codeconserv`),
  KEY `WDIDX_Identification_Codeprotec` (`Codeprotec`),
  KEY `WDIDX_Identification_Codeinfoinvent` (`Codeinfoinvent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `identification`
--

INSERT INTO `identification` (`Codeident`, `Synthesehisto`, `Diagnosticarch`, `Codecompte`, `Ordre`, `Marque`, `Modisuppr`, `Nature`, `Denominationof`, `Denominationpop`, `Autredenomination`, `Codelocal`, `Codepropri`, `Codequalif`, `Codeconserv`, `Codeprotec`, `Codeinfoinvent`) VALUES
('70275199', 'Synthese', 'Diagnostic', '0', 0, 0, 0, 'Nature', 'Officielle', 'Populaire', 'Autres', '57204344', '81135587', '30331137', '29876766', '68907648', '77164269');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `Codeimage` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `Marque` tinyint DEFAULT '0',
  `Codeident` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeimage` (`Codeimage`),
  KEY `WDIDX_Image_Codeident` (`Codeident`),
  KEY `WDIDX_Image_CodeidentCodeimage` (`Codeident`,`Codeimage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`Codeimage`, `Marque`, `Codeident`) VALUES
('41852760', 0, '70275199');

-- --------------------------------------------------------

--
-- Structure de la table `imagearchive`
--

DROP TABLE IF EXISTS `imagearchive`;
CREATE TABLE IF NOT EXISTS `imagearchive` (
  `Codeimage` int DEFAULT '0',
  `Image` longblob,
  `Codeident` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cheminimage` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codecommun` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeimage` (`Codeimage`),
  UNIQUE KEY `Cheminimage` (`Cheminimage`),
  KEY `WDIDX_Imagearchive_Codeident` (`Codeident`),
  KEY `WDIDX_Imagearchive_CodeidentCodeimage` (`Codeident`,`Codeimage`),
  KEY `WDIDX_Imagearchive_CodeidentCheminimage` (`Codeident`,`Cheminimage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `infoinventaire`
--

DROP TABLE IF EXISTS `infoinventaire`;
CREATE TABLE IF NOT EXISTS `infoinventaire` (
  `Codeinfoinvent` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Dateinvent` date DEFAULT NULL,
  `Inventoriste` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeinfoinvent` (`Codeinfoinvent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infoinventaire`
--

INSERT INTO `infoinventaire` (`Codeinfoinvent`, `Dateinvent`, `Inventoriste`) VALUES
('77164269', '2023-08-18', 'Inventoriste');

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
CREATE TABLE IF NOT EXISTS `localisation` (
  `Codelocal` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Localite` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Adresse` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codearrondis` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codelocal` (`Codelocal`),
  KEY `WDIDX_Localisation_Codearrondis` (`Codearrondis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`Codelocal`, `Localite`, `Adresse`, `Codearrondis`) VALUES
('57204344', 'Quartier', 'Adresse', 'A01');

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

DROP TABLE IF EXISTS `parametre`;
CREATE TABLE IF NOT EXISTS `parametre` (
  `IDParametre` int DEFAULT '0',
  `Operation` varchar(50) COLLATE utf8mb4_general_ci DEFAULT '0',
  `Datevalidite` date DEFAULT NULL,
  `Instdemandeuse` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Acteur` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `IDParametre` (`IDParametre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `photoaerienne`
--

DROP TABLE IF EXISTS `photoaerienne`;
CREATE TABLE IF NOT EXISTS `photoaerienne` (
  `Codephotoaeri` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `Codeimage` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codephotoaeri` (`Codephotoaeri`),
  KEY `WDIDX_Photoaerienne_Codeimage` (`Codeimage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photoaerienne`
--

INSERT INTO `photoaerienne` (`Codephotoaeri`, `Codeimage`) VALUES
('87654154', '41852760');

-- --------------------------------------------------------

--
-- Structure de la table `photoaerilot`
--

DROP TABLE IF EXISTS `photoaerilot`;
CREATE TABLE IF NOT EXISTS `photoaerilot` (
  `Codephotobj` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Photo` longblob,
  `Cheminphoto` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codephotoaeri` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codephotobj` (`Codephotobj`),
  KEY `WDIDX_Photoaerilot_Codephotoaeri` (`Codephotoaeri`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photoaerilot`
--

INSERT INTO `photoaerilot` (`Codephotobj`, `Photo`, `Cheminphoto`, `Codephotoaeri`) VALUES
('67015583', 0x35303638353237303332385f626130363432333430395f6f2d636f6d707265737365645f313639323336333638352e6a7067, '50685270328_ba06423409_o-compressed_1692363685.jpg', '87654154');

-- --------------------------------------------------------

--
-- Structure de la table `photoaerobj`
--

DROP TABLE IF EXISTS `photoaerobj`;
CREATE TABLE IF NOT EXISTS `photoaerobj` (
  `Codephotobj` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Photo` longblob,
  `Cheminphoto` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codephotoaeri` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codephotobj` (`Codephotobj`),
  KEY `WDIDX_Photoaerobj_Codephotoaeri` (`Codephotoaeri`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photoaerobj`
--

INSERT INTO `photoaerobj` (`Codephotobj`, `Photo`, `Cheminphoto`, `Codephotoaeri`) VALUES
('64277785', 0x42616e6e696572655f313639323336333638352e706e67, 'Banniere_1692363685.png', '87654154');

-- --------------------------------------------------------

--
-- Structure de la table `photodetails`
--

DROP TABLE IF EXISTS `photodetails`;
CREATE TABLE IF NOT EXISTS `photodetails` (
  `Codephotobj` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Photo` longblob,
  `Cheminphoto` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codeimage` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codephotobj` (`Codephotobj`),
  KEY `WDIDX_Photodetails_Codeimage` (`Codeimage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photodetails`
--

INSERT INTO `photodetails` (`Codephotobj`, `Photo`, `Cheminphoto`, `Codeimage`) VALUES
('44375855', 0x35303638363830343331375f626662373731393039375f6f2d636f6d707265737365645f313639323336333638352e6a7067, '50686804317_bfb7719097_o-compressed_1692363685.jpg', '41852760');

-- --------------------------------------------------------

--
-- Structure de la table `photoobjentier`
--

DROP TABLE IF EXISTS `photoobjentier`;
CREATE TABLE IF NOT EXISTS `photoobjentier` (
  `Codephotobj` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Photo` longblob,
  `Cheminphoto` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codeimage` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codephotobj` (`Codephotobj`),
  KEY `WDIDX_Photoobjentier_Codeimage` (`Codeimage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photoobjentier`
--

INSERT INTO `photoobjentier` (`Codephotobj`, `Photo`, `Cheminphoto`, `Codeimage`) VALUES
('99540367', 0x35303638353237303332385f626130363432333430395f6f2d636f6d707265737365645f313639323336333638352e6a7067, '50685270328_ba06423409_o-compressed_1692363685.jpg', '41852760');

-- --------------------------------------------------------

--
-- Structure de la table `propriete`
--

DROP TABLE IF EXISTS `propriete`;
CREATE TABLE IF NOT EXISTS `propriete` (
  `Codepropri` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  UNIQUE KEY `Codepropri` (`Codepropri`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `propriete`
--

INSERT INTO `propriete` (`Codepropri`) VALUES
('81135587');

-- --------------------------------------------------------

--
-- Structure de la table `proprieteident`
--

DROP TABLE IF EXISTS `proprieteident`;
CREATE TABLE IF NOT EXISTS `proprieteident` (
  `Codepropident` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Nompren` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Lienobj` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Residence` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Contact1` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Contact2` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Codepropri` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codepropident` (`Codepropident`),
  KEY `WDIDX_Proprieteident_Codepropri` (`Codepropri`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `proprieteident`
--

INSERT INTO `proprieteident` (`Codepropident`, `Nompren`, `Lienobj`, `Residence`, `Contact1`, `Contact2`, `Codepropri`) VALUES
('97862715', 'Nom Prenoms', 'Lien', 'Residence', 'Contact 1', 'Contact 2', '81135587');

-- --------------------------------------------------------

--
-- Structure de la table `proprietepriv`
--

DROP TABLE IF EXISTS `proprietepriv`;
CREATE TABLE IF NOT EXISTS `proprietepriv` (
  `Codepropripriv` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Familiale` tinyint DEFAULT '0',
  `Individuelle` tinyint DEFAULT '0',
  `Associative` tinyint DEFAULT '0',
  `Communautaire` tinyint DEFAULT '0',
  `Autrepriv` tinyint DEFAULT '0',
  `Codepropri` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codepropripriv` (`Codepropripriv`),
  KEY `WDIDX_Proprietepriv_Codepropri` (`Codepropri`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `proprietepriv`
--

INSERT INTO `proprietepriv` (`Codepropripriv`, `Familiale`, `Individuelle`, `Associative`, `Communautaire`, `Autrepriv`, `Codepropri`) VALUES
('46549813', 0, 0, 1, 0, 0, '81135587');

-- --------------------------------------------------------

--
-- Structure de la table `proprietepub`
--

DROP TABLE IF EXISTS `proprietepub`;
CREATE TABLE IF NOT EXISTS `proprietepub` (
  `Codepropripub` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Gouvernementale` tinyint DEFAULT '0',
  `Departementale` tinyint DEFAULT '0',
  `Municipale` tinyint DEFAULT '0',
  `Communautaire` tinyint DEFAULT '0',
  `Autrepub` tinyint DEFAULT '0',
  `Codepropri` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codepropripub` (`Codepropripub`),
  KEY `WDIDX_Proprietepub_Codepropri` (`Codepropri`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `proprietepub`
--

INSERT INTO `proprietepub` (`Codepropripub`, `Gouvernementale`, `Departementale`, `Municipale`, `Communautaire`, `Autrepub`, `Codepropri`) VALUES
('70169710', 0, 1, 0, 0, 0, '81135587');

-- --------------------------------------------------------

--
-- Structure de la table `protection`
--

DROP TABLE IF EXISTS `protection`;
CREATE TABLE IF NOT EXISTS `protection` (
  `Codeprotec` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  UNIQUE KEY `Codeprotec` (`Codeprotec`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `protection`
--

INSERT INTO `protection` (`Codeprotec`) VALUES
('68907648');

-- --------------------------------------------------------

--
-- Structure de la table `protectionactuelle`
--

DROP TABLE IF EXISTS `protectionactuelle`;
CREATE TABLE IF NOT EXISTS `protectionactuelle` (
  `Codeprotecactu` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Gouvernementale` tinyint DEFAULT '0',
  `Ministerielle` tinyint DEFAULT '0',
  `Prefectorale` tinyint DEFAULT '0',
  `Municipale` tinyint DEFAULT '0',
  `Aucune` tinyint DEFAULT '0',
  `Codeprotec` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  UNIQUE KEY `Codeprotecactu` (`Codeprotecactu`),
  KEY `WDIDX_Protectionactuelle_Codeprotec` (`Codeprotec`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `protectionactuelle`
--

INSERT INTO `protectionactuelle` (`Codeprotecactu`, `Gouvernementale`, `Ministerielle`, `Prefectorale`, `Municipale`, `Aucune`, `Codeprotec`) VALUES
('21500704', 1, 0, 0, 0, 0, '68907648');

-- --------------------------------------------------------

--
-- Structure de la table `qualification`
--

DROP TABLE IF EXISTS `qualification`;
CREATE TABLE IF NOT EXISTS `qualification` (
  `Codequalif` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Biencultemat` tinyint DEFAULT '0',
  UNIQUE KEY `Codequalif` (`Codequalif`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `qualification`
--

INSERT INTO `qualification` (`Codequalif`, `Biencultemat`) VALUES
('30331137', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sauvegarde`
--

DROP TABLE IF EXISTS `sauvegarde`;
CREATE TABLE IF NOT EXISTS `sauvegarde` (
  `Cheminsauvergarde` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Restoreprest` tinyint DEFAULT '0',
  `Datesauve` date DEFAULT NULL,
  UNIQUE KEY `Cheminsauvergarde` (`Cheminsauvergarde`),
  KEY `WDIDX_Sauvegarde_Restoreprest` (`Restoreprest`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
