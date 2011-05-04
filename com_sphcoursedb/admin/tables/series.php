<?php
/**
 * Course table class
 * 
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class TableSeries extends JTable
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
	var $name = null;

	/**
	 * @var string
	 */
	var $description = null;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function TableSeries(& $db) {
		parent::__construct('#__sphcoursedb_series', 'id', $db);
	}
}