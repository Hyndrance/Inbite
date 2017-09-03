# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2017-09-03 22:36:54
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

#
# Data for table "activity"
#

INSERT INTO `activity` VALUES (1,'admin','lamb','1504199461.jpg','bacolod','2017-09-01 01:11:06'),(2,'admin','mousse\r\n','1504199483.jpg','bacolod','2017-09-01 01:11:29'),(3,'admin','hahaha','1504268068.jpg','bacolod','2017-09-01 20:14:34'),(4,'admin','kldsfhjdsklfjsdklfjsdklfjdskfl','1504268090.jpg','bacolod','2017-09-01 20:14:54'),(5,'hahah','sample update emaul','1504268233.jpg','bacolod','2017-09-01 20:19:56'),(6,'hahah','test','1504278001.jpg','bacolod','2017-09-01 23:00:06'),(7,'admin','Loving this','1504437782.jpg','bacolod','2017-09-03 19:23:30'),(8,'denmark','Love the strawberries. ','1504438092.jpg','bacolod','2017-09-03 19:28:27'),(9,'denmark',NULL,'1504440081.jpg','bacolod','2017-09-03 20:01:20'),(10,'denmark','power','1504440081.jpg','bacolod','2017-09-03 20:01:25'),(11,'denmark','lorem ipsum\r\n\r\n\r\n\r\n#qweqweq\r\n#qweqw\r\n#weqwe\r\n','1504440538.jpg','bacolod','2017-09-03 20:09:09'),(12,'denmark','beef stu','1504440786.jpg','bacolod','2017-09-03 20:14:47'),(13,'denmark','pork chop @publiq','1504440817.jpg','bacolod','2017-09-03 20:33:33'),(14,'denmark',NULL,'1504442078.jpg','bacolod','2017-09-03 20:34:38'),(15,'denmark','fucking beef','1504442119.jpg','bacolod','2017-09-03 20:35:32');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

#
# Data for table "bite"
#

INSERT INTO `bite` VALUES (1,'4','user','2017-08-17 22:55:02'),(2,'1','admin','2017-08-18 19:51:19'),(3,'2','admin','2017-08-18 19:51:38'),(4,'5','admin','2017-08-18 20:31:04'),(5,'4','admin','2017-08-19 21:44:35'),(6,'15','admin','2017-08-24 20:36:40'),(7,'14','admin','2017-08-24 20:37:37'),(8,'12','admin','2017-08-24 20:38:00'),(9,'11','admin','2017-08-24 20:39:45'),(10,'10','admin','2017-08-24 21:09:05'),(11,'51','admin','2017-09-01 00:05:26'),(12,'50','admin','2017-09-01 00:06:55'),(13,'51','admin','2017-09-01 00:41:04'),(14,'51','admin','2017-09-01 00:42:38'),(15,'2','hahah','2017-09-01 20:20:03'),(16,'6','hahah','2017-09-01 23:00:12'),(17,'7','admin','2017-09-03 19:23:39'),(18,'8','denmark','2017-09-03 19:28:34'),(19,'6','denmark','2017-09-03 19:28:50'),(20,'9','denmark','2017-09-03 20:01:34'),(21,'10','denmark','2017-09-03 20:03:03'),(22,'5','denmark','2017-09-03 20:04:22'),(23,'12','denmark','2017-09-03 20:13:16'),(24,'13','denmark','2017-09-03 20:32:53'),(25,'11','denmark','2017-09-03 20:33:09'),(26,'4','denmark','2017-09-03 20:41:01'),(27,'1','denmark','2017-09-03 20:41:06');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

#
# Data for table "comment"
#

INSERT INTO `comment` VALUES (1,14,'admin','samoke comdsfosd','2017-08-23 21:58:22'),(2,14,'admin','this is my dsklfnsdk sdnfkldsnf sdklfn sdklnsf ksnf klsdnfsdklfndsfklnsd fklsdn fsdkl','2017-08-23 22:05:44'),(3,12,'admin','lay ay man  ni','2017-08-23 22:06:27'),(4,0,'','','2017-08-23 22:07:45'),(5,0,'admin','sample comment','2017-08-23 22:08:28'),(6,0,'admin','sample comment','2017-08-23 22:08:37'),(7,0,'admin','this is my dsklfnsdk sdnfkldsnf sdklfn sdklnsf ksnf klsdnfsdklfndsfklnsd fklsdn fsdkl','2017-08-23 22:08:47'),(8,0,'admin','this is my dsklfnsdk sdnfkldsnf sdklfn sdklnsf ksnf klsdnfsdklfndsfklnsd fklsdn fsdkl','2017-08-23 22:09:14'),(9,0,'admin','this is my dsklfnsdk sdnfkldsnf sdklfn sdklnsf ksnf klsdnfsdklfndsfklnsd fklsdn fsdkl','2017-08-23 22:10:20'),(10,14,'admin','hehehe','2017-08-23 22:11:06'),(11,12,'admin','rawr','2017-08-23 22:11:36'),(12,9,'admin','wala man ni','2017-08-23 22:14:57'),(13,14,'admin','','2017-08-23 22:17:12'),(14,14,'admin','sample ','2017-08-23 22:17:18'),(15,14,'admin','aray beh','2017-08-23 22:27:44'),(16,5,'admin','','2017-09-01 21:17:47'),(17,5,'admin','hellow','2017-09-01 21:21:19'),(18,5,'admin','how are you?','2017-09-01 21:21:28'),(19,5,'hahah','hellow musta na yoou??','2017-09-01 21:38:52'),(20,4,'hahah','anu ni imo caption man?','2017-09-01 21:39:16'),(21,6,'hahah','namit ba','2017-09-01 23:00:45'),(22,6,'hahah','jkgjkgjkgkj','2017-09-01 23:02:10'),(23,7,'admin','heyyy','2017-09-03 19:24:01'),(24,7,'admin','ahahahah','2017-09-03 19:24:07'),(25,6,'denmark','where kamo? ','2017-09-03 19:29:00'),(26,8,'denmark','looks tasty!','2017-09-03 19:30:30'),(27,10,'denmark','afv','2017-09-03 20:01:46'),(28,10,'denmark','we','2017-09-03 20:08:19'),(29,10,'denmark','comment\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nqweqw\r\nwqe\r\nqwe\r\nw\r\n','2017-09-03 20:08:42'),(30,13,'denmark','yum tum','2017-09-03 20:33:45'),(31,15,'denmark','Shomit!\r\n\r\n','2017-09-03 20:41:44');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "join_now"
#

INSERT INTO `join_now` VALUES (1,'4','user','2017-08-17 22:55:08'),(2,'4','admin','2017-08-18 20:08:56'),(3,'2','admin','2017-08-18 20:09:03'),(4,'3','admin','2017-08-18 20:10:21'),(5,'15','admin','2017-08-24 20:46:35'),(6,'14','admin','2017-08-24 20:46:41'),(7,'51','admin','2017-09-01 00:43:54'),(8,'50','admin','2017-09-01 00:43:57'),(9,'1','admin','2017-09-01 20:12:22'),(10,'5','admin','2017-09-01 21:07:37'),(11,'6','denmark','2017-09-03 19:28:52'),(12,'8','denmark','2017-09-03 19:31:12'),(13,'7','denmark','2017-09-03 19:42:39'),(14,'9','denmark','2017-09-03 20:04:39'),(15,'9','denmark','2017-09-03 20:04:40'),(16,'10','denmark','2017-09-03 20:04:48'),(17,'13','denmark','2017-09-03 20:32:58'),(18,'12','denmark','2017-09-03 20:33:02'),(19,'11','denmark','2017-09-03 20:33:07'),(20,'5','denmark','2017-09-03 20:33:18'),(21,'15','denmark','2017-09-03 20:35:36'),(22,'2','denmark','2017-09-03 20:41:10'),(23,'3','denmark','2017-09-03 20:41:18');

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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

#
# Data for table "notification"
#

INSERT INTO `notification` VALUES (1,'hahah','admin','Your post has a bite from admin','bite',NULL,'2017-08-18 20:31:04'),(2,'admin','hahah','hahah followed you','follow',NULL,'2017-08-18 20:45:44'),(3,'','admin','Your post has a bite from admin','bite',NULL,'2017-08-19 21:44:36'),(4,'user','admin','admin followed you','follow',NULL,'2017-08-19 22:30:01'),(5,'admin','admin','admin has commented on your post.','comment',NULL,'2017-08-23 22:27:44'),(6,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 20:36:40'),(7,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 20:37:37'),(8,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 20:38:00'),(9,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 20:39:45'),(10,'admin','admin','admin joined your post','join',NULL,'2017-08-24 20:46:35'),(11,'admin','admin','admin joined your post','join',NULL,'2017-08-24 20:46:41'),(12,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-08-24 21:09:05'),(13,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 21:55:45'),(14,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 21:56:10'),(15,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 21:56:17'),(16,'','admin','admin followed you','follow',NULL,'2017-08-31 22:03:30'),(17,'','admin','admin followed you','follow',NULL,'2017-08-31 22:04:10'),(18,'','admin','admin followed you','follow',NULL,'2017-08-31 22:06:45'),(19,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 22:11:02'),(20,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 22:11:26'),(21,'hahah','admin','admin followed you','follow',NULL,'2017-08-31 23:21:20'),(22,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-09-01 00:05:26'),(23,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-09-01 00:06:55'),(24,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-09-01 00:41:04'),(25,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-09-01 00:42:38'),(26,'admin','admin','admin joined your post','join',NULL,'2017-09-01 00:43:54'),(27,'admin','admin','admin joined your post','join',NULL,'2017-09-01 00:43:57'),(28,'hahah','admin','admin followed you','follow',NULL,'2017-09-01 00:55:30'),(29,'admin','admin','admin joined your post','join',NULL,'2017-09-01 20:12:23'),(30,'admin','hahah','Your post has a bite from hahah','bite',NULL,'2017-09-01 20:20:04'),(31,'hahah','admin','admin joined your post','join',NULL,'2017-09-01 21:07:37'),(32,'hahah','admin','admin has commented on your post.','comment',NULL,'2017-09-01 21:17:47'),(33,'hahah','admin','admin has commented on your post.','comment',NULL,'2017-09-01 21:21:20'),(34,'hahah','admin','admin has commented on your post.','comment',NULL,'2017-09-01 21:21:28'),(35,'hahah','hahah','hahah has commented on your post.','comment',NULL,'2017-09-01 21:38:52'),(36,'admin','hahah','hahah has commented on your post.','comment',NULL,'2017-09-01 21:39:16'),(37,'hahah','hahah','Your post has a bite from hahah','bite',NULL,'2017-09-01 23:00:12'),(38,'hahah','hahah','hahah has commented on your post.','comment',NULL,'2017-09-01 23:00:46'),(39,'hahah','hahah','hahah has commented on your post.','comment',NULL,'2017-09-01 23:02:10'),(40,'sddfdsfs','hahah','hahah followed you','follow',NULL,'2017-09-01 23:02:22'),(41,'user','hahah','hahah followed you','follow',NULL,'2017-09-01 23:02:35'),(42,'admin','hahah','hahah followed you','follow',NULL,'2017-09-01 23:02:50'),(43,'admin','admin','Your post has a bite from admin','bite',NULL,'2017-09-03 19:23:39'),(44,'admin','admin','admin has commented on your post.','comment',NULL,'2017-09-03 19:24:01'),(45,'admin','admin','admin has commented on your post.','comment',NULL,'2017-09-03 19:24:07'),(46,'denmark','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 19:28:34'),(47,'hahah','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 19:28:50'),(48,'hahah','denmark','denmark joined your post','join',NULL,'2017-09-03 19:28:52'),(49,'hahah','denmark','denmark has commented on your post.','comment',NULL,'2017-09-03 19:29:00'),(50,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 19:30:02'),(51,'denmark','denmark','denmark has commented on your post.','comment',NULL,'2017-09-03 19:30:30'),(52,'denmark','denmark','denmark joined your post','join',NULL,'2017-09-03 19:31:12'),(53,'admin','denmark','denmark joined your post','join',NULL,'2017-09-03 19:42:39'),(54,'denmark','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 20:01:34'),(55,'denmark','denmark','denmark has commented on your post.','comment',NULL,'2017-09-03 20:01:46'),(56,'denmark','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 20:03:03'),(57,'hahah','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 20:04:22'),(58,'denmark','denmark','denmark joined your post','join',NULL,'2017-09-03 20:04:40'),(59,'denmark','denmark','denmark joined your post','join',NULL,'2017-09-03 20:04:40'),(60,'denmark','denmark','denmark joined your post','join',NULL,'2017-09-03 20:04:48'),(61,'denmark','denmark','denmark has commented on your post.','comment',NULL,'2017-09-03 20:08:19'),(62,'denmark','denmark','denmark has commented on your post.','comment',NULL,'2017-09-03 20:08:42'),(63,'denmark','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 20:13:16'),(64,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 20:21:19'),(65,'denmark','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 20:32:53'),(66,'denmark','denmark','denmark joined your post','join',NULL,'2017-09-03 20:32:58'),(67,'denmark','denmark','denmark joined your post','join',NULL,'2017-09-03 20:33:02'),(68,'denmark','denmark','denmark joined your post','join',NULL,'2017-09-03 20:33:07'),(69,'denmark','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 20:33:09'),(70,'hahah','denmark','denmark joined your post','join',NULL,'2017-09-03 20:33:18'),(71,'denmark','denmark','denmark has commented on your post.','comment',NULL,'2017-09-03 20:33:45'),(72,'denmark','denmark','denmark joined your post','join',NULL,'2017-09-03 20:35:37'),(73,'admin','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 20:41:01'),(74,'admin','denmark','Your post has a bite from denmark','bite',NULL,'2017-09-03 20:41:06'),(75,'admin','denmark','denmark joined your post','join',NULL,'2017-09-03 20:41:11'),(76,'admin','denmark','denmark joined your post','join',NULL,'2017-09-03 20:41:18'),(77,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 20:41:24'),(78,'denmark','denmark','denmark has commented on your post.','comment',NULL,'2017-09-03 20:41:44'),(79,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 21:35:11'),(80,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 21:37:04'),(81,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 21:37:21'),(82,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 21:38:04'),(83,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 21:38:25'),(84,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 21:38:40'),(85,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 21:38:45'),(86,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 21:39:13'),(87,'hahah','denmark','denmark followed you','follow',NULL,'2017-09-03 21:40:01');

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
  `food` text,
  `drinks` text,
  `places` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'fred','admin',NULL,'garcia','admin','1504194755.jpg',23,NULL,NULL,NULL),(2,'fred ciagar','user',NULL,NULL,'12345','no-image',1,NULL,NULL,NULL),(3,'hehehe','hahah',NULL,'','12345','1504268222.jpg',32,'carbonara','pilsen','publiq'),(5,'admi','admi',NULL,NULL,'123','no-image',0,NULL,NULL,NULL),(6,'dskifndslif nldskfndsklfnsdklfsdnlk','correctuser',NULL,NULL,'12121212','no-image',0,NULL,NULL,NULL),(7,'james reid','james23',NULL,NULL,'123456','no-image',0,NULL,NULL,NULL),(8,'dsklfjsdlk jdsklfj sdklfjs fj','sddfdsfs',NULL,'aa@aa.com','12121212','no-image',1,NULL,NULL,NULL),(9,'dsklfndskl ndsfklns kls','dsklfnsdklfj sdklfnsdklsdnklfn lsdk',NULL,'ww@ww.com','123456','no-image',0,NULL,NULL,NULL),(10,'sklfjdskl ksdlfjdsklfj sdkl','gggg',NULL,'ff@ff.com','123456','no-image',0,NULL,NULL,NULL),(11,'fred garcia','fredowinz23',NULL,'fred@garcia.com','12345','no-image',0,NULL,NULL,NULL),(12,'jkgjkhjkhjkhjkh','qqqqq',NULL,'jhjkhjhkj@sdfsdf.dsfds','qqqqq','no-image',0,NULL,NULL,NULL),(13,'denmark contre','denmark',NULL,'demark@gmail.com','denmark','1504438055.jpg',20,'nachos, tacos','lights, pilsen','publiq, sleepnot');
