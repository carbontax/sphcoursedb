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
 * SPH Course DB Component Controller
 *
 * @package    ca.utoronto.med.sph
 * @subpackage Components
 */
class SPHCourseDBController extends JController
{
    /**
     * Method to display the view
     *
     * @access    public
     */
    function display()
    {
    	JRequest::setVar('view','course');
        parent::display();
    }
 
}