<?php
/**
 * Course Model for SPH Course DB Component
 *
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.model' );

class SPHCourseDBModelCourse extends JModel
{
	/**
	 * Courses data array
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
	 * Set the Course identifier
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
			$query = "SELECT * FROM `#__sphcoursedb_courses` WHERE id=" . $this->_id;
			$this->_db->setQuery($query);
			$this->_data = $this->_db->loadObject();
		}
		if ( !$this->_data ) {
			$this->_data = new stdClass();
			$this->_id = 0;
			$this->_data->series_id = null;
			$this->_data->name = null;
			$this->_data->number = null;
		}
		return $this->_data;
	}

	function store() {
		$row =& $this->getTable();
		 
		$data = JRequest::get('post');
		if ( !$row->bind($data) ) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}
		if (!$row->check()) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}
		if ( !$row->store() ) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}
		return true;
	}

	function delete() {
		$cids = JRequest::getVar('cid',array(0),'post','array');
		$row =& $this->getTable();

		foreach ( $cids as $cid ) {
			if ( !$row->delete($cid) ) {
				$this->setError($row->getErrorMsg());
				return false;
			}
		}
		return true;
	}

}