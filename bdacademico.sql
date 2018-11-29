-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2018 às 11:02
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdacademico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `id_adm` int(6) NOT NULL,
  `nome_adm` varchar(50) NOT NULL,
  `usuario_adm` varchar(12) NOT NULL,
  `senha_adm` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id_adm`, `nome_adm`, `usuario_adm`, `senha_adm`) VALUES
(1, 'Rodolfo Azevedo', 'rodolfoadm', 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(6) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  `turma` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `turma`) VALUES
(1, 'Rodolfo Azevedo', 10),
(2, 'Joao Pedro', 10),
(3, 'Emerson Cayo', 10),
(4, 'Felipe Nascimento', 10),
(5, 'Aldemar Mendes', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_disciplina`
--

CREATE TABLE `aluno_disciplina` (
  `id_aluno` int(6) NOT NULL,
  `id_disciplina` int(6) NOT NULL,
  `nota` int(11) NOT NULL,
  `faltas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno_disciplina`
--

INSERT INTO `aluno_disciplina` (`id_aluno`, `id_disciplina`, `nota`, `faltas`) VALUES
(1, 1, 10, 4),
(1, 2, 1, 2),
(1, 3, 1, 2),
(1, 4, 1, 2),
(1, 5, 1, 2),
(2, 1, 9, 0),
(2, 2, 0, 0),
(2, 3, 0, 0),
(2, 4, 0, 0),
(2, 5, 0, 0),
(3, 1, 0, 0),
(3, 2, 0, 0),
(3, 3, 0, 0),
(3, 4, 0, 0),
(3, 5, 0, 0),
(4, 1, 0, 0),
(4, 2, 0, 0),
(4, 3, 0, 0),
(4, 4, 0, 0),
(4, 5, 0, 0),
(5, 1, 0, 0),
(5, 2, 0, 0),
(5, 3, 0, 0),
(5, 4, 0, 0),
(5, 5, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(6) NOT NULL,
  `nome_disciplina` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome_disciplina`) VALUES
(1, 'Banco de Dados 2'),
(2, 'Administracao de Redes'),
(3, 'Programacao Para Web'),
(4, 'Qualidade de Software'),
(5, 'Engenharia de Software 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(6) NOT NULL,
  `nome_professor` varchar(100) NOT NULL,
  `id_disciplina` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome_professor`, `id_disciplina`) VALUES
(1, 'Bruno', 1),
(2, 'Marcos Sá', 2),
(3, 'Pedriana', 3),
(4, 'Aline', 4),
(5, 'Frederico', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_disciplina`
--

CREATE TABLE `professor_disciplina` (
  `id_professor` int(6) NOT NULL,
  `id_disciplina` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor_disciplina`
--

INSERT INTO `professor_disciplina` (`id_professor`, `id_disciplina`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(6) NOT NULL,
  `nome_turma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `nome_turma`) VALUES
(10, 'Sistemas de Informação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_aluno`
--

CREATE TABLE `usuarios_aluno` (
  `id_usuario` int(6) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios_aluno`
--

INSERT INTO `usuarios_aluno` (`id_usuario`, `nome_usuario`, `usuario`, `senha`, `email`) VALUES
(1, 'Rodolfo Azevedo', 'rodolfo', '123', 'rodolfo@cest.com'),
(2, 'Joao Pedro', 'joao', '123', 'joao@cest.com'),
(3, 'Emerson Cayo', 'emerson', '123', 'emerson@cest.com'),
(4, 'Felipe Nascimento', 'felipe', '123', 'felipe@cest.com'),
(5, 'Aldemar Mendes', 'aldemar', '123', 'aldemar@cest.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_prof`
--

CREATE TABLE `usuarios_prof` (
  `id_usuario` int(6) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios_prof`
--

INSERT INTO `usuarios_prof` (`id_usuario`, `nome_usuario`, `usuario`, `senha`, `email`) VALUES
(1, 'Bruno', 'profbruno', '123', 'profbruno@cest.com'),
(2, 'Marcos Sá', 'profsa', '123', 'profsa@cest.com'),
(3, 'Pedriana', 'profpedriana', '123', 'profpedriana@cest.com'),
(4, 'Aline', 'profaline', '123', 'profaline@cest.com'),
(5, 'Frederico', 'proffred', '123', 'proffred@cest.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_adm`),
  ADD UNIQUE KEY `usuario_adm` (`usuario_adm`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- Indexes for table `usuarios_aluno`
--
ALTER TABLE `usuarios_aluno`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nome_usuario` (`nome_usuario`);

--
-- Indexes for table `usuarios_prof`
--
ALTER TABLE `usuarios_prof`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nome_usuario` (`nome_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_adm` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
