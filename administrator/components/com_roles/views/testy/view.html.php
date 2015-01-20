<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewTesty extends JViewLegacy
{
    function display($tpl = null) 
    {
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        
        $this->addToolBar();
        
        parent::display($tpl);
    }
    
    protected function addToolBar() 
    {
        JToolBarHelper::title(JText::_('COM_ROLES_MANAGER_TESTY'));
        JToolBarHelper::deleteList('', 'testy.delete');
        JToolBarHelper::editList('test.edit');
        JToolBarHelper::addNew('test.add');
    }
}