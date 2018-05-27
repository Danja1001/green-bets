-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 05 2018 г., 17:25
-- Версия сервера: 5.5.52-MariaDB-cll-lve
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `radio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bets`
--

CREATE TABLE IF NOT EXISTS `bets` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` double NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bets`
--

INSERT INTO `bets` (`id`, `title`, `created_at`, `updated_at`, `price`, `description`) VALUES
(1, 'Standart', NULL, NULL, 333, 'adsadsadsad'),
(3, 'Premium', NULL, NULL, 999, '86%'),
(4, 'Gold', NULL, NULL, 1999, '109.1%');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `type`, `created_at`, `updated_at`) VALUES
(11, 'Igor Gudzenko', 'good1337@icloud.com', 'Спасибо ребятам за хорошие прогнозы) Не зря платил)', 1, NULL, NULL),
(12, 'Влад', 'vlade2423@mail.ru', 'Спасибо, зашли все! Буду брать еще.', 1, NULL, NULL),
(13, 'Stropo5', 'traaadrwe@gmail.com', 'Топчик, только с ними)', 1, NULL, NULL),
(14, 'Егор', 'egoryan2@mail.ru', 'Благодарю, все честно!', 1, NULL, NULL),
(15, 'RestDaset', 'gkodfdg@mail.ry', 'Лучшие бесплатные и платные прогнозы!', 1, NULL, NULL),
(20, 'Danja', 'brickk@mail.ru', 'Hello', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_31_112701_create_bets_table', 2),
(4, '2018_03_31_132003_create_proofs_table', 3),
(5, '2018_03_31_142414_create_comments_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `proofs`
--

CREATE TABLE IF NOT EXISTS `proofs` (
  `id` int(10) unsigned NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `proofs`
--

INSERT INTO `proofs` (`id`, `img`, `type`, `created_at`, `updated_at`) VALUES
(1, 'cover_2.jpg', 0, NULL, NULL),
(2, 'cover_3.jpg', 0, NULL, NULL),
(3, 'cover_3.jpg', 0, NULL, NULL),
(4, 'cover_3.jpg', 0, NULL, NULL),
(5, '15-43-13.png', 0, NULL, NULL),
(6, 'Screenshot_7.png', 1, NULL, NULL),
(7, 'Screenshot_8.png', 1, NULL, NULL),
(8, 'Screenshot_10.png', 1, NULL, NULL),
(9, 'Screenshot_11.png', 1, NULL, NULL),
(10, 'Screenshot_12.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'danja', 'danja@green-bets.com', '$2y$10$lJHZb/zp9u/z0zuj2.bb..OXm2oZtJ3KtSwaGvolhdmeAwbqMdWxu', 'xOKkprzoi27vyzlLGafefeoxczJ6ClpaDpCFzHzTQv0TAcQ59Dy5p1jNC1Lk', '2018-03-31 07:01:46', '2018-03-31 07:01:46'),
(2, 'igor', 'stuff@green-bets.com', '$2y$10$Su1i/tNY83ssRSdJ6RKtPe8kmnAYkY8/sZu.T4tKW58utpRxEDOkW', 'k2BLoiUk4PyaFmyop8ryduUwyU91w2b1c4BRPUnvh0XmkExFmT0FgGtb9vak', '2018-03-31 07:04:02', '2018-03-31 07:04:02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Индексы таблицы `proofs`
--
ALTER TABLE `proofs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bets`
--
ALTER TABLE `bets`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `proofs`
--
ALTER TABLE `proofs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
