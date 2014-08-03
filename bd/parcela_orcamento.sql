-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sgco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `parcela_orcamento`
--

CREATE TABLE IF NOT EXISTS `parcela_orcamento` (
  `cod_par_orcamento` int(10) NOT NULL AUTO_INCREMENT,
  `cod_orcamento` int(10) NOT NULL,
  `data_vencimento` date NOT NULL,
  `valor_vencimento` int(11) NOT NULL,
  `pago` varchar(5) NOT NULL,
  `data_pagamento` date NOT NULL,
  PRIMARY KEY (`cod_par_orcamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
