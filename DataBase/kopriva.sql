-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 04:37 PM
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
-- Database: `kopriva`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `ID_BASKET` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_PRODUCT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID_CATEGORY` int(11) NOT NULL,
  `category_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_CATEGORY`, `category_name`) VALUES
(1, 'Drvo'),
(2, 'Meso'),
(3, 'Mlečni proizvodi'),
(4, 'Piće'),
(5, 'Povrće'),
(6, 'Domaći proizvodi'),
(19, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID_PRODUCT` int(11) NOT NULL,
  `NAME_PRODUCT` text COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPTION` text COLLATE utf8_unicode_ci NOT NULL,
  `PRICE` decimal(10,0) NOT NULL,
  `img_product` text COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_PRODUCT`, `NAME_PRODUCT`, `DESCRIPTION`, `PRICE`, `img_product`, `category`, `status`) VALUES
(1, 'Ajvar', 'Leskovački ajvar, pravljen po staroj recepturi od sveže ubranih paprika iz naše bašte.Ajvar se tradicionalno pravi na jesen, kada je puna sezona paprike.', '1000', 'products/ajvar.jpg', 6, 1),
(2, 'Ćumur', 'Najbolji ćumur se pravi od bukovog drveta ili nekog drveta sličnog kvaliteta. Sezona pravljenja ćumura u ćumuranama traje od ranog proleća do kasne jeseni.', '900', 'products/cumur.jpg', 1, 1),
(3, 'Drva za ogrev', 'Naše domaćinstvo pored hrane i pića nudi takođe ogrev za drva. Na svako posečeno stablo zasade se 10 nova. Čuvajmo prirodu!', '10000', 'products/drva.jpg', 1, 1),
(4, 'Džem od šljiva', 'Domaći džem od šljiva, pravljen po staroj recepturi od sveže ubranih šljiva iz našeg voćnjaka.', '700', 'products/dzem.jpg', 6, 1),
(5, 'Domaća jaja', 'Naše kokoške nikada nisu okusile ukus koncentrata ili bilo kakvih prehrana za životinje. Uvek sveža, uvek najbolja!', '18', 'products/jaja.jpg', 6, 1),
(6, 'Kiselo mleko', 'Kravlje kiselo mleko koje se proizvodi na obroncima planine Kukavice. Sadrži 3,2% mlečne masti. Proizvedeno po tradicionalnoj recepturi.', '450', 'products/kiselo_mleko.jpg', 3, 1),
(7, 'Kopriva sok', 'Sok od koprive koji se proizvodi u našem domaćinstvu i nosi naziv našeg sela. Prepun vitamina i minerala koji se nalaze u ovoj neverovatnoj biljci!', '400', 'products/kopriva.jpg', 4, 1),
(8, 'Krompir', 'Кrompir je vrsta biljaka skrivenosemenica iz porodice pomoćnica. Uzgaja se širom planete i koristi za ishranu ljudi.', '100', 'products/krompir.jpg', 5, 1),
(9, 'Crni luk', 'Kao i sve ostalo iz naše bašte, sveže i prirodno, crni luk iz našeg domaćinstva je daleko hranljiviji i ukusniji zbog visoke nadmorske visine!', '50', 'products/luk.jpg', 5, 1),
(10, 'Med', 'Livadski ili cvetni med spada u najkvalitetnije medove, iz razloga što u njegovom pravljenju pčele posećuju veliki broj livadskih biljaka i drugih cvetnica.', '1000', 'products/med.jpg', 6, 1),
(11, 'Dimnjeno meso', 'Još jedna uvek popularna klasika od mesa koju obožavaju svi mesni gurmani i koja je izvrstan izbor za pripremu pasulja i brojnih drugih jela „na kašiku“.', '1200', 'products/meso.jpg', 2, 1),
(12, 'Mleko', 'Svakog dana od svežeg domaćeg mleka u našoj mlekari nastaju prava mala čuda. U stare domaće recepte naših baka dodali smo mnogo ljubavi i posvećenosti...', '100', 'products/mleko.jpg', 3, 1),
(13, 'Šljivovica', 'Svetlo ćilibrirana boja rakije od šljive u čaši ukazuje na plemeniti uticaj hrastovog bureta.', '900', 'products/rakija_sljiva.jpg', 4, 1),
(14, 'Dunja', 'Jedan od lepših mirisa s jeseni koji se širi Srbijom je miris dunja! A dunje su večita inspiracija pesnicima za stihove, muzičarima za pesme, domaćicama za slatko..', '1200', 'products/rakija_dunja.jpg', 4, 1),
(15, 'Domaći sir', 'Sir i kajmak od davnina spadaju u red najvrednijih namirnica, pa je logično što su toliko česti i popularni u srpskoj ishrani.', '700', 'products/sir.jpg', 3, 1),
(16, 'Sok od višanja', 'Sok od višanja tokom vrelih dana može da bude najbolje moguće osveženje. Nekoga podseća na bakinu kuhinju.', '400', 'products/visnja.jpg', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `USER_NAME` text COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` text COLLATE utf8_unicode_ci NOT NULL,
  `NAME` text COLLATE utf8_unicode_ci NOT NULL,
  `LAST_NAME` text COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` text COLLATE utf8_unicode_ci NOT NULL,
  `STATUS` enum('Admin','Korisnik') COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `PHONE_NUMBER` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `USER_NAME`, `PASSWORD`, `NAME`, `LAST_NAME`, `EMAIL`, `STATUS`, `created`, `PHONE_NUMBER`, `adress`) VALUES
(6, 'admin', '$2y$10$Fpbi.avZt19NGhGUI2Txc.oqX6.W2E1bnwWID3TemMJJR4cGopwaK', 'Novak', 'Djokovic', 'pera@gmail.com', 'Admin', '2022-10-28 21:10:07', '+38161456273', 'Beograd 54'),
(27, 'korisnik', '$2y$10$pboy9tWd7OZ4zwb5gSeNlO1FdI1ouSIJ7hzq2KF7vDGqs3T7G7eQq', 'Perica', 'Peric', 'perica@gmail.com', 'Korisnik', '2022-11-22 17:50:38', '0611234124', 'Beogradska123'),
(28, 'pera123', '$2y$10$3d0LR.P7jKJIirijcxlcUu.EdWvnUP87EeaJFybGFugD1Ng4gYFwW', 'Janko', 'Jankovic', 'janko@gmail.com', 'Korisnik', '2022-11-22 17:54:04', '0643256543', 'Novosadska 12'),
(30, 'Nine', '$2y$10$9W/.GtEdtZqcWys67yquJu.GlIsmpbW4hdBhbJfovwxmlKmqI5vtC', 'Nikola', 'Stevanovic', 'nsnsnsn@gmail.com', 'Korisnik', '2022-12-16 16:08:07', '0655555555', 'nikolanikola@gmail.com'),
(31, 'test123', '$2y$10$H7q3HiIHDZ.GQHGVqyAgne5aSKZ2EdjVZkBXLOXaBC7Am1RArVDnS', 'Perica', 'Peric', 'perica123@gmail.com', 'Korisnik', '2022-12-20 10:05:15', '0621111333', 'Beograd, Srbija');

-- --------------------------------------------------------

--
-- Table structure for table `user_product`
--

CREATE TABLE `user_product` (
  `ID_USER` int(11) NOT NULL,
  `ID_PRODUCT` int(11) NOT NULL,
  `DATE_ORDER__PLACED` datetime DEFAULT current_timestamp(),
  `AMOUNT` decimal(10,0) DEFAULT NULL,
  `order_status` int(11) DEFAULT 0,
  `order_pay` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_product`
--

INSERT INTO `user_product` (`ID_USER`, `ID_PRODUCT`, `DATE_ORDER__PLACED`, `AMOUNT`, `order_status`, `order_pay`) VALUES
(7, 1, '2022-11-08 17:07:35', '1', 0, 0),
(7, 2, '2022-11-08 17:07:35', '1', 0, 0),
(7, 3, '2022-11-08 17:07:35', '1', 0, 0),
(7, 7, '2022-11-08 18:22:16', '4', 0, 0),
(7, 8, '2022-11-08 18:22:16', '4', 0, 0),
(7, 5, '2022-11-08 18:22:16', '10', 0, 0),
(7, 7, '2022-11-08 19:07:58', '6', 0, 0),
(7, 8, '2022-11-08 19:07:58', '4', 0, 0),
(7, 10, '2022-11-08 19:38:39', '5', 0, 0),
(7, 12, '2022-11-08 19:38:39', '3', 0, 0),
(7, 9, '2022-11-08 19:38:39', '4', 0, 0),
(23, 1, '2022-11-09 12:19:19', '2', 0, 0),
(23, 6, '2022-11-09 12:19:19', '4', 0, 0),
(23, 1, '2022-11-09 12:23:35', '10', 0, 0),
(24, 1, '2022-11-11 23:05:23', '2', 0, 0),
(24, 4, '2022-11-11 23:05:23', '4', 0, 0),
(24, 7, '2022-11-11 23:05:23', '5', 0, 0),
(24, 14, '2022-11-16 12:05:57', '1', 0, 0),
(27, 1, '2022-11-22 17:51:04', '6', 1, 1),
(27, 2, '2022-11-22 17:51:04', '1', 1, 1),
(27, 3, '2022-11-22 17:51:04', '4', 1, 1),
(27, 4, '2022-11-22 17:51:04', '2', 1, 1),
(27, 11, '2022-11-22 17:52:08', '1', 1, 1),
(27, 12, '2022-11-22 17:52:08', '1', 1, 1),
(27, 10, '2022-11-22 17:52:08', '7', 1, 1),
(28, 2, '2022-11-22 17:54:36', '1', 1, 1),
(28, 3, '2022-11-22 17:54:36', '3', 1, 1),
(28, 15, '2022-11-22 17:54:36', '2', 1, 1),
(28, 13, '2022-11-22 17:54:36', '1', 1, 1),
(28, 14, '2022-11-22 17:54:36', '5', 1, 1),
(28, 4, '2022-11-22 17:54:36', '5', 1, 1),
(29, 15, '2022-11-23 16:51:25', '4', 1, 1),
(29, 12, '2022-11-23 16:51:25', '8', 1, 1),
(28, 7, '2022-11-24 21:59:33', '10', 1, 1),
(28, 8, '2022-11-24 21:59:33', '3', 1, 1),
(28, 4, '2022-11-24 21:59:33', '1', 1, 1),
(6, 1, '2022-12-14 19:11:59', '1', 0, 0),
(6, 2, '2022-12-14 19:11:59', '1', 0, 0),
(6, 3, '2022-12-14 19:11:59', '1', 0, 0),
(31, 2, '2022-12-20 10:06:48', '2', 0, 1),
(31, 15, '2022-12-20 10:06:48', '3', 0, 1),
(31, 6, '2022-12-20 10:06:48', '2', 0, 1),
(31, 3, '2022-12-20 10:06:48', '1', 0, 1);

--
-- Triggers `user_product`
--
DELIMITER $$
CREATE TRIGGER `trig_basket` AFTER INSERT ON `user_product` FOR EACH ROW DELETE FROM basket WHERE ID_USER = new.id_user
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwcategoryproduct`
-- (See below for the actual view)
--
CREATE TABLE `vwcategoryproduct` (
`id_product` int(11)
,`name_product` text
,`description` text
,`price` decimal(10,0)
,`img_product` text
,`category` int(11)
,`status` tinyint(4)
,`id_category` int(11)
,`category_name` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwforpay`
-- (See below for the actual view)
--
CREATE TABLE `vwforpay` (
`ID_USER` int(11)
,`ID_PRODUCT` int(11)
,`category_name` text
,`AMOUNT` decimal(10,0)
,`PRICE` decimal(10,0)
,`NAME_PRODUCT` text
,`DATE_ORDER__PLACED` datetime
,`NAME` text
,`LAST_NAME` text
,`PHONE_NUMBER` text
,`adress` text
,`cenaPosebno` decimal(20,0)
,`order_status` int(11)
,`order_pay` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwordres`
-- (See below for the actual view)
--
CREATE TABLE `vwordres` (
`ID_USER` int(11)
,`ID_PRODUCT` int(11)
,`NAME_PRODUCT` text
,`PRICE` decimal(10,0)
,`category_name` text
);

-- --------------------------------------------------------

--
-- Structure for view `vwcategoryproduct`
--
DROP TABLE IF EXISTS `vwcategoryproduct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwcategoryproduct`  AS SELECT `product`.`ID_PRODUCT` AS `id_product`, `product`.`NAME_PRODUCT` AS `name_product`, `product`.`DESCRIPTION` AS `description`, `product`.`PRICE` AS `price`, `product`.`img_product` AS `img_product`, `product`.`category` AS `category`, `product`.`status` AS `status`, `category`.`ID_CATEGORY` AS `id_category`, `category`.`category_name` AS `category_name` FROM (`product` join `category` on(`product`.`category` = `category`.`ID_CATEGORY`))  ;

-- --------------------------------------------------------

--
-- Structure for view `vwforpay`
--
DROP TABLE IF EXISTS `vwforpay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwforpay`  AS SELECT `user`.`ID_USER` AS `ID_USER`, `product`.`ID_PRODUCT` AS `ID_PRODUCT`, `category`.`category_name` AS `category_name`, `user_product`.`AMOUNT` AS `AMOUNT`, `product`.`PRICE` AS `PRICE`, `product`.`NAME_PRODUCT` AS `NAME_PRODUCT`, `user_product`.`DATE_ORDER__PLACED` AS `DATE_ORDER__PLACED`, `user`.`NAME` AS `NAME`, `user`.`LAST_NAME` AS `LAST_NAME`, `user`.`PHONE_NUMBER` AS `PHONE_NUMBER`, `user`.`adress` AS `adress`, `user_product`.`AMOUNT`* `product`.`PRICE` AS `cenaPosebno`, `user_product`.`order_status` AS `order_status`, `user_product`.`order_pay` AS `order_pay` FROM (((`user` join `product`) join `user_product`) join `category`) WHERE `user`.`ID_USER` = `user_product`.`ID_USER` AND `product`.`category` = `category`.`ID_CATEGORY` AND `user_product`.`ID_PRODUCT` = `product`.`ID_PRODUCT``ID_PRODUCT`  ;

-- --------------------------------------------------------

--
-- Structure for view `vwordres`
--
DROP TABLE IF EXISTS `vwordres`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwordres`  AS SELECT `user`.`ID_USER` AS `ID_USER`, `product`.`ID_PRODUCT` AS `ID_PRODUCT`, `product`.`NAME_PRODUCT` AS `NAME_PRODUCT`, `product`.`PRICE` AS `PRICE`, `category`.`category_name` AS `category_name` FROM (((`basket` join `user`) join `product`) join `category`) WHERE `basket`.`ID_USER` = `user`.`ID_USER` AND `basket`.`ID_PRODUCT` = `product`.`ID_PRODUCT` AND `product`.`category` = `category`.`ID_CATEGORY``ID_CATEGORY`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`ID_BASKET`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_CATEGORY`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_PRODUCT`),
  ADD UNIQUE KEY `PRODUCT_PK` (`ID_PRODUCT`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `USER_PK` (`ID_USER`),
  ADD UNIQUE KEY `USER_NAME` (`USER_NAME`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `ID_BASKET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID_CATEGORY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID_PRODUCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
