-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 07:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `mz_catalogo`
--

CREATE TABLE `mz_catalogo` (
  `catlg_id` int(11) NOT NULL,
  `catlg_nome` varchar(250) NOT NULL,
  `catlg_icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mz_catalogo`
--

INSERT INTO `mz_catalogo` (`catlg_id`, `catlg_nome`, `catlg_icon`) VALUES
(1, 'Livro', 'book'),
(2, 'Magazine', 'magazine'),
(3, 'Video', 'video'),
(4, 'Audio Livro', 'audio');

-- --------------------------------------------------------

--
-- Table structure for table `mz_categoria`
--

CREATE TABLE `mz_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(250) NOT NULL,
  `cat_img` varchar(250) NOT NULL,
  `cat_slug` varchar(250) NOT NULL,
  `cat_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mz_categoria`
--

INSERT INTO `mz_categoria` (`cat_id`, `cat_nome`, `cat_img`, `cat_slug`, `cat_link`) VALUES
(1, 'Academicos', '', 'academico', ''),
(2, 'Infantis', '', 'infantil', ''),
(3, 'Adolescentes', '', 'adolescentes', ''),
(4, 'Romance', '', 'Romance', ''),
(5, 'Terror', '', 'Terror', ''),
(6, 'Adultos', '', 'adultos', '');

-- --------------------------------------------------------

--
-- Table structure for table `mz_contacto`
--

CREATE TABLE `mz_contacto` (
  `id` int(11) NOT NULL,
  `mensagem` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `apelido` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mz_livro`
--

CREATE TABLE `mz_livro` (
  `livro_id` int(11) NOT NULL,
  `livro_titulo` varchar(250) NOT NULL,
  `livro_autor` varchar(250) NOT NULL,
  `livro_ISBN` varchar(250) NOT NULL,
  `livro_prologo` text NOT NULL,
  `livro_cat` int(11) NOT NULL,
  `livro_img` varchar(250) NOT NULL,
  `livro_catalogo` int(11) NOT NULL,
  `livro_ficheiro` varchar(250) NOT NULL DEFAULT 'pdf.pdf',
  `data_publicacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mz_livro`
--

INSERT INTO `mz_livro` (`livro_id`, `livro_titulo`, `livro_autor`, `livro_ISBN`, `livro_prologo`, `livro_cat`, `livro_img`, `livro_catalogo`, `livro_ficheiro`, `data_publicacao`) VALUES
(1, 'Moçambique Oculto', 'Milton Manjate', '1105412053', 'Neste livro você vai poder conhecer as verdadeiras histórias\r\nsobre esses lugares.\r\nO que você está prestes a ler, obviamente não precisa \r\nacreditar, mas lhe garanto que são fatos reais, alguns deles vividos \r\nou presenciados por mim, que eu decidi ', 6, '001.jpeg', 1, '001.pdf', NULL),
(2, 'Você Não Merece Ser Feliz', 'Craque Daniel', '8551006452, 9788551006450', 'Daniel Furlan faz parte do coletivo TV Quase e, portanto, é um dos criadores, roteiristas e atores de programas como Choque de Cultura, Falha de Cobertura e O Último Programa do Mundo, além de Irmão do Jorel, onde atua e faz redação final e músicas, ', 4, '002.jpeg', 2, '002.pdf', NULL),
(3, 'As 16 leis do sucesso', 'Napoleon Hill', '978-85-62409-96-7', 'As 16 leis do sucesso é  um curso pratico que reúne  16 podetosas lições que são  bases da filosofia  de Napoleon Hill, maior gênio na área de realização pessoal e psicologia aplicada de todos tempos.', 1, '003.jpeg', 1, '003.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mz_meuslivros`
--

CREATE TABLE `mz_meuslivros` (
  `Id` int(11) NOT NULL,
  `Livro_id` int(11) NOT NULL,
  `Usuario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mz_catalogo`
--
ALTER TABLE `mz_catalogo`
  ADD PRIMARY KEY (`catlg_id`);

--
-- Indexes for table `mz_categoria`
--
ALTER TABLE `mz_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `mz_contacto`
--
ALTER TABLE `mz_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mz_livro`
--
ALTER TABLE `mz_livro`
  ADD PRIMARY KEY (`livro_id`),
  ADD KEY `FK_categoria_id` (`livro_cat`) USING BTREE,
  ADD KEY `FK_catalogo_id` (`livro_catalogo`);

--
-- Indexes for table `mz_meuslivros`
--
ALTER TABLE `mz_meuslivros`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_MeuLivro_id` (`Livro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mz_catalogo`
--
ALTER TABLE `mz_catalogo`
  MODIFY `catlg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mz_categoria`
--
ALTER TABLE `mz_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mz_contacto`
--
ALTER TABLE `mz_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mz_livro`
--
ALTER TABLE `mz_livro`
  MODIFY `livro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mz_meuslivros`
--
ALTER TABLE `mz_meuslivros`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mz_livro`
--
ALTER TABLE `mz_livro`
  ADD CONSTRAINT `FK_cataegoria_id` FOREIGN KEY (`livro_cat`) REFERENCES `mz_categoria` (`cat_id`),
  ADD CONSTRAINT `FK_catalogo_id` FOREIGN KEY (`livro_catalogo`) REFERENCES `mz_catalogo` (`catlg_id`);

--
-- Constraints for table `mz_meuslivros`
--
ALTER TABLE `mz_meuslivros`
  ADD CONSTRAINT `FK_MeuLivro_id` FOREIGN KEY (`Livro_id`) REFERENCES `mz_livro` (`livro_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
