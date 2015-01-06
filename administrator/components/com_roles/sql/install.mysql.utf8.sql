DROP TABLE IF EXISTS `#__roles_user`;
DROP TABLE IF EXISTS `#__roles_role`;

CREATE TABLE `#__roles_user` (
    `user_id` int(11) NOT NULL,
    `role_id` int(11) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `#__roles_role` (
    `role_id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(128) NOT NULL,
    PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `#__roles_articles` (
    `role_id` int(11) NOT NULL,
    `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 



INSERT INTO `#__roles_role` (`name`)
VALUES ('student'), ('employee'), ('vip');