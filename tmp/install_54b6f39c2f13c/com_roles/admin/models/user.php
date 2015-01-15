<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modeladmin');

class RolesModelUser extends JModelAdmin
{
    public function getTable($type = 'User', $prefix = 'JTable', $config = array()) 
    {
        return JTable::getInstance($type, $prefix, $config);
    }
    
    public function getForm($data = array(), $loadData = true) 
    {
        // get the form
        $form = $this->loadForm('com_roles.user', 'user', 
                array('control' => 'jform', 'load_data' => $loadData));
        
        if (empty($form))
            return false;
        
        return $form;
    }
    
    protected function loadFormData() 
    {
        // check the session for previously entered form data.
        $data = JFactory::getApplication()->getUserState('com_roles.edit.user.data', array());
        
        if (empty($data))
            $data = $this->getItem();
        
        return $data;
    }
}