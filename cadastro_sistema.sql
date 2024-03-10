-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/11/2023 às 23:26
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_sistema`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `celulares`
--

CREATE TABLE `celulares` (
  `cod_cel` int(11) NOT NULL,
  `marca_cel` varchar(45) NOT NULL,
  `modelo_cel` varchar(45) NOT NULL,
  `foto_cel` varchar(100) NOT NULL,
  `preco_cel` decimal(7,0) NOT NULL,
  `qtd_cel` int(11) NOT NULL,
  `descricao_cel` varchar(200) NOT NULL,
  `status_cel` varchar(45) NOT NULL DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `celulares`
--

INSERT INTO `celulares` (`cod_cel`, `marca_cel`, `modelo_cel`, `foto_cel`, `preco_cel`, `qtd_cel`, `descricao_cel`, `status_cel`) VALUES
(1, 'iphone', 'promax13', 'img/iphone13Pro.jpg', 3000, 8, 'teste1234', 'ativo'),
(2, 'outros', 'teste 2', '', 3500, 3, 'teste123456', 'ativo'),
(4, 'teste3', 'teste3', '', 0, 20, 'teste3', 'inativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `COD_FUN` int(4) NOT NULL,
  `NOME_FUN` varchar(45) NOT NULL,
  `LOGIN_FUN` varchar(45) NOT NULL,
  `SENHA_FUN` varchar(45) NOT NULL,
  `CPF_FUN` varchar(25) NOT NULL,
  `TELEFONE_FUN` varchar(20) NOT NULL,
  `EMAIL_FUN` varchar(50) NOT NULL,
  `FUNCAO_FUN` varchar(45) NOT NULL,
  `STATUS_FUN` varchar(45) NOT NULL DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`COD_FUN`, `NOME_FUN`, `LOGIN_FUN`, `SENHA_FUN`, `CPF_FUN`, `TELEFONE_FUN`, `EMAIL_FUN`, `FUNCAO_FUN`, `STATUS_FUN`) VALUES
(1, 'Administrador', 'admin', '2', '000000000000', '00000000000000', 'teste@teste', 'administrador', 'ativo'),
(2, 'Carlos da Silva', 'carlos', '123', '000000000000000', 'teste@teste', '999999999999999999', 'subgerente', 'ativo'),
(3, 'João de Almeida', 'joao', '123', '0000000000000000', '66666666666666666', 'teste@teste', 'gerente', 'ativo'),
(5, 'juliana', 'ju', '123', '000000000000000000', 'teste@teste', '000000000000000', 'estoquista', 'inativo'),
(6, 'Paulo Costa', 'paulo', '123', '888888888888888888', '77777777777777777', 'teste@teste', 'estoquista', 'ativo'),
(7, 'teste', 'teste', '123', '11111111111111111111', '0000000000000000', 'juan.crispi@cscharpia.com.br', 'subgerente', 'ativo'),
(8, 'teste 3', 'teste3', '123', '0000000000000000', '333333333333333', 'teste@teste', 'estoquista', 'ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `celulares`
--
ALTER TABLE `celulares`
  ADD PRIMARY KEY (`cod_cel`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`COD_FUN`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `celulares`
--
ALTER TABLE `celulares`
  MODIFY `cod_cel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `COD_FUN` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
