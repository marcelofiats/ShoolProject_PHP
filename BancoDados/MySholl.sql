-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26-Set-2020 às 15:21
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id10669680_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_adm` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Nascimento` date NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `Cargo` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_adm`, `Nome`, `Nascimento`, `usuario`, `senha`, `Cargo`) VALUES
(2, 'Marcelo Fiats da Silva', '1987-02-19', 'marcelo.fiats', '870219', 'desenvolvedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `CEP` varchar(10) DEFAULT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `curso` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `senha` varbinary(10) DEFAULT '123456'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `nascimento`, `email`, `CEP`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `complemento`, `curso`, `usuario`, `senha`) VALUES
(5, 'Victor Teixeira', '2009-08-25', '', '13460-000', 'Rua do nascimento', 455, 'Jd conceição', 'Americana', 'SP', '', 'ensino medio', 'teixeira', 0x313233343536),
(6, 'Andre vasconcelos', '2009-04-16', '', '13460-000', 'Rua Carlos Andrade', 1455, 'Jd conceição', 'Americana', 'SP', 'ap 105', 'ensino medio', 'vasconcelos', 0x313233343536);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professos`
--

CREATE TABLE `professos` (
  `id_professor` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Nascimento` varchar(30) NOT NULL,
  `Materia` varchar(30) DEFAULT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` int(11) DEFAULT 1234
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Índices para tabela `professos`
--
ALTER TABLE `professos`
  ADD PRIMARY KEY (`id_professor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `professos`
--
ALTER TABLE `professos`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
