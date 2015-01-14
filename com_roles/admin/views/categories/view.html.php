<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewCategories extends JViewLegacy
{
    private function getData()
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
    }
    
    private function checkForErrors($errors)
    {
        if (count($errors))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
    }
    
    public function display($tpl = null) 
    {
        $this->getData();
        $this->checkForErrors($this->get('Errors'));
        
        parent::display($tpl);
    }
}