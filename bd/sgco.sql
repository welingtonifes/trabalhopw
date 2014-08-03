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
-- Estrutura da tabela `agenda`
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
-- Extraindo dados da tabela `agenda`
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
-- Estrutura da tabela `atendentes`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `atendentes`
--

INSERT INTO `atendentes` (`idAtendente`, `nome`, `cpf`, `sexo`, `nascimento`, `uf`, `cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `celular`, `email`, `status`, `login`, `senha`) VALUES
(19, 'charles', '111.111.111-11', '', '', '', '', '', '', '', '', '', '', '', 'ativo', 'charles', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, 'charles', '111.111.111-11', '', '', '', '', '', '', '', '', '', '', '', '', 'charles', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'charles', '111.111.111-11', 'Feminino', '07/11/1991', 'ES', 'jkjk', 'jkjk', 'jkjk', '11', '29290-000', '(28)3533-1821', '(28)9988-5213', 'ffffffffffffffff@dssd', 'ativo', 'charles', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'Edson', '444.444.444-44', 'Feminino', '30/06/2014', 'ES', '1', 'dd', 'sss', '23', '292', '(77)7777-7777', '(22)2222-2222', 'ssss@ww', 'fghfhgf', 'edson', 'e10adc3949ba59abbe56e057f20f883e');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `cpf`, `sexo`, `nascimento`, `uf`, `cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `celular`, `email`, `status`, `login`, `senha`) VALUES
(19, 'charles', '111.111.111-11', '', '', '', '', '', '', '', '', '', '', '', 'ativo', 'charles', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, 'charles', '111.111.111-11', '', '', '', '', '', '', '', '', '', '', '', '', 'charles', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'charles', '111.111.111-11', 'Feminino', '07/11/1991', 'ES', 'jkjk', 'jkjk', 'jkjk', '11', '29290-000', '(28)3533-1821', '(28)9988-5213', 'ffffffffffffffff@dssd', 'ativo', 'charles', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'Edson', '444.444.444-44', 'Feminino', '30/06/2014', 'ES', '1', 'dd', 'sss', '23', '292', '(77)7777-7777', '(22)2222-2222', 'ssss@ww', 'fghfhgf', 'edson', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dente`
--

CREATE TABLE IF NOT EXISTS `dente` (
  `cod_dente` int(10) NOT NULL AUTO_INCREMENT,
  `desc_dente` varchar(40) DEFAULT NULL,
  `numero` varchar(10) NOT NULL,
  `quadrante` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_dente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `dente`
--

INSERT INTO `dente` (`cod_dente`, `desc_dente`, `numero`, `quadrante`, `status`) VALUES
(11, 'Molar superor esquerdo', '1', '2', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista`
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
-- Extraindo dados da tabela `dentista`
--

INSERT INTO `dentista` (`cod_dentista`, `nome_dentista`, `cpf`, `dt`, `sexo`, `sigla_uf`, `cod_cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `celular`, `email`, `status`, `login`, `senha`) VALUES
(3, 'Pedro', '111.111.111-11', '20/10/2011', 'Masculino', 'ES', 1, 'ddd', 'ddd', 11, '29280-000', '(22)2222-2222', '(28)998852139', 'pedro@hotmail.com', 'ativo', 'pedro', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Mateus', '111.111.111-11', 'Feminino', '', '', 0, 'fgh', 'dgh', 21, '29290-000', '(28)9888-9898', '(22)2222-2222', 'matheus@erere', 'ativo', 'mateus', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Luis', '111.111.111-11', 'Feminino', '', '', 0, 'ss', 'ssss', 12, '1212', '(28)3333-3333', '(22)2222-2222', 'luis@fdfd', 'ativo', 'luiz', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `cod_horario` int(11) NOT NULL AUTO_INCREMENT,
  `horario` varchar(5) NOT NULL,
  PRIMARY KEY (`cod_horario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`cod_horario`, `horario`) VALUES
(1, '8:00'),
(2, '8:30'),
(3, '9:00'),
(4, '9:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE IF NOT EXISTS `orcamento` (
  `cod_orcamento` int(10) NOT NULL AUTO_INCREMENT,
  `cod_paciente` int(10) DEFAULT NULL,
  `data` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `cod_tipo_pagamento` int(10) DEFAULT NULL,
  `valorTotal` double DEFAULT NULL,
  `valorFinal` double DEFAULT NULL,
  `desconto` double DEFAULT NULL,
  `entrada` double DEFAULT NULL,
  `baixa` varchar(5) DEFAULT NULL,
  `parcelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_orcamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`cod_orcamento`, `cod_paciente`, `data`, `status`, `cod_tipo_pagamento`, `valorTotal`, `valorFinal`, `desconto`, `entrada`, `baixa`, `parcelas`) VALUES
(1, 88, '02/12/2014', 'fechado', 1, 150.92, 143.374, 0.05, 80, 'baixa', 4),
(2, 107, '15/19/1859', 'andamento', 0, 100.78, 0, 0, 80, 'baixa', 2),
(6, 88, '06/08/2014', 'andamento', 0, 150.92, 150.92, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
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
-- Extraindo dados da tabela `paciente`
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `idServico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `valor` double NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`idServico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`idServico`, `nome`, `valor`, `status`) VALUES
(5, 'plop', 100.78, 'ativo'),
(6, 'limpesa', 50.14, 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico_executado`
--

CREATE TABLE IF NOT EXISTS `servico_executado` (
  `cod_orcamento` int(10) NOT NULL DEFAULT '0',
  `idServico` int(10) NOT NULL DEFAULT '0',
  `cod_dente` int(10) NOT NULL DEFAULT '0',
  `cod_dentista` int(10) DEFAULT NULL,
  PRIMARY KEY (`cod_orcamento`,`idServico`,`cod_dente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico_executado`
--

INSERT INTO `servico_executado` (`cod_orcamento`, `idServico`, `cod_dente`, `cod_dentista`) VALUES
(1, 0, 0, 0),
(1, 5, 11, 3),
(1, 6, 11, 5),
(2, 5, 11, 5),
(3, 5, 11, 4),
(3, 6, 11, 3),
(4, 5, 11, 3),
(6, 5, 11, 3),
(6, 6, 11, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_pagamento`
--

CREATE TABLE IF NOT EXISTS `tipo_pagamento` (
  `cod_tipo_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo_pagamento` varchar(100) NOT NULL,
  `descricao_tipo_pagamento` varchar(200) NOT NULL,
  `status_tipo_pagamento` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_tipo_pagamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipo_pagamento`
--

INSERT INTO `tipo_pagamento` (`cod_tipo_pagamento`, `nome_tipo_pagamento`, `descricao_tipo_pagamento`, `status_tipo_pagamento`) VALUES
(1, 'Dinheiro', 'Dinheiro', 'ativo'),
(2, 'Cheque', 'cheque', 'ativo');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `login`, `senha`) VALUES
(10, 'charles', 'charles', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
