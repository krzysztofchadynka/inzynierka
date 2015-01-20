<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controller');

// required helper file
JLoader::register('RolesHelper', dirname(__FILE__).DS.'helpers'.DS.'roles.php');
JFactory::getDocument()->addStyleSheet(JURI::root().'administrator/components/com_roles/css/style.css');

// get an instance of the controller prefixed by Roles
$controller = JControllerLegacy::getInstance('Roles');

// perform the request task and execute request task
$controller->execute(JFactory::getApplication()->input->getCmd('task'));

JLoader::register('RolesHelper', __DIR__ . '/helpers/roles.php');

// redirect if set by the controller
$controller->redirect();