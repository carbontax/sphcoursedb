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

class SPHCourseDBControllerCourse extends SPHCourseDBController
{
	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();
		JRequest::setVar( 'view', 'course' );
		
		// Register Extra tasks
		$this->registerTask( 'add', 'edit' );
	}

	/**
	 * display the edit form
	 * @return void
	 */
	function edit()	{
		JRequest::setVar( 'layout', 'form'  );
		JRequest::setVar( 'hidemainmenu', 1 );

		parent::display();
	}

	function save()	{
		$model = $this->getModel('course');
		$msg = JText::_('Error saving course');
		if ( $model->store() ) {
			$msg = JText::_('Course saved');
		}
			
		$this->setRedirect('index.php?option=com_sphcoursedb',$msg);
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
}