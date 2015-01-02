<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modeladmin');

class RolesModelRoles extends JModelAdmin
{
    public function getTable($type = 'Roles', $prefix = 'RolesTable', $config = array()) 
    {
        return JTable::getInstance($type, $prefix, $config);
    }
    
    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm('com_roles.roles', 'roles', array('control' => 'jform', 'load_data' => $loadData));
        
        if (empty($form))
            return false;
        
        return $form;
    }
    
    protected function loadFormData() {
        $data = JFactory::getApplication()->getUserState('com_roles.edit.roles.data', array());
        
        if (empty($data))
            $data = $this->getItem();
        
        return $data;
    }
}