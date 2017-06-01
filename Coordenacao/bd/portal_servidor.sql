-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2017 às 12:52
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_servidor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_disciplina`
--

CREATE TABLE `ps_disciplina` (
  `dis_id` int(11) NOT NULL,
  `dis_titulo` varchar(50) DEFAULT NULL,
  `dis_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_reg_falta`
--

CREATE TABLE `ps_reg_falta` (
  `reg_id` int(11) NOT NULL,
  `reg_horario` datetime NOT NULL,
  `reg_solicitante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_user`
--

CREATE TABLE `ps_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_matricula` varchar(15) NOT NULL,
  `user_tipo` enum('aluno','professor','funcionario') NOT NULL,
  CONSTRAINT `user_pk` PRIMARY KEY (`user_id`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ps_disciplina`
--
ALTER TABLE `ps_disciplina`
  ADD PRIMARY KEY (`dis_id`),
  ADD KEY `dis_professor_fk` (`dis_professor`);

--
-- Indexes for table `ps_reg_falta`
--
ALTER TABLE `ps_reg_falta`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `reg_solicitante_fk` (`reg_solicitante`);

--
-- Indexes for table `ps_user`
--
ALTER TABLE `ps_user`
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_matricula` (`user_matricula`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ps_disciplina`
--
ALTER TABLE `ps_disciplina`
  ADD CONSTRAINT `dis_professor_fk` FOREIGN KEY (`dis_professor`) REFERENCES `ps_user` (`user_id`);

--
-- Limitadores para a tabela `ps_reg_falta`
--
ALTER TABLE `ps_reg_falta`
  ADD CONSTRAINT `reg_solicitante_fk` FOREIGN KEY (`reg_solicitante`) REFERENCES `ps_user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
