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
	}

	function &getData() {

		if ( empty($this->_data) ) {
			$query = 'SELECT s.id as series_id, s.name as series_name, s.description as series_description,'
			. ' CONCAT("index.php?option=com_sphcoursedb&controller=course&cid=",c.id) as course_link,'
			. ' c.name as course_name, c.number as course_number'
			. ' FROM `#__sphcoursedb_series` AS s, `#__sphcoursedb_courses` AS c'
			. ' WHERE c.series_id=s.id AND s.published=1 AND c.published=1 AND s.id=' . $this->_id;
			$this->_db->setQuery($query);
			$this->_data = $this->_db->loadObject();
		}
		if ( !$this->_data ) {
			$this->_data = new stdClass();
			$this->_id = 0;
			$this->_data->name = null;
			$this->_data->description = null;
		}
		return $this->_data;
	}

}