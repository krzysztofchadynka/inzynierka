<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controlleradmin');

class RolesControllerSettings extends JControllerAdmin
{
    public function getModel($name = 'Settings', $prefix = 'RolesModel') 
    {
        $model = parent::getModel($name, $prefix, array('ignore_request' => true));
        return $model;
    }
}