<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRoles extends JViewLegacy
{
    function display($tpl = null) 
    {
        // get data from the model
        $items = $this->get('Items');
        $pagination = $this->get('Pagination');
        
        // check for errors
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        
        // assign data to the view
        $this->items = $items;
        $this->pagination = $pagination;
        
        // set the toolbar
        $this->addToolBar();
        
        // display the template
        parent::display($tpl);
    }
    
    protected function addToolBar()
    {
        JToolbarHelper::title(JText::_('COM_ROLES_MANAGER_ROLES'));
        JToolbarHelper::deleteList('', 'roles.delete');
        JToolbarHelper::editList('role.edit');
        JToolbarHelper::addNew('role.add');
    }
}