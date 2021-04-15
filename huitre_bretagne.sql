-- --------------------------------------------------------
-- Host:                         eu-cdbr-west-01.cleardb.com
-- Server version:               5.6.50-log - MySQL Community Server (GPL)
-- Server OS:                    Linux
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for heroku_430ec21d2f36a08
CREATE DATABASE IF NOT EXISTS `heroku_430ec21d2f36a08` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `heroku_430ec21d2f36a08`;

-- Dumping structure for table heroku_430ec21d2f36a08.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` longtext,
  `content` longtext,
  `alt` longtext,
  `img` longtext,
  `category` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table heroku_430ec21d2f36a08.articles: ~9 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `content`, `alt`, `img`, `category`) VALUES
	(4, 'test article recette 1', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'recette_huitre', 'app\\public\\back\\images\\hbblog4.PNG', 'recettes'),
	(5, 'article astuce 1', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'huitre_bretagne', 'app\\public\\back\\images\\hbblog1.PNG', 'astuces'),
	(7, 'article recette 2', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'recette_huitre', 'app\\public\\back\\images\\hbblog9.PNG', 'recettes'),
	(8, 'article tourisme 1', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'tourisme_bretagne', 'app\\public\\back\\images\\hbblog2.PNG', 'tourisme'),
	(9, 'article tourisme 2', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'tourisme_bretagne', 'app\\public\\back\\images\\hbblog3.PNG', 'tourisme'),
	(10, 'article astuce 2', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'huitre_bretagne', 'app\\public\\back\\images\\hbblog6.PNG', 'astuces'),
	(11, 'article recette 3', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'recette_huitre', 'app\\public\\back\\images\\hbblog5.PNG', 'recettes'),
	(12, 'article astuce 3', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'huitre_bretagne', 'app\\public\\back\\images\\hbblog7.PNG', 'astuces'),
	(14, 'article tourisme 3', '                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iusto fugit, aspernatur dolorem fugiat aperiam fuga alias ut reprehenderit reiciendis officiis necessitatibus aut, minima omnis?', 'tourisme_bretagne', 'app\\public\\back\\images\\hbblog8.PNG', 'tourisme');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Dumping structure for table heroku_430ec21d2f36a08.commentaires
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` longtext,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` longtext,
  `article_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_commentaires_articles` (`article_id`),
  CONSTRAINT `FK_commentaires_articles` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

-- Dumping data for table heroku_430ec21d2f36a08.commentaires: ~10 rows (approximately)
/*!40000 ALTER TABLE `commentaires` DISABLE KEYS */;
INSERT INTO `commentaires` (`id`, `name`, `time`, `content`, `article_id`) VALUES
	(8, 'lisa', '2021-03-11 08:47:24', 'good idea for cook', 5),
	(9, 'theo', '2021-03-11 11:08:41', 'lololo', 10),
	(11, 'sam', '2021-03-23 14:52:40', 'really?', 7),
	(12, 'sam', '2021-03-23 14:52:47', 'really?', 7),
	(15, 'lucas', '2021-04-08 11:57:33', 'such a good idea', 4),
	(25, 'Emma', '2021-04-13 07:27:27', 'huitre huitre', 7),
	(35, 'lucas', '2021-04-13 07:37:08', 'how to open a oyster.', 10),
	(45, 'Beatrice', '2021-04-13 07:52:14', 'Envie de y\'aller !! ', 14),
	(115, 'Nathalie', '2021-04-13 08:42:22', 'delicious', 12),
	(125, 'where', '2021-04-13 09:04:53', 'get contact', 12);
/*!40000 ALTER TABLE `commentaires` ENABLE KEYS */;

-- Dumping structure for table heroku_430ec21d2f36a08.hbadmin
CREATE TABLE IF NOT EXISTS `hbadmin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `adminname` longtext,
  `mail` longtext,
  `pass` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table heroku_430ec21d2f36a08.hbadmin: ~0 rows (approximately)
/*!40000 ALTER TABLE `hbadmin` DISABLE KEYS */;
INSERT INTO `hbadmin` (`id`, `adminname`, `mail`, `pass`) VALUES
	(1, 'ting.kc', 'ting.kc.56@gmail.com', '$2y$10$oKmIQWrw9qGHUbpL7MqmMeK/uBwg9wgLtMHwGtvIFLoZDwojTf5c2');
/*!40000 ALTER TABLE `hbadmin` ENABLE KEYS */;

-- Dumping structure for table heroku_430ec21d2f36a08.huitres
CREATE TABLE IF NOT EXISTS `huitres` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` longtext,
  `alt` longtext,
  `h_name` longtext,
  `h_content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table heroku_430ec21d2f36a08.huitres: ~4 rows (approximately)
/*!40000 ALTER TABLE `huitres` DISABLE KEYS */;
INSERT INTO `huitres` (`id`, `img`, `alt`, `h_name`, `h_content`) VALUES
	(1, 'app\\public\\front\\images\\huitre 1.jpg', '1', 'huitre 1', '    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto doloresimilique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto doloresimilique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore'),
	(2, 'app\\public\\front\\images\\huitre 2.jpg', '2', 'huitre 2', 'similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore'),
	(3, 'app\\public\\front\\images\\huitre 3.jpg', '3', 'huitre 3', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore'),
	(4, 'app\\public\\front\\images\\huitre 4.jpg', '4', 'huitre 4', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum');
/*!40000 ALTER TABLE `huitres` ENABLE KEYS */;

-- Dumping structure for table heroku_430ec21d2f36a08.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mname` longtext,
  `mail` longtext,
  `sujet` longtext,
  `amessage` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Dumping data for table heroku_430ec21d2f36a08.messages: ~8 rows (approximately)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id`, `time`, `mname`, `mail`, `sujet`, `amessage`) VALUES
	(1, '2021-03-03 10:40:30', 'Mr.try', 'love@hb.fr', 'a try', 'just a try, a very importante try.'),
	(2, '2021-03-03 10:42:23', 'ting.kc', 'ting.kc.56@gmail.com', 'hey', 'I just want to say to you. '),
	(4, '2021-03-03 10:55:23', 'Julie', 'ting.kc.56@gmail.com', 'success', 'if you receive it, means i am good.'),
	(5, '2021-03-03 10:56:58', 'Anne', 'ting.kc.56@gmail.com', 'just for css', 'if you receive it, means i am good.'),
	(14, '2021-04-01 12:59:01', 'ting.kc', 'ting.kc.56@gmail.com', 'dfsgdfsgf', 'fdsgdfg'),
	(15, '2021-04-01 13:01:07', 'ting.kc', 'ting.kc.56@gmail.com', 'dfsgdfsgf', 'fdsgdfg'),
	(16, '2021-04-02 07:46:57', 'ting.kc', 'ting.kc.56@gmail.com', '456ol', 'sdqfsdqfd'),
	(25, '2021-04-13 08:43:49', 'Stephanie', 'sp@big.com', 'contact me', 'please send me a message for orders');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Dumping structure for table heroku_430ec21d2f36a08.producers
CREATE TABLE IF NOT EXISTS `producers` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `p_name` longtext,
  `adresse` longtext,
  `tel` longtext,
  `p_content` longtext,
  `alt` longtext,
  `img` longtext,
  `huitre_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_producers_huitres` (`huitre_id`),
  CONSTRAINT `FK_producers_huitres` FOREIGN KEY (`huitre_id`) REFERENCES `huitres` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Dumping data for table heroku_430ec21d2f36a08.producers: ~4 rows (approximately)
/*!40000 ALTER TABLE `producers` DISABLE KEYS */;
INSERT INTO `producers` (`id`, `p_name`, `adresse`, `tel`, `p_content`, `alt`, `img`, `huitre_id`) VALUES
	(7, 'ArradonHuitre-Emma', '12 chemin de la pante\r\n56782 arradon', '06 89 89 89 89', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', 'producteur de huitre ostréiculteur ', 'app\\public\\front\\images\\ostréiculteur 2.PNG', 3),
	(8, 'IleHuitre-Philippe', '56 rue de la reve\r\n56 895 st Paradis', '06 56 56 56 56', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', 'producteur de huitre ostréiculteur ', 'app\\public\\front\\images\\ostréiculteur 3.PNG', 4),
	(9, 'QuibronHuitre-Lorent', '10 rue du commerce\r\n56000 vannes', '06 12 12 12 14', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', 'producteur de huitre ostréiculteur ', 'app\\public\\front\\images\\ostréiculteur 4.PNG', 3),
	(15, 'BrestHuitre-Catherine', '5 rue du bord\r\n64025 Brest', '02 68 45 92 37', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', 'producteur de huitre ostréiculteur ', 'app\\public\\front\\images\\ostréiculteur 5.PNG', 2),
	(25, 'StmaloHuitre-Claude', '8 avenue de bellevue\r\n78456 ST Malo', '02 87 65 32 14', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', 'producteur de huitre ostréiculteur ', 'app\\public\\front\\images\\ostréiculteur 6.PNG', 2),
	(35, 'SeneHuitre-Antoine', '20 rue de la mer\r\n56360\r\nsene', '06 23 23 23 23', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!', 'producteur de huitre ostréiculteur ', 'app\\public\\front\\images\\ostréiculteur 1.PNG', 1);
/*!40000 ALTER TABLE `producers` ENABLE KEYS */;

-- Dumping structure for table heroku_430ec21d2f36a08.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` longtext,
  `mail` longtext,
  `pass` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- Dumping data for table heroku_430ec21d2f36a08.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `pseudo`, `mail`, `pass`) VALUES
	(1, 'ting.kc', 'ting.kc.56@gmail.com', '$2y$10$oKmIQWrw9qGHUbpL7MqmMeK/uBwg9wgLtMHwGtvIFLoZDwojTf5c2'),
	(22, 'Juliette', '123@hu.com', '$2y$10$/C50imYQG3.6t7yJWW5CWOTcIwRUeFUob26Thb.PQONJMqOwIvcgy'),
	(25, 'Juliette', 'test@gmail.co', '$2y$10$jJv851k6XSj86x9P45yxhu/XyC.1rVIVWau.rNSawtJrQQTOPDbqG'),
	(35, 'Tina', 'tina@gmail.com', '$2y$10$RcAzWufyIbXlrN/qFd3ove82I0wFx4aPFK0dD9R2KMqO7..cviAbW'),
	(45, 'YING', 'liying821130@hotmail.com', '$2y$10$lBM1srXQrGfnDYFfwI8odORMouKThj/m.81hu91rRA7dq1euM45t6');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
