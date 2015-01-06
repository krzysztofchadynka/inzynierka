<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelRoles extends JModelList
{
    protected function getListQuery() 
    {
        // create a new query object
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('role_id, name')->from('#__roles_role');
        
        return $query;
    }
}