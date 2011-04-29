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
		$this->assignRef('course',$course);
		
/*		$this->assignRef('name', $this->get('name'));
		$this->assignRef('number', $this->get('number'));
		$this->assignRef('instructor', $this->get('instructor'));
		$this->assignRef('prerequisites', $this->get('prerequisites'));
		$this->assignRef('description', $this->get('description'));
		$this->assignRef('objectives', $this->get('objectives'));
		$this->assignRef('course_format', $this->get('course_format')); */

		parent::display($tpl);
	}
}