-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 28/07/2014 às 03:54
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
-- Estrutura para tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `cod_agendamento` int(10) NOT NULL AUTO_INCREMENT,
  `cod_paciente` int(10) NOT NULL,
  `cod_dentista` int(10) NOT NULL,
  `dt_agendamento` varchar(10) NOT NULL,
  `cod_horario` varchar(5) NOT NULL,
  PRIMARY KEY (`cod_agendamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Fazendo dump de dados para tabela `agenda`
--

INSERT INTO `agenda` (`cod_agendamento`, `cod_paciente`, `cod_dentista`, `dt_agendamento`, `cod_horario`) VALUES
(8, 2, 3, '04/07/2014', '2'),
(10, 88, 4, '01/07/2014', '2'),
(11, 1, 3, '02/07/2014', '3'),
(12, 50, 3, '02/07/2014', '1'),
(13, 0, 3, '09/07/2014', '2'),
(14, 88, 3, '07/07/2014', '2'),
(15, 5, 3, '17/07/2014', '1'),
(16, 45, 4, '02/07/2014', '3'),
(17, 110, 4, '25/07/2014', '1');

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

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `cod_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cidade` varchar(30) NOT NULL,
  `sigla_uf` varchar(2) NOT NULL,
  PRIMARY KEY (`cod_cidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `cidade`
--

INSERT INTO `cidade` (`cod_cidade`, `nome_cidade`, `sigla_uf`) VALUES
(1, 'Castelo', 'ES'),
(2, 'Iconha', 'ES');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Fazendo dump de dados para tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `cpf`, `sexo`, `nascimento`, `uf`, `cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `celular`, `email`, `status`, `login`, `senha`) VALUES
(19, 'charles', '111.111.111-11', '', '', '', '', '', '', '', '', '', '', '', 'ativo', 'charles', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, 'charles', '111.111.111-11', '', '', '', '', '', '', '', '', '', '', '', '', 'charles', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'charles', '111.111.111-11', 'Feminino', '07/11/1991', 'ES', 'jkjk', 'jkjk', 'jkjk', '11', '29290-000', '(28)3533-1821', '(28)9988-5213', 'ffffffffffffffff@dssd', 'ativo', 'charles', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'Edson', '444.444.444-44', 'Feminino', '30/06/2014', 'ES', '1', 'dd', 'sss', '23', '292', '(77)7777-7777', '(22)2222-2222', 'ssss@ww', 'fghfhgf', 'edson', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dentista`
--

CREATE TABLE IF NOT EXISTS `dentista` (
  `cod_dentista` int(11) NOT NULL AUTO_INCREMENT,
  `nome_dentista` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `dt` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `sigla_uf` varchar(2) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `numero` int(10) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_dentista`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `dentista`
--

INSERT INTO `dentista` (`cod_dentista`, `nome_dentista`, `cpf`, `dt`, `sexo`, `sigla_uf`, `cod_cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `celular`, `email`, `status`, `login`, `senha`) VALUES
(3, 'Pedro', '111.111.111-11', '20/10/2011', 'Masculino', 'ES', 1, 'ddd', 'ddd', 11, '29280-000', '(22)2222-2222', '(28)998852139', 'pedro@hotmail.com', 'ativo', 'pedro', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Mateus', '111.111.111-11', 'Feminino', '', '', 0, 'fgh', 'dgh', 21, '29290-000', '(28)9888-9898', '(22)2222-2222', 'matheus@erere', 'ativo', 'mateus', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Luis', '111.111.111-11', 'Feminino', '', '', 0, 'ss', 'ssss', 12, '1212', '(28)3333-3333', '(22)2222-2222', 'luis@fdfd', 'ativo', 'luiz', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura para tabela `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `cod_horario` int(11) NOT NULL AUTO_INCREMENT,
  `horario` varchar(5) NOT NULL,
  PRIMARY KEY (`cod_horario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `horario`
--

INSERT INTO `horario` (`cod_horario`, `horario`) VALUES
(1, '8:00'),
(2, '8:30'),
(3, '9:00'),
(4, '9:30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `cod_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_paciente` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `dt` varchar(10) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Fazendo dump de dados para tabela `paciente`
--

INSERT INTO `paciente` (`cod_paciente`, `nome_paciente`, `cpf`, `dt`, `sexo`, `sigla_uf`, `cod_cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `celular`, `email`) VALUES
(88, 'charles', '111.111.111-11', '26/12/1991', 'Masculino', 'ES', 1, 'rer', 'erer', '11', '29290-000', '28 98852139', '28 98989898', 'dfdfdf'),
(91, 'charles', '140.423.077-79', '26/12/1789', 'Masculino', 'ES', 1, 'dfg', 'dfgg', '45', '29290-000', '(28)3533-2918', '(28) 3533-1821', 'tharlesgomes@hotmail.com'),
(107, 'Pedro', '111.111.111.11', '12/12/2014', 'Masculino', 'ES', 1, 'sd', 'sds', '12', '29290-000', '455555555', '444444444', 'sdsd'),
(108, 'Pedro', '111.111.111.11', '12/12/2014', 'Masculino', 'ES', 1, 'sd', 'sds', '12', '29290-000', '455555555', '444444444', 'sdsd'),
(109, 'Jose', '222.222.222-22', '23/03/1985', 'Masculino', 'ES', 1, 'sdfs', 'fsf', '78', '2929292-2', '7878787', '4545454', 'ddddd'),
(110, 'jaime', '111.111.111-11', '12/12/12', 'Masculino', 'ES', 1, 'sd', 'sd', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `idServico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`idServico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `servicos`
--

INSERT INTO `servicos` (`idServico`, `nome`, `valor`, `status`) VALUES
(5, 'plop', 'plop', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `uf`
--

CREATE TABLE IF NOT EXISTS `uf` (
  `sigla_uf` varchar(2) NOT NULL,
  `nome_uf` varchar(30) NOT NULL,
  PRIMARY KEY (`sigla_uf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `uf`
--

INSERT INTO `uf` (`sigla_uf`, `nome_uf`) VALUES
('ES', 'Espirito Santo'),
('RJ', 'Rio de Janeiro');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `login`, `senha`) VALUES
(10, 'charles', 'charles', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
