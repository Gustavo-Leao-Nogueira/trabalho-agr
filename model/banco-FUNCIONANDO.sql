-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Dez-2019 às 15:21
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `telefone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `telefone`) VALUES
(6, 'Gustavo LeÃ£o Nogueira de Oliveira', '2147483647'),
(7, 'Brenda', '123456'),
(14, 'Gustavo LeÃ£o Nogueira de Oliveira', '(51) 985309446');

-- --------------------------------------------------------

--
-- Estrutura da tabela `placa`
--

CREATE TABLE `placa` (
  `id` int(11) NOT NULL,
  `altura` float NOT NULL,
  `largura` float NOT NULL,
  `cor_fundo` varchar(150) NOT NULL,
  `cor_texto` varchar(150) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_entrega` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `frase` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `placa`
--

INSERT INTO `placa` (`id`, `altura`, `largura`, `cor_fundo`, `cor_texto`, `id_cliente`, `data_entrega`, `frase`) VALUES
(8, 150, 150, 'branca', 'azul', 6, '2019-12-09 10:03:05', 'lorem'),
(9, 120, 120, 'cinza', 'amarelo', 7, '2019-12-09 10:03:41', 'lorem'),
(10, 150, 150, 'cinza', 'azul', 7, '2019-12-09 10:24:25', 'lorem'),
(11, 120, 120, 'cinza', 'vermelho', 6, '2019-12-09 10:56:44', 'kkkkkkkkkkkkkkkk'),
(12, 500, 180, 'branca', 'azul', 6, '2019-12-09 10:54:52', 'ooooooo'),
(13, 200, 150, 'branca', 'azul', 7, '2019-12-09 11:15:13', 'lorem ipsum'),
(14, 150, 150, 'cinza', 'vermelho', 6, '2019-12-09 11:21:12', 'lorem');

--
-- Acionadores `placa`
--
DELIMITER $$
CREATE TRIGGER `gerarRecibo` AFTER INSERT ON `placa` FOR EACH ROW BEGIN

    declare area float;
    declare custo_material float;
    declare aux float;
    declare custo_desenho float;
    declare valor_placa float;
    declare sinal float;

    set @area = new.altura * new.largura;
    set @custo_material = @area * 147.30;
    set @aux =  length(new.frase);
    set @custo_desenho = @aux * 0.32;
    set @valor_placa = @custo_material + @custo_desenho;
    set @sinal = ROUND(RAND(), 2);

    INSERT INTO recibo(id, data_entrega, valor_placa, valor_sinal, id_placa)
        VALUES(null, new.data_entrega, (SELECT @valor_placa), (SELECT @sinal), new.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recibo`
--

CREATE TABLE `recibo` (
  `id` int(11) NOT NULL,
  `data_entrega` date NOT NULL,
  `valor_placa` float NOT NULL,
  `valor_sinal` float NOT NULL,
  `id_placa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recibo`
--

INSERT INTO `recibo` (`id`, `data_entrega`, `valor_placa`, `valor_sinal`, `id_placa`) VALUES
(7, '2019-12-09', 3314250, 0.52, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placa`
--
ALTER TABLE `placa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cliente_placa` (`id_cliente`);

--
-- Indexes for table `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_placa_recibo` (`id_placa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `placa`
--
ALTER TABLE `placa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `recibo`
--
ALTER TABLE `recibo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `placa`
--
ALTER TABLE `placa`
  ADD CONSTRAINT `fk_cliente_placa` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Limitadores para a tabela `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `fk_placa_recibo` FOREIGN KEY (`id_placa`) REFERENCES `placa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
