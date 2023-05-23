-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.34:3306
-- Creato il: Gen 07, 2023 alle 21:57
-- Versione del server: 5.7.33-36-log
-- Versione PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sql1660750_1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `articoli`
--

CREATE TABLE `articoli` (
  `codice_articolo` int(11) NOT NULL,
  `titolo` varchar(50) DEFAULT NULL,
  `data` date NOT NULL,
  `argomento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `articoli`
--

INSERT INTO `articoli` (`codice_articolo`, `titolo`, `data`, `argomento`) VALUES
(1, 'Stefano Cucchi\n', '2020-11-21', 'Attualità'),
(2, '“Skirts for all”\n', '2020-11-21', 'Attualità'),
(3, 'Ai confini della vita. Essere o non essere: i viru', '2020-04-14', 'Scienza'),
(4, 'Di tutta l\'erba un fascio', '2020-03-28', 'Scienza'),
(5, 'Parasite\n', '2020-03-25', 'Cinema'),
(6, 'CRISPR CAS9\n', '2020-03-23', 'Scienza'),
(7, 'Complottismo: da Kennedy ai giorni nostri\n', '2020-03-25', 'Attualità'),
(8, ' Easy eco tips\n', '2020-03-23', 'Ambiente'),
(9, 'Ritorno al futuro\n', '2020-01-22', 'Cinema'),
(10, 'L\'uomo: un cancro ai polmoni della Terra', '2020-03-04', 'Ambiente'),
(11, 'Kill Bill\n', '2020-11-21', 'Cinema'),
(12, 'Accordo tra Cina e Vaticano\n', '2020-11-21', 'Attualità'),
(13, 'Non è normale che sia normale\r\n', '2020-11-25', 'Attualità'),
(14, 'The roaring twenties\n', '2020-03-24', 'Musica'),
(15, 'Do,re,mi,fa,sol,la… si ma con lo studio?\n', '2019-10-08', 'Musica'),
(16, 'Gravidanza senza gravità\n', '2020-01-22', 'Scienza'),
(17, 'Una passeggiata senza toccare terra\n', '2019-11-22', 'Scienza'),
(18, 'BIDEN BEATS TRUMP\n', '2020-11-28', 'Attualità'),
(19, 'L’amore tra le mura della Chiesa\n', '2020-11-28', 'Attualità'),
(20, 'La scuola ai tempi del coronavirus\n', '2020-11-30', 'Scuola'),
(21, 'Lettera ai miei studenti\n', '2020-03-20', 'Scuola'),
(22, 'Un accordo che cambierà il mondo\n', '2020-12-02', 'Attualità'),
(23, 'Euphoria\n', '2020-12-04', 'Cinema'),
(24, 'CULTURA DELLO STUPRO: le survivors\n', '2020-12-07', 'Attualità'),
(25, 'Perù: sull\'orlo del baratro', '2020-12-09', 'Scuola'),
(26, 'Tutto ciò che forse non sai sulla paura\n', '2020-12-12', 'Scienza'),
(27, '“Il Giovane Holden”, manifesto della nostra età\n', '2020-12-14', 'Libri'),
(28, 'Intanto al Cairo\n', '2020-12-16', 'Attualità'),
(29, 'Svelato il mistero Grosjean\n', '2020-12-18', 'Sport'),
(30, 'Due pesi due misure\n', '2020-12-23', 'Attualità'),
(31, 'Cinque film per Natale\n', '2020-12-24', 'Cinema'),
(32, 'Chiamarsi Mick\n', '2020-12-30', 'Sport'),
(33, 'The Queen\'s Gambit', '2021-01-03', 'Cinema'),
(34, 'Science for Peace and Health 2020\n', '2021-01-09', 'Scienza'),
(35, 'L\'effetto Lucifero', '2021-01-11', 'Varie'),
(37, 'La resurrezione del pater familias\n', '2021-01-16', 'Varie'),
(38, 'Tra sofferenza e follia: Joker\n', '2021-01-17', 'Cinema'),
(39, 'Lo sport nei secoli\n', '2021-01-20', 'Sport'),
(40, 'Giornata della Memoria... ma davvero?\n', '2021-01-27', 'Attualità'),
(41, 'Bosnia: una crisi umanitaria\n', '2021-02-05', 'Attualità'),
(42, 'Le 3 M vincenti\n', '2021-02-11', 'Sport'),
(43, 'Il caso Emanuela Orlandi\n', '2021-02-16', 'Varie'),
(44, 'Far fiorire le rose sul mare\n', '2021-02-22', 'Storia'),
(45, 'Mostra sui Libri d’artista: Luoghi di immagini e p', '2021-03-02', 'Scuola'),
(46, 'Benvenuti al cinema\n', '2021-03-04', 'Scienza'),
(47, 'Un sacchetto di biglie\n', '2021-03-18', 'Libri'),
(48, 'Mighty Jambo Circus\n', '2021-03-23', 'Varie'),
(49, 'Un viaggio nel tempo attraverso le pandemie\n', '2021-04-02', 'Storia'),
(50, 'Simposio Pandemico\n', '2021-04-14', 'Varie'),
(51, 'Il terrorismo: un fenomeno molto complesso\n', '2021-04-19', 'Storia'),
(52, 'Qualcosa di vero \n', '2021-05-19', 'Varie'),
(53, 'Dirk Gently\n', '2021-06-21', 'Cinema'),
(54, 'Lo strano albergo delle menti distrutte\n', '2021-10-05', 'Varie'),
(55, 'Per questo mi chiamo Giovanni\n', '2021-10-06', 'Libri'),
(56, 'Super Mario Galaxy\n', '2021-10-17', 'Varie'),
(57, 'Aborto: una questione bioetica, politica o di diri', '2021-10-18', 'Attualità'),
(58, 'Il Prometeo incasinato\n', '2021-10-24', 'Scuola'),
(59, 'Il buco dell\'ozono', '2021-10-28', 'Ambiente'),
(60, 'Alla scoperta del sonno: L\'inizio del viaggio', '2021-11-21', 'Scienza'),
(61, 'Una torta di petrolio\n', '2021-11-28', 'Attualità'),
(62, 'Lamxi Sargara si oppone al suo matrimonio combinat', '2021-11-29', 'Attualità'),
(63, 'Sulle note della scienza\n', '2021-12-01', 'Musica'),
(64, 'Squid game\n', '2021-12-03', 'Varie'),
(65, 'Politica e giovani\n', '2021-12-03', 'Attualità'),
(66, 'Basta fumare, inizia a risparmiare!\n', '2021-12-08', 'Varie'),
(67, 'Fashion Wok\n', '2021-12-14', 'Varie'),
(68, 'How to improve your English… the Christmas way!\n', '2021-12-25', 'Varie'),
(69, 'Omaggio a Desmond Tutu\n', '2021-12-29', 'Attualità'),
(70, 'Recensione di “Una vita come tante”\n', '2022-01-03', 'Libri'),
(71, 'Il fine mandato di Sergio Mattarella\n', '2022-01-05', 'Attualità'),
(72, 'Sulle note di Nadia Dandachi\n', '2022-01-11', 'Musica'),
(73, 'Astrolosofia\n', '2022-01-10', 'Varie'),
(74, 'Happy Thoughts\n', '2022-01-11', 'Varie'),
(76, 'Letteratura in 3,2,1...\r\n', '2022-01-14', 'Scuola'),
(77, '\"Circe\" di Madeline Miller\r\n', '2022-01-19', 'Libri'),
(78, 'Lolita\r\n', '2022-01-25', 'Libri'),
(79, 'Eternals: mai giudicare un film dal trailer!!\r\n', '2022-01-25', 'Cinema'),
(80, 'La verginità, l’unica arma in mano alle donne\r\n', '2022-01-25', 'Attualità'),
(81, 'La sindrome del cuore spezzato\r\n', '2022-01-30', 'Scienza'),
(82, 'Sulle note del mondo\r\n', '2022-02-04', 'Musica'),
(83, 'Apologia del barocco\r\n', '2022-02-04', 'Storia'),
(84, 'Rosso\r\n', '2022-02-12', 'Attualità'),
(85, 'The real American high school experience\r\n', '2022-02-15', 'Scuola'),
(86, 'Come ingannare la dea bendata\r\n', '2022-02-18', 'Storia'),
(87, 'Bombe su una scuola: se a morire sono gli insegnan', '2022-02-27', 'Attualità'),
(88, 'Storia e curiosità sul festival di Sanremo\r\n', '2022-02-27', 'Musica'),
(89, 'Relationships 101\r\n', '2022-03-01', 'Varie'),
(90, 'Quando è il corpo a comandare il cervello \r\n', '2022-03-03', 'Scienza'),
(91, 'Nella Mischia\n', '2022-03-09', 'Attualità'),
(92, 'Dall\'altare all\'esercito', '2022-03-09', 'Attualità'),
(93, 'In your head\n', '2022-03-13', 'Varie'),
(94, 'Primavera\n', '2022-03-20', 'Varie'),
(95, 'Wear a mask\n', '2022-03-24', 'Varie'),
(96, 'Nudo e intoccabile: il corpo femminile difeso nel ', '2022-03-29', 'Storia'),
(97, 'I veri protagonisti del conflitto\n', '2022-03-29', 'Attualità'),
(98, 'Quantomeno un’ombra racconta di una luce\n', '2022-03-31', 'Libri'),
(102, 'Attimi sono\n', '2022-04-04', 'Varie'),
(103, 'American Psycho', '2022-04-07', 'Cinema'),
(104, 'The House', '2022-04-08', 'Cinema'),
(105, 'Il tirannicidio? La mia risposta', '2022-04-11', 'Attualità'),
(106, 'Semi commedia Siciliana', '2022-04-15', 'Varie'),
(107, 'Alla scoperta del sonno: dipendenza e alcolismo', '2022-04-24', 'Scienza'),
(108, 'Flöge-Klimt, la ragazza del pittore', '2022-04-24', 'Storia'),
(109, '25 anni di Pokemon!', '2022-05-03', 'Varie'),
(110, 'Le magnifiche sorti e progressive ', '2022-05-05', 'Attualità'),
(111, 'Dialogando attorno ad Alice', '2022-05-12', 'Varie'),
(112, 'La riforma del debate', '2022-05-17', 'Varie'),
(113, 'Al bar con la bioetica', '2022-05-19', 'Scienza'),
(114, 'Testamentum', '2022-06-02', 'Varie'),
(115, 'Autostima', '2022-06-02', 'Varie'),
(116, 'Sott`acqua', '2022-11-21', 'Varie'),
(117, 'Il cane che guarda le stelle', '2022-11-26', 'Libri'),
(118, 'La canzone di Achille', '2022-11-26', 'Libri'),
(119, 'C\'è sempre una seconda occasione', '2022-11-28', 'Varie'),
(120, 'Nulla da ascoltare? Prova il K-Pop', '2022-11-29', 'Musica'),
(121, 'Le Compagnie di Ventura', '2022-12-06', 'Storia'),
(122, 'Il badminton', '2022-12-12', 'Sport'),
(123, 'ARS AMANDI', '2022-12-21', 'Varie'),
(124, 'In piazza contro Xi', '2022-12-30', 'Attualità');

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
-- Struttura della tabella `collabora`
--

CREATE TABLE `collabora` (
  `codice_autore` int(11) NOT NULL,
  `codice_articolo` int(11) NOT NULL,
  `ruolo` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `collabora`
--

INSERT INTO `collabora` (`codice_autore`, `codice_articolo`, `ruolo`) VALUES
(5, 3, 'Scrittore'),
(5, 21, 'Scrittore'),
(6, 7, 'Scrittrice'),
(6, 20, 'Scrittrice'),
(6, 28, 'Scrittrice'),
(6, 31, 'Scrittrice'),
(7, 5, 'Scrittrice'),
(7, 9, 'Scrittrice'),
(7, 11, 'Scrittrice'),
(9, 6, 'Scrittore'),
(9, 10, 'Scrittore'),
(9, 12, 'Scrittore'),
(9, 30, 'Scrittore'),
(9, 37, 'Scrittore'),
(10, 22, 'Scrittore'),
(11, 26, 'Scrittrice'),
(11, 40, 'Scrittrice'),
(11, 50, 'Scrittrice'),
(11, 52, 'Scrittrice'),
(11, 54, 'Scrittrice'),
(11, 58, 'Scrittrice'),
(11, 61, 'Scrittrice'),
(11, 68, 'Scrittrice'),
(11, 73, 'Scrittrice'),
(11, 76, 'Scrittrice'),
(11, 81, 'Scrittrice'),
(11, 83, 'Scrittrice'),
(11, 86, 'Scrittrice'),
(11, 90, 'Scrittrice'),
(11, 91, 'Scrittrice'),
(11, 93, 'Scrittrice'),
(11, 96, 'Scrittrice'),
(11, 105, 'Scrittrice'),
(11, 108, 'Scrittrice'),
(11, 110, 'Scrittrice'),
(11, 111, 'Scrittrice'),
(11, 113, 'Scrittrice'),
(11, 114, 'Scrittrice'),
(13, 32, 'Scrittrice'),
(13, 44, 'Scrittrice'),
(14, 24, 'Scrittrice'),
(15, 27, 'Scrittore'),
(17, 23, 'Scrittrice'),
(17, 34, 'Scrittrice'),
(17, 64, 'Scrittrice'),
(19, 8, 'Scrittrice'),
(19, 13, 'Scrittrice'),
(19, 31, 'Scrittrice'),
(19, 37, 'Scrittrice'),
(20, 4, 'Scrittrice'),
(21, 1, 'Scrittrice'),
(21, 19, 'Scrittrice'),
(21, 43, 'Scrittrice'),
(21, 59, 'Scrittrice'),
(23, 2, 'Scrittrice'),
(23, 33, 'Scrittrice'),
(23, 67, 'Scrittrice'),
(24, 18, 'Scrittrice'),
(24, 25, 'Scrittrice'),
(24, 35, 'Scrittrice'),
(24, 41, 'Scrittrice'),
(25, 53, 'Scrittore'),
(25, 58, 'Disegnatore'),
(26, 14, 'Scrittore'),
(26, 15, 'Scrittore'),
(26, 16, 'Scrittore'),
(26, 17, 'Scrittore'),
(26, 45, 'Scrittore'),
(26, 87, 'Scrittore'),
(27, 29, 'Scrittrice'),
(27, 42, 'Scrittrice'),
(28, 39, 'Scrittore'),
(28, 51, 'Scrittore'),
(29, 46, 'Scrittrice'),
(29, 48, 'Scrittrice'),
(29, 74, 'Scrittrice'),
(29, 84, 'Scrittrice'),
(29, 94, 'Scrittrice'),
(29, 98, 'Scrittrice'),
(29, 102, 'Scrittrice'),
(29, 112, 'Scrittrice'),
(29, 116, 'Scrittrice'),
(31, 38, 'Scrittore'),
(31, 49, 'Scrittore'),
(32, 47, 'Scrittrice'),
(32, 120, 'Scrittrice'),
(33, 55, 'Scrittore'),
(33, 56, 'Scrittore'),
(33, 66, 'Scrittore'),
(33, 79, 'Scrittore'),
(33, 88, 'Scrittore'),
(33, 109, 'Scrittore'),
(33, 115, 'Scrittore'),
(33, 118, 'Scrittore'),
(33, 119, 'Scrittore'),
(35, 60, 'Disegnatrice'),
(35, 67, 'Disegnatrice'),
(35, 80, 'Disegnatrice'),
(35, 107, 'Disegnatrice'),
(36, 62, 'Scrittrice'),
(37, 57, 'Scrittrice'),
(37, 63, 'Scrittrice'),
(37, 72, 'Scrittrice'),
(37, 80, 'Scrittrice'),
(37, 82, 'Scrittrice'),
(37, 85, 'Scrittrice'),
(37, 97, 'Scrittrice'),
(41, 70, 'Scrittrice'),
(43, 65, 'Scrittore'),
(43, 106, 'Scrittore'),
(44, 60, 'Scrittore'),
(44, 107, 'Scrittore'),
(45, 78, 'Scrittrice'),
(48, 63, 'Disegnatrice'),
(48, 72, 'Disegnatrice'),
(48, 81, 'Disegnatrice'),
(48, 82, 'Disegnatrice'),
(51, 84, 'Disegnatrice'),
(51, 111, 'Disegnatrice'),
(53, 69, 'Scrittrice'),
(53, 71, 'Scrittrice'),
(53, 77, 'Scrittrice'),
(53, 92, 'Scrittrice'),
(55, 89, 'Scrittrice'),
(55, 95, 'Scrittrice'),
(56, 103, 'Scrittore'),
(59, 104, 'Scrittrice'),
(67, 117, 'Scrittrice'),
(70, 124, 'Scrittore'),
(72, 121, 'Scrittore'),
(88, 122, 'Scrittrice'),
(91, 123, 'Scrittore'),
(92, 124, 'Collaboratore');

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
('Banfo', 'ce3fed0d8a9b110d53c8c5e4e8935dc4a32aad4adbaa8bb845416aa945c2c5ad');

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
  `attivo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `redazione`
--

INSERT INTO `redazione` (`codice`, `nome`, `cognome`, `classe`, `professione`, `attivo`) VALUES
(1, 'Lorenzo', 'Varisco', 'ex studente', 'Programmatore', 0),
(2, 'Francesco', 'Melzi', 'ex studente', 'Programmatore', 0),
(3, 'Federico', 'Villa', 'ex studente', 'Programmatore', 0),
(4, 'Riccardo', 'Ortolina', 'ex studente', 'Programmatore', 0),
(5, 'Marco', 'Arcioni', 'Professore', 'Ex-responsabile', 0),
(6, 'Rebecca', 'Spadone', 'ex studente', 'Scrittrice', 0),
(7, 'Anna', 'Rocca', 'ex studente', 'Scrittrice', 0),
(8, 'Arianna', 'Garavaglia', 'ex studente', 'Scrittrice', 0),
(9, 'Andrea', 'Lupo', 'ex studente', 'Scrittore', 0),
(10, 'Luca', 'di Lorenzo', 'ex studente', 'Scrittore', 0),
(11, 'Maddalena', 'Mandelli', 'ex studente', 'Scrittrice', 0),
(12, 'Arianna', 'Bestetti', 'ex studente', 'Scrittrice', 0),
(13, 'Bianca', 'Redaelli', 'ex studente', 'Social', 0),
(14, 'Emma', 'Corno', 'ex studente', 'Social', 0),
(15, 'Davide', 'Crippa', '5^N', 'Scrittore', 0),
(16, 'Elena', 'Sana', 'ex studente', 'Disegnatrice', 0),
(17, 'Margherita', 'Imbriani', 'ex studente', 'Scrittrice', 0),
(18, 'Nicolò', 'Di Trani', 'ex studente', 'Social', 0),
(19, 'Elena', 'Milani', 'ex studente', 'Correttrice', 0),
(20, 'Sofia', 'Villa', 'ex studente', 'Scrittrice', 0),
(21, 'Sabrina', 'Baeli', '3^ALC', 'Scrittrice', 1),
(23, 'Sofia', 'Galbiati', '4^ALC', 'Scrittrice', 0),
(24, 'Valentina', 'Croce', 'ex studente', 'Scrittrice', 0),
(25, 'Andrea', 'Ornaghi', '5^O', 'Scrittore', 0),
(26, 'Il', 'Banfo', 'Giornalino', 'Scrittore', 0),
(27, 'Elisa', 'Agostoni', 'ex studente', 'Scrittrice', 0),
(28, 'Noel', 'Di Gioia', '3^ALC', 'Scrittore', 0),
(29, 'Letizia', 'Fumagalli', '5^ALC', 'Scrittrice', 1),
(30, 'Matteo', 'Germanò', '5^P', 'Impaginatore', 1),
(31, 'Davide', 'Garofoli', '5^M', 'Scrittore', 0),
(32, 'Valentina', 'Aviles Arias', '3^B', 'Scrittrice', 1),
(33, 'Francesco', 'Ciccarello', '2^ALC', 'Scrittore', 1),
(34, 'Roberto', 'Rudi', '5^P', 'Programmatore', 1),
(35, 'Michela', 'Fassina', '4^ALC', 'Disegnatrice', 1),
(36, 'Alice', 'Lissoni', '4^E', 'Scrittrice', 0),
(37, 'Rebecca', 'Rivolta', '4^E', 'Scrittrice', 1),
(39, 'Chiara', 'Lopriore', 'ex studente', 'Impaginatrice', 0),
(40, 'Ludovica', 'Villa', '5^ALC', 'Scrittrice', 0),
(41, 'Arianna', 'Bordogna', '4^ALC', 'Scrittrice', 0),
(42, 'Arianna', 'Manzoni', '4^ALC', 'Fotografa', 0),
(43, 'Mattia', 'Montalbano', '4^E', 'Scrittore', 1),
(44, 'Gabriele', 'Giardini', 'ex studente', 'Scrittore', 0),
(45, 'Giorgia ', 'De Simone', '4^ALC', 'Scrittrice', 0),
(46, 'Davide', 'Nicolussi', 'Professore', 'Responsabile', 1),
(48, 'Chantal', 'Lupo', '5^D', 'Disegnatrice', 1),
(49, 'Asia', 'Anastasi', '3^ALC', 'Scrittrice', 0),
(51, 'Myriam', 'Allenza', '3^ALC', 'Disegnatrice', 0),
(53, 'Greta', 'Gervasoni', '2^ALC', 'Scrittrice', 0),
(54, 'Sveva', 'Samburgato', '5^ALC', 'Disegnatrice', 1),
(55, 'Giulia', 'Riccio', '5^ALC', 'Scrittrice', 1),
(56, 'Simone', 'Modola', '5^ALC', 'Scrittore', 1),
(57, 'Vittoria', 'Villa', '5^ALC', 'Social', 0),
(58, 'Davide', 'Lugo', '4^P', 'Impaginatore', 0),
(59, 'Emma', 'Bordogna', '5^ALC', 'Scrittrice', 1),
(60, 'Claudio', 'Allenza', '5^ALC', 'Social', 0),
(61, 'Noemi', 'Carniti', '4^ALC', 'Podcast', 1),
(62, 'Riccardo', 'Germanò', '3^O', 'Impaginatore', 1),
(63, 'Filippo', 'De Vecchi', '5^P', 'Scrittore', 1),
(64, 'Abdul', '', '1^ALC', 'Membro', 1),
(65, 'Ada', 'Cantù', '1^A', 'Membro', 1),
(66, 'Alice', 'Ardito', '1^ALC', 'Membro', 1),
(67, 'Alice', 'Bacco', '1^C', 'Fotografa/Scrittrice', 1),
(68, 'Andrea', 'Valentini', '1^ALC', 'Membro', 1),
(69, 'Cecilia', 'Schettino', '1^N', 'Membro', 1),
(70, 'Davide', 'Rampi', '1^ALC', 'Scrittore', 1),
(71, 'Dennis', 'Calò', '1^ALC', 'Membro', 1),
(72, 'Edoardo', 'Rancati', '2^ALC', 'Scrittore', 1),
(73, 'Elisabetta', '', '3^ALC', 'Membro', 1),
(74, 'Gaia', 'Colombo', '1^N', 'Impaginatrice', 1),
(75, 'Giacomo', 'De Mori', '2^A', 'Membro', 1),
(76, 'Giorgia', '', '1^ALC', 'Social', 1),
(77, 'Greta', 'Grevasoni', '2^ALC', 'Membro', 1),
(78, 'Ilaria', 'Dall\'occhio', '4^ALC', 'Membro', 1),
(79, 'Irene', 'Sarto', '1^P', 'Impaginatrice', 1),
(80, 'Ludovica', 'Enrici Vaion', '1^ALC', 'Fotografa', 1),
(81, 'Marta', 'Dall\'occhio', '4^ALC', 'Scrittrice', 1),
(82, 'Martina', 'Ciabatti', '1^ALC', 'Scrittrice', 1),
(83, 'Martina', 'Marrone', '1^ALC', 'Scrittrice', 1),
(84, 'Rachele', 'Rivolta', '1^C', 'Scrittrice/social', 1),
(85, 'Riccardo', 'Ferrari', '4^E', 'Membro', 1),
(86, 'Sara', 'Olivari', '5^ALC', 'Scrittrice', 1),
(87, 'Simone', 'Villa', '2^ALC', 'Membro', 1),
(88, 'Swetha', 'Umapathy', '1^P', 'Membro', 1),
(89, 'Valentina', 'Bruno', '1^ALC', 'Membro', 1),
(90, 'Yuri', 'Cesati', '2^P', 'Podcast', 1),
(91, 'Enea', 'Arrigoni', '2^ALC', 'Scrittore', 1),
(92, 'Mattia', 'Fantini', '1^ALC', 'Scrittore', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articoli`
--
ALTER TABLE `articoli`
  ADD PRIMARY KEY (`codice_articolo`),
  ADD KEY `FK_articoli_categorie` (`argomento`);

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`argomento`);

--
-- Indici per le tabelle `collabora`
--
ALTER TABLE `collabora`
  ADD PRIMARY KEY (`codice_autore`,`codice_articolo`),
  ADD KEY `FK_collabora_articoli` (`codice_articolo`);

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
  MODIFY `codice_articolo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT per la tabella `redazione`
--
ALTER TABLE `redazione`
  MODIFY `codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `articoli`
--
ALTER TABLE `articoli`
  ADD CONSTRAINT `FK_articoli_categorie` FOREIGN KEY (`argomento`) REFERENCES `categorie` (`argomento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `collabora`
--
ALTER TABLE `collabora`
  ADD CONSTRAINT `FK_collabora_articoli` FOREIGN KEY (`codice_articolo`) REFERENCES `articoli` (`codice_articolo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_collabora_redazione` FOREIGN KEY (`codice_autore`) REFERENCES `redazione` (`codice`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
