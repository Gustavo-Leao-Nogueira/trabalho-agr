-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2019 às 09:37
-- Versão do servidor: 10.4.10-MariaDB
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
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `quantidade_total` smallint(6) NOT NULL,
  `quantidade_recebida` smallint(6) NOT NULL,
  `data_atualizacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `telefone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `data_contratacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `data_contratacao`) VALUES
(4, 'Gustavo Leão', '2019-12-10 01:11:28'),
(6, 'teste lorem', '2019-12-10 02:29:46'),
(7, 'saDSA', '2019-12-10 04:54:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `ano_publicacao` smallint(6) NOT NULL,
  `edicao` smallint(6) NOT NULL,
  `editora` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD KEY `fk_livro_estoque` (`id_livro`),
  ADD KEY `fk_funcionario_estoque` (`id_funcionario`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fornecedor_livro` (`id_fornecedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `fk_funcionario_estoque` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`id`),
  ADD CONSTRAINT `fk_livro_estoque` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id`);

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `fk_fornecedor_livro` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
