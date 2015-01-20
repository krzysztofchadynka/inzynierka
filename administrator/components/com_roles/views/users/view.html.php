<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewUsers extends JViewLegacy
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
        JToolBarHelper::title(JText::_('COM_ROLES_MANAGER_USERS'));
        JToolBarHelper::deleteList('', 'users.delete');
        JToolBarHelper::editList('user.edit');
        JToolBarHelper::addNew('user.add');
    }
    
    function display($tpl = null) 
    {
        $this->showErrors($this->get('Errors'));
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->addToolBar();
        parent::display($tpl);
    }
}