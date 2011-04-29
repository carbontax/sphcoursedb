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
		$doc =& JFactory::getDocument();
		$model =& $this->getModel('series');
		$series = $this->get('Data');

		$doc->setTitle(JText::_('Courses'));

		$db =& JFactory::getDBO();
		$query = 'SELECT id, name, number, '
		. 'CONCAT("index.php?option=com_sphcoursedb&controller=course&cid=",id) as link '
		. 'FROM #__sphcoursedb_courses '
		. ' WHERE series_id=' . $series->id
		. ' ORDER BY name';

		$db->setQuery($query);
		$courses = $db->loadObjectList();

		$this->assignRef('series',$series);
		$this->assignRef('courses',$courses);
		parent::display($tpl);
	}
}