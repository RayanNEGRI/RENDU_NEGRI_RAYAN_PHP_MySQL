-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 24 Mars 2024 à 16:18
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `exentrainementrecette`
--

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE IF NOT EXISTS `recettes` (
`id` int(11) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `difficulte` int(11) NOT NULL,
  `tempsTotale` int(11) NOT NULL,
  `regimeSociale` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `recettes`
--

INSERT INTO `recettes` (`id`, `titre`, `description`, `difficulte`, `tempsTotale`, `regimeSociale`) VALUES
(16, 'Le magret de canard', 'Le magret est un filet de viande maigre, originaire de la cuisine gersoise, dÃ©coupÃ© Ã  partir de la poitrine d''une oie ou d''un canard gras, engraissÃ© par gavage, les mÃªmes qui servent Ã  produire le confit et le foie gras', 3, 30, '....'),
(17, 'Le couscous ', 'Le couscous est d''une part une semoule de blÃ© dur prÃ©parÃ©e Ã  l''huile d''olive et d''autre part, une spÃ©cialitÃ© culinaire issue de la cuisine berbÃ¨re, Ã  base de couscous, de lÃ©gumes, d''Ã©pices, d''huile d''olive et de viande ou de poisso', 4, 30, '....');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `recettes`
--
ALTER TABLE `recettes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `recettes`
--
ALTER TABLE `recettes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
