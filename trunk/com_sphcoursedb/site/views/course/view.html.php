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
		$message = "School of Public Health courses view";
		$this->assignRef('message', $message);
		
		$model =& $this->getModel('course');
		$this->assignRef('course', $this->get('Name'));
		parent::display($tpl);
	}
}