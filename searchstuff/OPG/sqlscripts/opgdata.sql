-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 01:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opgdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserID`, `UserName`, `Password`) VALUES
(1, 'opgadmin', 'opgPass9');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `PetID` int(11) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `PetType` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `AgeGroup` varchar(10) NOT NULL,
  `ImageName` varchar(100) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`PetID`, `Category`, `PetType`, `Gender`, `AgeGroup`, `ImageName`, `Description`) VALUES
(7, 'Lost', 'Cat', 'Male', 'Adult', 'Cat-abyssinian.jpg', 'We found this great  looking Abyssinian cat last week. Does he belong to you?'),
(8, 'Rescued', 'Cat', 'Female', 'Infant', 'Cat-bengal-kitten.jpg', 'Cute Bengal kitten needs a good home'),
(9, 'Lost', 'Cat', 'Male', 'Adult', 'Cat-Burmese.jpg', 'Is this chocolate Burmese cat yours? He has been with us for 3 weeks.'),
(10, 'Rescued', 'Cat', 'Male', 'Adult', 'Cat-norwegian-forest.jpg', 'Boxy is a Norwegian forest cat that was rescued from a fire. He needs a kind family.'),
(11, 'Lost', 'Cat', 'Male', 'Adult', 'Cat-persian.jpg', 'Is this your cat? He is a handsome Persian blue cat. He has been with us now for two months.'),
(12, 'Rescued', 'Cat', 'Female', 'Adult', 'Cat-siamese.jpg', 'She is a fantastic Siamese cat looking for an active family.'),
(13, 'Rescued', 'Cat', 'Male', 'Adult', 'Cat-tabby.jpg', 'Tabby here needs a good home'),
(14, 'Rescued', 'Cat', 'Female', 'Infant', 'Cat-tabby-kitten.jpg', 'Such a cutey, She is so curious and full of energy. Lovely tabby kitten'),
(15, 'Lost', 'Dog', 'Male', 'Adult', 'Dog-beagle.jpg', 'This Beagle has been with us for two days, is he yours?'),
(16, 'Rescued', 'Dog', 'Female', 'Adult', 'Dog-Border-Collie.jpg', 'Great with active kids in a friendly family, she is lots of fun.'),
(17, 'Rescued', 'Dog', 'Male', 'Adult', 'Dog-cavalier-king-charles-spaniel-pup.jpg', 'This boy needs a good stable home.'),
(18, 'Rescued', 'Dog', 'Female', 'Infant', 'Dog-Chihuahua puppy.jpg', 'Cute puppy Chihuahua needs an active family with a safe home.'),
(19, 'Lost', 'Dog', 'Male', 'Adult', 'Dog-german-shepard.png', 'We call him Rex, he has been with us for almost 3 months now. Great personality.'),
(20, 'Rescued', 'Dog', 'Female', 'Adult', 'Dog-LabradorRetriever.jpg', 'She needs a lot of space and stable home.'),
(21, 'Rescued', 'Dog', 'Male', 'Adult', 'Dog-old-english-bulldog.jpg', 'Very nervous but so faithful, great family pet for those with patience.'),
(22, 'Rescued', 'Dog', 'Female', 'Infant', 'Dog-toy-poodle-pup.jpg', 'This toy poodle is so adorable, needs lots of company.'),
(23, 'Rescued', 'Other', 'Male', 'Adult', 'O-blue_tongue_lizard.jpg', 'Great looking Blue Tongue needs a home.'),
(24, 'Lost', 'Other', 'Male', 'Adult', 'O-buggie.jpg', 'Buggie was found last week.'),
(25, 'Rescued', 'Other', 'Male', 'Adult', 'O-chameleons.jpg', 'Chameleons need a lot of care and patience, is that you?'),
(26, 'Rescued', 'Other', 'Female', 'Adult', 'O-Cockatoo.jpg', 'What a pretty girl, great pet.'),
(27, 'Rescued', 'Other', 'Female', 'Adult', 'O-PeaceFaces.jpg', 'This actually a mating pair that was given to us as the owners are moving overseas.'),
(28, 'Lost', 'Other', 'Male', 'Adult', 'O-rabbit.jpg', 'We have a white rabbit that was brought in yesterday. Is he yours?'),
(29, 'Rescued', 'Other', 'Female', 'Adult', 'O-tortoise.jpg', 'This girl is easy to look after, but needs a very secure area and lots of green things to nibble.'),
(38, 'Lost', 'Other', 'Male', 'Adult', 'O-Guinea_Pig.jpg', 'Guinea Pig needs a new happy and vibrant home'),
(40, 'Lost', 'Cat', 'Male', 'Infant', 'kitten.png', 'Kitten Tim was lost last week, reward offered'),
(43, 'Rescued', 'Other', 'Female', 'Infant', 'Goat1.jpg', 'Goatty is looking for a home needs love and food');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`PetID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `PetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
