-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 25, 2023 at 04:26 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakersDozen`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdCart`
--

CREATE TABLE `bdCart` (
  `cartID` int(11) NOT NULL,
  `productId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bdCategory`
--

CREATE TABLE `bdCategory` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bdCity`
--

CREATE TABLE `bdCity` (
  `cityId` int(11) NOT NULL,
  `cityName` varchar(250) NOT NULL,
  `nationalityId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bdComments`
--

CREATE TABLE `bdComments` (
  `commentId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `commValue` varchar(255) DEFAULT NULL,
  `commDate` date DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bdComments`
--

INSERT INTO `bdComments` (`commentId`, `productId`, `commValue`, `commDate`, `name`, `message`) VALUES
(1, 1, NULL, NULL, 'Kaia', 'testt'),
(2, 1, NULL, NULL, 'Kaia', 'testt'),
(3, 1, NULL, NULL, 'Kaia', 'testt'),
(4, 1, NULL, NULL, 'fran', 'hello'),
(5, 1, NULL, NULL, 'fran', 'hello'),
(6, 1, NULL, NULL, 'juan', 'we did it :)))'),
(7, 1, NULL, NULL, 'test', 'test'),
(8, 1, NULL, NULL, 'test', 'test'),
(9, 1, NULL, NULL, 'new test', 'jsdfn'),
(10, 1, NULL, NULL, 'michael', 'im new'),
(11, 1, NULL, NULL, 'michael', 'im new'),
(12, 1, NULL, NULL, 'michael', 'im new'),
(13, 1, NULL, NULL, '', ''),
(19, 1, NULL, NULL, '', 'blank name');

-- --------------------------------------------------------

--
-- Table structure for table `bdNationality`
--

CREATE TABLE `bdNationality` (
  `nationalityId` int(11) NOT NULL,
  `nationality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bdNationality`
--

INSERT INTO `bdNationality` (`nationalityId`, `nationality`) VALUES
(1, 'Afghan'),
(2, 'Albanian'),
(3, 'Algerian'),
(4, 'American'),
(5, 'Andorran'),
(6, 'Angolan'),
(7, 'Antiguans'),
(8, 'Argentinean'),
(9, 'Armenian'),
(10, 'Australian'),
(11, 'Austrian'),
(12, 'Azerbaijani'),
(13, 'Bahamian'),
(14, 'Bahraini'),
(15, 'Bangladeshi'),
(16, 'Barbadian'),
(17, 'Barbudans'),
(18, 'Batswana'),
(19, 'Belarusian'),
(20, 'Belgian'),
(21, 'Belizean'),
(22, 'Beninese'),
(23, 'Bhutanese'),
(24, 'Bolivian'),
(25, 'Bosnian'),
(26, 'Brazilian'),
(27, 'British'),
(28, 'Bruneian'),
(29, 'Bulgarian'),
(30, 'Burkinabe'),
(31, 'Burmese'),
(32, 'Burundian'),
(33, 'Cambodian'),
(34, 'Cameroonian'),
(35, 'Canadian'),
(36, 'Cape Verdean'),
(37, 'Central African'),
(38, 'Chadian'),
(39, 'Chilean'),
(40, 'Chinese'),
(41, 'Colombian'),
(42, 'Comoran'),
(43, 'Congolese'),
(44, 'Congolese'),
(45, 'Costa Rican'),
(46, 'Croatian'),
(47, 'Cuban'),
(48, 'Cypriot'),
(49, 'Czech'),
(50, 'Danish'),
(51, 'Djibouti'),
(52, 'Dominican'),
(53, 'Dominican'),
(54, 'Dutch'),
(55, 'Dutchman'),
(56, 'Dutchwoman'),
(57, 'East Timorese'),
(58, 'Ecuadorean'),
(59, 'Egyptian'),
(60, 'Emirian'),
(61, 'Equatorial Guinean'),
(62, 'Eritrean'),
(63, 'Estonian'),
(64, 'Ethiopian'),
(65, 'Fijian'),
(66, 'Filipino'),
(67, 'Finnish'),
(68, 'French'),
(69, 'Gabonese'),
(70, 'Gambian'),
(71, 'Georgian'),
(72, 'German'),
(73, 'Ghanaian'),
(74, 'Greek'),
(75, 'Grenadian'),
(76, 'Guatemalan'),
(77, 'Guinea-Bissauan'),
(78, 'Guinean'),
(79, 'Guyanese'),
(80, 'Haitian'),
(81, 'Herzegovinian'),
(82, 'Honduran'),
(83, 'Hungarian'),
(84, 'I-Kiribati'),
(85, 'Icelander'),
(86, 'Indian'),
(87, 'Indonesian'),
(88, 'Iranian'),
(89, 'Iraqi'),
(90, 'Irish'),
(91, 'Irish'),
(92, 'Israeli'),
(93, 'Italian'),
(94, 'Ivorian'),
(95, 'Jamaican'),
(96, 'Japanese'),
(97, 'Jordanian'),
(98, 'Kazakhstani'),
(99, 'Kenyan'),
(100, 'Kittian and Nevisian'),
(101, 'Kuwaiti'),
(102, 'Kyrgyz'),
(103, 'Laotian'),
(104, 'Latvian'),
(105, 'Lebanese'),
(106, 'Liberian'),
(107, 'Libyan'),
(108, 'Liechtensteiner'),
(109, 'Lithuanian'),
(110, 'Luxembourger'),
(111, 'Macedonian'),
(112, 'Malagasy'),
(113, 'Malawian'),
(114, 'Malaysian'),
(115, 'Maldivan'),
(116, 'Malian'),
(117, 'Maltese'),
(118, 'Marshallese'),
(119, 'Mauritanian'),
(120, 'Mauritian'),
(121, 'Mexican'),
(122, 'Micronesian'),
(123, 'Moldovan'),
(124, 'Monacan'),
(125, 'Mongolian'),
(126, 'Moroccan'),
(127, 'Mosotho'),
(128, 'Motswana'),
(129, 'Mozambican'),
(130, 'Namibian'),
(131, 'Nauruan'),
(132, 'Nepalese'),
(133, 'Netherlander'),
(134, 'New Zealander'),
(135, 'Ni-Vanuatu'),
(136, 'Nicaraguan'),
(137, 'Nigerian'),
(138, 'Nigerien'),
(139, 'North Korean'),
(140, 'Northern Irish'),
(141, 'Norwegian'),
(142, 'Omani'),
(143, 'Pakistani'),
(144, 'Palauan'),
(145, 'Panamanian'),
(146, 'Papua New Guinean'),
(147, 'Paraguayan'),
(148, 'Peruvian'),
(149, 'Polish'),
(150, 'Portuguese'),
(151, 'Qatari'),
(152, 'Romanian'),
(153, 'Russian'),
(154, 'Rwandan'),
(155, 'Saint Lucian'),
(156, 'Salvadoran'),
(157, 'Samoan'),
(158, 'San Marinese'),
(159, 'Sao Tomean'),
(160, 'Saudi'),
(161, 'Scottish'),
(162, 'Senegalese'),
(163, 'Serbian'),
(164, 'Seychellois'),
(165, 'Sierra Leonean'),
(166, 'Singaporean'),
(167, 'Slovakian'),
(168, 'Slovenian'),
(169, 'Solomon Islander'),
(170, 'Somali'),
(171, 'South African'),
(172, 'South Korean'),
(173, 'Spanish'),
(174, 'Sri Lankan'),
(175, 'Sudanese'),
(176, 'Surinamer'),
(177, 'Swazi'),
(178, 'Swedish'),
(179, 'Swiss'),
(180, 'Syrian'),
(181, 'Taiwanese'),
(182, 'Tajik'),
(183, 'Tanzanian'),
(184, 'Thai'),
(185, 'Togolese'),
(186, 'Tongan'),
(187, 'Trinidadian or Tobagonian'),
(188, 'Tunisian'),
(189, 'Turkish'),
(190, 'Tuvaluan'),
(191, 'Ugandan'),
(192, 'Ukrainian'),
(193, 'Uruguayan'),
(194, 'Uzbekistani'),
(195, 'Venezuelan'),
(196, 'Vietnamese'),
(197, 'Welsh'),
(198, 'Yemenite'),
(199, 'Zambian'),
(200, 'Zimbabwean');

-- --------------------------------------------------------

--
-- Table structure for table `bdOrderProd`
--

CREATE TABLE `bdOrderProd` (
  `orderId` int(250) NOT NULL,
  `productId` int(250) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bdOrders`
--

CREATE TABLE `bdOrders` (
  `orderId` int(11) NOT NULL,
  `roadId` int(11) NOT NULL,
  `price` float NOT NULL,
  `orderDate` date NOT NULL,
  `shippingMethod` varchar(250) NOT NULL,
  `paymentMethod` varchar(250) NOT NULL,
  `shippingAddress` varchar(250) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bdProducts`
--

CREATE TABLE `bdProducts` (
  `productId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productType` varchar(250) NOT NULL,
  `productPrice` float NOT NULL,
  `productServing` int(11) NOT NULL,
  `productPrepTime` int(11) NOT NULL,
  `productCookTime` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `featuredProd` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bdProducts`
--

INSERT INTO `bdProducts` (`productId`, `categoryId`, `productName`, `productType`, `productPrice`, `productServing`, `productPrepTime`, `productCookTime`, `description`, `image`, `featuredProd`) VALUES
(1, 0, 'Chocolate Muffin', 'Muffin', 24.99, 5, 15, 20, 'The classic chocolate cupcake cannot get any simpler than this. Dark chocolate topped with chocolate chips.\r\nComes with 18 oven-safe cupcake cups.', 'cupcake.jpg', 0),
(2, 0, 'White Chocolate Cheesecake with Cranberry Compote', 'Cake', 27.99, 12, 5, 60, 'All the sweetness comes from the white chocolate here, so use the best chocolate you can find. The cranberry compote provides a sharp counterpoint.', 'cheesecakeCompote.jpeg', 0),
(3, 0, 'Tiramisu', 'Cake', 24.99, 5, 15, 20, 'The beloved Italian coffee-flavored cake. Comes with our cum!!', 'tiramisu.jpeg', 0),
(4, 0, 'Almond Ice-Cream Sandwich', 'Biscuit', 24.99, 12, 15, 30, 'The appeal is timeless! It may look like a lot of work but the joy of an ice-cream maker is that a lot of the work is done for you (if you have one).', 'AlmondIceCreamSandwich.jpg', 0),
(5, 0, 'Classic chocolate brownie', 'Brownie', 22.99, 24, 20, 40, 'The classic brownie that everyone loves. This brownie recipe makes rich, fudgy brownies that always turn out well. And don\'t be shy to add some vanilla ice cream on top!', 'chocBrownie.jpeg', 0),
(6, 0, 'Fruit and nut muffins', 'Muffin', 19.99, 24, 15, 25, 'The perfect breakfast muffins when you\'re on the go! A simple mixture made with your favourite dried fruits and nuts!', 'fruitMuffin.webp', 0),
(7, 0, 'Chocolate Cookies', 'Biscuits', 27.99, 25, 10, 15, 'This is the best chocolate chip cookie recipe ever! Buttery, slightly doughy, & so good. So easy with no weird ingredients or chilling!', 'chocCookies.webp', 0),
(8, 0, 'Red Velvet Cupcakes', 'Muffin', 29.99, 16, 20, 30, 'Fluffy and moist, these buttery red velvet cupcakes are my favourite. The tangy cream cheese frosting puts them over the top!', 'redvelvetCupcakes.webp', 0),
(9, 0, 'Strawberry Tartlets', 'Tart', 22.99, 6, 15, 15, 'A strawberry tart is the perfect summer dessert.  It starts with a buttery crust, a creamy filling, and then a topping of fresh berries finished off with a fruit glaze.  Both pretty and delicious!', 'strawberryTartlets.webp', 0),
(10, 0, 'Mini Macarons', 'Macarons', 34.99, 6, 10, 15, 'The French Macaron is one of the most delicate and airy deserts. Ideally, a perfect circle should be achieved only with a piping bag.', 'miniMacarons.jpeg', 0),
(11, 0, 'Lemon Meringue', 'Pie', 39.99, 8, 20, 35, 'This lemon meringue pie is so delicious and perfect for sharing! The sweet and tart lemon filling is thickened with cornstarch, flour, and egg yolks.', 'lemonMeringue.jpeg', 0),
(12, 0, 'Molten Lava Cake', 'Cake', 24.99, 6, 10, 15, 'You will fall in love with this Chocolate Lava Cake recipe with its rich molten chocolate centre! Ready in less than 30 minutes, this decadent dessert is sure to impress and is perfect for any occasion. All you need are a handful of simple ingredients!', 'moltenLavaCake.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bdRating`
--

CREATE TABLE `bdRating` (
  `ratingId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `ratingValue` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bdRoad`
--

CREATE TABLE `bdRoad` (
  `roadId` int(11) NOT NULL,
  `cityId` int(11) NOT NULL,
  `roadName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bdUsers`
--

CREATE TABLE `bdUsers` (
  `usersId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `mobileNumber` int(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilePicture` varchar(255) DEFAULT 'person.svg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bdUsers`
--

INSERT INTO `bdUsers` (`usersId`, `firstName`, `lastName`, `dob`, `emailAddress`, `mobileNumber`, `nationality`, `password`, `profilePicture`) VALUES
(1, 'Julian', 'Vella', '2022-12-14', 'julian.vella170@gmail.com', 99570072, 'Nigerian', '$2y$10$Fh6KBREO7ZLdK', 'person.svg'),
(2, 'Julian', 'Vella', '2023-01-19', 'julian.vella170@gmail.com', 99570072, 'Nigerian', '$2y$10$6eNYSinqx481g', 'person.svg'),
(3, 'Kaia', 'Piccinino', '2023-01-03', 'kaiapiccinino@gmail.com', 79021604, 'maltese', '$2y$10$H.SPsMSlY8KNKyIsII.La.QTsVg1PB34u7q/Lc5W.8afovOvsLejy', 'person.svg');

-- --------------------------------------------------------

--
-- Table structure for table `bdUtensils`
--

CREATE TABLE `bdUtensils` (
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductPrice` float NOT NULL,
  `Material` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bdUtensils`
--

INSERT INTO `bdUtensils` (`ProductId`, `ProductName`, `ProductPrice`, `Material`, `Image`) VALUES
(1, 'Balloon Whisk', 7.99, 'Metal', 'Whisk.jpg'),
(2, 'Wooden Spoon', 1.99, 'Wood', 'WoodenSpoon.jpg'),
(3, 'Pastry Brush', 2.49, 'Silicon', 'PastryBrush.jpg'),
(4, 'Rolling Pin', 6.99, 'Wood', 'RollingPin.jpg'),
(5, 'Round Cake Pan', 21.99, 'Steel', 'CakePan.jpg'),
(6, 'Piping Bag', 3.99, 'Plastic', 'PipingBag.jpg'),
(7, 'Muffin Pan', 10.99, 'Steel', 'MuffinPan.jpg'),
(8, 'Baking Paper', 4.99, 'Paper', 'Baking-Paper-37cm-8mt.jpg'),
(9, 'Sieve', 5.49, 'Steel', 'Sieve.jpeg'),
(10, 'Oven Gloves', 13.99, 'Cotton', 'OvenGloves.jpeg'),
(11, 'Kitchen Scales', 9.99, 'Metal', 'DigitalScales.jpg'),
(12, 'Spatula', 2.99, 'Silicon', 'Spatula.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bdUtensilsOrder`
--

CREATE TABLE `bdUtensilsOrder` (
  `ProductId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdCart`
--
ALTER TABLE `bdCart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `bdCategory`
--
ALTER TABLE `bdCategory`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `bdCity`
--
ALTER TABLE `bdCity`
  ADD PRIMARY KEY (`cityId`),
  ADD KEY `bdcity_ibfk_1` (`nationalityId`);

--
-- Indexes for table `bdComments`
--
ALTER TABLE `bdComments`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `idx_bdComments_productId` (`productId`) USING BTREE;

--
-- Indexes for table `bdNationality`
--
ALTER TABLE `bdNationality`
  ADD PRIMARY KEY (`nationalityId`);

--
-- Indexes for table `bdOrderProd`
--
ALTER TABLE `bdOrderProd`
  ADD PRIMARY KEY (`orderId`,`productId`),
  ADD KEY `idx_OrderProd_productId` (`productId`);

--
-- Indexes for table `bdOrders`
--
ALTER TABLE `bdOrders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `idx_bdOrders_userId` (`userId`);

--
-- Indexes for table `bdProducts`
--
ALTER TABLE `bdProducts`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `idx_bdProducts_categoryId` (`categoryId`);

--
-- Indexes for table `bdRating`
--
ALTER TABLE `bdRating`
  ADD PRIMARY KEY (`ratingId`),
  ADD KEY `idx_bdRating_productId` (`productId`);

--
-- Indexes for table `bdRoad`
--
ALTER TABLE `bdRoad`
  ADD PRIMARY KEY (`roadId`),
  ADD KEY `idx_bdRoad_cityId` (`cityId`);

--
-- Indexes for table `bdUsers`
--
ALTER TABLE `bdUsers`
  ADD PRIMARY KEY (`usersId`),
  ADD KEY `idx_bdNationality_nationality` (`nationality`) USING BTREE,
  ADD KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `bdUtensils`
--
ALTER TABLE `bdUtensils`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `bdUtensilsOrder`
--
ALTER TABLE `bdUtensilsOrder`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `idx_bdUtensilsOrder_orderId` (`orderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bdCart`
--
ALTER TABLE `bdCart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bdCategory`
--
ALTER TABLE `bdCategory`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bdCity`
--
ALTER TABLE `bdCity`
  MODIFY `cityId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bdComments`
--
ALTER TABLE `bdComments`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bdNationality`
--
ALTER TABLE `bdNationality`
  MODIFY `nationalityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `bdOrders`
--
ALTER TABLE `bdOrders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bdProducts`
--
ALTER TABLE `bdProducts`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bdRating`
--
ALTER TABLE `bdRating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bdRoad`
--
ALTER TABLE `bdRoad`
  MODIFY `roadId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bdUsers`
--
ALTER TABLE `bdUsers`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bdUtensils`
--
ALTER TABLE `bdUtensils`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bdCart`
--
ALTER TABLE `bdCart`
  ADD CONSTRAINT `bdcart_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `bdProducts` (`productId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bdCategory`
--
ALTER TABLE `bdCategory`
  ADD CONSTRAINT `fk_bdProducts_categoryId` FOREIGN KEY (`categoryId`) REFERENCES `bdProducts` (`categoryId`);

--
-- Constraints for table `bdCity`
--
ALTER TABLE `bdCity`
  ADD CONSTRAINT `bdcity_ibfk_1` FOREIGN KEY (`nationalityId`) REFERENCES `bdNationality` (`nationalityId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bdComments`
--
ALTER TABLE `bdComments`
  ADD CONSTRAINT `bdcomments_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `bdProducts` (`productId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bdOrderProd`
--
ALTER TABLE `bdOrderProd`
  ADD CONSTRAINT `bdorderprod_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `bdProducts` (`productId`),
  ADD CONSTRAINT `bdorderprod_ibfk_2` FOREIGN KEY (`orderId`) REFERENCES `bdOrders` (`orderId`);

--
-- Constraints for table `bdOrders`
--
ALTER TABLE `bdOrders`
  ADD CONSTRAINT `bdorders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `bdUsers` (`usersId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bdRating`
--
ALTER TABLE `bdRating`
  ADD CONSTRAINT `bdrating_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `bdProducts` (`productId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bdRoad`
--
ALTER TABLE `bdRoad`
  ADD CONSTRAINT `bdroad_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `bdCity` (`cityId`) ON UPDATE CASCADE;

--
-- Constraints for table `bdUtensilsOrder`
--
ALTER TABLE `bdUtensilsOrder`
  ADD CONSTRAINT `bdutensilsorder_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `bdUtensils` (`ProductId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `bdutensilsorder_ibfk_2` FOREIGN KEY (`orderId`) REFERENCES `bdOrders` (`orderId`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
