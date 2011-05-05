<?php
/**
 * Administrator model for Course detail
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_4
 * @license             GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class SPHCourseDBControllerCourse extends JController
{
	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();

		// Register Extra tasks
		$this->registerTask( 'add', 'edit' );
	}

	/**
	 * display the edit form
	 * @return void
	 */
	function edit()	{
		JRequest::setVar( 'view', 'course' );
		JRequest::setVar( 'layout', 'form'  );
		JRequest::setVar( 'hidemainmenu', 1 );

		parent::display();
	}

	function save()	{
		JRequest::checkToken() or jexit('Invalid Token');
		$msg = array();

		//special handling for editor fields
		$post = JRequest::get('post');
		$post['instructor'] = JRequest::getVar('instructor','','post','string',JREQUEST_ALLOWRAW);
		$post['prereqs'] = JRequest::getVar('prereqs','','post','string',JREQUEST_ALLOWRAW);
		$post['description'] = JRequest::getVar('description','','post','string',JREQUEST_ALLOWRAW);
		$post['objectives'] = JRequest::getVar('objectives','','post','string',JREQUEST_ALLOWRAW);
		$post['course_format'] = JRequest::getVar('course_format','','post','string',JREQUEST_ALLOWRAW);
		/* Handle File Upload */
		$file = $_FILES['file_upload'];
		if ($file['error']) {
			$msg[] = $file['error'];
		} else {
			jimport('joomla.filesystem.file');
			//Clean up filename to get rid of strange characters like spaces etc
			$post['syllabus_name'] = JFile::makeSafe($file['name']);
			$post['syllabus_type'] = $file['type'];
			$post['syllabus_size'] = $file['size'];
			$src = $file['tmp_name'];
			//		$dest = JPATH . DS . "images" . DS . "sphcoursedb" . DS . $filename;
			if ( strtolower(JFile::getExt($post['syllabus_name']) ) == 'doc') {
				$fp = fopen($src, 'r');
				$content = fread($fp,$file['size']);
				$post['syllabus_content'] = addslashes($content);
			} else {
				$msg[] = JText::_('Syllabus file is not an accepted file type.');
			}
		}
		$model = $this->getModel('course');
		$msg[] = JText::_('Error saving course');

		if ( $model->store($post) ) {
			$msg[count($msg)-1] = JText::_('Course saved');
		}
		$this->setRedirect('index.php?option=com_sphcoursedb',implode(" ", $msg));
	}

	function remove() {
		$model = $this->getModel('course');
		$msg = JText::_('Error removing course(s)');
		if ( $model->delete() ) {
			$msg = JText::_('Course(s) removed');
		}

		$this->setRedirect('index.php?option=com_sphcoursedb',$msg);
	}

	function cancel() {
		$this->setRedirect('index.php?option=com_sphcoursedb','Operation cancelled');
	}

	function syllabus() {
		$course =& JTable::getInstance('course');
		$course->load(JRequest::getVar('cid',0,'get','int'));
		if ( $course->get('syllabus_name') ) {
			header('Content-Disposition: attachment; filename='.$course->get('syllabus_name'));
			header('Content-Length: '.strlen($course->get('syllabus_size')));
			header('Connection: close');
			header('Content-Type: ' . $course->get('syllabus_type') . '; name='.$course->get('syllabus_name'));
			header('Cache-Control: store, cache');
			header('Pragma: cache');
		}
		else {
			JError::raiseWarning('FILE_NOT_FOUND','Could not find the syllabus document: '
			. $course->get('syllabus_name'));
		}
	}
}
