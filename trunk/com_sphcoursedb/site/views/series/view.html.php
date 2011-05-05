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
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 */
class SPHCourseDBViewCourse extends JView
{
	function display($tpl =  NULL) {
		$model =& $this->getModel();
		$course = $this->get('Data');
		$this->assignRef('series', $series);
		parent::display($tpl);
	}
}