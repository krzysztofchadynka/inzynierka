<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelUsers extends JModelList
{
    protected function getListQuery()
    {   
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('id, username')->from('#__users');
        
        return $query;
    }
}