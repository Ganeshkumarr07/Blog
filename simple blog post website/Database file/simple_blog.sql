-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 09:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Vikram Lander', 'Lorem ipsum dolor sit amet. Eum saepe sapiente qui quibusdam deleniti in dolore sunt! Et rerum expedita aut quia adipisci aut velit neque et fugit nemo.\r\n\r\nQui voluptate fugiat ut ipsam repudiandae ut incidunt esse sit quibusdam laboriosam. Ut quisquam earum in illo nihil et obcaecati doloremque sed magnam veritatis aut quos earum. Et nihil quia qui soluta earum non dolorem nulla.\r\n\r\nEst excepturi velit non exercitationem tempora sed quidem consectetur At facilis officiis. Aut voluptas consequatur qui laudantium quos non dolores animi sed facere quis.', '1689157224_photo.jpg', 'Ganesh', '2023-08-24 12:16:55', '2023-08-25 06:47:59'),
(10, 'Lorem Ipsem', 'Qui assumenda accusantium ex quisquam sequi ut odit animi ut debitis amet eum facere culpa 33 architecto ipsa nam mollitia odio. At illo debitis qui sint quas qui modi molestiae. Qui facilis doloremque 33 voluptatem consequuntur ut doloribus reprehenderit. Et dolor maiores qui facilis labore et quisquam quod qui iusto officia sit laboriosam asperiores.\r\n\r\nSit velit asperiores et perspiciatis eveniet eos consequuntur nobis eum architecto sunt et temporibus minus ea tenetur asperiores et tenetur soluta. Aut fuga quia cum totam vero eos accusantium eligendi et veritatis laborum rem autem quam. Et modi odio aut tenetur Quis ea laudantium molestiae! Non odit fugiat qui temporibus suscipit a exercitationem dolor in consequuntur ratione.', 'gsat-14-12-1-879x485-1.jpg', 'lorem', '2023-08-25 06:52:08', '2023-08-25 06:52:08'),
(11, 'Letem', 'Qui assumenda accusantium ex quisquam sequi ut odit animi ut debitis amet eum facere culpa 33 architecto ipsa nam mollitia odio. At illo debitis qui sint quas qui modi molestiae. Qui facilis doloremque 33 voluptatem consequuntur ut doloribus reprehenderit. Et dolor maiores qui facilis labore et quisquam quod qui iusto officia sit laboriosam asperiores.\r\n\r\nSit velit asperiores et perspiciatis eveniet eos consequuntur nobis eum architecto sunt et temporibus minus ea tenetur asperiores et tenetur soluta. Aut fuga quia cum totam vero eos accusantium eligendi et veritatis laborum rem autem quam. Et modi odio aut tenetur Quis ea laudantium molestiae! Non odit fugiat qui temporibus suscipit a exercitationem dolor in consequuntur ratione.', 'vikram-lander-pragyaan-rover-chandrayaan-2.jpg', 'Isrem', '2023-08-25 06:52:47', '2023-08-25 06:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `cpassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'Ganesh', 'murgadas2001@gmail.com', 'ganesh123', 'ganesh123'),
(2, 'Akash', 'akash@gmail.com', 'akash123', 'akash123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
