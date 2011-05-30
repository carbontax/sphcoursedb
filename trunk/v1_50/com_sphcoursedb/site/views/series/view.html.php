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

		$series =& $this->get('Data');
		$courses =& $this->get('Courses');

		$this->assignRef('series',$series);
		$this->assignRef('courses',$courses);
		parent::display($tpl);
	}
}