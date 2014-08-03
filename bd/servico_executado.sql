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
-- Estrutura da tabela `servico_executado`
--

CREATE TABLE IF NOT EXISTS `servico_executado` (
  `cod_orcamento` int(11) NOT NULL,
  `cod_servico` int(11) NOT NULL,
  `cod_dente` int(11) NOT NULL,
  `cod_dentista` int(11) NOT NULL,
  `valor` double(9,2) NOT NULL,
  PRIMARY KEY (`cod_orcamento`,`cod_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico_executado`
--

INSERT INTO `servico_executado` (`cod_orcamento`, `cod_servico`, `cod_dente`, `cod_dentista`, `valor`) VALUES
(0, 1, 2, 3, 4.00),
(0, 2, 2, 3, 4.00),
(0, 4, 5, 6, 7.00),
(19, 1, 2, 3, 4.00),
(20, 1, 2, 3, 4.00),
(21, 4, 5, 3, 0.00),
(22, 1, 2, 8, 10.00),
(22, 5, 4, 5, 78.00),
(23, 2, 3, 4, 10.00),
(23, 4, 5, 6, 50.00),
(24, 11, 11, 11, 48.39);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
