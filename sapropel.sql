-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 23 2021 г., 21:53
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sapropel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dredger_template`
--

CREATE TABLE `dredger_template` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `pumping` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL,
  `mining_depth` varchar(50) NOT NULL,
  `length_of_haul` varchar(50) NOT NULL,
  `discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dredger_template`
--

INSERT INTO `dredger_template` (`id`, `title`, `img`, `pumping`, `power`, `mining_depth`, `length_of_haul`, `discription`) VALUES
(1, 'Нижегородец-1', '/img/zem-nn-1.png', '400', '75', '8', '300', 'Земсняряд \"Нижегородец-1\" используется при расчистке русел рек, прудов, хозяйственных водоемов, каналов. Обеспечивает намыв песка - 40000 тонн в месяц. Вы можете купить земснаряда без технологических принадлежностей - 4,5 млн. руб.'),
(2, 'Нижегородец-2', '/img/zem-nn-2.png', '800', '250', '11', '900', 'Земсняряд \"Нижегородец-2\" используется в большинстве случаев при намыве строительных песков. Обеспечивает намыв песка до 80000 тонн в месяц. Цена земснаряда без технологических принадлежностей - 7,9 млн. руб.'),
(3, 'Нижегородец-3', '/img/zem-nn-3.png', '1600', '250', '16', '600', '\"Нижегородец-3\" может работать как от дизельно-генераторной установки мощностью 500 кВт, так и от транспортной подстанции. Обеспечивает намыв песка до 112000 тонн в месяц. Цена земснаряда без технологических принадлежностей - 13 млн. руб.');

-- --------------------------------------------------------

--
-- Структура таблицы `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `telephone` decimal(40,0) NOT NULL,
  `email` varchar(40) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `when` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `form`
--

INSERT INTO `form` (`id`, `fullname`, `telephone`, `email`, `theme`, `message`, `when`) VALUES
(83, 'апва', '73354354535', 'hj@igou.ru', 'ав', 'авввавававар', '2021-02-14 17:26:47'),
(84, 'Люба', '79616374004', 'alexnory@mail.ru', 'проверка формы', 'как форма принимает сообщение', '2021-02-15 20:18:30');

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`status_id`, `status_name`) VALUES
(1, 'администратор'),
(2, 'менеджер'),
(3, 'модератор');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `fullname`, `password`, `email`, `status`, `updated_at`) VALUES
(1, 'admin', 'Админ', '111111', 'one@m.ru', 1, '2021-02-23 20:10:56'),
(2, 'manager', 'Менеджер', '222222', 'two@m.ru', 2, '2021-02-23 20:10:56'),
(3, ' moderator', 'Модератор', '333333', 'three@m.ru', 3, '2021-02-23 20:10:56');

-- --------------------------------------------------------

--
-- Структура таблицы `zem`
--

CREATE TABLE `zem` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `discription` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zem`
--

INSERT INTO `zem` (`id`, `img`, `discription`, `price`, `title`) VALUES
(1, '/img/zem-nn-1.png', 'Намыв песка до 40 000 тонн в месяц', 'От 4,5 млн. руб.', 'Нижегородец-1'),
(2, '/img/zem-nn-2.png', 'Намыв песка до 80 000 тонн в месяц', 'От 7,9 млн. руб.', 'Нижегородец-2'),
(3, '/img/zem-nn-3.png', 'Намыв песка до 112 000 тонн в месяц', 'От 13 млн. руб.', 'Нижегородец-3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dredger_template`
--
ALTER TABLE `dredger_template`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`status_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `zem`
--
ALTER TABLE `zem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dredger_template`
--
ALTER TABLE `dredger_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `zem`
--
ALTER TABLE `zem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`status`) REFERENCES `statuses` (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
