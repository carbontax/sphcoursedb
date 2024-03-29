<?php
/**
 * Administrator model for Series
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
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
		. ' FROM #__sphcoursedb_series';
		return $query;
	}

	/**
	 *
	 * This is available for extension to support filtering. See com_weblinks
	 */
	function _buildContentWhere()
	{
		$where[] = 'published = 1';
		$where 		= ( count( $where ) ? ' WHERE '. implode( ' AND ', $where ) : '' );
		return $where;
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