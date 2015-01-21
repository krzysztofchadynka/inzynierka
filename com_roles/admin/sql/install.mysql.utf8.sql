DROP TABLE IF EXISTS `#__roles_info`;
DROP TABLE IF EXISTS `#__roles_user`;
DROP TABLE IF EXISTS `#__roles_role`;
DROP TABLE IF EXISTS `#__roles_categories`;

CREATE TABLE `#__roles_info` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `header` varchar(128) NOT NULL,
    `description` varchar(512) NOT NULL,
    `image` varchar(128),
    `user_info` varchar(128),
    `role_info` varchar(128),
    `categories_info` varchar(128),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `#__roles_user` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `role_id` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `#__roles_role` (
    `role_id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(128) NOT NULL,
    PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `#__roles_categories` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `role_id` int(11) NOT NULL,
    `category_id` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

INSERT INTO `#__roles_role` (`name`)
VALUES ('student'), ('employee'), ('vip');

INSERT INTO `#__roles_categories` (`role_id`, `category_id`)
VALUES (1,2), (2,2), (3,2);

INSERT INTO `#__roles_info` 
(`header`, `description`, `image` , `user_info`, `role_info`, `categories_info`)
VALUES 
('COM_ROLES_INFO_HEADER', 'COM_ROLES_INFO_DESC', '/components/com_roles/img/avatar.png' ,'COM_ROLES_INFO_USERINFO',
'COM_ROLES_INFO_ROLE_INFO', 'COM_ROLES_INFO_CAT_INFO');