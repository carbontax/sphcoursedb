<?php
/**
 * Instructor Model for SPH Course DB Component
 *
 * This class is a mock model for the Community Builder data we
 * need to link to. Community Builder does not follow the Joomla! 
 * MVC framework so there are no model and table classes for us
 * to invoke directly.
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.model' );

class SPHCourseDBModelInstructor extends JModel
{
	/**
	 * Comprofiler data array
	 *
	 * @var array
	 */
	var $_data;
	var $_id;

	function __construct() {
		parent::__construct();
		
		$array = JRequest::getVar('coordinator_id',array(0),'','array');
		$this->setId((int)$array[0]);
	}

	/**
	 * Set the Instructor identifier
	 *
	 * @access public
	 * @param int Course identifier
	 * @return void
	 */
	function setId($id) {
		$this->_id = $id;
		$this->_data = null;
	}

	function &getData() {
		if ( empty($this->_data) ) {
			// we are only interested in generating links to Community Builder
			$query = "SELECT id, firstname, lastname, "
			. " CONCAT(\"<a href='index.php?option=com_comprofiler&task=userprofile&user=\",id,\"'>\",firstname,\" \",lastname,\"</a>\") AS link "
			. " FROM `#__comprofiler` WHERE id=" . $this->_id;
			$this->_db->setQuery($query);
			$this->_data = $this->_db->loadObject();
		}
		if ( !$this->_data ) {
			$this->_data = new stdClass();
			$this->_id = 0;
			$this->_data->firstname = null;
			$this->_data->lastname = null;
			$this->_data->link = null;
		}
		return $this->_data;
	}
}