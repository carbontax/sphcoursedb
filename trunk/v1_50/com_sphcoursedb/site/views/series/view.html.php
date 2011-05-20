<?php
/**
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 * @license    GNU/GPL
 */

// No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.view');

/**
 * SPH Course DB Component Controller
 * List of Courses in a Series
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 */
class SPHCourseDBViewSeries extends JView
{
	function display($tpl =  NULL) {
//		$doc =& JFactory::getDocument();
//		$model =& $this->getModel('series');
		$items = $this->get('Data');

//		$doc->setTitle(JText::_($items->series_name . ' Courses'));

//		$db =& JFactory::getDBO();

		$this->assignRef('items',$items);
		parent::display($tpl);
	}
}