<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');

class RolesModelCategories extends JModelList
{
    protected function getListQuery() 
    {	
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('id, title')->from('#__categories');
        
        return $query;
    }
}