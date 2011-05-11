<?php
/**
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 * @license    GNU/GPL
 */
 
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');
 
/**
 * SPH Course DB Series List Controller
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 */
class SPHCourseDBControllerCourse extends SPHCourseDBController
{
    /**
     * Method to display the view
     *
     * @access    public
     */
    function display()
    {
//    	JRequest::setVar('view','course');
//        parent::display();
		$view =& $this->getView('course','html');
		$view->setModel($this->getModel('course','SPHCourseDBModel'),true);
		$view->setLayout('default');
		$view->display();
    	
    }
    
	/**
	 * @todo Move this task into a helper available to both admin and site controllers
	 * Handle resolving 'syllabus' task into a file download stream
	 */
	function syllabus() {
		JTable::addIncludePath(JPATH_COMPONENT_ADMINISTRATOR.DS.'tables');
		$course =& JTable::getInstance('course','Table');
		$ids = JRequest::getVar('cid',array(0),'get','array');
		$course->load($ids[0]);
		$filename = $course->get('syllabus_name');
		$size = $course->get('syllabus_size');
		$type = $course->get('syllabus_type');
		if ( $filename ) {
			header('Content-Disposition: attachment; filename="'.$filename.'"');
			header('Content-Length: '.$size);
			header('Connection: close');
			header('Content-Type: ' . $course->get('syllabus_type') . '; name="'.$filename .'"');
			header('Cache-Control: store, cache');
			header('Pragma: cache');
			echo stripslashes($course->get('syllabus_content'));
			exit;
		}
		else {
			JError::raiseWarning('FILE_NOT_FOUND','Could not find the syllabus document: '
			. $course->get('syllabus_name'));
		}
	}
}