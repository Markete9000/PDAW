-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2020 a las 19:13:19
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pdaw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` text COLLATE utf8_spanish_ci NOT NULL,
  `incidente` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `incidencia`
--

INSERT INTO `incidencia` (`id`, `usuario`, `asunto`, `incidente`, `fecha`) VALUES
(1, 'marco2000', 'Pedido', 'No me llegó el pedido que solicité', '2020-06-05'),
(6, 'marco2000', 'Asunto de Ejemplo', 'Incidencia de ejemplo aaaaaaaaaaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaa                                  aaaaaaaaaaa aaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaa     aaaaaaaaaaa aaaaaaa aaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaaaaaa     aaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-06-06'),
(7, 'nicolas2000', 'Pedido', 'Me ha llegado el pedido incorrecto', '2020-06-06'),
(9, 'tdpt', 'Pedido', 'No me llegó el pedido que solicité', '2020-06-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `usuario`, `productos`, `precio`, `fecha`) VALUES
(1, 'marco2000', 'K3VHPUNF0-4', 39.96, '2020-06-01'),
(2, 'marco2000', 'JG7K0BF1N-2;JN4103TA0-4;K3VHPUNF0-4', 249.9, '2020-06-01'),
(3, 'marco2000', '4Y21KF4SO-1;62VYMDC5K-1;6KZL75YSH-1', 230.97, '2020-06-02'),
(5, 'marco2000', '4Y21KF4SO-2;8I5E7WRSD-2;9IZZLZ6AU-2', 899.78, '2020-06-02'),
(6, 'marco2000', '4Y21KF4SO-2', 219.98, '2020-06-02'),
(7, 'marco2000', '4Y21KF4SO-1', 109.99, '2020-06-02'),
(8, 'mvntekillv', 'YMAGABAW8-1', 4.99, '2020-06-02'),
(9, 'marco', '4Y21KF4SO-1;6KZL75YSH-3', 349.96, '2020-06-02'),
(10, 'tdpt', '8I5E7WRSD-1;6KZL75YSH-1;9IZZLZ6AU-1;9V28486XR-1;HTPGWBQDX-1;RJU7HWX7W-1;ORB49AVA4-1;LYEJ9UYXQ-1;K3VHPUNF0-1;JN4103TA0-1;JG7K0BF1N-1;IMW3B0I0Z-1;S0J78K3HN-1;TGS77AQ9T-1;UZFQHUN5W-1;YMAGABAW8-1;YUZ6TBARO-1', 1211.49, '2020-06-06'),
(11, 'tdpt', '6KZL75YSH-3;8I5E7WRSD-2', 659.95, '2020-06-06'),
(12, 'tdpt', 'YUZ6TBARO-1', 31.99, '2020-06-06'),
(13, 'marco2000', '8I5E7WRSD-1', 209.99, '2020-06-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `descripcion`, `precio`, `stock`, `imagen`, `tipo`) VALUES
('3K7M0JGJ3', 'AMD Ryzen 5 3600 3.6GHz BOX', 'Fabricados para rendir. Diseñados para ganar. Más velocidad. Más memoria. Mayor ancho de banda. Exígelos al máximo, exprime hasta la última gota de rendimiento, llévalos al límite. Los procesadores AMD Ryzen™ de 3ª generación se diseñaron para superar todas las expectativas y marcar un nuevo camino en materia de procesadores de alto rendimiento.  Los procesadores AMD Ryzen™ de 3.ª generación nacen de la tecnología de fabricación más avanzada del mundo para garantizar un rendimiento ganador y un sistema con un funcionamiento asombrosamente refrigerado y silencioso.', 189.99, 26, '../View/img/Productos/5-3.jpg', 'Procesador'),
('4Y21KF4SO', 'MSI B450 Gaming Plus MAX', 'Jugadores satisfechos con lo que necesitan de verdad, B450 GAMING PLUS MAX está equipado con Core boost, Turbo M.2, DDR4 Boost, USB 3.2 Gen2 Connector. Admite memoria DDR4, hasta 4133 (OC) MHz. Core Boost: con diseño premium y diseño de potencia totalmente digital para admitir más núcleos y proporcionar un mejor rendimiento. Audio Boost: recompensa tus oídos con una calidad de sonido de calidad de estudio para la experiencia de juego más envolvente.', 109.99, 34, '../View/img/Productos/1.jpg', 'Placa base'),
('5S3WOM53K', 'Samsung Galaxy A51 4/128GB Negro Libre', 'Cambia a la nuevo generación de Galaxy A, todo lo que amas ahora con más innovación. Una línea completa de modelos especialmente diseñada para ti. La revolucionaria cámara te permitirá capturar el mundo como lo ves. La impresionante pantalla te dará una experiencia increíble. Además, su potente batería será la clave para liberarse de las tomas de corriente y abrirá un mar de posibilidades.  Samsung Galaxy A51 cuenta con una pantalla de 6.5” FHD+ (1080x2400), cámara principal de 48MP y sensor de huella dactilar.', 269, 12, '../View/img/Productos/m.jpg', 'Smartphone'),
('62VYMDC5K', 'Corsair Harpoon Ratón Gaming 6000DPI', 'Te presentamos el Ratón Harpoon de Corsair, con 6000DPI y RGB para que elijas el color que mas te guste para su iluminación. Ha sido diseñado para ofrecerle el máximo rendimiento. Introduce un sensor de juego óptico de 6.000 DPI con seguimiento avanzado para que pueda disfrutar de un control de precisión, y un diseño ligero y estilizado para facilitar los movimientos más rápidos. Idóneo para juegos FPS, el ratón HARPOON RGB presenta un sensor de juego óptico de 6.000 DPI con seguimiento avanzado y detección de movimiento de alta velocidad para que pueda disfrutar de un control de precisión. Diseñado para adaptarse de forma natural a su mano y compatible con múltiples estilos de agarre', 40.99, 17, '../View/img/Productos/corsair-ch-9301011-eu-16.jpg', 'Raton'),
('6KZL75YSH', 'Razer Basilisk V2 Ratón Gaming 20000DPI', 'Olvídate de lo que digan los demás: defiende tu propio estilo de juego con el Razer Basilisk V2. Ajusta, cambia y afina tu ejecución con este ratón de juego extremadamente personalizable para crear tu propia marca de supremacía que dejará huella en el campo de batalla. Aprovecha este ratón programable configurando sus once botones con Razer™ Hypershift: una característica avanzada de Razer Synapse 3 que duplica las entradas del ratón. Nuestro nuevo y mejorado sensor es el líder del mercado con sus 20 000 PPP y una precisión de resolución de un 99,6 %, que garantiza que se registre perfectamente hasta el más mínimo movimiento de tu ratón óptico para juegos.', 79.99, 38, '../View/img/Productos/razer-basilisk-v2-raton-gaming-20000dpi-d6ac7b21-00c6-49dc-be97-cb44f723cba3.jpg', 'Raton'),
('7ARNTG9O7', 'Philips 243V7QDSB 23.8\" LED IPS FullHD', 'Tecnología panorámica IPS para obtener gran precisión de imagen y color. Pantalla de 16:9 con Full HD para unas imágenes nítidas. Pantalla de borde estrecho para una apariencia perfecta. SmartContrast para unos tonos negros con más matices. Ajustes predeterminados SmartImage para optimizar la configuración de imagen fácilmente. Reducción de la vista cansada gracias a la tecnología sin parpadeo.', 110.99, 26, '../View/img/Productos/g.jpg', 'Monitor'),
('7GE582VMB', 'XFX AMD Radeon RX 580 GTS', 'Obtenga tecnologías Future Ready, rendimiento de juego optimizado y control de cambio de juego en las últimas tarjetas gráficas Radeon RX 500 Series. Las tarjetas gráficas Radeon RX 500 Series cuentan con la última arquitectura Polaris que incluye los núcleos gráficos GCN de cuarta generación, un nuevo motor de visualización, nuevos núcleos multimedia, todo en la revolucionaria tecnología de proceso Next FinFET 14 para un rendimiento y eficiencia mejorados.', 175.9, 15, '../View/img/Productos/c.jpg', 'Tarjeta grafica'),
('814T29UWF', 'Gigabyte GeForce RTX 2060 OC 6GB GDDR6', 'Desarrollado por GeForce RTX ™ 2060 Integrado con 6GB GDDR6 interfaz de memoria de 192 bits Sistema de enfriamiento WINDFORCE 2X con ventiladores alternativos Ventiladores de cuchilla únicos de 90mm Placa posterior de protección Reloj de núcleo 1755 MHz (Tarjeta de referencia: 1680 MHz)', 360, 9, '../View/img/Productos/d.jpg', 'Tarjeta grafica'),
('84B401R2C', 'MSI GeForce RTX 2070 VENTUS', 'Con un nuevo diseño de doble ventilador, VENTUS muestra con orgullo sus formas industriales en colores neutros para adaptarse a cualquier construcción.  GeForce RTX funciona con Nvidia Turing, la arquitectura de GPU más avanzada del mundo para jugadores y creadores. Obtenga un rendimiento y características verdaderamente de última generación con núcleos dedicados de inteligencia artificial y trazado de rayos para la mejor experiencia.', 429.99, 32, '../View/img/Productos/e.jpg', 'Tarjeta grafica'),
('8I5E7WRSD', 'MSI MPG X570 Gaming Edge WI-Fi', 'Lleno de líneas nítidas y salientes que reflejan un magnífico diseño de colores, un equilibrio perfecto entre apariencia y rendimiento con Diseño de disipador térmico extendido, Diseño de disipador térmico Frozr, Refuerzo central, Lightning Gen4, Blindaje de E / S preinstalado y Luz mística. Es compatible con la segunda y tercera generación de AMD Ryzen ? / Ryzen ? con Radeon ? Vega Graphics y la segunda generación de AMD Ryzen ? con los procesadores de escritorio de gráficos Radeon ? para Socket AM4 Soporta memoria DDR4 Experiencia Lightning Fast Game', 209.99, 50, '../View/img/Productos/6.jpg', 'Placa base'),
('92ZKTGRZD', 'Intel Core i7-9700K 3.6Ghz', 'Sólo compatible con sus placas base basadas en chipset de la serie 300, el procesador Intel Core i7-9700K 12M cache, hasta 4.90 GHz está diseñado para juegos, creación y productividad.  Tiene una velocidad de reloj base de 3.6 GHz y viene con características como la compatibilidad con Intel Optane Memory, el cifrado AES-NI, la tecnología Intel vPro, Intel TXT, la Protección de dispositivos Intel con Boot Guard, la tecnología de virtualización Intel VT-d para E / S.', 369.9, 31, '../View/img/Productos/1539027947000-1435918.jpg', 'Procesador'),
('9IZZLZ6AU', 'MSI Z390-A PRO', 'La placa gaming MSI Z390-A PRO tiene socket Intel 1151 y soporta procesadores Intel de 8ª y 9ª generación. Processor: Supports 9th/ 8th Gen Intel® Core™ / Pentium® Gold / Celeron® processors for LGA 1151 socket. Chipset: Intel® Z390 Chipset Memory 4 x DDR4 memory slots, support up to 64GB1. Supports Dual Channel mode. Supports non-ECC, un-buffered memory. Supports Intel® Extreme Memory Profile (XMP)', 129.91, 26, '../View/img/Productos/product-6-20181008102018-5bbabee2dfad1.jpg', 'Placa base'),
('9V28486XR', 'MSI Interceptor DS B1 Ratón Gaming 1600 DPI Negro', 'El ratón gaming Interceptor DS B1 de MSI cuenta con un sensor óptico perfecto para tus juegos, detección de movimiento de alta velocidad a 37ips, aceleración de hasta 15g y 1600 DPI. El diseño ergonómico del DS B1 mejora la comodidad del usuario mientras usa el mouse y ayuda a evitar lesiones graves por el uso diario de la computadora a largo plazo.  Con empuñaduras antideslizantes laterales, asegura el agarre perfecto y nunca más perderás el control del ratón.', 40.99, 30, '../View/img/Productos/msi-interceptor-ds-b1-mouse-product-pictures-3d3.jpg', 'Raton'),
('F2PAK3ISB', 'HP 22w 21.5\" LED IPS FullHD', 'Regálale a tu escritorio un toque de elegancia Esta pantalla IPS de 53.61 cm (21,5 pulgadas) en diagonal dispone de 178 ángulos de visualización para ofrecer una experiencia de entretenimiento integral Con los puertos VGA y HDMI, esta pantalla hace que conectar tu ordenador portátil o pc de sobremesa sea una tarea sencilla y fluida Virtualmente sin bisel que rodee la pantalla, una experiencia de visualización ultra amplia que permite la instalación de varios monitores sin problemas La tecnología IPS garantiza uniformidad y precisión de imagen a través de una gama de visualización muy amplia', 89.99, 15, '../View/img/Productos/i.jpg', 'Monitor'),
('GBC42ZT4X', 'Asus Tuf Gaming K7 Teclado Mecánico Óptico', 'Domina el campo de batalla con la rápida actuación de los interruptores ópticos del TUF Gaming K7. Escoge la respuesta (táctil o linear) que mejor se adapten a tu estilo de juego y mantén el control con su compacto diseño. El K7 es resistente al agua y el polvo, tiene una superficie de aluminio aeronáutico, un reposamuñecas desmontable e iluminación Aura Sync independiente en cada tecla.', 139.99, 7, '../View/img/Productos/l.jpg', 'Teclado'),
('GPXPD6KJR', 'AOC Gaming C24G1 24\" LED FullHD 144Hz FreeSync Curva', 'Flicker Free: La tecnología Flicker-Free de AOC utiliza un panel de luz de fondo de corriente continua (corriente CC), que reduce los niveles de luz parpadeante. Al minimizar la fatiga visual y el cansancio, ¡prepárate para disfrutar de esas largas e intensas sesiones de juego con increíble comodidad! FreeSync: Sea cual sea tu configuración, obtén la frecuencia de fotogramas más alta y la visualización más suave posible gracias a la tecnología Free-Sync de AMD. Bien estés corriendo a través de explosiones o deslizándote por resbaladizas curvas bajo la lluvia, despídete de los cortes de imagen en pantalla y vence a tus oponentes sin piedad', 199, 27, '../View/img/Productos/h.jpg', 'Monitor'),
('HGK82FJAF', 'AMD Ryzen 7 3700X 3.6GHz BOX', 'Plataforma con Socket AM4 Preparada Para AMD Ryzen. Soluciones de Refrigeración AMD de Máxima Calidad. Tecnología AMD StoreMI. Utilidad AMD Ryzen™ Master. Utilidad AMD Ryzen™ Master.', 320.99, 24, '../View/img/Productos/b.jpg', 'Procesador'),
('HTPGWBQDX', 'Tempest MS100 Paladin Ratón Gaming 1600DPI', '¡Ya está aquí nuestro nuevo ratón! El ratón gaming Tempest MS100 Paladin con retroiluminación roja. Disfruta de su sensor óptico de alta resolución y respuesta. Sus 1600DPI potencian la precisión para acabar con todos tus enemigos en cualquier batalla. Tempest Paladin cuenta con un diseño totalmente simétrico y ergonómico por lo que es ideal para cualquier gamer sea diestro o zurdo.\r\nAdemás, sus materiales de alta calidad y sus patas de polímero lo convierten en una opción muy fiable para los momentos más frenéticos de la partida. Gracias a sus 8Gs de aceleración conseguirás un desplazamiento rápido y fluido, un aspecto que acompañado de su velocidad máxima de 30 IPS, harán que vueles por el monitor.', 4.99, 11, '../View/img/Productos/ms100-4.jpg', 'Raton'),
('IMVB27O83', 'Alcatel 10.66 Teléfono Móvil Negro Libre', 'Todo lo que necesitas en tus manos. Reproductor de música, radio FM, linterna, alarma, calendario, conversor... Y todo en una pantalla QQVGA de 1.8\". Cuenta con una memoria de 4MB tanto de RAM como de ROM, ampliable hasta 16GB con una tarjeta Micro SD. Con una batería de 400 mAh, podrás disfrutar del 1066D sin miedo a quedarte sin carga Captura los mejores momentos. El 1066D cuenta con una cámara trasera para tomar fotos y vídeos en resolución CIF y no perderte ningún momento.', 10.99, 6, '../View/img/Productos/p.jpg', 'Movil basico'),
('IMW3B0I0Z', 'MSI Mpg Z390 Gaming Plus', 'La placa gaming MSI Mpg Z390 Gaming Plus tiene socket Intel 1151 y soporta procesadores Intel de 8ª y 9ª generación. Processor Supports Intel® Core™ 9000 Series family/ 8th Gen Intel® Core™ / Pentium® Gold / Celeron® processors for LGA 1151 socket Chipset Intel® Z390 Chipset Memory 4 x DDR4 memory slots, support up to 64GB. Supports DDR4 4400(OC)/ 4300(OC)/ 4266(OC)/ 4200(OC)/ 4133(OC)/ 4000(OC)/ 3866(OC)/ 3733(OC)/ 3600(OC)/ 3466(OC)/ 3400(OC)/ 3333(OC)/ 3300(OC)/ 3200(OC)/ 3000(OC) / 2800(OC)/ 2666/ 2400/ 2133 MHz. Supports Dual-Channel mode Supports non-ECC, un-buffered memory. Supports Intel® Extreme Memory Profile (XMP)', 144.9, 40, '../View/img/Productos/product-7-20181008103003-5bbac12b10a3b.jpg', 'Placa base'),
('J9VBIGYD0', 'SPC Harmony Dual Sim Negro', 'Sin complicaciones. Un teléfono móvil práctico y sencillo. Dispone de botones grandes, memorización de números de emergencia y botón directo de llamada al 112. Las cosas claras. Para ver perfectamente las llamadas, cuenta con una pantalla de gran resolución y pantalla exterior para identificar las llamadas antes de descolgar. Más que llamadas. El nuevo Harmony incorpora cámara de fotos y radio y está disponible en el color blanco y negro.', 52.99, 15, '../View/img/Productos/p.jpg', 'Movil basico'),
('JG7K0BF1N', 'Owlotech START Ratón USB 1200DPI', 'Llega un nuevo modelo de ratón para PC de la mano de Owlotech, cómodo y resistente para todos aquellos que quieran tener actualizado su ordenador al mejor precio sin prescindir de ninguna característica básica.   El ratón Owlotech START, presenta una durabilidad de hasta 3 millones de pulsaciones debido a su micro switch de última generación y ha sido fabricado en polímeros de alta calidad resistente a marcas de uso diarias. Gracias a su diseño ambidiestro podrá ser usado por todo tipo de usuarios y su conexión plug and play a través de puerto USB, permite una compatibilidad total con cualquier sistema operativo del mercado.', 4.99, 10, '../View/img/Productos/owlotech-start-raton-usb-1200dpi.jpg', 'Raton'),
('JKNN6GISF', 'Corsair K55 Teclado USB RGB', 'Teclas silenciosas y sensibles, reducen el ruido al mínimo y ofrecen un tacto agradable sin comprometer el rendimiento Efecto anti-ghosting o multitáctil, registra todos los comandos y pulsaciones simultáneas con exactitud Modo de tecla de bloqueo de Windows, concéntrese en el juego evitando cualquier distracción al deshabilitar la tecla Windows mientras está en acción Retroiluminación RGB dinámica de tres zonas Inclinación ajustable del teclado para una mayor comodidad en las sesiones de juegos más largas', 55.99, 6, '../View/img/Productos/k.jpg', 'Teclado'),
('JN4103TA0', 'Logitech G603 Ratón Gaming Inalámbrico 12000DPI', 'G603, con el revolucionario sensor HE y tecnología inalámbrica LIGHTSPEED, ofrece un rendimiento excepcionalmente preciso y uniforme, y una impresionante duración de batería que establece un nuevo estándar de gaming inalámbrico. Sensor HERO para gaming de próxima generación. Administración de energía avanzada. Cambia rápidamente entre los modos HI y LO con sólo mover un conmutador. La conectividad doble con LIGHTSPEED y Bluetooth® permite conectar y controlar varios dispositivos en diversas plataformas. El ratón inalámbrico G603 para gaming ofrece hasta 500 horas con dos pilas AA, el doble que con nuestra generación anterior.', 49.99, 14, '../View/img/Productos/c1.jpg', 'Raton'),
('K3VHPUNF0', 'Logitech M170 RF Ratón Óptico Inalámbrico 1000DPI', 'Logitech M170 es un ratón con tecnología inalámbrica fiable de 2,4 Ghz sin apenas retrasos ni interferencias. Funciona hasta un año sin tener que cambiar las baterías.  La forma del mouse ofrece un cómodo soporte para la mano durante horas y horas de uso. Sólida conexión inalámbrica estable a distancias de hasta 10 metros (33 ft). Sin apenas retrasos ni interferencias. Funciona hasta un año sin tener que cambiar las baterías. El mouse inalámbrico M170 es realmente Plug and Play. Inserta el receptor en un puerto USB de la computadora y ya puedes empezar a usarlo. La forma del mouse ofrece un cómodo soporte para la mano durante horas y horas de uso.', 9.99, 27, '../View/img/Productos/m170-reliable-wireless-connectivity.jpg', 'Raton'),
('LVOWWUIQJ', 'AMD Ryzen 3 3200G 3.6 GHz BOX', 'Fabricados para rendir. Diseñados para ganar. Más velocidad. Más memoria. Mayor ancho de banda. Exígelos al máximo, exprime hasta la última gota de rendimiento, llévalos al límite. Los procesadores AMD Ryzen™ de 3ª generación se diseñaron para superar todas las expectativas y marcar un nuevo camino en materia de procesadores de alto rendimiento.  Los procesadores AMD Ryzen™ de 3.ª generación nacen de la tecnología de fabricación más avanzada del mundo para garantizar un rendimiento ganador y un sistema con un funcionamiento asombrosamente refrigerado y silencioso.', 90.99, 16, '../View/img/Productos/a.jpg', 'Procesador'),
('LYEJ9UYXQ', 'MSI X470 Gaming Plus Max', 'Las placas base MSI cuentan con toneladas de diseño conveniente e inteligente, como una conveniente zona de bloqueo de encabezado de clavija, ubicación amigable SATA y USB, etc., para que los usuarios de bricolaje puedan elegir cualquier plataforma de juego que deseen. Admite memoria DDR4, hasta 4133 (OC) MHz. Experiencia de juego increíblemente rápida: TURBO M.2, tecnología AMD StoreMI, AMD Turbo USB 3.2 Gen2.', 131.9, 65, '../View/img/Productos/sf-nvr6432-4k16p.jpg', 'Placa base'),
('O74YDJXAS', 'MSI AMD Radeon RX 5700 XT Mech OC', 'Las mejores experiencias de juego se crean doblando las reglas. La nueva serie Radeon RX 5700 con motor RDNA para un rendimiento excepcional y juegos de alta fidelidad. Tome el control con la serie Radeon RX 5700 y experimente juegos potentes y acelerados personalizados para usted.', 385.99, 22, '../View/img/Productos/f.jpg', 'Tarjeta grafica'),
('ORB49AVA4', 'MSI H310M PRO-VD Plus', 'Te presentamos la MSI H310M-PRO VD Plus, una placa base con socket Intel 1151 y chipset H310. Memory 2 x DDR4 memory slots, support up to 32GB Supports DDR4 2666/ 2400/ 2133 MHz Dual channel memory architecture Supports non-ECC, un-buffered memory Supports Intel® Extreme Memory Profile (XMP) See supported memory Slots 1 x PCIe 3.0 x16 slot 2 x PCIe 2.0 x1 slots', 58.91, 47, '../View/img/Productos/product-0-20181029172934-5bd6d2fe607d6.jpg', 'Placa base'),
('QMXX5YLSX', 'Intel Core i5-9600KF 3.7 GHz', 'Compatible con la memoria Intel® Optane™. La memoria Intel® Optane™ es un nuevo y revolucionario tipo de memoria no volátil que se encuentra entre la memoria del sistema y el almacenamiento con el fin de acelerar el desempeño y la capacidad de respuesta del sistema. Al combinarse con el controlador de la Tecnología de almacenamiento Intel® Rapid, administra de manera fluida varios niveles de almacenamiento al mismo tiempo que presenta una sola unidad virtual al sistema operativo, lo cual permite que los datos de uso frecuente residan en el nivel de almacenamiento más rápido. La memoria Intel® Optane™ requiere de configuración específica del hardware y el software.', 195.99, 29, '../View/img/Productos/5.jpg', 'Procesador'),
('QOS71N0O7', 'Tacens Mars Gaming MKXTKL Teclado Mecánico', 'El Tacens Mars Gaming MKXKTL ofrece todas las prestaciones óptimas para un teclado mecánico gaming RGB, en formato TKL. Nuevos switches mecánicos OUTEMU SQ, estructura de ABS y aluminio, reposamuñecas extraíble. Todo lo que necesitas, ahora en un diseño ultracompacto que te ofrece una total libertad de movimiento a la hora de jugar.  Más prestaciones, más espacio. Rendimiento gaming profesional y diseño ultracompacto.   Características:', 29.99, 12, '../View/img/Productos/j.jpg', 'Teclado'),
('RJU7HWX7W', 'Gigabyte B450M DS3H', 'Las placas base GIGABYTE serie 400 maximizan el potencial de su PC con la tecnología AMD StoreMI. StoreMI acelera los dispositivos de almacenamiento tradicionales para reducir los tiempos de arranque y mejorar la experiencia general del usuario. Esta utilidad fácil de usar combina la velocidad de las SSD con la alta capacidad de las unidades de disco duro en una sola unidad, mejora las velocidades de lectura / escritura del dispositivo para que coincida con las SSD, aumenta el rendimiento de los datos a un valor increíble y transforma las PC de uso cotidiano a un sistema impulsado por el rendimiento.  Además, cuenta con Smart Fan 5, con esta refrigeración los usuarios pueden asegurarse de que su PC gaming puede mantener un rendimiento estable mientras se mantiene refrigerado.', 71.99, 21, '../View/img/Productos/a1.jpg', 'Placa base'),
('S0J78K3HN', 'MSI X570-A Pro', 'Inspirado en el diseño arquitectónico, con la solución Lightning Gen 4 PCIe y M.2, Frozr Heasink, Core Boost, DDR4 Boost, Audio Boost 4, conector USB 3.2 Gen2. Soporta AMD Ryzen ™ / Ryzen ™ de 2da y 3ra generación con Radeon ™ Vega Graphics y AMD Ryzen ™ de 2da generación con Radeon ™ Graphics Desktop Processors para AM4 socket Admite 4 DIMM, memoria de doble canal DDR4 Solución Lightning Gen 4: la última solución Gen4 PCI-E y M.2', 169.99, 37, '../View/img/Productos/placa.jpg', 'Placa base'),
('TGS77AQ9T', 'Mars Gaming MM018 Ratón Gaming RGB 4800DPI', 'El MM018 es un ratón gaming RGB ergonómico y preciso, con un agarre firme y 8 botones programables para una total libertad de acción, incluyendo un botón lateral extra para un acceso rápido en todo momento. Deslízate con rapidez, consigue la mejor precisión y disfruta de una estética gamer insuperable. ¡Todo en uno!. El cuerpo del MM018 está optimizado para proporcionar un agarre cómodo y firme, permitiéndote un deslizamiento fluido en todo momento. El MM018 está equipado con un efecto respiración RGB dinámico automático, que cuenta con una transición de colores constante que potencia su estética al máximo.', 15.99, 41, '../View/img/Productos/a16.jpg', 'Raton'),
('UZFQHUN5W', 'Newskill EOS Ratón Gaming Professional RGB 16000DPI', 'Gaming mouse profesional para todos aquellos buscan llevar la calidad de su equipo un paso más allá. Eos cuenta con todas las prestaciones de un periférico profesional de alta gama: sensor óptico de última generación con hasta 16000 DPI, retroiluminación RGB y software exclusivo para poder configurarlo de la manera que más se adapte a tu modo de juego.', 49.99, 26, '../View/img/Productos/eos01main.jpg', 'Raton'),
('W4QAOG2XA', 'Alcatel OneTouch 20.08G Gris Libre', 'Pantalla TFT de 2.4 pulgadas con una resolución de 320 x 240 pixeles Resolución de cámara principal (numérica) de 2 MP Capacidad de lista de direcciones: 250 entradas Batería Li-ion con una capacidad de 140 mAh', 25.5, 4, '../View/img/Productos/r.jpg', 'Movil basico'),
('X3QH3XBXA', 'Realme 6i 4/128GB White Milk Libre', 'Desata la potencia del Realme 6i. El realme 6i lanza el primer chipset Helio G80 del mundo, que ofrece una potencia asombrosa. La CPU octa-core tiene una frecuencia principal, hasta 2.0GHz, que ofrece un rendimiento 10% mejor que la generación anterior. La GPU Mali G52 1000MHz también ofrece un 10% de mejor rendimiento. El resultado es una mayor calidad de imagen y una velocidad de fotogramas más estable que hace que el realme 6i se destaque mientras juegas.', 169, 13, '../View/img/Productos/o.jpg', 'Smartphone'),
('X4YMHTQ1F', 'Xiaomi Mi 9T 6/128GB Dual Sim Azul Libre ', 'Equipado con el procesador Qualcomm® Snapdragon™ 730 con tecnología de proceso de 8 nm, el rendimiento de un solo núcleo de la CPU mejora en un 35% y el consumo de energía se reduce en un 10%. Además, el algoritmo de Inteligencia Artificial mejora la eficiencia del procesador hasta 2,6 veces. Ya sea jugando o sacando fotos, su rendimiento no te defraudará.', 319.99, 21, '../View/img/Productos/n.jpg', 'Smartphone'),
('YMAGABAW8', 'HP X900 Ratón Óptico 1000DPI Negro', 'La calidad fiable no debería ser a cualquier coste, y con el ratón óptico HP X900 obtiene funciones impresionantes a un precio irresistible. Su forma contorneada y el tiempo de respuesta uniforme garantizan un control preciso y cómodo que está listo para la productividad diaria, todos los días. Sensor óptico 1000 ppp potente para ofrecer un movimiento preciso en la mayoría de las superficies. Solución de 3 botones y una rueda de desplazamiento integrada para obtener una productividad optimizada. Compatible con los sistemas operativos de Windows 7 y superior, y Mac X 10.x y superior.', 4.99, 23, '../View/img/Productos/d0.jpg', 'Raton'),
('YUZ6TBARO', 'Logitech G203 Prodigy Ratón Gaming 8000DPI', 'G203 Prodigy puede comunicarse a 1.000 señales por segundo. El sistema de tensión de botones avanzado aporta una experiencia de clic más exacta. Logitech G203 Prodigy Gaming Mouse se puede usar tal cual o después de configurarlo con Logitech Gaming Software. Los usuarios expertos pueden configurar 6 botones para simplificar acciones de juego. Guarda tus preferencias en la memoria integrada en el ratón, para usarlas en cualquier PC con el que lo utilices, sin tener que instalar software ni reconfigurar tus opciones en varios PC.', 31.99, 26, '../View/img/Productos/71bmdz6u22l-sl1500.jpg', 'Raton');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `usuario`, `contraseña`, `email`, `direccion`, `telefono`, `tipo`) VALUES
('marco aviles', 'marco', '1234', 'marcoavileslopez1974@gmail.com', 'asfdaf', '651651624', 'usuario'),
('Marco Antonio Avilés Torres', 'marco2000', '1234', 'Markete9000@gmail.com', 'C/ PABLO VI Portal 5 3º B 41702', '660633648', 'admin'),
('Marta Fernández', 'mvntekillv', '1234', 'martafdzz69@gmail.com', 'C/Benito', '456789123', 'usuario'),
('Nicolás Bazán Suárez', 'nicolas2000', '1234', 'nikete9000@gmail.com', 'Calle Juan de dios', '565468745', 'usuario'),
('pepe', 'pepe2000', '1234', 'pepe@gmail.com', 'ejemplo', '', 'usuario'),
('eduardo Gago rivas ', 'tdpt', '1294', 'edubrawl55@gmail.com', 'Calle Juan de dios', '656338276', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`,`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
