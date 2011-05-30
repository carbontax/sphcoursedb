CREATE TABLE IF NOT EXISTS `#__sphcoursedb_series` (
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
`description` VARCHAR(255) NOT NULL,
`published` TINYINT(1) NOT NULL DEFAULT 0,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__sphcoursedb_courses` (
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`series_id` INT(11) UNSIGNED NOT NULL,
`name` VARCHAR(255) NOT NULL,
`number` VARCHAR(255) NOT NULL,
`designation` VARCHAR(255) NOT NULL DEFAULT 'H',
`coordinator_id` INT(11) UNSIGNED,
`instructors` VARCHAR(255), 
`instructor_details` TEXT,
`prereqs` TEXT,
`description` TEXT,
`objectives` TEXT,
`course_format` TEXT,
`syllabus_name` VARCHAR(255),
`syllabus_type` VARCHAR(255),
`syllabus_size` INT(11),
`syllabus_content` MEDIUMBLOB,
`published` TINYINT(1) NOT NULL DEFAULT 0,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
