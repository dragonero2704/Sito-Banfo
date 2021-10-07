-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 07, 2021 alle 15:14
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banfo`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `redazione`
--

CREATE TABLE `redazione` (
  `codice` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `professione` varchar(50) NOT NULL,
  `attivo` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `redazione`
--

INSERT INTO `redazione` (`codice`, `nome`, `cognome`, `classe`, `professione`, `attivo`) VALUES
(1, 'Lorenzo', 'Varisco', '5^N', 'Programmatore', 0),
(2, 'Francesco', 'Melzi', '5^N', 'Programmatore', 0),
(3, 'Federico', 'Villa', '5^M', 'Programmatore', 0),
(4, 'Riccardo', 'Ortolina', '5^N', 'Programmatore', 0),
(5, 'Marco', 'Arcioni', 'Professore', 'Responsabile', 0),
(6, 'Rebecca', 'Spadone', '5^ALC', 'Scrittrice', 0),
(7, 'Anna', 'Rocca', '5^B', 'Scrittrice', 0),
(8, 'Arianna', 'Garavaglia', '5^ALC', 'Scrittrice', 0),
(9, 'Andrea', 'Lupo', '5^ALC', 'Scrittore', 0),
(10, 'Luca', 'di Lorenzo', '5^B', 'Scrittore', 0),
(11, 'Maddalena', 'Mandelli', '5^ALC', 'Scrittrice', 1),
(12, 'Arianna', 'Bestetti', '5^ALC', 'Scrittrice', 0),
(13, 'Bianca', 'Redaelli', '5^ALC', 'Social', 0),
(14, 'Emma', 'Corno', '5^ALC', 'Social', 0),
(15, 'Davide', 'Crippa', '3^N', 'Scrittore', 0),
(16, 'Elena', 'Sana', '5^ALC', 'Disegnatrice', 1),
(17, 'Margherita', 'Imbriani', '5^P', 'Scrittrice', 1),
(18, 'Nicolò', 'Di Trani', '5^B', 'Social', 0),
(19, 'Elena', 'Milani', '5^ALC', 'Correttrice', 0),
(20, 'Sofia', 'Villa', '5^ALC', 'Scrittrice', 0),
(21, 'Sabrina', 'Baeli', '2^ALC', 'Scrittrice', 1),
(23, 'Sofia', 'Galbiati', '3^ALC', 'Scrittrice', 1),
(24, 'Valentina', 'Croce', '5^ALC', 'Scrittrice', 0),
(25, 'Andrea', 'Ornaghi', '4^O', 'Scrittore', 1),
(26, 'Il', 'Banfo', 'Giornalino', 'Scrittore', 1),
(27, 'Elisa', 'Agostoni', '5^D', 'Scrittrice', 0),
(28, 'Noel', 'Di Gioia', '2^ALC', 'Scrittore', 1),
(29, 'Letizia', 'Fumagalli', '4^ALC', 'Scrittrice', 1),
(30, 'Matteo', 'Germanò', '4^P', 'Impaginatore', 1),
(31, 'Davide', 'Garofoli', '4^M', 'Scrittore', 1),
(32, 'Valentina', 'Aviles Arias', '2^D', 'Scrittrice', 1),
(33, 'Francesco', 'Ciccarello', '1^ALC', 'Scrittore', 1),
(34, 'Roberto', 'Rudi', '4^P', 'Impaginatore', 1),
(35, 'Michela', 'Fassina', '3^ALC', 'Disegnatrice', 1),
(36, 'Alice', 'Lissoni', '3^E', 'Scrittrice', 1),
(37, 'Rebecca', 'Rivolta', '3^E', 'Scrittrice', 1),
(38, 'Matilde', 'Rivolta', '1^ALC', 'fotografia', 1),
(39, 'Chiara', 'Lopriore', '5^P', 'Impaginatrice', 1),
(40, 'Ludovica', 'Villa', '4^ALC', 'Scrittrice', 1),
(41, 'Arianna', 'Bordogna', '3^ALC', 'Scrittrice', 1),
(42, 'Arianna', 'Manzoni', '3^ALC', 'Fotografa', 1),
(43, 'Mattia', 'Montalbano', '3^E', 'Scrittore', 1),
(44, 'Gabriele', 'Giardini', '5^N', 'Scrittore', 1),
(45, 'Giorgia ', 'De Simone', '3^ALC', 'Scrittrice', 1),
(46, 'Davide', 'Nicolussi', 'Professore', 'Responsabile', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `redazione`
--
ALTER TABLE `redazione`
  ADD PRIMARY KEY (`codice`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `redazione`
--
ALTER TABLE `redazione`
  MODIFY `codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
