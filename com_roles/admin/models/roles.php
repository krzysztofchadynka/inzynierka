<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelRoles extends JModelList
{
    protected function getListQuery()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        
        $query->select('user_id, role_id')->from('#__roles_user');
        
        return $query;
    }
}