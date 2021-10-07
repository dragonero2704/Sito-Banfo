-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Ott 07, 2021 alle 15:24
-- Versione del server: 10.4.16-MariaDB
-- Versione PHP: 7.4.12

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
  `professione` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `redazione`
--

INSERT INTO `redazione` (`codice`, `nome`, `cognome`, `classe`, `professione`) VALUES
(1, 'Lorenzo', 'Varisco', '5^N', 'Programmatore'),
(2, 'Francesco', 'Melzi', '5^N', 'Programmatore'),
(3, 'Federico', 'Villa', '5^M', 'Programmatore'),
(4, 'Riccardo', 'Ortolina', '5^N', 'Programmatore'),
(5, 'Marco', 'Arcioni', 'Professore', 'Responsabile'),
(6, 'Rebecca', 'Spadone', '5^ALC', 'Scrittrice'),
(7, 'Anna', 'Rocca', '5^B', 'Scrittrice'),
(8, 'Arianna', 'Garavaglia', '5^ALC', 'Scrittrice'),
(9, 'Andrea', 'Lupo', '5^ALC', 'Scrittore'),
(10, 'Luca', 'di Lorenzo', '5^B', 'Scrittore'),
(11, 'Maddalena', 'Mandelli', '5^ALC', 'Scrittrice'),
(12, 'Arianna', 'Bestetti', '5^ALC', 'Scrittrice'),
(13, 'Bianca', 'Redaelli', '5^ALC', 'Social'),
(14, 'Emma', 'Corno', '5^ALC', 'Social'),
(15, 'Davide', 'Crippa', '3^N', 'Scrittore'),
(16, 'Elena', 'Sana', '5^ALC', 'Disegnatrice'),
(17, 'Margherita', 'Imbriani', '5^P', 'Scrittrice'),
(18, 'Nicolò', 'Di Trani', '5^B', 'Social'),
(19, 'Elena', 'Milani', '5^ALC', 'Correttrice'),
(20, 'Sofia', 'Villa', '5^ALC', 'Scrittrice'),
(21, 'Sabrina', 'Baeli', '2^ALC', 'Scrittrice'),
(23, 'Sofia', 'Galbiati', '3^ALC', 'Scrittrice'),
(24, 'Valentina', 'Croce', '5^ALC', 'Scrittrice'),
(25, 'Andrea', 'Ornaghi', '4^O', 'Scrittore'),
(26, 'Il', 'Banfo', 'Giornalino', 'Scrittore'),
(27, 'Elisa', 'Agostoni', '5^D', 'Scrittrice'),
(28, 'Noel', 'Di Gioia', '2^ALC', 'Scrittore'),
(29, 'Letizia', 'Fumagalli', '4^ALC', 'Scrittrice'),
(30, 'Matteo', 'Germanò', '4^P', 'Impaginatore'),
(31, 'Davide', 'Garofoli', '4^M', 'Scrittore'),
(32, 'Valentina', 'Aviles Arias', '2^D', 'Scrittrice'),
(33, 'Francesco', 'Ciccarello', '1^ALC', 'Scrittore'),
(34, 'Roberto', 'Rudi', '4^P', 'Impaginatore'),
(35, 'Michela', 'Fassina', '3^ALC', 'Disegnatrice'),
(36, 'Alice', 'Lissoni', '3^E', 'Scrittrice'),
(37, 'Rebecca', 'Rivolta', '3^E', 'Scrittrice'),
(38, 'Davide', 'Nicolussi', 'Professore', 'Responsabile');

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
  MODIFY `codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
