<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.model');

class SPHCourseDBModelCourse extends JModel {
	var $_data;
	/**
	 * 
	 * Currently a test method. Returns name of first course
	 */
	function getName() {
		if ( empty($this->_data)) {
			$db =& JFactory::getDBO();
			$db->setQuery('SELECT name FROM #__sphcoursedb_courses');
			$this->_data = $db->loadResult();
		}
		return $this->_data;
	}
	
	function test() {
		return "foo";
	}
}