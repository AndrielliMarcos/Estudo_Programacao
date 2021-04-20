-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Set-2020 às 07:53
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_estagio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `celular` int(15) NOT NULL,
  `ativo` enum('s','n') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `endereco`, `celular`, `ativo`) VALUES
(5, 'Andrielli', 11122233, 'Rua x, 00 ', 900000000, 'n'),
(6, 'Maria', 2147483647, 'Rua A, 101', 2147483647, 'n'),
(7, 'Andrielli Andrielli', 88888888, 'Rua x, 00 ', 900000000, 's'),
(8, 'Bia', 2147483647, 'Rua xx, 01', 940000000, 's'),
(9, 'Mario', 2147483647, 'Rua x, 00 ', 900000000, 'n'),
(10, 'Carlos', 2147483647, 'Rua x, 00 ', 545677543, 's'),
(11, 'José', 654876543, 'Rua x, 00 ', 900000000, 's'),
(12, 'Vitor', 2147483647, 'Rua xx, 11', 940000000, 's'),
(13, 'Aparecida', 11122233, 'Rua x, 00 ', 940000000, 'n');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
