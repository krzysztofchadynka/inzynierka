<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modeladmin');

class RolesModelTest extends JModelAdmin
{   
    public function getTable($type = 'Test', $prefix = 'RolesTable', $config = array()) 
    {
        return JTable::getInstance($type, $prefix, $config);
    }    
    
    public function getForm($data = array(), $loadData = true) 
    {
        $form = $this->loadForm('com_roles.test', 'test', 
                array('control' => 'jform', 'load_data' => $loadData));
        
        if (empty($form)) 
        {
            return false;
        }
        
        return $form;
    }
    
    protected function loadFormData() 
    {
        // Check the session for previously entered form data.
        $data = JFactory::getApplication()->getUserState('com_roles.edit.test.data', array());
        if (empty($data)) 
        {
            $data = $this->getItem();
        }
        return $data;
    }    
}