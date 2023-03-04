-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Mar-2023 às 02:06
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_perfil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_perfil`
--

CREATE TABLE `t_perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `fundo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `t_perfil`
--

INSERT INTO `t_perfil` (`id`, `nome`, `email`, `profissao`, `descricao`, `instagram`, `twitter`, `facebook`, `linkedin`, `youtube`, `senha`, `foto`, `fundo`) VALUES
(1, 'Claudine', 'claudineroberto@hotmail.com', 'Web Designer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet nibh in leo fringilla gravida. Quisque in porta tortor. Pellentesque sit amet ullamcorper turpis, ut dapibus mi. Mauris fringilla, leo non hendrerit consequat, augue nunc consectetur erat, nec dignissim libero urna finibus tortor. Mauris id pretium sapien. Praesent ultricies sapien nec varius feugiat. Aenean in lorem eu libero pulvinar feugiat. Nam aliquet nunc id eros sagittis placerat. Etiam eu laoreet arcu, sed sagittis turpis. Aenean eu tristique elit, aliquet posuere felis. Integer euismod purus sit amet vehicula cursus. Aliquam eget sodales libero, non gra', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', '1234', 'https://th.bing.com/th/id/OIP.j6UpO_LOyndmVzfZl4g1HgHaDt?pid=ImgDet&rs=1', 'https://png.pngtree.com/58pic/32/50/24/84m58PICq1QR4HVMhy9mr_PIC2018.jpg'),
(15, 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa@aaaaaaaaaaaaaaaaaaa.com', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', '1677891516.jpg', 'img/fundo01.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_perfil`
--
ALTER TABLE `t_perfil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_perfil`
--
ALTER TABLE `t_perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
