-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 20:10:08
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `instagram`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `idComment` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `likes` varchar(255) NOT NULL,
  `response` varchar(255) NOT NULL,
  `IdPost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `userRecipient` varchar(255) NOT NULL,
  `userSender` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `randomId` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `userRecipient`, `userSender`, `subject`, `message`, `seen`, `date`, `randomId`) VALUES
(1, 'albertolb@kuenty.com', 'kiiri@kuenty.com', 'One test', 'This is a test This is a test This is a test This is a test This is a test ', 1, '2023-05-10', '21245er43'),
(2, 'kiiri@kuenty.com', 'ili@kuenty.com', 'More testing of messages', 'I love testing yay I love testing yay I love testing yay I love testing yay I love testing yay I love testing yay ', 0, '2023-06-01', 'e234daa34'),
(3, 'albertolb@kuenty.com', 'ili@kuenty.com', 'Another test', 'Why not another test Why not another test Why not another test Why not another test Why not another test ', 0, '2023-06-10', '5ea9a5'),
(4, 'albertolb@kuenty.com', 'albertolb@kuenty.com', 'Test', 'Just another day and another test', 0, '2023-06-11', 'a9f4c5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `idPost` int(255) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `likes` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uploadDate` date NOT NULL,
  `commentsNumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`idPost`, `images`, `caption`, `likes`, `email`, `uploadDate`, `commentsNumber`) VALUES
(1, '1686584225.png', 'Cool', 0, 'albertolb@kuenty.com', '2023-05-19', 0),
(32, '1686584339.jpg', 'DJ life', 0, 'albertolb@kuenty.com', '2023-06-12', 0),
(33, '1686584374.jpg', 'Abstract', 0, 'kiiri@kuenty.com', '2023-06-12', 0),
(34, '1686584406.jpg', 'Remembering good times', 0, 'kiiri@kuenty.com', '2023-06-12', 0),
(36, '1686584503.png', 'Beautiful nature', 0, 'ili@kuenty.com', '2023-06-12', 0),
(37, '1686584534.jpg', 'Just wow', 0, 'ili@kuenty.com', '2023-06-12', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUser` int(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `creationDate` date NOT NULL,
  `phoneNumber` int(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `profilePic` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `userName`, `email`, `birthDate`, `creationDate`, `phoneNumber`, `password`, `profilePic`, `description`) VALUES
(1, 'albertolb', 'albertolb@kuenty.com', '2002-10-29', '2023-06-12', 642222222, '$2y$10$ji5yMj229.tjehpfcSfi/.lXOX7z0AGcCw2si5eiZL5kE8b7Wa4lW', 'albertolb.jpg', 'I dont know'),
(2, 'kiiri', 'kiiri@kuenty.com', '2002-03-11', '2023-06-12', 646464646, '$2y$10$Oo5xWMZahJLzUDj0QwhDoe4yKLia.fufDhKCRuLWV.oNxLivUv6R.', 'kiiri.jpg', 'Assd'),
(3, 'ili', 'ili@kuenty.com', '1997-06-19', '2023-06-12', 444445522, '$2y$10$lmHa3X/JRzdnnom/2Cmh1ORj2pQOp5iiFNJOl3rnJdk0vIrbMBOM2', 'ili.jpg', 'Just testing');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idComment`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `randomId` (`randomId`) USING HASH;

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idPost`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `idPost` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
