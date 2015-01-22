<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelCategories extends JModelList
{   
    protected $categories;
    
    protected function getListQuery() 
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        
        $query->select('rc.id, rc.role_id AS role_id, '
                . 'rc.category_id AS category_id, '
                . 'r.name AS role_name, c.title AS category_name')
              ->from('#__roles_categories rc')
              ->leftJoin('#__roles_role r '
                      . 'ON r.role_id=rc.role_id')
              ->leftJoin('#__categories c '
                      . 'ON c.id=rc.category_id');
        
        return $query;
    }
}