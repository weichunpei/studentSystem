DROP DATABASE IF EXISTS `stu_system`;
CREATE DATABASE IF NOT EXISTS `stu_system` DEFAULT CHARACTER SET 'UTF8';
USE `stu_system`;
--CREATE TABLE IF NOT EXISTS `stu_mess`(
--`id` INT UNSIGNED AUTO_INCREMENT KEY,
--`username` VARCHAR(20) NOT NULL UNIQUE,
--`password` CHAR(32) NOT NULL,
--`email` VARCHAR(50) NOT NULL,
--`token` CHAR(32) NOT NULL COMMENT '激活token',
--`token_exptime` INT UNSIGNED NOT NULL COMMENT 'token的过期时间',
--`regTime` INT UNSIGNED NOT NULL,
--`status` TINYINT UNSIGNED DEFAULT 0 COMMENT '0代表未激活，1代表激活'
--);
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
CREATE TABLE IF NOT EXISTS student(
id INT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
age INT NOT NULL,
sex VARCHAR(10)
);