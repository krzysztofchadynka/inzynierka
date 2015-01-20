<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelTesty extends JModelList
{
    protected function getListQuery() 
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('id, name')->from('#__test');
        
        return $query;
    }
}