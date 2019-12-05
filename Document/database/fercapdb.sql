-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 10:29 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fercapdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `past_events`
--

CREATE TABLE `past_events` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `past_events`
--

INSERT INTO `past_events` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'past event title', 'past event description', '29qEsG4avHubuaClWjJqS7jrmJNz2ghCxpB9oHMh.pdf', '2019-12-05 07:43:53', '2019-12-05 07:43:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `past_surveys`
--

CREATE TABLE `past_surveys` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `past_surveys`
--

INSERT INTO `past_surveys` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'survey title', 'survey description', 'ZxjwM5scedFVYd0V2wQ6rhiSnh1ipCstBSIs1bMy.pdf', '2019-12-05 07:57:31', '2019-12-05 07:57:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `caption` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `caption`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'photo cap tion', 'yyJtbxsIODhEJ4I7kQN5QqhJW8QL51JEALeEFKem.jpeg', '2019-12-05 08:10:39', '2019-12-05 08:10:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'public title', 'public description', '5iuLVf0Wqpg4XAbD1GESlzpcQJHNqFR9CwTMzj2J.jpeg', '2019-12-05 08:20:33', '2019-12-05 08:20:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `researchs`
--

CREATE TABLE `researchs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `researchs`
--

INSERT INTO `researchs` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'research title', 'research description', 'PN1CpBDH7fQ8J6TNYFoA4iMydWggbsCW7aH0gHWs.pdf', '2019-12-05 08:31:48', '2019-12-05 08:31:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_events`
--

CREATE TABLE `tb_events` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_events`
--

INSERT INTO `tb_events` (`id`, `title`, `description`, `img`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'fghj', 'dfghjk', '6ScZ3s64rF2sLJop948Z59znYsagxPVTo9SeMN2a.jpeg', 'Hg3Uf6Iu9b2eFrdkL9pwP2bWi6znJHd9gRKmDgPF.pdf', '2019-12-05 06:26:19', '2019-12-05 06:41:36', NULL),
(4, 'TEST TILE', 'events description testt', '06aVpBO9iOokUAer2RGhDSXBDZnYehQaGFFVSCIk.jpeg', 'yMYrQga9TWI1eaQIDdxGoKnMmlfAv3AFXxua8Ac9.pdf', '2019-12-05 06:43:04', '2019-12-05 06:43:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_links`
--

CREATE TABLE `tb_links` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_links`
--

INSERT INTO `tb_links` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'link title', 'link desciption', 'yrUFGnbTtn8lrOg6EI5AhRBpIALjcILkLeaJHdf2.pdf', '2019-12-05 06:51:02', '2019-12-05 06:51:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_updates`
--

CREATE TABLE `tb_updates` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_updates`
--

INSERT INTO `tb_updates` (`id`, `title`, `description`, `img`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TEST TILE', 'events description testt', 'lTJ7mn9SVvXe5Z8G9OgS7t5h2uuMZDAx1IVh3zRQ.jpeg', 'Ql2q7Va8Z4pJnaPL3cVxzWbkxJAlIIl59SSV9cGm.pdf', '2019-12-05 09:22:01', '2019-12-05 09:22:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'traning Titel', 'trainning description', 'FtJVp3dMnZ5LcByzwRBC5FbN4YRBWsEmK22Q9sUw.pdf', '2019-12-05 08:45:44', '2019-12-05 08:45:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `past_events`
--
ALTER TABLE `past_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `past_surveys`
--
ALTER TABLE `past_surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchs`
--
ALTER TABLE `researchs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_events`
--
ALTER TABLE `tb_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_links`
--
ALTER TABLE `tb_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_updates`
--
ALTER TABLE `tb_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `past_events`
--
ALTER TABLE `past_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `past_surveys`
--
ALTER TABLE `past_surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `researchs`
--
ALTER TABLE `researchs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_events`
--
ALTER TABLE `tb_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_links`
--
ALTER TABLE `tb_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_updates`
--
ALTER TABLE `tb_updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
