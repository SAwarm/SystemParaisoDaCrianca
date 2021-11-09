-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2021 às 20:30
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `spc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `datanasc` date NOT NULL,
  `datadeingresso` date NOT NULL,
  `medicamento` varchar(150) DEFAULT NULL,
  `foto` varchar(70) NOT NULL,
  `doctos` int(11) NOT NULL,
  `genero` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `endereco` int(11) NOT NULL,
  `restalimentar` int(11) NOT NULL,
  `doencaspre` int(11) NOT NULL,
  `tipo_sang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cod`, `nome`, `datanasc`, `datadeingresso`, `medicamento`, `foto`, `doctos`, `genero`, `turma`, `endereco`, `restalimentar`, `doencaspre`, `tipo_sang`) VALUES
(1, 'jonas_aluno', '2002-02-23', '2018-10-10', NULL, 'aaa', 1, 1, 1, 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargah`
--

CREATE TABLE `cargah` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL DEFAULT '6h/dia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargah`
--

INSERT INTO `cargah` (`cod`, `descricao`) VALUES
(1, '6h/dia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cei`
--

CREATE TABLE `cei` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL DEFAULT 'Centro de Educação Infantil Paraíso da Criança',
  `CNPJ` char(14) NOT NULL DEFAULT '11273757000175',
  `datadeingresso` date NOT NULL,
  `email` varchar(100) DEFAULT 'centroparaisodacriança@gmail.com',
  `obs` varchar(300) DEFAULT NULL,
  `n_diretor` varchar(50) NOT NULL,
  `endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cei`
--

INSERT INTO `cei` (`cod`, `descricao`, `CNPJ`, `datadeingresso`, `email`, `obs`, `n_diretor`, `endereco`) VALUES
(1, 'Centro de Educação Infantil Paraíso da Criança', '11273757000175', '2018-10-10', 'centroparaisodacriança@gmail.com', NULL, 'Diretor Jonas', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doctos`
--

CREATE TABLE `doctos` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `CPF` char(11) NOT NULL,
  `RG` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doctos`
--

INSERT INTO `doctos` (`cod`, `descricao`, `CPF`, `RG`) VALUES
(1, 'DOCUMENTO ALUNO TESTE', '00000000000', '0000000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doencaspre`
--

CREATE TABLE `doencaspre` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doencaspre`
--

INSERT INTO `doencaspre` (`cod`, `descricao`) VALUES
(1, 'herpes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `cod` int(11) NOT NULL,
  `estado` char(2) NOT NULL DEFAULT 'SC',
  `municipio` char(7) NOT NULL DEFAULT 'Sombrio',
  `bairro` char(19) NOT NULL DEFAULT 'Nova Brasília',
  `rua` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(24) NOT NULL DEFAULT 'Casa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`cod`, `estado`, `municipio`, `bairro`, `rua`, `numero`, `complemento`) VALUES
(1, 'SC', 'Sombrio', 'Nova Brasília', 'rua teste', 200, 'Casa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao`
--

CREATE TABLE `formacao` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formacao`
--

INSERT INTO `formacao` (`cod`, `descricao`) VALUES
(1, 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE `funcao` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL DEFAULT 'Auxiliar de Ensino'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`cod`, `descricao`) VALUES
(1, 'Auxiliar'),
(2, 'Coordenador'),
(3, 'Professor'),
(4, 'Responsável');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `datanasc` date NOT NULL,
  `datadeingresso` date NOT NULL,
  `foto` varchar(70) NOT NULL,
  `obs` varchar(300) DEFAULT NULL,
  `doctos` int(11) NOT NULL,
  `genero` int(11) NOT NULL,
  `endereco` int(11) NOT NULL,
  `funcao` int(11) NOT NULL,
  `cargah` int(11) NOT NULL,
  `formacao` int(11) NOT NULL,
  `restalimentar` int(11) NOT NULL,
  `doencaspre` int(11) NOT NULL,
  `tipo_sang` int(11) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod`, `nome`, `email`, `datanasc`, `datadeingresso`, `foto`, `obs`, `doctos`, `genero`, `endereco`, `funcao`, `cargah`, `formacao`, `restalimentar`, `doencaspre`, `tipo_sang`, `senha`) VALUES
(1, 'jonas', 'jonas@gmail.com', '2002-02-23', '2018-08-10', 'aaa', NULL, 1, 1, 1, 2, 1, 1, 1, 1, 1, '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `cod` int(11) NOT NULL,
  `descricao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`cod`, `descricao`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `cod` int(11) NOT NULL,
  `nota` float NOT NULL,
  `cod_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parentesco`
--

CREATE TABLE `parentesco` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `parentesco`
--

INSERT INTO `parentesco` (`cod`, `descricao`) VALUES
(1, 'Irmão do seu zé');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `datanasc` date NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `localtrab` varchar(100) DEFAULT NULL,
  `foto` varchar(70) NOT NULL,
  `doctos` int(11) NOT NULL,
  `genero` int(11) NOT NULL,
  `endereco` int(11) NOT NULL,
  `parentesco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`cod`, `nome`, `datanasc`, `email`, `localtrab`, `foto`, `doctos`, `genero`, `endereco`, `parentesco`) VALUES
(1, 'jonas_responsável', '2002-02-23', 'jonas@teste.com', NULL, 'aaa', 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `restalimentar`
--

CREATE TABLE `restalimentar` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `restalimentar`
--

INSERT INTO `restalimentar` (`cod`, `descricao`) VALUES
(1, 'ARROZ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `cod` int(11) NOT NULL,
  `numero` int(13) NOT NULL,
  `CEI` int(11) NOT NULL,
  `Funcionario` int(11) NOT NULL,
  `Responsavel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_sang`
--

CREATE TABLE `tipo_sang` (
  `cod` int(11) NOT NULL,
  `descricao` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_sang`
--

INSERT INTO `tipo_sang` (`cod`, `descricao`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'AB+'),
(6, 'AB-'),
(7, 'O+'),
(8, 'O-');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `cod` int(11) NOT NULL,
  `descricao` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`cod`, `descricao`) VALUES
(1, 'turma 1 B');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `doctos` (`doctos`),
  ADD KEY `genero` (`genero`),
  ADD KEY `turma` (`turma`),
  ADD KEY `endereco` (`endereco`),
  ADD KEY `restalimentar` (`restalimentar`),
  ADD KEY `doencaspre` (`doencaspre`),
  ADD KEY `tipo_sang` (`tipo_sang`);

--
-- Índices para tabela `cargah`
--
ALTER TABLE `cargah`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `cei`
--
ALTER TABLE `cei`
  ADD PRIMARY KEY (`cod`),
  ADD UNIQUE KEY `descricao` (`descricao`),
  ADD UNIQUE KEY `CNPJ` (`CNPJ`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `endereco` (`endereco`);

--
-- Índices para tabela `doctos`
--
ALTER TABLE `doctos`
  ADD PRIMARY KEY (`cod`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD UNIQUE KEY `RG` (`RG`);

--
-- Índices para tabela `doencaspre`
--
ALTER TABLE `doencaspre`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `formacao`
--
ALTER TABLE `formacao`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `funcao`
--
ALTER TABLE `funcao`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `doctos` (`doctos`),
  ADD KEY `genero` (`genero`),
  ADD KEY `funcao` (`funcao`),
  ADD KEY `formacao` (`formacao`),
  ADD KEY `cargah` (`cargah`),
  ADD KEY `endereco` (`endereco`),
  ADD KEY `restalimentar` (`restalimentar`),
  ADD KEY `doencaspre` (`doencaspre`),
  ADD KEY `tipo_sang` (`tipo_sang`);

--
-- Índices para tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `FK_aluno` (`cod_aluno`);

--
-- Índices para tabela `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `doctos` (`doctos`),
  ADD KEY `genero` (`genero`),
  ADD KEY `endereco` (`endereco`),
  ADD KEY `parentesco` (`parentesco`);

--
-- Índices para tabela `restalimentar`
--
ALTER TABLE `restalimentar`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `CEI` (`CEI`),
  ADD KEY `Funcionario` (`Funcionario`),
  ADD KEY `Responsavel` (`Responsavel`);

--
-- Índices para tabela `tipo_sang`
--
ALTER TABLE `tipo_sang`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cargah`
--
ALTER TABLE `cargah`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cei`
--
ALTER TABLE `cei`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `doctos`
--
ALTER TABLE `doctos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `doencaspre`
--
ALTER TABLE `doencaspre`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `formacao`
--
ALTER TABLE `formacao`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcao`
--
ALTER TABLE `funcao`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `restalimentar`
--
ALTER TABLE `restalimentar`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_sang`
--
ALTER TABLE `tipo_sang`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`doctos`) REFERENCES `doctos` (`cod`),
  ADD CONSTRAINT `aluno_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `genero` (`cod`),
  ADD CONSTRAINT `aluno_ibfk_3` FOREIGN KEY (`turma`) REFERENCES `turma` (`cod`),
  ADD CONSTRAINT `aluno_ibfk_4` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`cod`),
  ADD CONSTRAINT `aluno_ibfk_5` FOREIGN KEY (`restalimentar`) REFERENCES `restalimentar` (`cod`),
  ADD CONSTRAINT `aluno_ibfk_6` FOREIGN KEY (`doencaspre`) REFERENCES `doencaspre` (`cod`),
  ADD CONSTRAINT `aluno_ibfk_7` FOREIGN KEY (`tipo_sang`) REFERENCES `tipo_sang` (`cod`);

--
-- Limitadores para a tabela `cei`
--
ALTER TABLE `cei`
  ADD CONSTRAINT `cei_ibfk_1` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`cod`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`doctos`) REFERENCES `doctos` (`cod`),
  ADD CONSTRAINT `funcionario_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `genero` (`cod`),
  ADD CONSTRAINT `funcionario_ibfk_3` FOREIGN KEY (`funcao`) REFERENCES `funcao` (`cod`),
  ADD CONSTRAINT `funcionario_ibfk_4` FOREIGN KEY (`formacao`) REFERENCES `formacao` (`cod`),
  ADD CONSTRAINT `funcionario_ibfk_5` FOREIGN KEY (`cargah`) REFERENCES `cargah` (`cod`),
  ADD CONSTRAINT `funcionario_ibfk_6` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`cod`),
  ADD CONSTRAINT `funcionario_ibfk_7` FOREIGN KEY (`restalimentar`) REFERENCES `restalimentar` (`cod`),
  ADD CONSTRAINT `funcionario_ibfk_8` FOREIGN KEY (`doencaspre`) REFERENCES `doencaspre` (`cod`),
  ADD CONSTRAINT `funcionario_ibfk_9` FOREIGN KEY (`tipo_sang`) REFERENCES `tipo_sang` (`cod`);

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `FK_aluno` FOREIGN KEY (`cod_aluno`) REFERENCES `aluno` (`cod`);

--
-- Limitadores para a tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `responsavel_ibfk_1` FOREIGN KEY (`doctos`) REFERENCES `doctos` (`cod`),
  ADD CONSTRAINT `responsavel_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `genero` (`cod`),
  ADD CONSTRAINT `responsavel_ibfk_3` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`cod`),
  ADD CONSTRAINT `responsavel_ibfk_4` FOREIGN KEY (`parentesco`) REFERENCES `parentesco` (`cod`);

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `telefone_ibfk_1` FOREIGN KEY (`CEI`) REFERENCES `cei` (`cod`),
  ADD CONSTRAINT `telefone_ibfk_2` FOREIGN KEY (`Funcionario`) REFERENCES `funcionario` (`cod`),
  ADD CONSTRAINT `telefone_ibfk_3` FOREIGN KEY (`Responsavel`) REFERENCES `responsavel` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
