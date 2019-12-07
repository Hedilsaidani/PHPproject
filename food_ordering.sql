-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 07 déc. 2019 à 22:45
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `food_ordering`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cid` int(10) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `stutus` text NOT NULL,
  `opt` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `dateof` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `cid`, `pid`, `qty`, `stutus`, `opt`, `price`, `dateof`) VALUES
(26, 5, 5, 4, '0', 'Bacon + Cheddar Cheese + Extra Cheese + Grilled Onions + ', 38, '0000-00-00'),
(27, 5, 2, 10, '0', 'Bacon + Cheddar Cheese + Extra Cheese + Grilled Onions + ', 95, '0000-00-00'),
(28, 5, 5, 1, '0', 'Cheddar Cheese + ', 11, '0000-00-00'),
(29, 5, 5, 5, '0', '', 45, '0000-00-00'),
(30, 5, 5, 4, '0', 'Extra Cheese + ', 39, '0000-00-00'),
(31, 5, 2, 1, '0', 'Cheddar Cheese + ', 11, '0000-00-00'),
(32, 5, 2, 1, '0', '', 9, '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `costumer`
--

CREATE TABLE `costumer` (
  `cid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `adresse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `costumer`
--

INSERT INTO `costumer` (`cid`, `name`, `email`, `pwd`, `phone`, `adresse`) VALUES
(1, 'rami', 'rami@gmail.com', '123456', 12345678, 'fdgdgdgdgdgdgdgddgdg'),
(3, 'chehir', 'chehir@gmail.com', '', 9999999, 'bizerte , methline 7000'),
(5, 'rami', 'rami@gmail.com', '25f9e794323b453885f5181f1b624d0b', 28892942, 'bizerte');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `eid` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`eid`, `name`, `email`, `pwd`, `phone`) VALUES
(1, 'rami', 'ramilouati@gmail.com', '123456', '28892999'),
(2, 'chehir', 'chehir@gmail.com', 'smkfjgpisg', '9999999999'),
(8, 'karime', 'lkhl@gmail.com', '123456789', '28892942'),
(9, 'hedil', 'hedil@gmail.com', '12345655', '12345678'),
(10, 'hedil', 'hedil@gmail.com', '12345655', '12345678'),
(11, 'Mikek', 'rami@gmil.com', 'X6qbgutG6ate3', '8655635'),
(12, 'rami', 'rami@gmail.com', '123456789', '28892942'),
(13, 'rami1', 'rami1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2356987'),
(14, 'klk', 'klk@gmil.com', '96e79218965eb72c92a549dd5a330112', '5353535'),
(15, 'melek', 'melek@gmail.com', 'b857eed5c9405c1f2b98048aae506792', '25988741'),
(16, 'rami2', 'rami2@gmÃ il.com', '7c497868c9e6d3e4cf2e87396372cd3b', '66666666'),
(17, 'rami3', 'rami3@yhoo.com', 'c8c605999f3d8352d7bb792cf3fdb25b', '28892942'),
(18, 'rami4', 'rami4@ghh.com', '25d55ad283aa400af464c76d713c07ad', '5353535'),
(19, 'kamel', 'kamel@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25669887');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `oid` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL,
  `cid` int(10) NOT NULL,
  `quantity` int(25) NOT NULL,
  `odate` datetime NOT NULL,
  `quantity1` int(11) NOT NULL,
  `delivery status` tinyint(1) NOT NULL,
  `vehicle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`oid`, `pid`, `cid`, `quantity`, `odate`, `quantity1`, `delivery status`, `vehicle`) VALUES
(1, 2, 1, 2, '2019-11-01 00:00:00', 1, 1, 2),
(2, 2, 1, 2, '2019-11-01 00:00:00', 1, 1, 2),
(3, 2, 3, 2, '2019-11-11 00:00:00', 1, 1, 2),
(4, 2, 3, 2, '2019-11-11 00:00:00', 1, 1, 2),
(5, 5, 3, 2, '2019-11-13 00:00:00', 1, 1, 2),
(6, 5, 3, 2, '2019-11-13 00:00:00', 1, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`pid`, `name`, `description`, `price`, `file`) VALUES
(2, 'chakchouka', '^dofjbjdfpdhxfhdh', 6, 'bb'),
(3, 'lablebi', 'lablebi with egs,thon,hrissa,bread', 5.5, ''),
(5, 'spagetty', 'delecieus spguetty ith mozrilla ', 9, '');

-- --------------------------------------------------------

--
-- Structure de la table `vehicle`
--

CREATE TABLE `vehicle` (
  `vid` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `vehiclenum` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicle`
--

INSERT INTO `vehicle` (`vid`, `type`, `status`, `vehiclenum`) VALUES
(1, 'bmw', 1, '12345678'),
(5, 'porshe', 1, '88996633'),
(6, 'porshe', 1, '88996633');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- Index pour la table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`cid`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Index pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `costumer` (`cid`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `costumer` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
