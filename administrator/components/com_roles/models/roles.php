<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelRoles extends JModelList
{
    protected function getListQuery() 
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery('true');
        $query->select('*')->from('#__roles_role');
        
        return $query;
    }
} 