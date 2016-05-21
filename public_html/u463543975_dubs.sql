-- MySQL dump 10.15  Distrib 10.0.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u463543975_dubs
-- ------------------------------------------------------
-- Server version	10.0.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `files_all`
--

DROP TABLE IF EXISTS `files_all`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files_all` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `source` text NOT NULL,
  `access` text NOT NULL,
  `likes` int(11) NOT NULL,
  `date` date NOT NULL,
  `whose` text NOT NULL,
  `file_src` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files_all`
--

/*!40000 ALTER TABLE `files_all` DISABLE KEYS */;
INSERT INTO `files_all` VALUES (65,'Rather Be','music/rather.mp3','0',0,'2016-05-13','Kazimov','music/rather.mp3'),(66,'Get Low','music/low.mp3','0',0,'2016-05-13','Kazimov','music/low.mp3'),(67,'Fiction','music/fiction.mp3','0',12,'2016-05-13','Kazimov','music/fiction.mp3'),(68,'Shine A Light','music/shine.mp3','1',12,'2016-05-13','Taylor','music/shine.mp3'),(70,'Eminem Lose Yourself','music/sad.mp3','1',0,'2016-05-13','Kazimov','music/sad.mp3'),(71,'Rihanna Work','music/work.mp3','1',0,'2016-05-13','Kazimov','music/work.mp3'),(72,'','','0',0,'2016-05-19','qpqp',''),(73,'Eminem Superman','superman.mp3','1',0,'2016-05-19','Doskulov','superman.mp3'),(74,'wamfp;we','http://dl1.mp3party.net/download/860014','1',0,'2016-05-19','Doskulov','http://dl1.mp3party.net/download/860014');
/*!40000 ALTER TABLE `files_all` ENABLE KEYS */;

--
-- Table structure for table `publishes`
--

DROP TABLE IF EXISTS `publishes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publishes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `source` text NOT NULL,
  `whose` text NOT NULL,
  `file_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publishes`
--

/*!40000 ALTER TABLE `publishes` DISABLE KEYS */;
INSERT INTO `publishes` VALUES (36,'Eminem Superman','2016-05-19','dsaflkjdsal;kfjd;slk','Doskulov','superman.mp3'),(37,'wamfp;we','2016-05-19','asmfp;aqmdf;','Doskulov','http://dl1.mp3party.net/download/860014'),(26,'Shine A Light','2016-05-13','Saw you stretched out in Room Ten O Nine<br>\nWith a smile on your face and a tear right in your eye.<br>\nOh, couldn\'t see to get a line on you, my sweet honey love.<br>\nBerber jew\'lry jangling down the street,<br>\nMake you shut your eyes at ev\'ry woman that you meet.<br>\nCould not seem to get a high on you, my sweet honey love.<br>\nMay the good Lord shine a light on you,<br>\nMake every song (you sing) your favorite tune.<br>\nMay the good Lord shine a light on you,<br>\nWarm like the evening sun.<br>\nWhen you\'re drunk in the alley, baby, with your clothes all torn<br>\nAnd your late night friends leave you in the cold gray dawn.<br>\nJust seemed too many flies on you, I just can\'t brush them off.<br>\nAngels beating all their wings in time,<br>\nWith smiles on their faces and a gleam right in their eyes.<br>\nWhoa, thought I heard on sigh for you,<br>\nCome on up, come on up, now, come on up now.<br>\nMay the good Lord shine a light on you,<br>\nMake every song you sing your favorite tune.<br>\nMay the good Lord shine a light on you,<br>\nWarm like the evening sun. <i>[x2]</i>','Taylor','music/shine.mp3'),(31,'Eminem Lose Yourself','2016-05-12','Look, if you had, one shot, or one opportunity<br>\r\nTo seize everything you ever wanted. In one moment<br>\r\nWould you capture it, or just let it slip?<br>\r\nYo<br>\r\n<br>\r\nHis palms are sweaty, knees weak, arms are heavy<br>\r\nThere\'s vomit on his sweater already, mom\'s spaghetti<br>\r\nHe\'s nervous, but on the surface he looks calm and ready to drop bombs,<br>\r\nBut he keeps on forgetting what he wrote down,<br>\r\nThe whole crowd goes so loud<br>\r\nHe opens his mouth, but the words won\'t come out<br>\r\nHe\'s choking how, everybody\'s joking now<br>\r\nThe clock\'s run out, time\'s up, over, blaow!<br>\r\nSnap back to reality. Oh, there goes gravity<br>\r\nOh, there goes Rabbit, he choked<br>\r\nHe\'s so mad, but he won\'t give up that<br>\r\nEasy, no<br>\r\nHe won\'t have it, he knows his whole back\'s to these ropes<br>\r\nIt don\'t matter, he\'s dope<br>\r\nHe knows that but he\'s broke<br>\r\nHe\'s so sad that he knows<br>\r\nWhen he goes back to his mobile home, that\'s when it\'s<br>\r\nBack to the lab again, yo<br>\r\nThis whole rhapsody<br>\r\nHe better go capture this moment and hope it don\'t pass him<br>\r\n<br>\r\n<i>[Hook:]</i><br>\r\nYou better lose yourself in the music, the moment<br>\r\nYou own it, you better never let it go (go)<br>\r\nYou only get one shot, do not miss your chance to blow<br>\r\nThis opportunity comes once in a lifetime (yo)<br>\r\nYou better lose yourself in the music, the moment<br>\r\nYou own it, you better never let it go (go)<br>\r\nYou only get one shot, do not miss your chance to blow<br>\r\nThis opportunity comes once in a lifetime (yo)<br>\r\n(You better)<br>\r\n<br>\r\nThe soul\'s escaping, through this hole that is gaping<br>\r\nThis world is mine for the taking<br>\r\nMake me king, as we move toward a new world order<br>\r\nA normal life is boring, but superstardom\'s close to postmortem<br>\r\nIt only grows harder, homie grows hotter<br>\r\nHe blows. It\'s all over. These hoes is all on him<br>\r\nCoast to coast shows, he\'s known as the globetrotter<br>\r\nLonely roads, God only knows<br>\r\nHe\'s grown farther from home, he\'s no father<br>\r\nHe goes home and barely knows his own daughter<br>\r\nBut hold your nose \'cause here goes the cold water<br>\r\nHis hoes don\'t want him no more, he\'s cold product<br>\r\nThey moved on to the next schmoe who flows<br>\r\nHe nose dove and sold nada<br>\r\nSo the soap opera is told and unfolds<br>\r\nI suppose it\'s old partner, but the beat goes on<br>\r\nDa da dum da dum da da da da<br>\r\n<br>\r\n<i>[Hook]</i><br>\r\n<br>\r\nNo more games, I\'m a change what you call rage<br>\r\nTear this motherfucking roof off like two dogs caged<br>\r\nI was playing in the beginning, the mood all changed<br>\r\nI\'ve been chewed up and spit out and booed off stage<br>\r\nBut I kept rhyming and stepped right into the next cypher<br>\r\nBest believe somebody\'s paying the Pied Piper<br>\r\nAll the pain inside amplified by the<br>\r\nFact that I can\'t get by with my 9 to 5<br>\r\nAnd I can\'t provide the right type of life for my family<br>\r\n\'Cause man, these goddamn food stamps don\'t buy diapers<br>\r\nAnd it\'s no movie, there\'s no Mekhi Phifer, this is my life<br>\r\nAnd these times are so hard, and it\'s getting even harder<br>\r\nTrying to feed and water my seed, plus<br>\r\nTeeter totter caught up between being a father and a primadonna<br>\r\nBaby, mama drama\'s screaming on her<br>\r\nToo much for me to wanna<br>\r\nStay in one spot, another day of monotony\'s gotten me<br>\r\nTo the point, I\'m like a snail<br>\r\nI\'ve got to formulate a plot or I end up in jail or shot<br>\r\nSuccess is my only motherfucking option, failure\'s not<br>\r\nMom, I love you, but this trailer\'s got to go<br>\r\nI cannot grow old in Salem\'s lot<br>\r\nSo here I go it\'s my shot.<br>\r\nFeet, fail me not<br>\r\nThis may be the only opportunity that I got<br>\r\n<br>\r\n<i>[Hook]</i><br>\r\n<br>\r\nYou can do anything you set your mind to, man','Taylor','music/sad.mp3'),(35,'Rihanna Work','2016-05-13','<i>[Chorus - Rihanna:]</i><br>\r\nWork, work, work, work, work, work<br>\r\nHe said me haffi<br>\r\nWork, work, work, work, work, work!<br>\r\nHe see me do me<br>\r\nDirt, dirt, dirt, dirt, dirt, dirt!<br>\r\nSo me put in<br>\r\nWork, work, work, work, work, work<br>\r\nWhen you ah gon\'<br>\r\nLearn, learn, learn, learn, learn<br>\r\nMeh nuh care if him<br>\r\nHurt, hurt, hurt, hurt, hurting<br>\r\n<br>\r\n<i>[Verse 1 - Rihanna:]</i><br>\r\nDry!... Me a desert him<br>\r\nNo time to have you lurking<br>\r\nHim ah go act like he don\'t like it<br>\r\nYou know I dealt with you the nicest<br>\r\nNobody touch me you nuh righteous<br>\r\nNobody text me in a crisis<br>\r\nI believed all of your dreams, adoration<br>\r\nYou took my heart and my keys and my patience<br>\r\nYou took my heart on my sleeve for decoration<br>\r\nYou mistaken my love I brought for you for foundation<br>\r\nAll that I wanted from you was to give me<br>\r\nSomething that I never had<br>\r\nSomething that you\'ve never seen<br>\r\nSomething that you\'ve never been!<br>\r\nMmmmm!<br>\r\nBut I wake up and act like nothing\'s wrong<br>\r\nJust get ready fi...<br>\r\n<br>\r\n<i>[Chorus - Rihanna:]</i><br>\r\nWork, work, work, work, work, work<br>\r\nHe said me haffi<br>\r\nWork, work, work, work, work, work!<br>\r\nHe see me do me<br>\r\nDirt, dirt, dirt, dirt, dirt, dirt!<br>\r\nSo me put in<br>\r\nWork, work, work, work, work, work<br>\r\nNer ner ner ner ner ner!<br>\r\nWhen you a gon\' learn, learn, learn, learn, learn!<br>\r\nBefore the tables turn, turn, turn, turn, turn, turn!<br>\r\n<br>\r\n<i>[Verse 2 - Rihanna:]</i><br>\r\nBeg you something please<br>\r\nBaby don\'t you leave<br>\r\nDon\'t leave me stuck here in the streets, uh huh<br>\r\nIf I get another chance to<br>\r\nI will never, no never neglect you<br>\r\nI mean who am I to hold your past against you?<br>\r\nI just hope that it gets to you<br>\r\nI hope that you see this through<br>\r\nI hope that you see this true<br>\r\nWhat can I say?<br>\r\nPlease recognize I\'m tryin\', babe!<br>\r\nI have to<br>\r\n<br>\r\n<i>[Chorus - Rihanna:]</i><br>\r\nWork, work, work, work, work, work<br>\r\nHe said me haffi<br>\r\nWork, work, work, work, work, work!<br>\r\nHe see me do me<br>\r\nDirt, dirt, dirt, dirt, dirt, dirt!<br>\r\nSo me put in<br>\r\nWork, work, work, work, work, work<br>\r\nWhen you ah gon\'<br>\r\nLearn, learn, learn, learn, learn<br>\r\nMeh nuh care if him<br>\r\nHurt, hurt, hurt, hurt, hurting<br>\r\n<br>\r\n<i>[Verse 3 - Drake:]</i><br>\r\nYeah, okay<br>\r\nYou need to get done, done, done, done at work, come over<br>\r\nWe just need to slow the motion<br>\r\nDon\'t give that away to no one<br>\r\nLong distance, I need you<br>\r\nWhen I see potential I just gotta see it through<br>\r\nIf you had a twin, I would still choose you<br>\r\nI don\'t wanna rush into it, if it\'s too soon<br>\r\nBut I know you need to get done, done, done, done<br>\r\nIf you come over<br>\r\nSorry if I\'m way less friendly<br>\r\nI got niggas tryna end me, oh<br>\r\nI spilled all my emotions tonight, I\'m sorry<br>\r\nRollin\', rollin\', rollin\', rollin\', rollin\'<br>\r\nHow many more shots until you\'re rollin\'?<br>\r\nWe just need a face to face<br>\r\nYou could pick the time and the place<br>\r\nYou spent some time away<br>\r\nNow you need to forward and give me all the...<br>\r\n<br>\r\n<i>[Chorus - Rihanna &amp; Drake:]</i><br>\r\nWork, work, work, work, work, work<br>\r\nHe said me haffi<br>\r\nWork, work, work, work, work, work<br>\r\nHe see me do me<br>\r\nDirt, dirt, dirt, dirt, dirt, dirt!<br>\r\nSo me put in<br>\r\nWork, work, work, work, work, work<br>\r\nWhen you ah gon\'<br>\r\nLearn, learn, learn, learn, learn<br>\r\nMeh nuh care if him<br>\r\nHurt, hurt, hurt, hurt, hurting<br>\r\n<br>\r\n<i>[Outro - Rihanna:]</i><br>\r\nMmmmm, mmmmm<br>\r\nMmmmm, mmmmm<br>\r\nWork, work, work, work, work, work<br>\r\nMmmmm, mmmmm','Kazimov','music/work.mp3');
/*!40000 ALTER TABLE `publishes` ENABLE KEYS */;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `avatar` text NOT NULL,
  `status` text NOT NULL,
  `rating` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` int(11) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (24,'Kazimov','0547ddd5856acfb3f2a6245ee16c8981','Darkhan','Kazimov','imag/prof/135266e1i7wxy53.jpg','',0,23,'March',1996,'kazimov.darkhan@gmail.com'),(25,'qpqp','0a352f19e8f486d5ada12f4d8e065abb','qpqp','qpqp','imag/man.jpg','',0,2,'March',1997,'qpqp@gmail.com'),(26,'Doskulov','0547ddd5856acfb3f2a6245ee16c8981','Darkhan','Doskulov','imag/man.jpg','',0,15,'October',1998,'doskul7@gmail.com');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;

--
-- Table structure for table `zapros`
--

DROP TABLE IF EXISTS `zapros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zapros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `idnew` text NOT NULL,
  `dat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zapros`
--

/*!40000 ALTER TABLE `zapros` DISABLE KEYS */;
INSERT INTO `zapros` VALUES (3,'Doskulov','James Arthur - Impossible','1'),(4,'Doskulov','Rihanna Work','1'),(5,'qpqp','','0'),(6,'Doskulov','Eminem Superman','1'),(7,'Doskulov','wamfp;we','1');
/*!40000 ALTER TABLE `zapros` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-19 10:06:11
