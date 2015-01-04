<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRoles extends JViewLegacy
{
    private function displayErrors()
    {
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
    }
    
    function display($tpl = null) 
    {
        $items = $this->get('Items');
        $this->displayErrors();
        $this->items = $items;
        
        parent::display($tpl);
    }
}