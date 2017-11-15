-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2017 às 11:30
-- Versão do servidor: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nasfazendas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio`
--

CREATE TABLE IF NOT EXISTS `anuncio` (
  `anuncio_id` int(11) NOT NULL,
  `anuncio_titulo` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `anuncio_desc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `anuncio_valor` float DEFAULT NULL,
  `anuncio_datainicial` date DEFAULT NULL,
  `anuncio_datafinal` date DEFAULT NULL,
  `anuncio_msg` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `anuncio_formPag` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `usuario_usu_id` int(11) NOT NULL,
  `categoria_categoria_id` int(11) NOT NULL,
  `tipo_anuncio_tipo_anuncio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nome` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `id_pai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nome`, `id_pai`) VALUES
(4, 'Maquinário', 0),
(5, 'Trator de esteira', 4),
(6, 'Fertilizante', 0),
(7, 'Fertilizante Mineral', 6),
(8, 'Colheitadera', 4),
(9, 'Semeadora', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `endereco_id` int(11) NOT NULL,
  `endereco_rua` varchar(225) COLLATE latin1_general_ci DEFAULT NULL,
  `endereco_cep` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `endereco_numero` int(11) DEFAULT NULL,
  `endereco_comp` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `usuario_usu_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`endereco_id`, `endereco_rua`, `endereco_cep`, `endereco_numero`, `endereco_comp`, `usuario_usu_id`) VALUES
(1, '', '89809-602', 0, 'usu_complemento', 5),
(2, 'Palmitos', '89809-602', 201, 'usu_complemento', 6),
(3, 'Palmitos', '89809-602', 12312, 'usu_complemento', 7),
(4, 'Centro', '98400-000', 123, 'usu_complemento', 10),
(5, 'centro', '89809-602', 123, 'usu_complemento', 11),
(6, 'Palmitos', '89809-602', 201, 'usu_complemento', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `img_produto`
--

CREATE TABLE IF NOT EXISTS `img_produto` (
  `img_id` int(11) NOT NULL,
  `img_nome` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `img_dir` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `anuncio_anuncio_id` int(11) NOT NULL,
  `anuncio_usuario_usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagseguro`
--

CREATE TABLE IF NOT EXISTS `pagseguro` (
  `pagseguro_id` int(11) NOT NULL,
  `pagseguro_tipo` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `anuncio_anuncio_id` int(11) NOT NULL,
  `anuncio_usuario_usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_fisica`
--

CREATE TABLE IF NOT EXISTS `pessoa_fisica` (
  `pessoaFisica_cpf` int(11) NOT NULL,
  `pessoaFisica_nome` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `usuario_usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `pessoa_fisica`
--

INSERT INTO `pessoa_fisica` (`pessoaFisica_cpf`, `pessoaFisica_nome`, `usuario_usu_id`) VALUES
(0, 'Furtado', 5),
(0, 'Furtado', 6),
(9664, 'Bruno Furtado Fontana', 7),
(9664, 'Bruno', 11),
(9664, 'Furtado', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_jur`
--

CREATE TABLE IF NOT EXISTS `pessoa_jur` (
  `pessoaJur_cnpj` int(11) NOT NULL,
  `pessoa_jur_nomeFantasia` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `usuario_usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `pessoa_jur`
--

INSERT INTO `pessoa_jur` (`pessoaJur_cnpj`, `pessoa_jur_nomeFantasia`, `usuario_usu_id`) VALUES
(28263, 'Sucrilhos', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualificar`
--

CREATE TABLE IF NOT EXISTS `qualificar` (
  `qualificar_id` int(11) NOT NULL,
  `qualificar_negociacao` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `qualificar_anuncio` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `qualificar_msg` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `anuncio_anuncio_id` int(11) NOT NULL,
  `anuncio_usuario_usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_anuncio`
--

CREATE TABLE IF NOT EXISTS `tipo_anuncio` (
  `tipo_anuncio_id` int(11) NOT NULL,
  `tipo_anuncio_nivel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tipo_anuncio_valor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `usu_foneCel` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `usu_foneCom` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `privilegio` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `usu_senha` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_email`, `usu_foneCel`, `usu_foneCom`, `privilegio`, `usu_senha`) VALUES
(5, 'brunofurtado86@hotmail.com', '(49)98825-8012', '34132535341325', '', '4297f44b13955235245b2497399d7a93'),
(6, 'brunofurtado86@hotmail.com', '(49)98825-8012', '34132535341325', '', '4297f44b13955235245b2497399d7a93'),
(7, 'brunofurtadoxd@gmail.com', '(49)98825-8012', '34132535341325', '', '4297f44b13955235245b2497399d7a93'),
(10, 'judi-adm@unochapeco.edu.br', '(49)98825-8012', '(49)3222-2221', '', '4297f44b13955235245b2497399d7a93'),
(11, 'bruno.fontana@edu.sc.senai.br', '123123', '123123', 'ADMIN', '1caa7be920500be9ce798b0ca6ae85bf'),
(12, 'furtado@hotmail.com', '(49)98825-8012', '(49)3222-2221', '', '4297f44b13955235245b2497399d7a93');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`anuncio_id`,`usuario_usu_id`),
  ADD KEY `fk_anuncio_usuario1_idx` (`usuario_usu_id`),
  ADD KEY `fk_anuncio_categoria1_idx` (`categoria_categoria_id`),
  ADD KEY `fk_anuncio_tipo_anuncio1_idx` (`tipo_anuncio_tipo_anuncio_id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`endereco_id`,`usuario_usu_id`),
  ADD KEY `fk_endereco_usuario1_idx` (`usuario_usu_id`);

--
-- Indexes for table `img_produto`
--
ALTER TABLE `img_produto`
  ADD PRIMARY KEY (`img_id`,`anuncio_anuncio_id`,`anuncio_usuario_usu_id`),
  ADD KEY `fk_img_produto_anuncio1_idx` (`anuncio_anuncio_id`,`anuncio_usuario_usu_id`);

--
-- Indexes for table `pagseguro`
--
ALTER TABLE `pagseguro`
  ADD PRIMARY KEY (`pagseguro_id`,`anuncio_anuncio_id`,`anuncio_usuario_usu_id`),
  ADD KEY `fk_pagseguro_anuncio1_idx` (`anuncio_anuncio_id`,`anuncio_usuario_usu_id`);

--
-- Indexes for table `pessoa_fisica`
--
ALTER TABLE `pessoa_fisica`
  ADD PRIMARY KEY (`pessoaFisica_cpf`,`usuario_usu_id`),
  ADD KEY `fk_pessoa_fisica_usuario1_idx` (`usuario_usu_id`);

--
-- Indexes for table `pessoa_jur`
--
ALTER TABLE `pessoa_jur`
  ADD PRIMARY KEY (`pessoaJur_cnpj`,`usuario_usu_id`),
  ADD KEY `fk_pessoa_jur_usuario1_idx` (`usuario_usu_id`);

--
-- Indexes for table `qualificar`
--
ALTER TABLE `qualificar`
  ADD PRIMARY KEY (`qualificar_id`,`anuncio_anuncio_id`,`anuncio_usuario_usu_id`),
  ADD KEY `fk_qualificar_anuncio1_idx` (`anuncio_anuncio_id`,`anuncio_usuario_usu_id`);

--
-- Indexes for table `tipo_anuncio`
--
ALTER TABLE `tipo_anuncio`
  ADD PRIMARY KEY (`tipo_anuncio_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `anuncio_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `endereco_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `img_produto`
--
ALTER TABLE `img_produto`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagseguro`
--
ALTER TABLE `pagseguro`
  MODIFY `pagseguro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qualificar`
--
ALTER TABLE `qualificar`
  MODIFY `qualificar_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_anuncio`
--
ALTER TABLE `tipo_anuncio`
  MODIFY `tipo_anuncio_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `fk_anuncio_categoria1` FOREIGN KEY (`categoria_categoria_id`) REFERENCES `categoria` (`categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anuncio_tipo_anuncio1` FOREIGN KEY (`tipo_anuncio_tipo_anuncio_id`) REFERENCES `tipo_anuncio` (`tipo_anuncio_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anuncio_usuario1` FOREIGN KEY (`usuario_usu_id`) REFERENCES `usuario` (`usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_usuario1` FOREIGN KEY (`usuario_usu_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `img_produto`
--
ALTER TABLE `img_produto`
  ADD CONSTRAINT `fk_img_produto_anuncio1` FOREIGN KEY (`anuncio_anuncio_id`, `anuncio_usuario_usu_id`) REFERENCES `anuncio` (`anuncio_id`, `usuario_usu_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pagseguro`
--
ALTER TABLE `pagseguro`
  ADD CONSTRAINT `fk_pagseguro_anuncio1` FOREIGN KEY (`anuncio_anuncio_id`, `anuncio_usuario_usu_id`) REFERENCES `anuncio` (`anuncio_id`, `usuario_usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa_fisica`
--
ALTER TABLE `pessoa_fisica`
  ADD CONSTRAINT `fk_pessoa_fisica_usuario1` FOREIGN KEY (`usuario_usu_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa_jur`
--
ALTER TABLE `pessoa_jur`
  ADD CONSTRAINT `fk_pessoa_jur_usuario1` FOREIGN KEY (`usuario_usu_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `qualificar`
--
ALTER TABLE `qualificar`
  ADD CONSTRAINT `fk_qualificar_anuncio1` FOREIGN KEY (`anuncio_anuncio_id`, `anuncio_usuario_usu_id`) REFERENCES `anuncio` (`anuncio_id`, `usuario_usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
