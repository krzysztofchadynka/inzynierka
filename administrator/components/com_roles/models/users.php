<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelUsers extends JModelList
{
    protected function getListQuery()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('ru.id, u.name AS user_name, ru.user_id, ru.role_id, rr.name AS role_name')
                ->from('#__roles_user ru')
                ->leftJoin('#__users u '
                        . 'ON u.id=ru.user_id')
                ->leftJoin('#__roles_role rr '
                        . 'ON rr.role_id=ru.role_id');
        
        return $query;
    }
}