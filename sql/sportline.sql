-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bq1xy12lmbv7wnjcxpnz-mysql.services.clever-cloud.com:3306
-- Generation Time: Nov 25, 2022 at 04:25 PM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bq1xy12lmbv7wnjcxpnz`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`) VALUES
(1, 'Одежда', 'img/sportswear.png'),
(2, 'Обувь', 'img/shoes.png'),
(3, 'Экипировка', 'img/uniforms.png'),
(4, 'Снаряды', 'img/equipment.png'),
(5, 'Питание', 'img/nutrition.png');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int NOT NULL,
  `username` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Таблица клиентов';

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `username`, `login`, `password`) VALUES
(12, 'artem', 'Artemka', 'qGbgwe123'),
(13, 'Alexander', 'Sasha12', 'qwGhtbe123'),
(14, 'myslitel666', 'Nikita', 'dgGfgHjd789'),
(24, 'Виталий Масленников', 'Vitaly', 'gYUj6776htrhtrh'),
(25, 'Артём Курдин', 'artem', 'hFgf5hhd830'),
(26, 'Тагир', 'Tagir45', 'Dataphp621'),
(27, 'Николай', 'Nikolay56', 'some54Password'),
(28, 'Иван Иванов', 'Vanya', 'somePassw781ord'),
(29, 'Сергей', 'Sergey', 'somePassw321ord'),
(30, 'Владимир Иванович', 'Vladimir1970', 'somePassword864!'),
(34, 'Иванов Иван', 'ivani.ivanov@gmail', '12gfdg67@8'),
(35, 'Tagir', 'Tagir45', 'fFgghfgh23'),
(36, 'user1', 'user1', 'qWERTYUIOP[]ASDFGHJKL;&#39;ZXCVBNM,.1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int UNSIGNED NOT NULL,
  `img` varchar(300) NOT NULL,
  `number_orders` int UNSIGNED DEFAULT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `number_orders`, `id_category`) VALUES
(1, 'Куртка утеплённая для мальчиков Glissad', 5199, '/onlineStoreProfessional/img/istockphoto-1350420536-612x612.jpg', 5232, 1),
(2, 'Кроссовки Northland Reisen Mid Ltr', 8599, '/onlineStoreProfessional/img/istockphoto-885967704-612x612.jpg', 3312, 2),
(3, 'Куртка утепленная мужская Protest', 11999, '/onlineStoreProfessional/img/istockphoto-498658044-612x612.jpg', 1231, 1),
(4, 'Куртка утепленная женская Termit', 4999, '/onlineStoreProfessional/img/istockphoto-1364031095-612x612.jpg', 2413, 1),
(5, 'Футболка женская Puma', 599, '/onlineStoreProfessional/img/red-t-shirt-with-colored-detail.jpg', 66, 1),
(6, 'Шорты мужские Adidas', 799, '/onlineStoreProfessional/img/istockphoto-973758234-612x612.jpg', 84, 1),
(7, 'Брюки мужские Reebok', 1499, '/onlineStoreProfessional/img/istockphoto-1250426834-612x612.jpg', 47, 1),
(8, 'Худи мужское Adidas', 3999, '/onlineStoreProfessional/img/istockphoto-1047448642-612x612.jpg', 33, 1),
(9, 'Скейтборд чёрный Termit', 1999, '/onlineStoreProfessional/img/istockphoto-1202959751-612x612.jpg', 4300, 3),
(10, 'Коньки фигурные белые Edea', 2999, '/onlineStoreProfessional/img/istockphoto-173596684-612x612.jpg', 34, 3),
(11, 'Коньки хоккейные чёрные Bauer', 3999, '/onlineStoreProfessional/img/istockphoto-96924312-612x612.jpg', 54, 3),
(12, 'Шлем хоккейный красный Bauer', 3199, '/onlineStoreProfessional/img/istockphoto-830079740-612x612.jpg', 76, 3),
(13, 'Мяч футбольный Nike', 699, '/onlineStoreProfessional/img/istockphoto-610241662-612x612.jpg', 43, 4),
(14, 'Мяч баскетбольный Spalding', 799, '/onlineStoreProfessional/img/istockphoto-170096587-612x612.jpg', 55, 4),
(15, 'Мяч для регби Gilbert', 799, '/onlineStoreProfessional/img/istockphoto-1195476055-612x612.jpg', 53, 4),
(16, 'Штанга Original FitTools', 6999, '/onlineStoreProfessional/img/istockphoto-531520849-612x612.jpg', 59, 4),
(17, 'Протеиновый батончик GO ON Nutrition', 40, '/onlineStoreProfessional/img/istockphoto-1150058503-612x612.jpg', 52, 5),
(18, 'Гейнер Maxler', 800, '/onlineStoreProfessional/img/istockphoto-1200872324-612x612.jpg', 83, 5),
(19, 'Аминокислоты BSN', 700, '/onlineStoreProfessional/img/istockphoto-1198310892-612x612.jpg', 25, 5),
(20, 'Витамины GLS', 700, '/onlineStoreProfessional/img/istockphoto-1134430732-612x612.jpg', 37, 5),
(21, 'Кроссовки зелёные Adidas', 3499, '/onlineStoreProfessional/img/istockphoto-623270836-612x612.jpg', 69, 2),
(22, 'Кеды белые Puma', 3299, '/onlineStoreProfessional/img/istockphoto-1212922499-612x612.jpg', 24, 2),
(23, 'Кроссовки белые Demix', 3999, '/onlineStoreProfessional/img/istockphoto-956501428-612x612.jpg', 67, 2),
(24, 'Кеды красные Reebok', 3499, '/onlineStoreProfessional/img/istockphoto-495204658-612x612.jpg', 45, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `client_id` int DEFAULT NULL,
  `topic` text NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `client_id`, `topic`, `email`, `name`, `message`) VALUES
(7, NULL, 'Отличный магазин', 'fab@mail.ru', 'Андрей', 'Спасибо вам!'),
(8, NULL, 'Удобный сайт', 'Sanya789@yandex.ru', 'Александр', 'Буду пользоваться ещё!'),
(9, NULL, 'Не понравились ботинки', 'NewHum@mail.ru', 'Человек34', 'В следующий раз закажу другие'),
(10, NULL, 'Прекрасные цены', 'YanaMT@mail.com', 'Яна', 'Спасибо, что не завышаете цены!'),
(11, NULL, 'Хороший магазин', 'ghj56@yandex.ru', 'Григорий', 'Доставляют очень быстро'),
(12, NULL, 'Very good shop', 'JohnNew@rambler.us', 'John', 'I will come here again'),
(13, NULL, 'Плохие брюки', 'iop66@mail.ru', 'Дмитрий', 'Брюки очень низкого качества, купил совсем недавно'),
(14, NULL, 'Отличные мячи', 'Nikita43@yandex.com', 'Никита', 'Купил футбольный мяч здесь, очень доволен!'),
(15, NULL, 'Прекрасный интерфейс', 'Alex67@mail.ru', 'Саша54', 'Всё очень удобно и понятно'),
(16, NULL, 'Высокие цены', 'EgorEg.rambler.com', 'Егор', 'Цены намного выше, чем в других магазинах');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
