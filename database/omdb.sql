-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 03:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `omdbs`
--

CREATE TABLE `omdbs` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(4) NOT NULL,
  `imdbID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `poster` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `omdbs`
--

INSERT INTO `omdbs` (`id`, `title`, `year`, `imdbID`, `type`, `poster`) VALUES
(2, 'The Bat', 1959, 'tt0052602', 'movie', 'https://m.media-amazon.com/images/M/MV5BYWY3N2M0MzktZjkxNi00MjNlLTg2ZjctZGVjZTZhNzZiMDc4XkEyXkFqcGdeQXVyMDI2NDg0NQ@@._V1_SX300.jpg'),
(3, 'The Devil Bat', 1940, 'tt0032390', 'movie', 'https://m.media-amazon.com/images/M/MV5BZWE4MjhjMDItZmQ5Yy00OTQxLWE0M2EtZTJiMTFhMzc1NjJjXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg'),
(4, 'The Vampire Bat', 1933, 'tt0024727', 'movie', 'https://m.media-amazon.com/images/M/MV5BY2Q1NWZlOWQtOGQwMS00YjUyLTlkZDctNTQ5ZjRlNGE1ZDI1XkEyXkFqcGdeQXVyNjc0MzMzNjA@._V1_SX300.jpg'),
(5, 'The Bat People', 1974, 'tt0071198', 'movie', 'https://m.media-amazon.com/images/M/MV5BZWM3ZGUyZWEtMjQ0OS00ZjJlLTkzNjktMjBjM2E1MzI0N2JlL2ltYWdlXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg'),
(7, 'The Bat Whispers', 1930, 'tt0020668', 'movie', 'https://m.media-amazon.com/images/M/MV5BMTUwMjg3NDc2OF5BMl5BanBnXkFtZTgwMzk4ODQwMjE@._V1_SX300.jpg'),
(9, 'The Bat', 1926, 'tt0016629', 'movie', 'https://m.media-amazon.com/images/M/MV5BMTgxMzcyOTA1OF5BMl5BanBnXkFtZTcwMzU5NjQyMg@@._V1_SX300.jpg'),
(10, 'Rise of the Black Bat', 2012, 'tt2205589', 'movie', 'https://m.media-amazon.com/images/M/MV5BMjMwMTQ2OTU2MF5BMl5BanBnXkFtZTcwMDI0OTU4OA@@._V1_SX300.jpg'),
(17, 'The Lego Batman Movie', 2017, 'tt4116284', 'movie', 'https://m.media-amazon.com/images/M/MV5BMTcyNTEyOTY0M15BMl5BanBnXkFtZTgwOTAyNzU3MDI@._V1_SX300.jpg'),
(18, 'Batman: The Animated Series', 1992, 'tt0103359', 'series', 'https://m.media-amazon.com/images/M/MV5BOTM3MTRkZjQtYjBkMy00YWE1LTkxOTQtNDQyNGY0YjYzNzAzXkEyXkFqcGdeQXVyOTgwMzk1MTA@._V1_SX300.jpg'),
(19, 'Batman: Under the Red Hood', 2010, 'tt1569923', 'movie', 'https://m.media-amazon.com/images/M/MV5BNmY4ZDZjY2UtOWFiYy00MjhjLThmMjctOTQ2NjYxZGRjYmNlL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SX300.jpg'),
(20, 'Batman: The Dark Knight Returns, Part 1', 2012, 'tt2313197', 'movie', 'https://m.media-amazon.com/images/M/MV5BMzIxMDkxNDM2M15BMl5BanBnXkFtZTcwMDA5ODY1OQ@@._V1_SX300.jpg'),
(21, 'The Cat in the Hat', 2003, 'tt0312528', 'movie', 'https://m.media-amazon.com/images/M/MV5BMTI5MDU3MTYyMF5BMl5BanBnXkFtZTYwODgyODc3._V1_SX300.jpg'),
(22, 'Black Cat, White Cat', 1998, 'tt0118843', 'movie', 'https://m.media-amazon.com/images/M/MV5BMmExZTZhN2QtMzg5Mi00Y2M5LTlmMWYtNTUzMzUwMGM2OGQ3XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SX300.jpg'),
(23, 'The Cat Returns', 2002, 'tt0347618', 'movie', 'https://m.media-amazon.com/images/M/MV5BYThhZDdiMjItYzRkNy00OTE3LTk5ZDEtMzUwNzE1ZmJkMTYzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg'),
(24, 'Cat on a Hot Tin Roof', 1958, 'tt0051459', 'movie', 'https://m.media-amazon.com/images/M/MV5BMzFhNTMwNDMtZjY3Yy00NzY3LWI1ZWQtZTQxMWJmODVhZWFkXkEyXkFqcGdeQXVyNjQzNDI3NzY@._V1_SX300.jpg'),
(26, 'Cat People', 1942, 'tt0034587', 'movie', 'https://m.media-amazon.com/images/M/MV5BNzI4YWY0NWQtNWI5YS00MGE4LWE4YTgtMzBmOWIwMzdiYTRiL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg'),
(27, 'Cat People', 1982, 'tt0083722', 'movie', 'https://m.media-amazon.com/images/M/MV5BMTNhY2MyNmYtNzczZi00YWEyLWJlYTgtYzZiMzM1NDE0ZjYxXkEyXkFqcGdeQXVyMDI2NDg0NQ@@._V1_SX300.jpg'),
(28, 'Cat Ballou', 1965, 'tt0059017', 'movie', 'https://m.media-amazon.com/images/M/MV5BNWEyYzczOWQtODlhNi00ZmE0LTgzZTYtOTcxNjU3MDAwM2YzXkEyXkFqcGdeQXVyNjE5MjUyOTM@._V1_SX300.jpg'),
(29, 'Fritz the Cat', 1972, 'tt0068612', 'movie', 'https://m.media-amazon.com/images/M/MV5BYjc4OTdiODgtYjk5NC00N2E3LWJkOGQtNzgzMzAwOTljY2IzXkEyXkFqcGdeQXVyMzM4MjM0Nzg@._V1_SX300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `omdb_user`
--

CREATE TABLE `omdb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `omdb_user`
--

INSERT INTO `omdb_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `omdbs`
--
ALTER TABLE `omdbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `omdb_user`
--
ALTER TABLE `omdb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `omdbs`
--
ALTER TABLE `omdbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `omdb_user`
--
ALTER TABLE `omdb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
