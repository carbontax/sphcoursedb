<?php
/**
 * Administrator model for Course detail
 */
jimport('joomla.filesystem.file');

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class SPHCourseDBControllerCourse extends JController
{
	var $post = array();
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
		JRequest::checkToken() or jexit('Invalid token');
		$msg = array();

		//special handling for editor fields
		$this->post = JRequest::get('post');
		$this->post['instructor_details'] = JRequest::getVar('instructor_details','','post','string',JREQUEST_ALLOWRAW);
		$this->post['prereqs'] = JRequest::getVar('prereqs','','post','string',JREQUEST_ALLOWRAW);
		$this->post['description'] = JRequest::getVar('description','','post','string',JREQUEST_ALLOWRAW);
		$this->post['objectives'] = JRequest::getVar('objectives','','post','string',JREQUEST_ALLOWRAW);
		$this->post['course_format'] = JRequest::getVar('course_format','','post','string',JREQUEST_ALLOWRAW);

		// handle multiple select values for instructors
		$this->post['instructors'] = implode(',',$this->post['instructors']);

		/* Handle File Upload */
		$file = $_FILES['file_upload'];
		if ($file['error']) {
			$msg[] = $file['error'];
			$this->clearSyllabus();
		} else {
			//Clean up filename to get rid of strange characters like spaces etc
			$this->post['syllabus_name'] = JFile::makeSafe($file['name']);
			$this->post['syllabus_type'] = $file['type'];
			$this->post['syllabus_size'] = $file['size'];
			$src = $file['tmp_name'];

			$params = JComponentHelper::getParams('com_sphcoursedb');

			if ( $this->post->syllabus_size > $params->get('syllabus_maxsize') ) {
				$this->clearSyllabus();
				$msg[] = JText::_('Syllabus file was not saved. It is too large')
				. " (" . $params->get('syllabus_maxsize') . ")";
			}
			else {
				//todo -- fix this control flow ugliness
				$ext = strtolower(JFile::getExt($this->post['syllabus_name']));
				$syllabus_exts = $params->get('syllabus_exts');
				$allowed = explode(';',$syllabus_exts);
				if ( in_array($ext, $allowed) ) {
					$fp = fopen($src, 'r');
					$content = fread($fp,$file['size']);
					$this->post['syllabus_content'] = addslashes($content);
					$msg[] = JText::_('New syllabus file uploaded');
				} else {
					$this->clearSyllabus();
					$msg[] = JText::_('Syllabus file was not saved due to unaccepted file extension')
					. " (" . $ext . ")";
				}
			}
		}
		$model = $this->getModel('course');
		$msg[] = JText::_('Error saving course');

		if ( $model->store($this->post) ) {
			$msg[count($msg)-1] = JText::_('Course saved');
		}
		$this->setRedirect('index.php?option=com_sphcoursedb',implode(". ", $msg));
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

	function clearSyllabus() {
		$this->post['syllabus_name'] = null;
		$this->post['syllabus_type'] = null;
		$this->post['syllabus_size'] = null;
		$this->post['syllabus_content'] = null;
	}
}
