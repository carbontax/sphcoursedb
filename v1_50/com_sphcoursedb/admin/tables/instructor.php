<?php
/**
 * Course table class
 *
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class TableInstructor extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;

	/**
	 * @var string
	 */
	var $firstname = null;

	/**
	 * @var string
	 */
	var $lastname = null;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function TableCourse(& $db) {
		parent::__construct('#__comprofiler', 'id', $db);
	}
}