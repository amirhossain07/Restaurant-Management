-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 01:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant management`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `name3` varchar(20) NOT NULL,
  `name4` varchar(20) NOT NULL,
  `progress` varchar(20) NOT NULL,
  `progress2` varchar(20) NOT NULL,
  `progress3` varchar(20) NOT NULL,
  `progress4` varchar(20) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `name`, `name2`, `name3`, `name4`, `progress`, `progress2`, `progress3`, `progress4`, `about`) VALUES
(1, 'chefs', 'appearance', 'review', 'outlook', '60%', '80%', '90%', '75%', 'Di se son che piú se da sí come. Beato fosse beato incominciare come modo, nome di noi la esperienza e viviamo non da. Volta mescolati tutte che di ripararci lui mortali gli la. Riguardando di discerniamo a alli, e.');

-- --------------------------------------------------------

--
-- Table structure for table `addoffer`
--

CREATE TABLE `addoffer` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `itemname` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `days` int(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addoffer`
--

INSERT INTO `addoffer` (`id`, `picture`, `itemname`, `title`, `price`, `description`, `days`, `user_id`) VALUES
(1, '5f69c0202f077.jpg', 'ponir', 'real deshi sweat', '150', 'oneek valo ekta khabar', 2, 2),
(2, '5f69df8e895c0.jpg', 'burger', 'double petty burger', '200', 'asd jhjsdf sd ef jlksdhkj sdljfh sldfhsj', 1, 2),
(3, '5f6b1f7fb7f16.jpg', 'biyer item', 'weading special item', '1200', 'sdhflaiuhwjehrqjklwn klwjehrlw qkhrklj k', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `addslide`
--

CREATE TABLE `addslide` (
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addslide`
--

INSERT INTO `addslide` (`picture`) VALUES
('resturant.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `type`) VALUES
(1, 'hemel', 'hemel123', 1),
(2, 'raihan', 'raihan123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `beveragemenu`
--

CREATE TABLE `beveragemenu` (
  `id` int(255) NOT NULL,
  `Foodname` varchar(25) NOT NULL,
  `Item` varchar(25) NOT NULL,
  `Price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beveragemenu`
--

INSERT INTO `beveragemenu` (`id`, `Foodname`, `Item`, `Price`) VALUES
(1, 'sweet', 'lemmon', '40');

-- --------------------------------------------------------

--
-- Table structure for table `burgermenu`
--

CREATE TABLE `burgermenu` (
  `id` int(255) NOT NULL,
  `Foodname` varchar(25) NOT NULL,
  `Item` varchar(25) NOT NULL,
  `Price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burgermenu`
--

INSERT INTO `burgermenu` (`id`, `Foodname`, `Item`, `Price`) VALUES
(1, 'fried rice', 'chicken, prawn drinks', '250');

-- --------------------------------------------------------

--
-- Table structure for table `chefsinfo`
--

CREATE TABLE `chefsinfo` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chefsinfo`
--

INSERT INTO `chefsinfo` (`id`, `picture`, `about`) VALUES
(3, '5f6b19544ae18.jpg', 'name : kazii zahid hasan. he has a 10years of experiance in this line.. he is a very good chef.'),
(4, '5f5727afeda8f.jpg', 'name :hemel raihan.. he has a 10years of experiance in this line.. he is a very good chef.'),
(6, '5f5727cdf099a.jpg', 'name :maruf hasan.. he has a 10years of experiance in this line.. he is a very good chef.');

-- --------------------------------------------------------

--
-- Table structure for table `chickenmenu`
--

CREATE TABLE `chickenmenu` (
  `id` int(255) NOT NULL,
  `Foodname` varchar(25) NOT NULL,
  `Item` varchar(25) NOT NULL,
  `Price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chickenmenu`
--

INSERT INTO `chickenmenu` (`id`, `Foodname`, `Item`, `Price`) VALUES
(3, 'Jafran Biriyanii', 'Mutton, aluu, Drinks', '220'),
(7, 'dum biriyani', 'chicken, kofta', '210');

-- --------------------------------------------------------

--
-- Table structure for table `desartmenu`
--

CREATE TABLE `desartmenu` (
  `id` int(255) NOT NULL,
  `Foodname` varchar(25) NOT NULL,
  `Item` varchar(25) NOT NULL,
  `Price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desartmenu`
--

INSERT INTO `desartmenu` (`id`, `Foodname`, `Item`, `Price`) VALUES
(1, 'lemmon juice', 'lemmon', '40');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `joinning_date` date NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `pass`, `addr`, `categorie`, `salary`, `joinning_date`, `picture`) VALUES
(1, 'hemel', '123', 'asd', 'guard', '15000', '2020-09-22', '5f6a3577697fc.jpg'),
(2, 'maisha', '123', 'rampura', 'manager', '20000', '2020-09-22', '5f6a364616cf4.jpg'),
(3, 'peal', 'peal123', 'rampura', 'manager', '20000', '2020-09-22', '5f6a394557e6a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employeelogin`
--

CREATE TABLE `employeelogin` (
  `id` int(255) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `add` varchar(30) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `salary` int(255) NOT NULL,
  `joinning_date` date NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeelogin`
--

INSERT INTO `employeelogin` (`id`, `uname`, `pass`, `add`, `categorie`, `salary`, `joinning_date`, `picture`) VALUES
(1, 'employee', 'employee123', '', '', 0, '0000-00-00', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phone`, `email`, `msg`) VALUES
(1, 'hemel', '01521495184', 'Jordansaunders1976@gmail.com', 'oneeeek valoo ektaaa restaurent'),
(2, 'raihan', '01521495184', 'Jordansaunders1976@gmail.com', 'fjhgfjhgfjhgfjhgfjhfjhgfjhfg');

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `id` int(255) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`id`, `foodname`, `quantity`, `price`, `total`, `username`, `email`, `addr`, `phone`) VALUES
(1, '', 0, '', 0, 'hemel', 'abc@gmail.com', 'hg', 123),
(2, '', 0, '', 0, ',nm', 'abc@gmail.com', 'hg', 123),
(3, 'Set Menu-1', 0, '', 0, ',nm', 'abc@gmail.com', 'hg', 123),
(4, 'Set Menu-1', 1, '220 ', 0, ',nm', 'abc@gmail.com', 'hg', 123),
(5, 'Set Menu-2', 2, '320 ', 0, 'hemel', 'hemelraihan1997@gmail.com', 'rampura', 1521495184),
(6, 'Set Menu-2', 2, '320 ', 0, 'maisha', 'abc@gmail.com', 'bashabo', 123),
(7, 'Set Menu-2', 5, '320 ', 0, 'hemel', 'abc@gmail.com', 'hg', 123),
(8, 'Set Menu-1', 2, '220 ', 0, ',nm', 'abc@gmail.com', 'hg', 123),
(9, '', 0, '', 0, '', '', '', 0),
(10, '', 0, '', 1000, '', '', '', 0),
(11, 'Set Menu-1', 5, '220 ', 1100, 'shanto', 'shanto@gmail.com', 'mohakhali', 12345678),
(12, 'fried rice', 4, '250 ', 1000, 'peal', 'peal@gmail.com', 'rampura', 123);

-- --------------------------------------------------------

--
-- Table structure for table `gellarypic`
--

CREATE TABLE `gellarypic` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gellarypic`
--

INSERT INTO `gellarypic` (`id`, `picture`) VALUES
(1, '$5f5486df6e2c8.jpg'),
(2, '$5f54929fd0950.jpg'),
(3, '$5f54972ae3c1c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gellaryslide`
--

CREATE TABLE `gellaryslide` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gellaryslide`
--

INSERT INTO `gellaryslide` (`id`, `picture`) VALUES
(13, '5f55b02cab429.jpg'),
(14, '5f55b18ad2569.jpg'),
(15, '5f55b1f3612bc.jpg'),
(17, '5f55b2b7dc3c7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gellaryslide2`
--

CREATE TABLE `gellaryslide2` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gellaryslide2`
--

INSERT INTO `gellaryslide2` (`id`, `picture`) VALUES
(3, '5f55b2d44f63c.jpg'),
(4, '5f55b2eb88453.jpg'),
(5, '5f55b308c2c91.jpg'),
(6, '5f55b31289dec.jpg'),
(7, '5f55b3262cb43.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gellaryslide3`
--

CREATE TABLE `gellaryslide3` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gellaryslide3`
--

INSERT INTO `gellaryslide3` (`id`, `picture`) VALUES
(3, '5f55b3370d209.jpg'),
(4, '5f55b3417c7ce.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latestnews`
--

CREATE TABLE `latestnews` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(20) NOT NULL,
  `subtitle` varchar(20) NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latestnews`
--

INSERT INTO `latestnews` (`id`, `picture`, `title`, `subtitle`, `news`) VALUES
(1, '5f57325d71fbf.jpg', 'todays news', 'taja khobor', 'It nor below oh shades a rhyme not still. Charms bower virtues and breast seek been, so where still her. and breast seek been, so where still her.'),
(2, '5f57326c01b41.jpg', 'kalker news', 'not taja ', 'It nor below oh shades a rhyme not still. Charms bower virtues and breast seek been, so where still her. and breast seek been, so where still her.'),
(3, '5f573288afeb2.jpg', 'tommorows news', 'medium taja', 'It nor below oh shades a rhyme not still. Charms bower virtues and breast seek been, so where still her. and breast seek been, so where still her.');

-- --------------------------------------------------------

--
-- Table structure for table `menuoffer`
--

CREATE TABLE `menuoffer` (
  `id` int(255) NOT NULL,
  `offername1` varchar(20) NOT NULL,
  `deteils1` text NOT NULL,
  `offername2` varchar(20) NOT NULL,
  `deteils2` text NOT NULL,
  `offername3` varchar(20) NOT NULL,
  `deteils3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menuoffer`
--

INSERT INTO `menuoffer` (`id`, `offername1`, `deteils1`, `offername2`, `deteils2`, `offername3`, `deteils3`) VALUES
(4, 'pizza', '40% off only on wednessday.', 'burger', '30% off only on sunday.', 'biriyani', 'buy one get one with drinks');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `offername` varchar(20) NOT NULL,
  `deteils` text NOT NULL,
  `offer2` varchar(20) NOT NULL,
  `offer3` varchar(20) NOT NULL,
  `deteils2` text NOT NULL,
  `deteils3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `offername`, `deteils`, `offer2`, `offer3`, `deteils2`, `deteils3`) VALUES
(3, 'pizza', '40% off in any 12\' pizzza. only on every sunday and webnessday.. take good food & stay happy', 'burger', 'biriyani', '30% off in any double petti burger. only on every sunday and webnessday.. take good food & stay happy', '20% off in any beef kachi. only on every sunday and webnessday.. take good food & stay happy');

-- --------------------------------------------------------

--
-- Table structure for table `partybook`
--

CREATE TABLE `partybook` (
  `id` int(255) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `type` varchar(20) NOT NULL,
  `person` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partybook`
--

INSERT INTO `partybook` (`id`, `uname`, `email`, `date`, `time`, `type`, `person`) VALUES
(1, '', 'abc@gmail.com', '2020-09-12', '00:00:00', 'Birthday', 8),
(2, '', 'abc@gmail.com', '2020-09-12', '04:34:00', 'Birthday', 2),
(3, '', 'hemelraihan1997@gmail.com', '2020-09-12', '03:38:00', 'Anniversary', 2),
(4, 'hemel', 'abc@gmail.com', '2020-09-12', '20:36:00', 'Wedding party', 100),
(5, 'hemel', 'Jordansaunders1976@gmail.', '2020-09-14', '10:00:00', 'Birthday', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pizzamenu`
--

CREATE TABLE `pizzamenu` (
  `id` int(255) NOT NULL,
  `Foodname` varchar(25) NOT NULL,
  `Item` varchar(25) NOT NULL,
  `Price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pizzamenu`
--

INSERT INTO `pizzamenu` (`id`, `Foodname`, `Item`, `Price`) VALUES
(11, 'Spaicy Pizza 8\'', 'chicken, prawn', '500'),
(12, 'Spaicy Pizza 6\'', 'Beef, chese, drinks', '400');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `itemname` varchar(25) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `picture`, `itemname`, `heading`, `price`, `description`, `user_id`) VALUES
(1, '5f59a730012ac.jpg', 'sd', 'sdf', '50', 'sdfsdf', 1),
(2, '5f59a958cf545.jpg', 'skdfh', 'lhsd', '100', 'jhlkjh', 1),
(3, '5f59ace633561.jpg', 'kdfm', 'fdks', '125', 'dfgdfg', 1),
(4, '5f59aef6a8080.jpg', 'sdf', 'sdf', '50', 'dfkhgjhkhgkj', 1),
(13, '5f62deaebe474.jpg', 'valo', 'kjh', '200', 'hk  ', 2),
(14, '5f5a77786f6cc.jpg', 'kjh', 'kjhk', '250', 'kjhkjmbvnbvuruytreyue', 1),
(15, '5f5a778645fe1.jpg', 'jhgk', 'kjhk', '500', 'jhkjuyruyrytr', 1),
(16, '5f5a780e78dc8.jpg', 'jhgJHJhgj', 'jhgjhgjhhjg', '400', 'jhgjcnbvchgfsgh', 2),
(17, '5f5a781ddda7c.jpg', 'jkkj', 'kjh', '250', 'kjhjkh', 2),
(18, '5f5a78282b018.jpg', 'kjhkj', 'hjkh', '200', 'kjhj', 2),
(19, '5f5a7ba15af51.jpg', 'jhgghgJhgjh', 'jhgjhg', '300', 'gjhqrwrtdfgujh', 2),
(20, '5f5a7ba946dbc.jpg', 'hg', 'jhgjhg', '50', 'hgjh', 2),
(21, '5f5a8471a3a71.jpg', 'jkhjh', 'kjh', '452', 'kjhmnbmsndbferj', 2),
(22, '5f5a85866ffcd.jpg', 'aa', 'aa', '150', 'aabbkjkejhleritjyerf', 2),
(23, '5f699db431e08.jpg', 'juice', 'fresh juice', '120', 'onek valo juice..onek valo eta..', 2),
(24, '5f699e8500bf3.jpg', 'biryani', 'bashmoti biriyani', '250', 'oneeeeek josss biriyanii', 2),
(25, '5f6b1e1f489a6.jpg', 'holud item', 'holud er special item', '550', 'abc dhue ha ehsla hskduta jkasd laed   ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `post2`
--

CREATE TABLE `post2` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `itemname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post2`
--

INSERT INTO `post2` (`id`, `picture`, `itemname`) VALUES
(1, '5f69b20ebdfc3.jpg', 'burger'),
(2, '5f69b2e246b03.jpg', 'pithaa'),
(3, '5f59e9444567e.jpg', 'zdc'),
(4, '5f59e953bf7b3.jpg', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `post3`
--

CREATE TABLE `post3` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `itemname` varchar(25) NOT NULL,
  `price` varchar(255) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post3`
--

INSERT INTO `post3` (`id`, `picture`, `itemname`, `price`, `title`, `description`, `user_id`) VALUES
(1, '5f6b233bb8728.jpg', 'biyer item', '1200', 'weading special item', 'sdhflaiuhwjehrqjklwn klwjehrlw qkhrklj k ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE `productorder` (
  `id` int(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productorder`
--

INSERT INTO `productorder` (`id`, `productname`, `price`, `quantity`, `total`, `uname`, `email`, `addr`, `phone`, `user_id`) VALUES
(1, 'kjhkj', '200 ', 2, '400', 'hemel', 'abc@gmail.com', 'hg', '0123', 2),
(2, 'juice', '120 ', 2, '240', 'maisha', 'abc@gmail.com', 'hg', '0123', 2),
(3, 'sd', '50 ', 4, '200', 'shanto', 'shanto@gmail.com', 'mohakhali', '0123', 1),
(4, 'ponir', '150 ', 2, '300', 'hemel', 'Jordansaunders1976@gmail.com', 'mohakhali', '01521495184', 2),
(5, 'holud item', '550 ', 2, '1100', 'himika', 'abc@gmail.com', 'modhubag', '0123456', 5),
(6, 'biyer item', '1200 ', 2, '2400', 'maisha', 'maisha@gmail.com', 'bashabo', '0123456', 5);

-- --------------------------------------------------------

--
-- Table structure for table `setmenu`
--

CREATE TABLE `setmenu` (
  `id` int(255) NOT NULL,
  `Foodname` varchar(25) NOT NULL,
  `Item` varchar(25) NOT NULL,
  `Price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setmenu`
--

INSERT INTO `setmenu` (`id`, `Foodname`, `Item`, `Price`) VALUES
(1, 'Set Menu-1', 'Rice, 2 chickens, Salads', '220'),
(3, 'Set Menu-2', 'Rice, Beef, Salad, Drinks', '320');

-- --------------------------------------------------------

--
-- Table structure for table `slidepic`
--

CREATE TABLE `slidepic` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slidepic`
--

INSERT INTO `slidepic` (`id`, `picture`) VALUES
(1, '5f6999082e589.jpg'),
(2, '5f53124ddeef0.jpg'),
(3, '5f53125a1d1d7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tablebook`
--

CREATE TABLE `tablebook` (
  `id` int(255) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `person` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablebook`
--

INSERT INTO `tablebook` (`id`, `uname`, `email`, `date`, `time`, `person`) VALUES
(1, 'maisha', 'abc@gmail.com', '2020-09-12', '00:00:00', 5),
(2, 'hemel', 'Jordansaunders1976@gmail.', '2020-09-15', '03:44:00', 2),
(3, 'hemel', 'abc@gmail.com', '2020-09-15', '08:59:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `traditionlogin`
--

CREATE TABLE `traditionlogin` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traditionlogin`
--

INSERT INTO `traditionlogin` (`id`, `name`, `email`, `pass`, `picture`, `phone`) VALUES
(1, 'azad peal', 'azad@gmail.com', 'azad123', 'avatar.png', '01425455'),
(2, 'shanto', 'shanto@gmail.com', 'shanto123', 'avatar.png', '12355'),
(3, 'hemel', 'hemel.1997@gmail.com', 'hemel123', 'avatar.png', '1521495184'),
(4, 'maruf', 'abc@gmail.com', 'sd', 'avatar.png', '664654'),
(5, 'maruf', 'maruf@gmail.com', 'maruf123', 'avatar.png', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addoffer`
--
ALTER TABLE `addoffer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beveragemenu`
--
ALTER TABLE `beveragemenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burgermenu`
--
ALTER TABLE `burgermenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefsinfo`
--
ALTER TABLE `chefsinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chickenmenu`
--
ALTER TABLE `chickenmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desartmenu`
--
ALTER TABLE `desartmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeelogin`
--
ALTER TABLE `employeelogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gellarypic`
--
ALTER TABLE `gellarypic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gellaryslide`
--
ALTER TABLE `gellaryslide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gellaryslide2`
--
ALTER TABLE `gellaryslide2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gellaryslide3`
--
ALTER TABLE `gellaryslide3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latestnews`
--
ALTER TABLE `latestnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuoffer`
--
ALTER TABLE `menuoffer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partybook`
--
ALTER TABLE `partybook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizzamenu`
--
ALTER TABLE `pizzamenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post2`
--
ALTER TABLE `post2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post3`
--
ALTER TABLE `post3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productorder`
--
ALTER TABLE `productorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setmenu`
--
ALTER TABLE `setmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidepic`
--
ALTER TABLE `slidepic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablebook`
--
ALTER TABLE `tablebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traditionlogin`
--
ALTER TABLE `traditionlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addoffer`
--
ALTER TABLE `addoffer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beveragemenu`
--
ALTER TABLE `beveragemenu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `burgermenu`
--
ALTER TABLE `burgermenu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chefsinfo`
--
ALTER TABLE `chefsinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chickenmenu`
--
ALTER TABLE `chickenmenu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `desartmenu`
--
ALTER TABLE `desartmenu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employeelogin`
--
ALTER TABLE `employeelogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gellarypic`
--
ALTER TABLE `gellarypic`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gellaryslide`
--
ALTER TABLE `gellaryslide`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gellaryslide2`
--
ALTER TABLE `gellaryslide2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gellaryslide3`
--
ALTER TABLE `gellaryslide3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `latestnews`
--
ALTER TABLE `latestnews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menuoffer`
--
ALTER TABLE `menuoffer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partybook`
--
ALTER TABLE `partybook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pizzamenu`
--
ALTER TABLE `pizzamenu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post2`
--
ALTER TABLE `post2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post3`
--
ALTER TABLE `post3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productorder`
--
ALTER TABLE `productorder`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setmenu`
--
ALTER TABLE `setmenu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slidepic`
--
ALTER TABLE `slidepic`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tablebook`
--
ALTER TABLE `tablebook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `traditionlogin`
--
ALTER TABLE `traditionlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
