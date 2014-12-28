DROP TABLE IF EXISTS `#__roles_user`;
DROP TABLE IF EXISTS `#__roles_role`;
DROP TABLE IF EXISTS `#__roles_rule`;
DROP TABLE IF EXISTS `#__roles_role_rule`;

CREATE TABLE `#__roles_user` (
    `user_id` int(11) NOT NULL,
    `role_id` int(11) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `#__roles_role` (
    `role_id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(128) NOT NULL,
    PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `#__roles_rule` (
    `rule_id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(128) NOT NULL,
    PRIMARY KEY (`rule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `#__roles_role_rule` (
    `role_id` int(11) NOT NULL,
    `rule_id` int(11) NOT NULL
) ENGINE=InnoDB;