-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 02:09 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `description`, `image`) VALUES
(1, 'Joker', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', 'images/joker.jpg'),
(2, 'Once Upon a Time... in Hollywood', 'A faded television actor and his stunt double strive to achieve fame and success in the film industry during the final years of Hollywoods Golden Age in 1969 Los Angeles.', 'images/holly.jpg'),
(6, 'Star Wars: Episode IX - The Rise of Skywalker (2019)', 'When its discovered that the evil Emperor Palpatine did not die at the hands of Darth Vader, the rebels must race against the clock to find out his whereabouts. Finn and Poe lead the Resistance to put a stop to the First Orders plans to form a new Empire, while Rey anticipates her inevitable confrontation with Kylo Ren.', 'images/starwars.jpg'),
(7, 'The Lego Movie 2: The Second Part', 'Its been five years since everything was awesome and the citizens are facing a huge new threat: Lego Duplo invaders from outer space, wrecking everything faster than they can rebuild.', 'images/lego.jpg'),
(8, 'Spider-Man: Far from Home', 'Following the events of Avengers: Endgame (2019), Spider-Man must step up to take on new threats in a world that has changed forever.', 'images/spiderman.jpg'),
(10, 'Men in Black: International (2019)', 'The Men in Black have always protected the Earth from the scum of the universe. In this new adventure, they tackle their biggest threat to date: a mole in the Men in Black organization.', 'images/mib.jpg'),
(11, 'Aladdin (2019)', 'A kind-hearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.', 'images/aliddan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
