-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 11:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restraunts`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sno` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_price` varchar(200) NOT NULL,
  `p_image` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sno`, `U_id`, `p_id`, `p_name`, `p_price`, `p_image`, `quantity`, `total`) VALUES
(54, 6, 21, 'white sauce pasta', '250', 'pasta.jpeg', 1, 250),
(59, 8, 18, 'spring roll', '130', 'spring roll.jpg', 3, 390),
(62, 6, 10, 'tea ', '25', 'tea.jpg', 1, 25),
(69, 8, 22, 'gravy manchurian', '250', 'manchurian.jpg', 3, 750),
(76, 1, 3, 'double tikki burger', '150', 'post-1.jpg', 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `sno` int(11) NOT NULL,
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address1` varchar(300) NOT NULL,
  `Address2` varchar(300) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`sno`, `Fname`, `Lname`, `contact`, `Email`, `Address1`, `Address2`, `Country`, `State`, `Zip`) VALUES
(1, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(2, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(3, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(4, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(5, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(6, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(7, '', '', '', '', '', '', '', '', 0),
(8, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(9, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(10, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(11, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(12, 'Pragati', 'Garg', '1234567890', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(13, 'Pragati', 'Garg', '23456789', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(14, 'Pragati', 'Garg', '23456789', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(15, 'Pragati', 'Garg', '23456789', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(16, 'Pragati', 'Garg', '23456789', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(17, 'Pragati', 'Garg', '23456789', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001),
(18, 'Pragati', 'Garg', '123456789', 'pragati@gmail.com', 'patiala', 'patiala', 'india', 'punjab', 147001);

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Work` varchar(30) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`Sno`, `Name`, `Work`, `Image`) VALUES
(1, 'Aayush', 'CEO,Co-founder', 'team-1.jpg'),
(2, 'Ayaan', 'CEO,Co-founder', 'team-2.jpg'),
(3, 'Ayushman', 'Master Chef', 'team-3.jpg'),
(4, 'Hitesh', 'Master Chef', 'team-4.jpg'),
(5, 'Kalpit', 'Master Chef', 'team-5.webp'),
(6, 'Gunbir', 'Master Chef', 'team-6.webp'),
(7, 'Saksham', 'Chef', 'team-7.webp'),
(8, 'Samarth', 'Chef', 'team-8.webp');

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `sno` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_price` varchar(200) NOT NULL,
  `p_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`sno`, `U_id`, `p_id`, `p_name`, `p_price`, `p_image`) VALUES
(19, 8, 22, 'gravy manchurian', '250', 'manchurian.jpg'),
(20, 8, 20, 'noodles', '200', 'noodles.webp'),
(22, 8, 14, 'sweet/salted lassi', '50', 'lassi.jpeg'),
(23, 6, 8, 'double tikki cheese ', '300', 'carousel-1.jpg'),
(24, 8, 3, 'double tikki burger', '150', 'post-1.jpg'),
(25, 1, 7, 'cheese burger', '270', 'feature-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `foodproduct`
--

CREATE TABLE `foodproduct` (
  `sno` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Price` int(10) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Category` varchar(40) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodproduct`
--

INSERT INTO `foodproduct` (`sno`, `Name`, `Price`, `Description`, `Category`, `Image`) VALUES
(1, 'aloo tikki burger', 70, 'crispy', 'burger', 'single.jpg'),
(2, 'classic burger', 100, 'tasty', 'burger', 'feature-1.jpg'),
(3, 'double tikki burger', 150, 'double crispy', 'burger', 'post-1.jpg'),
(4, 'veg burger', 170, 'Tasty', 'burger', 'burger.jpg'),
(5, 'crispy burger', 200, 'delicious', 'burger', 'blog-3.jpg\r\n'),
(6, 'chips burger', 250, 'yummy', 'burger', 'burger.jpg\r\n'),
(7, 'cheese burger', 270, 'high quantity', 'burger', 'feature-3.jpg'),
(8, 'double tikki cheese ', 300, 'tasty and cheesy', 'burger', 'carousel-1.jpg'),
(9, 'mineral water', 20, 'filtered', 'beverages', 'water.jpeg'),
(10, 'tea ', 25, 'tasty', 'beverages', 'tea.jpg'),
(11, 'coffee', 35, 'stressfree', 'beverages', 'coffee.webp'),
(12, 'fresh lime soda', 35, 'fresh', 'beverages', 'post-4.jpg'),
(13, 'milk', 40, 'healthy', 'beverages', 'milk.webp'),
(14, 'sweet/salted lassi', 50, 'cold', 'beverages', 'lassi.jpeg'),
(15, 'soft drinks', 70, 'cold', 'beverages', 'soft drink.jpeg'),
(16, 'mocktail', 100, 'cold', 'beverages', 'menu-beverage.jpg'),
(17, 'french fries', 100, 'crispy', 'snacks', 'french fries.jpeg'),
(18, 'spring roll', 130, 'tasty', 'snacks', 'spring roll.jpg'),
(19, 'paneer tika', 170, 'tasty', 'snacks', 'pakore.jfif'),
(20, 'noodles', 200, 'veg', 'snacks', 'noodles.webp'),
(21, 'white sauce pasta', 250, 'saucy', 'snacks', 'pasta.jpeg'),
(22, 'gravy manchurian', 250, 'gravy', 'snacks', 'manchurian.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `sno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`sno`, `email`) VALUES
(1, 'pragati@gmail.com'),
(9, 'pragati@gmail.com'),
(10, 'pragati@gmail.com'),
(11, 'pragati@gmail.com'),
(12, 'pragati@gmail.com'),
(13, 'pragati@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_item`
--

CREATE TABLE `ordered_item` (
  `sno` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pcount` int(11) NOT NULL,
  `pprice` varchar(200) NOT NULL,
  `gtotal` varchar(200) NOT NULL,
  `U_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`sno`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Pragati', 'pragati@gmail.com', 'Service', 'Timing of your services..??');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `sno` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_review` varchar(500) NOT NULL,
  `r_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`sno`, `r_name`, `r_review`, `r_location`) VALUES
(1, 'Pragati', 'Burgers are delicious. Fast, nice variety of choices, generous portions on the french fries. Enough tables to dine in. Good burgers, we like this place!', 'Patiala'),
(2, 'Harpreet', 'I love to go to Burger King, the staff members are always very warm and kind with me and my family, their food taste good and their coke cola is not watered down, their sauce is good, their meat is cooked, and I am always smiling after BK. :)', 'Roper'),
(3, 'Gokul', 'Every morning I stop by for my breakfast number 6 large with 6 creams no sugar. Today I was there at 8:52 am. JANEE is in the exit window and takes my order. Very pleasant lady always with a smile.', 'Uttar Pardesh'),
(4, 'Mayank', 'Burger King is still very affordable in today\'s time and the app has many different deals. When I order from this location they are always kind and courteous.', 'Kerala'),
(5, 'Nitin ', 'Burger point burger is one of the best in the town. Very delicious burger strongly recommend this especially Maharaja burger its very tasty.', 'Chandigarh'),
(6, 'Ridham', 'This place has decent option of burgers to choose from. They should keep prices low to make this place worth visiting again and again', 'Goa'),
(7, 'Gulnaz', 'Very nice burger. The best quality. Friendly staff and a good value for money. Easy listening music and happy faces everywhere.', 'Jalandhar'),
(8, 'Neep', 'New opening, with excellent critics. We took burger, ff, and 2 salads. Not to say that we had difficulty to sleep at night!! Food was bad, too bad. I wonder how they got a good critic', 'Washington'),
(9, 'Aadvik', 'Very good, clean, prompt service! Nice choice of foods! Good prices! I especially liked the buffalo offering! Drink selection was good also!', 'Banglore'),
(10, 'Prayan', 'Visited here with the family and enjoyed the burgers we had. The £14.95 deal of a burger, chips and a drink is good value. The burgers are well put together and very filling. ', 'Gujrat');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Sno`, `Name`, `Email`, `Password`) VALUES
(1, 'Pragati Garg', 'pragatigarg3816@gmail.com', 'prag'),
(2, 'Yashika ', 'yashika8548@gmail.com', 'yashu'),
(6, 'Ritika goyal', 'ritikagoel7366@gmail.com', 'ritika'),
(8, 'Pragati', 'pragati@gmail.com', '9876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `foodproduct`
--
ALTER TABLE `foodproduct`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `ordered_item`
--
ALTER TABLE `ordered_item`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fav`
--
ALTER TABLE `fav`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `foodproduct`
--
ALTER TABLE `foodproduct`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ordered_item`
--
ALTER TABLE `ordered_item`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
