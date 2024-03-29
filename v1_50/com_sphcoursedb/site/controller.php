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
 * SPH Course DB Component Controller
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 */
class SPHCourseDBController extends JController
{
	function __construct() {
		parent::__construct();
		
//		$this->addModelPath(JPATH_COMPONENT_ADMINISTRATOR.DS.'models');
		if ( ! JRequest::getVar('view') ) {
			JRequest::setVar('view','serieslist');
		}
	}
	/**
	 * Method to display the view
	 *
	 * @access    public
	 */
	function display()
	{
/*		if ( ! JRequest::getVar('view') ) {
			JRequest::setVar('view','serieslist');
		} */
		parent::display();
	}

}