-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 01 2022 г., 11:51
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `championship`
--

-- --------------------------------------------------------

--
-- Структура таблицы `game`
--

CREATE TABLE `game` (
  `ID_GAME` int(10) NOT NULL,
  `date` date NOT NULL,
  `place` text NOT NULL,
  `score` text NOT NULL,
  `FID_TEAM1` int(10) NOT NULL,
  `FID_TEAM2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `game`
--

INSERT INTO `game` (`ID_GAME`, `date`, `place`, `score`, `FID_TEAM1`, `FID_TEAM2`) VALUES
(1, '2022-06-01', 'Wembley Stadium', '2-1', 1, 7),
(2, '2022-06-01', 'Santiago Bernabeu', '2-0', 2, 3),
(3, '2022-06-02', 'Camp Nou', '1-0', 3, 4),
(4, '2022-06-02', 'Old Trafford', '2-2', 5, 6),
(5, '2022-06-03', 'Estádio Do Maracanã', '1-1', 6, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `player`
--

CREATE TABLE `player` (
  `ID_PLAYER` int(10) NOT NULL,
  `name` text NOT NULL,
  `FID_TEAM` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `player`
--

INSERT INTO `player` (`ID_PLAYER`, `name`, `FID_TEAM`) VALUES
(1, 'Lionel Messi', 1),
(2, 'Cristiano Ronaldo', 1),
(3, 'Neymar', 1),
(4, 'Robert Lewandowski', 2),
(5, 'Kylian Mbappé', 2),
(6, 'Kevin De Bruyne', 2),
(7, 'Virgil van Dijk', 3),
(8, 'Sadio Mané', 3),
(9, 'Riyad Mahrez', 3),
(10, 'Erling Haaland', 4),
(11, 'Johan Cruyff', 4),
(12, 'Lev Jašin', 4),
(13, 'Carles Puyol', 5),
(14, 'Ryan Giggs', 5),
(15, 'Romário', 5),
(16, 'Francesco Totti', 6),
(17, 'Roberto Baggio', 6),
(18, 'Eusébio', 6),
(19, 'Didier Drogba', 7),
(20, 'Luís Figo', 7),
(21, 'Iker Casillas', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `ID_TEAM` int(10) NOT NULL,
  `name` text NOT NULL,
  `LEAGUE` text NOT NULL,
  `coach` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`ID_TEAM`, `name`, `LEAGUE`, `coach`) VALUES
(1, 'Real Madrid', 'Premier League', 'Fernando Santos'),
(2, 'Barcelona', 'Bundesliga', 'Didier Deschamps'),
(3, 'Manchester United', 'Bundesliga', 'Arsène Wenger'),
(4, 'Juventus', 'Bundesliga', 'Roberto Martinez'),
(5, 'Cheslea', 'Spanish La Liga', 'Leonardo Jardim'),
(6, 'Paris-Saint-German', 'Spanish La Liga', 'Jupp Heynckes'),
(7, 'Bayern Munich', 'Premier League', 'Tite');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`ID_GAME`);

--
-- Индексы таблицы `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`ID_PLAYER`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`ID_TEAM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
