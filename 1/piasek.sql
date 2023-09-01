-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lut 2023, 14:13
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `piasek`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reprezentacja`
--

CREATE TABLE `reprezentacja` (
  `ID` int(11) NOT NULL,
  `LP` int(11) NOT NULL,
  `Imie` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `Data_ur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `reprezentacja`
--

INSERT INTO `reprezentacja` (`ID`, `LP`, `Imie`, `Nazwisko`, `Data_ur`) VALUES
(1105, 3, 'Norbert1', 'Małpa', '2010-01-04'),
(1106, 4, 'Dawid', 'Potocki', '2023-01-11'),
(1114, 7, 'Andrey', 'Dziduś', '2020-02-08'),
(1117, 10, 'Ben', 'Ten', '2010-10-10'),
(1123, 2, 'Norbert', 'Szefer', '2013-01-30'),
(1125, 11, 'dfsdsfdsf', 'sdfsdfdsf', '2023-02-02');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `reprezentacja`
--
ALTER TABLE `reprezentacja`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `reprezentacja`
--
ALTER TABLE `reprezentacja`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
