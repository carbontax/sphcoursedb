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
`prereqs` TEXT,
`description` TEXT,
`objectives` TEXT,
`course_format` TEXT,
`syllabus_name` VARCHAR(255),
`syllabus_type` VARCHAR(255),
`syllabus_size` INT(11),
`syllabus_content` MEDIUMBLOB,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__sphcoursedb_courses` 
(`series_id`,`name`,`number`,`instructor`,`prereqs`,
`description`,`objectives`,`course_format`) 
VALUES (1,"TEST Course 1","5555001","Course 1 Instructor","Course 1 prerequisites",
"Course 1 description","Course 1 objectives", "Course 1 format"), 
(1,"TEST Course 2","5555002","Course 2 Instructor","Course 2 prerequisites",
"Course 2 description","Course 2 objectives", "Course 2 format"), 
(1,"TEST Course 3","5555003","Course 3 Instructor","Course 3 prerequisites",
"Course 3 description","Course 3 objectives", "Course 3 format");
