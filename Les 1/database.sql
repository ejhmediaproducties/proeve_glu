-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2023 at 04:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `personeels_database`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
                              `id` int(11) NOT NULL,
                              `gebruikersnaam` varchar(50) NOT NULL,
                              `wachtwoord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden uitgevoerd voor tabel `gebruikers`
--

INSERT INTO gebruikers (id, gebruikersnaam, wachtwoord) VALUES
                                                            (1, 'pietjepuk', 'wachtwoord123'),
                                                            (2, 'janjansen', 'qwerty'),
                                                            (3, 'klaasklaassen', 'geheim');

--
-- Indexen voor geëxporteerde tabellen

--
-- Indexen voor tabel gebruikers

ALTER TABLE gebruikers
    ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen

--
-- AUTO_INCREMENT voor tabel gebruikers

ALTER TABLE gebruikers
    MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;