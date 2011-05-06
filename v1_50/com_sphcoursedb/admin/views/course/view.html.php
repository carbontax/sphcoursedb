<?php
/**
 * Course View for Administrator
 * SPH Course DB Component
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class SPHCourseDBViewCourse extends JView
{
	/**
	 * display method of Hello view
	 * @return void
	 **/
	function display($tpl = null)
	{
		//get the hello
		$course =& $this->get('Data');
		$isNew = ($course->id < 1);

		$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );
		JToolBarHelper::title(   JText::_( 'Course' ).': <small><small>[ ' . $text.' ]</small></small>' );
		JToolBarHelper::save();
		if ($isNew)  {
			JToolBarHelper::cancel();
		} else {
			// for existing items the button is renamed `close`
			JToolBarHelper::cancel( 'cancel', 'Close' );
		}

		$this->assignRef('course', $course);

		$syllabus_link = "No syllabus file uploaded";
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

		/* populate 'series_id' select input options */
		$db =&JFactory::getDBO();
		$query = "SELECT id AS value, name AS text "
		. "FROM #__sphcoursedb_series ORDER BY name";
		$db->setQuery($query);
		$results = $db->loadObjectList();
		$select_series = JHTML::_('select.genericlist',$results,'series_id',
                'class="inputbox"','value','text',$course->series_id);
		
		$this->assignRef('select_series', $select_series);
		
		$query = "SELECT id AS value, CONCAT(lastname,\", \",firstname) AS text "
		. "FROM #__comprofiler ORDER BY lastname";
		$db->setQuery($query);
		$results = $db->loadObjectList();
		$select_coordinator = JHTML::_('select.genericlist',$results,'coordinator_id',
                'class="inputbox"','value','text',$course->coordinator_id);
		$this->assignRef('select_coordinator', $select_coordinator);

		parent::display($tpl);
	}
}