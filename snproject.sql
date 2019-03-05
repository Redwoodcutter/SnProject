-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 05 Mar 2019, 04:14:29
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `snproject`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(16) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `experiance` varchar(30) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `goal` varchar(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pt_message` longtext NOT NULL,
  `collage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `password`, `job`, `location`, `experiance`, `skill`, `goal`, `e_mail`, `city`, `pt_message`, `collage`) VALUES
(1, 0, 'oguz', 'k', '123', 'Student', 'Turkey', '5 years', 'C, C#, unity, Php', 'ingilizce', 'oguzk@gmail.com', 'istanbul', 'text mesaji long text olarak duzenlenmistir', 'karabük üniversitesi bilgisayar mühendisligi'),
(2, 0, 'bilal', 'bark', '123', 'Karabük', 'Turkiye', '2 years', 'Json Api, Restfull Api', 'dil ingilizce türkçe', 'mbilalbar@gmail.com', 'ankara', 'text mesaji long text olarak duzenlenmistir turkish ci olarak da duzeltilmesi lazin', 'Ankara universitesi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
