-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 03:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `racas_caninas`
--

-- --------------------------------------------------------

--
-- Table structure for table `atributos`
--

create database racas_caninas;

use racas_caninas;

CREATE TABLE `atributos` (
  `id_atributos` int(11) NOT NULL,
  `altura` int(11) DEFAULT NULL,
  `cor` int(11) DEFAULT NULL,
  `pelos` int(11) DEFAULT NULL,
  `pata` int(11) DEFAULT NULL,
  `cauda` int(11) DEFAULT NULL,
  `focinho` int(11) DEFAULT NULL,
  `cabeca` int(11) DEFAULT NULL,
  `orelhas` int(11) DEFAULT NULL,
  `olhos` int(11) DEFAULT NULL,
  `id_raca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `atributos`
--

INSERT INTO `atributos` (`id_atributos`, `altura`, `cor`, `pelos`, `pata`, `cauda`, `focinho`, `cabeca`, `orelhas`, `olhos`, `id_raca`) VALUES
(1, 3, 3, 4, 4, 2, 4, 4, 2, 2, 1),
(2, 2, 2, 4, 2, 2, 3, 4, 3, 3, 2),
(15, 1, 3, 3, 3, 4, 3, 3, 2, 2, 3),
(16, 1, 3, 2, 3, 3, 3, 3, 4, 3, 4),
(17, 2, 2, 3, 3, 4, 3, 4, 4, 3, 5),
(18, 2, 1, 4, 3, 2, 2, 2, 3, 3, 6),
(19, 1, 3, 2, 2, 2, 2, 4, 4, 3, 7),
(20, 1, 2, 2, 2, 2, 2, 4, 2, 4, 8),
(21, 2, 1, 1, 2, 3, 4, 4, 3, 3, 9),
(22, 2, 1, 3, 3, 4, 4, 3, 3, 3, 10),
(24, 2, 2, 3, 3, 4, 4, 4, 4, 3, 11),
(25, 1, 1, 1, 2, 4, 3, 2, 4, 4, 12),
(26, 1, 1, 4, 2, 3, 2, 2, 2, 4, 16),
(27, 2, 2, 1, 2, 4, 3, 4, 4, 2, 13),
(28, 1, 3, 1, 2, 4, 4, 4, 4, 4, 14),
(29, 1, 1, 4, 2, 3, 2, 2, 2, 2, 15),
(30, 1, 1, 4, 2, 2, 2, 2, 2, 2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `raca`
--

CREATE TABLE `raca` (
  `id_raca` int(11) NOT NULL,
  `nome_raca` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `raca`
--

INSERT INTO `raca` (`id_raca`, `nome_raca`) VALUES
(1, 'Afegão Hound'),
(2, 'Airedale Terrier'),
(3, 'Akita'),
(4, 'Basenji'),
(5, 'Bloodhound'),
(6, 'Bobtail'),
(7, 'Buldogue Francês'),
(8, ' Buldogue Inglês'),
(9, 'Bull Terrier'),
(10, ' Husky Siberiano'),
(11, 'Pastor Alemão'),
(12, 'Pinscher Miniatura'),
(13, 'Tosa'),
(14, 'Weimaraner'),
(15, 'Whippet'),
(16, ' Skye Terrier'),
(17, 'Affenpinscher');

-- --------------------------------------------------------

--
-- Table structure for table `valor_altura`
--

CREATE TABLE `valor_altura` (
  `id_valor_altura` int(11) NOT NULL,
  `tipo_valor_altura` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `valor_altura`
--

INSERT INTO `valor_altura` (`id_valor_altura`, `tipo_valor_altura`) VALUES
(1, '30 à 40 cm'),
(2, '50 à 60 cm'),
(3, '70 ou mais');

-- --------------------------------------------------------

--
-- Table structure for table `valor_cor`
--

CREATE TABLE `valor_cor` (
  `id_valor_cor` int(11) NOT NULL,
  `tipo_valor_cor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `valor_cor`
--

INSERT INTO `valor_cor` (`id_valor_cor`, `tipo_valor_cor`) VALUES
(1, 'Preto ou Branco ou Marrons'),
(2, 'Vermelho ou Dourado ou Azul'),
(3, 'Cinzento ou Cor Creme ou Amarelo');

-- --------------------------------------------------------

--
-- Table structure for table `valor_tamanho`
--

CREATE TABLE `valor_tamanho` (
  `id_valor_tamanho` int(11) NOT NULL,
  `tipo_valor_tamanho` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `valor_tamanho`
--

INSERT INTO `valor_tamanho` (`id_valor_tamanho`, `tipo_valor_tamanho`) VALUES
(1, 'Raso'),
(2, 'Curto'),
(3, 'Médio'),
(4, 'Longo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`id_atributos`,`id_raca`),
  ADD KEY `fk_atributos_raca_idx` (`id_raca`),
  ADD KEY `altura_idx` (`altura`),
  ADD KEY `cor_idx` (`cor`),
  ADD KEY `fk_pelos_idx` (`pelos`),
  ADD KEY `fk_pata_idx` (`pata`),
  ADD KEY `fk_cauda_idx` (`cauda`),
  ADD KEY `fk_focinho_idx` (`focinho`),
  ADD KEY `fk_cabeca_idx` (`cabeca`),
  ADD KEY `fk_orelha_idx` (`orelhas`),
  ADD KEY `fk_olhos_idx` (`olhos`);

--
-- Indexes for table `raca`
--
ALTER TABLE `raca`
  ADD PRIMARY KEY (`id_raca`);

--
-- Indexes for table `valor_altura`
--
ALTER TABLE `valor_altura`
  ADD PRIMARY KEY (`id_valor_altura`);

--
-- Indexes for table `valor_cor`
--
ALTER TABLE `valor_cor`
  ADD PRIMARY KEY (`id_valor_cor`);

--
-- Indexes for table `valor_tamanho`
--
ALTER TABLE `valor_tamanho`
  ADD PRIMARY KEY (`id_valor_tamanho`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atributos`
--
ALTER TABLE `atributos`
  MODIFY `id_atributos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `raca`
--
ALTER TABLE `raca`
  MODIFY `id_raca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `valor_altura`
--
ALTER TABLE `valor_altura`
  MODIFY `id_valor_altura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `valor_cor`
--
ALTER TABLE `valor_cor`
  MODIFY `id_valor_cor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `valor_tamanho`
--
ALTER TABLE `valor_tamanho`
  MODIFY `id_valor_tamanho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atributos`
--
ALTER TABLE `atributos`
  ADD CONSTRAINT `fk_altura` FOREIGN KEY (`altura`) REFERENCES `valor_altura` (`id_valor_altura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atributos_raca` FOREIGN KEY (`id_raca`) REFERENCES `raca` (`id_raca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cabeca` FOREIGN KEY (`cabeca`) REFERENCES `valor_tamanho` (`id_valor_tamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cauda` FOREIGN KEY (`cauda`) REFERENCES `valor_tamanho` (`id_valor_tamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cor` FOREIGN KEY (`cor`) REFERENCES `valor_cor` (`id_valor_cor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_focinho` FOREIGN KEY (`focinho`) REFERENCES `valor_tamanho` (`id_valor_tamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_olhos` FOREIGN KEY (`olhos`) REFERENCES `valor_tamanho` (`id_valor_tamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orelha` FOREIGN KEY (`orelhas`) REFERENCES `valor_tamanho` (`id_valor_tamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pata` FOREIGN KEY (`pata`) REFERENCES `valor_tamanho` (`id_valor_tamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pelos` FOREIGN KEY (`pelos`) REFERENCES `valor_tamanho` (`id_valor_tamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
