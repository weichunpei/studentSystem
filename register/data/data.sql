DROP DATABASE IF EXISTS `stu_system`;
CREATE DATABASE IF NOT EXISTS `stu_system` DEFAULT CHARACTER SET 'UTF8';
USE `stu_system`;
insert into user values (null,'魏春霈','123');
insert into user values (null,'张紫薇','123');
insert into user values (null,'贾亚泽','123');
insert into user values (null,'李欢庭','123');
insert into user values (null,'王保杰','123');
insert into user values (null,'王飞','123');
CREATE TABLE IF NOT EXISTS `user`(
`id` INT UNSIGNED AUTO_INCREMENT KEY,
`username` VARCHAR(20) NOT NULL UNIQUE,
`password` CHAR(32) NOT NULL
);
--insert into	student values (null,'德玛',22,'男');
--insert into	student values (null,'卡特',23,'女');
--insert into	student values (null,'安妮',24,'女');
--insert into	student values (null,'露露',25,'女');
--insert into	student values (null,'皇子',26,'男');
--insert into	student values (null,'沙皇',27,'男');
--insert into	student values (null,'蚂蚱',28,'男');
--insert into	student values (null,'球女',29,'女');
--insert into	student values (null,'赏金',22,'女');
--insert into	student values (null,'薇恩',24,'女');
--insert into	student values (null,'ez',22,'男');
--CREATE TABLE IF NOT EXISTS student(
--id INT UNSIGNED AUTO_INCREMENT KEY,
--username VARCHAR(20) NOT NULL UNIQUE,
--age INT NOT NULL,
--sex VARCHAR(10)
--);