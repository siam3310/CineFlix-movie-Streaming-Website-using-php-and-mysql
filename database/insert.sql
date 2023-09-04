-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 11:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insert`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_pricing_plan`
--

CREATE TABLE `add_pricing_plan` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `compatibility` varchar(255) DEFAULT NULL,
  `support` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_pricing_plan`
--

INSERT INTO `add_pricing_plan` (`plan_id`, `plan_name`, `price`, `duration`, `resolution`, `availability`, `compatibility`, `support`) VALUES
(1, 'Basic', '$24.99 / month', '7 days', '720p Resolution', 'Limited Availability', 'Desktop Only', 'Limited Support'),
(2, 'Premium', '$34.99 / month', '1 Month', 'Full HD', 'Lifetime Availability', 'TV & Desktop', '24/7 Support'),
(3, 'Cinematic', '$49.99 / month', '2 Months', 'Ultra HD', 'Lifetime Availability', 'Any Device', '24/7 Support');

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_item_movies`
--

CREATE TABLE `admin_add_item_movies` (
  `id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `release_year` int(11) NOT NULL,
  `runtime` varchar(255) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `upload_photos` varchar(255) DEFAULT NULL,
  `item_type` varchar(20) DEFAULT NULL,
  `movie_file` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `rating` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_add_item_movies`
--

INSERT INTO `admin_add_item_movies` (`id`, `cover`, `title`, `director`, `cast`, `description`, `release_year`, `runtime`, `quality`, `age`, `country`, `genre`, `upload_photos`, `item_type`, `movie_file`, `link`, `rating`) VALUES
(4, 'MV5BODI0ZTljYTMtODQ1NC00NmI0LTk1YWUtN2FlNDM1MDExMDlhXkEyXkFqcGdeQXVyMTM0NTUzNDIy._V1_FMjpg_UX1000_.jpg', 'Money heist', 'Director : Álex Pina', 'Álvaro Morte\r\nThe Professor\r\n\r\nÚrsula Corberó\r\nTokyo\r\n\r\nPedro Alonso\r\nBerlin\r\n\r\nItziar Ituño\r\nRaquel Murillo\r\n\r\nAlba Flores\r\nNairobi\r\n\r\nMiguel Herrán\r\nRio\r\n\r\nJaime Lorente\r\nDenver\r\nView all\r\n', 'A criminal mastermind who goes by \"The Professor\" has a plan to pull off the biggest heist in recorded history -- to print billions of euros in the Royal Mint of Spain. To help him carry out the ambitious plan, he recruits eight people with certain abilities and who have nothing to lose. The group of thieves take hostages to aid in their negotiations with the authorities, who strategize to come up with a way to capture The Professor. As more time elapses, the robbers prepare for a showdown with the police.', 2017, '9', 'HD', '15', 'Pakistan', '', '', 'Movie', 'Money Heist  Series Trailer  Netflix.mp4', 'https://youtu.be/_InqQJRqGW4?si=75NhfabHMQTAsSZR', 5.5),
(5, 'MV5BM2ZmMjEyZmYtOGM4YS00YTNhLWE3ZDMtNzQxM2RhNjBlODIyXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_FMjpg_UX1000_.jpg', 'wednesday', 'directed by Tim Burton', 'Jenna Ortega\r\nWednesday Addams\r\n\r\nEmma Myers\r\nEnid Sinclair\r\n\r\nChristina Ricci\r\nMarilyn Thornhill\r\n\r\nPercy Hynes White\r\nXavier Thorpe\r\n\r\nHunter Doohan\r\nTyler Galpin\r\n\r\nCatherine Zeta-Jones\r\nMorticia Addams\r\n\r\nGwendoline Christie\r\nLarissa Weems\r\n\r\nLuis G', 'Wednesday Addams is a fictional character from the Addams Family multimedia franchise created by American cartoonist Charles Addams. She is typically portrayed as a morbid and emotionally reserved child that is fascinated by the macabre, often identified by her pale skin and black pigtails. Wednesday Addams, a high-school student, finds her brother Pugsley tied up in a locker. She sees a psychic vision of his bullies whom she attempts to kill, resulting in her expulsion. Her parents, Morticia and Gomez, decide to enroll her in Nevermore Academy, a school for outcasts in Jericho, Vermont.', 2022, '9 hour', 'FullHD', '20', 'American Samoa', 'Thriller', 'MV5BM2ZmMjEyZmYtOGM4YS00YTNhLWE3ZDMtNzQxM2RhNjBlODIyXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_FMjpg_UX1000_.jpg', 'TV Series', 'Wednesday Addams  Official Teaser  Netflix.mp4', 'https://www.youtube.com/watch?v=Di310WS8zLk', 5),
(6, 'MV5BMDRjYWI5NTMtZTYzZC00NTg4LWI3NjMtNmI3MTdhMWQ5MGJlXkEyXkFqcGdeQXVyNTg4MDc4Mg@@._V1_.jpg', 'Strangers thing', 'Director Dan Trachtenberg', '\r\nMillie Bobby Brown\r\nEleven\r\n\r\nFinn Wolfhard\r\nMike Wheeler\r\n\r\nNoah Schnapp\r\nWill Byers\r\n\r\nCaleb McLaughlin\r\nLucas Sinclair\r\n\r\nSadie Sink\r\nMax Mayfield\r\n\r\nGaten Matarazzo\r\nDustin Henderson\r\n\r\nJoe Keery\r\nSteve Harrington\r\n\r\nDavid Harbour\r\nJim Hopper\r\n\r\nNat', 'Overview. Stranger Things is set in the fictional rural town of Hawkins, Indiana, in the 1980s. The nearby Hawkins National Laboratory ostensibly performs scientific research for the United States Department of Energy but secretly experiments with the paranormal and supernatural, sometimes with human test subjects.', 2016, '9 hour', 'FullHD', '20', 'Pakistan', 'Thriller', 'MV5BMDRjYWI5NTMtZTYzZC00NTg4LWI3NjMtNmI3MTdhMWQ5MGJlXkEyXkFqcGdeQXVyNTg4MDc4Mg@@._V1_.jpg', 'Movie', 'Stranger Things  Official Final Trailer  Netflix.mp4', 'https://www.youtube.com/watch?v=b9EkMc79ZSU', 5.3),
(7, 'MV5BMmZiN2VmMjktZDE5OC00ZWRmLWFlMmEtYWViMTY4NjM3ZmNkXkEyXkFqcGdeQXVyMTI2MTc2ODM3._V1_FMjpg_UX1000_.jpg', 'EVIL DEAD RISE', 'Director: Lee Cronin', '\r\nAlyssa Sutherland\r\nEllie\r\n\r\nMorgan Davies\r\nDanny\r\n\r\nLily Sullivan\r\nInterprete\r\n\r\nGabrielle Echols\r\nBridget\r\n\r\nBruce Campbell\r\nWilliams\r\n\r\nNell Fisher\r\nKassie\r\n\r\nMia Challis\r\n\r\nBilly Reynolds-McCarthy\r\nJake\r\n\r\nJayden Daniels\r\nGabriel\r\n\r\nAnna-Maree Thomas', 'A reunion between two estranged sisters gets cut short by the rise of flesh-possessing demons, thrusting them into a primal battle for survival as they face the most nightmarish version of family imaginable.', 0, '', 'FullHD', '22', 'Australia', 'Horror', 'MV5BMmZiN2VmMjktZDE5OC00ZWRmLWFlMmEtYWViMTY4NjM3ZmNkXkEyXkFqcGdeQXVyMTI2MTc2ODM3._V1_FMjpg_UX1000_.jpg', 'Movie', 'Evil Dead Rise – Official Trailer (Green Band).mp4', 'https://www.youtube.com/watch?v=BqQNO7BzN08', 4.1),
(8, 'MV5BYWRkNzU0MjQtMDFjOS00MjZkLTkyZjctODQzODVmNWY5NzBjXkEyXkFqcGdeQXVyNjI4NDY5ODM@._V1_.jpg', 'duty after school', 'Seong Yong-il', 'Shin Hyun-soo\r\nLee Chun Ho\r\n\r\nMoon Sang-min\r\nWang Tae Man\r\n\r\nKim Ki-hae\r\nKim Chi Yeol\r\n\r\nChoi Moon-hee\r\nLee Na Ra\r\n\r\nKwon Eun-Bin\r\nYeon Bo-ra\r\n\r\nIm Se-mi\r\nPark Eun Young\r\n\r\nKim Soo-gyeom\r\nKwon Il Ha\r\n\r\nKim So-hee\r\nLee Soon Yi', 'Instead of preparing for university admission, seniors at Seongjin High receive army training to fight extraterrestrial monsters.', 2023, '9 hour', 'HD', '20', 'Korea', 'Action', 'MV5BYWRkNzU0MjQtMDFjOS00MjZkLTkyZjctODQzODVmNWY5NzBjXkEyXkFqcGdeQXVyNjI4NDY5ODM@._V1_.jpg', 'Movie', 'Duty After School  MAIN TRAILER  Shin Hyun Soo, Im Se Mi.mp4', 'https://www.youtube.com/watch?v=zYiXxz8Ft0U', 6.8);

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_premiere_item`
--

CREATE TABLE `admin_add_premiere_item` (
  `id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `release_year` int(11) NOT NULL,
  `runtime` varchar(255) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `upload_photos` varchar(255) DEFAULT NULL,
  `item_type` varchar(20) DEFAULT NULL,
  `movie_file` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `rating` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_add_premiere_item`
--

INSERT INTO `admin_add_premiere_item` (`id`, `cover`, `title`, `director`, `cast`, `description`, `release_year`, `runtime`, `quality`, `age`, `country`, `genre`, `upload_photos`, `item_type`, `movie_file`, `link`, `rating`) VALUES
(1, 'MV5BNTI2YTI0MWEtNGQ4OS00ODIzLWE1MWEtZGJiN2E3ZmM1OWI1XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_FMjpg_UX1000_.jpg', 'The tommorow war', 'Director: Chris McKay', 'Chris Pratt\r\nDan Forester\r\n\r\nYvonne Strahovski\r\nColonel Muri Forester\r\n\r\nBetty Gilpin\r\nEmmy Forester\r\n\r\nJ. K. Simmons\r\nJames Daniel Forester Sr.\r\n\r\nTheo Von\r\n\r\nJasmine Mathews\r\ntenente Hart\r\n\r\nMary Lynn Rajskub\r\nNorah\r\n\r\nSeychelle Gabriel\r\nSgt. Diaz', 'The world is stunned when a group of time travellers arrive from the year 2051 to deliver an urgent message: thirty years in the future, mankind is losing a global war against a deadly alien species.', 2021, '2 hour', 'HD', '20', 'USA', 'Action', '', 'Movie', 'THE TOMORROW WAR  Official Trailer  Prime Video.mp4', 'https://www.youtube.com/watch?v=QPistcpGB8o', 4.1),
(5, 'MV5BODI0ZTljYTMtODQ1NC00NmI0LTk1YWUtN2FlNDM1MDExMDlhXkEyXkFqcGdeQXVyMTM0NTUzNDIy._V1_FMjpg_UX1000_.jpg', 'Money heist', 'Director : Álex Pina', '\r\nÁlvaro Morte\r\nThe Professor\r\n\r\nÚrsula Corberó\r\nTokyo\r\n\r\nPedro Alonso\r\nBerlin\r\n\r\nItziar Ituño\r\nRaquel Murillo\r\n\r\nAlba Flores\r\nNairobi\r\n\r\nMiguel Herrán\r\nRio\r\n\r\nJaime Lorente\r\nDenver\r\nView all\r\n', 'A criminal mastermind who goes by \"The Professor\" has a plan to pull off the biggest heist in recorded history -- to print billions of euros in the Royal Mint of Spain. To help him carry out the ambitious plan, he recruits eight people with certain abilities and who have nothing to lose. The group of thieves take hostages to aid in their negotiations with the authorities, who strategize to come up with a way to capture The Professor. As more time elapses, the robbers prepare for a showdown with the police.', 2017, '9 hour', 'FullHD', '22', 'Pakistan', 'Crime', 'MV5BODI0ZTljYTMtODQ1NC00NmI0LTk1YWUtN2FlNDM1MDExMDlhXkEyXkFqcGdeQXVyMTM0NTUzNDIy._V1_FMjpg_UX1000_.jpg', 'Movie', 'Money Heist  Series Trailer  Netflix.mp4', 'https://www.youtube.com/watch?v=_InqQJRqGW4', 6.7),
(6, 'MV5BYWIwYTg2Y2YtYzEwNy00Y2Y0LWFkZjktNjBlMWZhNDY2NGE0XkEyXkFqcGdeQXVyNDY5MjMyNTg@._V1_.jpg', 'Vincenzo', 'Directed by: Kim Hee-won', '\r\nSong Joong-ki\r\nVincenzo\r\n\r\nJeon Yeo-been\r\nHong Cha-young\r\n\r\nOk Taec-yeon\r\nJang Jun-woo\r\n\r\nKwak Dong-yeon\r\nJang Han-seo\r\n\r\nKim Sung-cheol\r\nHwang Min-sung\r\n\r\nKim Yeo-jin\r\nChoi Myung-hee\r\n\r\nNa Chul\r\nNa Deok Jin', 'During a visit to his motherland, a Korean-Italian mafia lawyer gives a conglomerate a taste of its own medicine with a side of justice.', 2021, '9 hour', 'FullHD', '22', 'Korea', 'Crime', 'MV5BYWIwYTg2Y2YtYzEwNy00Y2Y0LWFkZjktNjBlMWZhNDY2NGE0XkEyXkFqcGdeQXVyNDY5MjMyNTg@._V1_.jpg', 'Movie', 'Vincenzo  Official Trailer  Netflix.mp4', 'https://www.youtube.com/watch?v=_J8tYxYB_YU', 7.2);

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_signup`
--

INSERT INTO `admin_signup` (`a_id`, `a_name`, `a_email`, `a_pass`) VALUES
(1, 'jake', 'jake@gmail.com', '123'),
(2, 'luke', 'luke@gmail.com', '123'),
(3, 'admin', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `c_id` int(11) NOT NULL,
  `c_username` varchar(30) NOT NULL,
  `c_title` varchar(80) NOT NULL,
  `c_comment` varchar(255) NOT NULL,
  `c_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`c_id`, `c_username`, `c_title`, `c_comment`, `c_time`) VALUES
(24, '@tayyaba', 'allof us are dead', 'Honestly this is really the best Zombie series I ever watched.', '2023-08-29 20:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact us`
--

CREATE TABLE `contact us` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_sub` varchar(50) NOT NULL,
  `u_mess` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact us`
--

INSERT INTO `contact us` (`u_id`, `u_name`, `u_email`, `u_sub`, `u_mess`) VALUES
(1, 'clinton', 'jed@gmail.com', '...', '...///'),
(2, 'zahra', 'zahra@gmail.com', 'movie book', '... is not currently available');

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE `forgot` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forgot`
--

INSERT INTO `forgot` (`u_id`, `u_email`) VALUES
(1, 'r@gmail.com'),
(2, 'r@gmail.com'),
(3, 'ryan@gmail.com'),
(4, 'jackson@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `card1` varchar(20) NOT NULL,
  `cardholder_name` varchar(255) NOT NULL,
  `expire_date` date NOT NULL,
  `cvv` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `u_id`, `p_id`, `card1`, `cardholder_name`, `expire_date`, `cvv`) VALUES
(1, 2, 0, '', '', '0000-00-00', ''),
(2, 3, 0, '', '', '0000-00-00', ''),
(8, 5, 0, '111', '111', '0000-00-00', '111'),
(9, 5, 0, '111', 'abs', '0000-00-00', '111'),
(10, 9, 0, '33', 'bvv', '0000-00-00', '222');

-- --------------------------------------------------------

--
-- Table structure for table `review_detail`
--

CREATE TABLE `review_detail` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `review_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_detail`
--

INSERT INTO `review_detail` (`u_id`, `u_name`, `title`, `review`, `rating`, `review_time`) VALUES
(6, 'haris', 'rdddd', 'masterpiece', 8.3, '2023-08-29 19:23:51'),
(7, 'hmna', 'ssssss', 'dssss', 0, '2023-08-27 02:06:16'),
(13, 'jeff', 'jjk', 'fire', 9, '2023-08-27 10:07:20'),
(15, 'hamza', 'jj', 'kk', 5.6, '2023-08-27 02:06:33'),
(36, 'fatima..', 'no way home...', 'bset movie seen so far', 7.5, '2023-08-27 10:13:17'),
(38, 'henry', 'grave of fireflies.', '🔥🔥🔥', 8.5, '2023-08-27 10:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `u_email` varchar(255) DEFAULT NULL,
  `u_pass` varchar(255) DEFAULT NULL,
  `created_date` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`u_id`, `u_name`, `u_email`, `u_pass`, `created_date`) VALUES
(2, 'emily', 'eric@gmail.com', '123', '2023-08-26'),
(3, 'ericA', 'eric@Gmail.com', 'XYZ', '2023-08-26'),
(4, 'nimra', 'nimra@email.com', '123', '2023-08-26'),
(5, 'fatima', 'fatima@email.com', '123', '2023-08-26'),
(6, 'zainab', 'zainab@email.com', '123', '2023-08-26'),
(9, 'zain', 'zainab@email.com', 'abx', '2023-08-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_pricing_plan`
--
ALTER TABLE `add_pricing_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `admin_add_item_movies`
--
ALTER TABLE `admin_add_item_movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_add_premiere_item`
--
ALTER TABLE `admin_add_premiere_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact us`
--
ALTER TABLE `contact us`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `forgot`
--
ALTER TABLE `forgot`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `review_detail`
--
ALTER TABLE `review_detail`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_pricing_plan`
--
ALTER TABLE `add_pricing_plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_add_item_movies`
--
ALTER TABLE `admin_add_item_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_add_premiere_item`
--
ALTER TABLE `admin_add_premiere_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_signup`
--
ALTER TABLE `admin_signup`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact us`
--
ALTER TABLE `contact us`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forgot`
--
ALTER TABLE `forgot`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review_detail`
--
ALTER TABLE `review_detail`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
