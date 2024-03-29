<?php
/**
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 * @license    GNU/GPL
 */
 
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');
 
/**
 * SPH Course DB Series List Controller
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 */
class SPHCourseDBControllerSeriesList extends JController
{
    /**
     * Method to display the view
     *
     * @access    public
     */
    function display()
    {
    	JRequest::setVar('view','serieslist');
        parent::display();
    }
 
}