-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2023 a las 23:49:30
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
  `IdPost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`idComment`, `user`, `message`, `IdPost`) VALUES
(1, 'albertolb', 'Hope you guys like this art', 1),
(2, 'kiiri', 'This is so cool! Wow', 1),
(3, 'kiiri', 'Hopefully i get some inspiration from this', 1),
(15, 'albertolb', 'I love abstract art, it\'s kind of hypnotic', 33),
(16, 'esther', 'estupendo ', 1);

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
(4, 'albertolb@kuenty.com', 'albertolb@kuenty.com', 'Test', 'Just another day and another test', 0, '2023-06-11', 'a9f4c5'),
(6, 'esther@kuenty.com', 'esther@kuenty.com', 'trabajo', 'hola pollito', 1, '2023-06-13', '8fdb73');

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
(37, '1686584534.jpg', 'Just wow', 0, 'ili@kuenty.com', '2023-06-12', 0),
(40, '1686688931.jpg', 'modo oscuro', 0, 'esther@kuenty.com', '2023-06-13', 0),
(41, '1686690563.jpg', 'Hopefully in the future I\'ll go and see him', 0, 'albertolb@kuenty.com', '2023-06-13', 0),
(42, '1686690577.png', 'Genius', 0, 'albertolb@kuenty.com', '2023-06-13', 0),
(43, '1686690621.jpg', 'Feeling a bit like this to be honest', 0, 'kiiri@kuenty.com', '2023-06-13', 0),
(45, '1686691091.jpg', 'Kicking the corner of the wall be like:\r\n\r\n', 0, 'kiiri@kuenty.com', '2023-06-13', 0),
(46, '1686691127.jpg', 'What would you do in this situation?', 0, 'ili@kuenty.com', '2023-06-13', 0),
(47, '1686691150.jpg', 'Great views', 0, 'ili@kuenty.com', '2023-06-13', 0),
(48, '1686691200.png', 'RIP legend', 0, 'ili@kuenty.com', '2023-06-13', 0),
(49, '1686691248.jpg', 'New acquisition', 0, 'esther@kuenty.com', '2023-06-13', 0),
(50, '1686691317.jpg', '11 year already, time flies by', 0, 'esther@kuenty.com', '2023-06-13', 0),
(51, '1686691455.jpg', 'From last night', 0, 'carlcox@gmail.com', '2023-06-13', 0),
(52, '1686691586.jpg', 'Last night was crazy. Thank you all so much', 0, 'amelielens@gmail.com', '2023-06-13', 0),
(53, '1686691702.jpg', 'Guys, that was incredible.', 0, '+X@gmail.com', '2023-06-13', 0),
(54, '1686691773.jpg', 'Buy my collab with tomorrowland in tomorrowland.com', 0, '+X@gmail.com', '2023-06-13', 0),
(55, '1686691843.jpg', 'Fire 🔥🔥', 0, '+X@gmail.com', '2023-06-13', 0),
(56, '1686691986.jpg', 'Buy our kaleidoscope merch now in tomorrowland.com', 0, 'tomorrowland@kuenty.com', '2023-06-13', 0),
(57, '1686692028.jpg', 'We have everything you could wish for', 0, 'tomorrowland@kuenty.com', '2023-06-13', 0),
(58, '1686692081.jpg', 'Buy something now at tomorrowland.com. Everything is 10% off.', 0, 'tomorrowland@kuenty.com', '2023-06-13', 0),
(59, '1686692163.jpg', 'I want to go back to this days', 0, 'albertolb@kuenty.com', '2023-06-13', 0),
(60, '1686692190.jpg', 'Legend, you will forever me missed', 0, 'albertolb@kuenty.com', '2023-06-13', 0),
(61, '1686692230.jpg', 'I din\'t plan to do drugs in Ibiza, but I love this song', 0, 'albertolb@kuenty.com', '2023-06-13', 0),
(62, '1686692276.jpg', '17th of July, please come already', 0, 'albertolb@kuenty.com', '2023-06-13', 0),
(63, '1686692328.jpg', 'They say I look like him, what do you guys think', 0, 'ili@kuenty.com', '2023-06-13', 0),
(64, '1686692512.jpg', 'New collab between this two is amazing', 0, 'ili@kuenty.com', '2023-06-13', 0),
(65, '1686692692.jpg', 'Anonymous', 0, 'ili@kuenty.com', '2023-06-13', 0),
(66, '1686692755.jpg', 'Penrose', 0, 'ili@kuenty.com', '2023-06-13', 0);

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
(1, 'albertolb', 'albertolb@kuenty.com', '2002-10-29', '2023-06-13', 642222222, '$2y$10$Rt/.ieUgqA/rYuPQ1/am..WjtM.yGjKrhD/G6nIFCS65NolJx/U5.', 'albertolb.jpg', 'A developer that loves designing pages'),
(2, 'kiiri', 'kiiri@kuenty.com', '2002-03-11', '2023-06-13', 646464646, '$2y$10$Oo5xWMZahJLzUDj0QwhDoe4yKLia.fufDhKCRuLWV.oNxLivUv6R.', 'kiiri.jpg', 'Assd'),
(3, 'ili', 'ili@kuenty.com', '1997-06-19', '2023-06-12', 444445522, '$2y$10$lmHa3X/JRzdnnom/2Cmh1ORj2pQOp5iiFNJOl3rnJdk0vIrbMBOM2', 'ili.jpg', 'Just testing'),
(18, 'esther', 'esther@kuenty.com', '1976-08-29', '2023-06-13', 660124303, '$2y$10$ewMeTsnOHC0Ceh2RTDUUxueuLremfkPGOSi9tmAnk4TLwk.vXSsJm', 'esther.jpg', 'torete'),
(19, 'carlcox', 'carlcox@gmail.com', '1962-07-29', '2023-06-13', 445512212, '$2y$10$Hn2mUuLnLnzhTXAERyO0aekhKG7HwmBit2c1tGHxD0RehrsSIvZ92', 'carlcox.jpg', 'I\'m a professional dj '),
(20, 'amelie', 'amelielens@gmail.com', '1990-05-31', '2023-06-13', 555321951, '$2y$10$35.OgzM03nA80j2uLgQ83O6CKq679MvMH4PYpYBNHk7SDKFp7XRqC', 'amelie.jpg', 'Professional dj'),
(21, 'martin garrix', '+X@gmail.com', '1996-05-14', '2023-06-13', 555621357, '$2y$10$/..I1d2vTYvH2K0UYPJjs.VOI.YMVxVjFjvt/DoEh2d59y.HzpCpC', 'martin garrix.jpg', 'Yo, Martin here. Let\'s have fun'),
(22, 'tomorrow', 'tomorrowland@kuenty.com', '2005-08-14', '2023-06-13', 2147483647, '$2y$10$p77Nw90DWJiUv90SCB6peeIuq90r2lEG.DHsYZq0Od.s3g5Fs5X6W', 'tomorrow.jpg', 'Official Tomorrowland account');

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
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `idComment` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
  ALTER TABLE `messages` AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `idPost` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
