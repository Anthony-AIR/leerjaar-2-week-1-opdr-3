-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 08 sep 2020 om 09:02
-- Serverversie: 8.0.18
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `verjaardagskalender`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verjaardagen`
--

CREATE TABLE `verjaardagen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `geboorteDatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `verjaardagen`
--

INSERT INTO `verjaardagen` (`id`, `name`, `lastName`, `geboorteDatum`) VALUES
(1, 'anthony', 'Inocencio Ramos', '2003-04-11'),
(3, 'swen', 'Inocencio Ramos', '2003-04-12'),
(4, 'swen', 'sperling', '2003-04-12'),
(5, 'carlos', 'garciaz', '1980-12-12'),
(8, 'berkan', 'langhaar', '2000-07-09');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `verjaardagen`
--
ALTER TABLE `verjaardagen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `verjaardagen`
--
ALTER TABLE `verjaardagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
