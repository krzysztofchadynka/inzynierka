<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewUsers extends JViewLegacy
{
    private function getVariables($items ,$pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
    
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
        $pagination = $this->get('Pagination');
        $this->displayErrors();
        $this->getVariables($items, $pagination);
        $this->addToolBar();
        
        parent::display($tpl);
    }
    
    // setting the toolbar
    protected function addToolBar()
    {
        JToolbarHelper::title(JText::_('COM_ROLES_MANAGER_USERS'));
        JToolbarHelper::deleteList('', 'users.delete');
        JToolbarHelper::editList('user.edit');
        JToolbarHelper::addNew('user.add');
    }
}