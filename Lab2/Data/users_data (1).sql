-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 25 2021 г., 16:21
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users_data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `image` text NOT NULL,
  `page_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `cost`, `image`, `page_name`) VALUES
(1, 'КонфетОчка №1', 120, 'candy.png', 'ProductPage_1.php'),
(2, 'КонфетОчка №2', 105, 'candy.png', 'ProductPage_2.php'),
(3, 'КонфетОчка №3', 110, 'candy.png', 'ProductPage_3.php'),
(4, 'КонфетОчка №4', 90, 'candy.png', 'ProductPage_4.php'),
(5, 'КонфетОчка №5', 120, 'candy.png', 'ProductPage_5.php'),
(6, 'КонфетОчка №6', 134, 'candy.png', 'ProductPage_1.php'),
(7, 'КонфетОчка №7', 160, 'candy.png', 'ProductPage_2.php'),
(8, 'КонфетОчка №8', 156, 'candy.png', 'ProductPage_3.php'),
(9, 'КонфетОчка №9', 75, 'candy.png', 'ProductPage_4.php'),
(10, 'КонфетОчка №10', 89, 'candy.png', 'ProductPage_5.php'),
(11, 'КонфетОчка №11', 93, 'candy.png', 'ProductPage_1.php'),
(12, 'КонфетОчка №12', 200, 'candy.png', 'ProductPage_2.php'),
(13, 'КонфетОчка №13', 98, 'candy.png', 'ProductPage_3.php'),
(14, 'КонфетОчка №14', 77, 'candy.png', 'ProductPage_4.php'),
(15, 'КонфетОчка №15', 105, 'candy.png', 'ProductPage_5.php'),
(16, 'КонфетОчка №16', 110, 'candy.png', 'ProductPage_1.php');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(21, '44343', '34343'),
(24, '777', '777'),
(27, 'mao_99', ''),
(28, '4343434', '4343434'),
(29, '43434343443433433', 'arteml'),
(38, '545454', '4545454'),
(39, 'artem', 'artem'),
(42, 'Vika', '12345'),
(47, 'vika2', '12345'),
(50, '2323232323', '45252523424242'),
(60, 'artem123', '123'),
(63, 'Vaka123', '123'),
(64, 'Vassa123', '123'),
(65, 'arch123', '123'),
(66, 'Artem99', '1234'),
(68, 'Artem999', '1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
