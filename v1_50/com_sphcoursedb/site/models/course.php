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
			$query = 'SELECT id, series_id, name, number, designation, coordinator_id, '
			. ' instructors, instructor_details, prereqs, description, '
			. ' objectives, course_format, syllabus_name, syllabus_type, '
			. ' syllabus_size '
			.'FROM `#__sphcoursedb_courses`'
			. ' WHERE published=1 AND id=' . $this->_id;
			$this->_db->setQuery($query);
			$this->_data = $this->_db->loadObject();
		}
		if ( !$this->_data ) {
			$this->_data = new stdClass();
			$this->_id = 0;
			$this->_data->series_id = null;
			$this->_data->name = null;
			$this->_data->number = null;
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
			$this->_coordinator = null;
			$this->_instructors = array();
		}
		return $this->_data;
	}

	function &getCoordinator() {
		if ( empty($this->_coordinator) && $this->_data->coordinator_id ) {
			$c =& JModel::getInstance('instructor','SPHCourseDBModel');
			$c->setId($this->_data->coordinator_id);
			$this->_coordinator =& $c->getData();
		}
		return $this->_coordinator;
	}

	function &getInstructors() {
		if ( ! count($this->_instructors) && $this->_data->instructors ) {
			$instructor_ids = explode(',',$this->_data->instructors);
			foreach ( $instructor_ids as $i ) {
				$c =& JModel::getInstance('instructor','SPHCourseDBModel');
				$c->setId($i);
				$this->_instructors[] =& $c->getData();
			}
			return $this->_instructors;
		}
		return $this->_instructors;
	}
}