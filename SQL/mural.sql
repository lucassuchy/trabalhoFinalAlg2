-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2019 às 15:59
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mural`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(2, 'Mural'),
(3, 'Resoluções da Faculdade de Direito'),
(4, 'Programa de mobilidade Acadêmica'),
(5, 'Ensino/Monitoria'),
(6, 'Pesquisa'),
(7, 'Grupo de Estudos'),
(8, 'Grupo de Estudos - Graduação'),
(9, 'Prática Jurídica - Prática Jurídica Estag. Obrigatório'),
(10, 'TCC - Trabalho de Conclusão e Bancas de Defesa'),
(11, 'Informações a Formandos'),
(12, 'Centro Acadêmico'),
(13, 'Estágio'),
(14, 'Outras Informações');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `id` int(5) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `caminho` varchar(60) NOT NULL,
  `novo` tinyint(1) DEFAULT NULL,
  `cod_categoria` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id`, `nome`, `caminho`, `novo`, `cod_categoria`) VALUES
(2, '', '', 0, 0),
(3, 'lucas', 'a', 0, 0),
(4, 'lucas', 'a', 0, 0),
(5, 'lucas', 'a', 0, 0),
(6, '', '', 0, 0),
(7, 'a', 'a', 0, 0),
(8, 'Agora sim', 'pasta', 0, 0),
(9, 'a', 'f', 0, 0),
(10, 'v', 'b', 0, 0),
(11, '', '', 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD CONSTRAINT `fk_categorias` FOREIGN KEY (`cod_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
