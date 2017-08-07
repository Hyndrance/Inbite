# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2017-08-06 20:04:48
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "activity"
#

INSERT INTO `activity` VALUES (1,'dale','asdf','file','bacolod','2017-07-28 20:05:22'),(2,'dale','hahaha','asdf','bacolod','2017-07-28 20:10:22'),(3,'admin','kjdflsdkfhlsdkfs','1501244192.jpg','bacolod','2017-07-28 20:16:32'),(4,'admin','sample lang ni nga post','1501245938.jpg','bacolod','2017-07-28 20:45:37'),(5,'admin','I can not upload','1501246011.','bacolod','2017-07-28 20:46:50'),(6,'admin','eat like crazy!','1501252857.jpg','bacolod','2017-07-28 22:40:57'),(7,'admin','hello','1501254552.jpg','bacolod','2017-07-28 23:09:12'),(8,'admin','hehe','1501254650.jpg','bacolod','2017-07-28 23:10:49'),(9,'admin','yut','1501254685.jpg','bacolod','2017-07-28 23:11:24'),(10,'admin','Best Cake ever! ','1501326070.jpg','bacolod','2017-07-29 19:01:10'),(11,'admin','','1501326107.','bacolod','2017-07-29 19:01:46'),(12,'admin','Loving the beef! ','1501326153.jpg','bacolod','2017-07-29 19:02:32'),(13,'fredowinz23','dslfmds ldskfkldsf ksdlnfdsklfndsfklndsf\r\nsdfdslkfndsflkndf\r\ndfsdfmdsfsd\r\nfdsfdsfdsfddsf\r\ns ndsflkdsfklnsd klnsd kldnsf kldsf klsdnf n fk\r\ndsfdslkfndsflkndsflds\r\ndsflndskfnsdflkndskldnskl dslkfdslk ds fds flsdjl sdf\r\nf sdiofds fiosfds fds fds ods fsd\r\nsd fdsf ds ds dsds dsfi dio sdiof dsifods fiosd fids ds   iods dsio dsi dsiof sd','1502020431.','bacolod','2017-08-06 19:53:51');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "comment"
#

INSERT INTO `comment` VALUES (1,1,'fred123','I like this food','2017-08-05 19:14:10'),(2,1,'anne23','yeah right','2017-08-05 19:18:23'),(3,1,'admin','kldsnmflkdsnfdskl','2017-08-06 19:26:19'),(4,12,'admin','ds,fsdmlfnsdmfl','2017-08-06 19:26:27'),(5,12,'admin','heller','2017-08-06 19:29:18'),(6,12,'admin','how are you?','2017-08-06 19:45:44');

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
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'dale','admin',NULL,'12345',NULL),(2,'fred ciagar','user',NULL,'12345',NULL),(3,'hehehe','hahah',NULL,'12345',NULL),(5,'admi','admi',NULL,'123',NULL),(6,'dskifndslif nldskfndsklfnsdklfsdnlk','correctuser',NULL,'12121212',NULL),(7,'james reid','james23',NULL,'123456',NULL),(8,'dsklfjsdlk jdsklfj sdklfjs fj','sddfdsfs','aa@aa.com','12121212',NULL),(9,'dsklfndskl ndsfklns kls','dsklfnsdklfj sdklfnsdklsdnklfn lsdk','ww@ww.com','123456',NULL),(10,'sklfjdskl ksdlfjdsklfj sdkl','gggg','ff@ff.com','123456',NULL),(11,'fred garcia','fredowinz23','fred@garcia.com','12345',NULL);
