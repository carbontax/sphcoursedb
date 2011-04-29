<?php
/**
 * Course View for Administrator
 * SPH Course DB Component
 * Course Section
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

		$db =&JFactory::getDBO();
		$query = "SELECT id AS value, name AS text "
		. "FROM #__sphcoursedb_series ORDER BY name";
		$db->setQuery($query);
		$results = $db->loadObjectList();
		$select_series = JHTML::_('select.genericlist',$results,'series_id',
                'class="inputbox"','value','text',$course->series_id);

		$this->assignRef('select_series', $select_series);

		parent::display($tpl);
	}
}