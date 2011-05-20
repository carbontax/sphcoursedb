<?php
/**
 * Administrator model for Courses
 *
 * @package    ca.utoronto.med.sph
 * @license GNU/GPL
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.model' );

/**
 * Courses Model
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 */
class SPHCourseDBModelCourses extends JModel
{
	/**
	 * Courses data array
	 *
	 * @var array
	 */
	var $_data;

	/**
	 * Returns the query
	 * @return string The query to be used to retrieve the rows from the database
	 */
	function _buildQuery()
	{
		$query = ' SELECT  c.id as id, c.name as course_name, c.number as course_number,'
		. ' c.published as published, '
		. ' s.name as series_name, s.id as series_id '
		. ' FROM #__sphcoursedb_courses c, #__sphcoursedb_series s '
		. ' WHERE c.series_id=s.id'
		;
		return $query;
	}

	/**
	 * Retrieves a list of Courses
	 * @return array Array of Course objects from the database
	 */
	function getList()
	{
		if (empty( $this->_data ))
		{
			$query = $this->_buildQuery();
			$this->_data = $this->_getList( $query );
		}
		return $this->_data;
	}
}