-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 25 2020 г., 11:29
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dodo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `img`) VALUES
(1, 'Пицца из половинок', 'Соберите свою пиццу 35 см с двумя разными вкусами', 'от 520 ', '1.jpeg'),
(2, 'Цезарь', 'Свежие листья салата айсберг в конверте, цыплёнок, томаты черри, сыры чеддер и пармезан, моцарелла, сливочный соус, соус цезарь', 'от 445', '2.jpeg'),
(3, 'Песто', 'Соус песто, сливочный соус, цыплёнок, кубики брынзы, томаты черри, моцарелла', 'от 445', '3.jpeg'),
(4, 'Пепперони фреш', 'Пикантная пепперони, увеличенная порция моцареллы, томаты, томатный соус', 'от 245', '4.jpeg'),
(5, 'Сырная', 'Увеличенная порция моцареллы, томатный соус', 'от 245 ', '5.jpeg'),
(6, 'Ветчина и сыр', 'Ветчина, моцарелла, соус альфредо', 'от 295', '6.jpeg'),
(7, 'Кисло-сладкий цыпленок', 'Цыпленок, томатный соус, моцарелла, кисло-сладкий соус', 'от 295 ', '7.jpeg'),
(8, 'Ветчина и грибы', 'Ветчина, шампиньоны, увеличенная порция моцареллы, томатный соус', 'от 345', '9.jpeg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
