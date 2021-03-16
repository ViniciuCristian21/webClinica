-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2021 às 20:16
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_webclinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagem`
--

CREATE TABLE `tb_imagem` (
  `imagem_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `imagem_titulo` varchar(250) DEFAULT NULL,
  `imagem_descricao` varchar(250) DEFAULT NULL,
  `imagem_caminho` varchar(250) DEFAULT NULL,
  `imagem_tipo` varchar(250) DEFAULT NULL,
  `imagem_tamanho` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_imagem`
--

INSERT INTO `tb_imagem` (`imagem_id`, `usuario_id`, `imagem_titulo`, `imagem_descricao`, `imagem_caminho`, `imagem_tipo`, `imagem_tamanho`) VALUES
(20, 26, 'teste', 'teste', 'public/images/galeria/76db89c08d98ced3eaeb8c3d74c01836.jpg', 'image/jpeg', '113511'),
(23, 26, 'Teste', 'teste1', 'public/images/galeria/332ea91138ff4a872507d499adbf98ac.jpg', 'image/jpeg', '72050');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_noticia`
--

CREATE TABLE `tb_noticia` (
  `noticia_id` int(11) NOT NULL,
  `noticia_titulo` varchar(250) NOT NULL,
  `noticia_assunto` varchar(250) NOT NULL,
  `noticia_imagem` varchar(250) NOT NULL,
  `noticia_data` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_noticia`
--

INSERT INTO `tb_noticia` (`noticia_id`, `noticia_titulo`, `noticia_assunto`, `noticia_imagem`, `noticia_data`) VALUES
(8, 'Vacina', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum felis nisi, molestie vitae erat ac, vulputate feugiat nunc. In varius auctor odio. Donec eget purus risus. In tincidunt tortor vel magna tristique, non facilisis ex elementum. Fusce ', '', '2021-03-11 00:40:55'),
(9, 'Corona virus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum felis nisi, molestie vitae erat ac, vulputate feugiat nunc. In varius auctor odio. Donec eget purus risus. In tincidunt tortor vel magna tristique, non facilisis ex elementum. Fusce ', '', '2021-03-11 00:51:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(250) DEFAULT NULL,
  `usuario_email` varchar(250) DEFAULT NULL,
  `usuario_senha` varchar(250) DEFAULT NULL,
  `usuario_tipo` varchar(250) DEFAULT NULL,
  `usuario_data` date DEFAULT NULL,
  `usuario_imagem` varchar(250) DEFAULT NULL,
  `usuario_cpf` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_senha`, `usuario_tipo`, `usuario_data`, `usuario_imagem`, `usuario_cpf`) VALUES
(26, 'Adminstrador', 'adm@gmail.com', '12345', 'Administrador', NULL, NULL, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_imagem`
--
ALTER TABLE `tb_imagem`
  ADD PRIMARY KEY (`imagem_id`);

--
-- Índices para tabela `tb_noticia`
--
ALTER TABLE `tb_noticia`
  ADD PRIMARY KEY (`noticia_id`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_imagem`
--
ALTER TABLE `tb_imagem`
  MODIFY `imagem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tb_noticia`
--
ALTER TABLE `tb_noticia`
  MODIFY `noticia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
