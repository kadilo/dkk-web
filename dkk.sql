-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 11 2022 г., 17:20
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dkk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(8) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dsc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `dsc`, `pic`, `time`) VALUES
(1, '«Вместе защитим наших детей»', 'В течение недели с 6-го по 10-е сентября 2021 года в школе проходила ежегодная Акция «Телефон доверия в каждом дневнике» как мероприятие информационной компании «Вместе защитим наших детей».  Детский телефон доверия (далее ДТД) под единым общероссийским номером 8-800-2000-122 для детей, подростков и их родителей, действует в стране с 1 сентября 2010 года по инициативе Фонда поддержки детей, находящихся в трудной жизненной ситуации, в рамках общенациональной информационной кампании по противодействию жестокому обращению с детьми.\r\nРебята узнали, что консультантами ДТД работают опытные психологи, что звонок анонимный и бесплатный, что позвонившего не обидят, выслушают и обязательно помогут ему справиться со своими огорчениями и затруднениями. Что на ДТД могут позвонить и взрослые (родители, учителя) по вопросам воспитания и поведения детей, взаимоотношения с детьми. А самое главное – что разговор с консультантом останется в тайне - телефон доверия работает по принципу конфиденциальности.\r\n\r\n', '1.jpg', '2021-09-10'),
(4, '«Вместе против наркотиков!»', 'Акция проводится с целью объединения усилий органов власти всех уровней, правоохранительных органов и общественности в деятельности, направленной на противодействие распространению и потреблению наркотиков, активизации профилактической антинаркотической работы с подростками и молодежью, а также популяризации здорового образа жизни.\r\n', '2.jpg', '2021-06-14');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
