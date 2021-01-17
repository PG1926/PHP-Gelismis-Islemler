-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2021, 18:45:24
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `iot1929`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(255) NOT NULL,
  `kullanici_adi` varchar(255) DEFAULT NULL,
  `parola` varchar(255) DEFAULT NULL,
  `isim` varchar(255) DEFAULT NULL,
  `soyisim` varchar(255) DEFAULT NULL,
  `olusturulma_tarihi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `parola`, `isim`, `soyisim`, `olusturulma_tarihi`) VALUES
(1, 'dirensedefoğlu', 'benimparolam', 'Diren', 'Sedefoğlu', '2021-01-17 18:38:15'),
(2, 'ayzıtateş', 'e6bb5397bf35ec081b8274d2507aa27a', 'Ayzıt', 'ATEŞ', '2021-01-17 18:42:30');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
