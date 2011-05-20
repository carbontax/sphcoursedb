<?php
/**
 * Front end model for Series
 *
 * @package    ca.utoronto.med.sph
 * @license GNU/GPL
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.model' );

/**
 * Series Model
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 */
class SPHCourseDBModelSeriesList extends JModel
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
		$query = ' SELECT * '
		. ' FROM #__sphcoursedb_series'
		. ' WHERE published=1';
		return $query;
	}

	/**
	 * Retrieves the hello data
	 * @return array Array of objects containing the data from the database
	 */
	function getData()
	{
		// Lets load the data if it doesn't already exist
		if (empty( $this->_data ))
		{
			$query = $this->_buildQuery();
			$this->_data = $this->_getList( $query );
		}

		return $this->_data;
	}
}