drop  database  IF EXISTS library;
drop  database  IF EXISTS lib;
create database IF NOT EXISTS library;
USE library;

CREATE TABLE `available` 
(
`id` int(20) NOT NULL AUTO_INCREMENT,
`avail` int(20) NOT NULL,

PRIMARY KEY(id)

);

CREATE TABLE `storereserve`
(
`id` int(20) NOT NULL,
`username` int NOT NULL,
`booktime` datetime NOT NULL


);

CREATE TABLE `storeconfirm`
(
`id` int(20) NOT NULL,
`username` int NOT NULL,
`confirmtime` datetime NOT NULL


);

CREATE TABLE `login`
(
`uid` int(20) NOT NULL AUTO_INCREMENT,
`firstName` varchar(20) NOT NULL,
`middleName` varchar(20) NOT NULL,
`lastName` varchar(20) NOT NULL,
`phoneNo` varchar(20) NOT NULL,
`email` varchar(20) NOT NULL,
`username` int(20) NOT NULL UNIQUE,
`password` varchar(20) NOT NULL,
user_type varchar(20) NOT NULL,
PRIMARY KEY (`uid`) 

);


CREATE TABLE `reserve` (
`id` int(20) NOT NULL,
`username` int NOT NULL,
`booktime` timestamp NOT NULL,

 FOREIGN KEY (`id`) REFERENCES  available(`id`),
   FOREIGN KEY (`username`) REFERENCES  login(`username`)
);

CREATE TABLE `confirm` (
`id` int(20) NOT NULL AUTO_INCREMENT,
`username` int NOT NULL UNIQUE,
`booktime` timestamp NOT NULL,

 FOREIGN KEY (`id`) REFERENCES  available(`id`),
   FOREIGN KEY (`username`) REFERENCES  login(`username`)
);


INSERT INTO `login` VALUES ('1','George','Kitui','Walubengo','+254717149701','gbkoks196@gmail.com','89453','youngking','admin');
