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
		$course =& $this->get('Data');
		$isNew = ($course->id < 1);

		$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );
		JToolBarHelper::title(   JText::_( 'Course' ).': <small><small>[ ' . $text.' ]</small></small>' );
		JToolBarHelper::save();
		if ($isNew)  {
			JToolBarHelper::cancel('cancel', 'Cancel');
		} else {
			// for existing items the button is renamed `close`
			JToolBarHelper::cancel( 'cancel', 'Close' );
		}

		$this->assignRef('course', $course);

		//create select element for course designation
		$designation_options = array();
		foreach (  array('F','H','L','M','n','&deg;','S','Y') as $designation ) {
			$designation_options[] = JHTML::_('select.option',$designation,$designation);
		}
		$select_designation = JHTML::_('select.genericlist',$designation_options,
		'designation', 'class="inputbox"', 'value', 'text', $course->designation);
		$this->assignRef('select_designation', $select_designation);

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
		$coordinator_opts[] = JHTML::_('select.option','','-- Choose a Faculty Member --');
		foreach($results as $k => $v) {
			$coordinator_opts[] = JHTML::_('select.option',$v->value,JText::_($v->text));
		}
		$select_coordinator = JHTML::_('select.genericlist',$coordinator_opts,'coordinator_id',
                'class="inputbox"','value','text',$course->coordinator_id);
		$this->assignRef('select_coordinator', $select_coordinator);

		// populate multiple select input for instructors
		$coordinator_opts[0] = JHTML::_('select.option','','-- Choose one or more Faculty Members --');
/*		$select_instructors = JHTML::_('select.genericlist',$results,'instructors[]',
                'class="inputbox" multiple="multiple"','value','text',explode(',',$course->instructors));*/
		$select_instructors = JHTML::_('select.genericlist',$coordinator_opts,'instructors[]',
		'class="inputbox" multiple="multiple"', 'value', 'text', explode(',',$course->instructors));
		$this->assignRef('select_instructors', $select_instructors);

		parent::display($tpl);
	}
}