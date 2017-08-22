# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2017-08-22 22:08:14
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "activity"
#

INSERT INTO `activity` VALUES (1,'admin','check again bala','1503056699.jpg','bacolod','2017-08-18 19:51:11'),(2,'admin','check me now later','1503056711.jpg','bacolod','2017-08-18 20:05:45'),(4,'','baket nga ba','1503057036.jpg','bacolod','2017-08-18 20:04:27'),(5,'hahah','yut','1503058862.jpg','bacolod','2017-08-18 20:21:02'),(6,'admin','Description','1503407045.','bacolod','2017-08-22 21:04:05'),(7,'admin','Description','1503407111.','bacolod','2017-08-22 21:05:10'),(8,'admin','Description','1503408312.','bacolod','2017-08-22 21:25:11'),(9,'admin','Description','1503408354.','bacolod','2017-08-22 21:25:53'),(10,'admin','Description','1503409929.jpg','bacolod','2017-08-22 21:52:09'),(11,'admin','Description','1503410006.jpg','bacolod','2017-08-22 21:53:25'),(12,'admin','Description dsfklhsdfkl','1503410428.jpg','bacolod','2017-08-22 22:01:12'),(14,'admin','Description','1503410839.jpg','bacolod','2017-08-22 22:07:22');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "bite"
#

INSERT INTO `bite` VALUES (1,'4','user','2017-08-17 22:55:02'),(2,'1','admin','2017-08-18 19:51:19'),(3,'2','admin','2017-08-18 19:51:38'),(4,'5','admin','2017-08-18 20:31:04'),(5,'4','admin','2017-08-19 21:44:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "follow"
#

INSERT INTO `follow` VALUES (1,'hahah','admin','2017-08-18 20:45:44'),(2,'admin','user','2017-08-19 22:30:01');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "join_now"
#

INSERT INTO `join_now` VALUES (1,'4','user','2017-08-17 22:55:08'),(2,'4','admin','2017-08-18 20:08:56'),(3,'2','admin','2017-08-18 20:09:03'),(4,'3','admin','2017-08-18 20:10:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "notification"
#

INSERT INTO `notification` VALUES (1,'hahah','admin','Your post has a bite from admin','bite',NULL,'2017-08-18 20:31:04'),(2,'admin','hahah','hahah followed you','follow',NULL,'2017-08-18 20:45:44'),(3,'','admin','Your post has a bite from admin','bite',NULL,'2017-08-19 21:44:36'),(4,'user','admin','admin followed you','follow',NULL,'2017-08-19 22:30:01');

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
  `image` varchar(255) DEFAULT 'no-image',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'Inbite Admin','admin','support@inbite.com','12345','1502892528.png'),(2,'fred ciagar','user',NULL,'12345',NULL),(3,'hehehe','hahah','','12345','1503058850.jpg'),(5,'admi','admi',NULL,'123',NULL),(6,'dskifndslif nldskfndsklfnsdklfsdnlk','correctuser',NULL,'12121212',NULL),(7,'james reid','james23',NULL,'123456',NULL),(8,'dsklfjsdlk jdsklfj sdklfjs fj','sddfdsfs','aa@aa.com','12121212',NULL),(9,'dsklfndskl ndsfklns kls','dsklfnsdklfj sdklfnsdklsdnklfn lsdk','ww@ww.com','123456',NULL),(10,'sklfjdskl ksdlfjdsklfj sdkl','gggg','ff@ff.com','123456',NULL),(11,'fred garcia','fredowinz23','fred@garcia.com','12345',NULL);
