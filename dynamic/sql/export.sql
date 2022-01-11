-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 08.Jan 2022, 19:23
-- Verzia serveru: 10.4.22-MariaDB
-- Verzia PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `gymm_shop`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `coupnon_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `coupons`
--

INSERT INTO `coupons` (`id`, `coupnon_name`) VALUES
(1, 'MIRO20'),
(2, 'CODE20');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `height_cm` int(11) DEFAULT NULL,
  `weight_kg` int(11) DEFAULT NULL,
  `income_€` int(11) DEFAULT NULL,
  `year_of_entry` date DEFAULT NULL,
  `kids` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `age`, `gender`, `height_cm`, `weight_kg`, `income_€`, `year_of_entry`, `kids`, `location`) VALUES
(1, 'Olenka', 'Jirieck', 22, 'Female', 186, 124, 2151, '2019-05-26', '0', 'Weru'),
(2, 'Ericha', 'Pracy', 44, 'Male', 186, 72, 1852, '2019-03-08', '0', 'Dasha'),
(3, 'Hughie', 'Cottle', 37, 'Genderfluid', 171, 107, 1860, '2021-01-16', '1', 'Pogonsili'),
(4, 'Virgilio', 'Lucian', 31, 'Female', 174, 112, 2444, '2019-02-11', '1', 'Montpellier'),
(5, 'Serene', 'Bloodworthe', 43, 'Male', 171, 93, 2447, '2020-01-11', '1', 'Caparrapí'),
(6, 'Loralee', 'McCreery', 21, 'Female', 184, 79, 1836, '2019-05-13', '1', 'Chengdong'),
(7, 'Amble', 'Housegoe', 32, 'Male', 210, 112, 1585, '2018-12-10', '0', 'Krasnyy Oktyabr’'),
(8, 'Garek', 'Skuse', 26, 'Male', 178, 109, 2468, '2021-05-31', '0', 'Kičevo'),
(9, 'Cass', 'O\'Scollain', 31, 'Male', 179, 128, 1446, '2019-11-08', '0', 'Zongga'),
(10, 'Terese', 'Rookesby', 23, 'Female', 163, 119, 2138, '2018-11-13', '1', 'Fort Lauderdale'),
(11, 'Amargo', 'De Metz', 47, 'Female', 188, 132, 1475, '2021-12-20', '1', 'Al Khushnīyah'),
(12, 'Mackenzie', 'Gennings', 27, 'Female', 209, 117, 1446, '2020-06-26', '1', 'Xing’an'),
(13, 'Deb', 'Cyples', 34, 'Female', 170, 118, 2062, '2019-01-23', '0', 'Da Nang'),
(14, 'Baudoin', 'Cheyne', 28, 'Female', 178, 122, 1434, '2020-08-03', '1', 'Cândido Mota'),
(15, 'Cathie', 'Lipprose', 55, 'Agender', 188, 64, 1760, '2020-11-26', '0', 'Liliongan'),
(16, 'Arluene', 'Ridesdale', 41, 'Male', 164, 125, 2289, '2019-10-13', '0', 'Hexi'),
(17, 'Constantine', 'Giffaut', 53, 'Male', 205, 60, 2381, '2019-05-06', '1', 'Garcia Hernandez'),
(18, 'Buddy', 'Bean', 45, 'Male', 207, 110, 2395, '2021-11-08', '0', 'Hongguang'),
(19, 'Regina', 'Ferfulle', 41, 'Female', 198, 138, 1671, '2019-08-03', '0', 'Hadyach'),
(20, 'Trenna', 'Thwaite', 26, 'Female', 177, 91, 1889, '2020-08-06', '1', 'Arauco'),
(21, 'Bryce', 'Muino', 40, 'Female', 177, 78, 1801, '2020-01-03', '0', 'Caijiapu'),
(22, 'Bryant', 'Santorini', 55, 'Male', 198, 82, 1751, '2021-12-05', '1', 'Il’inskiy'),
(23, 'Auria', 'Papa', 26, 'Female', 172, 119, 1761, '2020-02-03', '0', 'Vitória do Mearim'),
(24, 'Salomi', 'McKane', 36, 'Male', 193, 137, 2013, '2021-07-27', '0', 'Bernay'),
(25, 'Celestina', 'Rash', 51, 'Female', 184, 119, 2238, '2021-04-26', '1', 'Nový Malín');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `address` varchar(128) NOT NULL,
  `country` varchar(32) NOT NULL,
  `state` varchar(32) NOT NULL,
  `postal_code` varchar(32) NOT NULL,
  `price_€` double(5,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `address`, `country`, `state`, `postal_code`, `price_€`, `date`) VALUES
(2, 'Miroslav', 'Hanisko', 'miroslav2022@gmail.com', 'Jánovce- Machalovce 17', 'United States', 'SLovakia', '05913', 25.90, '2022-01-07 23:43:16'),
(3, 'Miroslav', 'Hanisko', 'miroslav2022@gmail.com', 'Jánovce- Machalovce 17', 'United States', 'SLovakia', '05913', 25.90, '2022-01-07 23:43:44'),
(4, 'Miroslav', 'Hanisko', 'miroslav2022@gmail.com', 'Jánovce- Machalovce 17', 'Europe', 'SLovakia', '05913', 33.40, '2022-01-08 16:40:09');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `password`
--

CREATE TABLE `password` (
  `id` int(11) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `password`
--

INSERT INTO `password` (`id`, `password`) VALUES
(1, 'protein');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pre tabuľku `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `password`
--
ALTER TABLE `password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
