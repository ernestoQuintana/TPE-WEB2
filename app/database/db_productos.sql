-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 00:56:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `descripcion_categoria` varchar(255) NOT NULL,
  `origen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`, `origen`) VALUES
(1, 'rostro', 'Las cremas faciales de garantizan una hidratación profunda y duradera de la piel. Dejan la piel con una sensación de confort y suavidad.', 'Alemania'),
(2, 'cuerpo', 'Descubre la gama Creme de Corps, inspirada en nuestra clásica Creme de Corps, uno de los productos  de culto desde su creación en los años 70. Sus voluptuosas y generosas texturas envuelven tu piel de suavidad y la dejan\r\nsedosa y protegida', 'Alemania'),
(3, 'hombre', 'Cuidar la piel antes y después del afeitado es esencial para tener una piel saludable.', 'Alemania'),
(4, 'cabello', 'Los champús , acondicionadores naturales limpian y nutren el cabello con total delicadeza a la vez que tratan necesidades capilares específicas. Elaborados a base de los mejores ingredientes naturales como el aceite de oliva, aguacate, extracto de limón, ', 'Alemania'),
(14, 'Programar', 'Muy cremosa para la cara', 'turquia'),
(18, 'Nino', 'es un gato de marte', 'Marte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `id_categoria`) VALUES
(2, 'Programar', 'Ponerme al dia en web2 porque sino hay tabla', 4000, 4),
(3, '\r\nUltra Light Daily UV Defense SPF50 Pa+++\r\n ', 'Loción solar hidratante de alta protección y anti-contaminación de uso diario para el rostro.\r\nProtege tu piel de los primeros signos de envejecimiento producidos por los daños del sol con nuestro SPF 50 PA ++++ de amplio espectro.\r\n', 3600, 1),
(4, 'Ultra Facial Oil-Free Gel Cream', 'Ultra Facial Oil-Free Gel Cream ayuda a reducir el exceso de grasa y a controlar los brillos durante 24 horas\r\nFormulada a partir de extracto de Imperata cylindrica y de antarcticine para facilitar la retención de hidratación\r\n', 2950, 1),
(5, '\r\nVital Skin-Strengthening Super Serum\r\n \r\n', 'Para todos los tipo de piel, incluida la sensible. Súper Sérum Antiedad Ultra- Ligero', 1550, 1),
(6, 'Facial Fuel', 'Una crema con castaño de indias facial para hombres no grasa y revitalizante. Enriquecida con vitaminas', 2500, 3),
(7, 'Facial Fuel Energizing Face Wash', 'Gel limpiador facial para hombre que reduce el exceso de grasa.\r\nFacial Fuel Energizing Face Wash está formulado con cafeína, vitaminas y revitalizantes extractos cítricos, refresca y despierta la piel.', 2100, 3),
(8, 'Age Defender Moisturizer', 'Age Defender Moisturizer es un potente tratamiento que proporciona una primera línea de defensa ante los efectos de la edad. Formulado con extracto de ciprés, nuestro «defensor ante la edad» ultraligero se absorbe fácilmente y ayuda a reafirmar de forma v', 5400, 3),
(9, 'Musk Eau de Toilette Spray', 'Tiene una salida cremosa, fresca y cítrica de néctar de bergamota y flor de naranjo\r\nLe sigue un suave buqué floral de rosa, lirio, ylang-ylang y azahar.', 3600, 3),
(10, '\r\nAge Defender Cleanser\r\n', 'Formulado con arcilla de lava marroquí\r\nLimpiador facial 2 en 1: limpia profundamente mientras exfolia, eliminando impurezas y excesos de grasa para una apariencia renovada y de aspecto más joven\r\nPara lograr una exfoliación más profunda, se recomiendo us', 2900, 3),
(11, 'Amino Acid Shampoo', 'Crea una espuma rica y cremosa para una experiencia placentera con tu champú de coco, solo con Amino Acid Shampoo.\r\nUna mezcla especial de ingredientes hidratantes proporciona suavidad y brillo, mientras que la fórmula añade cuerpo y plenitud.\r\nApto para ', 570, 4),
(12, 'Smoothing Oil-Infused Shampoo', 'Smoothing Oil-Infused Shampoo con aceite proporciona propiedades alisadoras y antiencrespamiento para un cabello suave, flexible y suelto sin eliminar los aceites propios del cabello. Formulado con aceites de argán y babasu, extraído de palmeras brasileña', 1070, 4),
(13, 'Grooming Solutions Nourishing Shampoo & Conditioner', 'Grooming Solutions Nourishing Shampoo & Conditioner: champú y acondicionador para hombre elimina acumulaciones con suavidad para dejar un cabello y barba limpios y con un tacto suave y voluminoso de aspecto saludable. Con una aromática y amaderada mezcla ', 1005, 4),
(14, 'Sunflower Color Preserving Shampoo', 'Sunflower Color Preserving Shampoo cuenta con aceites de girasol, albaricoque y una mezcla fortalecedora de vitaminas B3, B5 y B6 y filtros de protección UV\r\nAcondiciona e hidrata el cabello seco para favorecer la duración del color entre las visitas al c', 1300, 4),
(15, 'Olive Fruit Oil Deeply Repairative Hair Pak', 'Olive Fruit Oil Deeply Repairative Hair Pak es una fórmula especial pensada para el cabello deshidratado, desnutrido y dañado\r\nContiene aceite de aguacate, extracto de limón y aceite de oliva para crear un tratamiento profundamente nutritivo que hidrata y', 1340, 4),
(16, 'Creme de Corps', 'Creme de Corps es una crema hidratante corporal diseñada con los mejores ingredientes nutritivos para la piel conocidos por Kiehl\'s. Proporciona una textura rica y elegante. Deja la piel suave, lisa y maravillosamente hidratada.', 1290, 2),
(17, '\r\nCreme de Corps Soy Milk & Honey Whipped Body Butter', 'Creme de Corps Soy Milk & Honey Whipped Body Butter ofrece una sensación ligera sobre la piel que ofrece 24 horas de hidratación\r\nDe una ligereza deliciosa, se absorbe al instante y restaura, protege y suaviza la piel\r\nSe absorbe rápidamente para hidratar', 1390, 2),
(18, 'Musk Shower Gel', 'Gel limpiador corporal espumoso de sensual aroma. La glicerina junto con el sodio PCA obtenido a partir de aminoácidos, resultan dos humectantes de gran poder para retener el agua en la piel.', 1900, 2),
(63, 'Programar', 'tomar mate mientras estudio', 111111, 14),
(67, 'Crema de Manos manitas', 'Ponerme al dia en web2 porque sino hay tabla', 111111, 18),
(68, 'Matear Reload', 'Muy cremosa para la cara', 111111, 18),
(69, 'Matear Reload', 'tomar mate mientras estudio', 400, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `password_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `password_usuario`) VALUES
(1, 'admin', '$2y$10$ZlxuKNePrpQV2AX1jYsjGue7sbyodvO4KJo8b6aM8zraNHx5Xo/iu'),
(2, 'neto', '$2y$10$9QjnwlzQQ0yCIYH2pkRrw.fRp57dxTvOPuXTA7xiOWnzMCJm9aTWm'),
(3, 'marcos', '$2y$10$mh8iDdKMJIgqRpasH2VwNu4yGTtPtmMAdkIjRJ2DKyMDGWSkAHrgi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
