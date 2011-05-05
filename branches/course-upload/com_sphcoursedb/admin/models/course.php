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
			$this->_data->instructor = null;
			$this->_data->prerequisites = null;
			$this->_data->description = null;
			$this->_data->objectives = null;
			$this->_data->course_format = null;
			$this->_data->syllabus_name = null;
		}
		return $this->_data;
	}

	/**
	 * This store method takes an optional POST array
	 * to allow for RAW html from editor inputs.
	 * @param POST array $data - optional
	 */
	function store($data=null) {
		$row =& $this->getTable();

		if ($data == null ) {
			$data = JRequest::get('post');
		}
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


	/**
	 * @return a link to the syllabus upload if it exists, or an empty string.
	 */
	function syllabus_link() {
		if ( $this->_data->syllabus_name ) {
			return JHTML::link('index.php?option=com_sphcoursedb&controller=course&cid=' . $this->_id,
			$this->_data->syllabus_name,
			array('target' => '_blank'));
		}
		else {
			return '';
		}
	}

}