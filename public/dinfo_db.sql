-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-06-19 10:04:21
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
(1, 1, 'Shin Koe Shin Pagodas', 'Shin Pin Khayu Pagoda', 'Arzani Road,\r\nSouth Kayinpyin Ward,\r\nDawei City.', 'It was assumed that Shin Pin Khayu Pagoda located on Arzani Road in South Kayinpyin Ward of Dawei was built 300 years ago. Historian Saya Maung Than Swe (Dawei) reviewed that as Shin indicates the Lord Buddha, Shin Pin Khayu should be assumed as the pagoda built on the conch between two star-flower plants.\r\n\r\nA fire broke out almost the whole South Kayinpyin Ward of Dawei on 26 March 1996 but the pagoda remained safely. Hence, the pagoda became more famous.', 'Pagodas', 'all', 1, '2020-06-18 16:16:46', '2020-06-18 16:21:55'),
(2, 1, 'Shin Koe Shin Pagodas', 'Shin Mokhtee Pagoda', 'Dawei-Myeik motor road,\r\n Shinmokhtee Village,\r\nDawei City.', 'It was assumed that Shinmokhtee Village, six miles from Dawei, derived from Mottathunakhagara City. The pagoda in Shinmokhtee Village, located on the right side of Dawei-Myeik motor road, was enshrined with Shin Mokhtee Buddha image.\r\n\r\nShin Mokhtee Buddha image was one of four Buddha images set adrift by Arhat Ashin Maha Araham from Ceylon Island into the sea. A saying mentioned remaining three images were Shin Mokhtaw Pagoda in Pathein, Kyaikpawlaw Hmeshin Pagoda in Thaton and Kyaikkhami mid-stream Pagoda. The place where Shin Mokhtee image was salvaged was near the bank, west of the current pagoda. Hence, a statue of the nun who salvaged the image was kept at the site.\r\n\r\nTaninthayi Division Commissioner Mr. H.M. Stevenson received 300 earthen votive tablets near Shin Mokhtee Pagoda in 1924. Back of some tablets bore inscriptions in ancient Mon language. Among them, Samim Sritri Bovanaditya means Thiri Tri Buvanaditya Dhammaraja in Myanmar-Pali language, and it was the title of King Kyansittha from Bagan city-state.\r\n\r\nDawei was written as Htawar and Dawar in the Bagan era. Governor of Dawei Dhammaraz Thamban Anandazeya (Thanbyin Anandazeya) was the loyal servant to King Kyansittha. In 955 Myanmar Era, governor of Dawei Thuriyakomma and wife donated a bronze bell weighing 100 visses to Shin Mokhtee Pagoda.', 'Pagodas', 'all', 1, '2020-06-18 16:27:10', '2020-06-18 16:27:10'),
(3, 1, 'Shin Koe Shin Pagodas', 'Shin Taunt Pon Pagoda', 'Dawei-Myeik motor road,\r\nThayetchaung Township,\r\nDawei City.', 'Shin Taunt Pon Pagoda built on more than 2,000 feet high hill, 18 miles from Dawei, in Thayetchaung Township. Taunt Pon means quiver or a pile of quivers. Hunter Maung Nwar abandoned his hunting livelihood and set fire to hunting equipment on the hill of Shin Taunt Pon Pagoda. Then, he was initiated into a hermit with the title of Shin Govinda who built Shin Taunt Pon Pagoda. Although some said Shin Taunt Pon Pagoda was off work in the Pyu era or early Bagan era, not firm evidence has been found yet.', 'Pagodas', 'all', 1, '2020-06-18 16:32:06', '2020-06-18 16:32:50'),
(4, 1, 'Shin Koe Shin Pagodas', 'Shin Hmyaw Taung Pagoda', 'Kyethlut Village,\r\nLaunglon Township,\r\nDawei City', 'It is a hilly pagoda in Launglon Township, located in Kyethlut Village, 52 miles from Dawei. According to the history of pagodas, Shin Hmyaw Taung Pagoda was built on the full moon day of Tabaung, 238 ME; and Bagan kings Alaungsithu and Narapatisithu performed meritorious deeds there.\r\n\r\nAt the time of rising tide, the water surface near the rock on which the small pagoda was built becomes the shape of the saucepan which does not cover the pagoda.\r\n\r\nSome said that a small pond at North Oksin Camp, downstream of Shin Hmyaw Taung, is flown by tidal water but it remains unchanged as freshwater lake whenever tide subsides. The historical books of the pagoda mentioned six wonderful points of Shin Hmyaw Taung Pagoda.', 'Pagodas', 'all', 1, '2020-06-18 16:38:07', '2020-06-18 16:38:07'),
(5, 1, 'Shin Koe Shin Pagodas', 'Shin Tauk Htein Pagoda', 'Kamyawkin Village,\r\nLaunglon Township,\r\nDawei City', 'Although some said Shin Tauk Htein Pagoda located in Kamyawkin Village of Launglon Township in Dawei District was one of nine Shin pagodas, the original Shin Tauk Htein Pagoda was the Buddha image kept in the ordination hall, east of the pagoda. People called Shin Tauk Htein Pagoda as a relic pagoda where the gala rice offering ceremony takes place on every full moon day of Thadingyut.', 'Pagodas', 'all', 1, '2020-06-18 16:42:25', '2020-06-18 16:42:25'),
(6, 1, 'Shin Koe Shin Pagodas', 'Shin Okaw Pagoda', 'Shwekyaunggyi Monastery,\r\nPeinnetaw Ward,\r\nDawei City', 'Shin Okaw Pagoda, located in the precinct of Shwekyaunggyi Monastery in Peinnetaw Ward of Dawei was built with significant architectural works including 11 circular decorative bands. King of Shwetaungsar Min Shin Zaw built Shwekyaunggyi Monastery in Peinnetaw Ward in 1122 ME and then came onto the throne. He built Shin Okaw Pagoda as NanU Pagoda in the same year. King Min Shin Zaw built Shwe Taung Sar Pagoda two years after the construction of Shin Okaw Pagoda.\r\n\r\nIn 1165 ME, the bell in the Konbaung era donated by the governor of Dawei Razathingyan and wife to Shin Okaw Pagoda mentioned 13 lines of bell inscriptions. Razathingyan as the loyal servant of King Badon who first established the First Amarapura City. The eighth line of the inscription mentioned Dawei was named Thayawady. That was why Dawei was called Thayawady in the Konbaung era.', 'Pagodas', 'all', 1, '2020-06-18 16:46:14', '2020-06-18 16:46:14'),
(7, 1, 'Shin Koe Shin Pagodas', 'Shin Zalun Pagoda', 'Thagara old city,\r\nLaunglon Township,\r\nDawei City', 'Emblems of Srivaccha were expressed on concrete floral works created around the upper part of the bell at Shin Zalun Pagoda, located in old Thagara city in Launglon Township. Hence, some assumed Shin Zalun Pagoda was built in the contemporary of the Pyu era. The Department of Archaeology and National Museum is taking responsibility for the preservation of the old Thagara city, inner and outer walls, moat and Pyu graveyard (urn mound).\r\n\r\nHermit Shin Govinda (hunter Maung Nwar) who built Shin Taunt Pon Pagoda adopted two children found on the road. He named Shin Zaw for the baby girl and Shin Zan for the baby boy. An Arhat who arrived there gave a sacred relic of the Lord Buddha to Shin Zan and a duplicated one to Shin Zaw.\r\n\r\nShin Zaw enshrined the duplicated relic into Shin Zalun Pagoda in 170 eras while Shin Zan built Shin Datwe Pagoda with the enshrinement of a genuine relic. Some assumed that only when women participate in hoisting the umbrella atop the pagoda built by Shin Zalun, will the process have achievement because Shin Zalun Pagoda was built by a woman.', 'Pagodas', 'all', 1, '2020-06-18 16:52:47', '2020-06-18 16:52:47'),
(8, 1, 'Shin Koe Shin Pagodas', 'Shin Datwe Pagoda', 'Maungmeishaung Village,\r\nDawei-Yangon motor road,\r\nDawei City', 'Shin Datwe Pagoda built by Shin Zan is located in Maungmeishaung Village, seven miles from Dawei-Yebyu motor road. As local people said as Shin Zan threw his relic into the air with a vow to build a pagoda, the relic was flying above the place of the current pagoda. So, it was well known as Shin Datwe Pagoda. A 15 feet high sitting Buddha image made of marble rock can be seen near Shin Datwe Pagoda.', 'Pagodas', 'all', 1, '2020-06-18 16:54:42', '2020-06-18 16:56:13'),
(9, 1, 'Shin Koe Shin Pagodas', 'Shin Hsandaw Pagoda', 'Kaleinaung Village,\r\n Yebyu Township, \r\nDawei City', 'Shin Hsandaw Pagoda, famous as Hsandawshin Hsutaungpyae Pagoda on Kalein Hill, was built on Kaleinaung Hill in Yebyu Township. The hill is 47 miles north of Dawei.\r\n\r\nThree pieces of relic hair of Kakusanda, Konagamana and Gotama Buddhas who had enlightened in Badda World were enshrined in the rocky reliquary which is 30 by 30 elbows each in length and width and 40 elbows in depth. A 15 elbows high Shin Hsandaw Pagoda was built on the reliquary. The Buddha Pujaniya festival of the pagoda takes place on the full moon day of Tabaung yearly.\r\n\r\nNine pagodas under titles of Shin, which are famous across Myanmar, do not have firmly historical evidence but they are crowded with Buddhist travelers.', 'Pagodas', 'all', 1, '2020-06-18 16:58:58', '2020-06-18 16:58:58');

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
(1, 1, 'Shin-Pin-Kha-Yu.jpg', 'logo'),
(2, 2, 'Shin-Mokhtee-Pagoda(logo).jpg', 'logo'),
(3, 2, 'Shin-Mokhtee-Pagoda1.jpg', 'jpg'),
(4, 2, 'Shin-Mokhtee-Pagoda2.jpg', 'jpg'),
(5, 2, 'Shin-Mokhtee-Pagoda3.jpg', 'jpg'),
(6, 3, 'Shin-Taunt-Pon-Pagoda(logo).jpg', 'logo'),
(7, 3, 'Shin-Taunt-Pon-Pagoda1.jpg', 'jpg'),
(8, 3, 'Shin-Taunt-Pon-Pagoda2.jpg', 'jpg'),
(9, 3, 'Shin-Taunt-Pon-Pagoda3.jpg', 'jpg'),
(10, 4, 'Shin-Maw-Pagoda(logo).jpg', 'logo'),
(11, 4, 'Shin-Maw-Pagoda1.jpg', 'jpg'),
(12, 4, 'Shin-Maw-Pagoda2.jpg', 'jpg'),
(13, 5, 'Shin-Tauk-Htein-Pagoda(logo).jpg', 'logo'),
(14, 5, 'Shin-Tauk-Htein-Pagoda1.jpg', 'jpg'),
(15, 5, 'Shin-Tauk-Htein-Pagoda2.jpg', 'jpg'),
(16, 6, 'Shin-Okaw-Pagoda(logo).jpg', 'logo'),
(17, 6, 'Shin-Okaw-Pagoda1.jpg', 'jpg'),
(18, 7, 'Shin-Zalun-Pagoda(logo).jpg', 'logo'),
(19, 7, 'Shin-Zalun-Pagoda1.jpg', 'jpg'),
(20, 8, 'Shin-Datwe-Pagoda(logo).jpg', 'jpg'),
(21, 8, 'Shin-Datwe-Pagoda1.jpg', 'jpg'),
(22, 9, 'Shin-Hsandaw-Pagoda(logo).jpg', 'logo'),
(23, 9, 'Shin-Hsandaw-Pagoda1.jpg', 'jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルのAUTO_INCREMENT `dtb_submenu_image`
--
ALTER TABLE `dtb_submenu_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
