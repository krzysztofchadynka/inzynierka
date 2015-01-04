<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controlleradmin');

class RolesControllerUsers extends JControllerAdmin
{
    public function getModel($name = 'Roles', $prefix = 'RolesModel') 
    {
        parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}