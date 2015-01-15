<?php
defined ('_JEXEC') or die('Restricted access');

// get an instance of the controller prefixed by Roles
$controller = JControllerLegacy::getInstance('Roles');

// perform the request task and execute request task
$controller->execute(JFactory::getApplication()->input->getCmd('task'));

// redirect if set by the controller
$controller->redirect();