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
	var $_coordinator;
	var $_instructors;

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
		$this->_coordinator = null;
		$this->_instructors = array();
	}

	function &getData() {
		if ( empty($this->_data) ) {
			/* we specify the fields so we can skip syllabus_content */
			$query = "SELECT id, series_id, name, number, designation, coordinator_id, "
			. " instructors, instructor_details, prereqs, description, "
			. " objectives, course_format, syllabus_name, syllabus_type, "
			. " syllabus_size, published "
			."FROM `#__sphcoursedb_courses` WHERE id=" . $this->_id;
			$this->_db->setQuery($query);
			$this->_data = $this->_db->loadObject();
		}
		if ( !$this->_data ) {
			$this->_data = new stdClass();
			$this->_id = 0;
			$this->_data->series_id = null;
			$this->_data->name = null;
			$this->_data->number = null;
			$this->_data->designation = null;
			$this->_data->coordinator_id = null;
			$this->_data->instructors = null;
			$this->_data->instructor_detail = null;
			$this->_data->prereqs = null;
			$this->_data->description = null;
			$this->_data->objectives = null;
			$this->_data->course_format = null;
			$this->_data->syllabus_name = null;
			$this->_data->syllabus_size = null;
			$this->_data->syllabus_type = null;
			$this->_data->published=null;
			$this->_coordinator = null;
			$this->_instructors = array();
		}
		return $this->_data;
	}

	function &getCoordinator() {
		if ( empty($this->_coordinator)) {
			$c =& JModel::getInstance('instructor','SPHCourseDBModel');
			$c->setId($this->_data->coordinator_id);
			$this->_coordinator =& $c->getData();
		}
		return $this->_coordinator;
	}

	function &getInstructors() {
		if ( ! count($this->_instructors) ) {
			$instructor_ids = explode(',',$this->_data->instructors);
			foreach ( $instructor_ids as $i ) {
				$c =& JModel::getInstance('instructor','SPHCourseDBModel');
				$c->setId($i);
				$this->_instructors[] =& $c->getData();
			}
			return $this->_instructors;
		}
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
	 * Method to (un)publish a course
	 *
	 * @access	public
	 * @return	boolean	True on success
	 * @since	1.5
	 */
	function publish($cid = array(), $publish = 1)
	{
		if (count( $cid ))
		{
			JArrayHelper::toInteger($cid);
			$cids = implode( ',', $cid );

			$query = 'UPDATE #__sphcoursedb_courses'
				. ' SET published = '.(int) $publish
				. ' WHERE id IN ( '.$cids.' )';
			$this->_db->setQuery( $query );
			if (!$this->_db->query()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}
		return true;
	}
	

}