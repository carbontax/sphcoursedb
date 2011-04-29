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
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function TableCourse(& $db) {
		parent::__construct('#__sphcoursedb_courses', 'id', $db);
	}
}