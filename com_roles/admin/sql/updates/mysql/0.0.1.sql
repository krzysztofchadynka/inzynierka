CREATE TABLE `#__roles_user` (
    `user_id` int(11) NOT NULL,
    `role_id` int(11) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `#__roles_role` (
    `role_id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(128) NOT NULL,
    PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `#__roles_categories` (
    `role_id` int(11) NOT NULL,
    `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

INSERT INTO `#__roles_role` (`name`)
VALUES ('student'), ('employee'), ('vip');

INSERT INTO `#__roles_categories` (`role_id`, `category_id`)
VALUES (1,2), (2,2), (3,2);