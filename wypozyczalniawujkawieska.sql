-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Sty 2023, 18:25
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wypozyczalniawujkawieska`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fps`
--

CREATE TABLE `fps` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `producent` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `rok_wydania` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `fps`
--

INSERT INTO `fps` (`id`, `nazwa`, `producent`, `rok_wydania`, `cena`, `ilosc`) VALUES
(3, 'Call of Duty: Modern Warfare II', 'Infinity Ward', 2020, 180, 99),
(4, 'Counter strike Global Offensive', 'Valve', 2012, 20, 99),
(5, 'Valorant', 'Riot', 2020, 10, 100),
(6, 'Grand Theft Auto V', 'Rockstar Games', 2013, 50, 100),
(7, 'Call of Duty: Modern Warfare', 'Infinity Ward', 2020, 80, 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rpg`
--

CREATE TABLE `rpg` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `producent` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `rok_wydania` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rpg`
--

INSERT INTO `rpg` (`id`, `nazwa`, `producent`, `rok_wydania`, `cena`, `ilosc`) VALUES
(1, 'Wiedźmin 3', 'CD Project', 2015, 80, 100),
(2, 'Cyberpunk 2077', 'CD Project', 2020, 300, 100),
(3, 'Gothic II: Kroniki Myrtany', 'The Chronicles of Myrtana Team', 2021, 120, 100),
(4, 'Sekiro', 'FromSoftware', 2019, 50, 100),
(5, 'Elden Ring', 'FromSoftware', 2022, 150, 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `strategia`
--

CREATE TABLE `strategia` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `producent` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `rok_wydania` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `strategia`
--

INSERT INTO `strategia` (`id`, `nazwa`, `producent`, `rok_wydania`, `cena`, `ilosc`) VALUES
(2, 'Age of Empires IV', 'Relic Entertainment', 2021, 30, 99),
(3, 'Frostpunk', 'Cenega S.A.', 2018, 60, 99),
(4, 'The Settlers', 'Ubisoft', 2023, 150, 100),
(5, 'Total War: Warhammer III', 'Creative Assembly', 2022, 120, 100),
(6, 'Worms W.M.D', 'Team 17', 2016, 30, 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `typ` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `email`, `typ`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 1),
(3, 'nowy', 'e00cf25ad42683b3df678c61f42c6bda', 'nowy@onet.pl', 0),
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.cm', 0),
(5, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@gmail.com', 0),
(6, 'jankowalski', 'ffac53b880657b1df520c6478ffeb1d2', 'jk@jk.jk', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `visual_novel`
--

CREATE TABLE `visual_novel` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `producent` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `rok_wydania` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `visual_novel`
--

INSERT INTO `visual_novel` (`id`, `nazwa`, `producent`, `rok_wydania`, `cena`, `ilosc`) VALUES
(1, 'Persona 3', 'Atlus', 2007, 20, 100),
(2, 'Nekopara Vol. 1', 'NEKO WORKs', 2014, 40, 100),
(3, 'Mirror 2: Project X', 'Kagami Works', 2022, 200, 99),
(4, 'The Fruit of Grisaia', 'Prototype', 2013, 65, 100),
(5, 'Growing Up', 'Vile Monarch', 2021, 250, 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyscigi`
--

CREATE TABLE `wyscigi` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `producent` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `rok_wydania` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wyscigi`
--

INSERT INTO `wyscigi` (`id`, `nazwa`, `producent`, `rok_wydania`, `cena`, `ilosc`) VALUES
(1, 'Forza Horizon 5', 'Forza Company', 2022, 300, 100),
(2, 'Need For Speed', 'Electronic Arts', 2000, 20, 100),
(3, 'Dirt 4', 'Codemasters', 2000, 30, 100),
(4, 'F1 2022', 'Codemasters', 2022, 250, 99),
(5, 'Euro Truck Simulator 2', 'SCS Software', 2010, 20, 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(255) NOT NULL,
  `id_zamowienia` int(255) NOT NULL,
  `id_prod` int(255) NOT NULL,
  `tabela` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `nazwa` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL,
  `suma` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `id_zamowienia`, `id_prod`, `tabela`, `nazwa`, `cena`, `suma`, `iduser`) VALUES
(1, 5743552, 3, 'fps', 'Call of Duty: Modern Warfare II', 180, 180, 1),
(2, 3783917, 2, 'strategia', 'Age of Empires IV', 30, 30, 6),
(3, 3783917, 4, 'fps', 'Counter strike Global Offensive', 20, 20, 6),
(4, 3783917, 3, 'strategia', 'Frostpunk', 60, 60, 6),
(5, 3783917, 3, 'visual_novel', 'Mirror 2: Project X', 200, 200, 6),
(6, 3783917, 4, 'wyscigi', 'F1 2022', 250, 250, 6);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `fps`
--
ALTER TABLE `fps`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rpg`
--
ALTER TABLE `rpg`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `strategia`
--
ALTER TABLE `strategia`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `visual_novel`
--
ALTER TABLE `visual_novel`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wyscigi`
--
ALTER TABLE `wyscigi`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `fps`
--
ALTER TABLE `fps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `rpg`
--
ALTER TABLE `rpg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `strategia`
--
ALTER TABLE `strategia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `visual_novel`
--
ALTER TABLE `visual_novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `wyscigi`
--
ALTER TABLE `wyscigi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
