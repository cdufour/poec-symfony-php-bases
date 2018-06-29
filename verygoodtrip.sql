-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 29 juin 2018 à 12:47
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `verygoodtrip`
--

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Italie'),
(6, 'Serbie'),
(7, 'France'),
(8, 'Tunisie'),
(9, 'Togo'),
(10, 'Argentine'),
(15, 'Belgique');

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `trip_id`, `path`) VALUES
(1, 6, 'budapest.jpg'),
(2, 6, 'serbie1.jpg'),
(3, 7, 'serbie2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `trip`
--

CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trip`
--

INSERT INTO `trip` (`id`, `country`, `date_start`, `date_end`, `title`, `description`, `price`) VALUES
(5, 1, '2018-08-08', '2018-08-22', 'Soggiorno goloso nel paese della pizza', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet purus augue. \r\nSuspendisse pretium sollicitudin urna, sit amet eleifend purus fringilla non. Mauris pretium massa mauris, eget fringilla velit consequat nec. Nunc tincidunt quis diam vel accumsan. Ut accumsan luctus placerat. Aliquam erat volutpat. Nunc venenatis dictum neque, ac facilisis dui pellentesque sit amet. Praesent euismod placerat quam vitae dignissim. Phasellus fermentum in leo id faucibus. Donec at velit sit amet ipsum malesuada fermentum nec sed ante.\r\n    ', 1500),
(6, 6, '2018-07-10', '2018-07-24', 'Séjour très pacifique', 'Blablabla                  ', 600),
(7, 9, '2018-06-05', '2018-06-06', 'Voyage élémentaire', 'Rien...', 9000),
(8, 10, '2018-06-07', '2018-06-14', 'Séjour merveilleux au pays du tango ', '', 790.5);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(12) NOT NULL,
  `role` enum('client','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'Chris', 'Dufour', 'opusidea@gmail.com', '1234', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
