# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2017-08-16 23:33:05
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

#
# Data for table "activity"
#

INSERT INTO `activity` VALUES (2,'admin','try me!','1502894266.jpg','bacolod','2017-08-16 22:37:46'),(3,'admin','hehe','1502897473.jpg','bacolod','2017-08-16 23:31:12'),(4,'admin','hahaha','1502897552.jpg','bacolod','2017-08-16 23:32:31');

#
# Structure for table "bite"
#

DROP TABLE IF EXISTS `bite`;
CREATE TABLE `bite` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(11) DEFAULT NULL,
  `biter` varchar(20) DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "bite"
#

INSERT INTO `bite` VALUES (1,'18','fredowinz23','2017-08-13 18:46:09'),(2,'17','fredowinz23','2017-08-13 18:47:52'),(3,'16','fredowinz23','2017-08-13 18:48:07'),(4,'15','fredowinz23','2017-08-13 18:48:58'),(5,'11','fredowinz23','2017-08-13 18:49:06'),(6,'10','fredowinz23','2017-08-13 18:50:59'),(7,'17','admin','2017-08-13 22:18:12'),(8,'20','admin','2017-08-13 22:18:23'),(9,'16','admin','2017-08-16 19:15:02'),(10,'16','admin','2017-08-16 19:15:02'),(11,'19','admin','2017-08-16 19:15:07'),(12,'18','admin','2017-08-16 19:19:03'),(13,'12','admin','2017-08-16 19:19:30'),(14,'1','admin','2017-08-16 22:09:23'),(15,'2','admin','2017-08-16 22:48:07'),(16,'3','admin','2017-08-16 23:31:16'),(17,'4','admin','2017-08-16 23:32:35');

#
# Structure for table "comment"
#

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `content` text,
  `create_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "comment"
#

INSERT INTO `comment` VALUES (1,1,'fred123','I like this food','2017-08-05 19:14:10'),(2,1,'anne23','yeah right','2017-08-05 19:18:23'),(3,1,'admin','kldsnmflkdsnfdskl','2017-08-06 19:26:19'),(4,12,'admin','ds,fsdmlfnsdmfl','2017-08-06 19:26:27'),(5,12,'admin','heller','2017-08-06 19:29:18'),(6,12,'admin','how are you?','2017-08-06 19:45:44'),(7,13,'admin','klsdfsdk edkflhsdkfhfklsd','2017-08-06 20:44:12'),(8,13,'fred','lksdfhlksdfhsl','2017-08-08 00:26:51'),(9,9,'fred','klsdfhksdlfhlsdkfh','2017-08-08 00:28:59'),(10,21,'admin','asdasdsa','2017-08-16 19:27:46');

#
# Structure for table "follow"
#

DROP TABLE IF EXISTS `follow`;
CREATE TABLE `follow` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `follower` varchar(20) DEFAULT NULL,
  `following` varchar(20) DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "follow"
#

INSERT INTO `follow` VALUES (3,'admin','fredowinz23','2017-08-12 21:01:40'),(4,'fredowinz23','admin','2017-08-13 17:05:19');

#
# Structure for table "join_now"
#

DROP TABLE IF EXISTS `join_now`;
CREATE TABLE `join_now` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(11) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "join_now"
#

INSERT INTO `join_now` VALUES (1,'2','admin','2017-08-16 22:47:00');

#
# Structure for table "notification"
#

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(20) DEFAULT NULL,
  `doer` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `create_datetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "notification"
#

INSERT INTO `notification` VALUES (1,'admin','fredowinz23','followed you!','follow','','2017-08-16 22:57:18'),(2,'admin','fredowinz23','Nice!','comment','','2017-08-16 22:57:39'),(3,'admin','fredowinz23','Nice!','bite','','2017-08-16 22:57:47'),(4,'admin','fredowinz23','Nice!','join','','2017-08-16 22:57:52'),(13,'','admin','Your post has a bite from admin','bite',NULL,'2017-08-16 23:31:16'),(14,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-16 23:32:35');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'Inbite Admin','admin','support@inbite.com','12345','1502892528.png'),(2,'fred ciagar','user',NULL,'12345',NULL),(3,'hehehe','hahah',NULL,'12345',NULL),(5,'admi','admi',NULL,'123',NULL),(6,'dskifndslif nldskfndsklfnsdklfsdnlk','correctuser',NULL,'12121212',NULL),(7,'james reid','james23',NULL,'123456',NULL),(8,'dsklfjsdlk jdsklfj sdklfjs fj','sddfdsfs','aa@aa.com','12121212',NULL),(9,'dsklfndskl ndsfklns kls','dsklfnsdklfj sdklfnsdklsdnklfn lsdk','ww@ww.com','123456',NULL),(10,'sklfjdskl ksdlfjdsklfj sdkl','gggg','ff@ff.com','123456',NULL),(11,'fred garcia','fredowinz23','fred@garcia.com','12345',NULL);
