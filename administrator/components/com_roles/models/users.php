<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelUsers extends JModelList
{
    protected function getListQuery()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('ru.id AS id, u.username AS user_name, rr.name AS role_name')
                ->from('#__roles_user ru')
                ->leftJoin('#__users u '
                        . 'ON ru.user_id=u.id')
                ->leftJoin('#__roles_role rr '
                        . 'ON ru.role_id=rr.role_id');
        
        return $query;
    }
}