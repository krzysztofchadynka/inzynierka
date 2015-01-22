<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modeladmin');

class RolesModelCategory extends JModelAdmin
{
    protected $categories, $roles;
    
    public function getTable($type = 'Categories', $prefix = 'RolesTable', $config = array()) 
    {   
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getForm($data = array(), $loadData = true) 
    {
        $form = $this->loadForm('com_roles.category', 'category',
                                array('control' => 'jform', 'load_data' => $loadData));
        if (empty($form)) 
        {
            return false;
        }
        return $form;
    }

    protected function loadFormData() 
    {
        $data = JFactory::getApplication()->getUserState('com_roles.edit.category.data', array());
        if (empty($data)) 
        {
            $data = $this->getItem();
        }
        return $data;
    }
    
    public function getCategories()
    {
        $db = JFactory::getDbo();
        $query = "SELECT id, title FROM #__categories";
        $db->setQuery($query);
        
        return $db->loadRowList();
    }
    
    public function getRoles()
    {
        $db = JFactory::getDbo();
        $query = "SELECT role_id, name FROM #__roles_role";
        $db->setQuery($query);
        
        return $db->loadRowList();
    }
}