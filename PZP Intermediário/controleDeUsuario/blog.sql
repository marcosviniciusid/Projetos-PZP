-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Abr-2019 às 19:50
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Marcos Vinicius', 'marcos.vinicius@hotmail.com', '698dc19d489c4e4db73e28a713eab07b'),
(2, 'Vinicius', 'vinicius@hotmail.com', '7fa81ff5e6a88a34ca2392240268c68f'),
(3, 'Sara', 'sara@icloud.com', '5bd537fc3789b5482e4936968f0fde95'),
(5, 'Thiago', 'thiago@gmail.com', 'ff64a1c43498d955147518733ac88c7c'),
(6, 'Elisangela', 'elisangela@hotmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Raimundo', 'raimundo@gmail.com', '6c1d7eb46fbce05530711dd98bb98ecc'),
(8, 'Gisele', 'gisele.email@gmail.com', 'b8798f33667adcd2b537e1df049dbd2a'),
(9, 'AgÃªncia Developer', 'contato@agenciadeveloper.com', 'dc931e7f285cd73a459bd7744a809209'),
(10, 'MVM InformÃ¡tica', 'mvminformatica10@gmail.com', '44b229cd95ebc87e93a372d769ad4f83'),
(11, 'MVM MÃºsica', 'mvmmusica2016@gmail.com', 'a4bd8e912ab52b31c9c671fa4f0b7ee7'),
(12, 'Brenda', 'brenda.raimunda@hotmail.com', '13d75ed1ec24f001ed56d14b07775383'),
(13, 'Bonieky Lacerda', 'bonieky.lacerda@b7web.com.br', 'a70cb4e8efa344cd1a430678b2e05ca5'),
(15, 'B7web', 'suporte@b7web.com', '334c0cc2fcb4c18c0258837e985375f4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
