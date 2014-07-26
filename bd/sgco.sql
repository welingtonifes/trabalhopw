-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 17-Jul-2014 às 20:04
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sgco`
--
CREATE DATABASE IF NOT EXISTS `sgco` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `sgco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `cod_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cidade` varchar(30) NOT NULL,
  `sigla_uf` varchar(2) NOT NULL,
  PRIMARY KEY (`cod_cidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`cod_cidade`, `nome_cidade`, `sigla_uf`) VALUES
(1, 'Castelo', 'ES'),
(2, 'Iconha', 'ES');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `cpf`, `sexo`, `nascimento`, `uf`, `cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `celular`, `email`, `status`, `login`, `senha`) VALUES
(1, 'welington', '', 'Masculino', '', '', '', '', '', '', '', '', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `cod_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `dt` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `sigla_uf` varchar(2) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`cod_paciente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`cod_paciente`, `nome`, `cpf`, `dt`, `sexo`, `sigla_uf`, `cod_cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `celular`, `email`) VALUES
(88, 'charles', '111.111.111-1', '2014-07-01', 'Masculino', 'ES', 1, 'rer', 'erer', '11', '29290-000', '28 98852139', '28 98989898', 'dfdfdf'),
(90, 'Ana', '140.423.077-7', '0000-00-00', 'Feminino', 'RJ', 1, 'dfdfd', 'dfdf', '11', '29292-000', '(28)3533-1821', '(28) 9889-2785', 'tharlesgomes@hotmail.com'),
(91, 'charles', '140.423.077-7', '0000-00-00', 'Masculino', 'ES', 1, 'dfg', 'dfgg', '45', '29290-000', '(28)3533-2918', '(28) 3533-1821', 'tharlesgomes@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `uf`
--

CREATE TABLE IF NOT EXISTS `uf` (
  `sigla_uf` varchar(2) NOT NULL,
  `nome_uf` varchar(30) NOT NULL,
  PRIMARY KEY (`sigla_uf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `uf`
--

INSERT INTO `uf` (`sigla_uf`, `nome_uf`) VALUES
('ES', 'Espirito Santo'),
('RJ', 'Rio de Janeiro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
