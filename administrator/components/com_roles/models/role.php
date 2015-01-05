<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modeladmin');

class RolesModelRole extends JModelAdmin
{
    public function getTable($type = 'RolesRole', $prefix = 'JTable', $config = array()) 
    {
        $table = JTable::getInstance($type, $prefix, $config);
        return $table;
    }
    
    public function getForm($data = array(), $loadData = true) 
    {
        // get the form
        $form = $this->loadForm('com_roles.role', 'role', 
                array('control' => 'jform', 'load_data' => $loadData));
        
        if (empty($form))
            return false;
        
        return $form;
    }
    
    protected function loadFormData() 
    {
        // check the session for previously entered form data.
        $data = JFactory::getApplication()->getUserState('com_roles.edit.role.data', array());
        
        if (empty($data))
            $data = $this->getItem();
        
        return $data;
    }
}