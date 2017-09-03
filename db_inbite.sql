# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2017-09-01 23:14:36
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "activity"
#

INSERT INTO `activity` VALUES (1,'admin','lamb','1504199461.jpg','bacolod','2017-09-01 01:11:06'),(2,'admin','mousse\r\n','1504199483.jpg','bacolod','2017-09-01 01:11:29'),(3,'admin','hahaha','1504268068.jpg','bacolod','2017-09-01 20:14:34'),(4,'admin','kldsfhjdsklfjsdklfjsdklfjdskfl','1504268090.jpg','bacolod','2017-09-01 20:14:54'),(5,'hahah','sample update emaul','1504268233.jpg','bacolod','2017-09-01 20:19:56'),(6,'hahah','test','1504278001.jpg','bacolod','2017-09-01 23:00:06');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

#
# Data for table "bite"
#

INSERT INTO `bite` VALUES (1,'4','user','2017-08-17 22:55:02'),(2,'1','admin','2017-08-18 19:51:19'),(3,'2','admin','2017-08-18 19:51:38'),(4,'5','admin','2017-08-18 20:31:04'),(5,'4','admin','2017-08-19 21:44:35'),(6,'15','admin','2017-08-24 20:36:40'),(7,'14','admin','2017-08-24 20:37:37'),(8,'12','admin','2017-08-24 20:38:00'),(9,'11','admin','2017-08-24 20:39:45'),(10,'10','admin','2017-08-24 21:09:05'),(11,'51','admin','2017-09-01 00:05:26'),(12,'50','admin','2017-09-01 00:06:55'),(13,'51','admin','2017-09-01 00:41:04'),(14,'51','admin','2017-09-01 00:42:38'),(15,'2','hahah','2017-09-01 20:20:03'),(16,'6','hahah','2017-09-01 23:00:12');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

#
# Data for table "comment"
#

INSERT INTO `comment` VALUES (1,14,'admin','samoke comdsfosd','2017-08-23 21:58:22'),(2,14,'admin','this is my dsklfnsdk sdnfkldsnf sdklfn sdklnsf ksnf klsdnfsdklfndsfklnsd fklsdn fsdkl','2017-08-23 22:05:44'),(3,12,'admin','lay ay man  ni','2017-08-23 22:06:27'),(4,0,'','','2017-08-23 22:07:45'),(5,0,'admin','sample comment','2017-08-23 22:08:28'),(6,0,'admin','sample comment','2017-08-23 22:08:37'),(7,0,'admin','this is my dsklfnsdk sdnfkldsnf sdklfn sdklnsf ksnf klsdnfsdklfndsfklnsd fklsdn fsdkl','2017-08-23 22:08:47'),(8,0,'admin','this is my dsklfnsdk sdnfkldsnf sdklfn sdklnsf ksnf klsdnfsdklfndsfklnsd fklsdn fsdkl','2017-08-23 22:09:14'),(9,0,'admin','this is my dsklfnsdk sdnfkldsnf sdklfn sdklnsf ksnf klsdnfsdklfndsfklnsd fklsdn fsdkl','2017-08-23 22:10:20'),(10,14,'admin','hehehe','2017-08-23 22:11:06'),(11,12,'admin','rawr','2017-08-23 22:11:36'),(12,9,'admin','wala man ni','2017-08-23 22:14:57'),(13,14,'admin','','2017-08-23 22:17:12'),(14,14,'admin','sample ','2017-08-23 22:17:18'),(15,14,'admin','aray beh','2017-08-23 22:27:44'),(16,5,'admin','','2017-09-01 21:17:47'),(17,5,'admin','hellow','2017-09-01 21:21:19'),(18,5,'admin','how are you?','2017-09-01 21:21:28'),(19,5,'hahah','hellow musta na yoou??','2017-09-01 21:38:52'),(20,4,'hahah','anu ni imo caption man?','2017-09-01 21:39:16'),(21,6,'hahah','namit ba','2017-09-01 23:00:45'),(22,6,'hahah','jkgjkgjkgkj','2017-09-01 23:02:10');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "follow"
#

INSERT INTO `follow` VALUES (1,'admin','','2017-08-31 22:06:45'),(5,'admin','hahah','2017-09-01 00:55:30'),(6,'hahah','sddfdsfs','2017-09-01 23:02:22'),(7,'hahah','user','2017-09-01 23:02:35'),(8,'hahah','admin','2017-09-01 23:02:50');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "join_now"
#

INSERT INTO `join_now` VALUES (1,'4','user','2017-08-17 22:55:08'),(2,'4','admin','2017-08-18 20:08:56'),(3,'2','admin','2017-08-18 20:09:03'),(4,'3','admin','2017-08-18 20:10:21'),(5,'15','admin','2017-08-24 20:46:35'),(6,'14','admin','2017-08-24 20:46:41'),(7,'51','admin','2017-09-01 00:43:54'),(8,'50','admin','2017-09-01 00:43:57'),(9,'1','admin','2017-09-01 20:12:22'),(10,'5','admin','2017-09-01 21:07:37');

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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

#
# Data for table "notification"
#

INSERT INTO `notification` VALUES (1,'hahah','admin','Your post has a bite from admin','bite',NULL,'2017-08-18 20:31:04'),(2,'admin','hahah','hahah followed you','follow',NULL,'2017-08-18 20:45:44'),(3,'','admin','Your post has a bite from admin','bite',NULL,'2017-08-19 21:44:36'),(4,'user','admin','admin followed you','follow',NULL,'2017-08-19 22:30:01'),(5,'admin','admin','admin has commented on your post.','comment',NULL,'2017-08-23 22:27:44'),(6,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 20:36:40'),(7,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 20:37:37'),(8,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 20:38:00'),(9,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 20:39:45'),(10,'admin','admin','admin joined your post','join',NULL,'2017-08-24 20:46:35'),(11,'admin','admin','admin joined your post','join',NULL,'2017-08-24 20:46:41'),(12,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 21:09:05'),(13,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 21:55:45'),(14,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 21:56:10'),(15,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 21:56:17'),(16,'','admin','admin followed you','follow',NULL,'2017-08-31 22:03:30'),(17,'','admin','admin followed you','follow',NULL,'2017-08-31 22:04:10'),(18,'','admin','admin followed you','follow',NULL,'2017-08-31 22:06:45'),(19,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 22:11:02'),(20,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 22:11:26'),(21,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 23:21:20'),(22,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-09-01 00:05:26'),(23,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-09-01 00:06:55'),(24,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-09-01 00:41:04'),(25,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-09-01 00:42:38'),(26,'admin','admin','admin joined your post','join',NULL,'2017-09-01 00:43:54'),(27,'admin','admin','admin joined your post','join',NULL,'2017-09-01 00:43:57'),(28,'hahah','admin','admin followed you','follow',NULL,'2017-09-01 00:55:30'),(29,'admin','admin','admin joined your post','join',NULL,'2017-09-01 20:12:23'),(30,'admin','hahah','Your post has a bite from hahah','bite',NULL,'2017-09-01 20:20:04'),(31,'hahah','admin','admin joined your post','join',NULL,'2017-09-01 21:07:37'),(32,'hahah','admin','admin has commented on your post.','comment',NULL,'2017-09-01 21:17:47'),(33,'hahah','admin','admin has commented on your post.','comment',NULL,'2017-09-01 21:21:20'),(34,'hahah','admin','admin has commented on your post.','comment',NULL,'2017-09-01 21:21:28'),(35,'hahah','hahah','hahah has commented on your post.','comment',NULL,'2017-09-01 21:38:52'),(36,'admin','hahah','hahah has commented on your post.','comment',NULL,'2017-09-01 21:39:16'),(37,'hahah','hahah','Your post has a bite from hahah','bite',NULL,'2017-09-01 23:00:12'),(38,'hahah','hahah','hahah has commented on your post.','comment',NULL,'2017-09-01 23:00:46'),(39,'hahah','hahah','hahah has commented on your post.','comment',NULL,'2017-09-01 23:02:10'),(40,'sddfdsfs','hahah','hahah followed you','follow',NULL,'2017-09-01 23:02:22'),(41,'user','hahah','hahah followed you','follow',NULL,'2017-09-01 23:02:35'),(42,'admin','hahah','hahah followed you','follow',NULL,'2017-09-01 23:02:50');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'no-image',
  `total_notification` int(10) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'fred','admin',NULL,'garcia','admin','1504194755.jpg',15),(2,'fred ciagar','user',NULL,NULL,'12345','no-image',1),(3,'hehehe','hahah',NULL,'','12345','1504268222.jpg',15),(5,'admi','admi',NULL,NULL,'123','no-image',0),(6,'dskifndslif nldskfndsklfnsdklfsdnlk','correctuser',NULL,NULL,'12121212','no-image',0),(7,'james reid','james23',NULL,NULL,'123456','no-image',0),(8,'dsklfjsdlk jdsklfj sdklfjs fj','sddfdsfs',NULL,'aa@aa.com','12121212','no-image',1),(9,'dsklfndskl ndsfklns kls','dsklfnsdklfj sdklfnsdklsdnklfn lsdk',NULL,'ww@ww.com','123456','no-image',0),(10,'sklfjdskl ksdlfjdsklfj sdkl','gggg',NULL,'ff@ff.com','123456','no-image',0),(11,'fred garcia','fredowinz23',NULL,'fred@garcia.com','12345','no-image',0),(12,'jkgjkhjkhjkhjkh','qqqqq',NULL,'jhjkhjhkj@sdfsdf.dsfds','qqqqq','no-image',0);
