-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2020 at 09:36 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `police2`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidatures`
--

CREATE TABLE `candidatures` (
  `idCandidature` int(11) NOT NULL,
  `nom` varchar(60) COLLATE latin1_general_cs NOT NULL,
  `prenom` varchar(60) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(60) COLLATE latin1_general_cs NOT NULL,
  `telephone` varchar(60) COLLATE latin1_general_cs NOT NULL,
  `adresse` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `ville` varchar(60) COLLATE latin1_general_cs NOT NULL,
  `codePostal` varchar(60) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `candidatures`
--

INSERT INTO `candidatures` (`idCandidature`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `ville`, `codePostal`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(2, 'svoboda', 'Karel', 'karel.svbd@eduge.ch', '0796757876', 'Rue Grange-Levrirer 12', 'Vernier', '1220');

-- --------------------------------------------------------

--
-- Table structure for table `cantons`
--

CREATE TABLE `cantons` (
  `idCanton` int(11) NOT NULL,
  `nomCanton` varchar(60) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `cantons`
--

INSERT INTO `cantons` (`idCanton`, `nomCanton`) VALUES
(1, 'Genève'),
(2, 'Vaud'),
(3, 'Valais'),
(4, 'Fribourg'),
(5, 'Berne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatures`
--
ALTER TABLE `candidatures`
  ADD PRIMARY KEY (`idCandidature`);

--
-- Indexes for table `cantons`
--
ALTER TABLE `cantons`
  ADD PRIMARY KEY (`idCanton`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidatures`
--
ALTER TABLE `candidatures`
  MODIFY `idCandidature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cantons`
--
ALTER TABLE `cantons`
  MODIFY `idCanton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
