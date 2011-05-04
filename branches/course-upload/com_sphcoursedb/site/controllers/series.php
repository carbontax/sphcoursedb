<?php
/**
 * @package    ca.utoronto.med.sph
 * @license    GNU/GPL
 */

// No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class SPHCourseDBControllerSeries extends SPHCourseDBController
{
	/**
	 * Method to display the view
	 *
	 * @access    public
	 */
	function display()
	{
		JRequest::setVar('view','series');
		parent::display();
	}

}