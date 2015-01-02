<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewUsers extends JViewLegacy
{
    private function getVariables($items ,$pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
        $this->msg = $this->get('Msg');
        $this->users = $this->get('Users');
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
       
        parent::display($tpl);
    }
    
    protected function addToolBar()
    {
        JToolbarHelper::title(JText::_('COM_ROLES_MANAGER_USERS'));
        JToolbarHelper::deleteList('', 'users.delete');
        JToolbarHelper::editCss('users.edit');
        JToolbarHelper::addNew('users.add');
    }
}