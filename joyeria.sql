-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-05-2015 a las 22:21:18
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `joyeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`user_id` int(10) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`user_id`, `admin`, `user_pass`) VALUES
(1, 'Estefanía', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`cat_id` int(100) NOT NULL,
  `cat_title` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_title`) VALUES
(7, 'Caballeros'),
(8, 'Damas'),
(9, 'Diseños personalizados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`customer_id` int(10) NOT NULL,
  `customer_name` text NOT NULL,
  `apellidos` text NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` text CHARACTER SET latin1 NOT NULL,
  `customer_email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `customer_pass` varchar(100) CHARACTER SET latin1 NOT NULL,
  `customer_ip` varchar(255) CHARACTER SET latin1 NOT NULL,
  `customer_image` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`customer_id`, `customer_name`, `apellidos`, `direccion`, `telefono`, `customer_email`, `customer_pass`, `customer_ip`, `customer_image`) VALUES
(6, 'Eduardo', 'Contreras Acosta', 'calle 64 x 71 y 71A', '2234533', 'eduardoica@hotmail.com', 'eduardo', '119.157.220.50', 'Captura de pantalla 2015-05-15 a las 18.23.59.png'),
(27, 'Amada', 'Solís', 'enmicasa', '1234567890', 'amadita_43@hotmail.com', '123456', '127.0.0.1', 'Captura de pantalla 2015-05-20 a las 13.42.41.png'),
(28, 'Oscar', 'Crespo', 'tixkokob', '9992438308', 'cruzazuloscar@hotmail.com', '123qwe', '127.0.0.1', 'Captura de pantalla 2015-05-20 a las 3.28.59.png'),
(29, 'Selene', 'Chalé ', 'Calle 20 # 123 entre 7 y 9 col. san francisco d', '9999009537', 'lunatic_11libra@hotmail.com', 'selene', '127.0.0.1', 'Captura de pantalla 2015-05-20 a las 16.56.12.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
`id` int(155) NOT NULL,
  `nombre` varchar(156) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(156) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(156) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `asunto`, `mensaje`) VALUES
(21, 'Rick', 'hola@gmail.com', 'Hola', 'Cotización de productos. Me gustaría saber sobre un dije personalizado con la letra ''R'''),
(22, 'correo de prueba', 'potter_rick2009@hotmail.com', 'prueba', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedido`
--

CREATE TABLE IF NOT EXISTS `lineaspedido` (
`id` int(100) NOT NULL,
  `idpedido` int(100) DEFAULT NULL,
  `idproducto` int(100) DEFAULT NULL,
  `unidades` int(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lineaspedido`
--

INSERT INTO `lineaspedido` (`id`, `idpedido`, `idproducto`, `unidades`) VALUES
(1, 4, 19, 1),
(2, 4, 33, 1),
(3, 5, 20, 1),
(4, 5, 20, 1),
(5, 5, 30, 1),
(6, 5, 30, 1),
(7, 6, 17, 2),
(8, 7, 23, 1),
(9, 7, 11, 1),
(10, 7, 11, 1),
(11, 7, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
`id` int(100) NOT NULL,
  `idcliente` int(100) DEFAULT NULL,
  `fecha` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `idcliente`, `fecha`, `estado`) VALUES
(3, 6, '20/05/15 18:50:17', '1'),
(4, 6, '21/05/15 08:00:26', '0'),
(5, 6, '21/05/15 08:44:52', '0'),
(6, 6, '21/05/15 08:47:29', '0'),
(7, 6, '21/05/15 15:17:27', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `tipo_producto` int(100) NOT NULL,
  `product_title` text COLLATE utf8_spanish_ci NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text COLLATE utf8_spanish_ci NOT NULL,
  `product_image` text CHARACTER SET utf8 NOT NULL,
  `existencias` int(255) DEFAULT NULL,
  `product_keywords` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `tipo_producto`, `product_title`, `product_price`, `product_desc`, `product_image`, `existencias`, `product_keywords`) VALUES
(11, 7, 7, 'Dije de mickey mouse', 150, 'Dije de mickey en plata', 'dije_mickey.jpg', 2, 'dije, mickey, mouse, dije de plata, plata, dijes'),
(12, 8, 8, 'Cadena para dama', 350, 'cadena de dama de plata para regalar', 'cadena.jpg', 10, 'cadena de plata, dama, cadena para dama, cadenas'),
(16, 7, 9, 'Anillo giratorio', 250, 'Anillo giratorio de plata', '11188240_380502515485634_7139303512364531665_n.jpg', 5, 'anillo, giratorio, plata'),
(17, 8, 10, 'Aretes delfín', 950, '10k', '562443_105549372980951_162009354_n.jpg', 5, 'aretes, delfin, oro, arete, 10k'),
(18, 8, 10, 'Aretes de flor', 880, 'Aretes de oro rojo de 10k', 'Captura de pantalla 2015-04-30 a las 3.11.02.png', 10, 'aretes, arete, oro, rojo, 10k'),
(19, 7, 7, 'Dije cabeza de caballo', 250, 'Dije de oro de 10k Peso: 1 gramo', 'Captura de pantalla 2015-04-30 a las 3.23.33.png', 11, 'dijes, dije, caballo, oro, 10k'),
(20, 8, 7, 'Dije de corazón', 350, 'Dije de oro diamantado', 'Captura de pantalla 2015-04-30 a las 4.18.58.png', 15, 'dijes, dije, oro, corazon, corazones'),
(21, 7, 8, 'Cadena de oro', 850, 'Oro de 10k ', 'Captura de pantalla 2015-04-30 a las 4.23.49.png', 12, 'cadenas, cadena, oro, 10k, caballeros'),
(22, 8, 9, 'Anillo de corazón ', 350, 'Anillo de oro de 10k', 'Captura de pantalla 2015-04-30 a las 8.09.41.png', 18, 'anillos, anillo, oro, corazon, 10k'),
(23, 7, 9, 'Anillo de oro', 1000, 'Anillo para caballero de 10k', 'Captura de pantalla 2015-04-30 a las 8.12.10.png', 14, 'anillos, anillo, caballero, oro, 10k'),
(25, 9, 7, 'Dije personalizado', 350, 'Dije personalizado con el nombre "Karla"', 'Captura de pantalla 2015-04-30 a las 9.44.23.png', 8, 'dije, damas, personalizado'),
(27, 9, 7, 'Dije de bugs bunny junior', 250, 'Diseño de bugs bunny en plata', '10464287_574102096032363_5970325010155432667_n.jpg', 4, 'bugs bunny, plata, dijes, dije'),
(28, 9, 7, 'Dije batman y robin', 350, 'Dije de batman y robin con nombres calados', '10350635_574103112698928_1240193904125356217_n.jpg', 4, 'dije, dijes, batman, robin, plata'),
(29, 9, 7, 'Dije personalizado en forma de conejo', 250, 'Dije conejo', '10606142_610861735689732_5770426325352653365_n.png', 10, 'dije, dijes, conejo, plata, personalizado'),
(30, 7, 7, 'Dije perfil de Cristo', 250, 'Dije perfil de Cristo en plata', 'dije2.jpg', 7, 'dije, dijes, perfil, cristo, plata, caballeros'),
(32, 8, 7, 'Dije de ballena', 250, 'Dije de ballena en plata', 'Captura de pantalla 2015-05-20 a las 1.18.37.png', 4, 'dije, dijes, ballena, plata, damas, dama'),
(33, 7, 7, 'Dije planeta Tierra', 250, 'Dije planeta Tierra en plata', 'Captura de pantalla 2015-05-20 a las 3.28.59.png', 4, 'dije, dijes, planeta tierra, plata, caballeros'),
(34, 8, 8, 'Cadena de plata hojas con fruto', 350, 'Cadena de plata de 35cm de circunferencia', 'Captura de pantalla 2015-05-20 a las 16.02.24.png', 5, 'cadena, cadenas, plata, naturaleza, hojas'),
(35, 0, 0, 'Anillo con letra ', 250, 'Anillo de oro de 10k', 'anillo.jpg', 5, 'anillo, anillos, oro, caballero, 10k'),
(36, 7, 9, 'Anillo calado con inicial', 550, 'Anillo grueso de oro de 10k con inicial', 'Captura de pantalla 2015-05-20 a las 16.14.49.png', 5, 'anillo, anillos, oro, caballero, 10k'),
(37, 8, 9, 'Anillo con forma de rosa', 350, 'Anillo de oro de 10k para dama', 'Captura de pantalla 2015-05-20 a las 16.16.26.png', 5, 'anillo, anillos, rosa, oro, 10k, damas'),
(38, 8, 10, 'Aretes de oro Tipo Channel', 350, 'Aretes tipos Channel en oro de 10k', 'Captura de pantalla 2015-05-20 a las 16.23.36.png', 5, 'arete, aretes, oro, 10k, channel'),
(39, 9, 9, 'Anillo de Harry Potter', 150, 'Anillo de plata personalizado', 'Captura de pantalla 2015-05-20 a las 16.26.04.png', 4, 'anillo, anillos, plata, harry, potter');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
`product_id` int(100) NOT NULL,
  `product_title` text COLLATE utf8_spanish_ci NOT NULL,
  `product_image` text COLLATE utf8_spanish_ci NOT NULL,
  `product_desc` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `promo`
--

INSERT INTO `promo` (`product_id`, `product_title`, `product_image`, `product_desc`) VALUES
(1, 'Promociones para ti, ¡Siempre!', 'promo2.png', 'Descuentos en alhajas según tu mes de nacimiento, Promoción disponible durante el presente año. ¡Aprovecha y ven a conocer los productos que tenemos para tí!'),
(3, 'Promoción del día de la madre.', 'mesdemayo.jpg', 'Se realizará un concurso para el 10 de mayo, la ganadora se le dará una cadena con su nombre o pulsera con nombre en plata. La dinámica sera que envíen una foto las madres con sus hijos (vía correo electrónico) y se irán subiendo a la página de FB apartir del jueves 30. La foto con mas likes gana. El concurso finaliza el 7 de mayo a las 9pm (sólo personas que vivan en Mérida)'),
(5, 'Promoción del mes de mayo', 'Captura de pantalla 2015-05-20 a las 18.58.20.png', 'En la compra del segundo anillo de bodas te llevas un 15% de descuento.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposproducto`
--

CREATE TABLE IF NOT EXISTS `tiposproducto` (
`tipoproducto_id` int(100) NOT NULL,
  `nombre_tipoproducto` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiposproducto`
--

INSERT INTO `tiposproducto` (`tipoproducto_id`, `nombre_tipoproducto`) VALUES
(7, 'dijes'),
(8, 'cadenas'),
(9, 'anillos'),
(10, 'aretes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineaspedido`
--
ALTER TABLE `lineaspedido`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`);

--
-- Indices de la tabla `promo`
--
ALTER TABLE `promo`
 ADD PRIMARY KEY (`product_id`);

--
-- Indices de la tabla `tiposproducto`
--
ALTER TABLE `tiposproducto`
 ADD PRIMARY KEY (`tipoproducto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
MODIFY `id` int(155) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `lineaspedido`
--
ALTER TABLE `lineaspedido`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `promo`
--
ALTER TABLE `promo`
MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tiposproducto`
--
ALTER TABLE `tiposproducto`
MODIFY `tipoproducto_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
