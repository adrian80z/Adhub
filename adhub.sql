-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Maj 2018, 21:53
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `adhub`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adverts`
--

CREATE TABLE `adverts` (
  `id_advert` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(19,2) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `main_picture` varchar(50) DEFAULT NULL,
  `id_category` int(11) UNSIGNED DEFAULT NULL,
  `ad_views` int(11) UNSIGNED DEFAULT '0',
  `id_user` int(11) UNSIGNED DEFAULT NULL,
  `contact_byphone` tinyint(1) DEFAULT NULL,
  `message_center` tinyint(1) DEFAULT NULL,
  `ad_type` enum('S','W') DEFAULT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_posted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `adverts`
--

INSERT INTO `adverts` (`id_advert`, `title`, `description`, `price`, `location`, `main_picture`, `id_category`, `ad_views`, `id_user`, `contact_byphone`, `message_center`, `ad_type`, `date_registered`, `date_posted`) VALUES
(25, 'Advert example', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum ornare nisi quis feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam pellentesque tristique urna, eu luctus nibh imperdiet a. Curabitur ornare velit id justo congue tincidunt. Maecenas mi magna, hendrerit sit amet felis tempus, laoreet condimentum lorem. Nulla facilisi. Donec accumsan eleifend risus lobortis tempor. Mauris non nulla quam. Cras eu lacinia lacus. Nulla est lorem, vulputate ut eleifend eu, posuere ut dui. In augue tellus, ultrices sit ', '0.00', '1', 'img/products/2018042222502637.png', 1, 66, 37, 1, 0, 'S', '2018-05-18 22:38:46', '2018-04-22 21:50:26'),
(26, 'my advert', 'used macbook pro', '234.00', '2', 'img/products/2018042300092137.png', 2, 100, 37, 1, 1, 'S', '2018-05-18 14:28:29', '2018-04-22 23:09:21'),
(27, 'new advert', ' cash cash scas', '432.00', '1', 'img/products/2018051520563340.jpg', 2, 224, 40, 0, 1, 'S', '2018-05-29 19:42:15', '2018-05-15 19:56:33');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advert_pictures`
--

CREATE TABLE `advert_pictures` (
  `id_advert_pictures` int(11) UNSIGNED NOT NULL,
  `id_advert` int(11) UNSIGNED DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `advert_pictures`
--

INSERT INTO `advert_pictures` (`id_advert_pictures`, `id_advert`, `picture`, `date_registered`) VALUES
(123, 27, 'img/products/2018042300092137.png', '2018-05-29 19:42:31');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id_category`, `category`) VALUES
(1, 'PC'),
(2, 'Laptops'),
(3, 'Smartphones'),
(4, 'Cars'),
(5, 'Kids toys'),
(6, 'Instruments'),
(7, 'Books'),
(8, 'Motorbikes');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `counties`
--

CREATE TABLE `counties` (
  `id_county` int(11) UNSIGNED NOT NULL,
  `county` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `counties`
--

INSERT INTO `counties` (`id_county`, `county`) VALUES
(1, 'Dublin'),
(2, 'Galway'),
(3, 'Cork'),
(4, 'Drogheda'),
(5, 'Kilkenny'),
(6, 'Limerick'),
(7, 'Waterford');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tracking_views`
--

CREATE TABLE `tracking_views` (
  `id_tracking_views` int(11) UNSIGNED NOT NULL,
  `id_advert` int(11) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `id_county` int(11) DEFAULT NULL,
  `date_registered` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `profile_pic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `email`, `password`, `phone`, `id_county`, `date_registered`, `last_login`, `profile_pic`) VALUES
(37, 'Adrian', 'Ziolkowski', 'adrian.ziolkowski@gmail.com', '123', '0899747324', 1, '2018-04-22 20:02:57', '2018-05-20 22:21:05', 'img/users/2018051818284237.png'),
(40, 'natalia', 'Ziolkowska', 'admarket373@gmail.com', '1', '', 1, '2018-05-15 20:54:51', '2018-05-15 19:55:01', 'images/users/default.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id_advert`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `advert_pictures`
--
ALTER TABLE `advert_pictures`
  ADD PRIMARY KEY (`id_advert_pictures`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id_county`);

--
-- Indexes for table `tracking_views`
--
ALTER TABLE `tracking_views`
  ADD PRIMARY KEY (`id_tracking_views`),
  ADD KEY `id_advert` (`id_advert`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id_advert` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `advert_pictures`
--
ALTER TABLE `advert_pictures`
  MODIFY `id_advert_pictures` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `counties`
--
ALTER TABLE `counties`
  MODIFY `id_county` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `tracking_views`
--
ALTER TABLE `tracking_views`
  MODIFY `id_tracking_views` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `adverts`
--
ALTER TABLE `adverts`
  ADD CONSTRAINT `adverts_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`),
  ADD CONSTRAINT `adverts_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ograniczenia dla tabeli `tracking_views`
--
ALTER TABLE `tracking_views`
  ADD CONSTRAINT `tracking_views_ibfk_1` FOREIGN KEY (`id_advert`) REFERENCES `adverts` (`id_advert`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
