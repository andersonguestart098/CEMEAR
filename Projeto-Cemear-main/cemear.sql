-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07-Fev-2023 às 18:08
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
-- Banco de dados: `cemear`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro`
--

CREATE TABLE `financeiro` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `vendedor` varchar(2555) NOT NULL,
  `numero_pedido` int(11) DEFAULT NULL,
  `cliente` varchar(2555) NOT NULL,
  `tipo_faturamento` varchar(2555) NOT NULL,
  `valor` float NOT NULL,
  `parcela` int(11) DEFAULT NULL,
  `venda_frete` varchar(255) DEFAULT NULL,
  `retirado_entrega` varchar(255) NOT NULL,
  `frete_conta` varchar(255) NOT NULL,
  `entrega_cadastro` varchar(255) NOT NULL,
  `local_cobrado` varchar(255) NOT NULL,
  `obeservacao` text DEFAULT NULL,
  `tipo_frete` varchar(2555) NOT NULL,
  `valor_frete` int(11) DEFAULT NULL,
  `data_entrega` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `financeiro`
--

INSERT INTO `financeiro` (`id`, `data`, `vendedor`, `numero_pedido`, `cliente`, `tipo_faturamento`, `valor`, `parcela`, `venda_frete`, `retirado_entrega`, `frete_conta`, `entrega_cadastro`, `local_cobrado`, `obeservacao`, `tipo_frete`, `valor_frete`, `data_entrega`) VALUES
(1, '2023-02-02 16:02:49', 'caio castro', 666, 'botequinho', 'a que cobtra', 150.5, NULL, 'sim', 'retitada', 'não', 'sim', '', 'turruurrururu', 'sudo /opt/lampp/manager-linux-x64.run', 150, '2023-02-23 15:59:32'),
(2, '2023-02-02 16:02:49', 'caio', NULL, '', 'tryreyrt', 4521, NULL, NULL, '', '', '', '', NULL, '', NULL, '2023-02-02 21:59:32');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `financeiro`
--
ALTER TABLE `financeiro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `financeiro`
--
ALTER TABLE `financeiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
