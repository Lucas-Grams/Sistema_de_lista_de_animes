-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jan-2023 às 14:59
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `animes`
--
CREATE DATABASE IF NOT EXISTS `animes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `animes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `myanimes`
--

DROP TABLE IF EXISTS `myanimes`;
CREATE TABLE `myanimes` (
  `id_anime` int(11) NOT NULL,
  `name_anime` varchar(40) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `qtd_ep` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `myanimes`
--

INSERT INTO `myanimes` (`id_anime`, `name_anime`, `id_user`, `qtd_ep`) VALUES
(1, 'Naruto Shippuden', 1, '500 Episódios'),
(2, 'Naruto Clássico', 1, '220 Episódios'),
(3, 'Mirai Nikki', 1, '25 Episódios'),
(4, 'Nanatsu no Taizai', 1, '24 Episódios');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `name_user` varchar(40) NOT NULL,
  `password_user` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `password_user`) VALUES
(1, 'teste', '2e6f9b0d5885b6010f9167787445617f553a735f');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `myanimes`
--
ALTER TABLE `myanimes`
  ADD PRIMARY KEY (`id_anime`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `myanimes`
--
ALTER TABLE `myanimes`
  MODIFY `id_anime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `myanimes`
--
ALTER TABLE `myanimes`
  ADD CONSTRAINT `myanimes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
