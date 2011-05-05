<?php
// no direct access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.filesystem.folder');

// create a folder inside your images folder
if(JFolder::create(JPATH_ROOT.DS.'images'.DS.'sphcoursedb')) {
   echo "Folder created successfully";
} else {
   echo "Unable to create folder";
} ?>