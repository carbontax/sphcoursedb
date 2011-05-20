<?php
/**
 * Administrator model for Series detail
 *
 * @package    ca.utoronto.med.sph
 * @link http://sph.med.utoronto.ca
 * @license             GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class SPHCourseDBControllerSeries extends SPHCourseDBController
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
		JRequest::setVar( 'view', 'series' );
		JRequest::setVar( 'layout', 'form'  );
		JRequest::setVar( 'hidemainmenu', 1 );

		parent::display();
	}

	function save()	{
		JRequest::checkToken() or jexit("Invalid token.");
		$model = $this->getModel('series');
		$msg = JText::_('Error saving series');
		if ( $model->store() ) {
			$msg = JText::_('Series saved');
		}
		$this->setRedirect('index.php?option=com_sphcoursedb&controller=serieslist',$msg);
	}

	function remove() {

		$model = $this->getModel('series');

		$msg = JText::_('Error removing series');
		if ( $model->delete() ) {
			$msg = JText::_('Series removed');
		}

		$this->setRedirect('index.php?option=com_sphcoursedb&controller=serieslist',$msg);
	}

	function cancel() {
		$this->setRedirect('index.php?option=com_sphcoursedb&controller=serieslist','Operation cancelled');
	}

	function publish()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);

		if (count( $cid ) < 1) {
			JError::raiseError(500, JText::_( 'Select an item to publish' ) );
		}

		$model = $this->getModel('series');
		if(!$model->publish($cid, 1)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}

		$this->setRedirect( 'index.php?option=com_sphcoursedb&controller=serieslist' );
	}
	
	function unpublish()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);

		if (count( $cid ) < 1) {
			JError::raiseError(500, JText::_( 'Select an item to publish' ) );
		}

		$model = $this->getModel('series');
		if(!$model->publish($cid, 0)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}

		$this->setRedirect( 'index.php?option=com_sphcoursedb&controller=serieslist' );
	}
	
}