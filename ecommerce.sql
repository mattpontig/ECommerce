-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 04, 2023 alle 22:55
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.1.17

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
(67, 1, 6, 7),
(68, 1, 6, 13),
(69, 1, 6, 14),
(70, 1, 2, 15),
(71, 1, 1, 16),
(72, 1, 2, 17),
(73, 1, 6, 17);

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `id` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `idUtente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`id`, `data`, `idUtente`) VALUES
(7, '0000-00-00 00:00:00', 17),
(8, '0000-00-00 00:00:00', 18),
(9, '0000-00-00 00:00:00', 19),
(13, NULL, 17),
(14, NULL, 17),
(15, NULL, 17),
(16, NULL, 17),
(17, NULL, 17),
(18, NULL, 17);

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `tipo` varchar(16) NOT NULL,
  `img` varchar(64) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`id`, `tipo`, `img`) VALUES
(1, 'Elettronica', 'default.png'),
(2, 'Libri', 'default.png');

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

--
-- Dump dei dati per la tabella `comstar`
--

INSERT INTO `comstar` (`id`, `idUtente`, `idProdotto`, `stelle`, `commenti`) VALUES
(1, 17, 1, 5, '6tt');

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `ora` time DEFAULT NULL,
  `prezzoTot` int(11) NOT NULL,
  `idCarrello` int(11) NOT NULL,
  `Address` varchar(64) NOT NULL,
  `City` varchar(64) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `ordini`
--

INSERT INTO `ordini` (`id`, `data`, `ora`, `prezzoTot`, `idCarrello`, `Address`, `City`, `zip`) VALUES
(7, NULL, NULL, 50, 7, 'Via Giovanni Paolo II 108', 'Alzate Brianza', 22040),
(8, NULL, NULL, 50, 13, 'Via Giovanni Paolo II 108', 'Alzate Brianza', 22040),
(9, NULL, NULL, 50, 14, 'Via Giovanni Paolo II 108', 'Alzate Brianza', 22040),
(10, NULL, NULL, 25, 15, 'Via Giovanni Paolo II 108', 'Alzate Brianza', 22040),
(11, NULL, NULL, 40, 16, 'Via Giovanni Paolo II 108', 'Alzate Brianza', 22040),
(12, NULL, NULL, 75, 17, '', '', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `idPref` int(11) NOT NULL,
  `idProd` int(11) NOT NULL,
  `idUtente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `img` varchar(64) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`id`, `nome`, `des`, `quant`, `prezzo`, `idCat`, `sconto`, `img`) VALUES
(1, 'Prova', 'Descrizione prova', 32, 40, 1, NULL, 'default.png'),
(2, 'Prova2', 'Descrizione prova2', 6, 25, 2, NULL, 'default.png'),
(6, 'r', 'dddd', 5, 50, 1, NULL, 'galaGames.JPG');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id` int(11) NOT NULL,
  `nome` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `nome`, `email`, `password`, `admin`) VALUES
(17, 'Pontig', 'tione004@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(18, 'r', 'mattia.pontig04@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(19, 'admin', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', 1);

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
  ADD KEY `fk2` (`idUtente`);

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
  ADD KEY `idCarrello` (`idCarrello`);

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`idPref`),
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
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `comstar`
--
ALTER TABLE `comstar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  MODIFY `idPref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  ADD CONSTRAINT `carrello_ibfk_1` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `ordini_ibfk_1` FOREIGN KEY (`idCarrello`) REFERENCES `carrello` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
