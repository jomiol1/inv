-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2020 at 10:37 AM
-- Server version: 10.1.48-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fenixi_inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_inv`
--

CREATE TABLE `add_inv` (
  `id` int(11) NOT NULL,
  `investor_id` int(11) NOT NULL,
  `add_inv_val` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `add_inv_date` date NOT NULL,
  `add_inv_day` int(11) NOT NULL,
  `id_mes` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `day_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `add_inv`
--

INSERT INTO `add_inv` (`id`, `investor_id`, `add_inv_val`, `add_inv_date`, `add_inv_day`, `id_mes`, `active`, `day_flag`) VALUES
(1, 1, '5000000', '2020-04-30', 30, 29, 1, 1),
(2, 7, '2000000', '2020-04-30', 30, 29, 1, 1),
(3, 48, '30000000', '2020-04-30', 13, 29, 1, 1),
(4, 7, '2000000', '2020-06-02', 30, 29, 1, 1),
(5, 7, '1000000', '2020-06-02', 0, 29, 1, 1),
(6, 18, '10000000', '2020-06-02', 19, 30, 1, 1),
(7, 61, '20000000', '2020-06-02', 17, 30, 1, 1),
(8, 50, '7000000', '2020-06-02', 16, 30, 1, 1),
(9, 19, '8000000', '2020-06-02', 18, 30, 1, 1),
(10, 45, '13118', '2020-06-03', 30, 30, 1, 1),
(11, 7, '2000000', '2020-07-02', 29, 31, 1, 1),
(12, 20, '3000000', '2020-07-02', 20, 31, 1, 1),
(13, 50, '7000000', '2020-07-02', 18, 31, 1, 1),
(14, 13, '10000000', '2020-07-02', 27, 31, 1, 1),
(15, 50, '3000000', '2020-07-06', 0, 31, 1, 1),
(16, 9, '9000000', '2020-07-31', 22, 31, 1, 1),
(17, 13, '34000000', '2020-07-10', 14, 32, 1, 1),
(18, 65, '6845500', '2020-07-14', 10, 32, 1, 1),
(19, 55, '4000000', '2020-07-23', 1, 32, 1, 1),
(20, 17, '10000000', '2020-06-30', 24, 32, 1, 1),
(21, 47, '40000000', '2020-07-17', 7, 32, 1, 1),
(22, 17, '30000000', '2020-07-22', 2, 32, 1, 1),
(23, 41, '10000000', '2020-07-13', 13, 32, 1, 1),
(24, 60, '10000000', '2020-07-28', 0, 32, 1, 1),
(25, 50, '5566000', '2020-06-30', 30, 31, 1, 1),
(26, 50, '11434000', '2020-07-02', 30, 32, 1, 1),
(27, 50, '8000000', '2020-07-16', 10, 32, 1, 1),
(28, 7, '1000000', '2020-07-02', 23, 32, 1, 1),
(29, 79, '8000000', '2020-08-24', 0, 33, 1, 1),
(30, 9, '1000000', '2020-08-10', 14, 33, 1, 1),
(31, 49, '5000000', '2020-08-03', 21, 33, 1, 1),
(32, 80, '3000000', '2020-08-22', 2, 33, 1, 1),
(33, 68, '7000000', '2020-08-26', 1, 33, 1, 1),
(34, 41, '5000000', '2020-08-14', 10, 33, 1, 1),
(35, 42, '5000', '2020-08-12', 12, 33, 1, 1),
(36, 72, '10000000', '2020-08-11', 13, 33, 1, 1),
(37, 46, '1850000', '2020-08-05', 19, 33, 1, 1),
(38, 50, '11000000', '2020-08-01', 30, 33, 1, 1),
(39, 3, '50', '2020-09-01', 30, 33, 1, 1),
(40, 9, '1320000', '2020-09-01', 23, 33, 1, 1),
(41, 75, '5000000', '2020-09-03', 21, 34, 1, 0),
(42, 80, '9000000', '2020-09-23', 1, 34, 1, 0),
(43, 70, '1500', '2020-09-21', 3, 34, 1, 0),
(44, 50, '9000000', '2020-09-30', 0, 34, 1, 0),
(45, 56, '67000000', '2020-09-03', 21, 34, 1, 0),
(46, 50, '3000000', '2020-09-02', 25, 34, 1, 0),
(47, 1, '5000000', '2020-10-09', 15, 35, 1, 0),
(48, 18, '3000000', '2020-10-01', 23, 35, 1, 0),
(51, 50, '30000000', '2020-10-09', 16, 35, 1, 0),
(52, 50, '11000000', '2020-10-13', 14, 35, 1, 0),
(53, 13, '27000000', '2020-10-13', 11, 35, 1, 0),
(54, 89, '3660000', '2020-10-20', 4, 35, 1, 0),
(55, 79, '4000000', '2020-10-23', 1, 35, 1, 0),
(56, 50, '4000000', '2020-10-20', 7, 35, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `binnacle`
--

CREATE TABLE `binnacle` (
  `id` int(11) NOT NULL,
  `id_investor` int(11) NOT NULL,
  `action` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `types` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `date` date NOT NULL,
  `id_usu` int(11) NOT NULL,
  `name_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `binnacle`
--

INSERT INTO `binnacle` (`id`, `id_investor`, `action`, `types`, `date`, `id_usu`, `name_usu`, `flag`) VALUES
(1, 81, 'New', 'Agregar', '2020-09-01', 1, 'JuanP', 1),
(2, 82, 'New', 'Agregar', '2020-09-01', 1, 'JuanP', 1),
(3, 83, 'New', 'Agregar', '2020-09-01', 1, 'JuanP', 1),
(4, 84, 'New', 'Agregar', '2020-09-01', 1, 'JuanP', 1),
(5, 85, 'New', 'Agregar', '2020-09-08', 1, 'JuanP', 1),
(6, 86, 'New', 'Agregar', '2020-09-08', 1, 'JuanP', 1),
(7, 87, 'New', 'Agregar', '2020-10-05', 3, 'Paola Vinasco', 1),
(8, 88, 'New', 'Agregar', '2020-10-05', 3, 'Paola Vinasco', 1),
(9, 89, 'New', 'Agregar', '2020-10-05', 3, 'Paola Vinasco', 1),
(10, 90, 'New', 'Agregar', '2020-10-05', 3, 'Paola Vinasco', 1),
(11, 91, 'New', 'Agregar', '2020-10-05', 3, 'Paola Vinasco', 1),
(12, 92, 'New', 'Agregar', '2020-10-05', 3, 'Paola Vinasco', 1),
(13, 93, 'New', 'Agregar', '2020-10-05', 3, 'Paola Vinasco', 1),
(14, 94, 'New', 'Agregar', '2020-10-27', 3, 'Paola Vinasco', 1),
(15, 95, 'New', 'Agregar', '2020-10-27', 3, 'Paola Vinasco', 1),
(16, 96, 'New', 'Agregar', '2020-10-27', 3, 'Paola Vinasco', 1),
(17, 97, 'New', 'Agregar', '2020-10-27', 3, 'Paola Vinasco', 1),
(18, 98, 'New', 'Agregar', '2020-10-27', 3, 'Paola Vinasco', 1),
(19, 99, 'New', 'Agregar', '2020-10-27', 3, 'Paola Vinasco', 1),
(20, 100, 'New', 'Agregar', '2020-10-27', 3, 'Paola Vinasco', 1),
(21, 101, 'New', 'Agregar', '2020-10-27', 3, 'Paola Vinasco', 1),
(22, 102, 'New', 'Agregar', '2020-10-30', 3, 'Paola Vinasco', 1),
(23, 103, 'New', 'Agregar', '2020-11-04', 1, 'JuanP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Repuestos');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `code` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `code`, `pais`) VALUES
(1, 'AF', 'Afganistán'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Argelia'),
(4, 'AS', 'Samoa Americana'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antártida'),
(9, 'AG', 'Antigua y Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaiyán'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrein'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Bielorrusia'),
(21, 'BE', 'Bélgica'),
(22, 'BZ', 'Belice'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermudas'),
(25, 'BT', 'Bután'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia y Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Isla Bouvet'),
(30, 'BR', 'Brasil'),
(31, 'IO', 'Territorios británicos del océano Índico'),
(32, 'BN', 'Brunei'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Camboya'),
(37, 'CM', 'Camerún'),
(38, 'CA', 'Canadá'),
(39, 'CV', 'Cabo Verde'),
(40, 'KY', 'Islas Caimán'),
(41, 'CF', 'República Centroafricana'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Isla de Christmas'),
(46, 'CC', 'Islas de Cocos o Keeling'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comores'),
(49, 'CG', 'Congo'),
(50, 'CD', 'Congo, República Democrática del'),
(51, 'CK', 'Islas Cook'),
(52, 'CR', 'Costa Rica'),
(53, 'CI', 'Costa de Marfíl'),
(54, 'HR', 'Croacia (Hrvatska)'),
(55, 'CU', 'Cuba'),
(56, 'CY', 'Chipre'),
(57, 'CZ', 'República Checa'),
(58, 'DK', 'Dinamarca'),
(59, 'DJ', 'Djibouti'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'República Dominicana'),
(62, 'TP', 'Timor Oriental'),
(63, 'EC', 'Ecuador'),
(64, 'EG', 'Egipto'),
(65, 'SV', 'El Salvador'),
(66, 'GQ', 'Guinea Ecuatorial'),
(67, 'ER', 'Eritrea'),
(68, 'EE', 'Estonia'),
(69, 'ET', 'Etiopía'),
(70, 'FK', 'Islas Malvinas'),
(71, 'FO', 'Islas Faroe'),
(72, 'FJ', 'Fiji'),
(73, 'FI', 'Finlandia'),
(74, 'FR', 'Francia'),
(75, 'GF', 'Guayana Francesa'),
(76, 'PF', 'Polinesia Francesa'),
(77, 'TF', 'Territorios franceses del Sur'),
(78, 'GA', 'Gabón'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Alemania'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Grecia'),
(85, 'GL', 'Groenlandia'),
(86, 'GD', 'Granada'),
(87, 'GP', 'Guadalupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guayana'),
(93, 'HT', 'Haití'),
(94, 'HM', 'Islas Heard y McDonald'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungría'),
(98, 'IS', 'Islandia'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Irán'),
(102, 'IQ', 'Irak'),
(103, 'IE', 'Irlanda'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italia'),
(106, 'JM', 'Jamaica'),
(107, 'JP', 'Japón'),
(108, 'JO', 'Jordania'),
(109, 'KZ', 'Kazajistán'),
(110, 'KE', 'Kenia'),
(111, 'KI', 'Kiribati'),
(112, 'KR', 'Corea'),
(113, 'KP', 'Corea del Norte'),
(114, 'KW', 'Kuwait'),
(115, 'KG', 'Kirguizistán'),
(116, 'LA', 'Laos'),
(117, 'LV', 'Letonia'),
(118, 'LB', 'Líbano'),
(119, 'LS', 'Lesotho'),
(120, 'LR', 'Liberia'),
(121, 'LY', 'Libia'),
(122, 'LI', 'Liechtenstein'),
(123, 'LT', 'Lituania'),
(124, 'LU', 'Luxemburgo'),
(125, 'MO', 'Macao'),
(126, 'MG', 'Madagascar'),
(127, 'MW', 'Malawi'),
(128, 'MY', 'Malasia'),
(129, 'MV', 'Maldivas'),
(130, 'ML', 'Malí'),
(131, 'MT', 'Malta'),
(132, 'MH', 'Islas Marshall'),
(133, 'MQ', 'Martinica'),
(134, 'MR', 'Mauritania'),
(135, 'MU', 'Mauricio'),
(136, 'YT', 'Mayotte'),
(137, 'MX', 'México'),
(138, 'FM', 'Micronesia'),
(139, 'MD', 'Moldavia'),
(140, 'MC', 'Mónaco'),
(141, 'MN', 'Mongolia'),
(142, 'MS', 'Montserrat'),
(143, 'MA', 'Marruecos'),
(144, 'MZ', 'Mozambique'),
(145, 'MM', 'Birmania'),
(146, 'NA', 'Namibia'),
(147, 'NR', 'Nauru'),
(148, 'NP', 'Nepal'),
(149, 'AN', 'Antillas Holandesas'),
(150, 'NL', 'Países Bajos'),
(151, 'NC', 'Nueva Caledonia'),
(152, 'NZ', 'Nueva Zelanda'),
(153, 'NI', 'Nicaragua'),
(154, 'NE', 'Níger'),
(155, 'NG', 'Nigeria'),
(156, 'NU', 'Niue'),
(157, 'NF', 'Norfolk'),
(158, 'MP', 'Islas Marianas del Norte'),
(159, 'NO', 'Noruega'),
(160, 'OM', 'Omán'),
(161, 'PK', 'Paquistán'),
(162, 'PW', 'Islas Palau'),
(163, 'PA', 'Panamá'),
(164, 'PG', 'Papúa Nueva Guinea'),
(165, 'PY', 'Paraguay'),
(166, 'PE', 'Perú'),
(167, 'PH', 'Filipinas'),
(168, 'PN', 'Pitcairn'),
(169, 'PL', 'Polonia'),
(170, 'PT', 'Portugal'),
(171, 'PR', 'Puerto Rico'),
(172, 'QA', 'Qatar'),
(173, 'RE', 'Reunión'),
(174, 'RO', 'Rumania'),
(175, 'RU', 'Rusia'),
(176, 'RW', 'Ruanda'),
(177, 'SH', 'Santa Helena'),
(178, 'KN', 'Saint Kitts y Nevis'),
(179, 'LC', 'Santa Lucía'),
(180, 'PM', 'St. Pierre y Miquelon'),
(181, 'VC', 'San Vicente y Granadinas'),
(182, 'WS', 'Samoa'),
(183, 'SM', 'San Marino'),
(184, 'ST', 'Santo Tomé y Príncipe'),
(185, 'SA', 'Arabia Saudí'),
(186, 'SN', 'Senegal'),
(187, 'SC', 'Seychelles'),
(188, 'SL', 'Sierra Leona'),
(189, 'SG', 'Singapur'),
(190, 'SK', 'República Eslovaca'),
(191, 'SI', 'Eslovenia'),
(192, 'SB', 'Islas Salomón'),
(193, 'SO', 'Somalia'),
(194, 'ZA', 'República de Sudáfrica'),
(195, 'ES', 'España'),
(196, 'LK', 'Sri Lanka'),
(197, 'SD', 'Sudán'),
(198, 'SR', 'Surinam'),
(199, 'SJ', 'Islas Svalbard y Jan Mayen'),
(200, 'SZ', 'Suazilandia'),
(201, 'SE', 'Suecia'),
(202, 'CH', 'Suiza'),
(203, 'SY', 'Siria'),
(204, 'TW', 'Taiwán'),
(205, 'TJ', 'Tayikistán'),
(206, 'TZ', 'Tanzania'),
(207, 'TH', 'Tailandia'),
(208, 'TG', 'Togo'),
(209, 'TK', 'Islas Tokelau'),
(210, 'TO', 'Tonga'),
(211, 'TT', 'Trinidad y Tobago'),
(212, 'TN', 'Túnez'),
(213, 'TR', 'Turquía'),
(214, 'TM', 'Turkmenistán'),
(215, 'TC', 'Islas Turks y Caicos'),
(216, 'TV', 'Tuvalu'),
(217, 'UG', 'Uganda'),
(218, 'UA', 'Ucrania'),
(219, 'AE', 'Emiratos Árabes Unidos'),
(220, 'UK', 'Reino Unido'),
(221, 'US', 'Estados Unidos'),
(222, 'UM', 'Islas menores de Estados Unidos'),
(223, 'UY', 'Uruguay'),
(224, 'UZ', 'Uzbekistán'),
(225, 'VU', 'Vanuatu'),
(226, 'VA', 'Ciudad del Vaticano (Santa Sede)'),
(227, 'VE', 'Venezuela'),
(228, 'VN', 'Vietnam'),
(229, 'VG', 'Islas Vírgenes (Reino Unido)'),
(230, 'VI', 'Islas Vírgenes (EE.UU.)'),
(231, 'WF', 'Islas Wallis y Futuna'),
(232, 'YE', 'Yemen'),
(233, 'YU', 'Yugoslavia'),
(234, 'ZM', 'Zambia'),
(235, 'ZW', 'Zimbabue');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `id` int(11) NOT NULL,
  `inv_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inv_last_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inv_dir` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `inv_sex` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `inv_phone` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inv_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inv_birthday` date NOT NULL,
  `inv_reinvest` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `inv_perc_perm` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `date_create` date NOT NULL,
  `inv_cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `porc_fijo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`id`, `inv_name`, `inv_last_name`, `inv_dir`, `inv_sex`, `inv_phone`, `inv_email`, `inv_birthday`, `inv_reinvest`, `active`, `media_id`, `inv_perc_perm`, `date_create`, `inv_cedula`, `porc_fijo`, `country`) VALUES
(1, 'ADALBERTO', 'MEJIA JARAMILLO', 'CARRERA 12 BIS #9-22', '1', '3174080127', 'adalbertomejiajaramillo@hotmail.com', '1982-03-02', 0, 1, 4, '0', '2019-10-05', '18617849', '100', 0),
(2, 'ALBA SULEIDY', 'GUIO TABACO', 'CLL 82 #27-03 BLOQ 5 APART 406 ALTA VISTA', '0', '3218133359', 'albas0208@hotmail.com', '0000-00-00', 0, 1, 6, '0', '2019-10-11', '42153952', '100', 0),
(3, 'ALEJANDRA', 'MONSALVE', '', '0', '+17869708159', 'alejandramonsalveg@hotmail.com', '2020-06-21', 1, 1, 6, '0', '0000-00-00', '7869708159', '100', 0),
(4, 'ALEXANDER', 'RAMIREZ SANCHEZ', '', '1', '3154711016', 'alexsanrami50@gmail.com', '2020-10-14', 1, 1, 4, '0', '2019-01-31', '18601328', '100', 0),
(5, 'ALEXANDER', 'RESTREPO PARRA', '', '1', '3054293356', 'achaky82@hotmail.com', '0000-00-00', 0, 0, 4, '0', '2019-05-21', '9865525', '100', 0),
(6, 'ANA MARIA', 'VEGA VILLEGAS', '', '0', '1844487249', 'anitavegav@gmail.com', '2019-12-26', 1, 1, 6, '0', '2019-11-04', '114407280', '100', 0),
(7, 'ANUAR', 'MOSQUERA ', '', '1', '3108242080', 'anuar.mosquera@correo.policia.gov.co', '0000-00-00', 0, 1, 4, '0', '2019-07-08', '4752952', '100', 0),
(8, 'BLANCA OLIVA', 'TORRES LOPEZ', ' ', '0', '3147502717', 'blancatorres094@gmail.com', '2020-11-08', 1, 1, 6, '0', '2020-02-03', '42094673', '100', 0),
(9, 'CLEVER DE JESUS', 'FORONDA', '', '1', '3112865037', 'peter.foronda@hotmail.com', '2020-10-21', 1, 1, 4, '5', '2018-10-01', '70417202', '100', 0),
(10, 'CRISTIAN DAVID', 'TABARES', '', '1', '3164012433', 'cristiandtm1999@gmail.com', '2020-06-16', 1, 0, 4, '0', '2018-10-24', '1088280757', '100', 0),
(11, 'CRISTINA ISABEL', 'VILLOTA MARTINEZ ', '', '0', '', 'cristinamartinez1609@gmail.com', '0000-00-00', 1, 0, 6, '0', '2019-07-12', '1085254380', '100', 0),
(12, 'DANA MARCELA', 'VALENCIA OSPINA', '', '0', '3007826431', 'danitam.v20@gmail.com', '2020-08-20', 1, 1, 6, '0', '0000-00-00', '1144028262', '100', 0),
(13, 'DANA MARCELA', 'VALENCIA OSPINA', '', '0', '3007826431', 'danitam.v20@gmail.com', '2020-08-20', 0, 1, 6, '6.5', '0000-00-00', '1144028262', '100', 0),
(14, 'DANNI ARLEY', 'CASTANO INFANTE', 'CALLE 68 B #81-39  BARRIO LA CLARIDAD BOGOTA', '1', '3123502823', 'nibelungo82@gmail.com', '2019-12-02', 0, 1, 4, '0', '2019-10-21', '53122621', '100', 0),
(15, 'EDISON ALFREDO', 'OROZCO CANO', 'M8 C22 SECTOR A PARQUEINDUSTRIAL ', '1', '3104507755', 'edipol@hotmail.com', '0000-00-00', 0, 1, 4, '0', '2019-11-06', '10023350', '100', 0),
(16, 'EDISON ALFREDO', 'OROZCO CANO', 'M8 C22 SECTOR A PARQUEINDUSTRIAL ', '1', '3104507755', 'edipol@hotmail.com', '0000-00-00', 0, 1, 4, '0', '2019-11-06', '10023350', '100', 0),
(17, 'EDISON ANDRES', 'SANDOVAL ', 'CALLE 19 N 29-80 TULCAN II', '1', '3104190714', 'edisandoval@gmail.com', '2019-09-09', 0, 0, 4, '4', '2019-09-20', '76320254', '100', 0),
(18, 'EDWIN', 'PERAFAN GRAJALES', 'CALLE 15B # 13C 10 PISO 2', '1', '3175670513', 'edwin.perafan@hotmail.com', '0000-00-00', 0, 1, 4, '0', '0000-00-00', '1140871889', '100', 0),
(19, 'GLORIA FRANCIA', 'MORCILLO LOPEZ', '', '0', '620552759', 'isamarpa11@gmail.com', '2020-12-18', 1, 1, 6, '0', '2020-01-03', '42093929', '100', 0),
(20, 'HEIDER FABIAN', 'HEIDER FABIAN SARMIENTO BURBANO ', '', '1', '3016531781', 'hfsarmientob@gmail.com', '2020-11-27', 0, 1, 4, '0', '2019-05-15', '10298748', '100', 0),
(21, 'JAIME ALONSO', 'TORRE AMAYA', 'CARRERA 43B14A-80 AP 943 GUADUALES DEL OTUN FRAILES', '1', '3137752569', 'jaime.torres2033@correo.policia.gov.co', '1979-01-03', 1, 1, 4, '0', '2019-11-03', '75092033', '100', 0),
(22, 'JAMES', 'BEJARANO BAUTISTA', '', '1', '3103292440', 'james2081@hotmail.co', '0000-00-00', 0, 1, 4, '0', '2019-10-02', '80123739', '100', 0),
(23, 'JEFFERSON STIVEN', 'MONSALVE SANTOS', '', '1', '3007765039', 'monsalve9192@hotmail.com', '0000-00-00', 0, 1, 4, '0', '2020-01-13', '1094928055', '100', 0),
(24, 'JELITH DAYAN', 'MENESES VEGA', 'AV 30 AGOSTO 41-71', '0', '3183819321', 'victorval09@hotmail.com', '2019-02-28', 0, 1, 6, '0', '2019-12-27', '1130612024', '100', 0),
(25, 'JENNY MARIA', 'DELGADO ', 'BOLEVAR DEL BOSQUE  M1 C4 PEREIRA', '0', '3163554082', 'jenny.delgadoc@hotmail.com', '0000-00-00', 0, 1, 6, '4', '2019-10-15', '25179391', '100', 0),
(26, 'JHON ALEJANDRO', 'ARANZAZU', '', '1', '3122645011', 'alejoaranzazu@hotmail.com', '2020-05-17', 0, 1, 4, '0', '2019-03-20', '9874151', '100', 0),
(27, 'JOHANA', 'GARCIA DUQUE', '', '0', '3164933210', 'lopezjohana229@gmail.com', '2020-09-08', 1, 1, 6, '0', '2019-05-06', '30395537', '100', 0),
(28, 'JORGE MARIO', 'PARRA ', '', '1', '3155397722', 'jorgeparra1@hotmail.es', '2019-05-10', 0, 1, 4, '0', '2019-09-19', '19149317', '100', 0),
(29, 'JOSE SEBASTIAN', 'JARAMILLO RIVERA', '', '1', '3104023399', 'sejari85810@gmail.com', '2020-08-10', 0, 1, 4, '0', '2020-01-21', '9863162', '100', 0),
(30, 'JUAN JOSE', 'ARISTIZABAL POLO', 'CRA 80 A #13 A 29 CALI VALLE', '1', '3043506316', 'juanjosalidente@gmail.com', '1991-03-14', 1, 1, 4, '0', '2019-10-03', '1143835859', '100', 0),
(31, 'LINA', 'GUEVARA', '', '0', '3177728455', 'linniguelon29@gmail.com', '2020-04-22', 1, 1, 6, '0', '2019-01-06', '1093534555', '100', 0),
(32, 'LINA MARCELA', 'MARIN', '', '0', '3122597550', 'linamarin@fenixinversiones.com', '2020-11-10', 0, 0, 6, '0', '2018-08-18', '1144075452', '100', 0),
(33, 'LORENA', 'ARIAS ROCHE', 'CAMPIN 3 BL D AP 202 BELMONTE', '0', '3217677534', 'loreariasroche@gmail.com', '2019-12-20', 0, 1, 6, '0', '2019-11-07', '42145446', '100', 0),
(34, 'LORENA', 'CARVAJAL LOPEZ', 'CRA 84#5-100 VALDEMORO CLUB RECIDENCIAL AP 702 B CALI', '0', '3206348998', 'lorenca69@hotmail.com', '2020-11-28', 0, 1, 6, '0', '2019-12-27', '31998800', '100', 0),
(35, 'LUCIDIA', 'TABARES CIFUENTES', '', '0', '3105159179', 'lutaci77@hotmail.com  ', '2020-11-02', 1, 1, 6, '0', '2020-01-28', '29915886', '100', 0),
(36, 'MARGARITA', 'TORRES LOPEZ', 'MANZANA2 CASA7 ', '0', '3117612724', 'angelacristinasoto@gmail.com', '2020-01-16', 0, 1, 6, '0', '2020-02-03', '24527347', '100', 0),
(37, 'MARIA ALEIDA', 'ROCHE ACEVEDO', 'CAMPIN 3 BL D AP 202 BELMONTE', '0', '3128378364', 'mariaaleidarocheacevedo@gmail.com', '2019-10-28', 1, 1, 6, '0', '2019-11-07', '24388002', '100', 0),
(38, 'MARIA LISBETH', 'LONDONO DE CARDONA', '', '0', '3217207458', 'hrbv@hotmail.com', '0000-00-00', 0, 1, 6, '0', '2019-07-18', '24944458', '100', 0),
(39, 'MARIA YOLANDA', 'MEJIA GAVIRIA', 'CALLE 16 N 5-47 CENTRO COMERCIAL SANTA CATALINA', '0', '3104190714', 'weisvispaba@hotmail.com', '2019-12-17', 1, 0, 6, '0', '2019-11-12', '42051374', '100', 0),
(40, 'MARIANA', 'SANCHEZ', '', '0', '3127309103', 'alexsanrami50@gmail.com', '2020-10-10', 1, 1, 6, '0', '2018-11-20', '24685388', '100', 0),
(41, 'MARIELA  DEL CARMEN', 'HOYOS', 'CALLE 16 N 5-47 CENTRO COMERCIAL SANTA CATALINA', '0', '3104190714', 'marilu.107@hotmail.com', '2019-06-10', 1, 1, 6, '0', '2019-09-25', '24941256', '100', 0),
(42, 'MATHEUS HENRIQUE', 'BARBOSA MARTINS', '', '1', '17863699873', 'martinsmiami@hotmail.com', '0000-00-00', 1, 1, 4, '0', '2019-06-25', 'M635548911290', '100', 0),
(43, 'MIRTHA', 'IBARRA ', '', '0', '3213026124', 'mirtaibarra24@hotmail.com', '2020-08-24', 0, 0, 6, '0', '2019-06-15', '42071438', '100', 0),
(44, 'NORA', 'GUEVARA LONDONO', '', '0', '3173396274', 'noraguevara86@hotmail.com', '0000-00-00', 1, 1, 6, '0', '2019-07-15', '1093533481', '100', 0),
(45, 'OSCAR', 'CORDOBA MARULANDA', '', '1', '3104139862', 'oscarcordoba23@gmail.com', '2020-05-23', 0, 0, 4, '0', '2019-05-16', '4516285', '100', 0),
(46, 'PAULA ANDREA', 'CASAS MOLANO', '', '0', '+13315750649', 'adalgisacasas@hotmail.com', '0000-00-00', 1, 1, 6, '0', '2019-05-06', '41958774', '100', 0),
(47, 'RENNE', 'BEDOYA', '', '1', '3113548845', 'hrbv@hotmail.com', '0000-00-00', 0, 1, 4, '0', '2018-07-16', '10006686', '100', 0),
(48, 'ROBERTH', ' DELGADO', 'MANZANA KCASA 13 MARACAY DOSQUEBRADAS', '1', '5707852859639', 'roberth-delgado@live.co.uk', '1967-08-20', 1, 1, 4, '4', '2020-03-18', '16728790', '100', 0),
(49, 'SNEIDER', 'GALLEGO BENJUMEA', '', '1', '3005301312', 'jhorch32@hotmail.com', '2020-03-24', 0, 1, 4, '0', '2019-12-04', '1,088,316,353 ', '100', 0),
(50, 'TRINIDAD', 'VILLEGAS RIOS', 'CALLE 67C#49-14 BELLASARDI', '0', '3114266686', 'pitalua1269@gmail.com', '2020-04-10', 0, 1, 6, '5.5', '2020-03-02', '42091934', '100', 0),
(51, 'VALENTINA', 'LOAIZA GOMEZ', 'TRANSVERSAL 21A # 21D-32 APT 501', '0', '3013876424', 'valego3@hotmail.com', '1976-09-29', 0, 1, 6, '0', '2019-10-24', '1053786150', '100', 0),
(52, 'VANESSA', 'GOMEZ ACEVEDO', '', '0', '3144583563', 'hoangamo@gmail.com - vanesgo_10@hotmail.com', '2020-07-01', 0, 0, 6, '0', '2019-02-05', '1093215817', '100', 0),
(53, 'VANESSA', 'GOMEZ ACEVEDO', '', '0', '3144583563', 'hoangamo@gmail.com - vanesgo_10@hotmail.com', '2020-07-01', 0, 0, 6, '0', '2019-02-05', '1093215817', '100', 0),
(54, 'VICTOR MANUEL', 'VALENCIA  HURTADO ', 'CALLE 48 N 19-200 ANDALUCIA AV SUR', '1', '3108716595', 'victorval09@hotmail.com', '2019-07-01', 1, 1, 4, '0', '2019-10-19', '9860849', '100', 0),
(55, 'WILLIAM', 'BEDOYA HERNANDEZ', '', '1', '3183194047', 'jwilliambh@gmail.com', '1952-05-10', 0, 1, 4, '0', '2019-02-26', '10015545', '100', 0),
(56, 'YONNY', 'VALERO', '', '1', '3117945209', 'yonnyvalero17@hotmail.com', '0000-00-00', 0, 1, 4, '6.2', '0000-00-00', '1006716879', '100', 0),
(57, 'GLORIA CRISTINA', 'MARIN VALENCIA', '', '0', '3157676979', 'cristinitavalenciam@gmail.com', '2020-04-30', 0, 1, 7, '0', '2020-04-30', '1089718105', '100', 0),
(58, 'BRYAN DURAN', 'REYES', '', '1', '3185021154', 'bryanduran6@hotmail.com', '2020-04-30', 1, 1, 4, '0', '2020-04-30', '1115077086', '100', 0),
(59, 'CLAUDIA', 'YANETH TAMAYO', '', '0', '3127608725', 'claudiatm8725@gmail.com', '2020-04-30', 1, 1, 8, '0', '2020-04-30', '1059703808', '100', 0),
(60, 'SEBASTIAN', 'MURILLO CUARTAS ', '', '1', '3118320202', 'smc.bvc@gmail.com', '2020-04-30', 0, 1, 4, '0', '2020-04-30', '16728790', '100', 0),
(61, 'VALENTINA ', 'CASTRILLON PEREZ', '', '0', '3206893161', 'valentina.castrillon05@gmail.com', '2020-04-30', 0, 1, 8, '0', '2020-04-30', '1088343095', '100', 0),
(62, 'MARIA EUGENIA', 'PARRA', '', '0', '34642951690', 'mepb19@hotmail.com', '2020-04-30', 1, 1, 6, '0', '2020-04-30', '42139547', '100', 0),
(63, 'YURLY VIVIANA', 'RAMIREZ CUARTAS', '', '0', '3168076802', 'yurly.ramirez2212@gmail.com', '2020-04-30', 1, 1, 7, '0', '2020-04-30', '42161405', '100', 0),
(64, 'LUA STELLA', 'HERRERA MARIN', '', '0', '3116063527', 'hmaritzaviviana@gmail.com', '2020-04-30', 0, 1, 6, '0', '2020-04-30', '421614065', '100', 0),
(65, 'YAKELIN', 'ARISTIZABAL GIRALDO', 'na', '0', '3113432933', 'yakyaristi@hotmail.com', '2020-06-02', 1, 1, 7, '0', '2020-06-02', '1088249959', '100', 0),
(66, 'CONSTANZA', 'HOYOS', 'Jardin 2 Manzana', '0', '3194298751', 'cons.hoyos@gmail.com', '2020-06-02', 1, 1, 6, '0', '2020-06-02', '1088252878', '100', 0),
(67, 'DAVID MAURICIO', 'PARRA OSPINA', '', '1', '3175873692', 'Â davidospinaparra1@gmail.com', '2020-07-02', 1, 1, 3, '0', '2020-07-02', '1088309083', '100', 0),
(68, 'YESSICA CRISTINA', 'BUITRAGO MARTINEZ', '', '0', '3113150495', 'crisbuitrago@gmail.com', '2020-07-02', 1, 1, 8, '0', '2020-07-02', '24344390', '100', 0),
(69, 'MANUEL MARIA', 'VALENCIA TREJOS', '', '1', '3108716595', 'victorval09@hotmail.com', '2020-07-02', 0, 1, 3, '0', '2020-07-02', '15912557', '100', 0),
(70, 'LUZ MELIDA', 'CASTAÃ‘EDA', '', '0', '34602482362', 'zartofenix12@hotmail.com', '2020-07-02', 1, 1, 7, '0', '2020-07-02', '25000397', '100', 0),
(71, 'VALERIA', 'CASTRILLON PEREZ', '', '0', '3228343410', 'valeria.castrillon.perez@gmail.com', '2020-07-02', 1, 1, 6, '0', '2020-07-02', '104753664', '100', 0),
(72, 'PAOLA ANDREA', 'HERNANDEZ DIAZ', '', '0', '3138387910', 'patisiestoy@hotmail.com', '2020-07-02', 0, 1, 6, '0', '2020-07-02', '52823266', '100', 0),
(73, 'LILIANA', 'MARIN MORALES', 'jardin 2 manzana 7 casa 1', '0', '3209182556', 'lilianamarinmorales@gmail.com', '2020-09-14', 0, 1, 6, '0', '2020-07-24', '42064007', '100', 0),
(74, 'EVELIO', 'LOAIZA GARCIA', '', '1', '3114266686', 'notiene@gmail.com', '2020-07-31', 1, 1, 4, '0', '2020-08-01', '4509728', '100', 0),
(75, 'DANIEL', 'NARANJO', '', '1', '3122892000', 'notiene@gmail.com', '2020-07-31', 0, 1, 3, '0', '2020-08-01', '0', '100', 0),
(76, 'FERNANDO', 'FLORES', '', '1', '3207831423', 'fercho1131@hotmail.com', '2020-07-31', 0, 1, 3, '0', '2020-08-01', '1088296116', '100', 0),
(77, 'JULIAN', 'GARCIA OROZCO', '', '1', '3183850993', 'juliango321@gmail.com', '2020-07-31', 1, 1, 5, '0', '2020-08-01', '1107516113', '100', 0),
(78, 'JUAN ESTEBAN', 'MARIN CARVAJAL', '', '1', '3206348998', 'juanchomarin10@gmail.com', '2020-07-31', 0, 1, 5, '0', '2020-08-01', '1107516113', '100', 0),
(79, 'YULIETH VANESSA', 'AGUIRRE RIOS', '', '0', '3225910145', 'vaneaguirre044@gmail.com', '2020-07-31', 1, 1, 7, '0', '2020-08-01', '1053827426', '100', 0),
(80, 'SANTIAGO', 'LONDOÃ‘O VANEGAS', '', '1', '3108094247', 'santiagolkompany@gmail.com', '2020-07-31', 0, 1, 4, '0', '2020-08-01', '1088306056', '100', 0),
(81, 'JOVANY', 'TABORDA', 'SENDEROS DE LA PRADERA T 3 AP 303 LA PRADERA', '1', '3023656772', 'GIOVANNYT9100@GMAIL.COM', '2020-04-15', 0, 0, 5, '', '2020-08-08', '1088297096', '', 47),
(82, 'MILI', 'VILLEGAS', 'TEKA', '0', '3234765741', 'danny.orrego@gmail.com', '2020-09-22', 1, 1, 4, '0', '2020-08-21', '1088242576', '100', 47),
(83, 'MANUEL', 'BEDOYA', '', '1', '3235809017', 'manuelbedoyavillegas@gmail.com', '2020-06-04', 0, 1, 7, '0', '2020-08-28', '1088290341', '100', 47),
(84, 'VANESA', 'GOMEZ', 'CRA', '0', '3144583563', 'vanego10@hotmail.com', '2020-01-07', 0, 1, 5, '4.3', '2020-08-18', '1093215817', '100', 47),
(85, 'ROGER', 'ESCUDERO', 'CLL', '1', '3145351510', 'escuderomartines0@gmail.com', '2020-06-19', 1, 1, 6, '0', '2020-07-30', 'CLL', '100', 47),
(86, 'JUAN', 'ARIAS', 'cr', '1', '3104649866', 'juanguillermoarias1981@gmail.com', '2020-10-14', 1, 1, 6, '0', '2020-07-31', '9873917', '100', 47),
(87, 'FELIPE', 'GONZALES', 'CR 19 D No 4-67 ciudad jardin villa maria', '1', '3194529427', 'felifranco83@gmail.com', '2020-12-10', 1, 1, 6, '0', '2020-09-07', '14569592', '100', 47),
(88, 'STEFAN', 'SOTO', 'cll 37 No 3-12 barrio ca%C3%B1arte pereira', '1', '56940666011', 'stefansoto28@gmail.com', '2020-12-13', 1, 1, 3, '0', '2020-09-22', '1088322852', '100', 47),
(89, 'CENELIA', 'RODRIGUEZ', 'calle 15 No 10-57 Quimbaya Quindio', '0', '447957156761', 'romancesgrc@gmail.com', '2020-06-04', 1, 1, 4, '0', '2020-09-18', '25017682', '100', 47),
(90, 'JHON', 'MORA', 'mz 26 cs 2b primavera azul Dosquebradas', '1', '3134821274', 'smithandjuli@gmail.com', '2020-08-20', 1, 1, 8, '0', '2020-09-07', '2234996', '100', 47),
(91, 'PABLO', 'FORERO', 'cll 41 No 11-36 Barrio Maraya-Pereira', '1', '3122943907', 'pablofg85@hotmail.com', '2020-11-18', 1, 1, 8, '0', '2020-09-24', '1088240150', '100', 47),
(92, 'FLOR', 'CUBIDES', 'mz 2 casa 26 villa del lago la pradera', '0', '3154054393', 'stella.cubides123@hotmail.com', '2020-12-24', 1, 1, 4, '0', '2020-09-07', '52711742', '100', 47),
(93, 'LUZ', 'CARDONA', 'san jose de las villas No 3-167', '0', '3165294240', 'luzaca70@hotmail.com', '2020-03-24', 1, 1, 4, '0', '2020-09-04', '42129033', '100', 47),
(94, 'NIESEL ANTONIO', 'ZAPATA', 'cr 2 d %23 24-21 barrio la espa%C3%B1ola Cartago Valle', '1', '3118468122', 'tonyzagil@hotmail.com', '2020-08-07', 1, 1, 3, '0', '2020-10-01', '16223555', '100', 47),
(95, 'JHON', 'ARANZAZU', 'cll 82 %23 34-65 torre 1 apt 308 Batara cuba', '1', '3122645011', 'alejoaranzazu@hotmail.com', '1992-05-17', 1, 1, 7, '0', '2020-10-08', '9874151', '100', 47),
(96, 'MARIA AURORA', 'MEJIA', 'CR 22 %23 18-63 La capilla', '0', '3128808292', 'nicolasvelez115@gmail.com', '2020-10-20', 0, 1, 3, '0', '2020-10-14', '38980323', '100', 47),
(97, 'ANDREA', 'CASTAÃ‘O', 'Barrio el jardin 2 etapa mz 14 cs 15', '0', '3155405119', 'ximenacastano@gmail.com', '2020-06-13', 1, 1, 7, '0', '2020-10-15', '42133736', '100', 47),
(98, 'DIANA', 'NIETO', 'CR 35 bis transversal 25-314 Molivento mz 5 cs 23', '0', '3107482051', 'dianamnieto@gmail.com', '2020-10-27', 1, 1, 4, '0', '2020-10-19', '42151014', '100', 47),
(99, 'MARIA YOLANDA', 'MEJIA GAVIRIA', 'CALLE 16 N 5-47 CENTRO COMERCIAL SANTA CATALINA', '0', '3104190714', 'weisvispaba@hotmail.com', '2020-12-17', 1, 1, 7, '0', '2020-10-01', '42051374', '100', 47),
(100, 'CRISTIAN', 'TABAREZ', 'CLL+13+No+3-17+centro+', '0', '3148076497', 'cristiantabares@fenixinversiones.com', '2020-06-19', 1, 1, 4, '0', '2020-10-02', '1088280757', '100', 47),
(101, 'OSCAR', 'CORDOBA MARULANDA', '', '1', '3104139862', 'oscarcordoba23@gmail.com', '2020-05-23', 0, 1, 4, '0', '2020-09-30', '4516285', '100', 47),
(102, 'LINA MARCELA', 'MARIN', 'MANIZALES+', '0', '3122597550', 'linamarin_11@hotmail.com', '2020-11-10', 0, 1, 6, '0', '2020-10-31', '1144075452', '100', 47),
(103, 'EDISON ANDRES', 'SANDOVAL', 'CALLE 19 N 29-80 TULCAN II', '1', '3104190714', 'edisandoval@gmail.com', '2020-12-09', 0, 1, 6, '4.2', '2020-11-01', '76320254', '100', 47);

-- --------------------------------------------------------

--
-- Table structure for table `inv_ini`
--

CREATE TABLE `inv_ini` (
  `id` int(11) NOT NULL,
  `inv_id` int(11) NOT NULL,
  `inv_ini_value` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `inv_ini_date` date NOT NULL,
  `active` int(11) NOT NULL,
  `inv_ini_date_update` date NOT NULL,
  `days` int(11) NOT NULL,
  `flag_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `inv_ini`
--

INSERT INTO `inv_ini` (`id`, `inv_id`, `inv_ini_value`, `inv_ini_date`, `active`, `inv_ini_date_update`, `days`, `flag_days`) VALUES
(1, 1, '12000000', '2019-10-05', 1, '2020-10-09', 25, 1),
(2, 2, '20000000', '2019-10-11', 1, '0000-00-00', 30, 1),
(3, 3, '3461.42', '0000-00-00', 1, '0000-00-00', 30, 1),
(4, 4, '87150432', '2019-05-21', 1, '0000-00-00', 30, 1),
(5, 5, '40000000', '2019-01-31', 1, '2020-10-06', 30, 1),
(6, 6, '3537', '2019-11-04', 1, '0000-00-00', 30, 1),
(7, 7, '8000000', '2019-07-08', 1, '0000-00-00', 30, 1),
(8, 8, '20000000', '2020-02-03', 1, '2020-05-05', 30, 1),
(9, 9, '113400000', '2018-10-01', 1, '2020-10-06', 30, 1),
(10, 10, '7320335', '2018-10-24', 1, '2020-10-08', 30, 1),
(11, 11, '6817543', '2019-07-12', 1, '0000-00-00', 30, 1),
(12, 12, '5911061', '0000-00-00', 1, '0000-00-00', 30, 1),
(13, 13, '90000000', '0000-00-00', 1, '2020-05-01', 30, 1),
(14, 14, '20000000', '2019-10-21', 1, '0000-00-00', 30, 1),
(15, 15, '25000000', '2019-11-06', 1, '0000-00-00', 30, 1),
(16, 16, '10000000', '2019-11-06', 1, '0000-00-00', 30, 1),
(17, 17, '83904257', '2019-09-20', 1, '2020-11-04', 30, 1),
(18, 18, '7000000', '2020-04-01', 1, '2020-05-05', 30, 1),
(19, 19, '13248910', '2020-04-01', 1, '2020-05-01', 30, 1),
(20, 20, '14278921.77', '2020-01-03', 1, '2020-10-06', 30, 1),
(21, 21, '5942118', '2019-05-15', 1, '0000-00-00', 30, 1),
(22, 22, '7000000', '2019-11-03', 1, '0000-00-00', 30, 1),
(23, 23, '5000000', '2019-10-02', 1, '0000-00-00', 30, 1),
(24, 24, '14000000', '2020-01-13', 1, '2020-05-01', 30, 1),
(25, 25, '80000000', '2019-12-27', 1, '0000-00-00', 30, 1),
(26, 26, '16124400', '2019-10-15', 1, '2020-05-01', 30, 1),
(27, 27, '2955529', '2019-03-20', 1, '0000-00-00', 30, 1),
(28, 28, '10000000', '2019-05-06', 1, '0000-00-00', 30, 1),
(29, 29, '16000000', '2019-09-19', 1, '0000-00-00', 30, 1),
(30, 30, '15449545', '2020-01-21', 1, '0000-00-00', 30, 1),
(31, 31, '3465335', '2019-10-03', 1, '2020-10-29', 30, 1),
(32, 32, '16864639', '2019-01-06', 1, '2020-10-30', 30, 1),
(33, 33, '10000000', '2018-08-18', 1, '0000-00-00', 30, 1),
(34, 34, '11000000', '2019-11-07', 1, '0000-00-00', 30, 1),
(35, 35, '10712250', '2019-12-27', 1, '0000-00-00', 30, 1),
(36, 36, '25000000', '2020-01-28', 1, '0000-00-00', 30, 1),
(37, 37, '29518496', '2020-02-03', 1, '0000-00-00', 30, 1),
(38, 38, '10000000', '2019-11-07', 1, '0000-00-00', 30, 1),
(39, 39, '18566354', '2019-07-18', 1, '2020-10-08', 30, 1),
(40, 40, '2708833', '2019-11-12', 1, '0000-00-00', 30, 1),
(41, 41, '12476149', '2018-11-20', 1, '0000-00-00', 30, 1),
(42, 42, '25716', '2019-09-25', 1, '0000-00-00', 30, 1),
(43, 43, '3000000', '2019-06-25', 1, '2020-10-06', 30, 1),
(44, 44, '8748054', '2019-06-15', 1, '0000-00-00', 30, 1),
(45, 45, '10000000', '2019-07-15', 1, '2020-10-27', 30, 1),
(46, 46, '3993997', '2019-05-16', 1, '0000-00-00', 30, 1),
(47, 47, '10000000', '2019-05-06', 1, '0000-00-00', 30, 1),
(48, 48, '104000000', '2018-07-16', 1, '0000-00-00', 30, 1),
(49, 49, '24000000', '2020-03-18', 1, '0000-00-00', 30, 1),
(50, 50, '90000000', '2019-12-04', 1, '0000-00-00', 30, 1),
(51, 51, '20000000', '2020-03-02', 1, '2020-04-30', 30, 1),
(52, 52, '35000000', '2019-10-24', 1, '2020-10-02', 30, 1),
(53, 53, '17000000', '2019-02-05', 1, '2020-10-02', 30, 1),
(54, 54, '6063099', '2019-03-15', 1, '2020-05-05', 30, 1),
(55, 55, '4000000', '2019-10-19', 1, '0000-00-00', 30, 1),
(56, 56, '103000000', '2019-02-26', 1, '0000-00-00', 30, 1),
(57, 57, '16000000', '2020-04-30', 1, '0000-00-00', 14, 1),
(58, 58, '8540000', '2020-04-30', 1, '2020-05-05', 14, 1),
(59, 59, '5500000', '2020-04-30', 1, '0000-00-00', 27, 1),
(60, 60, '10000000', '2020-04-30', 1, '0000-00-00', 7, 1),
(61, 61, '20000000', '2020-04-30', 1, '0000-00-00', 0, 1),
(62, 62, '10000000', '2020-04-30', 1, '0000-00-00', 6, 1),
(63, 63, '14000000', '2020-04-30', 1, '0000-00-00', 0, 1),
(64, 64, '17000000', '2020-04-30', 1, '0000-00-00', 0, 1),
(65, 65, '31000000', '2020-06-02', 1, '2020-06-02', 25, 1),
(66, 66, '5000000', '2020-06-02', 1, '2020-06-02', 7, 1),
(67, 67, '15000000', '2020-07-02', 1, '0000-00-00', 22, 1),
(68, 68, '10000000', '2020-07-02', 1, '0000-00-00', 18, 1),
(69, 69, '10000000', '2020-07-02', 1, '2020-08-13', 3, 1),
(70, 70, '3000', '2020-07-02', 1, '0000-00-00', 0, 1),
(71, 71, '10000000', '2020-07-02', 1, '0000-00-00', 10, 1),
(72, 72, '10000000', '2020-07-02', 1, '0000-00-00', 10, 1),
(73, 73, '15000000', '2020-06-23', 1, '0000-00-00', 30, 1),
(74, 74, '23000000', '2020-07-13', 1, '0000-00-00', 13, 1),
(75, 75, '10000000', '2020-07-14', 1, '2020-10-05', 10, 1),
(76, 76, '6000000', '2020-07-15', 1, '0000-00-00', 9, 1),
(77, 77, '20000000', '2020-07-21', 1, '0000-00-00', 3, 1),
(78, 78, '10000000', '2020-07-01', 1, '0000-00-00', 23, 1),
(79, 79, '10000000', '2020-07-01', 1, '0000-00-00', 23, 1),
(80, 80, '25000000', '2020-07-23', 1, '2020-10-05', 1, 1),
(81, 81, '16000000', '2020-08-08', 1, '2020-09-30', 16, 1),
(82, 82, '15000000', '2020-08-21', 1, '0000-00-00', 3, 1),
(83, 83, '10000000', '2020-08-28', 1, '0000-00-00', 0, 1),
(84, 84, '93092000', '2020-08-18', 1, '0000-00-00', 6, 1),
(85, 85, '100000000', '2020-07-30', 1, '0000-00-00', 25, 1),
(86, 86, '20000000', '2020-07-31', 1, '0000-00-00', 26, 1),
(87, 87, '10000000', '2020-09-07', 1, '0000-00-00', 17, 0),
(88, 88, '10000000', '2020-09-22', 1, '2020-10-08', 2, 0),
(89, 89, '6340000', '2020-09-18', 1, '0000-00-00', 6, 0),
(90, 90, '20000000', '2020-09-07', 1, '0000-00-00', 17, 0),
(91, 91, '10000000', '2020-09-24', 1, '0000-00-00', 0, 0),
(92, 92, '10000000', '2020-09-07', 1, '0000-00-00', 17, 0),
(93, 93, '10000000', '2020-09-04', 1, '2020-10-08', 20, 0),
(94, 94, '10000000', '2020-10-01', 1, '2020-10-28', 23, 0),
(95, 95, '6000000', '2020-10-08', 1, '0000-00-00', 16, 0),
(96, 96, '80000000', '2020-10-14', 1, '2020-11-02', 10, 0),
(97, 97, '15000000', '2020-10-15', 1, '2020-10-28', 9, 0),
(98, 98, '10000000', '2020-10-19', 1, '0000-00-00', 5, 0),
(99, 99, '21043832', '2020-10-01', 1, '2020-10-29', 23, 0),
(100, 100, '10000000', '2020-10-02', 1, '2020-10-28', 30, 1),
(101, 101, '15000000', '2020-09-30', 1, '2020-11-04', 30, 1),
(102, 102, '20814156.22', '2020-10-31', 1, '2020-10-30', 30, 1),
(103, 103, '140098356', '2020-11-01', 1, '2020-11-04', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inv_rendi`
--

CREATE TABLE `inv_rendi` (
  `id` int(11) NOT NULL,
  `inv_rendi_value` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `inv_rendi_date` date NOT NULL,
  `investor_id` int(11) NOT NULL,
  `per_mes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `inv_rendi`
--

INSERT INTO `inv_rendi` (`id`, `inv_rendi_value`, `inv_rendi_date`, `investor_id`, `per_mes_id`) VALUES
(74, '595000', '2020-04-30', 1, 29),
(75, '700000', '2020-04-30', 2, 29),
(76, '121.1497', '2020-04-30', 3, 29),
(77, '3050265.12', '2020-04-30', 4, 29),
(78, '1400000', '2020-04-30', 5, 29),
(79, '123.795', '2020-04-30', 6, 29),
(80, '350000', '2020-04-30', 7, 29),
(81, '700000', '2020-04-30', 8, 29),
(82, '5670000', '2020-04-30', 9, 29),
(83, '256211.725', '2020-04-30', 10, 29),
(84, '238614.005', '2020-04-30', 11, 29),
(85, '206887.135', '2020-04-30', 12, 29),
(86, '5850000', '2020-04-30', 13, 29),
(87, '700000', '2020-04-30', 14, 29),
(88, '875000', '2020-04-30', 15, 29),
(89, '350000', '2020-04-30', 16, 29),
(90, '3356170.28', '2020-04-30', 17, 29),
(91, '245000', '2020-04-30', 18, 29),
(92, '463711', '2020-04-30', 19, 29),
(93, '-218465', '2020-04-30', 20, 29),
(94, '145644', '2020-04-30', 20, 29),
(95, '207974.13', '2020-04-30', 21, 29),
(96, '245000', '2020-04-30', 22, 29),
(97, '175000', '2020-04-30', 23, 29),
(98, '490000', '2020-04-30', 24, 29),
(99, '3200000', '2020-04-30', 25, 29),
(100, '564354', '2020-04-30', 26, 29),
(101, '103443.515', '2020-04-30', 27, 29),
(102, '350000', '2020-04-30', 28, 29),
(103, '560000', '2020-04-30', 29, 29),
(104, '540734.075', '2020-04-30', 30, 29),
(105, '121286', '2020-04-30', 31, 29),
(106, '590262.365', '2020-04-30', 32, 29),
(107, '350000', '2020-04-30', 33, 29),
(108, '385000', '2020-04-30', 34, 29),
(109, '374928.75', '2020-04-30', 35, 29),
(110, '875000', '2020-04-30', 36, 29),
(111, '1033147.36', '2020-04-30', 37, 29),
(112, '350000', '2020-04-30', 38, 29),
(113, '649822.39', '2020-04-30', 39, 29),
(114, '94809.155', '2020-04-30', 40, 29),
(115, '436665.215', '2020-04-30', 41, 29),
(116, '900.06', '2020-04-30', 42, 29),
(117, '105000', '2020-04-30', 43, 29),
(118, '306181.89', '2020-04-30', 44, 29),
(119, '235213.65', '2020-04-30', 45, 29),
(120, '139789.895', '2020-04-30', 46, 29),
(121, '350000', '2020-04-30', 47, 29),
(122, '4680000', '2020-04-30', 48, 29),
(123, '840000', '2020-04-30', 49, 29),
(124, '4950000', '2020-04-30', 50, 29),
(125, '700000', '2020-04-30', 51, 29),
(126, '1225000', '2020-04-30', 52, 29),
(127, '595000', '2020-04-30', 53, 29),
(128, '212208.465', '2020-04-30', 54, 29),
(129, '140000', '2020-04-30', 55, 29),
(130, '6386000', '2020-04-30', 56, 29),
(131, '261333.33333333', '2020-04-30', 57, 29),
(132, '139486.66666667', '2020-04-30', 58, 29),
(133, '173250', '2020-04-30', 59, 29),
(134, '81666.666666667', '2020-04-30', 60, 29),
(135, '0', '2020-04-30', 61, 29),
(136, '70000', '2020-04-30', 62, 29),
(137, '0', '2020-04-30', 63, 29),
(138, '0', '2020-04-30', 64, 29),
(277, '680000', '2020-06-02', 1, 30),
(278, '800000', '2020-06-02', 2, 30),
(279, '143.302788', '2020-06-02', 3, 30),
(280, '3516027.8848', '2020-06-02', 4, 30),
(281, '1600000', '2020-06-02', 5, 30),
(282, '146.4318', '2020-06-02', 6, 30),
(283, '480000', '2020-06-02', 7, 30),
(284, '828000', '2020-06-02', 8, 30),
(285, '5950000', '2020-06-02', 9, 30),
(286, '303061.869', '2020-06-02', 10, 30),
(287, '282246.2802', '2020-06-02', 11, 30),
(288, '244717.9254', '2020-06-02', 12, 30),
(289, '5850000', '2020-06-02', 13, 30),
(290, '800000', '2020-06-02', 14, 30),
(291, '1000000', '2020-06-02', 15, 30),
(292, '400000', '2020-06-02', 16, 30),
(293, '3490417.0912', '2020-06-02', 17, 30),
(294, '533333.33333333', '2020-06-02', 18, 30),
(295, '740504.84', '2020-06-02', 19, 30),
(296, '-247927.68', '2020-06-02', 20, 30),
(297, '165285.12', '2020-06-02', 20, 30),
(298, '246003.6852', '2020-06-02', 21, 30),
(299, '280000', '2020-06-02', 22, 30),
(300, '200000', '2020-06-02', 23, 30),
(301, '560000', '2020-06-02', 24, 30),
(302, '3200000', '2020-06-02', 25, 30),
(303, '644976', '2020-06-02', 26, 30),
(304, '122358.9006', '2020-06-02', 27, 30),
(305, '400000', '2020-06-02', 28, 30),
(306, '640000', '2020-06-02', 29, 30),
(307, '639611.163', '2020-06-02', 30, 30),
(308, '143464.84', '2020-06-02', 31, 30),
(309, '698196.0546', '2020-06-02', 32, 30),
(310, '400000', '2020-06-02', 33, 30),
(311, '440000', '2020-06-02', 34, 30),
(312, '443487.15', '2020-06-02', 35, 30),
(313, '1000000', '2020-06-02', 36, 30),
(314, '1222065.7344', '2020-06-02', 37, 30),
(315, '400000', '2020-06-02', 38, 30),
(316, '768647.0556', '2020-06-02', 39, 30),
(317, '112145.6862', '2020-06-02', 40, 30),
(318, '516512.5686', '2020-06-02', 41, 30),
(319, '1064.6424', '2020-06-02', 42, 30),
(320, '120000', '2020-06-02', 43, 30),
(321, '362169.4356', '2020-06-02', 44, 30),
(322, '278224.146', '2020-06-02', 45, 30),
(323, '165351.4758', '2020-06-02', 46, 30),
(324, '400000', '2020-06-02', 47, 30),
(325, '5547200', '2020-06-02', 48, 30),
(326, '960000', '2020-06-02', 49, 30),
(327, '5155333.3333333', '2020-06-02', 50, 30),
(328, '800000', '2020-06-02', 51, 30),
(329, '1400000', '2020-06-02', 52, 30),
(330, '680000', '2020-06-02', 53, 30),
(331, '251012.2986', '2020-06-02', 54, 30),
(332, '160000', '2020-06-02', 55, 30),
(333, '6386000', '2020-06-02', 56, 30),
(334, '640000', '2020-06-02', 57, 30),
(335, '347179.46666667', '2020-06-02', 58, 30),
(336, '226930', '2020-06-02', 59, 30),
(337, '400000', '2020-06-02', 60, 30),
(338, '1253333', '2020-06-02', 61, 30),
(339, '402800', '2020-06-02', 62, 30),
(340, '560000', '2020-06-02', 63, 30),
(341, '680000', '2020-06-02', 64, 30),
(342, '1033333.3333333', '2020-06-02', 65, 30),
(343, '46666.666666667', '2020-06-02', 66, 30),
(563, '595000', '2020-07-06', 1, 31),
(564, '700000', '2020-07-06', 2, 31),
(565, '130.40553708', '2020-07-06', 3, 31),
(566, '3119085.375168', '2020-07-06', 4, 31),
(567, '1400000', '2020-07-06', 5, 31),
(568, '133.252938', '2020-07-06', 6, 31),
(569, '483000', '2020-07-06', 7, 31),
(570, '753480', '2020-07-06', 8, 31),
(571, '6150000', '2020-07-06', 9, 31),
(572, '275786.30079', '2020-07-06', 10, 31),
(573, '256844.114982', '2020-07-06', 11, 31),
(574, '222693.312114', '2020-07-06', 12, 31),
(575, '6435000', '2020-07-06', 13, 31),
(576, '700000', '2020-07-06', 14, 31),
(577, '875000', '2020-07-06', 15, 31),
(578, '350000', '2020-07-06', 16, 31),
(579, '3630033.774848', '2020-07-06', 17, 31),
(580, '595000', '2020-07-06', 18, 31),
(581, '785859.4044', '2020-07-06', 19, 31),
(582, '-257201.22624', '2020-07-06', 20, 31),
(583, '171467.48416', '2020-07-06', 20, 31),
(584, '223863.353532', '2020-07-06', 21, 31),
(585, '245000', '2020-07-06', 22, 31),
(586, '175000', '2020-07-06', 23, 31),
(587, '490000', '2020-07-06', 24, 31),
(588, '3200000', '2020-07-06', 25, 31),
(589, '564354', '2020-07-06', 26, 31),
(590, '111346.599546', '2020-07-06', 27, 31),
(591, '350000', '2020-07-06', 28, 31),
(592, '560000', '2020-07-06', 29, 31),
(593, '582046.15833', '2020-07-06', 30, 31),
(594, '130553.0044', '2020-07-06', 31, 31),
(595, '635358.409686', '2020-07-06', 32, 31),
(596, '350000', '2020-07-06', 33, 31),
(597, '385000', '2020-07-06', 34, 31),
(598, '403573.3065', '2020-07-06', 35, 31),
(599, '875000', '2020-07-06', 36, 31),
(600, '1112079.818304', '2020-07-06', 37, 31),
(601, '350000', '2020-07-06', 38, 31),
(602, '699468.820596', '2020-07-06', 39, 31),
(603, '102052.574442', '2020-07-06', 40, 31),
(604, '470026.437426', '2020-07-06', 41, 31),
(605, '951.324584', '2020-07-06', 42, 31),
(606, '105000', '2020-07-06', 43, 31),
(607, '329574.186396', '2020-07-06', 44, 31),
(608, '350000', '2020-07-06', 45, 31),
(609, '150469.842978', '2020-07-06', 46, 31),
(610, '350000', '2020-07-06', 47, 31),
(611, '5769088', '2020-07-06', 48, 31),
(612, '840000', '2020-07-06', 49, 31),
(613, '0', '2020-07-06', 50, 31),
(614, '700000', '2020-07-06', 51, 31),
(615, '1225000', '2020-07-06', 52, 31),
(616, '595000', '2020-07-06', 53, 31),
(617, '228421.191726', '2020-07-06', 54, 31),
(618, '140000', '2020-07-06', 55, 31),
(619, '6386000', '2020-07-06', 56, 31),
(620, '560000', '2020-07-06', 57, 31),
(621, '315933.31466667', '2020-07-06', 58, 31),
(622, '206506.3', '2020-07-06', 59, 31),
(623, '350000', '2020-07-06', 60, 31),
(624, '1400000', '2020-07-06', 61, 31),
(625, '366548', '2020-07-06', 62, 31),
(626, '509600', '2020-07-06', 63, 31),
(627, '595000', '2020-07-06', 64, 31),
(628, '1121166.6666667', '2020-07-06', 65, 31),
(629, '176633.33333333', '2020-07-06', 66, 31),
(630, '385000', '2020-07-06', 67, 31),
(631, '210000', '2020-07-06', 68, 31),
(632, '35000', '2020-07-06', 69, 31),
(633, '0', '2020-07-06', 70, 31),
(634, '116666.67', '2020-07-06', 71, 31),
(635, '150469.84', '2020-07-06', 72, 31),
(636, '680000', '2020-08-01', 1, 32),
(637, '800000', '2020-08-01', 2, 32),
(638, '154.2511210032', '2020-08-01', 3, 32),
(639, '3689432.4151987', '2020-08-01', 4, 32),
(640, '1600000', '2020-08-01', 5, 32),
(641, '157.61918952', '2020-08-01', 6, 32),
(642, '600000', '2020-08-01', 7, 32),
(643, '891259.2', '2020-08-01', 8, 32),
(644, '6600000', '2020-08-01', 9, 32),
(645, '326215.7957916', '2020-08-01', 10, 32),
(646, '303809.89600728', '2020-08-01', 11, 32),
(647, '263414.37490056', '2020-08-01', 12, 32),
(648, '7531333.3333333', '2020-08-01', 13, 32),
(649, '800000', '2020-08-01', 14, 32),
(650, '1000000', '2020-08-01', 15, 32),
(651, '400000', '2020-08-01', 16, 32),
(652, '4175235.1258419', '2020-08-01', 17, 32),
(653, '680000', '2020-08-01', 18, 32),
(654, '929559.409776', '2020-08-01', 19, 32),
(655, '-315886.64875008', '2020-08-01', 20, 32),
(656, '210591.09916672', '2020-08-01', 20, 32),
(657, '264798.36674928', '2020-08-01', 21, 32),
(658, '280000', '2020-08-01', 22, 32),
(659, '200000', '2020-08-01', 23, 32),
(660, '560000', '2020-08-01', 24, 32),
(661, '3200000', '2020-08-01', 25, 32),
(662, '644976', '2020-08-01', 26, 32),
(663, '131707.12060584', '2020-08-01', 27, 32),
(664, '400000', '2020-08-01', 28, 32),
(665, '640000', '2020-08-01', 29, 32),
(666, '688477.4558532', '2020-08-01', 30, 32),
(667, '154425.553776', '2020-08-01', 31, 32),
(668, '751538.23317144', '2020-08-01', 32, 32),
(669, '400000', '2020-08-01', 33, 32),
(670, '440000', '2020-08-01', 34, 32),
(671, '477369.56826', '2020-08-01', 35, 32),
(672, '1000000', '2020-08-01', 36, 32),
(673, '1315431.5565082', '2020-08-01', 37, 32),
(674, '400000', '2020-08-01', 38, 32),
(675, '827371.69064784', '2020-08-01', 39, 32),
(676, '120713.61662568', '2020-08-01', 40, 32),
(677, '729307.79550771', '2020-08-01', 41, 32),
(678, '1105.28107936', '2020-08-01', 42, 32),
(679, '120000', '2020-08-01', 43, 32),
(680, '389839.18047984', '2020-08-01', 44, 32),
(681, '400524.72', '2020-08-01', 45, 32),
(682, '177984.32855112', '2020-08-01', 46, 32),
(683, '773333.33333333', '2020-08-01', 47, 32),
(684, '5999851.52', '2020-08-01', 48, 32),
(685, '960000', '2020-08-01', 49, 32),
(686, '6966666', '2020-08-01', 50, 32),
(687, '800000', '2020-08-01', 51, 32),
(688, '1400000', '2020-08-01', 52, 32),
(689, '680000', '2020-08-01', 53, 32),
(690, '270189.63821304', '2020-08-01', 54, 32),
(691, '165333.33333333', '2020-08-01', 55, 32),
(692, '6386000', '2020-08-01', 56, 32),
(693, '640000', '2020-08-01', 57, 32),
(694, '373703.97792', '2020-08-01', 58, 32),
(695, '244267.452', '2020-08-01', 59, 32),
(696, '400000', '2020-08-01', 60, 32),
(697, '1600000', '2020-08-01', 61, 32),
(698, '433573.92', '2020-08-01', 62, 32),
(699, '602784', '2020-08-01', 63, 32),
(700, '680000', '2020-08-01', 64, 32),
(701, '1417446.6666667', '2020-08-01', 65, 32),
(702, '208932', '2020-08-01', 66, 32),
(703, '615400', '2020-08-01', 67, 32),
(704, '408400', '2020-08-01', 68, 32),
(705, '401400', '2020-08-01', 69, 32),
(706, '120', '2020-08-01', 70, 32),
(707, '406666.64', '2020-08-01', 71, 32),
(708, '400000', '2020-08-01', 72, 32),
(709, '600000', '2020-08-01', 73, 32),
(710, '398666.667', '2020-08-01', 74, 32),
(711, '133333.33333333', '2020-08-01', 75, 32),
(712, '72000', '2020-08-01', 76, 32),
(713, '80000', '2020-08-01', 77, 32),
(714, '306666.66666667', '2020-08-01', 78, 32),
(715, '306666.66666667', '2020-08-01', 79, 32),
(716, '33333.333333333', '2020-08-01', 80, 32),
(717, '595000', '2020-09-01', 1, 33),
(718, '700000', '2020-09-01', 2, 33),
(719, '140.36852011291', '2020-09-01', 3, 33),
(720, '3276883.4978308', '2020-09-01', 4, 33),
(721, '1400000', '2020-09-01', 5, 33),
(722, '143.4334624632', '2020-09-01', 6, 33),
(723, '560000', '2020-09-01', 7, 33),
(724, '811045.872', '2020-09-01', 8, 33),
(725, '6723333.3333333', '2020-09-01', 9, 33),
(726, '296856.37417036', '2020-09-01', 10, 33),
(727, '37853.000366625', '2020-09-01', 11, 33),
(728, '239707.08115951', '2020-09-01', 12, 33),
(729, '8710000', '2020-09-01', 13, 33),
(730, '700000', '2020-09-01', 14, 33),
(731, '875000', '2020-09-01', 15, 33),
(732, '350000', '2020-09-01', 16, 33),
(733, '5542244.5308756', '2020-09-01', 17, 33),
(734, '595000', '2020-09-01', 18, 33),
(735, '845899.06289616', '2020-09-01', 19, 33),
(736, '-274189.61111507', '2020-09-01', 20, 33),
(737, '182793.07407671', '2020-09-01', 20, 33),
(738, '240966.51374184', '2020-09-01', 21, 33),
(739, '245000', '2020-09-01', 22, 33),
(740, '175000', '2020-09-01', 23, 33),
(741, '490000', '2020-09-01', 24, 33),
(742, '3200000', '2020-09-01', 25, 33),
(743, '564354', '2020-09-01', 26, 33),
(744, '119853.47975131', '2020-09-01', 27, 33),
(745, '350000', '2020-09-01', 28, 33),
(746, '560000', '2020-09-01', 29, 33),
(747, '626514.48482641', '2020-09-01', 30, 33),
(748, '140527.25393616', '2020-09-01', 31, 33),
(749, '683899.79218601', '2020-09-01', 32, 33),
(750, '350000', '2020-09-01', 33, 33),
(751, '385000', '2020-09-01', 34, 33),
(752, '434406.3071166', '2020-09-01', 35, 33),
(753, '875000', '2020-09-01', 36, 33),
(754, '1197042.7164224', '2020-09-01', 37, 33),
(755, '350000', '2020-09-01', 38, 33),
(756, '752908.23848953', '2020-09-01', 39, 33),
(757, '109849.39112937', '2020-09-01', 40, 33),
(758, '920336.46891201', '2020-09-01', 41, 33),
(759, '1075.8057822176', '2020-09-01', 42, 33),
(760, '105000', '2020-09-01', 43, 33),
(761, '354753.65423665', '2020-09-01', 44, 33),
(762, '350459.13', '2020-09-01', 45, 33),
(763, '202974.07231485', '2020-09-01', 46, 33),
(764, '1750000', '2020-09-01', 47, 33),
(765, '6239845.5808', '2020-09-01', 48, 33),
(766, '962500', '2020-09-01', 49, 33),
(767, '7865000', '2020-09-01', 50, 33),
(768, '700000', '2020-09-01', 51, 33),
(769, '245872.57077387', '2020-09-01', 54, 33),
(770, '280000', '2020-09-01', 55, 33),
(771, '6386000', '2020-09-01', 56, 33),
(772, '560000', '2020-09-01', 57, 33),
(773, '340070.6199072', '2020-09-01', 58, 33),
(774, '222283.38132', '2020-09-01', 59, 33),
(775, '700000', '2020-09-01', 60, 33),
(776, '1400000', '2020-09-01', 61, 33),
(777, '394552.2672', '2020-09-01', 62, 33),
(778, '548533.44', '2020-09-01', 63, 33),
(779, '595000', '2020-09-01', 64, 33),
(780, '1449610.6333333', '2020-09-01', 65, 33),
(781, '190128.12', '2020-09-01', 66, 33),
(782, '560014', '2020-09-01', 67, 33),
(783, '379810.66666667', '2020-09-01', 68, 33),
(784, '350000', '2020-09-01', 69, 33),
(785, '109.2', '2020-09-01', 70, 33),
(786, '368316.66585', '2020-09-01', 71, 33),
(787, '501666.66666667', '2020-09-01', 72, 33),
(788, '525000', '2020-09-01', 73, 33),
(789, '818953.333345', '2020-09-01', 74, 33),
(790, '350000', '2020-09-01', 75, 33),
(791, '210000', '2020-09-01', 76, 33),
(792, '702800', '2020-09-01', 77, 33),
(793, '350000', '2020-09-01', 78, 33),
(794, '360733.33333333', '2020-09-01', 79, 33),
(795, '882000', '2020-09-01', 80, 33),
(796, '298666.66666667', '2020-09-01', 81, 33),
(797, '52500', '2020-09-01', 82, 33),
(798, '0', '2020-09-01', 83, 33),
(799, '2221333', '2020-09-01', 84, 33),
(800, '2916666.666', '2020-09-01', 85, 33),
(801, '606666.666', '2020-09-01', 86, 33),
(802, '595000', '2020-10-05', 1, 34),
(803, '700000', '2020-10-05', 2, 34),
(804, '147.03141831686', '2020-10-05', 3, 34),
(805, '3391574.4202549', '2020-10-05', 4, 34),
(806, '1400000', '2020-10-05', 5, 34),
(807, '148.45363364941', '2020-10-05', 6, 34),
(808, '560000', '2020-10-05', 7, 34),
(809, '839432.47752', '2020-10-05', 8, 34),
(810, '6852166.6666667', '2020-10-05', 9, 34),
(811, '307246.34726632', '2020-10-05', 10, 34),
(812, '39177.855379457', '2020-10-05', 11, 34),
(813, '248096.82900009', '2020-10-05', 12, 34),
(814, '8710000', '2020-10-05', 13, 34),
(815, '700000', '2020-10-05', 14, 34),
(816, '875000', '2020-10-05', 15, 34),
(817, '350000', '2020-10-05', 16, 34),
(818, '4796170.28', '2020-10-05', 17, 34),
(819, '595000', '2020-10-05', 18, 34),
(820, '875505.53009753', '2020-10-05', 19, 34),
(822, '499762', '2020-10-05', 20, 34),
(823, '249400.34172281', '2020-10-05', 21, 34),
(824, '245000', '2020-10-05', 22, 34),
(825, '175000', '2020-10-05', 23, 34),
(826, '490000', '2020-10-05', 24, 34),
(827, '3200000', '2020-10-05', 25, 34),
(828, '564354', '2020-10-05', 26, 34),
(829, '124048.35154261', '2020-10-05', 27, 34),
(830, '350000', '2020-10-05', 28, 34),
(831, '560000', '2020-10-05', 29, 34),
(832, '648442.49179534', '2020-10-05', 30, 34),
(833, '145445.70782393', '2020-10-05', 31, 34),
(834, '590262.365', '2020-10-05', 32, 34),
(835, '350000', '2020-10-05', 33, 34),
(836, '385000', '2020-10-05', 34, 34),
(837, '449610.52786568', '2020-10-05', 35, 34),
(838, '875000', '2020-10-05', 36, 34),
(839, '1238939.2114972', '2020-10-05', 37, 34),
(840, '350000', '2020-10-05', 38, 34),
(841, '779260.02683667', '2020-10-05', 39, 34),
(842, '113694.1198189', '2020-10-05', 40, 34),
(843, '1069214.9119906', '2020-10-05', 41, 34),
(844, '1218.4589845952', '2020-10-05', 42, 34),
(845, '105000', '2020-10-05', 43, 34),
(846, '367170.03213494', '2020-10-05', 44, 34),
(847, '350459.13', '2020-10-05', 45, 34),
(848, '233819.83151254', '2020-10-05', 46, 34),
(849, '1750000', '2020-10-05', 47, 34),
(850, '6489439.404032', '2020-10-05', 48, 34),
(851, '1015000', '2020-10-05', 49, 34),
(852, '8167500', '2020-10-05', 50, 34),
(853, '700000', '2020-10-05', 51, 34),
(854, '254478.11075095', '2020-10-05', 54, 34),
(855, '280000', '2020-10-05', 55, 34),
(856, '9293800', '2020-10-05', 56, 34),
(857, '560000', '2020-10-05', 57, 34),
(858, '351973.09160395', '2020-10-05', 58, 34),
(859, '230063.2996662', '2020-10-05', 59, 34),
(860, '700000', '2020-10-05', 60, 34),
(861, '1400000', '2020-10-05', 61, 34),
(862, '408361.596552', '2020-10-05', 62, 34),
(863, '567732.1104', '2020-10-05', 63, 34),
(864, '595000', '2020-10-05', 64, 34),
(865, '1500347.0055', '2020-10-05', 65, 34),
(866, '196782.6042', '2020-10-05', 66, 34),
(867, '579614.49', '2020-10-05', 67, 34),
(868, '629937.37333333', '2020-10-05', 68, 34),
(869, '350000', '2020-10-05', 69, 34),
(870, '118.272', '2020-10-05', 70, 34),
(871, '381207.74915475', '2020-10-05', 71, 34),
(872, '700000', '2020-10-05', 72, 34),
(873, '525000', '2020-10-05', 73, 34),
(874, '847616.70001208', '2020-10-05', 74, 34),
(875, '472500', '2020-10-05', 75, 34),
(876, '210000', '2020-10-05', 76, 34),
(877, '727398', '2020-10-05', 77, 34),
(878, '350000', '2020-10-05', 78, 34),
(879, '653359', '2020-10-05', 79, 34),
(880, '990500', '2020-10-05', 80, 34),
(881, '526837.5', '2020-10-05', 82, 34),
(882, '350000', '2020-10-05', 83, 34),
(883, '4002956', '2020-10-05', 84, 34),
(884, '3602083.33331', '2020-10-05', 85, 34),
(885, '721233.33331', '2020-10-05', 86, 34),
(886, '198333.33333333', '2020-10-05', 87, 34),
(887, '23333.333333333', '2020-10-05', 88, 34),
(888, '44380', '2020-10-05', 89, 34),
(889, '396666.66666667', '2020-10-05', 90, 34),
(890, '0', '2020-10-05', 91, 34),
(891, '198333.33333333', '2020-10-05', 92, 34),
(892, '233333.33333333', '2020-10-05', 93, 34),
(893, '585000', '2020-11-03', 1, 35),
(894, '600000', '2020-11-03', 2, 35),
(895, '130.43787253539', '2020-11-03', 3, 35),
(896, '3008811.0213976', '2020-11-03', 4, 35),
(897, '131.69958070898', '2020-11-03', 6, 35),
(898, '480000', '2020-11-03', 7, 35),
(899, '744696.5264856', '2020-11-03', 8, 35),
(900, '7194775', '2020-11-03', 9, 35),
(901, '52961.352360548', '2020-11-03', 10, 35),
(902, '34756.354558061', '2020-11-03', 11, 35),
(903, '220097.32972722', '2020-11-03', 12, 35),
(904, '9353500', '2020-11-03', 13, 35),
(905, '600000', '2020-11-03', 14, 35),
(906, '750000', '2020-11-03', 15, 35),
(907, '300000', '2020-11-03', 16, 35),
(908, '5884130', '2020-11-03', 103, 35),
(909, '489000', '2020-11-03', 18, 35),
(910, '776698.47741509', '2020-11-03', 19, 35),
(911, '518367.6531', '2020-11-03', 20, 35),
(912, '221253.73172838', '2020-11-03', 21, 35),
(913, '210000', '2020-11-03', 22, 35),
(914, '150000', '2020-11-03', 23, 35),
(915, '420000', '2020-11-03', 24, 35),
(916, '3200000', '2020-11-03', 25, 35),
(917, '483732', '2020-11-03', 26, 35),
(918, '110048.60901137', '2020-11-03', 27, 35),
(919, '300000', '2020-11-03', 28, 35),
(920, '480000', '2020-11-03', 29, 35),
(921, '575261.12486415', '2020-11-03', 30, 35),
(922, '129031.12079808', '2020-11-03', 31, 35),
(923, '300000', '2020-11-03', 33, 35),
(924, '330000', '2020-11-03', 34, 35),
(925, '398868.76829227', '2020-11-03', 35, 35),
(926, '750000', '2020-11-03', 36, 35),
(927, '1099116.071914', '2020-11-03', 37, 35),
(928, '300000', '2020-11-03', 38, 35),
(929, '134324.3466651', '2020-11-03', 39, 35),
(930, '100862.92629648', '2020-11-03', 40, 35),
(931, '948546.37192309', '2020-11-03', 41, 35),
(932, '1080.9471849052', '2020-11-03', 42, 35),
(933, '325732.27136542', '2020-11-03', 44, 35),
(934, '207431.5933847', '2020-11-03', 46, 35),
(935, '1500000', '2020-11-03', 47, 35),
(936, '6749016.9801933', '2020-11-03', 48, 35),
(937, '870000', '2020-11-03', 49, 35),
(938, '9738600', '2020-11-03', 50, 35),
(939, '600000', '2020-11-03', 51, 35),
(940, '225758.43825192', '2020-11-03', 54, 35),
(941, '240000', '2020-11-03', 55, 35),
(942, '9293800', '2020-11-03', 56, 35),
(943, '480000', '2020-11-03', 57, 35),
(944, '312250.41412293', '2020-11-03', 58, 35),
(945, '204099.01298959', '2020-11-03', 59, 35),
(946, '600000', '2020-11-03', 60, 35),
(947, '1200000', '2020-11-03', 61, 35),
(948, '362275.07351256', '2020-11-03', 62, 35),
(949, '503659.486512', '2020-11-03', 63, 35),
(950, '510000', '2020-11-03', 64, 35),
(951, '1331022.129165', '2020-11-03', 65, 35),
(952, '174574.281726', '2020-11-03', 66, 35),
(953, '514200.8547', '2020-11-03', 67, 35),
(954, '558844.4412', '2020-11-03', 68, 35),
(955, '300000', '2020-11-03', 69, 35),
(956, '104.92416', '2020-11-03', 70, 35),
(957, '338185.73175014', '2020-11-03', 71, 35),
(958, '600000', '2020-11-03', 72, 35),
(959, '450000', '2020-11-03', 73, 35),
(960, '751957.10101071', '2020-11-03', 74, 35),
(961, '405000', '2020-11-03', 75, 35),
(962, '180000', '2020-11-03', 76, 35),
(963, '645305.94', '2020-11-03', 77, 35),
(964, '300000', '2020-11-03', 78, 35),
(965, '583622.77', '2020-11-03', 79, 35),
(966, '849000', '2020-11-03', 80, 35),
(967, '467380.125', '2020-11-03', 82, 35),
(968, '300000', '2020-11-03', 83, 35),
(969, '4002956', '2020-11-03', 84, 35),
(970, '3195562.4999793', '2020-11-03', 85, 35),
(971, '639836.9999793', '2020-11-03', 86, 35),
(972, '175950', '2020-11-03', 87, 35),
(973, '20700', '2020-11-03', 88, 35),
(974, '54011.4', '2020-11-03', 89, 35),
(975, '351900', '2020-11-03', 90, 35),
(976, '0', '2020-11-03', 91, 35),
(977, '175950', '2020-11-03', 92, 35),
(978, '207000', '2020-11-03', 93, 35),
(979, '230000', '2020-11-03', 94, 35),
(980, '96000', '2020-11-03', 95, 35),
(981, '800000', '2020-11-03', 96, 35),
(982, '135000', '2020-11-03', 97, 35),
(983, '50000', '2020-11-03', 98, 35),
(984, '484008.136', '2020-11-03', 99, 35),
(985, '300000', '2020-11-03', 100, 35),
(986, '450000', '2020-11-03', 101, 35),
(987, '624424.6866', '2020-11-03', 102, 35);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `file_type`) VALUES
(3, 'AVATAR1.png', 'image/png'),
(4, 'AVATAR2.png', 'image/png'),
(5, 'AVATAR3.png', 'image/png'),
(6, 'AVATAR4.png', 'image/png'),
(7, 'AVATAR5.png', 'image/png'),
(8, 'AVATAR6.png', 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `inv_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tipo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `date_update` date NOT NULL,
  `name_update` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `numero` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`inv_id`, `id`, `tipo`, `ruta`, `date_update`, `name_update`, `numero`) VALUES
(1, 1, 'inv', 'Adalberto Mejia Jaramillo, contratos.pdf', '2020-07-22', 'admin', '50'),
(2, 2, 'inv', 'Alba Suleydi Guio, contratos.pdf', '2020-07-22', 'admin', '43'),
(3, 3, 'inv', 'Alejandra Monsalve, contratos.pdf', '2020-07-22', 'admin', '20'),
(4, 4, 'inv', 'Cesar Alexander Ramirez, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(5, 5, 'inv', 'Alexander Restrepo Parra, contratos.pdf', '2020-07-22', 'admin', '29'),
(6, 6, 'inv', 'Ana Maria Vega, contratos.pdf', '2020-07-22', 'admin', '52'),
(7, 7, 'inv', 'Anuar Mosquera, contratos.pdf', '2020-07-22', 'admin', '34'),
(7, 8, 'inv', '', '2020-07-22', 'admin', ''),
(9, 9, 'inv', 'Claver de Jesus Foronda, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(10, 10, 'inv', 'Cristian David Tabares, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(11, 11, 'inv', 'Cristina Isabel Villota, contratos.pdf', '2020-07-22', 'admin', '35'),
(12, 12, 'inv', 'Dana Marcela Valencia, contratos II.pdf', '2020-07-22', 'admin', '23'),
(13, 13, 'inv', 'Dana Marcela Valencia, contratos.pdf', '2020-07-22', 'admin', '25'),
(14, 14, 'inv', 'Danny Arley Castaño, contratos.pdf', '2020-07-22', 'admin', '44'),
(15, 15, 'inv', 'Edison Alfredo Orozco, contratos.pdf', '2020-07-22', 'admin', '49'),
(16, 16, 'inv', '', '2020-07-22', 'admin', ''),
(17, 17, 'inv', 'Edison Andres Sandoval, contratos.pdf', '2020-07-22', 'admin', '39'),
(18, 18, 'inv', '', '2020-07-22', 'admin', ''),
(19, 19, 'inv', 'Gloria Francia Morcillo, contratos.pdf', '2020-07-22', 'admin', '56'),
(20, 20, 'inv', 'Heyder Favian Sarmiento, contratos.pdf', '2020-07-22', 'admin', '26'),
(21, 21, 'inv', 'James Bejarano Bautista, contratos.pdf', '2020-07-22', 'admin', '41'),
(22, 22, 'inv', '', '2020-07-22', 'admin', ''),
(23, 23, 'inv', '', '2020-07-22', 'admin', ''),
(24, 24, 'inv', 'Jelith Dayan Meses, contratos.pdf', '2020-07-22', 'admin', '55'),
(25, 25, 'inv', 'Jenny Maria Delgado, contratos.pdf', '2020-07-22', 'admin', '42'),
(26, 26, 'inv', 'Jhon Alejandro Aranzazu, contratos.pdf', '2020-07-22', 'admin', '17'),
(27, 27, 'inv', 'Johana Garcia Duque, contratos.pdf', '2020-07-22', 'admin', '24'),
(28, 28, 'inv', 'Jorge Mario Parra, contratos.pdf', '2020-07-22', 'admin', '38'),
(29, 29, 'inv', '', '2020-07-22', 'admin', ''),
(30, 30, 'inv', 'Juan Jose Aristizábal, contratos.pdf', '2020-07-22', 'admin', '45'),
(31, 31, 'inv', 'Lina Johana Guevara, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(32, 32, 'inv', 'Lina Marin Carvajal, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(33, 33, 'inv', 'Lorena Arias Roche, contratos.pdf', '2020-07-22', 'admin', '48'),
(34, 34, 'inv', 'Lorena Carvajal Lopez, contratos.pdf', '2020-07-22', 'admin', '54'),
(35, 35, 'inv', '', '2020-07-22', 'admin', ''),
(36, 36, 'inv', '', '2020-07-22', 'admin', ''),
(37, 37, 'inv', 'María Aleyda Roche, contratos.pdf', '2020-07-22', 'admin', '47'),
(38, 38, 'inv', 'Maria Lisbeth Londoño, contratos.pdf', '2020-07-22', 'admin', '37'),
(39, 39, 'inv', '', '2020-07-22', 'admin', ''),
(40, 40, 'inv', 'Mariana de Jesus Sanchez Cardona, contrato.pdf', '2020-07-22', 'admin', 'N/A'),
(41, 41, 'inv', 'Maria del Carmen Hoyos, contratos.pdf', '2020-07-22', 'admin', '40'),
(42, 42, 'inv', 'Matheus Henrique Barbosa, contratos.pdf', '2020-07-22', 'admin', '31'),
(43, 43, 'inv', 'Mirta Ibarra Rodríguez, contratos.pdf', '2020-07-22', 'admin', '32'),
(44, 44, 'inv', 'Nora Guevara Londoño, contratos.pdf', '2020-07-22', 'admin', '36'),
(45, 45, 'inv', 'Oscar Cordoba Marulanda, contratos.pdf', '2020-07-22', 'admin', '27'),
(46, 46, 'inv', 'Paula Andrea Casas, contratos.pdf', '2020-07-22', 'admin', '20'),
(47, 47, 'inv', 'Hugo Bedoya, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(48, 48, 'inv', '', '2020-07-22', 'admin', ''),
(49, 49, 'inv', 'Sneider Gallego Benjumea, contratos.pdf', '2020-07-22', 'admin', '54'),
(50, 50, 'inv', 'Trinidad Villegas Rios, contratos.pdf', '2020-07-22', 'admin', '22'),
(51, 51, 'inv', 'Valentina Loaiza Gómez, contratos.pdf', '2020-07-22', 'admin', '46'),
(52, 52, 'inv', 'Vanesa Gomez Acevedo, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(53, 53, 'inv', 'Vanesa Gomez, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(54, 54, 'inv', 'Victor Manuel Valencia, contratos.pdf', '2020-07-22', 'admin', '43'),
(55, 55, 'inv', 'William Bedoya Hernandez, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(56, 56, 'inv', 'Yonny Valero, contratos.pdf', '2020-07-22', 'admin', 'N/A'),
(57, 57, 'inv', '', '2020-07-22', 'admin', ''),
(58, 58, 'inv', '', '2020-07-22', 'admin', ''),
(59, 59, 'inv', '', '2020-07-22', 'admin', ''),
(60, 60, 'inv', '', '2020-07-22', 'admin', ''),
(61, 61, 'inv', '', '2020-07-22', 'admin', ''),
(62, 62, 'inv', '', '2020-07-22', 'admin', ''),
(63, 63, 'inv', '', '2020-07-22', 'admin', ''),
(64, 64, 'inv', '', '2020-07-22', 'admin', ''),
(65, 65, 'inv', '', '2020-07-22', 'admin', ''),
(66, 66, 'inv', '', '2020-07-22', 'admin', ''),
(67, 67, 'inv', '', '2020-07-22', 'admin', ''),
(68, 68, 'inv', '', '2020-07-22', 'admin', ''),
(69, 69, 'inv', '', '2020-07-22', 'admin', ''),
(70, 70, 'inv', '', '2020-07-22', 'admin', ''),
(71, 71, 'inv', '', '2020-07-22', 'admin', ''),
(72, 72, 'inv', '', '2020-07-22', 'admin', ''),
(3, 73, 'add', 'Alejandra Monsalve, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(5, 74, 'add', 'Alexánder Restrepo Parra, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(10, 75, 'add', 'Cristian David Tabares, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(13, 76, 'add', 'Dana Marcela Valencia, otro si II.pdf', '2020-07-22', 'admin', 'N/A'),
(17, 77, 'add', 'Edison Andres Sandoval, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(20, 78, 'add', 'Heyder Favian Sarmiento, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(47, 79, 'add', 'Hugo Bedoya, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(26, 80, 'add', 'Jhon Alejandro Aranzazu, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(32, 81, 'add', 'Lina Marin Carvajal, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(40, 82, 'add', 'Mariana de Jesus Sanchez Cardona, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(42, 83, 'add', 'Matheus Henrique Barbosa, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(44, 84, 'add', 'Nora Guevara Londoño, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(50, 85, 'add', 'Trinidad Villegas Rios, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(52, 86, 'add', 'Vanesa Gomez Acevedo, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(55, 87, 'add', 'William Bedoya Hernandez, otro si.pdf', '2020-07-22', 'admin', 'N/A'),
(56, 88, 'add', 'Yonny Valero, otro si.pdf', '2020-07-22', 'admin', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `perc_mes`
--

CREATE TABLE `perc_mes` (
  `id` int(11) NOT NULL,
  `perc_mes_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `perc_mes_value` float NOT NULL,
  `perc_mes_ano` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `perc_mes`
--

INSERT INTO `perc_mes` (`id`, `perc_mes_name`, `perc_mes_value`, `perc_mes_ano`) VALUES
(16, 'Enero', 0.04, '2020-04-09'),
(17, 'Febrero', 0.035, '2020-04-09'),
(18, 'Marzo', 0.035, '2020-04-09'),
(29, 'Abril', 0.035, '2020-04-11'),
(30, 'Mayo', 0.04, '2020-06-02'),
(31, 'Junio', 0.035, '2020-07-02'),
(32, 'Julio', 0.04, '2020-08-01'),
(33, 'Agosto', 0.035, '2020-09-01'),
(34, 'Septiembre', 0.035, '2020-10-02'),
(35, 'Octubre', 0.03, '2020-10-09'),
(36, 'Noviembre', 0, '2020-10-09'),
(37, 'Diciembre', 0, '2020-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `buy_price` decimal(25,2) DEFAULT NULL,
  `sale_price` decimal(25,2) NOT NULL,
  `categorie_id` int(11) UNSIGNED NOT NULL,
  `media_id` int(11) DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `buy_price`, `sale_price`, `categorie_id`, `media_id`, `date`) VALUES
(2, 'platano', '9', 2500.00, 2600.00, 1, 2, '2020-02-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ret_cap`
--

CREATE TABLE `ret_cap` (
  `id` int(11) NOT NULL,
  `investor_id` int(11) NOT NULL,
  `ret_cap_inv` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ret_cap_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ret_cap`
--

INSERT INTO `ret_cap` (`id`, `investor_id`, `ret_cap_inv`, `ret_cap_date`) VALUES
(1, 9, '70000', '2020-05-05'),
(2, 4, '2300000', '2020-05-02'),
(3, 4, '2300000', '2020-06-02'),
(4, 9, '1950000', '2020-06-03'),
(5, 42, '500', '2020-06-08'),
(6, 42, '500', '2020-07-06'),
(7, 9, '6150000', '2020-07-31'),
(8, 9, '4600000', '2020-08-03'),
(9, 4, '2300000', '2020-07-02'),
(10, 17, '4000000', '2020-09-01'),
(11, 9, '6000000', '2020-09-08'),
(12, 18, '3000000', '2020-10-27'),
(13, 17, '4796170', '2020-10-29'),
(14, 9, '3895500', '2020-11-03'),
(15, 9, '194775', '2020-11-03'),
(16, 32, '59026322', '2020-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(25,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `qty`, `price`, `date`) VALUES
(1, 2, 1, 2600.00, '2020-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`) VALUES
(1, 'JuanP', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'kgmy2e2o1.jpg', 1, '2020-11-05 10:07:36'),
(2, 'Caro Estrada', 'ncaritoe', 'eef03455cef49fa68455a933948c63357adb49d8', 2, 'y165dul62.png', 1, '2020-09-30 20:08:20'),
(3, 'Paola Vinasco', 'paola', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 'komhfy463.png', 1, '2020-11-05 09:38:15'),
(4, 'Cristian Tabares', 'cristian', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 'b1bd7zai4.png', 1, '2020-09-30 20:07:20'),
(5, 'Gio Taborda', 'gio', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 'r3u7iw3l5.png', 1, '2020-09-30 20:06:57'),
(6, 'Nancy Ramirez', 'nancy', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 'ze4x1wpy6.png', 1, '2020-09-30 20:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'Admin', 1, 1),
(2, 'Special', 2, 1),
(3, 'User', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_inv`
--
ALTER TABLE `add_inv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binnacle`
--
ALTER TABLE `binnacle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_ini`
--
ALTER TABLE `inv_ini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_rendi`
--
ALTER TABLE `inv_rendi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perc_mes`
--
ALTER TABLE `perc_mes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `ret_cap`
--
ALTER TABLE `ret_cap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `user_level` (`user_level`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_level` (`group_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_inv`
--
ALTER TABLE `add_inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `binnacle`
--
ALTER TABLE `binnacle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `inv_ini`
--
ALTER TABLE `inv_ini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `inv_rendi`
--
ALTER TABLE `inv_rendi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=988;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `perc_mes`
--
ALTER TABLE `perc_mes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ret_cap`
--
ALTER TABLE `ret_cap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `SK` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
