-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 15, 2018 at 04:28 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `millhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(250) NOT NULL,
  `content` varchar(500) NOT NULL,
  `post_id` int(250) NOT NULL,
  `created_by` varchar(250) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `post_id`, `created_by`, `date`) VALUES
(1, 'This is such a lovely apartment', 6, 'viktorijavalsoe@gmail.com', '2018-12-11 05:32:12'),
(2, 'I love the colours!\r\n', 6, 'viktorijavalsoe@gmail.com', '2018-12-11 05:32:47'),
(8, 'why is this not working', 6, 'viktorijavalsoe@gmail.com', '2018-12-11 18:57:49'),
(12, 'what a cool picture!', 9, 'viktorijavalsoe@gmail.com', '2018-12-12 22:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `date` datetime NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `created_by`, `image`, `date`, `category`) VALUES
(6, 'Sjelfull Blokkleilighet', ' Sanna fra Sverige kjøpte seg ny blokkleilighet i Oslo. Men den var nokså sjelløs, så etter et halvt år med hvite vegger tok hun grep og hyret inn eksperthjelp fra Eske. Hun var uhyre skeptisk til å male taket, for hun var redd leiligheten skulle føles mindre, men er i dag veldig glad for at hun lot seg overbevise. Hun tenker nå at det gir leiligheten en veldig fin helhetsfølelse. FOTO: FILIPPA TREDAL STYLING: TONE KROKEN   ', 'viktorijavalsoe@gmail.com', 'https://www.eskeinterior.no/w/wp-content/uploads/2017/03/Sanna-oppslag-3.jpg', '2018-12-10 17:12:00', 'Clothing'),
(9, 'Facelift på Frogner', 'Etter fire år med samme interiør trengte Karina en forandring i leiligheten, og full oppussing var i gang. Igjen. Kjøkkenbenken ble oppgradert med marmor fra Stenprosjekt og vask fra Drømmekjøkkenet. Resten ble hentet fra Eske. Etter mange år i gråsonen var Karina i en blå fase, og malte dermed alle rom. FOTO: ELISABETH AARHUS', 'viktorijavalsoe@gmail.com', 'https://www.eskeinterior.no/w/wp-content/uploads/2014/03/Karinasnyeleiloppslag33.jpg', '2018-12-12 10:12:00', 'Interior'),
(10, 'Familiehotellet', 'Siri Løining er lidenskapelig opptatt av hoteller, og har gjort dem til sitt yrke. De siste 12 årene har hun gjentatte ganger samarbeidet med Karina, og i hennes siste bolig har Karina hjulpet henne og samboer Kristian Kjelling skape en atmosfære som tilfredstiller hele familiens behov.', 'viktorijavalsoe@gmail.com', 'https://www.eskeinterior.no/w/wp-content/uploads/2017/11/sk1.jpg', '2018-12-13 22:12:00', 'Interior');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(250) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `title` varchar(500) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `price`, `category`) VALUES
(11, 'chair.png', 'Lounge Chair – Palisander Polished', '65 170', 'interior'),
(12, 'shelf.png', 'Marble Shelf - Ox Denmarq', '6 200', 'interior'),
(13, 'vintage_carpet.png', 'Vintage Tapis Heba ', '11 000', 'interior'),
(14, 'saber_pillow.png', 'Saber Pillow', '2 300', 'interior'),
(17, 'potpurri.png', 'Potpurri Spirituelle', '1 095', 'interior'),
(18, 'book.png', 'Darwin, Sinke & van Tongeren', '695', 'interior');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`) VALUES
(4, 'viktorijavalsoe@gmail.com', '$2y$10$Q0zYXGqbbnpdKTKiJ6SZRuF7s5THhakQfLWE6ITPILeUJsVZQ1.nC', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;