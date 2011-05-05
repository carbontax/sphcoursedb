<?php
/**
 * Course table class
 *
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class TableCourse extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;

	/**
	 * Foreign Key
	 *
	 * @var int
	 */
	var $series_id = null;

	/**
	 * @var string
	 */
	var $name = null;

	/**
	 * @var string
	 */
	var $number = null;

	/**
	 * @var string
	 */
	var $instructor = null;

	/**
	 * @var string
	 */
	var $prereqs = null;

	/**
	 * @var string
	 */
	var $description = null;

	/**
	 * @var string
	 */
	var $objectives = null;

	/**
	 * @var string
	 */
	var $course_format = null;

	/**
	 * @var string
	 */
	var $syllabus_name = null;

	/**
	 * @var string
	 */
	var $syllabus_type = null;

	/**
	 * @var int
	 */
	var $syllabus_size = null;

	/**
	 * @var string
	 */
	var $syllabus_content = null;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function TableCourse(& $db) {
		parent::__construct('#__sphcoursedb_courses', 'id', $db);
	}
}