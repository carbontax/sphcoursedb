<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.view' );

/**
 * Series List View
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 * @license GNU/GPL
 */
class SPHCourseDBViewSeriesList extends JView
{
	/**
	 * Courses view display method
	 * @return void
	 **/
	function display($tpl = null)
	{
		JToolBarHelper::title( JText::_( 'SPH Course Series List' ), 'generic.png' );
		JToolBarHelper::deleteList();
		JToolBarHelper::editListX();
		JToolBarHelper::addNewX();

		// Get data from the model
		$items =& $this->get( 'Data');

		$this->assignRef( 'items', $items );

		parent::display($tpl);
	}
}