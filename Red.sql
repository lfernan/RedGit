DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
`id` int(10) NOT NULL auto_increment,
`name` varchar(50) default NULL,
`user` varchar(50) default NULL,
`pass` varchar(50) default NULL,
`mail` varchar(100) default NULL,
`nick_picture` varchar(250) default NULL,
`pictures` varchar(250) default NULL,
`private_phone` varchar(20) default NULL,
`public_phone` varchar(20) default NULL,
`sex` varchar(1) default NULL,
`description` varchar(250) default NULL,
`age` int(2) default NULL,
`measures` varchar(50) default NULL,
`height` varchar(10) default NULL, 
`weight` varchar(10) default NULL,
`attention` varchar(50) default NULL,
`schedules` varchar(50) default NULL,
`smoking` tinyint(1) NOT NULL default '0',
`published` tinyint(1) NOT NULL default '0'
 PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1;

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id` int(10) NOT NULL auto_increment,
  `user_from_id` int(10) NOT NULL,
  `user_to_id` int(10) NOT NULL,
  `description` varchar(250) default NULL,
  `date_hour` date default NULL
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1;

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(10) NOT NULL,
  `description` varchar(250) default NULL,
  `date_hour` date default NULL
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT= 1;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1;

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1;

DROP TABLE IF EXISTS `usercategory`;
CREATE TABLE `usercategory` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1;

DROP TABLE IF EXISTS `userservice`;
CREATE TABLE `userservice` (
  `id` int(10) NOT NULL auto_increment,
  `service_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `price` float(4,2)
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1;

