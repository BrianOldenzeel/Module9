-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 jun 2022 om 11:58
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `broodshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `ID` smallint(11) NOT NULL,
  `Catogorie` varchar(16) NOT NULL,
  `Naam` varchar(20) NOT NULL,
  `Prijs` decimal(4,2) NOT NULL,
  `Voorraad` mediumint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`ID`, `Catogorie`, `Naam`, `Prijs`, `Voorraad`) VALUES
(1, 'Crossaint', 'Crossaint', '1.00', 15),
(2, 'Crossaint', 'Chocolade Crossaint', '1.10', 30),
(3, 'Crossaint', 'Kaas Crossaint', '1.30', 30),
(4, 'Crossaint', 'Hamkaas Crossaint', '1.50', 10),
(5, 'Crossaint', 'Jam Crossaint', '1.50', 0),
(6, 'Crossaint', 'Worsten Crossaint', '1.50', 10),
(7, 'Baguette', 'Baguette', '5.00', 15),
(8, 'Brood', 'Wit Brood', '2.50', 50),
(9, 'Brood', 'TIjger brood', '2.50', 15),
(10, 'Brood', 'Volkoren Brood', '3.00', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `ID` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
