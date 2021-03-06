<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modeladmin');

class RolesModelUser extends JModelAdmin
{
    protected $roles, $users;
    
    public function getTable($type = 'User', $prefix = 'RolesTable', $config = array()) 
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getForm($data = array(), $loadData = true) 
    {
        $form = $this->loadForm('com_roles.user', 'user',
                                array('control' => 'jform', 'load_data' => $loadData));
        if (empty($form)) 
        {
            return false;
        }
        return $form;
    }

    protected function loadFormData() 
    {
        $data = JFactory::getApplication()->getUserState('com_roles.edit.user.data', array());
        if (empty($data)) 
        {
            $data = $this->getItem();
        }
        return $data;
    }
    
    public function getRoles()
    {
        $db = JFactory::getDbo();
        $query = "SELECT role_id, name FROM #__roles_role";
        $db->setQuery($query);
        
        return $db->loadRowList();
    }
    
    public function getUsers()
    {
        $db = JFactory::getDbo();
        $query = "SELECT id, username FROM #__users";
        $db->setQuery($query);
        
        return $db->loadRowList();
    }
}