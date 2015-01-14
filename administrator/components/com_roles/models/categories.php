<?php
defined('_JEXEC') or die('Restricted access');

class RolesModelCategories extends JModelList
{
    protected function getListQuery() 
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        
        $query->select('r.name AS role, c.title AS category')->from('#__roles_role AS r, #__categories AS c')
                ->join('LEFT', '#__roles_categories AS rc ON rc.role_id=r.role_id'
                        . ' AND rc.category_id=c.id');
        
        //die($query);
        
        return $query;
    }
}