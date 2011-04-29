DROP TABLE IF EXISTS `#__sphcoursedb_series`;

CREATE TABLE `#__sphcoursedb_series` (
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
`description` VARCHAR(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__sphcoursedb_series` (`name`,`description`) VALUES ("TEST SERIES","5555 series"),
("Biostatistics","5200 series"),
("CORE courses","5000 series"), ("Social Science and Health","5100 series"), 
("Essentials of Qualitative Research","Course Series");

DROP TABLE IF EXISTS `#__sphcoursedb_courses`;

CREATE TABLE `#__sphcoursedb_courses` (
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`series_id` INT(11) UNSIGNED NOT NULL,
`name` VARCHAR(255) NOT NULL,
`number` VARCHAR(255) NOT NULL,
`instructor` TEXT,
`prerequisites` TEXT,
`description` TEXT,
`objectives` TEXT,
`course_format` TEXT,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__sphcoursedb_courses` (`series_id`,`name`,`number`) VALUES (1,"TEST Course 1","5555001"), 
(1,"TEST Course 2","5555002"), 
(1,"TEST Course 3","5555003");

