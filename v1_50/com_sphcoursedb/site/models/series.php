<?php
/**
 * Series Model for SPH Course DB Component
 *
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.model' );

class SPHCourseDBModelSeries extends JModel
{
	/**
	 * Series data array
	 *
	 * @var array
	 */
	var $_data;
	var $_courses;
	var $_id;

	function __construct() {
		parent::__construct();
			
		$array = JRequest::getVar('cid',0,'','array');
		$this->setId((int)$array[0]);
	}

	/**
	 * Set the Series identifier
	 *
	 * @access public
	 * @param int Series identifier
	 * @return void
	 */
	function setId($id) {
		$this->_id = $id;
		$this->_data = null;
		$this->_courses = array();
	}

	function &getData() {

		if ( empty($this->_data) )
		{
			$query = "SELECT * FROM `#__sphcoursedb_series` WHERE id=" . $this->_id;
			$this->_db->setQuery($query);
			$this->_data = $this->_db->loadObject();
		}
		return $this->_data;
	}

	function &getCourses() {
		if ( ! count($this->_courses) ) {
			$query = 'SELECT CONCAT("index.php?option=com_sphcoursedb&controller=course&cid=",id) as link,'
			. ' name, number, designation FROM `#__sphcoursedb_courses` '
			. ' WHERE series_id=' . $this->_id
			. ' ORDER BY number';
			$this->_db->setQuery($query);
			$this->_courses = $this->_db->loadObjectList();
		}
		return $this->_courses;
	}

}
