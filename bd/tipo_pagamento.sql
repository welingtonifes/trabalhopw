-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 31/07/2014 às 13:49
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
-- Estrutura para tabela `tipo_pagamento`
--

CREATE TABLE IF NOT EXISTS `tipo_pagamento` (
  `cod_tipo_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo_pagamento` varchar(100) NOT NULL,
  `descricao_tipo_pagamento` varchar(200) NOT NULL,
  `status_tipo_pagamento` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_tipo_pagamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `tipo_pagamento`
--

INSERT INTO `tipo_pagamento` (`cod_tipo_pagamento`, `nome_tipo_pagamento`, `descricao_tipo_pagamento`, `status_tipo_pagamento`) VALUES
(1, 'kjhjk', 'kjhjkh', 'ativo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
