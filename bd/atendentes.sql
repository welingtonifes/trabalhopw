-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 28/07/2014 às 03:47
-- Versão do servidor: 5.6.16
-- Versão do PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `sgco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendentes`
--

CREATE TABLE IF NOT EXISTS `atendentes` (
  `idAtendente` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`idAtendente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Fazendo dump de dados para tabela `atendentes`
--

INSERT INTO `atendentes` (`idAtendente`, `nome`, `cpf`, `sexo`, `nascimento`, `uf`, `cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `celular`, `email`, `status`, `login`, `senha`) VALUES
(19, 'charles', '111.111.111-11', '', '', '', '', '', '', '', '', '', '', '', 'ativo', 'charles', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, 'charles', '111.111.111-11', '', '', '', '', '', '', '', '', '', '', '', '', 'charles', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'charles', '111.111.111-11', 'Feminino', '07/11/1991', 'ES', 'jkjk', 'jkjk', 'jkjk', '11', '29290-000', '(28)3533-1821', '(28)9988-5213', 'ffffffffffffffff@dssd', 'ativo', 'charles', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'Edson', '444.444.444-44', 'Feminino', '30/06/2014', 'ES', '1', 'dd', 'sss', '23', '292', '(77)7777-7777', '(22)2222-2222', 'ssss@ww', 'fghfhgf', 'edson', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
