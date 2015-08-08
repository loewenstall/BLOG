-- Database: `blog`

-- Table structure for table `model_category`
CREATE TABLE `model_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `crdate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- Table structure for table `model_post`
CREATE TABLE `model_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `crdate` datetime NOT NULL,
  `storage` varchar(60) DEFAULT 'post',
  `author` int(11) NOT NULL,
  `files` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `teaser` text NOT NULL,
  `content` text NOT NULL,
  `urltitle` varchar(255) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `defaultimage` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `title` (`title`,`urltitle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- Table structure for table `sys_files`
CREATE TABLE `sys_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mime` text NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `path` (`path`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Table structure for table `sys_plugin`
CREATE TABLE `sys_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `active` int(2) NOT NULL,
  `settings` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Table structure for table `sys_user`
CREATE TABLE `sys_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `admin` int(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `crdate` datetime NOT NULL,
  `settings` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name_2` (`name`),
  KEY `name` (`name`,`fullname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
