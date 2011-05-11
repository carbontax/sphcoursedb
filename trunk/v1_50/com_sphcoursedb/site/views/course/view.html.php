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

		$model =& $this->getModel('course');

		$course =& $this->get('Data');
		$this->assignRef('course',$course);

		$syllabus_link = "";
		$syllabus_details = "";
		if ( $course->syllabus_size > 0 ) {
			$syllabus_link = JHTML::link('index.php?option=com_sphcoursedb&controller=course&task=syllabus&cid[]=' . $course->id,
			$course->syllabus_name,
			array('target' => '_blank'));
			$syllabus_details = "(Type: " . $course->syllabus_type
			. "; Size: " . $course->syllabus_size/1024 . " KB)";
		}
		$this->assignRef('syllabus_link', $syllabus_link);
		$this->assignRef('syllabus_details', $syllabus_details);
		
		$coordinator =& $this->get('Coordinator');
		$this->assignRef('coordinator', $coordinator);
		
		$instructors =& $this->get('Instructors');
		$this->assignRef('instructors',$instructors);

		parent::display($tpl);
	}
}