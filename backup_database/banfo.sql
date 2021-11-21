-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Nov 21, 2021 alle 22:19
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
-- Struttura della tabella `articoli`
--

CREATE TABLE `articoli` (
  `codice_articolo` int(11) NOT NULL,
  `data` date NOT NULL,
  `autore` int(11) NOT NULL,
  `autore2` int(11) DEFAULT NULL,
  `argomento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `articoli`
--

INSERT INTO `articoli` (`codice_articolo`, `data`, `autore`, `autore2`, `argomento`) VALUES
(1, '2020-11-21', 21, NULL, 'Attualità'),
(2, '2020-11-21', 23, NULL, 'Attualità'),
(3, '2020-04-14', 5, NULL, 'Scienza'),
(4, '2020-03-28', 20, NULL, 'Scienza'),
(5, '2020-03-25', 7, NULL, 'Cinema'),
(6, '2020-03-23', 9, NULL, 'Scienza'),
(7, '2020-03-25', 6, NULL, 'Attualità'),
(8, '2020-03-23', 19, NULL, 'Ambiente'),
(9, '2020-01-22', 7, NULL, 'Cinema'),
(10, '2020-03-04', 9, NULL, 'Ambiente'),
(11, '2020-11-21', 7, NULL, 'Cinema'),
(12, '2020-11-21', 9, NULL, 'Attualità'),
(13, '2020-11-25', 19, NULL, 'Attualità'),
(14, '2020-03-24', 26, NULL, 'Musica'),
(15, '2019-10-08', 26, NULL, 'Musica'),
(16, '2020-01-22', 26, NULL, 'Scienza'),
(17, '2019-11-22', 26, NULL, 'Scienza'),
(18, '2020-11-28', 24, NULL, 'Attualità'),
(19, '2020-11-28', 21, NULL, 'Attualità'),
(20, '2020-11-30', 6, NULL, 'Scuola'),
(21, '2020-03-20', 5, NULL, 'Scuola'),
(22, '2020-12-02', 10, NULL, 'Attualità'),
(23, '2020-12-04', 17, NULL, 'Cinema'),
(24, '2020-12-07', 14, NULL, 'Attualità'),
(25, '2020-12-09', 24, NULL, 'Scuola'),
(26, '2020-12-12', 11, NULL, 'Scienza'),
(27, '2020-12-14', 15, NULL, 'Libri'),
(28, '2020-12-16', 6, NULL, 'Attualità'),
(29, '2020-12-18', 27, NULL, 'Sport'),
(30, '2020-12-23', 9, NULL, 'Attualità'),
(31, '2020-12-24', 19, 6, 'Cinema'),
(32, '2020-12-30', 13, NULL, 'Sport'),
(33, '2021-01-03', 23, NULL, 'Cinema'),
(34, '2021-01-09', 17, NULL, 'Scienza'),
(35, '2021-01-11', 24, NULL, 'Varie'),
(36, '2021-01-13', 11, NULL, 'Varie'),
(37, '2021-01-16', 9, 19, 'Varie'),
(38, '2021-01-17', 31, NULL, 'Cinema'),
(39, '2021-01-20', 28, NULL, 'Sport'),
(40, '2021-01-27', 11, NULL, 'Attualità'),
(41, '2021-02-05', 24, NULL, 'Attualità'),
(42, '2021-02-11', 27, NULL, 'Sport'),
(43, '2021-02-16', 21, NULL, 'Varie'),
(44, '2021-02-22', 13, NULL, 'Storia'),
(45, '2021-03-02', 26, NULL, 'Scuola'),
(46, '2021-03-04', 29, NULL, 'Scienza'),
(47, '2021-03-18', 32, NULL, 'Libri'),
(48, '2021-03-23', 29, NULL, 'Varie'),
(49, '2021-04-02', 31, NULL, 'Storia'),
(50, '2021-04-14', 11, NULL, 'Varie'),
(51, '2021-04-19', 28, NULL, 'Storia'),
(52, '2021-05-19', 11, NULL, 'Varie'),
(53, '2021-06-21', 25, NULL, 'Cinema'),
(54, '2021-10-05', 11, NULL, 'Varie'),
(55, '2021-10-06', 33, NULL, 'Libri'),
(56, '2021-10-17', 33, NULL, 'Varie'),
(57, '2021-10-18', 37, NULL, 'Attualità'),
(58, '2021-10-24', 11, NULL, 'Scuola'),
(59, '2021-10-28', 21, NULL, 'Scienza'),
(60, '2021-11-21', 44, NULL, 'Scienza');

-- --------------------------------------------------------

--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `argomento` varchar(50) NOT NULL,
  `descrizione` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `categorie`
--

INSERT INTO `categorie` (`argomento`, `descrizione`) VALUES
('Ambiente', 'There\'s no planet B. Cosa succederà se non ci attiviamo per salvare il nostro pianeta?'),
('Attualità', 'Cosa succede nel mondo? Articoli per restare al passo con i tempi.'),
('Cinema', 'Tutto ciò che la redazione vi consiglia di guardare.'),
('Eventi', 'Gli eventi imperdibili di questo mese: quello che accade intorno a noi'),
('Libri', 'Consigli di lettura della redazione per quando avrete finito di leggere i libri delle vacanze.'),
('Musica', 'Cosa aggiungere alla playlist \"Brani preferiti\" di Spotify.'),
('Scienza', 'Dalle cellule all\'universo, guardare il mondo con gli occhi della scienza'),
('Scuola', 'Banfi e BanfiOnline: tutto quello che riguarda il nostro istituto.'),
('Sport', 'Non rimanere indietro, corri con noi sui percorsi delle competizioni sportive più famose'),
('Storia', 'Un viaggio nel mare del Tempo: pillole di storia.'),
('Varie', 'Per quando le nostre menti non riescono a rientrare in una categoria');

-- --------------------------------------------------------

--
-- Struttura della tabella `redattore`
--

CREATE TABLE `redattore` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `redattore`
--

INSERT INTO `redattore` (`username`, `password`) VALUES
('Banfo', 'eb9311d2b6f8e841b27e3d875d98dbfa1b13c80c00a8c155be6bd8574f599aea');

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
(34, 'Roberto', 'Rudi', '4^P', 'Programmatore', 1),
(35, 'Michela', 'Fassina', '3^ALC', 'Disegnatrice', 1),
(36, 'Alice', 'Lissoni', '3^E', 'Scrittrice', 1),
(37, 'Rebecca', 'Rivolta', '3^E', 'Scrittrice', 1),
(38, 'Matilde', 'Rivolta', '1^ALC', 'Fotografa', 1),
(39, 'Chiara', 'Lopriore', '5^P', 'Impaginatrice', 1),
(40, 'Ludovica', 'Villa', '4^ALC', 'Scrittrice', 1),
(41, 'Arianna', 'Bordogna', '3^ALC', 'Scrittrice', 1),
(42, 'Arianna', 'Manzoni', '3^ALC', 'Fotografa', 1),
(43, 'Mattia', 'Montalbano', '3^E', 'Scrittore', 1),
(44, 'Gabriele', 'Giardini', '5^N', 'Scrittore', 1),
(45, 'Giorgia ', 'De Simone', '3^ALC', 'Scrittrice', 1),
(46, 'Davide', 'Nicolussi', 'Professore', 'Responsabile', 1),
(47, 'Jacopo', 'Pacelli', '5^N', 'Scrittore', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articoli`
--
ALTER TABLE `articoli`
  ADD PRIMARY KEY (`codice_articolo`),
  ADD KEY `FK_articoli_redazione` (`autore`),
  ADD KEY `FK_articoli_categorie` (`argomento`),
  ADD KEY `Autore2` (`autore2`);

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`argomento`);

--
-- Indici per le tabelle `redattore`
--
ALTER TABLE `redattore`
  ADD PRIMARY KEY (`username`);

--
-- Indici per le tabelle `redazione`
--
ALTER TABLE `redazione`
  ADD PRIMARY KEY (`codice`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articoli`
--
ALTER TABLE `articoli`
  MODIFY `codice_articolo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT per la tabella `redazione`
--
ALTER TABLE `redazione`
  MODIFY `codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `articoli`
--
ALTER TABLE `articoli`
  ADD CONSTRAINT `FK_articoli_categorie` FOREIGN KEY (`argomento`) REFERENCES `categorie` (`argomento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_articoli_redazione` FOREIGN KEY (`autore`) REFERENCES `redazione` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
