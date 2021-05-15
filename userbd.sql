-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 20 2021 г., 11:47
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `userbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `img`, `name`, `title`) VALUES
(4, 'images', 'Rice.jpg', 'Рис'),
(5, 'images', 'Lapsha.jpg', 'Лапша'),
(6, 'images', 'Desert.jpg', 'Десерты'),
(7, 'images', 'Sushi.jpg', 'Суши');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `img`, `name`, `title`) VALUES
(1, 'images', 'Desert.jpg', 'Десерты'),
(3, 'images', 'Drink.jpg', 'Напитки'),
(4, 'images', 'Lapsha.jpg', 'Лапша'),
(5, 'images', 'Rice.jpg', 'Рис'),
(6, 'images', 'Rolls.jpg', 'Роллы'),
(7, 'images', 'Sushi.jpg', 'Суши');

-- --------------------------------------------------------

--
-- Структура таблицы `username`
--

CREATE TABLE IF NOT EXISTS `username` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` tinytext NOT NULL,
  `Email` tinytext NOT NULL,
  `pass` tinytext NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `username`
--

INSERT INTO `username` (`id`, `login`, `Email`, `pass`, `role`) VALUES
(1, 'awdadw', 'awdawd@gmail.com', '$2y$10$QPdy.oEgxFMRapzxJPWHQuHTIOEVJN.uu6Dt/kgGAWarGyj7p2R1W', 0),
(4, 'Admin', 'Admin@com', '$2y$10$TjYc3sWChbwRmkto64OMlO9/CLx5zWnyQcsnuDN7/CsLcr7whS/m.', 1),
(5, 'Ivan', 'Ivan@com', '$2y$10$44hjxXufh6kMeOVTM254gePfYT/kUOgGFyc8j0s/mAV8T0NaSblRu', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
