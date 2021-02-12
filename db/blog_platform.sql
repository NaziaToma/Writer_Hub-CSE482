-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 10:26 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `topic_id` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `checkbox` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID`, `name`, `title`, `topic_id`, `featured_image`, `body`, `checkbox`, `created_at`) VALUES
(150, 'Nazia Tabassum Toma', 'Autoregressive Model', '', '1_sUI4nkPfH0wevBQMb29cnQ.jpeg', '\"ARMA model\" redirects here. For other uses, see ARMA (disambiguation).\r\nIn the statistical analysis of time series, autoregressive–moving-average (ARMA) models provide a parsimonious description of a (weakly) stationary stochastic process in terms of two polynomials, one for the autoregression (AR) and the second for the moving average (MA). The general ARMA model was described in the 1951 thesis of Peter Whittle, Hypothesis testing in time series analysis, and it was popularized in the 1970 book by George E. P. Box and Gwilym Jenkins.\r\n\r\nGiven a time series of data Xt , the ARMA model is a tool for understanding and, perhaps, predicting future values in this series. The AR part involves regressing the variable on its own lagged (i.e., past) values. The MA part involves modeling the error term as a linear combination of error terms occurring contemporaneously and at various times in the past. The model is usually referred to as the ARMA(p,q) model where p is the order of the AR part and q is the order of the MA part (as defined below).', 0, '2021-01-13 15:01:46'),
(151, 'Drabir Hasan Khan', 'New Autoregressive Model ', '', '1_sUI4nkPfH0wevBQMb29cnQ.jpeg', '\"ARMA model\" redirects here. For other uses, see ARMA (disambiguation).\r\nIn the statistical analysis of time series, autoregressive–moving-average (ARMA) models provide a parsimonious description of a (weakly) stationary stochastic process in terms of two polynomials, one for the autoregression (AR) and the second for the moving average (MA). The general ARMA model was described in the 1951 thesis of Peter Whittle, Hypothesis testing in time series analysis, and it was popularized in the 1970 book by George E. P. Box and Gwilym Jenkins.\r\n\r\nGiven a time series of data Xt , the ARMA model is a tool for understanding and, perhaps, predicting future values in this series. The AR part involves regressing the variable on its own lagged (i.e., past) values. The MA part involves modeling the error term as a linear combination of error terms occurring contemporaneously and at various times in the past. The model is usually referred to as the ARMA(p,q) model where p is the order of the AR part and q is the order of the MA part (as defined below).', 1, '2021-01-13 15:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `username`, `email`, `password`, `cpassword`, `role`) VALUES
(23, 'Faiza', 'Faiza@gmail.com', '$2y$10$Ov0JqqLlC3FO4NliEzhZmuGBvJafNVA1LmhvMTMyc1PwB5PnpYxk.', '$2y$10$ntsQEaHYfALYrr.MNGOYnurO21WIv583Ac6Yp3HOIEB9fZONKoA2C', ''),
(24, 'Nazia Tabassum', 'nazia.tabassum@northsouth.edu', '$2y$10$5SKpcrpHEYOR8VuVqk7dt.Vxgm7FF3zkCzd9zqeBsfnhv5ZjCriS2', '$2y$10$hYfZ3i9DL/dTyVux1baTK.zW.sO5Kr/bBOE.SdE1RGQJ89qDm0CUW', ''),
(25, 'Jarin Oyeshi', 'joyeshi@gmail.com', '$2y$10$U20z5wwM1/ms7TUhgXtzbujxHcze8v6gxQjfaUFhKvCG.3T5CdyEO', '$2y$10$JL6KUQ4yIJy6QFD2PKMhpenqHu78.8BC5Mr3p39lf65SENdgblNNa', '');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `id` int(11) NOT NULL,
  `total_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id`, `total_count`) VALUES
(1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `featured_image` (`featured_image`),
  ADD KEY `featured_image_2` (`featured_image`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
