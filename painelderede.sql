-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 03-Out-2013 às 23:55
-- Versão do servidor: 5.5.31
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `painelderede`
--
CREATE DATABASE IF NOT EXISTS `painelderede` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `painelderede`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `erros`
--

CREATE TABLE IF NOT EXISTS `erros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_erro` int(140) DEFAULT NULL,
  `nome` varchar(140) DEFAULT NULL,
  `descricao` text,
  `solucao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `erros`
--

INSERT INTO `erros` (`id`, `cod_erro`, `nome`, `descricao`, `solucao`) VALUES
(1, 110, 'Sem conexÃ£o', 'Tempo esgotado para conexÃ£o', 'Entre em contado com o administrador e informe o cÃ³digo do erro'),
(2, 0, 'Getaddrinfo Failed', 'php_network_getaddresses: getaddrinfo failed: Nome ou serviÃ§o desconhecido', 'Aponte de forma correta o DNS para o domÃ­nio adequado.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
