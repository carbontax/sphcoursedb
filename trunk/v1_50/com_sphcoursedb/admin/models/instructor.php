<?php
/**
 * Instructor Model for SPH Course DB Component
 *
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
			
		$array = JRequest::getVar('cid',0,'','array');
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
			$query = "SELECT id,firstname,lastname FROM `#__comprofiler` WHERE id=" . $this->_id;
			$this->_db->setQuery($query);
			$this->_data = $this->_db->loadObject();
		}
		if ( !$this->_data ) {
			$this->_data = new stdClass();
			$this->_id = 0;
			$this->_data->firstname = null;
			$this->_data->lastname = null;
		}
		return $this->_data;
	}

	/**
	 * This store method takes an optional POST array
	 * to allow for RAW html from editor inputs.
	 * @param POST array $data - optional
	 */
	function store($data=null) {
		// #__comprofiler table is read-only for our purposes
		return false;
	}

	function delete() {
		// #__comprofiler table is read-only for our purposes
		return false;
	}
	
	/*
	 * Mimics JModelList method of Joomla 1.6
	 */
	function getListQuery() {
		$db =& JFactory::getDBO();
		$query = $db->getQuery();
		$query->select('id,firstname,lastname');
		$query->from('#__comprofiler');
		return $query;
	}

}