-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 08:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeetemp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-register`
--

CREATE TABLE `admin-register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-register`
--

INSERT INTO `admin-register` (`id`, `username`, `email`, `password`) VALUES
(1, 'ali', 'ali@gmail.com', '$2y$10$bddTtP1tgnyInBf7M3sTQumSL.b2ElxxmIRLYNJGV.DAOD3AvYTqe'),
(2, 'moiz', 'moiz@gmail.com', '$2y$10$MiIFZ//r4le2V5wWoTkyduOWxZDSFi44VCAufnwj16yk9OnApozsW'),
(3, 'usama', 'usama@gmail.com', '$2y$10$n7AvSAjCFCEFBlrVCo3.NeUn30VJnsO35cPgLIirOfpxMH.hsxVKK'),
(4, 'mohsin', 'm@gamil.com', '$2y$10$xXR42qocC38fMIBh.Ozaz.Zf9Cg5xYkh9ve9zbXIsf5WV1fIYVA6.'),
(5, 'talha', 'talha@gmail.com', '$2y$10$744QuylDgCpUA/YMpr5TJuqm.j3iFSEBqMqeySG.oCgnWAVoWU9yG');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `status`) VALUES
(1, 'LEMONADE JUICE', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.', '$2.90', 'drink-1.jpg', 1),
(2, 'PINEAPPLE JUICE', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.', '$2.90', 'drink-2.jpg', 1),
(3, 'SODA DRINKS', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.', '$2.90', 'drink-3.jpg', 1),
(4, 'Pineapple Juice', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia', '2.00$', 'drink-4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `syed`
--

CREATE TABLE `syed` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `syed`
--

INSERT INTO `syed` (`id`, `name`, `email`, `Password`, `phone`, `status`) VALUES
(1, 'Zain Sarfraz', 'zainsarfraz82@gmail.com', '$2y$10$za3F8O1WGLfkf6M/6sd9c.Ozd.FxaEshQ9n5pcIZiOXOQqUJ97hjC', '03172667345', 1),
(2, 'Mahrukh Bilal', 'mahrukhbilal2001@gmail.com', '$2y$10$g8mTIyGfmkd67kw9QOKVvePKo.HZJQCq6UmIrXpIoPaHfI7BH1ji.', '03495758138', 1),
(3, 'Sohaib Sarfraz', 'sohaibsarfraz8@gmail.com', '$2y$10$Fon084t1HV3bYR3DldCLiuBtuU69JlRo6BSGNi6V.ZP673HgMeBqC', '03324455678', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-register`
--
ALTER TABLE `admin-register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syed`
--
ALTER TABLE `syed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-register`
--
ALTER TABLE `admin-register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `syed`
--
ALTER TABLE `syed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
