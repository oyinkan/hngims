-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 03:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hngi`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `phone`, `password`, `status`) VALUES
(1, 'Aminat', 'Okunuga', 'makadeaminat@gmail.com', 'aminat', '2147483647', 'aminat', 0),
(2, 'Henry', 'Max', 'maxhenry@gmail.com', 'henry', '2147483647', '$2y$10$Xa6o6afzsePqIKKu8iBqh.M', 0),
(3, 'a', 'b', 'b@gmail.com', 'a', '2147483647', '$2y$10$6AEAabHGLF/IzfqkEP4deOSbwvyiZJI4HSnc.BrqByBTKpqIkO6Qm', 0),
(4, 'test', 'better', 'test@gmail.com', 'test', '2147483647', '$2y$10$Rucin36dyC9cwAPemWXjdeAl1Mx0xyehCkeDv48C7MBau6Ql5REsu', 0),
(5, '', '', 'th@gmail.com', 'tester', '2147483647', '$2y$10$c0mMaJbukUUMGhQHWf6zO.Va/NEvJjuX7BSktw.oOz0i3SE/2L2NG', 0),
(6, '', '', 'ju@gmail.com', 'jude', '2147483647', '$2y$10$2F9GJ/NfQ0TNn8qpOERkR.wPf.XKntCyc/02D2JTqYleR4Aj.gJ1e', 0),
(7, '', '', 'test3@gmail.com', 'test3', '2147483647', '$2y$10$jTnlC97t6i6/M10vORO60.aDq6GJ6KeU0Wy4uFUdxwCSG451j8U0a', 0),
(8, '', '', 'deen@gmail.com', 'deen', '09088776652', '$2y$10$dWTOMAuBotu3irgQsM6DsOxlUcQRfjcA8coyRhL5qCBGSF9cByFLq', 0),
(9, '', '', 'ada@gmail.com', 'ada', '09087665544', '$2y$10$dKGW0yeED1pIVTXejzwtBeb.eX0zK0c8vvGPGmIxEEv0oK/Gog2ru', 0),
(10, 'ju', 'ju', 'ju@gmail.com', 'jude', '09088776655', '$2y$10$e4lLMtA.Z63ijPr0rVev.uPeZ4e7CClRU/d/X7ExEAudwKbeEk2N2', 0),
(11, 'nunu', 'nunu', 'nunu@gmail.com', 'Nunu', '09087665544', '$2y$10$P9720HiQzjDQRY/gY3Mbl.VBozQgKP8dlBCMaCHOcJgesiDNW1Fdu', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
