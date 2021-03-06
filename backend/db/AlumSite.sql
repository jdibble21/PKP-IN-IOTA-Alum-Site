
drop database if exists pkp_alum_data;
create database pkp_alum_data;
USE pkp_alum_data;

DROP TABLE IF EXISTS `alum_donators`;
CREATE TABLE `alum_donators` (
  `alumID` int(11) NOT NULL auto_increment primary key,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `yearInitiated` varchar(255) NOT NULL,
  `donationCount` int(11) NOT NULL
);

DROP TABLE IF EXISTS `donations`;
CREATE TABLE `donations` (
  `donationID` int(11) NOT NULL auto_increment primary key,
  `target` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` int(11) NOT NULL
);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userID` int(11) NOT NULL auto_increment primary key,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
);
DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE `newsletters` (
  `newsletterID` int(11) NOT NULL auto_increment primary key,
  `newsletterTitle` varchar(255) NOT NULL unique,
  `newsletterLink` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
);

insert into users(username, password, fullName, email) values ('admin','$2y$10$zHil2RebNZbyKgiH2Zxj.OVHiloKgyu/r177TIGBOSvWvb7qHo/b.','Super Admin','jakeers98@icloud.com');