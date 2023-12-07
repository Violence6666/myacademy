-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 04 2021 г., 04:10
-- Версия сервера: 5.5.25
-- Версия PHP: 5.5.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `skelet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `famil` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=83 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `famil`, `mail`, `login`, `pass`, `role`) VALUES
(1, 'Анатолий', 'Глазов', 'glan@lenta.ru', 'glan', 'glan', 'admin'),
(2, 'Саша', 'Гук', 'alex@mail.ru', 'akex', 'alex', 'prepod'),
(4, 'Ваня', 'Иванов', 'vano@mail.ru', 'vano', 'vano', 'stud'),
(5, 'Петя', 'Петров', 'pit@mail.ru', 'pit', 'pit', 'stud'),
(6, 'Коля', 'Петров', 'serg@lenta.ru', 'nic1', '1', 'stud'),
(7, 'Максим', 'Звонарев', 'max@lenta.ru', 'max20', '1', 'stud'),
(8, 'Ира', 'Глимбовсакя', 'ira@lenta.ru', 'ira', '1', 'stud'),
(9, 'Ванесса', 'Мэй', 'vanessa@lenta.ru', 'vanessa', '1', 'stud'),
(10, 'Сергей', 'Петров', 'serg@lenta.ru', 'serg20', '1', 'stud'),
(11, 'Тимофей', 'Соколов', 'tim@mail.ru', 'tim', '1', 'stud'),
(12, 'Валера', 'Кузнецов', 'valer@lenta.ru', 'valer', '1', 'stud'),
(13, 'Настя', 'Станева', 'nast@lenta.ru', 'nastea', '1', 'stud'),
(14, 'Таня', 'Высочанчкая', 'tan@lenta.ru', 'tania', '1', 'stud'),
(15, 'Валерия', 'Папиш', 'valery@lenta.ru', 'valery', '1', 'stud'),
(16, 'Вова', 'Ковалев', 'vova@lenta.ru', 'koval', '1', 'stud'),
(17, 'Саша', 'Бобров', 'sasha@lenta.ru', 'sasha', '1', 'stud'),
(18, 'Миша', 'Костыльман', 'kost@lenta.ru', 'kost', '1', 'stud'),
(20, 'Миша', 'Морозов', 'misha@lenta.ru', 'misha', '1', 'stud'),
(21, 'Гера', 'Кузнецов', 'gera@lenta.ru', 'gera', '1', 'stud'),
(22, 'Аля', 'Камнева', 'alia@lenta.ru', 'alia', '1', 'stud'),
(23, 'Римма', 'Журавлева', 'rimma@lenta.ru', 'rimma', '1', 'stud'),
(24, 'Вова', 'Грязных', 'grvova@lenta.ru', 'grvova', '1', 'stud'),
(25, 'Коля', 'Лосевский', 'losev@lenta.ru', 'losev', '1', 'stud'),
(26, 'Сергей', 'Петров', 'serg@lenta.ru', 'serg20', '1', 'stud'),
(27, 'Максим', 'Звонарев', 'max@lenta.ru', 'max20', '1', 'stud'),
(28, 'Ира', 'Глимбовсакя', 'ira@lenta.ru', 'ira', '1', 'stud'),
(29, 'Ванесса', 'Мэй', 'vanessa@lenta.ru', 'vanessa', '1', 'stud'),
(30, 'Сергей', 'Петров', 'serg@lenta.ru', 'serg20', '1', 'stud'),
(31, 'Тимофей', 'Соколов', 'tim@mail.ru', 'tim', '1', 'stud'),
(32, 'Валера', 'Кузнецов', 'valer@lenta.ru', 'valer', '1', 'prepod'),
(33, 'Настя', 'Станева', 'nast@lenta.ru', 'nastea', '1', 'stud'),
(34, 'Таня', 'Высочанчкая', 'tan@lenta.ru', 'tania', '1', 'stud'),
(35, 'Валерия', 'Папиш', 'valery@lenta.ru', 'valery', '1', 'stud'),
(36, 'Вова', 'Ковалев', 'vova@lenta.ru', 'koval', '1', 'stud'),
(37, 'Саша', 'Бобров', 'sasha@lenta.ru', 'sasha', '1', 'stud'),
(38, 'Миша', 'Костыльман', 'kost@lenta.ru', 'kost', '1', 'stud'),
(39, 'Каппа', 'Сысоева', 'kappa@lenta.ru', 'kappa', '1', 'stud'),
(40, 'Миша', 'Морозов', 'misha@lenta.ru', 'misha', '1', 'stud'),
(41, 'Гера', 'Кузнецов', 'gera@lenta.ru', 'gera', '1', 'stud'),
(42, 'Аля', 'Камнева', 'alia@lenta.ru', 'alia', '1', 'stud'),
(43, 'Римма', 'Журавлева', 'rimma@lenta.ru', 'rimma', '1', 'stud'),
(44, 'Вова', 'Грязных', 'grvova@lenta.ru', 'grvova', '1', 'stud'),
(45, 'Коля', 'Лосевский', 'losev@lenta.ru', 'losev', '1', 'stud'),
(46, 'Сергей', 'Петров', 'serg@lenta.ru', 'serg20', '1', 'stud'),
(47, 'Максим', 'Звонарев', 'max@lenta.ru', 'max20', '1', 'stud'),
(48, 'Ира', 'Глимбовсакя', 'ira@lenta.ru', 'ira', '1', 'stud'),
(49, 'Ванесса', 'Мэй', 'vanessa@lenta.ru', 'vanessa', '1', 'stud'),
(50, 'Сергей', 'Петров', 'serg@lenta.ru', 'serg20', '1', 'stud'),
(51, 'Тимофей', 'Соколов', 'tim@mail.ru', 'tim', '1', 'stud'),
(52, 'Валера', 'Кузнецов', 'valer@lenta.ru', 'valer', '1', 'stud'),
(53, 'Настя', 'Станева', 'nast@lenta.ru', 'nastea', '1', 'stud'),
(54, 'Таня', 'Высочанчкая', 'tan@lenta.ru', 'tania', '1', 'stud'),
(55, 'Валерия', 'Папиш', 'valery@lenta.ru', 'valery', '1', 'stud'),
(56, 'Вова', 'Ковалев', 'vova@lenta.ru', 'koval', '1', 'stud'),
(57, 'Саша', 'Бобров', 'sasha@lenta.ru', 'sasha', '1', 'stud'),
(58, 'Миша', 'Костыльман', 'kost@lenta.ru', 'kost', '1', 'stud'),
(59, 'Каппа', 'Сысоева', 'kappa@lenta.ru', 'kappa', '1', 'stud'),
(60, 'Миша', 'Морозов', 'misha@lenta.ru', 'misha', '1', 'stud'),
(61, 'Гера', 'Кузнецов', 'gera@lenta.ru', 'gera', '1', 'stud'),
(62, 'Аля', 'Камнева', 'alia@lenta.ru', 'alia', '1', 'stud'),
(63, 'Римма', 'Журавлева', 'rimma@lenta.ru', 'rimma', '1', 'stud'),
(64, 'Вова', 'Грязных', 'grvova@lenta.ru', 'grvova', '1', 'stud'),
(65, 'Коля', 'Лосевский', 'losev@lenta.ru', 'losev', '1', 'stud'),
(66, 'Сергей', 'Петров', 'serg@lenta.ru', 'serg20', '1', 'stud'),
(67, 'Максим', 'Звонарев', 'max@lenta.ru', 'max20', '1', 'stud'),
(68, 'Ира', 'Глимбовсакя', 'ira@lenta.ru', 'ira', '1', 'stud'),
(69, 'Ванесса', 'Мэй', 'vanessa@lenta.ru', 'vanessa', '1', 'stud'),
(70, 'Сергей', 'Петров', 'serg@lenta.ru', 'serg20', '1', 'stud'),
(71, 'Тимофей', 'Соколов', 'tim@mail.ru', 'tim', '1', 'stud'),
(73, 'Настя', 'Станева', 'nast@lenta.ru', 'nastea', '1', 'prepod'),
(74, 'Таня', 'Высочанчкая', 'tan@lenta.ru', 'tania', '1', 'stud'),
(75, 'Валерия', 'Папиш', 'valery@lenta.ru', 'valery', '1', 'stud'),
(76, 'Вова', 'Ковалев', 'vova@lenta.ru', 'koval', '1', 'stud'),
(77, 'Саша', 'Бобров', 'sasha@lenta.ru', 'sasha', '1', 'stud'),
(78, 'Миша', 'Костыльман', 'kost@lenta.ru', 'kost', '1', 'stud'),
(80, 'Миша', 'Морозов', 'misha@lenta.ru', 'misha', '1', 'stud'),
(82, 'Аля', 'Камнева', 'alia@lenta.ru', 'alia', '1', 'stud');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
