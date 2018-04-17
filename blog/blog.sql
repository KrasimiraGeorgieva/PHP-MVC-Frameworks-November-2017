-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kras3eij_blog
CREATE DATABASE IF NOT EXISTS `kras3eij_blog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `kras3eij_blog`;

-- Dumping structure for table kras3eij_blog.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kras3eij_blog.users: ~7 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `password`, `full_name`) VALUES
	(1, 'minka@abv.bg', '$2y$13$X/A4fCJzR4rnmqC5uV8qJOdrvLwqqXFjFe0Al.fgv3zoSi1zoZ1fe', 'Minka Dobreva'),
	(2, 'gosho@abv.bg', '$2y$13$BNtuYFKPJ17ls7pycBE8PuC6/4L3N6S2NXframhx7ROPIskNQQ4A.', 'Gosho Goshov'),
	(3, 'pesho@abv.bg', '$2y$13$IPTl9dGv4c4flUy1kw3e9O5MBykO.GmfM9KVXho7jCnC1pkp.VpRm', 'Pesho Petrov'),
	(4, 'abv@gmail.bg', '$2y$13$U3WXtp/wBNLCzv.Wlhcl1eAwbHxu3pV5wQ4mfM.KwMfCDn08EXW4y', 'ABV ABV'),
	(5, 'mmm@mm.mm', '$2y$13$OPk29O0he/TlkVTtJhF3uOLCqhIJY5nuzN4nUHjO6VT4jVX7Ah0OK', 'asas');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table kras3eij_blog.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dateAdded` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BFDD3168F675F31B` (`author_id`),
  CONSTRAINT `FK_BFDD3168F675F31B` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FKe02fs2ut6qqoabfhj325wcjul` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kras3eij_blog.articles: ~5 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `author_id`, `title`, `content`, `dateAdded`) VALUES
	(4, 1, 'Vestibulum ante ipsum.', 'Vivamus vel sagittis elit, ut convallis diam. In dignissim scelerisque ipsum, ac ultrices dui eleifend non. Mauris quis interdum lacus, lobortis sodales metus. Sed suscipit enim purus. Donec commodo, felis ac mollis dictum, risus elit aliquet urna, id sollicitudin augue turpis vitae ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam et fermentum lorem. Phasellus mi metus, porttitor non odio vel, volutpat posuere tortor. Vestibulum ultricies nisi sed lacus posuere, sed cursus quam fermentum. Praesent ac enim faucibus, suscipit neque at, ultricies ante. Morbi sodales augue nec urna sodales, eu porta mauris interdum. Integer sit amet tincidunt nisi. Donec fermentum leo ligula, eget pellentesque lectus hendrerit blandit. Ut id erat ut metus egestas viverra quis ut velit. Vivamus at rutrum sem. Praesent mollis, lorem ut fermentum tincidunt, tellus erat consequat arcu, id fermentum est mauris quis arcu.\r\n\r\nMaecenas rutrum, dui ac aliquam hendrerit, odio turpis laoreet metus, sit amet egestas leo orci sit amet ante. Vivamus quis finibus tellus, a cursus libero. Sed sed enim consequat, tincidunt massa ut, feugiat massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi eros libero, viverra nec commodo ut, finibus in ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent tincidunt eget metus at faucibus. Suspendisse convallis, nibh vel tincidunt ultricies, erat lacus vehicula augue, nec bibendum massa justo vitae tellus. Ut arcu neque, euismod vitae nunc at, malesuada bibendum augue. In porta tincidunt dui eu auctor. Sed vel urna nec dui lobortis mattis. Fusce fermentum purus vel magna congue, pretium tempor odio suscipit. Etiam maximus, diam nec condimentum facilisis, nulla nulla sagittis magna, ut bibendum risus elit a felis. Praesent elit nisl, vehicula ac nibh ut, suscipit fringilla ipsum. Vivamus consequat diam maximus, pulvinar nunc a, rhoncus sem.', '2017-11-29 22:13:59'),
	(5, 3, 'Aenean vel risus', 'Quisque ac nisi sed purus ullamcorper gravida ac eu ex. Phasellus dictum magna eu tortor condimentum, sed ultricies purus aliquam. Aliquam nec hendrerit magna. Nullam nec lacinia dolor. Donec iaculis nulla ac nunc eleifend tristique. Phasellus suscipit mauris sem, et mattis risus dictum sed. Sed pretium justo eu turpis iaculis sodales at a tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse malesuada mauris scelerisque nulla luctus varius. Maecenas sit amet sapien ut tellus.', '2017-11-29 22:42:17'),
	(6, 3, 'Ut tincidunt convallis tincidunt', 'Etiam vehicula accumsan massa, ut convallis turpis. Sed mollis dui arcu, id feugiat nulla sodales pulvinar. Nunc egestas iaculis scelerisque. Nunc suscipit augue augue, in dignissim erat aliquet non. Aenean et ultricies nibh, id mollis risus. Curabitur tincidunt felis non cursus sodales. Curabitur faucibus, lectus sed cursus aliquet, lectus lorem bibendum lectus, quis efficitur felis libero vitae turpis. Donec quis nibh tempor, fermentum felis vitae, fringilla ligula. Fusce a justo commodo, tempus turpis quis, elementum orci.\r\n\r\nPraesent ultrices sapien id orci euismod, pellentesque semper ligula elementum. Pellentesque pellentesque tempor feugiat. Donec id justo sit amet dolor tempus consectetur. Sed arcu neque, varius at felis et, posuere ultricies diam. Praesent dolor sem, finibus ut ante vitae, eleifend fermentum nulla. Cras in.', '2017-11-29 22:49:57'),
	(8, 1, 'In ut fringilla sem', 'Nullam dapibus pharetra lacinia. Aliquam sit amet scelerisque leo, vitae efficitur massa. Cras volutpat a ligula eu vulputate. Praesent ornare augue lorem, et eleifend dui vulputate non. Nam a nulla ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec vehicula bibendum commodo. Nunc ac mauris dictum turpis porta semper. Donec dignissim volutpat maximus. Donec malesuada augue non posuere dignissim.\r\n\r\nSuspendisse nisi orci, posuere nec metus et, dignissim auctor turpis. Integer cursus sed quam eget gravida. Nulla enim ligula, vestibulum sed aliquam ut, tempor at turpis. Maecenas commodo elit id velit volutpat, quis gravida enim eleifend. Duis sollicitudin nisi sed elit ultricies, sed vestibulum justo pulvinar. Donec cursus suscipit mauris, et interdum justo venenatis rhoncus. Quisque eleifend convallis blandit. Curabitur tincidunt congue purus in rutrum. Ut hendrerit sed purus sed pellentesque. Ut lorem nunc, blandit sodales mattis vitae, placerat id enim. Sed vel ex in dolor aliquet imperdiet eget eu ante. Fusce ullamcorper, velit ut faucibus facilisis, dolor neque pulvinar nulla, at congue ex lectus quis turpis. Nullam in libero gravida, rhoncus neque eget, lobortis quam. Aliquam egestas metus in odio efficitur, sit amet laoreet leo pretium.', '2017-11-29 22:53:21'),
	(9, 1, 'Cras volutpat a ligula eu vulputate', 'Vestibulum sed urna varius, facilisis diam non, porttitor nisi. Proin hendrerit enim metus, ac pharetra enim consequat ac. Nulla nisi ante, consectetur ac maximus sit amet, posuere sed tellus. Curabitur hendrerit justo in congue laoreet. Nam eget dui ac magna commodo lacinia finibus eu magna. Aliquam vestibulum, neque non sagittis egestas, sapien ante egestas magna, at tincidunt nibh odio id sapien. In molestie, orci ac vestibulum eleifend, lacus libero pellentesque lorem, ac maximus nisi massa vitae est. Suspendisse mollis nisl sit amet pulvinar pulvinar. Quisque nec lacinia lectus, eu tristique odio. Nam fringilla nisi nec turpis tincidunt consequat. Pellentesque convallis lacus nisi, nec sodales urna sagittis in. Fusce eros nisi, varius non vulputate et, iaculis at nisi.', '2018-04-16 23:15:49');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Dumping structure for table kras3eij_blog.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B63E2EC75E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kras3eij_blog.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`) VALUES
	(2, 'ROLE_ADMIN'),
	(1, 'ROLE_USER');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table kras3eij_blog.users_roles
CREATE TABLE IF NOT EXISTS `users_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `IDX_51498A8EA76ED395` (`user_id`),
  KEY `IDX_51498A8ED60322AC` (`role_id`),
  CONSTRAINT `FK_51498A8EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_51498A8ED60322AC` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table kras3eij_blog.users_roles: ~7 rows (approximately)
/*!40000 ALTER TABLE `users_roles` DISABLE KEYS */;
INSERT INTO `users_roles` (`user_id`, `role_id`, `users_id`, `roles_id`) VALUES
	(1, 1, 0, 0),
	(2, 2, 0, 0),
	(3, 1, 0, 0),
	(4, 1, 0, 0),
	(5, 1, 0, 0);
/*!40000 ALTER TABLE `users_roles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
