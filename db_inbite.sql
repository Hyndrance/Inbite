# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2017-07-28 23:12:30 :)
# Generator: MySQL-Front 6.0  (Build 1.159)


#
# Structure for table "activity"
#

DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `post` text,
  `image` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "activity"
#

INSERT INTO `activity` VALUES (1,'dale','asdf','file','bacolod','2017-07-28 20:05:22'),(2,'dale','hahaha','asdf','bacolod','2017-07-28 20:10:22'),(3,'admin','kjdflsdkfhlsdkfs','1501244192.jpg','bacolod','2017-07-28 20:16:32'),(4,'admin','sample lang ni nga post','1501245938.jpg','bacolod','2017-07-28 20:45:37'),(5,'admin','I can not upload','1501246011.','bacolod','2017-07-28 20:46:50'),(6,'admin','eat like crazy!','1501252857.jpg','bacolod','2017-07-28 22:40:57'),(7,'admin','hello','1501254552.jpg','bacolod','2017-07-28 23:09:12'),(8,'admin','hehe','1501254650.jpg','bacolod','2017-07-28 23:10:49'),(9,'admin','yut','1501254685.jpg','bacolod','2017-07-28 23:11:24');

#
# Structure for table "follow"
#

DROP TABLE IF EXISTS `follow`;
CREATE TABLE `follow` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `create_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "follow"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'dale','admin','12345',NULL),(2,'fred ciagar','user','12345',NULL),(3,'hehehe','hahah','12345',NULL),(5,'admi','admi','123',NULL);
