-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 09 Mar 2019, 13:04:29
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
-- Tablo için tablo yapısı `educations`
--

DROP TABLE IF EXISTS `educations`;
CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `school` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `department` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `degree` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `point` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `clubs` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `start_month` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `start_year` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `finish_month` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `finish_year` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `media` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `e_text` longtext COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1232 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `school`, `department`, `degree`, `point`, `clubs`, `start_month`, `start_year`, `finish_month`, `finish_year`, `media`, `e_text`) VALUES
(41, 1, 'karabük univercity', 'computer engineering', 'bachelor', '5/4', 'Robotics Club', 'march', '2012', 'april', '2020', '', 'Text about to collage or univercity '),
(1231, 1, 'neşet yalçın high school', 'science', '100/70', '', '', 'september', '2007', 'july', '2011', '', 'Text about to your high school or someting ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET latin1 NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `company` varchar(255) CHARACTER SET latin1 NOT NULL,
  `start_month` varchar(255) CHARACTER SET latin1 NOT NULL,
  `start_year` varchar(255) CHARACTER SET latin1 NOT NULL,
  `finish_month` varchar(255) CHARACTER SET latin1 NOT NULL,
  `finish_year` varchar(255) CHARACTER SET latin1 NOT NULL,
  `e_location` varchar(255) CHARACTER SET latin1 NOT NULL,
  `e_city` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `title`, `company`, `start_month`, `start_year`, `finish_month`, `finish_year`, `e_location`, `e_city`) VALUES
(41, '1', 'koder', 'github', 'ocak', '2015', 'mart', '2020', 'turkey', 'istanbul'),
(43, '1', 'Experiences test', 'Testing Company', 'july', '2019', 'november', '2020', 'Turkey', 'Karabuk'),
(44, '1', 'Experiences test 2 ', 'ElderSociety', '12312', '20191', 'november', '20201', 'Turkey', 'Karabük'),
(45, '1', 'Deneme form sill', 'form ekleme', 'july', '2019', 'november', '2020', 'karabük', 'Karabük'),
(46, '1', 'deneme', 'deneme', 'deneme', 'deneme', 'deneme', 'deneme', 'deneme', 'deneme'),
(47, '1', 'Experiences test', 'deneme', '12312', 'deneme', '123', '3132131', '3131', 'Karabük');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `goals`
--

DROP TABLE IF EXISTS `goals`;
CREATE TABLE IF NOT EXISTS `goals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `title` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `start_month` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_turkish_ci NOT NULL,
  `start_year` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `finish_month` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `finish_year` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `goal_text` longtext COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=544 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `goals`
--

INSERT INTO `goals` (`id`, `user_id`, `title`, `start_month`, `start_year`, `finish_month`, `finish_year`, `goal_text`) VALUES
(90, '1', 'PHP certificate', 'April', '2012', 'June', '2023', 'Long text here about to goals'),
(543, '1', 'RESTFULL API', 'agust', '2015', 'September', '2021', 'Goal text about to rest apı certification'),
(321, '1', 'Unity 3D', 'july', '2010', 'november', '2012', 'Goal text about to rest apı certification');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `skill` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `rating` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill`, `rating`) VALUES
(65, 1, 'C language', '4'),
(52, 1, 'Php', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(16) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `job` varchar(30) CHARACTER SET latin1 NOT NULL,
  `location` varchar(30) CHARACTER SET latin1 NOT NULL,
  `experiance` varchar(30) CHARACTER SET latin1 NOT NULL,
  `skill` varchar(30) CHARACTER SET latin1 NOT NULL,
  `goal` varchar(30) CHARACTER SET latin1 NOT NULL,
  `e_mail` varchar(60) CHARACTER SET latin1 NOT NULL,
  `city` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pt_message` longtext CHARACTER SET latin1 NOT NULL,
  `collage` varchar(100) CHARACTER SET latin1 NOT NULL,
  `picture` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`,`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `password`, `job`, `location`, `experiance`, `skill`, `goal`, `e_mail`, `city`, `pt_message`, `collage`, `picture`) VALUES
(1, 0, 'oguz', 'k', '123', 'Student', 'Turkey', 'Github.com 2015', 'C, C#, unity, Php', 'ingilizce', 'oguzk@gmail.com', 'istanbul', 'text mesaji long text olarak duzenlenmistir', 'karabük üniversitesi bilgisayar mühendisligi', '026.jpg'),
(2, 0, 'bilal', 'bark', '123', 'Karabük', 'Turkiye', '2 years', 'Json Api, Restfull Api', 'dil ingilizce türkçe', 'mbilalbar@gmail.com', 'ankara', 'text mesaji long text olarak duzenlenmistir turkish ci olarak da duzeltilmesi lazin', 'Ankara universitesi', 'artist_1039821.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
