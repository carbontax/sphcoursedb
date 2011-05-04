<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.view' );

/**
 * Courses View
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 * @license GNU/GPL
 */
class SPHCourseDBViewCourses extends JView
{
	/**
	 * Courses view display method
	 * @return void
	 **/
	function display($tpl = null)
	{
		JToolBarHelper::title( JText::_( 'SPH Courses' ), 'generic.png' );
		JToolBarHelper::deleteList();
		JToolBarHelper::editListX();
		JToolBarHelper::addNewX();

		// Get data from the model
		$items =& $this->get( 'Data');

		$this->assignRef( 'items', $items );

		parent::display($tpl);
	}
}