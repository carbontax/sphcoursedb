<?php
/**
 * Administrator model for Courses
 * 
 * @package    ca.utoronto.med.sph
 * @subpackage Components
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
        $query = ' SELECT c.*,s.name as series_name '
            . ' FROM #__sphcoursedb_courses c, #__sphcoursedb_series s '
            . ' WHERE c.series_id=s.id'
        ;
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