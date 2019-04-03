-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Nis 2019, 11:58:39
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
-- Tablo için tablo yapısı `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text COLLATE utf32_turkish_ci NOT NULL,
  `attachment_name` text COLLATE utf32_turkish_ci NOT NULL,
  `file_ext` text COLLATE utf32_turkish_ci NOT NULL,
  `mime_type` text COLLATE utf32_turkish_ci NOT NULL,
  `message_date_time` text COLLATE utf32_turkish_ci NOT NULL,
  `ip_address` text COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=1233 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `school`, `department`, `degree`, `point`, `clubs`, `start_month`, `start_year`, `finish_month`, `finish_year`, `media`, `e_text`) VALUES
(41, 1, 'Karabük univercity', 'Computer Engineering', 'bachelor', '5/4', 'Robotics Club', 'March', '2012', 'April', '2020', '', 'Text about to collage or univercity '),
(44, 1, 'Neşet Yalçın High School', 'Science', 'Bachelors', '100/75', '', 'September', '2007', 'July', '2011', '', 'Text about to your high school or someting '),
(1232, 1, 'karabük univercity', 'deneme profil bölüm', '1', '1', '', '1', '1', '1', '1', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `title` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `company` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `start_month` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `start_year` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `finish_month` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `finish_year` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `e_location` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `e_city` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `title`, `company`, `start_month`, `start_year`, `finish_month`, `finish_year`, `e_location`, `e_city`) VALUES
(53, '2', 'Junior Developper', 'Cevdet Company', 'july', '2005', 'november', '2010', 'Ankara', 'Turkey'),
(54, '2', 'Senior Developper', 'Sen Co', 'November', '2010', 'Agust', '2015', 'Ankara', 'Turkey'),
(56, '1', 'Junior Developper', 'Karabük univercity edit deneme', 'September', '2012', 'July', '2020', 'Turkey', 'Karabük');

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
) ENGINE=MyISAM AUTO_INCREMENT=545 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `goals`
--

INSERT INTO `goals` (`id`, `user_id`, `title`, `start_month`, `start_year`, `finish_month`, `finish_year`, `goal_text`) VALUES
(90, '1', 'PHP certificate1', 'April', '2012', 'June', '2023', 'Long text here about to goals'),
(543, '1', 'RESTFULL API', 'agust', '2015', 'September', '2021', 'Goal text about to rest apı certification'),
(321, '1', 'Unity 3D', 'july', '2010', 'november', '2012', 'Goal text about to rest apı certification'),
(544, '1', 'basari ekleme deneme', 'September', '2005', 'July', '2011', 'basari degistirme edit');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `other_user_id` int(11) NOT NULL,
  `message` longtext COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `other_user_id`, `message`) VALUES
(1, 1, 1, 'deneme mesajı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `relations`
--

DROP TABLE IF EXISTS `relations`;
CREATE TABLE IF NOT EXISTS `relations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `other_user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_firstname` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `relations`
--

INSERT INTO `relations` (`id`, `user_id`, `other_user_id`, `status`, `user_firstname`, `user_lastname`) VALUES
(47, 4, 1, 1, 'erdem', 'discord'),
(48, 1, 4, 1, 'oguz', ' kumcular'),
(46, 1, 3, 1, 'oguz', ' kumcular'),
(45, 3, 1, 1, 'cevdet', 'necatigil'),
(43, 1, 2, 1, 'oguz', 'kumcular'),
(44, 2, 1, 1, 'Bilal', ' Bark');

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
  `first_name` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `job` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `location` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `experiance` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `skill` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `goal` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `e_mail` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `city` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `pt_message` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `collage` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `picture` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`,`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `password`, `job`, `location`, `experiance`, `skill`, `goal`, `e_mail`, `city`, `pt_message`, `collage`, `picture`) VALUES
(1, 1, 'oguz', 'kumcular', '123', '', '', '', '', '', 'oguzkumcular@gmail.com', '', 'Profil mesajı kismi long tex olarak düzenlenmiştir || this is profil message box its rewrite about to long text Profil mesajı kismi long tex olarak düzenlenmiştir || this is profil message box its rewrite about to long text ', '', '02.jpg'),
(2, 2, 'Bilal', 'Bark', '123', '', '', '', '', '', 'bilalbark@gmail.com', '', '', '', 'artist_103982.jpg'),
(3, 3, 'cevdet', 'necatigil', '123', '', '', '', '', '', '1@gmail.com', '', 'deneme profil', '', ''),
(4, 4, 'erdem', 'discord', '123', '', '', '', '', '', '2@gmail.com', '', 'deneme profili 2', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
