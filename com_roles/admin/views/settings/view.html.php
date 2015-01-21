<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewSettings extends JViewLegacy
{
    private function showErrors($errors)
    {
        if (count($errors))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
    }

    protected function addToolBar() 
    {
        JToolBarHelper::title(JText::_('COM_ROLES_MANAGER_SETTINGS'));
        JToolBarHelper::editList('setting.edit');
    }
    
    public function display($tpl = null) 
    {
        $this->items = $this->get('Items');
        $this->showErrors($this->get('Errors'));
        $this->addToolBar();
        
        parent::display($tpl);
    }
}