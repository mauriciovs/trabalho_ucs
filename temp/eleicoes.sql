-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Jun-2014 às 02:32
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eleicoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado`
--

CREATE TABLE IF NOT EXISTS `resultado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_candidato` int(11) NOT NULL,
  `nome_candidato` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_votos` int(11) NOT NULL,
  `eleito` enum('Sim','Não') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1304 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
