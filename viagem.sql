-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Set-2022 às 21:39
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `viagem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_viagem`
--

CREATE TABLE `dados_viagem` (
  `Modelo` varchar(100) NOT NULL,
  `Placa` varchar(7) NOT NULL,
  `Motorista` varchar(100) NOT NULL,
  `Origem` varchar(100) NOT NULL,
  `Destino` varchar(100) NOT NULL,
  `Km_percorrido` varchar(11) NOT NULL,
  `Litros_gasto` varchar(11) NOT NULL,
  `Preco_combustivel` text NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados_viagem`
--

INSERT INTO `dados_viagem` (`Modelo`, `Placa`, `Motorista`, `Origem`, `Destino`, `Km_percorrido`, `Litros_gasto`, `Preco_combustivel`, `codigo`) VALUES
('polo 2012', 'OHR20B', 'Camila', 'Laurentino', 'Deserto do Atacama', '3', '50', '5', 1),
('polo 2012', 'OHR20B', 'Camila', 'Laurentino', 'Deserto do Atacama', '3', '50', '5', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados_viagem`
--
ALTER TABLE `dados_viagem`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_viagem`
--
ALTER TABLE `dados_viagem`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
