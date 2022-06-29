-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 jun 2022 om 11:00
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudp4`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `naam` varchar(60) NOT NULL,
  `achternaam` varchar(60) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`ID`, `naam`, `achternaam`, `wachtwoord`) VALUES
(1, 'admin', '', 'admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestemmingen`
--

CREATE TABLE `bestemmingen` (
  `ID` int(11) NOT NULL,
  `afbeelding` text NOT NULL,
  `land` varchar(100) NOT NULL,
  `beschrijving` text NOT NULL,
  `kosten` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bestemmingen`
--

INSERT INTO `bestemmingen` (`ID`, `afbeelding`, `land`, `beschrijving`, `kosten`) VALUES
(30, 'igv/img/tropical island.jpg', 'Japan', 'Japan is een land en een eilandstaat ten oosten van het Aziatische continent. Het land wordt gevormd door 6.852 eilanden in de Grote Oceaan. De grootste eilanden zijn Hokkaido, Honshu, Shikoku en Kyushu, die samen 97% van de totale oppervlakte van Japan innemen. De hoofdstad en grootste stad van Japan is Tokio.', '281,10'),
(37, 'igv/img/tropical island.jpg', 'Nederland', 'Nederland is een van de landen binnen het Koninkrijk der Nederlanden. Nederland ligt voor het overgrote deel in het noordwesten van Europa, aan de Noordzee. Naast het Europese deel zijn er nog de drie bijzondere gemeenten in de Caribische Zee, die ook wel Caribisch Nederland worden genoemd.', '245');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(5, 'qrrqr', 'leon@leo.com', 'asdasd', 'asd'),
(6, 'asdsa', 'adssa@d.v', 'ads', 'saddas');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reizen`
--

CREATE TABLE `reizen` (
  `ID` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `duur` int(11) NOT NULL,
  `personen` int(30) NOT NULL,
  `vliegveld` varchar(255) NOT NULL,
  `bestemming` varchar(255) NOT NULL,
  `geboekt` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reizen`
--

INSERT INTO `reizen` (`ID`, `voornaam`, `achternaam`, `duur`, `personen`, `vliegveld`, `bestemming`, `geboekt`) VALUES
(7, 'Leon', 'de Haas', 5, 2, 'Amsterdam Airport', 'Amerika', 1),
(8, 'Leon', 'de Haas', 7, 3, 'Eindhoven Airport', 'Japan', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(11) NOT NULL,
  `vluchtID` int(6) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `bericht` text NOT NULL,
  `rating` int(1) NOT NULL,
  `bestemming` varchar(255) NOT NULL,
  `validate` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`ID`, `vluchtID`, `naam`, `bericht`, `rating`, `bestemming`, `validate`) VALUES
(1, 3, 'joost', 'leuke reis gehad met een goede service', 5, 'Turkije', 1),
(2, 3, 'Rigbi', 'leuk gehad', 4, 'Japan', 1),
(4, 2, 'henk', 'wel leuk gehad maar kon beter', 3, 'griekenland', 1),
(5, 0, 'Leon', 'help', 1, 'hell', 0),
(6, 0, 'Leon', 'help', 1, 'hell', 0),
(7, 0, 'leon', 'kut', 1, 'Hell', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schemareizen`
--

CREATE TABLE `schemareizen` (
  `ID` int(11) NOT NULL,
  `vertrek` varchar(100) NOT NULL,
  `aankomst` varchar(100) NOT NULL,
  `gate` varchar(100) NOT NULL,
  `bestemming` varchar(100) NOT NULL,
  `vliegtuig` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `schemareizen`
--

INSERT INTO `schemareizen` (`ID`, `vertrek`, `aankomst`, `gate`, `bestemming`, `vliegtuig`) VALUES
(5, '15:12', '19:12', 'A71', 'Amerika', 'De bazaar'),
(10, '18:20', '19:20', 'A91', 'Canada', 'De wasbeer');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `bestemmingen`
--
ALTER TABLE `bestemmingen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reizen`
--
ALTER TABLE `reizen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `schemareizen`
--
ALTER TABLE `schemareizen`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `bestemmingen`
--
ALTER TABLE `bestemmingen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `reizen`
--
ALTER TABLE `reizen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `schemareizen`
--
ALTER TABLE `schemareizen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
