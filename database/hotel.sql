-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 11:01 PM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `addroom`
--

CREATE TABLE `addroom` (
  `Sno` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Bed` int(10) NOT NULL,
  `Bath` int(10) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` int(150) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addroom`
--

INSERT INTO `addroom` (`Sno`, `Type`, `Bed`, `Bath`, `Description`, `Price`, `Image`) VALUES
(1, 'Junior Suite', 3, 2, 'Cozy and spacious rooms with private bathroom, air conditioning, daily cleaning, color tv, free WI-FI.', 2000, 'room-1.jpg'),
(2, 'Executive Suite', 4, 2, 'Hotels near Sri Ramachandra Medical College. Clean and Tidy Rooms. Hotels in Iyappanthangal. Free Wi-Fi.', 3000, 'room-2.jpg'),
(3, 'Super Suite', 5, 3, 'Some of the adjectives guests use online to describe luxury hotel rooms are “elegant,” “posh,” “beautiful\".\r\n', 4000, 'room-3.jpg'),
(4, 'Family Room', 3, 2, 'The family room is designed to be a place where family and guests gather for group recreation.', 5000, 'room-4.jpeg\r\n'),
(5, 'Presidental Suite', 2, 1, 'Presidential suite and royal suite are common names for the most expensive suite in a luxury hotel.', 6000, 'room-8.jpeg'),
(6, 'Standard Suite ', 1, 1, 'Standard suite rooms. In comparison to most hotel rooms, standard suite rooms tend to be larger.', 2000, 'room-5.webp'),
(7, 'Twin Double Room', 2, 2, 'Some double rooms may also include additional features such as a television, mini-fridge, or balcony.', 4000, 'room-9.jpeg'),
(8, 'Balcony room', 1, 1, 'A balcony room contains one double bed / balcony to see beautiful view. ... It may include amenities.', 2000, 'room-10.jpeg\r\n'),
(9, 'Triple Bed Room', 3, 2, 'A room that can accommodate three persons and has been fitted with three twin beds i.e three double bed.', 5000, 'room-11.jpeg'),
(10, 'Queen Room', 1, 1, 'A room with a queen-sized bed. May be occupied by one or more people.  The room size is large.', 4000, 'room-6.webp'),
(11, 'King Room', 1, 1, ' A room with a king-sized bed. May be occupied by one or more people.  The room size is large.\r\n', 4000, 'room-7.jpeg\r\n'),
(12, 'Studio Room', 1, 1, 'A room with a studio bed- a couch which can be converted into a bed. May also have an additional bed.', 2000, 'room-12.jpeg'),
(13, 'Murphy Room', 1, 1, 'A room that is fitted with a sofa bed or a Murphy bed.', 3000, 'room-13.jpeg\r\n'),
(14, 'Sample Room', 1, 1, 'The sample room,  is a room found in hotel only for show room purpose.', 3000, 'room-14.webp'),
(15, 'Couch Room', 1, 1, 'A suite contains a room separate from the offered bedroom.', 3000, 'room-15.jpeg'),
(16, 'Single Room', 1, 1, 'The room can be simple and small, but it offers everything you need to ensure your stay there is as comfortable as it can be. ', 2000, 'room-16.jpeg'),
(17, 'Quad Room', 4, 2, 'This type of hotel room is suitable for families who are on vacation. The room may contain two or more beds.', 6000, 'room-121.webp'),
(18, 'Suite', 1, 1, 'Hotel suites are different in size. In most hotels, a suite contains a room separate from the offered bedroom. ', 1500, 'room-17.jpeg'),
(19, 'Mini Suite', 1, 1, 'This is just a smaller version of the master suite. It has a single bedroom and a sitting area, which offers an ideal working space inside your room.', 2000, 'room-19.webp'),
(20, 'Apartment Style', 1, 1, 'These rooms are designed in a manner that guests can fix their own food and stay comfortably. They may have housekeeping services.', 2000, 'room-18.webp'),
(21, 'Standard Room ', 1, 1, 'Standard rooms are similar to single or queen room types. They are appropriate for couples or lone travelers. It also includes basic amenities.', 3000, 'room-22.webp'),
(22, 'Deluxe Room', 1, 1, ' The deluxe hotel room includes several rooms, usually a living room and a bedroom. You may also find some deluxe rooms with a separate functional kitchen.', 2500, 'room-23.webp'),
(23, 'Super deluxe', 1, 1, 'For luxury lovers, a super deluxe hotel room might just be the ideal room option for you. Interestingly these rooms are available in almost any standard hotel.', 4000, 'room-24.jpeg'),
(24, 'Joint Room', 1, 1, 'Joint rooms are also known as adjoining rooms. These are two rooms that have a common wall but do not have a common connecting door. ', 4500, 'room-88.jpeg'),
(25, 'Penthouse Room', 1, 1, 'A penthouse is a unit or an apartment on the highest floor of a hotel, condominium, or apartment building. They’re different from other apartments.', 4500, 'room-25.webp'),
(26, 'Villa', 4, 2, 'Villas are types of hotel rooms that offer an ideal getaway for those who are tired of the hustle and bustle of city life. Villas usually provide a comfortable.', 7000, 'room-122.webp'),
(27, 'Connectng Room', 2, 2, 'These are hotel room options with separate entrance doors from the outside, and a connecting door. This enables guests to freely move between the rooms.', 4000, 'room-123.webp'),
(28, 'Junior Suite', 1, 1, 'Cozy and spacious rooms with private bathroom, air conditioning, daily cleaning, color tv, free WI-FI.', 2000, 'room-20.jpeg'),
(29, 'Executive Suite', 1, 1, 'Hotels near Sri Ramachandra Medical College. Clean and Tidy Rooms. Hotels in Iyappanthangal. Free Wi-Fi.', 3000, 'room-26.jpeg'),
(30, 'Super Suite', 1, 1, 'Some of the adjectives guests use online to describe luxury hotel rooms are “elegant,” “posh,” “beautiful\".', 4000, 'room-27.webp'),
(31, 'Hollywood Room', 1, 2, 'This room provides two single beds with a common headboard. If a need arises, the two beds can be brought together to form a double bed.', 3000, 'room-33.jpeg'),
(32, 'Cabana Room', 1, 1, 'In the hotel, this type of room faces water body, beach, or a swimming pool. It generally has a large balcony and you can use these water bodies.', 5000, 'room-56.jpeg'),
(33, 'Suite', 1, 1, 'Almost all hotel suites are different in size. In most hotels, a suite contains a room separate from the offered bedroom.', 1500, 'room-28.webp'),
(34, 'Twin Bed Room', 1, 1, ' A room with two twin beds. May be occupied by one or more people.  The area of Twin Rooms are generally 40m/sq.', 4000, 'room-37.jpeg'),
(35, 'Triple Bed Room', 3, 1, 'A room that can accommodate three persons and has been fitted with three twin beds i.e three double bed.', 5000, 'room-55.webp'),
(36, 'Quad Room', 4, 2, 'This type of hotel room is suitable for families who are on vacation. The room may contain two or more beds.', 6000, 'room-124.jpg'),
(37, 'King Room', 1, 1, 'A room with a king-sized bed. May be occupied by one or more people. The room size is large.', 4000, 'room-36.webp'),
(38, 'Queen Room', 1, 1, 'A room with a queen-sized bed. May be occupied by one or more people. The room size is large.', 4000, 'room-52.webp'),
(39, 'couple Room', 1, 1, 'A couple-friendly hotel means a hotel that welcomes unmarried couples as their guests. These hotels respect the privacy.', 3500, 'room-125.jpg'),
(40, ' Suite', 1, 1, 'This is just a smaller version of the master suite. It has a single bedroom and a sitting area, which offers an ideal working space inside your room.', 2500, 'room-29.webp'),
(41, 'Balcony Room', 1, 1, 'A balcony room contains one double bed / balcony to see beautiful view. It may include amenities such as chair, table and wardrobe.', 2000, 'room-30.jpeg'),
(42, 'Apartment Suite', 1, 1, 'These rooms are designed in a manner that guests can fix their own food and stay comfortably. They may have housekeeping services.', 2500, 'room-34.jpeg'),
(43, 'Mini Suite', 1, 1, 'This is just a smaller version of the master suite. It has a single bedroom and a sitting area, which offers an ideal working space inside your room.', 2000, 'room-35.jpeg'),
(44, 'Super Suite', 1, 1, 'For luxury lovers, a super deluxe hotel room might just be the ideal room option for you. Interestingly these rooms are available in almost any standard hotel.', 4000, 'room-38.webp\r\n'),
(45, 'Deluxe Suite', 1, 1, 'The deluxe hotel room includes several rooms, usually a living room and a bedroom. You may also find some deluxe rooms with a separate functional kitchen.', 3000, 'room-39.webp'),
(46, 'Murphy Room', 1, 1, 'A room that is fitted with a sofa bed or a Murphy bed.', 3000, 'room-31.jpeg'),
(47, 'Suite', 1, 1, 'Hotel suites are different in size. In most hotels, a suite contains a room separate from the offered bedroom.', 2000, 'room-32.jpg'),
(48, 'Standard Suite', 1, 1, 'Standard suite rooms. In comparison to most hotel rooms, standard suite rooms tend to be larger.', 2000, 'room-40.webp\r\n'),
(49, 'Family Room', 1, 1, 'The family room is designed to be a place where family and guests gather for group recreation.', 3000, 'room-41.webp'),
(50, 'Presidential Suite', 1, 1, 'Presidential suite and royal suite are common names for the most expensive suite in a luxury hotel.', 4000, 'room-42.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Sno`, `Name`, `Email`, `Password`) VALUES
(1, 'Pragati garg', 'Pragati@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `n_sno` int(11) NOT NULL,
  `n_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`n_sno`, `n_email`) VALUES
(1, 'pragati@gmail.com'),
(2, 'niti5352@gmail.com'),
(3, 'ritikagoel7366@gmail.com'),
(4, 'bhuvan@gmail.com'),
(5, 'pragati@gmail.com'),
(6, 'kamal@gmail.com'),
(13, 'aadi@gmail.com'),
(14, 'aadi@gmail.com'),
(15, 'niti@gmail.com'),
(16, 'Ruhi@gmail.com'),
(17, 'harshit@gmail.com'),
(18, 'yukti@gmail.com'),
(19, 'eva@gmail.com'),
(20, 'Mani@gmail.com'),
(21, 'elena@gmail.com'),
(23, 'daisy@gmail.com'),
(24, 'david@gmail.com'),
(25, 'john@gmail.com'),
(26, 'maria@gmail.com'),
(27, 'ryan@gmail.com'),
(28, 'saanvi@gmail.com'),
(29, 'divya@gmail.com'),
(30, 'moon@gmail.com'),
(31, 'pragati@gmail.com'),
(32, 'pragati@gmail.com'),
(33, 'pragati@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Sno.` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `r_name` varchar(40) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_location` varchar(30) NOT NULL,
  `r_review` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Sno.`, `r_id`, `r_name`, `r_email`, `r_location`, `r_review`) VALUES
(1, 5, 'Pragati garg', 'pragati@gmail.com', 'Patiala', 'Great location, really pleasant and clean rooms, but the thing that makes this such a good place to stay are the staff. All of the people are incredibly helpful and generous with their time and advice.'),
(2, 6, 'kamal', 'kamal@gmail.com', 'Ropar', 'We travelled with two six year olds and lots of luggage and despite the stairs up to the elevator this was one of the nicest places we stayed in the four weeks we were in Europe.'),
(9, 16, 'Aadi', 'aadi@gmail.com', 'Ambala', '\"Super nice hotel!\r\nGreat hotel. Everything was nice. Me and my colleagues would surely choose it again next time we visit Helsinki. Great location, great service, friendly staff. Good value for the money. Breakfast was delicious. Very comfortable. Would definitely recommend Thank you!\"'),
(11, 8, 'Niti', 'niti@gmail.com', 'Karnal', '\"Great central location\r\nI stayed at Hotel Arthur for a night, really enjoyed its location in the city centre where everything is within walking distance. The staff was very helpful, breakfast really delicious, and the room nice. I appreciated the luggage room option as well.\"'),
(12, 9, 'Ruhi', 'Ruhi@gmail.com', 'Shimla', 'The room was very spacious, clean, and had the amenities we needed. Breakfast was delicious and with many choices; it was a very wide buffet spread. The people in the reception were very helpful, not just on checkin and checkout, but also in giving directions to spot.'),
(13, 7, 'Harshit', 'harshit@gmail.com', 'Madhya Pardesh', 'The room was very spacious, clean, and had the amenities we needed. Breakfast was delicious and with many choices; it was a very wide buffet spread. The people in the reception were very helpful, not just on checkin and checkout, but also in giving directions to spot'),
(14, 5, 'Yukti', 'yukti@gmail.com', 'Uttrakhand', '\"\"Beautiful stay!\r\nHotel Arthur is a perfect place to stay in Helsinki. It is close to the center and the railway station. The room was very pleasant, it was cozy and clean. Breakfast was excellent and incredibly varied. The hotel team has always been friendly, patient and helpful. That impressed me the most. No matter what time of day or night, you could turn to them with all your concerns.'),
(15, 5, 'Eva', 'eva@gmail.com', 'london', '\"The hotel room was clean, nice and spacious. Breakfast offered with a wide variety of food. The staff were friendly and helpful. The location is just perfect for a walk around the city centre.\"'),
(16, 7, 'Mani', 'Mani@gmail.com', 'Canada', '\"Homely friendly hotel\r\nOnly stayed 2 nights but the hotel has standard rooms and very clean. All the staff from reception to restaurant were really friendly.\r\nIt is vey central and walking distance of all local shops cafes and restaurants.'),
(17, 10, 'Elena', 'elena@gmail.com', 'Kerela', '\"Hospitality, kindness, cleanliness ans service were there as expected. I can only advise you to continue this way same if it would be nice to offer some croissants and pains au chocolats at the breakfast… Be sure if I had to come back in Helsinki in the future, I’ll come back there ! And I’d recommand certainly your Hôtel.\"'),
(19, 3, 'Daisy', 'daisy@gmail.com', 'Jaipur', '\"Nice\r\nWe stayed for 3 nights there,great location, the room was spacious, the people working at the reception very kind and helpful, breakfast was very good!! (But no croisant!!)\r\nClose to center,metro and railway station, 2 shopping centers (about 6-7 min walking),supermarket.\r\nI recomend it!!\"'),
(20, 3, 'David', 'david@gmail.com', 'Gurgaon', '\"Affordable price, excellent location!\r\nQuite smooth reservation process, very friendly service at the desk, clean & large room for two, very quiet over the rooftops of Helsinki - a very pleasant stay at the heart of Helsinki, in the middle of practically everything!\"'),
(21, 1, 'John', 'john@gmail.com', 'Singapur', '\"We stayed at Hotel Arthur on our trip to Helsinki and it was great. Location was perfect for walking to everything! Staff was helpful and breakfast was great. Room was perfect for my daughter and myself. The only thing was our room faced the main road and the traffic was noisy all night. Would definite stay here again!\"'),
(22, 8, 'Maria', 'maria@gmail.com', 'Amritsar', '\"The hotel located in the city center and lots of public transport, nearby restaurants, bars etc. The hotel staff are nice and friendly. Breakfast not bad. The room a bit small but the bed is really comfortable.\"'),
(23, 3, 'Ryaan', 'ryan@gmail.com', 'Gujrat', '\"Good relaxing break! Friendly, welcoming staff. Very good location for city centre and local transport. Overall an enjoyable stay. The hotel is old and could do with some renovation, but it seems like this issue is being addressed.\"'),
(24, 17, 'Saanvi', 'saanvi@gmail.com', 'Mansoori', 'I had a wonderful experience at the (HN). Every staff member I encountered, from the valet to the check- in to the cleaning staff were delightful and eager to help! Thank you! Will recommend to my colleagues!\r\n\r\n'),
(25, 17, 'Divya', 'divya@gmail.com', 'Delhi', 'The staff at this property are all great! They all go above and beyond to make your stay comfortable. Please give your staff awards!'),
(26, 1, 'Moon', 'moon@gmail.com', 'Chandigarh', 'Took advantage of the downtown location to walk to dinner, check out a couple galleries, and have drinks. It was great. Service top notch as always. Bed comfort can not be beat.');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `sno` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `b_name` varchar(30) NOT NULL,
  `b_email` varchar(50) NOT NULL,
  `b_checkin` varchar(200) NOT NULL,
  `b_checkout` varchar(200) NOT NULL,
  `b_adult` varchar(50) NOT NULL,
  `b_child` varchar(50) NOT NULL,
  `room_no` int(11) NOT NULL,
  `b_room` varchar(40) NOT NULL,
  `b_price` int(11) NOT NULL,
  `b_spclrqst` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`sno`, `U_id`, `b_name`, `b_email`, `b_checkin`, `b_checkout`, `b_adult`, `b_child`, `room_no`, `b_room`, `b_price`, `b_spclrqst`) VALUES
(12, 1, 'Pragati Garg', 'pragati@gamil.com', '07/03/2023 12:12 PM', '07/04/2023 12:12 PM', '1', '1', 6, 'Standard Suite ', 2000, 'no request'),
(13, 2, 'Niti', 'niti5352@gmail.com', '07/03/2023 12:12 PM', '07/04/2023 12:12 PM', '2', '0', 7, 'Twin Double Room', 4000, 'I have no request.'),
(14, 1, 'Pragati garg', 'pragati@gmail.com', '07/08/2023 3:10 PM', '07/09/2023 3:10 PM', '1', '1', 9, 'Triple Bed Room', 5000, 'no request'),
(15, 3, 'Ruhi', 'ruhi986@gmail.com', '07/08/2023 3:10 PM', '07/09/2023 3:10 PM', '3', '2', 5, 'Presidental Suite', 6000, 'I have no any request.'),
(16, 1, 'Pragati garg', 'pragati@gmail.com', '08/01/2023 3:09 PM', '08/01/2023 3:09 PM', '2', '0', 5, 'Presidental Suite', 6000, 'no request'),
(27, 1, 'Pragati garg', 'pragati@gmail.com', '07/03/2023 12:12 PM', '07/04/2023 12:12 PM', '1', '0', 8, 'Balcony room', 2000, ''),
(28, 1, 'Pragati garg', 'pragati@gmail.com', '09/11/2023 12:21 PM', '09/13/2023 12:21 PM', '0', '0', 2, 'Executive Suite', 3000, '');

-- --------------------------------------------------------

--
-- Table structure for table `savelater`
--

CREATE TABLE `savelater` (
  `sno` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `Bed` int(11) NOT NULL,
  `Bath` int(11) NOT NULL,
  `Description` varchar(600) NOT NULL,
  `Price` int(200) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `savelater`
--

INSERT INTO `savelater` (`sno`, `id`, `U_id`, `Type`, `Bed`, `Bath`, `Description`, `Price`, `Image`) VALUES
(4, 4, 1, 'Family Room', 3, 2, 'The family room is designed to be a place where family and guests gather for group recreation.', 5000, 'room-4.jpeg\r\n'),
(5, 1, 1, 'Junior Suite', 3, 2, 'Cozy and spacious rooms with private bathroom, air conditioning, daily cleaning, color tv, free WI-FI.', 2000, 'room-1.jpg'),
(8, 10, 1, 'Queen Room', 1, 1, 'A room with a queen-sized bed. May be occupied by one or more people.  The room size is large.', 4000, 'room-6.webp'),
(9, 8, 2, 'Balcony room', 1, 1, 'A balcony room contains one double bed / balcony to see beautiful view. ... It may include amenities.', 2000, 'room-10.jpeg\r\n'),
(10, 6, 2, 'Standard Suite ', 1, 1, 'Standard suite rooms. In comparison to most hotel rooms, standard suite rooms tend to be larger.', 2000, 'room-5.webp'),
(11, 3, 2, 'Super Suite', 5, 3, 'Some of the adjectives guests use online to describe luxury hotel rooms are “elegant,” “posh,” “beautiful\".\r\n', 4000, 'room-3.jpg'),
(12, 3, 1, 'Super Suite', 5, 3, 'Some of the adjectives guests use online to describe luxury hotel rooms are “elegant,” “posh,” “beautiful\".\r\n', 4000, 'room-3.jpg'),
(13, 9, 17, 'Triple Bed Room', 3, 2, 'A room that can accommodate three persons and has been fitted with three twin beds i.e three double bed.', 5000, 'room-11.jpeg'),
(14, 48, 1, 'Standard Suite', 1, 1, 'Standard suite rooms. In comparison to most hotel rooms, standard suite rooms tend to be larger.', 2000, 'room-40.webp\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Sno`, `Name`, `Email`, `Password`) VALUES
(1, 'Pragati garg', 'pragati@gmail.com', '123456'),
(2, 'Niti', 'niti5352@gmail.com', '98765'),
(3, 'Ruhi', 'ruhi986@gmail.com', '8765'),
(10, 'Prag', 'pragati6352@gmail.com', '4567'),
(14, 'Yukti', 'yukti@gmail.com', 'yukti'),
(17, 'Etti', 'etti@gmail.com', 'etti'),
(19, 'bhuvan', 'bhuvan@gmail.com', 'bhuvan'),
(20, 'Robin ', 'robin@gmail.com', '8312'),
(21, 'Robin ', 'robin@gmail.com', '8312'),
(22, 'jass', 'jass@gmail.com', 'jass'),
(23, 'prag', 'prag@gmail.com', '9876'),
(24, 'aaryan', 'aaryan@gmail.com', 'aaryan'),
(25, 'Ridhima', 'ridhima@gmail.com', '8474');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sno` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sno`, `title`, `Image`) VALUES
(1, 'Making your stay memorable', 's1.jpeg'),
(2, ' You are the reason we come to work', 'carousel-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sno` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sno`, `Name`, `Type`, `Image`) VALUES
(2, 'Jaxon', 'Owner', 'team-4.jpg'),
(3, 'William', 'Hotel Manager', 'team-2.jpg'),
(4, 'Bhuvan', 'Front Office', 'team-3.jpg'),
(6, 'Daksh', 'Suprivisor', '5.webp'),
(7, 'Rubal', 'Assistant General Manager ', '6.jpeg'),
(8, 'Paras', 'Event and Party Manager', '7.webp'),
(9, 'Aayush', 'Chef', 'team-1.jpg'),
(10, 'Mohan', 'Hotel clerk', '10.webp'),
(11, 'Abhiram', 'Front desk manager', '9.jpeg'),
(12, 'Azaan', 'Parking Manager', '12.webp'),
(13, 'Faraj', 'Concierge', '11.webp'),
(14, 'Jai', 'Executive Chef', '13.webp'),
(15, 'Parth', 'Valet Attendant', '14.webp'),
(16, 'Reyansh', 'Hotel Receptionist', '15.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `totalvisitor`
--

CREATE TABLE `totalvisitor` (
  `sno` int(11) NOT NULL,
  `ip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `totalvisitor`
--

INSERT INTO `totalvisitor` (`sno`, `ip`) VALUES
(1, '::1'),
(2, '::1'),
(3, '::1'),
(4, '::1'),
(5, '::1'),
(6, '::1'),
(7, '::1'),
(8, '::1'),
(9, '::1'),
(10, '::1'),
(11, '::1'),
(12, '::1'),
(13, '::1'),
(14, '::1'),
(15, '::1'),
(16, '::1'),
(17, '::1'),
(18, '::1'),
(19, '::1'),
(20, '::1'),
(21, '::1'),
(22, '::1'),
(23, '::1'),
(24, '::1'),
(25, '::1'),
(26, '::1'),
(27, '::1'),
(28, '::1'),
(29, '::1'),
(30, '::1'),
(31, '::1'),
(32, '::1'),
(33, '::1'),
(34, '::1'),
(35, '::1'),
(36, '::1'),
(37, '::1'),
(38, '::1'),
(39, '::1'),
(40, '::1'),
(41, '::1'),
(42, '::1'),
(43, '::1'),
(44, '::1'),
(45, '::1'),
(46, '::1'),
(47, '::1'),
(48, '::1'),
(49, '::1'),
(50, '::1'),
(51, '::1'),
(52, '::1'),
(53, '::1'),
(54, '::1'),
(55, '::1'),
(56, '::1'),
(57, '::1'),
(58, '::1'),
(59, '::1'),
(60, '::1'),
(61, '::1'),
(62, '::1'),
(63, '::1'),
(64, '::1'),
(65, '::1'),
(66, '::1'),
(67, '::1'),
(68, '::1'),
(69, '::1'),
(70, '::1'),
(71, '::1'),
(72, '::1'),
(73, '::1'),
(74, '::1'),
(75, '::1'),
(76, '::1'),
(77, '::1'),
(78, '::1'),
(79, '::1'),
(80, '::1'),
(81, '::1'),
(82, '::1'),
(83, '::1'),
(84, '::1'),
(85, '::1'),
(86, '::1'),
(87, '::1'),
(88, '::1'),
(89, '::1'),
(90, '::1'),
(91, '::1'),
(92, '::1'),
(93, '::1'),
(94, '::1'),
(95, '::1'),
(96, '::1'),
(97, '::1'),
(98, '::1'),
(99, '::1'),
(100, '::1'),
(101, '::1'),
(102, '::1'),
(103, '::1'),
(104, '::1'),
(105, '::1'),
(106, '::1'),
(107, '::1'),
(108, '::1'),
(109, '::1'),
(110, '::1'),
(111, '::1'),
(112, '::1'),
(113, '::1'),
(114, '::1'),
(115, '::1'),
(116, '::1'),
(117, '::1'),
(118, '::1'),
(119, '::1'),
(120, '::1'),
(121, '::1'),
(122, '::1'),
(123, '::1'),
(124, '::1'),
(125, '::1'),
(126, '::1'),
(127, '::1'),
(128, '::1'),
(129, '::1'),
(130, '::1'),
(131, '::1'),
(132, '::1'),
(133, '::1'),
(134, '::1'),
(135, '::1'),
(136, '::1'),
(137, '::1'),
(138, '::1'),
(139, '::1'),
(140, '::1'),
(141, '::1'),
(142, '::1'),
(143, '::1'),
(144, '::1'),
(145, '::1'),
(146, '::1'),
(147, '::1'),
(148, '::1'),
(149, '::1'),
(150, '::1'),
(151, '::1'),
(152, '::1'),
(153, '::1'),
(154, '::1'),
(155, '::1'),
(156, '::1'),
(157, '::1'),
(158, '::1'),
(159, '::1'),
(160, '::1'),
(161, '::1'),
(162, '::1'),
(163, '::1'),
(164, '::1'),
(165, '::1'),
(166, '::1'),
(167, '::1'),
(168, '::1'),
(169, '::1'),
(170, '::1'),
(171, '::1'),
(172, '::1'),
(173, '::1'),
(174, '::1'),
(175, '::1'),
(176, '::1'),
(177, '::1'),
(178, '::1'),
(179, '::1'),
(180, '::1'),
(181, '::1'),
(182, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addroom`
--
ALTER TABLE `addroom`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`n_sno`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Sno.`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `savelater`
--
ALTER TABLE `savelater`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `totalvisitor`
--
ALTER TABLE `totalvisitor`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addroom`
--
ALTER TABLE `addroom`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `n_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Sno.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `savelater`
--
ALTER TABLE `savelater`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `totalvisitor`
--
ALTER TABLE `totalvisitor`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
