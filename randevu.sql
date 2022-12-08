-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Nis 2021, 18:15:04
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `randevu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `kullaniciadi` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `unv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `kullaniciadi`, `sifre`, `unv`) VALUES
(0, 'ahmetyılmaz', 'ahmetyılmaz1', 'Dr. Ahmet YILMAZ'),
(1, 'cananucar', 'cananucar1', 'Dr. Canan Uçar'),
(2, 'sinemdönmez', 'sinemdönmez1', 'Dr. Sinem Dönmez'),
(3, 'beyzayakar', 'beyzayakar1', 'Dr. Beyza Yakar'),
(4, 'hasanbıyıklı', 'hasanbıyıklı1', 'Dr. Hasan Bıyıklı'),
(5, 'metinulus', 'metinulus1', 'Dr. Metin Ulus'),
(6, 'büşraöz', 'büşraöz1', 'Dr. Büşra Öz'),
(7, 'haliltakıl', 'haliltakıl1', 'Dr. Halil Takıl');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `citylist`
--

CREATE TABLE `citylist` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `citylist`
--

INSERT INTO `citylist` (`id`, `title`) VALUES
(0, 'Seçiniz!'),
(1, 'Ankara'),
(2, 'İstanbul'),
(3, 'İzmir'),
(4, 'Kütahya');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doclist`
--

CREATE TABLE `doclist` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `doclist`
--

INSERT INTO `doclist` (`id`, `title`) VALUES
(0, 'Seçiniz!'),
(1, 'Ahmet Yılmaz'),
(2, 'Canan Uçar'),
(3, 'Sinem Dönmez'),
(4, 'Hasan Bıyıklı'),
(5, 'Metin Ulus'),
(6, 'Beyza Yakar'),
(7, 'Büşra Öz'),
(8, 'Halil Takıl');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `epilist`
--

CREATE TABLE `epilist` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `epilist`
--

INSERT INTO `epilist` (`id`, `title`) VALUES
(0, 'Seçiniz!'),
(1, 'Kulak Burun Boğaz'),
(2, 'Cildiye'),
(3, 'İç Hastalıklar'),
(4, 'Ortapedi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hasta`
--

CREATE TABLE `hasta` (
  `tc` varchar(255) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `hastalik` varchar(255) NOT NULL,
  `ilac` varchar(255) NOT NULL,
  `doktor` varchar(255) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hasta`
--

INSERT INTO `hasta` (`tc`, `ad`, `soyad`, `hastalik`, `ilac`, `doktor`, `tarih`) VALUES
('2147483647', 'Mustafa', 'Peynirci', 'grip', 'asd', 'Dr. Canan Uçar', '2021-05-05 23:07:00'),
('2147483647', 'Mustafa', 'Peynirci', 'sakat', 'hava', 'Dr. Canan Uçar', '2021-04-27 23:08:00'),
('2147483647', 'Gürhan', 'koz', 'sakat', 'hava', 'Dr. Canan Uçar', '2021-04-22 23:09:00'),
('12345678913', 'Mustafa', 'kkk', 'astım', 'hava', 'Dr. Canan Uçar', '2021-04-21 23:06:00'),
('12345678913', 'Mustafa', 'kkk', 'astım', 'hava', 'Dr. Canan Uçar', '2021-04-21 23:06:00'),
('2147483647', 'Gürhan', 'koz', 'asd', 'asd', 'Dr. Canan Uçar', '2021-04-28 23:16:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hosplist`
--

CREATE TABLE `hosplist` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hosplist`
--

INSERT INTO `hosplist` (`id`, `title`) VALUES
(0, 'Seçiniz!'),
(1, 'Acıbadem Hastanesi'),
(2, 'Anadolu Hastanesi'),
(3, 'Hayat Hastanesi'),
(4, 'Metro Hastanesi'),
(5, 'Ortaköy Hastanesi'),
(6, 'Medical Hastanesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE `randevular` (
  `TC` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `episode` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
