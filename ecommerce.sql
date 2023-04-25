-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 25, 2023 alle 18:18
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `acquisto`
--

CREATE TABLE `acquisto` (
  `idC` int(11) NOT NULL,
  `quantit` int(11) NOT NULL,
  `idArticolo` int(11) NOT NULL,
  `idCarrello` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `acquisto`
--

INSERT INTO `acquisto` (`idC`, `quantit`, `idArticolo`, `idCarrello`) VALUES
(40, 1, 1, 7),
(41, 1, 1, 7),
(42, 1, 1, 7),
(43, 1, 2, 7),
(44, 1, 1, 7);

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `idUtente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`id`, `data`, `idUtente`) VALUES
(7, '0000-00-00 00:00:00', 17),
(8, '0000-00-00 00:00:00', 18);

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `tipo` varchar(16) NOT NULL,
  `img` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`id`, `tipo`, `img`) VALUES
(1, 'Elettronica', NULL),
(2, 'Libri', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `comstar`
--

CREATE TABLE `comstar` (
  `id` int(11) NOT NULL,
  `idUtente` int(11) NOT NULL,
  `idProdotto` int(11) NOT NULL,
  `stelle` int(11) NOT NULL,
  `commenti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `ora` time NOT NULL,
  `prezzo` int(11) NOT NULL,
  `idUtente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `id` int(11) NOT NULL,
  `idProd` int(11) NOT NULL,
  `idUtente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `preferiti`
--

INSERT INTO `preferiti` (`id`, `idProd`, `idUtente`) VALUES
(3, 2, 17);

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(11) NOT NULL,
  `nome` varchar(16) NOT NULL,
  `des` text NOT NULL,
  `quant` int(11) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `idCat` int(11) NOT NULL,
  `sconto` int(11) DEFAULT NULL,
  `img` int(11) DEFAULT NULL,
  `autore` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`id`, `nome`, `des`, `quant`, `prezzo`, `idCat`, `sconto`, `img`, `autore`) VALUES
(1, 'Prova', 'Descrizione prova', 32, 40, 1, NULL, NULL, NULL),
(2, 'Prova2', 'Descrizione prova2', 6, 25, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id` int(11) NOT NULL,
  `nome` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `nome`, `email`, `password`) VALUES
(17, 'Pontig', 'tione004@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'r', 'mattia.pontig04@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `acquisto`
--
ALTER TABLE `acquisto`
  ADD PRIMARY KEY (`idC`),
  ADD KEY `idArticolo` (`idArticolo`,`idCarrello`),
  ADD KEY `idCarrello` (`idCarrello`);

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idUtente` (`idUtente`);

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `comstar`
--
ALTER TABLE `comstar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUtente` (`idUtente`,`idProdotto`),
  ADD KEY `idProdotto` (`idProdotto`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idUtente` (`idUtente`);

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProd` (`idProd`,`idUtente`),
  ADD KEY `idUtente` (`idUtente`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCat` (`idCat`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `acquisto`
--
ALTER TABLE `acquisto`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `comstar`
--
ALTER TABLE `comstar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `acquisto`
--
ALTER TABLE `acquisto`
  ADD CONSTRAINT `acquisto_ibfk_1` FOREIGN KEY (`idCarrello`) REFERENCES `carrello` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acquisto_ibfk_2` FOREIGN KEY (`idArticolo`) REFERENCES `prodotti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `carrello_ibfk_1` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `comstar`
--
ALTER TABLE `comstar`
  ADD CONSTRAINT `comstar_ibfk_1` FOREIGN KEY (`idProdotto`) REFERENCES `prodotti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comstar_ibfk_2` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `ordini_ibfk_1` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  ADD CONSTRAINT `preferiti_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `prodotti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preferiti_ibfk_2` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  ADD CONSTRAINT `prodotti_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
