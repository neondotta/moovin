-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2017 às 04:56
-- Versão do servidor: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moovin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cart`
--

CREATE TABLE `cart` (
  `idCart` int(11) NOT NULL,
  `price_additional` varchar(45) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idCoupon` int(11) DEFAULT NULL,
  `idDelivery` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cart`
--

INSERT INTO `cart` (`idCart`, `price_additional`, `idUser`, `idCoupon`, `idDelivery`, `status`, `total`) VALUES
(14, '', 1, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`idCategory`, `name`) VALUES
(1, 'Sapato'),
(2, 'Casaco'),
(3, 'Camiseta'),
(4, 'Calça');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coupon`
--

CREATE TABLE `coupon` (
  `idCoupon` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `value` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `delivery`
--

CREATE TABLE `delivery` (
  `idDelivery` int(11) NOT NULL,
  `country` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `street` varchar(150) NOT NULL,
  `number` int(11) NOT NULL,
  `complement` varchar(150) DEFAULT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `picture`
--

CREATE TABLE `picture` (
  `idPicture` int(11) NOT NULL,
  `namePic` varchar(155) NOT NULL,
  `addressPic` varchar(255) NOT NULL,
  `hourPic` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `picture`
--

INSERT INTO `picture` (`idPicture`, `namePic`, `addressPic`, `hourPic`) VALUES
(1, 'Koala-1496648932.jpg', 'image/2017/06/', '2017-06-05 07:48:52'),
(2, 'Lighthouse-1496648932.jpg', 'image/2017/06/', '2017-06-05 07:48:52'),
(3, 'Koala-1496649502.jpg', 'image/2017/06/', '2017-06-05 07:58:22'),
(4, 'Lighthouse-1496649502.jpg', 'image/2017/06/', '2017-06-05 07:58:22'),
(5, 'Koala-1496649532.jpg', 'image/2017/06/', '2017-06-05 07:58:52'),
(6, 'Lighthouse-1496649532.jpg', 'image/2017/06/', '2017-06-05 07:58:52'),
(7, 'Penguins-1496650278.jpg', 'image/2017/06/', '2017-06-05 08:11:18'),
(8, 'Koala-1496650498.jpg', 'image/2017/06/', '2017-06-05 08:14:58'),
(9, 'Lighthouse-1496650498.jpg', 'image/2017/06/', '2017-06-05 08:14:58'),
(10, 'Koala-1496650499.jpg', 'image/2017/06/', '2017-06-05 08:14:59'),
(11, 'Lighthouse-1496650499.jpg', 'image/2017/06/', '2017-06-05 08:14:59'),
(12, 'Koala-1496650671.jpg', 'image/2017/06/', '2017-06-05 08:17:51'),
(13, 'Lighthouse-1496650672.jpg', 'image/2017/06/', '2017-06-05 08:17:52'),
(14, 'Koala-1496650672.jpg', 'image/2017/06/', '2017-06-05 08:17:52'),
(15, 'Lighthouse-1496650672.jpg', 'image/2017/06/', '2017-06-05 08:17:52'),
(16, 'Penguins-1496650806.jpg', 'image/2017/06/', '2017-06-05 08:20:06'),
(17, 'Tulips-1496650806.jpg', 'image/2017/06/', '2017-06-05 08:20:06'),
(18, 'Penguins-1496650822.jpg', 'image/2017/06/', '2017-06-05 08:20:22'),
(19, 'Tulips-1496650822.jpg', 'image/2017/06/', '2017-06-05 08:20:22'),
(20, 'Penguins-1496650842.jpg', 'image/2017/06/', '2017-06-05 08:20:42'),
(21, 'Tulips-1496650842.jpg', 'image/2017/06/', '2017-06-05 08:20:42'),
(22, 'Penguins-1496650853.jpg', 'image/2017/06/', '2017-06-05 08:20:53'),
(23, 'Tulips-1496650853.jpg', 'image/2017/06/', '2017-06-05 08:20:53'),
(24, 'Penguins-1496650853.jpg', 'image/2017/06/', '2017-06-05 08:20:53'),
(25, 'Tulips-1496650853.jpg', 'image/2017/06/', '2017-06-05 08:20:53'),
(26, 'Penguins-1496650887.jpg', 'image/2017/06/', '2017-06-05 08:21:27'),
(27, 'Tulips-1496650887.jpg', 'image/2017/06/', '2017-06-05 08:21:27'),
(28, 'Penguins-1496650887.jpg', 'image/2017/06/', '2017-06-05 08:21:27'),
(29, 'Tulips-1496650887.jpg', 'image/2017/06/', '2017-06-05 08:21:27'),
(30, 'Chrysanthemum-1496651048.jpg', 'image/2017/06/', '2017-06-05 08:24:08'),
(31, 'Chrysanthemum-1496651049.jpg', 'image/2017/06/', '2017-06-05 08:24:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `price` double NOT NULL,
  `height` double NOT NULL,
  `width` double NOT NULL,
  `length` varchar(45) NOT NULL,
  `value_promotion` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `quantity` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`idProduct`, `name`, `description`, `price`, `height`, `width`, `length`, `value_promotion`, `active`, `quantity`, `idCategory`) VALUES
(1, 'Jeans', 'Calça jeans maneira', 399, 160, 40, '35', 0, 1, 150, 1),
(2, 'camisa', 'camisaaaa', 49, 50, 35, '40', 0, 0, 100, 3),
(3, 'teste', 'testestasra', 140, 130, 130, '130', 20, 1, 120, 2),
(4, 'hu', 'oihoih', 33, 33, 33, '33', 33, 1, 33, 1),
(5, '33', '33', 33, 33, 33, '33', 333, 1, 33, 1),
(6, '22', '22', 22, 22, 222, '22', 22, 1, 22, 1),
(7, '22', '22', 22, 22, 222, '22', 22, 1, 22, 1),
(8, '33', '33', 3, 3, 3, '3', 3, 1, 3, 1),
(9, '33', '33', 3, 3, 3, '3', 3, 1, 3, 1),
(10, '22', '22', 22, 222, 22, '22', 22, 1, 22, 1),
(11, '22', '22', 22, 222, 22, '22', 22, 1, 22, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_cart`
--

CREATE TABLE `product_cart` (
  `idProduct_cart` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `idCart` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_insert` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `product_cart`
--

INSERT INTO `product_cart` (`idProduct_cart`, `idProduct`, `idCart`, `quantity`, `date_insert`) VALUES
(11, 3, 14, 1, '2017-06-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_picture`
--

CREATE TABLE `product_picture` (
  `idProduct` int(11) NOT NULL,
  `idPicture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_year` date DEFAULT NULL,
  `level` int(11) NOT NULL,
  `idPicture` int(11) DEFAULT NULL,
  `lastOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`idUser`, `name`, `email`, `password`, `date_year`, `level`, `idPicture`, `lastOrder`) VALUES
(1, 'Neon', 'neondotta@gmail.com', '123', NULL, 3, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`),
  ADD KEY `fk_kart_user1_idx` (`idUser`),
  ADD KEY `fk_cart_coupon1_idx` (`idCoupon`),
  ADD KEY `fk_cart_delivery1_idx` (`idDelivery`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`idCoupon`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`idDelivery`),
  ADD KEY `fk_delivery_user1_idx` (`idUser`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`idPicture`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`idProduct_cart`,`idProduct`,`idCart`),
  ADD KEY `fk_product_has_cart_kart1_idx` (`idCart`),
  ADD KEY `fk_product_has_cart_product1_idx` (`idProduct`);

--
-- Indexes for table `product_picture`
--
ALTER TABLE `product_picture`
  ADD PRIMARY KEY (`idProduct`,`idPicture`),
  ADD KEY `fk_product_has_picture_picture1_idx` (`idPicture`),
  ADD KEY `fk_product_has_picture_product1_idx` (`idProduct`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `fk_user_picture_idx` (`idPicture`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `idCoupon` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `idDelivery` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `idPicture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `idProduct_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_coupon1` FOREIGN KEY (`idCoupon`) REFERENCES `coupon` (`idCoupon`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cart_delivery1` FOREIGN KEY (`idDelivery`) REFERENCES `delivery` (`idDelivery`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cart_user1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `fk_delivery_user1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `product_cart`
--
ALTER TABLE `product_cart`
  ADD CONSTRAINT `fk_product_has_cart_kart1` FOREIGN KEY (`idCart`) REFERENCES `cart` (`idCart`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_has_cart_product1` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `product_picture`
--
ALTER TABLE `product_picture`
  ADD CONSTRAINT `fk_product_has_picture_picture1` FOREIGN KEY (`idPicture`) REFERENCES `picture` (`idPicture`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_has_picture_product1` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_picture` FOREIGN KEY (`idPicture`) REFERENCES `picture` (`idPicture`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
