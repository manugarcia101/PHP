-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2018 a las 20:31:14
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `place` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `brief` varchar(300) DEFAULT NULL,
  `image` varchar(200) DEFAULT 'default_act.jpg',
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `activities`
--

INSERT INTO `activities` (`id`, `date`, `place`, `name`, `brief`, `image`, `price`) VALUES
(9, '2018-12-11', 'Abisko (Sweden)', 'Aurora borealis tour', 'Have you ever seen the miracle of an aurora? There are plenty of nights with them in the artic winter, come with us and watch them in live!', 'abiskoEx.jpg', 10),
(10, '2018-05-24', 'Amsterdam (Netherlands)', 'Amsterdam guided tour', 'Amsterdam is known as the city of channels and tulips. Who would you like to explore it with?', 'amsEx.jpg', 15),
(11, '2018-06-21', 'Grenoble (France)', 'Visit tour to the bastille fortress', 'Do you remember those boring lessons about the french revolution at the school? In this tour you will feel the history running through your veins, it will never be the same! Come and join us!', 'bastilleEx.jpg', 15),
(12, '2018-05-26', 'Barcelona (Spain)', 'Park Güell visit', 'Surely you have herad about Barcelona ans its cathedral, but do you know Park Güell? If you are visiting Barcelona, what are you waiting for?', 'bcnEx.jpg', 15),
(13, '2018-09-07', 'Black forest (Germany)', 'The green hiking', 'There is no more place in the earth like this. For nature lovers, that place is just awesome.', 'BFEx.jpg', 5),
(14, '2018-07-11', 'Bilbao (Spain)', 'Gugenheim museum visit', 'Spain is sometimes not just sun and sand, Bilbao is a good exapmle of it. For those lovers of the atr museums, Bilbao and the Gugenheim its a piece of relax and enjoy.', 'bilbaoEx.jpg', 18),
(15, '2018-07-14', 'National Park of La Camargue', 'Nature in the mediterranean', 'The wild nature is all you will discover here.', 'camargueEx.jpg', 5),
(16, '2018-05-18', 'Cuenca (Spain)', 'The floating houses', 'Would you live in a floating house up to a hill? Sounds weird and impossible right? Sometimes life is weird but possible, come an see!', 'cuencaEx.jpg', 5),
(17, '2018-09-08', 'National Park of Doñana (Spain)', 'Doñana sunset dream', 'The sun rises and sets every day in the world, but there are some places with a magical atmosphere. Doñana its one of them.', 'donanaEx.jpg', 5),
(18, '2018-05-26', 'Montecarlo (Monaco)', 'F1 prix of Montecarlo', 'This is just the best city prix of f1 in the earth', 'f1.jpg', 50),
(19, '2018-07-04', 'Glen Etive (Scotland)', 'The wildness next to your car window', 'Have you ever thought about doing a Safari? Glen Etive is more than this. Take your car and go into the wild nature of Scotland.', 'glenEx.jpg', 10),
(20, '2018-10-26', 'Granada (Spain)', 'Alhambra guided tour', 'The arabians owned Granada during seven centuries! Now we can enjoy some wonderful places like the Alhambra, uniques in the planet.', 'grEx.jpg', 15),
(21, '2018-06-15', 'Swiss Mountains (Switzerland)', 'Lovely nature', 'Summer doesn\'t have to mean warm weather, or coast, if you prefer more spiritual trips, switzerland is for you.', 'hiking.jpg', 5),
(22, '2019-02-22', 'Skuleskogen (Sweden)', 'Skulskogen winter hiking ', 'Not everyone is allowed to do such a hiking in the middle of the nordic winter. When temperatures go below -15ºC, snow reaches 2 meters high, and there is no internet, no electricity and no fluent water. You feel really in the nature. Are brave enough to do this?', 'hikingWinter.jpg', 10),
(23, '2018-06-29', 'Iceland ', 'The volcano island', 'The place where the ie meet the fire and the water. Iceland is a jewell lost in the Artic Ocean. Go and explore it!', 'IcelandEx.jpg', 40),
(24, '2018-10-14', 'Jaén (Spain)', 'The unknown city tour', 'Andalusia is a land of treasures, have you ever heard about one of them? It\'s a secret, so say it slowly. It\'s name is Jaén.', 'jaenEx.jpg', 10),
(25, '2018-06-07', 'Lofoten Islands (Norway)', 'The Artic summer', 'Think about beach. Are you thinking in the Caribbean ones? Maybe in the Seychelles? What if we told you that in the Artic Ocean, there are beaches like that ones? Would you believe it?', 'lofotenEx.jpg', 5),
(26, '2018-11-17', 'Madrid (Spain) ', 'Madrid skyscraper tour', 'Would you like to be in the tallest buildings of southern Europe? Come to Madrid and join us in this tour.', 'madridEx.jpg', 15),
(27, '2018-07-20', 'Malaga (Spain)', 'Malaga\'s castle', 'Malaga is not just sun and beaches, Malaga is a marvellous city with centuries of history. Its castle is known for having some of the best views in the city.', 'malagaEx.jpg', 15),
(28, '2018-05-22', 'Milan (Italy)', 'Going downtown', 'Milan\'s gallery is one of the famoust gallery of the world. Are you not going to visit it?', 'milanEx.jpg', 10),
(29, '2018-05-06', 'Jerez de la Frontera (Spain)', 'Jerez motorbikes prix', 'Jerez is known as the capital of white wine, and the capital of spanish horse competitions, but Jerez is also the world capital of motorbikes during one weekend each year. Do you want to discover it?', 'motos1.jpg', 30),
(30, '2018-08-14', 'Poznan (Poland)', 'Beautiful Poland guided tour', 'Come and see Poznan and its great ancient history, it never dissapoints.', 'poznanEx.jpg', 20),
(31, '2018-09-28', 'Prague (Czech Republic)', 'Prague river tour', 'If you don\'t like to spend many money, but you would like to enjoy with the beauty of this world. What are you waiting for coming to Prague?', 'pragueEx.jpg', 5),
(32, '2018-06-12', 'Reine, Moskenesoy (Norway)', 'Reinebringen mountain hiking', 'There are hinkings and hikings, but this is not another one more. Reinebringen, is one of the most dificult hikings in Scandinavia. To reach the top, you have to walk around 1km but you will climb up 450 meters with no principal path, and hills up to 60% in some points. Are you fit enough to do it?', 'reineEx.png', 5),
(33, '2018-12-10', 'Rome (Italy)', 'Ancient Rome', 'Rome is the eternal city, with around 3000 years of documented history, it has a lot to tell. Go for it!', 'romaEx.jpg', 20),
(34, '2019-01-18', 'Moroccan Sahara (Morocco)', 'A winter in the dessert', 'Winter is not cold everywhere. In the Sahara, there is a lot to discover, and winter is the best season for doing it.', 'SaharaEx.jpg', 20),
(35, '2018-07-07', 'Cabrera Island (Spain)', 'The hidden Balears', 'The Balears islands are not just party and summer relax, they have hidden treasures above and down the water. Would you like to explore them?', 'sdIbiza.jpg', 80),
(36, '2018-07-25', 'Stockholm (Sweden)', 'Beautiful Stockholm city sightseeing tour', 'Stockholm is named the Venice of the norht. But here in Stockholm we belive, that this city is further better than its southern sister.', 'stockEx.jpg', 20),
(37, '2018-06-29', 'Paris (France) ', 'Roland Garros tenis grand slam', 'The best tennis players of the ATP ranking will be here, why don\'t you come also to watch them playing?', 'tenis1.jpg', 120),
(38, '2018-07-14', 'London, England (United Kingdom)', 'Wimbledon tenis grand slam', 'The best tennis players of the ATP ranking will be here, why don\'t you come also to watch them playing?', 'tenis2.jpg', 140),
(39, '2018-06-26', 'Copenhague (Denmark)', 'Tivoli Park', 'Tematics Parks are awesome, but the Tivoli of Copenhague, belongs to another level. ', 'tivoliCopEx.jpg', 20),
(40, '2018-07-25', 'Turin (Italy)', 'Turin\'s downtown', 'North of Italy is awesome, but have you ever visit Turin?', 'torinoEx.jpg', 10),
(41, '2018-05-31', 'Borosa river, Cazorla (Spain)', 'Trekking in Cazorla', 'The Borosa is one of the best river trails of the natural park of Cazorla. Who would you like to explore it with?', 'trekkingBorosa.jpg', 5),
(42, '2019-09-19', 'Ronda (Spain)', 'Kings walking trekking trip', 'One of the most amazing trekkings of the world, its this one. It goes through bridges and mountains. It is also known as one of the most dangerous in the world.', 'trekkingCaminito.jpg', 30),
(43, '2019-03-15', 'Veleta Peak, Sierra Nevada (Spain)', 'Winter Hiking to Veleta\'s Peak', 'With 3392 meters high the Veleta is one of the tallest mountains of south Europe, would you like to go there?', 'veletaWinter.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(80) NOT NULL,
  `brief` varchar(140) DEFAULT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'default_item.jpg',
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `name`, `brief`, `image`, `price`) VALUES
(19, 'Mozart\'s', 'Souvenirs with the face of mozart', 'aus.jpg', 2),
(20, 'Charleroi magnet', 'Magnet of the southern city of Charleroi in Belgium', 'bel1.jpg', 2),
(21, 'Bruges magnet', 'Magnet of the city of Belgium', 'bel2.jpg', 2),
(22, 'Brussels magnet', 'Magnet of the city of Brussels', 'bel3.jpg', 2),
(23, 'Cern\'s pendant', 'Made for Cern lovers', 'cern.jpg', 3),
(24, 'Prague Magnet 3D', 'Prague magnet with surface in 3D', 'cz2.jpg', 2),
(25, 'Prague Magnet ', 'Prague/Czech Republic Magnet ', 'czM.jpg', 2),
(26, 'French flag', 'The colors of France, just in a flag', 'fr.jpg', 10),
(27, 'Mini Triumph Arch of Paris', 'Little representation of this famous arch', 'fr2.jpg', 12),
(28, 'Eiffel key ring', 'Key ring with the Eiffel Tower in it', 'fr1.jpg', 6),
(29, 'Cannes plate', 'Ceramic plate of Cannes', 'fr3.jpg', 24),
(30, 'Italian flag', 'For those who like to feel the colors of Italy', 'it.jpg', 10),
(31, 'Amsterdam\'s magnet', 'Magnet of the famous buildings of Amsterdam', 'nd.jpg', 2),
(32, 'Spanish flag', 'For those who want to have the colors of Spain with them', 'sp.jpg', 10),
(33, 'Spanish bull', 'Little ceramic figure of the tipical spanish icon', 'sp1.jpg', 16),
(34, 'Spanish ceramic plates', 'Spanish ceramic from the region of Andalusia', 'sp2.jpg', 12),
(35, 'Abanico', 'Tipical summer item of Andalusia', 'sp3.jpg', 4),
(36, 'Spanish dancer', 'Tipical spanish dancer of flamenco music', 'sp4.jpg', 14),
(37, 'Mini Sagrada Familia', 'A mini representation of the famous cathedral of Barcelona', 'sp5.jpg', 16),
(38, 'Swedish flag', 'For those who want to feel the colors of Sweden with them', 'sw.png', 10),
(39, 'Swedish horse', 'This horse is the National simbol of Sweden. Its made of wood and painted by hand.', 'sw1.jpg', 18),
(40, 'Turkish lamps', 'Precious lamps made in Turkey. They are just fascinating.', 'tk2.jpg', 50),
(41, 'Viking horn', 'Do you want to feel like a Viking? Then you definitely need this horn.', 'sw2.jpg', 40),
(42, 'Turkish flag', 'For those who want to feel the colors of Turkey with them', 'tk.jpg', 10),
(43, 'Marmara\'s magnet', 'Little fridge magnet of the narrow sea of Marmara, in Turkey.', 'tk1.jpg', 2),
(44, 'Sofia\'s magnet', 'Magnet of Santa Sofia\'s (Istanbul)', 'tk3.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `content` varchar(1000) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `age` int(3) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `surname` varchar(80) DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(80) NOT NULL,
  `group` enum('1','2') NOT NULL,
  `bio` varchar(1000) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `photo` varchar(200) DEFAULT 'profile.png',
  `background` varchar(200) DEFAULT 'fondo_profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`age`, `name`, `surname`, `username`, `password`, `email`, `group`, `bio`, `city`, `photo`, `background`) VALUES
(22, 'Alvaro', '', 'aco00032', '$2y$10$A6tgmQ1LzM04vgo42eKhIOQJAf4s0lwLxytSrPadaO/gtZAxeGNVa', 'aco00032@red.ujaen.es', '2', NULL, NULL, 'profile.png', 'fondo_profile.jpg'),
(22, 'Arturo', 'Cantero Robles', 'acr00058', '$2y$10$w8kN/yV/WVDC7sm1D1r8FeUYNi71PCpjm8a9S6jU6b2qTcU0tLfH.', 'acr00058@red.ujaen.es', '2', '', 'Jaén', 'profile.png', 'fondo_profile.jpg'),
(22, 'Alberto José', 'Gutiérrez Megías', 'ajgm0018', '$2y$10$AFJ.8A5MjzmS9w.KsKBErOp5kLE6tb0SbY5OLGmkFAkn1zLE/kf1W', 'ajgm0018@red.ujaen.es', '2', NULL, NULL, 'pic6.jpg', 'fondo_profile.jpg'),
(22, 'Antonio Jesús', 'Viso Sánchez', 'ajvs0003', '$2y$10$YE17BR6d4xh813kVlJL4YOQ9s/.2uAhb4eDQRGTOnyC4o7n8M5Vui', 'ajvs0003@red.ujaen.es', '2', NULL, NULL, 'pic6.jpg', 'fondo_profile.jpg'),
(22, 'Alfonso', 'López Ruiz', 'alr00048', '$2y$10$TNINZ62mqsAtnmlBthhM.ekB/NVs9UEk.U57T72k9I8l5qCIJUorG', 'alr00048@red.ujaen.es', '2', NULL, NULL, 'profile.png', 'fondo_profile.jpg'),
(22, 'Arturo', 'Montejo Ráez', 'amontejo', '$2y$10$4Rx1BBhzK5fk6cJ0LBlBde3N0QB7sq95nsD.RUbIWurlQX4aPUZcu', 'amontejo@ujaen.es', '2', 'I am the awesome teacher of web technologies', 'Jaén', 'pic2.jpg', 'fondo_profile.jpg'),
(22, 'Alejandro', 'Ureña Marín', 'aum00006', '$2y$10$PfqIYNSkSUefRGM8KKB0n.RLyTRUnNarWKaxRsCoHfNR4QT6qSXWu', 'aum00006@red.ujaen.es', '2', 'I am one of the cool developers of this web app', 'Jaén', 'pic2.jpg', 'fondo_profile.jpg'),
(22, 'Bojan', 'Vujanac', 'bv000005', '$2y$10$.Bd/du4Uv6hhvGtp3Cql7uKpHlllzu4ZgmJ60B6GalcH5W4EdkCGi', 'bv000005@red.ujaen.es', '2', 'I am one of the cool product owners of this web app', NULL, 'pic4.jpg', 'fondo_profile.jpg'),
(22, 'ea000020', '', 'ea000020', '$2y$10$6KY4C6lROg6PMyAHfFJDHOaoMHSwZ9vaI5kgFKAvA80oaNuyEp5vK', 'ea000020@red.ujaen.es', '2', NULL, NULL, 'profile.png', 'fondo_profile.jpg'),
(22, 'Guillermo Santiago', 'Vidal Aldarias', 'gsva0001', '$2y$10$.hvD2chI1khddVk1GCxw2u/PGlog66YV/ULf/eikBfuZjyxq8.odW', 'gsva0001@red.ujaen.es', '2', NULL, NULL, 'profile.png', 'fondo_profile.jpg'),
(22, 'Hugo ', 'Romacho Ortega', 'hro00002', '$2y$10$AJXtOfjdyava1JOqMgHVtO0t01OANMFVYH3lg.9iObn/aC9/cgqc.', 'hro00002@red.ujaen.es', '2', NULL, NULL, 'profile.png', 'fondo_profile.jpg'),
(22, 'Jiri', 'Vrbas', 'jv000008', '$2y$10$.0x6nZlJ.sqoKIAp3q1RDOY39Xt8G14ujLqri04CF9GRvPcRPUttS', 'jv000008@red.ujaen.es', '2', 'I am one of the cool product owners of this web app', NULL, 'pic4.jpg', 'fondo_profile.jpg'),
(22, 'Manuel', 'García López', 'mgl00050', '$2y$10$esfccMFEtZ7QGWSnlY3l.OHYJuAMvfkz7Xp.2Ak8dBcPjd1hBcSbe', 'manugarcial96@gmail.com', '2', 'I am one of the cool developers of this web app', 'Jaén', 'pic4.jpg', 'fondo_profile.jpg'),
(22, 'Pierre-Simon', 'Callist Yannick', 'pst00006', '$2y$10$dbcuI2YpK8yjATwK/K6w5eMz9O.1P/GmobhWv508G5nAQzNG3M45.', 'pst00006@red.ujaen.es', '2', NULL, NULL, 'pic6.jpg', 'fondo_profile.jpg'),
(22, 'Rafael', 'Martínez Rubio', 'rmr00034', '$2y$10$.i9IA2L5NAgPgIv.bfDJGeDApRc1dzCzMlsmUiVkrDNXAPM1QICsu', 'rmr00034@red.ujaen.es', '2', NULL, NULL, 'pic6.jpg', 'fondo_profile.jpg'),
(21, 'root', 'Admin', 'root', '$2y$10$dyaKLK5CRRQ..EgnqaM2d.LU2ttboLTPIy2WoWc8vEolP8lAIltB2', 'root@gmail.com', '1', 'I am the boss guys', 'The entire world', 'pic2.jpg', 'prueba.jpg'),
(21, 'tester', 'tester', 'tester', '$2y$10$RIPNIdd6.1Vl/Z6ldDcytO1d2jtuRRXR9uRmJUVgkQreh92XFXWVS', 'tester@gmail.com', '2', NULL, 'Jodar', 'pic6.jpg', 'fondo_profile.jpg'),
(22, 'vck00001', '', 'vck00001', '$2y$10$7QOYnP1bTPz92kb7eO4xteeOSfz0CQ.5Y4qY77Jps.5sYuz6GQBau', 'vck00001@red.ujaen.es', '2', NULL, NULL, 'profile.png', 'fondo_profile.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersactivities`
--

CREATE TABLE `usersactivities` (
  `idUsers` varchar(80) NOT NULL,
  `idActivities` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersitems`
--

CREATE TABLE `usersitems` (
  `idUsers` varchar(80) NOT NULL,
  `idItems` int(11) UNSIGNED NOT NULL,
  `reservationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersusers`
--

CREATE TABLE `usersusers` (
  `idUsers1` varchar(80) NOT NULL,
  `idUsers2` varchar(80) NOT NULL,
  `levelfriendship` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `usersactivities`
--
ALTER TABLE `usersactivities`
  ADD PRIMARY KEY (`idUsers`,`idActivities`),
  ADD UNIQUE KEY `idActivities` (`idActivities`,`idUsers`) USING BTREE;

--
-- Indices de la tabla `usersitems`
--
ALTER TABLE `usersitems`
  ADD PRIMARY KEY (`idUsers`,`idItems`),
  ADD UNIQUE KEY `idItems` (`idItems`,`idUsers`) USING BTREE;

--
-- Indices de la tabla `usersusers`
--
ALTER TABLE `usersusers`
  ADD PRIMARY KEY (`idUsers1`,`idUsers2`),
  ADD UNIQUE KEY `idUsers2` (`idUsers2`,`idUsers1`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usersactivities`
--
ALTER TABLE `usersactivities`
  ADD CONSTRAINT `usersactivities_ibfk_1` FOREIGN KEY (`idActivities`) REFERENCES `activities` (`id`);

--
-- Filtros para la tabla `usersitems`
--
ALTER TABLE `usersitems`
  ADD CONSTRAINT `usersitems_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `usersitems_ibfk_2` FOREIGN KEY (`idItems`) REFERENCES `items` (`id`);

--
-- Filtros para la tabla `usersusers`
--
ALTER TABLE `usersusers`
  ADD CONSTRAINT `usersusers_ibfk_1` FOREIGN KEY (`idUsers1`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `usersusers_ibfk_2` FOREIGN KEY (`idUsers2`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
