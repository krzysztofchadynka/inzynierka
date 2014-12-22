<?php 
defined('_JEXEC') or die('Restricted access'); 

// get instance of the controller prefixed by Roles
$controller = JControllerLegacy::getInstance('Roles');

// perform the request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// redirect if set the controller
$controller->redirect();