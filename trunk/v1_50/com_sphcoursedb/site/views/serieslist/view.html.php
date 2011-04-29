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
class SPHCourseDBViewSeriesList extends JView
{
	function display($tpl =  NULL) {
		$doc =& JFactory::getDocument();
		$doc->setTitle('Course Series List');
		
		$items =& $this->get( 'Data');

		$this->assignRef( 'items', $items );
		parent::display($tpl);
	}
}