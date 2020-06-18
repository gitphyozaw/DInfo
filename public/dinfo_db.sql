-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-06-18 06:49:21
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `dinfo_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_menu`
--

CREATE TABLE `dtb_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `dtb_menu`
--

INSERT INTO `dtb_menu` (`id`, `name`, `image`, `status`, `created_date`) VALUES
(1, 'Pagodas', 'pagoda.jpg', 1, '2020-05-24 22:44:36'),
(2, 'Hotels', 'hotel.jpg', 1, '2020-05-24 23:58:09'),
(3, 'Mountains', 'mountain.jpg', 1, '2020-05-24 22:45:00'),
(4, 'Beaches', 'beache.jpg', 1, '2020-05-24 22:45:17'),
(5, 'Restaurants', 'restaurant.jpg', 1, '2020-05-24 22:45:29'),
(7, '345', 'download.jpg', 1, '2020-05-25 17:56:08');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_submenu`
--

CREATE TABLE `dtb_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `season` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `dtb_submenu`
--

INSERT INTO `dtb_submenu` (`id`, `menu_id`, `title`, `name`, `address`, `description`, `menu_type`, `season`, `status`, `created_date`, `updated_date`) VALUES
(1, 1, 'Shin Koe Shin Pagodas', 'Shin Pin Khayu Pagoda', 'Arzani Road,\r\nSouth Kayinpyin Ward,\r\nDawei City.', 'It was assumed that Shin Pin Khayu Pagoda located on Arzani Road in South Kayinpyin Ward of Dawei was built 300 years ago. Historian Saya Maung Than Swe (Dawei) reviewed that as Shin indicates the Lord Buddha, Shin Pin Khayu should be assumed as the pagoda built on the conch between two star-flower plants.\r\n\r\nA fire broke out almost the whole South Kayinpyin Ward of Dawei on 26 March 1996 but the pagoda remained safely. Hence, the pagoda became more famous.', 'Pagodas', NULL, 1, '2020-05-25 19:46:16', '2020-05-25 19:46:16'),
(4, 1, 'Shin Koe Shin Pagodas', 'Shin Mokhtee Pagoda', 'Dawei-Myeik motor road,\r\nShin Mok Htee Village,\r\nDawei City.', 'It was assumed that Shinmokhtee Village, six miles from Dawei, derived from Mottathunakhagara City. The pagoda in Shinmokhtee Village, located on the right side of Dawei-Myeik motor road, was enshrined with Shin Mokhtee Buddha image.\r\n\r\nShin Mokhtee Buddha image was one of four Buddha images set adrift by Arhat Ashin Maha Araham from Ceylon Island into the sea. A saying mentioned remaining three images were Shin Mokhtaw Pagoda in Pathein, Kyaikpawlaw Hmeshin Pagoda in Thaton and Kyaikkhami mid-stream Pagoda. The place where Shin Mokhtee image was salvaged was near the bank, west of the current pagoda. Hence, a statue of the nun who salvaged the image was kept at the site.\r\n\r\nTaninthayi Division Commissioner Mr. H.M. Stevenson received 300 earthen votive tablets near Shin Mokhtee Pagoda in 1924. Back of some tablets bore inscriptions in ancient Mon language. Among them, Samim Sritri Bovanaditya means Thiri Tri Buvanaditya Dhammaraja in Myanmar-Pali language, and it was the title of King Kyansittha from Bagan city-state.\r\n\r\nDawei was written as Htawar and Dawar in the Bagan era. Governor of Dawei Dhammaraz Thamban Anandazeya (Thanbyin Anandazeya) was the loyal servant to King Kyansittha. In 955 Myanmar Era, governor of Dawei Thuriyakomma and wife donated a bronze bell weighing 100 visses to Shin Mokhtee Pagoda.', 'Pagodas', NULL, 1, '2020-05-25 20:00:05', '2020-05-25 20:00:05'),
(17, 7, 'dg', 'ret6dgfv', NULL, NULL, '345', NULL, 1, '2020-05-28 23:26:51', '2020-05-28 23:26:51');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_submenu_image`
--

CREATE TABLE `dtb_submenu_image` (
  `id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `dtb_submenu_image`
--

INSERT INTO `dtb_submenu_image` (`id`, `submenu_id`, `image`, `type`) VALUES
(1, 17, 'about.jpg', 'jpg'),
(2, 17, 'apple-touch-icon.png', 'png'),
(3, 17, 'chefs-bg.jpg', 'jpg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `dtb_menu`
--
ALTER TABLE `dtb_menu`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `dtb_submenu`
--
ALTER TABLE `dtb_submenu`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `dtb_submenu_image`
--
ALTER TABLE `dtb_submenu_image`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `dtb_menu`
--
ALTER TABLE `dtb_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- テーブルのAUTO_INCREMENT `dtb_submenu`
--
ALTER TABLE `dtb_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- テーブルのAUTO_INCREMENT `dtb_submenu_image`
--
ALTER TABLE `dtb_submenu_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
