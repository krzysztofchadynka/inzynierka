<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modeladmin');

class RolesModelRole extends JModelAdmin
{
    public function getTable($type = 'Role', $prefix = 'RolesTable', $config = array()) 
    {
        return JTable::getInstance($type, $prefix, $config);
    }
    
    public function getForm($data = array(), $loadData = true) 
    {
        // get the form 
        $form = $this->loadForm('com_roles.role', 'role', array('control' => 'jform', 'load_data' => $loadData));
        
        if (empty($form))
            return false;
        
        return $form;
    }
    
    protected function loadFormData() 
    {
        $data = JFactory::getApplication()->getUserState('com_roles.edit.role.data', array());
        
        if (empty($data))
            $data = $this->getItem();
        
        return $data;
    }
    
    public function getCategories()
    {
        $model = JModelLegacy::getInstance('Categories', 'RolesModel', array('ignore_request' => true));
        
        return $model->getItems();
    }
}