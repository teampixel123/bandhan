-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 06:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `exclusion`
--

CREATE TABLE `exclusion` (
  `id` int(20) NOT NULL,
  `tour_id` int(50) NOT NULL,
  `exclusion_num` int(50) NOT NULL,
  `exclusion_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exclusion`
--

INSERT INTO `exclusion` (`id`, `tour_id`, `exclusion_num`, `exclusion_description`) VALUES
(1, 246831, 1, '5% GST Applicable on Total Billing. '),
(2, 246831, 2, 'Up to Guwahati any kind of airfare & Train /Bus fare'),
(3, 246831, 3, 'Any travel or medical insurance.'),
(4, 246831, 4, 'Any expenses of personal nature like tips, laundry, etc'),
(5, 246831, 5, 'Camera fees'),
(6, 246831, 6, 'Anything not included in the above inclusions'),
(7, 246831, 7, 'Any cost arising due to natural calamities, landslides, road blockage, political Disturbances, fuel price hike (to be borne by the client which is directly payable on the spot and as per  actual)'),
(8, 214596, 1, '5% GST Applicable on Total Billing. '),
(9, 214596, 2, 'Up to Guwahati any kind of airfare & Train /Bus fare'),
(10, 214596, 3, 'Any travel or medical insurance.'),
(11, 214596, 4, 'Any expenses of personal nature like tips, laundry, etc'),
(12, 214596, 5, 'Camera fees'),
(13, 214596, 6, 'Anything not included in the above inclusions'),
(14, 214596, 7, 'Any cost arising due to natural calamities, landslides, road blockage, political Disturbances, fuel price hike (to be borne by the client which is directly payable on the spot and as per  actual)'),
(15, 618973, 1, '5% GST Applicable on Total Billing.'),
(16, 618973, 2, 'Up to & from Jaipur any kind of airfare & Train /Bus fare'),
(17, 618973, 3, 'Any travel or medical insurance.'),
(18, 618973, 4, 'Any expenses of personal nature like tips, laundry, etc'),
(19, 618973, 5, 'Activities in Periyar wild life sanctuary.'),
(20, 618973, 6, 'Camera fees'),
(21, 618973, 7, 'Anything not included in the above inclusions'),
(22, 618973, 8, 'Any cost arising due to natural calamities, landslides, road blockage, political Disturbances, fuel price hike (to be borne by the client which is directly payable on the spot and as per  actual)'),
(23, 759648, 1, '5% GST Applicable on Total Billing.'),
(24, 759648, 2, 'Up to & from Jaipur any kind of airfare & Train /Bus fare'),
(25, 759648, 3, 'Any travel or medical insurance.'),
(26, 759648, 4, 'Any expenses of personal nature like tips, laundry, etc'),
(27, 759648, 5, 'Activities in Periyar wild life sanctuary. '),
(28, 759648, 6, 'Camera fees'),
(29, 759648, 7, 'Anything not included in the above inclusions'),
(30, 759648, 8, 'Any cost arising due to natural calamities, landslides, road blockage, political Disturbances, fuel price hike (to be borne by the client which is directly payable on the spot and as per  actual)');

-- --------------------------------------------------------

--
-- Table structure for table `inclusion`
--

CREATE TABLE `inclusion` (
  `id` int(20) NOT NULL,
  `tour_id` int(50) NOT NULL,
  `inclusion_num` int(50) NOT NULL,
  `inclusion_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inclusion`
--

INSERT INTO `inclusion` (`id`, `tour_id`, `inclusion_num`, `inclusion_description`) VALUES
(1, 246831, 1, 'Meet & Greet upon arrival at Airport.'),
(2, 246831, 2, 'All accommodation on double sharing basis and as per itinerary'),
(3, 246831, 3, 'MEAL PLAN APAI (Breakfast, Lunch & Dinner)'),
(4, 246831, 4, 'Inner Line Permit'),
(5, 246831, 5, 'Evening River Cruise'),
(6, 246831, 6, 'Elephant Safari/10 Pax'),
(7, 246831, 7, 'Jeep Safari by 02 Jeep / 10 Pax '),
(8, 246831, 8, 'Cultural Programme at Kaziranga National Park.'),
(9, 246831, 9, 'All applicable Transfers & Sightseeing by AC vehicle which will be at disposal and will be exclusively used for the guest as per the itinerary only (on point to point basis). This vehicle will also change sector wise. All Driver Allowance & Parking Fees'),
(10, 214596, 1, 'Meet & Greet upon arrival at Airport.'),
(11, 214596, 2, 'All accommodation on double sharing basis and as per itinerary'),
(12, 214596, 3, 'MEAL PLAN APAI (Breakfast , Lunch & Dinner)'),
(13, 214596, 4, 'Inner Line Permit'),
(14, 214596, 5, 'Evening River Cruise'),
(15, 214596, 6, 'Bumla Pass/China Border visit by 02 Sumo/Bolero Car'),
(16, 214596, 7, 'Elephant Safari/10 Pax'),
(17, 214596, 8, 'Jeep Safari by 02 Jeep / 10 Pax '),
(18, 214596, 9, 'Cultural Programme at Kaziranga National Park.'),
(19, 214596, 10, 'All applicable Transfers & Sightseeing by AC vehicle which will be at disposal and will be exclusively used for the guest as per the itinerary only (on point to point basis). This vehicle will also change sector wise. All Driver Allowance & Parking Fees'),
(20, 618973, 1, 'Pick up,& drop at Jaipur airport/ Railway station by arranged vehicle.'),
(21, 618973, 2, '\r\nAll accommodation on Twin /Triple Sharing basis.'),
(22, 618973, 3, 'All Meal as per mentioned itinerary.'),
(23, 618973, 4, '2 Lt. Water Bottle per person per day '),
(24, 618973, 5, 'All Tips – Guide, Driver & Restaurants'),
(25, 618973, 6, 'All toll taxes, parking'),
(26, 759648, 1, 'Pick up Jaipur airport/ Railway station& drop at udaipurairport/ Railway station by arranged vehicle.'),
(27, 759648, 2, 'All accommodation on Twin /Triple Sharing basis.'),
(28, 759648, 3, 'All Meal as per mentioned itinerary.'),
(29, 759648, 4, '2 Lt. Water Bottle per person per day '),
(30, 759648, 5, 'All Tips – Guide, Driver & Restaurants'),
(31, 759648, 6, 'All toll taxes, parking');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `id` int(20) NOT NULL,
  `tour_id` int(50) NOT NULL,
  `itinerary_day_num` int(50) NOT NULL,
  `itinerary_day_title` varchar(250) NOT NULL,
  `itinerary_day_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`id`, `tour_id`, `itinerary_day_num`, `itinerary_day_title`, `itinerary_day_description`) VALUES
(1, 246831, 1, 'Mumbai- Guwahati By Air', 'Arrive at Guwahati. On arrival at Guwahati Airport, assistance and warm traditional welcome by our representative. Check in to hotel refresh then proceed to sightseeing Sri Shankar deva Kalakshetra-a cultural centre with a fine exposition of the life and culture of thepeople of Assam, Evening River Cruise on the mighty river Brahmaputra (subject to availability).'),
(2, 246831, 2, 'Guwahati – Shillong By Road ', 'After breakfast  get Darshan of kamakhyadevi temple and proceed to Shillong. Shillong, also known as ‘The Scotland of the East’ is the capital city of Meghalaya. En route you will visit the largest manmade lake of Northeast India – Umium Lake. Reaching Shillong after 3 hours journey (approximately), we check-in at a city Hotel. After freshen up visit Cathedral of Marry & the Polo Ground.Also visit Don Bosco Museum, Ward’s Lake located at the heart of the city which is popular for its garden walks and boating, Meghalaya State Museum where Meghalaya’s tribal culture and heritage are well displayed, LadyHyadri Park.Overnight in Shillong.'),
(3, 246831, 3, 'Shillong- Cherrapunjee – Shillong  ', 'Morning after breakfast drive to Cherrapunjee which is famed for being the wettest place in the world. After a drive of 1 ½ hours amid pine trees and mists we reach Cherrapunjee. Cherrapunjee possesses some exotic waterfalls and impressive limestone caves. In Cherrapunji, we visit the Nohkalikai Falls, Seven sister falls, Mawsmai Caves, Rama Krishna Mission, Eco Park and the Thangkharang Park. Later back to Shillong.Overnight at Shillong. '),
(4, 246831, 4, 'Shillong -Mawlynnong-Dawki – Shillong ', 'Wake up early and have your breakfast and drive to Mawlynnong. Today you can explore the cleanest village Mawlynnong in the world. You can take the sky walk. Spectacular view of the living Root Bridge. After lunch drive to Dawki. Dawki is the gateway to Bangladesh where major export and import transactions take place. It is a splendid drive of 45 kilometers passing through deep gorges and ravines, which is certainly a thrilling experience. On approaching Dawki is the Umngot river, he Umngotriver is the natural boundary between RiPnar or Jaintia Hills with HimaKhyrim of Khasi hills over which is a single span suspension bridge was constructed. Later back to Shillong.Overnight at Shillong.'),
(5, 246831, 5, 'Shillong– Kaziranga National Park    ', 'After breakfast transfer to Kaziranga National Park. Kaziranga National Park n the heart of Assam, covering an area of 430 sq-kms, is inhabited by the world\'s largest population of one-horned rhinoceroses, as well as many mammals, including tigers, elephants, panthers and bears, and thousands of birds. In 1985, it was declared a World Heritage Siteby UNESCO for its unique natural environment. Evening visit tea Garden near by the park   Overnight stay in resort in Kaziranga.'),
(6, 246831, 6, 'Jungle Activity At Kaziranga National Park', 'After an early wake up, you will be taken to the riding point in the Central Range (Kohora) for an Elephant Ride. After the ride return back to the Hotel. On arrival Get breakfast then free time. Evening Enjoy Central Range (Kohora) of the park for a jeep safari. After Jeep Safari enjoy local Cultural Programme (Subject to Availability).Overnight at Kaziranga.'),
(7, 246831, 7, 'Kaziranga National Park - Guwahati  ', 'After breakfast check out from the Hotel and proceed to Guwahati .Reached Guwahati check in at city hotel. Evening free for leisure.Over night at Guwahati.'),
(8, 246831, 8, 'Guwahati Airport', 'Today after breakfastUmananda Temple (the peacock Island) Balaji Temple & Basistha Ashram. check out from the hotel and visit local market at Guwahati (if time permit).Later drive to Guwahati airport. \r\n<br> <b>TOUR ENDS WITH SWEET MEMORIES.</b> \r\n'),
(9, 214596, 1, 'Mumbai- Guwahati By Air', 'Arrive at Guwahati. On arrival at Guwahati Airport, assistance and warm traditional welcome by our representative. Check in to hotel refresh then proceed to sightseeing Sri Shankar deva Kalakshetra-a cultural centre with a fine exposition of the life and culture of thepeople of Assam, Evening River Cruise on the mighty river Brahmaputra (subject to availability).'),
(10, 214596, 2, 'Guwahati – Shillong By Road ', 'After breakfast  get Darshan of kamakhyadevi temple and proceed to Shillong. Shillong, also known as ‘The Scotland of the East’ is the capital city of Meghalaya. En route you will visit the largest manmade lake of Northeast India – Umium Lake. Reaching Shillong after 3 hours journey (approximately), we check-in at a city Hotel. After freshen up visit Cathedral of Marry & the Polo Ground.Also visit Don Bosco Museum, Ward’s Lake located at the heart of the city which is popular for its garden walks and boating, Meghalaya State Museum where Meghalaya’s tribal culture and heritage are well displayed, LadyHyadri Park.Overnight in Shillong.'),
(11, 214596, 3, 'Shillong- Cherrapunjee – Shillong  ', 'Morning after breakfast drive to Cherrapunjee which is famed for being the wettest place in the world. After a drive of 1 ½ hours amid pine trees and mists we reach Cherrapunjee. Cherrapunjee possesses some exotic waterfalls and impressive limestone caves. In Cherrapunji, we visit the Nohkalikai Falls, Seven sister falls, Mawsmai Caves, Rama Krishna Mission, Eco Park and the Thangkharang Park. Later back to Shillong.Overnight at Shillong.          '),
(12, 214596, 4, 'Shillong -Mawlynnong-Dawki – Shillong ', 'Wake up early and have your breakfast and drive to Mawlynnong. Today you can explore the cleanest village Mawlynnong in the world. You can take the sky walk. Spectacular view of the living Root Bridge. After lunch drive to Dawki. Dawki is the gateway to Bangladesh where major export and import transactions take place. It is a splendid drive of 45 kilometers passing through deep gorges and ravines, which is certainly a thrilling experience. On approaching Dawki is the Umngot river, he Umngot river is the natural boundary between Ri Pnar or Jaintia Hills with Hima Khyrim of Khasi hills over which is a single span suspension bridge was constructed. Later back to Shillong. Overnight at Shillong.'),
(13, 214596, 5, 'Shillong– Kaziranga National Park', 'After breakfast transfer to Kaziranga National Park. Kaziranga National Park n the heart of Assam, covering an area of 430 sq-kms, is inhabited by the world\'s largest population of one-horned rhinoceroses, as well as many mammals, including tigers, elephants, panthers and bears, and thousands of birds. In 1985, it was declared a World Heritage Siteby UNESCO for its unique natural environment. Evening visit tea Garden near by the park   Overnight stay in resort in Kaziranga.'),
(14, 214596, 6, 'Jungle Activity At Kaziranga National Park', 'After an early wake up, you will be taken to the riding point in the Central Range (Kohora) for an Elephant Ride. After the ride return back to the Hotel. On arrival Get breakfast then free time. Evening Enjoy Central Range (Kohora) of the park for a jeep safari. After Jeep Safari enjoy local Cultural Programme (Subject to Availability).Overnight at Kaziranga.'),
(15, 214596, 7, 'Kaziranga National Park - Bomdila ', 'After breakfast drive to Bomdila (200km 7hrs). En-route visit Tipi Orchidarium, a glass house with over 7500 Orchids. Overnight stay in Hotel in Bomdila.'),
(16, 214596, 8, 'Bomdila –Tawang', 'At Morning Visit the kiwi gardens. After viewing the beautiful valley of Dirang overlooking the river and inhabited by colorful tribes, proceed towards the Sela Pass (13703 ft) spend some lovely times by the paradise lake. Reaching Tawang (143 km, 7hrs) check in at hotel overnight at Tawang.'),
(17, 214596, 9, 'Tawang  ', 'After breakfast explore Tawang Monastery, founded by Mera Lama Lodre Gyaltso during 17th Century A.D. a contemporary of the fifth Dalai Lama. Evening free for leisure or shopping in the local market. Overnight at Hotel Tawang.'),
(18, 214596, 10, 'Tawang ', 'Today after breakfast Visit Maduri lake, China Border, & The Tawang Gompa is definitely the high point of the town, with a commanding view of the splendid valleys beyond. Also visit the War memorial. Evening free for Shopping and leisure. Overnight in Tawang.'),
(19, 214596, 11, 'Tawang – Dirang ', 'Early morning, drive to Jang to get a breath taking view of waterfalls. Pay homage at the Jashwant Garh Indo Chinese War Memorial and down hill drive (185km, 7hrs) to Dirang. Overnight at Hotel at Dirang.'),
(20, 214596, 12, 'Dirang – Guwahati   ', 'After breakfast check out from the Hotel and proceed to Guwahati .Reached Guwahati check in at city hotel. Evening free for leisure. Overnight at Guwahati.'),
(21, 214596, 13, 'Guwahati Airport ', 'Today after breakfast& Basistha Ashram.Sri Shankar deva Kalakshetra-a cultural centre with a fine exposition of the life and culture of thepeople of Assam. check out from the hotel and visit local market at Guwahati (if time permit).Later drive to Guwahati airport. '),
(22, 618973, 1, 'Jaipur', 'Arrive Jaipur airport. Meet and Greet with assistant. Proceed to hotel & check in to hotel. Evening  proceed to Choki-Dhani , here we can enjoy Rajasthani  food with Traditional Folk dance. Overnight stay at Jaipur.'),
(23, 618973, 2, 'Jaipur', 'After breakfast explore jaipur  covering  with JantarMantar – monument in Jaipur City Palace which includes the Chandra Mahal and Mubarak Mahal, Amer Fort – known for its artistic Hindu style elements, rest of time is free for shopping. Also visit Birla Temple which brightly lit in the night. Overnight stay at Jaipur.'),
(24, 618973, 3, 'Jaipur-Bikaner', 'After breakfast proceed to Bikaner, the city situated in the east border with Pakistan. En-route visit Deshnok which is famous for Karani Mata / Mouse Temple. Overnight stay at Bikaner.'),
(25, 618973, 4, 'Bikaner-Jaisalmer', 'After breakfast visit Camel breeding farm. Then proceed to JAISALMER.  On arrival check in to hotel. Overnight stay at  Jaisalmer.'),
(26, 618973, 5, 'Jaisalmer', 'After breakfast proceed to local sightseeing of golden city, Jaisalmer. Visit the Jaisal fort ( Golden Fort ), Jain Temple, Patwon ki Haveli. Gadisar Lake. After lunch proceed to Sand Dunes and enjoy Camel Ride, Evening enjoy sunset and Rajasthan Folk Dance. Overnight stay at Swiss Tent/Hotel.'),
(27, 618973, 6, 'Jaisalmer – Jodhpur', 'After breakfast proceed to jodhapur from Jaisalmer.on arrival check in to hotel. Day free for leisure .overnight stay at  \r\njodhapur\r\n'),
(28, 618973, 7, 'Jodhpur', 'After breakfast proceed visit UmaidBhavan Palace Museum, Mehrangarh Fort, built in the 20th century and houses Moti Mahal, Phool Mahal, Sheesh Mahal, SilahKhana, DaulatKhana and Rang Mahal. Later we visit JaswantThada, Overnight stay at Jodhpur Hotel.'),
(29, 618973, 8, 'Jodhpur-Pushkar-Ajmer-Jaipur', 'After Breakfast proceed to Jaipur. we visit Pushkar and Ajmer - both the places are major religious center for Muslim and Hindu Pilgrims respectively. We visit World only Lord Brahma Temple at Pushkar.And  famousDargah of KhwajaMuin-ud-din Chishti at Ajmer. Then proceed to jaipur. Overnight stay at Jaipur.'),
(30, 618973, 9, 'Jaipur', 'After breakfast proceed to jaipur airport. Tour ends with sweet memories.'),
(31, 759648, 1, 'Jaipur', 'Arrive Jaipur airport. Meet and Greet with assistant. Proceed to hotel & check in to hotel. Evening  proceed to Choki-Dhani , here we can enjoy Rajasthani  food with Traditional Folk dance. Overnight stay at Jaipur.'),
(32, 759648, 2, 'Jaipur', 'After breakfast explore jaipur  covering  with JantarMantar – monument in Jaipur City Palace which includes the Chandra Mahal and Mubarak Mahal, Amer Fort – known for its artistic Hindu style elements, rest of time is free for shopping. Also visit Birla Temple which brightly lit in the night. Overnight stay at Jaipur.'),
(33, 759648, 3, 'Jaipur-Ranthambore', 'Morning drive to Ranthambhore On arrival chek in to hotel then proceed to experience the thrilling safari. Day free for leisure.Overnight stay at Ranthambore.'),
(34, 759648, 4, 'Ranthambore- Chittorgarh', 'After breakfast proceed to chittorgarh. On arrival after refreshment explore  Chittorgarh Fort – Ranakumbha Palace, Meera Mandir, Vijay Stambha and Padmini\'s Palace. Overnight stay at Chittorgarh.'),
(35, 759648, 5, 'Chittorgarh-Udaipur', 'After breakfast proceed to Udaipur. On arrival check in to hotel and after refreshment proceed to visit MotiMagari also named as Pearl Hill – memorial of the Rajput hero MaharanaPratap. Also, visit at City Palace, Saheliyon-Ki-Bari, Lok Kala Mandal. The evening is free for shopping. Overnight stay at Udaipur.'),
(36, 759648, 6, 'Udaipur – Haldighati – Kumbhalgarh - Eklingaji – Udaipur', 'After breakfast visit Kumbhalgarh – the birth place of MaharanaPratap, Haldighati (Museum) If time permits, visit Nathdwara, a Temple dedicated to Lord Krishna &Eklingji Temple'),
(37, 759648, 7, 'Udaipur', 'After breakfast proceed to airport. Tour ends with sweet memories.');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(20) NOT NULL,
  `tour_id` int(50) NOT NULL,
  `tour_state` varchar(100) NOT NULL,
  `tour_name` varchar(250) NOT NULL,
  `tour_banner_img` varchar(250) NOT NULL,
  `tour_mobile_img` varchar(250) NOT NULL,
  `tour_city_num` int(50) NOT NULL,
  `tour_day_num` int(50) NOT NULL,
  `tour_start_city` varchar(250) NOT NULL,
  `tour_end_city` varchar(250) NOT NULL,
  `tour_price` int(50) NOT NULL,
  `tour_price_withgst` int(11) NOT NULL,
  `tour_overview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `tour_id`, `tour_state`, `tour_name`, `tour_banner_img`, `tour_mobile_img`, `tour_city_num`, `tour_day_num`, `tour_start_city`, `tour_end_city`, `tour_price`, `tour_price_withgst`, `tour_overview`) VALUES
(1, 246831, 'Northeast', 'Assam – Meghalaya ', 'tour_246831_421753.jpg', 'tour_mob_246831.jpg', 6, 9, 'Guwahati', 'Guwahati', 35500, 37275, 'North East India is a land of unexplored scenic beauty, quaint villages & towns, amazing nature phenomenon and bounty of diverse cultures.Explore the famous Kaziranga National Park in Assam and Shillong and Cherrapunji in the state of Meghalaya. The Kaziranga National Park is home to the one-horned rhino, the state animal of Assam, and a variety of other wild animals like the tigers, elephants, water buffalos and swamp deer. Meghalaya is one of the most beautiful states in India, dotted with cascading waterfalls, lush green forests and fog-filled roads. The 5-day tour is designed for people looking to experience the very best of Assam and Meghalaya.Visit Shillong\'s many natural wonders like the Mawsmai Cave, Nohkalikai Falls and Elephant Falls. Also, take an excursion to Mawlynnong that is the cleanest village in Asia to see the legendary Living Root Bridge. You also get to take a jeep safari and an elephant ride in the Kaziranga National Park that is home to the vibrant flora and fauna. So pack your bags and visit Meghalaya and Assam to get that much-needed breather.'),
(2, 214596, 'Northeast', 'Assam – Meghalaya-Arunachal Pradesh ', 'tour_214596.jpg', 'tour_mob_214596.jpg', 9, 13, 'Guwahati', 'Guwahati', 52200, 54810, 'They are all beautiful in their own way and have their own unique charm.Assam is best culmination of the beauty of North East, this Assam Meghalaya Arunachal Pradesh tour package will bring about the most serene chance of seeing the most beautiful parts of the North East India. Speaking of which, if you take these states one by one, you will find the place which is famous for the rolling hills covered in gardens of tea, while Meghalaya is known for its natural beauty, charming weather and the amazing culture of the people who call this place their home, and at the same time, Arunachal Pradesh is famous for the open society and the unmatched beauty and hospitality.North East India is a land of unexplored scenic beauty, quaint villages & towns, amazing nature phenomenon and bounty of diverse cultures. Explore the states of Assam & Meghalaya and get a glimpse of nature at its best on this tailormade tour.'),
(3, 618973, 'Rajastan', 'Rajasthan Marwad Special', 'tour_618973.jpg', 'tour_mob_618973.jpg', 6, 9, 'Jaipur ', 'Jaipur ', 28800, 30240, 'Padharo Mhare Des! Be pampered as a guest in colourful \'Rajasthan\' as you explore the beauty of Marwad. Nestled between the Aravali ranges, the Mewar region of Rajasthan offers the best of Rajput heritage, culture and the marvelous sights of its amazing cities.Explore Udaipur, Jaipur, Ranthambore and have the best Mewari experience on this tour! Indulge in the perfect break with a generous serving of culture, spread of flavours and soak in the sun of Jodhpur and the sands of Jaisalmer. Let\'s begin the journey of Rajasthan Marwad!'),
(4, 759648, 'Rajastan', 'Rajasthan Mewad Special', 'tour_759648.jpg', 'tour_mob_759648.jpg', 8, 7, 'Jaipur', 'Udaipur', 26800, 28140, 'A state that invites visitors with melodic tune of ‘Padhaaro Maare Desh’(Come to My Land), Rajasthan beckons the rich culture and history of India Located in the western part of the country, Rajasthan is renowned for its royal past and famed art and culture. With breathtaking attractions, the state allures travelers from all parts of the world. From legendary forts to National parks and pre-historic buildings, the tour offers great sightseeing options to all the travelers. Through this itinerary, you have a chance to explore Rajasthan culture through the artifacts, wooden carvings, colorful fabrics and bright turbans. In this tour, we take you to major cities of namely.A journey that offers the best of Rajasthan! Explore Udaipur, Jaipur, Mount Abu, Ranthambore and have the best Mewari experience on this tour!');

-- --------------------------------------------------------

--
-- Table structure for table `tour_cost`
--

CREATE TABLE `tour_cost` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `cost_person_type` varchar(250) NOT NULL,
  `cost_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_cost`
--

INSERT INTO `tour_cost` (`id`, `tour_id`, `cost_person_type`, `cost_rate`) VALUES
(1, 246831, 'Per Adult', 35500),
(2, 246831, 'Extra Adult (Above 12 Yrs Triple Sharing)', 25500),
(3, 246831, 'Child With Bed(5-11yrs)', 23500),
(4, 246831, 'Child Without Bed (5-11yrs)', 21500),
(5, 246831, 'Infant ( Below 5 Yrs)', 4900),
(6, 246831, 'Single Sharing', 48500),
(7, 214596, 'Per Adult', 52200),
(8, 214596, 'Extra Adult (Above 12 Yrs Triple Sharing)', 38200),
(9, 214596, 'Child With Bed(5-11yrs)', 34200),
(10, 214596, 'Child Without Bed (5-11yrs)', 30200),
(11, 214596, 'Infant ( Below 5 Yrs)', 6900),
(12, 214596, 'Single Sharing', 66200),
(13, 618973, 'Per Adult', 28800),
(14, 618973, 'Extra Adult (Above 12 Yrs Triple Sharing)', 26800),
(15, 618973, 'Child With Bed(5-11yrs)', 24800),
(16, 618973, 'Child Without Bed (5-11yrs)', 22800),
(17, 618973, 'Infant ( Below 5 Yrs)', 5900),
(18, 618973, 'Single Sharing', 41800),
(19, 759648, 'Per Adult', 26800),
(20, 759648, 'Extra Adult (Above 12 Yrs Triple Sharing)', 24800),
(21, 759648, 'Child With Bed(5-11yrs)', 22800),
(22, 759648, 'Child Without Bed (5-11yrs)', 20800),
(23, 759648, 'Infant ( Below 5 Yrs)', 5900),
(24, 759648, 'Single Sharing', 39800);

-- --------------------------------------------------------

--
-- Table structure for table `tour_dates`
--

CREATE TABLE `tour_dates` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `departure_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_dates`
--

INSERT INTO `tour_dates` (`id`, `tour_id`, `departure_date`) VALUES
(1, 246831, '30 Oct 2019'),
(2, 246831, '01 Nov 2019'),
(3, 246831, '07 Nov 2019'),
(4, 246831, '29 Nov 2019'),
(5, 246831, '11 Dec 2019'),
(7, 214596, '30 Oct 2019'),
(8, 214596, '01 Nov 2019'),
(9, 214596, '07 Nov 2019'),
(10, 214596, '29 Nov 2019'),
(11, 214596, '11 Dec 2019'),
(12, 214596, '23 Dec 2019'),
(13, 618973, '30 Oct 2019'),
(14, 618973, '01 Nov 2019'),
(15, 618973, '07 Nov 2019'),
(16, 759648, '30 Oct 2019'),
(17, 759648, '01 Dec 2019'),
(18, 759648, '07 Dec 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exclusion`
--
ALTER TABLE `exclusion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inclusion`
--
ALTER TABLE `inclusion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_cost`
--
ALTER TABLE `tour_cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_dates`
--
ALTER TABLE `tour_dates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exclusion`
--
ALTER TABLE `exclusion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `inclusion`
--
ALTER TABLE `inclusion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tour_cost`
--
ALTER TABLE `tour_cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tour_dates`
--
ALTER TABLE `tour_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
