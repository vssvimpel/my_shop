-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 02 2018 г., 11:19
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop0408`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `description`) VALUES
(1, 'Спорт', ''),
(2, 'Отдых', ''),
(3, 'Куртки', 'сезон осень-зима'),
(4, 'Брюки', 'сезон осень-зима'),
(5, 'Джемперы', 'сезон осень-зима'),
(6, 'Обувь', 'сезон осень-зима');

-- --------------------------------------------------------

--
-- Структура таблицы `collections`
--

CREATE TABLE `collections` (
  `collection_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `collections`
--

INSERT INTO `collections` (`collection_id`, `title`, `description`) VALUES
(1, 'Мужчинам', 'Товары для мужчин'),
(2, 'Женщинам', 'Товары для женщин'),
(3, 'Детям', 'Товары для детей'),
(4, 'Инвентарь', 'Инвентарь для спорта и отдыха');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `status`, `address`, `user_id`, `comment`) VALUES
(1, 1, 'Moscow', 0, '0'),
(2, 2, 'Perm', 0, '0'),
(3, 2, 'Москва', 1, 'Самовывоз'),
(4, 2, 'Московская область', 2, 'Доставка'),
(5, 1, 'Москва', 3, 'Самовывоз');

-- --------------------------------------------------------

--
-- Структура таблицы `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_products`
--

INSERT INTO `order_products` (`order_id`, `product_id`, `size_id`, `count`, `price`) VALUES
(1, 2, 0, 1, 0),
(2, 1, 0, 1, 0),
(2, 5, 0, 1, 0),
(3, 7, 17, 1, 77999),
(3, 8, 18, 1, 1999),
(3, 10, 18, 1, 8999),
(3, 24, 12, 1, 8599),
(4, 6, 20, 1, 11999),
(4, 9, 18, 1, 4999),
(4, 11, 21, 1, 699),
(5, 12, 18, 1, 999),
(5, 13, 18, 1, 5999),
(5, 14, 19, 1, 111999),
(5, 15, 19, 1, 6999),
(5, 16, 19, 1, 30999),
(5, 17, 19, 1, 4999),
(5, 18, 9, 1, 2999),
(5, 19, 9, 1, 3999),
(5, 20, 11, 1, 8999),
(5, 22, 11, 1, 4599),
(5, 25, 10, 1, 7599);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `title`, `description`, `price`, `image`, `category_id`, `collection_id`) VALUES
(1, 'Футбольный мяч', '', 500, '1.jpg', 1, 4),
(2, 'Боксерские перчатки', 'best good', 1400, '2.jpg', 1, 4),
(3, 'Гамак', '', 2100, '3.jpg', 2, 4),
(4, 'Палатка', '', 1700, '4.jpg', 2, 4),
(5, 'Настольная игра', '', 400, '5.jpg', 2, 4),
(6, 'Куртка пуховая мужская Merrell', '', 11999, '6.jpg', 3, 1),
(7, 'Куртка утепленная мужская Descente Lorenzo', '', 77999, '7.jpg', 3, 1),
(8, 'Брюки утепленные мужские Termit', '', 1999, '8.jpg', 4, 1),
(9, 'Брюки утепленные мужские Columbia Royce Peak', '', 4999, '9.jpg', 4, 1),
(10, 'Джемпер мужской Descente T-Neck', '', 8999, '10.jpg', 5, 1),
(11, 'Джемпер мужской Outventure', '', 699, '11.jpg', 5, 1),
(12, 'Джемпер женский Outventure', '', 999, '12.jpg', 5, 2),
(13, 'Джемпер женский Ziener Jungi', '', 5999, '1.jpg', 5, 2),
(14, 'Куртка пуховая женская Descente Hana', '', 111999, '2.jpg', 3, 2),
(15, 'Куртка утепленная женская Demix', '', 6999, '3.jpg', 3, 2),
(16, 'Брюки утепленные женские Descente Selene', '', 30999, '4.jpg', 4, 2),
(17, 'Брюки утепленные женские Merrell', '', 4999, '5.jpg', 4, 2),
(18, 'Джемпер детский Ziener Jahnu', '', 2999, '6.jpg', 5, 3),
(19, 'Джемпер детский Volkl', '', 3999, '7.jpg', 5, 3),
(20, 'Куртка утепленная детская Ziener Anfredl', '', 8999, '8.jpg', 3, 3),
(21, 'Куртка утепленная  детская Merrell', '', 5999, '9.jpg', 3, 3),
(22, 'Брюки утепленные детские Ziener Alenko', '', 4599, '10.jpg', 4, 3),
(23, 'Брюки утепленные детские Nordway', '', 1599, '11.jpg', 4, 3),
(24, 'Ботинки утепленные мужские Columbia Fairbanks Omni-Heat', '', 8599, '12.jpg', 6, 1),
(25, 'Ботинки утепленные женские Merrell Thermo Shiver 6', '', 7599, '1.jpg', 6, 2),
(26, 'Ботинки утепленные детские Outventure Snowflake', '', 3599, '2.jpg', 6, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `product_sizes`
--

CREATE TABLE `product_sizes` (
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_sizes`
--

INSERT INTO `product_sizes` (`product_id`, `size_id`) VALUES
(6, 17),
(6, 18),
(6, 19),
(6, 20),
(6, 21),
(6, 22),
(6, 23),
(7, 17),
(7, 18),
(7, 19),
(7, 20),
(7, 21),
(7, 22),
(7, 23),
(8, 15),
(8, 17),
(8, 18),
(8, 19),
(8, 20),
(8, 21),
(8, 22),
(8, 23),
(8, 24),
(8, 25),
(9, 15),
(9, 17),
(9, 18),
(9, 19),
(9, 20),
(9, 21),
(9, 22),
(9, 23),
(9, 24),
(9, 25),
(10, 17),
(10, 18),
(10, 19),
(10, 20),
(10, 21),
(10, 22),
(10, 23),
(11, 17),
(11, 18),
(11, 19),
(11, 20),
(11, 21),
(11, 22),
(11, 23),
(12, 17),
(12, 18),
(12, 19),
(12, 20),
(12, 21),
(12, 22),
(12, 23),
(13, 17),
(13, 18),
(13, 19),
(13, 20),
(13, 21),
(13, 22),
(13, 23),
(14, 17),
(14, 18),
(14, 19),
(14, 20),
(14, 21),
(14, 22),
(14, 23),
(15, 17),
(15, 18),
(15, 19),
(15, 20),
(15, 21),
(15, 22),
(15, 23),
(16, 15),
(16, 17),
(16, 18),
(16, 19),
(16, 20),
(16, 21),
(16, 22),
(16, 23),
(16, 24),
(16, 25),
(17, 15),
(17, 17),
(17, 18),
(17, 19),
(17, 20),
(17, 21),
(17, 22),
(17, 23),
(17, 24),
(17, 25),
(18, 5),
(18, 7),
(18, 9),
(18, 11),
(18, 13),
(18, 15),
(19, 5),
(19, 7),
(19, 9),
(19, 11),
(19, 13),
(19, 15),
(20, 5),
(20, 7),
(20, 9),
(20, 11),
(20, 13),
(20, 15),
(21, 5),
(21, 7),
(21, 9),
(21, 11),
(21, 13),
(21, 15),
(22, 3),
(22, 5),
(22, 7),
(22, 9),
(22, 11),
(22, 13),
(22, 15),
(23, 3),
(23, 5),
(23, 7),
(23, 9),
(23, 11),
(23, 13),
(23, 15),
(24, 10),
(24, 11),
(24, 12),
(24, 13),
(24, 14),
(24, 15),
(24, 16),
(24, 17),
(25, 5),
(25, 6),
(25, 7),
(25, 8),
(25, 9),
(25, 10),
(25, 11),
(25, 12),
(25, 13),
(26, 1),
(26, 2),
(26, 3),
(26, 4),
(26, 5),
(26, 6),
(26, 7),
(26, 8),
(26, 9),
(26, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sizes`
--

INSERT INTO `sizes` (`size_id`, `value`) VALUES
(1, '30'),
(2, '31'),
(3, '32'),
(4, '33'),
(5, '34'),
(6, '35'),
(7, '36'),
(8, '37'),
(9, '38'),
(10, '39'),
(11, '40'),
(12, '41'),
(13, '42'),
(14, '43'),
(15, '44'),
(16, '45'),
(17, '46'),
(18, '48'),
(19, '50'),
(20, '52'),
(21, '54'),
(22, '56'),
(23, '58'),
(24, '60'),
(25, '62');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `name`, `login`, `pass`, `role`) VALUES
(1, 'Сергей', '', '', 2),
(2, 'Игорь', '', '', 2),
(3, 'Алла', '', '', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`collection_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_id`,`product_id`,`size_id`) USING BTREE;

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `collection_id` (`collection_id`);

--
-- Индексы таблицы `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`product_id`,`size_id`);

--
-- Индексы таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `collections`
--
ALTER TABLE `collections`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
