<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelCategories extends JModelList
{   
    protected function getListQuery() 
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('r.name AS role_name, c.title AS category_name')
                ->from('#__roles_role r, #__categories c')
                ->join('LEFT', '#__roles_categories rc '
                        . 'ON rc.category_id=c.id')
                ->where('r.role_id=rc.role_id');
        
        return $query;
    }
}