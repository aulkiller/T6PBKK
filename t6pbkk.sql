-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 10:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t6pbkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_list`
--

CREATE TABLE `contact_list` (
  `contact_id` varchar(64) NOT NULL,
  `contact_label` varchar(50) NOT NULL,
  `contact_text` varchar(250) NOT NULL,
  `contact_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `portfolio_id` varchar(64) NOT NULL,
  `portfolio_name` varchar(100) NOT NULL,
  `portfolio_category` varchar(30) NOT NULL,
  `portfolio_date` date NOT NULL,
  `portfolio_desc` varchar(250) NOT NULL,
  `portfolio_image` varchar(250) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`portfolio_id`, `portfolio_name`, `portfolio_category`, `portfolio_date`, `portfolio_desc`, `portfolio_image`) VALUES
('000', 'Mile Zero Project Training', 'Pelatihan lainnya', '2021-01-20', 'Mile Zero Project merupakan rangkaian acara yang menandai mile zero peradaban manusia dalam membangun tatanan budaya baru yang terpukul keras oleh Pandemi COVID-19. Dalam tatanan baru ini, umat manusia dipaksa untuk Go Digital di hampir setiap sektor', 'default.jpg'),
('001', 'Schematics 2019', 'Kepanitiaan', '2019-05-20', '             Schematics, acara tahunan helatan Departemen Informatika ITS, terdiri dari beberapa acara dan kompetisi tingkat nasional. Sub acara tersebut yakni National Programing Contest (NPC), National Logic Contest (NLC), National Seminar of Techn', '001.jpg'),
('002', 'AWS Academy Graduate - AWS Academy Cloud Architecting', 'Sertifikasi', '2021-06-11', ' Diluncurkan pada tahun 2006, Amazon Web Services (AWS) mulai mengekspos layanan infrastruktur utama untuk bisnis dalam bentuk layanan web -- sekarang dikenal luas sebagai komputasi awan. Manfaat utama komputasi awan, dan AWS. ', '002.png');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category`
--

CREATE TABLE `portfolio_category` (
  `portfolio_category_id` varchar(64) NOT NULL,
  `portfolio_category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_list`
--
ALTER TABLE `contact_list`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  ADD PRIMARY KEY (`portfolio_category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
