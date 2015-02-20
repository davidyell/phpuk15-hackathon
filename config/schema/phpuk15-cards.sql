-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2015 at 02:29 PM
-- Server version: 5.5.41-0ubuntu0.12.04.1
-- PHP Version: 5.5.21-1+deb.sury.org~precise+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpuk15-cards`
--
CREATE DATABASE IF NOT EXISTS `phpuk15-cards` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpuk15-cards`;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `effect` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rarity` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `name`, `effect`, `type`, `rarity`, `created`, `modified`) VALUES
(1, 'Reverse psychology', 'Everyone on the team drinks', 'negative', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Carpet bombing', 'All players on opposing team must drink', 'positive', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'The chosen one', 'Target opponent must finish their drink', 'positive', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Backfire', 'Reverse the effect of a card.', 'positive', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Sacrifice', 'Chose a player on your team to drink', 'negative', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'What drink?', 'Team avoids taking a drink', 'positive', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Turncoat', 'One player on your side swaps teams', 'negative', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Hostage exchange', 'Each team must exchange a player', 'neutral', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Assassination', 'Target opposing player must leave the game', 'negative', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Spotlight', 'Chosen team player must down two shots', 'negative', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Illusionist', 'A player on your team may not be targeted this turn', 'positive', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Duel', 'Target players from each team must race to finish their drink. The losing team must all drink', 'neutral', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Trade off', 'Two opposing players exchange drinks', 'neutral', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Mass confusion', 'All players must swap drinks with the opposing team', 'neutral', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Reinforcements!', 'You may add an additional player to your team', 'positive', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Death by snu-snu', 'Target opponent must finish their drink', 'positive', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Bunker buster', 'Two target opponents must finish their drinks', 'positive', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Don''t stop me now', 'Re-fill one of your teams drinks', 'negative', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Double vision', 'If you have to drink this turn, drink twice', 'negative', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Boat race', 'Each team must line up and race one after the other to finish their drinks. The losing team is eliminated.', 'neutral', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Spiked', 'Swap an opponents drink for a drink of your teams choice', 'positive', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Orbital bombing', 'First opponent drinks three times, second twice, and last once', 'positive', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
