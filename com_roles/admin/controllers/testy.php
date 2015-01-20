<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controlleradmin');

class RolesControllerTesty extends JControllerAdmin
{
    public function getModel($name = 'Test', $prefix = 'RolesModel') 
    {
        $model = parent::getModel($name, $prefix, array('ignore_request' => true));
        return $model;
    }   
}