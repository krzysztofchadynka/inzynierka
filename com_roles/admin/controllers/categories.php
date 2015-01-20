<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controlleradmin');

class RolesControllerCategories extends JControllerAdmin
{
    public function getModel($name = 'Category', $prefix = 'RolesModel') 
    {
        return parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}