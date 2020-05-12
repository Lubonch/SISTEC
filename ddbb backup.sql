-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 09:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escuela`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `taller_id` int(11) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `usuario`, `password`, `email`, `taller_id`, `fecha_registro`, `activo`) VALUES
(1, 'moderador', '$2y$10$wQ88aob6QDVHJnhh0rkM2OYlAP3u3NAkK4jhEsvHA1z5Fiobc2wH.', 'moderador@localhost', NULL, '2019-11-23 19:29:39', 0),
(4, 'tendoucurien', '$2y$10$E6ikV24vd/ugFsqnyqAhNOoEFqr7QejxuiIGYy.WtXuI4DrJdnNV6', 'tendoucurien@gmail.com', 7, '2019-11-24 18:03:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recuperacion_clave`
--

CREATE TABLE `recuperacion_clave` (
  `id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `url_secreta` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `talleres`
--

CREATE TABLE `talleres` (
  `id` int(11) NOT NULL,
  `nombre` char(80) NOT NULL,
  `descripcion` char(150) NOT NULL,
  `dia` enum('lunes','martes','miercoles','jueves','viernes') DEFAULT NULL,
  `horario` enum('primer turno','segundo turno') DEFAULT NULL,
  `certificado` enum('si','no') DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `talleres`
--

INSERT INTO `talleres` (`id`, `nombre`, `descripcion`, `dia`, `horario`, `certificado`, `fecha_registro`, `activo`) VALUES
(1, 'Corte y confección', 'Actividades de la industria textil que se vinculan, de forma artesanal, con el diseño de moda.', NULL, NULL, NULL, NULL, NULL),
(2, 'Seguridad e Higiene Laboral', 'El objetivo es que los estudiantes obtengan conocimientos en materia de Higiene y Seguridad', NULL, NULL, NULL, NULL, NULL),
(3, 'Ritmos Latinos', 'Disciplina de acondicionamiento físico dinámica, divertida y emocionante inspirada en la música latina.', NULL, NULL, NULL, NULL, NULL),
(5, 'Jabonería y Cosmética Natural', 'En este taller aprenderás a hacer jabones con ingredientes naturales, muy saludables para el cuidado de tu piel.', NULL, NULL, NULL, NULL, NULL),
(7, 'Coaching y Liderazgo', 'Taller para desarrollar las habilidades impresindibles de dirección y Gerencia.', NULL, NULL, NULL, NULL, NULL),
(8, 'Contabilidad básica aplicada', 'Podrá adquirir los conocimientos fundamentales de la Contabilidad para PYMES.', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `taller_id` (`taller_id`);

--
-- Indexes for table `recuperacion_clave`
--
ALTER TABLE `recuperacion_clave`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `alumno_id` (`alumno_id`);

--
-- Indexes for table `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `recuperacion_clave`
--
ALTER TABLE `recuperacion_clave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`taller_id`) REFERENCES `talleres` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `recuperacion_clave`
--
ALTER TABLE `recuperacion_clave`
  ADD CONSTRAINT `recuperacion_clave_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
