-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 05:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kalateb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kala`
--

CREATE TABLE `tbl_kala` (
  `id` bigint(20) NOT NULL,
  `nam` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `urlAks` varchar(256) COLLATE utf8mb4_persian_ci NOT NULL,
  `gheimat` int(11) DEFAULT NULL,
  `mojodi` int(11) DEFAULT 0,
  `takhfif` tinyint(4) DEFAULT NULL,
  `emtiaz` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `tbl_kala`
--

INSERT INTO `tbl_kala` (`id`, `nam`, `urlAks`, `gheimat`, `mojodi`, `takhfif`, `emtiaz`) VALUES
(1, 'فشارسنج دیجیتال امرن مدل M2', 'https://dkstatics-public.digikala.com/digikala-products/c548d8d36a93b0e59024a66d73a42c73a6a194a6_1672733006.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90', 2196940, 7, 8, 4.2),
(2, 'دستگاه تست قند خون دیابان مدل SMM 1000 به همراه نوار تست قند خون بسته 50 عددی', 'https://dkstatics-public.digikala.com/digikala-products/ee7e4a21b0b74acd8f5f9fbdd3ccdd85667592c5_1672227010.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90', 250000, 6, 0, 4.3),
(3, 'کیسه آب گرم برقی مدل 801', 'https://dkstatics-public.digikala.com/digikala-products/0ba33cf489b9a5a343d18dd61e30f88def4df225_1615023539.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90', 150000, 2, 0, 3.9),
(4, 'فشارسنج دیجیتال بازویی گلامور مدلTMB987', 'https://dkstatics-public.digikala.com/digikala-products/a4b422395f0f0c83e86c44b582baa00b65490a8e_1676284996.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90', 1999000, 5, 26, 4.2),
(5, 'صندلی ماساژور بن کر مدل K20', 'https://dkstatics-public.digikala.com/digikala-products/80ea5109ba9ffc6eb26501a6bac16db8f89beb47_1625471517.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90', 343000000, 2, 0, 3.1),
(6, 'دماسنج و رطوبت سنج سنسور اکسترنال مدل LX8011', 'https://dkstatics-public.digikala.com/digikala-products/1605922.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90', 88690, 3, 0, 3.8),
(7, 'قوزبند و کتف بند طب و صنعت مدل 52200', 'https://dkstatics-public.digikala.com/digikala-products/120375666.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90', 280000, 2, 0, 3.6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kala`
--
ALTER TABLE `tbl_kala`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kala`
--
ALTER TABLE `tbl_kala`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
