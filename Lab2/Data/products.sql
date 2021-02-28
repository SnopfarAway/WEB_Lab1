-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 28 2021 г., 15:46
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.2

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
(16, 'КонфетОчка №16', 110, 'candy.png', 'ProductPage_1.php'),
(17, 'КонфетОчка №17', 120, 'candy.png', 'ProductPage_1.php'),
(18, 'КонфетОчка №18', 105, 'candy.png', 'ProductPage_2.php'),
(19, 'КонфетОчка №19', 110, 'candy.png', 'ProductPage_3.php'),
(20, 'КонфетОчка №20', 90, 'candy.png', 'ProductPage_4.php'),
(21, 'КонфетОчка №21', 120, 'candy.png', 'ProductPage_5.php'),
(22, 'КонфетОчка №22', 134, 'candy.png', 'ProductPage_1.php'),
(23, 'КонфетОчка №23', 160, 'candy.png', 'ProductPage_2.php'),
(24, 'КонфетОчка №24', 156, 'candy.png', 'ProductPage_3.php'),
(25, 'КонфетОчка №25', 75, 'candy.png', 'ProductPage_4.php'),
(26, 'КонфетОчка №26', 89, 'candy.png', 'ProductPage_5.php'),
(27, 'КонфетОчка №27', 93, 'candy.png', 'ProductPage_1.php'),
(28, 'КонфетОчка №28', 200, 'candy.png', 'ProductPage_2.php'),
(29, 'КонфетОчка №29', 98, 'candy.png', 'ProductPage_3.php'),
(30, 'КонфетОчка №30', 77, 'candy.png', 'ProductPage_4.php'),
(31, 'КонфетОчка №31', 105, 'candy.png', 'ProductPage_5.php'),
(32, 'КонфетОчка №32', 110, 'candy.png', 'ProductPage_1.php');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
