-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 mrt 2021 om 09:03
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gr7_challenge6_2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tb_cars`
--

CREATE TABLE `tb_cars` (
  `id` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `vraagprijs` varchar(11) NOT NULL,
  `apk` varchar(15) NOT NULL,
  `kmstand` varchar(11) NOT NULL,
  `bouwjaar` varchar(15) NOT NULL,
  `versnellingen` int(11) NOT NULL,
  `transmissie` varchar(20) NOT NULL,
  `kenteken` varchar(15) NOT NULL,
  `kleur` varchar(15) NOT NULL,
  `deuren` int(11) NOT NULL,
  `gewicht` varchar(15) NOT NULL,
  `brandstof` varchar(20) NOT NULL,
  `airco` varchar(10) NOT NULL,
  `abs_optie` varchar(10) NOT NULL,
  `airbag` varchar(10) NOT NULL,
  `stuurbekrachtiging` varchar(10) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `tb_cars`
--

INSERT INTO `tb_cars` (`id`, `merk`, `model`, `vraagprijs`, `apk`, `kmstand`, `bouwjaar`, `versnellingen`, `transmissie`, `kenteken`, `kleur`, `deuren`, `gewicht`, `brandstof`, `airco`, `abs_optie`, `airbag`, `stuurbekrachtiging`, `status`) VALUES
(1, 'Hyundai', 'Atos 1.1i', '2.950', '07-2021', '89.385', '06-2007', 5, 'handgeschakeld', '123 TT 01', 'grijs', 5, '859 kg', 'super 95', 'ja', 'ja', 'ja', 'ja', 'net binnen'),
(2, 'BMW', '114i', '12.251', '10-2021', '85.123', '02-2014', 6, 'handgeschakeld', '789 DD 65', 'zwart', 5, '1275 kg', 'super 95', 'ja', 'ja', 'ja', 'ja', 'te koop'),
(3, 'BMW', 'X3', '60.416', '08-2021', '108.789', '08-2016', 6, 'handgeschakeld', '689 RF 57', 'grijs', 5, '1480 kg', 'super 95', 'ja', 'ja', 'ja', 'ja', 'te koop'),
(4, 'BMW', 'X4', '80.410', '06-2021', '61.893', '01-2017', 6, 'handgeschakeld', '708 AB 31', 'rood', 5, '1731 kg', 'super 95', 'ja', 'ja', 'ja', 'ja', 'te koop'),
(5, 'Toyota', 'RAV4', '80.500', '01-2022', '63.093', '12-2015', 6, 'handgeschakeld', '855 AD 08', 'zwart', 5, '1524 kg', 'Benzine', 'ja', 'ja', 'ja', 'ja', 'te koop'),
(6, 'Lexus', 'UX', '120.000', '01-2022', '44.535', '05-2018', 5, 'handgeschakeld', '100 EC 41', 'wit', 5, '1517 kg', 'Benzine', 'ja', 'ja', 'ja', 'ja', 'net binnen'),
(7, 'Volkswagen', 'Golf 8', '100000', '05-2021', '1473', '09-2018', 6, 'handgeschakeld', '993 AT 84', 'geel', 5, '2830 kg', 'benzine', 'ja', 'ja', 'nee', 'ja', 'net binnen'),
(8, 'test', 'test', '1000', '05-2022', '1000', '07-2018', 5, 'handgeschakeld', '909 DC 33', 'grijs', 5, '3500 kg', 'Benzine', 'nee', 'ja', 'nee', 'ja', 'in onderhoud'),
(14, 'test', '', '', '01-2021', '3333', '', 0, '', '', 'geel', 0, '1630 kg', 'benzine', '', '', 'ja', 'ja', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tb_image`
--

CREATE TABLE `tb_image` (
  `id` int(11) NOT NULL,
  `auto_id` int(11) NOT NULL,
  `name_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `tb_image`
--

INSERT INTO `tb_image` (`id`, `auto_id`, `name_image`) VALUES
(1, 1, 'auto1.jpg'),
(2, 1, 'auto1.1.jpg'),
(3, 1, 'auto1.2.jpg'),
(4, 1, 'auto1.3.jpg'),
(5, 1, 'auto1.4.jpg'),
(6, 2, 'auto2.jpg'),
(7, 2, 'auto2.1.jpg'),
(8, 2, 'auto2.2.jpg'),
(9, 2, 'auto2.3.jpg'),
(10, 2, 'auto2.4.jpg'),
(11, 3, 'auto3.png'),
(12, 3, 'auto3.1.png'),
(13, 3, 'auto3.2.png'),
(14, 3, 'auto3.3.png'),
(15, 4, 'auto4.png'),
(16, 4, 'auto4.1.png'),
(17, 4, 'auto4.2.png'),
(18, 4, 'auto4.3.png'),
(19, 5, 'auto5.png'),
(20, 5, 'auto5.1.png'),
(21, 5, 'auto5.2.png'),
(22, 5, 'auto5.3.png'),
(23, 6, 'Auto6.png'),
(24, 6, 'Auto6.1.png'),
(25, 6, 'Auto6.2.png'),
(26, 6, 'Auto6.3.png'),
(29, 7, 'auto7.png'),
(30, 7, 'auto7.1.png'),
(31, 7, 'auto7.2.png'),
(32, 7, 'auto7.3.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tb_cars`
--
ALTER TABLE `tb_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tb_image`
--
ALTER TABLE `tb_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tb_cars`
--
ALTER TABLE `tb_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT voor een tabel `tb_image`
--
ALTER TABLE `tb_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
