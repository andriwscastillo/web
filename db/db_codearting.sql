-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2015 at 11:36 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_codearting`
--
CREATE DATABASE IF NOT EXISTS `db_codearting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_codearting`;

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `nombreusuario` varchar(20) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(70) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Truncate table before insert `registro`
--

TRUNCATE TABLE `registro`;
--
-- Dumping data for table `registro`
--

INSERT INTO `registro` (`id`, `usuario`, `pass`, `nombreusuario`, `clave`, `nombre`, `apellido`, `correo`, `direccion`, `foto`) VALUES
(1, 'AndriwsCastillo', '', '', 'e10adc3949ba59abbe56e057f20f883e', 'Andriws', 'Castillo', 'andriwscastillo@gmail.com', 'Manzana46 #1A Las Caobas', 'no-foto.png'),
(2, 'Jose', '', '', 'e10adc3949ba59abbe56e057f20f883e', 'Abel', 'Gonzales', 'daledale@gmail.com', 'Toronto', 'no-foto.png'),
(3, 'Travis01', '', '', '4297f44b13955235245b2497399d7a93', 'Andriws', 'Castillo', 'andriwscastillo@gmail.com', 'Manzana46 #1A Las Caobas', 'no-foto.png'),
(4, 'Jose01', '', '', '4297f44b13955235245b2497399d7a93', 'Andriws', 'Castillo', 'andriwscastillo@gmail.com', 'Manzana 46', 'no-foto.png'),
(5, 'Jose02', '', '', '4297f44b13955235245b2497399d7a93', 'Andriws', 'Castillo', 'andriwscastillo@gmail.com', 'Manzana 46', 'no-foto.png'),
(6, 'Shakur', '', '', '4297f44b13955235245b2497399d7a93', 'Andriws', 'Castillo', 'andriwscastillo@gmail.com', 'Manzana 46', 'no-foto.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacto`
--

CREATE TABLE IF NOT EXISTS `tbl_contacto` (
  `IdContacto` int(100) NOT NULL AUTO_INCREMENT,
  `NombreC` varchar(15) NOT NULL,
  `TelefonoC` int(15) NOT NULL,
  `EmailC` varchar(40) NOT NULL,
  `TelefonoO` int(40) NOT NULL,
  `Parrafo` varchar(300) NOT NULL,
  `DireccionC` varchar(200) NOT NULL,
  PRIMARY KEY (`IdContacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Truncate table before insert `tbl_contacto`
--

TRUNCATE TABLE `tbl_contacto`;
--
-- Dumping data for table `tbl_contacto`
--

INSERT INTO `tbl_contacto` (`IdContacto`, `NombreC`, `TelefonoC`, `EmailC`, `TelefonoO`, `Parrafo`, `DireccionC`) VALUES
(36, 'Andriws Enrique', 0, '8296574295', 2147483647, 'Andriwscastill@gmail.com', '829675841'),
(37, 'Nikiel', 0, '8296574295', 0, 'nikel@gmail.com', '829675841'),
(38, 'Carter', 0, '8296574295', 0, 'carter@gmail.com', '6999875158');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
