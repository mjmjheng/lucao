-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 05:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucao`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

--須將此資料表匯入至127.0.0.1/phpmyadmin/，使可將線上商店的訂購資料存取於此。

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `good_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '50',
  `number` int(11) NOT NULL,
  `customer` varchar(5) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `good_id`, `price`, `number`, `customer`, `phone`, `address`) VALUES
(1, '4', '50', 3, '林阿鉦', '0911111531', '台中市豐原區圓環北路二段409號'),
(2, '6', '50', 2, '林阿鉦', '0911111531', '台中市豐原區圓環北路二段409號'),
(3, '7', '50', 2, '吳小毅', '0922222429', '新竹縣竹北市莊敬北路200號'),
(4, '1', '50', 2, '葉阿宏', '0933333519', '新北市板橋區縣民大道一段286號'),
(5, '6', '50', 2, '林大宇', '0933555621', '高雄市左營區自由三路244號'),
(6, '3', '50', 2, '黃小晴', '0977000704', '高雄市仁武區文館路53號');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
